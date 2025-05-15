# CMDB Prozessoren

In diesem Artikel wird darauf eingegangen, wie das i-doit-interne routing funktioniert und wir damit eine eigene GUI realisieren können.

## CMDB Factory

Die verschiedenen Prozessoren müssen über die "CMDB Factory" Klasse geholt werden. Diese bereitet die Prozssoren intern vor
und liegt im Service Container. Die CMDB Factory kann demnach folgendermaßen geholt werden:

```php
/** @var \idoit\Component\Factory\CmdbFactory $factory */
$factory = isys_application::instance()->container->get('cmdb.factory');

// ...
```

Aus der `$factory` Instanz können nun die verschiedenen Prozessoren geholt werden. Bitte berücksichtigt, 
das der Kategorie Prozessor zum Zeitpunkt von i-doit 35 noch nicht einsatzbereit ist. Ihr werdet daher eine Exception erhalten
wenn ihr probiert diesen zu nutzen.

Diese Prozessoren stellen eine interne Schnittstelle (API) dar, die von Entwicklern genutzt werden soll um sowohl die Arbeit
zu erleichtern als auch eine einheitliche Datenverarbeitung zu gewährleisten.

Die Prozessoren übernehmen dabei alle nötigen Schritte die z.B. beim erstellen eines Objekts nötig sind:

- Korrekte Events/Signale werden getriggert
- Validierung der Daten
- Prüfung der Rechte (die Prozessoren arbeiten immer im Kontext des aktuell eingeloggten Nutzers)
- Schreiben von Logbucheinträgen

## Nutzung von DTO Klassen

Um "komplexere" Aktionen auszuführen, die auch Datenvalidierung beinhalten, nutzen wir **DTO** Klassen (Data Transfer Object).
Diese sind Immutable, verfügen über typisierte Parameter und können die gegebenen Daten automatisch Validierung.
Für die verschiedenen Aktionen "lesen", "schreiben" und "bearbeiten" gibt es jeweils pro Bereich "Objekttyp Gruppe", "Objekttyp"
und "Objekt" eigene Request DTO Klassen.

Die Ergebnisse der jeweiligen Prozessor Methoden werden eine Instanz einer korrespondierenden Response DTO Klasse zurückliefern. 

Beispiele findet ihr weiter unten in den jeweiligen Bereichen.

## Fehlerbehandlung

Die CMDB Prozessoren sollen die Arbeit erleichtern und arbeiten daher mit den folgenden Exceptions:

- `\idoit\Dto\Exception\AuthorizationException` bei Berechtigungsfehlern (die Prozessoren arbeiten immer im Kontext des aktuell eingeloggten Nutzers)
- `\idoit\Dto\Exception\InternalSystemException` bei internen Fehlern
- `\idoit\Dto\Exception\ValidationException` bei Validierungsfehlern

## Objekttyp Gruppen

Der Prozessor für Objekttyp Gruppen kann folgendermaßen aus der CMDB Factory geladen werden: 

```php
/** @var \idoit\Component\Processor\ObjectTypeGroup\ObjectTypeGroupProcessor $processor */
$processor = $factory->getObjectTypeGroupProcessor();
```

Die `ObjectTypeGroupProcessor` Klasse bietet die folgenden Methoden um Objekttyp Gruppen zu verarbeiten:

- `read(ReadRequest $dto)`
- `readById(int $id)`
- `create(CreateRequest $dto)`
- `update(UpdateRequest $dto)`
- `purge(int $id)`

### Existierende Objekttyp Gruppe(n) lesen (read, readById)

Zum lesen gibt es zwei Methoden:

- `read` benötigt eine `\idoit\Component\Processor\Dto\Object\ReadRequest` Instanz. Diese ermöglicht das lesen mehrerer Einträge auf Basis von IDs oder Status
- `readById` benötigt lediglich eine ID als integer.

```php
/** @var \idoit\Component\Processor\Dto\ObjectTypeGroup\ReadResponse $response */
$response = $processor->read(new ReadRequest([123], [C__RECORD_STATUS__NORMAL]));
$response = $processor->readById(123);
```

Die `\idoit\Component\Processor\Dto\ObjectTypeGroup\ReadResponse` beinhaltet Instanzen von 
`idoit\Component\Processor\Dto\ObjectTypeGroup\Dto` Klassen.

### Neue Objekttyp Gruppe erstellen (create)
### Existierende Objekttyp Gruppe bearbeiten (update)
### Existierende Objekttyp Gruppe löschen (purge)

Da hier keine spezifischen Daten benötigt werden, genügt es die jeweilige ID als integer der zu löschenden Objekttyp Gruppe zu übergeben.

```php
/** @var \idoit\Component\Processor\Dto\ObjectTypeGroup\RankResponse $response */
$response = $processor->purge(123);
```

## Objekttypen

Text

```php
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\PhpFileLoader;

isys_application::instance()->container->get('routes')
    ->addCollection((new PhpFileLoader(new FileLocator(__DIR__)))->load('config/routes.php'));
```

## Objekte

Text

```php
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\PhpFileLoader;

isys_application::instance()->container->get('routes')
    ->addCollection((new PhpFileLoader(new FileLocator(__DIR__)))->load('config/routes.php'));
```

## Kategorien

TODO
