There are three ways to select an author:

Automatically discover an author
--------------------------------

If no author has been saved and the user starts the application, the application tries to recognize the author automatically.

This will be done through the following process:

When a “user name” is specified in the settings, the application will check whether the person matches a person object in i-doit. If this is the case the ID will be saved.

![](/download/attachments/97288326/setting.PNG?version=1&modificationDate=1600688211825&api=v2&effects=drop-shadow)

Set author manually
-------------------

The user can manually select an author for a new entry with the following options:

*   The user can write the object ID of the author in the configuration file. This setting takes effect when the application is restarted.

![](/download/attachments/97288326/config.PNG?version=1&modificationDate=1600688211823&api=v2&effects=drop-shadow)

*   The user can select a person from a searchable list. This list is divided into “Contacts” (object relations from the category “Contact assignment”) and “Persons” (objects of the type “Persons”).

The titles of the objects are displayed in the list. When the user selects an object, its ID is saved.

Reuse author
------------

When the user starts the application, the already saved author is preselected for a new entry.

The application checks whether the object ID in the configuration file is valid, based on the ID, the application retrieves the object title to display it.