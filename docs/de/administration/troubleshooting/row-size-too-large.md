# Row size too large

## Problem

Ich möchte i-doit Updaten. Während des Update erscheint eine Fehlermeldung, wie z.B.:

[![Problem](../../assets/images/de/administration/troubleshooting/row-size-too-large/1-rstl.png)](../../assets/images/de/administration/troubleshooting/row-size-too-large/1-rstl.png)

[![Problem](../../assets/images/de/administration/troubleshooting/row-size-too-large/2-rstl.png)](../../assets/images/de/administration/troubleshooting/row-size-too-large/2-rstl.png)

## Lösung

Ein Backup sollte wegen dem Update schon vorhanden sein.

Wir setzen das row size und führen das Update erneut aus:

Zuerst loggen wir uns bei mysql ein:

```sql
    mysql -uroot -p
```

Nun wird die betroffene Datenbank gewählt.

```sql
    USE idoit_data;
```

Falls der Fehler für mehrere Datenbanken auftritt, muss dieser Schritt für alle betroffenen Datenbanken ausgeführt werden.

Dies kann der Fall sein, wenn es mehrere Mandanten gibt.

Nun setzen wir das ROW\_FORMAT der Tabelle von Fixed auf Dynamic:

```sql
    ALTER TABLE isys_cats_person_list ROW_FORMAT=DYNAMIC;
```
