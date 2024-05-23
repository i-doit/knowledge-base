# Document creation

Create documents in the add-on
------------------------------

Once a [template](./document-templates.md) has been created, it is possible to create a document for an object within the add-on in the menu item "Documents" under the document category in which the template is located.

[![Create documents in the add-on](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/1-dc.png)](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/1-dc.png)

The "New" button opens another view. Here, a title for the created document can be specified. Then the desired template as well as the desired object(s) for which the document is to be created are selected.

!!! attention "Documents category"

    In order to create a document for an object, it is necessary that the "Documents" category is linked to the object type. If the object type does not have this category, no documents can be created for the objects it contains, because they do not appear in the selection.

In addition, it is possible to write a comment about the object.

[![object](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/2-dc.png)](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/2-dc.png)

!!! info "Note"

    A yellow info box indicates if at least one unfinished document template exists, i.e. does not yet have any chapters. If the desired template does not appear, the chapter configuration should be checked again.

The document creation is started via the "Add" button. As soon as this process is completed, the documents appear in the list and can be downloaded in the desired format.

If a document in the list is clicked or its checkbox is activated and the "Edit" button is used, further details can be viewed. In this view it is also possible to create new revisions. This is relevant if information in the documentation for this object has changed and the document needs to be updated. Changes to the document template can also be transferred to the document in this way.  
In the lower area, the current version and all revisions can be downloaded. The download of the document overview always refers to the most recent revision.

[![recent revision](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/3-dc.png)](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/3-dc.png)

!!! success "Create revisions from the list"

    A new revision can alternatively be created directly in the list of documents. For this purpose, the desired document is selected via its checkbox and then the "Create Revision" button in the header is used.<br>[![Create revisions from the list](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/4-dc.png)](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/4-dc.png)

Create documents in the "Documents" category
--------------------------------------------

If a document has been created for an object in i-doit, it can be found in the "Documents" category of the object. Here it is also possible to download the document in the appropriate formats. In the detailed view of the document, it is also possible to view the revisions and create new revisions.  
The "New" button can be used to create additional documents for the object. Here, the object is already preselected and a title can be assigned as well as a template linked.

[![Create documents in the "Documents" category](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/5-dc.png)](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/5-dc.png)

Document creation via the i-doit Console
----------------------------------------

The creation of new revisions as well as the export of documents can also be performed and automated via the i-doit Console.

The command "[documents](../../automation-and-integration/cli/index.md)" is available for these operations. This can be supplemented by the following options:

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | \--create\_revision | Creates one or more revisions for given documents |
|     | \--export | Exports one or more documents to a file |
|     | \--id=ID | Select one or more documents by id (multiple values allowed) |
|     | \--all\_documents | Selects all documents |
|     | \--all\_category=\[ALL\_CATEGORY\] | Selects all documents in category |
|     | \--all\_template=\[ALL\_TEMPLATE\] | Selects all documents with template |
|     | \--all\_object=\[ALL\_OBJECT\] | Selects all documents with object |
|     | \--export\_format=\[EXPORT\_FORMAT\] | Export format: pdf or html |
|     | \--export\_folder=\[EXPORT\_FOLDER\] | Export format: pdf or html \[default: "/var/www/html/main/upload/files/"\] |
| \-u | \--user=\[USERNAME\] | User |
| \-p | \--password=\[PASSWORD\] | Password |
| \-t | \--tenant=\[TENANT-ID\] | Tenant ID \[default: 1\] |
| \-h | \--help | Display this help message |
| \-q | \--quiet | Do not output any message |
| \-V | \--version | Display this application version |
|     | \--ansi | Erzwingt die Ausgabe im ANSI-Format |
|     | \--no-ansi | Disable ANSI output |
| \-n | \--no-interaction | Do not ask any interactive question |
| \-v / -vv / -vvv | \--verbose | Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug |