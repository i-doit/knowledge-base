# Relocate-CI

The add-on **Relocate-CI** allows for easy documentation of location changes of IT components. The focus is on classic workplace components such as desktop PCs, telephones or monitors. Supported are also logical groupings by the [object type](../basics/structure-of-the-it-documentation.md) Workplace.

The functions are accessible via the **Extras** menu under **Relocate-CI**.

[![Relocate-CI](../assets/images/en/i-doit-pro-add-ons/relocate-ci/1-rlci.png)](../assets/images/en/i-doit-pro-add-ons/relocate-ci/1-rlci.png)

Two location browsers appear. Here you can navigate manually to an object or more comfortably via the integrated search function.

[![Relocate-CI](../assets/images/en/i-doit-pro-add-ons/relocate-ci/2-rlci.png)](../assets/images/en/i-doit-pro-add-ons/relocate-ci/2-rlci.png)

 In this specific example _Hans Olo_ will be relocated from _Raum 00.01_ in the _Zentrale_ in _Düsseldorf_ to _Raum 1.03._
  
[![Relocate-CI](../assets/images/en/i-doit-pro-add-ons/relocate-ci/3-rlci.png)](../assets/images/en/i-doit-pro-add-ons/relocate-ci/3-rlci.png)

For this purpose, the _Hans Olo_ object is moved from its old location to the new one via drag and drop. The target location is highlighted in green to make it easily recognizable.  

[![Relocate-CI](../assets/images/en/i-doit-pro-add-ons/relocate-ci/4-rlci.png)](../assets/images/en/i-doit-pro-add-ons/relocate-ci/4-rlci.png)

A selection popup appears which displays the current location on the left and the future location to the right. Here you can decide which components will be relocated and which will remain in the old location. All objects that are below the selected object in its hierarchy will be displayed. In this case, these are the workplace components of _Hans Olo_. His PC and his monitor will move but the telephone is deselected as it will remain in the old room.

[![Relocate-CI](../assets/images/en/i-doit-pro-add-ons/relocate-ci/5-rlci.png)](../assets/images/en/i-doit-pro-add-ons/relocate-ci/5-rlci.png)

The tree view will be updated once the relocation is complete.

[![Relocate-CI](../assets/images/en/i-doit-pro-add-ons/relocate-ci/6-rlci.png)](../assets/images/en/i-doit-pro-add-ons/relocate-ci/6-rlci.png)

The relocation will be logged in the [logbook](../basics/logbook.md) of _i-doit_, however, only in the _Hans Olo_ object.

[![Logbook](../assets/images/en/i-doit-pro-add-ons/relocate-ci/7-rlci.png)](../assets/images/en/i-doit-pro-add-ons/relocate-ci/7-rlci.png)

The relocation will additionally be logged in the relocation logbook under **Extras → Relocate-CI → Logbook**so you can receive more detailed information about the relocation and each relocated component. All affected components will be noted here.

[![Logbook](../assets/images/en/i-doit-pro-add-ons/relocate-ci/8-rlci.png)](../assets/images/en/i-doit-pro-add-ons/relocate-ci/8-rlci.png)

Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.3 | 2023-11-07 | [Bug] Deselected Objects are moved anyway |
| 1.2 | 2022-09-05 | [Task] PHP 8.0 Compatibility  <br>[Task] Design Compatibility |
| 1.1.1 | 2022-07-27 | [Bug] Relocate-CI: Subordinate objects of persons are also moved when moving a person  <br>[Bug] Truck in location view causes wrong links  <br>[Bug] Relocation of workstation to person causes wrong location in workplace components |
| 1.1 | 2021-10-25 | [Improvement] Function to relocate multiple objects from the same location to another location  <br>[Bug] PHP warning because of different method declarations (e.g. in Report-Browser)  <br>[Bug] Add a dynamic property to the logbook of the Relocate-CI add-on  <br>[Bug] No logs are created by the add-on  <br>[Bug] Logical locations is no longer displayed on the right side |
| 1.0.5 | 2020-08-10 | [Bug] When moving an object physically it looses its logical location  <br>[Bug] Objects can be moved to locations that are not locations  <br>[Bug] Separate srollbars for source and destination selection during relocation  <br>[Bug] Objects can be relocated |
| 1.0.4 | 2019-07-31 | [Improvement] Changed locations in the CMDB will also be shown in the relocate module<br>[Change] When moving a workstation, the remaining devices are no longer to be assigned to an automatically generated workstation<br>[Bug] Relocating a person shows an error message<br>[Bug] Searchfield for object selection does not open nodes<br>[Bug] Malformed autoload for dao<br>[Bug] A relocation does not change the change date<br> |
| 1.0.3 | 2017-05-02 | [Bug] When relocating a logical object the child objects will receive a physical location<br>[Bug] relocate_ci: Search fields too long<br>[Bug] PHP warning because of different method declarations (e.g. in Report-Browser)<br>[Bug] After relocating a person menu trees are not updated<br>[Bug] Edit, save and cancel buttons in relocate category are not functional<br>[Bug] After relocating a person or a client the child objects will not be updated accordingly<br>[Bug] Resultset of both search fields does not show all object<br>[Bug] While relocating of clients or persons the location of connected terminals will not be updated<br> |
| 1.0.2 | 2015-08-31 | [Change] Improved dragging and alternative method to drag objects<br> |
| 1.0.1 | 2015-03-09 | Initial release |