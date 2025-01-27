---
title: Passwort zurücksetzen
description: Passwort zurücksetzen
icon:
status: new
lang: de
---

# Passwort zurücksetzen

Der Benutzer soll in der Lage sein, sein Passwort selbst zurückzusetzen, ohne dafür einen Administrator kontaktieren zu müssen. Dazu muss **SMTP** im [Admin-Center](admin-center.md) im Admin-Center konfiguriert und **Passwort zurücksetzen** in den [Einstellungen für [Mandanten-Name]](./verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md) im Mandant Aktiviert werden. Außerdem muss für den jeweiligen Benutzer eine E-Mail-Adresse im Feld **E-Mail-Adresse zum Passwort zurücksetzen** eingetragen sein.

## SMTP Konfiguration im Admin-Center

Logge dich zuerst ins Admin-Center ein. Unter **System settings** musst du den Abschnitt **SMTP** konfigurieren. Teste die Konfiguration dann über den **Check SMTP configuration**-Button.

!!! note "Wenn i-doit auf v34 aktualisiert wird, wird die SMTP Konfiguration aus dem ersten Mandanten übernommen"

## Passwort zurücksetzen aktivieren

Zuerst in den Mandant einloggen. Dort in die Verwaltung navigieren und unter [Einstellungen für [Mandanten-Name]](verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md) den Abschnitt **Passwort zurücksetzen** ausklappen. Um die Funktion zu aktivieren den Wert **Aktiviert** wählen und auf den **Speichern** Button klicken.

!!! note "Sobald ein Mandant die Funktion aktiviert hat, wird der Button **Forgot password?** auf der Login Seite dargestellt"

## E-Mail Adresse setzen

Damit eine E-Mail verschickt wird, muss das Feld **E-Mail Adresse zum Passwort zurücksetzen** in der Kategorie **Personen -> Login** gesetzt sein. Benutzer können eine **E-Mail Adresse zum Passwort zurücksetzen** selbst setzen, indem Sie in der **Verwaltung** in den **Benutzereinstellungen** auf **Passwort und Login** klicken.

!!! note "Es erfolgt eine Synchronisation der Felder **E-Mail-Adresse zum Passwort zurücksetzen** in der **Verwaltung** sowie in der Kategorie **Personen -> Login**."

!!! warning "Es sollten nur so wenig Personen wie notwendig, Rechte auf die Kategorie **Personen -> Login** besitzen."

[![Passwort und Login](../assets/images/de/administration/passwort-zuruecksetzen/Passwort-und-Login.png)](../assets/images/de/administration/passwort-zuruecksetzen/Passwort-und-Login.png)

## Logging

Es wird ein Log Eintrag erstellt, wenn für eine E-Mail Adresse diese Funktion nicht aktiviert ist. Pfad und Name: `.../i-doit/log/smtp_YYYY-MM-YY.log`.
