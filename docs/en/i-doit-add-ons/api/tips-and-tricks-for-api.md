# Tips and Tricks for Working with the API

For this article we collected many tips and tricks regarding efficient handling of the [application programming interface (API)](./index.md) of i-doit.

Don't Repeat Yourself (DRY)
---------------------------

You do not have to reinvent the wheel. To control the API you can use the several libraries and clients which are available at present. If you cannot find your favorite programming language, however, you may of course remedy this.

Keep It Simple, Stupid (KISS)
-----------------------------

This is a widely known paradigm from the field of software development. Each script to control the API should only perform one task. One tool, one job - this philosophy borrowed from the Unix world also applies to IT Service Management (ITSM). You should reduce complexity as far as possible, otherwise maintenance of the script will only be impeded.

Use the API Instead of SQL
--------------------------

i-doit saves most of the data in a database management system (MariaDB or MySQL). For an SQL expert it is tempting to access these data directly. However, be careful: If you bypass the i-doit mechanisms explicitly and change data via SQL, you may get into trouble resulting in a corrupted installation. In such a case there is no guarantee on part of the manufacturer. It is better to use the API because only by this means you have the guarantee that, for example, [object relations](../../basics/object-relations.md) or [logbook entries](../../basics/logbook.md), are created correctly.

Use the API Instead of CSV Data Import
--------------------------------------

Maybe your data once were only a provisional arrangement in an Excel spreadsheet but nevertheless you ended up maintaining them over many years. If you want to replace such data with a structured IT documentation, you can use the CSV file import in many cases. However, the CSV import reaches its limits when your spreadsheets not only contain raw data but also intricate constructs. When it comes to dependencies between columns as well as cells which store complex information, it is advisable to implement your own import. The API acts as a fast method with which you can achieve this goal.

Use the API Instead of CSV Data Export
--------------------------------------

With regard to exporting data, you can use the API in a flexible way. The API is also an alternative to the [report manager](../../evaluation/report-manager.md) and the [CSV data export](../../consolidate-data/csv-data-export.md).

Use the API for Data Collection
-------------------------------

There is no question that the automated collection of information with a Network Discovery facilitates the maintenance of the IT documentation tremendously. i-doit already provides interfaces to [JDisc Discovery](../../consolidate-data/jdisc/index.md), [OCS Inventory NG](./../ocs-inventory-ng.md) and others. Should an interface be missing, the API can help.

Use the Two-Factor-Authentication
---------------------------------

Beside the API key, the additional authentication with a user account offers several advantages: With the resulting two-factor authentication you can achieve an increase in security. Furthermore, it facilitates transparency when each script uses its own user account. By this means, you can easily research with the [logbook](../../basics/logbook.md) which script has changed which data in the IT documentation.

Log All API Calls
-----------------

Very useful for [troubleshooting](../../system-administration/troubleshooting/index.md): All API calls can be logged by i-doit. Requests and responses are stored in handy text files under log/ in the installation directory.

Do Not Test in the Productive System
------------------------------------

Use another installation for testing purposes so that the productive data are not put at risk because of a faulty script. Of course it is essential to always carry out a [backup](../../maintenance-and-operation/backup-and-recovery/index.md).

Secure the Communication
------------------------

In many cases the IT documentation contains sensitive data which must not end up in wrong hands. To prevent that API keys, access data and user data are exchanged via the network in clear text, you can use the encoded communication via TLS (HTTPS) with a certificate. Only this way, you can ensure data integrity and avoid data misuse. You can find an example configuration and many tips in the article "[Security and Protection](../../maintenance-and-operation/security-and-protection.md)".

Secure the Script
-----------------

At the moment, the API bypasses the [rights management](../../efficient-documentation/rights-management/index.md) used in the Web GUI. All the more important is that you secure API access and communication to the API (see above). It is also essential to protect the script against unauthorized access.

Log On and Log Off Again
------------------------

When the script carries out several API calls, we recommend an explicit login. With the **idoit.login** method a new session is created which can be reused for all other API calls. At the end, you can terminate the session with the **idoit.logout** method. In this way, you can save numerous sessions which PHP only deletes by and by, sometimes only after weeks.

Use Batch Requests
------------------

The API has got so-called batch requests. With an API call you can send several requests simultaneously. This increases the performance as the network connections and overhead will be reduced to a minimum.

But be careful - if you combine too many requests in a batch request, a weak i-doit installation can bring your system to its knees. This would result in an abortion of the process with a HTTP status 500. In such a case it would be helpful to allocate more memory for the PHP processes.

Automate Exchange of Data
-------------------------

When the script which controls the API of i-doit is running and working, you can carry out an automation. A cronjob is set up quickly and facilitates data maintenance.

Combine API and Events
----------------------

The [events](./../events.md) in i-doit are a good supplement for the API. When you create an object via i-doit or change a category entry, you can execute any script. The most important data of the event are forwarded to the script (Which object was created? Which attributes were updated?). Then the executed script can control the API in order to request further data or to manipulate.

A specific example which shows the use of both API and events is the [provisioning of virtual machines](../../use-cases/vm-provisioning.md).

Publish Your Script
-------------------

When you solved a problem with help of a script to control the API, this is not only helpful for you but possibly can help also other i-doit users. If you want to give something back to the community, you can publish your own script under an open-source license or under a free license at GitHub & Co. We would appreciate a brief notification very much!

Read the Fine Manual (RTFM)
---------------------------

The knowledge base provides all API methods and many examples. If you cannot find what you are looking for, you may have found something we overlooked. Also in this case we would appreciate a short message with your feedback.
