---
title: Report Views
description: "Report Views are used in i-doit for specific use cases that cannot be mapped with the Report Manager or that require interactive elements."
icon:
status:
lang: en
---
# Report Views

Report Views are used in i-doit for specific use cases that cannot be mapped with the "Report Manager" or that, for example, include interactive elements.

The advantage of a Report View is that it can process and output CMDB data using PHP logic and a specific template, rather than simply executing an SQL query and displaying it as a table like "classic" reports.

This makes Report Views excellent for mapping complex queries that can optionally be parameterized to cover a large variety of similar scenarios. Furthermore, Report Views offer the possibility of choosing visualization forms other than a simple table.

For a Report View, three things must be in place:

*   A "Report View" PHP class with the required logic
*   A template for displaying the report in the web GUI
*   The registration of the view

This article is based on the existing example add-on "[Report view example](https://bitbucket.org/synetics/addon-example-reportview/commits/)" -- this is freely accessible to all [development partners](https://www.i-doit.com/partner/partner-werden/) and provides a functional Report View that can be used for learning purposes.

## Report PHP Class

The PHP class must inherit from isys_report_view and implement the required interface classes:

*   name
    This method simply returns the designation of the Report View.
*   description
    Similar to name(), but for the description.
*   template
    Must return the absolute path to the responsible template. The i-doit system will automatically load the template once the Report View is opened.
*   viewtype
    This method returns the type of the Report View. This is a simple string.
*   init
    This is an optional method that is called before any processing.
*   start
    This method is used by i-doit when the Report View is called. The initial data preparation for the frontend must happen here so that the template can access it.
    This process should be kept as lean as possible -- any "complex" report logic should be handled via Ajax requests.
*   ajax_request
    An additional optional method for processing Ajax requests from the frontend.

In this example add-on, the class is named example_report_view_01.class.php -- this name must contain the add-on identifier (here "example_report"); the rest can be freely chosen. The PHP class itself must carry the same name.

### Initial start() Method

As soon as a Report View is opened in the i-doit frontend, the backend first runs the optional init() method and then the start() method. This serves as the entry point into the Report View and is typically used to load all initial data that will subsequently be used in the Smarty template.

We can use the [TOM logic](./programming-categories.md#ubergabe-der-daten-an-smarty-plugins-mittels-tom-und-rules) here, similar to categories -- in the example add-on, we use this method to prepare the status filter.

### Loading Data via ajax_request()

This method is automatically called when the Report View URL is extended with the "ajax" parameter. From i-doit 1.16.3, the optional init() method is also called here first to prepare any data.

For this method to return the correct data to the frontend, three things must be in place:

*   The correct content type must be set (in the example, "application/json")
*   The data must be output (in the example, using "echo "...";")
*   The request must be terminated to prevent any subsequent logic (in the example, using "die();")

The output values can then be received and further used in the template.

## Template

The template must handle the complete display of the Report View. Typically, a form with filters and a table with information is displayed here using [Smarty](https://www.smarty.net/docs/en/). Alternatively, a graphical analysis can be presented using [D3](https://d3js.org/) or other tools, for example.

In the example add-on, we see a dialog field whose data is sent to the backend via Ajax when the button is clicked. The backend's response contains some information about object types, which is then displayed both in a table and as a pie chart.

## Registering a Report View

For the custom view to appear in the Report Manager, it must first be registered. For this, we use a special register to which we simply provide the absolute path to the Report View class:

    $path = '/reportview/isys_maintenance_reportview_maintenance_export.class.php';

    isys_register::factory('additional-report-views')->set(__DIR__ . $path);

This step should be done in the init.php file of your own add-on, since this is always read and processed by i-doit. Additionally, this ensures that the Report View only appears when the add-on is set to "active" in the Admin Center:

    if (isys_module_manager::instance()->is_active('example_reportview')) {
        // ...

        isys_register::factory('additional-report-views')
            ->set(__DIR__ . '/report-view/example_report_view_01.class.php');
    }

Once this step is done and the Report View class is available via autoloading, the [Report View can be opened in i-doit](../../evaluation/report-manager.md#report-views) and executed.
