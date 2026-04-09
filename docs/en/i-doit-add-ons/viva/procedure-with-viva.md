---
title: Procedure with VIVA
description: "Managing IT-Grundschutz catalogs"
icon:
status:
lang: en
---
# Procedure with VIVA

Managing IT-Grundschutz Catalogs
---------------------------------

### Importing catalogs

The first step toward documentation is importing the current IT-Grundschutz catalogs. You are prompted to do this when you first open VIVA under **Extras → VIVA**. Several catalogs are available for selection:

*   Supplement (EL) 15 from 2016 in German
*   EL 14 from 2014 in German
*   EL 13 from 2013 in German
*   EL 13 from 2013 in English
*   EL 12 from 2011 in German, and
*   EL 11 from 2009 in German.

The catalogs are available for download on the BSI website. Depending on the supplement edition, some minor intermediate steps may be required to convert the catalogs into the correct file format.

Intermediate steps are necessary for the import because the format offered by the BSI cannot be processed directly by VIVA. The catalogs are available for download on the BSI website. The additional steps are:

1.  After downloading: extract the ZIP file
2.  Extract the self-extracting archive (.exe)
3.  Navigate to the GSHB folder; the subfolder DE is located there
4.  Rename the DE folder to el15de
5.  Compress the el15de folder in ZIP format

[![Import catalogs](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/1-vv.png)](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/1-vv.png)

The ZIP file can now be processed by VIVA. In the _Catalogs_ menu item, click the _Import_ button. A dialog box appears where you can select the desired supplement edition and the corresponding ZIP file. Confirm your selection by clicking _Start Import_. The import may take several minutes and should not be interrupted.

After a successful import, the supplement edition appears on the loaded page and can be used. If additional editions are needed, repeat the previous steps.

[![Imported catalogs in the menu tree](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/2-vv.png)](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/2-vv.png)

### Customizing catalogs

IT-Grundschutz catalogs can be individually customized. New modules, threats, and measures can be created, and existing ones can be modified or deleted.

The assignment of threats and measures to modules is also possible. The specification of a qualification level for an assigned measure is automatically applied. Furthermore, you can view, supplement and edit the audit questions associated with the respective measures.

!!! attention "Please observe the notes in BSI standard 100-2 if you deviate from the supplied catalogs."

Modeling information domains
--------------------------------

Under the _Information Domains_ menu item, one or more information domains can be created. They represent the starting point for more in-depth documentation. When creating an information domain, you must ensure that the correct IT-Grundschutz catalogs are applied to it.

[![Create information domain](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/3-vv.png)](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/3-vv.png)

When a new information domain is created, a target group with the same name and a matching target object is automatically created. The layer 1 modules _Overarching Aspects_ are applied to this target group. Likewise, the [protection needs categories]() are populated with the examples from BSI standard 100-2.

Creating target groups
-------------------

In target groups, similar target objects are grouped together. This process is part of the structural analysis (see BSI standard 100-2, chapter 4.2). Target groups appear in the menu tree below the five layers of an information domain. When creating a target group, it is first assigned to one of the following layers:

1.  Overarching aspects,
2.  Infrastructure,
3.  IT systems,
4.  Networks, and
5.  Applications.

[![Create target group](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/4-vv.png)](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/4-vv.png)

The layer membership can be extended by assigning modules from other layers. The information domain itself is assigned to layer 1, which happens automatically when a new information domain is created. An exception is the [migration from the old module (migration)](): there, the layer assignment is determined based on the assigned modules.

[![Target group R 2 appears in 2 layers.](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/5-vv.png)](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/5-vv.png)

Target groups in layers 4 _Networks_ and 5 _Applications_ behave differently from those in the other layers: target groups in layer 4 do not contain [target objects](), but instead consist of a link between two target groups, which is documented under the _Communication Link_ section. Instead of linking two target groups, you can alternatively link a group with something outside the information domain. Example: the target group is linked to the internet.

[![Edit target group in layer 4](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/6-vv.png)](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/6-vv.png)

Target groups in layer 5 are extended with the type of information they process. VIVA already comes with several types that can (and should) be edited. It is important here to specify whether personal data is being processed, because this information is used repeatedly throughout the further process. This type therefore cannot be removed.

[![Edit target group in layer 5](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/7-vv.png)](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/7-vv.png)

Assigning target objects
--------------------

Within target groups, target objects are determined. An exception is the [target groups]() in layer 4 _Networks_. This is part of the structural analysis. VIVA is tightly integrated with the CMDB data from i-doit at this point. New target objects are selected using the object browser familiar from i-doit.

[![List target objects](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/8-vv.png)](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/8-vv.png)

The integration with CMDB data is reflected in additional places. Wherever it makes sense, contacts (persons, person groups, organizations) can be linked, for example.

Target group inheritance
--------------------

Target objects automatically inherit the properties of their target group, so that no additional adjustments are needed. So much for the theory. In practice, however, it has been shown that some properties do not always apply simultaneously to all target objects.

This primarily concerns the [implementation of measures](). Therefore, within a target object, a few properties that deviate from the target group can be recorded in order to document, for example, the implementation date, which may differ.

!!! attention "The reference documents do not take inheritance into account; they draw information from the target groups, not from the target objects."

Defining protection needs categories
----------------------------------

Below an information domain, the _Protection Needs Categories_ item appears in the menu tree. According to BSI standard 100-2, chapter 4.3.1, this is where damage scenarios are defined using protection needs categories. When an information domain is created, the examples mentioned in the standard are adopted and should be adapted to your own organization.

[![Edit protection needs category](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/9-vv.png)](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/9-vv.png)

Determining protection needs
----------------------

As part of the protection needs assessment, the protection needs of the individual [target groups]() are determined. (See BSI standard 100-2, chapters 4.3.2 to 4.3.5.) The corresponding form fields are located within each target group.

[![Edit protection needs](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/10-vv.png)](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/10-vv.png)

A special rule applies in layer 4 _Networks_: the protection needs of communication links are based on the assigned criticality.

[![Edit protection needs of a communication link](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/11-vv.png)](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/11-vv.png)

Assigning modules
------------------

Modules from the IT-Grundschutz catalogs are assigned to the [target groups](). (See BSI standard 100-2, chapter 4.4.) Modules contain threats and measures including their qualification levels, which VIVA automatically stores when a module is assigned.

[![Assign modules to a target group](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/12-vv.png)](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/12-vv.png)

If modules from a layer other than the one assigned to the target group are selected, this causes the target group to also be assigned to that other layer. In the menu tree, this group then appears simultaneously under multiple layers.

When a new [information domain]() is created, all modules from layer 1 _Overarching Aspects_ are automatically assigned to the target group that is created along with it.

Implementing measures
------------------

Measures are by definition designed to be implemented in order to counter identified threats. The qualification level that each linked measure receives allows for prioritization. (See BSI standard 100-2, chapters 4.4 and 4.5.)

[![List assigned measures](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/13-vv.png)](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/13-vv.png)

Clicking on a linked measure beneath a module [assigned to a target group]() allows you to document the implementation status in detail.

[![Document implementation of a measure](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/14-vv.png)](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/14-vv.png)

Answering audit questions
----------------------

Measures typically come with a series of audit questions that serve as a checklist to be checked off. All questions can be answered with either "yes" or "no".

The audit questions included in the catalogs are already taken into account during the [import]() and are [displayed within the measures](). In addition, these can be edited, deleted, or supplemented with new ones.

[![Answer audit questions for a measure](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/15-vv.png)](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/15-vv.png)

The checklists composed of audit questions are available within [measures assigned to target groups]().

Performing supplementary security analysis
-----------------------------------------

The supplementary security analysis (see BSI standard 100-2, chapter 4.6) is performed for each [target group](). Whether this step is even necessary is determined automatically by VIVA based on the data from the protection needs assessment (of the communication links) and the specification of whether a supplementary security analysis is required beyond those specifications.

[![Edit supplementary security analysis](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/16-vv.png)](../../assets/images/de/i-doit-add-ons/viva/vorgehensweise/16-vv.png)
