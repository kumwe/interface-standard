# Host integration

Install an exact independently verified release and import canonical package types directly.
`resources/migration/source-map.json` and `consumer-inventory.json` preserve source provenance and
compatibility mappings. Do not introduce aliases, dual PSR-4 roots or shadow implementations.

Build or parse a `SurfaceDeclaration` using a canonical `ContributionOwner`, then call
`SurfaceDefinition::admit()` or `SurfaceDefinition::fromArray()`. Malformed metadata raises
`InvalidArgumentException`; semantic errors raise `SurfaceConformanceViolation`, which exposes the
complete diagnostic report. Core independently enforces capability and active-generation checks before
delivery. Rendering and presentation-preference persistence remain host-owned.

When changing a consumer's exact pin, inspect its current imports and source and run affected integration
checks. Retain host composition, registry lifecycle and graphical parity assertions, as documented in
`resources/migration/test-ownership.json`. Package-owned portable implementation tests belong to the
library; host integration tests remain with the host. Update consumer dependency/evidence records with
the selected version and independently verified artifact identities.
