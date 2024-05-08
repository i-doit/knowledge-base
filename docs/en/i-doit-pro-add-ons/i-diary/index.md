# i-diary

[![i-diary](../../assets/images/en/i-doit-pro-add-ons/i-diary/1-i-diary.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/1-i-diary.png)

About i-diary
-------------

i-diary is an application for Microsoft Windows, which works as an add-on for i-doit. With the help of the add-on, system administrators are able to get an overview of the changes that have occurred on the server.

This will be possible by using the application “diary” directly on a Windows server, without having to log in to i-doit and search for the information.

[![search for the information](../../assets/images/en/i-doit-pro-add-ons/i-diary/2-i-diary.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/2-i-diary.png)

Documentation
-------------

*   [Requirements](./requirements.md)
*   [Install](./install.md)
*   [Update](./update.md)
*   [Configuration](./configuration.md)
*   [Basic Usage](./basic-usage.md)
*   [Determine the host](./determine-the-host.md)
*   [Determine the author](./determine-the-author.md)

Copyright & License
-------------------

Copyright (C) 2020 [synetics GmbH](https://i-doit.com/en)

[Requirements](#requirements)
=============================

The following requirements are necessary before installing or using the i-diary.

[For i-Diary Version 1.1](#for-i-diary-version-11)
--------------------------------------------------

*   Show all details about the host
*   Update entries in i-diary
*   Automatic recognition of object types
*   Provide all Changelogs in CHANGELOG file

[For i-Diary Version <= 1.0.1](#for-i-diary-version-101)
--------------------------------------------------------

*   Required i-doit >= 1.14
*   Required i-doit-API add-on >= 1.10.4
*   Executable:
*   Windows 7 or 10
*   .Net framework version >= 4.6.2

[For i-Diary Version 1.0.2](#for-i-diary-version-102)
-----------------------------------------------------

*   Required i-doit >= 1.17
*   Required i-doit API add-on >= 1.12.1
*   Executable:
*   Windows 7 or 10
*   .Net framework version >= 4.8

* * *

[Install](#install)
===================

The add-on is downloaded via the [customer portal](../../system-administration/customer-portal.md)  
The add-on must first be installed via the [Admin Center](../../system-administration/admin-center.md#add-ons).

* * *

[Update](#update)
=================

i-diary is updated like other add-ons via the [Admin Center](../../system-administration/admin-center.md#add-ons).  
The new i-diary.exe must then be replaced by the updated i-diary.exe.  
This can be found in the downloaded ZIP idoit-i_diary-x.x.x.zip in path  
\idoit-i_diary-1.0.1\src\classes\modules\idoit-i_diary\i-diary\

* * *

[Change and save settings via GUI](#change-and-save-settings-via-gui)
---------------------------------------------------------------------

The user has the possibility to create and modify the configuration file via the application.

These are the following cases:

*   If the configuration file is empty or does not exist yet or if it the configuration file empty, the GUI setting is opened automatically when the application is started.

[![Change and save settings via GUI](../../assets/images/en/i-doit-pro-add-ons/i-diary/3-i-diary.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/3-i-diary.png)

[![Change and save settings via GUI](../../assets/images/en/i-doit-pro-add-ons/i-diary/4-i-diary.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/4-i-diary.png)

*   If the user changes something in the GUI setting, the change is immediately checked and saved if it is valid.  
*   When the user does not specify ‘[http://](http://)’, ‘[http://](http://)’ is used for the check and saved.
*   When the user does specify ‘rc/jsonrpc.php’ as a suffix in the URL field, it will be ignored for the check and saved without it.
*   The user can test the connection manually by clicking the button ‘Test the connection’.

* * *  

[Basic Usage](#basic-usage)
===========================

[Creating a new entry](#creating-a-new-entry)
---------------------------------------------

The user can create a new entry, for this purpose the following steps are taken:

*   The author, date, and entry must be filled in and valid.
*   For further entries, the selection of author and date persists until the application is closed.
*   When the user saves an entry, the list of entries is updated.

* * *

[Determine the host](#determine-the-host)
=========================================

There are three ways to select a host:

[Automatically select a host](#automatically-select-a-host)
-----------------------------------------------------------

If no object is stored in the settings, an object should be determined automatically and proposed to the user. The name of the application host is determined for this purpose.

[![Automatically select a host](../../assets/images/en/i-doit-pro-add-ons/i-diary/5-i-diary.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/5-i-diary.png)

[The hostname is searched for as the object title in i-doit](#the-hostname-is-searched-for-as-the-object-title-in-i-doit)
-------------------------------------------------------------------------------------------------------------------------

*   If exactly one object is found, its ID is saved.
*   If several objects with the same name are found, the user can choose from these objects.
*   The user can cancel the selection to manually select the host.

[Set host manually](#set-host-manually)
---------------------------------------

*   The user sets the Object ID in the configuration file. After restarting the application the setting takes effect.

[![Set host manually](../../assets/images/en/i-doit-pro-add-ons/i-diary/6-i-diary.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/6-i-diary.png)

*   The user selects an object title from a searchable list. Only objects whose object types are assigned to the category “Diary” are displayed. The list is divided into the respective object types. The translated title of the respective object type is displayed as the list heading. If the user selects an object from the list, its ID is saved.
*   The user types the Object ID into a search mask. The application gives feedback whether the object was found and saves its ID.
*   The user enters the Object Title in a search mask. The application gives feedback if the object was found and saves its ID.
*   If several objects with the same name are found, the user can choose from this list.

[Reuse host](#reuse-host)
-------------------------

When the application is started, the configuration file is read if the configuration file exists.

If an object ID is saved, the application gets the respective title to display it.

* * *

There are three ways to select an author:

[Automatically discover an author](#automatically-discover-an-author)
---------------------------------------------------------------------

If no author has been saved and the user starts the application, the application tries to recognize the author automatically.

This will be done through the following process:

When a “user name” is specified in the settings, the application will check whether the person matches a person object in i-doit. If this is the case the ID will be saved.

[![Automatically discover an author](../../assets/images/en/i-doit-pro-add-ons/i-diary/7-i-diary.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/7-i-diary.png)

[Set author manually](#set-author-manually)
-------------------------------------------

The user can manually select an author for a new entry with the following options:

*   The user can write the object ID of the author in the configuration file. This setting takes effect when the application is restarted.

[![Set author manually](../../assets/images/en/i-doit-pro-add-ons/i-diary/8-i-diary.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/8-i-diary.png)

*   The user can select a person from a searchable list. This list is divided into “Contacts” (object relations from the category “Contact assignment”) and “Persons” (objects of the type “Persons”).

The titles of the objects are displayed in the list. When the user selects an object, its ID is saved.

[Reuse author](#reuse-author)
-----------------------------

When the user starts the application, the already saved author is preselected for a new entry.

The application checks whether the object ID in the configuration file is valid, based on the ID, the application retrieves the object title to display it.

* * *

[FAQ](#faq)
===========

Known error messages and their meaning:

| Error Message | Possible cause |
| --- | --- |
| The HTTP response status code does not indicate a successful service response | URL incorrect |
| i-doit system error: Unable to retrieve mandator | API Key wrong |
| The service response is invalid | Wrong username or password. API add-on version is too old |
| Fehler beim Senden der Anforderung/Error while sending the request | Host address incorrect |
| The HTTP response has invalid Content-Type header value | API add-on is not installed |

* * *

[Changelog](#changelog)
=======================

| Version | Release | Changelog |
| --- | --- | --- |
| 1.3 | 08.05.2024 | Used "idoit_i_diary" as new identifier<br> Objects are not loaded after second start<br> Starting i-diary needs a lot of time<br> i-diary does not recognize diary category<br>Author is not loaded |
| 1.2 | 23.01.2023 | Primary IP address is shown empty  <br>Clicking on the info icon crashes i-diary  <br>Contact assignment does not show the Primary contact |
| 1.0.2 | 09.11.2021 | Make connection using HTTPS  <br>Configuration of a proxy server |
| 1.0.1 | 06.11.2020 | Change the position of the buttons in the settings window  <br>Change the title of the settings window  <br>Log in without authentication  <br>Writing a log file to check the connection  <br>The comboboxes should display more lines |
| 1.0.0 | 21.09.2020 | This is the first release of i-diary |
