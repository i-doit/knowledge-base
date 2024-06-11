# i-diary: Déterminer l'hôte

Il existe trois façons de sélectionner un hôte :

Découverte automatique d'un hôte
-----------------------------

Si aucun objet n'est stocké dans les paramètres, un objet doit être déterminé automatiquement et proposé à l'utilisateur. Le nom de l'hôte de l'application est déterminé à cette fin.

[![Découverte automatique d'un hôte](../../assets/images/en/i-doit-pro-add-ons/i-diary/determine-the-host/1-dth.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/determine-the-host/1-dth.png)

Le nom d'hôte est recherché en tant que titre de l'objet dans i-doit
----------------------------------------------------------

*   Si un seul objet est trouvé, son ID est enregistré.
*   Si plusieurs objets portant le même nom sont trouvés, l'utilisateur peut choisir parmi ces objets.
*   L'utilisateur peut annuler la sélection pour sélectionner manuellement l'hôte.
    

Définir l'hôte manuellement
-----------------

*   L'utilisateur définit l'ID de l'objet dans le fichier de configuration. Après le redémarrage de l'application, le paramètre prend effet.

[![Définir l'hôte manuellement](../../assets/images/en/i-doit-pro-add-ons/i-diary/determine-the-host/1-dth.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/determine-the-host/1-dth.png)

*   L'utilisateur sélectionne un titre d'objet dans une liste consultable. Seuls les objets dont les types d'objet sont assignés à la catégorie "Journal" sont affichés. La liste est divisée en fonction des types d'objets respectifs. Le titre traduit du type d'objet respectif est affiché comme en-tête de liste. Si l'utilisateur sélectionne un objet dans la liste, son ID est enregistré.
*   L'utilisateur saisit l'ID de l'objet dans un masque de recherche. L'application donne un retour d'information sur la présence de l'objet et enregistre son ID.
*   L'utilisateur saisit le titre de l'objet dans un masque de recherche. L'application donne un retour d'information sur la présence de l'objet et enregistre son ID.
*   Si plusieurs objets portant le même nom sont trouvés, l'utilisateur peut choisir dans cette liste.
    

Réutilisation de l'hôte
----------

Lorsque l'application est lancée, le fichier de configuration est lu s'il existe.

Si un ID d'objet est enregistré, l'application récupère le titre respectif pour l'afficher.
