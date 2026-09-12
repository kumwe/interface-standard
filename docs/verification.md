# Verification

The supported runtime is PHP 8.5 with mbstring. `composer check` verifies PHP syntax, exact reflected API,
source closure and dependency direction, maximum-level PHPStan, PSR-12 style, behavior, examples,
dependency security and an isolated archive consumer. Tests use real dependencies without host bootstrapping.
Source/test provenance and retained host tests are recorded in `resources/migration/test-ownership.json`.

`composer clean-consumer` creates the distribution archive and installs it into a fresh directory with
`--no-dev --classmap-authoritative --no-scripts --no-plugins`. It checks runtime files and manifests,
excludes development trees, rejects host/SDK classes in the classmap and executes the installed example.
Archive SHA-256 and consumer results are recorded externally. Each invocation rebuilds the current source.

For dependency development, `KUMWE_SOURCE_DEPENDENCIES` accepts a JSON object mapping package names to
`{ "path": "/absolute/source", "satisfies": "0.1.0" }`. Composer mirrors these sources with explicit root
aliases; evidence marks `archive-with-local-source-dependencies` and `release_attestation: false`.
Without that variable the tool uses registry dependencies. Local aliases prove development composition,
not immutable release identity or independent artifact verification.

The same package CI runs on pull requests and the actual post-rebase default-branch commit. A successful
publication identifies a release; independent verification separately binds its source, artifact,
manifest and dependency identities to a clean-consumer result. See [release policy](releasing.md) and
[the release contract record](release-record.md). These package checks do not establish Core adoption.
