# Geo Coordinates

Each [object](../basics/structure-of-the-it-documentation.md) in i-doit can be tagged with geographic coordinates stating longitude and latitude.

Saving Geo Coordinates
----------------------

If not yet done, you can determine the geo coordinates of a location via various map and navigation services. The coordinates are saved in the **Location** [category](../basics/structure-of-the-it-documentation.md). Here you can find the attributes **Latitude** and **Longitude**.

[![geo-coordinates](../assets/images/en/use-cases/geo-coordinates/en_geo_coordinates.png)](../assets/images/en/use-cases/geo-coordinates/en_geo_coordinates.png)

Accessing Maps
--------------

Two buttons are displayed in the **Location** category as soon as the coordinates are saved. The **Google Maps** button opens a tab for the map service of the same name in the web browser. A tag shows the geo coordinates. The same applies to the **OpenStreetMap** button.

Inheriting Geo Coordinates
--------------------------

Each located object is situated within the location tree; this means that there is always a higher-level object (up to the **Root location**). The geo coordinates of a higher-level object can be inherited so that they are passed on to the subordinated objects with a spatial assignment. For this purpose, select the higher-level object in the **Location** attribute of the **Location** category. After clicking the **Inherit GEO coordinates** button the attributes **Latitude** and **Longitude** are automatically filled with the specifications of the higher-level object.

An automated inheritance process of object coordinates to all other objects with a spatial assignment does not take place.