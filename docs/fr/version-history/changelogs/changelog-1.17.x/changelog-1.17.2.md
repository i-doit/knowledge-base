# Journal des modifications 1.17.2

[Amélioration][Catégories]   Option pour définir si les relations avec un objet archivé doivent être affichées comme archivées ou normales  
[Amélioration][Console]      Fonctions pour nettoyer les objets via la console i-doit  
[Bug][Listes]                Les objets des relations ne sont pas affichés dans les listes d'objets  
[Bug][Listes]                La recherche dans les listes d'objets ne trouve pas les caractères spéciaux  
[Bug][Listes]                La liste d'objets pour la zone réseau affiche des informations incorrectes pour la catégorie Zone réseau > Options  
[Bug][Listes]                Lors de l'export de la liste des composants de service > Service, l'ID est entre {}  
[Bug][JDisc]                L'import JDisc importe tous les utilisateurs cloud  
[Bug][JDisc]                Certaines informations sur les systèmes d'exploitation ne sont importées que dans le champ de description  
[Bug][JDisc]                Les objets sans aucun détail ne sont pas importés via JDisc  
[Bug][JDisc]                L'utilisation de i-doit >=1.16.3 avec une version plus ancienne de JDisc (<5022) échoue en raison de l'absence de la table JDisc "ipdnsserverconfiguration"  
[Bug][Paramètres système]      La configuration du groupe LDAP standard ne se trouve pas dans les paramètres client mais dans les paramètres inter-systèmes sous Paramètres système  
[Bug][Catégories]           Le ##COUNT## Placeholder n'est pas évalué pour les sorties (connexion)  
[Bug][Catégories]           La sélection d'un schéma de nom dans la catégorie "connecteurs" utilise un mauvais paramètre par défaut  
[Bug][Catégories]           La connexion des ports logiques n'est pas enregistrée  
[Bug][Catégories]           Catégories manquantes à sélectionner pour la page d'aperçu  
[Bug][Catégories]           Le bouton "Purger" dans la catégorie "emplacement" n'est pas disponible  
[Bug][Catégories]           Le bouton "Purger" est exécuté sans demande de sécurité  
[Bug][Catégories]           Dans la catégorie "Câblage" > "connecteurs", les ID d'objets sont affichés à côté des noms de câbles  
[Bug][Catégories personnalisées]    Si la valeur d'un champ Oui/Non d'une catégorie définie par l'utilisateur est modifiée via la page d'aperçu, la valeur n'est pas enregistrée  
[Bug][Catégories personnalisées]    Les valeurs Dialog+ ne sont pas identifiées par catégorie  
[Bug][Catégories personnalisées]    La valeur par défaut des champs Oui/Non est également affichée en mode visualisation.  
[Bug][Catégories personnalisées]    La gestion des champs Oui/Non dans les catégories définies par l'utilisateur ne peut pas être modifiée  
[Bug][Paramètres CMDB]        Dans la catégorie Services, l'attribut de dialogue Alias ne peut pas être accédé via le Dialog-Admin  
[Bug][Paramètres CMDB]        Ajouter une option à la configuration du navigateur d'objets pour limiter les types d'objets créables  
[Bug][Tableau de bord]            La date n'est pas affichée en allemand sur le widget de bienvenue du tableau de bord  
[Bug][Code (interne)]      Les mots de passe enregistrés ne peuvent plus être émis  
[Bug][Code (interne)]      La liste d'objets n'est pas chargée si un objet a un '(apostrophe) dans son nom  
[Bug][Code (interne)]      Les apostrophes ne sont pas échappées  
[Bug][Code (interne)]      L'extension des catégories existantes avec des attributs via un module complémentaire ne stocke pas les données  
[Bug][Code (interne)]      Les attributs dans les catégories existantes ne sont pas fusionnés correctement lorsqu'ils sont étendus via un module complémentaire  
[Bug][Mise à jour]               La mise à jour d'une version majeure à une autre ne devrait pas être possible (>=1.16.1 > 1.17.1)  
[Bug][Importation CSV]           Importation CSV : Importation des versions de systèmes d'exploitation via la catégorie système d'exploitation  
[Bug][Gestionnaire de rapports]       La table isys_user_session peut être lue par le rapport SQL  
[Bug][Gestionnaire de rapports]       Le rapport affiche des attributs incorrects pour la catégorie "Appareils gérés"  
[Bug][Gestionnaire de rapports]       Gestionnaire de rapports : L'utilisation de Installé sur -> Système d'exploitation comme condition génère un message d'erreur SQL  
[Bug][Système d'autorisation] En définissant un rôle dans les affectations de contact, l'objet est ouvert si les droits sont insuffisants  
[Bug][OCS]                  Importation OCS : Si des catégories à valeurs multiples sont importées, il y a des doublons  
[Bug][Validation]           La validation des champs Dialog Plus uniques ne permet pas de modifier l'entrée à valeurs multiples  
[Bug][CMDB]                 Dans la catégorie Câblage > Connecteurs, la valeur configurée pour le "Schéma de nom pour les paires de sortie" n'est pas prise en compte  
[Bug][LDAP]                 Message d'erreur manquant si le chemin du fichier .ini ou le nom de fichier n'est pas saisi correctement  
[Bug][Édition de liste]         Le tri des adresses IPv4 n'est pas possible dans l'édition de liste  
[Bug][Journal]              La création d'un client crée des entrées de CPU et de mémoire dans le journal  
