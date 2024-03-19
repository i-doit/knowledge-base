<!-- TRANSLATED by md-translate -->
# Maintenance

# Maintenance

Mit dem [Add-on](./index.md) **Wartungsintervalle** können Wartungstermine geplant, koordiniert und gesteuert werden. Geplante Wartungen werden an beliebige [Objekte](../grundlagen/struktur-it-dokumentation.md) geknüpft. Um die Termine nicht zu verpassen, werden automatisch Benachrichtigung per E-Mail gesendet.

Le [Add-on](./index.md) **Intervalles de maintenance** permet de planifier, coordonner et contrôler les dates de maintenance. Les maintenances planifiées sont liées à n'importe quels [objets](../grundlagen/struktur-it-dokumentation.md). Pour ne pas manquer les rendez-vous, des notifications sont automatiquement envoyées par e-mail.

!!! info "Ein Praxisbeispiel finden Sie in unserem **[Blog](https://www.i-doit.com/blog/status-und-wartungsplanung-mit-i-doit/)**"

! !! info "Vous trouverez un exemple pratique dans notre **[Blog](https://www.i-doit.com/blog/status-und-wartungsplanung-mit-i-doit/)**"

Download und Installation

Téléchargement et installation

Dieses Add-on kann nachträglich installiert werden. Detaillierte Beschreibungen bezüglich Download, Installation, Updates usw. liefert der Artikel "[i-doit pro Add-ons](./index.md)".

Ce module complémentaire peut être installé ultérieurement. L'article "[i-doit pro Add-ons](./index.md)" fournit des descriptions détaillées concernant le téléchargement, l'installation, les mises à jour, etc.

## Konfiguration

## Configuration

Eine gesonderte Konfiguration ist nicht vorgesehen.

Une configuration séparée n'est pas prévue.

## Rechtevergabe

## Attribution de droits

Unter **Verwaltung → Rechtesystem → Rechtevergabe → Wartung** können [Rechte für Personen und Personengruppen](../effizientes-dokumentieren/rechteverwaltung/index.md) angepasst werden.

Sous **Administration → Système de droits → Attribution des droits → Maintenance**, il est possible d'adapter [Droits pour les personnes et groupes de personnes](../documentation efficace/administration des droits/index.md).

| Bedingung | Beschreibung |
| --- | --- |
| **Anstehende Wartungen** | Ermöglicht das Handhaben von amstehenden Wartungen |
| **Alle Wartungen** | Ermöglicht das Handhaben aller Wartungen |
| **Abgeschlossene Wartungen** | Ermöglicht das Handhaben von archivierten Wartungen |
| **E-Mail Vorlagen** | Ermöglicht das Handhaben von E-Mail-Vorlagen |
| **Bericht (Export)** | Ermöglicht den Export der Wartungen |
| **E-Mails senden** | Ermöglicht das Erstellen eines Berichts |

| condition | description |
| --- | --- |
| **Maintenance en attente** | Permet de gérer les maintenances en attente |
| **Toutes les maintenances** | Permet la gestion de toutes les maintenances |
| **Maintenances terminées** | Permet de gérer les maintenances archivées |
| **Modèles de courrier électronique** | Permet de gérer les modèles de courrier électronique |
| **Rapport (exportation)** | Permet d'exporter les maintenances |
| **Envoyer des e-mails** | Permet de créer un rapport |

## Wartung planen

## Planifier la maintenance

Wartungen können unter **Extras → Wartung → Alle Wartungen** angelegt und bearbeitet werden.

Les maintenances peuvent être créées et modifiées sous **Extras → Maintenance → Toutes les maintenances**.

[![Wartung](../assets/images/de/i-doit-pro-add-ons/maintenance/1-main.png)](../assets/images/de/i-doit-pro-add-ons/maintenance/1-main.png)

[ ![Maintenance](../assets/images/fr/i-doit-pro-add-ons/maintenance/1-main.png)](../assets/images/fr/i-doit-pro-add-ons/maintenance/1-main.png)

Die Aktionsleiste hält diese Funktionen bereit:

La barre d'action tient ces fonctions à disposition :

| Button | Aktion |
| --- | --- |
| **Neu** | Neue Wartung erstellen |
| **Editieren** | Selektierte Wartung bearbeiten |
| **Löschen** | Selektierte Wartungen unwiderruflich löschen |
| **Abschließen** | Selektierte Wartungen als erfolgreich beendet markieren |
| **E-Mails abschicken** | Betroffene Personen per E-Mail über die Wartungen informieren |

| bouton | action |
| --- | --- |
| **Nouveau** | Créer un nouvel entretien |
| **Editer** | Modifier la maintenance sélectionnée |
| **Supprimer** | Supprimer irrémédiablement les maintenances sélectionnées |
| **Clôturer** | Marquer les maintenances sélectionnées comme terminées avec succès |
| **Envoyer des e-mails** | Informer les personnes concernées des maintenances par e-mail |

[![Wartung](../assets/images/de/i-doit-pro-add-ons/maintenance/2-main.png)](../assets/images/de/i-doit-pro-add-ons/maintenance/2-main.png)

[ ![Maintenance](../assets/images/fr/i-doit-pro-add-ons/maintenance/2-main.png)](../assets/images/fr/i-doit-pro-add-ons/maintenance/2-main.png)

Legt man eine neue Wartung an, stehen folgende Optionen zur Auswahl:

Si l'on crée un nouvel entretien, les options suivantes sont disponibles :

| Option | Beschreibung |
| --- | --- |
| **Wartung abgeschlossen** | Wurde diese Wartung bereits als abgeschlossen markiert? |
| **E-Mail abgeschickt** | Wurde bereits eine E-Mail an die betroffenen Personen versendet? |
| **Objekte** | Liste von der Wartung betroffenen Objekte |
| **Wartungstyp** | Wartungen können hierüber kategorisiert werden. |
| **Wartungstermin** | Zeitraum der geplanten Wartung. |
| **Wiederkehrende Wartung** | Konfiguration von wiederkehrenden Wartungen. Täglich, Wöchentlich, Monatlich oder Jährlich. |
| **Beschreibung** | Weitere Details |
| **Empfänger** | Personen, denen die Wartung zugeordnet ist; diese erhalten eine E-Mail, wenn ihnen eine entsprechende E-Mail-Adresse zugeordnet ist (Kategorie Personen → Stammdaten). Bei Personengruppen als Empfänger werden ihre Mitglieder benachrichtigt. |
| **Zugewiesene Rollen** | Alternativ oder parallel zu den Empfängern können die zugewiesenen Kontakte anhand ihrer Rollen (Kategorie Kontaktzuweisung) benachrichtigt werden. |
| **E-Mail Vorlage** | Welcher Text soll per E-Mail versendet werden (siehe unten)? |

| option | description |
| --- | --- |
| **Maintenance terminée** | Cette maintenance a-t-elle déjà été marquée comme terminée ? |
| **Email envoyé** | Un e-mail a-t-il déjà été envoyé aux personnes concernées ? |
| **Objets** | Liste des objets concernés par la maintenance |
| **Type de maintenance** | Les maintenances peuvent être catégorisées ici. |
| **Date de maintenance** | Période de la maintenance planifiée. |
| **Maintenance récurrente** | Configuration des maintenances récurrentes. Tous les jours, toutes les semaines, tous les mois ou tous les ans. |
| **Description** | Plus de détails |
| **Destinataires** | Personnes auxquelles l'entretien est attribué ; elles reçoivent un e-mail si une adresse e-mail correspondante leur est attribuée (catégorie Personnes → Données de base). Si les destinataires sont des groupes de personnes, leurs membres sont informés. |
| **Rôles attribués** | Comme alternative ou parallèlement aux destinataires, les contacts attribués peuvent être notifiés sur la base de leurs rôles (catégorie Attribution de contact). |
| **Modèle d'e-mail** | Quel texte doit être envoyé par e-mail (voir ci-dessous) ? |

[![Wartung](../assets/images/de/i-doit-pro-add-ons/maintenance/3-main.png)](../assets/images/de/i-doit-pro-add-ons/maintenance/3-main.png)

[ ![Maintenance](../assets/images/fr/i-doit-pro-add-ons/maintenance/3-main.png)](../assets/images/fr/i-doit-pro-add-ons/maintenance/3-main.png)

## Anstehende Wartungen

## Maintenance à venir

Hier können für Wartungen E-Mails versendet, Wartungen abgeschlossen oder erstellt/editiert werden.

Ici, il est possible d'envoyer des e-mails pour les maintenances, de terminer ou de créer/éditer des maintenances.

[![Anstehende Wartungen](../assets/images/de/i-doit-pro-add-ons/maintenance/4-main.png)](../assets/images/de/i-doit-pro-add-ons/maintenance/4-main.png)

[ ![Prochains entretiens](../assets/images/fr/i-doit-pro-add-ons/maintenance/4-main.png)](../assets/images/fr/i-doit-pro-add-ons/maintenance/4-main.png)

## Abgeschlossene Wartungen

## Maintenance terminée

Wird eine Wartung als abgeschlossen markiert, so taucht diese nicht mehr unter **Anstehenende Wartungen** auf (siehe oben). Stattdessen wird sie unter **Extras → Wartung → Abgeschlossenen Wartungen** aufgeführt.

Si une maintenance est marquée comme terminée, elle n'apparaît plus sous **Maintenances en attente** (voir ci-dessus). Au lieu de cela, elle est listée sous **Outils → Maintenance → Maintenances terminées**.

[![Abgeschlossene Wartungen](../assets/images/de/i-doit-pro-add-ons/maintenance/5-main.png)](../assets/images/de/i-doit-pro-add-ons/maintenance/5-main.png)

[ ![Maintenance terminée](../assets/images/fr/i-doit-pro-add-ons/maintenance/5-main.png)](../assets/images/fr/i-doit-pro-add-ons/maintenance/5-main.png)

## Planungsansicht

## Vue de la planification

Eine ausführliche Übersicht aller Objekte, für die eine Wartung geplant oder bereits durchgeführt worden ist, befindet sich unter **Extras → Wartung → Übersicht**. Zur Filterung kann der Zeitraum definiert werden (Optionen **Von** und **Bis**).

Un aperçu détaillé de tous les objets pour lesquels une maintenance est prévue ou a déjà été effectuée se trouve sous **Extras → Maintenance → Aperçu**. Pour filtrer, il est possible de définir la période (options **De** et **Au**).

[![Planungsansicht](../assets/images/de/i-doit-pro-add-ons/maintenance/6-main.png)](../assets/images/de/i-doit-pro-add-ons/maintenance/6-main.png)

[ ![Vue de planification](../assets/images/fr/i-doit-pro-add-ons/maintenance/6-main.png)](../assets/images/fr/i-doit-pro-add-ons/maintenance/6-main.png)

## Bericht erstellen

## Créer un rapport

Aus den bisher geplanten und durchgeführten Wartungen lässt sich ein Bericht erstellen, der als PDF-Datei heruntergeladen werden kann. Diese Funktion befindet sich unter **Extras → Wartung → Wartung Jahresbericht (Export)**. Alternativ ist diese Funktion unter **Extras → Report Manager → Views → Wartung Jahresbericht (Export)** zu erreichen. Hierbei stehen folgende Optionen zur Auswahl:

Il est possible de créer un rapport à partir des maintenances planifiées et effectuées jusqu'à présent, qui peut être téléchargé sous forme de fichier PDF. Cette fonction se trouve sous **Extras → Maintenance → Maintenance rapport annuel (exportation)**. Alternativement, cette fonction est accessible sous **Extras → Report Manager → Views → Maintenance rapport annuel (exportation)**. Les options suivantes sont disponibles à cet effet :

| Option | Beschreibung |
| --- | --- |
| **Überschrift** | Überschrift des Berichts |
| **Wartungstyp** | Einschränkung auf einen bestimmten Typ |
| **Von** | Anfangsdatum |
| **Bis** | Enddatum |
| **Logo für PDF** | Zusätzliches Bild, das in jede Seite integriert wird; das Bild muss vorher als [Datei-Objekt](../anwendungsfaelle/dateien-hochladen-und-verknuepfen.md) in i-doit vorhanden sein. |

| option | description |
| --- | --- |
| **Titre** | Titre du rapport |
| **Type de maintenance** | Limitation à un type particulier |
| **De** | Date de début |
| **Jusqu'à** | Date de fin |
| **Logo pour PDF** | Image supplémentaire qui sera intégrée dans chaque page ; l'image doit exister préalablement dans i-doit en tant que [objet fichier](../applications/fichiers-téléchargement-et-association.md). |

Über den Button **PDF Export & Download** wird die PDF-Datei generiert und zum Herunterladen angeboten.

En cliquant sur le bouton **PDF Export & Download**, le fichier PDF est généré et proposé au téléchargement.

[![Wartungs-Bericht erstellen](../assets/images/de/i-doit-pro-add-ons/maintenance/7-main.png)](../assets/images/de/i-doit-pro-add-ons/maintenance/7-main.png)

[ ![Créer un rapport de maintenance](../assets/images/fr/i-doit-pro-add-ons/maintenance/7-main.png)](../assets/images/fr/i-doit-pro-add-ons/maintenance/7-main.png)

## Wartungsübersicht im Objekt

## Aperçu de la maintenance dans l'objet

Wenn sich ein Objekt befindet, wird dies innerhalb des Objekts symbolisch angezeigt. Auf jeder Seite eines Objekts, sprich in der Übersichtsseite oder innerhalb von Kategorien erscheint der Hinweis, das Objekt befinde sich **In Wartung**.

Lorsqu'un objet est en maintenance, cela est indiqué symboliquement à l'intérieur de l'objet. Sur chaque page d'un objet, c'est-à-dire sur la page d'aperçu ou dans les catégories, apparaît l'indication que l'objet est **En maintenance**.

Es ist möglich die Kategorie **Wartungsübersicht** dem Objekttyp über die [Objekttyp Konfiguration](../grundlagen/zurodnung-von-kategorien-zu-objekttypen.md) hinzuzufügen, somit lassen sich die Wartungen auch direkt im Objekt anzeigen.

Il est possible d'ajouter la catégorie **Récapitulatif des entretiens** au type d'objet via la [configuration du type d'objet](../bases/catégories-vers-types-d'objets.md), ce qui permet d'afficher les entretiens directement dans l'objet.

[![Wartungsübersicht im Objekt](../assets/images/de/i-doit-pro-add-ons/maintenance/8-main.png)](../assets/images/de/i-doit-pro-add-ons/maintenance/8-main.png)

[ ![Aperçu de la maintenance dans l'objet](../assets/images/fr/i-doit-pro-add-ons/maintenance/8-main.png)](../assets/images/fr/i-doit-pro-add-ons/maintenance/8-main.png)

## Wartungen auf dem Dashboard

## Maintenance sur le tableau de bord

Auf dem [Dashboard](../grundlagen/dashboard-und-widgets.md) lassen sich geplante und abgeschlossene Wartungen im Kalender-Widget anzeigen. Diese werden hervorgehoben.

Sur le [Dashboard](../grundlagen/dashboard-und-widgets.md), les maintenances planifiées et terminées peuvent être affichées dans le widget du calendrier. Celles-ci sont mises en évidence.

[![Kalender-Widget](../assets/images/de/i-doit-pro-add-ons/maintenance/9-main.png)](../assets/images/de/i-doit-pro-add-ons/maintenance/9-main.png)

[ ![Widget de calendrier](../assets/images/fr/i-doit-pro-add-ons/maintenance/9-main.png)](../assets/images/fr/i-doit-pro-add-ons/maintenance/9-main.png)

## E-Mail-Vorlagen anlegen

## Créer des modèles d'e-mail

Für jede geplante Wartung kann eine E-Mail generiert werden, um die betroffenen Personen zu benachrichtigen. Diese werden entweder als Empfänger oder über ihre zugewiesene Rolle angegeben. Welcher Text in der E-Mail verschickt wird, wird unter **Extras → Wartung → E-Mail Vorlagen** definiert. Hier sind beliebig viele Vorlagen möglich, die den einzelnen geplanten Wartungen zugeordnet werden (siehe oben).

Pour chaque maintenance planifiée, un e-mail peut être généré afin d'avertir les personnes concernées. Celles-ci sont indiquées soit comme destinataires, soit via le rôle qui leur a été attribué. Le texte qui sera envoyé dans l'e-mail est défini sous **Extras → Maintenance → Modèles d'e-mail**. Ici, il est possible d'utiliser autant de modèles que l'on veut, qui seront attribués aux différentes maintenances planifiées (voir ci-dessus).

[![E-Mail-Vorlage](../assets/images/de/i-doit-pro-add-ons/maintenance/10-main.png)](../assets/images/de/i-doit-pro-add-ons/maintenance/10-main.png)

[ ![Modèle d'e-mail](../assets/images/fr/i-doit-pro-add-ons/maintenance/10-main.png)](../assets/images/fr/i-doit-pro-add-ons/maintenance/10-main.png)

Über den Button **Neu** kann man eine neue Vorlage anlegen, über **Editieren** eine bestehende bearbeiten. Über den Button **Löschen** können Vorlagen unwiderruflich gelöscht werden.

Le bouton **Nouveau** permet de créer un nouveau modèle, le bouton **Editer** permet d'éditer un modèle existant. Le bouton **Supprimer** permet de supprimer irrémédiablement des modèles.

Das Formular zum Anlegen/Bearbeiten sieht folgende Optionen vor:

Le formulaire de création/modification prévoit les options suivantes :

| Option | Beschreibung |
| --- | --- |
| **Titel** | Betreff der E-Mail |
| **Inhalt** | Text der E-Mail |

| option | description |
| --- | --- |
| **Titre** | Objet du courriel |
| **Contenu** | Texte du courriel |

Sowohl der **Titel** als auch der **Inhalt** können mit Platzhaltern bestückt werden, die vor dem Versand ersetzt werden. Die Liste der möglichen Platzhalter sind ebenfalls auf der Seite zu finden.

Tant le **titre** que le **contenu** peuvent être dotés de caractères de remplacement, qui seront remplacés avant l'envoi. La liste des caractères de remplacement possibles se trouve également sur le site.

[![E-Mail-Vorlage](../assets/images/de/i-doit-pro-add-ons/maintenance/11-main.png)](../assets/images/de/i-doit-pro-add-ons/maintenance/11-main.png)

[ ![Modèle de courriel](../assets/images/fr/i-doit-pro-add-ons/maintenance/11-main.png)](../assets/images/fr/i-doit-pro-add-ons/maintenance/11-main.png)

## E-Mails automatisch versenden

## Envoyer automatiquement des e-mails

Der eigentliche Versand von E-Mails geschieht im Hintergrund über den [Console](../automatisierung-und-integration/cli/index.md), dem CLI Tool von i-doit. Dazu wird der Command **maintenance** verwendet. Es ist zu empfehlen, einen Cronjob einzurichten, um automatisch E-Mails zu versenden. Beispiel für den Aufruf:

L'envoi proprement dit d'e-mails se fait en arrière-plan via la [Console](../automatisation-et-intégration/cli/index.md), l'outil CLI d'i-doit. La commande **maintenance** est utilisée à cet effet. Il est recommandé de mettre en place une tâche cron pour envoyer automatiquement des e-mails. Exemple d'appel :

```
sudo -u www-data php console.php --username admin --password admin maintenance
```

Das manuelle Versenden von E-Mails (Button **E-Mails abschicken** unter **Extras → Wartung → Alle Wartungen**) kann somit automatisiert werden.

L'envoi manuel d'e-mails (bouton **Envoyer des e-mails** sous **Outils → Maintenance → Toutes les maintenances**) peut ainsi être automatisé.

## Releases

## Releases

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.3 | 07.11.2023 | [Task] Use new routes to display object and object type images / move add-on related files |
| 1.2.2 | 22.08.2023 | [Improvement] PHP 8.1 Compatibility<br>[Bug] Filter in list views not working<br>[Bug] Creating a new E-Mail template does not work when the objecttype constant of client,server or switch or not available |
| 1.2.1 | 24.01.2023 | [Bug] Error when sending multiple mails |
| 1.2 | 05.09.2022 | [Task] PHP 8.0 Compatibility  <br>[Task] Design Compatibility  <br>[Bug]  HTML code in browser message |
| 1.1.4 | 18.01.2021 | [Improvement] Compatibility with i-doit 1.16 |
| 1.1.3 | 20.10.2020 | [Bug] Maintenance without an object can be completed despite the error message  <br>[Bug] Keeping the filters in add-on "Maintenance"  <br>[Bug] Maintenance report shows the wrong period  <br>[Bug] Placeholder model>manufacturer is swapped with model>title  <br>[Bug] Email notification notifies archived contacts |
| 1.1.2 | 31.07.2019 | [Bug] Column 'Person (Role)' is empty when exporting[Bug] Maintenance report: periods underneath each other to save space<br>[Bug] Export of corrects duplicates objects<br>[Bug] Double mailing possible for recurring maintenance<br>[Bug] Maintenance can not be completed<br> |
| 1.1.1 | 05.12.2018 | [Bug] Export does not report assigned contacts in the report<br>[Bug] Object browser for recipients shows no results<br> |
| 1.1 | 16.04.2018 | [Verbesserung]  Mehrfachauswahl von Typen in der Report-View<br>[Verbesserung]  Definition von Uhrzeiten für Beginn und Ende der Wartung<br>[Verbesserung]  Wiederkehrende Wartungen<br>[Verbesserung]  Maintenance Handler umleiten auf Command und Command mit Logik aus Handler erstellen<br> |
| 1.0.3 | 18.12.2017 | Initiales Release |

| version | date | changelog |
| --- | --- | --- |
| 1.3 | 07.11.2023 | [Tâche] Utiliser de nouvelles routes pour afficher les images d'objet et de type d'objet / déplacer les fichiers liés aux modules complémentaires |
| 1.2.2 | 22.08.2023 | [Improvement] Compatibilité PHP 8.1<br>[Bug] Filtre dans les vues de la liste ne fonctionne pas<br>[Bug] La création d'un nouveau modèle d'email ne fonctionne pas si la constante de type d'objet du client, du serveur ou du switch ou n'est pas disponible |
| 1.2.1 | 24.01.2023 | [Bug] Erreur lors de l'envoi de plusieurs mails |
| 1.2 | 05.09.2022 | [Tâche] Compatibilité PHP 8.0 <br>[Tâche] Compatibilité de conception <br>[Bug] Code HTML dans le message du navigateur |
| 1.1.4 | 18.01.2021 | [Improvement] Compatibility with i-doit 1.16 |
| 1.1.3 | 20.10.2020 | [Bug] La maintenance sans objet peut être terminée malgré le message d'erreur <br>[Bug] Maintien des filtres dans l'add-on "Maintenance" <br>[Bug] Le rapport de maintenance affiche la mauvaise période <br>[Bug] Le placeholder model>manufacturer est permuté avec model>title <br>[Bug] La notification par email notifie les contacts archivés |
| 1.1.2 | 31.07.2019 | [Bug] Colonne 'Personne (Rôle)' vide lors de l'export[Bug] Rapport de maintenance : périodes en dessous les unes des autres pour sauvegarder de l'espace<br>[Bug] Exportation de corrects dupliquant des objets<br>[Bug] Double mailing possible pour la maintenance récurrente<br>[Bug] La maintenance ne peut pas être complétée<br> |
| 1.1.1 | 05.12.2018 | [Bug] L'export ne rapporte pas les contacts assignés dans le rapport<br>[Bug] Le navigateur d'objets pour les destinataires ne donne pas de résultats<br> |
| 1.1 | 16.04.2018 | [Amélioration] Sélection multiple de types dans la vue du rapport<br>[Amélioration] Définition des heures de début et de fin de maintenance<br>[Amélioration] Maintenance récurrente<br>[Amélioration] Rediriger le gestionnaire de maintenance vers la commande et créer une commande avec la logique du gestionnaire<br> |
| 1.0.3 | 18.12.2017 | Release initiale |