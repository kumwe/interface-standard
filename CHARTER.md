# Interface Standard ownership charter

Interface Standard owns portable interface vocabulary and typed declarations under the canonical
namespace `Kumwe\InterfaceStandard`.

## Host responsibilities

Rendering, routes, delivery adapters, lifecycle admission, authorization enforcement, navigation trees
and presentation preferences belong to the host. Production package code never imports Kumwe App.

## Package contract

The package owns portable behavior, boundary and conformance tests, API manifests, archive verification
and consumer examples. [The release contract record](docs/release-record.md) preserves source provenance,
symbol mappings and compatibility requirements.

Consumers select independently verified immutable releases and retain host composition/lifecycle tests
when changing an exact package pin. Each portable symbol has one canonical owner. Namespace aliases,
copied vendor implementations and silent runtime fallbacks are prohibited.
