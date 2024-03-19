<!-- TRANSLATED by md-translate -->
# Version 27

# Version 27

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
    Bitte nutzen Sie Hotfixes ausschließlich mit der genannten Version. In neueren Versionen werden diese bereits enthalten sein, sodass eine erneute Installation nicht notwendig ist.
    Sollten Sie eine ältere Version von i-doit nutzen, ist es notwendig, zuerst auf die aktuelle Version zu aktualisieren.<br>
    Falls ein Hotfix zur Ausführung des Updates einer älteren Version notwendig ist, ist dieser in den Unterkapiteln zu den Hotfixes hier in der Knowledge Base zu finden.<br>
    Da es sich hierbei um Hotfixes handelt, empfehlen wir, diese nur einzuspielen, wenn diese für den sauberen Betrieb Ihrer Installation notwendig sind oder Sie durch den Support zur Verwendung aufgefordert werden. Bitte stellen Sie sicher, dass vor der Verwendung dieser Hotfixes ein [Backup von i-doit](../../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) erstellt wurde.<br>
    Sollten Sie nach der Verwendung der Hotfixes mit dem Support in Kontakt treten, ergänzen Sie bitte den Hinweis auf dessen Verwendung.

! !! attention "A noter".
    Veuillez utiliser les hotfixes uniquement avec la version mentionnée. Les versions plus récentes les contiendront déjà, il n'est donc pas nécessaire de les installer à nouveau.
    Si vous utilisez une version plus ancienne d'i-doit, il est nécessaire d'effectuer d'abord une mise à jour vers la version actuelle.<br>
    Si un hotfix est nécessaire pour effectuer la mise à jour d'une ancienne version, vous le trouverez dans les sous-chapitres sur les hotfixes ici dans la base de connaissances.<br>
    Comme il s'agit de hotfixes, nous vous recommandons de ne les appliquer que s'ils sont nécessaires au bon fonctionnement de votre installation ou si le support vous demande de les utiliser. Veuillez vous assurer qu'une [sauvegarde d'i-doit](../../../maintenance-et-exploitation/sauvegarde-et-restauration-de-données/index.md) a été effectuée avant d'utiliser ces hotfixes.<br>
    Si vous contactez le support après avoir utilisé les hotfixes, veuillez ajouter la mention de leur utilisation.

!!! info "Aktualität"
    Die unten genannten Systemvoraussetzungen beziehen sich auf die aktuelle Version von i-doit, in diesem Fall ==27== Zu jedem Release von i-doit werden diese Angaben angepasst. Wer die Angaben für ältere Versionen von i-doit benötigt, kann die Änderungshistorie dieser Seite verfolgen.

! !! info "Actualité"
    Les configurations système requises mentionnées ci-dessous se réfèrent à la version actuelle d'i-doit, dans ce cas ==27== À chaque version d'i-doit, ces indications sont adaptées. Ceux qui ont besoin des indications pour les anciennes versions d'i-doit peuvent suivre l'historique des modifications de cette page.

!!! attention "Einverständniserklärung"
    Mit dem Herunterladen eines Hotfixes erklären Sie, dass Sie die oben genannten Hinweise vollständig gelesen und verstanden haben

! !! attention "Déclaration de consentement"
    En téléchargeant un hotfix, vous déclarez avoir lu et compris l'intégralité des remarques ci-dessus.

## i-doit core

## i-doit core

!!! bug "Hotfix release"
    If you downloaded i-doit 27 prior to November 28th, we've identified some issues that require attention.<br>
    We have prepared a linked package that contains necessary fixes.

! !! bug "Hotfix release" (sortie du correctif)
    Si vous avez téléchargé i-doit 27 avant le 28 novembre, nous avons identifié quelques problèmes qui nécessitent une attention particulière.
    Nous avons préparé un package lié qui contient les corrections nécessaires.

```
Please refer to one of the guides below for assistance

!!! example "**Use the updater to download the package**"
    -   Set file and folder rights, either via `idoit-rights.sh` or [manual](../../../installation/manuelle-installation/setup.md)
    -   Open the i-doit web update
    -   At **2. Available Updates** you copy and paste the **[LINK](https://login.i-doit.com/downloads/idoit-27-update.zip)** in to the corresponding URL field and click **Download and extract**
    -   Now do the update

!!! example "**or download and extract the package**"
    -   Download the new package from the [customer portal](../../../administration/kundenportal.md)
    -   Extract the package into the i-doit Folder, see [here](../../../wartung-und-betrieb/update-einspielen.md#update-über-die-konsole-vorbereiten)
    -   Set file and folder rights, either via `idoit-rights.sh` or [manual](../../../installation/manuelle-installation/setup.md)
    -   Use the i-doit web updater to update with the new package

!!! note "**This update Package includes the following Hotfixes**"
    **Adding a condition block for location > below > X location outputs no results**<br>
    **HTML is displayed in Report**<br>
    **Exported report displays \_\_id\_\_ column**<br>
    **Report objects adds `&nbsp;&nbsp;` after each column**<br>
    **Placeholder is not correctly replaced**<br>
    **Operators for some fields can not be selected - TypeError: equation.map is not a function**<br>
    **The encoding of umlauts are displayed in report titles**<br>
    **Status filter for multivalue categories in report manager is not working correctly for custom categories**
```

### Assigned clusters are removed after saving the object type configuration

### Les clusters assignés sont supprimés après la sauvegarde de la configuration du type d'objet

Use this if you need to assign the specific category **Assigned Clusters**.

Utilisez ceci si vous avez besoin d'attribuer la catégorie spécifique **Assigned Clusters**.

[i-doit_27_hotfix_ID-9977_eb1035c.zip :material-file-download:](../../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9977_eb1035c.zip){ .md-button .md-button--primary }

[i-doit_27_hotfix_ID-9977_eb1035c.zip :material-file-download :](../../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9977_eb1035c.zip){ .md-button .md-button--primary }

### JDisc mapping error with MAC address

### JDisc mapping error with MAC address

Hotfix for the JDisc import error `Duplicate entry 'object-56-ABCDEF123-aa:aa:aa:aa:aa:aa,aa:aa:aa:aa:aa:aa,aa:aa:a...' for key 'isys_jdisc_mapping__type_device_serial_mac'.`

Correction à chaud pour l'erreur d'importation JDisc `Duplication de l'entrée 'object-56-ABCDEF123-aa:aa:aa:aa:aa,aa:aa:aa:aa,aa:aa...' pour la clé 'isys_jdisc_mapping__type_device_serial_mac'.`

[i-doit_27_hotfix_ID-10098.zip :material-file-download:](../../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-10098.zip){ .md-button .md-button--primary }

[i-doit_27_hotfix_ID-10098.zip :material-file-download :](../../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-10098.zip){ .md-button .md-button--primary }

### Description fields yield validation errors on 32bit systems

### Description fields yield validation errors on 32bit systems

[i-doit_27_hotfix_ID-9928_7dca69d.zip :material-file-download:](../../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9928_7dca69d.zip){ .md-button .md-button--primary }

[i-doit_27_hotfix_ID-9928_7dca69d.zip :material-file-download :](../../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9928_7dca69d.zip){ .md-button .md-button--primary }

### Changing technical keys to only contain words causes entries to lose the values when filled with API (Number only)

### Changer les clés techniques pour ne contenir que des mots provoque la perte des valeurs lors du remplissage avec l'API (numéro seulement)

[i-doit_27_hotfix_ID-9938.zip :material-file-download:](../../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9938.zip){ .md-button .md-button--primary }

[i-doit_27_hotfix_ID-9938.zip :material-file-download :](../../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9938.zip){ .md-button .md-button--primary }

### Icon redirects are not cached

### Les redirections d'icônes ne sont pas mises en cache

If loading takes too much time between switching from object type to object type.

Si le chargement prend trop de temps entre le passage du type d'objet au type d'objet.

[i-doit_27_hotfix_ID-9924_8c73a0f.zip :material-file-download:](../../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9924_8c73a0f.zip){ .md-button .md-button--primary }

[i-doit_27_hotfix_ID-9924_8c73a0f.zip :material-file-download :](../../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9924_8c73a0f.zip){ .md-button .md-button--primary }

### Refactor the automatic update-check to a separate (ajax) request

### Refactor the automatic update-check to a separate (ajax) request

If opening the administration area of i-doit and navigating to "[Tenant-name] management" the page will take quite some time to load.

Si vous ouvrez l'espace administration d'i-doit et que vous naviguez vers "[nom du locataire] gestion", la page mettra un certain temps à se charger.

[i-doit_27_hotfix_ID-9919_63ba178.zip :material-file-download:](../../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9919_63ba178.zip){ .md-button .md-button--primary }

[i-doit_27_hotfix_ID-9919_63ba178.zip :material-file-download :](../../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9919_63ba178.zip){ .md-button .md-button--primary }

### Document does not exist error message when opening a document

### Le document n'existe pas message d'erreur lors de l'ouverture d'un document

[i-doit_27_hotfix_ID-10086.zip :material-file-download:](../../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-10086.zip){ .md-button .md-button--primary }

[i-doit_27_hotfix_ID-10086.zip :material-file-download :](../../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-10086.zip){ .md-button .md-button--primary }

### Report viewing DBMS version always shows the first entry

### Report viewing DBMS version always shows the first entry

[i-doit_27_hotfix_ID-10083_801ae6b.zip :material-file-download:](../../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-10083_801ae6b.zip){ .md-button .md-button--primary }

[i-doit_27_hotfix_ID-10083_801ae6b.zip :material-file-download :](../../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-10083_801ae6b.zip){ .md-button .md-button--primary }

## API Add-on 1.15

## API Add-on 1.15

### cmdb.reports.read attaches "&nbsp;&nbsp" to each value

### cmdb.reports.read attache "&nbsp;&nbsp" à chaque valeur

[api_1.15_hotfix_API-458_7e2ae2e.zip :material-file-download:](../../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-458_7e2ae2e.zip){ .md-button .md-button--primary }

[api_1.15_hotfix_API-458_7e2ae2e.zip :material-file-download :](../../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-458_7e2ae2e.zip){ .md-button .md-button--primary }

### When using cmdb.objects.read it should be possible to use 'categories' without an array

### Quand on utilise cmdb.objects.read il devrait être possible d'utiliser 'categories' sans un tableau

[api_1.15_hotfix_API-415.zip :material-file-download:](../../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-415.zip){ .md-button .md-button--primary }

[api_1.15_hotfix_API-415.zip :material-file-download :](../../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-415.zip){ .md-button .md-button--primary }

### cmdb.objects.read gives empty/nameless object with error message as a result when reading objects with the category licenses

### cmdb.objects.read donne un objet vide/sans nom avec un message d'erreur comme résultat lors de la lecture d'objets avec la catégorie licenses

[api_1.15_hotfix_API-462.zip :material-file-download:](../../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-462.zip){ .md-button .md-button--primary }

[api_1.15_hotfix_API-462.zip :material-file-download :](../../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-462.zip){ .md-button .md-button--primary }

## Analyze Add-on 1.3

## Analyze Add-on 1.3

### Service assignment is not displayed in data quality

### L'affectation de service n'est pas affichée dans la qualité des données

[Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip :material-file-download:](../../../assets/downloads/hotfixes/analyze/Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip){ .md-button .md-button--primary }

[Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip :material-file-download :](../../../assets/downloads/hotfixes/analyze/Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip){ .md-button .md-button--primary }

## Forms Add-on 1.2.0

## Forms Add-on 1.2.0

### Object is not created when a attribute validation is used and no error is displayed

### L'objet n'est pas créé lorsqu'une validation d'attribut est utilisée et qu'aucune erreur n'est affichée

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download :](../../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

## Floorplan Add-on 1.6

## Floorplan Add-on 1.6

### MySQL8 causes database error "incorrect DATETIME" when opening Floorplan AND Adding new Floorplan gives Error message and deletes existing objects added to floorplan

### MySQL8 provoque une erreur de base de données "DATETIME incorrecte" lors de l'ouverture de Floorplan AND Adding new Floorplan gives Error message and deletes existing objects added to floorplan

[floorplan_1.6_hotfix_FP-130_FP-131.zip :material-file-download:](../../../assets/downloads/hotfixes/floorplan/floorplan_1.6_hotfix_FP-130_FP-131.zip){ .md-button .md-button--primary }

[floorplan_1.6_hotfix_FP-130_FP-131.zip :material-file-download :](../../../assets/downloads/hotfixes/floorplan/floorplan_1.6_hotfix_FP-130_FP-131.zip){ .md-button .md-button--primary }