---
title: CSV Import Example: Applications
description: Example for CSV import of applications
icon:
status:
lang: en
---
# CSV Import Example: Applications

This example shows how to import applications into i-doit via CSV. The goal is to create objects of type **Applications** and fill the category **Applications → installation** with data.

## Prerequisites

- A working i-doit installation
- A CSV file with the application data

## CSV File Structure

The CSV file should contain the following columns:

| Column | Description |
| --- | --- |
| **Title** | Name of the application |
| **Manufacturer** | Manufacturer of the application |
| **Release** | Version/Release of the application |
| **Description** | Description of the application |

## Example CSV File

```csv
Title;Manufacturer;Release;Description
Microsoft Office;Microsoft;2019;Office suite
Adobe Acrobat Reader;Adobe;2021;PDF reader
Mozilla Firefox;Mozilla;102;Web browser
```

## Import Steps

1. Navigate to **Extras → CMDB → Import → CSV Import**.
2. Upload the CSV file.
3. Select the object type **Applications**.
4. Map the CSV columns to the i-doit attributes.
5. Start the import.

For detailed instructions on the CSV import process, see [CSV Data Import](index.md).


## See also

- [CSV Data Import](index.md) — General CSV import documentation
- [CSV Import Example: Workstations](csv-import-example-workstations.md)
- [CSV Import Example: Licenses](csv-import-example-licenses.md)
- [CSV Import Example: Creating Locations](csv-import-example-locations.md)
