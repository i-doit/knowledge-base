<!-- TRANSLATED by md-translate -->
# Workflow

# Workflow

Das Workﬂow-System in i-doit ist ein erweiterbares Modul, welches Workﬂows erzeugt. Somit lassen sich einmalige AUFTRÄGE, aber auch wiederkehrende CHECKLISTEN erstellen und an die verantwortlichen Personen und Objekte zuweisen. Involvierte Personen werden über statusbasierte Benachrichtigungen informiert.

Le système de workﬂows dans i-doit est un module extensible qui génère des workﬂows. Il est ainsi possible de créer des ORDRES uniques, mais aussi des LISTES DE CHECK récurrentes et de les attribuer aux personnes et objets responsables. Les personnes impliquées sont informées par des notifications basées sur l'état.

## Workflow-Typen

## Types de flux de travail

Der WORKFLOW-TYP verhält sich wie eine Schablone und umfasst alle notwendigen Parameter, welche zur Ausführung notwendig sind. Diese Schablone lässt sich über eine Verwaltungsoberﬂäche bearbeiten. Über diese lassen sich ebenso neue Schablonen anlegen.

Le TYPE DE WORKFLOW se comporte comme un gabarit et comprend tous les paramètres nécessaires à son exécution. Ce modèle peut être modifié via une interface de gestion. Il est également possible de créer de nouveaux gabarits via cette interface.

## Der Workflow

## Le flux de travail

Ein Workﬂow beschreibt eine terminierte vom Benutzer auszuführende Aktion wie beispielsweise das Austauschen des Band-Mediums eines speziellen Backup-Servers. Jegliche WorkﬂowZuweisung muss von den entsprechenden Personen akzeptiert werden. Nach erfolgreichem Abschluss kann ein Statusbericht eingereicht werden.

Un workﬂow décrit une action planifiée à exécuter par l'utilisateur, comme par exemple le remplacement du support de bande d'un serveur de sauvegarde spécifique. Toute attribution de workﬂow doit être acceptée par les personnes concernées. Une fois l'opération terminée avec succès, un rapport d'état peut être soumis.

## Vordefinierte Workflow-Typen

## Types de workflow prédéfinis

### Arbeitsauftrag

### Ordre de travail

Ein Arbeitsauftrag ist eine terminierte von wählbaren Benutzern auszuführende Aktion.

Un ordre de travail est une action programmée devant être exécutée par des utilisateurs sélectionnables.

### Checkliste

### Liste de contrôle

Mit dem speziellen Workﬂow-Typ CHECKLISTEN können täglich, wöchentlich und jährlich wiederkehrende Aufträge generiert werden, indem zu dem reinen Startdatum eine periodische Zeitfolge angegeben und die entsprechende Option der Wiederholung ausgewählt wird. Diese wiederkehrenden Workﬂows lassen sich ebenfalls terminiert beenden.

Le type de workﬂow spécial LISTES DE CHECK permet de générer des ordres récurrents quotidiens, hebdomadaires et annuels en indiquant, en plus de la date de début pure, une séquence temporelle périodique et en sélectionnant l'option de récurrence correspondante. Ces workﬂows récurrents peuvent également être terminés de manière programmée.

## Parameter der Vorlagen

## Paramètres des modèles

Für die beiden Workﬂow-Typen TASK (Arbeitsauftrag) und CHECKLIST gibt es bereits vorgefertigte Parameter, welche bei Erstellung eines neuen Workﬂows berücksichtigt werden. Die beiden Datumstypen für Start- und Enddatum werden bei jedem neu angelegten Workﬂow-Typen automatisch erstellt. Die anderen Parameter können nach Belieben erstellt und einem neuen Typen zugeordnet werden:

Pour les deux types de workﬂows TASK (ordre de travail) et CHECKLIST, il existe déjà des paramètres prédéfinis qui sont pris en compte lors de la création d'un nouveau workﬂow. Les deux types de dates de début et de fin sont créés automatiquement pour chaque nouveau type de workﬂow créé. Les autres paramètres peuvent être créés à volonté et attribués à un nouveau type :

* Text
* Einzeiliges Textfeld
* Fulltext
* Mehrzeiliges Textfeld
* Numeric
* Numerisches Textfeld
* Date
* Textfeld mit Datum
* Ja / Nein
* Zwei Radiobuttons zur Auswahl

* Texte
* Zone de texte d'une seule ligne
* texte intégral
* Champ de texte multiligne
* Numérique
* Zone de texte numérique
* Date
* Zone de texte avec date
* Oui / Non
* Deux boutons radio pour choisir

Die Bezeichnung und der Schlüssel bei einem neuen Workﬂow-Typen kann frei gewählt werden, die Reihenfolge gibt an, in welcher Reihenfolge die Felder untereinander angezeigt werden. Nach leerem Feld überprüfen gibt eine Fehlermeldung aus, wenn das Feld nicht ausgefüllt wurde und versucht wird den Workﬂow zu speichern.

La désignation et la clé d'un nouveau type de workﬂow peuvent être choisies librement, l'ordre indique l'ordre dans lequel les champs sont affichés les uns sous les autres. Vérifier après un champ vide donne un message d'erreur si le champ n'a pas été rempli et que l'on essaie d'enregistrer le workﬂow.

## Workflows im Objekt

## Workflows dans l'objet

**Workflows** lassen sich auch im Objekt über die Kategorie **Workflows** anzeigen. Diese muss zuvor über die [Objekttyp Konfiguration](../grundlagen/zurodnung-von-kategorien-zu-objekttypen.md) hinzugefügt werden.

Les **Workflows** peuvent également être affichés dans l'objet via la catégorie **Workflows**. Celle-ci doit être ajoutée au préalable via la [Configuration du type d'objet](../bases/classement-des-catégories-en-types-d'objets.md).

[![Workflows im Objekt](../assets/images/de/i-doit-pro-add-ons/workflow/1-wf.png)](../assets/images/de/i-doit-pro-add-ons/workflow/1-wf.png)

[ ![Workflows dans l'objet](../assets/images/fr/i-doit-pro-add-ons/workflow/1-wf.png)](../assets/images/fr/i-doit-pro-add-ons/workflow/1-wf.png)

## Releases

## Releases

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.2 | 07.11.2023 | [Task] Use new routes to display object and object type images / move add-on related files |
| 1.1.1 | 22.08.2023 | [Improvement] PHP 8.1 Compatibility |
| 1.1 | 05.09.2022 | [Task] PHP 8.0 Compatibility  <br>[Task] Design Compatibility |
| 1.0.6 | 27.07.2022 | [Bug] Error message when a workflow is accepted  <br>[Bug] The frequency of checklists cannot be used because the value is not saved |
| 1.0.5 | 18.01.2021 | [Improvement] Compatibility with i-doit 1.16 |
| 1.0.4 | 10.08.2020 | [Bug] Only the creator of a checklist is able to edit it |
| 1.0.3 | 05.07.2019 | [Bug] Error Update Workflow Add-on 1.0.2 |
| 1.0.2 | 20.05.2019 | [Bug] I-doit is also displayed in the sidebar via My-doit link<br>[Bug] Console.php command workflows-process<br>[Bug] ModuleID is missing in the notification<br>[Bug] ModuleID is missing in the links of the Workflow category to the module |
| 1.0.1 | 08.01.2019 | [Bug] I-doit is also displayed in the sidebar |
| 1.0 | 17.12.2018 | [Improvement] Add-onizing the workflows |

| version | date | changelog |
| --- | --- | --- |
| 1.2 | 07.11.2023 | [Tâche] Utiliser de nouvelles routes pour afficher les images d'objet et de type d'objet / déplacer les fichiers liés aux modules complémentaires |
| 1.1.1 | 22.08.2023 | [Improvement] PHP 8.1 Compatibility |
| 1.1 | 05.09.2022 | [Task] PHP 8.0 Compatibility <br>[Tâche] Design Compatibility |
| 1.0.6 | 27.07.2022 | [Bug] Message d'erreur lorsqu'un workflow est accepté <br>[Bug] La fréquence des checklists ne peut pas être utilisée car la valeur n'est pas sauvegardée |
| 1.0.5 | 18.01.2021 | [Amélioration] Compatibilité avec i-doit 1.16 |
| 1.0.4 | 10.08.2020 | [Bug] Seul le créateur d'une checklist peut l'éditer |
| 1.0.3 | 05.07.2019 | [Bug] Erreur de mise à jour du workflow Add-on 1.0.2 |
| 1.0.2 | 20.05.2019 | [Bug] I-doit est aussi affiché dans la sidebar via le lien My-doit<br>[Bug] Console.php command workflows-process<br>[Bug] ModuleID est manquant dans la notification<br>[Bug] ModuleID est manquant dans les liens de la catégorie Workflow vers le module |
| 1.0.1 | 08.01.2019 | [Bug] I-doit est aussi affiché dans la sidebar |
| 1.0 | 17.12.2018 | [Improvement] Add-onizing the workflows |