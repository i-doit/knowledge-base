---
title: Synchronisierung der Checkmk Agenten
description: Checkmk bietet eine agentenbasierte Überwachung von Hosts und deren Diensten.
icon:
status:
lang: de
---
# Synchronisierung der Checkmk Agenten

Checkmk bietet eine agentenbasierte Überwachung von Hosts und deren Diensten. Es gibt verschiedene Arten von Agenten, die mit i-doit geteilt werden können. Um dies zu tun, führe einfach aus:

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

```shell
idoitcmk sync-agents
```

Dadurch werden alle verfügbaren Agententypen zu i-doits Dialog+-Attribut "Agent" in der Kategorie Check_MK Host hinzugefügt.

**Empfehlung:** Du musst diesen Befehl nur einmal ausführen.
