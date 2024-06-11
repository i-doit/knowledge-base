# Notes de version 1.9

> Configuration requise
> -------------------
> 
> i-doit 1.9 est compatible avec la version 7.0 de PHP.
> 
> Vous pouvez toujours utiliser PHP 5.4 et les versions suivantes.
> 
> Avant la mise à jour
> ---------------
> 
> Avant de procéder à la mise à jour, vous devez mettre à jour tous les modules installés. Tous les modules sont publiés avec des versions plus récentes en parallèle avec la version i-doit.
> 
> Si vous passez à PHP 7.0, la mise à jour des modules est obligatoire (également avant la mise à jour d'i-doit).
> 
> Attention ! Les utilisateurs de l'add-on RFC doivent faire preuve de patience. La mise à jour vers i-doit 1.9 ne prend pas en charge la version actuelle de l'add-on RFC. Vous serez informé dès que la nouvelle version de l'add-on RFC sera disponible.
> 
> Migrations
> ----------
> 
> *   Chaque liste d'objets reçoit un filtre standard.
> *   Dans la catégorie adressehôte, le champ "Domaine DNS" est renommé en "Domaine de recherche". Chaque domaine répertorié reçoit une paire Nom d'hôte / Domaine FQDN.
> *   Les polices sont copiées du répertoire du fournisseur vers upload/fonts.
> *   Tous les mots de passe d'interface enregistrés (LDAP, OCS-Inventory, JDisc, etc.) dans la base de données sont rehashés. mcrypt, qui est obsolète avec PHP 7, sera remplacé par phpseclib. phpseclib vérifie si OpenSSL est disponible. Sinon, il utilise le cryptage natif. Si vous modifiez votre système après une mise à jour vers i-doit 1.9, vous devez vous assurer que la méthode de cryptage choisie est disponible.

{/*examples*/}
