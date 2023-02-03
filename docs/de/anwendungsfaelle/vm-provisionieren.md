**Inhaltsverzeichnis**

*   1[Problemstellung](#VMprovisionieren(veraltet)-Problemstellung)
*   2[Lösung](#VMprovisionieren(veraltet)-Lösung)
*   3[Annahmen](#VMprovisionieren(veraltet)-Annahmen)
*   4[Konfiguration](#VMprovisionieren(veraltet)-Konfiguration)
    *   4.1[vSphere SDK](#VMprovisionieren(veraltet)-vSphereSDK)
    *   4.2[i-doit API](#VMprovisionieren(veraltet)-i-doitAPI)
    *   4.3[Script](#VMprovisionieren(veraltet)-Script)
    *   4.4[CMDB Status ergänzen](#VMprovisionieren(veraltet)-CMDBStatusergänzen)
    *   4.5[Event konfigurieren](#VMprovisionieren(veraltet)-Eventkonfigurieren)
*   5[Handhabung](#VMprovisionieren(veraltet)-Handhabung)
    *   5.1[Virtuelle Umgebung in i-doit dokumentieren](#VMprovisionieren(veraltet)-VirtuelleUmgebungini-doitdokumentieren)
    *   5.2[Neue VM erstellen](#VMprovisionieren(veraltet)-NeueVMerstellen)
    *   5.3[VM automatisch privisionieren](#VMprovisionieren(veraltet)-VMautomatischprivisionieren)

In diesem Artikel beleuchten wir den [Anwendungsfall](/pages/viewpage.action?pageId=8749099), virtuelle Maschinen (VM) über i-doit zu provisionieren. Dazu machen wir uns eine gepflegte [IT-Dokumentation](/display/de/Struktur+der+IT-Dokumentation) zunutze, gepaart mit wenigen Scripts, um diesen [Automatismus](/display/de/Automatisierung+und+Integration) Wirklichkeit werden zu lassen.

Problemstellung
---------------

Bisher wird strikt zwischen Dokumentations- und Konfigurationsdaten unterschieden: In i-doit wird die organisationsweite IT dokumentiert inklusive einem Virtualisierungs-Cluster, bestehend aus mehreren Virtualisierungs-Hosts (Wirtsysteme) und den darauf laufenden virtuellen Maschinen (Gastsysteme). Die Konfiguration jeder VM, also das Anlegen einer neuen VM mit bestimmten Angaben zu CPU, Arbeitsspeicher, Netzwerk, Plattenplatz usw., erfolgt innerhalb der Administrationsoberfläche des Clusters. Diesen Vorgang nennt man auch Provisionierung.

Im Alltag sieht der Prozess daher so aus, dass über ein dediziertes Tool eine neue VM angelegt wird und die erledigte Arbeit nachträglich in i-doit dokumentiert wird:

1.  Starten des Konfigurations-Tools des Virtualisierungs-Clusters
2.  Anlegen und Konfiguration einer neuen VM
3.  Wechsel in die IT-Dokumentation (i-doit)
4.  Anlegen einer neuen VM, Konfiguration in den entsprechenden [Kategorien](/display/de/Struktur+der+IT-Dokumentation) ablegen, VM dem Cluster zuordnen

Ein Datenaustausch zwischen dem genutzten Tool und i-doit findet nicht statt, sodass die VM-Konfiguration zweimal erledigt werden muss. Fehler beim Übertragen der Konfiguration sind hierbei nicht ausgeschlossen. Die redundante Pflege von Konfigurationsdaten ist also eine denkbar undankbare Aufgabe für den Admin.

Dieser Artikel ist veraltet und nicht mehr aktuell

Bitte beachten Sie, dass das hier dargestellte vorgehen bereits veraltet sein kann.

  

Lösung
------

Wir möchten diesen Prozess optimieren, indem wir die in i-doit vorhandenen Konfigurationsdaten nutzen und einige Schritte automatisieren. Dazu stellen wir den Prozess um:

1.  Öffnen der IT-Dokumentation (i-doit)
2.  Anlegen einer neuen VM, Konfiguration in den entsprechenden [Kategorien](/display/de/Struktur+der+IT-Dokumentation) ablegen, VM dem Cluster zuordnen
3.  Die VM wird automatisch im Konfiguration-Tools des Virtualisierungs-Clusters erstellt und provisioniert.

Aus 4 manuellen Schritten werden 2. Der dritte Schritt geschieht automatisiert im Hintergrund. Für den Admin entfällt die doppelte Pflege der Konfigurationsdaten. Fehlerquellen werden eliminiert. Der Admin ist zufrieden.

Annahmen
--------

Diesen Anwendungsfall spielen wir einmal komplett an einem Beispiel durch. Es soll das prinzipielle Vorgehen darstellen und lässt sich problemlos auf andere Umgebungen übertragen. Für den Lösungsweg nehmen wir an:

1.  Der Virtualisierungs-Cluster basiert auf [VMware vSphere](https://de.wikipedia.org/wiki/VMware_vSphere) in Version 5.
2.  i-doit ist auf [Debian GNU/Linux](/pages/viewpage.action?pageId=10223831) 8.5 installiert. Hierzu bedienen wir uns der der [Eval Appliance](/display/de/i-doit+Virtual+Eval+Appliance). Die Distributionspakete sollten mit `apt` auf den neusten Stand gebracht werden.
3.  Die Version von i-doit beträgt mindestens Version [1.7.1](/display/de/Versionshistorie). Der i-doit Host ist über den FQDN `i-doit.example.net` erreichbar.
4.  Zum Kontrollieren der Automatisierung nutzen wir den VMware vSphere Client.
5.  Es existiert ein User in VMware vSphere, der VMs provisionieren darf. Dieser User heißt in diesem Beispiel `vmprovision` mit dem Passwort `vmprovision`.

Konfiguration
-------------

Beginnen wir zunächst mit den Vorarbeiten, damit beide Systeme überhaupt miteinander kommunizieren können.

### vSphere SDK

Damit i-doit dem vSphere-Cluster mitteilen kann, eine neue VM zu privisionieren, benötigen wir auf dem Host von i-doit das [VMware SDK for Perl](https://developercenter.vmware.com/web/sdk/60/vsphere-perl). Wir laden die Version 6.0.2 herunter. Dazu ist ein Account bei VMware nötig und die VMware End User License Agreement (EULA) muss akzeptiert werden. Wir entscheiden uns für das Download-Paket für 64bit-Betriebsysteme als Tarball (.tar.gz).

![](/download/attachments/38371351/vmware_vsphere_perl_sdk_download.png?version=1&modificationDate=1464016634522&api=v2&effects=drop-shadow)

![](/download/attachments/38371351/vmware_vsphere_perl_sdk_64bit_download.png?version=1&modificationDate=1464016634012&api=v2&effects=drop-shadow)

Nach dem Herunterladen kopieren wir den Tarball auf den Host von i-doit und entpacken ihn. Da wir für fast alle folgenden Befehle Root-Rechte benötigen, melden wir uns als Root an:

[?](#)

`scp` `VMware-vSphere-Perl-SDK-6.0.0-3561779.x86_64.``tar``.gz idoitadm@i-doit.example.net:`

`ssh` `idoitadm@i-doit.example.net`

`sudo` `-s`

`tar` `vxzf VMware-vSphere-Perl-SDK-6.0.0-3561779.x86_64.``tar``.gz`

`mv` `vmware-vsphere-cli-distrib/` `/usr/src/`

`cd` `/usr/src/`

Spätestens jetzt ist ein guter Zeitpunkt, das System auf den neusten Stand zu bringen. Zudem installieren wir zusätzliche Pakete über `apt` und `cpan`:

[?](#)

`apt-get update && apt-get upgrade && apt-get dist-upgrade && apt-get autoremove && apt-get clean`

`apt-get` `install` `git build-essential libssl-dev perl-doc libxml-libxml-perl libxml2-dev uuid-dev libuuid-perl libcrypt-ssleay-perl libapache2-mod-perl2 libsoap-lite-perl`

`cpan` `install` `CPAN ExtUtils::MakeMaker Module::Build Net::FTP LWP Crypt::OpenSSL::RSA Class::MethodMaker Socket6 IO::Socket::INET6 Convert::ASN1 Crypt::X509 UUID::Random Archive::Zip Path::Class Try::Tiny Data::Dump Net::INET6Glue LWP::Protocol::https`

Da das SDK das Betriebssystem Debian GNU/Linux offiziell nicht unterstützt, müssen wir dem SDK ein anderes Betriebssystem vorgaukeln:

[?](#)

`echo` `ubuntu >` `/etc/tmp-release`

Das SDK benötigt die Umgebungsvariablen `http_proxy` und `ftp_proxy`:

[?](#)

`export` `http_proxy=`

`export` `ftp_proxy=`

Nun installieren wir das SDK. Dieses bringt ein Installations-Script mit:

[?](#)

`.``/vmware-install``.pl`

Das Script möchte nochmals die EULA von VMware mit `yes` bestätigt bekommen. Falls es zusätzliche Perl-Module installieren möchte, sollte dies mit `yes` bestätigt werden. Wenn die Installation erfolgreich war, erscheint unter anderem folgender Text:

[?](#)

`This installer has successfully installed both vSphere CLI and the vSphere SDK` `for` `Perl.`

An dieser Stelle sind wir mit der Installation des SDKs durch. Wir haben uns freundlicherweise an [dieser Anleitung](http://www.sysadminslife.com/linux/vmware-vsphere-sdk-for-perl-api-unter-debian-squeeze-installieren/) orientiert. Vielen Dank! Und nun geht es weiter:

### i-doit API

Die Kommunikation zwischen i-doit und VMware findet unter anderem über die [API von i-doit](/pages/viewpage.action?pageId=7831613) statt. Diese muss aktiviert und der API Key bekannt sein. Um die API komfortabel zu nutzen, verwenden wir den [Referenz-Client für PHP](https://bitbucket.org/dstuecken/i-doit-api-clients/wiki/PHP):

[?](#)

`cd` `/usr/local/share/`

`git clone https:``//bitbucket``.org``/dstuecken/i-doit-api-clients``.git`

`cd` `i-doit-api-clients``/php/`

`make` `initialize`

Der API-Client fragt bei `make initialize` die URL und den API Key der zu verwendenen i-doit-Installation ab.

### Script

Das Bindeglied zwischen i-doit und VMware stellt folgendes Script dar:

[?](#)

`#!/usr/bin/php`

`<?php`

`/**`

`* Example script to privision a new virtual machine in vSphere with i-doit`

`*`

`* This script uses the i-doit API and the VMware Perl SDK. For more details, please See the i-doit`

`* knowledge base.`

`*`

`* Licensed under the MIT License (MIT), <[https://opensource.org/licenses/mit-license.php](https://opensource.org/licenses/mit-license.php)>.`

`*`

`* Copyright (c) 2016 synetics GmbH`

`*`

`* Permission is hereby granted, free of charge, to any person obtaining a copy of this software and`

`* associated documentation files (the "Software"), to deal in the Software without restriction,`

`* including without limitation the rights to use, copy, modify, merge, publish, distribute,`

`* sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is`

`* furnished to do so, subject to the following conditions:`

`*`

`* The above copyright notice and this permission notice shall be included in all copies or`

`* substantial portions of the Software.`

`*`

`* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT`

`* NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND`

`* NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,`

`* DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,`

`* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.`

`*/`

`use` `idoit\Api\Client` `as` `ApiClient;`

`use` `idoit\Api\CMDB\Object` `as` `CMDBObject;`

`use` `idoit\Api\CMDB\Category;`

`use` `idoit\Api\Connection` `as` `ApiConnection;`

`require_once``(``'/usr/local/share/i-doit-api-clients/php/apiclient.php'``);`

`/**`

`* Configuration`

`*/`

`$vSphereUsername` `=` `'vmprovision'``;`

`$vSpherePassword` `=` `'vmprovision'``;`

`$vSphereWebService` `=` `'[https://vc01.example.net:443/sdk/webService'](https://vc01.example.net:443/sdk/webService')``;`

`$objCMDBStatus` `=` `'15'``;` `// 'to be provisioned'`

`$objCMDBStatus_ready` `=` `'16'``;` `// 'provisioned'`

`$api_entry_point` `=` `'[http://localhost/src/jsonrpc.php'](http://localhost/src/jsonrpc.php')``;`

`$api_key` `=` `'2p1osbg427'``;`

`\idoit\Api\Config::``$jsonRpcDebug` `= false;`

`function` `filter_number(``$p_string``)`

`{`

`// Check, if we got a positive or negative number.`

`$l_sign` `= (``substr``(trim(``$p_string``), 0, 1) ===` `'-'``) ?` `'-'` `:` `''``;`

`// First we strip the currency ("GHZ", "Euro", "$", ...) including spaces.`

`$p_string` `= preg_replace(``'/([^,\.\d])*/i'``,` `''``,` `$p_string``);`

`// If the number is null`

`if` `(``is_null``(``$p_string``) ||` `$p_string` `===` `''``)` `return` `null;`

`// Check if someone wrote a string like "1.000.000".`

`if` `(substr_count(``$p_string``,` `'.'``) > 1)`

`{`

`$p_string` `=` `str_replace``(``'.'``,` `''``,` `$p_string``);`

`}` `// if`

`// Check if someone wrote a string like "1,000,000".`

`if` `(substr_count(``$p_string``,` `','``) > 1)`

`{`

`$p_string` `=` `str_replace``(``','``,` `''``,` `$p_string``);`

`}` `// if`

`// If we find a single point or a single comma, we use the last found one as decimal point.`

`if` `(``strpos``(``$p_string``,` `'.'``) !== false ||` `strpos``(``$p_string``,` `','``) !== false)`

`{`

`if` `(``strpos``(``$p_string``,` `'.'``) >` `strpos``(``$p_string``,` `','``))`

`{`

`$p_string` `=` `str_replace``(``','``,` `''``,` `$p_string``);`

`}`

`elseif` `(``strpos``(``$p_string``,` `'.'``) <` `strpos``(``$p_string``,` `','``))`

`{`

`$p_string` `=` `str_replace``(``'.'``,` `''``,` `$p_string``);`

`$p_string` `=` `str_replace``(``','``,` `'.'``,` `$p_string``);`

`}`

`elseif` `(``strpos``(``$p_string``,` `'.'``) === false &&` `is_int``(``strpos``(``$p_string``,` `','``)))`

`{`

`$p_string` `=` `str_replace``(``','``,` `'.'``,` `$p_string``);`

`}`

`}` `// if`

`// Finally check if number is not numeric then return null`

`if` `(!``is_numeric``(``$p_string``))` `return` `null;`

`// Now we replace commas with dots: "1000,10" to "1000.10" and return the rounded value.`

`return` `(float)` `round``(``str_replace``(``','``,` `'.'``,` `$l_sign` `.` `$p_string``), 4);`

`}` `// function`

`function` `to_kbytes(``$p_value``)`

`{`

`if` `(``is_null``(``$p_value``) || !``is_numeric``(``substr``(``$p_value``, 0, -2)))`

`{`

`return` `null;`

`}` `// if`

`$l_return` `= trim(``$p_value``);`

`$l_unit`   `=` `strtoupper``(``substr``(``$p_value``, -2));`

`switch` `(``$l_unit``)`

`{`

`case` `'TB'``:`

`$l_return` `*= 1024;`

`case` `'GB'``:`

`$l_return` `*= 1024;`

`case` `'MB'``:`

`$l_return` `*= 1024;`

`}` `// switch`

`return` `$l_return``;`

`}` `// function`

`try`

`{`

`if` `(isset(``$argv``[1]))`

`{`

`if` `(``is_scalar``(``$argv``[1]) && (``$params` `=` `base64_decode``(``$argv``[1])))`

`{`

`if` `((``$params` `= json_decode(``$params``, true)))`

`{`

`if` `(isset(``$params``[``'objectID'``]) &&` `$params``[``'objectID'``] > 0)`

`{`

`if` `(``$params``[``'categoryConst'``] ==` `'C__CATG__GLOBAL'``)`

`{`

`if` `(``$params``[``'postData'``][``'C__OBJ__CMDB_STATUS'``] ==` `$objCMDBStatus``)`

`{`

`\idoit\Api\Config::``$jsonRpcDebug` `= false;`

`$l_apiClient` `=` `new` `ApiClient(`

`new` `ApiConnection(`

`$api_entry_point``,` `$api_key`

`)`

`);`

`// Get number of CPUs`

`$l_request` `=` `new` `\idoit\Api\Request(``$l_apiClient``,`

`'cmdb.category.read'``,`

`array``(`

`'objID'` `=>` `$params``[``'objectID'``],`

`'category'` `=>` `'C__CATG__CPU'`

`)`

`);`

`$l_response` `=` `$l_request``->send();`

`$cpuCount` `=` `count``(``$l_response``);`

`// Get memory`

`$l_request` `=` `new` `\idoit\Api\Request(``$l_apiClient``,`

`'cmdb.category.read'``,`

`array``(`

`'objID'` `=>` `$params``[``'objectID'``],`

`'category'` `=>` `'C__CATG__MEMORY'`

`)`

`);`

`$all_memory` `= 0;`

`$l_response` `=` `$l_request``->send();`

`for` `(` `$x` `= 0;` `$x` `<` `count``(``$l_response``);` `$x``++) {`

`$memory_cleaned` `= filter_number(``$l_response``[``$x``][``'capacity'``][``'title'``]);`

`$memory` `= to_kbytes(` `$memory_cleaned` `.` `$l_response``[``$x``][``'unit'``][``'title'``]);`

`$all_memory` `=` `$all_memory` `+` `$memory``;`

`}`

`$all_memory_mb` `=` `$all_memory` `/ 1024;`

`// Get HDD`

`$l_request` `=` `new` `\idoit\Api\Request(``$l_apiClient``,`

`'cmdb.category.read'``,`

`array``(`

`'objID'` `=>` `$params``[``'objectID'``],`

`'category'` `=>` `'C__CMDB__SUBCAT__STORAGE__DEVICE'`

`)`

`);`

`$l_response` `=` `$l_request``->send();`

`$hdd_cleaned` `= filter_number(``$l_response``[0][``'capacity'``][``'title'``]);`

`$hdd` `= to_kbytes(` `$hdd_cleaned` `.` `$l_response``[0][``'unit'``][``'title'``]);`

`$hdd_mb` `=` `$hdd` `/ 1024;`

`// Get virtual host and cluster`

`$l_request` `=` `new` `\idoit\Api\Request(``$l_apiClient``,`

`'cmdb.category.read'``,`

`array``(`

`'objID'` `=>` `$params``[``'objectID'``],`

`'category'` `=>` `'C__CATG__VIRTUAL_MACHINE'`

`)`

`);`

`$l_response` `=` `$l_request``->send();`

`$datacenter` `=` `$l_response``[0][``'hosts'``][``'title'``];`

`$host` `=` `$l_response``[0][``'primary'``][``'title'``];`

`//Get SAN LUN`

`$l_request` `=` `new` `\idoit\Api\Request(``$l_apiClient``,`

`'cmdb.category.read'``,`

`array``(`

`'objID'` `=>` `$params``[``'objectID'``],`

`'category'` `=>` `'C__CATG__VIRTUAL_DEVICE'`

`)`

`);`

`$l_response` `=` `$l_request``->send();`

`for` `(` `$x` `= 0;` `$x` `<` `count``(``$l_response``);` `$x``++) {`

`if` `(isset(``$l_response``[``$x``][``'host_ldev_client'``][``'ref_title'``]) && !``empty``(``$l_response``[``$x``][``'host_ldev_client'``][``'ref_title'``]))`

`{`

`$lun` `=` `$l_response``[``$x``][``'host_ldev_client'``][``'ref_title'``];`

`}`

`}`

`//Get Network`

`$l_request` `=` `new` `\idoit\Api\Request(``$l_apiClient``,`

`'cmdb.category.read'``,`

`array``(`

`'objID'` `=>` `$params``[``'objectID'``],`

`'category'` `=>` `'C__CATG__VIRTUAL_DEVICE'`

`)`

`);`

`$l_response` `=` `$l_request``->send();`

`for` `(` `$x` `= 0;` `$x` `<` `count``(``$l_response``);` `$x``++) {`

`if` `(isset(``$l_response``[``$x``][``'switch_port_group'``][``'vs_port_group_title'``]) && !``empty``(``$l_response``[``$x``][``'switch_port_group'``][``'vs_port_group_title'``]))`

`{`

`$network` `=` `$l_response``[``$x``][``'switch_port_group'``][``'vs_port_group_title'``];`

`}`

`}`

`$dom`      `=` `new` `DomDocument(``"1.0"``);`

`$dom``->formatOutput = true;`

`$dom``->preserveWhiteSpace = false;`

`$VirtualMachines`  `=` `$dom``->createElement(``'Virtual-Machines'``);`

`$VirtualMachine` `=` `$dom``->createElement(``'Virtual-Machine'``);`

`$VirtualMachines``->appendChild(` `$VirtualMachine` `);`

`$VirtualMachine``->appendChild(` `$dom``->createElement(``'Name'``,` `$params``[``'postData'``][``'C__CATG__GLOBAL_TITLE'``]) );`

`$VirtualMachine``->appendChild(` `$dom``->createElement(``'Host'``,` `$host``) );`

`$VirtualMachine``->appendChild(` `$dom``->createElement(``'Datacenter'``,` `$datacenter``) );`

`$VirtualMachine``->appendChild(` `$dom``->createElement(``'Guest-Id'``,` `''` `) );`

`$VirtualMachine``->appendChild(` `$dom``->createElement(``'Datastore'``,` `$lun` `) );`

`$VirtualMachine``->appendChild(` `$dom``->createElement(``'Disksize'``,` `$hdd` `) );`

`$VirtualMachine``->appendChild(` `$dom``->createElement(``'Memory'``,` `$all_memory_mb` `) );`

`$VirtualMachine``->appendChild(` `$dom``->createElement(``'Number-of-Processor'``,` `$cpuCount``) );`

`$VirtualMachine``->appendChild(` `$dom``->createElement(``'Nic-Network'``,` `$network``) );`

`$VirtualMachine``->appendChild(` `$dom``->createElement(``'Nic-Poweron'``,` `'1'``) );`

`$dom``->appendChild(` `$VirtualMachines` `);`

`$dom``->save(``"/tmp/i-doit-vm-provision.xml"``);`

`exec``(``"/usr/src/vmware-vsphere-cli-distrib/apps/vm/vmcreate.pl --url $vSphereWebService --username $vSphereUsername --password $vSpherePassword --filename /tmp/i-doit-vm-provision.xml --schema /usr/src/vmware-vsphere-cli-distrib/apps/schema/vmcreate.xsd"``);`

`echo` `'Provisioned machine '` `.` `$params``[``'postData'``][``'C__CATG__GLOBAL_TITLE'``] ;`

`//Set CMDB Status to provisioned`

`$l_request` `=` `new` `\idoit\Api\Request(``$l_apiClient``,`

`'cmdb.category.update'``,`

`array``(`

`'objID'` `=>` `$params``[``'objectID'``],`

`'category'` `=>` `'C__CATG__GLOBAL'``,`

`'data'`     `=>` `array``(`

`'cmdb_status'` `=>` `$objCMDBStatus_ready``,`

`)`

`)`

`);`

`$l_response` `=` `$l_request``->send();`

`}`

`}`

`}`

`else` `throw` `new` `Exception(``'Event Error: Object id not existent.'``);`

`}`

`else` `throw` `new` `Exception(``'Event Error: Script Parameters not json-encoded.'``);`

`}`

`else` `throw` `new` `Exception(``'Event Error: Script Parameters not base64 encoded.'``);`

`}`

`}` `catch` `(Exception` `$e``)`

`{`

`echo` `$e``->getMessage();`

`exit``;`

`}`

Dieses kopieren wir in die Datei `/usr/local/bin/i-doit_provision.php`. Damit der Apache Webserver das Script ausführen kann, vergeben wir noch die entsprechenden Rechte:

[?](#)

`chmod` `775` `/usr/local/bin/i-doit_provision``.php`

In diesem Script befindet sich die Konfiguration, um sowohl auf i-doit, als auch VMware zugreifen zu können. Diese müssen entsprechend angepasst werden:

*   `$vSphereUsername`: Benutzer für vSphere (siehe oben)
*   `$vSpherePassword`: Password für vSphere (siehe oben)
*   `$vSphereWebService`: URL zum Web Service von vSphere
*   `$objCMDBStatus`: ID des CMDB-Status `**to be provisioned**` (siehe unten)
*   `$objCMDBStatus_ready`: ID des CMDB-Status `**provisioned**` (siehe unten)
*   `$api_entry_point`: URL zur API von i-doit
*   `$api_key`: Key für die i-doit API

### CMDB Status ergänzen

Die beiden [CMDB-Status](/display/de/Lebens-+und+Dokumentationszyklus)\-Angaben to be provisioned und provisioned existieren in der Standard-Installation von i-doit noch nicht, sind aber für den Automatismus entscheidend. Diese müssen wie im verlinkten Artikel beschrieben ergänzt werden.

![](/download/attachments/38371351/vm_provisioning_cmdb_status.png?version=1&modificationDate=1465395063453&api=v2&effects=drop-shadow)

### Event konfigurieren

Nun müssen wir in i-doit noch konfigurieren, dass bei bestimmten Änderungen des Script aufgerufen wird. Dazu verwenden wir die [Event-Steuerung](/display/de/Events) und legen dort einen neuen Hook an:

*   `**Event**`: `**Category: (arbitrary sources) Speichern**`
*   `**Description**`: `**VM provisioning**`
*   `**Type**`: `**SHELL COMMAND**`
*   `**Command**`: `**/usr/local/bin/i-doit_provision.php**`
*   `**Additional parameters**`: leer lassen
*   `**Mode**`: `**Executive live**`

![](/download/attachments/38371351/vm_provisioning_event_hook.png?version=1&modificationDate=1465395387769&api=v2&effects=drop-shadow)

An dieser Stelle ist die Konfiguration abgeschlossen und der Automatismus "scharf gestellt".

Handhabung
----------

Schauen wir uns nach der ausgiebigen, zum Glück einmaligen Konfiguration an, wie der Automatismus funktioniert.

### Virtuelle Umgebung in i-doit dokumentieren

Es exisitiert bereits ein vSphere Cluster (Objekttyp `**Cluster**`) mit einigen ESX-Hosts (Objekttyp `**Virtueller Host**`). Der Objekt-Titel des Clusters entspricht dem des Datencenters in vSphere. Die Objekt-Titel der ESX-Hosts sind die Hostnamen, die auch in vSphere angezeigt werden.

![](/download/attachments/38371351/vm_provisioning_vsphere_cluster.png?version=1&modificationDate=1465396789616&api=v2&effects=drop-shadow)

**![](/download/attachments/38371351/vm_provisioning_virtual_hosts.png?version=1&modificationDate=1465396782878&api=v2&effects=drop-shadow)**

Pro ESX-Host werden virtuelle Switche mit VLAN IDs konfiguriert (Kategorie `**Virtuelle Switche**`).

![](/download/attachments/38371351/vm_provisioning_virtual_switches.png?version=1&modificationDate=1465396787749&api=v2&effects=drop-shadow)

Die ESX-Hosts sind an ein zentrales Storage gebunden. Darüber werden die VMs mit Plattenplatz versorgt (Kategorie `**Logische Geräte (Client)**`).

![](/download/attachments/38371351/vm_provisioning_logical_devices_%28client%29.png?version=1&modificationDate=1465396768980&api=v2&effects=drop-shadow)

Auf Storage-Seite sieht es dementsprechend aus. Die Kategorie `**Logische Geräte (LDEV Server)**` enthält die Zuordnung von LUNs zu ESX-Hosts.

![](/download/attachments/38371351/vm_provisioning_logical_devices_%28ldev_server%29.png?version=1&modificationDate=1465396770769&api=v2)

### Neue VM erstellen

Der vSphere Cluster und das Storage sind nun laut IT-Dokumentation bereit. Es ist Zeit, VMs zu dokumentieren – und automatisch zu provisionieren.

Zuerst legt man eine neue VM an (Objekttyp `**Virtueller Server**`) und setzt diese auf den CMDB-Status geplant (noch existiert sie ja nicht).

![](/download/attachments/38371351/vm_provisioning_planned.png?version=1&modificationDate=1465396774540&api=v2&effects=drop-shadow)

Danach wir die gewünschte Systemkonfiguration dokumentiert. In der Kategorie `**CPU**` wird die Anzahl der geforderten CPU-Kerne dokumentiert. Für jeden Kern wird ein Eintrag erzeugt.

![](/download/attachments/38371351/vm_provisioning_cpu.png?version=1&modificationDate=1465396765137&api=v2&effects=drop-shadow)

In der Kategorie `**Speicher**` wird der benötigte RAM dokumentiert. Anzahl von Speicherriegeln und gewählte Größeneinheiten sind nicht wichtig. Stattdessen wird die Gesamtkapazität zusammengezählt.

![](/download/attachments/38371351/vm_provisioning_memory.png?version=1&modificationDate=1465396772960&api=v2&effects=drop-shadow)

In der Kategorie `**Netzwerk → Port**` wird die Bezeichnung des ersten Eintrags genutzt, um einen virtuellen Port für die VM zu konfigurieren.

![](/download/attachments/38371351/vm_provisioning_port.png?version=1&modificationDate=1465396776086&api=v2&effects=drop-shadow)

Der benötigte Plattenplatz wird in der Kategorie `**Lokaler Massenspeicher → Gerät**` angegeben.

![](/download/attachments/38371351/vm_provisioning_device.png?version=1&modificationDate=1465396767027&api=v2&effects=drop-shadow)

In welchem Cluster und auf welchem ESX-Host die VM laufen soll, wird in der Kategorie `**Virtuelle Maschine**` dokumentiert.

![](/download/attachments/38371351/vm_provisioning_virtual_machine.png?version=1&modificationDate=1465396785817&api=v2&effects=drop-shadow)

Die Zuordnung von Storage und Netzwerk wird in der Kategorie `**Virtuelle Maschine → Virtuelle Geräte**` hinterlegt. Der Screenshot zeigt, welche Attribute ausgefüllt werden sollten.

![](/download/attachments/38371351/vm_provisioning_virtual_devices.png?version=1&modificationDate=1465396780822&api=v2&effects=drop-shadow)

Damit ist die Konfiguration der VM ausreichend dokumentiert.

Template

Um schneller virtuelle Maschinen zu dokumentieren und somit auch zu provisionieren, eignet sich ein Template. Für jede vorkonfektionierte VM wird ein Template erstellt und daraus neue Objekte erstellt.

### VM automatisch privisionieren

Nun kommen wir zum finalen Schritt: das Provisionieren. Viel müssen wir nun nicht mehr tun. In der Kategorie `**Allgemein**` wird der CMDB-Status auf `**to be provisioned**` gesetzt. Wird die Änderung gespeichert, fängt das oben beschriebene Script an, die Konfigurationsdaten aus i-doit auszulesen und an vSphere weiterzugeben. Dadurch könnte das Speichern etwas länger dauern, weil auf das Ergebnis gewartet wird.

![](/download/attachments/38371351/vm_provisioning_to_be_provisioned.png?version=1&modificationDate=1465396778757&api=v2&effects=drop-shadow)

Ist die Provisionierung erfolgreich durchgelaufen, ändert sich der CMDB-Status automatisch auf `**provisioned**`. Die VM wurde erstellt und läuft. Fertig!

![](/download/attachments/38371351/vm_provisioning_provisioned.png?version=1&modificationDate=1465396777525&api=v2&effects=drop-shadow)

Die Kommunikation zwischen i-doit und vSphere wird unter `**Verwaltung → CMDB Einstellungen → Events → Historie (Log)**` angezeigt.