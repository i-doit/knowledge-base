---
title: Vorbereitung
description: Dokumente vorlagen
icon: addons/documents
status:
lang: de
---

# Vorbereitung

## Installation/Update

Das aktuelle Installationspaket für das Add-on steht im i-doit [Kundenportal](../../administration/kundenportal.md) nach dem Erwerb einer gültigen Lizenz zur Verfügung und kann dort heruntergeladen werden. Die Installation selbst erfolgt im i-doit [Admin-Center](../../administration/admin-center.md) im Reiter "Add-ons". Hier wird das Paket vom lokalen System über die Schaltfläche "Durchsuchen" ausgewählt. Nachdem festgelegt wurde, für welche(n) [Mandant(en)](../../administration/mandantenfaehigkeit.md) das Add-on verfügbar gemacht werden soll, kann die Installation über die Schaltfläche "Upload and install" fertiggestellt werden.

Nach der Veröffentlichung einer neuen Version kann im Admin-Center auf demselben Weg das aktualisierte Paket, welches ebenfalls im i-doit [Kundenportal](../../administration/kundenportal.md) verfügbar sein wird, hochgeladen und installiert werden.

## Rechtevergabe

Damit ein Benutzer in der Lage ist, Vorlagen zu erstellen und Dokumente zu erzeugen, ist es nötig, entsprechende [Rechte](../../effizientes-dokumentieren/rechteverwaltung/index.md) zu vergeben. Dies ist in der i-doit Verwaltung unter Rechtesystem > Rechtevergabe > Dokumente möglich, wenn das Add-on installiert ist.

[![Rechtevergabe](../../assets/images/de/i-doit-add-ons/documents/vorbereitung/1-vor.png)](../../assets/images/de/i-doit-add-ons/documents/vorbereitung/1-vor.png)

Hier stehen folgende Berechtigungen zur Verfügung:

*   **Dokument**

Mit der Bedingung "Dokument" kann der Zugriff auf einzelne oder mehrere Dokumente ermöglicht werden. Benutzer mit dieser Berechtigung können die ausgewählten Dokumente bearbeiten.

*   **Dokumente in Kategorien**

Über "Dokumente in Kategorien" kann der Zugriff auf Dokumente auf Basis der Dokumentkategorien erteilt werden.

*   **Vorlagen**

Die Berechtigung "Vorlage" vergibt die Erlaubnis, Dokumentenvorlagen bearbeiten zu können.

*   **Vorlagen in Kategorien**

Der Zugriff auf die Vorlagen kann mit "Vorlagen in Kategorien" auf Vorlagen aus definierten Kategorien ermöglicht werden.

*   **Online Repository**

Um Vorlagen aus dem Online Repository herunterladen zu können wird die Berechtigung "Online Repository" benötigt.

Cache für das Rechtesystem leeren

Nachdem die Rechte vergeben wurden ist es ratsam, in der i-doit [Verwaltung](../../administration/verwaltung/index.md) unter **Verwaltung → [Mandanten-Name] Verwaltung → Systemreparatur und Berechtigung** den [Cache](../../administration/verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md) zu leeren, damit die Änderungen vom System übernommen werden.

## Zusätzliche Konfiguration

Mit dem Add-on wird zusätzlich die [Kategorie](../../grundlagen/struktur-it-dokumentation.md) "Dokumente" für alle [Objekttypen](../../grundlagen/struktur-it-dokumentation.md) verfügbar. Die Kategorie kann über die [Objekttyp-Konfiguration](../../grundlagen/benutzerdefinierte-objekttypen.md) und über [Datenstruktur bearbeiten](../../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) mit den gewünschten Objekttypen verknüpft werden. Auf diesem Weg tauchen nur jene Objekttypen bei der Objekterstellung auf, die vom Anwender vorgegeben sind um die Auswahlliste übersichtlich zu halten.

Kategorie Dokumente

Damit ein Dokument für ein Objekt erstellt werden kann ist es notwendig, dass die Kategorie "Dokumente" mit dem Objekttyp verknüpft ist. Wenn der Objekttyp nicht über diese Kategorie verfügt, können keine Dokumente für die darin enthaltenen Objekte erstellt werden, da sie nicht in der Auswahl auftauchen.

## Aufruf des Add-ons

Nachdem alle Vorbereitungen abgeschlossen sind ist der Zugriff auf das Add-on ist über Extras > Dokumente möglich.

[![Aufruf des Add-ons](../../assets/images/de/i-doit-add-ons/documents/vorbereitung/2-vor.png)](../../assets/images/de/i-doit-add-ons/documents/vorbereitung/2-vor.png)

Die Ansicht des Menüs "Extras" kann sich Aufgrund unterschiedlicher Rechte und/oder weiterer installierter Add-ons unterscheiden.
