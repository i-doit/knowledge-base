---
title: Workflow
description: "Mit dem Workflow-System erstellst du einmalige Auftraege und wiederkehrende Checklisten und weist sie verantwortlichen Personen und Objekten zu."
icon: addons/workflow
status:
lang: de
---

# Workflow

Mit dem Workflow-System erstellst du einmalige Aufträge und wiederkehrende Checklisten und weist sie verantwortlichen Personen und Objekten zu. Involvierte Personen werden über statusbasierte Benachrichtigungen informiert.

## Workflow-Typen

Ein Workflow-Typ ist eine Schablone mit allen notwendigen Parametern. Du bearbeitest bestehende Schablonen oder legst neue über die Verwaltungsoberfläche an.

## Der Workflow

Ein Workflow beschreibt eine terminierte Aktion -- z. B. das Austauschen des Band-Mediums eines Backup-Servers. Jede Workflow-Zuweisung muss von den zuständigen Personen akzeptiert werden. Nach Abschluss kann ein Statusbericht eingereicht werden.

## Vordefinierte Workflow-Typen

### Arbeitsauftrag

Ein Arbeitsauftrag ist eine terminierte von wählbaren Benutzern auszuführende Aktion.

### Checkliste

Mit Checklisten generierst du täglich, wöchentlich oder jaehrlich wiederkehrende Aufträge. Gib dazu zum Startdatum eine periodische Zeitfolge an und wähle die Wiederholungsoption. Wiederkehrende Workflows lassen sich ebenfalls terminiert beenden.

## Parameter der Vorlagen

Für die Workflow-Typen **TASK** (Arbeitsauftrag) und **CHECKLIST** stehen vorgefertigte Parameter bereit. Start- und Enddatum werden automatisch erstellt. Weitere Parameter legst du nach Bedarf an:

*   Text
*   Einzeiliges Textfeld
*   Volltext
*   Mehrzeiliges Textfeld
*   Numeric
*   Numerisches Textfeld
*   Date
*   Textfeld mit Datum
*   Ja / Nein
*   Zwei Radiobuttons zur Auswahl

Bezeichnung und Schlüssel eines neuen Workflow-Typs wählst du frei. Die **Reihenfolge** bestimmt die Anzeigeposition der Felder. **Nach leerem Feld überprüfen** gibt eine Fehlermeldung aus, wenn ein Pflichtfeld beim Speichern leer ist.

## Workflows im Objekt

**Workflows** lassen sich auch im Objekt über die Kategorie **Workflows** anzeigen. Diese muss zuvor über die [Objekttyp Konfiguration](../grundlagen/zurodnung-von-kategorien-zu-objekttypen.md) hinzugefügt werden.

[![Workflows im Objekt](../assets/images/de/i-doit-add-ons/workflow/1-wf.png)](../assets/images/de/i-doit-add-ons/workflow/1-wf.png)

## CLI Console Commands und Optionen

| Command                                 | Interne Beschreibung                                                                          |
| --------------------------------------- | --------------------------------------------------------------------------------------------- |
| [workflows-process](#workflows-process) | Verarbeitet alle Arbeitsabläufe, versendet E-Mails und erstellt neue Aufgaben aus Checklisten |

!!! info "Dieser Befehl ist erst nach Installation des Workflow Add-ons verfügbar."

### workflows-process

Verarbeitet alle Arbeitsabläufe, versendet E-Mails und erstellt neue Aufgaben aus Checklisten

**Optionen:**

| Parameter (Kurzform) | Parameter (Langform)   | Beschreibung                                                                                     |
| -------------------- | ---------------------- | ------------------------------------------------------------------------------------------------ |
| -t                   | --types=TYPES          | Workflow-Typen (mehrere Werte sind möglich)                                                      |
| -u                   | --user=[USERNAME]      | Username eines Benutzers, der zur Ausführung berechtigt ist                                      |
| -p                   | --password=[PASSWORD]  | Passwort zur Authentifizierung des zuvor angegebenen Benutzers                                   |
| -i                   | --tenantId=[TENANT-ID] | Mandanten ID des Mandanten, der verwendet werden soll (Standard: 1)                              |
| -c                   | --config=[CONFIG-FILE] | Angabe des Pfades zur Konfigurationsdatei                                                        |
| -h                   | --help                 | Hilfenachricht zur Einblendung weiterer Informationen                                            |
| -q                   | --quiet                | Quiet-Mode um die Rückgabe zu deaktivieren                                                       |
| -V                   | --version              | Ausgabe der Version der i-doit Console                                                           |
|                      | --ansi<br>--no-ansi    | ANSI-Ausgabe erzwingen (oder --no-ansi deaktivieren)                                             |
| -n                   | --no-interaction       | Deaktiviert sämtliche Interaktionsfragen der i-doit Console                                      |
| -v / -vv / -vvv      | --verbose              | Erhöht den Umfang der Rückgabe. (1 = Normale Ausgabe, 2 = Detaillierte Ausgabe, 3 = Debug-Level) |

**Beispiel zur Verwendung**

```shell
sudo -u www-data php console.php workflows-process --user admin --password admin --tenantId 1 --types task --types checklist
```

## Releases
<!-- cSpell:disable -->
| Version | Datum      | Changelog                                                                                                                                                                                                                                       |
| ------- | ---------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.6     | 09.09.2025 | [Task] PHP 8.4 compatibility                                                                                                                                                                                                                    |
| 1.5     | 26.02.2025 | [Task] Make symfony 6.4 compatible<br>[Task] Make Smarty 5 compatible<br>[Bug] Workflow Checklist is inaccessible after workflow is accepted                                                                                                    |
| 1.4     | 10.10.2024 | [Bug] Fix autoload issue during add-on installation                                                                                                                                                                                             |
| 1.3     | 09.07.2024 | [Bug] Workflow Add-on User Permissions are not available<br>[Bug] This task is part of the following checklist link does not work<br>[Bug] Dependent tasks are not displayed in checklists                                                      |
| 1.2     | 07.11.2023 | [Task] Use new routes to display object and object type images / move add-on related files                                                                                                                                                      |
| 1.1.1   | 22.08.2023 | [Improvement] PHP 8.1 Compatibility                                                                                                                                                                                                             |
| 1.1     | 05.09.2022 | [Task] PHP 8.0 Compatibility  <br>[Task] Design Compatibility                                                                                                                                                                                   |
| 1.0.6   | 27.07.2022 | [Bug] Error message when a workflow is accepted  <br>[Bug] The frequency of checklists cannot be used because the value is not saved                                                                                                            |
| 1.0.5   | 18.01.2021 | [Improvement] Compatibility with i-doit 1.16                                                                                                                                                                                                    |
| 1.0.4   | 10.08.2020 | [Bug] Only the creator of a checklist is able to edit it                                                                                                                                                                                        |
| 1.0.3   | 05.07.2019 | [Bug] Error Update Workflow Add-on 1.0.2                                                                                                                                                                                                        |
| 1.0.2   | 20.05.2019 | [Bug] I-doit is also displayed in the sidebar via My-doit link<br>[Bug] Console.php command workflows-process<br>[Bug] ModuleID is missing in the notification<br>[Bug] ModuleID is missing in the links of the Workflow category to the module |
| 1.0.1   | 08.01.2019 | [Bug] I-doit is also displayed in the sidebar                                                                                                                                                                                                   |
| 1.0     | 17.12.2018 | [Improvement] Add-onizing the workflows                                                                                                                                                                                                         |
