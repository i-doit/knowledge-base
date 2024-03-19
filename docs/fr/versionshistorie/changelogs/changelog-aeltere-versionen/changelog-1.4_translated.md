<!-- TRANSLATED by md-translate -->
# Changelog 1.4

# Changelog 1.4

[Erweiterung]   "Report Modul" wird zu "Report Manager"<br>
[Erweiterung]       Bearbeitung von Reports, welche mit dem Abfrage Editor erstellt wurden<br>
[Erweiterung]       Unterstützung von Benutzerdefinierten Kategorien<br>
[Erweiterung]       Sub-Anfrage von referenzierten Objekten zur Darstellung von mehr als nur dem Objektnamen<br>
[Erweiterung]       Gruppierung und Verschachtelung von Konditionen<br>
[Erweiterung]       Reports lassen sich nun kategorisieren<br>
[Erweiterung]   i-doit Api<br>
[Erweiterung]       Neue JSON-RPC Login Möglichkeiten zur Authentifizierung gegen die i-doit API (siehe JSON-RPC Doku 1.4)<br>
[Erweiterung]        JSON-RPC Batch requests (http://www.jsonrpc.org/specification#batch)<br>
[Erweiterung]       Möglichkeit zur Zählung von Objekten in Api Abfrage cmdb.object_types<br>
[Erweiterung]       Api Methode cmdb.object.read liefert nunmehr direkt das angefragt Objekt anstatt Array mit nur einem Key "0"<br>
[Erweiterung]   Export von Check MK Konfigurationen<br>
[Erweiterung]   Aus der Zuweisung der Cluster Verwaltungsinstanz wird nun eine Beziehung erzeugt<br>
[Erweiterung]   JDisc: Matching beim Aktualisieren nach Hostname, MAC und/oder IP-Adresse<br>
[Erweiterung]   JDisc: Erkeunng von VMware, Citrix und MS HyperV Cluster<br>
[Erweiterung]   JDisc: Neuer Objekttyp VRRP/HSRP Cluster zur Kategorisierung von Clustern<br>
[Erweiterung]   Netzwerkverbindungen bieten die Möglichkeit zur Dokumentation von TCP/UDP/ICMP Verbindungen<br>
[Erweiterung]       Neue Kategorie Listener<br>
[Erweiterung]       Neue Kategorie Connector<br>
[Erweiterung]       Report View zur Auswertung von allen dokumentierten Netzwerkverbindungen<br>
[Erweiterung]   Anzeige der Beziehungsart im Quickinfo Overlay<br>
[Erweiterung]   Die Beziehungsarten erhalten eine angepasste Oberfläche zum definieren der "Standard"-Gewichtung<br>
[Erweiterung]   Möglichkeit zur Anzeige von Inventarnummern im QR Code<br>
[Erweiterung]   Deinstallation von Modulen im Admin Center<br>
[Erweiterung]   Angabe eines Default VLANs in der Kategorie Netzwerk -> Port<br>
[Erweiterung]   Neues Modul: IT Service<br>
[Erweiterung]   OCS Inventory NG: Oberfläche modernisiert<br>
[Erweiterung]   In der Kategorie Kontaktzuweisung kann nun ein und derselbe Kontakt mit unterschiedlichen Rollen mehrfach zugewiesen werden.<br>
[Erweiterung]   Neue Verwaltungsoberfläche für Beziehungsarten<br>
[Erweiterung]   Die Report-View für QR-Codes bietet nun verschiedene Layouts an.<br>
[Erweiterung]   Neue Objekttypen "Land", "Stadt", "Flugzeug" und "Fahrzeug" mit entsprechenden Kategorien<br>
[Bugfix]        JDisc: Der Port Typ wird nicht importiert<br>
[Bugfix]        Diverse Probleme mit hochgeladenen Dateien<br>
[Bugfix]        LDAP Sync erzeugt leere Organisationsobjekte<br>
[Bugfix]        NDO Kategorie unter Ordner "Monitoring" wird nicht dargestellt<br>
[Bugfix]        Fehler beim Erzeugen von PDU Branches<br>
[Bugfix]        Kategorie Freigabenzugriff fehlt in der Listeneditierung<br>
[Bugfix]        Beschreibungsfelder werden in der Massenänderung nicht berücksichtigt<br>
[Bugfix]        VoIP-Telefone haben keine Allgemein-Kategorie<br>
[Bugfix]        Fehler: Not unique table/alias: 'isys_obj' im CSV-Import<br>
[Bugfix]        Globales Suchfeld erscheint auch bei fehlender Berechtigung für die Suchfunktion<br>
[Bugfix]        Spalten benutzerdefinierter Multi-Value-Kategorien können nicht sortiert werden<br>
[Bugfix]        JDisc: Weitere Eigenschaften in Kategorie Gerät (lokaler Massenspeicher) berücksichtigen<br>
[Bugfix]        JDisc: Datenbankinstanzen berücksichtigen<br>
[Bugfix]        Nagios-Host-Link ist nicht mehr vorhanden<br>
[Bugfix]        "LDAP Operations error" beim Suchen innerhalb der gesamten Domäne<br>
[Bugfix]        OCS Inventory NG: Einstellung für das automatische Überschreiben sämtlicher Softwarezuweisungen in OCS Konfiguration<br>
[Bugfix]        OCS Inventory NG: Weitere kleine Fehler behoben<br>
[Bugfix]        OCS Inventory NG: Ein Problem beim erkennen des Hostnames wurde gelöst<br>
[Bugfix]        [Module Manager] Missing "ZIP" extension returns wrong error message when installing/updating module<br>
[Bugfix]        [Module Manager] Fehler bei fehlender PHP ZIP Erweiterung<br>
[Bugfix]        Fehler in der Funktion "archivierte/gelöschte Kategorieeinträge löschen"<br>
[Bugfix]        Das Pflichtfeld für Standort lässt sich durch Auswahl von "-" umgehen<br>
[Bugfix]        Der CMDB Explorer startet standardmäßig im Einweg einklappen Modus, die Checkbox ist allerdings unselektiert<br>
[Bugfix]        Fehler beim Erzeugen von "PDU Branches"<br>
[Bugfix]        CMDB-Explorer: Man kann keine Ansicht aller IT-Services Typ XYZ erzeugen (z.B. Aller Business Services)<br>
[Bugfix]        Wird mit dem Controller ein LDAP Sync angestoßen und eine ID als Parameter angegeben, kommt ein Fehler<br>
[Bugfix]        In Datei-Browser: Beim Anlegen einer neuen Datei innerhalb des Browsers kann die Kategorie nur über ein festes Drop-Down-Feld ausgewählt werden<br>
[Bugfix]        Fehlerhafte Umlaute im Mandanten Namen nach Installation<br>
[Bugfix]        Benutzer, die über Rechte für einzelne Objekte verfügen, sehen im Objekt-Browser alle Objekte/Objekttypen und können diese zuweisen.<br>
[Bugfix]        Einige Aktionen bewirken keinen Logbuch-Eintrag<br>
[Bugfix]        Falls mehrere Mandanten vorhanden sind, wird die Sprache auf Englisch zurückgestellt, wenn diese nicht in allen Mandanten angepasst wurde.<br>
[Bugfix]        Kategorie "FC-Port" wird in Objekttyp "FC-Switch" separat und zusätzlich in der Ordner-Kategorie "Speichernetze" angezeigt.<br>
[Bugfix]        Tastaturnavigation in Objektlisten funktioniert nicht mehr<br>
[Bugfix]        CMDB-Explorer: Dynamische Objektgruppen können nicht aufgeklappt werden.<br>
[Bugfix]        Der Download-Button in der Handbuchzuweisung funktioniert nicht<br>
[Bugfix]        Reports erlauben mehrere Beschreibungsfelder in der Ausgabe nicht<br>
[Bugfix]        Systemübersicht in der Verwaltung bringt Fehlermeldung wenn die neue Version nicht überprüft werden kann<br>
[Bugfix]        CMDB-Explorer: Wenn ein IT-Service als Root gesetzt wird und ihm ein Objekt eines benutzerdefinierten Objekttyps zugewiesen wurde, erscheint beim Klick auf den IT-Service die Meldung "Error: Orientation not found. ('')"<br>
[Bugfix]        Purge-Button in Zuweisungskategorien entfernen (Zuweisung soll über den Objekt-Browser entfernt werden)<br>
[Bugfix]        Wenn eine Multi-Value-Kategorie auf der Übersichtsseite angezeigt und bei der Objekterstellung befüllt wird, wird bei jeder Verwendung des Speichern-Buttons ein neuer Eintrag in der Kategorie erzeugt<br>
[Bugfix]        Beim speichern der Kategorien C__CATS__CONTRACT_INFORMATION bzw. C__CATS__CONTRACT über die API tritt ein Fehler auf<br>
[Bugfix]        Online Report Lizenzauslastung zeigt auch die Lizenzen in Benutzung von archivierten oder gelöschten Objekten an.<br>
[Bugfix]        Mouseover bei Icons der Zuweisungsfelder fehlt<br>
[Bugfix]        Controller wirft unter SLES Fehlermeldung, weil php5 Binary nicht gefunden wurde<br>
[Bugfix]        Objektbrowser in LDEV Client filtert nicht nach rückwärtiger Kategorie<br>
[Bugfix]        Ein Editor kann sich der Personengruppe "Admin" zuweisen und erbt im Anschluss alle Rechte dieser Gruppe<br>
[Bugfix]        Benutzerdefinierte Objekttypen mit Umlaut im Titel werden in der Schrankansicht nicht korrekt dargestellt<br>
[Bugfix]        Sortierung von IP-Adressen ist nicht korrekt (alphanummerisch)<br>
[Bugfix]        QR Code Logos haben teilweise eine falsche Höhe<br>
[Bugfix]        API: Die Erstellung eines neuen Logbuch Eintrags liefert die ID des erstellten Eintrags nicht zurück<br>
[Bugfix]        Loginventory und JDisc erzeugen unnötige Logdateien im Temporären Verzeichnis<br>
[Bugfix]        SQL-Fehler beim Löschen von Objekt-Sperrungen<br>
[Bugfix]        Ein neuer LDAP Filter hat als Wert immer "undefined"<br>
[Bugfix]        Fehler beim Filtern von negativen Zahlen<br>
[Bugfix]        [h-inventory] Hosts werden dem falschen Layer-3-Netz zugeordnet (Global v4)<br>
[Bugfix]        Nagios service assignment zeigt nicht alle Einträge an<br>
[Bugfix]        In der Monitoring Konfiguration funktioniert der Klick auf die Listenzeile nicht<br>
[Bugfix]        Erzeugen einer neuen Gruppe über eine Gruppenzuweisung ist nicht möglich<br>
[Bugfix]        Der Reader sieht im Quicklaunch Widget Buttons zu dessen Funktionen er nicht berechtigt ist<br>
[Bugfix]        Der Status-Link für Listen fehlt in Nagios NDO Kategorie<br>
[Bugfix]        Listenansicht erfordert Zugriff auf global alle Kategorien<br>
[Bugfix]        Benutzerdefinierte Workflows tauchen nicht unter my-idoit im Bereich der erstellten Auftrage auf<br>
[Bugfix]        "Check_MK" Modul Fehlermeldung, obwohl das Modul noch nicht veröffentlicht ist<br>
[Bugfix]        Reportview Konsistenzprüfung funktioniert nicht mehr<br>
[Bugfix]        In einer gleichgerichteten Beziehung sollen nur Beziehungen auswählbar sein<br>
[Bugfix]        Beim Laden der Templates werden PHP Fehlermeldungen dargestellt<br>
[Bugfix]        Beschreibungsfeld bei Benutzerdefinierten Kategorien werden nicht exportiert und importiert.<br>
[Bugfix]        Änderungen in "läuft auf" in der Kategorie "Gastsysteme" wird nicht gespeichert.<br>
[Bugfix]        Im Controller Interface für import, können csv und cabling importe genutzt werden, welche hier allerdings keine Funktion haben<br>
[Bugfix]        Beim Abfrageeditor werden gleichnamige Spalten im Ergebnis überschrieben<br>
[Bugfix]        Button zur Anzeige des Nagios-Status kann in der Listenansicht nicht angezeigt werden.<br>
[Bugfix]        PHP Check für vorhandene "GD Lib" Extension<br>
[Bugfix]        Wenn ein Benutzer keine Rechte für die Bearbeitung innerhalb der CMDB hat, kann er auch nicht sein eigenes Passwort ändern<br>
[Bugfix]        Behebung eines Nagios status.cgi Link Problems<br>
[Bugfix]        Remote File Disclosure Sicherheitslücke im Datei Browser wurde behoben<br>
[Bugfix]        SAN-Zoning-Browser: Auswahl der SAN-Zone wählt eine alternative SAN-Zone aus, als die manuelle Auswahl<br>
[Bugfix]        Listeneditierung: Error Meldung bei Speichern in Kategorie Softwarezuweisung<br>
[Bugfix]        Eigenschaft "Name" aus spez. Kategorie "Datenbankschema" wird bei Auswahl immer leer in der Listenansicht angezeigt.<br>
[Bugfix]        View "Keine Beziehungen" funktioniert nicht korrekt<br>
[Bugfix]        Keine Speicherung unter Anwendungen -> Installation (neu)<br>
[Bugfix]        In der Anschluss Kategorie wird der Titel vom Ausgangsanschluss nicht korrekt angelegt, wenn man gleichzeitig ein Ausgangsanschluss anlegen will.<br>
[Bugfix]        Beim Annehmen von Workflows erscheint die Fehlermeldung "Call of unknown method 'clear_compiled_tpl'." (Falls ein Mailserver konfiguriert wurde und eine Mail verschickt wird)<br>
[Bugfix]        Kategorie "logische Ports": Aktualisierung der zugewiesenen Ports über die API<br>
[Bugfix]        Kategorie "logische Ports": Daten bleiben nach dem Purgen erhalten<br>
[Bugfix]        LDAP sync läuft immer Rekursiv auch wenn das Feld Rekursion in den Einstellungen der LDAP Server deaktiviert ist.<br>
[Bugfix]        Arbeitsplatz: Zugewiesene Endgeräte können zwar gelöscht werden, werden sie aber woanders zugewiesen, wird die Beziehung nicht gelöscht.<br>
[Bugfix]        Wenn ein Objekt gelockt wird, werden die Navigations-Buttons nicht ausgeblendet.<br>
[Bugfix]        In Kategorie Anschrift ist es nicht möglich im Feld Hausnummer Buchstaben einzutragen.<br>
[Bugfix]        Im CMDB-Explorer ist es nicht möglich einzelne IT-Services in der IT-Serviceansicht darzustellen.<br>
[Bugfix]        Lizenzen: Wenn die Übersichtsseite verwendet wird, ist die Erzeugung von Lizenzen nicht möglich.<br>
[Bugfix]        CSV-Import: Der erste Button vor dem Mapping darf nicht "Importieren" heissen, sondern z.B. "Datei analysieren"<br>
[Bugfix]        Bei den Beschreibungsfeldern der Kategorien Passwort und Personengruppen kommt es bei langen Beschreibungen zu Datenverlust.<br>
[Bugfix]        JDisc: HDD-Kapazitäten in schlecht ablesbaren Einheiten importiert<br>
[Bugfix]        JDisc: Controller bricht Import sofort ab (0 Objekte gefunden), obwohl Import über Weboberfläche möglich.<br>
[Bugfix]        Mit jedem neu erstellten Netz wird der Eintrag der DNS Domäne in der Kategorie verdoppelt.<br>
[Bugfix]        Feld "Hausnummer" (Kat: Adresse) erlaubt nur die Eingabe von Zahlen<br>
[Bugfix]        LDAP Konfiguration: Anzeigefehler<br>
[Bugfix]        Probleme bei der Verknüpfung von Modell & Hersteller<br>
[Bugfix]        Behebung eines Problems beim Verändern der Objektanzahl einer Hosting Subscription<br>
[Bugfix]        Vererbte Services bleiben trotz Archivierung der Softwarezuweisung "Aktiv"<br>

[Extension] "Module de rapports" devient "Gestionnaire de rapports"<br>.
[Extension] Modification des rapports créés avec l'éditeur de requêtes<br>.
[Extension] Support des catégories définies par l'utilisateur<br>.
[Extension] Sous-requête d'objets référencés pour afficher plus que le nom de l'objet<br>.
[Extension] Regroupement et imbrication des conditions<br>.
[Extension] Possibilité de catégoriser les rapports<br>.
[Extension] Api i-doit<br>
[Extension] Nouvelles possibilités de connexion JSON-RPC pour l'authentification contre l'API i-doit (voir doc. JSON-RPC 1.4)<br>
[Extension] Demandes de traitement par lots JSON-RPC (http://www.jsonrpc.org/specification#batch)<br>
[Extension] Possibilité de compter les objets dans la requête api cmdb.object_types<br>
[Extension] La méthode api cmdb.object.read retourne désormais directement l'objet demandé au lieu d'un tableau avec une seule clé "0"<br>
[Extension] Exportation des configurations Check MK<br>
[Extension] Une relation est désormais créée à partir de l'affectation de l'instance de gestion du cluster<br>.
[Extension] JDisc : Correspondance lors de l'actualisation par nom d'hôte, MAC et/ou adresse IP<br>.
[Extension] JDisc : Détection des clusters VMware, Citrix et MS HyperV<br>.
[Extension] JDisc : Nouveau type d'objet VRRP/HSRP Cluster pour catégoriser les clusters<br>.
[Extension] Les connexions réseau offrent la possibilité de documenter les connexions TCP/UDP/ICMP<br>.
[Extension] Nouvelle catégorie Listener<br>
[Extension] Nouvelle catégorie Connector<br>
[Extension] Report View pour l'évaluation de toutes les connexions réseau documentées<br>
[Extension] Affichage du type de relation dans la superposition des info-bulles<br>.
[Extension] Les types de relations reçoivent une interface adaptée pour définir la pondération "standard"<br>.
[Extension] Possibilité d'afficher les numéros d'inventaire dans le QR Code<br>.
[Extension] Désinstallation des modules dans l'Admin Center<br>.
[Extension] Indication d'un VLAN par défaut dans la catégorie Réseau -> Port<br>.
[Extension] Nouveau module : IT Service<br>
[Extension] OCS Inventory NG : interface modernisée<br>
[Extension] Dans la catégorie Attribution de contact, il est désormais possible d'attribuer plusieurs fois le même contact avec des rôles différents.<br>
[Extension] Nouvelle interface de gestion pour les types de relations<br>.
[Extension] La vue de rapport pour les codes QR propose désormais différentes mises en page.<br>
[Extension] Nouveaux types d'objets "pays", "ville", "avion" et "véhicule" avec les catégories correspondantes<br>.
[Bugfix] JDisc : Le type de port n'est pas importé<br>.
[Bugfix] Divers problèmes avec les fichiers téléchargés<br>.
[Bugfix] La synchronisation LDAP crée des objets d'organisation vides<br>
[Bugfix] La catégorie NDO sous le dossier "Monitoring" n'est pas affichée<br>
[Bugfix] Erreur lors de la création de branches PDU<br>
[Bugfix] La catégorie Accès au partage est manquante dans l'édition de liste<br>
[Bugfix] Les champs de description ne sont pas pris en compte dans les modifications en masse<br>.
[Bugfix] Les téléphones VoIP n'ont pas de catégorie générale<br>.
[Bugfix] Erreur : Not unique table/alias : 'isys_obj' dans l'importation CSV<br>
[Bugfix] Le champ de recherche global apparaît même si la fonction de recherche n'est pas autorisée<br>.
[Bugfix] Les colonnes des catégories multi-valeurs personnalisées ne peuvent pas être triées<br>.
[Bugfix] JDisc : Prendre en compte d'autres propriétés dans la catégorie Périphérique (stockage de masse local)<br>
[Bugfix] JDisc : Prendre en compte les instances de la base de données<br>
[Bugfix] Le lien hôte Nagios n'existe plus<br>.
[Bugfix] "LDAP Operations error" lors de la recherche dans l'ensemble du domaine<br>
[Bugfix] OCS Inventory NG : Réglage pour écraser automatiquement toutes les attributions de logiciels dans la configuration OCS<br>
[Bugfix] OCS Inventory NG : Correction d'autres petites erreurs<br>.
[Bugfix] OCS Inventory NG : un problème de détection du nom d'hôte a été résolu<br>.
[Bugfix] [Module Manager] L'extension "ZIP" manquante renvoie un message d'erreur erroné lors de l'installation/la mise à jour du module<br>.
[Bugfix] [Module Manager] Erreur lors de l'absence d'extension PHP ZIP<br>
[Bugfix] Erreur dans la fonction "supprimer les entrées de catégories archivées/supprimées"<br>
[Bugfix] Le champ obligatoire pour la localisation peut être contourné en sélectionnant "-"<br>.
[Bugfix] L'Explorateur CMDB démarre par défaut en mode de repliage unique, mais la case à cocher n'est pas sélectionnée<br>.
[Bugfix] Erreur lors de la création de "PDU Branches"<br>.
[Bugfix] Explorateur CMDB : impossible de créer une vue de tous les services informatiques de type XYZ (par ex. tous les services commerciaux)<br>.
[Bugfix] Si une synchronisation LDAP est lancée avec le contrôleur et qu'un ID est spécifié comme paramètre, une erreur survient<br>.
[Bugfix] Dans l'explorateur de fichiers : Lors de la création d'un nouveau fichier dans le navigateur, la catégorie ne peut être sélectionnée que via un champ déroulant fixe<br>.
[Bugfix] Erreur de tréma dans le nom du client après l'installation<br>.
[Bugfix] Les utilisateurs disposant de droits sur des objets individuels voient tous les objets/types d'objets dans le navigateur d'objets et peuvent les attribuer.<br>
[Bugfix] Certaines actions ne provoquent pas d'entrée dans le journal<br>.
[Correction d'un bug] S'il y a plusieurs clients, la langue est réinitialisée à l'anglais si elle n'a pas été adaptée dans tous les clients.<br>
[Bugfix] La catégorie "FC-Port" est affichée séparément dans le type d'objet "FC-Switch" et en plus dans la catégorie de dossier "Réseaux de stockage".<br>
[Bugfix] La navigation au clavier dans les listes d'objets ne fonctionne plus<br>.
[Bugfix] Explorateur CMDB : les groupes d'objets dynamiques ne peuvent pas être développés.<br>
[Bugfix] Le bouton de téléchargement dans l'attribution des manuels ne fonctionne pas<br>.
[Bugfix] Les rapports n'autorisent pas plusieurs champs de description dans la sortie<br>.
[Bugfix] L'aperçu du système dans l'administration apporte un message d'erreur si la nouvelle version ne peut pas être vérifiée<br>.
[Bugfix] Explorateur CMDB : Lorsqu'un service informatique est défini comme racine et qu'un objet d'un type d'objet personnalisé lui est attribué, le message "Error : Orientation not found. ('')"<br>
[Bugfix] Suppression du bouton Purge dans les catégories d'attribution (l'attribution doit être supprimée via l'explorateur d'objets)<br>
[Bugfix] Lorsqu'une catégorie multi-valeurs est affichée sur la page d'aperçu et remplie lors de la création de l'objet, une nouvelle entrée est créée dans la catégorie à chaque utilisation du bouton d'enregistrement<br>.
[Correction d'une erreur lors de l'enregistrement des catégories C__CATS__CONTRACT_INFORMATION et C__CATS__CONTRACT via l'API<br>.
[Bugfix] Le rapport en ligne sur l'utilisation des licences indique également les licences en cours d'utilisation pour les objets archivés ou supprimés.<br>
[Bugfix] Absence de survol de la souris sur les icônes des champs d'attribution<br>.
[Bugfix] Le contrôleur envoie un message d'erreur sous SLES car le binaire php5 n'a pas été trouvé<br>.
[Bugfix] Le navigateur d'objets dans le client LDEV ne filtre pas par catégorie arrière<br>
[Bugfix] Un éditeur peut s'attribuer le groupe de personnes "Admin" et hériter de tous les droits de ce groupe<br>.
[Bugfix] Les types d'objets définis par l'utilisateur avec un tréma dans le titre ne sont pas affichés correctement dans la vue armoire<br>.
[Bugfix] Le tri des adresses IP n'est pas correct (alphanumérique)<br>.
[Bugfix] Les logos des codes QR ont parfois une hauteur incorrecte<br>.
[Bugfix] API : La création d'une nouvelle entrée de journal ne renvoie pas l'ID de l'entrée créée<br>.
[Bugfix] Loginventory et JDisc créent des fichiers log inutiles dans le répertoire temporaire<br>.
[Bugfix] Erreur SQL lors de la suppression de verrouillages d'objets<br>
[Bugfix] La valeur d'un nouveau filtre LDAP est toujours "undefined"<br>.
[Bugfix] Erreur lors du filtrage des nombres négatifs<br>
[Bugfix] [h-inventory] Les hôtes sont attribués au mauvais réseau de couche 3 (Global v4)<br>
[Bugfix] Nagios service assignment n'affiche pas toutes les entrées<br>
[Bugfix] Dans la configuration du monitoring, le clic sur la ligne de liste ne fonctionne pas<br>.
[Bugfix] Il n'est pas possible de créer un nouveau groupe via une affectation de groupe<br>.
[Bugfix] Le Reader voit dans le widget Quicklaunch des boutons dont il n'a pas le droit d'utiliser les fonctions<br>.
[Bugfix] Le lien d'état des listes est absent de la catégorie NDO de Nagios<br>.
[Bugfix] L'affichage des listes nécessite un accès global à toutes les catégories<br>.
[Bugfix] Les workflows personnalisés n'apparaissent pas sous my-idoit dans la zone des tâches créées<br>.
[Bugfix] Message d'erreur du module "Check_MK" alors que le module n'est pas encore publié<br>.
[Bugfix] Le contrôle de cohérence de Reportview ne fonctionne plus<br>.
[Bugfix] Dans une relation alignée, seules les relations doivent être sélectionnables<br>.
[Bugfix] Des messages d'erreur PHP sont affichés lors du chargement des templates<br>.
[Bugfix] Le champ de description des catégories personnalisées ne s'exporte pas et ne s'importe pas <br>.
[Bugfix] Les changements dans la catégorie "Systèmes invités" ne sont pas enregistrés. <br>
[Correction] Dans l'interface du contrôleur pour l'importation, les importations csv et cabling peuvent être utilisées, mais elles n'ont pas de fonction ici<br>.
[Bugfix] Dans l'éditeur de requêtes, les colonnes de même nom sont écrasées dans le résultat<br>.
[Bugfix] Le bouton d'affichage de l'état de Nagios ne peut pas être affiché dans la vue en liste.<br>
[Bugfix] Vérification PHP pour l'extension "GD Lib" existante<br>.
[Bugfix] Si un utilisateur n'a pas les droits d'édition dans la CMDB, il ne peut pas non plus changer son propre mot de passe<br>.
[Bugfix] Correction d'un problème de lien Nagios status.cgi<br>.
[Bugfix] Correction d'une faille de sécurité Remote File Disclosure dans le navigateur de fichiers<br>.
[Bugfix] Navigateur de zonage SAN : La sélection de la zone SAN sélectionne une zone SAN alternative à la sélection manuelle<br>.
[Bugfix] Édition de liste : message d'erreur lors de l'enregistrement dans la catégorie Attribution de logiciel<br>
[Bugfix] La propriété "Nom" de la catégorie spéciale "Schéma de base de données" est toujours vide dans la vue en liste lorsqu'elle est sélectionnée <br>.
[Bugfix] La vue "Aucune relation" ne fonctionne pas correctement<br>.
[Bugfix] Pas d'enregistrement sous Applications -> Installation (nouveau)<br>.
[Bugfix] Dans la catégorie Raccordement, le titre du raccordement de sortie n'est pas créé correctement si on veut créer un raccordement de sortie en même temps.<br>
[Bugfix] Lors de l'acceptation de workflows, le message d'erreur "Call of unknown method 'clear_compiled_tpl'" apparaît. (Si un serveur de messagerie a été configuré et qu'un courrier est envoyé)<br>
[Bugfix] Catégorie "Ports logiques" : Mise à jour des ports attribués via l'API<br>.
[Bugfix] Catégorie "Ports logiques" : Les données sont conservées après la purge<br>.
[Bugfix] La synchronisation LDAP est toujours récursive, même si le champ Récursion est désactivé dans les paramètres du serveur LDAP.
[Bugfix] Poste de travail : les terminaux attribués peuvent être supprimés, mais s'ils sont attribués ailleurs, la relation n'est pas supprimée.<br>
[Correction] Lorsqu'un objet est verrouillé, les boutons de navigation ne sont pas masqués.<br>
[Correction] Dans la catégorie Adresse, il n'est pas possible de saisir des lettres dans le champ Numéro de rue. <br>
[Correction] Dans l'explorateur CMDB, il n'est pas possible d'afficher des services informatiques individuels dans la vue des services informatiques.<br>
[Bugfix] Licences : Lorsque la page de synthèse est utilisée, la création de licences n'est pas possible.<br>
[Bugfix] Importation CSV : Le premier bouton avant le mapping ne doit pas s'appeler "Importer", mais par exemple "Analyser le fichier"<br>.
[Bugfix] Les champs de description des catégories mot de passe et groupes de personnes entraînent une perte de données en cas de longues descriptions.<br>
[Bugfix] JDisc : Capacités HDD importées en unités peu lisibles<br>.
[Bugfix] JDisc : Le contrôleur interrompt immédiatement l'importation (0 objet trouvé), bien que l'importation via l'interface web soit possible.<br>
[Bugfix] A chaque nouveau réseau créé, l'enregistrement du domaine DNS est doublé dans la catégorie.<br>
[Bugfix] Le champ "Numéro de maison" (Cat : Adresse) ne permet que la saisie de chiffres<br>.
[Bugfix] Configuration LDAP : erreur d'affichage<br>.
[Bugfix] Problèmes lors de la liaison modèle & fabricant<br>.
[Bugfix] Correction d'un problème lors de la modification du nombre d'objets d'un abonnement d'hébergement<br>
[Bugfix] Les services hérités restent "actifs" malgré l'archivage de l'attribution du logiciel <br>.