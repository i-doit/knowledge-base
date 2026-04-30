---
title: VIVA2 (IT-Grundschutz) Add-on
description: The VIVA2 add-on supports the establishment and documentation of an information security management system based on BSI IT-Grundschutz within the i-doit CMDB.
icon: addons/viva2
status:
lang: en
---

# VIVA2 (IT-Grundschutz) Add-on

The VIVA2 add-on, also known as **"IT-Grundschutz"**, supports the establishment and documentation of an information security management system based on **BSI IT-Grundschutz** within the i-doit CMDB. This documentation guides you from initial setup to daily use.

## Highlights

- **Seamlessly integrated into i-doit**: You work directly with the objects in your IT documentation.
- **IT-Grundschutz methodology**: Structural analysis, protection needs assessment, modeling, IT-Grundschutz check, and reporting.
- **Transparency across the information domain**: Graphical protection needs inheritance and clear responsibilities.
- **Evaluations**: Standard and variable reports for evidence and export.

## When to Use VIVA2

- If you model according to **BSI IT-Grundschutz 200-1/200-2** and want to use the modules from the compendium.
- If you want to **traceably inherit** protection needs and document them centrally.
- If you are preparing **audits** with reliable reports.

## Target Audience

ISOs, security and compliance officers, administrators, auditors.

## Prerequisites

- Read the **system requirements** and install the add-on:
  see [VIVA2 system requirements](setup.md#systemvoraussetzungen) and [Installation](setup.md#installation).
- Complete the **setup** by importing the IT-Grundschutz Compendium:
  see [Installation and setup](setup.md#installation-und-einrichtung).

!!! warning "The VIVA2 add-on consumes licensed objects"
    Importing the IT-Grundschutz Compendium generates approximately **2927** licensed objects. After subtracting discontinued requirements, approximately **2637** remain. Make sure your i-doit license includes enough licensed objects to use the add-on.
    The import of the IT-Grundschutz Compendium also imports requirements that have since become obsolete. The BSI has marked these requirements with the title "DISCONTINUED". For backward compatibility reasons, all of these requirements are imported, but they can be deleted without issue afterward.

## Workflow in 5 Steps

1. **Structural analysis**: Ensure that all relevant objects are present and linked.
   → [Structural analysis](structural-analysis.md)
2. **Protection needs assessment**: Determine and justify protection needs and verify inheritance.
   → [Protection needs assessment](assessment-of-protection.md)
3. **Modeling the information domain**: Assign process and system modules and define contacts.
   → [Modeling](modeling.md)
4. **IT-Grundschutz check**: Document the implementation status of requirements.
   → [IT-Grundschutz check](structural-analysis.md)
5. **Reports**: Evaluate responsibilities, coverage, and implementation statuses.
   → [Reports](reports.md)

[Go to installation ->](setup.md#installation){ .md-button }

## Operation and Maintenance

- **IT-Grundschutz profiles**: Create, export, import, and apply profiles.
  → [Profiles](it-grundschutz-profiles.md)
- **Update the compendium**: Selectively adopt new editions.
  → [Updating the compendium](setup.md#kompendium-aktualisieren)

## Interaction with Other Add-ons

- **ISMS Add-on**: Complementary for risk analysis and management according to **ISO 27xx** and **BSI standard 200-3**.
    In many setups, **VIVA2 (IT-Grundschutz)** and **ISMS (ISO 27001)** run in parallel to cover both chains of evidence.

## Changelog

What has changed can be found in the [Changelog](changelog.md).

[Installation and setup ->](setup.md){ .md-button .md-button--primary }
