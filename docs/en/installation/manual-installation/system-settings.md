---
title: System Settings
description: "For operating system configuration, we recommend a set of settings related to PHP, Apache Web Server, and MySQL/MariaDB."
icon: material/wrench-cog
status:
lang: en
---


# System Settings

For operating system configuration, we recommend a set of settings related to PHP, Apache Web Server, and MySQL/MariaDB. These are based on the [system requirements](../system-requirements.md) for i-doit. The settings differ depending on the operating system, which is why we refer to the respective articles:

*   [Debian GNU/Linux](debian/index.md)
*   [Red Hat Enterprise Linux (RHEL)](red-hat-enterprise-linux/index.md)
*   [Rocky Linux](rocky-linux/index.md)
*   [SUSE Linux Enterprise Server (SLES)](suse/index.md)
*   [Ubuntu Linux](ubuntu/index.md)
*   [Microsoft Windows Server](microsoft-windows-server/index.md)

## PHP

Here we would like to address a few PHP specifics that supplement the articles mentioned above.

## Caching

i-doit has its own caching strategies to respond to requests as quickly as possible. Additionally, so-called opcode caches for PHP and key-value stores can be used to achieve further performance improvements. The following order is considered:

1. memcached
2. APC(u)
3. filesystem

The use of _either_ **memcached** _or_ **APC/APCu** is recommended. We tend to use **memcached**. The installation is described in the articles mentioned above (except for Windows).

The Apache web server should be restarted after installation so that the PHP changes take effect:

```shell
sudo systemctl restart apache2.service
```

### Suhosin

The security extension [Suhosin](https://suhosin.org/) exists for PHP. Although it provides many useful enhancements for the secure operation of web applications under PHP, the default settings contain many pitfalls. Therefore, correct functionality of i-doit cannot be guaranteed when using Suhosin.
