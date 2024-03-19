<!-- TRANSLATED by md-translate -->
# i-doit 1.12.2: Update-Button funktionslos

# i-doit 1.12.2 : bouton de mise à jour inopérant

Hotfixes beseitigen einen bestimmten Fehler und werden in der Regel als ZIP-Datei zur Verfügung gestellt. Die ZIP-Datei wird im Installationsverzeichnis von i-doit entpackt. Die Abfrage, ob Dateien beim Entpacken überschrieben werden sollen, kann bestätigt werden (Taste **Y** für "yes" oder **A** für "all"). Hier ein Beispiel:

Les hotfixes éliminent une erreur spécifique et sont généralement mis à disposition sous forme de fichier ZIP. Le fichier ZIP est décompressé dans le répertoire d'installation d'i-doit. La demande si les fichiers doivent être écrasés lors de la décompression peut être confirmée (touche **Y** pour "yes" ou **A** pour "all"). Voici un exemple :

```
sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/i-doit/
cd /var/www/html/i-doit/
sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
```

!!! attention "Bitte beachten"

! !! attention "A noter"

```
Bitte nutzen Sie Hotfixes ausschließlich mit der genannten Version.
Bitte stellen Sie sicher, dass vor der Verwendung dieser Hotfixes ein [Backup von i-doit](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) erstellt wurde.
Sollten Sie nach der Verwendung der Hotfixes mit dem Support in Kontakt treten, ergänzen Sie bitte den Hinweis auf dessen Verwendung.
```

### Das Update von i-doit 1.12.2 auf 1.12.3 ist nicht möglich (Ausschließlich Version 1.12.2!)

### La mise à jour d'i-doit 1.12.2 à 1.12.3 n'est pas possible (Exclusivement la version 1.12.2 !)

Dieser Hotfix korrigiert einen Fehler der das Fortsetzen des Updates über die Download-Funktion verhindert, wenn die Version 1.12.2 verwendet wird.

Ce hotfix corrige une erreur qui empêche la poursuite de la mise à jour via la fonction de téléchargement lorsque la version 1.12.2 est utilisée.

!!! attention "Einverständniserklärung"

! !! attention "Déclaration de consentement"

```
Mit dem Herunterladen eines Hotfixes erklären Sie, dass Sie die oben genannten Hinweise vollständig gelesen und verstanden haben.
```

[1.12.2-update-button-037c2ff396.zip :material-file-download:](../../assets/downloads/hotfixes/1.12.2-update-button-037c2ff396.zip){ .md-button .md-button--primary }

[1.12.2-update-button-037c2ff396.zip :material-file-download :](../../assets/downloads/hotfixes/1.12.2-update-button-037c2ff396.zip){ .md-button .md-button--primary }

Nach dem Einspielen des Hotfixes ist es nötig, den i-doit Cache (über die [Verwaltung](../../administration/verwaltung/index.md)) sowie den Cache des Browsers (über die Tastenkombination **Strg + F5**) zu leeren. Anschließend kann der Update-Prozess wie gewohnt aufgerufen und durchgeführt werden.

Après l'installation du hotfix, il est nécessaire de vider le cache i-doit (via la [gestion](../../administration/gestion/index.md)) ainsi que le cache du navigateur (via la combinaison de touches **Ctrl + F5**). Ensuite, le processus de mise à jour peut être appelé et exécuté comme d'habitude.