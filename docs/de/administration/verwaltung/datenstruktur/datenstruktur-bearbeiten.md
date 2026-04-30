---
title: Datenstruktur bearbeiten
description: "Mit dieser Funktion veränderst du die Datenstruktur deines Mandanten -- also die Zuordnung von Objekttypen zu Gruppen und von Kategorien zu Objekttypen."
icon:
status:
lang: de
---
# Datenstruktur bearbeiten

Mit dieser Funktion veränderst du die Datenstruktur deines Mandanten -- also die Zuordnung von Objekttypen zu Gruppen und von Kategorien zu Objekttypen.

Die Konfiguration ist in drei Spalten aufgeteilt: ==Objekttyp Gruppen==, ==Objekttypen== und ==Kategorien==. In jeder Spalte befindet sich pro Zeile ein ==gepunkteter Bereich==, mit dem du die Reihenfolge per Drag and Drop ändern kannst.

[![Layout](../../../assets/images/de/administration/verwaltung/datenstruktur/1-ds.png)](../../../assets/images/de/administration/verwaltung/datenstruktur/1-ds.png)

## Anpassen von Objektgruppen, Objekttypen und Kategorien

In allen drei Hauptfeldern kannst du durch Drücken des ==Anpassen Buttons== in den Bearbeitungsmodus wechseln.
Hier kannst du die Zuordnungen der jeweiligen ==Objektgruppen bearbeiten==, aber auch neue Gruppen, Objekttypen oder Kategorien anlegen und entwickeln.

[![Anpassen](../../../assets/images/de/administration/verwaltung/datenstruktur/2-ds.png)](../../../assets/images/de/administration/verwaltung/datenstruktur/2-ds.png)

## Bearbeitung der Zuordnungen

### Spalte 1: Objekttyp Gruppen

Beginne in der linken Spalte. Wähle die ==Objekttyp Gruppe== aus, deren Objekttypenzuordnungen du anpassen willst. Klicke auf eine Gruppe, damit in der mittleren Spalte die zugehörigen Objekttypen erscheinen.

Nicht benötigte Gruppen blendest du über die Kontrollkästchen oder die Schaltfläche ==Anpassen== aus. Unten in der Spalte fügst du ==benutzerdefinierte Gruppen== hinzu. Über das Stift-Icon bearbeitest oder löschst du sie.

### Spalte 2: Objekttypen

Die mittlere Spalte zeigt die ==Objekttypen== der ausgewählten Gruppe. Ausgegraute Objekttypen sind bereits anderen Gruppen zugeordnet, können aber neu zugeordnet werden.

Hier kannst du auch [eigene Objekttypen](../../../grundlagen/benutzerdefinierte-objekttypen.md) anlegen. Für eine umfangreiche Konfiguration empfehlen wir die [Objekttyp Konfiguration](../../../grundlagen/benutzerdefinierte-objekttypen.md).

### Spalte 3: Kategorien

Klicke auf einen Objekttyp in der mittleren Spalte, um die rechte Spalte zu aktivieren. Hier siehst du die zugeordneten Kategorien und änderst die Zuordnungen über die Kontrollkästchen.

Die Schaltfläche ==Benutzerdefinierte Kategorien erstellen== leitet dich direkt zur Funktion zum Erstellen von [benutzerdefinierten Kategorien](../../../grundlagen/benutzerdefinierte-kategorien.md) weiter.

## Datenstrukturprofile bearbeiten

Du kannst deine aktuelle Konfiguration als Profil speichern. Gib dazu unter ==Aktuelles Profil speichern== einen Namen ein. Das Profil erscheint dann in der rechten Spalte.

Dort stehen dir folgende Aktionen zur Verfügung:

-   **Laden**: Kontrollkästchen aktivieren und auf ==Ausgewählte(s) Profil(e) laden== klicken
-   **Herunterladen**: Profil als XML-Datei exportieren
-   **Hochladen**: Über ==Datei wählen== ein Profil importieren
-   **Löschen**: Über das rote X-Symbol

Profile eignen sich besonders, um Konfigurationsdaten zwischen mehreren _i-doit_-Installationen auszutauschen. Ein Profil enthält:

-   Objekttyp Gruppen mit Namen, Reihenfolge und weiteren Attributen
-   Objekttypen mit Namen, Zuordnungen zu Objekttyp Gruppen und weiteren Attributen aus der Objekttyp Konfiguration
-   Globale, spezifische und benutzerdefinierte Kategorien, die jedem Objekttyp zugeordnet sind
-   Konfiguration jeder benutzerdefinierten Kategorie, die mindestens einem Objekttyp zugeordnet ist

Ein Profil enthält demnach die Konfiguration der IT-Dokumentation, aber keine Inhalte. Weder Objekte, Kategorieeinträge noch ausgefüllte Dialogfelder werden gespeichert.

Wenn du einen leeren Zustand wünschst, um die Zuordnungen von Grund auf neu vorzunehmen, kannst du über die Schaltfläche ==Reset== alle Zuordnungen zurücksetzen.
