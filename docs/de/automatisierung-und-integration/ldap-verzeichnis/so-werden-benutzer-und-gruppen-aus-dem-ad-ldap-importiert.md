**Inhaltsverzeichnis**

*   1[Konfiguration der Filter](#KonfigurationderFilter)
    *   1.1[Import von allen Benutzern](#ImportvonallenBenutzern)
    *   1.2[Import von Benutzern mit bestimmten Attributen](#ImportvonBenutzernmitbestimmtenAttributen)
    *   1.3[Import von allen Benutzern und allen Gruppen](#ImportvonallenBenutzernundallenGruppen)
    *   1.4[Import von Benutzern die Mitglied der Gruppe idoit-read sind](#ImportvonBenutzerndieMitgliedderGruppeidoit-readsind)
    *   1.5[Import von Benutzern die Mitglied der Gruppe idoit-read und idoit-write sind](#ImportvonBenutzerndieMitgliedderGruppeidoit-readundidoit-writesind)
    *   1.6[Import von Benutzern und Gruppen die unterhalb einer Nested Group sind](#ImportvonBenutzernundGruppendieunterhalbeinerNestedGroupsind)
    *   1.7[So filtere ich Benutzer mit mehr als einer objectClass](#SofiltereichBenutzermitmehralseinerobjectClass)
*   2[Welche weiteren Attribute über die ldap.ini importiert werden können](#WelcheweiterenAttributeüberdieldap.iniimportiertwerdenkönnen)
    *   2.1[Die Konfiguration der Kategorieerweiterung](#DieKonfigurationderKategorieerweiterung)
    *   2.2[Importiere Zuweisungen zu Räumen aus dem AD/LDAP](#ImportiereZuweisungenzuRäumenausdemAD/LDAP)
    *   2.3[So importiere ich Attribute aus dem LDAP](#SoimportiereichAttributeausdemLDAP)
    *   2.4[Weitere Optionen](#WeitereOptionen)
        *   2.4.1[autoReactivateUsers](#autoReactivateUsers)
        *   2.4.2[ignoreUsersWithAttributes](#ignoreUsersWithAttributes)
        *   2.4.3[ignoreFunction](#ignoreFunction)
        *   2.4.4[Synchronisiere leere Attribute](#SynchronisiereleereAttribute)
    *   2.5[Die komplette ldap.ini](#Diekompletteldap.ini)

Der Import von Benutzern und Gruppen aus dem Active Directory in i-doit findet immer über den [console.php](https://kb.i-doit.com/display/de/Console) Befehl statt. Dazu benutzen wir das Kommando [ldap-sync](https://kb.i-doit.com/display/de/Optionen+und+Parameter+der+Console#OptionenundParameterderConsole-ldap-sync).  
Am Ende des Artikels ist ein komplettes Beispiel der erstellten erweiterten Konfiguration zu finden.

Der Artikel zur Konfiguration vom [LDAP-Verzeichnis/Active Directory](https://kb.i-doit.com/pages/viewpage.action?pageId=9666615) sollte vorher jedem bekannt sein.  
Wir werden hier verschiedene LDAP Filter und eine komplette [ldap.ini Konfiguration](https://kb.i-doit.com/pages/viewpage.action?pageId=82575816#Beispielf%C3%BCrdenCommandldap-sync) durchgehen.  
Ziel ist es alle Benutzer und Gruppen aus dem AD/LDAP mit i-doit zu synchronisieren, sowie deren Mitgliedschaften.

Ich setzte Grundkenntnisse im Bezug auf AD/LDAP voraus.  
In diesen Beispielen wird für Personen die `objectClass = user` verwendet.  
Für Gruppen wird die `objectClass = group` verwendet.  
Wenn man nicht alle Benutzer oder Gruppen der Domnäne synchronisieren will muss unter “Nach Benutzern suchen in (OU)\*” der DN/CN einer OU bzw. eines Containers eingetragen werden.

![](/download/attachments/97288195/server-config.png?version=1&modificationDate=1632922234237&api=v2&effects=drop-shadow)

Konfiguration der Filter
------------------------

* * *

### Import von allen Benutzern

Hier werden nur Benutzer synchronisiert, das bedeutet auch, dass keine Gruppen erstellt werden. Damit nur Benutzer synchronisiert werden muss der Filter so aussehen:

![Import von Benutzern](https://kb.i-doit.com/download/attachments/97288195/only-user.png?)

[?](#)

`(objectClass=user)`

* * *

### Import von Benutzern mit bestimmten Attributen

Wir möchten hier auf ein Attribut filtern und nur diesen Benutzer synchronisieren.  
Nur der Benutzer der im Attribut `sAMAccountName` den Wert `MichaelO` hat soll synchronisiert werden.

![Import von Benutzern](https://kb.i-doit.com/download/attachments/97288195/user-with-sam.png)

[?](#)

`(&(objectClass=user)(sAMAccountName=MichaelO))`

* * *

### Import von allen Benutzern und allen Gruppen

Hier werden Benutzer und Gruppen erstellt außerdem werden die Benutzer den jeweiligen Gruppen zugewiesen.  
Damit Benutzer und Gruppen synchronisiert werden muss der Filter so aussehen:

![Import von Benutzern und Gruppen](https://kb.i-doit.com/download/attachments/97288195/user-and-groups.png)

[?](#)

`(|(objectClass=user)(objectClass=group))`

* * *

### Import von Benutzern die Mitglied der Gruppe idoit-read sind

Damit nur Benutzer die Mitglied der Gruppe idoit-read sind synchronisiert werden muss der Filter so aussehen:

![Import von Benutzer die Mitglied der Gruppe idoit sind](https://kb.i-doit.com/download/attachments/97288195/user-in-group-idoit-read.png)

[?](#)

`(&(objectClass=user)(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test))`

* * *

### Import von Benutzern die Mitglied der Gruppe idoit-read und idoit-write sind

Damit nur Benutzer die Mitglied der Gruppe idoit-read sind synchronisiert werden muss der Filter so aussehen:

![Import von Benutzer die Mitglied der Gruppe idoit-read and idoit-write sind](https://kb.i-doit.com/download/attachments/97288195/user-in-idoit-read-and-write.png)

[?](#)

`(&(objectClass=user)(&(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test)(memberOf=CN=idoit-write,CN=Users,DC=synetics,DC=test)))`

* * *

### Import von Benutzern und Gruppen die unterhalb einer Nested Group sind

Ich habe eine Gruppe `idoit` in der die i-doit Gruppen `idoit-read` und `idoit-write` Mitglied sind. Diese beiden Gruppen sollen synchronisiert werden. Mit diesem Filter kann ich direkt die Gruppen und die Benutzer anlegen lassen.  
Die Gruppe `idoit` wird dadurch nicht erstellt, es werden nur die Gruppen unterhalb der Gruppe erstellt. Außerdem werden die Gruppen nicht miteinander verknüpft, da Gruppen keinen Gruppen als Mitglied haben können.

![Import von Benutzer die Mitglied unterhalb der Gruppe idoit sind](https://kb.i-doit.com/download/attachments/97288195/memberof-nested.png)

[?](#)

`(memberOf:1.2.840.113556.1.4.1941:=CN=idoit,CN=Users,DC=synetics,DC=test)`

* * *

### So filtere ich Benutzer mit mehr als einer objectClass

Wenn sich die Benutzer beispielsweise dadurch unterscheiden, dass sie zwei objectClass-Attribute haben (z.B. Person und Benutzer), würde ich so den Filter aufbauen:

![Personen und User](https://kb.i-doit.com/download/attachments/97288195/person-and-user.png)

[?](#)

`(&(objectClass=person)(objectClass=user))`

* * *

Welche weiteren Attribute über die ldap.ini importiert werden können
--------------------------------------------------------------------

*   Der Beitrag [ldap.ini Konfiguration](https://kb.i-doit.com/pages/viewpage.action?pageId=82575816#Beispielf%C3%BCrdenCommandldap-sync) sollte bekannt sein.
*   Es kann eine .ini Datei für den Import erstellt werden, mit dieser können weitere Attribute importiert werden.
*   Die [Kategorieerweiterung](https://kb.i-doit.com/display/de/CMDB+Einstellungen#CMDBEinstellungen-Kategorieerweiterung) sollte bereits Konfiguriert sein.
*   Wir verwenden den .ini Abschnitt “`additional`”

### Die Konfiguration der Kategorieerweiterung

![ldap.ini Konfiguration](https://kb.i-doit.com/download/attachments/97288195/kategorieerweiterung-konfig.png)

Hier noch mal als Tabelle

| Feldname | Attribut | Mapping mit |
| --- | --- | --- |
| Feldname | Attribut | Mapping mit |
| --- | --- | --- |
| Feldname 1 | objectGUID | Key: custom\_1 |
| Feldname 2 | objectSid | Key: custom\_2 |
| Feldname 3 | initials | Key: custom\_3 |
| Feldname 4 | telephonenumber | Key: custom\_4 |
| Feldname 5 | title | Key: custom\_5 |
| Feldname 6 | pager | Key: custom\_6 |
| Feldname 7 | manager | Key: custom\_7 |
| Feldname 8 | info | Key: custom\_8 |

* * *

### Importiere Zuweisungen zu Räumen aus dem AD/LDAP

In der ldap.ini können feste Zuweisungen von Benutzern zu Räumen eingetragen werden.  
Die Benutzer werden dann dem zugewiesenem Raum als Kontakt zugewiesen.  
(Die Räume müssen vorher in i-doit existieren!)

[?](#)

`rooms["Raum A"]=["MichaelO","migel"]`

* * *

### So importiere ich Attribute aus dem LDAP

Ich möchte weitere LDAP Attribute zu Benutzern importieren und habe schon die [Kategorieerweiterung](https://kb.i-doit.com/display/de/CMDB+Einstellungen#CMDBEinstellungen-Kategorieerweiterung) Konfiguriert.  
Nun muss ich noch die Konfigurationsdatei des LDAP-Sync konfigurieren (ldap.ini).

Wenn man vorher schon mal einen LDAP-Sync für Benutzer durchgeführt hat, findet man im ldap Log einen Eintrag wie diesen

[?](#)

`Available attributes for this user:`

`objectclass,`

`cn,`

`sn,`

`c,`

`l,`

`st,`

`title,`

`description,`

`postalcode,`

`postofficebox,`

`physicaldeliveryofficename,`

`telephonenumber,`

`facsimiletelephonenumber,`

`givenname,`

`initials,`

`distinguishedname,`

`instancetype,`

`whencreated,`

`whenchanged,`

`displayname,`

`usncreated,`

`info,`

`memberof,`

`usnchanged,`

`co,`

`department,`

`company,`

`streetaddress,`

`directreports,`

`wwwhomepage,`

`name,`

`objectguid,`

`useraccountcontrol,`

`badpwdcount,`

`codepage,`

`countrycode,`

`badpasswordtime,`

`lastlogoff,`

`lastlogon,`

`pwdlastset,`

`primarygroupid,`

`userparameters,`

`objectsid,`

`admincount,`

`accountexpires,`

`logoncount,`

`samaccountname,`

`samaccounttype,`

`userprincipalname,`

`lockouttime,`

`ipphone,`

`objectcategory,`

`dscorepropagationdata,`

`lastlogontimestamp,`

`mail,`

`homephone,`

`mobile,`

`pager,`

`dn`

Hieraus kann ich mir die Attribute suchen die ich zusätzlich Synchronisieren möchte.  
Welche Attribute zu welchem Feld gehören kann man über Google finden oder z.B. hier [SelfADSI externer Link](http://www.selfadsi.de/user-attributes.htm).

Ich nehme mir als Beispiel folgende Attribute heraus und füge Sie in die ldap.ini ein:

[?](#)

`;Standardfelder die bereits in den Stammdaten von Personen vorhanden sind`

`attributes[department]=department`

`attributes[phone_company]=telephonenumber`

`attributes[phone_home]=homephone`

`attributes[phone_mobile]=mobile`

`attributes[fax]=facsimileTelephoneNumber`

`attributes[description]=info`

`attributes[personnel_number]=initials`

`attributes[organization]=company`

`attributes[location]=physicalDeliveryOfficeName`

`attributes[street]=streetAddress`

`attributes[city]=l`

`attributes[zip_code]=postalCode`

`attributes[function]=title`

`attributes[service_designation]=title`

`attributes[pager]=pager`

`;Kategorieerweiterung nur für Personen`

`attributes[custom_1]=objectSid`

`attributes[custom_2]=sn`

`attributes[custom_3]=homePhone`

`attributes[custom_4]=mobile`

`attributes[custom_5]=info`

`attributes[custom_6]=manager`

`attributes[custom_7]=company`

`attributes[custom_8]=objectGUID`

Wie man hier sieht habe ich z.B. das Stammdaten Attribut `department` mit dem LDAP Attribute `department` gemapped.  
Zusätzlich habe ich die Kategorieerweiterung verwendet. Der Aufbau für z.B.  
`attributes[custom_1]=objectSid`  
wäre wie folgt:

`attributes` sagt dem handler er soll das i-doit Attribut `[custom_1]` mit dem LDAP Attribut `objectSid` synchronisieren.

Nachdem die Benutzer synchronisiert wurden finde ich folgende Stammdaten vor:

![Stammdaten nach dem Sync](https://kb.i-doit.com/download/attachments/97288195/masterdata-after-sync.png)

* * *

### Weitere Optionen

#### autoReactivateUsers

Um einen sauberen Start zu haben, setzt diese Einstellung automatisch alle Benutzer vor der Synchronisierung auf den Status normal.

Dies ist hilfreich, falls Benutzer versehentlich vorher archiviert oder gelöscht wurden.  
Beachten Sie, dass dies nur mit NDS & OpenLDAP funktioniert, da es in Active Directory immer aktiviert ist!

Wir sollten uns bewusst sein, dass es mit NDS oder OpenLDAP derzeit nicht möglich ist, gelöschte Benutzer zu identifizieren, um sie später zu archivieren. Benutzer sind dann immer aktiviert!

[?](#)

`autoReactivateUsers=false`

* * *

#### ignoreUsersWithAttributes

Deaktiviere die Synchronisierung für Benutzer mit Attributen, die gegen `ignoreFunction` geprüft wurden.

Diese Funktion hilft, eine Synchronisation unerwünschter Verzeichnisobjekte zu verhindern.  
Der Benutzer wird nicht synchronisiert, wenn `ignoreFunction` für ALLE ausgewählten Attribute fehlschlägt.

Standardmäßig steht hier `ignoreUsersWithAttributes=[]` somit wird nichts ignoriert.

Wir möchten nur Benutzer importieren bei denen die Attribute `samaccountname`, `sn`, `givenname` und `mail` nicht leer sind.  
Somit müsste die Konfiguration für `ignoreUsersWithAttributes` so aussehen:

[?](#)

`ignoreUsersWithAttributes[] = "samaccountname"`

`ignoreUsersWithAttributes[] = "sn"`

`ignoreUsersWithAttributes[] = "givenname"`

`ignoreUsersWithAttributes[] = "mail"`

* * *

#### ignoreFunction

Ist die Prüffunktion zum Ignorieren von Benutzern (siehe ‘ignoreUsersWithAttributes’)

Dies kann ein beliebiger Funktionsname sein, der über call\_user\_func oder die definierten Funktionen aufrufbar ist.

[?](#)

`definierte functions:`

`empty`

`!empty`

`isset`

`!isset`

`Beispiel: empty würde als empty($value) ausgeführt werden`

Wir prüfen auf leere Attribute mit

[?](#)

`ignoreFunction=empty`

#### Synchronisiere leere Attribute

Diese Option entscheidet, ob geleerte Attribute aus dem AD mit i-doit synchronisiert werden sollen oder nicht.

[?](#)

`syncEmptyAttributes=true`

* * *

### Die komplette ldap.ini

Nun fügen wir alle Teile zusammen und erstellen unsere ldap.ini  
Der erste Teil der ldap.ini wird von [Verwendung von Konfigurationsdateien für Console Commands](https://kb.i-doit.com/pages/viewpage.action?pageId=82575816#Beispielf%C3%BCrdenCommandldap-sync) bezogen.

[?](#)

`[commandArguments]`

`[commandOptions]`

`user=admin`

`password=pass`

`tenantId=1`

`[additional]`

`;Import rooms from ldap`

`import_rooms=true`

`;Automatically assign this company to every ldap user`

`defaultCompany='i-doit'`

`;What to do with deleted users - archive, delete, purge`

`deletedUsersBehaviour=archive`

`;What to do with disabled users - archive, delete, disable_login`

`disabledUsersBehaviour=disable_login`

`;Attach users to Rooms statically`

`rooms["Raum A"]=["MichaelO","migel"]`

`;LDAP Attributes are individual. This default configuration is prepared for Active Directory:`

`attributes[department]=department`

`attributes[phone_company]=telephonenumber`

`attributes[phone_home]=homephone`

`attributes[phone_mobile]=mobile`

`attributes[fax]=facsimileTelephoneNumber`

`attributes[description]=info`

`attributes[personnel_number]=initials`

`attributes[organization]=company`

`attributes[location]=physicalDeliveryOfficeName`

`attributes[street]=streetAddress`

`attributes[city]=l`

`attributes[zip_code]=postalCode`

`attributes[function]=title`

`attributes[service_designation]=title`

`attributes[pager]=pager`

`;Category extension for persons`

`attributes[custom_1]=objectSid`

`attributes[custom_2]=sn`

`attributes[custom_3]=homePhone`

`attributes[custom_4]=mobile`

`attributes[custom_5]=info`

`attributes[custom_6]=manager`

`attributes[custom_7]=company`

`attributes[custom_8]=objectGUID`

`;Automatically sets all users to status normal NDS and OpenLDAP`

`autoReactivateUsers=false`

`;Disable sync for users with Attributes checked against 'ignoreFunction'`

`ignoreUsersWithAttributes=[]`

`;The check function used for ignoring users (see 'ignoreUsersWithAttributes') empty - !empty - isset - !isset`

`ignoreFunction=empty`

`syncEmptyAttributes=true`

Auf der Console würde der Command so aussehen:

[?](#)

`sudo -u www-data php console.php ldap-sync -c /var/www/html/i-doit/src/handler/config/ldap-sync.ini`

[![](/s/-rg4ht/8803/xi7l17/5.0.0/_/download/resources/com.atlassian.confluence.plugins.confluence-view-file-macro:view-file-macro-resources/images/placeholder-small-file.png)example-ldap.ini](/download/attachments/97288195/example-ldap.ini?version=1&modificationDate=1649746920017&api=v2)