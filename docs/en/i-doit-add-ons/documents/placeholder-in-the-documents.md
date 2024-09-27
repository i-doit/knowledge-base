# Placeholder in the Documents add-on

All placeholders are used to dynamically include contents of the documentation into the document. The placeholders are inserted in the [document template](./document-templates.md) via the WYSIWYG editor.

[![Documents](../../assets/images/en/i-doit-add-ons/documents/placeholder/1-dph.png)](../../assets/images/en/i-doit-add-ons/documents/placeholder/1-dph.png)

An included placeholder can be edited afterwards by double-clicking on it in the WYSIWYG editor.

Placeholder main object
-----------------------

[![Placeholder main object](../../assets/images/en/i-doit-add-ons/documents/placeholder/2-dph.png)](../../assets/images/en/i-doit-add-ons/documents/placeholder/2-dph.png)

The placeholder for including information from the main object makes it possible to insert content belonging to the object for which the document is being created into the document.

Here, the individual attributes that are to be output in the document can be selected, grouped according to their category. This is done by clicking the plus symbol next to the attribute. Selected attributes appear on the right side and can also be removed again by using the minus symbol.  
If an object link (relationship) has been selected, a magnifying glass symbol appears in the line of the attribute. This allows the selection of attributes of the linked object in another area that appears below the selection.

[![Placeholder main object](../../assets/images/en/i-doit-add-ons/documents/placeholder/3-dph.png)](../../assets/images/en/i-doit-add-ons/documents/placeholder/3-dph.png)

Furthermore, additional parameters can be specified that are taken into account during output. For example, it is possible to output only primary entries (e.g. the primary operating system or the primary contact). Furthermore, the output can be limited to category entries in defined states (Normal, Archived and Deleted). This is possible if the output is displayed as a table.

Additional parameters for formatting the output can also be specified. Thus, it is possible to specify texts for categories if a category has no entries or to add texts if a category has entries.

Lastly, it is possible to customize the appearance of column headers, gridlines, odd rows and background colors.  
[![customize the appearance](../../assets/images/en/i-doit-add-ons/documents/placeholder/4-dph.png)](../../assets/images/en/i-doit-add-ons/documents/placeholder/4-dph.png)

Placeholder External object
---------------------------

[![Placeholder External object](../../assets/images/en/i-doit-add-ons/documents/placeholder/5-dph.png)](../../assets/images/en/i-doit-add-ons/documents/placeholder/5-dph.png)

Information of a fixed object can be included via this placeholder.

Here, too, the attribute selection corresponds to that available for the main object. However, the selected attributes refer to the selected object.  
The additional formatting options are also identical to those in the main object selection.

[![Placeholder External object](../../assets/images/en/i-doit-add-ons/documents/placeholder/6-dph.png)](../../assets/images/en/i-doit-add-ons/documents/placeholder/6-dph.png)

Placeholder Report
------------------

[![Placeholder Report](../../assets/images/en/i-doit-add-ons/documents/placeholder/7-dph.png)](../../assets/images/en/i-doit-add-ons/documents/placeholder/7-dph.png)

Using the "Report" button it is possible to include result lists from previously created [reports](../../evaluation/report-manager.md). The selection is made using the dropdown field in the upper area, where the report is selected by its name.  
The results list in the document always corresponds to the report output when the document was created. If it is expected that the results of the report have changed/updated, a new revision of the document must be created based on the template.

Additionally, it is possible to include [variable reports](../../evaluation/variable-reports.md) in the document. Here, the selected placeholders correspond to the main object and dynamically output the contents for the main object.

Furthermore, formatting options can be used to optionally add the title and the description of the report in the document. Furthermore, column headers, font and background color, grid and the rows of the table can be defined via the respective options.

[![Placeholder Report](../../assets/images/en/i-doit-add-ons/documents/placeholder/8-dph.png)](../../assets/images/en/i-doit-add-ons/documents/placeholder/8-dph.png)

Placeholder template
--------------------

[![Placeholder template](../../assets/images/en/i-doit-add-ons/documents/placeholder/9-dph.png)](../../assets/images/en/i-doit-add-ons/documents/placeholder/9-dph.png)

The placeholder "Template" allows the inclusion of recurring, general information. A set of standard contents is available for this purpose. Further content can be added via the user-defined fields that can be specified and configured in the general settings for the document.  
[![Placeholder template](../../assets/images/en/i-doit-add-ons/documents/placeholder/10-dph.png)](../../assets/images/en/i-doit-add-ons/documents/placeholder/10-dph.png)

Placeholder images
------------------

[![Placeholder images](../../assets/images/en/i-doit-add-ons/documents/placeholder/11-dph.png)](../../assets/images/en/i-doit-add-ons/documents/placeholder/11-dph.png)

Images uploaded in the category of the same name can be added to the document using the "Images" placeholder. Here, either the images of the main object for which the document is created or firmly defined images from other objects can be selected. Should the main object be selected, it can be defined whether the first, the last or all images from the category are displayed.

Placeholder room plan
---------------------

[![Placeholder room plan](../../assets/images/en/i-doit-add-ons/documents/placeholder/12-dph.png)](../../assets/images/en/i-doit-add-ons/documents/placeholder/12-dph.png)

A room plan created via the "[Floorplan](./../floorplan.md)" add-on can also be included in a document. Here it is possible to reference the room plan of the main object or to select a fixed, external room plan. All previously created room plans are available in this selection.
