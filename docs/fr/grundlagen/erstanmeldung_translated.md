<!-- TRANSLATED by md-translate -->
# Erstanmeldung

# Première inscription

i-doit ist [installiert](../installation/manuelle-installation/index.md) und der erste Login steht an? Nichts leichter als das. Dennoch gibt es einige Dinge zu bedenken, weswegen sich das Lesen dieses Artikels lohnt.

i-doit est [installé](../installation/manuelle-installation/index.md) et la première connexion est imminente ? Rien de plus facile. Cependant, il y a quelques éléments à prendre en compte, c'est pourquoi cet article vaut la peine d'être lu.

## Standard-Benutzer und -Gruppen

## Utilisateurs et groupes par défaut

!!! danger "Bitte ändern Sie die Passwörter nach der Installation!"

! !! danger "Veuillez changer les mots de passe après l'installation !"

Für die Anmeldung gibt es einige Standard-Benutzer, die Standard-Gruppen zugewiesen sind und somit vordefinierte [Rechte](../effizientes-dokumentieren/rechteverwaltung/index.md) besitzen:

Pour la connexion, il y a quelques utilisateurs standard qui sont attribués à des groupes standard et qui ont donc des [droits] prédéfinis(../documenter-efficacement/gestion-des-droits/index.md) :

| Benutzer | Passwort | Gruppe | Rechte (oberflächlich) |
| --- | --- | --- | --- |
| **admin** | **admin** | **Admin** | Alle Rechte, auch für die Verwaltung |
| **archivar** | **archivar** | **Archivar** | Lesen und ändern |
| **author** | **author** | **Author** | Anlegen, ändern, archivieren und ausführen |
| **editor** | **editor** | **Editor** | Lesen und ändern |
| **reader** | **reader** | **Reader** | Lesen |

| utilisateur | mot de passe | groupe | droits (superficiels) |
| --- | --- | --- | --- |
| **admin** | **admin** | **Admin** | Tous les droits, aussi pour l'administration |
| **archivier** | **archivier** | **archivier** | Lire et modifier |
| **author** | **author** | **Author** | Créer, modifier, archiver et exécuter |
| **editor** | **editor** | **Editor** | lire et modifier |
| **reader** | **reader** | **Reader** | lire |

Die aufgelisteten Benutzer erhalten ihre Rechte durch die gleichnamigen Gruppen.

Les utilisateurs listés reçoivent leurs droits par le biais des groupes du même nom.

## Anmelden

## S'inscrire

Aus den oben genannten Standard-Benutzern wählt man bestenfalls den Benutzer **admin** aus, der in der Funktionsweise nicht eingeschränkt ist.

Parmi les utilisateurs standard mentionnés ci-dessus, on choisit au mieux l'utilisateur **admin**, dont le fonctionnement n'est pas limité.

[![login](../assets/images/de/grundlagen/erstanmeldung/1-erstanmeldung.png)](../assets/images/de/grundlagen/erstanmeldung/1-erstanmeldung.png)

[ ![login](../assets/images/fr/bases/inscription initiale/1-inscription initiale.png)](../assets/images/fr/bases/inscription initiale/1-inscription initiale.png)

## Weitere Benutzer und Gruppen hinzufügen

## Ajouter d'autres utilisateurs et groupes

Jeder Benutzer in i-doit ist ein [Objekt](struktur-it-dokumentation.md) vom Typ **Personen**. Es ist _dringend zu empfehlen_ nach dem ersten Login eine [LDAP-Kopplung](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) oder weitere lokale Benutzer einzurichten _und_ den Login der oben genannten Benutzer zu ändern. Hierfür werden in der [Objekttypgruppe](struktur-it-dokumentation.md) **Kontakte** unter dem [Objekttyp](struktur-it-dokumentation.md) **Personen** der jeweilige Benutzer ausgewählt und in der Kategorie **Personen → Login** die Zugangsdaten geändert. Alternativ können die **Personen**-Objekte [archiviert](lebens-und-dokumentationszyklus.md) werden. Dadurch wird der Login dieser Benutzer verweigert.

Chaque utilisateur dans i-doit est un [objet](structure-it-documentation.md) de type **personnes**. Il est _fortement recommandé_ de créer un [couplage LDAP](../authentification et gestion des utilisateurs/ldap-verzeichnis/index.md) ou d'autres utilisateurs locaux après le premier login _et_ de modifier le login des utilisateurs susmentionnés. Pour cela, dans le [groupe de types d'objets](struct-it-documentation.md) **contacts** sous le [type d'objet](struct-it-documentation.md) **personnes**, l'utilisateur concerné est sélectionné et les données d'accès sont modifiées dans la catégorie **personnes → login**. Alternativement, les objets **Personnes** peuvent être [archivés](cycle de vie et documentation.md). Ainsi, la connexion de ces utilisateurs est refusée.

!!! success "Lokaler Administrator"
    Auch wenn ein [LDAP-Verzeichnisserver oder ein Active Directory (AD)](../benutzerauthentifizierung-und-verwaltung/ldap-verzeichnis/index.md) zum Einsatz kommt, bietet es sich an, trotzdem einen lokalen Benutzer mit allen Rechten anzulegen. Falls nämlich der externe Dienst nicht erreichbar sein sollte, kann man sich immer noch mit dem lokalen Benutzer anmelden.

! !! success "Administrateur local"
    Même si un [serveur d'annuaire LDAP ou un Active Directory (AD)](../authentification-et-administration-des-utilisateurs/index.md) est utilisé, il est conseillé de créer quand même un utilisateur local avec tous les droits. En effet, si le service externe n'est pas accessible, il est toujours possible de se connecter avec l'utilisateur local.

## Begrüßungstext

## Texte d'accueil

Wer Benutzer direkt beim Login mit einem Text begrüßen möchte, kann dies tun. Der Text wird im [Admin Center](../administration/admin-center.md) unter **System settings → Login → Welcome text for Login** hinterlegt.

Les personnes qui souhaitent accueillir les utilisateurs directement à la connexion avec un texte peuvent le faire. Le texte est déposé dans [Admin Center](../administration/admin-center.md) sous **System settings → Login → Welcome text for Login**.

[![login-begruessungstext](../assets/images/de/grundlagen/erstanmeldung/2-erstanmeldung.png)](../assets/images/de/grundlagen/erstanmeldung/2-erstanmeldung.png)

[ ![login-begruessungstext](../assets/images/fr/grundlagen/erstanmeldung/2-erstanmeldung.png)](../assets/images/fr/grundlagen/erstanmeldung/2-erstanmeldung.png)