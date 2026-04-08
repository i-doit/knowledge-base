---
title: Release Notes 1.11
description: System requirements
icon:
status:
lang: en
---
# Release Notes 1.11

System Requirements
---------------------

*   i-doit now supports [PHP from 5.6 to 7.1](../../installation/systemvoraussetzungen.md)

Notes
--------

*   Please regenerate the search index after installation using the [command-line tool Console](../../automatisierung-und-integration/cli/index.md). Example call:

    cd /var/www/html/
    sudo -u www-data php console.php search-index --user admin --password admin --tenantId 1

*   The Console command **search-index** now offers the two parameters

    **--update** to update the search index
    **--category** to update a specific category. Can be used multiple times in a single call.

    If no parameters are specified, the search index is completely regenerated. The parameters **fullindex** and **reindex** are no longer to be used.

If you have any questions, please feel free to contact our support at [https://help.i-doit.com](https://help.i-doit.com) at any time.
