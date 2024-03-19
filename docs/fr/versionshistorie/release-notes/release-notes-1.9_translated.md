<!-- TRANSLATED by md-translate -->
# Release Notes 1.9

# Notes de publication 1.9

> ## Systemvoraussetzungen
>
> i-doit ist ab Version 1.9 zu PHP Version 7.0 kompatibel.
>
> Es kann weiterhin PHP 5.4 und aufwärts benutzt werden.
>
> ## Vor dem Update
>
> Vor dem Update sollten alle installierten Add-ons auf die neueste Version aktualisiert werden. Parallel zur Veröffentlichung von i-doit 1.9 werden alle Add-ons in neueren Versionen veröffentlicht.
>
> Bei dem Wechsel von PHP 5.4 oder 5.6 auf PHP 7.0 ist das vorherige Update der Add-ons verpflichtend.
>
> Achtung! Nutzer des RFC Add-ons müssen sich noch ein wenig gedulden. Die aktuelle Version wird vom i-doit 1.9 Update noch nicht unterstützt. Sobald eine entsprechende Version des RFC Add-ons verfügbar ist, werden sie informiert.
>
> ## Migrationen
>
> * Für jede Objekttyp-Liste wird ein "Standard Filter" eingestellt.
> * In der Kategorie Hostadresse wird das Feld "DNS Domäne" umbenannt zu "Suchdomänen". Je angegebener DNS-Domäne wird ein Hostname / Domäne Pärchen gebildet.
> * Schriftarten werden aus dem Vendor Verzeichnis nach "uploads/fonts" kopiert
> * Sämtliche in der Datenbank gespeicherten Schnittstellen-Passwörter (LDAP, OCS-Inventory, JDisc, etc.) werden neu gehasht. Anstatt mcrypt, welches mit PHP 7 deprecated ist, wird nun phpseclib verwendet, dieses entscheidet, ob Openssl für PHP verfügbar ist, ansonsten werden native Verschlüsselungsmethoden verwendet. Bei einem Wechsel vom System nach dem Update von 1.8.3.1 auf 1.9 ist die Verschlüsselungsmethode gesetzt und auf dem neuen System muss dieselbe Methode verfügbar sein.

> ## Configuration requise

> i-doit est compatible avec PHP version 7.0 à partir de la version 1.9.

> Il est toujours possible d'utiliser PHP 5.4 et supérieur.

> ## Avant la mise à jour
>
> Avant la mise à jour, tous les add-ons installés doivent être mis à jour avec la dernière version. Parallèlement à la publication d'i-doit 1.9, tous les add-ons seront publiés dans des versions plus récentes.
>
> Lors du passage de PHP 5.4 ou 5.6 à PHP 7.0, la mise à jour préalable des add-ons est obligatoire.
>
> Attention ! Les utilisateurs du RFC Add-ons doivent encore patienter un peu. La version actuelle n'est pas encore supportée par la mise à jour i-doit 1.9. Dès qu'une version correspondante du RFC Add-on sera disponible, ils en seront informés.
>
> ## Migrations

> * Un "filtre par défaut" est défini pour chaque liste de types d'objets.
> * Dans la catégorie Adresse de l'hôte, le champ "Domaine DNS" est renommé "Domaines de recherche". Pour chaque domaine DNS indiqué, une paire nom d'hôte / domaine est formée.
> Les polices de caractères sont copiées du répertoire des vendeurs vers "uploads/fonts".
> * Tous les mots de passe d'interface (LDAP, OCS-Inventory, JDisc, etc.) enregistrés dans la base de données sont rehazés. Au lieu de mcrypt, qui est deprecated avec PHP 7, on utilise maintenant phpseclib, celui-ci décide si Openssl est disponible pour PHP, sinon on utilise des méthodes de cryptage natives. En cas de changement de système après la mise à jour de 1.8.3.1 à 1.9, la méthode de cryptage est définie et la même méthode doit être disponible sur le nouveau système.