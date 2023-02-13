# Standorte

Die Verortung von Hardware & Co. ist ein essentieller Bestandteil von i-doit. In diesem Artikel wird erklärt, wie man Standorte dokumentiert und [Objekte](../grundlagen/struktur-it-dokumentation.md) dort platziert.

Übersicht
---------

i-doit verfügt bereits in der Standard-Installation über passende [Objekttypen](../grundlagen/struktur-it-dokumentation.md), die für die Dokumentation von Standorten genutzt (oder ausgeblendet) werden können:

*   **Land**
*   **Stadt**
*   **Gebäude**
*   **Raum**
*   **Schrank**

Neben diesen Objekttypen gibt es pro Objekt [Kategorien](../grundlagen/struktur-it-dokumentation.md), in denen die Verortung hinterlegt wird:

*   **Standort**: Angabe für das physikalisch übergeordnete Objekt
*   **Räumlich zugeordnete Objekte**: Liste von physikalisch untergeordneten Objekten

Standorte werden in einer Baumstruktur dokumentiert. Dadurch wird verhindert, dass Objekte räumlich mehrmals verortet werden können, was physikalisch nicht möglich ist.

Standort-Pfad aufbauen
----------------------

An oberster Stelle steht das Objekt **Root-Lokation**, dem alle anderen Standorte untergeordnet werden. Dieses Objekt kann nicht gelöscht werden.

Als Beispiel dient ein Drucker, der in einem Büroraum steht, der wiederum einem Gebäude zugeordnet ist:

1.  Erstelle ein Gebäude und ordne dieses über die **Standort**\-Kategorie der **Root-Lokation** zu.
2.  Erstelle einen Raum und ordne diesen über die **Standort**\-Kategorie dem Gebäude zu.
3.  Erstelle einen Drucker und ordne diesen über die **Standort**\-Kategorie dem Raum zu.

Dadurch entsteht ein sogenannter Standortpfad: **Root-Lokation → Gebäude → Raum → Drucker**.

[![Standort-Pfad](../assets/images/de/anwendungsfaelle/standorte/1-stan.png)](../assets/images/de/anwendungsfaelle/standorte/1-stan.png)

Bei jedem Standort-Objekt wird das jeweils untergeordnete Objekt in der Kategorie **Räumlich zugeordnete Objekte** angezeigt. Eine Bearbeitung des Standortpfads ist auch über diese Kategorie möglich.

[![Standort-Pfad](../assets/images/de/anwendungsfaelle/standorte/2-stan.png)](../assets/images/de/anwendungsfaelle/standorte/2-stan.png)

Objekt als Standort definieren
------------------------------

Damit ein Objekt – beispielsweise ein Raum – als Standort für andere Objekte definiert werden kann, muss dessen Objekttyp dazu aktiviert werden. Dies geschieht unter **Verwaltung → CMDB Einstellungen → Objekttyp-Konfiguration → <Objekttypgruppe> → <Objekttyp> → Standort**. Bei den oben angegebenen Objekttypen steht die Option bereits auf **Ja**.

Standort-Pfad konfigurieren
---------------------------

Der Standortpfad kann pro Mandant konfiguriert werden.

| Option | Datentyp | Standardwert | Beschreibung |
| --- | --- | --- | --- |
| **Verwaltung → Systemeinstellungen → Mandanteneinstellungen → Oberflächendarstellung → String zur Separation von Standorten** | Zeichenkette | **>** | Durch welche Zeichenfolge sollen die Objekte eines Standortpfads voneinander separiert werden? |
| **Verwaltung → Systemeinstellungen → Mandanteneinstellungen → Maximallänge von Zeichenfolgen → Objektbezeichnung im Standortpfad** | Positive Ganzzahl | **16** | Wie viele Zeichen darf der Objekt-Titel pro Objekt innerhalb eines Standortpfads haben? Zeichen darüber hinaus werden abgeschnitten. |
| **Verwaltung → Systemeinstellungen → Mandanteneinstellungen → Maximallänge von Zeichenfolgen → Kompletter Standortpfad** | Positive Ganzzahl | **40** | Wie viele Zeichen darf der vollständige Standortpfad haben? Länge Zeichenketten werden beschnitten. |

Hardware in Rack positionieren
------------------------------

Serverschränke können ebenfalls als Standorte verwendet werden, [um Hardware dort zu positionieren](../auswertungen/rack-ansicht.md).

Chassis
-------

Um Chassis mit entsprechenden Modulen auszustatten, wird ein ähnlicher Mechanismus verwendet. Dieses Feature steht in den Objekttypen

*   **Blade Chassis** und **Blade Server** sowie
*   **Switch Chassis** und **Switch** (als Modul)

bereit. Die eigentliche Dokumentation findet im Kategorie-Ordner **Chassis** statt. Durch die Zuordnung eines Moduls in der Kategorie **Chassis → Zugewiesene Geräte** wird ebenfalls eine Standort-Beziehung erstellt.

Geo-Koordinaten
---------------

In der Kategorie **Standort** können [Geo-Koordinaten mit Längen- und Breitengrad](./geo-koordinaten.md) hinterlegt werden. Dadurch werden Links zu bekannten Kartendiensten erstellt, auf deren Karte das Objekt verortet wird.

Standortansicht
---------------

Die Navigation durch alle Standortpfade ist innerhalb der linken Navigationsleiste unter **Standortsicht** möglich. Die Baumstruktur kann auf- und zugeklappt werden. Ein im Haupt-Inhaltsbereich geöffnetes Objekt wird in der **Standortansicht** hervorgehoben.

[![Standortsicht](../assets/images/de/anwendungsfaelle/standorte/3-stan.png)](../assets/images/de/anwendungsfaelle/standorte/3-stan.png)

Logische Standorte
------------------

Ein dokumentierter Arbeitsplatz erhält eine Person als logischen Standort. Zudem können Arbeitsplätze physikalischen Standorten zugeordnet werden. Die **Standortsicht** (siehe oben) kann entweder physikalische oder logische Standorte oder eine Kombination aus beiden darstellen. Diese Option ist [benutzerdefiniert](./lokalen-benutzer-anlegen.md).

Raumplan
--------

Das Add-on [Floorplan](../i-doit-pro-add-ons/floorplan.md) eignet sich dazu, auf Basis der Standortpfade zweidimensionale Pläne zu erstellen.

Benutzerrechte auf Standorte
----------------------------

Für jeden Benutzer bzw. jede Gruppe von Benutzern können Lese-, Schreib- und viele weitere [Rechte auf Standorte und darunter liegende Objekte](./standort-basierte-benutzerrechte.md) vergeben werden.