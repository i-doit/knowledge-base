---
title: Object Relations
description: Vordefinierte Objekttypen
icon: relations
status:
lang: en
---

# Object Relations

[Objects](structure-of-the-it-documentation.md) generally do not exist separately in i-doit but are in relation to each other. The servers are contained in racks, admins maintain servers, an operating system with software is running on a server ... In this article we will elaborate on the basic concepts of object relations.

## Relation Types

Objects can be in various types of relations. To provide clarification each relation receives a type. Many pre-defined types of relations are already supplied by i-doit in the default installation. A listing of all these types can be found at **Administration → Predefined content → Object relation types**.

[![Relation Types](../assets/images/en/basics/object-relations/1-or.png)](../assets/images/en/basics/object-relations/1-or.png)

Below the list of relation types a new type can be created using the **Add new value** button. If you wish to use this relation in a custom category, you have to define it as "Implicit".

[![Add new value](../assets/images/en/basics/object-relations/2-or.png)](../assets/images/en/basics/object-relations/2-or.png)

Already documented object relations are listed in **Extras → CMDB → Relations** according to their respective type. When you click on **All** in the navigation tree to the left, all object relations are loaded regardless of their type. With large IT documentations it may take a while to load the list.

[![object relations](../assets/images/en/basics/object-relations/3-or.png)](../assets/images/en/basics/object-relations/3-or.png)

## Relation Objects

When creating a relation between two objects, a third object of the [type](structure-of-the-it-documentation.md) **Relations** is created in the background. The object title of this object consists of the object title of the master object, followed by the description and the object title of the slave object.

Example:

| Master object      | Description of the relation | Slave object |
| ------------------ | --------------------------- | ------------ |
| PDU-HQ-Intern-01-A | **supplies power**          | ESX1         |

The relation object is required to save characteristics of the relation as [attributes](structure-of-the-it-documentation.md). This includes:

-   **Relation type**: see above
-   **Weighting**: see below
-   **Service** (optional): The object relation can be directly assigned to a service.

As it is already obvious, an object relation consists of a master and a slave object. This is a weighted relation. The slave object is dependent on the master object.

[![Relation Objects](../assets/images/en/basics/object-relations/4-or.png)](../assets/images/en/basics/object-relations/4-or.png)

The direction of the relation (which object is the master and which one is the slave) has consequences for the [CMDB explorer](../evaluation/cmdb-explorer/index.md). Object relations are displayed recursively either upwards or downwards in the tree view. Master objects are below the slave objects in the [standard profile](../evaluation/cmdb-explorer/profiles-in-the-cmdb-explorer.md).

!!! info "Relation objects do not require a [license](../maintenance-and-operation/activate-license.md)."

## Relations Category

Relations to other objects are gathered in the **Relations** [category](structure-of-the-it-documentation.md) per object. This category is assigned to each object type in a fixed way and can be opened via the arrows icon.

[![Relations Category](../assets/images/en/basics/object-relations/5-or.png)](../assets/images/en/basics/object-relations/5-or.png)

## Implicit versus Explicit Relations

Relations do not only have different types (see above) but they are also being created implicitly or explicitly. Implicit relations originate from categories. If the **Location** category is edited, for example, and an object which is higher in the hierarchy is selected in the **Location** attribute, then the implicit relation of the type **Location** will be created automatically in the background. This implicit relation is also shown in the **Relations** category at **Extras → CMDB → Relations → Locations**.

If you want to build a relation between two objects independent of the categories and their attributes, an explicit relation will be created. This explicit relation is created in the **Relations** category. The object where you are during that moment is pre-selected as **Object 1**. The object with which **Object 1** is to be put into a relation has to be selected under **Object 2**. You also have to choose the direction between the two objects. **Dependency** is selected as the default relation type, as it is already set as explicit at **Administration → Predefined content → Object relation types**. But you can also easily define a new explicit relation and use it immediately. This can be carried out via the slips-icon, similar to the procedure with Dialog+ fields.

[![Implicit versus Explicit Relations](../assets/images/en/basics/object-relations/6-or.png)](../assets/images/en/basics/object-relations/6-or.png)

When creating a new explicit relation type, the type and the descriptions can be defined from the corresponding object views.

### Implicit or explicit?

So what is better: Should you use implicit or explicit relations? The answer is: implicit relations. Categories and attributes are central elements for structuring the IT documentation. Users document in categories and that is also where users look for information. Therefore it is better to document unspecific relations of the type **Dependency** explicitly in a category in which implicit and explicit relations are varied. Both possibilities can be evaluated, but only the implicit relations are transparent.

## Weighting

Each relation receives a weighting, as already mentioned above. The weighting is specified as attribute in the relation object. Values between **1** and **10** are possible as weighting. They express how dependent the slave object is on the master object. **1** means **very important**, while **10** means **unimportant. 5** is the golden mean, it stands for **important** and represents the default value.

Example: A power supply receives its power from an UPS, so the weighting could be **1 (very important)** as the power supply could not function without a usable UPS. However, if a node fails within the web cluster, other nodes take on its job. This means that the dependency to higher-level services is not as strong and could lie somewhere between **5 (important)** and **10 (unimportant)**.

The Analysis module uses this weighting in combination with services and [Network Monitoring](../automation-and-integration/network-monitoring/index.md) to evaluate which services are affected by malfunctions.

## Parallel Relations

Besides the direction-based relations with master and slave objects there exist also parallel relations in i-doit. The parallel relations also set two objects in relation to each other, however, without expressing a dependency on each other.

Example: When a web cluster with multiple nodes is documented in i-doit, the nodes act independently of each other. Only the functioning of the cluster depends on all nodes. The **Cluster members** category (or the [mirrored category](structure-of-the-it-documentation.md) **Cluster memberships**) creates parallel object relations between the cluster members in the background.

A listing of all parallel relations can be found at **Extras → CMDB → Relations → Parallel relations**. They cannot be created by the user but are created implicitly and automatically in the background.

[![Parallel Relations](../assets/images/en/basics/object-relations/7-or.png)](../assets/images/en/basics/object-relations/7-or.png)

## Object Relation in a Custom Category

Object relations can be documented in [custom categories](custom-categories.md). You need to distinguish between two field types:

-   **Object-Browser**: No relation object is created. The relation to be documented here between two objects is not listed in the **Relations** category and the [CMDB explorer](../evaluation/cmdb-explorer/index.md) does not process these relations.
-   **Object-Relation**: Here only an implicit relation type can be given as **Addition**. Explicit relations are not shown.

!!! success "Object browser or object relation?"
    As with implicit and explicit relationships, the question here is also: Which field type is better? Here too, the answer is clear: The **object relationship** has an additional benefit and is therefore preferable to the **object browser** field type.
