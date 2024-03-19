<!-- TRANSLATED by md-translate -->
# Changelog 1.5.1

# Changelog 1.5.1

[Neue Funktion] Neue zusätzliche Lizenzform "Multi-tenant buyers licence"<br>
[Verbesserung]  Schrank-Statistik lässt sich nicht einklappen<br>
[Verbesserung]  JDisc: weitere Beschleunigungen beim Handling des VLAN Imports<br>
[Verbesserung]  Formfaktor hinter Objekten in Schrank-Kategorie darstellen<br>
[Verbesserung]  Beschleunigung des JDisc Imports über den controller (php-cli)<br>
[Verbesserung]  Beschleunigte Filterung nach Benutzer im Logbuch bei sehr hoher Anzahl an Einträgen<br>
[Verbesserung]  Security: config.inc.php backups könnten per Brute-Force ausgelesen werden<br>
[Änderung]      Umbenennung "Desktop" nach "Client" in englischer Übersetzung<br>
[Bug]           Kategorie "Service": Beschreibung wird nicht gespeichert<br>
[Bug]           Kategorie "Grafikkarte" auf der Übersichtsseite erzeugt gleichzeitig bei Neuanlage eines Objekts einen Eintrag in Kategorie "Grafikkarte".<br>
[Bug]           Recht auf Objekte unterhalb einer Lokation verursacht unter Umständen sehr lange Ladezeiten<br>
[Bug]           Fehler beim Purgen eines Objekts, wenn Objektliste gefiltert wurde<br>
[Bug]           Fehler bei Validierung von IP Adressen über die API<br>
[Bug]           Neue Bookmarks in my-doit zeigen lediglich auf das Dashboard<br>
[Bug]           Fehler beim Zuweisen einer Hostadresse zu einem Port über die i-doit API<br>
[Bug]           Fehler bei Erstellung einer Hostadresse über i-doit API<br>
[Bug]           Fehler im Report-Manager bei Verwendung des Attributs "Hostadresse" als verknüpftes Attribut.<br>
[Bug]           Verwaltungsfunktion "Nicht zugewiesene Beziehungen entfernen" leert den Inhalt der Kategorie "Instanz / Oracle-Datenbank"<br>
[Bug]           Beim CSV-Import werden die Inhalte der Kategorie Hostadresse nicht importiert<br>
[Bug]           Kategorie "Logische Ports": Bei Neuanlage existiert bereits eine Layer-2-Netzzuordnung. Die Port-Zuweisung ist nicht möglich<br>
[Bug]           Objekte aus Template erstellen erzeugt "Illegal string Offset"-Meldung<br>
[Bug]           Zustands-Auswahl in Workflow-Typen zeigt in allen Zuständen die Anzahl der Einträge des aktuell ausgewählten Zustands<br>
[Bug]           JDisc: Beim Import werden keine Clustermitglieder aus dem Cluster entfernt<br>
[Bug]           Die Richtung einer Beziehung lässt sich nicht ändern<br>
[Bug]           Report mit "Verbunden mit Anschluss"-Bedingung erzeugt Fehlermeldung<br>
[Bug]           CMDB-Explorer Profil Filter funktioniert nicht einwandfrei (bei Beziehungstypen)<br>
[Bug]           Nach Update auf i-doit 1.5 werden die QR-Code-Einstellungen verworfen<br>
[Bug]           JDisc: Beim Modus 'Aktualisieren' werden neue Hostadressen mit einem Falschen Wert übernommen.<br>
[Bug]           Ein Objekt kann nicht aus der IP-Liste heraus zugeordnet werden<br>
[Bug]           Report Manager: Bei Erstellung eines Reports mit dynamischen Attributen (z.B. "Freie Lizenzen") wird eine Fehlermeldung dargestellt<br>
[Bug]           In Objektliste wird in der Spalte "Betriebssystem" nicht das Betriebssystem angezeigt.<br>
[Bug]           Wenn die automatische Zuweisung im CSV-Import deaktiviert wird, kann kein Mapping vorgenommen werden<br>
[Bug]           Automatische Zuweisung beim CSV-Import wird beim Mapping nicht ausgeführt.<br>
[Bug]           Bei der automatischen Inventar-Nummer darf der Platzhalter %COUNTER% nicht runterzählen wenn Objekte vom selben Typen gelöscht werden.<br>
[Bug]           Kategorie Listener filtert archivierte Softwarezuweisungen nicht heraus<br>
[Bug]           Kategorie Betriebssystem wird nicht dupliziert<br>
[Bug]           Software-Browser in Kategorie "Installation" zeigt nur Objekte aus "Infrastruktur" und "Andere" an<br>
[Bug]           Beim Anlegen einer Hostadresse stehen die Ports nicht zur Verfügung<br>
[Bug]           Wird ein Eintrag in einer Kategorie innerhalb eines Kategorieordners gespeichert, wird der Ordner geschlossen<br>
[Bug]           Layer-2-Netzzuordnung öffnet leeren Port Browser<br>
[Bug]           SQL-Fehler beim Bearbeiten der Objektliste<br>
[Bug]           Übersichtsseite wird nicht komplett gespeichert wenn die Kategorien "Softwarezuweisung" und "Betriebssystem" auch auf der Übersichtsseite sind.<br>
[Bug]           Kategorie "Arbeitsplatzsystem" wird auf der Übersichtsseite nicht gespeichert<br>
[Bug]           QinQ-Kategorien sind in der Objekttypkonfiguration nicht editierbar<br>
[Bug]           Objekttyp Konstanten können mehrfach vorkommen<br>
[Bug]           Apache Module Check führt zu Fehler bei Setup / Update / Systemübersicht, sofern PHP per fcgi eingebunden wird<br>
[Bug]           Routing-Kategorie auf Übersichtsseite wird nicht gespeichert<br>
[Bug]           Beim JDisc Import werden Interfaces unter Netzwerk nicht aktualisiert.<br>
[Bug]           Nach Duplizieren ist Layer-2-Netz mit Root-Lokation verbunden<br>
[Bug]           Dienste-Kategorie wird nicht dupliziert<br>
[Bug]           Ladebalken verbleibt in leerer Portübersicht<br>
[Bug]           Die Funktion "apache_get_modules()" ist nicht immer verfügbar und wirft Fehler im Update<br>
[Bug]           Cache/Datenbank -> unfertige/archivierte/gelöschte Kategorien entfernen erzeugt SQL-Fehlermeldung<br>
[Bug]           Report View Beziehung "layer-3 network plan" gibt Fehlermeldung aus<br>
[Bug]           Beim Anlegen eines APs wird die Kategorie WiFi-Gerät nicht gespeichert<br>
[Bug]           Beim Installieren einer Subskriptions-Lizenz im Admin Center wird eine Fehlermeldung ausgegeben<br>
[Bug]           SQL-Fehler bei der Standortzuweisung und/oder Standortkorrektur<br>
[Bug]           Bei expandiertem Menübaum (Vollbild) kann die ursprüngliche Breite weiterhin verändert werden<br>
[Bug]           Bei Lizenzfehlern werden im Admin Center Sprachkonstanten angezeigt<br>
[Bug]           Berechnung des nächstmöglichen Kündigungsdatums bei Verträgen berücksichtigt keine Schaltjahre<br>

[Nouvelle fonction] Nouvelle forme de licence supplémentaire "Multi-tenant buyers licence"<br>
[Amélioration] Les statistiques de l'armoire ne peuvent pas être repliées<br>.
[Amélioration] JDisc : nouvelles accélérations dans la gestion de l'importation VLAN<br>
[Amélioration] Afficher le facteur de forme derrière les objets dans la catégorie armoire<br>
[Amélioration] Accélération de l'importation JDisc via le contrôleur (php-cli)<br>
[Amélioration] Accélération du filtrage par utilisateur dans le journal en cas de très grand nombre d'entrées<br>.
[Amélioration] Sécurité : les sauvegardes de config.inc.php pourraient être lues par force brute<br>.
[modification] Changement du nom "Desktop" en "Client" dans la traduction anglaise<br>
[Bug] Catégorie "Service" : la description n'est pas enregistrée<br>.
[Bug] La catégorie "Carte graphique" sur la page d'aperçu crée simultanément une entrée dans la catégorie "Carte graphique" lors de la création d'un nouvel objet.<br>
[Bug] Le droit d'accès aux objets situés en dessous d'une localisation peut entraîner des temps de chargement très longs<br>.
[Bug] Erreur lors de la purge d'un objet si la liste des objets a été filtrée<br>.
[Bug] Erreur de validation des adresses IP via l'API<br>.
[Bug] Les nouveaux bookmarks dans my-doit ne pointent que vers le dashboard<br>
[Bug] Erreur lors de l'attribution d'une adresse d'hôte à un port via l'API i-doit<br>
[Bug] Erreur lors de la création d'une adresse d'hôte via l'API i-doit<br>
[Bug] Erreur dans le gestionnaire de rapports lors de l'utilisation de l'attribut "adresse d'hôte" comme attribut lié.<br>
[Bug] La fonction de gestion "Supprimer les relations non attribuées" vide le contenu de la catégorie "Instance / Base de données Oracle"<br>.
[Bug] Lors de l'importation CSV, le contenu de la catégorie Adresse de l'hôte n'est pas importé<br>.
[Bug] Catégorie "Ports logiques" : Lors de la création, il existe déjà une attribution de réseau de couche 2. L'attribution des ports n'est pas possible<br>.
[Bug] Créer des objets à partir d'un modèle génère un message "Illegal string Offset"<br>.
[Bug] La sélection d'état dans les types de workflow affiche dans tous les états le nombre d'entrées de l'état actuellement sélectionné<br>.
[Bug] JDisc : Lors de l'importation, les membres du cluster ne sont pas supprimés du cluster<br>.
[Bug] Impossible de changer la direction d'une relation<br>.
[Bug] Le rapport avec la condition "Connecté à la connexion" génère un message d'erreur<br>.
[Bug] Le filtre de profil CMDB-Explorer ne fonctionne pas correctement (pour les types de relations)<br>
[Bug] Après la mise à jour vers i-doit 1.5, les paramètres du code QR sont rejetés<br>.
[Bug] JDisc : En mode 'Actualiser', les nouvelles adresses d'hôtes sont reprises avec une valeur incorrecte.<br>
[Bug] Impossible d'assigner un objet à partir de la liste des IP<br>.
[Bug] Report Manager : un message d'erreur est affiché lors de la création d'un rapport avec des attributs dynamiques (par ex. "Licences libres")<br>.
[Bug] Dans la liste des objets, le système d'exploitation n'est pas affiché dans la colonne "Système d'exploitation"<br>.
[Bug] Si l'attribution automatique est désactivée lors de l'importation CSV, aucun mappage ne peut être effectué<br>.
[Bug] L'affectation automatique dans l'importation CSV n'est pas exécutée lors du mapping.<br>
[Bug] Lors du numéro d'inventaire automatique, le caractère générique %COUNTER% ne doit pas être décrémenté lorsque des objets du même type sont supprimés.<br>
[Bug] Le listener de catégorie ne filtre pas les attributions de logiciels archivées<br>.
[Bug] La catégorie Système d'exploitation n'est pas dupliquée<br>.
[Bug] Le navigateur de logiciels dans la catégorie "Installation" n'affiche que les objets de "Infrastructure" et "Autres"<br>.
[Bug] Les ports ne sont pas disponibles lors de la création d'une adresse d'hôte<br>.
[Bug] Si une entrée de catégorie est enregistrée dans un dossier de catégorie, le dossier est fermé<br>.
[Bug] Le mappage réseau de la couche 2 ouvre un navigateur de ports vide<br>.
[Bug] Erreur SQL lors de l'édition de la liste des objets<br>.
[Bug] La page d'aperçu n'est pas enregistrée complètement si les catégories "Attribution de logiciel" et "Système d'exploitation" sont également sur la page d'aperçu.<br>
[Bug] La catégorie "Système de poste de travail" n'est pas enregistrée sur la page d'aperçu<br>.
[Bug] Les catégories QinQ ne sont pas éditables dans la configuration du type d'objet<br>.
[Bug] Les constantes de type d'objet peuvent apparaître plusieurs fois<br>.
[Bug] Apache Module Check provoque une erreur lors du setup / de la mise à jour / de l'aperçu du système, si PHP est intégré par fcgi<br>.
[Bug] La catégorie de routage sur la page d'aperçu n'est pas enregistrée<br>.
[Bug] Lors de l'importation de JDisc, les interfaces ne sont pas mises à jour sous Réseau<br>.
[Bug] Le réseau de couche 2 est connecté à l'emplacement racine après la duplication<br>.
[Bug] La catégorie de services n'est pas dupliquée<br>.
[Bug] La barre de chargement reste dans l'aperçu des ports vides<br>.
[Bug] La fonction "apache_get_modules()" n'est pas toujours disponible et provoque des erreurs dans les mises à jour<br>.
[Bug] Cache/base de données -> supprimer les catégories inachevées/archivées/supprimées génère un message d'erreur SQL<br>.
[Bug] La relation Report View "layer-3 network plan" génère un message d'erreur<br>.
[Bug] Lors de la création d'un point d'accès, la catégorie Périphérique WiFi n'est pas enregistrée<br>.
[Bug] Un message d'erreur est affiché lors de l'installation d'une licence d'abonnement dans Admin Center<br>.
[Bug] Erreur SQL lors de l'attribution d'un site et/ou de la correction d'un site<br>.
[Bug] Lorsque l'arborescence du menu est développée (plein écran), la largeur initiale peut toujours être modifiée<br>.
[Bug] En cas d'erreur de licence, les constantes de langue sont affichées dans l'Admin Center<br>.
[Bug] Le calcul de la date de résiliation la plus proche pour les contrats ne prend pas en compte les années bissextiles<br>.