---
title: Risk Assessment in the ISMS Add-on
description: Guide for conducting risk assessments with the ISMS add-on in i-doit.
icon:
status:
lang: en
---

# Risk Assessment in the ISMS Add-on

With the **ISMS add-on**, risk assessments can be recorded and maintained directly on objects in i-doit. The following summarizes the steps for creation, evaluation, treatment, and CSV import.

* * *

## Performing a Risk Assessment

After installation, the category folder **"ISMS"** appears on every object. In the associated view, you define the **ISMS relevance** and **scope** of the object.

The **Risk Assessment** category opens a **multi-value category** where you can view and edit existing assessments.

!!! note
    Starting with version **1.4** of the ISMS add-on, you can add additional risk assessment attributes to the **list view**.

### Creating a New Risk Assessment

[![Form - new risk assessment](../../assets/images/de/i-doit-add-ons/isms/risk-assessment/create-ra.png)](../../assets/images/de/i-doit-add-ons/isms/risk-assessment/create-ra.png)

1. Select **Threat** and **Vulnerability** – together they form the risk.
2. Enter **Protection Goals** (default: *Confidentiality*, *Integrity*, *Availability*).
      - You can add additional values (e.g. *Authenticity*) under
        `Administration -> Predefined Content -> Dialog Admin -> ISMS -> Protection Goals`.
3. In the **Risk Evaluation** section, rate the **damage scenarios** using the **slider**.
4. Set the **Probability of Occurrence** also using the slider.
5. Assign **existing measures** (if available) and document a **comment** on the evaluation.
6. Set the **Date of Risk Evaluation** and **Follow-up Date** (usable for evaluations).

[![Risk evaluation - damage scenarios & probability of occurrence](../../assets/images/de/i-doit-add-ons/isms/risk-assessment/create-ra2.png)](../../assets/images/de/i-doit-add-ons/isms/risk-assessment/create-ra2.png)

### Risk Treatment

- In the **Risk Treatment** attribute, select a value according to **ISO 31000**.
- Under **Measures for Risk Treatment**, link appropriate **SOA measures**.
- Additionally document:
    - **Justification** for the selection
    - **Responsible for implementation** (placeholder for the logged-in user available from i-doit **1.14.2**)
    - **Resources** and **costs**, **latest implementation date**
    - **Status** and **urgency** (*Dialog Plus* fields; values can be maintained via `Administration -> Predefined Content -> Dialog Admin`)

[![Risk evaluation after treatment / residual risk](../../assets/images/de/i-doit-add-ons/isms/risk-assessment/create-ra3.png)](../../assets/images/de/i-doit-add-ons/isms/risk-assessment/create-ra3.png)

!!! tip
    With **"Copy evaluation before treatment"**, all slider values can be transferred and adjusted as needed.

* * *

## Risk Assessments for Object Groups

Risk assessments are also possible for **object groups** (in the object type group "Other").
For the assessments to be visible on the individual objects of the group, configure the custom category **"Risk Assessment Group"** under:
`Administration -> Predefined Content -> Custom Categories -> ISMS Risk Assessment (Group)`.

* * *

## Importing Risk Assessments (CSV)

If your risk assessment already exists in **Excel**, for example, you can import it via **CSV**. Special import methods are available for selected attributes of the multi-value category **"Risk Assessment"**:

### Impact / Impact after Risk Treatment

- **Format:** Semicolon-separated list of **levels** (numbers) per **damage scenario**.
- The order follows the **"Identifier"** attribute in the **"Damage Scenario"** category.

**Example:**
- Assessment criteria levels: 1-4
- Three scenarios: 1 = *Financial Impact*, 2 = *Personal Safety*, 3 = *Violation of Contracts/Laws*
- Desired values: Financial **4**, Personal **1**, Laws **2**
- **CSV value:** `4;1;2`

### Existing Measures / Measures for Risk Treatment

- **Format:** Semicolon-separated list of **SOA measures**; **object title** or **object ID** are allowed.
- If a title contains a semicolon, escape it with a **backslash** (`\;`).

**Examples:**
```csv
Placement of handheld fire extinguishers;installation of a fire alarm system
2985;3054
Placement of handheld fire extinguishers;3054
2985;installation of a fire alarm system
```

!!! note "All other attributes of the multi-value category 'Risk Assessment' can be imported using the standard i-doit syntax."

[<- Back to overview](index.md){ .md-button} · [View reports](reports.md){ .md-button .md-button--primary}
