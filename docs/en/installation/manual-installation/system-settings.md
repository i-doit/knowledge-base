# System settings

For the configuration of the operating system we recommend a series of settings with regard to PHP, Apache Webserver and MySQL/MariaDB. These are based on the [system requirements](../system-requirements.md) for i-doit. The settings vary depending on the operating system therefore please refer to the corresponding articles for further information:

-   [Debian GNU/Linux](debian12.md)
-   [Red Hat Enterprise Linux (RHEL)](red-hat-enterprise-linux/index.md)
-   [Suse Linux Enterprise Server (SLES)](suse-linux-enterprise-server.md)
-   [Ubuntu Linux](ubuntu-linux/index.md)
-   [Microsoft Windows Server](microsoft-windows-server/index.md)

## PHP

At this point we would like to address a few features of PHP which supplement the above mentioned articles.

## Caching

i-doit possesses its own caching strategies to answer requests as fast as possible. So-called Opcode Caches for PHP and key-value storages can be additionally used to achieve further improvements of performance. Here the following order is taken into account:

1. memcached
2. APC(u)
3. Filesystem

We recommend the use of _either_ ==memcached== _or_ ==APC/APCu==. We lean towards the usage of ==memcached==. Instructions for the installation (except for Windows) can be found in the above mentioned articles.

The Apache webserver should be reset after being installed, so that the changes to PHP can become active:

```shell
sudo systemctl restart apache2.service
```

### Suhosin

The security extension [Suhosin](https://suhosin.org/) is available for PHP. Although it brings many useful additions for the safe operation of web applications under PHP, there are also many pitfalls in the default settings. Because of this, a flawless functionality of _i-doit_ cannot be guaranteed when using Suhosin.
