# Lizenz aktivieren

i-doit PRO wird mit einer Lizenz freigeschaltet.
<!---Todo: Fixme--->
Die Lizenzen für dein Unternehmen sind im [Kundenportal](/display/de/Kundenportal) erhältlich. Zugriff hat jene Person, die als primärer Ansprechpartner angegeben wurde.

!!! attention "Name der Datenbank"

    Bei der Erstellung einer Lizenz für einen einzelnen Mandanten wird der **Name der** **Datenbank** benötigt. Bitte stelle sicher, dass dir dieser bei der Erstellung der Lizenz in unserem Kundenportal vorliegt.

    Lizenzen besitzen einen bestimmten Zeitraum in welchem Sie gültig sind. Ist der Zeitraum abgelaufen wird eine neue Lizenz benötigt.

!!! attention "Kompatibilität der Token"

    License Token können ab **i-doit Version 1.12.2** verwendet werden  
    Offline License Key kann erst mit **i-doit Version 1.15** verwendet werden

!!! info "Neuanmeldung nötig"

    Wird eine Lizenz erfolgreich eingespielt, kann es dennoch vorkommen, dass beim Weiterarbeiten mit i-doit ein Hinweis erscheint, es sei keine gültige Lizenz aktiviert. Hier hilft es, sich mit dem derzeitigen Benutzer ab- und wieder anzumelden. Daraufhin sollte der Hinweis nicht wieder erscheinen.

<!---Todo: Fixme--->
!!! info "Verhalten vor i-doit Version 1.12.2"

    Für i-doit _pro_ gibt es verschiedene Formen von Lizenzen:

    *   Die **Subskriptionslizenz** für einen einzelnen Mandanten (Hierzu zählen auch **Test-Lizenzen**)  
    Eine **Subskriptionslizenz** kannst du entweder über das [Admin Center](/display/de/Admin+Center) oder über **Verwaltung → Lizenzverwaltung** aktivieren.
    *   Die **Subskriptionslizenz** für mehrere **Mandanten**   
    Wenn du eine Subskriptionslizenz für mehrere Mandanten verwenden möchtest, kann diese ausschließlich über das Admin Center installiert werden.
    *   Die **Kauflizenz** für einen einzelnen oder mehrere **Mandanten**
    Die Installation erfolgt für beide Lizenzarten ebenfalls über das [Admin Center](/display/de/Admin+Center).

Installation über das Admin-Center (License Token)
--------------------------------------------------

Seit März 2022 ist das neue Kundeportal in Betrieb. Dadurch hat sich die Lizenzierung verändert und es wurde ein Lizenz Server erstellt.  
Über diesen werden Token erstellt die nun die Lizenz Datei ersetzen.

* * *

Welche Methode eine Lizenz einzuspielen sollte ich verwenden?
-------------------------------------------------------------

*   Wenn Ihr Server, auf dem i-doit installiert ist, **eine** **Internetverbindung** hat, verwenden Sie den [License Token](lizenz-aktivieren.md#license-token-online-aktivieren).  
    
*   Wenn Ihr Server, auf dem i-doit installiert ist, **keine** **Internetverbindung** hat, verwenden Sie den License Token und den [Offline License Key](lizenz-aktivieren.md#offline-license-key-aktivieren).

  

* * *

Wie erhält man den Weblicense Token und wie den Offline License Key String?
---------------------------------------------------------------------------

Der **License Token** ist im i-doit pro Kundenportal zu finden.  
Den Offline License Key können wir abrufen, indem wir den Button “**Show Offline License**”, oben rechts klicken. Dies öffnet ein Popup mit den Offline License Key String.

[![How-to-get-a-token](../assets/images/maintenance-operation/activate-license/0.how-to-get-a-token.png)](../assets/images/maintenance-operation/activate-license/0.how-to-get-a-token.png)

* * *

**License Token Online aktivieren**
-----------------------------------

**Schritt 1:** Als erstes rufen wir die i-doit pro installation über den Browser auf. Um in das Admin-Center zu gelangen klicken Sie auf den Link in der Anmeldemaske.

[![Admin-login](../assets/images/maintenance-operation/activate-license/1.Login_admin.png)](../assets/images/maintenance-operation/activate-license/1.Login_admin.png)

**Schritt 2:** Als nächstes müssen wir die Anmeldedaten eingeben, die wir bei der Installation von i-doit pro für das Admin-Center vergeben haben.

[![Admin-Center-login](../assets/images/maintenance-operation/activate-license/2.login_admin_center.png)](../assets/images/maintenance-operation/activate-license/2.login_admin_center.png)

**Schritt 3:** Nun sind wir im Admin-Center angemeldet und klicken auf den Reiter “Licenses”.

[![Admin-Center-home](../assets/images/maintenance-operation/activate-license/3.admin-center-home.png)](../assets/images/maintenance-operation/activate-license/3.admin-center-home.png)

**Schritt 4:** Hier können wir Ihren Weblicense Token aktivieren. Dazu kopieren wir den License Token in das Eingabefeld.

[![Admin-Center-license](../assets/images/maintenance-operation/activate-license/4.admin-center-licenses.png)](../assets/images/maintenance-operation/activate-license/4.admin-center-licenses.png)

\***ist hier noch eine Lizenz Datei eingespielt muss diese gelöscht werden.**

Anschließend klicken wir auf den “**Save & Check**”-Button. Nun wird der License Token vom Lizenzserver geprüft.

**Schritt 5:** Der License Token wurde vom Lizenzserver verifiziert und es werden alle damit verbundenen Lizenzen angezeigt. Fertig.

[![License-save](../assets/images/maintenance-operation/activate-license/5.admin-center-licenses-token.png)](../assets/images/maintenance-operation/activate-license/5.admin-center-licenses-token.png)

**_Hinweis_**_: Der Weblicense Token ist wie folgt aufgebaut:_ **_2e23aa70df492b7e7b8f321929gcfcde_**

  

* * *

**Offline License Key aktivieren**
----------------------------------

Wir führen zuvor die [Schritte 1-4](#license-token-online-aktivieren) durch.

**Schritt 5:** Nun fügen wir den License Token ein. Klicken auf den **“Save”**\-button. Klicken Sie **nicht** auf "Save and Check".

[![offline-key](../assets/images/maintenance-operation/activate-license/6-offline-token.png)](../assets/images/maintenance-operation/activate-license/6-offline-token.png)

**Schritt 6:** Nachdem der Token gespeichert wurde klicken wir auf den "**Install new license**" Button.

[![offline-key-install](../assets/images/maintenance-operation/activate-license/7.add-new-license-button.png)](../assets/images/maintenance-operation/activate-license/7.add-new-license-button.png)

**Schritt 7:** Nun sehen wir das Feld in welches der gesamte **Offline License Key** hineinkopiert werden muss.[![license-file](../assets/images/maintenance-operation/activate-license/8.add-new-license.png)](../assets/images/maintenance-operation/activate-license/8.add-new-license.png)

**_Hinweis:_** Je nachdem wie viele Add-ons in der gekauften Lizenz enthalten sind, variiert die Länge der Zeichenkette. Diese können Sie zusammenhängend in das Feld kopieren.

[![license-file-insert](../assets/images/maintenance-operation/activate-license/9.add-new-license-end.png)](../assets/images/maintenance-operation/activate-license/9.add-new-license-end.png)

**Schritt 8:** Klicken Sie nun auf den “**Add license**”-Button.

[![license-file-add](../assets/images/maintenance-operation/activate-license/10.add-new-license-save.png)](../assets/images/maintenance-operation/activate-license/10.add-new-license-save.png)

Der License Token wird mit dem Offline License Key verifiziert und es werden alle damit verbundenen Lizenzen angezeigt.

[![license-overview](../assets/images/maintenance-operation/activate-license/11.admin-center-licenses-token.png)](../assets/images/maintenance-operation/activate-license/11.admin-center-licenses-token.png)

  

* * *

Installation über das Admin-Center (Lizenz Datei veraltet)
----------------------------------------------------------

Die Installation über das [Admin Center](/display/de/Admin+Center) erfolgt nach dem Login im Reiter **licenses**. Verwende hier die Schaltfläche **Install new license** um den erweiterten Dialog zu öffnen und die aus dem Kundenportal heruntergeladene Lizenz auszuwählen.

!!! info "Neuanmeldung eventuell nötig"

    Wird eine Lizenz erfolgreich eingespielt, kann es dennoch vorkommen, dass beim Weiterarbeiten mit i-doit ein Hinweis erscheint, es sei keine gültige Lizenz aktiviert. Hier hilft es, sich mit dem derzeitigen Benutzer ab- und wieder anzumelden. Daraufhin sollte der Hinweis nicht wieder erscheinen.

[![license-installation](../assets/images/maintenance-operation/activate-license/12.i-doit-license.png)](../assets/images/maintenance-operation/activate-license/12.i-doit-license.png)

Automatische Lizenzdistribution

Bitte beachte, dass im Reiter **Tenants** konfiguriert werden kann, wie viele Objektlizenzen einem Mandanten zugewiesen werden können. Auch wenn nur ein einzelner Mandant existiert, kann eine ausgeschaltete automatische Lizenzdistribution dafür sorgen, dass nicht alle Objektlizenzen genutzt werden. Sollte dies der Fall sein, kann diese einfach aktiviert werden und mit einem Klick auf Speichern übernommen werden.

Testlizenzen
------------

Auf unserer Website kannst du die Ausstellung einer [Lizenz zum 30-tägigen Test von i-doit _pro_ beantragen](https://www.i-doit.com/testversion/).

!!! attention "Name der Test-Datenbank"

    Die Test-Lizenz wird stets für den Datenbanknamen **idoit\_data** ausgestellt. Um eine einwandfreie Funktion in der Testperiode sicher zu stellen, darf der Datenbankname bei der Installation nicht geändert werden.

FAQ
---

### Die Lizenz ist gültig aber i-doit Zeigt an, dass es nicht lizenziert ist? 

!!! success "Öffne den Reiter Tenant im Admin Center und klicke auf **Save license settings**."

    [![tenant-licenses](../assets/images/maintenance-operation/activate-license/13.png)](../assets/images/maintenance-operation/activate-license/13.png)