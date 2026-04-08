---
title: Konzepte und Begriffe
description: Die wichtigsten Konzepte in i-doit — Objekte, Objekttypen, Kategorien, Attribute und Beziehungen einfach erklärt
icon:
status:
lang: de
---

# Konzepte und Begriffe

Bevor du mit i-doit arbeitest, lohnt es sich, die grundlegenden Konzepte zu verstehen. i-doit folgt einer klaren Struktur — wenn du diese einmal verinnerlicht hast, erschließt sich der Rest fast von selbst.

## Objekte — das Herzstück

Alles in i-doit ist ein **Objekt**. Ein Server ist ein Objekt. Ein Raum ist ein Objekt. Eine Person, ein Vertrag, eine Softwarelizenz — alles Objekte. Ein Objekt repräsentiert ein reales oder logisches Element deiner IT-Landschaft.

Jedes Objekt hat:

- einen **Titel** (z.B. „Webserver-01")
- einen **Objekttyp** der bestimmt, was es ist (z.B. „Server")
- einen **Status** im [Lebenszyklus](../grundlagen/lebens-und-dokumentationszyklus.md) (in Betrieb, geplant, defekt, ausgemustert)
- eine eindeutige **ID** und **SYSID** für technische Referenzierung

## Objekttypen — die Schablone

Ein **Objekttyp** ist die Vorlage, die bestimmt welche Art von Objekt du anlegst. Der Objekttyp „Server" sagt: *Dieses Objekt ist ein Server und hat diese Kategorien.*

i-doit bringt über 70 [vordefinierte Objekttypen](../grundlagen/objekttypen/index.md) mit — von Server, Client und Switch über Raum, Gebäude und Rack bis hin zu Person, Organisation und Vertrag. Du kannst [eigene Objekttypen](../grundlagen/benutzerdefinierte-objekttypen.md) anlegen und bestehende [konfigurieren](../grundlagen/objekttyp-konfiguration.md).

Objekttypen sind in **Gruppen** organisiert, die das Hauptmenü strukturieren:

- **Hardware** — Server, Client, Switch, Router, Drucker, …
- **Software** — Betriebssystem, Applikation, Datenbank, …
- **Netzwerk** — Netz, VLAN, Supernet, …
- **Infrastruktur** — Gebäude, Raum, Rack, Klimaanlage, …
- **Kontakte** — Person, Organisation, Personengruppe
- **Andere** — Vertrag, Kabel, Mobiltelefon, …

## Kategorien — die Datenfelder

Eine **Kategorie** ist eine Sammlung zusammengehöriger Datenfelder. Die Kategorie „Modell" enthält z.B. die Felder Hersteller, Modellbezeichnung und Seriennummer. Die Kategorie „Hostadresse" enthält IP-Adresse, Subnetzmaske und Gateway.

i-doit hat über 120 [vordefinierte Kategorien](../grundlagen/kategorien/index.md). Jeder Objekttyp bekommt die Kategorien zugewiesen, die für ihn sinnvoll sind — ein Server braucht „CPU" und „Speicher", ein Raum braucht „Standort" und „Räumlich zugewiesene Objekte".

Es gibt zwei Arten von Kategorien:

| Typ | Beschreibung | Beispiel |
|-----|-------------|---------|
| **Single-Value** | Genau ein Eintrag pro Objekt | Modell, Formfaktor, Buchhaltung |
| **Multi-Value** | Beliebig viele Einträge | IP-Adressen, CPUs, Kontaktzuweisungen |

Und drei Zuordnungsebenen:

| Ebene | Beschreibung | Beispiel |
|-------|-------------|---------|
| **Globale Kategorien** | Für alle Objekttypen verfügbar | Allgemein, Modell, Standort |
| **Spezifische Kategorien** | Nur für einen Objekttyp | „Monitor" nur für Monitore |
| **Benutzerdefinierte Kategorien** | Von dir selbst erstellt | Eigene Felder nach Bedarf |

Mehr dazu: [Kategorien und Attribute](../grundlagen/kategorien-und-attribute.md) | [Zuordnung von Kategorien zu Objekttypen](../grundlagen/zurodnung-von-kategorien-zu-objekttypen.md)

## Attribute — die einzelnen Felder

Ein **Attribut** ist ein einzelnes Datenfeld innerhalb einer Kategorie. Die Kategorie „Modell" hat die Attribute *Hersteller*, *Modellbezeichnung* und *Seriennummer*. Die Kategorie „CPU" hat *Bezeichnung*, *Taktfrequenz* und *Kerne*.

Attribute haben verschiedene Feldtypen:

- **Text** — Freitext (z.B. Seriennummer)
- **Dialog** — Auswahlliste (z.B. Hersteller)
- **Dialog+** — Auswahlliste, die du selbst erweitern kannst
- **Objekt-Browser** — Verknüpfung zu einem anderen Objekt
- **Datum** — Datumsfeld
- **Zahl** — Numerischer Wert (z.B. RAM in MB)

Mehr dazu: [Attributfelder](../grundlagen/attributfelder.md) | [Dialog-Admin](../grundlagen/dialog-admin.md)

## Beziehungen — das Netzwerk

Objekte stehen in i-doit nicht isoliert. Ein Server *steht in* einem Rack. Ein Betriebssystem *läuft auf* einem Server. Eine Person *ist Ansprechpartner für* einen Vertrag. Diese Verbindungen nennt i-doit **Beziehungen**.

Beziehungen entstehen automatisch, sobald du in einer Kategorie ein anderes Objekt verknüpfst — z.B. wenn du einem Server einen Standort zuweist. Du kannst sie im [CMDB-Explorer](../auswertungen/cmdb-explorer/index.md) visuell darstellen und analysieren.

Jede Beziehung hat:

- ein **Objekt A** (Master) und ein **Objekt B** (Slave)
- einen **Beziehungstyp** (z.B. „Standort", „Softwarezuweisung", „Kontaktzuweisung")
- eine **Gewichtung** die bestimmt, welche Richtung im CMDB-Explorer hervorgehoben wird

Mehr dazu: [Objekt-Beziehungen](../grundlagen/objekt-beziehungen.md)

## Standorte — die physische Welt

Standorte bilden eine **Hierarchie**: Land → Stadt → Gebäude → Etage → Raum → Rack → Server. Jedes Objekt kann einen Standort haben, und Objekte die als Standort markiert sind, können wiederum andere Objekte aufnehmen.

Die Standort-Hierarchie ermöglicht:

- **Standort-Browser** — Baumansicht aller Standorte
- **Rack-Ansicht** — Visuelle Darstellung der Rack-Belegung
- **Standort-Vererbung** — IP-Netze und Kontakte können vom übergeordneten Standort geerbt werden

Mehr dazu: [Standorte](../anwendungsfaelle/standorte.md)

## Lebenszyklus — von der Planung bis zur Ausmusterung

Jedes Objekt in i-doit durchläuft einen **Lebenszyklus**:

```
Geplant → In Betrieb → Defekt/Außer Betrieb → Ausgemustert
```

Zusätzlich gibt es den **Dokumentationszyklus** der bestimmt, wie i-doit intern mit dem Objekt umgeht:

- **Normal** — sichtbar und aktiv
- **Archiviert** — ausgeblendet, aber wiederherstellbar
- **Gelöscht** — markiert zur endgültigen Löschung
- **Bereinigt** — unwiderruflich entfernt

Mehr dazu: [Lebens- und Dokumentationszyklus](../grundlagen/lebens-und-dokumentationszyklus.md)

## Auf einen Blick

| Konzept | Frage die es beantwortet | Beispiel |
|---------|------------------------|---------|
| **Objekttyp** | Was ist es? | Server |
| **Objekt** | Welches genau? | Webserver-01 |
| **Kategorie** | Welche Informationsgruppe? | Modell, CPU, Netzwerk |
| **Attribut** | Welches Detail? | Seriennummer: ABC123 |
| **Beziehung** | Wie hängt es zusammen? | Webserver-01 *steht in* Rack-A3 |
| **Standort** | Wo ist es? | Gebäude A → Raum 3.14 → Rack A3 |

## Siehe auch

- [Was ist i-doit?](was-ist-i-doit.md) — Überblick über das Produkt
- [Wie beginne ich zu dokumentieren?](wie-beginne-ich-zu-dokumentieren.md) — Praktischer Einstieg
- [Grundlagen](../grundlagen/index.md) — Alle Details zu Objekten, Listen und Kategorien
- [Glossar](../glossar.md) — Begriffsverzeichnis
