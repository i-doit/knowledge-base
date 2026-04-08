---
title: Logbook
description: "Every change to the IT documentation is recorded by i-doit in a logbook."
icon:
status:
lang: en
---
# Logbook

Every change to the [IT documentation](../glossar.md) is recorded by i-doit in a logbook. This way, the [life cycle of the IT documentation](lebens-und-dokumentationszyklus.md) can be easily traced.

## Global logbook

The logbook, which captures all changes, is located under **Extras → CMDB → Logbook → Logbook list view**. Entries can be filtered there by various parameters. Where possible, an entry also contains the exact changes (Which value was changed from what to what?).

[![global-logbook](../assets/images/de/grundlagen/logbuch/1-lb.png)](../assets/images/de/grundlagen/logbuch/1-lb.png)

The last change can be traced at the bottom of every page.

[![last-change](../assets/images/de/grundlagen/logbuch/2-lb.png)](../assets/images/de/grundlagen/logbuch/2-lb.png)

## Logbook per object

You can also display the logbook restricted to a single [object](../glossar.md). The [category](../glossar.md) **Logbook** is permanently assigned to every [object type](../glossar.md). In the **Object view** you can access the logbook via the book icon above the category tree.

[![object-logbook](../assets/images/de/grundlagen/logbuch/3-lb.png)](../assets/images/de/grundlagen/logbuch/3-lb.png)

The filter functions and the level of detail correspond to those of the global logbook.

[![logbook-filter](../assets/images/de/grundlagen/logbuch/4-lb.png)](../assets/images/de/grundlagen/logbuch/4-lb.png)

## Logbook per service

For every service modeled in i-doit, a logbook exists that contains the changes to all service components (or sub-services). The category is called **Service Logbook** and can be added to those object types that represent services via the **Service** category.

[![logbook-service](../assets/images/de/grundlagen/logbuch/5-lb.png)](../assets/images/de/grundlagen/logbuch/5-lb.png)

## Configuring the logbook

You can find the logbook configuration under **Extras → CMDB → Logbook → Logbook configuration**.

[![logbook-configure](../assets/images/de/grundlagen/logbuch/6-lb.png)](../assets/images/de/grundlagen/logbuch/6-lb.png)

Changes do **not** affect already existing entries.

In the configuration, you can change the **User identification** that is stored with each entry. By default, i-doit uses the [object title](../glossar.md) of the person object, usually consisting of first and last name.

!!! success "Anonymization"
    If the **User identification** is changed to a fixed value, for example "Anonymous", the logbook is anonymized. It is then no longer possible to trace who made which changes.

The **Maximum number of combined changes** setting causes simultaneous changes to be consolidated. The level of detail decreases as a result, but performance during imports is increased.

### Completely delete logbook entries for purged objects

You can find this setting under **Administration → [Tenant name] Administration → Settings for [Tenant name] → Logbook → Completely delete logbook entries for purged objects**.

[![logbook-entries-cleanup](../assets/images/de/grundlagen/logbuch/12-lb.png)](../assets/images/de/grundlagen/logbuch/12-lb.png)

By default, this option is set to **No**. If you set it to **Yes**, i-doit also completely deletes the logbook entries after purging an object.

### Log detailed CMDB changes

Under **Administration → [Tenant name] Administration → Settings for [Tenant name] → Logbook → Log detailed CMDB changes**, details for logbook entries can be disabled. It is then no longer recorded which change was made to which attribute.

## Custom entries

You can manually create a new logbook entry for any object:

1. Open the **Logbook** category within the object (see above).
2. Click the **New** button.
3. Fill in the fields **Alert Level**, **Message** and **Description**.
4. Click **Save**.

[![custom-entries](../assets/images/de/grundlagen/logbuch/7-lb.png)](../assets/images/de/grundlagen/logbuch/7-lb.png)

### Entries from third-party systems

The logbook accepts new entries from third-party systems, for example through [imports](../daten-konsolidieren/index.md), [service desks](../automatisierung-und-integration/service-desk/index.md), [network monitoring](../automatisierung-und-integration/network-monitoring/index.md) and the [API](../i-doit-add-ons/api/index.md).

## Archiving and restoring older entries

Under **Extras → CMDB → Logbook → Archive**, you configure whether and from what age (in days) entries are archived. This function helps you when the logbook has become very large and evaluation is hindered by long wait times. i-doit moves archived entries to a separate database table -- either in the respective tenant database or on a third database instance.

[![restore-entries](../assets/images/de/grundlagen/logbuch/8-lb.png)](../assets/images/de/grundlagen/logbuch/8-lb.png)

The archiving is performed via the [i-doit console utility](../automatisierung-und-integration/cli/index.md). You can also automate this step. Additional options are shown by the `--help` command.

Example:

```shell
    sudo -u www-data php console.php logbook:archive --user admin --password admin --tenantId 1
```

Archived entries can be restored for further evaluation. This function is located under **Extras → CMDB → Logbook → Restore**.

[![archived-entries](../assets/images/de/grundlagen/logbuch/9-lb.png)](../assets/images/de/grundlagen/logbuch/9-lb.png)

## Creation and modification date

Any change to objects [creating, editing, archiving, deleting, restoring](lebens-und-dokumentationszyklus.md) not only creates an entry in the logbook, but also updates the [attributes](../glossar.md) **Creation date** and **Modification date** in the **General** category, which is permanently assigned to every object type.

[![modification-date](../assets/images/de/grundlagen/logbuch/10-lb.png)](../assets/images/de/grundlagen/logbuch/10-lb.png)

On the [dashboard](dashboard-und-widgets.md), the **My recently modified objects** widget can be added, which displays the user's own recent changes to objects.

[![dashboard](../assets/images/de/grundlagen/logbuch/11-lb.png)](../assets/images/de/grundlagen/logbuch/11-lb.png)

## Setting permissions

Via the permission system of i-doit, you determine which persons or person groups have read access to the logbook. This way you can ensure, for example, that only i-doit administrators can trace changes.
