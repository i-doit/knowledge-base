---
title: "Installing, Updating, and Activating Add-ons"
description: "For an add-on to be installed, updated, and activated in i-doit, a specific directory hierarchy must be followed."
icon:
status:
lang: en
---
# Installing, Updating, and Activating Add-ons

For an add-on to be installed, updated, and activated in i-doit, a specific directory hierarchy must be followed. Within the add-on directory, files such as init.php are expected to ensure a consistent program flow.

## Installing an Add-on

Add-ons must be provided as a ZIP archive in order to be installed by i-doit. The ZIP file is uploaded via the Admin Center, which triggers the internal installation routines. The directory structure within the archive must follow a predefined pattern. Here is an example using the "Example" add-on (identifier "example"):

[![addonsaa-istallieren](../../assets/images/de/software-entwicklung/add-ons-entwickeln/installieren-aktualisieren/1-ia.png)](../../assets/images/de/software-entwicklung/add-ons-entwickeln/installieren-aktualisieren/1-ia.png)

The archive must contain the package.json file at the top level (alongside src) so that i-doit can find it. This file contains various important metadata that is needed during installation. Additional information can be found in the article [Add-on Metadata (package.json)](add-on-metadata.md).

The file is automatically moved to the add-on directory after successful installation.

## Updating an Add-on

Unlike the i-doit core, there is no difference between "installation" and "update" packages for add-ons. The decision between "What happens during installation?" and "What happens during update?" is explained in the section "Installing and Uninstalling".

## Extending the System and Tenant Databases

Frequently, an add-on extends the i-doit tenant database with its own tables and content. For this purpose, an add-on can include the files update_data.xml and update_sys.xml, which must be located in the add-on directory underneath the "install" folder. Under defined conditions, SQL queries are executed that can be used both for installing and updating database tables and content. The file update_data.xml is used for the selected tenant databases, while update_sys.xml is applied exclusively to the system database.

    <?xml version="1.0" encoding="UTF-8"?>
    <!DOCTYPE isys [
        <!ELEMENT isys (info|queries)*>
        <!ELEMENT info (title|version|requirement|directory|revision|release)*>
        <!ELEMENT title (#PCDATA)>
        <!ELEMENT version (#PCDATA)>
        <!ELEMENT requirement (revision|version)*>
        <!ELEMENT revision (#PCDATA)>
        <!ELEMENT directory (#PCDATA)>
        <!ELEMENT release (#PCDATA)>
        <!ELEMENT queries (query)*>
        <!ELEMENT query (id|title|check|errmsg|sql)*>
        <!ELEMENT id (#PCDATA)>
        <!ELEMENT check (#PCDATA)>
        <!ATTLIST check ident CDATA #REQUIRED>
        <!ELEMENT errmsg (#PCDATA)>
        <!ELEMENT sql (exec)*>
        <!ELEMENT exec (#PCDATA)>
        <!ATTLIST exec ident CDATA #REQUIRED>
        ]>
    <isys>
        <info>
            <title>Example Add-on</title>
            <version>1.0</version>
            <release>2018-08-01</release>
        </info>
        <queries>

            <!-- Queries and conditions go here -->

        </queries>
    </isys>

A query element must always include the following elements:

*   id: A numeric counter, starting at 1
*   title: A descriptive title that explains which query is currently being executed.
*   check: The required check + condition
*   errmsg: An optional text that is displayed in case of an error.
*   sql: The SQL query to be executed, taking the check result into account

Such queries can look as follows:

    <query>
        <id>1</id>
        <title>Creating table "isys_example_table"</title>
        <check ident="C_CREATE_TABLE">isys_example_table</check>
        <errmsg>The example table could not be created!</errmsg>
        <sql>
            <exec ident="true">

                <!-- Nothing to do, the table exists -->

            </exec>
            <exec ident="false">
                CREATE TABLE isys_example_table ...;
            </exec>
        </sql>
    </query>

    <query>
        <id>2</id>
        <title>Setting title of object #1 to "Root-Location"</title>
        <check ident="C_VALUE_EXISTS">
            SELECT isys_obj__id FROM isys_obj WHERE isys_obj__id = 1;
        </check>
        <errmsg>The example table could not be created!</errmsg>
        <sql>
            <exec ident="true">
                <!-- Object with ID 1 exists -->
                UPDATE isys_obj
                SET isys_obj__title = 'Root-Location'
                WHERE isys_obj__id = 1;
            </exec>
            <exec ident="false">
                <!-- Object with ID 1 could not be found -->
                INSERT INTO isys_obj
                SET isys_obj__id = 1,
                isys_obj__title = 'Root-Location';
            </exec>
        </sql>
    </query>

It is possible to store an SQL query for each outcome of the check (true / false).

The following checks and conditions are available:

*   C_CREATE_TABLE (including aliases "C_UPDATE", "C_INSERT_INTO", "C_ALTER_TABLE", "C_TABLE_EXISTS", and "C_DROP_TABLE")
    Condition: Table name
    Checks whether the specified table exists.
*   C_VALUE_EXISTS
    Condition: SQL query
    Executes the specified query and checks whether there is a result (found rows > 0).
*   C_ADD_FIELD
    Condition: Table and column in the following format: <table>,<column>
    Checks whether the specified field exists in the table.

## Activating and Deactivating

For an add-on to be activated and deactivated in the Admin Center, the isys_module_example class must implement the idoit\AddOn\ActivatableInterface interface. This requires three methods that are executed during the corresponding actions:

    /**
    * Checks if a module is active.
    *
    * @return integer|bool
    */
    public static function isActive()
    {
        return isys_module_manager::instance()->is_active('example');
    }

    /**
    * Method that is called after clicking "activate" in Admin-Center for specific mandator
    *
    * @param isys_component_database $mandatorDb
    *
    * @return boolean
    */
    public static function activate($mandatorDb)
    {
        try {
            // Custom logic...
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
    * Method that is called after clicking "deactivate" in Admin-Center for specific mandator
    *
    * @param isys_component_database $mandatorDb
    *
    * @return boolean
    */
    public static function deactivate($mandatorDb)
    {
        try {
            // Custom logic...
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

If the methods are not needed, they can simply return true. Typically, these methods are used to set permissions or install dashboard widgets.

## Installing and Uninstalling

Similar to activating and deactivating an add-on, there is also a corresponding interface for installing and uninstalling: idoit\AddOn\InstallableInterface. This also requires three methods that must be implemented:

    /**
    * Checks if a add-on is installed.
    *
    * @return integer|bool
    */
    public static function isInstalled()
    {
        return isys_module_manager::instance()->is_installed('example');
    }

    /**
    * Basic installation process for all mandators.
    *
    * @param  isys_component_database $tenantDatabase
    * @param  isys_component_database $systemDatabase
    * @param  integer                 $moduleId
    * @param  string                  $type
    * @param  integer                 $tenantId
    *
    * @since  i-doit 1.12
    * @return void
    */
    public static function install($tenantDatabase, $systemDatabase, $moduleId, $type, $tenantId)
    {
        if ($type === 'install') {
            // Logic for installation.
    }

        if ($type === 'update') {
            // Logic for update.
        }
    }

    /**
    * Uninstall add-on for all mandators
    *
    * @return void
    */
    public static function uninstall()
    {
        // Custom logic...
    }

The install and uninstall methods can be used to perform complex tasks that go beyond simple SQL queries.

!!! info "Deprecated installation logic"

    In older i-doit versions (< 1.12), the "install" method is not yet supported -- a separate logic must be applied in those cases.
