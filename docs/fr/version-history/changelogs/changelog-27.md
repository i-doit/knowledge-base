# Journal des modifications 27

[Tâche][Refonte de l'application]                       Refonte de la page de connexion<br>
[Tâche][Code (Interne)]                                Supprimer le paramètre 'logical-location-handling', se référer à l'extension 'Relocate CI'<br>
[Tâche][Code (Interne)]                                Mettre à jour l'éditeur ACE<br>
[Tâche][Installation/Mise à jour/Licence de la console] Description manquante pour import-jdisc --regenerateSearchIndex<br>
[Tâche][JDisc]                                         Améliorer la communication JDisc<br>
[Tâche][Authentification unique (SSO)]                 Implémenter un nouveau paramètre expert + logique de connexion pour SSO<br>
[Tâche][Mise à jour]                                   Ajouter des informations sur la dépréciation prévue de PHP 7.4 à la procédure de configuration et de mise à jour<br>
[Amélioration][Dossiers de catégories]                 Implémenter la fonctionnalité des dossiers de catégories<br>
[Amélioration][JDisc]                                 Créer une correspondance entre les objets i-doit et les entrées de catégorie et les données JDISC<br>
[Amélioration][JDisc]                                 Formater le texte du titre de l'objet (minuscules / majuscules)<br>
[Amélioration][JDisc]                                 Ajouter le numéro de série comme identification de l'appareil pour la découverte JDisc<br>
[Amélioration][JDisc]                                 Taille du panneau d'importation des moniteurs / Importiere die Panelgröße von Monitoren<br>
[Amélioration][Journal]                               Option pour décider si les entrées du journal sont supprimées ou laissées intactes lorsqu'un objet est purgé<br>
[Amélioration][Catégories]                            Améliorer le processus pour définir un mot de passe vide<br>
[Amélioration][Explorateur CMDB]                      Regrouper les types d'objets dans l'Explorateur CMDB<br>
[Bogue][Validation]                                   Aucune erreur de validation lors de la duplication<br>
[Bogue][Validation]                                   Le réglage de l'état des entrées de type de service à archivé ou supprimé rend les entrées invisibles et non sélectionnables<br>
[Bogue][Notifications]                                L'utilisateur ne peut pas créer de paramètres de notification<br>
[Bogue][Catégories]                                   Les catégories sélectionnées pour les 'catégories sur l'aperçu' se remplissent automatiquement lors de la création d'un nouvel objet ou modèle<br>
[Bogue][Catégories]                                   La passerelle par défaut est écrasée lors de la duplication d'un objet<br>
[Bogue][Catégories]                                   L'attribution d'un logiciel via l'attribution de logiciel avant d'attribuer un système d'exploitation fait disparaître le numéro de version<br>
[Bogue][Catégories]                                   Le placeholder %OBJTITLE% ne fonctionne pas dans la catégorie comptabilité > Numéro d'inventaire via le modèle<br>
[Bogue][Catégories]                                   Erreur SQL lors de la création de plus de 16 entrées de modèle<br>
[Bogue][Catégories]                                   Le modèle n'est pas affiché lors de la création de plus de 16 objets sans enregistrer l'objet par la suite<br>
[Bogue][Catégories]                                   Plusieurs systèmes d'exploitation lors de l'attribution de logiciels provoquent un comportement étrange au niveau des numéros de version de la catégorie des systèmes d'exploitation<br>
[Bogue][Catégories personnalisées]                    Changer les clés techniques pour ne contenir que des mots fait perdre les valeurs des entrées lorsqu'elles sont remplies avec l'API (Dialog+)<br>
[Bogue][Catégories personnalisées]                    La déconnexion de la relation dans la catégorie personnalisée provoque une erreur SQL<br>
[Bogue][Code (Interne)]                               La désinstallation des extensions via le centre d'administration ne fonctionne pas si l'utilisateur est également connecté à i-doit<br>
[Bogue][Code (Interne)]                               Ajuster le nom de la catégorie de l'interface réseau<br>
[Bogue][Code (Interne)]                               Impossible d'enregistrer un compteur avec le format #<br>
[Bogue][Code (Interne)]                               Enregistrer un lien long comme signet dans le widget de signets supprime les boutons de modification et de suppression<br>
[Bogue][Code (Interne)]                               Ajouter un élément de menu de relation au menu des extras<br>
[Bogue][Code (Interne)]                               Nom d'attribut incorrect lors de la lecture via l'API<br>
[Bogue][Code (Interne)]                               Ne pas ajouter d'espaces aux champs de texte multilignes personnalisés<br>
[Bogue][Code (Interne)]                               L'installation d'une extension incompatible ne génère pas d'erreur<br>
[Bogue][Code (Interne)]                               Traduire à nouveau le bouton de désélection<br>
[Bogue][Code (Interne)]                               Ne pas afficher de menu Extras vide si l'utilisateur n'a pas le droit de le faire<br>
[Bogue][Connexion i-doit]                            Afficher un message d'erreur lorsqu'un utilisateur se connecte avec des identifiants incorrects<br>
[Bogue][Paramètres système]                          Ouvrir le sélecteur de calendrier lorsque le champ de saisie du calendrier est sélectionné<br>
[Bogue][Paramètres système]                          Le journal de débogage LDAP n'est disponible que dans les paramètres système (Centre d'administration)<br>
[Bogue][LDAP]                                        La synchronisation LDAP crée des entrées de journal en double pour un utilisateur archivé<br>
[Bogue][LDAP]                                        L'attribution de groupe n'est pas supprimée pour les utilisateurs LDAP si l'utilisateur a été déplacé vers un autre groupe LDAP<br>
[Bogue][LDAP]                                        Administration > Importation et interfaces > LDAP > L'extension d'attribut ne peut pas être enregistrée<br>
[Bogue][Journal]                                     Si un changement dans l'administration avec un "commentaire du journal" est enregistré, une information trompeuse indique qu'une entrée de journal a été créée.<br>
[Bogue][API]                                         La création et le réglage d'une entrée de dialogue avec une chaîne qui est uniquement un nombre ne sont pas enregistrés<br>
[Bogue][API]                                         Erreur PHP lors de l'envoi d'une requête API sans l'extension API i-doit pro installée<br>
[Bogue][Édition de liste]                            Le logiciel n'est pas affiché en mode liste lorsqu'il est attribué via l'édition de liste<br>
[Bogue][Édition de liste]                            Ajouter un nouveau modèle en mode liste provoque une erreur de base de données<br>
[Bogue][Édition de liste]                            Les catégories d'attribution ne sont pas modifiables en mode liste<br>
[Bogue][Édition de liste]                            Permettre à l'utilisateur d'ajouter des valeurs dialog+ en mode liste<br>
[Bogue][CMDB]                                        Essayer d'enregistrer une installation de base de données deux fois entraîne une erreur<br>
[Bogue][CMDB]                                        Erreur SQL dans le gestionnaire de rapports pour les catégories d'installation de base de données DBMS<br>
[Bogue][CMDB]                                        Le bouton d'édition dans la liste IP doit être masqué<br>
[Bogue][CMDB]                                        Le paramètre "afficher uniquement l'entrée principale" pour un objet maître (catégorie personnalisée) provoque une erreur HTTP 500 lors de l'aperçu<br>
[Bogue][CMDB]                                        Erreur SQL après une double mise à jour de l'installation DBMS<br>
[Bogue][Nouvelle logique de câblage]                  Le navigateur de câblage affiche une mauvaise attribution des entrées et sorties<br>
[Bogue][Gestionnaire de rapports]                    L'utilisation de l'attribution de logiciel dans les rapports provoque un nombre incorrect de correspondances<br>
[Bogue][Gestionnaire de rapports]                    Le serveur DNS n'est pas affiché dans un rapport même s'il est défini dans un réseau de couche 3<br>
[Bogue][Gestionnaire de rapports]                    L'attribution de poste de travail-> L'objet parent ne fonctionne pas dans le gestionnaire de rapports<br>
[Bogue][Gestionnaire de rapports]                    Le rapport ne affiche pas tous les résultats possibles<br>
[Bogue][Gestionnaire de rapports]                    L'export CSV des rapports avec une présentation multivaleur groupée peut contenir beaucoup de lignes vides<br>
[Bogue][Gestionnaire de rapports]                    Opérateurs manquants pour la comptabilité > date de la facture<br>
[Bogue][H-Inventory]                                 L'importation du fichier XML H-Inventory affiche un message d'erreur<br>
[Bogue][Connecteur de câblage]                       Le navigateur de câblage n'affiche pas correctement les ports<br>
[Bogue][Importation CSV]                             Attacher des fichiers via l'importation CSV se termine par un message d'erreur<br>
[Bogue][Importation CSV]                             L'export CSV du rapport insère une constante au lieu de l'entrée<br>
[Bogue][Importation CSV]                             L'importation CSV des données de catégorie à valeurs multiples ne fonctionne pas correctement via console.php<br>
[Bogue][Importation CSV]                             Erreur de base de données lors de l'importation via CSV<br>
[Bogue][Mise à jour]                                 La mise à jour de 24 à 25 définit le format monétaire sur NULL pour tous les utilisateurs<br>
[Bogue][Listes]                                     La vue en liste des entrées à valeurs multiples ne vérifie pas les colonnes<br>
[Bogue][Listes]                                     Erreur SQL lors du filtrage dans le commutateur de type d'objet châssis pour l'attribution de périphériques (emplacements)<br>
[Bogue][Listes]                                     Afficher X entrées dans la liste d'objets n'est pas persistant<br>
[Bogue][Listes]                                     Configuration de la vue en liste manquante lors de l'édition<br>
[Bogue][Listes]                                     Impossible de déplacer les attributs en vue en liste pour les catégories<br>
[Bogue][Listes]                                     Le filtre de liste dans la configuration du type d'objet ne se réinitialise pas<br>
[Bogue][Listes]                                     L'option "le filtre par défaut filtre dans tous les champs" provoque un avertissement de date<br>
[Bogue][Tableau de bord]                             Ajouter des attributs "affectation de service de cluster" au widget "liste des informations sur l'objet" sur le tableau de bord donne une erreur<br>
[Bogue][Tableau de bord]                             Utiliser les liens corrects dans le widget de lancement rapide<br>
[Bogue][Recherche]                                  Le filtrage des champs de date dans l'aperçu de liste ne fonctionne pas<br>
[Bogue][Modèles]                                   L'attribution de contact dans les modèles ne fonctionne pas pour les importations JDisc<br>
[Bogue][JDisc]                                     Les ports FC ne sont pas entièrement importés via l'importation JDisc<br>
[Bogue][JDisc]                                     L'importation JDisc via la console s'arrête avec une erreur<br>
[Bogue][JDisc]                                     L'importation du profil JDisc affiche un message d'erreur de contrainte de clé étrangère<br>
[Bogue][JDisc]                                     L'importation JDisc avec le mode d'importation "Créer uniquement des appareils nouvellement scannés" crée des doublons<br>
[Bogue][Installation/Mise à jour/Licence de la console]  La commande sync-dynamic-groups utilise la mauvaise table de base de données<br>
[Bogue][Explorateur CMDB]                           Les constantes de langue sont affichées dans les infos d'objet de l'explorateur CMDB<br>
[Bogue][Licence i-doit 2.0]                        Le compte à rebours d'expiration de la licence n'est pas affiché sur le tableau de bord<br>
[Bogue][Système d'autorisation]                   Si "Emplacement et tous les objets physiquement assignés" est utilisé comme droit, la page d'aperçu peut être vue même si elle n'est pas autorisée<br>
[Bogue][Relations]                                La fonction pour effacer le mot de passe des utilisateurs n'a aucun effet<br>
[Bogue][Authentification unique (SSO)]            La langue du locataire par défaut écrase les langues des autres locataires<br>

