---
title: Upgrade von i-doit open auf pro
description: Upgrade von i-doit open auf pro
icon: fontawesome/brands/linux
status:
lang: de
---

Wie steigt man schnell und einfach von _i-doit open_ auf _i-doit pro_ mit erweiterten Funktionen um?

Motivation
----------

Warum sollte die IT-Infrastruktur eher mit der pro- als mit der open-Variante von i-doit dokumentiert werden? Der Grund ist einfach: [i-doit pro verfügt über wesentlich mehr Funktionen](https://www.i-doit.org/cmdb-it-documentation/), die bei der täglichen Arbeit eine große Hilfe darstellen.

In Sieben Schritten zur _i-doit pro_
------------------------------------

Bevor wir ins Detail gehen, verschaffen wir uns einen kurzen Überblick, welche Schritte erforderlich sind:

1.  Vorbereitung
2.  pro-Update herunterladen und durchführen
3.  pro-addon installieren
4.  Lizenz einspielen
5.  Caches leeren
6.  Rechte konfigurieren
7.  Nacharbeiten

Vorbereitung
------------

Wichtig: Dieser Vorgang kann nicht rückgängig gemacht werden. Ein funktionierendes [Backup](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) ist daher unablässig.Nach dem Upgrade ist eine gültige [Lizenz für i-doit pro](../wartung-und-betrieb/lizenz-aktivieren.md)erforderlich. Ebenso müssen die [Systemvoraussetzungen](../installation/systemvoraussetzungen.md) und [Einstellungen](../installation/manuelle-installation/systemeinstellungen.md) erfüllt sein.

Sollte es sich um eine ältere open-Installation handeln, müssen noch weitere Schritte befolgt werden:

*   Wenn i-doit open **0.9.x** oder älter installiert ist, ist ein Upgrade nicht möglich.
*   Wenn i-doit open **1.4.x** installiert ist, muss erst auf die neuste Version ab 1.8 aktualisiert werden.
*   Wenn i-doit open **1.8.x** oder höher installiert ist, kann das Upgrade fortgesetzt werden.

Die jeweils aktuelle Version steht auf [i-doit.org](http://i-doit.org/) zum Download bereit.

_pro_\-Update herunterladen und durchführen
-------------------------------------------

Das Update-Paket der pro-Variante muss im [Kundenportal](../administration/kundenportal.md) heruntergeladen und [auf die übliche Art und Weise eingespielt](../wartung-und-betrieb/update-einspielen.md) werden. Wichtig ist hierbei, dass die Versionsnummern der installierten open- und der gewünschten pro-Variante übereinstimmen. Beispiel: Ist i-doit open 1.8 installiert, muss das Update-Paket i-doit pro 1.8 verwendet werden.

Mit dem Installations-Paket der pro-Variante funktioniert das Upgrade nicht.

_i-doit pro_\-addon installieren
--------------------------------

Nach dem Update auf die pro-Variante muss das pro-addon installiert werden. Das pro-addon ist bereits im [Admin Center](../administration/admin-center.md) unter **Add-ons** verfügbar. Dort befindet sich ein Button zum Installieren.

Lizenz einspielen
-----------------

Das eigentliche Upgrade ist nun vollendet und muss nur noch durch eine gültige Lizenz "veredelt" werden. Die Lizenz kann [direkt im Admin Center unter **Licenses** eingespielt](../wartung-und-betrieb/lizenz-aktivieren.md) werden.

Caches leeren
-------------

Nun melden wir uns vom Admin Center ab und in i-doit an. Dort klicken wir uns über **Verwaltung → Systemtools → Cache / Datenbank** zur Schaltfläche **Kompletten Cache leeren**. Anschließend leeren wir den Browser-eigenen Cache mit der Tastenkombination **STRG+F5.**

Rechte konfigurieren
--------------------

Im Gegensatz zu i-doit open besitzt i-doit pro ein umfangreiches, frei konfigurierbares [Rechtesystem](../effizientes-dokumentieren/rechteverwaltung/index.md). Der angemeldete Benutzer wird daher noch nicht über alle Berechtigungen verfügen.

Um dem Benutzer mit wenigen Schritten vollen Zugriff zu gewähren, rufen wir **Verwaltung→ Rechtesystem** **→ Rechtesystem zurücksetzen** auf und erteilen ihm mit der Eingabe der Credentials für das [Admin Center](../administration/admin-center.md) vollen Zugriff auf i-doit.

Nun können über die einzelnen Rechtevergaben weitere Rechte für Personen und Personengruppen konfiguriert werden.

Nacharbeiten
------------

Falls noch nicht geschehen, sollten folgende Dinge nicht außer Acht gelassen werden, damit i-doit reibungslos funktioniert:

*   [Backup und Restore einrichten und testen](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md)
*   [Cronjobs einrichten](../automatisierung-und-integration/cli/index.md) (mit dem Controller)
*   [Optional Update auf aktuelle pro-Version durchführen:](../wartung-und-betrieb/update-einspielen.md) Mit einer gültigen Lizenz ist es möglich und auch sehr empfehlenswert, immer auf die neuste Version von i-doit pro zu aktualisieren.

Downgrade auf i-doit open?
--------------------------

Es ist nicht vorgesehen, auf niedrigere Versionen von i-doit zurückzukehren. Dies gilt auch für Downgrades von der _i-doit pro_ auf die _i-doit open_ Variante.
