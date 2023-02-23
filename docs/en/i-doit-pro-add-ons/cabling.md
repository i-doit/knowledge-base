**Contents**

*   1[Download and installation](#Cabling-Downloadandinstallation)
*   2[Configuration](#Cabling-Configuration)
*   3[Rights assignment](#Cabling-Rightsassignment)
*   4[Usage](#Cabling-Usage)
*   5[Releases](#Cabling-Releases)

The Cabling add-on gives you a detailed display of cabling. Whether you want to trace a cable route or print patch jobs.

  

Download and installation
-------------------------

This add-on can be installed later. Detailed descriptions regarding download, installation, updates, etc. are provided in the "[Add-ons](/display/en/i-doit+pro+Add-ons)" article.

Configuration
-------------

A technical configuration of the add-on is not necessary after [installation](/display/en/i-doit+pro+Add-ons).  
If the cabling view should always be opened directly, this can be configured under **`Administration → User settings → System settings`**.  
The cabling view can also be opened via the category Cabling in objects.

Rights assignment
-----------------

Under `**Administration → Authorization system → Rights → Cabling view**`, [rights for persons and groups of persons](/display/en/Rights+Management) can be adjusted.

![](/download/attachments/66356496/image2021-12-23_14-30-19.png?version=1&modificationDate=1640266220173&api=v2&effects=drop-shadow)

Usage
-----

After installing and configuring the rights, the add-on is available under `**Extras → CMDB → Cabling View**`. 

![](/download/attachments/66356496/image2021-12-23_14-50-2.png?version=1&modificationDate=1640267402648&api=v2&effects=drop-shadow)

Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.2 | 2022-09-05 | \[Task\] PHP 8.0 Compatibility  <br>\[Task\] Design Compatibility |
| 1.1.1 |     | \[Bug\] Connections are not shown in add-on "cabling" |
| 1.1 | 2022-02-21 | \[Improvement\] Improve export options  <br>\[Bug\]         Remove "print" button in the CMDB-Explorer  <br>\[Bug\]         Visualization of cabling pathts, connecting an object with itself (two ports)  <br>\[Bug\]         Sorting of connections in the wiring view is confusing  <br>\[Bug\]         The visualization object browser should only provide objects that contain wiring |
| 1.0.4 | 2019-05-20 | ```<br>[Bug] Wrong sorting of cabling<br>[Bug] Incorrect display of vitrification in IE11<br>``` |
| 1.0.3 | 2018-12-18 | ```<br>[Bug] Error prevents creation of PDF documents when using SSL[Bug] Images won't be displayed<br>``` |
| 1.0.2 | 2017-12-18 | ```<br>[Improvement]   Cabling Printview<br>```<br><br>```<br>[Improvement]   Add the cabling browser as function<br>```<br><br>```<br>[Improvement]   Changing the connector types will now be documented<br>```<br><br>```<br>[Improvement]   Display the object that is about to be exported<br>```<br><br>```<br>[Bug]           PDF export does not work when an other object than the root object is selected<br>``` |