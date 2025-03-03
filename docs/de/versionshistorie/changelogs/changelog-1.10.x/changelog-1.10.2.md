---
search:
  exclude: true
---
# Changelog 1.10.2
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Verbesserung][Systemtools]              Objekte Zähler in Systemübersicht für aktuellen Mandanten<br>
[Verbesserung][Report-Manager]           Erweiterung der Attribute CPU-Kerne und -Sockets im Report Manager<br>
[Verbesserung][API]                      API: Livestatus-Instanzen auslesen, erstellen, aktualisieren und löschen<br>
[Verbesserung][API]                      Statische Host Tags via API erstellen, auslesen, aktualisieren und löschen<br>
[Bug][Benutzerdefinierte Kategorien]     Konstanten benutzerdefinierter Kategorien erhalten festen Prefix<br>
[Bug][Benutzerdefinierte Kategorien]     Unterschiedliche Darstellung eines HTML-Editor Felds im View- und Edit Mode<br>
[Bug][Benutzerdefinierte Kategorien]     Werte von Benutzerdefinierten Dialog+ Feldern können im Dialog-Admin nur einmal gespeichert werden<br>
[Bug][Benutzerdefinierte Kategorien]     Falsche Bereinigung von HTML-Feldern in benutzerdefinierten Kategorien<br>
[Bug][Benutzerdefinierte Kategorien]     Beim duplizieren von Objekten wurden in Benutzerdefinierten Kategorien alle leeren Dialog+ Felder mit einem Wert gesetzt<br>
[Bug][Kategorien]                        Die "Alle Tickets" Kategorie hat nun einen intuitiven Link zum referenzierten Ticket<br>
[Bug][Kategorien]                        Rack Statistiken zeigen nicht alle verfügbaren Berechnungen<br>
[Bug][Kategorien]                        Inhalte aus Kategorieerweiterungen für Personen werden gelöscht, wenn die Kategorie "Stammdaten" bearbeitet wird<br>
[Bug][Kategorien]                        Löschen von Standortzuweisungen beim Bearbeiten der Kategorie ohne ausreichende Rechte<br>
[Bug][Kategorien]                        Keine Verknüpfung der Datenbankinstanz im Datenbankschema<br>
[Bug][Kategorien]                        (Source) IP-Adresse Zuweisung fehlerhaft<br>
[Bug][Kategorien]                        Unerwünschte Default-Werte<br>
[Bug][Kategorien]                        Fehlerhafte RAID-Informationen beim Duplizieren<br>
[Bug][Kategorien]                        Kategorie Kryptokarte bleibt grau trotz befüllten Attributen<br>
[Bug][Kategorien]                        Verbindung einer VM zu einem Cluster ohne Hostauswahl nicht möglich<br>
[Bug][Kategorien]                        Überprüfung der Eingabe im deutschen oder englischen Zahlenformat bei Eingabe von Ampere, Volt oder Watt<br>
[Bug][Kategorien]                        Ampere-Anzeige mit sehr vielen Nachkommastellen<br>
[Bug][Kategorien]                        Kabellänge wird beim Duplizieren nicht berücksichtigt<br>
[Bug][Kategorien]                        Reaktionszeit kann keine halben Stunden speichern<br>
[Bug][Kategorien]                        Anschlussart wird beim Duplizieren nicht übernommen<br>
[Bug][Kategorien]                        Lösen einer Datenbankinstanz unter bestimmten Bedingungen nicht möglich<br>
[Bug][CMDB]                              Bei einer Datenbank Instanz werden auch archivierte und gelöschte Datenbank Schema angezeigt<br>
[Bug][CMDB]                              Eintragen einer Null im Dialog-Admin nicht möglich<br>
[Bug][CMDB]                              Fehlende Übersetzung von "Mandant" bei Mandantenauswahl<br>
[Bug][CMDB]                              Login in idoit-Ansicht nach zu frühem Timeout fehlerhaft<br>
[Bug][Listen]                            Sortieren nach Kategorie und Einsatzzweck in Listen nicht möglich<br>
[Bug][Listen]                            Keine Anzeige der Datenbankinstanz in der Liste der Datenbankschemata<br>
[Bug][Listen]                            Keine Anzeige des Datenbankschema in der Liste der Datenbankinstanzen<br>
[Bug][Listen]                            Sortierung nach tags in Objektlisten nicht möglich<br>
[Bug][Listen]                            Objektlisten speichern nicht den Standardfilter<br>
[Bug][Listen]                            Zuordnen von Attribut "Zugeordnete Geräte (Speichernetze > Logische Geräte (LDEV Server))" in Liste nicht möglich<br>
[Bug][Listen]                            Filtern auf das Attribut "Tags" nicht möglich<br>
[Bug][Listen]                            Fehlerhafte Sortierung der Kosten in der Listenansicht von Verträgen<br>
[Bug][Listen]                            Zugewiesene IP-Adressen werden falsch sortiert<br>
[Bug][OCS]                               Import von CPU-Kernen aus OCS Inventory<br>
[Bug][OCS]                               OCS-Import liefert Titel in geschweiften Klammern statt gesetzten Namen<br>
[Bug][OCS]                               OCS: IP-Adresse/Netz wird durch einen Import nicht aktualisiert<br>
[Bug][API]                               API: API erzeugt unverbundenes Kabel beim Erstellen eines physikalischen Netzwerk-Ports<br>
[Bug][API]                               API: Header nicht RFC 2616 konform<br>
[Bug][API]                               Fehlende Logbucheinträge bei der Erzeugung von Inhalten über die API<br>
[Bug][API]                               API liefert falsche Session-ID trotz erfoglreichem Login<br>
[Bug][API]                               API: Eintragen einer IP-Adresse via API bei Kategorievalidierung "Hostadresse" führt zu Fehlermeldung<br>
[Bug][API]                               API: cmdb.category.create erstellt keinen Eintrag in einem benutzerdefinierten Mehrfach-Dialog-Feld<br>
[Bug][API]                               API: Batch request mit cmdb.category.create oder .update wirft SQL-Fehler für Modell-Kategorie<br>
[Bug][QR-Codes]                          QR-Code: Schrift ist immer zentriert<br>
[Bug][Templates]                         Standardtemplate wird nicht angewendet wenn Übersichtsseite aktiv ist<br>
[Bug][Templates]                         Vordefinierte Templates können bereinigt werden, tauchen aber wieder auf<br>
[Bug][Templates]                         Default Template wird bei der Objekterstellung nicht verwendet<br>
[Bug][Benachrichtigungen]                Benachrichtigungen beachten auch archivierte und gelöschte Kontakte<br>
[Bug][Benachrichtigungen]                Rechtschreibfehler in der Konfiguration von Benachrichtigungen für unveränderte Objekte<br>
[Bug][Benachrichtigungen]                Benachrichtigungen für Lizenzablauf wird nur auf dem ersten Lizenzschlüssel angewandt<br>
[Bug][Beziehungen]                       Software: Anzahl der Installationen berücksichtigt nicht den Zustand<br>
[Bug][Beziehungen]                       Archivierte Beziehung "verknüpfte Karten" bleiben in der SIM-Karte bestehen<br>
[Bug][Logbuch]                           Logbuch: Änderungen in der Kategorie "Vertragszuweisung" am Attribut Leistungsschein werden nicht geschrieben<br>
[Bug][Logbuch]                           Werden auf der Übersichtsseite Einträge in der Kategorie Allgemein verändert, werden im Logbuch Änderungen zur Kategorie Standort erfasst<br>
[Bug][Logbuch]                           Beim Editieren der Kategorie Allgemein werden keine Logbucheinträge geschrieben<br>
[Bug][Logbuch]                           Falsche Informationen im Logbuch bei Kategorien mit Default-Werten<br>
[Bug][Logbuch]                           Falsche Logbuch-Information zu Standorten<br>
[Bug][CMDB-Explorer]                     Keine schlüssige Sortierung im CMDB Explorer<br>
[Bug][CMDB-Explorer]                     CMDB-Explorer - Fehlende Attribute bei benutzerdefinierten Profilen<br>
[Bug][Report-Manager]                    Report-Manager: Kategorie "Passwort" fehlt<br>
[Bug][Report-Manager]                    "Zustand" und "Status" werden inkonsistent verwendet<br>
[Bug][Report-Manager]                    Attribut "Standardgateway für das Netz" kann nicht im Report-Manager verwendet werden<br>
[Bug][Report-Manager]                    DB-Fehlermeldung beim Ausführen eines Reports mit mehr als einer Kondition<br>
[Bug][Report-Manager]                    Option zum Ausblenden von Objekten mit leeren Verknüpfungen im Report funktioniert nicht bei Benutzerdefinierten Kategorien<br>
[Bug][Report-Manager]                    Kategorie "Virtuelle Geräte" steht nicht im Report Manager zur Verfügung<br>
[Bug][Report-Manager]                    Report Manager: Purge-Button wird angezeigt, trotz fehlender Rechte<br>
[Bug][Objekte]                           Druckansicht gibt Passwörter der Kategorie "Passwort" verschlüsselt aus<br>
[Bug][Objekte]                           Löschen von Systembenutzern möglich<br>
[Bug][Objekte]                           Objekttyp wird im Objekt Browser der Kategorie Servicezuweisung nicht angezeigt<br>
[Bug][Objekte]                           Mouseover in Listenansicht verschwindet aus dem sichtbaren Bereich<br>
[Bug][Objekte]                           Archivieren innerhalb eines Objektes nicht möglich<br>
[Bug][JEDI/Jdisc]                        Manuell gepflegte Standorte werden beim JDisc-Import der sysLocation überschrieben/geleert<br>
[Bug][JEDI/Jdisc]                        Fehlerhafter Import der Chassis-Ansicht über JDisc<br>
[Bug][JEDI/Jdisc]                        Import Filter JDISC für Hostadressen<br>
[Bug][Dokumente]                         Falsche Formatierung von Datum in Dokumente Add-on<br>
[Bug][Listeneditierung]                  Eingabe von Geldbeträgen nur mit Punkt anstatt Komma möglich<br>
[Bug][Listeneditierung]                  Listeneditierung: Löschen von E-Mailadressen führt zu Fehleinträgen<br>
[Bug][Listeneditierung]                  Multi-Value-Kategorien können nicht über die Listeneditierung bearbeitet werden<br>
[Bug][Listeneditierung]                  Listeneditierung: Es werden Attribute validiert, die gar nicht dargestellt werden<br>
[Bug][Listeneditierung]                  Beschreibungsfelder werden in der Listeneditierung validiert<br>
[Bug][Listeneditierung]                  Inkonsistentes Verhalten bei DialogPlus-Feldern in der Listeneditierung<br>
[Bug][CSV]                               Attribut "Patchlevel" wird nicht über den CSV-Import befüllt<br>
[Bug][CSV]                               Sonderzuweisung nach Raumnummer funktioniert beim CSV Import nicht<br>
[Bug][CSV]                               CSV-Import: Raumnummer wird nicht erkannt/gefunden<br>
[Bug][CSV]                               Import des CMDB-Status beim CSV-Import über die Konsole nicht möglich<br>
[Bug][Check_MK]                          Check_MK Transferskript schlägt fehlt weil keine idoit_hosttags.mk Datei erstellt wird<br>
[Bug][Check_MK]                          Dynamische Check_MK Hostmerkmale lassen sich nicht löschen<br>
[Bug][Monitoring]                        FQDN im Monitoring nicht korrekt<br>
[Bug][CMDB Einstellungen]                Mehrfachauswahl in der Liste der Objekttyp-Konfiguration ohne Funktion<br>
[Bug][CMDB Einstellungen]                Fehlerhafte Auswahl in der Objekttyp-Konfiguration bei der Auswahl mehrerer Checkboxen<br>
[Bug][CMDB Einstellungen]                Fehlende Aufforderung zur Eingabe eines Änderungskommentars trotz aktiviertem Zustand<br>
[Bug][Update]                            Falsche Übersetzung von "Mandant" während des i-doit Updates<br>
[Bug][Admincenter]                       Error Tracker bremst das System massiv<br>
[Bug][LDAP]                              Console: User,Password bei Report über CLI Console werden nicht übergeben<br>
[Bug][LDAP]                              Open-LDAP-Sync: UID/Loginname wird nicht akzeptiert<br>
[Bug][Console]                           Console: Ausgabe archivierter Benutzer im ldap-sync fehlerhaft<br>
[Bug][Systemeinstellungen]               Systemeinstellung "Anzeigelimit von Hostadressen" hat keine Wirkung auf Listen<br>
[Bug][Systemeinstellungen]               SSO: Deep links führen immer zum Dashboard<br>
[Bug][Import]                            Fehlermeldung, dass der i-doit controller "deprecated" ist beim Import von XML-Dateien oder Inhalten aus OCS<br>
[Bug][Systemtools]                       Online Repositories über HTTPS<br>
[Bug][Validierung]                       Automatisch erzeugte Inventarnummer umgeht Validierung dieses Attributs<br>
[Bug][Suche]                             Nutzen verschiedener Suchmodi im Ergebnisfenster bei bestimmten Zeichen in der Liste nicht möglich<br>
[Änderung][CMDB]                         Anschlüsse im Quickinfo vereinheitlichen<br>
