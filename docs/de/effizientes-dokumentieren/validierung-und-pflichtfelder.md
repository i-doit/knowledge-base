Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/validierung-von-daten-und-eingaben-in-i-doit/)

**Inhaltsverzeichnis**

*   1[Überblick](#ValidierungundPflichtfelder-Überblick)
*   2[Konfiguration](#ValidierungundPflichtfelder-Konfiguration)
*   3[Validierungs-Cache erneuern](#ValidierungundPflichtfelder-Validierungs-Cacheerneuern)
*   4[Reguläre Ausdrücke testen](#ValidierungundPflichtfelder-ReguläreAusdrücketesten)

  

Wer die Eindeutigkeit von [Attributen](/display/de/Glossar) sicherstellen möchte oder bei der Pflege von bestimmten Feldern nur definierte Werte erwartet oder Felder zu Pflichtfeldern machen möchte, findet bei i-doit die entsprechenden Funktionen.

Überblick
---------

Folgende Anforderungen erfüllt die Validierung:

*   Festlegung vorgeschriebener Werte für einzelne Felder
*   Festlegung einer Eindeutigkeit des Feldwerts pro [Objekt](/display/de/Struktur+der+IT-Dokumentation) ([Listen-Kategorie](/display/de/Struktur+der+IT-Dokumentation))/[Objekttyp](/display/de/Struktur+der+IT-Dokumentation)/[Mandant](/display/de/Glossar) (global)
*   Definition des Feldes als Pflichtfeld bei der Erzeugung eines neuen Objekts/Bearbeitung der Informationen

Konfiguration
-------------

Du findest die Möglichkeit zur Festlegung dieser Einstellungen **`Verwaltung` → `CMDB-Einstellungen` → **`Validierung`****. Im Auslieferungszustand wirst du hier noch keine Konfiguration vorfinden. Die Konfiguration erfolgt pro Kategorie. Wähle die Kategorie, aus der du ein oder mehrere Attribute validieren möchtest.

![](/download/attachments/18808895/image2021-10-4_8-50-3.png?version=1&modificationDate=1633330203470&api=v2&effects=drop-shadow)

Nun stehen dir die Attribute der Kategorie zur Konfiguration der Validierung bereit. Mit der Schaltfläche **`Pflichtfeld`** kannst du eine Eingabe in dieses Feld durch die Benutzer voraussetzen. Es ist nicht möglich, die Kategorie zu speichern, wenn das Feld leer ist. Die Kennzeichnung in der Kategorie erfolgt über ein rotes Sternchen (\*) neben der Bezeichnung des Attributs.

Weiterhin kannst du angeben, ob das Attribut in deiner [IT-Dokumentation](/display/de/Struktur+der+IT-Dokumentation) eindeutig sein muss, also maximal einmal vorhanden sein darf. Dies erfolgt über folgende Schaltflächen:

*   `**Eindeutig (pro Objekt)**`: Diese Option steht nur in Listen-Kategorien (Multi-Value-Kategorien) zur Verfügung. Wenn du sie aktivierst, ist es innerhalb dieses Objekts nicht möglich, denselben Wert in zwei Einträgen dieser Kategorie wiederholt zu verwenden. Es ist jedoch möglich, den eingetragenen Wert in anderen Objekten erneut zu pflegen.
*   **`Eindeutig (pro Objekttyp)`**: Wenn du die Option pro Objekttyp aktivierst, darf derselbe Wert nicht in einem weiteren Objekt dieses Typs vorhanden sein.
*   `**Eindeutig (Global)**`: Der eingetragene Wert ist im gesamten Mandanten eindeutig und kann in diesem Attribut in keinem anderen Objekt erneut verwendet werden.

Sollte ein Wert für ein Feld bereits in Verwendung sein, wird der Benutzer durch einen Hinweis darüber informiert, dass die doppelte Verwendung dieses Wertes nicht möglich ist, wenn er den Eintrag speichern möchte.

![Optionen eines Feldes einer Multivalue-Kategorie](/download/attachments/18808895/Validierung%20Multi-Value.png?version=1&modificationDate=1449160102212&api=v2&effects=drop-shadow "Optionen eines Feldes einer Multivalue-Kategorie")

Die Auswahl `**Attribut muss**` steht dort zur Verfügung, wo nicht bereits eine Kategorie-interne Validierung erfolgt. Ein Datumsfeld ist beispielsweise generell nur in der Lage ein Datum aufzunehmen und zu speichern. [Dialog-Plus-Felder](/display/de/Attributfelder) lassen ausschließlich die festgelegten Werte zur Auswahl zu. Derartige Felder können daher nicht auf einen bestimmten Feldwert beschränkt werden.

Insofern keine Kategorie-interne Validierung vorliegt, kannst du entweder bestimmte Inhaltstypen festlegen, denen der Wert entsprechen muss oder eigene Textwerte vorgeben, aus denen die Anwender auswählen können.

Spezialfälle

Es gibt Kategorien, die bereits über eine interne Validierung verfügen, die sich weder abschalten, noch anpassen lässt. Beispielsweise wird in der Kategorie "Hostadresse" die Angabe einer IP-Adresse überprüft, ob sie entweder dem Standard für IPv4 oder IPv6 entspricht.

Falls du den Anwendern eigene Werte vorgibst, kannst du optional eine Drop-Down-Liste erzeugen, aus der die Anwender die Werte wählen können. So kann der Feldwert ausschließlich aus einer Liste ausgewählt werden, deren Inhalt nur in der Verwaltung in der Konfiguration der Validierung verändert werden kann.

![](/download/attachments/18808895/Validierung%20eigene%20Werte.png?version=1&modificationDate=1449160102178&api=v2&effects=drop-shadow)

Wenn du alle Felder der Kategorie gemäß deiner Vorgaben konfiguriert hast, speichere die Einstellungen über die Schaltfläche `**Speichern**`. Wiederhole diese Schritte für alle Kategorien, in denen du Werte validieren und/oder als Pflichtfeld deklarieren möchtest.

Pro Kategorie, für die du eine Validierung anlegst, wird ein Bereich in der Konfiguration erzeugt. Diese Bereiche lassen sich zur Steigerung der Übersichtlichkeit auf- und zuklappen, indem du die Kopfzeile dieser Bereiche anklickst, die den Titel der Kategorie beinhalten. Solltest du eine Konfiguration einer Kategorie nicht länger benötigen, kannst du diese über das X am Ende dieser Zeile vollständig entfernen.

![](/download/attachments/18808895/Validierung%20Kategorieliste.png?version=2&modificationDate=1449219527643&api=v2&effects=drop-shadow)

Vorsicht beim Entfernen

Wenn du die Konfiguration einer Kategorie entfernst, gehen die Validierungseinstellungen unwiderruflich verloren.

Validierungs-Cache erneuern
---------------------------

In der Konfiguration ist es dir im oberen Bereich auch möglich, den Validierungs-Cache zu erneuern. In der Regel wird dieser beim Anlegen einer neuen Konfiguration automatisch geleert. In seltenen Fällen kann es jedoch vorkommen, dass das System diese Aufgabe nicht übernimmt. Wenn du also feststellst, dass eine Validierungskonfiguration in einer Kategorie nicht greift oder eine entfernte Validierung weiterhin aktiv zu sein scheint, leere den Cache, damit das System die veränderten Einstellungen erkennt.

![](/download/attachments/18808895/image2021-10-4_9-7-19.png?version=1&modificationDate=1633331239877&api=v2&effects=drop-shadow)

Reguläre Ausdrücke testen
-------------------------

Falls du vorgeben möchtest, dass Felder regulären Ausdrücken entsprechen müssen und dir nicht sicher bist, ob der von dir verwendete reguläre Ausdruck korrekt ist, kannst du über diesen Bereich den regulären Ausdruck eintragen und prüfen, ob die von dir erwartete Eingabe im Feld zugelassen würde.

![](/download/attachments/18808895/image2021-10-4_9-7-49.png?version=1&modificationDate=1633331270048&api=v2&effects=drop-shadow)