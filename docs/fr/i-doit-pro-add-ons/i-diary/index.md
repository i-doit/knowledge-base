# i-diary

[![i-diary](../../assets/images/en/i-doit-pro-add-ons/i-diary/1-i-diary.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/1-i-diary.png)

À propos de i-diary
---------------------

i-diary est une application pour Microsoft Windows, qui fonctionne comme un module complémentaire pour i-doit. Avec l'aide du module complémentaire, les administrateurs système peuvent obtenir un aperçu des modifications qui ont eu lieu sur le serveur.

Cela sera possible en utilisant l'application "journal" directement sur un serveur Windows, sans avoir à se connecter à i-doit et rechercher les informations.

[![rechercher les informations](../../assets/images/en/i-doit-pro-add-ons/i-diary/2-i-diary.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/2-i-diary.png)

Documentation
-------------

*   [Exigences](./requirements.md)
*   [Installer](./install.md)
*   [Mettre à jour](./update.md)
*   [Configuration](./configuration.md)
*   [Utilisation de base](./basic-usage.md)
*   [Déterminer l'hôte](./determine-the-host.md)
*   [Déterminer l'auteur](./determine-the-author.md)

Droits d'auteur & Licence
-------------------------

Copyright (C) 2020 [synetics GmbH](https://i-doit.com/en)

[Exigences](#exigences)
=======================

Les exigences suivantes sont nécessaires avant d'installer ou d'utiliser l'i-diary.

[Pour la version i-Diary 1.1](#pour-la-version-i-diary-11)
-----------------------------------------------------------

*   Afficher tous les détails sur l'hôte
*   Mettre à jour les entrées dans l'i-diary
*   Reconnaissance automatique des types d'objets
*   Fournir tous les journaux de modifications dans le fichier CHANGELOG

[Pour la version i-Diary <= 1.0.1](#pour-la-version-i-diary-101)
---------------------------------------------------------------

*   i-doit requis >= 1.14
*   i-doit-API add-on requis >= 1.10.4
*   Exécutable :
*   Windows 7 ou 10
*   Version du framework .Net >= 4.6.2

[Pour la version i-Diary 1.0.2](#pour-la-version-i-diary-102)
-------------------------------------------------------------

*   i-doit requis >= 1.17
*   i-doit API add-on requis >= 1.12.1
*   Exécutable :
*   Windows 7 ou 10
*   Version du framework .Net >= 4.8

* * *

[Installer](#installer)
=======================

L'add-on est téléchargé via le [portail client](../../system-administration/customer-portal.md)  
L'add-on doit d'abord être installé via le [Centre d'administration](../../system-administration/admin-center.md#add-ons).

* * *

[Met à jour](#update)
=================

i-diary est mis à jour comme les autres modules complémentaires via le [Centre d'administration](../../system-administration/admin-center.md#add-ons).  
Le nouveau i-diary.exe doit ensuite être remplacé par le i-diary.exe mis à jour.  
Cela peut être trouvé dans le fichier ZIP téléchargé idoit-i_diary-x.x.x.zip dans le chemin  
\idoit-i_diary-1.0.1\src\classes\modules\idoit-i_diary\i-diary\

* * *

[Changer et enregistrer les paramètres via l'interface graphique (GUI)](#change-and-save-settings-via-gui)
---------------------------------------------------------------------

L'utilisateur a la possibilité de créer et modifier le fichier de configuration via l'application.

Voici les cas suivants :

*   Si le fichier de configuration est vide ou n'existe pas encore, ou s'il est vide, les paramètres de l'interface graphique s'ouvrent automatiquement lorsque l'application est lancée.

[![Changer et enregistrer les paramètres via l'interface graphique (GUI)](../../assets/images/en/i-doit-pro-add-ons/i-diary/3-i-diary.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/3-i-diary.png)

[![Changer et enregistrer les paramètres via l'interface graphique (GUI)](../../assets/images/en/i-doit-pro-add-ons/i-diary/4-i-diary.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/4-i-diary.png)

*   Si l'utilisateur modifie quelque chose dans le paramétrage de l'interface graphique, la modification est immédiatement vérifiée et enregistrée si elle est valide.  
*   Lorsque l'utilisateur ne spécifie pas ‘[http://](http://)’, ‘[http://](http://)’ est utilisé pour la vérification et l'enregistrement.
*   Lorsque l'utilisateur spécifie ‘rc/jsonrpc.php’ comme suffixe dans le champ URL, il sera ignoré pour la vérification et enregistré sans lui.
*   L'utilisateur peut tester la connexion manuellement en cliquant sur le bouton ‘Tester la connexion’.

* * *  

[Utilisation de base](#basic-usage)
===========================

[Création d'une nouvelle entrée](#creating-a-new-entry)
---------------------------------------------

L'utilisateur peut créer une nouvelle entrée, pour cela les étapes suivantes sont prises :

*   L'auteur, la date et l'entrée doivent être remplis et valides.
*   Pour les entrées ultérieures, la sélection de l'auteur et de la date persiste jusqu'à ce que l'application soit fermée.
*   Lorsque l'utilisateur enregistre une entrée, la liste des entrées est mise à jour.

* * *

[Déterminer l'hôte](#determine-the-host)
=========================================

Il existe trois façons de sélectionner un hôte :

[Automatically select a host](#automatically-select-a-host)
-----------------------------------------------------------

Si aucun objet n'est stocké dans les paramètres, un objet doit être déterminé automatiquement et proposé à l'utilisateur. Le nom de l'hôte de l'application est déterminé à cette fin.

[![Sélection automatique d'un hôte](../../assets/images/en/i-doit-pro-add-ons/i-diary/5-i-diary.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/5-i-diary.png)

[Le nom d'hôte est recherché en tant que titre de l'objet dans i-doit](#the-hostname-is-searched-for-as-the-object-title-in-i-doit)
-------------------------------------------------------------------------------------------------------------------------

*   Si un seul objet est trouvé, son ID est enregistré.
*   Si plusieurs objets portant le même nom sont trouvés, l'utilisateur peut choisir parmi ces objets.
*   L'utilisateur peut annuler la sélection pour sélectionner manuellement l'hôte.

[Définir manuellement l'hôte](#set-host-manually)
---------------------------------------

*   L'utilisateur définit l'ID de l'objet dans le fichier de configuration. Après le redémarrage de l'application, le paramètre prend effet.

[![Définir manuellement l'hôte](../../assets/images/en/i-doit-pro-add-ons/i-diary/6-i-diary.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/6-i-diary.png)

*   L'utilisateur sélectionne un titre d'objet dans une liste consultable. Seuls les objets dont les types d'objet sont attribués à la catégorie "Journal" sont affichés. La liste est divisée en fonction des types d'objets respectifs. Le titre traduit du type d'objet respectif est affiché en tant qu'en-tête de liste. Si l'utilisateur sélectionne un objet dans la liste, son ID est enregistré.
*   L'utilisateur saisit l'ID de l'objet dans un masque de recherche. L'application donne un retour d'information si l'objet a été trouvé et enregistre son ID.
*   L'utilisateur saisit le titre de l'objet dans un masque de recherche. L'application donne un retour d'information si l'objet a été trouvé et enregistre son ID.
*   Si plusieurs objets portant le même nom sont trouvés, l'utilisateur peut choisir dans cette liste.

[Réutiliser l'hôte](#reuse-host)
-------------------------

Lorsque l'application est lancée, le fichier de configuration est lu s'il existe.

Si un ID d'objet est enregistré, l'application récupère le titre respectif pour l'afficher.

* * *

Il existe trois façons de sélectionner un auteur :

[Automatiquement découvrir un auteur](#automatically-discover-an-author)
---------------------------------------------------------------------

Si aucun auteur n'a été enregistré et que l'utilisateur lance l'application, l'application essaie de reconnaître l'auteur automatiquement.

Cela se fera à travers le processus suivant :

Lorsqu'un "nom d'utilisateur" est spécifié dans les paramètres, l'application vérifiera si la personne correspond à un objet personne dans i-doit. Si tel est le cas, l'ID sera enregistré.

[![Automatiquement découvrir un auteur](../../assets/images/en/i-doit-pro-add-ons/i-diary/7-i-diary.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/7-i-diary.png)

[Sélectionner l'auteur manuellement](#set-author-manually)
-------------------------------------------

L'utilisateur peut sélectionner manuellement un auteur pour une nouvelle entrée avec les options suivantes :

*   L'utilisateur peut écrire l'ID de l'objet de l'auteur dans le fichier de configuration. Ce paramètre prend effet lorsque l'application est redémarrée.

[![Sélectionner l'auteur manuellement](../../assets/images/en/i-doit-pro-add-ons/i-diary/8-i-diary.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/8-i-diary.png)

*   L'utilisateur peut sélectionner une personne dans une liste consultable. Cette liste est divisée en "Contacts" (relations d'objet de la catégorie "Affectation de contact") et "Personnes" (objets de type "Personnes").

Les titres des objets sont affichés dans la liste. Lorsque l'utilisateur sélectionne un objet, son ID est enregistré.

[Reuse author](#reuse-author)
-----------------------------

Lorsque l'utilisateur démarre l'application, l'auteur déjà enregistré est présélectionné pour une nouvelle entrée.

L'application vérifie si l'ID d'objet dans le fichier de configuration est valide, en fonction de l'ID, l'application récupère le titre de l'objet pour l'afficher.

* * *

[FAQ](#faq)
===========

Messages d'erreur connus et leur signification :

| Message d'erreur | Cause possible |
| --- | --- |
| Le code d'état de réponse HTTP ne reflète pas une réponse de service réussie | URL incorrecte |
| Erreur système i-doit : Impossible de récupérer le mandataire | Clé API incorrecte |
| La réponse du service est invalide | Nom d'utilisateur ou mot de passe incorrect. La version de l'extension API est trop ancienne |
| Fehler beim Senden der Anforderung/Error while sending the request | Adresse de l'hôte incorrecte |
| La réponse HTTP a une valeur d'en-tête Content-Type invalide | L'extension API n'est pas installée |

* * *

[Journal des modifications](#changelog)
=======================

| Version | Publication | Journal des modifications |
| --- | --- | --- |
| 1.3 | 08.05.2024 | Utilisé "idoit_i_diary" comme nouvel identifiant<br> Les objets ne se chargent pas après le deuxième démarrage<br> Démarrer i-diary prend beaucoup de temps<br> i-diary ne reconnaît pas la catégorie du journal<br> L'auteur n'est pas chargé |
| 1.2 | 23.01.2023 | L'adresse IP principale est affichée vide  <br> Cliquer sur l'icône d'info fait planter i-diary  <br> L'attribution de contact ne montre pas le contact principal |
| 1.0.2 | 09.11.2021 | Établir une connexion en utilisant HTTPS  <br> Configuration d'un serveur proxy |
| 1.0.1 | 06.11.2020 | Changer la position des boutons dans la fenêtre des paramètres  <br> Changer le titre de la fenêtre des paramètres  <br> Connexion sans authentification  <br> Écrire un fichier journal pour vérifier la connexion  <br> Les comboboxes devraient afficher plus de lignes |
| 1.0.0 | 21.09.2020 | Il s'agit de la première version de i-diary |
