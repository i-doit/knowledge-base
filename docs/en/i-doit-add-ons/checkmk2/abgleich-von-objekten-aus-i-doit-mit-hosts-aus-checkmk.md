---
title: "Matching Objects from i-doit with Hosts from Checkmk 2"
description: "Before running push or pull, you may want to take a closer look at how your infrastructure looks in the two tools i-doit and..."
icon:
status:
lang: en
---
# Matching Objects from i-doit with Hosts from Checkmk 2

Before running [push](./wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md) or [pull](./bestandsdaten-in-die-cmdb-importieren.md), you may want to take a closer look at how your infrastructure looks in the two tools i-doit and Checkmk 2.

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

The [fetch-objects and fetch-hosts](./informationen-aus-i-doit-und-checkmk-lesen.md) commands give you detailed information about your documented objects in i-doit or your monitored hosts in Checkmk 2. But neither reconciles them with each other. This is done by the match command:

```shell
idoitcmk match
```

After comparing each object with each host, some detailed reports are generated:

*   Objects in i-doit that can be updated by hosts in Checkmk 2
*   Hosts in Checkmk 2 that are not available as objects in i-doit
*   Hosts in Checkmk 2 that can be updated by objects in i-doit
*   Objects in i-doit that are not available as hosts in Checkmk 2

None of your data will be changed.

If you increase the verbosity, this command gives you hints about what to do next:

```shell
idoitcmk match -v
```
