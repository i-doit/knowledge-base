---
title: "WATO Konfiguration auf Basis von CMDB-Daten generieren"
description: "i-doit liefert detaillierte Informationen über deine IT-Infrastruktur, einschliesslich aller deiner Hosts."
icon:
status:
lang: de
---
# WATO Konfiguration auf Basis von CMDB-Daten generieren

i-doit liefert detaillierte Informationen über deine IT-Infrastruktur, einschließlich aller deiner Hosts. Diese Hosts können mit Checkmk geteilt werden, sodass du deine Hosts nur einmal dokumentieren/konfigurieren musst. Um diese Hosts an Checkmk zu übergeben, führe aus:

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

```shell
idoitcmk push
```

Denke daran, dass Objekte in i-doit markiert sein müssen, damit sie nach Checkmk exportiert werden können. Überprüfe zuerst die Kategorie Check_MK Host, bevor du diesen Befehl ausführst.

**Empfehlung:** Führe diesen Befehl jedes Mal aus, wenn du deine CMDB-Daten änderst.

## Optionen

Diese Optionen sind während der Laufzeit verfügbar:

| Option                | Erforderlich | Beschreibung                            |
| --------------------- | ------------ | --------------------------------------- |
| --include-ids IDs     | Nein         | i-doit-Objekte nach ID filtern          |
| --include-title TITLE | Nein         | i-doit-Objekte nach Bezeichnung filtern |
| --include-type TYPE   | Nein         | i-doit-Objekte nach Typ filtern         |

IDs ist eine durch Kommata getrennte Liste von Objekt-IDs.

TITLE bedeutet eine beliebige Objektbezeichnung, einschließlich der Platzhalter *, ? und [ae]. Bei TITLE wird die Gross- und Kleinschreibung nicht beachtet. Wiederhole die Option, um mehr als eine Objektbezeichnung zu finden.

TYPE bedeutet den Objekttyp, der durch seine Bezeichnung, seine Konstante oder seinen Bezeichner dargestellt wird. Wie bei TITLE sind Wildcards erlaubt und Gross-/Kleinschreibung wird nicht berücksichtigt. Wiederhole die Option, um mehr als einen Objekttyp zu finden.

Jede Kombination dieser Filter wird logisch durch ODER kombiniert. Beispiel: Alle Hosts mit den Objekt-IDs "1", "2" und "3" sowie alle Hosts, deren Titel mit "\*.example.com" übereinstimmt, werden gepusht:

```shell
idoitcmk push --include-ids 1,2,3 --include-title "*.example.com"
```

## Konfiguration

Diese [Konfigurationseinstellungen](./konfiguration.md) sind verfügbar:

| Key                         | Typ     | Erforderlich | Standard                 | Beschreibung                                                                                                                                                                                  |
| --------------------------- | ------- | ------------ | ------------------------ | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| objectTypes.contactGroup    | String  | Nein         | C__OBJTYPE__PERSON_GROUP | Kontaktgruppen sind durch diesen Typ gekennzeichnet (Konstante verwenden!)                                                                                                                    |
| push.activateChanges        | Boolean | Nein         | false                    | Aktiviere alle Änderungen mit Ausnahme der "foreign changes"                                                                                                                                 |
| push.autoMatching           | String  | Nein         | all                      | Deaktiviere autoTagging (none), suche nur nach der ersten Übereinstimmung (first) oder versuche, alle Ausdrücke zu finden (all)                                                            |
| push.autoSite               | Boolean | Nein         | false                    | In einer Umgebung mit mehreren Standorten wird jeder Host von einem Standort überwacht. Mit dem Wert "location" kann ein Standort automatisch anhand des Standortpfades identifiziert werden |
| push.autoTagging            | Object  | Nein         | -                        | Fuege Host-Tags dynamisch auf der Grundlage von Objektinformationen hinzu, die mit regulären Ausdrücken übereinstimmen; siehe Abschnitt "Auto-Tagging"                                    |
| push.bakeAgents             | Boolean | Nein         | false                    | Automatisches Erstellen ("Bake") von Agenten; keine Verteilung von Agenten                                                                                                                   |
| push.contactGroupIdentifier | String  | Nein         | title                    | Sammle Kontaktgruppen nach ihren Objekttiteln (title) oder nach ihren LDAP-DNs (ldap)                                                                                                        |
| push.defaultWATOFolder      | String  | Nein         | -                        | Hosts in diesen Ordner verschieben, falls nicht festgelegt; leerer Wert bedeutet Hauptordner                                                                                                  |
| push.discoverServices       | Boolean | Nein         | false                    | Suche nach Diensten auf neuen/geänderten Hosts                                                                                                                                               |
| roles.monitoring            | String  | Nein         | Monitoring               | i-doit-Rolle für Kontaktgruppen, die bei Kontaktzuweisungen verwendet werden                                                                                                                 |
