# CMDB-Prozessoren

Bei den CMDB-Prozessoren handelt es sich um interne Schnittstellen, um mit Objekten, Objekttypen und Objekttyp-Gruppen zu arbeiten.
Diese Prozessoren verfügen jeweils über einfache Methoden zum Lesen, Erstellen, Verändern und Ranken.
Dabei berücksichtigen sie alle notwendigen Schritte der internen Logiken:

* Rechteprüfung
* Daten normalisieren
* Daten validieren
* Auslösen notwendiger "pre"-Events / Signale
* Vorbereiten der Daten für das Logbuch
* Daten schreiben
* Änderungen loggen
* Auslösen notwendiger "post"-Events / Signale

Diese neue Logik setzt auf DTO-Objekte. Das macht Schritte wie beispielsweise die Validierung einfacher und bietet uns Entwicklern
den Vorteil der Code-Vervollständigung, da wir hier mit Objekten anstelle von assoziativen Arrays arbeiten.

In dieser ersten Version gibt es noch keine Architektur für Kategorien. Wir arbeiten daran, diese Funktion nachzureichen. 🙂

**Wichtig!** Bei den CMDB-Prozessoren handelt es sich um ein neues Feature, das ab *i-doit 36* zur Verfügung steht.
Bitte beachtet, dass die Prozessoren aktuell nur die folgenden Bereiche abdecken:

* Objekttyp-Gruppen
* Objekttypen
* Objekte

Die Kategorien lassen sich derzeit noch nicht nutzen.

## Quickstart

Die Prozessoren sind über eine einheitliche Schnittstelle, die **CMDB Factory**, zu beziehen.
Diese Komponente liegt als Service in unserem Dependency-Injection-Container:

```php
// Aus dem Container können wir die CMDB Factory holen
$factory = isys_application::instance()->container->get('cmdb.factory');

// Diese kann wiederum verwendet werden, um die zuständigen Prozessoren zu holen:
$objectProcessor = $factory->getObjectProcessor();
$objectTypeProcessor = $factory->getObjectTypeProcessor();
$objectTypeGroupProcessor = $factory->getObjectTypeGroupProcessor();
```

Die einzelnen Prozessoren verfügen über wiederkehrende Methoden, um die Benutzung so einfach wie möglich zu gestalten –
je nach Prozessor existieren die folgenden Methoden:

* `archive` – Parameter: ID (Integer), Rückgabe: "RankResponse DTO"
* `create` – Parameter: "CreateRequest DTO", Rückgabe: "CreateResponse DTO"
* `delete` – Parameter: ID (Integer), Rückgabe: "RankResponse DTO"
* `purge` – Parameter: ID (Integer), Rückgabe: "RankResponse DTO"
* `read` – Parameter: "ReadRequest DTO" mit verschiedenen Filtern, Rückgabe: "ReadResponse DTO"
* `readById` – Parameter: ID (Integer), Rückgabe: "ReadResponse DTO"
* `restore` – Parameter: ID (Integer), Rückgabe: "RankResponse DTO"
* `update` – Parameter: "UpdateRequest DTO", Rückgabe: "UpdateResponse DTO"

## Request DTOs

Die Request DTOs sind *immutable*, das heißt, sie können nach der Erstellung nicht mehr geändert werden.
Die Parameter können einmalig im Konstruktor übergeben werden.
Die verschiedenen Request DTOs verfügen über eine interne Validierung, die vom jeweiligen Prozessor angestoßen wird,
bevor die jeweilige Aktion ausgeführt wird.

Die jeweiligen Validierungsregeln kann man in der DTO-Klasse sehen.
Jeder Parameter verfügt über Typen und optionale Attribute
(siehe [PHP-Dokumentation](https://www.php.net/manual/de/language.attributes.overview.php)).
Die Attribute sind sprechend gewählt und können etwa so aussehen (Beispiel aus `idoit\Component\Processor\Dto\ObjectTypeGroup\CreateRequest`):

```php
#[Required]  
public readonly string $title; 
 
#[OrX(new IsNull(), new IsValidConstantString('C__OBJTYPE_GROUP__'))]  
public readonly string|null $constant = null; 
 
public readonly int $sort = 0; 
 
#[OrX(new IsNull(), new OneOf([C__RECORD_STATUS__BIRTH, C__RECORD_STATUS__NORMAL]))] 
public readonly int|null $status = null; 
```

Hier sehen wir, dass der `title`-Parameter ein Pflichtfeld vom Typ `string` ist. \
Die `constant` ist optional und muss – falls vorhanden – vom Typ `string` sein und mit `C__OBJTYPE_GROUP__` beginnen. \
Der `sort`-Parameter muss numerisch sein – keine weiteren Regeln. \
Der `status` ist optional und muss – falls vorhanden – entweder den Wert der Konstanten `C__RECORD_STATUS__BIRTH` oder
`C__RECORD_STATUS__NORMAL` enthalten.

Die anderen Request DTOs sind sehr ähnlich aufgebaut.

Für einige „einfache“ Aktionen, wie zum Beispiel archivieren, löschen oder purgen, werden keine DTOs benötigt.
Hier reicht es, die gewünschte ID als Integer zu übergeben.

## Response DTOs

Wie auch die Request DTOs sind die Response DTOs *immutable*.
Die Inhalte werden einmalig vom System beim Erstellen der Objekte übergeben.

Als Entwickler können diese Werte lediglich ausgelesen werden.

Je nach Aktion werden verschiedene Response DTOs an den Entwickler übergeben.
Die Auswahl beschränkt sich aktuell auf die folgenden:

### Create Response

Die `CreateResponse`-Klasse erbt von der allgemeinen `AbstractCreateResponse` und beinhaltet lediglich die ID des neu erstellten Datensatzes.

### Rank Response

Die `RankResponse`-Klasse erbt von der allgemeinen `AbstractRankResponse` und beinhaltet lediglich die ID des betroffenen Datensatzes.
Diese Response wird für `archive`, `delete`, `purge` und `restore` verwendet.

### Read Response

Die `ReadResponse`-Klasse erbt von der allgemeinen `AbstractReadResponse` und beinhaltet eine Kollektion der gelesenen Datensätze
als DTO-Instanzen in der `$entries`-Variable. Die Response verfügt außerdem über die folgenden Methoden:

* `first(): ?object` – liefert die erste DTO-Instanz oder `null` zurück
* `last(): ?object` – liefert die letzte DTO-Instanz oder `null` zurück
* `total(): int` – liefert die Anzahl der DTO-Instanzen als Integer

### Update Response

Die `UpdateResponse`-Klasse erbt von der allgemeinen `AbstractUpdateResponse` und beinhaltet lediglich die ID des bearbeiteten Datensatzes.

## Fehlerbehandlung

Die CMDB-Prozessoren sollen die Arbeit erleichtern und arbeiten daher nur mit den folgenden drei Exceptions:

* `\idoit\Dto\Exception\AuthorizationException` – bei Berechtigungsfehlern (die Prozessoren arbeiten immer im Kontext des aktuell eingeloggten Nutzers)
* `\idoit\Dto\Exception\InternalSystemException` – bei internen Fehlern
* `\idoit\Dto\Exception\ValidationException` – bei Validierungsfehlern

Diese Exceptions müssen im eigenen Code abgefangen und verarbeitet werden, um unschöne PHP-Fehlermeldungen, weiße Seiten oder
ungewünschte Seiteneffekte zu verhindern.

## Prozessoren im Überblick

### Objekttyp-Gruppen

Die `ObjectTypeGroupProcessor`-Klasse bietet die folgenden Methoden, um mit Objekttyp-Gruppen zu arbeiten:

* `create(CreateRequest $dto): CreateResponse`
* `purge(int $id): RankResponse`
* `read(ReadRequest $dto): ReadResponse`
* `readById(int $id): ReadResponse`
* `update(UpdateRequest $dto): UpdateResponse`

### Objekttypen

Die `ObjectTypeProcessor`-Klasse bietet die folgenden Methoden, um mit Objekttypen zu arbeiten:

* `create(CreateRequest $dto): CreateResponse`
* `purge(int $id): RankResponse`
* `read(ReadRequest $dto): ReadResponse`
* `readById(int $id): ReadResponse`
* `update(UpdateRequest $dto): UpdateResponse`

### Objekte

Die `ObjectProcessor`-Klasse bietet die folgenden Methoden, um mit Objekten zu arbeiten:

* `archive(int $id): RankResponse`
* `create(CreateRequest $dto): CreateResponse`
* `delete(int $id): RankResponse`
* `purge(int $id): RankResponse`
* `read(ReadRequest $dto): ReadResponse`
* `readById(int $id): ReadResponse`
* `restore(int $id): RankResponse`
* `update(UpdateRequest $dto): UpdateResponse`

## Code-Beispiele

Abschließend einige lauffähige Code-Beispiele:

### Objekttyp-Gruppen lesen

In diesem Beispiel lesen wir die Objekttyp-Gruppen mit den IDs 1, 2 und 3 aus und stellen diese dar.

```php
use idoit\Component\Processor\Dto\ObjectTypeGroup\Dto;
use idoit\Component\Processor\Dto\ObjectTypeGroup\ReadRequest;

$factory = isys_application::instance()->container->get('cmdb.factory');
$processor = $factory->getObjectTypeGroupProcessor();
$response = $processor->read(new ReadRequest([1, 2, 3]));

echo 'Got ' . $response->total() . ' object type groups!' . PHP_EOL;
foreach ($response->entries as $entry) {
    /** @var Dto $entry */
    echo '- #' . $entry->id . ': ' . $entry->title . ' (' . $entry->constant . ')' . PHP_EOL;
}
```

### Objekttyp erstellen

Hier erstellen wir einen neuen Objekttyp.
Wir verwenden in diesem Beispiel *named properties*, um den Konstruktor übersichtlich zu halten.
Außerdem fangen wir potenzielle Exceptions ab.

```php
use idoit\Component\Processor\Dto\ObjectType\CreateRequest;

$factory = isys_application::instance()->container->get('cmdb.factory');
$processor = $factory->getObjectTypeProcessor();

$createRequest = new CreateRequest(
    title: 'Example Object Type',
    objectTypeGroup: 1,
    constant: 'C__OBJTYPE__SD__EXAMPLE_TYPE',
    isContainer: true,
    color: '#ff0000',
);

try {
    $newObjectTypeId = $processor->create($createRequest)->id;
    echo 'Created a new object type with ID ' . $newObjectTypeId;
} catch (\Throwable $e) {
    echo 'Something went wrong: ' . $e->getMessage();
}
```
