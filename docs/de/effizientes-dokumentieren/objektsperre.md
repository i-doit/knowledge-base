# Objektsprerre

Kollaboratives Arbeiten an der IT-Dokumentation bringt auch so manche Fallstricke mit sich. Damit sich Änderungen von Benutzern nicht gegenseitig überschreiben, bringt i-doit eine Bearbeitungssperre mit. Diese räumt einem Benutzer exklusive Schreibrechte ein. Alle anderen Benutzer erhalten in der Zeit der Sperre lediglich Leserechte.

## Funktionsweise

Wenn ein Benutzer ein [Objekt](../grundlagen/struktur-it-dokumentation.md) editiert, wird es für eine bestimmte Zeit für andere Benutzer gesperrt. Diese können in dieser Zeit das Objekt zwar im Lesemodus betrachten, aber nicht editieren. Die Objektsperre erkennt man daran, dass auf der [Übersichtsseite](../grundlagen/struktur-it-dokumentation.md) und in jeder [Kategorie](../grundlagen/struktur-it-dokumentation.md) des gesperrten Objekts ein großer, roter Hinweis erscheint, von wem das Objekt gesperrt wurde: **- LOCKED ([Benutzer]) -**

Sobald die Objektsperre aktiviert wird, startet ein Counter. Läuft der Countdown ab, wird die Objektsperre aufgehoben. Der Benutzer sollte in dieser Zeit seine Änderungen gespeichert haben, um nicht Gefahr zu laufen, dass andere Benutzer seine Änderungen überschreiben (oder umgekehrt).

Die Objektsperre wird vorzeitig aufgehoben, wenn der Benutzer seine Änderungen gespeichert hat.

[![objektsperre-aufheben](../assets/images/de/effizientes-dokumentieren/objektsperre/1-os.png)](../assets/images/de/effizientes-dokumentieren/objektsperre/1-os.png)

## Konfiguration

In der Standard-Installation von i-doit ist die Objektsperre für 120 Sekunden aktiv. Dies wird unter **Verwaltung → Benutzereinstellungen → Objektsperre** konfiguriert:

-   **Aktiviere das Sperren von Objekten in Bearbeitung**: Soll die Objektsperre aktiviert sein?
-   **Timeout**: Zeit in Sekunden für den Countdown

[![objektsperre-timeout](../assets/images/de/effizientes-dokumentieren/objektsperre/2-os.png)](../assets/images/de/effizientes-dokumentieren/objektsperre/2-os.png)

## Liste von gesperrten Objekten

Unterhalb der Konfiguration (**Verwaltung → Benutzereinstellungen → Objektsperre**) werden derzeit gesperrte Objekte in einer Liste angezeigt. Über den Button **Löschen** werden alle Sperren vorzeitig aufgehoben.

[![objektsperre-anzeigen](../assets/images/de/effizientes-dokumentieren/objektsperre/3-os.png)](../assets/images/de/effizientes-dokumentieren/objektsperre/3-os.png)
