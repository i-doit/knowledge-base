<!-- TRANSLATED by md-translate -->
# Lizenz aktivieren

# Activer la licence

i-doit PRO wird mit einer Lizenz freigeschaltet.

i-doit PRO est débloqué avec une licence.

Die Lizenzen für dein Unternehmen sind im [Kundenportal](../administration/kundenportal.md) erhältlich. Zugriff hat jene Person, die als primärer Ansprechpartner angegeben wurde.

Les licences pour ton entreprise sont disponibles sur le [portail clients](../administration/kundenportal.md). L'accès est réservé à la personne qui a été indiquée comme interlocuteur principal.

!!! attention "Name der Datenbank"

! !! attention "Nom de la base de données

```
Bei der Erstellung einer Lizenz für einen einzelnen Mandanten wird der **Name der** **Datenbank** benötigt. Bitte stelle sicher, dass dir dieser bei der Erstellung der Lizenz in unserem Kundenportal vorliegt.

Lizenzen besitzen einen bestimmten Zeitraum in welchem Sie gültig sind. Ist der Zeitraum abgelaufen wird eine neue Lizenz benötigt.
```

!!! attention "Kompatibilität der Token"

! !! attention "Compatibilité des tokens

```
License Token können ab **i-doit Version 1.12.2** verwendet werden
Offline License Key kann erst mit **i-doit Version 1.15** verwendet werden
```

!!! info "Neuanmeldung nötig"

! !! info "Nouvelle inscription nécessaire"

```
Wird eine Lizenz erfolgreich eingespielt, kann es dennoch vorkommen, dass beim Weiterarbeiten mit i-doit ein Hinweis erscheint, es sei keine gültige Lizenz aktiviert. Hier hilft es, sich mit dem derzeitigen Benutzer ab- und wieder anzumelden. Daraufhin sollte der Hinweis nicht wieder erscheinen.
```

!!! info "Verhalten vor i-doit Version 1.12.2"

! !! info "Comportement avant i-doit version 1.12.2"

```
Für i-doit _pro_ gibt es verschiedene Formen von Lizenzen:

*   Die **Subskriptionslizenz** für einen einzelnen Mandanten (Hierzu zählen auch **Test-Lizenzen**)
Eine **Subskriptionslizenz** kannst du entweder über das [Admin Center](../administration/admin-center.md) oder über **Verwaltung → Lizenzverwaltung** aktivieren.
*   Die **Subskriptionslizenz** für mehrere **Mandanten**
Wenn du eine Subskriptionslizenz für mehrere Mandanten verwenden möchtest, kann diese ausschließlich über das Admin Center installiert werden.
*   Die **Kauflizenz** für einen einzelnen oder mehrere **Mandanten**
Die Installation erfolgt für beide Lizenzarten ebenfalls über das [Admin Center](../administration/admin-center.md).
```

## Installation über das Admin-Center (License Token)

## Installation via le centre d'administration (License Token)

Seit März 2022 ist das neue Kundeportal in Betrieb. Dadurch hat sich die Lizenzierung verändert und es wurde ein Lizenz Server erstellt.
Über diesen werden Token erstellt die nun die Lizenz Datei ersetzen.

Depuis mars 2022, le nouveau portail clients est en service. L'octroi de licences a donc changé et un serveur de licences a été créé.
Ce serveur permet de créer des jetons qui remplacent désormais le fichier de licence.

---

## Welche Methode eine Lizenz einzuspielen sollte ich verwenden?

## Quelle méthode dois-je utiliser pour installer une licence ?

* Wenn Ihr Server, auf dem i-doit installiert ist, **eine** **Internetverbindung** hat, verwenden Sie den [License Token](lizenz-aktivieren.md#license-token-online-aktivieren).
* Wenn Ihr Server, auf dem i-doit installiert ist, **keine** **Internetverbindung** hat, verwenden Sie den License Token und den [Offline License Key](lizenz-aktivieren.md#offline-license-key-aktivieren).

* Si votre serveur sur lequel i-doit est installé a **une** **connexion à Internet, utilisez la [License Token](licence-activer.md#license-token-online-activer).
* Si votre serveur sur lequel i-doit est installé n'a **aucune** **connexion Internet**, utilisez le jeton de licence et la [Offline License Key](activer-licence.md#offline-license-key-activate).

---

## Wie erhält man den Weblicense Token und wie den Offline License Key String?

## Comment obtenir le jeton de licence Web et comment obtenir la chaîne de clés de licence hors ligne ?

Der **License Token** ist im i-doit pro Kundenportal zu finden.
Den Offline License Key können wir abrufen, indem wir den Button "**Show Offline License**", oben rechts klicken. Dies öffnet ein Popup mit den Offline License Key String.

Le **License Token** se trouve dans le portail client i-doit pro.
Nous pouvons consulter la clé de licence hors ligne en cliquant sur le bouton "**Show Offline License**" en haut à droite. Cela ouvre un popup avec la chaîne de la clé de licence hors ligne.

[![How-to-get-a-token](../assets/images/de/wartung-und-betrieb/activate-license/0.how-to-get-a-token.png)](../assets/images/de/wartung-und-betrieb/activate-license/0.how-to-get-a-token.png)

[ ![How-to-get-a-token](../assets/images/fr/entretien et fonctionnement/activate-license/0.how-to-get-a-token.png)](../assets/images/fr/entretien et fonctionnement/activate-license/0.how-to-get-a-token.png)

---

## **License Token Online aktivieren**

## **Activer le jeton de licence en ligne***.

**Schritt 1:** Als erstes rufen wir die i-doit pro installation über den Browser auf. Um in das Admin-Center zu gelangen klicken Sie auf den Link in der Anmeldemaske.

**Étape 1:** Tout d'abord, nous appelons l'installation d'i-doit pro via le navigateur. Pour accéder au centre d'administration, cliquez sur le lien dans le masque de connexion.

[![Admin-login](../assets/images/de/wartung-und-betrieb/activate-license/1.Login_admin.png)](../assets/images/de/wartung-und-betrieb/activate-license/1.Login_admin.png)

[ ![Admin-login](../assets/images/fr/entretien et fonctionnement/activate-license/1.Login_admin.png)](../assets/images/fr/entretien et fonctionnement/activate-license/1.Login_admin.png)

**Schritt 2:** Als nächstes müssen wir die Anmeldedaten eingeben, die wir bei der Installation von i-doit pro für das Admin-Center vergeben haben.

**Étape 2:** Ensuite, nous devons saisir les données de connexion que nous avons attribuées pour le centre d'administration lors de l'installation d'i-doit pro.

[![Admin-Center-login](../assets/images/de/wartung-und-betrieb/activate-license/2.login_admin_center.png)](../assets/images/de/wartung-und-betrieb/activate-license/2.login_admin_center.png)

[ ![Admin-Center-login](../assets/images/fr/entretien et fonctionnement/activate-license/2.login_admin_center.png)](../assets/images/fr/entretien et fonctionnement/activate-license/2.login_admin_center.png)

**Schritt 3:** Nun sind wir im Admin-Center angemeldet und klicken auf den Reiter "Licenses".

**Étape 3:** Nous sommes maintenant connectés au centre d'administration et cliquons sur l'onglet "Licences".

[![Admin-Center-home](../assets/images/de/wartung-und-betrieb/activate-license/3.admin-center-home.png)](../assets/images/de/wartung-und-betrieb/activate-license/3.admin-center-home.png)

[ ![Admin-Center-home](../assets/images/fr/entretien et fonctionnement/activate-license/3.admin-center-home.png)](../assets/images/fr/entretien et fonctionnement/activate-license/3.admin-center-home.png)

**Schritt 4:** Hier können wir Ihren Weblicense Token aktivieren. Dazu kopieren wir den License Token in das Eingabefeld.

**Étape 4:** Ici, nous pouvons activer votre token Weblicense. Pour cela, nous copions le jeton de licence dans le champ de saisie.

[![Admin-Center-license](../assets/images/de/wartung-und-betrieb/activate-license/4.admin-center-licenses.png)](../assets/images/de/wartung-und-betrieb/activate-license/4.admin-center-licenses.png)

[ ![Admin-Center-license](../assets/images/fr/entretien et fonctionnement/activate-license/4.admin-center-licenses.png)](../assets/images/fr/entretien et fonctionnement/activate-license/4.admin-center-licenses.png)

***ist hier noch eine Lizenz Datei eingespielt muss diese gelöscht werden.**

***Si un fichier de licence est encore installé, il doit être supprimé.

Anschließend klicken wir auf den "**Save & Check**"-Button. Nun wird der License Token vom Lizenzserver geprüft.

Ensuite, nous cliquons sur le bouton "**Save & Check**". Le License Token est maintenant vérifié par le serveur de licence.

**Schritt 5:** Der License Token wurde vom Lizenzserver verifiziert und es werden alle damit verbundenen Lizenzen angezeigt. Fertig.

**Étape 5:** Le jeton de licence a été vérifié par le serveur de licence et toutes les licences qui lui sont associées s'affichent. Terminé.

[![License-save](../assets/images/de/wartung-und-betrieb/activate-license/5.admin-center-licenses-token.png)](../assets/images/de/wartung-und-betrieb/activate-license/5.admin-center-licenses-token.png)

[ ![License-save](../assets/images/fr/entretien-et-fonctionnement/activate-license/5.admin-center-licenses-token.png)](../assets/images/fr/entretien-et-fonctionnement/activate-license/5.admin-center-licenses-token.png)

**_Hinweis_**_: Der Weblicense Token ist wie folgt aufgebaut:_ **_2e23aa70df492b7e7b8f321929gcfcde_**

**_Remarque_**_ : Le jeton Weblicense est structuré comme suit:_ **_2e23aa70df492b7e7b8f321929gcfcde_**

---

## **Offline License Key aktivieren**

## **Activer la clé de licence hors ligne***.

Wir führen zuvor die [Schritte 1-4](#license-token-online-aktivieren) durch.

Nous effectuons auparavant les [étapes 1-4](#license-token-online-activate).

**Schritt 5:** Nun fügen wir den License Token ein. Klicken auf den **"Save"**-button. Klicken Sie **nicht** auf "Save and Check".

**Étape 5:** Nous insérons maintenant le jeton de licence. Cliquez sur le bouton **"Save "**. Ne cliquez **pas** sur "Save and Check".

[![offline-key](../assets/images/de/wartung-und-betrieb/activate-license/6-offline-token.png)](../assets/images/de/wartung-und-betrieb/activate-license/6-offline-token.png)

[ ![offline-key](../assets/images/fr/entretien et fonctionnement/activate-license/6-offline-token.png)](../assets/images/fr/entretien et fonctionnement/activate-license/6-offline-token.png)

**Schritt 6:** Nachdem der Token gespeichert wurde klicken wir auf den "**Install new license**" Button.

**Étape 6:** Après avoir enregistré le jeton, nous cliquons sur le bouton "**Install new license**".

[![offline-key-install](../assets/images/de/wartung-und-betrieb/activate-license/7.add-new-license-button.png)](../assets/images/de/wartung-und-betrieb/activate-license/7.add-new-license-button.png)

[ ![offline-key-install](../assets/images/fr/entretien-et-opération/activate-license/7.add-new-license-button.png)](../assets/images/fr/entretien-et-opération/activate-license/7.add-new-license-button.png)

**Schritt 7:** Nun sehen wir das Feld in welches der gesamte **Offline License Key** hineinkopiert werden muss.[![license-file](../assets/images/de/wartung-und-betrieb/activate-license/8.add-new-license.png)](../assets/images/de/wartung-und-betrieb/activate-license/8.add-new-license.png)

**Etape 7:** Nous voyons maintenant le champ dans lequel la totalité de la **clé de licence hors ligne** doit être copiée[ ![license-file](../assets/images/fr/entretien et fonctionnement/activate-license/8.add-new-license.png)](../assets/images/fr/entretien et fonctionnement/activate-license/8.add-new-license.png)

**_Hinweis:_** Je nachdem wie viele Add-ons in der gekauften Lizenz enthalten sind, variiert die Länge der Zeichenkette. Diese können Sie zusammenhängend in das Feld kopieren.

**_Remarque:_** La longueur de la chaîne de caractères varie en fonction du nombre d'add-ons inclus dans la licence achetée. Vous pouvez les copier de manière continue dans le champ.

[![license-file-insert](../assets/images/de/wartung-und-betrieb/activate-license/9.add-new-license-end.png)](../assets/images/de/wartung-und-betrieb/activate-license/9.add-new-license-end.png)

[ ![license-file-insert](../assets/images/fr/entretien et fonctionnement/activate-license/9.add-new-license-end.png)](../assets/images/fr/entretien et fonctionnement/activate-license/9.add-new-license-end.png)

**Schritt 8:** Klicken Sie nun auf den "**Add license**"-Button.

**Étape 8:** Cliquez maintenant sur le bouton "**Add license**".

[![license-file-add](../assets/images/de/wartung-und-betrieb/activate-license/10.add-new-license-save.png)](../assets/images/de/wartung-und-betrieb/activate-license/10.add-new-license-save.png)

[ ![license-file-add](../assets/images/fr/entretien et exploitation/activate-license/10.add-new-license-save.png)](../assets/images/fr/entretien et exploitation/activate-license/10.add-new-license-save.png)

Der License Token wird mit dem Offline License Key verifiziert und es werden alle damit verbundenen Lizenzen angezeigt.

Le jeton de licence est vérifié avec la clé de licence hors ligne et toutes les licences qui y sont liées sont affichées.

[![license-overview](../assets/images/de/wartung-und-betrieb/activate-license/11.admin-center-licenses-token.png)](../assets/images/de/wartung-und-betrieb/activate-license/11.admin-center-licenses-token.png)

[ ![license-overview](../assets/images/fr/entretien et fonctionnement/activate-license/11.admin-center-licenses-token.png)](../assets/images/fr/entretien et fonctionnement/activate-license/11.admin-center-licenses-token.png)

---

## Installation über das Admin-Center (Lizenz Datei veraltet)

## Installation via le centre d'administration (fichier de licence obsolète)

Die Installation über das [Admin Center](../administration/admin-center.md) erfolgt nach dem Login im Reiter **licenses**. Verwende hier die Schaltfläche **Install new license** um den erweiterten Dialog zu öffnen und die aus dem Kundenportal heruntergeladene Lizenz auszuwählen.

L'installation via le [Admin Center](../administration/admin-center.md) se fait après le login dans l'onglet **licenses**. Utilise ici le bouton **Install new license** pour ouvrir le dialogue étendu et sélectionner la licence téléchargée depuis le portail client.

!!! info "Neuanmeldung eventuell nötig"

! !! info "Nouvelle inscription éventuellement nécessaire"

```
Wird eine Lizenz erfolgreich eingespielt, kann es dennoch vorkommen, dass beim Weiterarbeiten mit i-doit ein Hinweis erscheint, es sei keine gültige Lizenz aktiviert. Hier hilft es, sich mit dem derzeitigen Benutzer ab- und wieder anzumelden. Daraufhin sollte der Hinweis nicht wieder erscheinen.
```

[![license-installation](../assets/images/de/wartung-und-betrieb/activate-license/12.i-doit-license.png)](../assets/images/de/wartung-und-betrieb/activate-license/12.i-doit-license.png)

[ ![license-installation](../assets/images/fr/entretien et fonctionnement/activate-license/12.i-doit-license.png)](../assets/images/fr/entretien et fonctionnement/activate-license/12.i-doit-license.png)

Automatische Lizenzdistribution

Distribution automatique des licences

Bitte beachte, dass im Reiter **Tenants** konfiguriert werden kann, wie viele Objektlizenzen einem Mandanten zugewiesen werden können. Auch wenn nur ein einzelner Mandant existiert, kann eine ausgeschaltete automatische Lizenzdistribution dafür sorgen, dass nicht alle Objektlizenzen genutzt werden. Sollte dies der Fall sein, kann diese einfach aktiviert werden und mit einem Klick auf Speichern übernommen werden.

Veuillez noter que dans l'onglet **Tenants**, il est possible de configurer combien de licences objet peuvent être attribuées à un mandant. Même s'il n'y a qu'un seul mandant, une distribution automatique des licences désactivée peut faire en sorte que toutes les licences d'objet ne soient pas utilisées. Si c'est le cas, il suffit de l'activer et de cliquer sur Enregistrer.

## Testlizenzen

## Licences d'essai

Auf unserer Website kannst du die Ausstellung einer [Lizenz zum 30-tägigen Test von i-doit _pro_ beantragen](https://www.i-doit.com/testversion/).

Sur notre site web, tu peux demander l'émission d'une [licence pour tester i-doit _pro_ pendant 30 jours](https://www.i-doit.com/testversion/).

!!! attention "Name der Test-Datenbank"

! !! attention "Nom de la base de données du test".

```
Die Test-Lizenz wird stets für den Datenbanknamen **idoit\_data** ausgestellt. Um eine einwandfreie Funktion in der Testperiode sicher zu stellen, darf der Datenbankname bei der Installation nicht geändert werden.
```

## FAQ

## FAQ

### Die Lizenz ist gültig aber i-doit Zeigt an, dass es nicht lizenziert ist?

### La licence est valide mais i-doit indique qu'il n'est pas sous licence ?

!!! success "Öffne den Reiter Tenant im Admin Center und klicke auf **Save license settings**."

! !! success "Ouvre l'onglet Tenant dans Admin Center et clique sur **Save license settings**".

```
[![tenant-licenses](../assets/images/de/wartung-und-betrieb/activate-license/13.png)](../assets/images/de/wartung-und-betrieb/activate-license/13.png)
```