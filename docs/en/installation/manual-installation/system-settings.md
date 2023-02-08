**Contents**

*   1[PHP](#SystemSettings-PHP)
*   2[Caching](#SystemSettings-Caching)
    *   2.1[Suhosin](#SystemSettings-Suhosin)

For the configuration of the operating system we recommend a series of settings with regard to PHP, Apache Webserver and MySQL/MariaDB. These are based on the [system requirements](/display/en/System+Requirements) for i-doit. The settings vary depending on the operating system therefore please refer to the corresponding articles for further information:

*   [Debian GNU/Linux](/pages/viewpage.action?pageId=36864037)
*   [Red Hat Enterprise Linux (RHEL)](/pages/viewpage.action?pageId=37355543)
*   [Suse Linux Enterprise Server (SLES)](/pages/viewpage.action?pageId=37355545)
*   [Ubuntu Linux](/display/en/Ubuntu+Linux)
*   [Microsoft Windows Server](/display/en/Microsoft+Windows+Server)

PHP
---

At this point we would like to address a few features of PHP which supplement the above mentioned articles.

Caching
-------

i-doit possesses its own caching strategies to answer requests as fast as possible. So-called Opcode Caches for PHP and key-value storages can be additionally used to achieve further improvements of performance. Here the following order is taken into account:

1.  memcached
2.  APC(u)
3.  Filesystem

We recommend the use of _either_ **memcached** _or_ **APC/APCu**. We lean towards the usage of **memcached**. Instructions for the installation (except for Windows) can be found in the above mentioned articles.

The Apache webserver should be reset after being installed, so that the changes to PHP can become active:

[?](#)

`sudo` `systemctl restart apache2.service`

### Suhosin

The security extension [Suhosin](https://suhosin.org/) is available for PHP. Although it brings many useful additions for the safe operation of web applications under PHP, there are also many pitfalls in the default settings. Because of this, a flawless functionality of _i-doit_ cannot be guaranteed when using Suhosin.