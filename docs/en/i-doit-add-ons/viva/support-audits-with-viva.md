---
title: Supporting Audits with VIVA
description: "Audits are the reports required for a potential certification according to ISO 27001 based on IT-Grundschutz."
icon:
status:
lang: en
---
# Supporting Audits with VIVA

Audits are the reports required for a potential certification according to ISO 27001 based on IT-Grundschutz. With the [add-on](../index.md) **VIVA**, audits can be created and managed. In addition to audits, VIVA provides further [reports](reports-with-viva.md) for continuous quality assurance.

Creating audits
----------------

Once all information has been gathered and documented within VIVA, audits can be created. These are based on the selected information domain and the type of certification being pursued (initial certification, surveillance audit, etc.). In terms of content and formatting, they follow the requirements specified in the BSI standards. Audits can be found under the corresponding item in the menu tree.

[![Create audit](../../assets/images/de/i-doit-add-ons/viva/audits/1-va.png)](../../assets/images/de/i-doit-add-ons/viva/audits/1-va.png)

The following output formats are available for selection:

*   PDF
*   HTML (including head section and stylesheet)
*   HTML body (without head section and stylesheet)

The generated HTML documents contain all information needed to further process them in other applications. They can easily be imported into a word processor and adapted to your own requirements (for example, to match the corporate design).

[![Create audit output](../../assets/images/de/i-doit-add-ons/viva/audits/2-va.png)](../../assets/images/de/i-doit-add-ons/viva/audits/2-va.png)

Reference documents
-----------------

The following section covers the individual reference documents.

### Reference document A.0 _IT Security Policies_

The first reference document contains several overarching specifications that can be documented directly in the respective audit.

[![Edit reference document A.0](../../assets/images/de/i-doit-add-ons/viva/audits/3-va.png)](../../assets/images/de/i-doit-add-ons/viva/audits/3-va.png)

### Reference document A.1 _IT Structural Analysis_

The second reference document draws partly from data documented within the selected information domain (see _[Creating target groups](./procedure-with-viva.md)_ and _[Assigning target objects](./procedure-with-viva.md)_), and partly from additional data that can be entered directly in the respective audit.

[![Edit reference document A.1](../../assets/images/de/i-doit-add-ons/viva/audits/4-va.png)](../../assets/images/de/i-doit-add-ons/viva/audits/4-va.png)

The reference document includes, among other things, a cleaned network plan (see BSI standard 100-2, chapters 4.2.3 and 4.3.5). This can either be referenced textually via the corresponding form field, or -- if the field is left empty -- an automatically generated diagram representing the network plan is used. The generated image contains all information required for a cleaned network plan that is available through the current documentation: this includes the individual [target groups](./procedure-with-viva.md), their communication links to each other, and the associated [criticalities](./procedure-with-viva.md). This is supplemented by a color scheme based on the object type configuration, using the [target objects](./procedure-with-viva.md) assigned to the target groups.

[![Cleaned network plan](../../assets/images/de/i-doit-add-ons/viva/audits/5-va.jpg)](../../assets/images/de/i-doit-add-ons/viva/audits/5-va.jpg)

!!! attention "Please observe the [optional system requirements](./preparation-viva-installation.md)."

### Reference document A.2 _Protection Needs Assessment_

This reference document contains only data that has already been documented within the selected information domain. See [_Defining protection needs categories_](./procedure-with-viva.md) and _[Determining protection needs](./procedure-with-viva.md)_.

### Reference document A.3 _Modeling of the Information Domain_

This reference document contains only data that has already been documented within the selected information domain. See _[Modeling information domains](./procedure-with-viva.md)_.

### Reference document A.4 _Results of the Baseline Security Check_

This reference document contains only data that has already been documented within the selected information domain. See _[Implementing measures](./procedure-with-viva.md)_.

### Reference document A.5 _Supplementary Security Analysis_

This reference document contains only data that has already been documented within the selected information domain. See _[Performing supplementary security analysis](./procedure-with-viva.md)_.

### Reference document A.6 _Risk Analysis_

This reference document compiles information to cover a risk analysis according to BSI standard 100-3. See _[Risk analysis based on IT-Grundschutz](./risk-analysis-it-grundschutz.md)_.

### Reference document A.7 _Risk Treatment Plan_

This reference document is not yet generated at this time.
