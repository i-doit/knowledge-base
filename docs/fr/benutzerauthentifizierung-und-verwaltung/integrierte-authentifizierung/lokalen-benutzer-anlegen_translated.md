<!-- TRANSLATED by md-translate -->
# Lokalen Benutzer anlegen

# Créer un utilisateur local

i-doit bringt bereits bei der Standard-Installation einige lokale Benutzer mit, die für die [Erstanmeldung](../../grundlagen/erstanmeldung.md) genutzt werden können. In diesem Artikel wird erklärt wie man einen weiteren lokalen Benutzer anlegt.

Lors de l'installation standard, i-doit apporte déjà quelques utilisateurs locaux qui peuvent être utilisés pour la [première connexion](../../grundlagen/erstanmeldung.md). Dans cet article, nous expliquons comment créer un autre utilisateur local.

!!! check "LDAP/AD"
    Die meisten der hier vorgestellten Optionen sind nicht auf lokale Benutzer beschränkt, sondern können im Zusammenhang mit der [LDAP-/AD-Schnittstelle](../ldap-verzeichnis/index.md) kombiniert werden.

! !! check "LDAP/AD".
    La plupart des options présentées ici ne sont pas limitées aux utilisateurs locaux, mais peuvent être combinées dans le contexte de l'interface [LDAP/AD](../ldap-verzeichnis/index.md).

!!! check "Notfall"
    Lokale Benutzer können auch dann verwendet werden, wenn externe Autorisierungsschnittstellen wie LDAP/AD oder [SSO](../sso-vergleich/index.md) nicht zur Verfügung stehen. Auf diese Weise kann man bei einem Notfall immer noch auf die IT-Dokumentation zugegriffen werden.

! !! check "Urgence".
    Les utilisateurs locaux peuvent être utilisés même si les interfaces d'autorisation externes comme LDAP/AD ou [SSO](../sso-vergleich/index.md) ne sont pas disponibles. De cette manière, il est toujours possible d'accéder à la documentation informatique en cas d'urgence.

## Neues Objekt (Person) erstellen

## Créer un nouvel objet (personne)

Benutzer in i-doit sind Teil der IT-Dokumentation. Daher sind alle Benutzer jeweils ein [Objekt](../../grundlagen/struktur-it-dokumentation.md) vom Typ **Personen**. Um einen lokalen Benutzer anzulegen, wird daher zunächst ein neues **Personen**-Objekt erstellt.

Les utilisateurs dans i-doit font partie de la documentation IT. C'est pourquoi tous les utilisateurs sont chacun un [objet](../../bases/structure-it-documentation.md) de type **Personnes**. Pour créer un utilisateur local, il faut donc d'abord créer un nouvel objet **Personnes**.

[![Personen-Objekt](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/1-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/1-lba.png)

[ ![Objet Personnes](../../assets/images/fr/authentification des utilisateurs et administration/authentification intégrée/création d'utilisateurs locaux/1-lba.png)](../../assets/images/fr/authentification des utilisateurs et administration/authentification intégrée/création d'utilisateurs locaux/1-lba.png)

Der Objekt-Titel (Attribut **Bezeichnung** in Kategorie **Allgemein**) sollte den vollständigen Namen des Benutzers enthalten. Der Objekt-Titel korrespondiert direkt mit den Attributen **Vorname** und **Nachname** der Kategorie **Personen → Stammdaten**. Ändert sich beispielsweise nachträglich der Nachname eines Benutzers wird auch der Objekttitel automatisch angepasst.

Le titre de l'objet (attribut **Désignation** dans la catégorie **Général**) doit contenir le nom complet de l'utilisateur. Le titre de l'objet correspond directement aux attributs **prénom** et **nom de famille** de la catégorie **Personnes → Données de base**. Si, par exemple, le nom de famille d'un utilisateur est modifié ultérieurement, le titre de l'objet est également adapté automatiquement.

[![Stammdaten](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/2-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/2-lba.png)

[ ![Données de base](../../assets/images/fr/authentification des utilisateurs et administration/authentification intégrée/création d'utilisateurs locaux/2-lba.png)](../../assets/images/fr/authentification des utilisateurs et administration/authentification intégrée/création d'utilisateurs locaux/2-lba.png)

## Kontaktdaten

## Coordonnées

Nützlich ist das Ausfüllen der Kategorie **Personen → Stammdaten**, vor allem die Attribute **E-Mail Adresse** und **Telefon Firma**. Wird diese Person einem weiteren Objekt zugeordnet (beispielsweise als Administrator eines Servers), werden diese beiden Attribute ebenfalls angezeigt und erlauben somit eine schnelle Kontaktaufnahme, ohne lange recherchieren zu müssen. Diese Verknüpfung zwischen Person und Server geschieht in der Kategorie **Personen → Zugewiesene Objekte** beziehungsweise innerhalb des Server-Objekts in der Kategorie **Kontaktzuweisung**.

Il est utile de remplir la catégorie **Personnes → Données de base**, en particulier les attributs **Adresse e-mail** et **Téléphone entreprise**. Si cette personne est associée à un autre objet (par exemple en tant qu'administrateur d'un serveur), ces deux attributs sont également affichés et permettent ainsi une prise de contact rapide, sans devoir effectuer de longues recherches. Ce lien entre la personne et le serveur se fait dans la catégorie **Personnes → Objets attribués** ou au sein de l'objet serveur dans la catégorie **Attribution de contact**.

[![Kontaktdaten](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/3-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/3-lba.png)

[ ![Coordonnées](../../assets/images/fr/authentification des utilisateurs et administration/authentification intégrée/création d'utilisateurs locaux/3-lba.png)](../../assets/images/fr/authentification des utilisateurs et administration/authentification intégrée/création d'utilisateurs locaux/3-lba.png)

Weitere E-Mail-Adressen können in der Kategorie **E-Mail Adressen** vergeben werden.

D'autres adresses e-mail peuvent être attribuées dans la catégorie **Adresses e-mail**.

## Lokale Anmeldung

## Inscription locale

Für die Anmeldung benötigt der Benutzer einen Benutzernamen und ein Passwort. Beides wird in der Kategorie **Personen → Login** vergeben.

Pour se connecter, l'utilisateur a besoin d'un nom d'utilisateur et d'un mot de passe. Les deux sont attribués dans la catégorie **Personnes → Login**.

[![Lokale Anmeldung](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/4-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/4-lba.png)

[ ![Connexion locale](../../assets/images/fr/authentification des utilisateurs et administration/authentification intégrée/création d'utilisateurs locaux/4-lba.png)](../../assets/images/fr/authentification des utilisateurs et administration/authentification intégrée/création d'utilisateurs locaux/4-lba.png)

Pro Mandant kann die minimale Länge eines Benutzerpassworts vorgegeben werden. Dies geschieht unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Sicherheit → Minimallänge Benutzerpasswort**. In diesem Feld wird eine positive Ganzzahl erwartet.

La longueur minimale d'un mot de passe utilisateur peut être définie pour chaque mandant. Cela se fait sous **Administration → [Nom du mandant] Administration → Paramètres pour [Nom du mandant] → Sécurité → Longueur minimale du mot de passe utilisateur**. Un nombre entier positif est attendu dans ce champ.

## Benutzereinstellungen

## Paramètres utilisateur

Jeder Benutzer kann i-doit individuell anpassen. Viele dieser Einstellungen befinden sich unter [**Verwaltung → Benutzereinstellungen**](../../administration/verwaltung/benutzereinstellungen/index.md).

Chaque utilisateur peut personnaliser i-doit. Beaucoup de ces paramètres se trouvent sous [**administration → paramètres utilisateur**](../../administration/paramètres utilisateur/index.md).

## Anmeldedaten

## Données de connexion

Auch wenn ein Benutzer kein Editier-Recht auf die oben genannte Kategorie **Personen → Login** hat, kann er über **Verwaltung → Benutzereinstellungen → Anmeldedaten** das eigene Passwort ändern.

Même si un utilisateur n'a pas le droit d'éditer la catégorie susmentionnée **Personnes → Login**, il peut modifier son propre mot de passe via **Administration → Paramètres utilisateur → Données de connexion**.

[![Anmeldedaten](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/5-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/5-lba.png)

[ ![Données de connexion](../../assets/images/fr/authentification et gestion des utilisateurs/authentification intégrée/création d'utilisateurs locaux/5-lba.png)](../../assets/images/fr/authentification et gestion des utilisateurs/authentification intégrée/création d'utilisateurs locaux/5-lba.png)

## Profilbild

## Photo de profil

Die Kategorie **Objektbild** eignet sich, um für den Benutzer ein Profilbild hochzuladen.

La catégorie **Image d'objet** convient pour télécharger une photo de profil pour l'utilisateur.

[![Objektbild](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/6-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/6-lba.png)

[ ![Image de l'objet](../../assets/images/fr/authentification et gestion des utilisateurs/authentification intégrée/création d'utilisateurs locaux/6-lba.png)](../../assets/images/fr/authentification et gestion des utilisateurs/authentification intégrée/création d'utilisateurs locaux/6-lba.png)

## Weitere Einstellungen

## Autres paramètres

Der Benutzer hat in weiteren Bereichen individuelle Einstellungsmöglichkeiten:

L'utilisateur dispose de possibilités de réglage individuel dans d'autres domaines :

* [Dashboard und Widgets konfigurieren](../../grundlagen/dashboard-und-widgets.md)
* [Profil im CMDB Explorer als Standard setzen](../../auswertungen/cmdb-explorer/profile-im-cmdb-explorer.md)
* [Aktivierte Filter in Objekt-Listen](../../grundlagen/objekt-liste/navigieren-und-filtern.md)

* [Configurer le tableau de bord et les widgets](../../bases/dashboard-et-widgets.md)
* [Définir le profil par défaut dans CMDB Explorer](../../explorations/cmdb-explorer/profile-im-cmdb-explorer.md)
* [Filtres activés dans les listes d'objets](../../bases/liste d'objets/naviguer-et-filtrer.md)

## Benutzerrechte

## Droits de l'utilisateur

[Rechte](../../effizientes-dokumentieren/rechteverwaltung/index.md) innerhalb von i-doit können pro Benutzer oder - besser - pro Personengruppe vergeben werden. Dazu wird ein Benutzer der entsprechenden Gruppe zugeordnet. Diese verfügt dann über die entsprechenden Rechte, die dem Benutzer vererbt werden. Ein Benutzer kann mehreren Gruppen zugeordnet werden und erbt dadurch die jeweiligen Rechte.

Les [droits](../../documenter-efficacement/gestion des droits/index.md) au sein d'i-doit peuvent être attribués par utilisateur ou - mieux - par groupe de personnes. Pour ce faire, un utilisateur est affecté au groupe correspondant. Celui-ci dispose alors des droits correspondants, qui sont hérités par l'utilisateur. Un utilisateur peut être affecté à plusieurs groupes et hériter ainsi des droits correspondants.