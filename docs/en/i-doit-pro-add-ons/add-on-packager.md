The idea of the Add-on Packager is to give the user the possibility to build his own full-fledged [add-ons](/display/en/i-doit+pro+Add-ons). The Add-on Packager is operated completely via the i-doit graphical user interface and no programming skills are required.  
The structures that the user can create using the [Quick Configuration Wizard](/display/en/Assignment+of+Categories+to+Object+Types) or the [Report Manager](/display/en/Report+Manager), for example, can be packaged and distributed as add-ons.

General notes
-------------

**Please do not install and use the Add-on Packager on a production environment!**

Packaging add-ons is a development process. Production and development environments should always be separated.  
Among other things, to protect production data from damage or careless modification.  
Furthermore, production data must be particularly protected with regard to data protection.  
If add-ons are packed onto production environments, there is a risk of accidental disclosure of internal or personal data.  
Do not take this risk.  
Either use a dedicated installation or create a copy of your production environment if you want to package data from there.  
Use at least one dedicated client for your developments.

A free development license is provided as part of the development partnership. This can be used for the development of add-ons.

Installation and License
------------------------

Like any add-on, the Packager add-on is installed via the Admin Center. The Packager add-on does not require a license. However, it can only be used with the pro version.

Which structures can be packed into an add-on?
----------------------------------------------

Currently the following [structures](../basics/structure-of-the-it-documentation.md) can be included in an add-on with the Add-on Packager:

Object type groups  
Object types  
[Custom Categories](/display/en/Custom+Categories)  
[Reports](/display/en/Report+Manager)  
Dialog fields  
[Relationship types](/display/en/Object+Relations)

Creating an Add-on Structural Template
--------------------------------------

The Add-on Packager can be accessed like almost all add-ons via the Tools menu.  
Then navigate to the Add-ons area and create a new structural template by clicking the "New" button.

Basic Information
-----------------

![](/download/attachments/82575963/image2020-1-27_9-27-10.png?version=1&modificationDate=1580122604417&api=v2)

In the basic information, several metadata can be specified for the add-on.

|     |     |
| --- | --- |
| **Title** | Name of the add-on |
| **Manufacturer** | The name of your company or synonym |
| **Webseite** | A link to further information about the add-on<br><br>(currently not displayed for the user) |
| **Requires license  <br>** | Defines whether the add-on should be subject to licensing or not. Licenses can only be issued via the i-doit license server. If you would like to sell your add-on commercially, please speak to your contact person at synetics GmbH. |
| **Identifier** | The identifier is specified as free text during creation. If it is saved, it is combined with the manufacturer name to ensure uniqueness.<br><br>The add-on identifier is important for licensing, but also for the later update of an add-on and should be unique and unchangeable.<br><br>Please do not use spaces or special characters. |
| **Minimum i-doit version requirement  <br>** | i-doit version 1.11 is entered here by default. This value represents the current minimum compatibility and normally does not need to be changed. |
| **Created with Add-on Packager** | Specifies the version of the Add-on Packager used to ensure compatibility. |
| **Description** | Free text description of the add-on |

Included resources
------------------

![](/download/attachments/82575963/image2020-1-27_10-1-44.png?version=1&modificationDate=1580122604410&api=v2)

The available structures can be selected in the resources area of the structural template. These are listed below.

![](/download/attachments/82575963/image2020-1-27_10-33-32.png?version=1&modificationDate=1580122604403&api=v2)

The available structures can be selected in the resources area of the structural template.

Object type groups
------------------

![](/download/attachments/82575963/image2020-1-27_10-34-54.png?version=1&modificationDate=1580122604394&api=v2)

Object type groups are the groupings anchored in the main navigation.  
If an object type group is selected, only the group and the assignment of the object types to the object type group is copied. The object types are not copied as such, they must be selected explicitly in the next point.

Object types
------------

![](/download/attachments/82575963/image2020-1-27_10-36-34.png?version=1&modificationDate=1580122604386&api=v2)

The object types are the logical typing of objects. A number of object types are delivered as standard (servers, clients, ...).  
You can only select the object types you have created yourself. With the selected object types, the assignment of the categories is also transferred to the add-on, but not the categories as such. These must be selected explicitly in the next point.

Categories
----------

Categories are logical brackets around the individual attributes.

![](/download/attachments/82575963/image2020-1-27_10-40-4.png?version=1&modificationDate=1580122604370&api=v2)

Own categories can be created via the administration in the "User-defined categories" area.  
Only user-defined categories can be selected.

Reports
-------

![](/download/attachments/82575963/image2020-1-27_10-41-45.png?version=1&modificationDate=1580122604362&api=v2)

Reports from the Report Manager can be selected here.

Dialog+ Fields
--------------

![](/download/attachments/82575963/image2020-1-27_10-44-33.png?version=1&modificationDate=1580122604349&api=v2)

Dialog+ fields are those fields that offer the user a drop-down with fixed values, but give the possibility to add own content.  
If I have created my own values in a Dialog+ field, I can select the field here so that the values are delivered with the add-on.

Relationship types
------------------

![](/download/attachments/82575963/image2020-1-27_10-45-49.png?version=1&modificationDate=1580122604339&api=v2)

Relationship types can be created or edited via administration.  
At this point, you can select the relationship types as such, including their properties, to deliver them with the add-on.

Creating the finished add-on ZIP file
-------------------------------------

![](/download/attachments/82575963/image2020-1-27_11-52-9.png?version=1&modificationDate=1580122604318&api=v2)

In the lower area the add-on can now be created as a ZIP file.  
A release version must be specified here, which must be based on Semantic Versioning (e.g. 1.2.5).  
Also for each version there is a changelog entry, which will be added and a release date. When the package is created, you will automatically be taken to the package page of the add-on.

Packages
--------

![](/download/attachments/82575963/image2020-1-27_11-53-33.png?version=1&modificationDate=1580122604307&api=v2)

The packages are the finished ZIP files of the add-ons. Each version of each add-on gets its own package page where the add-on can be downloaded as a ZIP file.

  

![](/download/attachments/82575963/image2020-1-27_11-55-24.png?version=1&modificationDate=1580122604270&api=v2)

  

Releases
--------

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.2 | 2022-09-05 | \[Task\] PHP 8.0 Compatibility  <br>\[Task\] Design Compatibility |
| 1.1.1 | 2022-07-27 | \[Bug\] Packaging does not work with custom category dialog+ fields |
| 1.1 | 2022-02-21 | Improvement\] Add Report-Manager categories to the Add-On  <br>\[Bug\]         Error message when creating a package with Dialog Plus Listener resources "Unknown column '\*\_\_sort' in 'field list'"  <br>\[Bug\]         CSV import files are not being copied correctly |
| 1.0.1 | 2020-05-04 | \[Bug\] Packages with custom multi value categories become single value categories on import |
| 1.0 | 2019-10-21 | ```<br>Initial release<br>``` |