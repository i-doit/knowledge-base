# Journal de bord {/ * exemples *}

Dans la vue du journal de bord, vous pouvez filtrer les entrées selon plusieurs paramètres. Si possible, une entrée contient les changements exacts. (Quelles valeurs ont été modifiées et comment ?) → [EN SAVOIR PLUS](../../basics/logbook.md)

| Option                 | Valeur                                                                                     |
| ---------------------- | ------------------------------------------------------------------------------------------ |
| Statut                 | Normal<br>Archive                                                                          |
| De                     | Date et/ou heure                                                                            |
| Source                 | -<br>Tous !<br>Externe<br>Importation<br>Interne<br>Importation JDisc<br>Entrées manuelles<br>Ticket RT |
| Niveau d'alarme         | 0 (information)<br>1 (faible)<br>2 (moyen)<br>3 (élevé)                                    |
| Utilisateur             | Navigateur d'objets                                                                        |
| À                      | Date et/ou heure                                                                            |
| Type                   | Objets<br>Système                                                                          |
| Afficher uniquement les modifications CMDB | Case à cocher                                                                           |

[![Vue du journal de bord](../../assets/images/en/system-administration/administration/logbook/1-l.png)](../../assets/images/en/system-administration/administration/logbook/1-l.png)

## Configuration du journal de bord {/ * exemples *}

Dans la configuration du journal de bord, vous pouvez définir combien de changements peuvent être combinés au maximum dans une entrée de journal, si l'utilisateur doit être affiché uniquement avec son ID ou de manière étendue et si oui, à quoi cela devrait ressembler. De plus, vous pouvez déterminer le nombre de changements combinés par entrée de journal lors d'une procédure d'importation.

| Option                               | Valeur                                     |
| ------------------------------------ | ----------------------------------------- |
| Identification de l'utilisateur       | Standard<br>Étendue                       |
| Créer des entrées de journal pour les relations | Seulement l'objet initiateur<br>Sur les deux objets |

### Import {/examples}

| Option                                                     | Valeur |
| ---------------------------------------------------------- | ----- |
| Montant maximum de modifications détaillées combinées (par catégorie) | Valeur |

## Archive {/examples}

Indiquez pendant combien de temps les entrées du journal de bord doivent être conservées avant d'être archivées.

| Option             | Valeur                             |
| ------------------ | --------------------------------- |
| Entrées plus anciennes que | Valeur en jours                     |
| Destination        | base de données locale<br>base de données distante |

Pour archiver le journal de bord, la commande CLI [logbook-archive](../../automation-and-integration/cli/console/options-and-parameters-cli.md#logbook-archive) doit être exécutée.

## Restaurer {/examples}

Avec cette fonction, vous pouvez restaurer les entrées qui ont déjà été archivées.

| Option             | Valeur                             |
| ------------------ | --------------------------------- |
| Entrées plus anciennes que | Valeur en jours                     |
| Source             | base de données locale<br>base de données distante |
