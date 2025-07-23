# H-Inventory

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfying, it can then be restored"

h-inventory is an open source software for automatic inventory of hardware and software components as well as entire networks. The software is available on SourceForge at [http://sourceforge.net/projects/h-inventory/](http://sourceforge.net/projects/h-inventory/) for various operating systems.

i-doit is able to import data from the inventory tool h-inventory. The data exported there in XML format is prepared during import to such an extent that the information necessary for a CMDB can be taken over as far as possible. In this way, a lot of essential information can be collected automatically as the basis for a CMDB or IT documentation, in order to be manually enriched with further information in a later step.

**The following data can be transferred from h-inventory:**

**[![h-inventory-transfer](../assets/images/en/consolidate-data/h-inventory/1-hi.png)](../assets/images/en/consolidate-data/h-inventory/1-hi.png)**

Before an import, i-doit must be configured accordingly.

Configuration
-------------

For a manual data import, the configuration is located under Administration → Interfaces / External Data → Import → h-Inventory → Configuration. There, only the parameter Object Matching Profile is used to specify [how already documented objects are to be identified](object-identification-during-imports.md). Identified objects are updated during data import.

Inventory of a Microsoft Windows Client via H-Inventory
-------------------------------------------------------

Download the H-Inventory package from i-doit → Tools → Import → Scripts

[![h-inventory-transfer](../assets/images/en/consolidate-data/h-inventory/2-hi.png)](../assets/images/en/consolidate-data/h-inventory/2-hi.png)

Unpack the archive.

Enter the IP address(es) to be scanned in computer.txt Execute scan.bat.

After successful execution of the script, the export is located in the file "computername-xx.xml" in the same directory.

Graphical import of an H-Inventory export
-----------------------------------------

i-doit -> Tools -> Import -> Import

Upload XML file

Select file from the list of uploaded exports

Select appropriate object type and import method - in this case client and inventory (for H-Inventory)

Import with "Next "".

The imported client is now available

Import eines H-Inventory Exports per Konsole
--------------------------------------------

Besides the possibility to upload the XML file via the i-doit interface and import the information, this process can also be automated. The i-doit [Console](../automation-and-integration/cli/index.md) is used for this purpose. Before the import can be executed, it must be ensured that the XML file is available to the system. To do this, the XML file must be copied to the i-doit directory imports or stored there directly. Afterwards the import can be started via the console. A description of the possible parameters and an example call can be found in the [corresponding article](../automation-and-integration/cli/index.md) for the import-hinventory command.
