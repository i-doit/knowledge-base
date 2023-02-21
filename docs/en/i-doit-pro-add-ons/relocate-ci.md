The add-on **`Relocate-CI`** allows for easy documentation of location changes of IT components. The focus is on classic workplace components such as desktop PCs, telephones or monitors. Supported are also logical groupings by the [object type](../basics/structure-of-the-it-documentation.md) Workplace.

The functions are accessible via the **`Extras`** menu under **`Relocate-CI`**.

![](/download/attachments/46759968/relocate.png?version=1&modificationDate=1467722942557&api=v2&effects=drop-shadow)

Two location browsers appear. Here you can navigate manually to an object or more comfortably via the integrated search function.

![](https://lh6.googleusercontent.com/NZXnX4-SarR_E1QVI3lln3JcwtqCQ_HHaFYZjFqjiZfFrlncrfStLzCV0F3rZRFXHN17QeuGC-jqwuFo0mtKHmsz854tpTUGNT03eI24fypyWL2AYSZM2ErWikiT22O26PoZqNk)

 In this specific example _Hans Olo_ will be relocated from _Raum 00.01_ in the _Zentrale_ in _Düsseldorf_ to _Raum 1.03._

  
![](/download/attachments/46759968/ci1.png?version=1&modificationDate=1467884208900&api=v2&effects=drop-shadow)

For this purpose, the _Hans Olo_ object is moved from its old location to the new one via drag and drop. The target location is highlighted in green to make it easily recognizable.  

![](/download/attachments/46759968/ci2.png?version=1&modificationDate=1467884458293&api=v2&effects=drop-shadow)  

A selection popup appears which displays the current location on the left and the future location to the right. Here you can decide which components will be relocated and which will remain in the old location. All objects that are below the selected object in its hierarchy will be displayed. In this case, these are the workplace components of _Hans Olo_. His PC and his monitor will move but the telephone is deselected as it will remain in the old room.

![](/download/attachments/46759968/ci3.png?version=1&modificationDate=1467884727148&api=v2&effects=drop-shadow)

The tree view will be updated once the relocation is complete.

![](/download/attachments/46759968/ci4.png?version=1&modificationDate=1467884815818&api=v2&effects=drop-shadow)

The relocation will be logged in the [logbook](/display/en/Logbook) of _i-doit_, however, only in the _Hans Olo_ object.

![](/download/attachments/46759968/ci5.png?version=1&modificationDate=1467884989590&api=v2&effects=drop-shadow)

The relocation will additionally be logged in the relocation logbook under `**Extras → Relocate-CI → Logbook**`so you can receive more detailed information about the relocation and each relocated component. All affected components will be noted here.

![](/download/attachments/46759968/ci6.png?version=1&modificationDate=1467885165232&api=v2&effects=drop-shadow)

Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| Version | Date | Changelog |
| --- | --- | --- |
| 1.2 | 2022-09-05 | \[Task\] PHP 8.0 Compatibility  <br>\[Task\] Design Compatibility |
| 1.1.1 | 2022-07-27 | \[Bug\] Relocate-CI: Subordinate objects of persons are also moved when moving a person  <br>\[Bug\] Truck in location view causes wrong links  <br>\[Bug\] Relocation of workstation to person causes wrong location in workplace components |
| 1.1 | 2021-10-25 | \[Improvement\] Function to relocate multiple objects from the same location to another location  <br>\[Bug\]         PHP warning because of different method declarations (e.g. in Report-Browser)  <br>\[Bug\]         Add a dynamic property to the logbook of the Relocate-CI add-on  <br>\[Bug\]         No logs are created by the add-on  <br>\[Bug\]         Logical locations is no longer displayed on the right side |
| 1.0.5 | 2020-08-10 | \[Bug\] When moving an object physically it looses its logical location  <br>\[Bug\] Objects can be moved to locations that are not locations  <br>\[Bug\] Separate srollbars for source and destination selection during relocation  <br>\[Bug\] Objects can be relocated |
| 1.0.4 | 2019-07-31 | ```<br>[Improvement] Changed locations in the CMDB will also be shown in the relocate module[Change] When moving a workstation, the remaining devices are no longer to be assigned to an automatically generated workstation[Bug] Relocating a person shows an error message[Bug] Searchfield for object selection does not open nodes[Bug] Malformed autoload for dao[Bug] A relocation does not change the change date<br>``` |
| 1.0.3 | 2017-05-02 | ```<br>[Bug]           When relocating a logical object the child objects will receive a physical location[Bug]           relocate_ci: Search fields too long[Bug]           PHP warning because of different method declarations (e.g. in Report-Browser)[Bug]           After relocating a person menu trees are not updated[Bug]           Edit, save and cancel buttons in relocate category are not functional[Bug]           After relocating a person or a client the child objects will not be updated accordingly[Bug]           Resultset of both search fields does not show all object[Bug]           While relocating of clients or persons the location of connected terminals will not be updated<br>``` |
| 1.0.2 | 2015-08-31 | ```<br>[Change]        Improved dragging and alternative method to drag objects<br>``` |
| 1.0.1 | 2015-03-09 | Initial release |