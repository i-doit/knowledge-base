---
title: "File and Directory Structure of an Add-on"
description: "As described under Installing, Updating, and Activating Add-ons, an add-on or its code must reside in its own directory."
icon:
status:
lang: en
---
# File and Directory Structure of an Add-on

As described under [Installing, Updating, and Activating Add-ons](add-ons-installieren-aktualisieren-und-entwickeln.md), an add-on or its code must reside in its own directory under <i-doit>/src/classes/modules/<identifier>. Theoretically, any structure can be created within this directory. We have established the following structure within the i-doit team and recommend using it for your own development as well:

[![dateiundstruktur-nutzen](../../assets/images/de/software-entwicklung/add-ons-entwickeln/datei-und-ordnerstruktur/1-ia.png)](../../assets/images/de/software-entwicklung/add-ons-entwickeln/datei-und-ordnerstruktur/1-ia.png)

Fundamentally, PSR-4 compliant PHP code is placed underneath "src". Legacy classes are typically stored in their own directories -- please also note the chapter on autoloading:

*   **api/**
    Legacy: This is where the model classes for the API are located. See also [Extending the API](api-erweitern.md).

*   **assets/**
    The "assets" directory is used for JavaScript, CSS, and image files. The subdirectories could accordingly be named "js", "css", and "img".

*   **auth/**
    Legacy: Used for all authorization system code. See also [Using User Rights in Add-ons](benutzerrechte-im-add-on-nutzen.md).

*   **example/**
    Legacy: Serves as an example for custom code in "legacy" format.

*   **install/**
    This is where files used for the installation and/or update of an add-on are located (update_data.xml, update_sys.xml, and update_files.xml). See also [Installing, Updating, and Activating Add-ons](add-ons-installieren-aktualisieren-und-entwickeln.md).

*   **lang/**
    This directory contains translation files (de.inc.php and en.inc.php) for German and English.

*   **src/**
    This is the directory for code in PSR-4 format. The add-on namespace (here: idoit\Module\Example) should be mapped to this directory. See also [Routing and MVC](routing-und-mvc.md).

*   **templates/**
    Typically, this directory is used for Smarty templates.

*   **vendor/**
    An optional directory used by Composer. An add-on can include any Composer packages. However, care must be taken not to create package conflicts with the i-doit core!

*   **CHANGELOG**
    Optional changelog that should list the changes of all add-on versions.

*   **composer.json**
    A file created by Composer that defines which third-party packages should be installed. Further information can be found at [getcomposer.org](https://getcomposer.org/). This file is only relevant for developers and is unnecessary in the final add-on package.

*   **composer.lock**
    A file created by Composer that contains the currently installed package state. This file should be stored in the repository! Like package.json, this file is only relevant for developers and unnecessary in the final package.

*   **init.php**
    The "init.php" file is required to make various preparations for the add-on; for example, autoloaders are registered and constants are defined here. See also [Bootstrapping an Add-on (init.php)](boostraping-eines-add-ons.md).

*   **isys_module_example_autoload.class.php**
    This autoloader class is required as soon as code in "legacy" format is used (e.g., API, authorization system, categories, ...). See also [Bootstrapping an Add-on (init.php)](boostraping-eines-add-ons.md).

*   **isys_module_example.class.php**
    This is the "base" class for add-ons. It is mandatory!

*   **Makefile**
    This is a simple "Make" script for creating add-on ZIP packages.
    Internally, the correct structure is prepared, developer files (e.g., Makefile, package.json, etc.) are removed, and the ZIP is created taking the VERSION into account.

*   **package.json**
    The "package.json" file is required and contains important metadata about the add-on -- see also [Add-on Metadata (package.json)](metadaten-eines-add-ons.md).

*   **README.md**
    A "README.md" should provide general information about the add-on in Markdown format. Advanced topics can also be covered. It would be useful, for example, to document development, deployment, and build-specific information here as well.

*   **VERSION**
    A simple file without an extension that only contains the current version of the add-on. This file is optional but is used in the **Makefile** script.
