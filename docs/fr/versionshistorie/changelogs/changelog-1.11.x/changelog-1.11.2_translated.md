<!-- TRANSLATED by md-translate -->
# Changelog 1.11.2

# Changelog 1.11.2

[Verbesserung][Code]                            Verhalten des Mandanten-Switcher ändern<br>
[Verbesserung][Code]                            Unterstützen der PHP-Extension "memcached", ergänzend zu "memcache"<br>
[Verbesserung][Benutzerdefinierte Kategorien]   Benutzerdefinierte rückwärtige Kategorie/Report darf innerhalb der Kategorie nicht überschrieben werden<br>
[Verbesserung][Dashboard]                       Darstellung der Restlaufzeit im Lizenz-Widget ist verwirrend<br>
[Bug][Kategorien]                               Button "Hinzufügen" in Kategorie "Zugwiesene Objekte" (Unterkategorie von "Dateien")<br>
[Bug][Kategorien]                               Sortierung in Objekt-Browsern uneindeutig<br>
[Bug][Kategorien]                               Kategorie Gruppenmitgliedschaft hinzufügen zu Gruppe defekt<br>
[Bug][Kategorien]                               Kategorie Buchhaltung, Feld eingekauft bei: Verbindung lässt sich nicht lösen<br>
[Bug][Kategorien]                               Kategorie Datei / zugewiesene Objekte zeigt fehlerhafte Einträge<br>
[Bug][Kategorien]                               Vorschlagsfunktion für Objekt-Browser mit Unterauswahl führt dazu, dass der Eintrag nicht gespeichert wird<br>
[Bug][Kategorien]                               Mehrfache Zuweisung desselben Objekts in Zuweisungskategorien führt dazu, dass bei der Durchführung einer weiteren Zuweisung die bisherigen Verknüpfungen entfernt werden<br>
[Bug][Kategorien]                               Wiederverwendete Kabel sollen ursprüngliche Bezeichnung beibehalten<br>
[Bug][Kategorien]                               Zustandsauswahl in Kategorie "Zugewiesene Objekte" unter "Personen" nicht vorhanden<br>
[Bug][Kategorien]                               Falsche Datenbereinigung in der Subkategorie "Vertragsinformationen" im Attribut "Kosten"<br>
[Bug][Kategorien]                               Kategorie "Zugriff" mehrfaches Speichern führt zu einem duplizierten Datensatz<br>
[Bug][Kategorien]                               Filter in Kategorie-Listen-Konfiguration findet Objekte<br>
[Bug][Kategorien]                               Kategorie "Personengruppe" Subkategorie "zugewiesene Objekte" fehlt der Edit-Button in der Listenansicht<br>
[Bug][Kategorien]                               Kategorie "Personengruppe" Subkategorie "Mitglieder" fehlt die Möglichkeit diese Ansicht zu editieren<br>
[Bug][Kategorien]                               Falsche Berechnungen in Kategorie "Objektvitalität"<br>
[Bug][Kategorien]                               Statusauswahl in Kategorie "Räumlich zugewiesene Objekte" nicht verfügbar<br>
[Bug][Kategorien]                               Sortierung von Chassis Slots in zugehöriger Kategorie fehlerhaft<br>
[Bug][Dashboard]                                Mehr Informationen im Kalender Widget<br>
[Bug][Dashboard]                                Farbliches Hervorheben von Einträgen im Kalender-Widget<br>
[Bug][Dashboard]                                Gruppierung einer Report-Ergebnisliste geht im Widget verloren, sobald die Liste sortiert wird<br>
[Bug][Massenänderung]                           Massenänderung: Wird eine Vorlage erstellt, sind zuviele Kategorien als geändert angezeigt<br>
[Bug][Listen]                                   Filter löschen Symbol in Objektlisten wird nicht angezeigt<br>
[Bug][Listen]                                   Sortierung in der Subkategorie "Lizenzschlüssel" der Kategorie "Lizenzzuweisung" fehlerhaft<br>
[Bug][Listen]                                   Archivierte Servicezuweisung wird in Objektlisten angezeigt<br>
[Bug][Listen]                                   Port > Hostadresse in Listenansicht sorgt für Fehler<br>
[Bug][Listen]                                   Listenansicht zeigt falsche Restgarantie<br>
[Bug][Listen]                                   Standort-Browser: Sortierung in der Standortauswahl fehlerhaft<br>
[Bug][Listen]                                   Archivierte/Gelöschte Services werden in Objektlisten angezeigt<br>
[Bug][Listen]                                   Filtern über Attribute aus benutzerdefinierten Kategorien in Objekt-Listen nicht möglich<br>
[Bug][Listen]                                   QuickInfo-Links funktionieren nicht in Kategorie-Listen<br>
[Bug][Listen]                                   Zugewiesene Verträge werden in Objektliste nicht angezeigt, wenn kein Vertragsbeginn und -ende hinterlegt sind<br>
[Bug][Listen]                                   Vorschläge des Filters in Objekt-Listen stimmen teilweise nicht überein<br>
[Bug][Listen]                                   Sortierung von IP Adressen in Objektlisten erfolgt alphabetisch<br>
[Bug][Listen]                                   Blättern/Filtern in der Kategorie-Liste nicht möglich<br>
[Bug][Listen]                                   Ping über nmap liefert falsche Ergebnisse und führt zu "Service unavailable"-Fehlermeldung im Browser<br>
[Bug][Listen]                                   Attribut "Beschreibung" aus Kategorie "Betriebssystem" in einigen Funktionen nicht verfügbar<br>
[Bug][Listen]                                   Leere Datensätze in Liste nach Auswahl von Zuweisungskategorien<br>
[Bug][Listen]                                   Zugewiesener Vertrag wird nicht in Objekt-Liste angezeigt<br>
[Bug][Listen]                                   Sortieren nach "Gruppen-Typ" und "Diese Konfiguration" exportieren" nicht möglich<br>
[Bug][Listen]                                   Standortpfad wird linksbündig in verschiedenen Bereichen dargestellt<br>
[Bug][Listen]                                   Sortierung des Datum in der Objektansicht ist falsch<br>
[Bug][CSV]                                      CSV-Import: Objekttyp "Organisation" wird ohne Titel importiert<br>
[Bug][CSV]                                      Beim importieren von Personen über den CSV-Import erstellt gelegentlich nicht gesetzte Beziehungen vom Typ "Organisation"<br>
[Bug][CSV]                                      Zuweisung des Attributs "Adressvergabe IPv4" wird im CSV-Datenimport ignoriert<br>
[Bug][CSV]                                      CSV-Import: Attribute "Versionsnummer/Patchlevel" fehlen in der Zuweisung<br>
[Bug][CSV]                                      CSV Export von Multi Value Kategorien wird ohne Trennzeichen ausgegeben<br>
[Bug][CSV]                                      Identifikation von Objekten mit Komma im Titel beim CSV-Import nicht möglich<br>
[Bug][LDAP]                                     LDAP-Sync: Konfigurationsdatei wird ignoriert<br>
[Bug][LDAP]                                     Ist ein LDAP Server nicht erreichbar so läuft der Verbindungsversuch endlos, sowohl beim Login mit LDAP als auch beim LDAP sync<br>
[Bug][Suche]                                    In den Beschreibungsfeldern hinterlegte Werte werden nicht durch die Suche gefunden<br>
[Bug][Suche]                                    LDAP-Sync schlechte Performance durch Benutzerdefinierte-Kategorien<br>
[Bug][Suche]                                    Attribut "Service Tag" aus Kategorie "Modell" kann nicht gefunden werden<br>
[Bug][Suche]                                    Such-Index "Benutzerdefinierte Kategorien" werden nicht vollständig indiziert<br>
[Bug][Suche]                                    Ergebnisliste der Suche zeigt statt Namen von benutzerdefinierten Kategorien nur deren ID<br>
[Bug][Suche]                                    MAC-Adresse wird nicht Indexiert<br>
[Bug][Suche]                                    Suche findet auch archivierte/gelöschte Objekte, obwohl dies laut Einstellung deaktiviert ist<br>
[Bug][Suche]                                    HTML-Tags in Suchergebnissen<br>
[Bug][Suche]                                    Kategorie "Modell" wird nicht vollständig in der Suche indexiert<br>
[Bug][Suche]                                    Statusinformationen zur Generierung des Suchindex inkorrekt<br>
[Bug][Suche]                                    Auswahl der Ansicht verschwindet beim Verwenden der Suche<br>
[Bug][Suche]                                    Controller: PHP Warning bei dem handler "search_index"<br>
[Bug][CMDB]                                     Objekt Browser zeigt bei logischer Standort nicht alle Objekttypen mit der Kategorie "zugewiesene Endgeräte an"<br>
[Bug][Report-Manager]                           Duplizieren eines Reports wird das Attribut " Gruppierte Multivalue-Darstellung" immer auf "Ja" gesetzt<br>
[Bug][Report-Manager]                           Report-Manager: Attribut "Primäre Hostadresse" führt via Zuweisungskategorie zu einem SQL-Fehler<br>
[Bug][Report-Manager]                           Report-Manager: Kategorie "Kontaktzuweisung" Attribut "Rolle" führt bei expliziter Auswahl zu einem Fehler<br>
[Bug][Report-Manager]                           Sonderzeichen in Beschreibungsfeldern führen dazu, dass diese Felder beim Exportieren eines Reports leer sind<br>
[Bug][Report-Manager]                           Report-Manager: Feld "Dialog+ Mehrfachauswahl" führt in den Bedingungen zu SQL-Fehlern<br>
[Bug][Report-Manager]                           Report-Manager: Bedingungen werden nicht nachgeladen<br>
[Bug][Report-Manager]                           Report-Manger: Kategorie "Übergeordnetes Objekt" diverse Attribute aus der Kategorie "Stammdaten" führen zu Fehlern<br>
[Bug][Report-Manager]                           Report-Manager: Fehlerhafte Sortierung von "Hostadressen"<br>
[Bug][Report-Manager]                           Report-Manager: Option "Gruppierte Multivalue-Darstellung" wird als Ja gespeichert<br>
[Bug][Report-Manager]                           PHP 7.1 kürzt SQL hinter Reports ab einer bestimmten Länge einzelner Bedingungen<br>
[Bug][Report-Manager]                           Fehlendes Attribut "Layer-2-Netz Zuordnung" aus Kategorie "Netz" im Report Manager<br>
[Bug][Report-Manager]                           Fehler beim Bearbeiten eines bestehenden Reports<br>
[Bug][Report-Manager]                           Fehler beim Ausführen eines report<br>
[Bug][Report-Manager]                           Report Manager: Längen- und Breitengrad nicht als Bedingung auswählbar<br>
[Bug][Report-Manager]                           Sortierung nach "Hostadresse" funktioniert nicht<br>
[Bug][Nagios]                                   Nagios inkompatibilität mit Maintenance Add-On<br>
[Bug][Listeneditierung]                         Listeneditierung: In der Kategorie "Passwörter" kann der Inhalt des Attributs "Passwort" verloren gehen<br>
[Bug][Listeneditierung]                         Schlechte Performance des Objekt-Browser in der Listeneditierung<br>
[Bug][Listeneditierung]                         Attribut "Adressvergabe" der Kategorie "Hostadresse" ist in Listeneditierung nicht verfügbar<br>
[Bug][Anschlusstyp Verkabelung]                 Erkennungsroutine für freie Kabel fehlerhaft<br>
[Bug][QR-Codes]                                 /src/tools/php/barcode.php wirft Notice<br>
[Bug][QR-Codes]                                 /src/tools/php/qr/qr_img.php wirft Fatal Error<br>
[Bug][Check_MK]                                 Check-MK: Export via GUI/Script führt zu ungewünschten Berechitgungen auf dem Dateisystem<br>
[Bug][Check_MK]                                 Check-MK: Kategorie "Cluster" führt bei einem Export zu fehlenden Objekten<br>
[Bug][Objekttypkonfiguration]                   Kategorie "Allgemein" kann ohne Auswirkungen in Konfiguration der Übersichtsseite verschoben werden<br>
[Bug][Objekte]                                  Objekt-Browser: Skalierung von Icons fehlt<br>
[Bug][Objekte]                                  Duplizieren von Objekten mit Kontaktzuweisungen führt zu Fehlerhaften Titeln<br>
[Bug][Objekte]                                  MAC-Adresse wird immer klein geschrieben<br>
[Bug][Objekte]                                  Kategorie "Gruppenmitgliedschaft" keine Zuweisung zu einer Objektgruppe möglich<br>
[Bug][Objekte]                                  Tags werden nicht dupliziert<br>
[Bug][Controller]                               Controller: Export eines Reports resultiert mit verbose in einem PHP-Error<br>
[Bug][Validierung]                              Beschreibungsfelder werden nicht als Pflichtfelder markiert<br>
[Bug][Validierung]                              Duplizieren eines Objekts übergeht Validierung<br>
[Bug][Schnittstellenverwaltung]                 TTS: Diverse Attribute zu verknüpften Tickets fehlen bei verwendung von RT<br>
[Bug][Active Directory]                         Fehlermeldung Anmeldung mit konfigurierten SSO<br>
[Bug][Installation]                             PHP-Warning bei der Installation und Nutzung<br>
[Bug][Benutzereinstellungen]                    Standard-Sortierung in Kategorie-Listen kann nicht gelöscht werden<br>
[Bug][Request Tracker]                          RT: URL bei "Im Ticketsystem öffnen" falsch<br>
[Bug][Druckansicht]                             Druckvorschau für benutzerdefinierte Kategorie mit variablem Report bleibt leer<br>
[Bug][Update]                                   Überprüfung nach leerem Crypt-Key<br>
[Bug][Update]                                   Falsche Response beim Update, wenn Dateien aufgrund fehlender Berechtigungen nicht kopiert werden können<br>
[Bug][Beziehungen]                              Beziehungen von Clustern zu Clusterdiensten nicht korrekt im Zustand archiviert/gelöscht<br>
[Bug][Beziehungen]                              Beziehungsobjekt wird nicht archiviert, wenn die involvierten Objekte in den Kategorien archiviert werden<br>
[Bug][Benutzerdefinierte Kategorien]            Listensortierung von benutzerdefinierten Kategorien inkorrekt<br>

[Amélioration][Code] Modifier le comportement du commutateur de mandants<br>.
[Amélioration][Code] Support de l'extension PHP "memcached", en complément de "memcache"<br>
[Amélioration][Catégories personnalisées] La catégorie/le rapport arrière personnalisé ne peut pas être écrasé(e) au sein de la catégorie<br>.
[Amélioration][Tableau de bord] La représentation du temps restant dans le widget de licence est confuse<br>
[Bug][Catégories] Bouton "Ajouter" dans la catégorie "Objets attribués" (sous-catégorie de "Fichiers")<br>
[Bug][Catégories] Tri ambigu dans les navigateurs d'objets<br>.
[Bug][Catégories] Catégorie Ajouter un membre de groupe au groupe défectueux<br>
[Bug][Catégories] Catégorie Comptabilité, champ acheté chez : Connexion ne se détache pas<br>
[Bug][Catégories] Catégorie Fichier / Éléments attribués affiche des entrées erronées<br>
[Bug][Catégories] La fonction de suggestion pour l'explorateur d'objets avec sous-sélection ne permet pas d'enregistrer l'entrée<br>
[Bug][Catégories] L'affectation multiple du même objet dans les catégories d'affectation entraîne la suppression des liens précédents lors de l'exécution d'une autre affectation<br>.
[Bug][Catégories] Les câbles réutilisés doivent garder leur nom d'origine<br>
[Bug][Catégories] Sélection d'état inexistante dans la catégorie "Objets attribués" sous "Personnes"<br>
[Bug][Catégories] Nettoyage incorrect des données dans la sous-catégorie "Informations sur le contrat" dans l'attribut "Coûts"<br>
[Bug][Catégories] Catégorie "Accès" Enregistrer plusieurs fois entraîne une duplication de l'enregistrement<br>
[Bug][Catégories] Le filtre dans la configuration de la liste des catégories trouve des objets<br>
[Bug][Catégories] Catégorie "Groupe de personnes" Sous-catégorie "Objets attribués" manque le bouton d'édition dans la vue de liste<br>
[Bug][Catégories] Catégorie "Groupe de personnes" Sous-catégorie "Membres" manque la possibilité d'éditer cette vue<br>
[Bug][Catégories] Calculs incorrects dans la catégorie "Vitalité de l'objet"<br>
[Bug][Catégories] Choix de l'état non disponible dans la catégorie "Objets assignés à un espace"<br>
[Bug][Catégories] Erreur de tri des slots de châssis dans la catégorie associée<br>
[Bug][Dashboard] Plus d'informations dans le widget calendrier<br>
[Bug][Dashboard] Surlignage en couleur des entrées dans le widget du calendrier<br>
[Bug][Dashboard] Le regroupement d'une liste de résultats de rapport est perdu dans le widget dès que la liste est triée<br>
[Bug][Modification en masse] Modification en masse : lorsqu'un modèle est créé, trop de catégories sont affichées comme modifiées<br>
[Bug][Listes] L'icône de suppression des filtres dans les listes d'objets ne s'affiche pas<br>
[Bug][Listes] Erreur de tri dans la sous-catégorie "Clé de licence" de la catégorie "Attribution de licence"<br>.
[Bug][Listes] L'attribution de service archivée est affichée dans les listes d'objets<br>
[Bug][Listes] Port > Adresse de l'hôte dans la vue en liste provoque une erreur<br>
[Bug][Listes] La vue en liste affiche une garantie résiduelle erronée<br>
[Bug][Listes] Explorateur de sites : Erreur de tri dans la sélection de site<br>
[Bug][Listes] Les services archivés/supprimés sont affichés dans les listes d'objets<br>.
[Bug][Listes] Impossible de filtrer les attributs des catégories personnalisées dans les listes d'objets<br>.
[Bug][Listes] Les liens d'info-bulles ne fonctionnent pas dans les listes de catégories<br>.
[Bug][Listes] Les contrats attribués ne sont pas affichés dans la liste des objets si le début et la fin du contrat ne sont pas définis<br>.
[Bug][Listes] Les propositions du filtre dans les listes d'objets ne correspondent pas toujours<br>.
[Bug][Listes] Le tri des adresses IP dans les listes d'objets se fait par ordre alphabétique<br>.
[Bug][Listes] Impossible de faire défiler/filtrer la liste des catégories<br>
[Bug][Listen] Le ping via nmap donne des résultats erronés et entraîne un message d'erreur "Service indisponible" dans le navigateur<br>.
[Bug][Listes] Attribut "Description" de la catégorie "Système d'exploitation" non disponible dans certaines fonctions<br>.
[Bug][Listes] Enregistrements vides dans la liste après sélection des catégories d'attribution<br>
[Bug][Listes] Le contrat attribué ne s'affiche pas dans la liste des objets<br>
[Bug][Listes] Impossible de trier par "Type de groupe" et "Exporter cette configuration"<br>
[Bug][Listes] Le chemin d'accès au site est aligné à gauche dans différentes zones<br>
[Bug][Listes] Le tri de la date dans la vue des objets est incorrect<br>
[Bug][CSV] Importation CSV : le type d'objet "Organisation" est importé sans titre<br>
[Bug][CSV] L'importation de personnes via l'importation CSV crée parfois des relations de type "Organisation"<br> non définies.
[Bug][CSV] L'attribution de l'attribut "Attribution d'adresse IPv4" est ignorée dans l'importation de données CSV<br>.
[Bug][CSV] Importation CSV : attributs "numéro de version/niveau de patch" manquants dans l'affectation<br>
[Bug][CSV] Exportation CSV de catégories multi-valeurs sans séparateur<br>
[Bug][CSV] Impossible d'identifier les objets avec une virgule dans le titre lors de l'importation CSV<br>
[Bug][LDAP] Synchronisation LDAP : le fichier de configuration est ignoré<br>
[Bug][LDAP] Si un serveur LDAP n'est pas accessible, la tentative de connexion est interminable, aussi bien lors de la connexion avec LDAP que lors de la synchronisation LDAP<br>.
[Bug][Recherche] Les valeurs enregistrées dans les champs de description ne sont pas trouvées par la recherche<br>.
[Bug][Recherche] Mauvaise performance de la synchro LDAP à cause des catégories définies par l'utilisateur<br>
[Bug][Recherche] L'attribut "Service Tag" de la catégorie "Modèle" ne peut pas être trouvé<br>
[Bug][Recherche] L'index de recherche "Catégories personnalisées" n'est pas entièrement indexé<br>
[Bug][Recherche] La liste des résultats de la recherche affiche uniquement l'ID des catégories personnalisées au lieu de leur nom<br>.
[Bug][Recherche] L'adresse MAC n'est pas indexée<br>
[Bug][Recherche] La recherche trouve aussi les objets archivés/supprimés, bien que cela soit désactivé dans les paramètres<br>.
[Bug][Recherche] Balises HTML dans les résultats de recherche<br>
[Bug][Recherche] La catégorie "Modèle" n'est pas entièrement indexée dans la recherche<br>.
[Bug][Recherche] Informations d'état incorrectes pour la génération de l'index de recherche<br>.
[Bug][Recherche] La sélection de la vue disparaît lors de l'utilisation de la recherche<br>.
[Bug][Recherche] Contrôleur : avertissement PHP pour le gestionnaire "search_index"<br>.
[Bug][CMDB] Le navigateur d'objets n'affiche pas tous les types d'objets avec la catégorie "terminaux affectés" lors d'une localisation logique"<br>.
[Bug][Gestionnaire de rapports] Duplication d'un rapport, l'attribut "Représentation multivaluée groupée" est toujours réglé sur "Oui"<br>.
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : l'attribut "Adresse hôte primaire" provoque une erreur SQL via la catégorie d'affectation<br>.
[Bug][Report-Manager] Report-Manager : catégorie "Attribution de contact" attribut "Rôle" entraîne une erreur lors de la sélection explicite<br>.
[Bug][Gestionnaire de rapports] Les caractères spéciaux dans les champs de description entraînent un vide dans ces champs lors de l'exportation d'un rapport<br>.
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : le champ "Dialogue+ Sélection multiple" entraîne des erreurs SQL dans les conditions<br>.
[Bug][Report-Manager] Report-Manager : les conditions ne sont pas rechargées<br>
[Bug][Report-Manager] Report-Manager : catégorie "Objet supérieur" divers attributs de la catégorie "Données de base" entraînent des erreurs<br>.
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : tri erroné des "adresses d'hôtes"<br>
[Bug][Report-Manager] Report-Manager : l'option "Représentation multivaluée groupée" est enregistrée comme Oui<br>
[Bug][Gestionnaire de rapports] PHP 7.1 raccourcit le SQL derrière les rapports à partir d'une certaine longueur de conditions individuelles<br>.
[Bug][Gestionnaire de rapports] Attribut "Affectation du réseau de couche 2" manquant dans la catégorie "Réseau" du Gestionnaire de rapports<br>.
[Bug][Report Manager] Erreur lors de la modification d'un rapport existant<br>
[Bug][Gestionnaire de rapports] Erreur lors de l'exécution d'un rapport<br>
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : la latitude et la longitude ne peuvent pas être sélectionnées comme condition<br>
[Bug][Gestionnaire de rapports] Le tri par "adresse de l'hôte" ne fonctionne pas<br>
[Bug][Nagios] Incompatibilité de Nagios avec Maintenance Add-On<br>
[Bug][Édition de liste] Édition de liste : dans la catégorie "Mots de passe", le contenu de l'attribut "Mot de passe" peut être perdu<br>.
[Bug][Édition de liste] Mauvaises performances de l'explorateur d'objets dans l'édition de liste<br>
[Bug][Édition de liste] L'attribut "Attribution d'adresse" de la catégorie "Adresse hôte" n'est pas disponible dans l'édition de liste<br>.
[Bug][Câblage de type connexion] Défaut de la routine de détection des câbles libres<br>
[Bug][QR codes] /src/tools/php/barcode.php lance Notice<br>
[Bug][QR-Codes] /src/tools/php/qr/qr_img.php lance Fatal Error<br>
[Bug][Check_MK] Check-MK : l'exportation via GUI/Script entraîne des autorisations non souhaitées sur le système de fichiers<br>.
[Bug][Check_MK] Check-MK : la catégorie "Cluster" entraîne des objets manquants lors d'une exportation<br>.
[Bug][Configuration du type d'objet] La catégorie "Général" peut être déplacée dans la configuration de la page d'aperçu sans aucun effet<br>.
[Bug][Objets] Explorateur d'objets : Absence de mise à l'échelle des icônes<br>
[Bug][Objets] La duplication d'objets avec des attributions de contacts entraîne des titres erronés<br>.
[Bug][Objets] L'adresse MAC est toujours écrite en minuscule<br>
[Bug][Objets] Catégorie "Appartenance à un groupe" impossible d'attribuer à un groupe d'objets<br>
[Bug][Objets] Les tags ne sont pas dupliqués<br>
[Bug][Controller] Contrôleur : l'exportation d'un rapport résulte en une erreur PHP avec verbose<br>
[Bug][Validation] Les champs de description ne sont pas marqués comme obligatoires<br>
[Bug][Validation] Dupliquer un objet passe outre la validation<br>
[Bug][Gestion des interfaces] TTS : divers attributs manquants pour les tickets liés lors de l'utilisation de RT<br>
[Bug][Active Directory] Message d'erreur de connexion avec SSO configuré<br>
[Bug][Installation] Avertissement PHP lors de l'installation et de l'utilisation<br>
[Bug][Paramètres utilisateur] Impossible de supprimer le tri par défaut dans les listes de catégories<br>
[Bug][Request Tracker] RT : URL incorrecte pour "Ouvrir dans le système de tickets"<br>
[Bug][Aperçu avant impression] Aperçu avant impression pour catégorie personnalisée avec rapport variable reste vide<br>
[Bug][Update] Vérification après une clé cryptographique vide<br>
[Bug][Update] Réponse incorrecte lors de la mise à jour si les fichiers ne peuvent pas être copiés en raison d'un manque d'autorisation<br>
[Bug][Relations] Relations des clusters vers les services de cluster pas correctement dans l'état archivé/supprimé<br>
[Bug][Relations] L'objet de la relation n'est pas archivé lorsque les objets impliqués sont archivés dans les catégories<br>
[Bug][Catégories définies par l'utilisateur] Tri incorrect de la liste des catégories définies par l'utilisateur<br>.