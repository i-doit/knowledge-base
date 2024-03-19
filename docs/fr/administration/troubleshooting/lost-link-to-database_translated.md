<!-- TRANSLATED by md-translate -->
# "Lost link to database"

# "Lien perdu vers la base de données"

## Problem

## problème

In der Login-Maske erscheint nach Angabe der Credentials die Fehlermeldung **Lost link to database**. Der Login schlägt fehl.

Dans le masque de connexion, le message d'erreur **Lost link to database** apparaît après avoir indiqué les credentials. Le login échoue.

## Lösung

## solution

i-doit ist nicht in der Lage, auf die gewünschte [Mandanten-Datenbank](../../software-entwicklung/datenbank-modell/index.md) zuzugreifen. Schnell kann dieser Fehler passieren, wenn die Installation von i-doit auf ein anderes System umzieht und die User für MySQL/MariaDB auf dem neuen System nicht existieren.

i-doit n'est pas en mesure d'accéder à la [base de données client](../../software-entwicklung/datenbank-modell/index.md) souhaitée. Cette erreur peut rapidement se produire lorsque l'installation d'i-doit est déplacée vers un autre système et que les utilisateurs pour MySQL/MariaDB n'existent pas sur le nouveau système.

i-doit speichert in der [System-Datenbank](../../software-entwicklung/datenbank-modell/index.md) (idoit_system bei [Standardinstallationen](../../installation/manuelle-installation/setup.md)) in der Tabelle isys_mandator alle konfigurierten Mandanten. Jeder Mandant erhält eine von den übrigen separate Datenbank (idoit_data für den ersten Mandanten bei Standardinstallationen). Um auf diese Datenbank zugreifen zu können, kann man dedizierte Credentials vergeben. Diese befinden sich in den Spalten isys_mandator__db_user und isys_mandator__db_pass. Diese sollten auf Gültigkeit überprüft werden. Auch schadet es nicht, die übrigen Angaben zu überprüfen.

i-doit enregistre dans la [base de données système](../../software-entwicklung/datenbank-modell/index.md) (idoit_system pour les [installations standard](../../installation/manuelle-installation/setup.md)) dans la table isys_mandator tous les mandants configurés. Chaque mandant reçoit une base de données séparée des autres (idoit_data pour le premier mandant dans le cas des installations standard). Pour pouvoir accéder à cette base de données, il est possible d'attribuer des credentials dédiés. Ceux-ci se trouvent dans les colonnes isys_mandator__db_user et isys_mandator__db_pass. Il convient de vérifier leur validité. Il n'est pas non plus inutile de vérifier les autres données.

Testen kann man dies auf der Kommandozeile:

On peut le tester sur la ligne de commande :

```sql
mysql -hlocalhost -uidoit -p
```

Hier sind die Crentials für die gewünschte Mandanten-Datenbank anzugeben. Nach dem Ausführen des Befehls fragt mysql nach dem Passwort. Schlägt die Anmeldung fehl, sind die Credentials nicht gültig. Ist die Anmeldung erfolgreich, sollte zusätzlich geprüft werden, ob der User Leserechte auf die Mandanten-Datenbank hat:

Il faut indiquer ici les Crentials pour la base de données mandant souhaitée. Après l'exécution de la commande, mysql demande le mot de passe. Si la connexion échoue, les credentials ne sont pas valables. Si la connexion est réussie, il faut en outre vérifier si l'utilisateur a des droits de lecture sur la base de données du mandant :

```sql
mysql> USE idoit_data;
    mysql> SHOW TABLES;
```

Auch hier gilt wieder: Werden Fehlermeldungen ausgegeben, stimmt etwas nicht.

Là encore, si des messages d'erreur sont émis, c'est que quelque chose ne va pas.

Ein genauer Blick in die User-Tabelle von MySQL/MariaDB bringt Klarheit bzw. schafft Abhilfe. Hierzu sollte man sich als Datenbank-Administrator anmelden (oftmals root):

Un regard attentif dans le tableau des utilisateurs de MySQL/MariaDB permet d'y voir plus clair ou d'y remédier. Pour cela, il faut se connecter en tant qu'administrateur de la base de données (souvent root) :

```sql
mysql -hlocalhost -uroot -p
    mysql> USE mysql;
    mysql> SELECT * FROM user;
```

Fehlt der User, kann man ihn beispielsweise mit diesem Befehl nachtragen:

Si l'utilisateur manque, on peut par exemple le rajouter avec cette commande :

```sql
mysql> GRANT ALL PRIVILEGES ON idoit_data TO 'idoit'@'localhost' IDENTIFIED BY 'idoit';
```

Bei diesem Beispiel ist unbedingt darauf zu achten, den Namen der Mandanten-Datenbank, den User und dessen Passwort durch die richtigen bzw. durch sichere Angaben zu ersetzen.

Dans cet exemple, il faut absolument veiller à remplacer le nom de la base de données du mandant, l'utilisateur et son mot de passe par les données correctes ou sûres.

Wer sich vor der Kommandozeile sträubt, kann alternativ auf Administrations-Werkzeuge für MySQL/MariaDB wie beispielsweise [phpMyAdmin](https://de.wikipedia.org/wiki/PhpMyAdmin) zurückgreifen.

Ceux qui sont réticents à utiliser la ligne de commande peuvent également recourir à des outils d'administration pour MySQL/MariaDB, comme par exemple [phpMyAdmin](https://de.wikipedia.org/wiki/PhpMyAdmin).