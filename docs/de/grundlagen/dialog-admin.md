# Dialog-Admin

In _i-doit_ kommt oftmals das [Attributfeld](../glossar.md#Glossar-Attributfeld) **Dialog+** zum Einsatz, ein Dropdown-Feld, dessen Werte sich bearbeiten lassen. Diese Felder verteilen sich auf viele [Kategorien](../glossar.md) in der [IT-Dokumentation](../glossar.md) oder andere Features von _i-doit_. Die zentrale Administration der Werte findet über den **Dialog-Admin** in der **Verwaltung** statt.

## Übersicht

Eine Übersicht über alle [Attribute](../glossar.md) vom Feldtyp **Dialog+** ist unter **Verwaltung → Vordefinierte Inhalte → Dialog-Admin** zu finden. Im linken Navigationsbaum sind diese alphabetisch nach den zugehörigen Kategorien sortiert. Wenn eine [benutzerdefinierte Kategorie](benutzerdefinierte-kategorien.md) mit einem Attribut vom Feldtyp **Dialog+** angelegt ist, erscheint dieses Attribut mit der zugehörigen Kategorie ebenfalls im Navigationsbaum unter **Benutzerdefinierte Dialog+**.

[![benutzerdefinierte-dialog+](../assets/images/de/grundlagen/dialog-admin/1-da.png)](../assets/images/de/grundlagen/dialog-admin/1-da.png)

## Werte anzeigen

Klickt man im linken Navigationsbaum innerhalb des Bereichs **Dialog-Admin** auf ein Attribut, wird im Hauptbereich eine Übersicht der bisher dokumentierten Werte (falls vorhanden) geladen.

[![werte-anzeigen](../assets/images/de/grundlagen/dialog-admin/2-da.png)](../assets/images/de/grundlagen/dialog-admin/2-da.png)

## Werte anlegen

Um einen neuen Wert anzulegen klickt man oberhalb der Übersicht auf den Button **Neu**. Es öffnet sich ein Formularfeld, das ausgefüllt werden kann:

-   **ID**: Jeder Wert in einem **Dialog+**-Attribut erhält von _i-doit_ einen eindeutigen Identifier. Dieser ist beispielsweise beim Umgang mit der [API](../i-doit-pro-add-ons/api/index.md) hilfreich.
-   **Bezeichnung**: Hier wird der Wert angegeben, der in der Web GUI von _i-doit_ angezeigt werden soll, wenn man das **Dialog+**-Attribut betrachtet oder editiert.
-   **Konstante**: Neben einem eindeutigen Identifier kann ein Wert eine eindeutige Konstante erhalten. Im Gegensatz zum Identifier besteht dieser in der Regel aus einem aussagekräftigen String, der bei der Verwendung der API sehr hilfreich sein kann.
-   **Status**: Jeder Wert kann einen Zustand einnehmen. Um ihn bei der Dokumentation zu verwenden, sollte der Zustand Normal (2) gewählt werden.

Gespeichert wird der Wert, wie gewohnt, über den Button **Speichern**.

[![werte-anlegen](../assets/images/de/grundlagen/dialog-admin/3-da.png)](../assets/images/de/grundlagen/dialog-admin/3-da.png)

## Werte bearbeiten

Zum Bearbeiten der Attributs klickt man in der Übersicht auf den Wert, der bearbeitet werden soll. Das Formular entspricht der oben erklärten Oberfläche zum Anlegen eines neuen Wertes.

!!! info "Auswirkungen"
    -   Das Ändern und Löschen von Werten wirkt sich unmittelbar auf die IT-Dokumentation aus: Wird ein Wert im **Dialog-Admin** geändert, ändert er sich überall automatisch. Ebenso wird beim Löschen des Wertes dieser auch überall dort gelöscht, wo er verwendet wurde. Vor dem Löschen empfiehlt es sich, über einen [Report](../auswertungen/report-manager.md) diejenigen Objekte zu suchen, bei denen dieser Wert verwendet wird. Mit Hilfe dieses Reports kann für alle aufgelisteten Objekte - beispielsweise über die [Listeneditierung](../effizientes-dokumentieren/listeneditierung.md) - ein alternativer Wert ausgewählt werden.

## Werte löschen

Zum Löschen eines Wertes markiert man innerhalb der Übersicht die Checkbox des Wertes und klickt anschließend auf den Button **Purge**. Der Wert wird unwiderruflich gelöscht.

In dieser tabellarischen Übersicht wird zu jedem Wert angezeigt, ob dieser gelöscht werden kann. Dies ist dadurch bedingt, dass manche Werte von _i-doit_ als gegeben vorausgesetzt sind, um bestimmte Funktionalitäten zu gewährleisten.

## Rechte setzen

Auf jedes **Dialog+**-Attribut kann pro Benutzer(-gruppe) Rechte vergeben werden. So ist es beispielsweise möglich und oft auch ratsam, dass nur bestimmte Benutzergruppen Werte anlegen, ändern oder löschen können, andere Benutzergruppen diese aber nur verwenden können.
