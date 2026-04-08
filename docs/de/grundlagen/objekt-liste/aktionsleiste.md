---
title: Aktionsleiste
description: "Oberhalb einer Objekt-Liste befindet sich die Aktionsleiste, über die sich verschiedene Aktionen durchführen lassen."
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

Um ein Objekt zu editieren, wähle es über die Checkbox aus und klicke auf den Button **Editieren**. Wählst du mehrere Objekte aus, startet die [Listeneditierung](../../effizientes-dokumentieren/listeneditierung.md).

[![Objekt editieren](../../assets/images/de/grundlagen/aktionsleiste/3-al.png)](../../assets/images/de/grundlagen/aktionsleiste/3-al.png)

## Objekt duplizieren

Um ein [Objekt mit seinen Attributen zu kopieren](../../effizientes-dokumentieren/objekte-duplizieren.md), wird der Button **Duplizieren** verwendet.

## Objekt archivieren, als gelöscht markieren, wiederherstellen oder unwiderruflich löschen

Um ein oder mehrere Objekte in einen anderen [Zustand](../lebens-und-dokumentationszyklus.md) zu versetzen oder unwiderruflich zu löschen, verwende die Buttons **Archivieren**, **Löschen**, **Wiederherstellen**, **Purge** oder **Quickpurge**.

## Druckansicht

Über den Button **Druckansicht** öffnet sich ein Popup mit einer druck-optimierten Sicht auf die Liste. Die Liste wird durch Attribute ergänzt, die auf der Übersichtsseite des jeweiligen Objekts dargestellt sind.

[![druckansicht](../../assets/images/de/grundlagen/aktionsleiste/4-al.png)](../../assets/images/de/grundlagen/aktionsleiste/4-al.png)

!!! success "Druckvorschau des Webbrowsers"
    Der verwendete Webbrowser kann ebenfalls eine Druckansicht generieren. Hierbei werden überflüssige Elemente der Web GUI nicht angezeigt:

    *   Firefox: **Datei → Druckvorschau**
    *   Chrome: **Menü → Drucken..** oder **Steuerung+P**

## Objekt-Liste als CSV-Datei exportieren

Du kannst die angezeigte Objektliste über die Schaltfläche **Als CSV exportieren** als [CSV-Datei](../../daten-konsolidieren/csv-datenexport.md) herunterladen und mit Anwendungen von Drittanbietern weiterverarbeiten. Möchtest du verhindern, dass die Objekt-ID neben dem Titel in der CSV-Datei erscheint, aktiviere unter [Administration -> [Mandantenname] Verwaltung -> Einstellungen für [Mandantenname] -> CMDB](../../administration/verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md#cmdb) die Option **Bei CSV-Export von Listen Objekt-IDs entfernen**.

## Link zu dieser Seite

Über den Button **Link zu dieser Seite** lädst du die Objekt-Liste neu. Der Button ist auch nützlich, um die eindeutige URL zu erhalten -- diese sollte mit der in der Adressleiste des Browsers angezeigten URL übereinstimmen.

## Zustand wechseln

Um nur Objekte eines bestimmten [Zustands](../lebens-und-dokumentationszyklus.md) anzuzeigen, wähle den gewünschten Zustand über das Drop-Down-Menü auf der rechten Seite der Aktionsleiste. In Klammern siehst du pro Zustand, wie viele Objekte dieses Typs sich darin befinden. Standardmäßig zeigt i-doit den Zustand **Normal**. Wenn du den Zustand wechselst, speichert i-doit diese Auswahl -- sie wirkt sich dann auf alle Objekt-Listen aus.

[![zustand-wechseln](../../assets/images/de/grundlagen/aktionsleiste/5-al.png)](../../assets/images/de/grundlagen/aktionsleiste/5-al.png)

Du kannst den Vorlagenfilter in Objektlisten im Bereich [Verwaltung](../../administration/verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md#templates) aktivieren.

[![Activate Template](../../assets/images/de/grundlagen/aktionsleiste/6-al.png)](../../assets/images/de/grundlagen/aktionsleiste/6-al.png)
