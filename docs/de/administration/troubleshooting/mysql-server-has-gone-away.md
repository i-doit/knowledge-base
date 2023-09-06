# "MySQL-Server has gone away"

## Problem

Beim Aufruf von i-doit erscheint die Fehlermeldung "MySQL-Server has gone away".

## Lösung

Die Standard-Konfiguration der Eigenschaft max_allowed_packet beträgt in einigen Umgebungen 1M. Passe diese Einstellung folgendermaßen in der Konfigurationsdatei von MySQL/MariaDB an:

```ini
max_allowed_packet = 128M
```

Werfe auch einen Blick auf unsere empfohlenen [Systemeinstellungen](../../installation/manuelle-installation/systemeinstellungen.md).
