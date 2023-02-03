**Inhaltsverzeichnis**

*   1[Funktionsweise](#Objektsperre-Funktionsweise)
*   2[Konfiguration](#Objektsperre-Konfiguration)
*   3[Liste von gesperrten Objekten](#Objektsperre-ListevongesperrtenObjekten)

Kollaboratives Arbeiten an der IT-Dokumentation bringt auch so manche Fallstricke mit sich. Damit sich Änderungen von Benutzern nicht gegenseitig überschreiben, bringt i-doit eine Bearbeitungssperre mit. Diese räumt einem Benutzer exklusive Schreibrechte ein. Alle anderen Benutzer erhalten in der Zeit der Sperre lediglich Leserechte.

Funktionsweise
--------------

Wenn ein Benutzer ein [Objekt](/display/de/Struktur+der+IT-Dokumentation) editiert, wird es für eine bestimmte Zeit für andere Benutzer gesperrt. Diese können in dieser Zeit das Objekt zwar im Lesemodus betrachten, aber nicht editieren. Die Objektsperre erkennt man daran, dass auf der [Übersichtsseite](/display/de/Struktur+der+IT-Dokumentation) und in jeder [Kategorie](/display/de/Struktur+der+IT-Dokumentation) des gesperrten Objekts ein großer, roter Hinweis erscheint, von wem das Objekt gesperrt wurde: `**- LOCKED ([Benutzer]) -**`

Sobald die Objektsperre aktiviert wird, startet ein Counter. Läuft der Countdown ab, wird die Objektsperre aufgehoben. Der Benutzer sollte in dieser Zeit seine Änderungen gespeichert haben, um nicht Gefahr zu laufen, dass andere Benutzer seine Änderungen überschreiben (oder umgekehrt).

Die Objektsperre wird vorzeitig aufgehoben, wenn der Benutzer seine Änderungen gespeichert hat.

![](/download/attachments/47611908/object-lock-de.png?version=1&modificationDate=1631799562162&api=v2&effects=drop-shadow)

Konfiguration
-------------

In der Standard-Installation von i-doit ist die Objektsperre für 120 Sekunden aktiv. Dies wird unter `**Verwaltung → CMDB Einstellungen → Allgemeine Einstellungen → Objektsperrung**` konfiguriert:

*   `**Aktiviere das Sperren von Objekten in Bearbeitung**`: Soll die Objektsperre aktiviert sein?
*   `**Timeout**`: Zeit in Sekunden für den Countdown

![](/download/attachments/47611908/object-lock--editde.png?version=1&modificationDate=1631799742453&api=v2&effects=drop-shadow)

Liste von gesperrten Objekten
-----------------------------

Unterhalb der Konfiguration (**`**Verwaltung → CMDB Einstellungen → Allgemeine Einstellungen → Objektsperrung**`**) werden derzeit gesperrte Objekte in einer Liste angezeigt. Über den Button `**Löschen**` werden alle Sperren vorzeitig aufgehoben.

![](/download/attachments/47611908/object-lock-cat-de.png?version=1&modificationDate=1631799631729&api=v2&effects=drop-shadow)