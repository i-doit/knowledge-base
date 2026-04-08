---
title: Synchronize Checkmk Sites
description: Checkmk offers distributed monitoring of hosts and their services.
icon:
status:
lang: en
---
# Synchronize Checkmk Sites

Checkmk offers distributed monitoring of hosts and their services. You can configure multiple monitoring hosts, which are called "sites." To share these sites with i-doit, run:

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

```shell
idoitcmk sync-sites
```

Sites without hosts are not stored. The object type is automatically applied.

In i-doit, these sites are saved in the Dialog+ attribute Site in the Check_MK Host category.

**Recommendation:** Run this command every time you add a new site.
