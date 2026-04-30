---
title: Logbuch
description: "Jede Änderung an der IT-Dokumentation wird von i-doit in einem Logbuch hinterlegt."
icon:
status:
lang: de
---
# Logbuch

Jede Änderung an der [IT-Dokumentation](../glossar.md) wird von i-doit in einem Logbuch hinterlegt. Auf diese Weise lässt sich der [Lebenszyklus der IT-Dokumentation](lebens-und-dokumentationszyklus.md) problemlos nachvollziehen.

## Globales Logbuch

Das Logbuch, in dem alle Änderungen einfließen, befindet sich unter **Extras → CMDB → Logbuch → Listenansicht Logbuch**. Einträge können dort nach verschiedenen Parametern gefiltert werden. Wenn möglich, enthält ein Eintrag zudem die genauen Änderungen (Welcher Wert wurde von was zu was geändert?).

[![globales-logbuch](../assets/images/de/grundlagen/logbuch/1-lb.png)](../assets/images/de/grundlagen/logbuch/1-lb.png)

Die letzte Änderung ist auf jeder Seite im unteren Bereich nachvollziehbar.

[![letzte-änderung](../assets/images/de/grundlagen/logbuch/2-lb.png)](../assets/images/de/grundlagen/logbuch/2-lb.png)

## Logbuch pro Objekt

Du kannst das Logbuch auch auf ein einzelnes [Objekt](../glossar.md) beschränkt anzeigen. Jedem [Objekttyp](../glossar.md) ist die [Kategorie](../glossar.md) **Logbuch** fest zugeordnet. In der **Objektsicht** erreichst du das Logbuch über das Buch-Icon oberhalb des Kategorie-Baums.

[![objekt-logbuch](../assets/images/de/grundlagen/logbuch/3-lb.png)](../assets/images/de/grundlagen/logbuch/3-lb.png)

Die Filter-Funktionen und die Detail-Tiefe entsprechen denen des globalen Logbuchs.

[![logbuch-filter](../assets/images/de/grundlagen/logbuch/4-lb.png)](../assets/images/de/grundlagen/logbuch/4-lb.png)

## Logbuch pro Service

Zu jedem Service, der in i-doit modelliert ist, existiert ein Logbuch, das die Änderungen an allen Service-Komponenten (oder Sub-Services) enthält. Die Kategorie heißt **Service Logbuch** und kann durch die Kategorie **Service** denjenigen Objekttypen hinzugefügt werden, die Services repräsentieren.

[![logbuch-service](../assets/images/de/grundlagen/logbuch/5-lb.png)](../assets/images/de/grundlagen/logbuch/5-lb.png)

## Logbuch konfigurieren

Du findest die Konfiguration des Logbuchs unter **Extras → CMDB → Logbuch → Logbuch Konfiguration**.

[![logbuch-konfigurieren](../assets/images/de/grundlagen/logbuch/6-lb.png)](../assets/images/de/grundlagen/logbuch/6-lb.png)

Änderungen wirken sich **nicht** auf bereits existierende Einträge aus.

In der Konfiguration kannst du die **Benutzerkennung** ändern, die zu jedem Eintrag hinterlegt wird. Standardmäßig verwendet i-doit den [Objekttitel](../glossar.md) des Personen-Objekts, meist bestehend aus Vor- und Nachnamen.

!!! success "Anonymisierung"
    Wird die **Benutzerkennung** auf einen festen Wert, beispielsweise auf "Anonymous", geändert, wird das Logbuch anonymisiert. Es lässt sich somit nicht mehr nachvollziehen, wer welche Änderungen getätigt hat.

Die Einstellung für die **Maximalzahl kombinierter Änderungen** bewirkt, dass gleichzeitige Änderungen zusammengefasst werden. Die Detailtiefe flacht dadurch ab, aber die Performance bei Importen wird erhöht.

### Logbucheinträge zu bereinigten Objekten vollständig löschen

Du findest diese Einstellung unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Logbuch → Logbucheinträge zu bereinigten Objekten vollständig löschen**.

[![logbucheinträge-bereinigen](../assets/images/de/grundlagen/logbuch/12-lb.png)](../assets/images/de/grundlagen/logbuch/12-lb.png)

Standardmäßig steht diese Option auf **Nein**. Setzt du sie auf **Ja**, löscht i-doit nach dem Bereinigen eines Objekts auch dessen Logbucheinträge vollständig.

### Detaillierte CMDB Änderungen protokollieren

Unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Logbuch → Detaillierte CMDB Änderungen protokollieren** können Details für Einträge im Logbuch deaktiviert werden. Es wird dann nicht mehr erfasst, welche Änderung an welchem Attribut vorgenommen wurde.

## Eigene Einträge

Du kannst zu jedem Objekt manuell einen neuen Logbuch-Eintrag erstellen:

1. Öffne innerhalb des Objekts die Kategorie **Logbuch** (siehe oben).
2. Klicke auf den Button **Neu**.
3. Fülle die Felder **Alert Level**, **Nachricht** und **Beschreibung** aus.
4. Klicke auf **Speichern**.

[![eigene-einträge](../assets/images/de/grundlagen/logbuch/7-lb.png)](../assets/images/de/grundlagen/logbuch/7-lb.png)

### Einträge aus Dritt-Systemen

Das Logbuch nimmt neue Einträge aus Dritt-Systemen entgegen, beispielsweise durch [Importe](../daten-konsolidieren/index.md), [Service Desks](../automatisierung-und-integration/service-desk/index.md), [Network Monitoring](../automatisierung-und-integration/network-monitoring/index.md) und die [API](../i-doit-add-ons/api/index.md).

## Ältere Einträge archivieren und wiederherstellen

Unter **Extras → CMDB → Logbuch → Archivieren** konfigurierst du, ob und ab welchem Alter (in Tagen) Einträge archiviert werden. Diese Funktion hilft dir, wenn das Logbuch sehr groß geworden ist und die Auswertung durch lange Wartezeiten behindert wird. Archivierte Einträge lagert i-doit in eine separate Datenbank-Tabelle aus -- entweder in der jeweiligen Mandanten-Datenbank oder auf einer dritten Datenbank-Instanz.

[![einträge-wiederherstellen](../assets/images/de/grundlagen/logbuch/8-lb.png)](../assets/images/de/grundlagen/logbuch/8-lb.png)

Die Archivierung führst du über das [i-doit console utility](../automatisierung-und-integration/cli/index.md) aus. Diesen Schritt kannst du auch automatisieren. Weitere Optionen zeigt dir der `--help` Befehl.

Beispiel:

```shell
    sudo -u www-data php console.php logbook:archive --user admin --password admin --tenantId 1
```

Archivierte Einträge lassen sich zur weiteren Auswertung wiederherstellen. Dieser Punkt befindet sich unter **Extras → CMDB → Logbuch → Wiederherstellen**.

[![archivierte-einträge](../assets/images/de/grundlagen/logbuch/9-lb.png)](../assets/images/de/grundlagen/logbuch/9-lb.png)

## Erstellungs- und Änderungsdatum

Jegliche Änderung an Objekten [Erstellen, Ändern, Archivieren, Löschen, Wiederherstellen](lebens-und-dokumentationszyklus.md) bewirkt nicht nur einen Eintrag im Logbuch, sondern auch an den [Attributen](../glossar.md) **Erstellungdatum** und **Änderungsdatum** in der Kategorie **Allgemein**, die jedem Objekttypen fest zugeordnet ist.

[![Änderungsdatum](../assets/images/de/grundlagen/logbuch/10-lb.png)](../assets/images/de/grundlagen/logbuch/10-lb.png)

Auf dem [Dashboard](dashboard-und-widgets.md) kann das Widget **Meine zuletzt geänderten Objekte** hinzugefügt werden, das die letzten eigenen Änderungen an Objekten anzeigt.

[![dashboard](../assets/images/de/grundlagen/logbuch/11-lb.png)](../assets/images/de/grundlagen/logbuch/11-lb.png)

## Rechte setzen

Über das Rechtesystem von i-doit legst du fest, welche Personen oder Personengruppen lesend auf das Logbuch zugreifen dürfen. So kannst du beispielsweise sicherstellen, dass nur i-doit-Administratoren Änderungen nachvollziehen können.
