# Kumwe Interface Standard

[![Latest version][version-badge]][package]
[![Interface Standard CI][ci-badge]][ci]
[![PHP requirement][php-badge]][package]
[![License][license-badge]](LICENSE)

Portable interface values, strict owner-bound surface declarations and deterministic Kumwe Interface
Standard 1.0 conformance diagnostics under `Kumwe\InterfaceStandard`.

## Installation

```bash
composer require kumwe/interface-standard:0.1.2
```

Requires PHP `^8.5`, `ext-mbstring`, Contribution 0.1.1 and Access Control 0.1.2, available from Packagist.
Pre-1.0 consumers use an independently verified exact package version.

```php
use Kumwe\Contribution\ContributionOwner;
use Kumwe\InterfaceStandard\SurfaceDefinition;

$surface = SurfaceDefinition::fromArray(
    ContributionOwner::extension('acme/orders'),
    $manifestSurface,
);
$canonicalMetadata = $surface->toArray();
```

Run `composer examples` for [a complete declaration](examples/consumer.php). Parsing enforces exact keys,
bounded lists, supported versions, plain-text metadata and ownership. Semantic admission reports errors
for actor/area, intent/pattern, required states, customization scope and responsive priorities.

## Contract with Kumwe Core

The package owns vocabulary, typed declarations and semantic conformance. Capability references describe
requirements; Core enforces them. Rendering, routes, navigation trees, trust, active-generation admission,
authorization and presentation-preference state/persistence belong to Core and other consuming hosts.

There is no container provider or hidden global registry. Consumers construct the package values and
stateless validator directly, using canonical Contribution ownership and Access Control capability types.
See [integration](docs/integration.md) and [architecture](docs/architecture.md) for the exact boundary.

## API and development

[Public API](docs/public-api.md) documents every signature and invariant. The
[release contract record](docs/release-record.md) preserves source mappings, manifest digests, compatibility
requirements and consumer/test ownership. Historical source mappings do not assert current Core adoption.

```bash
composer install
composer check
```

The complete gate checks syntax, API and source closure, architecture, static analysis, style, behavior,
examples, dependency security, archive consumers and release automation. `composer clean-consumer`
installs the real distribution ZIP into a fresh production-only authoritative-classmap consumer.
[Verification](docs/verification.md) explains evidence and explicit development dependency overrides.

## Releases and license

The version badge follows Packagist; the CI badge follows the actual default-branch package workflow.
Publication, passing package CI and independent artifact verification remain separate facts.
[Release policy](docs/releasing.md) requires stable source identity and preserves existing artifacts.

Licensed under [Apache-2.0](LICENSE). See [security policy](SECURITY.md).

[version-badge]: https://img.shields.io/packagist/v/kumwe/interface-standard
[package]: https://packagist.org/packages/kumwe/interface-standard
[ci-badge]: https://github.com/kumwe/interface-standard/actions/workflows/ci.yml/badge.svg?branch=main
[ci]: https://github.com/kumwe/interface-standard/actions/workflows/ci.yml
[php-badge]: https://img.shields.io/packagist/dependency-v/kumwe/interface-standard/php
[license-badge]: https://img.shields.io/packagist/l/kumwe/interface-standard
