---
title: "Dialog-Admin"
description: "Der Dialog-Admin ist die zentrale Verwaltungsstelle für alle Dialog+-Felder in _i-doit_ -- also Dropdown-Felder, deren Auswahlwerte du selbst bearbeiten..."
icon:
status:
lang: de
---
# Dialog-Admin

Der Dialog-Admin ist die zentrale Verwaltungsstelle für alle **Dialog+**-Felder in _i-doit_ -- also Dropdown-Felder, deren Auswahlwerte du selbst bearbeiten kannst.

Diese Felder kommen in vielen [Kategorien](../glossar.md) der [IT-Dokumentation](../glossar.md) zum Einsatz. Über den Dialog-Admin verwaltest du alle Werte an einer zentralen Stelle.

## Übersicht

Du findest den Dialog-Admin unter **Verwaltung → Vordefinierte Inhalte → Dialog-Admin**. Im linken Navigationsbaum sind alle [Attribute](../glossar.md) vom Feldtyp **Dialog+** alphabetisch nach ihren zugehörigen Kategorien sortiert.

Wenn du eine [benutzerdefinierte Kategorie](benutzerdefinierte-kategorien.md) mit einem **Dialog+**-Attribut angelegt hast, erscheint dieses Attribut ebenfalls im Navigationsbaum -- unter dem Abschnitt **Benutzerdefinierte Dialog+**.

[![benutzerdefinierte-dialog+](../assets/images/de/grundlagen/dialog-admin/1-da.png)](../assets/images/de/grundlagen/dialog-admin/1-da.png)

## Werte anzeigen

Klicke im linken Navigationsbaum auf ein Attribut, um im Hauptbereich die bisher dokumentierten Werte zu sehen.

[![werte-anzeigen](../assets/images/de/grundlagen/dialog-admin/2-da.png)](../assets/images/de/grundlagen/dialog-admin/2-da.png)

## Werte anlegen

So legst du einen neuen Wert an:

1. Klicke oberhalb der Übersicht auf den Button **Neu**.
2. Fülle das Formular aus:
    - **ID**: _i-doit_ vergibt automatisch einen eindeutigen Identifier. Dieser ist z. B. beim Umgang mit der [API](../i-doit-add-ons/api/index.md) hilfreich.
    - **Bezeichnung**: Der Wert, der in der Web GUI angezeigt wird, wenn du das **Dialog+**-Attribut betrachtest oder editierst.
    - **Konstante**: Ein eindeutiger, aussagekräftiger String -- besonders hilfreich bei der Verwendung der API.
    - **Status**: Jeder Wert hat einen Zustand. Wähle **Normal (2)**, damit der Wert in der Dokumentation verwendbar ist.
3. Klicke auf **Speichern**.

[![werte-anlegen](../assets/images/de/grundlagen/dialog-admin/3-da.png)](../assets/images/de/grundlagen/dialog-admin/3-da.png)

## Werte bearbeiten

Um einen bestehenden Wert zu bearbeiten, klicke in der Übersicht auf den gewünschten Wert. Das Formular entspricht dem beim Anlegen.

!!! info "Auswirkungen"
    Änderungen und Löschungen wirken sich unmittelbar auf die gesamte IT-Dokumentation aus: Änderst du einen Wert im Dialog-Admin, ändert er sich überall automatisch. Löschst du einen Wert, wird er überall entfernt, wo er verwendet wurde. Prüfe daher vor dem Löschen über einen [Report](../auswertungen/report-manager.md), welche Objekte diesen Wert nutzen. Über die [Listeneditierung](../effizientes-dokumentieren/listeneditierung.md) kannst du dann für alle betroffenen Objekte einen alternativen Wert setzen.

## Werte löschen

So löschst du einen Wert:

1. Markiere in der Übersicht die Checkbox des Wertes.
2. Klicke auf den Button **Purge**.

Der Wert wird unwiderruflich gelöscht. In der tabellarischen Übersicht siehst du zu jedem Wert, ob er gelöscht werden kann. Manche Werte setzt _i-doit_ als gegeben voraus, um bestimmte Funktionalitäten zu gewährleisten -- diese lassen sich nicht entfernen.

## Rechte setzen

Du kannst pro Benutzer oder Benutzergruppe Rechte auf jedes **Dialog+**-Attribut vergeben. So stellst du sicher, dass nur bestimmte Gruppen Werte anlegen, ändern oder löschen dürfen, während andere Gruppen die Werte lediglich verwenden können.
