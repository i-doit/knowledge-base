---
title: Dokumenterstellung
description: Dokumente erstellen vorlagen platzhalter
icon:
status:
lang: de
---

# Dokumenterstellung

## Dokumente erstellen im Add-on

Sobald eine [Vorlage](./dokumentenvorlagen.md) erstellt wurde ist es möglich innerhalb des Add-ons im Menüpunkt "Dokumente" unter der Dokumenten-Kategorie, in der sich die Vorlage befindet, ein Dokument zu einem Objekt zu erzeugen.

[![Vorlage](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/1-de.png)](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/1-de.png)

Über die Schaltfläche "Neu" wird eine weitere Ansicht geöffnet. Hier kann ein Titel für das erstellte Dokument angegeben werden. Anschließend werden das gewünschte Template sowie das gewünschte Objekt bzw. die gewünschten Objekte, für die das Dokument angelegt werden soll, ausgewählt.

!!! attention "Kategorie Dokumente"
    Damit ein Dokument für ein Objekt erstellt werden kann ist es notwendig, dass die Kategorie "Dokumente" mit dem Objekttyp verknüpft ist. Wenn der Objekttyp nicht über diese Kategorie verfügt, können keine Dokumente für die darin enthaltenen Objekte erstellt werden, da sie nicht in der Auswahl auftauchen.

Zusätzlich ist es möglich eine Bemerkung zum Objekt zu verfassen.

[![Bemerkung](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/2-de.png)](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/2-de.png)

!!! info "Hinweis"
    Eine gelbe Infobox gibt einen Hinweis darauf, wenn mindestens eine unfertige Dokumentenvorlage existiert, also noch keine Kapitel besitzt. Sollte die gewünschte Vorlage nicht auftauchen, sollte die Kapitel Konfiguration noch einmal geprüft werden.

Über die Schaltfläche "Hinzufügen" wird die Dokumentenerstellung gestartet. Sobald dieser Vorgang abgeschlossen ist erscheinen die Dokumente in der Liste und können im gewünschten Format heruntergeladen werden.

Wenn ein Dokument in der Liste angeklickt oder dessen Checkbox aktiviert und die Schaltfläche "Editieren" genutzt wird, können weitere Details eingesehen werden. In dieser Ansicht ist es auch möglich, neue Revisionen zu erzeugen. Dies ist relevant, wenn sich Informationen in der Dokumentation zu diesem Objekt geändert haben und das Dokument aktualisiert werden muss. Auch Änderungen an der Dokumentenvorlage können so in das Dokument übertragen werden.

Im unteren Bereich können die aktuelle Version und alle Revisionen heruntergeladen werden. Der Download der Übersicht der Dokumente bezieht sich immer auf die jüngste Revision.

[![Hinzufügen](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/3-de.png)](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/3-de.png)

!!! info "Revisionen aus der Liste heraus erzeugen"
    Eine neue Revision kann alternativ auch direkt in der Liste der Dokumente erzeugt werden. Hierzu wird das gewünschte Dokument über dessen Checkbox ausgewählt und anschließend die Schaltfläche "Revision erzeugen" in der Kopfzeile verwendet.
    [![Revisionen](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/4-de.png)](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/4-de.png)

## Dokumente erstellen in der Kategorie "Dokumente"

Wenn ein Dokument für ein Objekt in i-doit erzeugt wurde ist dieses in der Kategorie "Dokumente" des Objekts zu finden. Auch hier ist es möglich, das Dokument in den entsprechenden Formaten herunterzuladen. In der Detailansicht des Dokuments können zusätzlich die Revisionen eingesehen und neue Revisionen erzeugt werden.

Über die Schaltfläche "Neu" können weitere Dokumente zu dem Objekt erstellt werden. Hierbei ist das Objekt bereits vorausgewählt und es kann ein Titel vergeben sowie eine Vorlage verknüpft werden.

[![Dokumente](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/5-de.png)](../../assets/images/de/i-doit-add-ons/documents/dokumentenerstellung/5-de.png)

## Dokumentenerstellung über die i-doit Console

Die Erzeugung neuer Revisionen sowie der Export der Dokumente kann außerdem über die i-doit [Console](../../automatisierung-und-integration/cli/index.md) durchgeführt und automatisiert werden.

Für diese Vorgänge steht der Command [documents](index.md#cli-console-commands-und-optionen) zur Verfügung.
