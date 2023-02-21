**Contents**

*   1[Download and Installation](#Replacement-DownloadandInstallation)
*   2[Configuration](#Replacement-Configuration)
*   3[Rights Assignment](#Replacement-RightsAssignment)
*   4[Requirements](#Replacement-Requirements)
*   5[Object Swap](#Replacement-ObjectSwap)
*   6[Swap by Workplace](#Replacement-SwapbyWorkplace)
*   7[Swap Report](#Replacement-SwapReport)
*   8[Releases](#Replacement-Releases)

A new switch is put into operation but you want to maintain all the connections? Use the **Replacement** [add-on](/display/en/i-doit+pro+Add-ons) so that you don't have to document all the connections anew. This add-on allows swapping of [objects](../basics/structure-of-the-it-documentation.md) with configurable adoption of existing connections.

Download and Installation
-------------------------

This add-on can also be installed at a later time. You can find detailed descriptions about download, installation, updates etc. in the "[i-doit pro Add-ons](/display/en/i-doit+pro+Add-ons)" article.

Configuration
-------------

You can find the configuration at `**Administration**` **`→ CMDB settings → Object swap → Configuration`**. For the most part, you can use the configuration to define default values in order to standardize and speed up frequent swapping.  

| Option | Description |
| --- | --- |
| `**Selectable object-types**` | Here you specify which objects of which type can be swapped. Additionally, you define per [object type](../basics/structure-of-the-it-documentation.md) which [categories](../basics/structure-of-the-it-documentation.md) (and thus which [attributes](../basics/structure-of-the-it-documentation.md)) are to be swapped. The categories which aren't selected aren't affected by swaps. |
| `**CMDB status for storing objects**` | You can restrict the selection of objects offered for swapping via their [`**CMDB status**`](/display/en/Life+and+Documentation+Cycle). |
| `**Consider the "swap" status?**` | When the swap status is considered, the swapped object receives the `**CMDB status**` `**stored**` and the object of swapping the `**CMDB status in operation**`. |
| `**Archive swapped objects?**` | Do you want the object which is swapped to receive the [status](/display/en/Life+and+Documentation+Cycle) `**Archived**`? |
| `**Also swap the SYS-ID?**` | Do you want to swap the `**SYS-ID**` attribute in the `**General**` category? This is [an attribute for unique referencing](/display/en/Unique+References). |

Rights Assignment
-----------------

Under `**Administration → Authorization system → Rights → Object swap**` you can specify [rights for persons and person groups](/display/en/Rights+Management).

| Condition | Description |
| --- | --- |
| `**Swap objects  <br>**` | Does the user have permission to swap objects? |
| `**Swap by workplace  <br>**` | Does the user have permission to swap workplace components? |
| **`Swap CI module configuration  <br>`** | Does the user have permission to adjust the configuration (see above)? |
| `**Swap CI-button in object list**` | The user can swap objects via the [action bar of the object list](/pages/viewpage.action?pageId=61014327). For this purpose, the **`Swap`** button will appear in the action bar. |
| ``**`**Swap CI-button in objects**`**`` | Via the action bar within an object, the user can swap the object with another one. For this purpose, the **`Swap`** button will appear in the action bar. |

Requirements
------------

Before two objects can be swapped, the following conditions have to be met:

*   Both objects have the same object type.
*   You can't swap an object with itself.

Object Swap
-----------

There are three ways to swap an object for another one:

1.  Select both objects within an [object list](/pages/viewpage.action?pageId=61014325) and click the `**Swap**` button in the [action bar](/pages/viewpage.action?pageId=61014327).
2.  Click the `**Swap**` button in the action bar within an object and then select the object of swapping  under `**Stored object.**`
3.  Select both objects under `**Object to swap**` and `**Stored object**` at `**Extras → Object Swap.**`

Now you can swap the selected objects by clicking the **`Change`** button.

![](/download/attachments/61015482/image2017-3-27%2013%3A22%3A6.png?version=1&modificationDate=1490613725361&api=v2&effects=drop-shadow)

 ![](/download/attachments/61015482/image2017-3-27%2013%3A20%3A35.png?version=1&modificationDate=1490613634493&api=v2&effects=drop-shadow)

After selecting both objects, you can adjust further options. The preselection is from the above mentioned configuration.

| Option | Description |
| --- | --- |
| `**Zu übernehmende Kategorien**`<br><br>**`**(Categories to adopt)**`** | see above |
| `**Consider the "swap" status?**` | see above |
| `**Archive swapped objects?**` | see above |
| `**Also swap the SYS-ID?**` | see above |

By clicking the `**Start swapping**` button both objects will be swapped.

![](/download/attachments/61015482/image2017-3-27%2013%3A7%3A43.png?version=1&modificationDate=1490612862864&api=v2&effects=drop-shadow)

Swap by Workplace
-----------------

You can carry out a preselection for swapping via assigned workplaces. First select an object type under `**Extras → Object swap → Swap by workplace**`. Then all objects of the type `**Workplace,**` in whose **`Workplace components`** category objects of this type are assigned, will be listed. You select an object for swapping from the respective workplace. With the button  `**Swap selected objects**` you can reach `**Extras → Object swap → Swap objects**`.

![](/download/attachments/61015482/image2017-3-27%2013%3A28%3A9.png?version=1&modificationDate=1490614088804&api=v2&effects=drop-shadow)

Swap Report
-----------

A report about swapping actions which have been carried out so far is generated under **`Extras → Object swap → Swap-report`**. You can also reach the reports item via `**Extras → Report Manager → Views → Swap-report**`.

![](/download/attachments/61015482/image2017-3-27%2013%3A14%3A29.png?version=1&modificationDate=1490613268102&api=v2&effects=drop-shadow)

  

Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.4 | 2022-09-05 | \[Task\]        PHP 8.0 Compatibility  <br>\[Task\]        Design Compatibility  <br>\[Improvement\] English add-on renaming to Replacement |
| 1.3.2 | 2022-02-21 | \[Bug\] Use Of German Language in English Version Of Object Swap |
| 1.3.1 | 2020-08-10 | \[Bug\] The location is lost during swap  <br>\[Bug\] Information is deleted when objects are exchanged |
| 1.3 | 2019-05-20 | ```<br>[Improvement] Properties series number and model title in swap ci report available[Bug] Search index will not be renewed after a device replacement[Bug] Device exchange uses workflow tables[Bug] Swap-status has a uppercase first letter in its CMDB-Status[Bug] Opening the swap-report displays an error<br>``` |
| 1.2.5 | 2017-05-02 | ```<br>[Bug]           Error Message Appears Trying To Deinstall SWAP_CI in AdminCenter<br>``` |
| 1.2.4 | 2017-03-08 | ```<br>[Bug]           Button "Swap" of "SwapCI" does not Work in object lists<br>```<br><br>```<br>[Bug]           Improved PHP and i-doit compability<br>``` |
| 1.2.3 | 2015-10-08 | ```<br>[Improvement]   Properties series number and model title in swap ci report available<br>```<br><br>```<br>[Bug]           SwapCi shows error message when you log in to this context<br>```<br><br>```<br>[Bug]           SQL error prevents from choosing a category for swap<br>``` |
| 1.2.2 | 2015-03-09 | ```<br>[Bug]           SwapCi is showing error if tenant did not install the add-on<br>``` |
| 1.2.1 | 2014-04-14 | Initial release |