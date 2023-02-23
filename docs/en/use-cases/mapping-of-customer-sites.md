**Contents**

*   1[Approach](#MappingofCustomerSites-Approach)
*   2[Configuration](#MappingofCustomerSites-Configuration)
*   3[Application](#MappingofCustomerSites-Application)

Customers often have several locations which shall be represented in a hierarchy and individually assigned to IT components.

Approach
--------

We provide our customers with hardware and software components. Therefore, it is essential to document both our customers and the IT components they use. To generate a simple overview, we want to use the i-doit location view.

![](/download/attachments/12451851/customer_location_view.png?version=1&modificationDate=1440591731978&api=v2)![](/download/attachments/12451851/schulzesx01_location.png?version=1&modificationDate=1440591732623&api=v2)

Configuration
-------------

All you need for the configuration can be found in the `**O**`**`bject Type Configuration`** under `**Administration → CMDB Settings**`. Save customers in the independent object type `**Customer**`. Define the object type as **`location`**. The categories `**Location**` and `**Locally assigned objects**` should be assigned at least. Further categories may be useful (`**Organization**`, `**Address**`, `**Email addresses**`, `**Contact assignment**`, `**Access**`) to document the customers as detailed as needed.

![](/download/attachments/12451851/customer_object_type_configuration.png?version=1&modificationDate=1440591732321&api=v2)![](/download/attachments/12451851/contact_object_view.png?version=2&modificationDate=1440591919216&api=v2)

Application
-----------

When creating a new customer, the customer should be assigned to the [root location](/display/en/Glossary). Nested constructs with sub-customers are feasible as well. For this, sub-customers are locally assigned to other customers. Below the customers, any number of objects can be assigned. Use the category "Locally assigned objects" or alternatively the category "Location" within the objects that you want to assign.