<!-- TRANSLATED by md-translate -->
# JDisc Discovery

# JDisc Discovery

[JDisc Discovery](http://www.jdisc.com/de/) inventarisiert gesamte Netzwerke und erkennt alle wichtigen Betriebssysteme (einschließlich HP-UX, Solaris und AIX). Es erkennt Hardware- und Software, IP-Netzwerke, Windows-Domänen und Active Directory. Darüber hinaus identifiziert JDisc Discovery alle wichtigen Virtualisierungstechnologien, sowie viele Cluster-Umgebungen.

[JDisc Discovery](http://www.jdisc.com/de/) inventorie l'ensemble des réseaux et détecte tous les principaux systèmes d'exploitation (y compris HP-UX, Solaris et AIX). Il détecte le matériel et les logiciels, les réseaux IP, les domaines Windows et Active Directory. En outre, JDisc Discovery identifie toutes les technologies de virtualisation importantes, ainsi que de nombreux environnements en cluster.

Ein Praxisbeispiel finden Sie auf unserem [Blog](https://www.i-doit.com/blog/it-service-management-mit-dem-discovery-tool-jdisc-und-i-doit/)

Vous trouverez un exemple pratique sur notre [blog](https://www.i-doit.com/blog/it-service-management-mit-dem-discovery-tool-jdisc-und-i-doit/)

## Installation

## Installation

Für den Betrieb ist die Installation der JDisc-Server-Komponenten auf einem Microsoft Windows (bestenfalls in der Server-Variante) erforderlich Die Installationsdateien hierfür können unter folgender Adresse heruntergeladen werden:

Pour le fonctionnement, il est nécessaire d'installer les composants du serveur JDisc sur un Microsoft Windows (au mieux dans la variante serveur) Les fichiers d'installation à cet effet peuvent être téléchargés à l'adresse suivante :

[https://jdisc.com/downloads/](https://jdisc.com/downloads/)

[https://jdisc.com/downloads/](https://jdisc.com/downloads/)

Während des Setups wird abgefragt, welche Passwörter für das im Hintergrund verwendete PostgreSQL-DBMS verwendet werden sollen. Dies betrifft den administrativen Account **postgres** und den Account **postgresro**, der lediglich über Leserechte auf die JDisc-Datenbank verfügt. Letztere Account wird für die Schnittstelle zu i-doit benötigt. Zudem muss beim Setup angegeben werden, dass die PostgreSQL-Instanz nach außen hin erreichbar sein soll. Diese hört standardmäßig auf den Port **25321**. Der Port ist in der Windows Firewall freizuschalten.

Pendant le setup, il est demandé quels mots de passe doivent être utilisés pour le SGBD PostgreSQL utilisé en arrière-plan. Cela concerne le compte administratif **postgres** et le compte **postgresro**, qui ne dispose que de droits de lecture sur la base de données JDisc. Ce dernier compte est nécessaire pour l'interface avec i-doit. De plus, il faut indiquer lors de la configuration que l'instance PostgreSQL doit être accessible de l'extérieur. Celle-ci écoute par défaut sur le port **25321**. Ce port doit être activé dans le pare-feu Windows.

Bei Fragen zur Installation oder Konfiguration von JDisc hilft der Support des Herstellers:

Si vous avez des questions sur l'installation ou la configuration de JDisc, le support du fabricant peut vous aider :

[https://jdisc.com/support/](https://jdisc.com/support/)

[https://jdisc.com/support/](https://jdisc.com/support/)

Dieser Artikel widmet sich im Folgenden der Schnittstelle zwischen i-doit und JDisc Discovery.

Cet article est consacré par la suite à l'interface entre i-doit et JDisc Discovery.

!!! info "JDisc WebService siehe auch [JDisc FAQ](https://jdisc.com/support/faq/)"
    > Der WebService ist ein SOAP basierter Service, mit dem man einzelne Aktivitäten in JDisc fernsteuern kann. Der SOAP Service läuft normalerweise auf Port 9000. Wir haben allerdings für unser neues WEB UI eine moderne GraphQL Schnittstelle implementiert, die den SOAP Service komplett ersetzt! I-Doit kann unser neues GraphQL API ab Version i-doit Release 22 verwenden!

! !! info "JDisc WebService voir aussi [JDisc FAQ](https://jdisc.com/support/faq/)"
    > Le WebService est un service basé sur SOAP qui permet de contrôler à distance des activités individuelles dans JDisc. Le service SOAP fonctionne normalement sur le port 9000, mais nous avons implémenté une interface GraphQL moderne pour notre nouvelle WEB UI, qui remplace complètement le service SOAP ! I-Doit peut utiliser notre nouvelle API GraphQL à partir de la version i-doit Release 22 !

```
> Ändere einfach den Port auf 443 und das Protokoll auf HTTPS um auf das GraphQL Interface umzustellen. Das WebService Add-On wird dann nicht mehr benötigt.

> Das GraphQL API hat nur Vorteile gegenüber dem SOAP Service:

> Es verwendet ausschliesslich verschlüsselte Kommunikation via HTTPS. Der WEB Service hat by default HTTP verwendet.

> Das neue API ist ein modernes API, mit dem sich alle Aktionen in JDisc automatisieren lassen!
```

## Konfiguration

## Configuration

Die Konfiguration der Schnittstelle befindet sich unter **Verwaltung → Import und Schnittstellen → JDISC → JDisc-Konfiguration**. Dort können beliebig viele Instanzen von JDisc Discovery angegeben werden. Dies ermöglicht komplexe Inventarisierungs-Szenarien mit voneinander getrennten Netzen.

La configuration de l'interface se trouve sous **Administration → Importation et interfaces → JDISC → Configuration JDisc**. Il est possible d'y spécifier un nombre illimité d'instances de JDisc Discovery. Cela permet des scénarios d'inventaire complexes avec des réseaux séparés les uns des autres.

[![JDisc Konfiguration](../assets/images/de/daten-konsolidieren/jdisc/1-jdisc.png)](../assets/images/de/daten-konsolidieren/jdisc/1-jdisc.png)

[ ![Configuration JDisc](../assets/images/fr/consolidation des données/jdisc/1-jdisc.png)](../assets/images/fr/consolidation des données/jdisc/1-jdisc.png)

!!! info "Archivieren von alten Objekten"
    Um Objekte zu archivieren, die von JDisc für eine bestimmte Anzahl von Tagen nicht gesehen wurden, wird der Schwellenwert und die Schwellenwerteinheit in der Verwaltung eingestellt. **Verwaltung → [Mandanten-Name] Verwaltung → Einstellungen für [Mandanten-Name] → JDisc**.

! !! info "Archivage d'anciens objets"
    Pour archiver des objets qui n'ont pas été vus par JDisc pendant un certain nombre de jours, la valeur seuil et l'unité de valeur seuil sont réglées dans l'administration. **Administration → [Nom du mandant] Administration → Paramètres pour [Nom du mandant] → JDisc**.

### Allgemeine Einstellungen

### Paramètres généraux

| Parameter                                    | Anmerkung                                                                                                                                                                                         |
| -------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Standard Server**                          | Handelt es sich um diejenige Instanz, die bei einem manuellen Import vorgeschlagen werden soll?                                                                                                   |
| **Host**                                     | Hostname/FQDN oder IP-Adresse der JDisc-Instanz; diese muss von der i-doit-Instanz aus erreichbar sein                                                                                            |
| **Port**                                     | Offener Port der PostgreSQL-Instanz, die im Hintergrund von JDisc Discovery läuft                                                                                                                 |
| **Datenbank**                                | JDisc Discovery verwendet standardmäßig die Datenbank **inventory**.                                                                                                                              |
| **Benutzername**                             | Hier wird einer der Accounts angegeben, die beim Setup abgefragt wurden. Es genügt der Account **postgresro** mit eingeschränkten Rechten, da i-doit lediglich lesend auf die Datenbank zugreift. |
| **Passwort**                                 | Das beim Setup vergebene Passwort, das zum verwendeten Account gehört                                                                                                                             |
| **Import älterer JDisc Versionen erlauben?** | Abfrage, die nur für ältere Versionen von JDisc Discovery relevant ist                                                                                                                            |

| Paramètres | Note |
| -------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Serveur standard** | S'agit-il de l'instance qui doit être proposée lors d'une importation manuelle ?                                                                                                   |
| **Host** | Nom d'hôte/FQDN ou adresse IP de l'instance JDisc ; celle-ci doit être accessible depuis l'instance i-doit |
| **Port** | Port ouvert de l'instance PostgreSQL qui s'exécute en arrière-plan de JDisc Discovery |
| **Base de données** | JDisc Discovery utilise par défaut la base de données **inventory**.                                                                                                                              |
| **Nom d'utilisateur** | On indique ici l'un des comptes qui ont été demandés lors du setup. Le compte **postgresro** avec des droits limités est suffisant, car i-doit n'accède à la base de données qu'en lecture. |
| **Mot de passe** | Le mot de passe attribué lors du setup et qui appartient au compte utilisé |
| **Autoriser l'importation d'anciennes versions de JDisc?** | Demande qui n'est pertinente que pour les anciennes versions de JDisc Discovery |

Nach dem Speichern der Parameter kann die Verbindung zur JDisc-Datenbank über den Button **Verbindung prüfen** getestet werden.

Après avoir enregistré les paramètres, la connexion à la base de données JDisc peut être testée en cliquant sur le bouton **Vérifier la connexion**.

### Discovery Einstellungen

### Paramètres de découverte

Über i-doit kann der Benutzer einen Scan bei der konfigurierten JDisc-Instanz auslösen. Dazu wird der [WebService](#installation) von JDisc Discovery verwendet, der installiert und aktiviert sein muss.

Via i-doit, l'utilisateur peut déclencher un scan sur l'instance JDisc configurée. Pour cela, il utilise le [WebService](#installation) de JDisc Discovery, qui doit être installé et activé.

| Parameter        | Anmerkung                                            |
| ---------------- | ---------------------------------------------------- |
| **Benutzername** | Account, der für den Web Service genutzt werden soll |
| **Passwort**     | Zum Account passendes Passwort                       |
| **Port**         | Standard: **9000**                                   |
| **Protokoll**    | Standard: **http**                                   |

| Paramètres | Note |
| ---------------- | ---------------------------------------------------- |
| **Nom d'utilisateur** | Compte à utiliser pour le service web |
| **Mot de passe** | Mot de passe correspondant au compte |
| **Port** | Par défaut : **9000** |
| **Protocole** | Par défaut : **http** |

Auch hier kann nach dem Speichern der Parameter über den Button **Verbindung prüfen** getestet werden, ob die Konfiguration erfolgreich ist.

Ici aussi, après avoir enregistré les paramètres, le bouton **Vérifier la connexion** permet de tester si la configuration est réussie.

## Profile

## Profils

Die JDisc-Profile innerhalb von i-doit geben die Möglichkeit, die Verknüpfung von Objekttypen und ihren Attributen zwischen JDisc und i-doit zu definieren. Unter **Verwaltung → Import und Schnittstellen → JDISC → JDisc-Profile** kann festgelegt werden, in welcher Weise die durch JDisc gefundenen Objekte ihren Weg in die IT-Dokumentation finden.

Les profils JDisc au sein d'i-doit donnent la possibilité de définir les liens entre les types d'objets et leurs attributs entre JDisc et i-doit. Sous **Administration → Importation et interfaces → JDISC → Profils JDisc**, il est possible de définir de quelle manière les objets trouvés par JDisc trouvent leur chemin dans la documentation IT.

[![JDisc Profile](../assets/images/de/daten-konsolidieren/jdisc/2-jdisc.png)](../assets/images/de/daten-konsolidieren/jdisc/2-jdisc.png)

[ ![JDisc Profile](../assets/images/fr/consolidation des données/jdisc/2-jdisc.png)](../assets/images/fr/consolidation des données/jdisc/2-jdisc.png)

In der Standard-Installation von i-doit sind bereits vordefinierte Profile vorhanden. Darunter befindet sich das Profile **Complete import**, dass darauf ausgelegt ist, die meisten Daten in i-doit zu importieren, die JDisc inventarisiert hat.

Dans l'installation standard d'i-doit, il existe déjà des profils prédéfinis. Parmi eux se trouve le profil **Complete import**, conçu pour importer dans i-doit la plupart des données inventoriées par JDisc.

!!! info "Benutzerdefinierte Profile"
    Es ist ratsam eigene Profile zu erstellen die auf die Objekttypen und Kategorien zugeschnitten sind.

! !! info "Profils personnalisés"
    Il est conseillé de créer des profils personnalisés en fonction des types d'objets et des catégories.

### Allgemeine Einstellungen

### Paramètres généraux

| Option           | Beschreibung                                                                                                  |
| ---------------- | ------------------------------------------------------------------------------------------------------------- |
| **JDisc Server** | Welche Instanz von JDisc soll beim Import vor-selektiert werden? Siehe Abschnitt "Konfiguration" weiter oben. |
| **Titel**        | Name des Profils                                                                                              |
| **Beschreibung** | Beschreibung des Profils                                                                                      |

| option | description |
| ---------------- | ------------------------------------------------------------------------------------------------------------- |
| Quelle instance de JDisc doit être présélectionnée lors de l'importation ? Voir la section "Configuration" ci-dessus. |
| **Titre** | Nom du profil |
| **Description** | Description du profil |

### Objekttyp Zuweisungen

### Type d'objet Attributions

Für jeden Typ in JDisc kann ein äquivalenter Objekttyp in i-doit ausgewählt werden. Geschieht dies nicht, werden Devices diesen Typs nicht importiert. Die Reihenfolge der Zuweisungen wird beim Import beachtet. Dieser geht die Liste von oben nach unten durch, um eine Zuweisung zu identifizieren. Die Matrix ist pro Zeile folgendermaßen aufgebaut:

Pour chaque type dans JDisc, un type d'objet équivalent peut être sélectionné dans i-doit. Si ce n'est pas le cas, les périphériques de ce type ne seront pas importés. L'ordre des affectations est respecté lors de l'importation. Celui-ci parcourt la liste de haut en bas pour identifier une attribution. La matrice est structurée comme suit par ligne :

| JDisc-Typ                                                                                                                                                      | JDisc-Betriebssystem                                                                                                                                                                                                                                              | Objektnamen modifizieren                                                                                                                                                                                                                                            | FQDN Zusatz                                    | Port Filter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Objekttyp                                                                                                                             | Standort                                                                                                                                                        | Aktionen                                                             |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------- |
| Device Type aus JDisc, der beim Import berücksichtigt werden soll.<br><br>Die Liste wird aus der angegebenen JDisc-Instanz ausgelesen und zwischengespeichert. | Betriebssysteme, die JDisc bereits inventarisiert hat.<br><br>Oftmals reicht der Device Type für eine Zuweisung zu einem Objekttyp nicht aus, weswegen optional das Betriebssystem angegeben werden kann.<br><br>Das Feld kann mit Wildcards (_) versehen werden. | Wandelt den Objekttitel um.<br><br>__Unverändert__: Der Objektname wird nicht verändert<br><br>__Großbuchstaben__: Der komplette Objektname wird in Großbuchstaben geändert.<br><br>__Kleinbuchstaben__: Der komplette Objektname wird in Kleinbuchstaben geändert. | Hängt an den Objekttitel einen FQDN Zusatz an. | Welche Netzwerk-Ports sollen importiert werden?<br><br>__Normaler Import__: Alle physikalischen und logischen Ports werden importiert.<br><br>__Kein Import__: Im Textfeld können Port-Namen angegeben werden, die ignoriert werden sollen.<br>Das Feld kann mit Wildcards (_) genutzt werden. (Beispiel: Port-Name: Loopback → Ports mit dem Namen Loopback werden nicht importiert)<br><br>**Logischer Port**/**Physikalischer Port**/**FC-Port**: Es werden nur die Ports importiert, deren Name im Textfeld zu finden ist.<br><br>Die Kriterien können miteinander kombiniert werden, sodass nur bestimmte physikalische und nur bestimmte logische Ports berücksichtigt werden. | Diesem Objekttyp werden importierte Devices zugeordnet.<br><br>Wird kein Objekttyp ausgewählt, werden Devices diesen Types ignoriert. | Beim Import werden Objekte, die den hier genannten Kriterien entsprechen, einem bestimmten Standort zugeordnet. Dies geschieht über die Kategorie **Standort**. | Neue Zuweisung hinzufügen, eine bestehende duplizieren oder löschen. |

| Type de JDisc | Système d'exploitation JDisc | Modifier le nom de l'objet | Ajout de FQDN | Filtre de port | Type d'objet | Emplacement | Actions |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
| Device Type de JDisc à prendre en compte lors de l'importation.<br><br>La liste est extraite de l'instance JDisc indiquée et mise en cache. | Systèmes d'exploitation déjà inventoriés par JDisc.<br><br>Souvent, le Device Type ne suffit pas pour l'attribution à un type d'objet, c'est pourquoi le système d'exploitation peut être indiqué en option.<br><br>Le champ peut être pourvu de jokers (_). | Convertit le titre de l'objet.<br><br>__Inchangé__ : Le nom de l'objet n'est pas modifié<br><br>__ Majuscules__ : Le nom complet de l'objet est changé en majuscules.<br><br>__Minuscules__ : Le nom complet de l'objet est changé en minuscules. | Ajoute un complément FQDN au titre de l'objet. | Quels ports réseau doivent être importés?<br><br>__Importation normale__ : Tous les ports physiques et logiques sont importés.<br><br>__Pas d'importation__ : Dans la zone de texte, il est possible d'indiquer des noms de ports qui doivent être ignorés.<br>Le champ peut être utilisé avec des caractères jokers (_). (Exemple : Nom de port : Loopback → Les ports avec le nom Loopback ne sont pas importés)<br><br>**Port logique**/**Port physique**/**FC-Port** : Seuls les ports dont le nom se trouve dans la zone de texte sont importés.<br><br>Les critères peuvent être combinés entre eux, de sorte que seuls certains ports physiques et seuls certains ports logiques sont pris en compte. <br><br>Si aucun type d'objet n'est sélectionné, les appareils de ce type sont ignorés. | Lors de l'importation, les objets qui correspondent aux critères mentionnés ici sont attribués à un site spécifique. Cela se fait via la catégorie **Site**. | Ajouter une nouvelle affectation, dupliquer ou supprimer une affectation existante. |

### Zusätzliche Optionen

### Options supplémentaires

| Option                                                                      | Beschreibung                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| --------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Kategorien auswählen**                                                    | Welche [Kategorien](../grundlagen/struktur-it-dokumentation.md) sollen beim Import befüllt werden? Es werden nur Kategorien gelistet, die der Import behandeln kann.                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| **Netzwerk Interfaces importieren als**                                     | Inventarisierte Netzwerk-Schnittstellen können in unterschiedlichen Kategorien abgebildet werden.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| **Software beim Import berücksichtigen**                                    | Soll inventarisierte Software als Objekttyp **Anwendungen** importiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| **Softwarelizenzen beim Import berücksichtigen**                            | Sollen inventarisierte Softwarelizenzen als Objekttyp **Lizenzen** importiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| **Systemdienste importieren**                                               | Sollen inventarisierte Systemdienste als Objekttyp **Systemdienst** importiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| **Cloud Subscriptionen importieren**                                        | Sollen Daten aus der JDisc Kategorie Cloud importiert werden?<br>Wird in die Kategorie **Zugewiesene Abonnente** importiert. Die Rückwärtige Kategorie **Zugewiesene Benutzer** ist bei Objekten vom Typ Lizenzen zu finden.                                                                                                                                                                                                                                                                                                                                                                                             |
| **Verbindungs Endpunkte importieren**                                       | Die Verbindungen werden nicht in die Verkabelung Kategorie, sondern in die Kategorie "Verbindungs Endpunkte" importiert. Das ermöglicht zwischen der manuellen Verkabelung und der automatischen Verkabelung durch JDisc zu unterscheiden.                                                                                                                                                                                                                                                                                                                                                                               |
| **Einfache Datenbank Modellierung verwenden?**                              | Soll die neue oder die alte [Datenbanklogik](../anwendungsfaelle/dokumentation-von-datenbanken.md) verwendet werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| **Layer-3-Netze beim Import berücksichtigen**                               | Sollen inventarisierte IP-Netze als Objekttyp **Layer-3-Netze** importiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| **IP Adressentypen beibehalten**                                            | Sollen **IPv4 Adressen**, **IPv6 Adressen**, **Loopback Adressen**, **Virtuelle Adressen** importiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| **Importtyp für DHCP IP Adressen**                                          | Sollen per DHCP zugewiesen Adressen überschrieben werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| **VLans beim Import berücksichtigen**                                       | Sollen inventarisierte VLANs als Objekttyp **Layer-2-Netze** importiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| **Cluster beim Import berücksichtigen**                                     | Sollen (Virtualisierungs-)Umgebungen als Objekttyp **Cluster** importiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| **Blade/Chassis Verbindungen beim Import berücksichtigen**                  | Sollen Objekte vom Typ **Blade Server** zu Objekten vom Typ **Blade Chassis** beim Import hinzugefügt werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| **Objekttyp der zugewiesenen Module innerhalb eines Blade/Chassis Gerätes** | Ist ein Blade oder Switch Chassis inventarisiert worden, können die eingesteckten Module einem bestimmten Objekttyp beim Import zugeordnet werden.                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| **Objekttyp der zugewiesenen Module aktualisieren**                         | Sollen die Objekttypen der zugewiesenen Module eines Blade/Chassis Gerätes aktualisiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| **Custom attributes importieren**                                           | Wenn in JDisc Discovery benutzerdefinierte Attribute (**Custom Attributes**) gepflegt werden, können diese in i-doit importiert werden. Diese werden nach dem Import in der Kategorie **JDisc Custom Attributes** angezeigt.                                                                                                                                                                                                                                                                                                                                                                                             |
| **Standard Templates aus Objekttypen berücksichtigen (nur bei Neuanlage)**  | Wird ein neues Objekt erstellt, kann automatisch ein [Template](../effizientes-dokumentieren/templates.md) berücksichtigt werden. Die Auswahl des Templates findet in der Objekttyp-Konfiguration statt.                                                                                                                                                                                                                                                                                                                                                                                                                 |
| **CMDB-Status der Objekte ändern auf**                                      | Bereits vorhandene Objekte können beim Aktualisieren einen bestimmten **[CMDB-Status](../grundlagen/lebens-und-dokumentationszyklus.md)** erhalten. Soll der **CMDB-Status** nicht geändert werden, ist in der Auswahl **CMDB-Status beibehalten** zu wählen.                                                                                                                                                                                                                                                                                                                                                            |
| **Software Filter**                                                         | Entweder kann eine White- oder eine Blacklist an Software-Applikationen angegeben werden, welche importiert werden sollen (Whitelist) oder eben nicht (Blacklist). Es können Wildcards (*) angegeben werden. Die Liste von Titeln wird durch Kommas separiert.                                                                                                                                                                                                                                                                                                                                                          |
| **Filter als regexp gebrauchen**                                            | Den Software Filter mit Strings oder mit Regulären Ausdrücken verwenden? Da das regex direkt an die JDisc Datenbank weitergeleitet wird, sollten die passenden regex parameter verwendet werden.<br>Diese sind z.B. unter [h](https://www.postgresql.org/docs/9.3/functions-matching.html)[ttps://www.postgresql.org/docs/9.3/functions-matching.html](https://www.postgresql.org/docs/9.3/functions-matching.html) zu finden.<br><br>Hinweis eines Anwenders:<br><br>\s kann nicht verwendet werden. Hier wird mit Leerzeichen gearbeitet.<br>\d kann nicht verwendet werden. Hier muss mit [a-zA-Z] gearbeitet werden. |
| **Benutze OS-Familie (falls verfügbar) anstatt OS-Version als Objekttitel** | Für den Softwareimport anstatt der Softwareversion die Softwarefamilie als Objekttitel verwenden. Z.B. anstatt "Windows Server 2008 Standard" nur "Windows" mit "Server 2008 Standard" als Variante.                                                                                                                                                                                                                                                                                                                                                                                                                     |
| **Objekt-Matching Profil**                                                  | [Welche Strategie soll erfolgen](objekt-identifizieren-bei-importen.md), um bereits in i-doit dokumentierte Objekte durch einen Import zu aktualisieren?<br> Siehe auch [custom identifier](#custom-identifier)                                                                                                                                                                                                                                                                                                                                                                                                          |
| **Objekttyp aktualisieren**                                                 | Ist das Device bereits als Objekt in i-doit vorhanden, kann hierüber bestimmt werden, ob der Objekttyp anhand der Zuweisung (siehe oben) aktualisiert werden soll oder nicht.                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| **Objekt-Titel aktualisieren**                                              | Soll der Objekttitel durch den Import aktualisiert werden?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |

| option | description |
| --------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Sélectionner les catégories** | Quelles [catégories](../bases/structure-it-documentation.md) doivent être remplies lors de l'importation ? Seules les catégories que l'importation peut traiter sont listées.                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| **Importer les interfaces réseau en tant que** | Les interfaces réseau inventoriées peuvent être représentées dans différentes catégories.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| **Tenir compte des logiciels lors de l'importation** | Les logiciels inventoriés doivent-ils être importés en tant que type d'objet **Applications** ?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| **Tenir compte des licences logicielles lors de l'importation** | Les licences logicielles inventoriées doivent-elles être importées comme type d'objet **Licences** ?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| **Importer les services système** | Les services système inventoriés doivent-ils être importés comme type d'objet **Service système** ?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| **Importer des abonnements Cloud** | Doit-on importer des données de la catégorie JDisc Cloud?<br>Importe dans la catégorie **Attribué aux abonnés**. La catégorie arrière **Utilisateurs assignés** se trouve dans les objets de type Licences.                                                                                                                                                                                                                                                                                                                                                                                             |
| **Importer des terminaisons de connexion** | Les connexions ne sont pas importées dans la catégorie Câblage, mais dans la catégorie "Terminaisons de connexion". Cela permet de faire la différence entre le câblage manuel et le câblage automatique par JDisc.                                                                                                                                                                                                                                                                                                                                                                               |
| Faut-il utiliser la nouvelle ou l'ancienne [logique de base de données](../applications/documentation-de-base-de-données.md) ?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| **Tenir compte des réseaux de couche 3 lors de l'importation** | Les réseaux IP inventoriés doivent-ils être importés comme type d'objet **Réseaux de couche 3** ?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| **Retenir les types d'adresses IP** | Faut-il importer les adresses **IPv4**, les adresses **IPv6**, les adresses **Loopback**, les adresses **Virtuelles** ?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| **Type d'importation pour les adresses IP DHCP** | Faut-il remplacer les adresses attribuées par DHCP ?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| **Tenir compte des VLans lors de l'importation** | Les VLAN inventoriés doivent-ils être importés comme type d'objet **Réseaux de couche 2** ?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| **Tenir compte des clusters lors de l'importation** | Les environnements (de virtualisation) doivent-ils être importés comme type d'objet **Cluster** ?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| **Les connexions lames/châssis doivent-elles être prises en compte lors de l'importation** | Les objets de type **Blade Server** doivent-ils être ajoutés aux objets de type **Blade Chassis** lors de l'importation ?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| **Type d'objet des modules attribués au sein d'un dispositif Blade/Chassis** | Si un Blade ou un Switch Chassis a été inventorié, les modules enfichés peuvent être attribués à un certain type d'objet lors de l'importation.                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| **Mettre à jour le type d'objet des modules attribués** | Faut-il mettre à jour les types d'objets des modules attribués d'un dispositif à lame/châssis ?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| **Importer des attributs personnalisés** | Si des attributs personnalisés (**Custom Attributes**) sont gérés dans JDisc Discovery, ils peuvent être importés dans i-doit. Après l'importation, ils sont affichés dans la catégorie **JDisc Custom Attributes**.                                                                                                                                                                                                                                                                                                                                                                                             |
| **Prendre en compte les templates standard des types d'objets (uniquement en cas de nouvelle création)** | Si un nouvel objet est créé, un [Template](../documenter-efficacement/templates.md) peut être automatiquement pris en compte. Le choix du template se fait dans la configuration du type d'objet.                                                                                                                                                                                                                                                                                                                                                                                                                 |
| Les objets déjà existants peuvent recevoir un certain **[statut CMDB](../bases/cycle de vie et de documentation.md)** lors de la mise à jour. Si le **statut de la CMDB** ne doit pas être modifié, il faut sélectionner **Conserver le statut de la CMDB** dans le choix.                                                                                                                                                                                                                                                                                                                                                            |
| Il est possible d'indiquer une liste blanche ou une liste noire d'applications logicielles qui doivent être importées (liste blanche) ou non (liste noire). Il est possible d'indiquer des jokers (*). La liste des titres est séparée par des virgules.                                                                                                                                                                                                                                                                                                                                                          |
| Utiliser le filtre logiciel avec des chaînes de caractères ou des expressions régulières ? Comme le regex est directement transmis à la base de données JDisc, il faut utiliser les paramètres regex appropriés.<br>Ceux-ci se trouvent par exemple sous [h](https://www.postgresql.org/docs/9.3/functions-matching.html)[ttps://www.postgresql.org/docs/9.3/functions-matching.html](https://www.postgresql.org/docs/9.3/functions-matching.html).<br><br>Remarque d'un utilisateur:<br><br><br> Les\s ne peuvent pas être utilisés. Ici, il faut travailler avec [a-zA-Z]. |
| **Utiliser la famille OS (si disponible) au lieu de la version OS comme titre d'objet** | Pour l'importation de logiciels, utiliser la famille de logiciels comme titre d'objet au lieu de la version du logiciel. Par exemple, au lieu de "Windows Server 2008 Standard", utiliser uniquement "Windows" avec "Server 2008 Standard" comme variante.                                                                                                                                                                                                                                                                                                                                                                                                                     |
| **Profil d'appariement d'objets** | [Quelle stratégie doit être adoptée](identifier-objet-en-importation.md) pour mettre à jour des objets déjà documentés dans i-doit par une importation?<br> Voir aussi [custom identifier](#custom-identifier) |
| **Mettre à jour le type d'objet** | Si le device existe déjà en tant qu'objet dans i-doit, il est possible de déterminer ici si le type d'objet doit être mis à jour ou non en fonction de l'attribution (voir ci-dessus).                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| **Actualiser le titre de l'objet** | Le titre de l'objet doit-il être actualisé par l'importation ?                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |

Kategorien die für JDisc erstellt wurden sind:

Les catégories créées pour JDisc sont :

* [Custom Identifier](../grundlagen/kategorien-und-attribute.md)
* [JDisc Custom Attributes](../grundlagen/kategorien-und-attribute.md)
* [JDisc Discovery](../grundlagen/kategorien-und-attribute.md)
* [JDisc Geräte Informationen](../grundlagen/kategorien-und-attribute.md)
* [Netzwerk → Verbindungs Endpunkte](../grundlagen/kategorien-und-attribute.md)
* [Subscriptions](../grundlagen/kategorien-und-attribute.md)
* [Support Entitlements](../grundlagen/kategorien-und-attribute.md)
* [Zugewiesene Abonnente](../grundlagen/kategorien-und-attribute.md)

* [Custom Identifier](../bases/catégories-et-attributs.md)
* [JDisc Custom Attributes](../bases/catégories-et-attributs.md)
* [JDisc Discovery](../bases/catégories-et-attributs.md)
* [Informations sur les périphériques JDisc](../bases/catégories-et-attributs.md)
* [Terminaux de connexion réseau →](../bases/catégories-et-attributs.md)
* [Subscriptions](../bases/catégories-et-attributs.md)
* [Support Entitlements](../bases/catégories-et-attributs.md)
* [Abonnés assignés](../bases/catégories-et-attributs.md)

### Custom identifier

### Identifiant personnalisé

!!! attention "Matching Regel"
    Die `devideid` aus JDisc wird immer für die Identifizierung von Objekten verwendet.

! !! attention "règle de correspondance".
    Le `devideid` de JDisc est toujours utilisé pour l'identification des objets.

JDisc `deviceid` soll bei Anlage des Objekts in der **Custom identifier** Kategorie mit type JDisc zugeordnet werden. Hierher sollen die Objekte im nach hinein dann auch identifiziert werden.
Wenn keine Daten vorhanden sind wird auf das Objekt-Matching Profil zurück gegriffen.

JDisc `deviceid` doit être attribué au type JDisc lors de la création de l'objet dans la catégorie **Custom identifier**. Les objets doivent ensuite être identifiés dans cette catégorie.
Si aucune donnée n'est disponible, le profil de correspondance des objets sera utilisé.

## Import von Daten über die Web GUI

## Importation de données via l'interface utilisateur Web

Der Import von Inhalten aus JDisc erfolgt über **Extras → CMDB → Import → JDisc**.

L'importation de contenus depuis JDisc se fait via **Extras → CMDB → Importation → JDisc**.

[![JDisc Import GUI](../assets/images/de/daten-konsolidieren/jdisc/3-jdisc.png)](../assets/images/de/daten-konsolidieren/jdisc/3-jdisc.png)

[ ![JDisc Import GUI](../assets/images/fr/consolidation des données/jdisc/3-jdisc.png)](../assets/images/fr/consolidation des données/jdisc/3-jdisc.png)

Vor dem Ausführen des Imports müssen die Import-Parameter festlegt sein.<br>
Da es möglich ist, dass mehr als ein JDisc-Server eingesetzt wird, muss im ersten Schritt der JDisc-Server ausgewählt werden. Das Profil, welches zuvor definiert wurde, kann ebenfalls gewählt werden um die importierten Inhalte und deren Handhabung zu beeinflussen. Zusätzlich kann der Modus des Imports angegeben werden. Der Import-Modus **Erstellen** wird alle gefundenen Objekte erstellen, ohne zu prüfen, ob diese bereits existieren. Der Import-Modus **Aktualisieren** wird nur Objekte erstellen, die im i-doit-Datenbestand nicht gefunden werden. Kategorien von bereits existierenden Objekten werden (wenn nötig) um neue Daten ergänzt. Der Import-Modus **Überschreiben** verhält sich im Prinzip wie der Modus **Aktualisieren** mit dem Unterschied, dass Listen-Kategorien erst geleert und dann neu angelegt werden.

Avant d'effectuer l'importation, les paramètres d'importation doivent être définis.
Comme il est possible d'utiliser plus d'un serveur JDisc, la première étape consiste à sélectionner le serveur JDisc. Le profil défini précédemment peut également être sélectionné pour influencer le contenu importé et sa manipulation. De plus, le mode d'importation peut être indiqué. Le mode d'importation **Créer** créera tous les objets trouvés, sans vérifier s'ils existent déjà. Le mode d'importation **Mise à jour** ne créera que les objets qui ne sont pas trouvés dans la base de données i-doit. Les catégories d'objets déjà existants seront complétées (si nécessaire) par de nouvelles données. Le mode d'importation **Ecraser** se comporte en principe comme le mode **Mettre à jour**, à la différence que les catégories de listes sont d'abord vidées puis recréées.

| **Import Modus**                       | **Beschreibung**                                                                                                                                                                                       |
| -------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Erstellen**                          | Der Import-Modus **"Erstellen"** wird alle gefundenen Objekte erstellen, ohne zu prüfen, ob diese bereits existieren.                                                                                  |
| **Aktualisieren**                      | Der Import-Modus **"Aktualisieren"** wird nur Objekte erstellen, die in i-doit nicht gefunden werden konnten. Kategorien von bereits existierenden Objekten werden (wenn nötig) um neue Daten ergänzt. |
| **Aktualisieren (Neu inventarisiert)** | Mit dem Zusatz **"(Neu inventarisiert)"** wird die `Custom identifier` Kategorie gelöscht und feste i-doit-zu-jdisc-device Verknüpfungen verworfen und die Objektzugehörigkeiten neu errechnet.        |
| **Erstelle nur neu gescannte Geräte**  | Der Modus "**Erstelle nur neu gescannte Geräte**" erstellt nur Objekte die nicht in i-doit existieren.                                                                                                 |
| **Überschreiben**                      | Der Import-Modus **"Überschreiben"** verhält sich genauso wie der Modus "Aktualisieren" mit dem Unterschied, das Listen-Kategorien erst geleert und dann neu angelegt werden.                          |
| **Überschreiben (Neu inventarisiert)** | Mit dem Zusatz **"(Neu inventarisiert)"** wird die `Custom identifier` Kategorie gelöscht und feste i-doit-zu-jdisc-device Verknüpfungen verworfen und die Objektzugehörigkeiten neu errechnet.        |

| **Mode d'importation** | **Description** |
| -------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Créer** | Le mode d'importation **"Créer "** créera tous les objets trouvés sans vérifier s'ils existent déjà.                                                                                  |
| Le mode d'importation **"Actualiser "** ne créera que les objets qui n'ont pas été trouvés dans i-doit. Les catégories d'objets déjà existants seront complétées (si nécessaire) par de nouvelles données. |
| **Mettre à jour (Nouvel inventaire)** | Avec l'ajout **"(Nouvel inventaire) "**, la catégorie `Custom identifier` est supprimée et les liens fixes i-doit-vers-jdisc-device sont rejetés et les appartenances d'objets recalculées.        |
| Le mode "**Créer uniquement des appareils nouvellement scannés**" ne crée que des objets qui n'existent pas dans i-doit.                                                                                                 |
| Le mode d'importation **"Ecraser "** se comporte exactement comme le mode "Actualiser", à la différence que les catégories de listes sont d'abord vidées, puis recréées.                          |
| Avec l'ajout **"(Réinventé) "**, la catégorie `Custom identifier` est supprimée, les liens fixes i-doit-vers-jdisc-device sont annulés et les appartenances d'objets recalculées.        |

In der Protokollierung kann der Umfang der geschriebenen Logs beeinflusst werden. Ein umfangreicheres Logging erhöht die Dauer des Imports.<br>
Wenn die Einstellungen vollständig vorgenommen wurden, kann der Import über **Importvorgang starten** angestoßen werden. Bitte beachte, dass die Dauer des Imports sowohl von der Größe der JDisc-Datenbank, als auch von der verwendeten Hardware abhängig ist.<br>
Wenn der Import abgeschlossen wurde, wird eine Zusammenfassung im Bereich **Ergebnis** angezeigt.<br>
Beim Import erzeugte Logs findest du im i-doit-Verzeichnis `log/`.

Dans la journalisation, il est possible d'influencer la taille des logs écrits. Une journalisation plus importante augmente la durée de l'importation.
Une fois les réglages terminés, l'importation peut être lancée en cliquant sur **Lancer l'importation**. Veuillez noter que la durée de l'importation dépend à la fois de la taille de la base de données JDisc et du matériel utilisé.<br>
Lorsque l'importation est terminée, un résumé est affiché dans la section **Résultats**.
Tu trouveras les logs générés lors de l'importation dans le répertoire i-doit `log/`.

## Import über die Kategorie JDisc Discovery

## Importation via la catégorie JDisc Discovery

Über die Kategorie JDisc Discovery können Sie einzelne Objekte aktualisieren.
Hier besteht die Möglichkeit, das Gerät über eine bestimmte Identifikation zu scannen (Hostadresse, FQDN und Seriennummer).

La catégorie JDisc Discovery permet de mettre à jour des objets individuels.
Il est ici possible de scanner l'appareil via une identification spécifique (adresse de l'hôte, FQDN et numéro de série).

[![JDisc Profile](../assets/images/de/daten-konsolidieren/jdisc/6-jdisc.jpg)](../assets/images/de/daten-konsolidieren/jdisc/6-jdisc.jpg)

[ ![JDisc Profile](../assets/images/fr/consolidation des données/jdisc/6-jdisc.jpg)](../assets/images/fr/consolidation des données/jdisc/6-jdisc.jpg)

Die Kategorie können Sie über die Objekttyp Konfiguration des Objekttyps hinzufügen.

Vous pouvez ajouter la catégorie via la configuration du type d'objet du type d'objet.

## Import über die i-doit Console

## Importation via la console i-doit

Der Import der Daten aus JDisc nach i-doit ist nicht nur manuell über die Oberfläche möglich. Er kann ebenfalls über die i-doit [Console](../automatisierung-und-integration/cli/console/index.md) ausgeführt und somit **automatisiert** werden. Wie der entsprechende Aufruf erzeugt wird, finden Sie im [zugehörigen Artikel](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#import-jdisc) mit einem Beispiel für die Option **import-jdisc**.

L'importation des données de JDisc dans i-doit n'est pas seulement possible manuellement via l'interface. Il peut également être effectué via la [Console](../automatisation-et-intégration/cli/console/index.md) d'i-doit et ainsi **automatisé**. Vous trouverez dans [l'article correspondant](../automatisation-et-intégration/cli/console/options-et-paramètres-de-la-console.md#import-jdisc) comment générer l'appel correspondant, avec un exemple pour l'option **import-jdisc**.

Für den Import lässt sich die ID des gewünschten Profils angeben. Die ID ist in der Liste der Profile zu finden:

Pour l'importation, il est possible d'indiquer l'ID du profil souhaité. L'ID se trouve dans la liste des profils :

[![JDisc Profile](../assets/images/de/daten-konsolidieren/jdisc/4-jdisc.png)](../assets/images/de/daten-konsolidieren/jdisc/4-jdisc.png)

[ ![JDisc Profile](../assets/images/fr/consolidation des données/jdisc/4-jdisc.png)](../assets/images/fr/consolidation des données/jdisc/4-jdisc.png)

Ebenfalls kann die ID des zu verwendenden JDisc Servers angegeben werden. Diese ist in der Konfiguration zu finden:

Il est également possible d'indiquer l'ID du serveur JDisc à utiliser. Celui-ci se trouve dans la configuration :

[![JDisc Konfiguration](../assets/images/de/daten-konsolidieren/jdisc/5-jdisc.png)](../assets/images/de/daten-konsolidieren/jdisc/5-jdisc.png)

[ ![Configuration JDisc](../assets/images/fr/consolidation des données/jdisc/5-jdisc.png)](../assets/images/fr/consolidation des données/jdisc/5-jdisc.png)

Eine jdisc.ini könnte so aussehen mehr Informationen zu .ini Dateien sind [hier](../automatisierung-und-integration/cli/console/verwendung-von-konfigurationsdateien-fuer-console-commands.md) zu finden.

Un jdisc.ini pourrait ressembler à ceci. Pour plus d'informations sur les fichiers .ini, voir [ici](../automatisation-et-intégration/cli/console/utilisation-de-fichiers-de-configuration-pour-commandes-console.md).

```ini
[commandArguments]
[commandOptions]
user=admin
password=admin
tenantId=6
profile=1
group=
mode=1
server=2
overwriteHost
detailedLogging=3
regenerateSearchIndex
[additional]
```

Aufruf aus dem i-doit Verzeichnis:

Appel depuis le répertoire i-doit :

```shell
sudo -u www-data php console.php import-jdisc -c jdisc.ini
```