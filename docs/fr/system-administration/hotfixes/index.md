# Correctifs

!!! success "Correctifs pour la version **31**"

Un correctif corrige une erreur spécifique et est généralement disponible sous forme de fichier ZIP. Le fichier ZIP est extrait dans le **répertoire d'installation** de i-doit. La demande demandant si les fichiers doivent être écrasés lors du déballage doit être confirmée.

Si un correctif est nécessaire pour mettre à jour une ancienne version, vous pouvez le trouver dans les [Archives des correctifs](hotfix-archive/index.md).

Comme il s'agit de correctifs, nous vous recommandons de les installer uniquement s'ils sont nécessaires au bon fonctionnement de votre installation ou si vous êtes invité à le faire par le support. Veuillez vous assurer qu'une [sauvegarde de i-doit](../../maintenance-and-operation/backup-and-recovery/index.md) a été créée avant d'utiliser ces correctifs.

Si vous contactez le support après avoir utilisé les correctifs, veuillez ajouter la référence à leur utilisation.

!!! warning "**Déclaration de consentement**"
    En téléchargeant un correctif, vous déclarez avoir lu et compris complètement les notes mentionnées ci-dessus.

## Application avec GNU/Linux

```sh
sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/i-doit/
cd /var/www/html/i-doit/
sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
```

## Application avec Windows

[![Extraire](../../assets/images/en/system-administration/hotfixes/example-windows-zip.png)](../../assets/images/en/system-administration/hotfixes/example-windows-zip.png)

Chemin pour l'**installateur Windows de i-doit**:

```txt
C:\ProgramData\i-doit\apache-2.4\htdocs
```

Chemin pour l'**installateur de découverte de i-doit**:

```txt
C:\ProgramData\i-doit-discovery\apache-2.4\htdocs
```

## Noyau i-doit

### Erreur de migration lors de la mise à jour (ID-10808)

Est utilisé pour effectuer la mise à jour de 29 ou 30 à 31. Décompressez le fichier et refaites la mise à jour.
Ne téléchargez pas à nouveau le package de mise à jour, cela écraserait le correctif.

??? info "Message d'erreur trouvé dans les journaux du serveur Web"
    ```log
    Erreur fatale: TypeError non capturée: getDefaultConfiguration(): L'argument #1 ($className) doit être de type chaîne, null donné, appelé dans
    ```

[i-doit_31_hotfix_ID-10808.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10808.zip){ .md-button .md-button--primary }

### Erreur HTTP 500 lors de la création d'un document ou d'une révision (ID-10831)

```markdown
??? info "Message d'erreur trouvé dans les journaux du serveur Web"
    ```log
    Got error 'PHP message: PHP Fatal error:  Uncaught TypeError: isys_cmdb_dao_category_property::getConstantFromRange(): Argument #1 ($constant) must be of type string, null given
    ```

[i-doit_31_hotfix_ID-10831.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10831.zip){ .md-button .md-button--primary }

### Le compteur saute un nombre lors de la duplication d'objets (ID-10763)

[i-doit_31_hotfix_ID-10763.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10763.zip){ .md-button .md-button--primary }

### L'édition de la liste des ports ne sélectionne pas le VLAN par défaut (ID-10762)

[i-doit_31_hotfix_ID-10762.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10762.zip){ .md-button .md-button--primary }

### L'exportation d'une liste d'objets via csv n'a pas de résultats (ID-10798)

[i-doit_31_hotfix_ID-10798.zip :material-file-download:](../../assets/downloads/hotfixes/31/i-doit_31_hotfix_ID-10798.zip){ .md-button .md-button--primary }

## API

### L'API utilise une requête de rapport de la base de données au lieu de créer une nouvelle requête ce qui conduit à des résultats incorrects (API-496)

[api_2.0.1_hotfix_API-496.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_2.0.1_hotfix_API-496.zip){ .md-button .md-button--primary }

## Add-on Forms 1.2.0

### L'objet n'est pas créé lorsqu'une validation d'attribut est utilisée et aucune erreur n'est affichée

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

## Add-on Workflow 1.2

### Les autorisations utilisateur de l'Add-on Workflow ne sont pas disponibles

[workflow_1.2_workflow-51_b54b344.zip :material-file-download:](../../assets/downloads/hotfixes/workflow/workflow_1.2_workflow-51_b54b344.zip){ .md-button .md-button--primary }
```
