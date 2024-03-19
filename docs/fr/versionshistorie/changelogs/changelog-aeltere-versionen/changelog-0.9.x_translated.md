<!-- TRANSLATED by md-translate -->
# Changelog 0.9.X

# Changelog 0.9.X

0.9.9-9<br>
Erweiterungen:<br>

0.9.9-9<br>
Extensions:<br>

* Listeneditierung für bestehende Kategorieeinträge<br>
* Massenänderungen für Objekte<br>
* Benutzerdefinierte Pflichtfelder für Kategorien (Verwaltung/Module/CMDB/Kategorie-Validierung)<br>
* Benutzerdefinierte Objektlisten<br>
* mit schnellerem Seitenwechsel<br>
* und einstellbaren Spalten (Verwaltung/Module/CMDB/Objekt-Listen)<br>
* Der Query Builder im Report Modul wurde komplett überarbeitet<br>
* Neues System zur E-Mail Benachrichtigung mit grafischer Konfiguration<br>
* Neben einem neuen Design stehen neue Felder und Bedingungen zur Auswahl<br>
* Neue Platzhalter für Objektnamen im Template System (%SYSID%)<br>
* Wartungsverträge werden zu allgemeinen Verträgen<br>
* und erhalten überarbeitete Logik<br>
* Neue Systemrollen für Verträge<br>
* schreibende sowie lesende JSON-RPC Schnittstelle für Logbuch Einträge aus externen Quellen<br>
* Spracheinstellungen werden nun pro User im System gespeichert<br>
* Neugestaltetes Ticket System Modul<br>
* für eine verbesserte Live-Anbindung an Request Tracker<br>
* und zur Vorbereitung für eine OTRS Integration<br>
* Das Verfahren zur Generierung von SYS-IDs ist nun über die Objekttypkonfiguration steuerbar<br>

* Édition de listes pour les entrées de catégories existantes<br>.
* Modifications en masse pour les objets<br>
* Champs obligatoires définis par l'utilisateur pour les catégories (Administration/Modules/CMDB/Validation des catégories)<br>
* Listes d'objets définies par l'utilisateur<br>
* avec un changement de page plus rapide<br>
* et des colonnes paramétrables (Gestion/Modules/CMDB/Listes d'objets)<br>
* Le Query Builder du module Report a été entièrement revu<br>.
* Nouveau système de notification par e-mail avec configuration graphique<br>.
* Outre un nouveau design, de nouveaux champs et conditions sont disponibles<br>.
* Nouveaux caractères de remplacement pour les noms d'objets dans le système de modèles (%SYSID%)<br>
* Les contrats de maintenance deviennent des contrats généraux<br>.
* et reçoivent une logique révisée<br>
* Nouveaux rôles système pour les contrats<br>
* Interface JSON-RPC en lecture et en écriture pour les entrées de journal provenant de sources externes<br>.
* Les paramètres de langue sont désormais enregistrés par utilisateur dans le système<br>.
* Module de système de tickets redessiné<br>
* pour une meilleure connexion en direct à Request Tracker<br>
* et pour préparer une intégration OTRS<br>.
* La procédure de génération des SYS-ID est désormais contrôlable via la configuration du type d'objet<br>.

Fixes:

Corrections :

[Bugfix] - Das Löschen von Objekten in größeren Umgebungen/Datenbanken wurde optimiert<br>
[Bugfix] - SQL Fehler bei Nichtangabe von Feldern in Kategorie Planung<br>
[Bugfix] - SecurityFix: Upload von PHP Dateien verhindern<br>
[Bugfix] - Über H-Inventory importierte Objekte erhalten keinen Eintrag in der Kategorie "Allgemein"<br>
[Bugfix] - In der Übersicht der Lizenzgruppe wird immer nur eine Lizenz unter "Lizenzbezeichnung" angezeigt<br>
[Bugfix] - Reader kann Single-Value Kategorie Einträge erstellen<br>
[Bugfix] - Kategorie "Gruppe": kein Logbucheintrag beim Hinzufügen eines Objekts<br>
[Bugfix] - Extras-Menü im IE an falscher Position<br>
[Bugfix] - Auto-Vervollständigung vom Objektbrowser zeigt klickbare Links an<br>
[Bugfix] - Der Mandantenwechsel funktioniert nicht<br>
[Bugfix] - Kategorie Portübersicht: Links führen zu Anschlüssen anstatt Netzwerk-Ports<br>
[Bugfix] - Kategorie Portübersicht: Es erscheint kein horizontaler Scroller bei zu vielen Ports<br>
[Bugfix] - Kategorie Lizenzen / Übersicht: Ist nicht ins Englische übersetzt<br>
[Bugfix] - In einigen Kategorien wird das Feld Beschreibung nicht gespeichert<br>
[Bugfix] - In der Report View für Beziehungen wird der Objektbrowser nicht richtig angezeigt<br>
[Bugfix] - Lizenzen: Wird kein Datum für Start und Ablauf einer Lizenz eingetragen, erscheint bei der Lizenzzuweisung zu einer Hardware das Datum 1970<br>
[Bugfix] - Lizenzbrowser: Wird der Lizenzbrowser geöffnet und steht direktauf einer Lizenz, wird die zweite Spalte nicht direkt angezeigt<br>
[Bugfix] - OCS-Import: Der Konfigurationslink auf der OCS-Import Seite ist falsch<br>
[Bugfix] - Ist die Logbuch Kategorie auf der Übersichtsseite, erscheinen falsche Werte in der Liste<br>
[Bugfix] - Die Neuanlage einer Benutzerdefinierten Kategorie springt unter gewissen Bedingungen in eine bestehende Kategorie, anstatt einen Neueintrag<br>
[Bugfix] - Ein Problem mit der Scrollleiste im Report Manager wurde behoben<br>
[Bugfix] - Unter einigen Umständen zegit der Datei-Wizard einen Fehler und ist nicht benutzbar<br>
[Bugfix] - In einigen Umgebungen können benutzerdefinierte Kategorien nicht gespeichert werden<br>
[Bugfix] - Objekttyüen können nicht mehr als Container definiert werden<br>
[Bugfix] - Objekte, welche aus dem Template System erzeugt werden erhalten teilweise die gleiche SYS-ID<br>
[Bugfix] - Der CSV-Import wird abgebrochen, wenn nicht alle Zuweisungen gemacht wurden<br>
[Bugfix] - Wenn ein "Gerät / Appliance"-Objekt eine Hostadresse erhalten hat wurde dies nicht in der IP-Liste angezeigt<br>
[Bugfix] - Das letzte Oktett der Layer-3-Netzadresse wird bei einer Neuanlage immer automatisch auf "0" geändert<br>
[Bugfix] - Die LDAP-Authentifizierung wirft einen Datenbank-Fehler und die Anmeldung per LDAP ist nicht möglich<br>
[Bugfix] - Bei installiertem verinice-Modul ist es in der Objekttypkonfiguration nicht möglich beim verinice-Mapping keinen Wert auszuwählen<br>

[Correction d'un bug] - Optimisation de la suppression d'objets dans des environnements/bases de données plus importants<br>.
[Bugfix] - Erreur SQL lorsque les champs ne sont pas spécifiés dans la catégorie Planification<br>.
[Bugfix] - SecurityFix : empêcher le téléchargement de fichiers PHP<br>.
[Bugfix] - Les objets importés via H-Inventory ne reçoivent pas d'entrée dans la catégorie "Général"<br>.
[Bugfix] - Dans l'aperçu du groupe de licences, une seule licence est toujours affichée sous "Nom de la licence"<br>.
[Bugfix] - Reader peut créer des entrées de catégorie à valeur unique<br>.
[Bugfix] - Catégorie "Groupe" : pas d'entrée dans le journal lors de l'ajout d'un objet<br>.
[Bugfix] - Menu Outils mal positionné dans IE<br>.
[Bugfix] - L'auto-complétion du navigateur d'objets affiche des liens cliquables<br>.
[Bugfix] - Le changement de mandant ne fonctionne pas<br>.
[Bugfix] - Catégorie Aperçu des ports : les liens mènent aux ports au lieu des ports réseau<br>.
[Bugfix] - Catégorie Aperçu des ports : aucun défilement horizontal n'apparaît lorsque le nombre de ports est trop élevé<br>.
[Bugfix] - Catégorie Licences / Aperçu : n'est pas traduit en anglais<br>.
[Correction] - Dans certaines catégories, le champ Description n'est pas enregistré<br>.
[Bugfix] - Dans la vue des rapports pour les relations, le navigateur d'objets ne s'affiche pas correctement<br>.
[Bugfix] - Licences : Si aucune date n'est saisie pour le début et l'expiration d'une licence, la date de 1970 apparaît lors de l'attribution d'une licence à un matériel<br>.
[Bugfix] - Navigateur de licences : Si le navigateur de licences est ouvert et se trouve directement sur une licence, la deuxième colonne ne s'affiche pas directement<br>.
[Correction] - Importation OCS : le lien de configuration sur la page d'importation OCS est incorrect<br>.
[Bugfix] - Si la catégorie du journal est sur la page d'aperçu, des valeurs incorrectes apparaissent dans la liste<br>.
[Bugfix] - Dans certaines conditions, la création d'une nouvelle catégorie personnalisée saute dans une catégorie existante au lieu de créer une nouvelle entrée<br>.
[Bugfix] - Correction d'un problème avec la barre de défilement dans le gestionnaire de rapports<br>.
[Bugfix] - Dans certaines circonstances, l'assistant de fichier génère une erreur et n'est pas utilisable<br>.
[Correction] - Dans certains environnements, les catégories personnalisées ne peuvent pas être enregistrées<br>.
[Bugfix] - Les types d'objets ne peuvent plus être définis comme conteneurs<br>.
[Bugfix] - Les objets créés à partir du système de template reçoivent parfois le même SYS-ID<br>.
[Correction] - L'importation CSV est interrompue si toutes les assignations ne sont pas faites<br>.
[Correction] - Lorsqu'un objet "Périphérique / Appliance" recevait une adresse d'hôte, cela n'apparaissait pas dans la liste des IP<br>.
[Correction] - Le dernier octet de l'adresse réseau de la couche 3 est toujours automatiquement changé à "0" lors d'une nouvelle création<br>.
[Bugfix] - L'authentification LDAP renvoie une erreur de base de données et la connexion via LDAP n'est pas possible<br>.
[Bugfix] - Si le module verinice est installé, il n'est pas possible de sélectionner une valeur dans la configuration du type d'objet lors du mappage verinice<br>.

0.9.9-8<br>
Extensions:

0.9.9-8<br>
Extensions :

* Enhanced network documentation<br>
* Validation and maintenance of IPv4 and IPv6 addresses<br>
* Validation of layer 3 networks<br>
* Various accessibility help<br>
* IPv4 address management<br>
* IPv6 address management<br>
* VLANs (layer 2 networks)<br>
* Layer 2 and layer 3 reports<br>
* Category "routing"<br>
* Category "switch"<br>
* Category "net" -> port overview<br>
* Revised interface to Request Tracker (module: TTS)<br>
* Incl. live queries<br>
* New object type "workstation"<br>
* Category "assigned logical units"<br>
* Category "assigned workstation"<br>
* Creation of logical structures/locations (tree view)<br>
* Renaming "logical interfaces" to "logical ports"<br>
* Link from layer 3 net into logical ports<br>
* Note: By changing the functionality of the category "logical interfaces"<br>

* Amélioration de la documentation réseau<br>.
* Validation et maintenance des adresses IPv4 et IPv6<br>.
* Validation des réseaux de couche 3<br>.
* Diverses aides à l'accessibilité<br>
* Gestion des adresses IPv4<br>
* Gestion des adresses IPv6<br>
* VLANs (réseaux de couche 2)<br>
* Layer 2 and layer 3 reports<br>.
* Catégorie "routage"<br>
* Catégorie "switch"<br>
* Category "net" -> port overview<br>
* Interface révisée avec Request Tracker (module : TTS)<br>
* Incl. live queries<br>
* Nouveau type d'objet "workstation"<br>
* Category "assigned logical units"<br>
* Catégorie "poste de travail assigné"<br>
* Création de structures/localisations logiques (vue arborescente)<br>
* Renommer les "interfaces logiques" en "ports logiques"<br>.
* Link from layer 3 net into logical ports<br>.
* Note : En changeant la fonctionnalité de la catégorie "interfaces logiques"<br>.

this version only links layer 3 networks. Therefore all layer 2 network<br>
assignments are lost.<br>

cette version ne relie que les réseaux de couche 3. Par conséquent, tous les réseaux de couche 2<br> sont perdus.
sont perdus.<br>

* Coupling of manufacturers to model in the category "model"<br>
* Network mask in "hostaddresses" and layer 3 network and optionally in bit<br>

* Coupling of manufacturers to model in the category "model"<br>
* Network mask in "hostaddresses" and layer 3 network and optionally in bit<br>

notation<br>

notation<br>

* In the category "net" there must be a field of "reverse DNS".<br>
* New object type: "layer 2 networks"<br>
* Category "port": new field "layer 2 network"<br>
* Category "port": new field "port mode"<br>
* New category: "layer 2 net"<br>
* New category: assigned objects<br>
* Category "hostaddresses": new field "assigned port"<br>
* Layer 3 net address and host extensions<br>
* New category: "ip addresses"<br>
* New category: "port overview"<br>
* New category: "audit"<br>
* Extension of category "switch"<br>
* Extension of category "routers"<br>

* Dans la catégorie "net", il doit y avoir un champ de "reverse DNS".<br>
* Nouveau type d'objet : "layer 2 networks"<br>
* Category "port" : nouveau champ "layer 2 network"<br>
* Category "port" : nouveau champ "port mode"<br>
* New category : "layer 2 net"<br>
* New category : assigned objects<br>
* Category "hostaddresses" : new field "assigned port"<br>
* Layer 3 net address and host extensions<br>
* New category : "ip addresses"<br>
* New category : "port overview"<br>
* Nouvelle catégorie : "audit"<br>
* Extension de la catégorie "switch"<br>
* Extension de la catégorie "routeurs"<br>.

Fixes:

Corrections :

[Bugfix] - Date field bug in all IEs<br>
[Bugfix] - Adding a new client: The client is not created, it is offered for downloading via JSON.<br>
[Bugfix] - Object Browser bug on multi selection in the second list<br>
[Bugfix] - Bug in the view of IT service relations<br>
[Bugfix] - Layer 3 network: network with a higher mask than /32 should not be possible.<br>
[Bugfix] - Export templates can not be displayed or deleted.<br>
[Bugfix] - Slow performance when deleting an object<br>
[Bugfix] - Saving a normal report (SQL) backslashes are automatically added.<br>
[Bugfix] - Search does not find entries in the category "access".<br>
[Bugfix] - Compatibility of the new browsers in Internet Explorer 8 faulty<br>
[Bugfix] - Hostaddresses: g_unique_check in config has no effect.<br>
[Bugfix] - Pagination for inventoried items under import does not work.<br>
[Bugfix] - Duplication of interfaces: Type is not accepted.<br>
[Bugfix] - It is possible to select oneself as a location. This creates an infinite loop.<br>
[Bugfix] - H-Inventory can no longer update existing objects since 0.9.9-7.<br>
[Bugfix] - When you let a dragged object go, it does not moves back in the object list but hangs somewhere on the screen.<br>
[Bugfix] - CSV import: Child categories are not displayed.<br>
[Bugfix] - Category cabling defect<br>
[Bugfix] - Changes for people in a department are not possible.<br>
[Bugfix] - Apostrophes (') for dialog+ boxes cause errors<br>
[Bugfix] - Error message when you see a detailed view of a group member<br>
[Bugfix] - When creating a new server, the name is not saved.<br>
[Bugfix] - "Foreign key constraint fails" while duplication of an organization<br>
[Bugfix] - Navigation: Back button in the tree jumps to the wrong place.<br>
[Bugfix] - Object browser throws parameter error.<br>
[Bugfix] - Incorrect duplication dialog in the object type "contact"<br>
[Bugfix] - importing an object (to which a license was assigned) does not work.<br>
[Bugfix] - Special characters mess up XML export.<br>
[Bugfix] - Validation: category "global" forgets properties.<br>
[Bugfix] - Overview page shows no dialog+ fields.<br>
[Bugfix] - Type image in category "Contact assignment" is incorrect.<br>
[Bugfix] - The check all function in connection lists with several different tables does not work as expected.<br>
[Bugfix] - Import/export of the category "virtual devices" does not work anymore.<br>
[Bugfix] - The filter for the object lists does not work at the category ports.<br>
[Bugfix] - When moving a device in the rack view, it loses the insertion configuration.<br>
[Bugfix] - After using the CMDB explorer, there is no scroll bar in i-doit anymore.<br>

[Bugfix] - Bug du champ date dans tous les IE<br>.
[Bugfix] - Ajout d'un nouveau client : le client n'est pas créé, il est proposé au téléchargement via JSON.<br>
[Bugfix] - Bug du navigateur d'objets sur la multi-sélection dans la seconde liste<br>.
[Bugfix] - Bug dans la vue des relations de service informatique<br>.
[Bugfix] - Réseau de couche 3 : le réseau avec un masque supérieur à /32 ne devrait pas être possible.<br>
[Bugfix] - Les modèles d'exportation ne peuvent pas être affichés ou supprimés.<br>
[Bugfix] - Performance lente lors de la suppression d'un objet<br>.
[Bugfix] - Les backslashs sont automatiquement ajoutés lors de la sauvegarde d'un rapport normal (SQL).<br>
[Bugfix] - La recherche ne trouve pas les entrées dans la catégorie "accès".<br>
[Bugfix] - Compatibilité des nouveaux navigateurs dans Internet Explorer 8 incorrecte<br>.
[Bugfix] - Adresses des hôtes : g_unique_check dans la config n'a pas d'effet.<br>
[Bugfix] - La pagination pour les éléments inventoriés sous import ne fonctionne pas.<br>
[Bugfix] - Duplication d'interfaces : le type n'est pas accepté.<br>
[Bugfix] - Il est possible de se sélectionner soi-même comme emplacement. Cela crée une boucle infinie.<br>
[Bugfix] - H-Inventory ne peut plus mettre à jour les objets existants depuis la version 0.9.9-7.<br>
[Bugfix] - Lorsque vous laissez partir un objet glissé, il ne se déplace pas en arrière dans la liste des objets mais reste accroché quelque part sur l'écran.<br>
[Bugfix] - Importation CSV : les catégories enfants ne sont pas affichées.<br>
[Bugfix] - Défaut d'habillage des catégories<br>.
[Bugfix] - Les modifications pour les personnes d'un même département ne sont pas possibles.<br>
[Bugfix] - Les apostrophes (') pour les boîtes de dialogue+ provoquent des erreurs<br>.
[Bugfix] - Message d'erreur lors de l'affichage d'une vue détaillée d'un membre du groupe<br>.
[Bugfix] - Lors de la création d'un nouveau serveur, le nom n'est pas sauvegardé.<br>
[Bugfix] - "Foreign key constraint fails" lors de la duplication d'une organisation<br>.
[Bugfix] - Navigation : le bouton retour dans l'arborescence saute au mauvais endroit.<br>
[Bugfix] - Le navigateur d'objets provoque une erreur de paramètre.<br>
[Bugfix] - Dialogue de duplication incorrect dans le type d'objet "contact"<br>.
[Bugfix] - L'importation d'un objet (pour lequel une licence a été attribuée) ne fonctionne pas.<br>
[Bugfix] - Les caractères spéciaux font défaut dans l'exportation XML.<br>
[Bugfix] - Validation : catégorie "global" forge des propriétés.<br>
[Bugfix] - La page d'aperçu ne montre pas les champs dialog+.<br>
[Bugfix] - L'image de type dans la catégorie "Affectation des contacts" est incorrecte.<br>
[Bugfix] - La vérification de toutes les fonctions dans les listes de connexion avec plusieurs tables différentes ne fonctionne pas comme prévu.<br>
[Bugfix] - L'importation/exportation de la catégorie "virtual devices" ne fonctionne plus.<br>
[Bugfix] - Le filtre pour les listes d'objets ne fonctionne pas pour les ports de la catégorie.<br>
[Bugfix] - Lors du déplacement d'un périphérique dans la vue en rack, il perd la configuration d'insertion.<br>
[Bugfix] - Après avoir utilisé l'explorateur CMDB, il n'y a plus de barre de défilement dans i-doit.<br>

0.9.9-7<br>

0.9.9-7<br>

* Überarbeitung der Druckansichten<br>
* Abrundung Im- und Export, Duplizierung und Template-System<br>
* Komplettierung fehlender Kategorien<br>
* Verbesserung des CSV Imports<br>
* Export von benutzerdefinierten Kategorien<br>
* verbesserter Umgang mit Referenzen beim Import/Templating/Duplizieren<br>
* Verbesserung der CMDB Browser<br>
* Neuer Objektbrowser für Verknüpfung von CMDB Objekten<br>
* Neuer Anschlussbrowser für die Verbindung von Geräten (Netzwerk, Storage, ..)<br>
* Neuer Objekttyp SIM-Karte<br>
* Neue Kategorie SIM-Karte<br>
* Neuer Objekttyp Kryprokarte<br>
* Neue Kategorie Kryptokarte<br>
* Neue Kategorie TSI-Service<br>
* Verbindung der Mobilkarten mit Mobiltelefonen<br>
* Abschaffung des Menüpunkts Module; Ersetzt durch: Extras<br>
* Verlagerung der Modulkonfiguration in "Verwaltung"<br>
* Verbesserung der Änderungshistorie im Logbuch<br>
* Fehlerbehebungen<br>

* Révision des vues d'impression<br>.
* Arrondissement de l'importation et de l'exportation, duplication et système de modèles<br>.
* Compléter les catégories manquantes<br>
* Amélioration de l'importation CSV<br>
* Exportation des catégories personnalisées<br>.
* amélioration de la gestion des références lors de l'importation/duplication/de la duplication<br>.
* Amélioration du navigateur CMDB<br>.
* Nouveau navigateur d'objets pour la liaison d'objets CMDB<br>.
* Nouveau navigateur de connexion pour la connexion de périphériques (réseau, stockage, ..)<br>
* Nouveau type d'objet carte SIM<br>
* Nouvelle catégorie carte SIM<br>
* Nouveau type d'objet carte cryptographique<br>
* Nouvelle catégorie Carte cryptographique<br>
* Nouvelle catégorie Service TSI<br>
* Connexion des cartes mobiles aux téléphones portables<br>
* Suppression de l'option de menu Modules ; remplacée par : Outils<br>
* Déplacement de la configuration des modules dans "Gestion"<br>
* Amélioration de l'historique des modifications dans le journal<br>.
* Correction de bugs<br>

0.9.9-6<br>

0.9.9-6<br>

* Neues Navigationselement: CMDB-Explorer<br>
* mit folgenden Darstellungsfunktionen:<br>
* IT Servicesicht<br>
* Clustersicht<br>
* Virtualisierungssicht<br>
* Standortsicht<br>
* CMDB-Status für Objekte zur Abbildung des ITIL Lebenszyklus<br>
* Der Systemstatus von i-doit wurde umbenannt in Zustand<br>
* Vorausplanung und Dokumentation von Statuswechsel, "Gültigkeitszeitraum"<br>
* Abschaffung Abhängigkeiten; neues überarbeitetes Beziehungsmodell<br>
* Hauptmenüpunkt Abhängigkeiten wird zu Beziehungen<br>
* Gleichgerichtete Beziehungen (z.B. Cluster)<br>
* IT-Grundschutzmodul<br>
* Import IT-Grundschutzkatalog<br>
* diverse Auswertungen<br>
* Generischer CSV-Import<br>
* Neue Objekttypen<br>
* Middleware (und SOA Applikationen)<br>
* Replikation<br>
* Datenbankinstanz<br>
* Neue konfigurierbare Standardfarben für Objekttypen<br>
* Autosuggestion im Textfeld für Objektverknüpfungen<br>
* Neue Gruppierungskategorie im IT Service: IT-Service Typ<br>
* globale Beziehungssicht im IT Service für dessen Komponenten<br>
* gruppiertes Logbuch im IT Service<br>
* Entferunung der Hintergrundfarbe von Kategorie-icons<br>
* Behobene von Fehlern<br>
* beim Browsen im Logbuch<br>
* bei der Zuordnung von Partitionen zu Software RAID<br>
* beim Duplizieren<br>
* beim Importierten von Software über OCS<br>
* beim Filtern von Objekten im Objekt-Browser<br>
* Bessere Darstellung dess Namens für verbundene Anschlüsse<br>
* Hostadresse hat einen Leereintrag auf Übersichtsseite beim<br>

* Nouvel élément de navigation : CMDB-Explorer<br>.
* avec les fonctions d'affichage suivantes :<br>
* Vue des services informatiques<br>
* Vue du cluster<br>
* Vue de la virtualisation<br>
* Vue du site<br>
* Statut CMDB pour les objets afin de représenter le cycle de vie ITIL<br>.
* L'état du système d'i-doit a été renommé en état<br>.
* Planification à l'avance et documentation du changement d'état, "période de validité"<br>
* Suppression des dépendances ; nouveau modèle de relation révisé<br>.
* L'option principale du menu Dépendances devient Relations<br>.
* Relations alignées (par ex. clusters)<br>
* Module de protection IT de base<br>
* Importation du catalogue de protection IT de base<br>
* diverses évaluations<br>
* Importation générique CSV<br>
* nouveaux types d'objets<br>
* Middleware (et applications SOA)<br>
* Réplication<br>
* Instance de base de données<br>
* Nouvelles couleurs standard configurables pour les types d'objets<br>.
* Autosuggestion dans le champ de texte pour les liens d'objets<br>
* Nouvelle catégorie de regroupement dans le service IT : IT Service Type<br>
* vue globale des relations dans le service informatique pour ses composants<br>.
* Journal de bord groupé dans le service informatique<br>.
* Suppression de la couleur de fond des icônes de catégorie<br>.
* Correction d'erreurs<br>.
* lors de la navigation dans le journal de bord<br>
* lors de l'affectation de partitions à un RAID logiciel<br>.
* lors de la duplication<br>
* lors de l'importation de logiciels via OCS<br>.
* lors du filtrage d'objets dans le navigateur d'objets<br>.
* Meilleure représentation du nom pour les ports connectés<br>.
* L'adresse de l'hôte a une entrée vide sur la page d'aperçu lors du<br>.

Nichtausfüllen erzeugt<br>

Non-remplissage généré<br>

* verbesserte Berechnung der CPU Frequenz in Objekt- und Clustervitalität<br>
* Verbesserung bei Selectfeldern in Änderungshistorie<br>
* diverse kleine Fehlerbehebungen<br>
* erhöhte Stabilität<br>

* Amélioration du calcul de la fréquence CPU dans la vitalité des objets et des clusters<br>.
* amélioration des champs de sélection dans l'historique des modifications<br>.
* diverses petites corrections de bugs<br>.
* stabilité accrue<br>.

0.9.9-5<br>

0.9.9-5<br>

* Many many bugfixes!<br>
* New ajax location browser (much fuster, no freeze anymore)<br>
* Categories are now sorted alphanumerically<br>
* Category group colors were removed<br>
* New object type DBMS<br>
* New categories for DBMS<br>
* DBMS<br>
* Database instance (practicable for oracle databases)<br>
* New object type Database schema<br>
* New categories for database schema<br>
* database schema<br>
* database links<br>
* Fixed different h-inventory problems where XML Import results in a parse error<br>
* New category IT Service components<br>
* New category computing resources<br>
* New category object vitality<br>
* The objecttypes are now shown as a row in an object group list<br>
* Special character problem (öäü broken) after duplicating fixed<br>
* Virtual machines are now able to get assigned to a cluster<br>
* Fixed HTTP Port problem in Internet Explorer<br>
* Duplicated objects don't get an own sys-id<br>
* Javascript error fixed in shared storage<br>
* Search now works with special characters<br>
* Sorting a search result works now<br>
* The Port -> Interface list now also display the interfaces slot number<br>
* Duplicating a template creates a new regular object instead of a template<br>
* Archiving and deleting now works for ports and fc-ports<br>
* Right groups can now only be edited by an admin<br>

* Many many bugfixes!<br>
* New ajax location browser (much fuster, no freeze anymore)<br>
* Les catégories sont maintenant classées alphanumériquement<br>.
* Les couleurs des groupes de catégories ont été supprimées<br>.
* Nouveau type d'objet DBMS<br>
* New categories for DBMS<br>
* DBMS<br>
* Database instance (practicable for oracle databases)<br>
* New object type Database schema<br>
* New categories for database schema<br>
* schéma de base de données<br>
* liens de base de données<br>
* Correction de différents problèmes d'inventaire h où l'importation XML résulte en une erreur d'analyse<br>.
* Nouvelle catégorie IT Service components<br>
* New category computing resources<br>
* Nouvelle catégorie vitalité des objets<br>.
* Les types d'objets sont maintenant affichés en ligne dans une liste de groupes d'objets<br>.
* Correction d'un problème de caractère spécial (öäü cassé) après duplication<br>.
* Les machines virtuelles peuvent maintenant être assignées à un cluster<br>.
* Correction d'un problème de port HTTP dans Internet Explorer<br>.
* Les objets dupliqués n'ont pas leur propre sys-id<br>.
* Erreur Javascript corrigée dans le stockage partagé<br>.
* Search works now with special characters<br>
* Le tri d'un résultat de recherche fonctionne maintenant<br>.
* La liste Port -> Interface affiche maintenant aussi le numéro de slot des interfaces<br>.
* Dupliquer un modèle crée un nouvel objet régulier au lieu d'un modèle<br>.
* Archiving and deleting now works for ports and fc-ports<br>
* Les groupes de droite ne peuvent désormais être édités que par un admin<br>.

0.9.9-4<br>

0.9.9-4<br>

* Extended documenattion of virtualized environments<br>
* New object type virtual host<br>
* New object type virtual server<br>
* New object type virtual client<br>
* New categories for virtual machines:<br>
* Virtual host<br>
* Virtual devices<br>
* Virtual witch<br>
* Shared virtual switches<br>
* Documentation of clusters and cluster servies<br>
* New object type cluster<br>
* New object tyoe cluster-service<br>
* New category cluster<br>
* New category cluster-service<br>
* New category cluster members<br>
* New category shared storage<br>
* New category cluster vitality<br>
* New category cluster ressources<br>
* Duplication of objects<br>
* New category shares<br>
* Empty categories now look a bit palish<br>
* Mass completion of workflows<br>

* Extended documenattion of virtualized environments<br>
* Nouveau type d'objet virtual host<br>
* New object type virtual server<br>
* New object type virtual client<br>
* New categories for virtual machines:<br>
* Virtual host<br>
* Périphériques virtuels<br>
* Virtual witch<br>
* Commutateurs virtuels partagés<br>
* Documentation des clusters et des services de cluster<br>
* Nouveau type d'objet cluster<br>
* New object tyoe cluster-service<br>
* New category cluster<br>
* New category cluster-service<br>
* New category cluster members<br>
* Nouvelle catégorie stockage partagé<br>
* Nouvelle catégorie cluster vitalité<br>
* Nouvelle catégorie cluster ressources<br>
* Duplication d'objets<br>
* New category shares<br>
* Empty categories now look a bit palish<br>
* Achèvement en masse des workflows<br>.

Bugfixes:<br>

Corrections de bugs:<br>

* Fixed: Search doesn't work in redbox theme<br>
* Fixed: Search didn't escape special chars<br>
* Several IE-specific issues<br>

* Fixed : Search does not work in redbox theme<br>
* Fixed : Search didn't escape special chars<br>
* Plusieurs problèmes spécifiques à IE<br>.

0.9.9-3<br>

0.9.9-3<br>

* Komplettüberarbeitung der i-doit Kontakte<br>
* Kontakte sind nun richtige Objekte (Configuration Items)<br>
* Neuer Objekttyp Person<br>
* Neuer Objekttyp Organisation<br>
* Neuer Objekttyp Personengruppe<br>
* Trennung von Login und Stammdaten einer Person<br>
* Überarbeitung Storage (Bildung von SAN-Zonen, Abbildung komplexer SAN Strukturen)<br>
* Neuer Objekttyp San-Zone<br>
* Neue Kategorie Lokaler Massenspeicher zur Gruppierung von<br>
* Speicher Geräten<br>
* Controller<br>
* Raid Verbund<br>
* Neue Kategorie Speichernetze (Netzwerkspeicher) zur Gruppierung von<br>
* Logischen Geräten (LDEV Server)<br>
* Logischen Geräten (LDEV Client)<br>
* FC-Ports<br>
* Hostadapter (HBA)<br>
* Umbenennung SAN-Pool in Speichersystem<br>
* Die Sprachauswahl beim Login wurde von den Mandanten getrennt<br>
* Bookmark Link zur aktuellen Seite in der Navigationszeile der Listen<br>
* Jedes i-dot Objekt ist nun mit einem QR Code ausgestattet, welcher den aktuellen Link beinhaltet<br>
* Barcode sind nun (über einen Klick auf das Bild) druckbar<br>
* Der Standard Barcode ist nun QR. In der src/constants.in.php in<br>

* Révision complète des contacts i-doit<br>.
* Les contacts sont désormais de véritables objets (Configuration Items)<br>
* Nouveau type d'objet Personne<br>
* Nouveau type d'objet Organisation<br>
* Nouveau type d'objet Groupe de personnes<br>
* Séparation du login et des données de base d'une personne<br>
* Révision du stockage (création de zones SAN, représentation de structures SAN complexes)<br>
* Nouveau type d'objet San-Zone<br>
* Nouvelle catégorie Mémoire de masse locale pour regrouper les<br>
* Périphériques de stockage<br>
* Contrôleur<br>
* Réseau Raid<br>
* Nouvelle catégorie Réseaux de stockage (stockage en réseau) pour le regroupement de<br>
* Périphériques logiques (serveurs LDEV)<br>
* Appareils logiques (LDEV Client)<br>
* Ports FC<br>
* Adaptateur hôte (HBA)<br>
* Changement du nom du pool SAN en système de stockage<br>.
* Le choix de la langue lors de la connexion a été séparé des mandants<br>.
* Lien bookmark vers la page actuelle dans la barre de navigation des listes<br>.
* Chaque objet i-dot est maintenant équipé d'un code QR qui contient le lien actuel<br>.
* Les codes-barres sont désormais imprimables (en cliquant sur l'image)<br>.
* Le code-barres par défaut est désormais QR. Dans le src/constants.in.php dans<br>

Zeile 35 kann der gewohnte Code39 wieder aktiviert werden<br>

ligne 35, le code39 habituel peut être réactivé<br>.

* Neue Mandantenverwaltung, erreichbar über /admin<br>
* Aktivierung und setzen des Passworts in config.inc.php : $g_admin_auth<br>

* Nouvelle gestion des mandants, accessible via /admin<br>
* Activation et définition du mot de passe dans config.inc.php : $g_admin_auth<br>

Bugfixes:<br>

Corrections de bugs:<br>

* Fehler beim Filtern einiger Listen<br>
* Kontakte können nicht archiviert und gelöscht werden<br>
* Lizenz Handler verschickte bei Überschreitung mail imt "allen" Lizenzen<br>
* Problem beim Import über OCS wurde beseitigt<br>
* Anschluss Browser zeigt alle Anschlüsse als Ausgänge an<br>
* Import von Kategorie Buchhaltung funktioniert nicht zu 100%<br>
* Organisationen und Gruppen können im Kontakt Browser nicht abgewählt werden<br>
* Anschlüsse: Anschlusspärchen wird falsch exportiert<br>
* Anschlüsse: Ein Klick auf das Anschlusspärchen im edit mode lädt i-doit ohne Stylesheet<br>

* Erreur lors du filtrage de certaines listes<br>.
* Impossible d'archiver et de supprimer des contacts<br>.
* Le gestionnaire de licences envoyait un mail imt "toutes" licences en cas de dépassement<br>.
* Problème d'importation via OCS résolu<br>.
* Le navigateur de connexions affiche toutes les connexions comme sorties<br>.
* L'importation de la catégorie Comptabilité ne fonctionne pas à 100%<br>.
* Les organisations et les groupes ne peuvent pas être désélectionnés dans le navigateur de contacts<br>.
* Raccords : Les paires de raccords sont exportées de manière incorrecte<br>.
* Connexions : Un clic sur la paire de raccords en mode edit charge i-doit sans feuille de style<br>.

0.9.9-2<br>

0.9.9-2<br>

* Anbindung an OCS Datenbank<br>
* Import von inventarisierten OCS Objekten<br>
* Komplett überarbeitete Verwaltung von Stromobjekten (Vorhandene Stromdaten werden weitgehend migriert)<br>
* Neuer Objekttyp: Energieversorgungsunternehmen<br>
* Neuer Objekttyp: Netzersatzanlage<br>
* Neuer Objekttyp: Verteilerkasten<br>
* Neuer Objekttyp: Unterbrechungsfreie Stromversorgung<br>
* Neuer Objekttyp: Steckdosenleiste<br>
* Neue Kategorie: Stromverbraucher<br>
* Import / Export von Stromobjekten<br>
* Neue Visualisierung von verschachtelten Kabelwegen (insb. bei Mehrfachsteckdosen)<br>
* Übernahme von Netzinformationen bei Zuweisung eines Layer-3-Netzes unter Hostadresse<br>
* DNS Server und Domäne unter Hostadresse verwenden nun Dialog+ des Layer-3-Netzes<br>
* Die Standort Kategorie ermöglicht nun das beidseitige Positionieren eines Geräts im Rack ("Einschub: vorne und hinten")<br>
* Sortieren von Standorten in der Listenansicht<br>
* JSON Schnittstelle zur Abrufung von Kategorie Inhalten<br>
* In der Kabelliste werden die unmittelbar Verbundenen Anschlüsse dargestellt<br>
* Kategorie Version nun exportierbar<br>

* Connexion à la base de données OCS<br>
* Importation d'objets OCS inventoriés<br>
* Gestion entièrement revue des objets électricité (les données électricité existantes sont en grande partie migrées)<br>
* Nouveau type d'objet : Entreprise d'approvisionnement en énergie<br>
* Nouveau type d'objet : Installation de remplacement du réseau<br>
* Nouveau type d'objet : Boîte de distribution<br>
* Nouveau type d'objet : Alimentation sans coupure<br>
* Nouveau type d'objet : Bloc multiprise<br>
* Nouvelle catégorie : Consommateur d'électricité<br>
* Importation / exportation d'objets d'électricité<br>
* Nouvelle visualisation des chemins de câbles imbriqués (en particulier pour les prises multiples)<br>
* Reprise des informations de réseau lors de l'attribution d'un réseau de couche 3 sous adresse d'hôte<br>.
* Le serveur DNS et le domaine sous l'adresse hôte utilisent désormais le dialogue+ du réseau de couche 3<br>.
* La catégorie de site permet désormais de positionner un appareil des deux côtés du rack ("insertion : avant et arrière")<br>.
* Tri des sites dans la vue en liste<br>.
* Interface JSON pour récupérer le contenu des catégories<br>.
* Dans la liste des câbles, les raccordements directement connectés sont représentés<br>.
* Version de la catégorie désormais exportable<br>.

Bugfixes (gekürzt):<br>

Corrections de bugs (abrégées) :<br>

* Fehler beim Auslesen der Höheneinheiten eines Geräts (Schrankansicht)<br>
* Fehler beim Eintragen eines Netzes<br>
* Datenbank Exception beim Exportieren einer NAGIOS Konfiguration<br>
* Quickinfo Fenster bleiben unter einigen Umständen im Firefox hängen<br>
* In der Logbuch Detailansicht fehlen die geänderten Werte<br>
* Authoren sollten Templates anwenden können<br>
* Der Listenfilter filtert nur nach Textfeldern (wie z.B. Objekt namen), nicht aber nach z.B. Standorten<br>
* Bei Umbenennung eines Ports oder einer Schnittstelle wird der zugehörige Anschluss nicht umbenannt<br>
* Bei Ablauf der Session werden temporäre Tabellen nicht gelöscht<br>
* Layer 3 Netz: Adressbereich wird bei DHCP Auswahl aus- bzw. eingeblendet<br>
* Unter einigen Umständen können keine Kontakte zugewiesen werden<br>
* i-doit Logo ist in Exceptions nicht sichtbar<br>
* Archivierte und gelöschte Objekte verschwinden nicht aus der Schrankansicht<br>
* NAGIOS: n/a Werte werden im i-doit als 01.01.1970 dargestellt<br>

* Erreur lors de la lecture des unités de hauteur d'un appareil (vue de l'armoire)<br>.
* Erreur lors de la saisie d'un réseau<br>
* Exception de base de données lors de l'exportation d'une configuration NAGIOS<br>.
* Les fenêtres d'info-bulles se bloquent dans certaines circonstances dans Firefox<br>.
* Les valeurs modifiées ne sont pas affichées dans la vue détaillée du journal<br>.
* Les auteurs devraient pouvoir appliquer des modèles<br>.
* Le filtre de liste ne filtre que les champs de texte (comme les noms d'objets), mais pas les sites par exemple<br>.
* Si un port ou une interface est renommé, le port correspondant n'est pas renommé<br>.
* Les tables temporaires ne sont pas supprimées à l'expiration de la session<br>.
* Réseau de couche 3 : La plage d'adresses est masquée ou affichée lors de la sélection DHCP<br>.
* Dans certaines circonstances, les contacts ne peuvent pas être attribués<br>.
* Le logo i-doit n'est pas visible dans les exceptions<br>.
* Les objets archivés et supprimés ne disparaissent pas de la vue du meuble<br>.
* NAGIOS : les valeurs n/a sont affichées dans i-doit comme 01.01.1970<br>.

0.9.9-1<br>

0.9.9-1<br>

* Kabel und Patch Management<br>
* Neuer Objekttyp: Kabel<br>
* Neuer Objekttyp: Verstärker<br>
* Neuer Objekttyp: Patchfeld (Patchpanel)<br>
* Neuer Objekttyp: Leitungsnetz<br>
* Neuer Objekttyp: Konverter<br>
* Kategorie Anschlüsse und Verbindungslogik<br>
* Anschlussbrowser<br>
* Kategorie Rechnungen<br>
* Erweiterung der Kategorie Wartungsverträge<br>
* Neuer Objekttyp: IT-Service<br>
* Anbindung an Ticket System: Request Tracker über Modul<br>
* Cron synchronisation von Tickets<br>
* Neue Kategorie Tickets<br>
* Nahtloser Wechsel zwischen Mandanten inmitten einer aktiven Session über<br>

* Câbles et gestion des patchs<br>
* Nouveau type d'objet : Câble<br>
* Nouveau type d'objet : Amplificateur<br>
* Nouveau type d'objet : Panneau de brassage (patch panel)<br>
* Nouveau type d'objet : Réseau de câbles<br>
* Nouveau type d'objet : Convertisseur<br>
* Catégorie Raccords et logique de connexion<br>
* Navigateur de connexions<br>
* Catégorie Factures<br>
* Extension de la catégorie Contrats de maintenance<br>
* Nouveau type d'objet : Service informatique<br>
* Connexion au système de tickets : Request Tracker via module<br>
* Synchronisation Cron des tickets<br>
* Nouvelle catégorie Tickets<br>
* Changement de mandant sans interruption au milieu d'une session active via<br>.

einen "Mouse Over" des Mandanten Namen (links oben)<br>

un "mouse over" du nom du mandant (en haut à gauche)<br>.

* Plausibilitätsprüfungen in der Kategorie Hostadresse (Konfigurierbar<br>

* Contrôles de plausibilité dans la catégorie Adresse de l'hôte (Configurable<br>)

in config.inc.php):<br>

dans config.inc.php) :<br>

* Prüfung auf Doppelvergabe von IP-Adressen.<br>
* Prüfung auf Verfügbarkeit einer IP-Adresse im zugewiesenen Netz über<br>

* Vérification de la double attribution d'adresses IP.<br>
* Vérification de la disponibilité d'une adresse IP sur le réseau attribué via<br>.

einen Refresh Knopf neben der IP-Adresse<br>

un bouton Refresh à côté de l'adresse IP<br>.

* Prüfung auf Doppelvergabe von Objektnamen (z.B. Servername).<br>
* Verwaltung von IPv6 Adressen.<br>
* Entwicklung einer neuen "Custom-Value" Kategorie, welche es ermöglicht Werte<br>

* Vérification de la double attribution des noms d'objets (par ex. nom du serveur).<br>
* Gestion des adresses IPv6.<br>
* Développement d'une nouvelle catégorie "Custom-Value", qui permet de définir des valeurs<br>.

zu frei definierbaren Feldern hinzuzufügen. Custom Kategorien können über<br>
das unter Module befindliche Modul "Benutzerdefinierte Kategorie" erzeugt<br>
und zu Objekt Typen zugewiesen werden.<br>

à des champs librement définissables. Les catégories personnalisées peuvent être créées via<br>
le module "Catégorie personnalisée" situé sous Modules<br>.
et être attribuées à des types d'objets.

* Das Logbuch ermöglicht die Suche nach CMDB Änderungen (Sowohl Global als auch<br>

* Le journal de bord permet de rechercher les modifications CMDB (à la fois globales et

in der Kategorie Logbuch)<br>

dans la catégorie Journal de bord)<br>

* Ebenso wurde das Logbuch um eine Funktion für Freitext Meldungen erweitert<br>
* Report Browser<br>
* ausführbare Standard Reports<br>
* Tag Zuordnung für eine Kontaktzuweisung in der Kategorie Kontakte<br>
* Bugfixes<br>

* De même, le journal de bord a été complété par une fonction pour les messages en texte libre<br>.
* Navigateur de rapports<br>.
* Rapports standard exécutables<br>.
* Attribution de tags pour une attribution de contacts dans la catégorie Contacts<br>.
* Correction de bugs<br>.

0.9.9<br>

0.9.9<br>

* Unzählige Verbesserungen im Datenbank Model, was impliziet folgende<br>

* D'innombrables améliorations dans le modèle de base de données, ce qui implique les points suivants

Auswirkungen auf den Umgang mit i-doit hat:<br>

a des conséquences sur l'utilisation d'i-doit :<br>

* Höhere Datenverfügbarkeit<br>
* Erhöhung der Performance in größeren Umgebungen<br>
* Einfachereres Reporting<br>
* Vereinfachung von CMDB Abfragen<br>
* Rationalisierungen innerhalb der Mandanten und System Datenbank<br>
* Neue globale Kategorie: IP Adresse<br>
* Zuweisung zu allen Objekttypen unabhänging von der Netzwerk Kategorie<br>
* Neuer Objekttyp: Host<br>
* Dashboard & Widget System als Willkommensseite<br>
* Widget: Quicklaunch<br>
* Widget: Tipps<br>
* Widget: My latest changes<br>
* Ablösung der Sprachverwaltung innerhalb der Datenbank<br>
* Sprachkonstanten werden von nun an in Dateien verwaltet (src/lang/*.inc.php).<br>
* Neue Möglichkeit für "Custom" Sprachsets (src/lang/*_custom.inc.php)<br>
* Neue erweiterte Suche innerhalb der CMDB<br>
* Wechseln der Sprache ohne Logout<br>
* Entfernung der dynamischen und Port Kategorien (Bis auf IP)<br>

* Meilleure disponibilité des données<br>
* Augmentation de la performance dans des environnements plus grands<br>.
* Reporting plus simple<br>
* Simplification des requêtes CMDB<br>.
* Rationalisation de la base de données des clients et du système<br>.
* Nouvelle catégorie globale : adresse IP<br>.
* Attribution à tous les types d'objets indépendamment de la catégorie réseau<br>.
* Nouveau type d'objet : Hôte<br>
* Tableau de bord & widget système comme page de bienvenue<br>
* Widget : Quicklaunch<br>
* Widget : Astuces<br>
* Widget : My latest changes<br>
* Remplacement de la gestion des langues au sein de la base de données<br>.
* Les constantes de langue sont désormais gérées dans des fichiers (src/lang/*.inc.php).<br>
* Nouvelle possibilité pour les ensembles de langues "custom" (src/lang/*_custom.inc.php)<br>
* Nouvelle recherche avancée dans la CMDB<br>.
* Changement de langue sans déconnexion<br>.
* Suppression des catégories dynamiques et de port (sauf IP)<br>.

---> ACHTUNG: Datenverlust möglich <---<br>

---> ATTENTION : perte de données possible <---<br>

* Updated database model, which implicitly means<br>
* Higher data availability<br>
* Increasing performance in large environments<br>
* Easier reporting<br>
* Simplification of CMDB queries<br>
* Streamlining of mandator and system database<br>
* New global category: IP-Address<br>
* Assignment to all objecttypes independent of the network category<br>
* New objecttype: Host<br>
* Dashboard and widget system as welcome page<br>
* Widget: Quicklaunch<br>
* Widget: Tips<br>
* Widget: My latest changes<br>
* Replacement of the old language administration inside the system database<br>
* Language constants are administarted inside files from now on (src/lang/*.inc.php)<br>
* New possibility to add custom language sets (src/lang/*_custom.inc.php)<br>
* New extended search within the CMDB<br>
* Changing language without logging out<br>
* Remove of dynamic and port categories (Except IP)<br>

* Modèle de base de données mis à jour, ce qui signifie implicitement<br>.
* Augmentation de la disponibilité des données<br>.
* Augmentation de la performance dans les grands environnements<br>.
* Reporting plus facile<br>
* Simplification des requêtes CMDB<br>
* Streamlining de la base de données mandataire et système<br>
* Nouvelle catégorie globale : Adresse IP<br>.
* Assignation à tous les types d'objets indépendamment de la catégorie réseau<br>.
* Nouveau type d'objet : Host<br>
* Dashboard et widget system comme page d'accueil<br>
* Widget : Quicklaunch<br>
* Widget : Tips<br>
* Widget : My latest changes<br>
* Replacement of the old language administration inside the system database<br>
* Language constants are administarted inside files from now on (src/lang/*.inc.php)<br>
* Nouvelle possibilité d'ajouter des jeux de langues personnalisés (src/lang/*_custom.inc.php)<br>
* Nouvelle recherche étendue dans la CMDB<br>.
* Changement de langue sans se déconnecter<br>.
* Suppression des catégories dynamiques et de port (Excepté IP)<br>

---> ATTENTION: Data loss possible <---<br>

---> ATTENTION : Perte de données possible <---<br>.

Additional Changes:<br>

Changements supplémentaires :<br>

[Fixed] - Detaching a virtual machine does not work<br>
 [Fixed] - Logical interface import does not work<br>
 [Fixed] - Missing contact and location information in object overview<br>
 [Fixed] - Adv Search: link from result list direct to category<br>
 [Fixed] - Filter by status does not work in hostaddress<br>
 [Fixed] - Name of object in information header is wrong when creating a new object<br>
 [Fixed] - Single value categories are only saveable on second edit<br>
 [Fixed] - Search back button does not work properly<br>
 [Fixed] - Several constraints incorrectly defined<br>
 [Fixed] - Graphic manufacturer is not exported<br>
 [Fixed] - Cutted location paths in object lists are appended by ">"<br>
 [Fixed] - Migration of Contacts does not work properly<br>
 [Fixed] - Switch | File | update => new file will be created<br>
 [Fixed] - Switch | Application/Service | New => Exception and no new file will be created<br>
 [Fixed] - Switch | File Wizard: File choosed and click on "=>" Error Message "get_general_data failed<br>
 [Fixed] - San | Storage | Controller | edit controller results in an Exception<br>
 [Fixed] - Category file does not show the correct actual file version<br>
 [Fixed] - Global search for log. Interface<br>
 [Fixed] - CPU Frequency does not allow comma values (e.g 3,6)<br>
 [Fixed] - Calendar Bug in Internet Explorer<br>
 [Fixed] - Maintenance Agreement in IE < 8 does not show the "sub contract"<br>
 [Fixed] - Empty net assignments are displayed as root-location in an export<br>
 [Fixed] - No Calender in maintenance contract "end"<br>
 [Fixed] - No Calender in maintenance contract "start"<br>
 [Fixed] - +/- in Memory does not work in overview category<br>
 [Fixed] - Assigning a file in global category "file" does not work<br>

[Correction] - Détacher une machine virtuelle ne fonctionne pas<br>.
 [Correction] - L'importation de l'interface logique ne fonctionne pas<br>.
 [Correction] - Informations de contact et de localisation manquantes dans l'aperçu des objets<br>.
 [Correction] - Adv Search : lien de la liste des résultats directement vers la catégorie<br>.
 [Correction] - Le filtre par état ne fonctionne pas dans l'adresse de l'hôte<br>.
 [Correction] - Le nom de l'objet dans l'en-tête d'information est erroné lors de la création d'un nouvel objet<br>.
 [Correction] - Les catégories à valeur unique ne sont sauvegardables qu'en seconde édition<br>.
 [Fixed] - Le bouton Search Back ne fonctionne pas correctement<br>.
 [Fixed] - Plusieurs contraintes mal définies<br>.
 [Fixed] - Le fabricant graphique n'est pas exporté<br>.
 [Fixed] - Les chemins d'accès coupés dans les listes d'objets sont ajoutés par ">"<br>.
 [Correction] - La migration des contacts ne fonctionne pas correctement<br>.
 [Fixed] - Switch | File | update => un nouveau fichier est créé<br>.
 [Fixed] - Switch | Application/Service | New => Exception et aucun nouveau fichier ne sera créé<br>.
 [Fixed] - Switch | File Wizard : File choosed and click on "=>" Error Message "get_general_data failed<br>
 [Fixed] - San | Storage | Controller | edit controller résulte en une exception<br>.
 [Correction] - Le fichier de catégorie n'affiche pas la version correcte du fichier<br>.
 [Fixed] - Recherche globale pour log. Interface<br>
 [Fixed] - La fréquence du CPU n'autorise pas les valeurs comma (e.g. 3,6)<br>
 [Fixed] - Bug du calendrier dans Internet Explorer<br>
 [Fixed] - Contrat de maintenance dans IE < 8 ne montre pas le "sous-contrat"<br>
 [Fixed] - Les affectations nettes vides sont affichées comme emplacement racine dans une exportation<br>.
 [Fixed] - Pas de calendrier dans le contrat de maintenance "fin"<br>.
 [Fixed] - Pas de calendrier dans le contrat de maintenance "start"<br>.
 [Fixed] - Le +/- en mémoire ne fonctionne pas dans la catégorie aperçu<br>.
 [Correction] - Attribuer un fichier dans la catégorie globale "fichier" ne fonctionne pas<br>.

0.9.8-2<br>
[Enhancement] - Quick Infos for object links (Mouseover)<br>
 [Enhancement] - Include assigned net object in a port export<br>
 [Enhancement] - New javascript calendar<br>
 [Enhancement] - Editable start/end date in workflows<br>
 [Enhancement] - Database optimization<br>
 [Enhancement] - Search function in object browser<br>
 [Enhancement] - Filter function for the object-browser<br>
 [Fixed] - No comma values possible in specific category wan<br>
 [Fixed] - No comma values possible in san-pool category<br>
 [Fixed] - Archived logical interfaces are not recycable<br>
 [Fixed] - An empty manual is created after saving the overview page<br>
 [Fixed] - No applications/operating systems assignable in object browser<br>
 [Fixed] - Calendar time does not work<br>
 [Fixed] - No delete and purge button in ip list<br>
 [Fixed] - Global dependencies not editable<br>
 [Fixed] - Group filter does not work in contact browser<br>
 [Fixed] - Several bugs in workflow module<br>
 [Fixed] - Error in category view for workflows<br>
 [Fixed] - Detach button on network port connection<br>
 [Fixed] - Importing a not existing image via xml results in an error<br>
 [Fixed] - IP Addresses are not applied in templates<br>
 [Fixed] - Template description is not applied in object image<br>
 [Fixed] - Only a few port properties are applyed by a template<br>
 [Fixed] - Some interface properties are missing while applying an interface template<br>
 [Fixed] - Template loses status after creating object.<br>
 [Fixed] - It is not possible to add the same LDAP server with a different search DN<br>
 [Fixed] - Error in Workflow Module<br>
 [Fixed] - Category entries in category application are not deleted when referenced application is deleted<br>
 [Fixed] - Missing fields in logbook archive<br>
 [Fixed] - Problems with large object lists<br>
 [Fixed] - Multiple assignments to one port possible<br>
 [Fixed] - Saving an _empty_ location results in an error<br>
 [Fixed] - Clicking on workflow abort-button creates a new "completed"-action<br>

0.9.8-2<br>
[Enhancement] - Infos rapides pour les liens des objets (survol de la souris)<br>
 [Enhancement] - Inclusion de l'objet net assigné dans une exportation de port<br>.
 [Enhancement] - Nouveau calendrier javascript<br>.
 [Enhancement] - Date de début/fin modifiable dans les workflows<br>.
 [Enhancement] - Optimisation de la base de données<br>
 [Enhancement] - Fonction de recherche dans le navigateur d'objets<br>.
 [Enhancement] - Fonction de filtrage pour le navigateur d'objets<br>.
 [Fixed] - Pas de valeurs de virgule possible dans une catégorie spécifique<br>.
 [Fixed] - Pas de valeurs comma possibles dans la catégorie san-pool<br>.
 [Fixed] - Les interfaces logiques archivées ne sont pas recyclables<br>.
 [Correction] - Un manuel vide est créé après la sauvegarde de la page d'aperçu<br>.
 [Correction] - Pas d'applications/systèmes d'exploitation assignables dans le navigateur d'objets<br>.
 [Correction] - L'heure du calendrier ne fonctionne pas<br>.
 [Fixed] - Pas de bouton supprimer et purger dans la liste ip<br>.
 [Fixed] - Dépendances globales non modifiables<br>.
 [Fixed] - Le filtre de groupe ne fonctionne pas dans le navigateur de contacts<br>.
 [Fixed] - Plusieurs bugs dans le module workflow<br>.
 [Fixed] - Erreur dans la vue des catégories pour les workflows<br>.
 [Fixed] - Bouton Detach sur la connexion du port réseau<br>.
 [Fixed] - Importer une image inexistante via xml résulte en une erreur<br>.
 [Fixed] - Les adresses IP ne sont pas appliquées dans les modèles<br>.
 [Correction] - La description du modèle n'est pas appliquée dans l'image de l'objet<br>.
 [Fixed] - Seules quelques propriétés de port sont appliquées par un template<br>.
 [Fixed] - Certaines propriétés d'interface sont manquantes lors de l'application d'un template d'interface<br>.
 [Correction] - Le modèle perd son statut après la création de l'objet <br>.
 [Correction] - Il n'est pas possible d'ajouter le même serveur LDAP avec un DN de recherche différent<br>.
 [Fixed] - Erreur dans le module de workflow<br>.
 [Fixed] - Les entrées de catégorie dans l'application de catégorie ne sont pas supprimées lorsque l'application de référence est supprimée<br>.
 [Correction] - Champs manquants dans l'archive du journal<br>.
 [Correction] - Problèmes avec les grandes listes d'objets<br>.
 [Fixed] - Possibilité d'assignations multiples à un port<br>.
 [Fixed] - La sauvegarde d'un _empty_ location résulte en une erreur<br>.
 [Correction] - Un clic sur le bouton d'annulation du flux de travail crée une nouvelle action "terminé"<br>.

0.9.8-1<br>
[Enhancement] - Automatic update check (via updatecheck controller)<br>
 [Enhancement] - Capitalized key-words in print view<br>
 [Enhancement] - Converting an object into a template<br>
 [Enhancement] - PHP 5.3.0 Support<br>
 [Enhancement] - Template System: Nagios templates<br>
 [Enhancement] - Template System: Applying object images<br>
 [Fixed] - Error saving category memory<br>
 [Fixed] - Tree and tooltips does not work in Internet Explorer 6 & 7<br>
 [Fixed] - Internet Explorer 6 & 7 Cache problem alert<br>
 [Fixed] - Template System: Global category -> purpose not applied<br>
 [Fixed] - Click on checkbox in contact browser does not work<br>
 [Fixed] - Template System: Network Interfaces & Ports are not created<br>
 [Fixed] - Adding location objects via category objects does not work anymore<br>
 [Fixed] - Username and password are not saveable when editing a person<br>
 [Fixed] - The update check does not work in system overview<br>

0.9.8-1<br>
[Enhancement] - Vérification automatique des mises à jour (via le contrôleur updatecheck)<br>
 [Enhancement] - Capitalisation des mots-clés dans la vue d'impression<br>.
 [Enhancement] - Conversion d'un objet en modèle<br>.
 [Enhancement] - Support de PHP 5.3.0<br>
 [Enhancement] - Système de templates : modèles Nagios<br>
 [Enhancement] - Système de template : Appliquer des images d'objets<br>
 [Fixed] - Erreur de sauvegarde de la mémoire des catégories<br>.
 [Fixed] - L'arbre et les tooltips ne fonctionnent pas dans Internet Explorer 6 & 7<br>.
 [Fixed] - Internet Explorer 6 & 7 Cache problem alert<br>
 [Fixed] - Système de template : Catégorie globale -> but non appliqué<br>
 [Fixed] - Clic sur la case à cocher dans le navigateur de contact ne fonctionne pas<br>
 [Fixed] - Système de modèles : Les interfaces et ports réseau ne sont pas créés<br>.
 [Fixed] - Ajouter des objets de localisation via des objets de catégorie ne fonctionne plus<br>.
 [Correction] - Le nom d'utilisateur et le mot de passe ne sont pas sauvegardés lors de l'édition d'une personne<br>.
 [Correction] - Le contrôle de mise à jour ne fonctionne pas dans l'aperçu du système<br>.

0.9.8<br>
[Enhancement] - Template System / Module<br>
 [Enhancement] - New handler for Nagios export<br>
 [Enhancement] - Nagios export path configurable<br>
 [Enhancement] - Simplify category memory<br>
 [Enhancement] - Global information moved into object table<br>
 [Enhancement] - New category "accounting"<br>
 [Enhancement] - Print preview for objects<br>
 [Enhancement] - New Role/Rights Management for groups<br>
 [Enhancement] - Used licence selection for an Application/OS is now possible in the application assignment<br>
 [Enhancement] - Connected ports without location<br>
 [Fixed] - Constant name gets translated in objecttype configuration<br>
 [Fixed] - Saving an access URL creates a new one.<br>
 [Fixed] - Creating 2 FC-Ports always creates 3<br>
 [Fixed] - You can not edit existing dependencies or object combinations<br>
 [Fixed] - Module uninstaller did not work properly<br>
 [Fixed] - Locations are not detachable<br>
 [Fixed] - Error in logbook browsing<br>
 [Fixed] - Error processing AJAX request" when trying to edit the logbook archiving settings<br>
 [Fixed] - When you create a new organisation the name field is prefilled with the value "new organisation"<br>
 [Fixed] - Locations can not be unlinked<br>
 [Fixed] - SAN-Pool Browser does not work properly<br>
 [Fixed] - Room is not savable<br>
 [Fixed] - Print view for rack visualization<br>
 [Fixed] - Problems with File Upload Wizard<br>

0.9.8<br>
[Enhancement] - Template System / Module<br>
 [Enhancement] - Nouveau gestionnaire pour l'exportation de Nagios<br>
 [Enhancement] - Chemin d'export Nagios configurable<br>
 [Enhancement] - Simplifier la mémoire des catégories<br>.
 [Enhancement] - Informations globales déplacées dans la table des objets<br>.
 [Enhancement] - Nouvelle catégorie "comptabilité"<br>.
 [Enhancement] - Aperçu avant impression pour les objets<br>.
 [Enhancement] - Nouvelle gestion des rôles/droits pour les groupes<br>.
 [Enhancement] - La sélection de la licence utilisée pour une application/OS est désormais possible dans l'affectation de l'application<br>.
 [Enhancement] - Ports connectés sans localisation<br>.
 [Correction] - Le nom constant est traduit dans la configuration du type d'objet<br>.
 [Correction] - La sauvegarde d'une URL d'accès crée une nouvelle URL <br>.
 [Fixed] - Créer 2 ports FC en crée toujours 3<br>.
 [Correction] - Vous ne pouvez pas modifier les dépendances existantes ou les combinaisons d'objets<br>.
 [Correction] - Le désinstallateur de modules ne fonctionne pas correctement<br>.
 [Fixed] - Les emplacements ne sont pas détachables<br>.
 [Fixed] - Erreur de navigation dans le journal<br>.
 [Fixed] - Erreur de traitement de la "requête AJAX" en essayant d'éditer les paramètres d'archivage du logbook<br>.
 [Correction] - Lorsque vous créez une nouvelle organisation, le champ de nom est pré-rempli avec la valeur "nouvelle organisation"<br>.
 [Correction] - Les emplacements ne peuvent pas être désenclavés<br>.
 [Correction] - Le navigateur SAN-Pool ne fonctionne pas correctement<br>.
 [Fixed] - La salle n'est pas sauvegardée<br>.
 [Fixed] - Print view for rack visualization<br>
 [Correction] - Problèmes avec l'assistant de téléchargement de fichiers<br>.

0.9.7-1<br>
[Enhancement] - More info in objecttype configuration lists<br>
 [Enhancement] - LDAP: Experimental OpenLDAP fix<br>
 [Enhancement] - Advanced tracking of changes in logbook<br>
 [Enhancement] - Added update check to system overview<br>
 [Enhancement] - New "System Overview" in maintenance section<br>
 [Enhancement] - Characters "r" and "b" are trimmed from the last line of textareas<br>
 [Fixed] - Object Net is not createable<br>
 [Fixed] - Login does not work with special characters in username or password<br>
 [Fixed] - It is not possible to filter/search for special characters like an umlaut<br>
 [Fixed] - LDAP connection errors<br>
 [Fixed] - SYSID always readonly<br>
 [Fixed] - The calender popup does not work<br>
 [Fixed] - LDAP error when logging in with an unknown user<br>
 [Fixed] - Object image upload does not work<br>
 [Fixed] - Problem when creating a mobile phone<br>
 [Fixed] - Printer objects are not usable<br>

0.9.7-1<br>
[Enhancement] - Plus d'infos dans les listes de configuration de type d'objet<br>
 [Enhancement] - LDAP : correction expérimentale d'OpenLDAP<br>
 [Enhancement] - Suivi avancé des changements dans le logbook<br>.
 [Enhancement] - Ajout d'un contrôle de mise à jour dans la vue d'ensemble du système<br>.
 [Enhancement] - Nouveau "System Overview" dans la section maintenance<br>.
 [Enhancement] - Les caractères "r" et "b" sont tronqués de la dernière ligne des textareas<br>.
 [Fixed] - Object Net n'est pas créable<br>
 [Correction] - La connexion ne fonctionne pas avec des caractères spéciaux dans le nom d'utilisateur ou le mot de passe<br>.
 [Correction] - Il n'est pas possible de filtrer/chercher des caractères spéciaux comme un umlaut<br>.
 [Correction] - Erreurs de connexion LDAP<br>.
 [Fixed] - SYSID toujours en lecture seule<br>
 [Fixed] - Le popup du calendrier ne fonctionne pas<br>.
 [Correction] - Erreur LDAP lors de la connexion avec un utilisateur inconnu<br>.
 [Fixed] - Le téléchargement de l'image objet ne fonctionne pas<br>.
 [Fixed] - Problème lors de la création d'un téléphone mobile<br>.
 [Fixed] - Les objets de l'imprimante ne sont pas utilisables<br>.

0.9.7<br>
[Enhancement] - Function "New" for dialog administrator<br>
 [Enhancement] - Hotspare status is not revertable to "No" in device category<br>
 [Enhancement] - Network port creation fails after "pre-selecting" the interface<br>
 [Fixed] - Users having writing-privileges on the CMDB are not<br>
 allowed change the password of any user anymore<br>
 [Fixed] - Port problem when a port was deleted<br>
 [Fixed] - Removed hotspare from raid-calculation<br>
 [Fixed] - Object image upload does not work<br>
 [Fixed] - Object images are not deleted after clearing them<br>
 [Fixed] - IE6 freezes after login<br>
 [Fixed] - FC-Port is not editable via checkbox<br>
 [Fixed] - Creation of more than one primary access url possible<br>
 [Fixed] - Page corrupted after clicking on a list entry on page > 1<br>
 [Fixed] - File upload does not work in wizard<br>
 [Fixed] - Unexpected behaviour in menu tree<br>
 [Fixed] - Adding a new contact deletes primary selection<br>

0.9.7<br>
[Enhancement] - Fonction "New" pour l'administrateur de dialogue<br>
 [Enhancement] - L'état de hotspare n'est pas réversible à "No" dans la catégorie des périphériques<br>.
 [Enhancement] - La création de port réseau échoue après la "pré-sélection" de l'interface<br>.
 [Correction] - Les utilisateurs ayant des privilèges d'écriture sur la CMDB ne sont pas<br>
 autorisés à modifier le mot de passe de n'importe quel utilisateur<br>.
 [Correction] - Problème de port lorsqu'un port est supprimé<br>.
 [Correction] - Suppression de hotspare dans le calcul du raid<br>.
 [Fixed] - Le téléchargement d'image objet ne fonctionne pas<br>.
 [Fixed] - Les images objets ne sont pas supprimées après leur nettoyage<br>.
 [Fixed] - IE6 se bloque après la connexion<br>.
 [Fixed] - Le port FC n'est pas modifiable via la case à cocher<br>.
 [Fixed] - Création de plus d'une url d'accès primaire possible<br>
 [Fixed] - Page corrompue après avoir cliqué sur une entrée de liste sur la page > 1<br>
 [Fixed] - Le téléchargement de fichiers ne fonctionne pas dans l'assistant<br>.
 [Correction] - Comportement inattendu dans l'arborescence du menu<br>.
 [Correction] - Ajouter un nouveau contact supprime la sélection primaire<br>.

0.9.6-1<br>
[Enhancement] - Alert message on browser cache problems<br>
 [Enhancement] - IP Address in rack view<br>
 [Enhancement] - Removed unneeded debug calls which increases script performance<br>
 [Enhancement] - New logbook commentary design<br>
 [Fixed] - Save Cancel buttons in object combinations does not work<br>
 [Fixed] - Error in Nagios status view<br>
 [Fixed] - Saving does not work in rack-view<br>
 [Fixed] - New breadcrumb implementation for AJAX-Calls<br>
 [Fixed] - Appended "r" on every line break in description fields<br>
 [Fixed] - Redbox theme display problem (empty fields)<br>
 [Fixed] - Paging (Prev/Next) does not work inside categories<br>
 [Fixed] - Nagios error in overview page<br>
 [Fixed] - Moving does not work in rack view<br>

0.9.6-1<br>
[Enhancement] - Message d'alerte sur les problèmes de cache du navigateur<br>.
 [Enhancement] - Adresse IP dans l'affichage du rack<br>.
 [Enhancement] - Suppression des appels de débogage non renouvelés qui augmentent les performances des scripts<br>.
 [Enhancement] - Nouveau design des commentaires du logbook<br>.
 [Fixed] - Les boutons Save Cancel dans les combinaisons d'objets ne fonctionnent pas<br>.
 [Fixed] - Erreur dans l'affichage de l'état de Nagios<br>.
 [Fixed] - La sauvegarde ne fonctionne pas dans le rack-view<br>.
 [Fixed] - Nouvelle implémentation du fil d'Ariane pour les appels AJAX<br>.
 [Fixed] - Ajout d'un "r" à chaque rupture de ligne dans les champs de description<br>.
 [Fixed] - Problème d'affichage du thème Redbox (champs vides)<br>
 [Fixed] - Le paging (Prev/Next) ne fonctionne pas à l'intérieur des catégories<br>.
 [Correction] - Erreur Nagios dans la page de présentation<br>.
 [Fixed] - Le déplacement ne fonctionne pas dans la vue de rack<br>.

0.9.6<br>
[Enhancement] - Ajax Engine<br>
 [Enhancement] - NAGIOS Export<br>
 [Enhancement] - More information in Nagios category<br>
 [Enhancement] - LDAP Debug<br>
 [Enhancement] - Workflow tasks now deletable<br>
 [Enhancement] - Category maintenance: Detailed information when assigning a contract<br>
 [Enhancement] - New notification system for maintenance if contract ends (handler)<br>
 [Enhancement] - New field: "File Link" in category file<br>
 [Enhancement] - Manual input of dates, instead of selecting with the popup<br>
 [Enhancement] - Selection of (application) groups in application assignment<br>
 [Enhancement] - Optimization: Overview Category<br>
 [Enhancement] - Optimization: CMDB Module<br>
 [Enhancement] - Optimization: Module Manager<br>
 [Enhancement] - Sorting in workflow tables<br>
 [Enhancement] - Infobox query optimized<br>
 [Enhancement] - Performance and page load optimized<br>
 [Enhancement] - Mandator/Client in header name is now a link to the welcome page<br>
 [Enhancement] - New info message: "Logged in as: xy"<br>
 [Enhancement] - "my-doit" closing button (X)<br>
 [Fixed] - Internet Explorer 7 display optimization<br>
 [Fixed] - The search does not work anymore<br>
 [Fixed] - Rounding problem in licence list<br>
 [Fixed] - Content top switch javascript problem<br>
 [Fixed] - No logbook entries generated after category update<br>
 [Fixed] - Uninstalling inactive modules does not work<br>
 [Fixed] - Print button is always disabled<br>
 [Fixed] - my-doit bookmark creation fails<br>
 [Fixed] - Editing an interface inside a port does not work<br>
 [Fixed] - Creating a new workflow does not work anymore<br>
 [Fixed] - Port editing does not work<br>
 [Fixed] - Category access is not savable<br>
 [Fixed] - Strip slashes when displaying object names<br>
 [Fixed] - Deleting a licence group does not work<br>
 [Fixed] - Deleting a licence does not work<br>
 [Fixed] - Backslashes are not correctly escaped in description fields<br>
 [Fixed] - SQL Error in location browser<br>
 [Fixed] - Escape characters ("") are visible in GUI<br>
 [Fixed] - Saving a network port results in an error<br>
 [Fixed] - Creating a new port results in an exception<br>
 [Fixed] - Access rights are not applied correctly<br>
 [Fixed] - Editing a fc port does not work from list<br>
 [Fixed] - Editing a network port does not work from list<br>
 [Fixed] - Every creation of an interface also creates another unready interface<br>
 [Fixed] - Port Browser tree display error<br>
 [Fixed] - SAN-Pool Browser is always empty<br>

0.9.6<br>
[Enhancement] - Moteur Ajax<br>
 [Enhancement] - Exportation NAGIOS<br>
 [Enhancement] - Plus d'informations dans la catégorie Nagios<br>
 [Enhancement] - Débogage LDAP<br>
 [Enhancement] - Tâches de workflow maintenant supprimables<br>
 [Enhancement] - Maintenance de la catégorie : informations détaillées lors de l'attribution d'un contrat<br>
 [Enhancement] - Nouveau système de notification pour la maintenance si le contrat se termine (handler)<br>
 [Enhancement] - Nouveau champ : "File Link" dans le fichier de catégorie<br>.
 [Enhancement] - Saisie manuelle des dates, au lieu de les sélectionner avec le popup<br>.
 [Amélioration] - Sélection de groupes (d'applications) dans l'affectation des applications<br>.
 [Enhancement] - Optimisation : Catégorie d'aperçu<br>.
 [Enhancement] - Optimisation : Module CMDB<br>
 [Enhancement] - Optimisation : Gestionnaire de modules<br>
 [Enhancement] - Tri dans les tables de workflow<br>
 [Enhancement] - Optimisation de la requête Infobox<br>
 [Enhancement] - Optimisation des performances et de la charge de la page<br>
 [Enhancement] - Mandataire/Client dans le nom de l'en-tête est maintenant un lien vers la page d'accueil<br>
 [Enhancement] - Nouveau message d'information : "Logged in as : xy"<br>
 [Enhancement] - Bouton de fermeture "my-doit" (X)<br>
 [Fixed] - Optimisation de l'affichage d'Internet Explorer 7<br>
 [Fixed] - La recherche ne fonctionne plus<br>.
 [Fixed] - Problème d'arrondi dans la liste des licences<br>.
 [Fixed] - Problème de javascript pour la commutation du contenu<br>.
 [Fixed] - Pas d'entrées de logbook générées après la mise à jour de la catégorie<br>
 [Fixed] - La désinstallation de modules inactifs ne fonctionne pas<br>.
 [Fixed] - Le bouton d'impression est toujours désactivé<br>.
 [Fixed] - La création de signets my-doit échoue<br>
 [Correction] - L'édition d'une interface à l'intérieur d'un port ne fonctionne pas<br>.
 [Fixed] - La création d'un nouveau workflow ne fonctionne plus<br>.
 [Fixed] - L'édition de port ne fonctionne pas<br>.
 [Fixed] - L'accès aux catégories n'est pas sauvegardé<br>.
 [Fixed] - Strip slashes lors de l'affichage des noms d'objets<br>.
 [Fixed] - La suppression d'un groupe de licences ne fonctionne pas<br>.
 [Fixed] - Supprimer une licence ne fonctionne pas<br>.
 [Fixed] - Les antislashs ne sont pas correctement échappés dans les champs de description<br>.
 [Fixed] - Erreur SQL dans le navigateur de localisation<br>.
 [Fixed] - Les caractères d'échappement ("") sont visibles dans l'interface graphique<br>.
 [Correction] - La sauvegarde d'un port réseau provoque une erreur<br>.
 [Fixed] - La création d'un nouveau port donne lieu à une exception<br>.
 [Fixed] - Les droits d'accès ne sont pas appliqués correctement<br>.
 [Fixed] - L'édition d'un port fc ne fonctionne pas depuis la liste<br>.
 [Fixed] - L'édition d'un port réseau ne fonctionne pas depuis la liste<br>.
 [Correction] - Chaque création d'interface crée également une autre interface non prête<br>.
 [Fixed] - Erreur d'affichage de l'arborescence du navigateur de ports<br>.
 [Correction] - Le navigateur SAN-Pool est toujours vide<br>.

0.9.5<br>
[Task]- Purging of obsolete code<br>
 [Enhancement] - Monetary field (EUR, DOLLAR, ..) = "ISY_NULL" in licence overview<br>
 [Enhancement] - Same SYS-ID"s for multiple objects are no more possible; Config constant in src/constants.inc.php added<br>
 [Enhancement] - Logbook description of failed overview savings now show error info about what category had problems<br>
 [Enhancement] - List of assigned objects in object-types "Service, Application and Operating System<br>
 [Enhancement] - New quicklaunch menu in welcome screen<br>
 [Enhancement] - Changed object browser refreshing to ajax load<br>
 [Enhancement] - NAGIOS Export (BETA)<br>
 [Fixed] - Port browser - duplicate objects display fix<br>
 [Fixed] - Maintenance -> Assigned objects does not work<br>
 [Fixed] - Contact browser does not move newly selected persons into the parent input field<br>
 [Fixed] - Removed image title from object image<br>
 [Fixed] - Internet Explorer CSS problems<br>
 [Fixed] - Logbook category not correctly displayed in category overview<br>
 [Fixed] - Object selection in object browser does not work always<br>
 [Fixed] - Function to directly select pages in lists instead of just forward/backward<br>
 [Fixed] - Selecting a port connection does not work (in Network- and FC-Ports)<br>
 [Fixed] - Swap master with slave objects in dependency table<br>
 [Fixed] - Object positioning in category location is not correctly displayed in rack-view<br>
 [Fixed] - Filter string should still be setted when jumping back to the list<br>
 [Fixed] - Category model is not saved when creating an item in the overview category<br>
 [Fixed] - Creating a FC-Port does not work<br>
 [Fixed] - Multiselection in contact browser<br>
 [Fixed] - Adding more than one contacts adds one empty contact; Group selection also possible now<br>
 [Fixed] - Monthly workflows generate daily tasks<br>
 [Fixed] - Full RAID calculation in storage category<br>

0.9.5<br>
[Tâche]- Purger le code obsolète<br>
 [Enhancement] - Champ monétaire (EUR, DOLLAR, ..) = "ISY_NULL" dans l'aperçu de la licence<br>.
 [Enhancement] - Les "SYS-ID" identiques pour plusieurs objets ne sont plus possibles ; Config constant ajouté dans src/constants.inc.php<br>
 [Enhancement] - Description du journal des aperçus d'échecs affichant maintenant les informations d'erreur sur la catégorie ayant eu des problèmes<br>.
 [Enhancement] - Liste des objets assignés dans les types d'objets "Service, Application et Système d'exploitation"<br>.
 [Enhancement] - Nouveau menu de lancement rapide dans l'écran d'accueil<br>.
 [Enhancement] - Changement du rafraîchissement du navigateur d'objets en chargement ajax<br>
 [Enhancement] - Exportation NAGIOS (BETA)<br>
 [Fixed] - Port browser - duplicate objects display fix<br>
 [Fixed] - Maintenance -> Les objets assignés ne fonctionnent pas<br>
 [Correction] - Le navigateur de contacts ne déplace pas les personnes nouvellement sélectionnées dans le champ de saisie parent<br>.
 [Correction] - Titre de l'image supprimé de l'image de l'objet<br>.
 [Fixed] - Problèmes de CSS dans Internet Explorer<br>.
 [Correction] - Catégorie de journal non affichée correctement dans l'aperçu des catégories<br>.
 [Correction] - La sélection d'objets dans le navigateur d'objets ne fonctionne pas toujours<br>.
 [Correction] - Fonction permettant de sélectionner directement les pages dans les listes au lieu de simplement avancer/reculer<br>.
 [Correction] - La sélection d'une connexion de port ne fonctionne pas (dans les ports réseau et FC)<br>.
 [Correction] - Echanger le maître avec les objets esclaves dans la table de dépendance<br>.
 [Correction] - Le positionnement des objets dans les catégories n'est pas correctement affiché dans le rack-view<br>.
 [Correction] - La chaîne de filtre doit toujours être définie lors du retour à la liste<br>.
 [Correction] - Le modèle de catégorie n'est pas sauvegardé lors de la création d'un élément dans la catégorie de vue d'ensemble<br>.
 [Fixed] - La création d'un port FC ne fonctionne pas<br>.
 [Correction] - Multi-sélection dans le navigateur de contacts<br>.
 [Correction] - Ajouter plus d'un contact ajoute un contact vide ; la sélection de groupe est également possible maintenant<br>.
 [Correction] - Les flux de travail mensuels génèrent des tâches quotidiennes<br>.
 [Correction] - Calcul du RAID complet dans la catégorie de stockage<br>.

0.9.4-5<br>
[Enhancement] - LDAP Integration (BETA)<br>
 [Enhancement] - Module installer / uninstaller<br>
 [Enhancement] - Nagios Module integrated<br>
 [Enhancement] - Graphical mandator overview<br>
 [Enhancement] - Location path in object lists<br>
 [Enhancement] - New field "key" in access point category<br>
 [Enhancement] - Ability to uninstall, deactivate and activate modules in module manager<br>
 [Enhancement] - Specific category access point should be multivalued<br>
 [Enhancement] - SYS-ID readonly configuration in i-doit registry: [Root]/idoit/constants/SYSID__READONLY<br>
 [Enhancement] - Locking of datasets in edit mode<br>
 [Enhancement] - Editing licences does not work when entering the category over the"Licence" directory link<br>
 [Enhancement] - Entries in category "dependency" cannot be changed<br>
 [Enhancement] - Licence currency should be editable, not forced to be EUR<br>
 [Fixed] - Connected file object in category emergency plan is not displayed<br>
 [Fixed] - Changing an entry in category sound affects all entries<br>
 [Fixed] - Changing an entry in category graphic affects all entries<br>
 [Fixed] - Rack view not well displayed in internet explorer<br>
 [Fixed] - Constant is overwritten with empty value in Dialog-Admin<br>
 [Fixed] - The type of created power-objects is not editable after saving<br>
 [Fixed] - New Object-types are not shown in the rack-view<br>
 [Fixed] - DB prefix cannot be changed for NDO<br>

0.9.4-5<br>
[Enhancement] - Intégration LDAP (BETA)<br>
 [Enhancement] - Module installer / uninstaller<br>
 [Enhancement] - Module Nagios intégré<br>
 [Enhancement] - Vue d'ensemble graphique du mandataire<br>
 [Enhancement] - Chemin d'accès dans les listes d'objets<br>.
 [Enhancement] - Nouveau champ "key" dans la catégorie des points d'accès<br>.
 [Enhancement] - Possibilité de désinstaller, désactiver et activer des modules dans le gestionnaire de modules<br>.
 [Enhancement] - Le point d'accès de la catégorie spécifique doit être multivalué<br>.
 [Enhancement] - Configuration SYS-ID en lecture seule dans le registre i-doit : [Root]/idoit/constants/SYSID__READONLY<br>
 [Enhancement] - Verrouillage des datasets en mode édition<br>.
 [Amélioration] - L'édition de licences ne fonctionne pas lors de la saisie de la catégorie via le lien du répertoire "Licence"<br>.
 [Enhancement] - Les entrées dans la catégorie "dépendance" ne peuvent pas être modifiées<br>.
 [Enhancement] - La devise de la licence devrait être modifiable et non forcée à être l'EUR<br>.
 [Correction] - L'objet fichier connecté dans la catégorie plan d'urgence n'est pas affiché<br>.
 [Correction] - Changer une entrée dans la catégorie son affecte toutes les entrées<br>.
 [Correction] - Changer une entrée dans la catégorie graphique affecte toutes les entrées<br>.
 [Correction] - La vue du rack n'est pas bien affichée dans internet explorer<br>.
 [Correction] - La constante est remplacée par une valeur vide dans le dialogue Admin<br>.
 [Correction] - Le type d'objet de puissance créé n'est pas modifiable après la sauvegarde<br>.
 [Correction] - Les nouveaux types d'objets ne sont pas affichés dans le rack-view<br>.
 [Correction] - Le préfixe de la base de données ne peut pas être modifié pour NDO<br>.

0.9.4<br>
[Enhancement] - CMDB improvements<br>
 [Enhancement] - Wiki link for each textbox (url defined in src/constants.inc.php)<br>
 [Enhancement] - New object type: Operating System<br>
 [Enhancement] - New global category: Virtual Machine<br>
 [Enhancement] - New fields: warranty period - remainder warranty in global category<br>
 [Enhancement] - New Logbook message: Category Archived<br>
 [Enhancement] - New Logbook message: Category Purged<br>
 [Enhancement] - New storage type: SAS<br>
 [Enhancement] - RackView (Graphical view and positioning of rack contents)<br>
 [Enhancement] - Specific categories inside overview category<br>
 [Enhancement] - Graphical Rack Viewer in specific category 'Rack' based on formfactor units<br>
 [Enhancement] - Adminstrative interface for Dialog+ boxes<br>
 [Enhancement] - New Logbook list for better overview with filter functions<br>
 [Enhancement] - Logbook archive function to another MySQL Server<br>
 [Fixed] - 'No object selected' link results in an error<br>
 [Fixed] - Wrong data field in Category table air condition<br>
 [Fixed] - Dialog Administrator allows editing of first element only<br>
 [Fixed] - Dialog Admininistrator: Some tables are missing<br>
 [Fixed] - After deleting an 'unready' object, the log message says 'archived' instead of 'deleted'<br>
 [Fixed] - Title of FC-Port always extended by a numeric value<br>
 [Fixed] - Object-tree in dependency -> object combinations doesnt work<br>
 [Fixed] - Icon of self defined container broken in location tree<br>
 [Fixed] - Session expiration also on ajax requests<br>
 [Fixed] - Assignments get deleted after saving a workflow and not changing them<br>
 [Fixed] - New fields in global category: purchased at, order no.<br>
 [Fixed] - Logical interface gets purged when clicking on archive. A regular archive is not possible<br>
 [Fixed] - Devices are not saved after saving a raid<br>
 [Fixed] - Workflow action parameters cannot get saved<br>
 [Fixed] - Workflow contacts get resetted when not editing them after saving a workflow<br>
 [Fixed] - Removed duplicate rack formfactory configuration in specific category<br>
 [Fixed] - Variable length of infobox messages (src/constants.inc.php::C__INFOBOX__LENGTH)<br>

0.9.4<br>
[Enhancement] - Améliorations CMDB<br>
 [Enhancement] - Lien wiki pour chaque textbox (url définie dans src/constants.inc.php)<br>
 [Enhancement] - Nouveau type d'objet : Système d'exploitation<br>.
 [Enhancement] - Nouvelle catégorie globale : Machine virtuelle<br>.
 [Enhancement] - Nouveaux champs : warranty period - remainder warranty dans global category<br>
 [Enhancement] - Nouveau message du logbook : Category Archived<br>
 [Enhancement] - Nouveau message du logbook : Category Purged<br>
 [Enhancement] - Nouveau type de stockage : SAS<br>
 [Enhancement] - RackView (Vue graphique et positionnement du contenu des racks)<br>
 [Enhancement] - Catégories spécifiques dans la catégorie vue d'ensemble<br>.
 [Enhancement] - Visualisation graphique des racks dans la catégorie spécifique 'Rack' basée sur les unités de facteurs de forme<br>.
 [Enhancement] - Interface administrative pour les boîtes de dialogue+<br>.
 [Enhancement] - Nouvelle liste de logbooks pour une meilleure vue d'ensemble avec des fonctions de filtrage<br>.
 [Enhancement] - Fonction d'archivage des logbooks sur un autre serveur MySQL<br>.
 [Correction] - Le lien 'Pas d'objet sélectionné' résulte en une erreur<br>.
 [Correction] - Champ de données erroné dans la table de catégories condition d'air<br>.
 [Fixed] - Dialogue Administrateur ne permet la modification que du premier élément<br>.
 [Fixed] - Dialogue Admininistrator : Certaines tables sont manquantes<br>.
 [Correction] - Après suppression d'un objet 'non prêt', le message du journal indique 'archivé' au lieu de 'supprimé'<br>.
 [Correction] - Titre du port FC toujours prolongé par une valeur numérique<br>.
 [Correction] - Arbre d'objets en dépendance -> les combinaisons d'objets ne fonctionnent pas<br>.
 [Correction] - Icône du conteneur auto-défini brisée dans l'arbre des emplacements<br>.
 [Fixed] - Expiration de session également sur les requêtes ajax<br>.
 [Correction] - Les affectations sont supprimées après la sauvegarde d'un workflow et non sa modification<br>.
 [Correction] - Nouveaux champs dans la catégorie globale : acheté à, numéro de commande <br>.
 [Correction] - L'interface logique se purge lorsque l'on clique sur archive. Une archive régulière n'est pas possible<br>.
 [Correction] - Les périphériques ne sont pas sauvegardés après la sauvegarde d'un raid<br>.
 [Fixed] - Les paramètres d'action du workflow ne peuvent pas être sauvegardés<br>.
 [Correction] - Les contacts du workflow sont réinitialisés s'ils ne sont pas édités après la sauvegarde d'un workflow<br>.
 [Correction] - Suppression de la configuration dupliquée du rack formfactory dans une catégorie spécifique<br>.
 [Correction] - Longueur variable des messages de l'infobox (src/constants.inc.php::C__INFOBOX__LENGTH)<br>

0.9.3-r419<br>
[Enhancement] - Object combinations (Server/Client > Application / Service)<br>
 [Enhancement] - Security issues in Dialog-Admin<br>
 [Enhancement] - Purging objects!!! (Beta)<br>
 [Enhancement] - Logbook does not show any information about a purged, or a changed category<br>
 [Fixed] - It's possible to login with a deleted user<br>
 [Fixed] - Settings like IP or Routing are not saved when creating a logical interface<br>
 [Fixed] - The name and object-type of a purged object is empty<br>
 [Fixed] - Logbook message is empty when an object change failed<br>
 [Fixed] - Show human readable information about a change in the logbook category ;-)<br>
 [Fixed] - Logbook link in headline produces an error<br>
 [Fixed] - Show port-connection in fc-port list<br>
 [Fixed] - Port connections unstable - Any re-assignment is not saved!<br>
 [Fixed] - After saving/creating a fc-port, not all information are saved<br>
 [Fixed] - RAID-1 capacity is not automatically calculated<br>
 [Fixed] - GUI Message when object id does not exist<br>
 [Fixed] - Object browser somtimes empty<br>
 [Fixed] - Application assignment not saveable<br>
 [Fixed] - New alarm message when object type cannot be deleted<br>

0.9.3-r419<br>
[Enhancement] - Combinaisons d'objets (Serveur/Client > Application / Service)<br>
 [Enhancement] - Problèmes de sécurité dans Dialog-Admin<br>
 [Enhancement] - Purger des objets !!! (bêta)<br>
 [Enhancement] - Le journal n'affiche pas d'informations sur une catégorie purgée ou modifiée<br>.
 [Correction] - Il est possible de se connecter avec un utilisateur supprimé<br>.
 [Fixed] - Les paramètres tels que l'IP ou le routage ne sont pas sauvegardés lors de la création d'une interface logique<br>.
 [Correction] - Le nom et le type d'objet d'un objet purgé sont vides<br>.
 [Correction] - Le message du journal est vide lorsqu'un changement d'objet échoue<br>.
 [Fixed] - Afficher des informations lisibles par l'homme sur une modification dans la catégorie logbook ;-)<br>.
 [Correction] - Le lien du logbook dans l'en-tête produit une erreur<br>.
 [Fixed] - Afficher la connexion du port dans la liste des ports fc<br>.
 [Fixed] - Port connections unstable - Any re-assignment is not saved!<br>
 [Fixed] - Après la sauvegarde/création d'un port fc, toutes les informations ne sont pas sauvegardées<br>.
 [Fixed] - La capacité RAID-1 n'est pas calculée automatiquement<br>.
 [Correction] - Message GUI lorsque l'identifiant de l'objet n'existe pas<br>.
 [Fixed] - Le navigateur d'objets est parfois vide<br>.
 [Fixed] - Attribution d'application non sauvegardable<br>
 [Correction] - Nouveau message d'alerte lorsque le type d'objet ne peut pas être supprimé<br>.

0.9.3-r325<br>
[Enhancement] - Implemented WAN-Capacity unit<br>
 [Enhancement] - Improved loading performance of the front-end<br>
 [Enhancement] - Multi mandator capability for controller<br>
 [Enhancement] - Load my-doit with AJAX<br>
 [Enhancement] - Room: Startpage does not contain any informations (4h)<br>
 [Fixed] - Mandatory field in dependencies results in overview problems<br>
 [Fixed] - Printer-Interface only shows last connected interface<br>
 [Fixed] - Disable logbook save and cancel buttons<br>
 [Fixed] - Some icons missing in location view<br>
 [Fixed] - RAID not saveable<br>
 [Fixed] - object types are not visible anymore after saving the objecgt type configuration<br>
 [Fixed] - mydoit problems in internet explorer<br>
 [Fixed] - Adding an interface does not work<br>
 [Fixed] - Workflow checklist parameters not savable<br>
 [Fixed] - Cannot add hard discs to raid<br>
 [Fixed] - Switch contentheader and tree via javascript<br>
 [Fixed] - Wrong values get saved when creating a logical interface<br>
 [Fixed] - MenuTree for locations doesn't remember current object<br>
 [Fixed] - GUI enhancements: Manual / Maintenance and Emergency Plan<br>

0.9.3-r325<br>
[Enhancement] - Implemented WAN-Capacity unit<br>
 [Enhancement] - Amélioration des performances de chargement du front-end<br>.
 [Enhancement] - Capacité multi-mandataire pour le contrôleur<br>.
 [Enhancement] - Chargement de my-doit avec AJAX<br>
 [Enhancement] - Room : Startpage ne contient pas d'informations (4h)<br>
 [Correction] - Le champ obligatoire dans les dépendances entraîne des problèmes de vue d'ensemble<br>.
 [Correction] - L'interface de l'imprimante ne montre que la dernière interface connectée<br>.
 [Fixed] - Désactiver les boutons de sauvegarde et d'annulation du journal<br>.
 [Fixed] - Certaines icônes manquent dans l'affichage des emplacements<br>.
 [Fixed] - RAID non sauvegardable<br>
 [Fixed] - Les types d'objets ne sont plus visibles après la sauvegarde de la configuration du type d'objet<br>.
 [Correction] - Problèmes de mydoit dans internet explorer<br>.
 [Fixed] - L'ajout d'une interface ne fonctionne pas<br>.
 [Fixed] - Paramètres de la checklist du workflow non sauvegardables<br>
 [Fixed] - Cannot add hard discs to raid<br>
 [Fixed] - Commuter l'en-tête de contenu et l'arborescence via javascript<br>.
 [Fixed] - Des valeurs erronées sont sauvegardées lors de la création d'une interface logique<br>.
 [Fixed] - MenuTree pour les emplacements ne se souvient pas de l'objet courant<br>.
 [Correction] - Améliorations de l'interface utilisateur : Manuel / Maintenance et Plan d'urgence<br>.

0.9.3<br>
[Enhancement] - Barcode plugin for category global (Must be enabled in config.inc.php)<br>
 [Enhancement] - Preloader editable in system settings<br>
 [Enhancement] - Editable path field for the directory browser inside the i-doit setup (For selecting other partitions on Windows systems)<br>
 [Enhancement] - Focus to "Title" when creating a new object<br>
 [Enhancement] - Treeicons for object-types<br>
 [Enhancement] - The application category needs an object browser for the application selection<br>
 [Enhancement] - Location entries in reverse (add objects to your current location)<br>
 [Enhancement] - Handler to activate / deactivate mandators<br>
 [Fixed] - New logical interface not editable after creation<br>
 [Fixed] - Number of objects in tree is showing also disabled or deleted objects<br>
 [Fixed] - Default value for "front side of a rack" changed to "Yes"<br>
 [Fixed] - Unnecessary mandatory field #2 (Title in category object-image)<br>
 [Fixed] - Main menu does not change when clicking on a contact inside the cmdb (e.g. "Infrastructure")<br>
 [Fixed] - When creating new objects the name field is always filled<br>
 [Fixed] - Category location displays all new objects inside root-location even if there are not assigned to it<br>
 [Fixed] - Unnecessary mandatory fields<br>
 [Fixed] - new buldings do not attach to the root location automatically<br>
 [Fixed] - Navbar buttons always disabled<br>
 [Fixed] - Adding applications to an object does not work anymore<br>
 [Fixed] - New user cannot login<br>
 [Fixed] - MAC adresses cannot be found in the search<br>
 [Fixed] - Licence handler scans 1 licence object only<br>
 [Fixed] - ZIP only without leading '0'<br>
 [Fixed] - Port connections could be unstable<br>
 [Fixed] - Function to delete cache doesn't delete all cached data<br>
 [Fixed] - Assigning Workflows to persons doesn't work any more after the Workflow is saved<br>

0.9.3<br>
[Enhancement] - Plugin code-barres pour catégorie globale (Doit être activé dans config.inc.php)<br>
 [Enhancement] - Préchargeur modifiable dans les paramètres système<br>.
 [Amélioration] - Champ de chemin éditable pour le navigateur de répertoire dans la configuration i-doit (Pour la sélection d'autres partitions sur les systèmes Windows)<br>.
 [Amélioration] - Focalisation sur le "Titre" lors de la création d'un nouvel objet<br>.
 [Enhancement] - Treeicons pour les types d'objets<br>.
 [Enhancement] - La catégorie d'application a besoin d'un navigateur d'objets pour la sélection d'application<br>.
 [Enhancement] - Entrées de localisation inversées (ajouter des objets à votre localisation actuelle)<br>.
 [Enhancement] - Gestionnaire pour activer / désactiver les mandataires<br>.
 [Fixed] - Nouvelle interface logique non modifiable après création<br>
 [Correction] - Le nombre d'objets dans l'arborescence indique également les objets désactivés ou supprimés<br>.
 [Correction] - Valeur par défaut pour "face avant d'un rack" changée en "Oui"<br>.
 [Correction] - Champ obligatoire inutile #2 (Titre dans la catégorie image de l'objet)<br>.
 [Correction] - Le menu principal ne change pas lorsque l'on clique sur un contact à l'intérieur du cmdb (par ex. "Infrastructure")<br>.
 [Correction] - Lors de la création de nouveaux objets, le champ du nom est toujours rempli<br>.
 [Correction] - L'emplacement de la catégorie affiche tous les nouveaux objets à l'intérieur de l'emplacement racine même s'ils n'y sont pas assignés<br>.
 [Correction] - Champs obligatoires inutiles<br>.
 [Fixed] - Les nouveaux buldings ne s'attachent pas automatiquement à la localisation racine<br>.
 [Fixed] - Boutons de la barre de navigation toujours désactivés<br>.
 [Correction] - Ajouter des applications à un objet ne fonctionne plus<br>.
 [Fixed] - Le nouvel utilisateur ne peut pas se connecter<br>.
 [Fixed] - Les adresses MAC ne peuvent pas être trouvées dans la recherche<br>.
 [Fixed] - Licence handler scans 1 licence object only<br>
 [Correction] - ZIP uniquement sans le préfixe '0'<br>.
 [Correction] - Les connexions aux ports peuvent être instables<br>.
 [Fixed] - La fonction de suppression du cache ne supprime pas toutes les données mises en cache<br>.
 [Correction] - L'attribution de workflows à des personnes ne fonctionne plus une fois le workflow sauvegardé<br>.

0.9.2 rev 3069<br>
[Enhancement] - Location entries in reverse (add objects to your current location)<br>
 [Fixed] - New user cannot login<br>
 [Fixed] - MAC adresses cannot be found in the search<br>
 [Fixed] - Licence handler scans 1 licence object only<br>
 [Fixed] - ZIP only without leading '0'<br>
 [Fixed] - Port connections could be unstable<br>

0.9.2 rev 3069<br>
[Enhancement] - Entrées de localisation inversées (ajouter des objets à votre localisation actuelle)<br>
 [Fixed] - Le nouvel utilisateur ne peut pas se connecter<br>.
 [Fixed] - Les adresses MAC ne peuvent pas être trouvées dans la recherche<br>.
 [Fixed] - Licence handler scans 1 licence object only<br>
 [Correction] - ZIP uniquement sans le préfixe '0'<br>.
 [Correction] - Les connexions aux ports peuvent être instables<br>.

0.9.2<br>
[Enhancement] - Count licences on the basis of the connection to servers and clients_ not applications<br>
 [Enhancement] - Editable workflows<br>
 [Enhancement] - In licences in use_ show name(s) of user(s)_ which are using the corresponding licence<br>
 [Enhancement] - Port list: Name of destination device has also to be shown<br>
 [Fixed] - Port type cannot be deleted<br>
 [Fixed] - Error in former connected port when deleting a port<br>
 [Fixed] - HTTPS not working<br>
 [Fixed] - The list filter status could be shown incorrectly<br>
 [Fixed] - Name of fuse cannot be saved<br>
 [Fixed] - Description for new object type is not saved<br>
 [Fixed] - Updater does not check 'requirements'<br>
 [Fixed] - Javascript clock is flickering<br>
 [Fixed] - Error when opening spec. category for application<br>
 [Fixed] - UI-browser only shows objects of type server<br>
 [Fixed] - Workflows cannot be shown any more when someone overwrites 'start_date'<br>
 [Fixed] - Licence list is not shown<br>
 [Fixed] - Hardware-RAID-groups cannot be saved<br>
 [Fixed] - List 'Assigned objects' (specific category 'file') doesn't have a list filter<br>

0.9.2<br>
[Enhancement] - Compter les licences en fonction de la connexion aux serveurs et aux clients_ et non aux applications<br>.
 [Enhancement] - Workflows éditables<br>
 [Enhancement] - Dans les licences en cours d'utilisation, afficher le(s) nom(s) des utilisateurs qui utilisent la licence correspondante<br>.
 [Enhancement] - Liste des ports : Le nom du périphérique de destination doit également être affiché<br>.
 [Correction] - Le type de port ne peut pas être supprimé<br>.
 [Fixed] - Erreur dans le port connecté au former lors de la suppression d'un port<br>.
 [Fixed] - HTTPS ne fonctionne pas<br>.
 [Fixed] - L'état du filtre de la liste pouvait s'afficher de manière incorrecte<br>.
 [Fixed] - Le nom du fuse ne peut pas être sauvegardé<br>.
 [Fixed] - La description du nouveau type d'objet n'est pas sauvegardée<br>.
 [Fixed] - L'outil de mise à jour ne vérifie pas les 'exigences'<br>.
 [Fixed] - L'horloge Javascript clignote<br>.
 [Fixed] - Erreur lors de l'ouverture de la catégorie spécifique pour l'application<br>.
 [Fixed] - Le navigateur de l'interface utilisateur n'affiche que les objets du type serveur<br>.
 [Fixed] - Les workflows ne peuvent plus être affichés si quelqu'un écrase 'start_date'<br>.
 [Correction] - La liste des licences n'est pas affichée<br>.
 [Fixed] - Les groupes RAID matériels ne peuvent pas être sauvegardés<br>.
 [Fixed] - La liste 'Objets assignés' (catégorie spécifique 'fichier') n'a pas de filtre de liste<br>.

0.9.1 rev 2916<br>
[Task]- Replace all language specific words with LCs<br>
 [Enhancement] - Extend right system to NavBar buttons<br>
 [Enhancement] - Distributor updated_ object view now faster<br>
 [Enhancement] - New login procedure (AJAX)<br>
 [Enhancement] - Display a message when session timed out<br>
 [Enhancement] - Easier and faster setup<br>
 [Enhancement] - New and easy way to update i-doit<br>
 [Enhancement] - Port browser: Mark ports in use<br>
 [Enhancement] - Object types cannot be deleted<br>
 [Enhancement] - Enhanced checklists (workflows)<br>
 [Enhancement] - More details in first view of power objects<br>
 [Enhancement] - Room list view: Additional values<br>
 [Enhancement] - Floor entry has to be text instead of just numbers (1h)<br>
 [Enhancement] - Network ports: Names for cables<br>
 [Enhancement] - Port list: List the object of the destination port<br>
 [Enhancement] - Workflow management tool (instead of tasks and checklists)<br>
 [Enhancement] - Dialog+ fields change the actual selected value after adding new list elements<br>
 [Fixed] - Cache listens to hardcoded port<br>
 [Fixed] - List search doesn't work 'onKeyPress'<br>
 [Fixed] - No rights for external DB users<br>
 [Fixed] - idoit debug console does not work properly<br>
 [Fixed] - Licences: logbook title is empty when saving new licence<br>
 [Fixed] - Category 'General'is missing the title in view mode (object type 'services')<br>
 [Fixed] - Category 'general' missing in licences<br>
 [Fixed] - Error on saving a dynamic category<br>
 [Fixed] - Settings cannot be saved<br>
 [Fixed] - No login possible with 'Enter'-Button<br>
 [Fixed] - IEBug: Login screen not centered<br>
 [Fixed] - Categories are displayed wrong<br>
 [Fixed] - Quick-save button settings cannot be saved<br>
 [Fixed] - Category 'Workorder' is deprecated!<br>
 [Fixed] - If session gets closed by the browser_ there is a php error displayed after refreshing i-doit<br>
 [Fixed] - Language constants cannot be deleted<br>
 [Fixed] - If no mandant is installed or detectable in isys_mandator - the login says invalid password<br>
 [Fixed] - Trouble with decoding html special characters<br>
 [Fixed] - Update: Version number is not updated<br>
 [Fixed] - Titles in list view of storage drives is not translated<br>
 [Fixed] - After saving a storage drive the following view is wrong<br>
 [Fixed] - Organisations/Contacts: Not possible to delete objects<br>
 [Fixed] - 'tempObjData' could cause problems<br>
 [Fixed] - Category storage: device doesn't save numerical values<br>
 [Fixed] - Numeric/decimal format wrong in list views<br>
 [Fixed] - Date in Infobox is not formatted<br>
 [Fixed] - Saving a drive without a filesystem type selection results in an sql error<br>
 [Fixed] - Image title in object image is not saved<br>
 [Fixed] - Access url in category access is converted to integer<br>
 [Fixed] - Incorrect integer value: '' for column 'isys_catg_stor_list__capacity'<br>
 [Fixed] - When a cpu or port gets created_ the data of it is not directly shown in view/list mode<br>
 [Fixed] - When a cpu gets created_ the data of it is not directly shown in view mode<br>
 [Fixed] - Security fix: Show smarty debug console only on localhost<br>
 [Fixed] - Error when detaching a newly created building<br>
 [Fixed] - Category global is missing in licences<br>
 [Fixed] - Adding a licence results in a mysql error<br>
 [Fixed] - Contact lists doesn't get refreshed correctly after assigning persons and/or groups<br>
 [Fixed] - Saving an objecttype without selecting any overview entry results in an error<br>
 [Fixed] - Contact gets deleted after editing an entry<br>
 [Fixed] - Interface cannot be created<br>
 [Fixed] - Language constant editor: Buttons not in edit mode<br>
 [Fixed] - Dialogue lists with errors in view mode<br>
 [Fixed] - Files are not deletable<br>
 [Fixed] - Fields with dimension units are to be saved as DECIMAL<br>
 [Fixed] - Object image can't be downloaded after creating it<br>
 [Fixed] - Some Dialog+ don't set the status to '2' when adding new items<br>
 [Fixed] - Storage: Some logic bugs (4h)<br>
 [Fixed] - Contact browser too small for content in IE<br>
 [Fixed] - Category Storage: Type floppy is mising when creating a controller<br>
 [Fixed] - Category Storage<br>
 [Fixed] - Power object: connection problems<br>
 [Fixed] - CSS: Styles in IE have too big fonts (2h)<br>
 [Fixed] - Port: already set connection cannot be deleted<br>
 [Fixed] - New doesnt work in detail view of a port<br>
 [Fixed] - Logical interface: net object is not saved correctly<br>
 [Fixed] - Logical interface: not possible to save<br>
 [Fixed] - Count licences on the basis of the connection to servers and clients<br>
 [Fixed] - Contact groups cannot be created<br>
 [Fixed] - Path strings not escaped during setup<br>
 [Fixed] - Licence: Adding a group results in an error<br>
 [Fixed] - Monitor: units are not translated with language constants<br>
 [Fixed] - Storage: Not possible to connect a partition to a device!<br>
 [Fixed] - IP-Port: DHCP selected but you still must enter an IP-Adress<br>
 [Fixed] - Link in IP-List wrong<br>
 [Fixed] - FC-Switch: Storage category missing<br>
 [Fixed] - Power Oject - Connecting to other Power Objects: Connected Devices not visible<br>
 [Fixed] - KVM-Switch-Contact: Not possible to add aPrimary Contact<br>
 [Fixed] - Files: Wrong link + not deleteable<br>
 [Fixed] - Wrong link in overview page to ports<br>
 [Fixed] - Power object: Cannot be deleted / connections cannot be deleted<br>
 [Fixed] - Port-browser doesn't work in IE<br>
 [Fixed] - Licences cannot be archived<br>
 [Fixed] - Category location: Objekts that are already archieved and deleted are not filtered in the browser<br>
 [Fixed] - Creation of a SAN object<br>
 [Fixed] - Ports : Object corrupt after setting port from inactive to active<br>
 [Fixed] - Server-Network-Port: Browserwindow for assigning a Network is to small (IE)<br>
 [Fixed] - Interfaces-Connections: Creating a new Connection with IE does not work<br>
 [Fixed] - Network-Port: Field Mac-adress is visible only after saving<br>
 [Fixed] - Blank screen error<br>
 [Fixed] - No link for the URL in 'organisations'<br>
 [Fixed] - Redbox theme: No scrolling in IE<br>
 [Fixed] - Contact organisations<br>
 [Fixed] - Ports cannot be created<br>
 [Fixed] - Specific category 'power'<br>
 [Fixed] - Specific category file - current file: description is not saved<br>

0.9.1 rev 2916<br>
[Tâche]- Remplacer tous les mots spécifiques à la langue par des LC<br>
 [Enhancement] - Extend right system to NavBar buttons<br>
 [Enhancement] - Distributeur mis à jour_ object view now faster<br>
 [Enhancement] - Nouvelle procédure de connexion (AJAX)<br>
 [Enhancement] - Affichage d'un message lorsque la session est terminée<br>.
 [Enhancement] - Configuration plus facile et plus rapide<br>.
 [Enhancement] - Nouvelle façon facile de mettre à jour i-doit<br>
 [Enhancement] - Navigateur de ports : Mark ports in use<br>
 [Enhancement] - Les types d'objets ne peuvent pas être supprimés<br>.
 [Enhancement] - Enhanced checklists (workflows)<br>
 [Enhancement] - Plus de détails dans la première vue des objets de pouvoir<br>.
 [Enhancement] - Vue de la liste des salles : Valeurs supplémentaires<br>
 [Enhancement] - L'entrée de l'étage doit être du texte au lieu de simples chiffres (1h)<br>
 [Enhancement] - Ports réseau : Noms pour les câbles<br>
 [Enhancement] - Port list : List the object of the destination port<br>
 [Enhancement] - Outil de gestion de workflow (au lieu de tâches et checklists)<br>
 [Enhancement] - Les champs Dialog+ changent la valeur réelle sélectionnée après l'ajout de nouveaux éléments de liste<br>.
 [Correction] - Le cache écoute le port hardcode<br>.
 [Fixed] - La recherche de liste ne fonctionne pas 'onKeyPress'<br>
 [Fixed] - Pas de droits pour les utilisateurs externes de la BD<br>.
 [Fixed] - La console de débogage idoit ne fonctionne pas correctement<br>
 [Fixed] - Licences : le titre du logbook est vide lors de la sauvegarde d'une nouvelle licence<br>
 [Fixed] - Catégorie 'General'manque le titre en mode affichage (type d'objet 'services')<br>
 [Correction] - Catégorie 'general' manquante dans les licences<br>.
 [Fixed] - Erreur lors de la sauvegarde d'une catégorie dynamique<br>.
 [Fixed] - Les paramètres ne peuvent pas être sauvegardés<br>.
 [Fixed] - Pas de connexion possible avec le bouton 'Enter'<br>
 [Fixed] - IEBug : Ecran de connexion non centré<br>
 [Fixed] - Les catégories ne sont pas affichées correctement<br>.
 [Fixed] - Les paramètres du bouton Quick-save ne peuvent pas être sauvegardés<br>.
 [Fixed] - La catégorie 'Ordre de travail' est dépréciée!<br>
 [Correction] - Si la session est fermée par le navigateur_ il y a une erreur php affichée après le rafraîchissement de i-doit<br>.
 [Correction] - Les constantes de langue ne peuvent pas être supprimées<br>.
 [Correction] - Si aucun mandant n'est installé ou détectable dans isys_mandator - le login dit mot de passe invalide<br>.
 [Correction] - Problème avec le décodage des caractères spéciaux html<br>.
 [Fixed] - Mise à jour : le numéro de version n'est pas mis à jour<br>
 [Correction] - Les titres dans la liste des disques de stockage ne sont pas traduits<br>.
 [Correction] - Après la sauvegarde d'un disque de stockage, l'affichage suivant est incorrect<br>.
 [Correction] - Organisations/Contacts : Impossible de supprimer des objets<br>.
 [Fixed] - 'tempObjData' pouvait poser problème<br>
 [Fixed] - Stockage des catégories : le périphérique ne sauvegarde pas les valeurs numériques<br>.
 [Correction] - Format numérique/décimal incorrect dans les vues de liste<br>.
 [Fixed] - La date dans l'infobox n'est pas formatée<br>.
 [Correction] - Sauvegarder un disque sans sélectionner le type de système de fichiers résulte en une erreur sql<br>.
 [Correction] - Le titre de l'image dans l'image objet n'est pas sauvegardé<br>.
 [Fixed] - L'url d'accès dans la catégorie accès est convertie en entier<br>.
 [Correction] - Valeur entière incorrecte : '' pour la colonne 'isys_catg_stor_list__capacity'<br>.
 [Correction] - Lorsqu'un cpu ou un port est créé_ les données de celui-ci ne sont pas directement affichées en mode view/list<br>.
 [Correction] - Lorsqu'un cpu est créé, ses données ne sont pas directement affichées en mode affichage<br>.
 [Fixed] - Correction de sécurité : affichage de la console de débogage smarty uniquement sur localhost<br>
 [Correction] - Erreur lors de la suppression d'un bâtiment nouvellement créé<br>.
 [Fixed] - La catégorie globale est manquante dans les licences<br>.
 [Fixed] - Ajouter une licence résulte en une erreur mysql<br>.
 [Correction] - Les listes de contacts ne sont pas correctement rafraîchies après l'affectation de personnes et/ou de groupes<br>.
 [Correction] - La sauvegarde d'un type d'objet sans sélection d'une entrée d'aperçu résulte en une erreur<br>.
 [Correction] - Contact est supprimé après l'édition d'une entrée<br>.
 [Correction] - L'interface ne peut pas être créée<br>.
 [Fixed] - Language constant editor : Buttons not in edit mode<br>
 [Correction] - Listes de dialogue avec erreurs en mode affichage<br>.
 [Fixed] - Les fichiers ne sont pas supprimables<br>.
 [Fixed] - Les champs avec des unités de dimension doivent être sauvegardés comme DECIMAL<br>.
 [Correction] - L'image de l'objet ne peut pas être téléchargée après sa création<br>.
 [Correction] - Certains dialogues+ ne mettent pas le statut à '2' lors de l'ajout de nouveaux éléments<br>.
 [Fixed] - Stockage : Quelques bugs logiques (4h)<br>
 [Fixed] - Navigateur de contact trop petit pour le contenu dans IE<br>
 [Fixed] - Stockage par catégorie : La disquette de type se bloque lors de la création d'un contrôleur<br>.
 [Fixed] - Stockage par catégorie<br>
 [Fixed] - Objet de puissance : problème de connexion<br>.
 [Fixed] - CSS : Les styles dans IE ont des polices trop grandes (2h)<br>
 [Fixed] - Port : la connexion déjà établie ne peut pas être supprimée<br>
 [Fixed] - New ne fonctionne pas dans la vue détaillée d'un port<br>
 [Fixed] - Interface logique : l'objet net n'est pas sauvegardé correctement<br>
 [Fixed] - Interface logique : impossible de sauvegarder<br>
 [Fixed] - Comptage des licences en fonction de la connexion aux serveurs et aux clients<br>.
 [Fixed] - Les groupes de contacts ne peuvent pas être créés<br>.
 [Correction] - Les chaînes de chemin ne sont pas effacées lors de la configuration<br>.
 [Fixed] - Licence : Ajouter un groupe résulte en une erreur<br>.
 [Fixed] - Moniteur : les unités ne sont pas traduites avec les constantes de langue<br>.
 [Fixed] - Stockage : Impossible de connecter une partition à un périphérique!<br>
 [Fixed] - Port IP : DHCP sélectionné mais vous devez toujours entrer une adresse IP<br>.
 [Fixed] - Lien dans la liste IP incorrect<br>
 [Fixed] - Commutateur FC : catégorie de stockage manquante<br>
 [Fixed] - Power Oject - Connexion à d'autres objets de puissance : Périphériques connectés non visibles<br>
 [Fixed] - Contact du commutateur KVM : Impossible d'ajouter un contact primaire<br>
 [Fixed] - Files : Wrong link + not deleteable<br>
 [Fixed] - Mauvais lien dans la page de présentation des ports<br>.
 [Fixed] - Power object : Cannot be deleted / connections cannot be deleted<br>
 [Correction] - Le navigateur de ports ne fonctionne pas dans IE<br>.
 [Correction] - Les licences ne peuvent pas être archivées<br>.
 [Correction] - Emplacement des catégories : les objets déjà archivés et supprimés ne sont pas filtrés dans le navigateur<br>.
 [Fixed] - Création d'un objet SAN<br>
 [Fixed] - Ports : Corruption de l'objet après réglage du port d'inactif à actif<br>.
 [Fixed] - Port réseau du serveur : fenêtre du navigateur pour assigner un réseau est trop petit (IE)<br>
 [Correction] - Interfaces-Connexions : Créer une nouvelle connexion avec IE ne fonctionne pas<br>.
 [Correction] - Port réseau : L'adresse du champ Mac n'est visible qu'après la sauvegarde<br>.
 [Correction] - Erreur d'écran vierge<br>.
 [Fixed] - Pas de lien pour l'URL dans 'organisations'<br>
 [Fixed] - Thème Redbox : pas de défilement dans IE<br>
 [Fixed] - Contact organisations<br>
 [Fixed] - Les ports ne peuvent pas être créés<br>.
 [Fixed] - Catégorie spécifique 'power'<br>
 [Fixed] - Fichier de catégorie spécifique - fichier actuel : la description n'est pas sauvegardée<br>.

0.9 rev 2409<br>
Bugfixes<br>

0.9 rev 2409<br>
Corrections de bugs<br>

* Access point can't be created<br>
* SAN can't be created on some systems<br>
* Can't open input plug in power object<br>
* Port detail view is not shown correctly<br>
* Link in overview page of ports not working correctly<br>
* Login problems<br>
* Ports are not created correctly if values are missing<br>
* The global debugger instance is not available on some systems<br>
* WAP can't be saved correctly<br>
* Not possible to change themes<br>
* Licences can't be deleted correctly<br>
* Number of used licences is not calculated correctly<br>
* The port browser doesn't work in IE<br>
* FC ports can't be selected<br>
* Storage: Partition can't be connected to a device<br>
* Contact groups can't be created<br>
* Link in IP list not working correctly (in ports)<br>
* Files from file category can't be downloaded<br>

* Le point d'accès ne peut pas être créé<br>.
* SAN ne peut pas être créé sur certains systèmes<br>.
* Impossible d'ouvrir la prise d'entrée dans l'objet d'alimentation<br>.
* La vue détaillée des ports ne s'affiche pas correctement<br>.
* Le lien dans la page de présentation des ports ne fonctionne pas correctement<br>.
* Problèmes de connexion<br>
* Les ports ne sont pas créés correctement si des valeurs sont manquantes<br>.
* L'instance de débogage global n'est pas disponible sur certains systèmes<br>.
* Le WAP ne peut pas être sauvegardé correctement<br>.
* Impossible de changer les thèmes<br>.
* Les licences ne peuvent pas être supprimées correctement<br>.
* Le nombre de licences utilisées n'est pas calculé correctement<br>.
* Le navigateur de port ne fonctionne pas dans IE<br>.
* FC ports can't be selected<br>
* Stockage : la partition ne peut pas être connectée à un périphérique<br>.
* Les groupes de contacts ne peuvent pas être créés<br>
* Link in IP list not working correctly (in ports)<br>
* Les fichiers de la catégorie file ne peuvent pas être téléchargés<br>.

0.9<br>
New features<br>

0.9<br>
Nouvelles fonctionnalités<br>

* Search<br>
* Workflow management system (Tasks, checklists and self-defined objects)<br>
* Link to our documentary<br>
* You can switch between different date, time and numerical formats<br>
* You can switch the 'QuickSave' functionality on or off (Without QuickSave<br>

* Search<br>
* Système de gestion du flux de travail (tâches, checklists et objets définis par l'utilisateur)<br>.
* Lien vers notre documentaire<br>
* Vous pouvez commuter entre différents formats de date, d'heure et numériques<br>.
* Vous pouvez activer ou désactiver la fonctionnalité 'QuickSave' (sans QuickSave<br>).

the user has to fill in a description for his changes in a pop-up window)<br>

l'utilisateur doit remplir une description pour ses modifications dans une fenêtre pop-up)<br>

* Additional description for logbook entries, see also 'QuickSave' for that<br>
* New category 'Overview' with values from some selected categories<br>
* Updated category 'Air Conditioning'<br>
* Updated category 'Printer'<br>
* Updated category 'Monitor'<br>
* Updated category 'Access Point'<br>
* Updated category 'FC Switch'<br>
* Updated category 'Client'<br>
* Updated category 'Backup'<br>
* Updated category 'Power'<br>
* Updated category 'Enclosure'<br>
* Updated category 'Formfactor'<br>
* Updated category 'Emergency plan'<br>
* Updated category 'SAN'<br>
* Updated category 'Switch'<br>

* Description supplémentaire pour les entrées de logbook, voir aussi 'QuickSave' pour cela<br>.
* Nouvelle catégorie 'Aperçu' avec les valeurs de certaines catégories sélectionnées<br>.
* Mise à jour de la catégorie 'Climatisation' <br>.
* Catégorie mise à jour 'Imprimante'<br>
* Catégorie mise à jour 'Moniteur'<br>
* Catégorie mise à jour 'Point d'accès'<br>
* Catégorie mise à jour 'Commutateur FC'<br>
* Catégorie mise à jour 'Client'<br>
* Catégorie mise à jour 'Sauvegarde'<br>
* Catégorie mise à jour 'Power'<br>
* Catégorie mise à jour 'Enclosure'<br>
* Catégorie mise à jour 'Formfactor'<br>
* Catégorie mise à jour 'Plan d'urgence'<br>
* Catégorie mise à jour 'SAN'<br>
* Catégorie mise à jour 'Switch'<br>

Bugfixes<br>

Corrections de bugs<br>

* Object image cannot be deleted<br>
* Text is 'escaped' everywhere where it's written into the database<br>
* Date and time is in the wrong format in english<br>
* Repaired JavaScript enhanced categories<br>
* Temporary tables are not always deleted<br>
* many more...<br>

* L'image de l'objet ne peut pas être supprimée<br>.
* Le texte est 'échappé' partout où il est écrit dans la base de données<br>.
* La date et l'heure ne sont pas au bon format en anglais<br>.
* Repaired JavaScript enhanced categories<br>
* Les tables temporaires ne sont pas toujours supprimées<br>.
* many more...<br>

0.9 beta2<br>
Bugfixes<br>

0.9 beta2<br>
Corrections de bugs<br>

* closed 523: Network: IP-Adresse wird als primär angezeigt<br>
* closed 538: Storage: After creating fc-ports the new view is not the list<br>

* closed 523 : Network : L'adresse IP est affichée comme primaire<br>.
* closed 538 : Stockage : Après la création des ports fc, la nouvelle vue n'est pas la liste<br>.

view<br>

view<br>

* closed 531: Storage: JS isn't initially working at the start of the page<br>
* closed 530: Tooltips for all icons<br>
* closed 534: Storage: Kleine Ãnderungen<br>
* closed 537: JavaScript-generated date cannot be formatted<br>
* closed 449: objecttype: cellphone<br>
* closed 314: Dialog+ fields change the actual selected value after adding new<br>

* closed 531 : Stockage : JS ne fonctionne pas initialement au début de la page<br>.
* closed 530 : Info-bulles pour toutes les icônes<br>.
* closed 534 : Stockage : Petits changements<br>
* closed 537 : date générée par JavaScript ne peut pas être formatée<br>
* closed 449 : objecttype : cellphone<br>
* closed 314 : Dialog+ fields change la valeur réelle sélectionnée après l'ajout d'une nouvelle<br>.

list elements<br>

list elements<br>

* closed 100003: Files: Name of downloaded file should be changeable<br>
* closed 532: Storage: Benennungen der Geräte<br>
* closed 528: Network: Port Kategorien lassen sich nicht speichern<br>
* closed 525: Network: Port-Kategorien werden nicht referenziell gelöscht<br>
* closed 526: Network: Statusänderungen bei Ports müssen verhindert werden<br>
* closed 511: Themes cannot be changed<br>
* closed 519: Network: 'Standard'-not connected to port and interface as well<br>
* closed 501: Alt+S doesn't save an object :(<br>
* closed 517: Breadcrumb strings have to be translated<br>
* closed 2: Ermittlung des Installationsverzeichnisses<br>
* closed 510: Checking for rights in action processor<br>
* closed 505: Exchange current plain JS buildup-routine<br>
* closed 504: The language constant editor has too many delete buttons<br>
* closed 495: Category Memory: Row 'unit' is redundant<br>
* closed 493: Title for save button too long<br>
* closed 489: Duplicate button is without function<br>
* closed 498: Maintenance contract fixup / Emergency plan incomplete<br>
* closed 280: Missing script to delete old temporary tables<br>
* closed 485: Temporary tables are always newly created<br>
* closed 486: It is possible to log in to i-doit without password!!!<br>
* closed 483: Temporary tables are not deleted automatically<br>
* closed 467: Description of an object can't be saved<br>
* closed 474: You can't save a storage drive when there is no connected<br>

* closed 100003 : Files : Le nom du fichier téléchargé doit être modifiable<br>.
* closed 532 : Stockage : Noms des périphériques<br>.
* closed 528 : Network : Impossible d'enregistrer les catégories de ports<br>.
* closed 525 : Network : Les catégories de ports ne sont pas supprimées par référence<br>.
* closed 526 : Network : les changements de statut des ports doivent être empêchés<br>.
* closed 511 : Themes cannot be changed<br>.
* closed 519 : Network : 'Standard' -not connected to port and interface as well<br>
* closed 501 : Alt+S n'enregistre pas un objet :(<br>
* closed 517 : Breadcrumb strings have to be translated<br>
* closed 2 : Détermination du répertoire d'installation<br>
* closed 510 : Vérification des droits dans le processeur d'action<br>
* closed 505 : Exchange current plain JS buildup-routine<br>
* closed 504 : L'éditeur de constantes linguistiques a trop de boutons de suppression<br>.
* closed 495 : Category Memory : Row 'unit' is redundant<br>
* closed 493 : Titre pour bouton de sauvegarde trop long<br>
* closed 489 : Duplicate button is without function<br>
* closed 498 : Maintenance contract fixup / Emergency plan incomplete<br>
* closed 280 : Script manquant pour supprimer les anciennes tables temporaires<br>
* closed 485 : Les tables temporaires sont toujours recréées<br>.
* closed 486 : Il est possible de se connecter à i-doit sans mot de passe!!!<br>
* closed 483 : Les tables temporaires ne sont pas supprimées automatiquement<br>.
* closed 467 : La description d'un objet ne peut pas être sauvegardée<br>.
* closed 474 : Vous ne pouvez pas sauvegarder un disque de stockage s'il n'est pas connecté<br>.

manufacturer<br>

manufacturer<br>

* closed 478: List views generate SQL-Error<br>
* closed 3: Dienste zu Server hinzufügen fehlerhaft<br>
* closed 362: Date and time in header?<br>
* closed 476: PHPInfo doesn't show up<br>
* closed 475: Logbook navigation does not work - jumping through pages is<br>

* closed 478 : List views génère une erreur SQL<br>.
* closed 3 : Erreur d'ajout de services au serveur<br>.
* closed 362 : Date et heure dans l'en-tête?<br>
* closed 476 : PHPInfo ne s'affiche pas<br>
* closed 475 : Logbook navigation does not work - jumping through pages is<br>

impossible<br>

impossible<br>

* closed 249: Deletion of temporary directory / caches<br>
* closed 462: Allowed php memory size of 8MB is too low<br>
* closed 473: Add framework button as link to our support-forum<br>
* closed 463: Licences: SQL error when clicking on folder<br>
* closed 207: Tooltip-JS doesn't use via JS changed title attributes<br>
* closed 267: Wrong link in logbook list view<br>
* closed 311: login (back to viewed page)<br>
* closed 317: Status texts are not translated<br>
* closed 401: New CMDB: Highlights in the menutree<br>
* closed 432: Navbar buttons in lists have to be activated correctly<br>
* closed 63: Elementeigenschaften: Speichern beim Wechsel zwischen Unterpunkten<br>
* closed 238: Button-Icons im NavBar haben keine einheitliche Logik<br>
* closed 250: Default tooltips in main navigation<br>
* closed 263: "Edit" button is active in list view<br>
* closed 264: "Delete" button is active in "edit" mode<br>
* closed 278: i18n: New language constants<br>
* closed 289: Editor: HTML chars in text fields<br>

* closed 249 : Deletion of temporary directory / caches<br>
* closed 462 : Allowed php memory size of 8MB is too low<br>
* closed 473 : Add framework button as a link to our support-forum<br>
* closed 463 : Licences : erreur SQL quand on clique sur un dossier<br>
* closed 207 : Tooltip-JS doesn't use via JS title changed attributes<br>
* closed 267 : Wrong link in logbook list view<br>
* closed 311 : login (retour à la page consultée)<br>
* closed 317 : Status texts are not translated<br>
* closed 401 : New CMDB : Highlights in the menutree<br>
* closed 432 : Les boutons de la barre de navigation dans les listes doivent être activés correctement<br>.
* closed 63 : Propriétés des éléments : sauvegarde lors du passage d'une sous-rubrique<br>
* closed 238 : Les icônes de boutons dans la NavBar n'ont pas de logique cohérente<br>
* closed 250 : tooltips par défaut dans la navigation principale<br>
* closed 263 : "Edit" button is active in list view<br>
* closed 264 : "Delete" button is active in "edit" mode<br>
* closed 278 : i18n : Nouvelles constantes de langue<br>
* closed 289 : Editor : HTML chars in text fields<br>

Feature updates<br>

Mises à jour des fonctionnalités<br>

* CMDB: Storage management finished<br>
* CMDB: Network management finished<br>
* CMDB: Licence management fixed<br>
* CMDB: File management fixed<br>
* CMDB: Navigation tree for (network-)port categories<br>
* CMDB: Adding contacts to objects (according to contact management)<br>
* Framework: Environment for theme development<br>
* Framework: Patch-Engine<br>
* Framework: Support for localization (according to UNIX Locale specs)<br>
* ... and many, many more ...<br>

* CMDB : gestion du stockage terminée<br>
* CMDB : Network management finished<br>
* CMDB : Licence management fixed<br>
* CMDB : File management fixed<br>
* CMDB : Navigation tree for (network-)port categories<br>
* CMDB : Adding contacts to objects (according to contact management)<br>
* Framework : Environment for theme development<br>
* Framework : Moteur de patch<br>
* Framework : Support for localization (according to UNIX Locale specs)<br>
* ... et beaucoup, beaucoup d'autres ...<br>

0.9 beta<br>

0.9 bêta<br>

* Storage management in beta state<br>

* Gestion du stockage à l'état bêta<br>.

* Controllers (Fibre-Channel, SCSI, ATA, FD etc.)<br>
* Devices / Drives<br>
* SAN-Pools / RAID-Groups<br>
* Contact management / Address book for companies, persons and Groups<br>
* Task management for work orders and checklists<br>
* Web-Installer<br>

* Contrôleurs (Fibre-Channel, SCSI, ATA, FD etc.)<br>
* Périphériques / Disques<br>
* SAN-Pools / RAID-Groups<br>
* Gestion des contacts / carnet d'adresses pour les entreprises, les personnes et les groupes<br>.
* Gestion des tâches pour les ordres de travail et les checklists<br>.
* Web-Installer<br>

0.9 prebeta<br>

0.9 prebeta<br>

* Licence management (as Objecttype in CMDB/Other)<br>
* Network management in beta state (as global category)<br>
* Rights system - rudimentary handling of rights (without User-interface)<br>
* my-doit area which will act as personal bookmark manager initially<br>
* Breadcrumb navigation<br>
* New objecttype configuration<br>
* Objecttype "Cellphone"<br>

* Licence management (as Objecttype in CMDB/Other)<br>
* Gestion du réseau en état bêta (comme catégorie globale)<br>
* Rights system - rudimentary handling of rights (without User-interface)<br>
* Zone my-doit qui agira comme gestionnaire de signets personnels initialement<br>
* Breadcrumb navigation<br>
* Nouvelle configuration du type d'objet<br>
* Objecttype "Cellphone"<br>

0.9 PR3<br>

0.9 PR3<br>

* Added file management, which includes ...<br>

* Ajout de la gestion des fichiers, qui inclut ...<br>

* a file manager component with client-independant up-/download<br>

* un composant gestionnaire de fichiers avec téléchargement/télédéchargement indépendant du client<br>.

features<br>

caractéristiques<br>

* a global CMDB file category in order to attach / detach a file object<br>
* a specific CMDB file category. We have implemented versioning features<br>

* une catégorie globale de fichiers CMDB pour attacher / détacher un objet fichier<br>.
* une catégorie de fichier CMDB spécifique. Nous avons mis en place des fonctionnalités de versioning<br>.

into this manager.<br>

dans ce gestionnaire.<br>

* Added power management<br>
* Added logbook<br>

* Added power management<br>
* Added logbook<br>
