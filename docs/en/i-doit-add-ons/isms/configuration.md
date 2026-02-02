---
title: Setup of the ISMS Add-on
description: Guide for the complete setup of the ISMS Add-on in i-doit.
lang: en
---

# Setup of the ISMS Add-on

This document describes the complete setup of the ISMS Add-on in i-doit.

* * *

## Setup of the ISMS Add-on

Before use, four basic steps must be completed.

### 1. Define assessment criteria

- Define criteria for **likelihood of occurrence** and **extent of damage**
- Values must be integers and serve as axis labels in the **risk matrix**

!!! example "For example"
    | Level | Designation | Description of likelihood of occurrence |
    | ----- | ----------- | --------------------------------------- |
    | 1     | Low         | Occurs every 10 years                   |
    | 2     | Normal      | Occurs every year                       |
    | 3     | High        | Occurs several times per year           |
    | 4     | Very high   | Occurs daily                            |

The level should be a positive integer, with the criteria sorted in ascending order. The description of the likelihood of occurrence is optional.

[![Assessment Criteria](../../assets/images/en/i-doit-add-ons/isms/configuration/1-assessment-criteria.png)](../../assets/images/en/i-doit-add-ons/isms/configuration/1-assessment-criteria.png)

### 2. Define damage scenarios

**Examples:**
- Financial damages
- Legal violations or breaches of contract
- Data protection violations
- Negative external impact

!!! example "For example"
    | Designation | Description      | Assessment Criteria            |
    | ----------- | ---------------- | ------------------------------ |
    | 1           | Financial Impact | Low: Less than €5,000          |
    |             |                  | Normal: From €5,000 to €50,000 |
    |             |                  | High: From €50,000 to €500,000 |
    |             |                  | Very high: More than €500,000  |

For each assessment criterion, appropriate expressions should be created. The damage scenarios can be oriented based on those defined in the BSI IT Baseline Protection. The designation serves for sorting.

[![Damage Scenarios](../../assets/images/en/i-doit-add-ons/isms/configuration/2-damage-scenarios.png)](../../assets/images/en/i-doit-add-ons/isms/configuration/2-damage-scenarios.png)

### 3. Define risk classes and risk formula

- Configuration under **Add-ons → ISMS → Risk Classes**
- The **risk matrix** is based on the assessment criteria and the chosen calculation formula
- Risk classes can be individually customized and color-coded

#### Risk Classes

For further evaluation, it is now necessary to choose how critical a risk level is assessed. Colors can be defined for this purpose.

| Color                                 | Risk Level |
| ------------------------------------- | ---------- |
| Red, values are less than or equal    | -          |
| Yellow, values are less than or equal | 6          |
| Green, values are less than or equal  | 3          |

The chosen values result in a risk matrix.

[![Risk Classes](../../assets/images/en/i-doit-add-ons/isms/configuration/3-risk-classes.png)](../../assets/images/en/i-doit-add-ons/isms/configuration/3-risk-classes.png)

#### Risk formula and risk matrix

!!! note
    If no assessment criteria are defined, the risk matrix will not be displayed.

The risk formula defines how the risk level is calculated from the assessment criteria. Example for the formula "Maximum risk assessment + likelihood of occurrence = risk level":

[![Risk Classes](../../assets/images/en/i-doit-add-ons/isms/configuration/3-risk-matrix.png)](../../assets/images/en/i-doit-add-ons/isms/configuration/3-risk-matrix.png)
!!! tip "Manually override fields in the risk matrix"
    In the risk matrix, individual fields can be manually overridden. To do this, click on the desired field and select the desired risk class.

### 4. Add measures

- Measures can be created manually or imported from catalogs via **CSV import**
- For ISO 27001, it is recommended to import the measures from **Annex A**
- Catalogs are included in the add-on package and can be imported via the i-doit CSV import:
  - **Extras → CMDB Import → CSV Import**
  - Catalogs are located in the add-on directory under: `src/classes/modules/iso27001/Catalogs/`
  - Load import profile: **ISMS universal (new)**
  - Start import

[![Add measures](../../assets/images/en/i-doit-add-ons/isms/configuration/4-import-profile-load.png)](../../assets/images/en/i-doit-add-ons/isms/configuration/4-import-profile-load.png)

Since a risk always consists of **threat and vulnerability**, it is also recommended to create these object types.

| File                                                       | Standard                  | Description                                       | Version | Language | Number of licensed objects |
| ---------------------------------------------------------- | ------------------------- | ------------------------------------------------- | ------- | -------- | -------------------------- |
| ISO27001_Massnahmen_AnhangA(de).csv                        | DIN EN ISO/IEC 27001      | Maßnahmen Anhang A                                | 2022    | DE       | ~93                        |
| ISO27001_Controls_AnnexA(en).csv                           | DIN EN ISO/IEC 27001      | Controls Appendix A                               | 2022    | EN       | ~93                        |
| IT-Grundschutz-Kompendium_Elementare Gefaehrdungen(de).csv | BSI Grundschutzkompendium | Elementargefährdungen als Bedrohung/Schwachstelle | -       | DE       | ~47                        |
| IT-Grundschutz-Kompendium_Elementary_Threats(en).csv       | BSI Grundschutzkompendium | Elementary threats as threat/vulnerabilities      | -       | EN       | ~47                        |
| IT-Grundschutz-Kompendium_Anforderungen(de).csv            | BSI Grundschutzkompendium | Anforderungen aus den Bausteinen als Maßnahmen    | 2023    | DE       | ~1834                      |
| NIS2-Anforderungen(openkritis.de).csv                      | NIS2                      | Anforderungen aus NIS2 als Maßnahmen              | -       | DE       | ~36                        |

* * *

## Optional settings

In the tenant settings, the option **"Filter report views by location rights"** can be enabled.

The ISMS add-on supports rights management by location to enable flexible and secure information management. In the tenant settings of i-doit, the option "Filter report views by location rights" can be enabled.

### What does this setting do?

When the option is enabled, only the risk assessments that the respective user is allowed to see are displayed in the report views provided by the ISMS add-on. Specifically, it checks whether the user has the "View" right for the "ISMS" category on the corresponding objects.

### Assign measures by location

Additionally, it is possible to configure the "Location" category on objects of the type "SOA measure" or "Measure Annex A". This allows measures to be assigned to specific locations.

### Advantages of this feature:

- Locations can maintain the implementation status of their own measures.
- Users only see the measures of their own location.
- A central point can create reports for all locations or filtered by individual locations.

!!! note
    "The "Location" category can be enabled for SOA measures and Measure Annex A.

* * *

[<- Start](index.md){ .md-button} · [View risk assessment ->](risk-assessment.md){ .md-button .md-button--primary}
