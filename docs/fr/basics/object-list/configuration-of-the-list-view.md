# Configuration of the List View

You can configure the view of the [object lists](./index.md) individually per list and per user.

## Accessing the Configuration

You can reach the configuration for the corresponding object list with the [![Gear](../../assets/images/en/basics/object-list/configuration-of-the-list-view/1-cotlv.svg)](../../assets/images/en/basics/object-list/configuration-of-the-list-view/1-cotlv.svg) button in the [navigation and filter bar](./navigation-and-filtering.md). Another possibility is the activation via **Administration → User settings → Object lists →[Object type]**.

[![Accessing the Configuration](../../assets/images/en/basics/object-list/configuration-of-the-list-view/2-cotlv.png)](../../assets/images/en/basics/object-list/configuration-of-the-list-view/2-cotlv.png)

## Attribute selection

Similar to the [report manager](../../evaluation/report-manager.md) you can define the columns via the selection of the category and the included attribute.

First you select a [global, specific](../../basics/structure-of-the-it-documentation.md) or [custom](../custom-categories.md) category in the drop-down menu. You can filter the list of categories with a text field.

When selecting a category, the attributes which can be defined as a column are displayed. Add an attribute to the selected attributes with a click on the [![button-add](../../assets/images/en/basics/object-list/configuration-of-the-list-view/3-cotlv.svg)](../../assets/images/en/basics/object-list/configuration-of-the-list-view/3-cotlv.svg) button .

You can manipulate the list of selected attributes and change their order per drag and drop. The higher the object is in the selection, the further it is shown on the left of the object list. Remove an attribute with the [![button-cancel](../../assets/images/en/basics/object-list/configuration-of-the-list-view/4-cotlv.svg)](../../assets/images/en/basics/object-list/configuration-of-the-list-view/4-cotlv.svg) button.

!!! info "Restrictions"

    The following restrictions apply to the selection of attributes:

    -   Not all attributes of all categories are available.
    -   The number of attributes is limited to **10**.

Attributes originating from [list categories (multi-valued)](../../basics/structure-of-the-it-documentation.md) can be presented in different ways. With the drop-down menu for the presentation of grouped data you can display the attributes either comma-separated in parallel or as a list one below each other. An example is the `Host addresses` attribute of the `Host address` category.

!!! success "Tip"

    In the default installation of i-doit the [ID](../unique-references.md) is displayed in each object list. As it is not relevant for conventional use, you can remove the corresponding column from the lists. This makes also sense for reasons of clarity.

!!! info "Performance"

    Object lists with a great number of attributes may lead to a reduced performance. Should you observe a loss of performance, decrease the number of selected attributes or expand your [system resources](../../installation/system-requirements.md).

[![Attribute selection](../../assets/images/en/basics/object-list/configuration-of-the-list-view/7-cotlv.png)](../../assets/images/en/basics/object-list/configuration-of-the-list-view/7-cotlv.png)

## Presort Columns

You can also specify with which sorting the object list is to be loaded. Beside some attributes you can also click a selection button. Determine if the selected attribute should be sorted in an ascending or descending order in the **Sorting** drop-down menu.

Without defined sorting the objects are sorted by their [ID](../unique-references.md).

!!! info "Restrictions"

    The following restrictions apply to the sorting of attributes:

    -   Not all attributes can be sorted.
    -   Subsequent sorting with the column headers is not possible with an object list with more than **10.000** objects. You can modify this [restriction](./advanced-settings.md).

## Affecting Filtering

You can prefilter an object list already during loading. Select the attribute in the drop-down menu for **Default filter** and enter the value for filtering in the text field on the right.<br>
If you do not want to select an attribute to be filtered each time in the list view, the filter can be set for all fields.

## Different Ways to Open an Object

Often a look at the object list is not enough to retrieve all required attributes. Therefore you can open an object via the list. You have two options:

-   Open the object by clicking the respective row in the object list. For this purpose, select the checkbox **Activate, if you want to click the row, instead of the "objectlink", to open the object**.
-   Open (and edit) the object with the selection of the checkbox of an object and the **Edit** button.

You can activate the first option for all users and all object lists simultaneously. The button **Activate rowclick for object lists** is under **Administration → System tools → Cache / Database → Database.**

## Reset Configuration

Each object list has a default configuration. If you want to reset the object list to its default settings, click the **Restore default list configuration** button.

## Set Configuration as Default

When you want an object list to become the default list, click the **Define as standard** button in the field **Define configuration as standard.** Object lists which have already been changed by users are not affected. Consequently, this change concerns new users and users who still haven't changed an object list.

[![Set Configuration as Default](../../assets/images/en/basics/object-list/configuration-of-the-list-view/5-cotlv.png)](../../assets/images/en/basics/object-list/configuration-of-the-list-view/5-cotlv.png)

## Assign the Configuration to Other Users

If you want to predefine a specific object list for other users, select it in the field **Set configuration for other users** via an object browser. Afterwards, the selection is confirmed with the **Define** **configuration** button.

[![Assign the Configuration to Other Users](../../assets/images/en/basics/object-list/configuration-of-the-list-view/6-cotlv.png)](../../assets/images/en/basics/object-list/configuration-of-the-list-view/6-cotlv.png)

## Saving the Configuration

All changes of the configuration are accepted with the **Save** button.

!!! info "Browser Cache"

    Should the list view not correspond to the configuration when activating the object list, it helps to empty the cache of the web browser.

## Authorization to Edit the List View

With the [user rights management](../../efficient-documentation/rights-management/index.md) you can assign rights and determine which persons or person groups will be authorized to configure the list view and preset it for other users.
