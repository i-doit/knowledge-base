# Logbuch

Jede Änderung an der [IT-Dokumentation](../glossar.md) wird von i-doit in einem Logbuch hinterlegt. Auf diese Weise lässt sich der [Lebenszyklus der IT-Dokumentation](lebens-und-dokumentationszyklus.md) problemlos nachvollziehen.

## Globales Logbuch

Das Logbuch, in dem alle Änderungen einfließen, befindet sich unter **Extras → CMDB → Logbuch → Listenansicht Logbuch**. Einträge können dort nach verschiedenen Parametern gefiltert werden. Wenn möglich, enthält ein Eintrag zudem die genauen Änderungen (Welcher Wert wurde von was zu was geändert?).

[![globales-logbuch](../assets/images/de/grundlagen/logbuch/1-lb.png)](../assets/images/de/grundlagen/logbuch/1-lb.png)

Die letzte Änderung ist auf jeder Seite im unteren Bereich nachvollziehbar.

[![letzte-änderung](../assets/images/de/grundlagen/logbuch/2-lb.png)](../assets/images/de/grundlagen/logbuch/2-lb.png)

## Logbuch pro Objekt

Das Logbuch lässt sich nicht nur global, sondern auf ein einzelnes [Objekt](../glossar.md) beschränkt anzeigen. Jedem [Objekttyp](../glossar.md) ist die [Kategorie](../glossar.md) **Logbuch** fest zugeordnet. In der **Objektsicht** ist das Logbuch über das Buch-Icon oberhalb des Kategorie-Baums zu erreichen.

[![objekt-logbuch](../assets/images/de/grundlagen/logbuch/3-lb.png)](../assets/images/de/grundlagen/logbuch/3-lb.png)

Die Filter-Funktionen und die Detail-Tiefe entsprechen denen des globalen Logbuchs.

[![logbuch-filter](../assets/images/de/grundlagen/logbuch/4-lb.png)](../assets/images/de/grundlagen/logbuch/4-lb.png)

## Logbuch pro Service

Zu jedem Service, der in i-doit modelliert ist, existiert ein Logbuch, dass die Änderungen an allen Service-Komponenten (oder Sub-Services) enthält. Die Kategorie heißt **Service Logbuch** und kann durch die Kategorie **Service** denjenigen Objekttypen hinzugefügt werden, die Services repräsentieren.

[![logbuch-service](../assets/images/de/grundlagen/logbuch/5-lb.png)](../assets/images/de/grundlagen/logbuch/5-lb.png)

## Logbuch konfigurieren

Die Konfiguration des Logbuchs befindet sich unter **Extras → CMDB → Logbuch → Logbuch** Konfiguration.

[![logbuch-konfigurieren](../assets/images/de/grundlagen/logbuch/6-lb.png)](../assets/images/de/grundlagen/logbuch/6-lb.png)

Änderungen wirken sich **nicht** auf bereits existierende Einträge aus.

In der Konfiguration lässt sich die **Benutzerkennung** ändern, die zu jedem Eintrag hinterlegt wird. Als Standard gilt der [Objekttitel](../glossar.md) des Personen-Objekts, meist bestehend aus Vor- und Nachnamen.

!!! success "Anonymisierung"
    Wird die **Benutzerkennung** auf einen festen Wert, beispielsweise auf "Anonymous", geändert, wird das Logbuch anonymisiert. Es lässt sich somit nicht mehr nachvollziehen, wer welche Änderungen getätigt hat.

Die Einstellung für die **struktur-it-dokumentation.mdMaximalzahl kombinierter Änderungenstruktur-it-dokumentation.md** bewirkt, dass gleichzeitige Änderungen zusammengefasst werden. Die Detailtiefe flacht dadurch ab, aber die Performance bei Importen wird erhöht.

### Logbucheinträge zu bereinigten Objekten vollständig löschen

Diese Konfiguration des Logbuch ist unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Logbuch → Logbucheinträge zu bereinigten Objekten vollständig löschen** zu finden.

[![logbucheinträge-bereinigen](../assets/images/de/grundlagen/logbuch/12-lb.png)](../assets/images/de/grundlagen/logbuch/12-lb.png)

Diese Einstellung ist Standardmäßig auf **Nein** gestellt. Stellt man diese Einstellung auf **Ja** wird nach bereinigen eines Objekts der Logbucheintrag des Objekts ebenfalls vollständig gelöscht.

## Logbuch aktivieren/deaktivieren

Unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Logbuch → Detaillierte CMDB Änderungen protokollieren** kann das Logbuch aktiviert bzw. deaktiviert werden.

## Eigene Einträge

Zu jedem Objekt kann ein neuer Eintrag im Logbuch generiert werden. Dazu wird innerhalb des Objekts die Kategorie **Logbuch** aufgerufen (siehe oben). Anschließend wird über den Button **Neu** das Formular für einen neuen Eintrag angezeigt. Hierbei können **Alert Level**, **Nachricht** und **Beschreibung** angegeben werden. Nachdem man auf den Button **Speichern** geklickt hat, erscheint der Eintrag im Logbuch.

[![eigene-einträge](../assets/images/de/grundlagen/logbuch/7-lb.png)](../assets/images/de/grundlagen/logbuch/7-lb.png)

## Einträge aus Dritt-Systemen

Das Logbuch nimmt neue Einträge aus Dritt-Systemen entgegen, beispielsweise durch [Importe](../daten-konsolidieren/index.md), [Service Desks](../automatisierung-und-integration/service-desk/index.md), [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md) und die [API](../i-doit-add-ons/api/index.md).

## Ältere Einträge archivieren und wiederherstellen

Über **Extras → CMDB → Logbuch → Archivieren** lässt sich konfigurieren, ob ältere Einträge archiviert werden sollen. Dabei ist anzugeben, ob welchem Alter (in Tagen) ein Eintrag archiviert wird. Hilfreich ist diese Funktion, wenn das Logbuch sehr groß ist und die Auswertung durch lange Wartezeiten behindert wird. Archivierte Einträge werden in eine separate Datenbank-Tabelle ausgelagert. Diese Tabelle wird entweder in der jeweiligen Mandanten-Datenbank oder auf einer dritten Datenbank-Instanz angelegt.

[![einträge-wiederherstellen](../assets/images/de/grundlagen/logbuch/8-lb.png)](../assets/images/de/grundlagen/logbuch/8-lb.png)

Über die [i-doit Console](../automatisierung-und-integration/cli/index.md) wird die Archivierung ausgeführt. Dieser Schritt kann daher auch automatisieren werden. Ein entsprechendes Beispiel für einen Aufruf sowie eine Auflistung der Parameter lässt sich im [zugehörigen Artikel](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#OptionenundParameterderConsole-logbook-archive) für die Option **logbook-archive** finden.

Beispiel:

```shell
    sudo -u www-data php console.php logbook-archive --user admin --password admin --tenantId 1
```

Archivierte Einträge lassen sich zur weiteren Auswertung wiederherstellen. Dieser Punkt befindet sich unter **Extras → CMDB → Logbuch → Wiederherstellen**.

[![archivierte-einträge](../assets/images/de/grundlagen/logbuch/9-lb.png)](../assets/images/de/grundlagen/logbuch/9-lb.png)

## Erstellungs- und Änderungsdatum

Jegliche Änderung an Objekten [Erstellen, Ändern, Archivieren, Löschen, Wiederherstellen](lebens-und-dokumentationszyklus.md) bewirkt nicht nur einen Eintrag im Logbuch, sondern auch an den [Attributen](../glossar.md) **Erstellungdatum** und **Änderungsdatum** in der Kategorie **Allgemein**, die jedem Objekttypen fest zugeordnet ist.

[![Änderungsdatum](../assets/images/de/grundlagen/logbuch/10-lb.png)](../assets/images/de/grundlagen/logbuch/10-lb.png)

Auf dem [Dashboard](dashboard-und-widgets.md) kann das Widget **Meine zuletzt geänderten Objekte** hinzugefügt werden, das die letzten eigenen Änderungen an Objekten anzeigt.

[![dashboard](../assets/images/de/grundlagen/logbuch/11-lb.png)](../assets/images/de/grundlagen/logbuch/11-lb.png)

## Rechte setzen

Das Rechtesystem von i-doit erlaubt die Konfiguration, welche Personen(-gruppen) lesend auf das Logbuch zugreifen können. So kann beispielsweise festgelegt werden, dass nur i-doit-Administratoren Änderungen nachvollziehen dürfen.
