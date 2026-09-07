# Integration and adoption

Install an exact independently verified release before changing App. See `resources/migration/source-map.json` for every namespace replacement and `consumer-inventory.json` for the inspected file-level references. Do not add aliases, wrappers, dual PSR-4 roots, or shadow implementations.

Build or parse a SurfaceDeclaration with a canonical ContributionOwner, then call SurfaceDefinition::admit or fromArray. Catch InvalidArgumentException for malformed metadata and SurfaceConformanceViolation for semantic errors; the latter exposes its complete report. Apply host capability checks and active-generation checks independently before delivery. Rendering and presentation-preference persistence remain host-owned.

In Phase 2, reconcile App changes since the captured baseline, update every affected import and signature to the mapped canonical owner, delete the extracted App definitions, and move only portable implementation assertions out of mixed App tests. Retain host composition and lifecycle assertions listed in `resources/migration/test-ownership.json`. Update the App dependency lock, migration ledger, capability index and changelog; run affected host and integration-train gates. No App files were changed here.
