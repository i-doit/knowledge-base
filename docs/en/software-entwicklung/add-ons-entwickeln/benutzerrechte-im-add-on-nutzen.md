---
title: Using User Rights in Add-ons
description: "To use the authorization system in your own add-on, not much logic needs to be written."
icon:
status:
lang: en
---
# Using User Rights in Add-ons

To use the authorization system in your own add-on, not much logic needs to be written. Only an "auth" class isys_auth_example with some boilerplate code is required. Additionally, the add-on base class must implement the interface "\idoit\AddOn\AuthableInterface" and provide the defined method "getAuth".

## Adapting the Add-on Base Class

```php
class isys_module_example extends isys_module implements isys_module_interface, AuthableInterface
{
    // ...

    /**
    * Get related auth class for module.
    *
    * @return  isys_auth_example
    */
    public static function getAuth()
    {
        return isys_auth_example::instance();
    }
}
```

## The Custom Auth Class

The class isys_auth_example mentioned in the example above must look as follows so that i-doit can use it:

```php
class isys_auth_example extends isys_auth implements isys_auth_interface
{
    /**
    * Container for singleton instance
    *
    * @var  isys_auth_example
    */
    private static $instance;

    /**
    * Method for returning the available auth-methods. This will be used for the GUI.
    *
    * @return  array
    * @throws Exception
    */
    public function get_auth_methods()
    {
        return [];
    }

    /**
    * Get ID of related module.
    *
    * @return  integer
    */
    public function get_module_id()
    {
        return C__MODULE__EXAMPLE;
    }

    /**
    * Get title of related module.
    *
    * @return  string
    */
    public function get_module_title()
    {
        return 'LC__MODULE__EXAMPLE';
    }

    /**
    * Retrieve singleton instance of authorization class.
    *
    * @return isys_auth_example
    */
    public static function instance()
    {
        // If the DAO has not been loaded yet, we initialize it now.
        if (self::$m_dao === null) {
            self::$m_dao = new isys_auth_dao(isys_application::instance()->container->get('database'));
        }

        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}
```

The most important method of this class is "get_auth_methods", which defines the available rights. The remaining code should be adopted as completely as possible and only changed where appropriate (e.g., the constants used).

!!! info "Don't forget the autoloader"

    Since these are classes in legacy format, they must be registered in the legacy autoloader.

## Defining Custom Permissions via get_auth_methods

i-doit provides some default permission types that we can reuse in the "get_auth_methods" method without writing additional code:

```php
public function get_auth_methods()
{
    return [
        'example_action' => [
            'title'   => 'LC__EXAMPLE__AUTH__EXAMPLE_ACTION',
            'type'    => 'boolean',
            'rights'  => [isys_auth::VIEW, isys_auth::EDIT],
            'default' => [isys_auth::VIEW]
        ]
    ];
}
```

!!! info "Always use lowercase for permission identifiers"

    Please ensure that the permission identifiers (here "example_action") consist only of lowercase letters and underscores.

In this example, we use the "boolean" type. This has no parameters but works like a boolean value: the right either exists or it does not.

The remaining parameters take the following roles:

- "title": The string stored here (language constant) is displayed in the authorization system GUI.
- "type": Defines the parameters displayed in the GUI:
  - boolean: Displays no parameter.
  - object: Displays an object browser. Objects can be passed as parameters during the rights check.
  - object_type: Displays a dialog with all object types. These can be passed as parameters during the rights check.
  - category: Displays a dialog with all categories. These can be passed as parameters during the rights check.
  - dialog_tables: Displays a dialog with all dialog fields. These can be passed as parameters during the rights check.
  - custom_dialog_tables: Displays a dialog with all custom dialog fields. These can be passed as parameters during the rights check.
- "rights": Defines which rights are available for this definition:
  - isys_auth::VIEW
  - isys_auth::EDIT
  - isys_auth::DELETE
  - isys_auth::EXECUTE
  - isys_auth::ARCHIVE
  - isys_auth::CREATE
  - isys_auth::SUPERVISOR
- "default": The rights stored here are pre-selected by default when the user adds the right in the GUI.

## Checking Defined Rights in Code

You can check defined rights in code via two approaches:

1.  isys_auth_example->is_allowed_to(<Right>, '<method>')
    This method returns a boolean "true" or "false" and can be used in conditionals.
2.  isys_auth_example->check(<Right>, '<method>')
    This method will throw an exception (typically of type "isys_exception_auth") if the right does not exist. On success, it returns boolean "true".

The code for our example right can look as follows:

```php
if (isys_module_example::getAuth()->is_allowed_to(isys_auth::VIEW, 'example_action')) {
    isys_notify::success('User is authorized to "view" the "example_action".');
} else {
    isys_notify::error('User is NOT authorized to "view" the "example_action".');
}
```

If a right needs to be checked with a parameter, this is possible as follows:

```php
// $auth->is_allowed_to(isys_auth::EDIT, '<method>/<id>')

if (isys_auth_cmdb::instance()->is_allowed_to(isys_auth::EDIT, 'obj_id/1')) {
    // The user is authorized to edit the object with the ID 1.
}
```

## Defining a Custom Rights Audit

With some custom code, you can build a custom rights audit instead of relying on the i-doit internal logic. Behind the key of a right (in our example "example_action"), there can optionally be a custom method that is used to process rights queries.

At the core of the authorization system is the "$m_paths" array. It contains all saved permissions for the currently logged-in user in the context of the add-on.

This means that when we store a right for our user for the add-on isys_module_example, we will find this right as an array within "$m_paths". Since we created the available right "example_action" with type "boolean", it will contain the parameter "empty-id". If we output "$m_paths", we get approximately the following result:

```php
[
    // Method name
    'example_action' => [
        // Parameter value
        'empty-id' => [
            0 => 2, // Defined right (see isys_auth::EDIT)
            1 => 1, // Defined right (see isys_auth::VIEW)
        ],
    ],
]
```

To check this right in code, the corresponding method within isys_auth_example would need to look as follows:

```php
public function example_action($right, $id)
{
    // If the auth-system is not active, simply return "true".
    if (!$this->is_auth_active()) {
        return true;
    }

    // Throw exception if no rights exist.
    if (!count($this->m_paths)) {
        throw new isys_exception_auth('You have no rights defined for the example add-on.');
    }

    // Throw exception if no rights exist.
        if (!isset($this->m_paths['example_action'][isys_auth::EMPTY_ID_PARAM])) {
        throw new isys_exception_auth('You have no rights defined for "example_action".');
    }

    // Throw exception if rights do not exist in $this->m_paths.
    if (!in_array($right, $this->m_paths['example_action'][isys_auth::EMPTY_ID_PARAM])) {
        throw new isys_exception_auth('You missing the "' . self::get_right_name($right) . '" right for "example_action".');
    }

    return true;
}
```

Due to the underlying architecture, custom permission methods can technically be called directly instead of via "is_allowed_to()" or "check()", but we strongly advise against this!

## See also

- [Developing Add-ons](index.md) -- Guide to add-on development
- [Software Development](../index.md) -- Overview of developer documentation
- [API Add-on](../../i-doit-add-ons/api/index.md) -- Interface for external access
