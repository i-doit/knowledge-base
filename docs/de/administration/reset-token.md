---
title: Den Lizenz Token finden oder zurücksetzen
description: Wo finde ich meinen Lizenztoken?
icon:
status:
lang: de
note: linked in A&S Center
---

Damit du auf das Add-on & Subscription Center zugreifen kannst und dein i-doit lizenziert ist, brauchst du einen gültigen Lizenz Token. Den erhältst du, wenn du i-doit evaluierst oder gekauft hast. Mit dem Lizenz Token authentifizierst du deine i-doit Instanz gegenüber dem Lizenzserver und rufst deinen Lizenzschlüssel ab. Wenn du deinen Lizenz Token nicht mehr findest, nutze die Anleitung unten oder melde dich bei unserem Vertriebsteam.

!!! success "Bei Fragen zur Lizenz oder zum Vertrag wenden Sie sich bitte an das Sales Team  via<br>Telefon: [+49 211 699 31-185](tel:+4921169931185) <br>E-Mail: [sales@i-doit.com](mailto:sales@i-doit.com)"

## Übersicht

1. Ich möchte meinen Lizenz Token von meiner laufenden i-doit Instanz abrufen

    1. [Token im Add-on & Subscription Center finden (i-doit ab Version 33)](#variante-a-token-im-add-on-subscription-center-finden-i-doit-ab-version-33)
    2. [Token im Admin-Center finden (i-doit bis Version 34)](#variante-b-token-im-admin-center-finden-i-doit-bis-version-34)
    3. [Token mit Zugriff auf das Betriebssystem finden (Alle Versionen)](#variante-c-token-mit-zugriff-auf-das-betriebssystem-finden-alle-versionen)

2. Ich kann mein Lizenz Token nicht finden und würde ihn gerne zurücksetzen

    1. [Wie kann ich meinen Token zurücksetzen?](#wie-kann-ich-meinen-token-zurucksetzen)
    2. \!\!\! WICHTIG \!\!\![Neuen Token einspielen](#neuen-token-einspielen)

## Variante A: Token im Add-on & Subscription Center finden (i-doit ab Version 33)

Zuerst das [Add-on & Subscription Center](add-on-and-subscription-center.md) in i-doit öffnen, dort wird der Token im Reiter **Advanced** unter "Weblicense Token" dargestellt.

[![subscription-center-token](../assets/images/de/administration/reset-token/addon-subscription-center.png)](../assets/images/de/administration/reset-token/addon-subscription-center.png)

## Variante B: Token im Admin-Center finden (i-doit bis Version 34)

Zuerst in das [Admin-Center](admin-center.md) einloggen und dort wird der Token im Reiter **Config** unter "Weblicense Token" dargestellt.

[![admin-center-token](../assets/images/de/administration/reset-token/admin-center.png)](../assets/images/de/administration/reset-token/admin-center.png)

## Variante C: Token mit Zugriff auf das Betriebssystem finden (Alle Versionen)

Der "Weblicense Token" wird in der Datei `.../src/config.inc.php` gespeichert. Der Token kann direkt ausgegeben werden, wenn dieser Befehl an deinen i-doit Installationspfad angepasst wurde:

```shell
cat /var/www/html/src/config.inc.php | grep license_token
```

Die Ausgabe wird dann etwa so aussehen:

```shell
cat /var/www/html/src/config.inc.php | grep license_token
$g_license_token = 'abcdefg1234567890';
```

## Wie kann ich meinen Token zurücksetzen?

Wenn du den Token nicht mehr findest, klicke auf die "Token zurücksetzen" Schaltfläche unten. Dann wirst du zur "Token zurücksetzen" Seite im Kundenportal weitergeleitet. Dort kannst du einen neuen Token anfordern. Folge einfach den Anweisungen auf der dort.

!!! warning "WICHTIG: Der alte Token wird inaktiv, sobald ein neuer Token erzeugt wird. Der neue Token muss **aktiviert** werden."
    [HIER DRÜCKEN zum Zurücksetzen des Tokens  :material-key-link:](https://center.i-doit.com/portal/reset-token){: target="_blank" .md-button }

### Neuen Token einspielen

Um den neuen Token einzuspielen benutze bitte unsere [Lizenz aktivieren](../wartung-und-betrieb/lizenzierung.md) Anleitung.
