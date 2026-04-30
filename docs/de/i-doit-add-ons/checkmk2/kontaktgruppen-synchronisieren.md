---
title: Kontaktgruppen synchronisieren
description: "Checkmk benachrichtigt Kontaktgruppen bei jedem Ereignis, wenn es richtig konfiguriert ist."
icon:
status:
lang: de
---
# Kontaktgruppen synchronisieren

Checkmk benachrichtigt Kontaktgruppen bei jedem Ereignis, wenn es richtig konfiguriert ist. Innerhalb von i-doit kann jede Kontaktgruppe als Objekt dokumentiert werden. Um Kontaktgruppen zwischen beiden zu teilen, führe aus:

[![Checkmk](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)](../../assets/images/de/i-doit-add-ons/checkmk2/checkmk-hauptseite.png)

```shell
idoitcmk sync-contact-groups
```

Dieser Befehl erzeugt neue Objekte in i-doit, die auf den Kontaktgruppen von Checkmk basieren. Zusätzlich können Objekte in i-doit verwendet werden, um neue Kontaktgruppen zu erzeugen.

Standardmäßig werden Kontaktgruppen als "Personengruppen" in i-doit gespeichert. Du kannst diesen Gruppen einfach Personen-Objekte hinzufügen und die Gruppen beliebigen anderen Objekten mit der Kategorie Kontaktzuweisung und der Rolle Überwachung zuweisen.

**Empfehlung:** Führe diesen Befehl jedes Mal aus, wenn du eine neue Kontaktgruppe in Checkmk oder i-doit hinzufügst.

## Konfiguration

Diese [Konfigurationseinstellungen](./konfiguration.md) sind verfügbar:

| Key                      | Typ    | Erforderlich | Wert                     | Beschreibung                                                                 |
| ------------------------ | ------ | ------------ | ------------------------ | ---------------------------------------------------------------------------- |
| objectTypes.contactGroup | String | Nein         | C__OBJTYPE__PERSON_GROUP | Kontaktgruppen werden durch diesen Typ gekennzeichnet (Konstante verwenden!) |
