# Changelog 1.8.2

[Verbesserung]  Report Manager: Hinzufügen einer Standard Sortierung der Reports<br>
[Verbesserung]  Kabellänge kann in Metern angegeben werden<br>
[Verbesserung]  Erweiterung des CSV Imports um die Verknüpfung von Interfaces via Objekt-/Interface-Namen<br>
[Verbesserung]  Erweiterung des CSV Imports um die Identifizierungsfelder: Mailadresse, LDAP DN, MAC-Adresse, Service Tag<br>
[Verbesserung]  Neuer Button in der Verwaltung um "Zeilenklick" für alle definierten Objektlisten zu forcieren<br>
[Verbesserung]  Benutzerdefinierte Kategorien in CMDB-Explorer Profilen verfügbar<br>
[Verbesserung]  Platzhalter / Variablen werden per Klick in das entsprechende Feld geschrieben<br>
[Verbesserung]  Neues Recht "Kategorie(n) in von mir erstellten Objekten"<br>
[Verbesserung]  Sicherheit: Verbesserte Verwaltung der Session ID (Verhinderung eines Session-Fixation-Angriffs)<br>
[Bug]           JDisc Import: Neu gescannte Monitore wurden über den Import nicht ins i-doit übertragen<br>
[Bug]           Falsche Fehlermeldung beim hochladen einer XML Import Datei<br>
[Bug]           Listeneditierung von Standorten zeigt zu kleine Felder<br>
[Bug]           JDisc Import: Der JDisc Import (Weboberfläche) verwendet als Datenquelle immer den JDisc Standard Server anstelle des ausgewählten Servers<br>
[Bug]           Service Filter werden doppelt angelegt, wenn der Internet Explorer 11 verwendet wird<br>
[Bug]           Archivierte Clustermitglieder werden in der Listenansicht dargestellt<br>
[Bug]           Logbucheinträge nach CSV-Import in die Modell-Kategorie zeigen nicht den ursprünglichen Wert<br>
[Bug]           Objekte in der Listenansicht innerhalb der Kategorie Objektgruppe können nicht direkt aufgerufen werden<br>
[Bug]           In der Spezifischen Kategorie "Netz" wurde für das Objekt "Global v4" ein falscher CIDR Suffix angezeigt<br>
[Bug]           JDisc Import: Lizenzobjekte werden immer wieder neu erstellt sobald der Unique Check auf Objekt-Titel aktiv ist<br>
[Bug]           Anzeigefehler bei der Druckansicht über den CMDB-Explorer in Firefox<br>
[Bug]           Default Gateway-Wert wird zurückgesetzt, wenn ein ein anderes Objekt desselben Subnetzes bearbeitet wird<br>
[Bug]           Attribute und Attributwerte werden auf unterschiedlichen Höhen dargestellt<br>
[Bug]           Filter setzt nach kurzer Zeit die Eingabeposition zurück<br>
[Bug]           Bei erstmaliger Konfiguration einer Objektliste wird die Option "Filter ermöglicht die Suche nach Teilstrings" nicht standardmäßig aktiviert<br>
[Bug]           Report Manager: Bei Klick auf "Online Repository" wird die Spracheinstellung auf Englisch umgestellt<br>
[Bug]           Unter gewissen Umständen wird die i-doit Session nach 5 Minuten beendet<br>
[Bug]           Report Manager Bedingung Standort Einschub Rückseite filtert nicht korrekt<br>
[Bug]           Link in Benachrichtigungen falsch<br>
[Bug]           Fehlerhafte Beschriftung des Buttons "GEO Koordinaten übernehmen" in der Standort-Kategorie<br>
[Bug]           Validierung von Telefondaten mit regulären Ausdrücken speichert trotz fehlgeschlagener Validierung<br>
[Bug]           Listeneditierung Spaltenbreite wird nicht optimal genutzt<br>
[Bug]           Benachrichtigungen bei Zertifikatablauf funktionieren nicht mehr<br>
[Bug]           Abfrage Editor Bedingung prüft nun bei Multi-Dialog+ Feldern nach korrektem Inhalt<br>
[Bug]           Report Manager: Logischer Standort eines Standorts kann nicht abgefragt werden<br>
[Bug]           Report Manager: Hostadresse lässt sich nicht auswählen<br>
[Bug]           Suchindex: Reindex nimmt keine DialogPlus Einträge auf<br>
[Bug]           Benutzerdefinierte Kategorie: HTML-Eintragungen machen Bearbeitungsansicht kaputt<br>
[Bug]           Report zeigt Objekte falscher Standorte unterhalb eines Standortes an<br>
[Bug]           Reports: Feld "Eingekauft bei" nicht mehr als Bedingung auswertbar<br>
[Bug]           Dateisystem Cache schreibt Dateien nicht Mandantenabhängig<br>
[Bug]           Pflichtfelddefinition für das Attribut "Standort" funktioniert nicht<br>
[Bug]           Quick Configuration Wizard: Falsche Schaltflächen bei der Neuanlage eines Objekttyps<br>
[Bug]           Listenansicht CSV Export liefert leere CSV Dateien<br>
[Bug]           Falsch erzeugtes SQL bei der verwendung von IS NULL/IS NOT NULL im Report Manager<br>
[Bug]           Als Service Komponenten können im Report Manager nur Infrastruktur-Objekte gewählt werden<br>
[Bug]           Suggestion in globaler Suche funktioniert nicht immer richtig<br>
[Bug]           Deep Search zeigt auch Beziehungsobjekte<br>
[Bug]           Fehler beim aktivieren des Check-MK Moduls: class ‚isys_module_check_mk does not have a method ‚activate<br>
[Bug]           Report ausführen löst einen Timeout aus (Maximum execution time of 600 seconds exceeded)<br>
[Bug]           E_ERROR: Call to a member function get_paths() on a non-object<br>
[Bug]           Beispiel für das Datumsformat entspricht nicht dem tatsächlichen Datumsformat<br>
[Bug]           Objektlisten-Konfiguration anderen Benutzern zuweisen bleibt ohne Rückmeldung<br>
[Bug]           Bearbeiten der Kategorie "Service" über die Listeneditierung bewirkt, dass der Inhalt von "Servicebeschreibung intern" auf das Feld "Servicebeschreibung extern" übertragen wird<br>
[Bug]           Überflüssige Einträge in den Experteneinstellungen<br>
[Bug]           Falsches Datumsformat bei automatisch gefülltem Datum<br>
[Bug]           LDAP-Sync: Gelöschte Benutzer werden nicht archiviert<br>
[Bug]           Report Manager: Bei Konditionen mit verknüpften Objekten werden die Standortpfade nicht angezeigt<br>
[Bug]           Nach einem Session Timeout und re-login erscheint die Meldung "Database error : MySQLi error: Lost link to database. (Unknown error)"<br>
[Bug]           Bei Als-Standard-definieren in Objektlisten-Definition wird nicht jedes Setting übernommen<br>
[Bug]           Hoher Speicherverbrauch bei LDAP Import<br>
[Bug]           JDisc Import: Das importieren eines Objektes über die JDisc Discovery Kategorie geschieht nicht anhand der Attribute des Objekt-Matching Profils<br>
[Bug]           Ändern der Höheneinheiten bei Racks über die Übersichtsseite<br>
[Bug]           Fehlermeldung nach Klick auf Report unter "Report Views" mit "Ansehen"-Recht<br>
[Bug]           Zuordnung DNS Server zu Layer 3 Netz<br>
[Bug]           CSV Import Zuordnung Netzwerk Port Verknüpftes Interface doppelt<br>
[Bug]           Verkabelungsimport: Verkabelungskette erweitern zeigt keine Felder an<br>
[Bug]           Report Manager: Falsche Währung wird ausgegeben<br>
[Bug]           Berücksichtigung der Beziehungsmaster-Einstellung beim Neugenerieren der Beziehungen unter "Cache / Datenbank"<br>
[Bug]           Report Manager: Servicezuweisung wird mehrfach angezeigt obwohl nur eine vorhanden ist<br>
[Bug]           Report gibt bei spezieller Auswahl-Konstellation die Bezeichnung von Anschlüssen falsch aus<br>
[Bug]           Default-Template übernimmt beim JDisc-Import nur Import-Kategorien<br>
[Bug]           Datumsformat wird im falschen Format dargestellt<br>
[Bug]           Verlinkung zu "Extras - Export" und "Extras - Import" ist inkorrekt bei exklusiver Rechtevergabe auf "Export" bzw. "Import"<br>
[Bug]           Darstellung des zugewiesenen Netzes erlaubt es nicht zu lesen, welches Netz ausgewählt wurde<br>
[Bug]           Kategorie "Alle Tickets" zeigt keine RT-Tickets an<br>
[Bug]           Auswahl der Objekte im Objektbrowser durch die Schaltfläche "Seite" nicht möglich<br>
[Bug]           Beim Aktualisieren eines Moduls für alle Mandanten kommt es zu einer Datenbankfehlermeldung wenn einer der Mandanten das zu aktualisierende Modul noch nicht installiert hat<br>
[Bug]           Seitennavigation in Objekt-Browsern funktioniert erst, nachdem vertikal gescrollt wurde<br>
[Bug]           "UND/ODER"-Feld in Reports verrutsch bei Auswahl des CMDB-Status<br>
[Bug]           CSV-Export von Objekt-Listen exportiert Umlaute inkorrekt<br>
[Bug]           Import der Adressvergabe (DHCP, statisch, etc) über den CSV-Import nicht möglich<br>
[Bug]           Fehlermeldung in Excel beim Öffnen einer Datei aus CSV-Export<br>
[Bug]           Fehlermeldung und Datenlücken bei Einspielen eines Profils im QCW<br>
[Bug]           Attribute Breiten- und Längengrad sind nicht im Report-Manager verfügbar<br>
[Bug]           Module lassen sich im AdminCenter nicht löschen/deinstallieren<br>
[Bug]           Inhalte aus dem Beschreibungsfeld der Allgemein Kategorie werden in der Suche erst nach einmaligem Bearbeiten gefunden<br>
[Bug]           Neu angelegte IP-Adressen werden über die Suche nicht gefunden<br>
[Bug]           Unlesbare Verkabelungsansicht bei Switchen über mehrere Hops<br>
[Bug]           CSV-Import identifiziert Objekte, obwohl keine Identifizierung konfiguriert ist<br>
[Bug]           Vertragsbeginn und Vertragsende werden in Benachrichtigungen nicht übermittelt<br>
