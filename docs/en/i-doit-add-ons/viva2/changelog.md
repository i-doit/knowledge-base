# Changelog

3.2.6
--------------------------------------------------------------------------------
TODO

3.2.5
--------------------------------------------------------------------------------
[Improvement]   Compatibility to i-doit 34
[Improvement]   When you click on an object type group in the main menu, the object types are loaded into the left column from the protection requirement inheritance
[Bug]           Assignments of the responsible in the IT baseline protection check were lost when you went back from view mode to edit mode

3.2.4
--------------------------------------------------------------------------------
[Improvement]   Two new attribute in report manager available to report the inherited protection needs resp. the protection needs inheritance
[Improvement]   In the CSV export of the graphical protection needs inheritance, the object from which the protection requirement is inherited is output
[Improvement]   In the edit form of the requirements of the IT-Grundschutz-Check the requirement description is shown
[Improvement]   New variable report available to be able to show and export all attributes of the category IT-Grundschutz-Check
[Improvement]   Improved english translations
[Change]        The category realization plan, which is no longer supported, won't be installed anymore and will be uninstalled if not in use
[Bug]           Adding some columns in the object list view resulted in an error message because the JSON format was incorrect
[Bug]           The protection needs were not always inherited correctly
[Bug]           SQL errors occurred when configuring requirements in the list view of the IT-Grundschutz check
[Bug]           The attributes "Recurring costs" and "Recurring costs (interval)" of the IT-Grundschutz check category could not be selected in the report manager

3.2.3
--------------------------------------------------------------------------------
[Improvement]   The JSON and CSV export now also consider the applied filters.
[Improvement]   The object ID is now displayed in the list view of the infrastructure analysis.
[Improvement]   The CSV export now includes the object ID and object title in the "Connected with" column.
[Improvement]   Alphabetical sorting of target objects/object groups in the protection inheritance filtering.
[Improvement]   Renamed attribute "Differentiation" to "Differentiation and modelling" according to the IT-Grundschutz Compendium.
[Improvement]   "Basisabsicherung erreicht" now appears even when requirements are marked as dispensable.
[Improvement]   Adjustment of the appearance and icon sets to the new i-doit layout.
[Bug]           No log entries were created when changing the protection requirement.
[Bug]           The installation routine of the add-on was not compatible with i-doit version >= 23.
[Bug]           In the IT-Grundschutz-Check category, the standard name of the i-doit database was hardcoded in two places.
[Bug]           In the IT-Grundschutz-Check category, the time was displayed for the implementation date
[Bug]           In the Protection requirement category an server error occured in idoit 25

3.2.2
--------------------------------------------------------------------------------
[New function]  The objects/nodes of the visual protection requirement assessment can be dragged now in vertical direction too
[Improvement]   More visual adaptions to the new i-doit layout
[Improvement]   The height of the obejcts/nodes adapt now to the number of configured (and inherited) basic values
[Improvement]   The attribute "Contact person" of the category IT baseline protection can be chosen in the report manager now
[Improvement]   The category "Classification of information" can be chosen in the report manager now
[Bug]           Creating, editing and the usage of IT baseline protection templates were not compatible with PHP 8

3.2.1
--------------------------------------------------------------------------------
[Improvement]   Compatibility to i-doit 1.19
[Improvement]   Compatibility to PHP 8.0
[Improvement]   Optical improvements to fit new layout of i-doit 1.19
[Bug]           In category "Modules" the assigned target objects/object group were not shown
[Bug]           The object type icons of "Communication link" and "Threat" could'nt be loaded
[Bug]           The responsible contacts were lost, if editing the category "IT baseline check" and comming from "View" view

3.2
--------------------------------------------------------------------------------
[New function]  Support of new format of the IT-Grundschutzkompendiums 2022
[New function]  Modules and requirement groups can now be folded and unfolded in the it baseline protection check, the status is saved in the personal user settings
[Improvement]   Editing of the protection requirement of an object now with inline editing possible
[Improvement]   Respect edit right of category protection requirement everywhere
[Improvement]   Module objects are now linke din the IT baseline protection check
[Improvement]   The layer of the module is now taken over during import of the Kompendium
[Improvement]   Clean up wrong database entries of category protection requirement
[Change]        The buttons "Accept" and "Adapt" are removed from category protection requirement
[Bug]           Changes module names were not updated during import of the Kompendium
[Bug]           List edit of protection requirements possibly led to wrong database entries
[Bug]           During import of the Kompendium sometimes no log book entries were wrote
[Bug]           Wrong spelling in german translation was fixed
[Bug]           The menu entry "Assessment of protection requirements" checked wrong user permissions
[Bug]           The import of the Kompendium led to errors, if custom modules, requirements or threats were present
[Bug]           The realization of requirements in the IT baseline protection check lost its formattings and line breaks when saving

3.1.3
--------------------------------------------------------------------------------
[Bug]           The protection requirements didn't work on some systems with i-doit 1.16

3.1.2
--------------------------------------------------------------------------------
[Improvement]   New user-dependent report "Requirements assigned to mir"
[Improvement]   Adapt primary access URL to new layout of BSI website
[Improvement]   New icons in the "Extra" menu
[Improvement]   Moved VIVA2 object images and icons into i-doit image folder
[Improvement]   Renamed "Implementation date" to "Implementation until"
[Bug]           The label of the viva2 upload folder in the tenant settings was wrong
[Bug]           The attribute "description" of the category IT baseline prootection (scope) -> IT baseline protection check wasn't saved

3.1.1
--------------------------------------------------------------------------------
[Improvement]   The Kompendium 2020 can now be imported
[Improvement]   The reports "Responsibilities" and "Missing Responsibilities" are revised and improved
[Improvement]   Duplicate roles are converted and removed
[Bug]           Category "IT-Baseline protection" didn't work if the name of the tenant database wasn't "idoit_data"
[Bug]           Profiles could not be created if the folder "exports" didn't exist in the viva2 addon folder
[Bug]           The print view of variable report "IT baseline protection check" was empty

3.1
--------------------------------------------------------------------------------
[New feature]   New object type "communication link"
[New feature]   The protection requirements will be inherited over the new relation "communication link"
[New feature]   It is now possible to set a filter in the graphical representation of the assessment of protection requirements
[New feature]   The reason for the assessment of the protection requirements can now be edited in the graphical representation
[Improvement]   The reason for the assessment of the protection requirements in included now in the CSV export
[Improvement]   Contact roles, which will be imported by the IT-Grundschutz Compendium, will now be removed during deinstallation of the addon
[Improvement]   The updated documentation for the VIVA2 addon can now be found here: https://viva2.readthedocs.io (only in german yet)
[Bug]           Translations for "CSV file" and "PNG file" were not available in 1.14.1 anymore
[Bug]           Translation of the "Please wait" Overlay in the assessment of protection requirements was only shown, if floorplan addon was installed
[Bug]           The assessment of the protection requirements has shown an error, if the shown target objects didn't have any links

3.0
--------------------------------------------------------------------------------
[New feature]   The implementation status of the requirements is now saved on the target objects/groups
[New feature]   Complete revision of the "IT baseline protection check" category
[New feature]   New category "process modules" at the object type "scope"
[Improvement]   The addon categories in the object type "scope" are summarized in a folder
[Improvement]   Revision of all supplied reports, removal of the reports "Not covered by scope" and "Not covered by scopes"
[Improvement]   Renaming target groups into target object groups
[Improvement]   Renaming the role "responsible person" to "basically responsible"
[Improvement]   All roles added during the installation of the VIVA2 addon are given the prefix "IT-BP:"
[Improvement]   Preparation for the next version to edit the reason in the asessment of protection requirements
[Bug]           Reports containing categories from VIVA2 led to an SQL error (only working in 1.14.1)
[Bug]           After importing the compendium, the search index for the new/changed objects wasn't recreated
[Bug]           VIVA2 deinstallation leaves the object type group in the menu
[Bug]           Error when using the list edit for the category IT baseline protection
[Bug]           The "Browse" button is missing in Scope -> IT baseline protection (Scope)-> Adjusted network plan

2.0.3
--------------------------------------------------------------------------------
[New feature]   Asessment of protection requirements: New export option in CSV format
[New feature]   Asessment of protection requirements: New export option in JSON format
[Improvement]   Asessment of protection requirements: Services and their relationships are now taken into account
[Improvement]   Preperation for nect major release: Type of requirement is saved on requirement when importing the IT baseline protection kompendium
[Bug]           Some english translations were missing
[Bug]           Small fix in german translation
[Bug]           Reports were not created correctly during installation
[Bug]           Uninstallation of addon does not work correctly

2.0.2
--------------------------------------------------------------------------------
[Improvement]   New icons and images for VIVA2 object types
[Bug]           Reports are stored in the wrong database during a new installation in i-doit 1.13.1 (or higher)

2.0.1
--------------------------------------------------------------------------------
[Bug]           Invalid YAML
[Bug]           Double display of information networks in the migration
[Bug]           Threats in basic IT protection are no longer displayed
[Bug]           Schutzbedarfsfeststellung doesn't open when selected right after opening the add-on
[Bug]           Migration from VIVA to VIVA2 sometimes faulty when using empty content
[Bug]           In category "Assigned requirements" an error message is displayed when clicking on an entry
[Task]          VIVA 2 PHP 7.2 Compability

2.0
--------------------------------------------------------------------------------
Initial release


[Zur Startseite ->](index.md){ .md-button } · [Zu den Arbeiten ->](structural-analysis.md){ .md-button .md-button--primary }
