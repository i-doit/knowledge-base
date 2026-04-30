---
title: Release Notes 1.10
description: System requirements
icon:
status:
lang: en
---
# Release Notes 1.10

System Requirements
---------------------

*   i-doit now supports PHP from 5.6 to 7.0

*   The MySQL parameter **innodb_stats_on_metadata = 0** should be set to increase performance when saving categories

Additional Information
---------------------

*   The cabling category now uses the Cabling add-on. If you document cabling, please install the free Cabling add-on.

Migrations
-----------

*   The controller now uses the Symfony Framework as backend. The controller command is currently still backwards compatible. Please refer to our Knowledge Base for instructions on how to switch your cron jobs to the new Controller Console.
