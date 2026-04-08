---
title: "\"Lost link to database\""
description: "In der Login-Maske erscheint nach Angabe der Credentials die Fehlermeldung Lost link to database."
icon:
status:
lang: de
---
# "Lost link to database"

## Problem


[![lost-link-to-database.png](../../assets/images/de/administration/troubleshooting/lost-link-to-database.png)](../../assets/images/de/administration/troubleshooting/lost-link-to-database.png)

In der Login-Maske erscheint nach Angabe der Credentials die Fehlermeldung **Lost link to database**. Der Login schlägt fehl.

## Lösung

i-doit kann nicht auf die gewünschte [Mandanten-Datenbank](../../software-entwicklung/datenbank-modell/index.md) zugreifen. Dieser Fehler tritt häufig auf, wenn eine i-doit-Installation auf ein anderes System umzieht und die MySQL/MariaDB-Benutzer auf dem neuen System nicht existieren.

### Hintergrund

In der [System-Datenbank](../../software-entwicklung/datenbank-modell/index.md) (`idoit_system` bei [Standardinstallationen](../../installation/manuelle-installation/setup.md)) speichert i-doit alle konfigurierten Mandanten in der Tabelle `isys_mandator`. Jeder Mandant besitzt eine eigene Datenbank (`idoit_data` für den ersten Mandanten bei Standardinstallationen).

Die Zugangsdaten zur Mandanten-Datenbank stehen in den Spalten `isys_mandator__db_user` und `isys_mandator__db_pass`. Prüfe diese auf Gültigkeit.

### Verbindung testen

Teste die Credentials auf der Kommandozeile:

```sql
    mysql -hlocalhost -uidoit -p
```

Gib die Credentials für die gewünschte Mandanten-Datenbank an. Nach dem Ausführen fragt MySQL nach dem Passwort. Schlägt die Anmeldung fehl, sind die Credentials ungültig. Bei erfolgreicher Anmeldung prüfe zusätzlich, ob der User Leserechte auf die Mandanten-Datenbank hat:

```sql
    mysql> USE idoit_data;
    mysql> SHOW TABLES;
```

Werden hier Fehlermeldungen ausgegeben, stimmt etwas nicht.

### User-Tabelle prüfen

Ein Blick in die User-Tabelle von MySQL/MariaDB schafft Klarheit. Melde dich dazu als Datenbank-Administrator an (häufig `root`):

```sql
    mysql -hlocalhost -uroot -p
    mysql> USE mysql;
    mysql> SELECT * FROM user;
```

Fehlt der User, trage ihn mit folgendem Befehl nach:

```sql
    mysql> GRANT ALL PRIVILEGES ON idoit_data TO 'idoit'@'localhost' IDENTIFIED BY 'idoit';
```

!!! warning "Ersetze in diesem Beispiel den Datenbanknamen, den User und das Passwort durch die tatsächlich verwendeten bzw. sichere Werte."

Alternativ kannst du Administrations-Werkzeuge wie [phpMyAdmin](https://de.wikipedia.org/wiki/PhpMyAdmin) verwenden.
