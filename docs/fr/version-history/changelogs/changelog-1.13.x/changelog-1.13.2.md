# Journal des modifications 1.13.2

[Amélioration][Relations] Les types de relation personnalisés devraient avoir leurs propres constantes  
[Amélioration][LDAP] Synchronisation LDAP avec d'autres attributs que les noms  
[Amélioration][Gestionnaire de rapports] Nouvelles propriétés dynamiques pour toutes les catégories  
[Bug][Gestionnaire de rapports] Mise à jour : La migration des rapports existants échoue dans certaines circonstances  
[Bug][Gestionnaire de rapports] Variante d'attribut (Version) dans le gestionnaire de rapports sans fonction  
[Bug][Gestionnaire de rapports] Un rapport avec une condition "état" génère un message d'erreur  
[Bug][Gestionnaire de rapports] Les vues du gestionnaire de rapports ne fonctionnent pas correctement  
[Bug][Gestionnaire de rapports] La visualisation des connexions réseau du gestionnaire de rapports ne montre pas les écouteurs réseau  
[Bug][Gestionnaire de rapports] Migration de la condition "Créer de nouveaux rapports" vers le droit de création  
[Bug][Gestionnaire de rapports] Gestionnaire de rapports : Impossible de lire l'attribut "Variante" de la catégorie "Installation"  
[Bug][Gestionnaire de rapports] L'instance de base de données (Catégorie Schéma de base de données) n'est pas disponible dans le gestionnaire de rapports  
[Bug][Gestionnaire de rapports] Le format de date est ignoré dans le rapport  
[Bug][Gestionnaire de rapports] Les références d'objets ne montrent pas le titre de l'objet  
[Bug][Listes] Listes d'objets : l'attribut "numéro de version" de la catégorie "système d'exploitation" n'est pas triable  
[Bug][Listes] Listes d'objets : l'attribut "numéro de version" de la catégorie "système d'exploitation" ne peut pas être trié  
[Bug][Listes] Le filtrage du chemin d'accès de l'emplacement ne prend en compte que le chemin raccourci affiché  
[Bug][Paramètres système] Erreur SQL lorsque le chemin d'accès de l'emplacement est défini justifié à droite  
[Bug][Paramètres système] Sous-répertoires pour les fichiers téléchargés et les journaux  
[Bug][Paramètres système] Le paramètre expert system.dir.import-uploads devrait être défini par défaut pour chaque client.  
[Bug][Check_MK] Paramètre manquant pour définir le délai d'attente de Livestatus  
[Bug][Validation] La validation ne fonctionne pas avec des catégories redondantes  
[Bug][CMDB] Erreur lors de la documentation des LUN  
[Bug][CMDB] Impossible de créer un client car l'unité de fréquence du processeur est obligatoire  
[Bug][CMDB] Enregistrer la valeur "fréquence du processeur" sans son unité n'est pas correct  
[Bug][CMDB] Utiliser le séparateur correct pour les formats numériques  
[Bug][Édition de liste] Les valeurs vides ("-") dans les champs Dialog+ ne peuvent pas être sélectionnées dans l'édition de liste.  
[Bug][Édition de liste] Rendre l'attribut "Affectation de réseau de couche 2" de la catégorie Port disponible pour l'édition de liste  
[Bug][Édition de liste] Rendre l'attribut "Passerelle par défaut pour le réseau" de la catégorie Adresse de l'hôte disponible pour l'édition de liste  
[Bug][Édition de liste] Sélection de l'emplacement plus large dans l'édition de liste  
[Bug][Édition de liste] Utilisation plus efficace de l'espace disponible de gauche à droite dans l'édition de liste  
[Bug][Édition de liste] Écran sombre lorsque l'adresse de l'hôte est sélectionnée pour l'édition de liste  
[Bug][Catégories] Dupliquer un objet de stockage exclut le VLAN standard  
[Bug][Catégories] La création de réseaux de couche 3 n'est pas possible  
[Bug][Catégories] L'attribution d'une Twincard à la catégorie "carte SIM" n'est pas possible  
[Bug][Catégories] Erreur "catégorie introuvable" lors de l'édition de la vue dans la catégorie "ports attribués"  
[Bug][Catégories] Après archivage d'une licence, elle est toujours utilisée et affichée dans les installations associées  
[Bug][Catégories] Avertissement lors de l'enregistrement d'attributs numériques avec un format allemand  
[Bug][Modèles] Les objets des types "Organisation" et "Groupes de personnes" utilisés dans les modèles pour les contacts attribués seront  
[Bug][Mise à jour] La mise à jour vers la 1.13.1 crée une erreur de base de données  
[Bug][Notifications] Erreur de requête de notifications  
[Bug][Notifications] Notification concernant les certificats expirés qui sont archivés  
[Bug][Centre d'administration] La connexion au Centre d'administration est possible avec le hachage chiffré  
[Bug][Événements] L'addon d'événement actif fait que le réseau de couche 3 ne peut pas être créé  
[Bug][Import] L'importation JDisc via la console crée une erreur avec la catégorie "port"  
[Bug][Import] L'importation XML crée un fichier journal vide  
[Bug][Installation] La base de données du locataire initial est créée avec l'ID 2.  
[Bug][API] Les catégories définies par l'utilisateur ne sont pas modifiables avec cmdb.object.create  
[Bug][API] Dans les catégories personnalisées, le type de données Texte au lieu de TextArea est utilisé pour les champs de type éditeur HTML.  
[Bug][Outils système] La fonction d'exportation de base de données crée un fichier de vidage de 0 Ko  
[Bug][Recherche] La recherche de balises de la catégorie "général" n'est pas possible  
[Bug][JDisc] Importation des descriptions de port via JDISC  
[Bug][JDisc] Les modifications dans les profils JDISC sont renvoyées vers un site vide et ne sont pas enregistrées  
[Bug][Paramètres utilisateur] La valeur par défaut de l'arborescence change lorsque le format numérique est modifié  
[Bug][Journal] Le contenu du journal n'est pas écrit pour le châssis lors de l'utilisation de l'importation JDisc  
[Bug][Journal] Les modifications des connexions aux objets ne sont pas affichées dans le journal de l'objet lié  
[Bug][Journal] Le journal reçoit des données incorrectes  
[Bug][Journal] L'ordre des entrées du journal provenant de processus simultanés n'est parfois pas chronologique  
[Bug][LDAP] La gestion de session bloque les utilisateurs LDAP si plusieurs locataires sont utilisés avec LDAP  
[Bug][Objets] Navigateur d'objets : La licence liée n'est marquée que dans la sous-sélection  
[Bug][OCS] Reconstruire l'index de recherche après l'importation OCS  
[Bug][Code (interne)] Le bouton "Créer un nouvel objet" dans le navigateur d'objets devrait également être disponible s'il n'y a pas de sélection possible  
