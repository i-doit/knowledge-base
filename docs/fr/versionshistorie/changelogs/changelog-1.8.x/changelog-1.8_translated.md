<!-- TRANSLATED by md-translate -->
# Changelog 1.8

# Changelog 1.8

[Verbesserung]  Überarbeitete Spaltenangaben in den Objektlisten<br>
[Verbesserung]  Darstellung von Multivalue Feldern in Listen konfigurierbar als Liste oder komma-separiert<br>
[Verbesserung]  Versenden von SMTP E-Mails über ein selbst-signiertes SSL Zertifikat<br>
[Verbesserung]  Benutzer mit Erstellen Recht in einem Objekttypen erhalten automatisch Rechte auf die selbst erstellen Objekte<br>
[Verbesserung]  Dateiupload für benutzerdefinierte Kategorien<br>
[Verbesserung]  Einige Designverbesserung in den Formularen<br>
[Verbesserung]  Drag and Drop in das Textfeld des Dateibrowsers (Dateizuweisung -> Neu)<br>
[Verbesserung]  Autovervollständigung im Textfeld des Dateibrowsers<br>
[Verbesserung]  Editiermöglichkeit der Ausnahmen in Workflows<br>
[Verbesserung]  Konfigurierbares Objekt Matching für Importe<br>
[Verbesserung]  Tenant-wide Settings überschreiben System-wide Settings (Experteneinstellungen)<br>
[Verbesserung]  Purge von Reports nur nach Rückfrage<br>
[Verbesserung]  Verbesserte QCW Oberfläche<br>
[Bug]           Listeneditierung übernimmt für Kategorie Betriebssystem nicht alle gewählten Änderungen<br>
[Bug]           Attribut "Nagios services vererben" erscheint in der Listeneditierung bei der Kategorie "Betriebssystem"<br>
[Bug]           Fehler in updates/classes/isys_update_files.class.php<br>
[Bug]           Standardrichtung der Darstellungs bei selbstdefinierten CMDB-Explorer-Profilen ist nach Browseraktualisierung vertikal<br>
[Bug]           Errormeldung nach Update und Login<br>
[Bug]           Profil-editieren-Button fehlt im CMDB-Explorer<br>
[Bug]           Export der Verkabelungsansicht nutzt Komma statt Semikolon als Trennzeichen<br>
[Bug]           Verkabelungsansicht stellt kompletten Standort-Pfad dar<br>
[Bug]           Duplizieren-Button fehlt<br>
[Bug]           In der Übersicht der Kategorie "Verbindung" führt ein Klick auf ein Objekt unter "Verbunden mit Listener" zurück zum Hauptobjekt statt zum Verbundenen Objekt.<br>
[Bug]           Fehler beim Upload einer exportierten XML-Datei<br>
[Bug]           Daten können über einen SQL-Report gelöscht werden<br>
[Bug]           Selbstdefinierte Objekttyp-Gruppen werden im QCW unterschiedlich dargestellt<br>
[Bug]           Manuelle Indexierung über den i-doit Controller berücksichtigt nicht die Kategorie "Allgemein"<br>
[Bug]           Multi-Dialog-Plus-Felder in benutzerdefinierten Kategorien werden in Reports nur mit IDs ausgegeben.<br>
[Bug]           Report als TXT exportieren erzeugt eine CSV-Datei<br>
[Bug]           Zugewiesenes Betriebssystem lässt sich über die API nicht leeren<br>
[Bug]           Fehler beim Duplizieren von Objekten mit dokumentiertem Modell<br>
[Bug]           VIVA-Ansicht der Informationsverbünde durch i-doit 1.8 verfälscht und unbrauchbar<br>
[Bug]           JDisc-Import benutzt auch Templates von Kabeln für die Verkabelung von Objekten<br>
[Bug]           Beim Duplizieren eines Objekts werden Dialog und Dialog+ Werte verdoppelt<br>
[Bug]           Fehler bei der Erzeugung von Objekten aus einem Template, wenn Modell und Hersteller ausgewählt sind.<br>
[Bug]           Verkabelung zeigt HTML an<br>
[Bug]           Einheit des Speichers in Kategorie "Objektvitatlität" stimmt nicht mit tatsächlicher Einheit überein<br>
[Bug]           Mitglied (Stack Mitglieder) verursacht falsche Links in Listen<br>
[Bug]           Primäre Hostadresse in Report erzeugt Fehlermeldung<br>
[Bug]           Objekt lösen aktualisiert IP-Liste nicht<br>
[Bug]           Gelbes Highlighting gefundener Suchbegriffe ist immer klein geschrieben<br>
[Bug]           CSV-Import bricht beim Profil-laden mit Fehlermeldung ab<br>
[Bug]           Dialog+-Feld in Objektliste erzeugt SQL-Fehler<br>
[Bug]           Suche findet keine Inhalte von Dialog+-Feldern aus benutzerdefinierten Kategorien<br>
[Bug]           Links in Lesezeichen-Widget können nicht sortiert werden<br>
[Bug]           Attribut "DBMS" wird nicht in Objekt-Listen dargestellt<br>
[Bug]           Sprachkonstanten werden im Duplizieren-Dialog nicht übersetzt<br>
[Bug]           Fehler beim Export eines Reports nach CSV<br>
[Bug]           Fehlender Hilfetext im Verkabelungsimport<br>
[Bug]           Rechtschreibfehler im Hilfetext des Controllers<br>
[Bug]           Attribut "Aktiv" in Kategorie "Port" wird beim JDisc-Import nicht im Modus "Aktualisieren" überprüft<br>
[Bug]           Einträge aus C__CATS__PERSON_ASSIGNED_GROUPS können nicht über die API gelöscht werden<br>
[Bug]           Fehlermeldung, wenn ein neuer Anschluss erzeugt werden soll und die Bezeichnung unique sein muss<br>
[Bug]           Attribut "Erstellungsdatum" wird im Report nicht ausgegeben<br>
[Bug]           Attribut "CPU" wird beim CSV-Export eines Reports mehrfach innerhalb der Spalte dargestellt<br>
[Bug]           Attribut "Letzte Änderung" in Report-Ausgabe ist immer leer<br>
[Bug]           CSV-Import ignoriert Identifikationsfeld<br>
[Bug]           Fehler beim Import eines Einsatzzwecks über den CSV-Import<br>
[Bug]           CSV-Import von Werten in Dialog-Plus-Felder ist nicht möglich<br>
[Bug]           Inhalte der Kategorie Remote Management Controller werden nicht korrekt dargestellt<br>
[Bug]           Dynamische Objektgruppen können nicht im Objekt-Browser verwendet werden.<br>
[Bug]           Einstellung des numerischen Formats in den Benutzereinstellungen hat keine Auswirkung<br>
[Bug]           Bearbeitung des Attributs "Tags" aus der Kategorie "Allgemein" über die API nicht möglich<br>
[Bug]           Deutsches Datumsformat verhindet die Verwendung des Kalenders zur Auswahl des Datums in Datumsfeldern<br>
[Bug]           Zuweisung eines neuen Betriebssystems über den JDisc-Import nicht möglich, wenn das Objekt bereits über ein anderes, primäres Betriebssystem verfügt<br>
[Bug]           Setup verlinkt auf veraltete Dokumentation<br>
[Bug]           Bereinigungsfunktionen berücksichtigen nicht benutzerdefinierte Kategorien<br>
[Bug]           Objekt-ID in einem Report wird nicht exportiert<br>
[Bug]           Aufruf einiger Handler des Controllers führt zu Fehlermeldung<br>
[Bug]           Eigene Objekttyp-Icons skalieren nicht in Legende des CMDB-Explorers<br>
[Bug]           Fehler bei der Verwendung des Attributs "Installiert auf" in einem Report.<br>
[Bug]           Gültigkeitszeitraum wird in einer Benachrichtigung in inkorrektem Format dargestellt<br>
[Bug]           Attribut "Investitionskosten" wird in Reports nur mit " - " ausgegeben<br>
[Bug]           Benutzerdefinierte Single-Value-Kategorien erzeugen neue Einträge, wenn der erste Wert nicht gefüllt wurde<br>
[Bug]           Generierter Link zu Geokoordinaten zeigt auf die eigene Position<br>
[Bug]           Fehlermeldung beim Speichern einer Dateiversion<br>
[Bug]           Fehler bei der Bearbeitung von Objekten ohne Inhalt in der Kategorie "Standort" über die Listeneditierung<br>
[Bug]           Archivieren der Kategorie Service Beziehung wird nicht korrekt angezeigt<br>
[Bug]           Nach Update wird auf Log im temp-Verzeichnis verlinkt<br>
[Bug]           Checkboxen bleiben nach Duplizieren selektiert<br>
[Bug]           Beim Duplizieren erscheint als Erfolgsmeldung eine Language-Konstante<br>
[Bug]           Purgen einer Verknüpfung hinterlässt einen Eintrag im Objekt-Browser<br>
[Bug]           Objekt-Beziehung einer benutzerdefinierten Kategorie wird im CSV-Import als Objektverknüpfung angezeigt.<br>
[Bug]           Import einer h-inventory XML-Datei führt zu einem Logout<br>
[Bug]           Eintragen einer MAC-Adresse ändert die Geschwindigkeit eines Ports<br>
[Bug]           Versionsnummer wird in der Übersicht der Kategorie "Softwarezuweisung" nicht dargestellt<br>
[Bug]           Variante des Betriebssystems wird nicht von der Massenänderungsvorlage übernommen<br>
[Bug]           Navigation in der Verwaltung markiert falschen Bereich<br>
[Bug]           Fehler beim Aufruf der vorhandenen Massenänderungsvorlagen<br>
[Bug]           Dialog-Plus-Felder in benutzerdefinierten Kategorien können nicht über die Listeneditierung bearbeitet werden<br>
[Bug]           Fehler beim Ausführen eines Reports<br>
[Bug]           Kategorie "Standort" kann nur dann in der Listeneditierung bearbeitet werden, wenn ein Standort gepflegt ist oder war<br>
[Bug]           Beim Anlegen einer Datei im Update fehlt ein Slash<br>
[Bug]           Änderungskommentar wird nach dem Speichern nicht angezeigt, wenn er aktiviert wurde<br>
[Bug]           Vorgegebene Werte aus der Validierung werden nicht in Dropdown-Liste dargestellt<br>
[Bug]           FC-Ports werden beim Import doppelt angelegt und als "RJ-45" dokumentiert<br>
[Bug]           Report-View "CMDB-Status Änderungen" zeigt nicht alle Änderungen an<br>
[Bug]           Pflichtfelder werden in benutzerdefinierten Kategorien nicht angezeigt<br>
[Bug]           Pflichtfelder geben an, nicht gefüllt zu sein, obwohl Inhalt vorliegt<br>
[Bug]           Fehler beim Aufruf der Verwaltung mit einem Nicht-Admin-User<br>
[Bug]           Schaltfläche "Als CSV exporiteren" in Objektlisten erlaubt den Export selbst ohne Zugriff auf Objekte<br>
[Bug]           Vorschlagsfunktion bei der Attributsauswahl zeigt nur dann Ergebnisse, wenn der Anfang der Bezeichnung eingegeben wird<br>
[Bug]           CSV-Import erzeugt in benutzerdefinierten Kategorien mit Objektbeziehung keine Beziehung<br>
[Bug]           Das Bearbeiten der Kategorie SLA ist nicht mehr möglich, wenn ein inkompatibler Wert eingetragen wurde<br>
[Bug]           Datumseingaben werden nicht gespeichert, wennn das Format nicht dem eingestellten Format entspricht<br>
[Bug]           Suggestion-Feld der Suche wird nur einmal aktualisiert<br>
[Bug]           JEDI-/JDisc-Import setzt Kommastelle bei Laufwerkskapazitäten falsch<br>
[Bug]           Verwendung einiger Sonderzeichen führt zu Fehler in der Suche<br>
[Bug]           Kündigungsinformationen werden in Listeneditierung nicht auf alle Objekte übertragen, wenn die Informationen in der Zeile "Alle Objekte" eingetragen werden<br>
[Bug]           Icons werden in der Standortsicht nicht skaliert.<br>
[Bug]           Upload einer CSV-Datei schlägt fehl, wenn ein windowsbasiertes System eingesetzt wird<br>
[Bug]           Datumsformate innerhalb der Listeneditierung nicht einheitlich<br>
[Bug]           Kategorie "Rechteverwaltung" taucht zusätzlich in der Kategorie-Liste auf.<br>
[Bug]           Kategorie Buchhaltung kann nicht gespeichert werden, wenn kein "Datum der Anschaffung" hinterlegt wurde<br>
[Bug]           Fehler beim Aufruf einer Objektliste mit dem Attribut "VLAN-ID" aus der Kategorie "WAN-Leitung"<br>
[Bug]           Fehler beim Aufruf von Objektlisten aktivem CMDB-Status-Filter aus dem my-doit-Bereich<br>
[Bug]           Templates vom Objekttyp Gebäude werden nicht als Template sondern als Objekt im Zustand Normal gespeichert.<br>
[Bug]           Änderung eines Betriebssystems zeigt im Logbuch lediglich die ID des verknüpften Objekts<br>
[Bug]           Fehler beim Speichern der Kategorie "Zugeweisene Objekte"<br>
[Bug]           Das Anlegen neuer Wartungen ist nicht möglich<br>
[Bug]           Fehler beim Aufruf einer benutzerdefinierten Kategorie über Suchergebnisse<br>
[Bug]           Fehler bei der Vergabe eines Rechts über die Kategorie "Rechtevergabe" wenn zuvor kein Recht existiert.<br>
[Bug]           Lizenzschlüssel werden nur gespeichert, wenn ein Ablaufdatum angegeben wird.<br>
[Bug]           Standort-Pfad im Report besteht lediglich aus dem Zeichen ><br>
[Bug]           "Typ" wird beim JDisc-Import nicht ins Logbuch geschrieben<br>
[Bug]           CSV-Import über die Konsole erstellt keine Logbuch-Einträge<br>
[Bug]           Umlaute werden als HTML-Zeichenfolge beim Abkürzen in Listen dargestellt<br>
[Bug]           Kein Tree im Treebrowser nach Klick auf "Zurück"<br>
[Bug]           Spaltenüberschriften in der Rechte-Darstellung verrutscht oder überflüssig<br>

[Amélioration] Révision des indications de colonnes dans les listes d'objets<br>.
[Amélioration] Représentation des champs multivalués dans les listes configurable en liste ou séparée par des virgules<br>.
[Amélioration] Envoi d'e-mails SMTP via un certificat SSL auto-signé<br>.
[Amélioration] Les utilisateurs ayant le droit de créer dans un type d'objet obtiennent automatiquement des droits sur les objets qu'ils ont eux-mêmes créés<br>.
[Amélioration] Téléchargement de fichiers pour les catégories personnalisées<br>.
[Amélioration] Quelques améliorations de design dans les formulaires<br>.
[Amélioration] Glisser-déposer dans le champ de texte de l'explorateur de fichiers (Assignation de fichier -> Nouveau)<br>
[Amélioration] Auto-complétion dans le champ de texte de l'explorateur de fichiers<br>.
[Amélioration] Possibilité d'éditer les exceptions dans les workflows<br>.
[Amélioration] Correspondance d'objet configurable pour les importations<br>
[Amélioration] Les paramètres de Tenant-wide remplacent les paramètres de System-wide (paramètres experts)<br>
[Amélioration] Purge des rapports uniquement après consultation<br>
[Amélioration] Interface QCW améliorée<br>
[Bug] L'édition de liste ne prend pas en compte toutes les modifications sélectionnées pour la catégorie Système d'exploitation<br>.
[Bug] L'attribut "Hériter des services Nagios" apparaît dans l'édition de liste pour la catégorie "Système d'exploitation"<br>.
[Bug] Erreur dans updates/classes/isys_update_files.class.php<br>
[Bug] La direction par défaut de l'affichage des profils CMDB-Explorer définis par l'utilisateur est verticale après la mise à jour du navigateur<br>.
[Bug] Message d'erreur après la mise à jour et la connexion<br>.
[Bug] Bouton d'édition de profil manquant dans CMDB-Explorer<br>.
[Bug] L'exportation de la vue de câblage utilise une virgule au lieu d'un point-virgule comme séparateur<br>.
[Bug] La vue de câblage affiche le chemin d'accès complet du site<br>.
[Bug] Bouton de duplication manquant<br>.
[Bug] Dans l'aperçu de la catégorie "Connexion", un clic sur un objet sous "Connecté à Listener" renvoie à l'objet principal au lieu de l'objet connecté.<br>
[Bug] Erreur lors du téléchargement d'un fichier XML exporté<br>.
[Bug] Les données peuvent être supprimées via un rapport SQL<br>.
[Bug] Les groupes de types d'objets définis par l'utilisateur sont représentés différemment dans le QCW<br>.
[Bug] L'indexation manuelle via le contrôleur i-doit ne prend pas en compte la catégorie "Général"<br>.
[Bug] Les champs multi-dialogues plus dans les catégories définies par l'utilisateur ne sont affichés dans les rapports qu'avec les ID.<br>
[Bug] Exporter le rapport au format TXT génère un fichier CSV<br>.
[Bug] Impossible de vider le système d'exploitation attribué via l'API<br>.
[Bug] Erreur lors de la duplication d'objets avec un modèle documenté<br>.
[Bug] Vue VIVA des réseaux d'information faussée et inutilisable par i-doit 1.8<br>
[Bug] L'importation JDisc utilise aussi des modèles de câbles pour le câblage des objets<br>.
[Bug] Lors de la duplication d'un objet, les valeurs Dialog et Dialog+ sont doublées<br>.
[Bug] Erreur lors de la création d'objets à partir d'un modèle lorsque le modèle et le fabricant sont sélectionnés.<br>
[Bug] Le câblage affiche du HTML<br>.
[Bug] L'unité de mémoire dans la catégorie "Vitesse de l'objet" ne correspond pas à l'unité réelle<br>.
[Bug] Membre (Stack membres) provoque des liens incorrects dans les listes<br>.
[Bug] L'adresse hôte primaire dans le rapport génère un message d'erreur<br>.
[Bug] L'objet résoudre ne met pas à jour la liste des IP<br>.
[Bug] La surbrillance jaune des termes de recherche trouvés est toujours en minuscule<br>.
[Bug] L'importation CSV s'arrête avec un message d'erreur lors du chargement du profil<br>.
[Bug] Le champ Dialogue+ dans la liste des objets génère une erreur SQL<br>.
[Bug] La recherche ne trouve pas le contenu des champs Dialog+ des catégories personnalisées<br>.
[Bug] Impossible de trier les liens dans le widget des signets<br>.
[Bug] L'attribut "DBMS" n'est pas affiché dans les listes d'objets<br>.
[Bug] Les constantes de langue ne sont pas traduites dans la boîte de dialogue de duplication<br>.
[Bug] Erreur lors de l'exportation d'un rapport vers CSV<br>
[Bug] Texte d'aide manquant dans l'importation des câblages<br>
[Bug] Erreur d'orthographe dans le texte d'aide du contrôleur<br>
[Bug] L'attribut "Actif" dans la catégorie "Port" n'est pas vérifié en mode "Actualiser" lors de l'importation JDisc<br>.
[Bug] Les entrées de C__CATS__PERSON_ASSIGNED_GROUPS ne peuvent pas être supprimées via l'API<br>.
[Bug] Message d'erreur lorsqu'un nouveau port doit être créé et que le nom doit être unique<br>.
[Bug] L'attribut "Date de création" n'est pas édité dans le rapport<br>.
[Bug] L'attribut "CPU" est représenté plusieurs fois dans la colonne lors de l'exportation CSV d'un rapport<br>.
[Bug] L'attribut "Dernière modification" dans la sortie du rapport est toujours vide<br>.
[Bug] L'importation CSV ignore le champ d'identification<br>.
[Bug] Erreur lors de l'importation d'un motif d'intervention via l'importation CSV<br>
[Bug] Impossible d'importer au format CSV des valeurs dans des champs Dialogue Plus<br>
[Bug] Le contenu de la catégorie Remote Management Controller n'est pas affiché correctement<br>.
[Bug] Les groupes d'objets dynamiques ne peuvent pas être utilisés dans le navigateur d'objets.<br>
[Bug] Le réglage du format numérique dans les paramètres utilisateur n'a pas d'effet<br>.
[Bug] Impossible de modifier l'attribut "Tags" de la catégorie "Général" via l'API<br>.
[Bug] Le format de date allemand empêche l'utilisation du calendrier pour sélectionner la date dans les champs de date<br>.
[Bug] Impossible d'attribuer un nouveau système d'exploitation via l'importation JDisc si l'objet dispose déjà d'un autre système d'exploitation principal<br>.
[Bug] Le setup renvoie à une documentation obsolète<br>.
[Bug] Les fonctions de nettoyage ne prennent pas en compte les catégories définies par l'utilisateur<br>.
[Bug] L'ID d'un objet dans un rapport n'est pas exporté<br>.
[Bug] L'appel de certains gestionnaires du contrôleur provoque un message d'erreur<br>.
[Bug] Les icônes de types d'objets personnalisés ne se mettent pas à l'échelle dans la légende de l'explorateur CMDB<br>.
[Bug] Erreur lors de l'utilisation de l'attribut "Installé sur" dans un rapport.<br>
[Bug] La période de validité est affichée dans un format incorrect dans une notification<br>.
[Bug] L'attribut "Coût d'investissement" n'est affiché que par " - " dans les rapports<br>.
[Bug] Les catégories à valeur unique définies par l'utilisateur génèrent de nouvelles entrées si la première valeur n'est pas remplie<br>.
[Bug] Le lien généré vers les coordonnées géographiques pointe vers sa propre position<br>.
[Bug] Message d'erreur lors de l'enregistrement d'une version de fichier<br>.
[Bug] Erreur lors de l'édition d'objets sans contenu dans la catégorie "Lieu" via l'édition de liste<br>.
[Bug] L'archivage de la catégorie Relation de service ne s'affiche pas correctement<br>.
[Bug] Après la mise à jour, un lien est établi vers le journal dans le répertoire temp<br>.
[Bug] Les cases à cocher restent sélectionnées après la duplication<br>.
[Bug] Lors de la duplication, une constante de langage apparaît comme message de succès<br>.
[Bug] La purge d'un lien laisse une entrée dans l'explorateur d'objets<br>.
[Bug] La relation d'objet d'une catégorie définie par l'utilisateur est affichée comme un raccourci d'objet dans l'importation CSV.<br>
[Bug] L'importation d'un fichier XML h-inventory provoque une déconnexion<br>.
[Bug] La saisie d'une adresse MAC modifie la vitesse d'un port<br>.
[Bug] Le numéro de version n'est pas affiché dans l'aperçu de la catégorie "Attribution de logiciel"<br>
[Bug] La variante du système d'exploitation n'est pas reprise par le modèle de changement en masse<br>
[Bug] La navigation dans l'administration met en évidence un mauvais domaine<br>.
[Bug] Erreur lors de l'appel des modèles de modifications en masse existants<br>
[Bug] Les champs Dialogue-Plus dans les catégories personnalisées ne peuvent pas être modifiés via l'édition de listes<br>.
[Bug] Erreur lors de l'exécution d'un rapport<br>.
[Bug] La catégorie "Site" ne peut être éditée dans l'édition de liste que si un site est ou a été géré<br>.
[Bug] Il manque un slash lors de la création d'un fichier dans la mise à jour<br>.
[Bug] Le commentaire de modification n'est pas affiché après l'enregistrement s'il a été activé<br>.
[Bug] Les valeurs prédéfinies de la validation ne sont pas affichées dans la liste déroulante<br>.
[Bug] Les ports FC sont créés en double lors de l'importation et documentés comme "RJ-45"<br>.
[Bug] La vue du rapport "Modifications du statut CMDB" n'affiche pas toutes les modifications<br>.
[Bug] Les champs obligatoires ne sont pas affichés dans les catégories définies par l'utilisateur<br>.
[Bug] Les champs obligatoires indiquent qu'ils ne sont pas remplis alors qu'il y a du contenu<br>.
[Bug] Erreur lors de l'appel de l'administration avec un utilisateur non-admin<br>.
[Bug] Le bouton "Exporter en CSV" dans les listes d'objets permet l'exportation même sans accès aux objets<br>.
[Bug] La fonction de suggestion lors de la sélection d'attributs n'affiche des résultats que si le début de la désignation est saisi<br>.
[Bug] L'importation CSV ne crée pas de relation dans les catégories personnalisées avec relation d'objet<br>.
[Bug] Il n'est plus possible d'éditer la catégorie SLA si une valeur incompatible a été saisie<br>.
[Bug] Les dates ne sont pas enregistrées si le format ne correspond pas au format défini<br>.
[Bug] Le champ de suggestion de la recherche n'est mis à jour qu'une seule fois<br>.
[Bug] L'importation JEDI/JDisc ne place pas correctement la virgule dans les capacités des lecteurs<br>.
[Bug] L'utilisation de certains caractères spéciaux provoque une erreur dans la recherche<br>.
[Bug] Les informations de résiliation ne sont pas transmises à tous les objets dans l'édition de liste lorsque les informations sont saisies dans la ligne "Tous les objets"<br>.
[Bug] Les icônes ne sont pas mises à l'échelle dans la vue du site.<br>
[Bug] Le téléchargement d'un fichier CSV échoue lors de l'utilisation d'un système basé sur Windows<br>.
[Bug] Les formats de date ne sont pas uniformes dans l'édition de liste<br>.
[Bug] La catégorie "Gestion des droits" apparaît en plus dans la liste des catégories <br>.
[Bug] La catégorie Comptabilité ne peut pas être enregistrée si aucune "date d'acquisition" n'a été définie<br>.
[Bug] Erreur lors de l'appel d'une liste d'objets avec l'attribut "VLAN-ID" de la catégorie "Ligne WAN"<br>.
[Bug] Erreur lors de l'appel d'une liste d'objets avec un filtre d'état CMDB actif depuis la zone my-doit<br>.
[Bug] Les templates du type d'objet Bâtiment ne sont pas enregistrés comme modèle mais comme objet à l'état Normal.<br>
[Bug] La modification d'un système d'exploitation affiche uniquement l'ID de l'objet lié dans le journal<br>.
[Bug] Erreur lors de l'enregistrement de la catégorie "Objets attribués"<br>.
[Bug] Impossible de créer de nouvelles maintenances<br>.
[Bug] Erreur lors de l'appel d'une catégorie personnalisée via les résultats de recherche<br>.
[Bug] Erreur lors de l'attribution d'un droit via la catégorie "Attribution de droits" si aucun droit n'existe auparavant.<br>
[Bug] Les clés de licence ne sont enregistrées que si une date d'expiration est spécifiée.<br>
[Bug] Le chemin d'accès au site dans le rapport se compose uniquement du caractère ><br>.
[Bug] Le "type" n'est pas écrit dans le journal lors de l'importation JDisc<br>.
[Bug] L'importation CSV via la console ne crée pas d'entrées dans le journal<br>.
[Bug] Les trémas sont affichés comme une chaîne de caractères HTML lors de l'abréviation dans les listes<br>.
[Bug] Pas d'arbre dans le navigateur d'arbres après avoir cliqué sur "Précédent"<br>
[Bug] En-têtes de colonnes déplacés ou superflus dans l'affichage des droits<br>.