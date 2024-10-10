---
title: i-doit Lizenzierung
description: i-doit Lizenzierung
icon: license
status: updated
lang: de
---

# i-doit Lizenzierung

Die Lizenzierung von i-doit und Add-ons erfolgt über einen License Token. Der License Token ist im [Kundenportal](../administration/kundenportal.md) zu finden.

* * *

## Wie erhält man den License Token und wie die Offline License?

Der **License Token** wird per E-Mail zugeschickt. Die **Offline License** kann unter <https://center.i-doit.com/portal/advanced> abgerufen werden. Dazu benötigen Sie einen gültigen **License Token** um sich im [Add-on & Subscription Center](../administration/add-on-and-subscription-center.md) anzumelden.

* * *

## Welche Methode i-doit zu aktivieren sollte ich verwenden?

-   Wenn Ihr Server, auf dem i-doit installiert ist, **eine** **Internetverbindung** hat, verwenden Sie den **[License Token](#i-doit-über-das-add-on--subscription-center-aktivieren-online)**.
-   Wenn Ihr Server, auf dem i-doit installiert ist, **keine** **Internetverbindung** hat, verwenden Sie **[License Token und Offline license](#i-doit-aktivieren-offline)**.

* * *

### i-doit über das Add-on & Subscription Center aktivieren (Online)

**Schritt 1:** Als erstes rufen wir die i-doit installation über den Browser auf und loggen uns ein. Anschließend navigieren Sie auf das **Avatar Symbol** rechts oben und klicken Sie auf **[Add-on & Subscription Center](../administration/add-on-and-subscription-center.md)**.

[![Add-on & Subscription Center öffnen](../assets/images/de/wartung-und-betrieb/activate-license/add-on-und-subscription-center.png)](../assets/images/de/wartung-und-betrieb/activate-license/add-on-und-subscription-center.png)

**Schritt 2:** Als nächstes muss der License Token eingeben werden, dieser wird per E-Mail nach der Bestellung verschickt.

[![Schritt 2](../assets/images/de/wartung-und-betrieb/activate-license/enter-license-token.png)](../assets/images/de/wartung-und-betrieb/activate-license/enter-license-token.png)

**Fertig** Nun sind wir im [Add-on & Subscription Center](../administration/add-on-and-subscription-center.md) angemeldet und i-doit ist lizenziert. Über das [Add-on & Subscription Center](../administration/add-on-and-subscription-center.md) können Sie nun auch weitere [Add-ons](../i-doit-add-ons/index.md) installieren.

**_Hinweis_**_: Der License Token ist wie folgt aufgebaut:_ **_2e23aa70df492b7e7b8f321929gc6fcd6e7776_**

* * *

### i-doit über das Admin-Center aktivieren (Online)

**Schritt 1:** Als erstes rufen wir die i-doit Installation über den Browser auf. Um in das [Admin-Center](../administration/admin-center.md) zu gelangen klicken wir auf den Link in der Anmeldemaske.

[![Admin-login](../assets/images/de/wartung-und-betrieb/activate-license/1.Login_admin.png)](../assets/images/de/wartung-und-betrieb/activate-license/1.Login_admin.png)

**Schritt 2:** Als nächstes müssen wir die Anmeldedaten für das Admin-Center eingeben. Diese Daten wurden bei der Installation von i-doit vergeben und sind nicht die selben Daten wie für den i-doit Login.

!!! note "Wenn Sie die **Eval Appliance** verwenden, dann nutzen Sie **admin** als Username und **idoit** als Password"

[![Admin-Center-login](../assets/images/de/wartung-und-betrieb/activate-license/2.login_admin_center.png)](../assets/images/de/wartung-und-betrieb/activate-license/2.login_admin_center.png)

**Schritt 3:** Nun sind wir im [Admin-Center](../administration/admin-center.md) angemeldet und klicken auf den Reiter "Licenses".

[![Admin-Center-home](../assets/images/de/wartung-und-betrieb/activate-license/3.admin-center-home.png)](../assets/images/de/wartung-und-betrieb/activate-license/3.admin-center-home.png)

**Schritt 4:** Hier können wir Ihren License Token aktivieren. Dazu kopieren wir den License Token in das Eingabefeld.

[![Admin-Center-license](../assets/images/de/wartung-und-betrieb/activate-license/4.admin-center-licenses.png)](../assets/images/de/wartung-und-betrieb/activate-license/4.admin-center-licenses.png)

**Schritt 5:** Anschließend klicken wir auf den **Save & Check** Button. Nun wird der License Token vom Lizenzserver geprüft und i-doit lizenziert. Fertig.

[![License-save](../assets/images/de/wartung-und-betrieb/activate-license/5.admin-center-licenses-token.png)](../assets/images/de/wartung-und-betrieb/activate-license/5.admin-center-licenses-token.png)

**_Hinweis_**_: Ein License Token ist wie folgt aufgebaut:_ **_2e23aa70df492b7e7b8f321929gc6fcd6e7776_**

* * *

### i-doit aktivieren (Offline)

**Schritt 1:** Als erstes rufen wir die i-doit installation über den Browser auf. Um in das [Admin-Center](../administration/admin-center.md) zu gelangen klicken Sie auf den Link in der Anmeldemaske.

[![Admin-login](../assets/images/de/wartung-und-betrieb/activate-license/1.Login_admin.png)](../assets/images/de/wartung-und-betrieb/activate-license/1.Login_admin.png)

**Schritt 2:** Als nächstes müssen wir die Anmeldedaten eingeben, die wir bei der Installation von i-doit für das [Admin-Center](../administration/admin-center.md) vergeben haben.

!!! note "Haben Sie die **Eval Appliance**, dann nutzen Sie **admin** als Username und **idoit** als Password"

[![Admin-Center-login](../assets/images/de/wartung-und-betrieb/activate-license/2.login_admin_center.png)](../assets/images/de/wartung-und-betrieb/activate-license/2.login_admin_center.png)

**Schritt 3:** Nun Fügen wir den **License Token** ein. Klicken auf den {++Save++} Button.

!!! warning "**Nicht** auf {--Save and Check--} klicken."

[![offline-key](../assets/images/de/wartung-und-betrieb/activate-license/6-offline-token.png)](../assets/images/de/wartung-und-betrieb/activate-license/6-offline-token.png)

**Schritt 4:** Nachdem der Token gespeichert wurde, klicken wir auf den **Install new license** Button.

[![offline-key-install](../assets/images/de/wartung-und-betrieb/activate-license/7.add-new-license-button.png)](../assets/images/de/wartung-und-betrieb/activate-license/7.add-new-license-button.png)

**Schritt 5:** Nun sehen wir das Feld in welches der gesamte **Offline License** hineinkopiert werden muss. Die **Offline License** kann von [hier](#wie-erhält-man-den-license-token-und-wie-die-offline-license) kopiert werden. Anschließend auf den **Add license** Button klicken.

[![license-file-add](../assets/images/de/wartung-und-betrieb/activate-license/10.add-new-license-save.png)](../assets/images/de/wartung-und-betrieb/activate-license/10.add-new-license-save.png)

**Fertig** Der License Token wird mit dem Offline license verifiziert und es werden alle damit verbundenen Lizenzen angezeigt.

[![license-overview](../assets/images/de/wartung-und-betrieb/activate-license/11.admin-center-licenses-token.png)](../assets/images/de/wartung-und-betrieb/activate-license/11.admin-center-licenses-token.png)

* * *

### i-doit Aktivierung über das [Admin-Center](../administration/admin-center.md) (veraltet)

Die Installation über das [Admin Center](../administration/admin-center.md) erfolgt nach dem Login im Reiter **Licenses**. Verwende hier die Schaltfläche **Install new license** um den erweiterten Dialog zu öffnen und die aus dem Kundenportal heruntergeladene Lizenz auszuwählen.

!!! info "Neuanmeldung eventuell nötig"
    Wird eine Lizenz erfolgreich eingespielt, kann es dennoch vorkommen, dass beim Weiterarbeiten mit i-doit ein Hinweis erscheint, es sei keine gültige Lizenz aktiviert. Hier hilft es, sich mit dem derzeitigen Benutzer ab- und wieder anzumelden. Daraufhin sollte der Hinweis nicht wieder erscheinen.

[![license-installation](../assets/images/de/wartung-und-betrieb/activate-license/12.i-doit-license.png)](../assets/images/de/wartung-und-betrieb/activate-license/12.i-doit-license.png)

Automatische Lizenzdistribution

Bitte beachte, dass im Reiter **Tenants** konfiguriert werden kann, wie viele Objektlizenzen einem Mandanten zugewiesen werden können. Auch wenn nur ein einzelner Mandant existiert, kann eine ausgeschaltete automatische Lizenzdistribution dafür sorgen, dass nicht alle Objektlizenzen genutzt werden. Sollte dies der Fall sein, kann diese einfach aktiviert werden und mit einem Klick auf Speichern übernommen werden.

* * *

## FAQ

!!! attention "Name der Datenbank"
    Bei der Erstellung einer Lizenz für einen einzelnen Mandanten wird der **Name der** **Datenbank** benötigt. Bitte stelle sicher, dass dir dieser bei der Erstellung der Lizenz in unserem Kundenportal vorliegt.

    Lizenzen besitzen einen bestimmten Zeitraum in welchem Sie gültig sind. Ist der Zeitraum abgelaufen wird eine neue Lizenz benötigt.

!!! attention "Kompatibilität der Token"
    License Token können ab **i-doit Version 1.12.2** verwendet werden
    Offline License Key kann erst mit **i-doit Version 1.15** verwendet werden

!!! info "Neuanmeldung nötig"
    Wird eine Lizenz erfolgreich eingespielt, kann es dennoch vorkommen, dass beim Weiterarbeiten mit i-doit ein Hinweis erscheint, es sei keine gültige Lizenz aktiviert. Hier hilft es, sich mit dem derzeitigen Benutzer ab- und wieder anzumelden. Daraufhin sollte der Hinweis nicht wieder erscheinen.

!!! info "Verhalten vor i-doit Version 1.12.2"
    Für i-doit gibt es verschiedene Formen von Lizenzen:

    *   Die **Subskriptionslizenz** für einen einzelnen Mandanten (Hierzu zählen auch **Test-Lizenzen**)
    Eine **Subskriptionslizenz** kannst du entweder über das [Admin Center](../administration/admin-center.md) oder über **Verwaltung → Lizenzverwaltung** aktivieren.
    *   Die **Subskriptionslizenz** für mehrere **Mandanten**
    Wenn du eine Subskriptionslizenz für mehrere Mandanten verwenden möchtest, kann diese ausschließlich über das Admin Center installiert werden.
    *   Die **Kauflizenz** für einen einzelnen oder mehrere **Mandanten**
    Die Installation erfolgt für beide Lizenzarten ebenfalls über das [Admin Center](../administration/admin-center.md).

* * *

### Die Lizenz ist gültig aber i-doit zeigt an, dass es nicht lizenziert ist?

!!! success "Öffne den Reiter Tenant im Admin Center und klicke auf **Save license settings**."
    [![tenant-licenses](../assets/images/de/wartung-und-betrieb/activate-license/13.png)](../assets/images/de/wartung-und-betrieb/activate-license/13.png)
