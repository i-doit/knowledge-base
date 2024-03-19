<!-- TRANSLATED by md-translate -->
# Mandantenfähigkeit

# Capacité de mandant

i-doit ist mandantenfähig. Das bedeutet, dass über eine Installation ein oder mehrere eigenständige [IT-Dokumentationen](../glossar.md) abgebildet werden können. Die Anwendungsfälle sind vielfältig: von Sub-Organisationen, die getrennt voneinander dokumentieren sollen, über Systemhäuser, die Kunden-IT in dedizierten Instanzen dokumentieren, bis hin zu Hosting-Providern, die i-doit als Dienstleistung bereitstellen.

i-doit est multi-tenant. Cela signifie qu'une ou plusieurs [documentations informatiques](../glossaire.md) autonomes peuvent être représentées via une installation. Les cas d'utilisation sont multiples : des sous-organisations qui doivent documenter séparément les unes des autres, des maisons de système qui documentent l'informatique des clients dans des instances dédiées, jusqu'aux fournisseurs d'hébergement qui mettent i-doit à disposition en tant que service.

!!! info "Lizenzierung"
    Für die Fähigkeit, mehrere Mandanten mit einer Installation zu betreiben, ist eine spezielle Lizenz notwendig. Nähere Informationen sind [auf Anfrage](https://www.i-doit.com/kontakt/) erhältlich.

! !! info "Licence"
    Pour pouvoir exploiter plusieurs mandants avec une seule installation, une licence spéciale est nécessaire. De plus amples informations sont disponibles [sur demande](https://www.i-doit.com/kontakt/).

## Hintergrund

## Contexte

Pro Mandant existiert in i-doit eine separate Datenbank. In dieser Datenbank werden alle Inhalte gespeichert, aber auch die Konfigurationen. So können über eine Instanz von i-doit völlig unterschiedliche IT-Dokumentationen gepflegt werden. Ein Austausch zwischen Mandanten ist nicht vorgesehen. Diese strikte Trennung ist auch ein Grund dafür, dass das [Admin Center](../administration/admin-center.md) als übergeordnete Verwaltungsinstanz zur Verfügung steht.

Il existe dans i-doit une base de données séparée pour chaque mandant. Tous les contenus sont enregistrés dans cette base de données, mais aussi les configurations. Ainsi, une instance d'i-doit permet de gérer des documentations informatiques totalement différentes. Aucun échange entre les mandants n'est prévu. Cette séparation stricte est également l'une des raisons pour lesquelles le [Admin Center](../administration/admin-center.md) est disponible en tant qu'instance de gestion supérieure.

## Konfiguration

## Configuration

Die Verwaltung von Mandanten geschieht im Admin Center. Im Bereich **Tenants** werden alle derzeit angelegten Mandanten aufgelistet.

La gestion des mandants s'effectue dans l'Admin Center. Dans la zone **Tenants**, tous les mandants actuellement créés sont listés.

[![Konfiguration](../assets/images/de/administration/mandantenfaehigkeit/1-mand.png)](../assets/images/de/administration/mandantenfaehigkeit/1-mand.png)

[ ![Configuration](../assets/images/fr/administration/capacité du mandant/1-mand.png)](../assets/images/fr/administration/capacité du mandant/1-mand.png)

Oberhalb der Auflistung stehen verschiedene Optionen zur Verfügung:

Différentes options sont disponibles au-dessus de la liste :

* **Add new tenant**: ein neuer Mandant wird erstellt
* **Edit**: ein bestehender Mandant wird konfiguriert
* **Activate**: ein bestehender Mandant wird aktiviert, falls dieser vorher deaktiviert war
* **Deactivate**: ein bestehender Mandant wird deaktiviert, falls dieser vorher aktiviert war
* **Remove**: ein bestehender Mandant wird **unwiderruflich** gelöscht
* **Save license settings**: die Verteilung der Lizenzobjekte wird gespeichert

**Add new tenant** : un nouveau mandant est créé.
**Edit** : un mandant existant est configuré
**Activate** : un mandant existant est activé, s'il était désactivé auparavant.
**Deactivate** : un mandant existant est désactivé, s'il était activé auparavant.
**Remove** : un mandant existant est supprimé **irrévocablement**.
**Save license settings** : la répartition des objets de licence est enregistrée

Zum Konfigurieren wird ein Mandant über die Checkboxen ausgewählt. Zum (De-)Aktivieren oder Löschen wird ein oder mehrere Mandanten ausgewählt.

Pour configurer, un mandant est sélectionné à l'aide des cases à cocher. Pour (dé)activer ou supprimer, un ou plusieurs mandants sont sélectionnés.

[![Konfiguration](../assets/images/de/administration/mandantenfaehigkeit/2-mand.png)](../assets/images/de/administration/mandantenfaehigkeit/2-mand.png)

[ ![Configuration](../assets/images/fr/administration/capacité du mandant/2-mand.png)](../assets/images/fr/administration/capacité du mandant/2-mand.png)

Pro Mandant müssen verschiedene Eigenschaften angegeben werden (Pflichtfelder):

Différentes propriétés doivent être indiquées pour chaque mandant (champs obligatoires) :

* **Tenant GUI title**: Name des Mandanten (wird unter anderem beim Login angezeigt)
* **Description**: Beschreibung (hat bis auf den informellen Charakter keine Auswirkung auf die Funktionalität)
* **Sort value**: Sortierreihenfolge als Ganzzahl angeben (je niedriger der Wert, desto höher steht der Mandant in der Reihenfolge)
* **Cache dir**: i-doit speichert aus Performance-Gründen viele Daten zwischen. Pro Mandant wird unterhalb des Verzeichnisses temp/ im Installationsverzeichnis von i-doit ein dediziertes Cache-Verzeichnis angelegt.
* **MySQL settings**: Hierbei ist es von Vorteil, den Database Name mit Prefix `idoit_` zu benennen. Der erste Mandant erhält bei der [Installation](../installation/manuelle-installation/setup.md) standardmäßig den Datenbanknamen idoit_data.

* **Tenant GUI title** : Nom du mandant (affiché entre autres lors de la connexion)
* **Description** : Description (n'a aucun effet sur la fonctionnalité, si ce n'est son caractère informel).
**Sort value** : Indiquer l'ordre de tri sous forme d'un nombre entier (plus la valeur est basse, plus le mandant est haut dans l'ordre).
* **Cache dir** : i-doit met en cache de nombreuses données pour des raisons de performance. Pour chaque mandant, un répertoire de cache dédié est créé sous le répertoire temp/ dans le répertoire d'installation d'i-doit.
**MySQL settings** : Il est ici avantageux de nommer le nom de la base de données avec le préfixe `idoit_`. Le premier client reçoit par défaut le nom de base de données idoit_data lors de l'[installation](../installation/manuelle-installation/setup.md).

## Objektlimitierung pro Mandant

## Limitation des objets par mandant

Pro Mandant kann eingestellt werden, wie viele lizenzpflichtige Objekte maximal dokumentiert werden dürfen. Dies geschieht im Admin Center unter **Tenants**. Dort gibt es pro Mandant den Parameter **Assigned object licenses** (Ganzzahl).

Pour chaque mandant, il est possible de définir le nombre maximal d'objets soumis à licence qui peuvent être documentés. Cela se fait dans l'Admin Center sous **Tenants**. Là, il y a le paramètre **Assigned object licenses** (nombre entier) par mandant.

[![Objektlimitierung pro Mandant](../assets/images/de/administration/mandantenfaehigkeit/3-mand.png)](../assets/images/de/administration/mandantenfaehigkeit/3-mand.png)

[ ![Limitation des objets par mandant](../assets/images/fr/administration/mandantenfaehigkeit/3-mand.png)](../assets/images/fr/administration/mandantenfaehigkeit/3-mand.png)

## Add-ons pro Mandant

## Add-ons par mandant

Bei der [Installation und beim Update von Add-ons](../i-doit-pro-add-ons/i-diary.md) kann ausgewählt werden, ob diese Aktion für einen einzelnen Mandanten oder für alle Mandanten durchgeführt werden soll. Im Admin Center unter **Modules** werden alle installierten Add-ons pro Mandant aufgeführt. Sie können pro Mandant (de-)aktiviert werden. Das Löschen erfolgt für alle Mandanten.

Lors de [l'installation et de la mise à jour des add-ons](../i-doit-pro-add-ons/i-diary.md), il est possible de choisir si cette action doit être effectuée pour un seul mandant ou pour tous les mandants. Dans l'Admin Center sous **Modules**, tous les add-ons installés sont listés par mandant. Ils peuvent être (dé)activés par mandant. La suppression s'effectue pour tous les mandants.

[![Add-ons pro Mandant](../assets/images/de/administration/mandantenfaehigkeit/4-mand.png)](../assets/images/de/administration/mandantenfaehigkeit/4-mand.png)

[ ![Add-ons par mandant](../assets/images/fr/administration/capacité du mandant/4-mand.png)](../assets/images/fr/administration/capacité du mandant/4-mand.png)

!!! attention "Update von i-doit"
    Während des [Updates von i-doit](../wartung-und-betrieb/update-einspielen.md) wird abgefragt, welche Mandanten-Datenbanken aktualisiert werden sollen. Standardmäßig sind alle als ausgewählt markiert. Es wird dringend empfohlen, alle Mandanten-Datenbanken beim Update zu berücksichtigen. Eine Abweichung gilt nur in gut begründeten Ausnahmefällen (beispielsweise durch den [Support](../administration/troubleshooting/index.md)).

! !! attention "Mise à jour de i-doit".
    Pendant la [mise à jour d'i-doit](../maintenance-et-exploitation/update-einspielen.md), il est demandé quelles bases de données mandants doivent être mises à jour. Par défaut, elles sont toutes marquées comme sélectionnées. Il est fortement recommandé de prendre en compte toutes les bases de données mandants lors de la mise à jour. Une dérogation n'est valable que dans des cas exceptionnels bien justifiés (par exemple par le [Support](../administration/troubleshooting/index.md)).

## Benutzerverwaltung

## Gestion des utilisateurs

Die [Benutzerverwaltung](../grundlagen/erstanmeldung.md) wird pro Mandant konfiguriert, d. h., Personen-Objekte mit Login-Daten können je nach Mandant abweichen.

L'[administration des utilisateurs](../bases/enregistrement.md) est configurée par mandant, c'est-à-dire que les objets personnes avec données de connexion peuvent différer selon le mandant.

Sind mehrere Mandanten aktiviert, wird beim Login abgefragt, in welchen Mandanten man sich anmelden möchte. Dies geschieht allerdings nur, wenn die Zugangsdaten des Benutzers in mehreren Mandanten dieselben sind. Andernfalls wird automatisch derjenige Mandant geladen, für den die Zugangsdaten gültig sind.

Si plusieurs mandants sont activés, il est demandé lors du login dans quels mandants on souhaite s'inscrire. Cela ne se produit toutefois que si les données d'accès de l'utilisateur sont les mêmes dans plusieurs mandants. Dans le cas contraire, le mandant pour lequel les données d'accès sont valables est automatiquement chargé.

[![Benutzerverwaltung](../assets/images/de/administration/mandantenfaehigkeit/5-mand.png)](../assets/images/de/administration/mandantenfaehigkeit/5-mand.png)

[ ![Gestion des utilisateurs](../assets/images/fr/administration/capacité client/5-mand.png)](../assets/images/fr/administration/capacité client/5-mand.png)

Wird für die Authentifizierung und Autorisierung ein [LDAP-Verzeichnis/Active Directory (AD)](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) angebunden, werden beim Login die konfigurierten Server nacheinander abgefragt, ob die Zugangsdaten gültig sind. Danach wird ermittelt, für welche Mandanten die Zugangsdaten gültig sind (siehe oben).

Si un [répertoire LDAP/Active Directory (AD)](../authentification-et-gestion-des-utilisateurs/répertoire-ldap/index.md) est connecté pour l'authentification et l'autorisation, les serveurs configurés sont interrogés l'un après l'autre lors de la connexion pour savoir si les données d'accès sont valables. Ensuite, on détermine pour quels mandants les données d'accès sont valables (voir ci-dessus).

Ist [Single Sign On (SSO)](../benutzerauthentifizierung-und-verwaltung/sso-vergleich/index.md) aktiv, kann ein Mandant als Standard gewählt werden. Dies geschieht im [Admin Center](admin-center.md#system-settings). Beim Aufruf von i-doit wird der Benutzer automatisch zu diesem Mandanten verbunden, falls die Zugangsdaten korrekt sind.

Si [Single Sign On (SSO)](../authentification-et-gestion-des-utilisateurs/sso-comparaison/index.md) est activé, un mandant peut être sélectionné par défaut. Cela se fait dans [Admin Center](admin-center.md#system-settings). Lors de l'appel d'i-doit, l'utilisateur est automatiquement connecté à ce mandant, si les données d'accès sont correctes.

## Mandanten-Wechsel

## Changement de mandant

Zwischen verschiedenen Mandanten kann gewechselt werden, ohne sich vorher abmelden zu müssen. In der oberen [Hauptnavigationsleiste](../grundlagen/struktur-it-dokumentation.md) wird angegeben, mit welchem Benutzer man derzeit in welchem Mandanten angemeldet ist. Fährt man mit der Maus über den Mandanten-Namen, entsteht automatisch ein Drop-Down-Menü. Zur Auswahl stehen dann die weiteren Mandanten. Klickt man auf einen, wird der Benutzer für den derzeitigen Mandanten abgemeldet und automatisch im neuen angemeldet. Dies funktioniert allerdings nur, wenn die Zugangsdaten des Benutzers in den Mandanten dieselben sind.

Il est possible de passer d'un mandant à l'autre sans devoir se déconnecter au préalable. Dans la [barre de navigation principale] supérieure(../bases/structure-it-dokumentation.md), on indique avec quel utilisateur on est actuellement connecté et dans quel mandant. Si l'on passe la souris sur le nom du mandant, un menu déroulant apparaît automatiquement. Les autres mandants sont alors disponibles. Si l'on clique sur l'un d'eux, l'utilisateur est déconnecté du mandant actuel et automatiquement connecté au nouveau. Cela ne fonctionne toutefois que si les données d'accès de l'utilisateur sont les mêmes dans les différents mandants.

[![Mandanten-Wechsel](../assets/images/de/administration/mandantenfaehigkeit/6-mand.png)](../assets/images/de/administration/mandantenfaehigkeit/6-mand.png)

[ ![Changement de mandant](../assets/images/fr/administration/mandantenfaehigkeit/6-mand.png)](../assets/images/fr/administration/mandantenfaehigkeit/6-mand.png)