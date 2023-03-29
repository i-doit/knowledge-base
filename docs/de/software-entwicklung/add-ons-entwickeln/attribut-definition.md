# Attribut definition

Die zentrale Funktion einer CMDB wie i-doit ist das Dokumentieren. Zusammenhängende Datensätze werden hierbei in Kategorien gruppiert. Jede Kategorie wird wiederum durch ihre Attribute ausgeprägt. Ein Attribut repräsentiert einen pflegbaren Datensatz, wie zum Beispiel ein Text-, Dialog- oder Objektbrowser-Feld. Diese Attribute werden üblicherweise über die Oberfläche im Browser eingetragen und gelesen. Darüber hinaus ist es möglich weitere i-doit Funktionen zu nutzen, um die Dokumentation in verschiedenster Form zu verwenden - sei es in Reports, der API, dem Dokumente Add-on oder sonstigen Exports.

Damit die Attribute und deren Daten in den verschiedenen Funktionen genutzt werden können, müssen diese technisch definiert sein. Die verschiedenen Optionen sind in diesem Artikel beschrieben.

Die Definition eines Attributes wird vom i-doit System benötigt, um das entsprechende Attribut in die Kernfunktionen zu integrieren. Um ein Attribut zum Beispiel in der Listeneditierung, der API sowie unseren Importen zu nutzen ist eine korrekte und ausführliche Definition unerlässlich.

In den meisten Fällen wird eine detaillierte Definition vollständig von den "Property Factory" Klassen übernommen und bedarf keiner weiteren Bearbeitung.

Arten der Definition
====================

Array-Notation (deprecated)
---------------------------

**Achtung: Die veraltete Array-Notation sollte, nicht länger verwendet werden. Die "Property-Factory"-Klassen bieten eine komfortable und sichere Alternative.**

Vor der Einführung der Property-Factories in i-doit v1.12.3, musste die Definition mittels verschachtelter Arrays stattfinden. Damit ständig wiederkehrende Strukturen nicht dupliziert werden mussten, wurden sogenannte "Patterns" eingeführt, welche die Basisdefinition eines Attributes darstellt.

Für die meisten Attributtypen gibt es ein entsprechendes Pattern in der PHP-Klasse isys_cmdb_dao_category_pattern. Jedes Pattern liefert die für den jeweiligen Typen zutreffende Definition, unter anderem die Datentypen, UI-Standards, verfügbare "Provides" und Validierungsmethoden.

In der DAO werden die entsprechenden Patterns mittels array_replace_recursive um spezifische Daten ergänzt, die für das jeweilige Attribut notwendig sind. Üblicherweise zählen dazu Übersetzungen, Datenbankfelder, Datenbankreferenzen, UI Parameter und ggf. "Callback" Methoden für bestimmte Datentypen.

Da diese Art der Definition sehr schnell unübersichtlich wird und viele redundanten Informationen enthält wurde das neue Format der "Property-Factory"-Klassen etabliert. Diese beinhalten letztlich die gleichen Informationen, verschlanken aber aufgrund der objektorientierten Programmierung die Nutzung und Redundanzen ganz enorm!

Dies trägt außerdem dazu bei, den Code sicherer und robuster zu gestalten.

Beim Erstellen neuer Kategorien und Attribute gibt es keinen Grund mehr diese veraltete Struktur zu nutzen - alle neuen Definitionen sollten die Property-Factories nutzen.

Property-Factories
------------------

Diese Art der Definition ist der Arraynotation weit überlegen und kann enorm viel Code (und damit Fehlerpotential) einsparen. Wir empfehlen die "Property-Factory"-Klassen immer zu nutzen, wenn neue Attribute erzeugt werden.

Dank der mitgelieferten mergeProperty*\-Methoden können alle Definitionen, je nach Bedarf, überschrieben werden.

### Ausprägungen

Ähnlich wie bei den "Patterns" für die Array-Notation gibt es eine Reihe von vorgegebenen Property Factory Klassen, mit denen sich Attribute definieren lassen. Jede dieser Ausprägungen verfügt über die jeweils notwendigen Konstruktor-Parameter, um das Attribut funktionsfähig abzubilden.

Zusätzlich existieren Helper-Methoden, um einzelne Bereiche zu ergänzen oder zu ersetzen - das ist allerdings häufig gar nicht nötig und wird nur in speziellen Fällen angewandt, in denen keine passende Property-Factory existiert.

Die am häufigsten genutzten Factories  sind:

*   TextProperty
*   TextAreaProperty
*   DialogProperty
*   DialogPlusProperty
*   ObjectBrowserProperty
*   DateProperty
*   CommentaryProperty

Natürlich gibt es noch weitere Klassen, die teilweise schon sehr spezifische Fälle abdecken. Diese sind im Dateisystem unter <i-doit>/src/idoit/Component/Property/Type/ zu finden.

Bereiche zur Definitionen
=========================

Info
----

### Primary (Deprecated)

Diese Funktionalität wurde ursprünglich bei den Reports genutzt und durch dynamische Attribute abgelöst.

### Type

Gibt Aufschluss über den Attribut-Typen - die verfügbaren findet man als Klassen-Konstanten mit dem Prefix "C__PROPERTY__INFO__TYPE__" in idoit\Component\Property\LegacyPropertyInterface.

### Backward

Definiert, ob es sich bei einem Attribut um das rückwärtige Pendant einer anderen Kategorie handelt. Beispielsweise ist das Attribut isys_cmdb_dao_category_s_person_contact_assign::object (Zugewiesene Objekte) das rückwärtige Attribut zu isys_cmdb_dao_category_g_contact::contact (Kontaktzuweisung). Dieses Feld wird nur innerhalb von rückwärtigen Kategorien verwendet und kann in allen anderen Fällen ignoriert werden.

Data
----

### Type

Der Typ beschreibt den Datentyp auf Seite der Datenbank und wird verwendet um korrekte Formatierung zu gewährleisten. 

### Source table

Hier wird der Name der Quell-Tabelle hinterlegt, in der die jeweiligen Daten zu finden sind. Diese Konfiguration ist ebenso notwendig wie das Feld (nächster Punkt).

### References

Diese Referenz Definition muss ein Array mit zwei Werten beinhalten: Die referenzierte Datenbanktabelle und dessen Feld, welches die (Fremdschlüssel) ID beinhaltet. Dies wird üblicherweise für Dialog-Plus oder andere 1:1 Felder verwendet.

### Field

Beinhaltet den Feldnamen der zuständigen Tabelle. Diese Information ist verpflichtend und wird verwendet beim "automatischen" lesen und schreiben von Daten.

### Relation type

Sollte es sich bei dem Attribut um eine Referenz handeln, die eine implizite Beziehung behandelt kann hier entweder statisch die Konstante des Beziehungstyp hinterlegt werden oder ein Callback vom Typ isys_callback welcher wiederum eine Konstante zurückliefern muss.

### Relation handler

Der sogenannte "relation handler" wird während der erstellung impliziter Beziehungen benutzt und muss ein Array zurückliefern welches aufschluss darüber gibt welches Objekt der "Parent" und welches das "Child" ist.

### Readonly

Diese Information gibt darüber aufschluss ob das Attribut schreibbar sein soll. Ein Beispiel hierfür wären die Felder "changed\_by" oder "changed" in der Allgemein Kategorie - diese sollen nicht verändert werden können.

### Select

Diese Konfiguration wird für referenzierte Werte verwendet, für die ein Sub-Select nötig wird. Der Wert muss ein Instanz von idoit\Module\Report\SqlQuery\Structure\SelectSubSelect sein.

Dies wird für Objektlisten und Reports verwendet.

### Join

Diese Konfiguration muss ein Array beinhalten mit einem oder mehreren Objekten vom Typ idoit\Module\Report\SqlQuery\Structure\SelectJoin. Dies wird für Referenzierte Werte im Kontext der Objektlisten und Reports verwendet um komplexe joins aufzubauen.

### Join list

Deprecated - Diese funktionalität wird nicht mehr verwendet.

### Index

Hier wird mittels boolean true oder false definiert ob es sich beim Datenbankfeld um ein indexiertes Feld handelt. Diese Information entscheidet unter anderem darüber ob ein Feld in den Objektlisten sortierbar ist.

### Field function

Dies wird für spezielle SQL-Typen verwendet, die durch eine interne Funktion verarbeitet müssen. Die einzigen Anwendungsfälle sind Längen- und Breitengrad (Standort Kategorie) da beide Datensätze im gleichen Feld gespeichert werden und zuvor mittels SQL Funktion X() und Y() verarbeitet werden.

### Sort

Kann eine Sub-Query beinhalten nach deren Ergebnis die Datensätze der Kategorie sortiert werden sollen. Wird für die Objektlisten und Reports verwendet.

### Field alias

Wird im Kontext von Referenzierten Werten verwendet, die ggf. den gleichen "Field" Wert haben. Der Alias unterstützt dabei um das Ergebnis auf einen anderen Namen zu mappen. Dies wird von mehreren Funktionen in i-doit verwendet.

### Table alias

Diese Konfiguration dient einem ähnlichen Zweck wie "Field alias" - um referenzierte Werte über eigene Namen lesen zu können.

### Sort alias

Übernimmt eine ähnliche Funktion wie "Field alias" und "Table alias" und wird im Kontext der Objekt- und Kategorielisten verwendet.

### Encrypt

Beinhaltet die Information ob das Feld verschlüsselt wird oder nicht. Dies wird üblicherweise für Passwort Felder benutzt und sorgt dafür das die i-doit interne Logik die Werte beim lesen und schreiben jeweils ver- und entschlüsselt .

UI
--

Der UI-Bereich ist notwendig für die Darstellung der Attribute in "generischen Oberflächen", wie zum Beispiel der Listeneditierung. Auch andere Bereiche von i-doit greifen auf diese Information zurück.

Vor allem die UI-Klasse der entsprechenden Kategorie wird diese Definition nutzen und die Daten an das [TOM (Template Object Model)](kategorien-programmieren.md#ubergabe-der-daten-an-smarty-plugins-mittels-tom-und-rules) übergeben. Dadurch brauchen Smarty- Parameter nicht an mehreren Stellen hinterlegt werden.

### ID

Hier muss die im Frontend genutzte ID des Feldes festgelegt werden. Diese muss in exakter Schreibweise im Kategorie-Template verwendet werden. Das sorgt dafür, dass die POST-Daten automatisch zum jeweiligen Attribut zugeordnet werden können.

Die ID hat für gewöhnlich folgende Struktur:

    C__CMDB__CAT<kategorie-typ>__<kategorie-kürzel>__<attribut-kürzel>

Also zum Beispiel:

    C__CMDB__CATG__AUDIT__TITLE

**Achtung**: Bei eigenen Add-ons macht es Sinn den Identifier im Kategorienamen zu verwenden. Dies verhindert Kollisionen mit i-doit-eigenen Kategorien und macht zudem die Zugehörigkeit transparent.

### Type

Beinhaltet den abstrahierten Formular-Typen. Hierfür werden die C__PROPERTY__UI__TYPE__* Konstanten aus idoit\Component\Property\LegacyPropertyInterface verwendet.

### Params

Hierbei handelt es sich um die Parameter, die an das Smarty-Plugin übergeben werden. Diese Parameter steuern z.B. die Darstellung, verfügbare Inhalte als auch spezielle (plugin-spezifische) Funktionen.

Sofern die Parameter an dieser Stelle definiert werden, brauchen sie nicht in der UI- Klasse oder dem Kategorie-Template hinterlegt werden. Auch "generische Oberflächen", wie z.B. die Listeneditierung, werden diese Parameter nutzen.

### Default

Hier kann ein Standardwert für das jeweilige Attribut angegeben werden, welches im "Erstellen"-Kontext der Kategorie verwendet wird.

### Placeholder (Deprecated)

Der Placeholder wurde ursprünglich für das gleichnamige HTML-Attribut verwendet und inzwischen durch ein Smarty-Plugin Parameter ersetzt.

### Empty message (Deprecated)

Diese Konfiguration wurde, wie auch der "Placeholder" Parameter, durch Smarty-Plugin Parameter setzt.

Format
------

Der "Format"- der Definition wird für optionale Callback-Methoden genutzt, um attributspezifische Daten nachzuladen. Dies wird unter anderem beim Export benutzt,um hinterlegte Daten in ein "lesbares" Format zu konvertieren.

Damit diese Daten auch im Import verarbeitet werden können, muss eine zusätzliche Callback-Methode mit gleichem Namen + "\_import" suffix hinterlegt werden. In der Regel wird dieser Teil nicht benötigt, da die Property-Factories die entsprechenden Callbacks bereits mitliefern.

Auf der anderen Seite werden die Format-Callbacks genutzt, um spezifischen Code für virtuelle- oder dynamische Attribute auszuführen, welche dann wiederum den gewünschten Inhalt zurückliefern.

Dependency
----------

Die Dependency wird für einige Attribute verwendet, deren Daten von anderen Attributen beeinflusst werden. Ein Beispiel hierfür ist die Abhängigkeit zwischen "Hersteller" und "Modell".

### Property key

Hier muss das Kürzel des abhängigen Attributes eingetragen werden.

### Smarty parameters

Die Abhängigkeit wird im Frontend abgebildet und muss daher mittels Smarty-Parameter definiert werden. Eine solche Abhängigkeit wird derzeit nur bei Dialog-Attributen unterstützt.

Provides
--------

Die "Provides" entscheiden darüber, welche i-doit Funktionen für dieses Attribut verfügbar sind. In den meisten Fällen werden die Property-Factories diese Option korrekt setzen.

Unter bestimmten Umständen kann es aber nötig sein ein Attribut für Im- und Export oder Listeneditierung zu sperren, zum Beispiel, wenn das Attribut im Kategorie-Template über benutzerdefinierte Logik verfügt, die sich nicht anders abbilden lässt.

Check
-----

Mit Hilfe dieser Definition können verschiedene Validierungsmöglichkeiten eingestellt werden. Es ist außerdem möglich das Attribut als Pflichtfeld zu definieren.

Sobald eine Validierung im Code definiert wurde, kann das Attribut in der i-doit Verwaltung nicht mehr für eine benutzerdefinierte Validierung verwendet werden.
