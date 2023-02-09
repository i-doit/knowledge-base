## CSV-Datenimport

!!! example ""
    Ein Praxisbeispiel für den automatisierten Datenimport finden Sie auf unserem [Blog](https://www.i-doit.com/blog/automatisierter-csv-import-mit-i-doit/)

Viele Organisationen verwenden für ihre IT-Dokumentation eine Tabellenkalkulation, sodass die Informationen in tabellarischer Form vorliegen. Dieser Umstand ist nicht nur unübersichtlich, sondern bringt auch einen großen Aufwand für die Pflege mit sich. Mit dem CSV-Datenimport ist es möglich, diese Daten ganz bequem aus Microsoft Excel, OpenOffice oder LibreOffice Calc nach i-doit zu überführen.

## Voraussetzungen

Damit eine Datei für den CSV-Datenimport verwenden kann, muss diese im .csv-Format mit **UTF-8**-Kodierung gespeichert werden. Einige Tabellenkalkulationen sind nicht in der Lage, die Kodierung beim Speichern festzulegen. In diesem Fall kann nach dem Export ins .csv\-Format auf einen Texteditor mit Konvertierungsfunktion zurückgegriffen werden. Im Screenshot zu sehen ist die Funktion **Konvertiere zu UTF-8** in [Notepad++](https://notepad-plus-plus.org/):

[![Kodierung im Notepad++](../../assets/images/de/daten-konsolidieren/csv-import/1-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/1-csvi.png)

Der Aufbau einer verwendbaren .csv\-Datei sieht in etwa so aus wie in folgendem Beispiel:

[![Aufbau einer CSV](../../assets/images/de/daten-konsolidieren/csv-import/2-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/2-csvi.png)

Die erste Zeile wird als Überschrift verwendet und dient der Identifikation, um welches [Attribut](../../grundlagen/struktur-it-dokumentation.md) es sich handelt. Jede weitere Zeile entspricht hier einem einzelnen [Objekt](../../glossar.md) in der IT-Dokumentation.

Sie können auch Ihren bevorzugten Texteditor zum erstellen von csv-Dateien verwenden.

[![CSV im Texteditor](../../assets/images/de/daten-konsolidieren/csv-import/3-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/3-csvi.png)

Wenn die .csv\-Datei soweit vorbereitet ist, kann der Datenimport beginnen.

## Datei hochladen

Der CSV-Datenimport befindet sich unter **Extras → CMDB → Import** → **CSV Import**. Eine Konfiguration vorab ist nicht notwendig.

Im ersten Schritt wird eine .csv\-Datei über den Button **Durchsuchen…** ausgewählt und hochgeladen. Anschließend wird die Datei in der Liste angezeigt und sobald man mit der Maus über die Zeile der Datei fährt, kann man zwischen den Aktionen **Für Import verwenden**, **Datei herunterladen** und **Datei löschen** wählen.

[![CSV für den Import verwenden](../../assets/images/de/daten-konsolidieren/csv-import/4-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/4-csvi.png)

Um zum nächsten Schritt des Datenimports zu gelangen, klickt man auf den Button **Für Import verwenden**.

## Optionen festlegen

Bevor das Mapping zwischen Tabellenspalten und Attributen in i-doit stattfinden kann, sind einige Optionen festzulegen.

[![CSV Import Optionen](../../assets/images/de/daten-konsolidieren/csv-import/5-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/5-csvi.png)

### Objekttyp

Wenn man im Drown-Down-Menü unter **Globaler Objekttyp** einen [Objekttypen](/display/de/Struktur+der+IT-Dokumentation) auswählt, werden alle Objekte der .csv\-Datei als dieser Objekttyp importiert. Wird kein globaler Objekttyp definiert, wird ein zusätzliches Feld in der .csv\-Datei zur Angabe der [Datenbank-Konstante](/display/de/Struktur+der+IT-Dokumentation) benötigt. Pro Zeile wird dadurch der jeweilige Objekttyp festgelegt, dem das Objekt zugehörig sein soll. Auf diesem Weg ist es möglich, Objekte aus verschiedenen Objekttypen (Client, Drucker, Monitore, ...) über eine Datei zu importieren. Diese Angabe muss für alle Objekte gepflegt werden, wenn kein globaler Objekttyp verwendet wird. Eine Mischform ist nicht möglich.

### Trennzeichen, Überschriften und Default-Template berücksichtigen

Solltest du ein anderes **Trennzeichen** anstelle des Semikolons (;) verwenden, ist es möglich, das genutzte Trennzeichen anzugeben.

Falls du keine Überschriften-Zeile nutzt, kannst du die Überschriften-Zeile deaktivieren, sodass die erste Zeile der .csv\-Datei als das erste Objekt interpretiert wird.

Die Objekte werden mit den Daten aus dem [default Template](../../) angelegt.

### Leerwerte

Sollen durch den CSV-Datenimport bestehende Objekte aktualisiert werden, kann mit der Option **Leerwerte übernehmen** gewählt werden, wie leere Zellen in der .csv\-Datei behandelt werden sollen:

*   **Ja**: Leere Zellen führen dazu, dass bestehende Attribute (falls vorhanden) überschrieben werden.
*   **Nein**: Leere Zellen werden ignoriert, damit bestehende Attribute (falls vorhanden) erhalten bleiben.

### Umgang mit Einträgen in Listen-Kategorien (Multi-Value)

Weiterhin ist anzugeben, in welcher Form [Listen-Kategorien](/display/de/Struktur+der+IT-Dokumentation) (Multi-Value) in der .csv\-Datei vorzufinden sind. Falls keine Kategorien dieser Art vom Datenimport berührt werden, können die folgenden Optionen ignoriert werden.

Bei dem Beispiel (siehe oben) fällt auf, dass "Client 02" mehrfach auftaucht. Da dieser Client über zwei CPUs verfügt, sollen in der Listen-Kategorie **CPU** zwei Einträge (einer pro CPU) erzeugt werden. Durch die Verwendung einer weiteren **Zeile** erhält das Objekt daher die beiden Einträge in der Kategorie **CPU**. Es ist nicht notwendig, gleichbleibende [Attribute](/display/de/Glossar) in den weiteren Zeilen des Objekts erneut anzugeben. Somit musst du also nicht die Inventarnummer "ABCD-2000" erneut angeben.

Alternativ ist es dir auch möglich, die einzelnen Einträge aus Listen-Kategorien entweder in einer **Spalte** zu hinterlegen oder in einer Zelle, als **Komma-separierte** Liste.

Sind bereits Kategorie-Einträge vorhanden, stehen weitere Optionen zur Verfügung:

*   **Erzeuge neue Kategorieeinträge nur, wenn die Kategorie bisher keine Einträge enthält (neu anlegen, wenn leer)**
*   **Erzeuge neue Kategorieeinträge, bestehende bleiben erhalten (anhängen)**
*   **Erzeuge neue Kategorieeinträge, bestehende Einträge werden komplett entfernt (ersetzen)**

Über den Button **Mapping vorbereiten** gelangt man zum nächsten Schritt.

## Identifizierungsmerkmale festlegen

Sobald die Optionen festgelegt sind, kann das Mapping beginnen. Zunächst kann ein [**Objekt-Matching Profil**](/display/de/Objekte+identifizieren+bei+Importen) ausgewählt werden, falls bestehende Objekte aktualisiert werden sollen. Dieses Profil kann nachträglich bearbeitet werden.

[![Objekte identifizieren](../../assets/images/de/daten-konsolidieren/csv-import/6-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/6-csvi.png)

## Zuweisung von Spalten zu Attributen

Jede Spalte erhält im Mapping eine eigene Zeile. So kann jede Zeile der .csv\-Datei mit einem Attribut in i-doit verknüpft werden. Nach Klick auf das Stift-Icon kann im Drop-Down-Menü das passende Attribut ausgewählt werden oder dessen Bezeichnung direkt in das Feld eingegeben werden, um passende Attribute vorgeschlagen zu bekommen. Die Eingabe wird mit dem Button **Übernehmen** bestätigt. Auf diesem Weg wird jede Spalte zugewiesen, bis alle Zuweisungen vollständig sind. Zuweisungen können nachträglich gelöst werden. Spalten ohne Zuweisung werden beim Datenimport ignoriert.

[![Zuweisungen von Attributen](../../assets/images/de/daten-konsolidieren/csv-import/7-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/7-csvi.png)

Pflichtangaben

Bei der Angabe von Objekt-Titel _und_ Objekttyp handelt es sich um Pflichtangaben_._ Wenn in den Optionen des Datenimports ein globaler Objekttyp definiert ist, muss im Mapping lediglich der [Objekt-Titel](/display/de/Eindeutige+Referenzierungen) mit einer Spalte verknüpft werden. Sollte kein globaler Objekttyp festgelegt sind, muss ebenfalls der Objekttyp in einer Spalte repräsentiert sein. Andernfalls ist es nicht möglich, den Import durchzuführen. Die Angabe des Objekttyps erfolgt über dessen Datenbank-Konstante (zum Beispiel **C\_\_OBJTYPE\_\_SERVER**). Die Angabe der Bezeichnung des Objekttyps (z. B. **Server**) ist **nicht** ausreichend.

## Profil anlegen

Wenn weitere .csv\-Dateien mit identischem Aufbau in Bezug auf die Spaltenbelegung importiert werden sollen oder die aktuell verwendete Datei später aktualisiert und neu importiert werden soll, kann die Konfiguration des aktuellen Mappings Profil gespeichert werden. So vermeidet man wiederkehrende Arbeitsschritte. Ein gespeichertes Profil kann in den Optionen im oberen Bereich ausgewählt und geladen oder gelöscht werden.

Existiert bereits ein passendes Profil, kann es ohne Angabe eines Namens überschrieben werden.

## Datenimport starten

Den Detailgrad des Loggings des CSV-Datenimports kann unterhalb des Mappings festlegt werden. Je umfangreicher das Logging, desto höher die Dauer und der Ressourcenbedarf des Datenimports. Für mögliches [Troubleshooting](/display/de/Troubleshooting) ist das Loggen von Debug-Meldungen sehr hilfreich.

Über den Button **Importieren** unterhalb des Mappings wird der Datenimport gestartet. Die Dauer des Datenimports ist abhängig von Umfang der zu importierenden Informationen sowie dem ausgewählten Level des Loggings.

Nachdem der Import abgeschlossen wurde, werden die Informationen zum Import sowie eine Bestätigung über die Fertigstellung angezeigt. Die importierten oder aktualisierten Objekte sind direkt verlinkt. Die Inhalte dieser Objekte lassen sich bei Bedarf jederzeit manuell ändern.

// TODO Bild ersetzen
[![Liste der importierten Objekte](../../assets/images/de/daten-konsolidieren/csv-import/8-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/8-csvi.png)

## Import von Beziehungen (Verknüpfen von Objekten)

Der CSV-Datenimport ist in der Lage, Verknüpfungen von Objekten ([Beziehungen](/display/de/Objekt-Beziehungen)) zu erzeugen, wenn diese über eine Kategorie gepflegt werden. Das zu verknüpfende Objekt kann ebenfalls in einer Spalte der .csv\-Datei hinterlegt und das Feld zur Verknüpfung als zuzuweisendes Attribut angeben werden. Ein Beispiel zur Angabe des physikalischen Standorts in Spalte H:

[![Verknüpfen von Beziehungen](../../assets/images/de/daten-konsolidieren/csv-import/9-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/9-csvi.png)

Während des Mappings kann man, nachdem das Feld ausgewählt wurde, angeben, ob die Auswahl des zu verknüpfenden Objekts uneingeschränkt erfolgen soll oder eine Eingrenzung auf einen festgelegten Objekttyp stattfindet. Weiterhin können Objekte, die nicht gefunden wurden, automatisch erstellt werden. In diesem Fall ist die Angabe des Objekttyps der verknüpften Objekte notwendig, damit ein Objekt dieses Typs erstellt wird. Bei einigen Verknüpfungsarten kann in der Sonderzuweisung festlegt werden, über welches Attribut die Identifikation des zu verknüpfenden Objekts erfolgen soll. Im Standard wird hier der Objekt-Titel verwendet.

!!! note "Hinweis"
    Die Sonderzuweisung ist nicht bei allen Verknüpfungsfeldern verfügbar. In diesem Fall wird ausschließlich der Objekt-Titel zur Identifikation des zu aktualisierenden Objekts verwendet.

[![Sonderzuweisung](../../assets/images/de/daten-konsolidieren/csv-import/10-csvi.png)](../../assets/images/de/daten-konsolidieren/csv-import/10-csvi.png)

## Import von Werten mit Einheiten

Einige Attribute beinhalten aus Werten und Einheiten. In den jeweiligen Formularen der Web GUI sind diese jeweils voneinander getrennt anzugeben. Beispielsweise besteht in der Kategorie **Monitor** das Attribut **Display** aus dem Feld für den Wert und aus dem Feld für die Einheit (Zoll, cm, usw.). Um dieses Attribut sinngemäß über den CSV-Datenimport zu importieren, müssen Wert und Einheit zusammen in einer Zelle stehen. Beispiele:

| Kategorie | Attribut | Zuweisung beim CSV-Datenimport | Zelle in CSV-Datei |
| --- | --- | --- | --- |
| **CPU** | **CPU-Frequenz** | **CPU-Frequenz (Einheit)** | 2.5 GHz |
| **Lokaler Massenspeicher → Gerät** | **Kapazität** | **Kapazität (Einheit)** | 4 TB |
| **Monitor** | **Display** | **Display (Einheit)** | 24 Inch |

## CSV-Dateien über die i-doit Console importieren

Der Import von CSV-Dateien ist nicht nur manuell über die Benutzeroberfläche möglich, sondern kann auch mit der i-doit [Console](/display/de/Console) umgesetzt werden. Dies erlaubt die Automatisierung des Imports, mit dem regelmäßig Informationen aktualisiert werden können. Eine Beschreibung aller Parameter ist im [entsprechenden Artikel](/display/de/Optionen+und+Parameter+der+Console) inklusive eines Beispiels unter der Option **import-csv** zu finden. Weiterhin kann die ID eines zuvor erstellten Import-Profils im Aufruf angegeben werden. Diese IDs lassen sich mit der Option **import-csvprofiles** auslesen. Die Verwendung dieser Option ist ebenfalls im genannten Artikel beschrieben.