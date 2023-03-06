# So werden Benutzer und Gruppen aus dem AD/LDAP importiert (erweiterte Konfiguration)

Der Import von Benutzern und Gruppen aus dem Active Directory in i-doit findet immer über den [console.php](../cli/console/index.md) Befehl statt. Dazu benutzen wir das Kommando [ldap-sync](../cli/console/optionen-und-parameter-der-console.md#ldap-sync).  
Am Ende des Artikels ist ein komplettes Beispiel der erstellten erweiterten Konfiguration zu finden.

Der Artikel zur Konfiguration vom [LDAP-Verzeichnis/Active Directory](../ldap-verzeichnis/index.md) sollte vorher jedem bekannt sein.  
Wir werden hier verschiedene LDAP Filter und eine komplette [ldap.ini Konfiguration](../cli/console/verwendung-von-konfigurationsdateien-fuer-console-commands.md#beispiel-für-den-command-ldap-sync) durchgehen.  
Ziel ist es alle Benutzer und Gruppen aus dem AD/LDAP mit i-doit zu synchronisieren, sowie deren Mitgliedschaften.

Ich setzte Grundkenntnisse im Bezug auf AD/LDAP voraus.  
In diesen Beispielen wird für Personen die objectClass = user verwendet.  
Für Gruppen wird die objectClass = group verwendet.  
Wenn man nicht alle Benutzer oder Gruppen der Domnäne synchronisieren will muss unter “Nach Benutzern suchen in (OU)\*” der DN/CN einer OU bzw. eines Containers eingetragen werden.

[![ldap_personen-suchen](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/1-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/1-ldap-bg.png)

Konfiguration der Filter
------------------------

* * *

### Import von allen Benutzern

Hier werden nur Benutzer synchronisiert, das bedeutet auch, dass keine Gruppen erstellt werden. Damit nur Benutzer synchronisiert werden muss der Filter so aussehen:

[![ldap_personen-importb](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/2-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/2-ldap-bg.png)

    (objectClass=user)

* * *

### Import von Benutzern mit bestimmten Attributen

Wir möchten hier auf ein Attribut filtern und nur diesen Benutzer synchronisieren.  
Nur der Benutzer der im Attribut sAMAccountName den Wert MichaelO hat soll synchronisiert werden.

[![ldap_personen-importba](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/3-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/3-ldap-bg.png)

    (&(objectClass=user)(sAMAccountName=MichaelO))

* * *

### Import von allen Benutzern und allen Gruppen

Hier werden Benutzer und Gruppen erstellt außerdem werden die Benutzer den jeweiligen Gruppen zugewiesen.  
Damit Benutzer und Gruppen synchronisiert werden muss der Filter so aussehen:

[![ldap_personen-importbg](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/4-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/4-ldap-bg.png)

    (|(objectClass=user)(objectClass=group))

* * *

### Import von Benutzern die Mitglied der Gruppe idoit-read sind

Damit nur Benutzer die Mitglied der Gruppe idoit-read sind synchronisiert werden muss der Filter so aussehen:

[![ldap_personen-importbmg](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/5-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/5-ldap-bg.png)

    (&(objectClass=user)(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test))

* * *

### Import von Benutzern die Mitglied der Gruppe idoit-read und idoit-write sind

Damit nur Benutzer die Mitglied der Gruppe idoit-read sind synchronisiert werden muss der Filter so aussehen:

[![ldap_personen-importbmgrw](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/6-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/6-ldap-bg.png)

    (&(objectClass=user)(&(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test)(memberOf=CN=idoit-write,CN=Users,DC=synetics,DC=test)))

* * *

### Import von Benutzern und Gruppen die unterhalb einer Nested Group sind

Ich habe eine Gruppe idoit in der die i-doit Gruppen idoit-read und idoit-write Mitglied sind. Diese beiden Gruppen sollen synchronisiert werden. Mit diesem Filter kann ich direkt die Gruppen und die Benutzer anlegen lassen.  
Die Gruppe idoit wird dadurch nicht erstellt, es werden nur die Gruppen unterhalb der Gruppe erstellt. Außerdem werden die Gruppen nicht miteinander verknüpft, da Gruppen keinen Gruppen als Mitglied haben können.

[![ldap_personen-importbgng](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/7-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/7-ldap-bg.png)

    (memberOf:1.2.840.113556.1.4.1941:=CN=idoit,CN=Users,DC=synetics,DC=test)

* * *

### So filtere ich Benutzer mit mehr als einer objectClass

Wenn sich die Benutzer beispielsweise dadurch unterscheiden, dass sie zwei objectClass-Attribute haben (z.B. Person und Benutzer), würde ich so den Filter aufbauen:

[![ldap_personen-filter](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/8-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/8-ldap-bg.png)

    (&(objectClass=person)(objectClass=user))

* * *

Welche weiteren Attribute über die ldap.ini importiert werden können
--------------------------------------------------------------------

*   Der Beitrag [ldap.ini Konfiguration](../cli/console/verwendung-von-konfigurationsdateien-fuer-console-commands.md#beispiel-für-den-command-ldap-sync) sollte bekannt sein.
*   Es kann eine .ini Datei für den Import erstellt werden, mit dieser können weitere Attribute importiert werden.
*   Die [Kategorieerweiterung](../../administration/verwaltung/cmdb-einstellungen.md#kategorieerweiterung) sollte bereits Konfiguriert sein.
*   Wir verwenden den .ini Abschnitt “additional”

### Die Konfiguration der Kategorieerweiterung

[![ldap_personen-config](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/9-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/9-ldap-bg.png)

Hier noch mal als Tabelle

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
!!! warning Zugriff auf .ini Dateien
    Wird die Konfigurationsdatei im i-doit Verzeichnis abgelegt muss die .htaccess angepasst werden.
    Es sollte dieser code hinzugefügt werden:
    ```shell
    ## Deny access to all ini files…
    <Files "*.ini">
        Require all denied
    </Files>
    ```
    rooms["Raum A"]=["MichaelO","migel"]

* * *

### So importiere ich Attribute aus dem LDAP

Ich möchte weitere LDAP Attribute zu Benutzern importieren und habe schon die [Kategorieerweiterung](../../administration/verwaltung/cmdb-einstellungen.md#kategorieerweiterung) Konfiguriert.  
Nun muss ich noch die Konfigurationsdatei des LDAP-Sync konfigurieren (ldap.ini).

Wenn man vorher schon mal einen LDAP-Sync für Benutzer durchgeführt hat, findet man im ldap Log einen Eintrag wie diesen

    Available attributes for this user:
    objectclass,
    cn,
    sn,
    c,
    l,
    st,
    title,
    description,
    postalcode,
    postofficebox,
    physicaldeliveryofficename,
    telephonenumber,
    facsimiletelephonenumber,
    givenname,
    initials,
    distinguishedname,
    instancetype,
    whencreated,
    whenchanged,
    displayname,
    usncreated,
    info,
    memberof,
    usnchanged,
    co,
    department,
    company,
    streetaddress,
    directreports,
    wwwhomepage,
    name,
    objectguid,
    useraccountcontrol,
    badpwdcount,
    codepage,
    countrycode,
    badpasswordtime,
    lastlogoff,
    lastlogon,
    pwdlastset,
    primarygroupid,
    userparameters,
    objectsid,
    admincount,
    accountexpires,
    logoncount,
    samaccountname,
    samaccounttype,
    userprincipalname,
    lockouttime,
    ipphone,
    objectcategory,
    dscorepropagationdata,
    lastlogontimestamp,
    mail,
    homephone,
    mobile,
    pager,
    dn

Hieraus kann ich mir die Attribute suchen die ich zusätzlich Synchronisieren möchte.  
Welche Attribute zu welchem Feld gehören kann man über Google finden oder z.B. hier [SelfADSI externer Link](http://www.selfadsi.de/user-attributes.htm).

Ich nehme mir als Beispiel folgende Attribute heraus und füge Sie in die ldap.ini ein:

    ;Standardfelder die bereits in den Stammdaten von Personen vorhanden sind
    attributes[department]=department
    attributes[phone_company]=telephonenumber
    attributes[phone_home]=homephone
    attributes[phone_mobile]=mobile
    attributes[fax]=facsimileTelephoneNumber
    attributes[description]=info
    attributes[personnel_number]=initials
    attributes[organization]=company
    attributes[location]=physicalDeliveryOfficeName
    attributes[street]=streetAddress
    attributes[city]=l
    attributes[zip_code]=postalCode
    attributes[function]=title
    attributes[service_designation]=title
    attributes[pager]=pager
    ;Kategorieerweiterung nur für Personen
    attributes[custom_1]=objectSid
    attributes[custom_2]=sn
    attributes[custom_3]=homePhone
    attributes[custom_4]=mobile
    attributes[custom_5]=info
    attributes[custom_6]=manager
    attributes[custom_7]=company
    attributes[custom_8]=objectGUID

Wie man hier sieht habe ich z.B. das Stammdaten Attribut department mit dem LDAP Attribute department gemapped.  
Zusätzlich habe ich die Kategorieerweiterung verwendet. Der Aufbau für z.B.  
attributes[custom_1]=objectSid  
wäre wie folgt:

attributes sagt dem handler er soll das i-doit Attribut [custom_1] mit dem LDAP Attribut objectSid synchronisieren.

Nachdem die Benutzer synchronisiert wurden finde ich folgende Stammdaten vor:

[![ldap_personen-sync](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/10-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/10-ldap-bg.png)

* * *

### Weitere Optionen

#### autoReactivateUsers

Um einen sauberen Start zu haben, setzt diese Einstellung automatisch alle Benutzer vor der Synchronisierung auf den Status normal.

Dies ist hilfreich, falls Benutzer versehentlich vorher archiviert oder gelöscht wurden.  
Beachten Sie, dass dies nur mit NDS & OpenLDAP funktioniert, da es in Active Directory immer aktiviert ist!

Wir sollten uns bewusst sein, dass es mit NDS oder OpenLDAP derzeit nicht möglich ist, gelöschte Benutzer zu identifizieren, um sie später zu archivieren. Benutzer sind dann immer aktiviert!

    autoReactivateUsers=false

* * *

#### ignoreUsersWithAttributes

Deaktiviere die Synchronisierung für Benutzer mit Attributen, die gegen ignoreFunction geprüft wurden.

Diese Funktion hilft, eine Synchronisation unerwünschter Verzeichnisobjekte zu verhindern.  
Der Benutzer wird nicht synchronisiert, wenn ignoreFunction für ALLE ausgewählten Attribute fehlschlägt.

Standardmäßig steht hier ignoreUsersWithAttributes=[] somit wird nichts ignoriert.

Wir möchten nur Benutzer importieren bei denen die Attribute samaccountname, sn, givenname und mail nicht leer sind.  
Somit müsste die Konfiguration für ignoreUsersWithAttributes so aussehen:

    ignoreUsersWithAttributes[] = "samaccountname"
    ignoreUsersWithAttributes[] = "sn"
    ignoreUsersWithAttributes[] = "givenname"
    ignoreUsersWithAttributes[] = "mail"

* * *

#### ignoreFunction

Ist die Prüffunktion zum Ignorieren von Benutzern (siehe ‘ignoreUsersWithAttributes’)

Dies kann ein beliebiger Funktionsname sein, der über call\_user\_func oder die definierten Funktionen aufrufbar ist.

definierte functions:

    empty
    !empty
    isset
    !isset

Beispiel: empty würde als empty($value) ausgeführt werden

Wir prüfen auf leere Attribute mit

    ignoreFunction=empty

#### Synchronisiere leere Attribute

Diese Option entscheidet, ob geleerte Attribute aus dem AD mit i-doit synchronisiert werden sollen oder nicht.

    syncEmptyAttributes=true

* * *

### Die komplette ldap.ini

!!! warning Zugriff auf .ini Dateien
    Wird die Konfigurationsdatei im i-doit Verzeichnis abgelegt muss die .htaccess angepasst werden.
    Es sollte dieser code hinzugefügt werden:
    ```shell
    ## Deny access to all ini files…
    <Files "*.ini">
        Require all denied
    </Files>
    ```

Nun fügen wir alle Teile zusammen und erstellen unsere ldap.ini  
Der erste Teil der ldap.ini wird von [Verwendung von Konfigurationsdateien für Console Commands](../cli/console/verwendung-von-konfigurationsdateien-fuer-console-commands.md#beispiel-für-den-command-ldap-sync) bezogen.

    [commandArguments]
    [commandOptions]
    user=admin
    password=pass
    tenantId=1
    [additional]
    ;Import rooms from ldap
    import_rooms=true
    ;Automatically assign this company to every ldap user
    defaultCompany='i-doit'
    ;What to do with deleted users - archive, delete, purge
    deletedUsersBehaviour=archive
    ;What to do with disabled users - archive, delete, disable_login
    disabledUsersBehaviour=disable_login
    ;Attach users to Rooms statically
    rooms["Raum A"]=["MichaelO","migel"]
    ;LDAP Attributes are individual. This default configuration is prepared for Active Directory:
    attributes[department]=department
    attributes[phone_company]=telephonenumber
    attributes[phone_home]=homephone
    attributes[phone_mobile]=mobile
    attributes[fax]=facsimileTelephoneNumber
    attributes[description]=info
    attributes[personnel_number]=initials
    attributes[organization]=company
    attributes[location]=physicalDeliveryOfficeName
    attributes[street]=streetAddress
    attributes[city]=l
    attributes[zip_code]=postalCode
    attributes[function]=title
    attributes[service_designation]=title
    attributes[pager]=pager
    ;Category extension for persons
    attributes[custom_1]=objectSid
    attributes[custom_2]=sn
    attributes[custom_3]=homePhone
    attributes[custom_4]=mobile
    attributes[custom_5]=info
    attributes[custom_6]=manager
    attributes[custom_7]=company
    attributes[custom_8]=objectGUID
    ;Automatically sets all users to status normal NDS and OpenLDAP
    autoReactivateUsers=false
    ;Disable sync for users with Attributes checked against 'ignoreFunction'
    ignoreUsersWithAttributes=[]
    ;The check function used for ignoring users (see 'ignoreUsersWithAttributes') empty - !empty - isset - !isset
    ignoreFunction=empty
    syncEmptyAttributes=true

Auf der Console würde der Command so aussehen:

    sudo -u www-data php console.php ldap-sync -c /var/www/html/i-doit/src/handler/config/ldap-sync.ini

[example-ldap.ini :material-file-download:](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/example-ldap.ini){ .md-button .md-button--primary }
