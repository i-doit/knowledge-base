# i-doit für Windows Server installieren

Wie i-doit unter dem Betriebssystem Windows installiert wird, beschreiben wir in diesem Artikel.<br>
Das i-doit Installationspaket für Windows wird im [Kundenportal](../../../administration/kundenportal.md) zur Verfügung gestellt.

Die Inhalte des Pakets sehen wie folgt aus:

[![Ordner Content](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/1-idw.png)](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/1-idw.png)

Im Installationspaket wird immer die aktuelle [i-doit Version](../../../versionshistorie/index.md) mitgeliefert. Ebenfalls wird durch den `src.zip` Ordner eine Installation ohne Internetverbindung ermöglicht.<br>
Da der i-doit Windows installer die `windowsdesktop-runtime-6.0.14`**` benötigt, wird diese ebenfalls zur Verfügung gestellt falls wärend der installation keine Internetverbindung vorhanden ist.

### Installation

Nach dem ausführen der `i-doit Windows Installer.exe` bekommt man folgende GUI angezeigt:

[![GUI](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/2-idw.png)](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/2-idw.png)

Nach einem Klick auf **Installieren** werden im Hintergrund alle benötigten Elemente installiert.

Es werden installiert:

* **Apache2.4**
* **PHP8.0**
* **MariaDB10.5**
* **i-doit-23**

!!! info "Eventuell müssen für Apache Zugriffsrechte angenommen werden"

Bei erfolgreicher Installation wird in einem kleinem Fenster **"i-doit has been installed successfully."** angezeigt.<br>
Nach einem Klick auf **OK** wird automatisch ein neues Browsertab mit der `localhost` URL geöffnet und kann i-doit im vollen Umfang nutzen.

!!! info "Sollte bei der Installation ein Fehler unterlaufen sein, wird automatisch ein log im Setup Ordner erstellt"

### Konfiguration

Um PHP, MariaDB oder Apache zu konfigurieren, findet man die jeweiligen Files in folgenden Verzeichnissen:

* **PHP:**
    `C:\i-doit\php\php.ini`

* **MariaDB:**
    `C:\ProgramData\MariaDB\data\my.ini`

* **Apache:**
    `C:\i-doit\apache-2.4\conf\httpd.conf`

### Deinstallation

Um i-doit wieder zu deinstallieren muss zuerst der Apache2 service gestoppt werden.<br>
Dafür geben wir in der Eingabeaufforderung folgenden Befehl ein:

    C:\i-doit\apache-2.4\bin\httpd.exe -k stop

Ist der Apache2 Service gestoppt, kann Apache2 deinstalliert werden:

    C:\i-doit\apache-2.4\bin\httpd.exe -k uninstall

Anschließend wird MariaDB deinstalliert indem wir unter **Programme hinzufügen oder entfernen** MariaDB entfernen.

[![Deinstallieren MariaDB](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/3-idw.png)](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/3-idw.png)

Alternativ kann MariaDB auch über die Eingabeaufforderung deinstalliert werden:

    msiexec.exe C:\i-doit\mariadb-10.5\mariadb-10.5.19-winx64.msi /qn REMOVE=ALL

MariaDB deinstallieren ohne Daten zu löschen:

    msiexec.exe C:\i-doit\mariadb-10.5\mariadb-10.5.19-winx64.msi /qn REMOVE=ALL CLEANUPDATA=""

Jetzt muss noch der i-doit Ordner gelöscht werden und der PHP `PATH` muss aus den Umgebungsvariabeln entfernt werden:

[![Deinstallieren PHP](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/4-idw.png)](../../../assets/images/de/installation/microsoft-windows/i-doit-windows/4-idw.png)
