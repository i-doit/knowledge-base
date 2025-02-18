---
title: Wo finde ich meinen Lizenztoken?
description: Wo finde ich meinen Lizenztoken?
icon:
status: new
lang: de
note: linked in A&S Center
---

!!! success "Initial wird der Lizenz Token vom Sales Team per E-Mail verschickt. Fragen zur Lizenz oder dem Token kann nur das Sales Team beantworten. Kontakt via<br>Telefon: [+49 211 699 31-185](tel:+4921169931185) <br>E-Mail: [sales@i-doit.com](mailto:sales@i-doit.com)"

## Wie finde ich meinen Token im Add-on & Subscription Center? (i-doit ab Version 33)

Zuerst das [Add-on & Subscription Center](add-on-and-subscription-center.md) in i-doit öffnen, dort wird der Token im Reiter **Advanced** unter "Weblicense Token" dargestellt.

[![subscription-center-token](../assets/images/de/administration/reset-token/addon-subscription-center.png)](../assets/images/de/administration/reset-token/addon-subscription-center.png)

## Wie finde ich meinen Token im Admin-Center?

Zuerst in das [Admin-Center](admin-center.md) einloggen und dort wird der Token im Reiter **Config** unter "Weblicense Token" dargestellt.

[![admin-center-token](../assets/images/de/administration/reset-token/admin-center.png)](../assets/images/de/administration/reset-token/admin-center.png)

## Wie finde ich meinen Token mit Zugriff auf das Betriebssystem?

Der "Weblicense Token" wird in der Datei `.../i-doit/src/config.inc.php` gespeichert. Der Token kann direkt ausgegeben werden, wenn dieser Befehl an deinen i-doit Installationspfad angepasst wurde:

```shell
cat /var/www/html/i-doit/src/config.inc.php | grep token
```

Die Ausgabe wird dann etwa so aussehen:

```shell
cat /var/www/html/i-doit/src/config.inc.php | grep token
 * i-doit License token.
$g_license_token = 'abcdefg1234567890';
```

## Wie kann ich meinen Token zurücksetzen?

Wenn du den Token nicht mehr findest, klicke auf "Token zurücksetzen". Dann wirst du zur "Token zurücksetzen" Seite im Kundenportal weitergeleitet. Dort kannst du einen neuen Token anfordern. Folge einfach den Anweisungen auf der dort.

!!! warning "Der alte Token wird ungültig sobald ein neuer Token generiert wurde"
    [Token zurücksetzen :material-key-link:](https://center.i-doit.com/portal/reset-token){: target="_blank" .md-button }

### Neuen Token einspielen

Um den neuen Token einzuspielen benutze bitte unsere [Lizenz aktivieren](../wartung-und-betrieb/lizenz-aktivieren.md) Anleitung.
