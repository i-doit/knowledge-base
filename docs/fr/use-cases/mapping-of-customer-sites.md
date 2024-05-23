# Mapping of Customer Sites

Customers often have several locations which shall be represented in a hierarchy and individually assigned to IT components.

Approach
--------

We provide our customers with hardware and software components. Therefore, it is essential to document both our customers and the IT components they use. To generate a simple overview, we want to use the i-doit location view.

[![mapping-ocs](../assets/images/en/use-cases/mapping-of-customer-sites/1-mocs.png)](../assets/images/en/use-cases/mapping-of-customer-sites/1-mocs.png)[![mapping-ocs](../assets/images/en/use-cases/mapping-of-customer-sites/2-mocs.png)](../assets/images/en/use-cases/mapping-of-customer-sites/2-mocs.png)

Configuration
-------------

All you need for the configuration can be found in the **O****bject Type Configuration** under **Administration → CMDB Settings**. Save customers in the independent object type **Customer**. Define the object type as **location**. The categories **Location** and **Locally assigned objects** should be assigned at least. Further categories may be useful (**Organization**, **Address**, **Email addresses**, **Contact assignment**, **Access**) to document the customers as detailed as needed.

[![mapping-ocs](../assets/images/en/use-cases/mapping-of-customer-sites/3-mocs.png)](../assets/images/en/use-cases/mapping-of-customer-sites/3-mocs.png)[![mapping-ocs](../assets/images/en/use-cases/mapping-of-customer-sites/4-mocs.png)](../assets/images/en/use-cases/mapping-of-customer-sites/4-mocs.png) 

Application
-----------

When creating a new customer, the customer should be assigned to the [root location](../glossary.md). Nested constructs with sub-customers are feasible as well. For this, sub-customers are locally assigned to other customers. Below the customers, any number of objects can be assigned. Use the category "Locally assigned objects" or alternatively the category "Location" within the objects that you want to assign.