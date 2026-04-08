---
title: Zuordnung von Kategorien zu Objekttypen
description: "Über die Funktion \"Datenstruktur bearbeiten\" steuerst du, welche Objekttyp-Gruppen, Objekttypen und Kategorien in deiner i-doit-Installation aktiv und..."
icon:
status:
lang: de
---
# Zuordnung von Kategorien zu Objekttypen

Über die Funktion "Datenstruktur bearbeiten" steuerst du, welche [Objekttyp-Gruppen](../glossar.md), [Objekttypen](../glossar.md) und [Kategorien](../glossar.md) in deiner i-doit-Installation aktiv und einander zugeordnet sind.

## Aufruf

Du findest die Funktion unter **Verwaltung → Datenstruktur → Datenstruktur bearbeiten**. Alle Änderungen übernimmt i-doit sofort -- du musst nicht extra speichern. Dabei werden keine Daten gelöscht: Die Datenstruktur steuert nur die Darstellung, nicht die Inhalte.

[![Datenstruktur bearbeiten](../assets/images/de/grundlagen/zuordnung-von-kategorien-zu-objekttypen/1-zko.png)](../assets/images/de/grundlagen/zuordnung-von-kategorien-zu-objekttypen/1-zko.png)

## Aufbau der Ansicht

Die Konfiguration gliedert sich in drei Spalten: **Objekttyp-Gruppen**, **Objekttypen** und **Kategorien**. In jeder Spalte kannst du über den gepunkteten Bereich am Anfang jeder Zeile die Reihenfolge per Drag 'n' Drop ändern.

[![Datenstruktur Aufbau](../assets/images/de/grundlagen/zuordnung-von-kategorien-zu-objekttypen/2-zko.png)](../assets/images/de/grundlagen/zuordnung-von-kategorien-zu-objekttypen/2-zko.png)

## Objekttyp-Gruppen, Objekttypen und Kategorien Anpassen

Über den :octicons-pencil-24: Anpassen Button kannst du in allen drei Hauptfeldern in den Bearbeitungsmodus wechseln.

Hier kannst du die Zuweisungen der jeweiligen Objektgruppe bearbeiten, aber auch neue Gruppen, Objekttypen oder auch Kategorien erzeugen und ausprägen.

[![Datenstruktur-Kategorien-anpassen-2](../assets/images/de/grundlagen/zuordnung-von-kategorien-zu-objekttypen/4-zko.png)](../assets/images/de/grundlagen/zuordnung-von-kategorien-zu-objekttypen/4-zko.png)

## Zuweisungen bearbeiten

Die Bearbeitung erfolgt von links nach rechts:

1. **Linke Spalte (Objekttyp-Gruppen)**: Klicke auf die Gruppe, deren Objekttyp-Zuweisungen du anpassen möchtest. Die mittlere Spalte wird aktiv. Über die Checkboxen blendest du Gruppen aus, die du nicht benötigst.

2. **Mittlere Spalte (Objekttypen)**: Lege über die Checkboxen fest, welche Objekttypen der gewählten Gruppe zugewiesen sind. Ausgegraute Objekttypen gehören bereits zu einer anderen Gruppe, lassen sich aber neu zuweisen. Klicke einen Objekttyp an, um die rechte Spalte zu aktivieren.

3. **Rechte Spalte (Kategorien)**: Hier siehst du die dem ausgewählten Objekttyp zugewiesenen Kategorien. Über die Checkboxen änderst oder entfernst du Zuweisungen.

In den Spalten für Objekttyp-Gruppen und Objekttypen kannst du im unteren Bereich auch eigene Einträge ergänzen. Selbst erstellte Einträge erhalten ein Stift-Icon zum Bearbeiten oder Löschen. Für eine umfangreiche Konfiguration eines Objekttyps empfehlen wir die Objekttyp-Konfiguration.

Über die Schaltfläche **Eigene Kategorie erstellen** gelangst du direkt zur Erstellung [benutzerdefinierter Kategorien](benutzerdefinierte-kategorien.md).

## Datenstruktur Profile

Du kannst deine aktuelle Konfiguration in Form eines Profils speichern. Trage hierzu unter **Aktuelles Profil speichern** eine Bezeichnung für das Profil ein, sodass es im Anschluss in den verfügbaren Profilen in der rechten Spalte auftaucht. Hier ist es dir möglich, das Profil zu aktivieren, zu löschen oder als Datei herunterzuladen. Aktiviere die Checkbox des gewünschten Profils und klicke auf **Laden** um die Zuweisung aus dem ausgewählten Profil wiederherzustellen. Über das Disketten-Symbol kannst du das Profil als Datei im XML-Format sichern und bei Bedarf über die Schaltfläche **Durchsuchen** erneut hochladen. Das rote X-Symbol löscht das entsprechende Profil.

Diese Funktion eignet sich, Konfigurationsdaten zwischen mehreren _i-doit_\-Installationen auszutauschen. Ein Profil beinhaltet folgende Einstellungen:

-   Objekttyp-Gruppen mit Namen, Reihenfolge und weiteren Attributen
-   Objekttypen mit Namen, Zuordnung zu Objekttyp-Gruppen und weiteren Attributen aus der Objekttyp Konfiguration
-   Jedem Objekttyp zugewiesene globale, spezifische und benutzerdefinierte Kategorien
-   Konfiguration jeder benutzerdefinierten Kategorie, die mindestens einem Objekttypen zugeordnet ist

Ein Profil beinhaltet demnach die Konfiguration der IT-Dokumentation, aber keine Inhalte. Es werden weder Objekte, Kategorie-Einträge noch ausgefüllte Dialog-Felder gespeichert.

## Konfiguration leeren

Möchtest du alle Zuweisungen zurücksetzen und von einem leeren Stand aus neu beginnen, klicke auf die Schaltfläche **Leeren**.
