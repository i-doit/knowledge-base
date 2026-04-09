---
title: Extending System Settings
description: "i-doit's system settings are a hierarchical system of cascading configuration parameters."
icon:
status:
lang: en
---

# Extending System Settings

i-doit's system settings are a hierarchical system of cascading configuration parameters.
This hierarchy is composed of a total of three different levels.
All available settings parameters can exist within these levels and are read as needed.

The first level represents the user-specific level.
At this level, parameters directly set by the user are stored.
If a parameter is requested that has not been set by the user, the *tenant-wide* level provides a default value.
Depending on the parameter, it may not make sense to provide a tenant-specific setting.
Therefore, the system-wide settings pool is consulted as a last resort.

This hierarchical system ensures
that i-doit remains highly customizable while still offering an easy start with the best possible default settings.

i-doit's system settings can be extended by add-ons with their own configurations.
This also automatically extends the form in the GUI under
**Administration > {tenant} Administration > Settings for {tenant}**.
If individual settings should not be displayed in the GUI, they do not need to be registered
but merely *used* in code.
Such implicit settings can only be configured via the expert settings.

System settings can be defined for three layers: System, Tenant, or User.

The underlying code is nearly identical and differs only in the class used:

* System-wide settings: `isys_settings`
* Tenant-wide settings: `isys_tenantsettings`
* Settings per user: `isys_usersettings`

## Reading Settings

To read system-, tenant-, or user-specific settings, the following code can be used:

```php
// System setting:
$value = isys_settings::get('example.key', 'Default value');

// Tenant setting:
$value = isys_tenantsettings::get('example.key', 'Default value');

// User setting:
$value = isys_usersettings::get('example.key', 'Default value');
```

The classes are also available in the Dependency Injection Container:

```php
// System setting:
$value = isys_application::instance()->container->get('settingsSystem')->get('example.key', 'Default value');

// Tenant setting:
$value = isys_application::instance()->container->get('settingsTenant')->get('example.key', 'Default value');

// User setting:
$value = isys_application::instance()->container->get('settingsUser')->get('example.key', 'Default value');
```

## Extending Settings in the GUI

To extend settings within the interface, the event system must be used from i-doit 36 onwards.
A dedicated event exists for each level:

* `idoit\Event\System\Settings\ExtendSystemSettings` for extending system settings
* `idoit\Event\System\Settings\ExtendTenantSettings` for extending tenant settings
* `idoit\Event\System\Settings\ExtendUserSettings` for extending user settings

By registering events, performance can be preserved,
since resource-intensive processes in the callback are only executed when actually needed,
rather than on every request.

```php
use idoit\Event\System\Settings\ExtendTenantSettings;

// In the add-on 'init.php'.

if (isys_module_manager::instance()->is_active('example_addon')) {
    // ...

    isys_application::instance()->container->get('event_dispatcher')
        ->addListener(ExtendTenantSettings::NAME, ['isys_module_example', 'extendTenantSettings']);

    // ...
}
```

The callback must be a **static public method**.
The event is passed as a parameter.
Within the code, settings can be added using objects:

```php
use idoit\Component\Settings\SettingsCollection;
use idoit\Component\Settings\Types\SelectSetting;
use idoit\Event\System\Settings\ExtendTenantSettings;

class isys_module_example
{
    // ...

    public static function extendTenantSettings(ExtendTenantSettings $event): void
    {
        $event->addSettingsCollection(
            new SettingsCollection('Heading for the settings block', [
                new SelectSetting(
                    'example.key',
                    'Name of the setting',
                    'Detailed description of the setting',
                    '0',
                    [
                        '0' => 'LC__UNIVERSAL__NO',
                        '1' => 'LC__UNIVERSAL__YES'
                    ]
                )
            ])
        );
    }
}
```

Settings can be supplemented with new *Settings Collections*.
These consist of a title and an array of `Setting` classes.
As of i-doit 36, the following setting types exist:

* `idoit\Component\Settings\Types\IntSetting` -- for numeric values
* `idoit\Component\Settings\Types\PasswordSetting` -- for passwords
* `idoit\Component\Settings\Types\SelectSetting` -- for a dialog field with defined content
* `idoit\Component\Settings\Types\TextareaSetting` -- for a multi-line text field
* `idoit\Component\Settings\Types\TextSetting` -- for a single-line text field

Each of these types inherits from `idoit\Component\Settings\Types\AbstractSetting` and thus receives the following default parameters:

* `protected string $key;` -- the key of the setting, which must also be used for querying
* `protected string $name;` -- the name of the setting, displayed in the GUI
* `protected ?string $description = null;` -- the (optional) description of the setting, displayed in the GUI
* `protected mixed $default = null;` -- the (optional) default value, displayed in the GUI

Different setting types can, when necessary, define additional custom parameters.

Any number of *Settings Collections* can be added within the callback.

**Important!** The event callbacks are only called when the corresponding GUI is being prepared.
This ensures that i-doit's performance is not negatively affected during normal operation.

## See also

- [Developing Add-ons](index.md) -- Guide to add-on development
- [Software Development](../index.md) -- Overview of developer documentation
- [API Add-on](../../i-doit-add-ons/api/index.md) -- Interface for external access
