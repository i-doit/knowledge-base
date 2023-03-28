# i-doit QR-Code Printer

!!! info "Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/inventarisierung-in-i-doit-mit-qr-codes/)"

Innerhalb von i-doit hast du die Möglichkeit für alle Objekte automatisch Barcodes oder QR-Codes zu generieren. Diese können dann z.B. verwendet werden um automatisch [Etiketten zu drucken](./i-doit-qr-code-printer.md) die Maschinenlesbar sind. Angezeigt bekommst du diese sobald die Funktion konfiguriert ist in der oberen rechten Ecke sobald ein Objekt ausgewählt ist.

[![Uebersichtsseite](../assets/images/de/i-doit-pro-add-ons/qr-code-printer/1-qr.png)](../assets/images/de/i-doit-pro-add-ons/qr-code-printer/1-qr.png)

Barcode
-------

[![Barcode](../assets/images/de/i-doit-pro-add-ons/qr-code-printer/2-qr.png)](../assets/images/de/i-doit-pro-add-ons/qr-code-printer/2-qr.png)

Als Strichcode, Balkencode, Streifencode oder Barcode wird eine optoelektronisch lesbare Schrift bezeichnet, die aus verschieden breiten, parallelen Strichen und Lücken besteht. Der Begriff Code steht hierbei nicht für Verschlüsselung, sondern für Abbildung von Daten in binären Symbolen. Der Nachteil des "alten" Barcode ist es das nur relativ wenig Informationen hinterlegt werden können.

QR-Code
-------

[![QR-Code](../assets/images/de/i-doit-pro-add-ons/qr-code-printer/3-qr.png)](../assets/images/de/i-doit-pro-add-ons/qr-code-printer/3-qr.png)

Der QR-Code (englisch Quick Response, "schnelle Antwort", als Markenbegriff "QR Code") ist ein zweidimensionaler Code, der von der japanischen Firma Denso Wave im Jahr 1994 entwickelt wurde. Aufgrund einer automatischen Fehlerkorrektur ist dieses Verfahren sehr robust und daher weit verbreitet. Der Vorteil des QR-Code ist das relativ viele Informationen hinterlegt werden können.

Konfiguration QR-Code oder Barcode
----------------------------------

Die Konfiguration innerhalb von i-doit findest du unter Verwaltung → Systemeinstellungen → Mandanteneinstellungen → QR-Code

[![Konfiguration QR-Code oder Barcode](../assets/images/de/i-doit-pro-add-ons/qr-code-printer/4-qr.png)](../assets/images/de/i-doit-pro-add-ons/qr-code-printer/4-qr.png)

Hier kannst du die Anzeige der Codes komplett deaktivieren, aktivieren und wählen ob der klassische Barcode oder der QR-Code für die Generierung verwendet werden soll.

Konfiguration des QR-Code Inhaltes
----------------------------------

Welche Informationen aus i-doit in den QR-Code hinterlegt werden sollen kannst du hier konfigurieren Verwaltung → CMDB Einstellungen → QR-Code

[![Konfiguration des QR-Code Inhaltes](../assets/images/de/i-doit-pro-add-ons/qr-code-printer/5-qr.png)](../assets/images/de/i-doit-pro-add-ons/qr-code-printer/5-qr.png)

Globale Definition
------------------

Wird globale Definition ausgewählt, ist es möglich die im QR-Code hinterlegten Informationen mit folgenden Platzhaltern zu füllen:

[![Globale Definition](../assets/images/de/i-doit-pro-add-ons/qr-code-printer/6-qr.png)](../assets/images/de/i-doit-pro-add-ons/qr-code-printer/6-qr.png)

Primäre Zugriffs URL
--------------------

Wird primäre Zugriffs URL gewählt fließt die im Objekt hinterlegt URL als einzige Information in den QR-Code ein.

QR-Code Verlinkung
------------------

Hier kann ausgewählt werden, welche Funktion ausgelöst wird sobald man auf den jeweiligen Code klickt.
Zur Auswahl steht das i-doit [QR-Code Printer](./i-doit-qr-code-printer.md) Tool oder ein POP UP mit der standard Druck Funktion des jeweiligen Betriebssystems.

Text Template
-------------

Hier besteht die Möglichkeit Freitext, aber auch mit den Platzhaltern Informationen aus i-doit zu verwenden und das Etikett entsprechend zu formatieren.

Logo für Druckansicht
---------------------

Hier kannst du eine Bild Datei hochladen und verknüpfen, diese wird dann automatisch bei der Erstellung des Etiketts verwendet.

i-doit QR-Code Printer
----------------------

Mit dem i-doit QR-Code Printer ist es dir möglich, bequem Etiketten auf deinem Etikettendrucker auszudrucken.
Hierfür steht dir eine Konfiguration zur Verfügung, sodass die Formate genau deinen Vorgaben entsprechen.
Wird der QR-Code beispielsweise mit einem Smartphone oder Tablet gescannt, wirst du auf die Übersichtsseite des gelabelten [Objekts](../glossar.md) weitergeleitet.

Start und Konfiguration
-----------------------

Du findest den QR-Code Printer zum Download in unserem [Kundenportal](../administration/kundenportal.md). Bei dem i-doit QR-Code Printer handelt es sich um eine Windows-Anwendung, welche direkt gestartet werden kann. Es ist nicht notwendig, eine Installation durchzuführen.

Nach dem Start der Anwendung gilt es im ersten Schritt, die Verbindung zu deiner i-doit-Installation aufzubauen, damit das Tool die Informationen auslesen kann. Unter **File → Options** findest du die Möglichkeit im Bereich **i-doit API Settings** die Verbindung anzugeben. Hier werden die URL zu deiner i-doit-Installation, der API-Key sowie die Credentials eines i-doit-Benutzers mit entsprechender Berechtigung für den [Zugriff über die API](./api/index.md) benötigt.

!!! info "Der i-doit API-Key"

    Den API-Key deiner Installation findest du in i-doit unter **Verwaltung** **→** **Schnittstellen / externe Daten → JSON-RPC API →  Allgemeine Einstellungen**

Konfiguration der Druck-Parameter
---------------------------------

Unter **File → Options **findest du die Möglichkeit, sämtliche Einstellungen, die für deinen Drucker notwendig sind, durchzuführen.
Hier kannst du die Randabstände sowie die Größe des Labels angeben.
Weiterhin kannst du die Positionierung des QR-Codes über Abstände in Pixeln und die Größe des QR-Codes definieren.
Solltest du eine andere Schriftart, -größe und -ausrichtung verwenden wollen, kannst du die Werte unter **QR-Code Positioning** gemäß deiner Anforderungen anpassen.
Auch das Logo für deine Labels kannst du in den Optionen angeben.
Wähle unter **Path** das gewünschte Logo in einem üblichen Bildformat aus und positioniere es entsprechend über die Parameter.
Weiterhin bietet es sich an den Dymo Label Writer als standard Drucker zu definieren und in diesem das standard Papier Format im Ausdruck auf horizontal umzustellen.

Drucken von Etiketten
---------------------

Sobald die Verbindung erfolgreich konfiguriert und die Einstellungen deinen Vorgaben entsprechen, kannst du mit dem Druck deiner Etiketten beginnen.
Trage hierzu die Objekt-ID des Objekts ein, zu dem du ein Etikett drucken möchtest.
Nun werden die Inhalte der Barcode Informationen gemäß den Inhalten aus i-doit übernommen. Selbstverständlich kannst du diese Informationen auch jederzeit bearbeiten.

Wenn die Informationen geladen wurden, kannst du den QR-Code über die Icons oder das Kontext-Menü um Punkt **File** entweder drucken, speichern oder exportieren.
Der Export erfolgt in das Bildformat .bmp.

[![Drucken von Etiketten](../assets/images/de/i-doit-pro-add-ons/qr-code-printer/7-qr.png)](../assets/images/de/i-doit-pro-add-ons/qr-code-printer/7-qr.png)

Releases
--------

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.5 | 24.01.2023 | [Bug] Fix the configuration of the Text margin |
