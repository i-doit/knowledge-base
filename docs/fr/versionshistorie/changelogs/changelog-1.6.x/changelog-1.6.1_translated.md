<!-- TRANSLATED by md-translate -->
# Changelog 1.6.1

# Changelog 1.6.1

[Neue Funktion] CSV Export von Kategorielisten<br>
[Neue Funktion] Anzeige von Wartungsfenstern im Kalender Dashboard Widget<br>
[Verbesserung]  Aktualisierung von Objekten, welche per H-Inventory importiert werden (Anhand Custom-Identifier, Hostname, Seriennummer, Mac- oder IP-Adresse)<br>
[Verbesserung]  Verbesserte Darstellung der my-doit Bookmarks<br>
[Verbesserung]  Api Methode cmdb.objects bekommt neue Rückgabeparameter Erstellungsdatum und Letzte Änderung<br>
[Verbesserung]  Dynamisches Attribut zum anzeigen aller Hostadressen eines Gerätes hinzugefügt<br>
[Verbesserung]  Umbenennung Button "Importieren" beim Active Directory Server Import in "Ergebnisse Laden"<br>
[Verbesserung]  Neue Spalte "Software Art" in der Listenansicht der Kategorie Softwarezuweisung<br>
[Verbesserung]  Möglichkeit zur Bestimmung der Textausrichtung der QR-Codes<br>
[Verbesserung]  Einstellung für die Anzahl der maximal anzuzeigenden Objekttypgruppen für das Hauptmenü<br>
[Verbesserung]  CSV Import mit neuen Optionen: Aufsplittung von Komma-separierten Werten & bessere Referenzierung von Objekten<br>
[Verbesserung]  Modernisierung der grafischen Oberfläche des CSV- und XML Imports<br>
[Verbesserung]  Eigener Menüpunkt "CSV Import" im Bereich der Importe<br>
[Verbesserung]  JDisc: Import der Schnittstelle zwischen Monitor und Gerät<br>
[Verbesserung]  Automatische Netzwahl bei Eingabe einer IP-Adresse in Kategorie Hostadresse<br>
[Verbesserung]  Kategorie Logischer Standort nun konfigurierbar für Übersichtsseite<br>
[Verbesserung]  Möglichkeit zur Abschaltung von QR Codes je Objekttyp<br>
[Verbesserung]  Möglichkeit zum direkten Öffnen von duplizierten Objekten<br>
[Verbesserung]  Kategorie Zugewiesener Arbeitsplatz nun konfigurierbar für Übersichtsseite<br>
[Verbesserung]  Entfernen der Validierungsoption "Eindeutig (pro Objekt)" bei Single-Value-Kategorien<br>
[Verbesserung]  Löschen-Schaltfläche in Objektbild löscht das Bild umgehend<br>
[Bug]           Fehlermeldung bei Installation einer Subscriptionslizenz unterschiedlich in AdminCenter und Administration-Lizenzinstallation.<br>
[Bug]           Die Massenanlage per Templates bringt Standortrechte durcheinander<br>
[Bug]           Tenant kann auf einer nicht existierenden Datenbank angelegt werden.<br>
[Bug]           Versand von Benachrichtigungen nicht möglich<br>
[Bug]           Verdoppelte Kopfzeile im Hauptbereich des Suchfensters<br>
[Bug]           Rückwärtige Servicezuweisung in Kategorie Nagios (Service) lässt sich nicht löschen<br>
[Bug]           Vordefinierte Gewichtung für Beziehungen wird beim Erstellen von neuen Beziehungen nicht berücksichtigt<br>
[Bug]           Umlaute werden in DialogPlus-Feldern falsch dargestellt<br>
[Bug]           Ansicht der SLA-Kategorie zeigt falsche Checkboxen nach Abbruch der Editierung<br>
[Bug]           Änderungen über die Übersichtsseite erzeugen überflüssige Logbuch-Einträge<br>
[Bug]           Dupliziert man ein CMDB-Explorer Profil fehlt der Knopf um dieses als Standard Profil zu definieren<br>
[Bug]           Import über AD fügt importiertes Objekt selber als Betriebssystem hinzu<br>
[Bug]           Benutzerdefinierte Kategorie wird auf der Übersichtsseite immer an die letzte Stelle geschoben<br>
[Bug]           Objektlisten Konfiguration: Neue Benutzerdefinierte Kategorien werden nicht angeboten. Erst beim erneuten Speichern werden diese angezeigt.<br>
[Bug]           CSV Import bricht mit Fehlermeldung ab<br>
[Bug]           Controller Handler "cleanup_auth" bricht mit Fehlermeldung ab<br>
[Bug]           Ändern von mehreren Standorten in der Listeneditierung nur möglich nach einzelner Änderung<br>
[Bug]           Report-Widget stellt " als &quot; dar<br>
[Bug]           Versionsnummer in Kategorie Betriebssystem wird nicht gespeichert<br>
[Bug]           Listeneditierung ändert nur den Standort des ersten Objekts<br>
[Bug]           Attribut "Gewähltes Objekt (Freigabezugriff) führt dazu, dass der Objekt-Titel in Objekt-Liste nicht dargestellt wird.<br>
[Bug]           Benutzerdefinierte Kategorien müssen ein weiteres Mal abgespeichert werden um in der Listenkonfiguration verfügbar zu sein<br>
[Bug]           OCS Import: Bei SNMP Geräten wird bei der Hostadressen Zuweisung das Supernetz verwendet anstelle des zugewiesen Layer3-Netzes<br>
[Bug]           Rechte werden aufgespalten auf mehrere einzelne Rechte<br>
[Bug]           Fehler beim Aufruf von "Meine Workflows"<br>
[Bug]           OCS Import: Bei SNMP Geräten wird nicht nach Seriennummer überprüft ob ein Gerät bereits existiert<br>
[Bug]           Varianten werden in der Softwarezuweisung bei der Auswahl eines Objekts nicht geladen<br>
[Bug]           Fehler beim Duplizieren von Objekten mit mehreren Kontaktzuweisungen<br>
[Bug]           Standortzuweisungen erzeugen keine Beziehungen<br>
[Bug]           Tabellen in der QR-Code-Beschreibung werden gelöscht<br>
[Bug]           Attribute aus benutzerdef. Kategorien in Objekt-Listen werden in der Bearbeitungsansicht der Objektliste ab dem zweiten Aufruf nicht mehr angezeigt<br>
[Bug]           Verwendung von mehr als einer benutzerdef. Kategorie in Objektliste führt dazu, dass nur die Werte der ersten Kategorie angezeigt werden<br>
[Bug]           Kodierung in exportierten Reports nicht korrekt<br>
[Bug]           Reports aus dem Online Repository werden nicht geladen<br>
[Bug]           Kontaktzuweisung: Beim Auswählen einer Rolle erscheint Fehlermeldung<br>
[Bug]           Datenbankfehler beim Aufruf des Reports "Lizenzschlüssel in Benutzung" aus dem Online Repository<br>
[Bug]           Attribut "Zugeordnete Objekte (Vertrag)" in E-Mail-Vorlagen der Benachrichtigung führt zu Fehlermeldung beim Versand der Nachricht<br>
[Bug]           Nach Beziehungsarten kann nicht gefiltert werden<br>
[Bug]           Limit für Objekttypgruppen aufheben und Menüband besser nutzbar machen<br>
[Bug]           Updates: Hovertext zu PHP-Erweiterungen zeigt Language-Konstanten<br>
[Bug]           Kategorie mit HTML-Feldtyp verliert in der Konfiguration die Felder<br>
[Bug]           Property-Selector stellt unvollständige / verwirrende spezifische Kategorien dar<br>
[Bug]           DNS Domäne wird nicht in der Kategorie selbst gespeichert<br>
[Bug]           Listeneditierung: Anschlüsse die über die Listeneditierung erstellt werden, werden nur in der Kategorie angezeigt aber nicht in der Listeneditierung.<br>
[Bug]           JDisc: Der Algorithmus zur Überprüfung von bestehenden Objekten ist nicht präzise genug.<br>
[Bug]           Fehlerhafte Übersetzung in englisch-sprachigen Reports<br>
[Bug]           JDisc Discovery Log aus der Kategorie "JDisc Discovery" wird beim IE 9 nicht korrekt ausgegeben.<br>
[Bug]           Fehler bei Installation wird in grüner Farbe dargestellt<br>
[Bug]           CMDB-Explorer: Der im als Standard konfigurierte Service-Filter wird beim ersten Aufruf nicht mit geladen<br>
[Bug]           Überarbeitete englische Übersetzung "bequest" in Kategorie "Installation" : Heisst nun "inheritance"<br>
[Bug]           Fehlermeldung beim Aufruf der Kategorie "Computing Resources"<br>
[Bug]           Dialog-Admin: Liste im Navigationsbaum ist nicht richtig sortiert, Knoten sind schlecht benannt<br>
[Bug]           Nagios: Konfiguration unter "Extras" enthält Typo "ecalations"<br>
[Bug]           CMDB-Explorer: Bearbeiten-Funktion wählt automatisch das Standard-Profil<br>
[Bug]           Verwendung der globalen Suche mit weniger als zwei Zeichen gibt keine Eindeutige Information zurück<br>
[Bug]           HTML-Tags werden im WYSIWYG-Editor der QR-Codes teilweise entfernt<br>
[Bug]           "Expand all" im Logbuch wechselt den Expandierungsstatus der Einträge, statt alle zu öffnen<br>
[Bug]           Theme lässt sich über GET Parameter ändern<br>

[Nouvelle fonction] Exportation CSV des listes de catégories<br>
[Nouvelle fonction] Affichage des fenêtres de maintenance dans le widget Dashboard du calendrier<br>.
[Amélioration] Mise à jour des objets importés par H-Inventory (en fonction de l'identifiant personnalisé, du nom d'hôte, du numéro de série, de l'adresse Mac ou IP)<br>
[Amélioration] Amélioration de l'affichage des bookmarks my-doit<br>.
[Amélioration] La méthode Api cmdb.objects reçoit de nouveaux paramètres de retour Date de création et Dernière modification<br>.
[Amélioration] Ajout d'un attribut dynamique pour afficher toutes les adresses d'hôtes d'un périphérique<br>.
[Amélioration] Bouton "Importer" renommé "Charger les résultats"<br> lors de l'importation du serveur Active Directory.
[Amélioration] Nouvelle colonne "Type de logiciel" dans la liste de la catégorie Attribution de logiciel<br>.
[Amélioration] Possibilité de déterminer l'orientation du texte des codes QR<br>
[Amélioration] Réglage du nombre maximum de groupes de types d'objets à afficher pour le menu principal<br>
[Amélioration] Importation CSV avec nouvelles options : Fractionnement des valeurs séparées par des virgules & meilleur référencement des objets<br>.
[Amélioration] Modernisation de l'interface graphique de l'importation CSV et XML<br>
[Amélioration] Propre point de menu "CSV Import" dans la zone des importations<br>.
[Amélioration] JDisc : Importation de l'interface entre le moniteur et l'appareil<br>
[Amélioration] Sélection automatique du réseau lors de la saisie d'une adresse IP dans la catégorie Adresse de l'hôte<br>.
[Amélioration] Catégorie Emplacement logique désormais configurable pour la page d'aperçu<br>
[Amélioration] Possibilité de désactiver les codes QR par type d'objet<br>
[Amélioration] Possibilité d'ouvrir directement les objets dupliqués<br>
[Amélioration] Catégorie Poste de travail attribué désormais configurable pour la page de présentation<br>
[Amélioration] Suppression de l'option de validation "Unique (par objet)" pour les catégories à valeur unique<br>
[Amélioration] Le bouton de suppression dans l'image de l'objet supprime immédiatement l'image<br>.
[Bug] Message d'erreur lors de l'installation d'une licence d'abonnement différent dans AdminCenter et l'installation de la licence d'administration.<br>
[Bug] L'installation en masse par templates confond les droits de site<br>.
[Bug] Le locataire peut être créé sur une base de données inexistante.<br>
[Bug] Impossible d'envoyer des notifications<br>.
[Bug] Doublement de l'en-tête dans la zone principale de la fenêtre de recherche<br>.
[Bug] Impossible de supprimer l'attribution de service en arrière dans la catégorie Nagios (Service)<br>.
[Bug] La pondération prédéfinie pour les relations n'est pas prise en compte lors de la création de nouvelles relations<br>.
[Bug] Les trémas sont mal affichés dans les champs DialogPlus<br>.
[Bug] La vue de la catégorie SLA affiche des cases à cocher incorrectes après l'interruption de l'édition<br>.
[Bug] Les modifications via la page d'aperçu génèrent des entrées superflues dans le journal<br>.
[Bug] Si l'on duplique un profil CMDB-Explorer, il manque le bouton pour le définir comme profil par défaut<br>.
[Bug] L'importation via AD ajoute l'objet importé comme système d'exploitation<br>.
[Bug] La catégorie définie par l'utilisateur est toujours déplacée en dernière position sur la page d'aperçu<br>.
[Bug] Configuration des listes d'objets : les nouvelles catégories définies par l'utilisateur ne sont pas proposées. Elles ne s'affichent que lors d'un nouvel enregistrement.<br>
[Bug] L'importation CSV s'interrompt avec un message d'erreur<br>.
[Bug] Le gestionnaire du contrôleur "cleanup_auth" s'interrompt avec un message d'erreur<br>.
[Bug] Modification de plusieurs sites dans l'édition de listes uniquement possible après une seule modification<br>.
[Bug] Le widget de rapport affiche " comme &quot;<br>
[Bug] Le numéro de version dans la catégorie Système d'exploitation n'est pas enregistré<br>.
[Bug] L'édition de liste ne modifie que l'emplacement du premier objet<br>.
[Bug] L'attribut "Objet sélectionné (accès partagé)" n'affiche pas le titre de l'objet dans la liste des objets <br>.
[Bug] Les catégories définies par l'utilisateur doivent être sauvegardées une seconde fois pour être disponibles dans la configuration de la liste<br>.
[Bug] Importation OCS : pour les appareils SNMP, l'attribution de l'adresse de l'hôte utilise le super-réseau au lieu du réseau de niveau 3 attribué<br>.
[Bug] Les droits sont divisés en plusieurs droits distincts<br>.
[Bug] Erreur lors de l'appel de "Mes workflows"<br>.
[Bug] Importation OCS : pour les appareils SNMP, le numéro de série ne vérifie pas si un appareil existe déjà<br>.
[Bug] Les variantes ne sont pas chargées dans l'attribution du logiciel lors de la sélection d'un objet<br>.
[Bug] Erreur lors de la duplication d'objets avec plusieurs attributions de contacts<br>.
[Bug] Les assignations de site ne créent pas de relations<br>.
[Bug] Suppression des tableaux dans la description du code QR<br>.
[Bug] Les attributs des catégories définies par l'utilisateur dans les listes d'objets ne sont pas affichés dans la vue d'édition de la liste d'objets à partir du deuxième appel<br>.
[Bug] L'utilisation de plus d'une catégorie personnalisée dans la liste d'objets entraîne l'affichage des valeurs de la première catégorie uniquement<br>.
[Bug] Codage incorrect dans les rapports exportés<br>.
[Bug] Les rapports du référentiel en ligne ne sont pas chargés<br>.
[Bug] Attribution de contacts : un message d'erreur apparaît lors de la sélection d'un rôle<br>.
[Bug] Erreur de base de données lors de l'appel du rapport "Clé de licence en cours d'utilisation" depuis le référentiel en ligne<br>.
[Bug] L'attribut "Objets affectés (contrat)" dans les modèles d'e-mail de notification entraîne un message d'erreur lors de l'envoi du message<br>.
[Bug] Impossible de filtrer par type de relation<br>.
[Bug] Supprimer la limite pour les groupes de types d'objets et rendre le ruban plus utilisable<br>
[Bug] Mises à jour : le survol des extensions PHP affiche les constantes de langage<br>.
[Bug] La catégorie avec le type de champ HTML perd les champs dans la configuration<br>.
[Bug] Le sélecteur de propriétés affiche des catégories spécifiques incomplètes / confuses<br>.
[Bug] Le domaine DNS n'est pas enregistré dans la catégorie elle-même<br>.
[Bug] Édition de liste : les connexions créées via l'édition de liste ne sont affichées que dans la catégorie mais pas dans l'édition de liste.<br>
[Bug] JDisc : L'algorithme de vérification des objets existants n'est pas assez précis.<br>
[Bug] Traduction incorrecte dans les rapports en anglais<br>.
[Bug] Le journal de découverte JDisc de la catégorie "JDisc Discovery" ne s'affiche pas correctement avec IE 9.<br>
[Bug] L'erreur d'installation est affichée en vert<br>.
[Bug] Explorateur CMDB : le filtre de service configuré par défaut n'est pas chargé lors du premier appel<br>.
[Bug] Révision de la traduction anglaise de "bequest" dans la catégorie "Installation" : se nomme désormais "inheritance"<br>.
[Bug] Message d'erreur lors de l'appel de la catégorie "Computing Resources"<br>.
[Bug] Dialogue-Admin : la liste dans l'arbre de navigation n'est pas correctement triée, les nœuds sont mal nommés<br>.
[Bug] Nagios : la configuration sous "Outils" contient la typo "ecalations"<br>.
[Bug] Explorateur CMDB : la fonction d'édition sélectionne automatiquement le profil par défaut<br>.
[Bug] L'utilisation de la recherche globale avec moins de deux caractères ne renvoie pas d'information unique<br>.
[Bug] Les balises HTML sont partiellement supprimées dans l'éditeur WYSIWYG des codes QR<br>.
[Bug] "Expand all" dans le journal de bord change l'état d'expansion des entrées au lieu de les ouvrir toutes<br>.
[Bug] Le thème peut être modifié via les paramètres GET<br>.