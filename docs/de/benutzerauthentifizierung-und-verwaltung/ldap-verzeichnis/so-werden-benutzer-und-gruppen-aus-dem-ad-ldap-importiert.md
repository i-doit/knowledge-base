---
title: Erweiterte ldap-sync Konfiguration
description: Anleitung zur Konfiguration einer LDAPS Verbindung mit i-doit für Debian
icon: octicons/person-add-24
lang: de
---

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Dieser Artikel zeigt dir, wie du Benutzer und Gruppen aus dem Active Directory gezielt in i-doit importierst. Der Import erfolgt immer über den [console.php](../../automatisierung-und-integration/cli/index.md)-Befehl `ldap-sync`. Am Ende des Artikels findest du ein komplettes Beispiel einer erweiterten Konfiguration.

**Voraussetzungen:**

- Du hast die grundlegende [LDAP-/AD-Konfiguration](../ldap-verzeichnis/index.md) bereits eingerichtet.
- Du verfügst über Grundkenntnisse im Bereich AD/LDAP.

In den folgenden Beispielen wird für Personen die `objectClass = user` und für Gruppen die `objectClass = group` verwendet. Wenn du nicht alle Benutzer oder Gruppen der Domaene synchronisieren möchtest, trage unter **Nach Benutzern suchen in (OU)** den DN/CN einer OU bzw. eines Containers ein.

[![ldap_personen-suchen](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/1-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/1-ldap-bg.png)

## Konfiguration der Filter

* * *

### Import von allen Benutzern

Mit diesem Filter synchronisierst du ausschließlich Benutzer -- Gruppen werden dabei nicht erstellt:

[![ldap_personen-importb](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/2-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/2-ldap-bg.png)

```ini
(objectClass=user)
```

* * *

### Import von Benutzern mit bestimmten Attributen

Du kannst gezielt auf ein Attribut filtern. Im folgenden Beispiel wird nur der Benutzer synchronisiert, dessen `sAMAccountName` den Wert `MichaelO` hat:

[![ldap_personen-importba](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/3-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/3-ldap-bg.png)

```ini
(&(objectClass=user)(sAMAccountName=MichaelO))
```

* * *

### Import von allen Benutzern und allen Gruppen

Dieser Filter erstellt sowohl Benutzer als auch Gruppen und weist die Benutzer den jeweiligen Gruppen zu:

[![ldap_personen-importbg](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/4-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/4-ldap-bg.png)

```ini
(|(objectClass=user)(objectClass=group))
```

* * *

### Import von Benutzern die Mitglied der Gruppe idoit-read sind

Mit diesem Filter synchronisierst du nur Benutzer, die Mitglied der Gruppe `idoit-read` sind:

[![ldap_personen-importbmg](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/5-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/5-ldap-bg.png)

```ini
(&(objectClass=user)(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test))
```

* * *

### Import von Benutzern die Mitglied der Gruppe idoit-read und idoit-write sind

Dieser Filter synchronisiert nur Benutzer, die gleichzeitig Mitglied der Gruppen `idoit-read` und `idoit-write` sind:

[![ldap_personen-importbmgrw](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/6-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/6-ldap-bg.png)

```ini
(&(objectClass=user)(&(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test)(memberOf=CN=idoit-write,CN=Users,DC=synetics,DC=test)))
```

* * *

### Import von Benutzern und Gruppen die unterhalb einer Nested Group sind

Angenommen, du hast eine Gruppe `idoit`, in der die Gruppen `idoit-read` und `idoit-write` Mitglied sind. Mit diesem Filter legst du die untergeordneten Gruppen und deren Benutzer automatisch an.

Die übergeordnete Gruppe `idoit` selbst wird dabei nicht erstellt. Beachte, dass Gruppen in i-doit keine anderen Gruppen als Mitglied haben können.

[![ldap_personen-importbgng](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/7-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/7-ldap-bg.png)

```ini
(memberOf:1.2.840.113556.1.4.1941:=CN=idoit,CN=Users,DC=synetics,DC=test)
```

* * *

### So filtere ich Benutzer mit mehr als einer objectClass

Wenn sich die Benutzer dadurch unterscheiden, dass sie zwei `objectClass`-Attribute besitzen (z.B. `person` und `user`), baust du den Filter folgendermassen auf:

[![ldap_personen-filter](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/8-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/8-ldap-bg.png)

```ini
(&(objectClass=person)(objectClass=user))
```

* * *

## Welche weiteren Attribute über die ldap.ini importiert werden können

Stelle sicher, dass du mit der [ldap.ini-Konfiguration](../../automatisierung-und-integration/cli/configuration-files.md) vertraut bist und die [Attributerweiterungen](../../administration/verwaltung/import-und-schnittstellen/ldap/attributerweiterung.md) bereits konfiguriert hast. Die folgenden Einstellungen nutzen den Abschnitt `[additional]` der .ini-Datei.

### Die Konfiguration der Attributerweiterungen

[![ldap_personen-config](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/9-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/9-ldap-bg.png)

Die Konfiguration als Tabelle:

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

In der `ldap.ini` kannst du feste Zuweisungen von Benutzern zu Räumen eintragen. Die Benutzer werden dann dem jeweiligen Raum als Kontakt zugewiesen. Die Räume müssen vorher in i-doit existieren.

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

* * *

### Die Anrede setzen lassen

Um die Anrede beim Import automatisch zu setzen, konfiguriere die Option `attributes[salutation]=` in der .ini-Datei. Im folgenden Beispiel wird das AD-Attribut `displayNamePrintable` verwendet. Du kannst auch andere Attribute nutzen, solange diese im AD vorhanden sind.

Der Wert des Attributs `displayNamePrintable` könnte z.B. "Herr","Mr", "Mr." oder "Frau", "Mrs.", "Mrs", "Ms.", "Ms", "Miss" sein. Diese Werte können in der [Verwaltung](../../administration/verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md#ldap) unter [Mandanten-Name] Verwaltung > Einstellungen für [Mandanten-Name] > LDAP Konfiguratiert werden.

``` ini
attributes[salutation]=displayNamePrintable
```

Diese Einstellung wurde im Beispiel der kompletten .ini Datei am Ende des Artikels mit aufgenommen.

* * *

### So importiere ich Attribute aus dem LDAP

Wenn du die [Attributerweiterungen](../../administration/verwaltung/import-und-schnittstellen/ldap/attributerweiterung.md) bereits konfiguriert hast, musst du als Nächstes die Konfigurationsdatei des LDAP-Sync (`ldap.ini`) anpassen.

Die verfügbaren Attribute findest du in deiner AD-Konfiguration. Eine Übersicht, welche Attribute zu welchem Feld gehören, findest du z.B. bei [SelfADSI](http://www.selfadsi.de/user-attributes.htm).

Das folgende Beispiel zeigt ein typisches Attribut-Mapping:

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

In diesem Beispiel ist das Stammdaten-Attribut `department` mit dem gleichnamigen LDAP-Attribut gemappt. Zusätzlich wird die Attributerweiterung verwendet. Der Aufbau für z.B.

```ini
attributes[custom_1]=objectSid
```

funktioniert so:

`attributes` weist den Handler an, das i-doit-Attribut `[custom_1]` mit dem LDAP-Attribut `objectSid` zu synchronisieren. Nach der Synchronisation findest du folgende Stammdaten vor:

[![ldap_personen-sync](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/10-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/10-ldap-bg.png)

* * *

### Weitere Optionen

#### autoReactivateUsers

Diese Einstellung setzt vor der Synchronisierung automatisch alle Benutzer auf den Status "normal". Das ist hilfreich, falls Benutzer versehentlich archiviert oder gelöscht wurden.

!!! info
    Wir sollten uns bewusst sein, dass es mit NDS oder OpenLDAP derzeit nicht möglich ist, gelöschte Benutzer zu identifizieren, um sie später zu archivieren. Benutzer sind dann immer aktiviert!

```ini
autoReactivateUsers=false
```

* * *

#### ignoreUsersWithAttributes

Mit dieser Option verhinderst du die Synchronisation unerwünschter Verzeichnisobjekte. Ein Benutzer wird nicht synchronisiert, wenn `ignoreFunction` für ALLE ausgewählten Attribute fehlschlaegt.

Standardmäßig steht `ignoreUsersWithAttributes=[]`, sodass nichts ignoriert wird.

Im folgenden Beispiel werden nur Benutzer importiert, bei denen die Attribute `samaccountname`, `sn`, `givenname` und `mail` nicht leer sind:

```ini
ignoreUsersWithAttributes[] = "samaccountname"
ignoreUsersWithAttributes[] = "sn"
ignoreUsersWithAttributes[] = "givenname"
ignoreUsersWithAttributes[] = "mail"
```

* * *

#### ignoreFunction

Die Prüffunktion zum Ignorieren von Benutzern (siehe `ignoreUsersWithAttributes`). Dies kann ein beliebiger Funktionsname sein, der über `call_user_func` oder die folgenden definierten Funktionen aufrufbar ist:

```ini
empty
!empty
isset
!isset
```

Beispiel: `empty` würde als empty($value) ausgeführt werden

So prüfst du auf leere Attribute:

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

Hier findest du eine vollständige, anpassbare .ini-Datei. Der erste Teil basiert auf der [Konfigurationsdatei für Console Commands](../../automatisierung-und-integration/cli/configuration-files.md).

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
attributes[salutation]=displayNamePrintable

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
sudo -u www-data php console.php ldap-sync -c /var/www/html/src/handler/config/ldap-sync.ini
```

[ldap.ini :material-file-download:](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/example-ldap.ini){ .md-button .md-button--primary }
