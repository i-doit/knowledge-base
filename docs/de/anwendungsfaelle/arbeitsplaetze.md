**Inhaltsverzeichnis**

*   1[Personen und deren Arbeitsplätze](#Arbeitsplätze-PersonenundderenArbeitsplätze)
*   2[IT-Komponenten am Arbeitsplatz](#Arbeitsplätze-IT-KomponentenamArbeitsplatz)
*   3[Standort eines Arbeitsplatzes](#Arbeitsplätze-StandorteinesArbeitsplatzes)
*   4[Umzug eines Arbeitsplatzes](#Arbeitsplätze-UmzugeinesArbeitsplatzes)

In i-doit können IT-Arbeitsplätze dokumentiert werden. Auf diese Weise hat man jederzeit im Blick, welcher Mitarbeiter über welche IT-Komponenten verfügt und wo sie zu finden sind.

Personen und deren Arbeitsplätze
--------------------------------

Neben der physikalischen Zuordnung von [Objekten](/display/de/Struktur+der+IT-Dokumentation) zu [Standorten](/display/de/Standorte), können Arbeitsplätze als logisches Konstrukt dokumentiert werden. An zentraler Stelle steht der [Objekttyp](/display/de/Struktur+der+IT-Dokumentation) `**Arbeitsplatz**`.

![](/download/attachments/66355593/de_objekttyp_arbeitsplatz.png?version=1&modificationDate=1507121223138&api=v2&effects=drop-shadow)

Ein Objekt diesen Typs wird über die [Kategorie](/display/de/Struktur+der+IT-Dokumentation) `**Logischer Standort**` einer Person zugeordnet.

![](/download/attachments/66355593/de_kategorie_logischer_standort.png?version=1&modificationDate=1507121223215&api=v2&effects=drop-shadow)

Umgekehrt wird über das `**Personen**`\-Objekt in der Kategorie `**Zugewiesene Arbeitsplätze**` diese Person einem oder auch weiteren Arbeitsplätzen zugeordnet.

![](/download/attachments/66355593/de_kategorie_zugewiesene_arbeitsplaetze.png?version=1&modificationDate=1507121223202&api=v2&effects=drop-shadow)

IT-Komponenten am Arbeitsplatz
------------------------------

Die Zuordnung von beliebigen (IT-)Komponenten zu einem Arbeitsplatz geschieht innerhalb des `**Arbeitsplatz**`\-Objekts in der Kategorie `**Zugewiesene Endgeräte**`.

![](/download/attachments/66355593/de_kategorie_zugewiesene_endgeraete.png?version=1&modificationDate=1507121223189&api=v2&effects=drop-shadow)

Ein Endgerät kann stets nur einem Arbeitsplatz zugeordnet werden. Welcher Arbeitsplatz das ist, kann innerhalb des Endgerät-Objekts in der Kategorie `**Zugewiesener Arbeitsplatz**` recherchiert werden.

![](/download/attachments/66355593/de_kategorie_zugewiesener_arbeitsplatz.png?version=1&modificationDate=1507121223176&api=v2&effects=drop-shadow)

Standort eines Arbeitsplatzes
-----------------------------

Zu guter Letzt kann ein Arbeitsplatz ebenfalls physikalisch verortet werden, beispielsweise in einem Büroraum. Mit dem Add-on [`**Raumplan**`](/display/de/Floorplan) kann dieser Raum anschließend visualisiert werden.

![Raumplan](/download/attachments/66355593/de_add-on_raumplan_buero.png?version=1&modificationDate=1507121223230&api=v2&effects=drop-shadow "Raumplan")

Umzug eines Arbeitsplatzes
--------------------------

Sollte eine Person intern den Platz wechseln, kann diese inklusive Arbeitsplatz und ausgewählten Endgeräten umziehen. Eine komfortable Funktion bietet das Add-on `**[Relocate-CI](/display/de/Relocate-CI)**`.