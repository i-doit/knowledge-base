---
title: Floorplan
description: Floorplan
icon: addons/floorplan
status:
lang: en
---

You can find practical examples on our [Blog](https://www.i-doit.com/blog/floorplan-add-on-1-5-der-new-grundriss-editor/).

With the [add-on](./index.md) **Floorplan**, you assign graphical plans to location [objects](../basics/it-documentation-structure.md), add a scale to them, and position the spatially assigned objects within them.

[![Floorplan](../assets/images/de/i-doit-add-ons/floorplan/1-fp.png)](../assets/images/de/i-doit-add-ons/floorplan/1-fp.png)

The add-on is installed via the [Admin Center](./index.md). Afterwards, it can be accessed under **Add-ons → Floorplan**.

[![Installed](../assets/images/de/i-doit-add-ons/floorplan/2-fp.png)](../assets/images/de/i-doit-add-ons/floorplan/2-fp.png)

## Assigning rights

Under **Administration → Permissions → Floorplan**, [permissions for persons and person groups](../efficient-documentation/permission-management/index.md) can be adjusted.

[![Assigning rights](../assets/images/de/i-doit-add-ons/floorplan/3-fp.png)](../assets/images/de/i-doit-add-ons/floorplan/3-fp.png)

## Creating a floorplan

[![Creating a floorplan](../assets/images/de/i-doit-add-ons/floorplan/4-fp.png)](../assets/images/de/i-doit-add-ons/floorplan/4-fp.png)

To create a floorplan:

1. In the location view, click the **Plus** icon next to the desired location object and save the floorplan.
2. Click **Edit** to modify the plan.
3. Via **Change background**, you place a graphic (e.g., a floor layout) in the background. Alternatively, you can create a layout directly in the **Layout editor**.
4. With **Set scale**, you add a scale to the graphic. This way, objects are later displayed to scale according to their form factor.

Supported graphic formats: `bmp`, `png`, `jpg`, `jpeg`, `gif` (max. **5 MB**). You can also create different **layers** and show or hide them.

## Assigning and placing objects

Via the location list, you display all spatially assigned objects:

[![Assigned objects](../assets/images/de/i-doit-add-ons/floorplan/9-fp.png)](../assets/images/de/i-doit-add-ons/floorplan/9-fp.png)

To place objects on the floorplan:

1. Hover over an object in the list -- the green **Plus** icon appears.
2. Click the **Plus** icon to place the object. Alternatively, place all assigned objects at once using the button in the room row.
3. Click **Edit** to select and move already placed objects by clicking.

## Customizing and shaping objects on the floorplan

In the left area, you customize selected objects. Select an object to use the following options:

**Orientation**: Define the orientation (top, bottom, right, left). A triangle points in the chosen direction.

[![Change position](../assets/images/de/i-doit-add-ons/floorplan/15-fp.svg)](../assets/images/de/i-doit-add-ons/floorplan/15-fp.svg) **Select and create object shape**: The shape of the object can be customized freely. Custom shapes can be saved.

[![Center](../assets/images/de/i-doit-add-ons/floorplan/16-fp.svg)](../assets/images/de/i-doit-add-ons/floorplan/16-fp.svg)**Center on object**: The selected object is centered in the middle of the screen.

[![Rotate](../assets/images/de/i-doit-add-ons/floorplan/17-fp.svg)](../assets/images/de/i-doit-add-ons/floorplan/17-fp.svg) **Rotate object**: The object can be rotated freely.

[![Unposition object](../assets/images/de/i-doit-add-ons/floorplan/18-fp.svg)](../assets/images/de/i-doit-add-ons/floorplan/18-fp.svg) **Remove positioning**: The object disappears from the floorplan but can be added again via the object list.

[![radius](../assets/images/de/i-doit-add-ons/floorplan/19-fp.png)](../assets/images/de/i-doit-add-ons/floorplan/19-fp.png) **Define object radius**: Opens a popup to color the radius, display it transparently, and configure it in different units of measurement.

[![icon](../assets/images/de/i-doit-add-ons/floorplan/20-fp.png)](../assets/images/de/i-doit-add-ons/floorplan/20-fp.png) **Apply form factor**: Adopts the data from the [category](../basics/it-documentation-structure.md) **Form factor** and scales the object to scale.

[![icon](../assets/images/de/i-doit-add-ons/floorplan/21-fp.png)](../assets/images/de/i-doit-add-ons/floorplan/21-fp.png) **Filter object types**: Show or hide specific object types in the floorplan.

[![icon](../assets/images/de/i-doit-add-ons/floorplan/22-fp.png)](../assets/images/de/i-doit-add-ons/floorplan/22-fp.png) **Open object**: Opens the selected object in a new browser tab.

In edit mode, a selected object is highlighted by a blinking outline. Additionally, options for changing the shape, free rotation, and rotating the label are available.

[![edit Floorplan](../assets/images/en/i-doit-add-ons/floorplan/23-fp.gif)](../assets/images/en/i-doit-add-ons/floorplan/23-fp.gif)

## Managing Objects Using Layers

Organizing objects into different layers can help make the floor plan easier to read.
By placing objects on different layers, you can group them and display them either below or above one another.

To open the menu for editing layers, first click the Layers button.

[![Layerbutton](../assets/images/en/i-doit-add-ons/floorplan/1-fp-e.png)](../assets/images/en/i-doit-add-ons/floorplan/1-fp-e.png)

The Layers menu displays the objects currently placed in the floorplan. You can create a new layer using the **New Layer button**, and move objects to that layer by dragging and dropping them via the small grid dots.

An object positioned above another object in the Layers menu will also be displayed above the object below it in the floorplan. The same applies to individual layers and the objects beneath them.

[![Layeroder](../assets/images/en/i-doit-add-ons/floorplan/3-fp-e.png)](../assets/images/en/i-doit-add-ons/floorplan/3-fp-e.png)

There are three visual states for objects within a room plan. You can change these states using the eye icon in the Layers menu. Clicking the eye icon makes the object more transparent, clicking it again hides the object completely.

[![Visability](../assets/images/en/i-doit-add-ons/floorplan/2-fp-e.png)](../assets/images/en/i-doit-add-ons/floorplan/2-fp-e.png)

Layers can be renamed by hovering over the current layer and using the Edit button, or you can remove the layer using the Delete button.

## Merging floorplans

You can nest floorplans within each other -- e.g., a floor containing multiple rooms. The following rules apply: A maximum of three levels of layouts are displayed.

```text
Base floorplan:
-   obj A
-   obj B
-   Floorplan A:
    -   obj C
    -   obj D
-   Floorplan B:
    -   obj E
    -   obj F
    -   Floorplan C (displayed as empty block without its positioned objects)
        -   obj G
        -   obj H
```

In the "Base" floorplan, you see the nested "Floorplan A", and within it "Floorplan B" (including "obj E" and "obj F"). "Floorplan C", however, is only displayed as a simple object -- nesting is liwithed to three levels to avoid recursion and performance issues.

### How it works

In the "Base" floorplan, you move "Floorplan A" and "Floorplan B" like other objects -- however, you cannot edit the content of the nested floorplans here.

### When can a nested floorplan be displayed?

For "Floorplan A" to appear as a floorplan within the "Base" floorplan, it must meet one of the following conditions:

-   have a background image
-   have a layout

If a condition is met, the floorplan icon appears when editing: [![icon](../assets/images/de/i-doit-add-ons/floorplan/add-on-icon.svg)](../assets/images/de/i-doit-add-ons/floorplan/add-on-icon.svg)

The floorplan is scaled to the previous object size. The layout or background image determines the scale.

## Floorplan profiles

[![Profile](../assets/images/de/i-doit-add-ons/floorplan/24-fp.png)](../assets/images/de/i-doit-add-ons/floorplan/24-fp.png)

With profiles, you control which objects and attributes are displayed in the floorplan. A default profile is included.

[![Profile](../assets/images/de/i-doit-add-ons/floorplan/25-fp.png)](../assets/images/de/i-doit-add-ons/floorplan/25-fp.png)

To create a new profile:

1. Click **Create new profile** (or duplicate an existing one).
2. Enter a **name**.
3. Specify whether **Clicking on object opens object view** and **Double-clicking on object opens it in a new tab** should be enabled.

### Visualization options

[![Visualization options](../assets/images/de/i-doit-add-ons/floorplan/27-fp.png)](../assets/images/de/i-doit-add-ons/floorplan/27-fp.png)

**Highlight color**: Here you select a color by clicking that outlines the object when it is clicked.

**Display object radius**: Here you specify whether the object radius is displayed by default.

### Default values

[![Filter](../assets/images/de/i-doit-add-ons/floorplan/29-fp.png)](../assets/images/de/i-doit-add-ons/floorplan/29-fp.png)

### Object information

[![Attributes](../assets/images/de/i-doit-add-ons/floorplan/30-fp.png)](../assets/images/de/i-doit-add-ons/floorplan/30-fp.png)

This object information is displayed in the object view under **Object information**.

[![Object information](../assets/images/de/i-doit-add-ons/floorplan/31-fp.png)](../assets/images/de/i-doit-add-ons/floorplan/31-fp.png)

### Settings

Under **Settings**, you can define the profile as default globally or for specific users.

[![Settings](../assets/images/de/i-doit-add-ons/floorplan/32-fp.png)](../assets/images/de/i-doit-add-ons/floorplan/32-fp.png)

## Export

Floorplans can be exported as SVG or PNG files via the [![Export](../assets/images/de/i-doit-add-ons/floorplan/33-fp.svg)](../assets/images/de/i-doit-add-ons/floorplan/33-fp.svg) button.

## Releases
<!-- cSpell:disable -->
| Version | Date       | Changelog                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| ------- | ---------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.10    | 2025-09-09 | [Task] PHP 8.4 compatibility                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| 1.9     | 2025-02-26 | [Task] Make symfony 6.4 compatible<br>[Task] Make Smarty 5 compatible<br>[Bug] Main content is not wrapped correctly when resizing the window<br>[Bug] Adding a layer before saving causes database error                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| 1.8     | 2024-02-27 | [Task] Compatibility to i-doit 29, Colorpicker and PHP 8.2                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| 1.7     | 2023-11-07 | [Bug] MySQL8 causes database error "incorrect DATETIME" when opening Floorplan<br>[Bug] When turning an object, the text should also turn<br>[Bug] Language constant 'LC__CMDB__CATG__ACCOUNTING_ORDER_DATE' is not replaced<br>[Bug] Highlight 'add-on' instead of 'extras' menu                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| 1.6     | 2022-09-05 | [Task] PHP 8.0 Compatibility  <br>[Task] Design Compatibility                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| 1.5.1   | 2022-02-22 | [Bug] Floorplan cannot be opened                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| 1.5     |            | [Improvement] It is possible to display a floorplan in a floorplan  <br>[Improvement] It is possible to remove a layout from the floorplan  <br>[Improvement] It is possible to remove the background from the floorplan  <br>[Improvement] Show the object name of the current floorplan in the breadcrumb  <br>[Bug] Function to inherit form factor data scales dimensions wrong                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| 1.4.4   |            | [Bug] Customizable header size  <br>[Bug] Option to start chapter on new page is ignored  <br>[Bug] When saving the contents of a subchapter, new subchapters are always created  <br>[Bug] External Object function does not work in the Documents Add on  <br>[Bug] Permissions for the document add-on are incorrect (Save Template)  <br>[Bug] Creating documents always shows warning, empty templates exist  <br>[Bug] Output of the primary contact is not possible  <br>[Bug] Main object can no longer be edited in the Documents add-on when the grid is disabled  <br>[Bug] Nach dem Speichern einer Dokumentvorlage werden die Einstellungen auf der Registerkarte Optionen falsch angezeigt  <br>[Bug] Chapters from other document templates are not referenced correctly                                                                                                                                                                                                                                                                                               |
| 1.4.3   |            | [Improvement] Compatibility with i-doit 1.16                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| 1.4.2   |            | [Bug] Permissions for the document add-on are incorrect (Save Template)  <br>[Bug] Authorizations for the document add-on are incorrect (Templates Visible)  <br>[Bug] Headers are only displayed on the first page  <br>[Bug] Attributes of SIM cards assigned to mobile phones cannot be displayed  <br>[Bug] The output of a yes/no field with nothing selected "-" is not correct  <br>[Bug] New revision of a document cannot be created if the list has been filtered                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| 1.4.1   |            | [Improvement] Create a document for multiple objects  <br>[Improvement] Make floor plan available in the documents add-on  <br>[Bug] Corrupted display of tables in PDF format <br>[Bug] The location path is displayed unsightly  <br>[Bug] Selected attributes of master object are deleted when reopened                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| 1.4     |            | [Improvement] The size of the headings cannot be adjusted.  <br>[Improvement] Images cannot be displayed over the entire header line  <br>[Improvement] Remove requirement for PHPs "bcmath" extension  <br>[Improvement] IF Queries in User-Defined Categories  <br>[Bug] Placeholder represents only sub-request with one recursion depth  <br>[Bug] Output of the primary contact is not possible  <br>[Bug] Doku: Assigned objects from emergency plan delivers only first object  <br>[Bug] Archived contacts of the category "contact assignment" are output  <br>[Bug] Document templates cannot be sorted by creation date/change date  <br>[Bug] PDF documents do not display the formatting correctly  <br>[Bug] Image in footer is displayed in different sizes  <br>[Bug] Tables were not properly truncated when this goes over two pages  <br>[Bug] lines are unnecessarily high/wide in HTML documents                                                                                                                                                                 |
| 1.3.3   |            | [Bug] Category "e-mail" description field no output in a table  <br>[Bug] Placeholder for creation date/revision date also contains time of creation  <br>[Bug] Export of enumerated fields from the wysiwyg editor is not possible                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| 1.3.2   |            | [Bug] Bad behavior with add-on license                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| 1.3.1   |            | [Bug] Empty table columns can trigger PHP warnings during revision creation  <br>[Bug] Fix permission to import template from repository                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| 1.3     |            | [Improvement] Delete a room plan  <br>[Improvement] Layers and transparency  <br>[Improvement] Floorplan can now be deleted  <br>[Improvement] Improve export options  <br>[Improvement] Provide floorplan screenshots (e.g. documents add-on)  <br>[Bug] The field label of the date field of self created categories is not displayed correctly                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| 1.2.3   |            | [Bug] Room plan can not be used with only "see" right                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| 1.2.2   | 2019-07-05 | [Bug] Buttons in navigation tree are not clickable<br>[Bug] Clicking a non-positioned object inside the navigation tree triggers a JS error<br>[Bug] Edit and save on the "splash screen" causes a SQL error<br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| 1.2.1   | 2019-05-20 | [Bug] Creating a new room is not possible<br>[Bug] Defined i-doit address (URL) is ignored and the host name is used instead<br>[Bug] Profiles are not saved with references<br>[Bug] Cannot save profiles[Bug] Long object titles don't look good in the location tree<br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| 1.2     | 2018-12-05 | [Improvement] Rotate objects freely instead of 90° steps<br>[Improvement] Export the floorplan as PNG<br>[Improvement] New function to open a selected object<br>[Improvement] GUI Update: display location tree<br>[Improvement] Rotate objects 45 instead of 90 degrees<br>[Improvement] A object-polygon can consist of 20 instead of 10 points<br>[Improvement] Make the polygon-editor more intuitive<br>[Improvement] Implement view and edit mode<br>[Improvement] Improve editing and positioning of objects<br>[Improvement] Objects can display an own radius<br>[Improvement] Splash screen with the five last updated/created floorplan<br>[Improvement] Make floorplan category more dynamic<br>[Improvement] Navigation tree displays positioned objects<br>[Improvement] New profiles analog to the CMDB-Explorer<br>[Improvement] Clicked objects should be displayed more prominently<br>[Bug] Update floorplan category with useful functions<br>[Bug] Font color is too dark for some object type colors<br>[Change] Replace object browser with location tree<br> |
| 1.1     | 2018-04-16 | [Improvement]   The scale will now be displayed dynamically<br>[Improvement]   Smoother zoom<br>[Bug] Background image won't be displayed after uploading<br>[Bug] Misspelling of form factor in the English version of the floorplan<br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| 1.0.5   | 2017-10-02 | [Bug] Object list won't be displayed properly<br>[Bug] Background image won't be displayed after moving the installation<br>[Bug] Floorplan shows objects with non-"normal" status<br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| 1.0.4   | 2017-05-02 | [Bug] Self added icons do not scale in the floorplan extension<br>[Bug] Scale is not set, "form factor data" button is disabled<br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| 1.0.3   | 2016-10-24 | [Improvement] Failure while uploading a background image<br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| 1.0.2   |            | [Change] Compatibility with i-doit 1.8<br>[Bug] Object link is malformed when Wiki-URL is configured<br>[Bug] Read right is enough to make changes in Floorplan<br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| 1.0.1   | 2016-03-23 | Initial release                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
