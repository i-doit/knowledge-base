---
title: WATO Ordner synchronisieren
description: Hosts können hierarchisch in Ordnern geordnet werden.
icon:
status:
lang: de
---
# WATO Ordner synchronisieren

Hosts können hierarchisch in Ordnern geordnet werden. Diese Ordner können mit i-doit synchronisiert werden und zusätzliche Ordner in i-doit können verwendet werden, um neue Ordner in Checkmk zu erstellen. Führe einfach aus:

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

```shell
idoitcmk sync-folders
```

In i-doit werden diese WATO-Ordner im Dialog+-Attribut WATO-Ordner in der Kategorie Check_MK Host gespeichert.

**Empfehlung:** Führe diesen Befehl jedes Mal aus, wenn du einen neuen Ordner in Checkmk oder i-doit hinzufügst.
