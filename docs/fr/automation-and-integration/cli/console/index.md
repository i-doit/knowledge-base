# Console

i-doit dispose d'une Interface en Ligne de Commande (CLI) avec laquelle vous pouvez effectuer diverses tâches. Par exemple, la CLI est nécessaire pour les [Cronjobs](../../../maintenance-and-operation/cronjob-setup.md) et peut être utilisée pour l'automatisation des étapes de travail.

## Premiers Pas

La CLI peut être trouvée dans le répertoire d'installation de i-doit, par exemple à **/var/www/html/**. Dans ce répertoire, la CLI doit être activée avec les mêmes autorisations que le serveur web Apache. Sous **Debian GNU/Linux**, il s'agit de l'utilisateur appelé **www-data**. Vous pouvez obtenir les autorisations avec **sudo** :

```sh
cd /var/www/html/
sudo -u www-data php console.php
```

Sous Windows, vous devez également vous rendre dans le répertoire d'installation. Comme les autorisations du serveur web ne posent pas de problème, le démarrage de **php.exe**, qui doit se trouver dans le chemin de l'utilisateur, est suffisant.

```cmd
cd C:\xampp\htdocs
php.exe console.php
```

Lorsque vous exécutez la CLI sans autres arguments, l'aide générale est affichée :

<Notes> "Commandes disponibles sans modules supplémentaires"
    ```sh
    i-doit console utility 31

    Usage:
    command [options] [arguments]

    Options:
    -h, --help            Display help for the given command. When no command is given display help for the list command
    -q, --quiet           Do not output any message
    -V, --version         Display this application version
        --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
    -n, --no-interaction  Do not ask any interactive question
    -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

    Available commands:
    addon-activate                      Activate add-on
    addon-deactivate                    Deactivate add-on
    addon-install                       Install add-on
    addon-list                          Shows list of installed addons
    addon-uninstall                     Deactivate add-on
    admin-center-password-reset         With this command you can reset the Admin-Center password
    auth-cleanup                        Cleanup all auth paths
    clear-credentials                   It removes both attributes username and password from the users "login" category
    completion                          Dump the shell completion script
    contracts-outdated                  Updates status of outdated contracts
    extend-contracts                    Automatically extend the runtime of not-cancelled contracts
    help                                Display help for a command
    import-csv                          Imports CSV formatted files (Using a predefined CSV Import filter, defined in the GUI)
    import-csvprofiles                  List all available csv profiles
    import-hinventory                   Imports files formatted in the hInventory XML syntax
    import-jdisc                        Imports data from a JDisc server (SQL server access is defined in the GUI)
    import-jdiscdiscovery               Triggers a JDisc discovery (API Access to the JDisc server is defined in the GUI)
    import-syslog                       Imports data from a Syslog server textfile to the i-doit Logbook
    import-xml                          Imports files formatted in the i-doit XML syntax
    install                             Install the i-doit application
    jdisc-create-server                 Creates a JDisc server, based on given input
    ldap-sync                           Synchronizes LDAP user accounts with i-doit user objects
    ldap-syncdn                         Synchronizes LDAP user DN attributes with i-doit user objects (Only needs to be run when migrating between different LDAP sources)
    license-add                         Add license into i-doit
    license-assign                      Assign hosting license to i-doit tenant
    license-import                      Import licenses from the i-doit server
    license-key                         Set license key for i-doit
    license-list                        List of the licenses:  ID, Product, Type (type of license), From (start of license), Expire (expiration date of license), Licensed (max amount of licensed objects), Tenants (max amount of tenants), Environment
    license-remove                      Remove license from i-doit
    list                                List commands
    logbook-archive                     Archives Logbook entries (Settings are defined in the GUI)
    migrate-uploaded-files              Migrates uploaded files in i-doit <v1.13 to v.1.14>
    notifications-list                  Lists all notification types and notifications for later usage
    notifications-send                  Sends out e-mails for notifications defined in the notification add-on
    report-export                       Executes an i-doit report and saves it to a file as CSV, TXT, PDF or XML
    search                              Triggers a search and gives the results as formatted text table
    search-index                        Deletes current search index and create it
    strip-description-html              With this command you can strip html tags in description field of all categories and objects
    sync-dynamic-groups                 Synchronize dynamic group members
    system-autoincrement                Changes the initial autoincrement value for all i-doit database tables (Affects everything, Object-IDs, category entries, etc. Use with caution!)
    system-categorycleanup              Purges optionally category entries that are in the state unfinished, archived or deleted
    system-checkforupdates              Checks for i-doit core updates
    system-convert-non-innodb-tables    Converts all tables which are not in INNODB to INNODB (Affects database encoding. Use with caution!)
    system-convert-non-utf8-tables      Changes all non-UTF8-tables to UTF8 (Affects database encoding. Use with caution!)
    system-location-fix                 Performs the location fix from the systemtools GUI
    system-objectcleanup                Purges optionally objects that are in the state unfinished, archived or deleted
    system-objectrelations              Regenerates all object relation names
    system-refresh-table-configuration  Refreshes all available list configurations (object types and categories)
    system-set-settings                 Set system settings
    tenant-create                       Create tenant in i-doit
    tenant-disable                      Disables the tenant with specific id
    tenant-enable                       Enables the tenant with specific id
    tenant-list                         Shows list of available tenants
    tenant-remove                       Remove the i-doit Tenant
    uninstall                           Uninstall the i-doit application
    update                              Update the i-doit application
    ```

## Processus d'authentification 

Pour accéder à i-doit via l'interface en ligne de commande, une authentification est requise pour la plupart des commandes. À cette fin, vous devez fournir un nom d'utilisateur, le mot de passe approprié et l'ID du [locataire](../../../system-administration/multi-tenant.md) souhaité. Avec une installation par défaut, dans la plupart des cas, ce dernier est **"1"**.

```shell
cd /var/www/html/
sudo -u www-data php console.php [COMMANDE] --user admin --password admin --tenantId 1 [AUTRES OPTIONS]
```

!!! success "L'utilisateur "controller""
    Nous vous recommandons de créer un utilisateur dédié dans i-doit pour l'application de l'interface en ligne de commande. Si cet utilisateur doit être configuré en tant qu'[utilisateur local](../../../user-authentication-and-management/builtin-authentication/creating-a-local-user.md), créez-le en tant qu'objet de type **Personnes** avec les informations d'identification souhaitées dans la catégorie **Personnes → Connexion**. Cet utilisateur devrait recevoir des droits d'administrateur. L'attribution des droits peut être effectuée en l'assignant au groupe prédéfini **Groupe de personnes Admin**.

## Aide 

```shell
cd /var/www/html/
sudo -u www-data php console.php search --help
```

De plus, certaines commandes fournissent des exemples via **--usage**.

[Accéder aux commandes](options-and-parameters-cli.md){ .md-button .md-button--primary }
```
