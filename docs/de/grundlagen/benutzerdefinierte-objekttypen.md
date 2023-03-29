# Benutzerdefinierte Objekttypen

In der Standard-Installation von _i-doit_ wird eine Vielzahl von [Objekttypen](../glossar.md) bereitgestellt. Es ist jedoch wahrscheinlich , dass du [Objekte](../glossar.md) dokumentieren möchtest, die sich den bestehenden Objekttypen nicht zuordnen lassen. Aus diesem Grund ist es möglich, eigene Objekttypen, also benutzerdefinierte Objekttypen, zu erzeugen und auszuprägen.

Zugriff auf die Konfiguration

Die Möglichkeit, benutzerdefinierte Objekttypen zu erstellen findest du unter **Verwaltung → CMBD-Einstellungen → Objekttyp-Konfiguration → [Objekttyp-Gruppe]**. Hier ist es dir möglich, neue Objekttypen zu erstellen und bestehende Objekttypen zu bearbeiten. 

Alternativ kannst du über die Bezeichnung der [Objekttypgruppe](../glossar.md) oberhalb der [Objekttyp-Liste](../glossar.md) im [Baum-Menü](../glossar.md) auf der linken Seite ebenfalls zur Objekttyp-Konfiguration gelangen. Klicke hierzu nur auf den Link und du befindest dich direkt in der Auflistung der Objekttypen dieser Objekttypgruppe und kannst diese bearbeiten.

[![objektsicht](../assets/images/de/grundlagen/benutzerdefinierte-objekttypen/1-bo.png)](../assets/images/de/grundlagen/benutzerdefinierte-objekttypen/1-bo.png)

In der Listenansicht der Objekttyp-Konfiguration verwende die Schaltfläche **Neu** um mit der Konfiguration eines eigenen Objekttyps zu beginnen.

[![liste-objekttyp-konfiguration](../assets/images/de/grundlagen/benutzerdefinierte-objekttypen/2-bo.png)](../assets/images/de/grundlagen/benutzerdefinierte-objekttypen/3-bo.png)

Nun kannst du deinen eigenen Objekttyp konfigurieren.

[![objekttyp-konfiguration](../assets/images/de/grundlagen/benutzerdefinierte-objekttypen/3-bo.png)](../assets/images/de/grundlagen/benutzerdefinierte-objekttypen/3-bo.png)

Felder in der Konfiguration
---------------------------

Folgende Felder werden in der Konfiguration neuer und bestehender Objekttypen angezeigt:

*   **ID**
    Die ID ist eine fortlaufende Nummer, die vom System vergeben wird. Sie ist eindeutig und erlaubt die Identifikation des Objekttyps. Eine manuelle Änderung ist nicht möglich.

*   **Übersetzte Bezeichnung**
    Hier kannst du prüfen, ob die Sprachkonstante, die du verwendest in der aktuell gewählten Sprache korrekt übersetzt wird, falls du eine eigene Sprachdatei verwendest

*   **Sprachkonstante/Bezeichnung**
    In diesem Feld ist es dir möglich, eine [Sprachkonstante](../administration/mehrsprachigkeit-und-uebersetzungen.md) oder eine Bezeichnung im Klartext zu vergeben. Solltest du _i-doit_ multilingual nutzen, verwende bitte eine Konstante, die du in den eigenen Sprachdateien übersetzt.

*   **SYSID Präfix**
    Das [SYSID](../glossar.md) Präfix wird bei der Erzeugung der SYSID für alle Objekte dieses Typs eingesetzt. Wenn du dieses Feld leer lässt, wird das Standard-Präfix **SYSID_ **verwendet. Andernfalls werden die SYSIDs mit deinem eigenen Präfix generiert. Bleibt das Feld unangetastet, fließt der aktuelle Unix Timestamp beim Erstellen eines Objektes in die SYSID ein. Bei eigenem Präfix wird die Objekt-ID herangezogen.

*   **Automatische Inventarnummer**
    Wenn du möchtest, dass i-doit für Objekte dieses Typs eigenständig individuelle Inventarnummern generiert, kannst du das Schema hier hinterlegen. Hierfür stehen dir Platzhalter zur Verfügung, die du dir über das blaue Fragezeichen am Ende der Zeile einblenden kannst. Es ist möglich, diese Platzhalter miteinander sowie mit Freitext zu kombinieren.

*   **Position im Baum**
    Wenn du keine alphabetische Sortierung für die Objekttypen im Baum-Menü der linken Seite verwendest, kannst du über die Sortierung eine eigene Reihenfolge erzeugen. Die Sortierung erfolgt auf Basis der Zahlenwerte in aufsteigender Reihenfolge.

*   **Objekt Farbe**
    Hierbei kannst du jedem Objekttyp eine eigene Farbe zuordnen. Diese farblichen Markierungen findest du zum Beispiel im [CMDB-Explorer](../auswertungen/cmdb-explorer/index.md) sowie in der grafischen Darstellung von Schränken wieder, damit dir der Überblick erleichtert wird.

*   **Objekttyp-Gruppe**
    Solltest du dich während der Konfiguration umentscheiden und deinen Objekttyp  einer anderen Gruppe zuweisen wollen oder bereits bestehende Objekttypen in eine andere Gruppe verschieben wollen, kannst du über diese Einstellung die Objekttyp-Gruppe anpassen.

*   **Spezifische Kategorie**
    In einem Drop-Down-Menü kannst du optional die gewünschte [spezifische Kategorie](../glossar.md) auswählen und mit dem Objekttyp verknüpfen. Bitte beachte, dass sich spezifische Kategorien gegenseitig ausschließen und daher nur die Auswahl von maximal einer spezifischen Kategorie möglich ist.

*   **Selbstdefiniert**
    Die Information **selbstdefiniert** gibt dir eine Info darüber, ob der Objekttyp bereits in der Standard-Installation enthalten ist oder von einem Anwender selbst erstellt wurde. Standard-Objekttypen können nicht gelöscht, sondern nur ausgeblendet werden.

*   **Standort**
    In dieser Auswahl ist es dir möglich zu definieren, ob Objekte dieses Typs als physikalischer Standort für weitere Objekte dienen sollen. Objekte, die nicht als physikalischer Standort dienen sollen, tauchen nicht im Standort-Browser auf.

*   **Beziehungsmaster**
    Jede [Objekt-Beziehung](objekt-beziehungen.md) verfügt über eine Richtung bzw. eine Abhängigkeit. Wenn du ein Objekt bearbeitest und ein anderes Objekt verknüpfst, ist das verknüpfte Objekt immer abhängig vom aktuell in Bearbeitung befindlichen Objekt. Handelt es sich jedoch bei dem verknüpften Objekt um ein Objekt, dessen Objekttyp als Beziehungsmaster konfiguriert wurde, nimmt das Objekt automatisch die Master-Rolle in der Beziehung ein.

*   **Positionierbar im Schrank**
    Hier kannst du festlegen, ob Objekte dieses Typs innerhalb von Höheneinheiten in einem Rack verbaut werden sollen. Bei deaktivierter Auswahl stehen die Attribute für eine Positionierung im Rack nicht zur Verfügung.

*   **Anzeige im Menübaum**
    Die Anzeige im Menübaum kann über diese Option deaktiviert werden. Wenn du entweder Standard-Objekttypen nicht benötigst und diese ausblenden möchtest oder möchtest, dass dein eigener Objekttyp noch nicht im Menübaum auftaucht, kannst du hier die Sichtbarkeit für alle Benutzer deaktivieren.

*   **Bild**
    Hier ist es dir möglich, ein Standard-Objektbild für die Informationszeile auszuwählen.

*   **Icon**
    Du kannst das Icon, welches im Menü-Baum neben deinem Objekttyp angezeigt wird, in dieser Auswahl festlegen. Gib hierfür den Pfad, beginnend ab dem _i-doit_\-Installationsverzeichnis an, unter dem das Icon zu finden ist.

*   **Konstante**
    Du kannst eine [Konstante](../glossar.md) festlegen, über die Datenbankabfragen auf den Objekttyp möglich sind. Das Standard-Schema hierfür lautet in _i-doit_ **C__OBJTYPE__[NAME]**, wobei **[NAME]** durch die Bezeichnung des Objekttyps zu ersetzen ist. _i-doit_ erzeugt automatisch eine Konstante, die statt des Namens den aktuellen Unix Timestamp enthält. Für eine bessere Lesbarkeit (bei SQL-Reports o. ä,) ist der Unix Timestamp durch den stilisierten Namen des Objekttyps zu ersetzen (bestenfalls nur ASCII-Großbuchstaben).

*   **Default-Template**
    Wenn du mit der [Template](../effizientes-dokumentieren/templates.md)\-Funktion bereits Templates erzeugt hast, kannst du hier ein Template auswählen, nach dessen Vorlage neue Objekte automatisch befüllt werden. So kannst du Werte, die bei allen Objekten dieses Typs gleich sind, vorbefüllen. Diese vorbefüllten Werte kannst du jederzeit anpassen, falls dies notwendig ist.

*   **Übersichtsseite als Standard Ansicht**
    Mit dieser Auswahl legst du fest, ob beim Aufruf eines Objekts dieses Typs die [Übersichtsseite](../glossar.md) oder lediglich die Kategorie **Allgemein** angezeigt werden soll. Standardmäßig ist diese Option auf "Nein" gesetzt. Wenn sie auf "Ja" steht, wird die zuvor ausgewählte spezifische Kategorie auf der Übersichtsseite automatisch hinzugefügt.

*   **Kategorien**
    In dieser Auswahl prägst du deinen Objekttypen aus. Jede [Kategorie](../glossar.md), deren Checkbox du aktivierst, wird dir innerhalb deines Objekttyps zur Verfügung stehen. In der rechten Spalte legst du fest, welche Kategorien auf der Übersichtsseite angezeigt werden sollen. Diese Auswahl ist nur möglich, wenn zuvor die Übersichtsseite als Standard-Ansicht aktiviert wurde. Über die schraffierten Streifen lässt sich die Reihenfolge der Kategorien per Drag'n'Drop bestimmen.

*   **Beschreibung**
    Hier ist es dir möglich, Hinweise und Notizen zu deinem Objekttyp zu hinterlegen.

Sobald deine Konfiguration abgeschlossen ist, kannst du über die Schaltfläche **Speichern** deine Einstellungen sichern. Dein eigener Objekttyp steht dir nun innerhalb der ausgewählten Objekttypgruppe zur Verfügung.
