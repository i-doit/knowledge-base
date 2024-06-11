# Journal des modifications 23

[Task][Catégories]               Changer le type de champ de la base de données pour les champs de description de TEXT à LONGTEXT  
[Task][Code (Interne)]          Renommer "Date de résiliation possible suivante" en "Dernière date de résiliation possible"  
[Amélioration][CMDB]            Autoriser les fichiers SVG en tant qu'image et icône d'objet  
[Amélioration][CMDB]            Créer un espace réservé pour le format 24h  
[Amélioration][Code (Interne)]  Traduction de contenu personnalisé  
[Amélioration][Relations]       Option pour définir l'espacement pour les arbres de menu  
[Amélioration][Import CSV]      Faire un usage approprié des profils dans la commande d'importation CSV  
[Amélioration][Catégories]      Étendre automatiquement la durée du contrat  
[Bug][Listes]                   Le filtre pour la zone Net n'est pas disponible dans la vue de liste  
[Bug][Listes]                   Système de câblage manquant dans la configuration de la vue de liste des serveurs  
[Bug][Listes]                   Les objets assignés manquent dans la configuration de la vue de liste  
[Bug][Listes]                   Le texte dans l'aperçu de la liste est tronqué pour les champs à valeurs multiples  
[Bug][JDisc]                   L'importation JDisc définit toujours le serveur DNS et cela est enregistré dans le journal  
[Bug][JDisc]                   La découverte JDisc ne fonctionne pas avec HTTP/HTTPS  
[Bug][JDisc]                   Le nom du DBMS et de l'instance n'est pas supprimé correctement  
[Bug][JDisc]                   Erreur d'importation JDisc lorsque "Utiliser une modélisation de base de données simple ?" est activé  
[Bug][JDisc]                   L'importation JDisc via la console supprime les catégories et autres configurations  
[Bug][JDisc]                   Le profil JDisc n'est pas enregistré avec le serveur JDisc par défaut après la création d'une entrée de serveur JDisc  
[Bug][Édition de liste]         L'allocation de port est supprimée lors de l'enregistrement dans l'édition de liste  
[Bug][Édition de liste]         Créer une nouvelle valeur pour le modèle dans l'édition de liste provoque une erreur  
[Bug][Édition de liste]         Le VLAN par défaut dans l'édition de liste n'est pas sélectionnable  
[Bug][Édition de liste]         L'attribution de contact ne fonctionne pas pour les valeurs vides dans l'édition de liste  
[Bug][Édition de liste]         Édition de liste - Les sièges sociaux ne sont pas affichés pour les organisations  
[Bug][Code (Interne)]          Interdire l'accès aux fichiers .ini  
[Bug][Code (Interne)]          Correction du contenu de config.inc.php  
[Bug][Code (Interne)]          Filtrer un ID numérique dans la liste d'objets échoue - PHP 8.1  
[Bug][Code (Interne)]          Après avoir tapé 3 caractères, le focus de la recherche du navigateur d'objets est changé en filtre  
[Bug][Code (Interne)]          Autoriser l'ouverture du lien dans un nouvel onglet pour le champ HTML  
[Bug][Code (Interne)]          Mauvaise icône pour l'exportation dans l'assistant de configuration rapide  
[Bug][Code (Interne)]          Les pièces jointes dans les racks ne fonctionnent pas correctement  
[Bug][Code (Interne)]          Passer à la vue d'emplacement avec une énorme quantité d'objets et d'emplacements gèle i-doit  
[Bug][Code (Interne)]          Enregistrer la configuration du système de tickets d'incident (TTS) ne affiche pas de message de sauvegarde  
[Bug][Code (Interne)]          Il n'est pas possible de télécharger des images et des icônes d'objet personnalisées  
[Bug][Code (Interne)]          Correction du calcul IP pour PHP 8+  
[Bug][Code (Interne)]          Enregistrer la catégorie 'Général' affichera toujours des champs 'date de création' et 'dernière modification' vides dans le journal  
[Bug][Code (Interne)]          Erreur PHP 8.1 lorsque l'extension est désactivée  
[Bug][Code (Interne)]          Les objets avec une catégorie d'emplacement vide sont affichés dans l'arborescence des emplacements  
[Bug][Configuration du type d'objet]  Les catégories spécifiques du type d'objet manquent dans la sélection  
[Bug][Configuration du type d'objet]  Les icônes des objets ne sont pas téléchargées  
[Bug][Configuration du type d'objet]  Impossible de télécharger .svg pour l'icône du type d'objet  
[Bug][Gestionnaire de rapports]  Le gestionnaire de rapports utilise un mauvais format de date qui affiche de mauvais résultats  
[Bug][Gestionnaire de rapports]  Les conditions pourraient ne pas être chargées correctement dans le gestionnaire de rapports  
[Bug][Gestionnaire de rapports]  Une zone Net n'est pas sélectionnable pour le gestionnaire de rapports dans une installation i-doit mise à jour  
[Bug][Gestionnaire de rapports]  La durée d'un contrat n'est pas affichée dans les résultats du rapport  
[Bug][Gestionnaire de rapports]  Aucune information sur le tri actif dans le gestionnaire de rapports  
[Bug][Gestionnaire de rapports]  Gestionnaire de rapports - Les conditions sont supprimées lors de l'utilisation d'un bloc de condition  
[Bug][Gestionnaire de rapports]  Exportation différente d'un rapport si un attribut dynamique a été ajouté dans le rapport  
[Bug][Gestionnaire de rapports]  Le journal des rapports ne contient pas de couleurs  
[Bug][LDAP]                   Si la synchronisation ldap ne trouve pas un utilisateur dans le chemin de recherche une erreur fatale php se produit avec php8.0  
[Bug][LDAP]                   La synchronisation LDAP ne se connecte pas au journal lorsque une personne est recyclée  
[Bug][LDAP]                   Chaque synchronisation ldap génère un message d'objet archivé dans le journal  
[Bug][LDAP]                   La synchronisation ldap a entraîné une erreur  
[Bug][LDAP]                   Erreur 500 avec la connexion SSO  
[Bug][Installation]           La méthode de chiffrement des mots de passe est définie sur %config.security.passwords_encryption_method% après l'installation  
[Bug][Importation CSV]        L'importation de l'état CMDB via l'importation CSV via la console crée un nouvel état CMDB au lieu d'utiliser le bon  
[Bug][Importation CSV]        Le profil d'importation CSV avec console.php ne gère pas le paramètre de catégorie à valeurs multiples  
[Bug][Importation CSV]        Importation d'objets assignés verticalement dans un rack via l'importation CSV non possible  
[Bug][Importation CSV]        Les champs DateTime ne sont pas importables via CSV  
[Bug][Importation CSV]        Les statuts CMDB importés via CSV ne sont pas affichés dans Paramètres CMDB > Statut CMDB  
[Bug][Importation CSV]        L'importation CSV n'utilise pas le numéro d'inventaire automatique  
[Bug][Importation CSV]        Le cache d'importation CSV n'est pas vidé avant l'importation via console.php  
[Bug][Importation CSV]        Si l'option --csvSeparator n'est pas utilisée pour la commande d'importation-csv "Fichier CSV vide" est affiché  
[Bug][Codes QR]               Le code QR ne se charge pas lors de l'utilisation d'un répartiteur de charge  
[Bug][Codes QR]               La mise en page des codes QR dans la vue du rapport est irrégulière  
[Bug][Catégories]             L'utilisation de quickpurge pour application>installations provoque une erreur  
[Bug][Catégories]             Erreur lors de l'archivage de l'attribution de service  
[Bug][Catégories]             Impossible de masquer l'objectid  
[Bug][Catégories]             Erreur SQL lors de la suppression des objets assignés dans les organisations  
[Bug][Catégories]             Les adresses IP sont parfois tronquées dans les listes IP  
[Bug][H-Inventory]            Erreur d'importation d'inventaire en raison d'entrées manquantes dans le cache des constantes  
[Bug][Validation]             Validation de l'importation CSV pour le numéro d'inventaire automatique  
[Bug][Validation]             L'importation CSV ignore la règle de validation "une expression régulière"  
[Bug][Validation]             Les champs choisis ne sont pas mis en surbrillance lorsque la validation échoue  
[Bug][Validation]             Afficher l'erreur de validation à l'utilisateur si le champ de dialogue personnalisé+ est requis  
[Bug][Validation]             Il n'est pas possible de valider la catégorie Lieux de travail assignés  
[Bug][Documents]              Les objets assignés ne sont pas affichés dans les documents  
[Bug][Documents]              Erreur lors de l'exportation de documents console.php en dehors du dossier i-doit  
[Bug][Centre d'administration]  Aucun message si un module complémentaire avec une exigence 1.19 est installé dans une version antérieure à 1.19  
[Bug][Centre d'administration]  Les licences d'objets assignés ne sont pas comptabilisées dans le Centre d'administration  
[Bug][Centre d'administration]  La réinitialisation du mot de passe du Centre d'administration lance une exception lorsque la licence est manquante depuis plus de 30 jours  
[Bug][Explorateur CMDB]        L'explorateur CMDB ne peut pas exporter le graphique  
[Bug][Explorateur CMDB]        Les relations sont affichées à l'envers dans une exportation GraphML de l'explorateur CMDB  
[Bug][Modèles]                Le numéro d'inventaire automatique ne fonctionne pas pour le modèle  
[Bug][Notifications]          Les notifications d'expiration de licence ne fonctionnent pas correctement  
[Bug][Refonte de l'application]  Liste IP tronquée lors de l'attribution d'un objet  
[Bug][CMDB]                  Impossible de masquer certains attributs dans la visibilité des attributs  
[Bug][Outils système]         Chargement infini lors de la vérification de mod_rewrite dans l'aperçu du système  
[Bug][Paramètres système]     Si le paramètre système Placeholder dans les listes est inférieur au nombre de caractères requis, l'ID de l'objet est affiché  
[Bug][Mise à jour]            Autorisation pour la mise à jour via console.php non possible  
[Bug][Mise à jour]            Message d'erreur lors de la modification de la configuration du type d'objet  
[Bug][Édition de masse]       Si une licence > clé de licence est attribuée via le changement de masse, la clé de licence est dupliquée  
[Bug][Système d'autorisation]  Les bonnes catégories dans les objets avec un rôle assigné dans l'attribution de contact ne sont pas attribuées  
[Bug][Catégories personnalisées]  L'affichage de 2 rapports variables dans l'aperçu ne fonctionne pas  
[Bug][Importation]            Objets avec Checkmk 2 Add-on données exportées via XML et importées dans un client sans l'Add-on provoquent une erreur d'importation  
[Bug][Surveillance]           La surveillance ne peut pas être désactivée avec l'attribut Actif  
[Bug][API]                    L'entrée parent d'un champ de dialogue+ ne peut pas être identifiée par le titre  
[Bug][API]                    Catégorie Connecteurs de câblage > Le connecteur assigné est un tableau  
