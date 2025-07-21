---
title: Befehl ausführen
description: Flows Befehl ausführen
icon:
status:
lang: de
---

Die folgenden [console commands](../../../automatisierung-und-integration/cli/index.md) sind im Add-on verfügbar. Diese Funktionen können anstelle eines Cronjobs verwendet werden.

| Console command                                                   | Options                                                                                                                          | Beschreibung                                                                                                      |
| ----------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| [auth-cleanup](#auth-cleanup)                                     | -                                                                                                                                | Bereinigt veraltete Berechtigungen für Daten, die nicht mehr vorhanden sind.                                      |
| [contracts-outdated](#contracts-outdated)                         | -                                                                                                                                | Aktualisiert den Status von abgelaufenen Verträgen.                                                               |
| [extend-contracts](#extend-contracts)                             | -                                                                                                                                | Verlängert automatisch die Laufzeit von ungekündigten Verträgen.                                                  |
| [import-csv](#import-csv-only-on-prem) nur on-prem                | importFile<br>importProfileId ist nur verfügbar, wenn ein Profil gespeichert ist, ggf. ist eine Erneuerung des Caches notwendig. | Führt den Import einer CSV-Datei mit den gewünschten Importparametern durch.                                      |
| [import-hinventory](#import-inventory-data-into-cmdb) nur on-prem | importFile<br>objectType<br>objectId<br>force                                                                                    | Führt einen h-inventory-Import einer kompatiblen XML-Datei durch.                                                 |
| [import-jdisc](#import-jdisc)                                     | server<br>profile<br>group<br>mode<br>overwriteHost<br>detailedLogging<br>regenerateSearchIndex                                  | Führt einen JDisc-Import nach i-doit durch.                                                                       |
| [import-jdiscdiscovery](#import-jdiscdiscovery)                   | server<br>Discover by<br>discoveryJob<br>showLog                                                                                 | Löst einen JDisc-Discovery-Job aus.                                                                               |
| [import-xml](#import-xml-only-on-prem) nur on-prem                | importFile                                                                                                                       | Führt einen Import einer XML-Datei nach i-doit durch.                                                             |
| [ldap-sync](#ldap-sync)                                           | ldapServerId<br>connectionRankingActive<br>dropExistingRelations<br>archiveDeletedGroups<br>useDefaultTemplates                  | Synchronisiert Benutzer und Gruppen von LDAP nach i-doit und legt sie als Objekte an.                             |
| [ldap-syncdn](#ldap-syncdn)                                       | ldapServerId                                                                                                                     | Synchronisiert LDAP-DNs mit den i-doit-Benutzern.                                                                 |
| [logbook-archive](#logbook-archive)                               | -                                                                                                                                | Archiviert die Logbuch-Einträge mit einem definierten Alter gemäß den Einstellungen auf der i-doit-Oberfläche.    |
| [notifications-send](#notifications-send)                         | notification-ids<br>notification-type-ids                                                                                        | Versendet die auf der i-doit-Oberfläche konfigurierten Benachrichtigungen.                                        |
| [search-index](#search-index)                                     | update<br>category                                                                                                               | Stellt den Suchindex wieder her, indem er gelöscht und neu geschrieben wird.                                      |
| [sync-dynamic-groups](#sync-dynamic-groups)                       | groups                                                                                                                           | Synchronisiert die Mitglieder dynamischer Gruppen neu.                                                            |
| [system-categorycleanup](#system-categorycleanup)                 | categoryStatus                                                                                                                   | Bereinigt optional Kategorie-Einträge, die sich im Status "unvollständig", "archiviert" oder "gelöscht" befinden. |
| [system-location-fix](#system-location-fix)                       | -                                                                                                                                | Führt die Standort-Korrektur aus der GUI in der Konsole aus.                                                      |
| [system-objectcleanup](#system-objectcleanup)                     | objectStatus                                                                                                                     | Bereinigt alle Objekte mit einem definierten Status.                                                              |
| [system-objectrelations](#system-objectrelations)                 | categoryConstant                                                                                                                 | Erneuert die Namen aller Objekt-Beziehungen.                                                                      |

## auth-cleanup

Dieser Befehl bereinigt potenziell verwaiste Einträge im Berechtigungssystem auf Modulbasis. In der CMDB werden beispielsweise Berechtigungen für Kategorien, Objekte und Objekttypen entfernt, die nicht mehr existieren.

## contracts-outdated

Aktualisiert den Status von abgelaufenen Verträgen.

## extend-contracts

Verlängert automatisch die Laufzeit von ungekündigten Verträgen. Ein Anwendungsfall findet sich [hier](../../../anwendungsfaelle/automatisierte-vertragsverlaengerung.md)

## import-csv (nur on-prem)

| Option              | Beschreibung                                                                                                                                                                                                           |
| ------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **importFile**      | Geben Sie den vollständigen Pfad zur Datei an. Wenn Sie die Datei zuvor für den CSV-Import hochgeladen haben, lautet der Pfad beispielsweise `/var/www/html/i-doit/imports/1/title.csv`. Die `1` ist die Mandanten-ID. |
| **importProfileId** | Ein CSV-Importprofil muss zuvor erstellt werden, siehe [Profil anlegen](../../../daten-konsolidieren/csv-datenimport/index.md#profil-anlegen)                                                                          |

## import-hinventory (nur on-prem)

| Option         | Beschreibung                                                                                                                                |
| -------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| **importFile** | Geben Sie den vollständigen Pfad zur Datei an. Zum Beispiel `/var/www/html/i-doit/imports/1/title.xml`, wobei die `1` die Mandanten-ID ist. |
| **objectType** | Importiert den angegebenen Objekttyp. Auswahlfeld (Single-Select) mit Objekttypen, erforderlich mit Standardwert 'Client'.                  |
| **objectId**   | Importiert nur das angegebene Objekt.                                                                                                       |
| **force**      | Erzwingt die Aktualisierung bestehender Objekte, überschreibt dabei jedoch die importierten Kategorien.                                     |

## import-jdisc

| Option                    | Beschreibung                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| ------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **server**                | Geben Sie die Server-ID ein, um sie auszuwählen.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| **profile**               | Geben Sie das JDisc-Profil an, das für den Import verwendet werden soll.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| **group**                 | Geben Sie die Gruppen-ID an, die für den Import verwendet werden soll.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| **mode**                  | Wählen Sie den Importmodus aus: <br>1: "Append": Der Import erstellt nur neue Objekte.<br>2: "Update": Der Import versucht, bereits vorhandene Objekte zu aktualisieren.<br>3: "Overwrite": Bestehende Objekte werden aktualisiert, neue Objekte zusätzlich erstellt. Inhalte aus Multi-Value-Kategorien werden zuerst vollständig gelöscht und dann in der Datenbank neu angelegt.<br>4: "Update (newly discovered)": Der Modus entspricht "Update", aber alle bekannten Verknüpfungen zwischen i-doit- und JDisc-Objekten werden entfernt und nach einer Prüfung neu verbunden.<br>5: "Overwrite (newly discovered)": Der Import löscht alle vorhandenen Identifikationsschlüssel, bevor der Overwrite-Modus ausgelöst wird.<br>6: "Only create newly scanned devices": Der Import erstellt nur neu gescannte JDisc-Geräte, vorhandene werden übersprungen.<br>7: "Update (Only existing objects)": Nur bestehende Objekte werden aktualisiert. Es werden keine neuen Objekte erstellt. |
| **overwriteHost**         | Geben Sie an, ob überlappende Host-Adressen überschrieben werden sollen.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| **detailedLogging**       | Erhöht die Stufe der Protokollierung:<br>1: Niedrige Stufe; nur Notizen und Warnungen werden protokolliert.<br>2: Zusätzlich zur niedrigen Stufe werden Fehler protokolliert.<br>3: Zusätzlich zur normalen Stufe werden Debug-Meldungen protokolliert (speicherintensiv).                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| **regenerateSearchIndex** | Erneuert automatisch den Suchindex.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |

## import-jdiscdiscovery

| Option           | Beschreibung                                                |
| ---------------- | ----------------------------------------------------------- |
| **server**       | Auswahl des JDisc-Servers.                                  |
| **Discover by**  | Je nach gewählter Option werden weitere Optionen angezeigt. |
| **discoveryJob** | Auswahl des Geräts anhand des Hostnamen.                    |
| **showLog**      | Zeigt das Protokoll während des Discoveries an.             |

## import-xml (nur on-prem)

| Option         | Beschreibung                                                                                                                                |
| -------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| **importFile** | Geben Sie den vollständigen Pfad zur Datei an. Zum Beispiel `/var/www/html/i-doit/imports/1/title.xml`, wobei die `1` die Mandanten-ID ist. |

## ldap-sync

| Option                    | Beschreibung                                                                                                                                                                                                         |
| ------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **ldapServerId**          | Gibt die ID des LDAP-Servers an, von dem die Benutzer synchronisiert werden sollen. Wenn keine ldapServerId angegeben wird, werden alle aktiven Server synchronisiert.                                               |
| **connectionRanking**     | Aktive Konfiguration, die alle Verbindungen von allen reaktivierten Benutzern wieder aktiviert. Standardkonfiguration ist die Experteneinstellung 'ldap.connection-ranking-active' (Mandantenweit) mit dem Wert '1'. |
| **dropExistingRelations** | Wenn eine existierende LDAP-Gruppe Gruppenmitglieder hat, die nicht Teil der Synchronisation sind, werden diese entfernt. 1 = bestehende Beziehungen löschen, 0 = bestehende Beziehungen ignorieren.                 |
| **archiveDeletedGroups**  | Wenn eine gelöschte LDAP-Gruppe in i-doit verbleibt, wird sie archiviert oder gelöscht.                                                                                                                              |
| **useDefaultTemplates**   | Verwendet Standard-Templates, wenn mit diesem Befehl Objekte erstellt werden.                                                                                                                                        |

## ldap-syncdn

| Option           | Beschreibung                         |
| ---------------- | ------------------------------------ |
| **ldapServerId** | Angabe des LDAP-Servers über die ID. |

## logbook-archive

Archiviert die Logbuch-Einträge mit einem definierten Alter gemäß den Einstellungen auf der i-doit-Oberfläche.

## notifications-send

| Option                    | Beschreibung                                                                                |
| ------------------------- | ------------------------------------------------------------------------------------------- |
| **notification-ids**      | Übergibt spezifische IDs der Benachrichtigung, die gesendet werden sollen (z.B. 1,2,3).     |
| **notification-type-ids** | Übergibt spezifische IDs des Benachrichtigungstyp, die gesendet werden sollen (z.B. 1,2,3). |

## search-index

| Option       | Beschreibung                                                                                    |
| ------------ | ----------------------------------------------------------------------------------------------- |
| **update**   | Anstatt nur einen neuen Index zu erstellen, werden die aktuellen Index-Dokumente überschrieben. |
| **category** | **Optional** wenn keine Auswahl getroffen wird, werden alle verfügbaren Kategorien indiziert.   |


## sync-dynamic-groups

| Option              | Beschreibung              |
| ------------------- | ------------------------- |
| **All groups**      | Alle dynamischen Gruppen. |
| **Specific groups** | Bestimmte Gruppen.        |

## system-categorycleanup

| Option             | Beschreibung                                              |
| ------------------ | --------------------------------------------------------- |
| **categoryStatus** | Bereinigt Kategorie-Einträge mit dem ausgewählten Status. |

## system-location-fix

Führt die Standort-Korrektur aus der GUI in der Konsole aus.

## system-objectcleanup

| Option           | Beschreibung                                   |
| ---------------- | ---------------------------------------------- |
| **objectStatus** | Bereinigt Objekte mit dem ausgewählten Status. |

## system-objectrelations

| Option               | Beschreibung                                                               |
| -------------------- | -------------------------------------------------------------------------- |
| **categoryConstant** | Erneuert die Namen aller Objekt-Beziehungen in der ausgewählten Kategorie. |
