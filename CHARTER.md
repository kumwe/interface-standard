# interface-standard ownership charter

Change set: KUMWE-CS-2026-025. Migration: KUMWE-MIG-2026-025.
Non-roadmap reference: NRM-2026-025; extraction is an enabling refactor.

## Responsibility

Portable interface vocabulary and typed declarations under the canonical namespace `Kumwe\InterfaceStandard`.

## Retained host responsibilities

Rendering, routes, delivery adapters, lifecycle admission, authorization enforcement, navigation trees, and host preferences remain outside this package. Production code never imports Kumwe App.

## Delivery boundary

This branch owns Phase 1 package implementation and its behavior, boundary, conformance, public API, archive, and consumer tests. The source closure and exact old-to-new mapping are recorded in the migration handoff. App remains unchanged until separately verified immutable releases permit adoption. Dependencies that have not passed independent release verification are explicit publication blockers.

Package publication and consumer adoption require the reviewed release protocol; this branch does not merge, tag, or publish artifacts. Each portable symbol has one eventual canonical owner. Namespace aliases, copied vendor implementations, and silent runtime fallbacks are prohibited.
