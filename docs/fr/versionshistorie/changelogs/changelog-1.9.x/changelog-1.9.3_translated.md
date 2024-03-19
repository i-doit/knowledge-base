<!-- TRANSLATED by md-translate -->
# Changelog 1.9.3

# Changelog 1.9.3

[Verbesserung]  Option zum UTF8 dekodieren exportierter Check_MK Dateien<br>
[Verbesserung]  Neue Konfiguration für den Umgang bei Validierungsfehlern während der Duplizierung von Objekten<br>
[Verbesserung]  Verbesserung der Suchindexierung zur Erhöhung der Performance<br>
[Verbesserung]  Neue Systemeinstellung hinzugefügt "Interaktion zwischen 'Logischer Standort' und 'Standort' aktivieren?"<br>
[Verbesserung]  Erweiterung der Kategorie Zertifikat<br>
[Bug]           Stacking: Stacks mit nur einem Mitglied können nicht ausgelesen werden<br>
[Bug]           Objektliste: Das Attribut "Läuft auf" aus der Kategorie "Clusterdienstzuweisung" verursacht eine Fehlermeldung<br>
[Bug]           Datumsfelder können nicht gespeichert werden wenn kein Datumsformat in den Benutzereinstellungen definiert ist<br>
[Bug]           Fehlerhafte Sortierung bei zuweisen von Servern in einem Rack<br>
[Bug]           Überschrift von Datumsfeldern in einer Benutzerdefinierten Kategorie werden bei einem Export nicht korrekt ausgegeben<br>
[Bug]           Lösen des Attributs DNS-Server in der Kategorie Netz führt zu MySQL Syntax error im Objekt Browser<br>
[Bug]           Layer-3 Netz, Statische IP-Addressvergabe inkorrekt wenn ein Reservierter DHCP-Bereich konfiguriert ist<br>
[Bug]           Listen: Archivierte Nutzer werden in Kontaktzuweisungen angezeigt<br>
[Bug]           Sortieren nach Modell in Objektlisten nicht möglich<br>
[Bug]           OCS-Import: Import Abbruch nach ersten nicht validen Objekt<br>
[Bug]           Fehler beim Import via CSV einer IP-Adresse mit führender Nullstelle in beliebigem Oktett<br>
[Bug]           Rechtesystem: Bei den Rechten "Kategorie in Objekt", "- Objekttyp" und "- in Objekten unterhalb eines Standortes" ist die Auswahl für die Kategorien bei Änderung nicht aktiv<br>
[Bug]           Kategorie "LDAP" wird im Menübaum trotz bestehenden Daten als inaktiv dargestellt<br>
[Bug]           Automatisches Löschen des physikalischen Standorts bei Vergabe eines logischen Standorts<br>
[Bug]           Kategorie Buchhaltung: Das ersetzen der Automatischen Inventarnummer bei mehreren Objekttypen wird beim importieren nicht korrekt ausgeführt<br>
[Bug]           Kategorie Clustermitgliedschaften: Wird eine Zuweisung entfernt wird die dazugehörige Beziehung nicht mit entfernt<br>
[Bug]           Admin-Center: Beim hinzufügen eines neuen Mandanten werden Umlaute nicht korrekt dargestellt<br>
[Bug]           Suche findet nach Massenänderung Inhalte aus dem Logbuch<br>
[Bug]           Präfix für automatisch erstellte Kabel wird ignoriert<br>
[Bug]           CSV-Import: Import der Kategorie Kontaktzuweisung erzeugt einen leeren Eintrag wenn dieser in der CSV-Datei nicht gesetzt ist<br>
[Bug]           Validierung: Besteht eine Validierung für die Kategorie Stammdaten (Personen), wirkt diese nur für die Ordnerkategorie Personen<br>
[Bug]           LDAP-Sync setzt alle gefundenen User bei jedem Durchlauf kurzzeitig in den Zustand "Normal"<br>
[Bug]           Fehler beim Verrechten der Kategorie "Gastsysteme"<br>
[Bug]           Verschieben des Objekttyps "Kabel" in eine andere Objekttypgruppe bewirkt, dass Kabel im Kabelbrowser nicht mehr ausgewählt werden können<br>
[Bug]           Import aller Ports über den JDisc-Import, selbst bei konfiguriertem Port Filter<br>
[Bug]           Fehler bei der Verwendung eines Portfilters im JDisc-Profil<br>
[Bug]           Fusszeile des AdminCenters vor und nach dem Login nicht identisch<br>
[Bug]           Kategorie Passwort wird in einem duplizierten Objekt nicht entschlüsselt<br>
[Bug]           Standort von duplizierten Objekten wird nicht korrekt übertragen<br>
[Bug]           WYSIWYG-Funktionen stehen innerhalb der Kategorien nur teilweise zur Verfügung<br>
[Bug]           Benutzerdefinierte Kategorien: Feldtyp "Dateibrowser" funktioniert nicht<br>
[Bug]           Report Manager: Bei bestimmten Zeichenanordnungen innerhalb des Attributes "Standortpfad" kommt es zu keinem Ergebnis<br>
[Bug]           Inkonsistentes Verhalten bei Eingabe und Auswahl und Anzeige von Suchergebnissen<br>
[Bug]           Objektliste: Falsche Zählung von vergebenen IP-Adressen<br>
[Bug]           Verwendung von Inhalten mit [...]LC_[...] nicht möglich<br>
[Bug]           Benachrichtigungen: Lizenzen werden trotz archiviertem oder gelöschtem Lizenzschlüssel in E-Mails angezeigt<br>
[Bug]           Logbuch: Listenansicht zeigt Alarmlevel hoch (3) nicht an<br>
[Bug]           CSV Import: Import per Controller schlägt fehl, wenn MultiValue-Option "comma" verwendet wird<br>
[Bug]           Löschen von geteiltem Dialog+ in benutzerdefinierten Kategorien löscht Einträge für alle anderen Kategorien<br>
[Bug]           Backslash aus Objekttiteln wird oft falsch ausgegeben<br>
[Bug]           Objektliste: Fehler beim Sortieren des Attributs "Kategorie"<br>
[Bug]           Beim Aufruf von Extras > CMDB > Import erscheint eine Fehlermeldung<br>
[Bug]           Report Manager erzeugt falsche Abfragen zu Objektbeziehungen<br>
[Bug]           Objekt-Browser öffnet unter bestimmten Voraussetzungen einen inaktiven Tab<br>
[Bug]           Verwendung von bestehenden Kabeln im Verkabelungsimport nicht möglich<br>
[Bug]           Fehler bei Herunterladen von Online Reports auf mehreren Mandanten<br>
[Bug]           Format von Beschreibungen wird trotz WYSIWYG-Editor nicht gespeichert<br>
[Bug]           Listeneditierung - Kategorie "Port": Kabel-ID kann nicht geändert werden<br>
[Bug]           Leerauswahl der HE in einem Schrank über Standort nicht möglich<br>
[Bug]           Fehlerhafte Kontaktzuweisungsmaske nach Klick auf Übernehmen<br>
[Bug]           Bearbeiten der Kategorie Hostadresse aufgrund von Meldung zur IP-Adresse nicht möglich<br>
[Bug]           Validierung: Doppelte Inventarnummer nach Duplizierung eines Objektes<br>
[Bug]           Feldtyp in benutzerdefinierten Kategorien für Verknüpfungen mit mehreren Objekten wird beim xml-export nicht korrekt übernommen<br>
[Bug]           Icon zur Visualisierung des Ping-Status in IP-Liste in Spalte "Objekt" verschoben<br>
[Bug]           Kategorie DBMS-Zugeordnete Cluster hat keine Button und keine Attribut-Liste<br>
[Bug]           Notizen verlieren Formatierung beim Bearbeiten<br>
[Bug]           Matching von Systemdiensten beim JDisc-Import funktioniert nicht<br>
[Bug]           Logischer Standort wird nicht in Objektliste angezeigt, wenn die Auswahl nicht aus dem Objekttyp "Personen" stammt<br>
[Bug]           CSV Import: Import von Datumswerten in benutzerdefinierten Kategorien wird immer mit Uhrzeit ausgegeben<br>
[Bug]           Logbuch-Konfiguration: Doppelte Einstellung "Maximalanzahl kombinierter Änderungen (pro Kategorie)" entfernt<br>
[Bug]           Highlighting von gefundenen Suchbegriffen funktioniert in Beschreibungsfeldern nicht<br>
[Bug]           Eigene Sprachkonstanten werden nicht überall übernommen<br>
[Bug]           Datum der Anschaffung ohne Uhrzeit in Listen anzeigen<br>
[Bug]           Event-Log zeigt nicht das jeweils verwendete sondern das aktuelle Kommando<br>
[Bug]           Ressourcen in Clustervitalität zeigen falsche Werte an<br>
[Bug]           Dialog-Admin: Die Spalte "Löschbar" für benutzerdefinierte "Dialog+"-Felder entfernt<br>
[Bug]           Kategorie Beziehungen: Beim erstellen einer Expliziten Beziehung wird die Richtung zwischen Master und Slave Objekt nicht berücksichtigt<br>

[Amélioration] Option de décodage UTF8 pour les fichiers Check_MK exportés<br>.
[Amélioration] Nouvelle configuration pour la gestion des erreurs de validation lors de la duplication d'objets<br>.
[Amélioration] Amélioration de l'indexation des recherches pour augmenter les performances<br>.
[Amélioration] Ajout d'un nouveau paramètre système "Activer l'interaction entre 'Site logique' et 'Site' ?"<br>
[Amélioration] Extension de la catégorie Certificat<br>
[Bug] Empilement : les piles avec un seul membre ne peuvent pas être lues<br>.
[Bug] Liste d'objets : L'attribut "En cours d'exécution" de la catégorie "Allocation de service de cluster" provoque un message d'erreur<br>.
[Bug] Les champs de date ne peuvent pas être enregistrés si aucun format de date n'est défini dans les préférences de l'utilisateur<br>.
[Bug] Erreur de tri lors de l'attribution de serveurs dans un rack<br>.
[Bug] L'en-tête des champs de date dans une catégorie définie par l'utilisateur ne s'affiche pas correctement lors de l'exportation<br>.
[Bug] La suppression de l'attribut serveur DNS dans la catégorie Réseau entraîne une erreur de syntaxe MySQL dans l'objet Navigateur<br>.
[Bug] Réseau de couche 3, attribution d'adresse IP statique incorrecte si une zone DHCP réservée est configurée<br>.
[Bug] Listes : les utilisateurs archivés sont affichés dans les attributions de contacts<br>.
[Bug] Impossible de trier par modèle dans les listes d'objets<br>.
[Bug] Importation OCS : interruption de l'importation après le premier objet non valide<br>
[Bug] Erreur lors de l'importation via CSV d'une adresse IP avec un zéro de tête dans n'importe quel octet<br>.
[Bug] Système de droits : pour les droits "Catégorie dans l'objet", "- Type d'objet" et "- dans les objets en dessous d'un site", la sélection pour les catégories n'est pas active en cas de modification<br>.
[Bug] La catégorie "LDAP" est représentée comme inactive dans l'arborescence du menu malgré des données existantes<br>.
[Bug] Suppression automatique du site physique lors de l'attribution d'un site logique<br>.
[Bug] Catégorie Comptabilité : le remplacement du numéro d'inventaire automatique pour plusieurs types d'objets ne s'effectue pas correctement lors de l'importation<br>.
[Bug] Catégorie Appartenances aux clusters : Lorsqu'une affectation est supprimée, la relation correspondante n'est pas supprimée en même temps<br>.
[Bug] Centre d'administration : Lors de l'ajout d'un nouveau client, les trémas ne sont pas correctement affichés<br>.
[Bug] La recherche trouve le contenu du journal après une modification en masse<br>.
[Bug] Le préfixe des câbles créés automatiquement est ignoré<br>.
[Bug] Importation CSV : l'importation de la catégorie attribution de contact génère une entrée vide si elle n'est pas définie dans le fichier CSV<br>.
[Bug] Validation : Si une validation existe pour la catégorie Données de base (personnes), elle n'a d'effet que pour la catégorie de dossier Personnes<br>.
[Bug] La synchronisation LDAP met brièvement tous les utilisateurs trouvés à l'état "normal" à chaque passage <br>.
[Bug] Erreur lors de la justification de la catégorie "Systèmes invités"<br>.
[Bug] Déplacer le type d'objet "Câbles" dans un autre groupe de types d'objets provoque l'impossibilité de sélectionner des câbles dans le navigateur de câbles<br>.
[Bug] Importation de tous les ports via l'importation JDisc, même si le filtre de port est configuré<br>.
[Bug] Erreur lors de l'utilisation d'un filtre de port dans le profil JDisc<br>.
[Bug] Le pied de page de l'AdminCenter avant et après la connexion n'est pas identique<br>
[Bug] Le mot de passe de la catégorie n'est pas décrypté dans un objet dupliqué<br>.
[Bug] La localisation des objets dupliqués n'est pas transmise correctement<br>.
[Bug] Les fonctions WYSIWYG ne sont que partiellement disponibles au sein des catégories<br>.
[Bug] Catégories personnalisées : Le type de champ "Explorateur de fichiers" ne fonctionne pas<br>.
[Bug] Report Manager : certains ordres de caractères dans l'attribut "Chemin d'accès au site" ne donnent aucun résultat<br>.
[Bug] Comportement incohérent lors de la saisie et de la sélection et de l'affichage des résultats de recherche<br>.
[Bug] Liste d'objets : Mauvaise comptabilisation des adresses IP attribuées<br>.
[Bug] Impossible d'utiliser des contenus avec [...]LC_[...]<br>
[Bug] Notifications : Les licences sont affichées dans les e-mails malgré une clé de licence archivée ou supprimée<br>
[Bug] Journal de bord : la vue en liste n'affiche pas le niveau d'alarme élevé (3)<br>.
[Bug] Importation CSV : l'importation par contrôleur échoue si l'option multi-valeur "comma" est utilisée<br>.
[Bug] La suppression du dialogue partagé+ dans les catégories personnalisées supprime les entrées de toutes les autres catégories<br>.
[Bug] La barre oblique inverse des titres d'objets est souvent mal affichée<br>.
[Bug] Liste d'objets : Erreur lors du tri de l'attribut "Catégorie"<br>.
[Bug] Un message d'erreur apparaît lors de l'appel de Outils > CMDB > Importation<br>.
[Bug] Le Report Manager génère des requêtes incorrectes sur les relations entre objets<br>.
[Bug] L'explorateur d'objets ouvre un onglet inactif dans certaines conditions<br>.
[Bug] Impossible d'utiliser des câbles existants dans l'importation de câblage<br>.
[Bug] Erreur lors du téléchargement de rapports en ligne sur plusieurs mandants<br>.
[Bug] Le format des descriptions n'est pas enregistré malgré l'éditeur WYSIWYG<br>
[Bug] Édition de liste - catégorie "Port" : l'ID du câble ne peut pas être modifié<br>.
[Bug] Impossible de sélectionner à vide l'UH dans une armoire via l'emplacement<br>
[Bug] Masque d'attribution de contact erroné après avoir cliqué sur Appliquer<br>
[Bug] Impossible d'éditer la catégorie Adresse de l'hôte en raison d'un message sur l'adresse IP<br>
[Bug] Validation : double numéro d'inventaire après duplication d'un objet<br>
[Bug] Le type de champ dans les catégories définies par l'utilisateur pour les liens avec plusieurs objets n'est pas repris correctement lors de l'exportation xml<br>.
[Bug] Icône de visualisation de l'état du ping dans la liste des IP déplacée dans la colonne "Objet"<br>.
[Bug] La catégorie Cluster affecté au SGBD n'a pas de bouton ni de liste d'attributs<br>.
[Bug] Les notes perdent leur formatage lors de l'édition<br>.
[Bug] La mise en correspondance des services système ne fonctionne pas lors de l'importation JDisc<br>
[Bug] L'emplacement logique n'est pas affiché dans la liste des objets si la sélection ne provient pas du type d'objet "Personnes"<br>.
[Bug] Importation CSV : l'importation des valeurs de date dans les catégories personnalisées est toujours affichée avec l'heure<br>.
[Bug] Configuration du journal : suppression du double paramètre "Nombre maximum de modifications combinées (par catégorie)"<br>.
[Bug] La mise en évidence des termes de recherche trouvés ne fonctionne pas dans les champs de description<br>.
[Bug] Les constantes de langue personnelles ne sont pas reprises partout<br>.
[Bug] Afficher la date d'achat sans l'heure dans les listes<br>.
[Bug] Le journal des événements n'affiche pas la commande utilisée mais la commande actuelle<br>.
[Bug] Les ressources dans la vitalité du cluster affichent des valeurs incorrectes<br>.
[Bug] Dialogue-Admin : suppression de la colonne "Supprimable" pour les champs personnalisés "Dialog+"<br>.
[Bug] Catégorie Relations : Lors de la création d'une relation explicite, la direction entre l'objet maître et l'objet esclave n'est pas prise en compte<br>.