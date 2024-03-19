<!-- TRANSLATED by md-translate -->
# Forms

# Forms

Mit diesem Add-on können Sie Formulare erstellen, die Sie an anderen Mitarbeitern zum ausfüllen via Link zusenden können.<br>
Dieses Add-on kann ein Formular erstellen, dass zum Beispiel neuen Mitarbeitern hilft Computer in Ihrem Unternehmen zu dokumentieren.

Ce module complémentaire vous permet de créer des formulaires que vous pouvez envoyer par lien à d'autres collaborateurs pour qu'ils les remplissent.<br>
Ce module complémentaire peut créer un formulaire qui aide par exemple les nouveaux collaborateurs à documenter les ordinateurs dans votre entreprise.

Beim Erfassen von neuen Objekten ist es häufig so, dass zwar mehrere Kategorien angezeigt werden, aber aus jeder Kategorie nur einzelne Felder gepflegt werden müssen.<br>
In dem Fall ist es für den User (speziell wenn es neue Kollegen sind) einfacher, wenn nur die Attribute angezeigt werden, die tatsächlich ausgefüllt werden müssen.

Lors de la saisie de nouveaux objets, il arrive souvent que plusieurs catégories soient affichées, mais que seuls certains champs de chaque catégorie doivent être gérés.
Dans ce cas, il est plus simple pour l'utilisateur (surtout s'il s'agit de nouveaux collègues) de n'afficher que les attributs qui doivent effectivement être remplis.

Das Forms Add-on verwendet das Design des neuen i-doit Cloud Produktes, daher ist das Erscheinungsbild anders als in den anderen Add-ons.

L'add-on Forms utilise le design du nouveau produit i-doit Cloud, c'est pourquoi son apparence est différente de celle des autres add-ons.

Eine Vorstellung des Add-ons finden Sie auch auf unserem Blog, [hier](https://www.i-doit.com/blog/das-neue-i-doit-pro-forms-add-on/). Außerdem wurde ein [Video](https://www.youtube.com/watch?v=3jpzrK_cR0M) erstellt.

Vous trouverez également une présentation de l'add-on sur notre blog, [ici](https://www.i-doit.com/blog/das-neue-i-doit-pro-forms-add-on/). En outre, une [vidéo](https://www.youtube.com/watch?v=3jpzrK_cR0M) a été réalisée.

!!! info "Das Forms Add-on wird nur in Englisch bereitgestellt. Übersetzungen die von i-doit selbst Stammen werden auch in Deutsch dargestellt."

! !! info "Le module complémentaire Forms est uniquement disponible en anglais. Les traductions provenant d'i-doit lui-même sont également affichées en allemand".

[![forms-ansicht](../../assets/images/de/i-doit-pro-add-ons/forms/1-forms.png)](../../assets/images/de/i-doit-pro-add-ons/forms/1-forms.png)

[ ![vue des formulaires](../../assets/images/fr/i-doit-pro-add-ons/forms/1-forms.png)](../../assets/images/fr/i-doit-pro-add-ons/forms/1-forms.png)

## Anforderungen

## exigences

Das Forms Add-on benötigt

Le module complémentaire Forms nécessite

* i-doit Version **>= v23**
* MongoDB Server **v5**
* NodeJS **>= v16.x**

* Version i-doit **>= v23**.
* MongoDB Server **v5**.
* NodeJS **>= v16.x**

Hier müssen die Systemvoraussetzungen von [MongoDB](https://docs.mongodb.com/manual/administration/production-notes/#mongodb-binaries) beachtet werden.<br>
Außerdem hat MongoDB eine [Checkliste für den Einsatz im Betrieb](https://docs.mongodb.com/manual/administration/production-checklist-operations/#operations-checklist).

Il faut ici tenir compte de la configuration requise de [MongoDB](https://docs.mongodb.com/manual/administration/production-notes/#mongodb-binaries).<br>
En outre, MongoDB dispose d'une [Liste de contrôle pour l'utilisation en entreprise](https://docs.mongodb.com/manual/administration/production-checklist-operations/#operations-checklist).

[NodeJS](https://nodejs.org/en/download/current/) hat seine [Abhängigkeiten hier Dokumentiert](https://nodejs.org/en/docs/).

[NodeJS](https://nodejs.org/en/download/current/) a ses [dépendances documentées ici](https://nodejs.org/en/docs/).

## Installation

## Installation

* Installieren des Forms Add-on über das [Admin Center](../../administration/admin-center.md).
* [MongoDB Server v5](https://docs.mongodb.com/manual/installation/) installation
* Anschließend wird [NodeJS](https://nodejs.org/en/download/current/) >= v16.x installiert. via [Package Manager](https://nodejs.org/en/download/package-manager/).
* Forms Backend konfigurieren
* Backend in i-doit konfigurieren

* Installer le module complémentaire Forms via le [Admin Center](../../administration/admin-center.md).
* Installation de [MongoDB Server v5](https://docs.mongodb.com/manual/installation/)
* Ensuite, installer [NodeJS](https://nodejs.org/en/download/current/) >= v16.x. via [Package Manager](https://nodejs.org/en/download/package-manager/).
* Configurer le backend Forms
* Configurer le backend dans i-doit

[Weiter zur Installation Forms Add-on](./installation-forms-add-on.md){ .md-button .md-button--primary }

[Suivant l'installation Forms Add-on](./installation-forms-add-on.md){ .md-button .md-button--primary }

## Rechtevergabe

## Attribution de droits

Damit Benutzer in der Lage sind, Formulare zu erstellen, ist es nötig entsprechende [Rechte](../../effizientes-dokumentieren/rechteverwaltung/index.md) zu vergeben.<br>
Dies ist in der i-doit Verwaltung unterRechtesystem > Rechtevergabe > Forms möglich, wenn das Add-on installiert ist.

Pour que les utilisateurs soient en mesure de créer des formulaires, il est nécessaire d'attribuer les [droits](../../documenter-efficacement/gestion-des-droits/index.md) correspondants. <br>
Ceci est possible dans l'administration i-doit sousSystème de droits > Attribution de droits > Forms, si le module complémentaire est installé.

[![Rechtevergabe](../../assets/images/de/i-doit-pro-add-ons/forms/2-forms.png)](../../assets/images/de/i-doit-pro-add-ons/forms/2-forms.png)

[ ![Attribution de droits](../../assets/images/fr/i-doit-pro-add-ons/forms/2-forms.png)](../../assets/images/fr/i-doit-pro-add-ons/forms/2-forms.png)

!!! attention "Cache für das Rechtesystem leeren"
    Nachdem die Rechte vergeben oder geändert wurden ist es notwendig, in der i-doit [Verwaltung](../../administration/verwaltung/index.md) unter **Verwaltung → [Mandanten-Name] Verwaltung → Systemreparatur und Berechtigungen** [Cache](../../administration/verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md) zu leeren, damit die Änderungen vom System übernommen werden.

! !! attention "Vider le cache pour le système de droits".
    Après avoir attribué ou modifié les droits, il est nécessaire de vider le [Cache](../../administration/administration/index.md) dans l'i-doit [Administration] sous **Administration → [Nom du mandant] Administration → Réparation du système et autorisations**(../../administration/administration/nom du mandant-administration/réparation du système et nettoyage.md) afin que les modifications soient prises en compte par le système.

## Aufruf des Add-ons

## Appel de l'add-on

Nachdem alle Vorbereitungen abgeschlossen sind ist der Zugriff auf das Add-on ist über Extras > Forms möglich.<br>
Die Ansicht des Menüs "Extras" kann sich Aufgrund unterschiedlicher Rechte und/oder weiterer installierter Add-ons unterscheiden.

Une fois toutes les préparations terminées, l'accès à l'add-on est possible via Outils > Forms.<br>
L'affichage du menu "Outils" peut varier en raison de droits différents et/ou d'autres add-ons installés.

## Verwendung der API

## Utilisation de l'API

Dieses Dokument enthält eine rudimentäre Beschreibung der Forms-API.

Ce document contient une description rudimentaire de l'API Forms.

!!! info "[Verwendung der Forms API](./verwenden-der-forms-api.md)"

! !! info "[utilisation de l'API Forms](./utilisation-du-forms-api.md)"

## Releases

## Releases

| Version | Date | Changelog |
| --- | --- | --- |
| 1.2.0 | 2023-05-03 | [Bug] Fix Investment cost and cost center with Forms<br> [Bug] Align categories on the left side<br>[Bug] Fix right to delete or create Forms<br>[Bug] Fix empty list in object browser if category names should be used in header<br>[Bug] Show objects if attribute type is missing<br>[Bug] Improve rendering performance of object browser fields with multiple objects<br>[Bug] Filter child values after parent values
| 1.1.0 | 2022-06-27 | [Bug] Allow all default characters to be used in Forms-secret key  <br>[Bug] Do not show time selection in Start date for license keys  <br>[Bug] Allow to publish form if load balancer and HTTP2 is used  <br>[Bug] Save Form when publishing  <br>[Bug] Create Logbook entries when creating an object and category data via "Forms" add-on  <br>[Bug] Filter down connectable objects for custom categories with object relations in Forms  <br>[Bug] Allow user to copy link in Forms table  <br>[Bug] Allow user to select multiple objects in Forms object browser  <br>[Bug] Inform user about required attributes in category  <br>[Task] Add tooltip to disabled state of copy link button in Forms add-on  <br>[Task] Allow to add child attribute only when parent dependent is added  <br>[Task] Change real text to placeholder text in text field in Forms add-on  <br>[Task] Do not allow to add same attribute multiple times in Forms  <br>[Task] Give user warning before publishing if form will be empty  <br>[Task] Add dependencies of object browser to Forms add-on  <br>[Task] Split hostaddress category into virtual IPv4 and IPv6 categories for Forms add-on  <br>[Task] Take default template values in consideration in Forms  <br>[Task] Update attribute name in pre-defined field in Forms add-on  <br>[Task] Disable child attribute until a value for parent is assigned  <br>[Task] Implement Pagination in Attribute Type Object Browser Single- and Multi-Selection |
| 1.0.0 | 2022-02-21 | Initial release |

| Version | Date | Changelog |
| --- | --- | --- |
| 1.2.0 | 2023-05-03 | [Bug] Correction du coût d'investissement et du centre de coût avec les formulaires<br> [Bug] Alignement des catégories à gauche<br>[Bug] Correction du droit de supprimer ou de créer des formulaires<br>[Bug] Correction de la liste vide dans le navigateur d'objets si les noms de catégories devraient être utilisés dans l'en-tête<br>[Bug] Affichage des objets si le type d'attribut est manquant<br>[Bug] Amélioration des performances de rendu des champs du navigateur d'objets avec de multiples objets<br>[Bug] Filtrage des valeurs enfants après les valeurs parents
| 1.1.0 | 2022-06-27 | [Bug] Autoriser tous les caractères par défaut à être utilisés dans la clé secrète Forms <br>[Bug] Ne pas afficher la sélection du temps dans la date de début pour les clés de licence <br>[Bug] Autoriser la publication du formulaire si l'équilibreur de charge et HTTP2 sont utilisés <br>[Bug] Enregistrer le formulaire lors de la publication <br>[Bug] Créer des entrées de logbook lors de la création d'un objet et des données de catégorie via "Forms" add-on <br>[Bug] Filtrer vers le bas les objets connectables pour les catégories personnalisées avec des relations d'objet dans Forms <br>[Bug] Autoriser l'utilisateur à copier le lien dans la table Forms <br>[Bug] Autoriser l'utilisateur à sélectionner plusieurs objets dans le navigateur d'objet Forms <br>[Bug] Informer l'utilisateur des attributs requis dans la catégorie <br>[Tâche] Ajouter un tooltip à l'état désactivé du bouton copier le lien dans Forms add-on <br>[Tâche] Autoriser l'ajout de l'attribut enfant uniquement si la dépendance parent est ajoutée <br>[Tâche] Changer le texte réel en texte placeholder dans le champ texte dans Forms add-on <br>[Tâche] Ne pas autoriser l'ajout du même attribut plusieurs fois dans Forms <br>[Tâche] Donner un avertissement à l'utilisateur avant publication si le formulaire sera vide <br>[Tâche] Ajouter des dépendances du navigateur objet à Forms add-on <br>[Tâche] Split hostaddress category into virtual IPv4 and IPv6 categories for Forms add-on <br>[Tâche] Take default template values in consideration in Forms <br>[Tâche] Update attribute name in pre-defined field in Forms add-on <br>[Tâche] Disable child attribute until a value for parent is assigned <br>[Tâche] Implement Pagination in Attribute Type Object Browser Single- and Multi-Selection |
| 1.0.0 | 2022-02-21 | Version initiale |