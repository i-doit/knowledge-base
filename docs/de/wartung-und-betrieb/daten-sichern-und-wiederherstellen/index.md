# Daten sichern und wiederherstellen

Da sich in der [IT-Dokumentation](../../glossar.md#Glossar-IT-Dokumentation) wichtige, für die tägliche Arbeit benötigte Daten befinden, ist ein Backup und Recovery von _i-doit_ unablässig. Daher sollte _i-doit_ bei der bereits bestehenden Backup-Strategie berücksichtigt werden.

<!---Todo: Fixme--->
Hierbei müssen drei Bereiche abgedeckt werden: die [Datenbanken](#backup-und-recovery-der-datenbanken), die [Dateien](#backup-und-recovery-der-dateien) von _i-doit_ und die [Systemkonfiguration](#backup-und-recovery-der-systemkonfiguration).

Backup und Recovery der Datenbanken
-----------------------------------

Hierzu kann das Kommandozeilen-Tool mysqldump verwendet werden. Ein einfaches Beispiel zum Sichern aller Daten:

    mysqldump -hlocalhost -uroot -p --all-databases > backup.sql

Das entsprechende Recovery:


    mysql -hlocalhost -uroot -p < backup.sql

Während eines Backups sollte _i-doit_ nicht verwendet werden, um die Backups nicht zu korrumpieren. Für die Zeit des Backups bzw. des Recoverys kann der Webserver deaktiviert werden. Auf [Debian](../installation/../../installation/manuelle-installation/debian.md)\-basierten Linux-Distributionen führt man

    sudo service apache2 stop

aus. Nach dem Backup/Recovery kann mit

    sudo service apache2 start
<!---Todo: Fixme--->
der Webserver wieder aktiviert werden. Sind [Cronjobs](/display/de/CLI) für _i-doit_ eingerichtet, sollten diese ebenfalls während der Sicherung deaktiviert und nach Abschluss wieder aktiviert werden.

!!! success "Komprimieren"

    Viel Speicherplatz kann man sparen, indem die SQL-Dumps komprimiert werden. Die obigen Befehle könnten demnach so aussehen

        # Backup:
        mysqldump -hlocalhost -uroot -p --all-databases | gzip -9 > backup.sql.gz

        # Recovery:
        gunzip < backup.sql.gz | mysql -hlocalhost -uroot -p

!!! attention "Foreign Key Contraints"

    Beim Wiederherstellen von Datenbank-Inhalten kann es vorkommen, dass MySQL/MariaDB mit einer Fehlermeldung abbricht, etwa: errno: 150 "Foreign key constraint is incorrectly formed"

    Dies liegt daran, dass die Daten und Strukturen nacheinander, d. h., Tabelle für Tabelle wiederhergestellt werden. Zwischenzeitlich existieren demnach alte neben neuen (wiederhergestellten) Daten. Das Datenbank-Modell von i-doit enthält sehr viele Verknüpfungen von Tabellen untereinander, für die Foreign Keys Contraints verwendet werden. Diese Referenzierung von beispielsweise einem Datensatz A in Tabelle 1 auf Datensatz B in Tabelle 2 unterliegt bestimmten Automatismen, wenn A oder B aktualisiert oder gar gelöscht werden. Die Reihenfolge spielt dabei eine wichtige Rolle, wann A und wann B wiederhergestellt werden. Alte und neue Referenzen können allerdings dieselben Indizes verwenden, auch wenn sie unterschiedliche Referenzierungen ausdrücken. Dadurch kann es zu oben genannten Fehlern kommen.

    Als Workaround bietet es sich an, die Datenbanken vor der Wiederherstellung explizit zu löschen:

        -- Standard-Name der System-Datenbank:
        DROP DATABASE idoit_system;

        -- Standard-Name der ersten Mandanten-Datenbank:
        DROP DATABASE idoit_data;

Backup und Recovery der Dateien
-------------------------------

Es empfiehlt sich, das gesamte Verzeichnis von _i-doit_ zu sichern und bei Bedarf wiederherzustellen. Mittels

    tar -czvf i-doit.tar.gz /pfad/zu/i-doit

kann ein komprimiertes Tar-Archiv erstellt werden.

Das entsprechende Recovery:

    tar -xzv i-doit.tar.gz

Backup und Recovery der Systemkonfiguration
-------------------------------------------

Wichtig für den unmittelbaren Betrieb von _i-doit_ ist es, die Konfigurations-Dateien vom Apache Webserver, von PHP und von MySQL/MariaDB zu sichern und bei Bedarf wiederherzustellen. Bestenfalls hast du bereits bei der [Installation](../../installation/index.md) von _i-doit_ die entsprechenden Anpassungen an den Konfigurationsdateien dokumentiert und sicher hinterlegt.

Backup mittels VM-Snapshots
---------------------------

Häufig wird _i-doit_ auf einer virtuellen Maschine (VM) installiert. Für ein Backup und Recovery reicht es allerdings nicht aus, schlicht Snapshots der VMs im laufenden Betrieb zu erstellen. Das Problem liegt in der Konsistenz der Datenbanken: Die Daten liegen eventuell im Arbeitsspeicher und befinden sich (noch) nicht im nichtflüchtigen Speicher. Sie werden demnach durch die Sicherung oftmals nicht erfasst und gingen im Fall des Falles verloren.

Soll auf Snapshosts dennoch nicht verzichtet werden, muss vorher das DBMS MySQL/MariaDB gestoppt werden. Auf [Debian](../../installation/manuelle-installation/debian.md)\-basierten Linux-Betriebssystemen erledigt dies der Befehl:

    sudo service mysql stop

Nach dem Snapshot wird das DBMS wieder gestartet:

    sudo service mysql start

Sicherlich hinreichend bekannt, aber dennoch wichtig zu erwähnen: **Backups sollten niemals auf dem System verbleiben, das gesichert wird.**