[Aufgabe][Code]                                 "Events" Add-on aus dem Kern gelöst
[Aufgabe][Import]                               Entfernen des Loginventory Imports inkl. DB, Modul etc.
[Verbesserung][CMDB]                            Extras-Menü wird bei einem Klick in den freien Bereich nicht geschlossen
[Verbesserung][CMDB]                            Tabs "Suche" und "Reports" in Zweispaltigen Objekt Browsern nutzen
[Verbesserung][CMDB]                            Auswahl des Standard-Objekttyps in Objekt-Browsern
[Verbesserung][CMDB]                            Anpassbare Spalten und Objekttypen im Objektbrowser
[Verbesserung][Suche]                           Rekursive Suche innerhalb des Standort Pfades (aktivierbar in Mandanten Einstellungen)
[Verbesserung][Suche]                           Fuzzy Search wurde entfernt
[Verbesserung][Suche]                           Aliase zur Indexierung der Suche ergänzen
[Verbesserung][Kategorien]                      Button zum Vorschlagen von Passwörtern in der Passwort-Kategorie
[Verbesserung][Kategorien]                      Konfigurierbare Spalten in MultiValue Kategorielisten (angelehnt an Objektlisten)
[Verbesserung][Kategorien]                      Verbesserte Darstellung von Chassis im Schrank
[Verbesserung][Kategorien]                      Spalten aus Multi Value-Kategorien anpassen
[Verbesserung][CSV]                             CSV-Import: Objekt-Matching mittels Objekt-ID
[Verbesserung][CSV]                             Kontaktzuweisung per Mail-Adresse oder Loginname im CSV Import nicht möglich
[Verbesserung][Listen]                          Verfügbarkeit des Attributs "Kapazit" von RAIDs für die Listenansicht der Speichersysteme
[Verbesserung][Listen]                          Objektlisten: Gruppenmitgliedschaft bei Personen anzeigen
[Verbesserung][Listen]                          Anzeige von verknüpftem Vertragsbeginn und -ende in Objektlisten
[Verbesserung][Listen]                          Verwendung von Drop-Down-Feldern im Objektlistenfilter für Drop-Down und Dialog-Plus-Felder
[Verbesserung][Listen]                          Anzeige der Variante eines Betriebssystems in der Listenansicht
[Verbesserung][Listen]                          Anzeige der Anzahl der Cluster Member
[Verbesserung][Listen]                          Listen: Sortierung nach Attributen speichern
[Verbesserung][Listen]                          Objektlisten: Filtern nach Dialog (Plus)-Feldern
[Verbesserung][Listen]                          Fixierte Überschriftenzeile in Objektlisten
[Verbesserung][Objekte]                         Objektbrowser: Anpassbare Spalten (analog zu Listenansicht)
[Verbesserung][Objekte]                         Bildergallerie: Sortierung nach Namen etc.
[Verbesserung][Report-Manager]                  Report Manager Ergebnisse optional bündeln anstatt mehrere Zeilen anzuzeigen
[Verbesserung][Report-Manager]                  Zeiträume in den Report-Bedingungen auswählbar
[Verbesserung][Benutzerdefinierte Kategorien]   Auswahl der angezeigten Objekttypen in Objekt-Browsern eigener Kategorien
[Verbesserung][Code]                            PHP 7.1 Kompatibilität
[Bug][Suche]                                    Suche indexiert nicht Modell und Hersteller aus Kategorie Modell
[Bug][Suche]                                    Reindex via Console führt zu einem Database-Error
[Bug][Suche]                                    Nach Duplizieren eines Objektes und Ändern des Objekttyps werden zwei Einträge in der Suche angezeigt
[Bug][Suche]                                    Refactoring Such-Indexierung: Dialog+ Felder werden nicht indexiert
[Bug][Suche]                                    Wechsel des Objekttyps führt zu einem korrupten Suchindex
[Bug][Suche]                                    SYSID vom Objekttypen "Kabel" werden nicht für Suche berücktsichtigt
[Bug][Suche]                                    FQDN wird über die Suche nicht gefunden
[Bug][Suche]                                    Gelöschte/Archivierte Objekte lassen sich in der Suche nicht unterscheiden
[Bug][Suche]                                    Benutzerdefinierte Kategorien können nur mittels Deep search gefunden werden
[Bug][Suche]                                    Inhalte aus Beschreibungsfeldern werden nicht neu indiziert
[Bug][Suche]                                    open: Fullindex bricht mit Memory Leak ab
[Bug][Suche]                                    Ändern des Objekttyps erzeugt zweiten Eintrag im Suchindex
[Bug][Suche]                                    Suchindex: Memory Limit Fehlermeldung bei Neugenerierung des Suchindexes bei größeren Datenbanken
[Bug][Listen]                                   One-Klick-Edit Modus
[Bug][Listen]                                   Sortierung: Subkategorie "Installation" der Kategorie "Anwendung" nicht möglich
[Bug][Listen]                                   Sortierung: Subkategorie "Lizenzschlüssel" Sortierung führt zu fehlerhafter Darstellung
[Bug][Listen]                                   Sortierung Subkategorie "Zugewiesene Dateien" von der Kategorie "Dateien" nicht möglich
[Bug][Listen]                                   Objektliste: Kategorie "Datensicherung" Sortierung nach "Wird gesichert von" führt zu einem SQL-Fehler
[Bug][Listen]                                   Kategorie "Kontaktzuweisung" Feld "E-Mail Adresse" wird eine Funktion angezeigt
[Bug][Listen]                                   SQL-Fehler in der Listenansicht wenn auf alle Felder gesucht wird
[Bug][Listen]                                   Dashboard-Widget: Objektliste kann nicht konfiguriert werden
[Bug][Listen]                                   Listenansicht bei Events "Hooks/Historie" nicht sichtbar
[Bug][Listen]                                   Listenansicht: Ändern der Spaltenbreite in Listen führt zu einer unbrauchbaren Liste
[Bug][Listen]                                   JDISC: Editieren Checkbox wird in der Konfiguration/Profile rausgenommen
[Bug][Listen]                                   Druckansicht in Objektlisten ohne Funktion
[Bug][Listen]                                   Fehlerhafte Sortierung bei "Anzahl benutzerdefinierter Felder"
[Bug][Listen]                                   Gelöschte Objekte werden in der Zählung der vergebenen IPs mitgezählt
[Bug][Listen]                                   Objektliste: Die Option "Gruppierte Daten darstellen als" kann nicht als Standard gespeichert werden
[Bug][Listen]                                   Fehler beim Sortieren des Attributs "Kategorie" aus "Allgemein" in Objektlisten
[Bug][Listen]                                   Sprachkonstante wird in Objektlistenkonfiguration angezeigt
[Bug][Listen]                                   Attribute "Vorderseite Rastergröße" und "Rückseite Rastergröße" stehen nicht zur Darstellung in Objekt Listen zur Verfügung
[Bug][Listen]                                   Sortierung in VLANs erfolgt alphanummerisch
[Bug][Listen]                                   Filtern nach Vertragsstatus nicht möglich
[Bug][Listen]                                   Objektlistenkonfiguration bei Betriebssystemen zeigt noch Kategorie "Anwendungen"
[Bug][Listen]                                   Filter findet keine mitgelieferten Einträge aus Dialog+-Feldern
[Bug][Check_MK]                                 Check_MK Tagnamen mit Anführungszeichen führen zu Problemen beim Erstellen der idoit_hosttags.mk
[Bug][Check_MK]                                 Check-MK: Deinstallation des Add-Ons möglich
[Bug][Kategorien]                               Attribut "Pfad für zu sichernde Daten" in Kategorie "Datensicherung" nicht vorhanden
[Bug][Kategorien]                               Speichern eines Eintrags in der Kategorie "CUCM VoIP Leitung" führt zu einer SQL-Fehlermeldung
[Bug][Kategorien]                               Archivierte logische Geräte werden in Speichernetzen weiterhin angezeigt
[Bug][Kategorien]                               Platzhalter %ipaddress% in Kategorie "Zugriff" enthält ebenfalls den i-doit Host
[Bug][Kategorien]                               Archivierte Dialog+ Einträge auswählbar im Zustand Normal
[Bug][Kategorien]                               Patchlevel wird beim Anlegen einer Softwarezuweisung nicht angezeigt
[Bug][Kategorien]                               Spezifische Kategorie "Lizenzzuweisung" wird in i-doit open benötigt, steht jedoch nicht zur Verfügung
[Bug][CMDB]                                     Objektbrowser: Umschalten von "Objektsicht" auf "Suche", "Standortsicht" oder "Reports" fehlerhaft
[Bug][CMDB]                                     Falsche Entschlüsselung von Passwörtern verursacht leere Reports
[Bug][CMDB]                                     Paging funktioniert nicht im Internet Explorer 11
[Bug][CMDB]                                     Objekt-Browser: Performance Probleme bei aufrufen des Objekt-Browsers
[Bug][CMDB]                                     Auswahlfeld für Datumswerte wird bei mehrfachem Klicken transparent dargestellt
[Bug][CMDB]                                     Inkonsistente Werte für tmp_table_size und max_heap_table_size setzen sich gegenseitig außer Kraft
[Bug][CMDB]                                     Duplizieren: Bei der Bestätigung mit der ENTER-Taste wird das Objekt nicht dupliziert trotz Request
[Bug][CMDB]                                     Inkonsistente Art der Sortierung der Service Filter
[Bug][Massenänderung]                           Massenänderung überschreibt in benutzerdefinierten Kategorien Inhalte mit leeren Feldern, auch wenn die Option zum Ignorieren leerer Felder aktiv ist
[Bug][Massenänderung]                           Massenänderung: Vorhandende Vorlagen fehlt der Download
[Bug][Massenänderung]                           Fehlerhafte Darstellung zu Änderungsvorlagen/Templates im Bereich der Kategorie "Monitoring"
[Bug][LDAP]                                     LDAP-Sync führt zu Exception-Errors
[Bug][LDAP]                                     Darstellung der Lizenz in der Lizenzübersicht fehlerhaft
[Bug][LDAP]                                     LDAP-Sync: Connection-Test Ausgabe fehlerhaft
[Bug][Objekte]                                  Objekt-Browser: Kategorie "QinQ CE-VLAN" Attribut "Zugewiesenes SP-VLAN" ignoriert Konfiguration
[Bug][Objekte]                                  Objekt-Browser: Bei fehlenden Kategorien in einem Objekttypen, werden Objekte unter Umständen nicht angezeigt
[Bug][Objekte]                                  Objekt-Browser: Kategorie "QinQ CE-VLAN" zeigt keine "Layer-2-Netze" an
[Bug][Objekte]                                  Zuweisungsfeld: Quellobjekt gleich null
[Bug][Objekte]                                  QCW: Endgültiges löschen einer Objekttyp-Gruppe nicht möglich
[Bug][Objekte]                                  Öffnen der Übersichtsseite springt auf das letzte Feld "auf Objektbrowser"
[Bug][Objekte]                                  Automatische Inventarnummer führt beim duplizieren zu doppelten Duplikaten
[Bug][Objekte]                                  Fehlerhafte Summierung der zu lizensierenden Objekten
[Bug][Objekte]                                  Falsche berechnung des nächstmöglichen Kündigungsdatums
[Bug][Objekte]                                  Javascript Warnung bei Dialog+ Feldern
[Bug][Objekte]                                  Status ändern eines Dialog-Feldes mit einem parent führt zu einem Fehler
[Bug][Objekte]                                  Editieren von mehreren Einträgen in Multi-Value-Kategorien verhindern
[Bug][Objekte]                                  Chassis: Objekte nur einmalig zuweisbar
[Bug][Objekte]                                  Schrankansicht bei Chassis nicht korrekt
[Bug][Objekte]                                  Kategorie: Virtuelle Maschine ist die Rückwärtige Kategorie ohne Funktion
[Bug][Objekte]                                  Kategorie Portübersicht (Stacking) nicht sichtbar
[Bug][Objekte]                                  Layer-2-Netz: Zugewiesene Ports können nicht gepurged werden
[Bug][Benutzerdefinierte Kategorien]            Fehler bei der Information "ID" in benutzerdefinierten Kategorien
[Bug][Benutzerdefinierte Kategorien]            Benutzerdefinierte rückwärtige Kategorie wird nicht fett dargestellt, wenn der Report Ergebnisse liefert.
[Bug][Benutzerdefinierte Kategorien]            Dialog+ Mehrfachauswahl ID statt Bezeichnung wenn diese eine Null ist
[Bug][Benutzerdefinierte Kategorien]            Im Hilfetext werden keine Umlaute angezeigt
[Bug][Benutzerdefinierte Kategorien]            Benutzerdefinierte Kategorie: Dialog+(Mehrfachauswahl) Attribut kann nicht gelöscht werden
[Bug][Systemeinstellungen]                      Schlüssel der Systemeinstellungen können nur bis 100 Zeichen lang sein
[Bug][Report-Manager]                           Report-Manager: Sortieren der Reports führt zu nicht funktionieren Buttons
[Bug][Report-Manager]                           Report-Manager: Microsoft Internet-Explorer zeigt keine Ausgabe eines Reports an
[Bug][Report-Manager]                           Report-Manager: Duplizieren eines Reports nicht möglich
[Bug][Report-Manager]                           Report-Manager: Editieren/Speichern eines Reports nicht möglich
[Bug][Report-Manager]                           Report-Manager: Ausgabe der Sprachkonstante wenn der Wert die Zahl 0 ist
[Bug][Report-Manager]                           CPU-Informationen vollständig verfügbar für Reports
[Bug][Report-Manager]                           Attribute "Vorderseite Rastergröße" und "Rückseite Rastergröße" stehen nicht im Report-Manager zur Verfügung
[Bug][Report-Manager]                           Fehler bei der Verwendung einiger Attribute im Report Manager
[Bug][Report-Manager]                           Wird ein variabler Report ausgeführt, passiert garnichts
[Bug][Console]                                  Console: "Call to member funktion" nach OCS-Import
[Bug][API]                                      API: Doppelte Kategorieeinträge in benutzerdefinierten Kategorien
[Bug][Open-Version]                             i-doit Open: Hauptbereich ohne Funktion
[Bug][Installation]                             Fehlerhafte Prüfung der MySQL-Version während der Installation/Update
[Bug][Installation]                             Verbesserte Versionsprüfung bei Update und Installation
[Bug][Listeneditierung]                         Listeneditierung umgeht Datenbereinigung
[Bug][Listeneditierung]                         Listeditierung: Sprachkonstante wird in der Kategorie "Standort" angezeigt
[Bug][Listeneditierung]                         Listeneditierung: Einzelne Auswahl eines Objektes bei mehreren Objekten nicht möglich
[Bug][Listeneditierung]                         Listeditierung: Editieren der Kategorie "Hostadresse" wird fehlerhaft dargestellt
[Bug][Listeneditierung]                         Listeneditierung: Kategorie "Stromlieferant/Stromverbraucher" speichern löst Verbindungen
[Bug][Listeneditierung]                         Listeneditierung: Filterung bei Kontaktzuweisungen nach Objekttitel nicht möglich
[Bug][Listeneditierung]                         Listeneditierung: Standort lösen nicht möglich
[Bug][Listeneditierung]                         Vorschlagsfunktion klappt im Eingabefeld des Objekt-Browsers nicht korrekt auf
[Bug][Listeneditierung]                         Listeneditierung der Kategorie WAN LEITUNGEN zeigt erfolgreiches speichern an, Werte bleiben aber unverändert
[Bug][OCS]                                      OCS-Import: Protokollierung via GUI fehlt
[Bug][OCS]                                      Datenbankfehler während OCS-Import
[Bug][Update]                                   Database error im Updateprozess
[Bug][Logbuch]                                  Logbuch: Listenansicht von Logbucheinträgen überlagerte Felder bei zu langen Inhalt
[Bug][Logbuch]                                  Logbuch: Archivierte Einträge können nicht eingesehen werden
[Bug][Logbuch]                                  Fehlende horizontale Scrollleiste im Logbuch
[Bug][Logbuch]                                  Logbuch: Zuweisungskategorie "softwarezuweisung" erfolgen kein Einträge bei Änderungen
[Bug][JEDI/Jdisc]                               JDISC: Editieren/Neu erstellen eines Profiles resultiert in einer DB-Fehlermeldung
[Bug][JEDI/Jdisc]                               Trägt man eine Wert in die Kategorie JDisc custom attributes ohne Attribut wird eine Fehlermeldung ausgegeben
[Bug][Beziehungen]                              Beziehungen: Gewichtungen fehlen in zu editierenden Beziehungen
[Bug][Beziehungen]                              Beziehungen: Liste der Beziehungen unvollständig
[Bug][CMDB-Explorer]                            CMDB-Explorer: Verwaltung der Profile fehlerhaft
[Bug][Systemtools]                              tmp_table_size wird in der Systemübersicht doppelt dargestellt
[Bug][Benachrichtigungen]                       Benachrichtigungen: Falsche Ausgabe von Objekten für bestimmte zugewiesene Personengruppen
[Bug][Benachrichtigungen]                       Benachrichtigungen: Benutzerdefinierte Kategorien fehlen zur Auswahl in E-Mail-vorlagen
[Bug][Rechtesystem]                             Reports können auch ohne Berechtigungen in allen Report-Kategorien erstellt werden
[Bug][Rechtesystem]                             Dateibrowser ignoriert das Rechtesystem
[Bug][Rechtesystem]                             Rechtesystem: Parameter Alle greift nicht bei "Kategorien in Objekttyp" in der Listeneditierung
[Bug][Rechtesystem]                             Bereinigen aller Objekte die Teil einer Berechtigung sind lässt leeres Recht in der Konfiguration zurück
[Bug][Events]                                   Events: Liefern nicht eindeutig identifizierbare Änderungen
[Bug][CSV]                                      CSV-Import: LDAP-Group mapping führt zu fehlerhaften Import
[Bug][CSV]                                      CSV-Import wirft PHP Fatal Error
[Bug][Templates]                                Bei einer hohen Anzahl an Templates/Massenänderungsvorlagen werden nicht alle Templates/Massenänderungsvorlagen angezeigt
[Bug][Dashboard]                                Widget "Objektliste" zeigt ID statt Livestatus-Icon
[Bug][XML]                                      XML-Export speichert keine Informationen der Kategorie "Virtuelle Maschine"
[Bug][Import]                                   Summary-Logik führt zu diversen Fehlern
[Bug][Validierung]                              Validierung von Tags funktioniert nicht in der Listeneditierung
[Bug][Benutzereinstellungen]                    Umlaute im Benutzerlogin führen zu fehlerhaften logins
[Bug][Controller]                               Full index setzt PHP-Einstellung "memory_limit" auf 4 GByte Arbeitsspeicher
