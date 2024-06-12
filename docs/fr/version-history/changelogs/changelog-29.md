# Journal des modifications 29 

[Tâche][Service]                    Ajouter un lien vers l'enquête de satisfaction client dans i-doit pro<br>
[Tâche][Code (Interne)]            Intégrer un composant de sélection de couleurs amélioré<br>
[Tâche][Code (Interne)]            Nettoyer les utilisations de couleurs<br>
[Tâche][Système de permissions]    Améliorer les performances d'autorisation pour les emplacements<br>
[Tâche][Portail client intégré]    Intégrer i-doit et les packages de téléchargement spécifiques à l'Add-on dans i-doit<br>
[Tâche][Connexion i-doit]          Désactiver l'autocomplétion pour le champ de mot de passe sur la page de connexion<br>
[Tâche][CMDB]                      Améliorer l'élément d'interface utilisateur pour les statistiques de rack<br>
[Amélioration][Code (Interne)]     Compatibilité PHP 8.2<br>
[Amélioration][Code (Interne)]     Connexion améliorée pour SSO<br>
[Amélioration][JDisc]              Nouvelle commande console.php : Configurer les paramètres communs de JDisc<br>
[Amélioration][JDisc]              Ajouter la sélection de profil correspondant pour chaque mappage de type JDisc<br>
[Amélioration][JDisc]              Liste noire/Liste blanche pour les réseaux de couche 3 et les adresses d'hôtes<br>
[Amélioration][Parcours d'évaluation] Ajouter le lien d'enquête i-doit pro EVAL<br>
[Bogue][CMDB]                      Recycler les emplacements via des objets assignés localement provoque une erreur et supprime des données<br>
[Bogue][CMDB]                      Le compteur personnalisé compte 2 au lieu de 1<br>
[Bogue][Sécurité]                  Vulnérabilité XSS dans la recherche globale<br>
[Bogue][Journal]                   Le changement via l'API n'est pas enregistré dans le journal<br>
[Bogue][Journal]                   Une entrée dans la catégorie X n'a pas pu être modifiée<br>
[Bogue][Code (Interne)]            Il est possible de créer des boucles d'emplacement<br>
[Bogue][Code (Interne)]            Erreur 500 lors de l'archivage d'un objet<br>
[Bogue][Code (Interne)]            Les compteurs personnalisés ne sont pas remplacés correctement<br>
[Bogue][Code (Interne)]            Plus d'espace pour les conditions et les éléments dans le gestionnaire de rapports<br>
[Bogue][Code (Interne)]            Un espace réservé est ajouté à tous les champs de l'aperçu<br>
[Bogue][Code (Interne)]            Il est possible de créer plusieurs personnes avec le même nom d'utilisateur<br>
[Bogue][Code (Interne)]            La connexion utilise une personne inachevée avec un nom d'utilisateur<br>
[Bogue][Code (Interne)]            Erreur JS récurrente lorsque la touche "échappement" reste enfoncée<br>
[Bogue][JDisc]                    Autoriser l'utilisateur à importer des profils JDisc<br>
[Bogue][JDisc]                    Erreur SQL lors de l'importation d'un profil JDisc avec un profil de correspondance d'objet personnalisé<br>
[Bogue][API]                      Enregistrer des valeurs multiples via ID dans une catégorie personnalisée crée une entrée de journal incorrecte<br>
[Bogue][API]                      cmdb.condition ne fonctionne pas avec les catégories personnalisées<br>
[Bogue][API]                      La configuration technique des catégories personnalisées affiche des exemples incorrects<br>
[Bogue][Import]                   Lorsqu'un objet est mis à jour via l'importation, la date de modification est mise à jour même si aucun changement n'a été apporté<br>
[Bogue][Centre d'administration]    L'installation d'un addon pour la mauvaise version d'i-doit décompresse toujours l'addon et met à jour les fichiers<br>
[Bogue][Notifications]            Les notifications basées sur les rapports ne sont pas envoyées même si le rapport a des résultats<br>
[Bogue][Notifications]            Rapport de notification : L'ID de la licence attribuée est affiché au lieu du titre<br>
[Bogue][Import CSV]               L'importation CSV crée un objet avec un mauvais type d'objet<br>
[Bogue][Import CSV]               L'importation CSV prend en compte les objets archivés et supprimés<br>
[Bogue][Import CSV]               L'importation CSV d'un objet avec "nouvelle ligne" provoque la disparition des catégories de l'objet et un message d'erreur<br>
[Bogue][Listes]                   Erreur lors de l'utilisation de la "recherche large" dans les tableaux (en PHP 8+)<br>
[Bogue][Listes]                   Les attributs personnalisés ne sont pas affichés comme ajoutés après avoir de nouveau édité la vue de liste<br>
[Bogue][Système de permissions]    Droit de vue manquant pour lire les champs de dialogue via l'API<br>
[Bogue][Système de permissions]    Les droits des groupes de personnes archivées sont appliqués<br>
[Bogue][Système de permissions]    Malgré le paramètre "Tout" est sélectionné, la sélection détaillée n'est pas désactivée<br>
[Bogue][Système de permissions]    Le bouton d'édition d'administration de dialogue n'est pas désactivé avec seulement le droit de vue<br>
[Bogue][XML]                      Importation XML non possible avec l'application assignée<br>
[Bogue][Validation]               Erreur lors du téléchargement d'un fichier pour un objet avec validation<br>
[Bogue][Validation]               Ne pas valider les objets lors de leur création<br>
[Bogue][Gestionnaire de rapports]  La visualisation du gestionnaire de rapports de la version DBMS montre toujours la première entrée<br>
[Bogue][Gestionnaire de rapports]  Le gestionnaire de rapports réduit les lignes du résultat lors de l'ajout de colonnes supplémentaires<br>
[Bogue][Gestionnaire de rapports]  Opérateurs manquants pour les champs de date<br>
[Bogue][Gestionnaire de rapports]  Les objets assignés manquent dans la sélection du gestionnaire de rapports<br>
[Bogue][Catégories]               Enregistrement de l'adresse IP avec un espace à la fin<br>
[Bogue][Catégories]               Les modèles existants ne sont pas affichés lors de la sélection du fabricant<br>
[Bogue][Catégories]               La passerelle par défaut pour le réseau de couche 3 ne peut pas être définie dans la catégorie d'adresse d'hôte<br>
[Bogue][Catégories]               Le fabricant de CPU ne peut pas être utilisé dans un formulaire<br>
[Bogue][Catégories]               Tri incorrect des sous-catégories sous "Hiérarchie de base de données"<br>
[Bogue][Catégories]               Tri incorrect des sous-catégories sous "Cluster"<br>
[Bogue][Explorateur CMDB]          i-doit devrait répondre avec une réponse JSON appropriée lors de la vérification de l'explorateur CMDB avec un utilisateur limité<br>
[Bogue][Documents]                Message d'erreur "Le document n'existe pas" lors de l'ouverture d'un document<br>
[Bogue][Modèles]                  Le compteur ne fonctionne pas pour les catégories personnalisées dans les modèles<br>
[Bogue][Surveillance]             Livestatus avec une mauvaise adresse provoque de longs temps de chargement pour les catégories<br>
[Bogue][Journalisation]           Le journal LDAP ne journalise pas les personnes archivées ou supprimées<br>
[Bogue][Gestion de l'interface]    Message TypeError dans la catégorie "Tous les tickets"<br>
[Bogue][Paramètres système]       La configuration du navigateur d'objets pour le contrôleur de gestion à distance et les appareils gérés fait référence à la mauvaise catégorie<br>
[Bogue][Importation de câblage]    Ne pas renommer les entrées/sorties de câblage après l'importation<br>
[Bogue][Configuration du type d'objet] Classer la catégorie "Lieu de travail attribué" avant "Cartes SIM attribuées" 

I am ready to start the translation. 
