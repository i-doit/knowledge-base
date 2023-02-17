# Structure of the IT Documentation

The topic of this article is how i-doit structures the [IT documentation](../glossary.md). Here we focus especially on the vocabulary which is used in i-doit, how these terms are related to each other and how this is represented in the Web GUI.

Navigation
----------

Upon [logging in,](./initial-login.md) the [dashboard and widgets](./dashboard-and-widgets.md) are displayed. From here you can start to explore the IT documentation. Almost all functionalities of i-doit can be accessed from the main navigation bar (the black bar at the top).

[![Navigation](../assets/images/en/basics/structure-of-the-it-documentation/1-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/1-sotitd.png)

For better orientation you can take a look at the bread crumb navigation. From here you can access pages which are higher in the hierarchy.

[![Navigation](../assets/images/en/basics/structure-of-the-it-documentation/2-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/2-sotitd.png)

Groups, Types and Categorizations
---------------------------------

Object type groups comprise object types which instantiate objects, which in turn inherit categories, which then include attributes. Got it? Again from the start:

[![Groups, Types and Categorizations](../assets/images/en/basics/structure-of-the-it-documentation/3-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/3-sotitd.png)

### Object Type Group

It is not uncommon that a lot of object types are in use in a living and well-maintained IT documentation. Object types of the same kind can be grouped in order to have a clear overview of this abundance of data. These object type groups appear in the main navigation bar (top section) of i-doit.

[![Object Type Group](../assets/images/en/basics/structure-of-the-it-documentation/4-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/4-sotitd.png)

In our example, we take a closer look at the object type group **Hardware**.

[![Object Type Group](../assets/images/en/basics/structure-of-the-it-documentation/5-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/5-sotitd.png)

### Object Type

We refer to the combination of all objects of the same type as object type. Examples are **Router**, **Server** or **Applications**. Usually, this combination is also called a "Class". In ITIL© the term "CI Type" is used.

i-doit already contains a lot of pre-configured object types in the default installation. If those are not enough, you can create your own [custom object types](./custom-object-types.md).

An [object list](./object-list/index.md) exists for each object type. All objects that are associated with the selected object type are listed here, including some attributes. As an example we take a look at the object list for the object type "**Virtual host"**.

[![Object Type](../assets/images/en/basics/structure-of-the-it-documentation/6-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/6-sotitd.png)

### Object

You have to decide for each artefact to be documented as what you want to save it. For example, often a single server is seen as a product consisting of multiple parts. In this case, a server is created as an object in i-doit. In i-doit are all things we document in an IT documentation objects. It is of no importance if it is a physical device, like a server or client, or if it is a logical construct, such as a network or a service. An object is defined by its object type, which in turn determines what attributes can be filled with values for the object. In ITIL© the term "Configuration item (CI)" is used, whereas the term "Asset Value" is common in the asset management. We want to establish a more abstract and a more general and flexible definition by using the "Object" term.

Some objects exist in the default installation of i-doit and they are essential for proper functionality. This includes user objects of the object type "Persons" and also "Person groups" for permissions and "[Layer-3 networks](../use-cases/ip-adress-management.md)". Furthermore, invisible objects do exist, e.g. the "Root location" for locations. These cannot be deleted.

Each object in i-doit receives a title. The title is documented as an attribute in the "General" category. This attribute is synonymously also called "Name" or "Object link".

[![Object](../assets/images/en/basics/structure-of-the-it-documentation/7-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/7-sotitd.png)

In this example, we focus on the object with the object title **ESX1**. You can get there with a click on the object link in the object list (as mentioned above).

### Category

Topically coherent attributes are summed up per object in categories. Three types of categories exist: global ones, specific ones and [customized categories](./custom-categories.md). They are additionally divided into single-value and multi-value categories (list categories). Some categories are mirrored and show the same relation from another point of view. Others serve as a read-only point of view. Some categories are assigned to all object types in a fixed way and as such to each object. Others can be flexibly added or removed per object type. Last but not least special categories such as **General** or **Overview page** exist.

Categories are displayed in the left navigation tree in the object view.

[![Category](../assets/images/en/basics/structure-of-the-it-documentation/8-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/8-sotitd.png)

The static categories are listed as icons above the left navigation tree.

[![Category](../assets/images/en/basics/structure-of-the-it-documentation/9-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/9-sotitd.png)

Usually, a category has two views: one for reading and one for editing. In order to edit the attributes in a category the **Edit** button in the action bar can be clicked.

[![Category](../assets/images/en/basics/structure-of-the-it-documentation/10-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/10-sotitd.png)

For our example we take a closer look at the Model category.

[![Category](../assets/images/en/basics/structure-of-the-it-documentation/11-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/11-sotitd.png)

[Categories are assigned to object types](./assignment-of-categories-to-object-types.md), not to objects. Within an object type all objects have the same categories assigned to them.

#### Overview Page

The overview page is displayed on the selection of an object in the web GUI of i-doit. It consists of the **General** category and more optional categories which are assigned to the object type. These can be selected or deselected and also be sorted in the object type configuration.

[![Overview](../assets/images/en/basics/structure-of-the-it-documentation/12-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/12-sotitd.png)

#### General Category

The **General** category belongs to those categories which are fixed components of each object. Therefore you cannot deselect it per object type. Important attributes, such as the object title, SYS-ID and the [CMDB state and condition](./life-and-documentation-cycle.md), can be found there.

[![General](../assets/images/en/basics/structure-of-the-it-documentation/13-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/13-sotitd.png)

#### Global Category

A global category can generally be assigned to all object types, so that their attributes are available to the corresponding objects. Example: **Model** category.

#### Specific Category

A specific category is different from a global category in its very specific focus, which is only suitable for just one or a few object types. An example is the **Rack** category, which is assigned to the object type of the same name and offers the user a rack view.

#### Single-Value Category

Each attribute of a single-value category can be documented just once per object. An example is the **Accounting** category: The information of the inventory number, cost unit and so on are only needed once. The counterpart to this is the multi-value category.

#### Multi-Value Category

If the attributes of a category can be documented more than once per object, then this will be referred to as a multi-value category or a list category. An example is the **CPU** category. If there is a multi-socket system, each CPU can be documented separately with frequency, number of cores and so on. The counterpart to this is the single-value category.

#### Custom Category

A category which has been created and configured with one or more attribute fields by a user is marked as [custom](./custom-categories.md) in i-doit.

#### Mirrored Category

If two or more objects are in relation to each other, then this is documented in the category which is defined for this purpose. For example, you can store any number of persons, person groups etc. as contact for an object in the category **Contact assignment**. There is a further category called **Assigned objects** so that you can also see for the persons and person groups to which objects they are assigned as contacts. As the same information is available in this additional category, but is saved only once and just displayed in a different context, this is called a mirrored category.

#### View Category

In some categories it is not possible to store attributes per object. These categories serve the evaluation of data which is stored in another way. The processed data cannot be edited. An example is the **Object vitality** category, an evaluation of the **CPU**, **Memory**, **Port** and **Software assignment** categories.

### Attribute

An attribute is a documented value belonging to an object. Attributes of the same type are combined in i-doit. Example: The **Serial number** attribute in the **Model** category.

[![Attribute](../assets/images/en/basics/structure-of-the-it-documentation/14-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/14-sotitd.png)

Important attributes of different categories are combined to one view, which is shown above each category. These primary attributes are **SYS-ID**, **Purpose** (both in the **General** category), **Relationship**, **Location**, **Contact assignment** and **Primary access URL** (**Access** category). Additionally, a QR code which contains the link to the overview page is shown next to them.

[![Access](../assets/images/en/basics/structure-of-the-it-documentation/15-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/15-sotitd.png)

### Attribute Field

Attributes of objects are saved and edited via form fields in the web GUI of i-doit. Hence these fields are called attribute fields. They can vary: There are single-line and multi-line text fields, date fields, HTML editors, object browsers, [dialogue-plus fields](./dialog-admin.md) and many more.

[![### Attribute Field](../assets/images/en/basics/structure-of-the-it-documentation/16-sotitd.png)](../assets/images/en/basics/structure-of-the-it-documentation/16-sotitd.png)

Relationships
-------------

IT components can not only be documented individually, but they can also be put in relation to each other. There are already various pre-configured types of relationships which can be adjusted and modified. Each relationship is a separate object (with no need for a license) which is automatically created, edited or deleted.