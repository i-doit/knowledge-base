---
title: Vorbereitung
description: Installation, Rechtevergabe und Konfiguration des Dokumente-Add-ons
icon:
status:
lang: de
---

# Vorbereitung

## Installation/Update

Das aktuelle Installationspaket für das Add-on lädst du aus dem i-doit [Kundenportal](../../administration/kundenportal.md) nach dem Erwerb einer gültigen Lizenz herunter. Die Installation erfolgt im i-doit [Admin-Center](../../administration/admin-center.md) im Reiter "Add-ons". Dort wählst du das Paket über "Durchsuchen" aus, legst fest, für welche(n) [Mandant(en)](../../administration/mandantenfaehigkeit.md) das Add-on verfügbar sein soll, und schließt die Installation über "Upload and install" ab.

Nach der Veröffentlichung einer neuen Version lädst du das aktualisierte Paket aus dem [Kundenportal](../../administration/kundenportal.md) im Admin-Center auf demselben Weg hoch.

## Rechtevergabe

Damit ein Benutzer Vorlagen erstellen und Dokumente erzeugen kann, vergibst du die entsprechenden [Rechte](../../effizientes-dokumentieren/rechteverwaltung/index.md). Das ist in der i-doit Verwaltung unter **Rechtesystem > Rechtevergabe > Dokumente** möglich, wenn das Add-on installiert ist.

[![Rechtevergabe](../../assets/images/de/i-doit-add-ons/documents/vorbereitung/1-vor.png)](../../assets/images/de/i-doit-add-ons/documents/vorbereitung/1-vor.png)

Folgende Berechtigungen stehen zur Verfügung:

- **Dokument** -- Ermöglicht den Zugriff auf einzelne oder mehrere Dokumente. Benutzer mit dieser Berechtigung bearbeiten die ausgewählten Dokumente.
- **Dokumente in Kategorien** -- Erteilt den Zugriff auf Dokumente auf Basis der Dokumentkategorien.
- **Vorlagen** -- Erlaubt das Bearbeiten von Dokumentenvorlagen.
- **Vorlagen in Kategorien** -- Beschränkt den Zugriff auf Vorlagen aus definierten Kategorien.
- **Online Repository** -- Wird benötigt, um Vorlagen aus dem Online Repository herunterzuladen.

## Zusätzliche Konfiguration

Mit dem Add-on wird die [Kategorie](../../grundlagen/struktur-it-dokumentation.md) "Dokumente" für alle [Objekttypen](../../grundlagen/struktur-it-dokumentation.md) verfügbar. Du verknüpfst die Kategorie über die [Objekttyp-Konfiguration](../../grundlagen/benutzerdefinierte-objekttypen.md) oder über [Datenstruktur bearbeiten](../../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) mit den gewünschten Objekttypen. So tauchen bei der Objekterstellung nur die Objekttypen auf, die du vorgegeben hast.

!!! note "Kategorie Dokumente"
    Damit ein Dokument für ein Objekt erstellt werden kann ist es notwendig, dass die Kategorie "Dokumente" mit dem Objekttyp verknüpft ist. Wenn der Objekttyp nicht über diese Kategorie verfügt, können keine Dokumente für die darin enthaltenen Objekte erstellt werden, da sie nicht in der Auswahl auftauchen.

## Aufruf des Add-ons

Nachdem alle Vorbereitungen abgeschlossen sind, erreichst du das Add-on über **Extras > Dokumente**.

[![Aufruf des Add-ons](../../assets/images/de/i-doit-add-ons/documents/vorbereitung/2-vor.png)](../../assets/images/de/i-doit-add-ons/documents/vorbereitung/2-vor.png)

Die Ansicht des Menüs "Extras" kann sich aufgrund unterschiedlicher Rechte und/oder weiterer installierter Add-ons unterscheiden.
