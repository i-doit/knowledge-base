<!-- TRANSLATED by md-translate -->
# Verwendung von Konfigurationsdateien für Console Commands

# Utilisation de fichiers de configuration pour les Console Commands

Wenn Sie eine Konfigurationsdateien verwenden, können Sie dort für die Console Command die Optionen unterbringen.
Speichern können Sie diese neu erstellten Dateien dann z.B. unter /i-doit/src/handler/config/.

Si vous utilisez un fichier de configuration, vous pouvez y placer les options de la commande de console.
Vous pouvez ensuite enregistrer ces fichiers nouvellement créés par exemple sous /i-doit/src/handler/config/.

!!! warning "Zugriff auf .ini Dateien"
    Wird die Konfigurationsdatei im i-doit Verzeichnis abgelegt muss die .htaccess angepasst werden.
    Es sollte dieser code hinzugefügt werden:
    `shell ## Deny access to all ini files… <Files "*.ini"> Require all denied </Files>`

! !! warning "Accès aux fichiers .ini".
    Si le fichier de configuration est placé dans le répertoire i-doit, le .htaccess doit être adapté.
    Il faut ajouter ce code :
    `shell ## Deny access to all ini files... <Files "*.ini"> Require all denied </Files>`

Damit Sie z.B. Passwörter nicht im Klartext in die Console tippen müssen.
Der [Console Command](../console/optionen-und-parameter-der-console.md) verwendet .ini Dateien.
Der [Controller Command](../controller.md) verwendet .inc.php Dateien. Diese Methode ist allerdings veraltet und sollte nicht verwendet werden.

Pour éviter, par exemple, de devoir taper les mots de passe en clair dans la console.
La [Console Command](../console/options-et-paramètres-de-la-console.md) utilise des fichiers .ini.
La [Controller Command](../controller.md) utilise des fichiers .inc.php. Cette méthode est toutefois obsolète et ne devrait pas être utilisée.

Verwendet wird die Konfigurationsdatei mit `--config /pfad/zur/config.ini oder mit -c /pfad/zur/config.ini`

Le fichier de configuration est utilisé avec `--config /chemin/vers/config.ini ou avec -c /chemin/vers/config.ini`.

## Der Aufbau der .ini

## La structure du .ini

```ini
[commandArguments]
```

Zur Zeit keine vorhanden.

Aucun n'est disponible pour le moment.

```ini
[commandOptions]
    user=admin
    password=pass
    tenantId=1
```

Hier können die Optionen des Console Command hinzugefügt werden. Diese Optionen müssen in der "Langform" geschrieben werden.
Weitere Optionen finden Sie unter [Optionen und Parameter der Console](../console/optionen-und-parameter-der-console.md).

Les options de la Console Command peuvent être ajoutées ici. Ces options doivent être écrites sous la forme "longue".
Vous trouverez d'autres options dans [Options et paramètres de la console](../console/options-et-paramètres-de-la-console.md).

```ini
[additional]
```

Hierunter werden spezielle Parameter eingetragen.
Zur Zeit gibt es diese für den [ldapServerId](../console/optionen-und-parameter-der-console.md#ldap-sync) sowie für [import-syslog](../console/optionen-und-parameter-der-console.md#import-syslog).

Des paramètres spéciaux sont inscrits sous cette rubrique.
Actuellement, il y en a pour [ldapServerId](../console/optionset-parameters-der-console.md#ldap-sync) ainsi que pour [import-syslog](../console/optionset-parameters-der-console.md#import-syslog).

---

## Beispiel für den Command [search-index](../console/optionen-und-parameter-der-console.md#search-index)

## Exemple de la commande [search-index](../console/options-et-paramètres-de-la-console.md#search-index)

Als erstes wird die .ini Datei erstellt.
Wir verwenden hier zusätzlich [update](../console/optionen-und-parameter-der-console.md#search-index) damit wird der Suchindex überschrieben.
Zusätzlich verwenden wir [quiet](../console/optionen-und-parameter-der-console.md#search-index) damit wird die Ausgabe gekürzt und zusätzlich sparen wir etwas speicher, welcher dann für die Indexierung verwendet werden kann.

La première chose à faire est de créer le fichier .ini.
Nous utilisons ici également [update](../console/optionen-et-parameter-der-console.md#search-index) pour écraser l'index de recherche.
De plus, nous utilisons [quiet](../console/optionen-et-parameter-der-console.md#search-index) pour raccourcir la sortie et économiser un peu de mémoire, qui peut ensuite être utilisée pour l'indexation.

```ini
[commandArguments]
    [commandOptions]
    user=admin
    password=pass
    tenantId=1
    update
    quiet
    [additional]
```

Damit die Konfiguration auch verwendet wird führen wir den Console Command aus und geben den Pfad zur Konfigurationsdatei mit --config oder -can.

Pour que la configuration soit utilisée, nous exécutons la commande Console et indiquons le chemin d'accès au fichier de configuration avec --config ou -can.

```shell
sudo -u www-data php console.php search-index -c /var/www/html/i-doit/src/handler/config/examples/search-index.ini
```

[example-search.ini :material-file-download:](../../../assets/images/de/automatisierung-und-integration/cli/console/console-commands/example-seach_index.ini){ .md-button .md-button--primary }

[example-search.ini :material-file-download :](../../../assets/images/fr/automatisierung-und-integration/cli/console/console-commands/example-seach_index.ini){ .md-button .md-button--primary }

---

## Beispiel für den Command [notifications-send](../console/optionen-und-parameter-der-console.md#notifications-send)

## Exemple de la commande [notifications-send](../console/options-et-paramètres-de-la-console.md#notifications-send)

Für diesen Command gibt es keine eigenen Optionen daher verwenden wir nur die benötigten Optionen [user](../console/optionen-und-parameter-der-console.md#notifications-send), [password](../console/optionen-und-parameter-der-console.md#notifications-send) und [tenantId](../console/optionen-und-parameter-der-console.md#notifications-send).

Pour cette commande, il n'y a pas d'options propres, donc nous n'utilisons que les options nécessaires [user](../console/option-et-paramètre-der-console.md#notifications-send), [password](../console/option-et-paramètre-der-console.md#notifications-send) et [tenantId](../console/option-et-paramètre-der-console.md#notifications-send).

```ini
[commandArguments]
    [commandOptions]
    user=admin
    password=pass
    tenantId=1
    [additional]
```

Damit die Konfiguration auch verwendet wird führen wir den Console Command aus und geben den Pfad zur Konfigurationsdatei mit --config oder -can.

Pour que la configuration soit utilisée, nous exécutons la commande Console et indiquons le chemin d'accès au fichier de configuration avec --config ou -can.

```shell
sudo -u www-data php console.php notifications-send -c /var/www/html/i-doit/src/handler/config/examples/notifications-send.ini
```

[example-notifications-send.ini :material-file-download:](../../../assets/images/de/automatisierung-und-integration/cli/console/console-commands/example-notifications-send.ini){ .md-button .md-button--primary }

[example-notifications-send.ini :material-file-download :](../../../assets/images/fr/automatisierung-und-integration/cli/console/console-commands/example-notifications-send.ini){ .md-button .md-button--primary }

---

## Beispiel für den Command [ldap-sync](../console/optionen-und-parameter-der-console.md#ldap-sync)

## Exemple de la commande [ldap-sync](../console/options-et-paramètres-de-la-console.md#ldap-sync)

Dieser Command bietet folgende zusätzliche Optionen an: [ldapServerId](../console/optionen-und-parameter-der-console.md#ldap-sync) und [dumpConfig](../console/optionen-und-parameter-der-console.md#ldap-sync).
Die Option [ldapServerId](../console/optionen-und-parameter-der-console.md#ldap-sync) gibt den zu verwenden ldap Server an. Hier muss die ID des Eintrages angegeben werden
Mit [dumpConfig](../console/optionen-und-parameter-der-console.md#ldap-sync) wird keine Synchronisation ausgeführt! Es wird nur die Konfiguration ausgegeben. Sollte demnach nur fürs Debugging verwendet werden.

Cette commande propose les options supplémentaires suivantes : [ldapServerId](../console/options-et-paramètres-der-console.md#ldap-sync) et [dumpConfig](../console/options-et-paramètres-der-console.md#ldap-sync).
L'option [ldapServerId](../console/optionset-parameter-der-console.md#ldap-sync) indique le serveur ldap à utiliser. L'ID de l'entrée doit être indiquée ici.
Avec [dumpConfig](../console/optionen-et-parameter-der-console.md#ldap-sync), aucune synchronisation n'est effectuée ! Seule la configuration est affichée. Ne devrait donc être utilisé que pour le débogage.

```ini
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
    ;Attributerweiterung Personen
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

[example-ldap.ini :material-file-download:](../../../assets/images/de/automatisierung-und-integration/cli/console/console-commands/example-ldap.ini){ .md-button .md-button--primary }

[example-ldap.ini :material-file-download :](../../../assets/images/fr/automatisierung-und-integration/cli/console/console-commands/example-ldap.ini){ .md-button .md-button--primary }

Damit die Konfiguration auch verwendet wird führen wir den Console Command aus und geben den Pfad zur Konfigurationsdatei mit --config oder -can.

Pour que la configuration soit utilisée, nous exécutons la commande Console et indiquons le chemin d'accès au fichier de configuration avec --config ou -can.

```shell
sudo -u www-data php console.php ldap-sync -c /var/www/html/i-doit/src/handler/config/examples/ldap-sync.ini
```

Liste der Command Optionen und eine kurze Erklärung

Liste des options de commande et brève explication

| Key | Wert | Beschreibung |
| --- | --- | --- |
| import_rooms= | true oder false | Importiert das LDAP Attribut physicalDeliveryOfficeName und legt diesen falls nicht vorhanden als Raum, ohne Standort, an |
| defaultCompany='' | 'Name der Organisation' | Standard Organisation die eingetragen werden soll, leer lassen wenn nichts geändert werden soll |
| deletedUsersBehaviour= | archive, delete oder disable_login | Verhalten für gelöschte LDAP Benutzer. Sollen diese archiviert, gelöscht oder soll das Login deaktiviert werden |
| disabledUsersBehaviour= | archive, delete oder disable_login | Verhalten für deaktivierte LDAP Benutzer. Sollen diese archiviert, gelöscht oder soll das Login deaktiviert werden |
| rooms[]="" | ["Raum 01"]="userPrincipalName" | Hier wir dein Raum einem LDAP Benutzer statisch zugewiesen |
| attributes[]= | attributes[i-doit Feld]=AD Attribut | Mögliche i-doit Felder: academic_degree, function, service_designation, street, city, zip_code, phone_company, phone_home, phone_mobile, fax, pager, personnel_number, department, company, office, ldap_id, ldap_dn, description. Wenn hier benutzerdefinierte Informationen gespeichert werden sollen, kann die [Attributerweiterung](../../../administration/verwaltung/import-und-schnittstellen/ldap/attributerweiterung.md) aktiviert werden. Dann stehen noch die Felder: custom_1 - custom_8 zur Verfügung |
| autoReactivateUsers= | true oder false | Alle Benutzer automatisch auf den Status normal gesetzt bevor diese gesynct werden. Diese Funktion ist nur für OpenLDAP und NDS notwendig, da diese im Active Directory immer aktiviert ist |
| ignoreUsersWithAttributes[]= | ignoreUsersWithAttributes[]="sn" | Deaktiviert die Synchronisation von Benutzern bei denen z.B. der "sn"(Last Name) im AD leer ist. Hier können mehrere AD Attribute verwendet werden, siehe Beispiel |
| ignoreFunction= | empty*, !empty, isset*, !isset | Die Prüffunktion für "ignoreUsersWithAttributes". Wird der Wert auf "empty" gesetzt, prüft die Funktion ob der angegebene "ignoreUsersWithAttributes" Wert leer ist. Trifft dies zu wird der User nicht Synchronisiert. |

| clé | valeur | description |
| --- | --- | --- |
| import_rooms= | true ou false | Importe l'attribut LDAP physicalDeliveryOfficeName et le crée, s'il n'existe pas, comme salle, sans emplacement |
| defaultCompany='' | 'Nom de l'organisation' | Organisation par défaut qui doit être saisie, laisser vide si rien ne doit être modifié |
| deletedUsersBehaviour= | archive, delete ou disable_login | Comportement pour les utilisateurs LDAP supprimés. Doivent-ils être archivés, supprimés ou le login doit-il être désactivé |
| disabledUsersBehaviour= | archive, delete ou disable_login | Comportement pour les utilisateurs LDAP désactivés. Doit-on les archiver, les supprimer ou désactiver le login |
| rooms[]="" | ["Salle 01"]="userPrincipalName" | Ici, votre salle est attribuée de manière statique à un utilisateur LDAP |
| attributs[]= | attributs[champ i-doit]=AD Attribut | Champs i-doit possibles : academic_degree, function, service_designation, street, city, zip_code, phone_company, phone_home, phone_mobile, fax, pager, personnel_number, department, company, office, ldap_id, ldap_dn, description. Si des informations personnalisées doivent être enregistrées ici, l'[extension d'attribut](../../../administration/administration/importation et interfaces/ldap/extension d'attribut.md) peut être activée. Ensuite, les champs : custom_1 - custom_8 sont encore disponibles |
| autoReactivateUsers= | true ou false | Tous les utilisateurs sont automatiquement mis à l'état normal avant d'être synchronisés. Cette fonction n'est nécessaire que pour OpenLDAP et NDS, car elle est toujours activée dans Active Directory |
| ignoreUsersWithAttributes[]= | ignoreUsersWithAttributes[]="sn" | Désactive la synchronisation des utilisateurs pour lesquels, par exemple, le "sn" (Last Name) dans AD est vide. Plusieurs attributs AD peuvent être utilisés ici, voir exemple |
| ignoreFunction= | empty*, !empty, isset*, !isset | La fonction de contrôle pour "ignoreUsersWithAttributes". Si la valeur est définie sur "empty", la fonction vérifie si la valeur indiquée "ignoreUsersWithAttributes" est vide. Si c'est le cas, l'utilisateur n'est pas synchronisé. |

*empty - Prüft, ob eine Variable einen Wert enthält
*isset - Prüft, ob eine Variable existiert und ob sie nicht NULL ist

*empty - vérifie si une variable contient une valeur
*isset - Vérifie si une variable existe et si elle n'est pas NULL

---

## Beispiel für den Command [import-syslog](../console/optionen-und-parameter-der-console.md#import-syslog)

## Exemple de la commande [import-syslog](../console/options-et-paramètres-de-la-console.md#import-syslog)

Für diesen Command gibt es keine eigenen Optionen daher verwenden wir nur die benötigten Optionen [user](../console/optionen-und-parameter-der-console.md#import-syslog), [password](../console/optionen-und-parameter-der-console.md#import-syslog) und [tenantId](../console/optionen-und-parameter-der-console.md#import-syslog).

Pour cette commande, il n'y a pas d'options propres, nous n'utiliserons donc que les options nécessaires [user](../console/option-et-paramètre-der-console.md#import-syslog), [password](../console/option-et-paramètre-der-console.md#import-syslog) et [tenantId](../console/option-et-paramètre-der-console.md#import-syslog).

```ini
[commandArguments]
    [commandOptions]
    user=admin
    password=admin
    tenantId=1
    [additional]
    ; splits syslog-line in several parts
    ; "/(^[a-zA-Z]{3}[ ]+[\d]+ [\d\:\d]+) " .  /* date / time */
    ; "(([.\-0-9a-zA-Z]+)*" .                  /* hostname */
    ; "(\b(?:\d{1,3}\.){3}\d{1,3}\b)*)+ " .    /* IP-Address */
    ; "([a-zA-Z0-9-_\/\[\]:]+) " .             /* Processname */
    ; "(.*)/";                                 /* Syslog-Message */
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
```