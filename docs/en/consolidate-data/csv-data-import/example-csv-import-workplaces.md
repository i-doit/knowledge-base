# Example of CSV import - Workplaces

In this example we build on the [CSV import of locations](example-csv-import-creating-locations.md) and want to import workplaces.  
These are to be assigned to a room as a location and furthermore we want to assign clients, monitors and printers to the workplaces.

!!! info

    This article was last checked for i-doit version 1.17.1

  

  

For the import we need the following information:

-  Object title → the name of the workstation, client, screen or printer.
-  Location → under which location the object should be located
-  Object type → what type of object it should be
-  Workplaces assignment → to which workstation the component should be assigned

Example CSV file for this import:

[Import Workplaces.csv](../../assets/images/en/consolidate-data/csv-data-import/csv-import-workplaces/Import Workplaces.csv)

??? example "Import Workplaces.csv"

    ```text
    Object title;Location;Object type;Workplace assignment
    AP0001;Room 1.001;C__OBJTYPE__WORKSTATION;;
    AP0002;Room 1.002;C__OBJTYPE__WORKSTATION;;
    AP0003;Room 1.003;C__OBJTYPE__WORKSTATION;;
    AP0004;Room 1.004;C__OBJTYPE__WORKSTATION;;
    AP0005;Room 1.005;C__OBJTYPE__WORKSTATION;;
    AP0006;Room 1.006;C__OBJTYPE__WORKSTATION;;
    AP0007;Room 1.007;C__OBJTYPE__WORKSTATION;;
    AP0008;Room 2.001;C__OBJTYPE__WORKSTATION;;
    AP0009;Room 2.002;C__OBJTYPE__WORKSTATION;;
    AP0010;Room 2.003;C__OBJTYPE__WORKSTATION;;
    AP0011;Room 2.004;C__OBJTYPE__WORKSTATION;;
    AP0012;Room 2.005;C__OBJTYPE__WORKSTATION;;
    AP0013;Room 2.006;C__OBJTYPE__WORKSTATION;;
    AP0014;Room 2.007;C__OBJTYPE__WORKSTATION;;
    AP0015;Room 3.003;C__OBJTYPE__WORKSTATION;;
    AP0016;Room 3.004;C__OBJTYPE__WORKSTATION;;
    AP0017;Room 3.005;C__OBJTYPE__WORKSTATION;;
    AP0018;Room 3.006;C__OBJTYPE__WORKSTATION;;
    AP0019;Room 3.007;C__OBJTYPE__WORKSTATION;;
    AP0020;Room 3.008;C__OBJTYPE__WORKSTATION;;
    WS001;;C__OBJTYPE__CLIENT;AP0001
    WS002;;C__OBJTYPE__CLIENT;AP0002
    WS003;;C__OBJTYPE__CLIENT;AP0003
    WS004;;C__OBJTYPE__CLIENT;AP0004
    WS005;;C__OBJTYPE__CLIENT;AP0005
    WS006;;C__OBJTYPE__CLIENT;AP0006
    WS007;;C__OBJTYPE__CLIENT;AP0007
    WS008;;C__OBJTYPE__CLIENT;AP0008
    WS009;;C__OBJTYPE__CLIENT;AP0009
    WS010;;C__OBJTYPE__CLIENT;AP0010
    WS011;;C__OBJTYPE__CLIENT;AP0011
    WS012;;C__OBJTYPE__CLIENT;AP0012
    WS013;;C__OBJTYPE__CLIENT;AP0013
    WS014;;C__OBJTYPE__CLIENT;AP0014
    WS015;;C__OBJTYPE__CLIENT;AP0015
    WS016;;C__OBJTYPE__CLIENT;AP0016
    WS017;;C__OBJTYPE__CLIENT;AP0017
    WS018;;C__OBJTYPE__CLIENT;AP0018
    WS019;;C__OBJTYPE__CLIENT;AP0019
    WS020;;C__OBJTYPE__CLIENT;AP0020
    TFT001;;C__OBJTYPE__MONITOR;AP0001
    TFT002;;C__OBJTYPE__MONITOR;AP0002
    TFT003;;C__OBJTYPE__MONITOR;AP0003
    TFT004;;C__OBJTYPE__MONITOR;AP0004
    TFT005;;C__OBJTYPE__MONITOR;AP0005
    TFT006;;C__OBJTYPE__MONITOR;AP0006
    TFT007;;C__OBJTYPE__MONITOR;AP0007
    TFT008;;C__OBJTYPE__MONITOR;AP0008
    TFT009;;C__OBJTYPE__MONITOR;AP0009
    TFT010;;C__OBJTYPE__MONITOR;AP0010
    TFT011;;C__OBJTYPE__MONITOR;AP0011
    TFT012;;C__OBJTYPE__MONITOR;AP0012
    TFT013;;C__OBJTYPE__MONITOR;AP0013
    TFT014;;C__OBJTYPE__MONITOR;AP0014
    TFT015;;C__OBJTYPE__MONITOR;AP0015
    TFT016;;C__OBJTYPE__MONITOR;AP0016
    TFT017;;C__OBJTYPE__MONITOR;AP0017
    TFT018;;C__OBJTYPE__MONITOR;AP0018
    TFT019;;C__OBJTYPE__MONITOR;AP0019
    TFT020;;C__OBJTYPE__MONITOR;AP0020
    PRNT001;;C__OBJTYPE__PRINTER;AP0001
    PRNT002;;C__OBJTYPE__PRINTER;AP0002
    PRNT003;;C__OBJTYPE__PRINTER;AP0003
    PRNT004;;C__OBJTYPE__PRINTER;AP0004
    PRNT005;;C__OBJTYPE__PRINTER;AP0005
    PRNT006;;C__OBJTYPE__PRINTER;AP0006
    PRNT007;;C__OBJTYPE__PRINTER;AP0007
    PRNT008;;C__OBJTYPE__PRINTER;AP0008
    PRNT009;;C__OBJTYPE__PRINTER;AP0009
    PRNT010;;C__OBJTYPE__PRINTER;AP0010
    PRNT011;;C__OBJTYPE__PRINTER;AP0011
    PRNT012;;C__OBJTYPE__PRINTER;AP0012
    PRNT013;;C__OBJTYPE__PRINTER;AP0013
    PRNT014;;C__OBJTYPE__PRINTER;AP0014
    PRNT015;;C__OBJTYPE__PRINTER;AP0015
    PRNT016;;C__OBJTYPE__PRINTER;AP0016
    PRNT017;;C__OBJTYPE__PRINTER;AP0017
    PRNT018;;C__OBJTYPE__PRINTER;AP0018
    PRNT019;;C__OBJTYPE__PRINTER;AP0019
    PRNT020;;C__OBJTYPE__PRINTER;AP0020
    ```

There are also dependencies in this example. The locations already exist, they were created via the [location creation example](example-csv-import-creating-locations.md).  
Next come the workstations themselves, we must create these first, so that we can then directly assign the individual components such as clients, monitor and printer to them.  
Therefore, the individual workstations are also in first place in the CSV file.

For the import we go back to the CSV import area. The settings in the upper area remain at the default settings and we click on Prepare Mapping:

[![prepare-mapping](../../assets/images/en/consolidate-data/csv-data-import/csv-import-workplaces/1-csv-i-w.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-workplaces/1-csv-i-w.png)

Now we can make the import configuration in the lower area as follows, and then start the import process:

[![import-process](../../assets/images/en/consolidate-data/csv-data-import/csv-import-workplaces/2-csv-i-w.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-workplaces/2-csv-i-w.png)

If we have done everything correctly, the individual workstations will now appear, are assigned to a location and under each workstation we will find an assigned client, monitor and printer.

[![idividual-workstations](../../assets/images/en/consolidate-data/csv-data-import/csv-import-workplaces/3-csv-i-w.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-workplaces/3-csv-i-w.png)
