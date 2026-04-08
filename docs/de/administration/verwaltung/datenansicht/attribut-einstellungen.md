---
title: Attribut Einstellungen
description: "Mit den Attribut Einstellungen legst du Pflichtfelder fest, definierst erweiterte Inhaltsvorgaben und steuerst die Sichtbarkeit von Attributen."
icon:
status:
lang: de
---
# Attribut Einstellungen

Mit den Attribut Einstellungen legst du Pflichtfelder fest, definierst erweiterte Inhaltsvorgaben und steuerst die Sichtbarkeit von Attributen. Du findest diese Funktion in der [Datenansicht](../index.md).

[![Attribut Einstellungen](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-1.png)](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-1.png)

## Attributsichtbarkeit

Die Sichtbarkeit von [Attributen](../../../grundlagen/attributfelder.md) kann in den Attribut Einstellungen angepasst werden.
Es ist damit möglich bestimmte Attribute in [Kategorien](../../../grundlagen/kategorien-und-attribute.md) und/oder auf der [Übersichtsseite von Objekttypen](../../../grundlagen/objekttyp-konfiguration.md) aus- oder einzublenden.
Klicke dafür beim jeweiligen Attributnamen auf **Bearbeiten** und wähle dort die gewünschte Einstellung unter **Sichtbarkeit** aus.

Die konfigurierte Sichtbarkeit wird für alle Benutzer übernommen.

[![Attributsichtbarkeit](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-2.png)](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-2.png)

## Rechte setzen

Die [Rechte](../berechtigungen.md) zur Ansicht und zum Bearbeiten der Attributsichtbarkeit kann pro Benutzer(-gruppe) vergeben werden. So ist es beispielsweise möglich und oft auch ratsam, dass nur bestimmte Benutzergruppen Attribute ausblenden können.

[![rechte-setzen](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-3.png)](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-3.png)

## Verwendung

Über die Schaltfläche **Hinzufügen** wählst du Kategorien aus (global, spezifisch oder benutzerdefiniert). Die neue Kategorie wird als unterster Eintrag hinzugefügt.

Über das Stift-Symbol editierst du die Sichtbarkeit und Validierung eines Attributs. Standardmäßig sind alle Attribute sichtbar.

[![button-angezeigt](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-4.png)](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-4.png)<br>
In diesem Zustand ist die Sichtbarkeit auf der Übersichtsseite mit **Sichtbar**  beschriftet.
Wenn du die Sichtbarkeit auf **Versteckt** setzt, wird auch die Anzeige angepasst<br>
[![button-ausgeblendet](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-5.png)](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-5.png)<br>

**Objekt Bezeichnung**, **Zustand** und **CMDB-Status** können **nicht** ausgeblendet werden. In den entsprechenden Spalten steht ein Hinweis "Kann nicht versteckt werden".

Wenn ein Attribut ausgeblendet ist, wird es in der Kategorie für alle Objekte (aller Objekttypen) nicht mehr angezeigt.

<!-- Wenn ein Attribut ausgeblendet werden soll aber über die "Attribut Einstellungen" als Pflichtfeld definiert ist, erhält der Benutzer eine Information (Popup), wenn er auf die Schaltfläche "Speichern" klickt:

!!! popup "Popup"
    _Die folgenden Attribute wurden zuvor als Pflichtfelder definiert:_
    [LISTE ALLER BETROFFENEN ATTRIBUTE]
    _Wenn Sie diese auf der Oberfläche verbergen wird die Pflichtfelddefinition für sie aufgehoben. Möchten Sie fortfahren?_

Durch eine Ja/Nein-Auswahl wird diese Änderung bestätigt oder verworfen. -->

Die dritte Auswahl erlaubt es, die ausgewählten Attribute nur auf Übersichtsseiten auszublenden, in den regulären Kategorien werden diese Attribute jedoch weiterhin angezeigt. Diese wird auf der Übersichtsseite auch so beschriftet:

[![button-auf-übersicht-ausgeblendet](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-6.png)](../../../assets/images/de/administration/verwaltung/datenansicht/attribut-einstellungen/as-1.png)

Unerwünschte Einträge entfernst du, indem du sie auswählst und auf **Entfernen** klickst.
