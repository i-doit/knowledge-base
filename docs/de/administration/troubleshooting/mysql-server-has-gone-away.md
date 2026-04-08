---
title: "\"MySQL-Server has gone away\""
description: "Beim Aufruf von i-doit erscheint die Fehlermeldung \"MySQL-Server has gone away\"."
icon:
status:
lang: de
---
# "MySQL-Server has gone away"

## Problem


[![mysql-server-has-gone-away.png](../../assets/images/de/administration/troubleshooting/mysql-server-has-gone-away.png)](../../assets/images/de/administration/troubleshooting/mysql-server-has-gone-away.png)

Beim Aufruf von i-doit erscheint die Fehlermeldung "MySQL-Server has gone away". Ursache ist in der Regel ein zu niedriger Wert für `max_allowed_packet`.

## Lösung

Erhöhe den Wert von `max_allowed_packet` in der Konfigurationsdatei von MySQL/MariaDB:

```ini
max_allowed_packet = 128M
```

Starte anschließend den MySQL/MariaDB-Dienst neu. Weitere empfohlene Werte findest du in unseren [Systemeinstellungen](../../installation/manuelle-installation/systemeinstellungen.md).
