<!-- TRANSLATED by md-translate -->
# i-doit Appliance in eine Hyper-V Umgebung importieren

# Importer l'appliance i-doit dans un environnement Hyper-V

Wir liefern unsere Appliance im OVF Format zusammen mit einem virtuellen VMDK Festplatten Image aus. Um diese in eine Hyper-V Umgebung zu importieren muss die virtuelle Festplatte im ersten Schritt aus dem VMDK Format in das VHD Format umgewandelt werden.

Nous livrons notre appliance au format OVF avec une image de disque dur virtuel VMDK. Pour importer celle-ci dans un environnement Hyper-V, la première étape consiste à convertir le disque dur virtuel du format VMDK au format VHD.

Hierfür können Sie das freie Tool "Starwind Converter" verwenden welches Sie unter dem folgenden Download Link herunterladen können:

Pour cela, vous pouvez utiliser l'outil gratuit "Starwind Converter" que vous pouvez télécharger sous le lien de téléchargement suivant :

[https://www.starwindsoftware.com/tmplink/starwindconverter.exe](https://www.starwindsoftware.com/tmplink/starwindconverter.exe)

[https://www.starwindsoftware.com/tmplink/starwindconverter.exe](https://www.starwindsoftware.com/tmplink/starwindconverter.exe)

Wir haben die i-doit Appliance bereits heruntergeladen und unter c:\i-doit_appliance entpackt:

Nous avons déjà téléchargé l'appliance i-doit et l'avons décompressée sous c:\i-doit_appliance :

[![Appliance-Files](../../assets/images/de/installation/virtual-appliance/hyper-v/1.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/1.png)

[ ![Appliance-Files](../../assets/images/fr/installation/virtual-appliance/hyper-v/1.png)](../../assets/images/fr/installation/virtual-appliance/hyper-v/1.png)

Nach der Installation des Starwind Converters starten wir diesen und wählen wir als Quelle "Local File" aus und gehen auf "Next" :

Après l'installation du Starwind Converter, nous le lançons et choisissons comme source "Local File" et nous allons sur "Next" :

[![Appliance-local-files](../../assets/images/de/installation/virtual-appliance/hyper-v/2.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/2.png)

[ ![Appliance-local-files](../../assets/images/fr/installation/virtual-appliance/hyper-v/2.png)](../../assets/images/fr/installation/virtual-appliance/hyper-v/2.png)

Nun wählen wir das VMDK Image aus der ZIP Datei der i-doit Appliance aus und gehen auf "Next":

Maintenant, nous sélectionnons l'image VMDK dans le fichier ZIP de l'appliance i-doit et nous allons sur "Next" :

[![Appliance-Next](../../assets/images/de/installation/virtual-appliance/hyper-v/3.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/3.png)

[ ![Appliance-Next](../../assets/images/fr/installation/virtual-appliance/hyper-v/3.png)](../../assets/images/fr/installation/virtual-appliance/hyper-v/3.png)

Danach können wir das Zielformat für das Virtual Harddrive wählen und gehen auf "Next":

Ensuite, nous pouvons choisir le format cible pour le Virtual Harddrive et aller sur "Next" :

[![Appliance-Next-2](../../assets/images/de/installation/virtual-appliance/hyper-v/4.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/4.png)

[ ![Appliance-Next-2](../../assets/images/fr/installation/virtual-appliance/hyper-v/4.png)](../../assets/images/fr/installation/virtual-appliance/hyper-v/4.png)

Im nächsten Schritt können wir das Ziel für die neue VDH Festplatte und ihren Ordner auswählen und gehen auf "Next":

Dans l'étape suivante, nous pouvons choisir la destination du nouveau disque dur VDH et son dossier, puis aller sur "Next" :

[![Appliance-Next-3](../../assets/images/de/installation/virtual-appliance/hyper-v/5.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/5.png)

[ ![Appliance-Next-3](../../assets/images/fr/installation/virtual-appliance/hyper-v/5.png)](../../assets/images/fr/installation/virtual-appliance/hyper-v/5.png)

Nun findet die Konvertierung statt und nach Abschluss können wir das Programm verlassen:

La conversion a maintenant lieu et une fois terminée, nous pouvons quitter le programme :

[![Appliance-Finish](../../assets/images/de/installation/virtual-appliance/hyper-v/6.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/6.png)

[ ![Finition de l'appliance](../../assets/images/fr/installation/virtual-appliance/hyper-v/6.png)](../../assets/images/fr/installation/virtual-appliance/hyper-v/6.png)

Im nächsten Schritt können wir die konvertierte Festplatte in eine neue Hyper-V Maschine integrieren.

Dans l'étape suivante, nous pouvons intégrer le disque dur converti dans une nouvelle machine Hyper-V. Nous pouvons également utiliser le disque dur converti pour créer une nouvelle machine.

Hierfür starten wir den Hyper-V Assistenten für neue virtuelle Computer und geben den Ordner zur neu erstellten VDH an:

Pour cela, nous lançons l'assistant Hyper-V pour les nouveaux ordinateurs virtuels et indiquons le dossier pour le VDH nouvellement créé :

[![Appliance-New-VM](../../assets/images/de/installation/virtual-appliance/hyper-v/7.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/7.png)

[ ![Appliance-New-VM](../../assets/images/fr/installation/virtual-appliance/hyper-v/7.png)](../../assets/images/fr/installation/virtual-appliance/hyper-v/7.png)

Danach wählen wir die Generation für die neue virtuelle Maschine:

Ensuite, nous choisissons la génération pour la nouvelle machine virtuelle :

[![Appliance-Generation](../../assets/images/de/installation/virtual-appliance/hyper-v/8.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/8.png)

[ ![Génération d'appliances](../../assets/images/fr/installation/virtual-appliance/hyper-v/8.png)](../../assets/images/fr/installation/virtual-appliance/hyper-v/8.png)

Geben dieser Ausreichend Arbeitsspeicher ( [Systemvoraussetzungen](../systemvoraussetzungen.md) ) :

Donnez à ce suffisamment de mémoire ( [System requirements](../systemrequirements.md) ) :

[![Appliance-RAM](../../assets/images/de/installation/virtual-appliance/hyper-v/9.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/9.png)

[ ![Appliance-RAM](../../assets/images/fr/installation/virtual-appliance/hyper-v/9.png)](../../assets/images/fr/installation/virtual-appliance/hyper-v/9.png)

Weisen das entsprechende Netzwerk zu:

Attribuer le réseau correspondant :

[![Appliance-Network](../../assets/images/de/installation/virtual-appliance/hyper-v/10.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/10.png)

[ ![Réseau d'appliances](../../assets/images/fr/installation/virtual-appliance/hyper-v/10.png)](../../assets/images/fr/installation/virtual-appliance/hyper-v/10.png)

Und verbinden in diesem Schritt das konvertierte Festplatten Image:

Et à cette étape, connectez l'image du disque dur converti :

[![Appliance-Image](../../assets/images/de/installation/virtual-appliance/hyper-v/11.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/11.png)

[ ![Image de l'appliance](../../assets/images/fr/installation/virtual-appliance/hyper-v/11.png)](../../assets/images/fr/installation/virtual-appliance/hyper-v/11.png)

Danach können wir die Einrichtung abschließen und die virtuelle Maschine starten:

Nous pouvons ensuite terminer la configuration et démarrer la machine virtuelle :

[![Appliance-Finish-2](../../assets/images/de/installation/virtual-appliance/hyper-v/12.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/12.png)

[ ![Appliance-Finish-2](../../assets/images/fr/installation/virtual-appliance/hyper-v/12.png)](../../assets/images/fr/installation/virtual-appliance/hyper-v/12.png)

Die virtuelle Maschine sollte nun Ordnungsgemäß starten und Sie sollten sich mit den mitgelieferten Benutzer Daten anmelden können:

La machine virtuelle devrait maintenant démarrer correctement et vous devriez pouvoir vous connecter avec les données utilisateur fournies :

| **Login** | **Username** | **Passwort** |
| --- | --- | --- |
| Console Login | idoitadm | idoit |
| i-doit Login | admin | admin |
| Admin Center Login | admin | idoit |

| **Login** | **Nom d'utilisateur** | **Mot de passe** |
| --- | --- | --- |
| Console Login | idoitadm | idoit |
| i-doit Login | admin | admin |
| Admin Center Login | admin | idoit |