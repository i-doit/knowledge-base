---
title: Location Cannot Be Saved
description: "When saving in the Location category, an error message appears:"
icon:
status:
lang: en
---
# Location Cannot Be Saved

## Problem

When saving in the **Location** category, an error message appears:

```
    Error!

    CMDB Error: Database error : Query error: 'UPDATE isys_catg_location_list SET isys_catg_location_list__rgt = isys_catg_location_list__rgt + -4294967294 WHERE isys_catg_location_list__rgt > -1': BIGINT UNSIGNED value is out of range in '(idoit_data.isys_catg_location_list.isys_catg_location_list__rgt + -(4294967294))'
```

[![Problem](../../assets/images/de/administration/troubleshooting/standort-kann-nicht-gespeichert-werden/1-skngw.png)](../../assets/images/de/administration/troubleshooting/standort-kann-nicht-gespeichert-werden/1-skngw.png)

The exact wording of the error message may vary. However, the result is always the same: the location assignment is not saved.

## Solution

This problem frequently occurs when a large number of location assignments have been created by an automated process (e.g., a [data import](../../daten-konsolidieren/index.md)).

To fix the problem:

1. Navigate to **Administration → System Tools → Cache / Database → Database**
2. Click **Location correction**

Afterwards, you can create and modify location assignments without problems.

[![Solution](../../assets/images/de/administration/troubleshooting/standort-kann-nicht-gespeichert-werden/2-skngw.png)](../../assets/images/de/administration/troubleshooting/standort-kann-nicht-gespeichert-werden/2-skngw.png)
