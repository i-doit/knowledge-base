---
title: Abbildung von Kundenstandorten
description: Eine Anleitung um Kundenstandorte in i-doit darzustellen
lang: de
---

In diesem Artikel erfährst du, wie du Kunden mit mehreren Standorten hierarchisch in i-doit abbildest und IT-Komponenten zuordnest.

## Aufgabenstellung

Du stattest deine Kunden mit Hard- und Software-Komponenten aus und möchtest sowohl die Kunden als auch deren IT-Komponenten dokumentieren. Die Standortsicht von i-doit liefert dafür eine übersichtliche Darstellung.

[![Standortsicht](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/1-avk.png)](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/1-avk.png)

[![Objekt](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/2-avk.png)](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/2-avk.png)

## Konfiguration

So richtest du den Objekttyp ein:

1. Öffne **Verwaltung → Datenstruktur → Objekttypen**.
2. Erstelle einen neuen Objekttyp **Kunde** und definiere ihn als **Standort**.
3. Ordne mindestens die Kategorien **Standort** und **Raeumlich zugeordnete Objekte** zu.
4. Optional ergänzt du weitere Kategorien wie **Organisation**, **Anschrift**, **E-Mail-Adressen**, **Kontaktzuweisung** oder **Zugriff**.

[![Objekttyp-Konfiguration](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/3-avk.png)](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/3-avk.png)

[![Objektsicht](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/4-avk.png)](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/4-avk.png)

## Anwendung

So legst du einen Kunden an:

1. Erstelle ein neues Kunden-Objekt und ordne es der [Root-Lokation](../glossar.md) zu.
2. Für verschachtelte Strukturen ordnest du Sub-Kunden räumlich anderen Kunden zu.
3. Weise den Kunden beliebig viele Objekte zu -- entweder über die Kategorie **Raeumlich zugeordnete Objekte** im Kunden oder über die Kategorie **Standort** im jeweiligen Objekt.
