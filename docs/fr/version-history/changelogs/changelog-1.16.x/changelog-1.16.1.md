# Journal des modifications 1.16.1

[Amélioration][Catégories] Ajouter l'attribut Firmware pour la catégorie Réseau -> interfaces  
[Erreur][LDAP] Le mappage des groupes LDAP ne fonctionne plus  
[Erreur][LDAP] Les valeurs supprimées de AD/LDAP restent inchangées dans i-doit  
[Erreur][LDAP] La fonction ldap-sync .ini ignoreUsersWithAttributes ne fonctionne pas correctement  
[Erreur][CMDB] Le navigateur de câblage et la sélection d'emplacement utilisent une URL absolue au lieu d'une URL relative  
[Erreur][CMDB] Les statuts CMDB 'En fonctionnement' et 'inopérant' ne peuvent pas être définis via l'importation CSV  
[Erreur][Catégories] L'objet connecté dans la catégorie "ports logiques" n'a pas de lien hypertexte  
[Erreur][Catégories] Le navigateur de câblage affiche le connecteur et le port comme une paire  
[Erreur][Catégories] Les emplacements de rack ne peuvent pas être utilisés si vous êtes à l'arrière  
[Erreur][Catégories] Sélectionner un domaine DNS dans la catégorie "net" provoque une présentation incorrecte du champ de sélection  
[Erreur][Catégories] Les objets ne peuvent pas être modifiés de l'état Modèle à d'autres états  
[Erreur][Catégories] La connexion d'un port FC n'est pas déconnectée  
[Erreur][Catégories] Pour les panneaux de brassage, la position dans l'armoire n'est pas affichée dans la vue en liste  
[Erreur][Catégories] Les liens doivent être gérés de la même manière dans toutes les catégories, y compris le type de champ de lien  
[Erreur][Catégories] La sélection d'un réseau dans la catégorie "Adresse hôte" sélectionne parfois un superréseau, même si une sélection manuelle pour un réseau de couche 3 a été effectuée précédemment  
[Erreur][Catégories] Le nom de l'attribut de dialogue 'Type de service' ne peut pas être clairement associé à la catégorie 'Service > Type de service >> Type'  
[Erreur][Catégories] Nouveau type de champ pour le champ de base de données de l'attribut "Lien de fichier (externe)"  
[Erreur][Gestionnaire de rapports] Gestionnaire de rapports : il insère toujours une condition qui n'a pas été sélectionnée  
[Erreur][Gestionnaire de rapports] Erreur HTTP 500 lors de l'ouverture d'un rapport  
[Erreur][Gestionnaire de rapports] Le rapport avec l'attribut d'objet liste IP crée une erreur SQL  
[Erreur][Gestionnaire de rapports] L'utilisation de relations de catégories spécifiques et globales en même temps dans un rapport provoque une erreur  
[Erreur][Gestionnaire de rapports] Erreur lors de l'utilisation de "Cartes SIM attribuées" dans le gestionnaire de rapports  
[Erreur][Gestionnaire de rapports] Le rapport affiche des informations incorrectes sur la forme du facteur de forme  
[Erreur][Gestionnaire de rapports] Gestionnaire de rapports : Message d'erreur SQL lors de l'utilisation des attributs de contrat  
[Erreur][Gestionnaire de rapports] Message d'erreur du gestionnaire de rapports lorsqu'un système d'exploitation est sélectionné comme attribut  
[Erreur][Gestionnaire de rapports] Gestionnaire de rapports : la connexion d'attribut (consommateur d'énergie) n'est pas disponible  
[Erreur][Gestionnaire de rapports] Vérification du rapport dynamique non disponible pour les rapports, créés/modifiés via l'éditeur SQL  
[Erreur][Gestionnaire de rapports] Gestionnaire de rapports : Le lien Or n'est pas généré correctement  
[Erreur][Gestionnaire de rapports] Tri des adresses IP dans les rapports  
[Erreur][Catégories personnalisées] Les constantes de langue ne sont pas remplacées pour les cases à cocher dans les catégories définies par l'utilisateur  
[Erreur][Catégories personnalisées] Une catégorie personnalisée ne peut pas être modifiée si un rapport est affiché à côté des champs de texte  
[Erreur][Catégories personnalisées] Les attributs de lien des catégories personnalisées doivent être liés dans les listes  
[Erreur][Catégories personnalisées] Les valeurs par défaut pour les champs oui/non dans les catégories personnalisées ne sont pas utilisées pour sélectionner une valeur par défaut  
[Erreur][Gestion des interfaces] La connexion Zammad ne fonctionne pas pour le type d'objet poste de travail  
[Erreur][JDisc] Message d'erreur lors de l'importation JDisc si l'option JDisc "Importer les points de connexion" est activée  
[Erreur][JDisc] JDisc : Les adaptateurs réseau virtuels sont importés  
[Erreur][JDisc] Connexion de point de terminaison JDisc  
[Erreur][JDisc] Aucune entrée de journal via l'importation JDisc de personnes  
[Erreur][Notifications] Stratégie de calcul du destinataire dans les notifications sans fonction  
[Erreur][Notifications] Erreur lors de l'exécution de la console i-doit avec la commande d'envoi de notification  
[Erreur][Listes] La présentation des données groupées (séparées par des virgules ou liste) n'a aucun impact sur les catégories à valeurs multiples  
[Erreur][Listes] Le champ "description" n'est pas disponible pour être sélectionné pour les listes dans les catégories à valeurs multiples personnalisées  
[Erreur][Listes] Les cartes SIM attribuées ne peuvent pas être ouvertes en cliquant dessus dans la vue en liste  
[Erreur][Listes] L'attribut "objet attribué" de la catégorie "ports logiques" ne peut pas être sélectionné pour être affiché dans la liste d'objets  
[Erreur][Active Directory] La fonction d'importation d'ordinateurs Active Directory n'importe pas les ordinateurs ou les serveurs  
[Erreur][Importation CSV] L'importation CSV génère un message d'erreur et ne s'exécute pas  
[Erreur][Explorateur CMDB] La constante de langue pour les rôles n'est pas traduite dans l'explorateur CMDB  
[Erreur][Vue imprimée] La vue imprimée pour les catégories ne fonctionne pas  
[Erreur][Vue imprimée] Certains formats HTML ne sont pas affichés correctement dans l'aperçu avant impression  
[Erreur][Code (interne)] Correction de la vulnérabilité XSS dans la configuration d'exportation de surveillance  
[Erreur][Code (interne)] Message d'erreur lors de la mise à jour d'i-doit vers la version 1.16  
[Erreur][Paramètres CMDB] La suppression des données modifie également les catégories définies par l'utilisateur  
[Erreur][Recherche] Si vous utilisez la recherche, un message d'erreur SQL est affiché mais la recherche est exécutée  
[Erreur][Recherche] Les objets dupliqués ne sont pas automatiquement ajoutés à l'index de recherche  
[Erreur][Paramètres système] Le navigateur d'objets dans la modification de liste n'utilise pas la sélection par défaut pour le champ de navigateur d'objets  
[Erreur][Modification de liste] La modification de liste pour les licences attribuées sous Application>Installation ne fonctionne pas  
[Erreur][Configuration du type d'objet] La sélection des icônes de type d'objet n'inclut pas tous les dossiers  
[Erreur][Paramètres utilisateur] La sauvegarde de la présentation de l'arborescence doit être enregistrée deux fois  

I am ready to start translating the Markdown content into French. Please go ahead and paste the content you would like me to translate.
