# i-diary

[Über i-diary](#ueber-i-diary)
=============================

i-diary ist eine Anwendung für Microsoft Windows, die als Add-On für i-doit funktioniert.

Mit Hilfe des Add-ons sind Systemadministratoren in der Lage, sich einen Überblick über die Änderungen zu verschaffen, die auf dem Server stattgefunden haben.

Dies ist möglich, indem sie die Anwendung  diary  direkt auf einem Windows-Server verwenden, ohne sich bei i-doit anmelden und nach den Informationen suchen zu müssen.

[Dokumentation](#dokumentation)
===============================

*   [Anforderungen](#anforderungen)
*   [Installation](#installation)
*   [Updates](#updates)
*   [Konfiguration](#konfiguration)
*   [Grundlegende Verwendung](#krundlegende-verwendung)
*   [Auswahl des Hosts](#auswahl-des-hosts)
*   [Auswahl des Autors](#auswahl-des-autors)

[Copyright & License](#copyright-license)
-----------------------------------------

Copyright (C) 2020 [synetics GmbH](https://i-doit.com/en)

* * *

[Anforderungen](#anforderungen)
===============================

Die folgenden Anforderungen sind vor der Installation oder Verwendung des i-diary erforderlich.

[i-Diary Version 1.1](#i-diary-version-11)
------------------------------------------

*   Required i-doit >= 1.17
*   Required i-doit-API add-on >= 1.12.1
*   Windows 7 or higher
*   .Net framework version >= 4.8

[i-Diary Version 1.0.2](#i-diary-version-102)
---------------------------------------------

*   Required i-doit >= 1.17
*   Required i-doit API add-on >= 1.12.1
*   Windows 7 or 10
*   .Net framework version >= 4.8

[i-Diary Version <= 1.0.1](#i-diary-version-101)
------------------------------------------------

*   Required i-doit >= 1.14
*   Required i-doit-API add-on >= 1.10.4
*   Windows 7 or 10
*   .Net framework version >= 4.6.2

* * *

[Installation](#installation)
=============================

Das Add-on wird über das [Kundenportal](../administration/kundenportal.md) heruntergeladen
Das Add-on muss zuvor über das [Admin Center](../administration/admin-center.md) installiert werden.

* * *

[Updates](#updates)
===================

i-diary wird wie andere Add-on auch über das [Admin Center](../administration/admin-center.md) aktualisiert.
Die neue i-diary.exe muss dann durch die aktualisierte i-diary.exe ersetzt werden.
Diese befindet sich in der heruntergeladenen ZIP idoit-i_diary-x.x.x.zip im Pfad
\idoit-i-diary-1.1\src\classes\modules\syneticsgmbh_idoit\i-diary

* * *

[Konfiguration](#konfiguration)
===============================

[Einstellungen über GUI ändern und speichern](#einstellungen-über-gui-aendern-und-speichern)
-------------------------------------------------------------------------------------------

Der Benutzer hat die Möglichkeit, die Konfigurationsdatei über die Anwendung zu erstellen und zu ändern.

Dies sind die folgenden Fälle:

*   Wenn die Konfigurationsdatei leer ist oder noch nicht existiert, wird die GUI-Konfiguration automatisch beim Start der Anwendung geöffnet.

[![Konfiguration](../assets/images/de/i-doit-pro-add-ons/i-diary/1-id.png)](../assets/images/de/i-doit-pro-add-ons/i-diary/1-id.png)

[![Konfiguration](../assets/images/de/i-doit-pro-add-ons/i-diary/2-id.png)](../assets/images/de/i-doit-pro-add-ons/i-diary/2-id.png)

*   Wenn der Benutzer etwas in der GUI-Konfiguration ändert, wird die Änderung sofort geprüft und gespeichert, wenn sie gültig ist.

*   Wenn der Benutzer nicht `[http://](http://)` angibt, wird `[http://](http://)` für die Prüfung verwendet und gespeichert.

*   Wenn der Benutzer `src/jsonrpc.php` als Suffix im URL-Feld angibt, wird der Suffix für die Prüfung ignoriert und ohne diese gespeichert.

*   Der Benutzer kann die Verbindung manuell testen, indem er auf die Schaltfläche `Test the connection` klickt.

* * *

[Grundlegende Verwendung](#grundlegende-verwendung)
===================================================

[Einen neuen Eintrag erstellen](#einen-neuen-eintrag-erstellen)
---------------------------------------------------------------

Der Benutzer kann einen neuen Eintrag anlegen, dazu werden die folgenden Schritte durchgeführt:

*   Autor, Datum und Eintrag müssen ausgefüllt und gültig sein.

*   Bei weiteren Einträgen bleibt die Auswahl von Autor und Datum bestehen, bis die Anwendung geschlossen wird.

*   Wenn der Benutzer einen Eintrag speichert, wird die Liste der Einträge aktualisiert.

Der Benutzer kann außerdem einen Eintrag aktualisieren. Dazu muss das Stift Icon neben dem jeweiligen Eintrag angeklickt werden. Nachdem der Eintrag bearbeitet wurde wird dieser durch den Klick auf Update aktualisiert.

* * *

[![Einen neuen Eintrag erstellen](../assets/images/de/i-doit-pro-add-ons/i-diary/3-id.png)](../assets/images/de/i-doit-pro-add-ons/i-diary/3-id.png)

[Auswahl des Hosts](#auswahl-des-hosts)
=======================================

Es gibt drei Möglichkeiten, einen Host auszuwählen:

[Automatisch einen Host auswählen](#automatisch-einen-host-auswählen)
---------------------------------------------------------------------

Wenn in den Einstellungen kein Host gespeichert ist, sollte ein Host automatisch ermittelt und dem Benutzer vorgeschlagen werden. Zu diesem Zweck wird der Name des Hosts ermittelt.

[Der Name des Hosts wird als Objekttitel in i-doit gesucht](#der-name-des-hosts-wird-als-objekttitel-in-i-doit-gesucht)
-----------------------------------------------------------------------------------------------------------------------

*   Wenn genau ein Objekt gefunden wird, wird seine ID gespeichert.

*   Werden mehrere Objekte mit dem gleichen Namen gefunden, kann der Benutzer aus diesen Objekten auswählen.

*   Der Benutzer kann die Auswahl abbrechen, um den Host manuell auszuwählen.

[Host manuell auswählen](#host-manuell-auswaehlen)
-------------------------------------------------

*   Der Benutzer legt die Objekt-ID in der Konfigurationsdatei fest. Nach einem Neustart der Anwendung wird die Einstellung wirksam.

[![Host manuell auswählen](../assets/images/de/i-doit-pro-add-ons/i-diary/4-id.png)](../assets/images/de/i-doit-pro-add-ons/i-diary/4-id.png)

[![Host manuell auswählen](../assets/images/de/i-doit-pro-add-ons/i-diary/5-id.png)](../assets/images/de/i-doit-pro-add-ons/i-diary/5-id.png)

*   Der Benutzer wählt einen Objekttitel aus einer Liste aus. Es werden nur Objekte angezeigt, deren Objekttypen der Kategorie  Diary  zugeordnet sind. Die Liste ist nach Objekttypen aufgeteilt. Als Listenüberschrift wird der übersetzte Titel des jeweiligen Objekttyps angezeigt. Wenn der Benutzer ein Objekt aus der Liste auswählt, wird dessen ID gespeichert.

*   Der Benutzer gibt die Objekt-ID in eine Suchmaske ein. Die Anwendung gibt eine Rückmeldung, ob das Objekt gefunden wurde und speichert seine ID.

*   Der Benutzer gibt den Objekttitel in eine Suchmaske ein. Die Anwendung gibt eine Rückmeldung, ob das Objekt gefunden wurde und speichert seine ID.

*   Wenn mehrere Objekte mit demselben Namen gefunden werden, kann der Benutzer aus dieser Liste auswählen.

[Der Host wird in der Konfiguration gespeichert](#der-host-wird-in-der-konfiguration-gespeichert)
-------------------------------------------------------------------------------------------------

*   Wenn die Anwendung gestartet wird, wird die Konfigurationsdatei gelesen, wenn eine Konfigurationsdatei vorhanden ist.

*   Wenn eine Objekt-ID gespeichert ist, erhält die Anwendung den entsprechenden Titel, um sie anzuzeigen.

* * *

[Auswahl des Autors](#auswahl-des-autors)
=========================================

Es gibt drei Möglichkeiten, einen Autor auszuwählen:

[Der Autor wird automatisch ausgewählt](#der-autor-wird-automatisch-ausgewaehlt)
-------------------------------------------------------------------------------

Wenn kein Autor gespeichert wurde und der Benutzer die Anwendung startet, versucht die Anwendung, den Autor automatisch zu erkennen.

Dies geschieht durch den folgenden Prozess:

Wenn in den Einstellungen ein  Benutzername  angegeben wird, prüft die Anwendung, ob die Person mit einem Personen-Objekt in i-doit übereinstimmt. Ist dies der Fall, wird die ID des Autors gespeichert.

[Den Autor manuell auswählen](#den-autor-manuell-auswaehlen)
-----------------------------------------------------------

Der Benutzer kann einen Autor für einen neuen Eintrag mit den folgenden Optionen manuell auswählen:

*   Der Benutzer kann die Objekt-ID des Autors in die Konfigurationsdatei schreiben. Diese Einstellung wird erst beim Neustart der Anwendung wirksam.

[![Den Autor manuell auswählen](../assets/images/de/i-doit-pro-add-ons/i-diary/6-id.png)](../assets/images/de/i-doit-pro-add-ons/i-diary/6-id.png)

*   Der Benutzer kann eine Person als Autor aus einer durchsuchbaren Liste auswählen. Diese Liste ist unterteilt in  Kontakte  (Objektbeziehungen aus der Kategorie  Kontaktzuordnung ) und  Personen  (Objekte vom Typ  Personen ).

*   Die Titel der Objekte werden in der Liste angezeigt. Wenn der Benutzer ein Objekt auswählt, wird dessen ID gespeichert.

[Autor wird in der Konfiguration gespeichert](#autor-wird-in-der-konfiguration-gespeichert)
-------------------------------------------------------------------------------------------

*   Wenn der Benutzer die Anwendung startet, ist der bereits gespeicherte Autor für einen neuen Eintrag vorausgewählt.

*   Die Anwendung prüft, ob die Objekt-ID in der Konfigurationsdatei gültig ist. Anhand der ID ruft die Anwendung den Objekttitel ab, um ihn anzuzeigen.

[Object Details](#object-details)
=================================

*   Wenn ein Objekt ausgewählt wurde können nun Details zu diesem angezeigt werden. Hierzu muss das Info Icon geklickt werden, nun öffnet sich ein weiteres Fenster mit den Informationen

[![Object Details](../assets/images/de/i-doit-pro-add-ons/i-diary/7-id.png)](../assets/images/de/i-doit-pro-add-ons/i-diary/7-id.png)

Sind Informationen nicht vorhanden werden diese durch n/a dargestellt.

[![Object Details](../assets/images/de/i-doit-pro-add-ons/i-diary/8-id.png)](../assets/images/de/i-doit-pro-add-ons/i-diary/8-id.png)

[FAQ](#faq)
===========

Bekannte Fehlermeldungen und deren Bedeutung:

| Fehlermeldung | Mögliche Ursache |
| --- | --- |
| Fehlermeldung | Mögliche Ursache |
| --- | --- |
| The HTTP response status code does not indicate a successful service response | URL falsch |
| i-doit system error: Unable to retrieve mandator | API Key falsch |
| The service response is invalid | Benutzername oder Passwort falsch. API Add-on Version is zu alt |
| Fehler beim Senden der Anforderung | Hostadresse falsch |
| The HTTP response has invalid Content-Type header value | API Add-on ist nicht installiert |

* * *

[Changelog](#changelog)
=======================

| Version | Release | Changelog |
| --- | --- | --- |
| 1.3 | 08.05.2024 | Used "idoit_i_diary" as new identifier<br> Objects are not loaded after second start<br> Starting i-diary needs a lot of time<br> i-diary does not recognize diary category<br>Author is not loaded |
| 1.2 | 23.01.2023 | Primary IP address is shown empty  <br>Clicking on the info icon crashes i-diary  <br>Contact assignment does not show the Primary contact |
| 1.1 | 04.01.2022 | Show all details about the host  <br>Update entries in i-diary  <br>Automatic recognition of object types  <br>Provide all Changelogs in CHANGELOG file |
| 1.0.2 | 09.11.2021 | Make connection using HTTPS  <br>Configuration of a proxy server |
| 1.0.1 | 06.11.2020 | Change the position of the buttons in the settings window  <br>Change the title of the settings window  <br>Log in without authentication  <br>Writing a log file to check the connection  <br>The comboboxes should display more lines |
| 1.0.0 | 21.09.2020 | This is the first release of i-diary |
