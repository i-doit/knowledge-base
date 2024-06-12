# i-doit 1.13.2 & 1.14: Connexion au Centre d'administration n'est plus possible

Les correctifs résolvent une erreur spécifique et sont généralement fournis sous forme de fichier ZIP. Le fichier ZIP est décompressé dans le répertoire d'installation de i-doit. Confirmez la question si vous souhaitez écraser les fichiers lors de la décompression (touche **Y** pour "oui" ou **A** pour "tous"). Voici un exemple :

```bash
sudo cp i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip /var/www/html/i-doit/
cd /var/www/html/i-doit/
sudo -u www-data unzip i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
sudo rm i-doit_<version>_hotfix_<description>_<ticket>_<commit>.zip
```

!!! attention "Veuillez noter"

    Veuillez utiliser les correctifs exclusivement avec la version spécifiée.
    Assurez-vous d'avoir effectué une [sauvegarde de i-doit](../../maintenance-and-operation/backup-and-recovery/index.md) avant d'utiliser un correctif.
    Veuillez nous informer de l'utilisation des correctifs si vous contactez notre équipe de support par la suite.

!!! danger "La mise à jour de i-doit 1.12.2 à 1.12.3 n'est pas possible (Version 1.12.2 uniquement !)"

Ce correctif corrige une erreur qui empêche la mise à jour de se poursuivre via la fonction de téléchargement lorsque la version 1.12.2 est utilisée.

!!! attention "Déclaration de consentement"

    En téléchargeant un correctif, vous déclarez avoir lu et compris complètement les notes mentionnées ci-dessus.

[i-doit_1.13.2_hotfix_ID-7224_Admin-Center-Login.zip :material-file-download:](../../assets/downloads/hotfixes/i-doit_1.13.2_hotfix_ID-7224_Admin-Center-Login.zip){ .md-button .md-button--primary }

Après la mise en œuvre, ce correctif fournit une nouvelle commande pour [console.php](../../automation-and-integration/cli/index.md) pour émettre un nouveau mot de passe chiffré pour le Centre d'administration.  
La commande suivante doit être exécutée pour réinitialiser le mot de passe :

```bash
sudo -u www-data php console.php admin-center-password-reset --user Utilisateur --password MotDePasse
```

L'utilisateur www-data est l'utilisateur Apache d'un système Debian. Cet utilisateur doit être adapté à d'autres systèmes. De plus, dans les sections --user et --password, un utilisateur de i-doit est nécessaire qui a les autorisations pour utiliser la console.


