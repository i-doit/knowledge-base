# Hotfixes

## Über

Hotfixes beseitigen einen bestimmten Fehler und werden in der Regel als ZIP-Datei zur Verfügung gestellt. Die ZIP-Datei wird im Installationsverzeichnis von i-doit entpackt. Die Abfrage, ob Dateien beim Entpacken überschrieben werden sollen, kann bestätigt werden (Taste **Y** für "yes" oder **A** für "all"). Hier ein Beispiel:

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
    Da es sich hierbei um Hotfixes handelt, empfehlen wir, diese nur einzuspielen, wenn diese für den sauberen Betrieb Ihrer Installation notwendig sind oder Sie durch den Support zur Verwendung aufgefordert werden. Bitte stellen Sie sicher, dass vor der Verwendung dieser Hotfixes ein [Backup von i-doit](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) erstellt wurde.<br>
    Sollten Sie nach der Verwendung der Hotfixes mit dem Support in Kontakt treten, ergänzen Sie bitte den Hinweis auf dessen Verwendung.

!!! info "Aktualität"
    Die unten genannten Systemvoraussetzungen beziehen sich auf die aktuelle Version von i-doit, in diesem Fall ==27== Zu jedem Release von i-doit werden diese Angaben angepasst. Wer die Angaben für ältere Versionen von i-doit benötigt, kann die Änderungshistorie dieser Seite verfolgen.

!!! attention "Einverständniserklärung"
    Mit dem Herunterladen eines Hotfixes erklären Sie, dass Sie die oben genannten Hinweise vollständig gelesen und verstanden haben

## i-doit core

!!! bug "Hotfix release"
    If you downloaded i-doit 27 prior to November 28th, we've identified some issues that require attention.<br>
    We have prepared a linked package that contains necessary fixes.

    Please refer to one of the guides below for assistance

    !!! example "**Use the updater to download the package**"
        -   Set file and folder rights, either via `idoit-rights.sh` or [manual](../../installation/manuelle-installation/setup.md)
        -   Open the i-doit web update
        -   At **2. Available Updates** you copy and paste the **[LINK](https://login.i-doit.com/downloads/idoit-27-update.zip)** in to the corresponding URL field and click **Download and extract**
        -   Now do the update

    !!! example "**or download and extract the package**"
        -   Download the new package from the [customer portal](../../administration/kundenportal.md)
        -   Extract the package into the i-doit Folder, see [here](../../wartung-und-betrieb/update-einspielen.md#update-über-die-konsole-vorbereiten)
        -   Set file and folder rights, either via `idoit-rights.sh` or [manual](../../installation/manuelle-installation/setup.md)
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

### JDisc mapping error with MAC address

Hotfix for the JDisc import error `Duplicate entry 'object-56-ABCDEF123-aa:aa:aa:aa:aa:aa,aa:aa:aa:aa:aa:aa,aa:aa:a...' for key 'isys_jdisc_mapping__type_device_serial_mac'.`

[i-doit_27_hotfix_ID-10098.zip :material-file-download:](../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-10098.zip){ .md-button .md-button--primary }

### Description fields yield validation errors on 32bit systems

[i-doit_27_hotfix_ID-9928_7dca69d.zip :material-file-download:](../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9928_7dca69d.zip){ .md-button .md-button--primary }

### Changing technical keys to only contain words causes entries to lose the values when filled with API (Number only)

[i-doit_27_hotfix_ID-9938.zip :material-file-download:](../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9938.zip){ .md-button .md-button--primary }

### Icon redirects are not cached

If loading takes too much time between switching from object type to object type.

[i-doit_27_hotfix_ID-9924_8c73a0f.zip :material-file-download:](../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9924_8c73a0f.zip){ .md-button .md-button--primary }

### Refactor the automatic update-check to a separate (ajax) request

If opening the administration area of i-doit and navigating to "[Tenant-name] management" the page will take quite some time to load.

[i-doit_27_hotfix_ID-9919_63ba178.zip :material-file-download:](../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-9919_63ba178.zip){ .md-button .md-button--primary }

### Document does not exist error message when opening a document

[i-doit_27_hotfix_ID-10086.zip :material-file-download:](../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-10086.zip){ .md-button .md-button--primary }

### Report viewing DBMS version always shows the first entry

[i-doit_27_hotfix_ID-10083_801ae6b.zip :material-file-download:](../../assets/downloads/hotfixes/27/i-doit_27_hotfix_ID-10083_801ae6b.zip){ .md-button .md-button--primary }

## API Add-on 1.15

### cmdb.reports.read attaches "&nbsp;&nbsp" to each value

[api_1.15_hotfix_API-458_7e2ae2e.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-458_7e2ae2e.zip){ .md-button .md-button--primary }

### When using cmdb.objects.read it should be possible to use 'categories' without an array

[api_1.15_hotfix_API-415.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-415.zip){ .md-button .md-button--primary }

## Analyze Add-on 1.3

### Service assignment is not displayed in data quality

[Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip :material-file-download:](../../assets/downloads/hotfixes/analyze/Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip){ .md-button .md-button--primary }

## Forms Add-on 1.2.0

### Object is not created when a attribute validation is used and no error is displayed

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

## Floorplan Add-on 1.6

### MySQL8 causes database error "incorrect DATETIME" when opening Floorplan AND Adding new Floorplan gives Error message and deletes existing objects added to floorplan

[floorplan_1.6_hotfix_FP-130_FP-131.zip :material-file-download:](../../assets/downloads/hotfixes/floorplan/floorplan_1.6_hotfix_FP-130_FP-131.zip){ .md-button .md-button--primary }
