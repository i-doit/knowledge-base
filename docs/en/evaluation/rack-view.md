# Rack View

i-doitvides a visualization for 19" racks with which you can display all built-in components clearly. Statistics about free height units, maximum energy requirements and free network ports in switches and patch panels provide support with capacity planning.

Rack Category
-------------

The **Rack** [category](../basics/structure-of-the-it-documentation.md) is already assigned to the [object type](../basics/structure-of-the-it-documentation.md) **Rack** in the default [installation](../installation/index.md) of i-doit. The category shows the modeled front and back of the rack.

[![Rack Category](../assets/images/en/evaluation/rack-view/1-rv.png)](../assets/images/en/evaluation/rack-view/1-rv.png)

!!! success "Rack"

    The screenshots show an i-doit demo installation in which the original object type and the category of the same name were renamed to **Rack**. When you want to [apply your own vocabulary for the IT documentation](../system-administration/localization.md), you can do so without any problems.

Editing of Rack Attributes
--------------------------

The height units of the rack are defined in the **Form factor** category. Also this category is already assigned to the object type **Rack** when i-doit is installed. Beside the attribute **Rack units**, you should also define the **Form factor** of **19"**.

[![Editing of Rack Attributes](../assets/images/en/evaluation/rack-view/2-rv.png)](../assets/images/en/evaluation/rack-view/2-rv.png)

In the example, the rack can take up a maximum of 42 units with a form factor of 19".

The ascending or descending **Height unit sorting** is carried out in the **Rack** category. With the **Edit** button you can change to the corresponding drop-down menu which is in the box on the right to make your choice.

In this box you can also define how many **vertical slots** are available on the **front** and on the **back**. With these definitions you can document PDUs which are mounted at the side, for example. In the screenshot you can see **2 vertical slots** for the **front** and the **back** which are placed on the left and the right alternately.

[![Editing of Rack Attributes](../assets/images/en/evaluation/rack-view/3-rv.png)](../assets/images/en/evaluation/rack-view/3-rv.png)

Positioning of Objects in the Rack
----------------------------------

Two conditions apply to fill racks with [objects](../basics/structure-of-the-it-documentation.md): On the one hand, you have to define for each object in the **Form factor** category how many **rack units** it requires and that it has the **Form factor 19"**. On the other hand, you have to tick the box in the [object type configuration](../basics/assignment-of-categories-to-object-types.md) confirming that objects of this type can be positioned in the rack. If the entry in the **Form factor** category is missing, i-doit assumes that a 19" component with 1 RU is involved.

The assignment from object to rack is carried out in the **Location** category in which physical locations are set into [relation](../basics/object-relations.md) to each other. First you choose the rack in the **Location** attribute; afterwards further attributes to be filled in are shown:

*   **Assembly**: How will the object be assembled - in a **Horizontal** ("normal" assembly) or **Vertical** way (for example, PDUs which are built in at the side)?
*   **Insertion**: Does the object require the complete depth of the rack (**Front** and **Back**) or is it only mounted at the front or back? In case of objects which are assembled only on one side, the same unit can be assigned doubly, namely at the front and at the back.
*   **Position in the rack**: With a **horizontal** assembly you select the height units. Depending on how many RU an object requires, the specifications in the drop-down menu change. With a  **vertical** assembly the **slots** are displayed (on the top right = 1, on the top left = 2, on the bottom right = 3, on the bottom left = 4 etc.). Rack units or slots which are already in use will be hidden.

[![Positioning of Objects in the Rack](../assets/images/en/evaluation/rack-view/4-rv.png)](../assets/images/en/evaluation/rack-view/4-rv.png)

Objects which are already assigned are displayed in the **Location view** and in the category **locally assigned objects**.

[![Positioning of Objects in the Rack](../assets/images/en/evaluation/rack-view/5-rv.png)](../assets/images/en/evaluation/rack-view/5-rv.png)

Editing of Assigned Objects
---------------------------

In the **Rack** category there are several ways to edit the assigned objects. For each object there is a little button with an arrow pointing down on the right side. When you click this button, you can choose from the following options:

*   **Objectlink**: The overview page of the object is opened.
*   **Reassign object**: A dialog opens on the right side with which you can choose a new position for an object (see below).
*   **Detach object**: The information at which position the object is mounted in the rack is deleted. The object remains assigned to the rack through the location assignment.

[![Editing of Assigned Objects](../assets/images/en/evaluation/rack-view/6-rv.png)](../assets/images/en/evaluation/rack-view/6-rv.png)

Objects which are already assigned to the rack locally but do not have a position yet, are listed on the right side in the box called **Unpositioned objects**. Via the button with the gearwheel symbol you can change the required rack units (RU) of the object. With the X button you delete the location assignment irrevocably (**purge**).

[![Editing of Assigned Objects](../assets/images/en/evaluation/rack-view/7-rv.png)](../assets/images/en/evaluation/rack-view/7-rv.png)

When you click on the object in the list, another box opens below. With this dialog you can position the object in the rack.

[![Editing of Assigned Objects](../assets/images/en/evaluation/rack-view/8-rv.png)](../assets/images/en/evaluation/rack-view/8-rv.png)

Statistics
----------

The **Rack** category provides a wide range of evaluations regarding the assigned objects. Above the visual representation of the rack you can see the Statistics box. You can open or close it by clicking the arrow on the left side.

[![Statistics](../assets/images/en/evaluation/rack-view/9-rv.png)](../assets/images/en/evaluation/rack-view/9-rv.png)

The statistics comprise several rack attributes and assigned objects:

| Statistics | Objects | Categories | Attributes |
| --- | --- | --- | --- |
| **Free slots** | **Rack**<br><br>locally assigned objects | **Form factor**<br><br>**Location** | **Rack units**<br><br>**Assembly , Insertion**, **Position in the rack** |
| **Used slots  <br>** | see above | see above | see above |
| **Free vertical slots  <br>** | see above | see above | see above |
| **Used vertical slots  <br>** | see above | see above | see above |
| **PDU connectors (Input)** | locally assigned objects of the type **Power distribution unit  <br>** | **Wiring system → Connectors** | **Input/Output**, **Connection type**, **Assigned to  <br>** |
| ****PDU connectors (Output)**** | locally assigned objects of the type  ****Power distribution unit**** | ****Wiring system → Connectors**** | ****Input/Output**, **Connection type**, **Assigned to**** |
| **Switch ports** | locally assigned objects of the type **Switch** | **Network → Port** | **Plug**, **Connected with  <br>** |
| **FC-switch ports** | locally assigned objects of the type **FC-switch** | ****Network** → Port** | ****Plug**, **Connected with**** |
| **Patch panel ports (Inputs)** | locally assigned objects of the type **Patch panel** | ****Wiring system → Connectors**** | ****Input/Output**, **Connection type**, **Assigned to**** |
| **Patch panel ports (Outputs)** | locally assigned objects of the type **Patch panel** | ****Wiring system → Connectors**** | ****Input/Output**, **Connection type**, **Assigned to**** |
| **Consumption of electricity** | locally assigned objects | **Power consumer  <br>** | **Watt** |
| ****Consumption of thermal energy**** | locally assigned objects | ****Power consumer**** | **BTU** |

Racks Category
--------------

When a rack is assigned to a room via the **Location** category, another visual representation is available. In the default installation of i-doit the **Racks** category is already assigned to the object type **Room**. Via this category all objects of the type **Rack,** which are assigned to a certain room, are displayed visually.

[![Racks Category](../assets/images/en/evaluation/rack-view/10-rv.png)](../assets/images/en/evaluation/rack-view/10-rv.png)

Above the visual representation several options are available:

*   **Rearrange racks**: With this function you can adjust the order of the racks.
*   **Load all racks from all child locations!** Racks which are assigned to a deeper level of the location hierarchy are also loaded. As a standard, directly assigned objects of the type **Rack** are displayed. For example, the **Racks** category can then be assigned to objects of the type **Building**, in which there are first **Rooms** and on a subordinated level **Racks**.
*   **Load statistics for all racks**: The statistics (see above) for all racks are shown successively.
