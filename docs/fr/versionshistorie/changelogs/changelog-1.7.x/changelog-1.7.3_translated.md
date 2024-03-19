<!-- TRANSLATED by md-translate -->
# Changelog 1.7.3

# Changelog 1.7.3

[Verbesserung]  JDisc-Import: Erweiterung des Imports um Stacked Switches<br>
[Verbesserung]  Neuer Parameter "hostfilter" in API Methode cmdb.filter.getUpdatedIPs<br>
[Verbesserung]  Konfigurierbarer globaler Sysid Präfix<br>
[Verbesserung]  Editiermöglichkeit der Ausnahmen in Workflows<br>
[Verbesserung]  Mapping Funktionalität für Attribute mit Mehrfachauswahl im CSV-Import<br>
[Bug]           Versionsnummer wird in der Übersicht der Kategorie "Softwarezuweisung" nicht dargestellt<br>
[Bug]           Archivierte und gelöschte Festplatten werden für einen RAID-Verbund angeboten<br>
[Bug]           Es lässt sich aus einem Report keine neue Objektgruppe erstellen<br>
[Bug]           Fehlermeldung beim Speichern einer Dateiversion<br>
[Bug]           Bei Festlegung eines Default-Templates in der Objekttyp-Konfiguration von "Patchfeld" wird beim Neuerstellen eines Objekts das Patchfeld erstellt aber nicht angezeigt<br>
[Bug]           Fehler bei der Verwendung des Attributs "Installiert auf" in einem Report.<br>
[Bug]           mod_rewrite check auf der Systemübersicht schlägt bei unsicherem SSL Zertifikat fehl<br>
[Bug]           Feld Refrigerating capacity in der Kategorie Air Conditioning speichert falsche Werte<br>
[Bug]           Verkabelungsimport beim Patchfeld: Bei bestehenden Anschlüssen werden importierte Anschlüsse intern nicht korrekt verbunden<br>
[Bug]           Eigene Objekttyp-Icons skalieren nicht in Legende des CMDB-Explorers<br>
[Bug]           Aufruf einiger Handler des Controllers führt zu Fehlermeldung<br>
[Bug]           Setup verlinkt auf veraltete Dokumentation<br>
[Bug]           Falsche Darstellung des Widget "Monitoring..." wenn keine Host-Verbindung möglich<br>
[Bug]           Zuweisung eines neuen Betriebssystems über den JDisc-Import nicht möglich, wenn das Objekt bereits über ein anderes, primäres Betriebssystem verfügt<br>
[Bug]           Fehler beim Import eines Einsatzzwecks über den CSV-Import<br>
[Bug]           Deutsches Datumsformat verhindet die Verwendung des Kalenders zur Auswahl des Datums in Datumsfeldern<br>
[Bug]           CSV-Import von Werten in Dialog-Plus-Felder ist nicht möglich<br>
[Bug]           Attribut "Letzte Änderung" in Report-Ausgabe ist immer leer<br>
[Bug]           CSV-Import ignoriert Identifikationsfeld<br>
[Bug]           Dynamische Objektgruppen können nicht im Objekt-Browser verwendet werden.<br>
[Bug]           Option "Kommasepariert" im CSV-Import führt zu fehlerhaften Importen<br>
[Bug]           Bearbeitung des Attributs "Tags" aus der Kategorie "Allgemein" über die API nicht möglich<br>
[Bug]           Bereinigungsfunktionen berücksichtigen nicht benutzerdefinierte Kategorien<br>
[Bug]           Attribut "CPU" wird beim CSV-Export eines Reports mehrfach innerhalb der Spalte dargestellt<br>
[Bug]           Attribut "Erstellungsdatum" wird im Report nicht ausgegeben<br>
[Bug]           "Root-Lokation" wird im englischen nicht übersetzt<br>
[Bug]           Wird in Link in der Zugriffskategorie angeklickt, öffnet sich neben dem Link auch der Kategorieeintrag<br>
[Bug]           Einträge aus C__CATS__PERSON_ASSIGNED_GROUPS können nicht über die API gelöscht werden<br>
[Bug]           Dateizuweisung: Button "Datei herunterladen" startet Download und öffnet den Eintrag<br>
[Bug]           Import einer h-inventory XML-Datei führt zu einem Logout<br>
[Bug]           Benutzer wird nach OCS-Import abgemeldet<br>
[Bug]           Es wird nur die letzte reportbasierte Benachrichtigung verschickt<br>
[Bug]           Service Logbuch enthält das gesamte Logbuch, wenn keine Komponenten hinzugefügt sind<br>
[Bug]           Fehler beim Ausführen eines Reports<br>
[Bug]           Reportbasierte Benachrichtigung findet und übermittelt nicht alle gefundenen Objekte<br>
[Bug]           Ausgabe des konfigurierten Namens der Custom Properties in Personenstammdaten<br>
[Bug]           "Dateneingabe bereinigen" wird nicht durchgehend auf alle Felder angewendet<br>
[Bug]           Attribut "Aktiv" in Kategorie "Port" wird beim JDisc-Import nicht im Modus "Aktualisieren" überprüft<br>
[Bug]           Rechtschreibfehler im Hilfetext des Controllers<br>
[Bug]           Purgen einer Verknüpfung hinterlässt einen Eintrag im Objekt-Browser<br>
[Bug]           Navigation in der Verwaltung markiert falschen Bereich<br>
[Bug]           Gültigkeitszeitraum wird in einer Benachrichtigung in inkorrektem Format dargestellt<br>
[Bug]           Im Logbuch wird die Beschreibung immer als "geändert" gekennzeichnet<br>
[Bug]           Kalender-Widget bleibt bei Klick auf "Abbrechen" stehen<br>
[Bug]           Netzwerk und Portübersicht fett dargestellt obwohl kein Eintrag vorhanden<br>
[Bug]           Nicht-länderspezifischer Infotext unter "Allgemeine Einstellungen"<br>
[Bug]           Objekt-ID in einem Report wird nicht exportiert<br>
[Bug]           Einstellung des numerischen Formats in den Benutzereinstellungen hat keine Auswirkung<br>
[Bug]           Inhalte der Kategorie Remote Management Controller werden nicht korrekt dargestellt<br>
[Bug]           Fehlender Hilfetext im Verkabelungsimport<br>
[Bug]           Kategorie "Service-Typ" befindet sich immer im Editiermodus<br>
[Bug]           Fehlermeldung, wenn ein neuer Anschluss erzeugt werden soll und die Bezeichnung unique sein muss<br>
[Bug]           Button verwendet den Begriff "...Vorlage..." anstelle von "...Template..."<br>
[Bug]           Feld "Abfrage für jede Zeile" im SQL-Editor des Report-Managers hat keine Auswirkung<br>
[Bug]           Ansicht-Einstellungen des Widgets "Notizen" werden durch Edit-Mode auf "Default" zurückgesetzt<br>
[Bug]           Parameter-Reihenfolge falsch in Darstellung der Rechte<br>
[Bug]           Sprachkonstanten werden im Duplizieren-Dialog nicht übersetzt<br>
[Bug]           Fehler beim Export eines Reports nach CSV<br>

[Amélioration] Importation JDisc : extension de l'importation pour les commutateurs empilés<br>.
[Amélioration] Nouveau paramètre "hostfilter" dans la méthode API cmdb.filter.getUpdatedIPs<br>
[Amélioration] Préfixe global Sysid configurable<br>
[Amélioration] Possibilité d'éditer les exceptions dans les workflows<br>.
[Amélioration] Fonctionnalité de mapping pour les attributs à choix multiples dans l'importation CSV<br>
[Bug] Le numéro de version n'est pas affiché dans l'aperçu de la catégorie "Attribution de logiciel"<br>
[Bug] Les disques durs archivés et supprimés sont proposés pour une association RAID<br>.
[Bug] Il n'est pas possible de créer un nouveau groupe d'objets à partir d'un rapport<br>.
[Bug] Message d'erreur lors de l'enregistrement d'une version de fichier<br>.
[Bug] Si un modèle par défaut est défini dans la configuration du type d'objet "Patchfeld", le patchfeld est créé mais pas affiché lors de la création d'un nouvel objet<br>.
[Bug] Erreur lors de l'utilisation de l'attribut "Installé sur" dans un rapport.<br>
[Bug] La vérification mod_rewrite sur l'aperçu du système échoue si le certificat SSL n'est pas sécurisé<br>.
[Bug] Le champ Refrigerating capacity dans la catégorie Air Conditioning enregistre des valeurs incorrectes<br>.
[Bug] Importation du câblage dans le panneau de brassage : les connexions importées ne sont pas correctement connectées en interne pour les connexions existantes<br>.
[Bug] Les icônes de types d'objets personnalisés ne se mettent pas à l'échelle dans la légende de l'explorateur CMDB<br>.
[Bug] L'appel de certains gestionnaires du contrôleur provoque un message d'erreur<br>.
[Bug] Le setup renvoie à une documentation obsolète<br>.
[Bug] Affichage incorrect du widget "Monitoring..." si aucune connexion hôte n'est possible<br>
[Bug] Impossible d'attribuer un nouveau système d'exploitation via l'importation JDisc si l'objet dispose déjà d'un autre système d'exploitation primaire<br>
[Bug] Erreur lors de l'importation d'un but d'utilisation via l'importation CSV<br>
[Bug] Le format de date allemand empêche l'utilisation du calendrier pour sélectionner la date dans les champs de date<br>.
[Bug] Impossible d'importer au format CSV des valeurs dans des champs Dialogue Plus<br>
[Bug] L'attribut "Dernière modification" dans la sortie du rapport est toujours vide<br>.
[Bug] L'importation CSV ignore le champ d'identification<br>.
[Bug] Les groupes d'objets dynamiques ne peuvent pas être utilisés dans l'explorateur d'objets.<br>
[Bug] L'option "Séparé par virgule" dans l'importation CSV entraîne des importations erronées<br>.
[Bug] Impossible de modifier l'attribut "Tags" de la catégorie "Général" via l'API<br>.
[Bug] Les fonctions de nettoyage ne prennent pas en compte les catégories définies par l'utilisateur<br>.
[Bug] L'attribut "CPU" est affiché plusieurs fois dans la colonne lors de l'exportation CSV d'un rapport<br>.
[Bug] L'attribut "Date de création" n'est pas affiché dans le rapport<br>.
[Bug] "Root-Location" n'est pas traduit en anglais<br>.
[Bug] Si l'on clique sur un lien dans la catégorie d'accès, l'entrée de la catégorie s'ouvre à côté du lien<br>.
[Bug] Les entrées de C__CATS__PERSON_ASSIGNED_GROUPS ne peuvent pas être supprimées via l'API<br>.
[Bug] Attribution de fichiers : le bouton "Télécharger le fichier" lance le téléchargement et ouvre l'entrée<br>.
[Bug] L'importation d'un fichier XML h-inventory provoque une déconnexion<br>.
[Bug] L'utilisateur est déconnecté après l'importation OCS<br>.
[Bug] Seule la dernière notification basée sur un rapport est envoyée<br>.
[Bug] Le journal de service contient tout le journal si aucun composant n'est ajouté<br>.
[Bug] Erreur lors de l'exécution d'un rapport<br>.
[Bug] La notification basée sur un rapport ne trouve pas et ne transmet pas tous les objets trouvés<br>.
[Bug] Sortie du nom configuré des Custom Properties dans les fiches de personnes<br>.
[Bug] "Nettoyer la saisie des données" ne s'applique pas systématiquement à tous les champs<br>.
[Bug] L'attribut "Actif" dans la catégorie "Port" n'est pas vérifié en mode "Actualiser" lors de l'importation JDisc<br>.
[Bug] Erreur d'orthographe dans le texte d'aide du contrôleur<br>.
[Bug] La purge d'un raccourci laisse une entrée dans le navigateur d'objets<br>.
[Bug] La navigation dans l'administration met en évidence une mauvaise zone<br>.
[Bug] La période de validité d'une notification est affichée dans un format incorrect<br>.
[Bug] Dans le journal de bord, la description est toujours marquée comme "modifiée"<br>.
[Bug] Le widget du calendrier reste figé lorsque l'on clique sur "Annuler"<br>.
[Bug] Réseau et aperçu des ports affichés en gras bien qu'il n'y ait pas d'entrée<br>
[Bug] Texte d'information non spécifique au pays sous "Paramètres généraux"<br>.
[Bug] L'ID de l'objet dans un rapport n'est pas exporté<br>.
[Bug] Le réglage du format numérique dans les paramètres utilisateur n'a aucun effet<br>.
[Bug] Le contenu de la catégorie Contrôleurs de gestion à distance ne s'affiche pas correctement<br>.
[Bug] Texte d'aide manquant dans l'importation de câblage<br>
[Bug] La catégorie "Type de service" est toujours en mode édition<br>.
[Bug] Message d'erreur lorsqu'un nouveau raccordement doit être créé et que la désignation doit être unique<br>.
[Bug] Le bouton utilise le terme "...Modèle..." au lieu de "...Template..."<br>.
[Bug] Le champ "Requête pour chaque ligne" dans l'éditeur SQL du gestionnaire de rapports n'a aucun effet<br>.
[Bug] Les paramètres d'affichage du widget "Notes" sont réinitialisés à "Default" par le mode d'édition<br>.
[Bug] Ordre des paramètres incorrect dans la représentation des droits<br>.
[Bug] Les constantes de langue ne sont pas traduites dans la boîte de dialogue de duplication<br>.
[Bug] Erreur lors de l'exportation d'un rapport au format CSV<br>.