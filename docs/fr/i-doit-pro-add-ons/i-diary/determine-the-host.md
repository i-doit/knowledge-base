# i-diary: Determine the host

There are three ways to select a host:

Automatically discover a host
-----------------------------

If no object is stored in the settings, an object should be determined automatically and proposed to the user. The name of the application host is determined for this purpose.

[![Automatically discover a host](../../assets/images/en/i-doit-pro-add-ons/i-diary/determine-the-host/1-dth.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/determine-the-host/1-dth.png)

The hostname is searched for as the object title in i-doit
----------------------------------------------------------

*   If exactly one object is found, its ID is saved.
*   If several objects with the same name are found, the user can choose from these objects.
*   The user can cancel the selection to manually select the host.
    

Set host manually
-----------------

*   The user sets the Object ID in the configuration file. After restarting the application the setting takes effect.

[![Set host manually](../../assets/images/en/i-doit-pro-add-ons/i-diary/determine-the-host/1-dth.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/determine-the-host/1-dth.png)

*   The user selects an object title from a searchable list. Only objects whose object types are assigned to the category “Diary” are displayed. The list is divided into the respective object types. The translated title of the respective object type is displayed as the list heading. If the user selects an object from the list, its ID is saved.
*   The user types the Object ID into a search mask. The application gives feedback whether the object was found and saves its ID.
*   The user enters the Object Title in a search mask. The application gives feedback if the object was found and saves its ID.
*   If several objects with the same name are found, the user can choose from this list.
    

Reuse host
----------

When the application is started, the configuration file is read if the configuration file exists.

If an object ID is saved, the application gets the respective title to display it.