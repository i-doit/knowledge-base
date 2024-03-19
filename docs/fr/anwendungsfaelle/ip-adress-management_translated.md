<!-- TRANSLATED by md-translate -->
# IP Address Management (IPAM)

# Gestion des adresses IP (IPAM)

Ein wesentliches Element einer [IT-Dokumentation](../glossar.md) ist die Pflege von IP-Netzen, -Adressen und diversen Netzwerk-Komponenten. Dieses wird IP Address Management, kurz IPAM, genannt.

Un élément essentiel d'une [documentation informatique](../glossar.md) est la gestion des réseaux et des adresses IP ainsi que des divers composants du réseau. C'est ce qu'on appelle la gestion des adresses IP, ou IPAM.

## Überblick

## vue d'ensemble

[IPAM](https://en.wikipedia.org/wiki/IP_address_management) beinhaltet verschiedene Bereiche, die im folgenden näher erläutert werden. i-doit verfügt bereits in der Standard-Installation über alle [Objekttypen](../glossar.md) und [Kategorien](../glossar.md), um ebendiese Bereiche abzudecken. Dazu zählen unter anderem folgende Objekttypen:

[IPAM](https://en.wikipedia.org/wiki/IP_address_management) contient différents domaines qui sont expliqués plus en détail ci-dessous. i-doit dispose déjà dans l'installation standard de tous les [types d'objets](../glossar.md) et [catégories](../glossar.md) pour couvrir ces mêmes domaines. Il s'agit entre autres des types d'objets suivants :

* **Layer-3-Netz**
* **Layer-2-Netz**
* **Supernet**

**Réseau de la couche 3
**Réseau de la couche 2
* **Supernet**

Dabei konzentrieren wir uns vor allem auf diese Kategorien:

Nous nous concentrons principalement sur ces catégories :

* **Hostadresse**
* **Netz** (Kategorie-Ordner)
* **Netzwerk** (Kategorie-Ordner)

* **adresse de l'hôte**
**Réseau** (dossier de catégorie)
**Réseau** (dossier de catégorie)

Als aktive Netz-Komponenten liefert i-doit beispielsweise die Objekttypen **Switch** und **Router** mit, als aktive Endgeräte **Server**, **Client**, **VoIP Telefon** u.v.m.

Comme composants actifs du réseau, i-doit fournit par exemple les types d'objets **Switch** et **Router**, comme terminaux actifs **Server**, **Client**, **Téléphone VoIP** et bien d'autres.

## LAN

## LAN

Bevor einzelne IP-Adressen, Hostnames und MAC-Adressen dokumentiert werden, lohnt es sich, die dazugehörigen LANs (Local Area Network) zu dokumentieren. Hierfür eignet sich der Objekttyp **Layer-3-Netz**. In der Kategorie **Netz** beinhaltet die wesentlichen [Attribute](../glossar.md) zur Pflege eines IP-Netzes:

Avant de documenter les adresses IP, les noms d'hôtes et les adresses MAC, il vaut la peine de documenter les LAN (Local Area Network) correspondants. Le type d'objet **Réseau couche 3** est approprié à cet effet. La catégorie **Réseau** contient les [attributs](../glossaire.md) essentiels pour la gestion d'un réseau IP :

* **Typ** (IPv4, IPv6; Auswahlfeld)
* **Netz**-Adresse (Textfeld) mit Subnetzmaske bzw. CIDR-Notation (Textfelder; bedingen sich gegenseitig)
* **Standardgateway** (Dropdown Auswahl Feld zu aktiven Komponenten, z. B. Router)
* **Reverse DNS** (Textfeld)
* **DNS-Server** (Objektbrowser)
* **DNS-Domäne** (Mehrfachauswahl)
* **Layer-2-Netz Zuordnung** (für VLANs; Objektbeziehung; Mehrfachauswahl)

**Type** (IPv4, IPv6 ; champ de sélection)
**Adresse réseau** (champ de texte) avec masque de sous-réseau ou notation CIDR (champs de texte ; se conditionnent mutuellement)
**Passerelle par défaut** (champ de sélection déroulant pour les composants actifs, par ex. routeur)
**Reverse DNS** (champ de texte)
**Serveur DNS** (navigateur d'objets)
**Domaine DNS** (choix multiple)
* **Attribution de réseau de couche 2** (pour VLAN ; relation d'objet ; choix multiple)

In dieser Kategorie kann zudem geprüft werden, ob bereits Netze dokumentiert sind, mit denen sich der hier angegebene Adressbereich überschneidet.

Cette catégorie permet en outre de vérifier s'il existe déjà des réseaux documentés avec lesquels la plage d'adresses indiquée ici se recoupe.

!!! info "Global v4 und Global v6"
    i-doit bringt zwei [Objekte](../glossar.md) vom Typ **Layer-3-Netz** mit: **Global v4** und **Global v6**. Wer auf die Dokumentation von einzelnen Netzen verzichten möchte, ordnet einzelne IP-Adressen einen der beiden Objekten zu. Dies geschieht automatisch je nach IP-Version. Die Netze umfassen den kompletten IPv4- bzw. IPv6-Adressbereich. Daher können beide Objekte nicht gelöscht werden und sollten bestenfalls auch nicht fundamental verändert werden, sodass ihr Zweck nicht mehr erfüllt werden kann.

! !! info "Global v4 et Global v6".
    i-doit apporte deux [objets](../glossar.md) de type **réseau couche 3** : **Global v4** et **Global v6**. Celui qui souhaite renoncer à la documentation de réseaux individuels attribue des adresses IP individuelles à l'un des deux objets. Cela se fait automatiquement en fonction de la version IP. Les réseaux englobent la totalité de la plage d'adresses IPv4 ou IPv6. C'est pourquoi les deux objets ne peuvent pas être supprimés et, dans le meilleur des cas, ne devraient pas non plus être fondamentalement modifiés, de sorte que leur objectif ne puisse plus être rempli.

## Supernetze

## Super réseaux

Supernetze, sprich die Zusammenfassung von mehreren Subnetzen zu einem Netz, können im Objekttyp **Supernet** dokumentiert werden. Wird in einem Objekt diesen Typs der Adressbereich in der Kategorie **Netz** definiert, werden die zugehörigen Subnetze automatisch in Beziehung gesetzt. Eine tabellarische Zusammenfassung liefert die Kategorie **Supernet**.

Les super-réseaux, c'est-à-dire le regroupement de plusieurs sous-réseaux en un seul réseau, peuvent être documentés dans le type d'objet **Supernet**. Si, dans un objet de ce type, la plage d'adresses est définie dans la catégorie **Réseau**, les sous-réseaux correspondants sont automatiquement mis en relation. La catégorie **Supernet** fournit un résumé sous forme de tableau.

## IP-Adresse mit Hostname

## Adresse IP avec nom d'hôte

Die Dokumentation einzelner IP-Adressen geschieht in der Kategorie **Hostadresse**, die jedem Objekttypen zugeordnet werden kann. Da es sich um eine [Listen-Kategorie](../glossar.md) handelt, können beliebig viele IP-Adressen pro Objekt angegeben werden. Die Kategorie verfügt neben der reinen Datenpflege über einige Automatismen, die den Benutzer unterstützen. Zuerst sollte angegeben werden, welcher **Typ** (also welche IP-Version) verwendet wird. Danach sollte das zuvor angelegte Netz angegeben werden und die Art der **Adressvergabe** (z. B. statisch). i-doit schlägt nun die nächst freie IP-Adresse vor, welches übernommen oder abgeändert werden kann. Wichtig ist noch die Angabe des Hostnamen. Unter **DNS-Domäne** kann aus den Domains gewählt werden, die dem Netz zugeordnet sind, sodass entsprechende FQDNs (Fully Qualified Domain Name) aus Hostnamen und Domains gebildet werden können.

La documentation des adresses IP individuelles se fait dans la catégorie **adresse hôte**, qui peut être attribuée à chaque type d'objet. Comme il s'agit d'une [catégorie de liste](../glossar.md), il est possible d'indiquer autant d'adresses IP que souhaité par objet. Outre la simple gestion des données, la catégorie dispose de quelques automatismes qui aident l'utilisateur. Tout d'abord, il convient d'indiquer quel **type** (donc quelle version d'IP) est utilisé. Ensuite, il faut indiquer le réseau créé précédemment et le type d'attribution de l'**adresse** (par ex. statique). i-doit propose alors la prochaine adresse IP disponible, qui peut être reprise ou modifiée. Il est encore important d'indiquer le nom d'hôte. Sous **Domaine DNS**, il est possible de choisir parmi les domaines attribués au réseau, de sorte que les FQDN (Fully Qualified Domain Name) correspondants peuvent être formés à partir des noms d'hôtes et des domaines.

## IP-Liste

## Liste d'IP

Eine [umfassende Übersicht über jedes Netz](../auswertungen/ip-listen.md) bietet die Kategorie **IP-Liste**, die dem Objekttyp **Layer-3-Netz** zugeordnet ist. In einer tabellarischen Liste befinden sich alle Objekte, die diesem Netz zugeordnet sind, nebst IP-Adresse, Hostname und Art der Adressvergabe. Letztere wird farblich dargestellt, worüber eine Legende rechts neben der Liste aufklärt.

Une [vue d'ensemble complète de chaque réseau](../auswertungen/ip-listen.md) est offerte par la catégorie **Liste IP**, qui est attribuée au type d'objet **Réseau de la couche 3**. Dans une liste sous forme de tableau se trouvent tous les objets qui sont attribués à ce réseau, avec l'adresse IP, le nom d'hôte et le type d'attribution d'adresse. Cette dernière est représentée en couleur, ce qu'explique une légende à droite de la liste.

Die Liste kann zudem um weitere Objekte erweitert werden, ohne die Kategorie Hostadresse zu verwenden. Ebenfalls lässt sich eine Zuordnung lösen. Bei "kleineren" Netzen (< 1.000 IP-Adressen) werden freie IP-Adressen ebenfalls angezeigt, andernfalls erscheint ein Hinweis.

La liste peut en outre être complétée par d'autres objets sans utiliser la catégorie Adresse de l'hôte. Il est également possible de résoudre une attribution. Pour les "petits" réseaux (< 1.000 adresses IP), les adresses IP libres sont également affichées, sinon une remarque apparaît.

Um (unbeabsichtigte) Adresskonflikte zu vermeiden, weißt i-doit neben der Tabelle auf mehrfach vergebene IP-Adressen hin.

Pour éviter les conflits d'adresses (involontaires), i-doit signale à côté du tableau les adresses IP attribuées plusieurs fois.

Eine weitere Tabelle fasst wichtige Informationen des Netzes zusammen (Anzahl vergebener und freier IP-Adressen, Adressbereich usw.).

Un autre tableau résume les informations importantes du réseau (nombre d'adresses IP attribuées et libres, plage d'adresses, etc.)

!!!info "Ping und NSLOOKUP"
    Die Kategorie IP-Liste bietet eine Möglichkeit zum Abgleich zwischen Soll- und Ist-Zustand: Um zu prüfen, ob die dokumentierten IP-Adressen und Hostnames tatsächlich vergeben sind, kann i-doit ICMP-Pakete ("Pings") versenden und einen NSLOOKUP starten. Dazu benötigt die i-doit-Installation Zugriff auf das Netz. Es gibt die Möglichkeit, einzelne Einträge oder alle Einträge nacheinander prüfen zu lassen. Unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Optionen für IP-Liste** lässt sich einstellen, welche Kommandozeilen-Tools verwendet werden. Diese muss der Benutzer/die Gruppe des Apache Webservers aufrufen dürfen.

!!!info "Ping et NSLOOKUP"
    La catégorie Liste IP offre une possibilité de comparaison entre l'état théorique et l'état réel : pour vérifier si les adresses IP et les noms d'hôtes documentés sont effectivement attribués, i-doit peut envoyer des paquets ICMP ("pings") et lancer un NSLOOKUP. Pour cela, l'installation d'i-doit doit avoir accès au réseau. Il est possible de faire vérifier des entrées individuelles ou toutes les entrées les unes après les autres. Sous **Administration → [Nom du mandant] Administration → Paramètres pour [Nom du mandant] → Options pour la liste IP**, il est possible de définir quels outils de ligne de commande sont utilisés. Ceux-ci doivent être autorisés à être appelés par l'utilisateur/le groupe du serveur web Apache.

## VLAN

## VLAN

Pro zu pflegendem Virtual LAN (VLAN) legt man in i-doit ein Objekt vom Typ **Layer-2-Netz** an. Wichtig hierbei ist die gleichnamige Kategorie, in der die VLAN ID hinterlegt wird. Dort kann auch über das Attribut **Layer-3-Netz Zuordnung** ein physisches Netz mit einem VLAN verbunden werden. Ebenso ist die Angabe von **IP-Helper-Adressen** möglich.

Pour chaque réseau local virtuel (VLAN) à gérer, on crée dans i-doit un objet de type **réseau de couche 2**. La catégorie du même nom, dans laquelle l'ID VLAN est enregistrée, est importante à cet égard. Il est également possible d'y relier un réseau physique à un VLAN via l'attribut **Attribution réseau couche 3**. Il est également possible d'indiquer des **adresses IP Helper**.

Um ein VLAN an einen (virtuellen/physischen) Port zu binden, sollte zuvor der entsprechende Port einer aktiven Netzkomponente angelegt worden sein. Entweder lässt sich der Port im Objekt der Komponente zuordnen (Kategorie **Port** bzw. **Logischer Port**) oder im **Layer-2-Netz**-Objekt in der Kategorie **Zugewiesene Ports** bzw. **Zugewiesene logische Ports**.

Pour lier un VLAN à un port (virtuel/physique), le port correspondant d'un composant de réseau actif doit avoir été créé au préalable. Le port peut être attribué dans l'objet du composant (catégorie **Port** ou **Port logique**) ou dans l'objet **Réseau couche 2** dans la catégorie **Ports attribués** ou **Ports logiques attribués**.

## DHCP

## DHCP

IP-Adressen werden in einem Netz (Objekte vom Typ **Layer-3-Netz**) auf verschiedene Arten vergeben. Während Server oftmals eine statische IP-Adresse erhalten, bekommen Clients meist eine via DHCP zugewiesenen. Der DHCP-Server mag IP-Adressen dynamisch oder per Reservierung vergeben. Um dies zu dokumentieren, lässt sich ein Netz in verschiedene Bereiche aufteilen. Dazu dient die Kategorie **DHCP**.

Les adresses IP sont attribuées de différentes manières dans un réseau (objets de type **réseau de couche 3**). Alors que les serveurs reçoivent souvent une adresse IP statique, les clients se voient généralement attribuer une adresse IP via DHCP. Le serveur DHCP peut attribuer des adresses IP de manière dynamique ou par réservation. Pour documenter cela, un réseau peut être divisé en différentes zones. La catégorie **DHCP** sert à cela.

Bei der Zuordnung einer IP zu einem Netz (Kategorie **Hostadresse**) beeinflusst die Wahl der **Adressvergabe** die automatische Vergabe der nächst freien IP-Adresse. Anders herum ist es möglich, durch die gezielte Angabe der **Andressvergabe** einen neuen (reservierten/unreservierten) DHCP-Bereich in dem zugeordneten Netz zu definieren.

Lors de l'attribution d'une IP à un réseau (catégorie **adresse hôte**), le choix de **attribution d'adresse** influence l'attribution automatique de la prochaine adresse IP libre. Inversement, il est possible de définir une nouvelle zone DHCP (réservée/non réservée) dans le réseau attribué en indiquant de manière ciblée l'**attribution d'adresse**.

## Netzbereiche

## Zones de réseau

Abseits von CIDR kann ein Subnetz kann in mehrere Segmente logisch unterteilt werden. Nützlich ist dies bei der Zuweisung von IP-Adressen für bestimmte Aufgaben oder für bestimmte Abteilungen.

En dehors de CIDR, un sous-réseau peut être divisé logiquement en plusieurs segments. Cela est utile lors de l'attribution d'adresses IP à des tâches spécifiques ou à des départements particuliers.

[![Netzbereiche](../assets/images/de/anwendungsfaelle/ipam/1-ipam.png)](../assets/images/de/anwendungsfaelle/ipam/1-ipam.png)

[ ![Zones du réseau](../assets/images/fr/applicationfaelle/ipam/1-ipam.png)](../assets/images/fr/applicationfaelle/ipam/1-ipam.png)

Jedes Segment wird als Objekt vom Typ **Netzbereich** angelegt. Dort steht der gleichnamige Kategorie-Ordner bereit. In der untergeordneten Kategorie **Optionen** kann eine **Bereichsfarbe** ausgewählt werden. Diese Farbe wird in der Kategorie **Netz → IP-Liste** verwendet. Weiterhin werden in der Unter-Kategorie **Bereiche** die Adressbereiche der zugeordneten Subnetze vom Typ **Layer-3-Netz** angezeigt.

Chaque segment est créé en tant qu'objet de type **zone de réseau**. Le dossier de catégorie du même nom y est disponible. Dans la catégorie subordonnée **Options**, il est possible de choisir une **couleur de zone**. Cette couleur est utilisée dans la catégorie **Réseau → Liste IP**. En outre, les plages d'adresses des sous-réseaux attribués de type **réseau de couche 3** sont affichées dans la sous-catégorie **plage**.

Die Zuordnung eines Bereichs zu einem Subnetz findet in der Kategorie **Netz → IP-Liste** eines Subnetzes statt: Erst markiert man eine IP-Adresse oder einen Bereich von IP-Adressen. Anschließend weißt man das Segment über den Button **Neuer Bereich** diesen IP-Adressen zu. Die IP-Adressen werden in der Farbe des Bereichs markiert.

L'attribution d'une plage à un sous-réseau se fait dans la catégorie **Réseau → Liste IP** d'un sous-réseau : On sélectionne d'abord une adresse IP ou une plage d'adresses IP. Ensuite, on attribue le segment à ces adresses IP en cliquant sur le bouton **Nouveau domaine**. Les adresses IP sont marquées dans la couleur de la plage.

[![Neuer Bereich](../assets/images/de/anwendungsfaelle/ipam/2-ipam.png)](../assets/images/de/anwendungsfaelle/ipam/2-ipam.png)

[ ![Nouvelle section](../assets/images/fr/applicationfaelle/ipam/2-ipam.png)](../assets/images/fr/applicationfaelle/ipam/2-ipam.png)

In der Kategorie **Hostadresse** wird die nächste freie IP-Adresse anhand des ausgewählten Netzbereiche automatisch vorgeschlagen. Das Attribut **Domäne** in der Kategorie **Netzbereich → Optionen** sorgt zusätzlich dafür, dass bei neu vergebenen IP-Adressen in der Kategorie **Hostadresse** automatisch diese Domäne vorselektiert wird.

Dans la catégorie **Adresse hôte**, la prochaine adresse IP libre est automatiquement proposée en fonction de la plage de réseau sélectionnée. L'attribut **domaine** dans la catégorie **domaine réseau → options** veille en outre à ce que ce domaine soit automatiquement présélectionné pour les nouvelles adresses IP attribuées dans la catégorie **adresse hôte**.

## DNS und FQDNs

## DNS et FQDNs

Wer Angaben zum verwendeten Domain Name System (DNS) und/oder Fully Qualified Domain Names (FQDN) pflegen möchte, kann dies mit i-doit erledigen. Pro **Layer-3-Netz** können in der Kategorie **Netz** beliebig viele **DNS-Server** (Objektbeziehung) und Domains hinterlegt werden. Abweichende Einstellungen zu verwendeten DNS-Servern und Domains können pro Objekt in der Kategorie **Hostadresse** hinterlegt werden. Erhält ein Objekt einen oder mehrere Hostnamen (Kategorie **Hostadresse**) und Angaben zu den verwendeten Domains, ergeben sich daraus ein oder mehrere FQDNs, die automatisch angezeigt werden. Domains können durch die Zuordnung zu einem Netz vererbt werden. Weiterhin können **Suchdomänen** angegeben werden.

Ceux qui souhaitent gérer les informations sur le système de noms de domaine (DNS) utilisé et/ou les noms de domaine pleinement qualifiés (FQDN) peuvent le faire avec i-doit. Pour chaque réseau **Layer 3**, il est possible d'enregistrer dans la catégorie **Réseau** un nombre quelconque de **serveurs DNS** (relation d'objet) et de domaines. Des paramètres différents pour les serveurs DNS et les domaines utilisés peuvent être enregistrés par objet dans la catégorie **Adresse d'hôte**. Si un objet reçoit un ou plusieurs noms d'hôte (catégorie **adresse d'hôte**) et des indications sur les domaines utilisés, il en résulte un ou plusieurs FQDN qui s'affichent automatiquement. Les domaines peuvent être hérités par l'attribution à un réseau. En outre, il est possible d'indiquer des **domaines de recherche**.

[![Hostadresse](../assets/images/de/anwendungsfaelle/ipam/3-ipam.png)](../assets/images/de/anwendungsfaelle/ipam/3-ipam.png)

[ ![Adresse de l'hôte](../assets/images/fr/applicationfaelle/ipam/3-ipam.png)](../assets/images/fr/applicationfaelle/ipam/3-ipam.png)

!!! info "Konfigurationsdaten für DNS- und DHCP-Server"
    Prinzipiell eignen sich die dokumentierten Daten, um DNS- oder DHCP-Server mit passenden Konfigurationsdaten auszustatten. i-doit enthält eine [Export-Funktion für den DNS-Server ISC DHCP](../automatisierung-und-integration/cli/index.md).

! !! info "Données de configuration pour les serveurs DNS et DHCP".
    En principe, les données documentées conviennent pour équiper les serveurs DNS ou DHCP de données de configuration appropriées. i-doit contient une [fonction d'exportation pour le serveur DNS ISC DHCP](../automatisation-et-intégration/cli/index.md).

!!! info "DNS-Zonen und -Records"
    Während sich DNS-Zonen aus der IT-Dokumentation mit Hausmitteln von i-doit problemlos ableiten lassen, sind DNS-Records (A, AAAA, MX usw.) derzeit kein Kernbestandteil. Es bietet sich an, eine benutzerdefinierte Listen-Kategorie anzulegen, die die entsprechenden Records enthält. Diese Kategorie lässt sich jedem Objekt zuordnen, für das Records hinterlegt werden soll. Reverse DNS wird in Objekten vom Typ **Layer-3-Netz** dokumentiert.

! !! info "Zones et enregistrements DNS".
    Alors que les zones DNS peuvent être déduites sans problème de la documentation informatique avec les outils maison d'i-doit, les enregistrements DNS (A, AAAA, MX, etc.) ne sont actuellement pas un élément central. Il est préférable de créer une catégorie de liste définie par l'utilisateur qui contient les enregistrements correspondants. Cette catégorie peut être attribuée à chaque objet pour lequel des enregistrements doivent être déposés. Le DNS inversé est documenté dans des objets de type **réseau de couche 3**.

## Gateways

## Passerelles

Netzkomponenten können als Gateways agieren, um von einem Netz aus Verbindungen zu anderen Netzen zu vermitteln (Routing). Pro Netz gibt es in der Regel ein sogenanntes Standard-Gateway, das verwendet wird, wenn keine explizite Routing-Regel greift. Ein solches Standard-Gateway wird in i-doit pro Netz definiert: Entweder selektiert man in der Kategorie **Netz** eines **Layer-3-Netz**-Objekts ein Objekt, das als Standard-Gateway agiert. Dabei ist wichtig, dass dieses Objekt bereits über eine IP-Adresse verfügt, die diesem Netz zugeordnet ist. Oder man selektiert innerhalb des Objekts in der Kategorie **Hostadresse** das Attribut **Standardgateway für das Netz** auf **ja**.

Les composants de réseau peuvent agir comme des passerelles pour établir des connexions vers d'autres réseaux à partir d'un réseau (routage). En règle générale, il existe une passerelle standard par réseau, qui est utilisée lorsqu'aucune règle de routage explicite ne s'applique. Une telle passerelle standard est définie par réseau dans i-doit : Soit on sélectionne dans la catégorie **Réseau** d'un objet **Réseau de couche 3** un objet qui agit comme passerelle par défaut. Il est alors important que cet objet dispose déjà d'une adresse IP attribuée à ce réseau. Ou bien on sélectionne au sein de l'objet dans la catégorie **adresse hôte** l'attribut **passerelle par défaut pour le réseau** à **oui**.

## IPv4 versus IPv6

## IPv4 versus IPv6

Auch wenn die Verbreitung von IPv6 in vielen Unternehmens-LANs als eher gering geschätzt werden darf, bietet i-doit die Grundelemente zur Dokumentation von IPv6-Netzen. Dazu werden, wie bei IPv4, Netze definiert und IP-Adressen zugeordnet. Lediglich die **Adressvergabe** unterscheidet sich (SLAAC, DHCPv6, usw.). Zudem kann der **Gültigkeitsbereich** (Global, Linklokal usw.) angegeben werden. Beide Attribute gehören zur Kategorie **Hostadresse**.

Même si la diffusion d'IPv6 dans de nombreux réseaux locaux d'entreprise peut être estimée comme plutôt faible, i-doit offre les éléments de base pour documenter les réseaux IPv6. Comme pour IPv4, des réseaux sont définis et des adresses IP sont attribuées. Seule l'**attribution d'adresses** diffère (SLAAC, DHCPv6, etc.). En outre, la **zone de validité** (globale, locale à un lien, etc.) peut être indiquée. Ces deux attributs appartiennent à la catégorie **adresse de l'hôte**.

## WLAN

## WLAN

Die Dokumentation von WLANs unterscheidet sich nicht fundamental von den bereits genannten Möglichkeiten. Ein Access Point (AP) kann als Objekt vom Typ **Wireless Access Point** dokumentiert werden. In der Kategorie **WiFi-Gerät** werden unter anderem SSIDs und Angaben zur Verschlüsselung gepflegt.

La documentation des WLAN ne diffère pas fondamentalement des possibilités déjà mentionnées. Un point d'accès (PA) peut être documenté en tant qu'objet de type **Wireless Access Point**. Dans la catégorie **Périphérique WiFi**, on gère entre autres les SSID et les informations sur le cryptage.

!!! info "WLAN-Controller"
    i-doit bringt in der Standard-Installation keine direkte Möglichkeit mit, WLAN-Controller zur Steuerung von Access Points abzubilden. Hierzu bietet es sich an, einen dedizierten Objekttypen anzulegen mit einer dementsprechenden benutzerdefinierten Kategorie zu definieren.

! !! info "Contrôleurs WLAN"
    L'installation standard d'i-doit ne permet pas de représenter directement les contrôleurs WLAN pour la commande des points d'accès. Pour cela, il est préférable de créer un type d'objet dédié avec une catégorie définie par l'utilisateur.

## WAN

## WAN

Um Außenverbindungen zu dokumentieren, eignet sich der Objekttyp **WAN-Leitungen**. Unter WAN versteht man Wide Area Network. Ähnliche Formen wie Metropolitan Area Network (MAN) oder Global Area Network (GAN) sollen von WAN mit abgedeckt sein.

Pour documenter les connexions extérieures, le type d'objet **Lignes WAN** est approprié. Par WAN, on entend Wide Area Network. Des formes similaires telles que le Metropolitan Area Network (MAN) ou le Global Area Network (GAN) doivent également être couvertes par le WAN.

Angaben zu Up- und Downstream, zugewiesene LANs und VLANs u.v.m. können in der Kategorie **WAN-Leitungen** hinterlegt werden.

Des informations sur le débit montant et descendant, les réseaux locaux et les réseaux locaux virtuels attribués, et bien d'autres choses encore, peuvent être enregistrées dans la catégorie **Lignes WAN**.

## VPN

## VPN

Für Virtual Private Networks (VPN) existieren in der Standard-Installation von i-doit weder ein dedizierter Objekttyp noch eine spezielle Kategorie. Es bietet sich an, dazu den Objekttyp **Layer-3-Netz** zu nutzen und im **Objekttitel** einen aussagekräftigen Namen zu vergeben, dass das Objekt als VPN erkennbar ist. Werden weitere, auf VPNs zugeschnittene Attribute benötigt, helfen ein dedizierter Objekttyp und eine benutzerdefinierte Kategorie weiter.

Pour les réseaux privés virtuels (VPN), il n'existe pas de type d'objet dédié ni de catégorie spéciale dans l'installation standard d'i-doit. Il est conseillé d'utiliser le type d'objet **Réseau de couche 3** et d'attribuer un nom significatif dans le **titre de l'objet** afin que l'objet soit reconnaissable en tant que VPN. Si d'autres attributs adaptés aux VPN sont nécessaires, un type d'objet dédié et une catégorie définie par l'utilisateur peuvent aider.

## Artverwandte Themen

## Thèmes apparentés

Mit der "reinen" IPAM-Dokumentation ist es meistens nicht getan: Es gibt viele Randthemen, die eine mehr oder weniger wichtige Rolle spielen. Einige davon möchten wir im Folgenden kurz anreißen.

La plupart du temps, la documentation IPAM "pure" ne suffit pas : il existe de nombreux thèmes périphériques qui jouent un rôle plus ou moins important. Nous souhaitons en évoquer brièvement quelques-uns dans les lignes qui suivent.

## MAC-Adressen und Ports

## Adresses MAC et ports

Zu einem Host möchte man neben den IP-Adressen oftmals die zugehörigen MAC-Adressen dokumentieren. Diese sind eindeutig einem Netzwerkport zugeordnet. In i-doit dient zur Dokumentation die Kategorie **Port** im Kategorie-Ordner **Netzwerk**. Dort werden weitere (physikalische) Eigenschaften des Ports angegeben. Zudem können eine oder mehrere IP-Adressen fest einem Port zugeordnet werden. Da es sich bei der Kategorie **Port** um eine Listen-Kategorie handelt, können beliebig viele Ports pro Objekt angelegt werden.

Outre les adresses IP, on souhaite souvent documenter les adresses MAC correspondantes d'un hôte. Celles-ci sont clairement attribuées à un port réseau. Dans i-doit, la catégorie **Port** dans le dossier de catégories **Réseau** sert à la documentation. D'autres propriétés (physiques) du port y sont indiquées. En outre, une ou plusieurs adresses IP peuvent être attribuées de manière fixe à un port. Comme la catégorie **Port** est une catégorie de liste, il est possible de créer autant de ports que l'on veut par objet.

Hilfreich hierbei ist die Angabe, wie viele Ports gleichzeitig erstellt werden sollen. Dabei kann auch ein Namensschema (eth0, eth1, eth2) angewendet werden.

Il est utile d'indiquer combien de ports doivent être créés simultanément. Un schéma de nommage (eth0, eth1, eth2) peut également être utilisé.

Eine Verbindung zu einer anderen (aktiven/passiven) Netzkomponente ist pro Port-Eintrag möglich: Im **Port Browser** wird dazu erst das Objekt vorausgewählt und dann der entsprechende Port. Das heißt, die Ports sollten bereits existieren, bevor sie miteinander verbunden werden.

Une connexion à un autre composant de réseau (actif/passif) est possible par entrée de port : dans le **Port Browser**, l'objet est d'abord présélectionné, puis le port correspondant. Cela signifie que les ports doivent déjà exister avant d'être reliés entre eux.

## Virtuelle Ports

## Ports virtuels

Physische Ports lassen sich zu logischen zusammenstellen. Diese Technik wird oftmals Trunking oder Bonding genannt. Um dies zu dokumentieren, dient die Kategorie **Logischer Ports** im Kategorie-Ordner **Netzwerk**.

Les ports physiques peuvent être assemblés en ports logiques. Cette technique est souvent appelée trunking ou bonding. Pour documenter cela, la catégorie **Ports logiques** dans le dossier de catégories **Réseau** sert.

## Verkabelung

## Câblage

In i-doit kann klar zwischen den verschiedenen Schichten des [TCP/IP-Referenzmodells](https://de.wikipedia.org/wiki/Internetprotokollfamilie#TCP.2FIP-Referenzmodell) unterschieden werden. Die oberen Themen behandeln die Schichten (Layer) 3 mit IP und 4 (MAC). Für die übrigen Schichten bringt i-doit weitergehende Dokumentations-Funktionen mit, beispielsweise für die Schicht 1, die das physische Medium betrachtet.

Dans i-doit, il est possible de faire une distinction claire entre les différentes couches du [modèle de référence TCP/IP](https://de.wikipedia.org/wiki/Internetprotokollfamilie#TCP.2FIP-Referenzmodell). Les thèmes supérieurs traitent des couches 3 avec IP et 4 (MAC). Pour les autres couches, i-doit apporte des fonctions de documentation plus avancées, par exemple pour la couche 1, qui considère le support physique.

Um Kabel und deren Verbindungen zu aktiven wie passiven Komponenten zu dokumentieren, bringt i-doit bereits zahlreiche Objekttypen mit (**Kabel**, **Patchfeld**, **Kabeltrasse**, **Leerrohr** usw.). Die Verbindung von Objekten dieser Typen übernimmt die Kategorie **Verkabelung**. Diese kann, muss aber nicht aktiv gepflegt werden. Wird über die Kategorie **Port** (Netzwerk) eine Verbindung zwischen zwei Komponenten dokumentiert, wird diese Kategorie automatisch ausgefüllt und ein Objekt vom Typ **Kabel** erstellt.

Pour documenter les câbles et leurs connexions aux composants actifs et passifs, i-doit fournit déjà de nombreux types d'objets (**câble**, **champ de brassage**, **trajet de câble**, **tube sous vide**, etc.) La catégorie **Câblage** se charge de relier les objets de ces types. Celle-ci peut, mais ne doit pas être gérée activement. Si une connexion entre deux composants est documentée via la catégorie **Port** (réseau), cette catégorie est automatiquement remplie et un objet de type **Câble** est créé.

## Network Listener und Port Binding

## Network Listener et Port Binding

Analog zur Verkabelung lassen sich auch die oberen Schichten des TCP/IP-Referenzmodells in i-doit dokumentieren. Welche Applikation welche TCP-/UDP-Verbindungen öffnet und welche Applikation welche Ports auf Drittsystemen anspricht, kann im Kategorie-Ordner **Netzwerkverbindungen** festgehalten. Innerhalb des Ordners gibt es die Kategorien **Listener** (Port wird geöffnet) und **Verbindung** (Port auf Drittsystem wird genutzt). Zuvor sollte sichergestellt sein, dass die benötigten Softwareinstallationen in i-doit dokumentiert sind.

Comme pour le câblage, les couches supérieures du modèle de référence TCP/IP peuvent également être documentées dans i-doit. Quelle application ouvre quelles connexions TCP/UDP et quelle application s'adresse à quels ports sur des systèmes tiers peut être consignée dans le dossier de catégories **Connexions réseau**. Dans ce dossier, il y a les catégories **Listener** (le port est ouvert) et **Connexion** (le port sur le système tiers est utilisé). Au préalable, il convient de s'assurer que les installations logicielles nécessaires sont documentées dans i-doit.

## Weiterführende Links

## Liens complémentaires

* [doIT BETTER: IP Address Management (IPAM)](https://www.i-doit.com/blog/ip-adress-management-mit-i-doit-pro/), Blog-Artikel auf [i-doit.com](http://i-doit.com) mit Video
* [Deutschsprachige Demo](http://ipamdemo.i-doit.com/) zum obigen "doIT BETTER"-Thema (Credentials: admin/admin)

* [doIT BETTER : IP Address Management (IPAM)](https://www.i-doit.com/blog/ip-adress-management-mit-i-doit-pro/), article de blog sur [i-doit.com](http://i-doit.com) avec vidéo
* [Démo en allemand](http://ipamdemo.i-doit.com/) sur le thème "doIT BETTER" ci-dessus (Credentials : admin/admin)
