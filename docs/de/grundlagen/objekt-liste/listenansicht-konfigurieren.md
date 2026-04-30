---
title: Listenansicht Konfigurieren
description: "Die Ansicht der Objekt-Listen kann pro Liste und pro Benutzer individuell konfiguriert werden."
icon:
status:
lang: de
---

# Listenansicht Konfigurieren

Die Ansicht der [Objekt-Listen](index.md) kann pro Liste und pro Benutzer individuell konfiguriert werden.

## Konfiguration aufrufen

Die Konfiguration der jeweiligen Objekt-liste wird über den Button [![systemeinstellungen](../../assets/images/de/grundlagen/listenansicht-konfigurieren/1-lk.svg)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/1-lk.svg) in der [Navigations- und Filterleiste](navigieren-und-filtern.md) erreicht. Alternativ ist der Weg über **Verwaltung → Benutzereinstellungen → Objekt-Listen → [Objekttyp]**.

[![objekt-listen](../../assets/images/de/grundlagen/listenansicht-konfigurieren/2-lk.png)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/2-lk.png)

## Attribute auswählen

Ähnlich wie beim [Report Manager](../../auswertungen/report-manager.md) werden über die Auswahl der Kategorie und dem dort enthaltenen Attribut die Spalten definiert.

Zuerst wird eine [globale, spezifische](../struktur-it-dokumentation.md) oder [benutzerdefinierte](../benutzerdefinierte-kategorien.md) Kategorie im Drop-Down-Menü ausgewählt. Über ein Textfeld lässt sich die Liste der Kategorien filtern.

Bei Auswahl einer Kategorie erscheinen diejenigen Attribute, die sich als Spalte definieren lassen. Bei Klick auf den Button [![plus](../../assets/images/de/grundlagen/listenansicht-konfigurieren/3-lk.svg)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/3-lk.svg) wird das Attribut zu den gewählten Attributen hinzugefügt.

Die Liste der gewählten Attribute lässt sich manipulieren. Per Drag'n'Drop ist die Reihenfolge zu beeinflussen. Je höher das Attribut in der Auswahl, desto weiter links wird es in der Objekt-Liste dargestellt. Über den Button [![delete](../../assets/images/de/grundlagen/listenansicht-konfigurieren/4-lk.svg)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/4-lk.svg) wird ein Attribut entfernt.

!!! info "Einschränkung"
    Es stehen nicht alle Attribute aller Kategorien zur Verfügung.

Attribute, die aus [Listen-Kategorien (Multi-Value)](../struktur-it-dokumentation.md) stammen, können unterschiedlich dargestellt werden. Über das Drop-Down-Menü **Gruppierte Daten darstellen als** können die Attribute entweder **Kommasepariert** nebeneinander oder als **Liste** untereinander dargestellt werden. Beispiel hierfür ist das Attribut **Hostadressen** der Kategorie **Hostadresse**.

!!! success "Tipp"
    In der Standard-Installation von i-doit wird in jeder Objekt-Liste die [ID](../eindeutige-referenzierungen.md) angezeigt. Da diese für den normalen Gebrauch keine Rolle spielt, kann die entsprechende Spalte aus den Listen entfernt werden. Dies fördert zudem die Übersichtlichkeit.

!!! info "Performance"
    Objektlisten mit einer großen Anzahl an Attributen können zu einer verringerten Performance führen. Sollten Leistungseinbußen festgestellt werden, sollte die Anzahl der ausgewählten Attribute verringert oder die [Systemressourcen](../../installation/systemvoraussetzungen.md) erweitert werden.

## Spalten vorsortieren

Welche Sortierung bereits beim Laden der Objekt-Liste vorgenommen werden soll, kann ebenfalls konfiguriert werden. Neben einigen Attributen existiert ein Auswahl-Button, der angeklickt werden kann. Im Drop-Down-Menü **Sortieren** kann eine auf- oder absteigende Sortierung des gewählten Attributs festgelegt werden.

Ohne festgelegte Sortierung werden die Objekte nach deren [ID](../eindeutige-referenzierungen.md) sortiert.

!!! info "Einschränkungen"
    Für die Sortierung von Attributen gelten folgende Einschränkungen:

    *   Nicht alle Attribute können sortiert werden.
    *   Die nachträgliche Sortierung über die Spaltenüberschriften ist bei einer Objekt-Liste mit mehr als **10.000** Objekten nicht möglich. Diese [Limitierung kann angepasst werden](erweiterte-einstellungen.md).

## Filterung beeinflussen

Du kannst eine Objekt-Liste bereits beim Laden filtern. Wähle dazu im Drop-Down-Menü **Standardfilter** das gewünschte Attribut aus und gib im Textfeld rechts daneben den Filterwert ein. Möchtest du nicht jedes Mal ein Attribut auswählen, setze den Filter auf alle Felder.

## Arten, ein Objekt zu öffnen

Oft reicht der Blick auf die Objekt-Liste nicht aus, um alle benötigten Attribute abzurufen. Du kannst ein Objekt auf zwei Wegen direkt aus der Liste heraus öffnen:

*   **Per Zeilenklick**: Aktiviere die Checkbox **Bei dieser Liste soll das Objekt über den Klick auf die Zeile geöffnet werden.** Dann öffnest du ein Objekt mit einem Klick auf seine Zeile.
*   **Per Editieren-Button**: Markiere die Checkbox eines Objekts und klicke auf **Editieren**. Das Objekt wird geöffnet und ist sofort im Bearbeitungsmodus.

Die Zeilenklick-Option kannst du für alle Benutzer und alle Objekt-Listen gleichzeitig aktivieren. In der [Verwaltung](../../administration/verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md#datenbank) findest du dazu den Button **Zeilenklick in Objektlisten aktivieren**.

## Konfiguration zurücksetzen

Jede Objektliste hat eine Standardkonfiguration. Wenn du die Objektliste auf die Standardeinstellungen zurücksetzen möchtest, klicke auf die Schaltfläche **Liste auf [Mandanten-Name] Standard Liste zurücksetzen** oder **Liste auf i-doit Standard Liste zurücksetzen**.

## Konfiguration als Standard setzen

Wenn du eine Objektliste als Standardliste festlegen willst, klick auf die Schaltfläche **Als [Mandanten-Name] Standard Liste definieren** im Feld **Konfiguration als Standard definieren**. Das betrifft auch Objektlisten, die schon von anderen Benutzern geändert wurden.

[![standard-setzen](../../assets/images/de/grundlagen/listenansicht-konfigurieren/5-lk.png)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/5-lk.png)

## Konfiguration anderen Benutzern zuweisen

Wenn du eine bestimmte Objektliste für andere Benutzer vordefinieren möchtest, wähle sie im Feld **Konfiguration anderen Benutzern zuweisen** über einen Objektbrowser aus. Anschließend wird die Auswahl mit der Schaltfläche **Konfiguration überschreiben** bestätigt.

[![benutzer-zuweisen](../../assets/images/de/grundlagen/listenansicht-konfigurieren/6-lk.png)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/6-lk.png)

## Speichern der Konfiguration

Über den Button **Speichern** werden alle Änderungen an der Konfiguration übernommen.

!!! info "Browser Cache"
    Sollte die Listenansicht beim nächsten Aufruf der Objekt-Liste nicht mit der Konfiguration übereinstimmen, hilft es, den Cache des Webbrowsers zu leeren.

## Rechte zum Bearbeiten der Listenansicht

Die [Rechteverwaltung](../../effizientes-dokumentieren/rechteverwaltung/cmdb.md) erlaubt das Vergeben von Rechten, welche Person oder Personengruppe die Listenansicht konfigurieren und anderen Benutzern vorgeben darf.
