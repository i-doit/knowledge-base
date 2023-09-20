# Hotfixes

## About

Hotfixes fix a certain error and are usually provided as a ZIP file. The ZIP file is unpacked in the i-doit installation directory. Confirm the question whether you want to overwrite files during unpacking (**Y** key for "yes" or **A** key for "all"). Here you can find an example:

```shell
sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/i-doit/
cd /var/www/html/i-doit/
sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
```

!!! attention "Please note"
    Please use hotfixes exclusively with the specified version. Hotfixes will be included in newer versions so that a renewed installation is not necessary.
    Should you use an older i-doit version it is essential to make an update to the latest version first.<br>
    If a hotfix is required to update an older version, it can be found in the hotfix subchapters here in the Knowledge Base.<br>
    As these are hotfixes we recommend installing them only when the adjustments are necessary for a flawless operation of your installation or you are requested by the support team to use them. Please ensure that you made a [backup of i-doit](../../maintenance-and-operation/backup-and-recovery/index.md) before you use any hotfix.<br>
    Please inform us about the use of hotfixes should you contact our support team afterwards.

!!! info "Current version"
    The requirements shown below apply to the current version of i-doit, in this case ==26== These requirements are adjusted for each release of i-doit. If the requirements of older versions are needed, the change history of this page can be used.

!!! attention "Declaration of consent"
    By downloading a hotfix you declare that you have read and understood the above mentioned notes completely.

## i-doit core

### Disconnecting relation in custom category causes sql error

When you get the following error when disconnecting a relation to a custom category:

??? note "SQL Error:"
    ```log
    Database error : Query error: 'UPDATE isys_catg_relation_list SET isys_catg_relation_list__isys_obj__id__master = 222, isys_catg_relation_list__isys_obj__id__slave = NULL, isys_catg_relation_list__isys_obj__id__itservice = NULL, isys_catg_relation_list__isys_relation_type__id = 1, isys_catg_relation_list__status = 2, isys_catg_relation_list__description = '' WHERE isys_catg_relation_list__id = 799441;': Cannot add or update a child row: a foreign key constraint fails (`idoit_data`.`isys_catg_relation_list`, CONSTRAINT `isys_catg_relation_list_ibfk_2` FOREIGN KEY (`isys_catg_relation_list__isys_obj__id__slave`) REFERENCES `isys_obj` (`isys_obj__id`) ON DELET)"
    ```

[i-doit_26_hotfix_ID-9477.zip :material-file-download:](../../assets/downloads/hotfixes/26/i-doit_26_hotfix_ID-9477.zip){ .md-button .md-button--primary }

### It is not possible to retrieve the next online i-doit update via button check while updating i-doit

When you click on the **Check for a new version** button then version 27 is not displayed, when available.

[i-doit_26_hotfix_ID-9844.zip :material-file-download:](../../assets/downloads/hotfixes/26/i-doit_26_hotfix_ID-9844.zip){ .md-button .md-button--primary }

## API Add-on 1.14.1

### Operating system > Version cannot be referenced via title, if a second operating system has the same version title

This effects you when you get this API error message:
`i-doit system error: The specified version could not be assigned to this application"`

[api_1.14.1_hotfix_API-400_b1aec14.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.14.1_hotfix_API-400_b1aec14.zip){ .md-button .md-button--primary }

### Using API after update to i-doit pro 25 displays license error message

Use this when you receive an error message like:

```text
i-doit responded with an error: i-doit system error: Achtung: das "Checkmk 2" Modul ist aktuell nicht lizenziert
```

[api_1.14.1_hotfix_API-429_fa3e703.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.14.1_hotfix_API-429_fa3e703.zip){ .md-button .md-button--primary }

## Analyze Add-on 1.3

### Service assignment is not displayed in data quality

[Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip :material-file-download:](../../assets/downloads/hotfixes/analyze/Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip){ .md-button .md-button--primary }

## Forms Add-on 1.2.0

### Object is not created when a attribute validation is used and no error is displayed

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }
