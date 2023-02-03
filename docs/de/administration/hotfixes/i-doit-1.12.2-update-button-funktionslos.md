Hotfixes beseitigen einen bestimmten Fehler und werden in der Regel als ZIP-Datei zur Verfügung gestellt. Die ZIP-Datei wird im Installationsverzeichnis von i-doit entpackt. Die Abfrage, ob Dateien beim Entpacken überschrieben werden sollen, kann bestätigt werden (Taste `**Y**` für "yes" oder `**A**` für "all"). Hier ein Beispiel:

[?](#)

`sudo` `cp` `i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip` `/var/www/html/i-doit/`

`cd` `/var/www/html/i-doit/`

`sudo` `-u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip`

`sudo` `rm` `i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip`

Bitte beachten

Bitte nutzen Sie Hotfixes ausschließlich mit der genannten Version.

Bitte stellen Sie sicher, dass vor der Verwendung dieser Hotfixes ein [Backup von i-doit](/display/de/Daten+sichern+und+wiederherstellen) erstellt wurde.

Sollten Sie nach der Verwendung der Hotfixes mit dem Support in Kontakt treten, ergänzen Sie bitte den Hinweis auf dessen Verwendung.

### Das Update von i-doit 1.12.2 auf 1.12.3 ist nicht möglich (Ausschließlich Version 1.12.2!)

Dieser Hotfix korrigiert einen Fehler der das Fortsetzen des Updates über die Download-Funktion verhindert, wenn die Version 1.12.2 verwendet wird.

Einverständniserklärung

Mit dem Herunterladen eines Hotfixes erklären Sie, dass Sie die oben genannten Hinweise vollständig gelesen und verstanden haben.

[![](/s/-rg4ht/8803/xi7l17/5.0.0/_/download/resources/com.atlassian.confluence.plugins.confluence-view-file-macro:view-file-macro-resources/images/placeholder-small-zip.png)1.12.2-update-button-037c2ff396.zip](/download/attachments/82576108/1.12.2-update-button-037c2ff396.zip?version=1&modificationDate=1582119559245&api=v2)

Nach dem Einspielen des Hotfixes ist es nötig, den i-doit Cache (über die [Verwaltung](/display/de/Verwaltung)) sowie den Cache des Browsers (über die Tastenkombination **`Strg + F5`**) zu leeren. Anschließend kann der Update-Prozess wie gewohnt aufgerufen und durchgeführt werden.