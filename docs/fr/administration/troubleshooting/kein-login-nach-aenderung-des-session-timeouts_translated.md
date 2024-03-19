<!-- TRANSLATED by md-translate -->
# Kein Login nach Änderung des Session Timeouts

# Pas de connexion après modification du délai d'expiration de la session

## Problem

## problème

Im Admin Center unter **System settings → Session → Session timeout** wird angegeben, nach wie vielen Sekunden ein inaktiver Benutzer automatisch von i-doit abgemeldet wird. Als Standard sind 600 Sekunden (10 Minuten) eingestellt. Wird ein sehr niedriger Wert, ein Wert von 0 oder gar eine negative Zahl eingestellt, kann sich kein Benutzer mehr im System anmelden, ohne kurz darauf wieder abgemeldet zu werden. Ein Arbeiten mit i-doit erscheint dadurch unmöglich.

Dans Admin Center sous **System settings → Session → Session timeout**, on indique au bout de combien de secondes un utilisateur inactif est automatiquement déconnecté d'i-doit. La valeur par défaut est de 600 secondes (10 minutes). Si une valeur très basse, une valeur de 0 ou même un nombre négatif est défini, aucun utilisateur ne peut plus se connecter au système sans être déconnecté peu de temps après. Le travail avec i-doit semble alors impossible.

## Lösung

## solution

Falls der Wert so niedrig angesetzt ist, dass man in der Web GUI den Wert nicht schnell genug ändern kann, müssen wir einen anderen Weg gehen. Abhilfe schafft ein SQL-Statement, um einen sinnvollen Wert für den Session-Timeout einzustellen:

Si la valeur est si basse que l'on ne peut pas la modifier assez rapidement dans l'interface utilisateur Web, nous devons utiliser une autre méthode. Pour y remédier, il faut utiliser une déclaration SQL afin de définir une valeur raisonnable pour le délai d'attente de la session :

```sql
UPDATE idoit_system.isys_settings SET isys_settings__value = '86400' WHERE isys_settings__key = 'session.time';
```

Hierbei ist idoit_system der Name der System-Datenbank und 86400 entspricht einer Woche. Von Werten jenseits des 32bit-Zahlenraums, z. B. 99999999999999999999, raten wir dringend ab.

Dans ce cas, idoit_system est le nom de la base de données du système et 86400 correspond à une semaine. Nous déconseillons vivement d'utiliser des valeurs au-delà de l'espace numérique 32 bits, par ex. 99999999999999999999.

Diese und viele weitere Einstellungen werden aus Performance-Gründen in einem Cache gespeichert. Damit die Änderungen aktiv werden, muss das temp/-Verzeichnis im Installationsverzeichnis von i-doit geleert werden:

Ces paramètres et bien d'autres sont enregistrés dans un cache pour des raisons de performance. Pour que les modifications soient actives, il faut vider le répertoire temp/ dans le répertoire d'installation d'i-doit :

```shell
sudo rm -r /var/www/html/i-doit/temp/*
```

Hierbei entspricht /var/www/html/i-doit/ dem Pfad zur Installation von i-doit.

Dans ce cas, /var/www/html/i-doit/ correspond au chemin d'installation d'i-doit.

Beim Aufruf von i-doit über die Web GUI wird der Cache automatisch neu angelegt, sodass die manuelle Änderung aktiv wird. Der Login und die weitere Arbeit an der [IT-Dokumentation](../../glossar.md) sollten nun wieder funktionieren.

Lors de l'appel d'i-doit via l'interface utilisateur Web, le cache est automatiquement recréé, de sorte que la modification manuelle devient active. La connexion et la poursuite du travail sur la [documentation IT](../../glossaire.md) devraient maintenant fonctionner à nouveau.