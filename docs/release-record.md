---
schema: kumwe-package-release-record/v1
artifact_kind: framework_php
migration_id: KUMWE-MIG-2026-025
change_set: KUMWE-CS-2026-025
target:
  repository: https://github.com/kumwe/interface-standard
  artifact_identity: kumwe/interface-standard
  canonical_namespace_or_abi: Kumwe\InterfaceStandard
source:
  app:
    repository: https://github.com/kumwe/app
    baseline_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    examined_paths:
      - src/InterfaceStandard/ConformanceDiagnostic.php
      - src/InterfaceStandard/ConformanceSeverity.php
      - src/InterfaceStandard/CustomizationPermission.php
      - src/InterfaceStandard/CustomizationScope.php
      - src/InterfaceStandard/CustomizationSlot.php
      - src/InterfaceStandard/IconName.php
      - src/InterfaceStandard/InterfaceStandardVersion.php
      - src/InterfaceStandard/ResourceName.php
      - src/InterfaceStandard/ResponsiveElement.php
      - src/InterfaceStandard/ResponsivePriority.php
      - src/InterfaceStandard/SurfaceActor.php
      - src/InterfaceStandard/SurfaceArea.php
      - src/InterfaceStandard/SurfaceConformanceReport.php
      - src/InterfaceStandard/SurfaceConformanceValidator.php
      - src/InterfaceStandard/SurfaceConformanceViolation.php
      - src/InterfaceStandard/SurfaceDeclaration.php
      - src/InterfaceStandard/SurfaceDefinition.php
      - src/InterfaceStandard/SurfaceId.php
      - src/InterfaceStandard/SurfaceIntent.php
      - src/InterfaceStandard/SurfacePattern.php
      - src/InterfaceStandard/SurfaceState.php
      - composer.json
      - docs/architecture/capability-index.md
    old_namespace_roots:
      - Kumwe\App\InterfaceStandard\
    capability_index_sha256: null
  semantic_inputs: []
  examined_dependencies:
    - php ^8.5
    - ext-mbstring *
    - kumwe/contribution 0.1.1
    - kumwe/access-control 0.1.2
framework_php:
  composer_package: kumwe/interface-standard
  canonical_namespace: Kumwe\InterfaceStandard
  public_api_manifest: resources/public-api/v1.json
  capability_manifest: resources/capabilities/v1.json
  service_map: resources/service-map/v1.json
  extracted_symbols:
    - old_fqcn: Kumwe\App\InterfaceStandard\ConformanceDiagnostic
      new_fqcn: Kumwe\InterfaceStandard\ConformanceDiagnostic
      source_path: src/InterfaceStandard/ConformanceDiagnostic.php
      target_path: src/ConformanceDiagnostic.php
      kind: class
      public_methods:
        - __construct
        - toArray
      public_properties:
        - code
        - message
        - path
        - severity
      public_constants: []
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\ConformanceSeverity
      new_fqcn: Kumwe\InterfaceStandard\ConformanceSeverity
      source_path: src/InterfaceStandard/ConformanceSeverity.php
      target_path: src/ConformanceSeverity.php
      kind: enum
      public_methods:
        - cases
        - from
        - tryFrom
      public_properties:
        - name
        - value
      public_constants:
        - Error
        - Warning
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\CustomizationPermission
      new_fqcn: Kumwe\InterfaceStandard\CustomizationPermission
      source_path: src/InterfaceStandard/CustomizationPermission.php
      target_path: src/CustomizationPermission.php
      kind: class
      public_methods:
        - __construct
        - toArray
      public_properties:
        - scope
        - slot
      public_constants: []
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\CustomizationScope
      new_fqcn: Kumwe\InterfaceStandard\CustomizationScope
      source_path: src/InterfaceStandard/CustomizationScope.php
      target_path: src/CustomizationScope.php
      kind: enum
      public_methods:
        - cases
        - from
        - tryFrom
      public_properties:
        - name
        - value
      public_constants:
        - Administrator
        - RoleWorkspace
        - Site
        - User
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\CustomizationSlot
      new_fqcn: Kumwe\InterfaceStandard\CustomizationSlot
      source_path: src/InterfaceStandard/CustomizationSlot.php
      target_path: src/CustomizationSlot.php
      kind: enum
      public_methods:
        - cases
        - from
        - tryFrom
      public_properties:
        - name
        - value
      public_constants:
        - Columns
        - DashboardCards
        - Density
        - LabelsHelp
        - LandingWorkspace
        - Layout
        - NavigationShortcuts
        - SavedViews
        - ThemeMode
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\IconName
      new_fqcn: Kumwe\InterfaceStandard\IconName
      source_path: src/InterfaceStandard/IconName.php
      target_path: src/IconName.php
      kind: class
      public_methods:
        - __toString
        - fromString
        - value
      public_properties: []
      public_constants: []
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\InterfaceStandardVersion
      new_fqcn: Kumwe\InterfaceStandard\InterfaceStandardVersion
      source_path: src/InterfaceStandard/InterfaceStandardVersion.php
      target_path: src/InterfaceStandardVersion.php
      kind: enum
      public_methods:
        - cases
        - from
        - tryFrom
      public_properties:
        - name
        - value
      public_constants:
        - Kis1
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\ResourceName
      new_fqcn: Kumwe\InterfaceStandard\ResourceName
      source_path: src/InterfaceStandard/ResourceName.php
      target_path: src/ResourceName.php
      kind: class
      public_methods:
        - __toString
        - fromString
        - value
      public_properties: []
      public_constants: []
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\ResponsiveElement
      new_fqcn: Kumwe\InterfaceStandard\ResponsiveElement
      source_path: src/InterfaceStandard/ResponsiveElement.php
      target_path: src/ResponsiveElement.php
      kind: class
      public_methods:
        - __construct
        - toArray
      public_properties:
        - element
        - mayCollapse
        - priority
      public_constants: []
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\ResponsivePriority
      new_fqcn: Kumwe\InterfaceStandard\ResponsivePriority
      source_path: src/InterfaceStandard/ResponsivePriority.php
      target_path: src/ResponsivePriority.php
      kind: enum
      public_methods:
        - cases
        - from
        - tryFrom
      public_properties:
        - name
        - value
      public_constants:
        - Essential
        - Optional
        - Primary
        - Secondary
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceActor
      new_fqcn: Kumwe\InterfaceStandard\SurfaceActor
      source_path: src/InterfaceStandard/SurfaceActor.php
      target_path: src/SurfaceActor.php
      kind: enum
      public_methods:
        - cases
        - from
        - tryFrom
      public_properties:
        - name
        - value
      public_constants:
        - Administrator
        - Portal
        - Public
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceArea
      new_fqcn: Kumwe\InterfaceStandard\SurfaceArea
      source_path: src/InterfaceStandard/SurfaceArea.php
      target_path: src/SurfaceArea.php
      kind: enum
      public_methods:
        - cases
        - from
        - tryFrom
      public_properties:
        - name
        - value
      public_constants:
        - Administrator
        - Portal
        - Public
        - Template
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceConformanceReport
      new_fqcn: Kumwe\InterfaceStandard\SurfaceConformanceReport
      source_path: src/InterfaceStandard/SurfaceConformanceReport.php
      target_path: src/SurfaceConformanceReport.php
      kind: class
      public_methods:
        - __construct
        - conforms
        - diagnostics
        - toArray
      public_properties: []
      public_constants: []
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceConformanceValidator
      new_fqcn: Kumwe\InterfaceStandard\SurfaceConformanceValidator
      source_path: src/InterfaceStandard/SurfaceConformanceValidator.php
      target_path: src/SurfaceConformanceValidator.php
      kind: class
      public_methods:
        - allowsCustomizationAtOrBelow
        - assertConforms
        - validate
      public_properties: []
      public_constants: []
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceConformanceViolation
      new_fqcn: Kumwe\InterfaceStandard\SurfaceConformanceViolation
      source_path: src/InterfaceStandard/SurfaceConformanceViolation.php
      target_path: src/SurfaceConformanceViolation.php
      kind: class
      public_methods:
        - __construct
      public_properties:
        - report
      public_constants: []
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceDeclaration
      new_fqcn: Kumwe\InterfaceStandard\SurfaceDeclaration
      source_path: src/InterfaceStandard/SurfaceDeclaration.php
      target_path: src/SurfaceDeclaration.php
      kind: class
      public_methods:
        - __construct
        - fromArray
        - toArray
      public_properties:
        - actor
        - area
        - capabilities
        - customization
        - icon
        - intent
        - owner
        - pattern
        - purpose
        - resource
        - responsive
        - standard
        - states
        - surface
      public_constants: []
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceDefinition
      new_fqcn: Kumwe\InterfaceStandard\SurfaceDefinition
      source_path: src/InterfaceStandard/SurfaceDefinition.php
      target_path: src/SurfaceDefinition.php
      kind: class
      public_methods:
        - admit
        - fromArray
        - identifier
        - toArray
      public_properties:
        - declaration
      public_constants: []
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceId
      new_fqcn: Kumwe\InterfaceStandard\SurfaceId
      source_path: src/InterfaceStandard/SurfaceId.php
      target_path: src/SurfaceId.php
      kind: class
      public_methods:
        - __toString
        - fromString
        - value
      public_properties: []
      public_constants: []
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceIntent
      new_fqcn: Kumwe\InterfaceStandard\SurfaceIntent
      source_path: src/InterfaceStandard/SurfaceIntent.php
      target_path: src/SurfaceIntent.php
      kind: enum
      public_methods:
        - cases
        - from
        - tryFrom
      public_properties:
        - name
        - value
      public_constants:
        - Chooser
        - Collection
        - Comparison
        - Detail
        - Diagnostics
        - Form
        - Monitor
        - ParentChild
        - Review
        - Settings
        - Workflow
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\SurfacePattern
      new_fqcn: Kumwe\InterfaceStandard\SurfacePattern
      source_path: src/InterfaceStandard/SurfacePattern.php
      target_path: src/SurfacePattern.php
      kind: enum
      public_methods:
        - cases
        - from
        - tryFrom
      public_properties:
        - name
        - value
      public_constants:
        - ChildCollection
        - CollectionWorkspace
        - Comparison
        - DiagnosticsWorkspace
        - DrawerForm
        - FocusedForm
        - InlineSubform
        - LocalNavigation
        - MasterDetailWorkspace
        - ResourceChooser
        - ReviewConfirmation
        - SettingsWorkspace
        - StatusWorkspace
        - StepFlow
        - Tabs
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
    - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceState
      new_fqcn: Kumwe\InterfaceStandard\SurfaceState
      source_path: src/InterfaceStandard/SurfaceState.php
      target_path: src/SurfaceState.php
      kind: enum
      public_methods:
        - cases
        - from
        - tryFrom
      public_properties:
        - name
        - value
      public_constants:
        - Default
        - Dense
        - Empty
        - Error
        - PermissionReduced
        - ReadOnly
        - Sparse
      exceptions: []
      serialization_contract: Explicit scalar projections documented in docs/public-api.md; PHP native serialization is not a durable wire or authority contract.
      compatibility: Portable behavior is retained under the canonical namespace. Package-owned boundary and regression tests document deliberate validation and scheduling corrections.
  consumers:
    app_code:
      - src/Administrator/Http/Handler/AdministratorDashboardHandler.php
      - src/Administrator/Http/Handler/AdministratorDashboardPreferencesHandler.php
      - src/Application/Presentation/Dashboard/DashboardPreferenceAccessGroupState.php
      - src/Application/Presentation/Dashboard/DashboardPreferenceMutation.php
      - src/Application/Presentation/Dashboard/DashboardPreferenceService.php
      - src/Application/Presentation/Dashboard/DashboardPreferenceState.php
      - src/Application/Presentation/Preference/PresentationPreferenceManager.php
      - src/Application/Presentation/Preference/PresentationPreferencePolicy.php
      - src/Application/Presentation/Preference/RegisteredPresentationPreferencePolicy.php
      - src/Delivery/Http/Dashboard/DashboardPreferenceFormDecoder.php
      - src/Delivery/Http/Dashboard/DashboardPreferenceQueryDecoder.php
      - src/Extension/Contribution/CanonicalManifestInterpreter.php
      - src/Extension/Contribution/CoreContributionRegistrar.php
      - src/Extension/Contribution/CoreExtensionContributions.php
      - src/InterfaceStandard/ConformanceDiagnostic.php
      - src/InterfaceStandard/ConformanceSeverity.php
      - src/InterfaceStandard/CustomizationPermission.php
      - src/InterfaceStandard/CustomizationScope.php
      - src/InterfaceStandard/CustomizationSlot.php
      - src/InterfaceStandard/IconName.php
      - src/InterfaceStandard/InterfaceStandardVersion.php
      - src/InterfaceStandard/ResourceName.php
      - src/InterfaceStandard/ResponsiveElement.php
      - src/InterfaceStandard/ResponsivePriority.php
      - src/InterfaceStandard/SurfaceActor.php
      - src/InterfaceStandard/SurfaceArea.php
      - src/InterfaceStandard/SurfaceConformanceReport.php
      - src/InterfaceStandard/SurfaceConformanceValidator.php
      - src/InterfaceStandard/SurfaceConformanceViolation.php
      - src/InterfaceStandard/SurfaceDeclaration.php
      - src/InterfaceStandard/SurfaceDefinition.php
      - src/InterfaceStandard/SurfaceId.php
      - src/InterfaceStandard/SurfaceIntent.php
      - src/InterfaceStandard/SurfacePattern.php
      - src/InterfaceStandard/SurfaceState.php
      - src/Portal/Http/Handler/PortalDashboardPreferencesHandler.php
      - src/Portal/Http/Handler/PortalHomeHandler.php
      - src/Presentation/Application/Dashboard/DashboardComposer.php
      - src/Presentation/Application/Dashboard/DashboardPreferenceFormPresenter.php
      - src/Presentation/Application/Dashboard/DashboardView.php
      - src/Presentation/Application/Dashboard/DashboardWidget.php
      - src/Presentation/Application/Dashboard/DashboardWorkflowCatalog.php
      - src/Presentation/Application/Preference/PresentationPreferenceContext.php
      - src/Presentation/Application/Preference/PresentationPreferenceResolution.php
      - src/Presentation/Application/Preference/PresentationPreferenceResolver.php
    configuration_and_di: []
    reflection_and_string_references:
      - Recompute same-namespace, reflected and dynamically constructed names before App adoption; exact source inventory is evidence, not a complete dynamic reference proof.
    fixtures_and_examples:
      - examples/consumer.php
    external: []
  dependency_injection:
    mode: direct
    provider: null
    factories: []
    aliases: []
    service_lifetimes: []
    configuration_keys: []
    provider_absence_reason: Immutable declarations and stateless helpers use direct construction; no injected runtime service is exported.
ownership:
  responsibility: Typed interface declarations and deterministic semantic conformance.
  non_responsibilities:
    - Host trust and final authorization
    - Persistence, durable transactions, worker and transport lifecycle
    - App runtime adoption and native release publication
  allowed_dependency_ceiling:
    - php
    - ext-mbstring
    - kumwe/contribution
    - kumwe/access-control
  implementation_owner: kumwe/interface-standard
  next_consumer: kumwe/app
  public_manifests:
    - path: resources/public-api/v1.json
      sha256: b43cbc7230bb74355750d386a92567e75939c9435db2d743bf6e21e4a4a886ea
    - path: resources/capabilities/v1.json
      sha256: 03b227f67703e57edc36502bc8b7129f33d002fcfbd285f56d59495545e44c2d
    - path: resources/service-map/v1.json
      sha256: 0becbd85cc64870926e3798628b3b126d955180e633f1db8354ed9e50d481401
  intentionally_excluded:
    - Interface declarations, their full source/test inventories and portable conformance implementation are owned by this package. Host rendering, preferences, persistence and final authority remain App responsibilities.
native_cpp: null
php_extension: null
tests:
  moved_or_added:
    - tests/run.php
  remain_in_app_or_consumer:
    - tests/Architecture/BusinessWorkspaceInterfaceStandardTest.php
    - tests/Architecture/InterfaceStandardBoundaryTest.php
    - tests/Integration/InterfaceStandard/PresentationPreferencePersistenceIntegrationTest.php
    - tests/Unit/InterfaceStandard/InterfaceStandardSchemaTest.php
    - tests/Unit/InterfaceStandard/PresentationPreferenceManagerTest.php
    - tests/Unit/InterfaceStandard/PresentationPreferenceResolverTest.php
    - tests/Unit/InterfaceStandard/PresentationPreferenceTest.php
    - tests/Unit/InterfaceStandard/SurfaceDefinitionTest.php
    - tests/Unit/InterfaceStandard/SurfaceIdentifierParityTest.php
  split_tests:
    - Remove only library implementation assertions after verified App adoption; retain host wiring and composed behavior assertions.
  prohibited_duplicates:
    - App must not retain unit tests of vendor-owned implementation internals after adoption.
  corpora: []
documentation:
  charter: CHARTER.md
  readme: README.md
  public_api: docs/public-api.md
  architecture: docs/architecture.md
  integration_or_consumer: docs/integration.md
  examples:
    - examples/consumer.php
  changelog_record: "CHANGELOG.md ## 0.1.2"
release_expectations:
  version_policy: Exact stable sibling package pins; preserve coherent released graphs until compatible successor releases exist.
  expected_artifact_types:
    - Composer package archive
    - GitHub source archive
  required_checks:
    - composer check
    - Interface Standard CI and post-rebase Package gate
    - Release contract record and consumer schema validation
  required_registry_or_installer: Composer
  required_external_attestation: true
governance:
  completion_claim: false
decisions:
  - Contribution owns surface ownership and identifier policy; Access Control owns capability values.
  - Semantic conformance admission does not authorize a caller or activate an extension.
  - Rendering, routes, navigation and presentation-preference state remain host-owned.
blockers: []
consumer_contract:
  permitted_only_when:
    - The exact immutable package and dependency artifacts have independent source, manifest and clean-consumer verification.
    - Affected host composition, lifecycle and interface integration tests pass against the selected version.
  consumer_repository: https://github.com/kumwe/app
  dependency_or_native_change: Pin the independently verified package version exactly and resolve its published dependencies through Composer.
  namespace_or_api_replacements:
    - Kumwe\App\InterfaceStandard\ConformanceDiagnostic -> Kumwe\InterfaceStandard\ConformanceDiagnostic
    - Kumwe\App\InterfaceStandard\ConformanceSeverity -> Kumwe\InterfaceStandard\ConformanceSeverity
    - Kumwe\App\InterfaceStandard\CustomizationPermission -> Kumwe\InterfaceStandard\CustomizationPermission
    - Kumwe\App\InterfaceStandard\CustomizationScope -> Kumwe\InterfaceStandard\CustomizationScope
    - Kumwe\App\InterfaceStandard\CustomizationSlot -> Kumwe\InterfaceStandard\CustomizationSlot
    - Kumwe\App\InterfaceStandard\IconName -> Kumwe\InterfaceStandard\IconName
    - Kumwe\App\InterfaceStandard\InterfaceStandardVersion -> Kumwe\InterfaceStandard\InterfaceStandardVersion
    - Kumwe\App\InterfaceStandard\ResourceName -> Kumwe\InterfaceStandard\ResourceName
    - Kumwe\App\InterfaceStandard\ResponsiveElement -> Kumwe\InterfaceStandard\ResponsiveElement
    - Kumwe\App\InterfaceStandard\ResponsivePriority -> Kumwe\InterfaceStandard\ResponsivePriority
    - Kumwe\App\InterfaceStandard\SurfaceActor -> Kumwe\InterfaceStandard\SurfaceActor
    - Kumwe\App\InterfaceStandard\SurfaceArea -> Kumwe\InterfaceStandard\SurfaceArea
    - Kumwe\App\InterfaceStandard\SurfaceConformanceReport -> Kumwe\InterfaceStandard\SurfaceConformanceReport
    - Kumwe\App\InterfaceStandard\SurfaceConformanceValidator -> Kumwe\InterfaceStandard\SurfaceConformanceValidator
    - Kumwe\App\InterfaceStandard\SurfaceConformanceViolation -> Kumwe\InterfaceStandard\SurfaceConformanceViolation
    - Kumwe\App\InterfaceStandard\SurfaceDeclaration -> Kumwe\InterfaceStandard\SurfaceDeclaration
    - Kumwe\App\InterfaceStandard\SurfaceDefinition -> Kumwe\InterfaceStandard\SurfaceDefinition
    - Kumwe\App\InterfaceStandard\SurfaceId -> Kumwe\InterfaceStandard\SurfaceId
    - Kumwe\App\InterfaceStandard\SurfaceIntent -> Kumwe\InterfaceStandard\SurfaceIntent
    - Kumwe\App\InterfaceStandard\SurfacePattern -> Kumwe\InterfaceStandard\SurfacePattern
    - Kumwe\App\InterfaceStandard\SurfaceState -> Kumwe\InterfaceStandard\SurfaceState
  files_to_update:
    - composer.json
    - composer.lock
    - src/Administrator/Http/Handler/AdministratorDashboardHandler.php
    - src/Administrator/Http/Handler/AdministratorDashboardPreferencesHandler.php
    - src/Application/Presentation/Dashboard/DashboardPreferenceAccessGroupState.php
    - src/Application/Presentation/Dashboard/DashboardPreferenceMutation.php
    - src/Application/Presentation/Dashboard/DashboardPreferenceService.php
    - src/Application/Presentation/Dashboard/DashboardPreferenceState.php
    - src/Application/Presentation/Preference/PresentationPreferenceManager.php
    - src/Application/Presentation/Preference/PresentationPreferencePolicy.php
    - src/Application/Presentation/Preference/RegisteredPresentationPreferencePolicy.php
    - src/Delivery/Http/Dashboard/DashboardPreferenceFormDecoder.php
    - src/Delivery/Http/Dashboard/DashboardPreferenceQueryDecoder.php
    - src/Extension/Contribution/CanonicalManifestInterpreter.php
    - src/Extension/Contribution/CoreContributionRegistrar.php
    - src/Extension/Contribution/CoreExtensionContributions.php
    - src/InterfaceStandard/ConformanceDiagnostic.php
    - src/InterfaceStandard/ConformanceSeverity.php
    - src/InterfaceStandard/CustomizationPermission.php
    - src/InterfaceStandard/CustomizationScope.php
    - src/InterfaceStandard/CustomizationSlot.php
    - src/InterfaceStandard/IconName.php
    - src/InterfaceStandard/InterfaceStandardVersion.php
    - src/InterfaceStandard/ResourceName.php
    - src/InterfaceStandard/ResponsiveElement.php
    - src/InterfaceStandard/ResponsivePriority.php
    - src/InterfaceStandard/SurfaceActor.php
    - src/InterfaceStandard/SurfaceArea.php
    - src/InterfaceStandard/SurfaceConformanceReport.php
    - src/InterfaceStandard/SurfaceConformanceValidator.php
    - src/InterfaceStandard/SurfaceConformanceViolation.php
    - src/InterfaceStandard/SurfaceDeclaration.php
    - src/InterfaceStandard/SurfaceDefinition.php
    - src/InterfaceStandard/SurfaceId.php
    - src/InterfaceStandard/SurfaceIntent.php
    - src/InterfaceStandard/SurfacePattern.php
    - src/InterfaceStandard/SurfaceState.php
    - src/Portal/Http/Handler/PortalDashboardPreferencesHandler.php
    - src/Portal/Http/Handler/PortalHomeHandler.php
    - src/Presentation/Application/Dashboard/DashboardComposer.php
    - src/Presentation/Application/Dashboard/DashboardPreferenceFormPresenter.php
    - src/Presentation/Application/Dashboard/DashboardView.php
    - src/Presentation/Application/Dashboard/DashboardWidget.php
    - src/Presentation/Application/Dashboard/DashboardWorkflowCatalog.php
    - src/Presentation/Application/Preference/PresentationPreferenceContext.php
    - src/Presentation/Application/Preference/PresentationPreferenceResolution.php
    - src/Presentation/Application/Preference/PresentationPreferenceResolver.php
    - tests/Integration/InterfaceStandard/PresentationPreferencePersistenceIntegrationTest.php
    - tests/Support/DashboardPreferenceTestRuntime.php
    - tests/Unit/Administrator/Http/Handler/AdministratorDashboardPreferencesHandlerTest.php
    - tests/Unit/Application/Presentation/Dashboard/DashboardPreferenceMutationTest.php
    - tests/Unit/Application/Presentation/Dashboard/DashboardPreferenceServiceTest.php
    - tests/Unit/Application/Presentation/Dashboard/DashboardPreferenceStateTest.php
    - tests/Unit/Delivery/Http/Dashboard/DashboardPreferenceFormDecoderTest.php
    - tests/Unit/Delivery/Http/Dashboard/DashboardPreferenceQueryDecoderTest.php
    - tests/Unit/InterfaceStandard/InterfaceStandardSchemaTest.php
    - tests/Unit/InterfaceStandard/PresentationPreferenceManagerTest.php
    - tests/Unit/InterfaceStandard/PresentationPreferenceResolverTest.php
    - tests/Unit/InterfaceStandard/PresentationPreferenceTest.php
    - tests/Unit/InterfaceStandard/SurfaceDefinitionTest.php
    - tests/Unit/InterfaceStandard/SurfaceIdentifierParityTest.php
    - tests/Unit/Portal/Http/PortalDashboardPreferencesHandlerTest.php
    - tests/Unit/Presentation/Application/Dashboard/DashboardComposerTest.php
    - tests/Unit/Presentation/Application/Dashboard/DashboardPreferenceFormPresenterTest.php
  files_to_remove:
    - src/InterfaceStandard/ConformanceDiagnostic.php
    - src/InterfaceStandard/ConformanceSeverity.php
    - src/InterfaceStandard/CustomizationPermission.php
    - src/InterfaceStandard/CustomizationScope.php
    - src/InterfaceStandard/CustomizationSlot.php
    - src/InterfaceStandard/IconName.php
    - src/InterfaceStandard/InterfaceStandardVersion.php
    - src/InterfaceStandard/ResourceName.php
    - src/InterfaceStandard/ResponsiveElement.php
    - src/InterfaceStandard/ResponsivePriority.php
    - src/InterfaceStandard/SurfaceActor.php
    - src/InterfaceStandard/SurfaceArea.php
    - src/InterfaceStandard/SurfaceConformanceReport.php
    - src/InterfaceStandard/SurfaceConformanceValidator.php
    - src/InterfaceStandard/SurfaceConformanceViolation.php
    - src/InterfaceStandard/SurfaceDeclaration.php
    - src/InterfaceStandard/SurfaceDefinition.php
    - src/InterfaceStandard/SurfaceId.php
    - src/InterfaceStandard/SurfaceIntent.php
    - src/InterfaceStandard/SurfacePattern.php
    - src/InterfaceStandard/SurfaceState.php
  tests_to_remove:
    - Implementation-owned portions only, after the package behavior suite and App integration suite pass.
  tests_to_retain_or_add:
    - tests/Architecture/BusinessWorkspaceInterfaceStandardTest.php
    - tests/Architecture/InterfaceStandardBoundaryTest.php
    - tests/Integration/InterfaceStandard/PresentationPreferencePersistenceIntegrationTest.php
    - tests/Unit/InterfaceStandard/InterfaceStandardSchemaTest.php
    - tests/Unit/InterfaceStandard/PresentationPreferenceManagerTest.php
    - tests/Unit/InterfaceStandard/PresentationPreferenceResolverTest.php
    - tests/Unit/InterfaceStandard/PresentationPreferenceTest.php
    - tests/Unit/InterfaceStandard/SurfaceDefinitionTest.php
    - tests/Unit/InterfaceStandard/SurfaceIdentifierParityTest.php
  di_or_provisioning_changes:
    - Use direct construction and supply canonical dependency values; no provider is required.
  capability_index_changes:
    - Record ownership from the verified package capability and public API manifests.
  changelog_and_evidence_changes:
    - Record exact source, package archive and dependency identities in the external release attestation and App integration ledger.
  verification_commands:
    - composer check
    - Affected App integration suites
    - Complete App package governance gate
---
## Package contract

Interface Standard provides portable vocabulary, strict owner-bound surface declarations and deterministic
semantic conformance diagnostics. Rendering, trust, authorization, navigation and presentation-preference
persistence remain host responsibilities.

## Public API and responsibility

[The public API](public-api.md) documents canonical `Kumwe\InterfaceStandard` types and invariants.
Public API, capability and service-map digests above identify the contract. No provider or hidden global
registry is supplied; immutable values and the stateless validator are directly constructed.

## Dependencies and semantic inputs

PHP `^8.5`, mbstring, Contribution 0.1.1 and Access Control 0.1.2 are declared in
[composer.json](../composer.json). Packages resolve from Packagist without a root VCS override.
Contribution owns ownership/declaration contracts; Access Control owns capability values.

## Consumer contract

Construct declarations with explicit ownership, apply semantic conformance, then independently enforce
host capability and active-generation checks. [Host integration](integration.md) documents parsing and
error behavior. Source mappings preserve compatibility provenance; inspect current Core source before
removing any duplicate. Consumer package pins identify independently verified immutable releases.

## Test ownership

Portable parsing, bounds, normalization, ownership grammar and complete conformance diagnostics belong
to package tests. The source and test inventories preserve exact provenance. Core retains composition,
registry lifecycle, rendering, graphical parity and presentation-preference persistence tests.

## Consumer verification

`composer clean-consumer` installs the real ZIP into a fresh production-only authoritative-classmap
consumer, verifies files and manifests, rejects host/SDK classes and runs the installed example.
[Verification](verification.md) documents explicit development overrides and their evidence limits.
Independent release verification binds exact source, artifact, manifests and dependency identities.

## Compatibility and drift

Consumers import the canonical types directly; aliases, wrappers and copied implementations are prohibited.
Portable changes require review and a versioned release. Host integration tests accompany exact pin updates.
Existing tags and artifacts are never replaced; [release policy](releasing.md) governs publication.

## Validation

```bash
composer install
composer check
composer clean-consumer
```

Package CI and the release workflow run the complete gate. Publication and independent verification
are separate facts, and neither alone establishes Core integration. This embedded record supplies no
self-attestation or historical branch/progress status.
