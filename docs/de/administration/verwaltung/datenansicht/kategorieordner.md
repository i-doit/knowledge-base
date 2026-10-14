---
title: Kategorieordner
description: Mit Kategorieordnern organisierst du Kategorien innerhalb von Objekttypen in einer eigenen Ordnerstruktur.
icon:
status:
lang: de
---
# Kategorieordner

Mit Kategorieordnern organisierst du Kategorien innerhalb von Objekttypen in einer eigenen Ordnerstruktur. Du kannst eigene Ordner erstellen, Kategorien verschieben und die Reihenfolge anpassen.


[![kategorieordner](../../../assets/images/de/administration/kategorieordner.png)](../../../assets/images/de/administration/kategorieordner.png)

## Rechte

Du benötigst die Berechtigung **Kategorieordner** im Bereich **Administration**. Die Personengruppe **admin** hat diese Berechtigung standardmäßig.

## Verwendung

1. Wähle zunächst einen Objekttyp aus.
2. Nutze eine der folgenden Optionen:
    -   **Neu anordnen**: Verschiebe jede Kategorie per Drag and Drop an die gewünschte Stelle.
    -   **Element verschieben**: Fahre mit der Maus über eine Kategorie und klicke auf die Schaltfläche. Ein Popup öffnet sich, in dem du den Zielort auswählst.
    -   **Hinzufügen**: Erstelle einen neuen Kategorieordner mit benutzerdefiniertem Namen.

!!! tip "Schaltfläche Neu anordnen"
    Mit der Schaltfläche **Neu anordnen** werden Kategorien oder Ordner schnell an eine beliebige Position via **drag&drop** verschoben. Es kann auch die Schaltfläche **Verschieben** verwenden werden, um das Popup **Element verschieben** zu öffnen.

!!! tip "Element verschieben"
    Die Schaltfläche **Element verschieben** wird bevorzugt, wenn eine Kategorie in einen Ordner verschoben werden soll. Die Funktion bietet auch eine Suchfunktion für Kategorien.

!!! tip "Kategorieordner hinzufügen"
    Die Schaltfläche **Hinzufügen** anklicken, um einen Kategorieordner zu erstellen und den Speicherort des Ordners auszuwählen.

!!! note "Sortierung"
    Die Sortierung von Kategorien ist deaktiviert, wenn ein Objekttyp mit der Funktion **Kategorieordner** bearbeitet wurde. Da die Konfigurierte Reihenfolge nicht verändert werden soll.

!!! abstrakt "Kategorieordner für einen Objekttyp zurücksetzen"
    Mit der **Zurücksetzen** Schaltfläche werden die Änderungen rückgängig gemacht und die erstellten Kategorieordner werden gelöscht.

## Kategorien ausblenden

Ab i-doit Version XX blendest du einzelne Kategorien für einen Objekttyp aus. Das hilft, wenn ein Objekttyp eine Kategorie führt, die du nicht pflegen willst, etwa weil dieselben Daten bereits über eine andere Kategorie erfasst werden.

1. Wähle den Objekttyp aus.
2. Fahre mit der Maus über die Kategorie und klicke auf das Auge-Symbol.

[![Kategorie ausblenden](../../../assets/images/de/administration/kategorieordner-ausblenden.png)](../../../assets/images/de/administration/kategorieordner-ausblenden.png)

Die Kategorie wird in der Konfiguration grau und kursiv dargestellt, das Symbol wechselt auf ein durchgestrichenes Auge. Mit demselben Symbol blendest du die Kategorie wieder ein.

[![Ausgeblendete Kategorie](../../../assets/images/de/administration/kategorieordner-ausgeblendet.png)](../../../assets/images/de/administration/kategorieordner-ausgeblendet.png)

Für den gewählten Objekttyp verschwindet eine ausgeblendete Kategorie aus:

-   dem Kategoriebaum am Objekt
-   der Übersichtsseite des Objekts
-   der Kategorieauswahl der Listeneditierung

!!! note "Nur für den gewählten Objekttyp"
    Das Ausblenden gilt ausschließlich für den Objekttyp, in dem du es einstellst. Dieselbe Kategorie bleibt an anderen Objekttypen sichtbar.

!!! warning "Ausblenden ist keine Berechtigung"
    Vorhandene Einträge der Kategorie bleiben erhalten und weiterhin über die API, Reports und Exporte erreichbar. Wenn du den Zugriff einschränken willst, nutze die [Rechteverwaltung für die CMDB](../../../effizientes-dokumentieren/rechteverwaltung/cmdb.md).
