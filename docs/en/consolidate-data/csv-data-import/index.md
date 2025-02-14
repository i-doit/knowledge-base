# CSV Data Import

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfying, it can then be restored"

Many organizations use spreadsheet software for their [IT documentation](index.md) to view information in form of tables. This is not only confusing, but requires also a lot work for maintenance and updating. Using the CSV import allows you to import data comfortably, for example, from Microsoft Excel, OpenOffice or LibreOffice Calc, to _i-doit_.

## Requirements

To be able to use your data for CSV import it is important to save them in **.csv** format with **UTF-8** encoding. Some spreadsheet applications are not able to set the encoding when saving. In this case you can use a text editor which has a conversion function after you exported your data to .CSV format. In the following screenshot you can see the **Convert to UTF-8** function in [Notepad++](https://notepad-plus-plus.org/):

[![Coding in Notepad++](../../assets/images/en/consolidate-data/csv-data-import/1-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/1-csvi.png)

The structure of a suitable .CSV file is approximately as shown in the following example:

[![structure-csv](../../assets/images/en/consolidate-data/csv-data-import/2-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/2-csvi.png)

The first line is used as a header and serves as the identification of the [attribute](../../basics/structure-of-the-it-documentation.md). Each successive line represents an individual [object](../../glossary.md) of your IT documentation.<br>
You can also use your favorite text editor to create csv files.

[![new-csv-file](../../assets/images/en/consolidate-data/csv-data-import/3-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/3-csvi.png)

Once the .CSV file has been prepared to this point, you can begin the import.

## Upload File

Under **Extras → Import → CSV Import** you can find the CSV import. You don't need to configure it in advance.

Choose your .csv file in the first step by using the **Browse...** button and upload the file from your system. Now the file is shown in the list and you can choose the actions **Use for import**, **Download file** and **Delete file** when hovering over the row of the file with the mouse cursor.

[![upload-file](../../assets/images/en/consolidate-data/csv-data-import/4-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/4-csvi.png)

To get to the next step of the import you need to click **Use for import**.

## Set Options

You have to define some options before the mapping process between the table columns and attributes in i-doit can begin.

[![mapping](../../assets/images/en/consolidate-data/csv-data-import/5-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/5-csvi.png)

### Object Type

When you select an [object type](../../basics/structure-of-the-it-documentation.md) via the drop-down menu **Global object type**, all objects in the `.CSV` file will be imported as this type of object. If you do not define a global object type, you require an additional field in the `.CSV` file to enter the [database constant](../../basics/structure-of-the-it-documentation.md). The object type to which the object will be associated is determined by this constant for every line. This allows you to import objects from different object types (client, printer, monitors ...) from one file. This information has to be maintained for all objects if no global object type is used. You can't use a mixed form.

### Separators, Headers and Consider default template

If you use a different **separator** than the semicolon (;), it is possible to specify the used separator.

If you do not use a header line, you can deactivate the header so that the first line in the .csv file will be interpreted as the first object.

The objects are created with the data from the [default template](../../efficient-documentation/templates.md).

### Empty Values

If you want to update existing objects with CSV data import, you can decide how you want to handle blank cells in the .CSV file. With the item **Adopt empty values** you have the option to choose either **Yes** or **No:**

-   **Yes**: Blank cells mean that existing attributes (if available) are overwritten.
-   **No**: Blank cells are ignored so that existing attributes (if available) are preserved.

### Handling of Entries in List Categories (Multi-Valued)

Furthermore, you have to state in which form [list categories](../../basics/structure-of-the-it-documentation.md) (multi-valued) appear in the `.csv` file. If no categories of this type are involved in the data import, you can ignore the following options.

What is striking in the example shown above is that "Client 02" appears multiple times. Since this client possesses two CPUs, two entries (one per CPU) need to be generated in the **CPU** list category. By using an additional  **line** the object receives both entries in the **CPU** category. It is not required to enter unvarying [attributes](../../glossary.md) multiple times ín further lines of the object. This means that you do not have to set inventory number "ABCD-2000" again.

Alternatively, it is possible to store the single entries of list categories either in a **column** or in a field as **comma-separated** list.

If category entries are already present, you have some more options:

-   **Create category entries only if the category is empty (create if empty)**
-   **Create category entries and keep existing ones (add)**
-   **Create category entries and replace existing ones (replace)**

By clicking the **Prepare mapping** button you can reach the next step.

## Define Identifying Features

As soon as you have adjusted the options you can start with mapping. First of all you can select an [**object-matching profile**](../object-identification-during-imports.md) if you want to update existing objects. You can edit this profile at a later time.

[![update](../../assets/images/en/consolidate-data/csv-data-import/6-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/6-csvi.png)

## Assignment of Columns to Attributes

Each column receives its own row in the mapping. This way you can link each row of the .CSV file with an attribute from _i-doit_. Click the pencil icon of the row in order to activate the input field for selecting the associated attribute. The right attribute can now be selected from the drop-down field or you can enter its name directly in the field to use the suggest feature. The input will be confirmed using the **Apply** button. Link each column this way until all allocations are complete. You can remove allocations subsequently. Columns without an allocation will be ignored during data import.

[![attributes](../../assets/images/en/consolidate-data/csv-data-import/7-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/7-csvi.png)

!!! info Mandatory details
    Stating the object title _and_ the object type is both _mandatory_. If you defined a global object type in the data import options, you just have to link the object title with a column in the mapping. If you did not set a global object type, then a link to a column as object type will also be required. Otherwise it is not possible to start the import function. Setting the object type is carried out via its database constant (for example **C_OBJTYPE_SERVER**). Setting the name of the object type (e.g. **Server**) is **not** sufficient.

## Creating a Profile

If you wish to import further .CSV files with an identical structure regarding the column allocation, you can save the configuration of the current mapping as a profile. The same applies to updating the currently used file later on and then importing it. Thus you can avoid recurrent work steps. A saved profile can be selected and loaded or be deleted in the upper area of the options.

If there is an already matching profile, you can overwrite it without specifying a name.

## Start of Data Import

The level of detail for logging the CSV import can be set beneath the mapping. The more extensive the logging is, the more time and resources are needed for the import. The logging of debug messages can be helpful for possibly required troubleshooting.

Use the **Import** button beneath the mapping to start the import. The time needed for the import depends on the extent of the information you wish to import as well as the selected level of logging.

Once the import has been completed, information regarding the import as well as a confirmation of its completion will be indicated. The imported or updated objects are linked directly. The content of these objects can be changed manually anytime, if needed.

[![import-complete](../../assets/images/en/consolidate-data/csv-data-import/8-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/8-csvi.png)

## Overwrite object types during CSV import

With the option **The CSV import can overwrite the objecttype?** the object types of a object can also be changed or overwritten during a CSV import.

[![overwrite option](../../assets/images/en/consolidate-data/csv-data-import/11-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/11-csvi.png)

This option can be found in the expert settings as **import.csv.overwrite-objecttype**.

!!! warning "This option is blocked by another option, if you activate the overwriting of the object types, you must set the option **SYS-ID read only** to **No**. In the expert settings, this option is named **cmdb.registry.sysid_readonly**"

## Import of Relations (Linking of Objects)

The CSV import is capable of creating links between objects ([relations](../../basics/object-relations.md)) if these are set via a category. The object that is to be linked can also be put in a column of the .CSV file while the field for linking can be set as attribute which is to be assigned. An example of a statement of the physical location in column H:

[![physical-location](../../assets/images/en/consolidate-data/csv-data-import/9-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/9-csvi.png)
After selecting the field during the mapping, you can decide whether the selection of the object you are going to link is made in an unrestricted way or if there will be a restriction to an object type of your choice. Furthermore, objects which could not be found can be created automatically. Setting the object type of the linked objects is required in this case so that an object of this type will be created. For some types of links, it is possible to set the attributes in the special assignment by which the identification is made for the objects that are going to be linked. As a standard, the object title is used.

!!! info "Note"
    The special assignment cannot be found in all linking fields. If it is not available, only the object title is used for the identification of the object that is to be updated.

[![identification-object](../../assets/images/en/consolidate-data/csv-data-import/10-csvi.png)](../../assets/images/en/consolidate-data/csv-data-import/10-csvi.png)

## Import of Values with Units

Some attributes contain values and units. You have to enter them separately in the corresponding forms of the Web GUI. For example, in the category **Monitor** the **Display** attribute consists of the field for the value and the field for the unit (inch, cm etc.). In order to import this attribute analogous via CSV file import, value and unit have to be together in one cell. Examples:

| Category                        | Attribute         | Assignment with CSV file import | Cell in CSV file |
| ------------------------------- | ----------------- | ------------------------------- | ---------------- |
| **CPU**                         | **CPU frequency** | **CPU frequency (unit)**        | 2.5 GHz          |
| **Local mass storage → Device** | **Capacity**      | **Capacity (unit)**             | 4 TB             |
| **Monitor**                     | **Display**       | **Display (unit)**              | 24 Inch          |

## Automated Import of CSV Files

Importing CSV files is not only possible manually via the user interface, but can also be implemented using the i-doit Console. This allows automating the import, which can be used to update information on a regular basis. A description of all parameters can be found in the corresponding article including an example under the [import-csv](../../automation-and-integration/cli/console/options-and-parameters-cli.md#import-csv) option. Furthermore, the ID of a previously created import profile can be specified in the call. These ID can be read out with the [import-csvprofiles](../../automation-and-integration/cli/console/options-and-parameters-cli.md#import-csvprofiles) option. The use of this option is also described in the mentioned article.
