---
title: Cabling
description: Cabling view
icon: addons/cabling
status:
lang: en
---

# Cabling

With the [add-on](../i-doit-add-ons/index.md) **Cabling view**, you get a detailed display of cabling -- whether you want to trace a cable path or print patch orders.

## Download and installation

This add-on can be installed additionally. Details on download, installation, and updates can be found in the article "[Add-ons](../i-doit-add-ons/index.md)".

## Configuration

After [installation](../i-doit-add-ons/index.md), no further technical configuration is required. If you want to always open the cabling view directly, activate this under **Administration → User settings → User interface**. Alternatively, you can access the cabling view via the "Cabling" category in an object.

## Assigning rights

Under **Administration → Permissions → Cabling view**, [permissions for persons and person groups](../efficient-documentation/permission-management/index.md) can be adjusted.

[![Assigning rights](../assets/images/de/i-doit-add-ons/cabling/1-cab.png)](../assets/images/de/i-doit-add-ons/cabling/1-cab.png)

## Usage

After installation and configuration of permissions, the add-on is available under **Add-ons → Cabling view**.

[![Usage](../assets/images/de/i-doit-add-ons/cabling/2-cab.png)](../assets/images/de/i-doit-add-ons/cabling/2-cab.png)

## Releases
<!-- cSpell:disable -->
| Version | Date       | Changelog                                                                                                                                                                                                                                                                                                                                              |
| ------- | ---------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| 1.5     | 26.02.2025 | [Task] Make symfony 6.4 compatible<br>[Task] Make Smarty 5 compatible<br>[Bug] Cabling does not display the full object title<br>[Bug] Connecting close ports causes connection visibility issues<br>[Bug] Wrong output sorting when connected to the same input                                                                                       |
| 1.4     | 27.02.2024 | [Task] PHP 8.2 compatibility, cleaned up color usage                                                                                                                                                                                                                                                                                                   |
| 1.3     | 07.11.2023 | [Bug]  Setting to save cable names is not saved.<br>[Bug]  Highlight 'add-on' instead of 'extras' menu<br>[Bug] Overlap objects in the wiring view                                                                                                                                                                                                    |
| 1.2     | 05.09.2022 | [Task] PHP 8.0 Compatibility  <br> [Task] Design Compatibility                                                                                                                                                                                                                                                                                         |
| 1.1.1   |            | [Bug] Connections are not shown in add-on "cabling"                                                                                                                                                                                                                                                                                                    |
| 1.1     | 21.02.2022 | [Improvement] Improve export options <br> [Bug] Remove "print" button in the CMDB-Explorer <br> [Bug] Visualization of cabling pathts, connecting an object with itself (two ports)  <br> [Bug] Sorting of connections in the wiring view is confusing  <br> [Bug] The visualization object browser should only provide objects that contain wiring    |
| 1.0.4   | 20.05.2019 | [Bug] Wrong sorting of cabling <br> [Bug] Incorrect display of vitrification in IE11                                                                                                                                                                                                                                                                   |
| 1.0.3   | 18.12.2018 | [Bug] Error prevents creation of PDF documents when using SSL <br> [Bug] Images are not loaded                                                                                                                                                                                                                                                         |
| 1.0.2   | 18.12.2017 | [Improvement] Print view for cabling paths <br> [Improvement] Add cabling browser as a function <br> [Improvement] Changes to connector types are now documented in the logbook <br> [Improvement] Display object to be exported in the popup <br> [Bug] PDF export does not work when the root object is not selected                                  |
