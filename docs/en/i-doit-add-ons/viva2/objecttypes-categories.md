---
title: Object types and categories
description: The VIVA2 add-on introduces six new object types, all grouped under the "IT-Grundschutz" object type group.
lang: en
---

# Object types and categories

The VIVA2 add-on introduces six new object types, all grouped under the "IT-Grundschutz" object type group:

## Baustein

[![Baustein](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/module.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/module.jpg){:target="_blank"}

The "Module" object type represents the modules from the IT-Grundschutz Compendium. In the default configuration, the following categories belong to objects of type Module:

**Kategorien**:

- **General** (i-doit standard category): Belongs to every object.
- **Requirements**: This is a multivalue category that links all requirements belonging to this module.
- **Module**: This category contains the textual descriptions of the module from the IT-Grundschutz Compendium, such as number, title, introduction, objective, and scope.
- **Files** (i-doit standard category): Additional files can be linked to this module here.
- **Threat situation**: This is a multivalue category that links all threats belonging to this module.
- **Contact assignment** (i-doit standard category): The relevant contacts for the module must be entered here.
- **Target objects/-groups**: This is a multivalue category that links all objects to which this module is assigned (either via the "Process modules" category or the "Assigned modules" category).
- **Access** (i-doit standard category): The access category links the module to the module description on the BSI IT-Grundschutz Compendium website.

## Anforderung

[![Anforderung](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/requirement.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/requirement.jpg){:target="_blank"}

The "Requirement" object type represents the requirements from the modules of the IT-Grundschutz Compendium. In the default configuration, the following categories belong to objects of type Requirement:

**Kategorien**:

- **General** (i-doit standard category): Belongs to every object.
- **Requirement**: This category contains the textual descriptions of the requirement from the IT-Grundschutz Compendium, such as number, title, requirement type, and description.
- **Modules**: This category links the requirement with the associated module. Although this is a multivalue category, assigning it to multiple modules usually does not make sense.
- **Access** (i-doit standard category): The access category links the requirement to the associated module description on the BSI IT-Grundschutz Compendium website.

## Gefährdung

[![Gefährdung](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/threat.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/threat.jpg){:target="_blank"}

The "Threat" object type represents the threats from the modules of the IT-Grundschutz Compendium. In the default configuration, the following categories belong to objects of type Threat:

- **General** (i-doit standard category): Belongs to every object.
- **Modules**: This multivalue category links the threat with the associated modules.
- **Threat**: This category contains the textual descriptions of the threat from the IT-Grundschutz Compendium, such as number (only for elemental threats), title, and description.
- **Access** (i-doit standard category): The access category links the threat to the associated module description on the BSI IT-Grundschutz Compendium website.

## Informationsverbund

[![Informationsverbund](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/scope.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/scope.jpg){:target="_blank"}

For each information scope, there is exactly one object of type "Information scope". Typically, there is only one information scope object, but the VIVA2 add-on also allows documenting multiple information scopes. In the default configuration, the following categories belong to objects of type Information scope:

**Kategorien**:

- **General** (i-doit standard category): Belongs to every object.
- **IT-Grundschutz (information scope)**: This is a category group that includes the following four categories:
Information scope: The basic information for the information scope is documented here, such as the cleaned network diagram and the information security policy.
  - **Infrastructure analysis**: This multivalue category shows all objects linked directly to this information scope via the reverse category "Information scopes". See [Structural analysis](structural-analysis.md) for more.
  - **IT-Grundschutz Check**: The overview page shows all requirements assigned via modules, sorted by module and requirement number. See [IT-Grundschutz-Check](it-grundschutz-check.md) for more.
  - **Process modules**: Assign the process modules that apply to the entire information scope here. From a technical perspective, system modules can also be assigned, but in general these are assigned to the respective target objects or target object groups. See [Structural analysis](structural-analysis.md) for more.
- **Contact assignment** (i-doit standard category): The relevant roles for the entire information scope must be entered here, especially the information security officer (ISB).

**Reports**:

- **Applications without installation**: This variable report shows all applications that are not installed on any machine (according to the documentation in i-doit). It checks all applications that are either directly assigned to this information scope or are members of a target object group assigned to this information scope.
- **IT-Grundschutz-Check**: This variable report shows all requirements and their implementation status that are assigned to this information scope via modules. It considers not only the requirements from directly assigned modules, but also those from modules assigned to the assigned target objects/target object groups.
- **Physical hardware without location**: This variable report shows all objects that have the "Location" category assigned but not maintained. It checks all objects that are either directly assigned to this information scope or are members of a target object group assigned to this information scope.
- **Rooms without buildings**: This variable report shows all rooms where the location category is not maintained or the location object has no address entered. It checks all rooms that are either directly assigned to this information scope or are members of a target object group assigned to this information scope.
- **Rooms without room number**: This variable report shows all rooms where no room number is entered. It checks all rooms that are either directly assigned to this information scope or are members of a target object group assigned to this information scope.
- **Covered by information scope**: This variable report shows all objects that are either directly assigned to this information scope or are members of a target object group assigned to this information scope.

## Zielobjektgruppe

[![Zielobjektgruppe](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/targetgroup.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/targetgroup.jpg){:target="_blank"}

As part of the structural analysis, "similar" target objects should be grouped to reduce complexity. The target object group object type represents this grouping. In the default configuration, the following categories belong to objects of type Target object group:

**Kategorien**:

- **General (i-doit standard category)**: Belongs to every object.
- **IT-Grundschutz (target objects)**: This is a category group that includes the following seven categories:
- **Information scopes**: This multivalue category shows all information scopes to which this target object group is assigned (via the reverse category "Infrastructure analysis"). Even though it is technically possible to assign the target object group to multiple information scopes, it should generally be assigned to only one information scope. See [Structural analysis](structural-analysis.md) for more.
- **IT-Grundschutz-Check**: The overview page shows all requirements assigned via modules, sorted by module and requirement number. See [IT-Grundschutz-Check](it-grundschutz-check.md) for more.
- **Classification of information**: This is where information classification is recorded, which according to BSI Standard 200-2 is part of the documentation of the security process.
- **Protection needs assessment**: The protection needs for this object or object group can be defined and justified here in the defined basic values. See [Protection needs assessment](assessment-of-protection.md) for more.
- **Assigned modules**: Assign the modules that should apply to this object or object group here. Typically system modules are assigned, but you can also assign process modules if there are deviations for this object or object group from the process modules assigned at the information scope. See [Structural analysis](structural-analysis.md) for more.
- **Assigned requirements**: This is a virtual category that shows all requirements assigned via the assigned modules.
- **Assigned threats**: This is a virtual category that shows all threats assigned via the assigned modules.
- **Contact assignment (i-doit standard category)**: The relevant contacts or other roles for this target object group can be entered here.
- **Object group (i-doit standard category)**: Defines which objects are assigned to this target object group. Note that the type must be set to "static" for the reports to work.

## Kommunikationsverbindung

[![Kommunikationsverbindung](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/communication_link.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/communication_link.jpg){:target="_blank"}

The "Communication link" object type is used to document communication links relevant to the information scope. In the default configuration, the following categories belong to objects of type Communication link:

**Kategorien**:

- **General** (i-doit standard category): Belongs to every object.
- **IT-Grundschutz (target objects)**: This category grouping is used for assignment to the information scope, protection needs assessment, module assignment, and the IT-Grundschutz check (see target object group for a more detailed description).
- **Communication link**: Document which objects or object groups use this communication link. The protection needs from these objects are inherited (using the maximum principle) to the communication link. You can also link the network diagram with the communication link highlighted for illustration.
- **Contact assignment (i-doit standard category)**: The main contacts for the communication link should be documented here.

[<- Back](it-grundschutz-profiles.md){ .md-button } · [Structural analysis ->](structural-analysis.md){ .md-button .md-button--primary }
