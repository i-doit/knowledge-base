# SNMP

La catégorie SNMP vous permet de lire les valeurs SNMP des objets et de les afficher en temps réel. En utilisant l'exemple de requête d'un commutateur, nous discuterons des exigences et de l'exécution dans cet article.

## Exigences

i-doit nécessite le module SNMP de PHP pour utiliser cette catégorie. Sur Debian, vous pouvez installer le module avec la commande suivante :

```shell
sudo apt-get install php5-snmp
```

Ensuite, vous devez attribuer la catégorie SNMP au type d'objet souhaité avec l'**Éditeur de structure de données**. Dans notre exemple, nous avons utilisé uniquement le type d'objet **Switch**.

De plus, nous avons besoin d'une adresse hôte valide qui doit être documentée dans la catégorie respective bien sûr.

[![object](../assets/images/en/automation-and-integration/snmp/1-snmp.png)](../assets/images/en/automation-and-integration/snmp/1-snmp.png)

Afin d'éviter les tentatives échouées, nous testons la connexion SNMP "manuellement" en accédant à la console du serveur via SSH. À cette fin, nous installons le paquet "snmp" afin d'obtenir la commande "snmpwalk". Ensuite, nous utilisons un appel standard du commutateur qui nous fournira la liste de toutes les interfaces.

```shell
sudo apt-get install snmpsnmpwalk -v 2c -c public 192.168.10.13 .1.3.6.1.2.1.2.2.1.1
```

!!! info "À ce stade, nous omettons les détails sur le sujet de SNMP et cet appel. Des informations sur l'OID .1.3.6.1.2.1.2.2.1.1 peuvent être trouvées ici par exemple: [http://www.oid-info.com/get/1.3.6.1.2.1.2.2.1](http://www.oid-info.com/get/1.3.6.1.2.1.2.2.1)"


Dans notre cas, les résultats ressemblent à ceci:

iso.3.6.1.2.1.2.2.1.1.1 = INTEGER: 1

iso.3.6.1.2.1.2.2.1.1.2 = INTEGER: 2

iso.3.6.1.2.1.2.2.1.1.3 = INTEGER: 3

iso.3.6.1.2.1.2.2.1.1.4 = INTEGER: 4

iso.3.6.1.2.1.2.2.1.1.5 = INTEGER: 5

iso.3.6.1.2.1.2.2.1.1.6 = INTEGER: 6

iso.3.6.1.2.1.2.2.1.1.7 = INTEGER: 7

iso.3.6.1.2.1.2.2.1.1.8 = INTEGER: 8

iso.3.6.1.2.1.2.2.1.1.9 = INTEGER: 9

iso.3.6.1.2.1.2.2.1.1.10 = INTEGER: 10

iso.3.6.1.2.1.2.2.1.1.11 = INTEGER: 11

iso.3.6.1.2.1.2.2.1.1.12 = INTEGER: 12

iso.3.6.1.2.1.2.2.1.1.13 = INTEGER: 13

iso.3.6.1.2.1.2.2.1.1.14 = INTEGER: 14

iso.3.6.1.2.1.2.2.1.1.15 = INTEGER: 15

iso.3.6.1.2.1.2.2.1.1.16 = INTEGER: 16

iso.3.6.1.2.1.2.2.1.1.17 = INTEGER: 17

iso.3.6.1.2.1.2.2.1.1.18 = INTEGER: 18

iso.3.6.1.2.1.2.2.1.1.19 = INTEGER: 19

iso.3.6.1.2.1.2.2.1.1.20 = INTEGER: 20

iso.3.6.1.2.1.2.2.1.1.21 = INTEGER: 21

iso.3.6.1.2.1.2.2.1.1.22 = INTEGER: 22

iso.3.6.1.2.1.2.2.1.1.23 = INTEGER: 23

iso.3.6.1.2.1.2.2.1.1.24 = INTEGER: 24

La requête a été réussie et nous traitons un commutateur à 24 ports. Si des délais d'attente ou des problèmes similaires surviennent à ce stade, vous devriez vérifier la connectivité réseau pour vérifier si SNMP est autorisé dans les règles du pare-feu, si le serveur SNMP est en cours d'exécution et si le serveur i-doit a des autorisations d'accès pour le serveur SNMP. Bien sûr, la communauté SNMP sélectionnée (dans notre exemple public) doit également être disponible.

Maintenant, nous retournons à la catégorie SNMP dans i-doit. L'adresse IP principale du commutateur est automatiquement affichée là-bas et la communauté SNMP standard public est proposée.

Comme nous ne sommes pas intéressés par les indices d'interface, nous nous préoccuperons de l'OID pour la liste des paquets défectueux par interface. Cela a l'OID .1.3.6.1.2.1.2.2.1.1.14.x, où x représente l'index de l'interface respective.

Avec ces détails, nous construisons 24 entrées pour les interfaces correspondantes:

Ensuite, nous sauvegardons la catégorie.

!!! info "Optionnel"
    Dans l'exemple de ligne de commande, les OID sont affichés avec un point. Ce n'est pas nécessaire dans la catégorie SNMP et est donc facultatif.

Lorsque vous cliquez à nouveau sur la catégorie, les valeurs SNMP sont chargées et affichées en temps réel. Malheureusement, le test montre qu'il y a des erreurs de paquets dans deux interfaces. Par conséquent, nous concluons l'exemple pratique à ce stade et commençons à chercher la raison des erreurs de paquets.
