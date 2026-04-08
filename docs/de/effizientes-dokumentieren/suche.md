---
title: Suchen
description: "Die gezielte Recherche in der IT-Dokumentation ist oft der schnellste Weg zum Ziel -- schneller als das Navigieren durch Menustrukturen."
icon:
status:
lang: de
---
# Suchen

Die gezielte Recherche in der [IT-Dokumentation](../glossar.md) ist oft der schnellste Weg zum Ziel -- schneller als das Navigieren durch Menustrukturen.

## Das Suchfeld

Das Suchfeld findest du in der Web GUI von i-doit in der oberen rechten Ecke. Gib dort beliebige Begriffe ein. Bereits beim Tippen erscheinen erste Suchergebnisse (Suchvorschläge), die du mit der Maus oder Tastatur auswählen kannst, um direkt zum gefundenen Datensatz zu springen.

[![suche-suchen](../assets/images/de/effizientes-dokumentieren/suche/1-suche.png)](../assets/images/de/effizientes-dokumentieren/suche/1-suche.png)

Neben der Freitextsuche, kann die Suche auf bestimmte [Objekt-Attribute](../glossar.md) beschränkt werden:

*   Beginnt die Suche mit einer Raute, gefolgt von der [Objekt-ID](../glossar.md) (#123), wird nach Drücken der Return-Taste die Übersichtsseite des Objekts mit ebendieser ID aufgerufen.
*   Beginnt die Suche mit dem Stichwort title, gefolgt von einem Doppelpunkt und dem Objekt-Titel, wird das entsprechende Objekt angezeigt (title:acme).

## Das Suchergebnis

Führen die Suchvorschläge nicht zum gewünschten Ergebnis, drücke die Return-Taste. Du erhältst eine Seite mit Suchergebnissen. Neben jedem gefundenen Datensatz wird die Quelle angezeigt, beispielsweise das [Attribut](../glossar.md) einer [Kategorie](../glossar.md) eines [Objekttyps](../glossar.md) im [CMDB](../glossar.md)-Modul.

[![suche-wegdrücken](../assets/images/de/effizientes-dokumentieren/suche/2-suche.png)](../assets/images/de/effizientes-dokumentieren/suche/2-suche.png)

!!! success "Lesezeichen/Favoriten setzen"
    Jede Suche kann über die URL referenziert werden. Wird nach dem Begriff "acme" gesucht, ergibt das die URL [http://i-doit/i-doit/search?q=acme](http://i-doit/i-doit/search?q=acme). So können Suchergebnisse als Lesezeichen/Favoriten im Webbrowser gespeichert werden, um sie schneller wieder aufzurufen.

## Such-Modus

Du kannst zwischen zwei Modi wählen, die zu unterschiedlichen Ergebnissen führen können:

*   **Normal**: Für die Suche wird die Indexierung (siehe unten) verwendet. Dies ist die Standard-Einstellung.
*   **Deep Search**: Es werden nacheinander Attribute durchsucht. Diese Suche nimmt mehr Zeit in Anspruch.

Den Such-Modus wählst du unter **Extras > Suche** nach der ersten Suche aus. Den Standard-Modus legst du unter **Verwaltung > [Mandanten-Name] Verwaltung > Einstellungen für [Mandanten-Name] > Suche > Standard Such-Modus** fest.

## Automatische Deep Search

Liefert die Suche im voreingestellten Modus kein oder ein unzureichendes Ergebnis, kann automatisch die **Deep Search** ausgeführt werden. Konfiguriere dieses Verhalten unter **Verwaltung > [Mandanten-Name] Verwaltung > Einstellungen für [Mandanten-Name] > Suche > Automatische DeepSearch**:

| Option                                           | Beschreibung                                                                                |
| ------------------------------------------------ | ------------------------------------------------------------------------------------------- |
| **Aktiv**                                        | Die Such-Ergebnisse werden durch eine zusätzliche **Deep Search** ergänzt.                  |
| **Aktiv, wenn keine Ergebnisse gefunden werden** | Die zusätzliche **Deep Search** wird gestartet, wenn keine Ergebnisse gefunden worden sind. |
| **Deaktiviert**                                  | Die zusätzliche **Deep Search** wird nicht berücksichtigt.                                  |

## Indexierung

Der Suchindex wird automatisch bei Installation und Update erzeugt. Nur bei sehr grossen Datenbanken mit mehr als 500.000 Objekten musst du ihn manuell erstellen, damit die Suche performant läuft. Die Indexierung läuft unabhängig von Benutzer-Interaktionen im Hintergrund. Starte sie über das [i-doit console utility](../automatisierung-und-integration/cli/index.md):

```shell
php console.php search-index -uadmin -padmin -i 1
```

Alternativ kann der Reindex auch in der i-doit Verwaltung unter **Systemtools** -> **Cache / Datenbank** über die Schaltfläche **Suche-Index** erneuern ausgeführt werden.

!!! info "Speicherbedarf"
    Auf einem Unix-artigen Betriebssystem wird der Index pro 1 Million indizierter Datensätze ca. 500 MByte groß. Die Dauer einer Suchabfrage wird durch große Indizes in der Regel nicht erhöht.

## Über die Konsole suchen

Das [i-doit console utility](../automatisierung-und-integration/cli/index.md) erlaubt dir auch das Suchen über die Kommandozeile:

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

## Über die API suchen

Über die [programmierbare Schnittstelle (API)](../i-doit-add-ons/api/index.md) von i-doit kannst du ebenfalls in der IT-Dokumentation suchen. Verwende dazu die Methode `idoit.search`:

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

## Indexierung anpassen

Die Indexierung nutzt Funktionen von MySQL/MariaDB, die du benutzerdefiniert anpassen kannst. Einige Einstellungen konfigurierst du in der [Konfigurationsdatei von MySQL/MariaDB](../installation/manuelle-installation/systemeinstellungen.md) (z.B. `/etc/mysql/conf.d/i-doit.cnf`). Für andere führst du SQL-Statements aus, z.B. über den Kommandozeilen-Client:

```shell
mysql -uroot -p -hlocalhost
```

### Wortlänge

Eine wichtige Frage ist, [wie lang ein Wort mindestens sein muss](https://dev.mysql.com/doc/refman/5.7/en/innodb-parameters.html#sysvar_innodb_ft_min_token_size), damit es indexiert wird. Häufig steht dieser Wert auf 3 Zeichen -- Begriffe wie "PC 01" werden dann nicht gefunden. Ein Wert von 2 oder sogar 1 Zeichen ist oft besser geeignet:

```ini
innodb_ft_min_token_size = 2 # minimale Zeichenanzahl eines Suchbegriffes
```

Diese Einstellung könnte dazu führen, dass der Index um ein vielfaches größer wird.

### Worttrenner

Um Wörter voneinander zu unterscheiden, werden verschiedene Zeichen als Worttrenner herangezogen (z. B. Leerzeichen, Punkt, Strich). Damit der Begriff "PC-01" gefunden wird, wird dieser in "PC" und "01" aufgeteilt. Hier ist also wieder die Wortlänge entscheidend, ob "PC" und "01" indiziert werden oder nicht.

### Stoppwörter

[Stoppwoerter](https://de.wikipedia.org/wiki/Stoppwort) sind Begriffe, die bei der Suche ignoriert werden (z.B. "am", "dem", "mit"). MySQL bringt eine kleine, englischsprachige Liste mit, die du durch eine eigene ersetzen kannst. Verwende dazu die folgenden SQL-Statements:

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

Listen von Stoppwoertern in verschiedenen Sprachen findest du schnell im Internet.

Damit deine Liste die MySQL-eigene ersetzt, trage folgende Einstellung in die MySQL-Konfiguration ein:

```ini
innodb_ft_server_stopword_table = 'idoit_system/isys_search_stopwords'
```

### Änderungen am Index aktivieren

Damit Änderungen am Index-Verhalten wirksam werden, sind drei Schritte erforderlich. Starte zuerst den MySQL-Dienst neu. Unter Debian-basierten Betriebssystemen:

```shell
sudo systemctl restart mysql.service
```

Führe anschließend folgendes SQL-Statement für jede Mandanten-Datenbank aus:

```sql
OPTIMIZE TABLE isys_search_idx;
```

Vollständiges SQL Statement für den ersten Mandanten mit der Datenbank idoit_data:

```sql
USE idoit_data;
OPTIMIZE TABLE isys_search_idx;
```

Führe zum Schluss ein Neu-Indexing über die i-doit Console oder die i-doit Verwaltung durch (siehe oben).

### Das Limit von 2500 Ergebnissen erhöhen

Wenn Objekte fortlaufend benannt werden (z.B. 123456-00001 bis 123456-99999), findest du mit den Standard-Sucheinstellungen nur Objekte bis 123456-02500. Dieses Limit dient der Performance. Um es zu erhöhen, fuege die folgende Experteneinstellung hinzu.

Beispiel für ein Limit von 5000 Ergebnissen:

| Key          | Value | Type        |
| ------------ | ----- | ----------- |
| search.limit | 5000  | Tenant-wide |

### Tipps zur Suche

IPv6 Adressen lassen sich auch mit gekürzten Schreibweisen finden. So kann beispielsweise die Adresse "2001:0db8:85a3:0000:0000:8a2e:0370:7334" auch mit "2001:db8:85a3::8a2e:370:7334" gefunden werden. Es ist also nicht notwendig, die vollständige Adresse einzugeben, um das gewünschte Ergebnis zu erhalten.

---

Es ist auch möglich MAC-Adressen mit Doppelpunkt, ohne Trennzeichen oder in 4er Blöcken zu suchen. So kann beispielsweise die Adresse "00:1A:2B:3C:4D:5E" auch mit "001A2B3C4D5E" oder "001A.2B3C.4D5E" gefunden werden. Es ist also nicht notwendig, die Trennzeichen einzugeben, um das gewünschte Ergebnis zu erhalten.
