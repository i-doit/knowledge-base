---
title: "i-doit 1.12.2: Update-Button funktionslos"
description: "Dieser Hotfix behebt einen Fehler, der das Update von i-doit 1.12.2 auf 1.12.3 verhindert."
icon:
status:
lang: de
---
# i-doit 1.12.2: Update-Button funktionslos

Dieser Hotfix behebt einen Fehler, der das Update von i-doit 1.12.2 auf 1.12.3 verhindert.

## Hotfix einspielen

Entpacke die ZIP-Datei im Installationsverzeichnis von i-doit und bestätige das Überschreiben (Taste **Y** oder **A**):

    sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/
    cd /var/www/html/
    sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
    sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip

!!! attention "Bitte beachten"

    Nutze diesen Hotfix ausschließlich mit Version 1.12.2.
    Erstelle vorher ein [Backup von i-doit](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md).
    Wenn du danach den Support kontaktierst, weise auf die Verwendung des Hotfixes hin.

### Das Update von i-doit 1.12.2 auf 1.12.3 ist nicht möglich (ausschließlich Version 1.12.2)

Dieser Hotfix korrigiert einen Fehler, der das Fortsetzen des Updates über die Download-Funktion in Version 1.12.2 verhindert.

!!! attention "Einverständniserklärung"

    Mit dem Herunterladen eines Hotfixes erklärst du, dass du die oben genannten Hinweise vollständig gelesen und verstanden hast.

[1.12.2-update-button-037c2ff396.zip :material-file-download:](../../assets/downloads/hotfixes/1.12.2-update-button-037c2ff396.zip){ .md-button .md-button--primary }

Nach dem Einspielen des Hotfixes:

1. Leere den i-doit-Cache über die [Verwaltung](../../administration/verwaltung/index.md).
2. Leere den Browser-Cache mit **Strg + F5**.
3. Führe den Update-Prozess wie gewohnt durch.
