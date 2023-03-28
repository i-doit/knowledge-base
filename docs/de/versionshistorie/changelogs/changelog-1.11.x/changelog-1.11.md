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
