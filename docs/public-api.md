# Public API

All symbols below are exported by `kumwe/interface-standard`. The machine-readable signature and enum/constant/property inventory is `resources/public-api/v1.json`; `composer api` rejects drift. Parameter names are part of the documented PHP API.

These values and operations perform no I/O, trust checks, authorization, provider selection, persistence, transaction management, or cross-process coordination. Instances use readonly state except the diagnostic exception inherited from PHP. Returned arrays are values, not shared registry state. There is no global mutable registry. Host code owns concurrency, transactions, rendering, and active contribution lifecycles. Invalid argument and conformance exceptions leave no external state changes. Serialization produces deterministic arrays, not encoded JSON, decimal computation, or cryptographic bytes. Source `@since 2.0.0` annotations identify the App API lineage; they do not announce a package release.

## `Kumwe\InterfaceStandard\ConformanceDiagnostic`

One deterministic, machine-addressable KIS conformance finding.

@since  2.0.0

Public readonly `string $code`. 

Public readonly `Kumwe\InterfaceStandard\ConformanceSeverity $severity`. 

Public readonly `string $path`. 

Public readonly `string $message`. 

### `__construct(string $code, Kumwe\InterfaceStandard\ConformanceSeverity $severity, string $path, string $message)`

Validate a stable diagnostic code, declaration path, and operator-facing explanation.


- `@param   string               $code      Stable dotted code used by tests and programme evidence.`
- `@param   ConformanceSeverity  $severity  Whether the finding blocks admission.`
- `@param   string               $path      Declaration field or indexed field where the problem occurred.`
- `@param   string               $message   Complete sentence explaining the correction required. `
- `@throws  InvalidArgumentException  When diagnostic metadata is empty, unsafe, or unbounded. `
- `@since   2.0.0`

### `toArray(): array`

Export structured evidence for conformance tooling and extension diagnostics.


- `@return  array{code: string, severity: string, path: string, message: string}  Canonical finding document. `
- `@since   2.0.0`

## `Kumwe\InterfaceStandard\ConformanceSeverity`

Merge significance of one deterministic interface conformance diagnostic.

@since  2.0.0

| Case | Serialized value |
|---|---|
| `Error` | `error` |
| `Warning` | `warning` |

## `Kumwe\InterfaceStandard\CustomizationPermission`

One whitelisted presentation slot and the layer allowed to customize it.

@since  2.0.0

Public readonly `Kumwe\InterfaceStandard\CustomizationSlot $slot`. 

Public readonly `Kumwe\InterfaceStandard\CustomizationScope $scope`. 

### `__construct(Kumwe\InterfaceStandard\CustomizationSlot $slot, Kumwe\InterfaceStandard\CustomizationScope $scope)`

Pair an approved presentation choice with its allowed configuration layer.

Semantic compatibility between a slot and scope is checked by `SurfaceConformanceValidator`, so
invalid pairs produce a structured diagnostic before a contribution can be admitted.


- `@param  CustomizationSlot   $slot   Safe presentation choice exposed by the surface.`
- `@param  CustomizationScope  $scope  Configuration layer permitted to change that choice. `
- `@since  2.0.0`

### `toArray(): array`

Export the manifest-comparison shape.


- `@return  array{slot: string, scope: string}  Canonical slot and scope values. `
- `@since   2.0.0`

## `Kumwe\InterfaceStandard\CustomizationScope`

Highest configuration layer allowed to change one whitelisted presentation slot.

@since  2.0.0

| Case | Serialized value |
|---|---|
| `Site` | `site` |
| `Administrator` | `administrator` |
| `RoleWorkspace` | `role-workspace` |
| `User` | `user` |

## `Kumwe\InterfaceStandard\CustomizationSlot`

Whitelisted presentation choice a conforming surface may expose for customization.

Security meaning, authorization visibility, warnings, audit context, destructive classification,
and accessibility semantics are intentionally absent and therefore cannot be customized away.

@since  2.0.0

| Case | Serialized value |
|---|---|
| `Columns` | `columns` |
| `Density` | `density` |
| `SavedViews` | `saved-views` |
| `Layout` | `layout` |
| `ThemeMode` | `theme-mode` |
| `DashboardCards` | `dashboard-cards` |
| `LandingWorkspace` | `landing-workspace` |
| `NavigationShortcuts` | `navigation-shortcuts` |
| `LabelsHelp` | `labels-help` |

## `Kumwe\InterfaceStandard\IconName`

Safe semantic icon reference resolved by the active theme's validated icon registry.

It carries a name only, never SVG, markup, a URL, or an asset path. Core and extension templates can
therefore provide their own visual implementation without changing a surface declaration.

@since  2.0.0

### `static fromString(string $value): Kumwe\InterfaceStandard\IconName`

Validate a theme-neutral icon registry key.


- `@param   string  $value  Lowercase icon name without paths or markup. `
- `@return  self  Validated icon reference. `
- `@throws  InvalidArgumentException  When the name cannot be resolved safely through an icon registry. `
- `@since   2.0.0`

### `value(): string`

Return the theme registry key.


- `@return  string  Canonical icon name. `
- `@since   2.0.0`

### `__toString(): string`

Render the icon registry key.


- `@return  string  Same canonical value returned by `value()`. `
- `@since   2.0.0`

## `Kumwe\InterfaceStandard\InterfaceStandardVersion`

Version of the semantic interface contract a surface has been admitted against.

A declaration names an exact supported version rather than a floating latest version, so a future
incompatible standard is refused until a deliberate compatibility path is available.

@since  2.0.0

| Case | Serialized value |
|---|---|
| `Kis1` | `kis-1.0` |

## `Kumwe\InterfaceStandard\ResourceName`

Semantic resource or element name used by an interface declaration.

The name describes business meaning only. It cannot be a route, template path, selector, expression,
statement, or executable fragment.

@since  2.0.0

### `static fromString(string $value): Kumwe\InterfaceStandard\ResourceName`

Validate a bounded semantic name for a resource or responsive element.


- `@param   string  $value  Lowercase words separated by single dots or hyphens. `
- `@return  self  Safe semantic name. `
- `@throws  InvalidArgumentException  When the value is not a bounded semantic identifier. `
- `@since   2.0.0`

### `value(): string`

Return the semantic name for comparison or serialization.


- `@return  string  Canonical lowercase name. `
- `@since   2.0.0`

### `__toString(): string`

Render the canonical resource name.


- `@return  string  Same value returned by `value()`. `
- `@since   2.0.0`

## `Kumwe\InterfaceStandard\ResponsiveElement`

Responsive treatment of one semantic field, action, status, or metadata group.

@since  2.0.0

Public readonly `Kumwe\InterfaceStandard\ResourceName $element`. 

Public readonly `Kumwe\InterfaceStandard\ResponsivePriority $priority`. 

Public readonly `bool $mayCollapse`. 

### `__construct(Kumwe\InterfaceStandard\ResourceName $element, Kumwe\InterfaceStandard\ResponsivePriority $priority, bool $mayCollapse)`

Declare importance and whether constrained layouts may move the element into secondary detail.


- `@param  ResourceName        $element      Semantic element name, never a CSS selector.`
- `@param  ResponsivePriority  $priority     Importance when the usable container narrows.`
- `@param  bool                $mayCollapse  Whether a labelled disclosure may replace direct display. `
- `@since  2.0.0`

### `toArray(): array`

Export deterministic responsive metadata for a manifest or conformance inventory.


- `@return  array{element: string, priority: string, may_collapse: bool}  Semantic responsive declaration. `
- `@since   2.0.0`

## `Kumwe\InterfaceStandard\ResponsivePriority`

Importance of one semantic element when usable container width becomes constrained.

@since  2.0.0

| Case | Serialized value |
|---|---|
| `Essential` | `essential` |
| `Primary` | `primary` |
| `Secondary` | `secondary` |
| `Optional` | `optional` |

## `Kumwe\InterfaceStandard\SurfaceActor`

Intended human actor for one interface surface, independent of its current permissions.

@since  2.0.0

| Case | Serialized value |
|---|---|
| `Administrator` | `administrator` |
| `Portal` | `portal` |
| `Public` | `public` |

## `Kumwe\InterfaceStandard\SurfaceArea`

Delivery area whose shell or template hosts a semantic surface.

Template is explicit because an installable theme may declare conformance independently of the
administrator, portal, or public route whose semantic slots it implements.

@since  2.0.0

| Case | Serialized value |
|---|---|
| `Administrator` | `administrator` |
| `Portal` | `portal` |
| `Public` | `public` |
| `Template` | `template` |

## `Kumwe\InterfaceStandard\SurfaceConformanceReport`

Immutable result of evaluating one typed surface declaration against one KIS version.

@since  2.0.0

### `__construct(iterable $diagnostics)`

Capture every finding produced for one declaration.


- `@param   iterable<mixed>  $diagnostics  Candidate findings, each checked as a ConformanceDiagnostic. `
- `@throws  InvalidArgumentException  When the iterable contains something other than a diagnostic. `
- `@since   2.0.0`

### `conforms(): bool`

Whether the declaration has no admission-blocking finding.


- `@return  bool  True when the report contains no error diagnostic. `
- `@since   2.0.0`

### `diagnostics(): array`

Return every finding without losing its declaration path or stable code.


- `@return  list<ConformanceDiagnostic>  Deterministic validation findings. `
- `@since   2.0.0`

### `toArray(): array`

Export structured evidence without exception objects or framework state.


- `@return  list<array{code: string, severity: string, path: string, message: string}>  Finding documents. `
- `@since   2.0.0`

## `Kumwe\InterfaceStandard\SurfaceConformanceValidator`

Deterministic semantic admission policy for Kumwe Interface Standard 1.0 surfaces.

The validator operates only on typed declarations. It neither renders a surface nor decides
authorization; capability and field policy remain application concerns applied before rendering.

@since  2.0.0

### `static allowsCustomizationAtOrBelow(Kumwe\InterfaceStandard\CustomizationSlot $slot, Kumwe\InterfaceStandard\CustomizationScope $ceiling, Kumwe\InterfaceStandard\CustomizationScope $requested): bool`

Determine whether one requested layer sits at or below a declaration's legal scope ceiling.

The scope sequence is slot-specific: unsupported layers are never introduced merely because they
appear earlier in the global customization hierarchy. Area-specific admission remains the live
surface policy's responsibility because this validator evaluates portable declarations in isolation.


- `@param   CustomizationSlot   $slot       Safe presentation choice exposed by the surface.`
- `@param   CustomizationScope  $ceiling    Highest layer named by the portable surface declaration.`
- `@param   CustomizationScope  $requested  Exact lower or equal layer considered by the runtime. `
- `@return  bool  True only when both scopes are legal for the slot and the request does not exceed the ceiling. `
- `@since   2.0.0`

### `validate(Kumwe\InterfaceStandard\SurfaceDeclaration $declaration): Kumwe\InterfaceStandard\SurfaceConformanceReport`

Evaluate every cross-field KIS 1.0 invariant without stopping at the first failure.


- `@param   SurfaceDeclaration  $declaration  Locally safe typed semantic candidate. `
- `@return  SurfaceConformanceReport  Complete deterministic admission evidence. `
- `@since   2.0.0`

### `assertConforms(Kumwe\InterfaceStandard\SurfaceDeclaration $declaration): void`

Reject a candidate with its complete diagnostic report.


- `@param   SurfaceDeclaration  $declaration  Candidate to admit into the contribution architecture. `
- `@return  void `
- `@throws  SurfaceConformanceViolation  When one or more error diagnostics are present. `
- `@since   2.0.0`

## `Kumwe\InterfaceStandard\SurfaceConformanceViolation`

Admission failure carrying the complete deterministic KIS diagnostic report.

@since  2.0.0

Public readonly `Kumwe\InterfaceStandard\SurfaceConformanceReport $report`. 

### `__construct(Kumwe\InterfaceStandard\SurfaceConformanceReport $report)`

Refuse a non-conforming declaration while preserving all findings for extension tooling.


- `@param  SurfaceConformanceReport  $report  Report containing at least one error diagnostic. `
- `@since  2.0.0`

## `Kumwe\InterfaceStandard\SurfaceDeclaration`

Typed semantic candidate for one core, extension, or installable-template interface surface.

Construction settles local safety and type invariants only. `SurfaceConformanceValidator` evaluates
the relationships between intent, pattern, actor, area, states, customization, and responsive
behavior before `SurfaceDefinition` admits the candidate into Kumwe's contribution architecture.

No property can carry markup, a template path, a query, code, or an unbounded expression. Concrete
Twig, CSS, and client behavior remain implementation details of the active conforming template.

@since  2.0.0

Public readonly `Kumwe\Contribution\ContributionOwner $owner`. 

Public readonly `Kumwe\InterfaceStandard\SurfaceId $surface`. 

Public readonly `Kumwe\InterfaceStandard\InterfaceStandardVersion $standard`. 

Public readonly `Kumwe\InterfaceStandard\SurfaceArea $area`. 

Public readonly `Kumwe\InterfaceStandard\SurfaceActor $actor`. 

Public readonly `Kumwe\InterfaceStandard\SurfaceIntent $intent`. 

Public readonly `Kumwe\InterfaceStandard\ResourceName $resource`. 

Public readonly `string $purpose`. 

Public readonly `Kumwe\InterfaceStandard\SurfacePattern $pattern`. 

Public readonly `array $capabilities`. 

Public readonly `array $states`. 

Public readonly `array $customization`. 

Public readonly `array $responsive`. 

Public readonly `?Kumwe\InterfaceStandard\IconName $icon`. 

### `__construct(Kumwe\Contribution\ContributionOwner $owner, Kumwe\InterfaceStandard\SurfaceId $surface, Kumwe\InterfaceStandard\InterfaceStandardVersion $standard, Kumwe\InterfaceStandard\SurfaceArea $area, Kumwe\InterfaceStandard\SurfaceActor $actor, Kumwe\InterfaceStandard\SurfaceIntent $intent, Kumwe\InterfaceStandard\ResourceName $resource, string $purpose, Kumwe\InterfaceStandard\SurfacePattern $pattern, array $capabilities, array $states, array $customization, array $responsive, ?Kumwe\InterfaceStandard\IconName $icon)`

Build a locally safe typed declaration without yet admitting its cross-field semantics.


- `@param   ContributionOwner              $owner          Core or extension identity that owns the surface.`
- `@param   SurfaceId                      $surface        Stable identifier inside the owner's namespace.`
- `@param   InterfaceStandardVersion       $standard       Exact KIS contract revision.`
- `@param   SurfaceArea                    $area           Shell or template delivery area.`
- `@param   SurfaceActor                   $actor          Human actor whose task the surface supports.`
- `@param   SurfaceIntent                  $intent         Semantic task independent of visual layout.`
- `@param   ResourceName                   $resource       Business resource the task operates on.`
- `@param   string                         $purpose        Plain-language primary task sentence.`
- `@param   SurfacePattern                 $pattern        Approved interaction composition selected.`
- `@param   list<Capability>               $capabilities   Policy requirements applied before rendering.`
- `@param   list<SurfaceState>             $states         Data and authorization states explicitly covered.`
- `@param   list<CustomizationPermission>  $customization  Whitelisted presentation choices and scopes.`
- `@param   list<ResponsiveElement>        $responsive     Semantic collapse and reflow priorities.`
- `@param   ?IconName                      $icon           Theme registry key, or null for no surface icon. `
- `@throws  InvalidArgumentException  When ownership, purpose, or collection uniqueness is invalid. `
- `@since   2.0.0`

### `static fromArray(Kumwe\Contribution\ContributionOwner $owner, array $data): Kumwe\InterfaceStandard\SurfaceDeclaration`

Parse strict canonical metadata into a typed semantic declaration.

This is the untrusted manifest and persistence boundary. Missing, unknown, unversioned, malformed,
or executable-shaped data is rejected before conformance admission; no unrecognized value is
preserved for a renderer to interpret later.


- `@param   ContributionOwner     $owner  Core or extension owner supplied by the existing contribution phase.`
- `@param   array<string, mixed>  $data   Exact canonical KIS declaration document. `
- `@return  self  Locally safe typed candidate ready for conformance validation. `
- `@throws  InvalidArgumentException  When keys, types, enum values, identifiers, or nested entries are invalid. `
- `@since   2.0.0`

### `toArray(): array`

Export a deterministic semantic document without the externally supplied owner identity.

The owner remains the owner-bound registrar's responsibility, matching every existing extension
contribution definition. Unordered sets are sorted so signed manifest comparison is byte-stable.


- `@return  array{              surface: string,              standard: string,              area: string,              actor: string,              intent: string,              resource: string,              purpose: string,              pattern: string,              capabilities: list<string>,              states: list<string>,              customization: list<array{slot: string, scope: string}>,              responsive: list<array{element: string, priority: string, may_collapse: bool}>,              icon: ?string          }  Canonical manifest and inventory shape. `
- `@since   2.0.0`

## `Kumwe\InterfaceStandard\SurfaceDefinition`

Conformant owner-bound KIS surface accepted by Kumwe's existing contribution architecture.

Only `admit()` and `fromArray()` can create this type, and both require the complete semantic
validator to pass. Registries therefore work with the established `ContributionDefinition`
contract without introducing a second container, service locator, or parallel lifecycle.

@since  2.0.0

Public readonly `Kumwe\InterfaceStandard\SurfaceDeclaration $declaration`. 

### `static admit(Kumwe\InterfaceStandard\SurfaceDeclaration $declaration, ?Kumwe\InterfaceStandard\SurfaceConformanceValidator $validator = NULL): Kumwe\InterfaceStandard\SurfaceDefinition`

Admit a typed candidate only after every KIS semantic relationship passes.


- `@param   SurfaceDeclaration            $declaration  Locally safe candidate to admit.`
- `@param   ?SurfaceConformanceValidator  $validator    Alternate validator for deterministic testing,          or null for the canonical KIS validator. `
- `@return  self  Contribution definition safe for owner-bound registration. `
- `@throws  SurfaceConformanceViolation  When the candidate violates one or more KIS invariants. `
- `@since   2.0.0`

### `static fromArray(Kumwe\Contribution\ContributionOwner $owner, array $data, ?Kumwe\InterfaceStandard\SurfaceConformanceValidator $validator = NULL): Kumwe\InterfaceStandard\SurfaceDefinition`

Parse and admit strict canonical metadata through one fail-closed boundary.


- `@param   ContributionOwner             $owner      Owner supplied by the current contribution phase.`
- `@param   array<string, mixed>          $data       Exact canonical KIS declaration document.`
- `@param   ?SurfaceConformanceValidator  $validator  Alternate deterministic validator, or null for KIS 1.0. `
- `@return  self  Admitted contribution definition. `
- `@throws  InvalidArgumentException  When declaration keys, values, or ownership are unsafe.`
- `@throws  SurfaceConformanceViolation  When typed semantics do not conform to KIS. `
- `@since   2.0.0`

### `identifier(): string`

Return the stable owner-namespaced contribution inventory key.


- `@return  string  Canonical KIS surface identifier. `
- `@since   2.0.0`

### `toArray(): array`

Export the exact safe semantic declaration reconciled with a manifest.


- `@return  array<string, mixed>  Canonical KIS declaration without executable presentation content. `
- `@since   2.0.0`

## `Kumwe\InterfaceStandard\SurfaceId`

Stable owner-namespaced identifier of one semantic interface surface.

@since  2.0.0

### `static fromString(string $value): Kumwe\InterfaceStandard\SurfaceId`

Validate an owner-namespaced semantic surface identifier.

The value starts and ends with a lowercase letter or digit, contains at least one dot, and may
otherwise contain lowercase letters, digits, dots, underscores, or hyphens. Internal repeated
dots remain representable because the canonical extension grammar has historically admitted
them inside `vendor/name` segments. The owner boundary is enforced separately by
`ContributionOwner::assertOwns()`, so lexical compatibility does not let a contribution claim
another owner's namespace.


- `@param   string  $value  Identifier exactly as declared by core or an extension manifest. `
- `@return  self  Validated identifier safe for contribution inventory keys. `
- `@throws  InvalidArgumentException  When the value is empty, too long, or outside the identifier grammar. `
- `@since   2.0.0`

### `value(): string`

Return the canonical inventory key.


- `@return  string  Lowercase dotted identifier. `
- `@since   2.0.0`

### `__toString(): string`

Render the identifier for deterministic manifests and diagnostics.


- `@return  string  Same canonical value returned by `value()`. `
- `@since   2.0.0`

## `Kumwe\InterfaceStandard\SurfaceIntent`

User task a surface exists to support before any visual layout is selected.

@since  2.0.0

| Case | Serialized value |
|---|---|
| `Collection` | `collection` |
| `Detail` | `detail` |
| `Form` | `form` |
| `ParentChild` | `parent-child` |
| `Chooser` | `chooser` |
| `Workflow` | `workflow` |
| `Review` | `review` |
| `Comparison` | `comparison` |
| `Monitor` | `monitor` |
| `Settings` | `settings` |
| `Diagnostics` | `diagnostics` |

## `Kumwe\InterfaceStandard\SurfacePattern`

Approved KIS interaction composition selected for a semantic intent.

These values name behavior and information architecture, not Twig files or CSS classes. Renderers
remain replaceable while preserving the declared interaction contract.

@since  2.0.0

| Case | Serialized value |
|---|---|
| `CollectionWorkspace` | `collection-workspace` |
| `MasterDetailWorkspace` | `master-detail-workspace` |
| `FocusedForm` | `focused-form` |
| `DrawerForm` | `drawer-form` |
| `StepFlow` | `step-flow` |
| `InlineSubform` | `inline-subform` |
| `ChildCollection` | `child-collection` |
| `Tabs` | `tabs` |
| `LocalNavigation` | `local-navigation` |
| `ResourceChooser` | `resource-chooser` |
| `ReviewConfirmation` | `review-confirmation` |
| `Comparison` | `comparison` |
| `StatusWorkspace` | `status-workspace` |
| `SettingsWorkspace` | `settings-workspace` |
| `DiagnosticsWorkspace` | `diagnostics-workspace` |

## `Kumwe\InterfaceStandard\SurfaceState`

Data or authorization state a surface explicitly promises to render coherently.

@since  2.0.0

| Case | Serialized value |
|---|---|
| `Default` | `default` |
| `Empty` | `empty` |
| `Sparse` | `sparse` |
| `Dense` | `dense` |
| `Error` | `error` |
| `PermissionReduced` | `permission-reduced` |
| `ReadOnly` | `read-only` |

