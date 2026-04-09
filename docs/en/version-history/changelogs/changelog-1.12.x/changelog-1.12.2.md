---
search:
  exclude: true
---
# Changelog 1.12.2
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Aufgabe][Code] Entfernen aller Polyfills für mbstring extension<br>
[Verbesserung][CMDB] Speicher den CMDB Status Filter<br>
[Verbesserung][LDAP] SYNC: Import von mehr als 1000 Benutzern<br>
[Bug][Code] Objektzähler zur Darstellung der Objekte pro Objekttyp verlangsamt das System<br>
[Bug][Code] Verbesserte Sicherheit<br>
[Bug][Export] Einstellung zur Festlegung des Trennzeichens für CSV-Exporte wirkt sich nicht auf alle Exporte aus<br>
[Bug][Export] Attribut "Eingekauft bei" wird beim Duplizieren nicht auf das neue Objekt übertragen<br>
[Bug][Systemeinstellungen] "One Support Button to fix them all" sequenzielle Requests<br>
[Bug][Systemeinstellungen] Zugriff auf /upload Ordner ohne authentifizierung<br>
[Bug][Nagios] Doppelte Einträge im Monitoring > NDO<br>
[Bug][Nagios] Zeige die Check_commands Werte der Nagios Services<br>
[Bug][CSV] CSV-Import: Identifizierung des Standorts auf Grundlage einer kompletten Pfadangabe<br>
[Bug][CSV] CSV-Import leert Felder, die nicht in der CSV-Datei enthalten sind<br>
[Bug][CSV] Breiten- und Längengrad können nur mit Fehlern über den CSV-Import importiert werden<br>
[Bug][CSV] CSV-Export in der Kategorie "Kontaktzuweisung" unvollständig<br>
[Bug][CSV] Attribut "Hersteller" aus Kategorie "Anwendung" nicht im CSV-Import verfügbar<br>
[Bug][CSV] CSV-Import: Kontaktzuweisungen werden nicht erstellt<br>
[Bug][CSV] CSV-Import: Leere Tags werden erstellt<br>
[Bug][Suche] Finde den richtigen Dialog+ Wert<br>
[Bug][Suche] Suchindexierung der Kategorie C__CATG__CONNECTOR unsinnig und zu hoher Speicherverbrauch<br>
[Bug][Suche] Korrekte Darstellung von Umlauten bei Quellen<br>
[Bug][Suche] Standard Suche von Dialog Feldern<br>
[Bug][Suche] Finde alle Aliase die angegeben sind<br>
[Bug][Kategorien] Mehrfachauswahl im Objektbrowser wird vorzeitig gekürzt<br>
[Bug][Kategorien] Inhalte der Kategorieerweiterungen sowie die Ausgewählte Organisation in der Kategorie "Stammdaten" werden gelöscht, wenn die Person einem Objekt zugewiesen ist, welches dupliziert wird<br>
[Bug][Kategorien] SQL Fehler nach speichern einer Zentrale<br>
[Bug][Kategorien] Mouse Over für letztes Objekt im Objekt-Browser ohne Funktion<br>
[Bug][Kategorien] Verwendung einiger Zeichen innerhalb des Passworts unterbindet Login<br>
[Bug][Kategorien] Benutze das Vertragsbeginn Datum in der Listenansicht<br>
[Bug][Kategorien] Zeige Zugriffs URL's an wenn keine Seriennummer vorhanden ist<br>
[Bug][Kategorien] IPv6 Netze werden nicht korrekt gespeichert<br>
[Bug][Kategorien] Controller lassen sich keinem Gerät zuordnen<br>
[Bug][Kategorien] Willkürliche Beispieldaten bei Feldplatzhaltern in der Kategorie "Allgemein"<br>
[Bug][Kategorien] Listeneditierung als Kategorie sichtbar<br>
[Bug][Kategorien] Weise Software zu wenn der Änderungskommentar aktiviert ist<br>
[Bug][Kategorien] Eigene Filtereinstellungen im Objekt-Browser zulassen<br>
[Bug][Kategorien] Rechtschreibfehler "Email" statt "E-Mail"<br>
[Bug][Kategorien] Filtern im Objekt-Browser nicht möglich, wenn Kategorienamen eingeblendet werden<br>
[Bug][Kategorien] Tags anlegen ohne Teilstrings<br>
[Bug][Kategorien] Zeige die richtigen Kontakte in der Übersichtsseite<br>
[Bug][Kategorien] Fehlerhafter Export von Datumsinformationen<br>
[Bug][Kategorien] Root-Lokation hat keinen Eintrag in der Standort-Tabelle<br>
[Bug][Kategorien] Betriebskosten werden beim Duplizieren vervielfacht, wenn die Währung auf Schweizer Franken steht<br>
[Bug][Rechtesystem] Zugriff auf die Einstellungen des Objektbrowsers unter Verwaltung einschränken<br>
[Bug][Rechtesystem] Rechte werden nicht korrekt gelesen<br>
[Bug][Report-Manager] Informationen aus "logische Ports" nicht im Report-Manager verfügbar<br>
[Bug][Report-Manager] Kommentare müssen auf SQL-Statements geprüft werden<br>
[Bug][Report-Manager] Sub-Kategorie "Anschlüsse" Attribut "Ein/Ausgang" für Report-Manager bereitstellen<br>
[Bug][Report-Manager] Zeige HTML auch im vom Report erstellten PDF<br>
[Bug][Report-Manager] Ausgabe im Report-Manager zeigt bei Auswahl des Betriebssystems aus Kategorie "Betriebssystem" alle zugewiesenen Betriebssysteme statt des primären<br>
[Bug][Report-Manager] Einstellung im Report Manager, nur Kategorie-Einträge im Zustand "Normal" anzuzeigen greift nicht für Kategorie "Betriebssystem"<br>
[Bug][Report-Manager] Fehler im Report Manager<br>
[Bug][Report-Manager] Fehler beim Verwenden des Attributs "letzte Aktualisierung" der Kategorie "Custom Identifier" in einem Report<br>
[Bug][Report-Manager] Fehlerhafte Ausgabe von E-Mail Adressen in Reports<br>
[Bug][Report-Manager] Verwendung von Zeilenumbrüchen im SQL-Editor werden bereinigt<br>
[Bug][Massenänderung] CMDB-Status aus Änderungsvorlagen überschreibt immer den CMDB-Status der Objekte<br>
[Bug][Massenänderung] Massenänderung hat keinen Effekt<br>
[Bug][Beziehungen] Sub-Kategorie "Listerner" der Kategorie "Netzwerkverbindungen" erzeugt keine Beziehungen<br>
[Bug][Beziehungen] Sortierung der Gewichtung in Beziehungsdetails korrigieren<br>
[Bug][Beziehungen] Entferne den Datenbankzugriff über das Datenbankschema<br>
[Bug][Benutzerdefinierte Kategorien] Beim erstellen von neuen Einträgen in Ben. Kateg. werden Daten vorausgefüllt<br>
[Bug][Benutzerdefinierte Kategorien] Dialog Felder sind nicht als Drop Down gekennzeichnet<br>
[Bug][Benutzerdefinierte Kategorien] Vorgänge "Archivieren"/"Löschen" innerhalb von benutzerdefinierten Kategorien werden nicht ins Logbuch geschrieben<br>
[Bug][Benutzerdefinierte Kategorien] Inhalte aus Dialog-Plus-Feldern in benutzerdefinierten Kategorien werden erst nach der manuellen Erneuerung des Suchindex über die Suche gefunden<br>
[Bug][Benutzerdefinierte Kategorien] QCW Profil Import<br>
[Bug][Benutzerdefinierte Kategorien] UTF-8 Symbole in der Datenbank der Benutzerdefinierten Kategorie<br>
[Bug][Listeneditierung] Listeneditierung der Kategorie Verkabelung > Anschlüsse leert Verbunden mit Anschluss<br>
[Bug][Listeneditierung] Listeneditieren der Kategorie Verkabelung > Anschlüsse leert Farbe/Wellenlänge<br>
[Bug][Listeneditierung] Bei der Listeneditierung wurde bei neuen Einträgen ausgeblendete Spalten nicht ausgeblendet<br>
[Bug][Listeneditierung] Bei der Listenedierung werden die Kontakte innerhalb der Kategorie Prüfung nicht korrekt dargestellt<br>
[Bug][Listeneditierung] Änderung eines Eintrags (über Listeneditierung) einer Benutzerdefinierten Kategorie führt zu Überschreiben des Beschreibungsfelds<br>
[Bug][Listeneditierung] Feldtyp "Link" führt bei Benutzerdefinierten-Kategorien in der Listeneditierung zu einem Fehler<br>
[Bug][Listeneditierung] Listeneditierung der Kategorie Allgemein löscht Tags<br>
[Bug][Listeneditierung] Kalender-Funktion in Listeneditierung deplatziert<br>
[Bug][Listeneditierung] Listeneditierung: Kategorie "Port" Attribut "Standard VLAN" wird geleert<br>
[Bug][Listeneditierung] Fehler beim Aufruf der Listeneditierung<br>
[Bug][Listeneditierung] Listeneditierung von Benutzerdefinierten Kategorien mit Horizontalen Linien<br>
[Bug][Listeneditierung] Kategorie "Listenditierung" bei neuen Objekttypen ohne Funktion<br>
[Bug][Listeneditierung] Kategorie "Allgemein" Attribut "CMDB-Status" korrekt speichern<br>
[Bug][CMDB] Fehler beim archivieren / löschen von Objekten<br>
[Bug][CMDB] Automatische Generierung von Inventarnummer schlägt fehl mit PHP 7.2<br>
[Bug][Logbuch] Es werden Logbucheinträge endgültig gelöscht<br>
[Bug][Logbuch] Logbuch-Informationen zur Kategorie "Servicezuweisung" werden nicht vollständig geschrieben<br>
[Bug][Logbuch] Logbuch: Einträge können aus dem sichtbaren Bereich verschwinden<br>
[Bug][Validierung] IPv4-Adresse wird nicht durch die Validierung Global validiert<br>
[Bug][Validierung] Speicher MAC-Adressen nach EUI-64<br>
[Bug][JEDI/Jdisc] Beim Import über JDISC wird für jede Anwendung ein neuer Dialog+ Eintrag bei Hersteller angelegt<br>
[Bug][JEDI/Jdisc] JDISC: Cluster/Clusterdienste werden nicht korrekt importiert<br>
[Bug][JEDI/Jdisc] Beim JDISC Import (Aktualisieren) werden geänderte IP-Adressen nicht übernommen<br>
[Bug][Console] Vermeide Animationen bei Such-Index-Generierung um Performance zu steigern<br>
[Bug][Systemtools] Entfernen des "One Button to fix them all"<br>
[Bug][Update] Durchführung des Updates mit dem Internet Explorer 11 in einigen Fällen nicht möglich<br>
[Bug][CMDB-Explorer] CMDB-Explorer mit dem IE11 aufrufen<br>
[Bug][CMDB-Explorer] Fehlerhafte Darstellung bei langen Bezeichnungen in der Service-Auswahl des CMDB-Explorers<br>
[Bug][LDAP] LDAP-Sync bei StartTLS ohne Funktion<br>
[Bug][LDAP] LDAP verbindung herstellen<br>
[Bug][LDAP] Sonderzeichen aus Namen werden beim LDAP-Sync nicht escaped<br>
[Bug][My-doit] CMDB-Status Filter filter<br>
[Bug][Admincenter] Remote Code Execution im Admin-Bereich<br>
[Bug][Monitoring] Keine Auswahlmöglichkeiten für Monitoring Instanz in Widget "Monitoring: Gefährdete Hosts"<br>
[Bug][Objekte] Beim Erstellen werden in der Kategorie "Formfaktor" Daten eingetragen<br>
[Bug][Objekte] Ausblenden bei nicht befüllter Kategorie "Service" korrigieren<br>
[Bug][Objekte] Kategorie "Kontaktzuweisung" führt in der Übersicht zu Performanceschwankungen<br>
[Bug][Listen] Fehler beim Filtern in Objekt-Listen<br>
[Bug][Listen] Fehler beim Verwenden des Filters in Objektlisten mit definierter Standard-Sortierung<br>
[Bug][Listen] Paging bei Änderung des Objektstatus korrigieren<br>
[Bug][Events] Events: Fehlerhafte/Fehlende Information in der Übergabe zum Shell-Script<br>
[Bug][Anschlusstyp Verkabelung] In Kategorie Verkabelung kann kein Anschluss bei einem neuen Objekt im Firefox erstellt werden wenn das Objekt gerade erst erstellt worden ist<br>
[Bug][Lizenzverwaltung] Sonderzeichen: Zuweisung einer Lizenz mit Sonderzeichen nicht möglich<br>
[Bug][Import] Übersetzung OCS Import Settings falsch<br>
[Bug][Benachrichtigungen] Benachrichtigungen: E-Mails zu ablaufende Lizenzen werden nicht versendet<br>
[Bug][CMDB Einstellungen] SYSIDs werden nicht immer 'unique' generiert<br>
