# Geo-Koordinaten

Jedes [Objekt](../grundlagen/struktur-it-dokumentation.md) in i-doit lässt sich mit geografischen Koordinaten in Form von Breiten- und Längengrad versehen.

Geo-Koordinaten speichern
-------------------------

Falls noch nicht geschehen, lassen sich die Geo-Koordinaten eines Standorts über diverse Karten- und Navigationsdienste ermitteln. Die Koordinaten werden in der [Kategorie](../grundlagen/struktur-it-dokumentation.md) **Standort** gespeichert. Dort stehen die beiden Attribute **Breitengrad** und **Längengrad** zur Verfügung.

[![standort](../assets/images/de/anwendungsfaelle/geo-koordinaten/de_geo-koordinaten.png)](../assets/images/de/anwendungsfaelle/geo-koordinaten/de_geo-koordinaten.png)

Karten aufrufen
---------------

Sobald die Koordinaten gespeichert sind, werden in der Kategorie **Standort** zwei Buttons angezeigt. Der Button **Google Maps** öffnet im Webbrowser einen neuen Tab zum gleichnamigen Kartendienst. Eine Markierung weist auf die Geo-Koordinaten hin. Der Button **OpenStreetMap** verhält sich analog.

Koordinaten vererben
--------------------

Jedes verortete Objekt befindet sich innerhalb des Standortbaums, d. h., es gibt immer ein übergeordnetes Objekt (bis hin zur **Root-Lokation**/**Root location**). Die Geo-Koordinaten eines übergeordneten Objekts können auf die räumlich zugeordneten Objekte vererbt werden. Dazu wird in der Kategorie **Standort** zuerst das übergeordnete Objekt im Attribut **Standort** ausgewählt. Nach Klick auf den Button **GEO Koordinaten vererben** werden die beiden Attribute **Breitengrad** und **Längengrad** automatisch mit den Angaben des übergeordneten Objekts ausgefüllt.

Eine automatisierte Vererbung der Koordinaten von einem Objekt zu allen räumlich zugeordneten Objekten findet nicht statt.