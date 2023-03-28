# Changelog 1.9

[Verbesserung]  Anzeige von Spalte Version in Kategorie Installation<br>
[Verbesserung]  Der Regler für anpassbare Spaltenbreiten in Objektlisten wurde verbessert<br>
[Verbesserung]  Option zur Handhabung von Leerzeichen in exportierten Check_MK Tags<br>
[Verbesserung]  Frei konfigurierbarer Willkommenstext auf dem Login Screen (Verwaltung -> Allgemeine Einstellungen)<br>
[Verbesserung]  OCS Import: Ignorierte Software wird nicht mehr importiert<br>
[Verbesserung]  Konfiguration zur Wahl der i-doit Sprache über Browsersprache<br>
[Verbesserung]  Verbesserung der Verschlüsselungsfunktionen beim Speichern von Passwörtern in Konfigurationen und der Dokumentation (auf Basis mcrypt)<br>
[Verbesserung]  Popups passen sich automatisch an die Bildschirmgröße an<br>
[Verbesserung]  Konfiguration zum automatischen Starten von Deep Search nach Quick Search<br>
[Verbesserung]  Automatischer Fokus auf das Filterfeld in den Objektlisten<br>
[Verbesserung]  Button zum Entfernen eines Filters in den Objektlisten<br>
[Verbesserung]  Autovervollständigung bei der Suche in den Objektlisten<br>
[Verbesserung]  Auslagerung von Informationen zu fehlenden Rechten in neues Log<br>
[Verbesserung]  Filtern nach CMDB-Status per Drop-Down in Objektlisten<br>
[Verbesserung]  Neue Kategorie "Kabelverbindung"<br>
[Verbesserung]  Erweiterung der DNS Informationen in der Kategorie Hostadresse<br>
[Verbesserung]  Erweiterung der Kategorie Hostadresse um Netzbereiche<br>
[Verbesserung]  Neuer Objekttyp und Kategorien: Netzbereich<br>
[Verbesserung]  Neue Funktion in IP Listen: Bereiche / Zonen<br>
[Verbesserung]  Oberfläche zur Massenverkabelung in Kategorie Anschlüsse<br>
[Verbesserung]  Anschlüsse Kategorie: Entkabelungsfunktion<br>
[Verbesserung]  Vererbung von Breiten- und Längengrad in der Kategorie Standort<br>
[Verbesserung]  Verwendung von voranstehenden Nullen im Counter-Platzhalter in Objekt-Titel / Inventarnummer<br>
[Verbesserung]  Erweiterte Garantieberechnung in der Kategorie Buchhaltung<br>
[Verbesserung]  OCS-Import: Aufnahme der CPU-Kerne zu den importierten Daten<br>
[Verbesserung]  PHP 7.0 Kompatibilität<br>
[Änderung]      Admin-Center: Umbenennung der Module in "Add-ons"<br>
[Änderung]      Überflüssige DropDown-Liste in Kategorie-Dialog-Listen unter Dialog-Admin<br>
[Änderung]      Check_MK: Menüpunkt für Export wird in den Modul-bereich verschoben<br>
[Änderung]      Nagios: Menüpunkt für Export wird in den Modul-bereich verschoben<br>
[Bug]           Hostmerkmale (dynamisch) unter Check_MK passt sich dem Browserfenster nicht dynamisch an<br>
[Bug]           Objekttyp wird trotz Abbrechen erstellt.<br>
[Bug]           OPEN: Druckansicht einer Übersichtsseite endet mit PHP-Fehler<br>
[Bug]           Kabellänge wird in Listeneditierung falsch umgerechnet<br>
[Bug]           Suche Index muss als Zeichensatz utf8_unicode_ci haben<br>
[Bug]           Lizenzen: Nach Eintragung eines Preises kann dieser nicht mehr gelöscht werden<br>
[Bug]           Abfrage nach php-mysqli schlägt fehl<br>
[Bug]           Identifikationsfelder des CSV Import funktionieren nicht über den Controller<br>
[Bug]           JDisc-Import: Kapazität der Festplatten unter der Kategorie "Gerät" wird nicht aktualisiert.<br>
[Bug]           JDisc-Import: Beim Modus "Überschreiben" werden Objekte vom Typ "Kabel" immer wieder neu erzeugt.<br>
[Bug]           Button zum Leeren des Filters von Objektlisten wird nicht in allen Browsern angezeigt<br>
[Bug]           CMDB Explorer Algorithmus zeigt Softwareinstanzen nicht an<br>
[Bug]           Erzeugung eines Anschlusses ohne die Auswahl einer Verbindung erzeugt bereits ein Kabel<br>
[Bug]           Baseline Design Fehler für Selects innerhalb einer Input Group<br>
[Bug]           Verwendung von mehr als einem Beschreibungsfeld im Export eines Reports nicht möglich<br>
[Bug]           Deep Search findet keine mit Bindestrich getrennten Begriffe<br>
[Bug]           Report-Manager: CSV- und TXT-Exporte geben leere Reports aus<br>
[Bug]           Highlighting in Suche wird mit HTML-Code ausgegeben<br>
[Bug]           Suche findet fälschlicherweise Logbuch Einträge<br>
[Bug]           Kategorie "Vertragszuweisung" lässt sich nicht in der Übersichtsseite anzeigen<br>
[Bug]           Recht Bearbeiten auf "Reports in Kategorie" erlaubt dem User nicht, einen Report aus der Kategorie zu bearbeiten.<br>
[Bug]           Anlage eines Objektes mit der Kategorie "CPU" erstellt automatisch einen Eintrag in dieser Kategorie<br>
[Bug]           JDisc-Import: Logbucheinträge werden fälschlicherweise angelegt<br>
[Bug]           Objektzähler im AdminCenter nicht komplett sichtbar<br>
[Bug]           Logbuch: Änderungen an objektspezifischen Kategorien zeigt im Anschluss die falsche Kategorie<br>
[Bug]           Datumsformat in Listen im englischen Format trotz deutscher Einstellungen<br>
[Bug]           Objektlisten Widget löst Einträge nicht richtig auf<br>
[Bug]           Benachrichtigungen werden nicht verschickt, wenn der Empfänger nicht vom Typ Personen/Personengruppe ist<br>
[Bug]           SYSID kann nicht über den CSV-Import aktualisiert werden<br>
[Bug]           Textdarstellung unleserlich im Dialog für das Löschen von Objekten in Kategorie Schrank<br>
[Bug]           Rechtschreibfehler in der OCS-Konfiguration<br>
[Bug]           Rechtschreibfehler in Kategorie "PDU"<br>
[Bug]           Button "Hinzufügen/Entfernen" verschwindet nach Klick auf "Übernehmen" im Objektbrowser<br>
[Bug]           Spezifische Kategorien werden bei verknüpften Objekten im Report Manager nicht angezeigt<br>
[Bug]           Rechtesystem zurücksetzen funktioniert nicht mit verschlüsseltem Passwort<br>
[Bug]           Datumsfelder in benutzerdefinierten Kategorien nicht löschbar<br>
[Bug]           CSV-Export: Benutzerdefinierte Informationen werden von HTML-Tags umgeben<br>
[Bug]           Fehlender Status Dropdown in Dialog-Admin<br>
[Bug]           Breiten- und Längengrad können nicht über den CSV-Import importiert werden<br>
[Bug]           Bedingungen auf das Attribut "Einschub" werden im Report-Manager nicht korrekt umgesetzt<br>
[Bug]           Entfernen einer Slotzuweisung lässt einen Eintrag in "räumlich zugeordnete Objekte" zurück<br>
[Bug]           Attributsauswahl für Kategorie "Betriebssystem" im Report-Manager leer<br>
[Bug]           Suchindex: Memory Limit Fehlermeldung bei Neugenerierung des Suchindexes bei größeren Datenbanken<br>
[Bug]           Raid-Kapazität in Speichersystemen wird immer in GB dargestellt.<br>
[Bug]           Felder in der LDAP-Konfiguration beim Aufruf der Bearbeitungsansicht leer<br>
[Bug]           Falsche Logbuch-Informationen zu Schränken, wenn ein Objekt umpositioniert wird.<br>
[Bug]           CSV-Import: Feld "Objekt-Beziehung (Mehrere Objekte)" füllt Feld nicht und erzeugt keine Beziehung<br>
[Bug]           CSV-Import: Feld "Objekt-Beziehung(Ein Objekt)" erzeugt keine Beziehung<br>
[Bug]           Pflichtfelddefinition für das Attribut "Standort" funktioniert nicht<br>
[Bug]           Falsch erzeugtes SQL bei der verwendung von IS NULL/IS NOT NULL im Report Manager<br>
[Bug]           Als Service Komponenten können im Report Manager nur Infrastruktur-Objekte gewählt werden<br>
[Bug]           Beispiel für das Datumsformat entspricht nicht dem tatsächlichen Datumsformat<br>
[Bug]           Bearbeiten der Kategorie "Service" über die Listeneditierung bewirkt, dass der Inhalt von "Servicebeschreibung intern" auf das Feld "Servicebeschreibung extern" übertragen wird<br>
[Bug]           Überflüssige Einträge in den Experteneinstellungen<br>
[Bug]           Kategorie "DHCP" fehlt in der Listeneditierung<br>
[Bug]           Kategorie "DHCP" fehlt im CSV-Import<br>
[Bug]           Fehlerhafte Darstellung von Icons im Listenbrowser<br>
[Bug]           Default-Template übernimmt beim JDisc-Import nur Import-Kategorien<br>
[Bug]           Fehler in der Kategorie "Objektvitalität", wenn kein Verbrauch vorliegt<br>
[Bug]           Objekttyp-Auswahl bei der Verknüpfung einer Zuweisung im CSV-Import hat keine Auswirkung<br>
[Bug]           Attribut "Letzte Änderung" ist im Abfrage-Editor nicht als Bedingung auswählbar<br>
[Bug]           Im Report kann kein Attribut zur Kategorie "Räumlich zugeordnete Objekte" unter den Bedingungen ausgewählt werden<br>
[Bug]           Import der Geschwindigkeit eines Interfaces über JDisc verwendet inkorrekte Umrechnung<br>
[Bug]           Darstellung des zugewiesenen Netzes erlaubt es nicht zu lesen, welches Netz ausgewählt wurde<br>
[Bug]           Sortierung der Spalten in Report-Ergebnissen nicht mehr möglich<br>
[Bug]           Deaktivierte Quickinfo wird trotzdem bei Standort-Pfad angezeigt<br>
[Bug]           Auswahl der Objekte im Objektbrowser durch die Schaltfläche "Seite" nicht möglich<br>
[Bug]           Einstellung zum CMDB-Status im JDisc-Profil hat keine Auswirkungen beim Import über den Controller<br>
[Bug]           CSV-Export eines Reports mit Umbrüchen enthält ebenfalls die Umbrüche<br>
[Bug]           Seitennavigation in Objekt-Browsern funktioniert erst, nachdem vertikal gescrollt wurde<br>
[Bug]           Icon zur Bearbeitung der Listenansicht wird nicht ausgeblendet, wenn der User nicht über die Rechte verfügt<br>
[Bug]           Standort kann nicht gelöst werden<br>
[Bug]           Filtern nach IP-Adressen nicht möglich<br>
[Bug]           Übersetzung der Sprachkonstante erfolgt nicht im Menübaum der Verwaltung<br>
[Bug]           Vertragsbeginn und Vertragsende stehen nicht in der Auswahl zur Darstellung in den Objekt-Listen<br>
[Bug]           Bei der Verwendung von Informationen aus mehr als einer Multi-Value-Kategorie in der Listenansicht werden die Attribute wiederholt dargestellt<br>
[Bug]           Fehler, wenn beim Report eine Bedingung auf das Attribut "CMDB-Status" verwendet wird<br>
[Bug]           Lupen-Icon zur Auswahl der verknüpften Attribute im Report-Manager fehlt<br>
[Bug]           Objektlink kann nicht zum öffnen der Objektdetails verwendet werden, wenn der Klick auf die Zeile deaktiviert ist.<br>
[Bug]           Ja/Nein-Feld aus benutzerdefinierten Kategorien mit Pflichtfelddefinition führt auf Übersichtsseite immer dazu, dass der Datensatz nicht gespeichert werden kann.<br>
[Bug]           Ja/Nein-Felder können im Report-Manager nicht sauber abgefragt werden<br>
[Bug]           Informationen der Kategorie "Datensicherung" werden nicht auf der Übersichtsseite gespeichert, wenn Pflichtfelder konfiguriert wurden<br>
[Bug]           Druckausgabe bei gefilterten Listen inkorrekt<br>
[Bug]           Fehler beim Import einer CSV-Datei ohne Identifizierungsfeld<br>
[Bug]           Experteneinstellung "auth.use-in-location-tree" deaktiviert für alle User die Root-Lokation im Standort-Browser<br>
[Bug]           Fehler beim Login eines LDAP-Users, wenn dieser keine Rechte besitzt<br>
[Bug]           Attribut "Interface" in einem Anschluss wird geleert, wenn der Anschluss über den Verkabelungsimport importiert wird.<br>
[Bug]           Attribute "DNS Domäne" und "FQDN" können im Report-Manager nicht ausgegeben werden<br>
[Bug]           Attribut "Standort" wird mit aktivem my-doit Statusfilter in Objekt-Listen nicht dargestellt.<br>
[Bug]           Auswahl von Listener im Report Manager führt zu Fehlermeldung<br>
[Bug]           SMTP Passwort über Entwicklertools auslesbar<br>
[Bug]           Kategorie "Verbindung" enthält falsche Angaben<br>
[Bug]           Übersetzung von Sprachkonstanten für CMDB-Status erfolgt nicht mit eigenen Übersetzungen<br>
[Bug]           Nur das erste Report-Objekt in der Liste wird bei der Ausführung in einer Benachrichtigung versandt<br>
[Bug]           Logbucheintrag einer gelösten Verbindung enthält Programmcode<br>
[Bug]           Module und Erweiterungen lassen sich nicht für einzelne Mandanten (de)aktivieren<br>
[Bug]           Beim Login nach einem zuvor durchgeführten Logout bleibt in der URL /?logout erhalten<br>
[Bug]           Über die Objekttyp-Gruppe lassen sich im Kontakt-Browser Objekte auswählen, die nicht aus der Objekttyp-Gruppe "Kontakt" stammen<br>
[Bug]           Attribut "Schwellwert" aus der Benachrichtigung zu Updates entfernen<br>
[Bug]           Gruppenzugehörigkeit lässt sich nicht über die Massenänderung zuweisen<br>
[Bug]           Import-Log enthält "\n" an den Zeilenanfängen<br>
[Bug]           Button "Lösen" in der Listeneditierung wirkt nicht durch und die Verwaltung der Objekte ist inkonsistent<br>
[Bug]           Selbst erstellte Übersetzungen werden nach Login nicht berücksichtigt<br>
[Bug]           Links in Reports können nicht mehr angeklickt werden<br>
[Bug]           OCS-Import importiert Objekte in den falschen Objekttyp<br>
[Bug]           Tabelle mit JDisc-Profilen wird nicht vollständig dargestellt<br>
[Bug]           Button "Editieren" fehlt in den Kategorie-Dialogen unter Dialog-Admin<br>
[Bug]           Unterschiedliches Verhalten des Button "Abbrechen" unter Dialog-Admin<br>
[Bug]           Arbeitsplatz wird in Baumansicht-Typ "logischer Standort" und "Kombinerte Ansicht" doppelt dargestellt<br>
[Bug]           Nach Anklicken der Kategorie "Betriebssystem" im Beziehungsobjekt erscheint sofort der Edit-Mode<br>
[Bug]           Editieren-Button unter "Service Filter" anwählbar und bei nicht markierten Services-Filter mit Funktionalität des "Neu"-Buttons<br>
[Bug]           Interner Speicher für die Datumsfeld-Einstellung unter "Listenansicht Logbuch" wird nach Schließen des Kalenderblatts nicht zurückgesetzt<br>
[Bug]           Verkehrte Beschriftung in Datum-Feldern "Von" und "Bis" unter "Listenansicht Logbuch"<br>
[Bug]           Ausführungszähler Export-Vorlagen zählt die Ausführung bei Browser-Aktualisieren doppelt<br>
[Bug]           Falsche Buttons für Löschen und Wiederherstellen von Templates und obsolete Klappliste für Statuswahl<br>
[Bug]           Raid-Level "-" in Widget "Rechner" in "RAID Kapazität" falsch<br>
[Bug]           Falsche Eintrag in Widget "Rechner" in Listen "Speicherkapazität" und "RAID Kapazität"<br>
[Bug]           Doppelte ID-Anzeige in Widget "Objektliste" wenn kein Attribut gewählt ist<br>
[Bug]           Button "Druckansicht" wird in Listenansicht der Beziehungen angezeigt<br>
