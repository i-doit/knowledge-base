---
title: "i-doit 1.13.2 & 1.14: Login im Admin-Center nicht möglich"
description: "Dieser Hotfix behebt einen Fehler, durch den die Anmeldung am Admin-Center in den Versionen 1.13.2 und 1.14 nicht mehr funktioniert."
icon:
status:
lang: de
---
# i-doit 1.13.2 & 1.14: Login im Admin-Center nicht möglich

Dieser Hotfix behebt einen Fehler, durch den die Anmeldung am Admin-Center in den Versionen 1.13.2 und 1.14 nicht mehr funktioniert.

## Hotfix einspielen

Entpacke die ZIP-Datei im Installationsverzeichnis von i-doit und bestätige das Überschreiben (Taste **Y** oder **A**):

    sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/
    cd /var/www/html/
    sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
    sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip

!!! attention "Bitte beachten"

    Nutze diesen Hotfix ausschließlich mit Version 1.13.2 oder 1.14.
    Erstelle vorher ein [Backup von i-doit](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md).
    Wenn du danach den Support kontaktierst, weise auf die Verwendung des Hotfixes hin.

### Anmeldung am Admin-Center funktioniert nicht mehr (ausschließlich Version 1.13.2 und 1.14)

!!! attention "Einverständniserklärung"

    Mit dem Herunterladen eines Hotfixes erklärst du, dass du die oben genannten Hinweise vollständig gelesen und verstanden hast.

[i-doit_1.13.2_hotfix_ID-7224_Admin-Center-Login.zip :material-file-download:](../../assets/downloads/hotfixes/i-doit_1.13.2_hotfix_ID-7224_Admin-Center-Login.zip){ .md-button .md-button--primary }

Dieser Hotfix stellt einen neuen Befehl für die [console.php](../../automatisierung-und-integration/cli/index.md) bereit, mit dem du ein neues verschlüsseltes Passwort für das Admin-Center vergibst:

    sudo -u www-data php console.php admin-center-password-reset --user Benutzer --password Passwort

!!! note "Hinweise"
    -   `www-data` ist der Apache-User auf Debian-Systemen. Passe ihn an dein Betriebssystem an.
    -   Die Parameter `--user` und `--password` erfordern einen i-doit-Benutzer mit Console-Berechtigung.
