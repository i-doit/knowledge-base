# Journal des modifications 1.16.3

[Bug][Notifications] Notification : Expiration d'une période de certificat - Malgré la valeur seuil, les certificats en dehors de la valeur seuil sont également affichés  
[Bug][Notifications] Notifications : Les destinataires reçoivent tous les objets même s'ils ne sont pas sélectionnés comme contacts  
[Bug][Listes] Problèmes avec le bouton de suppression et de purge dans les listes d'objets  
[Bug][Listes] L'attribut "Membres" n'est pas disponible pour les groupes de personnes dans les listes  
[Bug][Importation CSV] Importation CSV : 'Commencer à la ligne' et 'Importer les lignes'  
[Bug][Importation CSV] Importation CSV : Importation des versions du système d'exploitation (et du niveau de correctif) via la catégorie du système d'exploitation  
[Bug][Importation CSV] Le nombre d'objets créés ou mis à jour ne montre pas le nombre total correct  
[Bug][Importation CSV] Lors de l'attribution d'un objet via l'importation CSV, l'attribut ID d'objet ne peut pas être utilisé  
[Bug][Importation CSV] Erreur lors de l'importation d'une affectation de contact via l'importation csv  
[Bug][Importation CSV] L'attribut "Type" de la catégorie "certificat" n'est pas rempli via l'importation csv  
[Bug][Catégories] Le domaine de recherche est effacé lorsque le réseau est modifié et enregistré  
[Bug][Catégories] L'attribut "Bases de données utilisées" n'est pas enregistré correctement  
[Bug][Catégories] L'option de cliquer sur une ligne n'ouvre pas l'objet dans les catégories d'affectation  
[Bug][Catégories] Les types d'objets avec la catégorie spécifique 'Châssis' ne sont pas affichés correctement dans les armoires  
[Bug][Catégories] Les consommateurs d'énergie archivés sont ajoutés à la consommation d'énergie d'une baie  
[Bug][Catégories] Les cartes SIM ne sont pas chargées correctement en cliquant sur le lien de l'objet  
[Bug][Catégories] Le Placeholder ##COUNT## n'est pas évalué pour les sorties (connexion)  
[Bug][Code (interne)] Dialog+ Admin : L'attribut Réseau > Port > Standard n'est pas affiché  
[Bug][Code (interne)] Le mot e-mail n'est pas correctement orthographié dans i-doit  
[Bug][Code (interne)] La légende de la liste IP des réseaux de couche 3 ne défile pas sans erreurs et court à l'infini  
[Bug][Code (interne)] Faute d'orthographe : Administration > Paramètres CMDB > Configuration des types d'objets >> Types d'objets orphelins  
[Bug][Code (interne)] Mauvaise logique de validation pour les propriétés de zone de texte dans l'API  
[Bug][Console] Erreur lors de l'utilisation de la commande de console i-doit search-index  
[Bug][Catégories personnalisées] Lorsque les objets sont dupliqués, les catégories définies par l'utilisateur restent vides  
[Bug][Catégories personnalisées] L'ajout de nouvelles valeurs dans les champs de sélection multiple de Dialog+ supprime les entrées existantes  
[Bug][Catégories personnalisées] La catégorie personnalisée avec l'ID 31 n'a pas de champ de commentaire  
[Bug][Catégories personnalisées] Les champs Oui Non sont affichés après l'enregistrement - avec -1  
[Bug][Paramètres système] La configuration du code-barres n'existe plus  
[Bug][Gestionnaire de rapports] La sélection d'attributs identiques à partir d'objets assignés différents fait qu'ils manquent dans le rapport  
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : Le rapport ne montre pas de résultats bien que le bouton Vérifier montre des relations  
[Bug][Gestionnaire de rapports] Les coûts d'investissement sont toujours vides dans les résultats du rapport  
[Bug][Gestionnaire de rapports] Les rapports de variables dupliquées ne sont pas marqués comme des rapports de variables, tant que le placeholder n'est pas modifié ou qu'un nouveau placeholder est ajouté  
[Bug][Gestionnaire de rapports] Le texte de description d'un champ de placeholder ne change pas lorsqu'un type de placeholder différent est sélectionné  
[Bug][Gestionnaire de rapports] La description du rapport est tronquée lors de l'utilisation de certains caractères spéciaux  
[Bug][Gestionnaire de rapports] Le rapport SQL n'est pas affiché  
[Bug][Gestionnaire de rapports] La date de création et la date de dernière modification ne sont pas des champs de date pour les conditions dans le gestionnaire de rapports  
[Bug][Gestionnaire de rapports] Les points de connexion dans le gestionnaire de rapports génèrent un message d'erreur  
[Bug][Gestionnaire de rapports] Les bases de données utilisées pour les affectations de logiciels en tant qu'attribut de sortie pour les rapports génèrent des erreurs  
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : Message d'erreur SQL lors de l'utilisation de l'attribut Objets assignés (Objets assignés (Contrat))  
[Bug][Gestionnaire de rapports] Mauvais nom pour la catégorie de dispositifs virtuels dans le gestionnaire de rapports  
[Bug][Gestionnaire de rapports] Les rapports avec des filtres de sortie imbriqués ne montrent que les ID d'objets  
[Bug][Documents] Les terminaux assignés des postes de travail assignés ne sont pas affichés dans le document  
[Bug][Installation/Mise à jour/Licence de la console de base] La commande auth-cleanup supprime les droits  
[Bug][Système d'autorisation] Les paramètres chargés dans la configuration des droits sont réinitialisés à une valeur par défaut lors de l'ouverture à nouveau de la configuration  
[Bug][JDisc] Importation JDisc : L'importation de Système d'exploitation > Version ne fonctionne pas correctement  
[Bug][JDisc] L'importation de moniteurs via JDisc provoque des connexions dupliquées  
[Bug][JDisc] L'importation JDisc attribue deux fois les adresses IP  
[Bug][JDisc] JDISC : Le serveur DNS n'est pas défini lors de l'importation  
[Bug][JDisc] Le SGBD est affiché avec et sans version dans la catégorie "Bases de données" du dossier  
[Bug][OCS] L'importation OCS vide toutes les catégories malgré allCatsOverwrite=0  
[Bug][Configuration du type d'objet] Message d'erreur lors de l'activation des catégories personnalisées  
[Bug][Édition de masse] La suppression d'un objet via un changement de masse ne modifie pas la date de dernière modification  
[Bug][Édition de masse] Les catégories définies par l'utilisateur sont ignorées lors des modifications de masse à partir de modèles  
[Bug][Modèles] Les catégories personnalisées sont ignorées lors de la création d'objets à partir de modèles  
[Bug][Importation] L'importation d'ordinateurs Active Directory n'affiche que 10 objets  
[Bug][Édition de liste] Le tri dans l'édition de liste en utilisant le titre de l'objet n'est pas possible  
[Bug][Recherche] Message d'erreur SQL lors de l'utilisation de la recherche s'il y a beaucoup d'espaces  
[Bug][Recherche] La création d'un index de recherche via la console génère un message d'erreur  
[Bug][Importation de câblage] L'importation de câblage ne peut pas identifier les entrées et les sorties si le titre est le même  
[Bug][LDAP] Synchronisation LDAP : Vérification des droits suffisants pour les affectations de groupes de personnes  
