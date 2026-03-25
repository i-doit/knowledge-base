# Excel-Tabelle mit Daten aus i-doit befüllen

Mit wenigen Zeilen Visual Basic lassen sich beliebige Inhalte aus i-doit auslesen und in Microsoft Excel darstellen. In diesem Artikel erklären wir die Vorgehensweise anhand von [Reports](../auswertungen/report-manager.md).

!!! info "Zuletzt getestet mit i-doit 36 und API 2.5"

    Dieser Artikel wurde überarbeitet und anschließend mit den Versionen i-doit 36 und API 2.5 getestet.

## Installation

1. Download [https://github.com/VBA-tools/VBA-JSON/releases](https://github.com/VBA-tools/VBA-JSON/releases) und entpacken

2. In Excel ein neues Dokument aufmachen

3. **Alt + F11** drücken um in den VBA Editor zu gelangen

4. Den VBA-JSON Code wie im Gif gezeigt importieren

    [![code importieren](../assets/images/de/anwendungsfaelle/excel/1-excel.gif)](../assets/images/de/anwendungsfaelle/excel/1-excel.gif)

5. Unter Extras/Verweise Die `Microsoft Scripting Runtime` aktivieren

    [![script aktivieren](../assets/images/de/anwendungsfaelle/excel/2-excel.gif)](../assets/images/de/anwendungsfaelle/excel/2-excel.gif)

6. In i-doit in den Einstellungen unter **Experteneinstellungen** muss der Key **api.authenticated-users-only** auf 0 gesetzt werden

    [![einstellungen](../assets/images/de/anwendungsfaelle/excel/3-excel.png)](../assets/images/de/anwendungsfaelle/excel/3-excel.png)

7. Code in die Arbeitsmappe einfügen und sowohl URL als auch apikey anpassen:

    ```vbscript
    Public Sub idoitapi()
    Dim http As Object, JSON As Object, i As Integer, Item As Object
    Dim URL$, postData$
    Set http = CreateObject("MSXML2.XMLHTTP")
    URL = "https://demo.i-doit.com/src/jsonrpc.php"
    postData = "{""jsonrpc"":""2.0"",""id"":""1"",""method"":""cmdb.reports"",""params"":{""apikey"":""c1ia5q"",""id"": 2}}"
    http.Open "POST", URL, False
    http.setRequestHeader "Content-Type", "application/json"
    http.send postData
    Set JSON = ParseJson(http.responseText)
    i = 1
    'Debug.Print http.responseText
    For Each Item In JSON("result")
    Sheets(1).Cells(i, 1).Value = Item("Title")
    Sheets(1).Cells(i, 2).Value = Item("Object type")
    Sheets(1).Cells(i, 3).Value = Item("Host address")
    Sheets(1).Cells(i, 4).Value = Item("Contact")
    Sheets(1).Cells(i, 5).Value = Item("Location")
    i = i + 1
    Next
    End Sub
    ```

8. Code im VBA editor mit drücken von F5 ausführen. Das Ergebnis sollte wie folgt aussehen:
    [![excel](../assets/images/de/anwendungsfaelle/excel/4-excel.png)](../assets/images/de/anwendungsfaelle/excel/4-excel.png)

### Code Erläuterung

Im ersten Teil werden die notwendigen Variablen deklariert:

```vbscript
Public Sub idoitapi()
Dim http As Object, JSON As Object, i As Integer, Item As Object
Dim URL$, postData$
```

Anschließend wird ein Objekt vom Typ MSXML2.XMLHTTP initiiert, um die HTTP Verbindung aufbauen zu können

```vbscript
Set http = CreateObject("MSXML2.XMLHTTP")
```

Hier wird die Ziel URL der anzusprechenden API eingetragen

```bash
URL = "[https://demo.i-doit.com/src/jsonrpc.php](https://demo.i-doit.com/src/jsonrpc.php)"
```

Und nun wird der API Call vorbereitet. Es wird die Methode cmdb.reports aufgerufen und der Report mit der Nummer 2 abgefragt.<br>
Es wird keine Benutzer/Passwort-Authentifizierung verwendet, sondern nur der API-Key. Damit das funktioniert, müssen die unter Schritt 6 gezeigten Einstellungen vorgenommen werden.<br>
Bei der Formatierung des JSON Strings müssen alle Anführungszeichen innerhalb des JSON Strings doppelt gesetzt werden.

```bash
postData = "{""jsonrpc"":""2.0"",""id"":""1"",""method"":""cmdb.reports"",""params"":{""apikey"":""c1ia5q"",""id"": 2}}"
```

Diese Anweisungen führen den HTTP POST Request aus und senden den angegebenen JSON String an die API

```bash
http.Open "POST", URL, False
http.setRequestHeader "Content-Type", "application/json"
http.send postData
```

Der von der API zurückgesendete JSON String wird in ein Objekt geleitet und "auseinandergenommen". Das übernimmt die von github heruntergeladene JSON VBA Bibliothek.

```bash
Set JSON = ParseJson(http.responseText)
```

Diesen Zähler benötigen wir, um die verschiedenen Spalten im Sheet anzusprechen

```bash
i = 1
```

Der zurückgegebene JSON String hat zwei Ebenen (Inhalt zur besseren Ansicht gekürzt):

```json
{
    "jsonrpc":"2.0",
    "result":
        [
            {
                "Title":"Ceph Storage Pod A001 01",
                "Object type":"LC__CMDB__OBJTYPE__SERVER",
                "IP":"10.20.10.36",
                "Contact assignment":"IT Operations",
                "Location":"Colo A001"
            },
            {
                "Title":"Ceph Storage Pod A001 02",
                "Object type":"LC__CMDB__OBJTYPE__SERVER",
                "IP":"10.20.10.37",
                "Contact assignment":"IT Operations",
                "Location":"Colo A001"
            }
        ],
    "id":null
}
```

Dieser Output lässt sich übrigens mit dem auskommentieren der Zeile

```bash
Debug.Print http.responseText
```

in dem Direktbereich des VBA Editors erzeugen.<br>
In der ersten Ebene, die wir garnicht zu Gesicht bekommen, stehen die Werte "jsonrpc", "result" und "id". Da wir uns nur für die Ergebnisse interessieren, werden die Werte aus der zweiten Ebene, die sich unterhalb von "result" befinden in eine Schleife genommen.

```bash
For Each Item In JSON("result")
```

In den Daten finden wir die Titel der Spalten aus dem angesteuerten Report mit der ID 2 wieder.

[![reports](../assets/images/de/anwendungsfaelle/excel/5-excel.png)](../assets/images/de/anwendungsfaelle/excel/5-excel.png)

Nun werden je Datensatz im Result-Set die Titel adressiert und in eine Excel-Zeile geschrieben.

```bash
Sheets(1).Cells(i, 1).Value = Item("Title")
Sheets(1).Cells(i, 2).Value = Item("Object type")
Sheets(1).Cells(i, 3).Value = Item("Host address")
Sheets(1).Cells(i, 4).Value = Item("Contact")
Sheets(1).Cells(i, 5).Value = Item("Location")
i = i + 1
Next
End Sub
```
