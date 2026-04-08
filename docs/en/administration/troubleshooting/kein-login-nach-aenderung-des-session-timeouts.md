---
title: No Login After Changing the Session Timeout
description: "In the Admin Center under System settings → Session → Session timeout, you set after how many seconds an inactive user is automatically logged out..."
icon:
status:
lang: en
---
# No Login After Changing the Session Timeout

## Problem


[![kein-login-session-timeout.png](../../assets/images/de/administration/troubleshooting/kein-login-session-timeout.png)](../../assets/images/de/administration/troubleshooting/kein-login-session-timeout.png)

In the Admin Center under **System settings → Session → Session timeout**, you set after how many seconds an inactive user is automatically logged out. The default value is 600 seconds (10 minutes).

If a very low value (0 or negative) is set, no user can log in without being immediately logged out again.

## Solution

If the value is so low that you cannot change it quickly enough via the web GUI, correct it directly via SQL:

1. Execute the following SQL statement:

    ```sql
    UPDATE idoit_system.isys_settings SET isys_settings__value = '86400' WHERE isys_settings__key = 'session.time';
    ```

    Here, `idoit_system` is the name of the system database and `86400` corresponds to 24 hours. Avoid values beyond the 32-bit number range.

2. Clear the cache so that the change takes effect:

    ```shell
    sudo rm -r /var/www/html/temp/*
    ```

    Adjust `/var/www/html/` to your installation path.

3. Access i-doit via the web GUI. The cache is automatically recreated and the login works again.
