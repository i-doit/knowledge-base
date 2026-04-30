---
title: "CSV-Datenimport"
description: "Mit dem CSV-Datenimport überfuehrst du tabellarische Daten aus Microsoft Excel, OpenOffice oder LibreOffice Calc direkt nach i-doit."
icon:
status:
lang: de
---
# CSV-Datenimport

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

!!! example ""
    Ein Praxisbeispiel für den automatisierten Datenimport findest du auf unserem [Blog](https://www.i-doit.com/blog/automatisierter-csv-import-mit-i-doit/)

Mit dem CSV-Datenimport überführst du tabellarische Daten aus Microsoft Excel, OpenOffice oder LibreOffice Calc direkt nach i-doit. So ersetzt du unübersichtliche Tabellenkalkulationen durch eine strukturierte IT-Dokumentation.

## Voraussetzungen

Die CSV-Datei muss im `.csv`-Format mit **UTF-8**-Kodierung vorliegen. Falls deine Tabellenkalkulation die Kodierung beim Speichern nicht festlegen kann, konvertiere die Datei nachträglich mit einem Texteditor. Im Screenshot siehst du die Funktion **Konvertiere zu UTF-8** in [Notepad++](https://notepad-plus-plus.org/):

[![Kodierung im Notepad++](../../assets/images/de/daten-konsolidieren/csv-import/1-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/1-csvi.png)

Der Aufbau einer verwendbaren .csv\-Datei sieht in etwa so aus wie in folgendem Beispiel:

[![Aufbau einer CSV](../../assets/images/de/daten-konsolidieren/csv-import/2-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/2-csvi.png)

Die erste Zeile dient als Überschrift und identifiziert das jeweilige [Attribut](../../grundlagen/struktur-it-dokumentation.md). Jede weitere Zeile entspricht einem [Objekt](../../glossar.md) in der IT-Dokumentation.

Alternativ kannst du CSV-Dateien auch mit einem Texteditor erstellen.

[![CSV im Texteditor](../../assets/images/de/daten-konsolidieren/csv-import/3-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/3-csvi.png)

Sobald die `.csv`-Datei vorbereitet ist, kannst du mit dem Import beginnen.

## Datei hochladen

Den CSV-Datenimport findest du unter **Extras → Import → CSV Import**. Eine Vorab-Konfiguration ist nicht nötig.

1. Klicke auf **Datei auswählen** und lade deine `.csv`-Datei hoch.
2. Die Datei erscheint in der Liste. Fahre mit der Maus über die Zeile -- es werden die Aktionen **Für Import verwenden**, **Datei herunterladen** und **Datei löschen** angezeigt.
3. Klicke auf **Für Import verwenden**, um zum nächsten Schritt zu gelangen.

[![CSV für den Import verwenden](../../assets/images/de/daten-konsolidieren/csv-import/4-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/4-csvi.png)

## Optionen festlegen

Bevor du das Mapping konfigurierst, legst du einige Optionen fest.

[![CSV Import Optionen](../../assets/images/de/daten-konsolidieren/csv-import/5-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/5-csvi.png)

### Objekttyp

Wählst du unter **Globaler Objekttyp** einen [Objekttypen](../../grundlagen/struktur-it-dokumentation.md) aus, importiert i-doit alle Objekte der `.csv`-Datei als diesen Typ.

Ohne globalen Objekttyp benötigst du in der CSV-Datei eine zusätzliche Spalte mit der [Datenbank-Konstante](../../grundlagen/struktur-it-dokumentation.md) des Objekttyps. So kannst du verschiedene Objekttypen (Client, Drucker, Monitor usw.) in einer Datei importieren. Diese Angabe muss für alle Objekte vorhanden sein -- eine Mischform ist nicht möglich.

### Trennzeichen, Überschriften und Default-Template

Verwendest du ein anderes **Trennzeichen** als das Semikolon (`;`), gibst du es hier an. Ohne Überschriften-Zeile deaktivierst du diese Option -- dann behandelt i-doit die erste Zeile als Objekt. Optional werden Objekte mit den Daten aus dem [Default Template](../../effizientes-dokumentieren/templates.md) angelegt.

### Leerwerte

Beim Aktualisieren bestehender Objekte bestimmst du mit **Leerwerte übernehmen**, wie leere Zellen behandelt werden:

*   **Ja**: Leere Zellen überschreiben bestehende Attribute.
*   **Nein**: Leere Zellen werden ignoriert, bestehende Attribute bleiben erhalten.

### Umgang mit Listen-Kategorien (Multi-Value)

Lege fest, wie [Listen-Kategorien](../../grundlagen/struktur-it-dokumentation.md) (Multi-Value) in der `.csv`-Datei abgebildet sind. Beruehrt dein Import keine solchen Kategorien, überspringe diesen Abschnitt.

Im Beispiel oben taucht "Client 02" mehrfach auf: Dieser Client hat zwei CPUs, daher soll die Listen-Kategorie **CPU** zwei Einträge erhalten. Du erreichst das durch eine zusätzliche **Zeile** -- gleichbleibende [Attribute](../../glossar.md) musst du dort nicht wiederholen.

Alternativ kannst du Multi-Value-Einträge in einer **Spalte** oder als **kommaseparierte** Liste in einer Zelle hinterlegen.

Bei bereits vorhandenen Kategorie-Einträgen stehen zusätzliche Optionen zur Verfügung:

*   **Erzeuge neue Kategorieeinträge nur, wenn die Kategorie bisher keine Einträge enthält (neu anlegen, wenn leer)**
*   **Erzeuge neue Kategorieeinträge, bestehende bleiben erhalten (anhängen)**
*   **Erzeuge neue Kategorieeinträge, bestehende Einträge werden komplett entfernt (ersetzen)**

Klicke auf **Mapping vorbereiten**, um zum nächsten Schritt zu gelangen.

## Identifizierungsmerkmale festlegen

Wähle ein [**Objekt-Matching Profil**](../objekt-identifizieren-bei-importen.md) aus, wenn du bestehende Objekte aktualisieren möchtest. Das Profil kannst du jederzeit nachträglich bearbeiten.

[![Objekte identifizieren](../../assets/images/de/daten-konsolidieren/csv-import/6-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/6-csvi.png)

## Zuweisung von Spalten zu Attributen

Jede Spalte deiner CSV-Datei erhält im Mapping eine eigene Zeile. So verknüpfst du sie Schritt für Schritt mit i-doit-Attributen:

1. Klicke auf das Stift-Icon neben einer Spalte.
2. Wähle im Drop-Down das passende Attribut aus oder tippe die Bezeichnung ein, um Vorschläge zu erhalten.
3. Bestätige mit **Übernehmen**.

Wiederhole den Vorgang für alle relevanten Spalten. Zuweisungen kannst du nachträglich loesen. Spalten ohne Zuweisung ignoriert der Import.

[![Zuweisungen von Attributen](../../assets/images/de/daten-konsolidieren/csv-import/7-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/7-csvi.png)

## Pflichtangaben

**Objekt-Titel** und **Objekttyp** sind Pflichtangaben:

*   Mit globalem Objekttyp musst du nur den [Objekt-Titel](../objekt-identifizieren-bei-importen.md) zuweisen.
*   Ohne globalen Objekttyp muss eine Spalte den Objekttyp als **Datenbank-Konstante** enthalten (z. B. `C__OBJTYPE__SERVER`). Die Bezeichnung (z. B. "Server") reicht **nicht** aus.

## Profil anlegen

Möchtest du kuenftig CSV-Dateien mit identischem Spaltenaufbau importieren, speichere die aktuelle Mapping-Konfiguration als Profil. So sparst du dir wiederkehrende Zuweisungen.

Gespeicherte Profile lädt oder löscht du über die Optionen im oberen Bereich. Ein bestehendes Profil kannst du ohne Namensangabe überschreiben.

## Datenimport starten

Unterhalb des Mappings legst du den **Detailgrad des Loggings** fest. Detailliertes Logging hilft beim [Troubleshooting](../../administration/troubleshooting/index.md), erhoet aber Dauer und Ressourcenbedarf.

Klicke auf **Importieren**, um den Import zu starten. Nach Abschluss zeigt i-doit eine Zusammenfassung mit direkten Links zu den importierten oder aktualisierten Objekten. Diese kannst du jederzeit manuell anpassen.

[![Liste der importierten Objekte](../../assets/images/de/daten-konsolidieren/csv-import/8-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/8-csvi.png)

## Objekttypen beim CSV Import überschreiben

Mit der Option **Der CSV Import kann den Objekttyp überschreiben?** änderst du Objekttypen direkt während des Imports.

[![Überschreiben Option](../../assets/images/de/daten-konsolidieren/csv-import/11-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/11-csvi.png)

!!! note "Diese Option ist in den Experteneinstellungen als `import.csv.overwrite-objecttype` zu finden."

!!! warning "Diese Option wird durch eine weitere Option blockiert. Wenn du das Überschreiben der Objekttypen aktivierst, musst du die Option **SYS-ID nur lesbar** auf **Nein** stellen. In den Experteneinstellungen ist diese Option als `cmdb.registry.sysid_readonly` zu finden."

## Import von Beziehungen (Objekte verknüpfen)

Du kannst über den CSV-Import auch [Beziehungen](../../grundlagen/objekt-beziehungen.md) zwischen Objekten erzeugen. Hinterlege das zu verknüpfende Objekt in einer eigenen Spalte und weise das entsprechende Attribut beim Mapping zu. Ein Beispiel für den physikalischen Standort in Spalte H:

[![Verknüpfen von Beziehungen](../../assets/images/de/daten-konsolidieren/csv-import/9-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/9-csvi.png)

Beim Mapping legst du fest:

*   Ob die Objektauswahl uneingeschraenkt oder auf einen bestimmten Objekttyp eingegrenzt sein soll.
*   Ob nicht gefundene Objekte automatisch erstellt werden. Dafür gibst du den Objekttyp an.
*   Über welches Attribut das verknüpfte Objekt identifiziert wird (Sonderzuweisung). Standard ist der Objekt-Titel.

!!! note "Hinweis"
    Die Sonderzuweisung ist nicht bei allen Feldern verfügbar. In diesem Fall wird ausschließlich der Objekt-Titel zur Identifikation des zu aktualisierenden Objekts verwendet.

[![Sonderzuweisung](../../assets/images/de/daten-konsolidieren/csv-import/10-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/10-csvi.png)

## Import von Werten mit Einheiten

Manche Attribute bestehen aus Wert und Einheit (z. B. **Display** in der Kategorie **Monitor**). In der Web GUI gibst du beides getrennt ein, im CSV-Import müssen Wert und Einheit in einer Zelle stehen. Beispiele:

| Kategorie                          | Attribut         | Zuweisung beim CSV-Datenimport | Zelle in CSV-Datei |
| ---------------------------------- | ---------------- | ------------------------------ | ------------------ |
| **CPU**                            | **CPU-Frequenz** | **CPU-Frequenz (Einheit)**     | 2.5 GHz            |
| **Lokaler Massenspeicher → Gerät** | **Kapazität**    | **Kapazität (Einheit)**        | 4 TB               |
| **Monitor**                        | **Display**      | **Display (Einheit)**          | 24 Inch            |

### Weitere Sonderfälle

| Kategorie          | Attribut                       | Zuweisung beim CSV-Datenimport          | Zelle in CSV-Datei |
| ------------------ | ------------------------------ | --------------------------------------- | ------------------ |
| **Betriebssystem** | **<Variante> (<Bezeichnung>)** | **Betriebssystem > Variante (Variant)** | DE (Sprache)       |

## CSV-Dateien über die Console importieren

Neben dem manuellen Import über die Weboberfläche kannst du CSV-Dateien auch mit dem [i-doit console utility](../../automatisierung-und-integration/cli/index.md) importieren. So automatisierst du regelmäßige Aktualisierungen. Die benötigten Profil-IDs liest du mit dem Befehl `import-csvprofiles` aus.
