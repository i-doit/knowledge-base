# Suchen

"Wer suchet, der findet." Die gezielte Recherche in der [IT-Dokumentation](../glossar.md) bedingt eine schnelle und komfortable Suche. Oftmals ist eine gezielte Suche der kürzere Weg als das Klicken durch Menüstrukturen.

Das Suchfeld
------------

Das Suchfeld befindet sich in der Web GUI von i-doit in der oberen rechten Ecke. Dort kann nach beliebigen Begriffen in der IT-Dokumentation gesucht werden. Beim Tippen erscheinen erste Suchergebnisse (Suchvorschläge), die mit der Maus oder Tastatur ausgewählt werden können (Autovervollständigung), um direkt in den gefundenen Datensatz zu springen.

[![suche-suchen](../assets/images/de/effizientes-dokumentieren/suche/1-suche.png)](../assets/images/de/effizientes-dokumentieren/suche/1-suche.png)

Neben der Freitextsuche, kann die Suche auf bestimmte [Objekt-Attribute](../glossar.md) beschränkt werden:

*   Beginnt die Suche mit einer Raute, gefolgt von der [Objekt-ID](../glossar.md) (#123), wird nach Drücken der Return-Taste die Übersichtsseite des Objekts mit ebendieser ID aufgerufen.
*   Beginnt die Suche mit dem Stichwort title, gefolgt von einem Doppelpunkt und dem Objekt-Titel, wird das entsprechende Objekt angezeigt (title:acme).

Das Suchergebnis
----------------

Führen die oben genannte Suchvorschläge nicht zum gewünschten Ergebnis, wird nach Drücken der Return-Taste eine Seite mit Suchergebnissen präsentiert. Neben jedem gefundenen Datensatz wird die Quelle genannt, beispielsweise das [Attribut](../glossar.md) einer [Kategorie](../glossar.md) eines [Objekttyps](../glossar.md) im [CMDB](../glossar.md)\-Modul.

[![suche-wegdruecken](../assets/images/de/effizientes-dokumentieren/suche/2-suche.png)](../assets/images/de/effizientes-dokumentieren/suche/2-suche.png)

!!! success "Lesezeichen/Favoriten setzen"
    Jede Suche kann über die URL referenziert werden. Wird nach dem Begriff "acme" gesucht, ergibt das die URL [http://i-doit/i-doit/search?q=acme](http://i-doit/i-doit/search?q=acme). So können Suchergebnisse als Lesezeichen/Favoriten im Webbrowser gespeichert werden, um sie schneller wieder aufzurufen.

Such-Modus
----------

Für die Suche kann aus zwei Modi ausgewählt werden, die zu unterschiedlichen Ergebnissen führen können:

*   **Normal**: Für die Suche wird die Indexierung (siehe unten) verwendet. Dies ist die Standard-Einstellung.
*   **Deep Search**: Es werden nacheinander Attribute durchsucht. Diese Suche nimmt mehr Zeit in Anspruch.

Der Such-Modus kann unter **Extras → Suche** nach der ersten Suche ausgewählt werden. Um einen bestimmten Modus automatisch zu verwenden, kann dieser unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Suche → Standard Such-Modus** ausgewählt werden.

Automatische Deep Search
------------------------

Sollte die Suche im voreingestellten Modus (siehe oben) kein oder ein unzureichendes Ergebnis liefern, kann automatisch die **Deep Search** ausgeführt werden. Dieses Verhalten wird unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Suche → Automatische DeepSearch** konfiguriert:

| Option                                           | Beschreibung                                                                                |
| ------------------------------------------------ | ------------------------------------------------------------------------------------------- |
| **Aktiv**                                        | Die Such-Ergebnisse werden durch eine zusätzliche **Deep Search** ergänzt.                  |
| **Aktiv, wenn keine Ergebnisse gefunden werden** | Die zusätzliche **Deep Search** wird gestartet, wenn keine Ergebnisse gefunden worden sind. |
| **Deaktiviert**                                  | Die zusätzliche **Deep Search** wird nicht berücksichtigt.                                  |

Indexierung
-----------

Initial wird der Suchindex automatisch beim Update und der Installation erzeugt. Nur in sehr großen Datenbanken mit mehr als 500.000 Objekten muss dieser manuell erzeugt werden, damit die Suche performant läuft und gute Ergebnisse liefert. Der Index kann unabhängig von Benutzer-Interaktionen im Hintergrund erstellt bzw. aktualisiert werden. Angestoßen wird diese Aktion über das [i-doit console utility](../automatisierung-und-integration/cli/index.md).

```shell
php console.php search-index -uadmin -padmin -i 1
```

Alternativ kann der Reindex auch in der i-doit Verwaltung unter **Systemtools** -> **Cache / Datenbank** über die Schaltfläche **Suche-Index** erneuern ausgeführt werden.

!!! info "Speicherbedarf"
    Auf einem Unix-artigen Betriebssystem wird der Index pro 1 Million indizierter Datensätze ca. 500 MByte groß. Die Dauer einer Suchabfrage wird durch große Indizes in der Regel nicht erhöht.

Über die Konsole suchen
-----------------------

Das [i-doit console utility](../automatisierung-und-integration/cli/index.md) erlaubt auch das Suchen über die Kommandozeile.

```shell
    sudo -u www-data php console.php search -uadmin -padmin --searchString=acme
    +------+-------------------------------------------------------+------------------------------------------------------------------------+-------+
    | ID   | Key                                                   | Found Match                                                            | Score |
    +------+-------------------------------------------------------+------------------------------------------------------------------------+-------+
    | 538  | Database scheme > Global > Title                      | i-doit Tenant ACME IT Solutions                                        | 4.04  |
    | 25   | Organisation > Global > Title                         | ACME IT Solutions GmbH                                                 | 4.04  |
    | 157  | Person groups > Mail Addresses > Title                | Team: intern@acme-it.example                                           | 4.04  |
    | 158  | Persons > Mail Addresses > Title                      | Adam Riese: a.riese@acme-it.example                                    | 4.04  |
    | 160  | Persons > Mail Addresses > Title                      | Mara Thon: m.thon@acme-it.example                                      | 4.04  |
    | 164  | Persons > Mail Addresses > Title                      | Falk Narei: f.narei@acme-it.example                                    | 4.04  |
    | 25   | Organisation > Mail Addresses > Title                 | ACME IT Solutions GmbH: info@acme-it.example                           | 4.04  |
    [...]
    +------+-------------------------------------------------------+------------------------------------------------------------------------+-------+
```

Über die API suchen
-------------------

Über die [programmierbare Schnittstelle (API)](../i-doit-add-ons/api/index.md) von i-doit kann ebenfalls in der IT-Dokumentation gesucht werden. Die nötige Methode lautet idoit.search:

```json
{
    "version": "2.0",
    "method": "idoit.search",
    "params": {
        "q": "acme",
        "apikey": "c1ia5q",
        "language": "en"
    },
    "id": 1
}
```

Die Antwort vom Server sieht folgendermaßen aus:

```shell
{
    "jsonrpc": "2.0",
    "result": [
        {

            "documentId": "1412",
            "key": "Client > Ip > Dns domain",
            "value": "Laptop 001: intern.acme-it.example",
            "type": "cmdb",
            "link": "\/?objID=1412&catgID=47&cateID=47&highlight=acme",
            "score": 0

        },
        // […]

    ],
    "id": 1

}
```

Indexierung anpassen
--------------------

Die Indexierung von i-doit beansprucht viele Funktionen, die von MySQL/MariaDB zur Verfügung gestellt werden. Diese lassen sich benutzerdefiniert anpassen. Für einige Einstellungen wird die [Konfigurationsdatei von MySQL/MariaDB](../installation/manuelle-installation/systemeinstellungen.md) angepasst (zum Beispiel unter /etc/mysql/conf.d/i-doit.cnf). Für andere ist das Ausführen von SQL-Statements erforderlich, wofür sich der Client auf der Kommandozeile eignet. Beispiel:

```shell
mysql -uroot -p -hlocalhost
```

### Wortlänge

Eine wichtige Frage lautet, [wie lang ein Wort mindestens sein muss](https://dev.mysql.com/doc/refman/5.7/en/innodb-parameters.html#sysvar_innodb_ft_min_token_size), damit es indexiert wird. Häufig steht dieser Wert auf 3 Zeichen. Begriffe wie "PC 01" werden hiermit nicht gefunden. Geeignet wäre die Angabe von 2 oder sogar 1 Zeichen.

```ini
innodb_ft_min_token_size = 2 # minimale Zeichenanzahl eines Suchbegriffes
```

Diese Einstellung könnte dazu führen, dass der Index um ein vielfaches größer wird.

### Worttrenner

Um Wörter voneinander zu unterscheiden, werden verschiedene Zeichen als Worttrenner herangezogen (z. B. Leerzeichen, Punkt, Strich). Damit der Begriff "PC-01" gefunden wird, wird dieser in "PC" und "01" aufgeteilt. Hier ist also wieder die Wortlänge entscheidend, ob "PC" und "01" indiziert werden oder nicht.

### Stoppwörter

Als [Stoppwörter](https://de.wikipedia.org/wiki/Stoppwort) gelten Begriffe, die bei einer Suche ignoriert werden. Daher sollte der Index diese nicht berücksichtigen. Zu diesen Wörtern zählen beispielswese "am", "dem" und "mit". MySQL bringt bereits eine Liste an Stoppwörtern mit, die allerdings relativ klein ausfällt und nur englische Begriffe beinhaltet. Diese lässt sich allerdings durch eine eigene Liste ersetzen. Dazu dienen die folgenden SQL Statements:

System-Datenbank von i-doit angeben:

```sql
USE idoit_system;
```

    ## Falls die Tabelle noch nicht existiert, sollte sie erstellt werden:

```sql
CREATE TABLE IF NOT EXISTS isys_search_stopwords (value VARCHAR(18) NOT NULL DEFAULT '') ENGINE=INNODB DEFAULT CHARSET=latin1;
```

Tabelle leeren:

```sql
TRUNCATE TABLE isys_search_stopwords;
```

Liste von deutschen Stoppwörtern einfügen:

```sql
INSERT INTO isys_search_stopwords (value)
VALUES ('aber'), ('als'), ('also'), ('am'), ('an'), ('auch'), ('auf'), ('aus'), ('bei'), ('bin'), ('bis'), ('bist'), ('da'), ('dadurch'), ('daher'), ('darum'), ('das'), ('daß'), ('dass'), ('dein'), ('deine'), ('dem'), ('den'), ('der'), ('des'), ('deshalb'), ('dessen'), ('die'), ('dies'), ('dieser'), ('dieses'), ('doch'), ('dort'), ('du'), ('durch'), ('ein'), ('eine'), ('einem'), ('einen'), ('einer'), ('eines'), ('er'), ('es'), ('euer'), ('eure'), ('für'), ('hatte'), ('hatten'), ('hattest'), ('hattet'), ('hier'), ('hinter'), ('ich'), ('ihr'), ('ihre'), ('im'), ('in'), ('ist'), ('ja'), ('jede'), ('jedem'), ('jeden'), ('jeder'), ('jedes'), ('jener'), ('jenes'), ('jetzt'), ('kann'), ('kannst'), ('können'), ('könnt'), ('machen'), ('mein'), ('meine'), ('mit'), ('muß'), ('müssen'), ('mußt'), ('musst'), ('müßt'), ('nach'), ('nachdem'), ('nein'), ('nicht'), ('nun'), ('oder'), ('seid'), ('sein'), ('seine'), ('sich'), ('sie'), ('sind'), ('soll'), ('sollen'), ('sollst'), ('sollt'), ('sonst'), ('soweit'), ('sowie'), ('über'), ('und'), ('unser'), ('unsere'), ('unter'), ('vom'), ('von'), ('vor'), ('wann'), ('warum'), ('was'), ('weiter'), ('weitere'), ('wenn'), ('wer'), ('werde'), ('werden'), ('werdet'), ('weshalb'), ('wie'), ('wieder'), ('wieso'), ('wir'), ('wird'), ('wirst'), ('wo'), ('woher'), ('wohin'), ('zu'), ('zum'), ('zur');
```

Eine Liste von Stoppwörtern in verschiedenen Sprachen können im Internet schnell recherchiert werden.

Damit diese Liste die von MySQL ersetzt, wird folgende Einstellungen nötig:

```ini
innodb_ft_server_stopword_table = 'idoit_system/isys_search_stopwords'
```

### Änderungen am Index aktivieren

Damit Änderungen am Index-Verhalten wirksam werden, sind drei Schritte erforderlich. Erst sollte der MySQL-Dienst neu gestartet werden. Unter Debian-basierten Betriebssystemen führt man folgenden Befehl aus:

```shell
sudo systemctl restart mysql.service
```

Anschließend muss folgendes SQL Statement für jede Mandanten-Datenbank ausgeführt werden:

```sql
OPTIMIZE TABLE isys_search_idx;
```

Vollständiges SQL Statement für den ersten Mandanten mit der Datenbank idoit_data:

```sql
USE idoit_data;
OPTIMIZE TABLE isys_search_idx;
```

Zum Schluss muss eine Neu-Indexing über die i-doit Console oder die i-doit Verwaltung durchgeführt werden (siehe oben).

### Das Limit von 2500 Ergenissen erhöhen

Wenn Objekte fortlaufend benannt werden z.B. 123456-00001 bis 123456-99999 so können mit normalen Sucheinstellungen nur Objekte bis 123456-2500 gefunden werden.
Dieses Limit dient der Performance. Um dieses Limit zu erhöhen muss eine Experteneinstellung hinzugefügt werden.

Hier ein Beispiel bei dem das Limit auf 5000 Ergenisse gesetzt wurde.

| Key          | Value | Type        |
| ------------ | ----- | ----------- |
| search.limit | 5000  | Tenant-wide |
