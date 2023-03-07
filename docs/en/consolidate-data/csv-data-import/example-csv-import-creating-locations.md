# Example of CSV import - Creating Locations

Today we will take a look at a practical example of CSV import.
Our use case is the automatic creation of locations within i-doit using a CSV import.

!!! info "This article was last checked for i-doit version 1.17.1"

We need the following information to create the individual objects:

-  The self-created object type Floor/Basement with the object type constant →  C\_\_OBJECT\_TYPE\_\_FLOOR.
-  Object name → the name of the building, floor or room
-  Location → under which location the object should be located
-  Object type → what type of object it should be

Example CSV file for this import:

[Import-Location.csv :material-file-download:](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/Import-Location.csv){ .md-button .md-button--primary }

The structure of the CSV looks as follows:

??? example "Import Location.csv"

    ```text
    Object title;Location;Object type
    HEADQUARTER;Root location;C__OBJTYPE__BUILDING
    Basement;HEADQUARTER;C__OBJECT_TYPE__FLOOR
    First Floor;HEADQUARTER;C__OBJECT_TYPE__FLOOR
    Second Floor;HEADQUARTER;C__OBJECT_TYPE__FLOOR
    Third Floor;HEADQUARTER;C__OBJECT_TYPE__FLOOR
    Room 0.001;Basement;C__OBJTYPE__ROOM
    Room 0.002;Basement;C__OBJTYPE__ROOM
    Room 0.003;Basement;C__OBJTYPE__ROOM
    Room 0.004;Basement;C__OBJTYPE__ROOM
    Room 0.005;Basement;C__OBJTYPE__ROOM
    Room 0.006;Basement;C__OBJTYPE__ROOM
    Room 0.007;Basement;C__OBJTYPE__ROOM
    Room 0.008;Basement;C__OBJTYPE__ROOM
    Room 0.009;Basement;C__OBJTYPE__ROOM
    Room 0.010;Basement;C__OBJTYPE__ROOM
    Room 0.011;Basement;C__OBJTYPE__ROOM
    Room 0.012;Basement;C__OBJTYPE__ROOM
    Room 0.013;Basement;C__OBJTYPE__ROOM
    Room 0.014;Basement;C__OBJTYPE__ROOM
    Room 1.001;First Floor;C__OBJTYPE__ROOM
    Room 1.002;First Floor;C__OBJTYPE__ROOM
    Room 1.003;First Floor;C__OBJTYPE__ROOM
    Room 1.004;First Floor;C__OBJTYPE__ROOM
    Room 1.005;First Floor;C__OBJTYPE__ROOM
    Room 1.006;First Floor;C__OBJTYPE__ROOM
    Room 1.007;First Floor;C__OBJTYPE__ROOM
    Room 1.008;First Floor;C__OBJTYPE__ROOM
    Room 1.009;First Floor;C__OBJTYPE__ROOM
    Room 1.010;First Floor;C__OBJTYPE__ROOM
    Room 1.011;First Floor;C__OBJTYPE__ROOM
    Room 1.012;First Floor;C__OBJTYPE__ROOM
    Room 1.013;First Floor;C__OBJTYPE__ROOM
    Room 1.014;First Floor;C__OBJTYPE__ROOM
    Room 2.001;Second Floor;C__OBJTYPE__ROOM
    Room 2.002;Second Floor;C__OBJTYPE__ROOM
    Room 2.003;Second Floor;C__OBJTYPE__ROOM
    Room 2.004;Second Floor;C__OBJTYPE__ROOM
    Room 2.005;Second Floor;C__OBJTYPE__ROOM
    Room 2.006;Second Floor;C__OBJTYPE__ROOM
    Room 2.007;Second Floor;C__OBJTYPE__ROOM
    Room 2.008;Second Floor;C__OBJTYPE__ROOM
    Room 2.009;Second Floor;C__OBJTYPE__ROOM
    Room 2.010;Second Floor;C__OBJTYPE__ROOM
    Room 2.011;Second Floor;C__OBJTYPE__ROOM
    Room 2.012;Second Floor;C__OBJTYPE__ROOM
    Room 2.013;Second Floor;C__OBJTYPE__ROOM
    Room 2.014;Second Floor;C__OBJTYPE__ROOM
    Room 3.001;Third Floor;C__OBJTYPE__ROOM
    Room 3.002;Third Floor;C__OBJTYPE__ROOM
    Room 3.003;Third Floor;C__OBJTYPE__ROOM
    Room 3.004;Third Floor;C__OBJTYPE__ROOM
    Room 3.005;Third Floor;C__OBJTYPE__ROOM
    Room 3.006;Third Floor;C__OBJTYPE__ROOM
    Room 3.007;Third Floor;C__OBJTYPE__ROOM
    Room 3.008;Third Floor;C__OBJTYPE__ROOM
    Room 3.009;Third Floor;C__OBJTYPE__ROOM
    Room 3.010;Third Floor;C__OBJTYPE__ROOM
    Room 3.011;Third Floor;C__OBJTYPE__ROOM
    Room 3.012;Third Floor;C__OBJTYPE__ROOM
    Room 3.013;Third Floor;C__OBJTYPE__ROOM
    Room 3.014;Third Floor;C__OBJTYPE__ROOM
    ```

Since we want to set dependencies that build on each other, it is important to keep a corresponding order for the locations in the CSV file.  
The root location is always the lowest level and already exists. In this location are the individual buildings, in the buildings the individual floors and in the floors the respective rooms:

  Root location → Building → Floor → Room

So in the CSV file the buildings come first, then the floors and last the rooms.

[![buildings-floor-room](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/1-csv-cl.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/1-csv-cl.png)

In order to define which object type is to be created in each case, we give the import in each line the object type constant on the way, we find this in the object type configuration:

[![object-type-configuration](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/2-csv-cl.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/2-csv-cl.png)

Now let's look at the configuration for the import, in the upper area we can leave the settings as they are:

[![configuration](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/3-csv-cl.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/3-csv-cl.png)

Now click Prepare Mapping, after that we can adjust the settings as follows:

[![prepare-mapping](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/4-csv-cl.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/4-csv-cl.png)

Now we are ready and can start the import, in the location view the following picture should appear afterwards:

[![import-start](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/5-csv-cl.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/5-csv-cl.png)

The configuration of the newly created object type Floor:

[![configuration](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/6-csv-cl.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-create-locations/6-csv-cl.png)
