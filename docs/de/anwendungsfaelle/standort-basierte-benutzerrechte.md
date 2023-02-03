**Inhaltsverzeichnis**

*   1[Aufgabe](#StandortbasierteBenutzerrechte-Aufgabe)
*   2[Konfiguration](#StandortbasierteBenutzerrechte-Konfiguration)
*   3[Handhabung](#StandortbasierteBenutzerrechte-Handhabung)

In i-doit sind [sehr feingranulare Benutzerrechte](/display/de/Rechteverwaltung) definierbar, um bestimmten Benutzergruppen nur eingeschränkten Zugriff auf die IT-Dokumentation zu ermöglichen. Dazu gehören Benutzerrechte, die sich nur auf bestimmte [Standorte](/display/de/Standorte) auswirken.

Aufgabe
-------

Herr Müller ist verantwortlich für alle Server im Standort Düsseldorf. Die Rechte von Herrn Müller sollen so eingeschränkt werden, dass er jeweils im Standort Düsseldorf alle Server sehen kann und neue Server-[Objekte](/display/de/Struktur+der+IT-Dokumentation) erstellen kann. Bei allen Servern im Standort Düsseldorf soll er alle [Kategorien](/display/de/Struktur+der+IT-Dokumentation) bearbeiten können. Auf Server oder andere Objekte in anderen Standorten soll er keinen Zugriff haben.

Konfiguration
-------------

Um den lesenden und bearbeitenden Zugriff auf die Objekte und deren Kategorien zu ermöglichen, werden unter `**[Verwaltung → Rechtesystem → Rechtevergabe → CMDB](/pages/viewpage.action?pageId=42303548)**` für das `**Personen**`\-Objekt von Herrn Müller die Rechte  `**Ansehen**` und `**Bearbeiten**` auf die `**Bedingungen**`

*   `**Objekte unterhalb einer Lokation**` und
*   `**Kategorie in Objekten unterhalb eines Standortes**` gesetzt.

Als `**Parameter**` wird jeweils Düsseldorf ausgewählt.

Um die Neuanlage von Objekten zu ermöglichen, muss das Recht `**Erstellen**` für `**Objekte vom Typ**` Server gesetzt werden. Um den Zugriff auf die Kategorien der neu erstellten Objekte zu ermöglichen, wird das Recht `**Kategorie(n) in von mir erstellten Objekten**` auf alle Kategorien gesetzt. Dies kann optional auch nur für die Kategorie `**Standort**` gesetzt werden, damit eine physikalische Zuordnung möglich wird.

Damit diese Einschränkungen auch im [Objektbrowser](/display/de/Objekt-Beziehungen), in der [Standortansicht](/display/de/Standorte) sowie im [CMDB-Explorer](/display/de/CMDB-Explorer) greifen, müssen unter `**Verwaltung → Systemeinstellungen → Experteneinstellungen**` erweiterte Einstellungen gesetzt werden:

| Key | Value |
| --- | --- |
| Key | Value |
| --- | --- |
| `**auth.use-in-cmdb-explorer**` | `**1**` |
| `**auth.use-in-object-browser**` | `**1**` |
| `**auth.use-in-location-tree**` | `**1**` |

Eine genaue Erklärung dieser Einstellungen befindet sich im Artikel [CMDB (Rechteverwaltung)](/pages/viewpage.action?pageId=42303548).

Handhabung
----------

Der Prozess bei der Neuanlage eines Servers von Herrn Müller ist nun wie folgt: Er legt einen neuen Server an, editiert die Kategorie `**Standort**` und weist den Server einem Standort unterhalb von Düsseldorf zu.