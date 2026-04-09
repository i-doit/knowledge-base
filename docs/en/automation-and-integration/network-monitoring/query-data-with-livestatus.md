---
title: Querying Data with Livestatus/NDOUtils
description: "With the monitoring interface, you compare the target documentation in i-doit with the actual status from your network monitoring."
icon:
status:
lang: en
---
# Querying Data with Livestatus/NDOUtils

With the monitoring interface, you compare the target documentation in i-doit with the actual status from your [Network Monitoring](../network-monitoring/index.md). This way, you display live data directly in i-doit and evaluate them.

## Interfaces

The following interfaces are supported:

-   [NDOUtils](https://exchange.nagios.org/directory/Addons/Database-Backends/NDOUtils/details) (or IDOUtils) and
-   [checkmk Livestatus](https://docs.checkmk.com/latest/de/livestatus.html)

for [Nagios](https://www.nagios.org/), [checkmk](https://docs.checkmk.com/latest/de/livestatus.html), [Icinga](https://www.icinga.org/), and compatible forks.

!!! success "Recommendation"
    checkmk Livestatus provides a very high-performance connection to network monitoring. Therefore, it is preferred over NDOUtils.

## Basic Configuration

A running NDOUtils or checkmk Livestatus on your monitoring system is required. Configure access in i-doit under **Administration → Import and Interfaces → Monitoring → Livestatus/NDO**.

!!! note "Livestatus supports TLS starting with i-doit 36"

Livestatus example:

[![querying-data-mls-example](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/2-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/2-nm.png)

## Setting Up Categories

To set up the monitoring category:

1. Assign the [category folder](../../basics/it-documentation-structure.md) **Monitoring** to the desired [object types](../../basics/it-documentation-structure.md) via **[Edit Data Structure](../../administration/management/data-structure/edit-data-structure.md)**.
2. Configure the [identification key](../../basics/unique-references.md) for each [object](../../basics/it-documentation-structure.md) in the **Monitoring** category. You can use the object title, the hostname (with or without domain), or a freely chosen name.
3. If using multiple monitoring instances, select the appropriate instance.

[![querying-data-mls-multi-instance](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/4-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/4-nm.png)

After activating and saving the category, you can query the current status in the **Livestatus** or **NDO** category.

[![querying-data-mls-status](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/5-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/5-nm.png)

Additionally, you can add a column for NDO or Livestatus in the [object list configuration](../../basics/object-list/configure-list-view.md) to display the host status directly in the [object list](../../basics/object-list/index.md).

[![querying-data-mls-objlist](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/6-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/6-nm.png)

## Logbook Entries from Monitoring

With the [i-doit console utility](../cli/index.md), you transfer status messages from monitoring into the [logbook](../../basics/logbook.md) of i-doit. Call the `nagios-ndoutils` command for this -- it automatically transfers all status changes since the last run.
