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
    The requirements shown below apply to the current version of i-doit, in this case ==30== These requirements are adjusted for each release of i-doit. If the requirements of older versions are needed, the change history of this page can be used.

!!! attention "Declaration of consent"
    By downloading a hotfix you declare that you have read and understood the above mentioned notes completely.

## i-doit core

### Writing a dialog_plus value via integer or string is not possible

[i-doit_30_hotfix_ID-10683.zip :material-file-download:](../../assets/downloads/hotfixes/30/i-doit_30_hotfix_ID-10683.zip){ .md-button .md-button--primary }

### Show icons in attribute settings (ID-10702)

[i-doit_30_hotfix_ID-10702_a970825.zip :material-file-download:](../../assets/downloads/hotfixes/30/i-doit_30_hotfix_ID-10702_a970825.zip){ .md-button .md-button--primary }

### JDisc discovery needs IP address for matching

[i-doit_30_hotfix_ID-10544.zip :material-file-download:](../../assets/downloads/hotfixes/30/i-doit_30_hotfix_ID-10544.zip){ .md-button .md-button--primary }

## API

### API is using report query from db instead of creating the query new which leads to wrong results (API-496)

[api_2.0_hotfix_API-496.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_2.0_hotfix_API-496.zip){ .md-button .md-button--primary } [api_1.16_hotfix_API-496.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.16_hotfix_API-496.zip){ .md-button .md-button--primary }


## Forms Add-on 1.2.0

### Object is not created when a attribute validation is used and no error is displayed

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

## Workflow Add-on 1.2

### Workflow Add-on User Permissions are not available

[workflow_1.2_workflow-51_b54b344.zip :material-file-download:](../../assets/downloads/hotfixes/workflow/workflow_1.2_workflow-51_b54b344.zip){ .md-button .md-button--primary }
