# Changelog 1.7

[Neue Funktion] Globale Suchfunktion über die JSON-RPC API (Methode idoit.search)  
[Neue Funktion] Check_MK: Export um "Sites" und "Distributed Monitoring" erweitern  
[Neue Funktion] Suchindizierung als Controller Script (search_index)  
[Neue Funktion] Controller Script zur Regenerierung sämtlicher (impliziter) Beziehungen  
[Neue Funktion] CSV Export von Kategorielisten  
[Neue Funktion] Anzeige von Wartungsfenstern im Kalender Dashboard Widget  
[Neue Funktion] Erweiterung der Standort Kategorie um GPS Koordinaten  
[Neue Funktion] Neues Feld in Kategorie Allgemein: Tag  
[Neue Funktion] Übernahme "Last Login User" aus h-inventory  
[Neue Funktion] Neue Kategorie "Letzter eingeloggter Benutzer"  
[Neue Funktion] Neue Kategorie VRRP/HSRP  
[Neue Funktion] Mehrfachzuweisung bei Dialog-Plus Feldern in Benutzerdefinierten Kategorien  
[Neue Funktion] Autovervollständigung in globler Suche  
[Verbesserung]  Check_MK: Export von verknüpften Kontakten mit Hilfe ihrer Rolle  
[Verbesserung]  Monitoring: Erweiterung der Export Konfiguration um spezifische Optionen  
[Verbesserung]  Check_MK: Clustermitglieder mit exportieren  
[Verbesserung]  Konfiguration des IP-Adressen exports nach Check_MK  
[Verbesserung]  Widget Service Konsistenzprüfung: Konfiguration zu prüfender Services  
[Verbesserung]  Option "Leere Werte ignorieren" verfügbar für den CSV-Import  
[Verbesserung]  Umbenennung Button "Importieren" beim Active Directory Server Import in "Ergebnisse Laden"  
[Verbesserung]  Neue Spalte "Software Art" in der Listenansicht der Kategorie Softwarezuweisung  
[Verbesserung]  Aktivierung und Deaktivierung der API auf Mandantenbasis   
[Verbesserung]  Löschen in der Report View: Keine Beziehungen  
[Verbesserung]  Verbessertes Stacking  
[Verbesserung]  Kategorie Logischer Standort nun konfigurierbar für Übersichtsseite  
[Verbesserung]  Kategorie E-Mail Adressen nun auch auf der Übersichtsseite verfügbar  
[Verbesserung]  Möglichkeit zum direkten Öffnen von duplizierten Objekten  
[Verbesserung]  Kategorie Zugewiesener Arbeitsplatz nun konfigurierbar für  Übersichtsseite  
[Verbesserung]  Erweiterung der Kategorie Buchhaltung (Kostenträger, Lieferschein, Beschaffungsart, Lieferdatum)  
[Verbesserung]  Hersteller bedingt nun Modell in Kategorie Gerät (lok. Massenspeicher)  
[Verbesserung]  Entfernen der Validierungsoption "Eindeutig (pro Objekt)" bei Single-Value-Kategorien  
[Verbesserung]  Löschen-Schaltfläche in Objektbild löscht das Bild umgehend  
[Verbesserung]  Neue verbesserte globale Suche  
[Verbesserung]  Registry in Settings Struktur übernehmen  
[Verbesserung]  Eindeutige Identifizierung von H-Inventory Importen per Seriennummer über Kategorie "Data Source"  
[Verbesserung]  Verbesserte Performance in Objekt Listenansichten  
[Verbesserung]  Rechtesystem: Objekttypen per Mehrfachauswahl  
[Verbesserung]  Einige Verbesserungen in der IP-Adressverwaltung  
[Verbesserung]  Anzeige der Inventarnummer in Listenansicht Softwarezuweisung  
[Verbesserung]  Erschaffung einer Möglichkeit für Module sich in die globale Suche einzuklinken  
[Verbesserung]  Check_MK: Dynamische Hostmerkmale um eine Standard Konfiguration erweitern  
[Verbesserung]  Umbenennung der Kategorie "Zugewiesene Endgeräte" in "Arbeitsplatzkomponenten"  
[Änderung]      Achtung: Geänderte MariaDB Mindestvoraussetzung: Version 10.0  
[Änderung]      Achtung: Geänderte MySQL Mindestvoraussetzung: Version 5.6  
[Änderung]      Umstellung des MySQL PHP Backends auf MySQLi  
[Änderung]      Extrahierung der Api als separates Modul, Achtung: Api muss ab 1.8 separat installiert werden!  
[Bug]           PHP Error "strlen() expects parameter 1 to be string" in Kategorie Servicezuweisung  
[Bug]           Datenbankschema in Softwarezuweisung lässt sich über die Listeneditierung nicht setzen  
[Bug]           Vordefinierte Gewichtung für Beziehungen wird beim Erstellen von neuen Beziehungen nicht berücksichtigt  
[Bug]           Umlaute werden in DialogPlus-Feldern falsch dargestellt  
[Bug]           Ansicht der SLA-Kategorie zeigt falsche Checkboxen nach Abbruch der Editierung  
[Bug]           Dupliziert man ein CMDB-Explorer Profil fehlt der Knopf um dieses als Standard Profil zu definieren  
[Bug]           CSV Import bricht mit Fehlermeldung ab  
[Bug]           Versionsnummer in Kategorie Betriebssystem wird nicht gespeichert  
[Bug]           Attribut "Gewähltes Objekt (Freigabezugriff) führt dazu, dass der Objekt-Titel in Objekt-Liste nicht dargestellt wird.  
[Bug]           Rechte werden aufgespalten auf mehrere einzelne Rechte  
[Bug]           Fehler beim Aufruf von "Meine Workflows"  
[Bug]           Varianten werden in der Softwarezuweisung bei der Auswahl eines Objekts nicht geladen  
[Bug]           Fehler beim Duplizieren von Objekten mit mehreren Kontaktzuweisungen  
[Bug]           Standortzuweisungen erzeugen keine Beziehungen  
[Bug]           Tabellen in der QR-Code-Beschreibung werden gelöscht  
[Bug]           Limit für Objekttypgruppen aufheben und Menüband besser nutzbar machen  
[Bug]           Überarbeitete englische Übersetzung "bequest" in Kategorie "Installation" : Heisst nun "inheritance"  
[Bug]           Dialog-Admin: Liste im Navigationsbaum ist nicht richtig sortiert, Knoten sind schlecht benannt  
[Bug]           "Expand all" im Logbuch wechselt den Expandierungsstatus der Einträge, statt alle zu öffnen  
[Bug]           Theme lässt sich über GET Parameter ändern  
[Bug]           Fehlermeldung nicht erkennbar in Dialog-Fenster "Neue Beziehungsart hinzufügen"  
[Bug]           Hinweis auf ungültige Lizenz trotz erfolgreicher Aktivierung  
[Bug]           Objekt-Filter in der Konfiguration des CMDB-Explorer Profils hat keine Auswirkung  
[Bug]           Umbenennung des Wertes für "Häufigkeit" in "Wiederholung" (Workflow Typen)  
[Bug]           Report-View "CMDB-Status Änderungen" stellt nicht alle Änderungen dar  
[Bug]           Reports mit benutzerdefinierten Kategorien geben Objekte fälschlicherweise mehrfach aus  
[Bug]           Sortierung der Objekttypen-Auswahl in der Konfiguration einer benutzerdefinierten Kategorie ist nicht alphabetisch  
[Bug]           Keine Kategorie-Auswahl möglich mit DropDown-Liste nach Deselektierung von "Alle"  
[Bug]           Beschreibungsfelder sind immer bearbeitbar, wenn WYSIWYG Editoren deaktiviert sind  
[Bug]           Report Manager: Bedingungen eines Reports werden nicht richtig geladen sobald man einen Teil der Bedingung entfernt und speichert.  
