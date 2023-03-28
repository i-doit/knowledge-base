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
[Bug][Report-Manager]                           Fehler beim  Ausführen eines report<br>
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
