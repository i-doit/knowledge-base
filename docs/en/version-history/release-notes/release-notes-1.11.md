System requirements
-------------------

*   i-doit now supports [PHP from 5.6 to 7.1](../../installation/system-requirements.md)


Notes
-----

*   Please regenerate the search index after the installation using the [i-doit console utility](../../automation-and-integration/cli/index.md). Example call:

    cd /var/www/html/
    sudo -u www-data php console.php search-index --user admin --password admin --tenantId 1



*   The console command **search-index** now supports the two parameters

    **--update** for updating the index
    **--category** for updating search information for a specific category only (can be used multiple times in one call)

    If you do not supply any parameters, the index is completely regenerated from the scratch. The old parameter **fullindex** and **reindex** are deprecated.


For any questions do not hesitate to contact our support at [https://help.i-doit.com](https://help.i-doit.com)
