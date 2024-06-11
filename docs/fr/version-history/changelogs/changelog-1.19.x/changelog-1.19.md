# Journal des modifications 1.19

[Tâche][Refonte de l'application]   Refonte de l'application i-doit  
[Tâche][Code (Interne)]            Implémenter un moyen d'injecter des menus dans la zone d'administration  
[Tâche][Outils système]            Ajouter une fonction dans la zone d'administration pour nettoyer les entrées de dialogue inachevées/supprimées  
[Tâche][CMDB]                     Renommer "Réseau de niveau 2" en "Affectation de réseau de niveau 2" de la catégorie Réseau » Port  
[Amélioration][Paramètres système] Option pour désactiver la validation des adresses MAC  
[Amélioration][Paramètres système] Nouvelle traduction de configuration  
[Amélioration][Paramètres système] Définition de la langue par défaut  
[Amélioration][Catégories]         Masquer les attributs des catégories  
[Amélioration][Catégories]         Nouveau champ facultatif "Dernière connexion" dans la catégorie "Connexion" des Utilisateurs/Personnes  
[Amélioration][Gestionnaire de rapports]  Les rapports peuvent désormais être importés et exportés  
[Erreur][Catégories]              Les compteurs personnalisés ne sont pas disponibles pour une saisie manuelle dans l'attribut d'inventaire numéro  
[Erreur][Catégories]              Erreur lors de la tentative d'assignation d'une nouvelle station de travail sur la page d'aperçu  
[Erreur][Outils système]          Icônes de prévisualisation manquantes pour supprimer les entrées de catégorie inachevées/archivées/supprimées  
[Erreur][Gestionnaire de rapports]  L'arborescence de localisation est cassée  
[Erreur][Gestionnaire de rapports]  Le paramètre de substitution "après la date actuelle" ne fonctionne pas dans les rapports  
[Erreur][Gestionnaire de rapports]  Le point de connexion n'est pas interrogeable dans les rapports  
[Erreur][Gestionnaire de rapports]  La case à cocher dans le rapport provoque une erreur  
[Erreur][Gestionnaire de rapports]  Le paramètre de substitution "ID d'objet inégal" ne fonctionne pas correctement  
[Erreur][Gestionnaire de rapports]  Opérateurs manquants pour le système d'exploitation > numéro de version dans les conditions du rapport  
[Erreur][Gestionnaire de rapports]  Sortie incorrecte dans les rapports des objets assemblés verticalement dans les racks  
[Erreur][Gestionnaire de rapports]  Opérateurs manquants pour Mémoire>Capacité  
[Erreur][Gestionnaire de rapports]  Enregistrer un rapport avec l'opérateur "subcnd" ne fonctionne pas  
[Erreur][Gestionnaire de rapports]  Requête incorrecte lors de l'utilisation du champ oui/non dans les conditions  
[Erreur][Gestionnaire de rapports]  Le système d'exploitation > la version n'est pas affiché dans le Gestionnaire de rapports  
[Erreur][Console]                Les commandes ne peuvent pas être exécutées dans i-doit OPEN  
[Erreur][CMDB]                   La fin du contrat n'est pas calculée automatiquement lors de l'ajout de détails de contrat via l'extension Forms  
[Erreur][CMDB]                   Les objets archivés/supprimés sont également affichés dans les objets assignés  
[Erreur][CMDB]                   Les paramètres du chemin de localisation ne s'appliquent pas aux chemins de localisation dans les résultats du rapport  
[Erreur][Import CSV]             L'import CSV via la Console ne fonctionne pas  
[Erreur][Import CSV]             L'export CSV du rapport insère une constante au lieu de l'entrée  
[Erreur][Import CSV]             Les relations d'objets ne sont pas attribuées lors de l'utilisation de l'option automatique  
[Erreur][Import CSV]             L'attribution de contrat n'est pas importée correctement via CSV  
[Erreur][Câblage de connecteurs]  L'édition des connecteurs provoque une erreur  
[Erreur][API]                    Il n'est plus possible de changer le type d'objet via l'API  
[Erreur][API]                    Les entrées de dialogue+ avec une relation ne peuvent pas être définies avec une seule requête API dans la catégorie  
[Erreur][Modèles]                Erreur lors de la création d'objets à partir de modèles utilisant un %COUNTER%  
[Erreur][Modèles]                Le modèle pour les personnes ne reprend pas les données des catégories Personnes > Appartenance à un groupe de personnes, Personnes > Données principales  
[Erreur][Import]                 Import CSV : L'import d'un réseau de niveau 2 deux fois crée une affectation de réseau de niveau 3 aléatoire  
[Erreur][Import]                 L'import XML ne crée pas les statuts CMDB  
[Erreur][Import]                 Méthode storageModel_import manquante  
[Erreur][Code (Interne)]          Mise à jour avec une mauvaise taille de ligne pour la table isys_cats_person_list  
[Erreur][Code (Interne)]          L'utilisation d'un compteur personnalisé dans un champ texte d'une catégorie personnalisée entraîne une erreur SQL  
[Erreur][Code (Interne)]          La commande "tenant-create" ne vérifie pas si l'utilisateur de la base de données fourni existe déjà  
[Erreur][Code (Interne)]          Perte de performance en ajoutant OBJ_OWNER dans la version 1.18  
[Erreur][Code (Interne)]          Créer une clé étrangère manquante  
[Erreur][Code (Interne)]          Le menu déroulant de la sélection du locataire se ferme en cas de perte de focus  
[Erreur][Système d'autorisation]  Le compteur personnalisé peut être édité/créé sans autorisations  
[Erreur][Système d'autorisation]  Les paramètres autorisés via le groupe de personnes ne sont pas correctement affichés dans la vue des droits de la personne  
[Erreur][LDAP]                   La redirection directe du client avec tenant_id ne fonctionne pas avec SSO  
[Erreur][LDAP]                   Le changement de locataire via l'utilisateur LDAP et SSO actif ne fonctionne pas  
[Erreur][LDAP]                   Le mécanisme de mise en cache LDAP ne fonctionne pas en raison de hachages de mots de passe administrateur différents  
[Erreur][Édition de liste]        La résolution des affectations de logiciels via l'édition de liste génère un message d'erreur SQL  
[Erreur][Édition de liste]        Les données maîtresses de catégorie spécifique de l'organisation ne sont pas visibles dans l'édition de liste  
[Erreur][Édition de liste]        Chargement infini lors de l'ajout de nouvelles valeurs dans l'édition de liste  
[Erreur][Édition de liste]        Les applications ne peuvent pas être détachées dans l'édition de liste  
[Erreur][Édition de liste]        Erreur SQL lors du détachement du système d'exploitation dans l'édition de liste  
[Erreur][Édition de liste]        La sélection de valeurs dans l'édition de liste sans créer d'entrées au préalable peut entraîner des erreurs  
[Erreur][Édition en masse]        Changement en masse - l'attribution de licence/application n'est pas définie dans l'affectation de logiciel  
[Erreur][Listes]                  Le HTML des champs WYSIWYG n'est pas affiché dans les listes d'objets  
[Erreur][Listes]                  Vue en liste - La colonne "objet" affiche des objets archivés dans la station de travail  
[Erreur][Listes]                  Le filtre pour les champs de dialogue+ dans les catégories personnalisées ne fonctionne pas pour la manipulation (API+ Import complet)  
[Erreur][Listes]                  Erreur SQL lors de l'ajout de l'attribut de rôle à la vue en liste  
[Erreur][Listes]                  Le nombre de membres des groupes de personnes n'est pas triable dans la vue en liste  
[Erreur][Listes]                  Erreur SQL lors du filtrage de tous les champs dans une liste d'objets avec Condition d'attribut (Général)  
[Erreur][Listes]                  Le filtre pour la capacité ne fonctionne pas correctement  
[Erreur][Listes]                  "Installé à" dans l'Application n'est pas affiché dans la vue en liste  
[Erreur][Listes]                  Double ascenseur et nombre de pages non visibles  
[Erreur][Codes QR]               La prévisualisation du code QR ne se charge pas correctement  
[Erreur][Codes QR]               Les codes QR dans la prévisualisation ne correspondent pas à ceux dans la fenêtre contextuelle  
[Erreur][Centre d'administration]  La désinstallation de l'extension entraîne une erreur HTTP 500  
[Erreur][Centre d'administration]  Erreur "Aucun fichier ou dossier" lors de l'utilisation de "\" dans le mot de passe pour l'utilisateur MySQL  
[Erreur][Check_MK]               L'instruction d'utilisation inutile dans isys_cmdb_dao_category_s_person.class.php crée un avertissement PHP  
[Erreur][Catégories personnalisées]  Les options d'administration disparaissent lors de l'utilisation d'apostrophes dans les catégories personnalisées  
[Erreur][Catégories personnalisées]  La constante de langue est écrasée lors de l'édition du champ de catégorie personnalisée  
[Erreur][Notifications]          Les notifications ne sont envoyées que dans la langue de l'utilisateur du cronjob  
[Erreur][Notifications]          La notification basée sur le rapport n'est pas enregistrée lors de la désélection de "actif"  
[Erreur][JDisc]                  Aucun recours si aucun serveur JDisc standard n'est configuré  
[Erreur][JDisc]                  Les domaines ne sont pas vérifiés lors de l'import JDisc  
[Erreur][JDisc]                  L'allocation d'adresse est définie en statique lors de l'import avec le mode "mise à jour"  
[Erreur][JDisc]                  L'import JDisc définit toujours le serveur DNS et cela est enregistré dans le journal en tant que source interne  
[Erreur][Paramètres CMDB]         L'utilisation d'une valeur de départ pour les compteurs personnalisés crée un compteur vide dans la configuration  
[Erreur][Journal]                Créer des entrées de journal pour les affectations de groupe de personnes par la synchronisation LDAP  
[Erreur][Objets]                 Les doublons de titre d'objet "\"  
[Erreur][Vue d'impression]       L'aperçu d'impression affiche des attributs incorrects  
[Erreur][Export]                 Créer des objets via un modèle si une catégorie définie par l'utilisateur est contenue et représente un rapport  
[Erreur][Recherche]              Le filtre pour la capacité ne fonctionne pas  
[Erreur][Tableau de bord]        Les attributs sont affichés tronqués dans la liste d'informations sur l'objet sur le tableau de bord  
[Erreur][Tableau de bord]        Si par exemple trié par le titre, le widget de liste d'informations sur l'objet sera réinitialisé et vidé.  
[Erreur][H-Inventory]            L'import XML de hinventory crée de nouveaux cœurs de CPU à chaque import  
[Erreur][Paramètres système]      La commande Ping avec nmap nécessite des autorisations de super utilisateur  
