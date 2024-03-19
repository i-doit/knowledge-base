<!-- TRANSLATED by md-translate -->
# Version 25

# Version 25

## Über

## À propos de

Hotfixes beseitigen einen bestimmten Fehler und werden in der Regel als ZIP-Datei zur Verfügung gestellt. Die ZIP-Datei wird im Installationsverzeichnis von i-doit entpackt. Die Abfrage, ob Dateien beim Entpacken überschrieben werden sollen, kann bestätigt werden (Taste **Y** für "yes" oder **A** für "all"). Hier ein Beispiel:

Les hotfixes éliminent une erreur spécifique et sont généralement mis à disposition sous forme de fichier ZIP. Le fichier ZIP est décompressé dans le répertoire d'installation d'i-doit. La demande si les fichiers doivent être écrasés lors de la décompression peut être confirmée (touche **Y** pour "yes" ou **A** pour "all"). Voici un exemple :

```shell
sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/i-doit/
cd /var/www/html/i-doit/
sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
```

!!! attention "Bitte beachten"

! !! attention "A noter"

```
Bitte nutzen Sie Hotfixes ausschließlich mit der genannten Version. In neueren Versionen werden diese bereits enthalten sein, sodass eine erneute Installation nicht notwendig ist.
Sollten Sie eine ältere Version von i-doit nutzen, ist es notwendig, zuerst auf die aktuelle Version zu aktualisieren.

Falls ein Hotfix zur Ausführung des Updates einer älteren Version notwendig ist, ist dieser in den Unterkapiteln zu den Hotfixes hier in der Knowledge Base zu finden.

Da es sich hierbei um Hotfixes handelt, empfehlen wir, diese nur einzuspielen, wenn diese für den sauberen Betrieb Ihrer Installation notwendig sind oder Sie durch den Support zur Verwendung aufgefordert werden. Bitte stellen Sie sicher, dass vor der Verwendung dieser Hotfixes ein [Backup von i-doit](../../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) erstellt wurde.

Sollten Sie nach der Verwendung der Hotfixes mit dem Support in Kontakt treten, ergänzen Sie bitte den Hinweis auf dessen Verwendung.
```

!!! info "Aktualität"

! !! info "Actualité

```
Die unten genannten Systemvoraussetzungen beziehen sich auf die aktuelle Version von i-doit, in diesem Fall **25** Zu jedem Release von i-doit werden diese Angaben angepasst. Wer die Angaben für ältere Versionen von i-doit benötigt, kann die Änderungshistorie dieser Seite verfolgen.
```

!!! attention "Einverständniserklärung"

! !! attention "Déclaration de consentement"

```
Mit dem Herunterladen eines Hotfixes erklären Sie, dass Sie die oben genannten Hinweise vollständig gelesen und verstanden haben
```

## i-doit Core

## i-doit Core

### It is not possible to retrieve the next online i-doit update via button check while updating i-doit

### Il n'est pas possible de récupérer la prochaine mise à jour en ligne d'i-doit via le bouton check lors de la mise à jour d'i-doit

When you click on the **Check for a new version** button then version 26 is not displayed.

Lorsque vous cliquez sur le bouton **Check for a new version**, la version 26 n'est pas affichée.

[i-doit_25_hotfix_ID-9844.zip :material-file-download:](../../../assets/downloads/hotfixes/25/i-doit_25_hotfix_ID-9844.zip){ .md-button .md-button--primary }

[i-doit_25_hotfix_ID-9844.zip :material-file-download :](../../../assets/downloads/hotfixes/25/i-doit_25_hotfix_ID-9844.zip){ .md-button .md-button--primary }

### Variable report on overview page causes 500 error

### Rapport variable sur la page d'aperçu provoque 500 erreurs

[i-doit_25_hotfix_ID-9476.zip :material-file-download:](../../../assets/downloads/hotfixes/25/i-doit_25_hotfix_ID-9476.zip){ .md-button .md-button--primary }

[i-doit_25_hotfix_ID-9476.zip :material-file-download :](../../../assets/downloads/hotfixes/25/i-doit_25_hotfix_ID-9476.zip){ .md-button .md-button--primary }

### Date field from custom categories not displayed in mapping of csv import

### Le champ date des catégories personnalisées n'est pas affiché dans le mappage de l'import csv

[i-doit_25_hotfix_ID-9604.zip :material-file-download:](../../../assets/downloads/hotfixes/25/i-doit_25_hotfix_ID-9604.zip){ .md-button .md-button--primary }

[i-doit_25_hotfix_ID-9604.zip :material-file-download :](../../../assets/downloads/hotfixes/25/i-doit_25_hotfix_ID-9604.zip){ .md-button .md-button--primary }

### Set database without overwriting service

### Définir la base de données sans écraser le service

Use this if you get a error like:

Utilise ceci si tu obtiens une erreur du type

```
PHP Fatal error:  Uncaught Error: Class 'isys_auth_document' not found in /var/www/html/i-doit/src/classes/modules/document/isys_module_document.class.php:2776
```

[i-doit_25_hotfix_ID-9729.zip :material-file-download:](../../../assets/downloads/hotfixes/25/i-doit_25_hotfix_ID-9729.zip){ .md-button .md-button--primary }

[i-doit_25_hotfix_ID-9729.zip :material-file-download :](../../../assets/downloads/hotfixes/25/i-doit_25_hotfix_ID-9729.zip){ .md-button .md-button--primary }

### Reindex the Search is not working

### Reindex the Search is not working

Use this if you get a error like:

Utilise ceci si tu obtiens une erreur du type

```
PHP Fatal error:  Uncaught Error: Call to a member function getCollector() on null in /var/www/html/main/src/classes/modules/cmdb/src/Search/Index/Signals.php:185
```

[i-doit_25_hotfix_ID-9609.zip :material-file-download:](../../../assets/downloads/hotfixes/25/i-doit_25_hotfix_ID-9609.zip){ .md-button .md-button--primary }

[i-doit_25_hotfix_ID-9609.zip :material-file-download :](../../../assets/downloads/hotfixes/25/i-doit_25_hotfix_ID-9609.zip){ .md-button .md-button--primary }

## API Add-on 1.14.1

## API Add-on 1.14.1

### Using API after update to i-doit pro 25 displays license error message

### Using API after update to i-doit pro 25 displays license error message

Use this when you receive an error message like:

Utilise cette option lorsque tu reçois un message d'erreur tel que :

```text
i-doit responded with an error: i-doit system error: Achtung: das "Checkmk 2" Modul ist aktuell nicht lizenziert
```

[api_1.14.1_hotfix_API-429_fa3e703.zip :material-file-download:](../../../assets/downloads/hotfixes/api/api_1.14.1_hotfix_API-429_fa3e703.zip){ .md-button .md-button--primary }

[api_1.14.1_hotfix_API-429_fa3e703.zip :material-file-download :](../../../assets/downloads/hotfixes/api/api_1.14.1_hotfix_API-429_fa3e703.zip){ .md-button .md-button--primary }

## Analyze Add-on 1.3

## Analyze Add-on 1.3

### Service assignment is not displayed in data quality

### L'affectation de service n'est pas affichée dans la qualité des données

[Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip :material-file-download:](../../../assets/downloads/hotfixes/analyze/Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip){ .md-button .md-button--primary }

[Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip :material-file-download :](../../../assets/downloads/hotfixes/analyze/Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip){ .md-button .md-button--primary }