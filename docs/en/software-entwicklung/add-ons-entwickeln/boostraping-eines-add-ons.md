---
title: "Bootstrapping an Add-on (init.php)"
description: "An init.php file must be located at the top level of the add-on directory."
icon:
status:
lang: en
---
# Bootstrapping an Add-on (init.php)

An init.php file must be located at the top level of the add-on directory. It is automatically included by the i-doit system to register the add-on in the core. Developers should use the init.php to make add-on-specific preparations. This includes, among other things, defining constants or registering autoloaders and routes. Callbacks can also be registered here via the "Signal-Slot" component.

Furthermore, report views and dashboard widgets can be registered within the init.php so that i-doit can access them at the appropriate places.

The init.php must contain as little logic as possible so that performance does not suffer. The init.php files of all add-ons are executed on every request!

## Checking Whether the Add-on Is Active

The first code instruction in the init.php must check whether the add-on is active. Only then may additional code be executed!

The required code looks as follows:

    if (isys_module_manager::instance()->is_active('example'))
    {
        // Here, constants, autoloaders, and events are defined or registered.
    }

**All additional instructions may only take place within this check!**

## PSR-4 and Legacy Autoloader

### PSR-4

For PHP classes created according to PSR-4, i-doit offers a simple way to implement the add-on namespace in the autoloader:

    // Adding the PSR-4 autoloader for files in the new structure (underneath "<add-on>/src").
    \idoit\Psr4AutoloaderClass::factory()->addNamespace('idoit\Module\Example', __DIR__ . '/src/');

### Legacy Code

For PHP classes in legacy format (such as authorization system or category classes), the corresponding legacy autoloader must be used. Typically, this is located directly in the add-on directory and should look approximately like this:

    class isys_module_example_autoload extends isys_module_manager_autoload
    {
        /**
        * Add-on specific legacy autoloader.
        *
        * @param   string $className
        *
        * @return  boolean
        */
        public static function init($className)
        {
            $base = '/src/classes/modules/example/';
            $classList = [
                'isys_example_example' => 'example/isys_example_example.class.php',
                // ...
            ];

            if (isset($classList[$className]) && parent::include_file($base . $classList[$className])) {
                isys_caching::factory('autoload')->set($className, $base . $classList[$className]);

                return true;
            }

            return false;
        }
    }

The legacy autoloader is registered in the init.php as follows:

    if (file_exists(__DIR__ . '/isys_module_example_autoload.class.php') && (include_once __DIR__ . '/isys_module_example_autoload.class.php'))
    {
        spl_autoload_register('isys_module_example_autoload::init');
    }

## Extending Settings for [tenant-name]

The displayed settings for [tenant-name] under **Administration > [tenant-name] Administration > Settings for [tenant-name]** can be extended via an add-on. Further information on this can be found in the article [Extending System Settings](systemeinstellungen-erweitern.md).
