---
title: "i-doit Web GUI"
description: "Most user interactions are based on the legacy Checkmk add-on from i-doit, which is currently shipped with i-doit/open."
icon:
status:
lang: en
---
# i-doit Web GUI

Most user interactions are based on the [legacy Checkmk add-on](./index.md) from i-doit, which is currently shipped with i-doit/open. This legacy add-on must be [activated via the i-doit Admin Center](../index.md) (it is enabled by default).

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

## Enable Real-Time Calls

Let i-doit retrieve the status of host and service checks in real time via Livestatus. Configuration is done via **Administration > Import and Interfaces > Monitoring > Livestatus / NDO**.

These status queries can be displayed in every object or in the object lists for each type. Add the "Monitoring" category to these object types via "Administration > CMDB Settings > Quick Configuration Wizard."

Enable status calls within this category manually for each object, or [idoitcmk pull](bestandsdaten-in-die-cmdb-importieren.md) does this through the [configuration setting](./konfiguration.md) `pull.enableLivestatus`.

## Managing Host Tags

With i-doit you can manage host tags. There are "static" and "dynamic" host tags:

- **Static** means you create tags manually under Extras > Check_MK 2 > Tags (static) and add them to a host in the Check_MK Tags category.
- **Dynamic** means this happens automatically via rulesets under Extras > Check_MK 2 > Tags (dynamic).

Both "static" and "dynamic" host tags are displayed in the Check_MK Tags category. They are exported to Checkmk via [idoitcmk push](./wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md).

## Calling idoitcmk via the Web GUI

The Check_MK Host category offers several buttons that trigger idoitcmk in the background:

*   **Does the host exist in Checkmk?** -- Identifies the host in Checkmk based on its hostname
*   **Update object from Checkmk** -- Fetches data from the Checkmk host to update this object
*   **Create/update host in Checkmk** -- The object data is transferred to Checkmk. Either a new host is created or an existing one is updated
*   **Delete host in Checkmk** -- If this object exists as a host in Checkmk, it will be deleted

Before you or another user presses one of these buttons, please run them manually via the command line interface to ensure they do what they are supposed to do.

## Configuration

Configuration is done via **Administration > Add-ons > Check_MK**. Through the "Call app idoitcmk" setting, i-doit needs to know where idoitcmk is located. If you have carefully followed the [installation steps](./installation.md), use:

```shell
/usr/local/bin/idoitcmk
```

Tip: You may want to add default options when one of the buttons is triggered. In a multi-tenant environment, for example, you can provide tenant-specific configuration settings:

```shell
/usr/local/bin/idoitcmk -c /etc/idoitcmk/tenant-one.json
```

Logging is enabled by default. For the first steps, it is always good to know what is happening.

## Permissions

To grant users/user groups permission to trigger these buttons, go to "Administration > Authorization System > Permissions > CMDB", load a user/group, and enable the "Execute" right for one or more conditions:

*   Category
*   Category in object types
*   Category in objects
*   Category in objects below a location, and/or
*   Categories in objects you created
