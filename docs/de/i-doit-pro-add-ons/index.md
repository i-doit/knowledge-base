# i-doit pro Add-ons

Mit i-doit stehen die [IT-Dokumentation](../grundlagen/struktur-it-dokumentation.md) und die [CMDB](../grundlagen/struktur-it-dokumentation.md) im Vordergrund. Darüber hinaus existieren zusätzliche Add-ons, um den Funktionsumfang von i-doit bedarfsgerecht zu erweitern. Auf diese Weise gewinnt der Benutzer einen völlig neuen Blick auf die IT-Dokumentation.

!!!info ""Module" und "Erweiterungen""
    Im März 2017 wurden die bisherigen "Module" und "Erweiterungen" in "Add-ons" umbenannt. Die alten Namen sind allerdings noch in der Software an einigen Stellen zu finden und werden bei neuen Releases sukzessive ersetzt.

Liste von verfügbaren Add-ons
-----------------------------

| Add-on | Für pro-Variante verfügbar? | Für open-Variante verfügbar? | Lizenzpflichtig? |
| --- | --- | --- | --- |
| **[Add-on](./add-on-packager.md) [Packager](./add-on-packager.md)** | ja  | nein | ja  |
| **[Active Directory Documentation](./active-directory-documentation.md)** | ja  | nein | nein |
| **[Analysis](./analysis.md)** | ja  | nein | ja  |
| **[API](./api/index.md)** | ja  | ja  | nein |
| **[Cabling](./cabling.md)** | ja  | nein | nein |
| **[Checkmk](./checkmk.md)** | ja  | nein | nein |
| **[Checkmk2](./checkmk2/index.md)** | ja  | nein | ja  |
| **[DNS Documentation](./dns-documentation.md)** | ja  | nein | nein |
| **[Documents](./documents/index.md)** | ja  | nein | ja  |
| **[Events](./events.md)** | ja  | nein | nein |
| **[Floorplan](./floorplan.md)** | ja  | nein | nein |
| **[HomeOffice](https://www.i-doit.com/blog/i-doit-home-office-add-on/)** | ja  | nein | nein |
| **[i-diary](./i-diary.md)** | ja  | nein | nein |
| **[ISMS](./isms.md)** | ja  | nein | ja  |
| **[Maintenance](./maintenance.md)** | ja  | nein | nein |
| **[Nagios](../automatisierung-und-integration/network-monitoring/nagios.md)** | ja  | nein | nein |
| **[Relocate-CI](./relocate-ci.md)** | ja  | nein | nein |
| **[Replacement](./replacement.md)** | ja  | nein | nein |
| **[Report Special](https://www.i-doit.com/blog/i-doit-reporting-special/)** | ja  | nein | nein |
| **[VIVA](./viva/index.md)** | ja  | nein | ja  |
| **[Workflow](./workflow.md)** | ja  | nein | nein |

Neben diesen Add-ons existieren viele weitere, die von unseren Partnern und externen Entwicklern zur Verfügung gestellt werden. Eine umfangreiche Auflistung befindet sich [auf der Website i-doit.com unter **Produkt → Add-ons**](https://www.i-doit.com/produkte/add-ons/).

Download
--------

Herunterladen

Add-ons sind als installierbare ZIP-Dateien erhältlich. Diese werden über das [Admin Center](../administration/admin-center.md#add-ons) installiert.
Im [Kundenportal](../administration/kundenportal.md) können Kunden Add-ons herunterladen. Lizenzierungspflichtige Add-ons (siehe oben) werden im Kaufprozess in Ihrem Kundenkonto zum Download freigeschaltet.
Wenn Sie irgendwelche Add-ons vermissen, die Sie gekauft haben, kontaktieren Sie bitte [help@i-doit.com](mailto:help@i-doit.com) für Hilfe.

Evaluierungsbenutzer können alle kostenlosen und kommerziellen Add-ons im Evaluierungsprozess herunterladen. Für alle Add-ons gibt es auf Ihrer persönlichen Evaluierungsseite ([https://portal.i-doit.com](https://portal.i-doit.com)) Download-Buttons. Alle lizenzpflichtigen Add-ons sind in der Evaluierungslizenz lizenziert.

Installation
------------

Alle Module und Erweiterungen werden über das [Admin Center](../administration/admin-center.md) unter **Modules → Install/update module** installiert.

[![Installation](../assets/images/de/i-doit-pro-add-ons/1-i-doit-add-ons.png)](../assets/images/de/i-doit-pro-add-ons/1-i-doit-add-ons.png)

Der Button öffnet einen neuen Dialog. Unter **Tenant** wird festgelegt, ob das Add-on in allen [Mandanten](../administration/mandantenfaehigkeit.md) (**All tenants**) oder nur in einem einzelnen installiert werden soll. Über den Button **Durchsuchen…** unter **ZIP File** wird das Add-on ausgewählt. Nach einem Klick auf den Button **Upload and install** wird die ZIP-Datei auf den Host von i-doit hochgeladen und installiert.

[![Upload and install](../assets/images/de/i-doit-pro-add-ons/2-i-doit-add-ons.png)](../assets/images/de/i-doit-pro-add-ons/2-i-doit-add-ons.png)

Systemeinstellungen

Damit die Installation möglich ist, muss das Limit der maximalen Dateigröße über der Dateigröße der ZIP-Datei liegen. Wer die [Systemeinstellungen](../installation/manuelle-installation/systemeinstellungen.md) vollständig erfüllt hat, dürfte somit keine Schwierigkeiten bekommen.

Nach der erfolgreichen Installation erfolgt eine entsprechende Erfolgsmeldung. Das Add-on wird nun in der Liste der installierten Add-ons aufgeführt. Jeder Mandant verfügt hier über eine eigene Liste.

[![Systemeinstellungen](../assets/images/de/i-doit-pro-add-ons/3-i-doit-add-ons.png)](../assets/images/de/i-doit-pro-add-ons/3-i-doit-add-ons.png)

Wenn ein Add-on verfügbar, aber noch nicht installiert ist, wird es in der Liste des jeweiligen Mandanten mit **not installed** markiert. Über den Button **Install** kann die Installation nachgeholt werden, ohne die ZIP-Datei erneut hochladen zu müssen.

Rechte vergeben
---------------

Jedes Add-on verfügt über eigene Rechte, die pro Person oder Personengruppe vergeben werden können. Nach der Installation eines neuen Add-ons verfügen die Benutzer noch über keinerlei Rechte zur Verwendung. Dazu sind weitere Schritte in der [Rechteverwaltung](../effizientes-dokumentieren/rechteverwaltung/index.md)nötig.

Aktualisieren
-------------

Wenn eine neue Version eines Add-ons verfügbar wird, kann es ohne eine komplette Neuinstallation aktualisiert werden. Hierbei bleiben alle bereits gepflegten Daten erhalten.

Die Schritte ähneln sich der Installation: Unter **Install/update module** wird die neue ZIP-Datei hochgeladen und installiert. Wenn i-doit über eine Verbindung zum Internet verfügt, kann das Add-on alternativ über den Button **Update / Re-Install** in der jeweiligen Liste aktualisiert werden. Die ZIP-Datei wird automatisch heruntergeladen und installiert. Diese Funktion steht nicht für alle Add-ons zur Verfügung.

Deinstallieren
--------------

Über die oben erwähnte Liste kann ein installiertes Add-on wieder deinstalliert werden. Dazu wird es über die Checkbox markiert. Nach einem Klick auf den Button **Uninstall selected module** und einer Bestätigung werden alle Dateien und auch Benutzer-Daten **unwiderruflich gelöscht**. Die Deinstallation erfolgt Mandanten-übergreifend. Durch das mehrmalige Markieren von Checkboxen können mehrere Add-ons gleichzeitig deinstalliert werden.

(De-)Aktivieren
---------------

Um ein Add-on nicht mehr zu verwenden, aber die Benutzer-Daten nicht zu verlieren, kann ein Add-on deaktiviert werden. Hierzu wird es über die Checkbox markiert und über den Button **Deactivate selected module** für den jeweiligen Mandaten deaktiviert. Die Funktionen und Benutzer-Daten sind für anschließend nicht mehr verfügbar.

Das erneute Aktivieren erfolgt ähnlich: Add-on in der Liste markieren und den Button **Activate selected module** klicken. Dadurch werden die Funktionen und Benutzer-Daten wieder sichtbar.

Alle anderen Mandanten bleiben von diesen Aktionen unberührt. Durch das mehrmalige Markieren von Checkboxen können mehrere Add-ons bzw. ein Add-on in mehreren Mandanten gleichzeitig deaktiviert werden.
