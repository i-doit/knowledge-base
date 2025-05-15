---
title: MariaDB Database Corruption Errors
description: MariaDB Fehler und wie man diese löst
icon:
status: new
lang: de
---

## Fehlermeldungen

Die folgenden Fehlermeldungen können unter den verschiedensten Umständen auftreten. Durch einen Stromausfall während ein neues Update ausstand, oder während eines Updates des Betriebssystems, diese Fehler sind meistens durch Database corruption ausgelöst worden.

-   Upgrade after a crash is not supported
-   Generic Database error
-   Database corrupt
-   Failed to start MariaDB

## Möglicher Lösungsansatz

!!! warning "Wir übernehmen keine Verantwortung für diese Lösungsansätze und können nicht garantieren, dass die Fehler durch die Lösungsansätze behoben werden! Stellen Sie sicher, dass Sie vorher ein Backup oder einen Snapshot erstellt haben."

Diese Fehler können behoben werden, indem Sie die Datenbank Dateien (ib_logfile0 and ib_logfile1) in einen anderen Standort verschieben.
Diese Dateien sind System tablespaces für die InnoDB Infrastruktur und enthalten wichtige Classes für InnoDB.
Mehr Informationen über diese Dateien finden Sie [**hier**](https://dba.stackexchange.com/questions/27083/what-exactly-are-iblog-files-in-mysql).

Bevor Sie die folgenden Schritte befolgen, sollten Sie eine Kopie der beiden Dateien erstellen, damit Sie diese wiederherstellen können falls es zu Fehlern kommen sollte.

1. Verbinden Sie sich via SSH mit root rechten zu Ihrem Server.
2. Navigieren Sie zu /var/lib/mysql.
3. Wenn die Dateien ib_logfile0 und ib_logfile1 vorhanden sind, ändern Sie deren Namen oder verschieben Sie diese in einen anderen Ordner.
4. Stoppen und starten Sie den MySQL Service

    ```shell
    sudo service mysql stop 
    sudo service mysql start
    ```

5. Überprüfen Sie den MariaDB Service Status

    ```shell
    Systemctl status mariadb.service
    ```

Nach diesen Schritten sollten die Fehler behoben sein.
