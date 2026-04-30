---
title: Rechtevergabe über Rollen
description: Seit Version 1.18.2 kannst du Benutzern oder Gruppen Rechte auf Objekte über die Kontaktzuweisung vergeben.
icon:
status:
lang: de
---
# Rechtevergabe über Rollen

Seit Version 1.18.2 kannst du Benutzern oder Gruppen Rechte auf Objekte über die Kontaktzuweisung vergeben. Die Rechte lassen sich dabei an bestimmte Rollen knüpfen.

## Gruppe erstellen und Benutzer zuweisen

Erstelle zunächst eine Personengruppe (im Beispiel "User Rights to Objects") und fuege den gewünschten Benutzer als Mitglied hinzu:

[![rechteüberrollen-testuser](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/1-rur.png)](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/1-rur.png)

## Rechtevergabe

Wechsle in die Rechtevergabe unter **Verwaltung > Rechtesystem > Rechtevergabe > CMDB**. Wähle die soeben erstellte Gruppe aus und klicke auf ![rechteüberrollen-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/2-rur.png):

[![rechteüberrollen-vergabe](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/3-rur.png)](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/3-rur.png)

Da es sich um eine neu erstellte Gruppe handelt, sind noch keine Rechte vorhanden. Setze die folgenden Rechte:

### Objekte mit zugewiesener Rolle in der Kontaktzuweisung

Hier setzt du die gewünschten Rechte (Ansehen, Bearbeiten, Archivieren, Löschen, Ausführen, Administrator) und wählst unter den Parametern entweder alle verfügbaren Rollen oder gezielt einzelne Rollen aus.

### Kategorien in Objekten mit zugewiesener Rolle in der Kontaktzuweisung

Hier setzt du die gewünschten Rechte (Erstellen, Ansehen, Bearbeiten, Archivieren, Löschen, Ausführen, Administrator) und definierst über die Parameter, welche Rollen und welche Kategorien für die Rechtevergabe herangezogen werden.

### Beispielkonfiguration

In diesem Beispiel erhalten alle Mitglieder der Gruppe "User Rights to Objects" Rechte auf Objekte, bei denen sie in der Kontaktzuweisung mit der Rolle **Mitarbeiter** verknüpft sind:

[![rechteüberrollen-konfigurieren](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/4-rur.png)](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/4-rur.png)
