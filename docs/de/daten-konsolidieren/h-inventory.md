---
title: "h-inventory"
description: "Mit h-inventory inventarisierst du automatisch Hardware, Software und ganze Netzwerke."
icon:
status:
lang: de
---
# h-inventory

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Mit h-inventory inventarisierst du automatisch Hardware, Software und ganze Netzwerke. Die Open-Source-Software steht auf SourceForge unter [http://sourceforge.net/projects/h-inventory/](http://sourceforge.net/projects/h-inventory/) für verschiedene Betriebssysteme bereit.

i-doit importiert die von h-inventory im XML-Format exportierten Daten und übernimmt alle CMDB-relevanten Informationen. So baust du schnell eine Datenbasis auf, die du anschließend manuell weiter anreichern kannst.

**Folgende Daten kannst du aus h-inventory übernehmen:**

[![Attribute und Kategorien](../assets/images/de/daten-konsolidieren/h-inventory/1-hinv.jpg)](../assets/images/de/daten-konsolidieren/h-inventory/1-hinv.jpg)

## Konfiguration

Bevor du importierst, konfiguriere die Schnittstelle unter **Verwaltung → Import und Schnittstellen → H-Inventory → Konfiguration**. Dort legst du im Parameter **Objekt-Matching Profil** fest, [wie bereits dokumentierte Objekte identifiziert werden](objekt-identifizieren-bei-importen.md). Erkannte Objekte werden beim Import aktualisiert statt doppelt angelegt.

## Inventarisierung eines Windows-Clients

So scannst du einen Windows-Client mit h-inventory:

1. Lade das H-Inventory-Paket herunter unter **Extras → CMDB → Import → H-Inventory**.
2. Entpacke das Archiv.
3. Trage die zu scannenden IP-Adressen in die Datei **computer.txt** ein.
4. Führe **scan.bat** aus.

[![XML Import](../assets/images/de/daten-konsolidieren/h-inventory/1-hinv.jpg)](../assets/images/de/daten-konsolidieren/h-inventory/1-hinv.jpg)

Nach Abschluss des Scans findest du den Export als **computername-xx.xml** im selben Verzeichnis.

## Grafischer Import

So importierst du die Scan-Ergebnisse über die Weboberfläche:

1. Navigiere zu **Extras → Import → Importieren**.
2. Lade die XML-Datei hoch.
3. Wähle die Datei aus der Liste der hochgeladenen Exports.
4. Wähle den Objekttyp **Client** und das Importverfahren **inventory** (für H-Inventory).
5. Starte den Import mit **Next >>**.

Der importierte Client steht dir nun in i-doit zur Verfügung.

## Import per Console

Du kannst den Import auch automatisieren. Verwende dafür das [i-doit console utility](../automatisierung-und-integration/cli/index.md):

1. Stelle sicher, dass die XML-Datei auf dem Server erreichbar ist.
2. Starte den Import über die Console.

Alle Parameter und ein Beispielaufruf sind über die Option `--help` abrufbar.
