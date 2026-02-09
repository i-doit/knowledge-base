---
title: Structural analysis
description: As part of the structural analysis, ensure that all objects required to document the information scope are created in i-doit.
lang: en
---

# Structural analysis

As part of the structural analysis, ensure that all objects required to document the information scope are created in i-doit.

## To document

- Business processes with associated applications
- IT systems, ICS systems, other devices
- Rooms and locations
- Communication links

## Target object groups

- Statically group similar objects and assign them to the information scope

To reduce complexity, similar objects should be grouped in the target object group object type. The group type must remain static. The target object group is then assigned to the information scope via the "Information scopes" category.

[![Target object groups](../../assets/images/en/i-doit-add-ons/viva2/structural-analysis/targetobjectgroup-example.png)](../../assets/images/en/i-doit-add-ons/viva2/structural-analysis/targetobjectgroup-example.png){:target="_blank"}

!!! note "Technically, a target object group can be assigned to multiple information scopes, but it is recommended to assign a target object group to only one information scope."

## Individual objects

If there are individual objects that need to be assigned to the information scope and require module assignments, there are two ways to proceed:

1.  Create a target object group for this object and assign the object as the only member of that group. The target object group is then assigned to the information scope as usual.
2.  Use the Quick Configuration Wizard to assign the "IT-Grundschutz (target objects)" category to the object type. In this case, the object is assigned directly to the information scope.

## Responsibilities

For all relevant objects, responsibilities should be documented via the "Contact assignment" category.

## Cleaned network diagram

The cleaned network diagram should be linked in the "Information scope" category of the information scope.

[![Adjusted-network](../../assets/images/en/i-doit-add-ons/viva2/structural-analysis/adjusted-network.png)](../../assets/images/en/i-doit-add-ons/viva2/structural-analysis/adjusted-network.png){:target="_blank"}

## Communication link

The communication link to be documented are created in i-doit via the new [Communication link object type](objecttypes-categories.md#communication-link).

[![Communication-link](../../assets/images/en/i-doit-add-ons/viva2/structural-analysis/communication-link.png)](../../assets/images/en/i-doit-add-ons/viva2/structural-analysis/communication-link.png){:target="_blank"}

Communication link are usually assigned directly to the information scope, which is why the "IT-Grundschutz (target objects)" category is initially assigned to the "Communication link" object type. In the "Information scopes" category, the corresponding information scope must then be assigned.

If objects are entered as "connection participants" in the "Communication link" category, the protection needs of those objects are inherited to the communication link in the protection needs assessment.

[<- Back](objecttypes-categories.md){ .md-button } · [Protection needs assessment ->](assessment-of-protection.md){ .md-button .md-button--primary }
