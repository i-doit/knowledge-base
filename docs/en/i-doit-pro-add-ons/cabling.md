# Cabling

The Cabling add-on gives you a detailed display of cabling. Whether you want to trace a cable route or print patch jobs.

Download and installation
-------------------------

This add-on can be installed later. Detailed descriptions regarding download, installation, updates, etc. are provided in the "[Add-ons](./index.md)" article.

Configuration
-------------

A technical configuration of the add-on is not necessary after [installation](./index.md).  
If the cabling view should always be opened directly, this can be configured under **Administration → User settings → System settings**.  
The cabling view can also be opened via the category Cabling in objects.

Rights assignment
-----------------

Under **Administration → Authorization system → Rights → Cabling view**, [rights for persons and groups of persons](../efficient-documentation/rights-management/index.md) can be adjusted.

[![Rights assignment](../assets/images/en/i-doit-pro-add-ons/cabling/1-cab.png)](../assets/images/en/i-doit-pro-add-ons/cabling/1-cab.png)

Usage
-----

After installing and configuring the rights, the add-on is available under **Extras → CMDB → Cabling View**.

[![Usage](../assets/images/en/i-doit-pro-add-ons/cabling/2-cab.png)](../assets/images/en/i-doit-pro-add-ons/cabling/2-cab.png)

Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.4 | 2024-02-27 | [Task] PHP 8.2 compatibility, cleaned up color usage |
| 1.3 | 2023-11-07 | [Bug]  Setting to display cable names is not saved.<br>[Bug]  Highlight 'add-on' instead of 'extras' menu<br>[Bug] Overlap objects in the wiring view |
| 1.2 | 2022-09-05 | [Task] PHP 8.0 Compatibility  <br>[Task] Design Compatibility |
| 1.1.1 |     | [Bug] Connections are not shown in add-on "cabling" |
| 1.1 | 2022-02-21 | [Improvement] Improve export options  <br>[Bug] Remove "print" button in the CMDB-Explorer  <br>[Bug] Visualization of cabling pathts, connecting an object with itself (two ports)  <br>[Bug] Sorting of connections in the wiring view is confusing  <br>[Bug] The visualization object browser should only provide objects that contain wiring |
| 1.0.4 | 2019-05-20 | [Bug] Wrong sorting of cabling<br>[Bug] Incorrect display of vitrification in IE11<br> |
| 1.0.3 | 2018-12-18 | [Bug] Error prevents creation of PDF documents when using SSL<br>[Bug] Images won't be displayed<br> |
| 1.0.2 | 2017-12-18 | [Improvement] Cabling Printview<br>[Improvement] Add the cabling browser as function<br>[Improvement] Changing the connector types will now be documented<br>[Improvement] Display the object that is about to be exported<br>[Bug] PDF export does not work when an other object than the root object is selected<br> |
