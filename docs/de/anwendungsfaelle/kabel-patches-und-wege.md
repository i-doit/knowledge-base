**Inhaltsverzeichnis**

*   1[Konzept](#KabelPatchesundwege-Konzept)
*   2[Kategorie-Ordner Verkabelung](#KabelPatchesundwege-Kategorie-OrdnerVerkabelung)
    *   2.1[Kategorie Anschlüsse](#KabelPatchesundwege-KategorieAnschlüsse)
    *   2.2[Kategorie Schnittstelle](#KabelPatchesundwege-KategorieSchnittstelle)
*   3[Objekttyp Kabel](#KabelPatchesundwege-ObjekttypKabel)
    *   3.1[Kategorie-Ordner Kabelverbindung](#KabelPatchesundwege-Kategorie-OrdnerKabelverbindung)
    *   3.2[Kategorie Kabel](#KabelPatchesundwege-KategorieKabel)
    *   3.3[Kategorie Faser/Ader](#KabelPatchesundwege-KategorieFaser/Ader)
    *   3.4[Attribut](#KabelPatchesundwege-Attribut)
    *   3.5[Beschreibung](#KabelPatchesundwege-Beschreibung)
*   4[Objekttyp Patchfeld](#KabelPatchesundwege-ObjekttypPatchfeld)
*   5[Objekttyp Kabeltrasse](#KabelPatchesundwege-ObjekttypKabeltrasse)
*   6[Objekttyp Leerrohr](#KabelPatchesundwege-ObjekttypLeerrohr)
*   7[Einzelverkabelungen](#KabelPatchesundwege-Einzelverkabelungen)
*   8[Verkabelungsbrowser](#KabelPatchesundwege-Verkabelungsbrowser)
*   9[Verkabelungsimport](#KabelPatchesundwege-Verkabelungsimport)

Zu einer umfangreichen [IT-Dokumentation](/display/de/Glossar) kommt man über kurz oder lang zur Abbildung der Verkabelung. Mit diesem Artikel geben wir einen Einstieg, wie man Hardware-[Objekte](/display/de/Struktur+der+IT-Dokumentation) miteinander verkabelt.

Konzept
-------

Die Abbildung von Verkabelungen ist in i-doit vielfältig wie die Realität: Ethernet, Glasfaser, Stromversorgung, Anschluss von Peripherie – alles, was einen Anschluss hat und mit einem Kabel verbunden werden kann, findet seinen Platz in der IT-Dokumentation.

i-doit sieht dabei eine **strikte Trennung zwischen der Dokumentation von Verbindungen und der physikalischen Verkabelung** vor. Ein gutes Beispiel ist die Netzwerkverkabelung über Ethernet. Zum Einen können die Verbindungen zwischen aktiven Netzwerkkomponenten (Switches, Router, Firewalls) in der [Kategorie](/display/de/Struktur+der+IT-Dokumentation) `**Netzwerk → Port**` festgehalten werden. Somit ist zu erkennen, an welchem Switch welcher Server hängt. Verbindungswege über mehrere Komponenten hinweg werden sichtbar. Zum Anderen spielen oftmals passive Komponenten eine wichtige Rolle: Patchpanels und Patchdosen sorgen für Ordnung im regelrechten "Kabelwirrwarr". Doch wem die Verbindung zwischen aktiven Komponenten genügt, kann die passiven Komponenten und damit auch die Kabel selbst außen vor lassen. i-doit ist in der Lage, im Hintergrund die Dokumentation der Verkabelung vorzunehmen, ohne dass der Benutzer zusätzliche Schritte ergreifen muss. Wird zu einem späteren Zeitpunkt ein Detailwissen zur Verkabelung erforderlich, kann die bisherige Dokumentation ergänzt werden, ohne dass der Benutzer von vorne beginnen muss.

Wie in i-doit üblich findet die Dokumentation der Verkabelung mittels Objekten und [Attributen](/display/de/Struktur+der+IT-Dokumentation) statt. Neben zahlreichen Formularen stehen Funktionen zum Visualisieren, Auswertung und Importieren bereit. Darum geht es im Folgenden.

Kategorie-Ordner `**Verkabelung**`
----------------------------------

Jeder [Objekttyp](/display/de/Struktur+der+IT-Dokumentation) kann mit dem Kategorie-Ordner `**Verkabelung**` [konfiguriert](/display/de/Zuordnung+von+Kategorien+zu+Objekttypen) werden. Dadurch erhalten Objekte von diesen ausgewählten Typen die Kategorien `**Anschlüsse**` und `**Schnittstelle**`.

Der Kategorie-Ordner fungiert nicht nur als Klammer für die genannten Unterkategorien, sondern bietet auch einige interessante Visualisierungen von Verkabelungen:

| Tab | Beschreibung |
| --- | --- |
| Tab | Beschreibung |
| --- | --- |
| `**Verkabelungsweg: Liste**` | Jeder Anschluss (siehe Kategorie `**Anschlüsse**`) mit einem vollständigen Verkabelungsweg wird aufgelistet. |
| `**Verkabelungsweg: Grafische Ansicht**` | Im Gegensatz zur oben genannten Listenansicht werden bei allen Objekte zusätzlich deren Bilder angezeigt. |
| `**Verkabelungsweg: Baumansicht (Verschachtelung)**` | Zu jedem Anschluss werden der Verkabelungsweg als Baumstruktur angezeigt. |

Der Kategorie-Ordner eignet sich für alle Objekte, die einen aktiven oder passiven Part bei der Verkabelungen beitragen.

![](/download/attachments/61015811/de_kategorie_verkabelung_liste.png?version=1&modificationDate=1495452088239&api=v2&effects=drop-shadow "Verkabelungsweg: Liste")

![](/download/attachments/61015811/de_kategorie_verkabelung_grafische_ansicht.png?version=1&modificationDate=1495452087471&api=v2&effects=drop-shadow "Verkabelungsweg: Grafische Ansicht")

![](/download/attachments/61015811/de_kategorie_verkabelung_baumansicht.png?version=1&modificationDate=1495452086475&api=v2&effects=drop-shadow "Verkabelungsweg: Baumansicht (Verschachtelung)")

### Kategorie **`Anschlüsse`**

Verfügt das ausgewählte Objekt über einen physischen Anschluss jeglicher Art, kann dieser in der Kategorie `**Anschlüsse**` dokumentiert werden.

Jeder Anschluss ist entweder als `**Eingang**` oder als `**Ausgang**` definiert. Zwischen Ein- und Ausgängen kann eine n-zu-n-Beziehung hergestellt werden:

*   Verbindung zwischen einem Eingang und einem Ausgang
*   Verbindung zwischen einem Eingang und mehreren Ausgängen

Diese Verbindung zwischen Ein- und Ausgang ist optional und nur unter bestimmten Bedingungen sinnvoll. Beispielsweise hat ein Patchpanel die Möglichkeit zum Auflegen von Kabeln, die in Ports münden. Hier entsteht also eine 1-zu-1-Beziehung zwischen Ein- und Ausgang.

Die Kategorie `**Anschlüsse**` wird durch weitere Kategorien automatisch mit Einträgen versorgt:

*   `**Netzwerk → Port**`: Wird ein neuer Port angelegt, wird dieser automatisch als neuer `**Ausgang**` definiert.
*   `**Stromverbraucher**`: Wird ein neues Netzteil angelegt, wird dessen Stromanschluss automatisch als neuer `**Eingang**` definiert.
*   `**Verkabelung → Schnittstelle**`: Wird eine neue Schnittstelle angelegt, wird diese automatisch als neuer `**Ausgang**` definiert.
*   `**Speichernetze → FC-Port**`: Wird ein neuer Fiber Channel Port angelegt, wird dieser automatisch als neuer `**Ausgang**` definiert.

![](/download/attachments/61015811/de_kategorie_anschluesse_esxi1.png?version=1&modificationDate=1495452362539&api=v2&effects=drop-shadow)

### Kategorie `**Schnittstelle**`

Die Kategorie Schnittstelle dient zum Anlegen weiterer Verbindungen, die nicht die Netzwerk- oder Stromverkabelung betreffen. Dies könnten Anschlüsse an Peripherie-Geräten wie Monitore über HDMI oder Drucker über USB sein.

Objekttyp `**Kabel**`
---------------------

Der Objekttyp Kabel beinhaltet alle Objekte, die ein Kabel repräsentieren. Ein Kabel besteht in i-doit zwingend aus einem Anfang und einem Ende. Y-Kabel o. ä. werden nicht unterstützt. Hier muss sich der Benutzer mit einem Hilfsobjekt begnügen, dass unter `**Verkablung → Anschlüsse**` einen Eingang mit zwei Ausgängen, die untereinander verbunden sind, enthält (1-zu-2-Beziehung).

Die Eigenschaften eines Kabels werden in mehreren Kategorien definiert, die im Folgenden erläutert werden.

![](/download/attachments/61015811/de_objekt-liste_kabel.png?version=1&modificationDate=1495452553269&api=v2&effects=drop-shadow)

### Kategorie-Ordner `**Kabelverbindung**`

Der Kategorie-Ordner `**Kabelverbindung**` enthält die Kategorie `**Kabel**` und wird daher typischerweise dem Objekttyp `**Kabel**` zugeordnet. Der Ordner selbst zeigt an, an was das Kabel angeschlossen ist.

![](/download/attachments/61015811/de_kategorie_kabelverbindung.png?version=1&modificationDate=1495458561015&api=v2&effects=drop-shadow)

### Kategorie `**Kabel**`

Die wesentlichen Eigenschaften eines Kabels werden in der Kategorie `**Kabelverbindung → Kabel**` festgehalten:

| Attribut | Beschreibung |
| --- | --- |
| Attribut | Beschreibung |
| --- | --- |
| `**Art des Kabels**` | Spezifikation des Kabels, beispielsweise "CAT7" oder "LWL" |
| `**Länge in CM**` | Länge des Kabels – nicht nur in Zentimetern |
| `**Farbe**` | Farbe der äußeren Ummantlung |
| `**Belegung**` | Wie viele Adern/Fasern enthält das Kabel? |
| `**Maximale Anzahl an Fasern/Adern**` | Wie viele Adern/Fasern dürfen maximal genutzt werden? |

![](/download/attachments/61015811/de_kategorie_kabel.png?version=1&modificationDate=1495458560214&api=v2&effects=drop-shadow)

### Kategorie `**Faser/Ader**`

Wer bis ins kleinste Detail dokumentieren möchte/muss, wird die Kategorie Faser/Ader lieben. Für jede Faser eines Glasfaserkabels bzw. jede Ader eines Kupferkabels können weitere Eigenschaften hinterlegt werden:

| ### Attribut | ### Beschreibung |
| --- | --- |
| ### Attribut | ### Beschreibung |
| --- | --- |
| `**Label**` | Bezeichnung |
| `**Kategorie**` | Relevant für LWL (OM1-4, OS1-2) |
| `**Farbe**` | Wellenlänge |
| `**Dämpfung**` | in dB |
| `**RX**` | Leitung zum Empfang von Daten |
| `**TX**` | Leitung zum Senden von Daten |

![](/download/attachments/61015811/de_kategorie_faser_ader.png?version=1&modificationDate=1495458559628&api=v2&effects=drop-shadow)

Objekttyp `**Patchfeld**`
-------------------------

Patchpanels werden in i-doit als Objekte vom Typ `**Patchfeld**` dokumentiert. Dieser passiven Komponente ist typischerweise der Kategorie-Ordner `**Verkabelung**` zu geordnet. In der Kategorie `**Verkabelung → Anschlüsse**` werden die Ports definiert: Ein `**Eingang**` repräsentiert den Netzwerk-Port. Ein `**Ausgang**` repräsentiert das aufgelegte Kabel. Ein- und Ausgang werden miteinander verbunden.

![](/download/attachments/61015811/de_objekt-liste_patchfeld.png?version=1&modificationDate=1495458937104&api=v2&effects=drop-shadow)

Zum schnellen Verbindung von Patchfeldern eignet sich der `**Verkabelungsbrowser**` (siehe unten).

Objekttyp `**Kabeltrasse**`
---------------------------

Kabeltrassen sind in Server-Räumen und Rechenzentren üblich. Sie bündeln mehrere Kabel und sorgen für geordnete Wege. Der Objekttyp `**Kabeltrasse**` enthält daher die Kategorien `**Standort**` und `**Räumlich zugeordnete Objekte**`, um Kabel aufzunehmen. Den Objekten vom Typ `**Kabel**` wiederum ist die Kategorie `**Standort**` zugeordnet.

![](/download/attachments/61015811/de_objekt-liste_kabeltrasse.png?version=1&modificationDate=1495458935652&api=v2&effects=drop-shadow)

Objekttyp `**Leerrohr**`
------------------------

Der Objekttyp `**Leerrohr**` verhält sich analog zur `**Kabeltrasse**` (siehe oben).

![](/download/attachments/61015811/de_objekt-liste_leerrohr.png?version=1&modificationDate=1495458936506&api=v2&effects=drop-shadow)

Einzelverkabelungen
-------------------

Der Kategorie-Ordner Verkabelung enthält bereits mehrere Visualisierungen. Daneben befindet sich unter `**Extras → CMDB → Verkabelungen → Einzelverkabelungen**` eine weitere Ansicht mit zusätzlichen Funktionen. Nach Auswahl eines verkabelten Objekts werden alle ein- und abgehenden Verkabelungswege dargestellt. Zusätzlich können Namen der Anschlüsse und der Kabel ein- oder ausgeblendet werden. Über eine Filterung werden nur ausgewählte Wege dargestellt.

Der Typ kann über Checkboxen bei mehreren Anschlüssen gleichzeitig geändert werden.

Die Verkabelungswege können im CSV-Format exportiert werden.

![Einzelverkabelung](/download/attachments/61015811/de_einzelverkabelungen_patchfeld.png?version=1&modificationDate=1495459156912&api=v2&effects=drop-shadow "Einzelverkabelung")

Verkabelungsbrowser
-------------------

Diese Funktion erleichtert die schnelle Verbindung von zwei Objekten untereinander. Er ist in der Kategorie `**Verkabelung → Anschlüsse**` über den Button `**Verkabelungsbrowser**` zu erreichen. Vorausgesetzt werden bereits dokumentierte Anschlüsse bei beiden Objekten.

![](/download/attachments/61015811/de_kategorie_anschluesse.png?version=1&modificationDate=1495445505640&api=v2&effects=drop-shadow)

Der geöffnete `**Verkabelungsbrowser**` bietet eine zweigeteilte Ansicht: Das Objekt, in dem sich der Benutzer befindet, wird mit allen verfügbaren Anschlüssen auf der linken Seite angezeigt. Die Ein- werden von den Ausgängen getrennt dargestellt. Auf der rechten Seite wird ein zweites Objekt mit seinen Anschlüssen geladen, damit beide Objekte miteinander verbunden werden können.

Es können jeweils die rechts dargestellten Anschlüsse des ersten Objekts und die links dargestellten Anschlüsse des zweiten Objekts miteinander verbunden werden. Die Ansicht der Ein- und Ausgänge kann gespiegelt werden, damit sowohl Ein-, als auch Ausgänge links beziehungsweise rechts dargestellt werden.

Über den Button `**Nächstes Objekt laden**` wird einem bestehender Verkabelungsweg nachgegangen.

Zum Verbinden von je einem Anschluss zwischen den beiden Objekten wird die Checkboxen der Anschlüsse ausgewählt. Über die oberste Checkbox werden alle verfügbaren Anschlüsse ausgewählt. Ein Bereich von Anschlüssen kann mit der `**Shift**`\-Taste selektiert werden. Wichtig ist, dass die Anzahl der Anschlüsse des ersten Objekts mit der Anschluss der Anschlüsse des zweiten Objekts übereinstimmen.

Über den Button `**Anschlüsse verbinden**` werden die ausgewählten Anschlüsse beider Objekte miteinander verbunden. Die Logik sieht vor, von oben nach unten die jeweils nächsten ausgewählten Anschlüsse zu verbinden, bis das Listenende unten erreicht ist.

i-doit sieht bei jedem neu verbundenen Anschluss ein `**Kabel**`\-Objekt vor. Über die Checkbox `**Automatische Verkabelung**` werden neue `**Kabel**`\-Objekte ohne Rückfrage erstellt. Andernfalls ist für jede Verbindung ein bestehendes `**Kabel**`\-Objekt in einem neuen Fenster auszuwählen.

Über den Button `**Kabel ändern**` kann für die selektierten Anschlüsse jeweils ein alternatives Kabel-Objekt ausgewählt werden.

Der Button `**Anschlüsse lösen**` bewirkt, dass die Verbindung von den ausgewählten Anschlüssen unwiderruflich gelöscht werden.

![Verkabelungsbrowser](/download/attachments/61015811/de_verkabelungsbrowser_auswahl.png?version=1&modificationDate=1495445506568&api=v2&effects=drop-shadow "Verkabelungsbrowser")

Verkabelungsimport
------------------

Verkabelungswege können in i-doit über den Import einer Datei im CSV-Format erstellt werden. Die dazu nötigen Schritte sind unter `**Extras → CMDB → Import → Verkabelung**` zu finden.

Folgende Optionen stehen zur Verfügung:

| Option | Beschreibung |
| --- | --- |
| Option | Beschreibung |
| --- | --- |
| `**Verkabelungsart**` | In welcher Kategorie sollen Einträge erstellt werden? Zur Auswahl stehen:<br><br>*   `**Anschlüsse**` (siehe Kategorie `**Verkabelung → Anschlüsse**`)<br>*   `**FC-Ports**` (siehe Kategorie `**Speichernetze → FC-Port**`)<br>*   `**Ports**` (siehe Kategorie `**Netzwerk → Port**`)<br>*   `**Schnittstelle**` (siehe Kategorie `**Verkabelung → Schnittstelle**`)<br><br>Die Kategorie wird nur beim ersten und beim letzten Objekt des jeweiligen Verkabelungsweges berücksichtigt. Bei allen anderen Zwischen-Objekten werden Einträge in der Kategorie `**Verkabelung →** **Anschlüsse**` importiert. |
| `**Anschlussart**` | Um welchen Anschluss handelt es sich? Zur Auswahl stehen alle Einträge des Attributs `**Anschlussart**` in der Kategorie `**Verkabelung → Anschlüsse**`. Diese Liste kann unter `**Verwaltung → CMDB Einstellungen → Dialog-Admin → Anschlüsse: Anschlussart**` angepasst werden. |
| `**Nicht existierende Zwischenobjekte automatisch erzeugen**` | Wird diese Option aktiviert, können nicht bereits dokumentierte Objekte zwischen Anfangs- und End-Objekt beim Import erzeugt werden. |
| `**Objekttyp des automatisch erzeugten Zwischenobjekts**` | Ist die oben genannte Option aktiv, muss zusätzlich definiert werden, welchem Objekttyp neu erstellte Objekte zugeordnet werden sollen. |

Über den Button `**CSV-Datei einlesen**` wird eine zuvor ausgewählte Datei hochgeladen und analysiert. Das Ergebnis befindet sich im Tab `**Inhalt**`.

Innerhalb des Tabs `**Inhalt**` werden die Zeilen und Spalten der CSV-Datei dargestellt. Über die entsprechenden Buttons können neue Zeilen und Spalten definiert werden. Jede Zeile repräsentiert einen Verkabelungsweg mit je einem Anfangs- und End-Objekt sowie beliebig vielen Zwischen-Objekten.

Das Anfangsobjekt besteht aus einem Objekt-Titel und einem Ausgang. Das End-Objekt aus einem Objekt-Titel und einem Eingang. Die Zwischen-Objekte verfügen über je einen Eingang und Ausgang. Zwischen den Anschlüssen befinden sich Objekte vom Typ Kabel. Für diese wird ebenfalls ein Objekt-Titel vergeben. Bei Zwischen-Objekten können Ein- und Ausgang nachträglich vertauscht werden. Sollten für die Anschlüsse und Kabel keine Namen vergeben werden, werden diese durchnummeriert.

Die Vergabe der Objekt-Titel und Anschlüsse geschieht entweder über die CSV-Datei oder über die Textfelder. Eine automatische Namensvergabe ist für jede Spalte individuell möglich.

Auch ohne CSV-Datei nutzbar

Eine CSV-Datei muss nicht zwangsläufig für den Import vorliegen. Stattdessen kann der Tab `**Inhalt**` dazu genutzt werden, manuell Verkabelungswege anzulegen.

Nicht existierende Objekte werden rot, automatisch zu erstellende gelb und bereits existierende Objekte grün markiert. Diese werden anhand des Objekt-Titels und -Typs identifiziert.

Über den Button `**Import starten**` werden die Verkabelungswege importiert.

![Verkabelungsimport](/download/attachments/61015811/de_import_verkabelung.png?version=1&modificationDate=1495459259054&api=v2&effects=drop-shadow "Verkabelungsimport")