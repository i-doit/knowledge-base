# Changelog 1.1

[Erweiterung]    Rundum erneurtes granulares Rechtesystem
[Erweiterung]    CMDB Rechtestrukturen auf Basis von Objekttypen, Objekten und Kategorien
[Erweiterung]    Rechtestrukturen für Module: Reports, Dialog-Admin, Im-/Export, Logbuch, Nagios, globale Suche, Templates & Verwaltung
[Erweiterung]   Überarbeitete GUI für das Supernetz
[Erweiterung]   Überarbeitete GUI für Layer3 Netz (Abfrage auf Netzkollision, Link zum Supernetz)
[Erweiterung]   WYSIWYG Editor für alle Beschreibungsfelder
[Erweiterung]   Maßgeblich verbesserte GUI für Validierungskonfiguration
[Erweiterung]   Linke Navigation in variabler Größe
[Erweiterung]   Objekt-Typ-Gruppen lassen sich bei niedriger Auflösung "scrollen"
[Erweiterung]   Sehr viele DAO und UI Klassen wurden stark entschlackt (viel größerer Fokus auf die generischen Methoden)
[Erweiterung]   Sehr viele kleinere GUI aufhübschungen (z.B. saubere Abstände, gleichmäßigere Border, ...)
[Erweiterung]   Quick-Info Fenster zeigen mehr Inhalte an
[Erweiterung]   Neue Buttons und Teilweise verbesserte Rückgabewerte unter "Cache / Datenbank"
[Erweiterung]   Aufgehübschte und technisch neue "Dialog Listen" (Sehr viel platzsparender und Benutzerfreundlicher)
[Erweiterung]    Modul Installation/ Updates im Admin Center
[Erweiterung]   Wenn Kontakte exportiert werden, muss man die Wahl haben, entweder den Kontaktanemen oder den Loginnamen zu exportieren.
[Erweiterung]    Neuer  Objekttyp "Service Templates"
[Erweiterung]    Neuer  Objekttyp "Host Templates"
[Erweiterung]    Objekttypen im Statistiken Widget über config.inc.php konfigurierbar
[Erweiterung]    Eine neue "Rechte"-Kategorie
[Erweiterung]    Migration der rollenbasierten Rechte
[Erweiterung]    Rechte Recovery Funktion
[Erweiterung]    Objekterstellung in Objekt-/Datei- Browsern ist von den Rechten des Users abhängig
[Erweiterung]    API-Authentifizierung
[Erweiterung]    Löschen verwaister Rechte
[Erweiterung]    Flexible Breitenanpassung des linken Menübaums
[Erweiterung]    Neue API-Methode cmdb.filter.getUpdatedIPs
[Erweiterung]    Kopplung zu Loginventory
[Erweiterung]    Neue Nagios Struktur:
[Erweiterung]      Nagios Punkt unter Extras
[Erweiterung]        Nagios Kategorien befinden sich stehts in (gleichnamigen) Unter-Ordnern (Ausnahme: Gruppen, Personen, Personengruppen)
[Erweiterung]        Nagios Kategorie lautet nun "Host-Definitionen"
[Erweiterung]        Nagios Parameter aus der Softwarezuweisung wurden entfernt ? Zukünftig gibt es einen eigenen Objekt-Typen "Nagios Service" (Host- und Software Objekte verfügen über eine "Service Zuweisung" Kategorie)
[Erweiterung]        NDO Parameter sind in eine eigene "NDO Parameter" Kategorie gewandert
[Erweiterung]        Nagios Host- und Service Definitionen können über "Templates" verfügen ("Nagios Host Template" und "Nagios Service Template" sind eigene Objekt-Typen)
[Erweiterung]        Service Dependencies wurden komplett erneuert und verfügen über eine sehr sprechende Dokumentation, da dieser Part sehr komplex ist
[Erweiterung]          Export wurde technisch komplett neu entwickelt und gleichzeitig großzügig refakturiert
[Erweiterung]        Sehr umfangreiche Debugging Features inkl. Export Log
[Erweiterung]        Viele Bugfixes und nachgetragene Werte, die vorher nicht funktioniert oder ausgegeben wurden
[Erweiterung]          Nagios Commands können über Kommentare (WYSIWYG) verfügen. Diese werden im Frontend neben den entsprechenden Feldern dargestellt
[Erweiterung]          Sehr viele neue Felder zum detaillierten konfigurieren von Nagios Definitionen
[Erweiterung]          Freitext Felder für eigene Definitionen in Nagios-Hosts und ?Services (Custom Object Vars)
[Bugfix]    Clusterdienstzuweisung: Bei einer IP/Laufwerk/Freigabe im Dienst sollte diese automatisch bei der Zuweisung eingetragen sein.
[Bugfix]    LDEV Server und Client: Die Multipath Technologie sollte bei den Pfaden mit angegeben werden können
[Bugfix]    CSV-Import: Auto-Matching beim Wechsel des globalen Objekttyps
[Bugfix]    CSV-Import: vor dem Überschreiben von Objekten deren Kategorien löschen
[Bugfix]    Design kaputt nach Login und anschließender fehlender Berechtigung auf einen Mandanten
[Bugfix]    Objektbrowser zeigt unter kürzlich erstellt auch archivierte an
[Bugfix]    Horizontaler Scrollbalken unter "Extras" => "Templates" fehlt
[Bugfix]    Druckansicht Beziehungen im Layer-3-Netz wirft Exception aus.
[Bugfix]    Dashboard: Widget Statistiken verursacht aufgrund der Breite unten einen Scrollbalken [Bugfix]    Überzogene Lizenzschlüssel unter Lizenzen-Übersicht zeigen seltsame Werte. (Zum Beispiel 1/2 verwendet, aber bei den überzogenen Lizenzen sind trotzdem zwei Einträge)
[Bugfix]    Eigene Reports: Sollen sie nach dem Namen sortiert werden, werden sie nach der Länge des Namens sortiert.
[Bugfix]    Anschlüsse: Beim Anlegen eines neuen Ausgangs kann ich keinen dazugehörigen Eingang wählen.
[Bugfix]    Setup/Update: Sicherstellen, dass MySQL strict mode nicht aktiv ist
[Bugfix]    Bei der Listeneditierung werden einige Kategorien nicht korrekt bearbeitet .
[Bugfix]    JDisc: Import wirft PHP Warnings aus.
[Bugfix]    Controller: Update mit autoup geht nicht.
[Bugfix]    Objektbrowser bspw. in Stromverbraucher in der Listeneditierung: Ist beim Öffnen des Objektbrowser ein Objekt vorausgewählt, werden die dazugehörigen Anschlüsse nicht angezeigt.
[Bugfix]    Quick Info Cache entspricht nicht dem IST Stand.
[Bugfix]    JDISC Import: Die Erkennung bestehender Objekte ist case sensitive
[Bugfix]    Supernet Kategorie wird nie als gefüllt angezeigt (fett).
[Bugfix]    Kategorie Dateiversion: Der Button "Archivieren" muss hier "Purge" heißen.
[Bugfix]    Dateien: Purged man ein ganzes Dateiobjekt, werden die Dateien nicht vom Filesystem gelöscht.
[Bugfix]    Import: Vergleich von Objektnamen sollte case insensitive sein.
[Bugfix]    PHP-Fehler beim Speichern vom der Kategorie Layer3->Netz
[Bugfix]    Erstellung eines Logbuch-Eintrags trotz keiner geänderten Werte
[Bugfix]    General-Exception in "Alle Tickets"
[Bugfix]    [Properties] Dynamische Properties für CPU erstellen
[Bugfix]    [Properties] Dynamische Properties für Speicher erstellen
[Bugfix]    Bug beim Versenden von E-Mails im Workflow Modul
[Bugfix]    In Personengruppen kann man die Rechte nicht mehr zuweisen wenn man im Editier-Modus ist.
[Bugfix]    Beim .csv-Import können keine Personendaten importiert werden. Bei der Vorauswahl des Objekttyps "Personen" werden nur wenige Eigenschaften geladen.
[Bugfix]    Beim Erstellen von mehreren Objekten aus einem Template, werden zu viele Objekte erstellt.
[Bugfix]    [Properties] Dynamische Properties für Logischer Standort klappen nicht richtig und sind mehrfach verfügbar.
[Bugfix]    [Properties] Dynamische Properties für Spezifische Kategorien nachtragen (Monitor, Drucker, ...)
[Bugfix]    OCS Import Bug
[Bugfix]    RT-Connector TTS: Unkonventionelle Ausgabe von Exceptions
[Bugfix]    Quick Info kann nur globale Kategorien anzeigen
[Bugfix]    Workflows setzen eingegebene Uhrzeiten von hh:mm auf hh:00
[Bugfix]    Workflows können bearbeitet werden, obwohl diese bereits abgeschlossen sind
[Bugfix]    API: isys_user_session-Eintrag wird nach Beendigung des Requests nicht gelöscht
[Bugfix]    Template Erweiterungen aus Modulen werden nicht auf der Übersichtsseite angezeigt
[Bugfix]    API: Auslesen von convert-Properties nicht möglich
[Bugfix]    [Dialog-Admin] Dialog Tabelle für Workflow-Typen fehlt
[Bugfix]    Workflows anlegen - Usability
[Bugfix]    Workflow Benachrichtigungen enthalten fehlerhaften  Betreff.
[Bugfix]    API: Parameter "raw" führt zu Exception.
[Bugfix]    Validierung funktioniert nicht auf der Übersichtsseite.
[Bugfix]    Vertragszuweisung zeigt Sprachkonstanten an.
[Bugfix]    Objekt-Gruppe verursacht Fehler in Formfaktor ("!")
[Bugfix]    API: Identifier nach Möglichkeit auf Konstanten umstellen anstelle von IDs.
[Bugfix]    Die Einträge einiger DialogPlus-Felder können nicht gelöscht werden .
[Bugfix]    Bei der Filterwahl "Template" unter "my-doit" werden immer 0 Objekte angezeigt, selbst wenn Templates vorhanden sind.
[Bugfix]    Nagios: Wenn commands exportiert werden, befindet sich ein Leeraum zwischen command und Argument.
[Bugfix]    Nagios: Kontakte bei  host and service escalations werden nicht exportiert.
[Bugfix]    Kategorie "Anwendung/Installation" zeigt Zuweisungen zu Templates an.
[Bugfix]    Kein Datumsfeld kann geleert warden, es erscheint immer ein Validierungsfehler.
[Bugfix]    [API] Unable to read property Layer2 [Layer3 net assignment]
[Bugfix]    [Workflows] Datum/Zeit in Workflows sind nicht korrekt.
[Bugfix]    [Workflows] Klick auf den Abbrechen  Button führt zum Beenden des Workflows, wenn man sich im Editiermodus befindet.
[Bugfix]    [API] cmdb.objects liefert nicht das root location-Element
[Bugfix]    Druckansicht: Kompletten Standortpfad der Standortkategorie druckbar machen.
[Bugfix]    Beschreibungsfeld in Zugewiesener Arbeitsplatz lässt sich nicht speichern
[Bugfix]    Breadcrumb wird nicht mehr korrekt dargestellt
[Bugfix]    For v1.1 update: Objekt-Type Switch- and Blade Chassis need "Formfaktor" category
[Bugfix]    [API] Double-encoded data
[Bugfix]    Checkboxen in Javascript Listen verlieren ihre Auswahl, wenn der Filter oder die Sortierung verwendet wird.
[Bugfix]    [CMDB-Explorer]Zeigt Objekte ohne vorherigen Check des Status an.
[Bugfix]    [Report Manager ][CSV Export] kann nicht mit Zeilenumbrüchen umgehen.
[Bugfix]    Kein Statusfilter in globaler Beziehungsansicht.
[Bugfix]    Duplizieren eines Objekts ändert nicht den Hostnamen im neuen Objekt.
[Bugfix]    Laufzeit von Verträgen wird falsch berechnet.
[Bugfix]    Objekt-Browser Live-Suchergebnisse werden nicht nach erlaubten Objekttypen gefiltert.
[Bugfix]    Beschreibungsfeld der Kategorie "Varianten" kann nicht gespeichert werden (Feld ist immer leer)
[Bugfix]    Die Massenänderung ändert den CMDB-Status Ziel- Objekte
[Bugfix]    Das Symbol, um primäre Kontakte zu markieren schaltet auf grün / rot, wenn die Kontakte archiviert / gelöscht / wiederhergestellt werden.
[Bugfix]    CMDB-Status affektiert zugewiesenen Verträge in Listen.
[Bugfix]    Importierte Objekte verlieren ihre Modell-Informationen, wenn sie editiert werden.
[Bugfix]    Verwirrender GUI BUG in IP-Liste
[Bugfix]    Gruppierung von ein und demselben Gateway in Kategorie Routing
[Bugfix]    Datum "Letzte Änderung" wird nicht verändert, wenn die Änderung in der Listeneditierung vorgenommen wurde.
[Bugfix]    Kategorie "Restgarantie": Bug in der Berechnung der Restgarantie
[Bugfix]    Benutzerdefinierte Objekttypen können nicht in der Massenänderung für die Kontaktzuweisung verwendet werden.
[Bugfix]    Kategorie "Allgemein" wird nicht auf der Übersichtsseite gezeigt.
