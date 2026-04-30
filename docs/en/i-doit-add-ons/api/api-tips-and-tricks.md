---
title: Tips and tricks for using the API
description: "Here we compile many tips and tricks for efficiently working with the programming interface (API) of i-doit."
icon:
status:
lang: en
---
# Tips and Tricks for Using the API

Here we compile many tips and tricks for efficiently working with the [programming interface (API)](./index.md) of i-doit.

Don't Repeat Yourself (DRY)
---------------------------

There is no need to reinvent the wheel. Several libraries and clients already exist for communicating with the API. Anyone who does not find one for their preferred programming language is of course welcome to change that.

Keep It Simple, Stupid (KISS)
-----------------------------

A widely known paradigm from software development. Every script that communicates with the API should perform only one task. One tool, one job -- this philosophy borrowed from the Unix world also applies to IT Service Management (ITSM). Complexity should be reduced as much as possible. Otherwise, maintaining the script becomes more difficult.

Use the API instead of SQL
---------------------------

i-doit stores nearly all data in a database management system (MariaDB or MySQL). For the SQL expert, it can be tempting to access this data directly. But caution: anyone who deliberately bypasses the mechanisms in i-doit and modifies data via SQL can quickly end up with a corrupt installation. There is no warranty from the manufacturer for this. It is better to use the API, because only through it can you ensure that, for example, [object relationships](../../basics/object-relationships.md) or [logbook entries](../../basics/logbook.md) are created correctly.

Use the API instead of CSV data import
---------------------------------------

If you want to replace your once-provisional but then maintained-for-years Excel spreadsheets with a structured IT documentation, you can in many cases use the CSV data import. However, it reaches its limits when the spreadsheets contain not just raw data but sophisticated constructs. At the latest when there are dependencies between columns and cells storing more than one piece of information, it is advisable to implement your own import. The quickest path here may be the API.

Use the API instead of CSV data export
---------------------------------------

Conversely, the API can be used more flexibly when it comes to data export. The API also provides an alternative to the [Report Manager](../../evaluation/report-manager.md) and the [CSV data export](../../consolidate-data/csv-datenexport.md).

Use the API for collecting data
-----------------------------------------

No question: automated collection of information through network discovery greatly facilitates the maintenance of the IT documentation. i-doit already offers interfaces to [JDisc Discovery](../../_archiv/jdisc-discovery.md), [OCS Inventory NG](../ocs-inventory-ng.md), and more. If an interface is missing, the API can help.

Use two-factor authentication
-----------------------------------------

In addition to the API key, the additional authentication with a user account offers several advantages: the resulting two-factor authentication increases security. Furthermore, it facilitates traceability when each script uses its own user account. This way, you can use the [logbook](../../basics/logbook.md) to research which script changed which data in the IT documentation.

Log all API calls
--------------------

Useful for [troubleshooting](../../administration/troubleshooting/index.md): all API calls can be logged by i-doit. Requests and responses are saved in manageable text files under log/ in the installation directory.

Do not test in production
------------------------------

To avoid endangering productive data with a faulty script, a second installation for testing is recommended. The obligatory [backup](../../maintenance-and-operation/backup-and-restore/index.md) should of course not be forgotten.

Secure the communication
----------------------------

The IT documentation in many cases contains sensitive information that must not fall into the wrong hands. To prevent API keys, credentials, and payload data from being exchanged in plain text over the network, encrypted communication via TLS (HTTPS) with a certificate is recommended. Only this way can it be ensured that data is integral and cannot be misused. A possible configuration and many additional tips can be found in the article "[Security and protection](../../maintenance-and-operation/security-and-protection.md)".

Secure the script
---------------------

The API currently bypasses the [permissions management](../../efficient-documentation/permission-management/index.md) used in the web GUI. It is therefore all the more important to secure access to the API and communication with the API (see above). It is also essential to protect the script against unauthorized access.

Log in and log out
---------------------------

If the script performs multiple API calls, an explicit login is recommended. The method **idoit.login** creates a new session that can be reused for all subsequent API calls. At the end, the session is closed with the method **idoit.logout**. This saves numerous sessions that PHP only gradually deletes, sometimes only after weeks.

Use batch requests
----------------------

The API supports so-called batch requests: with a single API call, multiple requests can be sent. This boosts performance because network connections and additional overhead are reduced to a minimum.

However, caution: combining too many requests into a single batch request can bring a weak i-doit installation to its knees. The result is an abort with an HTTP status 500. In this case, it helps to give the PHP processes more memory.

Automate the data exchange
--------------------------------

Once the script that communicates with the i-doit API is running, it can of course also be executed automatically. A cron job is quickly set up and simplifies data maintenance.

Combine API and events
-------------------------

A good complement to the API are the [Events](../events.md) in i-doit. When an object is created or a category entry is changed via i-doit, any script can be executed. The most important data of the event is passed to it (which object was created? which attributes were updated?). The executed script can then use the API to query or manipulate additional data.

A concrete example that uses both the API and events is the [provisioning of virtual machines](../../use-cases/vm-provisioning.md).

Publish your script
--------------------------

The problem solved by a script that communicates with the API may not only help you but potentially other i-doit users as well. Anyone who wants to give something back to the community can publish their own script under an open-source or free license on GitHub and similar platforms. We would be very happy to hear about it!

Read the Fine Manual (RTFM)
---------------------------

All API methods and many examples are available in the Knowledge Base. If you do not find what you are looking for, you may have encountered a gap. Here, too, we appreciate brief feedback.
