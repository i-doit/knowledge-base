<!-- TRANSLATED by md-translate -->
# Changelog 1.6.3

# Changelog 1.6.3

[Verbesserung]  Direkte Verlinkung von URLs in Report-Ergebnissen<br>
[Verbesserung]  Ergänzung der zugewiesenen Lizenz in Kategorie "Installation"<br>
[Verbesserung]  Beschleunigte Suche durch Ausklammern von Beziehungen<br>
[Verbesserung]  Drastische Performanceverbesserung beim Archivieren und Wiederherstellen des Logbuchs in die "lokale Datenbank"<br>
[Änderung]      Feldtypen von Benutzerdefinierten Kategorien können nun aus Sicherheitsgründen nach Anlage nicht mehr bearbeitet werden<br>
[Bug]           Quickpurge-Button ist in Kategorie "Kontaktzuweisung" nicht verfügbar<br>
[Bug]           Eintrag in die Suchzeile eines Objekt-Browsers wird in den Filter einer dahinterliegenden Kategorieliste übernommen<br>
[Bug]           Fehler bei der Aktivierung der SNMP-Abfragen in Kategorie "PDU".<br>
[Bug]           Recht zur Einsicht von Services hat keine Auswirkungen auf "Extras" => "Services"<br>
[Bug]           Nächstmögliches Vertragsende wird bei verwendung von "Fristablauf" nicht korrekt berechnet<br>
[Bug]           Leeren des Caches verfälscht die Systemeinstellungen<br>
[Bug]           Wenn leere Kategorien ausgeblendet werden, werden Ordner-Kategorien beim ersten Aufruf ebenfalls nicht angezeigt<br>
[Bug]           Bei der ersten Erstellung kann die Anzahl an Slots eines Chassis nicht angegeben werden.<br>
[Bug]           Physikalische Standorte mit Hochkomma können im Standort-Browser nicht ausgewählt werden.<br>
[Bug]           Systemfehlermeldung unter "Beziehungen" nach Klick auf "Archivieren" oder "Quickpurge"<br>
[Bug]           Report Modul: Attribut "Beschreibung" aus der Globalen Kategorie "Standort" wird nicht angeboten.<br>
[Bug]           Fehlermeldung in Beziehungen nach Klick auf "Gehe-zur-letzten-Seite"-Button<br>
[Bug]           Attribut "Geschwindigkeit" eines Ports wird über die Listeneditierung im falschen Format gespeichert.<br>
[Bug]           Multi-Value-Option "Ersetzen" des CSV-Imports berücksichtigt keine benutzerdefinierten Kategorien<br>
[Bug]           Unter gewissen Umständen ist das Drag and Drop in Objektlisten nicht möglich<br>
[Bug]           Listeneditierung lässt das Bearbeiten einer Katgorie nicht zu, wenn ein Benutzer diese nur in einigen Objekttypen bearbeiten darf<br>
[Bug]           Beziehungsfehler "Your relation type for table 'isys_catg_contact_list' is empty" beim Verknüpfen von Kontakten<br>
[Bug]           Hinweis bei Eingabe von 0 Tagen für die Archivier-Einstellung ist inkorrekt<br>
[Bug]           Listeneditierung: Falsche Darstellung der Ja-Nein Felder von Benutzerdefinierten Kategorien<br>
[Bug]           Überflüssiger Edit-Button im Edit-Mode unter Logbuch-Archivieren<br>
[Bug]           Sonderzeichen in Textfeldern führen dazu, dass Änderungen über die Listeneditierung nicht gespeichert werden<br>
[Bug]           Beim CSV-Import über den Controller hat die Einstellung bezüglich der Überschriftenzeile keine Auswirkung<br>
[Bug]           Softwarezuweisung: Anwendungen haben teilweise eine Priorität von Primary, obwohl diese nur bei Betriebssystemen Einsatz finden sollte<br>
[Bug]           Eigenes Währungsformat hat keine Auswirkung auf die Darstellung<br>
[Bug]           Benutzerdefinierte Objekttypen tauchen im Vertragsbrowser nicht unter "kürzlich erstellt" auf<br>
[Bug]           Restgarantie in Kategorie Buchhaltung errechnet auch verbleibende Tage, wenn das Datum der Anschaffung in der Zukunft liegt<br>
[Bug]           Nach CSV-Import einer Netzadresse inkl. Suffix werden Netzmaske und Adressbereich erst nach einmaligem Bearbeiten angezeigt<br>
[Bug]           Beim CSV-Import über den i-doit Controller werden verknüpfte Objekte nicht angelegt, wenn diese nicht existieren<br>
[Bug]           Mitglieder einer selbstdefinierten Personengruppe erhalten nicht die vollen Ergebnisse einer Suchanfrage<br>
[Bug]           Nagios-Export exportiert im Attribut "display_name" den Wert 1 statt des eigentlichen Namens<br>
[Bug]           Attribut "virtual_machine" aus Kategorie C__CATG__VIRTUAL_MACHINE wird nicht korrekt über die API ausgelesen<br>
[Bug]           Inhalte aus benutzerdefinierten Kategorien werden nicht dupliziert.<br>
[Bug]           Fehlermeldung und Buttontext-Änderung in Dashboard-Konfiguration nach Klick auf "Überschreiben" ohne Objektauswahl<br>
[Bug]           SQL-Fehler beim Verändern der Check_MK Hostmerkmale<br>
[Bug]           Sortierung einer Spalte in der Ergebnisliste einer Suche leert die Seite<br>
[Bug]           Fehler beim Purgen eines Eintrags in der Kategorie "SOA-Stacks"<br>
[Bug]           Verknüpfung eines Layer-3-Netzes in der Kategorie "Hostadresse" über den CSV-Import nicht möglich<br>
[Bug]           "Doppelte Single-Value Einträge löschen" hat keinen Einfluss auf benutzerdefinierte Kategorien<br>
[Bug]           Die Portverbindungen (unter JDisc "Connections") werden nicht mehr importiert.<br>
[Bug]           Objekt-Bezeichnungen in Kategorie "Schränke" werden nur dann angezeigt, wenn das Objekt mind. 2 Höheneinheiten einnimmt<br>
[Bug]           WAN-Leitungs-Kapazitäten werden fälschlicherweise in der Listendarstellung umgerechnet<br>
[Bug]           QR-Code im Popup anders, als in der Druckansicht<br>
[Bug]           Fehler beim Ergänzen des Attributs "Variante" in die Listenansicht<br>
[Bug]           Berechtigung zur Einsicht einzelner Objekte erlaubt nicht automatisch die Ansicht der Objekt-Liste<br>
[Bug]           Logbucheintrag für den Einschub in einen Slot wird innerhalb eines Geräts nicht im Logbuch dargestellt<br>
[Bug]           CSV-Import Fehler: CSV-Helper does not exist: csv_helper__virtual<br>
[Bug]           Falscher "mouse over"-Text in Liste für "Existierende Termine"<br>
[Bug]           Api Methode "cmdb.category.create" liefert bei bereits existierenden Single Value Einträgen "true" als "id" zurück<br>
[Bug]           Einheiten zu Vertragsinformationen werden im Report nicht ausgegeben<br>
[Bug]           Attribute zu WAN-Leitungen werden bei Standard-Listendarstellung nicht korrekt angezeigt<br>
[Bug]           Darstellungfehler nach CSV-Import<br>
[Bug]           "Editieren" auf Übersichtsseiten ist für User mit Reader-Rechten nicht ausgegraut<br>
[Bug]           Lokationen einer CSV-Datei werden nicht importiert und verknüpft, wenn die Standortobjekte noch nicht existieren<br>
[Bug]           "Objekt über Klick auf die Zeile" lässt sich nicht speichern<br>
[Bug]           CSV-Import von Speicherkapazität gibt Fehlermeldung zurück<br>
[Bug]           Beim CSV-Import ändert sich das Profil von alleine<br>
[Bug]           Kategorie SOA-Stacks kann nicht zugewiesen werden<br>
[Bug]           CSV-Import Profil-Auswahl verschwindet bei kleineren Fenstern hinter der Auswahl des glob. Objekttyps<br>
[Bug]           Fehler bei der Standortberechtigung von Kategorien und Objekten in einer Lokation<br>
[Bug]           Rechte auf Kategorien unterhalb eines Standorts verhindern die Darstellung von Kategorien in der Listenkonfiguration<br>
[Bug]           Feldvalidierung (Eindeutigkeit) funktioniert nicht für benutzerdefinierte Kategorien<br>
[Bug]           Das zugeordnete Netze unter Hostadresse verändert sich beim erzeugen einer IPv4-Adresse<br>
[Bug]           Unpassende und ungeordnete Ausnahmenanzeige für das Datum-Feld unter Workflow-Parameter<br>
[Bug]           Ablauf einer Kündigungsfrist wird nicht benachrichtigt, wenn die Kündigungsfrist auf 0 steht<br>
[Bug]           Recht auf Kategorien wird beim erneuten Laden der Konfiguration nicht dargestellt<br>
[Bug]           Whitelist beim JDisc-Import akzeptiert keine Sonderzeichen/Leerzeichen<br>
[Bug]           Ausblenden eines Objekttyps führt dazu, dass Objekte dieses Typs nicht in Schrankansichten dargestellt werden<br>
[Bug]           JDisc-Import importiert einige Werte wiederholt und erzeugt unnötige Logbuch-Einträge<br>
[Bug]           Fehler beim Import von i-doit XML-Dateien<br>
[Bug]           Scrollen in der Menü-Leiste erfolgt lediglich nach links<br>
[Bug]           Auswahl von "Objekt1" und "Objekt2" aus "Beziehungsdetails" führt zu einem Fehler in der Liste der Beziehungen<br>
[Bug]           Schaltfläche zum Löschen von XML-Dateien hat keine Auswirkung<br>
[Bug]           Datenbankfehler beim Aufruf der Kategorie "Dateien" => "Zugewiesene Dateien"<br>
[Bug]           Attribut "Virtuelle Maschine" kann nicht über den CSV-Import befüllt werden<br>
[Bug]           Kategorie "Betriebssystem" kann nicht über die Listeneditierung bearbeitet werden.<br>
[Bug]           XML-Export exportiert keine benutzerdefinierten Kategorien<br>
[Bug]           Fehler in der Kontaktzuweisung im CSV-Import<br>
[Bug]           Doppeltes Speichern zerstört Softwarezuweisung<br>
[Bug]           Berechnung des nächstmöglichen Vertragsendes berechnet bei längeren Zeiträumen falsch<br>
[Bug]           Button für die Erstellung eines Objekts aus Template dauerhaft ausgegraut<br>
[Bug]           Lösen eines Objekts aus einem Netz lädt die Liste nicht automatisch neu<br>
[Bug]           Attribut "Versionsnummer" in Kategorie "Betriebssystem" wird bei Massenänderung nicht übernommen<br>
[Bug]           Legende wird in IP-Liste ausgeblendet, wenn die Auflösung nicht ausreicht, diese auf einer Seite darzustellen.<br>
[Bug]           Rechtschreibfehler in der Beschreibung der JDisc-Import Modi<br>
[Bug]           Bearbeitung der Kategorie "Buchhaltung" über Listeneditierung nur möglich, wenn "Eingekauft bei" zuvor gefüllt wurde.<br>
[Bug]           Servicezuweisung zu mehreren Objekten über die Listeneditierung wird nicht gespeichert<br>
[Bug]           Ausgeklapptes Extras-Menü ist verschoben<br>
[Bug]           In der Betriebssystem-Kategorie wird das gepflegte Betriebssystem nicht dargestellt<br>
[Bug]           "Gemanagte Geräte" können nicht über die Listeneditierung ergänzt werden.<br>
[Bug]           Event-Funktion wird bei Änderungen in Kategorie "Kontaktzuweisung" nicht ausgelöst<br>
[Bug]           Event-Funktion wird bei einem Purge in benutzerdefinierten Kategorien nicht ausgelöst<br>
[Bug]           Verwendung von mehr als 9 LDAP-Servern nicht möglich<br>
[Bug]           Verbundene Router und verbundene Netze in Kategorie "WAN-Leitungen" können nicht gelöst werden<br>
[Bug]           Im Beschreibungsfeld eingetragenen "\" verschwinden im Logbucheintrag<br>
[Bug]           Listenansicht zeigt räumlich zugeordnete Objekte nicht an<br>
[Bug]           CSV-Import von Netzen importiert Netzmaske falsch<br>
[Bug]           Zuweisung eines Objekts eines benutzerdef. Objekttyps im Attribut "Eingekauft bei" führt beim Duplizieren des Objekts zur Anlage eines neuen Objekts<br>
[Bug]           Report-Kategorien können nicht sortiert werden<br>
[Bug]           Fehlermeldung beim Aufruf der Lizenzübersicht<br>
[Bug]           Wert "0" kann nicht in benutzerdefinierte Dialog-Plus-Felder über den CSV-Import importiert werden<br>
[Bug]           Kategorie "Gerät": Einträge für SSD und SD-Card sind doppelt<br>
[Bug]           Datumsfelder in benutzerdefinierten Kategorien werden nicht über den CSV-Import befüllt<br>
[Bug]           Feld in Kategorie SLA kann nicht verwendet werden<br>
[Bug]           Das in Beziehung stehende Objekt einer Impliziten Beziehung darf nicht über die Kategorie "Beziehungen" verändert werden.<br>
[Bug]           Listeneditierung zeigt einen Validierungsfehler, wenn ein Feld als eindeutig definiert wurde<br>
[Bug]           Verwendung eines Reports in E-Mail-Benachrichtigung gibt HTML-Tags von Beschreibungsfeldern aus<br>
[Bug]           Regulärer Ausdruck für ein Beschreibungsfeld muss die Zeichen < > & und ; erlauben, ansonsten kommt es zu einer Fehlermeldung<br>
[Bug]           OCS Import kann via "mysqli" keine Datenbank-Verbindung aufbauen<br>

[Amélioration] Lien direct entre les URL dans les résultats des rapports<br>.
[Amélioration] Ajout de la licence attribuée dans la catégorie "Installation"<br>.
[Amélioration] Accélération de la recherche en excluant les relations<br>.
[Amélioration] Amélioration drastique des performances lors de l'archivage et de la restauration du journal dans la "base de données locale"<br>.
[Modification] Les types de champs des catégories personnalisées ne peuvent désormais plus être modifiés après leur création pour des raisons de sécurité<br>.
[Bug] Le bouton Quickpurge n'est pas disponible dans la catégorie "Attribution de contacts"<br>.
[Bug] L'entrée dans la ligne de recherche d'un navigateur d'objets est reprise dans le filtre d'une liste de catégories située derrière elle<br>.
[Bug] Erreur lors de l'activation des requêtes SNMP dans la catégorie "PDU".<br>
[Bug] Le droit de consulter les services n'a pas d'effet sur "Outils" => "Services"<br>.
[Bug] La prochaine date de fin de contrat n'est pas calculée correctement si l'on utilise "Expiration"<br>.
[Bug] Vider le cache fausse les paramètres du système<br>.
[Bug] Si les catégories vides sont masquées, les catégories de dossiers ne sont pas non plus affichées lors du premier appel<br>.
[Bug] Lors de la création initiale, le nombre de slots d'un châssis ne peut pas être spécifié.<br>
[Bug] Les emplacements physiques avec une apostrophe ne peuvent pas être sélectionnés dans le navigateur d'emplacements.<br>
[Bug] Message d'erreur système sous "Relations" après avoir cliqué sur "Archiver" ou "Quickpurge"<br>.
[Bug] Module de rapport : L'attribut "Description" de la catégorie globale "Emplacement" n'est pas proposé.<br>
[Bug] Message d'erreur dans les relations après avoir cliqué sur le bouton "Aller à la dernière page"<br>.
[Bug] L'attribut "Vitesse" d'un port est enregistré au mauvais format via l'édition de liste.<br>
[Bug] L'option multi-valeurs "Remplacer" de l'importation CSV ne prend pas en compte les catégories définies par l'utilisateur<br>.
[Bug] Dans certaines circonstances, le glisser-déposer dans les listes d'objets n'est pas possible<br>.
[Bug] L'édition de liste ne permet pas de modifier une catégorie si un utilisateur ne peut la modifier que dans certains types d'objets<br>.
[Bug] Erreur de relation "Your relation type for table 'isys_catg_contact_list' is empty" lors de la liaison de contacts<br>.
[Bug] Indication incorrecte lors de la saisie de 0 jour pour le réglage de l'archivage<br>.
[Bug] Édition de liste : mauvaise représentation des champs Oui/Non des catégories personnalisées<br>.
[Bug] Bouton d'édition superflu dans le mode d'édition sous Archivage du journal<br>.
[Bug] Les caractères spéciaux dans les champs de texte empêchent l'enregistrement des modifications via l'édition de listes<br>.
[Bug] Lors de l'importation de CSV via le contrôleur, le réglage concernant la ligne d'en-tête n'a pas d'effet<br>.
[Bug] Attribution de logiciel : les applications ont parfois une priorité de Primary, alors qu'elle ne devrait être utilisée que pour les systèmes d'exploitation<br>.
[Bug] Le format de devise personnalisé n'a pas d'effet sur l'affichage<br>.
[Bug] Les types d'objets définis par l'utilisateur n'apparaissent pas dans le navigateur de contrats sous "créé récemment"<br>.
[Bug] La garantie résiduelle dans la catégorie Comptabilité calcule également les jours restants si la date d'achat est dans le futur<br>.
[Bug] Après l'importation CSV d'une adresse de réseau avec suffixe, le masque de réseau et la plage d'adresses ne sont affichés qu'après une seule modification<br>.
[Bug] Lors de l'importation CSV via le contrôleur i-doit, les objets liés ne sont pas créés s'ils n'existent pas<br>.
[Bug] Les membres d'un groupe de personnes défini par l'utilisateur ne reçoivent pas les résultats complets d'une requête de recherche<br>.
[Bug] L'export Nagios exporte la valeur 1 dans l'attribut "display_name" au lieu du nom réel<br>.
[Bug] L'attribut "virtual_machine" de la catégorie C__CATG__VIRTUAL_MACHINE n'est pas lu correctement via l'API<br>.
[Bug] Le contenu des catégories personnalisées n'est pas dupliqué.<br>
[Bug] Message d'erreur et modification du texte du bouton dans la configuration du tableau de bord après avoir cliqué sur "Ecraser" sans sélectionner d'objet<br>.
[Bug] Erreur SQL lors de la modification des caractéristiques de l'hôte Check_MK<br>.
[Bug] Le tri d'une colonne dans la liste des résultats d'une recherche vide la page<br>
[Bug] Erreur lors de la purge d'une entrée dans la catégorie "SOA-Stacks"<br>
[Bug] Impossible de lier un réseau de couche 3 dans la catégorie "Adresse de l'hôte" via l'importation CSV<br>.
[Bug] "Supprimer les entrées en double à valeur unique" n'affecte pas les catégories personnalisées<br>.
[Bug] Les connexions de port (sous JDisc "Connections") ne sont plus importées.<br>
[Bug] Les noms des objets dans la catégorie "Armoires" ne sont affichés que si l'objet occupe au moins 2 unités de hauteur<br>.
[Bug] Les capacités des lignes WAN sont converties de manière erronée dans la présentation de la liste<br>.
[Bug] Code QR différent dans le popup et dans l'aperçu avant impression<br>.
[Bug] Erreur lors de l'ajout de l'attribut "variante" dans la vue en liste<br>.
[Bug] L'autorisation de consulter des objets individuels ne permet pas automatiquement de consulter la liste des objets<br>.
[Bug] L'entrée du journal de bord pour l'insertion dans un slot n'est pas représentée dans le journal de bord à l'intérieur d'un appareil<br>.
[Bug] Erreur d'importation CSV : CSV-Helper does not exist : csv_helper__virtual<br>.
[Bug] Texte "mouse over" erroné dans la liste des "rendez-vous existants"<br>.
[Bug] La méthode api "cmdb.category.create" renvoie "true" comme "id" pour les entrées à valeur unique déjà existantes<br>.
[Bug] Les unités relatives aux informations contractuelles ne sont pas éditées dans le rapport<br>.
[Bug] Les attributs des lignes WAN ne sont pas correctement affichés dans la présentation standard de la liste<br>.
[Bug] Erreur de représentation après importation CSV<br>.
[Bug] "Editer" sur les pages d'aperçu n'est pas grisé pour les utilisateurs ayant des droits de lecture<br>.
[Bug] Les localisations d'un fichier CSV ne sont pas importées et liées si les objets de localisation n'existent pas encore<br>.
[Bug] Impossible d'enregistrer "Objet par clic sur la ligne"<br>.
[Bug] L'importation CSV de la capacité de stockage renvoie un message d'erreur<br>.
[Bug] Lors de l'importation CSV, le profil change tout seul<br>.
[Bug] Impossible d'attribuer une catégorie aux piles SOA<br>.
[Bug] Le choix du profil lors de l'importation CSV disparaît derrière le choix de la globalité dans les petites fenêtres. Type d'objet<br>
[Bug] Erreur dans les droits de localisation des catégories et des objets dans un lieu<br>.
[Bug] Les droits sur les catégories en dessous d'un emplacement empêchent l'affichage des catégories dans la configuration de la liste<br>.
[Bug] La validation des champs (unicité) ne fonctionne pas pour les catégories définies par l'utilisateur<br>.
[Bug] Le réseau associé sous Adresse hôte change lors de la création d'une adresse IPv4<br>.
[Bug] Affichage inapproprié et désordonné des exceptions pour le champ date sous Paramètres de workflow<br>.
[Bug] L'expiration d'un délai de préavis n'est pas notifiée si le délai de préavis est à 0<br>.
[Bug] Le droit aux catégories n'est pas affiché lors du rechargement de la configuration<br>.
[Bug] La liste blanche lors de l'importation de JDisc n'accepte pas les caractères spéciaux/espaces<br>.
[Bug] Le masquage d'un type d'objet entraîne l'absence d'affichage des objets de ce type dans les vues d'armoire<br>.
[Bug] L'importation JDisc importe certaines valeurs de manière répétée et crée des entrées inutiles dans le journal<br>.
[Bug] Erreur lors de l'importation de fichiers XML i-doit<br>.
[Bug] Le défilement dans la barre de menu se fait uniquement vers la gauche<br>.
[Bug] La sélection de "Objet1" et "Objet2" dans "Détails des relations" provoque une erreur dans la liste des relations<br>.
[Bug] Le bouton de suppression des fichiers XML n'a aucun effet<br>.
[Bug] Erreur de base de données lors de l'appel de la catégorie "Fichiers" => "Fichiers attribués"<br>.
[Bug] L'attribut "Machine virtuelle" ne peut pas être rempli via l'importation CSV<br>.
[Bug] La catégorie "Système d'exploitation" ne peut pas être modifiée via l'édition de liste.<br>
[Bug] L'export XML n'exporte pas les catégories définies par l'utilisateur<br>.
[Bug] Erreur dans l'attribution des contacts dans l'importation CSV<br>.
[Bug] La double sauvegarde détruit l'attribution du logiciel<br>.
[Bug] Le calcul de la prochaine fin de contrat est incorrect pour les périodes plus longues<br>.
[Bug] Bouton de création d'un objet à partir d'un template grisé en permanence<br>
[Bug] La suppression d'un objet d'un réseau ne recharge pas automatiquement la liste<br>.
[Bug] L'attribut "Numéro de version" dans la catégorie "Système d'exploitation" n'est pas repris lors d'une modification en masse<br>.
[Bug] La légende est masquée dans la liste des IP si la résolution n'est pas suffisante pour l'afficher sur une page.<br>
[Bug] Erreur d'orthographe dans la description des modes d'importation de JDisc<br>.
[Bug] L'édition de la catégorie "Comptabilité" via l'édition de liste n'est possible que si "Acheté chez" a été préalablement renseigné.<br>
[Bug] L'attribution de services à plusieurs objets via l'édition de listes n'est pas enregistrée<br>.
[Bug] Le menu Outils déployé est déplacé<br>.
[Bug] Le système d'exploitation géré n'est pas représenté dans la catégorie des systèmes d'exploitation<br>.
[Bug] Les "appareils gérés" ne peuvent pas être ajoutés via l'édition de liste <br>.
[Bug] La fonction d'événement n'est pas déclenchée lors de modifications dans la catégorie "Attribution de contacts"<br>.
[Bug] La fonction d'événement n'est pas déclenchée lors d'une purge dans les catégories définies par l'utilisateur<br>.
[Bug] Impossible d'utiliser plus de 9 serveurs LDAP<br>.
[Bug] Les routeurs connectés et les réseaux connectés dans la catégorie "Lignes WAN" ne peuvent pas être résolus<br>.
[Bug] Les "\" saisis dans le champ de description disparaissent dans l'entrée du journal<br>.
[Bug] La vue en liste n'affiche pas les objets spatialement affectés<br>.
[Bug] L'importation CSV de réseaux importe un masque de réseau incorrect<br>.
[Bug] L'attribution d'un objet d'un type d'objet défini par l'utilisateur dans l'attribut "Acheté chez" entraîne la création d'un nouvel objet lors de la duplication de l'objet<br>.
[Bug] Impossible de trier les catégories de rapports<br>.
[Bug] Message d'erreur lors de l'appel de l'aperçu des licences<br>.
[Bug] La valeur "0" ne peut pas être importée dans les champs Dialogue Plus personnalisés via l'importation CSV<br>.
[Bug] Catégorie "Périphérique" : les entrées pour SSD et SD-Card sont en double<br>.
[Bug] Les champs de date dans les catégories personnalisées ne sont pas remplis via l'importation CSV<br>.
[Bug] Le champ dans la catégorie SLA ne peut pas être utilisé<br>.
[Bug] L'objet en relation d'une relation implicite ne peut pas être modifié via la catégorie "Relations".<br>
[Bug] L'édition de liste affiche une erreur de validation lorsqu'un champ est défini comme unique<br>.
[Bug] L'utilisation d'un rapport dans les notifications par e-mail affiche les balises HTML des champs de description<br>.
[Bug] L'expression régulière d'un champ de description doit autoriser les caractères < > & et ;, sinon un message d'erreur est généré<br>.
[Bug] OCS Import ne peut pas établir de connexion à la base de données via "mysqli"<br>.