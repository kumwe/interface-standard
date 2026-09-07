<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$manifest = json_decode(file_get_contents($root . '/composer.json'), true, 512, JSON_THROW_ON_ERROR);
$temporary = sys_get_temp_dir() . '/kumwe-' . basename($root) . '-' . bin2hex(random_bytes(6));
mkdir($temporary, 0700, true);
$run = static function (array $command, string $directory): void {
    $process = proc_open($command, [STDIN, STDOUT, STDERR], $pipes, $directory);
    if (!is_resource($process) || proc_close($process) !== 0) {
        throw new RuntimeException('Consumer command failed: ' . implode(' ', $command));
    }
};
$run(['composer', 'archive', '--format=zip', '--dir=' . $temporary, '--file=candidate', '--no-interaction'], $root);
$archive = $temporary . '/candidate.zip';
$package = $manifest;
unset($package['require-dev'], $package['autoload-dev'], $package['scripts'], $package['archive']);
$package['version'] = 'dev-candidate';
$package['dist'] = ['type' => 'zip', 'url' => 'file://' . $archive, 'shasum' => sha1_file($archive)];
$repositories = array_merge([['type' => 'package', 'package' => $package]], $manifest['repositories'] ?? []);
$require = [$manifest['name'] => 'dev-candidate'];
$sourceDependencies = json_decode(file_get_contents($root . '/resources/source-ci-dependencies.json'), true, 512, JSON_THROW_ON_ERROR);
$sourceRecords = [];
foreach ($sourceDependencies as $name => $dependency) {
    $require[$name] = $dependency['version'];
}
$consumer = ['name' => 'kumwe/isolated-consumer', 'require' => $require, 'repositories' => $repositories, 'minimum-stability' => 'dev', 'prefer-stable' => true];
file_put_contents($temporary . '/composer.json', json_encode($consumer, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR) . "\n");
$run(['composer', 'install', '--no-dev', '--classmap-authoritative', '--no-scripts', '--no-plugins', '--no-interaction'], $temporary);
$resolved = json_decode(file_get_contents($temporary . '/vendor/composer/installed.json'), true, 512, JSON_THROW_ON_ERROR);
$packages = array_column($resolved['packages'], null, 'name');
foreach ($sourceDependencies as $name => $dependency) {
    $resolvedPackage = $packages[$name] ?? null;
    if ($resolvedPackage === null || $resolvedPackage['version'] !== $dependency['version']
        || ($resolvedPackage['source']['reference'] ?? null) !== $dependency['ref']) {
        throw new RuntimeException('Archive dependency differs from its reviewed VCS coordinate: ' . $name);
    }
    $sourceRecords[$name] = ['mode' => 'declared-vcs', 'version' => $resolvedPackage['version'],
        'source_reference' => $resolvedPackage['source']['reference'], 'source_url' => $resolvedPackage['source']['url']];
}
$installed = $temporary . '/vendor/' . $manifest['name'];
foreach (['src', 'resources/public-api/v1.json', 'resources/capabilities/v1.json', 'resources/service-map/v1.json', 'resources/migration/source-map.json', 'examples/consumer.php'] as $path) {
    if (!file_exists($installed . '/' . $path)) { throw new RuntimeException('Archive missing ' . $path); }
}
foreach (['tests', 'tools', 'vendor', '.git'] as $path) {
    if (file_exists($installed . '/' . $path)) { throw new RuntimeException('Development content in package archive: ' . $path); }
}
$smoke = <<<'SMOKE'
<?php
declare(strict_types=1);
$loader = require 'vendor/autoload.php';
if (!$loader->isClassMapAuthoritative()) { throw new RuntimeException('Autoload not authoritative'); }
foreach (array_keys($loader->getClassMap()) as $name) {
    if (str_starts_with($name, 'Kumwe\\App\\') || str_starts_with($name, 'Kumwe\\Extension\\')) {
        throw new RuntimeException('Forbidden host dependency: ' . $name);
    }
}
require 'vendor/__PACKAGE__/examples/consumer.php';
SMOKE;
file_put_contents($temporary . '/smoke.php', str_replace('__PACKAGE__', $manifest['name'], $smoke));
$run([PHP_BINARY, 'smoke.php'], $temporary);
$evidence = ['kind' => 'archive-with-declared-dependencies', 'release_attestation' => false, 'archive_sha256' => hash_file('sha256', $archive), 'consumer_directory' => $temporary, 'dependencies' => $sourceRecords];
file_put_contents($temporary . '/consumer-evidence.json', json_encode($evidence, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR) . "\n");
echo json_encode($evidence, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR) . "\n";
