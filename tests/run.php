<?php

declare(strict_types=1);

use Kumwe\Contribution\ContributionDefinition;
use Kumwe\Contribution\ContributionOwner;
use Kumwe\InterfaceStandard\ConformanceDiagnostic;
use Kumwe\InterfaceStandard\ConformanceSeverity;
use Kumwe\InterfaceStandard\CustomizationScope;
use Kumwe\InterfaceStandard\CustomizationSlot;
use Kumwe\InterfaceStandard\IconName;
use Kumwe\InterfaceStandard\ResourceName;
use Kumwe\InterfaceStandard\SurfaceConformanceReport;
use Kumwe\InterfaceStandard\SurfaceConformanceValidator;
use Kumwe\InterfaceStandard\SurfaceConformanceViolation;
use Kumwe\InterfaceStandard\SurfaceDeclaration;
use Kumwe\InterfaceStandard\SurfaceDefinition;
use Kumwe\InterfaceStandard\SurfaceId;

require dirname(__DIR__) . '/vendor/autoload.php';
$count = 0;
function same(mixed $expected, mixed $actual): void {
    global $count; ++$count;
    if ($actual !== $expected) { throw new RuntimeException('Expected ' . var_export($expected, true) . ', received ' . var_export($actual, true)); }
}
function refuses(callable $operation, string $exception = InvalidArgumentException::class): Throwable {
    global $count; ++$count;
    try { $operation(); } catch (Throwable $error) {
        if ($error instanceof $exception) { return $error; }
        throw $error;
    }
    throw new RuntimeException('Expected refusal: ' . $exception);
}
$data = require dirname(__DIR__) . '/examples/consumer.php';
$owner = ContributionOwner::extension('acme/orders');
$definition = SurfaceDefinition::fromArray($owner, $data);
same(true, $definition instanceof ContributionDefinition);
same($data, $definition->toArray());
$permuted = $data;
$permuted['capabilities'] = ['acme.orders.write', 'acme.orders.read'];
$permuted['states'] = array_reverse($data['states']);
$permuted['customization'][] = ['slot' => 'columns', 'scope' => 'user'];
$permuted['responsive'][] = ['element' => 'additional-info', 'priority' => 'secondary', 'may_collapse' => true];
$canonical = SurfaceDefinition::fromArray($owner, $permuted)->toArray();
same(['acme.orders.read', 'acme.orders.write'], $canonical['capabilities']);
same(['columns', 'density'], array_column($canonical['customization'], 'slot'));
same(['additional-info', 'order-identity'], array_column($canonical['responsive'], 'element'));
same($canonical, SurfaceDefinition::fromArray($owner, $canonical)->toArray());
foreach (array_keys($data) as $key) { $invalid = $data; unset($invalid[$key]); refuses(fn () => SurfaceDefinition::fromArray($owner, $invalid)); }
foreach (['html', 'javascript', 'sql', 'owner'] as $key) { refuses(fn () => SurfaceDefinition::fromArray($owner, $data + [$key => 'untrusted'])); }
foreach (['standard' => 'kis-2.0', 'area' => 'unknown', 'actor' => 'unknown', 'intent' => 'unknown', 'pattern' => 'unknown', 'purpose' => '<script>run()</script>', 'icon' => 'https://evil.test/icon.svg'] as $key => $value) {
    $invalid = $data; $invalid[$key] = $value; refuses(fn () => SurfaceDefinition::fromArray($owner, $invalid));
}
foreach ([' purpose ', '', "Line\nTwo", '{expression}', 'javascript:run()', str_repeat('a', 256)] as $purpose) { $invalid = $data; $invalid['purpose'] = $purpose; refuses(fn () => SurfaceDefinition::fromArray($owner, $invalid)); }
$invalid = $data; $invalid['purpose'] = "Invalid \xff UTF-8"; refuses(fn () => SurfaceDefinition::fromArray($owner, $invalid));
foreach (['capabilities', 'states', 'customization', 'responsive'] as $key) {
    $invalid = $data; $invalid[$key][] = $invalid[$key][0]; refuses(fn () => SurfaceDefinition::fromArray($owner, $invalid));
    $invalid = $data; $invalid[$key] = ['named' => $invalid[$key][0]]; refuses(fn () => SurfaceDefinition::fromArray($owner, $invalid));
}
foreach (['customization', 'responsive'] as $key) { $invalid = $data; $invalid[$key][0]['unexpected'] = true; refuses(fn () => SurfaceDefinition::fromArray($owner, $invalid)); }
$invalid = $data; $invalid['responsive'] = []; refuses(fn () => SurfaceDefinition::fromArray($owner, $invalid));
$invalid = $data; $invalid['responsive'] = array_fill(0, 65, $data['responsive'][0]); refuses(fn () => SurfaceDefinition::fromArray($owner, $invalid));
$invalid = $data; $invalid['capabilities'] = array_fill(0, 65, 'acme.orders.read'); refuses(fn () => SurfaceDefinition::fromArray($owner, $invalid));
refuses(fn () => SurfaceDefinition::fromArray(ContributionOwner::extension('other/orders'), $data));
refuses(fn () => SurfaceDefinition::fromArray(ContributionOwner::core(), $data));
foreach (['9ac.me/2-orders_v1', 'a../b', 'a./b', 'a/b.'] as $identity) {
    $legacyOwner = ContributionOwner::extension($identity); $legacy = $data; $legacy['surface'] = $legacyOwner->namespace() . '.workspace';
    same($legacy['surface'], SurfaceDefinition::fromArray($legacyOwner, $legacy)->identifier());
}
foreach (['.acme.orders', 'acme.orders.', 'Acme.orders', 'acme/orders.index', 'a.' . str_repeat('b', 190)] as $id) { refuses(fn () => SurfaceId::fromString($id)); }
$largest = 'a.' . str_repeat('b', 189); same($largest, (string) SurfaceId::fromString($largest));
same('a..b.workspace', (string) SurfaceId::fromString('a..b.workspace'));
foreach (['', 'SQL query', '/route', 'name..child', str_repeat('r', 192)] as $name) { refuses(fn () => ResourceName::fromString($name)); }
same(str_repeat('r', 191), (string) ResourceName::fromString(str_repeat('r', 191)));
same(str_repeat('i', 64), (string) IconName::fromString(str_repeat('i', 64)));
refuses(fn () => IconName::fromString(str_repeat('i', 65)));
$invalid = $data;
$invalid['actor'] = 'portal'; $invalid['intent'] = 'review'; $invalid['capabilities'] = []; $invalid['states'] = ['error'];
$invalid['customization'] = [['slot' => 'layout', 'scope' => 'user']]; $invalid['responsive'][0]['may_collapse'] = true;
$candidate = SurfaceDeclaration::fromArray($owner, $invalid);
$report = (new SurfaceConformanceValidator())->validate($candidate);
same(false, $report->conforms());
same(['kis.actor.area', 'kis.pattern.intent', 'kis.state.default-required', 'kis.capability.required', 'kis.customization.scope', 'kis.responsive.essential-collapse'], array_column($report->toArray(), 'code'));
$error = refuses(fn () => SurfaceDefinition::admit($candidate), SurfaceConformanceViolation::class);
same($report->toArray(), $error->report->toArray());
$missingStates = $data; $missingStates['states'] = ['default'];
$error = refuses(fn () => SurfaceDefinition::fromArray($owner, $missingStates), SurfaceConformanceViolation::class);
same(['kis.state.permission-reduced-required', 'kis.state.intent-required', 'kis.state.intent-required', 'kis.state.intent-required'], array_column($error->report->toArray(), 'code'));
$public = $data; $public['actor'] = 'public'; $public['intent'] = 'form'; $public['pattern'] = 'focused-form'; $public['states'] = ['default', 'error']; $public['capabilities'] = [];
foreach (['administrator', 'portal', 'template', 'public'] as $area) { $public['area'] = $area; same([], SurfaceDefinition::fromArray($owner, $public)->toArray()['capabilities']); }
$public['capabilities'] = ['acme.orders.read']; $error = refuses(fn () => SurfaceDefinition::fromArray($owner, $public), SurfaceConformanceViolation::class);
same('kis.capability.public', $error->report->diagnostics()[0]->code);
foreach (CustomizationScope::cases() as $scope) { same(true, SurfaceConformanceValidator::allowsCustomizationAtOrBelow(CustomizationSlot::Density, CustomizationScope::User, $scope)); }
same(true, SurfaceConformanceValidator::allowsCustomizationAtOrBelow(CustomizationSlot::Columns, CustomizationScope::RoleWorkspace, CustomizationScope::Administrator));
same(false, SurfaceConformanceValidator::allowsCustomizationAtOrBelow(CustomizationSlot::Columns, CustomizationScope::RoleWorkspace, CustomizationScope::Site));
same(false, SurfaceConformanceValidator::allowsCustomizationAtOrBelow(CustomizationSlot::Columns, CustomizationScope::RoleWorkspace, CustomizationScope::User));
$warning = new ConformanceDiagnostic('kis.example.warning', ConformanceSeverity::Warning, 'purpose', 'Review this purpose.');
same(true, (new SurfaceConformanceReport([$warning]))->conforms());
same('warning', $warning->toArray()['severity']);
refuses(fn () => new SurfaceConformanceReport(['invalid']));
foreach ([['invalid', 'purpose', 'Message.'], ['kis.example', '../path', 'Message.'], ['kis.example', 'purpose', ''], ['kis.example', 'purpose', str_repeat('x', 501)]] as [$code, $path, $message]) { refuses(fn () => new ConformanceDiagnostic($code, ConformanceSeverity::Error, $path, $message)); }
echo "$count behavior assertions passed.\n";
