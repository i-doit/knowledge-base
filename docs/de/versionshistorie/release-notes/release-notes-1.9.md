# Release Notes 1.9

> Systemvoraussetzungen
> ---------------------
> 
> i-doit ist ab Version 1.9 zu PHP Version 7.0 kompatibel.
> 
> Es kann weiterhin PHP 5.4 und aufwärts benutzt werden.
> 
> Vor dem Update
> --------------
> 
> Vor dem Update sollten alle installierten Add-ons auf die neueste Version aktualisiert werden. Parallel zur Veröffentlichung von i-doit 1.9 werden alle Add-ons in neueren Versionen veröffentlicht.
> 
> Bei dem Wechsel von PHP 5.4 oder 5.6 auf PHP 7.0 ist das vorherige Update der Add-ons verpflichtend.
> 
> Achtung! Nutzer des RFC Add-ons müssen sich noch ein wenig gedulden. Die aktuelle Version wird vom i-doit 1.9 Update noch nicht unterstützt. Sobald eine entsprechende Version des RFC Add-ons verfügbar ist, werden sie informiert.
> 
> Migrationen
> -----------
> 
> *   Für jede Objekttyp-Liste wird ein “Standard Filter” eingestellt.
> *   In der Kategorie Hostadresse wird das Feld “DNS Domäne” umbenannt zu “Suchdomänen”. Je angegebener DNS-Domäne wird ein Hostname / Domäne Pärchen gebildet.
> *   Schriftarten werden aus dem Vendor Verzeichnis nach “uploads/fonts” kopiert
> *   Sämtliche in der Datenbank gespeicherten Schnittstellen-Passwörter (LDAP, OCS-Inventory, JDisc, etc.) werden neu gehasht. Anstatt mcrypt, welches mit PHP 7 deprecated ist, wird nun phpseclib verwendet, dieses entscheidet, ob Openssl für PHP verfügbar ist, ansonsten werden native Verschlüsselungsmethoden verwendet. Bei einem Wechsel vom System nach dem Update von 1.8.3.1 auf 1.9 ist die Verschlüsselungsmethode gesetzt und auf dem neuen System muss dieselbe Methode verfügbar sein.