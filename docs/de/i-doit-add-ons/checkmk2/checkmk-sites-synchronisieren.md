---
title: Checkmk Sites synchronisieren
description: Checkmk bietet eine verteilte Überwachung von Hosts und deren Diensten.
icon:
status:
lang: de
---
# Checkmk Sites synchronisieren

Checkmk bietet eine verteilte Überwachung von Hosts und deren Diensten. Du kannst mehrere Überwachungshosts konfigurieren, die als "Sites" bezeichnet werden. Um diese Sites mit i-doit zu teilen, führe aus:

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

```shell
idoitcmk sync-sites
```

\*Sites ohne Hosts werden nicht berücksichtigt.

In i-doit werden diese Sites im Dialog+-Attribut Site in der Kategorie Check_MK Host gespeichert.

**Empfehlung:** Führe diesen Befehl jedes Mal aus, wenn du eine neue Site hinzufügst.
