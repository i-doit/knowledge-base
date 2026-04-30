---
title: Attribute Definition
description: "The central function of a CMDB like i-doit is documentation. Related data records are grouped in categories."
icon:
status:
lang: en
---

# Attribute Definition

The central function of a CMDB like i-doit is documentation. Related data records are grouped in categories.
Each category is in turn characterized by its attributes. An attribute represents a maintainable data record,
such as a text, dialog, or object browser field. These attributes are typically entered and read via the
interface in the browser. Beyond that, it is possible to use additional i-doit functions to work with the
documentation in various ways -- whether in reports, the API, the Documents add-on, or other exports.

For the attributes and their data to be used in the various functions, they must be technically defined.
The various options are described in this article.

The definition of an attribute is needed by the i-doit system to integrate the corresponding attribute into
the core functions. To use an attribute in list editing, the API, or our imports, for example, a correct and
detailed definition is indispensable.

In most cases, a detailed definition is completely handled by the "Property Factory" classes and requires
no additional work.

## Property Factories

We recommend always using the "Property Factory" classes when creating new attributes.

Thanks to the included mergeProperty* methods, all definitions can be overridden as needed.

### Variants

Similar to the "patterns" for array notation, there is a range of predefined Property Factory classes that
can be used to define attributes. Each of these variants has the respective required constructor parameters
to represent the attribute functionally.

Additionally, there are helper methods to supplement or replace individual areas -- however, this is often
not necessary and is only applied in special cases where no suitable Property Factory exists.

The most commonly used factories are:

* TextProperty
* TextAreaProperty
* DialogProperty
* DialogPlusProperty
* ObjectBrowserProperty
* DateProperty
* CommentaryProperty

Naturally, there are additional classes that partially cover very specific cases. These can be found in the
filesystem under `<i-doit>/src/idoit/Component/Property/Type/`.

## Definition Areas

### Info

#### Type

Provides information about the attribute type -- the available types can be found as class constants with the
prefix `C__PROPERTY__INFO__TYPE__` in `idoit\Component\Property\LegacyPropertyInterface`.

#### Backward

Defines whether an attribute is the backward counterpart of another category. For example, the
attribute `isys_cmdb_dao_category_s_person_contact_assign::object` (Assigned objects) is the backward
attribute to `isys_cmdb_dao_category_g_contact::contact` (Contact assignment). This field is only used
within backward categories and can be ignored in all other cases.

### Data

#### Type

The type describes the data type at the database level and is used to ensure correct formatting.

#### Source Table

Here, the name of the source table is stored, in which the respective data can be found. This configuration is equally
necessary as the field (next point).

#### References

This reference definition must be an array with two values: the referenced database table and its field which
contains the (foreign key) ID. This is typically used for Dialog-Plus or other 1:1 fields.

#### Field

Contains the field name of the responsible table. This information is mandatory and is used for "automatic"
reading and writing of data.

#### Relation Type

If the attribute is a reference that handles an implicit relationship, either the constant of the relationship
type can be stored statically here, or a callback of type isys_callback which in turn must return a constant.

#### Relation Handler

The so-called "relation handler" is used during the creation of implicit relationships and must return an array
that indicates which object is the "Parent" and which is the "Child".

#### Readonly

This information indicates whether the attribute should be writable. An example of this would be the fields
`changed_by` or `changed` in the General category -- these should not be modifiable.

#### Select

This configuration is used for referenced values that require a sub-select. The value must be an instance of
`idoit\Module\Report\SqlQuery\Structure\SelectSubSelect`.

This is used for object lists and reports.

#### Join

This configuration must contain an array with one or more objects of type
`idoit\Module\Report\SqlQuery\Structure\SelectJoin`. This is used for referenced values in the context of
object lists and reports to build complex joins.

#### Join List

Deprecated -- This functionality is no longer used.

#### Index

Here, a boolean true or false defines whether the database field is an indexed field. This
information determines, among other things, whether a field is sortable in object lists.

#### Field Function

This is used for special SQL types that must be processed by an internal function. The only use cases are
latitude and longitude (location category), since both records are stored in the same field and must first
be processed using the SQL functions `ST_X()` and `ST_Y()`.

#### Sort

Can contain a sub-query by whose result the records of the category should be sorted. Used for object lists
and reports.

#### Field Alias

Used in the context of referenced values that may have the same "Field" value. The alias helps to map the
result to a different name. This is used by several functions in i-doit.

#### Table Alias

This configuration serves a similar purpose to "Field Alias" -- to read referenced values via custom names.

#### Sort Alias

Takes a similar role as "Field Alias" and "Table Alias" and is used in the context of object and category
lists.

#### Encrypt

Contains the information whether the field is encrypted or not. This is typically used for password fields
and ensures that the i-doit internal logic encrypts and decrypts the values during reading and writing.

### UI

The UI area is necessary for the display of attributes in "generic interfaces" such as list editing. Other
areas of i-doit also access this information.

In particular, the UI class of the corresponding category will use this definition and pass the data to the
[TOM (Template Object Model)](programming-categories.md#ubergabe-der-daten-an-smarty-plugins-mittels-tom-und-rules).
This means Smarty parameters do not need to be stored in multiple places.

#### ID

Here, the ID of the field used in the frontend must be defined. It must be used in exact notation in the
category template. This ensures that POST data can be automatically assigned to the respective attribute.

The ID typically follows this structure:
```
C__CMDB__CAT<category-type>__<category-abbreviation>__<attribute-abbreviation>
```

For example:
```
C__CMDB__CATG__AUDIT__TITLE
```

**Note**: For custom add-ons, it makes sense to include the identifier in the category name. This prevents
collisions with i-doit's own categories and also makes the association transparent.

#### Type

Contains the abstracted form field type. The `C__PROPERTY__UI__TYPE__*` constants from
`idoit\Component\Property\LegacyPropertyInterface` are used for this purpose.

#### Params

These are the parameters that are passed to the Smarty plugin. These parameters control, for example, the
display, available content, as well as special (plugin-specific) functions.

If the parameters are defined at this point, they do not need to be stored in the UI class or the category
template. "Generic interfaces" such as list editing will also use these parameters.

#### Default

A default value for the respective attribute can be specified here, which is used in the "Create" context
of the category.

#### Placeholder (Deprecated)

The placeholder was originally used for the HTML attribute of the same name and has since been replaced by a
Smarty plugin parameter.

#### Empty Message (Deprecated)

This configuration, like the "Placeholder" parameter, has been replaced by Smarty plugin parameters.

### Format

The "format" area of the definition is used for optional callback methods to load attribute-specific data.
This is used, among other things, during export to convert stored data into a "readable" format.

For this data to also be processed during import, an additional callback method with the same name plus an
"\_import" suffix must be provided. As a rule, this part is not needed since the Property Factories already
include the corresponding callbacks.

On the other hand, format callbacks are used to execute specific code for virtual or dynamic attributes,
which then return the desired content.

### Dependency

The dependency is used for some attributes whose data is influenced by other attributes. An example of this
is the dependency between "manufacturer" and "model".

#### Property Key

The abbreviation of the dependent attribute must be entered here.

#### Smarty Parameters

The dependency is mapped in the frontend and must therefore be defined using Smarty parameters. Such a
dependency is currently only supported for dialog attributes.

### Provides

The "Provides" determine which i-doit functions are available for this attribute. In most cases, the
Property Factories will set this option correctly.

Under certain circumstances, however, it may be necessary to lock an attribute for import/export or list
editing, for example, when the attribute has custom logic in the category template that cannot be mapped
otherwise.

### Check

With this definition, various validation options can be configured. It is additionally possible to define the
attribute as a required field.

Once a validation is defined in code, the attribute can no longer be used for a custom validation in the
i-doit Administration.
