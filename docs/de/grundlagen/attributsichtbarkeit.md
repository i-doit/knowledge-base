# Attributsichtbarkeit
<!---Todo: Fixme--->
Die Sichtbarkeit von [Attributen](attributfelder.md) kann ab i-doit [Version 1.19](/display/de/Release+Notes+1.19) in den [CMDB Einstellungen](/display/de/CMDB+Einstellungen) konfiguriert werden.  
Es ist damit möglich bestimmte Attribute in [Kategorien](kategorien-und-attribute.md) oder/und auf der [Übersichtsseite von Objekttypen](objekttypen.md) auszublenden.

Die konfigurierte Sichtbarkeit wird für alle Benutzer übernommen.

[![attributsichtbarkeit](../assets/images/grundlagen/attributsichtbarkeit/1-as.png)](../assets/images/grundlagen/attributsichtbarkeit/1-as.png)

Rechte setzen
-------------
<!---Todo: Fixme--->
[Die Rechte](/display/de/Rechtesystem) zur Ansicht und zum Bearbeiten der Attributsichtbarkeit kann pro Benutzer(-gruppe) vergeben werden. So ist es beispielsweise möglich und oft auch ratsam, dass nur bestimmte Benutzergruppen Attribute ausblenden können.

[![rechte-setzen](../assets/images/grundlagen/attributsichtbarkeit/2-as.png)](../assets/images/grundlagen/attributsichtbarkeit/2-as.png)

Verwendung
----------

Wenn die Attributsichtbarkeit im Editiermodus geöffnet wird, können alle Kategorien (global, spezifisch und benutzerdefiniert) über ein Dropdown-Feld am oberen Rand ausgewählt werden. Neben diesem Drop-Down-Feld befindet sich die Schaltfläche "Konfiguration hinzufügen.

Wenn diese Schaltfläche verwendet wird, wird die Kategorie als Block in die aktuelle Schnittstelle geladen

Dieser Block enthält eine Liste aller Attribute, die in der Kategorie verwendet werden. In der Kopfzeile  dieses Blocks befinden sich Namen für Spalten: "Kategorie Bezeichnung", "Sichtbarkeit" und "Übersichtsseite".

Neben dem Namen der Kategorie befindet sich ein Dreieck, das nach unten im geöffnetem Zustand und nach rechts im geschlossenem Zustand zeigt , um den Block zu verdecken/zu verkleinern, so dass nur die Kopfzeile sichtbar bleibt.

Ganz rechts in jedem Block befindet sich ein rotes X-Symbol , mit dem Sie die Konfiguration für diese Kategorie entfernen können. Wenn es verwendet wird, wird der Block entfernt.

Standardmäßig ist die Sichtbarkeit für alle Attribute aktiviert "Angezeigt"[![button-angezeigt](../assets/images/grundlagen/attributsichtbarkeit/3-as.png)](../assets/images/grundlagen/attributsichtbarkeit/3-as.png). In diesem Zustand ist die Schaltfläche grün und mit "Angezeigt"  beschriftet. Wenn Sie darauf klicken, wird die Schaltfläche grau und mit "Ausgeblendet"[![button-ausgeblendet](../assets/images/grundlagen/attributsichtbarkeit/4-as.png)](../assets/images/grundlagen/attributsichtbarkeit/4-as.png)beschriftet.

**Objekt Bezeichnung**, **Zustand** und **CMDB-Status** können **nicht** ausgeblendet werden. In den entsprechenden Spalten steht ein Hinweis "Kann nicht ausgeblendet werden".

Wenn ein Attribut ausgeblendet ist, wird es in der Kategorie für alle Objekte (aller Objekttypen) nicht mehr angezeigt. Außerdem wird die Option zum ausblenden auf der Übersichtsseite automatisch deaktiviert.

Wenn ein Attribut ausgeblendet werden soll aber über die Validierungseinstellungen als Pflichtfeld definiert ist, erhält der Benutzer eine Information (Popup), wenn er auf die Schaltfläche "Speichern" klickt:

!!! popup "Popup"

    _Die folgenden Attribute wurden zuvor als Pflichtfelder definiert:_
    [LISTE ALLER BETROFFENEN ATTRIBUTE]
    _Wenn Sie diese auf der Oberfläche verbergen wird die Pflichtfelddefinition für sie aufgehoben. Möchten Sie fortfahren?_

Durch eine Ja/Nein-Auswahl wird diese Änderung bestätigt oder verworfen.

Die letzte Spalte erlaubt es, die ausgewählten Attribute nur auf Übersichtsseiten auszublenden, in den regulären Kategorien werden diese Attribute jedoch weiterhin angezeigt. Wenn ein Attribut in der Kategorie bereits ausgeblendet ist, ist die Auswahl hier deaktiviert.

[![attributsichtbarkeit-2](../assets/images/grundlagen/attributsichtbarkeit/5-as.png)](../assets/images/grundlagen/attributsichtbarkeit/5-as.png)