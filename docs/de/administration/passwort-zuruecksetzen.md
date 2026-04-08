---
title: Passwort zurücksetzen
description: "Mit dieser Funktion können Benutzer ihr Passwort selbstständig zurücksetzen, ohne einen Administrator kontaktieren zu müssen."
icon:
status:
lang: de
---

# Passwort zurücksetzen

Mit dieser Funktion können Benutzer ihr Passwort selbstständig zurücksetzen, ohne einen Administrator kontaktieren zu müssen.

Damit das funktioniert, müssen drei Voraussetzungen erfüllt sein:

1. **SMTP** ist im [Admin-Center](admin-center.md) konfiguriert
2. **Passwort zurücksetzen** ist in den [Einstellungen für [Mandanten-Name]](./verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md) aktiviert
3. Für den Benutzer ist eine **E-Mail-Adresse zum Passwort zurücksetzen** eingetragen

## SMTP Konfiguration im Admin-Center

1. Logge dich ins Admin-Center ein
2. Konfiguriere unter **System settings** den Abschnitt **SMTP**
3. Teste die Konfiguration über den **Check SMTP configuration**-Button

!!! note "Wenn du i-doit auf v34 aktualisierst, wird die SMTP-Konfiguration aus dem ersten Mandanten übernommen."

## Passwort zurücksetzen aktivieren

1. Logge dich in den Mandanten ein
2. Navigiere zu **Verwaltung** und öffne die [Einstellungen für [Mandanten-Name]](verwaltung/mandanten-name-verwaltung/einstellungen-mandanten-name.md)
3. Klappe den Abschnitt **Passwort zurücksetzen** auf
4. Wähle den Wert **Aktiviert** und klicke auf **Speichern**

!!! note "Sobald ein Mandant die Funktion aktiviert hat, erscheint der Button **Forgot password?** auf der Login-Seite."

## E-Mail-Adresse setzen

Damit i-doit die Reset-Mail versenden kann, muss das Feld **E-Mail-Adresse zum Passwort zurücksetzen** in der Kategorie **Personen -> Login** gesetzt sein.

Benutzer können diese Adresse selbst eintragen: **Verwaltung -> Benutzereinstellungen -> Passwort und Login**.

!!! note "Die Felder **E-Mail-Adresse zum Passwort zurücksetzen** in der Verwaltung und in der Kategorie **Personen -> Login** werden synchronisiert."

!!! warning "Vergib Rechte auf die Kategorie **Personen -> Login** nur an so wenige Personen wie nötig."

[![Passwort und Login](../assets/images/de/administration/passwort-zuruecksetzen/Passwort-und-Login.png)](../assets/images/de/administration/passwort-zuruecksetzen/Passwort-und-Login.png)

## Logging

Es wird ein Log Eintrag erstellt, wenn für eine E-Mail Adresse diese Funktion nicht aktiviert ist. Pfad und Name: `.../i-doit/log/smtp_YYYY-MM-YY.log`.
