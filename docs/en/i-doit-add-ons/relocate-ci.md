---
title: "Relocate-CI"
description: "The Relocate-CI add-on is used for easily documenting location changes of IT components."
icon:
status:
lang: en
---
# Relocate-CI

The [add-on](./index.md) **Relocate-CI** is used for easily documenting location changes of IT components. The focus is on classic workplace components such as desktop PCs, telephones, or monitors. Logical groupings via the [object type](../grundlagen/struktur-it-dokumentation.md) workstation are also supported.

The functions can be found under **Add-ons → Relocate-CI**.

[![Relocate-CI](../assets/images/de/i-doit-add-ons/relocate-ci/1-rci.png)](../assets/images/de/i-doit-add-ons/relocate-ci/1-rci.png)

Two location browsers open. Navigate manually to the desired object or use the integrated search.

[![Location browser](../assets/images/de/i-doit-add-ons/relocate-ci/2-rci.png)](../assets/images/de/i-doit-add-ons/relocate-ci/2-rci.png)

**Example:** You move the workstation **Hans Olo** from room **1.06 Open-plan Office** to room **1.03**.

[![Relocation](../assets/images/de/i-doit-add-ons/relocate-ci/3-rci.png)](../assets/images/de/i-doit-add-ons/relocate-ci/3-rci.png)

Proceed as follows:

1. Drag the workstation **Hans Olo** via drag-and-drop to the new location. The target location is highlighted in green.
2. Click **Start relocation** -- the relocation dialog shows the current location on the left and the new location on the right.
3. Select which components should be relocated and which should remain at the old location.

All hierarchically subordinate objects are displayed -- in the example, all workstation components of **Hans Olo**. The PC and monitor are moved, while the telephone is deselected as it remains in the old room.

[![Object](../assets/images/de/i-doit-add-ons/relocate-ci/4-rci.png)](../assets/images/de/i-doit-add-ons/relocate-ci/4-rci.png)

Once the relocation is complete, the tree view is updated.

[![Relocation dialog](../assets/images/de/i-doit-add-ons/relocate-ci/5-rci.png)](../assets/images/de/i-doit-add-ons/relocate-ci/5-rci.png)

The relocation is recorded in the [logbook](../grundlagen/logbuch.md) for each relocated object.

[![Tree view](../assets/images/de/i-doit-add-ons/relocate-ci/6-rci.png)](../assets/images/de/i-doit-add-ons/relocate-ci/6-rci.png)

Detailed information about the individual relocated components can be found in the relocation logbook under **Add-ons → Relocate-CI → Logbook**.

[![Logbook](../assets/images/de/i-doit-add-ons/relocate-ci/7-rci.png)](../assets/images/de/i-doit-add-ons/relocate-ci/7-rci.png)

## Relocate-CI options

The **Relocate-CI options** can be adjusted under **Administration → [Tenant name] Administration → Settings for [Tenant name] → Relocate-CI**

| Option                                                                              | Value        | Description                                                                          |
| ----------------------------------------------------------------------------------- | ------------ | ------------------------------------------------------------------------------------ |
| After a physical relocation, the logical location should be removed.                | Yes or No    | Should the logical location be removed after a physical relocation?                  |
| After a logical relocation, the physical location should be updated.                | Yes or No    | Should the physical location be aligned with the logically superior object?          |
| Write logbook entries to all positioned objects of a relocated object.              | Yes or No    | Should logbook entries be created for all relocated objects?                          |

[![Logbook](../assets/images/de/i-doit-add-ons/relocate-ci/8-rci.png)](../assets/images/de/i-doit-add-ons/relocate-ci/8-rci.png)

## Releases

| Version | Date       | Changelog                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| ------- | ---------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.5     | 2024-11-05 | [Task] Use new Tree component + filter service <br> [Bug] Fix PHP 8+ tree filter issue <br> [Bug] Search function does not work, when searching for workplaces                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| 1.4     | 10.10.2024 | [Bug] Fix autoload issue during add-on installation                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| 1.3     | 07.11.2023 | [Bug] Deselected Objects are moved anyway                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| 1.2     | 05.09.2022 | [Task] PHP 8.0 Compatibility  <br>[Task] Design Compatibility                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| 1.1.1   | 27.07.2022 | [Bug] Relocate-CI: Subordinate objects of persons are also moved when moving a person  <br>[Bug] Truck in location view causes wrong links  <br>[Bug] Relocation of workstation to person causes wrong location in workplace components                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| 1.1     | 25.10.2021 | [Improvement] Function to relocate multiple objects from the same location to another location  <br>[Bug] PHP warning because of different method declarations (e.g. in Report-Browser)  <br>[Bug] Add a dynamic property to the logbook of the Relocate-CI add-on  <br>[Bug] No logs are created by the add-on  <br>[Bug] Logical locations is no longer displayed on the right side                                                                                                                                                                                                                                                                                                           |
| 1.0.5   | 10.08.2020 | [Bug] When moving an object physically it looses its logical location  <br>[Bug] Objects can be moved to locations that are not locations  <br>[Bug] Separate srollbars for source and destination selection during relocation  <br>[Bug] Objects can be relocated                                                                                                                                                                                                                                                                                                                                                                                                                              |
| 1.0.4   | 31.07.2019 | [Improvement] Changed locations in the CMDB will also be shown in the relocate module<br>[Change] When moving a workstation, the remaining devices are no longer to be assigned to an automatically generated workstation<br>[Bug] Relocating a person shows an error message<br>[Bug] Searchfield for object selection does not open nodes<br>[Bug] Malformed autoload for dao<br>[Bug] A relocation does not change the change date<br>                                                                                                                                                                                                                                                       |
| 1.0.3   | 02.05.2017 | [Improvement] PHP 7 compatibility<br>[Bug] After relocating a person menu trees are not updated<br>[Bug] PHP warning because of different method declarations (e.g. in Report-Browser)<br>[Bug] relocate_ci: Search fields too long<br>[Bug] When relocating a logical object the child objects will receive a physical location<br>[Bug] While relocating of clients or persons the location of connected terminals will not be updated<br>[Bug] Resultset of both search fields does not show all objects<br>[Bug] After relocating a person or a client the child objects will not be updated accordingly<br>[Bug] Edit, save and cancel buttons in relocate category are not functional<br> |
| 1.0.2   | 31.08.2015 | [Change] Improved dragging and alternative method to drag objects<br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| 1.0.1   | 09.03.2015 | Initial release                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
