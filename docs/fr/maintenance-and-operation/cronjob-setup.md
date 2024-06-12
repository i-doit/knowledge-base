# Configuration des tâches planifiées

De nombreuses tâches dans i-doit peuvent être automatisées à l'aide de l'outil CLI [controller](../automation-and-integration/cli/index.md). Nous l'utilisons pour maintenir la documentation IT de manière régulière.

La configuration des tâches planifiées est facultative. Cependant, nous recommandons vivement d'utiliser cette option, de préférence juste après l'[installation](../installation/index.md).

!!! success "Configuration des tâches planifiées - oui ou non ?"

    La configuration des tâches planifiées est facultative. Cependant, nous recommandons vivement d'utiliser cette option, de préférence juste après l'[installation](../installation/index.md).

Simplifier l'accès au Controller
------------------------------------

Pour simplifier le processus d'accès au controller, vous pouvez utiliser un simple script bash :

    sudo nano /usr/local/bin/idoit

Le script contient le contenu suivant qui doit être adapté à votre propre installation :

    #!/bin/bash
    
    ##
    ## Console i-doit
    ##
    
    ##
    ## Copyright (C) 2017-18 synetics GmbH, <https://i-doit.com/>
    ##
    ## Ce programme est un logiciel libre : vous pouvez le redistribuer et/ou le modifier
    ## selon les termes de la Licence publique générale Affero de la Free Software Foundation telle que publiée par
    ## la Free Software Foundation, soit la version 3 de la Licence, soit
    ## (à votre choix) toute version ultérieure.
    ##
    ## Ce programme est distribué dans l'espoir qu'il sera utile,
    ## mais SANS AUCUNE GARANTIE ; sans même la garantie implicite de
    ## QUALITÉ MARCHANDE ou D'ADÉQUATION À UN USAGE PARTICULIER. Consultez la
    ## Licence publique générale Affero pour plus de détails.
    ##
    ## Vous devriez avoir reçu une copie de la Licence publique générale Affero
    ## en même temps que ce programme. Si ce n'est pas le cas, consultez <http://www.gnu.org/licenses/>.
    ##

```bash
set -euo pipefail

##
## Configuration
##

INSTANCE_PATH="/var/www/html/i-doit"
APACHE_USER="www-data"
ARGS="$*"

##--------------------------------------------------------------------------------------------------

function execute {
    local prefix=""
    local console="php console.php $ARGS"

    test "$(whoami)" != "$APACHE_USER" && prefix="sudo -u $APACHE_USER "

    eval "${prefix}${console}" || abort "La console i-doit s'est terminée avec un statut différent de zéro"
}

function setup {
    cd "$INSTANCE_PATH" || abort "Aucune instance i-doit trouvée sous '${INSTANCE_PATH}'"
}

function finish {
    exit 0
}

function abort {
    echo -e "$1"  1>&2
    echo "L'opération a échoué. Veuillez vérifier ce qui ne va pas et réessayer." 1>&2
    exit 1
}

function log {
    echo -e "$1"
}

##--------------------------------------------------------------------------------------------------
```

```bash
if [[ "${BASH_SOURCE[0]}" = "$0" ]]; then
    setup && execute && finish
fi
```

Ensuite, l'exécution du script est activée:

```bash
sudo chmod +x /usr/local/bin/idoit
```

!!! attention "sudo"

Le script obtient automatiquement les bonnes autorisations grâce à l'utilisation de **sudo**.
L'utilisateur actuellement connecté doit avoir l'autorisation d'utiliser la commande **sudo**. Sous Debian GNU/Linux 9, ajoutez l'utilisateur au groupe **sudo**. Cela nécessite des droits **root**:

```bash
usermod -aG sudo "$(whoami)"
```

L'option **Defaults targetpw**, qui empêche ce mécanisme, est définie sous [SLES](../installation/manual-installation/suse-linux-enterprise-server.md). Par conséquent, vous devez commenter cette option dans le fichier **/etc/sudoers**.

Désormais, chaque utilisateur peut l'utiliser:

```bash
idoit COMMANDE [OPTIONS]
```

Créer des tâches essentielles
-----------------------------

À l'étape suivante, nous créons un autre script que nous pouvons appeler à la fois manuellement et automatiquement:

```bash
sudo nano /usr/local/bin/idoit-jobs
```

Ce script contient le contenu suivant:

```bash
#!/bin/bash

##
## tâches i-doit
##

##
## Droits d'auteur (C) 2017-18 synetics GmbH, <https://i-doit.com/>
##
## Ce programme est un logiciel libre : vous pouvez le redistribuer et/ou le modifier
## selon les termes de la Licence publique générale Affero GNU telle que publiée par
## la Free Software Foundation, soit la version 3 de la Licence, soit
## (à votre choix) toute version ultérieure.
##
## Ce programme est distribué dans l'espoir qu'il sera utile,
## mais SANS AUCUNE GARANTIE ; sans même la garantie implicite de
## QUALITÉ MARCHANDE ou D'ADÉQUATION À UN USAGE PARTICULIER. Voir la
## Licence publique générale Affero GNU pour plus de détails.
##
## Vous devriez avoir reçu une copie de la Licence publique générale Affero GNU
## avec ce programme. Si ce n'est pas le cas, consultez <http://www.gnu.org/licenses/>.
##

set -euo pipefail
IFS=$'\n\t'

##
## Configuration
##

CONSOLE_BIN="/usr/local/bin/idoit"
INSTANCE_PATH="/var/www/html/i-doit"
APACHE_USER="www-data"
IDOIT_USERNAME="admin"
IDOIT_PASSWORD="admin"
TENANT_ID="1"
```

##--------------------------------------------------------------------------------------------------    
    function execute {
        local prefix=""
        local suffix="--user $IDOIT_USERNAME --password $IDOIT_PASSWORD --tenantId $TENANT_ID"
    
        test "$(whoami)" != "$APACHE_USER" && prefix="sudo -u $APACHE_USER "
    
        log "Archiver le journal i-doit"
        eval "${prefix}${CONSOLE_BIN} logbook-archive $suffix" || \
            abort "La commande 'logbook-archive' a échoué"
        log ""
    
        log "Nettoyer les droits i-doit"
        eval "${prefix}${CONSOLE_BIN} auth-cleanup $suffix" || \
            abort "La commande 'auth-cleanup' a échoué"
        log ""
    
        log "Purger les objets inachevés"
        eval "${prefix}${CONSOLE_BIN} system-objectcleanup --objectStatus 1 $suffix" || \
            abort "La commande 'system-objectcleanup' a échoué"
        log ""
    
        log "Recréer l'index de recherche"
        eval "${prefix}${CONSOLE_BIN} search-index $suffix" || \
            abort "La commande 'search-index' a échoué"
```  

```bash
log "Envoyer des notifications"
eval "${prefix}${CONSOLE_BIN} notifications-send $suffix" || \
    abort "La commande 'notifications-send' a échoué"

log "Effacer les caches"
eval "${prefix}rm -rf ${INSTANCE_PATH}/temp/*" || \
    abort "Impossible de vider les caches"

log "Effacer les mises à jour"
eval "${prefix}rm -rf ${INSTANCE_PATH}/updates/versions/*" || \
    abort "Impossible de vider les mises à jour"
}

function setup {
    test -x "$CONSOLE_BIN" || \
        abort "Le script '${CONSOLE_BIN}' est introuvable"

    test -d "$INSTANCE_PATH" || \
        abort "Aucune instance i-doit trouvée sous '${INSTANCE_PATH}'"
}

function log {
    echo -e "$1"
}

function finish {
    log "Terminé. Amusez-vous :-)"
    exit 0
}

function abort {
    echo -e "$1"  1>&2
    echo "L'opération a échoué. Veuillez vérifier ce qui ne va pas et réessayer." 1>&2
    exit 1
}

##--------------------------------------------------------------------------------------------------
```

```bash
if [[ "${BASH_SOURCE[0]}" = "$0" ]]; then
    setup && execute && finish
fi
```

Ensuite, l'exécution du script est activée :

```bash
sudo chmod +x /usr/local/bin/idoit-jobs
```

Désormais, chaque utilisateur peut l'utiliser :

```bash
idoit-jobs
```

Les tâches suivantes sont effectuées lors de l'exécution du script :

* Les caches de fichiers dans le répertoire **temp/** sont vidés.
* Les [paquets mis à jour](../maintenance-and-operation/update.md) qui ne sont plus nécessaires sont supprimés.
* Les anciennes entrées du [journal](../basics/logbook.md) sont archivées.
* Le cache des [droits d'utilisateur](../efficient-documentation/rights-management/index.md) est reconstruit à neuf.
* Les objets "non terminés" sont supprimés de manière irrévocable.
* L'index de [recherche](../efficient-documentation/search.md) est créé à nouveau.
* Des [notifications](../evaluation/notifications.md) sont envoyées par e-mail.

Automatisation des Appels de Tâches
-----------------------------------

### Quand et à quelle fréquence ?

Nous recommandons d'exécuter les tâches mentionnées ci-dessus au moins une fois par jour. Vous devriez vous assurer qu'aucune autre interaction n'est effectuée dans i-doit pendant l'exécution - ni via l'interface web ni à travers des scripts supplémentaires ou par des applications externes via l'API. Par conséquent, les tâches sont généralement effectuées pendant la nuit.



### GNU/Linux  

Sous Linux, vous pouvez exécuter des commandes automatisées régulièrement. Vous pourriez utiliser [cron, anacron, crontab](https://de.wikipedia.org/wiki/Cron) ou [systemd.timer](https://www.freedesktop.org/software/systemd/man/systemd.timer.html).
### Windows

Les scripts mentionnés dans cet article ne fonctionnent pas sous Windows sans autre préparation et devraient être remplacés par des scripts équivalents. Les tâches Windows sont adaptées à l'automatisation.
### Attraper les problèmes

Afin d'intercepter d'éventuelles erreurs et de les signaler à l'administrateur système responsable, vous pouvez configurer le système d'exploitation de manière à ce que des e-mails soient envoyés en conséquence. Un simple expéditeur de courrier est **[**sSMTP**](https://wiki.debian.org/sSMTP)**. Cependant, le script **idoit-jobs** crée beaucoup de sortie dans le terminal. Vous pouvez appliquer l'outil **chronic** pour que seules les erreurs soient signalées. Cet outil peut être installé rétroactivement sur de nombreux systèmes d'exploitation, souvent il est contenu dans le paquet de distribution [**moreutils**](https://joeyh.name/code/moreutils/).
!!! Attention sous SLES

    Le paquet **moreutils** et donc l'outil **chronic** ne font pas partie de [SLES](../installation/manual-installation/suse-linux-enterprise-server.md). Par conséquent, vous devez télécharger **chronic** manuellement depuis le site web :

        wget https://git.joeyh.name/index.cgi/moreutils.git/plain/chronic
        chmod +x chronic
        sudo mv chronic /usr/bin/
        wget -O - https://cpanmin.us | perl - --sudo App::cpanminus
        sudo cpanm --notest --install IPC::Run

### Exemple pour Cron

Nous créons un nouveau fichier pour Cron :

    sudo nano /etc/cron.d/i-doit

Le fichier contient les éléments suivants :

    ## tâches cron i-doit

    MAILTO="sysadmin@i-doit.example.net"

    5 5 * * *   www-data    test -x /usr/local/bin/idoit-jobs && /usr/bin/chronic /usr/local/bin/idoit-jobs

Chaque jour à 5h05, le script **idoit-jobs** est exécuté avec les permissions de l'utilisateur Apache **www-data**. Pour ne recevoir que les erreurs par e-mail, nous utilisons ****chronic****. Les erreurs sont envoyées via des notifications par e-mail.
