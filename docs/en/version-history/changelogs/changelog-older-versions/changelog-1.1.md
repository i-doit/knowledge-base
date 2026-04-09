---
search:
  exclude: true
---
# Changelog 1.1
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Erweiterung]    Rundum erneurtes granulares Rechtesystem<br>
[Erweiterung]    CMDB Rechtestrukturen auf Basis von Objekttypen, Objekten und Kategorien<br>
[Erweiterung]    Rechtestrukturen für Module: Reports, Dialog-Admin, Im-/Export, Logbuch, Nagios, globale Suche, Templates & Verwaltung<br>
[Erweiterung]   Überarbeitete GUI für das Supernetz<br>
[Erweiterung]   Überarbeitete GUI für Layer3 Netz (Abfrage auf Netzkollision, Link zum Supernetz)<br>
[Erweiterung]   WYSIWYG Editor für alle Beschreibungsfelder<br>
[Erweiterung]   Maßgeblich verbesserte GUI für Validierungskonfiguration<br>
[Erweiterung]   Linke Navigation in variabler Größe<br>
[Erweiterung]   Objekt-Typ-Gruppen lassen sich bei niedriger Auflösung "scrollen"<br>
[Erweiterung]   Sehr viele DAO und UI Klassen wurden stark entschlackt (viel größerer Fokus auf die generischen Methoden)<br>
[Erweiterung]   Sehr viele kleinere GUI aufhübschungen (z.B. saubere Abstände, gleichmäßigere Border, ...)<br>
[Erweiterung]   Quick-Info Fenster zeigen mehr Inhalte an<br>
[Erweiterung]   Neue Buttons und Teilweise verbesserte Rückgabewerte unter "Cache / Datenbank"<br>
[Erweiterung]   Aufgehübschte und technisch neue "Dialog Listen" (Sehr viel platzsparender und Benutzerfreundlicher)<br>
[Erweiterung]    Modul Installation/ Updates im Admin-Center<br>
[Erweiterung]   Wenn Kontakte exportiert werden, muss man die Wahl haben, entweder den Kontaktanemen oder den Loginnamen zu exportieren.<br>
[Erweiterung]    Neuer  Objekttyp "Service Templates"<br>
[Erweiterung]    Neuer  Objekttyp "Host Templates"<br>
[Erweiterung]    Objekttypen im Statistiken Widget über config.inc.php konfigurierbar<br>
[Erweiterung]    Eine neue "Rechte"-Kategorie<br>
[Erweiterung]    Migration der rollenbasierten Rechte<br>
[Erweiterung]    Rechte Recovery Funktion<br>
[Erweiterung]    Objekterstellung in Objekt-/Datei- Browsern ist von den Rechten des Users abhängig<br>
[Erweiterung]    API-Authentifizierung<br>
[Erweiterung]    Löschen verwaister Rechte<br>
[Erweiterung]    Flexible Breitenanpassung des linken Menübaums<br>
[Erweiterung]    Neue API-Methode cmdb.filter.getUpdatedIPs<br>
[Erweiterung]    Kopplung zu Loginventory<br>
[Erweiterung]    Neue Nagios Struktur:<br>
[Erweiterung]      Nagios Punkt unter Extras<br>
[Erweiterung]        Nagios Kategorien befinden sich stehts in (gleichnamigen) Unter-Ordnern (Ausnahme: Gruppen, Personen, Personengruppen)<br>
[Erweiterung]        Nagios Kategorie lautet nun "Host-Definitionen"<br>
[Erweiterung]        Nagios Parameter aus der Softwarezuweisung wurden entfernt ? Zukünftig gibt es einen eigenen Objekt-Typen "Nagios Service" (Host- und Software Objekte verfügen über eine "Service Zuweisung" Kategorie)<br>
[Erweiterung]        NDO Parameter sind in eine eigene "NDO Parameter" Kategorie gewandert<br>
[Erweiterung]        Nagios Host- und Service Definitionen können über "Templates" verfügen ("Nagios Host Template" und "Nagios Service Template" sind eigene Objekt-Typen)<br>
[Erweiterung]        Service Dependencies wurden komplett erneuert und verfügen über eine sehr sprechende Dokumentation, da dieser Part sehr komplex ist<br>
[Erweiterung]          Export wurde technisch komplett neu entwickelt und gleichzeitig großzügig refakturiert<br>
[Erweiterung]        Sehr umfangreiche Debugging Features inkl. Export Log<br>
[Erweiterung]        Viele Bugfixes und nachgetragene Werte, die vorher nicht funktioniert oder ausgegeben wurden<br>
[Erweiterung]          Nagios Commands können über Kommentare (WYSIWYG) verfügen. Diese werden im Frontend neben den entsprechenden Feldern dargestellt<br>
[Erweiterung]          Sehr viele neue Felder zum detaillierten konfigurieren von Nagios Definitionen<br>
[Erweiterung]          Freitext Felder für eigene Definitionen in Nagios-Hosts und ?Services (Custom Object Vars)<br>
[Bugfix]    Clusterdienstzuweisung: Bei einer IP/Laufwerk/Freigabe im Dienst sollte diese automatisch bei der Zuweisung eingetragen sein.<br>
[Bugfix]    LDEV Server und Client: Die Multipath Technologie sollte bei den Pfaden mit angegeben werden können<br>
[Bugfix]    CSV-Import: Auto-Matching beim Wechsel des globalen Objekttyps<br>
[Bugfix]    CSV-Import: vor dem Überschreiben von Objekten deren Kategorien löschen<br>
[Bugfix]    Design kaputt nach Login und anschließender fehlender Berechtigung auf einen Mandanten<br>
[Bugfix]    Objektbrowser zeigt unter kürzlich erstellt auch archivierte an<br>
[Bugfix]    Horizontaler Scrollbalken unter "Extras" => "Templates" fehlt<br>
[Bugfix]    Druckansicht Beziehungen im Layer-3-Netz wirft Exception aus.<br>
[Bugfix]    Dashboard: Widget Statistiken verursacht aufgrund der Breite unten einen Scrollbalken [Bugfix]    Überzogene Lizenzschlüssel unter Lizenzen-Übersicht zeigen seltsame Werte. (Zum Beispiel 1/2 verwendet, aber bei den überzogenen Lizenzen sind trotzdem zwei Einträge)<br>
[Bugfix]    Eigene Reports: Sollen sie nach dem Namen sortiert werden, werden sie nach der Länge des Namens sortiert.<br>
[Bugfix]    Anschlüsse: Beim Anlegen eines neuen Ausgangs kann ich keinen dazugehörigen Eingang wählen.<br>
[Bugfix]    Setup/Update: Sicherstellen, dass MySQL strict mode nicht aktiv ist<br>
[Bugfix]    Bei der Listeneditierung werden einige Kategorien nicht korrekt bearbeitet .<br>
[Bugfix]    JDisc: Import wirft PHP Warnings aus.<br>
[Bugfix]    Controller: Update mit autoup geht nicht.<br>
[Bugfix]    Objektbrowser bspw. in Stromverbraucher in der Listeneditierung: Ist beim Öffnen des Objektbrowser ein Objekt vorausgewählt, werden die dazugehörigen Anschlüsse nicht angezeigt.<br>
[Bugfix]    Quick Info Cache entspricht nicht dem IST Stand.<br>
[Bugfix]    JDISC Import: Die Erkennung bestehender Objekte ist case sensitive<br>
[Bugfix]    Supernet Kategorie wird nie als gefüllt angezeigt (fett).<br>
[Bugfix]    Kategorie Dateiversion: Der Button "Archivieren" muss hier "Purge" heißen.<br>
[Bugfix]    Dateien: Purged man ein ganzes Dateiobjekt, werden die Dateien nicht vom Filesystem gelöscht.<br>
[Bugfix]    Import: Vergleich von Objektnamen sollte case insensitive sein.<br>
[Bugfix]    PHP-Fehler beim Speichern vom der Kategorie Layer3->Netz<br>
[Bugfix]    Erstellung eines Logbuch-Eintrags trotz keiner geänderten Werte<br>
[Bugfix]    General-Exception in "Alle Tickets"<br>
[Bugfix]    [Properties] Dynamische Properties für CPU erstellen<br>
[Bugfix]    [Properties] Dynamische Properties für Speicher erstellen<br>
[Bugfix]    Bug beim Versenden von E-Mails im Workflow Modul<br>
[Bugfix]    In Personengruppen kann man die Rechte nicht mehr zuweisen wenn man im Editier-Modus ist.<br>
[Bugfix]    Beim .csv-Import können keine Personendaten importiert werden. Bei der Vorauswahl des Objekttyps "Personen" werden nur wenige Eigenschaften geladen.<br>
[Bugfix]    Beim Erstellen von mehreren Objekten aus einem Template, werden zu viele Objekte erstellt.<br>
[Bugfix]    [Properties] Dynamische Properties für Logischer Standort klappen nicht richtig und sind mehrfach verfügbar.<br>
[Bugfix]    [Properties] Dynamische Properties für Spezifische Kategorien nachtragen (Monitor, Drucker, ...)<br>
[Bugfix]    OCS Import Bug<br>
[Bugfix]    RT-Connector TTS: Unkonventionelle Ausgabe von Exceptions<br>
[Bugfix]    Quick Info kann nur globale Kategorien anzeigen<br>
[Bugfix]    Workflows setzen eingegebene Uhrzeiten von hh:mm auf hh:00<br>
[Bugfix]    Workflows können bearbeitet werden, obwohl diese bereits abgeschlossen sind<br>
[Bugfix]    API: isys_user_session-Eintrag wird nach Beendigung des Requests nicht gelöscht<br>
[Bugfix]    Template Erweiterungen aus Modulen werden nicht auf der Übersichtsseite angezeigt<br>
[Bugfix]    API: Auslesen von convert-Properties nicht möglich<br>
[Bugfix]    [Dialog-Admin] Dialog Tabelle für Workflow-Typen fehlt<br>
[Bugfix]    Workflows anlegen - Usability<br>
[Bugfix]    Workflow Benachrichtigungen enthalten fehlerhaften  Betreff.<br>
[Bugfix]    API: Parameter "raw" führt zu Exception.<br>
[Bugfix]    Validierung funktioniert nicht auf der Übersichtsseite.<br>
[Bugfix]    Vertragszuweisung zeigt Sprachkonstanten an.<br>
[Bugfix]    Objekt-Gruppe verursacht Fehler in Formfaktor ("!")<br>
[Bugfix]    API: Identifier nach Möglichkeit auf Konstanten umstellen anstelle von IDs.<br>
[Bugfix]    Die Einträge einiger DialogPlus-Felder können nicht gelöscht werden .<br>
[Bugfix]    Bei der Filterwahl "Template" unter "my-doit" werden immer 0 Objekte angezeigt, selbst wenn Templates vorhanden sind.<br>
[Bugfix]    Nagios: Wenn commands exportiert werden, befindet sich ein Leeraum zwischen command und Argument.<br>
[Bugfix]    Nagios: Kontakte bei  host and service escalations werden nicht exportiert.<br>
[Bugfix]    Kategorie "Anwendung/Installation" zeigt Zuweisungen zu Templates an.<br>
[Bugfix]    Kein Datumsfeld kann geleert warden, es erscheint immer ein Validierungsfehler.<br>
[Bugfix]    [API] Unable to read property Layer2 [Layer3 net assignment]<br>
[Bugfix]    [Workflows] Datum/Zeit in Workflows sind nicht korrekt.<br>
[Bugfix]    [Workflows] Klick auf den Abbrechen  Button führt zum Beenden des Workflows, wenn man sich im Editiermodus befindet.<br>
[Bugfix]    [API] cmdb.objects liefert nicht das root location-Element<br>
[Bugfix]    Druckansicht: Kompletten Standortpfad der Standortkategorie druckbar machen.<br>
[Bugfix]    Beschreibungsfeld in Zugewiesener Arbeitsplatz lässt sich nicht speichern<br>
[Bugfix]    Breadcrumb wird nicht mehr korrekt dargestellt<br>
[Bugfix]    For v1.1 update: Objekt-Type Switch- and Blade Chassis need "Formfaktor" category<br>
[Bugfix]    [API] Double-encoded data<br>
[Bugfix]    Checkboxen in Javascript Listen verlieren ihre Auswahl, wenn der Filter oder die Sortierung verwendet wird.<br>
[Bugfix]    [CMDB-Explorer]Zeigt Objekte ohne vorherigen Check des Status an.<br>
[Bugfix]    [Report Manager ][CSV Export] kann nicht mit Zeilenumbrüchen umgehen.<br>
[Bugfix]    Kein Statusfilter in globaler Beziehungsansicht.<br>
[Bugfix]    Duplizieren eines Objekts ändert nicht den Hostnamen im neuen Objekt.<br>
[Bugfix]    Laufzeit von Verträgen wird falsch berechnet.<br>
[Bugfix]    Objekt-Browser Live-Suchergebnisse werden nicht nach erlaubten Objekttypen gefiltert.<br>
[Bugfix]    Beschreibungsfeld der Kategorie "Varianten" kann nicht gespeichert werden (Feld ist immer leer)<br>
[Bugfix]    Die Massenänderung ändert den CMDB-Status Ziel- Objekte<br>
[Bugfix]    Das Symbol, um primäre Kontakte zu markieren schaltet auf grün / rot, wenn die Kontakte archiviert / gelöscht / wiederhergestellt werden.<br>
[Bugfix]    CMDB-Status affektiert zugewiesenen Verträge in Listen.<br>
[Bugfix]    Importierte Objekte verlieren ihre Modell-Informationen, wenn sie editiert werden.<br>
[Bugfix]    Verwirrender GUI BUG in IP-Liste<br>
[Bugfix]    Gruppierung von ein und demselben Gateway in Kategorie Routing<br>
[Bugfix]    Datum "Letzte Änderung" wird nicht verändert, wenn die Änderung in der Listeneditierung vorgenommen wurde.<br>
[Bugfix]    Kategorie "Restgarantie": Bug in der Berechnung der Restgarantie<br>
[Bugfix]    Benutzerdefinierte Objekttypen können nicht in der Massenänderung für die Kontaktzuweisung verwendet werden.<br>
[Bugfix]    Kategorie "Allgemein" wird nicht auf der Übersichtsseite gezeigt.<br>
