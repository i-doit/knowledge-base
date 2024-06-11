# Notes de version 29 {/ * exemples * /}

Nous sommes heureux d'annoncer i-doit pro 29. Cette version apportera de nombreuses améliorations sous le capot.
Cette version d'i-doit ajoutera la prise en charge de **PHP 8.2**. Cela signifie que les versions de PHP de 7.4 à 8.2 peuvent être utilisées afin que vous puissiez effectuer une mise à jour sans vous soucier de la compatibilité. Veuillez noter que **PHP 7.4** ne sera **plus** pris en charge avec les prochaines versions d'i-doit.

Les utilisateurs de **SSO** verront également un changement. La connexion ne se fera plus automatiquement. Au lieu de cela, il y aura une option pour utiliser SSO sur votre écran de connexion afin que vous puissiez vous déconnecter correctement, si nécessaire. Pour effectuer une connexion automatique, vous pouvez utiliser le paramètre "?use-sso=1" dans votre URL.

Pour plus de confort, nous avons ajouté quelques fonctionnalités directement dans i-doit. Maintenant, vous pouvez voir les **détails de la licence** et **télécharger des modules complémentaires** directement dans votre administration si vous utilisez une licence mono-locataire.
Nous avons également amélioré la **correspondance des objets** pour l'**importation JDisc**. Vous pouvez utiliser différents profils de correspondance pour chaque type d'objet mappé. Cela ^^_remplacera_^^ le paramètre précédent concernant le profil de correspondance. La nouvelle configuration se trouve dans votre liste de mappage. ^^Veuillez vérifier le profil de correspondance sélectionné avant votre prochaine importation.^^

Pendant le processus de mise à jour, i-doit vérifiera les utilisateurs ayant des noms d'utilisateur non uniques et vous en informera. Assurez-vous d'ajuster tout nom d'utilisateur trouvé avant la version 31.
Pour améliorer encore l'expérience globale, nous avons ajouté une enquête facultative que vous pouvez remplir à tout moment pour nous envoyer vos commentaires. Le lien vers l'enquête se trouve dans le menu contextuel en haut à droite.
Vous trouverez une liste détaillée des changements dans le [journal des modifications](../changelogs/changelog-29.md). Nous vous encourageons à [mettre à jour](../../maintenance-and-operation/index.md) vers cette version dès que possible pour bénéficier de toutes ces améliorations.

**Points forts de cette version**

-   Nouvelle compatibilité avec **PHP 8.2**.
-   Amélioration de la **correspondance des objets** pour l'**importation JDisc**.
-   Nouvelles **vues d'ensemble** (licence et complément) dans l'administration pour les installations mono-locataires.
-   Informations sur les **noms d'utilisateur** non uniques pendant le processus de mise à jour.
-   Nouveau lien vers l'**enquête facultative** pour envoyer vos commentaires.

**Compléments**

Nous publions également de nouvelles versions des compléments suivants:

-   [Analyse](../../i-doit-pro-add-ons/analysis.md) 1.5
-   [API](../../i-doit-pro-add-ons/api/index.md) 1.16
-   [Câblage](../../i-doit-pro-add-ons/cabling.md) 1.4
-   [Documents](../../i-doit-pro-add-ons/documents/index.md) 1.7
-   [Plan d'étage](../../i-doit-pro-add-ons/floorplan.md) 1.8

Assurez-vous de respecter toutes les exigences avant d'installer ces nouvelles versions.
