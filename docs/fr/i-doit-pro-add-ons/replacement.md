# Remplacement {/ * exemples * /}

Un nouveau commutateur est mis en service mais vous souhaitez conserver toutes les connexions ? Utilisez l'**addon** **Remplacement** [add-on](./index.md) afin de ne pas avoir à documenter toutes les connexions à nouveau. Cet add-on permet l'échange d'[objets](../basics/structure-of-the-it-documentation.md) avec une adoption configurable des connexions existantes.

Téléchargement et Installation
------------------------------

Cet add-on peut également être installé ultérieurement. Vous trouverez des descriptions détaillées sur le téléchargement, l'installation, les mises à jour, etc. dans l'article "[i-doit pro Add-ons](./index.md)".

Configuration
------------

Vous pouvez trouver la configuration dans **Administration** **→ Paramètres CMDB → Échange d'objets → Configuration**. Dans la plupart des cas, vous pouvez utiliser la configuration pour définir des valeurs par défaut afin de standardiser et accélérer les échanges fréquents.

| Option | Description |
| --- | --- |
| **Types d'objets sélectionnables** | Ici, vous spécifiez quels objets de quel type peuvent être échangés. De plus, vous définissez par [type d'objet](../basics/structure-of-the-it-documentation.md) quelles [catégories](../basics/structure-of-the-it-documentation.md) (et donc quels [attributs](../basics/structure-of-the-it-documentation.md)) doivent être échangés. Les catégories qui ne sont pas sélectionnées ne sont pas affectées par les échanges. |
| **Statut CMDB pour stocker les objets** | Vous pouvez restreindre la sélection des objets proposés pour l'échange via leur [**statut CMDB**](../basics/life-and-documentation-cycle.md). |
| **Tenir compte du statut "échange" ?** | Lorsque le statut d'échange est pris en compte, l'objet échangé reçoit le **statut CMDB** **stocké** et l'objet d'échange le **statut CMDB en opération**. |
| **Archiver les objets échangés ?** | Voulez-vous que l'objet échangé reçoive le [statut](./../basics/life-and-documentation-cycle.md) **Archivé** ? |
| **Également échanger le SYS-ID ?** | Voulez-vous échanger l'attribut **SYS-ID** dans la catégorie **Général** ? C'est [un attribut pour références uniques](../basics/unique-references.md). |

Assignation des droits
-----------------

Sous **Administration → Système d'autorisation → Droits → Échange d'objets** vous pouvez spécifier [les droits pour les personnes et les groupes de personnes](../efficient-documentation/rights-management/index.md).

| Condition | Description |
| --- | --- |
| **Échanger des objets  <br>** | L'utilisateur a-t-il la permission d'échanger des objets ? |
| **Échanger par lieu de travail  <br>** | L'utilisateur a-t-il la permission d'échanger des composants de lieu de travail ? |
| **Échanger la configuration du module CI  <br>** | L'utilisateur a-t-il la permission d'ajuster la configuration (voir ci-dessus) ? |
| **Bouton Échanger CI dans la liste d'objets** | L'utilisateur peut échanger des objets via la [barre d'actions de la liste d'objets](../basics/object-list/index.md). À cet effet, le bouton **Échanger** apparaîtra dans la barre d'actions. |
| ****Bouton Échanger CI dans les objets**** | Via la barre d'actions au sein d'un objet, l'utilisateur peut échanger l'objet avec un autre. À cet effet, le bouton **Échanger** apparaîtra dans la barre d'actions. |

Exigences
------------

Avant que deux objets puissent être échangés, les conditions suivantes doivent être remplies:

*   Les deux objets ont le même type d'objet.
*   Vous ne pouvez pas échanger un objet avec lui-même.

Échange d'Objet
---------------

Il existe trois façons d'échanger un objet contre un autre :

1.  Sélectionnez les deux objets dans une [liste d'objets](../basics/object-list/index.md) et cliquez sur le bouton **Échanger** dans la barre d'actions.
2.  Cliquez sur le bouton **Échanger** dans la barre d'actions d'un objet, puis sélectionnez l'objet à échanger sous **Objet stocké.**
3.  Sélectionnez les deux objets sous **Objet à échanger** et **Objet stocké** dans **Extras → Échange d'Objet.**

Maintenant, vous pouvez échanger les objets sélectionnés en cliquant sur le bouton **Changer**.

[![Changer](../assets/images/en/i-doit-pro-add-ons/replacement/1-rp.png)](../assets/images/en/i-doit-pro-add-ons/replacement/1-rp.png)

[![Changer](../assets/images/en/i-doit-pro-add-ons/replacement/2-rp.png)](../assets/images/en/i-doit-pro-add-ons/replacement/2-rp.png)

Après avoir sélectionné les deux objets, vous pouvez ajuster d'autres options. La présélection provient de la configuration mentionnée ci-dessus.

| Option | Description |
| --- | --- |
| **Zu übernehmende Kategorien**<br><br>****(Catégories à adopter)**** | voir ci-dessus |
| **Tenir compte de l'état "échange" ?** | voir ci-dessus |
| **Archiver les objets échangés ?** | voir ci-dessus |
| **Échanger également le SYS-ID ?** | voir ci-dessus |

En cliquant sur le bouton **Commencer l'échange**, les deux objets seront échangés.

[![Commencer l'échange](../assets/images/en/i-doit-pro-add-ons/replacement/3-rp.png)](../assets/images/en/i-doit-pro-add-ons/replacement/3-rp.png)

Échange par Lieu de Travail
---------------------------

Vous pouvez effectuer une présélection pour l'échange via les lieux de travail assignés. Sélectionnez d'abord un type d'objet sous **Extras → Échange d'objets → Échange par lieu de travail**. Ensuite, tous les objets du type **Lieu de Travail**, dans la catégorie **Composants du Lieu de Travail** où des objets de ce type sont assignés, seront listés. Vous sélectionnez un objet à échanger à partir du lieu de travail respectif. Avec le bouton **Échanger les objets sélectionnés**, vous pouvez accéder à **Extras → Échange d'objets → Échanger les objets**.

[![Échange par Lieu de Travail](../assets/images/en/i-doit-pro-add-ons/replacement/4-rp.png)](../assets/images/en/i-doit-pro-add-ons/replacement/4-rp.png)

Rapport d'Échange
-----------------

Un rapport sur les actions d'échange effectuées jusqu'à présent est généré sous **Extras → Échange d'objets → Rapport d'échange**. Vous pouvez également accéder à l'élément de rapport via **Extras → Gestionnaire de Rapports → Vues → Rapport d'échange**.

[![Rapport d'échange](../assets/images/en/i-doit-pro-add-ons/replacement/5-rp.png)](../assets/images/en/i-doit-pro-add-ons/replacement/5-rp.png)

  

Versions
--------

| Version | Date | Journal des modifications |
| --- | --- | --- |
| 1.5 | 2023-11-07 | [Bug] Aucun changement n'est enregistré dans le journal<br>[Bug] Erreur de signal lors du téléchargement d'un document depuis le référentiel de documents |
| 1.4 | 2022-09-05 | [Tâche] Compatibilité PHP 8.0  <br>[Tâche] Compatibilité de conception  <br>[Amélioration] Renommage de l'add-on anglais en Remplacement |
| 1.3.2 | 2022-02-21 | [Bug] Utilisation de la langue allemande dans la version anglaise de l'échange d'objets |
| 1.3.1 | 2020-08-10 | [Bug] L'emplacement est perdu lors de l'échange  <br>[Bug] Les informations sont supprimées lors de l'échange d'objets |
| 1.3 | 2019-05-20 | [Amélioration] Numéro de série des propriétés et titre du modèle disponibles dans le rapport d'échange ci<br>[Bug] L'index de recherche ne sera pas renouvelé après un remplacement de périphérique<br>[Bug] L'échange de périphérique utilise des tables de workflow<br>[Bug] Le statut d'échange a une majuscule en première lettre dans son statut CMDB<br>[Bug] L'ouverture du rapport d'échange affiche une erreur<br> |
| 1.2.5 | 2017-05-02 | [Bug] Message d'erreur apparaît en essayant de désinstaller SWAP_CI dans AdminCenter<br> |
| 1.2.4 | 2017-03-08 | [Bug] Le bouton "Échanger" de "SwapCI" ne fonctionne pas dans les listes d'objets<br>[Bug] Compatibilité PHP et i-doit améliorée<br> |
| 1.2.3 | 2015-10-08 | [Amélioration] Numéro de série des propriétés et titre du modèle disponibles dans le rapport d'échange ci<br>[Bug] SwapCi affiche un message d'erreur lorsque vous vous connectez à ce contexte<br>[Bug] Erreur SQL empêche de choisir une catégorie pour l'échange<br> |
| 1.2.2 | 2015-03-09 | [Bug] SwapCi affiche une erreur si le locataire n'a pas installé l'add-on<br> |
| 1.2.1 | 2014-04-14 | Version initiale |
