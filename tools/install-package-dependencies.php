<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$dependencies = json_decode(file_get_contents($root . '/resources/source-ci-dependencies.json'), true, flags: JSON_THROW_ON_ERROR);
$manifest = json_decode(file_get_contents($root . '/composer.json'), true, flags: JSON_THROW_ON_ERROR);
// Resolve published dependency coordinates and verify their exact source commits.
$process = proc_open(['composer', 'install', '--no-scripts', '--no-plugins', '--no-interaction', '--prefer-dist'],
    [STDIN, STDOUT, STDERR], $pipes, $root);
if (!is_resource($process) || proc_close($process) !== 0) { throw new RuntimeException('Declared dependency installation failed.'); }
$installed = json_decode(file_get_contents($root . '/vendor/composer/installed.json'), true, flags: JSON_THROW_ON_ERROR);
$packages = array_column($installed['packages'], null, 'name');
$evidence = [];
foreach ($dependencies as $name => $dependency) {
    $package = $packages[$name] ?? null;
    if (($manifest['require'][$name] ?? null) !== $dependency['version'] || $package === null
        || ltrim($package['version'], 'v') !== $dependency['version'] || ($package['source']['reference'] ?? null) !== $dependency['ref']) {
        throw new RuntimeException('Resolved dependency differs from the reviewed published coordinate: ' . $name);
    }
    $evidence[$name] = ['version' => $package['version'], 'source_reference' => $package['source']['reference'],
        'source_url' => $package['source']['url'], 'mode' => 'published-source'];
}
file_put_contents($root . '/../package-dependency-evidence.json', json_encode([
    'release_attestation' => false, 'dependencies' => $evidence,
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR) . "\n");
