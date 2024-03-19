<!-- TRANSLATED by md-translate -->
# "MySQL-Server has gone away"

# "MySQL server has gone away" (Le serveur MySQL a disparu)

## Problem

## problème

Beim Aufruf von i-doit erscheint die Fehlermeldung "MySQL-Server has gone away".

Lors de l'appel d'i-doit, le message d'erreur "MySQL-Server has gone away" apparaît.

## Lösung

## solution

Die Standard-Konfiguration der Eigenschaft max_allowed_packet beträgt in einigen Umgebungen 1M. Passe diese Einstellung folgendermaßen in der Konfigurationsdatei von MySQL/MariaDB an:

La configuration par défaut de la propriété max_allowed_packet est de 1M dans certains environnements. Ajustez ce paramètre comme suit dans le fichier de configuration de MySQL/MariaDB :

```ini
max_allowed_packet = 128M
```

Werfe auch einen Blick auf unsere empfohlenen [Systemeinstellungen](../../installation/manuelle-installation/systemeinstellungen.md).

Jetez également un coup d'œil à nos [paramètres système] recommandés(../../installation/installation manuelle/paramètres système.md).