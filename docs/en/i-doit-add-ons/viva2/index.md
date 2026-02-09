---
title: VIVA2 (IT-Grundschutz) Add-on
description: The VIVA2 Add-on supports the establishment and documentation of an information security management system according to BSI IT-Grundschutz within the i-doit CMDB.
icon: addons/viva2
status:
lang: en
---

# VIVA2 (IT-Grundschutz) Add-on

The VIVA2 add-on, also known as **"IT-Grundschutz"**, supports the establishment and documentation of an information security management system according to **BSI IT-Grundschutz** within the i-doit CMDB. The documentation guides you from initial setup to daily use.

## Highlights

- **Seamless in i-doit**: You work directly on the objects in your IT documentation.
- **IT-Grundschutz methodology**: Structural analysis, protection needs assessment, modeling, IT-Grundschutz check, and reporting.
- **Transparency in the scope**: Visual protection needs inheritance and clear responsibilities.
- **Evaluations**: Fixed and variable reports for evidence and export.

## When to use VIVA2?

- If you model according to **BSI IT-Grundschutz 200-1/200-2** and want to use the Compendium modules.
- If you want to **inherit protection needs transparently** and document them centrally.
- If you want to prepare **audits** with reliable reports.

## Target audience

Information security officers, security and compliance managers, administrators, auditors.

## Prerequisites

- Read the **system requirements** and install the add-on:
   see [VIVA2 system requirements](setup.md#system-requirements) and [Installation](setup.md#installation).
- Perform the **setup** by importing the IT-Grundschutz Compendium:
   see [Installation and setup](setup.md).

!!! warning "The VIVA2 add-on consumes license-relevant objects"
      Importing the IT-Grundschutz Compendium creates about **2927** license-relevant objects; after excluding obsolete requirements, about **2637** remain. Make sure your i-doit license includes enough license-relevant objects to use the add-on.
      The import also includes obsolete requirements. The BSI labels these requirements as "ENTFALLEN". For backward compatibility, they are all imported but can be deleted afterward without issues.

## Workflow in 5 steps

1. **Structural analysis**: Ensure all relevant objects exist and are linked.
   → [Strukturanalyse](structural-analysis.md)
2. **Protection needs assessment**: Determine and justify the protection needs and review inheritance.
   → [Schutzbedarfsfeststellung](assessment-of-protection.md)
3. **Modeling the information scope**: Assign process and system modules and define contacts.
   → [Modellierung](modeling.md)
4. **IT-Grundschutz check**: Document the implementation status of requirements.
   → [IT-Grundschutz-Check](structural-analysis.md)
5. **Reports**: Evaluate responsibilities, coverage, and implementation status.
   → [Reports](reports.md)

[Go to installation ->](setup.md){ .md-button }

## Operations and maintenance

- **IT-Grundschutz profiles**: Create, export, import, and apply profiles.
  → [Profile](it-grundschutz-profiles.md)
- **Update the Compendium**: Selectively adopt new editions.
  → [Update the Compendium](setup.md#update-the-compendium)

## Interaction with other add-ons

- **ISMS add-on**: Complementary for risk analysis and management according to **ISO 27xx** and **BSI Standard 200-3**.
      In many setups, **VIVA2 (IT-Grundschutz)** and **ISMS (ISO 27001)** run in parallel to cover both evidence chains.

## Changelog

See the [Changelog](changelog.md) for what changed.

[Installation and setup ->](setup.md){ .md-button .md-button--primary }
