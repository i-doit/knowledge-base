# Add-ons i-doit pro

La [documentation IT](../basics/structure-of-the-it-documentation.md) et la [CMDB](../basics/structure-of-the-it-documentation.md) sont au premier plan d'i-doit. De plus, il existe des modules complémentaires supplémentaires pour étendre la portée des fonctions disponibles d'i-doit en fonction de vos besoins. De cette manière, l'utilisateur bénéficie d'une toute nouvelle perspective sur la documentation IT.

!!! info ""Modules" et "Extensions""

    Les anciennement appelés "Modules" et "Extensions" ont été renommés "Add-ons" en mars 2017. Cependant, dans certains endroits du logiciel, vous pouvez encore trouver les anciens noms qui seront progressivement remplacés par de nouvelles versions.

Liste des Add-ons Disponibles
-------------------------

| Add-on | Disponible pour i-doit pro? | Disponible pour i-doit open? | Soumis à licence? |
| --- | --- | --- | --- |
| **[Add-on Packager](./add-on-packager.md)** | oui | non  | non  |
| **Documentation Active Directory ([GER](./active-directory-documentation.md))** | oui | non  | non  |
| **[Analyse](./analysis.md)** | oui | non  | oui |
| **[API](./api/index.md)** | oui | oui | non  |
| **[Câblage](./cabling.md)** | oui | non  | non  |
| **[Checkmk](./checkmk.md)** | oui | non  | non  |
| **[Checkmk2](./checkmk2/index.md)** | oui | non  | oui |
| Documentation DNS ([GER](./dns-documentation.md)) | oui | non  | non |
| **[Documents](./documents/index.md)** | oui | non  | oui |
| **[Événements](./events.md)** | oui | non  | non  |
| **[Plan d'étage](./floorplan.md)** | oui | non  | non  |
| HomeOffice ([GER](https://www.i-doit.com/blog/i-doit-home-office-add-on/)) | oui | non  | non  |
| **[i-diary](./i-diary/index.md)** | oui | non  | non  |
| **[ISMS](./isms.md)** | oui | non  | oui |
| **[Maintenance](./maintenance.md)** | oui | non  | non  |
| **[Nagios](./../automation-and-integration/network-monitoring/nagios.md)** | oui | non  | non  |
| **[Relocate-CI](./relocate-ci.md)** | oui | non  | non  |
| **[Remplacement](./replacement.md)** | oui | non  | non  |
| Rapport Spécial ([GER](https://www.i-doit.com/blog/i-doit-reporting-special/)) | oui | non  | non  |
| VIVA ([GER](./viva/index.md/)) | oui | non  | oui |
| **[Workflow](./workflow.md)** | oui | non  | non  |

À côté de ces modules complémentaires, il y en a beaucoup d'autres qui sont fournis par nos partenaires ou des développeurs externes. Vous pouvez trouver une liste détaillée sur le site i-doit [i-doit.com sous **Produit → Modules complémentaires**](https://www.i-doit.com/fr/i-doit/modules-complementaires/).

Téléchargement
--------------

Les modules complémentaires sont disponibles sous forme de fichiers ZIP. Ceux-ci sont installés via le [Centre d'administration](../system-administration/admin-center.md#modules-complementaires).  
Les clients peuvent télécharger des modules complémentaires dans le [portail client](../system-administration/customer-portal.md). Les modules complémentaires soumis à une licence (voir ci-dessus) seront débloqués pour le téléchargement dans votre compte client lors du processus d'achat.  
Si vous ne trouvez pas de modules complémentaires que vous avez achetés, veuillez contacter [help@i-doit.com](mailto:help@i-doit.com) pour obtenir de l'aide.

Les utilisateurs en évaluation peuvent télécharger tous les modules complémentaires gratuits et commerciaux dans le processus d'évaluation. Il y a des boutons de téléchargement pour tous les modules complémentaires sur votre page d'évaluation personnelle (par exemple [https://portal.i-doit.com](https://portal.i-doit.com)). Tous les modules complémentaires soumis à une licence sont sous licence dans la licence d'évaluation.

Installation
------------

Tous les modules complémentaires sont installés via le [centre d'administration](../system-administration/admin-center.md). Après vous être connecté avec succès au centre d'administration, passez simplement à l'onglet **Modules** et utilisez le bouton **Installer/mettre à jour le module**.

[![Installation](../assets/images/en/i-doit-pro-add-ons/1-iao.png)](../assets/images/en/i-doit-pro-add-ons/1-iao.png)

Dès que vous cliquez sur le bouton, une nouvelle boîte de dialogue apparaît. Tout d'abord, vous devez déterminer si le module complémentaire doit être installé pour tous les [locataires](../system-administration/multi-tenant.md) (**Tous les locataires**) ou seulement pour un seul. Cliquez sur le bouton **Parcourir...** sous **Fichier ZIP** pour sélectionner le module complémentaire. Pour confirmer le téléchargement et l'installation du fichier ZIP sur l'hôte, cliquez sur **Télécharger et installer**.

[![Modules](../assets/images/en/i-doit-pro-add-ons/2-iao.png)](../assets/images/en/i-doit-pro-add-ons/2-iao.png)

!!! info "Paramètres système"

    Les [paramètres](../installation/manual-installation/system-settings.md) pour le téléchargement de fichiers doivent autoriser le téléchargement pour rendre l'installation possible. La limite de taille maximale des fichiers doit également être supérieure à la taille du fichier d'archive pour l'installation.

Une fois que l'extension a été installée avec succès, vous recevrez un message de confirmation. L'extension apparaîtra désormais également dans la liste des extensions installées du locataire correspondant. Chaque locataire utilise une liste séparée.

[![Aperçu](../assets/images/en/i-doit-pro-add-ons/3-iao.png)](../assets/images/en/i-doit-pro-add-ons/3-iao.png)

Si une extension est disponible mais n'est pas encore installée, elle sera marquée comme **non installée** dans la liste du locataire respectif. Avec le bouton **Installer**, vous pouvez effectuer l'installation ultérieurement sans avoir à télécharger à nouveau le fichier ZIP.

Attribution des droits
----------------------

Chaque extension a ses propres droits qui sont attribués par personne ou groupe de personnes. Après l'installation d'une nouvelle extension, les utilisateurs n'ont pas encore les autorisations pour l'utiliser. Vous devez effectuer d'autres étapes dans la [Gestion des droits](../efficient-documentation/rights-management/index.md).

Mise à jour
-----------

Une fois qu'une nouvelle version d'une extension est disponible, vous pouvez effectuer une mise à jour sans avoir besoin de l'installer complètement à nouveau. Toutes les données existantes persistent pendant ce processus.

Les étapes requises sont similaires au processus d'installation : Téléchargez et installez le nouveau fichier ZIP via le bouton **Installer/mettre à jour le module**. Alternativement, pour certaines extensions, le bouton **Mettre à jour / Réinstaller** dans la liste respective peut être cliqué pour effectuer le processus de mise à jour si le système a une connexion internet. Le fichier ZIP sera téléchargé et installé automatiquement. Veuillez noter que cette fonction n'est pas disponible pour toutes les extensions.

Désinstallation
---------------

Vous pouvez désinstaller une extension avec la liste mentionnée ci-dessus en activant la case à cocher, puis en utilisant le bouton **Désinstaller le module sélectionné**. Un dialogue vous demandera de confirmer cette action. Tous les fichiers et données utilisateur associés à l'extension seront **supprimés de manière irréversible**. La désinstallation sera effectuée au niveau du locataire. En cliquant sur différentes cases à cocher, vous pouvez désinstaller plusieurs extensions simultanément.

(De)activation
--------------

Si vous souhaitez mettre en pause l'utilisation d'une extension sans supprimer les données associées, vous pouvez désactiver l'extension. Pour ce faire, activez la case à cocher de l'entrée correspondante dans la liste et utilisez le bouton **Désactiver le module sélectionné** pour le locataire respectif. Désormais, les fonctions et les données utilisateur de l'extension ne sont plus disponibles.

Un processus de réactivation renouvelé suit un processus similaire : Sélectionnez l'add-on respectif dans la liste et cliquez sur le bouton **Activer le module sélectionné**. Désormais, les fonctions et les données utilisateur seront à nouveau disponibles.

Tous les autres locataires ne sont pas affectés par ces actions. En cochant diverses cases, vous pouvez activer/désactiver plusieurs add-ons respectivement un add-on pour plusieurs locataires simultanément.
