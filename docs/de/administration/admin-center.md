# Admin Center

Das Admin Center ist eine in i-doit integrierte separate Administrations-Oberfläche. Hierüber werden mandantenübergreifende Einstellungen konfiguriert.

Zugangsdaten
------------

!!! attention "Achtung!"

    Bitte editieren Sie nicht das Passwort, falls eines bereits vergeben ist. Dies kann nur über die [CLI](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#admin-center-password-reset) geändert werden!
  
Für das Admin Center gelten **separate Zugangsdaten**. Diese können bei der [Installation von i-doit](../installation/manuelle-installation/setup.md) festgelegt werden. Sollte dieser Schritt übersprungen werden, ist erst einmal kein Zugang zum Admin Center möglich. Um **nachträglich** Zugangsdaten zu vergeben, wird die Datei src/config.inc.php im Installationsverzeichnis von i-doit durch den CLI Befehl [**admin-center-password-reset**](../automatisierung-und-integration/cli/console/optionen-und-parameter-der-console.md#console-admin-center-password-reset) aktualisiert, wobei username und password durch durch die im Befehl mitgegebenen Werte ausgetauscht werden :

    $g_admin_auth = array(
    "username" => "password",
    );

Anmeldung
---------

Das Admin Center ist über die [Login-Maske von i-doit](../grundlagen/erstanmeldung.md) zu erreichen. Unterhalb der Maske befindet sich der Link **Admin-Center**.

[![Anmeldung](../assets/images/de/administration/admin-center/1-ac.png)](../assets/images/de/administration/admin-center/1-ac.png)

!!! info "Zugangsdaten vergeben"

    Dieser Link steht nur zur Verfügung, wenn die Zugangsdaten für das Admin Center konfiguriert wurden (siehe oben).

Alternativ kann im Browser die URL zum Admin Center eingegeben werden. Dabei wird dem Link zu i-doit ein /admin/ nachgestellt:

    https://i-doit.example.net/i-doit/admin/

[![Anmeldung](../assets/images/de/administration/admin-center/2-ac.png)](../assets/images/de/administration/admin-center/2-ac.png)
------------------------------------------------------------------------------------------------------------------------------

!!! info "Englische Oberfläche"

    Das Admin Center ist vollständig in englisch gehalten.

Übersicht
---------

Im Bereich **Home** wird die derzeit installierte Version von i-doit angezeigt. Unter dem Punkt **Actions** kann das **i-doit environment info file** heruntergeladen werden. Dies ist eine XML-Datei mit wichtigen Systemeinstellungen, die beim [Troubleshooting](../administration/troubleshooting/index.md) sehr hilfreich sein können.

[![Übersicht](../assets/images/de/administration/admin-center/3-ac.png)](../assets/images/de/administration/admin-center/3-ac.png)

Mandanten
---------

Im Bereich **Tenants** werden die Mandanten verwaltet. Dies wird allerdings nur bei einer Multi-Mandanten-Lizenz von i-doit relevant. Neue Mandanten können über die Schaltfläche "Add new tenant" erzeugt werden. Bestehende Mandanten können außerdem bearbeitet, (de)aktiviert oder vollständig gelöscht werden. Ein gelöschter Mandant kann nur über ein [BackUp](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) wiederhergestellt werden.

[![Mandanten](../assets/images/de/administration/admin-center/4-ac.png)](../assets/images/de/administration/admin-center/4-ac.png)

Lizenzen
--------

Über den Bereich **Licences** kann die [Lizenz für i-doit](../wartung-und-betrieb/lizenz-aktivieren.md) eingespielt werden.

[![Lizenzen](../assets/images/de/administration/admin-center/5-ac.png)](../assets/images/de/administration/admin-center/5-ac.png)

Seit Version 1.13 werden die Lizenzierten Add-ons so dargestellt.

[![Lizenzen](../assets/images/de/administration/admin-center/6-ac.png)](../assets/images/de/administration/admin-center/6-ac.png)

Im Ersten Schritt gilt es, die Lizenzdatei hochzuladen. Hierzu steht die Schaltfläche "Install new licence" zur Verfügung. Abhängig davon, ob es sich um eine Subskriptions-, Kauf-, Mandanten- oder Mandanten-Kauf-Lizenz handelt, muss die entsprechende Option im neu geöffneten Bereich gewählt werden. Bei einer Subskriptions- oder Kauflizenz ist es ausreichend, den zugehörigen Mandanten auszuwählen.

Wenn eine Mandanten- oder eine Mandanten-Kauf-Lizenz eingesetzt wird, stehen die weiteren Optionen im Bereich "Multi-Tenant" zur Verfügung. In der Spalte "Multi-tenant options" können die zu lizenzierenden Mandanten gewählt werden. Nachdem ein Mandant lizenziert wurde, erhält dieser eine Zeile im oberen Bereich. Hier kann das Objekt-Limit für jeden lizenzierten Mandanten festgelegt werden. Nachdem das Limit eingegeben wurde, muss dieses über die Schaltfläche "Save changes" gespeichert werden.

Add-ons
-------

Im Bereich **Modules** werden die [i-doit pro Add-ons](../i-doit-pro-add-ons/index.md) verwaltet. Jede Funktionalität von i-doit ist in einem Modul gekapselt. Viele davon gehören zum Kern (**core**) von i-doit, einige davon gelten als **extension**, wenn sie bei der Installation bereits installiert sind, oder als **addon**, wenn sie zusätzlich installiert werden können.

[![Add-ons](../assets/images/de/administration/admin-center/7-ac.png)](../assets/images/de/administration/admin-center/7-ac.png)

Support
-------

Über den Bereich **Support** wird das [Kundenportal](../administration/kundenportal.md) eingebettet. Darüber können beispielsweise Download-Pakete und Lizenzen heruntergeladen werden.

[![Support](../assets/images/de/administration/admin-center/8-ac.png)](../assets/images/de/administration/admin-center/8-ac.png)

Konfiguration
-------------

Im Bereich Config werden zwei Punkte konfiguriert:

*   Über **Admin-Center Credentials** können die Zugangsdaten zum Admin Center geändert werden (siehe oben).
*   Über **Connection to i-doit System Database** kann der Zugang zur [System-Datenbank](../software-entwicklung/datenbank-modell/index.md) geändert werden.

[![Konfiguration](../assets/images/de/administration/admin-center/9-ac.png)](../assets/images/de/administration/admin-center/9-ac.png)

Die Einstellungen können alternativ in der Datein src/config.inc.php im Installationsverzeichnis von i-doit geändert werden. Diese Datei wird bei der [Installation von i-doit](../installation/manuelle-installation/setup.md) erstellt. Wird ein [Update von i-doit](../wartung-und-betrieb/update-einspielen.md) eingespielt, wird automatisch ein [Backup](../wartung-und-betrieb/daten-sichern-und-wiederherstellen/index.md) der Datei angegeben. Im Dateinamen wird das Datum des Updates angeben.