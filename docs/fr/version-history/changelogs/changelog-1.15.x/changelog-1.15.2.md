# Journal des modifications 1.15.2

[Amélioration][Système d'autorisation] La création d'objets de certains types d'objets est possible malgré l'autorisation manquante  
[Amélioration][OCS] Compatibilité avec les nouvelles versions OCS  
[Bogue][Paramètres utilisateur] Validation des mots de passe de connexion  
[Bogue][Notifications] Les notifications ne sont pas envoyées aux membres d'un groupe de personnes  
[Bogue][Notifications] Les notifications n'envoient pas d'e-mails aux groupes, même s'ils correspondent à l'attribution de rôle  
[Bogue][Notifications] Notification : Expiration d'une période de certificat - Malgré la valeur seuil, les certificats en dehors de la valeur seuil sont également affichés  
[Bogue][Notifications] Les liens dans les notifications sont créés de manière incorrecte  
[Bogue][Notifications] Les notifications sont envoyées, même si les objets observés ne correspondent pas aux conditions  
[Bogue][Relations] Le champ "Affectation de réseau de couche 2" dans la catégorie "Réseau" des objets "Réseau de couche 3" ne crée pas de relation avec l'objet "Réseau de couche 2"  
[Bogue][Listes] Liaison fabricant et modèle dans les filtres de liste d'objets  
[Bogue][Listes] Le tri des champs oui/non dans les listes d'objets génère des erreurs SQL  
[Bogue][Export] L'exportation CMDB via XML ne peut pas être importée dans i-doit  
[Bogue][Code (interne)] ISMS : Le rapport avec les attributs "Probabilité" et "Probabilité après traitement" montre toujours "Probabilité"  
[Bogue][Code (interne)] Les câbles "lâches" ne peuvent pas être connectés aux connecteurs existants  
[Bogue][Code (interne)] Le type d'objet Configuration n'est pas enregistré  
[Bogue][Code (interne)] La sélection des attributs liés n'est pas chargée/ouverte lorsqu'un espace réservé existant est modifié  
[Bogue][Code (interne)] Le tri dans le navigateur de liste des champs Dialog-Plus trie sensible à la casse  
[Bogue][Code (interne)] L'info-bulle est toujours créée en bas à droite de l'objet lors du survol de la souris  
[Bogue][Code (interne)] La base de données liée dans la catégorie base de données ne renvoie pas à la base de données  
[Bogue][Catégories] La sélection pour le SGBD de la catégorie "Instance / Base de données Oracle" montre des entrées archivées/supprimées  
[Bogue][Catégories] Les informations sur le certificat de réalisation sont réinitialisées lors de la modification  
[Bogue][Catégories] La version du logiciel du SGBD n'est pas incluse dans la sélection  
[Bogue][Catégories] Mise à jour automatique de l'état et du statut CMDB des contrats obsolètes  
[Bogue][Catégories] La vue en liste de la catégorie Réseau > Vue d'ensemble des ports montre les réseaux VLAN de couche 2 et de couche 3 non séparés par des lignes  
[Bogue][Catégories] La catégorie "Abonnements attribués" en arrière-plan ne montre aucune entrée  
[Bogue][Catégories] Les bases de données utilisées pour les affectations de logiciels ne sont pas affichées dans l'installation de logiciels  
[Bogue][Catégories] La catégorie "Composants de poste de travail" montre des éléments archivés et supprimés  
[Bogue][Gestionnaire de rapports] Certains attributs provoquent beaucoup de pages vides dans les résultats du rapport  
[Bogue][Gestionnaire de rapports] L'utilisateur sans droits pour modifier tous les rapports d'une catégorie ne peut pas modifier un rapport de la liste  
[Bogue][Gestionnaire de rapports] Refonte de tous les attributs de la sous-catégorie "Bases de données" du dossier "Bases de données" pour le Gestionnaire de rapports.  
[Bogue][Gestionnaire de rapports] Gestionnaire de rapports : Le diagramme ASCII d'exportation PDF n'est pas affiché correctement  
[Bogue][Gestionnaire de rapports] Gestionnaire de rapports : Condition Emplacement:Assemblage > Vertical ne peut pas être sélectionnée  
[Bogue][Gestionnaire de rapports] Rapports : Les rapports avec une sortie avec l'information d'emplacement : informations de montage ignorent la valeur "Vertical"  
[Bogue][Import] Erreur de base de données dans l'importation OCS  
[Bogue][Import] Import CSV : Le système d'exploitation et la version ne sont pas attribués  
[Bogue][Import] Attribuer les attributs d'importation CSV en tant qu'objets liés, avec une sélection automatique du type d'objet ne fonctionne pas correctement  
[Bogue][JDisc] Le contenu de la catégorie "emplacement" est écrasé/supprimé lors de l'exécution d'une importation JDisc  
[Bogue][JDisc] JDISC : L'emplacement des objets importés dans des boîtiers avec des objets non positionnés sera supprimé  
[Bogue][Édition de liste] Champ pour la valeur de préavis de contrat manquant dans l'édition de liste  
[Bogue][Catégories personnalisées] Le contenu des catégories de valeurs multiples personnalisées n'est pas affiché sur la page d'aperçu  
[Bogue][Journal] Aucune entrée de journal n'est créée pour l'objet connecté lorsqu'une connexion est créée via la catégorie Réseau > Port  
[Bogue][Journal] Le journal contient l'ID au lieu du nom de l'objet d'un emplacement après modification  
[Bogue][H-Inventory] Erreur lors de l'importation de fichiers XML h-inventory  
[Bogue][Importation CSV] Utilisation de la mémoire pour l'importation CSV  
[Bogue][Importation CSV] Importation CSV : Catégorie Bases de données > Attributs de base de données DBMS attribués manquants  
[Bogue][Importation CSV] Importation CSV : Attribut manquant Importation Serveur > DBMS > DBMS  
[Bogue][Importation CSV] Importation CSV : Type d'objet > Catégorie spécifique du schéma de base de données > Le schéma de base de données n'est pas disponible pour l'importation  
[Bogue][Installation] Le script d'installation n'utilise pas l'utilisateur de base de données donné pour la configuration  
[Bogue][Installation] La vérification du système d'exploitation de l'installation i-doit marque les systèmes d'exploitation non pris en charge comme OK  
[Bogue][Recherche] Recherche d'adresse hôte -> Alias montre la constante de langue de l'alias  
