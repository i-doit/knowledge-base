---
title: Reports in the ISMS Add-on
description: Fully revised description of all reports and report views delivered with the ISMS add-on in i-doit, including purpose, content, filters, and interactions.
lang: en
---

# Reports in the ISMS Add-on

This page describes the reports provided with the ISMS add-on in **i-doit**. A general introduction to reports and their location in i-doit can be found in the [Report Manager](../../evaluation/report-manager.md).

**Quick Overview**

* The add-on delivers **one variable report** and **nine report views** of the type *ISMS*.
* All content is designed to be quickly filtered and customized in practice.
* If the option is enabled, the views can be **filtered by location rights** (see *Optional Settings* in the configuration).

* * *

## Installed Reports and Views (Overview)

| Type            | Name                                    | Purpose                                                                                                                                                                                                                                                      | Important Filters/Interactions                                                                                            |
| --------------- | --------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------- |
| Variable Report | **ISMS Risk Assessment (Group)**        | Shows risk assessments of all object groups to which the object, from which the report was called, belongs; freely customizable in the query editor.                                                                                                         | Bound to object type category "ISMS Risk Assessment (Group)"; duplicable and customizable (e.g., for service components). |
| Report View     | **ISMS Risk by Risk Class**             | Lists objects/object groups with risk assessments when the implementation status is "Unprocessed".                                                                                                                                                           | Filters: *Risk Class*, *Scope*, *Location* (location filter).                                                             |
| Report View     | **Statement of Applicability (SoA)**    | Structure of all measures from *Annex A* (if available) by chapters/subchapters including applicability, justification, and implementation status; shows assigned **SoA measures** below the respective Annex A measure.                                     | Considers location rights (if enabled).                                                                                   |
| Report View     | **SoA Completeness Check**              | Like SoA statement, additionally color-coded to indicate whether measures are sufficiently documented.                                                                                                                                                       | Considers location rights (if enabled).                                                                                   |
| Report View     | **ISMS Risk Matrix**                    | Matrix before **and** after risk treatment; axes from the defined evaluation criteria.                                                                                                                                                                       | Clicking on a cell opens filtered **ISMS Risk Assessment**; Filters: *Scope*, *Location*.                                 |
| Report View     | **ISMS Risk Assessment**                | Complete detailed view of all risk assessments (IDs, object, threat, vulnerability, owner, evaluations, impacts, likelihood, risk level, measures, treatment, responsible persons, resources, dates, prioritization, values after treatment, residual risk). | Filters: *Scope*, *Location*.                                                                                             |
| Report View     | **ISMS Risk Treatment Plan (RTP)**      | Focus on risk treatment according to ISO 31000: Threat → affected objects → measures; including justification, risk owner, urgency, latest implementation date.                                                                                              | Filters: *Scope*, *Location*.                                                                                             |
| Report View     | **ISMS Scope**                          | Shows all objects (with object type and location) whose **ISMS relevance = "Yes"**.                                                                                                                                                                          | Filters: *Scope*, *Location*.                                                                                             |
| Report View     | **ISMS Risk Assessment (object-based)** | Like "ISMS Risk Assessment", additionally filterable by **individual objects**; offers **CSV export**.                                                                                                                                                       | Object filter; CSV export.                                                                                                |
| Report-View     | **ISMS Residual Risk by Level**         | Analog representation of "ISMS Risk by Level", but **by** measures (residual risk).                                                                                                                                                                          | -                                                                                                                         |

* * *

## Details and best practices

### Variable Report: ISMS Risk Assessment (Group)
**Purpose.** Risk assessments of all **object groups** for the currently selected object. Ideal for quickly overviewing group-based risks.

**Customizability.** The report is freely editable in the **query editor**. A typical pattern is to **duplicate** it for service components: Create "ISMS Risk Assessment (Service Component)" and adjust the condition:

1. Select category **"Service Components (Service)"**
2. Set the field placeholder **Object ID** for the attribute **"Assigned Object"**

!!! note
    The report is bound to the identically named **custom category** and can be assigned to different object types.

* * *

### Report-View: ISMS Risk by Risk Class
**Purpose:** Overview of **risk levels** with **implementation status = "Unprocessed"**.

**Filter:** *Risk Class*, *Scope* and *Location* (Location filter restricts to objects below the selected location).

* * *

### Report-View: Statement of Applicability (SoA)

**Purpose:** Complete, hierarchical view of **measures from Annex A** (chapters/subchapters), including **applicability**, **justification** (inclusion/exclusion) and **implementation status**. **Assigned SoA measures** are displayed below the Annex A measure; at the end follows the complete list of all SoA measures.

**Rights:** Considers location rights if activated in tenant settings **and** the measures have a location.

* * *

### Report-View: SoA Completeness Check

**Purpose:** Audit-ready overview of whether **all measures are sufficiently documented** (color marking per measure).

**Rights:** Considers location rights if activated.

* * *

### Report-View: ISMS Risk Matrix

**Purpose:** Visualizes the risk situation **before** and **after** treatment. Axis labels are derived directly from the **evaluation criteria**.

**Interaction:** Clicking on the number in a matrix cell opens the **Report-View "ISMS Risk Assessment"** filtered to the affected combination of **Likelihood** and **Impact**.

**Filter:** *Scope* and *Location*.

[![Risk Matrix Example](../../assets/images/en/i-doit-add-ons/isms/reports/matrix.png)](../../assets/images/en/i-doit-add-ons/isms/reports/matrix.png)

!!! tip
    The axes and colors are derived from the evaluation criteria, risk formula, and risk classes defined in the [**Configuration**](configuration.md). Adjust these first to use the matrix effectively.

* * *

### Report-View: ISMS Risk Assessment

**Purpose:** Complete detailed view of all **risk assessments** in i-doit, suitable as a **worklist** for risk owners and auditors.

**Content (Excerpt):** ID of the assessment, affected object type/name, **threat**, **vulnerability**, **value owner**, **risk owner**, evaluations of the **damage scenarios** and resulting **impact**, **likelihood**, **risk level** (color-coded), **existing measures**, **risk treatment**, **responsible persons**, **required resources**, **implementation date**, **prioritization**, evaluations **after** treatment and **residual risk** (color-coded).

**Filter:** *Scope* and *Location*.

* * *

### Report-View: ISMS Risk Treatment Plan (RTP)

**Purpose:** Implementation-oriented view, assigns **threats** to the **affected objects** and **measures**; shows **risk treatment** (usually values according to **ISO 31000**), **justification**, **risk owner**, **urgency**, and **latest implementation date**.

**Filter:** *Scope* and *Location*.

* * *

### Report-View: ISMS Scope

**Purpose:** Listing of all objects (including object type and location) where **ISMS relevance = "Yes"** is set, ideal for scope definition and audits.

**Filter:** *Scope* and *Location*.

* * *

### Report-View: ISMS Risk Assessment (Object-Based)

**Purpose:** Focused view on **individual objects** with the same information as the general risk assessment.

* * *

[<- Start](index.md){ .md-button} · [Object Types and Categories ->](object-types-and-categories.md){ .md-button .md-button--primary}
