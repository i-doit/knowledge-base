<!-- TRANSLATED by md-translate -->
# Changelog 1.9

# Changelog 1.9

[Verbesserung]  Anzeige von Spalte Version in Kategorie Installation<br>
[Verbesserung]  Der Regler für anpassbare Spaltenbreiten in Objektlisten wurde verbessert<br>
[Verbesserung]  Option zur Handhabung von Leerzeichen in exportierten Check_MK Tags<br>
[Verbesserung]  Frei konfigurierbarer Willkommenstext auf dem Login Screen (Verwaltung -> Allgemeine Einstellungen)<br>
[Verbesserung]  OCS Import: Ignorierte Software wird nicht mehr importiert<br>
[Verbesserung]  Konfiguration zur Wahl der i-doit Sprache über Browsersprache<br>
[Verbesserung]  Verbesserung der Verschlüsselungsfunktionen beim Speichern von Passwörtern in Konfigurationen und der Dokumentation (auf Basis mcrypt)<br>
[Verbesserung]  Popups passen sich automatisch an die Bildschirmgröße an<br>
[Verbesserung]  Konfiguration zum automatischen Starten von Deep Search nach Quick Search<br>
[Verbesserung]  Automatischer Fokus auf das Filterfeld in den Objektlisten<br>
[Verbesserung]  Button zum Entfernen eines Filters in den Objektlisten<br>
[Verbesserung]  Autovervollständigung bei der Suche in den Objektlisten<br>
[Verbesserung]  Auslagerung von Informationen zu fehlenden Rechten in neues Log<br>
[Verbesserung]  Filtern nach CMDB-Status per Drop-Down in Objektlisten<br>
[Verbesserung]  Neue Kategorie "Kabelverbindung"<br>
[Verbesserung]  Erweiterung der DNS Informationen in der Kategorie Hostadresse<br>
[Verbesserung]  Erweiterung der Kategorie Hostadresse um Netzbereiche<br>
[Verbesserung]  Neuer Objekttyp und Kategorien: Netzbereich<br>
[Verbesserung]  Neue Funktion in IP Listen: Bereiche / Zonen<br>
[Verbesserung]  Oberfläche zur Massenverkabelung in Kategorie Anschlüsse<br>
[Verbesserung]  Anschlüsse Kategorie: Entkabelungsfunktion<br>
[Verbesserung]  Vererbung von Breiten- und Längengrad in der Kategorie Standort<br>
[Verbesserung]  Verwendung von voranstehenden Nullen im Counter-Platzhalter in Objekt-Titel / Inventarnummer<br>
[Verbesserung]  Erweiterte Garantieberechnung in der Kategorie Buchhaltung<br>
[Verbesserung]  OCS-Import: Aufnahme der CPU-Kerne zu den importierten Daten<br>
[Verbesserung]  PHP 7.0 Kompatibilität<br>
[Änderung]      Admin-Center: Umbenennung der Module in "Add-ons"<br>
[Änderung]      Überflüssige DropDown-Liste in Kategorie-Dialog-Listen unter Dialog-Admin<br>
[Änderung]      Check_MK: Menüpunkt für Export wird in den Modul-bereich verschoben<br>
[Änderung]      Nagios: Menüpunkt für Export wird in den Modul-bereich verschoben<br>
[Bug]           Hostmerkmale (dynamisch) unter Check_MK passt sich dem Browserfenster nicht dynamisch an<br>
[Bug]           Objekttyp wird trotz Abbrechen erstellt.<br>
[Bug]           OPEN: Druckansicht einer Übersichtsseite endet mit PHP-Fehler<br>
[Bug]           Kabellänge wird in Listeneditierung falsch umgerechnet<br>
[Bug]           Suche Index muss als Zeichensatz utf8_unicode_ci haben<br>
[Bug]           Lizenzen: Nach Eintragung eines Preises kann dieser nicht mehr gelöscht werden<br>
[Bug]           Abfrage nach php-mysqli schlägt fehl<br>
[Bug]           Identifikationsfelder des CSV Import funktionieren nicht über den Controller<br>
[Bug]           JDisc-Import: Kapazität der Festplatten unter der Kategorie "Gerät" wird nicht aktualisiert.<br>
[Bug]           JDisc-Import: Beim Modus "Überschreiben" werden Objekte vom Typ "Kabel" immer wieder neu erzeugt.<br>
[Bug]           Button zum Leeren des Filters von Objektlisten wird nicht in allen Browsern angezeigt<br>
[Bug]           CMDB Explorer Algorithmus zeigt Softwareinstanzen nicht an<br>
[Bug]           Erzeugung eines Anschlusses ohne die Auswahl einer Verbindung erzeugt bereits ein Kabel<br>
[Bug]           Baseline Design Fehler für Selects innerhalb einer Input Group<br>
[Bug]           Verwendung von mehr als einem Beschreibungsfeld im Export eines Reports nicht möglich<br>
[Bug]           Deep Search findet keine mit Bindestrich getrennten Begriffe<br>
[Bug]           Report-Manager: CSV- und TXT-Exporte geben leere Reports aus<br>
[Bug]           Highlighting in Suche wird mit HTML-Code ausgegeben<br>
[Bug]           Suche findet fälschlicherweise Logbuch Einträge<br>
[Bug]           Kategorie "Vertragszuweisung" lässt sich nicht in der Übersichtsseite anzeigen<br>
[Bug]           Recht Bearbeiten auf "Reports in Kategorie" erlaubt dem User nicht, einen Report aus der Kategorie zu bearbeiten.<br>
[Bug]           Anlage eines Objektes mit der Kategorie "CPU" erstellt automatisch einen Eintrag in dieser Kategorie<br>
[Bug]           JDisc-Import: Logbucheinträge werden fälschlicherweise angelegt<br>
[Bug]           Objektzähler im AdminCenter nicht komplett sichtbar<br>
[Bug]           Logbuch: Änderungen an objektspezifischen Kategorien zeigt im Anschluss die falsche Kategorie<br>
[Bug]           Datumsformat in Listen im englischen Format trotz deutscher Einstellungen<br>
[Bug]           Objektlisten Widget löst Einträge nicht richtig auf<br>
[Bug]           Benachrichtigungen werden nicht verschickt, wenn der Empfänger nicht vom Typ Personen/Personengruppe ist<br>
[Bug]           SYSID kann nicht über den CSV-Import aktualisiert werden<br>
[Bug]           Textdarstellung unleserlich im Dialog für das Löschen von Objekten in Kategorie Schrank<br>
[Bug]           Rechtschreibfehler in der OCS-Konfiguration<br>
[Bug]           Rechtschreibfehler in Kategorie "PDU"<br>
[Bug]           Button "Hinzufügen/Entfernen" verschwindet nach Klick auf "Übernehmen" im Objektbrowser<br>
[Bug]           Spezifische Kategorien werden bei verknüpften Objekten im Report Manager nicht angezeigt<br>
[Bug]           Rechtesystem zurücksetzen funktioniert nicht mit verschlüsseltem Passwort<br>
[Bug]           Datumsfelder in benutzerdefinierten Kategorien nicht löschbar<br>
[Bug]           CSV-Export: Benutzerdefinierte Informationen werden von HTML-Tags umgeben<br>
[Bug]           Fehlender Status Dropdown in Dialog-Admin<br>
[Bug]           Breiten- und Längengrad können nicht über den CSV-Import importiert werden<br>
[Bug]           Bedingungen auf das Attribut "Einschub" werden im Report-Manager nicht korrekt umgesetzt<br>
[Bug]           Entfernen einer Slotzuweisung lässt einen Eintrag in "räumlich zugeordnete Objekte" zurück<br>
[Bug]           Attributsauswahl für Kategorie "Betriebssystem" im Report-Manager leer<br>
[Bug]           Suchindex: Memory Limit Fehlermeldung bei Neugenerierung des Suchindexes bei größeren Datenbanken<br>
[Bug]           Raid-Kapazität in Speichersystemen wird immer in GB dargestellt.<br>
[Bug]           Felder in der LDAP-Konfiguration beim Aufruf der Bearbeitungsansicht leer<br>
[Bug]           Falsche Logbuch-Informationen zu Schränken, wenn ein Objekt umpositioniert wird.<br>
[Bug]           CSV-Import: Feld "Objekt-Beziehung (Mehrere Objekte)" füllt Feld nicht und erzeugt keine Beziehung<br>
[Bug]           CSV-Import: Feld "Objekt-Beziehung(Ein Objekt)" erzeugt keine Beziehung<br>
[Bug]           Pflichtfelddefinition für das Attribut "Standort" funktioniert nicht<br>
[Bug]           Falsch erzeugtes SQL bei der verwendung von IS NULL/IS NOT NULL im Report Manager<br>
[Bug]           Als Service Komponenten können im Report Manager nur Infrastruktur-Objekte gewählt werden<br>
[Bug]           Beispiel für das Datumsformat entspricht nicht dem tatsächlichen Datumsformat<br>
[Bug]           Bearbeiten der Kategorie "Service" über die Listeneditierung bewirkt, dass der Inhalt von "Servicebeschreibung intern" auf das Feld "Servicebeschreibung extern" übertragen wird<br>
[Bug]           Überflüssige Einträge in den Experteneinstellungen<br>
[Bug]           Kategorie "DHCP" fehlt in der Listeneditierung<br>
[Bug]           Kategorie "DHCP" fehlt im CSV-Import<br>
[Bug]           Fehlerhafte Darstellung von Icons im Listenbrowser<br>
[Bug]           Default-Template übernimmt beim JDisc-Import nur Import-Kategorien<br>
[Bug]           Fehler in der Kategorie "Objektvitalität", wenn kein Verbrauch vorliegt<br>
[Bug]           Objekttyp-Auswahl bei der Verknüpfung einer Zuweisung im CSV-Import hat keine Auswirkung<br>
[Bug]           Attribut "Letzte Änderung" ist im Abfrage-Editor nicht als Bedingung auswählbar<br>
[Bug]           Im Report kann kein Attribut zur Kategorie "Räumlich zugeordnete Objekte" unter den Bedingungen ausgewählt werden<br>
[Bug]           Import der Geschwindigkeit eines Interfaces über JDisc verwendet inkorrekte Umrechnung<br>
[Bug]           Darstellung des zugewiesenen Netzes erlaubt es nicht zu lesen, welches Netz ausgewählt wurde<br>
[Bug]           Sortierung der Spalten in Report-Ergebnissen nicht mehr möglich<br>
[Bug]           Deaktivierte Quickinfo wird trotzdem bei Standort-Pfad angezeigt<br>
[Bug]           Auswahl der Objekte im Objektbrowser durch die Schaltfläche "Seite" nicht möglich<br>
[Bug]           Einstellung zum CMDB-Status im JDisc-Profil hat keine Auswirkungen beim Import über den Controller<br>
[Bug]           CSV-Export eines Reports mit Umbrüchen enthält ebenfalls die Umbrüche<br>
[Bug]           Seitennavigation in Objekt-Browsern funktioniert erst, nachdem vertikal gescrollt wurde<br>
[Bug]           Icon zur Bearbeitung der Listenansicht wird nicht ausgeblendet, wenn der User nicht über die Rechte verfügt<br>
[Bug]           Standort kann nicht gelöst werden<br>
[Bug]           Filtern nach IP-Adressen nicht möglich<br>
[Bug]           Übersetzung der Sprachkonstante erfolgt nicht im Menübaum der Verwaltung<br>
[Bug]           Vertragsbeginn und Vertragsende stehen nicht in der Auswahl zur Darstellung in den Objekt-Listen<br>
[Bug]           Bei der Verwendung von Informationen aus mehr als einer Multi-Value-Kategorie in der Listenansicht werden die Attribute wiederholt dargestellt<br>
[Bug]           Fehler, wenn beim Report eine Bedingung auf das Attribut "CMDB-Status" verwendet wird<br>
[Bug]           Lupen-Icon zur Auswahl der verknüpften Attribute im Report-Manager fehlt<br>
[Bug]           Objektlink kann nicht zum öffnen der Objektdetails verwendet werden, wenn der Klick auf die Zeile deaktiviert ist.<br>
[Bug]           Ja/Nein-Feld aus benutzerdefinierten Kategorien mit Pflichtfelddefinition führt auf Übersichtsseite immer dazu, dass der Datensatz nicht gespeichert werden kann.<br>
[Bug]           Ja/Nein-Felder können im Report-Manager nicht sauber abgefragt werden<br>
[Bug]           Informationen der Kategorie "Datensicherung" werden nicht auf der Übersichtsseite gespeichert, wenn Pflichtfelder konfiguriert wurden<br>
[Bug]           Druckausgabe bei gefilterten Listen inkorrekt<br>
[Bug]           Fehler beim Import einer CSV-Datei ohne Identifizierungsfeld<br>
[Bug]           Experteneinstellung "auth.use-in-location-tree" deaktiviert für alle User die Root-Lokation im Standort-Browser<br>
[Bug]           Fehler beim Login eines LDAP-Users, wenn dieser keine Rechte besitzt<br>
[Bug]           Attribut "Interface" in einem Anschluss wird geleert, wenn der Anschluss über den Verkabelungsimport importiert wird.<br>
[Bug]           Attribute "DNS Domäne" und "FQDN" können im Report-Manager nicht ausgegeben werden<br>
[Bug]           Attribut "Standort" wird mit aktivem my-doit Statusfilter in Objekt-Listen nicht dargestellt.<br>
[Bug]           Auswahl von Listener im Report Manager führt zu Fehlermeldung<br>
[Bug]           SMTP Passwort über Entwicklertools auslesbar<br>
[Bug]           Kategorie "Verbindung" enthält falsche Angaben<br>
[Bug]           Übersetzung von Sprachkonstanten für CMDB-Status erfolgt nicht mit eigenen Übersetzungen<br>
[Bug]           Nur das erste Report-Objekt in der Liste wird bei der Ausführung in einer Benachrichtigung versandt<br>
[Bug]           Logbucheintrag einer gelösten Verbindung enthält Programmcode<br>
[Bug]           Module und Erweiterungen lassen sich nicht für einzelne Mandanten (de)aktivieren<br>
[Bug]           Beim Login nach einem zuvor durchgeführten Logout bleibt in der URL /?logout erhalten<br>
[Bug]           Über die Objekttyp-Gruppe lassen sich im Kontakt-Browser Objekte auswählen, die nicht aus der Objekttyp-Gruppe "Kontakt" stammen<br>
[Bug]           Attribut "Schwellwert" aus der Benachrichtigung zu Updates entfernen<br>
[Bug]           Gruppenzugehörigkeit lässt sich nicht über die Massenänderung zuweisen<br>
[Bug]           Import-Log enthält "\n" an den Zeilenanfängen<br>
[Bug]           Button "Lösen" in der Listeneditierung wirkt nicht durch und die Verwaltung der Objekte ist inkonsistent<br>
[Bug]           Selbst erstellte Übersetzungen werden nach Login nicht berücksichtigt<br>
[Bug]           Links in Reports können nicht mehr angeklickt werden<br>
[Bug]           OCS-Import importiert Objekte in den falschen Objekttyp<br>
[Bug]           Tabelle mit JDisc-Profilen wird nicht vollständig dargestellt<br>
[Bug]           Button "Editieren" fehlt in den Kategorie-Dialogen unter Dialog-Admin<br>
[Bug]           Unterschiedliches Verhalten des Button "Abbrechen" unter Dialog-Admin<br>
[Bug]           Arbeitsplatz wird in Baumansicht-Typ "logischer Standort" und "Kombinerte Ansicht" doppelt dargestellt<br>
[Bug]           Nach Anklicken der Kategorie "Betriebssystem" im Beziehungsobjekt erscheint sofort der Edit-Mode<br>
[Bug]           Editieren-Button unter "Service Filter" anwählbar und bei nicht markierten Services-Filter mit Funktionalität des "Neu"-Buttons<br>
[Bug]           Interner Speicher für die Datumsfeld-Einstellung unter "Listenansicht Logbuch" wird nach Schließen des Kalenderblatts nicht zurückgesetzt<br>
[Bug]           Verkehrte Beschriftung in Datum-Feldern "Von" und "Bis" unter "Listenansicht Logbuch"<br>
[Bug]           Ausführungszähler Export-Vorlagen zählt die Ausführung bei Browser-Aktualisieren doppelt<br>
[Bug]           Falsche Buttons für Löschen und Wiederherstellen von Templates und obsolete Klappliste für Statuswahl<br>
[Bug]           Raid-Level "-" in Widget "Rechner" in "RAID Kapazität" falsch<br>
[Bug]           Falsche Eintrag in Widget "Rechner" in Listen "Speicherkapazität" und "RAID Kapazität"<br>
[Bug]           Doppelte ID-Anzeige in Widget "Objektliste" wenn kein Attribut gewählt ist<br>
[Bug]           Button "Druckansicht" wird in Listenansicht der Beziehungen angezeigt<br>

[Amélioration] Affichage de la colonne Version dans la catégorie Installation<br>.
[Amélioration] Amélioration du curseur de largeur de colonne personnalisable dans les listes d'objets<br>.
[Amélioration] Option pour gérer les espaces dans les tags Check_MK exportés<br>
[Amélioration] Texte de bienvenue librement configurable sur l'écran de connexion (Administration -> Paramètres généraux)<br>.
[Amélioration] Importation OCS : les logiciels ignorés ne sont plus importés<br>.
[Amélioration] Configuration pour choisir la langue d'i-doit via la langue du navigateur<br>
[Amélioration] Amélioration des fonctions de cryptage lors de l'enregistrement des mots de passe dans les configurations et la documentation (sur la base de mcrypt)<br>
[Amélioration] Les fenêtres pop-up s'adaptent automatiquement à la taille de l'écran<br>.
[Amélioration] Configuration pour le lancement automatique de Deep Search après Quick Search<br>
[Amélioration] Focalisation automatique sur le champ de filtre dans les listes d'objets<br>
[Amélioration] Bouton pour supprimer un filtre dans les listes d'objets<br>
[Amélioration] Auto-complétion lors de la recherche dans les listes d'objets<br>
[Amélioration] Déplacement des informations sur les droits manquants dans un nouveau journal<br>.
[Amélioration] Filtrage par statut CMDB par liste déroulante dans les listes d'objets<br>
[Amélioration] Nouvelle catégorie "Connexion par câble"<br>
[Amélioration] Extension des informations DNS dans la catégorie Adresse de l'hôte<br>
[Amélioration] Extension de la catégorie Adresse de l'hôte aux zones de réseau<br>
[Amélioration] Nouveau type d'objet et de catégories : Zone de réseau<br>
[Amélioration] Nouvelle fonction dans les listes IP : domaines / zones<br>
[Amélioration] Interface pour le câblage de masse dans la catégorie Connexions<br>
[Amélioration] Connexions catégorie : fonction de dé-câblage<br>
[Amélioration] Héritage de la latitude et de la longitude dans la catégorie Emplacement<br>
[Amélioration] Utilisation de zéros de tête dans le substitut du compteur dans le titre de l'objet / numéro d'inventaire<br>
[Amélioration] Calcul de garantie étendu dans la catégorie Comptabilité<br>
[Amélioration] Importation OCS : ajout des noyaux CPU aux données importées<br>
[Amélioration] Compatibilité PHP 7.0<br>
[Modification] Centre d'administration : Changement du nom des modules en "Add-ons"<br>
[Changement] Liste déroulante superflue dans les listes de dialogue des catégories sous Dialogue-Admin<br>.
[Changement] Check_MK : L'élément de menu pour l'exportation est déplacé dans la zone des modules<br>.
[modification] Nagios : l'option de menu pour l'exportation est déplacée dans la zone des modules<br>.
[Bug] Les caractéristiques de l'hôte (dynamique) sous Check_MK ne s'adaptent pas dynamiquement à la fenêtre du navigateur<br>.
[Bug] Le type d'objet est créé malgré l'annulation <br>.
[Bug] OPEN : L'aperçu avant impression d'une page d'aperçu se termine par une erreur PHP<br>.
[Bug] La longueur de câble est mal convertie dans l'édition de liste<br>.
[Bug] L'index de recherche doit avoir utf8_unicode_ci comme jeu de caractères<br>.
[Bug] Licences : Après l'enregistrement d'un prix, celui-ci ne peut plus être supprimé<br>.
[Bug] Échec de la requête php-mysqli<br>.
[Bug] Les champs d'identification de l'importation CSV ne fonctionnent pas via le contrôleur<br>.
[Bug] Importation JDisc : la capacité des disques durs sous la catégorie "Périphérique" n'est pas mise à jour.<br>
[Bug] Importation JDisc : en mode "Ecraser", les objets de type "Câble" sont toujours recréés.<br>
[Bug] Le bouton pour vider le filtre des listes d'objets ne s'affiche pas dans tous les navigateurs<br>.
[Bug] L'algorithme de CMDB Explorer n'affiche pas les instances de logiciels<br>.
[Bug] La création d'une connexion sans choisir de connexion crée déjà un câble<br>.
[Bug] Erreur de conception de la ligne de base pour les sélections au sein d'un groupe d'entrée<br>
[Bug] Impossible d'utiliser plus d'un champ de description dans l'exportation d'un rapport<br>.
[Bug] Deep Search ne trouve pas les termes séparés par un tiret<br>.
[Bug] Gestionnaire de rapports : les exportations CSV et TXT donnent des rapports vides<br>.
[Bug] Les surlignages dans la recherche sont affichés avec du code HTML<br>.
[Bug] La recherche trouve par erreur des entrées dans le journal<br>.
[Bug] La catégorie "Attribution de contrat" ne peut pas être affichée dans la page d'aperçu<br>.
[Bug] Droit d'édition sur "Rapports dans la catégorie" ne permet pas à l'utilisateur d'éditer un rapport de la catégorie.<br>
[Bug] Création d'un objet avec la catégorie "CPU" crée automatiquement une entrée dans cette catégorie<br>.
[Bug] Importation JDisc : les entrées du journal sont créées par erreur<br>.
[Bug] Compteur d'objets pas entièrement visible dans AdminCenter<br>
[Bug] Journal de bord : les modifications apportées aux catégories spécifiques aux objets affichent ensuite la mauvaise catégorie<br>.
[Bug] Format de date dans les listes en anglais malgré les réglages en allemand<br>.
[Bug] Le widget des listes d'objets ne résout pas correctement les entrées<br>.
[Bug] Les notifications ne sont pas envoyées si le destinataire n'est pas de type personne/groupe de personnes<br>.
[Bug] Le SYSID ne peut pas être mis à jour via l'importation CSV<br>.
[Bug] Représentation du texte illisible dans la boîte de dialogue pour la suppression d'objets dans la catégorie Armoire<br>
[Bug] Erreur d'orthographe dans la configuration OCS<br>.
[Bug] Erreur d'orthographe dans la catégorie "PDU"<br>
[Bug] Le bouton "Ajouter/Supprimer" disparaît après avoir cliqué sur "Appliquer" dans le navigateur d'objets<br>.
[Bug] Les catégories spécifiques ne sont pas affichées pour les objets liés dans le Report Manager<br>.
[Bug] La réinitialisation du système de droits ne fonctionne pas avec un mot de passe crypté<br>.
[Bug] Impossible de supprimer les champs de date dans les catégories personnalisées<br>.
[Bug] Exportation CSV : les informations définies par l'utilisateur sont entourées de balises HTML<br>
[Bug] Absence de liste déroulante de statut dans le dialogue Admin<br>.
[Bug] Impossible d'importer la latitude et la longitude via l'importation CSV<br>.
[Bug] Les conditions sur l'attribut "Insertion" ne sont pas correctement appliquées dans le gestionnaire de rapports<br>.
[Bug] La suppression d'une affectation de créneau laisse une entrée dans les "objets spatialement affectés"<br>.
[Bug] Sélection d'attributs pour la catégorie "Système d'exploitation" vide dans le gestionnaire de rapports<br>.
[Bug] Index de recherche : message d'erreur de limite de mémoire lors de la régénération de l'index de recherche pour les grandes bases de données<br>.
[Bug] La capacité raid dans les systèmes de stockage est toujours représentée en GB.<br>
[Bug] Champs de la configuration LDAP vides lors de l'appel de la vue d'édition<br>.
[Bug] Informations de journal incorrectes pour les armoires lorsqu'un objet est repositionné.<br>
[Bug] Importation CSV : le champ "Relation d'objet (plusieurs objets)" ne se remplit pas et ne crée pas de relation<br>.
[Bug] Importation CSV : Le champ "Relation d'objet(Un objet)" ne crée pas de relation<br>.
[Bug] La définition du champ obligatoire pour l'attribut "Localisation" ne fonctionne pas<br>.
[Bug] SQL généré incorrectement lors de l'utilisation de IS NULL/IS NOT NULL dans le gestionnaire de rapports<br>.
[Bug] Seuls les objets d'infrastructure peuvent être sélectionnés comme composants de service dans le Report Manager<br>.
[Bug] L'exemple de format de date ne correspond pas au format de date réel<br>.
[Bug] L'édition de la catégorie "Service" via l'édition de liste entraîne le transfert du contenu de "Description de service interne" vers le champ "Description de service externe"<br>.
[Bug] Entrées superflues dans les paramètres des experts<br>.
[Bug] La catégorie "DHCP" manque dans l'édition de la liste<br>.
[Bug] La catégorie "DHCP" manque dans l'importation CSV<br>.
[Bug] Affichage incorrect des icônes dans le navigateur de listes<br>.
[Bug] Le modèle par défaut ne prend en compte que les catégories d'importation lors de l'importation JDisc<br>.
[Bug] Erreur dans la catégorie "Vitalité de l'objet" lorsqu'il n'y a pas de consommation<br>.
[Bug] La sélection du type d'objet lors de la liaison d'une attribution dans l'importation CSV n'a pas d'effet<br>.
[Bug] L'attribut "Dernière modification" ne peut pas être sélectionné comme condition dans l'éditeur de requête<br>.
[Bug] Dans le rapport, il n'est pas possible de sélectionner un attribut pour la catégorie "Objets affectés spatialement" dans les conditions<br>.
[Bug] L'importation de la vitesse d'une interface via JDisc utilise une conversion incorrecte<br>.
[Bug] La représentation du réseau attribué ne permet pas de lire quel réseau a été sélectionné<br>.
[Bug] Impossible de trier les colonnes dans les résultats des rapports<br>.
[Bug] L'info-bulle désactivée est quand même affichée pour le chemin d'accès au site<br>.
[Bug] Impossible de sélectionner les objets dans le navigateur d'objets par le bouton "Page"<br>.
[Bug] Le réglage de l'état de la CMDB dans le profil JDisc n'a pas d'effet lors de l'importation via le contrôleur<br>.
[Bug] L'exportation CSV d'un rapport avec des ruptures contient également les ruptures<br>.
[Bug] La navigation de page dans les navigateurs d'objets ne fonctionne qu'après un défilement vertical<br>.
[Bug] L'icône d'édition de la vue en liste n'est pas masquée si l'utilisateur n'a pas les droits nécessaires<br>.
[Bug] Impossible de résoudre la localisation<br>.
[Bug] Impossible de filtrer par adresse IP<br>.
[Bug] La traduction de la constante de langue n'est pas effectuée dans l'arborescence du menu de l'administration<br>.
[Bug] Le début et la fin du contrat ne figurent pas dans la sélection pour l'affichage dans les listes d'objets<br>.
[Bug] Lors de l'utilisation d'informations de plus d'une catégorie multi-valeurs dans la vue en liste, les attributs sont représentés de manière répétée<br>.
[Bug] Erreur lors de l'utilisation d'une condition sur l'attribut "Statut CMDB" dans le rapport<br>.
[Bug] Absence de l'icône de la loupe pour sélectionner les attributs liés dans le gestionnaire de rapports<br>.
[Bug] Le lien de l'objet ne peut pas être utilisé pour ouvrir les détails de l'objet si le clic sur la ligne est désactivé.<br>
[Bug] Le champ Oui/Non des catégories définies par l'utilisateur avec une définition de champ obligatoire entraîne toujours l'impossibilité d'enregistrer l'enregistrement sur la page d'aperçu.<br>
[Bug] Les champs Oui/Non ne peuvent pas être interrogés proprement dans le gestionnaire de rapports<br>.
[Bug] Les informations de la catégorie "Sauvegarde des données" ne sont pas enregistrées sur la page de résumé si des champs obligatoires ont été configurés<br>.
[Bug] Impression incorrecte des listes filtrées<br>.
[Bug] Erreur lors de l'importation d'un fichier CSV sans champ d'identification<br>.
[Bug] Le paramètre expert "auth.use-in-location-tree" désactive l'emplacement racine pour tous les utilisateurs dans l'explorateur de site<br>.
[Bug] Erreur lors de la connexion d'un utilisateur LDAP si celui-ci ne possède pas de droits<br>.
[Bug] L'attribut "Interface" dans un port est vidé si le port est importé via l'importation de câblage.<br>
[Bug] Les attributs "Domaine DNS" et "FQDN" ne peuvent pas être édités dans le gestionnaire de rapports<br>.
[Bug] L'attribut "Site" n'est pas représenté dans les listes d'objets avec le filtre d'état my-doit actif.<br>
[Bug] La sélection de listeners dans le gestionnaire de rapports entraîne un message d'erreur<br>.
[Bug] Mot de passe SMTP lisible via les outils de développement<br>.
[Bug] La catégorie "Connexion" contient des informations incorrectes<br>.
[Bug] La traduction des constantes de langue pour le statut CMDB ne se fait pas avec des traductions personnalisées<br>.
[Bug] Seul le premier objet de rapport dans la liste est envoyé dans une notification lors de l'exécution<br>.
[Bug] L'entrée du journal d'une connexion résolue contient du code de programme<br>.
[Bug] Les modules et extensions ne peuvent pas être (dé)activés pour des clients individuels<br>.
[Bug] Lors de la connexion après une déconnexion précédente, l'URL /?logout est conservé<br>.
[Bug] Le groupe de types d'objets permet de sélectionner dans le navigateur de contacts des objets qui ne proviennent pas du groupe de types d'objets "Contact"<br>.
[Bug] Suppression de l'attribut "Valeur seuil" dans les notifications de mise à jour<br>.
[Bug] Impossible d'attribuer l'appartenance à un groupe via la modification en masse<br>.
[Bug] Le journal d'importation contient des "\n" au début des lignes<br>.
[Bug] Le bouton "Dissoudre" dans l'édition de liste ne fonctionne pas et la gestion des objets est incohérente<br>.
[Bug] Les traductions créées par l'utilisateur ne sont pas prises en compte après la connexion<br>.
[Bug] Il n'est plus possible de cliquer sur les liens dans les rapports<br>.
[Bug] L'importation OCS importe les objets dans le mauvais type d'objet<br>.
[Bug] Le tableau des profils JDisc ne s'affiche pas complètement<br>.
[Bug] Bouton "Editer" manquant dans les dialogues de catégorie sous Dialogue-Admin<br>
[Bug] Comportement différent du bouton "Annuler" sous Dialog-Admin<br>.
[Bug] Le poste de travail est affiché deux fois dans les types de vue arborescente "site logique" et "vue combinée"<br>.
[Bug] Après avoir cliqué sur la catégorie "Système d'exploitation" dans l'objet de relation, le mode d'édition apparaît immédiatement<br>.
[Bug] Bouton d'édition sélectionnable sous "Filtre de service" et pour les filtres de service non sélectionnés avec fonctionnalité du bouton "Nouveau"<br>.
[Bug] La mémoire interne pour le réglage du champ de date sous "Vue de la liste du journal" n'est pas remise à zéro après la fermeture de la feuille de calendrier<br>.
[Bug] Inversion des étiquettes dans les champs de date "De" et "A" sous "Vue liste du journal"<br>.
[Bug] Le compteur d'exécution des modèles d'exportation compte deux fois l'exécution lors de la mise à jour du navigateur<br>.
[Bug] Boutons incorrects pour la suppression et la restauration des modèles et liste déroulante obsolète pour le choix du statut<br>.
[Bug] Niveau de raid "-" incorrect dans le widget "Ordinateur" dans "Capacité RAID"<br>
[Bug] Mauvaise entrée dans le widget "Calculateur" dans les listes "Capacité de stockage" et "Capacité RAID"<br>.
[Bug] Double affichage de l'ID dans le widget "Liste des objets" si aucun attribut n'est sélectionné<br>.
[Bug] Le bouton "Aperçu avant impression" est affiché dans la liste des relations<br>.