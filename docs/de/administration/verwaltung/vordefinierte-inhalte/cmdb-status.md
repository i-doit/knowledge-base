---
title: CMDB Status
description: "Du kannst die vorhandenen Status mit der CMDB-Status-Funktion organisieren und bearbeiten."
icon:
status:
lang: de
---
# CMDB Status

Unter **Verwaltung → Vordefinierte Inhalte → CMDB-Status** verwaltest du die Status-Werte, die den Lebenszyklus eines Objekts in der CMDB beschreiben. Du kannst die vorhandenen [Status](../../../grundlagen/lebens-und-dokumentationszyklus.md) mit der CMDB-Status-Funktion organisieren und bearbeiten. Darüber hinaus kannst du festlegen, welcher Status einem importierten Objekt zugewiesen wird und ob der Statusfilter angezeigt werden soll.

i-doit liefert bereits Standardwerte wie **In Betrieb**, **Geplant**, **Defekt**, **Außer Betrieb** und **Gelagert** mit. Du kannst eigene Status-Werte hinzufügen, bestehende umbenennen oder mit einer individuellen Farbe versehen. Über den Statusfilter in den Objekt-Listen lassen sich Objekte nach ihrem aktuellen CMDB-Status filtern. Der CMDB-Status ist unabhängig vom Zustand (normal, archiviert, gelöscht) eines Objekts -- beide Werte ergänzen sich, um den Lebenszyklus vollständig abzubilden.

[![CMDB-Status](../../../assets/images/de/administration/verwaltung/vordefinierte-inhalte/cmdb-status/1-cs.png)](../../../assets/images/de/administration/verwaltung/vordefinierte-inhalte/cmdb-status/1-cs.png)

## IDs und Konstanten

Jeder CMDB-Status besitzt eine numerische **ID** und eine eindeutige **Konstante**. Anders als die Bezeichnung, die übersetzt wird und jederzeit umbenannt werden kann, bleiben diese beiden Werte stabil. Verwende sie immer dann, wenn ein Status außerhalb der Oberfläche referenziert werden muss, beispielsweise in der [API](../../../i-doit-add-ons/api/index.md), in einem Import oder in einer anderen Schnittstelle.

i-doit wird mit den folgenden Status ausgeliefert:

| ID | Konstante | Standardbezeichnung |
| --- | --- | --- |
| 1 | `C__CMDB_STATUS__PLANNED` | Geplant |
| 2 | `C__CMDB_STATUS__ORDERED` | Bestellt |
| 3 | `C__CMDB_STATUS__DELIVERED` | Geliefert |
| 4 | `C__CMDB_STATUS__ASSEMBLED` | Montiert |
| 5 | `C__CMDB_STATUS__TESTED` | Getestet |
| 6 | `C__CMDB_STATUS__IN_OPERATION` | In Betrieb |
| 7 | `C__CMDB_STATUS__DEFECT` | Defekt |
| 8 | `C__CMDB_STATUS__UNDER_REPAIR` | In Reparatur |
| 9 | `C__CMDB_STATUS__DELIVERED_FROM_REPAIR` | Aus Reparatur geliefert |
| 10 | `C__CMDB_STATUS__INOPERATIVE` | Außer Betrieb |
| 11 | `C__CMDB_STATUS__STORED` | Gelagert |
| 12 | `C__CMDB_STATUS__SCRAPPED` | Verschrottet |
| 13 | `C__CMDB_STATUS__IDOIT_STATUS` | i-doit Status |
| 14 | `C__CMDB_STATUS__IDOIT_STATUS_TEMPLATE` | Template |

!!! note

    **In Betrieb**, **Außer Betrieb**, **i-doit Status** und **Template** sind für die interne Verwendung reserviert und können nicht bearbeitet werden. Die API gibt diese vier Status mit `editable: false` zurück.

Status, die du selbst anlegst, erhalten eigene IDs. Die Tabelle oben umfasst daher ausschließlich die ausgelieferten Standardwerte. Um die vollständige Liste einer bestimmten Installation inklusive eigener Status auszulesen, verwende die API-Methode [cmdb.status.read](../../../i-doit-add-ons/api/methoden/v1/cmdb.status.md). Sie gibt ID, Bezeichnung, Konstante und Farbe jedes Status zurück.

## Siehe auch

- [Lebens- und Dokumentationszyklus](../../../grundlagen/lebens-und-dokumentationszyklus.md) -- Erklärung von Zustand und CMDB-Status
- [cmdb.status](../../../i-doit-add-ons/api/methoden/v1/cmdb.status.md) -- Alle Status einer Installation über die API auslesen
- [Kontaktzuweisungsrollen](kontaktzuweisungsrollen.md) -- Weitere vordefinierte Inhalte verwalten
