<!-- TRANSLATED by md-translate -->
# Benachrichtigungen

# Notifications

In diesem Artikel beschreiben wir das Benachrichtigungsmodul, das dafür gedacht ist, unterschiedliche Daten in der IT-Dokumentation zu prüfen und bei Eintreten von gewissen Ereignissen E-Mails zu versenden. Es besteht aus den jeweiligen [Benachrichtigungsarten](./benachrichtigungen.md#benachrichtigungsarten), der [Einrichtung](./benachrichtigungen.md#einrichtung) dieser, den [E-Mail-Vorlagen](./benachrichtigungen.md#e-mail-vorlagen) und letztendlich einer regelmäßigen Ausführung des [Console.php](./benachrichtigungen.md#konfiguration-des-aufrufs-mit-der-i-doit-console).

Dans cet article, nous décrivons le module de notification qui est destiné à vérifier différentes données dans la documentation informatique et à envoyer des e-mails lorsque certains événements se produisent. Il se compose des [types de notifications](./notifications.md#types de notifications) respectifs, de la [configuration](./notifications.md#configuration) de ceux-ci, des [modèles de courriels](./notifications.md#e-mail-modèles) et enfin d'une exécution régulière du [Console.php](./notifications.md#configuration-de-l'appel-avec-la-i-doit-console).

!!! info "Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/benachrichtigungen-und-eskalationsstufen-mit-i-doit/)"

! !! info "Vous trouverez un exemple pratique sur notre [blog](https://www.i-doit.com/blog/benachrichtigungen-und-eskalationsstufen-mit-i-doit/)"

## Benachrichtigungsarten

## Types de notifications

Die Konfiguration findet unter **Extras → CMDB → Benachrichtigungen** statt.

La configuration se fait sous **Outils → CMDB → Notifications**.

Als Benachrichtigungsarten stehen aktuell die folgenden zur Auswahl:

Les types de notification actuellement disponibles sont les suivants :

* **Ablauf einer Kündigungsfrist**<br>
Prüft Verträge auf die Zeitspanne bis zum Ablauf der Kündigungsfrist.
* **Ablauf einer Wartungs-/Garantiefrist**<br>
Prüft Verträge auf die Zeitspanne bis zum Ablauf der Wartungs-/Garantiefrist.
* **Ablauf einer Zertifikatsfrist**<br>
Prüft alle Objekttypen, denen die Kategorie "Zertifikat" zugewiesen ist, auf das Ablaufdatum des Zertifikats.
* **CMDB-Status endet**<br>
Für die Kategorie "Status-Planung" hilfreich. Hier wird vor der zu endenden geplanten Änderung des CMDB-Status benachrichtigt.
* **CMDB-Status startet**<br>
Für die Kategorie "Status-Planung" hilfreich. Hier wird vor der zu startenden geplanten Änderung des CMDB-Status benachrichtigt.
* **Freie Lizenzen**<br>
Prüft Lizenzen auf die Anzahl der restlichen/verfügbaren Lizenzen.
* **Gelagerte Objekte**<br>
Prüft beliebige Objekttyp auf die Anzahl der darin befindlichen Objekte mit dem Status "Gelagert".
* **Lizenzablauf**<br>
Prüft Lizenzen auf die Zeitspanne bis zum Ablaufdatums.
* **Reportbasierte Benachrichtigung**<br>
Führt Reports aus und benachrichtigt beim Fund einer überschrittenen, selbst definierten Anzahl an gefundenen Objekten.
* **Unveränderte Objekte**<br>
Prüft Objekte, die in einem selbst definierten Zeitraum nicht verändert wurden. Kann behilflich dabei sein, sehr alte Daten zu finden und in Prozessen aktualisieren zu lassen.
* **Veränderte Objekte**<br>
Prüft auf Objekte, die in dem vergangenen, selbst definierten Zeitraum bis Ausführung der Benachrichtigung geändert wurden. Es kann beispielsweise täglich eine Liste mit den in den letzten 24 Stunden geänderten Objekten ausgegeben werden.
* **i-doit Update**<br>
Prüft, ob eine neue Version von i-doit pro verfügbar ist. Dafür benötigt i-doit einen Zugang zum Internet.

* **Expiration d'un délai de préavis**<br>
Vérifie les contrats en fonction de la durée jusqu'à l'expiration du délai de préavis.
**Expiration d'un délai de maintenance/garantie**<br>.
Vérifie les contrats en fonction de la durée jusqu'à l'expiration du délai de maintenance/garantie.
**Expiration d'un délai de certificat**<br>.
Vérifie tous les types d'objets auxquels la catégorie "certificat" est attribuée pour la date d'expiration du certificat.
* **Le statut de la base de données CMDB se termine**<br>
Utile pour la catégorie "Planification des statuts". Ici, une notification est envoyée avant la modification planifiée du statut CMDB qui doit se terminer.
**Le statut de la CMDB démarre**<br>
Utile pour la catégorie "Planification de l'état". Ici, une notification est envoyée avant le changement planifié de l'état de la CMDB qui doit commencer.
* **Licences libres**<br>
Vérifie les licences pour le nombre de licences restantes/disponibles.
**Objets stockés**<br>.
Vérifie n'importe quel type d'objet pour le nombre d'objets qu'il contient avec le statut "Stocké".
* **Expiration de la licence**<br>
Vérifie les licences en fonction de la durée jusqu'à la date d'expiration.
**Notification basée sur des rapports**<br>.
Exécute des rapports et envoie une notification en cas de découverte d'un nombre d'objets trouvés dépassé, défini par l'utilisateur.
* **Objets non modifiés**<br>
Vérifie les objets qui n'ont pas été modifiés pendant une période définie par l'utilisateur. Peut être utile pour trouver des données très anciennes et les faire actualiser dans des processus.
* **Objets modifiés**<br>
Vérifie les objets qui ont été modifiés au cours de la période passée, définie par l'utilisateur, jusqu'à l'exécution de la notification. Il est par exemple possible d'éditer quotidiennement une liste des objets modifiés au cours des dernières 24 heures.
* **i-doit Update**<br>
Vérifie si une nouvelle version d'i-doit pro est disponible. Pour cela, i-doit a besoin d'un accès à Internet.

!!! info "Hinweis"

! !! info "Note"

```
Die Benachrichtigungsart "Reportbasierte Benachrichtigung" ist sehr flexibel einsetzbar und kann bei fast allen Events und Zuständen passende Benachrichtigungen versenden.
```

## Einrichtung

## Établissement

Die Einrichtung der Benachrichtigungen folgt immer dem gleichen Schema. Es werden allgemeine Einstellungen, wie ein Schwellwert und ein Limit der Benachrichtigungen, Objekte, die überwacht werden sollen und Kontakte, die benachrichtigt werden sollen, eingerichtet.

La configuration des notifications suit toujours le même schéma. Des paramètres généraux, tels qu'une valeur seuil et une limite des notifications, des objets à surveiller et des contacts à avertir, sont configurés.

### Allgemeine Einstellungen

### Paramètres généraux

Das * stellt in _i-doit_ ein Pflichtfeld dar.

Le * représente un champ obligatoire dans _i-doit_.

* **Bezeichnung**<br>
Die Bezeichnung sollte bestenfalls aussagekräftig sein.
* **Aktiv**<br>
Hier kann für die Aktivierung die Checkbox angeklickt werden. Benachrichtigungen können darüber deaktiviert werden.
* **Schwellwert**<br>
Der Schwellwert variiert, je nachdem ob ein zeitlicher Faktor (X Jahre/Monate/Tage/Stunden/Minuten/Sekunden) oder ein Zähler (Anzahl gefundener Objekte) für die Benachrichtigung eingerichtet werden kann. Oberhalb der Einstellungen ist eine kurze Erklärung der Benachrichtigung sowie die Information, was mit dem Schwellwert geprüft wird, hinterlegt.
* **Max. Anzahl zu sendender Benachrichtigungen**<br>
Wird die Benachrichtigung mehrfach geprüft und mehrfach ein Objekt gefunden, kann hier ein Limit gesetzt werden, nach dem nicht weiter benachrichtigt wird. Alles kleiner gleich 0 bedeutet, es wird so lange benachrichtigt, bis das/die Objekt/e geändert wurde/n und die Benachrichtigung nicht weiter gültig ist.
    Beispiel: Wird jeden Tag geprüft und benachrichtigt und es ist in dem Feld eine 5 eingetragen, wird nach 5 Tagen nicht weiter benachrichtigt.Wird zwischenzeitlich oder nach der maximalen Anzahl der Benachrichtigungen das Objekt so aktualisiert, dass es nicht mehr über die Benachrichtigung gefunden wird, wird der Zähler auf 0 zurückgesetzt.
* **Anzahl gesendeter Benachrichtigungen**<br>
Die hier ausgegebene Anzeige ist rein informativ und wird bei jedem Durchlauf entweder erhöht, wenn eine Benachrichtigung verschickt wurde, oder zurückgesetzt, wenn keine verschickt wurde.
* **Datum des letzten Durchlaufs**<br>
Ebenfalls rein informativ. Zeigt, wann das letzte Mal geprüft wurde.
* **Startdatum des Intervall**<br>
Bei diesem Feld kann ein Datum ausgewählt werden, das Datum ist das Startdatum für den Intervall
* **Intervallkonfiguration**<br>
Dieses Feld dient zur Konfiguration des Intervalls, ist kein Intervall gesetzt wird dies im Feld mit "Kein Intervall definiert" daregestellt.<br>
Intervalle lassen sich z.B. Täglich oder Wöchentlich wiederholen.<br>
Außerdem lässt ein ende des Intervalls konfigurieren.
* **Englisches Template**<br>
Das ausgewählte Template wird für Benachrichtigungen in englischer Sprache genutzt
* **Deutsches Template**<br>
Das ausgewählte Template wird für Benachrichtigungen in deutscher Sprache genutzt
* **Beschreibung**<br>
Dieses Feld ist ein Freitextfeld für einen Beschreibungstext der Benachrichtigung.

* **Désignation**<br>
Dans le meilleur des cas, la désignation doit être parlante .
* **Actif**<br>
Il est possible de cocher ici la case pour l'activation. Les notifications peuvent être désactivées.
* **Valeur seuil**<br>
La valeur seuil varie selon qu'un facteur temporel (X années/mois/jours/heures/minutes/secondes) ou un compteur (nombre d'objets trouvés) peut être configuré pour la notification. Au-dessus des paramètres se trouve une brève explication de la notification ainsi que des informations sur ce qui est vérifié avec la valeur seuil.
**Max. Nombre de notifications à envoyer**<br>.
Si la notification est vérifiée plusieurs fois et qu'un objet est trouvé plusieurs fois, il est possible de définir ici une limite au-delà de laquelle la notification ne sera plus envoyée. Tout ce qui est inférieur ou égal à 0 signifie que la notification se poursuivra jusqu'à ce que le ou les objets soient modifiés et que la notification ne soit plus valable.
    Exemple : Si l'objet est vérifié et notifié chaque jour et qu'un 5 est inscrit dans le champ, la notification ne se poursuivra pas après 5 jours.Si, entre-temps ou après le nombre maximal de notifications, l'objet est mis à jour de telle sorte qu'il ne peut plus être trouvé via la notification, le compteur est remis à 0.
* **Nombre de notifications envoyées**<br>
L'indication donnée ici est purement informative et est soit incrémentée à chaque passage si une notification a été envoyée, soit réinitialisée si aucune notification n'a été envoyée.
* **Date du dernier passage**<br>.
Également purement informatif. Indique la date de la dernière vérification.
* **Date de début de l'intervalle**<br>
Pour ce champ, une date peut être sélectionnée, la date est la date de début pour l'intervalle.
* **Configuration de l'intervalle**<br>
Ce champ sert à la configuration de l'intervalle, si aucun intervalle n'est défini, cela est indiqué dans le champ par "Aucun intervalle défini".
Les intervalles peuvent être répétés, par exemple, tous les jours ou toutes les semaines.
En outre, il est possible de configurer la fin de l'intervalle.
**Template en anglais**<br>
Le modèle sélectionné est utilisé pour les notifications en anglais.
**Modèle allemand**<br>.
Le modèle sélectionné est utilisé pour les notifications en allemand.
* **Description**<br>
Ce champ est un champ de texte libre pour un texte de description de la notification.

### Domänen

### Domaines

Unter den Domänen lassen sich gezielt Objekte oder nach einem Schema gesammelt auswählen, die von der Benachrichtigung überprüft werden sollen.

Parmi les domaines, il est possible de sélectionner des objets ciblés ou rassemblés selon un schéma, qui doivent être contrôlés par la notification.

* **Objekte**<br>
Es können über die Lupe ein oder mehrere Objekte ausgewählt werden.
* **Objekttypen**<br>
Hierüber können alle Objekte eines oder mehrerer hier ausgewählten Objekttypen überprüft werden.
* **Reports**<br>
Mit einem Report kann noch gezielter benachrichtigt werden. Beispiel: Es soll geprüft werden, ob es noch genug freie Lizenzen gibt, die mehr als 150€ pro Stück kosten, da dort ein längerer Prozess zu beachten ist, als bei günstigeren Lizenzen. Ein zweiter Report kann dann erstellt und in einer anderen Benachrichtigung verwendet werden, um die günstigeren abzufragen und zu einem anderen, vielleicht späteren Zeitpunkt, zu benachrichtigen. Bitte hier auch unbedingt auf die Domäne und die in den abgefragten Objekttypen zugewiesenen Kategorien achten!
* **Nur Objete mit Status "Normal"**<br>
Ist diese Option auf Ja gestellt werden nur noch Objekte im Report dargestellt die den [Zustand](../grundlagen/lebens-und-dokumentationszyklus.md#zust%C3%A4nde) Normal besitzen.

* **Objets**<br>
Il est possible de sélectionner un ou plusieurs objets à l'aide de la loupe.
* **Types d'objets**<br>
Tous les objets d'un ou de plusieurs types d'objets sélectionnés ici peuvent être contrôlés.
* **Reports**<br>
Un rapport permet d'informer de manière encore plus ciblée. Exemple : il faut vérifier s'il y a encore suffisamment de licences libres qui coûtent plus de 150€ par pièce, car il faut y observer un processus plus long que pour les licences moins chères. Un deuxième rapport peut alors être créé et utilisé dans une autre notification pour interroger les moins chères et les notifier à un autre moment, peut-être plus tard. Veuillez faire attention au domaine et aux catégories attribuées aux types d'objets interrogés !
**Seuls les objets avec le statut "Normal "**<br>.
Si cette option est réglée sur Oui, seuls les objets qui possèdent l'[état](../bases/cycle de vie et de documentation.md#état%C3%A4nde) Normal seront représentés dans le rapport.

!!! info "Hinweis"

! !! info "Note"

```
Je nach Benachrichtigungsart werden nur bestimmte Objekttypen unterstützt. Beispielsweise dürfen bei Prüfung von Verträgen nur Objekte vom Typ "Vertrag" und bei Prüfung von Lizenzen nur Objekte vom Typ "Lizenz" angegeben werden.
```

### Empfänger

### Destinataire

Bei den Empfängern kann ebenfalls gezielt oder gesammelt benachrichtigt werden.

Pour les destinataires, il est également possible d'effectuer des notifications ciblées ou collectives.

* **Zugewiesene Rollen**<br>
Wird ein Objekt mit der konfigurierten Benachrichtigung gefunden, kann hierüber der diesem Objekt zugewiesene Kontakt in der hier eingestellten Rolle benachrichtigt werden.<br>
Beispiel: Bei Verträgen kann der unter dem Vertrag über die Kategorie "Kontaktzuweisung" dokumentierte Kontakt mit der Rolle "Vertragspartner" benachrichtigt werden.<br>
Kontaktpersonen die via Kontaktzuweisung -> Rolle benachrichtigt werden erhalten auch nur die Informationen zu diesem Objekt.
* **Zugewiesene Kontakte**<br>
Es kann auch ein oder mehrere Kontakte bzw. ein oder mehrere Personengruppen oder Organisationen benachrichtigt werden. Wichtig hierbei ist eine zu jedem Kontaktobjekt hinterlegte E-Mail-Adresse.
    !!! info "Hier zugewiesene Kontakte werden immer und über alle Objekte benachrichtigt."
* **Strategie zur Berechnung der Empfänger**<br>
Genutzte Berechnungsstrategie der Empfänger bei der **Auflösung von Personengruppen** zu Personen. Diese Einstellung betrifft nur Personengruppen die als Kontakt zugewiesen sind.

**Rôles attribués**<br>.
Si un objet est trouvé avec la notification configurée, le contact attribué à cet objet peut être notifié à ce sujet dans le rôle défini ici.<br>
Exemple : pour les contrats, le contact documenté sous le contrat via la catégorie "Attribution de contact" peut être notifié avec le rôle "Partenaire contractuel".<br>
Les personnes de contact qui sont informées via Attribution de contact -> Rôle reçoivent également uniquement les informations relatives à cet objet.
* **Contacts assignés**<br>
Il est également possible de notifier un ou plusieurs contacts ou un ou plusieurs groupes de personnes ou organisations. Il est important de disposer d'une adresse e-mail pour chaque objet de contact.
    ! !! info "Les contacts attribués ici sont toujours informés et ce pour tous les objets".
* **Stratégie de calcul des destinataires**<br>
Stratégie de calcul des destinataires utilisée lors de la **résolution des groupes de personnes** en personnes. Ce paramètre ne concerne que les groupes de personnes qui sont attribués comme contact.

| Strategie | Beschreibung |
| --- | --- |
| -  | Dies is der Standard = Gruppen falls E-Mail vorhanden, sonst zugewiesene Personen |
| Gruppen falls E-Mail vorhanden, sonst zugewiesene Personen | Wenn die Personengruppe eine primäre E-Mail Adresse hinterlegt hat wird diese benachrichtigt.  <br>Wenn die Personengruppe KEINE primäre E-Mail Adresse hinterlegt hat, werden die primären E-Mail Adressen der Personengruppen Mitglieder benachrichtigt. |
| Gruppen und Personen | Es werden die primären E-Mail Adressen der Personengruppen und der Personengruppen Mitglieder benachrichtigt. |
| Nur Gruppen | Personengruppen mit einer primären E-Mail Adresse werden benachrichtigt. |
| Nur Personen | Personengruppen Mitglieder mit einer primären E-Mail Adresse werden benachrichtigt. |

| stratégie | description |
| --- | --- |
| - | C'est la valeur par défaut = Groupes si e-mail disponible, sinon personnes assignées |
| Groupes si e-mail disponible, sinon personnes assignées | Si le groupe de personnes a une adresse e-mail primaire, celle-ci sera informée.  <br>Si le groupe de personnes n'a pas d'adresse e-mail primaire, les adresses e-mail primaires des membres du groupe de personnes seront notifiées. |
| Groupes et personnes | Les adresses e-mail primaires des groupes de personnes et des membres des groupes de personnes seront notifiées. |
| Groupes uniquement | Les groupes de personnes ayant une adresse e-mail primaire seront notifiés. |
| Personnes uniquement | Les membres de groupes de personnes ayant une adresse e-mail primaire seront notifiés. |

### E-Mail-Vorlagen

### Modèles d'e-mail

Im linken Navigationsbaum lassen sich die jeweiligen, zu den Benachrichtigungen passenden Vorlagen auswählen und für die deutsche und englische Sprache anpassen. Dies gilt immer global für alle Benutzer und sollte demnach nicht zu speziell angepasst werden. Die Möglichkeit, die Vorlage auf den Standard zurückzusetzen besteht nicht. Ob die deutsche oder englische Nachricht verschickt wird, hängt von der Benutzereinstellung des zu benachrichtigenden Kontakts zusammen. Hat dieser sich noch nie in i-doit angemeldet, wird in der Standard-Sprache von _i-doit_ benachrichtigt.

Dans l'arborescence de navigation de gauche, il est possible de sélectionner les modèles correspondants aux notifications et de les adapter pour l'allemand et l'anglais. Cela s'applique toujours globalement à tous les utilisateurs et ne devrait donc pas être adapté de manière trop spécifique. Il n'est pas possible de rétablir le modèle par défaut. L'envoi d'un message en allemand ou en anglais dépend des paramètres utilisateur du contact à informer. Si ce dernier ne s'est jamais connecté à i-doit, le message sera envoyé dans la langue par défaut de _i-doit_.

* **Sprache**<br>
Es wird die Sprache angezeigt, die gerade bearbeitet wird.
* **Betreff**<br>
Der Betreff der zu verschickenden Nachricht kann mit Platzhaltern aus dem unteren Bereich der Oberfläche selbst definiert werden.
* **Benachrichtigungstext**<br>
Der Text kann, wie auch der Betreff, mit Platzhaltern zusammengestellt werden.
* **Report**<br>
Ein Report kann hier definiert werden, mit dem in der E-Mail die in der Benachrichtigung gefundenen Objektinformationen aufbereitet verschickt werden.

* **Langue**<br>
La langue en cours d'édition est affichée.
* **Sujet**<br>
L'objet du message à envoyer peut être défini lui-même à l'aide de caractères de remplacement provenant de la partie inférieure de l'interface.
**Texte de la notification**<br>
Le texte, tout comme l'objet, peut être composé avec des caractères de remplacement.
* **Rapport**<br>
Un rapport peut être défini ici, avec lequel les informations sur les objets trouvées dans la notification seront envoyées dans l'e-mail sous forme préparée.

## Konfiguration des Aufrufs mit der i-doit Console

## Configuration de l'appel avec la Console i-doit

Damit die eingerichteten Benachrichtigungen auch regelmäßig überprüft werden, muss die i-doit [Console](../automatisierung-und-integration/cli/console/index.md) mit dem Command **[notifications-send](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#OptionenundParameterderConsole-notifications-send)** zum Beispiel als [Cronjob](../wartung-und-betrieb/cronjobs-einrichten.md) ausgeführt werden. Es lässt sich jede Benachrichtigung einzeln abrufen. Sinnvoll ist es, zu überlegen, wie oft maximal geprüft werden soll. Bewährt hat es sich unserer Erfahrung nach täglich kurz vor Arbeitsbeginn zu prüfen, damit morgens sofort klar ist, womit man sich den Tag über beschäftigen sollte.

Pour que les notifications configurées soient régulièrement vérifiées, la [Console](../automatisation-et-intégration/cli/console/index.md) d'i-doit doit être configurée avec la commande **[notifications-send](.../automatisation-et-intégration/cli/console/options-et-paramètres-de-la-console.md#options-et-paramètres-de-la-console-notifications-send)** par exemple comme [Cronjob](../maintenance-et-exploitation/cronjobs-installer.md). Il est possible de récupérer chaque notification individuellement. Il est judicieux de réfléchir à la fréquence maximale de vérification. D'après notre expérience, il est conseillé de vérifier tous les jours juste avant de commencer à travailler, afin de savoir tout de suite à quoi on doit s'occuper pendant la journée.

!!! info "Hinweis"

! !! info "Note"

```
Ohne einen Aufruf des Commands über die i-doit Console findet **kein** Versand der Benachrichtigungen statt!
```

Die Möglichen Parameter sowie ein Beispielaufruf für den Versand der Benachrichtigungen sind im [entsprechenden Artikel](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md) für den Command **[notifications-send](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#notifications-send)** zu finden.

Les paramètres possibles ainsi qu'un exemple d'appel pour l'envoi des notifications se trouvent dans [l'article correspondant](../automatisation-et-intégration/cli/console/options-et-paramètres-der-console.md) pour la commande **[notifications-send](../automatisation-et-intégration/cli/console/options-et-paramètres-der-console.md#notifications-send)**.

!!! info "Hinweis"

! !! info "Note"

```
Mit dem Benachrichtigungsmodul lassen sich Eskalationsstufen abbilden. Dazu ist nötig, für dieselben Benachrichtigungsarten mehrere Benachrichtigungen mit verschiedenen Empfängerkreisen und Schwellwerten einzurichten.
```

**Beispiel zur Verwendung**

**Exemple d'utilisation**

```
sudo -u www-data php console.php notifications-send --user admin --password admin --tenantId 1
```