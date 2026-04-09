---
title: CSV Import Example Locations
description: "In this example, you create a complete location structure (buildings, floors, rooms) via CSV import."
icon:
status:
lang: en
---
# CSV Import Example Locations

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

In this example, you create a complete location structure (buildings, floors, rooms) via CSV import.

!!! note "This article was last verified for i-doit version 1.16.2"

### Required Information

-   The custom-created object type Floor/Basement with the object type constant `C__OBJECT_TYPE__FLOOR`
-   Object name -- Name of the building, floor, or room
-   Location -- Under which location should the object be placed?
-   Object type -- Which object type will be created?

Example CSV file for this import:

[Import-Standorte.csv :material-file-download:](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/Import-Standorte.csv){ .md-button .md-button--primary }

The structure of the CSV looks as follows:

??? example "Import Standort.csv"
    ```text
    objectName;Standort;objecttyp
    HEADQUARTER;Root location;C__OBJTYPE__BUILDING
    Basement;HEADQUARTER;C__OBJECT_TYPE__FLOOR
    First Floor;HEADQUARTER;C__OBJECT_TYPE__FLOOR
    Second Floor;HEADQUARTER;C__OBJECT_TYPE__FLOOR
    Third Floor;HEADQUARTER;C__OBJECT_TYPE__FLOOR
    RAUM 0.001;Basement;C__OBJTYPE__ROOM
    RAUM 0.002;Basement;C__OBJTYPE__ROOM
    RAUM 0.003;Basement;C__OBJTYPE__ROOM
    RAUM 0.004;Basement;C__OBJTYPE__ROOM
    RAUM 0.005;Basement;C__OBJTYPE__ROOM
    RAUM 0.006;Basement;C__OBJTYPE__ROOM
    RAUM 0.007;Basement;C__OBJTYPE__ROOM
    RAUM 0.008;Basement;C__OBJTYPE__ROOM
    RAUM 0.009;Basement;C__OBJTYPE__ROOM
    RAUM 0.010;Basement;C__OBJTYPE__ROOM
    RAUM 0.011;Basement;C__OBJTYPE__ROOM
    RAUM 0.012;Basement;C__OBJTYPE__ROOM
    RAUM 0.013;Basement;C__OBJTYPE__ROOM
    RAUM 0.014;Basement;C__OBJTYPE__ROOM
    RAUM 1.001;First Floor;C__OBJTYPE__ROOM
    RAUM 1.002;First Floor;C__OBJTYPE__ROOM
    RAUM 1.003;First Floor;C__OBJTYPE__ROOM
    RAUM 1.004;First Floor;C__OBJTYPE__ROOM
    RAUM 1.005;First Floor;C__OBJTYPE__ROOM
    RAUM 1.006;First Floor;C__OBJTYPE__ROOM
    RAUM 1.007;First Floor;C__OBJTYPE__ROOM
    RAUM 1.008;First Floor;C__OBJTYPE__ROOM
    RAUM 1.009;First Floor;C__OBJTYPE__ROOM
    RAUM 1.010;First Floor;C__OBJTYPE__ROOM
    RAUM 1.011;First Floor;C__OBJTYPE__ROOM
    RAUM 1.012;First Floor;C__OBJTYPE__ROOM
    RAUM 1.013;First Floor;C__OBJTYPE__ROOM
    RAUM 1.014;First Floor;C__OBJTYPE__ROOM
    RAUM 2.001;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.002;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.003;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.004;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.005;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.006;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.007;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.008;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.009;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.010;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.011;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.012;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.013;Second Floor;C__OBJTYPE__ROOM
    RAUM 2.014;Second Floor;C__OBJTYPE__ROOM
    RAUM 3.001;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.002;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.003;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.004;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.005;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.006;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.007;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.008;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.009;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.010;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.011;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.012;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.013;Third Floor;C__OBJTYPE__ROOM
    RAUM 3.014;Third Floor;C__OBJTYPE__ROOM
    ```

### Order in the CSV File

Since the locations build on each other, the order in the CSV file is crucial. The root location already exists. Within it, the hierarchy is:

Root location > Building > Floor > Room

Therefore, buildings come first in the CSV file, then floors, and finally rooms.

[![Location view](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/1-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/1-csv-standort.png)

Each row additionally contains the object type constant. You can find it in the object type configuration:

[![Object type configuration](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/2-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/2-csv-standort.png)

### Step-by-Step Instructions

1. Navigate to the CSV import under **Extras > Import > CSV Import**
2. Upload the CSV file and click **Prepare for Import**
3. Leave the settings in the upper area at the default values

[![CSV Import options](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/3-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/3-csv-standort.png)

4. Click **Prepare Mapping** and configure the assignments as shown in the screenshot

[![CSV Object Matching Profile](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/4-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/4-csv-standort.png)

5. Start the import

### Result

In the location view, you can now see the complete hierarchy:

[![Location view](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/5-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/5-csv-standort.png)

This is what the configuration of the custom-created object type **Floor** looks like:

[![Object type configuration](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/6-csv-standort.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-standorte/6-csv-standort.png)
