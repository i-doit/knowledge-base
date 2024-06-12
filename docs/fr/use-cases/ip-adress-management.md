# Gestion des adresses IP (IPAM)

Une partie essentielle de la [documentation informatique](../glossary.md) est la maintenance des réseaux IP, des adresses IP et des divers composants réseau, appelée Gestion des adresses IP (IPAM).

Aperçu
------

[IPAM](https://fr.wikipedia.org/wiki/Gestion_des_adresses_IP) contient plusieurs domaines que le texte suivant explique plus en détail. Dans l'installation par défaut, i-doit fournit déjà tous les [types d'objets](../glossary.md) et [catégories](../glossary.md) afin de couvrir précisément ces domaines. Cela inclut entre autres les types d'objets suivants :

*   **Réseau de couche 3**
*   **Réseau de couche 2**
*   **Superréseau**

Nous nous concentrons particulièrement sur ces catégories :

*   **Adresse hôte**
*   **Net** (dossier de catégorie)
*   **Réseau** (dossier de catégorie)

En tant que composants réseau actifs, i-doit fournit, par exemple, les types d'objets **Switch** et **Routeur**, en tant que dispositifs actifs **Serveur**, **Client**, **Téléphone VoIP** et bien d'autres.

LAN
---

Avant de commencer à documenter des adresses IP individuelles, des noms d'hôtes et des adresses MAC, il est utile de documenter les LAN correspondants (réseaux locaux). Le type d'objet **Réseau de couche 3** est adapté à cet effet. La catégorie **Net** contient les [attributs](../glossary.md) essentiels pour maintenir un réseau IP :

*   **Type** (IPv4, IPv6 ; champ de sélection)
*   Adresse **Net** (champ de texte) avec masque de sous-réseau ou notation CIDR (champs de texte ; sont mutuellement dépendants)
*   **Passerelle par défaut** ([relation d'objet](../basics/object-relations.md) à un composant actif, par exemple un routeur ; sélection multiple)
*   **DNS inverse** (champ de texte)
*   **Serveur DNS** (relation d'objet ; sélection multiple)
*   **Domaine DNS** (sélection multiple)
*   **Affectation de réseau de couche 2** (pour les VLAN ; relation d'objet ; sélection multiple)

Dans cette catégorie, vous pouvez également vérifier si d'autres réseaux ont déjà été documentés et si les plages d'adresses spécifiées se chevauchent.

Global v4 et Global v6

i-doit fournit deux [objets](../glossary.md) du type **Réseau de couche 3** : **Global v4** et **Global v6**. Ceux qui veulent se passer de la documentation des réseaux individuels peuvent attribuer des adresses IP individuelles à l'un des deux objets. Cela se fait automatiquement, en fonction de la version IP. Les réseaux comprennent l'ensemble de la plage d'adresses IPv4 et IPv6. Par conséquent, vous ne pouvez pas supprimer ces deux objets et vous ne devriez pas les modifier radicalement pour qu'ils ne puissent plus remplir leur objectif.


Supernets
---------

Les supernets, en d'autres termes, la combinaison de plusieurs sous-réseaux en un seul réseau, peuvent être documentés dans le type d'objet **Supernet**. Lorsque la plage d'adresses dans la catégorie **Net** est définie dans un objet de ce type, les sous-réseaux associés seront automatiquement liés les uns aux autres. La catégorie **Supernet** fournit un résumé sous forme de tableau.

Adresse IP avec Nom d'Hôte
-------------------------

La documentation des adresses IP individuelles est effectuée dans la catégorie **Adresse hôte** qui peut être attribuée à chaque type d'objet. Comme il s'agit d'une [catégorie de liste](../glossary.md), vous pouvez spécifier un nombre quelconque d'adresses IP par objet. Outre la simple maintenance des données, cette catégorie fournit quelques automatismes pour soutenir l'utilisateur. Tout d'abord, vous devriez définir quel **Type** (quelle version IP) est utilisé. Ensuite, vous devriez spécifier le réseau que vous avez créé auparavant et le type d'**Allocation d'adresse** (par exemple, statique). Ensuite, i-doit suggère la prochaine adresse IP disponible que vous pouvez accepter ou modifier. Il est également important de spécifier le nom d'hôte. Sous **Domaine DNS**, vous pouvez faire une sélection parmi les domaines qui sont alloués au réseau afin que des FQDN (Fully Qualified Domain Names) puissent être générés à partir des noms d'hôtes et des domaines.

Liste IP
-------

La catégorie **Liste IP** qui est attribuée au type d'objet **Réseau de couche 3** fournit un [aperçu complet de chaque réseau](..//evaluation/ip-list.md). Tous les objets qui sont alloués à ce réseau sont répertoriés dans un tableau, y compris l'adresse IP, le nom d'hôte et le type d'attribution de l'adresse. Ce dernier est affiché en couleur et dans une légende à droite de la liste, vous pouvez trouver le code couleur.

Vous pouvez également ajouter d'autres objets à la liste sans utiliser la catégorie Adresse hôte. Vous pouvez même détacher une attribution. Avec des "petits" réseaux (< 1 000 adresses IP), les adresses IP libres seront également affichées, dans d'autres cas, un message correspondant apparaît.

Afin d'éviter les conflits d'adresses involontaires, i-doit vous informe des adresses IP multiples attribuées à côté du tableau.

Un autre tableau résume les détails importants sur le réseau (nombre d'adresses IP attribuées et libres, plage d'adresses, etc.).

Ping et NSLOOKUP

La catégorie de liste IP offre la possibilité de comparer l'état souhaité et l'état réel : Pour vérifier si les adresses IP et les noms d'hôtes documentés sont effectivement déjà attribués, i-doit peut envoyer des paquets ICMP ("pings") et démarrer un NSLOOKUP. À cette fin, i-doit nécessite un accès au réseau. Il est possible de vérifier des entrées individuelles ou toutes les entrées ultérieurement. Avec **Administration → Paramètres système → Paramètres du locataire → Options pour la liste IP**, vous pouvez définir les outils en ligne de commande à utiliser. L'utilisateur/le groupe du serveur web Apache doit être autorisé à les appliquer.

VLAN
----

Pour chaque réseau local virtuel (VLAN) que vous souhaitez maintenir, vous créez un objet de type **Réseau de couche 2** dans i-doit. La catégorie du même nom, dans laquelle l'ID VLAN est stocké, est importante ici. Vous pouvez également connecter un réseau physique à un VLAN via l'attribut **Affectation de réseau de couche 3** ici. Il est également possible de spécifier des **adresses d'aide IP**.

Vous devez créer le port d'un composant réseau actif avant de connecter un VLAN à un port (virtuel/physique). Soit le port peut être attribué dans l'objet du composant (catégories **Port** ou **Port logique**) soit dans l'objet **Réseau de couche 2** dans les catégories **Ports affectés** ou **Ports logiques affectés**.

DHCP
----

Les adresses IP sont attribuées avec différentes méthodes dans un réseau (objets de type **Réseau de couche 3**). Alors que les serveurs reçoivent souvent une adresse IP statique, les clients reçoivent généralement une adresse via DHCP. Le serveur DHCP peut attribuer des adresses IP de manière dynamique ou par réservation. Pour documenter cela, vous pouvez diviser le réseau en différentes sections. À cette fin, la catégorie **DHCP** est utilisée.

Lors de l'attribution d'une IP à un réseau (catégorie **Adresse hôte**), la sélection de l'**Allocation d'adresse** influence l'attribution automatique de la prochaine adresse IP disponible. Inversement, il est possible de définir une nouvelle section DHCP (réservée ou non réservée) dans le réseau attribué par une spécification ciblée de l'**Allocation d'adresse**.

Zones de réseau
---------

Outre le CIDR, vous pouvez diviser logiquement un sous-réseau en plusieurs segments. Cela est particulièrement utile lors de l'attribution d'adresses IP pour des tâches spéciales ou pour certains départements.

[![gestion-adresse-ip](../assets/images/en/use-cases/ipam/1-ipam.png)](../assets/images/en/use-cases/ipam/1-ipam.png)

Chaque segment est créé en tant qu'objet du type **Zone réseau**. Ici, le dossier de catégorie du même nom est disponible. Vous pouvez choisir une **Couleur de zone** dans la catégorie **Options** subordonnée. Cette couleur est utilisée dans la catégorie **Réseau → Liste IP.** De plus, les plages d'adresses des sous-réseaux alloués du type **Réseau de couche 3** sont affichées dans la sous-catégorie **Portée**.

L'attribution d'une zone à un sous-réseau est effectuée dans la catégorie **Réseau → Liste IP** d'un sous-réseau. Tout d'abord, vous sélectionnez une adresse IP ou une plage d'adresses IP. Ensuite, vous attribuez le segment à ces adresses IP via le bouton **Nouvelle zone**. Les adresses IP sont mises en surbrillance dans les couleurs des zones réseau.

[![gestion-adresse-ip](../assets/images/en/use-cases/ipam/2-ipam.png)](../assets/images/en/use-cases/ipam/2-ipam.png)

Dans la catégorie **Adresse hôte**, la prochaine adresse IP disponible est automatiquement suggérée sur la base des zones réseau sélectionnées. L'attribut **Domaine** dans la catégorie **Zone réseau → Options** garantit que ce domaine est présélectionné automatiquement avec les adresses IP nouvellement attribuées dans la catégorie **Adresse hôte**.

DNS et FQDN
-------------

Lorsque vous souhaitez conserver des détails se référant au Système de noms de domaine (DNS) et/ou aux Noms de domaine complets (FQDN) appliqués, vous pouvez gérer cela avec l'aide de i-doit. Vous pouvez stocker un nombre quelconque de **Serveurs DNS** (relation d'objet) et de domaines dans la catégorie **Réseau** pour chaque **Réseau de couche 3**. Des paramètres variables concernant les serveurs DNS et les domaines appliqués peuvent être stockés dans la catégorie **Adresse hôte** pour chaque objet. Si un objet a un ou plusieurs noms d'hôte (catégorie **Adresse hôte**) et d'autres détails sur les domaines appliqués, le résultat est un ou plusieurs FQDN qui sont affichés automatiquement. Les domaines peuvent être hérités par attribution à un réseau. De plus, vous pouvez également spécifier des **Domaines de recherche**.

[![gestion-adresse-ip](../assets/images/en/use-cases/ipam/3-ipam.png)](../assets/images/en/use-cases/ipam/3-ipam.png)

Données de configuration pour les serveurs DNS et DHCP

Fondamentalement, les données documentées sont adaptées pour équiper les serveurs DNS ou DHCP avec les données de configuration appropriées. i-doit contient une [fonction d'exportation pour le serveur DNS ISC DHCPD](../automation-and-integration/cli/index.md).

Zones DNS et enregistrements

Alors que les zones DNS peuvent être déterminées à partir de la documentation IT avec quelques remèdes simples i-doit, les enregistrements DNS (A, AAAA, MX, etc.) ne sont pas un élément central pour le moment. Il est utile de générer une catégorie de liste définie par l'utilisateur contenant les enregistrements correspondants. Cette catégorie peut être attribuée à chaque objet pour lequel vous souhaitez stocker des enregistrements. Le DNS inversé est documenté dans des objets de type **Layer 3 Net**.

Passerelles
----------

Les composants réseau peuvent agir comme passerelles pour transférer des connexions d'un réseau à d'autres réseaux (routage). Habituellement, il y a une passerelle par défaut par réseau qui est utilisée lorsque aucune règle de routage explicite ne peut être appliquée. Une telle passerelle par défaut est spécifiée dans i-doit pour chaque réseau : Soit vous sélectionnez un objet agissant comme passerelle par défaut dans la catégorie **Net** d'un objet **Layer 3 Net**. Il est important que cet objet ait déjà une adresse IP qui est attribuée à ce réseau. Ou vous sélectionnez **Oui** pour l'attribut **Passerelle par défaut pour le réseau** dans l'objet de la catégorie **Adresse hôte**.

IPv4 versus IPv6
----------------

Probablement, IPv6 n'est pas largement répandu dans la plupart des LAN d'entreprise, mais néanmoins i-doit fournit les éléments de base pour une documentation des réseaux IPv6. De manière similaire à la procédure avec IPv4, vous définissez des réseaux et attribuez des adresses IP. Seule l'**Allocation d'adresse** est différente (SLAAC, DHCPv6, etc.). De plus, vous pouvez spécifier la plage de validité (globale, linklocal, etc.). Les deux attributs appartiennent à la catégorie **Adresse hôte**.

WLAN
----

La documentation des WLAN ne diffère pas fondamentalement des options déjà mentionnées. Vous pouvez documenter un point d'accès (AP) en tant qu'objet de type **Point d'accès sans fil**. Entre autres, les SSID et les spécifications sur le chiffrement sont maintenus dans la catégorie **Appareil WiFi**.

Contrôleur WLAN

Dans l'installation par défaut, i-doit ne fournit pas directement la possibilité de mapper les contrôleurs WLAN pour contrôler les points d'accès. Dans ce but, il est judicieux de créer un type d'objet dédié et de définir une catégorie personnalisée correspondante.

WAN
---

Pour documenter les connexions externes, vous pouvez utiliser le type d'objet **Connexion WAN**. WAN signifie Wide Area Network. Des formes similaires, telles que le Réseau Métropolitain (MAN) ou le Réseau d'Étendue Globale (GAN), doivent être couvertes par WAN.

Les détails sur l'amont et l'aval, les LAN et WAN assignés, etc., peuvent être stockés dans la catégorie **Connexion WAN**.

VPN
---

L'installation par défaut d'i-doit ne fournit ni un type d'objet dédié ni une catégorie spéciale pour les réseaux privés virtuels (VPN). Il est possible d'utiliser le type d'objet **Réseau de Couche 3** et d'assigner un nom significatif en tant que **Titre de l'objet** afin que l'objet puisse être reconnu comme VPN. Si vous avez besoin d'attributs supplémentaires adaptés pour les VPN, un type d'objet dédié et une catégorie définie par l'utilisateur seront utiles.

Sujets Connexes
----------------

Souvent, la documentation IPAM seule ne suffit pas. Il existe de nombreux sujets connexes qui jouent un rôle plus ou moins important. Nous aimerions aborder certains d'entre eux dans le texte suivant.

### Adresses MAC et Ports

Souvent, vous souhaitez également documenter les adresses MAC associées en plus des adresses IP pour un hôte. Les adresses MAC sont attribuées de manière univoque à un port réseau. Dans i-doit, la catégorie **Port** dans le dossier de catégories **Réseau** sert à des fins de documentation. Vous pouvez spécifier des caractéristiques (physiques) supplémentaires du port ici. De plus, vous pouvez assigner une ou plusieurs adresses IP à un port spécifique. Comme la catégorie **Port** est une catégorie de liste, vous pouvez créer un nombre illimité de ports par objet.

Il est judicieux de définir combien de ports vous souhaitez créer simultanément. À cette fin, vous pouvez également appliquer un schéma de noms (eth0, eth1, eth2).

Une connexion à un autre composant réseau (actif/passif) par entrée de port est possible : Dans le **Navigateur de Ports**, vous présélectionnez l'objet, puis le port correspondant. Les ports doivent donc déjà exister avant de pouvoir les connecter les uns aux autres.

### Ports Virtuels 

Vous pouvez regrouper des ports physiques pour former des ports logiques. Cette méthode est souvent appelée regroupement ou liaison. La catégorie **Ports logiques** dans le dossier de catégorie **Réseau** vous permet de documenter les ports logiques.

### Câblage 

Dans i-doit, vous pouvez différencier clairement les différentes couches du [modèle de référence TCP/IP](https://fr.wikipedia.org/wiki/Suite_des_protocoles_Internet). Les sujets supérieurs traitent des couches 3 avec IP et 4 (MAC). Pour les autres couches, i-doit fournit d'autres fonctions de documentation, par exemple pour la couche 1, qui concerne le support physique.

Pour documenter les câbles et leurs connexions aux composants actifs et passifs, i-doit fournit de nombreux types d'objets (**Câble**, **Panneau de brassage**, **Goulotte de câble**, **Conduit** etc.). La connexion des objets de ces types est effectuée dans la catégorie de câblage, qui peut être (mais ne doit pas nécessairement être) maintenue activement. Lorsque vous documentez une connexion entre deux composants via la catégorie **Port** (réseau), cette catégorie sera remplie automatiquement et un objet du type **Câble** sera généré.

### Écouteur Réseau et Liaison de Port 

Tout comme le câblage, vous pouvez documenter les couches supérieures du modèle de référence TCP/IP dans i-doit. Dans le dossier de catégorie **Connexions réseau**, vous pouvez voir quelle application ouvre quelles connexions TCP/UDP et quelles applications adressent quels ports par rapport aux systèmes tiers. Dans le dossier, vous trouverez les catégories **Écouteur** (le port est ouvert) et **Connexion** (le port du système tiers est utilisé). Au préalable, vous devriez vous assurer que les installations logicielles requises sont documentées dans i-doit.

Liens Supplémentaires
-------------

*   [doIT MIEUX : Gestion des Adresses IP (IPAM)](https://www.i-doit.com/blog/ip-adress-management-mit-i-doit-pro/), Article de blog en allemand avec vidéo sur [i-doit.com](http://i-doit.com)
*   [Démo en allemand](http://ipamdemo.i-doit.com/) concernant le sujet "doIT MIEUX" décrit ci-dessus (identifiants : admin/admin)
