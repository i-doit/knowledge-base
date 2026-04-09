---
title: "Developing Add-ons"
description: "Add-ons are standalone application components that extend the functionality of i-doit."
icon:
status:
lang: en
---
# Developing Add-ons

Add-ons are standalone application components that extend the functionality of i-doit. They only run within i-doit and must have a specific architecture to integrate into the system.

In this article, you will learn which i-doit components you can extend via an add-on and what is required to do so.

To develop an add-on, you need:

1. Add-on identifier (in this article we use "synetics_example")
2. Minimal set of PHP files
3. package.json

## The Add-on Identifier

An add-on is identified by a unique string. It must be short, concise, and lowercase. i-doit GmbH verifies uniqueness before publication. The following rules apply:

*   Prefix with company name or name (ideally up to 8 characters)
*   Unique
*   Lowercase
*   No special characters (only a-z, 0-9, and underscores)
*   Maximum 32 characters
*   Must start with a letter

Valid examples would be, for instance, acme_api, synetics_reporting, or other abbreviations like lfischer_gameit.

Invalid identifiers include: api (already exists) and my-Add-on (hyphens, umlauts, and uppercase letters are not allowed).

The add-on identifier can also be described / tested with the following regular expression: [a-z][a-z0-9_]{0,7}_[a-z0-9_]{1,23}

The identifier appears in many places throughout the add-on source code:

*   The add-on directory must be named identically.
*   The add-on class (code and filename) contains the identifier: isys_module_synetics_example
*   The namespace must contain the identifier for the PSR-4 autoloader to work: \idoit\Module\SyneticsExample
*   The autoloader for legacy-structure classes (code and filename) must contain the identifier: isys_module_synetics_example_autoload

## Minimal Set of PHP Files

To develop a functional add-on, several PHP files are required:

1. init.php
2. isys_module_synetics_example.class.php
3. isys_module_synetics_example_autoload.class.php (optional, only required if PHP classes in the legacy structure exist)
4. Language files (optional)

### Initializing the Add-on with init.php

The init.php is the file that is called by the i-doit system to initialize an add-on. Typically, it is used to define or register constants, autoloaders, and events. Further information can be found on the page [Bootstrapping an Add-on (init.php)](./bootstrapping-an-add-on.md).

### Base Add-on Class isys_module_synetics_example.class.php

The base add-on class contains, among other things, definitions for the display of the add-on. This is controlled via the constant DISPLAY_IN_MAIN_MENU. If this is set to the boolean value "true", the add-on is displayed in the Extras menu. Additionally, there is the constant MAIN_MENU_REWRITE_LINK, which can be used to define the type of URL:

If MAIN_MENU_REWRITE_LINK is set to false, the URL will look approximately like: <https://i-doit.int/?moduleID=><module-id\>

If MAIN_MENU_REWRITE_LINK is set to true, the URL will look approximately like: <https://i-doit.int/synetics_example>

In addition to init.php, the public method "init" must be defined:

    public function init(isys_module_request $p_req)
    {
        return $this;
    }

This method can be used to prepare class-internal data. As a rule, it is no longer used because add-ons use an MVC architecture that does not rely on the base class.

If the add-on should bring its own permissions for the i-doit authorization system, the base class must implement the idoit\AddOn\AuthableInterface interface and configure the public static method getAuth accordingly:

    public static function getAuth()
    {
        return isys_auth_synetics_example::instance();
    }

More on this topic in the article [Using User Rights in Add-ons](./using-permissions-in-add-ons.md).

### The package.json File

Like other tools, we define certain attributes or metadata of an add-on in a special file -- the package.json. The structure and content of this file is described in detail in the article [Add-on Metadata (package.json)](./add-on-metadata.md).

## Custom System Settings

An add-on can use and extend the settings for [tenant-name] under **Administration > Settings for [tenant-name]**. Further information about data types, setting types, etc. can be found in the article [Extending System Settings](./extend-system-settings.md).
