---
title: Mariadb Database Corruption
description: "title: MariaDB Database Corruption Errors"
icon:
status:
lang: de
---

[![mariadb-database-corruption.png](../../assets/images/de/administration/troubleshooting/mariadb-database-corruption.png)](../../assets/images/de/administration/troubleshooting/mariadb-database-corruption.png)

---
title: MariaDB Database Corruption Errors
description: MariaDB Fehler und wie man diese löst
icon:
status:
lang: de
---

Dieser Artikel beschreibt typische MariaDB-Fehler nach einer Datenbankbeschädigung und zeigt einen möglichen Lösungsweg.

## Fehlermeldungen

Die folgenden Fehlermeldungen treten häufig nach einem Stromausfall, einem abgebrochenen Update oder einem Betriebssystem-Update auf -- sie deuten in der Regel auf eine Datenbankbeschädigung hin:

-   Upgrade after a crash is not supported
-   Generic Database error
-   Database corrupt
-   Failed to start MariaDB

## Möglicher Lösungsansatz

!!! warning "Wir übernehmen keine Verantwortung für diese Lösungsansätze und können nicht garantieren, dass die Fehler dadurch behoben werden. Stelle sicher, dass du vorher ein Backup oder einen Snapshot erstellt hast."

Die Ursache liegt oft in beschädigten InnoDB-Log-Dateien (`ib_logfile0` und `ib_logfile1`). Diese Dateien sind System-Tablespaces für die InnoDB-Infrastruktur. Mehr Informationen findest du [hier](https://dba.stackexchange.com/questions/27083/what-exactly-are-iblog-files-in-mysql).

### Schritt-für-Schritt-Anleitung

1. Verbinde dich via SSH mit Root-Rechten zu deinem Server.
2. Erstelle eine Sicherungskopie der beiden Dateien:

    ```shell
    sudo cp /var/lib/mysql/ib_logfile0 /var/lib/mysql/ib_logfile0.bak
    sudo cp /var/lib/mysql/ib_logfile1 /var/lib/mysql/ib_logfile1.bak
    ```

3. Benenne die Dateien um oder verschiebe sie in einen anderen Ordner:

    ```shell
    sudo mv /var/lib/mysql/ib_logfile0 /tmp/
    sudo mv /var/lib/mysql/ib_logfile1 /tmp/
    ```

4. Starte den MySQL/MariaDB-Service neu:

    ```shell
    sudo service mysql stop
    sudo service mysql start
    ```

5. Überprüfe den Service-Status:

    ```shell
    systemctl status mariadb.service
    ```

Nach diesen Schritten sollten die Fehler behoben sein.
