# Validation and Mandatory Fields

If you want to ensure the uniqueness of [attributes](../glossary.md) or if you expect only defined values when maintaining particular fields or if you wish to make certain fields mandatory, then i-doit will provide the corresponding features.

Overview
--------

The validation meets the following requirements:

*   Determination of specified values for particular fields
*   Determination of an uniqueness of the field value per [object](../glossary.md) ([multi-value category](../basics/structure-of-the-it-documentation.md))/ [object type](../glossary.md)/ [client](../glossary.md) (global)
*   Definition of the field as mandatory when creating a new object or editing the information

Configuration
-------------

You can find the possibility to specify these settings at **Administration** **→ CMDB-settings → Validation**. You will not find any configuration here in the delivery state. The configuration is made per category. Choose a category from which you want to validate one or more attributes.

[![Configuration](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/1-vamv.png)](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/1-vamv.png)

Now the attributes of the category are ready for configuration of the validation. Using the **Mandatory field** button will make the users' input in this field mandatory. It is not possible to save the category if this field is empty. The indication for this in the category is a red asterisk (\*) next to the attribute name.

Additionally, you can state whether or not the attribute has to be unique in your [IT documentation](../basics/structure-of-the-it-documentation.md) and thus may exist only once. This happens via the following buttons:

*   **Unique (per object):** This option is only available in multi-value categories. When activated, it is not possible for this object to use the same value repeatedly in two entries of this category. It is possible, however, to use the entered value in other objects.
    
*   **Unique (per Objecttype):** The same value may not exist in another object of this type when you activate this option per object type.
    
*   **Unique (global):** The entered value is unique for the whole tenant and cannot be used in this attribute for any other object.
    

If a value is already in use for a field but the user tries to save the entry, a notice will inform him that the repeated usage of this value is not possible.

[![values](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/2-vamv.png)](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/2-vamv.png)

The selection **Attribute needs to be** is only available where an internal category validation does not already take place. A date field, for example, is only able to receive a date and save it. [Dialog plus fields](../basics/attribute-fields.md) only allow you to select defined values. Such fields can therefore not be limited to specific field values.

As long as no validation exists in the category, you can either determine specific content types which the value has to match or you can state custom text values from which the user can choose.

!!! info "Special cases"

    There are some categories which already have an internal validation which can neither be deactivated nor be adjusted. In the “Host address” category, for example, there is a examination whether an entered IP address corresponds to the standards for IPv4 or IPv6.

If you specify custom values for the users, you can optionally create a drop-down list from which users can select the values. This way, the values for the field can only be chosen from a list and this list content again can only be changed in the configuration of the validation in the administration section.

[![administration section](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/3-vamv.png)](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/3-vamv.png)

Save the settings via the **Save** button, once you configured all fields of the category according to your demands. Repeat this step for all categories in which you want to validate values and/ or declare fields as mandatory.

A section will be created in the configuration for each category for which you create a validation. To improve the transparency, these sections can be expanded or closed again by clicking their headers which contain the title of the category. If you do not need a configuration of a category anymore, you can delete it completely via the X at the end of the line.

[![category](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/4-vamv.png)](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/4-vamv.png)

!!! info "Caution when removing"

    When removing the configuration of a category, all validation configurations will be lost irreversibly.

Renew Validation Cache
----------------------

It is also possible to renew the validation cache in the upper area of the configuration. When creating a new configuration, the cache will be generally cleared automatically. It may happen in rare cases that the system does not perform this task. If you find that your validation configuration does not take effect in a category, or a removed validation seems to be still active, clear the cache so that the system recognizes the changed settings.

[![Renew Validation Cache](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/5-vamv.png)](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/5-vamv.png)

Test Regular Expressions
------------------------

In this section, regular expressions can be entered and tested to see whether your expected input was accepted in this field or not. This is useful in case you wish some fields to match regular expressions and you are unsure whether the regular expression you used is correct.

[![Test Regular Expressions](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/6-vamv.png)](../assets/images/en/efficient-documentation/validation-and-mandatory-fields/6-vamv.png)