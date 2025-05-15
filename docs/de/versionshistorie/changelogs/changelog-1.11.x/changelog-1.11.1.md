---
search:
  exclude: true
---
# Changelog 1.11.1
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Aufgabe][Admincenter]                   AdminCenter: Fatal Error bei dem Aufruf von Add-Ons ohne valide i-doit Login Session<br>
[Verbesserung][Report-Manager]           Anwendungen: Zugewiesener Lizenzschlüssel<br>
[Verbesserung][Report-Manager]           Report-Manager, Attribut Tags in der kategorie Allgemein hinzufügen<br>
[Verbesserung][Code]                     Erweiterung der bestehenden Objektsperre Logik für Objektunabhängige Sperrungen<br>
[Bug][Objekte]                           Objekt-Browser: Instanz / Oracle Datenbank "DBMS" auswähbare Objekttypen<br>
[Bug][Objekte]                           Beim Duplizieren von Objekten gehen im bestehenden Objekt Informationen aus der Kategorie "Instanz / Oracle Datenbank" verloren<br>
[Bug][Objekte]                           Objekt-Browser: Instanz / Oracle Datenbank "DBMS" Performanceprobleme<br>
[Bug][Objekte]                           Zugriffs-URL wird in Objektliste nicht als Link dargestellt<br>
[Bug][Objekte]                           Keine Vorselektierung nach Objekttyp im Objekt-Browser<br>
[Bug][Objekte]                           Falsches Objekt wird im Objektbrowser Inputfeld angezeigt<br>
[Bug][Objekte]                           Apostroph im Objekt-Titel führt zu Javascript-Fehler nach der Speicherung<br>
[Bug][Objekte]                           Passwörter werden nicht dupliziert<br>
[Bug][Objekte]                           Objekt-Browser: "Service » Service Komponenten" werden Änderungen ignoriert<br>
[Bug][Objekte]                           Kategorie "Schränke" berücksichtigt nur den Objekttypen Schrank<br>
[Bug][Objekte]                           Zuweisung des letzten Ports geht bei doppelten speichern in der Anschlusskategorie verloren<br>
[Bug][Benutzerdefinierte Kategorien]     Inkonsistentes Verhalten von Ja/Nein-Feldern<br>
[Bug][Report-Manager]                    Feature "Gruppierte Multivalue-Darstellung" im Report Manager per default auf "Nein"<br>
[Bug][Report-Manager]                    Attribut "Datenbankinstanz" (Kategorie: "Datenbankschema") nicht im Report Manager verfügbar<br>
[Bug][Report-Manager]                    Report-Manager: Bedingungen fehlen Vergleichsoperatoren<br>
[Bug][Report-Manager]                    Variabler-Report führt zu einer SQL-Fehlermeldung in einer Benutzerdefinierten Kategorie<br>
[Bug][Report-Manager]                    SLA Zeiten im Report Manager nicht verfügbar<br>
[Bug][Report-Manager]                    Zweiter vertikaler Scrollbalken in der Ergebnisliste von Reports bei Verwendung einer Beschreibung<br>
[Bug][Report-Manager]                    Fehlermeldung beim Ausführen eines Reports ohne Ergebnisse<br>
[Bug][Report-Manager]                    Report mit Daten aus den Kategorien Softwarezuweisung und Betriebssystem liefert falsche Ergebnisse<br>
[Bug][Report-Manager]                    Kosten mit einem Wert von 0,00 werden im Report als leeres Ergebnis angezeigt<br>
[Bug][Report-Manager]                    Report Manager: Attribut "Host im Cluster" wird nicht ausgelesen<br>
[Bug][Report-Manager]                    Klick auf variablen Report führt immer wieder zum referenzierenden Objekt<br>
[Bug][Report-Manager]                    Standort-Pfade aus Reports bei Ausgabe über API fehlerhaft<br>
[Bug][Report-Manager]                    Report liefert keine Ergebnisse bei gleichzeitiger Einbindung von Kontaktzuweisung und Servicezuweisung<br>
[Bug][Report-Manager]                    Falsche Sortierung nach ID im Report Manager<br>
[Bug][Report-Manager]                    Report-Manager: Feld "verwendetes Datenbankschema" der Kategorie "Datenbankzuweisung" verursacht SQL-Fehler<br>
[Bug][Report-Manager]                    Auswahl bestimmter Attribute im Report-Manager führt unter Umständen zu leeren Ergebnissen<br>
[Bug][Check_MK]                          Neue API Funktion zum auslesen von Hostmerkmalen<br>
[Bug][Check_MK]                          Check_MK: Limitierung fehlt bei Export von dynamischen Hostmerkmalen<br>
[Bug][Check_MK]                          Check_MK: Export dynamischer Hostmerkmale ohne manuellen speichern der Kategorie "Hostmerkmale"<br>
[Bug][Analyse]                           Fehlende Objekte beim Anzeigen der detaillierten Informationen von benutzerdefinierte Kategorien<br>
[Bug][Templates]                         Übersicht der zu verwendenden Platzhalter in Templates<br>
[Bug][Suche]                             Automatische Erneuerung des Suchindex sperrt Tabelle des Suchindex und verursacht hohe Wartezeiten<br>
[Bug][Suche]                             Performance Einbrüche bei Verwendung von Benutzerdefinierten-Kategorien beim Speichern/Duplizieren<br>
[Bug][Suche]                             Attribut "Firmware" aus Kategorie "Modell" kann nicht über die Suche gefunden werden<br>
[Bug][Suche]                             Attribut "Seriennummer" aus Kategorie "Modell" kann nicht über die Suche gefunden werden<br>
[Bug][Suche]                             Suchindex wird beim Speichern auf der Benutzeroberfläche nicht sauber aktualisiert<br>
[Bug][Suche]                             Informationen der Ergebnisliste der Suche werden untypisch abgekürzt<br>
[Bug][Suche]                             Einstellung der Sprache hat keine Auswirkung auf die Informationen in den Suchergebnissen<br>
[Bug][Suche]                             Über die Suche gefundene Inhalte der Kategorie "Hostadresse" werden generell als primär bezeichnet<br>
[Bug][Suche]                             Highlighting der gefundenen Suchtreffer highlightet nicht alle Treffer korrekt<br>
[Bug][Suche]                             Suchergebnis nich nachvollziehbar, wenn weniger als drei Zeichen verwendet werden<br>
[Bug][Suche]                             Formatierung wird in Vorschau der Suchergebnisse übernommen<br>
[Bug][Suche]                             Beim Indexieren von Dialog(+) Feldern wird im Log eine Fehlermeldung dargestellt<br>
[Bug][LDAP]                              LDAP Sync braucht vielfaches an Laufzeit<br>
[Bug][LDAP]                              LDAP-SYNC/Auth ist case-sensitive und erzeugt duplizierte Kontakte<br>
[Bug][Export]                            CSV Export aus benutzerdefinierten Kategorien bleibt leer<br>
[Bug][JEDI/Jdisc]                        Fehler bei der Verwendung des JDisc-Import Modus "Überschreiben"<br>
[Bug][JEDI/Jdisc]                        Neu scannen und aktualisieren aus JDISC führt keinen Import aus<br>
[Bug][JEDI/Jdisc]                        Falsche Zählung beim JDisc-Import von Objekten über die Console<br>
[Bug][Listen]                            Im Suchfilter innerhalb der Objektlisten wird die Bedingung "und" ignoriert<br>
[Bug][Listen]                            Sortieren des Attributs "Host in Cluster" führt zu Fehler<br>
[Bug][Listen]                            Falsche Sortierung durch Einstellung "Gruppierte Daten darstellen als"<br>
[Bug][Listen]                            Fehler beim Sortieren nach Attributen aus Kategorie "JDisc Custom Attributes"<br>
[Bug][Listen]                            Fehler bei Verwendung des Attributs "Versionsnummer" aus Kategorie "Betriebssystem" in Listenansicht<br>
[Bug][Listen]                            Feld "Zentrale" aus Kategorie Stammdaten von Organisationen führt in Listenansicht zu Fehler<br>
[Bug][Listen]                            Attribute der Kategorie "Clustermitgliedschaften" können nicht in Objektliste angezeigt werden<br>
[Bug][Listen]                            Filtern in Beziehungen zeigt trotzdem noch alle Einträge zum Paging<br>
[Bug][Listen]                            Attribute der Kategorie "Speicher" fehlen zur Darstellung in Objektlisten<br>
[Bug][Listen]                            Archivierte und gelöschte Datenbankzuweisungen werden in Objektlisten angezeigt<br>
[Bug][Listen]                            Drag 'n' Drop in einigen Browsern nicht möglich<br>
[Bug][Listen]                            Sortierung nach VLAN-ID inkorrekt<br>
[Bug][Listen]                            Listenansicht springt auf Seite 1 nachdem man aus Objekt springt<br>
[Bug][Listen]                            Listen: Lange Spaltentitel führen zu ungewollten Umbrüchen im Filter<br>
[Bug][Kategorien]                        Status-Dropdown in Kategorie "Netzwerk - Port" nicht verfügbar<br>
[Bug][Kategorien]                        Kategorie Zugriff: SSH-Verbindungen mit mehr als einer Ziffer in einem der Oktette und Benutzerzuweisung werden falsch ausgegeben<br>
[Bug][Kategorien]                        Subkategorie Anschlüsse zeigt bei Attribut Verbunden mit "General error: Object ID missing!", obwohl kein Objekt verbunden wurde<br>
[Bug][Kategorien]                        Attribut "Verbunden mit" zeigt trotz keiner Verbindung, dass eine Verbindung gelöst würde<br>
[Bug][Kategorien]                        Objekte in Kategorie "Beziehungen" können nicht angeklickt werden und geben keine Quickinfo<br>
[Bug][Kategorien]                        Sonderzeichen in nicht zugewiesenen Objekten eines Netzes führen dazu, dass die IP-Liste nicht geladen werden kann<br>
[Bug][Kategorien]                        Auswahl der Versionsnummer in Betriebssystemzuweisung fehlerhaft<br>
[Bug][Kategorien]                        Anlage eines Eintrags in der Passwort-Kategorie ohne Titel oder Benutzername nicht möglich<br>
[Bug][Kategorien]                        Feld "Host in Cluster" taucht nicht bei initialer Objekterstellung auf der Übersichtsseite auf<br>
[Bug][Kategorien]                        Datumsfelder können nicht geleert werden<br>
[Bug][Kategorien]                        Speicherung des Felds "Gleichgerichtete Beziehungen > Objekte" nicht möglich<br>
[Bug][Kategorien]                        Duplizieren von Objekten mit Kontaktzuweisung deren Name keine Leerzeichen enthält ergänzt ein Leerzeichen am Ende der Objektbezeichnung<br>
[Bug][Kategorien]                        Verkabelung von Objekten über Anschlussübersicht erzeugt ein neues Kabel statt das bereits gewählte zu verwenden<br>
[Bug][Kategorien]                        Nach dem archivieren/löschen eines Objektes wird in der Objektlisten-Ansicht der Anwendungen eine falsche Anzahl an Installationen ausgegeben<br>
[Bug][Kategorien]                        Archivierte Datenbankschemata werden trotzdem noch in Druckansicht angezeigt<br>
[Bug][Kategorien]                        Höheneinheiten von Schränken lassen sich nicht zurücksetzen<br>
[Bug][Kategorien]                        Zeilenumbrüche aus mehrzeiligen Textfeldern werden in Druckansicht entfernt<br>
[Bug][Kategorien]                        Hinzufügen eines Ports zu einem Layer-2-Netz setzt Tag-Informationen aller zugehörigen Ports zurück<br>
[Bug][Kategorien]                        Statistik der Schränke im Raum beachtet nicht die Werte des Schranks selbst<br>
[Bug][Dokumente]                         Im Property Selector steht die Kategorie "Organisation" => "Personen" nicht zur Verfügung<br>
[Bug][Dokumente]                         Dokumente können nicht mit fehlenden Attributszuweisungen erstellt werden<br>
[Bug][Console]                           Console: Angabe von falschen Credentials gibt keine Fehlermeldung aus<br>
[Bug][Console]                           Commands: Fehlgeschlagene Logins werden nicht kenntlich dargestellt<br>
[Bug][CSV]                               CSV-Import: Setzen der Laufzeit und Kündigungsfrist nicht möglich<br>
[Bug][CSV]                               CSV-Import: Zuweisung zeigt zum Teil Sprachkonstanten<br>
[Bug][CSV]                               CSV-Import erstellt Objekte mit leerer Bezeichnung<br>
[Bug][CSV]                               Leerwerte überschreiben aktuelle Werte nicht<br>
[Bug][CSV]                               Attribut Zugewiesene Lizenz nicht per CSV Import befüllbar<br>
[Bug][CSV]                               CSV-Import ignoriert Default-Template<br>
[Bug][CSV]                               Passwörter werden beim Setzen eines Attributs per CSV-Import aus der Login-Kategorie zurückgesetzt<br>
[Bug][API]                               API: Veränderung des verwendeten Kabels bei Ports ohne Angabe des Anschlusses nicht möglich<br>
[Bug][API]                               Veränderung des verbundenen Anschlusses über die API führt zu einem SQL-Error<br>
[Bug][API]                               Veränderung der Objektbild-Kategorie über die API nicht möglich<br>
[Bug][API]                               Attribut "Auf Gerät" (Kategorie "Laufwerk") kann nicht per API definiert werden<br>
[Bug][API]                               Datei-Kategorie kann nicht über die API angepasst werden.<br>
[Bug][API]                               Erstellen und Aktualisieren von Kabeln in Kategorie "Anschlüsse" über die API funktioniert nicht<br>
[Bug][Systemeinstellungen]               Bebarbeitung der Listenansicht für benutzerdefinierte Kategorien nicht möglich<br>
[Bug][Systemeinstellungen]               Hyperlinks in Willkommensnachricht für Login fehlerhaft<br>
[Bug][Systemeinstellungen]               Experteneinstellungen stellen interne Einstellungen trotz Blackliste dar<br>
[Bug][Update]                            Falsche Versionsnummer von MySQL/MariaDB in Update GUI<br>
[Bug][Update]                            Smarty Memcache überprüfung sorgt für absturz<br>
[Bug][Code]                              Popups werden in falscher Größe an falscher Position dargestellt<br>
[Bug][Code]                              Fehlermeldung erscheint, "Default Theme Smarty Cache" wäre nicht schreibbar<br>
[Bug][Code]                              Falsche Prüfung auf freien Speicher bei unlimitiertem (-1) Memory-Limit in der php.ini<br>
[Bug][Code]                              Duplizieren: Kategorie Status-Planung ist doppelt<br>
[Bug][Validierung]                       Globale Kategorie Betriebssystem fehlt in Kategorievalidierung<br>
[Bug][Validierung]                       Kategorie-Validierung auf Kategorie "Allgemein" greift nicht beim Anlegen via Templates<br>
[Bug][Druckansicht]                      Lizenzinformationen in Druckansicht nicht korrekt<br>
[Bug][CMDB-Explorer]                     CMDB Explorer: Export von SVG funktioniert mit Internet Explorer nicht<br>
[Bug][OCS]                               OCS-Import verursacht leere Datenbankeinträge<br>
[Bug][Listeneditierung]                  Listeneditierung speichert Kategorie "Zugewiesener Arbeitsplatz" nicht, wenn bereits Datensätze bestehen<br>
[Bug][Listeneditierung]                  Rechtschreibfehler in der Listeneditierung<br>
[Bug][Listeneditierung]                  Gruppenmitgliedschaften können nicht über die Listeneditierung bearbeitet werden<br>
[Bug][Listeneditierung]                  Kategorie "logische Geräte" nicht in Listeneditierung verfügbar<br>
[Bug][Listeneditierung]                  Listeneditierung: Filtern in Benutzerdefinierten single-value Kategorien führt zu einem SQL-Fehler<br>
[Bug][CMDB]                              Verwendung von Zeilenumbrüchen in CSV-Dateien und GUI nicht möglich<br>
[Bug][Rechtesystem]                      Rechte werden nicht additiv vergeben<br>
[Bug][Rechtesystem]                      Rechte greifen nicht vollständig auf der Übersichtsseite eines Objektes<br>
[Bug][Objekttypkonfiguration]            Attribut "Modell" wird nicht aus Default Template übernommen<br>
[Bug][Logbuch]                           Logbuch: In Kategorie "Buchhaltung" wird das Attribut "Garantiezeitraum" falsch ausgegeben<br>
[Bug][Lizenzverwaltung]                  Lizenzverwaltung: Löschen einer vorhandenen Lizenz nicht möglich<br>
[Bug][Beziehungen]                       Beziehungen von Clustern zu Clusterdiensten nicht korrekt im Zustand archiviert/gelöscht<br>
[Bug][Benachrichtigungen]                Benachrichtigungen: Falsche URL in Benachrichtigungen via console<br>
[Bug][Benachrichtigungen]                Auswahl von Templates in Benachrichtigungen nicht möglich<br>
[Bug][Systemtools]                       mod_rewrite Check in der Systemübersicht bei https nicht korrekt<br>
[Änderung][Code]                         Standard Accounts archiviert<br>
