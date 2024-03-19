<!-- TRANSLATED by md-translate -->
# Changelog 1.7

# Changelog 1.7

[Neue Funktion] Globale Suchfunktion über die JSON-RPC API (Methode idoit.search)<br>
[Neue Funktion] Check_MK: Export um "Sites" und "Distributed Monitoring" erweitern<br>
[Neue Funktion] Suchindizierung als Controller Script (search_index)<br>
[Neue Funktion] Controller Script zur Regenerierung sämtlicher (impliziter) Beziehungen<br>
[Neue Funktion] CSV Export von Kategorielisten<br>
[Neue Funktion] Anzeige von Wartungsfenstern im Kalender Dashboard Widget<br>
[Neue Funktion] Erweiterung der Standort Kategorie um GPS Koordinaten<br>
[Neue Funktion] Neues Feld in Kategorie Allgemein: Tag<br>
[Neue Funktion] Übernahme "Last Login User" aus h-inventory<br>
[Neue Funktion] Neue Kategorie "Letzter eingeloggter Benutzer"<br>
[Neue Funktion] Neue Kategorie VRRP/HSRP<br>
[Neue Funktion] Mehrfachzuweisung bei Dialog-Plus Feldern in Benutzerdefinierten Kategorien<br>
[Neue Funktion] Autovervollständigung in globler Suche<br>
[Verbesserung]  Check_MK: Export von verknüpften Kontakten mit Hilfe ihrer Rolle<br>
[Verbesserung]  Monitoring: Erweiterung der Export Konfiguration um spezifische Optionen<br>
[Verbesserung]  Check_MK: Clustermitglieder mit exportieren<br>
[Verbesserung]  Konfiguration des IP-Adressen exports nach Check_MK<br>
[Verbesserung]  Widget Service Konsistenzprüfung: Konfiguration zu prüfender Services<br>
[Verbesserung]  Option "Leere Werte ignorieren" verfügbar für den CSV-Import<br>
[Verbesserung]  Umbenennung Button "Importieren" beim Active Directory Server Import in "Ergebnisse Laden"<br>
[Verbesserung]  Neue Spalte "Software Art" in der Listenansicht der Kategorie Softwarezuweisung<br>
[Verbesserung]  Aktivierung und Deaktivierung der API auf Mandantenbasis<br>
[Verbesserung]  Löschen in der Report View: Keine Beziehungen<br>
[Verbesserung]  Verbessertes Stacking<br>
[Verbesserung]  Kategorie Logischer Standort nun konfigurierbar für Übersichtsseite<br>
[Verbesserung]  Kategorie E-Mail Adressen nun auch auf der Übersichtsseite verfügbar<br>
[Verbesserung]  Möglichkeit zum direkten Öffnen von duplizierten Objekten<br>
[Verbesserung]  Kategorie Zugewiesener Arbeitsplatz nun konfigurierbar für Übersichtsseite<br>
[Verbesserung]  Erweiterung der Kategorie Buchhaltung (Kostenträger, Lieferschein, Beschaffungsart, Lieferdatum)<br>
[Verbesserung]  Hersteller bedingt nun Modell in Kategorie Gerät (lok. Massenspeicher)<br>
[Verbesserung]  Entfernen der Validierungsoption "Eindeutig (pro Objekt)" bei Single-Value-Kategorien<br>
[Verbesserung]  Löschen-Schaltfläche in Objektbild löscht das Bild umgehend<br>
[Verbesserung]  Neue verbesserte globale Suche<br>
[Verbesserung]  Registry in Settings Struktur übernehmen<br>
[Verbesserung]  Eindeutige Identifizierung von H-Inventory Importen per Seriennummer über Kategorie "Data Source"<br>
[Verbesserung]  Verbesserte Performance in Objekt Listenansichten<br>
[Verbesserung]  Rechtesystem: Objekttypen per Mehrfachauswahl<br>
[Verbesserung]  Einige Verbesserungen in der IP-Adressverwaltung<br>
[Verbesserung]  Anzeige der Inventarnummer in Listenansicht Softwarezuweisung<br>
[Verbesserung]  Erschaffung einer Möglichkeit für Module sich in die globale Suche einzuklinken<br>
[Verbesserung]  Check_MK: Dynamische Hostmerkmale um eine Standard Konfiguration erweitern<br>
[Verbesserung]  Umbenennung der Kategorie "Zugewiesene Endgeräte" in "Arbeitsplatzkomponenten"<br>
[Änderung]      Achtung: Geänderte MariaDB Mindestvoraussetzung: Version 10.0<br>
[Änderung]      Achtung: Geänderte MySQL Mindestvoraussetzung: Version 5.6<br>
[Änderung]      Umstellung des MySQL PHP Backends auf MySQLi<br>
[Änderung]      Extrahierung der Api als separates Modul, Achtung: Api muss ab 1.8 separat installiert werden!<br>
[Bug]           PHP Error "strlen() expects parameter 1 to be string" in Kategorie Servicezuweisung<br>
[Bug]           Datenbankschema in Softwarezuweisung lässt sich über die Listeneditierung nicht setzen<br>
[Bug]           Vordefinierte Gewichtung für Beziehungen wird beim Erstellen von neuen Beziehungen nicht berücksichtigt<br>
[Bug]           Umlaute werden in DialogPlus-Feldern falsch dargestellt<br>
[Bug]           Ansicht der SLA-Kategorie zeigt falsche Checkboxen nach Abbruch der Editierung<br>
[Bug]           Dupliziert man ein CMDB-Explorer Profil fehlt der Knopf um dieses als Standard Profil zu definieren<br>
[Bug]           CSV Import bricht mit Fehlermeldung ab<br>
[Bug]           Versionsnummer in Kategorie Betriebssystem wird nicht gespeichert<br>
[Bug]           Attribut "Gewähltes Objekt (Freigabezugriff) führt dazu, dass der Objekt-Titel in Objekt-Liste nicht dargestellt wird.<br>
[Bug]           Rechte werden aufgespalten auf mehrere einzelne Rechte<br>
[Bug]           Fehler beim Aufruf von "Meine Workflows"<br>
[Bug]           Varianten werden in der Softwarezuweisung bei der Auswahl eines Objekts nicht geladen<br>
[Bug]           Fehler beim Duplizieren von Objekten mit mehreren Kontaktzuweisungen<br>
[Bug]           Standortzuweisungen erzeugen keine Beziehungen<br>
[Bug]           Tabellen in der QR-Code-Beschreibung werden gelöscht<br>
[Bug]           Limit für Objekttypgruppen aufheben und Menüband besser nutzbar machen<br>
[Bug]           Überarbeitete englische Übersetzung "bequest" in Kategorie "Installation" : Heisst nun "inheritance"<br>
[Bug]           Dialog-Admin: Liste im Navigationsbaum ist nicht richtig sortiert, Knoten sind schlecht benannt<br>
[Bug]           "Expand all" im Logbuch wechselt den Expandierungsstatus der Einträge, statt alle zu öffnen<br>
[Bug]           Theme lässt sich über GET Parameter ändern<br>
[Bug]           Fehlermeldung nicht erkennbar in Dialog-Fenster "Neue Beziehungsart hinzufügen"<br>
[Bug]           Hinweis auf ungültige Lizenz trotz erfolgreicher Aktivierung<br>
[Bug]           Objekt-Filter in der Konfiguration des CMDB-Explorer Profils hat keine Auswirkung<br>
[Bug]           Umbenennung des Wertes für "Häufigkeit" in "Wiederholung" (Workflow Typen)<br>
[Bug]           Report-View "CMDB-Status Änderungen" stellt nicht alle Änderungen dar<br>
[Bug]           Reports mit benutzerdefinierten Kategorien geben Objekte fälschlicherweise mehrfach aus<br>
[Bug]           Sortierung der Objekttypen-Auswahl in der Konfiguration einer benutzerdefinierten Kategorie ist nicht alphabetisch<br>
[Bug]           Keine Kategorie-Auswahl möglich mit DropDown-Liste nach Deselektierung von "Alle"<br>
[Bug]           Beschreibungsfelder sind immer bearbeitbar, wenn WYSIWYG Editoren deaktiviert sind<br>
[Bug]           Report Manager: Bedingungen eines Reports werden nicht richtig geladen sobald man einen Teil der Bedingung entfernt und speichert.<br>

[Nouvelle fonction] Fonction de recherche globale via l'API JSON-RPC (méthode idoit.search)<br>
[Nouvelle fonction] Check_MK : Extension de l'exportation aux "sites" et à la "surveillance distribuée"<br>.
[Nouvelle fonction] Indexation de recherche comme script contrôleur (search_index)<br>
[Nouvelle fonction] Script contrôleur pour régénérer toutes les relations (implicites)<br>
[Nouvelle fonction] Exportation CSV des listes de catégories<br>
[Nouvelle fonction] Affichage des fenêtres de maintenance dans le widget du tableau de bord du calendrier<br>
[Nouvelle fonction] Ajout de coordonnées GPS dans la catégorie Emplacement<br>
[Nouvelle fonction] Nouveau champ dans la catégorie Général : Tag<br>
[Nouvelle fonction] Reprise de "Last Login User" de h-inventory<br>
[Nouvelle fonction] Nouvelle catégorie "Dernier utilisateur connecté"<br>
[Nouvelle fonction] Nouvelle catégorie VRRP/HSRP<br>
[Nouvelle fonction] Attribution multiple pour les champs Dialog-Plus dans les catégories personnalisées<br>.
[Nouvelle fonction] Auto-complétion dans la recherche globale<br>.
[Amélioration] Check_MK : Exportation des contacts liés à l'aide de leur rôle<br>
[Amélioration] Monitoring : Extension de la configuration d'exportation avec des options spécifiques<br>.
[Amélioration] Check_MK : exporter les membres du cluster avec<br>
[Amélioration] Configuration de l'exportation d'adresses IP vers Check_MK<br>
[Amélioration] Widget Vérification de la cohérence des services : configuration des services à vérifier<br>
[Amélioration] Option "Ignorer les valeurs vides" disponible pour l'importation CSV<br>
[Amélioration] Bouton "Importer" renommé "Charger les résultats"<br> lors de l'importation du serveur Active Directory
[Amélioration] Nouvelle colonne "Type de logiciel" dans la vue en liste de la catégorie Attribution de logiciel<br>
[Amélioration] Activation et désactivation de l'API par mandant<br>
[Amélioration] Suppression dans la vue des rapports : pas de relations<br>
[Amélioration] Amélioration de l'empilage<br>
[Amélioration] Catégorie Site logique désormais configurable pour la page d'aperçu<br>
[Amélioration] Catégorie Adresses e-mail désormais disponible sur la page de résumé<br>
[Amélioration] Possibilité d'ouvrir directement les objets dupliqués<br>
[Amélioration] Catégorie Poste de travail attribué désormais configurable pour la page d'aperçu<br>
[Amélioration] Extension de la catégorie Comptabilité (support de coûts, bon de livraison, type d'approvisionnement, date de livraison)<br>
[Amélioration] Le fabricant conditionne désormais le modèle dans la catégorie Périphérique (stockage de masse local)<br>
[Amélioration] Suppression de l'option de validation "Unique (par objet)" pour les catégories à valeur unique<br>.
[Amélioration] Bouton de suppression dans l'image de l'objet supprime immédiatement l'image<br>.
[Amélioration] Nouvelle recherche globale améliorée<br>
[Amélioration] Reprise du registre dans la structure Settings<br>
[Amélioration] Identification univoque des importations H-Inventory par numéro de série via la catégorie "Data Source"<br>
[Amélioration] Amélioration des performances dans les vues de listes d'objets<br>.
[Amélioration] Système de droits : types d'objets par sélection multiple<br>
[Amélioration] Quelques améliorations dans la gestion des adresses IP<br>.
[Amélioration] Affichage du numéro d'inventaire dans la vue liste Attribution de logiciel<br>
[Amélioration] Création d'une possibilité pour les modules de se connecter à la recherche globale<br>.
[Amélioration] Check_MK : Ajouter une configuration par défaut aux caractéristiques dynamiques de l'hôte<br>.
[Amélioration] Renommer la catégorie "Terminaux attribués" en "Composants du poste de travail"<br>.
[modification] Attention : modification de la configuration minimale requise pour MariaDB : version 10.0<br>
[Modification] Attention : modification de la configuration minimale requise pour MySQL : version 5.6<br>
[Modification] Passage du backend MySQL PHP à MySQLi<br>
[Changement] Extraction de l'api en tant que module séparé, attention : l'api doit être installé séparément à partir de la version 1.8!<br>
[Bug] Erreur PHP "strlen() expects parameter 1 to be string" dans la catégorie Allocation de service<br>.
[Bug] Impossible de définir le schéma de la base de données dans l'attribution de logiciel via l'édition de liste<br>
[Bug] Le poids prédéfini des relations n'est pas pris en compte lors de la création de nouvelles relations<br>.
[Bug] Les trémas sont mal affichés dans les champs DialogPlus<br>.
[Bug] La vue de la catégorie SLA affiche des cases à cocher incorrectes après l'interruption de l'édition<br>.
[Bug] Si on duplique un profil CMDB-Explorer, il manque le bouton pour le définir comme profil par défaut<br>.
[Bug] L'importation CSV s'arrête avec un message d'erreur<br>.
[Bug] Le numéro de version dans la catégorie Système d'exploitation n'est pas enregistré<br>.
[Bug] L'attribut "Objet sélectionné (accès partagé)" ne permet pas d'afficher le titre de l'objet dans la liste des objets<br>.
[Bug] Les droits sont divisés en plusieurs droits distincts<br>.
[Bug] Erreur lors de l'appel de "Mes workflows"<br>.
[Bug] Les variantes ne sont pas chargées dans l'attribution du logiciel lors de la sélection d'un objet<br>.
[Bug] Erreur lors de la duplication d'objets avec plusieurs attributions de contacts<br>.
[Bug] Les assignations de site ne créent pas de relations<br>.
[Bug] Suppression des tableaux dans la description du code QR<br>.
[Bug] Suppression de la limite pour les groupes de types d'objets et meilleure utilisation du ruban<br>.
[Bug] Révision de la traduction anglaise "bequest" dans la catégorie "Installation" : se nomme maintenant "inheritance"<br>.
[Bug] Dialogue-Admin : la liste dans l'arbre de navigation n'est pas correctement triée, les nœuds sont mal nommés<br>.
[Bug] "Expand all" dans le journal change l'état d'expansion des entrées au lieu de les ouvrir toutes<br>.
[Bug] Le thème peut être modifié via les paramètres GET<br>.
[Bug] Message d'erreur non reconnaissable dans la fenêtre de dialogue "Ajouter un nouveau type de relation"<br>
[Bug] Indication de licence non valide malgré une activation réussie<br>
[Bug] Le filtre d'objet dans la configuration du profil CMDB-Explorer n'a pas d'effet<br>
[Bug] Changement du nom de la valeur "Fréquence" en "Répétition" (types de workflow)<br>
[Bug] La vue du rapport "Modifications de l'état de la CMDB" n'affiche pas toutes les modifications<br>.
[Bug] Les rapports avec des catégories définies par l'utilisateur renvoient par erreur des objets plusieurs fois<br>.
[Bug] Le tri de la sélection du type d'objet dans la configuration d'une catégorie personnalisée n'est pas alphabétique<br>.
[Bug] Impossible de sélectionner une catégorie avec une liste déroulante après avoir désélectionné "Tout"<br>.
[Bug] Les champs de description sont toujours modifiables lorsque les éditeurs WYSIWYG sont désactivés<br>.
[Bug] Report Manager : les conditions d'un rapport ne sont pas chargées correctement dès que l'on supprime une partie de la condition et qu'on l'enregistre.<br>