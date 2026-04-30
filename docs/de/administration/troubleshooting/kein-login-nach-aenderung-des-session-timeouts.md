---
title: Kein Login nach Änderung des Session Timeouts
description: "Im Admin-Center unter System settings → Session → Session timeout legst du fest, nach wie vielen Sekunden ein inaktiver Benutzer automatisch abgemeldet..."
icon:
status:
lang: de
---
# Kein Login nach Änderung des Session Timeouts

## Problem


[![kein-login-session-timeout.png](../../assets/images/de/administration/troubleshooting/kein-login-session-timeout.png)](../../assets/images/de/administration/troubleshooting/kein-login-session-timeout.png)

Im Admin-Center unter **System settings → Session → Session timeout** legst du fest, nach wie vielen Sekunden ein inaktiver Benutzer automatisch abgemeldet wird. Der Standardwert beträgt 600 Sekunden (10 Minuten).

Wird ein sehr niedriger Wert (0 oder negativ) eingestellt, kann sich kein Benutzer mehr anmelden, ohne sofort wieder abgemeldet zu werden.

## Lösung

Wenn der Wert so niedrig ist, dass du ihn über die Web GUI nicht schnell genug ändern kannst, korrigiere ihn direkt per SQL:

1. Führe folgendes SQL-Statement aus:

    ```sql
    UPDATE idoit_system.isys_settings SET isys_settings__value = '86400' WHERE isys_settings__key = 'session.time';
    ```

    Dabei ist `idoit_system` der Name der System-Datenbank und `86400` entspricht 24 Stunden. Vermeide Werte jenseits des 32-Bit-Zahlenraums.

2. Leere den Cache, damit die Änderung aktiv wird:

    ```shell
    sudo rm -r /var/www/html/temp/*
    ```

    Passe `/var/www/html/` an deinen Installationspfad an.

3. Rufe i-doit über die Web GUI auf. Der Cache wird automatisch neu angelegt und der Login funktioniert wieder.
