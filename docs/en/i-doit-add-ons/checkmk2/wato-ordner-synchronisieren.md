---
title: Synchronize WATO Folders
description: Hosts can be organized hierarchically in folders.
icon:
status:
lang: en
---
# Synchronize WATO Folders

Hosts can be organized hierarchically in folders. These folders can be synchronized with i-doit, and additional folders in i-doit can be used to create new folders in Checkmk. Simply run:

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

```shell
idoitcmk sync-folders
```

In i-doit, these WATO folders are saved in the Dialog+ attribute WATO folder in the Check_MK Host category.

**Recommendation:** Run this command every time you add a new folder in Checkmk or i-doit.
