---
search:
  exclude: true
---
# Changelog 1.9.2
<!-- cSpell:disable -->
<!-- markdownlint-disable MD052 -->
[Verbesserung]  Neues Feld in Kategorie "Vertrag" zur Angabe der Kostenberechnung<br>
[Verbesserung]  Optionale Aktualisierung des Objekttyps von Modulen im JDisc-Import<br>
[Verbesserung]  Suche: Einstellung zur Änderung des Highlightings<br>
[Verbesserung]  Add-on Versions Check im Update Prozess immer aktivieren<br>
[Verbesserung]  Zusammenspiel zwischen Kategorie Logischer Standort und Standort beim Objekttyp Arbeitsplatz<br>
[Verbesserung]  install.sh bekommt den Parameter -u zur Angabe des MySQL Benutzernamens<br>
[Verbesserung]  Spezifische Kategorie Netz: Numerische Sortierung von IP-Adressen in Feld Standardgateway<br>
[Bug]           Fehlerhafte Darstellung von Chassis in Schränken bei der Darstellung in der Raumübersicht<br>
[Bug]           Standortvergabe für ein neues Objekt lädt nicht die Felder zur Platzierung im Schrank<br>
[Bug]           Formfaktor in der Schrankvisualisierung ist immer "undefined".<br>
[Bug]           Fehler bei der Verwendung einer Bedingung auf das Attribut Rolle, wenn nur ein Attribut ausgegeben wird<br>
[Bug]           Feld Anschlussart nicht mehr in Listenansicht nutzbar<br>
[Bug]           Information "To be filled by O.E.M." befindet sich nicht auf der Blacklist des H-Inventory Imports und verursacht falsches Matching<br>
[Bug]           Report Manager: Buchhaltung - Investitionskosten nicht in Bedingungen vorhanden<br>
[Bug]           Objekt-IDs werden teilweise in Reports als Datum ausgegeben<br>
[Bug]           Listen: Datumswerte aus benutzerdefinierten Kategorien werden immer im englischen Format angezeigt<br>
[Bug]           Verwendung einer Bedingung mit dem Attribut "Rolle" führt gelegentlich zu mehrfachen Ausgaben von Objekten<br>
[Bug]           Attribute aus spezifischen Kategorien werden nicht für die Listenansicht übernommen<br>
[Bug]           Aufruf eines Objekts in neuem Tab nicht möglich, wenn der Titel ein Komma enthält<br>
[Bug]           Erste Hostadresse eines Objekts wird nicht automatisch als primär gekennzeichnet<br>
[Bug]           Schrankansicht hat keine Definition zur Sortierung der Höheneinheiten (Aufsteigend/Absteigend)<br>
[Bug]           Import der Position im Schrank über den CSV-Import nicht möglich<br>
[Bug]           Fehler bei der Verwendung der Bereinigungsfunktionen unter "Cache / Datenbank"<br>
[Bug]           Report Manager: Attribute "Bezeichnung" und "Beschreibung" aus Logbuch-Kategorie nicht auswählbar<br>
[Bug]           "IP-Netz laden" aus Kategorie Hostadresse gibt unvollständige Daten aus.<br>
[Bug]           Firma eines Kontakts wird gelöscht, wenn ein Objekt mit der Zuweisung dieses Kontakts dupliziert wird<br>
[Bug]           Infoleiste am unteren Bildschirmrand zeigt immer das Datum "01.01.1970 01:00 [..]"<br>
[Bug]           Verwendung des Attributs "Ereignis" in Kategorie "Logbuch" im Report-Manager nicht möglich<br>
[Bug]           Suche: QuickView von Relationsobjekten funktioniert nicht<br>
[Bug]           CSV-Dateien mit einem + im Titel können nicht wieder heruntergeladen werden<br>
[Bug]           Fehler beim Speichern der Kategorie "Port" über die Listeneditierung<br>
[Bug]           Zusätzliche Spalten in der Ausgabe eines Reports bei der Verwendung verknüpfter Attribute<br>
[Bug]           Restgarantie lässt sich in Objektlisten nicht anzeigen<br>
[Bug]           Inhalte in "Instanz / Oracle Datenbank" können unter bestimmten Umständen nicht gespeichert werden<br>
[Bug]           Fehler beim Bearbeiten von Anschlüssen in der Listeneditierung<br>
[Bug]           Titel eines Reports im PDF-Export lautet "i", wenn der Report Sonderzeichen im Titel verwendet<br>
[Bug]           DropDown für Rolle in Kontaktzuweisung stellt längere Bezeichnungen nicht vollständig dar<br>
[Bug]           Unterkategorien aus Ordnerkategorien können nicht verrechtet werden<br>
[Bug]           i-doit verwendet falschen Unix Socket<br>
[Bug]           XML-Import: Experteneinstellung "system.dir.import-uploads" ohne Wirkung<br>
[Bug]           Kategorie Virtuelle Switche: Gastsysteme werden unter den Portgruppen nicht angezeigt<br>
[Bug]           Listen: Anzeige von Servicezuweisungen ist nicht möglich<br>
[Bug]           CSV-Import: Import und Zuweisung von mehreren Attributen gleichzeitig nicht möglich (Dialog + Mehrfachauswahl)<br>
[Bug]           Einige Language-Konstanten werden unter JDisc-Profile angezeigt<br>
[Bug]           Report Manager: Falsche Konstante bei Nutzung von Beschreibungen aus benutzerdefinierten Kategorien<br>
[Bug]           Kabellänge wird nicht über den CSV-Import importiert<br>
[Bug]           Zuweisung von Service-Komponenten über die Listeneditierung nicht möglich.<br>
[Bug]           Recht "Kategorien in Objekttyp" ermöglicht nicht den Zugriff auf die Übersichtseite<br>
[Bug]           Dashboard-Rechner zählt bei der Netzwerk-Bandbreite falsch<br>
[Bug]           Mehrfache software zuweisung leitet nicht auf Listenansicht um, nachdem gespeichert wurde<br>
[Bug]           Inhalte im Feld Beschreibung im Logbuch-Eintrag lassen sich über den Report Manager nicht auswerten<br>
[Bug]           Logging-Einstellungen haben keine Auswirkungen, wenn das Logging deaktiviert wird<br>
[Bug]           Bei Eingabe eines Leerzeichens unter "Export Vorlagen" verschwindet die Anzeige im Hauptbereich<br>
[Bug]           Höheneinheit im Report falsch<br>
[Bug]           Horizontale Scrollleiste fehlt in Kategorie "Anschlüsse"<br>
[Bug]           Vergleichsoperatoren nicht korrekt erfasst bei ersten Hinzufügen in Report-Definition<br>
[Bug]           Listeneditierung - Kategorie "Verträge" gibt Fehlermeldung beim Speichern aus<br>
[Bug]           JDisc Import: Bestehende Betriebssysteme werden nicht überprüft und werden bei jedem Import neu erstellt<br>
