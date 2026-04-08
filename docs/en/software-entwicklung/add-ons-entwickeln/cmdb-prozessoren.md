---
title: CMDB Processors
description: "CMDB processors are internal interfaces for working with objects, object types, and object type groups."
icon:
status:
lang: en
---

# CMDB Processors

CMDB processors are internal interfaces for working with objects, object types, and object type groups.
These processors each have simple methods for reading, creating, modifying, and ranking.
In the process, they handle all necessary steps of the internal logic:

* Permission checks
* Normalizing data
* Validating data
* Triggering necessary "pre" events / signals
* Preparing data for the logbook
* Writing data
* Logging changes
* Triggering necessary "post" events / signals

This new logic is based on DTO objects. This makes steps such as validation easier and provides developers
with the advantage of code completion, since we work with objects instead of associative arrays.

**Important!** CMDB processors are a new feature available from *i-doit 36* onwards.
Please note that the processors currently only cover the following areas:

* Object type groups
* Object types
* Objects

Categories cannot be used yet.

## Quickstart

The processors are available through a unified interface, the **CMDB Factory**.
This component is available as a service in our Dependency Injection Container:

```php
// We can get the CMDB Factory from the container
$factory = isys_application::instance()->container->get('cmdb.factory');

// This can in turn be used to get the responsible processors:
$objectProcessor = $factory->getObjectProcessor();
$objectTypeProcessor = $factory->getObjectTypeProcessor();
$objectTypeGroupProcessor = $factory->getObjectTypeGroupProcessor();
```

The individual processors have recurring methods to make usage as simple as possible --
depending on the processor, the following methods exist:

* `archive` -- Parameter: ID (Integer), Return: "RankResponse DTO"
* `create` -- Parameter: "CreateRequest DTO", Return: "CreateResponse DTO"
* `delete` -- Parameter: ID (Integer), Return: "RankResponse DTO"
* `purge` -- Parameter: ID (Integer), Return: "RankResponse DTO"
* `read` -- Parameter: "ReadRequest DTO" with various filters, Return: "ReadResponse DTO"
* `readById` -- Parameter: ID (Integer), Return: "ReadResponse DTO"
* `restore` -- Parameter: ID (Integer), Return: "RankResponse DTO"
* `update` -- Parameter: "UpdateRequest DTO", Return: "UpdateResponse DTO"

## Request DTOs

The Request DTOs are *immutable*, meaning they cannot be changed after creation.
The parameters can only be provided once in the constructor.
The various Request DTOs have internal validation that is triggered by the respective processor
before the respective action is executed.

The respective validation rules can be seen in the DTO class.
Each parameter has types and optional attributes
(see [PHP documentation](https://www.php.net/manual/en/language.attributes.overview.php)).
The attributes are self-explanatory and can look like this (example from `idoit\Component\Processor\Dto\ObjectTypeGroup\CreateRequest`):

```php
#[Required]  
public readonly string $title; 
 
#[OrX(new IsNull(), new IsValidConstantString('C__OBJTYPE_GROUP__'))]  
public readonly string|null $constant = null; 
 
public readonly int $sort = 0; 
 
#[OrX(new IsNull(), new OneOf([C__RECORD_STATUS__BIRTH, C__RECORD_STATUS__NORMAL]))] 
public readonly int|null $status = null; 
```

Here we see that the `title` parameter is a required field of type `string`.<br>
The `constant` is optional and must -- if present -- be of type `string` and start with `C__OBJTYPE_GROUP__`.<br>
The `sort` parameter must be numeric -- no additional rules.<br>
The `status` is optional and must -- if present -- contain either the value of the constant `C__RECORD_STATUS__BIRTH` or
`C__RECORD_STATUS__NORMAL`.

The other Request DTOs are structured very similarly.

For some "simple" actions, such as archiving, deleting, or purging, no DTOs are required.
Here, it is sufficient to provide the desired ID as an integer.

## Response DTOs

Like the Request DTOs, the Response DTOs are *immutable*.
The contents are provided once by the system when creating the objects.

As a developer, these values can only be read.

Depending on the action, different Response DTOs are provided to the developer.
The selection is currently limited to the following:

### Create Response

The `CreateResponse` class inherits from the general `AbstractCreateResponse` and only contains the ID of the newly created record.

### Rank Response

The `RankResponse` class inherits from the general `AbstractRankResponse` and only contains the ID of the affected record.
This response is used for `archive`, `delete`, `purge`, and `restore`.

### Read Response

The `ReadResponse` class inherits from the general `AbstractReadResponse` and contains a collection of the read records
as DTO instances in the `$entries` variable. The response additionally has the following methods:

* `first(): ?object` -- Returns the first DTO instance or `null`
* `last(): ?object` -- Returns the last DTO instance or `null`
* `total(): int` -- Returns the number of DTO instances as an integer

### Update Response

The `UpdateResponse` class inherits from the general `AbstractUpdateResponse` and only contains the ID of the edited record.

## Error Handling

The CMDB processors are designed to simplify work and therefore only use the following three exceptions:

* `\idoit\Dto\Exception\AuthorizationException` -- For permission errors (the processors always operate in the context of the currently logged-in user)
* `\idoit\Dto\Exception\InternalSystemException` -- For internal errors
* `\idoit\Dto\Exception\ValidationException` -- For validation errors

These exceptions must be caught and handled in your own code to prevent undesirable PHP error messages, white pages, or
unwanted side effects.

## Processors Overview

### Object Type Groups

The `ObjectTypeGroupProcessor` class offers the following methods for working with object type groups:

* `create(CreateRequest $dto): CreateResponse`
* `purge(int $id): RankResponse`
* `read(ReadRequest $dto): ReadResponse`
* `readById(int $id): ReadResponse`
* `update(UpdateRequest $dto): UpdateResponse`

### Object Types

The `ObjectTypeProcessor` class offers the following methods for working with object types:

* `create(CreateRequest $dto): CreateResponse`
* `purge(int $id): RankResponse`
* `read(ReadRequest $dto): ReadResponse`
* `readById(int $id): ReadResponse`
* `update(UpdateRequest $dto): UpdateResponse`

### Objects

The `ObjectProcessor` class offers the following methods for working with objects:

* `archive(int $id): RankResponse`
* `create(CreateRequest $dto): CreateResponse`
* `delete(int $id): RankResponse`
* `purge(int $id): RankResponse`
* `read(ReadRequest $dto): ReadResponse`
* `readById(int $id): ReadResponse`
* `restore(int $id): RankResponse`
* `update(UpdateRequest $dto): UpdateResponse`

## Code Examples

Finally, some working code examples:

### Reading Object Type Groups

In this example, we read the object type groups with IDs 1, 2, and 3 and display them.

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

### Creating an Object Type

Here we create a new object type.
In this example, we use *named properties* to keep the constructor clear.
Additionally, we catch potential exceptions.

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
