# Formulaires {/examples}

Avec cette extension, vous pouvez créer des formulaires que vous pouvez envoyer à d'autres employés pour les remplir.<br>
Cette extension peut créer un formulaire qui, par exemple, aide les nouveaux employés à documenter les ordinateurs dans votre entreprise.

Lors de la saisie de nouveaux objets, il arrive souvent que plusieurs catégories soient affichées, mais seuls les champs individuels de chaque catégorie doivent être maintenus.<br>
Dans ce cas, il est plus facile pour l'utilisateur (surtout s'il s'agit de nouveaux collègues) si seuls les attributs qui doivent réellement être remplis sont affichés.

L'extension Forms utilise la conception du nouveau produit Cloud i-doit, donc l'apparence est différente des autres extensions i-doit 1.x.

Nous avons également un [article de blog](https://www.i-doit.com/en/blog/the-new-i-doit-pro-forms-add-on/) avec beaucoup d'informations.

[![Aperçu](../../assets/images/en/i-doit-pro-add-ons/forms/1-forms.png)](../../assets/images/en/i-doit-pro-add-ons/forms/1-forms.png)

## Exigences {/examples}

L'extension Forms nécessite :

-   Version i-doit **>=23**
-   Version du serveur MongoDB **5**
-   Version de NodeJS **>=16.x**


## Installation { .md-button }

-   Installation de l'add-on Forms via le [Centre d'administration](../../system-administration/admin-center.md).
-   Installation de [MongoDB Server v5](https://docs.mongodb.com/manual/installation/)
-   Ensuite, installer [NodeJS](https://nodejs.org/en/download/current/) >= v16.x. via [Gestionnaire de paquets](https://nodejs.org/en/download/package-manager/).
-   Configurer le Backend des Forms
-   Configurer le backend dans i-doit

[Continuer avec l'installation de l'add-on Forms](./install-forms-addon.md){ .md-button .md-button--primary }

## Attribution des droits

Pour que les utilisateurs puissent créer des formulaires, il est nécessaire d'attribuer les droits appropriés.<br>
Cela est possible dans l'administration de i-doit sous Système d'autorisation > Droits > Formulaires, si l'add-on est installé.

[![Attribution des droits](../../assets/images/en/i-doit-pro-add-ons/forms/2-forms.png)](../../assets/images/en/i-doit-pro-add-ons/forms/2-forms.png)

Vider le cache du système de droits

Après avoir attribué ou modifié les droits, il est nécessaire de vider le [cache](../../system-administration/administration/tenant-management/repair-and-clean-up.md) dans l' [administration](../../system-administration/administration/index.md) de i-doit sous `Gestion des locataires > Réparation et nettoyage` afin que les modifications soient prises en compte par le système.

## Appel de l'add-on

Une fois toutes les préparations terminées, l'add-on peut être accédé via Extras > Formulaires.

[![Appel de l'add-on](../../assets/images/en/i-doit-pro-add-ons/forms/3-forms.png)](../../assets/images/en/i-doit-pro-add-ons/forms/3-forms.png)

La vue du menu "Extras" peut différer en raison de différents droits et/ou add-ons installés supplémentaires.

## Versions

| Version | Date | Journal des modifications |
| --- | --- | --- |
| 1.2.0 | 2023-05-03 | [Bug] Correction du coût d'investissement et du centre de coûts avec les formulaires<br> [Bug] Aligner les catégories sur le côté gauche<br>[Bug] Correction du droit de supprimer ou de créer des formulaires<br>[Bug] Correction de la liste vide dans le navigateur d'objets si les noms de catégories doivent être utilisés dans l'en-tête<br>[Bug] Afficher les objets si le type d'attribut est manquant<br>[Bug] Améliorer les performances de rendu des champs du navigateur d'objets avec plusieurs objets<br>[Bug] Filtrer les valeurs enfants après les valeurs parentales
| 1.1.0 | 2022-06-27 | [Bug] Autoriser tous les caractères par défaut à être utilisés dans les clés secrètes des formulaires  <br>[Bug] Ne pas afficher la sélection de l'heure dans la date de début pour les clés de licence  <br>[Bug] Autoriser la publication du formulaire si un répartiteur de charge et HTTP2 sont utilisés  <br>[Bug] Enregistrer le formulaire lors de la publication  <br>[Bug] Créer des entrées de journal lors de la création d'un objet et de données de catégorie via l'add-on "Formulaires"  <br>[Bug] Filtrer les objets connectables pour les catégories personnalisées avec des relations d'objets dans les formulaires  <br>[Bug] Autoriser l'utilisateur à copier le lien dans le tableau des formulaires  <br>[Bug] Autoriser l'utilisateur à sélectionner plusieurs objets dans le navigateur d'objets des formulaires  <br>[Bug] Informer l'utilisateur des attributs requis dans la catégorie  <br>[Task] Ajouter une info-bulle à l'état désactivé du bouton de copie de lien dans l'add-on Formulaires  <br>[Task] Autoriser l'ajout d'attribut enfant uniquement lorsque le parent dépendant est ajouté  <br>[Task] Changer le texte réel en texte de substitution dans le champ de texte de l'add-on Formulaires  <br>[Task] Ne pas autoriser l'ajout du même attribut plusieurs fois dans les formulaires  <br>[Task] Avertir l'utilisateur avant la publication si le formulaire sera vide  <br>[Task] Ajouter les dépendances du navigateur d'objets à l'add-on Formulaires  <br>[Task] Diviser la catégorie d'adresse IP en IPv4 virtuel et catégories IPv6 pour l'add-on Formulaires  <br>[Task] Prendre en compte les valeurs de modèle par défaut dans les formulaires  <br>[Task] Mettre à jour le nom de l'attribut dans le champ prédéfini de l'add-on Formulaires  <br>[Task] Désactiver l'attribut enfant jusqu'à ce qu'une valeur pour le parent soit attribuée  <br>[Task] Implémenter la pagination dans le navigateur d'objets de type d'attribut Sélection unique et multiple |
| 1.0.0 | 2022-02-21 | Version initiale |

I am ready to start the translation. Please provide the Markdown content for me to translate into French.
