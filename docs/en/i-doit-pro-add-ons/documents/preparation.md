# Preparation (Add-on documents)

## Installation/Update

The current installation package for the add-on is available in the i-doit customer portal at [https://portal.i-doit.com/](https://portal.i-doit.com/) after purchasing a valid license and can be downloaded there. The installation itself takes place in the i-doit [Admin Center](../../system-administration/admin-center.md) in the "Add-ons" tab.Here, the package is selected from the local system via the "Browse" button. After specifying for which [Tenant(s)](../../system-administration/multi-tenant.md) the add-on should be made available, the installation can be completed via the "Upload and install" button.<br
After a new version has been released, the updated package, which will also be available in the i-doit customer portal, can be uploaded and installed in the Admin Center using the same path.

## Assignment of rights

In order for a user to be able to create templates and generate documents, it is necessary to assign appropriate rights. This is possible in the i-doit administration under Rights system > Assignment of rights > Documents, if the add-on is installed.

[![Assignment of rights](../../assets/images/en/i-doit-pro-add-ons/documents/preperation/1-dp.png)](../../assets/images/en/i-doit-pro-add-ons/documents/preperation/1-dp.png)

The following permissions are available here:

- **Document**<br>
The "Document" condition can be used to allow access to single or multiple documents. Users with this permission can edit the selected documents.

- **Documents in categories**<br>
Documents in categories" can be used to grant access to documents based on the document categories.

- **Templates**<br>
The "Template" permission grants the permission to edit document templates.

- **Templates in categories**<br>
Access to templates can be granted to templates from defined categories using "Templates in categories".

- **Online Repository**<br>
To download templates from the online repository the permission "Online Repository" is required.

!!! attention "Clear cache for the rights system"

    After the rights have been assigned, it is advisable to clear the cache in the i-doit [administration](../../system-administration/administration/index.md) under [Repair and cleanup](../../system-administration/administration/tenant-management/repair-and-clean-up.md) > Cache / Database so that the changes are adopted by the system.

## Additional configuration

The add-on additionally makes the "Documents" [category](../../basics/categories-and-attributes.md) available for all object types. The category can be linked to the desired object types via the [object type configuration](../../basics/custom-object-types.md) and the [Quick Configuration Wizard](../../basics/assignment-of-categories-to-object-types.md). In this way, only those object types appear during object creation that are specified by the user in order to keep the selection list clear.

!!! attention "Documents category"

    In order to create a document for an object, it is necessary that the "Documents" category is linked to the object type. If the object type does not have this category, no documents can be created for the objects it contains, because they do not appear in the selection.

Calling the add-on
------------------

After all preparations are completed, the add-on can be accessed via Extras > Documents.

[![Calling the add-on](../../assets/images/en/i-doit-pro-add-ons/documents/preperation/2-dp.png)](../../assets/images/en/i-doit-pro-add-ons/documents/preperation/2-dp.png)

The view of the "Extras" menu may differ due to different rights and/or additional installed add-ons.
