---
title: Lokalen Benutzer anlegen
description: "Mit einem lokalen Benutzer kannst du dich direkt an i-doit anmelden, ohne auf einen externen Verzeichnisdienst angewiesen zu sein."
icon:
status:
lang: de
---
# Lokalen Benutzer anlegen

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Mit einem lokalen Benutzer kannst du dich direkt an i-doit anmelden, ohne auf einen externen Verzeichnisdienst angewiesen zu sein. i-doit bringt bei der Standard-Installation bereits einige lokale Benutzer mit, die du für die [Erstanmeldung](../../grundlagen/erstanmeldung.md) nutzen kannst. Dieser Artikel zeigt dir Schritt für Schritt, wie du einen weiteren lokalen Benutzer anlegst.

!!! check "LDAP/AD"
    Die meisten der hier vorgestellten Optionen sind nicht auf lokale Benutzer beschränkt. Du kannst sie auch in Kombination mit der [LDAP-/AD-Schnittstelle](../ldap-verzeichnis/index.md) verwenden.

!!! check "Notfall"
    Lokale Benutzer funktionieren auch dann, wenn externe Authentifizierungssysteme wie LDAP/AD oder [SSO](../sso-vergleich/index.md) nicht zur Verfügung stehen. So hast du bei einem Ausfall immer noch Zugriff auf die IT-Dokumentation.

## Neues Objekt (Person) erstellen

In i-doit sind Benutzer Teil der IT-Dokumentation. Jeder Benutzer ist ein [Objekt](../../grundlagen/struktur-it-dokumentation.md) vom Typ **Personen**. Erstelle zunächst ein neues **Personen**-Objekt:

1. Navigiere zum Objekttyp **Personen**.
2. Klicke auf **Neu**, um ein neues Personen-Objekt anzulegen.

[![Personen-Objekt](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/1-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/1-lba.png)

Trage als Objekt-Titel (Attribut **Bezeichnung** in Kategorie **Allgemein**) den vollständigen Namen des Benutzers ein. Dieser korrespondiert direkt mit den Attributen **Vorname** und **Nachname** der Kategorie **Personen → Stammdaten**. Wenn sich der Nachname nachträglich ändert, passt i-doit den Objekttitel automatisch an.

[![Stammdaten](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/2-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/2-lba.png)

## Kontaktdaten

Fülle in der Kategorie **Personen → Stammdaten** vor allem die Attribute **E-Mail Adresse** und **Telefon Firma** aus. Wenn du diese Person später einem anderen Objekt zuordnest (z. B. als Administrator eines Servers), werden diese Kontaktdaten dort direkt angezeigt. So erreichst du die zuständige Person schnell, ohne lange suchen zu müssen.

Die Verknüpfung zwischen Person und Server erstellst du entweder in der Kategorie **Personen → Zugewiesene Objekte** oder innerhalb des Server-Objekts in der Kategorie **Kontaktzuweisung**.

[![Kontaktdaten](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/3-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/3-lba.png)

Weitere E-Mail-Adressen können in der Kategorie **E-Mail Adressen** vergeben werden.

## Lokale Anmeldung

Damit sich der Benutzer anmelden kann, benötigt er einen Benutzernamen und ein Passwort. Beides vergibst du in der Kategorie **Personen → Login**.

[![Lokale Anmeldung](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/4-lba.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/integrierte-authentifizierung/lokalen-benutzer-anlegen/4-lba.png)

Die minimale Passwortlänge legst du pro Mandant fest unter **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → Sicherheit → Minimallänge Benutzerpasswort**. Trage dort eine positive Ganzzahl ein.

## Benutzereinstellungen

Jeder Benutzer kann i-doit individuell anpassen. Viele dieser Einstellungen befinden sich unter [**Verwaltung → Benutzereinstellungen**](../../administration/verwaltung/benutzereinstellungen/index.md).

## Anmeldedaten

Auch ohne Editier-Recht auf die Kategorie **Personen → Login** kann jeder Benutzer sein eigenes Passwort unter **Verwaltung → Benutzereinstellungen → Anmeldedaten** ändern.

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

[Rechte](../../effizientes-dokumentieren/rechteverwaltung/index.md) vergibst du in i-doit am besten pro Personengruppe statt pro einzelnem Benutzer. Ordne den Benutzer der passenden Gruppe zu, und er erbt automatisch deren Rechte. Ein Benutzer kann mehreren Gruppen angehören und erbt dann die Rechte aller zugeordneten Gruppen.
