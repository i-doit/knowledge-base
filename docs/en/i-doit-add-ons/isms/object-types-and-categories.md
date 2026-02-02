---
title: ISMS Object Types
description: Description of the object types provided by the ISMS add-on in i-doit.
lang: en
---

# ISMS Object Types

The ISMS add-on extends i-doit with several object types in the "ISMS" object type group. The following sections describe the purpose, typical categories, and special features of each object type.

* * *

## Audit

[![Audit](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_audit.jpg)](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_audit.jpg)

The Audit object type allows documentation of audits, including results and identified deviations.

**Categories:**

  - **Deviations:** Multivalue category for recording deviations identified in the audit. Initial types are main deviation, secondary deviation, recommendation, and note.
  - **General** (i-doit standard category): Belongs to every object.
    - **Audit:** Recording of data related to the audit, such as audit type, audit criteria, audit period, and audit report.

* * *

## Threat

[![Threat](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_threat.jpg)](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_threat.jpg)

The Threat object type describes risk sources for risk assessments.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Threat:** Identification, category, catalog, chapter, and section. This information is helpful if the threat comes from a catalog, for example, the BSI IT Baseline Protection Compendium. Additionally, the protection goals confidentiality, integrity, and availability can be documented.
  - **Recommendations according to ISO27002:** Two text fields for documenting recommendations. Import packages are not included for licensing reasons.
  - **ISMS: Used in:** Variable report listing all objects that use this threat.
  - **Typical vulnerabilities:** Multivalue category for selecting existing vulnerabilities.
  - **Access** (i-doit standard category): Linking to sources, for example, descriptions in the BSI IT Baseline Protection Compendium.

!!! tip
    This structure is particularly suitable for importing threats from the BSI IT Baseline Protection Compendium.

* * *

## Assessment Criterion

[![Assessment Criterion](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_protection_category.jpg)](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_protection_category.jpg)

Assessment criteria form the basis for calculating the risk level.

**Categories:**

  - **Assessment Criterion:** Level as the decisive numerical value for the risk level. Optional description of the likelihood of occurrence and designation of the extent of damage.
  - **General** (i-doit standard category): Belongs to every object.

* * *

## Event

[![Event](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_event.jpg)](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_event.jpg)

The Event object type allows the creation of risk events for event-based risk identification.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Risk Assessment (Event):** Documentation of the risk description and risk sources. Similar in content to the Risk Assessment category, but without the fields Threat and Vulnerability.

* * *

## Measure Annex A

[![Measure Annex A](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_control_annex_a.jpg)](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_control_annex_a.jpg)

The Measure Annex A object type contains the measures from ISO 27001 Annex A. The main purpose is to align with the SOA measures.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Applicability:** Decision on inclusion or exclusion with justification. Assignment of SOA measures that implement this Annex A measure. Documentation of the implementation status. The values appear in the report view Explanation of Applicability (SoA).
  - **Measure Annex A:** Identification, section, chapter, and description.

* * *

## Standard Requirement

[![Standard Requirement](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_standard_requirement.jpg)](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_standard_requirement.jpg)

Standard requirements store requirement texts and their implementation status.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Standard Requirement:** Text, source, and implementation status.

!!! note
    Many standard texts such as ISO 27001 or ISO 27002 are subject to licensing. Corresponding texts cannot therefore be provided.

* * *

## Incident Scenario

[![Incident Scenario](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_incident_scenario.jpg)](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_incident_scenario.jpg)

Incident scenarios are used to assess the impact in risk assessment.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Incident Scenario:** Identification as an integer for sorting and display in risk assessment. The value must not be zero.
  - **Assessment Criteria:** Multivalue category for linking with assessment criteria. A textual expression can be maintained for each criterion.

* * *

## Security Incident

[![Security Incident](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_security_incident.jpg)](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_security_incident.jpg)

The Security Incident object type is used for the structured documentation of incidents.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Risk Assessment (Event):** Mapping of the impacts and handling of the security incident.
  - **Security Incident:** Recording of time, discovery, description, and notifications to authorities.

* * *

## Vulnerability

[![Vulnerability](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_vulnerability.jpg)](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_vulnerability.jpg)

Vulnerabilities are used for risk assessments. The object type can be optional if threats from catalogs already combine threat and vulnerability, for example in IT baseline protection.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Vulnerability:** Identification, category, catalog, chapter, and section.
  - **ISMS: Used in:** Variable report listing all objects that use this vulnerability.
  - **Access** (i-doit standard category): References to external sources, for example IT baseline protection.

* * *

## SOA Measure

[![SOA Measure](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_control.jpg)](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_control.jpg)

SOA measures contain the measures applied or planned in the company. Measures can be imported from catalogs and linked to Annex A measures.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Recommendations according to ISO27002:** Two text fields for recommendations. Import packages are not included for licensing reasons.
  - **Measure:** Identification, reference, master data, approval, chapter, and section. For the SoA, applicability and justification of applicability are relevant. Documentation of the implementation status as well as a remark. For the implementation status, no values are predefined in the delivery state.
  - **ISMS: Used in:** Variable report listing all objects that use this SOA measure.
  - **Access** (i-doit standard category): Reference to external sources.

* * *

## Virtual ISMS Location

[![Virtual ISMS Location](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_virtual_location.jpg)](../../assets/images/en/i-doit-add-ons/isms/object-types-and-categories/isms_virtual_location.jpg)

The virtual ISMS location is an auxiliary object for structuring the location tree, especially when location rights are activated. SOA measures can be assigned to this virtual location. This keeps the location tree for infrastructure clear.

By default, the object type is hidden. It can be displayed if needed via the object type configuration.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Spatially Assigned Objects** (i-doit standard category): Shows all objects that use this location.
  - **Location** (i-doit standard category): Location of the object. If a virtual ISMS location is to be subordinate to other objects, it itself requires a location.

* * *

[<- Start](index.md){ .md-button } · [Releases ->](releases.md){ .md-button .md-button--primary}
