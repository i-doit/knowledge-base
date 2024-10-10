# Release Notes 33

We are happy to announce the release of i-doit 33. First of all, you may have already noticed, we have decreased the frequency of our releases again on a common request. This will help you to catch up with our latest version without the need to perform an update every month. Within this release, you will find a lot of security and quality changes which are listed in detail in our [changelog](../changelogs/changelog-33.md). These changes are accompanied by new core features and a brand new Add-on "Flows" which you will learn about more in the corresponding section of these release notes. Along with this, we also made compatibility adjustments which allows the usage of PHP 8.3 so we are prepared for improving technically even further in the future.

## Compatibility

We have **updated** the [system requirements](../../installation/system-requirements.md) with **i-doit 33** in terms of our supported PHP versions: **PHP 8.3** will officially be supported with i-doit 33. This also means that ^^PHP 8.0 will not be compatible with i-doit 33^^ and later versions. Please make sure your system fulfills these requirements before updating to the latest version.

## Security

The following **CVE** have been resolved with the changes from this release:

-   **CVE-2020-27511**

## Add-on & Subscription Center

With i-doit 33 you will be provided with a new way to manage your Add-ons and Subscriptions in one place. This feature is the first step to improve your experience with handling Add-ons and Subscriptions. Please note that this will only be available for i-doit installations that are connected to the internet for proper communication with our servers. Furthermore, this is only available for installations that are using a single tenant license. If you are using the default person group "admin", you will be granted access automatically. Otherwise you will need to grant access through our configuration of permissions.

## New JDisc Import Features

Our frequently used JDisc Import to import devices directly from your JDisc database to i-doit was also improved. You are now able to delete objects from the JDisc database, if they are already set to a specific state in i-doit via a new report view. Additionally to have a better control over your JDisc import process, you are now able to pause, continue and abort a JDisc import, if necessary.

## New i-doit Add-on: Flows

As mentioned above, we are releasing a new Add-on for i-doit: **Flows**. The Add-on provides a simple way to automate your processes. You can create a trigger to act as the starting point for your automation. Additionally optional conditions can be added to your trigger, so you have even more control over the execution parameters. To complete your flow, you can combine your trigger with an action which will be performed every time your trigger gets activated and the conditions are met. This will allow you to increase your productivity, efficiency and quality of your processes while also decreasing costs, manual effort and susceptibility to errors.
There are manifold options for Flows you can create like helping you create objects, changing object details, sending information via email, calling other tools via API and many many more. If you are interested, you can start your personal **30 day trial period** today. Please note that our Add-on Flows requires i-doit 33.

## New version and templates for Add-on Documents

We also provide a new version of our Add-on Documents 1.9. This comes alongside updated document templates (currently only available for the German language). Those can be downloaded via the online repository within the add-on. Please note that for these templates to work, you need the latest version 1.9 of the add-on and i-doit 33.

More i-doit Add-on updates

Alongside the release of the add-on Flows and the new version 1.9 of the add-on Documents, we also release new versions of the following add-ons:

-   Replacement **1.6**
-   Workflow **1.4**
-   Maintenance **1.5**
-   Relocate CI **1.3**

We encourage you to [update](../../maintenance-and-operation/update.md) to this release of i-doit and your installed add-ons as soon as possible to benefit from all of these improvements.
