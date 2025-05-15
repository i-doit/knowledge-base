# Rechtevergabe über Rollen

Mit der Version 1.18.2 haben wir eine neue Möglichkeit der Rechtevergabe in i-doit hinzugefügt. Es ist nun möglich Benutzern oder Gruppen Rechte auf Objekte zu geben indem man über die Kontaktzuweisung diese verknüpft. Weiterhin können die Rechte auch mit der Zuweisung von bestimmten Rollen verknüpft werden.

## Gruppe erstellen und User mit Gruppe verknüpfen

Für unser Beispiel erstelle ich eine Test Gruppe in i-doit "User Rights to Objects" und packe einen "Test User" in die Mitgliederzuweisung der Gruppe:

[![rechteueberrollen-testuser](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/1-rur.png)](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/1-rur.png)

## Rechtevergabe

Danach wechseln wir in die Rechtevergabe in der Verwaltung, wählen dort CMDB aus, wählen bei den Personengruppen die soeben erstellte Gruppe aus und gehen auf ![rechteueberrollen-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/2-rur.png) :

[![rechteueberrollen-vergabe](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/3-rur.png)](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/3-rur.png)

Da dies eine neu erstellte Gruppe ist sollten noch keine Rechte vorhanden sein. die folgenden Rechte müssen nun gesetzt werden:

### Objekte mit zugewiesener Rolle in der Kontaktzuweisung

Hier können sie zum einen die entsprechenden Rechte setzen (Ansehen, Bearbeiten, Archivieren, Löschen, Ausführen, Administrator) und dann unter den Parametern entweder alle verfügbaren Rollen oder nur eine oder mehrere Rollen auswählen die für die Rechtevergabe herangezogen werden sollen.

### Kategorien in Objekten mit zugewiesener Rolle in der Kontaktzuweisung

Hier können sie zum einen die entsprechenden Rechte setzen (Erstellen, Ansehen, Bearbeiten, Archivieren, Löschen, Ausführen, Administrator) und dann unter den Parametern entweder alle verfügbaren Rollen oder nur eine oder mehrere Rollen auswählen und definieren ob alle oder nur bestimmte Kategorien für die Rechtevergabe herangezogen werden sollen.

### Beispielkonfiguration

In diesem Beispiel bekommen dann alle Benutzer die Mitglied in der Gruppe "User Rights to Objects" bei Objekten wo Sie in der Kontaktzuweisung mit der Rolle Mitarbeiter verknüpft sind Rechte auf diese Objekte:

[![rechteueberrollen-konfigurieren](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/4-rur.png)](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/4-rur.png)
