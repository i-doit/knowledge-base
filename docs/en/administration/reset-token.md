---
title: Finding or Resetting the License Token
description: Where can I find my license token?
icon:
status:
lang: en
note: linked in A&S Center
---

To access the Add-on & Subscription Center and to keep your i-doit licensed, you need a valid license token. You receive it when you evaluate or purchase i-doit. The license token authenticates your i-doit instance against the license server and retrieves your license key. If you can no longer find your license token, use the instructions below or contact our sales team.

!!! success "For questions about licensing or your contract, please contact the Sales Team via<br>Phone: [+49 211 699 31-185](tel:+4921169931185) <br>Email: [sales@i-doit.com](mailto:sales@i-doit.com)"

## Overview

1. I want to retrieve my license token from my running i-doit instance

    1. [Find the token in the Add-on & Subscription Center (i-doit version 33 and above)](#option-a-find-the-token-in-the-add-on-subscription-center-i-doit-version-33-and-above)
    2. [Find the token in the Admin Center (i-doit up to version 34)](#option-b-find-the-token-in-the-admin-center-i-doit-up-to-version-34)
    3. [Find the token with operating system access (all versions)](#option-c-find-the-token-with-operating-system-access-all-versions)

2. I cannot find my license token and would like to reset it

    1. [How can I reset my token?](#how-can-i-reset-my-token)
    2. \!\!\! IMPORTANT \!\!\![Apply the new token](#apply-the-new-token)

## Option A: Find the token in the Add-on & Subscription Center (i-doit version 33 and above)

First, open the [Add-on & Subscription Center](add-on-and-subscription-center.md) in i-doit. The token is displayed in the **Advanced** tab under "Weblicense Token".

[![subscription-center-token](../assets/images/de/administration/reset-token/addon-subscription-center.png)](../assets/images/de/administration/reset-token/addon-subscription-center.png)

## Option B: Find the token in the Admin Center (i-doit up to version 34)

First, log in to the [Admin Center](admin-center.md). The token is displayed in the **Config** tab under "Weblicense Token".

[![admin-center-token](../assets/images/de/administration/reset-token/admin-center.png)](../assets/images/de/administration/reset-token/admin-center.png)

## Option C: Find the token with operating system access (all versions)

The "Weblicense Token" is stored in the file `.../src/config.inc.php`. The token can be displayed directly if this command is adapted to your i-doit installation path:

```shell
cat /var/www/html/src/config.inc.php | grep license_token
```

The output will look something like this:

```shell
cat /var/www/html/src/config.inc.php | grep license_token
$g_license_token = 'abcdefg1234567890';
```

## How can I reset my token?

If you can no longer find the token, click the "Reset token" button below. You will be redirected to the "Reset token" page in the Customer Portal. There you can request a new token. Simply follow the instructions provided.

!!! warning "IMPORTANT: The old token becomes inactive as soon as a new token is generated. The new token must be **activated**."
    [CLICK HERE to reset the token  :material-key-link:](https://center.i-doit.com/portal/reset-token){: target="_blank" .md-button }

### Apply the new token

To apply the new token, please use our [Activate License](../maintenance-and-operation/licensing.md) guide.
