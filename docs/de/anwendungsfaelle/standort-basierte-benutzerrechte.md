# Standort-basierte Benutzerrechte

In i-doit sind [sehr feingranulare Benutzerrechte](../effizientes-dokumentieren/rechteverwaltung/index.md) definierbar, um bestimmten Benutzergruppen nur eingeschränkten Zugriff auf die IT-Dokumentation zu ermöglichen. Dazu gehören Benutzerrechte, die sich nur auf bestimmte [Standorte](../anwendungsfaelle/standorte.md) auswirken.

## Aufgabe

Herr Müller ist verantwortlich für alle Server im Standort Düsseldorf. Die Rechte von Herrn Müller sollen so eingeschränkt werden, dass er jeweils im Standort Düsseldorf alle Server sehen kann und neue Server-[Objekte](../grundlagen/struktur-it-dokumentation.md) erstellen kann. Bei allen Servern im Standort Düsseldorf soll er alle [Kategorien](../grundlagen/struktur-it-dokumentation.md) bearbeiten können. Auf Server oder andere Objekte in anderen Standorten soll er keinen Zugriff haben.

## Konfiguration

Um den lesenden und bearbeitenden Zugriff auf die Objekte und deren Kategorien zu ermöglichen, werden unter **[Verwaltung → Einstellungen für [Mandanten-Name] → Berechtigungen → CMDB](../effizientes-dokumentieren/rechteverwaltung/cmdb.md)** für das **Personen**-Objekt von Herrn Müller die Rechte  **Ansehen** und **Bearbeiten** auf die **Bedingungen**

*   **Objekte unterhalb einer Lokation** und
*   **Kategorie in Objekten unterhalb eines Standortes** gesetzt.

Als **Parameter** wird jeweils Düsseldorf ausgewählt.

Um die Neuanlage von Objekten zu ermöglichen, muss das Recht **Erstellen** für **Objekte vom Typ** Server gesetzt werden. Um den Zugriff auf die Kategorien der neu erstellten Objekte zu ermöglichen, wird das Recht **Kategorie(n) in von mir erstellten Objekten** auf alle Kategorien gesetzt. Dies kann optional auch nur für die Kategorie **Standort** gesetzt werden, damit eine physikalische Zuordnung möglich wird.

Damit diese Einschränkungen auch im [Objektbrowser](../grundlagen/objekt-beziehungen.md), in der [Standortansicht](../anwendungsfaelle/standorte.md) sowie im [CMDB-Explorer](../auswertungen/cmdb-explorer/index.md) greifen, müssen unter **Verwaltung → [Mandanten-Name] Verwaltung → Experteneinstellungen** erweiterte Einstellungen gesetzt werden:

| Key | Value |
| --- | --- |
| **auth.use-in-cmdb-explorer** | **1** |
| **auth.use-in-object-browser** | **1** |
| **auth.use-in-location-tree** | **1** |

Eine genaue Erklärung dieser Einstellungen befindet sich im Artikel [CMDB (Rechteverwaltung)](../effizientes-dokumentieren/rechteverwaltung/cmdb.md).

## Handhabung

Der Prozess bei der Neuanlage eines Servers von Herrn Müller ist nun wie folgt: Er legt einen neuen Server an, editiert die Kategorie **Standort** und weist den Server einem Standort unterhalb von Düsseldorf zu.
