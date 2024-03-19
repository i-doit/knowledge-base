<!-- TRANSLATED by md-translate -->
# Hotfixes

# Corrections à chaud

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
    Da es sich hierbei um Hotfixes handelt, empfehlen wir, diese nur einzuspielen, wenn diese für den sauberen Betrieb Ihrer Installation notwendig sind oder Sie durch den Support zur Verwendung aufgefordert werden. Bitte stellen Sie sicher, dass vor der Verwendung dieser Hotfixes ein [Backup von i-doit](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) erstellt wurde.<br>
    Sollten Sie nach der Verwendung der Hotfixes mit dem Support in Kontakt treten, ergänzen Sie bitte den Hinweis auf dessen Verwendung.

! !! attention "A noter".
    Veuillez utiliser les hotfixes uniquement avec la version mentionnée. Les versions plus récentes les contiendront déjà, il n'est donc pas nécessaire de les installer à nouveau.
    Si vous utilisez une version plus ancienne d'i-doit, il est nécessaire d'effectuer d'abord une mise à jour vers la version actuelle.<br>
    Si un hotfix est nécessaire pour effectuer la mise à jour d'une version plus ancienne, vous le trouverez dans les sous-chapitres sur les hotfixes ici dans la base de connaissances.<br>
    Comme il s'agit de hotfixes, nous vous recommandons de ne les appliquer que s'ils sont nécessaires au bon fonctionnement de votre installation ou si le support vous demande de les utiliser. Veuillez vous assurer qu'une [sauvegarde d'i-doit](../../maintenance-et-exploitation/sauvegarde-et-restauration-de-données/index.md) a été effectuée avant d'utiliser ces hotfixes.<br>
    Si vous contactez le support après avoir utilisé les hotfixes, veuillez ajouter la mention de leur utilisation.

!!! info "Aktualität"
    Die unten genannten Systemvoraussetzungen beziehen sich auf die aktuelle Version von i-doit, in diesem Fall ==28== Zu jedem Release von i-doit werden diese Angaben angepasst. Wer die Angaben für ältere Versionen von i-doit benötigt, kann die Änderungshistorie dieser Seite verfolgen.

! !! info "Actualité"
    Les configurations système requises mentionnées ci-dessous se réfèrent à la version actuelle d'i-doit, dans ce cas ==28== À chaque version d'i-doit, ces indications sont adaptées. Ceux qui ont besoin des indications pour les anciennes versions d'i-doit peuvent suivre l'historique des modifications de cette page.

!!! attention "Einverständniserklärung"
    Mit dem Herunterladen eines Hotfixes erklären Sie, dass Sie die oben genannten Hinweise vollständig gelesen und verstanden haben

! !! attention "Déclaration de consentement"
    En téléchargeant un hotfix, vous déclarez avoir lu et compris l'intégralité des remarques ci-dessus.

## i-doit core

## i-doit core

### Existing models not displayed when selecting manufacturer

### Modèles existants non affichés lors de la sélection du fabricant

[i-doit_28_hotfix_ID-9762_bcce7cb4.zip :material-file-download:](../../assets/downloads/hotfixes/28/i-doit_28_hotfix_ID-9762_bcce7cb4.zip){ .md-button .md-button--primary }

[i-doit_28_hotfix_ID-9762_bcce7cb4.zip :material-file-download :](../../assets/downloads/hotfixes/28/i-doit_28_hotfix_ID-9762_bcce7cb4.zip){ .md-button .md-button--primary }

### When opening a object overview page a HTTP 500 error appears<br> When opening the list view configuration of a object type a HTTP 500 error appears

### Quand on ouvre une page de présentation d'un objet, une erreur HTTP 500 apparaît<br> Quand on ouvre la configuration de la vue liste d'un type d'objet, une erreur HTTP 500 apparaît

??? note "Related error message"
    PHP Fatal error: Uncaught Error: Class "isys_cmdb_dao_category_s_person_nagios" not found in /var/www/html/i-doit/src/classes/modules/cmdb/dao/isys_cmdb_dao_distributor.class.php:164\nStack trace:\n#0 /var/www/html/i-doit/src/classes/modules/cmdb/ui/global/isys_cmdb_ui_category_g_overview.class.php(64): isys_cmdb_dao_distributor->__construct()\n#1 /var/www/html/i-doit/src/classes/modules/cmdb/view/isys_cmdb_view_category.class.php(894): isys_cmdb_ui_category_g_overview->process()\n#2 /var/www/html/i-doit/src/classes/modules/cmdb/view/isys_cmdb_view_category.class.php(650): isys_cmdb_view_category->category_process()\n#3 /var/www/html/i-doit/src/classes/modules/cmdb/isys_module_cmdb.class.php(942): isys_cmdb_view_category->process()\n#4 /var/www/html/i-doit/src/classes/modules/manager/isys_module_manager.class.php(1040): isys_module_cmdb->start()\n#5 /var/www/html/i-doit/src/idoit/Legacy/ModuleLoader.php(37): isys_module_manager->load()\n#6 /var/www/html/i-doit/src/classes/core/isys_application.class.php(109): idoit\Legacy\ModuleLoader->boot()\n#7 /var/www/html/i-doit/src/application.inc.php(42): isys_application::run()\n#8 /var/www/html/i-doit/src/i-doit.inc.php(137): include_once('...')\n#9 /var/www/html/i-doit/src/hypergate.inc.php(227): include_once('...')\n#10 /var/www/html/i-doit/src/ajax.inc.php(100): include_once('...')\n#11 /var/www/html/i-doit/index.php(155): require_once('...')\n#12 {main}\n thrown in /var/www/html/i-doit/src/classes/modules/cmdb/dao/isys_cmdb_dao_distributor.class.php on line 164

? ?? note "Message d'erreur connexe"
    PHP Fatal error : Uncaught Error : Class "isys_cmdb_dao_category_s_person_nagios" not found in /var/www/html/i-doit/src/classes/modules/cmdb/dao/isys_cmdb_dao_distributor.class.php:164\nStack trace:\n#0 /var/www/html/i-doit/src/classes/modules/cmdb/ui/global/isys_cmdb_ui_category_g_overview.class.php(64) : isys_cmdb_dao_distributor->__construct()\n#1 /var/www/html/i-doit/src/classes/modules/cmdb/view/isys_cmdb_view_category.class.php(894) : isys_cmdb_ui_category_g_overview->process()\n#2 /var/www/html/i-doit/src/classes/modules/cmdb/view/isys_cmdb_view_category.class.php(650) : isys_cmdb_view_category->category_process()\n#3 /var/www/html/i-doit/src/classes/modules/cmdb/isys_module_cmdb.class.php(942) : isys_cmdb_view_category->process()\n#4 /var/www/html/i-doit/src/classes/modules/manager/isys_module_manager.class.php(1040) : isys_module_cmdb->start()\n#5 /var/www/html/i-doit/src/idoit/Legacy/ModuleLoader.php(37) : isys_module_manager->load()\n#6 /var/www/html/i-doit/src/classes/core/isys_application.class.php(109) : idoit\Legacy\ModuleLoader->boot()\n#7 /var/www/html/i-doit/src/application.inc.php(42) : isys_application::run()\n#8 /var/www/html/i-doit/src/i-doit.inc.php(137) : include_once('...')\n#9 /var/www/html/i-doit/src/hypergate.inc.php(227) : include_once('...')\n#10 /var/www/html/i-doit/src/ajax.inc.php(100) : include_once('...')\n#11 /var/www/html/i-doit/index.php(155) : require_once('...')\n#12 {main}\n thrown in /var/www/html/i-doit/src/classes/modules/cmdb/dao/isys_cmdb_dao_distributor.class.php on line 164

[i-doit_28_hotfix_ID-10362.zip :material-file-download:](../../assets/downloads/hotfixes/28/i-doit_28_hotfix_ID-10362.zip){ .md-button .md-button--primary }

[i-doit_28_hotfix_ID-10362.zip :material-file-download :](../../assets/downloads/hotfixes/28/i-doit_28_hotfix_ID-10362.zip){ .md-button .md-button--primary }

### Notifications based on reports will not get send even though the report has results

### Les notifications basées sur les rapports ne seront pas envoyées même si le rapport a des résultats

[i-doit_28_hotfix_ID-10131.zip :material-file-download:](../../assets/downloads/hotfixes/28/i-doit_28_hotfix_ID-10131.zip){ .md-button .md-button--primary }

[i-doit_28_hotfix_ID-10131.zip :material-file-download :](../../assets/downloads/hotfixes/28/i-doit_28_hotfix_ID-10131.zip){ .md-button .md-button--primary }

### CSV import creates object with wrong object type

### CSV import crée un objet avec un mauvais type d'objet

[i-doit_28_hotfix_ID-10126_b932dd4.zip :material-file-download:](../../assets/downloads/hotfixes/28/i-doit_28_hotfix_ID-10126_b932dd4.zip){ .md-button .md-button--primary }

[i-doit_28_hotfix_ID-10126_b932dd4.zip :material-file-download :](../../assets/downloads/hotfixes/28/i-doit_28_hotfix_ID-10126_b932dd4.zip){ .md-button .md-button--primary }

### Document does not exist error message when opening a document

### Le document n'existe pas message d'erreur lors de l'ouverture d'un document

[i-doit_28_hotfix_ID-10086.zip :material-file-download:](../../assets/downloads/hotfixes/28/i-doit_28_hotfix_ID-10086.zip){ .md-button .md-button--primary }

[i-doit_28_hotfix_ID-10086.zip :material-file-download :](../../assets/downloads/hotfixes/28/i-doit_28_hotfix_ID-10086.zip){ .md-button .md-button--primary }

## API Add-on 1.15

## API Add-on 1.15

### cmdb.reports.read attaches "`&nbsp;&nbsp`" to each value

### cmdb.reports.read attache "`&nbsp;&nbsp`" à chaque valeur

[api_1.15_hotfix_API-458_7e2ae2e.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-458_7e2ae2e.zip){ .md-button .md-button--primary }

[api_1.15_hotfix_API-458_7e2ae2e.zip :material-file-download :](../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-458_7e2ae2e.zip){ .md-button .md-button--primary }

### When using cmdb.objects.read it should be possible to use 'categories' without an array

### Quand on utilise cmdb.objects.read il devrait être possible d'utiliser 'categories' sans un tableau

[api_1.15_hotfix_API-415.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-415.zip){ .md-button .md-button--primary }

[api_1.15_hotfix_API-415.zip :material-file-download :](../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-415.zip){ .md-button .md-button--primary }

### cmdb.objects.read gives empty/nameless object with error message as a result when reading objects with the category licenses

### cmdb.objects.read donne un objet vide/sans nom avec un message d'erreur comme résultat lors de la lecture d'objets avec la catégorie licenses

[api_1.15_hotfix_API-462.zip :material-file-download:](../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-462.zip){ .md-button .md-button--primary }

[api_1.15_hotfix_API-462.zip :material-file-download :](../../assets/downloads/hotfixes/api/api_1.15_hotfix_API-462.zip){ .md-button .md-button--primary }

## Analyze Add-on 1.3

## Analyze Add-on 1.3

### Service assignment is not displayed in data quality

### L'affectation de service n'est pas affichée dans la qualité des données

[Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip :material-file-download:](../../assets/downloads/hotfixes/analyze/Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip){ .md-button .md-button--primary }

[Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip :material-file-download :](../../assets/downloads/hotfixes/analyze/Analysis_1.3_hotfix_ANALYSE-76_aa07fc2.zip){ .md-button .md-button--primary }

## Forms Add-on 1.2.0

## Forms Add-on 1.2.0

### Object is not created when a attribute validation is used and no error is displayed

### L'objet n'est pas créé lorsqu'une validation d'attribut est utilisée et qu'aucune erreur n'est affichée

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download:](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

[forms_1.2.0_hotfix_AOF-38_69144fc.zip :material-file-download :](../../assets/downloads/hotfixes/forms/forms_1.2.0_hotfix_AOF-38_69144fc.zip){ .md-button .md-button--primary }

## Floorplan Add-on 1.6

## Floorplan Add-on 1.6

### MySQL8 causes database error "incorrect DATETIME" when opening Floorplan AND Adding new Floorplan gives Error message and deletes existing objects added to floorplan

### MySQL8 provoque une erreur de base de données "DATETIME incorrecte" lors de l'ouverture de Floorplan AND Adding new Floorplan gives Error message and deletes existing objects added to floorplan

[floorplan_1.6_hotfix_FP-130_FP-131.zip :material-file-download:](../../assets/downloads/hotfixes/floorplan/floorplan_1.6_hotfix_FP-130_FP-131.zip){ .md-button .md-button--primary }

[floorplan_1.6_hotfix_FP-130_FP-131.zip :material-file-download :](../../assets/downloads/hotfixes/floorplan/floorplan_1.6_hotfix_FP-130_FP-131.zip){ .md-button .md-button--primary }