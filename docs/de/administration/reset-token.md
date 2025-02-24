---
title: Wo finde ich meinen Lizenztoken?
description: Wo finde ich meinen Lizenztoken?
icon:
status: new
lang: de
note: linked in A&S Center
---

!!! success "Bei Fragen zur Lizenz oder zum Vertrag wenden Sie sich bitte an das Sales Team  via<br>Telefon: [+49 211 699 31-185](tel:+4921169931185) <br>E-Mail: [sales@i-doit.com](mailto:sales@i-doit.com)"

## Übersicht

*   [Wie finde ich meinen Token im Add-on & Subscription Center? (i-doit ab Version 33)](#wie-finde-ich-meinen-token-im-add-on--subscription-center-i-doit-ab-version-33)
*   [Wie finde ich meinen Token im Admin-Center?](#wie-finde-ich-meinen-token-im-admin-center)
*   [Wie finde ich meinen Token mit Zugriff auf das Betriebssystem?](#wie-finde-ich-meinen-token-mit-zugriff-auf-das-betriebssystem)
*   [Wie kann ich meinen Token zurücksetzen?](#wie-kann-ich-meinen-token-zurücksetzen)
*   [Neuen Token einspielen](#neuen-token-einspielen)

## Wie finde ich meinen Token im Add-on & Subscription Center? (i-doit ab Version 33)

Zuerst das [Add-on & Subscription Center](add-on-and-subscription-center.md) in i-doit öffnen, dort wird der Token im Reiter **Advanced** unter "Weblicense Token" dargestellt.

[![subscription-center-token](../assets/images/de/administration/reset-token/addon-subscription-center.png)](../assets/images/de/administration/reset-token/addon-subscription-center.png)

## Wie finde ich meinen Token im Admin-Center?

Zuerst in das [Admin-Center](admin-center.md) einloggen und dort wird der Token im Reiter **Config** unter "Weblicense Token" dargestellt.

[![admin-center-token](../assets/images/de/administration/reset-token/admin-center.png)](../assets/images/de/administration/reset-token/admin-center.png)

## Wie finde ich meinen Token mit Zugriff auf das Betriebssystem?

Der "Weblicense Token" wird in der Datei `.../i-doit/src/config.inc.php` gespeichert. Der Token kann direkt ausgegeben werden, wenn dieser Befehl an deinen i-doit Installationspfad angepasst wurde:

```shell
cat /var/www/html/i-doit/src/config.inc.php | grep license_token
```

Die Ausgabe wird dann etwa so aussehen:

```shell
cat /var/www/html/i-doit/src/config.inc.php | grep license_token
 * i-doit License token.
$g_license_token = 'abcdefg1234567890';
```

## Wie kann ich meinen Token zurücksetzen?

Wenn du den Token nicht mehr findest, klicke auf "Token zurücksetzen". Dann wirst du zur "Token zurücksetzen" Seite im Kundenportal weitergeleitet. Dort kannst du einen neuen Token anfordern. Folge einfach den Anweisungen auf der dort.

!!! warning "Der alte Token wird ungültig sobald ein neuer Token generiert wurde"
    [Token zurücksetzen :material-key-link:](https://center.i-doit.com/portal/reset-token){: target="_blank" .md-button }

### Neuen Token einspielen

Um den neuen Token einzuspielen benutze bitte unsere [Lizenz aktivieren](../wartung-und-betrieb/lizenz-aktivieren.md) Anleitung.
