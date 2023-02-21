# Location Cannot Be Saved

Problem
-------

When saving in the Location category an error message appears:

    Error!
    
    CMDB Error: Database error : Query error: 'UPDATE isys_catg_location_list SET isys_catg_location_list__rgt = isys_catg_location_list__rgt + -4294967294 WHERE isys_catg_location_list__rgt > -1': BIGINT UNSIGNED value is out of range in '(`idoit_data`.`isys_catg_location_list`.`isys_catg_location_list__rgt` + -(4294967294))'

[![Problem](../../assets/images/en/system-administration/troubleshooting/location-can-not-be-saved/1-lcnbs.png)](../../assets/images/en/system-administration/troubleshooting/location-can-not-be-saved/1-lcnbs.png)

The exact wording can be slightly different. The result however is always the same: The location assignment is not saved.

Solution
--------

This problem can be caused by creating too many automated location assignments (e.g. via a [data import](../../consolidate-data/index.md)). The solution for this is to click the **Correction of locations** button at **Administration → Systemtools → Cache / Database → Database**. Afterwards the creation and editing of location assignments is possible again.

[![Solution](../../assets/images/en/system-administration/troubleshooting/location-can-not-be-saved/1-lcnbs.png)](../../assets/images/en/system-administration/troubleshooting/location-can-not-be-saved/1-lcnbs.png)