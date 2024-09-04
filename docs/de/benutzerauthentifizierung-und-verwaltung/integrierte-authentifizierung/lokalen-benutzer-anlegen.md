# Lokalen Benutzer anlegen

!!! warning "Bitte erstellen Sie vor jeder Änderung an einer Schnittstelle/Import einen vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist kann dieses dann wiederhergestellt werden"

i-doit bringt bereits bei der Standard-Installation einige lokale Benutzer mit, die für die [Erstanmeldung](../../grundlagen/erstanmeldung.md) genutzt werden können. In diesem Artikel wird erklärt wie man einen weiteren lokalen Benutzer anlegt.

!!! check "LDAP/AD"
    Die meisten der hier vorgestellten Optionen sind nicht auf lokale Benutzer beschränkt, sondern können im Zusammenhang mit der [LDAP-/AD-Schnittstelle](../ldap-verzeichnis/index.md) kombiniert werden.

!!! check "Notfall"
    Lokale Benutzer können auch dann verwendet werden, wenn externe Autorisierungsschnittstellen wie LDAP/AD oder [SSO](../sso-vergleich/index.md) nicht zur Verfügung stehen. Auf diese Weise kann man bei einem Notfall immer noch auf die IT-Dokumentation zugegriffen werden.

## Neues Objekt (Person) erstellen

Benutzer in i-doit sind Teil der IT-Dokumentation. Daher sind alle Benutzer jeweils ein [Objekt](../../grundlagen/struktur-it-dokumentation.md) vom Typ **Personen**. Um einen lokalen Benutzer anzulegen, wird daher zunächst ein neues **Personen**\-Objekt erstellt.

[![Personen-Objekt](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/1-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/1-lba.png)

Der Objekt-Titel (Attribut **Bezeichnung** in Kategorie **Allgemein**) sollte den vollständigen Namen des Benutzers enthalten. Der Objekt-Titel korrespondiert direkt mit den Attributen **Vorname** und **Nachname** der Kategorie **Personen → Stammdaten**. Ändert sich beispielsweise nachträglich der Nachname eines Benutzers wird auch der Objekttitel automatisch angepasst.

[![Stammdaten](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/2-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/2-lba.png)

## Kontaktdaten

Nützlich ist das Ausfüllen der Kategorie **Personen → Stammdaten**, vor allem die Attribute **E-Mail Adresse** und **Telefon Firma**. Wird diese Person einem weiteren Objekt zugeordnet (beispielsweise als Administrator eines Servers), werden diese beiden Attribute ebenfalls angezeigt und erlauben somit eine schnelle Kontaktaufnahme, ohne lange recherchieren zu müssen. Diese Verknüpfung zwischen Person und Server geschieht in der Kategorie **Personen → Zugewiesene Objekte** beziehungsweise innerhalb des Server-Objekts in der Kategorie **Kontaktzuweisung**.

[![Kontaktdaten](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/3-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/3-lba.png)

Weitere E-Mail-Adressen können in der Kategorie **E-Mail Adressen** vergeben werden.

## Lokale Anmeldung

Für die Anmeldung benötigt der Benutzer einen Benutzernamen und ein Passwort. Beides wird in der Kategorie **Personen → Login** vergeben.

[![Lokale Anmeldung](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/4-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/4-lba.png)

Pro Mandant kann die minimale Länge eines Benutzerpassworts vorgegeben werden. Dies geschieht unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Sicherheit → Minimallänge Benutzerpasswort**. In diesem Feld wird eine positive Ganzzahl erwartet.

## Benutzereinstellungen

Jeder Benutzer kann i-doit individuell anpassen. Viele dieser Einstellungen befinden sich unter [**Verwaltung → Benutzereinstellungen**](../../administration/verwaltung/benutzereinstellungen/index.md).

## Anmeldedaten

Auch wenn ein Benutzer kein Editier-Recht auf die oben genannte Kategorie **Personen → Login** hat, kann er über **Verwaltung → Benutzereinstellungen → Anmeldedaten** das eigene Passwort ändern.

[![Anmeldedaten](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/5-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/5-lba.png)

## Profilbild

Die Kategorie **Objektbild** eignet sich, um für den Benutzer ein Profilbild hochzuladen.

[![Objektbild](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/6-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/6-lba.png)

## Weitere Einstellungen

Der Benutzer hat in weiteren Bereichen individuelle Einstellungsmöglichkeiten:

*   [Dashboard und Widgets konfigurieren](../../grundlagen/dashboard-und-widgets.md)
*   [Profil im CMDB Explorer als Standard setzen](../../auswertungen/cmdb-explorer/profile-im-cmdb-explorer.md)
*   [Aktivierte Filter in Objekt-Listen](../../grundlagen/objekt-liste/navigieren-und-filtern.md)

## Benutzerrechte

[Rechte](../../effizientes-dokumentieren/rechteverwaltung/index.md) innerhalb von i-doit können pro Benutzer oder - besser - pro Personengruppe vergeben werden. Dazu wird ein Benutzer der entsprechenden Gruppe zugeordnet. Diese verfügt dann über die entsprechenden Rechte, die dem Benutzer vererbt werden. Ein Benutzer kann mehreren Gruppen zugeordnet werden und erbt dadurch die jeweiligen Rechte.
