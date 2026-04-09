---
title: "Add-on Metadata"
description: "The package.json file can be roughly compared to a composer.json."
icon:
status:
lang: en
---
# Add-on Metadata

The package.json file can be roughly compared to a composer.json. The content of this file provides information about the add-on's contents, version, and dependencies.

Here we find, among other things, the add-on name, identifier, author, description, and version. The content of the file can look as follows:

    {
        "title": "Example add-on",
        "name": "LC__MODULE__EXAMPLE",
        "identifier": "example",
        "author": "synetics GmbH",
        "version": "1.0",
        "description": "Example add-on for i-doit",
        "type": "addon",
        "icon": "images/icons/silk/information.png",
        "files": [
            "init.php",
            "isys_module_example.class.php",
            "isys_module_example_autoload.class.php",
            "package.json"
        ],
        "sql-tables": [],
        "requirements": {
        "core": ">= 1.11"
        },
        "dependencies": {
            "php": [
                "json",
                "mysqli"
            ]
        }
    }

## Title

The string stored here is displayed in the Admin Center. It is not necessary to use a language constant here.

## Name

The stored language constant is used as the name of the add-on when it is displayed in i-doit (for example, in the Extras menu or the authorization system).

## Identifier

The identifier is one of the most important pieces of information in the package.json, as it is needed for a large amount of internal logic and for the identification of the add-on. Detailed information can be found in the article [Developing Add-ons](index.md).

## Author

The information stored here is displayed in the Admin Center.

## Version

The version stored here is displayed in the Admin Center. No further logic is associated with it.

## Description

An optional description of the add-on can be specified here. Typically, this description is written in English and is limited to 255 characters.

## Type

The value "addon" must be specified as the "type". Other types may only be used by core components.

## Icon

A path for an (optional) icon can be specified here. It is displayed, for example, in the Extras menu. Typically, such an icon has dimensions of 16x16 pixels. While the format is not prescribed, we recommend using PNG. The path must be specified relative to the i-doit root directory.

## Files

The files array is used when uninstalling an add-on. After the uninstall method is called, all files and directories listed here are permanently deleted. The file paths must be specified relative to the add-on directory.

## Sql-Tables

The SQL tables array is used when uninstalling an add-on. After the uninstall method is called, all database tables listed here are permanently deleted.

## Requirements

Currently (as of i-doit 1.11.x), it is only possible to specify the i-doit version as a requirement, for example:

    "requirements": {
        "core": ">= 1.11"
    }

## Dependencies

Currently (as of 1.11.x), it is only possible to define PHP extensions as dependencies, for example:

    "dependencies": {
        "php": ["spl", "json", "mysqli"]
    }
