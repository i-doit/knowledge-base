<!-- TRANSLATED by md-translate -->
# Excel-Tabelle mit Daten aus i-doit befüllen (veraltet)

# Remplir un tableau Excel avec les données d'i-doit (obsolète)

Mit wenigen Zeilen Visual Basic lassen sich beliebige Inhalte aus i-doit auslesen und in Microsoft Excel darstellen. In diesem Artikel erklären wir die Vorgehensweise anhand von [Reports](../auswertungen/report-manager.md).

Quelques lignes de Visual Basic suffisent pour extraire n'importe quel contenu d'i-doit et l'afficher dans Microsoft Excel. Dans cet article, nous expliquons la procédure à l'aide de [Reports](../auswertungen/report-manager.md).

!!! info "veraltet"

! !! info "obsolète

```
Bitte beachten Sie, dass der Artikel aus 2018 stammt und bisher nicht mit der aktuellen Version von i-doit getestet wurde.
```

# Installation

# Installation

1. Download [https://github.com/VBA-tools/VBA-JSON/releases](https://github.com/VBA-tools/VBA-JSON/releases) und entpacken
2. In Excel ein neues Dokument aufmachen
3. **Alt + F11** drücken um in den VBA Editor zu gelangen
4. Den VBA-JSON Code wie im Gif gezeigt importieren
    [![code importieren](../assets/images/de/anwendungsfaelle/excel/1-excel.gif)](../assets/images/de/anwendungsfaelle/excel/1-excel.gif)
5. Unter Extras/Verweise Die `Microsoft Scripting Runtime` aktivieren
    [![script aktivieren](../assets/images/de/anwendungsfaelle/excel/2-excel.gif)](../assets/images/de/anwendungsfaelle/excel/2-excel.gif)
6. In i-doit in den Einstellungen unter `Interfaces/external data -> JSON-RPC-API` Die Einstellungen `Consider authorization system` in JSON-RPC API context sowie `API access requires authentication` (method idoit.login) ausschalten:
    [![einstellungen](../assets/images/de/anwendungsfaelle/excel/3-excel.png)](../assets/images/de/anwendungsfaelle/excel/3-excel.png)
7. Code in die Arbeitsmappe einfügen und sowohl URL als auch apikey anpassen:

1. télécharger [https://github.com/VBA-tools/VBA-JSON/releases](https://github.com/VBA-tools/VBA-JSON/releases) et le décompresser
2. ouvrir un nouveau document dans Excel
3. appuyer sur **Alt + F11** pour accéder à l'éditeur VBA.
4. importer le code VBA-JSON comme indiqué dans le Gif
    [ ![importer le code](../assets/images/fr/applicationfaelle/excel/1-excel.gif)](../assets/images/fr/applicationfaelle/excel/1-excel.gif)
5. sous Outils/Références Activer le `Microsoft Scripting Runtime`.
    [ ![activer le script](../assets/images/fr/applicationfaelle/excel/2-excel.gif)](../assets/images/fr/applicationfaelle/excel/2-excel.gif)
6. dans i-doit, dans les paramètres sous `Interfaces/external data -> JSON-RPC-API`, désactiver les paramètres `Consider authorization system` dans JSON-RPC API context ainsi que `API access requires authentication` (method idoit.login) :
    [ ![paramètres](../assets/images/fr/applicationfaelle/excel/3-excel.png)](../assets/images/fr/applicationfaelle/excel/3-excel.png)
7. insérer le code dans le classeur et adapter aussi bien l'URL que l'apikey :

```
Public Sub idoitapi()
        Dim http As Object, JSON As Object, i As Integer, Item As Object
        Dim URL$, postData$
        Set http = CreateObject("MSXML2.XMLHTTP")
        URL = "https://demo.i-doit.com/src/jsonrpc.php"
        postData = "{""jsonrpc"":""2.0"",""method"":""cmdb.reports"",""params"":{""apikey"":""c1ia5q"",""id"": 2}}"
        http.Open "POST", URL, False
        http.setRequestHeader "Content-Type", "application/json"
        http.send postData
        Set JSON = ParseJson(http.responseText)
        i = 1
        'Debug.Print http.responseText
        For Each Item In JSON("result")
        Sheets(1).Cells(i, 1).Value = Item("Title")
        Sheets(1).Cells(i, 2).Value = Item("Object type")
        Sheets(1).Cells(i, 3).Value = Item("IP")
        Sheets(1).Cells(i, 4).Value = Item("Contact assignment")
        Sheets(1).Cells(i, 5).Value = Item("Location")
        i = i + 1
        Next
        End Sub
```

8. Code im VBA editor mit drücken von F5 ausführen. Das Ergebnis sollte wie folgt aussehen:
[![excel](../assets/images/de/anwendungsfaelle/excel/4-excel.png)](../assets/images/de/anwendungsfaelle/excel/4-excel.png)

8. exécuter le code dans l'éditeur VBA en appuyant sur F5. Le résultat devrait ressembler à ceci :
[ ![excel](../assets/images/fr/applicationfaelle/excel/4-excel.png)](../assets/images/fr/applicationfaelle/excel/4-excel.png)

# Code Erläuterung

# Code Explication

Im ersten Teil werden die notwendigen Variablen deklariert:

Dans la première partie, les variables nécessaires sont déclarées :

```
Public Sub idoitapi()
    Dim http As Object, JSON As Object, i As Integer, Item As Object
    Dim URL$, postData$
```

Anschließend wird ein Objekt vom Typ MSXML2.XMLHTTP initiiert, um die HTTP Verbindung aufbauen zu können

Ensuite, un objet de type MSXML2.XMLHTTP est initié pour pouvoir établir la connexion HTTP

```
Set http = CreateObject("MSXML2.XMLHTTP")
```

Hier wird die Ziel URL der anzusprechenden API eingetragen

L'URL cible de l'API à contacter est saisie ici

```
URL = "[https://demo.i-doit.com/src/jsonrpc.php](https://demo.i-doit.com/src/jsonrpc.php)"
```

Und nun wird der API Call vorbereitet. Es wird die Methode cmdb.reports aufgerufen und der Report mit der Nummer 2 abgefragt.<br>
Es wird keine Benutzer/Passwort-Authentifizierung verwendet, sondern nur der API-Key. Damit das funktioniert, müssen die unter 6.) gezeigten Einstellungen vorgenommen werden.<br>
Bei der Formatierung des JSON Strings müssen alle Anführungszeichen innerhalb des JSON Strings doppelt gesetzt werden.

Et maintenant, l'appel API est préparé. La méthode cmdb.reports est appelée et le rapport portant le numéro 2 est demandé.<br>
Aucune authentification utilisateur/mot de passe n'est utilisée, seule la clé API est utilisée. Pour que cela fonctionne, il faut procéder aux réglages indiqués au point 6).<br>
Lors du formatage de la chaîne JSON, tous les guillemets à l'intérieur de la chaîne JSON doivent être doublés.

```
postData = "{""jsonrpc"":""2.0"",""method"":""cmdb.reports"",""params"":{""apikey"":""c1ia5q"",""id"": 2}}"
```

Diese Anweisungen führen den HTTP POST Request aus und senden den angegebenen JSON String an die API

Ces instructions exécutent la requête HTTP POST et envoient la chaîne JSON spécifiée à l'API

```
http.Open "POST", URL, False
    http.setRequestHeader "Content-Type", "application/json"
    http.send postData
```

Der von der API zurückgesendete JSON String wird in ein Objekt geleitet und "auseinandergenommen". Das übernimmt die von github heruntergeladene JSON VBA Bibliothek.

La chaîne JSON renvoyée par l'API est dirigée vers un objet et "décomposée". C'est la bibliothèque JSON VBA téléchargée sur github qui s'en charge.

```
Set JSON = ParseJson(http.responseText)
```

Diesen Zähler benötigen wir, um die verschiedenen Spalten im Sheet anzusprechen

Nous avons besoin de ce compteur pour accéder aux différentes colonnes de la feuille.

```
i = 1
```

Der zurückgegebene JSON String hat zwei Ebenen (Inhalt zur besseren Ansicht gekürzt):

La chaîne JSON renvoyée comporte deux niveaux (contenu abrégé pour une meilleure visualisation) :

```
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

Cette sortie peut d'ailleurs être modifiée en commentant la ligne

```
Debug.Print http.responseText
```

in dem Direktbereich des VBA Editors erzeugen.<br>
In der ersten Ebene, die wir garnicht zu Gesicht bekommen, stehen die Werte "jsonrpc", "result" und "id". Da wir uns nur für die Ergebnisse interessieren, werden die Werte aus der zweiten Ebene, die sich unterhalb von "result" befinden in eine Schleife genommen.

dans la zone directe de l'éditeur VBA.
Dans le premier niveau, que nous ne voyons pas du tout, se trouvent les valeurs "jsonrpc", "result" et "id". Comme seuls les résultats nous intéressent, les valeurs du deuxième niveau, qui se trouvent sous "result", sont prises dans une boucle.

```
For Each Item In JSON("result")
```

In den Daten finden wir die Titel der Spalten aus dem angesteuerten Report mit der ID 2 wieder.

Dans les données, nous retrouvons les titres des colonnes du rapport piloté avec l'ID 2.

[![reports](../assets/images/de/anwendungsfaelle/excel/5-excel.png)](../assets/images/de/anwendungsfaelle/excel/5-excel.png)

[ ![reports](../assets/images/fr/applicationfaelle/excel/5-excel.png)](../assets/images/fr/applicationfaelle/excel/5-excel.png)

Nun werden je Datensatz im Result-Set die Titel adressiert und in eine Excel-Zeile geschrieben.

Les titres de chaque enregistrement sont maintenant adressés dans le set de résultats et écrits dans une ligne Excel.

```
Sheets(1).Cells(i, 1).Value = Item("Title")
    Sheets(1).Cells(i, 2).Value = Item("Object type")
    Sheets(1).Cells(i, 3).Value = Item("IP")
    Sheets(1).Cells(i, 4).Value = Item("Contact assignment")
    Sheets(1).Cells(i, 5).Value = Item("Location")
    i = i + 1
    Next
    End Sub
```