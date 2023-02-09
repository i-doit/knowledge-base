# CMDB-Explorer

Der CMDB-Explorer stellt [Beziehungen zwischen Objekten](../../auswertungen/../grundlagen/objekt-beziehungen.md) grafisch dar. Verschiedene Ansichten zu Abhängigkeiten können generiert werden. Dadurch gewinnt man einen schnellen Überblick. Anschließend können diese Ansichten in verschiedene Formate exportiert werden, um sie weiter zu bearbeiten.

Aufruf des CMDB-Explorers
-------------------------

Du erreichst den CMDB-Explorer sowohl über die Menü-Leiste am oberen Rand, als auch innerhalb eines [Objekts](../../grundlagen/struktur-it-dokumentation.md) über das zugehörige Icon oberhalb der [Kategorie](../../glossar.md#kategorie)\-Liste.

[![cmdb-explorer](../../assets/images/de/auswertungen/cmdb-explorer/1-ce.png)](../../assets/images/de/auswertungen/cmdb-explorer/1-ce.png)

Wenn du den CMDB-Explorer über das Icon aus einem Objekt heraus aufrufst wird dieses Objekt als Root-Objekt vorselektiert. Bei der Auswahl über die Menü-Leiste wird die CMDB-Explorer ohne Auswahl eines Objekts geladen.

Aufteilung des CMDB-Explorers
-----------------------------

Der CMDB-Explorer ist in drei Bereiche geteilt, die entsprechende Rollen übernehmen:

*   **Inhaltsbereich**  
    Dieser Bereich übernimmt die grafische Darstellung der Inhalte im Zentrum.
*   **Informationsbereich**  
    Weiterreichende Informationen kannst du diesem Bereich entnehmen, der sich links vom Inhaltsbereich befindet.
*   **Funktionsleiste**  
    Die Funktionsleiste wird zur Konfiguration der Ansicht genutzt. Diese befindet sich oberhalb des Inhaltsbereichs.

Inhaltsbereich
--------------

Zentral befindet sich der Inhaltsbereich des CMDB-Explorers. Hier sind alle Inhalte zu finden, die im Umfang und Darstellung deinen Einstellungen entsprechen. Die Form der Darstellung kann über [Profile](../../auswertungen/cmdb-explorer/index.md) festgelegt werden. Im Inhaltsbereich kann der dargestellte Ausschnitt jederzeit verschoben werden. Klicke hierfür in den freien Bereich der Darstellung, halte die Maustaste gedrückt und verschiebe die Ansicht. Um weitere Beziehungen eines Objekts anzuzeigen, kann dessen Kachel doppelt angeklickt werden. Falls weitere Beziehungen existieren, werden diese nun aufgeklappt. Der Informationsbereich, welcher sich links vom Inhaltsbereich befindet, enthält weiterreichende Informationen zum aktivierten Objekt. Das Objekt wird aktiviert, indem dessen Kachel mit einem einfachen angeklickt wird. Wenn ein Objekt aktiviert wurde, wird der Weg zum Root-Objekt nachgezeichnet um ihn zu verdeutlichen.

[![inhaltsbereich](../../assets/images/de/auswertungen/cmdb-explorer/2-ce.png)](../../assets/images/de/auswertungen/cmdb-explorer/2-ce.png)

!!!info "Hinweis"

    Die Richtung, in denen einzelne Kacheln aufklappen, hängt von der Beziehungsrichtung ab. Diese ist in i-doit immer gerichtet: Es gibt pro Beziehung jeweils ein Master- und ein Slave-Objekt. Einmal eingeschlagene Richtungen können im CMDB-Explorer nicht gewechselt werden, d. h., nach unten aufklappende Kacheln können nur Beziehungen anzeigen, die ebenfalls nach unten aufklappen würden.

Informationsbereich
-------------------

Der Informationsbereich befindet sich am linken Rand des CMDB-Explorers und stellt zusätzliche Informationen zum ausgewählten Objekt dar. Welche Informationen dargestellt werden, kannst du über das verwendete Profil des CMDB-Explorers festlegen. Wenn ein Objekt aktiviert wurde, können über die Schaltfläche **Objekttyp ein- /ausblenden** alle [Objekte dieses Typs](../../grundlagen/struktur-it-dokumentation.md) für eine bessere Übersicht ausgegraut werden. Sollte ein anderes Objekt als Root-Objekt gewählt worden sein, ist hier ebenfalls die Schaltfläche **Als Root setzen** zu finden. So kann die Zentralisierung auf das aktuell aktivierte Objekt gelegt werden und die Beziehungen werden um dieses Objekt herum aufgebaut. Über **Objekt öffnen** wird das Objekt in _i-doit_ geöffnet, sodass du dessen Attribute einsehen und bearbeiten kannst. In der Legende werden dir die Objekt-Farben zu den einzelnen Objekttypen angezeigt. Außerdem ist es möglich, global alle Objekte eines Typs im CMDB-Explorer auszugrauen.

[![informationsbereich](../../assets/images/de/auswertungen/cmdb-explorer/3-ce.png)](../../assets/images/de/auswertungen/cmdb-explorer/3-ce.png)

Funktionsleiste
---------------

In der Funktionsleiste oberhalb des Inhaltsbereichs wird das Objekt ausgewählt, welches zentralisiert dargestellt wird und um das die Beziehungen aufgebaut werden. Zusätzlich ist es möglich, das [Profil](../../auswertungen/cmdb-explorer/profile-im-cmdb-explorer.md) zur Darstellung auszuwählen. Im Auslieferungszustand wird neben dem **Standard-Profil** ein **Mikro-Profil** angeboten, das die Darstellung von mehr Informationen auf kleinerer Fläche erlaubt. Weiterhin kann die Darstellung durch den **Service-Filter** beeinflusst werden. Hier können Bedingungen festgelegt werden, welche Objekte und Beziehungen berücksichtigt werden sollen. Die Service-Filter können unter **Extras → Services → Service Filter** konfiguriert werden. Neben dem Typ der Beziehung, deren Gewichtung und den angezeigten Objekttypen können die Tiefe der Darstellung und der CMDB-Status der Objekte als Bedingung festgelegt werden.

Über die Schaltfläche **Ausrichtung ändern** wird die Darstellungsrichtung angepasst. Hier ist es möglich, die Darstellung entweder von oben nach unten oder von links nach rechts erfolgen zu lassen. Bei umfangreichen Visualisierungen ist die Darstellung von links nach rechts zu empfehlen. Weiterhin ist es möglich, die Darstellungsart zu wählen. Über die Schaltfläche **Darstellungsart wechseln** kann von der **Baum-Ansicht** zu einer **Netz-Ansicht** gewechselt werden. In der Baum-Ansicht kann es vorkommen, dass Objekte mehrfach angezeigt werden, wenn Sie an unterschiedlichen Stellen über Beziehungen zu anderen Objekten verfügen. In der Netz-Ansicht wird ein Objekt genau einmal dargestellt und alle Beziehungen werden von dessen Kachel erzeugt. Bei komplexeren Beziehungsdarstellungen ist die Baum-Ansicht zu empfehlen.

Der Zoom auf die Darstellung kann über die Schaltflächen **Hineinzoomen** und **Herauszoomen** angepasst werden. Das Zentrieren mit einer Zoom-Stufe von 100% erfolgt über die Schaltfläche **Zentrieren und auf 100% zoomen**. Alternativ kann das Mausrad zum Zoomen verwendet werden.

Die Schaltfläche **Export** ermöglicht den Export des aktuellen Inhalts des CMDB-Explorers in alternative Formate, die extern weiterverwendet werden können. Bei der Verwendung der Schaltfläche **Drucken** wird der aktuelle Bildausschnitt für einen Ausdruck aufbereitet. Über **Vollbild** wird der angezeigte
[![angezeigter-bereich](../../assets/images/de/auswertungen/cmdb-explorer/4-ce.png)](../../assets/images/de/auswertungen/cmdb-explorer/4-ce.png)
Bereich auf eine größere Fläche expandiert, sodass mehr Raum für die Darstellung bereitgestellt wird.