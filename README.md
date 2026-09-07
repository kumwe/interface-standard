# Interface Standard

`kumwe/interface-standard` supplies 21 portable interface value types, strict owner-bound surface declarations, and deterministic Kumwe Interface Standard 1.0 conformance diagnostics under `Kumwe\InterfaceStandard`.

PHP 8.5 and mbstring are required. `kumwe/contribution` supplies ownership and declaration contracts; `kumwe/access-control` supplies `Capability`. No direct Access Context dependency is needed by this closure. The exact dependency constraints in Composer are target coordinates; Access Control has no verified release for this extraction, so publication and App adoption remain blocked.

```php
use Kumwe\Contribution\ContributionOwner;
use Kumwe\InterfaceStandard\SurfaceDefinition;

$surface = SurfaceDefinition::fromArray(
    ContributionOwner::extension('acme/orders'),
    $manifestSurface,
);
$canonicalMetadata = $surface->toArray();
```

Run `php examples/consumer.php` for a complete declaration. Parsing enforces exact keys, bounded lists, supported versions, plain-text metadata, and ownership. Admission then reports all semantic errors for actor/area, intent/pattern, required states, customization scope, and responsive priorities. Capability references describe requirements; the host enforces them.

Presentation preference state and persistence, rendering, navigation trees, routes, trust, active-generation admission, and authorization remain host responsibilities. There is no container provider or hidden global registry. The source's three presentation preference types are explicitly excluded.

The complete signatures and invariants are in [docs/public-api.md](docs/public-api.md). See [architecture](docs/architecture.md), [integration](docs/integration.md), [verification](docs/verification.md), and the [migration handoff](MIGRATION-HANDOFF.md).

After installing dependencies, run `composer check`. `composer clean-consumer` builds a distribution archive and installs it in a new no-dev authoritative-classmap consumer. Unreleased dependencies require explicit local source inputs for preliminary verification, documented in `docs/verification.md`; these inputs never establish release verification.

The initial 0.1.0 version is recorded for automatic publication after human merge.
The same complete package gate runs on PRs and default-branch commits. See
[releasing](docs/releasing.md) for publication and separate App adoption stages.
