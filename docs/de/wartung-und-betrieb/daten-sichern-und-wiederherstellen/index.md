---
title: Daten sichern und wiederherstellen
description: Backup und Restore von i-doit — Datenbanken, Dateien und die neue console.php-Methode
icon:
status:
lang: de
---

# Daten sichern und wiederherstellen

Die [IT-Dokumentation](../../glossar.md) enthält geschäftskritische Daten — Netzwerkpläne, Vertragsinformationen, Zugangsdaten und Konfigurationen. Ein Datenverlust durch Hardwareausfall, Fehlbedienung oder einen Angriff kann schwerwiegende Folgen haben. Deshalb gehört i-doit in jede Backup-Strategie.

Drei Bereiche müssen gesichert werden:

1. **Datenbanken** — System- und Mandantendatenbank(en)
2. **Dateien** — das i-doit-Installationsverzeichnis inkl. hochgeladener Dokumente
3. **Systemkonfiguration** — Apache, PHP, MariaDB

!!! tip "Einfachster Weg: `system:tenant-export`"
    Seit i-doit v35 gibt es den console-Befehl [`system:tenant-export`](#backup-uber-die-console-empfohlen), der Datenbank und Dateien in einem Schritt als ZIP exportiert. Für regelmäßige automatisierte Backups ist das die empfohlene Methode.

---

## Backup über die Console (empfohlen)

Seit Version 35 bietet die i-doit console die Befehle `system:tenant-export` und `system:tenant-import`. Sie exportieren bzw. importieren einen kompletten Mandanten — Datenbank und hochgeladene Dateien — in einem ZIP-Paket. Das ist der einfachste und sicherste Weg für ein vollständiges Backup.

### Export (Backup erstellen)

```shell
sudo -u www-data php /var/www/html/console.php system:tenant-export \
    --user admin --password admin --tenantId 1
```

Das erzeugt ein ZIP-Archiv im i-doit-Verzeichnis, das sowohl den Datenbank-Dump als auch alle hochgeladenen Dateien enthält.

### Import (Backup wiederherstellen)

```shell
sudo -u www-data php /var/www/html/console.php system:tenant-import \
    --file /pfad/zum/backup.zip \
    --tenant-database-name idoit_data \
    --tenant-title "Mein Mandant" \
    --db-root-user root \
    --db-root-pass geheim \
    --db-host localhost
```

**Optionen:**

| Parameter                           | Beschreibung                                                   |
| ----------------------------------- | -------------------------------------------------------------- |
| `--file`                            | Pfad zur ZIP-Datei aus dem Export                              |
| `--tenant-database-name`            | Name der Mandanten-Datenbank                                   |
| `--tenant-title`                    | Anzeigename des Mandanten                                      |
| `--with-system-settings`            | Systemweite Einstellungen mit importieren                      |
| `--with-tenant-settings`            | Mandantenspezifische Einstellungen importieren                 |
| `--db-root-user` / `--db-root-pass` | Datenbank-Root-Zugangsdaten (nötig um die Datenbank anzulegen) |
| `--db-host` / `--db-port`           | Datenbank-Host und Port (Standard: `localhost:3306`)           |

### Als Cronjob einrichten

Für tägliche automatische Backups:

```shell
# Mandant täglich um 02:00 exportieren
0 2 * * *  php /var/www/html/console.php system:tenant-export --user admin --password admin --tenantId 1 > /var/www/html/log/tenant-export.log 2>&1
```

!!! warning "Backup extern sichern"
    Ein Backup, das nur auf demselben Server liegt, schützt nicht vor Hardwareausfällen. Kopiere die ZIP-Dateien regelmäßig auf ein externes System — per `rsync`, `scp` oder auf ein Netzlaufwerk.

---

## Manuelles Backup

Falls du eine ältere i-doit-Version einsetzt oder mehr Kontrolle über den Backup-Prozess brauchst, kannst du Datenbank und Dateien auch manuell sichern.

### Datenbanken sichern

Verwende `mysqldump` für den Datenbank-Export. Während des Backups sollte niemand mit i-doit arbeiten — stoppe dazu am besten den Webserver:

```shell
# Webserver stoppen
sudo systemctl stop apache2

# Alle i-doit-Datenbanken sichern
mysqldump -hlocalhost -uroot -p --all-databases | gzip -9 > /backup/idoit_$(date +%F).sql.gz

# Webserver wieder starten
sudo systemctl start apache2
```

Deaktiviere auch [Cronjobs](../cronjobs-einrichten.md) während der Sicherung.

**Wiederherstellen:**

```shell
gunzip < /backup/idoit_2026-04-07.sql.gz | mysql -hlocalhost -uroot -p
```

!!! attention "Foreign Key Constraints"
    Beim Wiederherstellen kann MariaDB mit `errno: 150 "Foreign key constraint is incorrectly formed"` abbrechen. Das passiert, weil Tabellen einzeln wiederhergestellt werden und dabei Referenzen auf noch nicht existierende Tabellen entstehen.

    **Lösung:** Lösche die Datenbanken vor der Wiederherstellung:

    ```sql
    DROP DATABASE idoit_system;
    DROP DATABASE idoit_data;
    ```

### Dateien sichern

Sichere das gesamte i-doit-Verzeichnis:

```shell
tar -czf /backup/idoit_files_$(date +%F).tar.gz /var/www/html/
```

**Wiederherstellen:**

```shell
tar -xzf /backup/idoit_files_2026-04-07.tar.gz -C /
```

Danach die Dateiberechtigungen prüfen:

```shell
sudo chown -R www-data:www-data /var/www/html/
```

### Systemkonfiguration sichern

Sichere die Konfigurationsdateien von Apache, PHP und MariaDB:

```shell
tar -czf /backup/idoit_config_$(date +%F).tar.gz \
    /etc/apache2/ \
    /etc/php/ \
    /etc/mysql/
```

Idealerweise hast du die Anpassungen bereits bei der [Installation](../../installation/index.md) dokumentiert und sicher hinterlegt.

---

## Backup-Script

Für eine einfache, automatisierte Sicherung kannst du ein Bash-Script verwenden. Ein Beispiel findest du unter [Backup-Script für Daten und Dateien](backup-script-fuer-daten-und-dateien.md).

!!! tip "Empfehlung"
    Für neue Installationen (ab v38) ist `system:tenant-export` als Cronjob die einfachere und zuverlässigere Lösung, weil Datenbank und Dateien in einem konsistenten Paket gesichert werden.

---

## VM-Snapshots

Häufig läuft i-doit auf einer virtuellen Maschine. Ein Snapshot im laufenden Betrieb ist allerdings **kein zuverlässiges Backup** — die Datenbank hält Daten im Arbeitsspeicher, die beim Snapshot möglicherweise nicht auf der Festplatte angekommen sind.

Wenn du Snapshots nutzen willst, stoppe vorher die Datenbank:

```shell
# Vor dem Snapshot:
sudo systemctl stop mysql

# Nach dem Snapshot:
sudo systemctl start mysql
```

VM-Snapshots sind eine gute **Ergänzung**, aber kein Ersatz für ein reguläres Backup.

---

## Best Practices

- **Regelmäßigkeit** — sichere täglich, mindestens vor jedem [Update](../update-einspielen.md)
- **Restore testen** — ein Backup ist nur so gut wie der letzte erfolgreiche Restore-Test. Stelle regelmäßig auf einem Testsystem wieder her
- **Extern lagern** — Backups gehören nicht auf denselben Server. Kopiere sie auf ein Netzlaufwerk, einen Backup-Server oder verschlüsselt in die Cloud
- **Verschlüsseln** — wenn Backups das Haus verlassen, verschlüssele sie (z.B. mit `gpg`). Deine CMDB enthält sensible Infrastrukturdaten
- **Aufbewahrungsfrist** — halte mehrere Generationen vor (z.B. 7 Tages-Backups + 4 Wochen-Backups), damit du auch ältere Stände wiederherstellen kannst
- **Dokumentieren** — halte den Restore-Prozess schriftlich fest, damit auch Kollegen im Notfall eine Wiederherstellung durchführen können

Für die komplette Migration auf einen anderen Server lies den Artikel [Umzug einer Installation unter Linux](../../upgrades-und-umzuege/umzug-einer-installation-unter-linux.md).
