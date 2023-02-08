Manage IT-Grundschutz catalogs

  

Import catalogs
---------------

The first step towards documentation is to import the current IT-Grundschutz catalogs. You will be prompted to do this the first time you start VIVA under Extras → VIVA. Various catalogs are available for selection:

*   Supplementary delivery (EL) 15 from 2016 in German.
*   EL 14 from 2014 in German
*   EL 13 from 2013 in German
*   EL 13 from 2013 in English
*   EL 12 from 2011 in German and
*   EL 11 of 2009 in German.

The catalogs are available for download on the BSI website. Depending on the EL, minor intermediate steps may be required to convert the catalogs to the correct file format.

Intermediate steps are necessary for the import because the format offered by the BSI cannot be processed directly by VIVA. The catalogs are available for download on the BSI website. The further steps:

1.  After download: Unzip ZIP file
2.  Unpack self-extracting archive (.exe)
3.  Change to folder GSHB; there is a subfolder DE available
4.  Rename folder DE to el15de
5.  Pack folder el15de in ZIP format  
      
    

The ZIP file can now be processed by VIVA. In the menu item Catalogs the button Import has to be clicked. A dialog box appears in which the desired EL and the corresponding ZIP file are to be selected. The selection is confirmed by clicking on Start import. The import can take several minutes and should not be interrupted.

After the successful import the EL appears on the loaded page and can be used. If further ELs are to be used, the last steps must be repeated.

  

Customize catalogs
------------------

IT-Grundschutz catalogs can be customized individually. This means that new modules, hazards and measures can be created, existing ones adapted or deleted.

It is also possible to assign hazards and measures to modules. The specification of a qualification level for an assigned measure is taken into account. Furthermore, you can view, add to, and edit the test questions that match the respective measures.

Model Information domains
-------------------------

One or more information networks can be created under the menu item Information networks. They represent the starting point for more in-depth documentation. When creating an information network, it is important to specify which IT-Grundschutz catalogs are to be applied to the information network.

When a new information network is created, a target group with the same name and a suitable target object is automatically created. The building blocks of layer 1 Cross-cutting aspects are applied to this target group. Likewise, the protection requirement categories are filled in with the examples from BSI Standard 100-2.

  

Create target groups
--------------------

In target groups, similar target objects are combined into groups. This process is part of the structure analysis (see BSI standard 100-2, chapter 4.2.). Target groups appear in the menu tree below the five layers of an information network. Each target group is initially assigned to one of the following layers when it is created:

1.  Overarching aspects,
2.  Infrastructure,
3.  IT systems,
4.  Networks and
5.  Applications.
6.  Create target group

The layer affiliation can be extended by assigning building blocks from other layers. The information group itself is assigned to the 1st layer, which happens automatically when a new information group is created. An exception is the change from the old module (migration): Here, the layer assignment is made on the basis of the assigned modules.

Target groups of layers 4 Networks and 5 Applications behave differently from those of the other layers: Target groups of layer 4 do not contain any target objects, but consist of the linkage from two target groups, which is documented in the item Communication link. Instead of linking two target groups, a group can alternatively be linked to something outside the information network. Example: The target group is linked to the Internet.

Layer 5 target groups are extended by the type of information they process. VIVA already brings some types that can (and should) be post-processed. It is important to specify here whether personal data is processed, because this information will be used again and again in the further process. This type is therefore also not removable.

Assign target objects
---------------------

Target objects are determined within target groups. The target groups of layer 4 networks are an exception. This is part of the structural analysis. VIVA is closely interlocked with the CMDB data from i-doit at this point. New target objects are selected using the object browser familiar from i-doit.

The interlocking with the CMDB data is reflected in other places. For example, contacts (persons, groups of persons, organizations) can be linked wherever it makes sense.

Target group inheritance
------------------------

Target objects automatically inherit the properties of their target group, so no further customization is necessary. So much for the theory. However, practice has shown that some properties do not always synchronously fit all target objects at the same time.

This is especially true for the implementation of measures. Therefore, a few properties that differ from the target group can be recorded within a target object, for example, to document the date of implementation, which may differ if necessary.

The reference documents do not respect inheritance, but draw the information from the target groups and not from the target objects.

Define protection requirement categories
----------------------------------------

The item Protection requirement categories appears below an information network in the menu tree. According to BSI Standard 100-2, Chapter 4.3.1, the damage scenarios are defined here with the help of the protection requirement categories. When creating an information network, the examples given in the standard are adopted and should be adapted to your own organization.

Determine protection needs
--------------------------

As part of the protection requirement determination, the protection requirement of the individual target groups is determined. (See BSI Standard 100-2, chapters 4.3.2 to 4.3.5.) Therefore, the corresponding form fields can be found within a target group.

A special feature applies in layer 4 networks: The protection requirement of the communication links is based on the assigned criticality.

Assigning modules
-----------------

Modules from the IT-Grundschutz catalogs are assigned to the target groups. (See BSI Standard 100-2, Chapter 4.4.) Modules contain hazards and measures including their qualification levels, which VIVA automatically takes into account when assigning a module.

If modules from a layer other than the layer assigned to the target group are selected, this results in this target group also being assigned to this other layer. In the menu tree, this group thus appears in several layers at the same time.

When creating a new information network, all modules of layer 1 General aspects are assigned to the automatically created target group.

Implementing measures
---------------------

Measures are by definition designed to be implemented to counteract identified hazards. Prioritization is possible based on the qualification level assigned to each linked measure. (See BSI Standard 100-2, Chapters 4.4 and 4.5.).

By clicking on a linked measure below a module assigned to a target group, the status of its implementation can be documented in detail.

Answer check questions
----------------------

As a rule, measures are accompanied by a series of check questions that can be understood as a checklist to be ticked off. All questions can be answered either with "yes" or with "no".

The check questions provided in the catalogs are already taken into account during import and are displayed within the measures. In addition, these can be edited, deleted or supplemented with new ones.

The checklists, which are composed of the check questions, are available within measures assigned to target groups.

Perform supplementary security analysis
---------------------------------------

The supplementary security analysis (see BSI Standard 100-2, Chapter 4.6.) is performed for each target group. VIVA automatically detects whether this step is necessary at all based on the data from the protection requirements assessment (of the communication connections) and whether a supplementary security analysis is necessary in addition to this information.