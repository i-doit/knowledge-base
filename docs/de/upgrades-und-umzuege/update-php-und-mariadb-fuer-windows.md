---
title: Update PHP und MariaDB unter Windows
description: Anleitung zum updaten von PHP und MariaDB für i-doit Windows Installationen. Beinhaltete PHP Versionen sind 8.2, 8.3 und 8.4. Beinhaltete MariaDB Versionen sind MariaDB 10.11. Hier zeigen wir, welche Schritte notwendig sind um die PHP und MariaDB Versionen korrekt anzuheben.
icon: material/microsoft-windows
status:
lang: de
---

In diesem Artikel zeigen wir Ihnen, wie Sie PHP und MariaDB für Ihre [i-doit Windows](../installation/manuelle-installation/microsoft-windows-server/index.md) Installation updaten.

## Update Pakete

Um PHP und MariaDB erfolgreich updaten zu können, brauchen wir die jeweils richtigen Update Pakete.

### PHP Update Paket herunterladen

Um erfolgreich auf eine der PHP8.X Versionen updaten zu können wird das Update als zip Datei benötigt.
Das entsprechende Paket kann hier heruntergeladen werden: [x64 Thread Safe](https://windows.php.net/download/)

!!! warning "Es muss unbedingt eine Zip Datei sein und die 'x64 Thread Safe' Version"

Überprüfen Sie vorab, ob die PHP Version auch mit Ihrer i-doit Version übereinstimmt!
Hier finden Sie unsere [Kompatibilitätsmatrix](../installation/systemvoraussetzungen.md#kompatibilitätsmatrix).

### MariaDB 10.11 installer herunterladen

Um erfolgreich aus MariaDB 10.11 Updaten zu können benötigen wir die [MariaDB Server 10.11.1 RC Version](https://mariadb.org/download/?t=mariadb&o=true&p=mariadb&r=10.11.1&os=windows&cpu=x86_64&pkg=msi&mirror=archive)

??? info "Die bereits ausgewählten Optionen müssen vorhanden sein!"

[![MariaDB selektierte Optionen](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/1-pum.png)](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/1-pum.png)

## MariaDB und PHP updaten

!!! warning "Machen Sie vor den folgenden Schritten unbedingt ein [Backup](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) oder einen Snapshot!"

### Apache Service stoppen

Zuerst muss der Apache2 Service gestoppt werden. Dies kann entweder über das "Dienste" Fenster oder über einen Befehl für die Konsole ausgeführt werden.

**"Dienste" Fenster:**

Suchen Sie unter den angezeigten Diensten den **Apache2.4** Dienst und klicken Sie auf **"Den Dienst beenden"**

[![Apache Service stoppen Fenster](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/2-pum.png)](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/2-pum.png)

**Konsole:**

Über **Windowstaste + R** können Sie, wenn Sie **cmd** eingeben, die Windowskonsole öffnen.
Dort geben Sie dann den folgenden **Befehl** ein:

```winbatch
C:\ProgramData\i-doit\apache-2.4\bin\httpd.exe -k stop
```

### MariaDB aktualisieren

Nachdem der Apache2.4 Service erfolgreich beendet wurde, kann nun die MariaDB msi Datei ausgeführt werden, um das Update zu starten.

Nachdem Sie der Lizenz zugestimmt haben, wählen Sie die Option **"Do not create a new database. Optionally upgrade existing instances"** aus.

[![upgrade existing instances](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/3-pum.png)](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/3-pum.png)

Anschließend ändern Sie den Pfad auf **"C:\ProgramData\"** und klicken Sie dann auf **"Installieren"**

[![ProgramData](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/4-pum.png)](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/4-pum.png)

Zuletzt muss noch die Option "Launch Wizard to Upgrade existing MariaDB or MySQL services" gesetzt werden.

[![Haken](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/5-pum.png)](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/5-pum.png)

In dem neuen Fenster das Sich daraufhin öffnet wählen Sie dann den MySQL Service aus und klicken auf **"Upgrade"**.

[![upgrade existing instances](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/6-pum.png)](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/6-pum.png)

!!! info "Sollte das Upgrade Fenster nicht auftauchen, können Sie die MariaDB 10.11 Upgrade Wizard EXE manuell unter **C:\ProgramData\MariaDB10.11\bin** finden und ausführen."

Damit ist MariaDB erfolgreich auf MariaDB 10.11 aktualisiert.

### PHP aktualisieren

Die Aktualisierung von PHP gestaltet sich deutlich einfacher.

Zuerst muss ein backup von der PHP.ini gemacht werden, hier reicht es aus, die Datei aus dem `C:\ProgramData\i-doit\php\` Ordner zu kopieren und in einem anderen Ordner einzufügen.

!!! warning "Der Apache2.4 Service muss für den folgenden Schritt beendet sein!"

Dann entpacken wir den Inhalt der vorher heruntergeladenen ZIP Datei in den `C:\ProgramData\i-doit\php\` Ordner und ersetzen so die alten PHP Dateien.

Nachdem der Inhalt erfolgreich eingefügt wurde, kann das Backup der PHP.ini Datei ebenfalls in den Ordner eingefügt und ersetzt werden, damit die alten PHP Einstellungen wieder vorhanden sind.

Zuletzt muss der Apache2.4 Service wieder eingeschaltet werden und somit ist PHP erfolgreich aktualisiert.

### Überprüfen

Überprüfen Sie zuletzt, ob das Update erfolgreich war, indem Sie in der Verwaltung unter **"System Config Check"** die Versionen überprüfen

[![check version](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/7-pum.png)](../assets/images/de/upgrades-und-umzuege/php-mariadb-update/7-pum.png)
