<!-- TRANSLATED by md-translate -->
# Changelog 1.2

# Changelog 1.2

[Erweiterung]    Komplett überarbeitetes benutzerspezifisches Dashboard<br>
[Erweiterung]      Widget: Report Widget<br>
[Erweiterung]      Widget: Generischer RSS Feed<br>
[Erweiterung]      Widget: Bookmarks<br>
[Erweiterung]      Widget: Vitalinformationen eines Objektes<br>
[Erweiterung]      Widget: Externer Webinhalt<br>
[Erweiterung]      Erweiterung des Kreisdiagramm Widgets<br>
[Erweiterung]      Widget: Notizen<br>
[Erweiterung]      Widget: Umrechner<br>
[Erweiterung]      Widget: Lizenzübersicht<br>
[Erweiterung]      Widget: Kalender<br>
[Erweiterung]      Widget: CMDB Explorer<br>
[Erweiterung]    Internationalisierung: Umstellung auf UTF-8 ermöglicht den Support nicht lateinischer Sprachen<br>
[Erweiterung]    Menübaum Suche & Ausblenden nicht genutzter Objekttypen oder Kategorien<br>
[Erweiterung]    Tastaturnavigation im Menübaum<br>
[Erweiterung]    Benutzerspezifische Kategorien können nun "Multivalue" sein<br>
[Erweiterung]    Dynamische Gruppen (Objekte)<br>
[Erweiterung]    Kompatibilität zu JDisc Version 2.9 und 3.0.<br>
[Erweiterung]   Das Rechtesystem wurde um einen neuen Rechtepfad erweitert, der es ermöglicht Kategorien in Objekttypen zu berechtigen<br>
[Bugfix]        Objektlisten: Kapazitäten werden in Byte angezeigt<br>
[Bugfix]        Wenn unter DNS-Domäne in der Hostadresse ein neuer Eintrag eingegeben wird, wird dieser nicht mehr neu angelegt<br>
[Bugfix]        Der LDAP Controller zur Synchronisation von Benutzern hat den konfigurierten LDAP Filter nicht verwendet.<br>
                In diesem Zusammenhang ist Vorsicht bei dem Sync von mehr als 1000 Active Directory Usern geboten. Die Konfigurationseinstellung<br>
                MaxPageSize sollte hierfür entsprechend der Useranzahl erhöht werden.<br>
[Bugfix]        Gemeinsamer Speicher: Die Namen der Objekte, die die LUNs zur Verfügung stellen wurden gekürzt<br>
[Bugfix]        Verwaltung/Benutzereinstellungen/Objektlisten: In der Kategorie Schrank ist vertikale Einschübe 2x vorhanden<br>
[Bugfix]        Nagios host state und nagios service state links funktionieren nicht richtig<br>
[Bugfix]        Spezifische Kategorie "Routing": Die Gatewayadresse wird in der Liste nicht angezeigt<br>
[Bugfix]        In Objektlisten wird das Feld "Übergeordnetes Objekt" der Kategorie "Logischer Standort" nicht angezeigt<br>
[Bugfix]        Die Druckansicht wurde wiederhergestellt<br>
[Bugfix]        Druckansicht: Verschiedene Kategorien werden fehlerhaft angezeigt<br>
[Bugfix]        Personengruppenmitgliedschaft: Der Button zum Löschen fehlt!<br>
[Bugfix]        Problem mit dem Default Gateway in der Hostadresse<br>
[Bugfix]        Das Erstellen neuer Objekte vom Template hat ebenso neue Objekte für alle darin befindlichen Referenzen erzeugt<br>
[Bugfix]        Nagios URL ist abgeschnitten<br>
[Bugfix]        In der Portübersicht wird die Netzadresse anstatt der Hostadresse angezeigt<br>
[Bugfix]        Archivierte und gelöschte Lizenzzuweisungen werden als in Benutzung gezählt<br>
[Bugfix]        Umlautproblem im Titel der Benachrichtigungen<br>
[Bugfix]        isys_file_version wirft einen foreign key error<br>
[Bugfix]        Error beim Duplizieren von Personen<br>
[Bugfix]        Personen: Zugewiesene Objekte lassen sich nicht archivieren<br>
[Bugfix]        Templates: Speichert man in einem Personen-Template die Kategorie Stammdaten ab, verändert sich der Zustand des Templates auf "normal"<br>
[Bugfix]        Baummenü Standortsicht: Wenn ein Objekttyp kein Icon hat, wird das Icon des vorherigen Objektes im Baum verwendet.<br>
[Bugfix]        In den Vertragsdetails ist fälschlicherweise das Ende mit dem Start gleichgesetzt<br>
[Bugfix]        IP-Adresse aus Layer 3 Netz zuordnen geht nicht, wenn die Wiki-URL konfiguriert ist<br>
[Bugfix]        Verbindungen zwischen Objekten werden in gewissen Situationen gelöscht wenn über die Listeneditierung editiert wird<br>
[Bugfix]        vitueller Host/virtuelle Switche: Man kann auch archivierte Ports auswählen.<br>
[Bugfix]        Beim Klick auf Speichern sollte der editierte Wert der Dialog+ Liste abgespeichert werden<br>
[Bugfix]        Kategorie Freigabenzugriff: Das Feld "Zugewiesene Objekte" muss "Zugewiesenes Objekt" heißen<br>
[Bugfix]        Kategorie Vertragszuweisung: Das Kündigungsdatum wird falsch angegeben<br>
[Bugfix]        SLA Kategorie funktioniert nicht und erzeugt Fehler bei der Suche<br>
[Bugfix]        Kategorie Klimaanlage: Feld "Luftmenge" -> qm/h in cbm/h umbenennen<br>
[Bugfix]        Spez. Kategorie vom Objekttypen "Objektgruppe" heißt Objekttyp-Gruppe. Sollte besser Objektgruppe heißen<br>
[Bugfix]        Session Timeout aus config.inc.php wird nicht mehr berücksichtigt<br>
[Bugfix]        Templates: Ein neu erstelltes Objekt kann keinen Umlaut in der Bezeichnung haben<br>
[Bugfix]        Kategorie Clusterdienstzuweisung lässt sich in benutzerdefinierten Objekttypen nicht speichern<br>
[Bugfix]        Kategorie FC-Port: Das Beschreibungsfeld kann keine Umlaute!<br>
[Bugfix]        Listeneditierung in FC-Port: Verbindungen zu anderen FC-Ports werden nicht gespeichert<br>
[Bugfix]        Listeneditierung in FC-Port: Verbundener Controller lässt sich nicht wählen<br>
[Bugfix]        Kontaktzuweisung: E-Mail Adressen von Gruppen wurden nicht dargestellt<br>
[Bugfix]        Personengruppen- und Personenzuweisung: Zuweisungsobjekte wurden mehrfach dargestellt<br>
[Bugfix]        Das Purgen in Personengruppe -> Mitglieder funktioniert nicht<br>
[Bugfix]        Dialog-Admin: Wenn man einen Wert editiert, werden Umlaute im Titel falsch dargestellt<br>
[Bugfix]        Mehrere Probleme beim der Unique Überprüfung von IP Adressen und der Objekt Titel wurden gelöst<br>
[Bugfix]        Objektbrowser zeigt unter kürzlich erstellt auch archivierte Objekte an<br>
[Bugfix]        Sortierreihenfolge für das Startdatum der Workflows ist nicht chronologisch<br>
[Bugfix]        Massenänderung für Objekttyp "Generisches Template": Benutzerdefinierte Kategorien sind nicht im Baummenü<br>
[Bugfix]        [API] Umlaute werden nicht korrekt in die Datenbank übernommen<br>
[Bugfix]        Subkategorien (unterhalb eines Ordners) funktionieren nicht auf der Übersichtsseite<br>
[Bugfix]        [AUTH] Das Recht "Unterhalb einer Lokation" funktioniert unter gewissen Umständen nicht verlässlich<br>
[Bugfix]        Upload von .phtml Dateien im Import verbieten<br>
[Bugfix]        einige Sprachkonstanten im Rechtesystem unter Verwaltung fehlen<br>
[Bugfix]        Konfigurierbare Handhabung für eine Archivierung von IP-Adressen (Kategorie Hostadresse)<br>
[Bugfix]        Objekttyp-Aktivierung wird direkt nach Anlage des OT im QCW verworfen<br>
[Bugfix]        Das default Gateway wird in der Spezifischen Kategorie IP-Liste immer dargestellt, auch wenn nicht eingetragen<br>
[Bugfix]        Kategorie Raum: Durch Template erstellte Räume erhalten im Dialog+ Raum die Werte Array, 2, Büro<br>
[Bugfix]        Doppelzuweisung Kategorie Schnittstelle<br>
[Bugfix]        Anschlüsse: Wenn man mehrere Ausgänge archiviert, werden die markierten archiviert, alle anderen Anschlüsse werden gepurged oder sind weg<br>

[Extension] Tableau de bord personnalisé entièrement revu<br>.
[Extension] Widget : Widget de rapport<br>
[Extension] Widget : Flux RSS générique<br>
[Extension] Widget : Bookmarks<br>
[Extension] Widget : Informations vitales d'un objet<br>
[Extension] Widget : Contenu web externe<br>
[Extension] Extension du widget diagramme circulaire<br>
[Extension] Widget : Notes<br>
[Extension] Widget : Convertisseur<br>
[Extension] Widget : Aperçu des licences<br>
[Extension] Widget : Calendrier<br>
[Extension] Widget : CMDB Explorer<br>
[Extension] Internationalisation : le passage à l'UTF-8 permet le support des langues non latines<br>
[Extension] Arborescence de menu Recherche & masquage des types d'objets ou catégories non utilisés<br>
[Extension] Navigation au clavier dans l'arborescence des menus<br>
[Extension] Les catégories spécifiques à l'utilisateur peuvent désormais être "multivaluées"<br>.
[Extension] Groupes dynamiques (objets)<br>
[Extension] Compatibilité avec JDisc version 2.9 et 3.0.<br>
[Extension] Un nouveau chemin de droits a été ajouté au système de droits, permettant d'autoriser des catégories dans les types d'objets<br>.
[Bugfix] Listes d'objets : les capacités sont affichées en octets<br>.
[Bugfix] Si une nouvelle entrée est saisie sous Domaine DNS dans l'adresse de l'hôte, elle n'est plus recréée<br>.
[Bugfix] Le contrôleur LDAP pour la synchronisation des utilisateurs n'utilisait pas le filtre LDAP configuré.<br>
                Dans ce contexte, la prudence est de mise lors de la synchronisation de plus de 1000 utilisateurs Active Directory. Le paramètre de configuration<br>
                MaxPageSize doit être augmenté en fonction du nombre d'utilisateurs.<br>
[Bugfix] Mémoire partagée : les noms des objets mettant à disposition les LUN ont été raccourcis<br>.
[Correction de bug] Administration/Paramètres utilisateur/Listes d'objets : Dans la catégorie armoire, les tiroirs verticaux sont présents 2x<br>.
[Bugfix] Les liens nagios host state et nagios service state ne fonctionnent pas correctement<br>.
[Bugfix] Catégorie spécifique "Routage" : l'adresse de la passerelle n'est pas affichée dans la liste<br>.
[Bugfix] Dans les listes d'objets, le champ "Objet parent" de la catégorie "Site logique" ne s'affiche pas<br>.
[Bugfix] L'aperçu avant impression a été rétabli<br>.
[Bugfix] Aperçu avant impression : diverses catégories sont affichées de manière incorrecte<br>
[Bugfix] Appartenance à un groupe de personnes : le bouton pour supprimer est absent!<br>
[Bugfix] Problème avec la passerelle par défaut dans l'adresse de l'hôte<br>.
[Bugfix] La création de nouveaux objets à partir du modèle créait également de nouveaux objets pour toutes les références qu'ils contenaient<br>.
[Bugfix] L'URL de Nagios est tronquée<br>.
[Bugfix] L'adresse réseau est affichée dans l'aperçu des ports au lieu de l'adresse de l'hôte<br>.
[Bugfix] Les attributions de licences archivées et supprimées sont comptées comme étant en cours d'utilisation<br>.
[Bugfix] Problème de tréma dans le titre des notifications<br>.
[Bugfix] isys_file_version lance une erreur de clé étrangère<br>
[Bugfix] Erreur lors de la duplication de personnes<br>
[Bugfix] Personnes : Les objets attribués ne peuvent pas être archivés<br>.
[Correction] Modèles : si l'on enregistre la catégorie Données de base dans un modèle de personne, l'état du modèle passe à "normal"<br>.
[Bugfix] Menu arborescent Vue du site : si un type d'objet n'a pas d'icône, l'icône de l'objet précédent est utilisée dans l'arborescence.<br>
[Bugfix] Dans les détails du contrat, la fin correspond à tort au début<br>.
[Bugfix] Attribuer une adresse IP depuis le réseau de couche 3 ne fonctionne pas si l'URL wiki est configurée<br>.
[Bugfix] Les connexions entre les objets sont supprimées dans certaines situations lors de l'édition de listes<br>.
[Bugfix] Hôte virtuel/commutateurs virtuels : on peut aussi sélectionner des ports archivés <br>.
[Bugfix] La valeur éditée de la liste Dialog+ devrait être sauvegardée lorsque l'on clique sur Enregistrer<br>.
[Bugfix] Catégorie Accès au partage : le champ "Objets assignés" doit s'appeler "Objet assigné"<br>.
[Bugfix] Catégorie Attribution de contrat : la date de résiliation est mal renseignée<br>.
[Bugfix] La catégorie SLA ne fonctionne pas et génère des erreurs lors de la recherche<br>.
[Bugfix] Catégorie Climatisation : renommer le champ "Débit d'air" -> qm/h en cbm/h<br>
[Bugfix] La catégorie spéciale du type d'objet "groupe d'objets" s'appelle groupe de type d'objet. Il vaudrait mieux l'appeler groupe d'objets<br>.
[Bugfix] Le délai d'attente de la session dans config.inc.php n'est plus pris en compte<br>.
[Bugfix] Templates : un objet nouvellement créé ne peut pas avoir de tréma dans son nom<br>.
[Bugfix] Impossible d'enregistrer la catégorie Assignation de service de cluster dans les types d'objets personnalisés<br>.
[Bugfix] Catégorie FC-Port : le champ de description ne peut pas contenir d'accents!<br>
[Bugfix] Édition de liste dans le port FC : les connexions aux autres ports FC ne sont pas enregistrées<br>.
[Bugfix] Édition de liste dans le port FC : impossible de sélectionner le contrôleur connecté<br>.
[Bugfix] Attribution de contacts : les adresses e-mail des groupes n'étaient pas affichées<br>.
[Bugfix] Attribution de groupes et de personnes : les objets d'attribution étaient affichés plusieurs fois<br>.
[Bugfix] La purge dans Groupe de personnes -> Membres ne fonctionne pas<br>.
[Bugfix] Dialogue Admin : lorsque l'on édite une valeur, les trémas sont mal affichés dans le titre<br>.
[Correction de plusieurs problèmes lors de la vérification unique des adresses IP et des titres d'objets<br>.
[Bugfix] Le navigateur d'objets affiche également les objets archivés sous Créé récemment<br>.
[Bugfix] L'ordre de tri pour la date de début des workflows n'est pas chronologique<br>.
[Bugfix] Modification en masse pour le type d'objet "Modèle générique" : Les catégories personnalisées ne sont pas dans le menu arborescent<br>.
[Bugfix] [API] Les trémas ne sont pas correctement repris dans la base de données<br>.
[Bugfix] Les sous-catégories (sous un dossier) ne fonctionnent pas sur la page d'aperçu<br>.
[Bugfix] [AUTH] Le droit "Sous une localisation" ne fonctionne pas de manière fiable dans certaines circonstances<br>.
[Bugfix] Interdire le téléchargement de fichiers .phtml dans l'importation<br>
[Bugfix] Certaines constantes de langue manquent dans le système de droits sous Administration<br>.
[Bugfix] Manipulation configurable pour un archivage des adresses IP (catégorie adresse d'hôte)<br>
[Bugfix] L'activation du type d'objet est rejetée directement après la création de l'OT dans le QCW<br>.
[Bugfix] La passerelle par défaut est toujours représentée dans la liste des IP de la catégorie spécifique, même si elle n'est pas saisie<br>.
[Bugfix] Catégorie Salle : Les salles créées par modèle reçoivent les valeurs Array, 2, Bureau dans Dialog+ Salle<br>.
[Bugfix] Double attribution de la catégorie Interface<br>.
[Bugfix] Connexions : Lorsque l'on archive plusieurs sorties, celles qui sont marquées sont archivées, toutes les autres connexions sont purgées ou ont disparu<br>.