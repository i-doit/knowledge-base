# Changelog 1.7

[Neue Funktion] Globale Suchfunktion über die JSON-RPC API (Methode idoit.search)<br>
[Neue Funktion] Check_MK: Export um "Sites" und "Distributed Monitoring" erweitern<br>
[Neue Funktion] Suchindizierung als Controller Script (search_index)<br>
[Neue Funktion] Controller Script zur Regenerierung sämtlicher (impliziter) Beziehungen<br>
[Neue Funktion] CSV Export von Kategorielisten<br>
[Neue Funktion] Anzeige von Wartungsfenstern im Kalender Dashboard Widget<br>
[Neue Funktion] Erweiterung der Standort Kategorie um GPS Koordinaten<br>
[Neue Funktion] Neues Feld in Kategorie Allgemein: Tag<br>
[Neue Funktion] Übernahme "Last Login User" aus h-inventory<br>
[Neue Funktion] Neue Kategorie "Letzter eingeloggter Benutzer"<br>
[Neue Funktion] Neue Kategorie VRRP/HSRP<br>
[Neue Funktion] Mehrfachzuweisung bei Dialog-Plus Feldern in Benutzerdefinierten Kategorien<br>
[Neue Funktion] Autovervollständigung in globler Suche<br>
[Verbesserung]  Check_MK: Export von verknüpften Kontakten mit Hilfe ihrer Rolle<br>
[Verbesserung]  Monitoring: Erweiterung der Export Konfiguration um spezifische Optionen<br>
[Verbesserung]  Check_MK: Clustermitglieder mit exportieren<br>
[Verbesserung]  Konfiguration des IP-Adressen exports nach Check_MK<br>
[Verbesserung]  Widget Service Konsistenzprüfung: Konfiguration zu prüfender Services<br>
[Verbesserung]  Option "Leere Werte ignorieren" verfügbar für den CSV-Import<br>
[Verbesserung]  Umbenennung Button "Importieren" beim Active Directory Server Import in "Ergebnisse Laden"<br>
[Verbesserung]  Neue Spalte "Software Art" in der Listenansicht der Kategorie Softwarezuweisung<br>
[Verbesserung]  Aktivierung und Deaktivierung der API auf Mandantenbasis<br>
[Verbesserung]  Löschen in der Report View: Keine Beziehungen<br>
[Verbesserung]  Verbessertes Stacking<br>
[Verbesserung]  Kategorie Logischer Standort nun konfigurierbar für Übersichtsseite<br>
[Verbesserung]  Kategorie E-Mail Adressen nun auch auf der Übersichtsseite verfügbar<br>
[Verbesserung]  Möglichkeit zum direkten Öffnen von duplizierten Objekten<br>
[Verbesserung]  Kategorie Zugewiesener Arbeitsplatz nun konfigurierbar für  Übersichtsseite<br>
[Verbesserung]  Erweiterung der Kategorie Buchhaltung (Kostenträger, Lieferschein, Beschaffungsart, Lieferdatum)<br>
[Verbesserung]  Hersteller bedingt nun Modell in Kategorie Gerät (lok. Massenspeicher)<br>
[Verbesserung]  Entfernen der Validierungsoption "Eindeutig (pro Objekt)" bei Single-Value-Kategorien<br>
[Verbesserung]  Löschen-Schaltfläche in Objektbild löscht das Bild umgehend<br>
[Verbesserung]  Neue verbesserte globale Suche<br>
[Verbesserung]  Registry in Settings Struktur übernehmen<br>
[Verbesserung]  Eindeutige Identifizierung von H-Inventory Importen per Seriennummer über Kategorie "Data Source"<br>
[Verbesserung]  Verbesserte Performance in Objekt Listenansichten<br>
[Verbesserung]  Rechtesystem: Objekttypen per Mehrfachauswahl<br>
[Verbesserung]  Einige Verbesserungen in der IP-Adressverwaltung<br>
[Verbesserung]  Anzeige der Inventarnummer in Listenansicht Softwarezuweisung<br>
[Verbesserung]  Erschaffung einer Möglichkeit für Module sich in die globale Suche einzuklinken<br>
[Verbesserung]  Check_MK: Dynamische Hostmerkmale um eine Standard Konfiguration erweitern<br>
[Verbesserung]  Umbenennung der Kategorie "Zugewiesene Endgeräte" in "Arbeitsplatzkomponenten"<br>
[Änderung]      Achtung: Geänderte MariaDB Mindestvoraussetzung: Version 10.0<br>
[Änderung]      Achtung: Geänderte MySQL Mindestvoraussetzung: Version 5.6<br>
[Änderung]      Umstellung des MySQL PHP Backends auf MySQLi<br>
[Änderung]      Extrahierung der Api als separates Modul, Achtung: Api muss ab 1.8 separat installiert werden!<br>
[Bug]           PHP Error "strlen() expects parameter 1 to be string" in Kategorie Servicezuweisung<br>
[Bug]           Datenbankschema in Softwarezuweisung lässt sich über die Listeneditierung nicht setzen<br>
[Bug]           Vordefinierte Gewichtung für Beziehungen wird beim Erstellen von neuen Beziehungen nicht berücksichtigt<br>
[Bug]           Umlaute werden in DialogPlus-Feldern falsch dargestellt<br>
[Bug]           Ansicht der SLA-Kategorie zeigt falsche Checkboxen nach Abbruch der Editierung<br>
[Bug]           Dupliziert man ein CMDB-Explorer Profil fehlt der Knopf um dieses als Standard Profil zu definieren<br>
[Bug]           CSV Import bricht mit Fehlermeldung ab<br>
[Bug]           Versionsnummer in Kategorie Betriebssystem wird nicht gespeichert<br>
[Bug]           Attribut "Gewähltes Objekt (Freigabezugriff) führt dazu, dass der Objekt-Titel in Objekt-Liste nicht dargestellt wird.<br>
[Bug]           Rechte werden aufgespalten auf mehrere einzelne Rechte<br>
[Bug]           Fehler beim Aufruf von "Meine Workflows"<br>
[Bug]           Varianten werden in der Softwarezuweisung bei der Auswahl eines Objekts nicht geladen<br>
[Bug]           Fehler beim Duplizieren von Objekten mit mehreren Kontaktzuweisungen<br>
[Bug]           Standortzuweisungen erzeugen keine Beziehungen<br>
[Bug]           Tabellen in der QR-Code-Beschreibung werden gelöscht<br>
[Bug]           Limit für Objekttypgruppen aufheben und Menüband besser nutzbar machen<br>
[Bug]           Überarbeitete englische Übersetzung "bequest" in Kategorie "Installation" : Heisst nun "inheritance"<br>
[Bug]           Dialog-Admin: Liste im Navigationsbaum ist nicht richtig sortiert, Knoten sind schlecht benannt<br>
[Bug]           "Expand all" im Logbuch wechselt den Expandierungsstatus der Einträge, statt alle zu öffnen<br>
[Bug]           Theme lässt sich über GET Parameter ändern<br>
[Bug]           Fehlermeldung nicht erkennbar in Dialog-Fenster "Neue Beziehungsart hinzufügen"<br>
[Bug]           Hinweis auf ungültige Lizenz trotz erfolgreicher Aktivierung<br>
[Bug]           Objekt-Filter in der Konfiguration des CMDB-Explorer Profils hat keine Auswirkung<br>
[Bug]           Umbenennung des Wertes für "Häufigkeit" in "Wiederholung" (Workflow Typen)<br>
[Bug]           Report-View "CMDB-Status Änderungen" stellt nicht alle Änderungen dar<br>
[Bug]           Reports mit benutzerdefinierten Kategorien geben Objekte fälschlicherweise mehrfach aus<br>
[Bug]           Sortierung der Objekttypen-Auswahl in der Konfiguration einer benutzerdefinierten Kategorie ist nicht alphabetisch<br>
[Bug]           Keine Kategorie-Auswahl möglich mit DropDown-Liste nach Deselektierung von "Alle"<br>
[Bug]           Beschreibungsfelder sind immer bearbeitbar, wenn WYSIWYG Editoren deaktiviert sind<br>
[Bug]           Report Manager: Bedingungen eines Reports werden nicht richtig geladen sobald man einen Teil der Bedingung entfernt und speichert.<br>
