# Dateien hochladen und verknüpfen

Zu einer vollumfänglichen IT-Dokumentation gehören oftmals auch Dokumente in Form Dateien. Ob nun Betriebshandbücher, Notfallpläne, Verträge, Installationsprotokolle oder Treiber: Wichtige Dateien gehören mit [Objekten](../grundlagen/struktur-it-dokumentation.md) in i-doit verknüpft.

Dateien sind Objekte
--------------------

Jede hochgeladene Datei in i-doit ist automatisch ein Objekt. Das hat den Vorteil, dass man diesen Dateien beliebige [Kategorien und Attribute](../grundlagen/struktur-it-dokumentation.md) zuschreiben und sie mit beliebigen anderen Objekten [verknüpfen](../grundlagen/objekt-beziehungen.md) kann. i-doit bringt in der Standardinstallation bereits passende [Objekttypen](../grundlagen/struktur-it-dokumentation.md) mit:

*   **Dateien** und
*   **Notfallplan**.

Diese lassen sich durch weitere [benutzerdefinierte Objekttypen](../grundlagen/benutzerdefinierte-objekttypen.md) erweitern, beispielsweise für Betriebshandbücher.

Die eigentliche Funktionalität (hochladen, verknüpfen, etc.) ist im [Kategorie-Ordner](../grundlagen/struktur-it-dokumentation.md) **Dateien** zu finden. Diese besteht aus folgenden Unterkategorien:

*   **Aktuelle Datei**: Informationen zur hochgeladenen Datei, Download-Möglichkeit und Kategorisierung der Datei
*   **Dateiversionen**: Zu jeder Datei können beliebig viele Versionen existieren. Ein erneutes Hochladen der Datei erzeugt eine neue Version.
*   **Zugewiesene Objekte**: Mit welchen Objekten ist diese Datei verknüpft? (reine Ansicht ohne Funktion)

Der Kategorie-Ordner **Dateien** gehört zu den [spezifischen Kategorien](../grundlagen/struktur-it-dokumentation.md), der sich über die [Objekttypkonfiguration](../grundlagen/benutzerdefinierte-objekttypen.md) beliebigen Objekttypen zuordnen lässt.

[![Aktuelle Datei](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/1-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/1-dhuv.png)

[![Dateiversionen](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/2-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/2-dhuv.png)

[![Dateiversionen](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/3-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/3-dhuv.png)

[![Zugewiesene Objekte](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/4-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/4-dhuv.png)

In mehreren [rückwärtigen Kategorien](../grundlagen/struktur-it-dokumentation.md) erfolgt die Verknüpfung zwischen Datei-Objekten und weiteren Objekten:

*   Dateizuweisung
*   Handbuchzuweisung
*   Notfallplanzuweisung

Diese [globalen Kategorien](../grundlagen/struktur-it-dokumentation.md) können [beliebigen Objekttypen zugeordnet](../grundlagen/benutzerdefinierte-objekttypen.md) werden und verfolgen ähnliche Funktionen, nämlich Dateien zuweisen.

[![globalen Kategorien](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/5-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/5-dhuv.png)

Dateien hochladen und mit Objekten verknüpfen
---------------------------------------------

Eine neue Datei kann über zwei Wege hochgeladen werden: Entweder erstellt man ein neues Objekt vom Typ **Dateien** und lädt anschließend in der Kategorie **Dateiversionen** die Datei hoch. Oder man geht den Weg über das Objekt, das mit der Datei verknüpft werden soll: Hierbei nutzt man die Kategorie **Dateizuweisung**.

Für Dateien, die über die Kategorie Dateizuweisung hochgeladen werden, legt i-doit automatisch je ein Objekt an. Das spart einige Klicks.

Das Attribut **Datei-Zuordnung (Objekt)** ist dabei recht flexibel:

*   Per Drag'n'Drop kann eine Datei vom Desktop & Co. in das Attributfeld hineingezogen werden.
*   Per Autovervollständigung können bereits hochgeladene Dateien zugeordnet werden.
*   Über das Lupen-Icon öffnet sich der **Datei-Browser**, über den die Datei hochgeladen und ausgewählt wird.

[![Datei-Zuordnung](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/6-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/6-dhuv.png)

Der **Datei-Browser** listet alle verfügbaren Dateien auf. Diese lassen sich über das Attribut **Kategorie** einordnen, sodass eine bessere Übersicht gewährleistet ist.

[![Datei-Browser](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/7-dhuv.png)](../assets/images/de/anwendungsfaelle/dateien-hochladen-und-verknuepfen/7-dhuv.png)

Dateien in benutzerdefinierten Kategorien verknüpfen
----------------------------------------------------

Um eine Datei mit einem Objekt zu verknüpfen, ist man nicht auf die Standard-Kategorien von i-doit angewiesen. In einer [benutzerdefinierten Kategorie](../grundlagen/benutzerdefinierte-kategorien.md) kann man Attribute vom Feldtyp **Datei Browser** hinzufügen.

!!! success "Dokumente-Modul"

    Wer Betriebshandbücher, Notfallpläne & Co. direkt aus der IT-Dokumentation generieren möchte, sollte den Einsatz des [Dokumente-Moduls](../i-doit-pro-add-ons/documents/index.md) für i-doit in Betracht ziehen. Hierüber lassen sich umfangreiche Textdokumente mit [Attributen](../grundlagen/struktur-it-dokumentation.md), Bildern und [Reports](../auswertungen/report-manager.md) aus i-doit anreichern.