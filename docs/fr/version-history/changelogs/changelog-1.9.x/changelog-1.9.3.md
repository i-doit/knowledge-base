# Journal des modifications 1.9.3

[Amélioration] Option pour décoder en UTF-8 les fichiers exportés de Check_MK  
[Amélioration] Nouvelle configuration pour gérer les erreurs de validation lors de la duplication d'objets  
[Amélioration] Amélioration de l'index de recherche pour augmenter les performances  
[Amélioration] Nouveau paramètre système ajouté "Activer l'interaction entre 'Emplacement logique' et 'Emplacement'?"  
[Amélioration] Amélioration de la catégorie "certificat"  
[Bogue] Empilement : Les piles avec un seul membre ne peuvent pas être lues  
[Bogue] Liste d'objets : L'attribut "Fonctionne sur" de la catégorie "Affectation de service de cluster" provoque un message d'erreur  
[Bogue] Les champs de date ne peuvent pas être enregistrés si aucun format de date n'est défini dans les paramètres de l'utilisateur  
[Bogue] Tri incorrect des serveurs dans un rack  
[Bogue] En-tête des champs de données dans des catégories définies par l'utilisateur ne sont pas correctement donnés lors d'une exportation  
[Bogue] Détacher l'attribut du serveur DNS dans la catégorie réseau provoque une erreur de syntaxe MySQL dans le navigateur d'objets  
[Bogue] Réseau de couche 3, allocation d'adresse IP statique incorrecte si une zone DHCP réservée est configurée  
[Bogue] Listes : Les utilisateurs archivés sont affichés dans les affectations de contacts  
[Bogue] Le modèle de tri dans les listes d'objets n'est pas possible  
[Bogue] Import OCS : L'importation échoue après le premier objet invalide  
[Bogue] Erreur lors de l'importation d'une adresse IP via CSV en utilisant un zéro initial dans n'importe quel octet  
[Bogue] Système d'autorisation : Le champ de catégorie pour la catégorie d'autorisations dans l'objet, le type d'objet et dans les objets sous un emplacement n'était pas activé en mode édition  
[Bogue] La catégorie "LDAP" est affichée comme inactive dans l'arborescence du menu de gauche malgré l'existence de données  
[Bogue] Suppression automatique de l'emplacement physique lors de l'attribution d'un emplacement logique  
[Bogue] Catégorie comptabilité : Le remplacement du numéro d'inventaire automatique pour plusieurs types d'objets ne fonctionne pas correctement lors de l'importation  
[Bogue] Catégorie Adhésions aux clusters : Si une affectation est supprimée, l'objet de relation correspondant n'est pas supprimé  
[Bogue] Centre d'administration : Les umlauts ne sont pas affichés correctement, si un nouveau locataire a été ajouté  
[Bogue] Les contenus du journal sont trouvés via la recherche après avoir effectué un changement massif  
[Bogue] Préfixe configuré pour les câbles créés automatiquement est ignoré  
[Bogue] Import CSV : L'importation de l'affectation de contact de catégorie crée une entrée vide si elle n'est pas définie dans le fichier CSV  
[Bogue] Validation : Si une validation existe pour la catégorie Données principales (Personnes), elle n'affecte que la catégorie de dossier personnes  
[Bogue] La synchronisation LDAP définit tous les utilisateurs trouvés à l'état "normal" pendant une courte période pendant la synchronisation  
[Bogue] Erreur lors de l'attribution de droits pour la catégorie "systèmes invités"  
[Bogue] Déplacer le type d'objet câble vers un autre groupe de types d'objets fait disparaître les câbles de la sélection du navigateur de câbles  
[Bogue] Import de tous les ports via l'importation JDisc, même avec un filtre de port défini  
[Bogue] Erreur lors de l'utilisation d'un filtre de port dans le profil JDisc  
[Bogue] Le pied de page du Centre d'administration diffère avant et après la connexion  
[Bogue] La catégorie "Mot de passe" n'est pas chiffrée après la duplication d'un objet  
[Bogue] L'objet doit être affiché comme positionnable dans un rack  
[Bogue] Toutes les fonctionnalités WYSIWYG ne sont disponibles que sur la page d'aperçu  
[Bogue] Catégories personnalisées : Le type de champ 'navigateur de fichiers' ne fonctionne pas  
[Bogue] Gestionnaire de rapports : Aucun résultat n'était affiché pour certaines combinaisons de caractères dans l'attribut "Chemin d'emplacement"  
[Bogue] Incohérences dans l'affichage des entrées et des sélections des résultats de recherche  
[Bogue] Comptage incorrect dans la liste d'objets pour le nombre d'IP utilisées  
[Bogue] Utilisation du contenu avec [...]LC_[...] non possible  
[Bogue] Notifications : Les licences sont toujours affichées dans les e-mails, même avec une clé de licence archivée ou supprimée  
[Bogue] Le journal ne montre pas les alarmes de haute (3) priorité  
[Bogue] Import CSV : L'importation via le contrôleur ne fonctionne pas si l'option MultiValue 'virgule' est utilisée  
[Bogue] Supprimer un Dialog+ partagé dans des catégories personnalisées supprime toutes les entrées pour les autres catégories l'utilisant  
[Bogue] Le backslash dans les titres d'objets n'est souvent pas affiché correctement  
[Bogue] Liste d'objets : Erreur lors du tri de l'attribut "catégorie"  
[Bogue] Un message d'erreur s'affiche sur Extras > CMDB > Import  
[Bogue] Le gestionnaire de rapports crée des requêtes erronées pour les relations d'objets  
[Bogue] Le navigateur d'objets ouvre un onglet inactif dans certaines conditions  
[Bogue] Utilisation de câbles existants pour l'importation de câblage n'est pas possible  
[Bogue] Erreur lors du téléchargement d'un rapport en ligne sur plusieurs locataires  
[Bogue] Le format des descriptions n'est pas correctement enregistré, malgré l'utilisation de l'éditeur WYSIWYG  
[Bogue] Édition de liste : catégorie 'Port' : L'ID du câble ne peut pas être modifié  
[Bogue] Sélection vide de HU dans un rack via l'emplacement n'est pas possible  
[Bogue] Masque incorrect pour l'affectation de contact après avoir cliqué sur le bouton d'acceptation  
[Bogue] L'édition de l'adresse de l'hôte n'est pas possible via l'édition de liste  
[Bogue] Validation : Multiples numéros d'inventaire après la duplication d'objets  
[Bogue] Le type de champ d'affectation/de relations pour sélectionner plusieurs objets dans des catégories personnalisées n'est pas correctement transféré avec l'exportation XML  
[Bogue] Icône pour visualiser le succès du ping est affichée dans la colonne d'objet  
[Bogue] La catégorie Clusters attribués à DBMS ne contient pas de bouton et de liste d'attributs  
[Bogue] Le widget "Notes" perd le format lors de l'édition  
[Bogue] La correspondance pour les services système ne fonctionne pas avec l'importation JDisc  
[Bogue] L'emplacement logique n'est pas affiché dans la liste d'objets, si un objet d'un autre type d'objet que "personne" est sélectionné  
[Bogue] Import CSV : L'importation des dates dans des catégories personnalisées est toujours importée avec des horodatages  
[Bogue] Configuration du journal : L'utilisation des boutons plus et moins ne change que la valeur supérieure  
[Bogue] Configuration du journal : Suppression de l'attribut en double "Quantité maximale de modifications détaillées combinées (par catégorie)"  
[Bogue] La mise en évidence des mots-clés trouvés dans les champs de description n'est pas visible  
[Bogue] Les constantes de langue personnalisées ne sont pas utilisées  
[Bogue] Afficher la date d'achat sans heure dans les listes  
[Bogue] Le journal des événements ne montre pas la commande utilisée mais la commande actuellement configurée  
[Bogue] Les ressources restantes dans la vitalité du cluster ne sont pas calculées correctement  
[Bogue] Dialog Admin : Suppression de la colonne "supprimable" pour les champs de dialog+ personnalisés  
[Bogue] Relations de catégorie : Lors de la création d'une relation explicite, la direction entre l'objet maître et l'objet esclave n'est pas prise en compte  
