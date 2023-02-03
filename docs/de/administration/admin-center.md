**Inhaltsverzeichnis**

*   1[Zugangsdaten](#AdminCenter-Zugangsdaten)
*   2[ Anmeldung](#AdminCenter-Anmeldung)

*   4[Übersicht](#AdminCenter-Übersicht)
*   5[Mandanten](#AdminCenter-Mandanten)
*   6[Lizenzen](#AdminCenter-Lizenzen)
*   7[Add-ons](#AdminCenter-Add-ons)
*   8[Support](#AdminCenter-Support)
*   9[Konfiguration](#AdminCenter-Konfiguration)

Das Admin Center ist eine in i-doit integrierte separate Administrations-Oberfläche. Hierüber werden mandantenübergreifende Einstellungen konfiguriert.

Zugangsdaten
------------

Achtung!

Bitte editieren Sie nicht das Passwort, falls eines bereits vergeben ist. Dies kann nur über die [CLI](https://kb.i-doit.com/display/de/Optionen+und+Parameter+der+Console#OptionenundParameterderConsole-admin-center-password-reset) geändert werden!

  

  

  
Für das Admin Center gelten **separate Zugangsdaten**. Diese können bei der [Installation von i-doit](/display/de/Setup) festgelegt werden. Sollte dieser Schritt übersprungen werden, ist erst einmal kein Zugang zum Admin Center möglich. Um **nachträglich** Zugangsdaten zu vergeben, wird die Datei `src/config.inc.php` im Installationsverzeichnis von i-doit durch den CLI Befehl [**admin-center-password-reset**](https://kb.i-doit.com/display/de/Optionen+und+Parameter+der+Console#OptionenundParameterderConsole-admin-center-password-reset) aktualisiert, wobei `username` und `password` durch durch die im Befehl mitgegebenen Werte ausgetauscht werden :

[?](#)

`$g_admin_auth = array(`

`"username"` `=>` `"password"``,`

`);`

Anmeldung
---------

Das Admin Center ist über die [Login-Maske von i-doit](/display/de/Erstanmeldung) zu erreichen. Unterhalb der Maske befindet sich der Link `**Admin-Center**`.

![](/download/attachments/36864070/login-admin-center.jpg?version=1&modificationDate=1462956792803&api=v2&effects=drop-shadow)

Zugangsdaten vergeben

Dieser Link steht nur zur Verfügung, wenn die Zugangsdaten für das Admin Center konfiguriert wurden (siehe oben).

Alternativ kann im Browser die URL zum Admin Center eingegeben werden. Dabei wird dem Link zu i-doit ein `/admin/` nachgestellt:

[?](#)

`https:``//i-doit``.example.net``/i-doit/admin/`

![](/download/attachments/36864070/admin_center_login.png?version=1&modificationDate=1462966892894&api=v2&effects=drop-shadow)
------------------------------------------------------------------------------------------------------------------------------

Englische Oberfläche

Das Admin Center ist vollständig in englisch gehalten.

Übersicht
---------

Im Bereich `**Home**` wird die derzeit installierte Version von i-doit angezeigt. Unter dem Punkt `**Actions**` kann das `**i-doit environment info file**` heruntergeladen werden. Dies ist eine XML-Datei mit wichtigen Systemeinstellungen, die beim [Troubleshooting](/display/de/Troubleshooting) sehr hilfreich sein können.

![](/download/attachments/36864070/image2022-1-25_15-57-22.png?version=1&modificationDate=1643122643467&api=v2&effects=drop-shadow)

Mandanten
---------

Im Bereich `**Tenants**` werden die Mandanten verwaltet. Dies wird allerdings nur bei einer Multi-Mandanten-Lizenz von i-doit relevant. Neue Mandanten können über die Schaltfläche "Add new tenant" erzeugt werden. Bestehende Mandanten können außerdem bearbeitet, (de)aktiviert oder vollständig gelöscht werden. Ein gelöschter Mandant kann nur über ein [BackUp](/display/de/Daten+sichern+und+wiederherstellen) wiederhergestellt werden.

![](/download/attachments/36864070/image2022-1-25_15-58-16.png?version=1&modificationDate=1643122696750&api=v2&effects=drop-shadow)

Lizenzen
--------

Über den Bereich `**Licences**` kann die [Lizenz für i-doit](/display/de/Lizenz+aktivieren) eingespielt werden.

![](/download/attachments/36864070/admin_center_licenses.png?version=1&modificationDate=1462966892305&api=v2&effects=drop-shadow)

  

Seit Version 1.13 werden die Lizenzierten Add-ons so dargestellt.

  
![](/download/attachments/36864070/image2021-12-10_15-45-47.png?version=1&modificationDate=1639147548091&api=v2)

Im Ersten Schritt gilt es, die Lizenzdatei hochzuladen. Hierzu steht die Schaltfläche "Install new licence" zur Verfügung. Abhängig davon, ob es sich um eine Subskriptions-, Kauf-, Mandanten- oder Mandanten-Kauf-Lizenz handelt, muss die entsprechende Option im neu geöffneten Bereich gewählt werden. Bei einer Subskriptions- oder Kauflizenz ist es ausreichend, den zugehörigen Mandanten auszuwählen.

Wenn eine Mandanten- oder eine Mandanten-Kauf-Lizenz eingesetzt wird, stehen die weiteren Optionen im Bereich "Multi-Tenant" zur Verfügung. In der Spalte "Multi-tenant options" können die zu lizenzierenden Mandanten gewählt werden. Nachdem ein Mandant lizenziert wurde, erhält dieser eine Zeile im oberen Bereich. Hier kann das Objekt-Limit für jeden lizenzierten Mandanten festgelegt werden. Nachdem das Limit eingegeben wurde, muss dieses über die Schaltfläche "Save changes" gespeichert werden.

Add-ons
-------

Im Bereich `**Modules**` werden die [i-doit pro Add-ons](/display/de/i-doit+pro+Add-ons) verwaltet. Jede Funktionalität von i-doit ist in einem Modul gekapselt. Viele davon gehören zum Kern (`**core**`) von i-doit, einige davon gelten als **extension**, wenn sie bei der Installation bereits installiert sind, oder als `**addon**`, wenn sie zusätzlich installiert werden können.

![](/download/attachments/36864070/image2022-1-25_15-59-24.png?version=1&modificationDate=1643122765123&api=v2&effects=drop-shadow)

Support
-------

Über den Bereich `**Support**` wird das [Kundenportal](/display/de/Kundenportal) eingebettet. Darüber können beispielsweise Download-Pakete und Lizenzen heruntergeladen werden.

![](/download/attachments/36864070/image2022-1-25_16-0-2.png?version=1&modificationDate=1643122802799&api=v2&effects=drop-shadow)

Konfiguration
-------------

Im Bereich Config werden zwei Punkte konfiguriert:

*   Über `**Admin-Center Credentials**` können die Zugangsdaten zum Admin Center geändert werden (siehe oben).
*   Über `**Connection to i-doit System Database**` kann der Zugang zur [System-Datenbank](/display/de/Datenbank-Modell) geändert werden.

![](/download/attachments/36864070/image2022-1-25_16-1-41.png?version=1&modificationDate=1643122902358&api=v2&effects=drop-shadow)

Die Einstellungen können alternativ in der Datein `src/config.inc.php` im Installationsverzeichnis von i-doit geändert werden. Diese Datei wird bei der [Installation von i-doit](/display/de/Setup) erstellt. Wird ein [Update von i-doit](/display/de/Update+einspielen) eingespielt, wird automatisch ein [Backup](/display/de/Daten+sichern+und+wiederherstellen) der Datei angegeben. Im Dateinamen wird das Datum des Updates angeben.