<!-- TRANSLATED by md-translate -->
# Changelog 1.8.2

# Changelog 1.8.2

[Verbesserung]  Report Manager: Hinzufügen einer Standard Sortierung der Reports<br>
[Verbesserung]  Kabellänge kann in Metern angegeben werden<br>
[Verbesserung]  Erweiterung des CSV Imports um die Verknüpfung von Interfaces via Objekt-/Interface-Namen<br>
[Verbesserung]  Erweiterung des CSV Imports um die Identifizierungsfelder: Mailadresse, LDAP DN, MAC-Adresse, Service Tag<br>
[Verbesserung]  Neuer Button in der Verwaltung um "Zeilenklick" für alle definierten Objektlisten zu forcieren<br>
[Verbesserung]  Benutzerdefinierte Kategorien in CMDB-Explorer Profilen verfügbar<br>
[Verbesserung]  Platzhalter / Variablen werden per Klick in das entsprechende Feld geschrieben<br>
[Verbesserung]  Neues Recht "Kategorie(n) in von mir erstellten Objekten"<br>
[Verbesserung]  Sicherheit: Verbesserte Verwaltung der Session ID (Verhinderung eines Session-Fixation-Angriffs)<br>
[Bug]           JDisc Import: Neu gescannte Monitore wurden über den Import nicht ins i-doit übertragen<br>
[Bug]           Falsche Fehlermeldung beim hochladen einer XML Import Datei<br>
[Bug]           Listeneditierung von Standorten zeigt zu kleine Felder<br>
[Bug]           JDisc Import: Der JDisc Import (Weboberfläche) verwendet als Datenquelle immer den JDisc Standard Server anstelle des ausgewählten Servers<br>
[Bug]           Service Filter werden doppelt angelegt, wenn der Internet Explorer 11 verwendet wird<br>
[Bug]           Archivierte Clustermitglieder werden in der Listenansicht dargestellt<br>
[Bug]           Logbucheinträge nach CSV-Import in die Modell-Kategorie zeigen nicht den ursprünglichen Wert<br>
[Bug]           Objekte in der Listenansicht innerhalb der Kategorie Objektgruppe können nicht direkt aufgerufen werden<br>
[Bug]           In der Spezifischen Kategorie "Netz" wurde für das Objekt "Global v4" ein falscher CIDR Suffix angezeigt<br>
[Bug]           JDisc Import: Lizenzobjekte werden immer wieder neu erstellt sobald der Unique Check auf Objekt-Titel aktiv ist<br>
[Bug]           Anzeigefehler bei der Druckansicht über den CMDB-Explorer in Firefox<br>
[Bug]           Default Gateway-Wert wird zurückgesetzt, wenn ein ein anderes Objekt desselben Subnetzes bearbeitet wird<br>
[Bug]           Attribute und Attributwerte werden auf unterschiedlichen Höhen dargestellt<br>
[Bug]           Filter setzt nach kurzer Zeit die Eingabeposition zurück<br>
[Bug]           Bei erstmaliger Konfiguration einer Objektliste wird die Option "Filter ermöglicht die Suche nach Teilstrings" nicht standardmäßig aktiviert<br>
[Bug]           Report Manager: Bei Klick auf "Online Repository" wird die Spracheinstellung auf Englisch umgestellt<br>
[Bug]           Unter gewissen Umständen wird die i-doit Session nach 5 Minuten beendet<br>
[Bug]           Report Manager Bedingung Standort Einschub Rückseite filtert nicht korrekt<br>
[Bug]           Link in Benachrichtigungen falsch<br>
[Bug]           Fehlerhafte Beschriftung des Buttons "GEO Koordinaten übernehmen" in der Standort-Kategorie<br>
[Bug]           Validierung von Telefondaten mit regulären Ausdrücken speichert trotz fehlgeschlagener Validierung<br>
[Bug]           Listeneditierung Spaltenbreite wird nicht optimal genutzt<br>
[Bug]           Benachrichtigungen bei Zertifikatablauf funktionieren nicht mehr<br>
[Bug]           Abfrage Editor Bedingung prüft nun bei Multi-Dialog+ Feldern nach korrektem Inhalt<br>
[Bug]           Report Manager: Logischer Standort eines Standorts kann nicht abgefragt werden<br>
[Bug]           Report Manager: Hostadresse lässt sich nicht auswählen<br>
[Bug]           Suchindex: Reindex nimmt keine DialogPlus Einträge auf<br>
[Bug]           Benutzerdefinierte Kategorie: HTML-Eintragungen machen Bearbeitungsansicht kaputt<br>
[Bug]           Report zeigt Objekte falscher Standorte unterhalb eines Standortes an<br>
[Bug]           Reports: Feld "Eingekauft bei" nicht mehr als Bedingung auswertbar<br>
[Bug]           Dateisystem Cache schreibt Dateien nicht Mandantenabhängig<br>
[Bug]           Pflichtfelddefinition für das Attribut "Standort" funktioniert nicht<br>
[Bug]           Quick Configuration Wizard: Falsche Schaltflächen bei der Neuanlage eines Objekttyps<br>
[Bug]           Listenansicht CSV Export liefert leere CSV Dateien<br>
[Bug]           Falsch erzeugtes SQL bei der verwendung von IS NULL/IS NOT NULL im Report Manager<br>
[Bug]           Als Service Komponenten können im Report Manager nur Infrastruktur-Objekte gewählt werden<br>
[Bug]           Suggestion in globaler Suche funktioniert nicht immer richtig<br>
[Bug]           Deep Search zeigt auch Beziehungsobjekte<br>
[Bug]           Fehler beim aktivieren des Check-MK Moduls: class ‚isys_module_check_mk does not have a method ‚activate<br>
[Bug]           Report ausführen löst einen Timeout aus (Maximum execution time of 600 seconds exceeded)<br>
[Bug]           E_ERROR: Call to a member function get_paths() on a non-object<br>
[Bug]           Beispiel für das Datumsformat entspricht nicht dem tatsächlichen Datumsformat<br>
[Bug]           Objektlisten-Konfiguration anderen Benutzern zuweisen bleibt ohne Rückmeldung<br>
[Bug]           Bearbeiten der Kategorie "Service" über die Listeneditierung bewirkt, dass der Inhalt von "Servicebeschreibung intern" auf das Feld "Servicebeschreibung extern" übertragen wird<br>
[Bug]           Überflüssige Einträge in den Experteneinstellungen<br>
[Bug]           Falsches Datumsformat bei automatisch gefülltem Datum<br>
[Bug]           LDAP-Sync: Gelöschte Benutzer werden nicht archiviert<br>
[Bug]           Report Manager: Bei Konditionen mit verknüpften Objekten werden die Standortpfade nicht angezeigt<br>
[Bug]           Nach einem Session Timeout und re-login erscheint die Meldung "Database error : MySQLi error: Lost link to database. (Unknown error)"<br>
[Bug]           Bei Als-Standard-definieren in Objektlisten-Definition wird nicht jedes Setting übernommen<br>
[Bug]           Hoher Speicherverbrauch bei LDAP Import<br>
[Bug]           JDisc Import: Das importieren eines Objektes über die JDisc Discovery Kategorie geschieht nicht anhand der Attribute des Objekt-Matching Profils<br>
[Bug]           Ändern der Höheneinheiten bei Racks über die Übersichtsseite<br>
[Bug]           Fehlermeldung nach Klick auf Report unter "Report Views" mit "Ansehen"-Recht<br>
[Bug]           Zuordnung DNS Server zu Layer 3 Netz<br>
[Bug]           CSV Import Zuordnung Netzwerk Port Verknüpftes Interface doppelt<br>
[Bug]           Verkabelungsimport: Verkabelungskette erweitern zeigt keine Felder an<br>
[Bug]           Report Manager: Falsche Währung wird ausgegeben<br>
[Bug]           Berücksichtigung der Beziehungsmaster-Einstellung beim Neugenerieren der Beziehungen unter "Cache / Datenbank"<br>
[Bug]           Report Manager: Servicezuweisung wird mehrfach angezeigt obwohl nur eine vorhanden ist<br>
[Bug]           Report gibt bei spezieller Auswahl-Konstellation die Bezeichnung von Anschlüssen falsch aus<br>
[Bug]           Default-Template übernimmt beim JDisc-Import nur Import-Kategorien<br>
[Bug]           Datumsformat wird im falschen Format dargestellt<br>
[Bug]           Verlinkung zu "Extras - Export" und "Extras - Import" ist inkorrekt bei exklusiver Rechtevergabe auf "Export" bzw. "Import"<br>
[Bug]           Darstellung des zugewiesenen Netzes erlaubt es nicht zu lesen, welches Netz ausgewählt wurde<br>
[Bug]           Kategorie "Alle Tickets" zeigt keine RT-Tickets an<br>
[Bug]           Auswahl der Objekte im Objektbrowser durch die Schaltfläche "Seite" nicht möglich<br>
[Bug]           Beim Aktualisieren eines Moduls für alle Mandanten kommt es zu einer Datenbankfehlermeldung wenn einer der Mandanten das zu aktualisierende Modul noch nicht installiert hat<br>
[Bug]           Seitennavigation in Objekt-Browsern funktioniert erst, nachdem vertikal gescrollt wurde<br>
[Bug]           "UND/ODER"-Feld in Reports verrutsch bei Auswahl des CMDB-Status<br>
[Bug]           CSV-Export von Objekt-Listen exportiert Umlaute inkorrekt<br>
[Bug]           Import der Adressvergabe (DHCP, statisch, etc) über den CSV-Import nicht möglich<br>
[Bug]           Fehlermeldung in Excel beim Öffnen einer Datei aus CSV-Export<br>
[Bug]           Fehlermeldung und Datenlücken bei Einspielen eines Profils im QCW<br>
[Bug]           Attribute Breiten- und Längengrad sind nicht im Report-Manager verfügbar<br>
[Bug]           Module lassen sich im AdminCenter nicht löschen/deinstallieren<br>
[Bug]           Inhalte aus dem Beschreibungsfeld der Allgemein Kategorie werden in der Suche erst nach einmaligem Bearbeiten gefunden<br>
[Bug]           Neu angelegte IP-Adressen werden über die Suche nicht gefunden<br>
[Bug]           Unlesbare Verkabelungsansicht bei Switchen über mehrere Hops<br>
[Bug]           CSV-Import identifiziert Objekte, obwohl keine Identifizierung konfiguriert ist<br>
[Bug]           Vertragsbeginn und Vertragsende werden in Benachrichtigungen nicht übermittelt<br>

[Amélioration] Report Manager : Ajout d'un tri par défaut des rapports<br>.
[Amélioration] Possibilité d'indiquer la longueur des câbles en mètres<br>.
[Amélioration] Extension de l'importation CSV pour lier les interfaces via les noms d'objets/interfaces<br>.
[Amélioration] Extension de l'importation CSV avec les champs d'identification : Adresse mail, DN LDAP, adresse MAC, Service Tag<br>.
[Amélioration] Nouveau bouton dans l'administration pour forcer le "clic de ligne" pour toutes les listes d'objets définies<br>.
[Amélioration] Catégories définies par l'utilisateur disponibles dans les profils CMDB-Explorer<br>
[Amélioration] Les caractères de remplacement / variables sont écrits dans le champ correspondant par un simple clic<br>.
[Amélioration] Nouveau droit "Catégorie(s) dans les objets que j'ai créés"<br>.
[Amélioration] Sécurité : meilleure gestion de l'ID de session (prévention d'une attaque par fixation de session)<br>
[Bug] Importation JDisc : les moniteurs nouvellement scannés n'étaient pas transférés dans i-doit via l'importation<br>.
[Bug] Message d'erreur erroné lors du téléchargement d'un fichier XML importé<br>.
[Bug] L'édition de listes de sites affiche des champs trop petits<br>.
[Bug] JDisc Import : L'importation JDisc (interface web) utilise toujours le serveur JDisc Standard comme source de données au lieu du serveur sélectionné<br>.
[Bug] Les filtres de service sont créés en double lors de l'utilisation d'Internet Explorer 11<br>.
[Bug] Les membres de cluster archivés sont affichés dans la vue en liste<br>.
[Bug] Les entrées du journal après l'importation CSV dans la catégorie modèle n'affichent pas la valeur d'origine<br>.
[Bug] Les objets de la vue en liste dans la catégorie Groupe d'objets ne peuvent pas être appelés directement<br>.
[Bug] Dans la catégorie spécifique "Réseau", un suffixe CIDR incorrect était affiché pour l'objet "Global v4"<br>.
[Bug] Importation JDisc : les objets de licence sont toujours recréés dès que le contrôle unique sur le titre de l'objet est activé<br>.
[Bug] Erreur d'affichage lors de l'aperçu avant impression via l'explorateur CMDB dans Firefox<br>.
[Bug] La valeur de la passerelle par défaut est réinitialisée lorsqu'un autre objet du même sous-réseau est édité<br>.
[Bug] Les attributs et les valeurs d'attributs sont affichés à des hauteurs différentes<br>.
[Bug] Le filtre réinitialise la position de saisie après un court laps de temps<br>.
[Bug] Lors de la première configuration d'une liste d'objets, l'option "Le filtre permet la recherche de sous-chaînes" n'est pas activée par défaut<br>.
[Bug] Report Manager : en cliquant sur "Online Repository", le paramètre de langue passe à l'anglais<br>.
[Bug] Dans certaines circonstances, la session i-doit se termine après 5 minutes<br>.
[Bug] Condition du gestionnaire de rapports : l'insertion de l'arrière du site ne filtre pas correctement<br>.
[Bug] Lien dans les notifications incorrect<br>
[Bug] Légende erronée du bouton "Reprendre les coordonnées GEO" dans la catégorie des sites<br>.
[Bug] La validation des données téléphoniques avec des expressions régulières enregistre malgré l'échec de la validation<br>.
[Bug] L'édition de liste n'utilise pas de manière optimale la largeur des colonnes<br>.
[Bug] Les notifications d'expiration de certificat ne fonctionnent plus<br>.
[Bug] L'éditeur de requêtes conditionnelles vérifie désormais le contenu correct des champs multi-dialogues+<br>.
[Bug] Report Manager : Impossible d'interroger l'emplacement logique d'un site<br>
[Bug] Report Manager : impossible de sélectionner l'adresse de l'hôte<br>.
[Bug] Index de recherche : Reindex n'accepte pas les entrées DialogPlus<br>
[Bug] Catégorie définie par l'utilisateur : les entrées HTML cassent l'affichage d'édition<br>
[Bug] Le rapport affiche des objets de faux sites sous un site<br>.
[Bug] Rapports : le champ "Acheté chez" n'est plus évaluable comme condition<br>.
[Bug] Le cache du système de fichiers n'écrit pas les fichiers en fonction du client<br>.
[Bug] La définition du champ obligatoire pour l'attribut "Lieu" ne fonctionne pas<br>.
[Bug] Assistant de configuration rapide : boutons incorrects lors de la création d'un nouveau type d'objet<br>
[Bug] La vue en liste de l'exportation CSV renvoie des fichiers CSV vides<br>
[Bug] SQL généré de manière incorrecte lors de l'utilisation de IS NULL/IS NOT NULL dans le Report Manager<br>.
[Bug] Seuls les objets d'infrastructure peuvent être sélectionnés comme composants de service dans le Report Manager<br>.
[Bug] La suggestion dans la recherche globale ne fonctionne pas toujours correctement<br>.
[Bug] Deep Search affiche aussi les objets de relation<br>.
[Bug] Erreur lors de l'activation du module Check-MK : class 'isys_module_check_mk does not have a method 'activate<br>
[Bug] L'exécution d'un rapport déclenche un timeout (temps d'exécution maximum de 600 secondes dépassé)<br>
[Bug] E_ERROR : Appel à une fonction membre get_paths() sur un non-objet<br>.
[Bug] L'exemple de format de date ne correspond pas au format de date réel<br>.
[Bug] Attribuer la configuration de la liste d'objets à d'autres utilisateurs reste sans retour<br>
[Bug] Modifier la catégorie "Service" via l'édition de liste provoque le transfert du contenu de "Description de service interne" vers le champ "Description de service externe"<br>.
[Bug] Entrées superflues dans les paramètres des experts<br>.
[Bug] Format de date erroné pour une date remplie automatiquement<br>
[Bug] Synchronisation LDAP : les utilisateurs supprimés ne sont pas archivés<br>.
[Bug] Report Manager : les chemins d'accès aux sites ne sont pas affichés pour les conditions avec des objets liés<br>.
[Bug] Après un timeout de session et une reconnexion, le message "Database error : MySQLi error : Lost link to database. (Unknown error)"<br>
[Bug] Lors de la définition comme standard dans la définition de la liste d'objets, tous les settings ne sont pas appliqués<br>.
[Bug] Consommation de mémoire élevée lors de l'importation LDAP<br>.
[Bug] Importation JDisc : L'importation d'un objet via la catégorie JDisc Discovery ne se fait pas en fonction des attributs du profil de correspondance de l'objet<br>.
[Bug] Modification des unités de hauteur des racks via la page d'aperçu<br>.
[Bug] Message d'erreur après avoir cliqué sur un rapport sous "Report Views" avec droit de "consultation"<br>.
[Bug] Affectation du serveur DNS au réseau de couche 3<br>
[Bug] Importation CSV attribution port réseau interface liée en double<br>
[Bug] Importation de câblage : étendre la chaîne de câblage n'affiche pas de champs<br>
[Bug] Gestionnaire de rapports : mauvaise devise affichée<br>.
[Bug] Prise en compte du paramétrage du maître des relations lors de la régénération des relations sous "Cache / Base de données"<br>
[Bug] Report Manager : l'attribution de service est affichée plusieurs fois alors qu'il n'y en a qu'une<br>.
[Bug] Le rapport n'affiche pas correctement les noms des connexions dans une constellation de sélection spéciale<br>.
[Bug] Le modèle par défaut ne prend en compte que les catégories d'importation lors de l'importation de JDisc<br>.
[Bug] Le format de la date n'est pas représenté dans le bon format<br>.
[Bug] Le lien vers "Outils - Exportation" et "Outils - Importation" est incorrect si les droits sont attribués exclusivement à "Exportation" ou "Importation"<br>.
[Bug] La représentation du réseau attribué ne permet pas de lire quel réseau a été sélectionné<br>.
[Bug] La catégorie "Tous les tickets" n'affiche pas les tickets RT<br>.
[Bug] Impossible de sélectionner les objets dans le navigateur d'objets en cliquant sur le bouton "Page"<br>.
[Bug] Lors de la mise à jour d'un module pour tous les clients, un message d'erreur de base de données apparaît si l'un des clients n'a pas encore installé le module à mettre à jour<br>.
[Bug] La navigation dans les pages des navigateurs d'objets ne fonctionne qu'après un défilement vertical<br>.
[Bug] Le champ "ET/OU" dans les rapports glisse lors de la sélection de l'état de la CMDB<br>.
[Bug] L'export CSV des listes d'objets exporte incorrectement les trémas<br>.
[Bug] Impossible d'importer l'attribution d'adresses (DHCP, statiques, etc.) via l'importation CSV<br>.
[Bug] Message d'erreur dans Excel lors de l'ouverture d'un fichier à partir de l'export CSV<br>
[Bug] Message d'erreur et données manquantes lors de l'importation d'un profil dans le QCW<br>
[Bug] Les attributs de latitude et de longitude ne sont pas disponibles dans le gestionnaire de rapports<br>.
[Bug] Impossible de supprimer/désinstaller des modules dans AdminCenter<br>.
[Bug] Le contenu du champ de description de la catégorie générale n'est trouvé dans la recherche qu'après avoir été modifié une fois<br>.
[Bug] Les adresses IP nouvellement créées ne sont pas trouvées dans la recherche<br>.
[Bug] Vue illisible du câblage pour les commutateurs sur plusieurs sauts<br>.
[Bug] L'importation CSV identifie des objets alors qu'aucune identification n'est configurée<br>.
[Bug] Le début et la fin du contrat ne sont pas transmis dans les notifications<br>.