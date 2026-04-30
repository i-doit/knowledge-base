---
title: Row size too large
description: "During an i-doit update, an error message like \"Row size too large\" appears:"
icon:
status:
lang: en
---
# Row size too large

## Problem

During an i-doit update, an error message like "Row size too large" appears:

[![Problem](../../assets/images/de/administration/troubleshooting/row-size-too-large/1-rstl.png)](../../assets/images/de/administration/troubleshooting/row-size-too-large/1-rstl.png)

[![Problem](../../assets/images/de/administration/troubleshooting/row-size-too-large/2-rstl.png)](../../assets/images/de/administration/troubleshooting/row-size-too-large/2-rstl.png)

## Solution

Make sure you already have a backup (this should exist before every update). Then change the `ROW_FORMAT` of the affected table and run the update again:

1. Log in to MySQL:

    ```sql
        mysql -uroot -p
    ```

2. Select the affected database:

    ```sql
        USE idoit_data;
    ```

    !!! note "With multiple tenants, you must repeat this step for each affected database."

3. Set the `ROW_FORMAT` of the affected table from `FIXED` to `DYNAMIC`:

    ```sql
        ALTER TABLE isys_cats_person_list ROW_FORMAT=DYNAMIC;
    ```
