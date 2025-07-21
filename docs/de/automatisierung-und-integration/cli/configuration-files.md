---
title: Verwendung von Konfigurationsdateien für die i-doit console utility
description: Anleitung zur Verwendung von .ini-Konfigurationsdateien für die i-doit console utility.
icon:
status:
lang: de
---

# Verwendung von Konfigurationsdateien für die i-doit console utility

Die Verwendung einer Konfigurationsdatei (`.ini`) ist eine leistungsstarke Methode, um Konsolen-Befehle auszuführen, insbesondere komplexe. Sie ermöglicht es Ihnen, alle Optionen in einer wiederverwendbaren Datei vorzudefinieren.

**Hauptvorteile:**
* **Sicherheit**: Vermeidet die direkte Eingabe von Passwörtern in der Kommandozeile, wo sie im Shell-Verlauf protokolliert werden können.
* **Einfachheit**: Verwaltet viele Optionen für komplexe Befehle wie `ldap-sync` auf strukturierte Weise.
* **Wiederverwendbarkeit**: Speichert verschiedene Konfigurationen für unterschiedliche Aufgaben, ohne sie jedes Mal neu eingeben zu müssen.

!!! warning "Zuerst ein Backup erstellen"
    Bitte erstellen Sie ein vollständiges Backup, bevor Sie Änderungen über eine Schnittstelle oder einen Import vornehmen. Sollte das Ergebnis nicht zufriedenstellend sein, kann es so wiederhergestellt werden.

-----

## Die Struktur einer `.ini`-Datei

Sie können Ihre Konfigurationsdateien zur besseren Organisation an einem beliebigen Ort speichern. Um eine Datei zu verwenden, geben Sie den Pfad mit der Option `--config` oder `-c` an.

Jede Konfigurationsdatei folgt der gleichen Grundstruktur mit drei Abschnitten:

```ini
[commandArguments]
# Für positionale Argumente. Wird derzeit von i-doit-Befehlen nicht verwendet.

[commandOptions]
# Für Standard-Befehlsoptionen wie --user oder --tenantId.
# Verwenden Sie den Langnamen der Option ohne die vorangestellten "--".
# Optionen ohne Wert (Flags) werden einfach nur mit ihrem Namen aufgelistet.
user=benutzername
password=passwort
quiet

[additional]
# Für spezielle Parameter, die von bestimmten Befehlen benötigt werden,
# wie z. B. LDAP-Attribut-Mappings oder Syslog-Dateipfade.
```

-----

## Beispiele

### Beispiel für den Befehl `search-index`

Dieses Beispiel erstellt den Suchindex neu. Die Option `update` erzwingt die Neuerstellung eines vorhandenen Index, und `quiet` minimiert die Konsolenausgabe.

```ini title="search-index.ini"
[commandOptions]
user=benutzername
password=passwort
tenantId=1
update
quiet

[additional]
```

**Ausführung:**

```shell
sudo -u www-data php console.php search-index -c /pfad/zur/config/search-index.ini
```

[example-search_index.ini :material-file-download:](../../assets/images/en/automation-and-integration/cli/example-search_index.ini){ .md-button .md-button--primary }

-----

### Beispiel für den Befehl `notifications-send`

Dieser Befehl versendet ausstehende Benachrichtigungen und erfordert nur grundlegende Authentifizierungsoptionen.

```ini title="notifications-send.ini"
[commandOptions]
user=benutzername
password=passwort
tenantId=1

[additional]
```

**Ausführung:**

```shell
sudo -u www-data php console.php notifications-send -c /pfad/zur/config/notifications-send.ini
```

[example-notifications-send.ini :material-file-download:](../../assets/images/en/automation-and-integration/cli/example-notifications-send.ini){ .md-button .md-button--primary }

-----

### Beispiel für den Befehl `ldap-sync`

Dies ist ein komplexer Befehl, bei dem eine Konfigurationsdatei dringend empfohlen wird. Der Abschnitt `[additional]` enthält alle LDAP-spezifischen Einstellungen und Attribut-Mappings.

```ini title="ldap-sync.ini"
[commandOptions]
user=benutzername
password=passwort
tenantId=1

[additional]
import_rooms=false
defaultCompany=""
deletedUsersBehaviour=disable_login
disabledUsersBehaviour=disable_login
; LDAP-Attribute sind individuell. Diese Standardkonfiguration ist für Active Directory vorbereitet:
attributes[department]=department
attributes[phone_company]=telephoneNumber
attributes[phone_home]=homephone
attributes[phone_mobile]=mobile
attributes[fax]=facsimileTelephoneNumber
attributes[description]=info
attributes[personnel_number]=initials
attributes[organization]=company
attributes[location]=physicalDeliveryOfficeName
attributes[salutation]=title
attributes[street]=streetAddress
attributes[city]=l
attributes[zip_code]=postalCode
attributes[function]=title
attributes[service_designation]=title
attributes[pager]=pager
;Benutzerdefinierte Kategorieerweiterung für Personen
attributes[custom_1]=objectSid
attributes[custom_2]=sn
attributes[custom_3]=homePhone
attributes[custom_4]=mobile
attributes[custom_5]=info
attributes[custom_6]=manager
attributes[custom_7]=company
attributes[custom_8]=department
autoReactivateUsers=false
ignoreUsersWithAttributes[]="sn"
ignoreUsersWithAttributes[]="givenName"
ignoreFunction=empty
syncEmptyAttributes=true
```

**Erläuterung der `[additional]`-Parameter:**

| Schlüssel                     | Wert                                     | Beschreibung                                                                                                                                                                                                                                                                       |
| ----------------------------- | ---------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `import_rooms`                | `true` oder `false`                      | Wenn `true`, wird das Attribut `physicalDeliveryOfficeName` importiert und ein entsprechendes Raum-Objekt erstellt, falls es nicht existiert.                                                                                                                                      |
| `defaultCompany`              | `"Name der Organisation"`                | Setzt eine Standard-Organisation für importierte Benutzer. Leer lassen, um keine Änderungen vorzunehmen.                                                                                                                                                                           |
| `deletedUsersBehaviour`       | `archive`, `delete` oder `disable_login` | Definiert, was mit i-doit-Benutzern passiert, wenn sie aus dem LDAP gelöscht werden.                                                                                                                                                                                               |
| `disabledUsersBehaviour`      | `archive`, `delete` oder `disable_login` | Definiert, was mit i-doit-Benutzern passiert, wenn sie im LDAP deaktiviert werden.                                                                                                                                                                                                 |
| `attributes[]`                | `attributes[i-doit-Feld]=AD-Attribut`    | Mappt ein i-doit Objektattribut (Schlüssel) auf ein LDAP-Attribut (Wert). Wenn benutzerdefinierte Informationen gespeichert werden sollen, kann die [Attributerweiterung](../../administration/verwaltung/import-und-schnittstellen/ldap/attributerweiterung.md) aktiviert werden. |
| `autoReactivateUsers`         | `true` oder `false`                      | Wenn `true`, werden alle Benutzer vor der Synchronisierung auf den Status "normal" gesetzt. Nur für OpenLDAP/NDS erforderlich.                                                                                                                                                     |
| `ignoreUsersWithAttributes[]` | `ignoreUsersWithAttributes[]="sn"`       | Verhindert die Synchronisierung von Benutzern, wenn ein angegebenes LDAP-Attribut leer ist (z. B. `sn` für Nachname). Mehrere Attribute können aufgelistet werden.                                                                                                                 |
| `ignoreFunction`              | `empty`, `!empty`, `isset`, `!isset`     | Die Prüffunktion für `ignoreUsersWithAttributes`. `empty` prüft beispielsweise, ob der Attributwert leer oder nicht gesetzt ist.                                                                                                                                                   |

**Ausführung:**

```shell
sudo -u www-data php console.php ldap-sync -c /pfad/zur/config/ldap-sync.ini
```

[example-ldap.ini :material-file-download:](../../assets/images/en/automation-and-integration/cli/example-ldap.ini){ .md-button .md-button--primary }

-----

### Beispiel für den Befehl `import-syslog`

Dieser Befehl importiert Syslog-Nachrichten in das i-doit-Logbuch. Die Konfigurationsdatei definiert, welche Log-Dateien gelesen und wie sie analysiert werden sollen.

```ini title="import-syslog.ini"
[commandOptions]
user=benutzername
password=passwort
tenantId=1

[additional]
; Regex zum Aufteilen einer Syslog-Zeile in Teile wie Datum, Hostname, Prozess und Nachricht.
regexSplitSyslogLine="/(^[a-zA-Z]{3}[ ]+[\d]+ [\d\:\d]+) (([.\-0-9a-zA-Z]+)*(\b(?:\d{1,3}\.){3}\d{1,3}\b)*)+ ([a-zA-Z0-9-_\/\[\]:]+) (.*)/"
; Die Namen für die Prioritätsstufen
priorities[]=Emergency
priorities[]=Alert
priorities[]=Critical
priorities[]=Error
priorities[]=Warning
priorities[]=Notice
priorities[]=Info
priorities[]=Debug
; Die zu überwachenden Log-Dateien
logfiles[]="/var/log/system.log"
; Die i-doit-Alarmstufe, die jeder Priorität zugewiesen wird
alertlevels[] = 4
alertlevels[] = 4
alertlevels[] = 3
alertlevels[] = 3
alertlevels[] = 2
alertlevels[] = 2
alertlevels[] = 1
alertlevels[] = 1
```

**Ausführung:**

```shell
sudo -u www-data php console.php import-syslog -c /pfad/zur/config/import-syslog.ini
```
