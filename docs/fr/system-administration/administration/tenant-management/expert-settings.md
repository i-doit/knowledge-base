# Paramètres experts (liés au locataire)

Les paramètres experts sont une sorte de "registre" d'i-doit. La plupart des paramètres sont définis via une option dans la zone des paramètres. Certains paramètres ne sont disponibles que s'ils sont ajoutés ici.

!!! attention "Attention"
    Il n'est généralement pas nécessaire d'ajouter ou de modifier des valeurs dans les paramètres experts. Pour une utilisation normale, l'interface Web fournit des fonctions pour contrôler i-doit dans tous les cas pertinents.<br>
    Si vous envisagez d'apporter des modifications aux paramètres experts, nous vous recommandons vivement de faire une **[sauvegarde](../../../maintenance-and-operation/backup-and-recovery/index.md)** au préalable. Certains des paramètres répertoriés ont un effet sérieux sur l'application. En cas de doute, n'hésitez pas à demander [de l'aide](../../customer-portal.md).

## Configuration

[![Configuration](../../../assets/images/en/system-administration/administration/tenant-mangement/expert-settings/1-es.png)](../../../assets/images/en/system-administration/administration/tenant-mangement/expert-settings/1-es.png)

Chaque paramètre se compose de trois parties :

| Clé | Valeur | Type |
| --- | --- | --- |
| La **Clé** attribue un nom unique au paramètre. Si une clé n'existe pas encore, elle peut être ajoutée ultérieurement. | La **Valeur** est généralement une chaîne de caractères ou un texte plus long ou une valeur entière. | Avec le **Type**, vous définissez la portée du paramètre. Un paramètre avec le type **Étendue du locataire** n'affecte que le locataire avec lequel l'utilisateur est actuellement connecté. **Utilisateur** signifie que le paramètre affecte l'utilisateur. |

## Liste des paramètres

| Clé | Valeur par défaut | Valeur recommandée | Type | Module<br>(Portée/[Module complémentaire](../../../i-doit-pro-add-ons/index.md) dans i-doit) | Description |
| --- | --- | --- | --- | --- | --- |
| auth.logging | 1   | 1   | Paramètre de portée locataire | PRO/CMDB | Active/désactive l'enregistrement des notifications du système d'autorisation |
| auth.use-in-cmdb-explorer | 0   | 0   | Paramètre de portée locataire | PRO/CMDB | Active la prise en compte des autorisations dans l'explorateur CMDB. Les objets qui n'ont aucune affectation de droits ne sont pas affichés/itérés. |
| auth.use-in-cmdb-explorer-service-browser | 0   | 0   | Paramètre de portée locataire | PRO/CMDB | Active la prise en compte des autorisations dans la fenêtre contextuelle de service de l'explorateur CMDB. L'utilisateur ne voit que les services pour lesquels il a des autorisations. |
| auth.use-in-object-browser | 0   | 0   | Paramètre de portée locataire | PRO/CMDB | Active la prise en compte des autorisations dans l'explorateur d'objets. Les objets qui n'ont aucune affectation de droits ne sont pas affichés. Les objets déjà sélectionnés sont affichés comme "masqués". |
| auth.use-in-file-browser | 0   | 0   | Paramètre de portée locataire | PRO/CMDB | Active la prise en compte des autorisations dans l'explorateur d'objets. Les objets qui n'ont aucune affectation de droits ne sont pas affichés. Les objets déjà sélectionnés sont affichés comme "masqués". |
| auth.use-in-location-tree | 0   | 0   | Paramètre de portée locataire | PRO/CMDB | Active la prise en compte des autorisations dans l'arborescence des emplacements. Les objets qui n'ont aucune affectation de droits ne sont pas affichés/ouverts. |
| cache.default-expiration-time | 86400 | 86400 | Paramètre de portée locataire | Mise en cache | Détermine le temps (en secondes) pendant lequel vous souhaitez conserver les données dans des caches internes spécifiques au système (par exemple, système d'autorisation, résultats d'analyse) |
| ckeditor.font_names | Arial;Courier New;Times New Roman;Helvetica |     | Paramètre de portée locataire | PRO/CMDB | Polices utilisables dans l'éditeur WYSIWYG |
| cmdb.limits.order-threshhold | 10000 | 1000 | Paramètre de portée locataire | PRO/CMDB | Limitation des lignes pour le TableComponent, seuil à partir duquel seuls les champs indexés peuvent être triés et filtrés |
| cmdb.limits.obj-browser.objects-in-viewmode | 8   |     | Paramètre de portée locataire | PRO/CMDB | Nombre maximal d'objets à présenter en mode affichage dans l'explorateur d'objets |
| cmdb.limits.object-table-columns | 10  | 10  | Paramètre de portée locataire | PRO/CMDB | Détermine combien de colonnes sont autorisées à être affichées dans les listes d'objets. |
| cmdb.limits.port-lists-layer2 | 5   |     | Paramètre de portée locataire | PRO/CMDB | Limitation des réseaux Layer2 spécifiés dans la liste de ports |
| cmdb.limits.port-lists-vlans | 10  |     | Paramètre de portée locataire | PRO/CMDB | Limitation des VLAN spécifiés dans la liste de ports |
| cmdb.limits.port-overview-default-vlan-only | 0   |     | Paramètre de portée locataire | PRO/CMDB | Seul le VLAN par défaut doit être affiché dans l'aperçu des ports |
| cmdb.multiedit.text-size-in-px | 120 |     | Paramètre de portée locataire | PRO/CMDB | Taille du texte en édition de liste |
| cmdb.objtype.OBJECT\_TYPE\_ID.auto-inventory-no |     |     | Paramètre de portée locataire | PRO/CMDB | Modèle pour la génération de numéros d'inventaire automatiques dans la catégorie de comptabilité |
| cmdb.only-show-ranked-entries-as-such | 0   | 0   | Paramètre de portée locataire | PRO/CMDB | Option pour spécifier si les relations avec un objet archivé doivent être affichées comme archivées ou normales |
| cmdb.quickpurge |     |     | Paramètre de portée locataire | PRO/CMDB | Activation/désactivation de la fonction de purge rapide |
| cmdb.skip-unidirectional-connection-ranking | 0   | 0   | Paramètre de portée locataire | PRO/CMDB | Option pour spécifier si les liens vers un objet archivé doivent être affichés comme archivés ou normaux |
| cmdb.unique.hostname |     |     | Paramètre de portée locataire | PRO/CMDB | Activation/désactivation des noms d'hôte uniques |
| cmdb.unique.ip-address |     |     | Paramètre de portée locataire | PRO/CMDB | Activation/désactivation des adresses IP uniques |
| cmdb.unique.layer-2-net |     |     | Paramètre de portée locataire | PRO/CMDB | Activation/désactivation des identifiants Layer-2 uniques |
| cmdb.unique.object-title |     |     | Paramètre de portée locataire | PRO/CMDB | Activation/désactivation des titres d'objets uniques |
| gui.empty\_value | \-  | \-  | Paramètre de portée locataire | Core | Spécifie la présentation d'une valeur vide dans l'interface graphique |
| gui.nat-sort.port-list | 1   | 1   | Paramètre de portée locataire | PRO/CMDB | Tri lexicographique de la liste de ports |
| jdisc.import-unidentified-devices | false |     | Paramètre de portée locataire | PRO/CMDB | Activation/désactivation des importations d'objets JDISC non identifiés |
| maxlength.dialog\_plus | 110 |     | Paramètre de portée locataire | PRO/CMDB | Longueur maximale des caractères pour les entrées dans les listes de dialogues |
| maxlength.location.objects | 16  |     | Paramètre de portée locataire | PRO/CMDB | Nombre maximal d'objets à afficher |
| maxlength.location.path | 40  |     | Paramètre de portée locataire | PRO/CMDB | Longueur maximale des chemins d'emplacement |
| maxlength.object.lists | 55  |     | Paramètre de portée locataire | PRO/CMDB | Nombre maximal d'objets à afficher dans les listes d'objets |
| search.global.autostart-deep-search | 0   |     | Paramètre de portée locataire | PRO/CMDB | Recherche approfondie automatique |
| security.passwort.minlength | 4   |     | Paramètre de portée locataire | Core | Longueur minimale des mots de passe utilisateur |
| qrcode.config |     |     | Paramètre de portée locataire | PRO/CMDB | Configuration du code QR |

## Paramètre Expert (Lié à l'utilisateur)

| Clé | Valeur par défaut | Valeur recommandée | Type | Module<br>(Portée/[Module complémentaire](../../../i-doit-pro-add-ons/index.md) dans i-doit) | Description |
| --- | --- | --- | --- | --- | --- |
| gui.leftcontent.width | 235 | 350 | Paramètre utilisateur | Noyau | Définit la largeur de la zone de l'arborescence de gauche en pixels |
| workflows.max-checklist-entries | 7 | | Paramètre utilisateur | Workflows | Nombre maximal d'entrées dans les listes de contrôle |
| gui.login.display | nom-utilisateur | | Paramètre utilisateur | PRO/CMDB | Présentation du nom dans la zone "connecté en tant que":<br><br>* nom-utilisateur: lfischer<br>* nom-complet: Dr. Leonard Fischer<br>* nom-complet-plus: Dr. Leonard Fischer (lfischer)<br>* abréviation-premier-nom-nom: L. Fischer |
