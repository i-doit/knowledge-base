---
title: ISMS Object Types
description: Description of the object types provided by the ISMS add-on in i-doit.
icon:
status:
lang: en
---

# ISMS Object Types

The ISMS add-on extends i-doit with several object types in the object type group "ISMS." The following sections describe the purpose, typical categories, and special features of each object type.

* * *

## Audit

[![Audit](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_audit.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_audit.jpg)

With the Audit object type, you can document audits, including results and identified deviations.

**Categories:**

  - **Deviations:** Multi-value category for recording deviations identified in the audit. Initial types are Major Deviation, Minor Deviation, Recommendation, and Note.
  - **General** (i-doit standard category): Belongs to every object.
    - **Audit:** Recording of audit data, for example audit type, audit criterion, review period, and audit report.

* * *

## Threat

[![Threat](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_threat.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_threat.jpg)

The Threat object type describes risk sources for risk assessments.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Threat:** Identifier, category, catalog, chapter, and section. This information is helpful when the threat originates from a catalog, for example the IT-Grundschutz Compendium. Additionally, the protection goals Confidentiality, Integrity, and Availability can be documented.
  - **Recommendations according to ISO 27002:** Two text fields for documenting recommendations. Import packages are not included for licensing reasons.
  - **ISMS: Used in:** Variable report that lists all objects using this threat.
  - **Typical Vulnerabilities:** Multi-value category for selecting existing vulnerabilities.
  - **Access** (i-doit standard category): Links to sources, for example descriptions in the BSI IT-Grundschutz Compendium.

!!! tip "This structure is particularly well suited for importing threats from the IT-Grundschutz Compendium."

* * *

## Assessment Criterion

[![Assessment Criterion](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_protection_category.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_protection_category.jpg)

Assessment criteria form the basis for calculating the risk level.

**Categories:**

  - **Assessment Criterion:** Level as the decisive numerical value for the risk level. Optionally description of the probability of occurrence and naming of the impact.
  - **General** (i-doit standard category): Belongs to every object.

* * *

## Event

[![Event](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_event.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_event.jpg)

With the Event object type, you can create risk events for event-based risk identification.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Risk Assessment (Event):** Documentation of risk description and risk sources. Similar in content to the Risk Assessment category, but without the Threat and Vulnerability fields.

* * *

## Annex A Measure

[![Annex A Measure](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_control_annex_a.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_control_annex_a.jpg)

The Annex A Measure object type contains the measures from ISO 27001 Annex A. Its main purpose is the comparison with SOA measures.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Applicability:** Decision on inclusion or exclusion with justification. Assignment of SOA measures that implement this Annex A measure. Documentation of implementation status. The values appear in the Statement of Applicability (SoA) report view.
  - **Annex A Measure:** Identifier, section, chapter, and description.

* * *

## default Requirement

[![default Requirement](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_standard_requirement.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_standard_requirement.jpg)

default requirements store requirement texts and their implementation status.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **default Requirement:** Text, source, and implementation status.

!!! note "Many standard texts such as ISO 27001 or ISO 27002 are subject to licensing. Corresponding texts therefore cannot be shipped with the add-on."

* * *

## Damage Scenario

[![Damage Scenario](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_incident_scenario.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_incident_scenario.jpg)

Damage scenarios are used to assess the impact in risk evaluation.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Damage Scenario:** Identifier as an integer for sorting and display in the risk evaluation. The value must not be zero.
  - **Assessment Criteria:** Multi-value category for linking with assessment criteria. A textual specification can be maintained for each criterion.

* * *

## Security Incident

[![Security Incident](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_security_incident.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_security_incident.jpg)

The Security Incident object type is used for structured documentation of incidents.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Risk Assessment (Event):** Representation of the impact and treatment of the security incident.
  - **Security Incident:** Recording of time, discovery, description, and reports to authorities.

* * *

## Vulnerability

[![Vulnerability](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_vulnerability.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_vulnerability.jpg)

Vulnerabilities are used for risk assessments. The object type is optionally if your threats from catalogs already combine threat and vulnerability, for example in IT-Grundschutz.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Vulnerability:** Identifier, category, catalog, chapter, and section.
  - **ISMS: Used in:** Variable report that lists all objects using this vulnerability.
  - **Access** (i-doit standard category): References to external sources, for example IT-Grundschutz.

* * *

## SOA Measure

[![SOA Measure](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_control.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_control.jpg)

SOA measures contain the measures applied or planned in the organization. You can import measures from catalogs and link them with Annex A measures.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Recommendations according to ISO 27002:** Two text fields for recommendations. Import packages are not included for licensing reasons.
  - **Measure:** Identifier, reference, master data, approval, chapter, and section. For the SoA, applicability and justification of applicability are relevant. Documentation of implementation status and a remark. No default values are predefined for the implementation status.
  - **ISMS: Used in:** Variable report that lists all objects using this SOA measure.
  - **Access** (i-doit standard category): Reference to external sources.

* * *

## Virtual ISMS Location

[![Virtual ISMS Location](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_virtual_location.jpg)](../../assets/images/de/i-doit-add-ons/isms/object-types-and-categories/isms_virtual_location.jpg)

The virtual ISMS location is a helper object for structuring the location tree, especially when location rights are enabled. You can assign SOA measures to this virtual location. This keeps the location tree for infrastructure organized.

By default, the object type is hidden. You can show it if needed via the object type configuration.

**Categories:**

  - **General** (i-doit standard category): Belongs to every object.
  - **Spatially Assigned Objects** (i-doit standard category): Shows all objects using this location.
  - **Location** (i-doit standard category): Location of the object. If a virtual ISMS location should be a parent of other objects, it itself needs a location.

* * *

[<- Back to overview](index.md){ .md-button } · [Releases ->](releases.md){ .md-button .md-button--primary}
