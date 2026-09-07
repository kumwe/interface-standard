<?php

declare(strict_types=1);

use Kumwe\Contribution\ContributionOwner;
use Kumwe\InterfaceStandard\SurfaceDefinition;

if (!class_exists(SurfaceDefinition::class)) { require dirname(__DIR__) . '/vendor/autoload.php'; }
$definition = SurfaceDefinition::fromArray(ContributionOwner::extension('acme/orders'), [
    'surface' => 'acme.orders.collection',
    'standard' => 'kis-1.0',
    'area' => 'administrator',
    'actor' => 'administrator',
    'intent' => 'collection',
    'resource' => 'order',
    'purpose' => 'Find and manage orders.',
    'pattern' => 'collection-workspace',
    'capabilities' => ['acme.orders.read'],
    'states' => ['default', 'empty', 'dense', 'error', 'permission-reduced'],
    'customization' => [['slot' => 'density', 'scope' => 'user']],
    'responsive' => [['element' => 'order-identity', 'priority' => 'essential', 'may_collapse' => false]],
    'icon' => 'orders',
]);
if ($definition->identifier() !== 'acme.orders.collection') { throw new RuntimeException('Wrong surface identity.'); }
if (SurfaceDefinition::fromArray(ContributionOwner::extension('acme/orders'), $definition->toArray())->toArray() !== $definition->toArray()) { throw new RuntimeException('Round trip changed the declaration.'); }
echo "Owner-bound interface declaration admitted and round-tripped.\n";
return $definition->toArray();
