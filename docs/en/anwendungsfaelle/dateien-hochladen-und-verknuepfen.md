---
title: Uploading and Linking Files
description: "A comprehensive IT documentation often includes documents in the form of files."
icon:
status:
lang: en
---
# Uploading and Linking Files

A comprehensive IT documentation often includes documents in the form of files. Whether operating manuals, emergency plans, contracts, installation protocols, or drivers: important files should be linked to [objects](../grundlagen/struktur-it-dokumentation.md) in i-doit.

Files Are Objects
--------------------

Every uploaded file in i-doit is automatically an object. This has the advantage that you can assign any [categories and attributes](../grundlagen/struktur-it-dokumentation.md) to these files and [link](../grundlagen/objekt-beziehungen.md) them to any other objects. i-doit already comes with suitable [object types](../grundlagen/struktur-it-dokumentation.md) in the standard installation:

*   **Files** and
*   **Emergency Plan**.

These can be extended with additional [custom object types](../grundlagen/benutzerdefinede-objekttypen.md), for example for operating manuals.

The actual functionality (uploading, linking, etc.) can be found in the [category folder](../grundlagen/struktur-it-dokumentation.md) **Files**. This consists of the following subcategories:

*   **Current File**: Information about the uploaded file, download option, and file categorization
*   **File Versions**: Any number of versions can exist for each file. Re-uploading the file creates a new version.
*   **Assigned Objects**: Which objects is this file linked to? (view only, no functionality)

The **Files** category folder belongs to the [specific categories](../grundlagen/struktur-it-dokumentation.md) and can be assigned to any object type via the [object type configuration](../grundlagen/benutzerdefinede-objekttypen.md).

[![Current file](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/1-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/1-dhuv.png)

[![File versions](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/2-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/2-dhuv.png)

[![File versions](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/3-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/3-dhuv.png)

[![Assigned objects](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/4-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/4-dhuv.png)

Several [reverse categories](../grundlagen/struktur-it-dokumentation.md) handle the linking between file objects and other objects:

*   File assignment
*   Manual assignment
*   Emergency plan assignment

These [global categories](../grundlagen/struktur-it-dokumentation.md) can be [assigned to any object type](../grundlagen/benutzerdefinede-objekttypen.md) and serve similar functions, namely assigning files.

[![Global categories](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/5-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/5-dhuv.png)

Uploading Files and Linking Them to Objects
---------------------------------------------

A new file can be uploaded in two ways: Either you create a new object of type **Files** and then upload the file in the **File Versions** category. Or you go through the object that should be linked to the file: Here you use the **File assignment** category.

For files uploaded via the File assignment category, i-doit automatically creates an object for each one. This saves a few clicks.

The **File assignment (Object)** attribute is quite flexible:

*   A file can be dragged and dropped from the desktop etc. into the attribute field.
*   Already uploaded files can be assigned via auto-completion.
*   Via the magnifying glass icon, the **File Browser** opens, through which the file is uploaded and selected.

[![File assignment](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/6-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/6-dhuv.png)

The **File Browser** lists all available files. These can be classified via the **Category** attribute to provide a better overview.

[![File browser](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/7-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/7-dhuv.png)

Linking Files in Custom Categories
----------------------------------------------------

To link a file to an object, you are not limited to the standard categories of i-doit. In a [custom category](../grundlagen/benutzerdefinede-kategorien.md), you can add attributes with the **File Browser** field type.

!!! success "Documents Module"

    If you want to generate operating manuals, emergency plans, and more directly from the IT documentation, you should consider using the [Documents module](../i-doit-add-ons/documents/index.md) for i-doit. This allows you to enrich extensive text documents with [attributes](../grundlagen/struktur-it-dokumentation.md), images, and [reports](../auswertungen/report-manager.md) from i-doit.
