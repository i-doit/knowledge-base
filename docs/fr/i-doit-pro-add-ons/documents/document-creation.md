# Création de documents

Créer des documents dans l'extension
------------------------------------

Une fois qu'un [modèle](./document-templates.md) a été créé, il est possible de créer un document pour un objet dans l'extension dans l'élément de menu "Documents" sous la catégorie de document dans laquelle le modèle est situé.

[![Créer des documents dans l'extension](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/1-dc.png)](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/1-dc.png)

Le bouton "Nouveau" ouvre une autre vue. Ici, un titre pour le document créé peut être spécifié. Ensuite, le modèle souhaité ainsi que l'objet ou les objets souhaités pour lesquels le document doit être créé sont sélectionnés.

!!! attention "Catégorie de documents"

    Pour créer un document pour un objet, il est nécessaire que la catégorie "Documents" soit liée au type d'objet. Si le type d'objet n'a pas cette catégorie, aucun document ne peut être créé pour les objets qu'il contient, car ils n'apparaissent pas dans la sélection.

De plus, il est possible d'écrire un commentaire sur l'objet.



[![object](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/2-dc.png)](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/2-dc.png)

!!! info "Note"

    Une boîte d'information jaune indique si au moins un modèle de document inachevé existe, c'est-à-dire n'a pas encore de chapitres. Si le modèle souhaité n'apparaît pas, la configuration des chapitres doit être vérifiée à nouveau.

La création de document est lancée via le bouton "Ajouter". Dès que ce processus est terminé, les documents apparaissent dans la liste et peuvent être téléchargés dans le format souhaité.

Si un document de la liste est cliqué ou si sa case est activée et que le bouton "Éditer" est utilisé, d'autres détails peuvent être consultés. Dans cette vue, il est également possible de créer de nouvelles révisions. Cela est pertinent si des informations dans la documentation pour cet objet ont changé et que le document doit être mis à jour. Les modifications apportées au modèle de document peuvent également être transférées au document de cette manière.  
Dans la zone inférieure, la version actuelle et toutes les révisions peuvent être téléchargées. Le téléchargement de l'aperçu du document fait toujours référence à la révision la plus récente.

[![révision récente](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/3-dc.png)](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/3-dc.png)

!!! succès "Créer des révisions à partir de la liste"

    Une nouvelle révision peut également être créée directement dans la liste des documents. À cet effet, le document souhaité est sélectionné via sa case à cocher, puis le bouton "Créer une révision" dans l'en-tête est utilisé.<br>[![Créer des révisions à partir de la liste](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/4-dc.png)](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/4-dc.png)

Créer des documents dans la catégorie "Documents"
--------------------------------------------

Si un document a été créé pour un objet dans i-doit, il peut être trouvé dans la catégorie "Documents" de l'objet. Il est également possible de télécharger le document dans les formats appropriés. Dans la vue détaillée du document, il est également possible de consulter les révisions et de créer de nouvelles révisions.  
Le bouton "Nouveau" peut être utilisé pour créer des documents supplémentaires pour l'objet. Ici, l'objet est déjà présélectionné et un titre peut être attribué ainsi qu'un modèle lié. 



[![Créer des documents dans la catégorie "Documents"](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/5-dc.png)](../../assets/images/en/i-doit-pro-add-ons/documents/document-creation/5-dc.png)

Création de documents via la Console i-doit
--------------------------------------------

La création de nouvelles révisions ainsi que l'exportation de documents peuvent également être effectuées et automatisées via la Console i-doit.

La commande "[documents](../../automation-and-integration/cli/index.md)" est disponible pour ces opérations. Cela peut être complété par les options suivantes :

| Paramètre (Kurzfrom) | Paramètre (Langform) | Description |
| --- | --- | --- |
|     | \--create\_revision | Crée une ou plusieurs révisions pour les documents donnés |
|     | \--export | Exporte un ou plusieurs documents vers un fichier |
|     | \--id=ID | Sélectionne un ou plusieurs documents par ID (valeurs multiples autorisées) |
|     | \--all\_documents | Sélectionne tous les documents |
|     | \--all\_category=\[ALL\_CATEGORY\] | Sélectionne tous les documents dans la catégorie |
|     | \--all\_template=\[ALL\_TEMPLATE\] | Sélectionne tous les documents avec le modèle |
|     | \--all\_object=\[ALL\_OBJECT\] | Sélectionne tous les documents avec l'objet |
|     | \--export\_format=\[EXPORT\_FORMAT\] | Format d'exportation : pdf ou html |
|     | \--export\_folder=\[EXPORT\_FOLDER\] | Format d'exportation : pdf ou html \[par défaut : "/var/www/html/main/upload/files/"\] |
| \-u | \--user=\[USERNAME\] | Utilisateur |
| \-p | \--password=\[PASSWORD\] | Mot de passe |
| \-t | \--tenant=\[TENANT-ID\] | ID du locataire \[par défaut : 1\] |
| \-h | \--help | Afficher ce message d'aide |
| \-q | \--quiet | Ne pas afficher de message |
| \-V | \--version | Afficher la version de cette application |
|     | \--ansi | Force la sortie au format ANSI |
|     | \--no-ansi | Désactive la sortie ANSI |
| \-n | \--no-interaction | Ne posez aucune question interactive |
| \-v / -vv / -vvv | \--verbose | Augmente la verbosité des messages : 1 pour une sortie normale, 2 pour une sortie plus verbeuse et 3 pour le débogage |
