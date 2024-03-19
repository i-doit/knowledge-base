<!-- TRANSLATED by md-translate -->
# IP-Listen

# Listes d'IP

Eine zentrale Frage stellt sich dem Admin immer wieder: Welche IP-Adressen sind an welchen Host vergeben und welche sind noch frei? Die IP-Listen in i-doit helfen da weiter.

Une question centrale se pose toujours à l'administrateur : quelles adresses IP sont attribuées à quel hôte et lesquelles sont encore libres ? Les listes d'adresses IP d'i-doit permettent de répondre à cette question.

Einen breiter aufgestellten Einblick in die Materie bietet der Anwendungsfall zum [IP Address Management (IPAM)](../anwendungsfaelle/ip-adress-management.md).

Le cas d'utilisation de la [gestion des adresses IP (IPAM)](../anwendungsfaelle/ip-adress-management.md) donne un aperçu plus large de la matière.

## Kategorie IP-Liste

## Catégorie liste IP

Eine umfassende Übersicht über jedes Netz bietet die [Kategorie](../grundlagen/struktur-it-dokumentation.md) **IP-Liste**, die in der Standardinstallation von i-doit dem [Objekttyp](../grundlagen/struktur-it-dokumentation.md) **Layer-3-Netz** zugeordnet ist. In einer tabellarischen Liste befinden sich alle [Objekte](../grundlagen/struktur-it-dokumentation.md), die diesem Netz zugeordnet sind, nebst IP-Adresse, Hostname und Art der Adressvergabe.

La [catégorie](../bases/structure-it-documentation.md) **liste IP**, qui est attribuée au [type d'objet](../bases/structure-it-documentation.md) **réseau de couche 3** dans l'installation standard d'i-doit, offre un aperçu complet de chaque réseau. Dans une liste tabulaire se trouvent tous les [objets](../bases/structure-it-documentation.md) qui sont attribués à ce réseau, avec l'adresse IP, le nom d'hôte et le mode d'attribution de l'adresse.

[![Kategorie IP-Liste](../assets/images/de/auswertungen/ip-listen/ip-liste.png)](../assets/images/de/auswertungen/ip-listen/ip-liste.png)

[ ![Catégorie Liste IP](../assets/images/fr/évaluations/listesip/listeip.png)](../assets/images/fr/évaluations/listesip/listeip.png)

Die Art der Adressvergabe wird farblich dargestellt, worüber eine Legende rechts neben der Liste aufklärt:

Le mode d'attribution des adresses est représenté par une couleur, ce qu'explique une légende à droite de la liste :

* **Grün:**<br>
Netz-/Broadcast-Adresse
* **Gelb:**<br>
Default Gateway (Dies ist dasjenige Objekt, bei dem in der Kategorie Hostadresse angegeben wurde, als Default Gateway zu agieren.)
* **Orange:**<br>
unnummerierter Adressbereich
* **Grau:**<br>
statisch vergebene IP-Adressen
* **Blau:**<br>
vom DHCP-Server vorreservierte IP-Adressen (siehe Kategorie **DHCP**)
* **Hellblau:**<br>
vom DHCP dynamisch vergebene IP-Adressen (siehe Kategorie **DHCP**)

* **Vert:**<br>
Adresse réseau/diffusion
* **Jaune:**<br>
Passerelle par défaut (Il s'agit de l'objet pour lequel il a été indiqué dans la catégorie Adresse de l'hôte d'agir en tant que passerelle par défaut).
**Orange:**<br>
Plage d'adresses non numérotées
* **Gris:**<br>
adresses IP attribuées de manière statique
* **Bleu:**<br>
adresses IP pré-réservées par le serveur DHCP (voir catégorie **DHCP**)
* **Bleu clair:**<br>
adresses IP attribuées dynamiquement par le DHCP (voir catégorie **DHCP**)

Um (unbeabsichtigte) Adresskonflikte zu vermeiden, weißt i-doit neben der Tabelle auf mehrfach vergebene IP-Adressen hin.

Pour éviter les conflits d'adresses (involontaires), i-doit signale à côté du tableau les adresses IP attribuées plusieurs fois.

Bei kleineren Netzen (< 1.000 IP-Adressen) werden auch nicht vergebene IP-Adressen angezeigt. Sollte das Netz einen zu großen Adressumfang haben, beispielsweise ein /16 mit über 65000 IP-Adressen, werden nur die vergebenen IP-Adressen angezeigt und die nicht vergebenenen ausgeblendet. Zusätzlich erscheint ein Hinweis.

Pour les réseaux plus petits (<1000 adresses IP), les adresses IP non attribuées sont également affichées. Si le réseau a un trop grand nombre d'adresses, par exemple un /16 avec plus de 65000 adresses IP, seules les adresses IP attribuées sont affichées et celles qui ne le sont pas sont masquées. Une remarque s'affiche en outre.

Eine weitere Tabelle auf der rechten Seite fasst wichtige Informationen des Netzes zusammen:

Un autre tableau, à droite, résume les informations importantes du réseau :

* IP-Adressen in Benutzung
* Netzadresse
* Subnetzmaske
* Default Gateway
* Adressbereich
* Übergeordnetes Supernetze (Objekttyp **Supernet**)
* Zugeordnete VLANs (Objekttyp **Layer-2-Netz**)

* Adresses IP en cours d'utilisation
* Adresse réseau
* Masque de sous-réseau
* Passerelle par défaut
* Plage d'adresses
* Superréseau supérieur (type d'objet **Supernet**)
* VLANs assignés (type d'objet **Réseau couche 2**)

## Objekte zuordnen

## Affecter des objets

Die Liste kann um weitere Objekte erweitert werden, ohne die Kategorie **Hostadresse** zu verwenden. Hierzu wird der Button **Objekt Zuordnen** verwendet.

Il est possible d'ajouter des objets à la liste sans utiliser la catégorie **adresse de l'hôte**. Pour cela, on utilise le bouton **Attribuer un objet**.

## IP-Adressen überprüfen

## Vérifier les adresses IP

Die Kategorie **IP-Liste** bietet eine Möglichkeit zum Abgleich zwischen Soll- und Ist-Zustand: Um zu prüfen, ob die dokumentierten IP-Adressen und Hostnames tatsächlich vergeben sind, kann i-doit ICMP-Pakete ("Pings") versenden und einen NSLOOKUP starten. Dazu benötigt die i-doit Zugriff auf das Netz. Es gibt die Möglichkeit, einzelne Einträge oder alle Einträge nacheinander prüfen zu lassen. Unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Optionen für IP-Liste** lässt sich einstellen, welche Kommandozeilen-Tools verwendet werden. Diese muss der Benutzer/die Gruppe des Apache Webservers aufrufen dürfen.

La catégorie **Liste IP** offre une possibilité de comparaison entre l'état théorique et l'état réel : pour vérifier si les adresses IP et les noms d'hôtes documentés sont effectivement attribués, i-doit peut envoyer des paquets ICMP ("pings") et lancer un NSLOOKUP. Pour cela, l'i-doit a besoin d'un accès au réseau. Il est possible de faire vérifier des entrées individuelles ou toutes les entrées les unes après les autres. Sous **Administration → [Nom du mandant] Administration → Paramètres pour [Nom du mandant] → Options pour la liste IP**, il est possible de définir quels outils de ligne de commande sont utilisés. Ceux-ci doivent être autorisés à être appelés par l'utilisateur/le groupe du serveur web Apache.

* **Ping**: ICMP-Paket an IP-Adresse schicken
* **NSLOOKUP**: IP-Adresse zum Hostname bestimmen
* **Reverse NSLOOKUP**: Hostname zur IP-Adresse bestimmen

* **Ping** : Envoyer un paquet ICMP à l'adresse IP
* **NSLOOKUP** : Déterminer l'adresse IP pour le nom d'hôte
* **Reverse NSLOOKUP** : Déterminer le nom d'hôte pour l'adresse IP
