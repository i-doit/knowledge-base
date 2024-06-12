# Journal des modifications 30

[Tâche][Mise à jour]                        i-doit 30 n'est mise à jour que depuis i-doit 29<br>
[Tâche][Authentification à deux facteurs]     Rendre TFA uniquement disponible dans i-doit pro<br>
[Tâche][Code (Interne)]               Remplacer tous les endroits où l'ancienne méthode replace_placeholder est utilisée par le nouveau composant Replacer<br>
[Tâche][Code (Interne)]               Déprécier le paramètre du plugin Smarty WYSIWYG "p_image_upload_handler", veuillez utiliser "fileUploadUrl"<br>
[Tâche][Code (Interne)]               Déprécier le paramètre du plugin Smarty WYSIWYG "p_image_browser_handler", veuillez utiliser "fileBrowseUrl"<br>
[Tâche][Code (Interne)]               Mettre à jour l'éditeur WYSIWYG pour utiliser les URL de téléchargement et de navigation appropriées<br>
[Tâche][CMDB]                          Restructurer le menu 'Extras' imbriqué<br>
[Tâche][Console]                       Ajouter un moyen supplémentaire pour effectuer la mise à jour d'i-doit avec les identifiants du centre d'administration<br>
[Tâche][Validation]                    Ajouter une case à cocher aux paramètres d'attribut pour supprimer plusieurs attributs à la fois<br>
[Tâche][Paramètres CMDB]                 Rendre le tri des types d'objet alphabétique pour les nouvelles installations<br>
[Tâche][Installation de licence (i-doit)] Notification lorsque la licence est installée avec succès<br>
[Amélioration][Code (Interne)]        Support de MariaDB 10.11<br>
[Amélioration][CMDB]                   Ajouter le type d'objet à la liste des "Objets attribués (groupes de personnes)" (dans Organisation)<br>
[Amélioration][Validation]             Créer une page de configuration pour combiner la validation et la visibilité des attributs<br>
[Amélioration][JDisc]                  JDisc - Filtre Point d'accès<br>
[Amélioration][JDisc]                  Importer l'état de l'alimentation depuis JDisc<br>
[Amélioration][JDisc]                  Ignorer les adresses MAC par défaut<br>
[Amélioration][JDisc]                  Plus d'informations sur la raison d'une connexion échouée au serveur JDisc<br>
[Bug][Listes]                          Info champ de date lors de la recherche avec l'option de tous les champs<br>
[Bug][Listes]                          Le filtre des rapports n'est pas correctement supprimé<br>
[Bug][Listes]                          Impossible de modifier la vue en liste pour les clusters attribués<br>
[Bug][Gestionnaire de rapports]                 Les dates dans les rapports ne sont pas triées correctement pour la langue allemande<br>
[Bug][Gestionnaire de rapports]                 L'utilisation de l'opérateur != pour les champs dialog+ n'inclut pas les objets vides (Null)<br>
[Bug][Gestionnaire de rapports]                 Erreur 500 lors de la sélection de certains rapports dans le navigateur d'objets<br>
[Bug][Gestionnaire de rapports]                 Le chemin de localisation LIKE %...% ne fonctionne pas correctement<br>
[Bug][Gestionnaire de rapports]                 Le fichier CSV ou TXT du rapport affiche des sauts de ligne<br>
[Bug][Gestionnaire de rapports]                 La duplication des rapports provoque l'affichage d'umlauts dans le titre en HTML<br>
[Bug][Gestionnaire de rapports]                 Le rapport pour l'attribution de contact affiche 0 correspondances mais en a réellement<br>
[Bug][Gestionnaire de rapports]                 Gestionnaire de rapports - Relation de service (description) provoque une erreur SQL<br>
[Bug][Gestionnaire de rapports]                 Les modèles ne sont pas affichés lorsque par exemple l'extension Nagios est installée<br>
[Bug][Gestionnaire de rapports]                 L'encodage des umlauts est affiché dans les titres de rapport dans la base de données<br>
[Bug][Code (Interne)]                Les compteurs ne comptent pas<br>
[Bug][Code (Interne)]                Après l'importation d'une langue personnalisée, une connexion n'est plus possible<br>
[Bug][Code (Interne)]                Les icônes de type d'objet ne se chargent pas<br>
[Bug][Code (Interne)]                Un format de date incorrect s'affiche pour chaque attribut de date dans la liste d'objets<br>
[Bug][Code (Interne)]                L'installation d'une extension affiche un message d'erreur peu utile lorsque les droits ne sont pas correctement définis<br>
[Bug][Code (Interne)]                La date de modification n'est pas mise à jour pour l'attribution de contact (rôle/primaire)<br>
[Bug][Code (Interne)]                La clé de correspondance de l'objet FQDN trouve des entrées en double<br>
[Bug][Code (Interne)]                Erreur d'arrondi JavaScript dans la catégorie 'Mémoire'<br>
[Bug][Code (Interne)]                Les modèles existants prennent beaucoup de temps à charger<br>
[Bug][Code (Interne)]                L'icône d'URL Wiki perturbe la largeur du champ à la comptabilité<br>
[Bug][Code (Interne)]                Afficher correctement les valeurs modifiées du journal des valeurs<br>
[Bug][API]                            Erreur SQL lors de la lecture du dialogue via l'API<br>
[Bug][API]                            Autoriser l'utilisateur à remplir les champs de dialogue+ personnalisés via l'API push<br>
[Bug][API]                            Lors de l'utilisation de cmdb.dialog.read pour la catégorie = C__CATG__IP et la propriété = zone, un niveau de trop et une entrée vide sont renvoyés<br>
[Bug][API]                            Ne recréer pas les valeurs de dialogue+ multiples déjà existantes<br>
[Bug][CMDB]                           Les propriétés "Taille" et "Taille maximale" dans la catégorie "Bases de données" contiennent des valeurs non arrondies<br>
[Bug][CMDB]                           Enregistrer des balises dans la catégorie générale via l'API ne crée pas d'entrée de journal<br>
[Bug][CMDB]                           Les emplacements segmentés ne sont pas affichés correctement dans le rack<br>
[Bug][CMDB]                           Le segment ne fournit pas de slots pour l'arrière<br>
[Bug][CMDB]                           Erreur de syntaxe lors du chargement d'un réseau IP dans la catégorie d'adresse hôte<br>
[Bug][CMDB]                           Enregistrement d'une adresse IP avec un espace à la fin de l'API<br>
[Bug][CMDB]                           Créer un CPU avec une fréquence de 3,5 et aucune unité via l'API conduit à des données incorrectes<br>
[Bug][CMDB]                           Autoriser l'utilisateur à accéder aux objets de groupe de personnes<br>
[Bug][CMDB]                           La fin d'un champ de contrat ne peut pas être vidée<br>
[Bug][CMDB]                           L'attribution de service de cluster génère une erreur de type<br>
[Bug][CMDB]                           Il n'est pas possible d'enregistrer des valeurs de mémoire supérieures à 90,95 To<br>
[Bug][CMDB]                           Les entrées de port réseau ne sont pas affichées sur la page d'aperçu<br>
[Bug][CMDB]                           La catégorie 'Certificat' n'utilise pas d'étiquettes<br>
[Bug][Sécurité]                       Mettre en cache les droits après une modification<br>
[Bug][Import CSV]                     L'attribution d'un réseau Layer 3 à un réseau Layer 2 via l'attribution de Layer-3-net entraîne une erreur générale<br>
[Bug][Import CSV]                     Le paramètre "Catégories à valeurs multiples" défini sur ligne pour l'importation CSV entraîne l'absence de certaines données importées<br>
[Bug][Import CSV]                     Les umlauts et les caractères spéciaux ne sont pas traités correctement dans l'exportation CSV de la vue en liste lorsque dans le champ de description<br>
[Bug][Import CSV]                     L'importation CSV ne compte pas correctement les objets<br>
[Bug][Paramètres système]                Les paramètres experts affichent certains paramètres internes<br>
[Bug][LDAP]                           Impossible de se connecter via ldap lorsque ldap.default-group a une valeur de chaîne<br>
[Bug][LDAP]                           La synchronisation des groupes LDAP remplit le journal sans aucun changement<br>
[Bug][LDAP]                           Import_rooms via la synchronisation ldap ne fonctionne pas avec camelCase<br>
[Bug][JDisc]                          Importer des objets à partir d'objets JDisc via un fichier avec des adresses IPv6<br>
[Bug][JDisc]                          L'importation d'un profil JDisc entraîne un message d'erreur d'échec de contrainte de clé étrangère qui n'est pas journalisé<br>
[Bug][JDisc]                          L'importation n'inclut pas toutes les adresses IPv4 lorsque le type d'importation pour les adresses IP DHCP est défini sur avec mise à jour<br>
[Bug][JDisc]                          Erreur de mappage JDisc<br>
[Bug][JDisc]                          Le statut cmdb par défaut n'est pas défini lors de l'importation jdisc<br>
[Bug][JDisc]                          Le paramètre de profil JDISC "Inclure les clusters" n'a aucun effet<br>
[Bug][Import]                         Un doublon est créé malgré le message d'erreur de validation<br>
[Bug][Import]                         L'importation XML rencontre une erreur php<br>
[Bug][Catégories personnalisées]              Les catégories personnalisées sont vues comme vides dans l'arborescence des catégories lorsqu'elles sont nouvellement remplies et lorsque le bouton de masquage est actif<br>
[Bug][Catégories personnalisées]              Afficher correctement le code html de l'éditeur html<br>
[Bug][Validation]                     Le champ de texte dans la catégorie 'Adresse' ne peut pas enregistrer de contenu multiligne<br>
[Bug][Validation]                     Catégories et attributs manquants pour le cluster lors de la masquage des attributs<br>
[Bug][Validation]                     Ne pas autoriser l'utilisateur à redimensionner le tableau des paramètres d'attribut<br>
[Bug][Validation]                     Valider les entrées pour le groupe LDAP standard -> Seuls les chiffres et les virgules<br>
[Bug][Validation]                     Réinitialiser correctement le filtre des paramètres d'attribut<br>
[Bug][Console]                        Erreur PHP lorsque la configuration de la commande est mal formée<br>
[Bug][Console]                        Ajuster le statut du résultat de la commande de création de locataire<br>
[Bug][Notifications]                  Certains espaces réservés ne fonctionnent pas dans les notifications<br>
[Bug][Notifications]                  Utiliser la valeur par défaut si setSortDirection n'est pas défini<br>
[Bug][Édition de liste]                   TypeError lors de l'édition de listes d'objets<br>
[Bug][Codes QR]                       Utilisation d'un rapport pour un modèle de code QR non possible dans le navigateur d'objets<br>
[Bug][Codes QR]                       Le code HTML dans les modèles de code QR n'est pas enregistré<br>
[Bug][Catégories]                     Il existe deux catégories spécifiques Installation disponibles<br>
[Bug][Catégories]                     Renommer la catégorie "Câblage du châssis" en "Câblage du châssis"<br>
[Bug][Catégories]                     Renommer la catégorie et le dossier "Hiérarchie de base de données" en "Hiérarchie de base de données"<br>
[Bug][Paramètres CMDB]                  Autoriser l'utilisateur à utiliser le fil d'Ariane lors de l'édition des types d'objets<br>
[Bug][Paramètres CMDB]                  La description du paramètre "Afficher les mots de passe" est incorrecte<br>
[Bug][Modèles]                      Les informations de changement de masse du modèle peuvent être déplacées verticalement<br>
[Bug][Tableau de bord]                      Les popups d'information lors de la suppression des widgets ne disparaissent pas<br>
[Bug][Explorateur CMDB]                  Le fichier image dans l'Explorateur CMDB n'est pas chargé<br>
