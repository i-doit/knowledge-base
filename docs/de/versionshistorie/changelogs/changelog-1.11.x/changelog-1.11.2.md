# Changelog 1.11.2

[Verbesserung][Code]                            Verhalten des Mandanten-Switcher ändern  
[Verbesserung][Code]                            Unterstützen der PHP-Extension "memcached", ergänzend zu "memcache"  
[Verbesserung][Benutzerdefinierte Kategorien]   Benutzerdefinierte rückwärtige Kategorie/Report darf innerhalb der Kategorie nicht überschrieben werden  
[Verbesserung][Dashboard]                       Darstellung der Restlaufzeit im Lizenz-Widget ist verwirrend  
[Bug][Kategorien]                               Button "Hinzufügen" in Kategorie "Zugwiesene Objekte" (Unterkategorie von "Dateien")  
[Bug][Kategorien]                               Sortierung in Objekt-Browsern uneindeutig  
[Bug][Kategorien]                               Kategorie Gruppenmitgliedschaft hinzufügen zu Gruppe defekt  
[Bug][Kategorien]                               Kategorie Buchhaltung, Feld eingekauft bei: Verbindung lässt sich nicht lösen  
[Bug][Kategorien]                               Kategorie Datei / zugewiesene Objekte zeigt fehlerhafte Einträge  
[Bug][Kategorien]                               Vorschlagsfunktion für Objekt-Browser mit Unterauswahl führt dazu, dass der Eintrag nicht gespeichert wird  
[Bug][Kategorien]                               Mehrfache Zuweisung desselben Objekts in Zuweisungskategorien führt dazu, dass bei der Durchführung einer weiteren Zuweisung die bisherigen Verknüpfungen entfernt werden  
[Bug][Kategorien]                               Wiederverwendete Kabel sollen ursprüngliche Bezeichnung beibehalten  
[Bug][Kategorien]                               Zustandsauswahl in Kategorie "Zugewiesene Objekte" unter "Personen" nicht vorhanden  
[Bug][Kategorien]                               Falsche Datenbereinigung in der Subkategorie "Vertragsinformationen" im Attribut "Kosten"  
[Bug][Kategorien]                               Kategorie "Zugriff" mehrfaches Speichern führt zu einem duplizierten Datensatz  
[Bug][Kategorien]                               Filter in Kategorie-Listen-Konfiguration findet Objekte  
[Bug][Kategorien]                               Kategorie "Personengruppe" Subkategorie "zugewiesene Objekte" fehlt der Edit-Button in der Listenansicht  
[Bug][Kategorien]                               Kategorie "Personengruppe" Subkategorie "Mitglieder" fehlt die Möglichkeit diese Ansicht zu editieren  
[Bug][Kategorien]                               Falsche Berechnungen in Kategorie "Objektvitalität"  
[Bug][Kategorien]                               Statusauswahl in Kategorie "Räumlich zugewiesene Objekte" nicht verfügbar  
[Bug][Kategorien]                               Sortierung von Chassis Slots in zugehöriger Kategorie fehlerhaft  
[Bug][Dashboard]                                Mehr Informationen im Kalender Widget  
[Bug][Dashboard]                                Farbliches Hervorheben von Einträgen im Kalender-Widget  
[Bug][Dashboard]                                Gruppierung einer Report-Ergebnisliste geht im Widget verloren, sobald die Liste sortiert wird  
[Bug][Massenänderung]                           Massenänderung: Wird eine Vorlage erstellt, sind zuviele Kategorien als geändert angezeigt  
[Bug][Listen]                                   Filter löschen Symbol in Objektlisten wird nicht angezeigt  
[Bug][Listen]                                   Sortierung in der Subkategorie "Lizenzschlüssel" der Kategorie "Lizenzzuweisung" fehlerhaft  
[Bug][Listen]                                   Archivierte Servicezuweisung wird in Objektlisten angezeigt  
[Bug][Listen]                                   Port > Hostadresse in Listenansicht sorgt für Fehler  
[Bug][Listen]                                   Listenansicht zeigt falsche Restgarantie  
[Bug][Listen]                                   Standort-Browser: Sortierung in der Standortauswahl fehlerhaft  
[Bug][Listen]                                   Archivierte/Gelöschte Services werden in Objektlisten angezeigt  
[Bug][Listen]                                   Filtern über Attribute aus benutzerdefinierten Kategorien in Objekt-Listen nicht möglich  
[Bug][Listen]                                   QuickInfo-Links funktionieren nicht in Kategorie-Listen  
[Bug][Listen]                                   Zugewiesene Verträge werden in Objektliste nicht angezeigt, wenn kein Vertragsbeginn und -ende hinterlegt sind  
[Bug][Listen]                                   Vorschläge des Filters in Objekt-Listen stimmen teilweise nicht überein  
[Bug][Listen]                                   Sortierung von IP Adressen in Objektlisten erfolgt alphabetisch  
[Bug][Listen]                                   Blättern/Filtern in der Kategorie-Liste nicht möglich  
[Bug][Listen]                                   Ping über nmap liefert falsche Ergebnisse und führt zu "Service unavailable"-Fehlermeldung im Browser  
[Bug][Listen]                                   Attribut "Beschreibung" aus Kategorie "Betriebssystem" in einigen Funktionen nicht verfügbar  
[Bug][Listen]                                   Leere Datensätze in Liste nach Auswahl von Zuweisungskategorien  
[Bug][Listen]                                   Zugewiesener Vertrag wird nicht in Objekt-Liste angezeigt  
[Bug][Listen]                                   Sortieren nach "Gruppen-Typ" und "Diese Konfiguration" exportieren" nicht möglich  
[Bug][Listen]                                   Standortpfad wird linksbündig in verschiedenen Bereichen dargestellt  
[Bug][Listen]                                   Sortierung des Datum in der Objektansicht ist falsch  
[Bug][CSV]                                      CSV-Import: Objekttyp "Organisation" wird ohne Titel importiert  
[Bug][CSV]                                      Beim importieren von Personen über den CSV-Import erstellt gelegentlich nicht gesetzte Beziehungen vom Typ "Organisation"  
[Bug][CSV]                                      Zuweisung des Attributs "Adressvergabe IPv4" wird im CSV-Datenimport ignoriert  
[Bug][CSV]                                      CSV-Import: Attribute "Versionsnummer/Patchlevel" fehlen in der Zuweisung  
[Bug][CSV]                                      CSV Export von Multi Value Kategorien wird ohne Trennzeichen ausgegeben  
[Bug][CSV]                                      Identifikation von Objekten mit Komma im Titel beim CSV-Import nicht möglich  
[Bug][LDAP]                                     LDAP-Sync: Konfigurationsdatei wird ignoriert  
[Bug][LDAP]                                     Ist ein LDAP Server nicht erreichbar so läuft der Verbindungsversuch endlos, sowohl beim Login mit LDAP als auch beim LDAP sync  
[Bug][Suche]                                    In den Beschreibungsfeldern hinterlegte Werte werden nicht durch die Suche gefunden  
[Bug][Suche]                                    LDAP-Sync schlechte Performance durch Benutzerdefinierte-Kategorien  
[Bug][Suche]                                    Attribut "Service Tag" aus Kategorie "Modell" kann nicht gefunden werden  
[Bug][Suche]                                    Such-Index "Benutzerdefinierte Kategorien" werden nicht vollständig indiziert  
[Bug][Suche]                                    Ergebnisliste der Suche zeigt statt Namen von benutzerdefinierten Kategorien nur deren ID  
[Bug][Suche]                                    MAC-Adresse wird nicht Indexiert  
[Bug][Suche]                                    Suche findet auch archivierte/gelöschte Objekte, obwohl dies laut Einstellung deaktiviert ist  
[Bug][Suche]                                    HTML-Tags in Suchergebnissen  
[Bug][Suche]                                    Kategorie "Modell" wird nicht vollständig in der Suche indexiert  
[Bug][Suche]                                    Statusinformationen zur Generierung des Suchindex inkorrekt  
[Bug][Suche]                                    Auswahl der Ansicht verschwindet beim Verwenden der Suche  
[Bug][Suche]                                    Controller: PHP Warning bei dem handler "search_index"  
[Bug][CMDB]                                     Objekt Browser zeigt bei logischer Standort nicht alle Objekttypen mit der Kategorie "zugewiesene Endgeräte an"  
[Bug][Report-Manager]                           Duplizieren eines Reports wird das Attribut " Gruppierte Multivalue-Darstellung" immer auf "Ja" gesetzt  
[Bug][Report-Manager]                           Report-Manager: Attribut "Primäre Hostadresse" führt via Zuweisungskategorie zu einem SQL-Fehler  
[Bug][Report-Manager]                           Report-Manager: Kategorie "Kontaktzuweisung" Attribut "Rolle" führt bei expliziter Auswahl zu einem Fehler  
[Bug][Report-Manager]                           Sonderzeichen in Beschreibungsfeldern führen dazu, dass diese Felder beim Exportieren eines Reports leer sind  
[Bug][Report-Manager]                           Report-Manager: Feld "Dialog+ Mehrfachauswahl" führt in den Bedingungen zu SQL-Fehlern  
[Bug][Report-Manager]                           Report-Manager: Bedingungen werden nicht nachgeladen  
[Bug][Report-Manager]                           Report-Manger: Kategorie "Übergeordnetes Objekt" diverse Attribute aus der Kategorie "Stammdaten" führen zu Fehlern  
[Bug][Report-Manager]                           Report-Manager: Fehlerhafte Sortierung von "Hostadressen"  
[Bug][Report-Manager]                           Report-Manager: Option "Gruppierte Multivalue-Darstellung" wird als Ja gespeichert  
[Bug][Report-Manager]                           PHP 7.1 kürzt SQL hinter Reports ab einer bestimmten Länge einzelner Bedingungen  
[Bug][Report-Manager]                           Fehlendes Attribut "Layer-2-Netz Zuordnung" aus Kategorie "Netz" im Report Manager  
[Bug][Report-Manager]                           Fehler beim Bearbeiten eines bestehenden Reports  
[Bug][Report-Manager]                           Fehler beim  Ausführen eines report  
[Bug][Report-Manager]                           Report Manager: Längen- und Breitengrad nicht als Bedingung auswählbar  
[Bug][Report-Manager]                           Sortierung nach "Hostadresse" funktioniert nicht  
[Bug][Nagios]                                   Nagios inkompatibilität mit Maintenance Add-On  
[Bug][Listeneditierung]                         Listeneditierung: In der Kategorie "Passwörter" kann der Inhalt des Attributs "Passwort" verloren gehen  
[Bug][Listeneditierung]                         Schlechte Performance des Objekt-Browser in der Listeneditierung  
[Bug][Listeneditierung]                         Attribut "Adressvergabe" der Kategorie "Hostadresse" ist in Listeneditierung nicht verfügbar  
[Bug][Anschlusstyp Verkabelung]                 Erkennungsroutine für freie Kabel fehlerhaft  
[Bug][QR-Codes]                                 /src/tools/php/barcode.php wirft Notice  
[Bug][QR-Codes]                                 /src/tools/php/qr/qr_img.php wirft Fatal Error  
[Bug][Check_MK]                                 Check-MK: Export via GUI/Script führt zu ungewünschten Berechitgungen auf dem Dateisystem  
[Bug][Check_MK]                                 Check-MK: Kategorie "Cluster" führt bei einem Export zu fehlenden Objekten  
[Bug][Objekttypkonfiguration]                   Kategorie "Allgemein" kann ohne Auswirkungen in Konfiguration der Übersichtsseite verschoben werden  
[Bug][Objekte]                                  Objekt-Browser: Skalierung von Icons fehlt  
[Bug][Objekte]                                  Duplizieren von Objekten mit Kontaktzuweisungen führt zu Fehlerhaften Titeln  
[Bug][Objekte]                                  MAC-Adresse wird immer klein geschrieben  
[Bug][Objekte]                                  Kategorie "Gruppenmitgliedschaft" keine Zuweisung zu einer Objektgruppe möglich  
[Bug][Objekte]                                  Tags werden nicht dupliziert  
[Bug][Controller]                               Controller: Export eines Reports resultiert mit verbose in einem PHP-Error  
[Bug][Validierung]                              Beschreibungsfelder werden nicht als Pflichtfelder markiert  
[Bug][Validierung]                              Duplizieren eines Objekts übergeht Validierung  
[Bug][Schnittstellenverwaltung]                 TTS: Diverse Attribute zu verknüpften Tickets fehlen bei verwendung von RT  
[Bug][Active Directory]                         Fehlermeldung Anmeldung mit konfigurierten SSO  
[Bug][Installation]                             PHP-Warning bei der Installation und Nutzung  
[Bug][Benutzereinstellungen]                    Standard-Sortierung in Kategorie-Listen kann nicht gelöscht werden  
[Bug][Request Tracker]                          RT: URL bei "Im Ticketsystem öffnen" falsch  
[Bug][Druckansicht]                             Druckvorschau für benutzerdefinierte Kategorie mit variablem Report bleibt leer  
[Bug][Update]                                   Überprüfung nach leerem Crypt-Key  
[Bug][Update]                                   Falsche Response beim Update, wenn Dateien aufgrund fehlender Berechtigungen nicht kopiert werden können  
[Bug][Beziehungen]                              Beziehungen von Clustern zu Clusterdiensten nicht korrekt im Zustand archiviert/gelöscht  
[Bug][Beziehungen]                              Beziehungsobjekt wird nicht archiviert, wenn die involvierten Objekte in den Kategorien archiviert werden  
[Bug][Benutzerdefinierte Kategorien]            Listensortierung von benutzerdefinierten Kategorien inkorrekt  
