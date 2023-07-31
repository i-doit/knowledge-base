# Bearbeitungssperre

Die Sperrfunktion für Objekte bewirkt eine Sperre der Schreibzugriffe für die Zeit der Bearbeitung eines Objekts durch einen beliebigen Benutzer.
In dieser Zeit kann das Objekt nicht von einer anderen Sitzung (Login einer anderen Person) bearbeitet werden. Die Sperre bleibt bestehen, bis der Bearbeitungsvorgang abgeschlossen ist oder der Timeout erreicht ist.

| Option | Wert |
| - | - |
| Sperren von Objekten im Bearbeitungsmodus aktivieren | Ja oder Nein |
| Timeout | 120 Wert in Sekunden |
| Aktuell gesperrte Objekte | Liste der Objekte oder none |
