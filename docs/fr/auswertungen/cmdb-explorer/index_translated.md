<!-- TRANSLATED by md-translate -->
# CMDB-Explorer

# Explorateur CMDB

Der CMDB-Explorer stellt [Beziehungen zwischen Objekten](../../auswertungen/../grundlagen/objekt-beziehungen.md) grafisch dar. Verschiedene Ansichten zu Abhängigkeiten können generiert werden. Dadurch gewinnt man einen schnellen Überblick. Anschließend können diese Ansichten in verschiedene Formate exportiert werden, um sie weiter zu bearbeiten.

L'explorateur CMDB représente graphiquement [les relations entre les objets](../../exploitations/../bases/relations-objets.md). Différentes vues des dépendances peuvent être générées. On obtient ainsi une vue d'ensemble rapide. Ces vues peuvent ensuite être exportées dans différents formats afin d'être traitées.

## Aufruf des CMDB-Explorers

## Appel de l'explorateur CMDB

Du erreichst den CMDB-Explorer sowohl über die Menü-Leiste am oberen Rand, als auch innerhalb eines [Objekts](../../grundlagen/struktur-it-dokumentation.md) über das zugehörige Icon oberhalb der [Kategorie](../../glossar.md#kategorie)-Liste.

Vous pouvez accéder à l'explorateur CMDB via la barre de menu en haut, mais aussi à l'intérieur d'un [objet](../../grundlagen/struktur-it-dokumentation.md) via l'icône correspondante au-dessus de la liste [catégorie](../../glossar.md#kategorie).

[![cmdb-explorer](../../assets/images/de/auswertungen/cmdb-explorer/1-ce.png)](../../assets/images/de/auswertungen/cmdb-explorer/1-ce.png)

[ ![cmdb-explorer](../../assets/images/fr/évaluations/cmdb-explorer/1-ce.png)](../../assets/images/fr/évaluations/cmdb-explorer/1-ce.png)

Wenn du den CMDB-Explorer über das Icon aus einem Objekt heraus aufrufst wird dieses Objekt als Root-Objekt vorselektiert. Bei der Auswahl über die Menü-Leiste wird die CMDB-Explorer ohne Auswahl eines Objekts geladen.

Lorsque tu appelles CMDB-Explorer à partir d'un objet via l'icône, cet objet est présélectionné comme objet racine. Si tu le sélectionnes via la barre de menu, l'explorateur CMDB sera chargé sans sélectionner d'objet.

## Aufteilung des CMDB-Explorers

## Division de l'explorateur CMDB

Der CMDB-Explorer ist in drei Bereiche geteilt, die entsprechende Rollen übernehmen:

L'explorateur CMDB est divisé en trois parties qui assument les rôles correspondants :

* **Inhaltsbereich**<br>
Dieser Bereich übernimmt die grafische Darstellung der Inhalte im Zentrum.
* **Informationsbereich**<br>
Weiterreichende Informationen kannst du diesem Bereich entnehmen, der sich links vom Inhaltsbereich befindet.
* **Funktionsleiste**<br>
Die Funktionsleiste wird zur Konfiguration der Ansicht genutzt. Diese befindet sich oberhalb des Inhaltsbereichs.

* **Zone de contenu**<br>
Cette zone se charge de la représentation graphique des contenus au centre.
**Zone d'information**<br>.
Tu peux obtenir des informations plus détaillées dans cette zone, qui se trouve à gauche de la zone de contenu.
**Barre de fonctions**<br>.
La barre de fonctions est utilisée pour configurer l'affichage. Elle se trouve au-dessus de la zone de contenu.

## Inhaltsbereich

## Zone de contenu

Zentral befindet sich der Inhaltsbereich des CMDB-Explorers. Hier sind alle Inhalte zu finden, die im Umfang und Darstellung deinen Einstellungen entsprechen. Die Form der Darstellung kann über [Profile](../../auswertungen/cmdb-explorer/index.md) festgelegt werden.<br>
Im Inhaltsbereich kann der dargestellte Ausschnitt jederzeit verschoben werden. Klicke hierfür in den freien Bereich der Darstellung, halte die Maustaste gedrückt und verschiebe die Ansicht. Um weitere Beziehungen eines Objekts anzuzeigen, kann dessen Kachel doppelt angeklickt werden.<br>
Falls weitere Beziehungen existieren, werden diese nun aufgeklappt. Der Informationsbereich, welcher sich links vom Inhaltsbereich befindet, enthält weiterreichende Informationen zum aktivierten Objekt. Das Objekt wird aktiviert, indem dessen Kachel mit einem einfachen angeklickt wird. Wenn ein Objekt aktiviert wurde, wird der Weg zum Root-Objekt nachgezeichnet um ihn zu verdeutlichen.

La zone de contenu de l'explorateur CMDB se trouve au centre. C'est ici que se trouvent tous les contenus dont l'étendue et la présentation correspondent à tes paramètres. La forme de la représentation peut être définie via [Profile](../../explorations/cmdb-explorer/index.md).<br>
Dans la zone de contenu, l'extrait représenté peut être déplacé à tout moment. Pour ce faire, clique dans la zone libre de la représentation, maintiens le bouton de la souris enfoncé et déplace la vue. Pour afficher d'autres relations d'un objet, il suffit de double-cliquer sur sa tuile.<br>
S'il existe d'autres relations, elles sont alors développées. La zone d'information, qui se trouve à gauche de la zone de contenu, contient des informations plus détaillées sur l'objet activé. L'objet est activé en cliquant sur sa vignette avec un simple clic. Lorsqu'un objet est activé, le chemin vers l'objet racine est tracé afin de le rendre plus clair.

[![inhaltsbereich](../../assets/images/de/auswertungen/cmdb-explorer/2-ce.png)](../../assets/images/de/auswertungen/cmdb-explorer/2-ce.png)

[ ![zone de contenu](../../assets/images/fr/évaluations/cmdb-explorer/2-ce.png)](../../assets/images/fr/évaluations/cmdb-explorer/2-ce.png)

!!!info "Hinweis"

!!!info "Note"

```
Die Richtung, in denen einzelne Kacheln aufklappen, hängt von der Beziehungsrichtung ab. Diese ist in i-doit immer gerichtet: Es gibt pro Beziehung jeweils ein Master- und ein Slave-Objekt. Einmal eingeschlagene Richtungen können im CMDB-Explorer nicht gewechselt werden, d. h., nach unten aufklappende Kacheln können nur Beziehungen anzeigen, die ebenfalls nach unten aufklappen würden.
```

## Informationsbereich

## Zone d'information

Der Informationsbereich befindet sich am linken Rand des CMDB-Explorers und stellt zusätzliche Informationen zum ausgewählten Objekt dar. Welche Informationen dargestellt werden, kannst du über das verwendete Profil des CMDB-Explorers festlegen. Wenn ein Objekt aktiviert wurde, können über die Schaltfläche **Objekttyp ein- /ausblenden** alle [Objekte dieses Typs](../../grundlagen/struktur-it-dokumentation.md) für eine bessere Übersicht ausgegraut werden.<br>
Sollte ein anderes Objekt als Root-Objekt gewählt worden sein, ist hier ebenfalls die Schaltfläche **Als Root setzen** zu finden. So kann die Zentralisierung auf das aktuell aktivierte Objekt gelegt werden und die Beziehungen werden um dieses Objekt herum aufgebaut. Über **Objekt öffnen** wird das Objekt in _i-doit_ geöffnet, sodass du dessen Attribute einsehen und bearbeiten kannst.
In der Legende werden dir die Objekt-Farben zu den einzelnen Objekttypen angezeigt. Außerdem ist es möglich, global alle Objekte eines Typs im CMDB-Explorer auszugrauen.

La zone d'information se trouve à gauche de l'explorateur CMDB et affiche des informations supplémentaires sur l'objet sélectionné. Tu peux définir quelles informations sont affichées via le profil utilisé dans l'explorateur CMDB. Lorsqu'un objet est activé, le bouton **Montrer/Masquer le type d'objet** permet de griser tous les [objets de ce type](../../bases/structure-it-documentation.md) pour une meilleure vue d'ensemble.<br>
Si un autre objet a été choisi comme objet root, on trouve également ici le bouton **Définir comme root**. Ainsi, la centralisation peut être placée sur l'objet actuellement activé et les relations sont établies autour de cet objet. En cliquant sur **Ouvrir l'objet**, l'objet s'ouvre dans _i-doit_, ce qui te permet de voir et de modifier ses attributs.
Dans la légende, tu peux voir les couleurs des objets pour chaque type d'objet. Il est également possible de griser globalement tous les objets d'un type dans l'explorateur CMDB.

[![informationsbereich](../../assets/images/de/auswertungen/cmdb-explorer/3-ce.png)](../../assets/images/de/auswertungen/cmdb-explorer/3-ce.png)

[ ![zone d'information](../../assets/images/fr/évaluations/cmdb-explorer/3-ce.png)](../../assets/images/fr/évaluations/cmdb-explorer/3-ce.png)

## Funktionsleiste

## Barre de fonction

In der Funktionsleiste oberhalb des Inhaltsbereichs wird das Objekt ausgewählt, welches zentralisiert dargestellt wird und um das die Beziehungen aufgebaut werden. Zusätzlich ist es möglich, das [Profil](../../auswertungen/cmdb-explorer/profile-im-cmdb-explorer.md) zur Darstellung auszuwählen. Im Auslieferungszustand wird neben dem **Standard-Profil** ein **Mikro-Profil** angeboten, das die Darstellung von mehr Informationen auf kleinerer Fläche erlaubt.

Dans la barre de fonctions au-dessus de la zone de contenu, on choisit l'objet qui sera représenté de manière centralisée et autour duquel les relations seront établies. Il est en outre possible de sélectionner le [profil](../../évaluations/cmdb-explorer/profils-im-cmdb-explorer.md) pour la représentation. A la livraison, un **Microprofil** est proposé en plus du **Profil standard**, qui permet d'afficher plus d'informations sur une plus petite surface.

[![angezeigter-bereich](../../assets/images/de/auswertungen/cmdb-explorer/4-ce.png)](../../assets/images/de/auswertungen/cmdb-explorer/4-ce.png)

[ ![zone-affichée](../../assets/images/fr/évaluations/cmdb-explorer/4-ce.png)](../../assets/images/fr/évaluations/cmdb-explorer/4-ce.png)

Weiterhin kann die Darstellung durch den **Service-Filter** beeinflusst werden. Hier können Bedingungen festgelegt werden, welche Objekte und Beziehungen berücksichtigt werden sollen. Die Service-Filter können unter **Extras → Services → Service Filter** konfiguriert werden.<br>
Neben dem Typ der Beziehung, deren Gewichtung und den angezeigten Objekttypen können die Tiefe der Darstellung und der CMDB-Status der Objekte als Bedingung festgelegt werden.

De plus, la représentation peut être influencée par le **Filtre de service**. Ici, il est possible de définir des conditions pour déterminer quels objets et relations doivent être pris en compte. Les filtres de service peuvent être configurés sous **Extras → Services → Service Filter**.<br>
Outre le type de relation, sa pondération et les types d'objets affichés, la profondeur de la représentation et le statut CMDB des objets peuvent être définis comme condition.

[![service-filter](../../assets/images/de/auswertungen/cmdb-explorer/5-ce.png)](../../assets/images/de/auswertungen/cmdb-explorer/5-ce.png)

[ ![service-filter](../../assets/images/fr/évaluations/cmdb-explorer/5-ce.png)](../../assets/images/fr/évaluations/cmdb-explorer/5-ce.png)

Über die Schaltfläche **Ausrichtung ändern** wird die Darstellungsrichtung angepasst. Hier ist es möglich, die Darstellung entweder von oben nach unten oder von links nach rechts erfolgen zu lassen. Bei umfangreichen Visualisierungen ist die Darstellung von links nach rechts zu empfehlen. Weiterhin ist es möglich, die Darstellungsart zu wählen.

Le bouton **Modifier l'orientation** permet d'adapter le sens de la représentation. Il est ici possible de choisir une représentation de haut en bas ou de gauche à droite. Pour les visualisations volumineuses, la représentation de gauche à droite est recommandée. Il est également possible de choisir le type de représentation.

Über die Schaltfläche **Darstellungsart wechseln** kann von der **Baum-Ansicht** zu einer **Netz-Ansicht** gewechselt werden. In der Baum-Ansicht kann es vorkommen, dass Objekte 
mehrfach angezeigt werden, wenn Sie an unterschiedlichen Stellen über Beziehungen zu anderen Objekten verfügen.

Le bouton **Changer de type de représentation** permet de passer de la vue **Arborescence** à une vue **Réseau**. Dans la vue arborescente, il peut arriver que des objets soient
soient affichés plusieurs fois s'ils ont des relations avec d'autres objets à différents endroits.

In der Netz-Ansicht wird ein Objekt genau einmal dargestellt und alle Beziehungen werden von dessen Kachel erzeugt. Bei komplexeren Beziehungsdarstellungen ist die Baum-Ansicht zu empfehlen.

Dans la vue en réseau, un objet est représenté une seule fois et toutes les relations sont générées par sa tuile. Pour des représentations de relations plus complexes, il est recommandé d'utiliser la vue arborescente.

Der Zoom auf die Darstellung kann über die Schaltflächen **Hineinzoomen** und **Herauszoomen** angepasst werden. Das Zentrieren mit einer Zoom-Stufe von 100% erfolgt über die Schaltfläche **Zentrieren und auf 100% zoomen**. Alternativ kann das Mausrad zum Zoomen verwendet werden.

Le zoom sur la représentation peut être adapté à l'aide des boutons **zoom avant** et **zoom arrière**. Le centrage avec un niveau de zoom de 100% s'effectue avec le bouton **Centrer et zoomer à 100%**. Il est également possible d'utiliser la molette de la souris pour zoomer.

Die Schaltfläche **Export** ermöglicht den Export des aktuellen Inhalts des CMDB-Explorers in alternative Formate, die extern weiterverwendet werden können. Bei der Verwendung der Schaltfläche **Drucken** wird der aktuelle Bildausschnitt für einen Ausdruck aufbereitet. Über **Vollbild** wird der angezeigte<br>

Le bouton **Exporter** permet d'exporter le contenu actuel de CMDB-Explorer dans des formats alternatifs qui peuvent être réutilisés en externe. En utilisant le bouton **Imprimer**, la partie actuelle de l'image est préparée pour une impression. En cliquant sur **Plein écran**, l'image affichée<br> est affichée.

Bereich auf eine größere Fläche expandiert, sodass mehr Raum für die Darstellung bereitgestellt wird.

La zone s'étend sur une plus grande surface, offrant ainsi plus d'espace pour l'affichage.