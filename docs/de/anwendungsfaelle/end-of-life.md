---
title: Dokumentation von End of Life Daten
description: Erfahre, wie du End of Life (EOL) Daten effizient in i-doit verwaltest, von der manuellen Erfassung bis hin zu ressourcenschonenden Ansatz und Report-Kategorien.
lang: de
---

# Dokumentation von End of Life Daten

Die Überwachung von End of Life (EOL) und End of Support (EOS) Daten ist essenziell für ein proaktives Lifecycle-Management. In i-doit gibt es verschiedene Strategien, um diese Daten zu pflegen, Lizenzen zu sparen und die Informationen für deine Kollegen intuitiv nutzbar zu machen.

Im Folgenden stellen wir dir verschiedene Lösungsansätze vor, von der klassischen Dokumentation direkt am Asset bis hin zu einem innovativen "Intuitiv-Ansatz" mit zentraler Pflege auf Modell-Ebene.

## Ansatz 1: Dezentrale Dokumentation direkt am Asset

Bei diesem klassischen Ansatz erstellst du eine benutzerdefinierte Kategorie (z.B. "Lifecycle"), die du direkt den jeweiligen Hardware-Objekttypen (Server, Client, Switch etc.) zuweist.

* **Attribute:** End of Sale, End of Support, End of Life, Status.
* **Vorteil:** Die Information ist physisch direkt am jeweiligen Asset sichtbar.
* **Nachteil:** Hoher Pflegeaufwand bei vielen gleichartigen Geräten, da du die Daten redundant bei jedem einzelnen Asset eintragen musst.

## Ansatz 2: Zentrales Listen-Objekt mit Multi-Value Kategorie

Um Redundanzen zu vermeiden, kannst du EOL-Daten zentral bündeln. Ein sehr flexibler Weg ist die Nutzung von Listen-Kategorien (Multi-Value).

1. Du erstellst einen Objekttyp (z.B. "End of Life") und darin ein Sammel-Objekt pro Geräteklasse (z.B. ein Objekt namens "Switche").
2. Diesem Objekt weist du eine benutzerdefinierte **Multi-Value Kategorie** (z.B. "EOL Switche") zu.
3. Die Kategorie enthält Attribute wie *Modell*, *End of Life Datum* und *Quelle/Link*.
4. **Umsetzung:** Für jedes existierende Modell in deiner Infrastruktur legst du in dieser Kategorie einen neuen Eintrag (Zeile) an.

* **Vorteile:** Sehr aufgeräumt; Pflegeaufwand minimiert; skaliert hervorragend auch bei sehr vielen verschiedenen Modellen, da keine Anpassung der Kategorie-Konfiguration nötig ist.

## Ansatz 3: Der "Intuitiv-Ansatz" (Ein Feld pro Modell)

*Dieser Artikel basiert auf einem Lösungsansatz eines Anwenders.*

Diese Methode ist besonders benutzerfreundlich ("Kollegentest-geprüft"), übersichtlich und spart Objektlizenzen, da du pro Geräteklasse exakt nur ein Objekt benötigst.

1. Erstelle in der Objekttypgruppe "Andere" für jeden Objekttyp einen eigenen Objekttyp (z.B. "EOL-Switche", "EOL-Router").
2. Von diesem Typ erstellst du **genau ein Objekt** (z.B. "Switche").
3. Erstelle für den Objekttypen eine benutzerdefinierte Kategorie (z.B. "Switch-EOL-Daten"), die diesem Objekttyp zugewiesen wird.
4. Die verschiedenen Modelle des Objekttyps legst du bei der Konfiguration der Kategorie als einzelne **Felder** (Typ: *Datum ohne Zeitangabe*) an. Das Feld heißt dann beispielsweise "Aruba Instant On 1430".
5. **Konfiguration der Übersichtsseite:** Richte die Übersichtsseite dieses Objekts so ein, dass alle Felder dieser Kategorie sofort angezeigt werden.

* **Vorteile:** Extrem intuitive Pflege für die Kollegen (einfache Datumsauswahl via Kalender-Widget); alle EOL-Daten einer Geräteklasse auf einen Blick; sehr ressourcen- und lizenzschonend.
* **Administrativer Aufwand:** Als Admin musst du nur dann tätig werden, wenn ein komplett neues Modell in die Infrastruktur aufgenommen wird. Dann fügst du der Kategorie einfach ein neues Datumsfeld hinzu.

## Visualisierung am Endgerät: Die Report-Kategorie

Wenn du dich für die zentrale Pflege (Ansatz 2 oder 3) entscheidest, möchtest du die EOL-Informationen vermutlich trotzdem sehen, wenn du das Objekt eines spezifischen Geräts (z.B. einen einzelnen Switch im Serverschrank) öffnest.

Das löst du elegant über eine **benutzerdefinierte Kategorie vom Typ "Report"**:

1. Erstelle einen Report, der die Modell-Zuweisung des spezifischen Geräts mit den zentralen EOL-Daten abgleicht.
2. Erstelle eine Kategorie vom Typ "Report", die diesen Report als Inhalt hat.
3. Weise die Kategorie dem Objekttyp zu.
4. **Ergebnis:** Öffnest du den Switch, siehst du in der Kategorie "EOL Report" sofort das für dieses Modell zutreffende EOL-Datum, obwohl der Datensatz zentral gepflegt wird.

## Datenerfassung und Automatisierung

Egal für welchen Ansatz du dich entscheidest, die initialen Daten oder regelmäßige Updates kannst du auch automatisieren:

* **CSV-Import:** Wenn Hersteller Listen mit Support-Zeiträumen bereitstellen, kannst du diese Daten als CSV aufbereiten und gebündelt in deine EOL-Kategorien importieren.
* **API-Skript:** Für eine vollständige Automatisierung kann ein Skript (z.B. 1x täglich) eine externe Quelle oder CSV abfragen, die Modelle mit deiner i-doit CMDB abgleichen und die EOL-Daten via API in die entsprechenden Kategorien schreiben.

## Schritt für Schritt: Zentrale Liste mit Report-Kategorie

Dieser Abschnitt zeigt Ansatz 2 in Kombination mit der Report-Kategorie, getestet mit i-doit 38.
Das Beispiel verwendet Switche, das Vorgehen funktioniert aber für jeden Objekttyp, der die Kategorie **Modell** nutzt.

### 1. Objekttyp und Listen-Objekt anlegen

Klicke unter **Verwaltung → Datenstruktur → Objekttypen → Andere** auf **Neu** und lege den [benutzerdefinierten Objekttyp](../grundlagen/benutzerdefinierte-objekttypen.md) **End of Life** mit der Konstante `C__OBJTYPE__END_OF_LIFE` an.
Erstelle anschließend pro Geräteklasse ein Objekt dieses Typs, im Beispiel das Objekt **Switches**.

### 2. Multi-Value-Kategorie anlegen

Lege unter **Verwaltung → Datenstruktur → Benutzerdefinierte Kategorien** die Kategorie **EOL Switches** mit folgenden Einstellungen an:

*   **Objekttypen:** End of Life
*   **Konstante:** `C__CATG__CUSTOM_FIELDS_EOL_SWITCHES`
*   **Listen-Kategorie ("Multi-Value"):** Ja
*   **Felder:** Manufacturer (Textfeld), Model (Textfeld), End of Sale, End of Support und End of Life (jeweils Datum und Zeit, Zusatz **Ohne Zeit**) sowie Source (Link)

[![Konfiguration der Multi-Value-Kategorie EOL Switches](../assets/images/de/anwendungsfaelle/end-of-life/1-eol.png)](../assets/images/de/anwendungsfaelle/end-of-life/1-eol.png)

Die Werte in **Manufacturer** und **Model** müssen exakt so geschrieben sein wie in der Kategorie **Modell** der Geräte, denn der Report vergleicht später diese Texte.

### 3. Liste per CSV-Import füllen

Bereite eine CSV-Datei mit einer Zeile pro Modell vor.
Die erste Spalte enthält den Titel des Listen-Objekts, damit alle Zeilen im selben Objekt landen:

```csv
Object title;Manufacturer;Model;End of Sale;End of Support;End of Life;Source
Switches;Cisco;Catalyst 2960-X-24TS-L;2022-10-31;2025-10-31;2027-10-31;https://www.cisco.com/...
Switches;Cisco;Catalyst 9300-48T;2028-10-31;2031-10-31;2033-10-31;https://www.cisco.com/...
Switches;HP;Aruba 2930F-24G-4SFP;2026-01-31;2029-01-31;2031-01-31;https://www.hpe.com/...
```

Die Daten in diesem Beispiel sind fiktiv, die echten Termine entnimmst du den Ankündigungen der Hersteller.
Datumswerte werden im Format `JJJJ-MM-TT` importiert.

Lade die Datei unter **Extras → Import → CSV Import** hoch und klicke auf **Für Import verwenden**:

*   **Globaler Objekttyp:** End of Life
*   **Behandlung von Multi-Value-Kategorien:** *Bestehende Kategorien überschreiben*, damit ein erneuter Import mit einer aktualisierten Liste die alten Einträge ersetzt.
*   Klicke auf **Mapping vorbereiten**.
*   **Import Matching Profile:** Klicke auf **Identifizierungsfeld hinzufügen** und wähle die Spalten-Überschrift **Object title** und die Kategorie-Eigenschaft **Objekt-Titel**.
*   **Zuweisung:** Weise die Spalte **Object title** dem **Objekt-Titel** zu und die übrigen Spalten den Attributen der Kategorie **EOL Switches**.

[![Zuweisung im CSV-Import für die EOL-Liste](../assets/images/de/anwendungsfaelle/end-of-life/2-eol.png)](../assets/images/de/anwendungsfaelle/end-of-life/2-eol.png)

!!! warning "Identifizierungsfeld setzen"
    Ohne das Identifizierungsfeld findet der Import das bestehende Objekt nicht und legt für jede Zeile der Datei ein neues Objekt mit dem Namen "Switches" an.

Starte den Import.
Die Kategorie **EOL Switches** des Objekts **Switches** enthält nun einen Eintrag pro Modell:

[![Einträge der Kategorie EOL Switches](../assets/images/de/anwendungsfaelle/end-of-life/3-eol.png)](../assets/images/de/anwendungsfaelle/end-of-life/3-eol.png)

### 4. Report für die Geräteansicht anlegen

Öffne im **Report-Manager** das Auswahlmenü neben **Neu** und wähle **SQL-Editor**.
Lege den Report **EOL data of this device** mit der folgenden Abfrage an.
Der Report liest Hersteller und Modell des aktuellen Objekts aus der Kategorie **Modell** und sucht den passenden Eintrag des Listen-Objekts.

Die Werte einer benutzerdefinierten Kategorie liegen in der Tabelle `isys_catg_custom_fields_list`, eine Zeile pro Feld.
Die Feldschlüssel (`c_...`) findest du in der benutzerdefinierten Kategorie unter **Technische Konfiguration anzeigen**, ersetze sie durch die Schlüssel deiner Kategorie.

```sql
SELECT obj_main.isys_obj__id AS '__id__',
       mf.isys_model_manufacturer__title AS 'LC__CMDB__CATG__MANUFACTURER###0_1',
       mt.isys_model_title__title AS 'LC__CMDB__CATG__MODEL###0_2',
       eos.isys_catg_custom_fields_list__field_content AS 'End of Sale###0_3',
       eosup.isys_catg_custom_fields_list__field_content AS 'End of Support###0_4',
       eol.isys_catg_custom_fields_list__field_content AS 'End of Life###0_5',
       src.isys_catg_custom_fields_list__field_content AS 'Source###0_6'
FROM isys_obj AS obj_main
JOIN isys_catg_model_list AS ml ON ml.isys_catg_model_list__isys_obj__id = obj_main.isys_obj__id
JOIN isys_model_manufacturer AS mf ON mf.isys_model_manufacturer__id = ml.isys_catg_model_list__isys_model_manufacturer__id
JOIN isys_model_title AS mt ON mt.isys_model_title__id = ml.isys_catg_model_list__isys_model_title__id
JOIN isys_catg_custom_fields_list AS model ON model.isys_catg_custom_fields_list__field_key = 'c_17900575498346501'
     AND model.isys_catg_custom_fields_list__field_content = mt.isys_model_title__title
JOIN isys_obj AS listobj ON listobj.isys_obj__id = model.isys_catg_custom_fields_list__isys_obj__id
     AND listobj.isys_obj__status = 2
JOIN isys_catg_custom_fields_list AS manu ON manu.isys_catg_custom_fields_list__data__id = model.isys_catg_custom_fields_list__data__id
     AND manu.isys_catg_custom_fields_list__field_key = 'c_17900575498342330'
     AND manu.isys_catg_custom_fields_list__field_content = mf.isys_model_manufacturer__title
LEFT JOIN isys_catg_custom_fields_list AS eos ON eos.isys_catg_custom_fields_list__data__id = model.isys_catg_custom_fields_list__data__id
     AND eos.isys_catg_custom_fields_list__field_key = 'c_17900575498343552'
LEFT JOIN isys_catg_custom_fields_list AS eosup ON eosup.isys_catg_custom_fields_list__data__id = model.isys_catg_custom_fields_list__data__id
     AND eosup.isys_catg_custom_fields_list__field_key = 'c_1790057549834133'
LEFT JOIN isys_catg_custom_fields_list AS eol ON eol.isys_catg_custom_fields_list__data__id = model.isys_catg_custom_fields_list__data__id
     AND eol.isys_catg_custom_fields_list__field_key = 'c_17900575498344594'
LEFT JOIN isys_catg_custom_fields_list AS src ON src.isys_catg_custom_fields_list__data__id = model.isys_catg_custom_fields_list__data__id
     AND src.isys_catg_custom_fields_list__field_key = 'c_17900575498348255'
WHERE model.isys_catg_custom_fields_list__status = 2
  AND obj_main.isys_obj__id PLACEHOLDER 'object-id'
```

Die Bedingung `PLACEHOLDER 'object-id'` wird zur Laufzeit durch die ID des Objekts ersetzt, das du gerade betrachtest.
Im Report-Manager selbst liefert der Report deshalb keine Zeilen, er ist für die Ausführung innerhalb eines Objekts gedacht.

### 5. Report-Kategorie für die Switche anlegen

Lege eine zweite benutzerdefinierte Kategorie **End of Life** mit dem Objekttyp **Switch** an, Single-Value, mit einem Feld vom Typ **Report**.
Wähle unter **Zusatz** den Report **EOL data of this device**.
Der Feldtitel kann leer bleiben.

[![Konfiguration der Report-Kategorie End of Life](../assets/images/de/anwendungsfaelle/end-of-life/5-eol.png)](../assets/images/de/anwendungsfaelle/end-of-life/5-eol.png)

Jeder Switch hat jetzt die Kategorie **End of Life**, die den zu seinem Modell passenden Eintrag der zentralen Liste anzeigt:

[![Kategorie End of Life eines Switches mit den EOL-Daten seines Modells](../assets/images/de/anwendungsfaelle/end-of-life/4-eol.png)](../assets/images/de/anwendungsfaelle/end-of-life/4-eol.png)

### 6. Optional: Übersichtsreport der betroffenen Geräte

Mit denselben Joins entsteht auch ein normaler Report, der alle Switche auflistet, deren Modell in den nächsten 24 Monaten das End of Life erreicht.
Lege ihn ebenfalls im SQL-Editor an, zum Beispiel unter dem Namen **Switches reaching End of Life within 24 months**:

```sql
SELECT obj_main.isys_obj__id AS '__id__',
       obj_main.isys_obj__title AS 'LC__UNIVERSAL__TITLE###0_1',
       mf.isys_model_manufacturer__title AS 'LC__CMDB__CATG__MANUFACTURER###0_2',
       mt.isys_model_title__title AS 'LC__CMDB__CATG__MODEL###0_3',
       eol.isys_catg_custom_fields_list__field_content AS 'End of Life###0_4',
       DATEDIFF(eol.isys_catg_custom_fields_list__field_content, CURDATE()) AS 'Days left###0_5'
FROM isys_obj AS obj_main
JOIN isys_obj_type AS ot ON ot.isys_obj_type__id = obj_main.isys_obj__isys_obj_type__id
JOIN isys_catg_model_list AS ml ON ml.isys_catg_model_list__isys_obj__id = obj_main.isys_obj__id
JOIN isys_model_manufacturer AS mf ON mf.isys_model_manufacturer__id = ml.isys_catg_model_list__isys_model_manufacturer__id
JOIN isys_model_title AS mt ON mt.isys_model_title__id = ml.isys_catg_model_list__isys_model_title__id
JOIN isys_catg_custom_fields_list AS model ON model.isys_catg_custom_fields_list__field_key = 'c_17900575498346501'
     AND model.isys_catg_custom_fields_list__field_content = mt.isys_model_title__title
JOIN isys_obj AS listobj ON listobj.isys_obj__id = model.isys_catg_custom_fields_list__isys_obj__id
     AND listobj.isys_obj__status = 2
JOIN isys_catg_custom_fields_list AS manu ON manu.isys_catg_custom_fields_list__data__id = model.isys_catg_custom_fields_list__data__id
     AND manu.isys_catg_custom_fields_list__field_key = 'c_17900575498342330'
     AND manu.isys_catg_custom_fields_list__field_content = mf.isys_model_manufacturer__title
JOIN isys_catg_custom_fields_list AS eol ON eol.isys_catg_custom_fields_list__data__id = model.isys_catg_custom_fields_list__data__id
     AND eol.isys_catg_custom_fields_list__field_key = 'c_17900575498344594'
WHERE ot.isys_obj_type__const = 'C__OBJTYPE__SWITCH'
  AND obj_main.isys_obj__status = 2
  AND model.isys_catg_custom_fields_list__status = 2
  AND eol.isys_catg_custom_fields_list__field_content <= DATE_ADD(CURDATE(), INTERVAL 24 MONTH)
ORDER BY eol.isys_catg_custom_fields_list__field_content, obj_main.isys_obj__title
```

[![Report der Switche, die in 24 Monaten das End of Life erreichen](../assets/images/de/anwendungsfaelle/end-of-life/6-eol.png)](../assets/images/de/anwendungsfaelle/end-of-life/6-eol.png)

Über eine [Benachrichtigung](../auswertungen/benachrichtigungen.md) oder den [automatisierten Report-Export](../auswertungen/report-manager.md#reports-automatisiert-exportieren) lässt sich diese Liste regelmäßig verschicken.

## Weiterführende Artikel

*   [Benutzerdefinierte Kategorien](../grundlagen/benutzerdefinierte-kategorien.md): Feldtypen und die technische Konfiguration mit den Feldschlüsseln
*   [Benutzerdefinierte Objekttypen](../grundlagen/benutzerdefinierte-objekttypen.md): Anlegen des Objekttyps End of Life
*   [CSV-Datenimport](../daten-konsolidieren/csv-datenimport/index.md): Identifizierung von Objekten und Behandlung von Multi-Value-Kategorien
*   [Report-Manager](../auswertungen/report-manager.md): SQL-Editor und automatisierter Report-Export
*   [Variable Reports](variable-reports.md): ein weiteres Beispiel für einen Report im Kontext des aktuellen Objekts
