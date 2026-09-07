---
schema: kumwe-migration-handoff/v2
artifact_kind: framework_php
migration_id: KUMWE-MIG-2026-025
change_set: KUMWE-CS-2026-025
state: draft_pr_open
target:
  repository: https://github.com/kumwe/interface-standard
  artifact_identity: kumwe/interface-standard
  canonical_namespace_or_abi: Kumwe\InterfaceStandard
  branch: agent/extract-interface-standard-v2
  pull_request: https://github.com/kumwe/interface-standard/pull/1
source:
  app:
    repository: https://github.com/kumwe/app
    baseline_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    examined_paths:
    - src
    - tests
    - config
    - bootstrap
    - examples
    - tools
    - docs
    - composer.json
    old_namespace_roots:
    - Kumwe\App\InterfaceStandard
  semantic_inputs: []
  examined_dependencies:
  - Canonical Contribution 0.1.0 owner, explicit SurfaceIdentifierPolicy and definition API.
  - Canonical Access Control Capability dev source; no verified release.
  active_related_pull_requests: []
framework_php:
  composer_package: kumwe/interface-standard
  public_api_manifest: resources/public-api/v1.json
  capability_manifest: resources/capabilities/v1.json
  service_map: resources/service-map/v1.json
  source_map: resources/migration/source-map.json
  consumer_inventory: resources/migration/consumer-inventory.json
  test_ownership: resources/migration/test-ownership.json
  canonical_namespace: Kumwe\InterfaceStandard
  extracted_symbols:
  - old_fqcn: Kumwe\App\InterfaceStandard\ConformanceDiagnostic
    new_fqcn: Kumwe\InterfaceStandard\ConformanceDiagnostic
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/ConformanceDiagnostic.php
    source_sha256: 97c9f0f9dd8611155d4ee4bd99a640a12289bc2bc152eaae5d224145ce07b915
    target_path: src/ConformanceDiagnostic.php
    target_sha256: 09926f654fdc4c5abf547c3f5d24223da9f2987a7dba1c09994f9e86337d75cb
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
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\ConformanceSeverity
    new_fqcn: Kumwe\InterfaceStandard\ConformanceSeverity
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/ConformanceSeverity.php
    source_sha256: 1b06830d99b7ce22db8af7851a242c40e111cf6733d779ab25faae8d12e517b3
    target_path: src/ConformanceSeverity.php
    target_sha256: 27476c7a992890813a3597977ecd1ded545914674e355f37bac950ad707c7baf
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
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\CustomizationPermission
    new_fqcn: Kumwe\InterfaceStandard\CustomizationPermission
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/CustomizationPermission.php
    source_sha256: 69715f5df43435ea9d259c18ca02577cbf4a42883f67abe948818452a732b8e0
    target_path: src/CustomizationPermission.php
    target_sha256: 1923e94f2934a763ce9b385ee6759a82b26fd01ef23e603bf6294d8b0df7e7d8
    kind: class
    public_methods:
    - __construct
    - toArray
    public_properties:
    - scope
    - slot
    public_constants: []
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\CustomizationScope
    new_fqcn: Kumwe\InterfaceStandard\CustomizationScope
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/CustomizationScope.php
    source_sha256: 0fa09915381d4ff00eb73064539c2514a2dd86787d84b64158d174f3ca0485f5
    target_path: src/CustomizationScope.php
    target_sha256: 57e4c463f27621f6b2ed14620a2c4c6a3cfb756c908ea19862c19e3204651e3e
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
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\CustomizationSlot
    new_fqcn: Kumwe\InterfaceStandard\CustomizationSlot
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/CustomizationSlot.php
    source_sha256: 22d05ee1aedcba4cd14537ee0e6f4d73ed19ea6689d431c0450c6d18beed66c5
    target_path: src/CustomizationSlot.php
    target_sha256: 40e6d0fcb19daab936191bcc2d278421bdf43a212850209e480afb1074d9788d
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
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\IconName
    new_fqcn: Kumwe\InterfaceStandard\IconName
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/IconName.php
    source_sha256: b149f50e4e2508835489aaf8f9cbe7bd3eb27eae3c8ccec6d8792241eb246449
    target_path: src/IconName.php
    target_sha256: fea37fbe3a82acd07b271b33846b2f1ffd62363a81632638fe3e858bcc16804f
    kind: class
    public_methods:
    - __toString
    - fromString
    - value
    public_properties: []
    public_constants: []
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\InterfaceStandardVersion
    new_fqcn: Kumwe\InterfaceStandard\InterfaceStandardVersion
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/InterfaceStandardVersion.php
    source_sha256: eb604e8d140b3059871e2101491eca364c7dc77005598a46c6c72de02579b2ea
    target_path: src/InterfaceStandardVersion.php
    target_sha256: 807307ca4921317e6e808ef6be8f65d0f487905acf5f8ffa37f9831d58f0b573
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
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\ResourceName
    new_fqcn: Kumwe\InterfaceStandard\ResourceName
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/ResourceName.php
    source_sha256: 8e77f638b2c3762900086017c25d3a076e02547e12af9c47a6863de18c3f0175
    target_path: src/ResourceName.php
    target_sha256: 3adb6212b2efead595e1ee6a4a406b479633bb92f50d9873f95ff61b30c28956
    kind: class
    public_methods:
    - __toString
    - fromString
    - value
    public_properties: []
    public_constants: []
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\ResponsiveElement
    new_fqcn: Kumwe\InterfaceStandard\ResponsiveElement
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/ResponsiveElement.php
    source_sha256: 0bde3269e2c2b119899ccfb93a47c00c59f21478c7f860b3fc6c8a916e3ea00b
    target_path: src/ResponsiveElement.php
    target_sha256: 0824fe47b50d792c599d9885fdc6cfae3a99945eba7b88da2003d312c07baeaf
    kind: class
    public_methods:
    - __construct
    - toArray
    public_properties:
    - element
    - mayCollapse
    - priority
    public_constants: []
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\ResponsivePriority
    new_fqcn: Kumwe\InterfaceStandard\ResponsivePriority
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/ResponsivePriority.php
    source_sha256: 19bb274e04dd2dd5174c792e1c317aaebeff4325e5376c49281d8e71a61c44e8
    target_path: src/ResponsivePriority.php
    target_sha256: d361cb027e0f0c4f316966c48587e2d1d089edbe78cf4e7e141e7f2058362c5c
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
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceActor
    new_fqcn: Kumwe\InterfaceStandard\SurfaceActor
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/SurfaceActor.php
    source_sha256: d4acb9b9727a7493866ce774cb42e6736d5490427845ebaf8c276e740a30dc6d
    target_path: src/SurfaceActor.php
    target_sha256: 68f570c26859a5dcad4a9b9a485dbdc1935c44a104d7c2f66e25eeb75badc7b0
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
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceArea
    new_fqcn: Kumwe\InterfaceStandard\SurfaceArea
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/SurfaceArea.php
    source_sha256: 88cd05e5b19c1b92842be051bbb9183e8026758c41554f7570c5e8a9896a8582
    target_path: src/SurfaceArea.php
    target_sha256: 3d02b8445d6c0fed530a62856ffd561d8395669459aaad282b346704f13387d0
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
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceConformanceReport
    new_fqcn: Kumwe\InterfaceStandard\SurfaceConformanceReport
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/SurfaceConformanceReport.php
    source_sha256: 0444ac203e2e20ca2fbd044ef2647abab37627782b3d5a569480c112c19821fc
    target_path: src/SurfaceConformanceReport.php
    target_sha256: 1076c5782b23743fa5d89c25b565872ec5b98063e4b590adfde78b8486933585
    kind: class
    public_methods:
    - __construct
    - conforms
    - diagnostics
    - toArray
    public_properties: []
    public_constants: []
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceConformanceValidator
    new_fqcn: Kumwe\InterfaceStandard\SurfaceConformanceValidator
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/SurfaceConformanceValidator.php
    source_sha256: 94c3110d482d2899075a9cd266e3a568207cb95599dc5cc301f8d897d3452464
    target_path: src/SurfaceConformanceValidator.php
    target_sha256: 3fab21bde8d1de8e39e9df6d49a68178594f41597cd14fada9b08881ecfaf0c7
    kind: class
    public_methods:
    - allowsCustomizationAtOrBelow
    - assertConforms
    - validate
    public_properties: []
    public_constants: []
    exceptions:
    - InvalidArgumentException
    - SurfaceConformanceViolation
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceConformanceViolation
    new_fqcn: Kumwe\InterfaceStandard\SurfaceConformanceViolation
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/SurfaceConformanceViolation.php
    source_sha256: b419f07887670217bcef65d856f31ff786f0c6086c3aa237bbae23ffae51b355
    target_path: src/SurfaceConformanceViolation.php
    target_sha256: a09cdf51d014cb0bbad50a84295d8795a77799853eb7dcb38072cb2c5fa32107
    kind: class
    public_methods:
    - __construct
    public_properties:
    - report
    public_constants: []
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceDeclaration
    new_fqcn: Kumwe\InterfaceStandard\SurfaceDeclaration
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/SurfaceDeclaration.php
    source_sha256: b6466bac836d0eb812e14138e838eeb31996f42239a71407f0ced3ea60a71b3d
    target_path: src/SurfaceDeclaration.php
    target_sha256: 86d74535d411c334eec7fe27050b57d869dd2372f7cf1c1438014f73976b74f1
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
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceDefinition
    new_fqcn: Kumwe\InterfaceStandard\SurfaceDefinition
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/SurfaceDefinition.php
    source_sha256: a73d997d04828d5a20d1956c347d6eeb7926bc00f6758af2b89eba46ff7840a6
    target_path: src/SurfaceDefinition.php
    target_sha256: 6eb9e7327f152763ecd63d7b81f590f14bd39aca6a16599b89fff8f7909c1582
    kind: class
    public_methods:
    - admit
    - fromArray
    - identifier
    - toArray
    public_properties:
    - declaration
    public_constants: []
    exceptions:
    - InvalidArgumentException
    - SurfaceConformanceViolation
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceId
    new_fqcn: Kumwe\InterfaceStandard\SurfaceId
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/SurfaceId.php
    source_sha256: dfbbb01ee1e7bce95d8c2bc9e291e2163f3e913619228fe4b5ba53dbea1524f2
    target_path: src/SurfaceId.php
    target_sha256: 772b1e488391b4c1f1ce321d4df1e936de0f8fffb3f959d4186f557d17ac6e6c
    kind: class
    public_methods:
    - __toString
    - fromString
    - value
    public_properties: []
    public_constants: []
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceIntent
    new_fqcn: Kumwe\InterfaceStandard\SurfaceIntent
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/SurfaceIntent.php
    source_sha256: dff204c24d782c3735c81f83799f06f9b74ce437686173ef4b4a2857aec9c25d
    target_path: src/SurfaceIntent.php
    target_sha256: a120b13b17ed3419fe34ffba011398fa6192ef39d07a02c07287bf3290652e81
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
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfacePattern
    new_fqcn: Kumwe\InterfaceStandard\SurfacePattern
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/SurfacePattern.php
    source_sha256: 792132ccb368f80f94869e7101ec3ae6ac47f508f66a30bddba8aa23edafe605
    target_path: src/SurfacePattern.php
    target_sha256: 9bb8daaf951df043ab5f966278bad1d2cf07e00525ffda03768f557f4fd19f07
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
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceState
    new_fqcn: Kumwe\InterfaceStandard\SurfaceState
    source_repository: https://github.com/kumwe/app
    source_commit: 24ecf956423c18933e824b43cea1bfb9127a79a9
    source_path: src/InterfaceStandard/SurfaceState.php
    source_sha256: 23dda2a78c3531ecc1675ebd4aee5cf462125116be4b5ff1067ab293ef82cb78
    target_path: src/SurfaceState.php
    target_sha256: 9c288eaa2b6f0a50a2525e76e5a6c0821b04b5ff74d4177a60a541202644848e
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
    exceptions:
    - InvalidArgumentException
    serialization_contract: Method PHPDoc and docs/public-api.md; deterministic toArray when present.
    compatibility: Canonical dependency and namespace migration; observable declaration semantics preserved.
  consumers:
    app_code:
    - src/InterfaceStandard/ConformanceDiagnostic.php
    - src/InterfaceStandard/CustomizationScope.php
    - src/InterfaceStandard/SurfaceIntent.php
    - src/InterfaceStandard/SurfaceDeclaration.php
    - src/InterfaceStandard/SurfaceConformanceViolation.php
    - src/InterfaceStandard/SurfaceDefinition.php
    - src/InterfaceStandard/CustomizationSlot.php
    - src/InterfaceStandard/SurfaceId.php
    - src/InterfaceStandard/ResourceName.php
    - src/InterfaceStandard/IconName.php
    - src/InterfaceStandard/ResponsiveElement.php
    - src/InterfaceStandard/ResponsivePriority.php
    - src/InterfaceStandard/SurfaceConformanceValidator.php
    - src/InterfaceStandard/SurfaceConformanceReport.php
    - src/InterfaceStandard/InterfaceStandardVersion.php
    - src/InterfaceStandard/SurfaceArea.php
    - src/InterfaceStandard/CustomizationPermission.php
    - src/InterfaceStandard/SurfaceActor.php
    - src/InterfaceStandard/ConformanceSeverity.php
    - src/InterfaceStandard/SurfaceState.php
    - src/InterfaceStandard/SurfacePattern.php
    - src/Presentation/Application/Preference/PresentationPreferenceResolution.php
    - src/Presentation/Application/Preference/PresentationPreferenceContext.php
    - src/Presentation/Application/Preference/PresentationPreferenceResolver.php
    - src/Presentation/Application/Dashboard/DashboardView.php
    - src/Presentation/Application/Dashboard/DashboardComposer.php
    - src/Presentation/Application/Dashboard/DashboardWidget.php
    - src/Presentation/Application/Dashboard/DashboardWorkflowCatalog.php
    - src/Presentation/Application/Dashboard/DashboardPreferenceFormPresenter.php
    - src/Administrator/Http/Handler/AdministratorDashboardPreferencesHandler.php
    - src/Administrator/Http/Handler/AdministratorDashboardHandler.php
    - src/Extension/Contribution/CanonicalManifestInterpreter.php
    - src/Extension/Contribution/CoreContributionRegistrar.php
    - src/Extension/Contribution/CoreExtensionContributions.php
    - src/Delivery/Http/Dashboard/DashboardPreferenceQueryDecoder.php
    - src/Delivery/Http/Dashboard/DashboardPreferenceFormDecoder.php
    - src/Application/Presentation/Preference/PresentationPreferencePolicy.php
    - src/Application/Presentation/Preference/PresentationPreferenceManager.php
    - src/Application/Presentation/Preference/RegisteredPresentationPreferencePolicy.php
    - src/Application/Presentation/Dashboard/DashboardPreferenceState.php
    - src/Application/Presentation/Dashboard/DashboardPreferenceMutation.php
    - src/Application/Presentation/Dashboard/DashboardPreferenceService.php
    - src/Application/Presentation/Dashboard/DashboardPreferenceAccessGroupState.php
    - src/Portal/Http/Handler/PortalHomeHandler.php
    - src/Portal/Http/Handler/PortalDashboardPreferencesHandler.php
    configuration_and_di: []
    reflection_and_string_references: []
    fixtures_and_examples:
    - tests/Support/DashboardPreferenceTestRuntime.php
    - tests/Integration/InterfaceStandard/PresentationPreferencePersistenceIntegrationTest.php
    - tests/Unit/InterfaceStandard/PresentationPreferenceResolverTest.php
    - tests/Unit/InterfaceStandard/SurfaceIdentifierParityTest.php
    - tests/Unit/InterfaceStandard/PresentationPreferenceTest.php
    - tests/Unit/InterfaceStandard/SurfaceDefinitionTest.php
    - tests/Unit/InterfaceStandard/PresentationPreferenceManagerTest.php
    - tests/Unit/InterfaceStandard/InterfaceStandardSchemaTest.php
    - tests/Unit/Presentation/Application/Dashboard/DashboardPreferenceFormPresenterTest.php
    - tests/Unit/Presentation/Application/Dashboard/DashboardComposerTest.php
    - tests/Unit/Administrator/Http/Handler/AdministratorDashboardPreferencesHandlerTest.php
    - tests/Unit/Delivery/Http/Dashboard/DashboardPreferenceFormDecoderTest.php
    - tests/Unit/Delivery/Http/Dashboard/DashboardPreferenceQueryDecoderTest.php
    - tests/Unit/Application/Presentation/Dashboard/DashboardPreferenceMutationTest.php
    - tests/Unit/Application/Presentation/Dashboard/DashboardPreferenceServiceTest.php
    - tests/Unit/Application/Presentation/Dashboard/DashboardPreferenceStateTest.php
    - tests/Unit/Portal/Http/PortalDashboardPreferencesHandlerTest.php
    external:
    - repository: https://github.com/kumwe/extension-sdk
      files: []
  dependency_injection:
    mode: direct
    provider: null
    factories: []
    aliases: []
    service_lifetimes: []
    configuration_keys: []
    provider_absence_reason: Immutable declarations and directly constructed stateless conformance validator; no extracted
      injected runtime service.
release:
  publication_authorized: false
  release_verified: false
  app_adoption_authorized: false
ownership:
  responsibility: Typed interface declarations and deterministic semantic conformance.
  non_responsibilities:
  - Host trust and active contribution admission
  - Authorization enforcement, rendering, navigation, persistence and transactions
  - Provider implementation storage, dispatch and conversion algorithms
  allowed_dependency_ceiling:
  - kumwe/contribution
  - kumwe/access-control
  - kumwe/access-context
  implementation_owner: kumwe/interface-standard
  next_consumer: kumwe/app
  public_manifests:
  - path: resources/public-api/v1.json
    sha256: cf7de1cd9aa00f77ba8b59f8fd7b9cbf4df664d037fa277e8d51ea88a6ffba83
  - path: resources/capabilities/v1.json
    sha256: 1846be2a2f89eaf03f4cc996fe1b7c51fb7b1c6297bf8bab77df3f4d60967638
  - path: resources/service-map/v1.json
    sha256: 3fb0e4b2e1a2b18f0bb0aed213dba5d0896bd7e12d8d984d979b9411a3b6e29f
  intentionally_excluded:
  - src/InterfaceStandard/PresentationPreferenceValue.php
  - src/InterfaceStandard/PresentationPreference.php
  - src/InterfaceStandard/PresentationPreferenceKey.php
native_cpp: null
php_extension: null
tests:
  moved_or_added:
  - path: tests/run.php
    behavior: Strict declaration parsing, bounds, normalization, serialization and canonical dependency contracts; ownership
      grammar and complete deterministic conformance diagnostics.
  remain_in_app_or_consumer: &id001
  - tests/Architecture/InterfaceStandardBoundaryTest.php
  - tests/Architecture/BusinessWorkspaceInterfaceStandardTest.php
  - tests/Unit/InterfaceStandard/InterfaceStandardSchemaTest.php
  - tests/Unit/InterfaceStandard/PresentationPreferenceTest.php
  - tests/Unit/InterfaceStandard/PresentationPreferenceResolverTest.php
  - tests/Unit/InterfaceStandard/PresentationPreferenceManagerTest.php
  - tests/Integration/InterfaceStandard/PresentationPreferencePersistenceIntegrationTest.php
  split_tests:
  - path: tests/Unit/InterfaceStandard/SurfaceDefinitionTest.php
    sha256: 3a1ad67847d4651ec271299d09448d8f3d329731446e40b1fa3275686257116c
  - path: tests/Unit/InterfaceStandard/SurfaceIdentifierParityTest.php
    sha256: 1e49af50375aa6ae3636bfab30fdf6ea9c605d9708a6a6c10d64a40f061de70e
  prohibited_duplicates:
  - Do not retain vendor-class implementation assertions in App after Phase 2; preserve host composition assertions.
  corpora: []
documentation:
  charter: CHARTER.md
  readme: README.md
  public_api: docs/public-api.md
  architecture: docs/architecture.md
  integration_or_consumer: docs/integration.md
  examples:
  - examples/consumer.php
  changelog_record: CHANGELOG.md#unreleased
release_expectations:
  version_policy: SemVer; maintainer chooses first version after review. No release is claimed.
  expected_artifact_types:
  - Composer ZIP distribution
  required_checks:
  - '@lint'
  - '@api'
  - '@architecture'
  - '@analyse'
  - '@cs'
  - '@test'
  - '@examples'
  - '@security'
  - '@clean-consumer'
  required_registry_or_installer: Composer registry with immutable dist source
  required_external_attestation: true
next_task:
  phase_name: Complete and review Phase 1, then independently verify the immutable release before separate App adoption
  permitted_only_when:
  - Phase 1 release automation and hosted final-head checks pass
  - All exact dependencies have independent release verification
  - Human merge and automation release complete
  - Separate RELEASE-ATTESTATION.yaml status release-verified
  consumer_repository: https://github.com/kumwe/app
  dependency_or_native_change: Add exact verified kumwe/interface-standard release; remove old App definitions.
  namespace_or_api_replacements:
  - old_fqcn: Kumwe\App\InterfaceStandard\ConformanceDiagnostic
    new_fqcn: Kumwe\InterfaceStandard\ConformanceDiagnostic
  - old_fqcn: Kumwe\App\InterfaceStandard\ConformanceSeverity
    new_fqcn: Kumwe\InterfaceStandard\ConformanceSeverity
  - old_fqcn: Kumwe\App\InterfaceStandard\CustomizationPermission
    new_fqcn: Kumwe\InterfaceStandard\CustomizationPermission
  - old_fqcn: Kumwe\App\InterfaceStandard\CustomizationScope
    new_fqcn: Kumwe\InterfaceStandard\CustomizationScope
  - old_fqcn: Kumwe\App\InterfaceStandard\CustomizationSlot
    new_fqcn: Kumwe\InterfaceStandard\CustomizationSlot
  - old_fqcn: Kumwe\App\InterfaceStandard\IconName
    new_fqcn: Kumwe\InterfaceStandard\IconName
  - old_fqcn: Kumwe\App\InterfaceStandard\InterfaceStandardVersion
    new_fqcn: Kumwe\InterfaceStandard\InterfaceStandardVersion
  - old_fqcn: Kumwe\App\InterfaceStandard\ResourceName
    new_fqcn: Kumwe\InterfaceStandard\ResourceName
  - old_fqcn: Kumwe\App\InterfaceStandard\ResponsiveElement
    new_fqcn: Kumwe\InterfaceStandard\ResponsiveElement
  - old_fqcn: Kumwe\App\InterfaceStandard\ResponsivePriority
    new_fqcn: Kumwe\InterfaceStandard\ResponsivePriority
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceActor
    new_fqcn: Kumwe\InterfaceStandard\SurfaceActor
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceArea
    new_fqcn: Kumwe\InterfaceStandard\SurfaceArea
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceConformanceReport
    new_fqcn: Kumwe\InterfaceStandard\SurfaceConformanceReport
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceConformanceValidator
    new_fqcn: Kumwe\InterfaceStandard\SurfaceConformanceValidator
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceConformanceViolation
    new_fqcn: Kumwe\InterfaceStandard\SurfaceConformanceViolation
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceDeclaration
    new_fqcn: Kumwe\InterfaceStandard\SurfaceDeclaration
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceDefinition
    new_fqcn: Kumwe\InterfaceStandard\SurfaceDefinition
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceId
    new_fqcn: Kumwe\InterfaceStandard\SurfaceId
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceIntent
    new_fqcn: Kumwe\InterfaceStandard\SurfaceIntent
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfacePattern
    new_fqcn: Kumwe\InterfaceStandard\SurfacePattern
  - old_fqcn: Kumwe\App\InterfaceStandard\SurfaceState
    new_fqcn: Kumwe\InterfaceStandard\SurfaceState
  files_to_update:
  - src/InterfaceStandard/ConformanceDiagnostic.php
  - src/InterfaceStandard/CustomizationScope.php
  - src/InterfaceStandard/SurfaceIntent.php
  - src/InterfaceStandard/SurfaceDeclaration.php
  - src/InterfaceStandard/SurfaceConformanceViolation.php
  - src/InterfaceStandard/SurfaceDefinition.php
  - src/InterfaceStandard/CustomizationSlot.php
  - src/InterfaceStandard/SurfaceId.php
  - src/InterfaceStandard/ResourceName.php
  - src/InterfaceStandard/IconName.php
  - src/InterfaceStandard/ResponsiveElement.php
  - src/InterfaceStandard/ResponsivePriority.php
  - src/InterfaceStandard/SurfaceConformanceValidator.php
  - src/InterfaceStandard/SurfaceConformanceReport.php
  - src/InterfaceStandard/InterfaceStandardVersion.php
  - src/InterfaceStandard/SurfaceArea.php
  - src/InterfaceStandard/CustomizationPermission.php
  - src/InterfaceStandard/SurfaceActor.php
  - src/InterfaceStandard/ConformanceSeverity.php
  - src/InterfaceStandard/SurfaceState.php
  - src/InterfaceStandard/SurfacePattern.php
  - src/Presentation/Application/Preference/PresentationPreferenceResolution.php
  - src/Presentation/Application/Preference/PresentationPreferenceContext.php
  - src/Presentation/Application/Preference/PresentationPreferenceResolver.php
  - src/Presentation/Application/Dashboard/DashboardView.php
  - src/Presentation/Application/Dashboard/DashboardComposer.php
  - src/Presentation/Application/Dashboard/DashboardWidget.php
  - src/Presentation/Application/Dashboard/DashboardWorkflowCatalog.php
  - src/Presentation/Application/Dashboard/DashboardPreferenceFormPresenter.php
  - src/Administrator/Http/Handler/AdministratorDashboardPreferencesHandler.php
  - src/Administrator/Http/Handler/AdministratorDashboardHandler.php
  - src/Extension/Contribution/CanonicalManifestInterpreter.php
  - src/Extension/Contribution/CoreContributionRegistrar.php
  - src/Extension/Contribution/CoreExtensionContributions.php
  - src/Delivery/Http/Dashboard/DashboardPreferenceQueryDecoder.php
  - src/Delivery/Http/Dashboard/DashboardPreferenceFormDecoder.php
  - src/Application/Presentation/Preference/PresentationPreferencePolicy.php
  - src/Application/Presentation/Preference/PresentationPreferenceManager.php
  - src/Application/Presentation/Preference/RegisteredPresentationPreferencePolicy.php
  - src/Application/Presentation/Dashboard/DashboardPreferenceState.php
  - src/Application/Presentation/Dashboard/DashboardPreferenceMutation.php
  - src/Application/Presentation/Dashboard/DashboardPreferenceService.php
  - src/Application/Presentation/Dashboard/DashboardPreferenceAccessGroupState.php
  - src/Portal/Http/Handler/PortalHomeHandler.php
  - src/Portal/Http/Handler/PortalDashboardPreferencesHandler.php
  - tests/Support/DashboardPreferenceTestRuntime.php
  - tests/Integration/InterfaceStandard/PresentationPreferencePersistenceIntegrationTest.php
  - tests/Unit/InterfaceStandard/PresentationPreferenceResolverTest.php
  - tests/Unit/InterfaceStandard/SurfaceIdentifierParityTest.php
  - tests/Unit/InterfaceStandard/PresentationPreferenceTest.php
  - tests/Unit/InterfaceStandard/SurfaceDefinitionTest.php
  - tests/Unit/InterfaceStandard/PresentationPreferenceManagerTest.php
  - tests/Unit/InterfaceStandard/InterfaceStandardSchemaTest.php
  - tests/Unit/Presentation/Application/Dashboard/DashboardPreferenceFormPresenterTest.php
  - tests/Unit/Presentation/Application/Dashboard/DashboardComposerTest.php
  - tests/Unit/Administrator/Http/Handler/AdministratorDashboardPreferencesHandlerTest.php
  - tests/Unit/Delivery/Http/Dashboard/DashboardPreferenceFormDecoderTest.php
  - tests/Unit/Delivery/Http/Dashboard/DashboardPreferenceQueryDecoderTest.php
  - tests/Unit/Application/Presentation/Dashboard/DashboardPreferenceMutationTest.php
  - tests/Unit/Application/Presentation/Dashboard/DashboardPreferenceServiceTest.php
  - tests/Unit/Application/Presentation/Dashboard/DashboardPreferenceStateTest.php
  - tests/Unit/Portal/Http/PortalDashboardPreferencesHandlerTest.php
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
  - Portable implementation assertions in mixed source tests listed by resources/migration/test-ownership.json; do not delete
    host portions.
  tests_to_retain_or_add: *id001
  di_or_provisioning_changes:
  - No package DI provider; preserve App-owned composition and registrar services.
  capability_index_changes:
  - Update App capability index references for moved types without claiming composed roadmap completion.
  changelog_and_evidence_changes:
  - Update App changelog and migration ledger under KUMWE-CS-2026-025
  verification_commands:
  - composer check
  - Run full affected App integration and delivery checks after adoption.
concurrency:
  likely_conflict_files:
  - composer.json
  - composer.lock
  - config/capabilities.php
  - src/InterfaceStandard/ConformanceDiagnostic.php
  - src/InterfaceStandard/CustomizationScope.php
  - src/InterfaceStandard/SurfaceIntent.php
  - src/InterfaceStandard/SurfaceDeclaration.php
  - src/InterfaceStandard/SurfaceConformanceViolation.php
  - src/InterfaceStandard/SurfaceDefinition.php
  - src/InterfaceStandard/CustomizationSlot.php
  - src/InterfaceStandard/SurfaceId.php
  - src/InterfaceStandard/ResourceName.php
  - src/InterfaceStandard/IconName.php
  - src/InterfaceStandard/ResponsiveElement.php
  - src/InterfaceStandard/ResponsivePriority.php
  - src/InterfaceStandard/SurfaceConformanceValidator.php
  - src/InterfaceStandard/SurfaceConformanceReport.php
  - src/InterfaceStandard/InterfaceStandardVersion.php
  - src/InterfaceStandard/SurfaceArea.php
  - src/InterfaceStandard/CustomizationPermission.php
  - src/InterfaceStandard/SurfaceActor.php
  - src/InterfaceStandard/ConformanceSeverity.php
  - src/InterfaceStandard/SurfaceState.php
  - src/InterfaceStandard/SurfacePattern.php
  - src/Presentation/Application/Preference/PresentationPreferenceResolution.php
  - src/Presentation/Application/Preference/PresentationPreferenceContext.php
  - src/Presentation/Application/Preference/PresentationPreferenceResolver.php
  - src/Presentation/Application/Dashboard/DashboardView.php
  - src/Presentation/Application/Dashboard/DashboardComposer.php
  - src/Presentation/Application/Dashboard/DashboardWidget.php
  - src/Presentation/Application/Dashboard/DashboardWorkflowCatalog.php
  - src/Presentation/Application/Dashboard/DashboardPreferenceFormPresenter.php
  - src/Administrator/Http/Handler/AdministratorDashboardPreferencesHandler.php
  - src/Administrator/Http/Handler/AdministratorDashboardHandler.php
  - src/Extension/Contribution/CanonicalManifestInterpreter.php
  - src/Extension/Contribution/CoreContributionRegistrar.php
  - src/Extension/Contribution/CoreExtensionContributions.php
  - src/Delivery/Http/Dashboard/DashboardPreferenceQueryDecoder.php
  - src/Delivery/Http/Dashboard/DashboardPreferenceFormDecoder.php
  - src/Application/Presentation/Preference/PresentationPreferencePolicy.php
  - src/Application/Presentation/Preference/PresentationPreferenceManager.php
  - src/Application/Presentation/Preference/RegisteredPresentationPreferencePolicy.php
  - src/Application/Presentation/Dashboard/DashboardPreferenceState.php
  - src/Application/Presentation/Dashboard/DashboardPreferenceMutation.php
  - src/Application/Presentation/Dashboard/DashboardPreferenceService.php
  - src/Application/Presentation/Dashboard/DashboardPreferenceAccessGroupState.php
  - src/Portal/Http/Handler/PortalHomeHandler.php
  - src/Portal/Http/Handler/PortalDashboardPreferencesHandler.php
  - tests/Support/DashboardPreferenceTestRuntime.php
  - tests/Integration/InterfaceStandard/PresentationPreferencePersistenceIntegrationTest.php
  - tests/Unit/InterfaceStandard/PresentationPreferenceResolverTest.php
  - tests/Unit/InterfaceStandard/SurfaceIdentifierParityTest.php
  - tests/Unit/InterfaceStandard/PresentationPreferenceTest.php
  - tests/Unit/InterfaceStandard/SurfaceDefinitionTest.php
  - tests/Unit/InterfaceStandard/PresentationPreferenceManagerTest.php
  - tests/Unit/InterfaceStandard/InterfaceStandardSchemaTest.php
  - tests/Unit/Presentation/Application/Dashboard/DashboardPreferenceFormPresenterTest.php
  - tests/Unit/Presentation/Application/Dashboard/DashboardComposerTest.php
  - tests/Unit/Administrator/Http/Handler/AdministratorDashboardPreferencesHandlerTest.php
  - tests/Unit/Delivery/Http/Dashboard/DashboardPreferenceFormDecoderTest.php
  - tests/Unit/Delivery/Http/Dashboard/DashboardPreferenceQueryDecoderTest.php
  - tests/Unit/Application/Presentation/Dashboard/DashboardPreferenceMutationTest.php
  - tests/Unit/Application/Presentation/Dashboard/DashboardPreferenceServiceTest.php
  - tests/Unit/Application/Presentation/Dashboard/DashboardPreferenceStateTest.php
  - tests/Unit/Portal/Http/PortalDashboardPreferencesHandlerTest.php
  related_migrations:
  - Contribution
  - Access Control
  ownership_conflicts: []
  integration_train: null
  resolution_rule: semantic-preservation
governance:
  classification: enabling-refactor
  roadmap_refs: []
  non_roadmap_refs:
  - NRM-2026-025
  completion_claim: false
decisions:
- 21 extracted types; three presentation preference types retained in host.
- No aliases, vendor copies, host registrars or empty ConfigProvider.
- Local source aliases are preliminary development verification only.
blockers:
- Release-on-record automation and integrity tests not implemented here.
- Hosted PHP/platform matrix and final committed-head gate evidence pending.
- Immutable dependency verification incomplete; publication and App adoption blocked.
- Complete external security audit pending.
---



# Phase 1 handoff

21 source types extracted; planning count was 24. The three presentation preference types remain App-owned.

The draft PR URL is observed, not predicted. No merge, tag, release, source digest for a future commit, artifact publication, or App adoption is claimed. The source map contains one row per extracted symbol with source and target hashes. The public API manifest enumerates all stable methods, parameter names/defaults, return types, readonly properties, enum cases and public constants. Capability and empty service manifests describe the actual extracted runtime.

## Ownership and dependency decisions

21 source types extracted; planning count was 24. The three presentation preference types remain App-owned.

The package owns immutable vocabulary, strict semantic declarations, and directly constructible stateless conformance validation. Contribution owns ContributionOwner, ContributionDefinition and SurfaceIdentifierPolicy; Access Control owns Capability. SurfaceDefinition performs semantic conformance admission only, never trusted activation or authorization. No Access Context value appears in this closure.

The canonical Contribution API requires an explicit SurfaceIdentifierPolicy. SurfaceDeclaration chooses dotted("interface-surface") without core exemption or version markers. This preserves the original safe owner-relative suffix grammar, including repeated dots inside historically valid owner prefixes. Runtime input checking on the conformance report is preserved; its PHPDoc accurately accepts iterable candidates. Exhaustive enum tables no longer contain unreachable null fallbacks.

The production token guard permits only the documented dependency namespaces and rejects host/native/container loading. The source map records exact source commits, paths, source digests, new symbols, target paths, and current target digests. Consumer inventory records file-level migration references without modifying App.

## Retained source files

- `src/InterfaceStandard/PresentationPreferenceValue.php`
- `src/InterfaceStandard/PresentationPreference.php`
- `src/InterfaceStandard/PresentationPreferenceKey.php`

Their implementation, authority and tests remain App-owned. No copying, replacement registrar, fallback, or empty DI provider is introduced.

## Verification and blockers

The source implementation passes the behavior suite and maximum-level static analysis locally. PHP syntax, API manifests, dependency guard, PSR-12, example and archive-consumer commands are reproducible from repository scripts. Local dependency inputs are development source snapshots with explicit dev-source aliases, not immutable dependency attestations. Exact target dependency coordinates are in composer.json. Contribution 0.1.0 has separately verified evidence; Access Control has no verified successor release, which blocks publication.

Pending: release-on-record automation and its integrity tests, supported-platform hosted CI results, complete security audit, immutable dependency verification, and all final committed-head package/archive/consumer gates. The current draft must not be marked review-ready based solely on local tests. Parent coordination may add release automation and final-head evidence separately without changing these ownership decisions.

## Test ownership and Phase 2

Install an exact independently verified release before changing App. See `resources/migration/source-map.json` for every namespace replacement and `consumer-inventory.json` for the inspected file-level references. Do not add aliases, wrappers, dual PSR-4 roots, or shadow implementations.

Build or parse a SurfaceDeclaration with a canonical ContributionOwner, then call SurfaceDefinition::admit or fromArray. Catch InvalidArgumentException for malformed metadata and SurfaceConformanceViolation for semantic errors; the latter exposes its complete report. Apply host capability checks and active-generation checks independently before delivery. Rendering and presentation-preference persistence remain host-owned.

In Phase 2, reconcile App changes since the captured baseline, update every affected import and signature to the mapped canonical owner, delete the extracted App definitions, and move only portable implementation assertions out of mixed App tests. Retain host composition and lifecycle assertions listed in `resources/migration/test-ownership.json`. Update the App dependency lock, migration ledger, capability index and changelog; run affected host and integration-train gates. No App files were changed here.


The test ownership manifest identifies original App test inputs by hash. Host-owned lifecycle/registry/rendering portions remain in App; portable assertions are removed from App only in the separate release-verified adoption task. File-level consumer references are in the inventory; reconcile newly changed references before deletion.

## Change and roadmap evidence

KUMWE-CS-2026-025 / KUMWE-MIG-2026-025 / NRM-2026-025. See CHANGELOG.md. This is an enabling refactor, not evidence that lifecycle admission, trust revocation, graphical parity, conversion provider activation, or any composed App roadmap gate is complete.

## Drift check and source evidence

Before Phase 2, recompute source SHA-256 for each mapped App file and compare the captured baseline. Route new portable behavior through its owning package and a separately verified release first. Re-scan `resources/migration/consumer-inventory.json`; preserve concurrently added host behavior and resolve conflicts semantically. No silent source overwrite is permitted.

## Validation recipe and observed local results

`php tests/run.php`, `php tools/lint.php`, `php tools/public-api.php`, `php tools/architecture.php`, PHPStan `analyse --no-progress` at maximum level, and PHP_CodeSniffer with the checked-in PSR-12 configuration are the local package commands. The actual runtime is PHP 8.5.10 NTS. Clean-consumer verification installs the built ZIP with no dev packages and authoritative classmap, then executes the installed example with real dependency types. Its explicit local `dev-source` aliases keep preliminary composition evidence distinct from independent release evidence. The final committed-head tests and published artifact identity remain external verification responsibilities.

## Source candidate CI

The `Source candidate gate` checks this PR using the explicitly recorded development dependency coordinates in `resources/source-ci-dependencies.json`. It installs QA tools, executes the package source gate and validates a fresh archive consumer. Development branches are not represented as released versions. This workflow is not the common immutable-release Package gate and cannot authorize publication or adoption.
