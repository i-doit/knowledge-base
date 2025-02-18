---
title: How to get your license token?
description: How to get your license token?
icon:
status: new
lang: en
note: linked in A&S Center
---

!!! success "Initially, the licence token will be emailed to you by the sales team. You will only receive information about the licence or token from the sales team. Contact via <br>Phone: [+49 211 699 31-185](tel:+4921169931185) <br>E-mail: [sales@i-doit.com](mailto:sales@i-doit.com)"

## How do I find my token in the Add-on & Subscription Center? (i-doit from version 33)

Open the [Add-on & Subscription Center](add-on-and-subscription-center.md) in i-doit, where the token is displayed in the **Advanced** tab under "Weblicense Token".

[![subscription-center-token](../assets/images/en/system-administration/reset-token/addon-subscription-center.png)](../assets/images/en/system-administration/reset-token/addon-subscription-center.png)

## How do I find my token in the Admin-Center?

Log in to the [Admin-Center](admin-center.md) and then the token is displayed under "Weblicense Token" in the **Config** menu.

[![admin-center-token](../assets/images/en/system-administration/reset-token//admin-center.png)](../assets/images/en/system-administration/reset-token//admin-center.png)

## How do I find my token with access to the operating system?

The "Weblicense Token" is stored in the file `.../i-doit/src/config.inc.php`. You can output the token directly if you adapt this command to your i-doit installation path:

```shell
cat /var/www/html/i-doit/src/config.inc.php | grep token
```

The output will then look something like this:

```shell
cat /var/www/html/i-doit/src/config.inc.php | grep token
 * i-doit License token.
$g_license_token = 'abcdefg1234567890';
```

## How can I reset my token?

If you cannot find the token, click on "Reset token". This will take you to the Reset token page in the Customer Portal. Here you can request a new token. Just follow the instructions on the page.

!!! warning "The old token becomes invalid as soon as a new token is generated"
    [Reset token :material-key-link:](https://center.i-doit.com/portal/reset-token)(https:/center.i-doit.com/portal/reset-token){: target="_blank" .md-button }

### Activate new token

To activate the new token, please use our [Activate license](../maintenance-and-operation/activate-license.md) instructions.
