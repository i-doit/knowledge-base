# Cronjobs Setup

Many tasks in i-doit can be automated with help of the CLI tool [controller](../automation-and-integration/cli/index.md). We use it to maintain the IT documentation on a regular basis.

The setup of cronjobs is optional. However, we definitely recommend using this option, at best directly after the [IT documentation](../glossary.md).

!!! success "Cronjobs setup - yes or no?"

    The setup of cronjobs is optional. However, we definitely recommend using this option, at best directly after the [installation](../installation/index.md).

Simplify Access of the Controller
------------------------------------

To simplify the process to access the controller, you can use a simple bash script:

    sudo nano /usr/local/bin/idoit

The script gets the following contents which have to be adapted to your own installation:

    #!/bin/bash

    ##
    ## i-doit console
    ##

    ##
    ## Copyright (C) 2017-18 synetics GmbH, <https://i-doit.com/>
    ##
    ## This program is free software: you can redistribute it and/or modify
    ## it under the terms of the GNU Affero General Public License as published by
    ## the Free Software Foundation, either version 3 of the License, or
    ## (at your option) any later version.
    ##
    ## This program is distributed in the hope that it will be useful,
    ## but WITHOUT ANY WARRANTY; without even the implied warranty of
    ## MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    ## GNU Affero General Public License for more details.
    ##
    ## You should have received a copy of the GNU Affero General Public License
    ## along with this program. If not, see <http://www.gnu.org/licenses/>.
    ##

    set -euo pipefail

    ##
    ## Configuration
    ##

    INSTANCE_PATH="/var/www/html/"
    APACHE_USER="www-data"
    ARGS="$*"

    ##--------------------------------------------------------------------------------------------------

    function execute {
        local prefix=""
        local console="php console.php $ARGS"

        test "$(whoami)" != "$APACHE_USER" && prefix="sudo -u $APACHE_USER "

        eval "${prefix}${console}" || abort "i-doit console exited with non-zero status"
    }

    function setup {
        cd "$INSTANCE_PATH" || abort "No i-doit instance found under '${INSTANCE_PATH}'"
    }

    function finish {
        exit 0
    }

    function abort {
        echo -e "$1"  1>&2
        echo "Operation failed. Please check what is wrong and try again." 1>&2
        exit 1
    }

    function log {
        echo -e "$1"
    }

    ##--------------------------------------------------------------------------------------------------

    if [[ "${BASH_SOURCE[0]}" = "$0" ]]; then
        setup && execute && finish
    fi

Afterwards, the execution of the script is enabled:

    sudo chmod +x /usr/local/bin/idoit

!!! attention "sudo"

    The script automatically obtains the right permissions through the use of **sudo**.
    The currently logged-in user needs the permission to use the **sudo** command. Under Debian GNU/Linux 9 add the user to the **sudo** group. This requires **root** rights:

        usermod -aG sudo "$(whoami)"

    The option **Defaults targetpw**, which prevents this mechanism, is set under [SLES](../installation/manual-installation/suse/index.md). Therefore you have to comment out this option in the **/etc/sudoers** file.

From now on, every user can use it:

    idoit COMMAND [OPTIONEN]

Create Essential Jobs
---------------------

In the next step we create another script which we can call up both manually and automatically:

    sudo nano /usr/local/bin/idoit-jobs

This script gets the following contents:

    #!/bin/bash

    ##
    ## i-doit jobs
    ##

    ##
    ## Copyright (C) 2017-18 synetics GmbH, <https://i-doit.com/>
    ##
    ## This program is free software: you can redistribute it and/or modify
    ## it under the terms of the GNU Affero General Public License as published by
    ## the Free Software Foundation, either version 3 of the License, or
    ## (at your option) any later version.
    ##
    ## This program is distributed in the hope that it will be useful,
    ## but WITHOUT ANY WARRANTY; without even the implied warranty of
    ## MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    ## GNU Affero General Public License for more details.
    ##
    ## You should have received a copy of the GNU Affero General Public License
    ## along with this program. If not, see <http://www.gnu.org/licenses/>.
    ##

    set -euo pipefail
    IFS=$'\n\t'

    ##
    ## Configuration
    ##

    CONSOLE_BIN="/usr/local/bin/idoit"
    INSTANCE_PATH="/var/www/html/"
    APACHE_USER="www-data"
    IDOIT_USERNAME="admin"
    IDOIT_PASSWORD="admin"
    TENANT_ID="1"

    ##--------------------------------------------------------------------------------------------------

    function execute {
        local prefix=""
        local suffix="--user $IDOIT_USERNAME --password $IDOIT_PASSWORD --tenantId $TENANT_ID"

        test "$(whoami)" != "$APACHE_USER" && prefix="sudo -u $APACHE_USER "

        log "Archive i-doit logbook"
        eval "${prefix}${CONSOLE_BIN} logbook:archive $suffix" || \
            abort "Command 'logbook:archive' failed"
        log ""

        log "Cleanup i-doit rights"
        eval "${prefix}${CONSOLE_BIN} auth-cleanup $suffix" || \
            abort "Command 'auth-cleanup' failed"
        log ""

        log "Purge unfinished objects"
        eval "${prefix}${CONSOLE_BIN} system-objectcleanup --objectStatus 1 $suffix" || \
            abort "Command 'system-objectcleanup' failed"
        log ""

        log "Re-create search index"
        eval "${prefix}${CONSOLE_BIN} search-index $suffix" || \
            abort "Command 'search-index' failed"

        log "Send notifications"
        eval "${prefix}${CONSOLE_BIN} notifications-send $suffix" || \
            abort "Command 'notifications-send' failed"

        log "Clear caches"
        eval "${prefix}rm -rf ${INSTANCE_PATH}/temp/*" || \
            abort "Unable to clear caches"

        log "Clear updates"
        eval "${prefix}rm -rf ${INSTANCE_PATH}/updates/versions/*" || \
            abort "Unable to clear updates"
    }

    function setup {
        test -x "$CONSOLE_BIN" || \
            abort "Script '${CONSOLE_BIN}' not found"

        test -d "$INSTANCE_PATH" || \
            abort "No i-doit instance found under '${INSTANCE_PATH}'"
    }

    function log {
        echo -e "$1"
    }

    function finish {
        log "Done. Have fun :-)"
        exit 0
    }

    function abort {
        echo -e "$1"  1>&2
        echo "Operation failed. Please check what is wrong and try again." 1>&2
        exit 1
    }

    ##--------------------------------------------------------------------------------------------------

    if [[ "${BASH_SOURCE[0]}" = "$0" ]]; then
        setup && execute && finish
    fi

Afterwards, the execution of the script is enabled:

    sudo chmod +x /usr/local/bin/idoit-jobs

From now on, every user can use it:

    idoit-jobs

The following tasks are carried out when the script is executed:

*   File caches in the **temp/** directory are emptied.
*   [Update packages](../maintenance-and-operation/update.md) which are not required anymore are deleted.
*   Older [logbook](../basics/logbook.md) entries are archived.
*   The cache for [user rights](../efficient-documentation/rights-management/index.md) is build up afresh.
*   ["Unfinished" objects](../basics/life-and-documentation-cycle.md) are deleted irrevocably.
*   The [search index](../efficient-documentation/search.md) is created freshly.
*   [Notifications](../evaluation/notifications.md) are sent via e-mail.

Automation of Jobs Calls
------------------------

### When and how often?

We recommend executing the above mentioned jobs at least once per day. You should ensure that no other interactions are carried out in i-doit during the execution - neither via the web GUI nor through additional scripts or by external applications via the API. Therefore the jobs are usually carried out during the night.

### GNU/Linux

Under Linux you can run automated commands on a regular basis. You could use [cron, anacron, crontab](https://de.wikipedia.org/wiki/Cron) or [systemd.timer](https://www.freedesktop.org/software/systemd/man/systemd.timer.html).

### Windows

The scripts mentioned in this article do not work under Windows withour further ado and should be replaced by equivalent scripts. Windows tasks are suitable for the automation.

### Catch problems

In order to intercept possible errors and to report them to the responsible system administrator, you can configure the operating system in such a way that e-mails are sent correspondingly. A simple mailer is **[**sSMTP**](https://wiki.debian.org/sSMTP)**. However, the **idoit-jobs** script creates a lot of output on the shell. You can apply the **chronic** tool to achieve that only errors are reported. This tool can be installed retroactively on many operating systems, often it is contained in the [**moreutils**](https://joeyh.name/code/moreutils/) distribution package.

!!! attention chronic under SLES

    The **moreutils** package and thus the **chronic** tool are not part of [SLES](../installation/manual-installation/suse/index.md). Therefore you have to download **chronic** manually from the website:

        wget https://git.joeyh.name/index.cgi/moreutils.git/plain/chronic
        chmod +x chronic
        sudo mv chronic /usr/bin/
        wget -O - https://cpanmin.us | perl - --sudo App::cpanminus
        sudo cpanm --notest --install IPC::Run

### Example for Cron

We create a new file for Cron:

    sudo nano /etc/cron.d/i-doit

The file obtains the following contents:

    ## i-doit cron jobs

    MAILTO="sysadmin@i-doit.example.net"

    5 5 * * *   www-data    test -x /usr/local/bin/idoit-jobs && /usr/bin/chronic /usr/local/bin/idoit-jobs

Every day at 5:05 a.m. the **idoit-jobs** script is executed with the permissions of the Apacheuser **www-data**. To achieve that only errors are sent per mail, we use ****chronic****. The errors are sent via mail notifications.
