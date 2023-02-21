# Changelog 1.12.2

[Aufgabe][Code] Entfernen aller Polyfills für mbstring extension  
[Verbesserung][CMDB] Speicher den CMDB Status Filter  
[Verbesserung][LDAP] SYNC: Import von mehr als 1000 Benutzern  
[Bug][Code] Objektzähler zur Darstellung der Objekte pro Objekttyp verlangsamt das System  
[Bug][Code] Verbesserte Sicherheit  
[Bug][Export] Einstellung zur Festlegung des Trennzeichens für CSV-Exporte wirkt sich nicht auf alle Exporte aus  
[Bug][Export] Attribut "Eingekauft bei" wird beim Duplizieren nicht auf das neue Objekt übertragen  
[Bug][Systemeinstellungen] "One Support Button to fix them all" sequenzielle Requests  
[Bug][Systemeinstellungen] Zugriff auf /upload Ordner ohne authentifizierung  
[Bug][Nagios] Doppelte Einträge im Monitoring > NDO  
[Bug][Nagios] Zeige die Check_commands Werte der Nagios Services  
[Bug][CSV] CSV-Import: Identifizierung des Standorts auf Grundlage einer kompletten Pfadangabe  
[Bug][CSV] CSV-Import leert Felder, die nicht in der CSV-Datei enthalten sind  
[Bug][CSV] Breiten- und Längengrad können nur mit Fehlern über den CSV-Import importiert werden  
[Bug][CSV] CSV-Export in der Kategorie "Kontaktzuweisung" unvollständig  
[Bug][CSV] Attribut "Hersteller" aus Kategorie "Anwendung" nicht im CSV-Import verfügbar  
[Bug][CSV] CSV-Import: Kontaktzuweisungen werden nicht erstellt  
[Bug][CSV] CSV-Import: Leere Tags werden erstellt  
[Bug][Suche] Finde den richtigen Dialog+ Wert  
[Bug][Suche] Suchindexierung der Kategorie C__CATG__CONNECTOR unsinnig und zu hoher Speicherverbrauch  
[Bug][Suche] Korrekte Darstellung von Umlauten bei Quellen  
[Bug][Suche] Standard Suche von Dialog Feldern  
[Bug][Suche] Finde alle Aliase die angegeben sind  
[Bug][Kategorien] Mehrfachauswahl im Objektbrowser wird vorzeitig gekürzt  
[Bug][Kategorien] Inhalte der Kategorieerweiterungen sowie die Ausgewählte Organisation in der Kategorie "Stammdaten" werden gelöscht, wenn die Person einem Objekt zugewiesen ist, welches dupliziert wird  
[Bug][Kategorien] SQL Fehler nach speichern einer Zentrale  
[Bug][Kategorien] Mouse Over für letztes Objekt im Objekt-Browser ohne Funktion  
[Bug][Kategorien] Verwendung einiger Zeichen innerhalb des Passworts unterbindet Login  
[Bug][Kategorien] Benutze das Vertragsbeginn Datum in der Listenansicht  
[Bug][Kategorien] Zeige Zugriffs URL's an wenn keine Seriennummer vorhanden ist  
[Bug][Kategorien] IPv6 Netze werden nicht korrekt gespeichert  
[Bug][Kategorien] Controller lassen sich keinem Gerät zuordnen  
[Bug][Kategorien] Willkürliche Beispieldaten bei Feldplatzhaltern in der Kategorie "Allgemein"  
[Bug][Kategorien] Listeneditierung als Kategorie sichtbar  
[Bug][Kategorien] Weise Software zu wenn der Änderungskommentar aktiviert ist  
[Bug][Kategorien] Eigene Filtereinstellungen im Objekt-Browser zulassen  
[Bug][Kategorien] Rechtschreibfehler "Email" statt "E-Mail"  
[Bug][Kategorien] Filtern im Objekt-Browser nicht möglich, wenn Kategorienamen eingeblendet werden  
[Bug][Kategorien] Tags anlegen ohne Teilstrings  
[Bug][Kategorien] Zeige die richtigen Kontakte in der Übersichtsseite  
[Bug][Kategorien] Fehlerhafter Export von Datumsinformationen  
[Bug][Kategorien] Root-Lokation hat keinen Eintrag in der Standort-Tabelle  
[Bug][Kategorien] Betriebskosten werden beim Duplizieren vervielfacht, wenn die Währung auf Schweizer Franken steht  
[Bug][Rechtesystem] Zugriff auf die Einstellungen des Objektbrowsers unter Verwaltung einschränken  
[Bug][Rechtesystem] Rechte werden nicht korrekt gelesen  
[Bug][Report-Manager] Informationen aus "logische Ports" nicht im Report-Manager verfügbar  
[Bug][Report-Manager] Kommentare müssen auf SQL-Statements geprüft werden  
[Bug][Report-Manager] Sub-Kategorie "Anschlüsse" Attribut "Ein/Ausgang" für Report-Manager bereitstellen  
[Bug][Report-Manager] Zeige HTML auch im vom Report erstellten PDF  
[Bug][Report-Manager] Ausgabe im Report-Manager zeigt bei Auswahl des Betriebssystems aus Kategorie "Betriebssystem" alle zugewiesenen Betriebssysteme statt des primären  
[Bug][Report-Manager] Einstellung im Report Manager, nur Kategorie-Einträge im Zustand "Normal" anzuzeigen greift nicht für Kategorie "Betriebssystem"  
[Bug][Report-Manager] Fehler im Report Manager  
[Bug][Report-Manager] Fehler beim Verwenden des Attributs "letzte Aktualisierung" der Kategorie "Custom Identifier" in einem Report  
[Bug][Report-Manager] Fehlerhafte Ausgabe von E-Mail Adressen in Reports  
[Bug][Report-Manager] Verwendung von Zeilenumbrüchen im SQL-Editor werden bereinigt  
[Bug][Massenänderung] CMDB-Status aus Änderungsvorlagen überschreibt immer den CMDB-Status der Objekte  
[Bug][Massenänderung] Massenänderung hat keinen Effekt  
[Bug][Beziehungen] Sub-Kategorie "Listerner" der Kategorie "Netzwerkverbindungen" erzeugt keine Beziehungen  
[Bug][Beziehungen] Sortierung der Gewichtung in Beziehungsdetails korrigieren  
[Bug][Beziehungen] Entferne den Datenbankzugriff über das Datenbankschema  
[Bug][Benutzerdefinierte Kategorien] Beim erstellen von neuen Einträgen in Ben. Kateg. werden Daten vorausgefüllt  
[Bug][Benutzerdefinierte Kategorien] Dialog Felder sind nicht als Drop Down gekennzeichnet  
[Bug][Benutzerdefinierte Kategorien] Vorgänge "Archivieren"/"Löschen" innerhalb von benutzerdefinierten Kategorien werden nicht ins Logbuch geschrieben  
[Bug][Benutzerdefinierte Kategorien] Inhalte aus Dialog-Plus-Feldern in benutzerdefinierten Kategorien werden erst nach der manuellen Erneuerung des Suchindex über die Suche gefunden  
[Bug][Benutzerdefinierte Kategorien] QCW Profil Import  
[Bug][Benutzerdefinierte Kategorien] UTF-8 Symbole in der Datenbank der Benutzerdefinierten Kategorie  
[Bug][Listeneditierung] Listeneditierung der Kategorie Verkabelung > Anschlüsse leert Verbunden mit Anschluss  
[Bug][Listeneditierung] Listeneditieren der Kategorie Verkabelung > Anschlüsse leert Farbe/Wellenlänge  
[Bug][Listeneditierung] Bei der Listeneditierung wurde bei neuen Einträgen ausgeblendete Spalten nicht ausgeblendet  
[Bug][Listeneditierung] Bei der Listenedierung werden die Kontakte innerhalb der Kategorie Prüfung nicht korrekt dargestellt  
[Bug][Listeneditierung] Änderung eines Eintrags (über Listeneditierung) einer Benutzerdefinierten Kategorie führt zu Überschreiben des Beschreibungsfelds  
[Bug][Listeneditierung] Feldtyp "Link" führt bei Benutzerdefinierten-Kategorien in der Listeneditierung zu einem Fehler  
[Bug][Listeneditierung] Listeneditierung der Kategorie Allgemein löscht Tags  
[Bug][Listeneditierung] Kalender-Funktion in Listeneditierung deplatziert  
[Bug][Listeneditierung] Listeneditierung: Kategorie "Port" Attribut "Standard VLAN" wird geleert  
[Bug][Listeneditierung] Fehler beim Aufruf der Listeneditierung  
[Bug][Listeneditierung] Listeneditierung von Benutzerdefinierten Kategorien mit Horizontalen Linien  
[Bug][Listeneditierung] Kategorie "Listenditierung" bei neuen Objekttypen ohne Funktion  
[Bug][Listeneditierung] Kategorie "Allgemein" Attribut "CMDB-Status" korrekt speichern  
[Bug][CMDB] Fehler beim archivieren / löschen von Objekten  
[Bug][CMDB] Automatische Generierung von Inventarnummer schlägt fehl mit PHP 7.2  
[Bug][Logbuch] Es werden Logbucheinträge endgültig gelöscht  
[Bug][Logbuch] Logbuch-Informationen zur Kategorie "Servicezuweisung" werden nicht vollständig geschrieben  
[Bug][Logbuch] Logbuch: Einträge können aus dem sichtbaren Bereich verschwinden  
[Bug][Validierung] IPv4-Adresse wird nicht durch die Validierung Global validiert  
[Bug][Validierung] Speicher MAC-Adressen nach EUI-64  
[Bug][JEDI/Jdisc] Beim Import über JDISC wird für jede Anwendung ein neuer Dialog+ Eintrag bei Hersteller angelegt  
[Bug][JEDI/Jdisc] JDISC: Cluster/Clusterdienste werden nicht korrekt importiert  
[Bug][JEDI/Jdisc] Beim JDISC Import (Aktualisieren) werden geänderte IP-Adressen nicht übernommen  
[Bug][Console] Vermeide Animationen bei Such-Index-Generierung um Performance zu steigern  
[Bug][Systemtools] Entfernen des "One Button to fix them all"  
[Bug][Update] Durchführung des Updates mit dem Internet Explorer 11 in einigen Fällen nicht möglich  
[Bug][CMDB-Explorer] CMDB-Explorer mit dem IE11 aufrufen  
[Bug][CMDB-Explorer] Fehlerhafte Darstellung bei langen Bezeichnungen in der Service-Auswahl des CMDB-Explorers  
[Bug][LDAP] LDAP-Sync bei StartTLS ohne Funktion  
[Bug][LDAP] LDAP verbindung herstellen  
[Bug][LDAP] Sonderzeichen aus Namen werden beim LDAP-Sync nicht escaped  
[Bug][My-doit] CMDB-Status Filter filter  
[Bug][Admincenter] Remote Code Execution im Admin-Bereich  
[Bug][Monitoring] Keine Auswahlmöglichkeiten für Monitoring Instanz in Widget "Monitoring: Gefährdete Hosts"  
[Bug][Objekte] Beim Erstellen werden in der Kategorie "Formfaktor" Daten eingetragen  
[Bug][Objekte] Ausblenden bei nicht befüllter Kategorie "Service" korrigieren  
[Bug][Objekte] Kategorie "Kontaktzuweisung" führt in der Übersicht zu Performanceschwankungen  
[Bug][Listen] Fehler beim Filtern in Objekt-Listen  
[Bug][Listen] Fehler beim Verwenden des Filters in Objektlisten mit definierter Standard-Sortierung  
[Bug][Listen] Paging bei Änderung des Objektstatus korrigieren  
[Bug][Events] Events: Fehlerhafte/Fehlende Information in der Übergabe zum Shell-Script  
[Bug][Anschlusstyp Verkabelung] In Kategorie Verkabelung kann kein Anschluss bei einem neuen Objekt im Firefox erstellt werden wenn das Objekt gerade erst erstellt worden ist  
[Bug][Lizenzverwaltung] Sonderzeichen: Zuweisung einer Lizenz mit Sonderzeichen nicht möglich  
[Bug][Import] Übersetzung OCS Import Settings falsch  
[Bug][Benachrichtigungen] Benachrichtigungen: E-Mails zu ablaufende Lizenzen werden nicht versendet  
[Bug][CMDB Einstellungen] SYSIDs werden nicht immer 'unique' generiert  
