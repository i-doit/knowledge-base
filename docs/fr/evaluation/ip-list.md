# Liste des adresses IP
Encore et encore, il y a une question centrale pour l'administrateur : Quelles adresses IP sont attribuées à quel hôte et quelles adresses peuvent encore être attribuées ? Les listes d'adresses IP dans i-doit peuvent être d'une grande aide pour répondre à cette question.

Une approche plus détaillée de cette question est fournie dans le cas d'application pour la [Gestion des adresses IP (IPAM)](../use-cases/ip-adress-management.md).

Catégorie de la liste IP
----------------

La **liste IP** [catégorie](../basics/structure-of-the-it-documentation.md) fournit un aperçu complet de chaque réseau. Dans l'installation par défaut de i-doit, elle est attribuée au [type d'objet](../basics/structure-of-the-it-documentation.md) Réseau de niveau 3. Vous pouvez trouver tous les [objets](../basics/structure-of-the-it-documentation.md) qui sont attribués à ce réseau, y compris leur adresse IP, leur nom d'hôte et le type d'attribution d'adresse, dans une liste tabulaire.

[![Catégorie de liste IP](../assets/images/en/evaluation/ip-list/1-il.png)](../assets/images/en/evaluation/ip-list/1-il.png)

Le type d'attribution d'adresse est présenté avec des couleurs et leur signification respective est expliquée dans une légende de couleur à droite de la liste :

*   **Vert:** Adresse réseau / Broadcast
*   **Jaune:** Passerelle par défaut (C'est l'objet pour lequel vous avez défini dans la catégorie Adresse hôte qu'il doit agir en tant que passerelle par défaut.)
*   **Orange:** Plage d'adresses non numérotées
*   **Gris:** Adresses IP attribuées statiquement
*   **Bleu:** Adresses IP réservées par le serveur DHCP (voir également la catégorie **DHCP**)
*   **Bleu clair:** Adresses IP attribuées dynamiquement par le serveur DHCP (voir également la catégorie **DHCP**)

Afin d'éviter les conflits d'adresses (non intentionnels), i-doit signale plusieurs adresses IP attribuées à côté du tableau.

Dans les réseaux plus petits (< 1 000 adresses IP), les adresses IP qui n'ont pas encore été attribuées sont également affichées. Si le réseau dispose d'une plage d'adresses trop étendue, par exemple un /16 avec plus de 65 000 adresses IP, seules les adresses IP utilisées sont affichées et celles qui ne sont pas encore attribuées sont masquées. De plus, une note correspondante est ajoutée.

Une autre table sur la droite résume des informations importantes sur le réseau:

*   Adresses IP en cours d'utilisation
*   Adresse réseau
*   Masque de sous-réseau
*   Passerelle par défaut
*   Plage d'adresses
*   Superréseaux supérieurs (type d'objet **Superréseau**)
*   VLANs attribués (type d'objet **Réseau de couche 2**)

Attribution d'Objets
--------------------

Vous pouvez étendre la liste en ajoutant d'autres objets sans utiliser la catégorie **Adresse hôte** mais en utilisant le bouton **Connecter objet**.

Vérification des Adresses IP
----------------------------

La catégorie **Liste IP** offre la possibilité de comparer l'état cible et l'état actuel. Afin de vérifier si les adresses IP documentées et les noms d'hôtes sont réellement attribués, i-doit peut envoyer des paquets ICMP ("Pings") et démarrer une recherche NSLOOKUP. À cette fin, i-doit nécessite un accès réseau. Vous pouvez vérifier des entrées individuelles ou toutes les entrées dans un ordre ultérieur. Avec **Administration → Paramètres système → Paramètres du locataire → Options pour la Liste IP**, vous pouvez définir quels outils en ligne de commande doivent être appliqués. L'utilisateur/le groupe du serveur web Apache doit avoir l'autorisation d'activer ces outils.

*   **Ping**: Envoyer un paquet ICMP à une adresse IP
*   **NSLOOKUP**: Spécifier l'adresse IP en tant que nom d'hôte
*   **Reverse NSLOOKUP**: Spécifier le nom d'hôte pour une adresse IP

{/*examples*/}

