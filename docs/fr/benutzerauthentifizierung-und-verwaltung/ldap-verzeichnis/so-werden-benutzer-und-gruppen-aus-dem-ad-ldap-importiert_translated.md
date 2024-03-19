<!-- TRANSLATED by md-translate -->
# So werden Benutzer und Gruppen aus dem AD/LDAP importiert (erweiterte Konfiguration)

# Comment importer des utilisateurs et des groupes depuis AD/LDAP (configuration avancée)

Der Import von Benutzern und Gruppen aus dem Active Directory in i-doit findet immer über den [console.php](../../automatisierung-und-integration/cli/console/index.md) Befehl statt. Dazu benutzen wir das Kommando [ldap-sync](../../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#ldap-sync).<br>
Am Ende des Artikels ist ein komplettes Beispiel der erstellten erweiterten Konfiguration zu finden.

L'importation d'utilisateurs et de groupes depuis Active Directory dans i-doit se fait toujours via la commande [console.php](../../automatisation-et-intégration/cli/console/index.md). Pour cela, nous utilisons la commande [ldap-sync](../../automatisation-et-intégration/cli/console/options-et-paramètres-de-la-console.md#ldap-sync).<br>
Un exemple complet de la configuration avancée créée est disponible à la fin de l'article.

Der Artikel zur Konfiguration vom [LDAP-Verzeichnis/Active Directory](../ldap-verzeichnis/index.md) sollte vorher jedem bekannt sein.<br>
Wir werden hier verschiedene LDAP Filter und eine komplette [ldap.ini Konfiguration](../../automatisierung-und-integration/cli/console/verwendung-von-konfigurationsdateien-fuer-console-commands.md#beispiel-f%C3%BCr-den-command-ldap-sync) durchgehen.<br>
Ziel ist es alle Benutzer und Gruppen aus dem AD/LDAP mit i-doit zu synchronisieren, sowie deren Mitgliedschaften.

L'article sur la configuration de [l'annuaire LDAP/Active Directory](../ldap-verzeichnis/index.md) devrait être connu de tous auparavant.<br>
Nous allons ici passer en revue différents filtres LDAP et une configuration complète de [ldap.ini](../../automatisation-et-intégration/cli/console/utilisation-des-fichiers-de-configuration-pour-console-commands.md#exemple-f%C3%BCr-le-command-ldap-sync).<br>
L'objectif est de synchroniser tous les utilisateurs et groupes de l'AD/LDAP avec i-doit, ainsi que leurs affiliations.

Ich setzte Grundkenntnisse im Bezug auf AD/LDAP voraus.<br>
In diesen Beispielen wird für Personen die `objectClass = user` verwendet.<br>
Für Gruppen wird die `objectClass = group` verwendet.<br>
Wenn man nicht alle Benutzer oder Gruppen der Domäne synchronisieren will muss unter `Nach Benutzern suchen in (OU)\*` der DN/CN einer OU bzw. eines Containers eingetragen werden.

Je suppose que vous avez des connaissances de base sur AD/LDAP.
Dans ces exemples, la `objectClass = user` est utilisée pour les personnes.<br>
Pour les groupes, on utilise la `objectClass = group`.<br>
Si l'on ne veut pas synchroniser tous les utilisateurs ou groupes du domaine, il faut saisir le DN/CN d'une OU ou d'un conteneur sous `Recherche d'utilisateurs dans (OU)\*`.

[![ldap_personen-suchen](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/1-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/1-ldap-bg.png)

[ ![ldap_personnes-recherche](../../assets/images/fr/automatisation-et-intégration/ldap/utilisateurs-et-groupes/1-ldap-bg.png)](../../assets/images/fr/automatisation-et-intégration/ldap/utilisateurs-et-groupes/1-ldap-bg.png)

## Konfiguration der Filter

## Configuration des filtres

---

### Import von allen Benutzern

### Importation de tous les utilisateurs

Hier werden nur Benutzer synchronisiert, das bedeutet auch, dass keine Gruppen erstellt werden. Damit nur Benutzer synchronisiert werden muss der Filter so aussehen:

Ici, seuls les utilisateurs sont synchronisés, ce qui signifie également qu'aucun groupe n'est créé. Pour que seuls les utilisateurs soient synchronisés, le filtre doit ressembler à ceci :

[![ldap_personen-importb](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/2-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/2-ldap-bg.png)

[ ![ldap_personnes-importb](../../assets/images/fr/automatisation-et-intégration/ldap/utilisateurs-et-groupes/2-ldap-bg.png)](../../assets/images/fr/automatisation-et-intégration/ldap/utilisateurs-et-groupes/2-ldap-bg.png)

```ini
(objectClass=user)
```

---

### Import von Benutzern mit bestimmten Attributen

### Importation d'utilisateurs avec certains attributs

Wir möchten hier auf ein Attribut filtern und nur diesen Benutzer synchronisieren.<br>
Nur der Benutzer der im Attribut `sAMAccountName` den Wert `MichaelO` hat soll synchronisiert werden.

Nous souhaitons filtrer sur un attribut et synchroniser uniquement cet utilisateur.
Seul l'utilisateur qui a la valeur `MichaelO` dans l'attribut `sAMAccountName` doit être synchronisé.

[![ldap_personen-importba](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/3-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/3-ldap-bg.png)

[ ![ldap_personnes-importba](../../assets/images/fr/automatisation-et-intégration/ldap/utilisateurs-et-groupes/3-ldap-bg.png)](../../assets/images/fr/automatisation-et-intégration/ldap/utilisateurs-et-groupes/3-ldap-bg.png)

```ini
(&(objectClass=user)(sAMAccountName=MichaelO))
```

---

### Import von allen Benutzern und allen Gruppen

### Importation de tous les utilisateurs et de tous les groupes

Hier werden Benutzer und Gruppen erstellt außerdem werden die Benutzer den jeweiligen Gruppen zugewiesen.<br>
Damit Benutzer und Gruppen synchronisiert werden muss der Filter so aussehen:

C'est ici que sont créés les utilisateurs et les groupes et que les utilisateurs sont attribués aux groupes correspondants.
Pour que les utilisateurs et les groupes soient synchronisés, le filtre doit ressembler à ceci :

[![ldap_personen-importbg](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/4-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/4-ldap-bg.png)

[ ![ldap_personnes-importbg](../../assets/images/fr/automatisation et intégration/ldap/utilisateurs et groupes/4-ldap-bg.png)](../../assets/images/fr/automatisation et intégration/ldap/utilisateurs et groupes/4-ldap-bg.png)

```ini
(|(objectClass=user)(objectClass=group))
```

---

### Import von Benutzern die Mitglied der Gruppe idoit-read sind

### Importation des utilisateurs qui sont membres du groupe idoit-read

Damit nur Benutzer die Mitglied der Gruppe `idoit-read` sind synchronisiert werden muss der Filter so aussehen:

Pour que seuls les utilisateurs membres du groupe `idoit-read` soient synchronisés, le filtre doit ressembler à ceci :

[![ldap_personen-importbmg](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/5-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/5-ldap-bg.png)

[ ![ldap_personnes-importbmg](../../assets/images/fr/automatisation-et-intégration/ldap/utilisateurs-et-groupes/5-ldap-bg.png)](../../assets/images/fr/automatisation-et-intégration/ldap/utilisateurs-et-groupes/5-ldap-bg.png)

```ini
(&(objectClass=user)(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test))
```

---

### Import von Benutzern die Mitglied der Gruppe idoit-read und idoit-write sind

### Importation des utilisateurs qui sont membres des groupes idoit-read et idoit-write

Damit nur Benutzer die Mitglied der Gruppe `idoit-read` sind synchronisiert werden muss der Filter so aussehen:

Pour que seuls les utilisateurs membres du groupe `idoit-read` soient synchronisés, le filtre doit ressembler à ceci :

[![ldap_personen-importbmgrw](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/6-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/6-ldap-bg.png)

[ ![ldap_personnes-importbmgrw](../../assets/images/fr/automatisation et intégration/ldap/utilisateurs et groupes/6-ldap-bg.png)](../../assets/images/fr/automatisation et intégration/ldap/utilisateurs et groupes/6-ldap-bg.png)

```ini
(&(objectClass=user)(&(memberOf=CN=idoit-read,CN=Users,DC=synetics,DC=test)(memberOf=CN=idoit-write,CN=Users,DC=synetics,DC=test)))
```

---

### Import von Benutzern und Gruppen die unterhalb einer Nested Group sind

### Importation d'utilisateurs et de groupes inférieurs à un groupe niché

Ich habe eine Gruppe idoit in der die i-doit Gruppen `idoit-read` und `idoit-write` Mitglied sind. Diese beiden Gruppen sollen synchronisiert werden. Mit diesem Filter kann ich direkt die Gruppen und die Benutzer anlegen lassen.<br>
Die Gruppe idoit wird dadurch nicht erstellt, es werden nur die Gruppen unterhalb der Gruppe erstellt. Außerdem werden die Gruppen nicht miteinander verknüpft, da Gruppen keinen Gruppen als Mitglied haben können.

J'ai un groupe idoit dans lequel les groupes i-doit `idoit-read` et `idoit-write` sont membres. Ces deux groupes doivent être synchronisés. Avec ce filtre, je peux faire créer directement les groupes et les utilisateurs.<br>
Cela ne crée pas le groupe idoit, seuls les groupes en dessous de celui-ci sont créés. De plus, les groupes ne sont pas liés entre eux, car les groupes ne peuvent pas avoir un groupe comme membre.

[![ldap_personen-importbgng](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/7-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/7-ldap-bg.png)

[ ![ldap_personnes-importbgng](../../assets/images/fr/automatisation et intégration/ldap/utilisateurs et groupes/7-ldap-bg.png)](../../assets/images/fr/automatisation et intégration/ldap/utilisateurs et groupes/7-ldap-bg.png)

```ini
(memberOf:1.2.840.113556.1.4.1941:=CN=idoit,CN=Users,DC=synetics,DC=test)
```

---

### So filtere ich Benutzer mit mehr als einer objectClass

### Pour filtrer les utilisateurs avec plus d'une objectClass

Wenn sich die Benutzer beispielsweise dadurch unterscheiden, dass sie zwei `objectClass`-Attribute haben (z.B. Person und Benutzer), würde ich so den Filter aufbauen:

Si les utilisateurs se distinguent par exemple par le fait qu'ils ont deux attributs `objectClass` (par ex. personne et utilisateur), c'est ainsi que je construirais le filtre :

[![ldap_personen-filter](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/8-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/8-ldap-bg.png)

[ ![ldap_personnes-filter](../../assets/images/fr/automatisation-et-intégration/ldap/utilisateurs-et-groupes/8-ldap-bg.png)](../../assets/images/fr/automatisation-et-intégration/ldap/utilisateurs-et-groupes/8-ldap-bg.png)

```ini
(&(objectClass=person)(objectClass=user))
```

---

## Welche weiteren Attribute über die ldap.ini importiert werden können

## Quels autres attributs peuvent être importés via ldap.ini

* Der Beitrag [ldap.ini Konfiguration](../../automatisierung-und-integration/cli/console/verwendung-von-konfigurationsdateien-fuer-console-commands.md#beispiel-f%C3%BCr-den-command-ldap-sync) sollte bekannt sein.
* Es kann eine .ini Datei für den Import erstellt werden, mit dieser können weitere Attribute importiert werden.
* Die [Attributerweiterungen](../../administration/verwaltung/import-und-schnittstellen/ldap/attributerweiterung.md) sollte bereits Konfiguriert sein.
* Wir verwenden den .ini Abschnitt "additional"

* La contribution [configuration ldap.ini](../../automatisation-et-intégration/cli/console/utilisation-de-fichiers-de-configuration-pour-console-commands.md#exemple-f%C3%BCr-du-command-ldap-sync) devrait être connue.
* Il est possible de créer un fichier .ini pour l'importation, avec lequel d'autres attributs peuvent être importés.
* Les [extensions d'attributs](../../administration/administration/importation et interfaces/ldap/extension d'attributs.md) devraient déjà être configurées.
* Nous utilisons la section .ini "additional".

### Die Konfiguration der Attributerweiterungen

### La configuration des extensions d'attributs

[![ldap_personen-config](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/9-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/9-ldap-bg.png)

[ ![ldap_personnes-config](../../assets/images/fr/automatisation et intégration/ldap/utilisateurs et groupes/9-ldap-bg.png)](../../assets/images/fr/automatisation et intégration/ldap/utilisateurs et groupes/9-ldap-bg.png)

Hier noch mal als Tabelle

Voici un autre tableau

| Feldname | Attribut | Mapping mit |
| --- | --- | --- |
| Feldname 1 | objectSid | Key: custom_1 |
| Feldname 2 | objectGUID | Key: custom_2 |
| Feldname 3 | - | Key: custom_3 |
| Feldname 4 | - | Key: custom_4 |
| Feldname 5 | - | Key: custom_5 |
| Feldname 6 | - | Key: custom_6 |
| Feldname 7 | - | Key: custom_7 |
| Feldname 8 | - | Key: custom_8 |

| nom du champ | attribut | mapping avec |
| --- | --- | --- |
| nom de champ 1 | objectSid | clé : custom_1 |
| nom de champ 2 | objectGUID | clé : custom_2 |
| nom de champ 3 | - | Key : custom_3 |
| nom de champ 4 | - | Key : custom_4 |
| nom de champ 5 | - | Key : custom_5 |
| nom de champ 6 | - | Key : custom_6 |
| nom de champ 7 | - | Key : custom_7 |
| nom de champ 8 | - | Key : custom_8 |

---

### Benutzer statisch Räumen zuordnen

### Affecter statiquement des utilisateurs à des salles

In der `ldap.ini` können feste Zuweisungen von Benutzern zu Räumen eingetragen werden.<br>
Die Benutzer werden dann dem zugewiesenem Raum als Kontakt zugewiesen.<br>
(Die Räume müssen vorher in i-doit existieren!)

Dans `ldap.ini`, il est possible de saisir des affectations fixes d'utilisateurs à des salles.<br>
Les utilisateurs sont alors affectés à la salle attribuée en tant que contact. <br>
(Les salles doivent exister au préalable dans i-doit !)

```ini
;Attach users to Rooms statically
rooms["Room"]=["Username1","Username2"]
```

---

### Benutzer als Kontakt zu Räumen zuordnen

### Affecter des utilisateurs comme contacts aux salles

Es ist möglich, über die Funktion `import_rooms` Personen als Kontakt zu Räumen zuzuordnen.
Dazu muss die Option auf `true` gesetzt werden.
Räume werden automatisch angelegt, allerdings ohne Standort.

Il est possible d'attribuer des personnes comme contact à des salles via la fonction `import_rooms`.
Pour cela, l'option doit être réglée sur `true`.
Les salles sont créées automatiquement, mais sans emplacement.

```ini
;Import rooms from ldap
import_rooms=true
attributes[office]=physicalDeliveryOfficeName
```

!!! note "Bug"
    Aktuell muss das AAttribut in Kleinbuchstaben geschrieben werden `physicaldeliveryofficename`

! !! note "Bug"
    Actuellement, l'attribut A doit être écrit en minuscules `physicaldeliveryofficename`.

---

### So importiere ich Attribute aus dem LDAP

### Comment importer des attributs depuis le LDAP

Ich möchte weitere LDAP Attribute zu Benutzern importieren und habe schon die [Attributerweiterungen](../../administration/verwaltung/import-und-schnittstellen/ldap/attributerweiterung.md) Konfiguriert.<br>
Nun muss ich noch die Konfigurationsdatei des LDAP-Sync konfigurieren (ldap.ini).

Je souhaite importer d'autres attributs LDAP pour les utilisateurs et j'ai déjà configuré les [extensions d'attributs](../../administration/administration/importation et interfaces/ldap/extension d'attributs.md).<br>
Maintenant, je dois encore configurer le fichier de configuration de la synchronisation LDAP (ldap.ini).

Die verfügbaren Attribute finden Sie in Ihrer AD-Konfiguration.
Hieraus kann ich mir die Attribute suchen die ich zusätzlich Synchronisieren möchte.<br>
Welche Attribute zu welchem Feld gehören kann man über Google finden oder z.B. hier [SelfADSI externer Link](http://www.selfadsi.de/user-attributes.htm).

Vous trouverez les attributs disponibles dans votre configuration AD.
A partir de là, je peux rechercher les attributs que je souhaite synchroniser en plus.<br>
Vous pouvez trouver quels attributs appartiennent à quel champ via Google ou par exemple ici [SelfADSI lien externe](http://www.selfadsi.de/user-attributes.htm).

Ich nehme mir als Beispiel folgende Attribute heraus und füge Sie in die ldap.ini ein:

Je prends comme exemple les attributs suivants et je les insère dans le fichier ldap.ini :

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

Comme on peut le voir ici, j'ai par exemple mappé l'attribut department des données de base avec l'attribut LDAP department.<br>
J'ai également utilisé l'extension d'attribut. La structure pour, par exemple <br>

```ini
attributes[custom_1]=objectSid
```

wäre wie folgt:

serait la suivante :

`attributes` sagt dem handler er soll das i-doit Attribut [custom_1] mit dem LDAP Attribut `objectSid` synchronisieren.<br>
Nachdem die Benutzer synchronisiert wurden finde ich folgende Stammdaten vor:

`attributes` dit au handler de synchroniser l'attribut i-doit [custom_1] avec l'attribut LDAP `objectSid`.<br>
Après la synchronisation des utilisateurs, je trouve les données de base suivantes :

[![ldap_personen-sync](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/10-ldap-bg.png)](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/10-ldap-bg.png)

[ ![ldap_personnes-sync](../../assets/images/fr/automatisation-et-integration/ldap/utilisateurs-et-groupes/10-ldap-bg.png)](../../assets/images/fr/automatisation-et-integration/ldap/utilisateurs-et-groupes/10-ldap-bg.png)

---

### Weitere Optionen

### Autres options

#### autoReactivateUsers

#### autoReactivateUsers

Um einen sauberen Start zu haben, setzt diese Einstellung automatisch alle Benutzer vor der Synchronisierung auf den Status normal.

Pour avoir un démarrage propre, ce paramètre règle automatiquement tous les utilisateurs sur le statut normal avant la synchronisation.

Dies ist hilfreich, falls Benutzer versehentlich vorher archiviert oder gelöscht wurden.<br>

Ceci est utile si des utilisateurs ont été archivés ou supprimés par erreur auparavant.<br>

!!! info
    Wir sollten uns bewusst sein, dass es mit NDS oder OpenLDAP derzeit nicht möglich ist, gelöschte Benutzer zu identifizieren, um sie später zu archivieren. Benutzer sind dann immer aktiviert!

! !! info
    Nous devons être conscients qu'avec NDS ou OpenLDAP, il n'est actuellement pas possible d'identifier les utilisateurs supprimés afin de les archiver ultérieurement. Les utilisateurs sont alors toujours activés !

```ini
autoReactivateUsers=false
```

---

#### ignoreUsersWithAttributes

#### ignoreUsersWithAttributes

Deaktiviere die Synchronisierung für Benutzer mit Attributen, die gegen ignoreFunction geprüft wurden.

Désactiver la synchronisation pour les utilisateurs dont les attributs ont été vérifiés par rapport à ignoreFunction.

Diese Funktion hilft, eine Synchronisation unerwünschter Verzeichnisobjekte zu verhindern.<br>
Der Benutzer wird nicht synchronisiert, wenn ignoreFunction für ALLE ausgewählten Attribute fehlschlägt.

Cette fonction permet d'éviter la synchronisation d'objets de répertoire non souhaités.<br>
L'utilisateur ne sera pas synchronisé si ignoreFunction échoue pour TOUS les attributs sélectionnés.

Standardmäßig steht hier `ignoreUsersWithAttributes=[]` somit wird nichts ignoriert.

Par défaut, il y a `ignoreUsersWithAttributes=[]` donc rien n'est ignoré.

Wir möchten nur Benutzer importieren bei denen die Attribute `samaccountname`, `sn`, `givenname` und `mail` nicht leer sind.<br>
Somit müsste die Konfiguration für `ignoreUsersWithAttributes` so aussehen:

Nous souhaitons importer uniquement les utilisateurs pour lesquels les attributs `samaccountname`, `sn`, `givenname` et `mail` ne sont pas vides.<br>
La configuration pour `ignoreUsersWithAttributes` devrait donc ressembler à ceci :

```ini
ignoreUsersWithAttributes[] = "samaccountname"
ignoreUsersWithAttributes[] = "sn"
ignoreUsersWithAttributes[] = "givenname"
ignoreUsersWithAttributes[] = "mail"
```

---

#### ignoreFunction

#### ignoreFunction

Ist die Prüffunktion zum Ignorieren von Benutzern (siehe `ignoreUsersWithAttributes`)<br>
Dies kann ein beliebiger Funktionsname sein, der über `call_user_func` oder die definierten Funktionen aufrufbar ist.

Est la fonction de contrôle pour ignorer les utilisateurs (voir `ignoreUsersWithAttributes`)<br>.
Il peut s'agir de n'importe quel nom de fonction, qui peut être appelé via `call_user_func` ou les fonctions définies.

definierte functions:

fonctions définies :

```ini
empty
!empty
isset
!isset
```

Beispiel: `empty` würde als empty($value) ausgeführt werden

Exemple : `empty` serait exécuté comme empty($value)

Wir prüfen auf leere Attribute mit

Nous vérifions les attributs vides avec

```ini
ignoreFunction=empty
```

#### Synchronisiere leere Attribute

#### Synchroniser les attributs vides

Diese Option entscheidet, ob geleerte Attribute aus dem AD mit i-doit synchronisiert werden sollen oder nicht.

Cette option permet de décider si les attributs vidés de l'AD doivent être synchronisés avec i-doit ou non.

```ini
syncEmptyAttributes=true
```

---

### Die komplette ldap.ini

### Le fichier ldap.ini complet

Hier eine fertige ini. Datei diese kann natürlich bearbeitet werden.<br>
Der erste Teil der ldap.ini wird von [Verwendung von Konfigurationsdateien für Console Commands](../../automatisierung-und-integration/cli/console/verwendung-von-konfigurationsdateien-fuer-console-commands.md#beispiel-f%C3%BCr-den-command-ldap-sync) bezogen.

Voici un fichier ini. Ce fichier peut bien sûr être édité.<br>
La première partie de ldap.ini provient de [Utilisation des fichiers de configuration pour les commandes de console](../../automatisation-et-intégration/cli/console/utilisation-de-fichiers-de-configuration-pour-commandes-de-console.md#exemple-f%C3%BCr-le-command-ldap-sync).

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

Pour que le fichier .ini soit utilisé, il doit être indiqué avec le paramètre `-c`.

```shell
sudo -u www-data php console.php ldap-sync -c /var/www/html/i-doit/src/handler/config/ldap-sync.ini
```

[ldap.ini :material-file-download:](../../assets/images/de/automatisierung-und-integration/ldap/benutzer-und-gruppen/example-ldap.ini){ .md-button .md-button--primary }

[ldap.ini :material-file-download :](../../assets/images/fr/automatisierung-et-integration/ldap/utilisateurs-et-groupes/example-ldap.ini){ .md-button .md-button--primary }