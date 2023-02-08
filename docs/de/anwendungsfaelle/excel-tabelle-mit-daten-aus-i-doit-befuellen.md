Mit wenigen Zeilen Visual Basic lassen sich beliebige Inhalte aus i-doit auslesen und in Microsoft Excel darstellen. In diesem Artikel erklären wir die Vorgehensweise anhand von [Reports](/display/de/Report+Manager).  

  

veraltet

Bitte beachten Sie, dass der Artikel aus 2018 stammt und bisher nicht mit der aktuellen Version von i-doit getestet wurde.

  

Installation
============

1.  Download [https://github.com/VBA-tools/VBA-JSON/releases](https://github.com/VBA-tools/VBA-JSON/releases) und entpacken
    
2.  In Excel ein neues Dokument aufmachen
    
3.  **`Alt + F11`** drücken um in den VBA Editor zu gelangen
    
4.  Den VBA-JSON Code wie im Gif gezeigt importieren
    
    ![](https://lh3.googleusercontent.com/6aSK3EOmNJdA8uqktgRfmuVCz_fsjvHoLbnKjUVagmzYxOL7gGjHWxc8aM6_8xQyjRtH9lN1AJ-msAURBA_cU0hNGrtpZJPm7bq1XzVOezyXGjWRiwVkj-gubVwdAPb_1RYcnako)
    
5.  Unter Extras/Verweise Die “Microsoft Scripting Runtime” aktivieren  
    
    ![](https://lh5.googleusercontent.com/r9thuaPk2oMIj-XkSWN-4JFqqhEEX9t0Z1NlpbqtHFR1VWFadGQIbWdYc2LunjJG-uonQo9qbyxrCNoRDOTgpJ2qRXDeE44diShxYLgZCGQjuZ2xeIURX_zCMtXVX10pTMDrXssT)
    
      
    
6.  In i-doit in den Einstellungen unter “Interfaces/external data” “JSON-RPC-API” Die Einstellungen “Consider authorization system in JSON-RPC API context” sowie “API access requires authentication (method idoit.login)” ausschalten:
    
    ![](https://lh6.googleusercontent.com/mZIlaN_mWdIvEGMoBrpetHd5IvCTdoYtaT_5NeXVD35vq-59xUh7o0QACygGNdindGvoLq59jaouNRrPmZ3a3GcO4Y5EeQy0HfQ6SO2VvDXT-SqJ66gouDwoLKfI4FBLYbBIFYJa)  
    
7.  Code in die Arbeitsmappe einfügen und sowohl URL als auch apikey anpassen:  
    
    [?](#)
    
    `Public` `Sub` `idoitapi()`
    
    `Dim` `http` `As` `Object``, JSON` `As` `Object``, i` `As` `Integer``, Item` `As` `Object`
    
    `Dim` `URL$, postData$`
    
    `Set` `http = CreateObject(``"MSXML2.XMLHTTP"``)`
    
    `URL =` `"[https://demo.i-doit.com/src/jsonrpc.php](https://demo.i-doit.com/src/jsonrpc.php)"`
    
    `postData =` `"{"``"jsonrpc"``":"``"2.0"``","``"method"``":"``"cmdb.reports"``","``"params"``":{"``"apikey"``":"``"c1ia5q"``","``"id"``": 2}}"`
    
    `http.Open` `"POST"``, URL,` `False`
    
    `http.setRequestHeader` `"Content-Type"``,` `"application/json"`
    
    `http.send postData`
    
    `Set` `JSON = ParseJson(http.responseText)`
    
    `i = 1`
    
    `'Debug.Print http.responseText`
    
    `For` `Each` `Item` `In` `JSON(``"result"``)`
    
    `Sheets(1).Cells(i, 1).Value = Item(``"Title"``)`
    
    `Sheets(1).Cells(i, 2).Value = Item(``"Object type"``)`
    
    `Sheets(1).Cells(i, 3).Value = Item(``"IP"``)`
    
    `Sheets(1).Cells(i, 4).Value = Item(``"Contact assignment"``)`
    
    `Sheets(1).Cells(i, 5).Value = Item(``"Location"``)`
    
    `i = i + 1`
    
    `Next`
    
    `End` `Sub`
    
8.  Code im VBA editor mit drücken von F5 ausführen. Das Ergebnis sollte wie folgt aussehen:  
    ![](https://lh6.googleusercontent.com/siRm_z_00noTfVpytXQ5rEsSNIw7KTsd96WP9iX-qotCe7Ldn2Rz06mBLVSqgTLtcYX-xqblFeRYq1WXymQKfs0TFsqCD0tH2m-N4HZjtRfO7_qsJyFh_uE3RbnqT2mJpvxRUOjl)  
    

Code Erläuterung
================

Im ersten Teil werden die notwendigen Variablen deklariert:

  

[?](#)

`Public` `Sub` `idoitapi()`

`Dim` `http` `As` `Object``, JSON` `As` `Object``, i` `As` `Integer``, Item` `As` `Object`

`Dim` `URL$, postData$`

Anschließend wird ein Objekt vom Typ MSXML2.XMLHTTP initiiert, um die HTTP Verbindung aufbauen zu können

  

[?](#)

`Set` `http = CreateObject(``"MSXML2.XMLHTTP"``)`

Hier wird die Ziel URL der anzusprechenden API eingetragen

  

[?](#)

`URL =` `"[https://demo.i-doit.com/src/jsonrpc.php](https://demo.i-doit.com/src/jsonrpc.php)"`

Und nun wird der API Call vorbereitet. Es wird die Methode cmdb.reports aufgerufen und der Report mit der Nummer 2 abgefragt.

Es wird keine Benutzer/Passwort-Authentifizierung verwendet, sondern nur der API-Key. Damit das funktioniert, müssen die unter 6.) gezeigten Einstellungen vorgenommen werden.

Bei der Formatierung des JSON Strings müssen alle Anführungszeichen innerhalb des JSON Strings doppelt gesetzt werden.

  

[?](#)

`postData =` `"{"``"jsonrpc"``":"``"2.0"``","``"method"``":"``"cmdb.reports"``","``"params"``":{"``"apikey"``":"``"c1ia5q"``","``"id"``": 2}}"`

Diese Anweisungen führen den HTTP POST Request aus und senden den angegebenen JSON String an die API

  

[?](#)

`http.Open` `"POST"``, URL,` `False`

`http.setRequestHeader` `"Content-Type"``,` `"application/json"`

`http.send postData`

Der von der API zurückgesendete JSON String wird in ein Objekt geleitet und “auseinandergenommen”. Das übernimmt die von github heruntergeladene JSON VBA Bibliothek.

  

[?](#)

`Set` `JSON = ParseJson(http.responseText)`

Diesen Zähler benötigen wir, um die verschiedenen Spalten im Sheet anzusprechen

  

[?](#)

`i = 1`

Der zurückgegebene JSON String hat zwei Ebenen (Inhalt zur besseren Ansicht gekürzt):

  

[?](#)

`{`

`"jsonrpc"``:``"2.0"``,`

`"result"``:`

`[`

`{`

`"Title"``:``"Ceph Storage Pod A001 01"``,`

`"Object type"``:``"LC__CMDB__OBJTYPE__SERVER"``,`

`"IP"``:``"10.20.10.36"``,`

`"Contact assignment"``:``"IT Operations"``,`

`"Location"``:``"Colo A001"`

`},`

`{`

`"Title"``:``"Ceph Storage Pod A001 02"``,`

`"Object type"``:``"LC__CMDB__OBJTYPE__SERVER"``,`

`"IP"``:``"10.20.10.37"``,`

`"Contact assignment"``:``"IT Operations"``,`

`"Location"``:``"Colo A001"`

`}`

`],`

`"id"``:null`

`}`

Dieser Output lässt sich übrigens mit dem auskommentieren der Zeile

  

[?](#)

`‘Debug.Print http.responseText`

in dem Direktbereich des VBA Editors erzeugen.

In der ersten Ebene, die wir garnicht zu Gesicht bekommen, stehen die Werte “jsonrpc”, “result” und “id”. Da wir uns nur für die Ergebnisse interessieren, werden die Werte aus der zweiten Ebene, die sich unterhalb von “result” befinden in eine Schleife genommen.

  

[?](#)

`For` `Each` `Item` `In` `JSON(``"result"``)`

In den Daten finden wir die Titel der Spalten aus dem angesteuerten Report mit der ID 2 wieder.

![](https://lh4.googleusercontent.com/FZJDxtuOZ0AIpuf0egf3KJJM6-nH_vRxpMWFQ_xL1BCxoIcbwcHnmRfeSEFcB1365vXPX_92o5k4Ziys8wGSHtiShPINkWQjUJrbt8acSLbzfrwZmjdbVUMMBYNSlnzl8Dr792Yk)

Nun werden je Datensatz im Result-Set die Titel adressiert und in eine Excel-Zeile geschrieben.

  

[?](#)

`Sheets(1).Cells(i, 1).Value = Item(``"Title"``)`

`Sheets(1).Cells(i, 2).Value = Item(``"Object type"``)`

`Sheets(1).Cells(i, 3).Value = Item(``"IP"``)`

`Sheets(1).Cells(i, 4).Value = Item(``"Contact assignment"``)`

`Sheets(1).Cells(i, 5).Value = Item(``"Location"``)`

`i = i + 1`

`Next`

`End` `Sub`