---
search:
  exclude: true
---
# Changelog 1.12
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Aufgabe][Export]                            Caching in "isys_export_helper" ein/ausschaltbar machen<br>
[Verbesserung][Check_MK]                     Check_MK Add-onisieren<br>
[Verbesserung][Update]                       Warnmeldung bei Update unter PHP 5.6 oder 7.0<br>
[Verbesserung][JEDI/Jdisc]                   JDisc: Optionaler Scann von Geräten via "IP/FQDN"<br>
[Verbesserung][Webserver-Konfiguration]      Veraltete URL-Rewrite-Regeln entfernen<br>
[Verbesserung][Webserver-Konfiguration]      Einstellungen bezogen auf Apache-Version 2.2 aus .htaccess-Dateien entfernen<br>
[Verbesserung][Webserver-Konfiguration]      PHP-Einstellungen aus .htaccess-Datei entfernen<br>
[Verbesserung][Webserver-Konfiguration]      Einstellung "FollowSymlinks" aus .htaccess-Datei entfernen<br>
[Verbesserung][Webserver-Konfiguration]      Zusammenfassen aller .htaccess-Dateien zu einer Datei<br>
[Verbesserung][Benutzerdefinierte Kategorien]Attribute sollen per Option "ApiOnly" über die GUI nicht veränderbar sein<br>
[Verbesserung][Benutzerdefinierte Kategorien]Neuer Feld-Typ für die benutzerdefinierten Kategorien<br>
[Verbesserung][LDAP]                         LDAP: Login-Sync optional mittels Sync-Benutzer statt i-doit Benutzer<br>
[Verbesserung][API]                          Einbettung von "?load=api_properties" in die i-doit Konfiguration<br>
[Verbesserung][Suche]                        Erneuerung des Suchindex über die Oberfläche<br>
[Verbesserung][Console]                      Command zur Befüllung von dynamischen Gruppen<br>
[Verbesserung][Code]                         PHP 7.2 Kompatibilität<br>
[Verbesserung][Listeneditierung]             Listeneditierung - Kategorie "Betriebssystem": Auswahl der Variante nicht möglich<br>
[Verbesserung][CMDB]                         Kategorie Hostadresse: Objektbrowser soll nur IPv4 oder IPv6 Netze anzeigen<br>
[Verbesserung][Nagios]                       Nagios Add-onisieren<br>
[Bug][Listeneditierung]                      In der Listeneditierung ist in der Kategorie Hostadresse das Feld Adresservegabe nicht verfügbar<br>
[Bug][Listeneditierung]                      Listeneditierung: Die Kategorie Dateizuweisung verfügbar machen<br>
[Bug][Listeneditierung]                      Werte für Kategorien sollen für alle Objekte übernommen werden, die über Daten in der Kategorie verfügen<br>
[Bug][Listeneditierung]                      Listeneditierung nicht mehr verfügbar<br>
[Bug][Listeneditierung]                      Listeneditierung wird beim Klick auf Objekttyp-Konfiguration zurückgesetzt<br>
[Bug][Listeneditierung]                      Die Standortvorschläge unter Listeneditierung sind hinter anderem Element versteckt<br>
[Bug][Listeneditierung]                      Darstellung der Icons in Listeneditierung korrigieren<br>
[Bug][Listeneditierung]                      Bei der Listeneditierung MUSS man eine Auswahl bei Ja/Nein Feldern treffen<br>
[Bug][Listeneditierung]                      Attribut Adressvergabe (Kategorie Hostadresse) nicht in Listeneditierung verfügbar<br>
[Bug][Listeneditierung]                      Attribut "Versionsnummer (Patchlevel)" fehlt in Listeneditierung der Kategorie "Softwarezuweisung"<br>
[Bug][Listeneditierung]                      Listeneditierung: Kategorie "Lokaler Massenspeicher" und Subkategorien fehlen<br>
[Bug][Listeneditierung]                      Listeneditierung der Kategorie "SLA" funktioniert nicht<br>
[Bug][Check_MK]                              Trennung von Check_MK und Check_MK 2.0 Inhalten<br>
[Bug][Listen]                                Attribute der Kategorie "Speicher" können nicht in die Listenansicht aufgenommen werden<br>
[Bug][Listen]                                Eindeutiges Verhalten für Filtervorschläge in Objektlisten implementieren<br>
[Bug][Listen]                                Multi-Value-Kategorien nehmen auf der Übersichtsseite generell viel Platz ein, selbst, wenn nur ein Eintrag existiert<br>
[Bug][Listen]                                Editieren Button fehlt in den Templates von Massenänderungen<br>
[Bug][JEDI/Jdisc]                            Probleme, den JDisc Webservice zu verwenden<br>
[Bug][JEDI/Jdisc]                            JDISC: Filtern nach logischen Ports fehlerhaft<br>
[Bug][JEDI/Jdisc]                            JDisc: Fehlerhafte Cluster Zuweisung bei Gastsystemen<br>
[Bug][JEDI/Jdisc]                            JDisc-Import: Betriebssystem-Lizenzen werden bei einem Import nicht zugewiesen<br>
[Bug][Workflows]                             Nach Installation des Workflow Add-Ons unter i-doit 1.12 erscheint bei Zugriff auf's Add-On nur eine leere Seite<br>
[Bug][Objekte]                               Bei der Erstellung von neuen Clients wird ein Speichermodul erstellt sofern auf der Übersichtsseite die Kategorie Speicher aufgeführt wird<br>
[Bug][Objekte]                               Subkategorie "gastsysteme" der Kategorie "Virtueller Host" führt eine gemischte Zuweisung zu inkonsistente Ansicht<br>
[Bug][CMDB Einstellungen]                    Allgemeine-Einstellungen: Standardwert "Änderungskommentar"<br>
[Bug][CMDB Einstellungen]                    Sortierung im Dialog-Admin nach Bearbeiten nicht möglich<br>
[Bug][Export]                                XML-Export über Export Wizard wird fehlerhaft generiert und nicht angezeigt<br>
[Bug][Beziehungen]                           Datenbankfehler bei Auswahl von Beziehungen beheben<br>
[Bug][Beziehungen]                           Objekttyp als Beziehungsmaster setzt nur Beziehungen, die keine fest definierte Richtung haben<br>
[Bug][Update]                                i-doit Update sollte lediglich der Admin-Gruppe gestattet sein<br>
[Bug][Update]                                Behebe Warnung über unerwartete Parameter während eines Updates<br>
[Bug][Import]                                CSV-Import: Leeren von Datumsfeldern nicht möglich<br>
[Bug][CMDB]                                  "Counter"-Platzhalter ist für die Bezeichnung bei Anlage von Anschlüssen nicht verfügbar<br>
[Bug][CSV]                                   CSV-Import: Mehrere Kontaktzuweisungen  in Modus "Spalte" mit verschiedenen Objekttypen führt zu Fehlern<br>
[Bug][Code]                                  Speicher Passwörter ohne Bereinigung<br>
[Bug][Code]                                  Kompatibilität zu Mobile Browser<br>
[Bug][Kategorien]                            Erstellung von Eintrag in "Betriebssystem"-Kategorie erstellt zwei Einträge<br>
[Bug][Kategorien]                            Falscher Property-Type für Attribut "Personen > Stammdaten > Anrede"<br>
[Bug][Kategorien]                            Fehlerhafte Informationen in der Druckansicht zu IP-Listen<br>
[Bug][Kategorien]                            Druckansicht für IP-Liste unsortiert<br>
[Bug][Kategorien]                            Personen: "Firma" ist nach dem Speichern nicht in Stammdaten zu sehen<br>
[Bug][Kategorien]                            Attribut Suchdomäne aus der Kategorie Hostadresse wird bei der Objekt Duplizierung nicht mit übernommen<br>
[Bug][Kategorien]                            Sortierungen im Standortbaum und Standortrequester<br>
[Bug][Kategorien]                            Rolle Hinzufügen unter Personengruppen Zugewiesene Objekte<br>
[Bug][Kategorien]                            Objektbrowser listet im Objektbrowser erstellte Objekte erst nach Refresh/Ansichtswechsel<br>
[Bug][Kategorien]                            Schrankansicht in Kategorie Schränke fehlerhaft<br>
[Bug][Kategorien]                            Anlegen von Anschlüssen nicht möglich, wenn die Allgemeine Einstellung "Änderungskommentar deaktivieren" deaktiviert ist<br>
[Bug][Kategorien]                            Falsche Sortierung in Kategorie "Zugewiesene Objekte"<br>
[Bug][Installation]                          Pfad "/upload/files/" wird bei Installation nicht angelegt<br>
[Bug][Installation]                          Empfehlung für PHP-Version auf 7.2 erweitern<br>
[Bug][LDAP]                                  LDAP: falsche prüfung der Funktionen<br>
[Bug][LDAP]                                  LDAP: TLS- und STARTTLS ignoriert definierten Port<br>
[Bug][Report-Manager]                        Fehlende Formatierung in der Ausgabe von Reports<br>
[Bug][Report-Manager]                        Verwendung von Stammdaten Vorname im Reportmanager führt zu Fehlermeldung<br>
[Bug][Systemeinstellungen]                   Systemtools: Man kann die Admin etc. Gruppen durch die Systemtools löschen<br>
[Bug][Systemeinstellungen]                   Icons werden nicht geladen wenn ein Proxy Server verwendet wird<br>
[Bug][Suche]                                 Suche: Objekte aus Templaterstellung werden nicht indexiert<br>
[Bug][Validierung]                           Validierung Allgemein Kategorie Bezeichnung als Pflichtfeld setzen führt zu Anzeigefehlern bei der Verwendung von Objekt Standard Templates<br>
[Bug][Dashboard]                             Widget: Darstellung vieler Lesezeichen führt zu einer korrupten Ansicht<br>
[Bug][Benutzerdefinierte Kategorien]         Performance von Kategorielisten sinkt bei vielen Dialog-Plus Einträgen<br>
[Bug][Webserver-Konfiguration]               Log-Dateien dürfen nicht via Webserver erreichbar sein<br>
[Bug][Benutzereinstellungen]                 Button zum Zurücksetzen der Spaltenkonfiguration für Kategorielisten setzt immer auf den Auslieferungszustand zurück<br>
[Bug][API]                                   API: Übergibt man eine ID als String ist es möglich das die falsche Daten übernommen werden<br>
[Änderung][Performance]                      Verbesserte Performance für Kategoriebaum bei benutzerdefinierten Kategorien mit Report<br>
