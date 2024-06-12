# Identification d'objet lors des imports

i-doit propose divers imports de données. Les données existantes dans la [documentation informatique](../glossary.md) peuvent être mises à jour avec des imports au lieu de générer (souvent) une redondance inutile. Afin d'atteindre cet objectif, i-doit tente d'identifier les [objets](../basics/structure-of-the-it-documentation.md) existants au moyen de divers [attributs](../basics/structure-of-the-it-documentation.md).

## Imports de données concernés

Les imports de données suivants sont pris en compte dans cet article :

*   [Import de fichier CSV](./csv-data-import/index.md)
*   [Découverte JDisc](jdisc-discovery.md)
*   [h-inventory](h-inventory.md)

D'autres imports de données peuvent avoir une autre manière de procéder.

## Approche

L'identification des objets se fait en deux étapes :

1. Les attributs non équivoques des sources de données respectives ont la priorité absolue :

    Import de données CSV : _non applicable_<br>
    JDisc : ID de l'appareil<br>
    OCS Inventory NG : _non applicable_<br>
    h-inventory : Numéro de série<br>

    Avec le premier import de données, ces attributs sont enregistrés et peuvent ensuite être utilisés comme caractéristique d'identification pour les imports de données suivants. Si ces attributs ne sont pas disponibles, l'étape 2 est suivie.

2. Une soi-disant correspondance d'objets (voir ci-dessous) est effectuée au moyen de profils.

## Création de profils

Certains attributs sont adaptés pour référencer des objets [de manière univoque](../basics/unique-references.md). Vous pouvez utiliser cette caractéristique concernant l'importation de données d'applications tierces avec une similaire univocité. Pour être prêt pour divers cas d'importation, vous pouvez créer des profils de correspondance d'objets dans i-doit qui doivent être observés lors de l'importation. La configuration centrale se trouve sous **Administration → Interfaces / données externes → Importation → Profils de correspondance d'objets**. Vous pouvez créer un nombre illimité de profils.

[![objidi-create-profiles](../assets/images/en/consolidate-data/object-identification-during-imports/1-oidi.png)](../assets/images/en/consolidate-data/object-identification-during-imports/1-oidi.png)

L'installation par défaut d'i-doit contient déjà un profil nommé **Par défaut** qui ne doit pas être modifié ou supprimé. Avec le bouton **Nouveau**, vous pouvez créer un nouveau profil, avec **Modifier** vous pouvez modifier un profil tandis que **Purger** supprime un profil de manière irrévocable. 



Plusieurs détails sont requis par profil :

*   **Nom** : une description significative du profil
*   **Correspondances** : Divers attributs et autres champs peuvent être sélectionnés. À l'aide de ces attributs et champs, les objets déjà documentés sont recherchés et comparés aux données à importer. L'ordre est sans importance et ne peut être modifié.
*   **Correspondance minimale** : Pendant le processus de correspondance des données et des objets à importer dans i-doit, une vérification est effectuée pour déterminer combien d'attributs d'un objet doivent correspondre. Le nombre sélectionnable suit le nombre d'attributs sous **Correspondances**.
*   **Filtre pour les nouveaux objets (JDISC)** :<br>**L'option de filtre pour les nouveaux objets n'affecte que les NOUVEAUX objets lors de l'importation de JDiscs**. Exclure les objets de l'importation qui n'ont pas d'attributs configurés. Les attributs possibles sont le nom d'hôte, le numéro de série, le titre de l'objet, l'adresse MAC et IP.
*   **Correspondance minimale de filtre (JDISC)** :<br>Nombre minimal d'attributs manquants à ignorer pour les objets d'importation **NOUVEAUX**.

[![objidi-requirements](../assets/images/en/consolidate-data/object-identification-during-imports/2-oidi.png)](../assets/images/en/consolidate-data/object-identification-during-imports/2-oidi.png)

## Identifiants Possibles

| Identifiant              | Commentaires                                                                                                                                                                                                                                   | JDisc | Importation de données CSV | OCS Inventory NG | h-inventory |
| ------------------------ | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----- | -------------------------- | ---------------- | ----------- |
| **Adresse IP**           | Importation d'un appareil compatible réseau ; voir la catégorie **Adresse hôte**                                                                                                                                                                | oui   | oui                        | non              | non         |
| **Nom d'utilisateur**    | Importation d'une personne ; voir la catégorie pour **Personnes → Connexion**, attribut **Nom d'utilisateur**                                                                                                                                   | non   | oui                        | non              | non         |
| **SYSID de l'objet**     | Voir la catégorie **Général**, attribut **SYS-ID**                                                                                                                                                                                              | non   | oui                        | non              | non         |
| **Numéro IMEI**          | Voir la catégorie **Ratio mobile**, attribut **IMEI**                                                                                                                                                                                           | non   | oui                        | non              | non         |
| **Numéro de série**      | Voir la catégorie **Modèle**                                                                                                                                                                                                                   | oui   | oui                        | oui              | oui         |
| **Tag de service**       | Voir la catégorie **Modèle**                                                                                                                                                                                                                   | non   | oui                        | non              | non         |
| **Numéro d'inventaire**  | Voir la catégorie **Comptabilité**, attribut **Numéro d'inventaire**                                                                                                                                                                            | non   | oui                        | non              | non         |
| **Emplacement**          | Voir la catégorie **Emplacement**                                                                                                                                                                                                              | non   | oui                        | non              | non         |
| **Constante de type d'objet** | Le type d'objet doit correspondre ; voir [types d'objets personnalisés](../basics/custom-object-types.md)                                                                                                                                      | non   | oui                        | oui              | non         |
| **Titre de l'objet**     | Voir la catégorie **Général**, attribut **Description**                                                                                                                                                                                         | oui   | oui                        | oui              | oui         |
| **ID de l'objet**        | Voir la catégorie **Général**, attribut **ID de l'objet**                                                                                                                                                                                        | non   | oui                        | non              | non         |
| **Nom d'hôte**           | Importation d'un appareil compatible réseau ; voir la catégorie pour **Adresse hôte**                                                                                                                                                           | oui   | oui                        | oui              | oui         |
| **Adresse e-mail**       | Voir la catégorie pour **Adresse e-mail**                                                                                                                                                                                                      | non   | oui                        | non              | non         |
| **Numéro de salle**      | Importation de salle ; voir la catégorie **Salle**                                                                                                                                                                                              | non   | oui                        | non              | non         |
| **Alias d'hôte**         | Importation d'un appareil compatible réseau ; voir la catégorie pour **Adresse hôte**                                                                                                                                                           | oui   | oui                        | oui              | oui         |
| **FQDN**                 | Importation d'un appareil compatible réseau ; voir la catégorie pour **Adresse hôte**                                                                                                                                                           | oui   | oui                        | oui              | oui         |
| **MAC**                  | Importation d'un appareil compatible réseau ; voir la catégorie **Réseau → Port**, attribut **Adresse MAC**                                                                                                                                     | oui   | oui                        | oui              | oui         |
| **LDAP DN**              | Lorsque les personnes sont synchronisées via [LDAP/AD](../user-authentication-and-management/ldap-directory/index.md), i-doit enregistre le DN correspondant en arrière-plan. Vous ne pouvez pas voir cet attribut dans i-doit, mais vous pouvez l'utiliser comme identification | non   | oui                        | non              | non         |


