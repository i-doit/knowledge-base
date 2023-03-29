# Rack-Ansicht

i-doit bringt eine Visualisierung von 19"-Racks mit. Alle verbauten Komponenten werden übersichtlich angezeigt. Statistiken zu freien Höheneinheiten, maximaler Energiebedarf und freie Netzwerkports in Switches und Patchpanels unterstützen bei der Kapazitätsplanung.

Kategorie Schrank
-----------------

Die [Kategorie](../grundlagen/struktur-it-dokumentation.md) **Schrank** ist dem [Objekttyp](../grundlagen/struktur-it-dokumentation.md) **Schrank** in der Standard-[Installation](../installation/index.md) von i-doit bereits zugeordnet. Die Kategorie zeigt das modellierte Rack von vorne und hinten.

[![Kategorie Schrank](../assets/images/de/auswertungen/rack-ansicht/1-ra.png)](../assets/images/de/auswertungen/rack-ansicht/1-ra.png)

!!! success "Schrank = Rack"

    Die Screenshots zeigen eine Demo-Installation von i-doit, in der der ursprüngliche Objekttyp **Schrank** und die gleichnamige Kategorie in **Rack** umbenannt wurden. Wer sein [eigenes Vokabular in die IT-Dokumentation einbringen](../administration/mehrsprachigkeit-und-uebersetzungen.md) möchte, kann das problemlos tun.

Schrank-Attribute bearbeiten
----------------------------

Die Höheneinheiten des Racks werden in der Kategorie **Formfaktor** definiert. Diese Kategorie ist dem Objekttyp **Schrank** ebenfalls bereits zugeordnet, wenn i-doit installiert wird. In der Kategorie sollte neben dem Attribut **Höheneinheiten** auch der **Formfaktor** von **19"** angegeben werden.

[![Schrank-Attribute bearbeiten](../assets/images/de/auswertungen/rack-ansicht/2-ra.png)](../assets/images/de/auswertungen/rack-ansicht/2-ra.png)

Im Beispiel nimmt das Rack 19"-fähige Komponenten in maximal 42 Höheneinheiten auf.

Die auf- oder absteigende **Sortierung der Höheneinheiten** findet wiederum in der Kategorie **Schrank** statt. Dazu wechseln man durch den Button **Editieren** in den Modus zum Bearbeiten. Im Kästchen auf der rechten Seite befindet sich das entsprechende Drop-Down-Menü.

In diesem Kästchen kann zudem angegeben werden, wie viele **vertikale Einschübe** für **vorne** und **hinten** zur Verfügung stehen. Beispielsweise werden darüber seitlich angebrachte PDUs dokumentiert. Im Screenshot sind für **vorne** und **hinten** je 2 **vertikale Einschübe** zu sehen, die abwechselnd links und rechts platziert werden.

[![Schrank-Attribute bearbeiten](../assets/images/de/auswertungen/rack-ansicht/3-ra.png)](../assets/images/de/auswertungen/rack-ansicht/3-ra.png)

Objekte in Schrank positionieren
--------------------------------

Um Racks mit [Objekten](../grundlagen/struktur-it-dokumentation.md) zu befüllen, gelten zwei Voraussetzungen: Zum Einen muss pro Objekt in dessen Kategorie **Formfaktor** angegeben sein, wie viele **Höheneinheiten** es belegt und dass es den **Formfaktor** **19"** hat. Zum Anderen muss in der [Objekttyp-Konfiguration](../grundlagen/zurodnung-von-kategorien-zu-objekttypen.md) der Haken gesetzt sein, dass Objekte diesen Typs **im Schrank positionierbar** sind. Fehlt der Eintrag in der Kategorie **Formfaktor**, nimmt i-doit an, es handelt sich um eine 19"-Komponente mit 1 HE.

Die Zuordnung von Objekt zu Rack findet in der Kategorie **Standort** statt, in der physikalische Standorte miteinander in [Beziehung](../grundlagen/objekt-beziehungen.md) gesetzt werden. Zuerst wird im Attribut **Standort** das Rack ausgewählt. Anschließend erscheinen weitere Attribute, die es auszufüllen gilt:

*   **Montage**: Wird das Objekt **horizontal** ("normaler" Einbau) oder **vertikal** (beispielsweise PDUs an der Seite) eingebaut?
*   **Einschub**: Belegt das Objekt die komplette Tiefe des Racks (**Vorder- und Rückseite**) oder ist es lediglich an der **Vorderseite** oder der **Rückseite** montiert? Bei einseitig montierten Objekten kann dieselbe Höheneinheit doppelt belegt werden, sprich einmal vorne und einmal hinten.
*   **Position im Schrank**: Bei **horizontaler** Montage werden die Höhenheiten ausgewählt. Je nach dem, wie viele HE ein Objekt einnimmt, ändern sich die Angaben im Drop-Down-Menü. Bei **vertikaler** Montage stehen hier die **Slots** (rechts oben = 1, links oben = 2, rechts unten = 3, links unten = 4, usw.). Bereits belegte HEs oder Slots sind ausgeblendet.

[![Objekte in Schrank positionieren](../assets/images/de/auswertungen/rack-ansicht/4-ra.png)](../assets/images/de/auswertungen/rack-ansicht/4-ra.png)

Bereits zugeordnete Objekte werden in der **Standortsicht** und in der Kategorie **Räumlich zugeordnete Objekte** angezeigt.

[![Objekte in Schrank positionieren](../assets/images/de/auswertungen/rack-ansicht/5-ra.png)](../assets/images/de/auswertungen/rack-ansicht/5-ra.png)

Zugeordnete Objekte bearbeiten
------------------------------

In der Kategorie **Schrank** gibt es Möglichkeiten, die zugeordneten Objekte zu bearbeiten. Zu jedem Objekt gibt es einen kleinen Button mit Pfeil nach unten. Klickt man auf ihn, erhält man folgende Optionen:

*   **Objektlink**: Die Übersichtsseite des Objekts wird geöffnet.
*   **Objekt neu zuweisen**: Ein Dialog öffnet sich auf der rechten Seite, um dem man ein Objekt neu positionieren kann (siehe unten).
*   **Objekt lösen**: Die Angabe, an welcher Position im Rack das Objekt montiert ist, wird gelöscht. Das Objekt bleibt weiterhin über die Standortzuweisung dem Rack zugeordnet.

[![Zugeordnete Objekte bearbeiten](../assets/images/de/auswertungen/rack-ansicht/6-ra.png)](../assets/images/de/auswertungen/rack-ansicht/6-ra.png)

Objekt, die zwar räumlich dem Rack zugeordnet, aber noch nicht positioniert sind, werden auf der rechten Seite im Kästchen **Unpositionierte Objekte** aufgelistet. Über den Button mit dem Zahnrad können die benötigten HEs des Objekts geändert werden. Über den Button mit dem X wird die Standortzuweisung unwiderruflich gelöscht (**purge**).

[![Zugeordnete Objekte bearbeiten](../assets/images/de/auswertungen/rack-ansicht/7-ra.png)](../assets/images/de/auswertungen/rack-ansicht/7-ra.png)

Klickt man auf das Objekt in der Liste, öffnet sich ein weiteres Kästchen darunter. Über die Dialoge kann das Objekt im Rack positioniert werden.

[![Zugeordnete Objekte bearbeiten](../assets/images/de/auswertungen/rack-ansicht/8-ra.png)](../assets/images/de/auswertungen/rack-ansicht/8-ra.png)

Statistiken
-----------

Die Kategorie Schrank bringt eine vielfältige Auswertung über die zugeordneten Objekte mit. Über der visuellen Ansicht des Racks befindet sich das Kästchen Statistiken, das mit einem Klick auf den Pfeil auf der linken Seite auf- und zugeklappt werden kann.

[![Statistiken](../assets/images/de/auswertungen/rack-ansicht/9-ra.png)](../assets/images/de/auswertungen/rack-ansicht/9-ra.png)

Die Statistiken setzen sich aus verschiedenen Attributen des Racks und von zugeordneten Objekten zusammen:

| Statistik | Objekte | Kategorien | Attribute |
| --- | --- | --- | --- |
| **Freie Einschübe** | **Rack**<br><br>Räumlich zugeordnete Objekte | **Formfaktor**<br><br>**Standort** | **Höheneinheiten**<br><br>**Montage**, **Einschub**, **Position im Schrank** |
| **Belegte Einschübe** | siehe oben | siehe oben | siehe oben |
| **Freie vertikale Einschübe** | siehe oben | siehe oben | siehe oben |
| **Belegte vertikale Einschübe** | siehe oben | siehe oben | siehe oben |
| **PDU Anschlüsse (Eingang)** | Räumlich zugeordnete Objekte vom Typ **Steckdosenleiste** | **Verkabelung → Anschlüsse** | **Eingang/Ausgang**, **Anschlussart**, **Verbunden mit** |
| **PDU Anschlüsse (Ausgang)** | Räumlich zugeordnete Objekte vom Typ **Steckdosenleiste** | **Verkabelung → Anschlüsse** | **Eingang/Ausgang**, **Anschlussart**, **Verbunden mit** |
| **Switch Ports** | Räumlich zugeordnete Objekte vom Typ **Switch** | **Netzwerk → Port** | **Stecker**, **Verbunden mit** |
| **FC-Switch Ports** | Räumlich zugeordnete Objekte vom Typ **FC-Switch** | **Netzwerk → Port** | **Stecker**, **Verbunden mit** |
| **Patch Panel Ports (Eingänge)** | Räumlich zugeordnete Objekte vom Typ **Patchfeld** | **Verkabelung → Anschlüsse** | **Eingang/Ausgang**, **Anschlussart**, **Verbunden mit** |
| **Patch Panel Ports (Ausgänge)** | Räumlich zugeordnete Objekte vom Typ **Patchfeld** | **Verkabelung → Anschlüsse** | **Eingang/Ausgang**, **Anschlussart**, **Verbunden mit** |
| **Gesamter Stromverbrauch** | Räumlich zugeordnete Objekte | **Stromverbraucher** | **Watt** |
| **Gesamte Wärmeenergie** | Räumlich zugeordnete Objekte | **Stromverbraucher** | **BTU** |

Kategorie Schränke
------------------

Ist ein Rack einem Raum über die Kategorie Standort zugeordnet, steht eine weitere Visualisierung zur Verfügung. Dem Objekttyp Raum ist in der Standard-Installation von i-doit bereits die Kategorie Schränke zugeordnet. Über diese werden alle dem Raum zugeordneten Objekte vom Typ Schrank visuell dargestellt.

[![Kategorie Schränke](../assets/images/de/auswertungen/rack-ansicht/10-ra.png)](../assets/images/de/auswertungen/rack-ansicht/10-ra.png)

Oberhalb der Visualisierung bestehen verschiedene Optionen.

*   **Schränke neu positionieren**: Hierüber kann die Reihenfolge der Racks angepasst werden.
*   **Alle Schränke aller untergeordneten Standorte laden!** Tiefer in der Standort-Hierarchie zugeordnete Racks werden ebenfalls geladen. Standardmäßig werden direkt zugeordnete Objekte vom Typ **Schrank** dargestellt. Die Kategorie **Schränke** kann dadurch beispielsweise Objekten vom Typ **Gebäude** zugeordnet werden, in denen sich Räume und erst darunter Racks befinden.
*   **Statistiken für alle Schränke laden**:Die Statistiken (siehe oben) aller Racks werden nacheinander angezeigt.
