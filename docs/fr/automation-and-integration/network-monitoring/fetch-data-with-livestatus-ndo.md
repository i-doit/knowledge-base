# Fetch Data with Livestatus / NDOUtils

For a target/actual-comparison between the target documentation in i-doit and the actual status provided by a [Network Monitoring](./index.md) software, a suitable interface can be very helpful. With this interface you can display data from the Network Monitoring in i-doit and evaluate them.

## Interfaces

The interfaces

-   [NDOUtils](https://exchange.nagios.org/directory/Addons/Database-Backends/NDOUtils/details) (or IDOUtils) and
-   [MK Livestatus](https://mathias-kettner.de/checkmk_livestatus.html)

for [Nagios](https://www.nagios.org/), [Check\_MK](http://mathias-kettner.com/check_mk.html), [Icinga](https://www.icinga.org/) and all compatible forks are supported.

!!! success "Recommendation"
    MK Livestatus offers a highly performant connection to the Network Monitoring. Thus it is to be preferred over NDOUtils.

## Basic Configuration

A running NDOUtils or MK Livestatus are required on the monitoring system. The access to one of the interfaces has to be configured in i-doit at **Administration → Interfaces and interfaces → Monitoring → Livestatus/NDO**.

[![Livestatus/NDO](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/1-fdwls.png)](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/1-fdwls.png)

A TCP/UNIX socket or a database configuration with corresponding access permissions has to be set depending on the type of interface.

Example for NDOUtils:

[![NDOUtils](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/2-fdwls.png)](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/2-fdwls.png)

Example for MK Livestatus:

[![Livestatus](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/3-fdwls.png)](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/3-fdwls.png)

## Categories

In order to read out data the [category folder](../../basics/structure-of-the-it-documentation.md) **Monitoring** has to be assigned to the [object types](../../basics/structure-of-the-it-documentation.md) with the **[Edit data structure](../../basics/assignment-of-categories-to-object-types.md)**. The respective [identification key](../../basics/unique-references.md) for the monitoring has to be configured for the [object](../../basics/structure-of-the-it-documentation.md) in the **Monitoring** category. For this, either the object title, the hostname with or without domain name or a freely chosen name can be used. This entry determines the name which is queried in the monitoring.

If multiple monitoring instances are configured, the corresponding instance is chosen.

[![monitoring](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/4-fdwls.png)](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/4-fdwls.png)

Is the category activated and the entry saved, then the current status can be queried in the **Livestatus** or the **NDO** category.

[![Livestatus](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/5-fdwls.png)](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/5-fdwls.png)

A column for the NDO or Livestatus can be additionally chosen in the [object list configuration](../../basics/object-list/configuration-of-the-list-view.md) so that the current host status is also shown in the [object list](../../basics/object-list/index.md).

[![Object list with Livestatus](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/6-fdwls.png)](../../assets/images/en/automation-and-integration/network-monitoring/fetch-data-with-livestatus/6-fdwls.png)

## Log Entries from the Monitoring

Status notifications from the monitoring can be transferred to the i-doit log via the [controller](../cli/index.md). The corresponding handler, **check_mk** or **nagios**, has to be opened and all status changes which happened since the last run are transferred to the log automatically.
