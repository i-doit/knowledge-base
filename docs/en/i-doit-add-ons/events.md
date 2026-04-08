---
title: Events
description: "With the Events add-on, you automate actions when changes are made to your IT documentation."
icon:
status:
lang: en
---
# Events

With the Events [add-on](./index.md), you automate actions when changes are made to your [IT documentation](../glossar.md). When something is changed in i-doit, you can automatically notify third-party systems. For example, if you document a new VM, it can be automatically created and provisioned on a virtualization host.

!!! info "You can find a practical example on our [Blog](https://www.i-doit.com/blog/event-add-on/)"

## Assigning rights

Under **Administration → Permissions → Events**, [permissions for persons and person groups](../effizientes-dokumentieren/rechteverwaltung/index.md) can be adjusted.

[![Assigning rights](../assets/images/de/i-doit-add-ons/events/1-eve.png)](../assets/images/de/i-doit-add-ons/events/1-eve.png)

## Configuration

The configuration is accessed via **Administration → Add-ons → Events → Hooks**.

[![Configuration](../assets/images/de/i-doit-add-ons/events/2-eve.png)](../assets/images/de/i-doit-add-ons/events/2-eve.png)

!!! attention "404 Not Found"
    If only an error message appears when accessing the event configuration, stating that the page could not be found, this is most likely due to an incorrect [web server configuration](../administration/verwaltung/mandanten-name-verwaltung/index.md). Both the Apache rewrite module must be activated and reading the .htaccess file in the i-doit installation directory must be perwithted (AllowOverride All).

You combine events with command calls. An event is triggered by a hook -- i.e., during an internal routine in i-doit. The following events are available:

-   [Category](../glossar.md)
    -   Create (only via the web GUI)
    -   Save
    -   Archive/Delete/Restore/Purge
-   [Object](../glossar.md)
    -   Create
    -   Purge
-   [Object type](../glossar.md)
    -   Create/Save
    -   Purge

For all [states in IT documentation](../grundlagen/lebens-und-dokumentationszyklus.md), there are corresponding events. You can create any number of event-to-command-call combinations.

When a configured event occurs, i-doit immediately executes a shell script. Note the following:

- The script must be executable by the user or group under which the web server runs (on Debian: `www-data`).
- On GNU/Linux, set the execute permission bit (`chmod +x`).
- Any programming language is supported, as long as the operating system supports it (Bash, PHP, Python, Perl, etc.).

[![Command call](../assets/images/de/i-doit-add-ons/events/3-eve.png)](../assets/images/de/i-doit-add-ons/events/3-eve.png)

The shell script receives information about the event as BASE64-encoded JSON. Here is an example after decoding -- it shows saving a category entry:

```shell
{
    "success": 0,
    "objectID": "2912",
    "categoryID": 1,
    "categoryConst": "C__CATG__GLOBAL",
    "categoryDataID": "2949",
    "multivalue": false,
    "changes": [],
    "postData": {
        "data_id": "2948",
        "properties": {
            "title": {
                "tag": "title",
                "value": "Headquarter Network",
                "title": "LC__UNIVERSAL__TITLE"
            },
            "created": {
                "tag": "created",
                "value": "2016-04-26 14:41:01",
                "title": "LC__TASK__DETAIL__WORKORDER__CREATION_DATE"
            },
            "created_by": {
                "tag": "created_by",
                "value": "admin",
                "title": "LC__UNIVERSAL__CREATED_BY"
            },
            "changed_by": {
                "tag": "changed_by",
                "value": "admin",
                "title": "LC__CMDB__LAST_CHANGE_BY"
            },
            "purpose": {
                "tag": "purpose",
                "value": "1",
                "id": "1",
                "title_lang": "LC__CMDB__CATG__PURPOSE_PRODUCTION",
                "title": "LC__CMDB__CATG__GLOBAL_PURPOSE"
            },
            "category": {
                "tag": "category",
                "value": "2",
                "id": "2",
                "title_lang": "Demo",
                "title": "LC__CMDB__CATG__GLOBAL_CATEGORY"
            },
            "sysid": {
                "tag": "sysid",
                "value": "SYSID_1461677372",
                "title":"SYSID"
            },
            "cmdb_status": {
                "tag": "cmdb_status",
                "value": "6",
                "id": "6",
                "const": "C__CMDB_STATUS__IN_OPERATION",
                "title_lang": "LC__CMDB_STATUS__IN_OPERATION",
                "title": "LC__UNIVERSAL__CMDB_STATUS"
            },
            "type": {
                "tag": "type",
                "value": "77",
                "id": "77",
                "const": "C__OBJTYPE__SUPERNET",
                "title_lang": "LC__OBJTYPE__SUPERNET",
                "title": "LC__REPORT__FORM__OBJECT_TYPE"
            },
            "tag": {
                "tag": "tag",
                "title": "LC__CMDB__CATG__GLOBAL_TAG",
                "value": []
            },
            "description": {
                "tag": "description",
                "title": "LC__CMDB__LOGBOOK__DESCRIPTION"
            }
        }
    },
    "data": {
        "2949":{
            "title": "Headquarter Network",
            "status": "Normal",
            "created": "2016-04-26 14:47:57",
            "created_by": "admin",
            "changed": "2016-04-26 14:47:57",
            "changed_by": "admin",
            "purpose": "Produktion",
            "category": "Demo",
            "sysid": "SYSID_1461674878",
            "cmdb_status": "In Betrieb",
            "type": "Supernet",
            "tag": null,
            "description": "",
            "_id": 2912,
            "_title": "<span class=\"hide\">Headquarter Network<\/span><a name=\"Headquarter Network\" href=\"?objID=2912\" id=\"lb_58_2912\">Headquarter Network<\/a><script type='text\/javascript'>if ($('lb_58_2912')) new Tip('lb_58_2912', '', {ajax: {url: '\/i-doit\/?ajax=1&call=quick_info&objID=2912'}, delay: '0', stem: 'topLeft', style: 'default', className: 'objectinfo'});<\/script>",
            "_created": "<span data-date=\"2016-04-26 14:47:57\" class=\"hide\"><\/span>26.04.2016 (admin)",
            "_changed": "<span data-date=\"2016-04-26 14:47:57\" class=\"hide\"><\/span>26.04.2016 (admin)",
            "_cmdb_status": "<div class=\"cmdb-marker\" style=\"background-color:#33C20A;\"><\/div> In Betrieb"
        }
    }
}
```

In this example, the **General** category for the object "Headquarter Network" was successfully saved.

You can configure additional static parameters that are passed to the shell script. Placeholders are not supported.

!!! success "i-doit Controller"
    The described shell scripts are not only suitable for controlling third-party systems but also i-doit itself. There is nothing preventing you from calling i-doit's command-line tool, the [Controller](../automatisierung-und-integration/cli/index.md), or the [API](./api/index.md) via such a shell script. This allows automated tasks to be performed within the IT documentation.

!!! success "Performance"
    The command calls are executed **synchronously** -- when clicking **Save**, i-doit waits until the shell script has finished. With many or extensive scripts, this can slow down the web GUI.

    **Recommendation:** Build a queue. Your shell script receives the parameters and saves them to a temporary file. A separate cron job then processes this queue asynchronously. This way, the user does not experience any delay.

## Logging

Each execution of an event command call is logged. The last 500 entries can be found under **Administration → Add-ons → Events → History (Log)**.

[![Logging](../assets/images/de/i-doit-add-ons/events/4-eve.png)](../assets/images/de/i-doit-add-ons/events/4-eve.png)

## Releases

| Version | Date | Changelog |
| --- | --- | --- |
| 1.3 | 05.09.2022 | [Task] Change link to knowledgebase<br>[Task] PHP 8.0 Compatibilit<br>[Task] Design Compatibility<br>[Bug] Events are not triggered when changing/assigning roles |
| 1.2 |     | [Improvement] The event contains information about the user<br>[Bug] Custom category constants are not passed, when ranking entries |
| 1.1.1 | 31.07.2019 | [Bug] Drop-down empty in hooks for object types<br> |
| 1.1 | 30.01.2019 | [Bug] Constant of user defined categories is missing<br> |
| 1.0.1 |     | [Bug] i-doit 1.12 compatibility<br> |
| 1.0 | 03.07.2018 | Initial release |
