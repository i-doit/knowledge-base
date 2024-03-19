<!-- TRANSLATED by md-translate -->
# Abbildung von Kundenstandorten

# Représentation des sites des clients

Kunden haben oftmals mehrere Standorte, diese sollen hierarchisch dargestellt und jeweils IT-Komponenten zugeordnet werden.

Les clients ont souvent plusieurs sites, ceux-ci doivent être représentés de manière hiérarchique et des composants informatiques doivent être attribués à chacun d'entre eux.

## Aufgabenstellung

## Tâche à accomplir

Wir statten unsere Kunden mit Hard- und Software-Komponenten aus. Daher ist es essentiell, sowohl unsere Kunden als auch die dort verwendeten IT-Komponenten zu dokumentieren. Um eine einfache Übersicht zu generieren, möchten wir die Standortsicht von i-doit nutzen.

Nous fournissons à nos clients des composants matériels et logiciels. Il est donc essentiel de documenter aussi bien nos clients que les composants informatiques qu'ils utilisent. Afin de générer un aperçu simple, nous souhaitons utiliser la vue du site d'i-doit.

[![Standortsicht](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/1-avk.png)](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/1-avk.png)

[ ![Vue du site](../assets/images/fr/applicationfaelle/image-des-sites-clients/1-avk.png)](../assets/images/fr/applicationfaelle/image-des-sites-clients/1-avk.png)

[![Objekt](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/2-avk.png)](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/2-avk.png)

[ ![Objet](../assets/images/fr/applicationfaelle/image-des-sites-clients/2-avk.png)](../assets/images/fr/applicationfaelle/image-des-sites-clients/2-avk.png)

## Konfiguration

## Configuration

Alles, was zur Konfiguration benötigt wird, befindet sich in der **Objekttyp-Konfiguration**, zu erreichen über **Verwaltung → CMDB-Einstellungen**. Kunden legen wir als eigenständigen Objekttyp **Kunde** ab. Der Objekttyp wird als **Standort** definiert. Zudem sollten mindestens die Kategorien **Standort** und **Räumlich zugeordnete Objekte** zugeordnet werden. Ggf. sind weitere Kategorien (**Organisation**, **Anschrift**, **E-Mail-Adressen**, **Kontaktzuweisung**, **Zugriff**) hilfreich, um die Kunden so detailliert wie nötig zu dokumentieren.

Tout ce qui est nécessaire à la configuration se trouve dans la **Configuration du type d'objet**, accessible via **Administration → Paramètres CMDB**. Nous classons les clients comme type d'objet autonome **Client**. Le type d'objet est défini comme **site**. En outre, il convient d'attribuer au moins les catégories **Site** et **Objets affectés à un espace**. Le cas échéant, d'autres catégories (**organisation**, **adresse**, **adresses e-mail**, **attribution de contact**, **accès**) sont utiles pour documenter les clients de manière aussi détaillée que nécessaire.

[![Objekttyp-Konfiguration](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/3-avk.png)](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/3-avk.png)

[ ![Configuration du type d'objet](../assets/images/fr/applicationfaelle/image-des-lieux-clients/3-avk.png)](../assets/images/fr/applicationfaelle/image-des-lieux-clients/3-avk.png)

[![Objektsicht](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/4-avk.png)](../assets/images/de/anwendungsfaelle/abbildung-von-kundenstandorten/4-avk.png)

[ ![Vue de l'objet](../assets/images/fr/applicationfaelle/image-des-emplacements-clients/4-avk.png)](../assets/images/fr/applicationfaelle/image-des-emplacements-clients/4-avk.png)

## Anwendung

## Application

Beim Anlegen eines neuen Kunden sollte dieser der [Root-Lokation](../glossar.md#root-lokation) zu geordnet werden. Auch verschachtelte Konstrukte mit Sub-Kunden ist möglich. Hierfür werden Sub-Kunden anderen Kunden räumlich zugeordnet. Unterhalb der Kunden können nun beliebig viele Objekte zugeordnet werden. Dies geschieht über die Kategorie "Räumlich zugeordnete Objekte" oder alternativ über die Kategorie "Standort" innerhalb der Objekte, die zugeordnet werden sollen.

Lors de la création d'un nouveau client, celui-ci doit être attribué à [Root-Location](../glossar.md#root-lokation). Il est également possible de créer des constructions imbriquées avec des sous-clients. Pour cela, les sous-clients sont attribués à d'autres clients dans l'espace. En dessous des clients, il est possible d'attribuer autant d'objets que souhaité. Cela se fait via la catégorie "Objets attribués spatialement" ou via la catégorie "Emplacement" au sein des objets qui doivent être attribués.