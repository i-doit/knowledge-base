<!-- TRANSLATED by md-translate -->
# Rechteverwaltung

# Gestion des droits

Wer darf was in i-doit sehen und bearbeiten?
Diese häufig gestellte Frage rührt daher, ein Rechtekonzept für die eigene IT-Dokumentation zu etablieren.
Nicht jede Person, die Login-berechtigt ist, darf sensible Daten sehen oder gar bearbeiten.
i-doit verfügt über eine umfassende Rechteverwaltung, die die eigene IT-Dokumentation vor unbefugtem Zugriff schützt und die Integrität wahrt.

Qui peut voir et modifier quoi dans i-doit ?
Cette question fréquemment posée vient de l'établissement d'un concept de droits pour sa propre documentation informatique.
Toutes les personnes autorisées à se connecter ne peuvent pas voir ou même modifier des données sensibles.
i-doit dispose d'une gestion complète des droits qui protège la documentation informatique contre les accès non autorisés et préserve son intégrité.

Personen und Personengruppen

Personnes et groupes de personnes

Rechte können an Personen und Personengruppen vergeben werden. Wird ein Recht an eine Gruppe vergeben, erben alle Personen, die dieser Gruppe angehören, dieses Recht. Login-berichtigte Benutzer werden als Objekt vom Typ Person in i-doit gespeichert. Die entsprechenden Gruppen sind vom Typ Personengruppe.

Les droits peuvent être attribués à des personnes ou à des groupes de personnes. Si un droit est attribué à un groupe, toutes les personnes appartenant à ce groupe héritent de ce droit. Les utilisateurs ayant corrigé leur login sont enregistrés comme objet de type personne dans i-doit. Les groupes correspondants sont de type groupe de personnes.

!!! success "Gruppen bilden"
    In der IT hat sich bewährt, das Rollenkonzept nicht für einzelne Benutzer zu erstellen, sondern für Gruppen (oder oft auch Rollen genannt). Das macht die Handhabung eleganter, denn Benutzer können einer oder mehreren Gruppen zugeordnet werden. Rechte müssen demnach nur noch an wenigen Stellen konfiguriert werden.

! !! success "Former des groupes"
    En informatique, il s'est avéré utile de créer le concept de rôle non pas pour des utilisateurs individuels, mais pour des groupes (ou souvent appelés rôles). Cela rend la manipulation plus élégante, car les utilisateurs peuvent être attribués à un ou plusieurs groupes. Les droits ne doivent donc plus être configurés qu'à quelques endroits.

Bei der Standard-Installation von i-doit gibt es einige **Personen**-Objekte, die **Personengruppen** zugewiesen sind und somit vordefinierte Rechte besitzen:

Dans l'installation standard d'i-doit, il y a quelques objets **Personnes** qui sont attribués à des **groupes de personnes** et qui ont donc des droits prédéfinis :

| Benutzer | Passwort | Gruppe | Rechte (oberflächlich) |
| --- | --- | --- | --- |
| admin | admin | Admin | Alle Rechte, auch für die [Verwaltung](../../administration/verwaltung/index.md) |
| archivar | archivar | Archivar | Lesen und ändern |
| author | author | Author | Anlegen, ändern, [archivieren](../../grundlagen/lebens-und-dokumentationszyklus.md) und ausführen |
| editor | editor | Editor | Lesen und ändern |
| reader | reader | Reader | Lesen |

| utilisateur | mot de passe | groupe | droits (superficiels) |
| --- | --- | --- | --- |
| admin | admin | Admin | Tous les droits, y compris pour [Administration](../../administration/administration/index.md) |
| archivar | archivar | Archivar | Lire et modifier |
| author | Author | Créer, modifier, [archiver](../../bases/cycledevieetdocumentation.md) et exécuter |
| editor | editor | Editeur | Lire et modifier |
| lecteur | lecteur | lecture |

Die aufgelisteten Benutzer erben ihre Rechte durch die gleichnamigen Gruppen.

Les utilisateurs listés héritent de leurs droits par le biais des groupes du même nom.

!!! success "Rechte an LDAP/AD koppeln"
    Wie im Artikel zur [Erstanmeldung](../../grundlagen/erstanmeldung.md) beschrieben, ist es sinnvoll, Personen und Gruppenzugehörigkeiten durch die Anbindung an einen [LDAP-Verzeichnisserver/Active Directory (AD)](../../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) zu automatisieren.

! !! success "Lier les droits à LDAP/AD".
    Comme décrit dans l'article sur la [première connexion](../../grundlagen/erstanmeldung.md), il est utile d'automatiser les personnes et les appartenances à des groupes en les reliant à un [serveur d'annuaire LDAP/Active Directory (AD)](../../authentification et gestion des utilisateurs/ldap-verzeichnis/index.md).

## Positive Rechte

## Droits positifs

Die Rechteverwaltung in i-doit folgt dem Konzept der positiven Rechten. Das heißt, Personen oder Gruppen können Rechte gegeben werden, aber nicht genommen.

La gestion des droits dans i-doit suit le concept des droits positifs. Cela signifie que des droits peuvent être donnés à des personnes ou à des groupes, mais qu'ils ne peuvent pas leur être retirés.

Beispiel: Person X ist der Gruppe **Admin** und **Reader** zugeordnet. Obwohl Die Gruppe **Reader** nur Leserechte in i-doit erhält, darf Person X alles in i-doit, da sie auch die Rechte der Gruppe **Admin**, die alles darf, erbt.

Exemple : La personne X est affectée au groupe **Admin** et **Reader**. Bien que le groupe **Reader** ne reçoive que des droits de lecture dans i-doit, la personne X peut tout faire dans i-doit, car elle hérite également des droits du groupe **Admin**, qui peut tout faire.

## Additive Rechte

## Droits additifs

Weiterhin addieren sich Rechte. Ist eine Person mehreren Gruppen zugeordnet, erbt sie die Rechte aller Gruppen. Ebenso addieren sich Rechte, wenn der Person und ihren zugehörigen Gruppen Rechte gegeben werden.

En outre, les droits s'additionnent. Si une personne est affectée à plusieurs groupes, elle hérite des droits de tous les groupes. De même, les droits s'additionnent lorsque la personne et les groupes auxquels elle appartient se voient attribuer des droits.

Beispiel: Person X ist in der Gruppe **Reader**, darf also alles in i-doit lesen, aber nicht ändern. Zudem erhält sie das Recht, eigene [Reports](../../auswertungen/report-manager.md) zu erstellen. Dieses Recht ergänzt sich mit den Rechten der Gruppe **Reader**.

Exemple : la personne X fait partie du groupe **Reader**, elle peut donc tout lire dans i-doit, mais ne peut pas le modifier. De plus, elle obtient le droit de créer ses propres [Rapports](../../évaluations/report-manager.md). Ce droit s'ajoute aux droits du groupe **Reader**.

## Genereller Aufbau der Konfiguration

## Structure générale de la configuration

Die Konfiguration ist pro Modul immer gleich aufgebaut, nur die Rechte selbst sind unterschiedlich. Im ersten Schritt wird im Feld **Person / Personengruppe** entweder ein Objekt vom Typ **Person** oder **Personengruppe** ausgewählt. Bereits beim Tippen des Objekt-Titels werden passende Objekte vorgeschlagen. Ein Klick auf den Button **Rechte laden** lädt die für dieses Modul gespeicherte Konfiguration.

La configuration est toujours structurée de la même manière par module, seuls les droits eux-mêmes sont différents. La première étape consiste à sélectionner dans le champ **Personne / Groupe de personnes** soit un objet de type **Personne** soit un objet de type **Groupe de personnes**. Dès que l'on tape le titre de l'objet, des objets correspondants sont proposés. Un clic sur le bouton **Charger les droits** permet de charger la configuration enregistrée pour ce module.

Werden die Rechte für ein bestimmtes Personen-Objekt geladen und sollte diese Person Rechte von zugehörigen Gruppen erben, werden diese vererbten Rechte ebenfalls angezeigt. Die vererbten Rechte können allerdings nicht geändert werden und sind somit ausgegraut.

Si les droits d'un certain objet personne sont chargés et que cette personne hérite de droits de groupes associés, ces droits hérités sont également affichés. Les droits hérités ne peuvent toutefois pas être modifiés et sont donc grisés.

Die Konfiguration in der Web GUI ist tabellarisch aufgebaut.

La configuration dans la Web GUI est structurée sous forme de tableau.

| ![rechteverwaltung-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/1-rv.png) | ![rechteverwaltung-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/2-rv.png) | ![rechteverwaltung-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/3-rv.png) | ![rechteverwaltung-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/4-rv.png) | ![rechteverwaltung-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/5-rv.png) | ![rechteverwaltung-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/5-rv.png) | ![rechteverwaltung-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/7-rv.png) | Bedingung | Parameter | Aktion |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| Erstellen | Ansehen | Bearbeiten | Archivieren | Löschen | Ausführen | Administrator | Um welchen Bereich geht es? | Optionale Parameter | ![rechteverwaltung-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/8-rv.png) Recht entfernen |

| ![rechteverwaltung-icon](../../assets/images/fr/documentation efficace/gestion des droits/1-rv.png) | ![rechteverwaltung-icon](../../assets/images/fr/documentation efficace/gestion des droits/2-rv.png) | ![rechteverwaltung-icon](../../assets/images/fr/documentation efficace/gestion des droits/3-rv.png) | ![rechteverwaltung-icon](../../assets/images/fr/documentation efficace/gestion des droits/4-rv.png) | ![rechteverwaltung-icon](../../assets/images/fr/documentation efficace/administration des droits/5-rv.png) | ![rechteverwaltung-icon](../../assets/images/fr/documentation efficace/administration des droits/5-rv.png) | ![rechteverwaltung-icon](../../assets/images/fr/documentation efficace/administration des droits/7-rv.png) | condition | paramètre | action |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| Créer | Voir | Modifier | Archiver | Supprimer | Exécuter | Administrateur | De quel domaine s'agit-il ? | Paramètres facultatifs | ![gestion des droits-icon](../../assets/images/fr/documenter-efficacement/gestion des droits/8-rv.png) Supprimer un droit |

Die Bedingung wird aus einem Drop-Down-Menü ausgewählt. Die ersten Spalten vergeben konkrete Rechte für diese Bedingung. Teilweise sind diese allerdings ausgegraut und können nicht aktiviert werden, weil es keinen Sinn macht, für ebendiese Bedingung diese Rechte zu vergeben. Ebenfalls abhängig von der Bedingung sind die optionalen Parameter. In der letzten Spalte können Aktionen durchgeführt werden (bisher: das Recht entfernen).

La condition est sélectionnée dans un menu déroulant. Les premières colonnes donnent des droits concrets pour cette condition. Certaines d'entre elles sont toutefois grisées et ne peuvent pas être activées, car cela n'a pas de sens d'attribuer ces droits pour cette même condition. Les paramètres optionnels dépendent également de la condition. Dans la dernière colonne, des actions peuvent être effectuées (jusqu'à présent : supprimer le droit).

[![rechteverwaltung-dropdown](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/9-rv.png)](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/9-rv.png)

[ ![gestion-droit-dropdown](../../assets/images/fr/documentation-efficace/gestion-droit/9-rv.png)](../../assets/images/fr/documentation-efficace/gestion-droit/9-rv.png)

Ein Klick auf den Button **Neues Recht** fügt am Ende der Tabelle eine neue Zeile hinzu.

Un clic sur le bouton **Nouveau droit** ajoute une nouvelle ligne à la fin du tableau.

!!! success "Rechte testen"
    Um die Auswirkungen an der Konfiguration direkt testen zu können, bietet es sich an, in einem zweiten Browser (bzw. einem "privaten" Tab) mit einem Benutzer angemeldet zu sein, der von den Konfigurationsänderungen betroffen ist. Sollte keiner vorhanden sein, kann ein Test-Benutzer angelegt werden und den zu testenden Gruppen zugeordnet werden.

! !! success "Tester les droits".
    Afin de pouvoir tester directement les effets sur la configuration, il est conseillé de se connecter dans un deuxième navigateur (ou un onglet "privé") avec un utilisateur concerné par les modifications de configuration. Si aucun utilisateur n'est disponible, il est possible de créer un utilisateur test et de l'attribuer aux groupes à tester.

Sind alle Rechte wie gewünscht konfiguriert, sollten diese über den Button **Speichern** scharf geschaltet werden.

Si tous les droits sont configurés comme souhaité, ils doivent être armés en cliquant sur le bouton **Enregistrer**.

!!! warning "Cache erneuern"
    Unter Umständen kann es vorkommen, dass Rechte nicht sofort greifen, beispielsweise weil die betroffenen Benutzer noch angemeldet sind. Um die neuen Rechte zu forcieren, muss der Rechte-Cache erneuert werden. Dies geschieht unter **Verwaltung → Systemtools → Cache / Datenbank → Cache → Rechtesystem Cache leeren**. Zudem ist es empfehlenswert, den Cache [automatisch regelmäßig per Cronjob](../../automatisierung-und-integration/cli/index.md) zu erneuern.

! !! warning "Renouveler le cache".
    Dans certaines circonstances, il peut arriver que les droits ne prennent pas effet immédiatement, par exemple parce que les utilisateurs concernés sont encore connectés. Pour forcer les nouveaux droits, le cache des droits doit être renouvelé. Cela se fait sous **Administration → Outils système → Cache / Base de données → Vider le cache du système de droits**. En outre, il est recommandé de renouveler le cache [automatiquement et régulièrement par tâche cron](../../automatisation-et-intégration/cli/index.md).

## Module

## Modules

Damit die Rechteverwaltung nicht zu unübersichtlich wird, sind alle Rechte in Module aufgeteilt. Zu finden sind die Module unter **Verwaltung → Rechtesystem → Rechtevergabe**.

Pour que la gestion des droits ne soit pas trop confuse, tous les droits sont répartis en modules. Les modules se trouvent sous **Administration → Système de droits → Attribution des droits**.

* **Analyse**
* **Benachrichtigungen**
* **CI-Umzug**
* **[CMDB](../../effizientes-dokumentieren/rechteverwaltung/cmdb.md)**
* **Dashboard**
* **Dialog-Admin**
* **Dokumente**
* **Events**
* **Export**
* **Gerätetausch**
* **Import**
* **Logbuch**
* **Nagios**
* **Raumplan**
* **Rechtesystem**
* **Report Manager**
* **Services**
* **Suche**
* **Templates/Massenänderung**
* **Verkabelungen**
* **Verwaltung**
* **VIVA**
* **Wartung**

**Analyse**
* **Notifications**
* **Déménagement du CI**
**[CMDB](../../documenter-efficacement/gestion des droits/cmdb.md)**
* **Dashboard**
**Dialog-Admin**
* **Documents**
* **Events**
* **Exportation**
* **Echange d'appareils**
* **Importation**
* **Journal de bord**
**Nagios**
* **Plan de la salle**
**Système de droits**
**Gestionnaire de rapports**
* **Services**
* **Recherche**
**Templates/Modification en masse**
**Câblage**
* **Gestion**
* **VIVA**
* **Maintenance**

## Rechte wiederherstellen

## Rétablir les droits

Über die **Verwaltung → Rechtesystem → Rechtesystem zurücksetzen** kann man für dem Benutzer, mit dem man derzeit angemeldet ist, alle Rechte zuordnen. Das heißt, dem Personenobjekt des Benutzers werden alle zur Verfügung stehenden Rechte zugeordnet. Um dies zu aktivieren, müssen die Credentials für das [Admin Center](../../administration/admin-center.md) eingegeben werden.

Via **Administration → Système de droits → Réinitialiser le système de droits**, on peut attribuer tous les droits pour l'utilisateur avec lequel on est actuellement connecté. Cela signifie que tous les droits disponibles sont attribués à l'objet personne de l'utilisateur. Pour activer cette fonction, il faut saisir les credentials pour le [Admin Center](../../administration/admin-center.md).

## Rechteverwaltung deaktivieren

## Désactiver la gestion des droits

Um allen Benutzern alle Rechte zu geben, kann die Rechteverwaltung deaktiviert werden. Erledigt wird dies unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Sicherheit → Rechtesystem**.

Pour donner tous les droits à tous les utilisateurs, la gestion des droits peut être désactivée. Cela s'effectue sous **Administration → [Nom du mandant] Administration → Paramètres pour [Nom du mandant] → Sécurité → Système de droits**.

## Kategorie Rechtevergabe

## catégorie attribution de droits

Zu den Objekttypen **Personen** und **Personengruppen** gibt es die Kategorie **Rechtevergabe**. Sie bietet eine stark vereinfachte Konfiguration zur Rechteverwaltung der oben genannten Module. Zu den einzelnen Modulen gibt es jeweils die Rechte **Ansehen**, **Bearbeiten**, **Archivieren**, **Löschen**, **Ausführen** und **Administrator**. Die Funktionalität ähnelt damit der einfachen Rechteverwaltung alter Versionen von i-doit. Um diese Kategorie sehen und verwenden zu können, wird das **Administrator**-Recht auf diese Kategorie im Modul **CMDB** benötigt.

Pour les types d'objets **Personnes** et **Groupes de personnes**, il existe la catégorie **Affectation des droits**. Elle offre une configuration très simplifiée pour la gestion des droits des modules mentionnés ci-dessus. Les droits **Visualiser**, **Modifier**, **Archiver**, **Effacer**, **Exécuter** et **Administrateur** sont attribués à chacun des modules. La fonctionnalité ressemble ainsi à la simple gestion des droits des anciennes versions d'i-doit. Pour pouvoir voir et utiliser cette catégorie, le droit **Administrateur** sur cette catégorie est nécessaire dans le module **CMDB**.

[![rechteverwaltung-dropdown](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/10-rv.png)](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/10-rv.png)

[ ![gestion-droit-dropdown](../../assets/images/fr/documentation-efficace/gestion-droit/10-rv.png)](../../assets/images/fr/documentation-efficace/gestion-droit/10-rv.png)

!!! warning "Sinn und Zweck"
    Die Kategorie **Rechtevergabe** bot beim Einführen der damals neuen Rechteverwaltung den Benutzern der bisherigen Rechteverwaltung einen "sanften" Umstieg. Zum jetzigen Zeitpunkt hat diese Kategorie allerdings stark an Bedeutung verloren. Sie sollte daher nicht mehr verwendet werden. Keinesfalls sollten Rechte in den einzelnen Modulen gleichzeitig mit Konfigurationen in dieser Kategorie vermischt werden.

! !! a été nommé "sens et but".
    Lors de l'introduction de la nouvelle gestion des droits, la catégorie **attribution des droits** offrait aux utilisateurs de l'ancienne gestion des droits une transition "en douceur". A l'heure actuelle, cette catégorie a toutefois perdu beaucoup de son importance. Elle ne devrait donc plus être utilisée. Les droits dans les différents modules ne doivent en aucun cas être mélangés avec des configurations dans cette catégorie.