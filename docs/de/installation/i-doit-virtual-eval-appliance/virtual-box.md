# Die i-doit virtual Appliance mit Hilfe von VirtualBox (Oracle) in Betrieb nehmen

[![Appliance Download](../../assets/images/de/installation/virtual-appliance/virtual-box/download.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/download.png)

## Grundlagen

In dem von uns bereitgestellten Paket befindet sich eine virtuelle Maschine im **OVF Format**.

[![Files extracted](../../assets/images/de/installation/virtual-appliance/virtual-box/extracted.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/extracted.png)

!!! tip ""
    Das OVF (Open Virtualization Format) ist ein offener Standard für den Austausch von virtuellen Maschinen (VMs) und bietet eine plattformunabhängige, effiziente, sichere und offene Methode zum Verpacken und Bereitstellen von virtuellen Maschinen. Es wurde von der Distributed Management Task Force (DMTF) entwickelt.

Um das Paket nutzen zu können, benötigen Sie eine virtuelle Umgebung, in die Sie dieses importieren können. Die meisten Unternehmen betreiben hier virtuelle Umgebungen mit z.B. VMware vSphere oder Microsoft Hyper-V.

Sollten Sie noch keine virtuelle Umgebung in Ihrem Unternehmen im Einsatz haben, können Sie für die  Evaluierung unserer Software aber auch eine der freien verfügbaren Lösungen nutzen.

## Schritt 1 - Virtual Box herunterladen und installieren

In diesem Artikel verwenden wir hierfür das kostenlose Produkt VirtualBox von Oracle, welches Sie sich hier: <https://www.virtualbox.org/wiki/Downloads> herunterladen können.

Nach dem Download können Sie die Installation von VirtualBox starten:

[![Oracle installer](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.png)

Die Optionen der Installation können Sie jeweils bei den Standardeinstellungen belassen und die Abfragen mit Weiter/Ja bestätigen bis die Installation abgeschlossen ist:

[![Installation features](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.1.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.1.png)

[![Installieren](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.2.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.2.png)

[![Status](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.3.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.3.png)

[![Fertig stellen](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.4.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.4.png)

## Schritt 2 - Virtuelle Maschine importieren

Wenn Sie die Virtual-Appliance schon heruntergeladen haben, entpacken Sie das ZIP Paket auf Ihrem Rechner.

Starten Sie nun VirtualBox und gehen auf die Schaltfläche Importieren:

[![VirtualBox dashboard](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.1.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.1.png)

Und wählen dort die Datei **appliance-eval**, aus dem entpackten Zip Archiv aus:

[![Wähle Datei](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.2.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.2.png)

Wenn Sie wollen können Sie nun noch den Ordner verändern in dem die virtuelle Maschine abgelegt werden soll:

[![Starte Import](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.3.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.3.png)

[![Appliance Einstellungen](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.4.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.4.png)

Die i-doit Eval Appliance ist nun einsatzbereit und kann über die Schaltfläche "Starten" hochgefahren werden:

[![Appliance Start](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.5.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.5.png)

Nach dem Starten können Sie über die Schaltfläche "Zeigen" auf den Ausgabebildschirm der virtuellen Maschine wechseln:

[![Appliance Zeigen](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.6.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.6.png)

Die dort angezeigten Informationen zeigen Ihnen auch unter welcher IP Adresse und mit welchem Benutzer Sie sich das erste mal mit Ihrem Browser bei Ihrer i-doit Installation anmelden können:

[![Appliance Shell](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.7.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.7.png)

Der Standardbenutzer ist hier Admin mit dem Passwort Admin:

[![Zugangsdaten](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.8.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.8.png)

Ihr Browser sollte Ihnen unter der angegebenen IP Adresse im Browser den Start Bildschirm mit der Anmeldemaske von i-dot anzeigen:

[![i-doit login](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.9.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.9.png)
