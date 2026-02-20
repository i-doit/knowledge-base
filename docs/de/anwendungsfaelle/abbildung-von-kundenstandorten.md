---
title: Abbildung von Kundenstandorten
description: Eine Anleitung um Kundenstandorte in i-doit darzustellen
lang: de
---

Kunden haben oftmals mehrere Standorte, diese sollen hierarchisch dargestellt und jeweils IT-Komponenten zugeordnet werden.

## Aufgabenstellung

Wir statten unsere Kunden mit Hard- und Software-Komponenten aus. Daher ist es essentiell, sowohl unsere Kunden als auch die dort verwendeten IT-Komponenten zu dokumentieren. Um eine einfache Übersicht zu generieren, möchten wir die Standortsicht von i-doit nutzen.

[![Standortsicht](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/1-avk.png)](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/1-avk.png)

[![Objekt](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/2-avk.png)](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/2-avk.png)

## Konfiguration

Alles, was zur Konfiguration benötigt wird, befindet sich in der **Objekttyp-Konfiguration**, zu erreichen über **Verwaltung → Datenstruktur → Objekttypen**. Kunden legen wir als eigenständigen Objekttyp **Kunde** ab. Der Objekttyp wird als **Standort** definiert. Zudem sollten mindestens die Kategorien **Standort** und **Räumlich zugeordnete Objekte** zugeordnet werden. Ggf. sind weitere Kategorien (**Organisation**, **Anschrift**, **E-Mail-Adressen**, **Kontaktzuweisung**, **Zugriff**) hilfreich, um die Kunden so detailliert wie nötig zu dokumentieren.

[![Objekttyp-Konfiguration](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/3-avk.png)](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/3-avk.png)

[![Objektsicht](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/4-avk.png)](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/4-avk.png)

## Anwendung

Beim Anlegen eines neuen Kunden sollte dieser der [Root-Lokation](../glossar.md) zu geordnet werden. Auch verschachtelte Konstrukte mit Sub-Kunden ist möglich. Hierfür werden Sub-Kunden anderen Kunden räumlich zugeordnet. Unterhalb der Kunden können nun beliebig viele Objekte zugeordnet werden. Dies geschieht über die Kategorie "Räumlich zugeordnete Objekte" oder alternativ über die Kategorie "Standort" innerhalb der Objekte, die zugeordnet werden sollen.
