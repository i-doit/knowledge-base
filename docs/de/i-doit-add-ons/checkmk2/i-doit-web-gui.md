---
title: "i-doit Web GUI"
description: "Die meisten Benutzerinteraktionen basieren auf dem Legacy-Checkmk-Add-on von i-doit, das derzeit mit i-doit/open ausgeliefert wird."
icon:
status:
lang: de
---
# i-doit Web GUI

Die meisten Benutzerinteraktionen basieren auf dem [Legacy-Checkmk-Add-on](./index.md) von i-doit, das derzeit mit i-doit/open ausgeliefert wird. Dieses Legacy-Add-on muss [über das i-doit Admin-Center](../index.md) aktiviert werden (es ist standardmäßig aktiviert).

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

## Echtzeit-Aufrufe aktivieren

Lass i-doit den Status von Host- und Service-Checks über Livestatus in Echtzeit abrufen. Die Konfiguration erfolgt über **Verwaltung > Import und Interfaces > Monitoring > Livestatus / NDO**.

Diese Statusabfragen können in jedem Objekt oder in den Objektlisten für jeden Typ angezeigt werden. Fuege diesen Objekttypen die Kategorie "Monitoring" über "Verwaltung > CMDB-Einstellungen > Schnellkonfigurationsassistent" hinzu.

Aktiviere Statusaufrufe innerhalb dieser Kategorie manuell für jedes Objekt oder [idoitcmk pull](bestandsdaten-in-die-cmdb-importieren.md) erledigt dies durch die [Konfigurationseinstellung](./konfiguration.md) `pull.enableLivestatus`.

## Verwalten von Host-Tags

Mit i-doit kannst du Host-Tags verwalten. Es gibt "statische" und "dynamische" Host-Tags:

- **Statisch** bedeutet, dass du Tags manuell unter Extras > Check_MK 2 > Tags (statisch) erstellst und sie einem Host in der Kategorie Check_MK Tags hinzufügst.
- **Dynamisch** bedeutet, dass dies automatisch über Regelsätze unter Extras > Check_MK 2 > Tags (dynamisch) geschieht.

Sowohl "statische" als auch "dynamische" Host-Tags werden in der Kategorie Check_MK Tags angezeigt. Sie werden über [idoitcmk push](./wato-konfiguration-auf-basis-von-cmdb-daten-generieren.md) nach Checkmk exportiert.

## Aufruf von idoitcmk über die Web GUI

Die Kategorie Check_MK Host bietet mehrere Schaltflächen, die idoitcmk im Hintergrund ausloesen:

*   **Existiert der Host in Checkmk?** -- Identifizierung des Hosts in Checkmk anhand seines Hostnamens
*   **Objekt von Checkmk aktualisieren** -- Holt Daten vom Checkmk-Host, um dieses Objekt zu aktualisieren
*   **Host in Checkmk erstellen/aktualisieren** -- Die Objektdaten werden nach Checkmk übertragen. Entweder wird ein neuer Host erstellt oder ein bestehender aktualisiert
*   **Host in Checkmk löschen** -- Wenn dieses Objekt als Host in Checkmk existiert, wird es gelöscht

Bevor du oder ein anderer Benutzer eine dieser Schaltflächen betaetigt, führe sie bitte manuell über die Befehlszeilenschnittstelle aus, um sicherzustellen, dass sie das tun, was sie tun sollen.

## Konfiguration

Die Konfiguration erfolgt über **Verwaltung > Add-ons > Check_MK**. Durch die Einstellung "App idoitcmk aufrufen" muss i-doit wissen, wo sich idoitcmk befindet. Wenn du die [Installationsschritte](./installation.md) sorgfältig befolgt hast, verwende:

```shell
/usr/local/bin/idoitcmk
```

Tipp: Möglicherweise möchtest du Standardoptionen hinzufügen, wenn eine der Schaltflächen ausgelöst wird. In einer Multi-Mandanten-Umgebung kannst du beispielsweise mandantenspezifische Konfigurationseinstellungen bereitstellen:

```shell
/usr/local/bin/idoitcmk -c /etc/idoitcmk/tenant-one.json
```

Die Protokollierung ist standardmäßig aktiviert. Für die ersten Schritte ist es immer gut zu wissen, was gerade passiert.

## Berechtigungen

Um Benutzern/Benutzergruppen die Berechtigung zu erteilen, diese Schaltflächen auszuloesen, gehst du zu "Verwaltung > Berechtigungssystem > Rechte > CMDB", laedst einen Benutzer/eine Gruppe und aktivierst das Recht "Ausführen" für eine oder mehrere Bedingungen:

*   Kategorie
*   Kategorie in Objekttypen
*   Kategorie in Objekten
*   Kategorie in Objekten unterhalb einer Lokation und/oder
*   Kategorien in von dir erstellten Objekten
