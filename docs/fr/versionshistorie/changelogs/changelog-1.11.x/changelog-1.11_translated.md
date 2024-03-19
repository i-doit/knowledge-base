<!-- TRANSLATED by md-translate -->
# Changelog 1.11

# Changelog 1.11

[Aufgabe][Code]                                 "Events" Add-on aus dem Kern gelöst<br>
[Aufgabe][Import]                               Entfernen des Loginventory Imports inkl. DB, Modul etc.<br>
[Verbesserung][CMDB]                            Extras-Menü wird bei einem Klick in den freien Bereich nicht geschlossen<br>
[Verbesserung][CMDB]                            Tabs "Suche" und "Reports" in Zweispaltigen Objekt Browsern nutzen<br>
[Verbesserung][CMDB]                            Auswahl des Standard-Objekttyps in Objekt-Browsern<br>
[Verbesserung][CMDB]                            Anpassbare Spalten und Objekttypen im Objektbrowser<br>
[Verbesserung][Suche]                           Rekursive Suche innerhalb des Standort Pfades (aktivierbar in Mandanten Einstellungen)<br>
[Verbesserung][Suche]                           Fuzzy Search wurde entfernt<br>
[Verbesserung][Suche]                           Aliase zur Indexierung der Suche ergänzen<br>
[Verbesserung][Kategorien]                      Button zum Vorschlagen von Passwörtern in der Passwort-Kategorie<br>
[Verbesserung][Kategorien]                      Konfigurierbare Spalten in MultiValue Kategorielisten (angelehnt an Objektlisten)<br>
[Verbesserung][Kategorien]                      Verbesserte Darstellung von Chassis im Schrank<br>
[Verbesserung][Kategorien]                      Spalten aus Multi Value-Kategorien anpassen<br>
[Verbesserung][CSV]                             CSV-Import: Objekt-Matching mittels Objekt-ID<br>
[Verbesserung][CSV]                             Kontaktzuweisung per Mail-Adresse oder Loginname im CSV Import nicht möglich<br>
[Verbesserung][Listen]                          Verfügbarkeit des Attributs "Kapazit" von RAIDs für die Listenansicht der Speichersysteme<br>
[Verbesserung][Listen]                          Objektlisten: Gruppenmitgliedschaft bei Personen anzeigen<br>
[Verbesserung][Listen]                          Anzeige von verknüpftem Vertragsbeginn und -ende in Objektlisten<br>
[Verbesserung][Listen]                          Verwendung von Drop-Down-Feldern im Objektlistenfilter für Drop-Down und Dialog-Plus-Felder<br>
[Verbesserung][Listen]                          Anzeige der Variante eines Betriebssystems in der Listenansicht<br>
[Verbesserung][Listen]                          Anzeige der Anzahl der Cluster Member<br>
[Verbesserung][Listen]                          Listen: Sortierung nach Attributen speichern<br>
[Verbesserung][Listen]                          Objektlisten: Filtern nach Dialog (Plus)-Feldern<br>
[Verbesserung][Listen]                          Fixierte Überschriftenzeile in Objektlisten<br>
[Verbesserung][Objekte]                         Objektbrowser: Anpassbare Spalten (analog zu Listenansicht)<br>
[Verbesserung][Objekte]                         Bildergallerie: Sortierung nach Namen etc.<br>
[Verbesserung][Report-Manager]                  Report Manager Ergebnisse optional bündeln anstatt mehrere Zeilen anzuzeigen<br>
[Verbesserung][Report-Manager]                  Zeiträume in den Report-Bedingungen auswählbar<br>
[Verbesserung][Benutzerdefinierte Kategorien]   Auswahl der angezeigten Objekttypen in Objekt-Browsern eigener Kategorien<br>
[Verbesserung][Code]                            PHP 7.1 Kompatibilität<br>
[Bug][Suche]                                    Suche indexiert nicht Modell und Hersteller aus Kategorie Modell<br>
[Bug][Suche]                                    Reindex via Console führt zu einem Database-Error<br>
[Bug][Suche]                                    Nach Duplizieren eines Objektes und Ändern des Objekttyps werden zwei Einträge in der Suche angezeigt<br>
[Bug][Suche]                                    Refactoring Such-Indexierung: Dialog+ Felder werden nicht indexiert<br>
[Bug][Suche]                                    Wechsel des Objekttyps führt zu einem korrupten Suchindex<br>
[Bug][Suche]                                    SYSID vom Objekttypen "Kabel" werden nicht für Suche berücktsichtigt<br>
[Bug][Suche]                                    FQDN wird über die Suche nicht gefunden<br>
[Bug][Suche]                                    Gelöschte/Archivierte Objekte lassen sich in der Suche nicht unterscheiden<br>
[Bug][Suche]                                    Benutzerdefinierte Kategorien können nur mittels Deep search gefunden werden<br>
[Bug][Suche]                                    Inhalte aus Beschreibungsfeldern werden nicht neu indiziert<br>
[Bug][Suche]                                    open: Fullindex bricht mit Memory Leak ab<br>
[Bug][Suche]                                    Ändern des Objekttyps erzeugt zweiten Eintrag im Suchindex<br>
[Bug][Suche]                                    Suchindex: Memory Limit Fehlermeldung bei Neugenerierung des Suchindexes bei größeren Datenbanken<br>
[Bug][Listen]                                   One-Klick-Edit Modus<br>
[Bug][Listen]                                   Sortierung: Subkategorie "Installation" der Kategorie "Anwendung" nicht möglich<br>
[Bug][Listen]                                   Sortierung: Subkategorie "Lizenzschlüssel" Sortierung führt zu fehlerhafter Darstellung<br>
[Bug][Listen]                                   Sortierung Subkategorie "Zugewiesene Dateien" von der Kategorie "Dateien" nicht möglich<br>
[Bug][Listen]                                   Objektliste: Kategorie "Datensicherung" Sortierung nach "Wird gesichert von" führt zu einem SQL-Fehler<br>
[Bug][Listen]                                   Kategorie "Kontaktzuweisung" Feld "E-Mail Adresse" wird eine Funktion angezeigt<br>
[Bug][Listen]                                   SQL-Fehler in der Listenansicht wenn auf alle Felder gesucht wird<br>
[Bug][Listen]                                   Dashboard-Widget: Objektliste kann nicht konfiguriert werden<br>
[Bug][Listen]                                   Listenansicht bei Events "Hooks/Historie" nicht sichtbar<br>
[Bug][Listen]                                   Listenansicht: Ändern der Spaltenbreite in Listen führt zu einer unbrauchbaren Liste<br>
[Bug][Listen]                                   JDISC: Editieren Checkbox wird in der Konfiguration/Profile rausgenommen<br>
[Bug][Listen]                                   Druckansicht in Objektlisten ohne Funktion<br>
[Bug][Listen]                                   Fehlerhafte Sortierung bei "Anzahl benutzerdefinierter Felder"<br>
[Bug][Listen]                                   Gelöschte Objekte werden in der Zählung der vergebenen IPs mitgezählt<br>
[Bug][Listen]                                   Objektliste: Die Option "Gruppierte Daten darstellen als" kann nicht als Standard gespeichert werden<br>
[Bug][Listen]                                   Fehler beim Sortieren des Attributs "Kategorie" aus "Allgemein" in Objektlisten<br>
[Bug][Listen]                                   Sprachkonstante wird in Objektlistenkonfiguration angezeigt<br>
[Bug][Listen]                                   Attribute "Vorderseite Rastergröße" und "Rückseite Rastergröße" stehen nicht zur Darstellung in Objekt Listen zur Verfügung<br>
[Bug][Listen]                                   Sortierung in VLANs erfolgt alphanummerisch<br>
[Bug][Listen]                                   Filtern nach Vertragsstatus nicht möglich<br>
[Bug][Listen]                                   Objektlistenkonfiguration bei Betriebssystemen zeigt noch Kategorie "Anwendungen"<br>
[Bug][Listen]                                   Filter findet keine mitgelieferten Einträge aus Dialog+-Feldern<br>
[Bug][Check_MK]                                 Check_MK Tagnamen mit Anführungszeichen führen zu Problemen beim Erstellen der idoit_hosttags.mk<br>
[Bug][Check_MK]                                 Check-MK: Deinstallation des Add-Ons möglich<br>
[Bug][Kategorien]                               Attribut "Pfad für zu sichernde Daten" in Kategorie "Datensicherung" nicht vorhanden<br>
[Bug][Kategorien]                               Speichern eines Eintrags in der Kategorie "CUCM VoIP Leitung" führt zu einer SQL-Fehlermeldung<br>
[Bug][Kategorien]                               Archivierte logische Geräte werden in Speichernetzen weiterhin angezeigt<br>
[Bug][Kategorien]                               Platzhalter %ipaddress% in Kategorie "Zugriff" enthält ebenfalls den i-doit Host<br>
[Bug][Kategorien]                               Archivierte Dialog+ Einträge auswählbar im Zustand Normal<br>
[Bug][Kategorien]                               Patchlevel wird beim Anlegen einer Softwarezuweisung nicht angezeigt<br>
[Bug][Kategorien]                               Spezifische Kategorie "Lizenzzuweisung" wird in i-doit open benötigt, steht jedoch nicht zur Verfügung<br>
[Bug][CMDB]                                     Objektbrowser: Umschalten von "Objektsicht" auf "Suche", "Standortsicht" oder "Reports" fehlerhaft<br>
[Bug][CMDB]                                     Falsche Entschlüsselung von Passwörtern verursacht leere Reports<br>
[Bug][CMDB]                                     Paging funktioniert nicht im Internet Explorer 11<br>
[Bug][CMDB]                                     Objekt-Browser: Performance Probleme bei aufrufen des Objekt-Browsers<br>
[Bug][CMDB]                                     Auswahlfeld für Datumswerte wird bei mehrfachem Klicken transparent dargestellt<br>
[Bug][CMDB]                                     Inkonsistente Werte für tmp_table_size und max_heap_table_size setzen sich gegenseitig außer Kraft<br>
[Bug][CMDB]                                     Duplizieren: Bei der Bestätigung mit der ENTER-Taste wird das Objekt nicht dupliziert trotz Request<br>
[Bug][CMDB]                                     Inkonsistente Art der Sortierung der Service Filter<br>
[Bug][Massenänderung]                           Massenänderung überschreibt in benutzerdefinierten Kategorien Inhalte mit leeren Feldern, auch wenn die Option zum Ignorieren leerer Felder aktiv ist<br>
[Bug][Massenänderung]                           Massenänderung: Vorhandende Vorlagen fehlt der Download<br>
[Bug][Massenänderung]                           Fehlerhafte Darstellung zu Änderungsvorlagen/Templates im Bereich der Kategorie "Monitoring"<br>
[Bug][LDAP]                                     LDAP-Sync führt zu Exception-Errors<br>
[Bug][LDAP]                                     Darstellung der Lizenz in der Lizenzübersicht fehlerhaft<br>
[Bug][LDAP]                                     LDAP-Sync: Connection-Test Ausgabe fehlerhaft<br>
[Bug][Objekte]                                  Objekt-Browser: Kategorie "QinQ CE-VLAN" Attribut "Zugewiesenes SP-VLAN" ignoriert Konfiguration<br>
[Bug][Objekte]                                  Objekt-Browser: Bei fehlenden Kategorien in einem Objekttypen, werden Objekte unter Umständen nicht angezeigt<br>
[Bug][Objekte]                                  Objekt-Browser: Kategorie "QinQ CE-VLAN" zeigt keine "Layer-2-Netze" an<br>
[Bug][Objekte]                                  Zuweisungsfeld: Quellobjekt gleich null<br>
[Bug][Objekte]                                  QCW: Endgültiges löschen einer Objekttyp-Gruppe nicht möglich<br>
[Bug][Objekte]                                  Öffnen der Übersichtsseite springt auf das letzte Feld "auf Objektbrowser"<br>
[Bug][Objekte]                                  Automatische Inventarnummer führt beim duplizieren zu doppelten Duplikaten<br>
[Bug][Objekte]                                  Fehlerhafte Summierung der zu lizensierenden Objekten<br>
[Bug][Objekte]                                  Falsche berechnung des nächstmöglichen Kündigungsdatums<br>
[Bug][Objekte]                                  Javascript Warnung bei Dialog+ Feldern<br>
[Bug][Objekte]                                  Status ändern eines Dialog-Feldes mit einem parent führt zu einem Fehler<br>
[Bug][Objekte]                                  Editieren von mehreren Einträgen in Multi-Value-Kategorien verhindern<br>
[Bug][Objekte]                                  Chassis: Objekte nur einmalig zuweisbar<br>
[Bug][Objekte]                                  Schrankansicht bei Chassis nicht korrekt<br>
[Bug][Objekte]                                  Kategorie: Virtuelle Maschine ist die Rückwärtige Kategorie ohne Funktion<br>
[Bug][Objekte]                                  Kategorie Portübersicht (Stacking) nicht sichtbar<br>
[Bug][Objekte]                                  Layer-2-Netz: Zugewiesene Ports können nicht gepurged werden<br>
[Bug][Benutzerdefinierte Kategorien]            Fehler bei der Information "ID" in benutzerdefinierten Kategorien<br>
[Bug][Benutzerdefinierte Kategorien]            Benutzerdefinierte rückwärtige Kategorie wird nicht fett dargestellt, wenn der Report Ergebnisse liefert.<br>
[Bug][Benutzerdefinierte Kategorien]            Dialog+ Mehrfachauswahl ID statt Bezeichnung wenn diese eine Null ist<br>
[Bug][Benutzerdefinierte Kategorien]            Im Hilfetext werden keine Umlaute angezeigt<br>
[Bug][Benutzerdefinierte Kategorien]            Benutzerdefinierte Kategorie: Dialog+(Mehrfachauswahl) Attribut kann nicht gelöscht werden<br>
[Bug][Systemeinstellungen]                      Schlüssel der Systemeinstellungen können nur bis 100 Zeichen lang sein<br>
[Bug][Report-Manager]                           Report-Manager: Sortieren der Reports führt zu nicht funktionieren Buttons<br>
[Bug][Report-Manager]                           Report-Manager: Microsoft Internet-Explorer zeigt keine Ausgabe eines Reports an<br>
[Bug][Report-Manager]                           Report-Manager: Duplizieren eines Reports nicht möglich<br>
[Bug][Report-Manager]                           Report-Manager: Editieren/Speichern eines Reports nicht möglich<br>
[Bug][Report-Manager]                           Report-Manager: Ausgabe der Sprachkonstante wenn der Wert die Zahl 0 ist<br>
[Bug][Report-Manager]                           CPU-Informationen vollständig verfügbar für Reports<br>
[Bug][Report-Manager]                           Attribute "Vorderseite Rastergröße" und "Rückseite Rastergröße" stehen nicht im Report-Manager zur Verfügung<br>
[Bug][Report-Manager]                           Fehler bei der Verwendung einiger Attribute im Report Manager<br>
[Bug][Report-Manager]                           Wird ein variabler Report ausgeführt, passiert garnichts<br>
[Bug][Console]                                  Console: "Call to member funktion" nach OCS-Import<br>
[Bug][API]                                      API: Doppelte Kategorieeinträge in benutzerdefinierten Kategorien<br>
[Bug][Open-Version]                             i-doit Open: Hauptbereich ohne Funktion<br>
[Bug][Installation]                             Fehlerhafte Prüfung der MySQL-Version während der Installation/Update<br>
[Bug][Installation]                             Verbesserte Versionsprüfung bei Update und Installation<br>
[Bug][Listeneditierung]                         Listeneditierung umgeht Datenbereinigung<br>
[Bug][Listeneditierung]                         Listeditierung: Sprachkonstante wird in der Kategorie "Standort" angezeigt<br>
[Bug][Listeneditierung]                         Listeneditierung: Einzelne Auswahl eines Objektes bei mehreren Objekten nicht möglich<br>
[Bug][Listeneditierung]                         Listeditierung: Editieren der Kategorie "Hostadresse" wird fehlerhaft dargestellt<br>
[Bug][Listeneditierung]                         Listeneditierung: Kategorie "Stromlieferant/Stromverbraucher" speichern löst Verbindungen<br>
[Bug][Listeneditierung]                         Listeneditierung: Filterung bei Kontaktzuweisungen nach Objekttitel nicht möglich<br>
[Bug][Listeneditierung]                         Listeneditierung: Standort lösen nicht möglich<br>
[Bug][Listeneditierung]                         Vorschlagsfunktion klappt im Eingabefeld des Objekt-Browsers nicht korrekt auf<br>
[Bug][Listeneditierung]                         Listeneditierung der Kategorie WAN LEITUNGEN zeigt erfolgreiches speichern an, Werte bleiben aber unverändert<br>
[Bug][OCS]                                      OCS-Import: Protokollierung via GUI fehlt<br>
[Bug][OCS]                                      Datenbankfehler während OCS-Import<br>
[Bug][Update]                                   Database error im Updateprozess<br>
[Bug][Logbuch]                                  Logbuch: Listenansicht von Logbucheinträgen überlagerte Felder bei zu langen Inhalt<br>
[Bug][Logbuch]                                  Logbuch: Archivierte Einträge können nicht eingesehen werden<br>
[Bug][Logbuch]                                  Fehlende horizontale Scrollleiste im Logbuch<br>
[Bug][Logbuch]                                  Logbuch: Zuweisungskategorie "softwarezuweisung" erfolgen kein Einträge bei Änderungen<br>
[Bug][JEDI/Jdisc]                               JDISC: Editieren/Neu erstellen eines Profiles resultiert in einer DB-Fehlermeldung<br>
[Bug][JEDI/Jdisc]                               Trägt man eine Wert in die Kategorie JDisc custom attributes ohne Attribut wird eine Fehlermeldung ausgegeben<br>
[Bug][Beziehungen]                              Beziehungen: Gewichtungen fehlen in zu editierenden Beziehungen<br>
[Bug][Beziehungen]                              Beziehungen: Liste der Beziehungen unvollständig<br>
[Bug][CMDB-Explorer]                            CMDB-Explorer: Verwaltung der Profile fehlerhaft<br>
[Bug][Systemtools]                              tmp_table_size wird in der Systemübersicht doppelt dargestellt<br>
[Bug][Benachrichtigungen]                       Benachrichtigungen: Falsche Ausgabe von Objekten für bestimmte zugewiesene Personengruppen<br>
[Bug][Benachrichtigungen]                       Benachrichtigungen: Benutzerdefinierte Kategorien fehlen zur Auswahl in E-Mail-vorlagen<br>
[Bug][Rechtesystem]                             Reports können auch ohne Berechtigungen in allen Report-Kategorien erstellt werden<br>
[Bug][Rechtesystem]                             Dateibrowser ignoriert das Rechtesystem<br>
[Bug][Rechtesystem]                             Rechtesystem: Parameter Alle greift nicht bei "Kategorien in Objekttyp" in der Listeneditierung<br>
[Bug][Rechtesystem]                             Bereinigen aller Objekte die Teil einer Berechtigung sind lässt leeres Recht in der Konfiguration zurück<br>
[Bug][Events]                                   Events: Liefern nicht eindeutig identifizierbare Änderungen<br>
[Bug][CSV]                                      CSV-Import: LDAP-Group mapping führt zu fehlerhaften Import<br>
[Bug][CSV]                                      CSV-Import wirft PHP Fatal Error<br>
[Bug][Templates]                                Bei einer hohen Anzahl an Templates/Massenänderungsvorlagen werden nicht alle Templates/Massenänderungsvorlagen angezeigt<br>
[Bug][Dashboard]                                Widget "Objektliste" zeigt ID statt Livestatus-Icon<br>
[Bug][XML]                                      XML-Export speichert keine Informationen der Kategorie "Virtuelle Maschine"<br>
[Bug][Import]                                   Summary-Logik führt zu diversen Fehlern<br>
[Bug][Validierung]                              Validierung von Tags funktioniert nicht in der Listeneditierung<br>
[Bug][Benutzereinstellungen]                    Umlaute im Benutzerlogin führen zu fehlerhaften logins<br>
[Bug][Controller]                               Full index setzt PHP-Einstellung "memory_limit" auf 4 GByte Arbeitsspeicher<br>

[Tâche][Code] Add-on "Events" supprimé du noyau<br>
[Tâche][Importation] Suppression de l'importation de l'inventaire des connexions, y compris la BD, le module, etc.<br>
[Amélioration][CMDB] Le menu Extras ne se ferme pas lorsqu'on clique dans la zone libre<br>
[Amélioration][CMDB] Utiliser les onglets "Recherche" et "Rapports" dans les navigateurs d'objets à deux colonnes<br>.
[Amélioration][CMDB] Sélection du type d'objet par défaut dans les navigateurs d'objets<br>
[Amélioration][CMDB] Colonnes et types d'objets personnalisables dans les navigateurs d'objets<br>
[Amélioration][Recherche] Recherche récursive dans le chemin d'accès au site (activable dans les préférences du mandant)<br>
[Amélioration][Recherche] Suppression de la recherche floue<br>.
[Amélioration][Recherche] Ajout d'alias pour l'indexation de la recherche<br>
[Amélioration][Catégories] Bouton pour suggérer des mots de passe dans la catégorie des mots de passe<br>
[Amélioration][Catégories] Colonnes configurables dans les listes de catégories MultiValue (inspirées des listes d'objets)<br>
[Amélioration][Catégories] Amélioration de l'affichage des châssis dans l'armoire<br>
[Amélioration][Catégories] Personnaliser les colonnes des catégories Multi Value<br>
[Amélioration][CSV] Importation CSV : correspondance d'objet par ID d'objet<br>
[Amélioration][CSV] Attribution de contact par adresse mail ou nom de connexion impossible dans l'importation CSV<br>
[Amélioration][Listes] Disponibilité de l'attribut "Kapazit" des RAID pour l'affichage des listes des systèmes de stockage<br>.
[Amélioration][Listes] Listes d'objets : affichage de l'appartenance à un groupe pour les personnes<br>
[Amélioration][Listes] Affichage des dates de début et de fin de contrat liées dans les listes d'objets<br>
[Amélioration][Listes] Utilisation des champs déroulants dans le filtre des listes d'objets pour les champs déroulants et dialogues plus<br>.
[Amélioration][Listes] Affichage de la variante d'un système d'exploitation dans la vue en liste<br>
[Amélioration][Listes] Affichage du nombre de membres du cluster<br>
[Amélioration][Listes] Listes : enregistrer le tri par attribut<br>
[Amélioration][Listes] Listes d'objets : filtrer par champs de dialogue (plus)<br>
[Amélioration][Listes] Ligne d'en-tête fixe dans les listes d'objets<br>
[Amélioration][Objets] Navigateur d'objets : Colonnes personnalisables (analogue à l'affichage des listes)<br>
[Amélioration][Objets] Galerie d'images : tri par nom, etc.<br>
[Amélioration][Gestionnaire de rapports] Gestionnaire de rapports Regrouper les résultats en option au lieu d'afficher plusieurs lignes<br>
[Amélioration][Gestionnaire de rapports] Périodes sélectionnables dans les conditions de rapport<br>
[Amélioration][Catégories personnalisées] Sélection des types d'objets affichés dans les navigateurs d'objets de catégories personnalisées<br>
[Amélioration][Code] Compatibilité PHP 7.1<br>
[Bug][Recherche] La recherche n'indexe pas le modèle et le fabricant de la catégorie Modèle<br>
[Bug][Recherche] Reindex via Console provoque une erreur de base de données<br>
[Bug][Recherche] Après duplication d'un objet et modification du type d'objet, deux entrées apparaissent dans la recherche<br>.
[Bug][Recherche] Refactoring Indexation de la recherche : les champs Dialog+ ne sont pas indexés<br>
[Bug][Recherche] Le changement de type d'objet entraîne une corruption de l'index de recherche<br>
[Bug][Recherche] Le SYSID du type d'objet "câble" n'est pas pris en compte dans la recherche<br>.
[Bug][Recherche] Le FQDN n'est pas trouvé par la recherche<br>.
[Bug][Recherche] Les objets supprimés/archivés ne sont pas différenciés dans la recherche<br>.
[Bug][Recherche] Les catégories définies par l'utilisateur ne peuvent être trouvées qu'avec Deep search<br>
[Bug][Recherche] Le contenu des champs de description n'est pas réindexé<br>.
[Bug][Recherche] open : Fullindex s'arrête avec une fuite de mémoire<br>
[Bug][Recherche] Modifier le type d'objet crée une deuxième entrée dans l'index de recherche<br>
[Bug][Recherche] Index de recherche : message d'erreur de limite de mémoire lors de la régénération de l'index de recherche pour les grandes bases de données<br>
[Bug][Listes] Mode d'édition en un clic<br>
[Bug][Listes] Tri : sous-catégorie "Installation" de la catégorie "Application" impossible<br>
[Bug][Listes] Tri : le tri de la sous-catégorie "Clé de licence" entraîne un affichage incorrect<br>
[Bug][Listes] Tri impossible de la sous-catégorie "Fichiers attribués" de la catégorie "Fichiers"<br>
[Bug][Listes] Liste d'objets : Catégorie "Sauvegarde de données" Le tri par "Est sauvegardé par" entraîne une erreur SQL<br>.
[Bug][Listes] Catégorie "Attribution de contact" champ "Adresse e-mail" une fonction est affichée<br>
[Bug][Listes] Erreur SQL dans la vue liste lors d'une recherche sur tous les champs<br>
[Bug][Listes] Widget du Dashboard : impossible de configurer la liste des objets<br>
[Bug][Listes] Vue de la liste non visible lors des événements "Hooks/Historique"<br>
[Bug][Listes] Vue des listes : modifier la largeur des colonnes dans les listes entraîne une liste inutilisable<br>
[Bug][Listes] JDISC : case à cocher d'édition retirée dans la configuration/le profil<br>.
[Bug][Listes] Aperçu avant impression dans les listes d'objets sans fonction<br>
[Bug][Listes] Erreur de tri dans "Nombre de champs définis par l'utilisateur"<br>.
[Bug][Listes] Les objets supprimés sont comptés dans le décompte des IP attribuées<br>
[Bug][Listes] Liste d'objets : L'option "Représenter les données groupées sous" ne peut pas être enregistrée par défaut<br>.
[Bug][Listes] Erreur de tri de l'attribut "Catégorie" de "Général" dans les listes d'objets<br>.
[Bug][Listes] La constante de langue est affichée dans la configuration de la liste d'objets<br>
[Bug][Listes] Les attributs "Taille de la grille recto" et "Taille de la grille verso" ne sont pas disponibles pour l'affichage dans les listes d'objets<br>.
[Bug][Listes] Le tri dans les VLAN se fait par ordre alphanumérique<br>.
[Bug][Listes] Impossible de filtrer par statut de contrat<br>
[Bug][Listes] La configuration de la liste d'objets pour les systèmes d'exploitation affiche toujours la catégorie "Applications"<br>.
[Bug][Listes] Le filtre ne trouve pas les entrées fournies à partir des champs Dialogue+<br>
[Bug][Check_MK] Les noms de tags Check_MK avec des guillemets causent des problèmes lors de la création de idoit_hosttags.mk<br>
[Bug][Check_MK] Check-MK : possibilité de désinstaller l'add-on<br>
[Bug][Catégories] Attribut "Chemin pour les données à sauvegarder" non disponible dans la catégorie "Sauvegarde des données"<br>.
[Bug][Catégories] Enregistrer une entrée dans la catégorie "Ligne CUCM VoIP" entraîne un message d'erreur SQL<br>.
[Bug][Catégories] Les périphériques logiques archivés continuent de s'afficher dans les réseaux de stockage<br>
[Bug][Catégories] Le caractère générique %ipaddress% dans la catégorie "Accès" contient également l'hôte i-doit<br>.
[Bug][Catégories] Entrées archivées Dialog+ sélectionnables dans l'état Normal<br>
[Bug][Catégories] Le niveau de patch n'est pas affiché lors de la création d'une attribution de logiciel<br>
[Bug][Catégories] La catégorie spécifique "Attribution de licence" est requise dans i-doit open, mais n'est pas disponible<br>
[Bug][CMDB] Navigateur d'objets : Erreur de basculement de la "vue objet" vers la "recherche", la "vue site" ou les "rapports"<br>.
[Bug][CMDB] Le décryptage incorrect des mots de passe provoque des rapports vides<br>
[Bug][CMDB] La radiomessagerie ne fonctionne pas dans Internet Explorer 11<br>
[Bug][CMDB] Explorateur d'objets : Problèmes de performance lors de l'appel de l'explorateur d'objets<br>
[Bug][CMDB] Le champ de sélection des valeurs de date devient transparent lorsque l'on clique plusieurs fois<br>.
[Bug][CMDB] Des valeurs incohérentes pour tmp_table_size et max_heap_table_size s'annulent mutuellement<br>.
[Bug][CMDB] Dupliquer : Lors de la validation avec la touche ENTER, l'objet n'est pas dupliqué malgré la requête<br>.
[Bug][CMDB] Manière incohérente de trier les filtres de service<br>
[Bug][Modification en masse] La modification en masse écrase le contenu avec des champs vides dans les catégories personnalisées, même si l'option d'ignorer les champs vides est activée<br>.
[Bug][Changement en masse] Changement en masse : manque de téléchargement des modèles existants<br>
[Bug][Changement en masse] Affichage incorrect des modèles de changement/modèles dans la catégorie "Monitoring"<br>.
[Bug][LDAP] La synchronisation LDAP provoque des exceptions<br>.
[Bug][LDAP] Affichage incorrect de la licence dans l'aperçu des licences<br>.
[Bug][LDAP] Sync LDAP : sortie de test de connexion erronée<br>
[Bug][Objets] Explorateur d'objets : Catégorie "QinQ CE-VLAN" Attribut "SP-VLAN assigné" ignore la configuration<br>
[Bug][Objets] Explorateur d'objets : En cas d'absence de catégories dans un type d'objet, les objets peuvent ne pas s'afficher<br>.
[Bug][Objets] Explorateur d'objets : La catégorie "QinQ CE-VLAN" n'affiche pas les "réseaux de couche 2"<br>.
[Bug][Objets] Champ d'assignation : objet source égal à zéro<br>
[Bug][Objets] QCW : impossible de supprimer définitivement un groupe de types d'objets<br>
[Bug][Objets] Ouverture de la page de résumé saute sur le dernier champ "sur le navigateur d'objets"<br>.
[Bug][Objets] Le numéro d'inventaire automatique entraîne des doublons lors de la duplication<br>.
[Bug][Objets] Totalisation erronée des objets à licencier<br>
[Bug][Objets] Calcul erroné de la prochaine date de résiliation<br>.
[bug][objets] Avertissement Javascript pour les champs Dialog+<br>
[Bug][Objets] Le changement d'état d'un champ de dialogue avec un parent provoque une erreur<br>.
[Bug][Objets] Empêcher l'édition de plusieurs entrées dans des catégories multi-valeurs<br>
[Bug][Objets] Châssis : les objets ne peuvent être assignés qu'une seule fois<br>
[Bug][Objets] Vue de l'armoire incorrecte pour châssis<br>
[Bug][Objets] Catégorie : machine virtuelle, la catégorie arrière est sans fonction<br>
[Bug][Objets] Catégorie Aperçu des ports (empilage) non visible<br>
[Bug][Objets] Réseau de couche 2 : Les ports alloués ne peuvent pas être purgés<br>
[Bug][Catégories personnalisées] Erreur dans l'information "ID" dans les catégories personnalisées<br>
[Bug][Catégories personnalisées] La catégorie arrière personnalisée n'apparaît pas en gras lorsque le rapport fournit des résultats.<br>
[Bug][Catégories personnalisées] Dialogue+ choix multiple ID au lieu de libellé si c'est un zéro<br>
[Bug][Catégories personnalisées] Le texte d'aide n'affiche pas les trémas<br>.
[Bug][Catégories personnalisées] Catégorie personnalisée : Dialogue+(choix multiple) attribut ne peut pas être supprimé<br>
[Bug][Paramètres système] Les clés des paramètres système ne peuvent pas dépasser 100 caractères<br>.
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : le tri des rapports entraîne le non fonctionnement des boutons<br>.
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : Microsoft Internet Explorer n'affiche pas la sortie d'un rapport<br>
[Bug][Report-Manager] Report-Manager : impossible de dupliquer un rapport<br>
[Bug][Report-Manager] Report-Manager : impossible d'éditer/enregistrer un rapport<br>
[Bug][Report-Manager] Report-Manager : sortie de la constante de langage si la valeur est le nombre 0<br>
[Bug][Gestionnaire de rapports] Informations CPU entièrement disponibles pour les rapports<br>.
[Bug][Report-Manager] Les attributs "Taille de la trame recto" et "Taille de la trame verso" ne sont pas disponibles dans le Report-Manager<br>.
[Bug][Report-Manager] Erreur lors de l'utilisation de certains attributs dans le Report Manager<br>.
[Bug][Gestionnaire de rapports] Si un rapport variable est exécuté, il ne se passe rien<br>
[Bug][Console] Console : "Appel à la fonction membre" après l'importation OCS<br>
[Bug][API] API : Doubles entrées de catégories dans les catégories définies par l'utilisateur<br>.
[Bug][Version Open] i-doit Open : zone principale sans fonction<br>
[Bug][Installation] Vérification erronée de la version de MySQL pendant l'installation/mise à jour<br>
[Bug][Installation] Amélioration de la vérification de la version lors de la mise à jour et de l'installation<br>
[Bug][Édition de liste] L'édition de liste contourne le nettoyage des données<br>
[Bug][Édition de liste] Édition de liste : la constante de langue est affichée dans la catégorie "Emplacement"<br>
[Bug][édition de liste] Édition de liste : impossible de sélectionner un seul objet parmi plusieurs<br> objets
[Bug][Édition de liste] Édition de liste : l'édition de la catégorie "Adresse de l'hôte" est affichée de manière incorrecte<br>.
[Bug][Édition de liste] Édition de liste : la catégorie "Fournisseur d'électricité/consommateur d'électricité" enregistre les connexions se détache<br>
[Bug][édition de liste] Édition de liste : impossibilité de filtrer les affectations de contacts par titre d'objet<br>
[Bug][Édition de liste] Édition de liste : impossible de résoudre la localisation<br>
[bug][édition de liste] La fonction de suggestion ne s'ouvre pas correctement dans le champ de saisie de l'explorateur d'objets<br>.
[Bug][Édition de liste] L'édition de liste de la catégorie LIGNES WAN affiche Enregistrer avec succès, mais les valeurs restent inchangées<br>
[Bug][OCS] Importation OCS : la journalisation via l'interface graphique manque<br>
[Bug][OCS] Erreur de base de données pendant l'importation OCS<br>
[Bug][Update] Erreur de base de données pendant le processus de mise à jour<br>
[Bug][Journal de bord] Journal de bord : vue en liste des entrées du journal, champs superposés si le contenu est trop long<br>
[Bug][Journal de bord] Journal de bord : les entrées archivées ne peuvent pas être consultées<br>
[Bug][Journal de bord] Absence de barre de défilement horizontale dans le journal de bord<br>
[Bug][Journal de bord] Journal de bord : la catégorie d'attribution "software assignment" ne fait pas d'entrées lors de modifications<br>
[Bug][JEDI/Jdisc] JDISC : Editer/créer un profil résulte en un message d'erreur DB<br>.
[Bug][JEDI/Jdisc] Si vous entrez une valeur dans la catégorie JDisc custom attributes sans attribut, un message d'erreur apparaît<br>.
[Bug][Relations] Relations : Pondérations manquantes dans les relations à éditer<br>.
[Bug][relations] Relations : Liste des relations incomplète<br>
[Bug][CMDB-Explorer] CMDB-Explorer : gestion des profils erronée<br>
[Bug][Outils système] tmp_table_size est dupliqué dans l'aperçu système<br>
[Bug][Notifications] Notifications : Sortie incorrecte d'objets pour certains groupes de personnes assignées<br>
[Bug][Notifications] Notifications : Les catégories personnalisées ne sont pas sélectionnées dans les modèles d'email<br>.
[Bug][Système de permissions] Les rapports peuvent être créés sans permissions dans toutes les catégories de rapports<br>.
[Bug][Système de permissions] L'explorateur de fichiers ignore le système de permissions<br>
[Bug][Système de permissions] Système de permissions : le paramètre Tous ne s'applique pas à "Catégories dans le type d'objet" dans l'édition de liste<br>
[Bug][Système de droits] Le nettoyage de tous les objets faisant partie d'une autorisation laisse un droit vide dans la configuration<br>.
[Bug][Events] Evénements : fournissent des modifications non clairement identifiables<br>
[Bug][CSV] Importation CSV : le mappage des groupes LDAP entraîne une importation erronée<br>
[Bug][CSV] L'importation CSV provoque une erreur fatale PHP<br>
[Bug][Templates] Si le nombre de modèles/modèles de modification en masse est élevé, tous les modèles/modèles de modification en masse ne sont pas affichés<br>.
[Bug][Dashboard] Le widget "Liste d'objets" affiche l'ID au lieu de l'icône de l'état vivant<br>
[Bug][XML] L'export XML n'enregistre pas les informations de la catégorie "Machine virtuelle"<br>.
[Bug][Importation] La logique du résumé entraîne diverses erreurs<br>
[Bug][Validation] La validation des balises ne fonctionne pas dans l'édition de liste<br>
[Bug][Paramètres utilisateur] Les trémas dans le login de l'utilisateur entraînent des logins erronés<br>
[Bug][Controller] Full index fixe le paramètre PHP "memory_limit" à 4 Go de mémoire<br>.