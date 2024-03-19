<!-- TRANSLATED by md-translate -->
# Rechtevergabe über Rollen

# Attribution de droits via des rôles

Mit der Version 1.18.2 haben wir eine neue Möglichkeit der Rechtevergabe in i-doit hinzugefügt. Es ist nun möglich Benutzern oder Gruppen Rechte auf Objekte zu geben indem man über die Kontaktzuweisung diese verknüpft. Weiterhin können die Rechte auch mit der Zuweisung von bestimmten Rollen verknüpft werden.

Avec la version 1.18.2, nous avons ajouté une nouvelle possibilité d'attribution de droits dans i-doit. Il est désormais possible de donner aux utilisateurs ou aux groupes des droits sur des objets en les reliant via l'attribution des contacts. De plus, les droits peuvent également être liés à l'attribution de certains rôles.

### Gruppe erstellen und User mit Gruppe verknüpfen

### Créer un groupe et associer un utilisateur à un groupe

Für unser Beispiel erstelle ich eine Test Gruppe in i-doit "User Rights to Objects" und packe einen "Test User" in die Mitgliederzuweisung der Gruppe:

Pour notre exemple, je crée un groupe de test dans i-doit "User Rights to Objects" et je place un "utilisateur test" dans l'attribution des membres du groupe :

[![rechteueberrollen-testuser](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/1-rur.png)](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/1-rur.png)

[ ![rechteueberrollen-testuser](../../assets/images/fr/documentation efficace/gestion des droits/attribution de droits-au-dessus-de-rôles/1-rur.png)](../../assets/images/fr/documentation efficace/gestion des droits/attribution de droits-au-dessus-de-rôles/1-rur.png)

### Rechtervergabe

### Attribution de droits

Danach wechseln wir in die Rechtevergabe in der Verwaltung, wählen dort CMDB aus, wählen bei den Personengruppen die soeben erstellte Gruppe aus und gehen auf ![rechteueberrollen-icon](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/2-rur.png) :

Ensuite, nous passons à l'attribution des droits dans l'administration, nous y sélectionnons CMDB, nous choisissons dans les groupes de personnes le groupe que nous venons de créer et nous allons sur ![rechteueberrollen-icon](../../assets/images/fr/documentation efficace/administration des droits/attribution des droits-au-dessus-des-rôles/2-rur.png) :

[![rechteueberrollen-vergabe](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/3-rur.png)](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/3-rur.png)

[ ![attribution-des-rôles-au-dessus-de-la-droite](../../assets/images/fr/documentation-efficace/gestion-des-droits/attribution-des-rôles-au-dessus-de-la-droite/3-rur.png)](../../assets/images/fr/documentation-efficace/gestion-des-droits/attribution-des-rôles-au-dessus-de-la-droite/3-rur.png)

Da dies eine neu erstellte Gruppe ist sollten noch keine Rechte vorhanden sein. die folgenden Rechte müssen nun gesetzt werden:

Comme il s'agit d'un groupe nouvellement créé, il ne devrait pas encore y avoir de droits. Les droits suivants doivent maintenant être définis :

#### Objekte mit zugewiesener Rolle in der Kontaktzuweisung

#### Objets avec rôle attribué dans l'attribution des contacts

Hier können sie zum einen die entsprechenden Rechte setzen (Ansehen, Bearbeiten, Archivieren, Löschen, Ausführen, Administrator) und dann unter den Parametern entweder alle verfügbaren Rollen oder nur eine oder mehrere Rollen auswählen die für die Rechtevergabe herangezogen werden sollen.

Ici, vous pouvez d'une part définir les droits correspondants (voir, modifier, archiver, supprimer, exécuter, administrateur) et ensuite sélectionner parmi les paramètres soit tous les rôles disponibles, soit seulement un ou plusieurs rôles qui doivent être utilisés pour l'attribution des droits.

#### Kategorien in Objekten mit zugewiesener Rolle in der Kontaktzuweisung

#### Catégories dans les objets avec rôle attribué dans l'attribution des contacts

Hier können sie zum einen die entsprechenden Rechte setzen (Erstellen, Ansehen, Bearbeiten, Archivieren, Löschen, Ausführen, Administrator) und dann unter den Parametern entweder alle verfügbaren Rollen oder nur eine oder mehrere Rollen auswählen und definieren ob alle oder nur bestimmte Kategorien für die Rechtevergabe herangezogen werden sollen.

Ici, vous pouvez d'une part définir les droits correspondants (créer, voir, modifier, archiver, supprimer, exécuter, administrateur) et ensuite sélectionner dans les paramètres soit tous les rôles disponibles, soit seulement un ou plusieurs rôles et définir si toutes les catégories ou seulement certaines catégories doivent être prises en compte pour l'attribution des droits.

#### Beispielkonfiguration

#### Exemple de configuration

In diesem Beispiel bekommen dann alle Benutzer die Mitglied in der Gruppe "User Rights to Objects" bei Objekten wo Sie in der Kontaktzuweisung mit der Rolle Mitarbeiter verknüpft sind Rechte auf diese Objekte:

Dans cet exemple, tous les utilisateurs qui sont membres du groupe "User Rights to Objects" obtiennent des droits sur les objets pour lesquels ils sont liés au rôle de collaborateur dans l'attribution des contacts :

[![rechteueberrollen-konfigurieren](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/4-rur.png)](../../assets/images/de/effizientes-dokumentieren/rechteverwaltung/rechtevergabe-ueber-rollen/4-rur.png)

[ ![configurer-des-roues-droits](../../assets/images/fr/documentation-efficace/gestion-des-droits/attribution-des-roues-droits/4-rur.png)](../../assets/images/fr/documentation-efficace/gestion-des-roues-droits/4-rur.png)