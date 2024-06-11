# Journal des modifications 1.10.2

[Amélioration][Outils système]               Compteur d'objets dans la vue d'ensemble du système pour le locataire actuel   
[Amélioration][Gestionnaire de rapports]     Ajout des attributs cœurs de CPU et sockets dans le gestionnaire de rapports   
[Amélioration][API]                         API : Lire, créer, mettre à jour et supprimer des instances de surveillance   
[Amélioration][API]                         Créer, lire, mettre à jour et supprimer des balises d'hôte statiques via l'API   
[Erreur][Catégories personnalisées]          Les constantes des catégories personnalisées reçoivent un préfixe codé en dur   
[Erreur][Catégories personnalisées]          Rendu différent des champs de l'éditeur HTML en mode vue et édition   
[Erreur][Catégories personnalisées]          Le dialogue + champ ne peut être enregistré qu'une seule fois dans l'administration des dialogues   
[Erreur][Catégories personnalisées]          Mauvais nettoyage du champ HTML dans les catégories personnalisées   
[Erreur][Catégories personnalisées]          Lors de la duplication d'objets, toutes les champs de dialogue + vides dans toutes les catégories personnalisées reçoivent une valeur   
[Erreur][Catégories]                        La catégorie "Tous les tickets" a maintenant un lien intuitif vers le ticket référencé   
[Erreur][Catégories]                        Les statistiques de rack ne montrent pas tous les résultats disponibles   
[Erreur][Catégories]                        Le contenu des extensions de catégorie pour les personnes est supprimé lors de la modification de la catégorie "Données principales"   
[Erreur][Catégories]                        Suppression des affectations de localisation lors de la modification de la catégorie avec des autorisations insuffisantes   
[Erreur][Catégories]                        Aucun lien cliquable vers l'instance de base de données dans le schéma de base de données   
[Erreur][Catégégories]                        Affectation incorrecte de l'adresse IP (source)   
[Erreur][Catégories]                        Valeurs par défaut non désirées   
[Erreur][Catégégories]                        Mauvaise information RAID lors de la duplication   
[Erreur][Catégories]                        La carte crypto de la catégorie reste grise malgré les attributs remplis   
[Erreur][Catégégories]                        Il n'est pas possible de connecter une VM à un cluster sans sélection d'hôte   
[Erreur][Catégégories]                        Vérifier les entrées des attributs volts, watts et ampère   
[Erreur][Catégégories]                        Les ampères affichent de nombreuses décimales   
[Erreur][Catégégories]                        La longueur des câbles n'est pas dupliquée   
[Erreur][Catégégories]                        Impossible d'enregistrer des demi-heures dans le temps de réaction   
[Erreur][Catégégories]                        Le type de connecteur n'est pas dupliqué   
[Erreur][Catégories]                        Il n'est pas possible de supprimer une instance de base de données liée dans certaines circonstances   
[Erreur][CMDB]                              L'instance de base de données affiche des schémas archivés et supprimés   
[Erreur][CMDB]                              Impossible de mettre un zéro dans l'administration des dialogues   
[Erreur][CMDB]                              Traduction manquante lors de la sélection du locataire   
[Erreur][CMDB]                              Vue de connexion de i-doit incorrecte après une déconnexion trop précoce   
[Erreur][Listes]                             Impossible de trier par catégorie ou objectif dans les listes   
[Erreur][Listes]                             Impossible d'afficher les instances de base de données dans la liste des schémas de base de données   
[Erreur][Listes]                             Impossible d'afficher les schémas de base de données dans la liste des instances de base de données   
[Erreur][Listes]                             Le tri par tags dans les listes d'objets n'est pas possible   
[Erreur][Listes]                             Les listes d'objets ne sauvegardent pas le filtre par défaut   
[Erreur][Listes]                             Impossible d'attribuer l'attribut "Appareils assignés (Appareils logiques (serveur LDEV))" aux listes   
[Erreur][Listes]                             Le filtrage de l'attribut "tags" ne fonctionne pas   
[Erreur][Listes]                             Tri incorrect des coûts dans la vue en liste des contrats   
[Erreur][Listes]                             Les adresses IP allouées ne sont pas triées correctement   
[Erreur][OCS]                               Importation des cœurs de CPU depuis OCS Inventory   
[Erreur][OCS]                               L'importation OCS fournit des titres avec des accolades au lieu de noms réels   
[Erreur][OCS]                               OCS : L'adresse IP/masque de sous-réseau n'est pas mise à jour lors de l'importation   
[Erreur][API]                               API : L'API crée un câble inutilisé lors de la création d'un nouveau port réseau physique   
[Erreur][API]                               API : Les en-têtes ne sont pas conformes à la RFC 2616   
[Erreur][API]                               Entrées de journal manquantes après la création de contenu via l'API   
[Erreur][API]                               L'API a renvoyé un mauvais ID de session après une connexion réussie   
[Erreur][API]                               API : Saisir des adresses IP via l'API entraîne des erreurs lorsqu'une validation de la catégorie "adresse hôte" est définie   
[Erreur][API]                               API : cmdb.category.create ne crée pas de valeur dans un champ de dialogue+ personnalisé (multiple)   
[Erreur][API]                               API : La requête groupée avec cmdb.category.create ou .update génère une erreur SQL pour le modèle de catégorie   
[Erreur][Codes QR]                          Code QR : La police est toujours centrée   
[Erreur][Modèles]                           Le modèle par défaut ne sera pas traité si la page d'aperçu est active   
[Erreur][Modèles]                           Les modèles prédéfinis peuvent être nettoyés, mais réapparaissent   
[Erreur][Modèles]                           Le modèle par défaut n'est pas utilisé lors de la création d'objets   
[Erreur][Notifications]                     Les notifications utilisent également des contacts archivés et supprimés   
[Erreur][Notifications]                     Faute d'orthographe dans la configuration des notifications des objets inchangés   
[Erreur][Notifications]                     Les notifications d'expiration de licence s'appliquent uniquement à la première clé de licence   
[Erreur][Relations]                         Logiciel : Le nombre d'installations ne prend pas en compte la condition   
[Erreur][Relations]                         La relation archivée "cartes liées" persiste dans la carte SIM   
[Erreur][Journal]                           Journal : Les modifications de la catégorie "attribution de contrat" sur l'attribut "Leistungsschein" ne sont pas enregistrées   
[Erreur][Journal]                           La modification de la catégorie générale sur la page d'aperçu crée des entrées de journal pour la catégorie de localisation   
[Erreur][Journal]                           La modification de la catégorie générale ne crée pas d'entrées de journal   
[Erreur][Journal]                           Mauvaise information dans le journal pour les catégories avec des valeurs par défaut   
[Erreur][Journal]                           Contenu de journal incorrect pour les emplacements   
[Erreur][Explorateur CMDB]                  Aucun tri concluant des objets dans l'explorateur CMDB   
[Erreur][Explorateur CMDB]                  Explorateur CMDB - Attributs manquants sur les profils personnalisés   
[Erreur][Gestionnaire de rapports]          Gestionnaire de rapports : La catégorie "Mot de passe" est manquante   
[Erreur][Gestionnaire de rapports]          "Condition" et "statut" sont parfois mélangés   
[Erreur][Gestionnaire de rapports]          L'attribut "passerelle standard pour le réseau" ne peut pas être utilisé dans le gestionnaire de rapports   
[Erreur][Gestionnaire de rapports]          Un message d'erreur de base de données apparaît lors de l'exécution d'un rapport avec plus d'une condition   
[Erreur][Gestionnaire de rapports]          L'option pour masquer les objets avec des relations vides ne fonctionne pas dans le gestionnaire de rapports pour les catégories personnalisées   
[Erreur][Gestionnaire de rapports]          La catégorie "Appareils virtuels" n'est pas disponible dans le gestionnaire de rapports   
[Erreur][Gestionnaire de rapports]          Gestionnaire de rapports : Le bouton de purge est affiché malgré des droits manquants   
[Erreur][Objets]                           L'aperçu avant impression affiche les mots de passe dans la catégorie "Mot de passe" cryptés   
[Erreur][Objets]                           Suppression des utilisateurs système possible   
[Erreur][Objets]                           Le type d'objet n'est pas affiché dans l'objet du navigateur de la catégorie d'attribution de service   
[Erreur][Objets]                           Le survol dans la vue en liste disparaît de la zone visible   
[Erreur][Objets]                           L'archivage dans un objet n'est pas possible   
[Erreur][JDisc]                             Les emplacements documentés manuellement sont écrasés lors de l'importation de sysLocation via JDisc   
[Erreur][JDisc]                             Importation incorrecte de la vue du châssis via JDisc   
[Erreur][JDisc]                             Filtre d'importation JDisc pour les adresses hôtes   
[Erreur][Documents]                         Mauvais format pour les contenus de date   
[Erreur][Édition de liste]                  Saisir des valeurs monétaires possible uniquement avec des points au lieu de virgules   
[Erreur][Édition de liste]                  Édition de liste : La suppression des adresses e-mail entraîne des entrées incorrectes   
[Erreur][Édition de liste]                  Les catégories à valeurs multiples ne peuvent pas être éditées via l'édition de liste   
[Erreur][Édition de liste]                  Édition de liste : Validation des attributs qui ne sont pas affichés   
[Erreur][Édition de liste]                  "Description" est validée dans l'édition de liste   
[Erreur][Édition de liste]                  Comportement incohérent des listes déroulantes DialoguePlus sous l'édition de liste   
[Erreur][CSV]                               L'attribut "Niveau de correctif" n'est pas rempli via l'importation CSV   
[Erreur][CSV]                               L'attribution spéciale des numéros de salle ne fonctionne pas dans l'importation CSV   
[Erreur][CSV]                               Importation CSV : Le numéro de salle n'est pas reconnu / trouvé   
[Erreur][CSV]                               Importation de l'état CMDB avec l'importation CSV en utilisant la console non possible   
[Erreur][Check_MK]                          L'échec du script de transfert Check_MK, car aucun fichier 'idoit_hosttags.mk' n'est créé   
[Erreur][Check_MK]                          Les balises d'hôte Check_MK dynamiques ne peuvent pas être supprimées   
[Erreur][Surveillance]                      FQDN incorrect en surveillance   
[Erreur][Paramètres CMDB]                   Sélection multiple dans la liste de configuration du type d'objet sans aucune fonction   
[Erreur][Paramètres CMDB]                   Sélection incorrecte dans la configuration du type d'objet lors de la sélection de plus d'une case à cocher   
[Erreur][Paramètres CMDB]                   Demande manquante pour le commentaire de modification   
[Erreur][Mise à jour]                       Mauvaise traduction de "locataire" (mandant) pendant le processus de mise à jour de i-doit   
[Erreur][Centre d'administration]           Le suivi des erreurs ralentit considérablement le système   
[Erreur][LDAP]                              Console : Utilisateur, mot de passe sur le rapport via la console CLI ne sont pas transférés   
[Erreur][LDAP]                              Synchronisation Open LDAP : L'UID / nom de connexion n'est pas accepté   
[Erreur][Console]                           Console : La sortie de l'utilisateur archivé dans la synchronisation LDAP a échoué   
[Erreur][Paramètres système]                Le paramètre système "Limite d'affichage des adresses hôtes" ne fonctionne pas dans les listes   
[Erreur][Paramètres système]                SSO : Les liens profonds mènent toujours au tableau de bord   
[Erreur][Importation]                      Erreur du contrôleur i-doit étant obsolète lors de l'importation de fichiers XML ou de contenu depuis OCS   
[Erreur][Outils système]                    Dépôts en ligne via HTTPS   
[Erreur][Validation]                       Le numéro d'inventaire généré automatiquement désactive la validation de cet attribut   
[Erreur][Recherche]                         Impossible de basculer entre les modes de recherche lorsque des spécifiques sont dans la liste de résultats   
[Changement][CMDB]                         Unification des connecteurs dans les informations rapides  
