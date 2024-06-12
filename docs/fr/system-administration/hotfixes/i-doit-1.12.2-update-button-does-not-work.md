# i-doit 1.12.2: Le bouton de mise à jour ne fonctionne pas 

Les correctifs résolvent une erreur spécifique et sont généralement fournis sous forme de fichier ZIP. Le fichier ZIP est décompressé dans le répertoire d'installation de i-doit. Confirmez la question de savoir si vous souhaitez écraser les fichiers lors de la décompression (touche **Y** pour "oui" ou **A** pour "tous"). Voici un exemple :

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

[1.12.2-update-button-037c2ff396.zip :material-file-download:](../../assets/downloads/hotfixes/1.12.2-update-button-037c2ff396.zip){ .md-button .md-button--primary }

Après l'application du correctif, il est nécessaire de vider le cache de i-doit (via l'[administration](../administration/index.md)) ainsi que le cache du navigateur (via la combinaison de touches **Ctrl + F5**). Ensuite, le processus de mise à jour peut être appelé et exécuté comme d'habitude.
