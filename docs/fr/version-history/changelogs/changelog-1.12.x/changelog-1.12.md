# Journal des modifications 1.12

[Tâche][Export]                               La mise en cache dans "isys_export_helper" devrait être commutable  
[Amélioration][Check_MK]                      Add-oniser Check_MK  
[Amélioration][Mise à jour]                   Avertissement PHP lors de la mise à jour  
[Amélioration][JDisc]                         JDisc : Balayage facultatif des périphériques via "IP/FQDN"  
[Amélioration][Configurer Apache HTTPD, PHP & Co.]Supprimer les règles de réécriture d'URL obsolètes  
[Amélioration][Configurer Apache HTTPD, PHP & Co.]Supprimer les paramètres liés à Apache 2.2 des fichiers .htaccess  
[Amélioration][Configurer Apache HTTPD, PHP & Co.]Supprimer les paramètres PHP du fichier .htaccess  
[Amélioration][Configurer Apache HTTPD, PHP & Co.]Supprimer le paramètre "FollowSymlinks" du fichier .htaccess  
[Amélioration][Configurer Apache HTTPD, PHP & Co.]Regrouper tous les fichiers .htaccess en un seul  
[Amélioration][Catégories personnalisées]      Les attributs devraient être modifiables uniquement via l'API avec la nouvelle option "ApiOnly"  
[Amélioration][Catégories personnalisées]      Nouveau type de champ pour les catégories personnalisées  
[Amélioration][LDAP]                          LDAP : Synchronisation de la connexion en option par l'utilisateur de synchronisation au lieu de l'utilisateur i-doit  
[Amélioration][API]                           Intégration de "?load=api_properties" dans la configuration i-doit  
[Amélioration][Recherche]                      Renouvellement de l'index de recherche via l'interface utilisateur  
[Amélioration][Console]                       Commande pour remplir les groupes dynamiques  
[Amélioration][Code (interne)]                Compatibilité avec PHP 7.2  
[Amélioration][Édition de liste]              Édition de liste - catégorie 'Système d'exploitation' : Impossible de sélectionner des variantes  
[Amélioration][CMDB]                          Catégorie adresse hôte : l'explorateur d'objets devrait afficher soit des réseaux IPv4, soit IPv6  
[Amélioration][Nagios]                        Add-oniser Nagios  
[Bogue][Édition de liste]                     L'édition de liste pour la catégorie adresse hôte manque de l'attribut "allocation d'adresse"  
[Bogue][Édition de liste]                     Édition de liste : Activer l'attribution de fichiers de catégorie  
[Bogue][Édition de liste]                     Appliquer des valeurs pour les catégories de tous les objets qui contiennent déjà des données dans cette catégorie particulière  
[Bogue][Édition de liste]                     L'édition de liste n'est plus disponible  
[Bogue][Édition de liste]                     L'édition de liste est réinitialisée en cliquant sur la configuration du type d'objet  
[Bogue][Édition de liste]                     La suggestion de localisation dans l'édition de liste est cachée derrière l'élément  
[Bogue][Édition de liste]                     Corriger les icônes dans l'édition de liste  
[Bogue][Édition de liste]                     Lors de l'édition de listes, VOUS DEVEZ faire une sélection dans les champs Oui/Non  
[Bogue][Édition de liste]                     L'attribut Allocation d'adresse (Catégorie Adresse hôte) n'est pas disponible dans l'édition de liste  
[Bogue][Édition de liste]                     L'attribut 'Numéro de version (niveau de correctif)' n'est pas disponible dans l'édition de liste de la catégorie 'Affectation de logiciel'  
[Bogue][Édition de liste]                     Édition de liste : La catégorie "Stockage de masse local" et les sous-catégories manquent  
[Bogue][Édition de liste]                     Impossible d'utiliser l'édition de liste sur la catégorie "SLA"  
[Bogue][Check_MK]                             Séparation du contenu Check_MK et Check_MK 2.0  
[Bogue][Listes]                               Les attributs de la catégorie "stockage" ne peuvent pas être sélectionnés pour l'affichage dans les listes d'objets  
[Bogue][Listes]                               Implémenter un comportement cohérent pour les suggestions de filtre dans les listes d'objets  
[Bogue][Listes]                               Les catégories à valeurs multiples occupent un espace plus important que nécessaire, même s'il n'y a qu'une seule entrée  
[Bogue][Listes]                               Le bouton d'édition est manquant dans les modèles de modifications en masse  
[Bogue][JDisc]                                Problèmes d'utilisation du service web JDisc  
[Bogue][JDisc]                                JDISC : Le filtrage des ports logiques a échoué  
[Bogue][JDisc]                                JDisc : Mauvaise attribution de cluster sur les systèmes invités  
[Bogue][JDisc]                                Importation JDisc : Les licences de système d'exploitation ne sont pas attribuées lors d'une importation  
[Bogue][Workflows]                            Une page vide s'affiche après l'accès à l'extension de workflow dans i-doit 1.12  
[Bogue][Objets]                              Lorsque de nouveaux clients sont créés, un module de mémoire est d'abord créé lorsque la catégorie mémoire est affichée dans l'aperçu  
[Bogue][Objets]                              La sous-catégorie "systèmes invités" de la catégorie "hôte virtuel" effectue une attribution mixte à une vue incohérente  
[Bogue][Paramètres CMDB]                      Paramètres généraux : Valeur par défaut "Désactiver les commentaires du journal"  
[Bogue][Paramètres CMDB]                      Le tri dans le dialogue d'administration après modification n'est pas possible  
[Bogue][Export]                              L'assistant d'exportation génère un export XML corrompu qui ne peut pas être affiché  
[Bogue][Relations]                           Correction de l'erreur de base de données lors du choix d'une relation  
[Bogue][Relations]                           Le type d'objet en tant que maître de relation ne définit que des relations qui n'ont pas de direction fixe  
[Bogue][Mise à jour]                          La mise à jour i-doit ne devrait être accessible que pour les membres du groupe admin  
[Bogue][Mise à jour]                          Corriger les avertissements concernant des paramètres inattendus lors d'une mise à jour  
[Bogue][Import]                              Import CSV : Écriture de valeurs vides dans les champs de date non possible  
[Bogue][CMDB]                                Le placeholder "Compteur" n'est pas disponible pour la définition de titre lors de la création de connecteurs  
[Bogue][CSV]                                 Import CSV : Plusieurs affectations de contact en mode "ligne" avec différents types d'objets entraînent des erreurs  
[Bogue][Code (interne)]                      Enregistrer les mots de passe sans nettoyage  
[Bogue][Code (interne)]                      Compatibilité avec le navigateur mobile  
[Bogue][Catégories]                           La création d'une entrée dans la catégorie "Système d'exploitation" crée deux entrées  
[Bogue][Catégories]                           Mauvais type de propriété pour l'attribut "Personnes > Données maîtres > Civilité"  
[Bogue][Catégories]                           Mauvaise information dans la vue d'impression des listes IP  
[Bogue][Catégories]                           La vue d'impression pour la liste IP n'est pas triée correctement  
[Bogue][Catégories]                           Personnes : l'entreprise n'est pas visible dans les données de base après l'enregistrement  
[Bogue][Catégories]                           L'attribut Domaine de recherche de la catégorie Adresse hôte n'est pas inclus lors de la duplication d'un objet  
[Bogue][Catégories]                           Tri dans l'arborescence du site et le demandeur de site  
[Bogue][Catégories]                           Ajouter un rôle par groupe de personnes aux objets assignés  
[Bogue][Catégories]                           L'explorateur d'objets répertorie les objets créés dans l'explorateur d'objets uniquement après un rafraîchissement/changement de vue  
[Bogue][Catégories]                           Vue rack dans la catégorie racks boguée  
[Bogue][Catégories]                           La création de connecteurs n'est pas possible lorsque le commentaire de modification est actif  
[Bogue][Catégories]                           Mauvais tri dans la catégorie "objets assignés"  
[Bogue][Installation]                        Le chemin "/upload/files/" n'est pas créé lors de l'installation  
[Bogue][Installation]                        Étendre la recommandation de version PHP pour inclure la version 7.2  
[Bogue][LDAP]                                LDAP : mauvaise vérification des fonctions  
[Bogue][LDAP]                                LDAP : TLS et STARTTLS ignorent le port défini par l'utilisateur  
[Bogue][Gestionnaire de rapports]             Formatage manquant dans la sortie du rapport  
[Bogue][Gestionnaire de rapports]             L'utilisation du nom dans les rapports entraîne une erreur  
[Bogue][Paramètres système]                   Outils système : Vous pouvez supprimer les groupes Admin, etc. en utilisant les outils système  
[Bogue][Paramètres système]                   Les icônes ne se chargent pas lorsqu'un serveur proxy est utilisé  
[Bogue][Recherche]                            Recherche : Les objets modélisés ne sont pas indexés  
[Bogue][Validation]                          La validation du titre de l'objet et l'utilisation de modèles produisent des erreurs d'affichage  
[Bogue][Tableau de bord]                     Widget : L'apparence de nombreux signets entraîne une vue corrompue  
[Bogue][Catégories personnalisées]            Les performances des listes de catégories chutent avec de nombreuses entrées Dialog-Plus  
[Bogue][Configurer Apache HTTPD, PHP & Co.]  Interdire l'accès aux fichiers journaux via le serveur Web  
[Bogue][Paramètres utilisateur]               Le bouton de réinitialisation des paramètres de la liste de catégories réinitialise toujours la configuration aux paramètres par défaut du déploiement  
[Bogue][API]                                 API : Fournir des ID en tant que chaîne entraîne une mauvaise identification de l'entrée de dialogue  
[Changement][Performance]                    Amélioration des performances pour l'arborescence de catégories lors de l'affichage de catégories personnalisées avec des rapports  
