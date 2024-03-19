<!-- TRANSLATED by md-translate -->
# SNMP

# SNMP

Die SNMP-Kategorie erlaubt es, in Echtzeit SNMP Werte aus Objekten auszulesen und darzustellen. Anhand der beispielhaften Abfrage eines Switches gehen wir in diesem Artikel die Voraussetzungen und die Umsetzung durch.

La catégorie SNMP permet de lire et d'afficher des valeurs SNMP en temps réel à partir d'objets. A l'aide de l'exemple de la requête d'un switch, nous passons en revue dans cet article les conditions préalables et la mise en œuvre.

!!! info ""
    Dieser Artikel wurde zuletzt für i-doit Version 1.18.2 geprüft

! !! info ""
    Cet article a été vérifié pour la dernière fois pour i-doit version 1.18.2

## Voraussetzungen

## conditions préalables

Um diese Kategorie nutzen zu können benötigt _i-doit_ das SNMP Modul von PHP. Unter Debian lässt sich dies installieren mit dem Befehl:

Pour pouvoir utiliser cette catégorie, _i-doit_ a besoin du module SNMP de PHP. Sous Debian, ce module peut être installé avec la commande :

```
sudo apt-get install php-snmp
```

Die SNMP Kategorie muss anschließend über [Datenstruktur bearbeiten](../administration/verwaltung/datenstruktur/datenstruktur-bearbeiten.md) dem gewünschten Objekttyp zugewiesen werden. In unserem Beispiel haben wir uns auf den Objekttyp Router reduziert.

La catégorie SNMP doit ensuite être attribuée au type d'objet souhaité via [Modifier la structure de données](../administration/administration/structure de données/modifier la structure de données.md). Dans notre exemple, nous nous sommes limités au type d'objet Routeur.

Wir benötigen weiterhin eine gültige Hostadresse, die selbstverständlich in der entsprechenden Kategorie dokumentiert sein muss.

Nous avons toujours besoin d'une adresse d'hôte valide, qui doit bien entendu être documentée dans la catégorie correspondante.

[![snmp-hostadresse](../assets/images/de/automatisierung-und-integration/service-desk/snmp/1-snmp.png)](../assets/images/de/automatisierung-und-integration/service-desk/snmp/1-snmp.png)

[ ![adresse hôte snmp](../assets/images/fr/automatisation et intégration/service-desk/snmp/1-snmp.png)](../assets/images/fr/automatisation et intégration/service-desk/snmp/1-snmp.png)

Um unnötige Fehlersuche zu vermeiden begeben wir uns erst einmal per SSH auf die Konsole des Servers und testen die SNMP Verbindung "per Hand". Dazu installieren wir das Paket "snmp" um den Befehl "snmpwalk" zur Verfügung zu bekommen. Anschließend rufen wir einen standard Aufruf an den Switch auf, der uns die Liste aller Interfaces geben soll.

Afin d'éviter une recherche d'erreur inutile, nous allons d'abord nous rendre sur la console du serveur via SSH et tester la connexion SNMP "à la main". Pour cela, nous installons le paquet "snmp" afin d'avoir la commande "snmpwalk" à disposition. Ensuite, nous appelons un appel standard au switch qui doit nous donner la liste de toutes les interfaces.

```shell
snmpwalk -v 2c -c public 192.168.10.1 1.3.6.1.2.1.2.2.1.1
```

!!! info
    Die Details zum Thema SNMP und diesem Aufruf lassen wir an dieser Stelle weg. Informationen über die OID .1.3.6.1.2.1.2.2.1.1 gibt es beispielsweise hier: [http://www.oid-info.com/get/1.3.6.1.2.1.2.2.1](http://www.oid-info.com/get/1.3.6.1.2.1.2.2.1)

! !! info
    Nous laissons ici de côté les détails sur le thème SNMP et cet appel. Des informations sur l'OID .1.3.6.1.2.2.1.1 sont par exemple disponibles ici : [http://www.oid-info.com/get/1.3.6.1.2.1.2.2.1](http://www.oid-info.com/get/1.3.6.1.2.1.2.2.1)

Das Ergebnis in unserem Falle sieht folgendermaßen aus:

Le résultat dans notre cas se présente comme suit :

```
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
```

Die Abfrage war also erfolgreich, wir habe es mit einem 11 Port Router zu tun. Sollten an dieser Stelle Timeouts o.Ä. Fehler auftreten, sollte die Netzwerk Konnektivität geprüft werden, ob SNMP in den Firewall Regeln erlaubt ist, ob der SNMP Server läuft und ob der i-doit Server Zugriffsberechtigung auf den SNMP Server hat. Selbstverständlich muss auch die gewählte SNMP Community (in unserem Beispiel public) verfügbar sein.

La requête a donc réussi, nous avons affaire à un routeur à 11 ports. Si à ce stade, il y a des timeouts ou autres. il faut vérifier la connectivité du réseau, si SNMP est autorisé dans les règles du pare-feu, si le serveur SNMP fonctionne et si le serveur i-doit a le droit d'accéder au serveur SNMP. Il va de soi que la communauté SNMP choisie (dans notre exemple public) doit également être disponible.

Nun wechseln wir wieder in _i-doit_ in die SNMP Kategorie. Dort bekommen wir automatisch die primäre IP-Adresse des Switches angezeigt und die Standard-SNMP-Community public angeboten.

Nous passons maintenant à nouveau dans _i-doit_ dans la catégorie SNMP. Là, l'adresse IP primaire du switch s'affiche automatiquement et la communauté SNMP standard est proposée au public.

Da uns allerdings die Interface Indizes nicht interessieren, beschäftigen wir uns mit einer anderen OID und zwar der für die Liste der fehlerhaften Pakete je Interface. Diese hat die OID 1.3.6.1.2.1.2.2.1.1.14.x, wobei x für den Index des jeweiligen Interfaces steht.

Comme les index d'interface ne nous intéressent pas, nous nous intéressons à un autre OID, celui de la liste des paquets défectueux par interface. Celle-ci a pour OID 1.3.6.1.2.2.2.1.14.x, où x représente l'index de l'interface concernée.

Mit dieser OID und weiteren bauen wir uns eine Liste:

Avec cet OID et d'autres, nous construisons une liste :

[![snmp-liste](../assets/images/de/automatisierung-und-integration/service-desk/snmp/2-snmp.png)](../assets/images/de/automatisierung-und-integration/service-desk/snmp/2-snmp.png)

[ ![liste snmp](../assets/images/fr/automatisation-et-intégration/service-desk/snmp/2-snmp.png)](../assets/images/fr/automatisation-et-intégration/service-desk/snmp/2-snmp.png)

und speichern die Kategorie ab.

et enregistrez la catégorie.

Wenn wir nun erneut auf die Kategorie klicken werden in Echtzeit die SNMP Werte ausgelesen und angezeigt. Glücklicherweise haben wir bei diesem Test festgestellt, dass wir keine Fehler bei den Paketen haben.
Damit beschließen wir das praktische Beispiel und suchen nun nach der Ursache für die Paket Fehler.

Si nous cliquons à nouveau sur la catégorie, les valeurs SNMP sont lues et affichées en temps réel. Heureusement, ce test nous a permis de constater qu'il n'y a pas d'erreurs dans les paquets.
Nous terminons ainsi l'exemple pratique et cherchons maintenant la cause des erreurs de paquets.

| OID URL | Beschreibung |
| --- | --- |
| [http://oid-info.com/get/1.3.6.1.2.1.1.1](http://oid-info.com/get/1.3.6.1.2.1.1.1) | "A textual description of the entity. This value should include the full name and version identification of the system's hardware type, software operating-system, and networking software." |
| [http://oid-info.com/get/1.3.6.1.2.1.2.2.1.2](http://oid-info.com/get/1.3.6.1.2.1.2.2.1.2) | "A textual string containing information about the interface. This string should include the name of the manufacturer, the product name and the version of the interface hardware/software." |
| [http://oid-info.com/get/1.3.6.1.2.1.2.2.1.14](http://oid-info.com/get/1.3.6.1.2.1.2.2.1.14) | "For packet-oriented interfaces, the number of inbound packets that contained errors preventing them from being deliverable to a higher-layer protocol. For character- oriented or fixed-length interfaces, the number of inbound transmission units that contained errors preventing them  <br>from being deliverable to a higher-layer protocol.  <br>Discontinuities in the value of this counter can occur at re-initialization of the management system, and at other times as indicated by the value of ifCounterDiscontinuityTime." |
| [http://oid-info.com/get/1.3.6.1.2.1.1.4](http://oid-info.com/get/1.3.6.1.2.1.1.4) | "The textual identification of the contact person for  <br>this managed node, together with information on how to contact this person. If no contact information is known, the value is the zero-length string." |
| [http://oid-info.com/get/1.3.6.1.2.1.1.3](http://oid-info.com/get/1.3.6.1.2.1.1.3) | "The time (in hundredths of a second) since the  <br>network management portion of the system was last re-initialized." |

| OID URL | Description |
| --- | --- |
| [http://oid-info.com/get/1.3.6.1.2.1.1.1](http://oid-info.com/get/1.3.6.1.2.1.1.1) | "Une description textuelle de l'entité. Cette valeur doit inclure le nom complet et l'identification de la version du type de matériel, du système d'exploitation logiciel et du logiciel de mise en réseau du système." |
| [http://oid-info.com/get/1.3.6.1.2.1.2.2.1.2](http://oid-info.com/get/1.3.6.1.2.1.2.2.1.2) | "Une chaîne de texte contenant des informations sur l'interface. Cette chaîne doit inclure le nom du fabricant, le nom du produit et la version du matériel/logiciel de l'interface". |
| [http://oid-info.com/get/1.3.6.1.2.1.2.2.1.14](http://oid-info.com/get/1.3.6.1.2.1.2.2.1.14) | "Pour les interfaces orientées paquets, le nombre de paquets entrants qui contenaient des erreurs les empêchant d'être livrables à un protocole de couche supérieure. For character- oriented or fixed-length interfaces, the number of inbound transmission units that contained errors preventing them <br>from being deliverable to a higher-layer protocol.  <br>Des discontinuités dans la valeur de ce compteur peuvent se produire lors de la réinitialisation du système de gestion, et à d'autres moments comme indiqué par la valeur de ifCounterDiscontinuityTime". |
| [http://oid-info.com/get/1.3.6.1.2.1.1.4](http://oid-info.com/get/1.3.6.1.2.1.1.4) | "L'identification textuelle de la personne de contact pour <br>ce nœud géré, ainsi que des informations sur la manière de contacter cette personne. Si aucune information de contact n'est connue, la valeur est la chaîne de caractères zéro-length". |
| [http://oid-info.com/get/1.3.6.1.2.1.1.3](http://oid-info.com/get/1.3.6.1.2.1.1.3) | "Le temps (en centaines de secondes) depuis que la partie <br>gestion du réseau du système a été réinitialisée pour la dernière fois". |

[![snmp-werte](../assets/images/de/automatisierung-und-integration/service-desk/snmp/3-snmp.png)](../assets/images/de/automatisierung-und-integration/service-desk/snmp/3-snmp.png)

[ ![valeurs snmp](../assets/images/fr/automatisation-et-intégration/service-desk/snmp/3-snmp.png)](../assets/images/fr/automatisation-et-intégration/service-desk/snmp/3-snmp.png)