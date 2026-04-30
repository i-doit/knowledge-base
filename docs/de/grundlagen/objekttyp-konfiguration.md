---
title: Objekttyp-Konfiguration
description: Objekttypen in i-doit konfigurieren, anpassen und verwalten
icon:
status:
lang: de
---
# Objekttyp-Konfiguration

Jeder Objekttyp in i-doit lässt sich individuell konfigurieren — von der Bezeichnung über das Icon bis hin zu den zugeordneten Kategorien. Hier erfährst du, wie du bestehende Objekttypen anpasst und welche Einstellungen welche Auswirkungen haben.

!!! tip "Alle Standard-Objekttypen im Detail"
Eine vollständige Beschreibung aller vordefinierten Objekttypen mit Verwendungsbeispielen und zugeordneten Kategorien findest du in der [Objekttyp-Referenz](objekttypen/index.md). Wenn du eigene Objekttypen anlegen willst, lies [Benutzerdefinierte Objekttypen](benutzerdefinierte-objekttypen.md).

## So erreichst du die Konfiguration

**Verwaltung → Datenstruktur → Objekttypen → [Gruppe] → [Objekttyp]**

Alternativ: Klicke in der Objektliste eines Typs auf das Zahnrad-Symbol oben rechts.

[![Objekttyp-Konfiguration](../assets/images/de/grundlagen/objekttypen/1-ot.png)](/img/assets/images/de/grundlagen/objekttypen/1-ot.png)

Die folgende Beschreibung folgt der Reihenfolge der Felder, wie sie in der Konfigurationsmaske erscheinen.

## Felder in der Konfiguration

### ID

Die interne, fortlaufende Nummer des Objekttyps. Wird vom System vergeben und ist nicht änderbar. Du findest sie auch in der URL wenn du den Objekttyp konfigurierst. Nützlich für API-Aufrufe und SQL-Queries.

### Übersetzte Bezeichnung

Zeigt dir die aktuelle Übersetzung der Sprachkonstante in der gewählten Sprache. Hilfreich um zu prüfen, ob deine Konstante korrekt aufgelöst wird — besonders wenn du eigene Sprachdateien verwendest.

### Sprachkonstante / Bezeichnung

Der Name des Objekttyps. Du kannst entweder einen Klartext-Namen eingeben (z.B. `Netzwerkdrucker`) oder eine [Sprachkonstante](../administration/mehrsprachigkeit-und-uebersetzungen.md) verwenden (z.B. `LC__OBJTYPE__NETWORK_PRINTER`). Sprachkonstanten sind empfehlenswert wenn du i-doit mehrsprachig betreibst — der Name wird dann automatisch in der Sprache des angemeldeten Benutzers angezeigt.

### SYSID Präfix

Bestimmt den Anfang der [SYSID](kategorien/global.md) für alle Objekte dieses Typs. Lässt du das Feld leer, wird das Standard-Präfix `SYSID` verwendet und ein Unix-Timestamp angehängt. Mit eigenem Präfix (z.B. `SRV-`) wird stattdessen die Objekt-ID angehängt, was lesbarere SYSIDs ergibt: `SRV-42` statt `SYSID_1680000042`.

### Automatische Inventarnummer

Definiert ein Schema für automatisch generierte Inventarnummern in der [Buchhaltungskategorie](kategorien/accounting.md). Platzhalter sind verfügbar (klicke auf das blaue Fragezeichen). Beispiel: `SRV-%COUNTER%` erzeugt `SRV-001`, `SRV-002` etc. Kann auch mit dem Objekttitel kombiniert werden: `%TITLE%-%COUNTER%`.

[![Automatische Inventarnummer — Platzhalter](../assets/images/de/grundlagen/objekttyp-konfiguration-20260406-180756.png)](../assets/images/de/grundlagen/objekttyp-konfiguration-20260406-180756.png)

### Position im Baum

Steuert die Sortierung innerhalb der Objekttyp-Gruppe im Menübaum. Niedrigere Zahlen erscheinen weiter oben. Wenn du keine Zahl vergibst, wird alphabetisch sortiert. Nützlich um die wichtigsten Objekttypen (Server, Client, Switch) ganz oben zu platzieren.

### Objekt Farbe

Jeder Objekttyp kann eine eigene Farbe bekommen. Diese Farbe erscheint im [CMDB-Explorer](../auswertungen/cmdb-explorer/index.md) und in der [Rack-Ansicht](kategorien/s-enclosure.md). Hilft bei der visuellen Unterscheidung — z.B. Server blau, Switches grün, Clients gelb.

### Objekttyp-Gruppe

Bestimmt in welcher Gruppe der Objekttyp im Hauptmenü erscheint: **Software**, **Infrastruktur**, **Andere** oder **Kontakte**. Du kannst Objekttypen jederzeit zwischen Gruppen verschieben — die Daten bleiben erhalten, nur die Position im Menü ändert sich.

### Spezifische Kategorie

Jeder Objekttyp kann **maximal eine** spezifische Kategorie haben. Diese Kategorie enthält Felder die nur für diesen Objekttyp sinnvoll sind — z.B. hat der Objekttyp "Monitor" die spezifische Kategorie "Monitor" mit Feldern wie Auflösung und Paneltyp. Spezifische Kategorien schließen sich gegenseitig aus.

### Selbstdefiniert

Zeigt an, ob der Objekttyp zur Standard-Installation gehört oder von einem Benutzer erstellt wurde. Standard-Objekttypen können nicht gelöscht, nur ausgeblendet werden.

### Standort

Legt fest, ob Objekte dieses Typs als **physischer Standort** für andere Objekte dienen können. Aktiviere diese Option für Gebäude, Räume, Racks und Schränke — deaktiviere sie für Server, Clients und andere Endgeräte die **in** einem Standort platziert werden, aber selbst keinen Standort darstellen.

!!! info "Auswirkung auf den Standort-Browser"
Nur Objekttypen mit aktivierter Standort-Option tauchen im Standort-Browser auf. Wenn ein Objekttyp im Standort-Browser fehlt, prüfe diese Einstellung.

### Beziehungsmaster

Steuert die Richtung von [Objekt-Beziehungen](objekt-beziehungen.md). Normalerweise ist das Objekt das du bearbeitest der "Master" und das verknüpfte Objekt der "Slave". Wenn der verknüpfte Objekttyp als Beziehungsmaster konfiguriert ist, dreht sich die Richtung um. Relevant für die Darstellung im CMDB-Explorer und für Service-Bäume.

### Positionierbar im Schrank

Bei **Ja** können Objekte dieses Typs in der [Rack-Ansicht](kategorien/s-enclosure.md) auf Höheneinheiten positioniert werden. Voraussetzung: Die [Formfaktor-Kategorie](kategorien/formfactor.md) muss mit der Anzahl der Höheneinheiten befüllt sein. Deaktiviere diese Option für Objekttypen die nicht in ein Rack gehören (Gebäude, Personen, Software).

### Anzeige im Menübaum

Bei **Nein** wird der Objekttyp im Hauptmenü ausgeblendet — für alle Benutzer. Die Objekte existieren weiterhin und sind über die Suche oder direkte URL erreichbar. Nutze diese Option um nicht benötigte Standard-Objekttypen aufzuräumen, ohne sie zu löschen.

### Bild

Das Standard-Objektbild das in der Informationszeile oben angezeigt wird (z.B. ein Server-Icon). Jedes Objekt kann über die Kategorie [Objektbild](kategorien/image.md) ein individuelles Bild bekommen, aber hier legst du den Standard für den gesamten Typ fest.

### Icon

Das kleine Symbol neben dem Objekttyp-Namen im Menübaum. Gib den Pfad relativ zum i-doit-Installationsverzeichnis an. i-doit bringt eine Sammlung von Icons mit — du findest sie unter `images/icons/silk/`.

### Objekttyp-Konstante

Die technische Kennung des Objekttyps, z.B. `C__OBJTYPE__SERVER`. Diese Konstante wird in der [API](../i-doit-add-ons/api/index.md), in SQL-Reports und im [CSV-Import](../daten-konsolidieren/csv-datenimport/index.md) verwendet. i-doit erzeugt automatisch eine Konstante mit Unix-Timestamp — für bessere Lesbarkeit ersetze den Timestamp durch einen sprechenden Namen in Großbuchstaben, z.B. `C__OBJTYPE__NETWORK_PRINTER`.

!!! warning "Konstante nicht nachträglich ändern"
Wenn externe Systeme (API-Clients, CSV-Imports, JDisc-Profile) die Konstante verwenden, führt eine Änderung zu Fehlern. Lege die Konstante bei der Erstellung sorgfältig fest.

### Default Template

Wähle ein [Template](../effizientes-dokumentieren/templates.md) das automatisch auf neue Objekte dieses Typs angewendet wird. Alle Felder des Templates werden vorausgefüllt — der Benutzer kann sie bei Bedarf überschreiben. Nützlich um Standardwerte wie Standort, Kontaktperson oder CMDB-Status vorzubelegen.

### Objekttitel von Template benutzen

Bei **Ja** wird auch der Objektname aus dem Template übernommen. Sinnvoll in Kombination mit der automatischen Inventarnummer.

### Übersichtsseite als Standard-Ansicht

Bei **Ja** wird beim Öffnen eines Objekts die Übersichtsseite angezeigt — eine kompakte Zusammenfassung der wichtigsten Kategorien auf einer Seite. Bei **Nein** öffnet sich direkt die Kategorie "Allgemein". Für häufig genutzte Objekttypen (Server, Client) ist die Übersichtsseite empfehlenswert.

### Kategorien

Die wichtigste Einstellung: Hier bestimmst du, welche [Kategorien](kategorien-und-attribute.md) für diesen Objekttyp verfügbar sind. Aktiviere die Checkbox links, um eine Kategorie zuzuordnen. Die Checkbox rechts bestimmt, ob die Kategorie auf der **Übersichtsseite** erscheint (nur relevant wenn die Übersichtsseite aktiviert ist).

Die Reihenfolge der Kategorien in der linken Sidebar kannst du per **Drag & Drop** über die schraffierten Streifen anpassen.

!!! tip "Weniger ist mehr"
Deaktiviere Kategorien die du für diesen Objekttyp nicht brauchst. Ein Server braucht keine "Drucker"-Kategorie, ein Raum keine "CPU"-Kategorie. Weniger zugeordnete Kategorien = übersichtlichere Sidebar = schnelleres Arbeiten.

Detaillierte Informationen findest du unter [Zuordnung von Kategorien zu Objekttypen](zurodnung-von-kategorien-zu-objekttypen.md).

### Beschreibung

Internes Notizfeld für den Objekttyp. Wird nur in der Konfiguration angezeigt, nicht in der normalen Benutzeroberfläche. Nutze es für Hinweise an andere Administratoren, z.B. "Nicht löschen — wird für JDisc-Import benötigt".

### JDisc Standard-Profil

Wenn [JDisc-Import-Profile](../daten-konsolidieren/jdisc/index.md) konfiguriert sind, kannst du hier ein Standard-Profil für diesen Objekttyp festlegen. Es wird in der Kategorie "JDisc Discovery" vorausgewählt.
