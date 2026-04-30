---
title: Replacement Add-on
description: "Are you commissioning a new switch and want to take over all existing connections?"
icon: addons/replacement
status:
lang: en
---

Are you putting a new switch into operation and want to take over all existing connections? With the [Add-on](./index.md) **Replacement** you swap [objects](../basics/it-documentation-structure.md) and configure which connections and category data are transferred.

!!! note "The add-on was previously called **SwapCI** until version 1.3.1."

## Download and installation

This add-on can be installed afterward. Detailed descriptions regarding download, installation, updates, etc. can be found in the article [i-doit Add-ons](./index.md).

## Configuration

Under **Administration → Add-ons → Device Swap → Configuration** you define default values to standardize and speed up frequent swap processes.

| Option                                              | Description                                                                                                                                                                                                                                                                                                                                                                                                              |
| --------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Selectable object types**                        | Which objects of which type can be swapped is defined here. Additionally, per [object type](../basics/it-documentation-structure.md) it is defined which [categories](../basics/it-documentation-structure.md) (and thus which [attributes](../basics/it-documentation-structure.md)) should be swapped. Categories that are not selected remain unaffected by a swap. |
| **CMDB status for replacement devices**                    | The selection of which objects are offered for swapping can be restricted via their [**CMDB status**](../basics/life-and-documentation-cycle.md)                                                                                                                                                                                                                                                       |
| **Consider "swap" status?**                | If the swap status is considered, the swapped device receives the **CMDB status** **Swapped** and the replacement device receives the **CMDB status In operation**.                                                                                                                                                                                                                                                             |
| **Archive swapped devices?**                  | Should the object being swapped receive the [state](../basics/life-and-documentation-cycle.md) **Archived**?                                                                                                                                                                                                                                                                                              |
| **Swap SYS-ID as well?**                      | Should the **SYS-ID** attribute of the **General** category be swapped? This is [an attribute for unique referencing](../basics/unique-references.md).                                                                                                                                                                                                                        |
| **Retain category data of swapped objects?** | Should the category data of both objects be swapped? A -> B and B -> A. If "No" is selected, the swapped object will not take over any category data.                                                                                                                                                                                                                                            |

## Assigning rights

Under **Administration → Permissions → Device Swap** can [permissions for persons and person groups](../efficient-documentation/permission-management/index.md) be adjusted.

| Condition                                        | Description                                                                                                                                                                                      |
| ------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Swap objects**                             | May the user swap objects?                                                                                                                                                               |
| **Swap by workstation systems**           | May the user swap workstation components?                                                                                                                                               |
| **Device swap configuration**                   | May the user modify the configuration (see above)?                                                                                                                                        |
| **Device swap button in the object list** | The user has via the [action bar of the object list](../basics/object-list/action-bar.md) the ability to swap objects with each other. The **Swap** button appears there. |
| **Device swap button in objects**        | The user has via the action bar within an object the ability to swap the object with another. The **Swap** button appears there.                                |

## Prerequisites

Before two objects can be swapped with each other, the following prerequisites must be met:

-   Both objects have the same object type.
-   An object cannot be swapped with itself.

## Swapping objects

There are three ways to swap one object for another:

1. Within an [object list](../basics/object-list/index.md) select both objects and in the [action bar](../basics/object-list/action-bar.md) click the **Swap** button.
2. Within an object, click the **Swap** button in the action bar and then select the replacement device under **Stored object**
3. Under **Add-ons → Device Swap** select the two objects under **Object to be swapped** and **Stored object**

!!! note "Only possible if the #Configuration has been made beforehand and the object type has been selected."

The selected objects can be swapped using the **Swap** button.

[![Selection via object list](../assets/images/de/i-doit-add-ons/replacement/1-rp.png)](../assets/images/de/i-doit-add-ons/replacement/1-rp.png)

[![Selection via object](../assets/images/de/i-doit-add-ons/replacement/2-rp.png)](../assets/images/de/i-doit-add-ons/replacement/2-rp.png)

After selecting both objects, the options can be adjusted. Clicking the **Start device swap** button performs the swap of both objects.

[![Swap objects](../assets/images/de/i-doit-add-ons/replacement/3-rp.png)](../assets/images/de/i-doit-add-ons/replacement/3-rp.png)

## Swap by workstation systems

Under **Add-ons → Device Swap → Swap by workstation systems** you make a preselection via assigned workstations:

1. Select an object type.
2. All **Workstation** objects whose **Workstation components** contain objects of this type appear.
3. Select one object per workstation to swap and click **Swap selected objects**.

[![Swap by workstation systems](../assets/images/de/i-doit-add-ons/replacement/4-rp.png)](../assets/images/de/i-doit-add-ons/replacement/4-rp.png)

## Swap report

A report on previous swap actions can be found under **Add-ons → Device Swap → Swap Report** (alternatively via **Extras → Report Manager → Views → Swap Report**).

[![Swap report](../assets/images/de/i-doit-add-ons/replacement/5-rp.png)](../assets/images/de/i-doit-add-ons/replacement/5-rp.png)

## Releases

| Version | Date      | Changelog                                                                                                                                                                                                                                                                                                                                                            |
| ------- | ---------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.6     | 10.10.2024 | [Bug] Fix auto load issue during add-on installation                                                                                                                                                                                                                                                                                                                 |
| 1.5     | 07.11.2023 | [Bug] No changes are recorded in the logbook<br>[Bug] Signal error when downloading a document from the document repository                                                                                                                                                                                                                                          |
| 1.4     | 05.09.2022 | [Task] HP 8.0 Compatibility<br>[Task] Design Compatibility                                                                                                                                                                                                                                                                                                           |
| 1.3.2   | 21.02.2022 | [Bug] Use Of German Language in English Version Of Object Swap                                                                                                                                                                                                                                                                                                       |
| 1.3.1   | 10.08.2020 | [Bug] The location is lost during swap<br>[Bug] Information is deleted when objects are exchanged                                                                                                                                                                                                                                                                    |
| 1.3     | 20.05.2019 | [Improvement] Attributes "Serial number" and "Model designation" in device swap report<br>[Bug] Search index is not renewed after a device swap<br>[Bug] Device swap uses workflow tables<br>[Bug] Swap status in English as only CMDB status with capital letter<br>[Bug] Error when calling the swap report (device swap)<br> |
| 1.2.5   | 02.05.2017 | [Bug] Error message in AdminCenter when uninstalling SWAP_CI<br>                                                                                                                                                                                                                                                                                           |
| 1.2.4   | 08.03.2017 | [Bug] "Swap" button from "Device Swap" extension in object lists has no effect<br>[Bug] PHP and i-doit compatibility improved<br>                                                                                                                                                                                                              |
| 1.2.3   | 08.10.2015 | [Improvement] Attributes "Serial number" and "Model designation" in device swap report<br>[Bug] Device swap displays error message when logging in to its context<br>[Bug] SQL error prevents selecting categories for swap<br>                                                                                                            |
| 1.2.2   | 09.03.2015 | [Bug] SwapCI module causes error if tenant does not have the module installed<br>                                                                                                                                                                                                                                                                               |
| 1.2.1   | 14.04.2014 | Initial release                                                                                                                                                                                                                                                                                                                                                    |
