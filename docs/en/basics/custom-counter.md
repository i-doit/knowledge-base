# Custom Counter

All configured counters are displayed here in a list.<br>
Counters can be added via the ==Add counter== button.

You are also able to reset a counter to 1 with the ==Reset== button.<br>
Also you can delete a counter with the ==Delete= button.

All counters are also available/usable in [list edit](../efficient-documentation/list-editing.md), [mass change](../efficient-documentation/mass-change.md), [templates](../efficient-documentation/templates.md) and [automatically generated inventory number](../basics/unique-references.md#inventory-number) from object type configuration. In addition, the counters can also be used with text fields of [custom categories](../basics/custom-categories.md).<br>
For example for the "Title" attribute in the "General" category. It is entered manually in the corresponding field. Each time the counter is used, it is incremented by 1.

## Creating a custom counter

After a counter has been added, it must be given its own title. The ==%COUNTER_== text is not editable.<br>
A complete counter looks e.g. like this ==%COUNTER_CUSTOMTEXT%==. A saved counter is not editable anymore.

## Set leading zeros

If you need leading zeros use them in a [template](../efficient-documentation/templates.md#) or while creating a new [Object](../basics/structure-of-the-it-documentation.md#object).
To use leading zeros you need to add ==#N== to the counter while creating a object.

If you create a Client which title should be like ==Client_00001== you need to insert ==Client_%COUNTER_CLIENTS#5%== as title.

## Set starting number

However, if the counter is intended to start at 125 instead of 1, then you need to alter the created counter in the [expert settings of the tenant](../system-administration/administration/tenant-management/expert-settings.md).<br>
Open the expert settings and search for `cmdb.counter`, you will find your counter also by name if you counter is called `%COUNTER_CLIENT%` than the name is `cmdb.counter.counter_client`.<br>
Now alter the value to the desired starting number and hit the save button.
