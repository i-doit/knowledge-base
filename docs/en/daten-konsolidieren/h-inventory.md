---
title: "h-inventory"
description: "With h-inventory, you automatically inventory hardware, software, and entire networks."
icon:
status:
lang: en
---
# h-inventory

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

With h-inventory, you automatically inventory hardware, software, and entire networks. The open-source software is available on SourceForge at [http://sourceforge.net/projects/h-inventory/](http://sourceforge.net/projects/h-inventory/) for various operating systems.

i-doit imports the data exported by h-inventory in XML format and adopts all CMDB-relevant information. This allows you to quickly build a data foundation that you can then further enrich manually.

**The following data can be imported from h-inventory:**

[![Attributes and categories](../assets/images/de/daten-konsolidieren/h-inventory/1-hinv.jpg)](../assets/images/de/daten-konsolidieren/h-inventory/1-hinv.jpg)

## Configuration

Before importing, configure the interface under **Administration → Import and Interfaces → H-Inventory → Configuration**. In the **Object Matching Profile** parameter, you define [how already documented objects are identified](objekt-identifizieren-bei-importen.md). Recognized objects are updated during import instead of being created as duplicates.

## Inventorying a Windows Client

To scan a Windows client with h-inventory:

1. Download the H-Inventory package under **Extras → CMDB → Import → H-Inventory**.
2. Extract the archive.
3. Enter the IP addresses to be scanned in the **computer.txt** file.
4. Run **scan.bat**.

[![XML Import](../assets/images/de/daten-konsolidieren/h-inventory/1-hinv.jpg)](../assets/images/de/daten-konsolidieren/h-inventory/1-hinv.jpg)

After the scan is complete, you will find the export as **computername-xx.xml** in the same directory.

## Graphical Import

To import the scan results via the web interface:

1. Navigate to **Extras → Import → Import**.
2. Upload the XML file.
3. Select the file from the list of uploaded exports.
4. Select the object type **Client** and the import method **inventory** (for H-Inventory).
5. Start the import with **Next >>**.

The imported client is now available in i-doit.

## Import via Console

You can also automate the import. Use the [i-doit console utility](../automatisierung-und-integration/cli/index.md) for this:

1. Ensure the XML file is accessible on the server.
2. Start the import via the console.

All parameters and an example call are available via the `--help` option.
