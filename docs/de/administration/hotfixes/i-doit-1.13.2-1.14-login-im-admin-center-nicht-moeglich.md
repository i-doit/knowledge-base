# i-doit 1.13.2 & 1.14: Login im Admin-Center nicht möglich

Hotfixes beseitigen einen bestimmten Fehler und werden in der Regel als ZIP-Datei zur Verfügung gestellt. Die ZIP-Datei wird im Installationsverzeichnis von i-doit entpackt. Die Abfrage, ob Dateien beim Entpacken überschrieben werden sollen, kann bestätigt werden (Taste **Y** für "yes" oder **A** für "all"). Hier ein Beispiel:

    sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/i-doit/
    cd /var/www/html/i-doit/
    sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
    sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip

!!! attention "Bitte beachten"

    Bitte nutzen Sie Hotfixes ausschließlich mit der genannten Version.

    Bitte stellen Sie sicher, dass vor der Verwendung dieser Hotfixes ein [Backup von i-doit](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) erstellt wurde.

    Sollten Sie nach der Verwendung der Hotfixes mit dem Support in Kontakt treten, ergänzen Sie bitte den Hinweis auf dessen Verwendung.

### Anmeldung am Admin-Center funktioniert nicht mehr (Ausschließlich Version 1.13.2 und 1.14!)

!!! attention "Einverständniserklärung"

    Mit dem Herunterladen eines Hotfixes erklären Sie, dass Sie die oben genannten Hinweise vollständig gelesen und verstanden haben.

[![Admin-Center neues Passwort vergeben](../../assets/downloads/hotfixes/i-doit_1.13.2_hotfix_ID-7224_Admin-Center-Login.zip)](../../assets/downloads/hotfixes/i-doit_1.13.2_hotfix_ID-7224_Admin-Center-Login.zip)

Dieser Hotfix stellt nach der Implementierung einen neuen Befehl für die [console.php](../../automatisierung-und-integration/cli/console/index.md) bereit, um ein neues verschlüsseltes Passwort für das Admin-Center zu vergeben.  
Folgender Befehl muss ausgeführt werden, um das Passwort neu zu vergeben:

    sudo -u www-data php console.php admin-center-password-reset --user Benutzer --password Passwort

Bei dem User www-data handelt es sich um den Apache-User eines Debian Systems. Dieser muss anderen Systemen angepasst werden. Weiterhin wird in den Abschnitten --user und --password ein Benutzer aus i-doit benötigt, welcher die Berechtigungen hat die Console zu nutzen.