# Locations

The location of hardware and other components is an essential part of i-doit. This article explains the documentation of locations and how you place [objects](../basics/structure-of-the-it-documentation.md).

Overview
--------

In the default installation i-doit already supplies [object types](../basics/structure-of-the-it-documentation.md) which are suitable for the documentation of locations - you can use them or hide them:

*   **Country**
*   **City**
*   **Building**
*   **Room**
*   **Rack**

Beside these object types there are [categories](../basics/structure-of-the-it-documentation.md) for each object where you can store the location:

*   **Location**: Information about the object which is physically on a higher-level
*   **Locally assigned objects**: List of objects which are physically on a lower level

The locations are documented in a tree structure. With this method you can prevent a multiple local assignment of objects which is impossible in physical terms.

Building the Location Path
--------------------------

On top is the **Root Location** object and all other locations are subordinate to this object. You cannot delete this object.

We use a printer as an example, it is located in an office room and the office room is assigned to a building:

1.  Create a building and allocate it to the **Root Location** via the **Location** category.
2.  Create a room and assign it to the building via the **Location** category.
3.  Create printer and assign it to the room via the **Location** category.

With this method you generate a so-called location path: **Root Location → Building → Room → Printer**.

[![locations-path](../assets/images/en/use-cases/locations/1-loc.png)](../assets/images/en/use-cases/locations/1-loc.png)

With every location object the associated subordinated object is displayed in the **locally assigned objects** category. You can also edit the location path via this category.

[![locations-path](../assets/images/en/use-cases/locations/2-loc.png)](../assets/images/en/use-cases/locations/2-loc.png)

Define an Object as Location
----------------------------

When you want to define an object – for example, a room – also as a location for other objects, you have to activate their corresponding object type. This can be carried out under **Administration→ CMDB settings → Object type configuration → <Object type group> → <Object type> → Location**. For the above mentioned object types, the option is already set to **Yes**.

Configuration of the Location Path
----------------------------------

You can configure the location path for each tenant.

| Option | Data type | Default value | Description |
| --- | --- | --- | --- |
| **Administration** → System settings → Tenantsettings → Graphical interface → String for separation of locations  <br>** | String | **>** | Which string shall be used to separate the objects of a location path from one another? |
| **Administration** → System settings → Tenantsettings** → Maximum lengths → Object title in location path  <br>** | Positive integer | **16** | How many characters per object are allowed for an object title in the location path? A longer string of characters is cut off. |
| **Administration** → System settings → Tenantsettings** → Maximum lengths → Full Length location path** | Positive integer | **40** | How many characters are allowed for the location path? A longer string of characters is cut off. |

Positioning of Hardware in the Rack
-----------------------------------

You can also use server racks as locations to [position hardware in the racks](../evaluation/rack-view.md).

Chassis
-------

A similar method is used in order to equip chassis with the corresponding modules. This feature is available in the object types

*   **Blade Chassis** and **Blade Server** as well as
*   **Switch Chassis** and **Switch** (as module)

The actual documentation is carried out in the **Chassis** category folder. By allocating a module in the  **Chassis → Assigned devices** category, you also generate a location relation.

Geographical Coordinates
------------------------

In the **Location** category you can store [geographical coordinates with latitude and longitude](./geo-coordinates.md). In this way links to the known map services are generated and the object is located on their maps.

Location View
-------------

You can navigate through all location paths with the left navigation menu under **Location View**. You can display or hide the tree structure. An object which is opened in the main contents section is highlighted in the **Location View**.

[![locations-standort-ansicht](../assets/images/en/use-cases/locations/3-loc.png)](../assets/images/en/use-cases/locations/3-loc.png)

Logical Locations
-----------------

A documented workplace receives a person as logical location. You can also assign workplaces to physical locations. The **Location View** (see above) can either represent physical or logical locations or a combination of both. This option is a [user-defined](../user-authentication-and-management/builtin-authentication/creating-a-local-user.md) option.

Floor Plan
----------

The [Floorplan](../i-doit-pro-add-ons/floorplan.md) add-on is suitable for creating two-dimensional plans on basis of the location paths.

User Rights for Locations
-------------------------

For each user or group of users you can assign [write permissions, read permissions and many other authorizations for locations and subordinated objects](./location-bases-authorization.md).
