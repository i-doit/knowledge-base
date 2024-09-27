# Release Notes 29

We're happy to announce i-doit 29. This version will get a lot of tweaks and improvements under the hood.
This i-doit version will add support for **PHP 8.2**. This means PHP versions from 7.4 to 8.2 can be used so you can perform an update without having to worry about compatibility. Please note that **PHP 7.4** will **no longer** be supported with upcoming releases of i-doit.

Users of **SSO** will also experience a change. The login does no longer happen automatically. Instead there will be an option to use SSO on your login screen so you are able to logout properly, if needed. To perform an automated login, you can use the parameter "?use-sso=1" in your URL.

To provide more comfort, we added some features directly into i-doit. Now you can see **license details** and **download add-ons** directly within your administration if you are using a single tenant license.
We also improved the **object matching** for the **JDisc import**. You are able to use different matching profiles for each mapped object type. This will ^^_replace_^^ the previous setting regarding the matching profile. The new configuration can be found in your mapping list. ^^Please check the selected matching profile before your next import.^^

During the update process, i-doit will check for users with non-unique usernames and let you know about them. Please make sure to adjust any found usernames before version 31.
To further increase the overall experience, we added an optional survey which you can take any time to send your feedback. The link to the survey is found in the context menu at the top right.
You will find a detailed list of the changes in the [changelog](../changelogs/changelog-29.md). We encourage you to [update](../../maintenance-and-operation/index.md) to this release as soon as possible to benefit from all of these improvements.

**Highlights in this release**

-   New **PHP 8.2** compatibility.
-   Improved **object matching** for **JDisc import**.
-   New **overviews** (license and add-on) in the administration for single tenant installations.
-   Information on non-unique **usernames** during the update process.
-   New link to **optional survey** link to send your feedback.

**Add-ons**

We also release new versions of the following add-ons:

-   [Analysis](../../i-doit-pro-add-ons/analysis.md) 1.5
-   [API](../../i-doit-pro-add-ons/api/index.md) 1.16
-   [Cabling](../../i-doit-pro-add-ons/cabling.md) 1.4
-   [Documents](../../i-doit-pro-add-ons/documents/index.md) 1.7
-   [Floorplan](../../i-doit-pro-add-ons/floorplan.md) 1.8

Please make sure that you fulfill all the requirements before installing these new versions.
