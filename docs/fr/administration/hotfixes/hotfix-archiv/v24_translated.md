<!-- TRANSLATED by md-translate -->
# Version 24

# Version 24

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
Die unten genannten Systemvoraussetzungen beziehen sich auf die aktuelle Version von i-doit, in diesem Fall **24** Zu jedem Release von i-doit werden diese Angaben angepasst. Wer die Angaben für ältere Versionen von i-doit benötigt, kann die Änderungshistorie dieser Seite verfolgen.
```

!!! attention "Einverständniserklärung"

! !! attention "Déclaration de consentement"

```
Mit dem Herunterladen eines Hotfixes erklären Sie, dass Sie die oben genannten Hinweise vollständig gelesen und verstanden haben
```

## i-doit Core

## i-doit Core

### SQL query is wrongly created when using Assigned workstation -> Parent object

### La requête SQL n'est pas créée correctement lors de l'utilisation de la station de travail assignée -> objet parent

[I-doit_24_hotfix_ID-9315.zip :material-file-download:](../../../assets/downloads/hotfixes/24/i-doit_24_hotfix_ID-9315.zip){ .md-button .md-button--primary }

[I-doit_24_hotfix_ID-9315.zip :material-file-download :](../../../assets/downloads/hotfixes/24/i-doit_24_hotfix_ID-9315.zip){ .md-button .md-button--primary }

### Variable report on overview page causes 500 error

### Rapport variable sur la page d'aperçu provoque 500 erreurs

[i-doit_24_hotfix_ID-9476.zip :material-file-download:](../../../assets/downloads/hotfixes/24/i-doit_24_hotfix_ID-9476.zip){ .md-button .md-button--primary }

[i-doit_24_hotfix_ID-9476.zip :material-file-download :](../../../assets/downloads/hotfixes/24/i-doit_24_hotfix_ID-9476.zip){ .md-button .md-button--primary }

### Path to save is deleted when editing from Backup (assigned Objects)

### Le chemin d'accès à la sauvegarde est supprimé lors de l'édition à partir de la sauvegarde (objets assignés)

[i-doit_24_hotfix_ID-9583_6c30c06.zip :material-file-download:](../../../assets/downloads/hotfixes/24/i-doit_24_hotfix_ID-9583_6c30c06.zip){ .md-button .md-button--primary }

[i-doit_24_hotfix_ID-9583_6c30c06.zip :material-file-download :](../../../assets/downloads/hotfixes/24/i-doit_24_hotfix_ID-9583_6c30c06.zip){ .md-button .md-button--primary }

### cmdb.category.purge does not work with C__CATG__LOCATION

### cmdb.category.purge ne fonctionne pas avec C__CATG__LOCATION

[i-doit_24_hotfix_ID-9589_6dcb916.zip :material-file-download:](../../../assets/downloads/hotfixes/24/i-doit_24_hotfix_ID-9589_6dcb916.zip){ .md-button .md-button--primary }

[i-doit_24_hotfix_ID-9589_6dcb916.zip :material-file-download :](../../../assets/downloads/hotfixes/24/i-doit_24_hotfix_ID-9589_6dcb916.zip){ .md-button .md-button--primary }

### Wrong versions are loaded when multiple Operating systems are assigned

### Des versions incorrectes sont chargées lorsque plusieurs systèmes d'exploitation sont attribués

[i-doit_24_hotfix_ID-9622_d9cd7ca.zip :material-file-download:](../../../assets/downloads/hotfixes/24/i-doit_24_hotfix_ID-9622_d9cd7ca.zip){ .md-button .md-button--primary }

[i-doit_24_hotfix_ID-9622_d9cd7ca.zip :material-file-download :](../../../assets/downloads/hotfixes/24/i-doit_24_hotfix_ID-9622_d9cd7ca.zip){ .md-button .md-button--primary }

### Fatal error after update from 23 to 24 with PHP 7.4

### Fatal error after update from 23 to 24 with PHP 7.4

[i-doit_24_hotfix_ID-9474.zip :material-file-download:](../../../assets/downloads/hotfixes/24/i-doit_24_hotfix_ID-9474.zip){ .md-button .md-button--primary }

[i-doit_24_hotfix_ID-9474.zip :material-file-download :](../../../assets/downloads/hotfixes/24/i-doit_24_hotfix_ID-9474.zip){ .md-button .md-button--primary }

## Analyze Add-on 1.3

## Analyze Add-on 1.3

### Service assignment is not displayed in data quality

### L'affectation de service n'est pas affichée dans la qualité des données

[Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip :material-file-download:](../../../assets/downloads/hotfixes/analyze/Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip){ .md-button .md-button--primary }

[Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip :material-file-download :](../../../assets/downloads/hotfixes/analyze/Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip){ .md-button .md-button--primary }