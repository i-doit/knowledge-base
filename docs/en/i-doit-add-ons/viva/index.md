---
title: VIVA
description: "The VIVA add-on is dedicated to the topic of information security based on IT-Grundschutz."
icon:
status:
lang: en
---
# VIVA

!!! warning "Deprecated"
    This add-on is no longer being developed and has been replaced by Viva 2.

The [add-on](../index.md) **VIVA** is dedicated to the topic of information security based on IT-Grundschutz. It supports the user in the relevant documentation processes to establish an Information Security Management System (ISMS) in an organization.

Table of contents
------------------

1. [Introduction to VIVA](./introduction-to-viva.md)
    1. IT-Grundschutz
    2. Who this document is aimed at
    3. Structure of this document
2. [Preparing the VIVA installation](./preparation-viva-installation.md)
    1. System requirements
    2. Download
    3. Installation
    4. Update
    5. Activate/Deactivate
    6. Uninstall
    7. Permission management
    8. Migrating from the previous ITGS module
3. [Procedure with VIVA](./procedure-with-viva.md)
    1. Managing IT-Grundschutz catalogs
    2. Modeling information domains
    3. Creating target groups
    4. Assigning target objects
    5. Target group inheritance
    6. Defining protection needs categories
    7. Determining protection needs
    8. Assigning modules
    9. Implementing measures
    10. Answering audit questions
    11. Performing supplementary security analysis
4. [Risk analysis based on IT-Grundschutz](./risk-analysis-it-grundschutz.md)
    1. Identifying threats
    2. Evaluating threats
5. [Reports with VIVA](./reports-with-viva.md)
    1. Creating audits
    2. Reference documents
6. [Supporting audits with VIVA](./support-audits-with-viva.md)
7. [VIVA Wizards](./viva-assistenten.md)
    1. Target group wizards
    2. Protection needs wizards
8. [Object category VIVA](./objekt-kategorie-viva.md)
9. [VIVA Widget](./viva-widget.md)

Appendix
------

*   [Example of a possible workflow](./workflow-with-viva.md)
*   [FAQ about VIVA](https://help.i-doit.com/hc/de/articles/115002984325-FAQ-zu-VIVA)

Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.5.5 |     | [Bug] Audits exported via PDF are displayed incorrectly |
| 1.5.4 |     | [Bug] IT-Grundschutz catalogues cannot be imported  <br>[Bug] Audits exported via PDF are displayed incorrectly  <br>[Bug] The buttons are not completely displayed in the navbar |
| 1.5.3 |     | [Bug] Load audits without the necessary rights  <br>[Bug] VIVA tables are not created for multi-tenant instances  <br>[Bug] The inheritance function of measures could not be performed.  <br>[Bug] The VIVA add-on could not be installed on i-doit version 1.10.x.  <br>[Bug] Link to VIVA within an object |
| 1.5.2 | 25.01.2018 | [Bug] Number of unimplemented measures incorrect<br>[Bug] Confirmation via enter/return leads to HTTP/500<br>[Bug] VIVA add-on cannot be installed from i-doit version 1.10 onwards<br>[Bug] Error when opening VIVA via the icon in the category list of an object<br>[Bug] Creating a link to a measure results in a database error message<br>[Bug] Category does not display linked modules<br>[Bug] Category does not display members of shared target groups<br>[Bug] Statistics for linked measures of information domains show negative values<br>[Bug] VIVA: Target objects are missing in the left menu tree<br>[Bug] Umlauts are not displayed correctly in PDF export<br>[Bug] Report "Linked CIs" mixes up information domains<br>[Bug] Report "Implemented measures" mixes up information domains<br>[Bug] Report "Applications" displays operating systems<br>[Bug] CSV export of linked measures displays incorrect data<br>[Bug] Error during installation of the VIVA add-on<br>[Bug] Linked modules are not updated in the menu tree despite page reload<br>[Bug] Error when editing annotations<br>[Bug] VIVA category cannot be opened<br>[Bug] Handling of linked custom measures under target objects is faulty, generates database errors<br> |
| 1.5.1 | 02.05.2017 | [Bug] Report on applications lists operating systems<br>[Bug] Report on group inheritance is marked red but returns no results<br>[Bug] Report on supplementary security analysis returns notes on forms that have already been filled in<br> |
| 1.5 | 03.06.2016 | [Improvement] Import of the IT-Grundschutz catalog EL 15<br>[Improvement] Upgrade and linking of information domains to newly imported Grundschutz catalog<br>[Bug] Error during export: E_WARNING: Illegal string offset 'type' production<br> |
| 1.4.3 |     | [Bug] Line break in description field leads to error in the navigation tree<br>[Bug] Contacts linked in VIVA cannot be permanently deleted<br> |
| 1.4.2 |     | [Improvement] Improved display of wizards<br> |
