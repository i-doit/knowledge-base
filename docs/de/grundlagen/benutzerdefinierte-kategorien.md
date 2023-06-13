# Benutzerdefinierte Kategorien

Neben den Standard-Kategorien in i-doit können eigene (benutzerdefinierte) [Kategorien](struktur-it-dokumentation.md) erstellt werden, um zusätzliche [Attribute](struktur-it-dokumentation.md) zu dokumentieren, die in den Standard-Kategorien nicht enthalten sind.

Konfiguration der Kategorie

Die Konfiguration der benutzerdefinierten Kategorien ist unter **Verwaltung → CMDB Einstellungen → Benutzerdefinierte Kategorien** zu finden.Über den Button **Neu** wird eine benutzerdefinierte Kategorie erzeugt. Existieren bereits benutzerdefinierte Kategorien, können diese nachträglich bearbeitet werden.

[![benutzerdefinierte-kategorien](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/1-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/1-bk.png)

Im ersten Schritt ist es notwendig, die Kategorie mit einem eindeutigen Namen zu bezeichnen, damit sie in der Kategorie-Liste identifiziert werden kann.

[![benutzerdefinierte-kategorien-2](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/2-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/2-bk.png)

Weiterhin muss die Kategorie mit einem oder mehreren [Objekttypen](struktur-it-dokumentation.md) verknüpft werden, damit diese genutzt werden kann.

[![benutzerdefinierte-kategorien-3](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/3-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/3-bk.png)

Danach muss festgelegt werden, ob es sich um eine [Single-](struktur-it-dokumentation.md) oder [Multi-Value-Kategorie](struktur-it-dokumentation.md) (Listen-Kategorie) handeln soll. Wenn Attribute gepflegt werden soll, die in ihrer Kombination eindeutig sind, ist die Konfiguration als Single-Value-Kategorie ausreichend. Sollen jedoch die Werte mehrfach gepflegt werden, so ist eine Multi-Value-Kategorie die richtige Wahl. Auf diese Weise ist es möglich, mehrfache Einträge in einer Kategorie zu speichern.

[![benutzerdefinierte-kategorien-4](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/4-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/4-bk.png)

Um auf die Kategorie bei Abfragen (zum Beispiel in selbst geschriebenen [Reports](../auswertungen/report-manager.md)) zugreifen zu können, sollte außerdem eine Konstante hinterlegt werden. Diese Konstante wird beim Erstellen der Kategorie automatisch vorgeschlagen und darf geändert werden.

[![benutzerdefinierte-kategorien-5](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/5-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/5-bk.png)

## Ausprägung der Kategorie

Um eine Kategorie auszuprägen, können beliebig viele Attribute über den Button **Mehrere Felder hinzufügen** hinzugefügt werden. Hier stehen folgende [Feldtypen](attributfelder.md) zur Auswahl:

*   **Checkbox**
    Eine Checkbox die markiert werden kann
*   **Dateibrowser**
    Eine Datei referenzieren
*   **Datum und Uhrzeit**
    Ein Feld zum Eintragen eines Datums und/oder einer Uhrzeit; innerhalb der Kategorie steht hier ein Kalender zur Verfügung, mit dem die Auswahl ermöglicht wird.
*   **Dialog+**
    [Dialog-Plus-Felder](dialog-admin.md), die mit eigenen Werten befüllt werden können, sodass diese wiederverwendbar sind. Über den Identifier im Feld **Zusatz** kann das Dialog-Plus-Feld auch in anderen Kategorien genutzt werden, sodass dort die bereits eingetragenen Werte zur Verfügung stehen. Hierfür ist es notwendig, denselben Identifier in beiden Kategorien einzutragen.
*   **Dialog+ (Mehrfachauswahl)**
    Wie **Dialog+**, nur mit beliebig vielen Werten
*   **HTML-Editor**
    Ein Textfeld, das einfache Textformatierungen wie zum Beispiel kursive Schrift erlaubt
*   **Ja-Nein-Feld**
    Eine einfache Ja-oder-Nein-Auswahl
*   **Link**
    Ein Feld zur Angabe eines Hyperlinks, der innerhalb der Kategorie angeklickt werden kann und dort weiterleitet
*   **Nur Zahlen sind erlaubt**
    Ein Feld in dem nur Zahlen eingetragen werden können.
*   **Objekt-Beziehung**
    Bei der Verwendung einer [Objektbeziehung](objekt-beziehungen.md) wird eine vollwertige Beziehung erzeugt. Das Feld **Zusatz** erlaubt die Auswahl der Beziehungsart und den damit verbundenen Beziehungstext. Diese Beziehungen sind auch im CMDB Explorer aufzufinden. Wenn möglich, ist dieser Feldtyp dem oben genannten Objekt-Browser zu bevorzugen.
*   **Objekt-Beziehung (Mehrere Objekte)**
    Wie **Objekt-Beziehung**, nur mit beliebig vielen Objekten
*   **Objekt-Browser**
    Ein Feld zur Erzeugung einer Verknüpfung mit einem anderen Objekt. Hierbei handelt es sich nur um eine Referenzierung und nicht um eine vollwertige Beziehung. Eine solche Referenzierung wird daher nicht im CMDB Explorer erscheinen.
*   **Objekt-Browser (Mehrere Objekte)**
    Wie **Objekt-Browser**, nur mit beliebig vielen Objekten
*   **Report**
    Zeigt einen Report an, dazu muss die ID des Report in das Zusatz Feld eingetragen werden.
*   **Textfeld**
    Ein einzeiliges Textfeld zur Eingabe von Freitext
*   **Textfeld (maskiert)**
    Ein einzeiliges Textfeld zur Eingabe von maskiertem Freitext. Der Inhalt ist nur in der Datenbank sichtbar.
*   **Textfeld (Mehrzeilig)**
    In diesem mehrzeiligen Textfeld können längere Texte hinterlegt werden.
*   **Datum und Uhrzeit**
    Ein Feld für Datum oder für Datum + Uhrzeit
*   **Zeit**
    Hier kann eine Uhrzeit zwischen 00:00 und 23:59 angegeben werden

Zusätzlich sind folgende Elemente verfügbar:

*   **Horizontale Linie**
    Eine Linie zur optischen Abgrenzung von Feldern und Inhalten
*   **HTML**
    Die Möglichkeit in der Konfiguration der Kategorie HTML-Code zu hinterlegen, der in der Kategorie interpretiert wird. Der Quellcode wird in der Konfiguration der Kategorie eingetragen und kann nicht beim Aufruf der Kategorie in der Dokumentation durch die Anwender eingetragen werden.
*   **Javascript**
    Die Möglichkeit in der Konfiguration der Kategorie Javascript-Code zu hinterlegen, der in der Kategorie interpretiert wird. Der Quellcode wird in der Konfiguration der Kategorie eingetragen und kann nicht beim Aufruf der Kategorie in der Dokumentation durch die Anwender eingetragen werden.

Wie bei fast jeder anderen Kategorie wird bei einer benutzerdefinierten automatisch ein **Beschreibungsfeld** am Ende angehangen.
Die Reihenfolge der erstellten Attribute kann über die schraffierten Flächen am Anfang jeder Zeile per Drag'n'Drop verändert werden.

[![benutzerdefinierte-kategorien-6](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/6-bk.gif)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/6-bk.gif)

Über den Button **Entfernen** können Attribute gelöscht werden.

[![benutzerdefinierte-kategorien-7](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/7-bk.gif)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/7-bk.gif)

!!! attention "Achtung!"

    Sobald die Kategorie in Verwendung ist, ist das Ändern von bestehenden Feldtypen nicht mehr möglich, um Datenverlust zu vermeiden.<br>
    Sollten Felder in der Konfiguration entfernt werden, kann man auf deren Inhalte nicht mehr zugreifen.<br>
    Anschließend müssen die Attribute über die [Systemtools](../administration/verwaltung/systemtools.md) neu indiziert werden.

Unterhalb der Konfiguration erfolgt eine Auswertung:

*   **Kategorieeinträge gesamt**: Wie oft wurde die Kategorie gespeichert? Pro Objekt werden die Einträge (bei Single-Value also einmal, bei Multi-Value pro Eintrag) zusammen gerechnet.
*   **Gepflegte Werte**: Jedes Attribut, das ausgefüllt und gespeichert wurde, wird Objekt-übergreifend zusammen gezählt.

[![benutzerdefinierte-kategorien-8](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/8-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/8-bk.png)

Sobald deine Kategorie konfiguriert und ausgeprägt wurde, kannst du die Schaltfläche **Speichern** verwenden, damit die Kategorie in den ausgewählten Objekttypen zur Verfügung steht.

## Technische Konfiguration

Um die benutzerdefinierte Kategorie über die [API](../i-doit-pro-add-ons/api/index.md) nutzen zu können, hilft die technische Konfiguration. Diese ist über den Button **Technische Konfiguration anzeigen** erreichbar.

Es ist möglich, die technischen Schlüssel für jedes Feld zu ändern, indem Sie auf **Technischen Schlüssel ändern** klicken.

[![Technischen Schlüssel ändern](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/9-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/9-bk.png)

Jetzt können Sie den Schlüssel ändern. Der Schlüssel wird automatisch überprüft, bevor Sie den neuen Wert speichern können.

!!! warning "Achtung!"

    Das ändern eines Schlüssels führt zu einer Migration der hinterlegten Daten zum neuen Schlüssel<br>
    Der Schlüssel muss aus den Zeichen **a-z**, **0-9** und **_** bestehen.<br>
    Der Schlüssel muss mindestens **einen Buchstaben beinhalten**.<br>
    Der Schlüssel **darf nicht leer** oder **länger als 64 Zeichen sein**.<br>
    Der Schlüssel **muss einzigartig sein**.<br>

[![Technischen Schlüssel ändern](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/10-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/10-bk.png)

Nachdem Sie die benutzerdefinierte Kategorie gespeichert haben, können Sie die neue technische Konfiguration anzeigen und verwenden.

[![Technische Konfiguration](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/11-bk.png)](../assets/images/de/grundlagen/benutzerdefinierte-kategorien/11-bk.png)
