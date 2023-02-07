  

**Contents**

*   1[Rights assignment](#Events-Rightsassignment)
*   2[Configuration](#Events-Configuration)
*   3[Logging](#Events-Logging)
*   4[Releases](#Events-Releases)

The Event [add-on](/display/en/i-doit+pro+Add-ons) allow for a high degree of automation when working with the [IT documentation](/display/en/Glossary). If something is changed in the IT documentation, then third-party system will be informed about these changes. If, for example, a new VM is documented in i-doit, it can automatically be created and provisioned on a virtualization host.

Rights assignment
-----------------

Under `**Administration → Authorization system → Rights → Events**`, [rights for persons and groups of persons](/display/en/Rights+Management) can be adjusted.

![](/download/attachments/42303536/image2022-3-16_16-15-2.png?version=1&modificationDate=1647443703114&api=v2&effects=drop-shadow)

Configuration
-------------

The configuration is accessed via **`Administration → CMDB settings → Events → Hooks`**.

  

![](/download/attachments/42303536/events1.png?version=1&modificationDate=1465809198199&api=v2&effects=drop-shadow)

  

404 Page not Found

When you try to access the event configuration and receive an error message, stating that the page could not be found, this is in all likelihood due to a faulty [configuration of the web server](/display/en/System+Settings). The Apache module `rewrite` has to be activated and the processing of the `.htaccess` file in the installation folder of i-doit needs to be permitted (`AllowOverride All)`.

Events are combined with commands. An event is triggered by a hook, an internal routine in i-doit. The following events are available:

*   [Category](/display/en/Glossary)
    *   Create (only via the web GUI)
    *   Save
    *   Archive/Delete/Restore/Purge
*   [Object](/display/en/Glossary)
    *   Create
    *   Purge
*   [Object type](/display/en/Glossary)
    *   Create/Save
    *   Purge

Thus there exist matching events for all [states in the IT documentation](/display/en/Life+and+Documentation+Cycle). As many event-to-command combinations as desired are possible.

The command is carried out immediately once the configured event occurs. A shell script is executed for this purpose. This requires the rights to be executed by the user or group with whose rights the web server is running. On a Debian-based operating system this is the user `www-data` with the group of the same name. Because of this, the script under GNU/Linux requires the right bit for executing (`x`). The programming language is arbitrary but it should be supported by the operating system (Bash, PHP, Python, Perl etc.).

  

![](/download/attachments/42303536/events2.png?version=1&modificationDate=1465809195804&api=v2)

  

Information about the event is referred to the shell script. The information is encoded as JSON with BASE64. The following is an example of a JSON string when saving a category entry (the BASE64 decoding already took place):

[?](#)

`{`

`"success"``: 0,`

`"objectID"``:` `"2912"``,`

`"categoryID"``: 1,`

`"categoryConst"``:` `"C__CATG__GLOBAL"``,`

`"categoryDataID"``:` `"2949"``,`

`"multivalue"``:` `false``,`

`"changes"``: [],`

`"postData"``: {`

`"data_id"``:` `"2948"``,`

`"properties"``: {`

`"title"``: {`

`"tag"``:` `"title"``,`

`"value"``:` `"Headquarter Network"``,`

`"title"``:` `"LC__UNIVERSAL__TITLE"`

`},`

`"created"``: {`

`"tag"``:` `"created"``,`

`"value"``:` `"2016-04-26 14:41:01"``,`

`"title"``:` `"LC__TASK__DETAIL__WORKORDER__CREATION_DATE"`

`},`

`"created_by"``: {`

`"tag"``:` `"created_by"``,`

`"value"``:` `"admin"``,`

`"title"``:` `"LC__UNIVERSAL__CREATED_BY"`

`},`

`"changed_by"``: {`

`"tag"``:` `"changed_by"``,`

`"value"``:` `"admin"``,`

`"title"``:` `"LC__CMDB__LAST_CHANGE_BY"`

`},`

`"purpose"``: {`

`"tag"``:` `"purpose"``,`

`"value"``:` `"1"``,`

`"id"``:` `"1"``,`

`"title_lang"``:` `"LC__CMDB__CATG__PURPOSE_PRODUCTION"``,`

`"title"``:` `"LC__CMDB__CATG__GLOBAL_PURPOSE"`

`},`

`"category"``: {`

`"tag"``:` `"category"``,`

`"value"``:` `"2"``,`

`"id"``:` `"2"``,`

`"title_lang"``:` `"Demo"``,`

`"title"``:` `"LC__CMDB__CATG__GLOBAL_CATEGORY"`

`},`

`"sysid"``: {`

`"tag"``:` `"sysid"``,`

`"value"``:` `"SYSID_1461677372"``,`

`"title"``:``"SYSID"`

`},`

`"cmdb_status"``: {`

`"tag"``:` `"cmdb_status"``,`

`"value"``:` `"6"``,`

`"id"``:` `"6"``,`

`"const"``:` `"C__CMDB_STATUS__IN_OPERATION"``,`

`"title_lang"``:` `"LC__CMDB_STATUS__IN_OPERATION"``,`

`"title"``:` `"LC__UNIVERSAL__CMDB_STATUS"`

`},`

`"type"``: {`

`"tag"``:` `"type"``,`

`"value"``:` `"77"``,`

`"id"``:` `"77"``,`

`"const"``:` `"C__OBJTYPE__SUPERNET"``,`

`"title_lang"``:` `"LC__OBJTYPE__SUPERNET"``,`

`"title"``:` `"LC__REPORT__FORM__OBJECT_TYPE"`

`},`

`"tag"``: {`

`"tag"``:` `"tag"``,`

`"title"``:` `"LC__CMDB__CATG__GLOBAL_TAG"``,`

`"value"``: []`

`},`

`"description"``: {`

`"tag"``:` `"description"``,`

`"title"``:` `"LC__CMDB__LOGBOOK__DESCRIPTION"`

`}`

`}`

`},`

`"data"``: {`

`"2949"``:{`

`"title"``:` `"Headquarter Network"``,`

`"status"``:` `"Normal"``,`

`"created"``:` `"2016-04-26 14:47:57"``,`

`"created_by"``:` `"admin"``,`

`"changed"``:` `"2016-04-26 14:47:57"``,`

`"changed_by"``:` `"admin"``,`

`"purpose"``:` `"Produktion"``,`

`"category"``:` `"Demo"``,`

`"sysid"``:` `"SYSID_1461674878"``,`

`"cmdb_status"``:` `"In Betrieb"``,`

`"type"``:` `"Supernet"``,`

`"tag"``:` `null``,`

`"description"``:` `""``,`

`"_id"``: 2912,`

`"_title"``:` `"<span class=\"hide\">Headquarter Network<\/span><a name=\"Headquarter Network\" href=\"?objID=2912\" id=\"lb_58_2912\">Headquarter Network<\/a><script type='text\/javascript'>if ($('lb_58_2912')) new Tip('lb_58_2912', '', {ajax: {url: '\/i-doit\/?ajax=1&call=quick_info&objID=2912'}, delay: '0', stem: 'topLeft', style: 'default', className: 'objectinfo'});<\/script>"``,`

`"_created"``:` `"<span data-date=\"2016-04-26 14:47:57\" class=\"hide\"><\/span>26.04.2016 (admin)"``,`

`"_changed"``:` `"<span data-date=\"2016-04-26 14:47:57\" class=\"hide\"><\/span>26.04.2016 (admin)"``,`

`"_cmdb_status"``:` `"<div class=\"cmdb-marker\" style=\"background-color:#33C20A;\"><\/div> In Betrieb"`

`}`

`}`

`}`

You can see that the **`General`** category was saved successfully for the "Headquarter Network" object.

Additional parameters that are given to the shell script can also be set. These are static, in other words without a placeholder.

i-doit Controller

The described shell scripts are not only suited to control third-party systems but also i-doit itself. There is no reason not to use such a shell script in order to access the command line tool of i-doit, the [controller](/display/en/CLI) or the [API](/pages/viewpage.action?pageId=37355644). This way, automated tasks can be handled within the IT documentation.

Performance

The commands are executed synchronously. For example, they are executed immediately as soon as the **`Save`** button is used and the system will wait until the shell script has ended. With many and/or extensive shell scripts this slow will down the web GUI of i-doit and thus negatively affect its usability. Because of this, it may be worthwhile to build a queue: i-doit runs a shell script which loads the parameters and stores them in a queue (for example in a temporary file). Another script is executed which processes this queue, using Cronjob or something similar. This way, an asynchronous workflow is created so that the usability of i-doit is not appreciably affected.

Logging
-------

When an event is triggered and it is linked to a command, then this execution is logged. The last 500 entries are listed at **`Administration → CMDB settings → Events → History (Log)`**.

![](/download/attachments/42303536/events3.png?version=1&modificationDate=1465809195619&api=v2&effects=drop-shadow)

Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.3 | 2022-09-05 | \[Task\] Change link to Knowledgebase  <br>\[Task\] PHP 8.0 Compatibility  <br>\[Task\] Design Compatibility  <br>\[Bug\]  Events are not triggered when changing/assigning roles |
| 1.2 |     | \[Improvement\] The event contains information about the user  <br>\[Bug\]         Custom category constants are not passed, when ranking entries |
| 1.1.1 | 2019-07-31 | ```<br>[Bug] Drop-down empty in hooks for object types<br>``` |
| 1.1 | 2019-01-30 | ```<br>[Bug] Constant of user defined categories is missing<br>``` |
| 1.0.1 |     | ```<br>[Bug] i-doit 1.12 compatibility<br>``` |
| 1.0 | 2018-07-03 | Initial release |