---
title: LDAP-Verzeichnis/Active Directory (AD)
description: LDAP-Verzeichnis/Active Directory (AD)
#icon: material/
status:
lang: de
---

!!! warning "Bitte erstellen Sie vor jeder Änderung an einer Schnittstelle/Import einen vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist kann dieses dann wiederhergestellt werden"

Für die Authentifizierung/Autorisierung und Synchronisierung von Daten aus einem LDAP-Verzeichnis oder Active Directory (AD) bietet i-doit eine Schnittstelle.

!!! info ""
    Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/ldap-integration-mit-i-doit/)

## Voraussetzungen

i-doit unterstützt folgende Verzeichnisdienste:

*   [OpenLDAP](https://de.wikipedia.org/wiki/OpenLDAP)
*   [Microsoft Active Directory (AD)](https://de.wikipedia.org/wiki/Active_Directory)
*   [Novel eDirectory](https://de.wikipedia.org/wiki/Novell_eDirectory) (früher Directory Services)

Die [PHP-Extension php_ldap](http://de.php.net/manual/de/ldap.setup.php) für die Kommunikation mit einem Active Directory (AD) bzw. LDAP-Verzeichnis muss installiert und aktiviert werden. Wer den Installationsanweisungen gefolgt ist, hat die Extension bereits auf dem System.

Nicht vergessen, LDAP zu erlauben, wenn SELinux verwendet wird. Dazu `setsebool -P httpd_can_connect_ldap on` verwenden. Das -P steht für Permanent. Überprüfen Sie dies mit `getsebool -a | grep httpd`

### Benötigte Rechte für den LDAP-Sync

Ein Benutzer für den `ldap-sync` Befehl benötigt folgende Mindestberechtigungen:

**1. Verwaltung (Befehl ausführen)**

- Bedingung **Commands** und `Alle` Rechte für den Parameter `SyncCommand`.

**2. CMDB (Objekte & Gruppen bearbeiten)**

- Bedingung **Kategorie in Objekttyp "Personen"** und `Alle` Rechte für die Kategorie `Personen - Personengruppenmitgliedschaft`.


### Nachträgliche Installation unter Debian GNU/Linux

```shell
sudo apt install php-ldap
sudo service apache2 restart
```

## Nachträgliche Installation unter [Windows](../../installation/manuelle-installation/microsoft-windows-server/index.md)

Die Datei php.ini (in der Regel unter `C:\xampp\php\php.ini`) muss angepasst werden. In einem Texteditor aktiviert man das Laden der Extension php_ldap.

Aus der Zeile

```ini
;extension=php_ldap.dll
```

wird das ";" entfernt und somit

```ini
extension=php_ldap.dll
```

Manchmal kann es noch notwendig sein, die Dateien `ssleay32.dll` und `libeay32.dll` (von Version zu Version unterschiedlich, jedoch meist unter `C:\xampp\apache\bin\` zu finden) in das Verzeichnis php\ zu kopieren. Danach muss noch der Apache Webserver neu gestartet werden.

## Konfiguration

Die Konfiguration befindet sich in i-doit unter **Verwaltung → Import und Schnittstellen → LDAP**.

### Server

Unter **Verwaltung → Import und Schnittstellen → LDAP → Server** können ein oder mehrere Instanzen konfiguriert werden. Beim Login werden alle Server nacheinander abgefragt, bis ein Login gefunden wurde. Gibt es mehrere [Mandanten](../../administration/mandantenfaehigkeit.md), werden alle nacheinander abgefragt und die Datenbanken für den Login angeboten, wenn die Abfrage ein positives Ergebnis geliefert hat.

#### Erweiterte Konfiguration

Ein Beispiel dazu ist [hier](../../automatisierung-und-integration/cli/configuration-files.md) zu finden. Diese Datei kann mit Login-Daten, Tenant und anderen Optionen erweitert und angepasst werden. Damit diese Datei z.B. beim `ldap-sync` Befehl berücksichtigt wird, muss diese über einen weiteren Parameter `-c /pfad/` mit angegeben werden weitere Informationen zur [i-doit console utility](../../automatisierung-und-integration/cli/index.md).

| Parameter                     | Zweck                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| ----------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **import_rooms**              | Auf true gesetzt werden auch Räume mit der Synchronisation angelegt (Standard: false)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| **defaultCompany**            | Hierdurch werden durch die LDAP-Synchronisation hinzugefügte Benutzer automatisch der konfigurierten<br><br>Organisation zugewiesen. (Standard: leer)<br><br>Bsp. <br><br>defaultCompany='i-doit'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| **deletedUsersBehaviour**     | Kann auf **archive**, **delete** und **disable_login** gesetzt werden um Benutzer auf [archiviert bzw. gelöscht](../../grundlagen/lebens-und-dokumentationszyklus.md) zu setzen, die nicht mehr über die Synchronisation gefunden werden. Ein archivierter/gelöschter Benutzer kann sich nicht mehr in i-doit anmelden.<br><br>deletedUserBehavior=archive, setzt den Status des Benutzers auf archiviert  <br>deletedUserBehavior=delete, setzt den Status des Benutzers auf gelöscht  <br>deletedUserBehavior=disable\_login, setzt den Status des Benutzers auf normal und Deaktiviere Login auf Ja<br><br>(Standard: **archive)**<br><br>Bsp.<br><br>deletedUsersBehaviour=archive |
| **disabledUsersBehaviour**    | Kann auf **archive**, **delete** und **disable_login** gesetzt werden um Benutzer auf [archiviert bzw. gelöscht](../../grundlagen/lebens-und-dokumentationszyklus.md) zu setzen, die nicht mehr über die Synchronisation gefunden werden. Ein archivierter/gelöschter Benutzer kann sich nicht mehr in i-doit anmelden.<br><br>Oder man deaktiviert nur den Login für die User.<br><br>Bsp.<br><br>disabledUsersBehaviour=archive                                                                                                                                                                                                                                                      |
| **rooms**                     | Wie in dem Beispiel kann hier eine Zuweisung von Benutzer zu einem Raum vordefiniert werden, die bei der Synchronisation vorgenommen wird. Die Zuweisung wird über die Kontaktzuweisung ohne eine Rolle realisiert.<br><br>Bsp. <br><br>rooms\["Raum B"] = \["Person A", "Person C", "Person D"]                                                                                                                                                                                                                                                                                                                                                                                       |
| **attributes**                | Hiermit werden die jeweiligen Felder aus dem Directory mit Attributen in i-doit verknüpft. Diese ergänzen die zugewiesenen Attribute aus dem oberen Teil der Anleitung.<br><br>Bsp.<br><br>attributes\[department]=department                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| **autoReactivateUsers**       | Ist nur für Novel Directory Services (NDS) und OpenLDAP relevant. Hierdurch werden bei der Synchronisation erst mal alle Benutzer wieder aktiviert und nach dem regulären Prinzip wieder deaktiviert, falls zutreffend.<br><br>Bsp.<br><br>autoReactivateUsers=false                                                                                                                                                                                                                                                                                                                                                                                                                   |
| **ignoreUsersWithAttributes** | Diese Funktion hilft, eine Synchronisation unerwünschter Verzeichnisobjekte zu verhindern.<br><br>Der Benutzer wird nicht synchronisiert, wenn die ignoreFunction für alle ausgewählten Attribute fehlschlägt.<br><br>Bsp.<br><br>ignoreUsersWithAttributes\[\] = "samaccountname"                                                                                                                                                                                                                                                                                                                                                                                                     |
| **ignoreFunction**            | Dies kann ein beliebiger Funktionsname sein, der über call\_user\_func oder die definierten Funktionen aufrufbar ist.<br><br>Definierte Funktionen:<br><br>empty  <br>!empty  <br>isset  <br>!isset<br><br>Bsp,<br><br>ignoreFunction\=empty                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| **syncEmptyAttributes**       | Wurden Werte aus Feldern im AD gelöscht/geleert werden diese in i-doit übernommen<br><br>syncEmptyAttributes=true                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |



### Directories

Siehe [Directories](../../administration/verwaltung/import-und-schnittstellen/ldap/directories.md)

### Attributerweiterung

Siehe [LDAP Attributerweiterung](../../administration/verwaltung/import-und-schnittstellen/ldap/attributerweiterung.md)

## Logging

Im `log/` Verzeichnis im i-doit Installationsverzeichnis befindet sich eine Logdatei mit dem Namen `ldap_YYYY-MM-DD.log`. Das Logging lässt sich im [Admin-Center](../../administration/admin-center.md#system-settings) ändern, oder über die [Experteneinstellungen](../../administration/admin-center.md#expert-settings-system-bezogen) im [Admin-Center](../../administration/admin-center.md#system-settings).

## Den ldap-sync ausführen

Der ldap-sync lässt sich nur über die Console des Servers ausführen. Um die Console richtig bedienen zu können, sollte der [Artikel](../../automatisierung-und-integration/cli/index.md) dazu bekannt sein. Für eine einfache Synchronisation ohne die erweiterte Konfiguration dient der Befehl `ldap-sync`. Eine Beschreibung der Parameter ist im entsprechenden für das[i-doit console utility](../../automatisierung-und-integration/cli/index.md) zu finden.

**Beispiel zur Verwendung aus dem i-doit Ordner**

```shell
sudo -u www-data php console.php ldap-sync --user admin --password admin --tenantId 1 --verbose --ldapServerId 1
```
