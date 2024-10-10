# Workflow

Das Workﬂow-System in i-doit ist ein erweiterbares Modul, welches Workﬂows erzeugt. Somit lassen sich einmalige AUFTRÄGE, aber auch wiederkehrende CHECKLISTEN erstellen und an die verantwortlichen Personen und Objekte zuweisen. Involvierte Personen werden über statusbasierte Benachrichtigungen informiert.

## Workflow-Typen

Der WORKFLOW-TYP verhält sich wie eine Schablone und umfasst alle notwendigen Parameter, welche zur Ausführung notwendig sind. Diese Schablone lässt sich über eine Verwaltungsoberﬂäche bearbeiten. Über diese lassen sich ebenso neue Schablonen anlegen.

## Der Workflow

Ein Workﬂow beschreibt eine terminierte vom Benutzer auszuführende Aktion wie beispielsweise das Austauschen des Band-Mediums eines speziellen Backup-Servers. Jegliche WorkﬂowZuweisung muss von den entsprechenden Personen akzeptiert werden. Nach erfolgreichem Abschluss kann ein Statusbericht eingereicht werden.

## Vordefinierte Workflow-Typen

### Arbeitsauftrag

Ein Arbeitsauftrag ist eine terminierte von wählbaren Benutzern auszuführende Aktion.

### Checkliste

Mit dem speziellen Workﬂow-Typ CHECKLISTEN können täglich, wöchentlich und jährlich wiederkehrende Aufträge generiert werden, indem zu dem reinen Startdatum eine periodische Zeitfolge angegeben und die entsprechende Option der Wiederholung ausgewählt wird. Diese wiederkehrenden Workﬂows lassen sich ebenfalls terminiert beenden.

## Parameter der Vorlagen

Für die beiden Workﬂow-Typen TASK (Arbeitsauftrag) und CHECKLIST gibt es bereits vorgefertigte Parameter, welche bei Erstellung eines neuen Workﬂows berücksichtigt werden. Die beiden Datumstypen für Start- und Enddatum werden bei jedem neu angelegten Workﬂow-Typen automatisch erstellt. Die anderen Parameter können nach Belieben erstellt und einem neuen Typen zugeordnet werden:

*   Text
*   Einzeiliges Textfeld
*   Fulltext
*   Mehrzeiliges Textfeld
*   Numeric
*   Numerisches Textfeld
*   Date
*   Textfeld mit Datum
*   Ja / Nein
*   Zwei Radiobuttons zur Auswahl

Die Bezeichnung und der Schlüssel bei einem neuen Workﬂow-Typen kann frei gewählt werden, die Reihenfolge gibt an, in welcher Reihenfolge die Felder untereinander angezeigt werden. Nach leerem Feld überprüfen gibt eine Fehlermeldung aus, wenn das Feld nicht ausgefüllt wurde und versucht wird den Workﬂow zu speichern.

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

| Version | Datum      | Changelog                                                                                                                                                                                                                                       |
| ------- | ---------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
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
