# Changelog 1.8.2

[Verbesserung]  Report Manager: Hinzufügen einer Standard Sortierung der Reports
[Verbesserung]  Kabellänge kann in Metern angegeben werden
[Verbesserung]  Erweiterung des CSV Imports um die Verknüpfung von Interfaces via Objekt-/Interface-Namen
[Verbesserung]  Erweiterung des CSV Imports um die Identifizierungsfelder: Mailadresse, LDAP DN, MAC-Adresse, Service Tag
[Verbesserung]  Neuer Button in der Verwaltung um "Zeilenklick" für alle definierten Objektlisten zu forcieren
[Verbesserung]  Benutzerdefinierte Kategorien in CMDB-Explorer Profilen verfügbar
[Verbesserung]  Platzhalter / Variablen werden per Klick in das entsprechende Feld geschrieben
[Verbesserung]  Neues Recht "Kategorie(n) in von mir erstellten Objekten"
[Verbesserung]  Sicherheit: Verbesserte Verwaltung der Session ID (Verhinderung eines Session-Fixation-Angriffs)
[Bug]           JDisc Import: Neu gescannte Monitore wurden über den Import nicht ins i-doit übertragen
[Bug]           Falsche Fehlermeldung beim hochladen einer XML Import Datei
[Bug]           Listeneditierung von Standorten zeigt zu kleine Felder
[Bug]           JDisc Import: Der JDisc Import (Weboberfläche) verwendet als Datenquelle immer den JDisc Standard Server anstelle des ausgewählten Servers
[Bug]           Service Filter werden doppelt angelegt, wenn der Internet Explorer 11 verwendet wird
[Bug]           Archivierte Clustermitglieder werden in der Listenansicht dargestellt
[Bug]           Logbucheinträge nach CSV-Import in die Modell-Kategorie zeigen nicht den ursprünglichen Wert
[Bug]           Objekte in der Listenansicht innerhalb der Kategorie Objektgruppe können nicht direkt aufgerufen werden
[Bug]           In der Spezifischen Kategorie "Netz" wurde für das Objekt "Global v4" ein falscher CIDR Suffix angezeigt
[Bug]           JDisc Import: Lizenzobjekte werden immer wieder neu erstellt sobald der Unique Check auf Objekt-Titel aktiv ist
[Bug]           Anzeigefehler bei der Druckansicht über den CMDB-Explorer in Firefox
[Bug]           Default Gateway-Wert wird zurückgesetzt, wenn ein ein anderes Objekt desselben Subnetzes bearbeitet wird
[Bug]           Attribute und Attributwerte werden auf unterschiedlichen Höhen dargestellt
[Bug]           Filter setzt nach kurzer Zeit die Eingabeposition zurück
[Bug]           Bei erstmaliger Konfiguration einer Objektliste wird die Option "Filter ermöglicht die Suche nach Teilstrings" nicht standardmäßig aktiviert
[Bug]           Report Manager: Bei Klick auf "Online Repository" wird die Spracheinstellung auf Englisch umgestellt
[Bug]           Unter gewissen Umständen wird die i-doit Session nach 5 Minuten beendet
[Bug]           Report Manager Bedingung Standort Einschub Rückseite filtert nicht korrekt
[Bug]           Link in Benachrichtigungen falsch
[Bug]           Fehlerhafte Beschriftung des Buttons "GEO Koordinaten übernehmen" in der Standort-Kategorie
[Bug]           Validierung von Telefondaten mit regulären Ausdrücken speichert trotz fehlgeschlagener Validierung
[Bug]           Listeneditierung Spaltenbreite wird nicht optimal genutzt
[Bug]           Benachrichtigungen bei Zertifikatablauf funktionieren nicht mehr
[Bug]           Abfrage Editor Bedingung prüft nun bei Multi-Dialog+ Feldern nach korrektem Inhalt
[Bug]           Report Manager: Logischer Standort eines Standorts kann nicht abgefragt werden
[Bug]           Report Manager: Hostadresse lässt sich nicht auswählen
[Bug]           Suchindex: Reindex nimmt keine DialogPlus Einträge auf
[Bug]           Benutzerdefinierte Kategorie: HTML-Eintragungen machen Bearbeitungsansicht kaputt
[Bug]           Report zeigt Objekte falscher Standorte unterhalb eines Standortes an
[Bug]           Reports: Feld "Eingekauft bei" nicht mehr als Bedingung auswertbar
[Bug]           Dateisystem Cache schreibt Dateien nicht Mandantenabhängig
[Bug]           Pflichtfelddefinition für das Attribut "Standort" funktioniert nicht
[Bug]           Quick Configuration Wizard: Falsche Schaltflächen bei der Neuanlage eines Objekttyps
[Bug]           Listenansicht CSV Export liefert leere CSV Dateien
[Bug]           Falsch erzeugtes SQL bei der verwendung von IS NULL/IS NOT NULL im Report Manager
[Bug]           Als Service Komponenten können im Report Manager nur Infrastruktur-Objekte gewählt werden
[Bug]           Suggestion in globaler Suche funktioniert nicht immer richtig
[Bug]           Deep Search zeigt auch Beziehungsobjekte
[Bug]           Fehler beim aktivieren des Check-MK Moduls: class ‚isys_module_check_mk does not have a method ‚activate
[Bug]           Report ausführen löst einen Timeout aus (Maximum execution time of 600 seconds exceeded)
[Bug]           E_ERROR: Call to a member function get_paths() on a non-object
[Bug]           Beispiel für das Datumsformat entspricht nicht dem tatsächlichen Datumsformat
[Bug]           Objektlisten-Konfiguration anderen Benutzern zuweisen bleibt ohne Rückmeldung
[Bug]           Bearbeiten der Kategorie "Service" über die Listeneditierung bewirkt, dass der Inhalt von "Servicebeschreibung intern" auf das Feld "Servicebeschreibung extern" übertragen wird
[Bug]           Überflüssige Einträge in den Experteneinstellungen
[Bug]           Falsches Datumsformat bei automatisch gefülltem Datum
[Bug]           LDAP-Sync: Gelöschte Benutzer werden nicht archiviert
[Bug]           Report Manager: Bei Konditionen mit verknüpften Objekten werden die Standortpfade nicht angezeigt
[Bug]           Nach einem Session Timeout und re-login erscheint die Meldung "Database error : MySQLi error: Lost link to database. (Unknown error)"
[Bug]           Bei Als-Standard-definieren in Objektlisten-Definition wird nicht jedes Setting übernommen
[Bug]           Hoher Speicherverbrauch bei LDAP Import
[Bug]           JDisc Import: Das importieren eines Objektes über die JDisc Discovery Kategorie geschieht nicht anhand der Attribute des Objekt-Matching Profils
[Bug]           Ändern der Höheneinheiten bei Racks über die Übersichtsseite
[Bug]           Fehlermeldung nach Klick auf Report unter "Report Views" mit "Ansehen"-Recht
[Bug]           Zuordnung DNS Server zu Layer 3 Netz
[Bug]           CSV Import Zuordnung Netzwerk Port Verknüpftes Interface doppelt
[Bug]           Verkabelungsimport: Verkabelungskette erweitern zeigt keine Felder an
[Bug]           Report Manager: Falsche Währung wird ausgegeben
[Bug]           Berücksichtigung der Beziehungsmaster-Einstellung beim Neugenerieren der Beziehungen unter "Cache / Datenbank"
[Bug]           Report Manager: Servicezuweisung wird mehrfach angezeigt obwohl nur eine vorhanden ist
[Bug]           Report gibt bei spezieller Auswahl-Konstellation die Bezeichnung von Anschlüssen falsch aus
[Bug]           Default-Template übernimmt beim JDisc-Import nur Import-Kategorien
[Bug]           Datumsformat wird im falschen Format dargestellt
[Bug]           Verlinkung zu "Extras - Export" und "Extras - Import" ist inkorrekt bei exklusiver Rechtevergabe auf "Export" bzw. "Import"
[Bug]           Darstellung des zugewiesenen Netzes erlaubt es nicht zu lesen, welches Netz ausgewählt wurde
[Bug]           Kategorie "Alle Tickets" zeigt keine RT-Tickets an
[Bug]           Auswahl der Objekte im Objektbrowser durch die Schaltfläche "Seite" nicht möglich
[Bug]           Beim Aktualisieren eines Moduls für alle Mandanten kommt es zu einer Datenbankfehlermeldung wenn einer der Mandanten das zu aktualisierende Modul noch nicht installiert hat
[Bug]           Seitennavigation in Objekt-Browsern funktioniert erst, nachdem vertikal gescrollt wurde
[Bug]           "UND/ODER"-Feld in Reports verrutsch bei Auswahl des CMDB-Status
[Bug]           CSV-Export von Objekt-Listen exportiert Umlaute inkorrekt
[Bug]           Import der Adressvergabe (DHCP, statisch, etc) über den CSV-Import nicht möglich
[Bug]           Fehlermeldung in Excel beim Öffnen einer Datei aus CSV-Export
[Bug]           Fehlermeldung und Datenlücken bei Einspielen eines Profils im QCW
[Bug]           Attribute Breiten- und Längengrad sind nicht im Report-Manager verfügbar
[Bug]           Module lassen sich im AdminCenter nicht löschen/deinstallieren
[Bug]           Inhalte aus dem Beschreibungsfeld der Allgemein Kategorie werden in der Suche erst nach einmaligem Bearbeiten gefunden
[Bug]           Neu angelegte IP-Adressen werden über die Suche nicht gefunden
[Bug]           Unlesbare Verkabelungsansicht bei Switchen über mehrere Hops
[Bug]           CSV-Import identifiziert Objekte, obwohl keine Identifizierung konfiguriert ist
[Bug]           Vertragsbeginn und Vertragsende werden in Benachrichtigungen nicht übermittelt
