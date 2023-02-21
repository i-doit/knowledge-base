# No login after changing the session timeout

Problem
-------

Under **Administration → System settings → Session → Session timeout** it is specified after how many seconds an inactive user is automatically logged out from i-doit. The default value is 600 seconds (10 minutes). If a very low value, a value of 0 or even a negative number is set, no user will be able to log into the system without being logged out again shortly afterwards. This makes working with i-doit seem impossible.

Solution
--------

If the value is set so low that it is not possible to change the value fast enough in the web GUI, we have to go another way. The remedy is to use an SQL statement to set a reasonable value for the session timeout:

    UPDATE idoit_system.isys_settings SET isys_settings__value = '86400' WHERE isys_settings__key = 'session.time';

Here idoit\_system is the name of the system database and 86400 corresponds to one week. We strongly advise against values beyond the 32bit number range, e.g. 999999999999999999.

These and many other settings are stored in a cache for performance reasons. For the changes to become active, the temp/ directory in the i-doit installation directory must be emptied:

    sudo rm -r /var/www/html/i-doit/temp/*

Here, ***/var/www/html/i-doit/*** corresponds to the path for installing i-doit.

When i-doit is called via the web GUI, the cache is automatically recreated so that the manual change becomes active. Login and further work on the IT documentation should now work again.