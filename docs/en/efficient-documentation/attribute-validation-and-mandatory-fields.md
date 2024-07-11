# Attribute validation and Mandatory Fields

If you want to ensure the uniqueness of [attributes](../glossary.md) or if you expect only defined values when maintaining particular fields or if you wish to make certain fields mandatory, then i-doit will provide the corresponding features.

## Overview

The validation meets the following requirements:

*   Determination of specified values for particular fields
*   Determination of an uniqueness of the field value per [object](../glossary.md) ([multi-value category](../basics/structure-of-the-it-documentation.md))/ [object type](../basics/structure-of-the-it-documentation.md)/ [client](../glossary.md) (global)
*   Definition of the field as mandatory when creating a new object or editing the information

## Configuration

You can find the option to specify these settings at **Administration → Data view → Attribute settings**. Some predefined attributes are displayed in the initial state. If one is missing, it can be added via [**Add**](../system-administration/administration/data-view/attribute-settings.md).

[![Configuration](../assets/images/en/efficient-documentation/attribute-validation-and-mandatory-fields/vup-1.png)](../assets/images/en/efficient-documentation/attribute-validation-and-mandatory-fields/vup-1.png)

The attributes of the category are now available for the [configuration of validation](../system-administration/administration/data-view/attribute-settings.md#usage). By ticking the **Mandatory field** box, you can require users to enter data in this field. It is not possible to save the category if the field is empty. The category is labelled with a red asterisk (\*) next to the name of the attribute.

You can also specify whether the attribute in your [IT documentation](../basics/structure-of-the-it-documentation.md) must be unique, i.e. may only exist once. This is done using the following buttons:

*   **Unique (per object)**: This option is only available in list categories (multi-value categories). If you activate it, it is not possible to use the same value repeatedly in two entries of this category within this object. However, it is possible to maintain the entered value again in other objects.
*   **Unique (per object type)**: If you activate the option per object type, the same value cannot be present in another object of this type.
*   **Unique (Global)**: The entered value is unique in the entire client and cannot be used again in this attribute in any other object.

If a value is already in use for a field but the user tries to save the entry, a notice will inform him that the repeated usage of this value is not possible.

[![values](../assets/images/en/efficient-documentation/attribute-validation-and-mandatory-fields/vup-2.png)](../assets/images/en/efficient-documentation/attribute-validation-and-mandatory-fields/vup-2.png)

The selection **Attribute needs to be** is only available where there is no internal category validation. A date field, for example, is only able to receive a date and save it. [Dialog plus fields](../basics/attribute-fields.md#dialog-plus-field-extended-drop-down) only allow you to select defined values. Such fields can therefore not be limited to specific field values.

As long as there is no validation in the category, you can either determine specific content types which the value has to match or you can state custom text values from which the user can choose.

!!! info "Special cases"

    There are some categories which already have an internal validation which can neither be deactivated nor be adjusted. In the “Host address” category, for example, there is a examination whether an entered IP address corresponds to the standards for IPv4 or IPv6.

If you provide users with custom values, you can optionally create a drop-down list from which users can select the values. In this way, the field value can only be selected from a list whose content can only be changed in the administration in the validation configuration.

[![administration section](../assets/images/en/efficient-documentation/attribute-validation-and-mandatory-fields/vup-3.png)](../assets/images/en/efficient-documentation/attribute-validation-and-mandatory-fields/vup-3.png)

Once you have configured all the fields in the category according to your specifications, save the settings using the **Save** button. Repeat these steps for all categories in which you want to validate values and/or declare them as mandatory fields.

An entry is created in the configuration for each category for which you create a validation. These areas contain all the settings that have been set. If you no longer need a configuration for a category, you can remove it completely using the remove/trash can icon.

[![category](../assets/images/en/efficient-documentation/attribute-validation-and-mandatory-fields/vup-4.png)](../assets/images/en/efficient-documentation/attribute-validation-and-mandatory-fields/vup-4.png)

!!! info "Caution when removing"

    When removing the configuration of a category, all validation configurations will be lost irreversibly.

## Renew validation/attributes cache

The validation/attributes cache is automatically emptied when a new configuration is created. In rare cases, however, the system may not perform this task. So if you notice that an attribute configuration in a category does not take effect or a removed validation still appears to be active, clear the entire cache under Administration > [Tenant name] management > Repair and clean-up so that the system recognises the changed settings.

[![Renew Validation Cache](../assets/images/en/efficient-documentation/attribute-validation-and-mandatory-fields/vup-5.png)](../assets/images/en/efficient-documentation/attribute-validation-and-mandatory-fields/vup-5.png)

## Test Regular Expressions

To check regular expressions in advance, please use your preferred test tool. For example, to test the syntax, use [regex101](https://regex101.com/).
