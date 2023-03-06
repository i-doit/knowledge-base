# Verwendung von Konfigurationsdateien für Console Commands

Wenn Sie eine Konfigurationsdateien verwenden, können Sie dort für die Console Command die Optionen unterbringen.  
Speichern können Sie diese neu erstellten Dateien dann z.B. unter /i-doit/src/handler/config/.

!!! warning "Zugriff auf .ini Dateien"
    Wird die Konfigurationsdatei im i-doit Verzeichnis abgelegt muss die .htaccess angepasst werden.
    Es sollte dieser code hinzugefügt werden:

    ```shell
    ## Deny access to all ini files…
    <Files "*.ini">
        Require all denied
    </Files>
    ```

Damit Sie z.B. Passwörter nicht im Klartext in die Console tippen müssen.  
Der [Console Command](../console/optionen-und-parameter-der-console.md) verwendet .ini Dateien.  
Der [Controller Command](../controller.md) verwendet .inc.php Dateien. Diese Methode ist allerdings veraltet und sollte nicht verwendet werden.

Verwendet wird die Konfigurationsdatei mit `--config /pfad/zur/config.ini oder mit -c /pfad/zur/config.ini`

Der Aufbau der .ini
-------------------

    [commandArguments]

Zur Zeit keine vorhanden.

    [commandOptions]
    user=admin
    password=pass
    tenantId=1

Hier können die Optionen des Console Command hinzugefügt werden. Diese Optionen müssen in der “Langform” geschrieben werden.  
Weitere Optionen finden Sie unter [Optionen und Parameter der Console](../console/optionen-und-parameter-der-console.md).

    [additional]

Hierunter werden spezielle Parameter eingetragen.  
Zur Zeit gibt es diese für den [ldapServerId](../console/optionen-und-parameter-der-console.md#ldap-sync) sowie für [import-syslog](../console/optionen-und-parameter-der-console.md#import-syslog).

* * *

Beispiel für den Command [search-index](../console/optionen-und-parameter-der-console.md#search-index)
--------------------------------------------------------------------------------------------------------------------------------------------------------

Als erstes wird die .ini Datei erstellt.  
Wir verwenden hier zusätzlich [update](../console/optionen-und-parameter-der-console.md#search-index) damit wird der Suchindex überschrieben.  
Zusätzlich verwenden wir [quiet](../console/optionen-und-parameter-der-console.md#search-index) damit wird die Ausgabe gekürzt und zusätzlich sparen wir etwas speicher, welcher dann für die Indexierung verwendet werden kann.

    [commandArguments]
    [commandOptions]
    user=admin
    password=pass
    tenantId=1
    update
    quiet
    [additional]

Damit die Konfiguration auch verwendet wird führen wir den Console Command aus und geben den Pfad zur Konfigurationsdatei mit --config oder -can.

    sudo -u www-data php console.php search-index -c /var/www/html/i-doit/src/handler/config/examples/search-index.ini

[example-search.ini :material-file-download:](../../../assets/images/de/automatisierung-und-integration/cli/console/console-commands/example-seach_index.ini){ .md-button .md-button--primary }

* * *

Beispiel für den Command [notifications-send](../console/optionen-und-parameter-der-console.md#notifications-send)
--------------------------------------------------------------------------------------------------------------------------------------------------------------------

Für diesen Command gibt es keine eigenen Optionen daher verwenden wir nur die benötigten Optionen [user](../console/optionen-und-parameter-der-console.md#notifications-send), [password](../console/optionen-und-parameter-der-console.md#notifications-send) und [tenantId](../console/optionen-und-parameter-der-console.md#notifications-send).

    [commandArguments]
    [commandOptions]
    user=admin
    password=pass
    tenantId=1
    [additional]

Damit die Konfiguration auch verwendet wird führen wir den Console Command aus und geben den Pfad zur Konfigurationsdatei mit --config oder -can.

    sudo -u www-data php console.php notifications-send -c /var/www/html/i-doit/src/handler/config/examples/notifications-send.ini

[example-notifications-send.ini :material-file-download:](../../../assets/images/de/automatisierung-und-integration/cli/console/console-commands/example-notifications-send.ini){ .md-button .md-button--primary }

* * *

Beispiel für den Command [ldap-sync](../console/optionen-und-parameter-der-console.md#ldap-sync)
--------------------------------------------------------------------------------------------------------------------------------------------------

Dieser Command bietet folgende zusätzliche Optionen an: [ldapServerId](../console/optionen-und-parameter-der-console.md#ldap-sync) und [dumpConfig](../console/optionen-und-parameter-der-console.md#ldap-sync).  
Die Option [ldapServerId](../console/optionen-und-parameter-der-console.md#ldap-sync) gibt den zu verwenden ldap Server an. Hier muss die ID des Eintrages angegeben werden  
Mit [dumpConfig](../console/optionen-und-parameter-der-console.md#ldap-sync) wird keine Synchronisation ausgeführt! Es wird nur die Konfiguration ausgegeben. Sollte demnach nur fürs Debugging verwendet werden.

    [commandArguments]
    [commandOptions]
    user=admin
    password=pass
    tenantId=1
    [additional]
    import_rooms=false
    defaultCompany=''
    deletedUsersBehaviour=disable_login
    disabledUsersBehaviour=disable_login
    ; LDAP Attributes are individual. This default configuration is prepared for Active Directory:
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
    ;Kategorieerweiterung Personen
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

[example-ldap.ini :material-file-download:](../../../assets/images/de/automatisierung-und-integration/cli/console/console-commands/example-ldap.ini){ .md-button .md-button--primary }

Damit die Konfiguration auch verwendet wird führen wir den Console Command aus und geben den Pfad zur Konfigurationsdatei mit --config oder -can.

    sudo -u www-data php console.php ldap-sync -c /var/www/html/i-doit/src/handler/config/examples/ldap-sync.ini

Liste der Command Optionen und eine kurze Erklärung

| Key | Wert | Beschreibung |
| --- | --- | --- |
| import\_rooms= | true oder false | Importiert das LDAP Attribut physicalDeliveryOfficeName und legt diesen falls nicht vorhanden als Raum, ohne Standort, an |
| defaultCompany='' | ‘Name der Organisation’ | Standard Organisation die eingetragen werden soll, leer lassen wenn nichts geändert werden soll |
| deletedUsersBehaviour= | archive, delete oder disable\_login | Verhalten für gelöschte LDAP Benutzer. Sollen diese archiviert, gelöscht oder soll das Login deaktiviert werden |
| disabledUsersBehaviour= | archive, delete oder disable\_login | Verhalten für deaktivierte LDAP Benutzer. Sollen diese archiviert, gelöscht oder soll das Login deaktiviert werden |
| rooms\[\]="" | \[“Raum 01”\]=“userPrincipalName” | Hier wir dein Raum einem LDAP Benutzer statisch zugewiesen |
| attributes\[\]= | attributes\[i-doit Feld\]=AD Attribut | Mögliche i-doit Felder: academic\_degree, function, service\_designation, street, city, zip\_code, phone\_company, phone\_home, phone\_mobile, fax, pager, personnel\_number, department, company, office, ldap\_id, ldap\_dn, description. Wenn hier benutzerdefinierte Informationen gespeichert werden sollen, kann die [Kategorieerweiterung](../../../administration/verwaltung/cmdb-einstellungen.md#kategorieerweiterung) aktiviert werden. Dann stehen noch die Felder: custom\_1 - custom\_8 zur verfügung |
| autoReactivateUsers= | true oder false | Alle Benutzer automatisch auf den Status normal gesetzt bevor diese gesynct werden. Diese funktion ist nur für OpenLDAP und NDS notwendig, da diese im Active Directory immer aktiviert ist |
| ignoreUsersWithAttributes\[\]= | ignoreUsersWithAttributes\[\]=“sn” | Deaktiviert die Syncronisation von Benutzern bei denen z.B. der ‘sn’(Last Name) im AD leer ist. Hier können mehrere AD Attribute verwendet werden, siehe Beispiel |
| ignoreFunction= | empty\*, !empty, isset\*, !isset | Die Prüffunktion für “ignoreUsersWithAttributes”. Wird der Wert auf “empty” gesetzt, prüft die Funktion ob der angegebene “ignoreUsersWithAttributes” Wert leer ist. Trifft dies zu wird der User nicht Syncronisiert. |

\*empty - Prüft, ob eine Variable einen Wert enthält  
\*isset - Prüft, ob eine Variable existiert und ob sie nicht NULL ist

* * *

Beispiel für den Command [import-syslog](../console/optionen-und-parameter-der-console.md#import-syslog)
----------------------------------------------------------------------------------------------------------------------------------------------------------

Für diesen Command gibt es keine eigenen Optionen daher verwenden wir nur die benötigten Optionen [user](../console/optionen-und-parameter-der-console.md#import-syslog), [password](../console/optionen-und-parameter-der-console.md#import-syslog) und [tenantId](../console/optionen-und-parameter-der-console.md#import-syslog).

    [commandArguments]
    [commandOptions]
    user=admin
    password=admin
    tenantId=1
    [additional]
    ; splits syslog-line in several parts
    ; "/(^[a-zA-Z]{3}[ ]+[\d]+ [\d\:\d]+) " .  /* date / time */
    ; "(([.\-0-9a-zA-Z]+)*" .                  /* hostname */
    ; "(\b(?:\d{1,3}\.){3}\d{1,3}\b)*)+ " .    /* IP-Address */
    ; "([a-zA-Z0-9-_\/\[\]:]+) " .             /* Processname */
    ; "(.*)/";                                 /* Syslog-Message */
    regexSplitSyslogLine="/(^[a-zA-Z]{3}[ ]+[\d]+ [\d\:\d]+) (([.\-0-9a-zA-Z]+)*(\b(?:\d{1,3}\.){3}\d{1,3}\b)*)+ ([a-zA-Z0-9-_\/\[\]:]+) (.*)/";
    priorities[]=Emergency
    priorities[]=Alert
    priorities[]=Critical
    priorities[]=Error
    priorities[]=Warning
    priorities[]=Notice
    priorities[]=Info
    priorities[]=Debug
    logfiles[]="/var/log/system.log"
    alertlevels[] = 4
    alertlevels[] = 4
    alertlevels[] = 3
    alertlevels[] = 3
    alertlevels[] = 2
    alertlevels[] = 2
    alertlevels[] = 1
    alertlevels[] = 1
