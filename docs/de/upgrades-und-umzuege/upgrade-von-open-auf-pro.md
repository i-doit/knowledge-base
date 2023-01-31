**Inhaltsverzeichnis**

*   1[Motivation](#Upgradevonidoitopenaufpro-Motivation)
*   2[In Sieben Schritten zur i-doit pro](#Upgradevonidoitopenaufpro-InSiebenSchrittenzuri-doitpro)
*   3[Vorbereitung](#Upgradevonidoitopenaufpro-Vorbereitung)
*   4[pro-Update herunterladen und durchführen](#Upgradevonidoitopenaufpro-pro-Updateherunterladenunddurchführen)
*   5[i-doit pro-addon installieren](#Upgradevonidoitopenaufpro-i-doitpro-addoninstallieren)
*   6[Lizenz einspielen](#Upgradevonidoitopenaufpro-Lizenzeinspielen)
*   7[Caches leeren](#Upgradevonidoitopenaufpro-Cachesleeren)
*   8[Rechte konfigurieren](#Upgradevonidoitopenaufpro-Rechtekonfigurieren)
*   9[Nacharbeiten](#Upgradevonidoitopenaufpro-Nacharbeiten)
*   10[Downgrade auf i-doit open?](#Upgradevonidoitopenaufpro-Downgradeaufi-doitopen?)

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

Wichtig: Dieser Vorgang kann nicht rückgängig gemacht werden. Ein funktionierendes [Backup](/display/de/Daten+sichern+und+wiederherstellen) ist daher unablässig.Nach dem Upgrade ist eine gültige [Lizenz für i-doit pro](/display/de/Lizenz+aktivieren)erforderlich. Ebenso müssen die [Systemvoraussetzungen](/display/de/Systemvoraussetzungen)und [\-einstellungen](/display/de/Systemeinstellungen)erfüllt sein.

Sollte es sich um eine ältere open-Installation handeln, müssen noch weitere Schritte befolgt werden:

*   Wenn i-doit open **0.9.x** oder älter installiert ist, ist ein Upgrade nicht möglich.
*   Wenn i-doit open **1.4.x** installiert ist, muss erst auf die neuste Version ab 1.8 aktualisiert werden.
*   Wenn i-doit open **1.8.x** oder höher installiert ist, kann das Upgrade fortgesetzt werden.

Die jeweils aktuelle Version steht auf [i-doit.org](http://i-doit.org/) zum Download bereit.

_pro_\-Update herunterladen und durchführen
-------------------------------------------

Das Update-Paket der pro-Variante muss im [Kundenportal](/display/de/Kundenportal) heruntergeladen und [auf die übliche Art und Weise eingespielt](/display/de/Update+einspielen) werden. Wichtig ist hierbei, dass die Versionsnummern der installierten open- und der gewünschten pro-Variante übereinstimmen. Beispiel: Ist i-doit open 1.8 installiert, muss das Update-Paket i-doit pro 1.8 verwendet werden.

Mit dem Installations-Paket der pro-Variante funktioniert das Upgrade nicht.

_i-doit pro_\-addon installieren
--------------------------------

Nach dem Update auf die pro-Variante muss das pro-addon installiert werden. Das pro-addon ist bereits im [Admin Center](/display/de/Admin+Center) unter `**Add-ons**` verfügbar. Dort befindet sich ein Button zum Installieren.

Lizenz einspielen
-----------------

Das eigentliche Upgrade ist nun vollendet und muss nur noch durch eine gültige Lizenz "veredelt" werden. Die Lizenz kann [direkt im Admin Center unter `**Licenses**` eingespielt](/display/de/Lizenz+aktivieren) werden.

Caches leeren
-------------

Nun melden wir uns vom Admin Center ab und in i-doit an. Dort klicken wir uns über **`Verwaltung` → `Systemtools` → `Cache / Datenbank`** zur Schaltfläche **`Kompletten Cache leeren`**. Anschließend leeren wir den Browser-eigenen Cache mit der Tastenkombination **`STRG+F5`.**

Rechte konfigurieren
--------------------

Im Gegensatz zu i-doit open besitzt i-doit pro ein umfangreiches, frei konfigurierbares [Rechtesystem](/display/de/Rechteverwaltung). Der angemeldete Benutzer wird daher noch nicht über alle Berechtigungen verfügen.

Um dem Benutzer mit wenigen Schritten vollen Zugriff zu gewähren, rufen wir **`Verwaltung`→ `Rechtesystem`** **→ `Rechtesystem zurücksetzen`** auf und erteilen ihm mit der Eingabe der Credentials für das [Admin Center](/display/de/Admin+Center) vollen Zugriff auf i-doit.

Nun können über die einzelnen Rechtevergaben weitere Rechte für Personen und Personengruppen konfiguriert werden.

Nacharbeiten
------------

Falls noch nicht geschehen, sollten folgende Dinge nicht außer Acht gelassen werden, damit i-doit reibungslos funktioniert:

*   [Backup und Restore einrichten und testen](/display/de/Daten+sichern+und+wiederherstellen)
*   [Cronjobs einrichten](/display/de/CLI) (mit dem Controller)
*   [Optional Update auf aktuelle pro-Version durchführen:](/display/de/Update+einspielen) Mit einer gültigen Lizenz ist es möglich und auch sehr empfehlenswert, immer auf die neuste Version von i-doit pro zu aktualisieren.  
    

Downgrade auf i-doit open?
--------------------------

Es ist nicht vorgesehen, auf niedrigere Versionen von i-doit zurückzukehren. Dies gilt auch für Downgrades von der _i-doit pro_ auf die _i-doit open_ Variante.