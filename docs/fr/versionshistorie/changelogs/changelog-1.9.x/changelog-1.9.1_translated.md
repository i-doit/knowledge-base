<!-- TRANSLATED by md-translate -->
# Changelog 1.9.1

# Changelog 1.9.1

[Verbesserung]  Ermöglichen des Editieren eines neuen Eintrags im DialogPlus-Feld direkt nach dem Hinzufügen<br>
[Verbesserung]  Berücksichtigung der Stromkreisrekursion<br>
[Verbesserung]  Horizontale Scrollbar in JDisc Profilen sofort sichtbar<br>
[Verbesserung]  Switch Stacking: Portübersicht über alle mitglieder hinweg<br>
[Verbesserung]  Switch Stacking: Logische Ports über mehrere Switche hinweg<br>
[Verbesserung]  Export der Host-Aliasse beim Check_MK Export<br>
[Verbesserung]  JDisc-Import aktualisert Objekt-Titel nicht<br>
[Verbesserung]  Segmentierung von HEs in Racks<br>
[Verbesserung]  Attribut "E-Mail-Adresse" aus Kategorie "Personen" nicht im CSV-Import verknüpfbar<br>
[Verbesserung]  Neu erzeugte Einträge über den Dialog-Admin werden validiert<br>
[Verbesserung]  Massenänderung: Konfiguration von Logging<br>
[Verbesserung]  Listeneditierung: Option "Alle Objekte" in "Alle Einträge" umbenannt<br>
[Verbesserung]  Globale Suche: Höherwertige Darstellung von Objekttitel und Objekte im Zustand Normal<br>
[Verbesserung]  Einstellung zur Festlegung der maximalen Anzahl an Attributen in Objekt-Listen<br>
[Verbesserung]  Möglichkeit zur Administration von Tags im Dialog-Admin<br>
[Verbesserung]  Benachrichtigung bei bereits vergebenen Konstanten bei der Erstellung einer neuen benutzerdefinierten Kategorie<br>
[Verbesserung]  Neue View: Offene und ungenutzte Kabel<br>
[Verbesserung]  In der Kategorie "Betriebssystem" können nur noch Betriebssysteme zugewiesen werden<br>
[Verbesserung]  "Lösen"-Button in "Listenansicht Logbuch"<br>
[Änderung]      Entfernen der Sprachauswahl in der Single-Sign-On Konfiguration<br>
[Änderung]      Mehrfach-Auswahl in Report-Views entfernen<br>
[Bug]           Profile können im QCW nicht hochgeladen werden wenn zuvor alle anderen Profile gelöscht wurden<br>
[Bug]           Ändern einer nicht-selbst-definierten Objekttyp-Gruppe im QCW ist möglich<br>
[Bug]           Fehlerhafte Darstellung von Objekt-Links im Safari<br>
[Bug]           Transfer der exportierten Check_MK-Konfiguration bricht mit Fehlermeldung ab<br>
[Bug]           Relation von Ein- und Ausgang geht beim Duplizieren verloren<br>
[Bug]           Fehler beim Speichern der Kategorie "Buchhaltung"<br>
[Bug]           Einige Kategorien werden im Objekttree aber nicht im QCW angezeigt<br>
[Bug]           Ausgeblendete Kategorie im QCW wird auch für andere Objekttypen nicht mehr angezeigt<br>
[Bug]           Bearbeiten von Service-Filtern mit ID > 10 nicht möglich<br>
[Bug]           Objekterkennung im CSV-Import funktioniert nicht mit casesensitivity<br>
[Bug]           Listeneditierung - Kategorie "Betriebssystem": Zugewiesene Lizenzen können nicht geändert werden<br>
[Bug]           Kategorie "Servicezuweisung": Es ist nicht möglich Selbstdefinierte Objekttypen auszuwählen mit der Kategorie "Service"<br>
[Bug]           Attribut "Auf Gerät" beim CSV-Import mehrfach vorhanden<br>
[Bug]           LC__UNIVERSAL__USED_BY ist nicht übersetzt<br>
[Bug]           Report Manager: View "Geräte in einem Standort (Listenformat)" kann nicht heruntergeladen werden<br>
[Bug]           Listeneditierung - Kategorie "Buchhaltung": Rechnungsdatum gibt "Feldwert ist ungültig." aus<br>
[Bug]           Sprachkonstanten werden in der englischen Version unter Systemeinstellungen angezeigt<br>
[Bug]           Bearbeiten eines Anschlusses ohne Verbindung erzeugt automatisch ein Kabel<br>
[Bug]           Sprachkonstante in der englischen Version unter Cable in der Kategorie Fiber/lead<br>
[Bug]           Kategorie Beziehung: Beziehungsrichtung verändert sich wenn ein Eintrag gespeichert wird ohne die Richtung zu ändern.<br>
[Bug]           Kategorie "Standort" / "Betriebssystem" / "Buchhaltung": Objekte, welche über die Suche aufgerufen werden, geben den Standort falsch aus<br>
[Bug]           Read-only Funktion zur Farbauswahl im CMDB-Explorer Profil fehlerhaft<br>
[Bug]           Kategorie Hostadresse: Wird das zugeordnete Netz gelöst wird nicht das Globale v4/v6 Netz automatisch ausgewählt<br>
[Bug]           Geräte werden im linken Menübaum in der Kombinierten Ansicht nicht immer angezeigt<br>
[Bug]           Javascript Fehler bei der Darstellung großer Netze<br>
[Bug]           Auswahl für die Standort Ansichten wird nach einloggen nicht dargestellt.<br>
[Bug]           Editieren-Button unter LDAP-Directories funktioniert nicht<br>
[Bug]           Gemischte Sprachanzeige unter LDAP-Directories<br>
[Bug]           Der Standardfilter einer Objektliste wird nicht angewendet sobald die Liste aufgerufen wird.<br>
[Bug]           OCS-Import: Kategorie Modell wird bei Switch Geräten innerhalb eines Stacks nicht aktualisiert<br>
[Bug]           Import: Modell und Hersteller aus der Kategorie Modell werden nicht korrekt miteinander verbunden<br>
[Bug]           Settings für das Anzeigen von Kategorien auf der Übersichtsseite werden durch Nein-Ja-Setzen gelöscht<br>
[Bug]           Zuweisung eines Raums zu einem LDAP-User funktioniert nicht<br>
[Bug]           Startdatum und Enddatum von Lizenzen werden nicht in Objektlisten angezeigt<br>
[Bug]           Report Manager: Bedingung mit einer Einheit verursacht Fehlermeldung wenn diese als erste Bedingung definiert ist<br>
[Bug]           ZenDesk Testbug 0815<br>
[Bug]           View "CMDB-Status Änderungen" arbeitet nicht korrekt<br>
[Bug]           Überschreiben-Modus im CSV-Import bewirkt die mehrfache Anlage von Kabeln<br>
[Bug]           Referenzierung eines Controllers einer Festplatte über den CSV-Import nicht möglich<br>
[Bug]           KabelVerbindung wird nicht angezeigt, wenn keine Kabellänge angegeben ist<br>
[Bug]           Import von Ja/Nein-Feldern über den CSV-Import nicht möglich.<br>
[Bug]           install.sh funktioniert nicht<br>
[Bug]           In JDisc-Profilen kann der CMDB-Status "i-doit Status" ausgewählt werden<br>
[Bug]           Attribut "Faser / Wellenlänge" ist falsch und sollte "Farbe / Wellenlänge" heißen<br>
[Bug]           Verbindungen manuell erzeugter Kabel werden nicht in der Liste angezeigt<br>
[Bug]           Duplizieren von Kategorien mit Dialog-Plus Inhalten, die auf eine Sprachkonstante verwenden führt zu doppelten Dialog-Plus Einträgen.<br>
[Bug]           Duplizieren von Inhalten aus benutzerdefinierten Kategorien bei Verwendung von Sprachkonstanten erzeugt ein Duplikat der Kategorie<br>
[Bug]           Report Manager: Spezifische Kategorie "Zugewiesene Objekte" vom Objekttypen "Organisation" ist nicht auswählbar<br>
[Bug]           Doppelte ID-Anzeige in Widget "Objektliste" wenn ID als Attribut gewählt ist<br>
[Bug]           Objekttyp wird trotz Abbrechen erstellt.<br>
[Bug]           Kabellänge wird in Listeneditierung falsch umgerechnet<br>
[Bug]           Hostadresse wird nicht als primär importiert<br>
[Bug]           Listen: Numerisches Format hat keine Auswirkungen<br>
[Bug]           Lizenzen: Gesamtkosten in Listenansicht mit zu vielen Nachkommastellen<br>
[Bug]           Fehlermeldung nach dem Login in Kategorie mit Währungsfeld<br>
[Bug]           Suche findet keine Begriffe aus WYSIWYG Feldern in Benutzerdefinierten Kategorien<br>
[Bug]           Notizen-Widget wird ab einer bestimmten Zeichenanzahl nicht mehr geladen<br>
[Bug]           Inkorrektes Editieren einer unbekannten Objekttyp-Konfiguration<br>
[Bug]           Fehlermeldung beim Löschen eines nicht-leeren Objekttypen inkorrekt<br>
[Bug]           Report-Manager wiederholt Objekt-Titel statt das verknüpfte Objekt auszugeben.<br>
[Bug]           Attribut "Primäre E-Mail-Adresse" im CSV-Import auswählbar<br>
[Bug]           HTML-Tags um E-Mail Adresse in Kategorie "E-Mail-Adressen"<br>
[Bug]           Diverse Dialog Einträge haben keinen Status<br>
[Bug]           Kategorie "Port" zeigt in Tabelle nicht die zugeordnete IP-Adresse an<br>
[Bug]           Dialog-Attribute ohne richtige Benamung<br>
[Bug]           Dialog-Einträge für "Vertrag: Vertragsart" haben "0" als Konstante<br>
[Bug]           Dialog-Admin speichert Einträge für "Modul TTS: Ticket Systeme" nicht.<br>
[Bug]           Konfiguration der QR-Codes für Objekttypen öffnet sich nicht beim Aufruf<br>
[Bug]           Im Attribut "Zugewiesene Arbeitsplätze" fehlt das Icon zur Auswahl der verknüpften Attribute im Report-Manager<br>
[Bug]           Fehlerhafte Darstellung der zugewiesenen Lizenz in der Kategorie "Softwarezuweisung", wenn ein bestehender Eintrag bearbeitet wird<br>
[Bug]           Fehlermeldung beim Deinstallieren einer Extension im AdminCenter<br>
[Bug]           Filter der Liste "JDisc-Profile" in der Verwaltung funktioniert nicht<br>
[Bug]           Darstellung in Multi Value-Kategorie "Objektgruppe" defekt<br>
[Bug]           Zugewiesene Objekte in Dateien können nicht angeklickt werden<br>
[Bug]           Upload einer neuen Dateiversion löscht die Kategorie und die Beschreibung<br>
[Bug]           Spezifische Kategorie "Dateien > Zugewiesene Objekte" lässt sich nicht in Liste einbinden<br>
[Bug]           Suche findet Inhalt von Beschreibungsfeldern nicht, wenn diese Sonderzeichen enthalten<br>
[Bug]           Verkabelung: Anschluss enthält standardmäßig den Kaltgerätestecker anstatt den Eintrag "-"<br>
[Bug]           Anschlüsse werden doppelt erstellt anstatt abgespeichert<br>
[Bug]           Falsches Datumsformat in Kategorie "Vertragszuweisung"<br>
[Bug]           Falsche Inventarnummer beim QR-Code Druck, wenn der Platzhalter %COUNTER% verwendet wird<br>
[Bug]           Wird die ausgeführte Suche als Bookmark hinzugefügt, erscheint nur Text unter my-doit<br>
[Bug]           Gelöschte Kategorien werden weiterhin in Listen angezeigt<br>
[Bug]           Neue Bookmarks in my-doit zeigen auf das Dashboard<br>
[Bug]           Kategorie "Listener" listet keine Verbindungen auf.<br>
[Bug]           Report mit Datumsfeldern in benutzerdefinierten Kategorien berücksichtigt nicht das länderspezifische Datumsformat<br>
[Bug]           Berechnung der "RAID Kapazität" nicht nachvollziehbar bei Änderung der Speichereinheit oder des Wertes<br>
[Bug]           Objekte werden erstellt bevor sie gespeichert werden und nicht bei Klick auf Abbrechen gelöscht.<br>

[Amélioration] Possibilité d'éditer une nouvelle entrée dans le champ DialogPlus directement après l'avoir ajoutée<br>.
[Amélioration] Prise en compte de la récursivité du circuit<br>.
[Amélioration] Barre de défilement horizontale immédiatement visible dans les profils JDisc<br>.
[Amélioration] Empilement de switches : aperçu des ports sur tous les membres<br>
[Amélioration] Empilement de switches : ports logiques sur plusieurs switches<br>
[Amélioration] Exportation des alias d'hôtes lors de l'exportation Check_MK<br>.
[Amélioration] L'importation JDisc ne met pas à jour le titre des objets<br>.
[Amélioration] Segmentation des HE en racks<br>
[Amélioration] Impossible de lier l'attribut "adresse e-mail" de la catégorie "personnes" dans l'importation CSV<br>
[Amélioration] Les nouvelles entrées créées via le dialogue Admin sont validées<br>.
[Amélioration] Modification en masse : configuration de la journalisation<br>
[Amélioration] Édition de liste : option "Tous les objets" renommée "Toutes les entrées"<br>
[Amélioration] Recherche globale : affichage de meilleure qualité des titres d'objets et des objets dans l'état Normal<br>.
[Amélioration] Paramètre permettant de définir le nombre maximum d'attributs dans les listes d'objets<br>.
[Amélioration] Possibilité d'administrer les tags dans la boîte de dialogue Admin<br>.
[Amélioration] Notification pour les constantes déjà attribuées lors de la création d'une nouvelle catégorie personnalisée<br>
[Amélioration] Nouvelle view : câbles ouverts et inutilisés<br>
[Amélioration] Dans la catégorie "Système d'exploitation", seuls les systèmes d'exploitation peuvent être attribués<br>.
[Amélioration] Bouton "Détacher" dans "Vue de la liste du journal"<br>.
[Modification] Suppression du choix de la langue dans la configuration de l'authentification unique<br>.
[modification] Suppression des sélections multiples dans les vues de rapports<br>.
[Bug] Les profils ne peuvent pas être téléchargés dans le QCW si tous les autres profils ont été supprimés auparavant<br>.
[Bug] Possibilité de modifier un groupe de types d'objets non auto-définis dans le QCW<br>.
[Bug] Affichage incorrect des liens d'objets dans Safari<br>.
[Bug] Le transfert de la configuration Check_MK exportée s'interrompt avec un message d'erreur<br>.
[Bug] La relation entre l'entrée et la sortie est perdue lors de la duplication<br>.
[Bug] Erreur lors de l'enregistrement de la catégorie "Comptabilité"<br>.
[Bug] Certaines catégories sont affichées dans l'arbre des objets mais pas dans le QCW<br>.
[Bug] La catégorie masquée dans le QCW n'est plus affichée pour les autres types d'objets<br>.
[Bug] Impossible de modifier les filtres de service avec ID > 10<br>.
[Bug] La reconnaissance d'objet dans l'importation CSV ne fonctionne pas avec casesensitivity<br>
[Bug] Édition de liste - catégorie "Système d'exploitation" : les licences attribuées ne peuvent pas être modifiées<br>.
[Bug] Catégorie "Attribution de service" : il n'est pas possible de sélectionner des types d'objets définis par l'utilisateur avec la catégorie "Service"<br>.
[Bug] Attribut "Sur le périphérique" présent plusieurs fois lors de l'importation CSV<br>.
[Bug] LC__UNIVERSAL__USED_BY n'est pas traduit<br>.
[Bug] Report Manager : la vue "Périphériques dans un site (format liste)" ne peut pas être téléchargée<br>.
[Bug] Édition de liste - Catégorie "Comptabilité" : la date de facturation renvoie "La valeur du champ n'est pas valide"<br>.
[Bug] Les constantes de langue sont affichées dans la version anglaise sous Paramètres système<br>.
[Bug] Modifier un port sans connexion crée automatiquement un câble<br>.
[Bug] Constante de langue dans la version anglaise sous Cable dans la catégorie Fiber/lead<br>
[Bug] Catégorie Relation : le sens de la relation change lorsqu'une entrée est enregistrée sans changer le sens.<br>
[Bug] Catégorie "Site" / "Système d'exploitation" / "Comptabilité" : les objets appelés par la recherche donnent le site de manière incorrecte<br>.
[Bug] La fonction de sélection de couleur en lecture seule dans le profil CMDB-Explorer est incorrecte<br>.
[Bug] Catégorie adresse hôte : Si le réseau associé est résolu, le réseau global v4/v6 n'est pas automatiquement sélectionné<br>.
[Bug] Les périphériques ne sont pas toujours affichés dans l'arborescence du menu de gauche dans la vue combinée<br>.
[Bug] Erreur Javascript lors de l'affichage des grands réseaux<br>.
[Bug] La sélection des vues de site n'est pas affichée après la connexion <br>.
[Bug] Le bouton d'édition ne fonctionne pas sous les répertoires LDAP<br>.
[Bug] Affichage de la langue mixte sous les répertoires LDAP<br>.
[Bug] Le filtre par défaut d'une liste d'objets n'est pas appliqué lorsque la liste est appelée.<br>
[Bug] Importation OCS : la catégorie Modèle n'est pas mise à jour pour les appareils Switch dans une pile<br>.
[Bug] Importation : le modèle et le fabricant de la catégorie Modèle ne sont pas correctement liés<br>.
[Bug] Les paramètres d'affichage des catégories sur la page d'aperçu sont supprimés par un non oui<br>.
[Bug] L'attribution d'une salle à un utilisateur LDAP ne fonctionne pas<br>.
[Bug] La date de début et la date de fin des licences ne sont pas affichées dans les listes d'objets<br>.
[Bug] Report Manager : une condition avec une unité provoque un message d'erreur si elle est définie comme première condition<br>.
[Bug] Bug de test ZenDesk 0815<br>
[Bug] La vue "Modifications d'état CMDB" ne fonctionne pas correctement<br>.
[Bug] Le mode écrasement dans l'importation CSV provoque la création multiple de câbles<br>.
[Bug] Impossible de référencer un contrôleur d'un disque dur via l'importation CSV<br>.
[Bug] Connexion de câble non affichée si aucune longueur de câble n'est spécifiée<br>.
[Bug] Impossible d'importer des champs Oui/Non via l'importation CSV.<br>
[Bug] install.sh ne fonctionne pas<br>.
[Bug] Dans les profils JDisc, le statut CMDB "i-doit Status" peut être sélectionné<br>.
[Bug] L'attribut "fibre / longueur d'onde" est incorrect et devrait s'appeler "couleur / longueur d'onde"<br>.
[Bug] Les connexions des câbles créés manuellement ne sont pas affichées dans la liste<br>.
[Bug] La duplication de catégories avec un contenu Dialogue Plus utilisant une constante de langage entraîne la duplication des entrées Dialogue Plus.<br>
[Bug] Dupliquer le contenu de catégories personnalisées en utilisant des constantes de langue crée un doublon de la catégorie<br>.
[Bug] Report Manager : la catégorie spécifique "Objets assignés" du type d'objet "Organisation" ne peut pas être sélectionnée<br>.
[Bug] Double affichage de l'ID dans le widget "Liste des objets" lorsque l'ID est sélectionné comme attribut<br>.
[Bug] Le type d'objet est créé malgré l'annulation <br>.
[Bug] La longueur du câble est mal convertie dans l'édition de la liste<br>.
[Bug] L'adresse de l'hôte n'est pas importée en tant que primaire<br>.
[Bug] Listes : le format numérique n'a aucun effet<br>.
[Bug] Licences : Coûts totaux dans la vue en liste avec trop de chiffres après la virgule<br>
[Bug] Message d'erreur après connexion dans une catégorie avec champ devise<br>
[Bug] La recherche ne trouve pas les termes des champs WYSIWYG dans les catégories personnalisées<br>.
[Bug] Le widget de notes ne se charge plus à partir d'un certain nombre de caractères<br>.
[Bug] Édition incorrecte d'une configuration de type d'objet inconnue<br>.
[Bug] Message d'erreur incorrect lors de la suppression d'un type d'objet non vide<br>.
[Bug] Le gestionnaire de rapports répète le titre de l'objet au lieu d'afficher l'objet lié.<br>
[Bug] Attribut "Adresse e-mail primaire" sélectionnable dans l'importation CSV<br>.
[Bug] Balises HTML autour de l'adresse e-mail dans la catégorie "Adresses e-mail"<br>.
[Bug] Diverses entrées de dialogue n'ont pas de statut<br>.
[Bug] La catégorie "Port" n'affiche pas l'adresse IP associée dans le tableau<br>.
[Bug] Attributs de dialogue sans nom correct<br>.
[Bug] Les entrées de dialogue pour "Contrat : type de contrat" ont "0" comme constante<br>.
[Bug] L'administrateur du dialogue n'enregistre pas les entrées pour "Module TTS : Systèmes de tickets".<br>
[Bug] La configuration des codes QR pour les types d'objets ne s'ouvre pas lors de l'appel<br>.
[Bug] Dans l'attribut "Postes de travail attribués", il manque l'icône pour sélectionner les attributs liés dans le gestionnaire de rapports<br>.
[Bug] Affichage incorrect de la licence attribuée dans la catégorie "Attribution de logiciel" lors de la modification d'une entrée existante<br>.
[Bug] Message d'erreur lors de la désinstallation d'une extension dans AdminCenter<br>.
[Bug] Le filtre de la liste "Profils JDisc" dans l'administration ne fonctionne pas<br>.
[Bug] Représentation dans la catégorie Multi Value "Groupe d'objets" défectueuse<br>
[Bug] Impossible de cliquer sur les objets assignés dans les fichiers<br>.
[Bug] Le téléchargement d'une nouvelle version de fichier supprime la catégorie et la description<br>.
[Bug] Impossible d'inclure la catégorie spécifique "Fichiers > Objets assignés" dans la liste<br>.
[Bug] La recherche ne trouve pas le contenu des champs de description s'ils contiennent des caractères spéciaux<br>.
[Bug] Câblage : le connecteur contient par défaut la fiche de l'appareil froid au lieu de l'entrée "-"<br>
[Bug] Les connexions sont créées deux fois au lieu d'être enregistrées<br>.
[Bug] Format de date incorrect dans la catégorie "Attribution de contrat"<br>.
[Bug] Numéro d'inventaire incorrect lors de l'impression du code QR si le caractère générique %COUNTER% est utilisé<br>.
[Bug] Si la recherche effectuée est ajoutée comme marque-page, seul le texte apparaît sous my-doit<br>.
[Bug] Les catégories supprimées sont toujours affichées dans les listes<br>.
[Bug] Les nouveaux signets dans my-doit pointent vers le tableau de bord<br>.
[Bug] La catégorie "Listener" ne liste pas les connexions <br>.
[Bug] Rapport avec champs de date dans les catégories personnalisées ne prend pas en compte le format de date spécifique à chaque pays<br>.
[Bug] Calcul de la "capacité RAID" incompréhensible en cas de changement d'unité de stockage ou de valeur<br>.
[Bug] Les objets sont créés avant d'être enregistrés et ne sont pas supprimés lorsque l'on clique sur Annuler.<br>