<!-- TRANSLATED by md-translate -->
# DNS Documentation

# Documentation DNS

Das "DNS Dokumentation" Add-on wurde als erstes [Add-on](./index.md) mit dem [Add-on Packager](./add-on-packager.md) entworfen und erstellt. Der Gedanke hinter der DNS Dokumentation ist, DNS-Einträge einfach in i-doit zu dokumentieren. Dabei werden über das Add-on die nötigen Objekttypen und Kategorien erstellt.

Le module complémentaire "Documentation DNS" a été conçu et créé comme premier [Add-on](./index.md) avec le [Add-on Packager](./add-on-packager.md). L'idée derrière la documentation DNS est de documenter facilement les enregistrements DNS dans i-doit. Pour ce faire, les types d'objets et les catégories nécessaires sont créés via l'add-on.

Installation und Lizenz

Installation et licence

Das "DNS Dokumentation" Add-on wird wie jedes Add-on über das [Admin Center](../administration/admin-center.md) installiert. Das Add-on ist nicht lizenzpflichtig. Es kann allerdings nur mit der pro-Variante genutzt werden.

L'add-on "Documentation DNS" s'installe comme tout add-on via le [Admin Center](../administration/admin-center.md). L'add-on n'est pas soumis à une licence. Il ne peut toutefois être utilisé qu'avec la variante pro.

**Inhaltsverzeichnis**

**Table des matières**

* 1[Inhalt des Add-ons](#inhalt-des-add-ons)
* 2[DNS Server](#dns-server)
* 3[DNS Zone](#dns-zone)
    - 3.1[Autorisierende Namsserver](#autorisierende-namsserver)
    - 3.2[DNS Records](#dns-records)
    - 3.3[SOA Records](#soa-records)

* 1[Contenu de l'add-on](#contenu-des-add-ons)
* 2[Serveur DNS](#dns-server)
* 3[Zone DNS](#dns-zone)
    - 3.1[Serveurs de noms autorisés](#serveur-de-noms-autorisés)
    - 3.2[DNS Records](#dns-records)
    - 3.3[SOA Records](#soa-records)

## Inhalt des Add-ons

## Contenu de l'add-on

Das "DNS-Dokumentation" Add-on bringt die folgenden Objekttypen, Kategorien und Dialog+ Einträge mit:

L'add-on "Documentation DNS" apporte les types d'objets, catégories et entrées Dialog+ suivants :

| Objekttyp | Kategorie | Dialog+ Feld | Dialog+ Einträge |
| --- | --- | --- | --- |
| DNS Server | DNS Zones | -  | -  |
| DNS Zone | Autorisierende Namesserver | Rolle | Primary |
|     |     |     | Secondary |
|     | DNS Records | Class | IN (Internet) |
|     |     |     | CH (Chaosnet) |
|     |     |     | HS (Hesoid) |
|     |     | Type | A   |
|     |     |     | AAAA |
|     |     |     | NS  |
|     |     |     | CNAME |
|     |     |     | MX  |
|     |     |     | PTR |
|     |     |     | TXT |
|     |     |     | SRV |
|     |     |     | SOA |
|     | SOA Record | Class | IN (Internet) |
|     |     |     | CH (Chaosnet) |
|     |     |     | HS (Hesoid) |

| Type d'objet | Catégorie | Dialogue+ Champ | Dialogue+ Entrées |
| --- | --- | --- | --- |
| Serveur DNS | Zones DNS | - | - |
| Zone DNS | Serveur de noms autorisant | Rôle | Primaire |
| | | Secondary |
| | DNS Records | Class | IN (Internet) |
| | | CH (Chaosnet) |
| | | HS (Hesoid) |
| | Type | A |
| | | AAAA |
| | | NS |
| | | CNAME |
| | | MX |
| | | PTR |
| | | TXT |
| | | SRV |
| | | SOA |
| | SOA Record | Class | IN (Internet) |
| | | CH (Chaosnet) |
| | | HS (Hesoid) |

## DNS Server

## Serveur DNS

Der ausgelieferte Objekttyp "DNS Server" orientiert sich an einem normalen Server Objekt, wobei noch die zusätzliche Kategorie "DNS Zones" zugewiesen ist.
In dem Add-on wird ein expliziter Objekttyp genutzt, damit eine problemlose Integration gewährleistet werden kann. Die automatisch zugewiesene Kategorie "DNS Zones" beinhaltet eine Übersicht aller zugewiesener DNS Zonen. (Hierbei handelt es sich um eine rückwärtige Kategorie, weswegen die Informationen hier nicht bearbeitet werden können!)

Le type d'objet "serveur DNS" livré s'oriente vers un objet serveur normal, auquel est encore attribuée la catégorie supplémentaire "DNS Zones".
Dans le module complémentaire, un type d'objet explicite est utilisé afin de garantir une intégration sans problème. La catégorie "DNS Zones" attribuée automatiquement contient un aperçu de toutes les zones DNS attribuées. (Il s'agit ici d'une catégorie arrière, c'est pourquoi les informations ne peuvent pas être éditées ici !)

[![DNS Server](../assets/images/de/i-doit-pro-add-ons/dns-documentation/1-dns.png)](../assets/images/de/i-doit-pro-add-ons/dns-documentation/1-dns.png)

[ ![Serveur DNS](../assets/images/fr/i-doit-pro-add-ons/dns-documentation/1-dns.png)](../assets/images/fr/i-doit-pro-add-ons/dns-documentation/1-dns.png)

## DNS Zone

## Zone DNS

Im neuen Objekttypen "DNS Zone" werden alle Informationen zu den Zonen Einträgen dokumentiert.
Hier stehen drei zusätzliche Kategorien zur Verfügung:

Dans le nouveau type d'objet "Zone DNS", toutes les informations sur les enregistrements de zone sont documentées.
Trois catégories supplémentaires sont disponibles ici :

* Autorisierende Namesserver → hier werden die zugehörigen Namesserver eingetragen und können zwischen "Primary" und "Secondary" unterschieden werden
* DNS Records → hier können die "einzelnen Zeilen" einer Zonendatei eingetragen werden. Diese können über die mitgelieferten "Types" passend erstellt werden
* SOA Record → hier kann der SOA-Record explizit dokumentiert werden.

* Serveurs de noms d'autorisation → les serveurs de noms correspondants sont inscrits ici et peuvent être différenciés entre "Primary" et "Secondary".
* DNS Records → les "lignes individuelles" d'un fichier de zone peuvent être inscrites ici. Celles-ci peuvent être créées de manière appropriée à l'aide des "Types" fournis.
* SOA Record → ici, le SOA Record peut être documenté explicitement.

### Autorisierende Namsserver

### Serveurs de noms d'autorisation

Bei der Kategorie "Autorisierende Namesserver" handelt es sich um eine Multi-Value Kategorie.
[![Autorisierende Namsserver](../assets/images/de/i-doit-pro-add-ons/dns-documentation/1-dns.png)](../assets/images/de/i-doit-pro-add-ons/dns-documentation/1-dns.png)

La catégorie "Serveurs de noms autorisés" est une catégorie multi-valeurs.
[ ![Serveurs de noms autorisés](../assets/images/fr/i-doit-pro-add-ons/dns-documentation/1-dns.png)](../assets/images/fr/i-doit-pro-add-ons/dns-documentation/1-dns.png)

In einem Eintrag werden zwei Informationen dokumentiert:

Deux informations sont documentées dans une entrée :

1. DNS Server Objekt
2. Rolle

1. objet serveur DNS
2. rôle

[![DNS Server Objekt](../assets/images/de/i-doit-pro-add-ons/dns-documentation/1-dns.png)](../assets/images/de/i-doit-pro-add-ons/dns-documentation/1-dns.png)

[ ![Objet serveur DNS](../assets/images/fr/i-doit-pro-add-ons/dns-documentation/1-dns.png)](../assets/images/fr/i-doit-pro-add-ons/dns-documentation/1-dns.png)

Für das Attribut "DNS Server Objekt" steht ein Objektbrowser zur Verfügung. Hier kann dann der entsprechende DNS Server ausgewählt werden. Zusätzlich kann dann pro Sever auch die entsprechende "Rolle" angegeben werden. Zu Verfügung stehen hier → Primary und Secondary

Un navigateur d'objets est disponible pour l'attribut "Objet serveur DNS". On peut y sélectionner le serveur DNS correspondant. De plus, le "rôle" correspondant peut être indiqué pour chaque serveur. Sont disponibles ici → Primary et Secondary

### DNS Records

### Enregistrements DNS

Auch bei der Kategorie "DNS Records" handelt es sich um eine Multi-Value Kategorie.
[![DNS Records](../assets/images/de/i-doit-pro-add-ons/dns-documentation/1-dns.png)](../assets/images/de/i-doit-pro-add-ons/dns-documentation/1-dns.png)

La catégorie "DNS Records" est également une catégorie multi-valeurs.
[ ![DNS Records](../assets/images/fr/i-doit-pro-add-ons/dns-documentation/1-dns.png)](../assets/images/fr/i-doit-pro-add-ons/dns-documentation/1-dns.png)

Die Kategorie wurde als Multi-Value Kategorie entworfen, damit eine DNS Datei "Zeile für Zeile" dokumentiert werden kann. Dies ermöglicht eine Übersicht aller Einträge.

La catégorie a été conçue comme une catégorie multi-valeurs, afin qu'un fichier DNS puisse être documenté "ligne par ligne". Cela permet d'avoir une vue d'ensemble de toutes les entrées.

[![DNS Records](../assets/images/de/i-doit-pro-add-ons/dns-documentation/1-dns.png)](../assets/images/de/i-doit-pro-add-ons/dns-documentation/1-dns.png)

[ ![DNS Records](../assets/images/fr/i-doit-pro-add-ons/dns-documentation/1-dns.png)](../assets/images/fr/i-doit-pro-add-ons/dns-documentation/1-dns.png)

Ein Eintrag setzt sich den Textfeldern "Name", "Time to live", "Data" und den Dialog+ Feldern "Class" und Type" zusammen. Für die Dialog+ Felder "Class" und "Type" werden vordefinierte Einträge mitgeliefert.

Une entrée se compose des champs de texte "Name", "Time to live", "Data" et des champs Dialog+ "Class" et "Type". Des entrées prédéfinies sont fournies pour les champs Dialog+ "Class" et "Type".

### SOA Records

### SOA Records

Zusätzlich zu den einfachen DNS Records gibt es die Kategorie "SOA Records". Diese Kategorie ermöglicht es den sogenannten "Start of Authority" detaillierter zu dokumentieren. Da der SOA-Record einzigartig ist, steht die Kategorie auch nicht als Multi-Value Kategorie zur Verfügung.

En plus des enregistrements DNS simples, il existe la catégorie "SOA Records". Cette catégorie permet de documenter de manière plus détaillée ce que l'on appelle le "Start of Authority". Comme l'enregistrement SOA est unique, la catégorie n'est pas non plus disponible en tant que catégorie multi-valeurs.

[![SOA Records](../assets/images/de/i-doit-pro-add-ons/dns-documentation/1-dns.png)](../assets/images/de/i-doit-pro-add-ons/dns-documentation/1-dns.png)

[ ![SOA Records](../assets/images/fr/i-doit-pro-add-ons/dns-documentation/1-dns.png)](../assets/images/fr/i-doit-pro-add-ons/dns-documentation/1-dns.png)

Abgesehen vom Dialog+ Feld "Class" stehen alle Felder als Textfelder zur Verfügung. Hier können alle notwendigen Informationen des SOA-Records dokumentiert werden.

Hormis le champ Dialog+ "Class", tous les champs sont disponibles sous forme de champs de texte. Toutes les informations nécessaires de l'enregistrement SOA peuvent être documentées ici.