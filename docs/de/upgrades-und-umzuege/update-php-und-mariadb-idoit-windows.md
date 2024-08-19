---
title: Update PHP und MariaDB für i-doit Windows
description: Anleitung zum updaten von PHP und MariaDB für i-doit Windows Installationen
icon: material/microsoft-windows
status:
lang: de
---

In diesem Artikel zeigen wir Ihnen, wie Sie PHP und MariaDB für Ihre [i-doit Windows](../installation/manuelle-installation/microsoft-windows-server/index.md) Installation updaten.

## Update Pakete

Um PHP und MariaDB erfolgreich updaten zu können, brauchen wir die jeweils richtigen Update Pakete.

### PHP 8.2

Um erfolgreich auf PHP8.2 updaten zu können wird das Update als zip Datei benötigt.
Das entsprechende Paket kann hier heruntergeladen werden (64bit Variante): [VS16 x64 Thread Safe](https://windows.php.net/download/)

!!! warning "Es muss unbedingt eine Zip Datei sein und die 'Thread Safe' Version"

### MariaDB 10.11

Um erfolgreich aus MariaDB 10.11 Updaten zu können benötigen wir die [MariaDB Server 10.11.1 RC Version](https://mariadb.org/download/?t=mariadb&o=true&p=mariadb&r=10.11.1&os=windows&cpu=x86_64&pkg=msi&mirror=archive)

??? info "Die bereits ausgewählten Optionen müssen vorhanden sein!"

[![MariaDB selektierte Optionen](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/1-pum.png)](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/1-pum.png)

<!--- Die Installation sollte wie folgt ablaufen:

- Backup vorab erstellen

MariaDB:
- apache service stoppen
- das vorhandene mariadb aktualisieren, nicht neu installieren!
- den Pfad im "installer" auf ProgrammData abändern
- Database Instance muss aus sein
-Launch wizard häkchen an vor finish

PHP:
-backup der php.ini machen (rauskopieren)
-zip enpacken
-php.ini wieder einfügen

-->
