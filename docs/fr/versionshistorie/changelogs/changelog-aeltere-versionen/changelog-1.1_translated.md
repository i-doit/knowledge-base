<!-- TRANSLATED by md-translate -->
# Changelog 1.1

# Changelog 1.1

[Erweiterung]    Rundum erneurtes granulares Rechtesystem<br>
[Erweiterung]    CMDB Rechtestrukturen auf Basis von Objekttypen, Objekten und Kategorien<br>
[Erweiterung]    Rechtestrukturen für Module: Reports, Dialog-Admin, Im-/Export, Logbuch, Nagios, globale Suche, Templates & Verwaltung<br>
[Erweiterung]   Überarbeitete GUI für das Supernetz<br>
[Erweiterung]   Überarbeitete GUI für Layer3 Netz (Abfrage auf Netzkollision, Link zum Supernetz)<br>
[Erweiterung]   WYSIWYG Editor für alle Beschreibungsfelder<br>
[Erweiterung]   Maßgeblich verbesserte GUI für Validierungskonfiguration<br>
[Erweiterung]   Linke Navigation in variabler Größe<br>
[Erweiterung]   Objekt-Typ-Gruppen lassen sich bei niedriger Auflösung "scrollen"<br>
[Erweiterung]   Sehr viele DAO und UI Klassen wurden stark entschlackt (viel größerer Fokus auf die generischen Methoden)<br>
[Erweiterung]   Sehr viele kleinere GUI aufhübschungen (z.B. saubere Abstände, gleichmäßigere Border, ...)<br>
[Erweiterung]   Quick-Info Fenster zeigen mehr Inhalte an<br>
[Erweiterung]   Neue Buttons und Teilweise verbesserte Rückgabewerte unter "Cache / Datenbank"<br>
[Erweiterung]   Aufgehübschte und technisch neue "Dialog Listen" (Sehr viel platzsparender und Benutzerfreundlicher)<br>
[Erweiterung]    Modul Installation/ Updates im Admin Center<br>
[Erweiterung]   Wenn Kontakte exportiert werden, muss man die Wahl haben, entweder den Kontaktanemen oder den Loginnamen zu exportieren.<br>
[Erweiterung]    Neuer Objekttyp "Service Templates"<br>
[Erweiterung]    Neuer Objekttyp "Host Templates"<br>
[Erweiterung]    Objekttypen im Statistiken Widget über config.inc.php konfigurierbar<br>
[Erweiterung]    Eine neue "Rechte"-Kategorie<br>
[Erweiterung]    Migration der rollenbasierten Rechte<br>
[Erweiterung]    Rechte Recovery Funktion<br>
[Erweiterung]    Objekterstellung in Objekt-/Datei- Browsern ist von den Rechten des Users abhängig<br>
[Erweiterung]    API-Authentifizierung<br>
[Erweiterung]    Löschen verwaister Rechte<br>
[Erweiterung]    Flexible Breitenanpassung des linken Menübaums<br>
[Erweiterung]    Neue API-Methode cmdb.filter.getUpdatedIPs<br>
[Erweiterung]    Kopplung zu Loginventory<br>
[Erweiterung]    Neue Nagios Struktur:<br>
[Erweiterung]      Nagios Punkt unter Extras<br>
[Erweiterung]        Nagios Kategorien befinden sich stehts in (gleichnamigen) Unter-Ordnern (Ausnahme: Gruppen, Personen, Personengruppen)<br>
[Erweiterung]        Nagios Kategorie lautet nun "Host-Definitionen"<br>
[Erweiterung]        Nagios Parameter aus der Softwarezuweisung wurden entfernt ? Zukünftig gibt es einen eigenen Objekt-Typen "Nagios Service" (Host- und Software Objekte verfügen über eine "Service Zuweisung" Kategorie)<br>
[Erweiterung]        NDO Parameter sind in eine eigene "NDO Parameter" Kategorie gewandert<br>
[Erweiterung]        Nagios Host- und Service Definitionen können über "Templates" verfügen ("Nagios Host Template" und "Nagios Service Template" sind eigene Objekt-Typen)<br>
[Erweiterung]        Service Dependencies wurden komplett erneuert und verfügen über eine sehr sprechende Dokumentation, da dieser Part sehr komplex ist<br>
[Erweiterung]          Export wurde technisch komplett neu entwickelt und gleichzeitig großzügig refakturiert<br>
[Erweiterung]        Sehr umfangreiche Debugging Features inkl. Export Log<br>
[Erweiterung]        Viele Bugfixes und nachgetragene Werte, die vorher nicht funktioniert oder ausgegeben wurden<br>
[Erweiterung]          Nagios Commands können über Kommentare (WYSIWYG) verfügen. Diese werden im Frontend neben den entsprechenden Feldern dargestellt<br>
[Erweiterung]          Sehr viele neue Felder zum detaillierten konfigurieren von Nagios Definitionen<br>
[Erweiterung]          Freitext Felder für eigene Definitionen in Nagios-Hosts und ?Services (Custom Object Vars)<br>
[Bugfix]    Clusterdienstzuweisung: Bei einer IP/Laufwerk/Freigabe im Dienst sollte diese automatisch bei der Zuweisung eingetragen sein.<br>
[Bugfix]    LDEV Server und Client: Die Multipath Technologie sollte bei den Pfaden mit angegeben werden können<br>
[Bugfix]    CSV-Import: Auto-Matching beim Wechsel des globalen Objekttyps<br>
[Bugfix]    CSV-Import: vor dem Überschreiben von Objekten deren Kategorien löschen<br>
[Bugfix]    Design kaputt nach Login und anschließender fehlender Berechtigung auf einen Mandanten<br>
[Bugfix]    Objektbrowser zeigt unter kürzlich erstellt auch archivierte an<br>
[Bugfix]    Horizontaler Scrollbalken unter "Extras" => "Templates" fehlt<br>
[Bugfix]    Druckansicht Beziehungen im Layer-3-Netz wirft Exception aus.<br>
[Bugfix]    Dashboard: Widget Statistiken verursacht aufgrund der Breite unten einen Scrollbalken [Bugfix]    Überzogene Lizenzschlüssel unter Lizenzen-Übersicht zeigen seltsame Werte. (Zum Beispiel 1/2 verwendet, aber bei den überzogenen Lizenzen sind trotzdem zwei Einträge)<br>
[Bugfix]    Eigene Reports: Sollen sie nach dem Namen sortiert werden, werden sie nach der Länge des Namens sortiert.<br>
[Bugfix]    Anschlüsse: Beim Anlegen eines neuen Ausgangs kann ich keinen dazugehörigen Eingang wählen.<br>
[Bugfix]    Setup/Update: Sicherstellen, dass MySQL strict mode nicht aktiv ist<br>
[Bugfix]    Bei der Listeneditierung werden einige Kategorien nicht korrekt bearbeitet .<br>
[Bugfix]    JDisc: Import wirft PHP Warnings aus.<br>
[Bugfix]    Controller: Update mit autoup geht nicht.<br>
[Bugfix]    Objektbrowser bspw. in Stromverbraucher in der Listeneditierung: Ist beim Öffnen des Objektbrowser ein Objekt vorausgewählt, werden die dazugehörigen Anschlüsse nicht angezeigt.<br>
[Bugfix]    Quick Info Cache entspricht nicht dem IST Stand.<br>
[Bugfix]    JDISC Import: Die Erkennung bestehender Objekte ist case sensitive<br>
[Bugfix]    Supernet Kategorie wird nie als gefüllt angezeigt (fett).<br>
[Bugfix]    Kategorie Dateiversion: Der Button "Archivieren" muss hier "Purge" heißen.<br>
[Bugfix]    Dateien: Purged man ein ganzes Dateiobjekt, werden die Dateien nicht vom Filesystem gelöscht.<br>
[Bugfix]    Import: Vergleich von Objektnamen sollte case insensitive sein.<br>
[Bugfix]    PHP-Fehler beim Speichern vom der Kategorie Layer3->Netz<br>
[Bugfix]    Erstellung eines Logbuch-Eintrags trotz keiner geänderten Werte<br>
[Bugfix]    General-Exception in "Alle Tickets"<br>
[Bugfix]    [Properties] Dynamische Properties für CPU erstellen<br>
[Bugfix]    [Properties] Dynamische Properties für Speicher erstellen<br>
[Bugfix]    Bug beim Versenden von E-Mails im Workflow Modul<br>
[Bugfix]    In Personengruppen kann man die Rechte nicht mehr zuweisen wenn man im Editier-Modus ist.<br>
[Bugfix]    Beim .csv-Import können keine Personendaten importiert werden. Bei der Vorauswahl des Objekttyps "Personen" werden nur wenige Eigenschaften geladen.<br>
[Bugfix]    Beim Erstellen von mehreren Objekten aus einem Template, werden zu viele Objekte erstellt.<br>
[Bugfix]    [Properties] Dynamische Properties für Logischer Standort klappen nicht richtig und sind mehrfach verfügbar.<br>
[Bugfix]    [Properties] Dynamische Properties für Spezifische Kategorien nachtragen (Monitor, Drucker, ...)<br>
[Bugfix]    OCS Import Bug<br>
[Bugfix]    RT-Connector TTS: Unkonventionelle Ausgabe von Exceptions<br>
[Bugfix]    Quick Info kann nur globale Kategorien anzeigen<br>
[Bugfix]    Workflows setzen eingegebene Uhrzeiten von hh:mm auf hh:00<br>
[Bugfix]    Workflows können bearbeitet werden, obwohl diese bereits abgeschlossen sind<br>
[Bugfix]    API: isys_user_session-Eintrag wird nach Beendigung des Requests nicht gelöscht<br>
[Bugfix]    Template Erweiterungen aus Modulen werden nicht auf der Übersichtsseite angezeigt<br>
[Bugfix]    API: Auslesen von convert-Properties nicht möglich<br>
[Bugfix]    [Dialog-Admin] Dialog Tabelle für Workflow-Typen fehlt<br>
[Bugfix]    Workflows anlegen - Usability<br>
[Bugfix]    Workflow Benachrichtigungen enthalten fehlerhaften Betreff.<br>
[Bugfix]    API: Parameter "raw" führt zu Exception.<br>
[Bugfix]    Validierung funktioniert nicht auf der Übersichtsseite.<br>
[Bugfix]    Vertragszuweisung zeigt Sprachkonstanten an.<br>
[Bugfix]    Objekt-Gruppe verursacht Fehler in Formfaktor ("!")<br>
[Bugfix]    API: Identifier nach Möglichkeit auf Konstanten umstellen anstelle von IDs.<br>
[Bugfix]    Die Einträge einiger DialogPlus-Felder können nicht gelöscht werden .<br>
[Bugfix]    Bei der Filterwahl "Template" unter "my-doit" werden immer 0 Objekte angezeigt, selbst wenn Templates vorhanden sind.<br>
[Bugfix]    Nagios: Wenn commands exportiert werden, befindet sich ein Leeraum zwischen command und Argument.<br>
[Bugfix]    Nagios: Kontakte bei host and service escalations werden nicht exportiert.<br>
[Bugfix]    Kategorie "Anwendung/Installation" zeigt Zuweisungen zu Templates an.<br>
[Bugfix]    Kein Datumsfeld kann geleert warden, es erscheint immer ein Validierungsfehler.<br>
[Bugfix]    [API] Unable to read property Layer2 [Layer3 net assignment]<br>
[Bugfix]    [Workflows] Datum/Zeit in Workflows sind nicht korrekt.<br>
[Bugfix]    [Workflows] Klick auf den Abbrechen Button führt zum Beenden des Workflows, wenn man sich im Editiermodus befindet.<br>
[Bugfix]    [API] cmdb.objects liefert nicht das root location-Element<br>
[Bugfix]    Druckansicht: Kompletten Standortpfad der Standortkategorie druckbar machen.<br>
[Bugfix]    Beschreibungsfeld in Zugewiesener Arbeitsplatz lässt sich nicht speichern<br>
[Bugfix]    Breadcrumb wird nicht mehr korrekt dargestellt<br>
[Bugfix]    For v1.1 update: Objekt-Type Switch- and Blade Chassis need "Formfaktor" category<br>
[Bugfix]    [API] Double-encoded data<br>
[Bugfix]    Checkboxen in Javascript Listen verlieren ihre Auswahl, wenn der Filter oder die Sortierung verwendet wird.<br>
[Bugfix]    [CMDB-Explorer]Zeigt Objekte ohne vorherigen Check des Status an.<br>
[Bugfix]    [Report Manager ][CSV Export] kann nicht mit Zeilenumbrüchen umgehen.<br>
[Bugfix]    Kein Statusfilter in globaler Beziehungsansicht.<br>
[Bugfix]    Duplizieren eines Objekts ändert nicht den Hostnamen im neuen Objekt.<br>
[Bugfix]    Laufzeit von Verträgen wird falsch berechnet.<br>
[Bugfix]    Objekt-Browser Live-Suchergebnisse werden nicht nach erlaubten Objekttypen gefiltert.<br>
[Bugfix]    Beschreibungsfeld der Kategorie "Varianten" kann nicht gespeichert werden (Feld ist immer leer)<br>
[Bugfix]    Die Massenänderung ändert den CMDB-Status Ziel- Objekte<br>
[Bugfix]    Das Symbol, um primäre Kontakte zu markieren schaltet auf grün / rot, wenn die Kontakte archiviert / gelöscht / wiederhergestellt werden.<br>
[Bugfix]    CMDB-Status affektiert zugewiesenen Verträge in Listen.<br>
[Bugfix]    Importierte Objekte verlieren ihre Modell-Informationen, wenn sie editiert werden.<br>
[Bugfix]    Verwirrender GUI BUG in IP-Liste<br>
[Bugfix]    Gruppierung von ein und demselben Gateway in Kategorie Routing<br>
[Bugfix]    Datum "Letzte Änderung" wird nicht verändert, wenn die Änderung in der Listeneditierung vorgenommen wurde.<br>
[Bugfix]    Kategorie "Restgarantie": Bug in der Berechnung der Restgarantie<br>
[Bugfix]    Benutzerdefinierte Objekttypen können nicht in der Massenänderung für die Kontaktzuweisung verwendet werden.<br>
[Bugfix]    Kategorie "Allgemein" wird nicht auf der Übersichtsseite gezeigt.<br>

[Extension] Système de droits granulaires entièrement renouvelé<br>.
[Extension] Structures de droits CMDB basées sur les types d'objets, les objets et les catégories<br>.
[Extension] Structures de droits pour les modules : Rapports, Dialogue-Admin, Importation/Exportation, Journal de bord, Nagios, Recherche globale, Modèles & Administration<br>.
[Extension] GUI révisée pour le super réseau<br>
[Extension] GUI remaniée pour le réseau Layer3 (interrogation sur la collision de réseaux, lien vers le super-réseau)<br>
[Extension] Editeur WYSIWYG pour tous les champs de description<br>.
[Extension] GUI considérablement amélioré pour la configuration de la validation<br>
[Extension] Navigation à gauche de taille variable<br>.
[Extension] Les groupes de types d'objets peuvent être "déroulés" en basse résolution <br>.
[Extension] De très nombreuses classes DAO et UI ont été fortement épurées (beaucoup plus d'accent sur les méthodes génériques)<br>
[Extension] De nombreuses petites améliorations de l'interface utilisateur (par ex. espacement plus propre, bordures plus régulières, ...)<br>.
[Extension] Les info-bulles affichent plus de contenu<br>.
[Extension] Nouveaux boutons et valeurs de retour partiellement améliorées sous "Cache / Base de données"<br>.
[Extension] Listes de dialogue améliorées et techniquement nouvelles (beaucoup moins encombrantes et plus faciles à utiliser)<br>
[Extension] Module Installation/Mises à jour dans le Centre d'administration<br>.
[Extension] Lors de l'exportation des contacts, il faut avoir le choix d'exporter soit le nom du contact, soit le nom de connexion.<br>
[Extension] Nouveau type d'objet "Service Templates"<br>.
[Extension] Nouveau type d'objet "Host Templates"<br>
[Extension] Types d'objets configurables dans le widget Statistiques via config.inc.php<br>
[Extension] Une nouvelle catégorie "Droits"<br>
[Extension] Migration des droits basés sur les rôles<br>
[Extension] Fonction de récupération des droits<br>
[Extension] La création d'objets dans les navigateurs objet/fichier dépend des droits de l'utilisateur<br>.
[Extension] Authentification API<br>
[Extension] Suppression des droits orphelins<br>
[Extension] Ajustement flexible de la largeur de l'arborescence du menu de gauche<br>
[Extension] Nouvelle méthode API cmdb.filter.getUpdatedIPs<br>
[Extension] Couplage avec Loginventory<br>
[Extension] Nouvelle structure Nagios :<br>
[Extension] Point Nagios sous Extras<br>
[Extension] Les catégories Nagios se trouvent toujours dans des sous-dossiers (du même nom) (Exception : Groupes, Personnes, Groupes de personnes)<br>
[Extension] La catégorie Nagios est maintenant "Définitions d'hôtes"<br>.
[Extension] Les paramètres Nagios de l'attribution de logiciel ont été supprimés ? A l'avenir, il y aura un type d'objet spécifique "Service Nagios" (les objets hôtes et logiciels disposent d'une catégorie "Attribution de service")<br>
[Extension] Les paramètres NDO ont été déplacés dans une catégorie séparée "Paramètres NDO"<br>.
[Extension] Les définitions d'hôtes et de services Nagios peuvent avoir des "modèles" ("Nagios Host Template" et "Nagios Service Template" sont des types d'objets distincts)<br>
[Extension] Les dépendances de service ont été complètement renouvelées et disposent d'une documentation très parlante, car cette partie est très complexe<br>.
[Extension] L'exportation a été entièrement revue sur le plan technique, tout en étant généreusement refacturée<br>.
[Extension] Fonctionnalités de débogage très complètes, y compris le journal d'exportation<br>.
[Extension] De nombreuses corrections de bugs et des valeurs ajoutées qui ne fonctionnaient pas ou n'étaient pas émises auparavant<br>.
[Extension] Les commandes Nagios peuvent disposer de commentaires (WYSIWYG). Ceux-ci sont affichés dans le frontend à côté des champs correspondants<br>.
[Extension] De très nombreux nouveaux champs pour configurer en détail les définitions de Nagios<br>.
[Extension] Champs de texte libre pour les définitions personnalisées dans les hôtes et services Nagios (Custom Object Vars)<br>.
[Bugfix] Attribution des services de cluster : Si une IP/un disque/un partage est présent dans le service, il devrait être automatiquement inscrit lors de l'attribution.<br>
[Bugfix] LDEV serveur et client : La technologie multipath devrait pouvoir être indiquée dans les chemins d'accès<br>.
[Bugfix] Importation CSV : Auto-matching lors du changement du type d'objet global<br>.
[Bugfix] Importation CSV : supprimer les catégories des objets avant de les écraser<br>.
[Bugfix] Design cassé après connexion et ensuite absence d'autorisation sur un mandant<br>
[Bugfix] Le navigateur d'objets affiche également les objets archivés sous Créés récemment<br>.
[Bugfix] La barre de défilement horizontale sous "Outils" => "Modèles" manque<br>.
[Bugfix] L'aperçu avant impression des relations dans le réseau de niveau 3 lance une exception <br>.
[Bugfix] Tableau de bord : le widget Statistiques provoque une barre de défilement en bas à cause de la largeur [Bugfix] Les clés de licence dépassées sous Aperçu des licences affichent des valeurs étranges. (Par exemple, 1/2 utilisé, mais il y a quand même deux entrées dans les licences dépassées)<br>
[Bugfix] Rapports personnalisés : si on veut les trier par nom, ils sont triés par longueur du nom.<br>
[Bugfix] Connexions : Lors de la création d'une nouvelle sortie, je ne peux pas sélectionner une entrée correspondante.<br>
[Bugfix] Configuration/mise à jour : s'assurer que MySQL strict mode n'est pas actif<br>.
[Bugfix] Lors de l'édition de listes, certaines catégories ne sont pas traitées correctement .<br>
[Bugfix] JDisc : L'importation renvoie des avertissements PHP.<br>
[Bugfix] Controller : la mise à jour avec autoup ne fonctionne pas.<br>
[Bugfix] Explorateur d'objets, par exemple dans les consommateurs d'électricité dans l'édition de listes : si un objet est présélectionné lors de l'ouverture de l'explorateur d'objets, les connexions correspondantes ne sont pas affichées.<br>
[Bugfix] Le cache d'information rapide ne correspond pas à l'état réel. <br>
[Bugfix] Importation JDISC : la détection des objets existants est sensible à la casse<br>.
[Bugfix] La catégorie Supernet n'est jamais affichée comme remplie (en gras).<br>
[Bugfix] Catégorie Version de fichier : le bouton "Archiver" doit s'appeler ici "Purge".<br>
[Bugfix] Fichiers : Purger un objet fichier entier ne supprime pas les fichiers du système de fichiers.<br>
[Bugfix] Importation : La comparaison des noms d'objets doit être insensible à la case.<br>
[Bugfix] Erreur PHP lors de l'enregistrement de la catégorie Layer3->Net<br>.
[Bugfix] Création d'une entrée dans le journal malgré l'absence de valeurs modifiées<br>.
[Bugfix] Exception générale dans "Tous les tickets"<br>.
[Bugfix] [Properties] Création de propriétés dynamiques pour CPU<br>
[Bugfix] [Properties] Créer des propriétés dynamiques pour la mémoire<br>
[Bugfix] Bug lors de l'envoi d'e-mails dans le module Workflow<br>.
[Bugfix] Dans les groupes de personnes, il n'est plus possible d'attribuer des droits quand on est en mode édition.<br>
[Bugfix] Impossible d'importer des données personnelles lors de l'importation .csv. Lors de la présélection du type d'objet "personnes", seules quelques propriétés sont chargées.<br>
[Correction] Lors de la création de plusieurs objets à partir d'un modèle, trop d'objets sont créés.<br>
[Bugfix] [Properties] Les propriétés dynamiques pour l'emplacement logique ne fonctionnent pas correctement et sont disponibles plusieurs fois.<br>
[Bugfix] [Properties] Ajouter des propriétés dynamiques pour les catégories spécifiques (moniteur, imprimante, ...)<br>.
[Bugfix] Bug d'importation OCS<br>
[Bugfix] RT-Connector TTS : sortie non conventionnelle d'exceptions<br>
[Bugfix] Quick Info ne peut afficher que des catégories globales<br>
[Bugfix] Les workflows changent les heures saisies de hh:mm à hh:00<br>.
[Bugfix] Les workflows peuvent être modifiés alors qu'ils sont déjà terminés<br>.
[Bugfix] API : l'entrée isys_user_session n'est pas supprimée après la fin de la requête<br>.
[Bugfix] Les extensions de templates des modules ne sont pas affichées sur la page d'aperçu<br>.
[Bugfix] API : Impossible de lire les propriétés convert<br>.
[Bugfix] [Dialogue Admin] Tableau de dialogue pour les types de workflow manquant<br>
[Bugfix] Création de workflows - Usabilité<br>
[Bugfix] Les notifications de workflow contiennent un objet erroné.<br>
[Bugfix] API : Le paramètre "raw" provoque une exception.<br>
[Bugfix] La validation ne fonctionne pas sur la page d'aperçu.<br>
[Bugfix] L'attribution des contrats affiche les constantes de langue.<br>
[Bugfix] Le groupe d'objets provoque une erreur dans le facteur de forme (" !")<br>
[Bugfix] API : Si possible, changer les identifiants en constantes au lieu d'ID.<br>
[Bugfix] Impossible de supprimer les entrées de certains champs DialogPlus .<br>
[Bugfix] Le choix du filtre "Template" sous "my-doit" affiche toujours 0 objets, même si des templates sont présents.<br>
[Bugfix] Nagios : lors de l'exportation de commandes, il y a un espace vide entre la commande et l'argument.<br>
[Correction de Nagios : les contacts ne sont pas exportés lors des escalades d'hôtes et de services.
[Bugfix] La catégorie "Application/Installation" affiche les affectations aux templates.<br>
[Bugfix] Impossible de vider un champ de date, une erreur de validation apparaît toujours.<br>
[Bugfix] [API] Impossible de lire la propriété Layer2 [Layer3 net assignment]<br>
[Bugfix] [Workflows] La date/l'heure dans les workflows n'est pas correcte.<br>
[Bugfix] [Workflows] Cliquer sur le bouton Annuler entraîne l'arrêt du workflow lorsqu'on est en mode édition.<br>
[Bugfix] [API] cmdb.objects ne renvoie pas l'élément root location<br>.
[Bugfix] Aperçu avant impression : rendre imprimable le chemin complet de la catégorie de site.<br>
[Bugfix] Impossible d'enregistrer le champ de description dans Poste de travail attribué<br>.
[Bugfix] Le fil d'Ariane ne s'affiche pas correctement<br>.
[Bugfix] Pour la mise à jour de la v1.1 : les châssis de commutateurs et de lames de type objet ont besoin de la catégorie "facteur de forme"<br>.
[Bugfix] [API] Double-encoded data<br>
[Bugfix] Les cases à cocher dans les listes Javascript perdent leur sélection lors de l'utilisation du filtre ou du tri.<br>
[Bugfix] [CMDB-Explorer]Affiche les objets sans vérification préalable de leur état.<br>
[Bugfix] [Report Manager ][Export CSV] ne gère pas les retours à la ligne.<br>
[Bugfix] Pas de filtre d'état dans la vue globale des relations.<br>
[Bugfix] Dupliquer un objet ne change pas le nom d'hôte dans le nouvel objet.<br>
[Bugfix] La durée de vie des contrats est mal calculée.<br>
[Bugfix] Les résultats de recherche de l'explorateur d'objets en direct ne sont pas filtrés en fonction des types d'objets autorisés.<br>
[Bugfix] Le champ de description de la catégorie "Variantes" ne peut pas être enregistré (le champ est toujours vide)<br>.
[Bugfix] La modification en masse change le statut CMDB Cible- Objets<br>.
[Bugfix] L'icône pour marquer les contacts primaires passe au vert / rouge lorsque les contacts sont archivés / supprimés / restaurés.<br>
[Bugfix] Le statut CMDB affecte les contrats attribués dans les listes.<br>
[Bugfix] Les objets importés perdent leurs informations de modèle lorsqu'ils sont édités.<br>
[Bugfix] BUG confus dans la liste des IP<br>.
[Bugfix] Regroupement d'une même passerelle dans la catégorie Routage<br>
[Bugfix] La date de "dernière modification" n'est pas modifiée si la modification a été effectuée dans l'édition de la liste.<br>
[Bugfix] Catégorie "Garantie résiduelle" : bug dans le calcul de la garantie résiduelle<br>.
[Bugfix] Les types d'objets définis par l'utilisateur ne peuvent pas être utilisés dans la modification en masse pour l'attribution des contacts.<br>
[Bugfix] La catégorie "Général" n'est pas affichée sur la page d'aperçu.<br>