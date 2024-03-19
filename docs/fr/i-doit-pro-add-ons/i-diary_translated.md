<!-- TRANSLATED by md-translate -->
# i-diary

# i-diary

# [Über i-diary](#ueber-i-diary)

# [À propos de i-diary](#ueber-i-diary)

i-diary ist eine Anwendung für Microsoft Windows, die als Add-On für i-doit funktioniert.

i-diary est une application pour Microsoft Windows qui fonctionne comme un add-on pour i-doit.

Mit Hilfe des Add-ons sind Systemadministratoren in der Lage, sich einen Überblick über die Änderungen zu verschaffen, die auf dem Server stattgefunden haben.

Grâce à ce module complémentaire, les administrateurs système sont en mesure d'obtenir une vue d'ensemble des modifications qui ont eu lieu sur le serveur.

Dies ist möglich, indem sie die Anwendung diary direkt auf einem Windows-Server verwenden, ohne sich bei i-doit anmelden und nach den Informationen suchen zu müssen.

Cela est possible en utilisant l'application diary directement sur un serveur Windows, sans avoir à se connecter à i-doit et à rechercher les informations.

# [Dokumentation](#dokumentation)

# [Documentation](#documentation)

* [Anforderungen](#anforderungen)
* [Installation](#installation)
* [Updates](#updates)
* [Konfiguration](#konfiguration)
* [Grundlegende Verwendung](#krundlegende-verwendung)
* [Auswahl des Hosts](#auswahl-des-hosts)
* [Auswahl des Autors](#auswahl-des-autors)

* [exigences](#exigences)
* [Installation](#installation)
* [Mises à jour](#updates)
* [configuration](#configuration)
* [Utilisation de base](#utilisation-de-base)
* [choix de l'hôte](#choix-de-l'hôte)
* [choix de l'auteur](#choix-du-auteur)

## [Copyright & License](#copyright-license)

## [Copyright & Licence](#copyright-license)

Copyright (C) 2020 [synetics GmbH](https://i-doit.com/en)

Copyright (C) 2020 [synetics GmbH](https://i-doit.com/en)

---

# [Anforderungen](#anforderungen)

# [exigences](#exigences)

Die folgenden Anforderungen sind vor der Installation oder Verwendung des i-diary erforderlich.

Les exigences suivantes sont nécessaires avant d'installer ou d'utiliser l'i-diary.

## [i-Diary Version 1.1](#i-diary-version-11)

## [i-Diary version 1.1](#i-diary-version-11)

* Required i-doit >= 1.17
* Required i-doit-API add-on >= 1.12.1
* Windows 7 or higher
* .Net framework version >= 4.8

* Required i-doit >= 1.17
* Required i-doit-API add-on >= 1.12.1
* Windows 7 ou supérieur
* .Net framework version >= 4.8

## [i-Diary Version 1.0.2](#i-diary-version-102)

## [i-Diary version 1.0.2](#i-diary-version-102)

* Required i-doit >= 1.17
* Required i-doit API add-on >= 1.12.1
* Windows 7 or 10
* .Net framework version >= 4.8

* Required i-doit >= 1.17
* Required i-doit API add-on >= 1.12.1
* Windows 7 ou 10
* .Net framework version >= 4.8

## [i-Diary Version <= 1.0.1](#i-diary-version-101)

## [i-Diary version <= 1.0.1](#i-diary-version-101)

* Required i-doit >= 1.14
* Required i-doit-API add-on >= 1.10.4
* Windows 7 or 10
* .Net framework version >= 4.6.2

* Required i-doit >= 1.14
* Required i-doit-API add-on >= 1.10.4
* Windows 7 ou 10
* .Net framework version >= 4.6.2

---

# [Installation](#installation)

# [Installation](#installation)

Das Add-on wird über das [Kundenportal](../administration/kundenportal.md) heruntergeladen
Das Add-on muss zuvor über das [Admin Center](../administration/admin-center.md) installiert werden.

L'add-on est téléchargé via le [portail clients](../administration/kundenportal.md).
L'add-on doit être installé au préalable via le [Centre d'administration](../administration/admin-center.md).

---

# [Updates](#updates)

# [Mises à jour](#updates)

i-diary wird wie andere Add-on auch über das [Admin Center](../administration/admin-center.md) aktualisiert.
Die neue i-diary.exe muss dann durch die aktualisierte i-diary.exe ersetzt werden.
Diese befindet sich in der heruntergeladenen ZIP idoit-i_diary-x.x.x.zip im Pfad
\idoit-i-diary-1.1\src\classes\modules\syneticsgmbh_idoit\i-diary

Comme les autres modules complémentaires, i-diary est mis à jour via le [Admin Center](../administration/admin-center.md).
Le nouveau i-diary.exe doit alors être remplacé par le i-diary.exe mis à jour.
Celle-ci se trouve dans le zip téléchargé idoit-i_diary-x.x.x.zip dans le chemin
\idoit-i-diary-1.1\src\classes\modules\syneticsgmbh_idoit\i-diary

---

# [Konfiguration](#konfiguration)

# [Configuration](#configuration)

## [Einstellungen über GUI ändern und speichern](#einstellungen-%C3%BCber-gui-aendern-und-speichern)

## [Modifier et enregistrer les paramètres via l'interface graphique](#paramètres-%C3%BCvia-gui-modifier-et-enregistrer)

Der Benutzer hat die Möglichkeit, die Konfigurationsdatei über die Anwendung zu erstellen und zu ändern.

L'utilisateur a la possibilité de créer et de modifier le fichier de configuration via l'application.

Dies sind die folgenden Fälle:

Il s'agit des cas suivants :

* Wenn die Konfigurationsdatei leer ist oder noch nicht existiert, wird die GUI-Konfiguration automatisch beim Start der Anwendung geöffnet.

* Si le fichier de configuration est vide ou n'existe pas encore, la configuration de l'interface graphique s'ouvre automatiquement au démarrage de l'application.

[![Konfiguration](../assets/images/de/i-doit-pro-add-ons/i-diary/1-id.png)](../assets/images/de/i-doit-pro-add-ons/i-diary/1-id.png)

[ ![Configuration](../assets/images/fr/i-doit-pro-add-ons/i-diary/1-id.png)](../assets/images/fr/i-doit-pro-add-ons/i-diary/1-id.png)

[![Konfiguration](../assets/images/de/i-doit-pro-add-ons/i-diary/2-id.png)](../assets/images/de/i-doit-pro-add-ons/i-diary/2-id.png)

[ ![Configuration](../assets/images/fr/i-doit-pro-add-ons/i-diary/2-id.png)](../assets/images/fr/i-doit-pro-add-ons/i-diary/2-id.png)

* Wenn der Benutzer etwas in der GUI-Konfiguration ändert, wird die Änderung sofort geprüft und gespeichert, wenn sie gültig ist.
* Wenn der Benutzer nicht `[http://](http://)` angibt, wird `[http://](http://)` für die Prüfung verwendet und gespeichert.
* Wenn der Benutzer `src/jsonrpc.php` als Suffix im URL-Feld angibt, wird der Suffix für die Prüfung ignoriert und ohne diese gespeichert.
* Der Benutzer kann die Verbindung manuell testen, indem er auf die Schaltfläche `Test the connection` klickt.

* Si l'utilisateur modifie quelque chose dans la configuration de l'interface graphique, la modification est immédiatement vérifiée et enregistrée si elle est valide.
* Si l'utilisateur ne spécifie pas `[http://](http://)`, `[http://](http://)` est utilisé pour la vérification et enregistré.
* Si l'utilisateur indique `src/jsonrpc.php` comme suffixe dans le champ URL, le suffixe est ignoré pour la vérification et enregistré sans celle-ci.
* L'utilisateur peut tester la connexion manuellement en cliquant sur le bouton `Tester la connexion`.

---

# [Grundlegende Verwendung](#grundlegende-verwendung)

# [utilisation de base](#utilisation-de-base)

## [Einen neuen Eintrag erstellen](#einen-neuen-eintrag-erstellen)

## [Créer une nouvelle entrée](#créer-une-nouvelle-entrée)

Der Benutzer kann einen neuen Eintrag anlegen, dazu werden die folgenden Schritte durchgeführt:

L'utilisateur peut créer une nouvelle entrée. Pour cela, les étapes suivantes sont suivies :

* Autor, Datum und Eintrag müssen ausgefüllt und gültig sein.
* Bei weiteren Einträgen bleibt die Auswahl von Autor und Datum bestehen, bis die Anwendung geschlossen wird.
* Wenn der Benutzer einen Eintrag speichert, wird die Liste der Einträge aktualisiert.

* L'auteur, la date et l'entrée doivent être remplis et valides.
* Pour les autres entrées, la sélection de l'auteur et de la date est maintenue jusqu'à ce que l'application soit fermée.
* Lorsque l'utilisateur enregistre une entrée, la liste des entrées est mise à jour.

Der Benutzer kann außerdem einen Eintrag aktualisieren. Dazu muss das Stift Icon neben dem jeweiligen Eintrag angeklickt werden. Nachdem der Eintrag bearbeitet wurde wird dieser durch den Klick auf Update aktualisiert.

L'utilisateur peut également mettre à jour une entrée. Pour ce faire, il doit cliquer sur l'icône en forme de crayon à côté de l'entrée concernée. Une fois que l'entrée a été modifiée, elle est mise à jour en cliquant sur Update.

---

[![Einen neuen Eintrag erstellen](../assets/images/de/i-doit-pro-add-ons/i-diary/3-id.png)](../assets/images/de/i-doit-pro-add-ons/i-diary/3-id.png)

[ ![Créer une nouvelle entrée](../assets/images/fr/i-doit-pro-add-ons/i-diary/3-id.png)](../assets/images/fr/i-doit-pro-add-ons/i-diary/3-id.png)

# [Auswahl des Hosts](#auswahl-des-hosts)

# [Choix de l'hôte](#choix-du-host)

Es gibt drei Möglichkeiten, einen Host auszuwählen:

Il existe trois façons de sélectionner un hôte :

## [Automatisch einen Host auswählen](#automatisch-einen-host-ausw%C3%A4hlen)

## [Sélectionner automatiquement un hôte](#sélectionner-automatiquement-un-hôte%C3%A4)

Wenn in den Einstellungen kein Host gespeichert ist, sollte ein Host automatisch ermittelt und dem Benutzer vorgeschlagen werden. Zu diesem Zweck wird der Name des Hosts ermittelt.

Si aucun hôte n'est enregistré dans les paramètres, un hôte doit être déterminé automatiquement et proposé à l'utilisateur. Le nom de l'hôte est déterminé à cet effet.

## [Der Name des Hosts wird als Objekttitel in i-doit gesucht](#der-name-des-hosts-wird-als-objekttitel-in-i-doit-gesucht)

## [Le nom de l'hôte est recherché comme titre d'objet dans i-doit](#le-nom-de-l'hôte-est-recherché-comme-titre-d'objet-dans-i-doit)

* Wenn genau ein Objekt gefunden wird, wird seine ID gespeichert.
* Werden mehrere Objekte mit dem gleichen Namen gefunden, kann der Benutzer aus diesen Objekten auswählen.
* Der Benutzer kann die Auswahl abbrechen, um den Host manuell auszuwählen.

* Si un seul objet est trouvé, son ID est enregistré.
* Si plusieurs objets portant le même nom sont trouvés, l'utilisateur peut choisir parmi ces objets.
* L'utilisateur peut annuler la sélection pour choisir manuellement l'hôte.

## [Host manuell auswählen](#host-manuell-auswaehlen)

## [Sélectionner l'hôte manuellement](#host-manuell-select)

* Der Benutzer legt die Objekt-ID in der Konfigurationsdatei fest. Nach einem Neustart der Anwendung wird die Einstellung wirksam.

* L'utilisateur définit l'ID de l'objet dans le fichier de configuration. Après un redémarrage de l'application, le paramétrage prend effet.

[![Host manuell auswählen](../assets/images/de/i-doit-pro-add-ons/i-diary/4-id.png)](../assets/images/de/i-doit-pro-add-ons/i-diary/4-id.png)

[ ![Sélectionner l'hôte manuellement](../assets/images/fr/i-doit-pro-add-ons/i-diary/4-id.png)](../assets/images/fr/i-doit-pro-add-ons/i-diary/4-id.png)

[![Host manuell auswählen](../assets/images/de/i-doit-pro-add-ons/i-diary/5-id.png)](../assets/images/de/i-doit-pro-add-ons/i-diary/5-id.png)

[ ![Sélectionner l'hôte manuellement](../assets/images/fr/i-doit-pro-add-ons/i-diary/5-id.png)](../assets/images/fr/i-doit-pro-add-ons/i-diary/5-id.png)

* Der Benutzer wählt einen Objekttitel aus einer Liste aus. Es werden nur Objekte angezeigt, deren Objekttypen der Kategorie Diary zugeordnet sind. Die Liste ist nach Objekttypen aufgeteilt. Als Listenüberschrift wird der übersetzte Titel des jeweiligen Objekttyps angezeigt. Wenn der Benutzer ein Objekt aus der Liste auswählt, wird dessen ID gespeichert.
* Der Benutzer gibt die Objekt-ID in eine Suchmaske ein. Die Anwendung gibt eine Rückmeldung, ob das Objekt gefunden wurde und speichert seine ID.
* Der Benutzer gibt den Objekttitel in eine Suchmaske ein. Die Anwendung gibt eine Rückmeldung, ob das Objekt gefunden wurde und speichert seine ID.
* Wenn mehrere Objekte mit demselben Namen gefunden werden, kann der Benutzer aus dieser Liste auswählen.

* L'utilisateur sélectionne un titre d'objet dans une liste. Seuls les objets dont les types d'objets sont affectés à la catégorie Diary sont affichés. La liste est divisée en types d'objets. Le titre traduit du type d'objet correspondant est affiché comme titre de la liste. Lorsque l'utilisateur sélectionne un objet dans la liste, son ID est enregistré.
* L'utilisateur saisit l'ID de l'objet dans un masque de recherche. L'application lui indique si l'objet a été trouvé et enregistre son ID.
* L'utilisateur saisit le titre de l'objet dans un masque de recherche. L'application indique si l'objet a été trouvé et enregistre son ID.
* Si plusieurs objets portant le même nom sont trouvés, l'utilisateur peut choisir dans cette liste.

## [Der Host wird in der Konfiguration gespeichert](#der-host-wird-in-der-konfiguration-gespeichert)

## [L'hôte est enregistré dans la configuration](#l'hôte-est-enregistré-dans-la-configuration)

* Wenn die Anwendung gestartet wird, wird die Konfigurationsdatei gelesen, wenn eine Konfigurationsdatei vorhanden ist.
* Wenn eine Objekt-ID gespeichert ist, erhält die Anwendung den entsprechenden Titel, um sie anzuzeigen.

* Lorsque l'application est lancée, le fichier de configuration est lu s'il existe un fichier de configuration.
* Si un ID d'objet est enregistré, l'application reçoit le titre correspondant pour l'afficher.

---

# [Auswahl des Autors](#auswahl-des-autors)

# [choix de l'auteur](#choix-du-auteur)

Es gibt drei Möglichkeiten, einen Autor auszuwählen:

Il y a trois possibilités pour choisir un auteur :

## [Der Autor wird automatisch ausgewählt](#der-autor-wird-automatisch-ausgewaehlt)

## [L'auteur est automatiquement sélectionné](#l'auteur-est-automatiquement-sélectionné)

Wenn kein Autor gespeichert wurde und der Benutzer die Anwendung startet, versucht die Anwendung, den Autor automatisch zu erkennen.

Si aucun auteur n'a été enregistré et que l'utilisateur lance l'application, celle-ci tente de reconnaître automatiquement l'auteur.

Dies geschieht durch den folgenden Prozess:

Cela se fait par le biais du processus suivant :

Wenn in den Einstellungen ein Benutzername angegeben wird, prüft die Anwendung, ob die Person mit einem Personen-Objekt in i-doit übereinstimmt. Ist dies der Fall, wird die ID des Autors gespeichert.

Si un nom d'utilisateur est indiqué dans les paramètres, l'application vérifie si la personne correspond à un objet personne dans i-doit. Si c'est le cas, l'ID de l'auteur est enregistrée.

## [Den Autor manuell auswählen](#den-autor-manuell-auswaehlen)

## [Choisir l'auteur manuellement](#choisir-l'auteur-manuellement)

Der Benutzer kann einen Autor für einen neuen Eintrag mit den folgenden Optionen manuell auswählen:

L'utilisateur peut choisir manuellement un auteur pour une nouvelle entrée avec les options suivantes :

* Der Benutzer kann die Objekt-ID des Autors in die Konfigurationsdatei schreiben. Diese Einstellung wird erst beim Neustart der Anwendung wirksam.

* L'utilisateur peut écrire l'ID d'objet de l'auteur dans le fichier de configuration. Ce paramètre ne prend effet qu'au redémarrage de l'application.

[![Den Autor manuell auswählen](../assets/images/de/i-doit-pro-add-ons/i-diary/6-id.png)](../assets/images/de/i-doit-pro-add-ons/i-diary/6-id.png)

[ ![Sélectionner l'auteur manuellement](../assets/images/fr/i-doit-pro-add-ons/i-diary/6-id.png)](../assets/images/fr/i-doit-pro-add-ons/i-diary/6-id.png)

* Der Benutzer kann eine Person als Autor aus einer durchsuchbaren Liste auswählen. Diese Liste ist unterteilt in Kontakte  (Objektbeziehungen aus der Kategorie Kontaktzuordnung ) und Personen  (Objekte vom Typ Personen ).
* Die Titel der Objekte werden in der Liste angezeigt. Wenn der Benutzer ein Objekt auswählt, wird dessen ID gespeichert.

* L'utilisateur peut choisir une personne comme auteur dans une liste consultable. Cette liste est divisée en contacts (relations entre objets de la catégorie Association de contacts ) et personnes (objets de type personnes ).
* Les titres des objets sont affichés dans la liste. Lorsque l'utilisateur sélectionne un objet, son ID est enregistré.

## [Autor wird in der Konfiguration gespeichert](#autor-wird-in-der-konfiguration-gespeichert)

## [l'auteur est enregistré dans la configuration](#autor-est-enregistré-dans-la-configuration)

* Wenn der Benutzer die Anwendung startet, ist der bereits gespeicherte Autor für einen neuen Eintrag vorausgewählt.
* Die Anwendung prüft, ob die Objekt-ID in der Konfigurationsdatei gültig ist. Anhand der ID ruft die Anwendung den Objekttitel ab, um ihn anzuzeigen.

* Lorsque l'utilisateur démarre l'application, l'auteur déjà enregistré est présélectionné pour une nouvelle entrée.
* L'application vérifie si l'ID de l'objet dans le fichier de configuration est valable. Sur la base de l'ID, l'application récupère le titre de l'objet pour l'afficher.

# [Object Details](#object-details)

# [Object Details](#objet-détails)

* Wenn ein Objekt ausgewählt wurde können nun Details zu diesem angezeigt werden. Hierzu muss das Info Icon geklickt werden, nun öffnet sich ein weiteres Fenster mit den Informationen

* Lorsqu'un objet est sélectionné, il est possible d'afficher des détails le concernant. Pour cela, il faut cliquer sur l'icône Info, une autre fenêtre s'ouvre alors avec les informations.

[![Object Details](../assets/images/de/i-doit-pro-add-ons/i-diary/7-id.png)](../assets/images/de/i-doit-pro-add-ons/i-diary/7-id.png)

[ ![Object Details](../assets/images/fr/i-doit-pro-add-ons/i-diary/7-id.png)](../assets/images/fr/i-doit-pro-add-ons/i-diary/7-id.png)

Sind Informationen nicht vorhanden werden diese durch n/a dargestellt.

Si des informations ne sont pas disponibles, elles sont représentées par n/a.

[![Object Details](../assets/images/de/i-doit-pro-add-ons/i-diary/8-id.png)](../assets/images/de/i-doit-pro-add-ons/i-diary/8-id.png)

[ ![Object Details](../assets/images/fr/i-doit-pro-add-ons/i-diary/8-id.png)](../assets/images/fr/i-doit-pro-add-ons/i-diary/8-id.png)

# [FAQ](#faq)

# [FAQ](#faq)

Bekannte Fehlermeldungen und deren Bedeutung:

Messages d'erreur connus et leur signification :

| Fehlermeldung | Mögliche Ursache |
| --- | --- |
| Fehlermeldung | Mögliche Ursache |
| --- | --- |
| The HTTP response status code does not indicate a successful service response | URL falsch |
| i-doit system error: Unable to retrieve mandator | API Key falsch |
| The service response is invalid | Benutzername oder Passwort falsch. API Add-on Version is zu alt |
| Fehler beim Senden der Anforderung | Hostadresse falsch |
| The HTTP response has invalid Content-Type header value | API Add-on ist nicht installiert |

| Message d'erreur | Cause possible |
| --- | --- |
| Message d'erreur | Cause possible |
| --- | --- |
| The HTTP response status code does not indicate a successful service response | URL incorrect |
| i-doit system error : Unable to retrieve mandator | API key incorrect |
| The service response is invalid | Nom d'utilisateur ou mot de passe incorrect. La version de l'add-on API est trop ancienne |
| Erreur lors de l'envoi de la requête | Adresse de l'hôte incorrecte |
| The HTTP response has invalid Content-Type header value | API Add-on n'est pas installé |

---

# [Changelog](#changelog)

# [Changelog](#changelog)

| Version | Release | Changelog |
| --- | --- | --- |
| Version | Release | Changelog |
| --- | --- | --- |
| 1.2 | 23.01.2023 | - Primary IP address is shown empty  <br>Clicking on the info icon crashes i-diary  <br>Contact assignment does not show the Primary contact |
| 1.1 | 04.01.2022 | Show all details about the host  <br>Update entries in i-diary  <br>Automatic recognition of object types  <br>Provide all Changelogs in CHANGELOG file |
| 1.0.2 | 09.11.2021 | Make connection using HTTPS  <br>Configuration of a proxy server |
| 1.0.1 | 06.11.2020 | Change the position of the buttons in the settings window  <br>Change the title of the settings window  <br>Log in without authentication  <br>Writing a log file to check the connection  <br>The comboboxes should display more lines |
| 1.0.0 | 21.09.2020 | This is the first release of i-diary |

| Version | Release | Changelog |
| --- | --- | --- |
| Version | Release | Changelog |
| --- | --- | --- |
| 1.2 | 23.01.2023 | - L'adresse IP primaire est affichée vide <br>Clicking on the info icon crashes i-diary <br>Contact assignment does not show the Primary contact |
| 1.1 | 04.01.2022 | Afficher tous les détails sur l'hôte <br>Mise à jour des entrées dans i-diary <br>Reconnaissance automatique des types d'objets <br>Provide all Changelogs in CHANGELOG file |
| 1.0.2 | 09.11.2021 | Faire une connexion en utilisant HTTPS <br>Configuration d'un serveur proxy |
| 1.0.1 | 06.11.2020 | Changer la position des boutons dans la fenêtre des paramètres <br>Changer le titre de la fenêtre des paramètres <br>Log in sans authentification <br>Écrire un fichier journal pour vérifier la connexion <br>Les combobox devraient afficher plus de lignes |
| 1.0.0 | 21.09.2020 | Ceci est la première version d'i-diary |