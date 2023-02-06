# Listenansicht Konfigurieren

Die Ansicht der [Objekt-Listen](index.md) kann pro Liste und pro Benutzer individuell konfiguriert werden.

Konfiguration aufrufen
----------------------

Die Konfiguration der jeweiligen Objekt-liste wird über den Button [![systemeinstellungen](../../assets/images/de/grundlagen/listenansicht-konfigurieren/1-lk.png)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/1-lk.png) in der [Navigations- und Filterleiste](navigieren-und-filtern.md) erreicht. Alternativ ist der Weg über **Verwaltung → Benutzereinstellungen → Objekt-Listen → [Objekttyp]**.

[![objekt-listen](../../assets/images/de/grundlagen/listenansicht-konfigurieren/2-lk.png)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/2-lk.png)

Attribute auswählen
-------------------
<!---Todo: Fixme--->
Ähnlich wie beim [Report Manager](/display/de/Report+Manager) werden über die Auswahl der Kategorie und dem dort enthaltenen Attribut die Spalten definiert.

Zuerst wird eine [globale, spezifische](../struktur-it-dokumentation.md) oder [benutzerdefinierte](../benutzerdefinierte-kategorien.md) Kategorie im Drop-Down-Menü ausgewählt. Über ein Textfeld lässt sich die Liste der Kategorien filtern.

Bei Auswahl einer Kategorie erscheinen diejenigen Attribute, die sich als Spalte definieren lassen. Bei Klick auf den Button [![plus](../../assets/images/de/grundlagen/listenansicht-konfigurieren/3-lk.png)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/3-lk.png) wird das Attribut zu den gewählten Attributen hinzugefügt.

Die Liste der gewählten Attribute lässt sich manipulieren. Per Drag'n'Drop ist die Reihenfolge zu beeinflussen. Je höher das Attribut in der Auswahl, desto weiter links wird es in der Objekt-Liste dargestellt. Über den Button [![delete](../../assets/images/de/grundlagen/listenansicht-konfigurieren/4-lk.png)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/4-lk.png) wird ein Attribut entfernt.

!!! info "Einschränkungen"

    Für die Auswahl von Attributen gelten folgende Einschränkungen:

    *   Es stehen nicht alle Attribute aller Kategorien zur Verfügung.
    *   Die Anzahl an Attributen ist auf **10** beschränkt.

Attribute, die aus [Listen-Kategorien (Multi-Value)](../struktur-it-dokumentation.md) stammen, können unterschiedlich dargestellt werden. Über das Drop-Down-Menü **Gruppierte Daten darstellen als** können die Attribute entweder komma-separiert nebeneinander oder als Liste untereinander dargestellt werden. Beispiel hierfür ist das Attribut **Hostadressen** der Kategorie **Hostadresse**.

!!! success "Tipp"

    In der Standard-Installation von i-doit wird in jeder Objekt-Liste die [ID](../eindeutige-referenzierungen.md) angezeigt. Da diese für den normalen Gebrauch keine Rolle spielt, kann die entsprechende Spalte aus den Listen entfernt werden. Dies fördert zudem die Übersichtlichkeit.

!!! info "Performance"

    Objektlisten mit einer großen Anzahl an Attributen können zu einer verringerten Performance führen. Sollten Leistungseinbußen festgestellt werden, sollte die Anzahl der ausgewählten Attribute verringert oder die [Systemressourcen](../../installation/systemvoraussetzungen.md) erweitert werden.

Spalten vorsortieren
--------------------

Welche Sortierung bereits beim Laden der Objekt-Liste vorgenommen werden soll, kann ebenfalls konfiguriert werden. Neben einigen Attributen existiert ein Auswahl-Button, der angeklickt werden kann. Im Drop-Down-Menü **Sortieren** kann eine auf- oder absteigende Sortierung des gewählten Attributs festgelegt werden.

Ohne festgelegte Sortierung werden die Objekte nach deren [ID](../eindeutige-referenzierungen.md) sortiert.

!!! info "Einschränkungen"

    Für die Sortierung von Attributen gelten folgende Einschränkungen:

    *   Nicht alle Attribute können sortiert werden.
    *   Die nachträgliche Sortierung über die Spaltenüberschriften ist bei einer Objekt-Liste mit mehr als **10.000** Objekten nicht möglich. Diese [Limitierung kann angepasst werden](erweiterte-einstellungen.md).

Filterung beeinflussen
----------------------

Eine Objekt-Liste kann bereits beim Laden gefiltert werden. Hierzu wird im Drop-Down-Menü **Standardfilter** das Attribut ausgewählt und im Textfeld rechts daneben der Wert angegeben, nach dem gefiltert werden soll.  
Wenn man in der Listenansicht nicht jedes mal ein zu filterndes Attribut auswählen möchte kann der Filter für alle Felder gesetzt werden.

Arten, ein Objekt zu öffnen
---------------------------

Häufig genügt nicht der Blick auf die Objekt-Liste, um alle geforderten Attribute abzurufen. Daher kann ein Objekt über die Liste geöffnet werden. Hierfür existieren zwei Wege:

*   Objekt öffnen durch Klicken auf die entsprechende Zeile in der Objekt-Liste: Hierzu ist die Checkbox **Bei dieser Liste soll das Objekt über den Klick auf die Zeile geöffnet werden.** zu wählen.
*   Über die Auswahl der Checkbox eines Objekts und den Button **Editieren** wird das Objekt geöffnet (und gleichzeitig editiert).

Die erste Option kann für alle Benutzer und alle Objekt-Listen gleichzeitig aktiviert werden. Unter **Verwaltung → Systemtools → Cache / Datenbank → Datenbank** befindet sich der Button **Zeilenklick in Objektlisten aktivieren**.

Konfiguration zurücksetzen
--------------------------

Zu jeder Objekt-Liste existiert eine Standard-Konfiguration. Soll auf den Standard zurückgesetzt werden, drückt man auf den Button **Liste auf Standard zurücksetzen**.

Konfiguration als Standard setzen
---------------------------------

Damit eine Objekt-Liste zum Standard wird, genügt im Bereich **Konfiguration als Standard definieren** ein Klick auf den Button **Als Standard definieren**. Bereits von Benutzern geänderte Objekt-Listen werden dadurch nicht beeinflusst. Diese Änderung betrifft also neue Benutzer und Benutzer, die eine Objekt-Liste noch nicht geändert haben.

[![standard-setzen](../../assets/images/de/grundlagen/listenansicht-konfigurieren/5-lk.png)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/5-lk.png)

Konfiguration anderen Benutzern zuweisen
----------------------------------------

Wenn anderen Benutzern eine bestimmte Objekt-Liste vorgegeben werden soll, werden diese im Bereich **Konfiguration anderen Benutzern zuweisen** über einen [Objekt-Browser](../attributfelder.md) ausgewählt. Anschließend wird die Auswahl über den Button **Konfiguration überschreiben** bestätigt.

[![benutzer-zuweisen](../../assets/images/de/grundlagen/listenansicht-konfigurieren/6-lk.png)](../../assets/images/de/grundlagen/listenansicht-konfigurieren/6-lk.png)

Speichern der Konfiguration
---------------------------

Über den Button **Speichern** werden alle Änderungen an der Konfiguration übernommen.

!!! info "Browser Cache"

    Sollte die Listenansicht beim nächsten Aufruf der Objekt-Liste nicht mit der Konfiguration übereinstimmen, hilft es, den Cache des Webbrowsers zu leeren.

Rechte zum Bearbeiten der Listenansicht
---------------------------------------
<!---Todo: Fixme--->
Die [Rechteverwaltung](/pages/viewpage.action?pageId=42303548) erlaubt das Vergeben von Rechten, welche Person oder Personengruppe die Listenansicht konfigurieren und anderen Benutzern vorgeben darf.