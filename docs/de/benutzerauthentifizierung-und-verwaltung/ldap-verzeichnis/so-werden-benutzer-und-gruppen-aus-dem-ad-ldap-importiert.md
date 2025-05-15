---
title: Erweiterte ldap-sync Konfiguration
description: Anleitung zur Konfiguration einer LDAPS Verbindung mit i-doit für Debian
icon: material/debian
lang: de
---

!!! warning "Bitte erstellen Sie vor jeder Änderung an einer Schnittstelle/Import einen vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist kann dieses dann wiederhergestellt werden"

Der Import von Benutzern und Gruppen aus dem Active Directory in i-doit findet immer über den [console.php](../../automatisierung-und-integration/cli/console/index.md) Befehl statt. Dazu benutzen wir das Kommando [ldap-sync](../../automatisierung-und-integration/cli/console/befehle-und-optionen.md#ldap-sync).<br>
Am Ende des Artikels ist ein komplettes Beispiel der erstellten erweiterten Konfiguration zu finden.

Der Artikel zur Konfiguration vom [LDAP-Verzeichnis/Active Directory](../ldap-verzeichnis/index.md) sollte vorher jedem bekannt sein.<br>
Wir werden hier verschiedene LDAP Filter und eine komplette [ldap.ini Konfiguration](../../automatisierung-und-integration/cli/console/verwendung-von-konfigurationsdateien-fuer-console-commands.md#beispiel-für-den-command-ldap-sync) durchgehen.<br>
Ziel ist es alle Benutzer und Gruppen aus dem AD/LDAP mit i-doit zu synchronisieren, sowie deren Mitgliedschaften.

Ich setzte Grundkenntnisse im Bezug auf AD/LDAP voraus.<br>
In diesen Beispielen wird für Personen die `objectClass = user` verwendet.<br>
Für Gruppen wird die `objectClass = group` verwendet.<br>
Wenn man nicht alle Benutzer oder Gruppen der Domäne synchronisieren will muss unter `Nach Benutzern suchen in (OU)\*` der DN/CN einer OU bzw. eines Containers eingetragen werden.

[![ldap_personen-suchen](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/1-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/1-ldap-bg.png)

## Konfiguration der Filter

* * *

### Import von allen Benutzern

Hier werden nur Benutzer synchronisiert, das bedeutet auch, dass keine Gruppen erstellt werden. Damit nur Benutzer synchronisiert werden muss der Filter so aussehen:

[![ldap_personen-importb](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/2-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/2-ldap-bg.png)

```ini
(objectClass=user)
```

* * *

### Import von Benutzern mit bestimmten Attributen

Wir möchten hier auf ein Attribut filtern und nur diesen Benutzer synchronisieren.<br>
Nur der Benutzer der im Attribut `sAMAccountName` den Wert `MichaelO` hat soll synchronisiert werden.

[![ldap_personen-importba](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/3-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/3-ldap-bg.png)

```ini
(&(objectClass=user)(sAMAccountName=MichaelO))
```

* * *

### Import von allen Benutzern und allen Gruppen

Hier werden Benutzer und Gruppen erstellt außerdem werden die Benutzer den jeweiligen Gruppen zugewiesen.<br>
Damit Benutzer und Gruppen synchronisiert werden muss der Filter so aussehen:

[![ldap_personen-importbg](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/4-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/4-ldap-bg.png)

```ini
(|(objectClass=user)(objectClass=group))
```

* * *

### Import von Benutzern die Mitglied der Gruppe idoit-read sind

Damit nur Benutzer die Mitglied der Gruppe `idoit-read` sind synchronisiert werden muss der Filter so aussehen:

[![ldap_personen-importbmg](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/5-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/5-ldap-bg.png)

```ini
(&(objectClass=user)(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test))
```

* * *

### Import von Benutzern die Mitglied der Gruppe idoit-read und idoit-write sind

Damit nur Benutzer die Mitglied der Gruppe `idoit-read` sind synchronisiert werden muss der Filter so aussehen:

[![ldap_personen-importbmgrw](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/6-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/6-ldap-bg.png)

```ini
(&(objectClass=user)(&(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test)(memberOf=CN=idoit-write,CN=Users,DC=synetics,DC=test)))
```

* * *

### Import von Benutzern und Gruppen die unterhalb einer Nested Group sind

Ich habe eine Gruppe idoit in der die i-doit Gruppen `idoit-read` und `idoit-write` Mitglied sind. Diese beiden Gruppen sollen synchronisiert werden. Mit diesem Filter kann ich direkt die Gruppen und die Benutzer anlegen lassen.<br>
Die Gruppe idoit wird dadurch nicht erstellt, es werden nur die Gruppen unterhalb der Gruppe erstellt. Außerdem werden die Gruppen nicht miteinander verknüpft, da Gruppen keinen Gruppen als Mitglied haben können.

[![ldap_personen-importbgng](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/7-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/7-ldap-bg.png)

```ini
(memberOf:1.2.840.113556.1.4.1941:=CN=idoit,CN=Users,DC=synetics,DC=test)
```

* * *

### So filtere ich Benutzer mit mehr als einer objectClass

Wenn sich die Benutzer beispielsweise dadurch unterscheiden, dass sie zwei `objectClass`-Attribute haben (z.B. Person und Benutzer), würde ich so den Filter aufbauen:

[![ldap_personen-filter](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/8-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/8-ldap-bg.png)

```ini
(&(objectClass=person)(objectClass=user))
```

* * *

## Welche weiteren Attribute über die ldap.ini importiert werden können

*   Der Beitrag [ldap.ini Konfiguration](../../automatisierung-und-integration/cli/console/verwendung-von-konfigurationsdateien-fuer-console-commands.md#beispiel-für-den-command-ldap-sync) sollte bekannt sein.
*   Es kann eine .ini Datei für den Import erstellt werden, mit dieser können weitere Attribute importiert werden.
*   Die [Attributerweiterungen](../../administration/verwaltung/import-und-schnittstellen/ldap/attributerweiterung.md) sollte bereits Konfiguriert sein.
*   Wir verwenden den .ini Abschnitt "additional"

### Die Konfiguration der Attributerweiterungen

[![ldap_personen-config](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/9-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/9-ldap-bg.png)

Hier noch mal als Tabelle

| Feldname   | Attribut   | Mapping mit   |
| ---------- | ---------- | ------------- |
| Feldname 1 | objectSid  | Key: custom_1 |
| Feldname 2 | objectGUID | Key: custom_2 |
| Feldname 3 | -          | Key: custom_3 |
| Feldname 4 | -          | Key: custom_4 |
| Feldname 5 | -          | Key: custom_5 |
| Feldname 6 | -          | Key: custom_6 |
| Feldname 7 | -          | Key: custom_7 |
| Feldname 8 | -          | Key: custom_8 |

* * *

### Benutzer statisch Räumen zuordnen

In der `ldap.ini` können feste Zuweisungen von Benutzern zu Räumen eingetragen werden.<br>
Die Benutzer werden dann dem zugewiesenem Raum als Kontakt zugewiesen.<br>
(Die Räume müssen vorher in i-doit existieren!)

```ini
;Attach users to Rooms statically
rooms["Room"]=["Username1","Username2"]
```

* * *

### Benutzer als Kontakt zu Räumen zuordnen

Es ist möglich, über die Funktion `import_rooms` Personen als Kontakt zu Räumen zuzuordnen.
Dazu muss die Option auf `true` gesetzt werden.
Räume werden automatisch angelegt, allerdings ohne Standort.

```ini
;Import rooms from ldap
import_rooms=true
attributes[office]=physicalDeliveryOfficeName
```

!!! note "Bug"
    Aktuell muss das AAttribut in Kleinbuchstaben geschrieben werden `physicaldeliveryofficename`

* * *

### So importiere ich Attribute aus dem LDAP

Ich möchte weitere LDAP Attribute zu Benutzern importieren und habe schon die [Attributerweiterungen](../../administration/verwaltung/import-und-schnittstellen/ldap/attributerweiterung.md) Konfiguriert.<br>
Nun muss ich noch die Konfigurationsdatei des LDAP-Sync konfigurieren (ldap.ini).

Die verfügbaren Attribute finden Sie in Ihrer AD-Konfiguration.
Hieraus kann ich mir die Attribute suchen die ich zusätzlich Synchronisieren möchte.<br>
Welche Attribute zu welchem Feld gehören kann man über Google finden oder z.B. hier [SelfADSI externer Link](http://www.selfadsi.de/user-attributes.htm).

Ich nehme mir als Beispiel folgende Attribute heraus und füge Sie in die ldap.ini ein:

```ini
;Standardfelder die bereits in den Stammdaten von Personen vorhanden sind
attributes[department]=department
attributes[phone_company]=telephonenumber
attributes[phone_home]=homephone
attributes[phone_mobile]=mobile
attributes[fax]=facsimileTelephoneNumber
attributes[description]=info
attributes[personnel_number]=employeeid
attributes[organization]=company
attributes[street]=streetAddress
attributes[city]=l
attributes[zip_code]=postalCode
attributes[function]=title
attributes[service_designation]=title
attributes[pager]=pager

;Attributerweiterung nur für Personen
attributes[custom_1]=objectSid
attributes[custom_2]=objectGUID
;attributes[custom_3]=
;attributes[custom_4]=
;attributes[custom_5]=
;attributes[custom_6]=
;attributes[custom_7]=
;attributes[custom_8]=
```

Wie man hier sieht habe ich z.B. das Stammdaten Attribut department mit dem LDAP Attribute department gemapped.<br>
Zusätzlich habe ich die Attributerweiterung verwendet. Der Aufbau für z.B.<br>

```ini
attributes[custom_1]=objectSid
```

wäre wie folgt:

`attributes` sagt dem handler er soll das i-doit Attribut [custom_1] mit dem LDAP Attribut `objectSid` synchronisieren.<br>
Nachdem die Benutzer synchronisiert wurden finde ich folgende Stammdaten vor:

[![ldap_personen-sync](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/10-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/10-ldap-bg.png)

* * *

### Weitere Optionen

#### autoReactivateUsers

Um einen sauberen Start zu haben, setzt diese Einstellung automatisch alle Benutzer vor der Synchronisierung auf den Status normal.

Dies ist hilfreich, falls Benutzer versehentlich vorher archiviert oder gelöscht wurden.<br>

!!! info
    Wir sollten uns bewusst sein, dass es mit NDS oder OpenLDAP derzeit nicht möglich ist, gelöschte Benutzer zu identifizieren, um sie später zu archivieren. Benutzer sind dann immer aktiviert!

```ini
autoReactivateUsers=false
```

* * *

#### ignoreUsersWithAttributes

Deaktiviere die Synchronisierung für Benutzer mit Attributen, die gegen ignoreFunction geprüft wurden.

Diese Funktion hilft, eine Synchronisation unerwünschter Verzeichnisobjekte zu verhindern.<br>
Der Benutzer wird nicht synchronisiert, wenn ignoreFunction für ALLE ausgewählten Attribute fehlschlägt.

Standardmäßig steht hier `ignoreUsersWithAttributes=[]` somit wird nichts ignoriert.

Wir möchten nur Benutzer importieren bei denen die Attribute `samaccountname`, `sn`, `givenname` und `mail` nicht leer sind.<br>
Somit müsste die Konfiguration für `ignoreUsersWithAttributes` so aussehen:

```ini
ignoreUsersWithAttributes[] = "samaccountname"
ignoreUsersWithAttributes[] = "sn"
ignoreUsersWithAttributes[] = "givenname"
ignoreUsersWithAttributes[] = "mail"
```

* * *

#### ignoreFunction

Ist die Prüffunktion zum Ignorieren von Benutzern (siehe `ignoreUsersWithAttributes`)<br>
Dies kann ein beliebiger Funktionsname sein, der über `call_user_func` oder die definierten Funktionen aufrufbar ist.

definierte functions:

```ini
empty
!empty
isset
!isset
```

Beispiel: `empty` würde als empty($value) ausgeführt werden

Wir prüfen auf leere Attribute mit

```ini
ignoreFunction=empty
```

#### Synchronisiere leere Attribute

Diese Option entscheidet, ob geleerte Attribute aus dem AD mit i-doit synchronisiert werden sollen oder nicht.

```ini
syncEmptyAttributes=true
```

* * *

### Die komplette ldap.ini

Hier eine fertige ini. Datei diese kann natürlich bearbeitet werden.<br>
Der erste Teil der ldap.ini wird von [Verwendung von Konfigurationsdateien für Console Commands](../../automatisierung-und-integration/cli/console/verwendung-von-konfigurationsdateien-fuer-console-commands.md#beispiel-für-den-command-ldap-sync) bezogen.

```ini
[commandArguments]
[commandOptions]
user=admin
password=admin
tenantId=1
[additional]
;Import rooms from ldap
import_rooms=false
attributes[office]=physicalDeliveryOfficeName

;Automatically assign this company to every ldap user
defaultCompany=''

;What to do with deleted users - archive, delete, purge
deletedUsersBehaviour=archive

;What to do with disabled users - archive, delete, disable_login
disabledUsersBehaviour=disable_login

;Attach users to Rooms statically
;rooms["Room"]=["Username1","Username2"]

;LDAP Attributes are individual. This default configuration is prepared for Active Directory:
attributes[department]=department
attributes[phone_company]=telephonenumber
attributes[phone_home]=homephone
attributes[phone_mobile]=mobile
attributes[fax]=facsimileTelephoneNumber
attributes[description]=info
attributes[personnel_number]=employeeid
attributes[organization]=company
attributes[street]=streetAddress
attributes[city]=l
attributes[zip_code]=postalCode
attributes[function]=title
attributes[service_designation]=title
attributes[pager]=pager

;Category extension for persons. Only has a effect when activated
attributes[custom_1]=objectSid
attributes[custom_2]=objectGUID
;attributes[custom_3]=
;attributes[custom_4]=
;attributes[custom_5]=
;attributes[custom_6]=
;attributes[custom_7]=
;attributes[custom_8]=

;Automatically sets all users to status normal NDS and OpenLDAP
autoReactivateUsers=false

;Disable sync for users with Attributes checked against 'ignoreFunction'
ignoreUsersWithAttributes[]="sn"

;The check function used for ignoring users (see 'ignoreUsersWithAttributes') empty - !empty - isset - !isset
ignoreFunction=empty

;This option decides whether empty or emptied attributes from AD should be synchronized with i-doit or not.
syncEmptyAttributes=true
```

Damit die .ini Datei verwendet wird, muss diese mit dem `-c` parameter angegeben werden.

```shell
sudo -u www-data php console.php ldap-sync -c /var/www/html/i-doit/src/handler/config/ldap-sync.ini
```

[ldap.ini :material-file-download:](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/example-ldap.ini){ .md-button .md-button--primary }
