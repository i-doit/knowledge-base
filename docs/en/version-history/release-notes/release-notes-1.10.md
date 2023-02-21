System requirements
-------------------

*   i-doit now supports PHP from 5.6 to 7.0
    
*   MySQL parameter **innodb_stats_on_metadata = 0** should be set to increase performance
    

Additional information
----------------------

*   The Cabling Category now uses the Cabling Add-on. If you use it, you have to install the Cabling Add-on
    

Migrations
----------

*   The controller is now using the symfony console as a framework. It is still backward compatible, but deprecated. Please check our Knowledgebase on how to change your cronjobs to using the new Controller console.