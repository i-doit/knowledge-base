---
title: Find or reset your license token
description: How to get your license token?
icon:
status:
lang: en
note: linked in A&S Center
---

The i-doit license token is used to authenticate your i-doit instance against the license server and to retrieve your license keys. Without a valid license token you cannot access the Add-on & Subscription Center and your i-doit will not be licensed. You initially receive your license token when evaluating or buying an i-doit subscription. If you do not have access to your license token anymore please follow the instructions below or contact our sales team.

!!! success "If you have any questions about licensing or contracts, please contact the sales team at <br>Phone: [+49 211 699 31-185](tel:+4921169931185) <br>E-mail: [sales@i-doit.com](mailto:sales@i-doit.com)"

## Overview

1. **I want to retrieve my license token from my running i-doit instance**

    1. [Variant A: Find my token in the Add-on & Subscription Center? (i-doit version 33 and above)](#variant-a-find-my-token-in-the-add-on-subscription-center-i-doit-version-33-and-above)
    2. [Variant B: Find my token in the Admin-Center? (i-doit version 34 and below)](#variant-b-find-my-token-in-the-admin-center-i-doit-version-34-and-below)
    3. [Variant C: Find my token with access to the operating system? (All versions)](#variant-c-find-my-token-with-access-to-the-operating-system-all-versions)

2. **I can not find my license token and I want to reset it**

    1. [How can I reset my token?](#how-can-i-reset-my-token)
    2. \!\!\! IMPORTANT \!\!\! [Activate new token](#activate-new-token)

### Variant A: Find my token in the Add-on & Subscription Center? (i-doit version 33 and above)

Open the [Add-on & Subscription Center](add-on-and-subscription-center.md) in i-doit, where the token is displayed in the **Advanced** tab under "Weblicense Token".

[![subscription-center-token](../assets/images/en/system-administration/reset-token/addon-subscription-center.png)](../assets/images/en/system-administration/reset-token/addon-subscription-center.png)

### Variant B: Find my token in the Admin-Center? (i-doit version 34 and below)

Log in to the [Admin-Center](admin-center.md) and then the token is displayed under "Weblicense Token" in the **Config** menu.

[![admin-center-token](../assets/images/en/system-administration/reset-token//admin-center.png)](../assets/images/en/system-administration/reset-token//admin-center.png)

### Variant C: Find my token with access to the operating system? (All versions)

The "Weblicense Token" is stored in the file `.../i-doit/src/config.inc.php`. You can output the token directly if you adapt this command to your i-doit installation path:

```shell
cat /var/www/html/i-doit/src/config.inc.php | grep license_token
```

The output will then look something like this:

```shell
cat /var/www/html/i-doit/src/config.inc.php | grep license_token
$g_license_token = 'abcdefg1234567890';
```

## How can I reset my token?

If you cannot find the token, click on "Reset token" button below. This will take you to the Reset token page in the Customer Portal. Here you can request a new token. Just follow the instructions on the page.

!!! warning "IMPORTANT: The old token becomes inactive as soon as a new token is generated. You must **activate** your new token."
    [PRESS HERE to reset token :material-key-link:](https://center.i-doit.com/portal/reset-token){: target="_blank" .md-button }

### Activate new token

To activate the new token, please use our [licensing i-doit](../maintenance-and-operation/licensing.md) instructions.
