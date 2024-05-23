# Example of CSV import - Applications

In this example we want to import applications. We want to import as much information about an application as possible.

!!! info "This article was last checked for i-doit version 1.16.2"

For the import we can import the following information:

-  Object type → What type of object should it be?
-  Object title → What is the name of the application?
-  Application - Specification → What is the specification of the application?
-  Application - Manufacturer → Who has manufactured the application?
-  Application - Installation → Is the application installed automatically or manually?
-  Application - Registration key → Which registration key was used?
-  Application - Install path → What is the installation path?
-  Application Variants - Title→ How should the variant be named?
-  Application Variants - Variant → How was the variant named?
-  Version - Version number → What are the version numbers?
-  Version - Servicepack → Which Service Packs are there?
-  Version - Kernel → Which kernel versions are there?
-  Version - Patchlevel → What patch levels are there?

Example CSV file for this import:

[Import-Applications.csv :material-file-download:](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/Import-Applications.csv){ .md-button .md-button--primary }

??? example "Import Applications.csv"

    ```text
    Object type;Object title;Application - Specification;Application - Manufacturer;Application - Installation;Application - Registration key;Application - Install path;Variants - Title;Variants - Variant;Version - Version number;Version - Servicepack;Version - Kernel;Version - Patchlevel
    C__OBJTYPE__APPLICATION;Application;Specification;"Manufacturer Alpha";Automatic;"No RegKey";"C:\Program Files\Application";Application PRO;Pro;1.0;Service Pack 1;;1
    C__OBJTYPE__APPLICATION;Applicationx;Specification;"Manufacturer Beta";Automatic;"No RegKey";"C:\Program Files\Applicationx";Application PRO,Applicationx ENTERPRISE;Pro,Enterprise;2,3;Service Pack 1,Service Pack 2;;1,2
    C__OBJTYPE__APPLICATION;Applicationy;Specification;"Manufacturer Gamma";Automatic;"No RegKey";"C:\Program Files\Application";Application PRO,Applicationy ENTERPRISE,Applicationy BUSINESS;Pro,Enterprise,Business;1.5,2.0,2.5;Service Pack 1,Service Pack 2,Service Pack 3;;5,6,7 C__OBJTYPE__APPLICATION;Applicationz;Specification;"Manufacturer Delta";Automatic;"No RegKey";"/etc/Applicationz/";Applicationz PRO,Applicationz ENTERPRISE,Applicationz BUSINESS;Pro,Enterprise,Business;10,11,12;;4.19.37;2,3,4
    ```

This import does not assume any dependencies. As we create new applications, as well as data on these applications.

For the import we go back to the CSV import area. The settings in the upper area remain at the default settings and we click on Prepare Mapping:

[![prepare-mapping](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/1-csvi-a.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/1-csvi-a.png)

Now we can make the import configuration in the lower area as follows, and then start the import process:

[![import-process-start](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/2-csvi-a.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/2-csvi-a.png)

If we have done everything correctly, the individual applications will now appear in the list view.

[![list-view](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/3-csvi-a.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/3-csvi-a.png)

Also, the categories Applications → Variants and Version are filled.

[![categories](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/4-csvi-a.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/4-csvi-a.png)

[![categories](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/5-csvi-a.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-applications/5-csvi-a.png)
