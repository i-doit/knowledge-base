---
title: CSV Import Example Licenses
description: "This example builds on the CSV import of applications. You import licenses with all relevant key and runtime information."
icon:
status:
lang: en
---

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is not satisfactory, the backup can then be restored"

!!! note "This article was last verified for i-doit version 34"

This example builds on the [CSV import of applications](beispiel-fuer-den-csv-import-anwendungen.md). You import licenses with all relevant key and runtime information.

### Required Information

-   Object type -- Which object type will be created?
-   Object name -- Name of the license
-   License assignment: License key - License type -- Single or volume license?
-   License assignment: License key - Quantity -- How many licenses?
-   License assignment: License key - Key -- What is the license key?
-   License assignment: License key - Serial number -- What is the serial number?
-   License assignment: License key - Start date -- From when is the license valid?
-   License assignment: License key - Expiration date -- When does it expire?
-   License assignment: License key - Unit price -- What does one license cost?

### Observe Data Formats

!!! note "Pay attention to the correct data formats during import."

[![Display in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/1-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/1-csv-lic.png)

i-doit expects the following formats:

- **Dialog designations:** German language, e.g., `Einzel-Lizenz`
- **Date format:** `DD.MM.YYYY` (e.g., `01.01.2021`)
- **Numeric format:** `X.XXX,XX` (e.g., `9.999,99`). Since multi-values are specified comma-separated, use the period for decimal places (e.g., `1000.99`)

Example CSV file for this import:

[Import-Lizenzen.csv :material-file-download:](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/Import-Lizenzen.csv){ .md-button .md-button--primary }

??? example "Import Lizenzen.csv"
    ```text
    objecttyp;objectName;Lizenzzuweisung: Lizenzschlüssel - Lizenz Typ;Lizenzzuweisung: Lizenzschlüssel - Anzahl;Lizenzzuweisung: Lizenzschlüssel - key;Lizenzzuweisung: Lizenzschlüssel - Serial number;Lizenzzuweisung: Lizenzschlüssel - Startdatum;Lizenzzuweisung: Lizenzschlüssel - Ablaufdatum;Lizenzzuweisung: Lizenzschlüssel - Einzelpreis
    C__OBJTYPE__LICENCE;Lizenz-X;Volumen-Lizenz;1000;Lizenz-X-111-LASKDZHW;123456789;01.01.2021;31.12.2021;999.99
    C__OBJTYPE__LICENCE;Lizenz-Y;Einzel-Lizenz;1;Lizenz-Y-211-OIHUASFD;1123456789;01.06.2021;31.12.2021;1399.99
    C__OBJTYPE__LICENCE;Lizenz-Z;Volumen-Lizenz,Volumen-Lizenz;100,50;Lizenz-Z-311-IGUHOPSD,Lizenz-Z-322-IUHGASD;11123456789,11223456789;01.01.2021,01.05.2021;31.12.2021,30.04.2021;1000.99,500.99
    ```

This import has no dependencies.

### Step-by-Step Instructions

1. Navigate to the CSV import under **Extras > Import > CSV Import**
2. Upload the CSV file and click **Prepare for Import**
3. Set the multi-value categories to **Comma-separated**

[![Display in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/2-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/2-csv-lic.png)

4. Configure the assignments as shown in the screenshot and start the import

[![Display in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/3-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/3-csv-lic.png)

### Result

The imported licenses appear in the list view:

[![Display in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/4-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/4-csv-lic.png)

The categories **License Assignment** and **License Assignment: License Key** are populated:

[![Display in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/5-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/5-csv-lic.png)

[![Display in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/6-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/6-csv-lic.png)

## Importing Objects with Volume Licenses

If you want to import an object with a volume license and its associated key, enter the license via the category **Software Assignment**. The CSV file must use the following syntax:

[Volumen-Lizenz.csv :material-file-download:](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/Volumen-Lizenz.csv){ .md-button .md-button--primary }

??? example "Volumen-Lizenz.csv"
    ```text
    Titel;"Anwendung";Lizenz key
    DESKTOP-XMS3R8;"Windows 8 Development Essentials";"Development;MDW-4253-1257"
    DESKTOP-DK2MD9L;"Windows 10 Pro";"Professional;EVT-2024-9931"
    ```

Configure the mapping in i-doit as follows:

[![Display in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/7-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/7-csv-lic.png)

[![Display in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/8-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/8-csv-lic.png)

After the import, you will find a new entry with license and key in the **Software Assignment** category of the object:

[![Display in i-doit](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/9-csv-lic.png)](../../assets/images/de/daten-konsolidieren/csv-import/csv-lizenzen/9-csv-lic.png)
