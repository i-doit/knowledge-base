# Security and Protection

In many cases, the IT documentation encloses very sensitive data which have to be protected. In this article we examine which protective mechanisms are effective to secure an i-doit installation. Particularly, our protection objectives are confidentiality, integrity, availability, authenticity and authorization.

!!! info "Why is this article so extensive?"

    Admittedly, this article is long. The subject "Information Security of Web Applications" is a very wide field which you can discuss at large.

    Nevertheless: On account of the quantity of sensible measures we merely scratch the surface and refer to further information wherever possible. Hence, this article is intended as a collection of ideas. The mentioned single measures should always be treated with a healthy common sense and the necessary know-how.

!!! info "Why are these measurements not a part of the installation?"

    The tips we describe in this article do not belong to the normal extent of an [i-doit installation](../installation/index.md) and are no necessary [system requirements](../installation/system-requirements.md). They are additional safety measures mainly concerning the operating system and the installed packages.

Before Installing i-doit
------------------------

Before you [install](../installation/index.md) i-doit, you can already carry out some measures to strengthen the system on which i-doit is based. As an example, we use a [Debian GNU/Linux](../installation/manual-installation/debian.md) for an i-doit installation.

### User Rights: Less is More

Users who are logged on to the operating system and do not have all possible permissions from the start can also cause potentially less (accidental) damage. **Thus you should not use the registration as a super user (root)**. As an established alternative, you can apply [sudo](https://wiki.debian.org/sudo) which enables you to execute commands with the root rights temporarily.

Many services run with users or groups. Apache under Debian GNU/Linux runs with the user www-data and the group of the same name.

### Securing SSH

Beside Apache, SSH is the only service which can be reached from the outside. **SSH is used for the administration of the system via the command line.** The configuration of the SSH server is under /etc/ssh/sshd_config. The default installation already offers a good degree of security which we can raise, however, even further.

To limit common brute force attacks you should not permit the registration as super user (root):

    PermitRootLogin no

Instead of having to remember passwords, you can use the public-key procedure. For this purpose, you create a pair consisting of public and private key on the client:

    ssh-keygen -t rsa -f mykey -b 4096 -C myemail@example.org

Then you copy the public key to the server:

    ssh-copy-key -i ~/.ssh/mykey.pub idoitadm@i-doit.example.org

Afterwards, you change the procedure of passwords to public keys in the configuration of the SSH server:

    PubkeyAuthentication yes
    PasswordAuthentication no

After that, the SSH service has to be restarted:

    sudo systemctl restart ssh.service

### Update, Updates, Updates

Probably the most important tip is: **Keep your system up-to-date**. In IT terms: You cannot have information security without patch management. It is especially important to keep the i-doit installation, the corresponding operating system, the clients accessing i-doit and the web browser constantly up-to-date. Also third-party systems communicating with i-doit should be current at all times.

It is inconvenient to install updates manually. When you do not use automation and a central control system, you can leave the updates to the operating system. Debian GNU/Linux offers the application of [unattended updates](https://wiki.debian.org/UnattendedUpgrades). With this function you can get the package repositories and carry out (security) updates and even upgrades of packages. Besides, the administrators are informed via e-mail.

### Minimum Operating System

A minimum operating system is characterized by the fact that only applications and services which are really essential for its operation are installed. **The subjective is to limit the whole system to its core function (in our case: i-doit).** That means that we basically only need Apache, PHP and MariaDB/MySQL and a few additional applications and services, which are mentioned in this article. Everything else, such as a graphical user interface with desktop, a printer service or a Minecraft server, can be disregarded.

To some extent, a usual installation involves unnecessary baggage and first of all we aim to get rid of this burden. With this in mind, we should take a closer look at running processes and open ports:

    # Running services which are administered by Systemd:
    systemctl list-units

    # Show running processes and system resources clearly:
    htop

    # Currently open ports:
    sudo netstat -tulpen

Unnecessary components can be deactivated, stopped, or even deleted from the system.  
Here you can see an example:

    # Beispiel: Deactivate and stop CUPS printer service:
    sudo systemctl disable cups.service
    sudo systemctl stop cups.service

    # Delete CUPS printer service:
    sudo apt remove cups
    
    # Delete CUPS printer service including configuration:
    sudo apt purge cups

**The minimum principle does not only apply to the operating system, but also to installed services and applications.** There are many more modules for Apache and PHP than those which are actually required for a smooth operation of i-doit. Examples: mod_proxy for Apache or xdebug for PHP should only be installed and activated if they are really required.

You can deactivate the modules with these commands:

    sudo a2dismod proxy
    sudo phpdismod xdebug

Some customers install the [phpMyAdmin](https://www.phpmyadmin.net/) web application as i-doit uses MariaDB/MySQL in the background. We strongly advise against doing so, because as a result the protected database is made available to the outside. In the past years, phpMyAdmin has been a negative example with regard to security gaps and this could aggravate the problems. phpMyAdmin is a useful tool, but not on a productive system with sensitive data.

### Backup and Restore

**Backups are essential.** If you do not create any backups, you act with gross negligence. The fact that it is crucial to carry out backups on a regular basis should be clear to everyone. However, what is the best approach? For i-doit we prepared an article regarding the [saving and recovering of the IT documentation](./backup-and-recovery/index.md). In this article, we left aside how often (daily, weekly …) and with which strategies (full backup, incremental backup, differential backup, image) you should approach the subject. Organizations are responsible to decide on guidelines for themselves, because the demands for acceptable solutions regarding data loss as well as downtimes and recovery times are different for every company.

**Equally important as a backup is the recovery of data, the restores.** You may have heard the following: If you do not test the restores, you also do not have a working backup.

This raises another important question: What if the complete infrastructure is not available and the IT documentation is also affected? Our tip: Very helpful is **a second instance which runs independently of the remaining IT infrastructure**. Many customers apply i-doit on a virtual machine. You can export the virtual machine regularly and keep it in safe custody, for example, on a USB-Stick in a fire-resistant safe. So to speak this is a cold standby, in the truest sense of the word. In the event of emergency, you can launch the virtual machine on a notebook. For maximum compatibility, you can apply the [OVF file format](https://en.wikipedia.org/wiki/Open_Virtualization_Format) for virtual machines. This format is supported by current virtualizers, such as VMware and VirtualBox.

### Securing MariaDB/MySQL

The command line tool **mysql_secure_installation** takes over the task of **basic securing measures for Maria DB/MySQL**. Among other things, it sets up a password for the user root (if this has not yet been done). Afterwards, we should make ourselves familiar with the DBMS. For this purpose, we log in as root:

    mysql -uroot -p -hlocalhost

Now we try to get an overview about the current users:

    SELECT * FROM mysql.user;

We should delete unwanted entries. Unwanted users have a wildcard (%) under host or addresses which are accessible from the outside. The hosts localhost, 127.0.0.1 (IPv4) and :: 1 (IPv6) are welcome.

It is important that the service is not accessible from the outside. Often the service runs under the default port 3306. Also for MariaDB/MySQL there are dedicated **application firewalls**. Among other things, they are able to prevent damaged SQL queries. At the moment, we do not have a specific recommendation.

### Securing PHP

We do not join the usual ranting and raving relating to PHP because we can adequately "harden" the script language for our purposes. An important message is as follows: **PHP should always be up to date with the newest patch**. In this regard, you have to consider which major PHP versions (5.x, 7.x) are supported by PHP developers and which PHP packages are supported by the used distribution. Often distributions do not count on the latest major versions, but maintain older, more stable versions. These are patched with bug and security fixes. Therefore you should always download PHP updates as quickly as possible.

We already described the required settings for the operation of i-doit in the [tenant mangement](../system-administration/administration/tenant-management/index.md). **You can supplement these settings by additional ones.** For this purpose, we create a new.ini file:

    sudo editor /etc/php/7.2/mods-available/zz_security.ini

Carry out the following settings:

    ;; Restriction to directories which PHP may access:
    open_basedir = "/var/www/html/i-doit/:/tmp/"
    
    ;; Disable unnecessary methods:
    disable_functions = pcntl_alarm,pcntl_fork,pcntl_waitpid,pcntl_wait,pcntl_wifexited,pcntl_wifstopped,pcntl_wifsignaled,pcntl_wifcontinued,pcntl_wexitstatus,pcntl_wtermsig,pcntl_wstopsig,pcntl_signal,pcntl_signal_dispatch,pcntl_get_last_error,pcntl_strerror,pcntl_sigprocmask,pcntl_sigwaitinfo,pcntl_sigtimedwait,pcntl_exec,pcntl_getpriority,pcntl_setpriority,
    
    ;; Do not send used PHP version in HTTP headers:
    expose_php = Off

Afterwards, the settings have to be activated:

    sudo php5enmod zz_security
    sudo systemctl restart apache2.service

The **security extension** **[Suhosin](https://suhosin.org/)** is available for PHP. It deeply affects the implementation of PHP methods. Partly, this makes sense, but it also leads to the risk of impairing a 100% function of i-doit. At the moment, we cannot recommend specific settings.

### Transport Encryption

i-doit is a client server application, in other words, there is a server instance which communicates with a client instance via a network. Furthermore, i-doit is able to communicate via interfaces with other server instances, for example, [LDAP](../user-authentication-and-management/ldap-directory/index.md) for the registration of users.

In order to secure these communication connections, you can use the transport encryption via TLS. For example, you can equip the Apache web server with a trustworthy X.509 certificate, so that a web browser can **access the IT documentation via HTTPS**. You should keep a lot of things in mind in connection with certificates, such as the period of validity, chain of trust, used ciphers and hashes. Mozilla offers a suitable [generator for the Apache configuration](https://mozilla.github.io/server-side-tls/ssl-config-generator/) and provides a lot of [background information about the TLS on the server side](https://wiki.mozilla.org/Security/Server_Side_TLS). Other good sources are the [SSL Labs by Qualys](https://www.ssllabs.com/ssltest/) and the website [securityheaders.io](http://securityheaders.io) which also carry out suitable tests of the configuration.

Here is an example for Debian GNU/Linux 8.x to establish different types of security mechanisms. You have to adjust the corresponding paths and domain names:

    <IfModule mod_headers.c>
        ## See <https://securityheaders.io/>:
        Header always set Content-Security-Policy "default-src 'unsafe-inline' 'unsafe-eval' data: http://i-doit.example.net:80 https://i-doit.example.net:443"
        Header always set X-Frame-Options "SAMEORIGIN"
        Header always set X-XSS-Protection "1; mode=block"
        Header always set X-Content-Type-Options "nosniff"
    
        ## Avoid information about the Web server:
        Header unset Server
    </IfModule>
    
    ## Avoid information about the Web server:
    ServerSignature Off
    ServerTokens    Prod
    
    <IfModule mod_ssl.c>
            ## See <https://mozilla.github.io/server-side-tls/ssl-config-generator/>:
            SSLProtocol             all -SSLv3 -TLSv1 -TLSv1.1
            SSLCipherSuite          ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-SHA384:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA256
            SSLHonorCipherOrder     on
            SSLCompression          off
    
            SSLUseStapling  on
            SSLStaplingResponderTimeout     5
            SSLStaplingReturnResponderErrors        off
            SSLStaplingCache        shmcb:/var/run/ocsp(128000)
    
            Header always set Strict-Transport-Security "max-age=15768000; includeSubDomains"
    </IfModule>
    
    <IfModule mod_ssl.c>
            <VirtualHost *:443>
                    ServerAdmin info@i-doit.example.net
                    Servername i-doit.example.net
    
                    DocumentRoot /var/www/html/
    
                    <Directory /var/www/html/>
                            Options FollowSymLinks
                            AllowOverride All
                    </Directory>
    
                    CustomLog /var/log/apache2/access.log combined
                    ServerSignature Off
    
                    LogLevel info ssl:warn
                    ErrorLog ${APACHE_LOG_DIR}/error.log
    
                    SSLEngine on
                    
                    SSLCertificateFile      /etc/ssl/i-doit.example.net.crt
                    SSLCertificateKeyFile   /etc/ssl/i-doit.example.net.key
    
                    ## Let i-doit know about some SSL settings (see <https://httpd.apache.org/docs/2.4/mod/mod_ssl.html#ssloptions>):
                    <FilesMatch "\.(php)$">
                            SSLOptions +StdEnvVars
                    </FilesMatch>
            </VirtualHost>
    </IfModule>

Additional **securing with help of client certificates** takes this method yet a step further. Here not only the client checks the trustworthiness of the server certificate, but also the web server checks the web browser for authenticity.

### Data Encryption

**The encryption of hard disks/ SSDs safeguards your data in case of theft.** Hence, it is usual to encode data on clients and this is also required in [common standards](https://www.bsi.bund.de/EN/Home/home_node.html). Encoding is rather rare in case of servers as it is often seen as obstructive with regard to the administration. Fortunately, it is rather seldom that servers are stolen and there are other protective measures which can prevent theft. However, if the hardware i-doit runs on is not located in your own data center but provided by a service company, you might want to take steps and consider data encryption. Sometimes in smaller companies, i-doit is even installed on notebooks.

When you decide to encrypt your data, you have several possibilities: Under GNU/Linux you can use the common dm-crypt/LUKS. Many distributions offer data encoding already during the installation process. Under Windows you can user BitLocker and Veracrypt.

### Firewall and Open Ports

**Every port which is not open to the outside helps to reduce attack vectors.** As i-doit is a web application, the ports 80 and 443 are often sufficient. Apache can be limited with the Lists setting in the file /etc/apache2/ports.conf and a suitable VHost configuration. By no means should MariaDB/MySQL be accessible from the outside. To administer the system via SSH, a port has to be opened (default port: 22).

**But beware of "Security by Obscurity" as this method is an extremely poor protective measure.** With this method you use non-default ports consisting of four or five figures. Apache often runs under port 8080 and SSH under port 8022. This method presents no big challenge for an attacker, because port scanners like nmap can find these open ports without any problems.

Preventing the ICMP (for example, used by ping) is also [a bad idea](http://shouldiblockicmp.com/).

If you cannot limit a service by means of your own configuration, a firewall helps. A comfortable **application firewall** under GNU/Linux is ufw which you can activate in just a few steps and which sets up rules for iptables in the background:

    sudo apt install ufw
    sudo ufw allow 80/tcp
    sudo ufw allow 443/tcp
    sudo ufw allow 22/tcp
    sudo ufw disable
    sudo ufw enable

A **web application firewall** is especially suitable for web servers. A very popular application is [mod\_security](https://www.digitalocean.com/community/tutorials/how-to-set-up-mod_security-with-apache-on-debian-ubuntu), which is an extension for Apache.

An external **dedicated firewall** is very useful, but of course its implementation and operation are more complex. i-doit should be enabled to search for updates and to access online repositories (for example, for [reports](../evaluation/report-manager.md) and [templates](../i-doit-pro-add-ons/documents/index.md)):

| Host | Protocol | Port | Description |
| --- | --- | --- | --- |
| **[login.i-doit.com](https://login.i-doit.com)** | **HTTPS** | **443** | Download of updates for i-doit and its add-ons |
| **[reports-ng.i-doit.org](https://reports-ng.i-doit.org)** | **HTTPS** | **443** | Online repositories (for example, for [reports](../evaluation/report-manager.md)) |
| **[r.i-doit.com](https://r.i-doit.com)** | **HTTPS** | **443** | Online Repositories (for example, for [templates](../i-doit-pro-add-ons/documents/index.md)) |
| **[news.i-doit.com](https://news.i-doit.com)** | **HTTPS** | **443** | News about i-doit in the dashboard (open version) |
| **[i-doit.com](https://www.i-doit.com/en/)** | **HTTPS** | **443** | Search for updates of the pro version |
| **[i-doit.org](https://i-doit.org)** | **HTTPS** | **443** | Search for updates of the pro version |
| **[crm-gateway.i-doit.com](https://crm-gateway.i-doit.com)** | **HTTPS** | **443** | Retrieves available downloads via the license token |

If one or more interfaces to third-party applications are configured, you also have to enable access respectively:

| Interface | Protocol | Default port |
| --- | --- | --- |
| [Sending e-mails](../evaluation/notifications.md) | **SMTP** | **25/465/587** |
| [LDAP/AD](../user-authentication-and-management/ldap-directory/index.md) | **LDAP** | **389/636** |
| Livestatus | **Livestatus** | **6557** |
| NDOUtils/IDOUtils | **MySQL** | **3306** |
| [((OTRS)) Community Edition Help Desk](../automation-and-integration/service-desk/otrscommunity-help-desk.md), [Request Tracker](../automation-and-integration/service-desk/request-tracker.md), iTop | **HTTP/HTTPS** | **80/443** |
| [JDisc Discovery](../consolidate-data/jdisc-discovery.md) | **PostgreSQL** | **25321** |
| [JDisc Discovery](../consolidate-data/jdisc-discovery.md) | **HTTP** | **9000** |
| OCS Inventory NG | **MySQL** | **3306** |

### Security Frameworks

Security frameworks provide additional protection ensuring that services, applications and users may only carry out authorized operations. [SELinux](https://en.wikipedia.org/wiki/Security-Enhanced_Linux) and [AppArmor](https://en.wikipedia.org/wiki/AppArmor) are common under GNU/Linux. They are included in most distributions, but are deactivated in many cases. It is useful for i-doit to limit Apache so that the service **may only access certain directories with corresponding read and/or write permissions**.

Currently, there is a bug in selinux-policy-default under Debian GNU/Linux preventing a sensible application of SELinux. At a later time, we will explore this issue in depth.

### Automatic Defense against Attacks

**These days you can only manage to recognize and fend off attacks at an early stage in an automated way.** A small but excellent tool to help you is [fail2ban](http://www.fail2ban.org/). It continuously analyses log files of current services to recognize attacks. Therefore fail2ban is able to thwart brute force attacks on SSH very fast. You can configure the settings in such a way that the matching IP address is disabled via iptables after three successive failed logins.

fail2ban offers preconfigured jails for SSH, Apache and MariaDB/MySQL.

After the Installation of i-doit
--------------------------------

Directly after the installation we take further measures.

### Authorizations in the File System

**The file system provides many possibilities to exclude unauthorized access to code and data.** Debian GNU/Linux usually applies Ext4. For this purpose, you can use the standard tools chown, chmod and chattr:

    # Change to the installation directory of i-doit:
    cd /var/www/html/i-doit

    # Apache should have full control over files and directories:
    sudo chown www-data:www-data -R .

    # We limit this control to reading and executing:

    sudo find . -type d -name \* -exec chmod 550 {} \;

    sudo find . -type f -exec chmod 440 {} \;

    sudo chmod 550 controller tenants import updatecheck *.sh

    # We seal these rights, so that not even root may change anything:
    sudo chattr -R +i .

    # Well, i-doit should be allowed to write in some directories:
    for dir in "log/ imports/ temp/ upload/"; do sudo chattr -R -i "$dir" && sudo find "$dir" -type d -name \* -exec chmod 770 {} \;; done

Some restrictions have to be cancelled temporarily with an i-doit update:

    # Change to the installation directory of i-doit:
    cd /var/www/html/i-doit
    sudo chattr -R -i .
    sudo find . -type d -name \* -exec chmod 775 {} \;
    sudo find . -type f -exec chmod 664 {} \;
    sudo chmod 774 controller *.sh setup/*.sh

After you carried out the update, you should reactivate the restrictions.

### Secure Passwords

Those who want to just quickly set up i-doit for test purposes unfortunately often forget to consider safe passwords. This should not be the case: If you choose **secure passwords consequently from the beginning**, you do not have to bother to remedy these potential safety gaps afterwards. The specific passwords are as follows:

*   MySQL user set up by i-doit for databases
*   User for the Admin Center
*   Default user in i-doit (admin, reader, author, editor)

#### MySQL User

This user is already created during the [setup](../installation/manual-installation/setup.md). The password can be changed afterwards with a few SQL commands. We assume that the user is called idoit and that the name of the [system database](../software-development/database-model/index.md) is idoit_system. At first you log in:

    mysql -uroot -p -hlocalhost

Then you change the password:

    ALTER USER 'idoit'@'localhost' IDENTIFIED BY 'thisistotallysecure!!11';

This password has also to be communicated to i-doit. First in the system database, so that the [tenants' databases](../software-development/database-model/index.md) can be accessed:

    UPDATE idoit_system.isys_mandator SET isys_mandator__db_pass = 'thisistotallysecure!!11' WHERE isys_mandator__db_user = 'idoit';

Lastly, the password has to be stored in the central configuration, so that the system database can be accessed. This can be made either under **Config** in the Admin Center or in the file src/config.inc.php in the installation directory of i-doit.

#### User for the Admin Center

This user is also created during the setup. Afterwards, you can change the password under Config. Alternatively, you can edit the file src/config.inc.php.

#### Default User in i-doit

The users admin, reader, author and editor are already generated during the setup. The best practice is to never use these users but to create a [person object](../basics/structure-of-the-it-documentation.md) for each user instead. The person objects for admin etc. cannot be deleted, but archived. By this means, you exclude the login. If you do not want to do without these default users, you should urgently change their passwords as they are identical to the user name. You can implement the changes in the respective person object in respective person object in the **Persons → Login** category.

#### Default User under Linux

A default user is created already during the installation of the operating system. This default user also deserves a secure password which you can change retrospectively with:

    passwd

### Activation of CSRF Tokens

i-doit supplies several measures to impede attacks called [**Cross-Site-Request-Forgery** (CSRF or XSRF)](https://en.wikipedia.org/wiki/Cross-site_request_forgery). You can activate these measures under **Administration → System settings → Security → CSRF-Token** by choosing **Yes**.

### Two-factor Authentication

Nowadays, a login with only user name and user password is regarded as outdated. **Additional authentication mechanisms provide a gain in security.** When one additional mechanism is applied, the method is referred to as two-factor authentication; when more than two factors are applied this is called multi-factor authentication. A common form of implementation is the application of a (USB) token.

i-doit enables additional mechanisms through the underlying Apache web server. For example, the [**single-sign-on procedure**](../user-authentication-and-management/sso-comparison/index.md) is based on it. The procedure can be used to activate and to configure other mechanisms directly in the web server. As long as the procedure informs i-doit through relevant HTTP headers for which user the authentication was successful, the possibilities are virtually limitless.

### Monitoring and Logs

All effected measures should be monitored constantly, preferably in an automated way.

The system is in good hands in a [Network Monitoring](../automation-and-integration/network-monitoring/index.md), such as Nagios or Check\_MK. There is hardly anything which cannot be monitored by this means. For example, it is important to keep an eye on the operating system and the (virtual) hardware with running processes, memory consumption, logged on users, available updates etc. **For i-doit you should ensure that Apache, MariaDB/MySQL and the available storage space are monitored.**

Beside the network monitoring, there are other services which **monitor logs**. Before you start with the installation of a full-fledged log server (for example, [Logstash](https://www.elastic.co/products/logstash)), you could try smaller tools, like [Logwatch](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-logwatch-log-analyzer-and-reporter-on-a-vps). Logwatch monitors the log files of Apache, SSH and other services and sends a report which is easy to read per e-mail on a daily basis.

Also i-doit produces log files constantly. You can find them in the installation directory under the log/ directory. It is worth evaluating the logs (regularly), not only when you are [searching for errors](../system-administration/troubleshooting/index.md).

After [Cronjobs](../automation-and-integration/cli/index.md) have been set up, nobody seems to be interested in them anymore. However, this can be disastrous, because possibly nobody notices when something is going wrong during the automatic execution. Therefore, it is advisable to **redirect the outputs of running jobs in log files** and to send e-mails, when required.

Speaking of e-mails: When you want the system to send e-mails (like Logwatch does on a daily basis), you should test the process beforehand. A suitable SMTP server should be accessible. Perhaps it helps to use a simple service, like [sSMTP](https://wiki.debian.org/sSMTP), as a relay server.

Another possibility to check the system constantly for weak spots from the outside is the application of  a vulnerability scanner, like [OpenVAS](http://www.openvas.org/)[.](http://www.openvas.org/)

Thinking Outside the Box
------------------------

There are numerous other measures which are beyond the actual installation, but which are worth being pointed out.

### High Availability

!!! info "Truly necessary?"

    Often people ask us how to set up i-doit in the most effective way. Quickly, the focus lies on redundant systems but in most cases such a system is oversized and too complex. Before you take a sledgehammer to crack a nut and use a huge apparatus of hardware and software for your IT documentation, it is better to set up one (!) simple but sophisticated system and maintain it regularly. As far as we know, no customer required a redundant system for i-doit due to performance reasons so far, as the system requirements are rather moderate. i-doit works smoothly with the stated demands even in case of a) many data and b) many users working at the same time.

To enhance the availability of the IT documentation, it can be helpful to run the single services **redundantly** and on dedicated systems (Bare Metal, VM or Container). To operate i-doit, you require an Apache webserver which can be controlled redundantly by one or even several Load Balancers. You can store the databases on a MariaDB cluster, which is administered, for example, by [MaxScale](https://mariadb.com/products/mariadb-maxscale). The data stored by i-doit in the file system can be saved in a (distributed) storage system. And also the cache, which is administered by memcached, can be swapped out.

But that is enough material for another article.

In order to start on a small scale, you should take a closer look at the underlying hardware: RAID, ECC memory protection for the RAM and redundant power supply units (with truly different phase currents, at best protected by USP, generator etc.) are common preventive measures.

### Reliable Network

You should also consider the network infrastructure in which the i-doit system runs and is accessed.

One method can be a direct separation of the internet. A **HTTP proxy** would permit the system to download updates.

Another measure is the application of a **dedicated net for the administration**. Thus, you could take the open port for SSH out of the "line of fire". Only the core function, the Apache web server, would be accessible. We leave it up to you to decide whether you achieve this by physically separating the subnets or by VLAN or VPN.

### IPv4 versus IPv6

For many of the described measures it is irrelevant whether IP is used in version 4 or 6. IPv6 is not used widely in organizations. If IPv6 is not used at all (which would be a pity), it should be deactivated. If you use it, however, you should treat it as safely as IPv4. If services listen to the outside with opened ports, you should carry out the same settings for IPv4 as well as IPv6. If necessary, customize the firewall rules.

Routing and address assignment in IPv6 nets differ from IPv4 nets. If you do not pay attention, you could accidentally make the system available to the worldwide internet, although this was excluded with IPv4.

Additional Links
----------------

If you want to delve deeper into the matter (and who would not want to after studying this article?), you can find further information here:

*   The blog article "[My First 10 Minutes On a Server - Primer for Securing Ubuntu](https://www.codelitt.com/blog/my-first-10-minutes-on-a-server-primer-for-securing-ubuntu/)" is a good start for a (secure) administration of a Linux operating system.
*   In connection with the IT-Grundschutz standard (standard for basic IT protection) the German Federal Office for Information Security (BSI) issues [IT-Grundschutz catalogues](https://www.bsi.bund.de/EN/Home/home_node.html) which list a lot of risks affecting IT in daily life. In addition, the BSI provides suitable measures to minimize the risks. In many cases, the catalogues serve as a source for other standards and norms, such as ISO27001. Particularly the following catalogue components are a good read for the safe operation of i-doit: B 3.101 General Server, B 3.102 Servers under Unix, B 3.304 Virtualization, B 5.4 Web Servers, B 5.7 Databases, B 5.21 Web Applications, B 5.24 Web Services. You can download the latest catalogue from the [IT-Grundschutz International website](https://www.bsi.bund.de/EN/Home/home_node.html).
*   The [Open Web Application Security Project (OWASP)](https://www.owasp.org/index.php/Main_Page) is a non-profit NGO dedicated to ensure information security of web applications. They point out current attack scenarios, but also measures to minimize the risks.
