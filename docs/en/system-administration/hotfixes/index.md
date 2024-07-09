# Hotfixes

!!! success "Hotfixes for version **32**"

A hotfix fixes a specific error and is usually made available as a ZIP file. The ZIP file is extracted in the **installation directory** of i-doit. The prompt asking whether files should be overwritten when unpacking must be confirmed.

If a hotfix is required to update an older version, this can be found in the [Hotfix archive](hotfix-archive/index.md).

As these are hotfixes, we recommend that you only install them if they are necessary for the proper operation of your installation or if you are requested to do so by support. Please ensure that a [backup of i-doit](../../maintenance-and-operation/backup-and-recovery/index.md) has been created before using these hotfixes.

If you contact support after using the hotfixes, please add the reference to their use.

!!! warning "**Declaration of consent**"
    By downloading a hotfix you declare that you have read and understood the above mentioned notes completely.

## Application with GNU/Linux

```sh
sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/i-doit/
cd /var/www/html/i-doit/
sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
```

## Application with Windows

[![Extract](../../assets/images/en/system-administration/hotfixes/example-windows-zip.png)](../../assets/images/en/system-administration/hotfixes/example-windows-zip.png)

Path for the **i-doit Windows installer**:

```txt
C:\ProgramData\i-doit\apache-2.4\htdocs
```

Path for the **i-doit Discovery installer**:

```txt
C:\ProgramData\i-doit-discovery\apache-2.4\htdocs
```

## Forms Add-on 1.2.0

### Object is not created when a attribute validation is used and no error is displayed

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

### Using Forms to create an object bypasses validation "unique" check (AOF-54)

??? info "The only exception to unique checks are IPv4 addresses"

[forms_1.2_hotfix_AOF-54-43.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2_hotfix_AOF-54-43.zip){ .md-button .md-button--primary }
