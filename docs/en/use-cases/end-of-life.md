---
title: Documenting End of Life Data
description: Learn how to manage End of Life (EOL) data efficiently in i-doit, from manual entry directly at the asset to a central list per device class with a report category, filled via CSV import.
lang: en
---

# Documenting End of Life Data

Monitoring End of Life (EOL) and End of Support (EOS) dates is essential for proactive lifecycle management.
i-doit offers several strategies to maintain this data, to save object licenses, and to make the information intuitively usable for your colleagues.

Below we present different approaches, from the classic documentation directly at the asset to a central list per device class that is displayed at each device through a report category.
The last section shows step by step how the central list is set up and filled via [CSV import](../consolidate-data/csv-data-import/index.md).

## Approach 1: Decentralized Documentation Directly at the Asset

In this classic approach, you create a [custom category](../basics/custom-categories.md) (e.g. "Lifecycle") and assign it directly to the respective hardware object types (server, client, switch etc.).

*   **Attributes:** End of Sale, End of Support, End of Life, Status.
*   **Advantage:** The information is visible directly at the respective asset.
*   **Disadvantage:** High maintenance effort with many identical devices, because you have to enter the data redundantly at every single asset.

## Approach 2: Central List Object with a Multi-Value Category

To avoid redundancy, you can bundle EOL data centrally.
A very flexible way is the use of list categories (multi-value).

1. You create an [object type](../basics/custom-object-types.md) (e.g. "End of Life") and in it one collective object per device class (e.g. an object named "Switches").
2. You assign a custom **multi-value category** (e.g. "EOL Switches") to this object.
3. The category contains attributes such as *Manufacturer*, *Model*, *End of Life date* and *Source/Link*.
4. **Implementation:** For every model in your infrastructure you create a new entry (row) in this category.

*   **Advantages:** Very tidy; minimal maintenance effort; scales well even with a large number of different models, because the category configuration does not need to be changed.

## Approach 3: The "Intuitive Approach" (One Field per Model)

*This approach is based on a solution of an i-doit user.*

This method is particularly user-friendly, clear, and saves object licenses, because you need exactly one object per device class.

1. In the object type group "Other", create a separate object type for each device class (e.g. "EOL Switches", "EOL Routers").
2. Create **exactly one object** of this type (e.g. "Switches").
3. Create a custom category for the object type (e.g. "Switch EOL data") and assign it to this object type.
4. In the category configuration, create the different models of the device class as individual **fields** (type *Date and time*, addition *Without time*). A field is then called "Aruba Instant On 1430", for example.
5. **Configure the overview page:** Set up the overview page of this object so that all fields of this category are displayed immediately.

*   **Advantages:** Extremely intuitive maintenance for your colleagues (simple date selection via the calendar widget); all EOL dates of a device class at a glance; very resource-saving and license-saving.
*   **Administrative effort:** As an administrator you only have to act when a completely new model is added to the infrastructure. Then you simply add a new date field to the category.

## Visualization at the Device: The Report Category

If you decide on central maintenance (approach 2 or 3), you probably still want to see the EOL information when you open the object of a specific device (e.g. a single switch in the rack).

You solve this with a **custom category with a field of the type "Report"**:

1. Create a [report](../evaluation/report-manager.md) that compares the model of the specific device with the central EOL data.
2. Create a category with a field of the type "Report" that has this report as content.
3. Assign the category to the object type.
4. **Result:** When you open the switch, the category "End of Life" immediately shows the EOL date that applies to this model, although the data is maintained centrally.

## Data Entry and Automation

Whichever approach you choose, you can also automate the initial data and regular updates:

*   **CSV import:** If manufacturers provide lists with support periods, you can prepare this data as CSV and import it in bulk into your EOL categories.
*   **API script:** For complete automation, a script (e.g. once a day) can query an external source or CSV, compare the models with your i-doit CMDB, and write the EOL data into the corresponding categories via the [API](../i-doit-add-ons/api/index.md).

## Step by Step: Central List with Report Category

This section shows approach 2 combined with the report category, tested with i-doit 38.
The example uses switches; the same procedure works for any object type that uses the category **Model**.

### 1. Create the Object Type and the List Object

Under **Administration → Data structure → Object types → Other**, click **New** and create the [custom object type](../basics/custom-object-types.md) **End of Life** with the constant `C__OBJTYPE__END_OF_LIFE`.
Then create one object of this type per device class, in the example the object **Switches**.

### 2. Create the Multi-Value Category

Under **Administration → Data structure → Custom categories**, create the category **EOL Switches** with the following settings:

*   **Object types:** End of Life
*   **Constant:** `C__CATG__CUSTOM_FIELDS_EOL_SWITCHES`
*   **List category ("Multi-Value"):** Yes
*   **Fields:** Manufacturer (Textfield), Model (Textfield), End of Sale, End of Support and End of Life (each Date and time, addition **Without time**) and Source (Link)

[![Configuration of the multi-value category EOL Switches](../assets/images/en/use-cases/end-of-life/1-eol.png)](../assets/images/en/use-cases/end-of-life/1-eol.png)

The values in **Manufacturer** and **Model** must be written exactly as they appear in the category **Model** of the devices, because the report later compares these texts.

### 3. Fill the List via CSV Import

Prepare a CSV file with one row per model.
The first column contains the title of the list object, so that all rows end up in the same object:

```csv
Object title;Manufacturer;Model;End of Sale;End of Support;End of Life;Source
Switches;Cisco;Catalyst 2960-X-24TS-L;2022-10-31;2025-10-31;2027-10-31;https://www.cisco.com/...
Switches;Cisco;Catalyst 9300-48T;2028-10-31;2031-10-31;2033-10-31;https://www.cisco.com/...
Switches;HP;Aruba 2930F-24G-4SFP;2026-01-31;2029-01-31;2031-01-31;https://www.hpe.com/...
```

The dates in this example are fictitious; take the real dates from the manufacturer's announcements.
Dates are imported in the format `YYYY-MM-DD`.

Under **Extras → Import → CSV import**, upload the file and click **Use for import**:

*   **Global object type:** End of Life
*   **Handling multi-valued categories:** *Create category entries and replace existing ones (replace)*, so that a re-import with an updated list replaces the old entries.
*   Click **Prepare mapping**.
*   **Import matching profiles:** Click **Add identification field** and select the column header **Object title** and the category attribute **Object title**.
*   **Assignment:** Assign the column **Object title** to **Object title** and the other columns to the attributes of the category **EOL Switches**.

[![CSV import mapping for the EOL list](../assets/images/en/use-cases/end-of-life/2-eol.png)](../assets/images/en/use-cases/end-of-life/2-eol.png)

!!! warning "Set the identification field"
    Without the identification field, the import does not find the existing object and creates a new object named "Switches" for every row of the file.

Start the import.
The category **EOL Switches** of the object **Switches** now contains one entry per model:

[![Entries of the category EOL Switches](../assets/images/en/use-cases/end-of-life/3-eol.png)](../assets/images/en/use-cases/end-of-life/3-eol.png)

### 4. Create the Report for the Device View

In the **Report Manager**, open the drop-down next to **New** and select **SQL-Editor**.
Create the report **EOL data of this device** with the following query.
The report reads the manufacturer and model of the current object from the category **Model** and looks up the matching entry of the list object.

The values of a custom category are stored in the table `isys_catg_custom_fields_list`, one row per field.
The field keys (`c_...`) are shown under **Show technical configuration** in the custom category; replace them with the keys of your category.

```sql
SELECT obj_main.isys_obj__id AS '__id__',
       mf.isys_model_manufacturer__title AS 'LC__CMDB__CATG__MANUFACTURER###0_1',
       mt.isys_model_title__title AS 'LC__CMDB__CATG__MODEL###0_2',
       eos.isys_catg_custom_fields_list__field_content AS 'End of Sale###0_3',
       eosup.isys_catg_custom_fields_list__field_content AS 'End of Support###0_4',
       eol.isys_catg_custom_fields_list__field_content AS 'End of Life###0_5',
       src.isys_catg_custom_fields_list__field_content AS 'Source###0_6'
FROM isys_obj AS obj_main
JOIN isys_catg_model_list AS ml ON ml.isys_catg_model_list__isys_obj__id = obj_main.isys_obj__id
JOIN isys_model_manufacturer AS mf ON mf.isys_model_manufacturer__id = ml.isys_catg_model_list__isys_model_manufacturer__id
JOIN isys_model_title AS mt ON mt.isys_model_title__id = ml.isys_catg_model_list__isys_model_title__id
JOIN isys_catg_custom_fields_list AS model ON model.isys_catg_custom_fields_list__field_key = 'c_17900575498346501'
     AND model.isys_catg_custom_fields_list__field_content = mt.isys_model_title__title
JOIN isys_obj AS listobj ON listobj.isys_obj__id = model.isys_catg_custom_fields_list__isys_obj__id
     AND listobj.isys_obj__status = 2
JOIN isys_catg_custom_fields_list AS manu ON manu.isys_catg_custom_fields_list__data__id = model.isys_catg_custom_fields_list__data__id
     AND manu.isys_catg_custom_fields_list__field_key = 'c_17900575498342330'
     AND manu.isys_catg_custom_fields_list__field_content = mf.isys_model_manufacturer__title
LEFT JOIN isys_catg_custom_fields_list AS eos ON eos.isys_catg_custom_fields_list__data__id = model.isys_catg_custom_fields_list__data__id
     AND eos.isys_catg_custom_fields_list__field_key = 'c_17900575498343552'
LEFT JOIN isys_catg_custom_fields_list AS eosup ON eosup.isys_catg_custom_fields_list__data__id = model.isys_catg_custom_fields_list__data__id
     AND eosup.isys_catg_custom_fields_list__field_key = 'c_1790057549834133'
LEFT JOIN isys_catg_custom_fields_list AS eol ON eol.isys_catg_custom_fields_list__data__id = model.isys_catg_custom_fields_list__data__id
     AND eol.isys_catg_custom_fields_list__field_key = 'c_17900575498344594'
LEFT JOIN isys_catg_custom_fields_list AS src ON src.isys_catg_custom_fields_list__data__id = model.isys_catg_custom_fields_list__data__id
     AND src.isys_catg_custom_fields_list__field_key = 'c_17900575498348255'
WHERE model.isys_catg_custom_fields_list__status = 2
  AND obj_main.isys_obj__id PLACEHOLDER 'object-id'
```

The condition `PLACEHOLDER 'object-id'` is replaced at runtime by the ID of the object you are currently viewing.
In the Report Manager itself the report therefore returns no rows; it is meant to be executed inside an object.

### 5. Create the Report Category for the Switches

Create a second custom category **End of Life** with the object type **Switch**, single-value, and one field of the type **Report**.
Under **Addition**, select the report **EOL data of this device**.
The field title can stay empty.

[![Configuration of the report category End of Life](../assets/images/en/use-cases/end-of-life/5-eol.png)](../assets/images/en/use-cases/end-of-life/5-eol.png)

Every switch now has the category **End of Life**, which shows the entry of the central list that matches its model:

[![Category End of Life of a switch with the EOL data of its model](../assets/images/en/use-cases/end-of-life/4-eol.png)](../assets/images/en/use-cases/end-of-life/4-eol.png)

### 6. Optional: Overview Report of Affected Devices

The same joins also produce a normal report that lists all switches whose model reaches End of Life within the next 24 months.
Create it in the SQL editor as well, for example named **Switches reaching End of Life within 24 months**:

```sql
SELECT obj_main.isys_obj__id AS '__id__',
       obj_main.isys_obj__title AS 'LC__UNIVERSAL__TITLE###0_1',
       mf.isys_model_manufacturer__title AS 'LC__CMDB__CATG__MANUFACTURER###0_2',
       mt.isys_model_title__title AS 'LC__CMDB__CATG__MODEL###0_3',
       eol.isys_catg_custom_fields_list__field_content AS 'End of Life###0_4',
       DATEDIFF(eol.isys_catg_custom_fields_list__field_content, CURDATE()) AS 'Days left###0_5'
FROM isys_obj AS obj_main
JOIN isys_obj_type AS ot ON ot.isys_obj_type__id = obj_main.isys_obj__isys_obj_type__id
JOIN isys_catg_model_list AS ml ON ml.isys_catg_model_list__isys_obj__id = obj_main.isys_obj__id
JOIN isys_model_manufacturer AS mf ON mf.isys_model_manufacturer__id = ml.isys_catg_model_list__isys_model_manufacturer__id
JOIN isys_model_title AS mt ON mt.isys_model_title__id = ml.isys_catg_model_list__isys_model_title__id
JOIN isys_catg_custom_fields_list AS model ON model.isys_catg_custom_fields_list__field_key = 'c_17900575498346501'
     AND model.isys_catg_custom_fields_list__field_content = mt.isys_model_title__title
JOIN isys_obj AS listobj ON listobj.isys_obj__id = model.isys_catg_custom_fields_list__isys_obj__id
     AND listobj.isys_obj__status = 2
JOIN isys_catg_custom_fields_list AS manu ON manu.isys_catg_custom_fields_list__data__id = model.isys_catg_custom_fields_list__data__id
     AND manu.isys_catg_custom_fields_list__field_key = 'c_17900575498342330'
     AND manu.isys_catg_custom_fields_list__field_content = mf.isys_model_manufacturer__title
JOIN isys_catg_custom_fields_list AS eol ON eol.isys_catg_custom_fields_list__data__id = model.isys_catg_custom_fields_list__data__id
     AND eol.isys_catg_custom_fields_list__field_key = 'c_17900575498344594'
WHERE ot.isys_obj_type__const = 'C__OBJTYPE__SWITCH'
  AND obj_main.isys_obj__status = 2
  AND model.isys_catg_custom_fields_list__status = 2
  AND eol.isys_catg_custom_fields_list__field_content <= DATE_ADD(CURDATE(), INTERVAL 24 MONTH)
ORDER BY eol.isys_catg_custom_fields_list__field_content, obj_main.isys_obj__title
```

[![Report of the switches reaching End of Life within 24 months](../assets/images/en/use-cases/end-of-life/6-eol.png)](../assets/images/en/use-cases/end-of-life/6-eol.png)

With a [notification](../evaluation/notifications.md) or an [automated report export](../evaluation/report-manager.md#automated-report-export), this list can be sent regularly.

## Further Readings

*   [Custom categories](../basics/custom-categories.md): field types and the technical configuration with the field keys
*   [Custom object types](../basics/custom-object-types.md): creating the object type End of Life
*   [CSV data import](../consolidate-data/csv-data-import/index.md): identification of objects and handling of multi-value categories
*   [Report Manager](../evaluation/report-manager.md): SQL editor and automated report export
*   [Variable reports](variable-reports.md): another example of a report that runs in the context of the current object
