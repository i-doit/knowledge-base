Mit i-doit stehen die [IT-Dokumentation](/display/de/Struktur+der+IT-Dokumentation) und die [CMDB](/display/de/Struktur+der+IT-Dokumentation) im Vordergrund. Darüber hinaus existieren zusätzliche Add-ons, um den Funktionsumfang von i-doit bedarfsgerecht zu erweitern. Auf diese Weise gewinnt der Benutzer einen völlig neuen Blick auf die IT-Dokumentation.

"Module" und "Erweiterungen"

Im März 2017 wurden die bisherigen "Module" und "Erweiterungen" in "Add-ons" umbenannt. Die alten Namen sind allerdings noch in der Software an einigen Stellen zu finden und werden bei neuen Releases sukzessive ersetzt.

**Inhaltsverzeichnis**

*   1[Liste von verfügbaren Add-ons](#idoitproAddons-ListevonverfügbarenAdd-ons)
*   2[Download](#idoitproAddons-Download)
*   3[Installation](#idoitproAddons-Installation)
*   4[Rechte vergeben](#idoitproAddons-Rechtevergeben)
*   5[Aktualisieren](#idoitproAddons-Aktualisieren)
*   6[Deinstallieren](#idoitproAddons-Deinstallieren)
*   7[(De-)Aktivieren](#idoitproAddons-(De-)Aktivieren)

Liste von verfügbaren Add-ons
-----------------------------

| Add-on | Für pro-Variante verfügbar? | Für open-Variante verfügbar? | Lizenzpflichtig? |
| --- | --- | --- | --- |
| Add-on | Für pro-Variante verfügbar? | Für open-Variante verfügbar? | Lizenzpflichtig? |
| --- | --- | --- | --- |
| **`[Add-on](/display/de/Add-on+Packager) [Packager](/display/de/Add-on+Packager)`** | ja  | nein | ja  |
| **`[Active Directory Documentation](/display/de/Active+Directory+Documentation)`** | ja  | nein | nein |
| **`[Analysis](/display/de/Analysis)`** | ja  | nein | ja  |
| **`[API](/pages/viewpage.action?pageId=7831613)`** | ja  | ja  | nein |
| **`[Cabling](/display/de/Cabling)`** | ja  | nein | nein |
| **`[Checkmk](/display/de/Checkmk)`** | ja  | nein | nein |
| **`[Checkmk2](/display/en/Checkmk2)`** | ja  | nein | ja  |
| **`[DNS Documentation](/display/de/DNS+Documentation)`** | ja  | nein | nein |
| **`[Documents](/display/de/Documents)`** | ja  | nein | ja  |
| **`[Events](/display/de/Events)`** | ja  | nein | nein |
| **`[Floorplan](/display/de/Floorplan)`** | ja  | nein | nein |
| **`[HomeOffice](https://www.i-doit.com/blog/i-doit-home-office-add-on/)`** | ja  | nein | nein |
| **`[i-diary](https://kb.i-doit.com/display/de/i-diary)`** | ja  | nein | nein |
| **`[ISMS](/display/de/ISMS)`** | ja  | nein | ja  |
| **`[Maintenance](/display/de/Maintenance)`** | ja  | nein | nein |
| **`[Nagios](/display/de/Nagios)`** | ja  | nein | nein |
| **`[Relocate-CI](/display/de/Relocate-CI)`** | ja  | nein | nein |
| **`[Replacement](/display/de/Replacement)`** | ja  | nein | nein |
| **`[Report Special](https://www.i-doit.com/blog/i-doit-reporting-special/)`** | ja  | nein | nein |
| **`[VIVA](/display/de/VIVA)`** | ja  | nein | ja  |
| **`[Workflow](/display/de/Workflow)`** | ja  | nein | nein |

Neben diesen Add-ons existieren viele weitere, die von unseren Partnern und externen Entwicklern zur Verfügung gestellt werden. Eine umfangreiche Auflistung befindet sich [auf der Website i-doit.com unter **`Produkt → Add-ons`**](https://www.i-doit.com/produkte/add-ons/).

Download
--------

Herunterladen

Add-ons sind als installierbare ZIP-Dateien erhältlich. Diese werden über das [Admin Center](https://kb.i-doit.com/display/de/Admin+Center#AdminCenter-Add-ons) installiert.  
Im [Kundenportal](/display/de/Kundenportal) können Kunden Add-ons herunterladen. Lizenzierungspflichtige Add-ons (siehe oben) werden im Kaufprozess in Ihrem Kundenkonto zum Download freigeschaltet.  
Wenn Sie irgendwelche Add-ons vermissen, die Sie gekauft haben, kontaktieren Sie bitte [help@i-doit.com](mailto:help@i-doit.com) für Hilfe.

Evaluierungsbenutzer können alle kostenlosen und kommerziellen Add-ons im Evaluierungsprozess herunterladen. Für alle Add-ons gibt es auf Ihrer persönlichen Evaluierungsseite (z.B. [https://login.i-doit.com/eval/download/xxxxxxxxxxxxxxxxxx](https://login.i-doit.com/eval/download/xxxxxxxxxxxxxxxxxx)) Download-Buttons. Alle lizenzpflichtigen Add-ons sind in der Evaluierungslizenz lizenziert.

Installation
------------

Alle Module und Erweiterungen werden über das [Admin Center](/display/de/Admin+Center) unter `**Modules → Install/update module**` installiert.

  

![](/download/attachments/21659654/Admin-Center%20Modulinstallation%2001.png?version=1&modificationDate=1489667731166&api=v2&effects=drop-shadow)

  

  

  

  

Der Button öffnet einen neuen Dialog. Unter **Tenant** wird festgelegt, ob das Add-on in allen [Mandanten](/pages/viewpage.action?pageId=36864089) (`**All tenants**`) oder nur in einem einzelnen installiert werden soll. Über den Button `**Durchsuchen…**` unter `**ZIP File**` wird das Add-on ausgewählt. Nach einem Klick auf den Button **`Upload and install`** wird die ZIP-Datei auf den Host von i-doit hochgeladen und installiert.

![](/download/attachments/21659654/Admin-Center%20Modulinstallation%2002.png?version=1&modificationDate=1489667731209&api=v2&effects=drop-shadow)

Systemeinstellungen

Damit die Installation möglich ist, muss das Limit der maximalen Dateigröße über der Dateigröße der ZIP-Datei liegen. Wer die [Systemeinstellungen](/display/de/Systemeinstellungen) vollständig erfüllt hat, dürfte somit keine Schwierigkeiten bekommen.

Nach der erfolgreichen Installation erfolgt eine entsprechende Erfolgsmeldung. Das Add-on wird nun in der Liste der installierten Add-ons aufgeführt. Jeder Mandant verfügt hier über eine eigene Liste.

![](/download/attachments/21659654/image2021-10-1_14-29-34.png?version=1&modificationDate=1633091375001&api=v2&effects=drop-shadow)

Wenn ein Add-on verfügbar, aber noch nicht installiert ist, wird es in der Liste des jeweiligen Mandanten mit `**not installed**` markiert. Über den Button `**Install**` kann die Installation nachgeholt werden, ohne die ZIP-Datei erneut hochladen zu müssen.

Rechte vergeben
---------------

Jedes Add-on verfügt über eigene Rechte, die pro Person oder Personengruppe vergeben werden können. Nach der Installation eines neuen Add-ons verfügen die Benutzer noch über keinerlei Rechte zur Verwendung. Dazu sind weitere Schritte in der [Rechteverwaltung](/display/de/Rechteverwaltung)nötig.

Aktualisieren
-------------

Wenn eine neue Version eines Add-ons verfügbar wird, kann es ohne eine komplette Neuinstallation aktualisiert werden. Hierbei bleiben alle bereits gepflegten Daten erhalten.

Die Schritte ähneln sich der Installation: Unter **`Install/update module`** wird die neue ZIP-Datei hochgeladen und installiert. Wenn i-doit über eine Verbindung zum Internet verfügt, kann das Add-on alternativ über den Button **`Update / Re-Install`** in der jeweiligen Liste aktualisiert werden. Die ZIP-Datei wird automatisch heruntergeladen und installiert. Diese Funktion steht nicht für alle Add-ons zur Verfügung.

Deinstallieren
--------------

Über die oben erwähnte Liste kann ein installiertes Add-on wieder deinstalliert werden. Dazu wird es über die Checkbox markiert. Nach einem Klick auf den Button **`Uninstall selected module`** und einer Bestätigung werden alle Dateien und auch Benutzer-Daten **unwiderruflich gelöscht**. Die Deinstallation erfolgt Mandanten-übergreifend. Durch das mehrmalige Markieren von Checkboxen können mehrere Add-ons gleichzeitig deinstalliert werden.

(De-)Aktivieren
---------------

Um ein Add-on nicht mehr zu verwenden, aber die Benutzer-Daten nicht zu verlieren, kann ein Add-on deaktiviert werden. Hierzu wird es über die Checkbox markiert und über den Button **`Deactivate selected module`** für den jeweiligen Mandaten deaktiviert. Die Funktionen und Benutzer-Daten sind für anschließend nicht mehr verfügbar.

Das erneute Aktivieren erfolgt ähnlich: Add-on in der Liste markieren und den Button **`Activate selected module`** klicken. Dadurch werden die Funktionen und Benutzer-Daten wieder sichtbar.

Alle anderen Mandanten bleiben von diesen Aktionen unberührt. Durch das mehrmalige Markieren von Checkboxen können mehrere Add-ons bzw. ein Add-on in mehreren Mandanten gleichzeitig deaktiviert werden.