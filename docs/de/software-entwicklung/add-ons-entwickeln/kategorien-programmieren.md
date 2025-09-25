---
title: Kategorien programmieren
description: Kategorien programmieren
icon:
status:
lang: de
---

# Kategorien programmieren

Kategorien sind das Kernstück von i-doit. Sie ermöglichen die Pflege von Informatione für spezifische Themenbereiche und bieten
darüber hinaus weitere Funktionalitäten, um diese Daten sinnvoll zu nutzen. Sollte das Standardset an Kategorien mal nicht den
Anforderungen genügen, schaffen "benutzerdefinierte Kategorien" Abhilfe. So können simple Anwendungsfälle über eine grafische
Konfigurationsoberfläche ohne jegliche Programmierkenntnisse abgebildet werden. Sobald der Anwendungsfall jedoch eine mittlere
Komplexität aufweist werden schnell die Limitierungen der "benutzerdefinierten Kategorien" sichtbar. An diesem Punkt hilft nur
eine physische i-doit Kategorie.

## Vorteile einer programmierten Kategorie

Programmierte Kategorien sind im Vergleich zu benutzerdefinierten Kategorien völlig frei im Bezug auf Darstellung und verwendete
Formulartypen.

Darüber hinaus ist es möglich diese Art von Kategorien zu gruppieren, sodass im i-doit Frontend sogenannte "Ordner-Kategorien"
dargestellt werden können (z.B. "Netzwerk", "Lokaler Massenspeicher" oder "Verkabelung").

Aufgrund der selbst implementierten Datenhaltung ist es theoretisch ebenfalls möglich auf die API von Drittsystemen zuzugreifen
und diese somit "on-the-fly" in i-doit einzubinden (siehe "Alle Tickets" oder "Monitoring" Kategorien).

## Nachteile einer programmierten Kategorie

Freiheit bringt bekanntlich auch Verantwortung. Bei programmierten Kategorien verhält es sich ähnlich. Bei einer codebasierten
Kategorie entscheidet der Entwickler über den angebotenen Funktionsumfang. Ferner sollte beachtet werden, dass der
zugrundeliegende Code sich in das i-doit Ökosystem einbettet. Obwohl wir natürlich Breaking-Changes weitestgehend vermeiden, so
ist es trotz allem nicht ausgeschlossen, dass Änderungen durch zukünftige Updates notwendig werden können.

Darüber hinaus können bei Fehlern im eigenen Code, die zum Beispiel Datenverlust zur Folge haben, kein Support geleistet werden -
um solche Fälle zu verhindern kann die Entwicklungspartner Plattform für den Austausch mit den i-doit Entwicklern genutzt werden.

## Nötige Dateien für eine eigene Kategorie

Um eine eigene globale Kategorie zu erstellen sind im Grunde nur drei Dateien nötig. Im Fall einer Multi-Value-Kategorie kommt
noch eine vierte Datei hinzu:

### Data-Access-Object PHP Klasse

Die sogenannte "Data-Access-Object"-Klasse (kurz DAO) wird benötigt, um die Attribute einer Kategorie zu definieren. Sie
beinhaltet zusätzlich alle notwendigen Methoden, um mit den Daten der Datenbank zu interagieren. Das bedeutet: lesen, schreiben
und löschen (CRUD).

Einfache Datenstrukturen können "out-of-the-box" durch i-doit behandelt werden. Hierbei kommen generische Funktionen zum Einsatz,
welche auf Grundlage der Property-Definitionen agieren. Somit können CRUD-Operationen durchgeführt werden.

Sofern jedoch komplexere Datenstrukturen (n:m Verknüpfungen und Referenzen) verarbeitet werden sollen, müssen zwingend eigene
Methoden für CRUD-Operationen bereitgestellt werden.

### List DAO PHP Klasse (nur für Multi-Value)

Multi-Value-Kategorien bestehen aus zwei Teilen: Einer Liste und der Detailansicht eines Datensatzes. Für die Liste ist eine
spezielle "List DAO" notwendig, welche die darzustellenden Attribute definiert. Mit Hilfe optionaler Methoden können die
Kategorie-Daten für die GUI vorbereitet werden (z.B. zum Erstellen von Links oder Umformatieren der Werte).

### User-Interface PHP Klasse

Die User-Interface Klasse (kurz UI) stellt das Bindeglied zwischen dem i-doit Frontend und der DAO dar. Diese Klasse wird
üblicherweise dazu verwendet, um Daten aus der dazugehörigen DAO zu verarbeiten und für das Smarty Template vorzubereiten.

Beinhaltet die Kategorie nur einfache Attribute ist es möglich diese Klasse leer zu lassen, da (ähnlich wie bei der DAO) i-doit
diese Aufgabe selbstständig erledigen kann.

Sollte es sich allerdings um komplexe Daten oder eine eigene Darstellung im Frontend handeln, muss die zuständige Logik hier
implementiert werden.

### Smarty Template

Das [Smarty](https://www.smarty.net/) Template wird benötigt, um die Daten aus der DAO bzw. UI für den User darzustellen. Das
geschieht in Form von HTML. Anders als bei der DAO- und UI-Klasse, ist es nicht möglich diesen Prozess von i-doit erledigen zu
lassen - das Template muss zwingend vorhanden sein und alle nötigen Aufgaben selbst erledigen.

Damit nicht jedes Template seine eigenen Formulare definieren muss, liefert der i-doit Kern viele "Smarty Plugins"
mit, [dazu später mehr](kategorien-programmieren.md#smarty-plugins).

## Nötige Vorbereitung für eine eigene Kategorie

Zusätzlich zu den PHP Dateien und dem Template benötigt eine Kategorie zwei weitere Teile:

1. Die Kategorie muss im Backend registriert werden. Dies geschieht mittels Datensatz in der Datenbanktabelle `isysgui_catg`
2. Die Kategorie benötigt eine eigene Datenbanktabelle

### Kategorie im Backend registrieren

Damit i-doit unsere Kategorie "kennt" und entsprechend verwenden kann, muss sie in der Tabelle `isysgui_catg` registriert werden.
Das bedeutet, wir erzeugen einen Datensatz der auf die DAO Klasse und Kategorietabelle zeigt. Für die CPU-Kategorie sieht dieser
Eintrag folgendermaßen aus:

```sql
INSERT INTO isysgui_catg
SET isysgui_catg__type = 2,
isysgui_catg__title = 'LC__CMDB__CATG__CPU',
isysgui_catg__const = 'C__CATG__CPU',
isysgui_catg__source_table = 'isys_catg_cpu',
isysgui_catg__class_name = 'isys_cmdb_dao_category_g_cpu',
isysgui_catg__parent = NULL,
isysgui_catg__list_multi_value = 1,
isysgui_catg__status = 2,
isysgui_catg__standard = 0,
isysgui_catg__overview = 1;
```

Die Tabelle beinhaltet noch andere Felder, die wir jedoch nicht mehr verwenden. Beim erzeugen eines Datensatzes können diese also
ignoriert werden. Nachfolgend eine Erklärung zu den verschiedenen Feldern:

* `isysgui_catg__type`<br>
  Definiert den Kategorie "Typen" für die interne verwendung, wir verwenden die folgenden Typen:<br>
  **1 - View**: Eine Kategorie ohne eigene Daten bzw. Datenbanktabelle, sie stellt lediglich Daten dar, die in der UI-Klasse
  aufbereitet wurden.<br>
  **2 - Edit**: Eine normale Kategorie, die bearbeitet werden kann.<br>
  **3 - Rückwärtige**: Die "rückwärtige" Seite einer anderen Kategorie (z.B. "Personengruppen > Mitglieder").<br>
  **4 - Zuweisung**: Eine Kategorie, die lediglich Objektreferenzen zuweist (z.B. "Kontaktzuweisung").
* `isysgui_catg__title`<br>
  Beinhaltet die Sprache-Konstante der Kategorie.
* `isysgui_catg__const`<br>
  Beinhaltet die Konstante der Kategorie, diese ist sehr wichtig da sie intern als Identifikator dient (wir nutzen im Code keine
  IDs, da sich diese von Installation zu Installation ändern können).
  Die Kategorie-Konstante sollte IMMER dem Format `C__CATG__*` folgen und keine Sonderzeichen beinhalten, da diese von i-doit zu
  einer PHP-Konstante umgewandelt wird.
* `isysgui_catg__source_table`<br>
  Der Name der zugehörigen Datenbank Tabelle. Hierbei sollte beachtet werden, dass der Name NICHT mit "_list" endet, die
  eigentliche Datenbanktabelle allerdings schon.
* `isysgui_catg__class_name`<br>
  Der Name der zugehörigen DAO-Klasse.
* `isysgui_catg__parent`<br>
  Dieses Feld beinhaltet eine optionale Referenz zu einer anderen Kategorie. Diese entscheidet darüber, ob die Kategorie unterhalb
  einer anderen Kategorie dargestellt werden soll ("Ordner Kategorie")
* `isysgui_catg__list_multi_value`<br>
  Der Inhalt dieses Feldes (0 oder 1) entscheidet, ob eine Kategorie eine Multi-Value-Kategorie ist
* `isysgui_catg__status`<br>
  Der Status entscheidet, wie auch bei Objekten und Kategorien, ob der jeweilige Datensatz den "Normal" (= 2) Status hat und
  verwendet werden kann.
* `isysgui_catg__standard`<br>
  Eine "Standard"-Kategorie ist in jedem Objekttypen verfügbar und wird nur als Icon im Navigationsbaum eines Objektes
  dargestellt (siehe "Beziehungen", "Status Planung", "Alle Tickets" usw.)
* `isysgui_catg__overview`<br>
  Dieses Feld definiert, ob die Kategorie auf der Übersichtsseite verwendet werden kann oder nicht.

Diese notwendige Query wird idealerweise bei der Installation des eigenen Add-ons ausgeführt, siehe dazu auch den
Artikel "[Add-ons installieren, aktualisieren und aktivieren](add-ons-installieren-aktualisieren-und-entwickeln.md)".

### Kategorie Datenbanktabelle

Eine Kategorie benötigt eine Reihe an vorgegebenen Feldern, damit i-doit globales Verhalten im Bezug auf die Kategorien abbilden
kann.

```sql
CREATE TABLE isys_catg_cpu_list
(
    isys_catg_cpu_list__id                             int(10) unsigned NOT NULL AUTO_INCREMENT,
    isys_catg_cpu_list__isys_catg_cpu_manufacturer__id int(10) unsigned DEFAULT NULL,
    isys_catg_cpu_list__isys_catg_cpu_type__id         int(10) unsigned DEFAULT NULL,
    isys_catg_cpu_list__title                          varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    isys_catg_cpu_list__frequency                      bigint(15) unsigned DEFAULT NULL,
    isys_catg_cpu_list__description                    longtext COLLATE utf8_unicode_ci     DEFAULT NULL,
    isys_catg_cpu_list__status                         int(10) unsigned DEFAULT 1,
    isys_catg_cpu_list__property                       int(10) unsigned DEFAULT 0,
    isys_catg_cpu_list__isys_obj__id                   int(10) unsigned DEFAULT NULL,
    isys_catg_cpu_list__isys_frequency_unit__id        int(10) unsigned DEFAULT NULL,
    isys_catg_cpu_list__cores                          int(10) unsigned DEFAULT NULL,
    PRIMARY KEY (isys_catg_cpu_list__id),
    KEY                                                isys_catg_cpu_list_FKIndex2 (isys_catg_cpu_list__isys_catg_cpu_manufacturer__id),
    KEY                                                isys_catg_cpu_list_FKIndex3 (isys_catg_cpu_list__isys_catg_cpu_type__id),
    KEY                                                isys_catg_cpu_list__isys_obj__id (isys_catg_cpu_list__isys_obj__id),
    KEY                                                isys_catg_cpu_list__isys_frequency_unit__id (isys_catg_cpu_list__isys_frequency_unit__id),
    KEY                                                isys_catg_cpu_list__status (isys_catg_cpu_list__status),
    CONSTRAINT isys_catg_cpu_list__isys_frequency_unit__id FOREIGN KEY (isys_catg_cpu_list__isys_frequency_unit__id) REFERENCES isys_frequency_unit (isys_frequency_unit__id) ON DELETE SET NULL ON UPDATE CASCADE,
    CONSTRAINT isys_catg_cpu_list_ibfk_5 FOREIGN KEY (isys_catg_cpu_list__isys_obj__id) REFERENCES isys_obj (isys_obj__id) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT isys_catg_cpu_list_ibfk_6 FOREIGN KEY (isys_catg_cpu_list__isys_catg_cpu_manufacturer__id) REFERENCES isys_catg_cpu_manufacturer (isys_catg_cpu_manufacturer__id) ON DELETE SET NULL ON UPDATE CASCADE,
    CONSTRAINT isys_catg_cpu_list_ibfk_7 FOREIGN KEY (isys_catg_cpu_list__isys_catg_cpu_type__id) REFERENCES isys_catg_cpu_type (isys_catg_cpu_type__id) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```

[Hier gibt es weitere Informationen zu unseren Datenbanktabellen.](../datenbank-modell/index.md)

Hierbei bitte beachten, dass Kategorietabellen den Prefix `isys_catg_` und den Suffix `list` enthalten müssen.

Die folgenden vier Tabellenfelder werden von i-doit benötigt und müssen immer Bestandteil einer Kategorietabelle sein:

* `*__id`
* `*__isys_obj__id`
* `*__description`
* `*__status`

Alle weiteren Felder können für die eigenen Kategoriedaten verwendet werden.

Auch die Query, zum Erzeugen der Tabelle, wird idealerweise bei der Installation des eigenen Add-ons ausgeführt, siehe dazu auch
den Artikel "[Add-ons installieren, aktualisieren und aktivieren](add-ons-installieren-aktualisieren-und-entwickeln.md)".

## DAO Klasse

### Mindestvoraussetzung / Grundlagen

Eine DAO Klasse muss folgende Bedingungen erfüllen:

* Die Klasse muss von `isys_cmdb_dao_category_global` erben
* Die Klasse benötigt zwingend den "identifier", der sich im Klassennamen, der Tabelle und anderen Stellen wiederfindet via:
  `protected $m_category = 'identifier';`
* Wenn es sich um eine Multi-Value-Kategorie handelt, muss die Klasse die folgende Variable mitliefern:
  `protected $m_multivalued = true;`
* Um unnötige SQL Queries zu verhindern, liefern wir außerdem den Namen der Kategorie in einer Variable mit:
  `protected $categoryTitle = 'LC__CMDB__CATG__...';`
* Die DAO-Klasse muss zwingend die dazugehörigen Attribute definieren. Das geschieht mittels der Methode:
  `protected function properties()`

Darüber hinaus gibt es noch einige andere wichtige Variablen die von i-doit genutzt werden - in den meisten Fällen müssen diese
aber nicht explizit definiert werden, da i-doit dies auf Basis der `$m_category` Variable selbst erledigen kann. Die Voraussetzung
dafür ist, dass ein einheitliches Naming verwendet wird.

Die folgenden Variablen werden von i-doit selbst erzeugt:

* `protected $m_category_const = 'C__CATG__{identifier}';`
  Wird die Konstante beinhalten, mit deren Hilfe die Kategorie identifiziert werden kann.
* `protected $m_category_id = 123;`
  Beinhaltet die ID der Konstante und wird mit Hilfe der Konstante aufgelöst.
* `protected $m_table = 'isys_catg_{identifier}_list';`
  Beinhaltet den Namen der Tabelle, der für interne Prozesse verwendet wird.
* `protected $m_ui = 'isys_cmdb_ui_category_g_{identifier}';`
  Der Name der zuständigen UI Klasse.
* `protected $m_list = 'isys_cmdb_dao_list_{identifier}';`
  Der Name der zuständigen List DAO (nur bei Multi-Value-Kategorien).
* `protected $m_tpl = 'catg__{identifier}.tpl';`
  Der Name des zuständigen Templates, welches in der UI Klasse verwendet werden soll.

### Attribut-Definition

Die Attribut-Definition stellt (neben den Metainformationen) das Herzstück einer Kategorie dar. Attribute müssen in der Methode
properties definiert werden.

Seit i-doit Version 1.12.3 gibt es sogenannte "Property Factory" Klassen, die unsere alten Arraynotationen ablösen. Der Vorteil
wird sofort deutlich: Aufgrund der objekt-orientierten Programmierung können viele Bereiche der Definition eingespart werden, da
diese für gewöhnlich immer sehr ähnlich sind und z.B. auf dem "Identifier" des Attributs, sowie dem Datenbankfeld basieren.

Für die meisten Standardfälle (Textfeld, Dialogfeld, Objektbrowser) gibt es entsprechende Klassen, ähnlich wie bei den "property
patterns". Sowohl die "Array Notation" als auch die "Property Factory" Option beinhalten im Endeffekt die gleichen Informationen -
eine detaillierte Erklärung der wichtigsten Attribut Definitionen sind [in diesem Artikel zu finden](attribut-definition.md).

Beispiel aus der AUDIT Kategorie

```php
protected function properties()
{
    return [
        'title' => (new TextProperty(
            'C__CMDB__CATG__AUDIT__TITLE',
            'LC__CMDB__CATG__AUDIT__TITLE',
            'isys_catg_audit_list__title',
            'isys_catg_audit_list'
        )),
        // ...
    ];
}
```

### Lesende Zugriffe (optional)

i-doit verwendet die Methode get_data zum Auslesen von Kategorie-Daten. Für gewöhnlich ist die generische Methode der vererbten
Klassen ausreichend für diese Aufgabe. In bestimmten Fällen kann es aber Sinnvoll sein diese Methode selbst zu implementieren, um
zum Beispiel eine bessere Performance zu erzielen:

Beispiel aus der CPU Kategorie

```php
/**
 * Get data method for retrieving data.
 *
 * @param  int    $p_catg_list_id
 * @param  int    $p_obj_id
 * @param  string $p_condition
 * @param  array  $p_filter
 * @param  int    $p_status
 *
 * @return isys_component_dao_result
 * @throws isys_exception_database
 */
public function get_data($p_catg_list_id = null, $p_obj_id = null, $p_condition = '', $p_filter = null, $p_status = null)
{
    $l_sql = 'SELECT * FROM isys_catg_cpu_list
        INNER JOIN isys_obj ON isys_catg_cpu_list__isys_obj__id = isys_obj__id
        INNER JOIN isys_obj_type ON isys_obj__isys_obj_type__id = isys_obj_type__id
        LEFT JOIN isys_catg_cpu_manufacturer ON isys_catg_cpu_manufacturer__id = isys_catg_cpu_list__isys_catg_cpu_manufacturer__id
        LEFT JOIN isys_catg_cpu_type ON isys_catg_cpu_type__id = isys_catg_cpu_list__isys_catg_cpu_type__id
        LEFT JOIN isys_frequency_unit ON isys_catg_cpu_list__isys_frequency_unit__id = isys_frequency_unit__id
        WHERE TRUE ' . $p_condition . ' ' . $this->prepare_filter($p_filter) . ' ';

    if ($p_obj_id !== null) {
        $l_sql .= $this->get_object_condition($p_obj_id);
    }

    if ($p_catg_list_id !== null) {
        $l_sql .= ' AND isys_catg_cpu_list__id = ' . $this->convert_sql_id($p_catg_list_id);
    }

    if ($p_status !== null) {
        $l_sql .= ' AND isys_catg_cpu_list__status = ' . $this->convert_sql_int($p_status);
    }

    return $this->retrieve($l_sql);
}
```

Diese Methode wird von allen internen Stellen verwendet, um objektspezifische Daten aus der Kategorie zu lesen. Um eine möglichst
hohe Kompatibilität mit allen Kernfunktionen zu garantieren, müssen sowohl Objekt als auch Objekttypinformationen zum geladenen
Datensatz mitgeliefert werden. Das geschieht mittels `LEFT JOIN isys_obj [...] und LEFT JOIN isys_obj_type [...]`.

Die Bedingungen für die SQL Query können im Idealfall exakt übernommen werden, einzig der Tabellen- und die Feldnamen gilt es
anzupassen.

### Schreibende Zugriffe (optional)

i-doit verwendet eine Reihe von Methoden zum Erstellen und Aktualisieren von Kategorie-Daten. Für gewöhnlich kann dies ohne
weitere Logik intern verarbeitet werden.

Bei komplexen Anwendungsfällen kann es jedoch notwendig werden diese Methoden selbst zu implementieren. Für gewöhnlich sollte es
ausreichen die folgenden drei Methoden zu implementieren:

#### Create Data Methode `public function create_data($data)`

Wie der Name schon sagt wird die Methode `create_data` dazu verwendet, um Kategoriedaten initial zu erstellen. Die Daten werden in
einem einfachen "Key-Value-Array" an die Methode übergeben.

Die Schlüssel entsprechen hierbei den Attribut-Schlüsseln, siehe [Attribut-Definition](attribut-definition.md).

Die weitere Verarbeitung der Daten kann hier auf zwei verschiedene Arten erfolgen:

1. Anpassen einzelner Attribut-Daten und anschließende Weiterleitung an `parent::create_data()`. Dies wird beispielsweise in der
   Passwort-Kategorie verwendet: Wir verschlüsseln das Passwort und lassen die übergeordnete Methode den Datensatz mit Hilfe von
   generischer Logik speichern.<br>
   Ein anderes Beispiel ist die Monitor-Kategorie. Hier wird lediglich die Bildschirmgröße entsprechend der ausgewählten "Einheit"
   berechnet und ebenfalls an `parent::create_data()` übergeben.
1. Theoretisch können wir an dieser Stelle die `INSERT INTO ...` Query selbst erzeugen und an die Datenbank übermitteln. Dies wird
   nicht empfohlen und auch von i-doits Kern-Kategorien nicht gemacht!
   Diese Option sollte nur dann gewählt werden, wenn ein komplexer Datensatz nicht von der generischen Implementierung gespeichert
   werden kann.

#### Save Data Methode `public function save_data($categoryEntryId, $data)`

Die gleichnamige `save_data` Methode funktioniert exakt wie `create_data`. Es gibt nur einen einzigen Unterschied: Der erste
Parameter der Methode beinhaltet die Datensatz ID des jeweiligen Eintrags.

#### Sync Methode `public function sync($data, $objectId, $status = 1)`

Sollte es beim Speichern von Kategorie-Daten mittels API, CSV-Import oder Listeneditierung zu Fehlern kommen, ist es möglich das
die zuständige sync Methode selbst implementiert werden muss. Bei der Verwendung von `create_data` und `save_data` ist dies
allerdings auszuschließen und dürfte nur Kategorien betreffen, die noch veraltete Speicherlogik nutzen.

### Sicherheit in SQL Queries

Um sogenannter [SQL-Injection](https://de.wikipedia.org/wiki/SQL-Injection) und auch
[XSS](https://de.wikipedia.org/wiki/Cross-Site-Scripting) vorzubeugen, liefert i-doit einige interne Helfer zum Säubern von
Inhalten, die durch den User eingegeben werden. Konkret stellt jede DAO eine Reihe von Methoden bereit, die für verschiedene
Einsatzzwecke gedacht sind:

* `convert_sql_id`<br>
  Diese Methode formatiert jeden übergebenen Wert zu einer Ganzzahl. Sollte das Ergebnis kleiner oder gleich 0 sein, wird `NULL`
  zurückgeliefert.
* `convert_sql_int`<br>
  Wird jeden übergebenen Wert zur Ganzzahl formatieren. Lediglich der Leerwert `NULL` wird auch zum SQL Leerwert `NULL`.
* `convert_sql_float`<br>
  Ähnlich wie `convert_sql_int`, nur für Kommazahlen. Hier wird außerdem eine interne Funktion verwendet, um beliebige Formate (
  Tausendertrennzeichen, Dezimaltrennzeichen, etc.) zu vereinheitlichen, sodass diese mit SQL kompatibel sind.
* `convert_sql_text`<br>
  Diese Methode wird den übergebenen Text formatieren, so dass jegliche Zeichen, die
  für [SQL-Injection](https://de.wikipedia.org/wiki/SQL-Injection) genutzt werden, nicht länger gefährlich sind.
* `convert_sql_boolean`<br>
  Diese Methode kann genutzt werden, um beliebige Werte zu 1 (für Wahr) oder 0 (für Falsch) zu formatieren.
* `convert_sql_datetime`<br>
  Mit dieser Methode wird ein Datum in die SQL konforme Schreibweise geändert. Es lassen sich Zeichenketten, Timestamp Werte,
  `"NOW()"` oder `"CURDATE()"` übergeben.
* `convert_sql_point`<br>
  Kann genutzt werden um "Coordinate"-Instanzen für SQL "geometry" Felder zu formatieren (zum Beispiel für GPS Koordinaten)

Für den Fall das HTML in die Datenbank gespeichert werden soll, können wir darüber hinaus
den "[HTML Purifier](http://htmlpurifier.org/)" nutzen, um möglichen Schadcode aus dem HTML zu entfernen. Dieser befindet sich im
i-doit Dependency Injection Container und kann folgendermaßen genutzt werden:

```php
$safe = isys_application::instance()
    ->container
    ->get('htmlpurifier')
    ->purify($unsafe);
```

In diesem Beispiel wird der "unsichere" Inhalt von $unsafe gesäubert und in $safe hinterlegt.

## UI Klasse

### Frontend Vorbereiten via `process()`

Diese Methode wird aufgerufen, wenn ein User im i-doit-Frontend in die Kategorie hinein navigiert. Diese Methode kann, sofern es
sich um eine "einfache" Kategorie (also ohne spezielle Logik) handelt, übersprungen werden, da i-doit alle notwendigen Daten
selbstständig verarbeiten kann.

Damit ist das auslesen der Kategorie Daten zum jeweiligen Objekt und die übergabe an das Template gemeint. Außerdem werden die "UI
Parameter" aus der Attribut-Definition an das Template übergeben (mehr dazu im
Bereich "[Reihenfolge der Datenübergabe](#reihenfolge-der-datenubergabe)")

Im Fall einer "View"-Kategorie oder komplexen Daten, die vor der Übergabe an das Template verarbeitet werden müssen, muss die
`process` Methode genutzt und die zugrundeliegenden Daten manuell an das Template weitergeleitet werden.

Die übergabe an das Template kann auf zwei Arten geschehen:

### Direkte Zuordnung von Variablen an das Template

Innerhalb der UI-Klasse haben wir Zugriff auf die Smarty-Instanz und können mittels `$template->assign('key', 'value')` Daten an
das Template übermitteln:

```php
$this
    ->get_template_component()
    ->assign('templateVar', $phpVar);
```

Innerhalb des Templates kann nun mit Hilfe der leicht
angepassten [Smarty Syntax](https://www.smarty.net/docsv2/en/language.basic.syntax.tpl) unsere Variable ausgegeben werden:

```
[{$templateVar}]
```

### Übergabe der Daten an Smarty-Plugins mittels "TOM" und "rules"

i-doit verfügt über ein eigenes Sub-System zum Verteilen von Daten
an [Smarty Plugins](https://www.smarty.net/docsv2/en/plugins.tpl). Das funktioniert mit Hilfe des "Template Object Models" (kurz
TOM) und den sogenannten "rules".

Über das TOM werden verschiedene Bereiche des i-doit-Frontend definiert, siehe hierzu folgende Darstellung:

[![kategorien-TOM](../../assets/images/de/software-entwicklung/add-ons-entwickeln/kategorie-programmieren/tom-areas.png)](../../assets/images/de/software-entwicklung/add-ons-entwickeln/kategorie-programmieren/tom-areas.png)

Die Kategorie-Templates werden im "contentbottomcontent"-Bereich dargestellt, der zugehörige TOM-Pfad lautet "
tom.content.bottom.content". Um Daten aus der UI- Klasse in die Smarty-Plugins zu leiten, müssen wir folgende Codezeilen
schreiben:

```php
$rulesArray = [
    'C__CATG__ATTRIBUTE_ID' => [
        'p_strValue' => 'Test'
        // ...
    ]
];

$this
    ->get_template_component()
    ->smarty_tom_add_rules('tom.content.bottom.content', $rulesArray);
```

In unserem Template können wir nun ein Smarty Plugin nutzen, um den Wert "Test" in einem Textfeld auszugeben. Dafür ist folgende
Syntax nötig:

```
[{isys type="f_text" name="C__CATG__ATTRIBUTE_ID"}]
```

Würden wir nun unsere Kategorie öffnen, würde das Template (je nach View / Edit Modus) den Text bzw. ein Textfeld mit dem Inhalt "
Test" darstellen.

Je nach Smarty-Plugin gibt es eine Reihe verschiedener Parameter, die man übergeben kann, um die jeweiligen Formularfelder mit
Daten zu befüllen. Im Quelltext findet man die verschiedenen Plugins im Verzeichnis `{i-doit}/src/classes/smarty`. Weitere
Beispiele folgen im Bereich "[Smarty Plugins](#smarty-plugins)".

### Liste vorbereiten via `process_list()` (nur Multi-Value-Kategorien)

Diese Methode wird aufgerufen, sobald ein User in eine Multi-Value-Kategorie navigiert. Sie ist hauptsächlich dafür verantwortlich
die Tabelle vorzubereiten. Für gewöhnlich muss diese Methode nicht selbst implementiert werden - einzig Kategorien vom Typ "
Zuweisung" müssen dies tun, um die "Hinzufügen" -Schaltfläche mit einer "Objekt-Browser"-Instanz zu koppeln.

Das geschieht mittels `$this->object_browser_as_new(...)`. Es gibt eine Reihe an notwendigen Parametern, die man sich am besten
aus Kategorien, wie zum Beispiel der "Kontaktzuweisung" oder "Stacking", abschaut.

Anschließend kann `parent::process_list()` mit allen Parametern aufgerufen werden, damit i-doit den Rest übernimmt.

## Kategorie-Template

### Genereller Aufbau

Der hier beschriebene generelle Aufbau bezieht sich auf Kategorien, die im i-doit "Look and Feel" dargestellt werden sollen. Hier
benötigen wir nur eine einfache Tabelle mit vorgegebenen CSS Klassen:

```html

<table class="contentTable">
    <tr>
        <td class="key">Label</td>
        <td class="value">Form field</td>
    </tr>
    <tr>
        <td colspan="2">
            <hr class="mt5 mb5"/>
        </td>
    </tr>
    <tr>
        <td class="key">
            [{isys type='f_label' name='C__CATG__ATTRIBUTE_ID' ident="LC__LANGUAGE_CONSTANT"}]
        </td>
        <td class="value">
            [{isys type="f_count" name="C__CATG__ATTRIBUTE_ID"}]
        </td>
    </tr>
</table>
```

### Smarty-Plugins

Jedes dieser Plugins verfügt über eine Reihe gemeinsamer aber auch spezifischer Parameter, die nur für dieses Plugin verwendet
werden können.

* `f_label`
* `f_text`
* `f_textarea`
* `f_wysiwyg`
* `f_password`
* `f_dialog`
* `f_popup`

Einige der gemeinsamen Parameter lauten:

* `name`<br>
  Der Name ist notwendig und wird für das "TOM" und die übergebenen "rules" verwendet, um das jeweilige Plugin zu identifizieren.
* `id` oder `p_strID`<br>
  Die "id" wird in den meisten Fällen im HTML als gleichnamiges Attribut ausgegeben und kann dann im Javascript wiederverwendet
  werden, um Elemente zu selektieren.
* `type`<br>
  Der "type" Parameter entscheidet letztendlich darüber, welches Smarty Plugin verwendet werden soll. Mit Hilfe des übergebenen
  Wertes lässt sich auch die zuständige PHP-Klasse ausfindig machen:
  `isys_smarty_plugin_{type}.class.php`.
* `p_strClass`<br>
  Wird verwendet, um CSS-Klassen auf die HTML-Elemente zu schreiben.
* `p_strStyle`<br>
  Der Inhalt dieses Parameters wird als "style" Attribut auf das zuständige HTML-Element geschrieben.

Die beste Anlaufstelle für verfügbare Parameter ist der Code selbst, da die Plugins von Zeit zu Zeit aktualisiert werden und eine
statische Dokumentation an dieser Stelle schnell veraltet sein würde.

In einigen Smarty-Plugins werden auch Javascript-spezifische Parameter verwendet, wie zum Beispiel `p_onChange`, `p_onClick` oder
auch `p_onMouseOver` und `p_onKeyDown` etc. - diese Parameter sollten möglichst nicht verwendet werden, wenn es sich vermeiden
lässt.

Diese Fälle lassen sich nur dann nicht vermeiden, wenn sie absolut notwendig sind und auch im Kontext anderer Oberflächen
existieren müssen (wie zum Beispiel "Listeneditierung").

### Popups in i-doit

Neben den anderen Formularfeldern gibt es in i-doit auch "popups", wie zum Beispiel den Objekt-Browser, Dialog-Plus oder den
Datepicker. Für diese GUI Elemente wird immer der gleiche "type" verwendet ("f_popup"). Das jeweilige Popup muss dann über den
Parameter `p_strPopupType` bestimmt werden.

Die Kern-Popups befinden sich im Ordner `{i-doit}/src/classes/popups/` und werden über ihren Typen referenziert:
`isys_popup_{type}.class.php`.

Popup-Klassen erben immer von `isys_component_popup` und beinhalten mindestens zwei Methoden:

* `handle_smarty_include`<br>
  Diese Methode wird sowohl im VIEW- als auch EDIT-Modus aufgerufen und muss HTML zurückliefern das den eigentlichen Popup-Trigger
  beinhaltet - dabei handelt es sich um ein beliebiges HTML Element, dass ein "onclick" Attribut erhält, dessen Inhalt mit Hilfe
  von `$this->getModalJs(...)` erzeugt wird. Üblicherweise beinhaltet das HTML auch noch ein Formular-Feld, dass den jeweiligen
  Popup-Wert beinhaltet.
* `handle_smarty_request`<br>
  Diese Methode wird via Ajax-Request aufgerufen, wenn der Popup-Trigger aktiviert wurde. Sie muss das Popup spezifische
  Smarty-Template rendern und den Request mittels die; beenden. i-doit wird das Template im Frontend empfangen, in das HTML des
  Popups einbetten und darstellen.

### Reihenfolge der Datenübergabe

Wie zuvor beschrieben, kann die UI Klasse im besten Fall die komplette Verarbeitung der Daten und UI Parameter übernehmen. Das
heißt, sie übergibt sowohl Daten aus der DAO als auch die UI-Parameter aus der Attribut-Definition direkt an das TOM.

Diese Logik kann man sich zunutze machen, um sich in der UI Klasse nur auf das Wesentliche zu beschränken, indem man zu Beginn der
`process` Methode direkt `$rules = parent::process();` aufruft.

Das `$rules` Array lässt sich nach Belieben ergänzen (oder auch nullen). Am Ende der Methode sollte das `$rules` Array erneut an
Smarty übergeben werden.

Der letzte Ort an dem man die Parameter ändern kann ist unmittelbar im Template selbst. Theoretisch kann jeder (mittels TOM)
übermittelte Parameter auf diesem Weg überschrieben werden:

```
[{isys type="f_text" name="C__CATG__EXAMPLE_TEXT" p_strClass="css-class"}]

[{isys type="f_dialog" name="C__CATG__EXAMPLE_DIALOG" p_strTable="isys_purpose"}]
```

Was in der Theorie gut funktioniert, könnte dem Entwickler in der Praxis leider den ein oder anderen Stolperstein in den Weg
legen. Denn andere Oberflächen (wie zum Beispiel die "Listeneditierung") werden die geänderten Parameter nicht übergeben bekommen
und dadurch andere Ergebnisse darstellen als in der Kategorie selbst.

Auf der anderen Seite kann dieses Wissen aber auch gezielt genutzt werden, um in der Kategorie selbst ein anderes (gewünschtes)
Verhalten zu erzeugen.
