<!-- TRANSLATED by md-translate -->
# Vorbereitung (Add-on Dokumente)

# Préparation (documents complémentaires)

# Installation/Update

# Installation/mise à jour

Das aktuelle Installationspaket für das Add-on steht im i-doit Kundenportal unter [https://portal.i-doit.com/](https://portal.i-doit.com/) nach dem Erwerb einer gültigen Lizenz zur Verfügung und kann dort heruntergeladen werden. Die Installation selbst erfolgt im i-doit [Admin-Center](../../administration/admin-center.md) im Reiter "Add-ons". Hier wird das Paket vom lokalen System über die Schaltfläche "Durchsuchen" ausgewählt. Nachdem festgelegt wurde, für welche(n) [Mandant(en)](../../administration/mandantenfaehigkeit.md) das Add-on verfügbar gemacht werden soll, kann die Installation über die Schaltfläche "Upload and install" fertiggestellt werden.

Le paquet d'installation actuel pour l'add-on est disponible et peut être téléchargé dans le portail client i-doit sous [https://portal.i-doit.com/](https://portal.i-doit.com/) après l'achat d'une licence valide. L'installation elle-même se fait dans i-doit [Admin-Center](../../administration/admin-center.md) sous l'onglet "Add-ons". Ici, le paquet est sélectionné à partir du système local via le bouton "Parcourir". Après avoir défini pour quel(s) [mandant(s)](../../administration/mandantenfaehigkeit.md) l'add-on doit être mis à disposition, l'installation peut être achevée en cliquant sur le bouton "Upload and install".

Nach der Veröffentlichung einer neuen Version kann im Admin-Center auf demselben Weg das aktualisierte Paket, welches ebenfalls im i-doit Kundenportal verfügbar sein wird, hochgeladen und installiert werden.

Après la publication d'une nouvelle version, le paquet mis à jour, qui sera également disponible sur le portail client i-doit, peut être téléchargé et installé de la même manière dans le centre d'administration.

# Rechtevergabe

# Attribution de droits

Damit ein Benutzer in der Lage ist, Vorlagen zu erstellen und Dokumente zu erzeugen, ist es nötig, entsprechende [Rechte](../../effizientes-dokumentieren/rechteverwaltung/index.md) zu vergeben. Dies ist in der i-doit Verwaltung unter Rechtesystem > Rechtevergabe > Dokumente möglich, wenn das Add-on installiert ist.

Pour qu'un utilisateur soit en mesure de créer des modèles et de générer des documents, il est nécessaire d'attribuer les [droits](../../documentation efficace/gestion des droits/index.md) correspondants. Cela est possible dans l'administration i-doit sous Système de droits > Attribution de droits > Documents, si le module complémentaire est installé.

[![Rechtevergabe](../../assets/images/de/i-doit-pro-add-ons/documents/vorbereitung/1-vor.png)](../../assets/images/de/i-doit-pro-add-ons/documents/vorbereitung/1-vor.png)

[ ![Attribution de droits](../../assets/images/fr/i-doit-pro-add-ons/documents/préparation/1-avant.png)](../../assets/images/fr/i-doit-pro-add-ons/documents/préparation/1-avant.png)

Hier stehen folgende Berechtigungen zur Verfügung:

Les autorisations suivantes sont disponibles ici :

* **Dokument**

**Document**

Mit der Bedingung "Dokument" kann der Zugriff auf einzelne oder mehrere Dokumente ermöglicht werden. Benutzer mit dieser Berechtigung können die ausgewählten Dokumente bearbeiten.

La condition "Document" permet d'autoriser l'accès à un ou plusieurs documents. Les utilisateurs disposant de cette autorisation peuvent modifier les documents sélectionnés.

* **Dokumente in Kategorien**

**Documents en catégories**

Über "Dokumente in Kategorien" kann der Zugriff auf Dokumente auf Basis der Dokumentkategorien erteilt werden.

Via "Documents en catégories", l'accès aux documents peut être accordé sur la base des catégories de documents.

* **Vorlagen**

**Modèles**

Die Berechtigung "Vorlage" vergibt die Erlaubnis, Dokumentenvorlagen bearbeiten zu können.

L'autorisation "Modèle" donne la permission d'éditer des modèles de documents.

* **Vorlagen in Kategorien**

**Modèles en catégories**

Der Zugriff auf die Vorlagen kann mit "Vorlagen in Kategorien" auf Vorlagen aus definierten Kategorien ermöglicht werden.

L'accès aux modèles peut être rendu possible avec "Modèles dans les catégories" sur les modèles de catégories définies.

* **Online Repository**

**Référentiel en ligne**

Um Vorlagen aus dem Online Repository herunterladen zu können wird die Berechtigung "Online Repository" benötigt.

Pour pouvoir télécharger des modèles du Online Repository, l'autorisation "Online Repository" est nécessaire.

Cache für das Rechtesystem leeren

Vider le cache pour le système de droits

Nachdem die Rechte vergeben wurden ist es ratsam, in der i-doit [Verwaltung](../../administration/verwaltung/index.md) unter **Verwaltung → [Mandanten-Name] Verwaltung → Systemreparatur und Berechtigung** den [Cache](../../administration/verwaltung/mandanten-name-verwaltung/systemreparatur-und-bereinigung.md) zu leeren, damit die Änderungen vom System übernommen werden.

Une fois les droits attribués, il est conseillé de vider le [Cache](../../administration/administration/index.md) dans l'i-doit [Administration](../../administration/administration-nom-de-client/réparation-et-nettoyage-du-système.md) sous **Administration → [Nom-de-client] Administration → Réparation du système et autorisation**, afin que les modifications soient prises en compte par le système.

# Zusätzliche Konfiguration

# Configuration supplémentaire

Mit dem Add-on wird zusätzlich die [Kategorie](../../grundlagen/struktur-it-dokumentation.md) "Dokumente" für alle [Objekttypen](../../grundlagen/struktur-it-dokumentation.md) verfügbar. Die Kategorie kann über die [Objekttyp-Konfiguration](../../grundlagen/benutzerdefinierte-objekttypen.md) und über [Datenstruktur bearbeiten](../../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) mit den gewünschten Objekttypen verknüpft werden. Auf diesem Weg tauchen nur jene Objekttypen bei der Objekterstellung auf, die vom Anwender vorgegeben sind um die Auswahlliste übersichtlich zu halten.

Avec le module complémentaire, la [catégorie](../../bases/structure-it-documentation.md) "Documents" est en outre disponible pour tous les [types d'objets](../../bases/structure-it-documentation.md). La catégorie peut être liée aux types d'objets souhaités via la [Configuration des types d'objets](../../bases/types d'objets définis par l'utilisateur.md) et via [Editer la structure de données](../../administration/gestion/structure de données/éditer la structure de données.md). De cette manière, seuls les types d'objets prédéfinis par l'utilisateur apparaissent lors de la création d'objets afin que la liste de sélection reste claire.

Kategorie Dokumente

Catégorie Documents

Damit ein Dokument für ein Objekt erstellt werden kann ist es notwendig, dass die Kategorie "Dokumente" mit dem Objekttyp verknüpft ist. Wenn der Objekttyp nicht über diese Kategorie verfügt, können keine Dokumente für die darin enthaltenen Objekte erstellt werden, da sie nicht in der Auswahl auftauchen.

Pour qu'un document puisse être créé pour un objet, il est nécessaire que la catégorie "Documents" soit liée au type d'objet. Si le type d'objet ne dispose pas de cette catégorie, il n'est pas possible de créer des documents pour les objets qu'il contient, car ils n'apparaissent pas dans la sélection.

# Aufruf des Add-ons

# Appel de l'add-on

Nachdem alle Vorbereitungen abgeschlossen sind ist der Zugriff auf das Add-on ist über Extras > Dokumente möglich.

Une fois que tous les préparatifs sont terminés, l'accès au module complémentaire est possible via Outils > Documents.

[![Aufruf des Add-ons](../../assets/images/de/i-doit-pro-add-ons/documents/vorbereitung/2-vor.png)](../../assets/images/de/i-doit-pro-add-ons/documents/vorbereitung/2-vor.png)

[ ![Appel du module complémentaire](../../assets/images/fr/i-doit-pro-add-ons/documents/préparation/2-avant.png)](../../assets/images/fr/i-doit-pro-add-ons/documents/préparation/2-avant.png)

Die Ansicht des Menüs "Extras" kann sich Aufgrund unterschiedlicher Rechte und/oder weiterer installierter Add-ons unterscheiden.

L'affichage du menu "Outils" peut varier en fonction des droits et/ou des autres modules complémentaires installés.