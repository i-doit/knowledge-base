# Optionen und Parameter der Console

!!! attention "Hinweise"

    Sämtliche Beispiele auf dieser Seite beziehen sich auf die Verwendung des i-doit Benutzers mit der Kombination Benutzername/Passwort: **admin**/**admin**.<br>
    Alle Parameter sind case-sensitive, dies bedeutet, dass Groß- und Kleinschreibung gemäß den Beispielen und Vorgaben exakt einzuhalten sind.

## Folgende Handler stehen für die i-doit Console zur Verfügung:

| Command | Systeminterne Beschreibung (en) |
| --- | --- |
| [CompileDocuments](#compiledocuments) | Compile Documents |
| [addon-activate](#addon-activate) | Aktivieren von Add-ons |
| [addon-deactivate](#addon-deactivate) | Deaktivieren von Add-ons |
| [addon-install](#addon-install) | Installieren von Add-ons |
| [addon-list](#addon-list) | Zeigt eine Liste mit allen installierten Add-ons an |
| [admin-center-password-reset](#admin-center-password-reset) | Passwort für das Admin-Center zurücksetzen |
| [auth-cleanup](#auth-cleanup) | Rechtesystem bereinigen |
| [check_mk-export](#check_mk-export) | Konfigurationsdaten für Check_MK exportieren |
| [check_mk-livestatus](#check_mk-livestatus) | Ist-Zustand aus Check_MK ins Logbuch schreiben |
| [clear-credentials](#clear-credentials) | Entfernt die Anmeldeinformationen von Benutzern |
| [completion](#completion) | Das Shell-Vervollständigungsskript ausgeben |
| [contracts-outdated](#contracts-outdated) | Aktualisiert den Status ausgelaufener Verträge |
| [documents](#documents) | Dokumente und revisionen erzeugen und exportieren |
| [extend-contracts](#extend-contracts) | Verlängert die Laufzeit eines Vertrags, wenn dessen letztmögliches Kündigungsdatum in der Vergangenheit liegt |
| [help](#help) | Zeigt die Hilfe zu einem Befehl an |
| [import-csv](#import-csv) | Daten aus einer CSV-Datei importieren (Nutzt einen definiertes Import Profil aus der GUI) |
| [import-csvprofiles](#import-csvprofiles) | Auflisten aller CSV-Importprofile |
| [import-hinventory](#import-hinventory) | Daten aus h-inventory importieren |
| [import-jdisc](#import-jdisc) | Daten aus JDisc Discovery importieren (SQL Server Zugriff wird über die GUI konfiguriert) |
| [import-jdiscdiscovery](#import-jdiscdiscovery) | Einen Scan in JDisc Discovery starten (API Zugriff wird über die GUI konfiguriert) |
| [import-syslog](#import-syslog) | Daten aus einem Syslog in das Logbuch von i-doit importieren |
| [import-xml](#import-ocs) | Daten aus XML importieren |
| [install](#install) | Installiert i-doit |
| [ldap-sync](#ldap-sync) | Personen und Personengruppen aus einem [LDAP-Verzeichnis oder Active Directory (AD)](../../../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) importieren |
| [ldap-syncdn](#ldap-sync) | Synchronisiere aus einem LDAP/AD den Distinguished Name (DN) der Benutzer (siehe Kategorie LDAP) |
| [license-add](#license-add) | Fügt eine Lizenz für i-doit hinzu (in Bearbeitung) |
| [license-assign](#license-assign) | Ordnet eine Hosting Lizenz einem Mandaten zu (in Bearbeitung) |
| [license-import](#license-import) | Importiert Lizenzen vom i-doit Server (in Bearbeitung) |
| [license-key](#license-key) | Setzt einen Lizenzschlüssel für i-doit (in Bearbeitung) |
| [license-list](#license-list) | Listet alle Lizenzen mit allen Informationen auf (ID; Produkt; Typ; Startdatum; Enddatum; lizensierte Objekte; lizenzierte Mandanten; Umgebung) |
| [license-remove](#license-remove) | Entfernt Lizenzen von i-doit |
| [list](#list) | Listet alle console Kommandos auf |
| [logbook-archive](#logbook-archive) | Logbuch-Einträge archivieren |
| [maintenance](#maintenance) | Sendet Benachrichtigungen zu geplanten Wartungen aus dem Wartungs Add-on |
| [migrate-uploaded-files](#migrate-uploaded-files) | Migriert hochgeladene Dateien von i-doit <v1.13 zu v.1.14> |
| [nagios-export](#nagios-export) | Nagios-Konfiguration exportieren |
| [nagios-ndoutils](#nagios-ndoutils) | Ist-Zustand aus Nagios ins Logbuch schreiben |
| [notifications-list](#notifications-list) | Listet alle [Benachrichtigungen](../../../auswertungen/benachrichtigungen.md) auf |
| [notifications-send](#notifications-send) | Benachrichtigungen per E-Mail versenden (Benachrichtigungen werden in der GUI konfiguriert) |
| [report-export](#report-export) | Einen Report als Datei exportieren |
| [search](#search) | In i-doit suchen |
| [search-index](#search-index) | Suchindex erstellen/erneuern |
| [strip-description-html](#strip-description-html) | Mit diesem Befehl können Sie html-Tags im Beschreibungsfeld aller Kategorien und Objekte entfernen |
| [sync-dynamic-groups](#sync-dynamic-groups) | Synchronisiert dynamische Gruppenmitglieder neu |
| [system-autoincrement](#system-autoincrement) | auto_increment von MariaDB-/MySQL-Tabellen auf einen positiven Integer-Wert setzen (Betrifft die Datenstruktur! Mit Vorsicht zu nutzen!) |
| [system-categorycleanup](#system-categorycleanup) | Bereinigt optional Kategorieeinträge, die sich im Status unfertig, archiviert oder gelöscht befinden |
| [system-checkforupdates](#system-checkforupdates) | Nach Aktualisierungen für i-doit suchen |
| [system-convert-non-innodb-tables](#system-convert-non-innodb-tables) | Konvertiert alle Tabellen, welche nicht in INNODB sind zu INNODB (Betrifft die Datenbankkodierung. Mit Vorsicht zu nutzen!) |
| [system-convert-non-utf8-tables](#system-convert-non-utf8-tables) | Konvertiert alle non-UTF8-Tabellen in UTF8-Tabellen (Betrifft die Datenbankkodierung. Mit Vorsicht zu nutzen!) |
| [system-location-fix](#system-location-fix) | Führt die Standortkorrektur aus der GUI auf der Konsole aus |
| [system-maintenancecontract](#system-maintenancecontract) | E-Mail für Wartungsverträge senden (Funktion veraltet. Bitte<br>[notifications-send](#notifications-send) nutzen) |
| [system-objectcleanup](#system-objectcleanup) | Objekte bereinigen (Objekte mit dem Status "unfertig", "archiviert" oder "gelöscht" werden endgültig entfernt) |
| [system-objectrelations](#system-objectrelations) | Objekt-Beziehungen neu aufbauen |
| [system-refresh-table-configuration](#system-refresh-table-configuration) |Erneuert alle verfügbaren Listenkonfigurationen (Objekttypen und Kategorien) |
| [tenant-create](#tenant-create) | Einen neuen Mandanten hinzufügen |
| [tenant-disable](#tenant-disable) | Einen bestehenden Mandanten deaktivieren |
| [tenant-enable](#tenant-enable) | Einen bestehenden Mandanten aktivieren |
| [tenant-list](#tenant-list) | Alle verfügbaren Mandanten auflisten |
| [tenant-remove](#tenant-remove) | Einen bestehenden Mandanten entfernen |
| [uninstall](#uninstall) | Deinstalliert i-doit |
| [update](#update) | Update von i-doit installieren |
| [workflows-process](#workflows-process) | Verarbeitet alle Arbeitsabläufe, versendet E-Mails und erstellt neue Aufgaben aus Checklisten |

!!! attention "Konfigurationsdatei und Parameter --config"

    Es ist möglich dem Aufruf zusätzliche Inhalte über eine Konfigurationsdatei zu übergeben. Diese Datei muss im i-doit Verzeichnis src/handler/config/ abgelegt werden. Ein Beispiel in Form der Datei "isys_handler_ldap.ini" ist im Verzeichnis src/handler/config/examples/ zu finden.<br>
    Wenn diese Datei beim Vorgang berücksichtigt werden soll, muss sie über den Parameter --config bzw. -c eingebunden werden.

### CompileDocuments

Aktualisiert Dokumente

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -t | --documentId=DOCUMENTID | Mehrere Dokument-IDs (mehrere Werte zulässig) |
| -u | --user=USERNAME | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=PASSWORD | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -t | --tenant=TENANT-ID | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php CompileDocuments --user admin --password admin --tenant 1 --documentId 123 --documentId 321
```

### addon-activate

Aktiviert installierte Add-ons für den gewünschten Mandanten

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -a | --addon=[ADDON] | Add-on-Kennung (mehrere Werte zulässig) |
| -t | --tenant=[TENANT-ID] | Mandanten-ID (mehrere Werte zulässig) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php addon-activate --user admin --password admin --tenant 1 --addon api
```

### addon-deactivate

Deaktiviert installierte Add-ons für den gewünschten Mandanten

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -a | --addon=[ADDON] | Add-on-Kennung (mehrere Werte zulässig) |
| -t | --tenant=[TENANT-ID] | Mandanten-ID (mehrere Werte zulässig) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php addon-deactivate --user admin --password admin --tenant 1 --addon api
```

### addon-install

Installiert Add-ons für den gewünschten Mandanten

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -z | --zip=[ZIP] | Pfad zur Add-on ZIP-Datei |
| -a | --addon=[ADDON] | Add-on-Kennung (mehrere Werte zulässig) |
| -t | --tenant=[TENANT-ID] | Mandanten-ID (mehrere Werte zulässig) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php addon-install --user admin --password admin --tenant 1 --addon api --zip /path/to/the/zip/file.zip
```

### addon-list

Zeigt eine Liste mit allen installierten Add-ons zum ausgewählten Mandanten an

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -a | --addon=[ADDON] | Add-on-Kennung (mehrere Werte zulässig) |
| -t | --tenant=[TENANT-ID] | Mandanten-ID (mehrere Werte zulässig) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php addon-list --tenant 1
```

### admin-center-password-reset

Passwort für das Admin-Center zurücksetzen

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php admin-center-password-reset --user admin --password admin
```

### auth-cleanup

Leert den Cache des Rechtesystems, damit die derzeit konfigurierten Rechte aktuell sind bzw. aktualisiert werden.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php auth-cleanup --user admin --password admin --tenantId 1
```

### check_mk-export

Führt einen Check_MK Export durch

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -l | --exportLanguage=EXPORTLANGUAGE | Festlegung der für den Export verwendeten Sprache (Standard = 0) |
| -x | --exportStructure=EXPORTSTRUCTURE | Festlegung der für den Export verwendeten Struktur (Standard = 0) |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php check_mk-export --user admin --password admin --tenantId 1
```

### check_mk-livestatus

Importiert die Änderungen am Monitoring-Status aus Livestatus nach i-doit

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php check_mk-livestatus --user admin --password admin --tenantId 1
```

### clear-credentials

Entfernt die Einträge der Attribute `username` und `password` von Benutzerlogins

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --object=[OBJECT] | Objekt-ID des zu deaktivierenden Benutzers |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php clear-credentials --user admin --password admin --object ObjectID
```

### completion

Der Befehl completion gibt das Shell-Vervollständigungsskript aus, das für die Verwendung der automatischen Shell-Vervollständigung erforderlich ist (derzeit wird nur die Bash-Vervollständigung unterstützt).

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --debug | Das Debug-Protokoll der Fertigstellung verfolgen |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php completion
```

### contracts-outdated

Aktualisiert den Status veralteter Verträge

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=USER | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=PASSWORD | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=TENANTID | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php contracts-outdated --user admin --password admin
```

### documents

Dokumente erstellen und exportieren

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --create_revision | Erzeugt eine oder mehrere Revisionen für bestimmte Dokumente |
|     | --export | Exportiert ein oder mehrere Dokumente in eine Datei |
|     | --id=ID | Ein oder mehrere Dokumente nach ID auswählen (mehrere Werte zulässig) |
|     | --all_documents | Selektiert alle Dokumente |
|     | --all_category=ALL_CATEGORY | Wählt alle Dokumente in der Kategorie aus |
|     | --all_template=ALL_TEMPLATE | Selektiert alle Dokumente mit Vorlage |
|     | --all_object=ALL_OBJECT | Selektiert alle Dokumente mit Objekt |
|     | --export_format=EXPORT_FORMAT | Exportformat: PDF oder HTML |
|     | --export_folder=EXPORT_FOLDER | Export in einen bestimmten Ordner [Standard: "/var/www/html/upload/files/"] |
| -u | --user=USER | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=PASSWORD | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=TENANTID | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -c | --config=CONFIG | Konfigurationsdatei |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v\|vv\|vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php documents --user admin --password admin --create_revision
```

### extend-contracts

Verlängert die Laufzeit eines Vertrags, dessen letztmögliches Kündigungsdatum in der Vergangenheit liegt

**Optionen:**

| Parameter (Kurzform) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --simulate | Simuliert die Vertragserweiterung |
| -u | --user=USER |  Username |
| -p | --password=PASSWORD | Passwort |
| -i | --tenantID=TENANTID | Tenant ID [default: 1] |
| -h | --help | Zeigt Hilfe für den Befehl an |
| -c | --config=CONFIG | Konfigurationsdatei |
| -q | --quit | Es wird keine Nachricht angezeigt |
| -v | --version | Zeigt die Version der Anwendung an |
|        | --ansi / --no-ansi | Erzwingt ANSI Ausgabe / Deaktiviert ANSI Ausgabe |
| -v / -vv / -vvv | --verbose | Erhöht die Ausführlichkeit der Nachricht [default: 1] |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php extend-contracts --user admin --password admin
```

### help

Zeigt in Verbindung mit einem anderen Befehl dessen Nutzung, Argumente und Optionen an

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --format=[FORMAT] | Format der Ausgabe festlegen (txt, xml, json or md) [Default: txt] |
|     | --raw | Ausgabe der Befehls-Hilfe |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php help --format=txt <command>
```

### import-csv

Führt den Import einer CSV-Datei mit den gewünschten Importparametern durch

 **Optionen**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --importFile=IMPORTFILE | Gibt die Datei und deren Pfad an, die für den Import verwendet werden soll |
|     | --importProfileId=IMPORTPROFILEID | Legt fest, mit welchem Profil der Import ausgeführt werden soll |
|     | --csvSeparator=CSVSEPARATOR | Definiert die Trennzeichen für den Import |
|     | --multiValueMode=MULTIVALUEMODE | Legt den Modus für Multi-Value-Kategorien fest (Mögliche Werte: "row", "column" oder "comma") |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php import-csv --user admin --password admin --tenantId 1 --importFile /var/www/imports/idoit-Demo-CSV-Import.csv --importProfileId 1 --csvSeparator ";" --multiValueMode column
```

### import-csvprofiles

Gibt eine Auflistung der Import-Profile für den CSV-Import zurück

**Optionen**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php import-csvprofiles --user admin --password admin --tenantId 1
```

### import-hinventory

Führt einen h-inventory Import einer kompatiblen XML-Datei durch

**Optionen**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --importFile=IMPORTFILE | Gibt die Datei und deren Pfad an, die für den Import verwendet werden soll |
|     | --usage | Weitere detaillierte Informationen zur Verwendung des Commands |
|     | --objectType=OBJECTTYPE | Importiert den angegebenen Objekttypen |
|     | --objectId=OBJECTID | Importiert ausschließlich das angegebene Objekt |
| -f | --force | Erzwingt das Aktualisieren bestehender Objekte aber überschreibt die importierten Kategorien |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php import-hinventory --user admin --password admin --tenantId 1 --importFile /var/www/imports/idoit-Demo-h-inventory-import.xml
```

### import-jdisc

Führt einen JDisc-Import nach i-doit durch.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -r | --profile=PROFILE | Angabe/Auswahl des JDisc-Profils, das für den Import verwendet werden soll |
| -g | --group=GROUP | Angabe/Auswahl der Gruppen ID, die für den Import verwendet werden soll |
| -x | --mode=MODE | Auswahl des Import-Modus. Folgende IDs stehen zur Verfügung:<br>**1**: "Erstellen": Der Import-Modus "Erstellen" wird alle gefundenen Objekte erstellen, ohne zu prüfen, ob diese bereits existieren.<br>**2**: "Aktualisieren": Der Import-Modus "Aktualisieren" wird nur Objekte erstellen, die in i-doit nicht gefunden werden konnten. Kategorien von bereits existierenden Objekten werden (wenn nötig) um neue Daten ergänzt.<br>**3**: "Überschreiben": Der Import-Modus "Überschreiben" verhält sich genauso wie der Modus "Aktualisieren" mit dem Unterschied, das Listen-Kategorien erst geleert und dann neu angelegt werden.<br>**4**: "Aktualisieren (Neu inventarisiert)": Mit dem Zusatz "(Neu inventarisiert)" werden feste idoit-zu-jdisc-device Verknüpfungen verworfen und die Objektzugehörigkeiten neu errechnet.<br>**5**: "Überschreiben (Neu inventarisiert)":  Mit dem Zusatz "(Neu inventarisiert)" werden feste idoit-zu-jdisc-device Verknüpfungen verworfen und die Objektzugehörigkeiten neu errechnet.<br>**6**: Der Import-Modus "Erstelle nur neu gescannte Geräte" erstellt nur neu gescannte Objekte, existierende werden übersprungen. |
| -s | --server=SERVER | Angabe der Server-ID um diesen auszuwählen |
| -o | --overwriteHost | Festlegen, ob sich überschneidende Hostadressen überschrieben werden sollen |
| -l | -detailedLogging[=DETAILEDLOGGING] | Erhöht die Protokollierungsstufe:<br>**1**: auf niedriger Log-Ebene werden nur Hinweise und Warnungen protokolliert<br>**2**: zusätzlich zur niedrigen Log-Ebene werden Fehler protokolliert<br>**3**: zusätzlich zur normalen Log-Ebene werden Debug-Meldungen protokolliert (speicherintensiv) |
| -b | --regenerateSearchIndex | Führt automatisch die Erneuerung des Suchindex aus |
|    | --listProfiles | Erzeugt eine Liste der verfügbaren Profile |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php import-jdisc --user admin --password admin --tenantId 1 --profile 3 --mode 4 --server 2 --detailedLogging 3 --regenerateSearchIndex
```

### import-jdiscdiscovery

Löst einen JDisc Discovery Job aus.

**Optionen:**


| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -s | --server=SERVER | Auswahl des JDisc-Servers |
| -j | --discoveryJob=DISCOVERYJOB | Auswahl des Discovery Jobs (Standard: "Discover all") |
| -d | --deviceHostname=DEVICEHOSTNAME | Auswahl des Geräts anhand des Hostnames |
| -a | --deviceHostAddress=DEVICEHOSTADDRESS | Auswahl des Geräts anhand der Hostadresse |
| -l | --showLog | Zeigt das Log während des Discoveries an |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php import-jdiscdiscovery --user admin --password admin --tenantId 1 --server 2
```

### import-syslog

Importiert Inhalte aus einer Syslog Server Textdatei in das i-doit Logbuch.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php import-syslog --user admin --password admin --tenantId 1
```

### import-xml

Führt einen Import einer XML-Datei nach i-doit durch.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --importFile=IMPORTFILE | Angabe der Import-Datei sowie deren Pfad |
|     | --usage | Detaillierte Informationen zur Verwendung des Commands |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php import-xml --user admin --password admin --tenantId 1 --importFile /var/www/imports/idoit-Demo-xml-import.xml
```

### install

Installieren Sie die i-doit Anwendung

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --root-user=ROOT-USER | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --root-password[=ROOT-PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
|  | --host=HOST | Benutzername des privilegierten DB-Benutzers [Standard: "root"] |
|  | --port=PORT | Port für DB-Verbindung [standardmäßig: 3306] |
| -d | --database=DATABASE | i-doit System Datenbankname [Standard: "idoit_system_temp"] |
| -U | --user=USER | Benutzername der i-doit-System-DB [Standard: "idoit"] |
| -P | --password[=PASSWORD] | Passwort für i-doit system DB |
|  | --admin-password[=ADMIN-PASSWORD] | Passwort für i-doit admin center |
| -l | --license-server=LICENSE-SERVER | Pfad für den i-doit Lizenzserver [Standard: "https://lizenzen.i-doit.com"] |
| -k | --key[=KEY] | Lizenzschlüssel für i-doit |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php install
```

### ldap-sync

Synchronisiert Benutzer aus dem LDAP nach i-doit und legt diese als Personenobjekte an.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -l | --ldapServerId=LDAPSERVERID | Gibt die ID des LDAP-Servers an, von dem die User synchronisiert werden sollen   <br>Wird keine ldapServerId angegeben werden alle Aktiven Server synchronisiert |
|     | --dumpConfig | Gibt die derzeitige Konfiguration aus der Konfigurationsdatei aus |
|     | --connectionRankingActive[=CONNECTIONRANKINGACTIVE] | Option, die alle Verbindungen von allen reaktivierten Benutzern reaktiviert.  <br>Standardkonfiguration ist die Experteneinstellung 'ldap.connection-ranking-active' (Tenant-wide) mit dem Wert '1'. |
|     | --dropExistingRelations[=DROPEXISTINGRELATIONS] | Wenn eine bestehende ldap-Gruppe Gruppenmitglied-Benutzer hat, die nicht zu diesen synchronisierten Benutzern gehören,  <br>werden diese gelöscht.  <br>1 = bestehende Beziehungen löschen, 0 = bestehende Beziehungen ignorieren [Standard: 0]. |
|     | --archiveDeletedGroups | Wenn eine gelöschte ldap-Gruppe in i-doit verbleibt, dann archiviere oder lösche sie.  <br>Standard = false  <br>Mögliche Werte sind archive oder delete |
|     | --useDefaultTemplates | Verwende das standard Template wenn ein Objekt über dieses Kommando erstellt wird (v1.18) |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php ldap-sync --user admin --password admin --tenantId 1 --verbose --ldapServerId 1
```

### ldap-syncdn

Synchronisiert LDAP DNs mit den i-doit Usern.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --ldapServerId=LDAPSERVERID | Angabe des LDAP-Servers über die ID |
| -o | --objectType=OBJECTTYPE | Angabe des Objekttyps als Konstante (z.B. C__OBJTYPE__SERVER) |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php ldap-syncdn --user admin --password admin --tenantId 1 --ldapServerId 1
```

### list

Listet alle Befehle auf. Format der Ausgabe kann geändert werden.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --format=[FORMAT] | Format der Ausgabe festlegen (txt, xml, json or md) [Default: txt] |
|     | --raw | Ausgabe der Befehls-Hilfe |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php list --format=txt
```

**license-add**

Fügt eine Lizenz für i-doit hinzu

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -l | --license=[LICENSE] | Pfadangabe zur Lizenzdatei (/path/to/license/file.key) |
| -t | --tenant=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php license-add --user admin --password admin --tenantId 1 --license /path/to/license/file.key
```

### license-assign

Ordnet eine Hosting Lizenz einem Mandaten zu

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --count=[COUNT] | Anzahl zu lizenzierender Objekte [Default: 0] |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php license-assign --user admin --password admin --tenantId 1 --count 1000
```

### license-import

Importiert Lizenzen vom i-doit Lizenz-Server

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -l | --license-server=[LICENSE-SERVER] | Pfad zum i-doit Lizenz-Server [Default: "https://lizenzen.i-doit.com"] |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php license-import --user admin --password admin --license-server https://lizenzen.i-doit.com
```

### license-key

Setzt einen Lizenzschlüssel für i-doit

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -l | --license-server=[LICENSE-SERVER] | Pfad zum i-doit Lizenz-Server [Default: "[https://lizenzen.i-doit.com](https://lizenzen.i-doit.com)"] |
| -k | --key=[KEY] | Lizenzschlüssel für i-doit |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php license-key --user admin --password admin --license-server https://lizenzen.i-doit.com --key license
```

### license-list

Listet alle installierten Lizenzen

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -t | --tenant=[TENANT] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php license-list --tenant 1
```

### license-remove

Löscht eine Lizenz aus i-doit

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -l | --license=[LICENSE] | Lizenz-ID zu der zu löschenden Lizenz |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php license-remove --user admin --password admin --license LicenseID
```

### logbook-archive

Archiviert die Logbucheinträge mit einem definierten Alter, gemäß den Einstellungen auf der i-doit Oberfläche.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php logbook-archive --user admin --password admin --tenantId 1
```

### maintenance

Verschickt E-Mails mit geplanten Wartungen gemäß den im Add-on "Wartungen" festgelegten Zeiträumen.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php maintenance --user admin --password admin --tenantId 1
```

### migrate-uploaded-files

Migriert hochgeladene Dateien in i-doit <v1.13 zu v.1.14>

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php migrate-uploaded-files
```

### nagios-export

Exportiert die Nagios-Einstellungen und i-doit Objekte in Nagios-Konfigurationsdateien.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --nagiosHostId=NAGIOSHOSTID | Angabe des Nagios-Hosts, der für den Export verwendet werden soll |
|     | --validate | Validiert die Exportdateien |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php nagios-export --user admin --password admin --tenantId 1 --nagiosHostId 1
```

### nagios-ndoutils

Importiert Monitoring Statusänderungen aus den NDOUtils in das i-doit Logbuch.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php nagios-ndoutils --user admin --password admin --tenantId 1
```

### notifications-list

Listet alle [Benachrichtigungen](../../../auswertungen/benachrichtigungen.md) auf

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php notifications-list --user admin --password admin --tenantId 1
```

### notifications-send

Verschickt die auf der i-doit Oberfläche konfigurierten Benachrichtigungen

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --notification-ids=NOTIFICATION-IDS | Übergabe bestimmter zu sendender Benachrichtigungs-IDs 1,2,3 |
|     | --notification-type-ids=NOTIFICATION-TYPE-IDS | Übergeben Sie spezifische IDs für die zu sendenden Benachrichtigungen 1,2,3 |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php notifications-send --user admin --password admin --tenantId 1
```

### report-export

Exportiert einen Report in das gewünschte Dateiformat.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -r | --reportId=REPORTID | ID des zu exportierenden Reports |
| -d | --exportPath=EXPORTPATH | Pfad, zu dem der Export erfolgen soll |
| -f | --exportFilename=EXPORTFILENAME | Dateiname der Exportdatei ohne Dateiendung |
| -t | --exportFileType=EXPORTFILETYPE | Dateityp der Exportdatei. Mögliche Werte: csv, txt, pdf, xml (Standard:  "csv") |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php report-export --user admin --password admin --tenantId 1 --reportId 27 --exportPath /var/www/exported-reports/ --exportFilename Report-Buchhaltung-November-2019 --exportFileType csv
```

### search

Sucht nach Inhalten in der Dokumentation

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --searchString=SEARCHSTRING | Inhalt, nach dem gesucht werden soll |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php search --user admin --password admin --tenantId 1 --searchString "Server001"
```

### search-index

Erneuert den Suchindex, indem dieser gelöscht und neu geschrieben wird.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --update | Anstatt nur einen neuen Index zu erstellen, werden die aktuellen Index-Dokumente überschrieben |
|     | --category=CATEGORY | Whitelist der Kategorien |
|     | --dry-run | Reindex ausführen, ohne zu speichern |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php search-index --user admin --password admin --tenantId 1
```

### strip-description-html

Mit diesem Befehl können Sie html-Tags im Beschreibungsfeld aller Kategorien und Objekte entfernen

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php strip-description-html --user admin --password admin --tenantId 1
```

### sync-dynamic-groups

Synchronisiert dynamische Gruppenmitglieder neu.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -g | --groups=GROUPS | Kommaseparierte Liste von IDs der dynamischen Gruppen |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php sync-dynamic-groups --user admin --password admin --tenantId --groups 173,188,219
```

### system-autoincrement

Legt den Wert des Auto-Increment des Systems fest. Dies beeinflusst Objekt-IDs, Kategorie-Einträge, etc. Beim Zurücksetzen des Auto-Increments kann es passieren, dass einige Inhalte nicht mehr zugänglich sind.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --autoIncrement=AUTOINCREMENT | Zahl, auf die das Auto-Increment festgelegt werden soll |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php system-autoincrement --user admin --password admin --tenantId 1 --autoIncrement 20
```

### system-categorycleanup

Bereinigt optional Kategorieeinträge, die sich im Status unfertig, archiviert oder gelöscht befinden

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --categoryStatus=CATEGORYSTATUS | Use to start cleaning up the specified status:<br>**1** für "unfertige" Kategorieeinträge<br>**3** für "archivierte" Kategorieeinträge<br>**4** für "gelöschte" Kategorieeinträge | |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php system-categorycleanup --user admin --password admin --tenantId 1 --categoryStatus 3
```

### system-checkforupdates

Prüft, ob eine neue i-doit Version verfügbar ist.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php system-checkforupdates
```

### system-convert-non-innodb-tables

Konvertiert alle nicht INNODB Tabellen nach INNODB.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --convert | Startet den Vorgan, alle nicht UTF-8-tables zu konvertieren |
|     | --table=[TABLE] | Tabelle die überprüft und konvertiert werden soll |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php system-convert-non-innodb-tables --convert --table TABLE_NAME
```

### system-convert-non-utf8-tables

Konvertiert alle nicht UTF-8 Datentypen nach UTF-8.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --convert | Startet den Vorgan, alle nicht UTF-8-tables zu konvertieren |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php system-convert-non-utf8-tables --convert
```

### system-location-fix

Führt die Standortkorrektur aus der GUI in der Konsole aus

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php system-location-fix --user admin --password admin --tenantId 1 --config /path/to/config/file
```

### system-maintenancecontract

Verschickt eine E-Mail Benachrichtigung für Wartungskontakte.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php system-maintenancecontract --user admin --password admin --tenantId 1
```

### system-objectcleanup

Bereinigt alle Objekte mit einem selbst definierbarem Status.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --objectStatus=OBJECTSTATUS | Legt fest, welcher Status bereinigt werden soll:  1: "unfertig"; 3: "archiviert"; 4: "gelöscht" |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php system-objectcleanup --user admin --password admin --tenantId 1 --objectStatus 1
```

### system-objectrelations

Erneuert die Bezeichnungen aller Objektbeziehungen.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
|     | --categoryConstant=CATEGORYCONSTANT | Konstante der Kategorie, für die der Vorgang ausgeführt werden soll (z.B. C__CATG__IP) |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php system-objectrelations --user admin --password admin --tenantId 1 --categoryConstant C__CATG__IP
```

### system-refresh-table-configuration

Aktualisiert alle verfügbaren Listenkonfigurationen (Objekttypen und Kategorien)

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -a  | --all | Verarbeitet alle Objekttyp-Tabellenkonfigurationen |
| -o | --object-types=OBJECT-TYPES | Nur bestimmte Objekttyp-Tabellenkonfigurationen über ihre Konstante verarbeiten (es ist möglich, eine durch Komma getrennte Liste von Konstanten zu übergeben) |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php system-refresh-table-configuration --user admin --password admin --tenantId 1
```

### tenant-create

Erstellt einen neuen Mandanten

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --root-user=[ROOT-USER] | Benutzername des privilegierten DB-Benutzers [default: "root"] |
| -p | --root-password=[ROOT-PASSWORD] | Passwort des privilegierten DB-Benutzers |
| -U | --user=[USER] | Benutzername der DB für neuen Mandanten [default: "idoit"] |
| -P | --password=[PASSWORD] | Password der DB für den neuen Mandanten |
| -d | --database=[DATABASE] | DB Name für den neuen Mandanten [default: "idoit_data"] |
| -t | --title=[TITLE] | Name des neuen Mandanten[default: "Your company name"] |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php tenant-create --title Musterfirma --user idoit --password idoitpassword -- enable --tenantId 3
```

### tenant-disable

Deaktiviert einen existierenden Mandaten.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php tenant-disable --tenantId 3
```

### tenant-enable

Aktiviert einen bestehenden Mandanten.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php tenant-enable --tenantId 3
```

### tenant-list

Listet alle bestehenden Mandanten auf.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php tenant-list
```

### tenant-remove

Entfernt einen bestehenden Mandanten

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenant=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php tenant-remove --user admin --password admin --tenant 1
```

### uninstall

Deinstalliert die genutzte i-doit Installation

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php uninstall --user admin --password admin
```

### update

Update von i-doit installieren.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -z | --zip=[ZIP] | Angabe des Pfades zum Update-Paket |
|     | --v=V | Zu installierende Version |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php update --user admin --password admin --zip /path/to/zip/file.zip --v 1.14
```

### workflows-process

Sendet E-Mails zu Workflows und erstellt Aufgaben aus Checklisten.

**Optionen:**

| Parameter (Kurzfrom) | Parameter (Langform) | Beschreibung |
| --- | --- | --- |
| -t | --types=TYPES | Workflow-Typen (mehrere Werte sind möglich) |
| -u | --user=[USERNAME] | Username eines Benutzers, der zur Ausführung berechtigt ist |
| -p | --password=[PASSWORD] | Passwort zur Authentifizierung des zuvor angegebenen Benutzers |
| -i | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1) |
| -c | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei |
| -h | --help | Hilfenachricht zur Einblendung weiterer Informationen |
| -q | --quiet | Quiet-Mode um die Rückgabe zu deaktivieren |
| -V | --version | Ausgabe der Version der i-doit Console |
|     | --ansi|--no-ansi | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren) |
| -n | --no-interaction | Deaktiviert sämtliche Interaktionsfragen der i-doit Console |
| -v / -vv / -vvv | --verbose | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php workflows-process --user admin --password admin --tenantId 1 --types task --types checklist
```
