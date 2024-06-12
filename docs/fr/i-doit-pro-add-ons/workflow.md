# Flux de travail {/flux-de-travail}

Le système de flux de travail dans i-doit est un module extensible qui génère des flux de travail. Ainsi, des TÂCHES ponctuelles, mais aussi des LISTES DE CONTRÔLE récurrentes peuvent être créées et attribuées aux personnes et objets responsables. Les personnes impliquées sont informées via des notifications basées sur l'état.

Types de flux de travail
------------------------

Le TYPE DE FLUX DE TRAVAIL se comporte comme un modèle et inclut tous les paramètres nécessaires à l'exécution. Ce modèle peut être modifié via une interface d'administration. De nouveaux modèles peuvent également être créés via cette interface.

Le flux de travail
------------------

Un flux de travail décrit une action planifiée à effectuer par l'utilisateur, comme le remplacement du support de stockage d'un serveur de sauvegarde spécifique. Toute attribution de flux de travail doit être acceptée par les personnes appropriées. Après une réalisation réussie, un rapport d'état peut être soumis.

Types de flux de travail prédéfinis
-----------------------------------

**Liste de contrôle** :  
Un ordre de travail est une action planifiée à effectuer par des utilisateurs sélectionnables.

**Tâche** :  
Le type de flux de travail spécial LISTES DE CONTRÔLE peut être utilisé pour générer des flux de travail quotidiens, hebdomadaires et annuels en spécifiant une séquence temporelle périodique à la date de début pure et en sélectionnant l'option de récurrence correspondante.  
Ces flux de travail récurrents peuvent également être terminés de manière planifiée.

Le nom et la clé d'un nouveau type de flux de travail peuvent être librement choisis, l'ordre spécifie dans quel ordre les champs sont affichés les uns en dessous des autres.  
La vérification du champ vide renvoie un message d'erreur si le champ n'est pas rempli et qu'une tentative est faite pour enregistrer le flux de travail.

Paramètres des modèles
-----------------------

Pour les deux types de flux de travail TÂCHE (ordre de travail) et LISTE DE CONTRÔLE, il existe déjà des paramètres prédéfinis, qui sont pris en compte lors de la création d'un nouveau flux de travail.  
Les deux types de date pour la date de début et de fin sont automatiquement créés pour chaque nouveau type de flux de travail créé.  
Les autres paramètres peuvent être créés et attribués à un nouveau type comme souhaité :

*   Texte
*   Champ de texte à une ligne
*   Texte intégral
*   Champ de texte multiligne
*   Numérique
*   Champ de texte numérique
*   Date
*   Champ de texte avec date
*   Oui / Non
*   Deux boutons radio pour la sélection

Flux de travail dans l'objet
-----------------------

Les flux de travail peuvent également être affichés dans l'objet via la catégorie **Flux de travail**. Cela doit être ajouté au préalable via la [configuration du type d'objet](../basics/assignment-of-categories-to-object-types.md).

[![workflow](../assets/images/en/i-doit-pro-add-ons/workflow/1-wf.png)](../assets/images/en/i-doit-pro-add-ons/workflow/1-wf.png)

Versions
--------

| Version | Date | Journal des modifications |
| --- | --- | --- |
| 1.2 | 2023-11-07 | [Tâche] Utiliser de nouvelles routes pour afficher les images d'objet et de type d'objet / déplacer les fichiers liés à l'extension |
| 1.1.1 | 2023-08-22 | [Amélioration] Compatibilité PHP 8.1 |
| 1.1 | 2022-09-05 | [Tâche] Compatibilité PHP 8.0  <br>[Tâche] Compatibilité de conception |
| 1.0.6 | 2022-07-27 | [Erreur] Message d'erreur lorsqu'un flux de travail est accepté  <br>[Erreur] La fréquence des listes de contrôle ne peut pas être utilisée car la valeur n'est pas enregistrée |
| 1.0.5 | 2021-01-18 | [Amélioration] Compatibilité avec i-doit 1.16 |
| 1.0.4 | 2020-08-10 | [Erreur] Seul le créateur d'une liste de contrôle peut la modifier |
| 1.0.3 | 2019-07-05 | [Erreur] Mise à jour de l'extension Workflow 1.0.2 |
| 1.0.2 | 2019-05-20 | [Erreur] I-doit est également affiché dans la barre latérale via le lien My-doit<br>[Erreur] Commande Console.php workflows-process<br>[Erreur] ModuleID manquant dans la notification<br>[Erreur] ModuleID manquant dans les liens de la catégorie Flux de travail vers le module |
| 1.0.1 | 2019-01-09 | [Erreur] I-doit est également affiché dans la barre latérale |
| 1.0 | 2018-12-17 | [Amélioration] Extension des flux de travail |
