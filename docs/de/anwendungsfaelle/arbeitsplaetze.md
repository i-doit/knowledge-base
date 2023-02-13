# Arbeitsplätze

In i-doit können IT-Arbeitsplätze dokumentiert werden. Auf diese Weise hat man jederzeit im Blick, welcher Mitarbeiter über welche IT-Komponenten verfügt und wo sie zu finden sind.

Personen und deren Arbeitsplätze
--------------------------------

Neben der physikalischen Zuordnung von [Objekten](../grundlagen/struktur-it-dokumentation.md) zu [Standorten](../anwendungsfaelle/standorte.md), können Arbeitsplätze als logisches Konstrukt dokumentiert werden. An zentraler Stelle steht der [Objekttyp](../grundlagen/struktur-it-dokumentation.md) **Arbeitsplatz**.

[![Arbeitsplätze](../assets/images/de/anwendungsfaelle/arbeitsplaetze/1-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/1-ap.png)

Ein Objekt diesen Typs wird über die [Kategorie](../grundlagen/struktur-it-dokumentation.md) **Logischer Standort** einer Person zugeordnet.

[![Kategorie](../assets/images/de/anwendungsfaelle/arbeitsplaetze/2-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/2-ap.png)

Umgekehrt wird über das **Personen**\-Objekt in der Kategorie **Zugewiesene Arbeitsplätze** diese Person einem oder auch weiteren Arbeitsplätzen zugeordnet.

[![Zugewiesener-Arbeitsplatz](../assets/images/de/anwendungsfaelle/arbeitsplaetze/3-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/3-ap.png)

IT-Komponenten am Arbeitsplatz
------------------------------

Die Zuordnung von beliebigen (IT-)Komponenten zu einem Arbeitsplatz geschieht innerhalb des **Arbeitsplatz**\-Objekts in der Kategorie **Zugewiesene Endgeräte**.

[![Zugewiesenes-Endgeräte](../assets/images/de/anwendungsfaelle/arbeitsplaetze/4-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/4-ap.png)

Ein Endgerät kann stets nur einem Arbeitsplatz zugeordnet werden. Welcher Arbeitsplatz das ist, kann innerhalb des Endgerät-Objekts in der Kategorie **Zugewiesener Arbeitsplatz** recherchiert werden.

[![Zugewiesner-Arbeitsplatz](../assets/images/de/anwendungsfaelle/arbeitsplaetze/5-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/5-ap.png)

Standort eines Arbeitsplatzes
-----------------------------

Zu guter Letzt kann ein Arbeitsplatz ebenfalls physikalisch verortet werden, beispielsweise in einem Büroraum. Mit dem Add-on [**Raumplan**](../i-doit-pro-add-ons/floorplan.md) kann dieser Raum anschließend visualisiert werden.

[![Raumplan](../assets/images/de/anwendungsfaelle/arbeitsplaetze/6-ap.png)](../assets/images/de/anwendungsfaelle/arbeitsplaetze/6-ap.png)

Umzug eines Arbeitsplatzes
--------------------------

Sollte eine Person intern den Platz wechseln, kann diese inklusive Arbeitsplatz und ausgewählten Endgeräten umziehen. Eine komfortable Funktion bietet das Add-on **[Relocate-CI](../i-doit-pro-add-ons/relocate-ci.md)**.