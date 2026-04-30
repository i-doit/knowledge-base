---
title: Row size too large
description: "Während eines i-doit-Updates erscheint eine Fehlermeldung wie \"Row size too large\":"
icon:
status:
lang: de
---
# Row size too large

## Problem

Während eines i-doit-Updates erscheint eine Fehlermeldung wie "Row size too large":

[![Problem](../../assets/images/de/administration/troubleshooting/row-size-too-large/1-rstl.png)](../../assets/images/de/administration/troubleshooting/row-size-too-large/1-rstl.png)

[![Problem](../../assets/images/de/administration/troubleshooting/row-size-too-large/2-rstl.png)](../../assets/images/de/administration/troubleshooting/row-size-too-large/2-rstl.png)

## Lösung

Stelle sicher, dass du bereits ein Backup hast (sollte vor jedem Update vorhanden sein). Dann ändere das `ROW_FORMAT` der betroffenen Tabelle und führe das Update erneut aus:

1. Melde dich bei MySQL an:

    ```sql
        mysql -uroot -p
    ```

2. Wähle die betroffene Datenbank:

    ```sql
        USE idoit_data;
    ```

    !!! note "Bei mehreren Mandanten musst du diesen Schritt für jede betroffene Datenbank wiederholen."

3. Setze das `ROW_FORMAT` der betroffenen Tabelle von `FIXED` auf `DYNAMIC`:

    ```sql
        ALTER TABLE isys_cats_person_list ROW_FORMAT=DYNAMIC;
    ```
