**Contents**

*   1[Saving Geo Coordinates](#GeoCoordinates-SavingGeoCoordinates)
*   2[Accessing Maps](#GeoCoordinates-AccessingMaps)
*   3[Inheriting Geo Coordinates](#GeoCoordinates-InheritingGeoCoordinates)

Each [object](/display/en/Structure+of+the+IT+Documentation) in i-doit can be tagged with geographic coordinates stating longitude and latitude.

Saving Geo Coordinates
----------------------

If not yet done, you can determine the geo coordinates of a location via various map and navigation services. The coordinates are saved in the `**Location**` [category](/display/en/Structure+of+the+IT+Documentation). Here you can find the attributes `**Latitude**` and `**Longitude**`.

![](/download/attachments/61015771/en_geo_coordinates.png?version=1&modificationDate=1492690694184&api=v2)

Accessing Maps
--------------

Two buttons are displayed in the `**Location**` category as soon as the coordinates are saved. The `**Google Maps**` button opens a tab for the map service of the same name in the web browser. A tag shows the geo coordinates. The same applies to the `**OpenStreetMap**` button.

Inheriting Geo Coordinates
--------------------------

Each located object is situated within the location tree; this means that there is always a higher-level object (up to the `**Root location**`). The geo coordinates of a higher-level object can be inherited so that they are passed on to the subordinated objects with a spatial assignment. For this purpose, select the higher-level object in the `**Location**` attribute of the `**Location**` category. After clicking the `**Inherit GEO coordinates**` button the attributes **`Latitude`** and **`Longitude`** are automatically filled with the specifications of the higher-level object.

An automated inheritance process of object coordinates to all other objects with a spatial assignment does not take place.