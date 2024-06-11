# Activer la Licence

i-doit PRO est déverrouillé avec une licence.

Les licences pour votre entreprise sont disponibles sur le [portail client](../system-administration/customer-portal.md). L'accès est donné à la personne désignée comme le contact principal.

!!! attention "Nom de la base de données"

    Lors de la création d'une licence pour un locataire unique, le **nom de la base de données** est requis. Assurez-vous que le nom est disponible lorsque vous créez la licence dans notre portail client.

    Les licences ont une certaine période de validité. Si la période expire, une nouvelle licence est requise.

!!! attention "Compatibilité du jeton"

    Le jeton de licence peut être utilisé à partir de la version **i-doit 1.12.2**  
    La clé de licence hors ligne ne peut être utilisée qu'avec la version **i-doit 1.15**

!!! info "Comportement avant i-doit 1.12.2"

    Plusieurs types de licences sont disponibles pour i-doit pro :

    *   La licence **d'abonnement** pour chaque locataire unique (y compris les licences **d'essai**)  
        Vous pouvez charger une licence d'abonnement via le [centre d'administration](../system-administration/admin-center.md) 
    *   La licence **d'abonnement** pour plusieurs **locataires**  
        Si vous souhaitez utiliser une licence d'abonnement pour plusieurs locataires, vous ne pouvez l'activer que via le centre d'administration.
    *   La licence **d'achat** pour un ou plusieurs **locataires**  
        L'activation pour les deux types est également effectuée via le [centre d'administration](../system-administration/admin-center.md)

Importation du jeton de licence
--------------------

Le nouveau portail client est en service depuis mars 2022. Cela a modifié la procédure de licence et un serveur de licences a été créé.  
Les jetons sont créés via ce serveur et remplacent le fichier de licence.

Quelle méthode d'importation de licence dois-je utiliser ?
-------------------------------------------------

*   Si votre serveur, sur lequel i-doit est installé, **a une connexion internet**, utilisez l'activation du [Jeton de Licence](#activate-license).
*   Si votre serveur, sur lequel i-doit est installé, **n'a pas de connexion internet**, suivez les étapes 1 à 5 et continuez avec les étapes de la [Clé de Licence Hors Ligne](#activate-offline-license-key-offline).  

Comment obtenir le Jeton de Licence et comment obtenir la chaîne de Clé de Licence Hors Ligne ?
---------------------------------------------------------------------------

*   Le **Jeton de Licence** peut être trouvé dans le portail client.
*   Vous pouvez récupérer la chaîne de clé de licence en cliquant sur le bouton **Clé de Licence Hors Ligne**, en haut à droite. Cela ouvrira une fenêtre contextuelle avec la Licence Hors Ligne.

[![portail client](../assets/images/en/maintenance-and-operation/activate-license/1-al.png)](../assets/images/en/maintenance-and-operation/activate-license/1-al.png)

Activer le jeton de licence en ligne
-----------------------------

**Étape 1 :** Accédez au portail client i-doit. Pour accéder au centre d'administration, cliquez sur le lien de l'écran de connexion.

[![connexion](../assets/images/en/maintenance-and-operation/activate-license/2-al.png)](../assets/images/en/maintenance-and-operation/activate-license/2-al.png)

**Étape 2 :** Ensuite, vous devez saisir les identifiants que vous avez attribués pour le centre d'administration lorsque vous avez installé i-doit.

[![centre d'administration](../assets/images/en/maintenance-and-operation/activate-license/3-al.png)](../assets/images/en/maintenance-and-operation/activate-license/3-al.png)

**Étape 3 :** Maintenant, vous êtes connecté au Centre d'administration et cliquez sur l'onglet "Licences".

[![Centre d'administration](../assets/images/en/maintenance-and-operation/activate-license/4-al.png)](../assets/images/en/maintenance-and-operation/activate-license/4-al.png)

**Étape 4 :** Ici, vous pouvez importer un fichier de licence ou votre jeton de licence. Pour cela, copiez le jeton de licence dans le champ d'entrée.

[![importer une licence](../assets/images/en/maintenance-and-operation/activate-license/5-al.png)](../assets/images/en/maintenance-and-operation/activate-license/5-al.png)

**\*Si un fichier de licence est encore installé ici, il doit être supprimé.**

Ensuite, cliquez sur le bouton **Enregistrer et Vérifier**. Maintenant, le jeton de licence sera vérifié par le serveur de licences.

**Étape 5 :** Le jeton de licence a été vérifié par le serveur de licences et toutes les licences associées sont affichées.

[![Jeton de licence](../assets/images/en/maintenance-and-operation/activate-license/6-al.png)](../assets/images/en/maintenance-and-operation/activate-license/6-al.png)

**_Note_** : Le jeton de licence ressemble à ceci : **2e23aa70df492b7e7b8f321929gcfcde**

Activer la clé de licence hors ligne
------------------------------------

Nous effectuons [les étapes 1 à 5](#activate-licenses-steps-1-5) au préalable.

**Étape 5 :** Insérez le **Jeton de Licence**. Cliquez sur le bouton **Enregistrer**. Ne cliquez **pas** sur "Enregistrer et Vérifier".


[![Jeton de licence](../assets/images/en/maintenance-and-operation/activate-license/7-al.png)](../assets/images/en/maintenance-and-operation/activate-license/7-al.png)

**Étape 6 :** Cliquez sur le bouton "**Installer une nouvelle licence**".

[![Installer une nouvelle licence](../assets/images/en/maintenance-and-operation/activate-license/8-al.png)](../assets/images/en/maintenance-and-operation/activate-license/8-al.png)

**Étape 7 :** Vous verrez maintenant un champ dans lequel la chaîne de la **Clé de licence hors ligne** doit être copiée.

[![Clé de licence hors ligne](../assets/images/en/maintenance-and-operation/activate-license/9-al.png)](../assets/images/en/maintenance-and-operation/activate-license/9-al.png)

**_Note :_** Selon le nombre d'extensions incluses dans la licence achetée, il y aura plusieurs clés de licence. Vous pouvez les copier de manière contiguë dans le champ.

[![Note](../assets/images/en/maintenance-and-operation/activate-license/10-al.png)](../assets/images/en/maintenance-and-operation/activate-license/10-al.png)

**Étape 8 :** Cliquez maintenant sur le bouton **Ajouter la licence**.


[![Ajouter une licence](../assets/images/en/maintenance-and-operation/activate-license/11-al.png)](../assets/images/en/maintenance-and-operation/activate-license/11-al.png)

Maintenant que le jeton de licence a été vérifié avec la chaîne de clé de licence hors ligne et que toutes les licences associées sont affichées.

[![Clé de licence hors ligne](../assets/images/en/maintenance-and-operation/activate-license/12-al.png)](../assets/images/en/maintenance-and-operation/activate-license/12-al.png)

Activation via l'Admin-Center (Fichier de licence obsolète)
------------------------------------------------------------

Après vous être connecté, l'installation via le [centre d'administration](../system-administration/admin-center.md) est effectuée dans l'onglet **Licences**. Utilisez le bouton **Installer une nouvelle licence** pour ouvrir le dialogue étendu et sélectionner le fichier de licence téléchargé.

Une nouvelle connexion peut être requise

Lorsqu'une licence a été activée avec succès et que vous souhaitez travailler avec i-doit, il se peut que vous receviez néanmoins l'information qu'aucune licence valide n'est activée. Vous pouvez corriger la situation en vous déconnectant puis en vous reconnectant avec l'utilisateur actuel. Ensuite, cette note ne devrait plus réapparaître.

[![Une nouvelle connexion peut être requise](../assets/images/en/maintenance-and-operation/activate-license/13-al.png)](../assets/images/en/maintenance-and-operation/activate-license/13-al.png)

Distribution automatique de licences

Veuillez noter que dans l'onglet **Locataires**, vous pouvez configurer le nombre de licences d'objets pouvant être attribuées à un client. Même s'il n'existe qu'un seul client, une distribution automatique de licences désactivée peut garantir que toutes les licences d'objets ne sont pas utilisées. Si tel est le cas, elle peut simplement être activée et appliquée en cliquant sur Enregistrer.

Licences d'essai
--------------

Vous pouvez [demander une licence pour tester i-doit pro pendant 30 jours](https://www.i-doit.com/) sur notre site web.

Nom de la base de données de test

La licence d'essai est toujours délivrée pour le nom de base de données **idoit\_data**. Pour garantir un fonctionnement sans faille pendant la période d'essai, vous ne pouvez pas modifier le nom de la base de données lors de l'installation!
