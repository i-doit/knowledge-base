<!-- TRANSLATED by md-translate -->
# Release Notes 1.19

# Notes de publication 1.19

We're happy to announce our latest major version 1.19 of i-doit pro. This release is a very important step in the development of i-doit. See the changelog for a complete list of changes. We encourage you to [update](../../wartung-und-betrieb/update-einspielen.md) to this release as soon as possible.

Nous sommes heureux de vous annoncer la sortie de la dernière version majeure 1.19 d'i-doit pro. Cette version est une étape très importante dans le développement d'i-doit. Voir le changelog pour une liste complète des changements. Nous vous encourageons à [update](../../maintenance-et-exploitation/update-einspielen.md) à cette version dès que possible.

## Highlights in this release

## Highlights in this release

* A complete **redesign** of the i-doit frontend to **improve the user experience**.
* Added **compatibility** for **PHP 8.0**.
* **New configuration** to **create custom translations** and **custom languages**.
* **Setting** to define a [**default language** for newly created users](../../administration/verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md#sprache).
* **New configuration** to **[hide attributes](../../grundlagen/attributsichtbarkeit.md)** from categories and/or overview pages.
* **Option** to **log** the **[last login](../../administration/verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md#sicherheit)** of a user.
* [**Export** for **reports**](../../auswertungen/report-manager.md#report-exportierenimportieren) which have been created via **query builder**.

* A complete **redesign** of the i-doit frontend to **improve the user experience**.
* Added **compatibility** for **PHP 8.0**.
**Nouvelle configuration** pour **créer des traductions personnalisées** et des **langues personnalisées**.
* **Setting** to define a [**default language** for newly created users](../../administration/administration-nom-de-client/paramètres-nom-de-client.md#langue).
* **Nouvelle configuration** pour **[masquer les attributs](../../bases/visibilité des attributs.md)** des catégories et/ou des pages de présentation.
* **Option** to **log** the **[last login](../../administration/gestion/nom-du-client-administration/paramètres-nom-du-client.md#sécurité)** of a user.
* [**Export** pour **reports**](../../exploitations/report-manager.md#report-exporterimporter) qui ont été créés via **query builder**.

## Add-ons

## Add-ons

The New Add-on Versions require i-doit >= 1.19

The New Add-on Versions require i-doit >= 1.19

Alongside i-doit pro 1.19, we will also release new versions of the following **add-ons**, which **need to be updated** afterwards to be compatible with **PHP 8.0** and the **new design**:

En plus d'i-doit pro 1.19, nous allons également publier de nouvelles versions des **add-ons** suivants, qui **devront être mis à jour** par la suite pour être compatibles avec **PHP 8.0** et le **nouveau design** :

* [API](../../i-doit-pro-add-ons/api/index.md) **1.13**
* [Documents](../../i-doit-pro-add-ons/documents/index.md) **1.5**
* [Analysis](../../i-doit-pro-add-ons/analysis.md) **1.3**
* [Floorplan](../../i-doit-pro-add-ons/floorplan.md) **1.6**
* [Cabling](../../i-doit-pro-add-ons/cabling.md) **1.2**
* [Relocate CI](../../i-doit-pro-add-ons/relocate-ci.md) **1.2**
* [Replacement](../../i-doit-pro-add-ons/replacement.md) **1.4**
* [Maintenance](../../i-doit-pro-add-ons/maintenance.md) **1.2**
* [Events](../../i-doit-pro-add-ons/events.md) **1.3**
* [Workflow](../../i-doit-pro-add-ons/workflow.md) **1.1**
* [Checkmk](../../i-doit-pro-add-ons/checkmk.md) **1.1**
* [Check_MK 2](../../i-doit-pro-add-ons/checkmk2/index.md) **1.8**
* [Nagios](../../automatisierung-und-integration/network-monitoring/nagios.md) **1.1**
* [Packager](../../i-doit-pro-add-ons/add-on-packager.md) **1.2**

* [API](../../i-doit-pro-add-ons/api/index.md) **1.13**
* [Documents](../../i-doit-pro-add-ons/documents/index.md) **1.5**
* [Analysis](../../i-doit-pro-add-ons/analysis.md) **1.3**
* [Floorplan](../../i-doit-pro-add-ons/floorplan.md) **1.6**
* [Cabling](../../i-doit-pro-add-ons/cabling.md) **1.2**
* [Relocate CI](../../i-doit-pro-add-ons/relocate-ci.md) **1.2**
* [Replacement](../../i-doit-pro-add-ons/replacement.md) **1.4**
* [Maintenance](../../i-doit-pro-add-ons/maintenance.md) **1.2**
* [Events](../../i-doit-pro-add-ons/events.md) **1.3**
* [Workflow](../../i-doit-pro-add-ons/workflow.md) **1.1**
* [Checkmk](../../i-doit-pro-add-ons/checkmk.md) **1.1**
* [Check_MK 2](../../i-doit-pro-add-ons/checkmk2/index.md) **1.8**
* [Nagios](../../automatisation-et-intégration/network-monitoring/nagios.md) **1.1**
* [Packager](../../i-doit-pro-add-ons/add-on-packager.md) **1.2**

## Important update notes

## Important update notes

* With i-doit pro 1.19, **PHP 7.3** is **no longer supported**. Please ensure to upgrade to **PHP 7.4** first before updating to i-doit pro 1.19. Do **not** upgrade to **PHP 8.0** as long as you are using **i-doit pro < 1.19**.
**After** the update of i-doit pro 1.19, you are free to upgrade PHP to 8.0 which is also **highly recommended**.
* **Before activating** the feature to log the **last login of a user**, please check whether this is compatible with the **data protection agreements** of your company and country. Contact your data privacy expert first if you are not sure about this.
* If you want to use the **new icons** for object types after updating to i-doit pro 1.19, you can activate them manually in your i-doit **administration** under System tools > Cache / Database.
* The following **Partner Add-ons** need to be updated **before** the i-doit 1.19 update (If these version requirements are not matched, the i-doit update cannot be performed):
    - **[ISMS](../../i-doit-pro-add-ons/isms.md)** needs to be updated to version **1.5.2 or higher**
    - **[VIVA 2](../../i-doit-pro-add-ons/viva2.md)** needs to be updated to version **3.2.1 or higher**
    - **Privacy** needs to be updated to version **1.1 or higher**
    - **Label** needs to be updated to version **0**.5**or higher**
    - **Disposal** needs to be updated to version **1.1.2** **or higher**
    - **Inheritance** needs to be updated to version **1.3.7** **or higher**

* Avec i-doit pro 1.19, **PHP 7.3** n'est **plus supporté**. Assurez-vous de mettre à jour vers **PHP 7.4** avant de mettre à jour vers i-doit pro 1.19. Ne faites **pas** de mise à jour vers **PHP 8.0** tant que vous utilisez **i-doit pro < 1.19**.
**Après** la mise à jour d'i-doit pro 1.19, vous êtes libre de mettre à jour PHP vers 8.0 qui est également **hautement recommandé**.
* **Avant d'activer** la fonction pour enregistrer le **dernier login d'un utilisateur**, veuillez vérifier si cela est compatible avec les **accords de protection des données** de votre entreprise et de votre pays. Contactez d'abord votre expert en protection des données si vous n'êtes pas sûr de cela.
* Si vous souhaitez utiliser les **nouvelles icônes** pour les types d'objets après la mise à jour vers i-doit pro 1.19, vous pouvez les activer manuellement dans votre i-doit **administration** sous Outils système > Cache / Base de données.
* Les ** Add-ons partenaires** suivants doivent être mis à jour **avant** la mise à jour i-doit 1.19 (Si ces conditions de version ne sont pas remplies, la mise à jour i-doit ne peut pas être effectuée) :
    - **[ISMS](../../i-doit-pro-add-ons/isms.md)** doit être mis à jour à la version **1.5.2 ou plus**.
    - **[VIVA 2](../../i-doit-pro-add-ons/viva2.md)** doit être mis à jour à la version **3.2.1 ou plus**.
    - **Privacy** doit être mis à jour à la version **1.1 ou plus**.
    - **Label** doit être mis à jour à la version **0**.5**ou plus élevée**.
    - **Disposal** doit être mis à jour à la version **1.1.2** **ou plus élevée**.
    - **Inhérence** doit être mise à jour à la version **1.3.7** **ou plus élevée**.

## System requirements

## Exigences du système

Please check that your system matches the [system requirements](../../installation/systemvoraussetzungen.md) before updating your instance to i-doit pro 1.19. Please also check that you have created a [backup of all your data](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) and all add-ons are [up-to-date](../../i-doit-pro-add-ons/index.md).

Veuillez vérifier que votre système correspond aux [exigences système](../../installation/exigences système.md) avant de mettre à jour votre instance vers i-doit pro 1.19. Veuillez également vérifier que vous avez fait une [sauvegarde de toutes vos données](../../maintenance-et-exploitation/sauvegarde-et-restauration-de-données/index.md) et que tous les add-ons sont [à jour](../../i-doit-pro-add-ons/index.md).