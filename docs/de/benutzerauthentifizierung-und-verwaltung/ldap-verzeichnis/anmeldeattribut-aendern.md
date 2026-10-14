---
title: LDAP-Anmeldeattribut ändern
description: "Das Verzeichnisattribut wechseln, das i-doit als Benutzername verwendet, zum Beispiel von sAMAccountName auf userPrincipalName, ohne doppelte Personen anzulegen."
icon: octicons/person-add-24
lang: de
---

!!! warning "Bitte erstelle vor jeder Änderung an einer Schnittstelle/Import ein vollständiges Backup. Falls das Ergebnis nicht zufriedenstellend ist, kann dieses dann wiederhergestellt werden"

Dieser Artikel zeigt dir, wie du das Attribut wechselst, das i-doit als **Benutzername** für Personen aus deinem Verzeichnis verwendet, zum Beispiel von `sAMAccountName` auf `userPrincipalName` im Active Directory, ohne dass am Ende jeder Benutzer doppelt vorhanden ist.

Standardmäßig erkennt i-doit eine synchronisierte Person am Benutzernamen, siehe [Identifizierung von Objekten](index.md#identifizierung-von-objekten). Der Benutzername stammt aus dem Attribut **Username** in der Konfiguration der [Directories](index.md#directories). Würdest du dieses Attribut einfach umstellen, fände der nächste `ldap-sync` keine der vorhandenen Personen unter ihrem neuen Namen und würde sie ein zweites Mal anlegen. Der Ausweg ist ein zweites Attribut, das sich nie ändert, im Active Directory die `objectGUID`, das du zuerst importierst und dann als **Eindeutige Kennung** festlegst.

## Schritt 1: objectGUID als zusätzliches Attribut importieren

Öffne **Verwaltung → Import und Schnittstellen → LDAP → Attributerweiterung**, klicke auf **Editieren**, trage `objectGUID` als **Feldtitel 1** ein und speichere. Der Name muss genau dem Attributnamen im Verzeichnis entsprechen.

[![Attributerweiterung mit objectGUID](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/anmeldeattribut-aendern/1-cla.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/anmeldeattribut-aendern/1-cla.png)

Führe die Synchronisation einmal aus, zum Beispiel über die [i-doit Console](../../automatisierung-und-integration/cli/index.md):

```shell
sudo -u www-data php console.php ldap-sync -u admin -p admin -i 1
```

Danach trägt jede synchronisierte Person den Wert in der Kategorie **Personen** im gleichnamigen Ordner, im Feld, das du gerade benannt hast.

[![objectGUID in der Kategorie Personen](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/anmeldeattribut-aendern/2-cla.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/anmeldeattribut-aendern/2-cla.png)

!!! attention "Führe diese Synchronisation vor Schritt 2 aus"
    Solange die **Eindeutige Kennung** nicht gesetzt ist, ordnet der Sync die Personen noch über ihren aktuellen Benutzernamen zu und füllt das neue Attribut. Setzt du die eindeutige Kennung zuerst, haben die Personen noch keinen Wert, über den sie gefunden werden könnten, siehe [Stolperfallen](#stolperfallen).

## Schritt 2: objectGUID als eindeutige Kennung verwenden

Öffne **Verwaltung → Import und Schnittstellen → LDAP → Server**, bearbeite deinen Servereintrag und setze im Abschnitt **LDAP Parameter für i-doit Login** die **Eindeutige Kennung** auf `objectGUID`. Die Liste bietet die Felder der Attributerweiterung an. Speichere den Eintrag.

[![Eindeutige Kennung in der LDAP-Server-Konfiguration](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/anmeldeattribut-aendern/3-cla.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/anmeldeattribut-aendern/3-cla.png)

Ab jetzt sucht `ldap-sync` jeden Benutzer zuerst über diesen Wert und erst danach über den Benutzernamen. Das LDAP-Log (`log/ldap_<Datum>.log`) zeigt das je Benutzer:

```text
ldap.DEBUG: Check if user hackerman exists with configured unique Attribute: "objectGUID"
ldap.DEBUG: User with username "hackerman" found. Syncing..
```

## Schritt 3: Attribut für den Benutzernamen ändern

Öffne **Verwaltung → Import und Schnittstellen → LDAP → Directories**, wähle **Active Directory** und ändere **Username** von `sAMAccountName` auf `userPrincipalName`. Speichere und führe die Synchronisation erneut aus.

[![Directories mit userPrincipalName als Benutzername](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/anmeldeattribut-aendern/4-cla.png)](../../assets/images/de/benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/anmeldeattribut-aendern/4-cla.png)

Da die Personen über ihre `objectGUID` gefunden werden, behält der Sync die vorhandenen Objekte und benennt nur den Login um:

```text
ldap.DEBUG: User with username "hackerman@synetics.test" found. Syncing.. Username has changed from "hackerman" to "hackerman@synetics.test". User hackerman@synetics.test has been reactivated.
```

Objekt-IDs, Rechte, Gruppenmitgliedschaften und Kontaktzuweisungen bleiben erhalten. Deine Benutzer melden sich ab jetzt mit dem neuen Namen an, in diesem Beispiel mit ihrem `userPrincipalName`.

## Stolperfallen

**Falsche Reihenfolge.** Ist die eindeutige Kennung gesetzt, während die Personen den Attributwert noch nicht haben, verweigert der Sync den Benutzer und meldet:

```text
Attention! A user with the username 'hackerman' already exists, but with a different or empty objectguid attribute value. A new user cannot be created using the same username.
 > Please review the existing user with object ID 4711 (in status normal) and consider updating the username. After making the necessary adjustments, please run the sync command again.
Failed synchronizing user: CN=hackerman,OU=Users,DC=synetics,DC=test
```

Die Person gilt dann als nicht mehr im Verzeichnis vorhanden und wird archiviert. Zur Reparatur leerst du die **Eindeutige Kennung** im Servereintrag, führst den Sync einmal aus, damit das Attribut gefüllt wird, setzt die eindeutige Kennung wieder und synchronisierst ein zweites Mal.

**Auch das neue Attribut kann sich ändern.** Der `userPrincipalName` ändert sich, wenn ein Konto umbenannt wird, zum Beispiel nach einer Heirat. Das ist unkritisch, solange die `objectGUID` die eindeutige Kennung bleibt: Der Sync folgt der Umbenennung genauso wie oben beschrieben. Nur der Benutzer muss sich mit dem neuen Namen anmelden.

**Welches Attribut für den Login?** Was das Mapping **Username** liefert, gibt der Benutzer im Anmeldeformular ein. Informiere deine Benutzer vor der Umstellung.
