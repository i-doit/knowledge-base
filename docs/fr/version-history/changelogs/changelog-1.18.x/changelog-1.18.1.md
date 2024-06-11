# Journal des modifications 1.18.1

[Amélioration][Code (interne)]                    Autoriser le regroupement des modules complémentaires  
[Erreur][Code (interne)]                           Les connexions existantes de la catégorie Câblage ne peuvent pas être reconnectées si l'entrée est sélectionnée et modifiée via la case à cocher.  
[Erreur][Code (interne)]                           Le filtre HTML n'est pas désactivé par le paramètre de nettoyage des données d'entrée  
[Erreur][Code (interne)]                           Les liens sont détruits dans le Gestionnaire de rapports  
[Erreur][Code (interne)]                           Installer i-doit 1.18 via install.sh  
[Erreur][Code (interne)]                           Corriger les problèmes de sécurité dans le Centre d'administration  
[Erreur][Code (interne)]                           Corriger les problèmes de sécurité dans le Centre d'administration  
[Erreur][Code (interne)]                           La constante LC allemande a été oubliée  
[Erreur][Code (interne)]                           Vue en rack - les emplacements verticaux se déplacent horizontalement  
[Erreur][Code (interne)]                           Les boutons Vérifier et Afficher ne peuvent plus être cliqués dans les rapports lors de l'utilisation de Chrome  
[Erreur][LDAP]                                      La correspondance ne fonctionne pas si le titre du champ n'est pas présent chez l'utilisateur  
[Erreur][LDAP]                                      En raison de la synchronisation ldap, les adhésions aux groupes ne sont pas supprimées lorsque la personne est archivée  
[Erreur][LDAP]                                      L'attribution de contact archivé est restaurée par la synchronisation LDAP  
[Erreur][LDAP]                                      Le changement de locataire des utilisateurs ldpa force la reconnexion  
[Erreur][Import CSV]                               L'import CSV doit se souvenir si une catégorie a déjà été vidée en mode écrasement  
[Erreur][Import CSV]                               Les valeurs vides dans l'importation csv ne sont pas transférées lorsque la catégorie à valeurs multiples est définie sur "Ligne"  
[Erreur][Import CSV]                               Les imports CSV d'une seule ligne effacent les catégories à valeurs multiples  
[Erreur][Catégories]                                Dans la catégorie Services - Type de service, le champ de dialogue est référencé de manière incorrecte  
[Erreur][Catégories]                                Le numéro d'inventaire automatique n'a aucun effet si un modèle par défaut est utilisé  
[Erreur][Catégories]                                La recherche dans le navigateur d'objets trouve également des objets des types d'objets normalement non disponibles pour l'attribution  
[Erreur][Catégories]                                Afficher les sous-catégories des catégories spécifiques dans la page d'aperçu  
[Erreur][Catégories]                                Le focus dans le navigateur d'objets n'est pas toujours sur le champ de filtre  
[Erreur][Catégories]                                Ajouter l'attribut "Cœurs" à la liste de catégories de CPU  
[Erreur][Catégories personnalisées]                Les catégories personnalisées ne peuvent pas être enregistrées  
[Erreur][Catégories personnalisées]                Les catégories personnalisées ne sont pas enregistrées  
[Erreur][Catégories personnalisées]                La valeur par défaut des champs Oui/Non est également affichée en mode affichage.  
[Erreur][Système d'autorisation]                   L'emplacement et tous les objets physiquement attribués en dessous sont résumés  
[Erreur][CMDB]                                      La vue d'emplacement ne s'ouvre pas automatiquement pour les objets de localisation logique  
[Erreur][CMDB]                                      Supprimer le bouton d'archive et de suppression pour les relations  
[Erreur][CMDB]                                      Erreur HTTP 500 lors de l'enregistrement des modifications  
[Erreur][CMDB]                                      Les valeurs dans les champs de dialogue à valeurs multiples ne sont pas enregistrées  
[Erreur][CMDB]                                      Les noms des châssis de commutation ne sont pas affichés dans la vue en rack lorsque des emplacements sont créés  
[Erreur][CMDB]                                      La recherche de "." + "Chaîne" trouve tous les objets  
[Erreur][Import]                                    L'attribution de contact dans l'importation CSV est créée pour les personnes archivées à l'état normal  
[Erreur][Édition de masse]                          Changement de masse - l'attribution/application de licence n'est pas définie dans l'attribution de logiciel  
[Erreur][Édition de masse]                          Changement de masse - Les catégories à valeurs multiples avec ajouter/supprimer sont dupliquées  
[Erreur][JDisc]                                     L'importation JDisc crée des entrées de journal vide  
[Erreur][JDisc]                                     L'index de recherche n'est pas réindexé après l'importation JDisc  
[Erreur][JDisc]                                     Les attributs personnalisés JDisc Running config, Show Version et Startup config créent des entrées multiples  
[Erreur][Édition de liste]                          Édition de liste - Affichage incorrect lors de l'utilisation de l'onglet  
[Erreur][Édition de liste]                          Listedit: Les champs de dialogue ne sont pas toujours rechargés lorsqu'il y a une dépendance à un navigateur d'objets  
[Erreur][Gestionnaire de rapports]                  Lignes manquantes lors de l'exportation d'un rapport au format CSV  
[Erreur][Gestionnaire de rapports]                  L'expression régulière dans le gestionnaire de rapports provoque des erreurs et crée une requête SQL incorrecte  
[Erreur][Gestionnaire de rapports]                  Gestionnaire de rapports - Les types d'objets avec le même nom ne sont affichés qu'une seule fois  
[Erreur][Gestionnaire de rapports]                  Gestionnaire de rapports - Mauvaise requête SQL pour l'attribut contact et le système d'exploitation  
[Erreur][Gestionnaire de rapports]                  "Niveau de correctif" n'est pas disponible pour la sélection dans le gestionnaire de rapports  
[Erreur][Listes]                                   Un message d'erreur est affiché dans la liste d'objets si l'attribut "Rôle (Appartenances à un groupe de personnes)" est ajouté  
[Erreur][Listes]                                   Dans la colonne Système d'exploitation > Version n'est pas affichée avec le niveau de correctif dans la vue en liste des objets  
[Erreur][Listes]                                   Aux Contrats, l'ID d'objet est affiché derrière les objets dans la vue en liste dans la colonne Objets attribués  
[Erreur][Listes]                                   Affichage incorrect dans "configurer la vue en liste" pour les catégories à valeurs multiples  
[Erreur][Configuration du type d'objet]            Le numéro d'inventaire automatique (compteur) ne fonctionne pas correctement  
[Erreur][OCS]                                     L'importation OCS crée un layer-3-net invalide  
[Erreur][Codes QR]                               La mise en page du code QR 3 ne fonctionne pas  
[Erreur][Notifications]                           Les notifications d'expiration de licence ne sont pas affichées correctement, lorsque le modèle est modifié  
[Erreur][Paramètres CMDB]                         Fichiers du navigateur d'objets > Objets attribués non disponibles  
[Erreur][Installation/Mise à jour/Licence de base de la console] Les modules complémentaires sous licence sont affichés comme non sous licence via la commande Console.php addon-list  
[Erreur][Mise à jour]                             Les ports ne peuvent pas être créés en raison de la clé étrangère en double  
