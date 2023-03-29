!!! info 
    Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/validierung-von-daten-und-eingaben-in-i-doit/)

Wer die Eindeutigkeit von [Attributen](../glossar.md) sicherstellen möchte oder bei der Pflege von bestimmten Feldern nur definierte Werte erwartet oder Felder zu Pflichtfeldern machen möchte, findet bei i-doit die entsprechenden Funktionen.

Überblick
---------

Folgende Anforderungen erfüllt die Validierung:

*   Festlegung vorgeschriebener Werte für einzelne Felder
*   Festlegung einer Eindeutigkeit des Feldwerts pro [Objekt](../grundlagen/struktur-it-dokumentation.md) ([Listen-Kategorie](../grundlagen/struktur-it-dokumentation.md))/[Objekttyp](../grundlagen/struktur-it-dokumentation.md)/[Mandant](../glossar.md) (global)
*   Definition des Feldes als Pflichtfeld bei der Erzeugung eines neuen Objekts/Bearbeitung der Informationen

Konfiguration
-------------

Du findest die Möglichkeit zur Festlegung dieser Einstellungen **Verwaltung → CMDB-Einstellungen → Validierung**. Im Auslieferungszustand wirst du hier noch keine Konfiguration vorfinden. Die Konfiguration erfolgt pro Kategorie. Wähle die Kategorie, aus der du ein oder mehrere Attribute validieren möchtest.

[![validierung-validieren](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/1-vup.png)](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/1-vup.png)

Nun stehen dir die Attribute der Kategorie zur Konfiguration der Validierung bereit. Mit der Schaltfläche **Pflichtfeld** kannst du eine Eingabe in dieses Feld durch die Benutzer voraussetzen. Es ist nicht möglich, die Kategorie zu speichern, wenn das Feld leer ist. Die Kennzeichnung in der Kategorie erfolgt über ein rotes Sternchen (\*) neben der Bezeichnung des Attributs.

Weiterhin kannst du angeben, ob das Attribut in deiner [IT-Dokumentation](../grundlagen/struktur-it-dokumentation.md) eindeutig sein muss, also maximal einmal vorhanden sein darf. Dies erfolgt über folgende Schaltflächen:

*   **Eindeutig (pro Objekt)**: Diese Option steht nur in Listen-Kategorien (Multi-Value-Kategorien) zur Verfügung. Wenn du sie aktivierst, ist es innerhalb dieses Objekts nicht möglich, denselben Wert in zwei Einträgen dieser Kategorie wiederholt zu verwenden. Es ist jedoch möglich, den eingetragenen Wert in anderen Objekten erneut zu pflegen.
*   **Eindeutig (pro Objekttyp)**: Wenn du die Option pro Objekttyp aktivierst, darf derselbe Wert nicht in einem weiteren Objekt dieses Typs vorhanden sein.
*   **Eindeutig (Global)**: Der eingetragene Wert ist im gesamten Mandanten eindeutig und kann in diesem Attribut in keinem anderen Objekt erneut verwendet werden.

Sollte ein Wert für ein Feld bereits in Verwendung sein, wird der Benutzer durch einen Hinweis darüber informiert, dass die doppelte Verwendung dieses Wertes nicht möglich ist, wenn er den Eintrag speichern möchte.

[![validierung-alarm](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/2-vup.png)](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/2-vup.png)

Die Auswahl **Attribut muss** steht dort zur Verfügung, wo nicht bereits eine Kategorie-interne Validierung erfolgt. Ein Datumsfeld ist beispielsweise generell nur in der Lage ein Datum aufzunehmen und zu speichern. [Dialog-Plus-Felder](../grundlagen/attributfelder.md) lassen ausschließlich die festgelegten Werte zur Auswahl zu. Derartige Felder können daher nicht auf einen bestimmten Feldwert beschränkt werden.

Insofern keine Kategorie-interne Validierung vorliegt, kannst du entweder bestimmte Inhaltstypen festlegen, denen der Wert entsprechen muss oder eigene Textwerte vorgeben, aus denen die Anwender auswählen können.

!!! info "Spezialfälle"

    Es gibt Kategorien, die bereits über eine interne Validierung verfügen, die sich weder abschalten, noch anpassen lässt. Beispielsweise wird in der Kategorie "Hostadresse" die Angabe einer IP-Adresse überprüft, ob sie entweder dem Standard für IPv4 oder IPv6 entspricht.

Falls du den Anwendern eigene Werte vorgibst, kannst du optional eine Drop-Down-Liste erzeugen, aus der die Anwender die Werte wählen können. So kann der Feldwert ausschließlich aus einer Liste ausgewählt werden, deren Inhalt nur in der Verwaltung in der Konfiguration der Validierung verändert werden kann.

[![validierung-dropdown](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/3-vup.png)](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/3-vup.png)

Wenn du alle Felder der Kategorie gemäß deiner Vorgaben konfiguriert hast, speichere die Einstellungen über die Schaltfläche **Speichern**. Wiederhole diese Schritte für alle Kategorien, in denen du Werte validieren und/oder als Pflichtfeld deklarieren möchtest.

Pro Kategorie, für die du eine Validierung anlegst, wird ein Bereich in der Konfiguration erzeugt. Diese Bereiche lassen sich zur Steigerung der Übersichtlichkeit auf- und zuklappen, indem du die Kopfzeile dieser Bereiche anklickst, die den Titel der Kategorie beinhalten. Solltest du eine Konfiguration einer Kategorie nicht länger benötigen, kannst du diese über das X am Ende dieser Zeile vollständig entfernen.

[![validierung-speichern](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/4-vup.png)](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/4-vup.png)

!!! info "Vorsicht beim Entfernen"

    Wenn du die Konfiguration einer Kategorie entfernst, gehen die Validierungseinstellungen unwiderruflich verloren.

Validierungs-Cache erneuern
---------------------------

In der Konfiguration ist es dir im oberen Bereich auch möglich, den Validierungs-Cache zu erneuern. In der Regel wird dieser beim Anlegen einer neuen Konfiguration automatisch geleert. In seltenen Fällen kann es jedoch vorkommen, dass das System diese Aufgabe nicht übernimmt. Wenn du also feststellst, dass eine Validierungskonfiguration in einer Kategorie nicht greift oder eine entfernte Validierung weiterhin aktiv zu sein scheint, leere den Cache, damit das System die veränderten Einstellungen erkennt.

[![validierung-erneuern](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/5-vup.png)](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/5-vup.png)

Reguläre Ausdrücke testen
-------------------------

Falls du vorgeben möchtest, dass Felder regulären Ausdrücken entsprechen müssen und dir nicht sicher bist, ob der von dir verwendete reguläre Ausdruck korrekt ist, kannst du über diesen Bereich den regulären Ausdruck eintragen und prüfen, ob die von dir erwartete Eingabe im Feld zugelassen würde.

[![validierung-testen](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/6-vup.png)](../assets/images/de/effizientes-dokumentieren/validierung-und-pflichtfelder/6-vup.png)
