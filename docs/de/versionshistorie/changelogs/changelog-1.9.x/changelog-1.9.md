# Changelog 1.9

[Verbesserung]  Anzeige von Spalte Version in Kategorie Installation
[Verbesserung]  Der Regler für anpassbare Spaltenbreiten in Objektlisten wurde verbessert
[Verbesserung]  Option zur Handhabung von Leerzeichen in exportierten Check_MK Tags
[Verbesserung]  Frei konfigurierbarer Willkommenstext auf dem Login Screen (Verwaltung -> Allgemeine Einstellungen)
[Verbesserung]  OCS Import: Ignorierte Software wird nicht mehr importiert
[Verbesserung]  Konfiguration zur Wahl der i-doit Sprache über Browsersprache
[Verbesserung]  Verbesserung der Verschlüsselungsfunktionen beim Speichern von Passwörtern in Konfigurationen und der Dokumentation (auf Basis mcrypt)
[Verbesserung]  Popups passen sich automatisch an die Bildschirmgröße an
[Verbesserung]  Konfiguration zum automatischen Starten von Deep Search nach Quick Search
[Verbesserung]  Automatischer Fokus auf das Filterfeld in den Objektlisten
[Verbesserung]  Button zum Entfernen eines Filters in den Objektlisten
[Verbesserung]  Autovervollständigung bei der Suche in den Objektlisten
[Verbesserung]  Auslagerung von Informationen zu fehlenden Rechten in neues Log
[Verbesserung]  Filtern nach CMDB-Status per Drop-Down in Objektlisten
[Verbesserung]  Neue Kategorie "Kabelverbindung"
[Verbesserung]  Erweiterung der DNS Informationen in der Kategorie Hostadresse
[Verbesserung]  Erweiterung der Kategorie Hostadresse um Netzbereiche
[Verbesserung]  Neuer Objekttyp und Kategorien: Netzbereich
[Verbesserung]  Neue Funktion in IP Listen: Bereiche / Zonen
[Verbesserung]  Oberfläche zur Massenverkabelung in Kategorie Anschlüsse
[Verbesserung]  Anschlüsse Kategorie: Entkabelungsfunktion
[Verbesserung]  Vererbung von Breiten- und Längengrad in der Kategorie Standort
[Verbesserung]  Verwendung von voranstehenden Nullen im Counter-Platzhalter in Objekt-Titel / Inventarnummer
[Verbesserung]  Erweiterte Garantieberechnung in der Kategorie Buchhaltung
[Verbesserung]  OCS-Import: Aufnahme der CPU-Kerne zu den importierten Daten
[Verbesserung]  PHP 7.0 Kompatibilität
[Änderung]      Admin-Center: Umbenennung der Module in "Add-ons"
[Änderung]      Überflüssige DropDown-Liste in Kategorie-Dialog-Listen unter Dialog-Admin
[Änderung]      Check_MK: Menüpunkt für Export wird in den Modul-bereich verschoben
[Änderung]      Nagios: Menüpunkt für Export wird in den Modul-bereich verschoben
[Bug]           Hostmerkmale (dynamisch) unter Check_MK passt sich dem Browserfenster nicht dynamisch an
[Bug]           Objekttyp wird trotz Abbrechen erstellt.
[Bug]           OPEN: Druckansicht einer Übersichtsseite endet mit PHP-Fehler
[Bug]           Kabellänge wird in Listeneditierung falsch umgerechnet
[Bug]           Suche Index muss als Zeichensatz utf8_unicode_ci haben
[Bug]           Lizenzen: Nach Eintragung eines Preises kann dieser nicht mehr gelöscht werden
[Bug]           Abfrage nach php-mysqli schlägt fehl
[Bug]           Identifikationsfelder des CSV Import funktionieren nicht über den Controller
[Bug]           JDisc-Import: Kapazität der Festplatten unter der Kategorie "Gerät" wird nicht aktualisiert.
[Bug]           JDisc-Import: Beim Modus "Überschreiben" werden Objekte vom Typ "Kabel" immer wieder neu erzeugt.
[Bug]           Button zum Leeren des Filters von Objektlisten wird nicht in allen Browsern angezeigt
[Bug]           CMDB Explorer Algorithmus zeigt Softwareinstanzen nicht an
[Bug]           Erzeugung eines Anschlusses ohne die Auswahl einer Verbindung erzeugt bereits ein Kabel
[Bug]           Baseline Design Fehler für Selects innerhalb einer Input Group
[Bug]           Verwendung von mehr als einem Beschreibungsfeld im Export eines Reports nicht möglich
[Bug]           Deep Search findet keine mit Bindestrich getrennten Begriffe
[Bug]           Report-Manager: CSV- und TXT-Exporte geben leere Reports aus
[Bug]           Highlighting in Suche wird mit HTML-Code ausgegeben
[Bug]           Suche findet fälschlicherweise Logbuch Einträge
[Bug]           Kategorie "Vertragszuweisung" lässt sich nicht in der Übersichtsseite anzeigen
[Bug]           Recht Bearbeiten auf "Reports in Kategorie" erlaubt dem User nicht, einen Report aus der Kategorie zu bearbeiten.
[Bug]           Anlage eines Objektes mit der Kategorie "CPU" erstellt automatisch einen Eintrag in dieser Kategorie
[Bug]           JDisc-Import: Logbucheinträge werden fälschlicherweise angelegt
[Bug]           Objektzähler im AdminCenter nicht komplett sichtbar
[Bug]           Logbuch: Änderungen an objektspezifischen Kategorien zeigt im Anschluss die falsche Kategorie
[Bug]           Datumsformat in Listen im englischen Format trotz deutscher Einstellungen
[Bug]           Objektlisten Widget löst Einträge nicht richtig auf
[Bug]           Benachrichtigungen werden nicht verschickt, wenn der Empfänger nicht vom Typ Personen/Personengruppe ist
[Bug]           SYSID kann nicht über den CSV-Import aktualisiert werden
[Bug]           Textdarstellung unleserlich im Dialog für das Löschen von Objekten in Kategorie Schrank
[Bug]           Rechtschreibfehler in der OCS-Konfiguration
[Bug]           Rechtschreibfehler in Kategorie "PDU"
[Bug]           Button "Hinzufügen/Entfernen" verschwindet nach Klick auf "Übernehmen" im Objektbrowser
[Bug]           Spezifische Kategorien werden bei verknüpften Objekten im Report Manager nicht angezeigt
[Bug]           Rechtesystem zurücksetzen funktioniert nicht mit verschlüsseltem Passwort
[Bug]           Datumsfelder in benutzerdefinierten Kategorien nicht löschbar
[Bug]           CSV-Export: Benutzerdefinierte Informationen werden von HTML-Tags umgeben
[Bug]           Fehlender Status Dropdown in Dialog-Admin
[Bug]           Breiten- und Längengrad können nicht über den CSV-Import importiert werden
[Bug]           Bedingungen auf das Attribut "Einschub" werden im Report-Manager nicht korrekt umgesetzt
[Bug]           Entfernen einer Slotzuweisung lässt einen Eintrag in "räumlich zugeordnete Objekte" zurück
[Bug]           Attributsauswahl für Kategorie "Betriebssystem" im Report-Manager leer
[Bug]           Suchindex: Memory Limit Fehlermeldung bei Neugenerierung des Suchindexes bei größeren Datenbanken
[Bug]           Raid-Kapazität in Speichersystemen wird immer in GB dargestellt.
[Bug]           Felder in der LDAP-Konfiguration beim Aufruf der Bearbeitungsansicht leer
[Bug]           Falsche Logbuch-Informationen zu Schränken, wenn ein Objekt umpositioniert wird.
[Bug]           CSV-Import: Feld "Objekt-Beziehung (Mehrere Objekte)" füllt Feld nicht und erzeugt keine Beziehung
[Bug]           CSV-Import: Feld "Objekt-Beziehung(Ein Objekt)" erzeugt keine Beziehung
[Bug]           Pflichtfelddefinition für das Attribut "Standort" funktioniert nicht
[Bug]           Falsch erzeugtes SQL bei der verwendung von IS NULL/IS NOT NULL im Report Manager
[Bug]           Als Service Komponenten können im Report Manager nur Infrastruktur-Objekte gewählt werden
[Bug]           Beispiel für das Datumsformat entspricht nicht dem tatsächlichen Datumsformat
[Bug]           Bearbeiten der Kategorie "Service" über die Listeneditierung bewirkt, dass der Inhalt von "Servicebeschreibung intern" auf das Feld "Servicebeschreibung extern" übertragen wird
[Bug]           Überflüssige Einträge in den Experteneinstellungen
[Bug]           Kategorie "DHCP" fehlt in der Listeneditierung
[Bug]           Kategorie "DHCP" fehlt im CSV-Import
[Bug]           Fehlerhafte Darstellung von Icons im Listenbrowser
[Bug]           Default-Template übernimmt beim JDisc-Import nur Import-Kategorien
[Bug]           Fehler in der Kategorie "Objektvitalität", wenn kein Verbrauch vorliegt
[Bug]           Objekttyp-Auswahl bei der Verknüpfung einer Zuweisung im CSV-Import hat keine Auswirkung
[Bug]           Attribut "Letzte Änderung" ist im Abfrage-Editor nicht als Bedingung auswählbar
[Bug]           Im Report kann kein Attribut zur Kategorie "Räumlich zugeordnete Objekte" unter den Bedingungen ausgewählt werden
[Bug]           Import der Geschwindigkeit eines Interfaces über JDisc verwendet inkorrekte Umrechnung
[Bug]           Darstellung des zugewiesenen Netzes erlaubt es nicht zu lesen, welches Netz ausgewählt wurde
[Bug]           Sortierung der Spalten in Report-Ergebnissen nicht mehr möglich
[Bug]           Deaktivierte Quickinfo wird trotzdem bei Standort-Pfad angezeigt
[Bug]           Auswahl der Objekte im Objektbrowser durch die Schaltfläche "Seite" nicht möglich
[Bug]           Einstellung zum CMDB-Status im JDisc-Profil hat keine Auswirkungen beim Import über den Controller
[Bug]           CSV-Export eines Reports mit Umbrüchen enthält ebenfalls die Umbrüche
[Bug]           Seitennavigation in Objekt-Browsern funktioniert erst, nachdem vertikal gescrollt wurde
[Bug]           Icon zur Bearbeitung der Listenansicht wird nicht ausgeblendet, wenn der User nicht über die Rechte verfügt
[Bug]           Standort kann nicht gelöst werden
[Bug]           Filtern nach IP-Adressen nicht möglich
[Bug]           Übersetzung der Sprachkonstante erfolgt nicht im Menübaum der Verwaltung
[Bug]           Vertragsbeginn und Vertragsende stehen nicht in der Auswahl zur Darstellung in den Objekt-Listen
[Bug]           Bei der Verwendung von Informationen aus mehr als einer Multi-Value-Kategorie in der Listenansicht werden die Attribute wiederholt dargestellt
[Bug]           Fehler, wenn beim Report eine Bedingung auf das Attribut "CMDB-Status" verwendet wird
[Bug]           Lupen-Icon zur Auswahl der verknüpften Attribute im Report-Manager fehlt
[Bug]           Objektlink kann nicht zum öffnen der Objektdetails verwendet werden, wenn der Klick auf die Zeile deaktiviert ist.
[Bug]           Ja/Nein-Feld aus benutzerdefinierten Kategorien mit Pflichtfelddefinition führt auf Übersichtsseite immer dazu, dass der Datensatz nicht gespeichert werden kann.
[Bug]           Ja/Nein-Felder können im Report-Manager nicht sauber abgefragt werden
[Bug]           Informationen der Kategorie "Datensicherung" werden nicht auf der Übersichtsseite gespeichert, wenn Pflichtfelder konfiguriert wurden
[Bug]           Druckausgabe bei gefilterten Listen inkorrekt
[Bug]           Fehler beim Import einer CSV-Datei ohne Identifizierungsfeld
[Bug]           Experteneinstellung "auth.use-in-location-tree" deaktiviert für alle User die Root-Lokation im Standort-Browser
[Bug]           Fehler beim Login eines LDAP-Users, wenn dieser keine Rechte besitzt
[Bug]           Attribut "Interface" in einem Anschluss wird geleert, wenn der Anschluss über den Verkabelungsimport importiert wird.
[Bug]           Attribute "DNS Domäne" und "FQDN" können im Report-Manager nicht ausgegeben werden
[Bug]           Attribut "Standort" wird mit aktivem my-doit Statusfilter in Objekt-Listen nicht dargestellt.
[Bug]           Auswahl von Listener im Report Manager führt zu Fehlermeldung
[Bug]           SMTP Passwort über Entwicklertools auslesbar
[Bug]           Kategorie "Verbindung" enthält falsche Angaben
[Bug]           Übersetzung von Sprachkonstanten für CMDB-Status erfolgt nicht mit eigenen Übersetzungen
[Bug]           Nur das erste Report-Objekt in der Liste wird bei der Ausführung in einer Benachrichtigung versandt
[Bug]           Logbucheintrag einer gelösten Verbindung enthält Programmcode
[Bug]           Module und Erweiterungen lassen sich nicht für einzelne Mandanten (de)aktivieren
[Bug]           Beim Login nach einem zuvor durchgeführten Logout bleibt in der URL /?logout erhalten
[Bug]           Über die Objekttyp-Gruppe lassen sich im Kontakt-Browser Objekte auswählen, die nicht aus der Objekttyp-Gruppe "Kontakt" stammen
[Bug]           Attribut "Schwellwert" aus der Benachrichtigung zu Updates entfernen
[Bug]           Gruppenzugehörigkeit lässt sich nicht über die Massenänderung zuweisen
[Bug]           Import-Log enthält "\n" an den Zeilenanfängen
[Bug]           Button "Lösen" in der Listeneditierung wirkt nicht durch und die Verwaltung der Objekte ist inkonsistent
[Bug]           Selbst erstellte Übersetzungen werden nach Login nicht berücksichtigt
[Bug]           Links in Reports können nicht mehr angeklickt werden
[Bug]           OCS-Import importiert Objekte in den falschen Objekttyp
[Bug]           Tabelle mit JDisc-Profilen wird nicht vollständig dargestellt
[Bug]           Button "Editieren" fehlt in den Kategorie-Dialogen unter Dialog-Admin
[Bug]           Unterschiedliches Verhalten des Button "Abbrechen" unter Dialog-Admin
[Bug]           Arbeitsplatz wird in Baumansicht-Typ "logischer Standort" und "Kombinerte Ansicht" doppelt dargestellt
[Bug]           Nach Anklicken der Kategorie "Betriebssystem" im Beziehungsobjekt erscheint sofort der Edit-Mode
[Bug]           Editieren-Button unter "Service Filter" anwählbar und bei nicht markierten Services-Filter mit Funktionalität des "Neu"-Buttons
[Bug]           Interner Speicher für die Datumsfeld-Einstellung unter "Listenansicht Logbuch" wird nach Schließen des Kalenderblatts nicht zurückgesetzt
[Bug]           Verkehrte Beschriftung in Datum-Feldern "Von" und "Bis" unter "Listenansicht Logbuch"
[Bug]           Ausführungszähler Export-Vorlagen zählt die Ausführung bei Browser-Aktualisieren doppelt
[Bug]           Falsche Buttons für Löschen und Wiederherstellen von Templates und obsolete Klappliste für Statuswahl
[Bug]           Raid-Level "-" in Widget "Rechner" in "RAID Kapazität" falsch
[Bug]           Falsche Eintrag in Widget "Rechner" in Listen "Speicherkapazität" und "RAID Kapazität"
[Bug]           Doppelte ID-Anzeige in Widget "Objektliste" wenn kein Attribut gewählt ist
[Bug]           Button "Druckansicht" wird in Listenansicht der Beziehungen angezeigt
