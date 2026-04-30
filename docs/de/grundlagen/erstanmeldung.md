---
title: Erstanmeldung
description: "Die Erstanmeldung ist dein erster Schritt nach der Installation von i-doit."
icon:
status:
lang: de
---

# Erstanmeldung

Die Erstanmeldung ist dein erster Schritt nach der [Installation](../installation/manuelle-installation/index.md) von i-doit. Hier erfährst du, welche Standard-Benutzer existieren, wie du dich anmeldest und was du direkt nach dem Login beachten solltest.

## Standard-Benutzer und -Gruppen

!!! danger "Bitte ändere die Passwörter der Standard-Benutzer nach der Installation!"

i-doit liefert mehrere Standard-Benutzer mit, die jeweils einer Gruppe zugewiesen sind und damit vordefinierte [Rechte](../effizientes-dokumentieren/rechteverwaltung/index.md) besitzen:

| Benutzer      | Passwort     | Gruppe       | Rechte (oberflächlich)                     |
| ------------- | ------------ | ------------ | ------------------------------------------ |
| **admin**     | **admin**    | **Admin**    | Alle Rechte, auch für die Verwaltung       |
| **archivar**  | **archivar** | **Archivar** | Lesen und ändern                           |
| **author**    | **author**   | **Author**   | Anlegen, ändern, archivieren und ausführen |
| **editor**    | **editor**   | **Editor**   | Lesen und ändern                           |
| **reader**    | **reader**   | **Reader**   | Lesen                                      |
| **systemapi** | -            | -            | Wird für interne Funktionen verwendet      |

Alle aufgelisteten Benutzer -- mit Ausnahme von **systemapi** -- erhalten ihre Rechte durch die gleichnamigen Gruppen.

## Anmelden

Für die erste Anmeldung verwendest du am besten den Benutzer **admin**, da dieser keine funktionalen Einschränkungen hat.

[![login](../assets/images/de/grundlagen/erstanmeldung/1-erstanmeldung.png)](../assets/images/de/grundlagen/erstanmeldung/1-erstanmeldung.png)

## Weitere Benutzer und Gruppen hinzufügen

Jeder Benutzer in i-doit ist ein [Objekt](struktur-it-dokumentation.md) vom Typ **Personen**. Nach dem ersten Login solltest du dringend folgende Schritte durchführen:

1. Richte eine [LDAP-Kopplung](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) ein oder lege weitere lokale Benutzer an.
2. Ändere die Zugangsdaten der Standard-Benutzer: Navigiere dazu in der [Objekttyp-Gruppe](struktur-it-dokumentation.md) **Kontakte** zum [Objekttyp](struktur-it-dokumentation.md) **Personen**, wähle den jeweiligen Benutzer aus und passe die Kategorie **Personen → Login** an.
3. Alternativ kannst du die Standard-**Personen**-Objekte [archivieren](lebens-und-dokumentationszyklus.md) -- dadurch wird deren Login gesperrt.

!!! success "Lokaler Administrator"
    Auch wenn ein [LDAP-Verzeichnisserver oder ein Active Directory (AD)](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) zum Einsatz kommt, bietet es sich an, trotzdem einen lokalen Benutzer mit allen Rechten anzulegen. Falls nämlich der externe Dienst nicht erreichbar sein sollte, kann man sich immer noch mit dem lokalen Benutzer anmelden.

## Begrüßungstext

Du kannst Benutzern direkt auf der Login-Seite einen individuellen Text anzeigen lassen. Hinterlege diesen im [Admin-Center](../administration/admin-center.md) unter **System settings → Login → Welcome text for Login**.

[![login-begruessungstext](../assets/images/de/grundlagen/erstanmeldung/2-erstanmeldung.png)](../assets/images/de/grundlagen/erstanmeldung/2-erstanmeldung.png)
