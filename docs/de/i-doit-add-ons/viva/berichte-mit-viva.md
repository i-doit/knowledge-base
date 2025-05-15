# Berichte mit VIVA

Um eine kontinuierliche Qualitätssicherung zu gewährleisten, unterstützt das [Add-on](../index.md) **VIVA** den Anwender mit einer Reihe von Berichten (auch "Reports" genannt). Diese eignen sich in erster Linie zur Sichtbarmachung von fehlenden oder unzureichenden Informationen während der eigentlichen Dokumentation. Die Berichte begleiten den Anwender durch den gesamten Dokumentationsprozess.

Als Resultat dient wiederum der [Audit](./audits-mit-viva-unterstuetzen.md#audits-erstellen), der den Abschlussbericht des Projekts bildet und in eine mögliche Zertifizierung nach ISO 27001 auf Basis von IT-Grundschutz mündet.

Zu jedem [Informationsverbund](./vorgehensweise-mit-viva.md#informationsverbünde-modellieren) stehen unterschiedliche Berichte zur Auswahl. Sie sind innerhalb von VIVA über den Menübaum unter **Informationsverbünde → Name des Informationsverbunds → Berichte** zu erreichen.

[![Berichte im Menübaum](../../assets/images/de/i-doit-add-ons/viva/berichte/1-vb.png)](../../assets/images/de/i-doit-add-ons/viva/berichte/1-vb.png)

Die Übersichtsseite bietet eine Zusammenfassung aller verfügbaren Berichte in Echtzeit. Diese sind namentlich aufgeführt und durch ein Ampelsystem visualisiert:

| Rot | Der Report meldet fehlende oder unzureichende Daten. In Klammern wird angegeben, an wie vielen Stellen dies identifiziert wurde. |
| --- | --- |
| Gelb | Der Report wird gerade ausgeführt und hat noch keine Ergebnisse gemeldet. |
| Grün | Der Report meldet ein positives Ergebnis: Es wurden keine fehlenden oder unzureichenden Daten identifiziert. |

[![Übersichtsseite der Berichte](../../assets/images/de/i-doit-add-ons/viva/berichte/2-vb.png)](../../assets/images/de/i-doit-add-ons/viva/berichte/2-vb.png)

Ein Klick auf einen Report in der Übersichtsseite oder im Menübaum führt zu detailierten Ergebnissen. Die Berichte sind dabei alle ähnlich aufgebaut: Eine kleine Beschreibung, welche Aufgabe der Report hat, wird oberhalb der Seite angezeigt. Optional gesellt sich dazu ein Graph, der das Ergebnis visuell aufbereitet. Darunter folgt eine tabellarische Auflistung des Ergebnisses. Sie enthält pro Zeile die wichtigsten Informationen zu einer Stelle, die als unzureichend oder fehlerhaft identifiziert wurde. Ein Klick auf eine Zeile führt zur entsprechenden Stelle innerhalb des VIVA-Add-ons. Auf diese Weise kann der Anwender die Dokumentation schnell und unkompliziert nachbessern.

[![Ergebnis eines Berichts](../../assets/images/de/i-doit-add-ons/viva/berichte/3-vb.png)](../../assets/images/de/i-doit-add-ons/viva/berichte/3-vb.png)

Berichte können nicht nur innerhalb des VIVA-Add-ons, also innerhalb des Browsers betrachtet werden, sondern auch als PDF-Datei exportiert werden. Dies hat den Vorteil, dass ein Report auf einfache Weise weiterverschickt oder ausgedruckt werden kann. Die entsprechende Funktionalität bietet der Button _PDF_ am Anfang eines jeden Berichts.

!!! attention "Es bietet sich an, die Berichte regelmäßig auszuführen. Größere Änderungen an den dokumentierten Daten können somit sofort auf Vollständigkeit und formale Korrektheit überprüft werden, sofern dies durch einen automatischen Algorithmus abgebildet werden kann."
