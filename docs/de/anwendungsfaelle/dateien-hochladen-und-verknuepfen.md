**Inhaltsverzeichnis**

*   1[Dateien sind Objekte](#Dateienhochladenundverknüpfen-DateiensindObjekte)
*   2[Dateien hochladen und mit Objekten verknüpfen](#Dateienhochladenundverknüpfen-DateienhochladenundmitObjektenverknüpfen)
*   3[Dateien in benutzerdefinierten Kategorien verknüpfen](#Dateienhochladenundverknüpfen-DateieninbenutzerdefiniertenKategorienverknüpfen)

Zu einer vollumfänglichen IT-Dokumentation gehören oftmals auch Dokumente in Form Dateien. Ob nun Betriebshandbücher, Notfallpläne, Verträge, Installationsprotokolle oder Treiber: Wichtige Dateien gehören mit [Objekten](/display/de/Struktur+der+IT-Dokumentation) in i-doit verknüpft.

Dateien sind Objekte
--------------------

Jede hochgeladene Datei in i-doit ist automatisch ein Objekt. Das hat den Vorteil, dass man diesen Dateien beliebige [Kategorien und Attribute](/display/de/Struktur+der+IT-Dokumentation) zuschreiben und sie mit beliebigen anderen Objekten [verknüpfen](/display/de/Objekt-Beziehungen) kann. i-doit bringt in der Standardinstallation bereits passende [Objekttypen](/display/de/Struktur+der+IT-Dokumentation) mit:

*   `**Dateien**` und
*   `**Notfallplan**`.

Diese lassen sich durch weitere [benutzerdefinierte Objekttypen](/display/de/Benutzerdefinierte+Objekttypen) erweitern, beispielsweise für Betriebshandbücher.

Die eigentliche Funktionalität (hochladen, verknüpfen, etc.) ist im [Kategorie-Ordner](/display/de/Struktur+der+IT-Dokumentation) `**Dateien**` zu finden. Diese besteht aus folgenden Unterkategorien:

*   `**Aktuelle Datei**`: Informationen zur hochgeladenen Datei, Download-Möglichkeit und Kategorisierung der Datei
*   `**Dateiversionen**`: Zu jeder Datei können beliebig viele Versionen existieren. Ein erneutes Hochladen der Datei erzeugt eine neue Version.
*   `**Zugewiesene Objekte**`: Mit welchen Objekten ist diese Datei verknüpft? (reine Ansicht ohne Funktion)

Der Kategorie-Ordner `**Dateien**` gehört zu den [spezifischen Kategorien](/display/de/Struktur+der+IT-Dokumentation), der sich über die [Objekttypkonfiguration](/display/de/Benutzerdefinierte+Objekttypen) beliebigen Objekttypen zuordnen lässt.

![](/download/attachments/59408503/kategorie_aktuelle_datei.png?version=1&modificationDate=1476283927728&api=v2&effects=drop-shadow)

![](/download/attachments/59408503/kategorie_dateiversionen.png?version=1&modificationDate=1476283927127&api=v2&effects=drop-shadow)

![](/download/attachments/59408503/kategorie_dateiversionen_eintrag.png?version=1&modificationDate=1476283926511&api=v2&effects=drop-shadow)

![](/download/attachments/59408503/kategorie_zugewiesene_objekte.png?version=1&modificationDate=1476283925890&api=v2&effects=drop-shadow)

In mehreren [rückwärtigen Kategorien](/display/de/Struktur+der+IT-Dokumentation) erfolgt die Verknüpfung zwischen Datei-Objekten und weiteren Objekten:

*   Dateizuweisung
*   Handbuchzuweisung
*   Notfallplanzuweisung

Diese [globalen Kategorien](/display/de/Struktur+der+IT-Dokumentation) können [beliebigen Objekttypen zugeordnet](/display/de/Zuordnung+von+Kategorien+zu+Objekttypen) werden und verfolgen ähnliche Funktionen, nämlich Dateien zuweisen.

![](/download/attachments/59408503/kategorie_dateizuweisung.png?version=1&modificationDate=1476283925253&api=v2&effects=drop-shadow)

Dateien hochladen und mit Objekten verknüpfen
---------------------------------------------

Eine neue Datei kann über zwei Wege hochgeladen werden: Entweder erstellt man ein neues Objekt vom Typ `**Dateien**` und lädt anschließend in der Kategorie `**Dateiversionen**` die Datei hoch. Oder man geht den Weg über das Objekt, das mit der Datei verknüpft werden soll: Hierbei nutzt man die Kategorie `**Dateizuweisung**`.

Für Dateien, die über die Kategorie Dateizuweisung hochgeladen werden, legt i-doit automatisch je ein Objekt an. Das spart einige Klicks.

Das Attribut `**Datei-Zuordnung (Objekt)**` ist dabei recht flexibel:

*   Per Drag'n'Drop kann eine Datei vom Desktop & Co. in das Attributfeld hineingezogen werden.
*   Per Autovervollständigung können bereits hochgeladene Dateien zugeordnet werden.
*   Über das Lupen-Icon öffnet sich der `**Datei-Browser**`, über den die Datei hochgeladen und ausgewählt wird.

![](/download/attachments/59408503/kategorie_dateizuweisung_neu.png?version=1&modificationDate=1476283924621&api=v2&effects=drop-shadow)

Der `**Datei-Browser**` listet alle verfügbaren Dateien auf. Diese lassen sich über das Attribut `**Kategorie**` einordnen, sodass eine bessere Übersicht gewährleistet ist.

![](/download/attachments/59408503/kategorie_dateizuweisung_datei-browser.png?version=1&modificationDate=1476283923893&api=v2)

Dateien in benutzerdefinierten Kategorien verknüpfen
----------------------------------------------------

Um eine Datei mit einem Objekt zu verknüpfen, ist man nicht auf die Standard-Kategorien von i-doit angewiesen. In einer [benutzerdefinierten Kategorie](/display/de/Benutzerdefinierte+Kategorien) kann man Attribute vom Feldtyp `**Datei Browser**` hinzufügen.

Dokumente-Modul

Wer Betriebshandbücher, Notfallpläne & Co. direkt aus der IT-Dokumentation generieren möchte, sollte den Einsatz des [Dokumente-Moduls](/display/de/Documents) für i-doit in Betracht ziehen. Hierüber lassen sich umfangreiche Textdokumente mit [Attributen](/display/de/Struktur+der+IT-Dokumentation), Bildern und [Reports](/display/de/Report+Manager) aus i-doit anreichern.