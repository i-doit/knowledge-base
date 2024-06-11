# Journal des modifications 1.14

[Amélioration][Code (interne)] Compatibilité pour PHP 7.4  
[Amélioration][Code (interne)] i-doit ne prend plus en charge PHP 7.0, la configuration minimale est PHP 7.1  
[Amélioration][Code (interne)] Suppression des options de formatage WYSIWYG inutiles  
[Amélioration][Installation] Ajout de la prise en charge de MariaDB 10.4  
[Amélioration][Catégories] Catégorie "Accès" valeur par défaut ajustable pour l'attribut "Principal"  
[Amélioration][Catégories] Bouton supplémentaire pour "Retour" de la catégorie "racks" dans les salles  
[Amélioration][Catégories] Extension de la catégorie carte SIM pour multi-sim  
[Amélioration][Importation CSV] L'exportation CSV ne contient que les objets sélectionnés  
[Amélioration][CMDB] LES CARTES SIM permettent plus de deux cartes  
[Amélioration][Contrôleur] La correction de l'emplacement peut être appelée séparément via le contrôleur/console i-doit  
[Amélioration][Configuration du type d'objet] Aperçu des icônes des types d'objets  
[Bogue][Importation CSV] Importation CSV : Supprimer le titre de l'objet en tant que champ obligatoire lorsqu'il est associé à des objets existants  
[Bogue][Vue de câblage] Le navigateur de câblage répertorie les ports dans l'ordre de création  
[Bogue][CMDB] Erreur SQL lors de la sélection des services de cluster  
[Bogue][CMDB] Le cache du survol ne sera pas mis à jour en cas de modifications  
[Bogue][CMDB] Lors du nettoyage des entrées de catégorie, toutes les données de la base de données ne sont pas nettoyées.  
[Bogue][CMDB] Les longs titres d'objets dans le navigateur de câblage ne sont pas affichés complètement  
[Bogue][CMDB] Le bouton "Lien vers cette page" saute à la vue de liste de catégories au lieu de rester dans l'entrée actuelle  
[Bogue][CMDB] Mauvaise traduction pour la pondération par défaut des types de relation  
[Bogue][Catégories] La position dans le rack n'est possible qu'après avoir enregistré l'objet  
[Bogue][Catégories] Le statut en direct ne peut plus être appelé  
[Bogue][Catégories] La case à cocher dans la catégorie Liste ne contient pas d'ID d'enregistrement.  
[Bogue][Catégories] Le premier niveau de la vue de l'emplacement logique ne montre que des objets de type "espace de travail", même s'il y a d'autres objets, servant de lieu logique, à ce niveau  
[Bogue][Catégories] Informations manquantes sur les ports logiques des objets connectés  
[Bogue][Catégories] Le type de catégorie Réseau d'un super réseau ne peut pas être modifié  
[Bogue][Catégories] La catégorie Carte SIM est par défaut sur la page d'aperçu de la carte SIM  
[Bogue][Catégories] L'unité de hauteur dans les vues avant et arrière du rack est affichée de manière incorrecte  
[Bogue][OCS] Les appareils connectés ne sont pas trouvés lors de l'importation en utilisant l'adresse MAC de l'appareil et le titre de l'objet.  
[Bogue][Explorateur CMDB] L'explorateur CMDB ne affiche pas les informations sur l'objet  
[Bogue][Explorateur CMDB] La fonction d'impression de l'explorateur CMDB ne crée que partiellement une sortie/impression  
[Bogue][Explorateur CMDB] L'explorateur CMDB se fige lorsque le locataire est changé dans un nouvel onglet de navigateur  
[Bogue][Validation] Option pour gérer les conflits de validation lors de la création d'objets via des modèles  
[Bogue][LDAP] Sélection du client restreinte par l'authentification utilisateur LDAP $authenticationHash  
[Bogue][LDAP] LDAP : La connexion utilisateur manque de relation avec le groupe de personnes  
[Bogue][LDAP] La commande ldap-sync n'utilise pas la configuration spécifiée  
[Bogue][Relations] La pondération des relations des composants de service est réinitialisée à la norme  
[Bogue][Listes] La vue Liste des services de cluster schmeisst SQL Fehler et n'est pas affichée  
[Bogue][Listes] L'affichage des objets attribués à une personne dans la liste d'objets n'est pas possible  
[Bogue][Vue d'impression] Les rapports sans résultats dans les catégories définies par l'utilisateur provoquent des erreurs de vue d'impression  
[Bogue][Gestionnaire de rapports] Erreur dans le gestionnaire de rapports, les conditions avec "%NOT LIKE%" sont exécutées comme "%LIKE%".  
[Bogue][Gestionnaire de rapports] Les conditions d'un rapport ne sont pas entièrement remplies  
[Bogue][Gestionnaire de rapports] Le placeholder de champ dans le rapport génère un message d'erreur SQL  
[Bogue][Gestionnaire de rapports] Gestionnaire de rapports : Sélection restreinte aux conditions "attribut lié"  
[Bogue][Gestionnaire de rapports] Tri de la sortie selon le nom dans le rapport  
[Bogue][Code (interne)] Créer des dossiers d'importation et de téléchargement pour chaque client  
[Bogue][Mise à jour] Créer de manière récursive des dossiers pour le téléchargement de fichiers  
[Bogue][Mise à jour] Migration des rapports non possible 1.13 > 1.13.1-2  
[Bogue][Centre d'administration] La connexion au centre d'administration ne fonctionne pas après la mise à jour vers i-doit 1.13.2  
[Bogue][Console] Les relations sont mal représentées lors de l'utilisation de php console.php system-objectrelations  
[Bogue][Recherche] Exception de mémoire lors de la création de l'index de recherche  
[Bogue][Paramètres de licence] Widget de licence : couleur du terme restant non conforme à la définition  
[Bogue][JDisc] Lorsque des modifications de port sont effectuées par JDISC, l'objet lié n'est pas enregistré.  
[Bogue][JDisc] Si l'état CMDB est modifié par JDISC, il ne sera pas enregistré.  
[Bogue][Paramètres CMDB] Le réglage par défaut du navigateur d'objets de la catégorie "Réseau de zone de stockage" > "Port FC" n'est pas utilisé  
[Bogue][Paramètres CMDB] Affectation du navigateur d'objets Layer-2-Net / Layer-3-Net non existante  
[Bogue][XML] L'importation de fichiers via XML saute le contenu de la sous-catégorie "Version du fichier  
[Bogue][Catégories personnalisées] La désinfection des données d'entrée supprime la barre d'outils HTML.  
[Bogue][Catégories personnalisées] Afficher correctement les noms de champ renommés  
[Bogue][Importation] Importation CSV : Attribution de licences  
[Bogue][Importation] Le fichier CSV n'est pas importé lorsqu'il se termine par .CSV (majuscule)  
[Bogue][Session] Le verrouillage de l'objet reste intact lorsque l'utilisateur se déconnecte  
[Bogue][Journal] Aucune entrée de journal sur le serveur s'il est attribué à un casier - Vice-versa : le casier crée une entrée de journal  
[Bogue][Objets] Vue de l'armoire : la validation empêche le placement d'un objet  
[Bogue][Objets] L'attribution du système d'exploitation de la version est défectueuse  
[Bogue][Objets] Les objets avec des guillemets ("") dans le titre sont mal affichés dans la vue d'ensemble du réseau de niveau 3  
[Bogue][Objets] Les réseaux de niveau 2 dans les objets sont affichés avec [] au lieu de la valeur vide  
[Bogue][Objets] Le superréseau IPv6 affiche également des sous-réseaux en dehors de la plage définie  
[Bogue][Édition de liste] Le placeholder crée une vue défectueuse dans l'édition de liste  
