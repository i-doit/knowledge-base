---
title: Erweiterte ldap-sync Konfiguration
description: Referenz zu den ldap-sync Filtern und zu jedem Parameter der ldap.ini
icon: octicons/person-add-24
lang: de
---

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Dieser Artikel zeigt dir, wie du Benutzer und Gruppen aus dem Active Directory gezielt in i-doit importierst.
Der hier beschriebene Import erfolgt über den [console.php](../../automatisierung-und-integration/cli/index.md)-Befehl `ldap-sync`.
Unabhängig davon wird ein Benutzer, der sich über LDAP anmeldet, in diesem Moment in i-doit angelegt, mit den Attributen aus dem LDAP-Mapping des Verzeichnisses.
Am Ende des Artikels findest du ein komplettes Beispiel einer erweiterten Konfiguration.

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

### Import von Benutzern, bei denen ein Attribut gefüllt ist

LDAP kennt keinen leeren Wert.
Ein Attribut ohne Inhalt existiert am Objekt schlicht nicht, du prüfst es deshalb mit dem Present-Filter `=*`.
Im folgenden Beispiel werden nur Benutzer synchronisiert, bei denen `company` einen Wert hat:

```ini
(&(objectClass=user)(company=*))
```

Die Negation liefert genau das Gegenteil, also nur Benutzer ohne Firma:

```ini
(&(objectClass=user)(!(company=*)))
```

* * *

### So schließt du eine einzelne OU aus

Eine OU lässt sich nicht über ihren Pfad ausschließen.
Active Directory unterstützt keine Wildcards auf Attributen mit DN-Syntax, ein Filter wie `(!(distinguishedName=*OU=Extern*))` liefert deshalb nie ein Ergebnis.
Nutze stattdessen einen der folgenden Wege.

Trage unter **Nach Benutzern suchen in (OU)** die OU ein, die du synchronisieren möchtest, und schalte **Rekursive Suche** aus, damit untergeordnete OUs nicht gelesen werden.

Oder schließe die Objekte über die Gruppenmitgliedschaft aus:

```ini
(&(objectClass=user)(!(memberOf=CN=no-sync,CN=Users,DC=synetics,DC=test)))
```

Oder über ein Attribut, das nur an diesen Objekten gesetzt ist:

```ini
(&(objectClass=user)(!(department=Extern)))
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

In der `ldap.ini` kannst du feste Zuweisungen von Benutzern zu Räumen eintragen.
Die Benutzer werden dann dem jeweiligen Raum als Kontakt zugewiesen.
Existiert noch kein Raum mit diesem Titel, legt i-doit ihn an.

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

Diese Einstellung setzt jeden bei der Synchronisation gefundenen Benutzer wieder auf den Status "normal".
Das ist hilfreich, falls Benutzer versehentlich archiviert wurden.

!!! info
    Für Active Directory passiert das ohnehin, die Option ist deshalb nur für NDS und OpenLDAP relevant.
    Grund ist, dass diese Verzeichnisse kein Kennzeichen für ein deaktiviertes Konto liefern, i-doit dort also nicht erkennen kann, ob ein Benutzer absichtlich deaktiviert wurde.
    Benutzer, die im Verzeichnis nicht mehr vorhanden sind, werden dagegen unabhängig vom Verzeichnistyp erkannt und über `deletedUsersBehaviour` behandelt.

```ini
autoReactivateUsers=false
```

* * *

#### ignoreUsersWithAttributes

Mit dieser Option verhinderst du die Synchronisation unerwünschter Verzeichnisobjekte.
Die Prüfung läuft nach der LDAP-Suche, auf den Objekten, die der Filter geliefert hat.

`ignoreFunction` wird gegen jedes hier gelistete Attribut ausgeführt.
Der Benutzer wird nur übersprungen, wenn die Funktion auf **alle** zutrifft.
Sobald sie auf ein Attribut nicht zutrifft, wird der Benutzer synchronisiert.

Standardmäßig steht `ignoreUsersWithAttributes=[]`, sodass nichts ignoriert wird.

Im folgenden Beispiel wird ein Benutzer zusammen mit `ignoreFunction=empty` nur dann übersprungen, wenn `samaccountname`, `sn`, `givenname` und `mail` gleichzeitig leer sind.
Ein Benutzer mit leerem `sn`, aber gefülltem `mail` wird weiterhin synchronisiert:

```ini
ignoreUsersWithAttributes[] = "samaccountname"
ignoreUsersWithAttributes[] = "sn"
ignoreUsersWithAttributes[] = "givenname"
ignoreUsersWithAttributes[] = "mail"
```

Soll ein Benutzer schon dann herausfallen, wenn **eines** von mehreren Attributen leer ist, gehört das in den LDAP-Filter der Server-Konfiguration:

```ini
(&(objectClass=user)(sn=*)(mail=*))
```

Übersprungene Benutzer erscheinen in der Ausgabe als `Validation for <DN> failed: ignoreFunction prohibited syncing user.`, der Lauf geht mit dem nächsten Objekt weiter.

!!! info
    Hier übersprungene Benutzer gelten anschließend als verwaist, weil sie in i-doit keinen aktuellen DN mehr tragen.
    Beim nächsten Lauf greift für sie `deletedUsersBehaviour`.
    Bereits importierte Personen, die erst später unter die Ignore-Regel fallen, werden also standardmäßig archiviert.

* * *

#### ignoreFunction

Die Prüffunktion zum Ignorieren von Benutzern (siehe `ignoreUsersWithAttributes`).
Entweder eines der folgenden Sprachkonstrukte oder ein beliebiger Funktionsname, der über `call_user_func` aufrufbar ist:

```ini
empty
!empty
isset
!isset
```

`empty` wird als `empty($value)` ausgeführt.
Fehlt das Attribut am Verzeichnisobjekt, ist der geprüfte Wert `null`.

Benutzer ohne Firma nicht synchronisieren:

```ini
ignoreUsersWithAttributes[] = "company"
ignoreFunction = empty
```

Benutzer mit gefüllter Firma nicht synchronisieren, also nur Personen ohne Firmenzuordnung importieren:

```ini
ignoreUsersWithAttributes[] = "company"
ignoreFunction = !empty
```

Datensätze aussortieren, bei denen Firma und Abteilung gleichzeitig leer sind:

```ini
ignoreUsersWithAttributes[] = "company"
ignoreUsersWithAttributes[] = "department"
ignoreFunction = empty
```

Benutzer aussortieren, bei denen das Attribut gar nicht existiert, während ein vorhandenes, aber leeres Attribut durchgeht:

```ini
ignoreUsersWithAttributes[] = "employeeid"
ignoreFunction = !isset
```

!!! warning "Eigene Funktionen wirken umgekehrt"
    Bei einer über `call_user_func` aufgerufenen Funktion wird das Ergebnis negiert.
    Eine solche Funktion muss `true` zurückgeben, damit der Benutzer synchronisiert **wird**, während `true` bei den Sprachkonstrukten oben bedeutet, dass der Benutzer übersprungen wird.
    Aufgerufen wird sie als `funktion($wert, $alleAttribute)`.

#### Synchronisiere leere Attribute

Diese Option entscheidet, ob geleerte Attribute aus dem AD mit i-doit synchronisiert werden sollen oder nicht.

```ini
syncEmptyAttributes=true
```

* * *

#### defaultCompany

Firma, die gesetzt wird, wenn über `attributes[organization]` kein Wert kam.
Objekttitel oder Objekt-ID.
Existiert kein Objekt mit diesem Titel, legt i-doit ein neues Objekt vom Typ Organisation an.

Schreibe den Wert ohne Anführungszeichen oder in doppelten Anführungszeichen.
Einfache Anführungszeichen bleiben Teil des Werts und landen im Objekttitel.
Einzige Ausnahme ist `defaultCompany=''`, das vom Kommando in einen leeren Wert übersetzt wird.

```ini
defaultCompany="Musterfirma AG"
```

* * *

#### deletedUsersBehaviour

Was mit Personen passiert, die im Verzeichnis nicht mehr gefunden werden.

| Wert | Wirkung |
| --- | --- |
| `archive` | Das Objekt wird archiviert. Default, greift auch bei jedem unbekannten Wert. |
| `delete` | Das Objekt bekommt den Status gelöscht. |
| `disable_login` | Das Objekt bleibt normal, das Login wird deaktiviert. |

```ini
deletedUsersBehaviour=archive
```

* * *

#### disabledUsersBehaviour

Was mit Personen passiert, deren Konto im Verzeichnis deaktiviert ist.
Dieselben drei Werte wie oben, der Default ist ebenfalls `archive`.

Diese Option wird nur für Active Directory ausgewertet.
OpenLDAP und NDS haben kein vergleichbares Kennzeichen, deaktivierte Konten werden dort nicht erkannt.
Objekte, bei denen das Feld **Konstante** gefüllt ist, werden nie angefasst.

```ini
disabledUsersBehaviour=disable_login
```

* * *

### Parameter-Referenz

Die .ini-Datei wird mit `-c` übergeben, die Langform ist `--config`.
Gelesen wird sie mit den Abschnitten `[commandArguments]`, `[commandOptions]` und `[additional]`.
`ldap-sync` hat keine Argumente, `[commandArguments]` bleibt also leer.

Werte werden wörtlich gelesen.
Umschließende doppelte Anführungszeichen werden entfernt, einfache nicht, die bleiben Teil des Werts.
`true` und `false` werden zu Booleans, `[]` wird zu einem leeren Array, und das wörtliche `''` wird zu einem leeren String.
Kommentare beginnen mit `;`.

Um zu prüfen, was das Kommando tatsächlich eingelesen hat, rufe es mit `--dumpConfig` auf.
Damit wird die geparste Konfiguration ausgegeben und das Kommando beendet sich, ohne zu synchronisieren.

#### Optionen in [commandOptions]

| Option | Kurzform | Werte | Bedeutung |
| --- | --- | --- | --- |
| `user` | `-u` | Login | i-doit-Benutzer für die Anmeldung. |
| `password` | `-p` | Passwort | Passwort dieses Benutzers. |
| `tenantId` | `-i` | Zahl, Default 1 | Mandanten-ID. |
| `ldapServerId` | `-l` | Zahl | Nur diese eine LDAP-Server-Konfiguration synchronisieren. Ohne die Option laufen alle aktiven Konfigurationen durch. |
| `dumpConfig` | | Schalter | Geparste Konfiguration ausgeben und beenden. |
| `connectionRankingActive` | | 0 oder 1 | Ändert sich der Status eines Personenobjekts, werden die Kategorieeinträge, die dieses Objekt referenzieren, auf denselben Status gesetzt. Der Default kommt aus der Mandanteneinstellung `ldap.connection-ranking-active`. |
| `dropExistingRelations` | | 0 oder 1 | 1 löst bei einer LDAP-Gruppe alle Mitglieder, die nicht aus dem aktuellen Lauf stammen. Die Option ohne Wert zu setzen bedeutet ebenfalls 1. |
| `archiveDeletedGroups` | | `archive` oder `delete` | Was mit Gruppen in i-doit passiert, die es im Verzeichnis nicht mehr gibt. Die Option ohne Wert bedeutet `archive`. Ohne die Option passiert nichts. |
| `useDefaultTemplates` | | Schalter | Objekte, die der Lauf anlegt, also Personen, Personengruppen, Organisationen und Räume, werden aus der Standard-Objektvorlage ihres Objekttyps erzeugt, sofern eine definiert ist. |

!!! warning
    `connectionRankingActive`, `dropExistingRelations` und `archiveDeletedGroups` gehören nach `[commandOptions]`.
    In `[additional]` haben sie keine Wirkung, weil die Kommando-Optionen sie überschreiben.

#### Optionen in [additional]

| Parameter | Werte | Bedeutung |
| --- | --- | --- |
| `attributes[<Feld>]` | LDAP-Attribut | Bildet ein i-doit-Personenfeld auf ein Verzeichnisattribut ab. |
| `defaultCompany` | Objekttitel oder ID | Firma für Benutzer ohne Firma aus dem Verzeichnis. |
| `syncEmptyAttributes` | true / false | Ob geleerte Attribute nach i-doit geschrieben werden. |
| `deletedUsersBehaviour` | archive / delete / disable_login | Personen, die es im Verzeichnis nicht mehr gibt. |
| `disabledUsersBehaviour` | archive / delete / disable_login | Deaktivierte Konten, nur Active Directory. |
| `autoReactivateUsers` | true / false | Setzt gefundene Personen wieder auf den Status normal. |
| `import_rooms` | true / false | Legt Räume aus `attributes[office]` an und hängt die Person als Kontakt daran. |
| `rooms["<Raum>"]` | JSON-Array | Statische Zuordnung von Benutzern zu Räumen. Fehlende Räume werden angelegt. |
| `ignoreUsersWithAttributes[]` | Attributname | Attribute, die `ignoreFunction` prüft. |
| `ignoreFunction` | empty / !empty / isset / !isset / Funktionsname | Prüffunktion zur Option darüber. |

Für `attributes[...]` sind diese Feldnamen gültig: `academic_degree`, `city`, `custom_1` bis `custom_8`, `department`, `description`, `fax`, `first_name`, `function`, `last_name`, `mail`, `organization`, `pager`, `personnel_number`, `phone_company`, `phone_home`, `phone_mobile`, `salutation`, `service_designation`, `street`, `title`, `zip_code`.

Benutzername und die Gruppe für die Anmeldung werden nicht hier konfiguriert, sie kommen aus dem LDAP-Mapping des Verzeichnisses.
Vorname, Nachname und E-Mail-Adresse stammen ebenfalls aus diesem Mapping, ein Eintrag in `attributes[...]` überschreibt sie aber.

!!! info
    Der LDAP-Filter und der Basis-DN stehen ebenfalls nicht in dieser Datei.
    `ldap-sync` liest beide aus der Server-Konfiguration unter **Verwaltung > Import und Schnittstellen > LDAP > Server**.

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

;What to do with deleted users - archive, delete, disable_login
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
sudo -u www-data php console.php ldap-sync -c /path/to/config/ldap-sync.ini
```

[ldap.ini :material-file-download:](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/example-ldap.ini){ .md-button .md-button--primary }
