  

  

**Contents**

*   1[Global Logbook](#Logbook-GlobalLogbook)
*   2[Logbook per Object](#Logbook-LogbookperObject)
*   3[Logbook per Service](#Logbook-LogbookperService)
*   4[Configuration of the Logbook](#Logbook-ConfigurationoftheLogbook)
*   5[Activation/ Deactivation of the Logbook](#Logbook-Activation/DeactivationoftheLogbook)
*   6[Custom Entries](#Logbook-CustomEntries)
*   7[Entries from Third-Party Systems](#Logbook-EntriesfromThird-PartySystems)
*   8[Archiving and Restoring Older Entries](#Logbook-ArchivingandRestoringOlderEntries)
*   9[Creation Date / Date of Change](#Logbook-CreationDate/DateofChange)
*   10[Set Permissions](#Logbook-SetPermissions)

  

  

  

Each change to the [IT documentation](/display/en/Glossary) is noted in the logbook by i-doit. This way it is easy to keep track of the [lifecycle of the IT documentation](/display/en/Life+and+Documentation+Cycle).

Global Logbook
--------------

The logbook in which all changes are incorporated is located at **`Extras → CMDB → Logbook → List view logbook`**. There you can filter the entries by various parameters. If possible, an entry also contains the specific changes (Which value was changed and in what respects?).

  

![](/download/attachments/37355680/logbook1.png?version=1&modificationDate=1464607201022&api=v2&effects=drop-shadow)

  

The latest change can be tracked in the bottom area of each page.

  

![](/download/attachments/37355680/logbook2.png?version=1&modificationDate=1464607215830&api=v2&effects=drop-shadow)

  

Logbook per Object
------------------

The logbook can not only be displayed as global but you can also limit the view to a single [object](/display/en/Glossary). The [category](/display/en/Glossary) **`Logbook`** is assigned to each [object type](/display/en/Glossary) in a fixed way. The logbook can be accessed in the **`Object view`** via the book-icon above the category tree.

![](/download/attachments/37355680/logbook3.png?version=1&modificationDate=1464607316431&api=v2&effects=drop-shadow)

  

The filter functions and level of detail correspond to those of the global logbook.

  

![](/download/attachments/37355680/logbook4.png?version=1&modificationDate=1464607327175&api=v2&effects=drop-shadow)

  

Logbook per Service
-------------------

For each service that has been modelled in i-doit there is a logbook, which contains the changes to all service components (or sub-services). The category is called **`Service Logbook`** and can be added to those object types which represent these services via the **`Service`** category.

  

![](/download/attachments/37355680/logbook5.png?version=1&modificationDate=1464607358206&api=v2&effects=drop-shadow)

  

Configuration of the Logbook
----------------------------

You can find the configuration of the logbook at **`Extras → CMDB → Logbook → Logbook configuration`**.

  

![](/download/attachments/37355680/logbook6.png?version=1&modificationDate=1464607342940&api=v2&effects=drop-shadow)

  

Changes do **not** affect existing entries.

The **`Username`** that is shown in each entry can be changed in the configuration. The [object title](/display/en/Glossary) of the person object is considered as default; in most cases it consists of first name and surname.

Anonymization

Is the **`Username`** changed to a fixed value, for example to "Anonymous", the logbook is anonymized. The result is that you can't retrace who made which changes anymore.

The option for the **`Maximum amount of combined detailed changes`** causes simultaneous changes to be summarized. As a result the level of detail is decreased but on the other hand this effects an increase of performance for imports.

Activation/ Deactivation of the Logbook
---------------------------------------

You can activate/ deactivate the logbook at **`Administration → System settings → Tenant settings → Logbook → Log detailed CMDB changes`**.

Custom Entries
--------------

You can generate a new entry in the logbook for each object. Activate the **`Logbook`** category within the object (see above). Then you can display the form for a new entry via the **`New`** button. You can set  **`Alert level`**, **`Message`** and **`Description`** according to your requirements. The entry appears in the logbook after clicking the **`Save`** button.

  

![](/download/attachments/37355680/logbook7.png?version=1&modificationDate=1464607383788&api=v2&effects=drop-shadow)

  

Entries from Third-Party Systems
--------------------------------

The logbook accepts new entries from third-party systems, for example through [imports](/display/en/Consolidate+Data), [service desks](/display/en/CMDB+Explorer), [network monitoring](/display/en/Network+Monitoring) and the [API](/pages/viewpage.action?pageId=37355644).

Archiving and Restoring Older Entries
-------------------------------------

Whether older entries are to be archived or not can be configured via **`Extras → CMDB → Logbook → Archive`**. Here you need to state how old (in days) these entries have to be in order to be archived. This feature is helpful if the logbook is very big and the evaluation is impaired by long loading times. Archived entries are stored in a separate database table. This table is either created on a respective tenant database or on a third database instance.

  

![](/download/attachments/37355680/logbook8.png?version=1&modificationDate=1464607405159&api=v2&effects=drop-shadow)

  

Archiving is performed via the [i-doit Console](/display/en/Console). This step can therefore also be automated. A corresponding example of a call and a [list of parameters](/display/en/Options+and+Parameters+for+the+Console) can be found in the corresponding article for the [logbook-archive](https://kb.i-doit.com/display/en/Options+and+Parameters+for+the+Console#OptionsandParametersfortheConsole-logbook-archive) option. 

Example:

[?](#)

`sudo` `-u www-data php console.php logbook-archive --user admin --password admin --tenantId 1`

Archived entries can be restored for further evaluation. This item can be found under **`Extras → CMDB → Logbook → Restore`**.

  

![](/download/attachments/37355680/logbook9.png?version=1&modificationDate=1464607419929&api=v2&effects=drop-shadow)

Creation Date / Date of Change
------------------------------

Any changes to objects ([create, change, archive, delete, restore](/display/en/Life+and+Documentation+Cycle)) not only cause an entry in the logbook but also causes changes to the [attributes](/display/en/Glossary) **`Creation date`** and **`Date of change`** in the **`General`** category which is assigned to all object types.

  

![](/download/attachments/37355680/logbook10.png?version=1&modificationDate=1464607437445&api=v2&effects=drop-shadow)

  

The widget `My last changed objects` listing the latest changes to objects can be added to the [dashboard](/display/en/Dashboard+and+Widgets).

  

![](/download/attachments/37355680/logbook11.png?version=1&modificationDate=1464607450530&api=v2&effects=drop-shadow)

Set Permissions
---------------

The authorisation system of i-doit allows the configuration of persons (or person groups) that are allowed to have reading access to the logbook. For example, you can specify that only i-doit-administrators have the authorisation to track changes.