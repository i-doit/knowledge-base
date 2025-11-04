# Kein Login nach Änderung des Session Timeouts

## Problem

Im Admin-Center unter **System settings → Session → Session timeout** wird angegeben, nach wie vielen Sekunden ein inaktiver Benutzer automatisch von i-doit abgemeldet wird. Als Standard sind 600 Sekunden (10 Minuten) eingestellt. Wird ein sehr niedriger Wert, ein Wert von 0 oder gar eine negative Zahl eingestellt, kann sich kein Benutzer mehr im System anmelden, ohne kurz darauf wieder abgemeldet zu werden. Ein Arbeiten mit i-doit erscheint dadurch unmöglich.

## Lösung

Falls der Wert so niedrig angesetzt ist, dass man in der Web GUI den Wert nicht schnell genug ändern kann, müssen wir einen anderen Weg gehen. Abhilfe schafft ein SQL-Statement, um einen sinnvollen Wert für den Session-Timeout einzustellen:

```sql
UPDATE idoit_system.isys_settings SET isys_settings__value = '86400' WHERE isys_settings__key = 'session.time';
```

Hierbei ist idoit_system der Name der System-Datenbank und 86400 entspricht einer Woche. Von Werten jenseits des 32bit-Zahlenraums, z. B. 99999999999999999999, raten wir dringend ab.

Diese und viele weitere Einstellungen werden aus Performance-Gründen in einem Cache gespeichert. Damit die Änderungen aktiv werden, muss das temp/\-Verzeichnis im Installationsverzeichnis von i-doit geleert werden:

```shell
sudo rm -r /var/www/html/temp/*
```

Hierbei entspricht /var/www/html/ dem Pfad zur Installation von i-doit.

Beim Aufruf von i-doit über die Web GUI wird der Cache automatisch neu angelegt, sodass die manuelle Änderung aktiv wird. Der Login und die weitere Arbeit an der [IT-Dokumentation](../../glossar.md) sollten nun wieder funktionieren.
