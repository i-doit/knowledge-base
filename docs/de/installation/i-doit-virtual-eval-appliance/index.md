# i-doit Virtual Eval Appliance

synetics stellt eine voll funktionstüchtige Appliance von i-doit zur Verfügung. Diese kann als virtuelle Maschine heruntergeladen werden.

Diese virtuelle Appliance bringt den Vorteil, dass man möglichst schnell die Funktionen von i-doit evaluieren kann. Man benötigt weder Kenntnisse zum darunter liegenden [LAMP Stack](../index.md), noch muss man die Software installieren, sondern kann gleich mit einem fertigen Grundgerüst starten.

!!! attention "Nur zu Testzwecken"
    Die Appliance dient ausschließlich zu Testzwecken und sollte nicht als Produktivsystem eingesetzt werden.

## Download

Die Appliance steht während des Evaluierungsprozesses zum kostenfreien Download bereit. Um sie mit einer gültigen Testlizenz anzufordern, ist das Formular zur ["On Premise Testversion" auf der Website i-doit.com](https://www.i-doit.com/testversion/) auszufüllen.

## Starten

Der Download kommt als gewöhnliche ZIP-Datei, die nach dem Herunterladen zu entpacken ist. Sie enthält eine OVF-Datei, die in gängige Virtualisierungs-Umgebungen importiert werden kann.

Beim Importieren werden eventuell Einstellungen abgefragt (Name, CPU-Kerne, Arbeitsspeicher). Die Vorgaben können ohne Probleme übernommen werden. Sollten sie jedoch abgeändert werden, ist es sehr wahrscheinlich, dass auch die [Einstellungen](../manuelle-installation/systemeinstellungen.md) von MariaDB und PHP angepasst werden müssen. Wichtig ist ebenfalls, die [Systemvoraussetzungen](../systemvoraussetzungen.md) nicht zu unterschreiten.

[![Appliance-Einstellungen](../../assets/images/de/installation/virtual-appliance/import/vm_import.png)](../../assets/images/de/installation/virtual-appliance/import/vm_import.png)

!!! info "Betriebssystem"
    Beim installierten Betriebssystem handelt es sich um **[Debian GNU/Linux](../manuelle-installation/debian/index.md)** **10 buster** in der 64-bit-Variante. Wenn der Virtualisierer dies nicht automatisch erkennt, sollte dies unbedingt manuell angegeben werden. Andernfalls kann es zu Problemen beim Start und Ausführen der VM kommen.

## i-doit aufrufen

Die VM versucht beim ersten Start, eine IP-Adresse via DHCP zu erhalten und zeigt diese auf der Konsole. Ruft man die IP-Adresse im Browser auf, lädt die Web GUI von i-doit.

Die IP-Adresse kann über die Konsole konfiguriert werden (siehe weiter unten).

## Zugangsdaten

| Tool                                                        | Benutzername   | Passwort       |
| ----------------------------------------------------------- | -------------- | -------------- |
| i-doit Web GUI                                              | **admin**      | **admin**      |
| i-doit Web GUI                                              | **controller** | **controller** |
| [i-doit Admin-Center](../../administration/admin-center.md) | **admin**      | **idoit**      |
| SSH                                                         | **idoitadm**   | **idoit**      |
| MySQL (i-doit)                                              | **idoit**      | **idoit**      |
| MySQL (Systemuser)                                          | **root**       | **idoit**      |

Weiterhin existieren [die vordefinierten Personen- und Personengruppen](../../grundlagen/erstanmeldung.md) in i-doit.

## Konfiguration

Die Konfiguration der Appliance kann auf der Konsole erledigt werden. Nach dem Anmelden via SSH erscheint ein Menü:

[![Appliance-Konfiguration](../../assets/images/de/installation/virtual-appliance/import/appliance_menu.png)](../../assets/images/de/installation/virtual-appliance/import/appliance_menu.png)

| Shortcut | Menüpunkt                                | Funktion                                                                                                                                                                                  |
| -------- | ---------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **1**    | **Configure networking**                 | Netzwerkanbindung festlegen; die Netzwerkkonfiguration ist per Default auf DHCP gesetzt.                                                                                                  |
| **2**    | **Proxy configuration**                  | HTTP Proxy für das System angeben                                                                                                                                                         |
| **3**    | **E-Mail configuration**                 | E-Mail-Einstellungen                                                                                                                                                                      |
| **4**    | **Timezone**                             | Zeitzone einstellen                                                                                                                                                                       |
| **5**    | **Keyboard layout**                      | Tastatur-Belegung; de ist als Standard definiert                                                                                                                                          |
| **6**    | **Change idoitadm user password**        | Passwort vom User **idoitadm** ändern                                                                                                                                                     |
| **7**    | **i-doit scripting configuration  <br>** | Einstellungen für CLI, [Cron Jobs](../../wartung-und-betrieb/cronjobs-einrichten.md), [Backups und Restore](../../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) ändern |
| **8**    | **Reboot system**                        | System neustarten                                                                                                                                                                         |
| **9**    | **Shutdown system**                      | System herunterfahren                                                                                                                                                                     |
| **0**    | **Launch shell**                         | Shell öffnen für weitere Aktionen                                                                                                                                                         |
| **A**    | **Logout**                               | Den User **idoitadm** vom System abmelden                                                                                                                                                 |

## Scripte und Cronjobs

Die Appliance verfügt über diverse Scripte und Cronjobs.

| Script        | Zweck                      |
| ------------- | -------------------------- |
| **idoit**     | i-doit CLI                 |
| idoit-backup  | Backup manuell ausführen   |
| idoit-restore | Restore ausführen          |
| idoit-jobs    | Cronjobs manuell ausführen |

Die Scripte befinden sich unter **/usr/local/bin/**.

Unter **/etc/cron.d/i-doit** existieren vorkonfigurierte [Cronjobs](../../automatisierung-und-integration/cli/index.md), die das System regelmäßig optimieren.

Jede Nacht werden die Daten von i-doit lokal gesichert. Der Speicherzeitraum beträgt eine Woche.

## Verzeichnisse

Wo ist was zu finden?

| Verzeichnis         | Zweck                               |
| ------------------- | ----------------------------------- |
| /var/www/html/      | Installationsverzeichnis von i-doit |
| /etc/apache2/       | Konfiguration des Apache Webservers |
| /etc/php/8.x/       | Konfiguration von PHP               |
| /etc/mysql/         | Konfiguration von MariaDB           |
| /var/log/apache2/   | Logs vom Apache Webserver           |
| /var/backups/i-doit | Backups                             |

## Nachbereitung

Die Appliance stellt eine "nackte" Installation von i-doit zur Verfügung. Das bedeutet, es sind weder Demodaten, noch zusätzliche [i-doit Add-ons](../../i-doit-pro-add-ons/index.md) enthalten.

Beim ersten Anmelden fragt i-doit nach einer gültigen [Lizenz](../../wartung-und-betrieb/lizenz-aktivieren.md), die eingespielt werden muss, damit alle Funktionen zur Verfügung stehen.

Weitere erste Schritte mit i-doit sind ebenfalls in der Knowledge Base unter [Grundlagen](../../grundlagen/index.md) beschrieben.

## Troubleshooting

!!! attention "Connection refused"
    Wird beim Aufruf von i-doit die Fehlermeldung
    ```
    mysqli_connect(): (HY000/2002): Connection refused (/var/www/html/src/classes/components/isys_component_database_mysqli.class.php:16)
    ```
    ausgegeben, ist der MySQL-Dienst vermutlich nicht gestartet. Das hängt in der Regel damit zusammen, dass die virtuelle Hardware der Appliance verändert wurde, ohne die Konfigurationen anzupassen. Hier müssen entweder die Einstellungen der virtuellen Maschine zurück auf die mitgelieferten Werte gesetzt und die Maschine neu gestartet werden oder die Konfiguration unter **/etc/mysql/mariadb.conf.d/99-i-doit.cnf** angepasst werden, sodass die Hardware dafür ausreicht und der MySQL-Dienst wieder mit **systemctl start mysql** gestartet werden kann.

!!! attention "VM startet nicht"
    Sollte die VM nicht starten, liegt dies wahrscheinlich an ungenügenden oder inkompatiblen Einstellungen im Virtualisierer. Die gängigen Virtualisierer liefern oftmals hilfreiche Hinweise. Beispielsweise ist darauf zu achten, das richtige Betriebssystem in der korrekten Variante anzugeben: Debian GNU/Linux 64-bit.

!!! attention "Unsupported hardware family"
    Wenn die eingesetzte VMware-Umgebung nicht aktuell ist, erscheint beim Import die Fehlermeldung **line 25 unsupported hardware family 'vmx-10'**. Um dennoch importieren zu können, muss die Datei **i-doit Eval Appliance 1.2.x i-doit 1.x.x.ovf** editiert werden. In der Zeile
    ```
    <vssd:VirtualSystemType>vmx-10</vssd:VirtualSystemType>
    ```
    muss eine niedrigere Version gewählt werden. Für ESXi 5.1 passt der Wert **vmx-9**:
    ```
    <vssd:VirtualSystemType>vmx-9</vssd:VirtualSystemType>
    ```
    Nach dem Speichern muss der Hash-Wert (SHA1) der geänderten Datei in der Datei **i-doit Eval Appliance 1.x.x i-doit 1.x.x.mf** aktualisiert werden. Unter GNU/Linux kann der Befehl **sha1sum** verwendet werden:
    ```
    sha1sum i-doit Eval Appliance 1.2.x i-doit 1.x.x.ovf
    ```

!!! attention "VSphere < 6.5.0"
    Unsere Virtual Appliance wird aus Sicherheitsgründen mit einem SHA265 Hash verschlüsselt.
    Leider unterstützt vSphere dies erst ab der Version 6.5.0.
    [Hier](https://kb.vmware.com/s/article/2151537) finden Sie den offiziellen Eintrag von VMware.
    Dort wird auch beschrieben, wie Sie bei Versionen vor vSphere Version 6.5.0 mit virtuelle Maschinen welche einen SHA265 Hash nutzen arbeiten können.
