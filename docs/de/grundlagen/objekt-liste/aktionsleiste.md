---
title: Aktionsleiste
description:
icon:
status:
lang: de
---

# Aktionsleiste

Oberhalb einer [Objekt-Liste](index.md) befindet sich die Aktionsleiste, über die sich verschiedene Aktionen durchführen lassen.

[![objekt-erstellen](../../assets/images/de/grundlagen/aktionsleiste/1-al.png)](../../assets/images/de/grundlagen/aktionsleiste/1-al.png)

## Objekt erstellen

Beim Erstellen eines neuen Objekts stehen verschiedene Optionen zur Verfügung:

-   **Neu** oder **Neues Objekt** erstellen ein neues Objekt, das über Formulare editiert werden kann
-   **Neues Objekt aus Template** wechselt zum Dialog, um aus einer [Vorlage](../../effizientes-dokumentieren/templates.md) ein oder mehrere Objekte zu erstellen
-   **Neues Template erzeugen** ist ähnlich zum ersten Punkt, allerdings wird der [Zustand](../lebens-und-dokumentationszyklus.md) **Template** vorausgewählt, sodass nach dem Speichern aus dem Objekt eine [Vorlage](../../effizientes-dokumentieren/templates.md) wird.

[![Objekt erstellen](../../assets/images/de/grundlagen/aktionsleiste/2-al.png)](../../assets/images/de/grundlagen/aktionsleiste/2-al.png)

## Objekt editieren

Um ein Objekt zu editieren, wählt man das zu editierende Objekt über die jeweilige Checkbox aus und klickt auf den Button **Editieren**. Werden mehrere Objekte ausgewählt, startet die [Listeneditierung](../../effizientes-dokumentieren/listeneditierung.md).

[![Objekt editieren](../../assets/images/de/grundlagen/aktionsleiste/3-al.png)](../../assets/images/de/grundlagen/aktionsleiste/3-al.png)

## Objekt duplizieren

Um ein [Objekt mit seinen Attributen zu kopieren](../../effizientes-dokumentieren/objekte-duplizieren.md), wird der Button **Duplizieren** verwendet.

## Objekt archivieren, als gelöscht markieren, wiederherstellen oder unwiderruflich löschen

Um ein oder mehrere Objekte in einen anderen [Zustand](../lebens-und-dokumentationszyklus.md) zu versetzen oder sogar unwiderruflich zu löschen, können die Buttons **Archivieren**, **Löschen**, **Wiederherstellen**, **Purge** und **Quickpurge** angeklickt werden.

## Druckansicht

Über den Button **Druckansicht** öffnet sich ein Popup mit einer druck-optimierten Sicht auf die Liste. Die Liste wird durch Attribute ergänzt, die auf der Übersichtsseite des jeweiligen Objekts dargestellt sind.

[![druckansicht](../../assets/images/de/grundlagen/aktionsleiste/4-al.png)](../../assets/images/de/grundlagen/aktionsleiste/4-al.png)

!!! success "Druckvorschau des Webbrowsers"
    Der verwendete Webbrowser kann ebenfalls eine Druckansicht generieren. Hierbei werden überflüssige Elemente der Web GUI nicht angezeigt:

    *   Firefox: **Datei → Druckvorschau**
    *   Chrome: **Menü → Drucken..** oder **Steuerung+P**

## Objekt-Liste als CSV-Datei exportieren

Sie können die angezeigte Objektliste über die Schaltfläche "Als CSV exportieren" als [CSV-Datei](../../daten-konsolidieren/csv-datenexport.md) herunterladen und anschließend mit Anwendungen von Drittanbietern weiterverarbeiten. Wenn Sie nicht möchten, dass die Objekt-ID neben dem Titel in der CSV-Datei angezeigt wird, können Sie unter [Administration -> [Mandantenname] Verwaltung -> Einstellungen für [Mandantenname] -> CMDB](../../system-administration/administration/tenant-management/settings-for-tenant.md#cmdb) die Option "Bei CSV-Export von Listen Objekt-IDs entfernen" auswählen.


Die angezeigte Objekt-Liste lässt sich über den Button **Als CSV exportieren** [im CSV-Format als Datei herunterladen](../../daten-konsolidieren/csv-datenexport.md) und mit Dritt-Applikationen weiterverarbeiten.

## Link zu dieser Seite

Um die Seite und damit die Objekt-Liste neu zu laden, kann der Button **Link zu dieser Seite** verwendet werden. Der Button ist ebenfalls nützlich, um die eindeutige URL zu erhalten. Diese sollte allerdings mit der in der Adressleiste des Webbrowsers angezeigten URL übereinstimmen.

## Zustand wechseln

Um nur Objekte eines bestimmten [Zustands](../lebens-und-dokumentationszyklus.md) anzuzeigen, kann der jeweilige Zustand über das Drop-Down-Menü auf der rechten Seite der Aktionsleiste ausgewählt werden. In Klammern ist pro Zustand angegeben, wie viele Objekte diesen Typs sich im jeweiligen Zustand befinden. Der ausgewählte Zustand ist standardmäßig auf **Normal** gestellt. Ein Wechsel auf einen anderen Zustand wird gespeichert und wirkt sich daher auf alle anderen Objekt-Listen aus.

[![zustand-wechseln](../../assets/images/de/grundlagen/aktionsleiste/5-al.png)](../../assets/images/de/grundlagen/aktionsleiste/5-al.png)

Du kannst den Vorlagenfilter in Objektlisten im Bereich [Verwaltung](../../administration/verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md#templates) aktivieren.

[![Activate Template](../../assets/images/de/grundlagen/aktionsleiste/6-al.png)](../../assets/images/de/grundlagen/aktionsleiste/6-al.png)
