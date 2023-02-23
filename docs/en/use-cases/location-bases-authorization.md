# Location-bases Authorization

i-doit enables the definition of a very fine-grained rights management to allow only limited access to the IT documentation for certain user groups. This also includes user rights which only affect specific [locations](./locations.md).

Example Task
------------

Mr. Smith is responsible for all servers at the Düsseldorf location. Mr. Smith's user authorizations shall be limited to the extent that he can see all servers at the Düsseldorf location and create new server [objects](../basics/structure-of-the-it-documentation.md). He shall have the right to edit all [categories](../basics/structure-of-the-it-documentation.md) of all servers at the location in Düsseldorf. But other servers or objects in other locations should not be accessible for Mr. Smith.

Configuration
-------------

Under **[Administration → Authorization system → Rights → CMDB](../efficient-documentation/rights-management/cmdb-right-management.md)** you set the the rights  **View** and **Edit**  for the **Person** object of Mr. Smith to the **Conditions**

*   **Objects underneath a location** and
*    **Category in Objects underneath a location** 

to enable reading and write permissions of objects and their categories.

Select Düsseldorf as **Parameter** in each case.

You have to set the **Create** right for ****Object(s) of type**** Server to enable the creation of new objects. To enable access to the categories of the newly created objects, the right **Categories in my created objects** has to be set for all categories. As an option, you can also set it only for the **Location** category so that a physical assignment becomes possible.

In order that these limitations take also effect in the [object browser](../basics/object-relations.md), in the [location view](./locations.md) as well as in the [CMDB Explorer](../evaluation/cmdb-explorer/index.md), you have to define advanced settings under **Administration → System settings → Expert settings**:

| Key | Value |
| --- | --- |
| **auth.use-in-cmdb-explorer** | **1** |
| **auth.use-in-object-browser** | **1** |
| **auth.use-in-location-tree** | **1** |

You can find a detailed explanation of these settings in the article [CMDB (User Rights Management)](../efficient-documentation/rights-management/cmdb-right-management.md).

Handling
--------

The process for creating a new server by Mr. Smith is as follows: He creates a new server, edits the **Location** category and assigns the server to a location under Düsseldorf.