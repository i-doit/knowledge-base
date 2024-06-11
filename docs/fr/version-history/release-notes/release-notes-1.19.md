Nous sommes heureux d'annoncer notre dernière version majeure 1.19 de i-doit pro. Cette version est une étape très importante dans le développement de i-doit. Consultez le journal des modifications pour une liste complète des changements. Nous vous encourageons à [mettre à jour](../../maintenance-and-operation/update.md) vers cette version dès que possible.

Points forts de cette version
-----------------------------

- Un **redesign** complet de l'interface de i-doit pour **améliorer l'expérience utilisateur**.
- Ajout de **compatibilité** pour **PHP 8.0**.
- **Nouvelle configuration** pour **créer des traductions personnalisées** et **des langues personnalisées**.
- **Réglage** pour définir une [**langue par défaut**](../../system-administration/administration/tenant-management/settings-for-tenant.md#language) pour les utilisateurs nouvellement créés.
- **Nouvelle configuration** pour **[masquer des attributs](../../basics/attribute-visibility.md)** des catégories et/ou des pages d'aperçu.
- **Option** pour **enregistrer** la **[dernière connexion](../../system-administration/administration/tenant-management/settings-for-tenant.md#security)** d'un utilisateur.
- [**Exportation** pour les **rapports**](../../evaluation/report-manager.md#exportimport-reports) qui ont été créés via le **constructeur de requêtes**.

## Extensions

!!! warning
    Les nouvelles versions des extensions nécessitent i-doit >= 1.19

Aux côtés de i-doit pro 1.19, nous publierons également de nouvelles versions des **extensions** suivantes, qui **doivent être mises à jour** par la suite pour être compatibles avec **PHP 8.0** et le **nouveau design** :

- [API](../../i-doit-pro-add-ons/api/index.md) **1.13**
- [Documents](../../i-doit-pro-add-ons/documents/index.md) **1.5**
- [Analyse](../../i-doit-pro-add-ons/analysis.md) **1.3**
- [Plan d'étage](../../i-doit-pro-add-ons/floorplan.md) **1.6**
- [Câblage](../../i-doit-pro-add-ons/cabling.md) **1.2**
- [Déplacer CI](../../i-doit-pro-add-ons/relocate-ci.md) **1.2**
- [Remplacement](../../i-doit-pro-add-ons/replacement.md) **1.4**
- [Maintenance](../../i-doit-pro-add-ons/maintenance.md) **1.2**
- [Événements](../../i-doit-pro-add-ons/events.md) **1.3**
- [Workflow](../../i-doit-pro-add-ons/workflow.md) **1.1**
- [Checkmk](../../i-doit-pro-add-ons/checkmk.md) **1.1**
- [Check\_MK 2](../../i-doit-pro-add-ons/checkmk2/index.md) **1.8**
- [Nagios](../../automation-and-integration/network-monitoring/nagios.md) **1.1**
- [Packager](../../i-doit-pro-add-ons/add-on-packager.md) **1.2**

{/*examples*/}

Notes de mise à jour importantes
----------------------

- Avec i-doit pro 1.19, **PHP 7.3** n'est **plus pris en charge**. Assurez-vous de mettre à niveau vers **PHP 7.4** d'abord avant de mettre à jour vers i-doit pro 1.19. Ne **pas** passer à **PHP 8.0** tant que vous utilisez **i-doit pro < 1.19**.<br>
- **Après** la mise à jour vers i-doit pro 1.19, vous êtes libre de passer à PHP 8.0, ce qui est également **vivement recommandé**.<br>
- **Avant d'activer** la fonction pour enregistrer le **dernier login d'un utilisateur**, veuillez vérifier si cela est compatible avec les **accords de protection des données** de votre entreprise et de votre pays. Contactez d'abord votre expert en protection des données si vous n'êtes pas sûr à ce sujet.<br>
- Si vous souhaitez utiliser les **nouveaux icônes** pour les types d'objets après la mise à jour vers i-doit pro 1.19, vous pouvez les activer manuellement dans votre **administration** i-doit sous Outils système > Cache / Base de données.<br>
- Les **Add-ons partenaires** suivants doivent être mis à jour **avant** la mise à jour vers i-doit 1.19 (Si ces exigences de version ne sont pas respectées, la mise à jour de i-doit ne pourra pas être effectuée):<br>
    - **[ISMS](../../i-doit-pro-add-ons/isms.md)** doit être mis à jour vers la version **1.5.2 ou supérieure**
    - **[VIVA 2](../../i-doit-pro-add-ons/viva2.md)** doit être mis à jour vers la version **3.2.1 ou supérieure**
    - **Privacy** doit être mis à jour vers la version **1.1 ou supérieure**
    - **Label** doit être mis à jour vers la version **0**.5** ou supérieure**
    - **Disposal** doit être mis à jour vers la version **1.1.2** **ou supérieure**
    - **Inheritance** doit être mis à jour vers la version **1.3.7** **ou supérieure**

Exigences système
-------------------

Veuillez vérifier que votre système correspond aux [exigences système](../../installation/system-requirements.md) avant de mettre à jour votre instance vers i-doit pro 1.19. Veuillez également vérifier que vous avez créé une [sauvegarde de toutes vos données](../../maintenance-and-operation/backup-and-recovery/index.md) et que tous les modules complémentaires sont [à jour](../../i-doit-pro-add-ons/index.md).
