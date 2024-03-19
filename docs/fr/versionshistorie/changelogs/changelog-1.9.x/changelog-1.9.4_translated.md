<!-- TRANSLATED by md-translate -->
# Changelog 1.9.4

# Changelog 1.9.4

[Verbesserung] Neue TTS Schnittstelle zu Zammad<br>
[Verbesserung] Massenlöschung in der Massenänderung<br>
[Verbesserung] Das Check_MK transfer Skript erzeugt Änderungen in Check_MK 1.4<br>
[Verbesserung] Anzeige von "Layer-3 Netzen" in Listenansicht<br>
[Bug] Ändern des Passworts für das Admin-Center im Admin-Center selbst führt zu fehlerhafter Darstellung von Passwörtern<br>
[Bug] Kategorie "Gruppenmitgliedschaft": In der Suchleiste wird der Objekttyp-Filter anstatt der Kategorie-Filter verwendet<br>
[Bug] idoit.search liefert keine Ergebnisse<br>
[Bug] OCS-Import: Bei bestimmten Hostadressen wurde eine falsche Netzadresse kalkuliert<br>
[Bug] Listeneditierung: Validierung in Kategorie "Hostadresse" schlägt fehl, obwohl es FQDN nur einmal global gibt<br>
[Bug] Beim ausführen eines Reports wird eine Datenbankfehlermeldung ausgegeben wenn die Attribute "Anschlussart" und "Verbunden mit" aus der Kategorie "Anschlüsse" verwendet werden.<br>
[Bug] Falsche Validierung beim Speichern von Kategorien in der Listeneditierung fordert Ganzzahl<br>
[Bug] Schaltfläche "Neues Recht" in Kategorie "Rechtevergabe" unter "Personengruppen" hat keine Funktion<br>
[Bug] Falscher Standard-Filter in Objektlisten ausgewählt<br>
[Bug] Patchlevel wird in Kategorie "Softwarezuweisung" nicht angezeigt<br>
[Bug] Versionen: Patchlevel wird bei "Installationen" nicht angezeigt<br>
[Bug] Performanceprobleme in der Listeneditierung<br>
[Bug] Kategorie "Monitoring" nicht im Abfrage-Editor verfügbar<br>
[Bug] JDISC: Clusterdienstzuweisungen werden nicht komplett importiert<br>
[Bug] CheckMK: Hosttags UTF8/ASCII Fehlermeldung in CheckMK-Instanz<br>
[Bug] Sortierung nach Objektanzahl in Listenansicht der Objekttypen inkorrekt<br>
[Bug] Allgemeine Einstellungen werden nicht korrekt angezeigt<br>
[Bug] Mehrfache Objekt Browser in einzelner Kategorie führen zu überschriebenen Werten<br>
[Bug] Anzeige eines Bindestrichs in der Objektliste bei mehrfachauswahl Dialog+feldern<br>
[Bug] CMDB-Explorer Personengruppenmitgliedschaften werden nicht aktualisiert<br>
[Bug] Einträge im Dialog-Admin können nicht gespeichert werden wenn der Name nicht geändert wird<br>
[Bug] Hostadresse-Alias kann nicht gelöscht werden<br>
[Bug] JDISC Import: IP-Adressen werden nicht korrekt aktualisiert<br>
[Bug] Filtern bei Reportausgaben mit den Buchstaben "B", "N", "P" und "S" nicht möglich<br>
[Bug] Objektbrowser: Der "Alle" Auswahl Button fehlt<br>
[Bug] Sortierung der Verfügbaren Slots in einem Chassis fehlerhaft<br>
[Bug] Benutzerdefinierte Kategorien können mit Dialog+ Feldtypen in der Listenansicht der Objekttypen nicht sortiert werden<br>
[Bug] Objektliste springt auf anderen Objekttypen wenn mehr als 50 Objekte angezeigt werden sollen<br>
[Bug] Mouseover-Text für Löschen-Button in Layer 3-Netz IP-Liste wird falsch dargestellt<br>
[Bug] In workflows wird statt einer Url die IP-Adresse der I-Doit installation eingetragen<br>
[Bug] Sortierung nach CMDB-Status in Objektlisten nur möglich wenn es an letzter Stelle steht<br>
[Bug] Bei Benutzerdefinierte Kategorien werden immer Logs aus dem Rechtesystem geschrieben.<br>
[Bug] Beim Login wird PHP-Fehlermeldung zu LDAP angezeigt<br>
[Bug] Wechsel von statischer auf dynamische Objektgruppe schlägt fehl<br>
[Bug] Modell-Hersteller kann nicht via Dialog-Admin geändert werden<br>
[Bug] CSV Import: Nicht möglich, zugewiesene Objekte über spezifische Kategorie "Chassis" hinzuzufügen<br>
[Bug] Benachrichtigungen an Kontakten mit zugewiesener Rolle nicht möglich<br>
[Bug] Service Logbuch: Option "Gruppieren nach" liefert falsche Ergebnisse<br>
[Bug] CSV-Import: Objekte mit gleichen Objekttitel in verschieden Objekttypen werden nicht korrekt zugewiesen<br>
[Bug] Archivierte Räumlich zugeordnete Objekte werden in der Listenansicht angezeigt<br>
[Bug] Chassis in einem Rack fehlerhafte Darstellung in der Raumansicht<br>
[Bug] Verbinden von Anschlüssen über "Einzelnen Anschluss verbinden" nicht möglich<br>
[Bug] Verkabelungsbrowser kann nicht über Recht "Kategorien in Objekttyp" verrechtet werden<br>
[Bug] CSV Import: Spezifische Unter-Kategorie "Installation" wurden nicht alle Eltern-Kategorien aufgelistet.<br>
[Bug] Verbinden von Anschlüssen über den Button in der Übersicht der Anschlüsse nicht möglich.<br>
[Bug] Im Rechtesystem werden bestimmte Rechte übernommen, wenn man die Bedingung ändert<br>
[Bug] Kein Zugriff auf "Rechtesystem zurücksetzen" nach Installation mit install.sh<br>
[Bug] Kategorie "Ports": Titel mit Überlänge werden abgeschnitten und können nicht mehr gefiltert werden<br>
[Bug] Einträge im Dialog-Admin mit Sonderzeichen können nicht editiert werden<br>
[Bug] Sync von LDAP-Daten archiviert Benutzer "admin"<br>
[Bug] Objekte werden mit einer falschen Sperrzeit aufgelistet.<br>
[Bug] Leerer Objekttitel bei Personen-Objekten aus dem CSV-Import unter bestimmten Bedingungen<br>
[Bug] Fehlendes Recht Einzelverkabelungen führt in eine Fehlermeldungs-Loop<br>
[Bug] Fehlerhafte URL beim Abmelden aus der Raumplanung<br>
[Bug] Horizontale Scrollleiste in Kategorie "Rechnung" fehlt<br>
[Bug] Im QCW werden bei der Suggestion Search Ordnerkategorien (Netzwerk) nicht angezeigt<br>
[Bug] Verzögerungseinstellung unter Quickinfo funktioniert nicht<br>
[Bug] Attribut "Kontaktzuweisung" gibt in Benachrichtigungen lediglich die ID aus<br>
[Bug] Angegebenes Upload-Verzeichnis wird nicht berücksichtigt<br>
[Bug] Links verweisen auf das Objekt und nicht auf den Link<br>
[Bug] Beziehungen in der Kategorie "Prüfung" werden doppelt vergeben<br>
[Bug] CSV-Import: DBMS nicht verfügbar<br>
[Bug] [open] Quickinfo wird beim Drüberfahren nicht angezeigt<br>
[Bug] Link mit Fragezeichen im AdminCenter führt zu Verlust der Menüleiste nach erneutem Login<br>
[Bug] Dialog-Admin: Benutzerdefinierte Attribute werden nicht in Objektliste angezeigt<br>
[Bug] Setting-Bezeichnung "maxlengths" bei System-wide setting unklar<br>
[Bug] JDISC-Option "Erstellen" setzt die bereits verwendeten Custom Identifier nicht auf "Obsolete"<br>
[Bug] Import von mehreren IP-Adressen über den CSV-Import nicht möglich<br>

[Amélioration] Nouvelle interface TTS vers Zammad<br>
[Amélioration] Suppression en masse dans les modifications en masse<br>
[Amélioration] Le script Check_MK transfer génère des modifications dans Check_MK 1.4<br>
[Amélioration] Affichage des "réseaux de couche 3" dans la vue en liste<br>.
[Bug] La modification du mot de passe pour le centre d'administration dans le centre d'administration lui-même entraîne un affichage incorrect des mots de passe<br>.
[Bug] Catégorie "Membre du groupe" : dans la barre de recherche, le filtre de type d'objet est utilisé au lieu du filtre de catégorie<br>.
[Bug] idoit.search ne donne aucun résultat<br>
[Bug] Importation OCS : pour certaines adresses d'hôtes, une adresse réseau erronée était calculée<br>.
[Bug] Édition de liste : la validation dans la catégorie "adresse hôte" échoue alors qu'il n'y a qu'un seul FQDN global<br>.
[Bug] Un message d'erreur de base de données est généré lors de l'exécution d'un rapport si les attributs "Type de connexion" et "Connecté à" sont utilisés dans la catégorie "Connexions".<br>
[Bug] Mauvaise validation lors de l'enregistrement des catégories dans l'édition de liste demande un nombre entier<br>.
[Bug] Le bouton "Nouveau droit" dans la catégorie "Attribution de droits" sous "Groupes de personnes" n'a pas de fonction<br>.
[Bug] Filtre par défaut incorrect sélectionné dans les listes d'objets<br>.
[Bug] Le niveau de patch n'est pas affiché dans la catégorie "Attribution de logiciels"<br>.
[Bug] Versions : Le niveau de patch n'est pas affiché dans "Installations"<br>
[Bug] Problèmes de performance dans l'édition de listes<br>.
[Bug] Catégorie "Monitoring" non disponible dans l'éditeur de requêtes<br>
[Bug] JDISC : les assignations de service de cluster ne sont pas importées complètement<br>
[Bug] CheckMK : message d'erreur UTF8/ASCII des tags d'hôtes dans l'instance CheckMK<br>
[Bug] Tri incorrect par nombre d'objets dans la liste des types d'objets<br>.
[Bug] Les paramètres généraux ne s'affichent pas correctement<br>.
[Bug] Plusieurs navigateurs d'objets dans une seule catégorie entraînent des valeurs écrasées<br>.
[Bug] Affichage d'un tiret dans la liste des objets lors d'une sélection multiple dialogue+champs<br>.
[Bug] Les appartenances à des groupes de personnes ne sont pas mises à jour dans l'explorateur CMDB<br>.
[Bug] Impossible d'enregistrer les entrées dans l'Admin du dialogue si le nom n'est pas modifié<br>.
[Bug] Impossible de supprimer l'alias de l'adresse hôte<br>.
[Bug] JDISC Import : les adresses IP ne sont pas correctement mises à jour<br>.
[Bug] Impossible de filtrer les sorties de rapports avec les lettres "B", "N", "P" et "S"<br>.
[Bug] Navigateur d'objets : Le bouton de sélection "Tout" est manquant<br>.
[Bug] Erreur dans le tri des emplacements disponibles dans un châssis<br>.
[Bug] Les catégories définies par l'utilisateur ne peuvent pas être triées avec Dialog+ Types de champs dans la vue en liste des types d'objets<br>.
[Bug] La liste des objets passe à un autre type d'objet si plus de 50 objets doivent être affichés<br>.
[Bug] Le texte au survol de la souris pour le bouton Supprimer dans la liste IP du réseau de niveau 3 est mal affiché<br>.
[Bug] Dans les workflows, l'adresse IP de l'installation I-Doit est saisie au lieu de l'url<br>.
[Bug] Le tri par statut CMDB dans les listes d'objets n'est possible que s'il est en dernière position<br>.
[Bug] Les catégories personnalisées écrivent toujours les logs du système de droits <br>.
[Bug] Un message d'erreur PHP concernant LDAP s'affiche lors de la connexion<br>.
[Bug] Le passage d'un groupe d'objets statique à un groupe d'objets dynamique échoue<br>.
[Bug] Le fabricant du modèle ne peut pas être modifié via le dialogue Admin<br>.
[Bug] Importation CSV : impossible d'ajouter des objets attribués via la catégorie spécifique "Châssis"<br>.
[Bug] Impossible d'envoyer des notifications aux contacts avec un rôle attribué<br>.
[Bug] Journal de bord du service : l'option "Regrouper par" donne des résultats erronés<br>
[Bug] Importation CSV : les objets ayant le même titre dans différents types d'objets ne sont pas correctement attribués<br>.
[Bug] Les objets archivés affectés à des locaux sont affichés dans la vue en liste<br>.
[Bug] Affichage incorrect des châssis dans un rack dans la vue spatiale<br>.
[Bug] Impossible de connecter des ports via "Connecter un port unique"<br>.
[Bug] Le navigateur de câblage ne peut pas être distribué via le droit "Catégories dans le type d'objet"<br>.
[Bug] Importation CSV : la sous-catégorie spécifique "Installation" ne listait pas toutes les catégories parentes <br>.
[Bug] Impossible de relier des connexions via le bouton dans l'aperçu des connexions.<br>
[Bug] Dans le système de droits, certains droits sont repris si on change la condition<br>.
[Bug] Pas d'accès à "Réinitialiser le système de droits" après l'installation avec install.sh<br>
[Bug] Catégorie "Ports" : Les titres trop longs sont coupés et ne peuvent plus être filtrés<br>.
[Bug] Impossible d'éditer des entrées dans le dialogue Admin avec des caractères spéciaux<br>.
[Bug] La synchronisation des données LDAP archive l'utilisateur "admin"<br>.
[Bug] Les objets sont listés avec un délai d'attente incorrect <br>.
[Bug] Titre d'objet vide pour les objets personnes de l'importation CSV dans certaines conditions<br>.
[Bug] L'absence de droit de câblage individuel entraîne une boucle de message d'erreur<br>.
[Bug] Erreur d'URL lors de la déconnexion de l'aménagement du territoire<br>.
[Bug] Absence de barre de défilement horizontale dans la catégorie "Facture"<br>.
[Bug] Dans le QCW, les catégories de dossiers (réseau) ne sont pas affichées lors de la suggestion de recherche<br>.
[Bug] Le réglage du délai sous l'info-bulle ne fonctionne pas<br>.
[Bug] L'attribut "Attribution de contact" ne renvoie que l'ID dans les notifications<br>.
[Bug] Le répertoire de téléchargement indiqué n'est pas pris en compte<br>.
[Bug] Les liens pointent vers l'objet et non vers le lien<br>.
[Bug] Les relations dans la catégorie "examen" sont attribuées deux fois<br>.
[Bug] Importation CSV : DBMS non disponible<br>
[Bug] [open] L'info-bulle ne s'affiche pas en passant dessus<br>
[Bug] Un lien avec un point d'interrogation dans AdminCenter entraîne la perte de la barre de menu après une nouvelle connexion<br>.
[Bug] Dialogue Admin : les attributs définis par l'utilisateur ne sont pas affichés dans la liste des objets<br>.
[Bug] Le nom du paramètre "maxlengths" n'est pas clair dans le cas d'un paramètre global du système<br>.
[Bug] L'option "Créer" du JDISC ne rend pas obsolètes les identifiants personnalisés déjà utilisés <br>.
[Bug] Impossible d'importer plusieurs adresses IP via l'importation CSV<br>.