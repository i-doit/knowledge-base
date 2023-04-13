# Variable Reports

Die variablen Reports sind nützlich, um die eigene i-doit-Installation noch weiter auf den persönlichen Zuschnitt hin anzupassen.

## Benutzerdefinierte Kategorie

Viele Anwender haben bereits heute [benutzerdefinierte Kategorien](../grundlagen/benutzerdefinierte-kategorien.md) in Verwendung. Eine Sache, die benutzerdefinierte Kategorien auszeichnet, ist unter anderem die Möglichkeit zur Verknüpfung von [Objekten](../grundlagen/struktur-it-dokumentation.md).

Nehmen wir an, in der Organisation sind Bereichsdrucker definiert. Die Räume **1.01** bis **1.07** verwenden **HQ Staff Printer 01**, die Räume **1.0****8** bis **1.11** den **HQ Staff Printer 02**.

Dokumentiert wird das mit der benutzerdefinierten Kategorie **Bereichsdrucker**. Diese wird dem [Objekttyp](../grundlagen/struktur-it-dokumentation.md) **Drucker** zugeordnet und als [Single-Value-Kategorie](../grundlagen/struktur-it-dokumentation.md), nicht als [Listen-Kategorie (Multi-Value)](../grundlagen/struktur-it-dokumentation.md) definiert. Das [Attribut](../grundlagen/struktur-it-dokumentation.md) **Bereichsdrucker für** wird als **Objekt-Beziehung (Mehrfachauswahl)** mit **Zusatz Freigabenzugriff** hinzugefügt.

[![benutzerdefinierte-kategorien](../assets/images/de/auswertungen/variable-reports/1-vr.png)](../assets/images/de/auswertungen/variable-reports/1-vr.png)

Danach wechselt man zum Objekt **HQ Staff Printer 01**. In der Kategorie **Bereichsdrucker** wählt man nun in die zugeordneten Räume aus.

[![objekt-browser](../assets/images/de/auswertungen/variable-reports/2-vr.png)](../assets/images/de/auswertungen/variable-reports/2-vr.png)

Das Ergebnis sieht in der Kategorie dann so aus wie im nachfolgenden Bild.

[![bereichsdrucker](../assets/images/de/auswertungen/variable-reports/3-vr.png)](../assets/images/de/auswertungen/variable-reports/3-vr.png)

Dies lässt sich auch mit dem [CMDB-Explorer](../auswertungen/cmdb-explorer/index.md) visualisieren.

[![cmdb-explorer](../assets/images/de/auswertungen/variable-reports/4-vr.png)](../assets/images/de/auswertungen/variable-reports/4-vr.png)

## Rückwärtige Ansicht für benutzerdefinierte Kategorie

So weit so gut. Doch wie findet man heraus, wenn man sich den Raum **1.05** ansieht, welcher Bereichsdrucker für diesen Raum definiert ist? Dafür ist eine rückwärtige Ansicht nötig, mit der man feststellen kann, welcher Drucker in Beziehung zu diesem Raum steht. Mit den variablen Reports gibt für solche kontextabhängigen Abfragen eine Lösung.

Dazu wird ein [Report](../auswertungen/report-manager.md) und eine weitere benutzerdefinierte Kategorie erstellt. Zunächst zum Report **Bereichsdrucker rückwärtig**. Dort wird die Checkbox **Variabler Report** angehakt und unter **Ausgabe** einige interessante Attribute zu den Druckern ausgewählt.

[![abfrage-editor](../assets/images/de/auswertungen/variable-reports/5-vr.png)](../assets/images/de/auswertungen/variable-reports/5-vr.png)

Im Abfrage-Editor gibt es die Möglichkeit, bei allen Verknüpfungen, die Beziehungen generieren, unter **Bedingungen** einen **Feldplatzhalter** zu setzen.

Für diesen Anwendungsfall heißt das: Der Report "sucht" nach jenen Objekten, in denen in der benutzerdefinierten Kategorie **Bereichsdrucker** im Attribut **Bereichsdrucker für** die [Objekt-ID](../grundlagen/eindeutige-referenzierungen.md) des aktuell ausgewählten Objektes eingetragen ist. Doch was ist das ausgewählte Objekt? Im Kontext des Report Managers gibt es kein ausgewähltes Objekt.

Daher muss stets ein Objekt auswählt werden, um den Report ausfüllen zu können. Das geschieht dadurch, indem man zum Report eine Kategorie erstellt, die den Report innerhalb eines Objektes ausführt. Diese wird **Bereichsdrucker rückwärtig** genannt, dem Objekttyp **Raum** zugeordnet und als Single-Value-Kategorie definiert. Zudem erhält sich ein namenloses Attribut mit dem **Feldtyp Report**. Unter **Zusatz** wird die ID des oben erstellten Reports angegeben.

[![report-1](../assets/images/de/auswertungen/variable-reports/6-vr.png)](../assets/images/de/auswertungen/variable-reports/6-vr.png)

Die Report-ID ist in der Übersicht der bereits definierten Reports enthalten.

[![report-2](../assets/images/de/auswertungen/variable-reports/7-vr.png)](../assets/images/de/auswertungen/variable-reports/8-vr.png)

In Raumobjekten steht jetzt die neue Kategorie zur Verfügung, die den Report immer für das Objekt ausführt, in dem sich der Anwender befindet. Dadurch erhält man eine rückwärtige Ansicht über die Beziehung zum Bereichsdrucker.

[![report-3](../assets/images/de/auswertungen/variable-reports/8-vr.png)](../assets/images/de/auswertungen/variable-reports/8-vr.png)
