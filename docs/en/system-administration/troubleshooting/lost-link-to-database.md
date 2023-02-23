Problem
-------

The error message **`Lost link to database`** appears in the login form after entering the credentials. The login fails.

Solution
--------

i-doit is not capable of accessing the desired tenant database. This error can occur quickly once the i-doit installation has been moved to another system and the MySQL/MariaDB users do not exist on the new system.

i-doit saves all configured tenants in the system database (`idoit_system` for [default installations](/display/en/Setup)) in the `isys_mandator` table. Each tenant receives a database separate from the others (`idoit_data` for the first tenant for default installations). Dedicated credentials can be assigned to access this database. These are located in the columns `isys_mandator__db_user` and `isys_mandator__db_pass`. These should be checked for validity. It also does not hurt to check the other details.

This can be tested via the command line:

[?](#)

`mysql -hlocalhost -uidoit -p`

Here the credentials for the desired tenant database need to be entered. After executing the command `mysql` will ask for the password. If the login fails, the credentials are not valid. If the login is successful an additional check should be performed to see whether the user has reading permissions for the tenant database:

[?](#)

`mysql> USE idoit_data;`

`mysql> SHOW TABLES;`

Again: If error messages are displayed, then something is wrong.

A closer look at the user table of MySQL/MariaDB will clarify/solve the issue. For this you should be logged in as database administrator (typically `root`):

[?](#)

`mysql -hlocalhost -uroot -p`

`mysql> USE mysql;`

`mysql> SELECT * FROM user;`

The user can be added with this command if he is missing:

[?](#)

`mysql> GRANT ALL PRIVILEGES ON idoit_data TO` `'idoit'``@``'localhost'` `IDENTIFIED BY` `'idoit'``;`

In this example special attention should be given to replacing the name of the tenant database, the user and its password by the right/safe values.

If you are reluctant to use the command line, administration tools for MySQL/MariaDB as for example [phpMyAdmin](https://en.wikipedia.org/wiki/PhpMyAdmin) can be used as an alternative.