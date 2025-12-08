# Logbook

Each change to the [IT documentation](../glossary.md) is noted in the logbook by i-doit. This way it is easy to keep track of the [lifecycle of the IT documentation](./life-and-documentation-cycle.md).

## Global Logbook

The logbook in which all changes are incorporated is located at **Extras → CMDB → Logbook**. There you can filter the entries by various parameters. If possible, an entry also contains the specific changes (Which value was changed and in what respects?).

[![Global Logbook](../assets/images/en/basics/logbook/1-lb.png)](../assets/images/en/basics/logbook/1-lb.png)

The latest change can be tracked in the bottom area of each page.

[![latest change](../assets/images/en/basics/logbook/2-lb.png)](../assets/images/en/basics/logbook/2-lb.png)

## Logbook per Object

The logbook can not only be displayed as global but you can also limit the view to a single [object](../glossary.md). The [category](../glossary.md) **Logbook** is assigned to each [object type](../glossary.md) in a fixed way. The logbook can be accessed in the **Object view** via the book-icon above the category tree.

[![Logbook per Object](../assets/images/en/basics/logbook/3-lb.png)](../assets/images/en/basics/logbook/3-lb.png)

The filter functions and level of detail correspond to those of the global logbook.

[![filter functions](../assets/images/en/basics/logbook/4-lb.png)](../assets/images/en/basics/logbook/4-lb.png)

## Logbook per Service

For each service that has been modelled in i-doit there is a logbook, which contains the changes to all service components (or sub-services). The category is called **Service Logbook** and can be added to those object types which represent these services via the **Service** category.

[![Logbook per Service](../assets/images/en/basics/logbook/5-lb.png)](../assets/images/en/basics/logbook/5-lb.png)

## Configuration of the Logbook

You can find the configuration of the logbook at **Extras → CMDB → Logbook → Logbook configuration**.

[![Configuration of the Logbook](../assets/images/en/basics/logbook/6-lb.png)](../assets/images/en/basics/logbook/6-lb.png)

Changes do **not** affect existing entries.

The **Username** that is shown in each entry can be changed in the configuration. The [object title](../glossary.md) of the person object is considered as default; in most cases it consists of first name and surname.

!!! success "Anonymization"
    Is the **Username** changed to a fixed value, for example to "Anonymous", the logbook is anonymized. The result is that you can't retrace who made which changes anymore.

The option for the **Maximum amount of combined detailed changes** causes simultaneous changes to be summarized. As a result the level of detail is decreased but on the other hand this effects an increase of performance for imports.

### Delete Logbook entries from purged objects completely

This configuration option for the logbook can be found under **Administration → [Tenant-name] management → Settings for [Tenant-name] → Logbook → Delete Logbook entries from purged objects completely**.

[![logbook-entries-purge](../assets/images/en/basics/logbook/12-lb.png)](../assets/images/en/basics/logbook/12-lb.png)

This setting is set to **No** by default. If you set this setting to **Yes**, the logbook entry of the object will also be deleted after purging the object itself.

### Log detailed CMDB changes

At **Administration → [Tenant-name] management management → Settings for [Tenant-name] → Logbook → Log detailed CMDB changes** you can disable details for entries in the logbook. It will no longer be recorded which change was made to which attribute.

## Custom Entries

You can generate a new entry in the logbook for each object. Activate the **Logbook** category within the object (see above). Then you can display the form for a new entry via the **New** button. You can set  **Alert level**, **Message** and **Description** according to your requirements. The entry appears in the logbook after clicking the **Save** button.

[![Custom Entries](../assets/images/en/basics/logbook/7-lb.png)](../assets/images/en/basics/logbook/7-lb.png)

## Entries from Third-Party Systems

The logbook accepts new entries from third-party systems, for example through [imports](../consolidate-data/index.md), [service desks](../evaluation/cmdb-explorer/index.md), [network monitoring](../automation-and-integration/network-monitoring/index.md) and the [API](../i-doit-add-ons/api/index.md).

## Archiving and Restoring Older Entries

Whether older entries are to be archived or not can be configured via **Extras → CMDB → Logbook → Archive**. Here you need to state how old (in days) these entries have to be in order to be archived. This feature is helpful if the logbook is very big and the evaluation is impaired by long loading times. Archived entries are stored in a separate database table. This table is either created on a respective tenant database or on a third database instance.

[![Archiving and Restoring Older Entries](../assets/images/en/basics/logbook/8-lb.png)](../assets/images/en/basics/logbook/8-lb.png)

Archiving is performed via the [i-doit Console](../i-doit-add-ons/api/index.md). This step can therefore also be automated. A corresponding example of a call and a [list of parameters](../automation-and-integration/cli/index.md) can be found in the corresponding article for the [logbook-archive](../automation-and-integration/cli/index.md) option.

Example:

```shell
sudo -u www-data php console.php logbook-archive --user admin --password admin --tenantId 1
```

Archived entries can be restored for further evaluation. This item can be found under **Extras → CMDB → Logbook → Restore**.

[![Archived entries](../assets/images/en/basics/logbook/9-lb.png)](../assets/images/en/basics/logbook/9-lb.png)

## Creation Date / Date of Change

Any changes to objects ([create, change, archive, delete, restore](./life-and-documentation-cycle.md)) not only cause an entry in the logbook but also causes changes to the [attributes](../glossary.md) **Creation date** and **Date of change** in the **General** category which is assigned to all object types.

[![Creation Date](../assets/images/en/basics/logbook/10-lb.png)](../assets/images/en/basics/logbook/10-lb.png)

The widget My last changed objects listing the latest changes to objects can be added to the [dashboard](./dashboard-and-widgets.md).

[![Date of Change](../assets/images/en/basics/logbook/11-lb.png)](../assets/images/en/basics/logbook/11-lb.png)

## Set Permissions

The authorization system of i-doit allows the configuration of persons (or person groups) that are allowed to have reading access to the logbook. For example, you can specify that only i-doit-administrators have the authorization to track changes.
