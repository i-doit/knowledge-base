# Upgrade from i-doit open to i-doit

How do you switch from _i-doit_ _open_ to _i-doit_ with added functionality in a quick and easy way?

Motivation
----------

What are the advantages of documenting the IT infrastructure rather with the _i-doit_ version than with the _i-doit_ _open_ version? The reason is simple: _[i-doit offers considerably more functions](https://www.i-doit.org/cmdb-it-documentation/)_ which can be of great help for your daily work.

_i-doit_ in Seven Steps
---------------------------

Here is a quick overview about the necessary steps before going further into details:

1. Preparation
2. Download and implementation of the update
3. Installation of the _i-doit_ extension
4. License activation
5. Clear cache
6. Configure permissions
7. Finishing work

Preparation
-----------

Important: This procedure is irreversible. It is essential to create a [backup](../maintenance-and-operation/backup-and-recovery/index.md)! After upgrading, a valid [license for _i-doit_](../maintenance-and-operation/activate-license.md) is required. The [system requirements](../installation/system-requirements.md) and [system settings](../installation/manual-installation/system-settings.md) must also be met.

Should you use an older version of the _i-doit open_ installation, you have to bear the following facts in mind:

*   When you use _i-doit open_ version **0.9.x** or older, an upgrade is not possible.
*   When you use _i-doit open_ **1.4.x**, you have to upgrade to the newest version starting from version 1.8.
*   When you have installed i-doit open **1.8.x** or higher, you can continue with the upgrade.

You can download the most current version from [i-doit.org](http://i-doit.org/).

Download and Implementation of the Update
------------------------------------------------

Download the update package of _i-doit_ from the [customer portal](../system-administration/customer-portal.md) and carry out an update [in the usual way](../maintenance-and-operation/update.md). It is important that the version number of the installed _i-doit open_ version corresponds to the desired _i-doit_ version. Example: You have to use update package _i-doit_ 1.8, when your installed version is _i-doit open_ 1.8.

The upgrade doesn't work with the installation packet of the _i-doit_ version.

Installation of the _i-doit-addon_
--------------------------------------

After upgrading to the version you have to install the addon. The addon is available in the [admin center](../system-administration/admin-center.md) under **Add-ons**. Here you can find the installation button.

License Activation
------------------

The upgrade is completed now and the last step is the activation of a valid license. You can activate it directly in the [Admin Center under **Licenses**](../maintenance-and-operation/activate-license.md).

Clear Cache
-----------

Now we log off from the Admin Center and log in again to _i-doit_. Now we click through  **Administration** → **System tools → Cache / Database** to the button **Clear complete Cache**. We clear the browser cache by pressing **CTRL+F5**.

Configure Permissions
---------------------

In contrast to _i-doit open, i-doit_ does possess a free configurable [authorization system](../system-administration/administration/user-permissions.md). For this reason, the user who is logged in at this moment will not have all permissions.

To give your admin-user full access in a few steps, go to **Administration** → **Authorization system** → **Authorization system reset** and give your user full access to _i-doit_ by entering the credentials for the [Admin center](../system-administration/admin-center.md).

Now you can configure the assignment of permissions for persons and groups of persons.

Finishing Work
--------------

If you have not yet done so, you should carry out the following steps to ensure a flawless performance of _i-doit_:

*   [Set up and test Backup and Restore](../maintenance-and-operation/backup-and-recovery/index.md)
*   [Set up Cronjobs](../automation-and-integration/cli/index.md) (with the controller)
*   [Carry out an optional update to the current _i-doit_ version:](../maintenance-and-operation/update.md) With a valid license it is possible and recommended that you always update to the newest version of _i-doit_.  

Downgrade to _i-doit open_?
---------------------------

It's not intended to go back to an older version of _i-doit_. This is also the case for downgrades from _i-doit_ to the _i-doit open_ variant.
