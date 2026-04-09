---
title: Programming Dashboard Widgets
description: "The dashboard is the central entry point into i-doit and thus the first thing every user sees after logging in -- the perfect place to gather all important information at a glance."
icon:
status:
lang: en
---
# Programming Dashboard Widgets

The dashboard is the central entry point into i-doit and thus the first thing every user sees after logging in -- the perfect place to gather all important information at a glance.

In addition to the built-in widgets, any add-on can theoretically provide its own widgets and make them available to users. Especially for specific use cases that cannot be mapped using the Report Manager, it makes sense to program custom widgets. The approach is similar to [Report Views](./report-views.md)!

Programming a widget is relatively simple and requires only two files. An additional file is needed if the widget should be configurable. Otherwise, the widget only needs to be registered in the system once -- from that point on, any user can select it in the dashboard.

<!---
This article is based on the "[Example Dashboard]()" add-on and uses it to explain various technologies we employ.
-->

## Required Files

To program a custom widget, two or three files are needed:

*   A PHP class for preparing the data (backend)
*   A template for display (frontend)
*   An optional template for displaying the configuration

No database tables are required! In this regard, dashboard widgets strongly resemble report views -- they each only need a file for the "backend" and "frontend".

## Registering a Custom Widget

Similar to add-ons, each widget must first be registered in the system and requires a unique identifier. This is used to locate the PHP class -- therefore, the identifier must follow these rules:

*   Name of the add-on as prefix
*   Only lowercase letters and underscores
*   No special characters, spaces, or umlauts

<!---
In the "[Example Dashboard]()" add-on, two widgets are registered with the names devday_widget_01 and devday_widget_02. This results in the PHP class names isys_dashboard_widgets_devday_widget_01 and isys_dashboard_widgets_devday_widget_02.
-->

This means the class name is composed of "isys\_dashboard\_widgets\_" + identifier. To register a widget, the Dashboard DAO can be used. This class provides methods for creating and updating widgets.

The registration must happen during the installation of the add-on so that it is subsequently available. The responsible code could look as follows:

    $database = isys_application::instance()->container->get('database');

    isys_dashboard_dao::instance($database)->create_new_widget(
        'Developer Day Widget #01',
        'devday_widget_01',
        'C__WIDGET__DEVDAY_WIDGET_01', // Optional constant
        '', // Optional configuration in JSON format
        '' // Optional description
    );

Once the widget has been successfully written to the database, the corresponding PHP class just needs to be available in code (see: [Autoloader](./bootstrapping-an-add-on.md)).

## The Widget Backend (PHP)

The widget class is a normal PHP class that must inherit from isys_dashboard_widgets. In the simplest case, only the "render" method needs to be implemented -- it must return the widget's HTML as a "string".

Typically, Smarty templates are used for this task. The global Smarty instance is accessible in the widget class via $this->m_tpl.

The example widget isys_dashboard_widgets_devday_widget_01 demonstrates in a few lines how it is possible to pass variables to the template, render it, and return it to the dashboard:

    /**
    * @param  string $uniqueId
    * @return string
    * @throws SmartyException
    */
    public function render($uniqueId)
    {
        // We store a smarty instance in "$this->m_tpl", assign some values and return the rendered template.
        return $this->m_tpl
            ->assign('title', 'Example Widget (with D3)')
            ->assign('uniqueId', $uniqueId)
            ->fetch(__DIR__ . '/widget.tpl');
    }

Other available services include the database and language components. If other services are needed, they can be loaded from the global Dependency Injection Container via isys_application::instance()->container->get('...');

### Configuration

If the widget should have a configuration, the method has_configuration() must be overridden to return true.

Additionally, the load_configuration() method is needed to prepare the widget's configuration popup. Here, just like with render(), a template must be returned -- see the example widget isys_dashboard_widgets_devday_widget_02 for reference.

Within the widget class, previously saved configuration can be accessed via the variable $this->m_config.

## The Widget Frontend (Template)

The widget template is currently not subject to any rules and can be freely designed. You can work with HTML, JavaScript, and CSS as you wish.

The example widget isys_dashboard_widgets_devday_widget_01 demonstrates the simple use of a chart created with [D3](https://d3js.org/) and our "D3ChartBar" JS class.

In the example widget isys_dashboard_widgets_devday_widget_02, the current configuration is simply displayed. This example can be used to react accordingly to configured options within the template.

## The Widget Configuration

Each widget can include an optional configuration to allow users to set options in the GUI. This configuration works similarly to the widget itself -- using the load_configuration(array $row, $id) method in the widget class, data can be collected and prepared for the configuration. The first parameter contains the row from isys_widgets of the widget. The second parameter contains the ID of the widget from isys_widgets_config.

The method must, similar to render(), return the rendered HTML.
In this method as well, the current configuration is available in $this->m_config and can be used to pre-select data.

### Saving Data

The configuration itself is typically done with form fields in which the user can make entries. It is recommended to use the available Smarty plugins from i-doit (see [Smarty Plugins](./programming-categories.md#smarty-plugins)).

Saving this data runs largely automatically -- only a function is needed to pass the concrete data to an internal interface. This can be seen in the config.tpl template of the isys_dashboard_widgets_devday_widget_02 widget.

The important thing is that when clicking the "Accept" button of the configuration popup, the required data is written to a specific location:

    $('widget-popup-accept').on('click', function () {
        // Collect the input data and save them to a JSON object.
        const data = {
            title: $F('my-title'),
            dialog: $F('my-dialog')
        };

        // In order to automatically save the configured information, we pass it as JSON string to this defined field.
        $('widget-popup-config-hidden').setValue(Object.toJSON(data));

        // Also we define the configuration as "changed" in order to save it and reload the widget after the popup closes.
        $('widget-popup-config-changed').setValue('1');
    });

This code can be adopted almost 1:1 -- only the preparation of the data in the "data" variable would need to be adjusted.

i-doit will then take care of saving the provided data and reloading the widget so that the current options are applied immediately.
