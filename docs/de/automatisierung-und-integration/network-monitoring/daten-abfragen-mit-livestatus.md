---
title: Daten abfragen mit Livestatus/NDOUtils
description: "Mit der Monitoring-Schnittstelle vergleichst du die Soll-Dokumentation in i-doit mit dem Ist-Zustand aus deinem Network Monitoring."
icon:
status:
lang: de
---
# Daten abfragen mit Livestatus/NDOUtils

Mit der Monitoring-Schnittstelle vergleichst du die Soll-Dokumentation in i-doit mit dem Ist-Zustand aus deinem [Network Monitoring](../network-monitoring/index.md). So zeigst du Live-Daten direkt in i-doit an und wertest sie aus.

## Schnittstellen

Unterstützt werden die Schnittstellen

-   [NDOUtils](https://exchange.nagios.org/directory/Addons/Database-Backends/NDOUtils/details) (bzw. IDOUtils) sowie
-   [checkmk Livestatus](https://docs.checkmk.com/latest/de/livestatus.html)

für [Nagios](https://www.nagios.org/), [checkmk](https://docs.checkmk.com/latest/de/livestatus.html), [Icinga](https://www.icinga.org/) und kompatiblen Forks unterstützt.

!!! success "Empfehlung"
    checkmk Livestatus bietet eine sehr performante Anbindung an das Network Monitoring. Daher ist es den NDOUtils zu bevorzugen.

## Grundkonfiguration

Voraussetzung ist ein laufendes NDOUtils oder checkmk Livestatus auf deinem Monitoring-System. Konfiguriere den Zugriff in i-doit unter **Verwaltung → Import und Schnittstellen → Monitoring → Livestatus/NDO**.

!!! note "Livestatus unterstützt ab i-doit 36 auch TLS"

Beispiel Livestatus:

[![daten-abfragen-mls-example](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/2-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/2-nm.png)

## Kategorien einrichten

So richtest du die Monitoring-Kategorie ein:

1. Weise über **[Datenstruktur bearbeiten](../../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md)** den gewünschten [Objekttypen](../../grundlagen/struktur-it-dokumentation.md) den [Kategorie-Ordner](../../grundlagen/struktur-it-dokumentation.md) **Monitoring** zu.
2. Konfiguriere in der Kategorie **Monitoring** für jedes [Objekt](../../grundlagen/struktur-it-dokumentation.md) den [Identifizierungsschlüssel](../../grundlagen/eindeutige-referenzierungen.md). Du kannst den Objekttitel, den Hostname (mit oder ohne Domain) oder einen frei gewählten Namen verwenden.
3. Wähle bei mehreren Monitoring-Instanzen die passende Instanz aus.

[![daten-abfragen-mls-multi-instance](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/4-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/4-nm.png)

Nachdem du die Kategorie aktiviert und gespeichert hast, fragst du in der Kategorie **Livestatus** bzw. **NDO** den aktuellen Status ab.

[![daten-abfragen-mls-status](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/5-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/5-nm.png)

Zusätzlich kannst du in der [Objektlistenkonfiguration](../../grundlagen/objekt-liste/listenansicht-konfigurieren.md) eine Spalte für NDO oder Livestatus hinzufügen, um den Hoststatus direkt in der [Objekt-Liste](../../grundlagen/objekt-liste/index.md) anzuzeigen.

[![daten-abfragen-mls-objlist](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/6-nm.png)](../../assets/images/de/automatisierung-und-integration/network-monitoring/livestatus/6-nm.png)

## Logbucheinträge aus dem Monitoring

Mit dem [i-doit console utility](../cli/index.md) übertraegst du Statusmeldungen aus dem Monitoring in das [Logbuch](../../grundlagen/logbuch.md) von i-doit. Rufe dazu den Befehl `nagios-ndoutils` auf -- er überträgt automatisch alle Statusänderungen seit dem letzten Lauf.
