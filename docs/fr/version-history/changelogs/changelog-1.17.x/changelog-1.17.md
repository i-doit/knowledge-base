# Journal des modifications 1.17

[Amélioration][Catégories] Nouveau type de licence "Basé sur le nombre de cœurs CPU"  
[Amélioration][Catégories] Calcul des licences de type "Basé sur le nombre de cœurs CPU"  
[Amélioration][Catégories personnalisées] Configuration pour concevoir manuellement la structure des libellés et des champs des catégories personnalisées  
[Amélioration][Listes] Filtrage pour les champs vides dans les listes d'objets  
[Amélioration][Listes] Filtre pour les valeurs vides dans les listes d'objets  
[Amélioration][Listes] Filtre pour les valeurs vides dans les listes d'objets  
[Amélioration][Journal] Informations complètes pour les changements dans les catégories antérieures  
[Erreur][Catégories] Les modifications sur la page d'aperçu créent une entrée vide dans la catégorie "attribution de logiciel" si cette catégorie est utilisée sur la page d'aperçu et que l'objet a un système d'exploitation attribué  
[Erreur][Catégories] Apache2 est complètement utilisé si une adresse IP libre est recherchée mais qu'il n'y a pas d'adresse IP libre dans l'allocation d'adresses sélectionnée.  
[Erreur][Catégories] Le domaine de recherche n'est pas ajouté lorsque le réseau est modifié  
[Erreur][Catégories] Le Placeholder ##COUNT## n'est pas évalué pour les sorties (connexion)  
[Erreur][Catégories] La description de la catégorie "Plan d'urgence" (Dossier) n'est pas transmise à la catégorie "Propriétés du plan d'urgence"  
[Erreur][Catégories] Le bouton "Exporter en CSV" est manquant dans la catégorie Applications > Installation  
[Erreur][Catégories] L'attribution de personnes à des groupes de personnes n'est pas affichée correctement  
[Erreur][Catégories] Import CSV : La catégorie d'application n'est pas affichée pour le type d'objet Application  
[Erreur][Catégories personnalisées] Pour le type de champ "Date et heure", l'heure n'est pas affichée dans la liste d'objets  
[Erreur][Catégories personnalisées] La catégorie personnalisée n'est pas utilisable si les attributs contiennent des barres obliques inverses dans le titre  
[Erreur][Mise à jour] Fichiers de configuration de sauvegarde accessibles  
[Erreur][Import CSV] Les valeurs dans les catégories définies par l'utilisateur ne sont pas écrasées par l'option d'import CSV "Écraser les valeurs vides  
[Erreur][Import CSV] Import CSV : Lorsqu'un profil est enregistré, le dernier profil de la liste est toujours sélectionné.  
[Erreur][Import CSV] Import CSV échappé sans "caractères spéciaux  
[Erreur][Import CSV] Configuration manquante du compteur "Nombre de lignes par lot d'importation"  
[Erreur][JDisc] JDisc : La logique "ancienne" pour les bases de données n'est pas importée correctement  
[Erreur][JDisc] Les clusters importés via JDisc ne sont appariés que par leur nom  
[Erreur][Code (interne)] Les connexions de câbles ne sont pas affichées lorsque les entrées et sorties sont connectées  
[Erreur][Code (interne)] L'appel à une entrée de clé de licence avec moins de (<) caractères bloque l'utilisation de la catégorie Licences > Attribution de licence >> Clés de licence  
[Erreur][Code (interne)] Les fichiers téléchargés avec un tréma comme lettre initiale ne peuvent pas être téléchargés  
[Erreur][Code (interne)] Lors de la suppression des images d'objet, les dossiers devraient également être supprimés s'ils sont vides.  
[Erreur][Listes] L'utilisation d'un tri par défaut pour les listes d'objets provoque une erreur  
[Erreur][Listes] La sélection d'attributs pour la liste de catégories de la catégorie "attribution de logiciel" est incomplète  
[Erreur][Listes] Le tri de l'attribut "Civilité" dans la liste d'objets provoque une erreur  
[Erreur][Journal] Au lieu du nom de l'objet, le journal ne contient que l'ID  
[Erreur][Gestionnaire de rapports] L'utilisation de l'attribut "Net" de la catégorie "Adresse d'hôte" dans le gestionnaire de rapports provoque une erreur  
[Erreur][Gestionnaire de rapports] Gestionnaire de rapports : Lors de l'utilisation de la catégorie Attribution de service > Attribut Service, un message d'erreur SQL s'affiche  
[Erreur][Gestionnaire de rapports] Lors du tri par type d'objet (Général) dans le rapport, une erreur 500 est affichée  
[Erreur][Gestionnaire de rapports] La sous-catégorie "personnes" de la catégorie "organisation" ne peut pas fournir des attributs liés  
[Erreur][Gestionnaire de rapports] Gestionnaire de rapports : l'utilisation de l'appartenance à un groupe de personnes comme condition génère un message d'erreur SQL  
[Erreur][Gestionnaire de rapports] Les appareils gérés d'un contrôleur de gestion à distance ne peuvent pas être sélectionnés dans le rapport  
[Erreur][Gestionnaire de rapports] L'attribut Réseau Layer-3 attribué de la catégorie Réseau Layer-2 n'est pas sélectionnable dans les rapports  
[Erreur][Système d'autorisation] Les autorisations des groupes de personnes restent actives, même si le groupe de personnes est archivé ou supprimé  
[Erreur][Système d'autorisation] La permission de créer des objets n'est pas héritée pour l'éditeur de groupe de personnes  
[Erreur][Système d'autorisation] Erreur d'affichage pour les autorisations "archiver" et "supprimer" pour "rapports dans la catégorie  
[Erreur][Système d'autorisation] La suppression du droit LDAP supprime l'accès aux catégories définies par l'utilisateur  
[Erreur][Notifications] Les notifications peuvent être créées sans la permission de création  
[Erreur][Validation] La catégorie Contrat ne peut pas être éditée via l'édition de liste si la validation est activée pour l'attribut "Unité de temps d'exécution".  
[Erreur][Validation] La validation pour la catégorie adresse d'hôte attribue automatiquement une nouvelle adresse IP bien qu'elle devrait être bloquée  
[Erreur][CMDB] Trier par nombre d'objets dans la configuration de la liste d'objets ne trie pas correctement  
[Erreur][CMDB] Erreur d'affichage après l'annulation de l'édition de la catégorie "Général"  
[Erreur][Édition de liste] Le droit "catégories dans le type d'objet" n'autorise pas à modifier le contenu dans l'édition de liste  
[Erreur][LDAP] La connexion avec un utilisateur LDAP génère des messages d'erreur dans le fichier exceptions.log  
[Erreur][Import] Le schéma cible (catégorie : attribution de logiciel) ne peut pas être rempli via l'importation CSV  
[Erreur][Import] L'importation de l'ordinateur Active Directory n'offre pas le choix du type d'objet à importer comme  
