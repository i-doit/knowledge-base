---
title: Category Folders
description: With category folders, you organize categories within object types in a custom folder structure.
icon:
status:
lang: en
---
# Category Folders

With category folders, you organize categories within object types in a custom folder structure. You can create your own folders, move categories, and adjust the order.


[![category folders](../../../assets/images/de/administration/kategorieordner.png)](../../../assets/images/de/administration/kategorieordner.png)

## Permissions

You need the **Category Folders** permission in the **Administration** area. The person group **admin** has this permission by default.

## Usage

1. First, select an object type.
2. Use one of the following options:
    -   **Rearrange**: Move each category to the desired position via drag and drop.
    -   **Move element**: Hover over a category and click the button. A popup opens where you select the target location.
    -   **Add**: Create a new category folder with a custom name.

!!! tip "Rearrange button"
    With the **Rearrange** button, categories or folders can be quickly moved to any position via **drag & drop**. You can also use the **Move** button to open the **Move element** popup.

!!! tip "Move element"
    The **Move element** button is preferred when a category should be moved into a folder. The function also offers a search function for categories.

!!! tip "Add category folder"
    Click the **Add** button to create a category folder and select the storage location of the folder.

!!! note "Sorting"
    Sorting of categories is disabled when an object type has been edited with the **Category Folders** function, since the configured order should not be changed.

!!! abstract "Reset category folders for an object type"
    With the **Reset** button, the changes are undone and the created category folders are deleted.

## Hide categories

As of i-doit version XX, you can hide single categories for an object type. This helps when an object type carries a category you do not want to maintain, for example because the same data is already documented through another category.

1. Select the object type.
2. Hover over the category and click the eye icon.

[![hide category](../../../assets/images/de/administration/kategorieordner-ausblenden.png)](../../../assets/images/de/administration/kategorieordner-ausblenden.png)

The category is shown in grey and italics in the configuration, and the icon changes to a crossed out eye. Use the same icon to show the category again.

[![hidden category](../../../assets/images/de/administration/kategorieordner-ausgeblendet.png)](../../../assets/images/de/administration/kategorieordner-ausgeblendet.png)

For the selected object type, a hidden category disappears from:

-   the category tree of the object
-   the overview page of the object
-   the category selection of the list edit

!!! note "Only for the selected object type"
    Hiding applies exclusively to the object type you configure it in. The same category stays visible on other object types.

!!! warning "Hiding is not a permission"
    Existing entries of the category are kept and stay accessible through the API, reports and exports. If you want to restrict access, use the [permission management for the CMDB](../../../efficient-documentation/permission-management/cmdb.md).
