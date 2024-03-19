<!-- TRANSLATED by md-translate -->
# i-doit Virtual Eval Appliance

# i-doit Virtual Eval Appliance

synetics stellt eine voll funktionstüchtige Appliance von i-doit pro zur Verfügung. Diese kann als virtuelle Maschine heruntergeladen werden.

synetics met à disposition une appliance d'i-doit pro entièrement fonctionnelle. Celle-ci peut être téléchargée en tant que machine virtuelle.

Diese virtuelle Appliance bringt den Vorteil, dass man möglichst schnell die Funktionen von i-doit pro evaluieren kann. Man benötigt weder Kenntnisse zum darunter liegenden [LAMP Stack](../index.md), noch muss man die Software installieren, sondern kann gleich mit einem fertigen Grundgerüst starten.

Cette appliance virtuelle présente l'avantage de pouvoir évaluer le plus rapidement possible les fonctions d'i-doit pro. Il n'est pas nécessaire d'avoir des connaissances sur la [pile LAMP](../index.md) sous-jacente, ni d'installer le logiciel, mais on peut tout de suite démarrer avec une structure de base prête à l'emploi.

!!! attention "Nur zu Testzwecken"

! !! attention "À des fins de test uniquement"

```
Die Appliance dient ausschließlich zu Testzwecken und sollte nicht als Produktivsystem eingesetzt werden.
```

## Download

## Téléchargement

Die Appliance steht während des Evaluierungsprozesses zum kostenfreien Download bereit. Um sie mit einer gültigen Testlizenz anzufordern, ist das Formular zur ["On Premise Testversion" auf der Website i-doit.com](https://www.i-doit.com/testversion/) auszufüllen.

L'appliance est disponible en téléchargement gratuit pendant le processus d'évaluation. Pour la demander avec une licence d'évaluation valide, il faut remplir le formulaire de ["Version d'évaluation sur site" sur le site i-doit.com](https://www.i-doit.com/testversion/).

## Starten

## Démarrer

Der Download kommt als gewöhnliche ZIP-Datei, die nach dem Herunterladen zu entpacken ist. Sie enthält eine OVF-Datei, die in gängige Virtualisierungs-Umgebungen importiert werden kann.

Le téléchargement se présente sous la forme d'un fichier ZIP ordinaire, qui doit être décompressé après le téléchargement. Il contient un fichier OVF qui peut être importé dans les environnements de virtualisation courants.

Beim Importieren werden eventuell Einstellungen abgefragt (Name, CPU-Kerne, Arbeitsspeicher). Die Vorgaben können ohne Probleme übernommen werden. Sollten sie jedoch abgeändert werden, ist es sehr wahrscheinlich, dass auch die [Einstellungen](../manuelle-installation/systemeinstellungen.md) von MariaDB und PHP angepasst werden müssen. Wichtig ist ebenfalls, die [Systemvoraussetzungen](../systemvoraussetzungen.md) nicht zu unterschreiten.

Lors de l'importation, des paramètres sont éventuellement demandés (nom, noyaux CPU, mémoire vive). Les paramètres peuvent être repris sans problème. Cependant, s'ils sont modifiés, il est fort probable que les [paramètres](../installation-manuelle/paramètres-système.md) de MariaDB et PHP doivent également être adaptés. Il est également important de ne pas descendre en dessous de la [configuration système requise](../systemrequirements.md).

[![Appliance-Einstellungen](../../assets/images/de/installation/virtual-appliance/import/vm_import.png)](../../assets/images/de/installation/virtual-appliance/import/vm_import.png)

[ ![Paramètres de l'appliance](../../assets/images/fr/installation/virtual-appliance/import/vm_import.png)](../../assets/images/fr/installation/virtual-appliance/import/vm_import.png)

!!! info "Betriebssystem"

! !! info "système d'exploitation

```
Beim installierten Betriebssystem handelt es sich um **[Debian GNU/Linux](../manuelle-installation/debian.md)** **10 "****buster****" in der 64-bit-Variante**. Wenn der Virtualisierer dies nicht automatisch erkennt, sollte dies unbedingt manuell angegeben werden. Andernfalls kann es zu Problemen beim Start und Ausführen der VM kommen.
```

## i-doit aufrufen

## Appeler i-doit

Die VM versucht beim ersten Start, eine IP-Adresse via DHCP zu erhalten und zeigt diese auf der Konsole. Ruft man die IP-Adresse im Browser auf, lädt die Web GUI von i-doit.

Au premier démarrage, la VM tente d'obtenir une adresse IP via DHCP et l'affiche sur la console. Si l'on appelle l'adresse IP dans le navigateur, l'interface utilisateur Web d'i-doit se charge.

Die IP-Adresse kann über die Konsole konfiguriert werden (siehe weiter unten).

L'adresse IP peut être configurée via la console (voir plus loin).

## Zugangsdaten

## Données d'accès

| Tool | Benutzername | Passwort |
| --- | --- | --- |
| i-doit Web GUI | **admin** | **admin** |
| i-doit Web GUI | **controller** | **controller** |
| [i-doit Admin-Center](../../administration/admin-center.md) | **admin** | **idoit** |
| SSH | **idoitadm** | **idoit** |
| MySQL (i-doit) | **idoit** | **idoit** |
| MySQL (Systemuser) | **root** | **idoit** |

| outil | nom d'utilisateur | mot de passe |
| --- | --- | --- |
| i-doit Web GUI | **admin** | **admin** |
| i-doit Web GUI | **controller** | **controller** |
| [i-doit Admin-Center](../../administration/admin-center.md) | **admin** | **idoit** |
| SSH | **idoitadm** | **idoit** |
| MySQL (i-doit) | **idoit** | **idoit** |
| MySQL (utilisateur système) | **root** | **idoit** |

Weiterhin existieren [die vordefinierten Personen- und Personengruppen](../../grundlagen/erstanmeldung.md) in i-doit.

En outre, [les groupes de personnes et de personnes prédéfinis](../../grundlagen/erstanmeldung.md) existent dans i-doit.

## Konfiguration

## Configuration

Die Konfiguration der Appliance kann auf der Konsole erledigt werden. Nach dem Anmelden via SSH erscheint ein Menü:

La configuration de l'appliance peut être effectuée sur la console. Après s'être connecté via SSH, un menu s'affiche :

[![Appliance-Konfiguration](../../assets/images/de/installation/virtual-appliance/import/appliance_menu.png)](../../assets/images/de/installation/virtual-appliance/import/appliance_menu.png)

[ ![Configuration de l'appliance](../../assets/images/fr/installation/virtual-appliance/import/appliance_menu.png)](../../assets/images/fr/installation/virtual-appliance/import/appliance_menu.png)

| Shortcut | Menüpunkt | Funktion |
| --- | --- | --- |
| **1** | **Configure networking** | Netzwerkanbindung festlegen; die Netzwerkkonfiguration ist per Default auf DHCP gesetzt. |
| **2** | **Proxy configuration** | HTTP Proxy für das System angeben |
| **3** | **E-Mail configuration** | E-Mail-Einstellungen |
| **4** | **Timezone** | Zeitzone einstellen |
| **5** | **Keyboard layout** | Tastatur-Belegung; de ist als Standard definiert |
| **6** | **Change idoitadm user password** | Passwort vom User **idoitadm** ändern |
| **7** | **i-doit scripting configuration  <br>** | Einstellungen für CLI, [Cron Jobs](../../wartung-und-betrieb/cronjobs-einrichten.md), [Backups und Restore](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) ändern |
| **8** | **Reboot system** | System neustarten |
| **9** | **Shutdown system** | System herunterfahren |
| **0** | **Launch shell** | Shell öffnen für weitere Aktionen |
| **A** | **Logout** | Den User **idoitadm** vom System abmelden |

| raccourci | élément de menu | fonction |
| --- | --- | --- |
| **1** | **Configure networking** | Définir la connexion au réseau ; la configuration du réseau est réglée par défaut sur DHCP. |
| **2** | **Proxy configuration** | Spécifier le proxy HTTP pour le système |
| **3** | **E-Mail configuration** | Paramètres de courrier électronique |
| **4** | **Timezone** | Configurer le fuseau horaire |
| **5** | **Keyboard layout** | Disposition du clavier ; de est défini comme standard |
| **6** | **Change idoitadm user password** | Changer le mot de passe de l'utilisateur **idoitadm** |
| **7** | **i-doit scripting configuration <br>** | Changer les paramètres pour CLI, [Cron jobs](../../maintenance-et-opération/cronjobs-configuration.md), [Backups and Restore](../../maintenance-et-opération/data-safe-et-restauration/index.md) |
| **8** | **Reboot system** | Redémarrer le système |
| **9** | **Shutdown system** | Arrêter le système |
| **0** | **Launch shell** | Ouvrir le shell pour d'autres actions |
| **A** | **Logout** | Déconnecter l'utilisateur **idoitadm** du système |

## Scripte und Cronjobs

## Scripts et tâches Cron

Die Appliance verfügt über diverse Scripte und Cronjobs.

L'appliance dispose de divers scripts et de tâches cron.

| Script | Zweck |
| --- | --- |
| **idoit** | i-doit CLI |
| idoit-backup | Backup manuell ausführen |
| idoit-restore | Restore ausführen |
| idoit-jobs | Cronjobs manuell ausführen |

| script | but |
| --- | --- |
| **idoit** | i-doit CLI |
| idoit-backup | exécuter manuellement la sauvegarde |
| idoit-restore | exécuter la restauration |
| idoit-jobs | Exécuter manuellement les tâches cron |

Die Scripte befinden sich unter **/usr/local/bin/**.

Les scripts se trouvent sous **/usr/local/bin/**.

Unter **/etc/cron.d/i-doit** existieren vorkonfigurierte [Cronjobs](../../automatisierung-und-integration/cli/index.md), die das System regelmäßig optimieren.

Sous **/etc/cron.d/i-doit**, il existe des [cronjobs] préconfigurés(../../automatisation-et-intégration/cli/index.md) qui optimisent régulièrement le système.

Jede Nacht werden die Daten von i-doit lokal gesichert. Der Speicherzeitraum beträgt eine Woche.

Chaque nuit, les données d'i-doit sont sauvegardées localement. La période de sauvegarde est d'une semaine.

## Verzeichnisse

## Répertoires

Wo ist was zu finden?

Où trouver quoi ?

| Verzeichnis | Zweck |
| --- | --- |
| /var/www/html/ | Installationsverzeichnis von i-doit |
| /etc/apache2/ | Konfiguration des Apache Webservers |
| /etc/php/7.0/ | Konfiguration von PHP |
| /etc/mysql/ | Konfiguration von MariaDB |
| /var/log/apache2/ | Logs vom Apache Webserver |
| /var/backups/i-doit | Backups |

| répertoire | but |
| --- | --- |
| /var/www/html/ | répertoire d'installation d'i-doit |
| /etc/apache2/ | configuration du serveur web Apache |
| /etc/php/7.0/ | configuration de PHP |
| /etc/mysql/ | configuration de MariaDB |
| /var/log/apache2/ | Logs du serveur web Apache |
| /var/backups/i-doit | sauvegardes |

## Nachbereitung

## Suivi

Die Appliance stellt eine "nackte" Installation von i-doit pro zur Verfügung. Das bedeutet, es sind weder Demodaten, noch zusätzliche [i-doit pro Add-ons](../../i-doit-pro-add-ons/index.md) enthalten.

L'appliance met à disposition une installation "nue" d'i-doit pro. Cela signifie qu'elle ne contient ni données de démonstration, ni [i-doit pro Add-ons](../../i-doit-pro-add-ons/index.md) supplémentaires.

Beim ersten Anmelden fragt i-doit nach einer gültigen [Lizenz](../../wartung-und-betrieb/lizenz-aktivieren.md), die eingespielt werden muss, damit alle Funktionen zur Verfügung stehen.

Lors de la première connexion, i-doit demande une [licence] valide(../../maintenance-et-exploitation/activer-licence.md), qui doit être importée pour que toutes les fonctions soient disponibles.

Weitere erste Schritte mit i-doit sind ebenfalls in der Knowledge Base unter [Grundlagen](../../grundlagen/index.md) beschrieben.

D'autres premiers pas avec i-doit sont également décrits dans la base de connaissances sous [Bases](../../bases/index.md).

## Troubleshooting

## Dépannage

!!! attention "Connection refused"

! !! attention "Connexion refusée"

```
Wird beim Aufruf von i-doit die Fehlermeldung

    mysqli_connect(): (HY000/2002): Connection refused (/var/www/html/src/classes/components/isys_component_database_mysqli.class.php:16

ausgegeben, ist der MySQL-Dienst vermutlich nicht gestartet. Das hängt in der Regel damit zusammen, dass die virtuelle Hardware der Appliance verändert wurde, ohne die Konfigurationen anzupassen. Hier müssen entweder die Einstellungen der virtuellen Maschine zurück auf die mitgelieferten Werte gesetzt und die Maschine neu gestartet werden oder die Konfiguration unter **/etc/mysql/mariadb.conf.d/99-i-doit.cnf** angepasst werden, sodass die Hardware dafür ausreicht und der MySQL-Dienst wieder mit **systemctl start mysql** gestartet werden kann.
```

!!! attention "VM startet nicht"

! !! attention "La VM ne démarre pas".

```
Sollte die VM nicht starten, liegt dies wahrscheinlich an ungenügenden oder inkompatiblen Einstellungen im Virtualisierer. Die gängigen Virtualisierer liefern oftmals hilfreiche Hinweise. Beispielsweise ist darauf zu achten, das richtige Betriebssystem in der korrekten Variante anzugeben: Debian GNU/Linux 64-bit.
```

!!! attention "Unsupported hardware family"

! !! attention "Unsupported hardware family" (famille de matériel informatique non sélectionné)

```
Wenn die eingesetzte VMware-Umgebung nicht aktuell ist, erscheint beim Import die Fehlermeldung **line 25 unsupported hardware family 'vmx-10'**. Um dennoch importieren zu können, muss die Datei **i-doit Eval Appliance 1.2.x i-doit 1.x.x.ovf** editiert werden. In der Zeile

    <vssd:VirtualSystemType>vmx-10</vssd:VirtualSystemType>

muss eine niedrigere Version gewählt werden. Für ESXi 5.1 passt der Wert **vmx-9**:

    <vssd:VirtualSystemType>vmx-9</vssd:VirtualSystemType>

Nach dem Speichern muss der Hash-Wert (SHA1) der geänderten Datei in der Datei **i-doit Eval Appliance 1.x.x i-doit 1.x.x.mf** aktualisiert werden. Unter GNU/Linux kann der Befehl **sha1sum** verwendet werden:

    sha1sum i-doit Eval Appliance 1.2.x i-doit 1.x.x.ovf
```

!!! attention "VSphere < 6.5.0"

! !! attention "VSphere < 6.5.0"

```
Unsere Virtual Appliance wird aus Sicherheitsgründen mit einem SHA265 Hash verschlüsselt.

Leider unterstützt vSphere dies erst ab der Version 6.5.0.

[Hier](https://kb.vmware.com/s/article/2151537) finden Sie den offiziellen Eintrag von VMware.

Dort wird auch beschrieben, wie Sie bei Versionen vor vSphere Version 6.5.0 mit virtuelle Maschinen welche einen SHA265 Hash nutzen arbeiten können.
```