# Update of i-doit open 1.4.8 to 1.8

This article explains particularities which have to be considered with an update of the open version status 1.4.8 to 1.8.

Preparation
-----------

The step from version 1.4.8 to version 1.8 entails many changes. Substantial changes of the Web GUI and the database model were carried out. The API has considerably more functions and is offered as a separate module free of charge.

Download
--------

[You can download the update package here](../assets/downloads/idoit-open-1.8-update.zip)

There are the following prequesites:

*   The installation used so far is version 1.4.8. Should you use a previous version you have to update the installation to version status 1.4.8.
*   First, an update to version 1.8 is carried out. You cannot update to newer versions before you executed the update to version 1.8.

Execution
---------

After download, you copy and unzip the update package in the i-doit installation directory. Here is an example for a Debian-based operating system:

    sudo -u www-data cp idoit-open-1.8-update.zip /var/www/html/i-doit/
    cd /var/www/html/i-doit/
    sudo -u www-data unzip idoit-open-1.8-update.zip

You have to adapt the path accordingly. Copy and unzip the package with the user of the Apache Webserver so that the update is carried out with this user's rights without problems.

In principle, the subsequent update procedure does not differ from a normal [update via the Web GUI](../maintenance-and-operation/update.md). As version 1.8 is a major update you must not skip previous major updates. The updates are loaded one after the other. When the first update has been carried out, you are prompted to load the next update. This procedure repeats itself until the update for version 1.8 is loaded. This results in the following update path:

1.  Update from version 1.4.8 to version 1.5
2.  Update from version 1.5 to version 1.6
3.  Update from version 1.6 to version 1.7
4.  Update from version 1.7 to version 1.8

When all steps have been finished successfully, the update to version 1.8 is completed. Now the Web GUI displays the version number 1.8.

Follow-up Work
--------------

It is worth following further steps after the update:

*   [Backup configuration](../maintenance-and-operation/backup-and-recovery/index.md)
*   [Cronjobs setup](../automation-and-integration/cli/index.md)

Troubleshooting
---------------

With each step a log file is created in the log/ directory. If a step cannot be completed due to an error, this will be recorded in the log. Then you should refrain from executing further update steps to avoid subsequent errors. You can always get help from the [open-Forum](https://forum.i-doit.org/).

Further tips regarding [troubleshooting](../system-administration/troubleshooting/index.md) can be found in the Knowledge Base.