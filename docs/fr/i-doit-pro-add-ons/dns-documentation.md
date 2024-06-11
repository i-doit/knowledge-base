# Documentation DNS

L'**add-on** "Documentation DNS" a été conçu et créé comme le premier **add-on** avec le [Packageur d'Add-ons](./add-on-packager.md). L'idée derrière la Documentation DNS est de documenter facilement les entrées DNS dans i-doit. L'**add-on** crée les types d'objets et les catégories nécessaires.

Installation et licence
---------------------------

L'**add-on** "Documentation DNS" est installé comme tout autre **add-on** via le [Centre d'Administration](../system-administration/admin-center.md). L'**add-on** ne nécessite pas de licence. Cependant, il ne peut être utilisé qu'avec la variante pro.

Contenu de l'add-on

L'**add-on** "Documentation DNS" apporte les types d'objets, les catégories et les entrées Dialog+ suivants :

| Type d'objet | Catégorie | Champ Dialog+ | Entrée Dialog+ |
| --- | --- | --- | --- |
| Serveur DNS | Zones DNS | \-  | \-  |
| Zone DNS | Serveurs d'Authorité | Rôle | Primaire |
|     |     |     | Secondaire |
|     | Enregistrements DNS | Classe | IN (Internet) |
|     |     |     | CH (Chaosnet) |
|     |     |     | HS (Hesoid) |
|     | Type | A   |
|     |     |     | AAAA |
|     |     |     | NS  |
|     |     |     | CNAME |
|     |     |     | MX  |
|     |     |     | PTR |
|     |     |     | TXT |
|     |     |     | SRV |
|     |     |     | SOA |
|     | Enregistrement SOA | Classe | IN (Internet) |
|     |     |     | CH (Chaosnet) |
|     |     |     | HS (Hesoid) |

Serveur DNS
----------

Le type d'objet livré "Serveur DNS" est basé sur un objet serveur normal, avec la catégorie supplémentaire "Zones DNS" assignée.  
Dans le module complémentaire, un type d'objet explicite est utilisé afin qu'une intégration fluide puisse être assurée. La catégorie automatiquement assignée "Zones DNS" contient un aperçu de toutes les zones DNS assignées. (Il s'agit d'une catégorie en lecture seule, c'est pourquoi les informations ne peuvent pas être modifiées ici).

[![Serveur DNS](../assets/images/en/i-doit-pro-add-ons/dns-documentation/1-dns.png)](../assets/images/en/i-doit-pro-add-ons/dns-documentation/1-dns.png)

Zone DNS
--------

Dans le nouveau type d'objet "Zone DNS", toutes les informations sur les entrées de la zone sont documentées.  
Trois catégories supplémentaires sont disponibles ici :

*   Serveurs de noms autoritaires → les serveurs de noms associés sont saisis ici et peuvent être distingués entre "Primaire" et "Secondaire".
*   Enregistrements DNS → les "lignes individuelles" d'un fichier de zone peuvent être saisies ici. Celles-ci peuvent être créées de manière appropriée via les "Types" fournis.
*   Enregistrement SOA → ici, l'enregistrement SOA peut être explicitement documenté.

### Autorisation des serveurs de noms

La catégorie "Serveurs de noms autoritaires" est une catégorie à valeurs multiples.

[![Autorisation des serveurs de noms](../assets/images/en/i-doit-pro-add-ons/dns-documentation/2-dns.png)](../assets/images/en/i-doit-pro-add-ons/dns-documentation/2-dns.png)

Deux informations sont documentées dans une seule entrée :

*   Objet Serveur DNS
*   Rôle

[![Objet Serveur DNS](../assets/images/en/i-doit-pro-add-ons/dns-documentation/3-dns.png)](../assets/images/en/i-doit-pro-add-ons/dns-documentation/3-dns.png)

Un navigateur d'objets est disponible pour l'attribut "objet serveur DNS". Le serveur DNS correspondant peut alors être sélectionné ici. De plus, le "rôle" correspondant peut également être spécifié pour chaque serveur. Disponibles ici → Primaire et Secondaire

Enregistrements DNS
-----------

La catégorie "Enregistrements DNS" est également une catégorie à valeurs multiples.

[![Enregistrements DNS](../assets/images/en/i-doit-pro-add-ons/dns-documentation/4-dns.png)](../assets/images/en/i-doit-pro-add-ons/dns-documentation/4-dns.png)

La catégorie a été conçue comme une catégorie à valeurs multiples afin qu'un fichier DNS puisse être documenté "ligne par ligne". Cela permet d'avoir un aperçu de toutes les entrées.

[![Enregistrements DNS](../assets/images/en/i-doit-pro-add-ons/dns-documentation/5-dns.png)](../assets/images/en/i-doit-pro-add-ons/dns-documentation/5-dns.png)

Une entrée se compose des champs de texte "Nom", "Durée de vie", "Données" et des champs de dialogue+ "Classe" et "Type". Des entrées prédéfinies sont fournies pour les champs de dialogue+ "Classe" et "Type".

Enregistrements SOA
-------------------

En plus des enregistrements DNS simples, il y a la catégorie "Enregistrements SOA". Cette catégorie permet de documenter plus en détail le soi-disant "Start of Authority". Comme l'enregistrement SOA est unique, la catégorie n'est pas non plus disponible en tant que catégorie à valeurs multiples.

[![Enregistrements SOA](../assets/images/en/i-doit-pro-add-ons/dns-documentation/6-dns.png)](../assets/images/en/i-doit-pro-add-ons/dns-documentation/6-dns.png)

À l'exception du champ de dialogue+ "Classe", tous les champs sont disponibles en tant que champs de texte. Toutes les informations nécessaires de l'enregistrement SOA peuvent être documentées ici.
