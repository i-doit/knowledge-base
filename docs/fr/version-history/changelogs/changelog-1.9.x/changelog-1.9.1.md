# Journal des modifications 1.9.1

[Amélioration]   Permettre l'édition d'une nouvelle entrée dans un champ DialogPlus directement après son ajout  
[Amélioration]   Vérification améliorée de la boucle sur le câblage  
[Amélioration]   Barre de défilement horizontale dans les profils JDisc immédiatement visible  
[Amélioration]   Empilage de commutateurs : Vue d'ensemble des ports de tous les commutateurs membres  
[Amélioration]   Empilage de commutateurs : Ports logiques s'étendant sur plusieurs commutateurs  
[Amélioration]   Export des alias d'hôtes via l'exportation Check_MK  
[Amélioration]   L'importation JDisc ne rafraîchit pas le titre de l'objet  
[Amélioration]   Segmentation des unités de rack dans les racks  
[Amélioration]   L'attribut "adresse e-mail" de la catégorie "personnes" n'est pas sélectionnable dans l'importation csv  
[Amélioration]   Les nouvelles entrées créées sont validées via le Dialog-Admin  
[Amélioration]   Changement de masse : Configuration pour le journalisation  
[Amélioration]   Édition de liste : Option renommée "Tous les objets" en "Toutes les entrées"  
[Amélioration]   Recherche globale : affichage de l'ordre supérieur du titre de l'objet et de l'objet en condition normale  
[Amélioration]   Configuration pour le nombre maximum d'attributs dans les listes d'objets  
[Amélioration]   Administration des tags dans le dialog-admin  
[Amélioration]   Notification lors de la création d'une catégorie personnalisée, s'il existe une constante dupliquée  
[Amélioration]   Nouvelle vue : Câbles ouverts et inutilisés  
[Amélioration]   Dans la catégorie système d'exploitation, seuls les systèmes d'exploitation peuvent être choisis  
[Amélioration]   Bouton de suppression dans la vue du journal  
[Changement]     Suppression de la sélection des langues Single-Sign-On dans la configuration  
[Changement]     Supprimer la sélection multiple dans les vues de rapport  
[Bogue]          Le profil dans QCW ne peut pas être téléchargé si tous les autres profils ont été supprimés auparavant  
[Bogue]          Il est possible de modifier un groupe d'objets non défini par l'utilisateur avec QCW  
[Bogue]          Mauvaise présentation des liens d'objets dans Safari  
[Bogue]          L'exportation de la configuration Check_MK a échoué avec un message d'erreur  
[Bogue]          La relation entre l'entrée et la sortie sera perdue lors de la duplication  
[Bogue]          Erreur lors de l'enregistrement de la catégorie comptabilité  
[Bogue]          Certaines catégories sont affichées dans l'arborescence des objets mais pas dans QCW  
[Bogue]          Les catégories masquées dans QCW ne sont pas non plus affichées pour d'autres types d'objets  
[Bogue]          L'édition des filtres de service avec un identifiant > 10 n'est pas possible  
[Bogue]          La correspondance d'objet ne fonctionne pas avec la sensibilité à la casse  
[Bogue]          Édition de liste - Catégorie "Système d'exploitation" : Les licences attribuées ne peuvent pas être modifiées  
[Bogue]          Catégorie "Affectation de service" : Il n'est pas possible de sélectionner des types d'objets auto-définis avec la catégorie "Service"  
[Bogue]          L'attribut "sur l'appareil" a plusieurs sélections dans l'importation csv  
[Bogue]          LC__UNIVERSAL__USED_BY n'est pas traduit  
[Bogue]          Gestionnaire de rapports : La vue 'Objets dans l'emplacement (format liste)' ne peut pas être téléchargée  
[Bogue]          Édition de liste - Catégorie 'Comptabilité' : Enregistrer la date de la facture affiche une erreur 'La valeur du champ est invalide.'  
[Bogue]          Les constantes de langue sont affichées dans la version anglaise sous Paramètres système  
[Bogue]          L'édition d'un connecteur sans connexion crée toujours un nouveau câble  
[Bogue]          La constante de langue est affichée dans un objet câble dans la catégorie Fibre/longueur d'onde  
[Bogue]          Catégorie Relation : La direction de la relation change lorsqu'une entrée est enregistrée sans changer la direction.  
[Bogue]          Catégorie "Emplacement" / "Système d'exploitation" / "Comptabilité" : Les objets sélectionnés à partir d'une recherche affichent un emplacement incorrect  
[Bogue]          Lecture seule pour l'arrière-plan dans les profils CMDB-explorer ne fonctionne pas correctement  
[Bogue]          Catégorie adresse d'hôte : Si le réseau attribué est résolu, le réseau v4 global n'est pas sélectionné automatiquement  
[Bogue]          Les appareils ne sont pas toujours affichés dans l'arborescence du menu de gauche dans la vue combinée  
[Bogue]          Les erreurs JavaScript empêchent l'affichage de grandes listes d'adresses IP  
[Bogue]          La sélection pour les vues d'emplacement n'est pas affichée après la connexion.  
[Bogue]          Le bouton d'édition sous Répertoires LDAP ne fonctionne pas  
[Bogue]          Langue mixte sous Répertoires LDAP  
[Bogue]          Le filtre par défaut d'une liste d'objets n'est pas appliqué dès que la liste est appelée.  
[Bogue]          Import OCS : Le modèle de catégorie n'est pas mis à jour sur les appareils de commutation dans une pile  
[Bogue]          Import : Le modèle et le fabricant de la catégorie Modèle ne sont pas correctement connectés  
[Bogue]          Les paramètres des catégories à afficher sur la page d'aperçu sont supprimés en passant de Non à Oui  
[Bogue]          L'attribution de salles aux utilisateurs LDAP ne fonctionne pas  
[Bogue]          Les dates de début et de fin des licences sont toujours vides en vue liste  
[Bogue]          Gestionnaire de rapports : Une condition avec une unité provoque un message d'erreur s'il est défini comme première condition  
[Bogue]          Test de ZenDesk 0815  
[Bogue]          La vue "Changements de statut CMDB" ne répertorie pas chaque changement  
[Bogue]          Le mode d'écrasement de l'importation csv entraîne la création de plusieurs câbles  
[Bogue]          Il n'est pas possible de référencer un contrôleur à un disque dur via l'importation csv  
[Bogue]          La connexion de câble n'est pas affichée lorsque la longueur du câble n'est pas donnée  
[Bogue]          L'importation des champs Oui/Non dans les catégories personnalisées via l'importation csv n'est pas possible  
[Bogue]          install.sh ne fonctionne pas  
[Bogue]          Dans les profils JDisc, vous pouvez sélectionner "état my-doit" comme état CMDB  
[Bogue]          L'attribut "Fibre / longueur d'onde" est incorrect et devrait être "Couleur / Longueur d'onde"  
[Bogue]          Les connexions des câbles créés manuellement ne sont pas affichées en vue liste  
[Bogue]          La duplication du contenu des catégories personnalisées avec des champs dialog+ utilisant des constantes de langue duplique les entrées dans dialog+  
[Bogue]          La duplication du contenu des catégories personnalisées tout en utilisant des constantes de langue duplique également la catégorie elle-même  
[Bogue]          Gestionnaire de rapports : La catégorie spécifique "Objets attribués" de type d'objet "Organisation" ne peut pas être sélectionnée  
[Bogue]          L'affichage de l'ID est doublé dans le widget "Liste d'informations sur l'objet" si l'ID est choisi comme attribut.  
[Bogue]          Le type d'objet est créé en cliquant sur Annuler  
[Bogue]          La valeur de la longueur du câble est modifiée par x10 lorsqu'elle est ouverte en édition de liste  
[Bogue]          L'adresse de l'hôte n'est pas importée en tant que principale  
[Bogue]          Listes : Le format numérique ne fait aucune différence  
[Bogue]          Licences : Les coûts totaux ont trop de décimales  
[Bogue]          Message d'erreur après connexion dans la catégorie avec champ de devise  
[Bogue]          La recherche ne trouve aucun résultat lors de la recherche de champs WYSIWYG à partir de catégories à valeurs multiples  
[Bogue]          Impossible de charger le widget de notes en raison de sa longueur de caractères  
[Bogue]          Édition incorrecte d'une configuration de type d'objet inconnu  
[Bogue]          Message d'erreur lors de la suppression d'un type d'objet non vide est incorrect  
[Bogue]          Le gestionnaire de rapports copie le titre de l'objet dans les informations d'objet attribuées  
[Bogue]          L'attribut "adresse e-mail principale" est sélectionnable dans l'importation csv  
[Bogue]          Balises HTML à l'adresse e-mail dans la catégorie adresses e-mail  
[Bogue]          Plusieurs entrées de dialogue n'ont pas de statut  
[Bogue]          La catégorie "port" ne montre pas l'adresse IP dans le tableau  
[Bogue]          Attributs Dialog+ sans noms appropriés  
[Bogue]          Entrées de dialogue pour "Contrat : Type de contrat" ont "0" comme constantes  
[Bogue]          Le Dialog Admin ne sauvegarde pas les entrées pour "Module TTS : Systèmes de tickets"  
[Bogue]          La configuration des codes QR pour des types d'objets spécifiques n'est pas affichée correctement lorsque la configuration est ouverte  
[Bogue]          Icône pour la sélection des attributs liés dans "poste de travail attribué" manquante dans le gestionnaire de rapports  
[Bogue]          Mauvaise présentation de la licence attribuée dans l'affectation de logiciel, lors de la tentative de modification d'une entrée existante  
[Bogue]          Un message d'erreur apparaît en essayant de désinstaller une extension dans AdminCenter  
[Bogue]          Le filtre dans la liste 'Profils JDisc' ne fonctionne pas  
[Bogue]          Vue dans la catégorie à valeurs multiples 'groupe d'objets' défectueuse  
[Bogue]          Les objets attribués dans les fichiers ne peuvent pas être cliqués  
[Bogue]          Le téléchargement d'une nouvelle version de fichier supprime la catégorie et le commentaire  
[Bogue]          Impossible d'intégrer la catégorie spécifique "Fichiers > Objets attribués" dans une liste  
[Bogue]          La recherche ne trouve pas le contenu de la description, s'il contient des caractères spéciaux  
[Bogue]          Câblage : La connexion affiche par défaut le connecteur d'alimentation IEC au lieu de "-"  
[Bogue]          Les connexions sont dupliquées au lieu d'être enregistrées  
[Bogue]          Mauvaise présentation des dates dans la catégorie "affectation de contrat"  
[Bogue]          Mauvais numéro d'inventaire utilisé dans l'imprimante de codes QR, lors de l'utilisation de %COUNTER% pour la génération automatique du numéro  
[Bogue]          Si la recherche est ajoutée en tant que signet, seul le texte apparaîtra sous my-doit  
[Bogue]          Les catégories supprimées sont toujours affichées dans les listes  
[Bogue]          Les signets créés dans my-doit renvoient au tableau de bord  
[Bogue]          La catégorie "écouteur" ne répertorie pas les connexions  
[Bogue]          Les rapports avec des champs de date provenant de catégories définies par l'utilisateur ne reconnaissent pas le format de date spécifique au pays  
[Bogue]          Le calcul de la capacité de raid est défectueux lors du changement d'unité de stockage ou de capacité  
[Bogue]          Les objets sont créés avant l'enregistrement, aucune suppression n'a lieu lors de l'annulation  
