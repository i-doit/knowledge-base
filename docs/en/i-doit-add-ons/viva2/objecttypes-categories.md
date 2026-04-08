---
title: Object Types and Categories
description: The VIVA2 add-on introduces six new object types, all organized in the object type group "IT-Grundschutz"
icon:
status:
lang: en
---

# Object Types and Categories

The VIVA2 add-on introduces six new object types, all organized in the object type group "IT-Grundschutz":

## Module

[![Module](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/module.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/module.jpg){:target="_blank"}

The object type "Module" represents the modules from the Grundschutz Compendium. In the default configuration, the following categories belong to objects of the Module type:

**Categories**:

- **General** (i-doit standard category): Belongs to every object.
- **Requirements**: This is a multi-value category in which all requirements linked to this module are listed.
- **Module**: This category contains the textual descriptions of the module from the Grundschutz Compendium, such as number, title, introduction, objective, and scope.
- **Files** (i-doit standard category): Here you link additional files to this module.
- **Threat Landscape**: This is a multi-value category in which all threats linked to this module are listed.
- **Contact Assignment** (i-doit standard category): Here the corresponding contacts for the module must be entered.
- **Target Objects/Groups**: This is a multi-value category in which all objects linked to this module are listed (either via the "Process Modules" category or via the "Assigned Modules" category).
- **Access** (i-doit standard category): Via the access category, the module is linked to the module description on the BSI IT-Grundschutz Compendium website.

## Requirement

[![Requirement](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/requirement.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/requirement.jpg){:target="_blank"}

The object type "Requirement" represents the requirements from the modules of the Grundschutz Compendium. In the default configuration, the following categories belong to objects of the Requirement type:

**Categories**:

- **General** (i-doit standard category): Belongs to every object.
- **Requirement**: This category contains the textual descriptions of the requirement from the Grundschutz Compendium, such as number, title, requirement type, and description.
- **Modules**: This category links the requirement with the associated module. Although this is a multi-value category, assigning it to multiple modules usually does not make sense.
- **Access** (i-doit standard category): Via the access category, the requirement is linked to the corresponding module description on the BSI IT-Grundschutz Compendium website.

## Threat

[![Threat](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/threat.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/threat.jpg){:target="_blank"}

The object type "Threat" represents the threats from the modules of the Grundschutz Compendium. In the default configuration, the following categories belong to objects of the Threat type:

- **General** (i-doit standard category): Belongs to every object.
- **Modules**: This multi-value category links the threat with the associated modules.
- **Threat**: This category contains the textual descriptions of the threat from the Grundschutz Compendium, such as number (only for elementary threats), title, and description.
- **Access** (i-doit standard category): Via the access category, the threat is linked to the corresponding module description on the BSI IT-Grundschutz Compendium website.

## Information Domain

[![Information Domain](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/scope.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/scope.jpg){:target="_blank"}

For each information domain, there is exactly one object of the type "Information Domain". Typically, there is only one Information Domain object, but the VIVA2 add-on also offers the possibility to document multiple information domains. In the default configuration, the following categories belong to objects of the Information Domain type:

**Categories**:

- **General** (i-doit standard category): Belongs to every object.
- **IT-Grundschutz (Information Domain)**: This is a category group containing the following four categories:
  Information Domain: Here the basic information about the information domain is documented, such as the cleaned network plan and the information security policy.
  - **Infrastructure Analysis**: This multi-value category shows all objects directly linked to this information domain via the reverse category "Information Domains". You can find more details under [Structural Analysis](structural-analysis.md).
  - **IT-Grundschutz Check**: The overview page shows all requirements assigned through modules, sorted by module and requirement number. You can find more details under [IT-Grundschutz Check](it-grundschutz-check.md).
  - **Process Modules**: Here you assign the process modules that apply to the entire information domain. Technically, you can also assign system modules, but these are usually assigned to the respective target objects or target object groups. You can find more details under [Structural Analysis](structural-analysis.md).
- **Contact Assignment**: (i-doit standard category) Here the corresponding roles for the complete information domain must be entered, above all the Information Security Officer (ISO).

**Reports**:

- **Applications without installation**: This variable report shows all applications that are not installed on any machine (according to documentation in i-doit). All applications are checked that are either directly assigned to this information domain or are members of a target object group assigned to this information domain.
- **IT-Grundschutz Check**: This variable report shows all requirements and their implementation status that are assigned to this information domain via modules. It considers not only the requirements from directly assigned modules, but also those from modules assigned to the assigned target objects/target object groups.
- **Physical Hardware without Location**: This variable report shows all objects that have the "Location" category assigned but not maintained. All objects are checked that are either directly assigned to this information domain or are members of a target object group assigned to this information domain.
- **Rooms without Building**: This variable report shows all rooms where the location category is not maintained or where the location object has no address entered. All rooms are checked that are either directly assigned to this information domain or are members of a target object group assigned to this information domain.
- **Rooms without Room Number**: This variable report shows all rooms where no room number is entered. All rooms are checked that are either directly assigned to this information domain or are members of a target object group assigned to this information domain.
- **Covered by Information Domain**: This variable report shows all objects that are either directly assigned to this information domain or are members of a target object group assigned to this information domain.

## Target Object Group

[![Target Object Group](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/targetgroup.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/targetgroup.jpg){:target="_blank"}

As part of the structural analysis, "similar" target objects should be grouped to reduce complexity. The Target Object Group object type serves to represent this grouping of target objects. In the default configuration, the following categories belong to objects of the Target Object Group type:

**Categories**:

- **General (i-doit standard category)**: Belongs to every object.
- **IT-Grundschutz (Target Objects)**: This is a category group containing the following seven categories:
- **Information Domains**: This multi-value category shows all information domains to which this target object group is assigned (via the reverse category "Infrastructure Analysis"). Although you can technically assign the target object group to multiple information domains, you should usually assign it to only one information domain. You can find more details under [Structural Analysis](structural-analysis.md).
- **IT-Grundschutz Check**: The overview page shows all requirements assigned through modules, sorted by module and requirement number. You can find more details under [IT-Grundschutz Check](it-grundschutz-check.md).
- **Classification of Information**: Here the classification of information can be performed, which according to BSI default 200-2 is part of the documentation of the security process.
- **Protection Needs Assessment**: Here the protection needs for this object or object group can be defined and justified according to the defined basic values. You can find more details under [Protection Needs Assessment](assessment-of-protection.md).
- **Assigned Modules**: Here you assign the modules that should apply to this object or object group. Usually, system modules are assigned here, but it is also possible to assign process modules if there are deviations from the process modules assigned in the information domain for this object or object group. You can find more details under [Structural Analysis](structural-analysis.md).
- **Assigned Requirements**: This is a virtual category that shows all requirements assigned through the assigned modules.
- **Assigned Threats**: This is a virtual category that shows all threats assigned through the assigned modules.
- **Contact Assignment (i-doit standard category)**: Here you enter the corresponding contacts or other roles for this target object group.
- **Object Group (i-doit standard category)**: Here it is defined which objects are assigned to this target object group. Please note that the type must be set to "static" for the reports to function properly.

## Communication Link

[![Communication Link](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/communication_link.jpg)](../../assets/images/de/i-doit-add-ons/viva2/objecttypes-categories/communication_link.jpg){:target="_blank"}

The object type "Communication Link" serves to document the communication links relevant to the information domain. In the default configuration, the following categories belong to objects of the Communication Link type:

**Categories**:

- **General** (i-doit standard category): Belongs to every object.
- **IT-Grundschutz (Target Objects)**: This category group serves for assignment to the information domain, protection needs assessment, assignment of modules, and the IT-Grundschutz check (see Target Object Group for a more detailed description).
- **Communication Link**: Here it can be documented which objects or object groups use this communication link. The protection needs are then inherited from these objects (according to the maximum principle) to the communication link. Additionally, the network plan with the highlighted communication link can be linked for illustration purposes.
- **Contact Assignment (i-doit standard category)**: Here the main contacts for the communication link should be documented.

[<- Back](it-grundschutz-profiles.md){ .md-button } · [Structural Analysis ->](structural-analysis.md){ .md-button .md-button--primary }
