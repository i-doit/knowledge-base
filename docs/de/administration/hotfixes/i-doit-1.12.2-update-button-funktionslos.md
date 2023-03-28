# i-doit 1.12.2: Update-Button funktionslos

Hotfixes beseitigen einen bestimmten Fehler und werden in der Regel als ZIP-Datei zur Verfügung gestellt. Die ZIP-Datei wird im Installationsverzeichnis von i-doit entpackt. Die Abfrage, ob Dateien beim Entpacken überschrieben werden sollen, kann bestätigt werden (Taste **Y** für "yes" oder **A** für "all"). Hier ein Beispiel:

    sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/i-doit/
    cd /var/www/html/i-doit/
    sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
    sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip

!!! attention "Bitte beachten"

    Bitte nutzen Sie Hotfixes ausschließlich mit der genannten Version.
    Bitte stellen Sie sicher, dass vor der Verwendung dieser Hotfixes ein [Backup von i-doit](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) erstellt wurde.
    Sollten Sie nach der Verwendung der Hotfixes mit dem Support in Kontakt treten, ergänzen Sie bitte den Hinweis auf dessen Verwendung.

### Das Update von i-doit 1.12.2 auf 1.12.3 ist nicht möglich (Ausschließlich Version 1.12.2!)

Dieser Hotfix korrigiert einen Fehler der das Fortsetzen des Updates über die Download-Funktion verhindert, wenn die Version 1.12.2 verwendet wird.

!!! attention "Einverständniserklärung"

    Mit dem Herunterladen eines Hotfixes erklären Sie, dass Sie die oben genannten Hinweise vollständig gelesen und verstanden haben.

[![hotfix-1.12.2-update-button](../../assets/downloads/hotfixes/1.12.2-update-button-037c2ff396.zip)](../../assets/downloads/hotfixes/1.12.2-update-button-037c2ff396.zip)

Nach dem Einspielen des Hotfixes ist es nötig, den i-doit Cache (über die [Verwaltung](../../administration/verwaltung/index.md)) sowie den Cache des Browsers (über die Tastenkombination **Strg + F5**) zu leeren. Anschließend kann der Update-Prozess wie gewohnt aufgerufen und durchgeführt werden.
