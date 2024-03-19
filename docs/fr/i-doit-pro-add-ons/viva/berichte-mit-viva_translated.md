<!-- TRANSLATED by md-translate -->
# Berichte mit VIVA

# Rapports avec VIVA

Um eine kontinuierliche Qualitätssicherung zu gewährleisten, unterstützt das [Add-on](../index.md) **VIVA** den Anwender mit einer Reihe von Berichten (auch "Reports" genannt). Diese eignen sich in erster Linie zur Sichtbarmachung von fehlenden oder unzureichenden Informationen während der eigentlichen Dokumentation. Die Berichte begleiten den Anwender durch den gesamten Dokumentationsprozess.

Afin de garantir une assurance qualité continue, le [Add-on](../index.md) **VIVA** assiste l'utilisateur avec une série de rapports (également appelés "reports"). Ceux-ci conviennent en premier lieu à la mise en évidence d'informations manquantes ou insuffisantes pendant la documentation proprement dite. Les rapports accompagnent l'utilisateur tout au long du processus de documentation.

Als Resultat dient wiederum der [Audit](./audits-mit-viva-unterstuetzen.md#audits-erstellen), der den Abschlussbericht des Projekts bildet und in eine mögliche Zertifizierung nach ISO 27001 auf Basis von IT-Grundschutz mündet.

Le résultat est à nouveau l'[audit](./audits-mit-viva-unterstuetzen.md#audits-erstellen), qui constitue le rapport final du projet et débouche sur une éventuelle certification ISO 27001 sur la base de IT-Grundschutz.

Zu jedem [Informationsverbund](./vorgehensweise-mit-viva.md#informationsverb%C3%BCnde-modellieren) stehen unterschiedliche Berichte zur Auswahl. Sie sind innerhalb von VIVA über den Menübaum unter **Informationsverbünde → Name des Informationsverbunds → Berichte** zu erreichen.

Pour chaque [réseau d'information] (./procédure-avec-viva.md#modéliser-un-réseau-d'information%C3%BCnde), différents rapports sont disponibles. Ils sont accessibles au sein de VIVA via l'arborescence du menu sous **Réseaux d'information → Nom du réseau d'information → Rapports**.

[![Berichte im Menübaum](../../assets/images/de/i-doit-pro-add-ons/viva/berichte/1-vb.png)](../../assets/images/de/i-doit-pro-add-ons/viva/berichte/1-vb.png)

[ ![Rapports dans l'arborescence du menu](../../assets/images/fr/i-doit-pro-add-ons/viva/rapports/1-vb.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/rapports/1-vb.png)

Die Übersichtsseite bietet eine Zusammenfassung aller verfügbaren Berichte in Echtzeit. Diese sind namentlich aufgeführt und durch ein Ampelsystem visualisiert:

La page d'aperçu offre un résumé en temps réel de tous les rapports disponibles. Ceux-ci sont nommés et visualisés par un système de feux tricolores :

| Rot | Der Report meldet fehlende oder unzureichende Daten. In Klammern wird angegeben, an wie vielen Stellen dies identifiziert wurde. |
| --- | --- |
| Gelb | Der Report wird gerade ausgeführt und hat noch keine Ergebnisse gemeldet. |
| Grün | Der Report meldet ein positives Ergebnis: Es wurden keine fehlenden oder unzureichenden Daten identifiziert. |

| Rouge | Le rapport signale des données manquantes ou insuffisantes. Le nombre d'endroits où cela a été identifié est indiqué entre parenthèses. |
| --- | --- |
| Jaune | Le rapport est en cours d'exécution et n'a pas encore signalé de résultats. |
| Vert | Le rapport signale un résultat positif : aucune donnée manquante ou insuffisante n'a été identifiée. |

[![Übersichtsseite der Berichte](../../assets/images/de/i-doit-pro-add-ons/viva/berichte/2-vb.png)](../../assets/images/de/i-doit-pro-add-ons/viva/berichte/2-vb.png)

[ ![Page de présentation des rapports](../../assets/images/fr/i-doit-pro-add-ons/viva/rapports/2-vb.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/rapports/2-vb.png)

Ein Klick auf einen Report in der Übersichtsseite oder im Menübaum führt zu detailierten Ergebnissen. Die Berichte sind dabei alle ähnlich aufgebaut: Eine kleine Beschreibung, welche Aufgabe der Report hat, wird oberhalb der Seite angezeigt. Optional gesellt sich dazu ein Graph, der das Ergebnis visuell aufbereitet. Darunter folgt eine tabellarische Auflistung des Ergebnisses. Sie enthält pro Zeile die wichtigsten Informationen zu einer Stelle, die als unzureichend oder fehlerhaft identifiziert wurde. Ein Klick auf eine Zeile führt zur entsprechenden Stelle innerhalb des VIVA-Add-ons. Auf diese Weise kann der Anwender die Dokumentation schnell und unkompliziert nachbessern.

Un clic sur un rapport dans la page d'aperçu ou dans l'arborescence des menus permet d'obtenir des résultats détaillés. Les rapports sont tous structurés de manière similaire : Une petite description de la tâche du rapport est affichée au-dessus de la page. En option, un graphique s'y ajoute pour présenter visuellement le résultat. En dessous, on trouve une liste du résultat sous forme de tableau. Elle contient pour chaque ligne les informations les plus importantes sur un point qui a été identifié comme insuffisant ou erroné. Un clic sur une ligne mène à l'endroit correspondant au sein du module complémentaire VIVA. De cette manière, l'utilisateur peut rapidement et facilement améliorer la documentation.

[![Ergebnis eines Berichts](../../assets/images/de/i-doit-pro-add-ons/viva/berichte/3-vb.png)](../../assets/images/de/i-doit-pro-add-ons/viva/berichte/3-vb.png)

[ ![Résultat d'un rapport](../../assets/images/fr/i-doit-pro-add-ons/viva/berichte/3-vb.png)](../../assets/images/fr/i-doit-pro-add-ons/viva/berichte/3-vb.png)

Berichte können nicht nur innerhalb des VIVA-Add-ons, also innerhalb des Browsers betrachtet werden, sondern auch als PDF-Datei exportiert werden. Dies hat den Vorteil, dass ein Report auf einfache Weise weiterverschickt oder ausgedruckt werden kann. Die entsprechende Funktionalität bietet der Button _PDF_ am Anfang eines jeden Berichts.

Les rapports peuvent non seulement être consultés dans le module complémentaire VIVA, c'est-à-dire dans le navigateur, mais aussi être exportés sous forme de fichier PDF. L'avantage est qu'un rapport peut être facilement envoyé à d'autres personnes ou imprimé. La fonctionnalité correspondante est offerte par le bouton _PDF_ au début de chaque rapport.

!!! attention "Es bietet sich an, die Berichte regelmäßig auszuführen. Größere Änderungen an den dokumentierten Daten können somit sofort auf Vollständigkeit und formale Korrektheit überprüft werden, sofern dies durch einen automatischen Algorithmus abgebildet werden kann."

! !! attention "Il est conseillé d'exécuter les rapports régulièrement. Les modifications importantes apportées aux données documentées peuvent ainsi être immédiatement vérifiées quant à leur exhaustivité et leur exactitude formelle, pour autant que cela puisse être représenté par un algorithme automatique".