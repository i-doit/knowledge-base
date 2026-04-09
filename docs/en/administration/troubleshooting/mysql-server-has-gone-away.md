---
title: "\"MySQL-Server has gone away\""
description: "When accessing i-doit, the error message \"MySQL-Server has gone away\" appears."
icon:
status:
lang: en
---
# "MySQL-Server has gone away"

## Problem


[![mysql-server-has-gone-away.png](../../assets/images/de/administration/troubleshooting/mysql-server-has-gone-away.png)](../../assets/images/de/administration/troubleshooting/mysql-server-has-gone-away.png)

When accessing i-doit, the error message "MySQL-Server has gone away" appears. The cause is usually a value for `max_allowed_packet` that is too low.

## Solution

Increase the value of `max_allowed_packet` in the MySQL/MariaDB configuration file:

```ini
max_allowed_packet = 128M
```

Then restart the MySQL/MariaDB service. Further recommended values can be found in our [system settings](../../installation/manual-installation/system-settings.md).
