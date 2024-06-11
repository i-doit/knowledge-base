# Importez l'appliance i-doit dans un environnement Hyper-V

Nous livrons notre appliance au format OVF avec une image de disque dur virtuel VMDK. Pour importer ceci dans un environnement Hyper-V, le disque dur virtuel doit être converti du format VMDK au format VHD en première étape.

Pour cela, vous pouvez utiliser l'outil gratuit "Starwind Converter" que vous pouvez télécharger depuis le lien de téléchargement suivant :

[https://www.starwindsoftware.com/tmplink/starwindconverter.exe](https://www.starwindsoftware.com/tmplink/starwindconverter.exe)

Nous avons déjà téléchargé l'appliance i-doit et l'avons décompressée sous `c:\\i-doit_appliance` :

[![Contenu du dossier](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/1-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/1-hvi.png)

Après avoir installé le ==Starwind Converter==, nous le démarrons et sélectionnons "Fichier local" comme source et allons sur "Suivant" :

[![Sélectionner l'image de destination](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/2-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/2-hvi.png)

Maintenant, nous sélectionnons l'image VMDK du fichier ZIP de l'appliance i-doit et allons sur "Suivant" :

[![Sélectionner le fichier ZIP](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/3-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/3-hvi.png)

Ensuite, nous pouvons choisir le format de destination pour le disque dur virtuel et allons sur "Suivant" :

[![Sélectionner le format de destination](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/4-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/4-hvi.png)

À l'étape suivante, nous pouvons sélectionner la destination pour le nouveau disque VDH et son dossier et allons sur "Suivant" :

[![Sélectionner vhd](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/5-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/5-hvi.png)

Maintenant la conversion a lieu et après achèvement, nous pouvons quitter le programme :

[![Achèvement](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/6-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/6-hvi.png)

À l'étape suivante, nous pouvons intégrer le disque converti dans une nouvelle machine Hyper-V.<br>
Pour ce faire, nous lançons l'Assistant Nouvelle Machine Virtuelle Hyper-V et spécifions le dossier du VDH nouvellement créé :

[![Sélectionner le nom et le chemin](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/7-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/1-hvi.png)

Ensuite, nous choisissons la génération pour la nouvelle machine virtuelle :

[![Sélectionner la génération](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/8-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/8-hvi.png)

Attribuez une mémoire suffisante ([Configuration système](../system-requirements.md)) :

[![Configurer la mémoire](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/9-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/9-hvi.png)

Attribuez le réseau correspondant :

[![Attribution du réseau](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/10-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/10-hvi.png)

Et à cette étape, connectez l'image du disque dur converti :

[![Configuration du disque dur virtuel](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/11-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/11-hvi.png)

Après cela, nous pouvons terminer la configuration et démarrer la machine virtuelle :

[![Terminer](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/12-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/12-hvi.png)

La machine virtuelle devrait maintenant démarrer correctement et vous devriez pouvoir vous connecter avec les données utilisateur fournies :

|     |     |     |
| --- | --- | --- |
| **Connexion** | **Nom d'utilisateur** | **Mot de passe** |
| Connexion Console | idoitadm | idoit |
| Connexion i-doit | admin | admin |
| Connexion Centre d'administration | admin | idoit |

{/*examples*/}
