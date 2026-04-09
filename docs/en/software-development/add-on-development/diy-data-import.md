---
title: "DIY Data Import"
description: "From time to time it may be necessary to transfer large amounts of data from a third-party system into i-doit -- both for an initial population and for regular synchronizations and updates."
icon:
status:
lang: en
---
# DIY Data Import

From time to time it may be necessary to transfer large amounts of data from a third-party system into i-doit -- both for an initial population and for regular synchronizations and updates. For this purpose, i-doit offers several interfaces, known as imports, to ingest data from external sources into the CMDB.

Among other things, we offer the CSV Import and the JSON-RPC API for generic data. There are also ready-made solutions for other tools such as JDisc and OCS. However, sometimes a completely new or custom solution is needed to transfer data reliably and without significant overhead into i-doit.

For this purpose, it is possible to write your own import.

**Attention!** This topic is aimed at advanced developers who have already gathered know-how with the i-doit system and are familiar with both the various category types and attribute types.

# Technical Import Options

There are multiple options for importing data. From CSV import to JDisc, OCS, and several others... In this article, however, we focus only on the "technical" options for developing an import.

Specifically, there are two options worth considering:

# Import Using the API

Before we dive into programming, I want to point out that such an import can be generated via the API and can probably even save some trouble when it comes to the following topics...

## Dialog, Dialog+, and Object References

With the API, we are accustomed to providing data in a "readable" form. Instead of specifying the ID "3" for a manufacturer, we provide the name in plain text. The API code will automatically search for this name in the corresponding attribute or stored database table and reference the correct ID.

Additionally, dialogs with dependencies (such as between model and manufacturer) are processed internally so that no incorrect references occur.

If a specified data record cannot be found, the API will create it for us and reference it accordingly.

## Validation

The API will consider the configured validation when creating and updating category data and report any errors. In this case, the changes are not accepted -- the process is interrupted.

## Processors

The API has internal helpers for some categories that cannot be saved without additional logic -- specifically, these are categories that can only be meaningfully populated using "extra logic" because they have specific behavior.

As an example, I want to mention the "Host Address" category. Here, there are indirect dependencies between the entered IP address and the stored network -- IPv6 addresses must not be stored in an IPv4 network. Likewise, no IP address may be saved if it falls outside the selected network range.

The respective category processor handles exactly this task.

An additional example is the "SLA" category, which has very specific GUI and data structures to document individual days and service times.

# Import Using the "sync" Methods

If we still decide to write our "own" import, we will implement it using the "sync" methods of our category DAOs.

In contrast to importing via the API, we must implement the following necessary procedures ourselves:

1.  Find or create the respective target object
2.  Check category data for consistency and resolve references
3.  Prepare category DAOs
4.  Validate data and prepare structure
5.  Pass prepared data to the "sync" method
6.  Write log entries

# Overview of Required Components

With the recent i-doit major versions, we have provided more and more decoupled components that greatly simplify the programming of custom imports. For this, we need to familiarize ourselves with the following components:

## Data Source

This must exist, because without a data source, no data can be transferred to i-doit :) It is advantageous to work with data types that are easy to process in PHP, such as databases, JSON, XML, or YAML.

The data must be reachable and readable from the code!

## Mapping

This step is essential and should be carefully considered. The i-doit CMDB has approximately 150 global and 80 specific categories that can be used for documentation. Additionally, there are of course the custom categories that can be used for specific information.

The task is to map the source data to category attributes so that i-doit (or our import) can process them correctly. We can use the GUI of the CSV Import as a practical example to see such a mapping -- this assignment of source data to i-doit category attributes is exactly what we need to build at the code level.

To supply our import with data without detours, we should use the same format that is already used in the API:

    {
        "category constant": [
            {"attribute": "value"},
            {"attribute 2": "value 2"}
        ]
    }

Or with concrete data:

    {
        "C__CATG__CPU": [
            {"title": "CPU #1", "frequency": 3.6, "frequency_unit": 3},
            {"title": "CPU #2", "manufacturer": "Intel", "type": "Core i7"}
        ]
    }

Here we see a mix of ID references and readable values (see "frequency_unit": 3 and "manufacturer": "Intel"). With a manual import via category "sync", we must resolve all references -- i-doit can only work internally with ID references!

How this works is explained in the next section. The articles [Programming Categories](./programming-categories.md) and [Attribute Definition](./attribut-definition.md) will help with understanding!

## AttributeDataCollector

This component can be used to resolve data references such as "manufacturer: Intel". It works on an attribute basis and automatically handles the specified types. Specifically, we need the respective attribute:

    use idoit\Component\Property\Property;
    use idoit\Module\Cmdb\Component\AttributeDataCollector\Collector;

    $property = '<property definition from category DAO>';
    $data = null;
    $collector = new Collector();

    // We need to check if we are handling a property in the "old" format.
    if (!$property instanceof Property) {
        $property = Property::createInstanceFromArray($property);
    }

    // Only process if the property can be handled by the collector.
    if ($collector->isApplicable($property)) {
        $data = $collector->getApplicableType()->collectData($property, false);
    }

At the end, the $data variable will contain a list of available data -- this can now be checked for matching content. If no match can be found, it must be individually decided whether a record should be created at runtime.

## CiMatcher

The "CiMatcher" is a component for finding objects using various attributes such as hostname, serial number, MAC address, etc. Currently, 19 identifiers exist for finding objects.

Usage is straightforward:

    $numberOfNecessaryMatches = 2;
    $matcher = new CiMatcher(MatchConfig::factory($numberOfNecessaryMatches, isys_application::instance()->container));

    $match = $matcher->match([
        new MatchKeyword(Hostname::KEY, $hostname),
        new MatchKeyword(ModelSerial::KEY, $serialNumber),
        new MatchKeyword(IpAddress::KEY, $ipAddress),
        new MatchKeyword(Mac::KEY, $macAddress),
    ]);

    $foundObjectId = $match->getId();

If no object could be found, getId() will simply return null. If multiple objects are found, they can be read out using getMatchResult().

!!! info "Attention!"

    Due to PHP 8 compatibility, the method name "match" will change in the future!

## Merger

The "Merger" has only a single task: to check provided records for completeness and, if applicable, supplement them with existing data or default values from the CMDB.

And why do we need this? The "sync" method of the category DAOs always requires complete records in order to create or update the respective data.

If one or more attributes are not part of the data, they would be set to null when writing to the database.

## Object and Category DAO

To actually write category data to the database, the various category DAO classes are needed. We can find and use these with the help of the category constants from our API-like structure.

For object data, the "CMDB DAO" can be used -- or any category DAO, since they inherit from the CMDB DAO.

To create objects, there is a method that must be used: "isys_cmdb_dao->insert_new_obj()". Objects must not be created with custom SQL, as otherwise some required procedures that are needed by the system would be skipped.

# Good to Know!

Before we start with the import code, I want to point out a few things:

## Creating Is Easy, Updating Is Difficult

If only new objects and new category data are to be created, the import is much simpler to develop, since no data needs to be "merged" in this case.

Especially with multi-value categories, "recognizing" the record to be updated can be complicated and resource-intensive. This step can be greatly simplified by writing custom code per category that "recognizes" the correct record -- however, this only makes sense if the import covers only a few categories.

## Importing Multi-Value Categories

Per "sync" call, only ONE record is created or updated. Multiple records for multi-value categories must therefore be processed in a loop.

## Encapsulating the Import / Code

If the custom import or its code is encapsulated, we as developers are able to use it in various places. Specifically, such an architecture allows the import to be used without significant overhead for a console command, within the GUI, or the API (just like the CSV Import).

## Consistency Check of Data

As previously mentioned, dialog and object references must be resolved. This means that manufacturer data such as "Intel" or "Cisco" must be found (or created) in the system, and the code must work with IDs instead of these string values.

For this purpose, there is an "AttributeDataCollector" component (see above).

# Basic Import Code

The import using the sync method is relatively straightforward and requires only a few lines of code. It must be noted that this "simple" import only represents the base -- a description of the code and a list of "missing features" that can be individually developed as needed follows.

## Example Data in JSON Format

These example data have already been brought into a format that we can work with without additional effort -- meaning the steps for procurement and the "mapping" process have already been completed here.

    [
        {
            "C__CATG__GLOBAL": [
                {
                    "title": "My empty Object"
                }
            ]
        },
        {
            "C__CATG__GLOBAL": [
                {
                    "title": "My filled Object",
                    "purpose": 3
                }
            ],
            "C__CATG__CPU": [
                {
                    "title": "cpu1",
                    "manufacturer": 1,
                    "type": 2,
                    "cores": 3
                },
                {
                    "title": "CPU 2",
                    "manufacturer": "Intel",
                    "type": "Core i5",
                    "cores": 4,
                    "frequency": 2.5,
                    "frequency_unit": "Ghz"
                }
            ],
            "C__CATG__MODEL": [
                {
                    "manufacturer": "Custom Manufacturer",
                    "title": "Custom Title",
                    "productid": "Custom Product ID",
                    "service_tag": "Custom Service Tag",
                    "serial": "Custom Serial"
                }
            ],
            "C__CATG__IP": [
                {
                    "primary": 0,
                    "active": 0,
                    "net": 20,
                    "ipv4_address": "127.0.0.1"
                },
                {
                    "primary": 1,
                    "active": 1,
                    "net": 21,
                    "ipv6_address": "affe::"
                }
            ],
            "C__CATG__SLA": [
                {
                    "service_id": "Service ID",
                    "service_level": 1,
                    "monday_time": "08:00 - 16:00",
                    "tuesday_time": "08:00 - 16:00"
                }
            ]
        }
    ]

## Basic Code

The following code provides a working foundation for creating your own import. Such code should ideally be encapsulated in its own class or function so that it can be called from various places -- for example, from a command, the i-doit frontend, or a custom API endpoint.

    use idoit\Module\Cmdb\Component\SyncMerger\Config;
    use idoit\Module\Cmdb\Component\SyncMerger\Merger;

    $data = '{JSON Data}';

    $dao = isys_application::instance()->container->get('cmdb_dao');
    $database = isys_application::instance()->container->get('database');
    $objectTypeId = C__OBJTYPE__CLIENT; // ID of the "client" type (10)

    foreach ($data as $objectData) {
        $objectTitle = $objectData['C__CATG__GLOBAL'][0]['title'] ?: 'Created by import: ' . date('Y-m-d H:i:s');

        $objectId = $dao->insert_new_obj($objectTypeId, null, $objectTitle, null, C__RECORD_STATUS__NORMAL);

        foreach ($objectData as $categoryConst => $categoryData) {
            $category = $dao->get_cat_by_const($categoryConst);

            if (!class_exists($category['class_name'])) {
                continue;
            }

            /** @var isys_cmdb_dao_category $categoryDao */
            $categoryDao = $category['class_name']::instance($database);

            foreach ($categoryData as $entryData) {
                // Will contain either 'true' or a associative array with 'key' => 'validation error message'
                $validationResult = $categoryDao->validate($entryData);

                if ($validationResult === true) {
                    // The category data must be brought into a specific format so that the Merger can work with it
                    $fakeEntry = [
                        Config::CONFIG_DATA_ID    => null,
                        Config::CONFIG_PROPERTIES => array_map(function ($prop) { return [C__DATA__VALUE => $prop]; }, $entryData)
                    ];

                    $syncData = Merger::instance(Config::instance($categoryDao, $objectId, $fakeEntry))->getDataForSync();

                    $categoryEntryId = $categoryDao->sync($syncData, $objectId, isys_import_handler_cmdb::C__CREATE);
                }
            }
        }
    }

## Code Explanation

I would like to explain the code step by step:

*   Our import starts with the provided data -- the form in which this happens depends on the framework of the import (database connection, third-party API, file in the filesystem, ...). At this point (immediately before the import), they should already match the proposed format _(line 4)_
*   Next, we fetch the "CMDB DAO" and the database component from our Dependency Injection Container.
    Additionally, we define a static object type for what our objects should be imported as (this could also be improved with custom code or parameters) _(lines 6-7)_
*   We create a "foreach" loop that imports an object for each entry _(lines 10+)_
*   In the following lines, an object is created with the name from the provided data -- if no name is defined, we use a fallback string "Created by import: ..." with the current date and time _(line 11)_
*   Currently, an object is ALWAYS created -- if an existing object should be FOUND and reused instead, custom logic must be implemented.
    An object ID is mandatory for the following lines! _(line 13)_
*   We create an additional "foreach" loop that now processes the categories of the object -- first we try to instantiate the DAO class of the desired category based on the used category constant.

    If this fails, we skip the data -- such places should typically record the behavior in a log so that errors can be identified afterwards _(lines 15+)_
*   Once the code has found a category DAO, we create a third "foreach" loop that iterates through the individual category records _(lines 16-25)_
*   In the first lines of this loop, we call the "validate" method of the DAO, which checks our input data against the configured validation from the administration. If there are no problems, we receive the return value "true" -- otherwise an array with entries of failed validations. _(lines 27-29)_

    **ATTENTION** -- the validation does not perform a consistency check of the data!
*   In the next lines, the data is brought into a format with the help of the "Merger" that the "sync" method of the DAO can work with.

    We call this a "fake entry" because we work without a record ID and only use the Merger to supplement the missing category data with default values _(lines 31-36)_
*   We finally pass the prepared data to the "sync" method and specify the "create" mode to create new records _(line 38)_

## Optional Improvements

As already mentioned, this code is a functional "base" version of an import -- meaning the code is usable in its current form and will import provided data!

However, some (optional) functions that an import typically provides are missing. I want to list these points here:

*   This import is limited to creating data -- it cannot update existing data. This is an extremely complex process that is best implemented manually for each affected category
*   An import should record its progress and unexpected problems in the form of a log. To create a logger instance, we can use the following line at the beginning of the import:
    $logger = idoit\Component\Logger::factory('my-import', BASE_DIR . 'log/my-import_' . date('Y-m-d') . '.log');
*   The $entryData data must be checked for general consistency -- objects and dialog fields always require references via IDs. If string values are provided, the import will fail for the respective value
*   Before the data is passed to the "Merger", a category processor should be used to prepare the data for the respective category
*   Currently, the import does not write any data to the CMDB logbook; this must be added for both objects and category data
