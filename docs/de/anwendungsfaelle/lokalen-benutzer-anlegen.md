# Lokalen Benutzer anlegen

i-doit bringt bereits bei der Standard-Installation einige lokale Benutzer mit, die für die [Erstanmeldung](../grundlagen/erstanmeldung.md) genutzt werden können. In diesem Artikel wird erklärt wie man einen weiteren lokalen Benutzer anlegt.

LDAP/AD

Die meisten der hier vorgestellten Optionen sind nicht auf lokale Benutzer beschränkt, sondern können im Zusammenhang mit der [LDAP-/AD-Schnittstelle](../automatisierung-und-integration/ldap-verzeichnis/index.md) kombiniert werden.

Notfall

Lokale Benutzer können auch dann verwendet werden, wenn externe Autorisierungsschnittstellen wie LDAP/AD oder [SSO](../automatisierung-und-integration/single-sign-on/index.md) nicht zur Verfügung stehen. Auf diese Weise kann man bei einem Notfall immer noch auf die IT-Dokumentation zugegriffen werden.

Neues Objekt erstellen
----------------------

Benutzer in i-doit sind Teil der IT-Dokumentation. Daher sind alle Benutzer jeweils ein [Objekt](../grundlagen/struktur-it-dokumentation.md) vom Typ **Personen**. Um einen lokalen Benutzer anzulegen, wird daher zunächst ein neues **Personen**\-Objekt erstellt.

[![Personen-Objekt](../assets/images/de/anwendungsfaelle/lokalen-benutzer-anlegen/1-lba.png)](../assets/images/de/anwendungsfaelle/lokalen-benutzer-anlegen/1-lba.png)

Der Objekt-Titel (Attribut **Bezeichnung** in Kategorie **Allgemein**) sollte den vollständigen Namen des Benutzers enthalten. Der Objekt-Titel korrespondiert direkt mit den Attributen **Vorname** und **Nachname** der Kategorie **Personen → Stammdaten**. Ändert sich beispielsweise nachträglich der Nachname eines Benutzers wird auch der Objekttitel automatisch angepasst.

[![Stammdaten](../assets/images/de/anwendungsfaelle/lokalen-benutzer-anlegen/2-lba.png)](../assets/images/de/anwendungsfaelle/lokalen-benutzer-anlegen/2-lba.png)

Kontaktdaten
------------

Nützlich ist das Ausfüllen der Kategorie **Personen → Stammdaten**, vor allem die Attribute **E-Mail Adresse** und **Telefon Firma**. Wird diese Person einem weiteren Objekt zugeordnet (beispielsweise als Administrator eines Servers), werden diese beiden Attribute ebenfalls angezeigt und erlauben somit eine schnelle Kontaktaufnahme, ohne lange recherchieren zu müssen. Diese Verknüpfung zwischen Person und Server geschieht in der Kategorie **Personen → Zugewiesene Objekte** beziehungsweise innerhalb des Server-Objekts in der Kategorie **Kontaktzuweisung**.

[![Kontaktdaten](../assets/images/de/anwendungsfaelle/lokalen-benutzer-anlegen/3-lba.png)](../assets/images/de/anwendungsfaelle/lokalen-benutzer-anlegen/3-lba.png)

Weitere E-Mail-Adressen können in der Kategorie **E-Mail Adressen** vergeben werden.

Lokale Anmeldung
----------------

Für die Anmeldung benötigt der Benutzer einen Benutzernamen und ein Passwort. Beides wird in der Kategorie **Personen → Login** vergeben.

[![Lokale Anmeldung](../assets/images/de/anwendungsfaelle/lokalen-benutzer-anlegen/4-lba.png)](../assets/images/de/anwendungsfaelle/lokalen-benutzer-anlegen/4-lba.png)

Pro Mandant kann die minimale Länge eines Benutzerpassworts vorgegeben werden. Dies geschieht unter **Verwaltung → Systemeinstellungen → Mandanteneinstellungen → Sicherheit → Minimallänge Benutzerpasswort**. In diesem Feld wird eine positive Ganzzahl erwartet.

Benutzereinstellungen
---------------------

Jeder Benutzer kann i-doit individuell anpassen. Viele dieser Einstellungen befinden sich unter **Verwaltung → Benutzereinstellungen**.

### Anmeldedaten

Auch wenn ein Benutzer kein Editier-Recht auf die oben genannte Kategorie **Personen → Login** hat, kann er über **Verwaltung → Benutzereinstellungen → Anmeldedaten** das eigene Passwort ändern.

[![Anmeldedaten](../assets/images/de/anwendungsfaelle/lokalen-benutzer-anlegen/5-lba.png)](../assets/images/de/anwendungsfaelle/lokalen-benutzer-anlegen/5-lba.png)
### Darstellung

Die Lokalisierung und weitere Einstellung kann jeder Benutzer über **Verwaltung → Benutzereinstellungen → Darstellung** vornehmen.

| Option | Auswahl | Beschreibung |
| --- | --- | --- |
| **Sprache durch Browser wählen** | **Ja**<br><br>**Nein** | So gut wie jeder Webbrowser sendet die vom Benutzer bevorzugten Sprachen mit. i-doit ist in der Lage, diese Einstellung auszuwerten und soweit möglich anzuwenden. |
| **Sprache** | **Deutsch**<br><br>**English** | Wird die Sprache nicht durch den Webbrowser bestimmt (siehe oben), kann die Sprache über diese Option fest vorgegeben werden. |
| **Datumsformat** | **Deutsch**<br><br>**English** | Wie sollen Datumsangaben formatiert werden? **TT.MM.JJJJ** (deutsch) oder **YYYY-MM-DD** (englisch) |
| **Numerisches Format** | **Deutsch**<br><br>**English** | In welchem Format sollen Zahlen formatiert werden? **x.xxx,xx** (deutsch) oder **x,xxx.xx** (englisch) |
| **Standard Baumansicht** | **Objektsicht**<br><br>**Standortsicht** | Welche Ansicht soll nach der Anmeldung automatisch angezeigt werden? Ein Wechsel ist jederzeit möglich. |
| **Baumansicht Typ** | **Kombinierte Ansicht**<br><br>**logischer Standort**<br><br>**physischer Standort** | Die Standortsicht kann nach physischen oder logischen Standorten getrennt werden. Physische Standorte werden über die Kategorien **Standort** und dessen rückwärtige Kategorie **Räumlich zugeordnete Objekte** miteinander zu einem Standortpfad verkettet. Ein logischer Standort bezieht sich auf **Arbeitsplätze**. Eine kombinierte Ansicht ist möglich. |

[![Darstellung](../assets/images/de/anwendungsfaelle/lokalen-benutzer-anlegen/6-lba.png)](../assets/images/de/anwendungsfaelle/lokalen-benutzer-anlegen/6-lba.png)

### Objekt-Listen

Jeder Benutzer darf für jeden Objekttyp [die jeweilige Objekt-Liste individualisieren](../grundlagen/struktur-it-dokumentation.md). Dies geschieht **Verwaltung → Benutzereinstellungen → Objekt-Listen**.

### Systemeinstellungen

Unter **Verwaltung → Benutzereinstellungen → Systemeinstellungen** stehen dem Benutzer verschiedene Optionen zur Verfügung, die sich auf verschiedene Features beziehen.

| Feature | Option | Datentyp | Beschreibung |
| --- | --- | --- | --- |
| **Workflows** | **Maximalanzahl Einträge für Filteransicht** | Positive Ganzzahl | –   |
| **Objekt-Listen** | **Zuletzt verwendeten Listen-Filter merken** | Positive Ganzzahl oder 0 | Für wie viele Sekunden sollen gefilterte Objekt-Listen im Cache verbleiben, bevor sie automatisch zurückgesetzt werden? Die Zahl 0 deaktiviert das Caching. |
|     | **Einträge pro Seite in Objektlisten** | Positive Ganzzahl | Wie viele Objekte sollen in einer Objekt-Liste gleichzeitig pro Seite dargestellt werden? |
| **Quickinfo** | **Aktiviert** | Ja/Nein | Fährt der Benutzer mit der Maus über ein Objekt, werden in einem Popup verschiedene Attribute des Objekts angezeigt. |
|     | **Verzögerung** | Positive Fließkommazahl | Mit welcher Verzögerung soll das Popup angezeigt werden? |

[![Systemeinstellungen](../assets/images/de/anwendungsfaelle/lokalen-benutzer-anlegen/7-lba.png)](../assets/images/de/anwendungsfaelle/lokalen-benutzer-anlegen/7-lba.png)

Profilbild
----------

Die Kategorie **Objektbild** eignet sich, um für den Benutzer ein Profilbild hochzuladen.

[![Objektbild](../assets/images/de/anwendungsfaelle/lokalen-benutzer-anlegen/8-lba.png)](../assets/images/de/anwendungsfaelle/lokalen-benutzer-anlegen/8-lba.png)

Weitere Einstellungen
---------------------

Der Benutzer hat in weiteren Bereichen individuelle Einstellungsmöglichkeiten:

*   [Dashboard und Widgets konfigurieren](../grundlagen/dashboard-und-widgets.md)
*   [Profil im CMDB Explorer als Standard setzen](../auswertungen/cmdb-explorer/profile-im-cmdb-explorer.md)
*   [Aktivierte Filter in Objekt-Listen](../grundlagen/objekt-liste/navigieren-und-filtern.md)
*   my-doit

Benutzerrechte
--------------

[Rechte](../effizientes-dokumentieren/rechteverwaltung/index.md) innerhalb von i-doit können pro Benutzer oder – besser – pro Personengruppe vergeben werden. Dazu wird ein Benutzer der entsprechenden Gruppe zugeordnet. Diese verfügt dann über die entsprechenden Rechte, die dem Benutzer vererbt werden. Ein Benutzer kann mehreren Gruppen zugeordnet werden und erbt dadurch die jeweiligen Rechte.