# Lebens und Dokumentationszyklus

IT-Komponenten kommen und gehen. Sie werden geplant, angeschafft, betrieben und irgendwann wieder ausgemustert. Bingo: Es geht um das Life Cycle Management. In der [IT-Dokumentation](../glossar.md) spielt dies eine wichtige Rolle, weil hierbei nachvollzogen werden kann, welchen Status eine Komponente haben soll bzw. hat. Zudem soll die IT-Dokumentation an sich archiviert und gelöscht werden können.

Lebenszyklus von IT-Komponenten
-------------------------------

Der Lebenszyklus einer IT-Komponente wird im **CMDB-Status** dokumentiert. Bei einer frischen Installation von _i-doit_ sind folgende **CMDB-Status **verfügbar:

*   **Geplant**
*   **Bestellt**
*   **Geliefert**
*   **Montiert**
*   **Getestet**
*   **In Betrieb (nicht editierbar)**
*   **Defekt**
*   **Außer Betrieb (nicht editierbar)**
*   **In Reparatur**
*   **Aus Reparatur geliefert**
*   **Gelagert**
*   **Verschrottet**
*   **i-doit Status (nicht editierbar)**
*   **Template (nicht editierbar)**

Der **CMDB-Status** kann in den Objektlisten als Spalte dargestellt werden, um möglichst schnell den Soll-Zustand eines dokumentierten Objekts zu recherchieren.

[![cmdb-status](../assets/images/de/grundlagen/lebens-und-dokumentationszyklus/1-lud.png)](../assets/images/de/grundlagen/lebens-und-dokumentationszyklus/1-lud.png)

!!! success "Planung"

    Durch das Abbilden des Lebenszyklus ist es möglich, _i-doit_ für die Planung einzusetzen. Ob nun eine Anschaffung, ein größeres Update oder ein Umzug ansteht – die IT-Dokumentation ist immer mit dabei und bietet valide Aussagen.

### CMDB-Status pro Objekt angeben

Um den gesamten Lebenszyklus eines Objekts abzubilden, wird pro [Objekt](../glossar.md) das [Attribut](../glossar.md) **CMDB-Status** in der [Kategorie](../glossar.md) **Allgemein** verwendet. Wird ein neues Objekt angelegt, erhält dies **In Betrieb** als **CMDB-Status**, solange nichts anderes explizit angegeben wurde.

[![cmdb-status-pro-objekt](../assets/images/de/grundlagen/lebens-und-dokumentationszyklus/2-lud.png)](../assets/images/de/grundlagen/lebens-und-dokumentationszyklus/2-lud.png)

### CMDB-Status verwalten

Das Hinzufügen, Ändern oder Löschen eines **CMDB-Status** erfolgt über **Verwaltung → CMDB Einstellungen → CMDB-Status**. Pro **CMDB-Status** werden folgende Angaben benötigt:

*   Eindeutige Bezeichnung bzw. [Sprachkonstante (zur Übersetzung)](../administration/mehrsprachigkeit-und-uebersetzungen.md)
*   Eindeutige Konstante (beispielsweise für die Nutzung der [API](../i-doit-pro-add-ons/api/index.md) hilfreich)
*   Farbe (wird in Objektlisten, der **Allgemein**\-Kategorie, im [**CMDB-Explorer**](../auswertungen/cmdb-explorer/index.md) und an vielen anderen Stellen verwendet)

[![cmdb-status-verwalten](../assets/images/de/grundlagen/lebens-und-dokumentationszyklus/3-lud.png)](../assets/images/de/grundlagen/lebens-und-dokumentationszyklus/3-lud.png)

Lebenszyklus der IT-Dokumentation
---------------------------------

Neben den zu dokumentierenden Objekten kann auch die Dokumentation an sich einem Lebenszyklus unterstellt werden. Wird ein Dokumentations-Artefakt nicht mehr benötigt, kann es archiviert werden. Ebenso kann ein Artefakt als gelöscht markiert werden, damit eine für die IT-Dokumentation verantwortliche Person dieses Artefakt unwiderruflich über **Purge** löscht.

!!! success "Lösch-Prozess"

    Für größere Umgebungen lohnt es sich, für das Archivieren und Löschen von Dokumentations-Artefakten die nötigen Prozesse zu etablieren. Wann wird archiviert? Wer darf die IT-Dokumentation bereinigen? Solche Fragen sollten im Team unbedingt geklärt werden. Um lediglich bestimmten Benutzern oder Benutzergruppen das Recht zum Archivieren oder unwiderruflichen Löschen einzuräumen, bietet das Rechtesystem von _i-doit_ die nötigen Einstellungen.

### Zustände

So gut wie alle Dokumentations-Artefakte (Objekte, Kategorie-Einträge, Werte in [**Dialog+**\-Feldern](dialog-admin.md) u.v.m.) erhalten einen Zustand:

*   **Normal**: Beim gewöhnlichen Arbeiten (anlegen, ändern) erhält jedes Artefakt diesen Zustand und kann überall verwendet werden.
*   **Archiviert**: Das Artefakt wird aus der IT-Dokumentation ausgeblendet. Die weitere Verwendung, beispielsweise Verknüpfungen sind nicht mehr möglich.
*   **Gelöscht**: Das Artefakt soll unwiderruflich gelöscht (**Purge**) werden, existiert aber noch vollständig mit allen Beziehungen in der IT-Dokumentation. Ansonsten gleicht dieser Zustand dem von **Archiviert**.

Der Zyklus sieht vor, dass jedes Dokumentations-Artefakt den Zustand **Normal** erhält. Später folgt **Archiviert**, danach **Gelöscht**. Eine Wiederherstellung in den vorherigen Zustand ist jederzeit möglich.

Neben diesen drei Zuständen existieren bei Objekten Sonderfälle:

*   **Unfertig**: Wird ein neues Objekt erstellt, aber nicht gespeichert, erhält es diesen Zustand. Dies passiert beispielsweise, wenn ein Objekt zwar neu angelegt, aber der Button **Speichern** nicht gedrückt wird. Diese Objekte lassen sich nur über einen Report aufspüren und dann weiter verwenden. Daher sollten diese regelmäßig gelöscht werden. Dies kann über **Verwaltung → Systemtools → Cache / Datenbank → Unfertige Objekte entfernen***gemacht werden. Alternativ kann dies auch automatisch geschehen. Mehr dazu finden Sie weiter unten in diesem Artikel.
*   **Template**: Ein Objekt kann als [Vorlage](../effizientes-dokumentieren/templates.md) für weitere Objekte fungieren.
*   **Änderungsvorlage**: Ein Objekt kann als Änderungsvorlage für die [Massenänderung](../effizientes-dokumentieren/massenaenderung.md) fungieren.

Soll ein Dokumentations-Artefakt unwiderruflich gelöscht werden, folgt nach der Markierung als **Gelöscht** die Funktion **Purge**. Dies ist allerdings kein Zustand, denn alle Daten (auch der bisherige Zustand und jegliche Logbuch-Einträge) gehen dabei verloren, sodass nicht mehr nachvollzogen werden kann, dass dieses Objekt jemals existiert hat. Diese Funktion sollte also mit Bedacht verwendet werden.

### Objekte archivieren, als gelöscht markieren oder unwiderruflich löschen (purge)

Der Zustand eines Objekts ist in der **Allgemein**\-Kategorie sichtbar. Sollen ein oder mehrere Objekte archiviert, als gelöscht markiert oder unwiderruflich gelöscht werden, geschieht dies über die [Objekt-Liste](objekt-liste/index.md). Dazu werden die Checkboxen der jeweiligen Objekte markiert und einer der Buttons **Archivieren**, **Löschen** oder **Purge** gedrückt.

[![objekte-archivieren-oder-purgen](../assets/images/de/grundlagen/lebens-und-dokumentationszyklus/4-lud.png)](../assets/images/de/grundlagen/lebens-und-dokumentationszyklus/4-lud.png)

Es kann immer nur in den nächstmöglichen Zustand gewechselt werden. Ist ein Objekt im Status **Normal**, kann aus der Liste heraus nur der zum nächsten Zustand **archiviert** gewechselt werden. Gelöscht kann dann erst aus der oben rechts nach archivierten Objekten gefilterten Liste heraus werden. Zudem kann mit **Wiederherstellen** wieder auf den vorherigen Zustand gewechselt werden.

  

Beim unwiderruflichen Löschen (**Purge**) gibt es keine Rückfrage, außer es existieren Beziehungen zu anderen Objekten.

### Kategorie-Einträge archivieren, als gelöscht markieren oder unwiderruflich löschen (Purge)

Eine ähnliche Funktionalität wie bei Objekten existiert bei manchen [Listen-Kategorien](../glossar.md) ("Multi-Value"). Hierüber lassen sich Kategorie-Einträge archivieren, als gelöscht markieren und purgen.

### Vereinfachtes Löschen (Quickpurge)

Soll ein Dokumentations-Artefakt unwiderruflich gelöscht werden, muss es zuvor erst archiviert und dann als gelöscht markiert werden. Um diesen Zyklus abzukürzen, bietet sich an, den Button **Quickpurge** zu aktivieren. Dies geschieht unter **Verwaltung → Systemeinstellungen → System Parameters → Quickpurge-Button aktivieren**. Auf diese Weise kann ein Objekt oder ein Kategorie-Eintrag unabhängig vom Zustand unwiderruflich gelöscht werden.

### Auflisten aller archivierten oder als gelöscht markierten Objekte

Um eine Liste mit allen archivierten oder als gelöscht markierten Objekte zu erhalten, bietet sich ein [Report](../auswertungen/report-manager.md) an, der über den Abfrage-Editor zusammengestellt werden kann.

### Unfertige/archivierte/gelöscht markierte Objekte oder Kategorie-Einträge gesammelt löschen (Purge)

Fast immer sind unfertige Objekte unerwünscht, denn sie sind nicht sichtbar und somit nicht zu bearbeiten. Aber auch archivierte oder als gelöscht markierte Objekte sind oftmals unerwünscht. Dasselbe gilt für Kategorie-Einträge. Daher bietet es sich an, diese unerwünschten Dokumentations-Artefakte permanent zu löschen (**Purge**). Hierfür existieren zwei Wege: manuelles oder automatisches Löschen.

#### Manuelles Löschen

Über die Web GUI lassen sich diese Artefakte löschen. Die entsprechende Funktionalität befindet sich unter **Verwaltung → Systemtools → Cache / Datenbank → Objekte** bzw. **Kategorien**. Nach dem Drücken eines der angebotenen Buttons wird eine Meldung mit der Anzahl der zu löschenden Objekte oder Kategorie-Einträge angezeigt und nach dem Löschen am unteren Ende der Seite eine Statistik angezeigt, wie viele Objekte bzw. Kategorie-Einträge gelöscht wurden.

#### Automatisches Löschen

Die i-doit [Console](../automatisierung-und-integration/cli/index.md) bietet ebenfalls eine Möglichkeit, gewisse unerwünschte Objekte unwiderruflich zu löschen.  Ein Beispiel für einen Aufruf sowie die möglichen Parameter können im [dazugehörigen Artikel](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md) für die Option **system-objectcleanup** eingesehen werden.

    sudo -u www-data console.php system-objectcleanup -u admin -p admin -i 1 --objectStatus 3

Der Automatismus besteht darin, den Aufruf per Cronjob regelmäßig auszuführen.

### Zustandsänderungen im Logbuch

Im Logbuch werden Zustandsänderungen vollständig erfasst. Erst wenn ein Objekt bzw. ein Kategorie-Eintrag unwiderruflich gelöscht wird (**Purge**), werden auch alle zugehörigen Logbuch-Einträge endgültig gelöscht.