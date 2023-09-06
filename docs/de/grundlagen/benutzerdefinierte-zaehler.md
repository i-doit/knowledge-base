# Benutzerdefinierte Zähler

Benutzerdefinierte Zähler sind unter **Verwaltung → Vordefinierte Inhalte → Benutzerdefinierte Zähler** zu finden. Hier werden alle konfigurierten Zähler in einer Liste dargestellt.

Oben in dieser Liste befindet sich eine Schaltfläche zum Hinzufügen von X neuen Zählern zu dieser Liste.

[![Benutzerdefinierter-Zähler](../assets/images/de/grundlagen/benutzerdefinierte-zaehler/1-bz.png)](../assets/images/de/grundlagen/benutzerdefinierte-zaehler/1-bz.png)

Für jeden definierten Zähler gibt es eine eigene Zeile in dieser Liste.

Jede Zeile hat eine vorangestellte Bezeichnung: **%COUNTER_**

Gefolgt von einem Textfeld **[_____________]**

Gefolgt von einer weiteren Beschriftung: **%**
Das bedeutet, dass der fertige Zähler wie folgt aussehen wird: **%COUNTER_CUSTOMTEXT%**

Neben der Namensdefinition haben Sie auch ein Informationsfeld, das Ihnen den aktuellen Status des Zählers anzeigt, welche Zahl dieser Zähler gerade erreicht hat.

Neben der Information über die aktuelle Zahl, die der Zähler erreicht hat, befindet sich eine Schaltfläche **Zurücksetzen**. Damit wird der Zähler auf 1 zurückgesetzt.<br>
Wenn Sie auf die Schaltfläche "Zurücksetzen" klicken, wird der Benutzer darüber informiert, dass dies nicht rückgängig gemacht werden kann und der Zähler unwiderruflich auf 1 zurückgesetzt wird. Der Benutzer wird gefragt, ob er fortfahren möchte. (Auswahl Ja/Nein)

Die letzte Spalte enthält eine Schaltfläche **Löschen**, um den Zähler dauerhaft aus der Konfiguration zu entfernen. Wenn der Benutzer darauf klickt, wird er gefragt, ob er diesen Zähler wirklich löschen möchte, da er dann nicht mehr verfügbar ist und nicht wiederhergestellt werden kann. (Auswahl Ja/Nein)

Die gesamte Konfiguration sieht wie folgt aus:

[![Benutzerdefinierter-Zähler](../assets/images/de/grundlagen/benutzerdefinierte-zaehler/2-bz.png)](../assets/images/de/grundlagen/benutzerdefinierte-zaehler/2-bz.png)

!!! attention ""
    Wenn man den Mauszeiger über das (Info-) Symbol bewegt, erscheint ein kleiner Text, der darauf hinweist, dass diese Funktion den Zähler auf 1 zurücksetzt und alle zukünftigen Verwendungen dieses Zählers diese neue Zählung verwenden werden.
    Es ist nicht möglich, zum aktuellen Stand zurückzukehren.

Es ist nur erlaubt, A-Z, a-z, 0-9, - und \_ für den Namen des Zählers einzugeben. Wenn etwas anderes in das Feld eingegeben wird und der Benutzer versucht zu speichern, wird der Zähler nicht gespeichert.

Er wird rot hervorgehoben und ein Infokasten weist darauf hin, dass nur "A-Z, a-z, 0-9, - und \_" verwendet werden dürfen. Nach dem Speichern werden alle Kleinbuchstaben in Großbuchstaben umgewandelt.

Nach dem Speichern wird das Textfeld deaktiviert, so dass der ZÄHLER nicht mehr verändert werden kann. Dies soll Probleme vermeiden. Der Speicherknopf ist ganz oben in der Konfiguration allgemein platziert.

Der Zähler kann überall verwendet werden, ein normaler **%COUNTER%** kann verwendet werden. Er wird manuell in das entsprechende Feld eingegeben. Jedes Mal, wenn der benutzerdefinierte Zähler verwendet wird, wird er um 1 hochgezählt.

Der benutzerdefinierte Zähler kann auch für führende Nullen auf die gleiche Weise verwendet werden, bereits vorhandene Zähler verwenden diese Konfiguration:

**%COUNTER_CUSTOMTEXT#N%**

**%COUNTER_CUSTOMTEXT#3%** würde zu 001 führen.

Zusätzlich gibt es eine [Experteneinstellung](../administration/verwaltung/mandanten-name-verwaltung/experteneinstellungen.md). Hier kann der Benutzer den Zähler bei Bedarf auf einen bestimmten Wert setzen.
Diese Zähler können über die Suche via `cmdb.counter.counter_` dort gefunden werden.

Alle Zähler sind in der Listenbearbeitung, der Massenbearbeitung, den Vorlagen und der automatisch generierten Inventarnummer aus der Objekttyp Konfiguration verfügbar/verwendbar.

Außerdem sind die Counter auch bei Textfeldern von benutzerdefinierten Kategorien verwendbar.

Diese Counter werden durch klick auf das [![icon](../assets/images/de/grundlagen/icons/riddle.png)](../assets/images/de/grundlagen/icons/riddle.png) Fragezeichen Symbol neben dem Feld aufgelistet.
