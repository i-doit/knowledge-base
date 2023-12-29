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
    The requirements shown below apply to the current version of i-doit, in this case ==28== These requirements are adjusted for each release of i-doit. If the requirements of older versions are needed, the change history of this page can be used.

!!! attention "Declaration of consent"
    By downloading a hotfix you declare that you have read and understood the above mentioned notes completely.

## i-doit core

### When opening a object overview page a HTTP 500 error appears

??? note "Related error message"
    PHP Fatal error: Uncaught Error: Class "isys_cmdb_dao_category_s_person_nagios" not found in /var/www/html/i-doit/src/classes/modules/cmdb/dao/isys_cmdb_dao_distributor.class.php:164\nStack trace:\n#0 /var/www/html/i-doit/src/classes/modules/cmdb/ui/global/isys_cmdb_ui_category_g_overview.class.php(64): isys_cmdb_dao_distributor->__construct()\n#1 /var/www/html/i-doit/src/classes/modules/cmdb/view/isys_cmdb_view_category.class.php(894): isys_cmdb_ui_category_g_overview->process()\n#2 /var/www/html/i-doit/src/classes/modules/cmdb/view/isys_cmdb_view_category.class.php(650): isys_cmdb_view_category->category_process()\n#3 /var/www/html/i-doit/src/classes/modules/cmdb/isys_module_cmdb.class.php(942): isys_cmdb_view_category->process()\n#4 /var/www/html/i-doit/src/classes/modules/manager/isys_module_manager.class.php(1040): isys_module_cmdb->start()\n#5 /var/www/html/i-doit/src/idoit/Legacy/ModuleLoader.php(37): isys_module_manager->load()\n#6 /var/www/html/i-doit/src/classes/core/isys_application.class.php(109): idoit\\Legacy\\ModuleLoader->boot()\n#7 /var/www/html/i-doit/src/application.inc.php(42): isys_application::run()\n#8 /var/www/html/i-doit/src/i-doit.inc.php(137): include_once('...')\n#9 /var/www/html/i-doit/src/hypergate.inc.php(227): include_once('...')\n#10 /var/www/html/i-doit/src/ajax.inc.php(100): include_once('...')\n#11 /var/www/html/i-doit/index.php(155): require_once('...')\n#12 {main}\n thrown in /var/www/html/i-doit/src/classes/modules/cmdb/dao/isys_cmdb_dao_distributor.class.php on line 164

[i-doit_28_hotfix_ID-10362.zip :material-file-download:](../../assets/downloads/hotfixes/28/i-doit_28_hotfix_ID-10362.zip){ .md-button .md-button--primary }

### Notifications based on reports will not get send even though the report has results

[i-doit_28_hotfix_ID-10131.zip :material-file-download:](../../assets/downloads/hotfixes/28/i-doit_28_hotfix_ID-10131.zip){ .md-button .md-button--primary }

### CSV import creates object with wrong object type

[i-doit_28_hotfix_ID-10126_b932dd4.zip :material-file-download:](../../assets/downloads/hotfixes/28/i-doit_28_hotfix_ID-10126_b932dd4.zip){ .md-button .md-button--primary }

## API Add-on 1.15

### cmdb.reports.read attaches "&nbsp;&nbsp" to each value

[api_1.15_hotfix_API-458_7e2ae2e.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-458_7e2ae2e.zip){ .md-button .md-button--primary }

### When using cmdb.objects.read it should be possible to use 'categories' without an array

[api_1.15_hotfix_API-415.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-415.zip){ .md-button .md-button--primary }

### cmdb.objects.read gives empty/nameless object with error message as a result when reading objects with the category licenses

[api_1.15_hotfix_API-462.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-462.zip){ .md-button .md-button--primary }

## Analyze Add-on 1.3

### Service assignment is not displayed in data quality

[Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip :material-file-download:](../../assets/downloads/hotfixes/analyze/Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip){ .md-button .md-button--primary }

## Forms Add-on 1.2.0

### Object is not created when a attribute validation is used and no error is displayed

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

## Floorplan Add-on 1.6

### MySQL8 causes database error "incorrect DATETIME" when opening Floorplan AND Adding new Floorplan gives Error message and deletes existing objects added to floorplan

[floorplan_1.6_hotfix_FP-130_FP-131.zip :material-file-download:](../../assets/downloads/hotfixes/floorplan/floorplan_1.6_hotfix_FP-130_FP-131.zip){ .md-button .md-button--primary }
