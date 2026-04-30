---
title: Synchronize Host Tags
description: "The host and service checks in Checkmk are frequently based on the tagging system."
icon:
status:
lang: en
---
# Synchronize Host Tags

The host and service checks in Checkmk are frequently based on the tagging system. You can share tag groups and the tags themselves with i-doit by running:

```shell
idoitcmk sync-tags
```

The tags are stored in i-doit under Extras > Check_MK 2 > Tags (static) and can be assigned to all objects with the Host tags attribute in the Check_MK Tags category.

**Recommendation:** Run this command every time you add new host tags/groups in Checkmk.

If custom tags are created, it is important to fill in all fields so that the tags can be created in Checkmk. A mapping of the fields can be seen in the screenshot.

[![Synchronize Host Tags](../../assets/images/de/i-doit-add-ons/checkmk2/host-tags/host-tags.png)](../../assets/images/de/i-doit-add-ons/checkmk2/host-tags/host-tags.png)
