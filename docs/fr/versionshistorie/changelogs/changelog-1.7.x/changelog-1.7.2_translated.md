<!-- TRANSLATED by md-translate -->
# Changelog 1.7.2

# Changelog 1.7.2

[Verbesserung]  Überarbeitete Workflow E-Mail Texte<br>
[Verbesserung]  Kategorie Bilder: Upload über die JSON-RPC API<br>
[Verbesserung]  Neues Recht für Objektlistenkonfiguration<br>
[Verbesserung]  Standardmäßige Ausklammerung von Beziehungen in Reports<br>
[Verbesserung]  Purge von Reports nur nach Rückfrage<br>
[Verbesserung]  Standortsicht: Berücksichtigung von Objektberechtigungen konfigurierbar (Ausblenden)<br>
[Verbesserung]  Serviceauswahl in CMDB Explorer: Berücksichtigung von Objektberechtigungen konfigurierbar (Ausblenden)<br>
[Verbesserung]  CMDB Explorer: Berücksichtigung von Objektberechtigungen konfigurierbar (Ausblenden)<br>
[Verbesserung]  Objektbrowser: Berücksichtigung von Objektberechtigungen konfigurierbar (Ausblenden)<br>
[Bug]           Benutzerdefinierte Single-Value-Kategorien erzeugen neue Einträge, wenn der erste Wert nicht gefüllt wurde<br>
[Bug]           Generierter Link zu Geokoordinaten zeigt auf die eigene Position<br>
[Bug]           Betriebskosten werden im Report nicht ausgegeben<br>
[Bug]           Objektliste: Attribut Variante aus der Spezifischen Kategorie Varianten zeigt nur einen Wert an.<br>
[Bug]           Fehler bei der Bearbeitung von Objekten ohne Inhalt in der Kategorie "Standort" über die Listeneditierung<br>
[Bug]           API: Nicht-Übergabe einer Beschreibung führt bei Benutzerdefinierten Kategorien dazu, dass diese geleert wird (Methode "cmdb.category")<br>
[Bug]           API: Leere Dialoge liefern ein leeres Array, wohingegen gesetzte Dialoge ein Objekt zurückgeben (Methode "cmdb.category")<br>
[Bug]           Layer-3-Netz Zuordnung geht bei Update des Layer-2-Netzes über die API verloren<br>
[Bug]           Inhalte von Dialog+-Felder werden im Report durch den ersten Wert überschrieben.<br>
[Bug]           Archivieren der Kategorie Service Beziehung wird nicht korrekt angezeigt<br>
[Bug]           Controller weist auf falschen Befehl hin<br>
[Bug]           Aufrufen einer Objektliste erzeugt Meldung "Subquery is ambigoud"<br>
[Bug]           Report kommt mit mehreren SELECT nicht zurecht<br>
[Bug]           Button "Archivieren" purged Kategorieeinträge<br>
[Bug]           Nach Update wird auf Log im temp-Verzeichnis verlinkt<br>
[Bug]           Checkboxen bleiben nach Duplizieren selektiert<br>
[Bug]           Beim Duplizieren erscheint als Erfolgsmeldung eine Language-Konstante<br>
[Bug]           Validierung für Datumsfelder in benutzerdefinierten Kategorien erkennt Inhalte nicht<br>
[Bug]           Rechtevergabe für zur Fehlermeldung<br>
[Bug]           Verkabelungsimport: Bestehende Anschlüsse werden nicht verkabelt<br>
[Bug]           Objekt-Beziehung einer benutzerdefinierten Kategorie wird im CSV-Import als Objektverknüpfung angezeigt.<br>
[Bug]           Fehler beim Aufruf der vorhandenen Massenänderungsvorlagen<br>
[Bug]           Eintragen einer MAC-Adresse ändert die Geschwindigkeit eines Ports<br>
[Bug]           Dialog-Plus-Felder in benutzerdefinierten Kategorien können nicht über die Listeneditierung bearbeitet werden<br>
[Bug]           In der Kategorie "Service Zuweisung" können nicht alle Objekte gleichzeitig über den Objektbrowser entfernt werden<br>
[Bug]           Benutzerdefinierte Multi-Value-Kategorien können über die Listeneditierung keine neuen Einträge erhalten<br>
[Bug]           Events-Modul wirft Fatal Error bei Quickpurge eines Objekts<br>
[Bug]           CSV-Import erzeugt in benutzerdefinierten Kategorien mit Objektbeziehung keine Beziehung<br>
[Bug]           Fehler bei der Vergabe eines Rechts über die Kategorie "Rechtevergabe" wenn zuvor kein Recht existiert.<br>
[Bug]           Bei Installation vom Dokumenten-Modul fehlt ein PHP-Modul<br>
[Bug]           Suchfeld für Texteingabe schaltet nach einmaliger Falscheingabe nicht auf "normale" Darstellung zurück.<br>
[Bug]           Report-View "CMDB-Status Änderungen" zeigt nicht alle Änderungen an<br>
[Bug]           Vorgegebene Werte aus der Validierung werden nicht in Dropdown-Liste dargestellt<br>
[Bug]           Kategorie "Standort" kann nur dann in der Listeneditierung bearbeitet werden, wenn ein Standort gepflegt ist oder war<br>
[Bug]           Pflichtfelder werden in benutzerdefinierten Kategorien nicht angezeigt<br>
[Bug]           Änderungskommentar wird nach dem Speichern nicht angezeigt, wenn er aktiviert wurde<br>
[Bug]           Feldtyp "Objekt-Beziehung (Mehrere Objekte)" erlaubt lediglich die Auswahl eines Objekts.<br>
[Bug]           FC-Ports werden beim Import doppelt angelegt und als "RJ-45" dokumentiert<br>
[Bug]           Das Bearbeiten der Kategorie SLA ist nicht mehr möglich, wenn ein inkompatibler Wert eingetragen wurde<br>
[Bug]           Vorschlagsfunktion bei der Attributsauswahl zeigt nur dann Ergebnisse, wenn der Anfang der Bezeichnung eingegeben wird<br>
[Bug]           Schaltfläche "Als CSV exporiteren" in Objektlisten erlaubt den Export selbst ohne Zugriff auf Objekte<br>
[Bug]           Fehler beim Aufruf der Verwaltung mit einem Nicht-Admin-User<br>
[Bug]           PHP-Warning in der Verwaltung<br>
[Bug]           Icons werden in der Standortsicht nicht skaliert.<br>
[Bug]           Attribute "Zugewiesene Adressen" im Report nicht verständlich<br>
[Bug]           Klick auf "Import" unter "Import - Verkabelung" zeigt fälschlicherweise an, dass der Import erfolgreich gewesen sei<br>
[Bug]           Datumseingaben werden nicht gespeichert, wennn das Format nicht dem eingestellten Format entspricht<br>
[Bug]           Objekt-Browser: Wenn man Objekte über den "Alle"-Button selektiert werden nicht alle Objekte markiert<br>
[Bug]           Upload einer CSV-Datei schlägt fehl, wenn ein windowsbasiertes System eingesetzt wird<br>
[Bug]           Attribut "Investitionskosten" wird in Reports nur mit " - " ausgegeben<br>
[Bug]           Beim Lösen von Objektbeziehungen wird in der Listeneditierung ein zufälliges Objekt ausgewählt<br>
[Bug]           Attribut "Layer-2-Netz-Zuordnung" ist nicht im CSV-Import verfügbar.<br>
[Bug]           Rechte-Darstellung und Rechte-Vergabe differieren bei der Parameter-Anzeige<br>
[Bug]           Template Instanziierung: Anschlüsse werden nicht miteinander verbunden<br>
[Bug]           Aktualisieren des Browsers nach Duplizieren wiederholt das letzte Duplizieren<br>
[Bug]           Konfiguration des Widget "Willkommen" hat keine englische Übersetzung<br>
[Bug]           Variante des Betriebssystems wird nicht von der Massenänderungsvorlage übernommen<br>

[Amélioration] Texte du workflow e-mail révisé<br>
[Amélioration] Catégorie Images : Téléchargement via l'API JSON-RPC<br>
[Amélioration] Nouveau droit pour la configuration de la liste d'objets<br>
[Amélioration] Exclusion par défaut des relations dans les rapports<br>
[Amélioration] Purge des rapports uniquement après demande de confirmation<br>
[Amélioration] Vue du site : prise en compte des autorisations d'objets configurable (masquer)<br>
[Amélioration] Sélection de services dans CMDB Explorer : prise en compte des autorisations d'objets configurable (masquer)<br>
[Amélioration] CMDB Explorer : prise en compte des autorisations d'objets configurable (masquer)<br>
[Amélioration] Explorateur d'objets : Prise en compte des autorisations d'objets configurable (masquer)<br>
[Bug] Les catégories à valeur unique définies par l'utilisateur génèrent de nouvelles entrées si la première valeur n'est pas remplie<br>.
[Bug] Le lien généré vers les coordonnées géographiques pointe vers sa propre position<br>.
[Bug] Les coûts d'exploitation ne sont pas affichés dans le rapport<br>.
[Bug] Liste d'objets : L'attribut Variante de la catégorie spécifique Variantes n'affiche qu'une seule valeur.<br>
[Bug] Erreur lors de l'édition d'objets sans contenu dans la catégorie "Emplacement" via l'édition de liste<br>.
[Bug] API : La non-transmission d'une description entraîne le vidage des catégories définies par l'utilisateur (méthode "cmdb.category")<br>.
[Bug] API : Les boîtes de dialogue vides renvoient un tableau vide, alors que les boîtes de dialogue définies renvoient un objet (méthode "cmdb.category")<br>.
[Bug] L'affectation du réseau de niveau 3 est perdue lors de la mise à jour du réseau de niveau 2 via l'API<br>.
[Bug] Le contenu des champs Dialog+ est écrasé par la première valeur dans le rapport.<br>
[Bug] L'archivage de la catégorie relation de service ne s'affiche pas correctement<br>.
[Bug] Le contrôleur indique une commande incorrecte<br>.
[Bug] L'appel d'une liste d'objets génère le message "Subquery is ambigoud"<br>.
[Bug] Le rapport ne gère pas les SELECT multiples<br>.
[Bug] Bouton "Archiver" purge les entrées de catégorie<br>
[Bug] Après la mise à jour, un lien est établi vers le journal dans le répertoire temp<br>.
[Bug] Les cases à cocher restent sélectionnées après la duplication<br>.
[Bug] Lors de la duplication, une constante de langage apparaît comme message de succès<br>.
[Bug] La validation des champs de date dans les catégories personnalisées ne reconnaît pas le contenu<br>.
[Bug] Attribution de droits pour le message d'erreur<br>.
[Bug] Importation du câblage : les connexions existantes ne sont pas câblées<br>
[Bug] La relation d'objet d'une catégorie définie par l'utilisateur est affichée comme lien d'objet dans l'importation CSV.<br>
[Bug] Erreur lors de l'appel des modèles de modification en masse existants<br>.
[Bug] La saisie d'une adresse MAC modifie la vitesse d'un port<br>.
[Bug] Les champs Dialogue-Plus dans les catégories personnalisées ne peuvent pas être modifiés via l'édition de liste<br>.
[Bug] Dans la catégorie "Attribution de service", tous les objets ne peuvent pas être supprimés simultanément via le navigateur d'objets<br>.
[Bug] Les catégories multi-valeurs définies par l'utilisateur ne peuvent pas recevoir de nouvelles entrées via l'édition de listes<br>.
[Bug] Le module Events lance une erreur fatale lors de la purge rapide d'un objet<br>.
[Bug] L'importation CSV ne crée pas de relation dans les catégories personnalisées avec relation d'objet<br>.
[Bug] Erreur lors de l'attribution d'un droit via la catégorie "Attribution de droits" si aucun droit n'existe auparavant <br>.
[Bug] Il manque un module PHP lors de l'installation du module Documents<br>.
[Bug] Le champ de recherche pour la saisie de texte ne revient pas à l'affichage "normal" après une saisie erronée.<br>
[Bug] La vue du rapport "Modifications de l'état de la CMDB" n'affiche pas toutes les modifications<br>.
[Bug] Les valeurs prédéfinies de la validation ne sont pas affichées dans la liste déroulante<br>.
[Bug] La catégorie "Site" ne peut être éditée dans la liste que si un site est ou a été géré<br>.
[Bug] Les champs obligatoires ne sont pas affichés dans les catégories définies par l'utilisateur<br>.
[Bug] Le commentaire de modification ne s'affiche pas après l'enregistrement s'il a été activé<br>.
[Bug] Le type de champ "Relation d'objet (plusieurs objets)" ne permet que la sélection d'un seul objet.<br>
[Bug] Les ports FC sont créés en double lors de l'importation et documentés comme "RJ-45"<br>.
[Bug] Il n'est plus possible d'éditer la catégorie SLA si une valeur incompatible a été saisie<br>.
[Bug] La fonction de suggestion lors de la sélection d'attributs n'affiche des résultats que si le début de la désignation est saisi<br>.
[Bug] Le bouton "Exporter en CSV" dans les listes d'objets permet l'exportation même sans accès aux objets<br>.
[Bug] Erreur lors de l'appel de l'administration avec un utilisateur non-admin<br>.
[Bug] Avertissement PHP dans l'administration<br>
[Bug] Les icônes ne sont pas mises à l'échelle dans la vue du site.<br>
[Bug] Attributs "Adresses attribuées" incompréhensibles dans le rapport<br>.
[Bug] Un clic sur "Importation" sous "Importation - Câblage" indique de manière erronée que l'importation a réussi<br>.
[Bug] Les dates ne sont pas enregistrées si le format ne correspond pas au format paramétré<br>.
[Bug] Explorateur d'objets : Lorsque l'on sélectionne des objets en cliquant sur le bouton "Tout", tous les objets ne sont pas sélectionnés<br>.
[Bug] Le téléchargement d'un fichier CSV échoue lorsqu'un système basé sur Windows est utilisé<br>.
[Bug] L'attribut "Coûts d'investissement" n'est affiché que par " - " dans les rapports<br>.
[Bug] Lors de la résolution de relations entre objets, un objet aléatoire est sélectionné dans l'édition de liste<br>.
[Bug] L'attribut "Affectation du réseau de la couche 2" n'est pas disponible dans l'importation CSV.<br>
[Bug] La représentation des droits et l'attribution des droits diffèrent lors de l'affichage des paramètres<br>.
[Bug] Instanciation du modèle : les connexions ne sont pas reliées entre elles<br>.
[Bug] L'actualisation du navigateur après la duplication répète la dernière duplication<br>.
[Bug] La configuration du widget "Bienvenue" n'a pas de traduction en anglais<br>.
[Bug] La variante du système d'exploitation n'est pas prise en compte par le modèle de modification en masse<br>.