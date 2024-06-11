# i-diary: Déterminer l'auteur

Il existe trois façons de sélectionner un auteur :

Découverte automatique d'un auteur
----------------------------------

Si aucun auteur n'a été enregistré et que l'utilisateur lance l'application, l'application tentera de reconnaître automatiquement l'auteur.

Cela se fera selon le processus suivant :

Lorsqu'un "nom d'utilisateur" est spécifié dans les paramètres, l'application vérifiera si la personne correspond à un objet personne dans i-doit. Si tel est le cas, l'ID sera enregistré.

[![nom d'utilisateur](../../assets/images/en/i-doit-pro-add-ons/i-diary/determine-the-author/1-dta.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/determine-the-author/1-dta.png)

Définir l'auteur manuellement
-----------------------------

L'utilisateur peut sélectionner manuellement un auteur pour une nouvelle entrée avec les options suivantes :

*   L'utilisateur peut écrire l'ID de l'objet de l'auteur dans le fichier de configuration. Ce paramètre prend effet lorsque l'application est redémarrée.

[![Définir l'auteur manuellement](../../assets/images/en/i-doit-pro-add-ons/i-diary/determine-the-author/2-dta.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/determine-the-author/2-dta.png)

*   L'utilisateur peut sélectionner une personne dans une liste consultable. Cette liste est divisée en "Contacts" (relations d'objet de la catégorie "Affectation de contact") et "Personnes" (objets de type "Personnes").

Les titres des objets sont affichés dans la liste. Lorsque l'utilisateur sélectionne un objet, son ID est enregistré.

Réutilisation de l'auteur
-------------------------

Lorsque l'utilisateur démarre l'application, l'auteur déjà enregistré est présélectionné pour une nouvelle entrée.

L'application vérifie si l'ID de l'objet dans le fichier de configuration est valide, en fonction de l'ID, l'application récupère le titre de l'objet pour l'afficher.
