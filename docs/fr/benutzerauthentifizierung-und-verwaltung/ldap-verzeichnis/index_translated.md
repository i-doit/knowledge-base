<!-- TRANSLATED by md-translate -->
# LDAP-Verzeichnis/Active Directory (AD)

# Répertoire LDAP/Active Directory (AD)

Für die Authentifizierung/Autorisierung und Synchronisierung von Daten aus einem LDAP-Verzeichnis oder Active Directory (AD) bietet i-doit eine Schnittstelle.

Pour l'authentification/autorisation et la synchronisation des données d'un répertoire LDAP ou Active Directory (AD), i-doit propose une interface.

!!! info ""
    Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/ldap-integration-mit-i-doit/)

! !! info ""
    Vous trouverez un exemple pratique sur notre [blog](https://www.i-doit.com/blog/ldap-integration-mit-i-doit/)

**Voraussetzungen**

**Conditions préalables**

i-doit unterstützt folgende Verzeichnisdienste:

i-doit supporte les services de répertoire suivants :

* [OpenLDAP](https://de.wikipedia.org/wiki/OpenLDAP)
* [Microsoft Active Directory (AD)](https://de.wikipedia.org/wiki/Active_Directory)
* [Novel eDirectory](https://de.wikipedia.org/wiki/Novell_eDirectory) (früher Directory Services)

* [OpenLDAP](https://de.wikipedia.org/wiki/OpenLDAP)
* [Microsoft Active Directory (AD)](https://de.wikipedia.org/wiki/Active_Directory)
* [Novel eDirectory](https://de.wikipedia.org/wiki/Novell_eDirectory) (anciennement Directory Services)

Die [PHP-Extension php_ldap](http://de.php.net/manual/de/ldap.setup.php) für die Kommunikation mit einem Active Directory (AD) bzw. LDAP-Verzeichnis muss installiert und aktiviert werden. Wer den Installationsanweisungen gefolgt ist, hat die Extension bereits auf dem System.

L'extension [PHP php_ldap](http://de.php.net/manual/de/ldap.setup.php) pour la communication avec un Active Directory (AD) ou un répertoire LDAP doit être installée et activée. Ceux qui ont suivi les instructions d'installation ont déjà l'extension sur leur système.

Nicht vergessen, LDAP zu erlauben, wenn SELinux verwendet wird. Dazu `setsebool -P httpd_can_connect_ldap on` verwenden. Das -P steht für Permanent<br>
Überprüfen Sie dies mit `getsebool -a | grep httpd`

Ne pas oublier d'autoriser LDAP si SELinux est utilisé. Pour cela, utiliser `setsebool -P httpd_can_connect_ldap on`. Le -P signifie Permanent<br>.
Vérifier cela avec `getsebool -a | grep httpd`.

## Nachträgliche Installation unter [Debian GNU/Linux](../../installation/manuelle-installation/debian.md)

## Installation ultérieure sous [Debian GNU/Linux](../../installation/manuelle-installation/debian.md)

```shell
sudo apt install php7-ldap
sudo service apache2 restart
```

## Nachträgliche Installation unter [Windows](../../installation/manuelle-installation/microsoft-windows-server/index.md)

## Installation ultérieure sous [Windows](../../installation/manuelle-installation/microsoft-windows-server/index.md)

Die Datei php.ini (in der Regel unter `C:\xampp\php\php.ini`) muss angepasst werden. In einem Texteditor aktiviert man das Laden der Extension php_ldap.

Le fichier php.ini (en général sous `C:\xampp\php\php.ini`) doit être adapté. Dans un éditeur de texte, on active le chargement de l'extension php_ldap.

Aus der Zeile

De la ligne

```ini
;extension=php_ldap.dll
```

wird das ";" entfernt und somit

le " ;" est supprimé et donc

```ini
extension=php_ldap.dll
```

Manchmal kann es noch notwendig sein, die Dateien `ssleay32.dll` und `libeay32.dll` (von Version zu Version unterschiedlich, jedoch meist unter `C:\xampp\apache\bin\` zu finden) in das Verzeichnis php\ zu kopieren. Danach muss noch der Apache Webserver neu gestartet werden.

Parfois, il peut encore être nécessaire de copier les fichiers `ssleay32.dll` et `libeay32.dll` (qui varient d'une version à l'autre, mais qui se trouvent généralement sous `C:\xampp\apache\bin\`) dans le répertoire php\. Ensuite, il faut encore redémarrer le serveur web Apache.

## Konfiguration

## Configuration

Die Konfiguration befindet sich in i-doit unter **Verwaltung → Import und Schnittstellen → LDAP**. Dort können unter **Server** zum Einen ein oder mehrere Instanzen konfiguriert und zum Anderen eine Zuweisung von Feldern zu Attributen vorgenommen werden.

La configuration se trouve dans i-doit sous **Administration → Importation et interfaces → LDAP**. Sous **Serveur**, il est possible d'une part de configurer une ou plusieurs instances et d'autre part d'attribuer des champs à des attributs.

### Server

### serveur

Unter **Verwaltung → Import und Schnittstellen → LDAP → Server** können ein oder mehrere Instanzen konfiguriert werden. Beim Login werden alle Server nacheinander abgefragt, bis ein Login gefunden wurde. Gibt es mehrere [Mandanten](../../administration/mandantenfaehigkeit.md), werden alle nacheinander abgefragt und die Datenbanken für den Login angeboten, wenn die Abfrage ein positives Ergebnis geliefert hat.

Sous **Administration → Importation et interfaces → LDAP → Serveur**, une ou plusieurs instances peuvent être configurées. Lors de la connexion, tous les serveurs sont interrogés l'un après l'autre jusqu'à ce qu'un login soit trouvé. S'il y a plusieurs [mandants](../../administration/mandantenfaehigkeit.md), ils sont tous interrogés l'un après l'autre et les bases de données sont proposées pour la connexion si l'interrogation a donné un résultat positif.

### LDAP Verbindung für Lookups (lesend)

### Connexion LDAP pour les recherches (en lecture)

| Feldname | Inhalt |
| --- | --- |
| **Aktiv** | Soll der Server beim Login mit abgefragt werden? |
| **Directory*** | Pflichtfeld: Welche Art Directory wird abgefragt? |
| **LDAP-Version** | In welcher Version ist das Directory vorhanden? (Standard: 3) |
| **Enable LDAP Paging** | Soll die maximale Anzahl der Suchergebnisse aktiviert/überschrieben werden?  <br>Dann werden die Ergebnisse "päckchenweise" übermittelt.<br><br>_In einem LDAP-Suchvorgang muss stets damit gerechnet werden, dass der LDAP-Server eine Obergrenze der zurückgelieferten Ergebnisse pro Suchanfrage hat. Man sucht z.B. nach allen User-Objekten in einer gesamten OU-Struktur, bekommt aber nur 500 User als Ergebnis zurück, obwohl sich weit über 2000 User auf dem Server befinden müssen._ |
| **LDAP Page Limit** | Wie viele Ergebnisse sollen pro "Päckchen" zurückgeliefert werden? |
| **IP / Hostname*** | Pflichtfeld: Die IP oder der Hostname des Servers |
| **Port*** | Pflichtfeld: Über welchen Port wird die Abfrage durchgeführt? (Standard: 389) |
| **TLS** | Soll die Abfrage verschlüsselt werden? Achtung: Bei selbst-signierten Zertifikaten oder welchen, deren Zertifikat der Root CA nicht dem Betriebssystem, unter dem i-doit installiert ist, bekannt sind, wird die Authentifizierung fehlschlagen. Wie das Zertifikat akzeptiert werden kann, ist den jeweiligen Anleitungen der Betriebssysteme zu entnehmen. Unter [Debian](../../installation/manuelle-installation/debian.md)-basierten Betriebssystemen wird das Zertifikat der Root CA in das Verzeichnis /usr/local/share/ca-certificates/ kopiert und anschließend mit sudo update-ca-certificates aktiviert. |
| **Admin Benutzername (DN)*** | Pflichtfeld: Der Pfad bis zum Benutzerobjekt, das Leserechte auf das Directory hat.<br><br>(Beispiel: CN=idoit,OU=tree,DC=synetics,DC=int) |
| **Passwort*** | Pflichtfeld: Das Passwort des darüber angegebenen Benutzers |
| **Benutze Admin-Nutzer für alle lesenden Anfragen** | Wenn die Option "Benutze Admin-Nutzer für alle lesenden Anfragen" aktiviert ist, wird bei jeder LDAP-Server Abfrage mit dem Administrator Account aus der LDAP-Server Konfiguration geprüft |
| **Time limit** | Limit für die maximale Dauer der Abfrage. (Standard: 30) |

| nom du champ | contenu |
| --- | --- |
| **Actif** | Le serveur doit-il être interrogé lors de la connexion ? |
| **Directory*** | Champ obligatoire : Quel type de répertoire est interrogé ? |
| **Version LDAP** | Dans quelle version le répertoire est-il disponible ? (par défaut : 3) |
| **Enable LDAP Paging** | Le nombre maximum de résultats de recherche doit-il être activé/superposé ?  <br>Les résultats sont alors transmis "par paquets".<br><br>_ Dans un processus de recherche LDAP, il faut toujours s'attendre à ce que le serveur LDAP ait une limite supérieure de résultats renvoyés par requête de recherche. On recherche par exemple tous les objets utilisateurs dans une structure OU complète, mais on ne reçoit que 500 utilisateurs comme résultat, alors qu'il doit y avoir bien plus de 2000 utilisateurs sur le serveur._ |
| Combien de résultats doivent être renvoyés par "paquet" ? |
| **IP / nom d'hôte*** | Champ obligatoire : L'IP ou le nom d'hôte du serveur |
| **Port*** | Champ obligatoire : Sur quel port la requête sera-t-elle effectuée ? (par défaut : 389) |
| **TLS** | La requête doit-elle être cryptée ? Attention : pour les certificats auto-signés ou ceux dont le certificat de l'AC racine n'est pas connu du système d'exploitation sous lequel i-doit est installé, l'authentification échouera. Pour savoir comment accepter le certificat, il faut se référer aux instructions respectives des systèmes d'exploitation. Sous les systèmes d'exploitation basés sur [Debian](../../installation/manuelle-installation/debian.md), le certificat de l'AC racine est copié dans le répertoire /usr/local/share/ca-certificates/ et ensuite activé avec sudo update-ca-certificates. |
| **Nom d'utilisateur Admin (DN)*** | Champ obligatoire : Le chemin jusqu'à l'objet utilisateur qui a des droits de lecture sur le répertoire.<br><br>(Exemple : CN=idoit,OU=tree,DC=synetics,DC=int) |
| **Mot de passe*** | Champ obligatoire : Le mot de passe de l'utilisateur indiqué au-dessus |
| **Utiliser l'utilisateur admin pour toutes les requêtes en lecture** | Si l'option "Utiliser l'utilisateur admin pour toutes les requêtes en lecture" est activée, chaque requête sur le serveur LDAP sera vérifiée avec le compte administrateur de la configuration du serveur LDAP |
| **Time limit** | Limite pour la durée maximale de la requête. (Par défaut : 30) |

_Bekannte Lösungen für Probleme bei der TLS Verbindung findet Ihr [HIER](../../administration/troubleshooting/ldap-via-tls.md)_

Vous trouverez des solutions connues aux problèmes de connexion TLS [ICI](../../administration/troubleshooting/ldap-via-tls.md)_.

### LDAP-Parameter für i-doit-Login

### Paramètres LDAP pour la connexion i-doit

Die hier angegebenen Parameter bestimmen, wo im Directory nach Benutzern gesucht werden soll.

Les paramètres indiqués ici déterminent où les utilisateurs doivent être recherchés dans le répertoire.

| Feldname | Inhalt |
| --- | --- |
| **Eindeutige Kennung** | Es kommt bei der AD-Synchronisierung immer wieder dazu, dass geänderte Datensätze fälschlicherweise aufgrund eines geänderten Namens (Heirat o.Ä.) nicht mehr synchronisiert werden.  <br>Der "alte" Datensatz wird hier archiviert und ein neuer importiert.  <br>Daher kann als Eindeutige Kennung ein anderes Attribut ausgewählt werden. Siehe dazu **[Attributerweiterung](../../administration/verwaltung/import-und-schnittstellen/ldap/attributerweiterung.md)** |
| **Filter** | Der Filter wird durch die im unteren Bereich definierten Werte automatisch gefüllt und kann nicht direkt über die Oberfläche abgeändert werden. |
| **Nach Benutzern suchen in (OU)*** | Pflichtfeld: Der Pfad bis zur Organisationseinheit, in der die Benutzer im Directory abgelegt wurden.<br><br>(Beispiel: OU=tree,DC=synetics,DC=int) |
| **Rekursive Suche** | Beim Aktivieren der rekursiven Suche werden auch die Verzeichnisse unterhalb der darüber angegebenen Organisationseinheit durchsucht. Bei großen Directories ist dies nicht empfehlenswert und sollte durch die Anlage von mehreren Servern umgangen werden. |

| nom du champ | contenu |
| --- | --- |
| **Identificateur unique** | Lors de la synchronisation AD, il arrive régulièrement que des enregistrements modifiés ne soient plus synchronisés par erreur en raison d'un changement de nom (mariage ou autre).  <br>L'ancien" enregistrement est ici archivé et un nouveau est importé.  <br>C'est pourquoi un autre attribut peut être sélectionné comme identifiant unique. Voir à ce sujet **[extension d'attribut](../../administration/administration/importation et interfaces/ldap/extension d'attribut.md)** |
| **Filtre** | Le filtre est automatiquement rempli par les valeurs définies dans la partie inférieure et ne peut pas être modifié directement via l'interface. |
| **Recherche d'utilisateurs dans (OU)*** | Champ obligatoire : Le chemin jusqu'à l'unité d'organisation dans laquelle les utilisateurs ont été classés dans le répertoire.<br><br>(Exemple : OU=tree,DC=synetics,DC=int) |
| Si la recherche récursive est activée, les répertoires situés en dessous de l'unité d'organisation indiquée au-dessus sont également parcourus. Pour les grands répertoires, cela n'est pas recommandé et devrait être contourné par la création de plusieurs serveurs. |

Des Weiteren kann der Filter noch weiter definiert werden. Bei einer einzigen Filterzeile haben die Optionen dahinter noch keine Auswirkungen. Erst wenn über "Filter hinzufügen" die Abfrage erweitert wird, kommen die weiteren Optionen zur Geltung.

De plus, le filtre peut encore être défini. Pour une seule ligne de filtre, les options qui se trouvent derrière n'ont pas encore d'effet. Ce n'est que lorsque la requête est étendue via "Ajouter un filtre" que les autres options sont mises en valeur.

An letzten Filter anhängen:

Ajouter au dernier filtre :

```shell
(&(objectClass=user)(test=test))
```

Als neuen Filter anhängen:

Ajouter comme nouveau filtre :

```shell
(&(objectClass=user)(&(test=test)))
```

Neuen Term bilden:

Former un nouveau terme :

```shell
(&(&(objectClass=user))(test=test))
```

Im untersten Bereich lässt sich dann die oben festgelegte Konfiguration testen. Bestenfalls erscheint die Meldung:

Dans la partie inférieure, il est possible de tester la configuration définie ci-dessus. Dans le meilleur des cas, le message suivant apparaît :

```shell
Connection OK!
XX object(s) found in OU=tree,OU=synetics,DC=synetics,DC=int.
```

Sollte bei Misserfolg die Fehlermeldung noch nicht eindeutig genug sein, kann das Debug-Level hochgesetzt werden, sodass weitere Ausgaben im Apache Error Log mitgeschrieben werden. Das Error Log ist unter [Debian](../../installation/manuelle-installation/debian.md)-basierten Betriebssystemen unter /var/log/apache2/error.log zu finden.

Si, en cas d'échec, le message d'erreur n'est pas encore suffisamment clair, il est possible d'augmenter le niveau de débogage afin que d'autres sorties soient écrites dans le journal d'erreurs Apache. Le journal d'erreurs se trouve dans /var/log/apache2/error.log sous les systèmes d'exploitation basés sur [Debian](../../installation/manuelle-installation/debian.md).

### Identifizierung von Objekten

### Identification des objets

Ohne weitere Einstellung z.B. **Eindeutige Kennung** wird anhand des **Login** Attributes aus der **Kategorie Personen → Login** identifiziert**.**

Sans autre réglage, par exemple **Identificateur unique** est identifié à l'aide de l'attribut **Login** de la **catégorie Personnes → Login**.**.

### Directories

### Directories

Über **Verwaltung → Import und Schnittstellen → LDAP → Directories**lässt sich dann das Mapping einrichten. Es wird dafür genutzt, beim Login grundlegende Informationen zu dem einloggenden Benutzer abzufragen und in dem in i-doit zu erstellenden Benutzer abzulegen. Hier kann nach der Auswahl des zutreffenden Directories die Zuweisung vorgenommen werden. Standardmäßig sind die Felder jedoch schon gefüllt und brauchen in der Regel nicht verändert zu werden.

Le mappage peut être configuré via **Administration → Importation et interfaces → LDAP → Directories**. Il est utilisé pour demander, lors de la connexion, des informations de base sur l'utilisateur qui se connecte et les stocker dans l'utilisateur à créer dans i-doit. Après avoir sélectionné le répertoire approprié, il est possible de procéder à l'affectation. Par défaut, les champs sont déjà remplis et ne doivent généralement pas être modifiés.

### Import eigener LDAP-Attribute

### Importation d'attributs LDAP personnalisés

Es ist auch möglich, eigene Attribute aus dem LDAP über den Import von Personen in den Stammdaten zu hinterlegen. Dafür können weitere Felder für diese Kategorie unter **Verwaltung → CMDB-Einstellungen→ [Attributerweiterungen](../../administration/verwaltung/import-und-schnittstellen/ldap/attributerweiterung.md)** konfiguriert werden. Sobald ein Name definiert wurde, wird das Feld mit derselben Bezeichnung angezeigt. Die Befüllung findet dann über den zugehörigen Key statt.

Il est également possible de déposer ses propres attributs depuis le LDAP via l'importation de personnes dans les données de base. Pour cela, d'autres champs peuvent être configurés pour cette catégorie sous **Administration → Paramètres CMDB→ [Extensions d'attributs](../../administration/administration/importation et interfaces/ldap/extension d'attributs.md)**. Dès qu'un nom a été défini, le champ s'affiche avec la même désignation. Le remplissage se fait alors via la clé correspondante.

### Regelmäßige Synchronisation

### Synchronisation régulière

Die dafür benötigte Konfiguration wurde in den vorherigen Schritten bereits vorgenommen. Für die Synchronisation muss nun noch der passende [Controller Handler](../../automatisierung-und-integration/cli/controller.md) eingerichtet werden. Außerdem können noch weitere zu synchronisierende Felder konfiguriert werden.

La configuration nécessaire à cet effet a déjà été effectuée dans les étapes précédentes. Pour la synchronisation, il faut maintenant encore configurer le [Controller Handler](../../automatisation-et-intégration/cli/controller.md) approprié. En outre, d'autres champs à synchroniser peuvent être configurés.

### Erweiterte Konfiguration

### Configuration avancée

Die Konfiguration muss in der [Handler-Konfiguration](../../automatisierung-und-integration/index.md) vorgenommen werden. Ein Beispiel dazu ist [Hier](../../automatisierung-und-integration/cli/console/verwendung-von-konfigurationsdateien-fuer-console-commands.md) zu finden i-doit < 1.15. Diese Datei kann mit Login-Daten, Tenant und Attributen erweitert und angepasst werden. Die Konfigurationsdatei wird dann nach i-doit/src/handler/config/ verschoben. Damit diese Datei z.B. beim ldap-sync Command berücksichtig wird, muss diese beim sync über einen weiteren Parameter (-c /pfad/) mit angegeben werden (weitere Informationen zur [Console](../../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md)).

La configuration doit être effectuée dans [Handler-Configuration](../../automatisierung-et-integration/index.md). Un exemple se trouve [Ici](../../automatisation-et-intégration/cli/console/utilisation-de-fichiers-de-configuration-pour-console-commands.md) i-doit < 1.15. Ce fichier peut être étendu et adapté avec les données de connexion, le locataire et les attributs. Le fichier de configuration est alors déplacé vers i-doit/src/handler/config/. Pour que ce fichier soit pris en compte par exemple lors de la commande ldap-sync, il doit être indiqué lors de la synchro via un paramètre supplémentaire (-c /chemin/) (plus d'informations sur la [Console](../../automatisation-et-intégration/cli/console/options-et-paramètres-de-la-console.md)).

!!! warning "Zugriff auf .ini Dateien"
    Wird die Konfigurationsdatei im i-doit Verzeichnis abgelegt muss die .htaccess angepasst werden.
    Es sollte dieser code hinzugefügt werden:
    ## Deny access to all ini files…
    <Files "*.ini">
        Require all denied
    </Files>

! !! warning "Accès aux fichiers .ini".
    Si le fichier de configuration est placé dans le répertoire i-doit, le .htaccess doit être adapté.
    Il faut ajouter ce code :
    ## Deny access to all ini files...
    <Fichiers "*.ini">.
        Require all denied
    </Files>

| Parameter | Zweck |
| --- | --- |
| **import_rooms** | Auf true gesetzt werden auch Räume mit der Synchronisation angelegt (Standard: false) |
| **defaultCompany** | Hierdurch werden durch die LDAP-Synchronisation hinzugefügte Benutzer automatisch der konfigurierten<br><br>Organisation zugewiesen. (Standard: leer)<br><br>Bsp. <br><br>defaultCompany='i-doit' |
| **deletedUsersBehaviour** | Kann auf **archive**, **delete** und **disable_login** gesetzt werden um Benutzer auf [archiviert bzw. gelöscht](../../grundlagen/lebens-und-dokumentationszyklus.md) zu setzen, die nicht mehr über die Synchronisation gefunden werden. Ein archivierter/gelöschter Benutzer kann sich nicht mehr in i-doit anmelden.<br><br>deletedUserBehavior=archive, setzt den Status des Benutzers auf archiviert  <br>deletedUserBehavior=delete, setzt den Status des Benutzers auf gelöscht  <br>deletedUserBehavior=disable_login, setzt den Status des Benutzers auf normal und Deaktiviere Login auf Ja<br><br>(Standard: **archive)**<br><br>Bsp.<br><br>deletedUsersBehaviour=archive |
| **disabledUsersBehaviour** | Kann auf **archive**, **delete** und **disable_login** gesetzt werden um Benutzer auf [archiviert bzw. gelöscht](../../grundlagen/lebens-und-dokumentationszyklus.md) zu setzen, die nicht mehr über die Synchronisation gefunden werden. Ein archivierter/gelöschter Benutzer kann sich nicht mehr in i-doit anmelden.<br><br>Oder man deaktiviert nur den Login für die User.<br><br>Bsp.<br><br>disabledUsersBehaviour=archive |
| **rooms** | Wie in dem Beispiel kann hier eine Zuweisung von Benutzer zu einem Raum vordefiniert werden, die bei der Synchronisation vorgenommen wird. Die Zuweisung wird über die Kontaktzuweisung ohne eine Rolle realisiert.<br><br>Bsp. <br><br>rooms["Raum B"] = ["Person A", "Person C", "Person D"] |
| **attributes** | Hiermit werden die jeweiligen Felder aus dem Directory mit Attributen in i-doit verknüpft. Diese ergänzen die zugewiesenen Attribute aus dem oberen Teil der Anleitung.<br><br>Bsp.<br><br>attributes[department]=department |
| **autoReactivateUsers** | Ist nur für Novel Directory Services (NDS) und OpenLDAP relevant. Hierdurch werden bei der Synchronisation erst mal alle Benutzer wieder aktiviert und nach dem regulären Prinzip wieder deaktiviert, falls zutreffend.<br><br>Bsp.<br><br>autoReactivateUsers=false |
| **ignoreUsersWithAttributes** | Diese Funktion hilft, eine Synchronisation unerwünschter Verzeichnisobjekte zu verhindern.<br><br>Der Benutzer wird nicht synchronisiert, wenn die ignoreFunctionfür alle ausgewählten Attribute fehlschlägt.<br><br>Bsp.<br><br>ignoreUsersWithAttributes[] = "samaccountname" |
| **ignoreFunction** | Dies kann ein beliebiger Funktionsname sein, der über call_user_func oder die definierten Funktionen aufrufbar ist.<br><br>Definierte Funktionen:<br><br>empty  <br>!empty  <br>isset  <br>!isset<br><br>Bsp,<br><br>ignoreFunction=empty |
| syncEmptyAttributes | Wurden Werte aus Feldern im AD gelöscht/geleert werden diese in i-doit übernommen<br><br>syncEmptyAttributes=true |

| paramètres | but |
| --- | --- |
| **import_rooms** | Réglé sur true, les salles sont également créées avec la synchronisation (par défaut : false) |
| **defaultCompany** | Cela permet d'attribuer automatiquement les utilisateurs ajoutés par la synchronisation LDAP à l'organisation configurée<br><br>. (Par défaut : vide)<br><br>Ex. <br><br>defaultCompany='i-doit' |
| **deletedUsersBehaviour** | Peut être mis à **archive**, **delete** et **disable_login** pour mettre les utilisateurs à [archivé resp. supprimé](../../bases/cycledevieetdocumentation.md) qui ne sont plus trouvés via la synchronisation. Un utilisateur archivé/supprimé ne peut plus se connecter à i-doit.<br><br>deletedUserBehavior=archive, définit le statut de l'utilisateur sur archivé <br>deletedUserBehavior=delete, définit le statut de l'utilisateur sur supprimé <br>deletedUserBehavior=disable_login, définit le statut de l'utilisateur sur normal et Désactiver la connexion sur Oui<br><br>(Par défaut : **archive)**<br><br>Ex.<br><br>deletedUsersBehaviour=archive | |
| **disabledUsersBehaviour** | Peut être mis à **archive**, **delete** et **disable_login** pour mettre les utilisateurs à [archivé ou supprimé](../../bases/cycledevieetdocumentation.md) qui ne sont plus trouvés par la synchronisation. Un utilisateur archivé/supprimé ne peut plus se connecter à i-doit.<br><br>Ou on désactive uniquement le login pour les utilisateurs.<br><br>Ex.<br><br>disabledUsersBehaviour=archive |
| **rooms** | Comme dans l'exemple, il est possible de prédéfinir ici une attribution d'utilisateurs à une salle, qui sera effectuée lors de la synchronisation. L'attribution est réalisée par l'attribution de contact sans un rôle.<br><br>Ex. <br><br>rooms["Salle B"] = ["Personne A", "Personne C", "Personne D"] |
| **attributes** | Ceci permet de lier les champs respectifs du Directory avec des attributs dans i-doit. Ceux-ci complètent les attributs attribués dans la partie supérieure des instructions.<br><br>Ex.<br><br>attributes[department]=department |
| **autoReactivateUsers** | N'est pertinent que pour Novel Directory Services (NDS) et OpenLDAP. Cela permet de réactiver tous les utilisateurs lors de la synchronisation et de les désactiver selon le principe normal, le cas échéant.<br><br>Ex.<br><br>autoReactivateUsers=false |
| **ignoreUsersWithAttributes** | Cette fonction permet d'éviter la synchronisation d'objets de répertoire indésirables.<br><br>L'utilisateur ne sera pas synchronisé si la fonction ignoreFunction échoue pour tous les attributs sélectionnés.<br><br>Ex.<br><br>ignoreUsersWithAttributes[] = "samaccountname" |
| **ignoreFunction** | Cela peut être n'importe quel nom de fonction qui peut être appelé via call_user_func ou les fonctions définies.<br><br>Fonctions définies:<br><br>empty <br>!empty <br>isset <br>!isset<br><br>Bsp,<br><br>ignoreFunction=empty |
| syncEmptyAttributes | Si des valeurs ont été effacées/vidées de champs dans AD, elles sont reprises dans i-doit<br><br>syncEmptyAttributes=true |

### Automatische Zuweisung von Personen zu Personengruppen

### Affectation automatique de personnes à des groupes de personnes

Die automatische Zuweisung sorgt dafür, dass nach dem Login automatisch die für die Personengruppe festgelegten Berechtigungen zugewiesen werden. Damit die Zuweisung erfolgen kann, muss in den **Stammdaten** einer **Personengruppe** das Attribut **LDAP-Gruppe (Mapping)** mit einer validen Gruppe aus LDAP/AD gefüllt werden. Loggt sich ein Benutzer ein oder wird die Synchronisation ausgeführt, werden automatisch auch die dem Benutzerobjekt im Directory zugewiesenen Gruppen abgefragt und mit dem Attribut **LDAP-Gruppe (Mapping)** der Personengruppen verglichen. Gibt es eine Übereinstimmung wird die Gruppe zugewiesen und die weiteren Gruppen abgefragt.

L'attribution automatique veille à ce que les autorisations définies pour le groupe de personnes soient automatiquement attribuées après la connexion. Pour que l'attribution puisse avoir lieu, l'attribut **Groupe LDAP (mapping)** doit être rempli dans les **données de base** d'un **groupe de personnes** avec un groupe valide de LDAP/AD. Si un utilisateur se connecte ou si la synchronisation est effectuée, les groupes affectés à l'objet utilisateur dans le répertoire sont automatiquement interrogés et comparés à l'attribut **Groupe LDAP (mapping)** des groupes de personnes. S'il y a une correspondance, le groupe est attribué et les autres groupes sont interrogés.

[![ldap-autozuweis](../../assets/images/de/automatisierung-und-integration/ldap/1-ldap.png)](../../assets/images/de/automatisierung-und-integration/ldap/1-ldap.png)

[ ![ldap-autozuweis](../../assets/images/fr/automatisation-et-integration/ldap/1-ldap.png)](../../assets/images/fr/automatisation-et-integration/ldap/1-ldap.png)

!!! info "memberOf bei OpenLDAP"
    Die automatische Zuweisung beruht auf der LDAP-Abfrage, in welchen Gruppen ein Benutzer ist. Hierbei spielt das Attribut memberOf eine wichtige Rolle. Dieses Attribut muss als Overlay verfügbar sein, was in vielen Standard-Installationen von OpenLDAP nicht der Fall ist. Gute Artikel für die nötige Konfiguration befinden sich [hier](http://www.adimian.com/blog/2014/10/how-to-enable-memberof-using-openldap/) und [hier](https://technicalnotes.wordpress.com/2014/04/19/openldap-setup-with-memberof-overlay/).

! !! info "memberOf sur OpenLDAP".
    L'attribution automatique se base sur la demande LDAP de savoir dans quels groupes se trouve un utilisateur. L'attribut memberOf joue ici un rôle important. Cet attribut doit être disponible sous forme de superposition, ce qui n'est pas le cas dans de nombreuses installations standard d'OpenLDAP. De bons articles pour la configuration nécessaire se trouvent [ici](http://www.adimian.com/blog/2014/10/how-to-enable-memberof-using-openldap/) et [ici](https://technicalnotes.wordpress.com/2014/04/19/openldap-setup-with-memberof-overlay/).

### Personen und Personengruppen Synchronisieren

### Synchroniser des personnes et des groupes de personnes

Seit Version 1.15 können Personen und Personengruppen aus dem LDAP/AD synchronisiert werden. Dabei werden die Personen Mitglied der Ihnen im LDAP zugewiesenen Gruppe. Solange die Gruppe auch mit dem eingestelltem Filter gefunden wird.<br>
[HIER](../ldap-verzeichnis/so-werden-benutzer-und-gruppen-aus-dem-ad-ldap-importiert.md) geht es zum Artikel.

Depuis la version 1.15, les personnes et les groupes de personnes peuvent être synchronisés à partir du LDAP/AD. Les personnes deviennent alors membres du groupe qui leur a été attribué dans LDAP. Tant que le groupe est trouvé avec le filtre défini.
[ICI](../ldap-verzeichnis/so_utilisateurs-et-groupes-du-ad-ldap-importés.md) pour accéder à l'article.

Voraussetzung ist, dass der Benutzer mit dem der Befehl ausgeführt wird auch die Supervisor Rechte auf die Kategorien ("Gruppenmitgliedschaft" und "Personengruppen > Mitglieder") sowie Supervisor Rechte auf die Objekttypen ("Personen" und "Personengruppen") besitzt.

La condition préalable est que l'utilisateur avec lequel la commande est exécutée possède également les droits de superviseur sur les catégories ("Appartenance à un groupe" et "Groupes de personnes > membres") ainsi que les droits de superviseur sur les types d'objets ("Personnes" et "Groupes de personnes").

[![ldap-sync](../../assets/images/de/automatisierung-und-integration/ldap/2-ldap.png)](../../assets/images/de/automatisierung-und-integration/ldap/2-ldap.png)

[ ![ldap-sync](../../assets/images/fr/automatisation-et-intégration/ldap/2-ldap.png)](../../assets/images/fr/automatisation-et-intégration/ldap/2-ldap.png)

### Logging

### Logging

Unterhalb von log/ im Installationsverzeichnis von i-doit befindet sich ein Logfile mit dem Namen ldap_debug.txt. Das Logging lässt sich unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Logging → LDAP Debug** (de-)aktivieren.

En dessous de log/ dans le répertoire d'installation d'i-doit se trouve un fichier log nommé ldap_debug.txt. Le logging peut être (dé)activé sous **Administration → [Nom du mandant] Administration → Paramètres pour [Nom du mandant] → Logging → LDAP Debug**.

## Den ldap-sync ausführen

## Exécuter ldap-sync

Der ldap-sync lässt sich nur über die Console des Servers ausführen. Um die Console richtig bedienen zu können, sollte der [Artikel](../../automatisierung-und-integration/cli/console/index.md) dazu bekannt sein. Eine einfache Synchronisation ohne die erweiterte Konfiguration dient die Option **ldap-sync**. Eine Beschreibung der Parameter ist im entsprechenden [Kapitel](../../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md) zu finden.

La synchronisation ldap ne peut être exécutée que via la console du serveur. Pour pouvoir utiliser correctement la console, il faut connaître le [article](../../automatisation-et-intégration/cli/console/index.md) à ce sujet. Une synchronisation simple sans la configuration avancée sert l'option **ldap-sync**. Une description des paramètres se trouve dans le [chapitre](../../automatisation-et-intégration/cli/console/options-et-paramètres-de-la-console.md) correspondant.

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```shell
sudo -u www-data php console.php ldap-sync --user admin --password admin --tenantId 1 --verbose --ldapServerId 1
```