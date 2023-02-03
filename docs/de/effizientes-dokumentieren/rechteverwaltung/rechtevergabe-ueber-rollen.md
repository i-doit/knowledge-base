Mit der Version 1.18.2 haben wir eine neue Möglichkeit der Rechtevergabe in i-doit hinzugefügt. Es ist nun möglich Benutzern oder Gruppen Rechte auf Objekte zu geben indem man über die Kontaktzuweisung diese verknüpft. Weiterhin können die Rechte auch mit der Zuweisung von bestimmten Rollen verknüpft werden.

### Gruppe erstellen und User mit Gruppe verknüpfen

Für unser Beispiel erstelle ich eine Test Gruppe in i-doit "User Rights to Objects" und packe einen "Test User" in die Mitgliederzuweisung der Gruppe:

![](/download/attachments/127139939/image2022-7-11_11-48-49.png?version=1&modificationDate=1657534474604&api=v2)

### Rechtervergabe

Danach wechseln wir in die Rechtevergabe in der Verwaltung, wählen dort CMDB aus, wählen bei den Personengruppen die soeben erstellte Gruppe aus und gehen auf ![](/download/thumbnails/127139939/image2022-7-11_11-51-32.png?version=1&modificationDate=1657534474595&api=v2) :

![](/download/attachments/127139939/image2022-7-11_11-52-13.png?version=1&modificationDate=1657534474587&api=v2)

Da dies eine neu erstellte Gruppe ist sollten noch keine Rechte vorhanden sein. die folgenden Rechte müssen nun gesetzt werden:

#### Objekte mit zugewiesener Rolle in der Kontaktzuweisung

Hier können sie zum einen die entsprechenden Rechte setzen (Ansehen, Bearbeiten, Archivieren, Löschen, Ausführen, Administrator) und dann unter den Parametern entweder alle verfügbaren Rollen oder nur eine oder mehrere Rollen auswählen die für die Rechtevergabe herangezogen werden sollen.

#### Kategorien in Objekten mit zugewiesener Rolle in der Kontaktzuweisung

Hier können sie zum einen die entsprechenden Rechte setzen (Erstellen, Ansehen, Bearbeiten, Archivieren, Löschen, Ausführen, Administrator) und dann unter den Parametern entweder alle verfügbaren Rollen oder nur eine oder mehrere Rollen auswählen und definieren ob alle oder nur bestimmte Kategorien für die Rechtevergabe herangezogen werden sollen.

#### Beispielkonfiguration

In diesem Beispiel bekommen dann alle Benutzer die Mitglied in der Gruppe "User Rights to Objects" bei Objekten wo Sie in der Kontaktzuweisung mit der Rolle Mitarbeiter verknüpft sind Rechte auf diese Objekte:

![](/download/attachments/127139939/image2022-7-11_12-4-35.png?version=1&modificationDate=1657534474568&api=v2)