**Inhaltsverzeichnis**

*   1[Benutzerdefinierte Kategorie](#VariableReports-BenutzerdefinierteKategorie)
*   2[Rückwärtige Ansicht für benutzerdefinierte Kategorie](#VariableReports-RückwärtigeAnsichtfürbenutzerdefinierteKategorie)

  

  

Die variablen Reports sind nützlich, um die eigene i-doit-Installation noch weiter auf den persönlichen Zuschnitt hin anzupassen.

Benutzerdefinierte Kategorie
----------------------------

Viele Anwender haben bereits heute [benutzerdefinierte Kategorien](/display/de/Benutzerdefinierte+Kategorien) in Verwendung. Eine Sache, die benutzerdefinierte Kategorien auszeichnet, ist unter anderem die Möglichkeit zur Verknüpfung von [Objekten](/display/de/Struktur+der+IT-Dokumentation).

Nehmen wir an, in der Organisation sind Bereichsdrucker definiert. Die Räume `**1.01**` bis `**1.07**` verwenden `**Drucker A**`, die Räume `**1.0**``**8**` bis `**1.11**` den `**Drucker B**`.

Dokumentiert wird das mit der benutzerdefinierten Kategorie `**Bereichsdrucker**`. Diese wird dem [Objekttyp](/display/de/Struktur+der+IT-Dokumentation) `**Drucker**` zugeordnet und als [Single-Value-Kategorie](/display/de/Struktur+der+IT-Dokumentation), nicht als [Listen-Kategorie (Multi-Value)](/display/de/Struktur+der+IT-Dokumentation) definiert. Das [Attribut](/display/de/Struktur+der+IT-Dokumentation) `**Bereichsdrucker für**` wird als `**Objekt-Beziehung (Mehrfachauswahl)**` mit `**Zusatz Freigabenzugriff**` hinzugefügt.  

![Benutzerdefinierte Kategorie](/download/attachments/66356006/image3.png?version=1&modificationDate=1513679144760&api=v2&effects=drop-shadow "Benutzerdefinierte Kategorie")

Danach wechselt man zum Objekt `**Drucker A**`. In der Kategorie `**Bereichsdrucker**` wählt man nun in die zugeordneten Räume aus.

![Objekt-Browser](/download/attachments/66356006/image4.png?version=1&modificationDate=1513679144746&api=v2&effects=drop-shadow "Objekt-Browser")

Das Ergebnis sieht in der Kategorie dann so aus wie im nachfolgenden Bild.  

![Objekt](/download/attachments/66356006/image8.png?version=1&modificationDate=1513679144630&api=v2&effects=drop-shadow "Objekt")

Dies lässt sich auch mit dem [CMDB-Explorer](/display/de/CMDB-Explorer) visualisieren.  

![CMDB-Explorer](/download/attachments/66356006/image5.png?version=1&modificationDate=1513679144731&api=v2&effects=drop-shadow "CMDB-Explorer")

Rückwärtige Ansicht für benutzerdefinierte Kategorie  

-------------------------------------------------------

So weit so gut. Doch wie findet man heraus, wenn man sich den Raum `**1.05**` ansieht, welcher Bereichsdrucker für diesen Raum definiert ist? Dafür ist eine rückwärtige Ansicht nötig, mit der man feststellen kann, welcher Drucker in Beziehung zu diesem Raum steht. Mit den variablen Reports gibt für solche kontextabhängigen Abfragen eine Lösung.

Dazu wird ein [Report](/display/de/Report+Manager) und eine weitere benutzerdefinierte Kategorie erstellt. Zunächst zum Report `**Bereichsdrucker rückwärtig**`. Dort wird die Checkbox `**Variabler Report**` angehakt und unter `**Ausgabe**` einige interessante Attribute zu den Druckern ausgewählt.  

![Abfrage-Editor](/download/attachments/66356006/image7.png?version=1&modificationDate=1513679144702&api=v2&effects=drop-shadow "Abfrage-Editor")

Im Abfrage-Editor gibt es die Möglichkeit, bei allen Verknüpfungen, die Beziehungen generieren, unter `**Bedingungen**` einen `**Feldplatzhalter**` zu setzen.

Für diesen Anwendungsfall heißt das: Der Report “sucht” nach jenen Objekten, in denen in der benutzerdefinierten Kategorie `**Bereichsdrucker**` im Attribut **`Bereichsdrucker für`** die [Objekt-ID](/display/de/Eindeutige+Referenzierungen) des aktuell ausgewählten Objektes eingetragen ist. Doch was ist das ausgewählte Objekt? Im Kontext des Report Managers gibt es kein ausgewähltes Objekt.

Daher muss stets ein Objekt auswählt werden, um den Report ausfüllen zu können. Das geschieht dadurch, indem man zum Report eine Kategorie erstellt, die den Report innerhalb eines Objektes ausführt. Diese wird `**Bereichsdrucker rückwärtig**` genannt, dem Objekttyp `**Raum**` zugeordnet und als Single-Value-Kategorie definiert. Zudem erhält sich ein namenloses Attribut mit dem `**Feldtyp Report**`. Unter `**Zusatz**` wird die ID des oben erstellten Reports angegeben.  

![](/download/attachments/66356006/image2.png?version=1&modificationDate=1513679144772&api=v2)

Die Report-ID ist in der Übersicht der bereits definierten Reports enthalten.

![](/download/attachments/66356006/image1.png?version=1&modificationDate=1513679144785&api=v2)

In Raumobjekten steht jetzt die neue Kategorie zur Verfügung, die den Report immer für das Objekt ausführt, in dem sich der Anwender befindet. Dadurch erhält man eine rückwärtige Ansicht über die Beziehung zum Bereichsdrucker.

![](/download/attachments/66356006/image6.png?version=1&modificationDate=1513679144718&api=v2)