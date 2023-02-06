Wir liefern unsere Appliance im OVF Format zusammen mit einem virtuellen VMDK Festplatten Image aus. Um diese in eine Hyper-V Umgebung zu importieren muss die virtuelle Festplatte im ersten Schritt aus dem VMDK Format in das VHD Format umgewandelt werden.

Hierfür können Sie das freie Tool „Starwind Converter“ verwenden welches Sie unter dem folgenden Download Link herunterladen können:

[https://www.starwindsoftware.com/tmplink/starwindconverter.exe](https://www.starwindsoftware.com/tmplink/starwindconverter.exe)

Wir haben die i-doit Appliance bereits heruntergeladen und unter c:\\i-doit\_appliance entpackt:

[![Appliance-Files](../../assets/images/de/installation/virtual-appliance/hyper-v/1.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/1.png)

Nach der Installation des Starwind Converters starten wir diesen und wählen wir als Quelle „Local File“ aus und gehen auf „Next“ :

[![Appliance-local-files](../../assets/images/de/installation/virtual-appliance/hyper-v/2.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/2.png)

Nun wählen wir das VMDK Image aus der ZIP Datei der i-doit Appliance aus und gehen auf „Next“:

[![Appliance-Next](../../assets/images/de/installation/virtual-appliance/hyper-v/3.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/3.png)

Danach können wir das Zielformat für das Virtual Harddrive wählen und gehen auf „Next“:

[![Appliance-Next-2](../../assets/images/de/installation/virtual-appliance/hyper-v/4.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/4.png)

Im nächsten Schritt können wir das Ziel für die neue VDH Festplatte und ihren Ordner auswählen und gehen auf „Next“:

[![Appliance-Next-3](../../assets/images/de/installation/virtual-appliance/hyper-v/5.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/5.png)

Nun findet die Konvertierung statt und nach Abschluss können wir das Programm verlassen:

[![Appliance-Finish](../../assets/images/de/installation/virtual-appliance/hyper-v/6.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/6.png)

Im nächsten Schritt können wir die konvertierte Festplatte in eine neue Hyper-V Maschine integrieren.

Hierfür starten wir den Hyper-V Assistenten für neue virtuelle Computer und geben den Ordner zur neu erstellten VDH an:

[![Appliance-New-VM](../../assets/images/de/installation/virtual-appliance/hyper-v/7.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/7.png)

Danach wählen wir die Generation für die neue virtuelle Maschine:

[![Appliance-Generation](../../assets/images/de/installation/virtual-appliance/hyper-v/8.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/8.png)

Geben dieser Ausreichend Arbeitsspeicher ( [Systemvoraussetzungen](../systemvoraussetzungen.md) ) :

[![Appliance-RAM](../../assets/images/de/installation/virtual-appliance/hyper-v/9.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/9.png)

Weisen das entsprechende Netzwerk zu:

[![Appliance-Network](../../assets/images/de/installation/virtual-appliance/hyper-v/10.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/10.png)

Und verbinden in diesem Schritt das konvertierte Festplatten Image:

[![Appliance-Image](../../assets/images/de/installation/virtual-appliance/hyper-v/11.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/11.png)
  

Danach können wir die Einrichtung abschließen und die virtuelle Maschine starten:

[![Appliance-Finish-2](../../assets/images/de/installation/virtual-appliance/hyper-v/12.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/12.png)

Die virtuelle Maschine sollte nun Ordnungsgemäß starten und Sie sollten sich mit den mitgelieferten Benutzer Daten anmelden können:

| **Login** | **Username** | **Passwort** |
| --- | --- | --- |
| Console Login | idoitadm | idoit |
| i-doit Login | admin | admin |
| Admin Center Login | admin | idoit |