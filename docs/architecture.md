# Architecture

The package owns portable interface types. Presentation-preference values and persistence remain host-owned.

The package owns immutable vocabulary, strict semantic declarations, and directly constructible stateless conformance validation. Contribution owns ContributionOwner, ContributionDefinition and SurfaceIdentifierPolicy; Access Control owns Capability. SurfaceDefinition performs semantic conformance admission only, never trusted activation or authorization. No Access Context value appears in this closure.

The canonical Contribution API requires an explicit SurfaceIdentifierPolicy. SurfaceDeclaration chooses dotted("interface-surface") without core exemption or version markers. This preserves the original safe owner-relative suffix grammar, including repeated dots inside historically valid owner prefixes. Runtime input checking on the conformance report is preserved; its PHPDoc accurately accepts iterable candidates. Enum tables are exhaustive.

The production token guard permits only the documented dependency namespaces and rejects host/native/container loading. The source map records exact source commits, paths, source digests, new symbols, target paths, and current target digests. Consumer inventory preserves source provenance and compatibility references for host integration.
