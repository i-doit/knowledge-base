Das Workﬂow-System in i-doit ist ein erweiterbares Modul, welches Workﬂows erzeugt. Somit lassen sich einmalige AUFTRÄGE, aber auch wiederkehrende CHECKLISTEN erstellen und an die verantwortlichen Personen und Objekte zuweisen. Involvierte Personen werden über statusbasierte Benachrichtigungen informiert.

**Contents**

*   1[Workflow-Typen](#Workflow-Workflow-Typen)
*   2[Der Workflow](#Workflow-DerWorkflow)
*   3[Vordefinierte Workflow-Typen](#Workflow-VordefinierteWorkflow-Typen)
    *   3.1[Arbeitsauftrag](#Workflow-Arbeitsauftrag)
    *   3.2[Checkliste](#Workflow-Checkliste)
*   4[Parameter der Vorlagen](#Workflow-ParameterderVorlagen)
*   5[Workflows im Objekt](#Workflow-WorkflowsimObjekt)
*   6[Releases](#Workflow-Releases)

Workflow-Typen
--------------

Der WORKFLOW-TYP verhält sich wie eine Schablone und umfasst alle notwendigen Parameter, welche zur Ausführung notwendig sind. Diese Schablone lässt sich über eine Verwaltungsoberﬂäche bearbeiten. Über diese lassen sich ebenso neue Schablonen anlegen.

Der Workflow
------------

Ein Workﬂow beschreibt eine terminierte vom Benutzer auszuführende Aktion wie beispielsweise das Austauschen des Band-Mediums eines speziellen Backup-Servers. Jegliche WorkﬂowZuweisung muss von den entsprechenden Personen akzeptiert werden. Nach erfolgreichem Abschluss kann ein Statusbericht eingereicht werden.

Vordefinierte Workflow-Typen
----------------------------

### Arbeitsauftrag

Ein Arbeitsauftrag ist eine terminierte von wählbaren Benutzern auszuführende Aktion.

### Checkliste

Mit dem speziellen Workﬂow-Typ CHECKLISTEN können täglich, wöchentlich und jährlich wiederkehrende Aufträge generiert werden, indem zu dem reinen Startdatum eine periodische Zeitfolge angegeben und die entsprechende Option der Wiederholung ausgewählt wird. Diese wiederkehrenden Workﬂows lassen sich ebenfalls terminiert beenden.

Parameter der Vorlagen
----------------------

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

Workflows im Objekt
-------------------

`**Workflows**` lassen sich auch im Objekt über die Kategorie **`Workflows`** anzeigen. Diese muss zuvor über die [Objekttyp Konfiguration](/display/de/Zuordnung+von+Kategorien+zu+Objekttypen) hinzugefügt werden.

![](/download/attachments/81723412/workflow.png?version=1&modificationDate=1603882966973&api=v2&effects=drop-shadow)

Releases
--------

| Version | Datum | Changelog |
| --- | --- | --- |
| Version | Datum | Changelog |
| --- | --- | --- |
| 1.1 | 05.09.2022 | \[Task\] PHP 8.0 Compatibility  <br>\[Task\] Design Compatibility |
| 1.0.6 | 27.07.2022 | \[Bug\] Error message when a workflow is accepted  <br>\[Bug\] The frequency of checklists cannot be used because the value is not saved |
| 1.0.5 | 18.01.2021 | \[Improvement\] Compatibility with i-doit 1.16 |
| 1.0.4 | 10.08.2020 | \[Bug\] Only the creator of a checklist is able to edit it |
| 1.0.3 | 05.07.2019 | ```<br>[Bug] Error Update Workflow Add-on 1.0.2<br>``` |
| 1.0.2 | 20.05.2019 | ```<br>[Bug] I-doit is also displayed in the sidebar via My-doit link[Bug] Console.php command workflows-process[Bug] ModuleID is missing in the notification[Bug] ModuleID is missing in the links of the Workflow category to the module<br>``` |
| 1.0.1 | 08.01.2019 | ```<br>[Bug] I-doit is also displayed in the sidebar<br>``` |
| 1.0 | 17.12.2018 | ```<br>[Improvement] Add-onizing the workflows<br>``` |