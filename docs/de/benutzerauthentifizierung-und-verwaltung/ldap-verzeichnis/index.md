---
title: LDAP-Verzeichnis/Active Directory (AD)
description: "Mit der LDAP-/AD-Schnittstelle bindest du i-doit an dein zentrales Verzeichnis an."
#icon: material/
status:
lang: de
---

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Mit der LDAP-/AD-Schnittstelle bindest du i-doit an dein zentrales Verzeichnis an. Benutzer melden sich mit ihren gewohnten Zugangsdaten an, und du kannst Personen sowie Personengruppen automatisch synchronisieren.

!!! info ""
    Ein Praxisbeispiel findest du auf unserem [Blog](https://www.i-doit.com/blog/ldap-integration-mit-i-doit/)

## Voraussetzungen

i-doit unterstützt folgende Verzeichnisdienste:

*   [OpenLDAP](https://de.wikipedia.org/wiki/OpenLDAP)
*   [Microsoft Active Directory (AD)](https://de.wikipedia.org/wiki/Active_Directory)
*   [Novel eDirectory](https://de.wikipedia.org/wiki/Novell_eDirectory) (früher Directory Services)

Die [PHP-Extension php_ldap](http://de.php.net/manual/de/ldap.setup.php) muss installiert und aktiviert sein. Wenn du den Installationsanweisungen gefolgt bist, ist die Extension bereits auf deinem System vorhanden.

!!! tip "SELinux"
    Wenn du SELinux verwendest, musst du LDAP-Verbindungen explizit erlauben: `setsebool -P httpd_can_connect_ldap on` (das `-P` macht die Einstellung permanent). Überprüfe den Status mit `getsebool -a | grep httpd`.

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

### Nachträgliche Installation unter [Windows](../../installation/manuelle-installation/microsoft-windows-server/index.md)

Passe die Datei `php.ini` an (in der Regel unter `C:\xampp\php\php.ini`). Aktiviere die Extension `php_ldap`, indem du das Semikolon am Zeilenanfang entfernst.

Aus der Zeile

```ini
;extension=php_ldap.dll
```

wird

```ini
extension=php_ldap.dll
```

Je nach Version kann es notwendig sein, die Dateien `ssleay32.dll` und `libeay32.dll` (meist unter `C:\xampp\apache\bin\`) in das Verzeichnis `php\` zu kopieren. Starte anschließend den Apache Webserver neu.

## Konfiguration

Die Konfiguration befindet sich in i-doit unter **Verwaltung → Import und Schnittstellen → LDAP**.

### Server

Unter **Verwaltung → Import und Schnittstellen → LDAP → Server** konfigurierst du einen oder mehrere LDAP-Server. Beim Login fragt i-doit alle konfigurierten Server nacheinander ab, bis eine erfolgreiche Authentifizierung stattfindet. Bei mehreren [Mandanten](../../administration/mandantenfaehigkeit.md) werden alle Datenbanken angeboten, bei denen die Abfrage ein positives Ergebnis liefert.

### LDAP Verbindung für Lookups (lesend)

| Feldname                                            | Inhalt                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| --------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Aktiv**                                           | Soll der Server beim Login mit abgefragt werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| **Directory**                                       | **Pflichtfeld**: Welche Art Directory wird abgefragt?                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| **LDAP-Version**                                    | In welcher Version ist das Directory vorhanden? (Standard: 3)                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| **Enable LDAP Paging**                              | Soll die maximale Anzahl der Suchergebnisse aktiviert/überschrieben werden?  <br>Dann werden die Ergebnisse Paket für Paket übermittelt.<br><br>_In einem LDAP-Suchvorgang muss stets damit gerechnet werden, dass der LDAP-Server eine Obergrenze der zurückgelieferten Ergebnisse pro Suchanfrage hat. Man sucht z.B. nach allen User-Objekten in einer gesamten OU-Struktur, bekommt aber nur 500 User als Ergebnis zurück, obwohl sich weit über 2000 User auf dem Server befinden müssen._ |
| **LDAP Page Limit**                                 | Wie viele Ergebnisse sollen pro "Päckchen" zurückgeliefert werden?                                                                                                                                                                                                                                                                                                                                                                                                                              |
| **IP / Hostname**                                   | **Pflichtfeld**: Die IP oder der Hostname des Servers                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| **Port**                                            | **Pflichtfeld**: Über welchen Port wird die Abfrage durchgeführt? (Standard: 389)                                                                                                                                                                                                                                                                                                                                                                                                               |
| **TLS**                                             | Soll die Abfrage verschlüsselt werden? Unter Debian-basierten Betriebssystemen wird das Zertifikat der Root CA in das Verzeichnis `/usr/local/share/ca-certificates/` kopiert und anschließend mit `sudo update-ca-certificates` aktiviert.                                                                                                                                                                                                                                                     |
| **TLS-Certificate**                                 | Hier wird das Zertifikat ausgewählt. Wurde noch keines hochgeladen, kann es direkt hochgeladen werden.                                                                                                                                                                                                                                                                                                                                                                                          |
| **TLS-Zertifikatsprüfstrategie**                    | **Allow**: Das Peer-Zertifikat wird angefordert. Wenn kein Zertifikat bereitgestellt wird, wird die Sitzung normal fortgesetzt. Wenn ein ungültiges Zertifikat bereitgestellt wird, wird es ignoriert und die Sitzung wird normal fortgesetzt.<br>**Demand**: Das Peer-Zertifikat wird angefordert. Wenn kein Zertifikat bereitgestellt wird oder ein ungültiges Zertifikat bereitgestellt wird, wird die Sitzung sofort beendet.                                                               |
| **Admin Benutzername (DN)**                         | **Pflichtfeld**: Der Pfad bis zum Benutzerobjekt, das Leserechte auf das Directory hat.<br><br>(Beispiel: CN=idoit,OU=tree,DC=synetics,DC=int)                                                                                                                                                                                                                                                                                                                                                  |
| **Passwort**                                        | **Pflichtfeld**: Das Passwort des darüber angegebenen Benutzers                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| **Benutze Admin-Nutzer für alle lesenden Anfragen** | Wenn die Option "Benutze Admin-Nutzer für alle lesenden Anfragen" aktiviert ist, wird bei jeder LDAP-Server Abfrage mit dem Administrator Account aus der LDAP-Server Konfiguration geprüft                                                                                                                                                                                                                                                                                                     |
| **Time limit**                                      | Limit für die maximale Dauer der Abfrage. (Standard: 30)                                                                                                                                                                                                                                                                                                                                                                                                                                        |

_Bekannte Lösungen für Probleme bei der TLS Verbindung findet Ihr [LDAP via TLS](../../administration/troubleshooting/ldap-via-tls.md)_

### LDAP-Parameter für i-doit-Login

Diese Parameter bestimmen, wo i-doit im Verzeichnis nach Benutzern sucht.

| Feldname                          | Inhalt                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| --------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Eindeutige Kennung**            | Es kommt bei der AD-Synchronisierung immer wieder dazu, dass geänderte Datensätze fälschlicherweise aufgrund eines geänderten Namens (Heirat o.Ä.) nicht mehr synchronisiert werden.  <br>Der "alte" Datensatz wird hier archiviert und ein neuer importiert.  <br>Daher kann als Eindeutige Kennung ein anderes Attribut ausgewählt werden. Siehe dazu **[Attributerweiterung](../../administration/verwaltung/import-und-schnittstellen/ldap/attributerweiterung.md)** |
| **Filter**                        | Der Filter wird durch die im unteren Bereich definierten Werte automatisch gefüllt. Es is außerdem möglich den Filter **manuell** einzufügen. Dazu auf den Button **Manuell bearbeiten** anklicken.                                                                                                                                                                                                                                                                      |
| **Nach Benutzern suchen in (OU)** | **Pflichtfeld**: Der Pfad bis zur Organisationseinheit, in der die Benutzer im Directory abgelegt wurden.<br><br>(Beispiel: OU=tree,DC=synetics,DC=int)                                                                                                                                                                                                                                                                                                                  |
| **Rekursive Suche**               | Beim Aktivieren der rekursiven Suche werden auch die Verzeichnisse unterhalb der darüber angegebenen Organisationseinheit durchsucht. Bei großen Directories ist dies nicht empfehlenswert und sollte durch die Anlage von mehreren Servern umgangen werden.                                                                                                                                                                                                             |

Du kannst den Filter weiter verfeinern. Bei einer einzigen Filterzeile haben die zusätzlichen Optionen noch keine Auswirkung. Erst wenn du über **Filter hinzufügen** die Abfrage erweiterst, kommen sie zur Geltung.

An letzten Filter anhängen:

```shell
(&(objectClass=user)(test=test))
```

Als neuen Filter anhängen:

```shell
(&(objectClass=user)(&(test=test)))
```

Neuen Term bilden:

```shell
(&(&(objectClass=user))(test=test))
```

Im unteren Bereich der Seite testest du die Konfiguration. Bei Erfolg erscheint die Meldung:

```shell
Connection OK!
XX object(s) found in OU=tree,OU=synetics,DC=synetics,DC=int.
```

Falls die Fehlermeldung nicht aussagekräftig genug ist, erhöhe das Debug-Level. Dadurch schreibt i-doit detailliertere Ausgaben in das Apache Error Log. Unter Debian-basierten Systemen findest du dieses unter `/var/log/apache2/error.log`.

### Identifizierung von Objekten

Ohne weitere Einstellung (z.B. **Eindeutige Kennung**) identifiziert i-doit Objekte anhand des **Login**-Attributs aus der **Kategorie Personen > Login**.

### Directories

Unter **Verwaltung → Import und Schnittstellen → LDAP → Directories** richtest du das Attribut-Mapping ein. Beim Login fragt i-doit grundlegende Informationen des Benutzers ab und legt sie im Personen-Objekt ab. Wähle das zutreffende Directory aus und passe bei Bedarf die Zuweisung an. In der Regel sind die Felder bereits korrekt vorausgefüllt.

### Import eigener LDAP-Attribute

Du kannst auch eigene LDAP-Attribute in die Stammdaten importieren. Konfiguriere dazu weitere Felder unter **Verwaltung → Import und Schnittstellen → LDAP → [Attributerweiterung](../../administration/verwaltung/import-und-schnittstellen/ldap/attributerweiterung.md)**. Sobald du einen Namen definiert hast, erscheint das Feld in den Stammdaten und wird beim Sync über den zugehörigen Key befüllt.

### Regelmäßige Synchronisation

Die Grundkonfiguration hast du in den vorherigen Schritten bereits erledigt. Richte nun den passenden [i-doit console utility](../../automatisierung-und-integration/cli/index.md) Befehl ein, um die Synchronisation regelmäßig auszuführen. Optional konfigurierst du weitere zu synchronisierende Felder.

### Erweiterte Konfiguration

Ein Beispiel findest du [hier](../../automatisierung-und-integration/cli/configuration-files.md). Diese Datei kannst du mit Login-Daten, Tenant und weiteren Optionen erweitern. Damit sie beim `ldap-sync`-Befehl berücksichtigt wird, gib sie über den Parameter `-c /pfad/` an. Weitere Informationen findest du beim [i-doit console utility](../../automatisierung-und-integration/cli/index.md).

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

### Automatische Zuweisung von Personen zu Personengruppen

Die automatische Zuweisung sorgt dafür, dass Benutzer nach dem Login automatisch die Berechtigungen ihrer Personengruppe erhalten.

So richtest du die Zuweisung ein:

1. Öffne die **Stammdaten** einer **Personengruppe** in i-doit.
2. Trage im Attribut **LDAP-Gruppe (Mapping)** den Namen der entsprechenden LDAP-/AD-Gruppe ein.

Beim Login oder bei der Synchronisation gleicht i-doit die Gruppenmitgliedschaften des Benutzers im Directory mit den konfigurierten Mappings ab. Bei Übereinstimmung wird die Personengruppe automatisch zugewiesen.

[![ldap-autozuweisung](../../assets/images/de/automatisierung-und-integration/ldap/1-ldap.png)](../../assets/images/de/automatisierung-und-integration/ldap/1-ldap.png)

!!! info "memberOf bei OpenLDAP"
    Die automatische Zuweisung beruht auf der LDAP-Abfrage, in welchen Gruppen ein Benutzer ist. Hierbei spielt das Attribut memberOf eine wichtige Rolle. Dieses Attribut muss als Overlay verfügbar sein, was in vielen Standard-Installationen von OpenLDAP nicht der Fall ist. Gute Artikel für die nötige Konfiguration befinden sich [hier](http://www.adimian.com/blog/2014/10/how-to-enable-memberof-using-openldap/) und [hier](https://technicalnotes.wordpress.com/2014/04/19/openldap-setup-with-memberof-overlay/).

### Personen und Personengruppen Synchronisieren

Seit Version 1.15 synchronisiert i-doit Personen und Personengruppen aus dem LDAP/AD. Dabei werden Personen automatisch den im LDAP zugewiesenen Gruppen zugeordnet, sofern diese vom konfigurierten Filter erfasst werden.

Eine ausführliche Anleitung findest du im Artikel [Benutzer und Gruppen aus dem AD/LDAP importieren](../ldap-verzeichnis/so-werden-benutzer-und-gruppen-aus-dem-ad-ldap-importiert.md).

Der ausführende Benutzer benötigt Supervisor-Rechte auf die Kategorien **Gruppenmitgliedschaft** und **Personengruppen > Mitglieder** sowie auf die Objekttypen **Personen** und **Personengruppen**.

[![ldap-sync](../../assets/images/de/automatisierung-und-integration/ldap/2-ldap.png)](../../assets/images/de/automatisierung-und-integration/ldap/2-ldap.png)

## Logging

Im Verzeichnis `log/` deiner i-doit-Installation findest du die Logdatei `ldap_YYYY-MM-DD.log`. Das Logging konfigurierst du im [Admin-Center](../../administration/admin-center.md#system-settings) oder über die [Experteneinstellungen](../../administration/admin-center.md#expert-settings-system-bezogen).

## Den ldap-sync ausführen

Den ldap-sync führst du über die Kommandozeile des Servers aus. Mache dich zunächst mit dem [i-doit console utility](../../automatisierung-und-integration/cli/index.md) vertraut. Für eine einfache Synchronisation ohne erweiterte Konfiguration verwendest du den Befehl `ldap-sync`.

**Beispiel zur Verwendung aus dem i-doit Ordner**

```shell
sudo -u www-data php console.php ldap-sync --user admin --password admin --tenantId 1 --verbose --ldapServerId 1
```
