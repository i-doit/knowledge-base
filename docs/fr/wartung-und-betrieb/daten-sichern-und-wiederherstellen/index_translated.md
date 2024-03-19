<!-- TRANSLATED by md-translate -->
# Daten sichern und wiederherstellen

# Sauvegarder et restaurer des données

Da sich in der [IT-Dokumentation](../../glossar.md#Glossar-IT-Dokumentation) wichtige, für die tägliche Arbeit benötigte Daten befinden, ist ein Backup und Recovery von _i-doit_ unablässig. Daher sollte _i-doit_ bei der bereits bestehenden Backup-Strategie berücksichtigt werden.

Comme la [documentation IT](../../glossar.md#Glossaire-Documentation IT) contient des données importantes nécessaires au travail quotidien, une sauvegarde et une restauration de _i-doit_ sont indispensables. C'est pourquoi _i-doit_ devrait être pris en compte dans la stratégie de sauvegarde déjà en place.

Hierbei müssen drei Bereiche abgedeckt werden: die [Datenbanken](#backup-und-recovery-der-datenbanken), die [Dateien](#backup-und-recovery-der-dateien) von _i-doit_ und die [Systemkonfiguration](#backup-und-recovery-der-systemkonfiguration).

Pour cela, trois domaines doivent être couverts : les [bases de données](#backup-et-restauration-des-bases-de-données), les [fichiers](#backup-et-restauration-des-fichiers) de _i-doit_ et la [configuration système](#backup-et-restauration-de-la-configuration-système).

## Backup und Recovery der Datenbanken

## Sauvegarde et restauration des bases de données

Hierzu kann das Kommandozeilen-Tool mysqldump verwendet werden. Ein einfaches Beispiel zum Sichern aller Daten:

L'outil de ligne de commande mysqldump peut être utilisé à cet effet. Un exemple simple pour sauvegarder toutes les données :

```
mysqldump -hlocalhost -uroot -p --all-databases > backup.sql
```

Das entsprechende Recovery:

La récupération correspondante :

```
mysql -hlocalhost -uroot -p < backup.sql
```

Während eines Backups sollte _i-doit_ nicht verwendet werden, um die Backups nicht zu korrumpieren. Für die Zeit des Backups bzw. des Recoverys kann der Webserver deaktiviert werden. Auf [Debian](../../installation/manuelle-installation/debian.md)-basierten Linux-Distributionen führt man

Pendant une sauvegarde, _i-doit_ ne doit pas être utilisé afin de ne pas corrompre les sauvegardes. Le serveur web peut être désactivé le temps de la sauvegarde ou de la restauration. Sur les distributions Linux basées sur [Debian](../../installation/manuelle-installation/debian.md), exécutez

```
sudo service apache2 stop
```

aus. Nach dem Backup/Recovery kann mit

est désactivée. Après la sauvegarde/restauration, vous pouvez cliquer sur

```
sudo service apache2 start
```

der Webserver wieder aktiviert werden. Sind [Cronjobs](../../automatisierung-und-integration/cli/index.md) für _i-doit_ eingerichtet, sollten diese ebenfalls während der Sicherung deaktiviert und nach Abschluss wieder aktiviert werden.

le serveur web doit être réactivé. Si des [tâches cron](../../automatisation-et-intégration/cli/index.md) sont configurées pour _i-doit_, elles doivent également être désactivées pendant la sauvegarde et réactivées une fois celle-ci terminée.

!!! success "Komprimieren"

! !! succes "Comprimer

```
Viel Speicherplatz kann man sparen, indem die SQL-Dumps komprimiert werden. Die obigen Befehle könnten demnach so aussehen

    # Backup:
    mysqldump -hlocalhost -uroot -p --all-databases | gzip -9 > backup.sql.gz

    # Recovery:
    gunzip < backup.sql.gz | mysql -hlocalhost -uroot -p
```

!!! attention "Foreign Key Contraints"

! !! attention "Foreign Key Contraints" (Contrats de clés étrangères)

```
Beim Wiederherstellen von Datenbank-Inhalten kann es vorkommen, dass MySQL/MariaDB mit einer Fehlermeldung abbricht, etwa: errno: 150 "Foreign key constraint is incorrectly formed"

Dies liegt daran, dass die Daten und Strukturen nacheinander, d. h., Tabelle für Tabelle wiederhergestellt werden. Zwischenzeitlich existieren demnach alte neben neuen (wiederhergestellten) Daten. Das Datenbank-Modell von i-doit enthält sehr viele Verknüpfungen von Tabellen untereinander, für die Foreign Keys Contraints verwendet werden. Diese Referenzierung von beispielsweise einem Datensatz A in Tabelle 1 auf Datensatz B in Tabelle 2 unterliegt bestimmten Automatismen, wenn A oder B aktualisiert oder gar gelöscht werden. Die Reihenfolge spielt dabei eine wichtige Rolle, wann A und wann B wiederhergestellt werden. Alte und neue Referenzen können allerdings dieselben Indizes verwenden, auch wenn sie unterschiedliche Referenzierungen ausdrücken. Dadurch kann es zu oben genannten Fehlern kommen.

Als Workaround bietet es sich an, die Datenbanken vor der Wiederherstellung explizit zu löschen:

    -- Standard-Name der System-Datenbank:
    DROP DATABASE idoit_system;

    -- Standard-Name der ersten Mandanten-Datenbank:
    DROP DATABASE idoit_data;
```

## Backup und Recovery der Dateien

## Sauvegarde et restauration des fichiers

Es empfiehlt sich, das gesamte Verzeichnis von _i-doit_ zu sichern und bei Bedarf wiederherzustellen. Mittels

Il est recommandé de sauvegarder l'ensemble du répertoire de _i-doit_ et de le restaurer si nécessaire. En utilisant

```
tar -czvf i-doit.tar.gz /pfad/zu/i-doit
```

kann ein komprimiertes Tar-Archiv erstellt werden.

permet de créer une archive tar compressée.

Das entsprechende Recovery:

La récupération correspondante :

```
tar -xzv i-doit.tar.gz
```

## Backup und Recovery der Systemkonfiguration

## Sauvegarde et restauration de la configuration du système

Wichtig für den unmittelbaren Betrieb von _i-doit_ ist es, die Konfigurations-Dateien vom Apache Webserver, von PHP und von MySQL/MariaDB zu sichern und bei Bedarf wiederherzustellen. Bestenfalls hast du bereits bei der [Installation](../../installation/index.md) von _i-doit_ die entsprechenden Anpassungen an den Konfigurationsdateien dokumentiert und sicher hinterlegt.

Pour le fonctionnement immédiat de _i-doit_, il est important de sauvegarder les fichiers de configuration du serveur web Apache, de PHP et de MySQL/MariaDB et de les restaurer si nécessaire. Dans le meilleur des cas, tu as déjà documenté et déposé en toute sécurité les adaptations correspondantes aux fichiers de configuration lors de l'[installation](../../installation/index.md) de _i-doit.

## Backup mittels VM-Snapshots

## Sauvegarde à l'aide de snapshots de VM

Häufig wird _i-doit_ auf einer virtuellen Maschine (VM) installiert. Für ein Backup und Recovery reicht es allerdings nicht aus, schlicht Snapshots der VMs im laufenden Betrieb zu erstellen. Das Problem liegt in der Konsistenz der Datenbanken: Die Daten liegen eventuell im Arbeitsspeicher und befinden sich (noch) nicht im nichtflüchtigen Speicher. Sie werden demnach durch die Sicherung oftmals nicht erfasst und gingen im Fall des Falles verloren.

Souvent, _i-doit_ est installé sur une machine virtuelle (VM). Pour une sauvegarde et une restauration, il ne suffit toutefois pas de créer simplement des snapshots des VM en cours de fonctionnement. Le problème réside dans la cohérence des bases de données : les données se trouvent éventuellement dans la mémoire vive et ne sont pas (encore) dans la mémoire non volatile. Elles ne sont donc souvent pas prises en compte par la sauvegarde et seraient perdues en cas de problème.

Soll auf Snapshosts dennoch nicht verzichtet werden, muss vorher das DBMS MySQL/MariaDB gestoppt werden. Auf [Debian](../../installation/manuelle-installation/debian.md)-basierten Linux-Betriebssystemen erledigt dies der Befehl:

Si l'on ne veut pas renoncer aux snapshots, il faut d'abord arrêter le SGBD MySQL/MariaDB. Sur les systèmes d'exploitation Linux basés sur [Debian](../../installation/manuelle-installation/debian.md), la commande s'en charge :

```
sudo service mysql stop
```

Nach dem Snapshot wird das DBMS wieder gestartet:

Après le snapshot, le SGBD est redémarré :

```
sudo service mysql start
```

Sicherlich hinreichend bekannt, aber dennoch wichtig zu erwähnen: **Backups sollten niemals auf dem System verbleiben, das gesichert wird.**

Bien sûr, c'est bien connu, mais il est important de le mentionner : **Les sauvegardes ne devraient jamais rester sur le système qui est sauvegardé.**