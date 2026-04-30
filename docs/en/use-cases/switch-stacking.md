---
title: Switch Stacking
description: "With the Stacking object type, it is possible to define a stack group with multiple members that exchange information with each other."
icon:
status:
lang: en
---
# Switch Stacking

With the [object type](../glossary.md) **Stacking**, it is possible to define a stack group with multiple members that exchange information with each other. Although stacking can be used for different object types, the original concept for this object type and the associated [category](../glossary.md) **Stack Members** traces back to switch stacking. The object type can be found under the [object type group](../glossary.md) **Other** starting from version 1.7.

Stack Members
----------------

In the **Stack Members** category created for stacking, [objects](../glossary.md) can be added as members of the stack and marked as "Active" or "Passive". In the documentation, this marking has no further effect other than the corresponding display.

[![Stack members](../assets/images/de/anwendungsfaelle/switch-stacking/1-sws.png)](../assets/images/de/anwendungsfaelle/switch-stacking/1-sws.png)

[![Stack members](../assets/images/de/anwendungsfaelle/switch-stacking/2-sws.png)](../assets/images/de/anwendungsfaelle/switch-stacking/2-sws.png)

Logical Ports
--------------

When a logical port is created in one of the stack members, it now also appears in the other stack members under logical ports.

[![Logical ports](../assets/images/de/anwendungsfaelle/switch-stacking/3-sws.png)](../assets/images/de/anwendungsfaelle/switch-stacking/3-sws.png)

Additionally, the logical port of another stack member can be assigned as the parent port of a port.

[![Logical ports](../assets/images/de/anwendungsfaelle/switch-stacking/4-sws.png)](../assets/images/de/anwendungsfaelle/switch-stacking/4-sws.png)
