---
title: Risk Assessment in the ISMS Add-on
description: Guide for conducting risk assessments with the ISMS add-on in i-doit.
lang: en
---

# Risk Assessment in the ISMS Add-on

With the **ISMS add-on**, risk assessments can be recorded and maintained directly on objects in i-doit. The following summarizes the steps for creation, evaluation, treatment, and CSV import.

* * *

## Performing a Risk Assessment

After installation, the category folder **"ISMS"** appears on each object. In the associated view, the **ISMS relevance** and **scope** of the object can be defined.

The category **Risk Assessment** opens a **multi-value category** where existing assessments can be viewed and edited.

!!! note
    From version **1.4** of the ISMS add-on, additional attributes of the risk assessment can be included in the **list view**.

### Creating a New Risk Assessment

[![Form - new risk assessment](../../assets/images/en/i-doit-add-ons/isms/risk-assessment/create-ra.png)](../../assets/images/en/i-doit-add-ons/isms/risk-assessment/create-ra.png)

1. Select **Threat** and **Vulnerability** – together they form the risk.
2. Enter **Protection Goals** (default: *Confidentiality*, *Integrity*, *Availability*).
      - Additional values (e.g., *Authenticity*) can be added under
        `Administration -> Predefined Contents -> Dialog Admin -> ISMS -> Protection Goals`.
3. In the **Risk Assessment** section, evaluate the **incident Scenarios** using the **slider**.
4. Also set the **Likelihood of Occurrence** using the slider.
5. Assign **Existing Measures** (if available) and document a **Comment** on the assessment.
6. Set the **Date of Risk Assessment** and **Follow-up Date** (usable for evaluations).

[![Risk Assessment - incident Scenarios & Likelihood of Occurrence](../../assets/images/en/i-doit-add-ons/isms/risk-assessment/create-ra2.png)](../../assets/images/en/i-doit-add-ons/isms/risk-assessment/create-ra2.png)

### Risk Treatment

- Select a value according to **ISO 31000** in the attribute **Risk Treatment**.
- Link appropriate **SOA Measures** under **Measures for Risk Treatment**.
- Additionally record:
    - **Justification** for the selection
    - **Responsible for implementation** (placeholder for the logged-in user available from i-doit **1.14.2**)
    - **Resources** and **Costs**, **latest implementation date**
    - **Status** and **Urgency** (*Dialog Plus* fields; values maintainable via `Administration -> Predefined Contents -> Dialog Admin`)

[![Risk Assessment after Treatment / Residual Risk](../../assets/images/en/i-doit-add-ons/isms/risk-assessment/create-ra3.png)](../../assets/images/en/i-doit-add-ons/isms/risk-assessment/create-ra3.png)

!!! tip
    With **"Copy assessment before treatment"**, all slider values can be adopted and adjusted if necessary.

* * *

## Risk Assessments for Object Groups

Risk assessments are also possible for **object groups** (in the object type group "Others").
To make the assessments visible on the individual objects of the group, it is recommended to configure the custom category **"Risk Assessment Group"** under:
`Administration -> Predefined Contents -> Custom Categories -> ISMS Risk Assessment (Group)`.

* * *

## Importing Risk Assessments (CSV)

If the risk assessment is already available, for example in **Excel**, it can be imported via **CSV**. Special import methods are available for selected attributes of the multi-value category **"Risk Assessment"**:

### Impact / Impact after Risk Treatment

- **Format:** Semicolon-separated list of **levels** (numbers) per **incident scenario**.
- The order follows the attribute **"Designation"** in the category **"incident Scenario"**.

**Example:**

- Assessment criteria levels: 1-4
- Three scenarios: 1 = *Financial Impact*, 2 = *Personal Integrity*, 3 = *Violation of Contracts/Laws*
- Desired values: Financial **4**, Personal **1**, Laws **2**
- **CSV value:** `4;1;2`

### Existing Measures / Measures for Risk Treatment

- **Format:** Semicolon-separated list of **SOA Measures**; allowed are **Object Titles** or **Object IDs**.
- If a title contains a semicolon, escape it with a **backslash** (`\;`).

**Examples:**

```csv
Placement of fire extinguishers;Installation of a fire alarm system
2985;3054
Placement of fire extinguishers;3054
2985;Installation of a fire alarm system
```

!!! note
    All other attributes of the multi-value category "Risk Assessment" can be imported using the standard i-doit syntax.

* * *

[<- Start](index.md){ .md-button} · [View Reporting ->](reports.md){ .md-button .md-button--primary}
