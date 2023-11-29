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
    The requirements shown below apply to the current version of i-doit, in this case ==27== These requirements are adjusted for each release of i-doit. If the requirements of older versions are needed, the change history of this page can be used.

!!! attention "Declaration of consent"
    By downloading a hotfix you declare that you have read and understood the above mentioned notes completely.

## i-doit core

### Hotfix release

If you downloaded i-doit 27 before the 28th of November, you should use the linked package to fix the problems listed below.<br>

=== "**Use the updater to download the package**"
    -   Set file and folder rights, if needed<br>
    -   Open the i-doit web update<br>
    -   At **2. Available Updates** you copy and paste the **[LINK](https://login.i-doit.com/downloads/idoit-27-update.zip)** in to the corresponding URL field and click **Download and extract**<br>
    -   Now do the update

=== "**Download and extract the package**"
    -   Download the new package from the [customer portal](../../system-administration/customer-portal.md)<br>
    -   Extract the package into the i-doit Folder, see [here](../../maintenance-and-operation/update.md#update-prepared-via-the-console)<br>
    -   Set file and folder rights<br>
    -   Use the i-doit web updater to update with the new package

=== "**This update Package includes the following Hotfixes**"
    **Adding a condition block for location > below > X location outputs no results**<br>
    **HTML is displayed in Report**<br>
    **Exported report displays \_\_id\_\_ column**<br>
    **Report objects adds `&nbsp;&nbsp;` after each column**<br>
    **Placeholder is not correctly replaced**<br>
    **Operators for some fields can not be selected - TypeError: equation.map is not a function**<br>
    **The encoding of umlauts are displayed in report titles**<br>
    **Status filter for multivalue categories in report manager is not working correctly for custom categories**

<!---
### Changing technical keys to only contain words causes entries to lose the values when filled with API (Number only)

[xxx.zip :material-file-download:](../../assets/downloads/hotfixes/27/xxx.zip){ .md-button .md-button--primary }
--->
### Description fields yield validation errors on 32bit systems

[i-doit_27_hotfix_ID-9928_7dca69d.zip :material-file-download:](../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9928_7dca69d.zip){ .md-button .md-button--primary }

### Icon redirects are not cached

If loading takes too much time between switching from object type to object type.

[i-doit_27_hotfix_ID-9924_8c73a0f.zip :material-file-download:](../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9924_8c73a0f.zip){ .md-button .md-button--primary }

### Refactor the automatic update-check to a separate (ajax) request

If opening the administration area of i-doit and navigating to "[Tenant-name] management" the page will take quite some time to load.

[i-doit_27_hotfix_ID-9919_63ba178.zip :material-file-download:](../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9919_63ba178.zip){ .md-button .md-button--primary }

### Document does not exist error message when opening a document

[i-doit_27_hotfix_ID-10086.zip :material-file-download:](../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-10086.zip){ .md-button .md-button--primary }
<!--
### Report viewing DBMS version always shows the first entry

[xxx.zip :material-file-download:](../../assets/downloads/hotfixes/27/xxx.zip){ .md-button .md-button--primary }
--->
## API Add-on 1.15

### cmdb.reports.read attaches "&nbsp;&nbsp" to each value

[api_1.15_hotfix_API-458_7e2ae2e.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-458_7e2ae2e.zip){ .md-button .md-button--primary }

## Analyze Add-on 1.3

### Service assignment is not displayed in data quality

[Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip :material-file-download:](../../assets/downloads/hotfixes/analyze/Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip){ .md-button .md-button--primary }

## Forms Add-on 1.2.0

### Object is not created when a attribute validation is used and no error is displayed

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

## Floorplan Add-on 1.6

### MySQL8 causes database error "incorrect DATETIME" when opening Floorplan AND Adding new Floorplan gives Error message and deletes existing objects added to floorplan

[floorplan_1.6_hotfix_FP-130_FP-131.zip :material-file-download:](../../assets/downloads/hotfixes/floorplan/floorplan_1.6_hotfix_FP-130_FP-131.zip){ .md-button .md-button--primary }
