---
title: ISMS Add-on Dokumentation
description: ISMS Add-on für i-doit, ISO 27001-konformes Risikomanagement, Maßnahmenverwaltung und Compliance.
icon: addons/ismslogo
status:
lang: en
---

## What is the ISMS Add-on?

The **ISMS Add-on** for the **i-doit CMDB** is a powerful extension for **Information Security Management**. It supports companies in implementing the **ISO 27001 certification** and offers comprehensive features for **risk management**, **action management**, and **compliance**.

### Benefits of the ISMS Add-on

- Direct integration into **IT documentation**
- Support for the **ISO 27000 series of standards**
- Generation of reports such as **risk matrix**, **Statement of Applicability (SoA)**, and **Risk Treatment Plan (RTP)**
- Import of threats, vulnerabilities, and measures from external catalogs
- Ideal for **KRITIS**, **BSI Standard 200-3**

* * *

## System Requirements

The ISMS Add-on requires a functional i-doit installation. Unless otherwise specified, this documentation refers to the current version of the add-on.

!!! warning "The ISMS Add-on consumes licensed objects"
    The ISMS Add-on uses approximately **2015** licensed objects, see [here](configuration.md#4-add-measures). Please ensure that your i-doit license includes enough licensed objects to use the add-on.

* * *

## Download and Installation

This add-on can be installed afterwards. Detailed descriptions regarding download, installation, updates, etc. are provided in the article [i-doit Add-ons](../index.md).

* * *

## Using the ISMS Add-on

1.  Define assessment **criteria**
2.  Define **Incident scenarios**
3.  Configure **Risk classes** and **Risk calculation**
4.  Create **controls**
5.  Identify **risks** and **assess them**
6.  Assign **controls** and **monitor them**
7.  Create **reports**

[Setup](configuration.md){ .md-button}

* * *

## Object Types and functions of the ISMS Add-on

### New Object Type Group "ISMS"

When the ISMS Add-on is installed, a new object type group called "ISMS" is created in i-doit. This group includes new [object types](object-types-and-categories.md).

### CSV import and customization

CSV import files are available for several of these object types to quickly and efficiently transfer data. All objects and object types can be customized in i-doit as usual to meet individual requirements.
The ISMS Add-on also supports the [consideration of location rights](configuration.md#optional-settings) to ensure secure and flexible rights management.

### Reports for evaluation and documentation

In addition, the ISMS Add-on installs several [reports](reports.md) that enable extended evaluation and documentation of the information security management system.

* * *

## User permissions

The ISMS Add-on introduces new rights that can be configured in the [i-doit user permissions](../../system-administration/administration/user-permissions.md). These rights control access to risk classes and risk calculation.

* * *

[Setup ->](configuration.md){ .md-button .md-button--primary}
