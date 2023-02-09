**Contents**

*   1[Interfaces](#FetchDatawithLivestatus/NDOUtils-Interfaces)
*   2[Basic Configuration](#FetchDatawithLivestatus/NDOUtils-BasicConfiguration)
*   3[Categories](#FetchDatawithLivestatus/NDOUtils-Categories)
*   4[Log Entries from the Monitoring](#FetchDatawithLivestatus/NDOUtils-LogEntriesfromtheMonitoring)

  

For a target/actual-comparison between the target documentation in i-doit and the actual status provided by a [Network Monitoring](/display/en/Network+Monitoring) software, a suitable interface can be very helpful. With this interface you can display data from the Network Monitoring in i-doit and evaluate them.  

Interfaces
----------

The interfaces

*   [NDOUtils](https://exchange.nagios.org/directory/Addons/Database-Backends/NDOUtils/details) (or IDOUtils) and
    

*   [MK Livestatus](https://mathias-kettner.de/checkmk_livestatus.html)
    

for [Nagios](https://www.nagios.org/), [Check\_MK](http://mathias-kettner.com/check_mk.html), [Icinga](https://www.icinga.org/) and all compatible forks are supported.

Recommendation

MK Livestatus offers a highly performant connection to the Network Monitoring. Thus it is to be preferred over NDOUtils.

Basic Configuration
-------------------

A running NDOUtils or MK Livestatus are required on the monitoring system. The access to one of the interfaces has to be configurated in i-doit at `**Administration → Interfaces → Monitoring → Livestatus/NDO**`.

![](/download/attachments/66355714/network1.png?version=1&modificationDate=1507892544364&api=v2&effects=drop-shadow)

A TCP/UNIX socket or a database configuration with corresponding access permissions has to be set depending on the type of interface.

Example for NDOUtils:

![](/download/attachments/66355714/network2.png?version=1&modificationDate=1507892544351&api=v2&effects=drop-shadow)

Example for MK Livestatus:

![](/download/attachments/66355714/network3.png?version=1&modificationDate=1507892544336&api=v2&effects=drop-shadow)

Categories
----------

In order to read out data the [category folder](../../basics/structure-of-the-it-documentation.md) `**Monitoring**` has to be assigned to the [object types](../../basics/structure-of-the-it-documentation.md) with the **`[Quick Configuration Wizard](/display/en/Assignment+of+Categories+to+Object+Types)`**. The respective [identification key](/display/en/Unique+References) for the monitoring has to be configured for the [object](../../basics/structure-of-the-it-documentation.md) in the `**Monitoring**` category. For this, either the object title, the hostname with or without domain name or a freely chosen name can be used. This entry determines the name which is queried in the monitoring.

If multiple monitoring instances are configured, the corresponding instance is chosen.

![](/download/attachments/66355714/network4.png?version=1&modificationDate=1507892544282&api=v2&effects=drop-shadow)

Is the category activated and the entry saved, then the current status can be queried in the **`Livestatus`** or the **`NDO`** category.

****![](/download/attachments/66355714/en_category_monitoring_livestatus.png?version=1&modificationDate=1522312787759&api=v2&effects=drop-shadow)  
****

A column for the NDO or Livestatus can be additionally chosen in the [object list configuration](/display/en/Configuration+of+the+List+View) so that the current host status is also shown in the [object list](/display/en/Object+List).

****![Object list with Livestatus](/download/attachments/66355714/en_object_list_with_livestatus.png?version=1&modificationDate=1522312825469&api=v2&effects=drop-shadow "Object list with Livestatus")  
****

Log Entries from the Monitoring
-------------------------------

Status notifications from the monitoring can be transferred to the i-doit log via the [controller](/display/en/CLI). The corresponding handler, `**check_mk**` or `**nagios**`, has to be opened and all status changes which happened since the last run are transferred to the log automatically.

![CLI](https://lh5.googleusercontent.com/433Qx7ROTJYwL2BqB4nnAdZ_3URB3tOH7Q7-Fc7jIXVAzWdp-abR0Pc3wWgaHWTP47pRSPbDhSoWrN5HVVHpEscspsXpxDjBMSzLqiuRgnCUMuzxJwf-WrkbaRe8cdMqpFeloxrd)