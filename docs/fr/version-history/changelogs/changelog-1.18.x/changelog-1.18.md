# Journal des modifications 1.18

[Amélioration][Chiffrement de mot de passe 2.0] Nouveau cryptohashage pour les mots de passe des utilisateurs  
[Amélioration][Catégories personnalisées] Nouveau type de champ "Champ numérique" dans les catégories personnalisées  
[Amélioration][Catégories personnalisées] Dépendances pour les champs de dialogue+ dans les catégories personnalisées  
[Amélioration][Catégories personnalisées] Utilisation de variables dans les catégories personnalisées  
[Amélioration][Paramètres système] Définition libre de variables COUNTER  
[Amélioration][Importation] Les zones réseau ne sont pas attribuées aux objets importés depuis JDisc  
[Erreur][Importation CSV] Exporter les catégories personnalisées de type rapport en csv  
[Erreur][Système d'autorisation] Le droit d'archiver et de supprimer n'a aucun effet pour les "objets en dessous d'un emplacement logique".  
[Erreur][Système d'autorisation] La création d'un rapport modifie le système de permissions et attribue de nouvelles permissions  
[Erreur][Système d'autorisation] Les utilisateurs obtiennent automatiquement un accès complet aux objets qu'ils créent  
[Erreur][Système d'autorisation] Attribution de droit pour le type d'objet "Conteneur" possible  
[Erreur][Système d'autorisation] Nom amélioré pour les droits, permettant l'accès au contenu en dessous d'un objet défini  
[Erreur][Système d'autorisation] Nettoyage des permissions, concernant les objets en dessous d'un emplacement physique/logique  
[Erreur][Système d'autorisation] Parfois, la même permission est affichée plusieurs fois  
[Erreur][Système d'autorisation] Paramètres utilisateur : La présence n'est pas configurable  
[Erreur][Système d'autorisation] La catégorie "Ports assignés" de Layer 2 Net pour les objets Layer 2 Net ne peut pas être éditée  
[Erreur][Catégories] L'attribut "Dernière révision" de la catégorie des documents devrait être affiché dans la liste des objets  
[Erreur][Catégories] Information inutile sur le manque de droit de création lors de l'édition d'un objet  
[Erreur][Catégories] La liste des objets assignés à une licence ne peut pas être triée  
[Erreur][Catégories] Les zones réseau ne sont pas chargées dans les filtres de la vue de liste des objets  
[Erreur][Catégories] Nouveau mode sélectionnable par défaut pour les ports ("Empilage")  
[Erreur][Catégories] La position de l'étiquette du filtre des valeurs vides n'est pas liée aux cases à cocher  
[Erreur][Catégories] Tri des ports et connecteurs dans le navigateur de câblage  
[Erreur][Catégories] Si les affectations de contrat sont détachées, une entrée de catégorie vide avec "{}" comme désignation reste  
[Erreur][JDisc] Ne créez pas de nouveaux objets personne mais liez les existants  
[Erreur][JDisc] Le nouveau type d'attribut personnalisé JDisc n'est pas importé dans i-doit  
[Erreur][JDisc] Importation du champ d'assignation d'adresse depuis JDisc  
[Erreur][Gestionnaire de rapports] Le rapport n'affiche pas les attributs lors de la sortie de la sous-catégorie "Personnes" de la catégorie "Organisation"  
[Erreur][Gestionnaire de rapports] Le gestionnaire de rapports ne remplace pas les espaces réservés  
[Erreur][Gestionnaire de rapports] Gestionnaire de rapports : Les paramètres dans la condition changent lors de l'ouverture d'un rapport  
[Erreur][Gestionnaire de rapports] Valeurs incorrectes lors de la liste des informations de la catégorie Ressources informatiques dans un rapport  
[Erreur][Gestionnaire de rapports] Informations améliorées sur le type de rapport lors de la création  
[Erreur][API] Les groupes de personnes ne peuvent pas être ajoutés via Personne -> Adhésions aux groupes de personnes  
[Erreur][Catégories personnalisées] Dans les catégories personnalisées au champ de relation d'objet, le type de relation ne peut pas être enregistré  
[Erreur][OCS] Importation OCS : Si des catégories à valeurs multiples sont importées, il y a des doublons  
[Erreur][Code (interne)] Le paramètre "Modifications" des signaux ne contient pas de tableau  
[Erreur][Code (interne)] Erreur 500 si aucune entrée de navigateur d'objet n'est sélectionnée pour l'édition  
[Erreur][Code (interne)] La légende du Net disparaît en faisant défiler vers le bas  
[Erreur][Code (interne)] Les icônes de dossier de base de données ne sont pas affichées  
[Erreur][LDAP] Pour un filtre LDAP avec * comme espace réservé, aucun objet n'est importé  
[Erreur][Recherche] La recherche globale pour "%aa" provoque une erreur SQL  
[Erreur][Recherche] La recherche trouve des objets archivés/supprimés, même s'ils sont exclus par le paramètre système, si leur contenu est modifié après avoir changé l'état de l'objet en archivé/supprimé  
[Erreur][Recherche] Si le type d'objet d'un objet est modifié, l'objet sera trouvé avec les deux types d'objets dans la recherche  
[Erreur][Importation] L'importation LDAP/AD ignore le modèle par défaut pour les types d'objet  
[Erreur][Importation] Les objets exportés qui sont installés verticalement dans des armoires sont mal cartographiés par l'importation XML  
[Erreur][Importation] Importation CSV par attributs à valeurs multiples séparés par des virgules d'une catégorie définie par l'utilisateur  
[Erreur][Importation] L'importation de cartes SIM - les cartes liées aux téléphones cellulaires ne crée pas de relation  
[Erreur][Édition de liste] Les catégories personnalisées qui ont un champ de rapport ne peuvent pas être ouvertes en édition de liste  
[Erreur][Validation] Les objets en double contournent la validation configurée  
[Erreur][Validation] Le champ de description dans les catégories personnalisées ne peut pas être défini comme obligatoire dans la validation  
[Erreur][Journal] Les entrées du journal des composants de poste de travail assignés et du poste de travail assigné ne sont affichées que dans une direction  
[Erreur][Listes] Trier par rôles dans les groupes de personnes > Membres ne trie pas correctement  
[Erreur][Listes] Pour les relations uniques résolues {} sont affichés dans la vue de liste  
[Erreur][Listes] Les licences disponibles ne sont pas affichées correctement dans la vue de liste (basée sur le cœur)  
[Erreur][Listes] Dans nos listes, l'icône de pagination pour "page précédente" est manquante  
[Erreur][CMDB] La constante de langue pour l'emplacement racine ne fonctionne pas partout  
[Erreur][CMDB] Proposer la variante de mot de passe "Fort" n'est pas traduite en anglais  
[Erreur][Objets] Les modifications dans les catégories ne sont pas correctement affichées via le module complémentaire Événements  
[Erreur][Paramètres CMDB] Les caractères spéciaux pour les catégories personnalisées avec des champs JavaScript sont nettoyés  
[Erreur][Configuration du type d'objet] Les icônes de l'arborescence d'objets sont dans le mauvais dossier  
[Erreur][Notifications] Type pour les notifications dans la version allemande  
