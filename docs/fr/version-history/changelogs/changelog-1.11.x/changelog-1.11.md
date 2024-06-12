# Journal des modifications 1.11

[Tâche][Code (interne)]                         Détacher l'extension "Événements" du noyau  
[Tâche][Import]                                 Suppression de l'importation de loginventory incl. DB, module, etc.  
[Amélioration][CMDB]                            Le menu Extras ne disparaît pas en cliquant en dehors de celui-ci  
[Amélioration][CMDB]                            Rendre les onglets 'recherche' et 'rapports' disponibles pour les navigateurs avec deux colonnes  
[Amélioration][CMDB]                            Sélectionner le type d'objet standard des navigateurs d'objets  
[Amélioration][CMDB]                            Colonnes personnalisables et types d'objets dans le navigateur d'objets  
[Amélioration][Recherche]                        Recherche récursive dans le chemin d'accès de l'emplacement (activable dans les paramètres du locataire)  
[Amélioration][Recherche]                        La recherche floue a été supprimée  
[Amélioration][Recherche]                        Ajout d'alias à l'index de recherche  
[Amélioration][Catégories]                      Bouton pour recommander des mots de passe dans la catégorie des mots de passe  
[Amélioration][Catégories]                      Colonnes définissables par l'utilisateur dans les listes de catégories multivaluées (comme dans les listes d'objets)  
[Amélioration][Catégories]                      Visualisation améliorée des châssis dans le rack  
[Amélioration][Catégories]                      Changer les colonnes des catégories à valeurs multiples  
[Amélioration][CSV]                             Importation CSV : correspondance d'objets en utilisant l'ID d'objet  
[Amélioration][CSV]                             Affectation de contact via adresse e-mail ou nom d'utilisateur non possible dans l'importation CSV  
[Amélioration][Listes]                          Disponibilité de l'attribut "capacité" des RAIDs pour la vue en liste des systèmes de stockage  
[Amélioration][Listes]                          Listes d'objets : Afficher l'appartenance à un groupe de personnes  
[Amélioration][Listes]                          Affichage des débuts et fins liés des contrats dans les listes d'objets  
[Amélioration][Listes]                          Utilisation d'un champ de liste déroulante dans le filtre de liste d'objets pour les champs de liste déroulante et de dialogue-plus  
[Amélioration][Listes]                          Afficher la variante et le numéro de version d'une application en vue liste  
[Amélioration][Listes]                          Afficher le nombre de membres du cluster  
[Amélioration][Listes]                          Listes : Enregistrer les tris après les attributs  
[Amélioration][Listes]                          Listes d'objets : Filtrer après les champs de dialogue (plus)  
[Amélioration][Listes]                          Tête de légende fixe dans les listes d'objets  
[Amélioration][Objets]                         Navigateur d'objets : colonnes personnalisables comme dans les vues en liste  
[Amélioration][Objets]                         Galerie d'images : Tri par nom etc.  
[Amélioration][Gestionnaire de rapports]        Regrouper les résultats du gestionnaire de rapports au lieu d'afficher plusieurs lignes  
[Amélioration][Gestionnaire de rapports]        Période de temps pouvant être sélectionnée comme condition  
[Amélioration][Catégories personnalisées]       Sélection des types d'objets affichés dans le navigateur d'objets de catégorie personnalisée  
[Amélioration][Code (interne)]                 Compatibilité PHP 7.1  
[Bogue][Recherche]                              La recherche n'indexe pas le modèle et le fabricant du modèle de la catégorie  
[Bogue][Recherche]                              Réindexer via Console pour une erreur de base de données  
[Bogue][Recherche]                              Après avoir dupliqué un objet et changé son type d'objet, la recherche affichera deux résultats  
[Bogue][Recherche]                              Réorganisation de l'indexation de la recherche : Les champs de dialogue + ne sont pas indexés  
[Bogue][Recherche]                              Changer le type d'objet entraîne un index de recherche corrompu  
[Bogue][Recherche]                              Recherche : Les SYSID du type d'objet "Câble" ne sont pas pris en compte pour la recherche  
[Bogue][Recherche]                              FQDN ne peut pas être trouvé via la recherche  
[Bogue][Recherche]                              Les objets supprimés/archivés ne peuvent pas être distingués dans la recherche  
[Bogue][Recherche]                              Les catégories personnalisées ne peuvent être trouvées qu'en utilisant une recherche approfondie  
[Bogue][Recherche]                              Le contenu des champs de description est conservé dans l'index de recherche  
[Bogue][Recherche]                              ouvert : L'indexation complète s'arrête avec une fuite de mémoire  
[Bogue][Recherche]                              Changer le type d'objet crée une entrée dupliquée dans l'index de recherche  
[Bogue][Recherche]                              Index de recherche : Une erreur s'est produite lors de la régénération de l'index de recherche avec une grande base de données  
[Bogue][Listes]                                 Mode d'édition en un clic  
[Bogue][Listes]                                 Tri : La sous-catégorie "Installation" de la catégorie "Application" n'est pas possible  
[Bogue][Listes]                                 Tri : La sous-catégorie "Clé de licence" Le tri conduit à une présentation incorrecte  
[Bogue][Listes]                                 Trier la sous-catégorie "Fichiers attribués" de la catégorie "Fichiers" n'est pas possible  
[Bogue][Listes]                                 Liste d'objets : Le tri de la catégorie de sauvegarde pour "en cours de sauvegarde" entraîne une erreur SQL  
[Bogue][Listes]                                 Catégorie "Affectation de contact" Le champ "Adresse e-mail" affiche une fonction  
[Bogue][Listes]                                 Erreur SQL dans la vue en liste lors de la recherche dans tous les champs  
[Bogue][Listes]                                 Widget du tableau de bord : La liste d'objets ne peut pas être configurée  
[Bogue][Listes]                                 Vue liste non visible sur les événements "hooks / historique"  
[Bogue][Listes]                                 Vue liste : Changer la largeur de colonne dans les listes entraîne une liste inutilisable  
[Bogue][Listes]                                 JDISC : La case à cocher d'édition sera supprimée dans la configuration / profils  
[Bogue][Listes]                                 Vue impression dans les listes d'objets sans fonction  
[Bogue][Listes]                                 Tri incorrect dans "Nombre de champs définis par l'utilisateur"  
[Bogue][Listes]                                 Les objets supprimés sont utilisés pour le comptage des adresses IP utilisées  
[Bogue][Listes]                                 Liste d'objets : L'option "Afficher les données groupées en tant que" ne peut pas être enregistrée comme standard  
[Bogue][Listes]                                 Erreur lors du tri pour "catégorie" de la catégorie "Général"  
[Bogue][Listes]                                 La constante de langue est affichée dans la configuration de la liste d'objets  
[Bogue][Listes]                                 Attributs "Taille de la grille avant" et "Taille de la grille arrière" non disponibles pour la vue en liste d'objets  
[Bogue][Listes]                                 Le tri des VLAN est alphanumérique  
[Bogue][Listes]                                 Impossible de filtrer après l'état du contrat  
[Bogue][Listes]                                 La configuration de la liste d'objets affiche toujours la catégorie 'Applications'  
[Bogue][Listes]                                 Le filtre ne trouve pas les données fournies dans les champs de dialogue+  
[Bogue][Check_MK]                              Les titres des balises Check_MK avec des guillemets posent problème lors de la création de idoit_hosttags.mk  
[Bogue][Check_MK]                              Check-MK : Désinstallation de l'extension possible  
[Bogue][Catégories]                            L'attribut 'Chemin de sauvegarde' n'est pas disponible dans la catégorie 'Sauvegarde'  
[Bogue][Catégories]                            Enregistrer une entrée dans la catégorie "Ligne VoIP CUCM" entraîne un message d'erreur SQL  
[Bogue][Catégories]                            Les périphériques logiques sont affichés malgré leur archivage  
[Bogue][Catégories]                            Le placeholder %adresseip% dans l'accès à la catégorie contient également l'hôte i-doit  
[Bogue][Catégories]                            Les entrées de dialogue + archivées sont sélectionnables dans l'état Normal  
[Bogue][Catégories]                            Le niveau de correctif n'est pas affiché dans la catégorie 'Affectation de logiciel'  
[Bogue][Catégories]                            La catégorie spécifique "affectation de licence" est nécessaire dans i-doit open mais ne peut pas être utilisée  
[Bogue][CMDB]                                  Navigateur d'objets : Passage de "Vue d'objet" à "Recherche", "Emplacement non" ou "Rapports"  
[Bogue][CMDB]                                  Les mots de passe mal déchiffrés entraînent des rapports vides  
[Bogue][CMDB]                                  La pagination ne fonctionne pas dans Internet Explorer 11  
[Bogue][CMDB]                                  Navigateur d'objets : Problèmes de performances lors de l'appel du navigateur d'objets  
[Bug][CMDB]                                     Le menu déroulant des dates est affiché de manière transparente lors de plusieurs clics  
[Bug][CMDB]                                     Valeurs incohérentes pour tmp_table_size et max_heap_table_size s'écrasent mutuellement  
[Bug][CMDB]                                     Duplication : La confirmation en appuyant sur la touche ENTRÉE ne dupliquera pas l'objet mais rechargera la page  
[Bug][CMDB]                                     Tri incohérent des filtres de service  
[Bug][Édition de masse]                             Le changement en masse écrase le contenu des catégories personnalisées avec des champs vides, même si l'option d'ignorer les champs vides est activée  
[Bug][Édition de masse]                             Changement en masse : les modèles existants ne proposent pas le téléchargement  
[Bug][Édition de masse]                             Affichage incorrect des attributs modifiés de la catégorie "monitoring" dans les changements en masse/modèles  
[Bug][LDAP]                                     La synchronisation LDAP entraîne des erreurs d'exception  
[Bug][LDAP]                                     L'affichage de la licence dans l'aperçu des licences est incorrect  
[Bug][LDAP]                                     Synchronisation LDAP : La sortie du test de connexion est incorrecte  
[Bug][Objets]                                  Navigateur d'objets : La catégorie "QinQ CE-VLAN" L'attribut "Assigned SP-VLAN" ignore la configuration  
[Bug][Objets]                                  Navigateur d'objets : Les catégories manquantes dans un type d'objet peuvent ne pas afficher les objets  
[Bug][Objets]                                  Navigateur d'objets : La catégorie "QinQ CE-VLAN" ne affiche pas les "réseaux de couche 2"  
[Bug][Objets]                                  Champ d'attribution : l'objet source est égal à zéro  
[Bug][Objets]                                  QCW : La suppression finale d'un groupe de types d'objets n'est pas possible  
[Bug][Objets]                                  L'ouverture de la page d'aperçu saute au dernier champ "sur le navigateur d'objets"  
[Bug][Objets]                                  Le numéro d'inventaire automatique entraîne des duplications en double  
[Bug][Objets]                                  Sommation incorrecte des objets à licencier  
[Bug][Objets]                                  Calcul incorrect de la prochaine date d'annulation possible  
[Bug][Objets]                                  Avertissement JavaScript sur les champs Dialog+  
[Bug][Objets]                                  Le changement de statut d'un champ de dialogue avec un parent entraîne une erreur  
[Bug][Objets]                                  Empêcher la modification de plusieurs entrées dans les catégories à valeurs multiples  
[Bug][Objets]                                  Châssis : les objets ne sont assignables qu'une seule fois  
[Bug][Objets]                                  La vue de l'armoire n'est pas correcte sur le châssis  
[Bug][Objets]                                  Catégorie : La machine virtuelle est la catégorie inverse sans fonction  
[Bug][Objets]                                  Vue d'ensemble des ports de la catégorie (empilage) non visible  
[Bug][Objets]                                  Réseau de couche 2 : Les ports attachés ne peuvent pas être purgés  
[Bug][Catégories personnalisées]                        Erreur avec l'information "ID" dans les catégories personnalisées  
[Bug][Catégories personnalisées]                        La catégorie personnalisée inverse n'est pas présentée en gras lorsque le rapport correspondant a des résultats  
[Bug][Catégories personnalisées]                        Dialog+ sélection multiple ID au lieu du nom si celui-ci est égal à zéro  
[Bug][Catégories personnalisées]                        Dans le texte d'aide, aucun umlaut n'est affiché  
[Bug][Catégories personnalisées]                        Catégorie personnalisée : L'attribut Dialog+(Multiselect) ne peut pas être supprimé  
[Bug][Paramètres système]                          Les clés de paramètres système sont limitées à 100 caractères  
[Bug][Gestionnaire de rapports]                           Gestionnaire de rapports : Le tri des rapports entraînera des boutons non fonctionnels  
[Bug][Gestionnaire de rapports]                           Gestionnaire de rapports : Microsoft Internet Explorer ne affiche pas une sortie de rapport  
[Bug][Gestionnaire de rapports]                           Gestionnaire de rapports : La duplication d'un rapport n'est pas possible  
[Bug][Gestionnaire de rapports]                           Gestionnaire de rapports : L'édition / la sauvegarde d'un rapport n'est pas possible  
[Bug][Gestionnaire de rapports]                           Gestionnaire de rapports : Sortie de la constante de langue si la valeur est 0  
[Bug][Gestionnaire de rapports]                           Les attributs de la catégorie "CPU" sont entièrement disponibles pour les rapports  
[Bug][Gestionnaire de rapports]                           Les attributs "Taille de la grille avant" et "Taille de la grille arrière" ne sont pas disponibles dans le Gestionnaire de rapports  
[Bug][Gestionnaire de rapports] Erreur lors de l'utilisation de certains attributs dans le gestionnaire de rapports  
[Bug][Gestionnaire de rapports] Lors de l'exécution d'un rapport variable, rien ne se passe  
[Bug][Console] Console : "Appel à la fonction membre" après l'importation OCS  
[Bug][API] API : Entrées de catégorie multiples dans les catégories personnalisées  
[Bug][Open-Version] i-doit Open : zone principale sans fonction  
[Bug][Installation] Vérification incorrecte de la version de MySQL lors de l'installation/mise à jour  
[Bug][Installation] Vérification améliorée des versions lors de la mise à jour et de l'installation  
[Bug][Édition de liste] L'édition de liste ne tient pas compte du nettoyage des données  
[Bug][Édition de liste] Édition de liste : La constante de langue est affichée dans la catégorie Emplacement  
[Bug][Édition de liste] Édition de liste : La sélection individuelle d'un objet n'est pas possible pour plusieurs objets  
[Bug][Édition de liste] Édition de liste : L'édition de la catégorie "adresse de l'hôte" est affichée de manière incorrecte  
[Bug][Édition de liste] Édition de liste : Enregistrer la catégorie "fournisseur/consommateur d'électricité" libère les connexions  
[Bug][Édition de liste] Édition de liste : Filtrer par affectation de contact par titre d'objet n'est pas possible  
[Bug][Édition de liste] Édition de liste : l'emplacement n'est pas possible  
[Bug][Édition de liste] La fonction de suggestion ne s'ouvre pas correctement dans les champs du navigateur d'objets  
[Bug][Édition de liste] L'édition de liste de la catégorie CONNEXIONS WAN montre une sauvegarde réussie, mais aucune valeur n'est modifiée  
[Bug][OCS] Importation OCS : La journalisation via l'interface graphique est manquante  
[Bug][OCS] Erreur de base de données lors de l'importation OCS  
[Bug][Mise à jour] Erreur de base de données dans le processus de mise à jour  
[Bug][Journal] Journal : la vue en liste des entrées du journal superpose les champs si le contenu est trop long  
[Bug][Journal] Journal : les entrées archivées ne peuvent pas être visualisées  
[Bug][Journal] Barre de défilement horizontale manquante dans le journal  
[Bug][Journal] Journal : La catégorie d'allocation "allocation de logiciel" ne fait aucune entrée en cas de modifications  
[Bug][JDisc] JDISC : L'édition/création d'un profil entraîne un message d'erreur de base de données  
[Bug][JDisc] Si vous saisissez une valeur dans la catégorie des attributs personnalisés JDisc sans attribut, un message d'erreur s'affiche  
[Bug][Relations] Relations : Les pondérations sont manquantes dans les relations à éditer  
[Bug][Relations] Relations : liste des relations incomplète  
[Bug][Explorateur CMDB] Explorateur CMDB : Gestion des profils incorrecte  
[Bug][Outils système] tmp_table_size est affiché deux fois dans l'aperçu du système  
[Bug][Notifications] Notifications : Sortie incorrecte des objets pour certains groupes de personnes assignés  
[Bug][Notifications] Notifications : Les catégories personnalisées sont manquantes pour la sélection dans les modèles d'e-mail  
[Bug][Système d'autorisation] Les rapports peuvent être créés dans toutes les catégories de rapports, même sans autorisation  
[Bug][Système d'autorisation] Le navigateur de fichiers ignore le système de droits  
[Bug][Système d'autorisation] Système de droits : Le paramètre Tout ne s'applique pas aux "Catégories dans le type d'objet" dans l'édition de liste  
[Bug][Système d'autorisation] Purger tous les objets impliqués dans un ensemble d'autorisations laisse un droit vide  
[Bug][Événements] Événements : Ne fournissent pas de changements identifiables de manière unique  
[Bug][CSV] Importation CSV : La correspondance des groupes LDAP entraîne une importation incorrecte  
[Bug][CSV] L'importation CSV génère une erreur fatale PHP  
[Bug][Modèles] Un grand nombre de modèles/changements de masse de modèles empêchera l'affichage de tous les modèles/changements de masse de modèles dans la sélection  
[Bug][Tableau de bord] Le widget "liste d'objets" affiche l'ID au lieu de l'icône de statut en direct  
[Bug][XML] L'exportation XML ne sauvegarde pas les informations sur la catégorie "Machine virtuelle"  
[Bug][Importation] La logique de synthèse entraîne diverses erreurs  
[Bug][Validation] La validation des balises ne fonctionne pas dans l'édition de liste  
[Bug][Paramètres utilisateur] Les umlauts dans la connexion de l'utilisateur entraînent des connexions incorrectes  
[Bug][Contrôleur] L'index complet force le paramètre PHP "memory_limit" à 4 gigaoctets  
