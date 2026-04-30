---
title: Dokumenterstellung
description: Dokumente erstellen vorlagen platzhalter
icon:
status:
lang: de
---

# Dokumenterstellung

## Dokumente erstellen im Add-on

Sobald du eine [Vorlage](./dokumentenvorlagen.md) erstellt hast, erzeugst du im Menüpunkt "Dokumente" unter der zugehörigen Dokumenten-Kategorie ein Dokument zu einem Objekt.

[![Vorlage](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/1-de.png)](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/1-de.png)

Über die Schaltfläche "Neu" öffnet sich eine weitere Ansicht. Hier gibst du einen Titel für das Dokument an und wählst das gewünschte Template sowie das Objekt bzw. die Objekte aus, für die das Dokument angelegt werden soll.

!!! attention "Kategorie Dokumente"
    Damit ein Dokument für ein Objekt erstellt werden kann ist es notwendig, dass die Kategorie "Dokumente" mit dem Objekttyp verknüpft ist. Wenn der Objekttyp nicht über diese Kategorie verfügt, können keine Dokumente für die darin enthaltenen Objekte erstellt werden, da sie nicht in der Auswahl auftauchen.

Zusätzlich kannst du eine Bemerkung zum Objekt verfassen.

[![Bemerkung](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/2-de.png)](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/2-de.png)

!!! info "Hinweis"
    Eine gelbe Infobox gibt einen Hinweis darauf, wenn mindestens eine unfertige Dokumentenvorlage existiert, also noch keine Kapitel besitzt. Sollte die gewünschte Vorlage nicht auftauchen, sollte die Kapitel Konfiguration noch einmal geprüft werden.

Über die Schaltfläche "Hinzufügen" startest du die Dokumentenerstellung. Nach Abschluss erscheinen die Dokumente in der Liste und du lädst sie im gewünschten Format herunter.

Klicke ein Dokument in der Liste an oder aktiviere dessen Checkbox und klicke auf "Editieren", um weitere Details einzusehen. In dieser Ansicht erzeugst du auch neue Revisionen -- relevant, wenn sich Informationen in der Dokumentation geändert haben oder Änderungen an der Vorlage ins Dokument übertragen werden sollen.

Im unteren Bereich lädst du die aktuelle Version und alle Revisionen herunter. Der Download aus der Dokumentenübersicht bezieht sich immer auf die jüngste Revision.

[![Hinzufügen](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/3-de.png)](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/3-de.png)

!!! success "Revisionen aus der Liste heraus erzeugen"
    Eine neue Revision kann alternativ auch direkt in der Liste der Dokumente erzeugt werden. Hierzu wird das gewünschte Dokument über dessen Checkbox ausgewählt und anschließend die Schaltfläche "Revision erzeugen" in der Kopfzeile verwendet.
    [![Revisionen](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/4-de.png)](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/4-de.png)

## Dokumente erstellen in der Kategorie "Dokumente"

Wenn du ein Dokument für ein Objekt in i-doit erzeugt hast, findest du es in der Kategorie "Dokumente" des Objekts. Auch hier lädst du das Dokument in den entsprechenden Formaten herunter. In der Detailansicht siehst du die Revisionen und erzeugst neue.

Über "Neu" erstellst du weitere Dokumente zu dem Objekt. Das Objekt ist bereits vorausgewählt -- du vergibst einen Titel und verknüpfst eine Vorlage.

[![Dokumente](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/5-de.png)](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/5-de.png)

## Dokumentenerstellung über die i-doit Console

Neue Revisionen und den Export von Dokumenten führst du auch über die i-doit [Console](../../automatisierung-und-integration/cli/index.md) durch und automatisierst sie.

Für diese Vorgänge steht der Command [documents](index.md#cli-console-commands-und-optionen) zur Verfügung.
