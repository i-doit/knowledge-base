---
title: CMDB-Explorer
description: The CMDB-Explorer graphically represents the [relations between objects](../../basics/object-relations.md). You can generate various views for dependencies so that you get a quick overview. These views can then be exported to various formats for further editing.
icon:
status:
lang: en
---

# CMDB-Explorer

The CMDB-Explorer graphically represents the [relations between objects](../../basics/object-relations.md). You can generate various views for dependencies so that you get a quick overview. These views can then be exported to various formats for further editing.

## Access the CMDB-Explorer

The CMDB-Explorer can be accessed both via the menu bar at the top and within an [object](../../basics/structure-of-the-it-documentation.md) via the associated icon above the [category](../../glossary.md) list.

[![Access the CMDB-Explorer](../../assets/images/en/evaluation/cmdb-explorer/1-ce.png)](../../assets/images/en/evaluation/cmdb-explorer/1-ce.png)

When you open the CMDB-Explorer via the icon from an object, this object is preselected as root object. The CMDB-Explorer is loaded without any preselected object when you open the CMDB-Explorer via the menu bar.

## Segmentation of the CMDB-Explorer

The CMDB-Explorer is split in three sections, which have the following roles:

-   **Content area**: This area is concerned with the graphical representation of the contents in the center.
-   **Information area**: This area is located to the left of the content area and can be used to obtain more detailed information.
-   **Toolbar**: The function toolbar is used to configure the view. It is located above the content area.

## Content Area

The content area is located at the center of the CMDB-Explorer. Here you can find all contents and with regard to representation and scope the contents correspond to the settings you made. The form of representation can be determined using [Profiles](./profiles-in-the-cmdb-explorer.md). The presented section in the content area can be moved at any time. To do so click the free area of the presentation, hold the mouse button and move the display. To show more relations of an object you can double-click on its tile. If more relations exist, these will be expanded. The information area contains further information about the selected object and is located to the left of the content area. The object is selected by simply clicking its tile. As soon as an object has been selected, the path to the root object is traced for illustration purposes.

[![Content Area](../../assets/images/en/evaluation/cmdb-explorer/2-ce.png)](../../assets/images/en/evaluation/cmdb-explorer/2-ce.png)

!!!info "Orientation of relations"
    The direction for the expansion of individual tiles depends on the orientation of the relation. For each relation there is a master and a slave object. Once an orientation has been chosen, it cannot be changed in the CMDB-Explorer, meaning that tiles expanding downwards can only show relations that would also expand downwards.

## Information Area

The information area is located at the left border of the CMDB-Explorer and displays additional information about the chosen object. The kind of information shown can be determined via the applied [profile](profiles-in-the-cmdb-explorer.md) of the CMDB-Explorer. Once an object has been selected, the **Show / Hide object type** button can be used to gray out all [objects of this type](../../basics/structure-of-the-it-documentation.md). If you wish to select a different object as root object, then the **Set as root** button can be used. This way, the centralization can be put to the currently activated object and the relations are built around this object. Via **Open object** the object is opened in i-doit so that you can see and edit its attributes. Object colors for each [object type](../../glossary.md) are displayed in the legend. It is also possible to gray out all objects of a type globally in the CMDB-Explorer.

[![Information Area](../../assets/images/en/evaluation/cmdb-explorer/3-ce.png)](../../assets/images/en/evaluation/cmdb-explorer/3-ce.png)

## Toolbar

The object which is displayed in a centralized way and which has the relations built around it is selected in the toolbar above the content area. In addition it is possible to choose the [profile](profiles-in-the-cmdb-explorer.md) for the representation. In addition to the **Default profile** a **Micro profile** is offered in the delivery state which allows you to display more information in a smaller area. The display can also be influenced by the **Service filter**. Conditions for objects and relations that are to be considered can be defined here. The service filters can be configured at **Extras → Services → Service filter**. The depth of the representation and the CMDB status of the objects can be set as conditions in addition to the type of the relation, its weighting and the displayed object types.

The orientation of the display can be adjusted using the **Change orientation** button. Here it is possible to let the representation be displayed either from top to bottom, or from left to right. The presentation from left to right is recommended for extensive visualizations. Moreover, it is possible to choose the form of display. Via the **Change form of display** button you can switch from the **Tree view** to a **Net view**. In the tree view it may happen that objects are displayed multiple times if they are related to other objects in different places. An object is displayed exactly once in the net view and all relations are generated from its tile. For more complex relation representations the tree view is recommended.

The zoom on the display can be adjusted using the **Zoom in** and the **Zoom out** buttons. The centering with a zoom level of 100% is carried out via the **Center and zoom to 100%** button. Alternatively, you can use the mouse wheel for zooming as well.

The **Export** button allows you to export the current content of the CMDB-Explorer to other formats, which can be used externally. Using the **Print** button will prepare the current screen section for printing. **Fullscreen** will expand the displayed are to a bigger surface, so that there is more room available for the representation.

[![Toolbar](../../assets/images/en/evaluation/cmdb-explorer/4-ce.png)](../../assets/images/en/evaluation/cmdb-explorer/4-ce.png)
