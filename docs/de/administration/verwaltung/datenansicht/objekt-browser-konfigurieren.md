---
title: "Objekt-Browser Konfiguration"
description: "Der Objekt-Browser stellt Objekte tabellarisch dar."
icon:
status:
lang: de
---
# Objekt-Browser Konfiguration

Der Objekt-Browser ist der Dialog zur Auswahl von Objekten für ein Attribut, zum Beispiel der Server, auf denen eine Anwendung installiert ist. Er stellt die auswählbaren Objekte tabellarisch dar. Über die Konfiguration wird die Tabelle an die Bedürfnisse der Benutzer angepasst, etwa die sichtbaren Spalten, die Sortierreihenfolge und die angebotenen Objekttypen.

## Konfiguration aufrufen

Die Konfiguration wird über **Verwaltung → Datenansicht → Objekt-Browser konfigurieren** erreicht.

[![Liste aller konfigurierbaren Objekt-Browser](../../../assets/images/de/administration/verwaltung/datenansicht/objekt-browser-konfigurieren/1-obk.png)](../../../assets/images/de/administration/verwaltung/datenansicht/objekt-browser-konfigurieren/1-obk.png)

Jede Zeile ist ein Objekt-Browser, benannt nach der Kategorie und dem Attribut, zu dem er gehört. Die Spalte **Angezeigte Attribute** zeigt, welche Attribute ein Objekt-Browser derzeit darstellt, oder `Standard`, wenn er noch nie konfiguriert wurde. Anschließend wird der Objekt-Browser geöffnet, der geändert werden soll, zum Beispiel `Anwendungen » Installation / Installiert auf`.

[![Konfigurationsformular eines einzelnen Objekt-Browsers](../../../assets/images/de/administration/verwaltung/datenansicht/objekt-browser-konfigurieren/2-obk.png)](../../../assets/images/de/administration/verwaltung/datenansicht/objekt-browser-konfigurieren/2-obk.png)

## Attribute auswählen

Ähnlich wie bei der [Konfiguration der Listenansicht](../../../grundlagen/objekt-liste/listenansicht-konfigurieren.md) werden über die Auswahl der Kategorie und dem dort enthaltenen Attribut die Spalten definiert.

Zuerst wird unter **Anzuzeigende Attribute** der Tab **Global**, **Spezifisch** oder **Benutzerdefiniert** gewählt, passend zur Art der Kategorie. Danach wird im Drop-Down-Menü eine Kategorie ausgewählt, zum Beispiel **IP-Adresse**. Solange keine Kategorie ausgewählt ist, bleibt der Bereich unterhalb des Drop-Down-Menüs leer und zeigt **Keine verwendbaren Attribute in dieser Kategorie**.

Bei Auswahl einer Kategorie erscheinen diejenigen Attribute, die sich als Spalte definieren lassen. Bei Klick auf den Plus-Button wird das Attribut zu den gewählten Attributen auf der rechten Seite hinzugefügt. Die Kategorie kann beliebig oft gewechselt werden, sodass sich Spalten aus mehreren Kategorien kombinieren lassen. Über die Radio-Buttons in der Spalte **Sortiert nach** wird die Standardsortierung festgelegt, über den roten Button wird ein Attribut wieder entfernt. Die Konfiguration wird mit dem Speichern wirksam.

Die gewählten Attribute werden als zusätzliche Spalten in diesem Objekt-Browser dargestellt.

[![Objekt-Browser mit den konfigurierten Spalten](../../../assets/images/de/administration/verwaltung/datenansicht/objekt-browser-konfigurieren/3-obk.png)](../../../assets/images/de/administration/verwaltung/datenansicht/objekt-browser-konfigurieren/3-obk.png)

## Geltungsbereich einer Konfiguration

Eine Konfiguration gehört zu einem Objekt-Browser, nicht zu einem Objekttyp. Die Spalten gelten daher für alle Objekttypen, die dieser Objekt-Browser anbietet, und jeder andere Objekt-Browser behält seine eigenen Spalten.

!!! info "Objekt-Listen"
    Die Spalten einer normalen Objekt-Liste werden nicht hier konfiguriert. Dafür wird in der Liste selbst der Button **Listenansicht konfigurieren** verwendet.

## Weiterführende Informationen

*   [Listenansicht Konfigurieren](../../../grundlagen/objekt-liste/listenansicht-konfigurieren.md)
*   [Attribut Einstellungen](attribut-einstellungen.md)
