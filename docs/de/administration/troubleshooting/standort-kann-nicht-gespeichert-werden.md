---
title: Standort kann nicht gespeichert werden
description: "Beim Speichern in der Kategorie Standort erscheint eine Fehlermeldung:"
icon:
status:
lang: de
---
# Standort kann nicht gespeichert werden

## Problem

Beim Speichern in der Kategorie **Standort** erscheint eine Fehlermeldung:

```
    Error!

    CMDB Error: Database error : Query error: 'UPDATE isys_catg_location_list SET isys_catg_location_list__rgt = isys_catg_location_list__rgt + -4294967294 WHERE isys_catg_location_list__rgt > -1': BIGINT UNSIGNED value is out of range in '(idoit_data.isys_catg_location_list.isys_catg_location_list__rgt + -(4294967294))'
```

[![Problem](../../assets/images/de/administration/troubleshooting/standort-kann-nicht-gespeichert-werden/1-skngw.png)](../../assets/images/de/administration/troubleshooting/standort-kann-nicht-gespeichert-werden/1-skngw.png)

Der genaue Wortlaut der Fehlermeldung kann abweichen. Das Resultat ist allerdings immer gleich: Die Standortzuweisung wird nicht gespeichert.

## Lösung

Dieses Problem tritt häufig auf, wenn sehr viele Standortzuweisungen durch einen Automatismus (z. B. einen [Datenimport](../../daten-konsolidieren/index.md)) erstellt wurden.

So behebst du das Problem:

1. Navigiere zu **Verwaltung → Systemtools → Cache / Datenbank → Datenbank**
2. Klicke auf **Standortkorrektur**

Danach kannst du Standortzuweisungen wieder problemlos erstellen und ändern.

[![Lösung](../../assets/images/de/administration/troubleshooting/standort-kann-nicht-gespeichert-werden/2-skngw.png)](../../assets/images/de/administration/troubleshooting/standort-kann-nicht-gespeichert-werden/2-skngw.png)
