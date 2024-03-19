<!-- TRANSLATED by md-translate -->
# VM provisionieren (veraltet)

# Provisionner une VM (obsolète)

!!! warning "Veraltet"

! !! était "Obsolète".

In diesem Artikel beleuchten wir den [Anwendungsfall](./index.md), virtuelle Maschinen (VM) über i-doit zu provisionieren. Dazu machen wir uns eine gepflegte [IT-Dokumentation](../grundlagen/struktur-it-dokumentation.md) zunutze, gepaart mit wenigen Scripts, um diesen [Automatismus](../automatisierung-und-integration/index.md) Wirklichkeit werden zu lassen.

Dans cet article, nous mettons en lumière le [cas d'utilisation](./index.md) de l'approvisionnement de machines virtuelles (VM) via i-doit. Pour cela, nous utilisons une [documentation informatique](../bases/structure-it-documentation.md) bien entretenue, associée à quelques scripts, pour faire de cet [automatisme](../automatisation-et-intégration/index.md) une réalité.

## Problemstellung

## Problématique

Bisher wird strikt zwischen Dokumentations- und Konfigurationsdaten unterschieden: In i-doit wird die organisationsweite IT dokumentiert inklusive einem Virtualisierungs-Cluster, bestehend aus mehreren Virtualisierungs-Hosts (Wirtsysteme) und den darauf laufenden virtuellen Maschinen (Gastsysteme). Die Konfiguration jeder VM, also das Anlegen einer neuen VM mit bestimmten Angaben zu CPU, Arbeitsspeicher, Netzwerk, Plattenplatz usw., erfolgt innerhalb der Administrationsoberfläche des Clusters. Diesen Vorgang nennt man auch Provisionierung.

Jusqu'à présent, une distinction stricte est faite entre les données de documentation et les données de configuration : Dans i-doit, l'informatique à l'échelle de l'organisation est documentée, y compris un cluster de virtualisation composé de plusieurs hôtes de virtualisation (systèmes hôtes) et des machines virtuelles qui y fonctionnent (systèmes invités). La configuration de chaque VM, c'est-à-dire la création d'une nouvelle VM avec certaines données relatives au CPU, à la mémoire vive, au réseau, à l'espace disque, etc. Ce processus est également appelé provisionnement.

Im Alltag sieht der Prozess daher so aus, dass über ein dediziertes Tool eine neue VM angelegt wird und die erledigte Arbeit nachträglich in i-doit dokumentiert wird:

Au quotidien, le processus se présente donc comme suit : une nouvelle VM est créée via un outil dédié et le travail effectué est documenté ultérieurement dans i-doit :

1. Starten des Konfigurations-Tools des Virtualisierungs-Clusters
2. Anlegen und Konfiguration einer neuen VM
3. Wechsel in die IT-Dokumentation (i-doit)
4. Anlegen einer neuen VM, Konfiguration in den entsprechenden [Kategorien](../grundlagen/struktur-it-dokumentation.md) ablegen, VM dem Cluster zuordnen

1. lancer l'outil de configuration du cluster de virtualisation
2. création et configuration d'une nouvelle VM
3. passage à la documentation IT (i-doit)
4. création d'une nouvelle VM, classer la configuration dans les [catégories] correspondantes(../bases/structure-it-documentation.md), attribuer la VM au cluster

Ein Datenaustausch zwischen dem genutzten Tool und i-doit findet nicht statt, sodass die VM-Konfiguration zweimal erledigt werden muss. Fehler beim Übertragen der Konfiguration sind hierbei nicht ausgeschlossen. Die redundante Pflege von Konfigurationsdaten ist also eine denkbar undankbare Aufgabe für den Admin.

Il n'y a pas d'échange de données entre l'outil utilisé et i-doit, de sorte que la configuration de la VM doit être effectuée deux fois. Des erreurs lors du transfert de la configuration ne sont pas exclues. La gestion redondante des données de configuration est donc une tâche ingrate pour l'administrateur.

!!! attention "Dieser Artikel ist veraltet und nicht mehr aktuell"
    Bitte beachten Sie, dass das hier dargestellte vorgehen bereits veraltet sein kann.

! !! attention "Cet article est obsolète et n'est plus d'actualité".
    Veuillez noter que la procédure présentée ici peut déjà être obsolète.

## Lösung

## solution

Wir möchten diesen Prozess optimieren, indem wir die in i-doit vorhandenen Konfigurationsdaten nutzen und einige Schritte automatisieren. Dazu stellen wir den Prozess um:

Nous souhaitons optimiser ce processus en utilisant les données de configuration disponibles dans i-doit et en automatisant certaines étapes. Pour ce faire, nous réorganisons le processus :

1. Öffnen der IT-Dokumentation (i-doit)
2. Anlegen einer neuen VM, Konfiguration in den entsprechenden [Kategorien](../grundlagen/struktur-it-dokumentation.md) ablegen, VM dem Cluster zuordnen
3. Die VM wird automatisch im Konfiguration-Tools des Virtualisierungs-Clusters erstellt und provisioniert.

1. ouvrir la documentation IT (i-doit)
2. créer une nouvelle VM, déposer la configuration dans les [catégories] correspondantes(../bases/structure-it-documentation.md), affecter la VM au cluster.
3. la VM est automatiquement créée et provisionnée dans l'outil de configuration du cluster de virtualisation.

Aus 4 manuellen Schritten werden 2. Der dritte Schritt geschieht automatisiert im Hintergrund. Für den Admin entfällt die doppelte Pflege der Konfigurationsdaten. Fehlerquellen werden eliminiert. Der Admin ist zufrieden.

Les 4 étapes manuelles deviennent 2. La troisième étape est automatisée en arrière-plan. L'administrateur n'a plus à gérer deux fois les données de configuration. Les sources d'erreur sont éliminées. L'administrateur est satisfait.

## Annahmen

## suppositions

Diesen Anwendungsfall spielen wir einmal komplett an einem Beispiel durch. Es soll das prinzipielle Vorgehen darstellen und lässt sich problemlos auf andere Umgebungen übertragen. Für den Lösungsweg nehmen wir an:

Nous allons jouer ce cas d'application entièrement sur un exemple. Il doit représenter la procédure de base et peut être appliqué sans problème à d'autres environnements. Pour la solution, nous supposons

1. Der Virtualisierungs-Cluster basiert auf [VMware vSphere](https://de.wikipedia.org/wiki/VMware_vSphere) in Version 5.
2. i-doit ist auf [Debian GNU/Linux](../installation/manuelle-installation/debian.md) 8.5 installiert. Hierzu bedienen wir uns der der [Eval Appliance](../installation/i-doit-virtual-eval-appliance/index.md). Die Distributionspakete sollten mit apt auf den neusten Stand gebracht werden.
3. Die Version von i-doit beträgt mindestens Version [1.7.1](../versionshistorie/index.md). Der i-doit Host ist über den FQDN i-doit.example.net erreichbar.
4. Zum Kontrollieren der Automatisierung nutzen wir den VMware vSphere Client.
5. Es existiert ein User in VMware vSphere, der VMs provisionieren darf. Dieser User heißt in diesem Beispiel vmprovision mit dem Passwort vmprovision.

1. le cluster de virtualisation est basé sur [VMware vSphere](https://de.wikipedia.org/wiki/VMware_vSphere) en version 5.
2. i-doit est installé sur [Debian GNU/Linux](../installation/manuelle-installation/debian.md) 8.5. Pour cela, nous utilisons l'[Eval Appliance](../installation/i-doit-virtual-eval-appliance/index.md). Les paquets de distribution doivent être mis à jour avec apt.
3. la version d'i-doit est au moins la version [1.7.1](../historique des versions/index.md). L'hôte i-doit est accessible via le FQDN i-doit.example.net.
4. pour contrôler l'automatisation, nous utilisons le client VMware vSphere.
5. il existe un utilisateur dans VMware vSphere qui est autorisé à provisionner les VM. Dans cet exemple, cet utilisateur s'appelle vmprovision avec le mot de passe vmprovision.

## Konfiguration

## Configuration

Beginnen wir zunächst mit den Vorarbeiten, damit beide Systeme überhaupt miteinander kommunizieren können.

Commençons tout d'abord par les travaux préparatoires afin que les deux systèmes puissent communiquer entre eux.

### vSphere SDK

### vSphere SDK

Damit i-doit dem vSphere-Cluster mitteilen kann, eine neue VM zu privisionieren, benötigen wir auf dem Host von i-doit das [VMware SDK for Perl](https://developercenter.vmware.com/web/sdk/60/vsphere-perl). Wir laden die Version 6.0.2 herunter. Dazu ist ein Account bei VMware nötig und die VMware End User License Agreement (EULA) muss akzeptiert werden. Wir entscheiden uns für das Download-Paket für 64bit-Betriebsysteme als Tarball (.tar.gz).

Pour qu'i-doit puisse indiquer au cluster vSphere de provisionner une nouvelle VM, nous avons besoin sur l'hôte d'i-doit du [VMware SDK for Perl](https://developercenter.vmware.com/web/sdk/60/vsphere-perl). Nous téléchargeons la version 6.0.2. Pour cela, il est nécessaire d'avoir un compte chez VMware et d'accepter le VMware End User License Agreement (EULA). Nous optons pour le package de téléchargement pour les systèmes d'exploitation 64 bits sous forme de tarball (.tar.gz).

[![vSphere SDK](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/1-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/1-vmpv.png)

[ ![vSphere SDK](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/1-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/1-vmpv.png)

[![vSphere SDK](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/2-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/2-vmpv.png)

[ ![vSphere SDK](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/2-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/2-vmpv.png)

Nach dem Herunterladen kopieren wir den Tarball auf den Host von i-doit und entpacken ihn. Da wir für fast alle folgenden Befehle Root-Rechte benötigen, melden wir uns als Root an:

Après le téléchargement, nous copions le tarball sur l'hôte d'i-doit et le décompressons. Comme nous avons besoin des droits root pour presque toutes les commandes suivantes, nous nous connectons en tant que root :

```
scp VMware-vSphere-Perl-SDK-6.0.0-3561779.x86_64.tar.gz idoitadm@i-doit.example.net:
ssh idoitadm@i-doit.example.net
sudo -s
tar vxzf VMware-vSphere-Perl-SDK-6.0.0-3561779.x86_64.tar.gz
mv vmware-vsphere-cli-distrib/ /usr/src/
cd /usr/src/
```

Spätestens jetzt ist ein guter Zeitpunkt, das System auf den neusten Stand zu bringen. Zudem installieren wir zusätzliche Pakete über apt und cpan:

Au plus tard à ce moment-là, c'est le bon moment pour mettre à jour le système. En outre, nous installons des paquets supplémentaires via apt et cpan :

```
apt-get update && apt-get upgrade && apt-get dist-upgrade && apt-get autoremove && apt-get clean
apt-get install git build-essential libssl-dev perl-doc libxml-libxml-perl libxml2-dev uuid-dev libuuid-perl libcrypt-ssleay-perl libapache2-mod-perl2 libsoap-lite-perl
cpan install CPAN ExtUtils::MakeMaker Module::Build Net::FTP LWP Crypt::OpenSSL::RSA Class::MethodMaker Socket6 IO::Socket::INET6 Convert::ASN1 Crypt::X509 UUID::Random Archive::Zip Path::Class Try::Tiny Data::Dump Net::INET6Glue LWP::Protocol::https
```

Da das SDK das Betriebssystem Debian GNU/Linux offiziell nicht unterstützt, müssen wir dem SDK ein anderes Betriebssystem vorgaukeln:

Comme le SDK ne prend pas officiellement en charge le système d'exploitation Debian GNU/Linux, nous devons faire croire au SDK qu'il s'agit d'un autre système d'exploitation :

```
echo ubuntu > /etc/tmp-release
```

Das SDK benötigt die Umgebungsvariablen http_proxy und ftp_proxy:

Le SDK a besoin des variables d'environnement http_proxy et ftp_proxy :

```
export http_proxy=
export ftp_proxy=
```

Nun installieren wir das SDK. Dieses bringt ein Installations-Script mit:

Nous installons maintenant le SDK. Celui-ci apporte un script d'installation :

```
./vmware-install.pl
```

Das Script möchte nochmals die EULA von VMware mit yes bestätigt bekommen. Falls es zusätzliche Perl-Module installieren möchte, sollte dies mit yes bestätigt werden. Wenn die Installation erfolgreich war, erscheint unter anderem folgender Text:

Le script souhaite que le CLUF de VMware soit à nouveau confirmé par yes. S'il souhaite installer des modules Perl supplémentaires, cela doit être confirmé par yes. Si l'installation a réussi, le texte suivant apparaît entre autres :

```
This installer has successfully installed both vSphere CLI and the vSphere SDK for Perl.
```

An dieser Stelle sind wir mit der Installation des SDKs durch. Wir haben uns freundlicherweise an [dieser Anleitung](http://www.sysadminslife.com/linux/vmware-vsphere-sdk-for-perl-api-unter-debian-squeeze-installieren/) orientiert. Vielen Dank! Und nun geht es weiter:

À ce stade, nous avons terminé l'installation du SDK. Nous nous sommes gentiment inspirés de [ce guide](http://www.sysadminslife.com/linux/vmware-vsphere-sdk-for-perl-api-unter-debian-squeeze-installieren/). Merci beaucoup ! Et maintenant, nous continuons :

### i-doit API

### i-doit API

Die Kommunikation zwischen i-doit und VMware findet unter anderem über die [API von i-doit](../i-doit-pro-add-ons/api/index.md) statt. Diese muss aktiviert und der API Key bekannt sein. Um die API komfortabel zu nutzen, verwenden wir den [Referenz-Client für PHP](https://bitbucket.org/dstuecken/i-doit-api-clients/wiki/PHP):

La communication entre i-doit et VMware se fait entre autres via l'[API d'i-doit](../i-doit-pro-add-ons/api/index.md). Celle-ci doit être activée et la clé API connue. Pour utiliser confortablement l'API, nous utilisons le [client de référence pour PHP](https://bitbucket.org/dstuecken/i-doit-api-clients/wiki/PHP) :

```
cd /usr/local/share/
git clone https://bitbucket.org/dstuecken/i-doit-api-clients.git
cd i-doit-api-clients/php/
make initialize
```

Der API-Client fragt bei make initialize die URL und den API Key der zu verwendenen i-doit-Installation ab.

Le client API demande à make initialize l'URL et la clé API de l'installation i-doit à utiliser.

### Script

### Script

Das Bindeglied zwischen i-doit und VMware stellt folgendes Script dar:

Le lien entre i-doit et VMware est le script suivant :

```shell
#!/usr/bin/php
    <?php

    /**
     * Example script to privision a new virtual machine in vSphere with i-doit
     *
     * This script uses the i-doit API and the VMware Perl SDK. For more details, please See the i-doit
     * knowledge base.
     *
     * Licensed under the MIT License (MIT), <https://opensource.org/licenses/mit-license.php>.
     *
     * Copyright (c) 2016 synetics GmbH
     *
     * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
     * associated documentation files (the "Software"), to deal in the Software without restriction,
     * including without limitation the rights to use, copy, modify, merge, publish, distribute,
     * sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is
     * furnished to do so, subject to the following conditions:
     *
     * The above copyright notice and this permission notice shall be included in all copies or
     * substantial portions of the Software.
     *
     * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT
     * NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
     * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
     * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
     * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
     */

    use idoit\Api\Client as ApiClient;
    use idoit\Api\CMDB\Object as CMDBObject;
    use idoit\Api\CMDB\Category;
    use idoit\Api\Connection as ApiConnection;

    require_once('/usr/local/share/i-doit-api-clients/php/apiclient.php');

    /**
     * Configuration
     */

    $vSphereUsername = 'vmprovision';
    $vSpherePassword = 'vmprovision';
    $vSphereWebService = 'https://vc01.example.net:443/sdk/webService';
    $objCMDBStatus = '15'; // 'to be provisioned'
    $objCMDBStatus_ready = '16'; // 'provisioned'
    $api_entry_point = 'http://localhost/src/jsonrpc.php';
    $api_key = '2p1osbg427';
    \idoit\Api\Config::$jsonRpcDebug = false;

    function filter_number($p_string)
    {
      // Check, if we got a positive or negative number.
      $l_sign = (substr(trim($p_string), 0, 1) === '-') ? '-' : '';

      // First we strip the currency ("GHZ", "Euro", "$", ...) including spaces.
      $p_string = preg_replace('/([^,\.\d])*/i', '', $p_string);

      // If the number is null
      if (is_null($p_string) || $p_string === '') return null;

      // Check if someone wrote a string like "1.000.000".
      if (substr_count($p_string, '.') > 1)
      {
        $p_string = str_replace('.', '', $p_string);
      } // if

      // Check if someone wrote a string like "1,000,000".
      if (substr_count($p_string, ',') > 1)
      {
        $p_string = str_replace(',', '', $p_string);
      } // if

      // If we find a single point or a single comma, we use the last found one as decimal point.
      if (strpos($p_string, '.') !== false || strpos($p_string, ',') !== false)
      {
        if (strpos($p_string, '.') > strpos($p_string, ','))
        {
          $p_string = str_replace(',', '', $p_string);
        }
        elseif (strpos($p_string, '.') < strpos($p_string, ','))
        {
          $p_string = str_replace('.', '', $p_string);
          $p_string = str_replace(',', '.', $p_string);
        }
        elseif (strpos($p_string, '.') === false && is_int(strpos($p_string, ',')))
        {
          $p_string = str_replace(',', '.', $p_string);
        }
      } // if

      // Finally check if number is not numeric then return null
      if (!is_numeric($p_string)) return null;

      // Now we replace commas with dots: "1000,10" to "1000.10" and return the rounded value.
      return (float) round(str_replace(',', '.', $l_sign . $p_string), 4);
    } // function

    function to_kbytes($p_value)
    {
        if (is_null($p_value) || !is_numeric(substr($p_value, 0, -2)))
        {
            return null;
        } // if
        $l_return = trim($p_value);
        $l_unit   = strtoupper(substr($p_value, -2));
        switch ($l_unit)
        {
          case 'TB':
                $l_return *= 1024;
            case 'GB':
                $l_return *= 1024;
            case 'MB':
                $l_return *= 1024;
        } // switch
        return $l_return;
    } // function

    try
    {
        if (isset($argv[1]))
        {
            if (is_scalar($argv[1]) && ($params = base64_decode($argv[1])))
            {
                if (($params = json_decode($params, true)))
                {
                    if (isset($params['objectID']) && $params['objectID'] > 0)
                    {
                        if ($params['categoryConst'] == 'C__CATG__GLOBAL')
                        {
                                  if ($params['postData']['C__OBJ__CMDB_STATUS'] == $objCMDBStatus)
                                  {

                              \idoit\Api\Config::$jsonRpcDebug = false;
                              $l_apiClient = new ApiClient(
                                new ApiConnection(
                                  $api_entry_point, $api_key
                                )
                              );

                              // Get number of CPUs
                              $l_request = new \idoit\Api\Request($l_apiClient,
                                  'cmdb.category.read',
                                  array(
                                  'objID' => $params['objectID'],
                                  'category' => 'C__CATG__CPU'
                                )
                              );

                              $l_response = $l_request->send();
                              $cpuCount = count($l_response);

                              // Get memory
                              $l_request = new \idoit\Api\Request($l_apiClient,
                                    'cmdb.category.read',
                                    array(
                                    'objID' => $params['objectID'],
                                    'category' => 'C__CATG__MEMORY'
                                  )
                                );

                              $all_memory = 0;
                              $l_response = $l_request->send();
                              for ( $x = 0; $x < count($l_response); $x++) {

                                $memory_cleaned = filter_number($l_response[$x]['capacity']['title']);
                                $memory = to_kbytes( $memory_cleaned . $l_response[$x]['unit']['title']);
                                $all_memory = $all_memory + $memory;
                              }
                              $all_memory_mb = $all_memory / 1024;

                              // Get HDD
                              $l_request = new \idoit\Api\Request($l_apiClient,
                                    'cmdb.category.read',
                                    array(
                                    'objID' => $params['objectID'],
                                    'category' => 'C__CMDB__SUBCAT__STORAGE__DEVICE'
                                  )
                                );

                              $l_response = $l_request->send();
                              $hdd_cleaned = filter_number($l_response[0]['capacity']['title']);
                              $hdd = to_kbytes( $hdd_cleaned . $l_response[0]['unit']['title']);
                              $hdd_mb = $hdd / 1024;

                              // Get virtual host and cluster
                              $l_request = new \idoit\Api\Request($l_apiClient,
                                  'cmdb.category.read',
                                  array(
                                  'objID' => $params['objectID'],
                                  'category' => 'C__CATG__VIRTUAL_MACHINE'
                                )
                              );
                              $l_response = $l_request->send();

                              $datacenter = $l_response[0]['hosts']['title'];
                              $host = $l_response[0]['primary']['title'];

                              //Get SAN LUN
                              $l_request = new \idoit\Api\Request($l_apiClient,
                                  'cmdb.category.read',
                                  array(
                                  'objID' => $params['objectID'],
                                  'category' => 'C__CATG__VIRTUAL_DEVICE'
                                )
                              );
                              $l_response = $l_request->send();
                              for ( $x = 0; $x < count($l_response); $x++) {
                                if (isset($l_response[$x]['host_ldev_client']['ref_title']) && !empty($l_response[$x]['host_ldev_client']['ref_title']))
                                {
                                  $lun = $l_response[$x]['host_ldev_client']['ref_title'];
                                }
                              }

                              //Get Network
                              $l_request = new \idoit\Api\Request($l_apiClient,
                                  'cmdb.category.read',
                                  array(
                                  'objID' => $params['objectID'],
                                  'category' => 'C__CATG__VIRTUAL_DEVICE'
                                )
                              );
                              $l_response = $l_request->send();
                              for ( $x = 0; $x < count($l_response); $x++) {
                                if (isset($l_response[$x]['switch_port_group']['vs_port_group_title']) && !empty($l_response[$x]['switch_port_group']['vs_port_group_title']))
                                {
                                  $network = $l_response[$x]['switch_port_group']['vs_port_group_title'];
                                }
                              }

                              $dom      = new DomDocument("1.0");
                              $dom->formatOutput = true;
                              $dom->preserveWhiteSpace = false;
                              $VirtualMachines  = $dom->createElement('Virtual-Machines');
                              $VirtualMachine = $dom->createElement('Virtual-Machine');
                              $VirtualMachines->appendChild( $VirtualMachine );
                              $VirtualMachine->appendChild( $dom->createElement('Name', $params['postData']['C__CATG__GLOBAL_TITLE']) );
                              $VirtualMachine->appendChild( $dom->createElement('Host', $host) );
                              $VirtualMachine->appendChild( $dom->createElement('Datacenter', $datacenter) );
                              $VirtualMachine->appendChild( $dom->createElement('Guest-Id', '' ) );
                              $VirtualMachine->appendChild( $dom->createElement('Datastore', $lun ) );
                              $VirtualMachine->appendChild( $dom->createElement('Disksize', $hdd ) );
                              $VirtualMachine->appendChild( $dom->createElement('Memory', $all_memory_mb ) );
                              $VirtualMachine->appendChild( $dom->createElement('Number-of-Processor', $cpuCount) );
                              $VirtualMachine->appendChild( $dom->createElement('Nic-Network', $network) );
                              $VirtualMachine->appendChild( $dom->createElement('Nic-Poweron', '1') );
                              $dom->appendChild( $VirtualMachines );

                              $dom->save("/tmp/i-doit-vm-provision.xml");

                                    exec("/usr/src/vmware-vsphere-cli-distrib/apps/vm/vmcreate.pl --url $vSphereWebService --username $vSphereUsername --password $vSpherePassword --filename /tmp/i-doit-vm-provision.xml --schema /usr/src/vmware-vsphere-cli-distrib/apps/schema/vmcreate.xsd");
                              echo 'Provisioned machine ' . $params['postData']['C__CATG__GLOBAL_TITLE'] ;

                              //Set CMDB Status to provisioned
                              $l_request = new \idoit\Api\Request($l_apiClient,
                                  'cmdb.category.update',
                                  array(
                                    'objID' => $params['objectID'],
                                    'category' => 'C__CATG__GLOBAL',
                                    'data'     => array(
                                      'cmdb_status' => $objCMDBStatus_ready,
                                    )
                                  )
                              );

                              $l_response = $l_request->send();

                          }
                           }
                    }
                    else throw new Exception('Event Error: Object id not existent.');

                }
                else throw new Exception('Event Error: Script Parameters not json-encoded.');

            }
            else throw new Exception('Event Error: Script Parameters not base64 encoded.');
        }
    } catch (Exception $e)
    {
        echo $e->getMessage();
        exit;
    }
```

Dieses kopieren wir in die Datei /usr/local/bin/i-doit_provision.php. Damit der Apache Webserver das Script ausführen kann, vergeben wir noch die entsprechenden Rechte:

Nous le copions dans le fichier /usr/local/bin/i-doit_provision.php. Pour que le serveur web Apache puisse exécuter le script, nous attribuons encore les droits correspondants :

```
chmod 775 /usr/local/bin/i-doit_provision.php
```

In diesem Script befindet sich die Konfiguration, um sowohl auf i-doit, als auch VMware zugreifen zu können. Diese müssen entsprechend angepasst werden:

Dans ce script se trouve la configuration pour pouvoir accéder aussi bien à i-doit qu'à VMware. Ceux-ci doivent être adaptés en conséquence :

* $vSphereUsername: Benutzer für vSphere (siehe oben)
* $vSpherePassword: Password für vSphere (siehe oben)
* $vSphereWebService: URL zum Web Service von vSphere
* $objCMDBStatus: ID des CMDB-Status **to be provisioned** (siehe unten)
* $objCMDBStatus_ready: ID des CMDB-Status **provisioned** (siehe unten)
* $api_entry_point: URL zur API von i-doit
* $api_key: Key für die i-doit API

* $vSphereUsername : Utilisateur pour vSphere (voir ci-dessus)
* $vSpherePassword : Mot de passe pour vSphere (voir ci-dessus)
* $vSphereWebService : URL vers le service web de vSphere
* $objCMDBStatus : ID de l'état de la CMDB **to be provisioned** (voir ci-dessous)
* $objCMDBStatus_ready : ID de l'état de la CMDB **provisioned** (voir ci-dessous)
* $api_entry_point : URL vers l'API d'i-doit
* $api_key : clé pour l'API i-doit

### CMDB Status ergänzen

### Compléter l'état de la CMDB

Die beiden [CMDB-Status](../grundlagen/lebens-und-dokumentationszyklus.md)-Angaben to be provisioned und provisioned existieren in der Standard-Installation von i-doit noch nicht, sind aber für den Automatismus entscheidend. Diese müssen wie im verlinkten Artikel beschrieben ergänzt werden.

Les deux indications [CMDB-Status](../grundlagen/lebens-und-dokumentationszyklus.md) to be provisioned et provisioned n'existent pas encore dans l'installation standard d'i-doit, mais elles sont décisives pour l'automatisme. Elles doivent être complétées comme décrit dans l'article en lien.

[![CMDB Status ergänzen](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/3-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/3-vmpv.png)

[ ![Compléter le statut CMDB](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/3-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/3-vmpv.png)

### Event konfigurieren

### Configurer l'événement

Nun müssen wir in i-doit noch konfigurieren, dass bei bestimmten Änderungen des Script aufgerufen wird. Dazu verwenden wir die [Event-Steuerung](../i-doit-pro-add-ons/floorplan.md) und legen dort einen neuen Hook an:

Maintenant, nous devons encore configurer dans i-doit que le script soit appelé lors de certaines modifications. Pour cela, nous utilisons le [contrôle d'événement](../i-doit-pro-add-ons/floorplan.md) et y créons un nouveau hook :

* **Event**: **Category: (arbitrary sources) Speichern**
* **Description**: **VM provisioning**
* **Type**: **SHELL COMMAND**
* **Command**: **/usr/local/bin/i-doit_provision.php**
* **Additional parameters**: leer lassen
* **Mode**: **Executive live**

* **Evénement** : **Category : (arbitrary sources) Enregistrer**.
* **Description** : **VM provisioning**
* **Type** : **SHELL COMMAND**
* **Command** : **/usr/local/bin/i-doit_provision.php**
**Additional parameters** : laisser vide
* **Mode** : **Executive live**

[![Event konfigurieren](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/4-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/4-vmpv.png)

[ ![Configurer l'événement](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/4-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/4-vmpv.png)

An dieser Stelle ist die Konfiguration abgeschlossen und der Automatismus "scharf gestellt".

À ce stade, la configuration est terminée et l'automatisme est "armé".

## Handhabung

## manipulation

Schauen wir uns nach der ausgiebigen, zum Glück einmaligen Konfiguration an, wie der Automatismus funktioniert.

Voyons comment fonctionne l'automatisme après cette configuration poussée, heureusement unique.

### Virtuelle Umgebung in i-doit dokumentieren

### Documenter l'environnement virtuel dans i-doit

Es exisitiert bereits ein vSphere Cluster (Objekttyp **Cluster**) mit einigen ESX-Hosts (Objekttyp **Virtueller Host**). Der Objekt-Titel des Clusters entspricht dem des Datencenters in vSphere. Die Objekt-Titel der ESX-Hosts sind die Hostnamen, die auch in vSphere angezeigt werden.

Il existe déjà un cluster vSphere (type d'objet **Cluster**) avec quelques hôtes ESX (type d'objet **Hôte virtuel**). Le titre d'objet du cluster correspond à celui du centre de données dans vSphere. Les titres d'objets des hôtes ESX sont les noms d'hôtes qui sont également affichés dans vSphere.

[![Cluster](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/5-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/5-vmpv.png)

[ ![Cluster](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/5-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/5-vmpv.png)

**[![Virtueller Host](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/6-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/6-vmpv.png)**

**[ ![Hôte virtuel](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/6-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/6-vmpv.png)**

Pro ESX-Host werden virtuelle Switche mit VLAN IDs konfiguriert (Kategorie **Virtuelle Switche**).

Pour chaque hôte ESX, des commutateurs virtuels sont configurés avec des ID VLAN (catégorie **commutateurs virtuels**).

[![Virtuelle Switche](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/7-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/7-vmpv.png)

[ ![Commutateurs virtuels](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/7-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/7-vmpv.png)

Die ESX-Hosts sind an ein zentrales Storage gebunden. Darüber werden die VMs mit Plattenplatz versorgt (Kategorie **Logische Geräte (Client)**).

Les hôtes ESX sont liés à un stockage central. Les VM sont alimentées en espace disque par ce biais (catégorie **Périphériques logiques (client)**).

[![Logische Geräte](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/8-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/8-vmpv.png)

[ ![Périphériques logiques](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/8-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/8-vmpv.png)

Auf Storage-Seite sieht es dementsprechend aus. Die Kategorie **Logische Geräte (LDEV Server)** enthält die Zuordnung von LUNs zu ESX-Hosts.

Du côté du stockage, cela se présente de la même manière. La catégorie **Périphériques logiques (serveurs LDEV)** contient l'attribution des LUN aux hôtes ESX.

[![Logische Geräte](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/9-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/9-vmpv.png)

[ ![Périphériques logiques](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/9-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/9-vmpv.png)

### Neue VM erstellen

### Créer une nouvelle VM

Der vSphere Cluster und das Storage sind nun laut IT-Dokumentation bereit. Es ist Zeit, VMs zu dokumentieren - und automatisch zu provisionieren.

Le cluster vSphere et le stockage sont maintenant prêts, selon la documentation informatique. Il est temps de documenter les VM - et de les provisionner automatiquement.

Zuerst legt man eine neue VM an (Objekttyp **Virtueller Server**) und setzt diese auf den CMDB-Status geplant (noch existiert sie ja nicht).

Tout d'abord, on crée une nouvelle VM (type d'objet **Serveur virtuel**) et on lui attribue le statut CMDB planifié (elle n'existe pas encore).

[![Virtueller Server](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/10-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/10-vmpv.png)

[ ![Serveur virtuel](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/10-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/10-vmpv.png)

Danach wir die gewünschte Systemkonfiguration dokumentiert. In der Kategorie **CPU** wird die Anzahl der geforderten CPU-Kerne dokumentiert. Für jeden Kern wird ein Eintrag erzeugt.

Ensuite, la configuration souhaitée du système est documentée. Dans la catégorie **CPU**, le nombre de cœurs CPU requis est documenté. Une entrée est créée pour chaque noyau.

[![CPU](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/11-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/11-vmpv.png)

[ ![CPU](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/11-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/11-vmpv.png)

In der Kategorie **Speicher** wird der benötigte RAM dokumentiert. Anzahl von Speicherriegeln und gewählte Größeneinheiten sind nicht wichtig. Stattdessen wird die Gesamtkapazität zusammengezählt.

Dans la catégorie **Mémoire**, la RAM nécessaire est documentée. Le nombre de barres de mémoire et les unités de taille choisies ne sont pas importants. Au lieu de cela, la capacité totale est additionnée.

[![Speicher](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/12-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/12-vmpv.png)

[ ![Mémoire](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/12-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/12-vmpv.png)

In der Kategorie **Netzwerk → Port** wird die Bezeichnung des ersten Eintrags genutzt, um einen virtuellen Port für die VM zu konfigurieren.

Dans la catégorie **Réseau → Port**, le nom de la première entrée est utilisé pour configurer un port virtuel pour la VM.

[![Netzwerk → Port](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/13-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/13-vmpv.png)

[ ![Réseau → Port](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/13-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/13-vmpv.png)

Der benötigte Plattenplatz wird in der Kategorie **Lokaler Massenspeicher → Gerät** angegeben.

L'espace disque nécessaire est indiqué dans la catégorie **Mémoire de masse locale → Périphérique**.

[![Lokaler Massenspeicher → Gerät](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/14-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/14-vmpv.png)

[ ![Périphérique de stockage de masse local →](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/14-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/14-vmpv.png)

In welchem Cluster und auf welchem ESX-Host die VM laufen soll, wird in der Kategorie **Virtuelle Maschine** dokumentiert.

Dans quel cluster et sur quel hôte ESX la VM doit fonctionner, est documenté dans la catégorie **Machine virtuelle**.

[![Virtuelle Maschine](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/15-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/15-vmpv.png)

[ ![Machine virtuelle](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/15-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/15-vmpv.png)

Die Zuordnung von Storage und Netzwerk wird in der Kategorie **Virtuelle Maschine → Virtuelle Geräte** hinterlegt. Der Screenshot zeigt, welche Attribute ausgefüllt werden sollten.

L'attribution du stockage et du réseau est consignée dans la catégorie **Machine virtuelle → Périphériques virtuels**. La capture d'écran montre quels attributs doivent être remplis.

[![Virtuelle Maschine → Virtuelle Geräte](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/16-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/16-vmpv.png)

[ ![Machine virtuelle → Périphériques virtuels](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/16-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/16-vmpv.png)

Damit ist die Konfiguration der VM ausreichend dokumentiert.

La configuration de la VM est ainsi suffisamment documentée.

!!! success "Template"

! !! success "Template" (modèle)

```
Um schneller virtuelle Maschinen zu dokumentieren und somit auch zu provisionieren, eignet sich ein Template. Für jede vorkonfektionierte VM wird ein Template erstellt und daraus neue Objekte erstellt.
```

### VM automatisch privisionieren

### Privatiser automatiquement une VM

Nun kommen wir zum finalen Schritt: das Provisionieren. Viel müssen wir nun nicht mehr tun. In der Kategorie **Allgemein** wird der CMDB-Status auf **to be provisioned** gesetzt. Wird die Änderung gespeichert, fängt das oben beschriebene Script an, die Konfigurationsdaten aus i-doit auszulesen und an vSphere weiterzugeben. Dadurch könnte das Speichern etwas länger dauern, weil auf das Ergebnis gewartet wird.

Nous arrivons maintenant à l'étape finale : le provisionnement. Nous n'avons plus grand-chose à faire. Dans la catégorie **Général**, le statut CMDB est réglé sur **to be provisioned**. Si la modification est enregistrée, le script décrit ci-dessus commence à lire les données de configuration dans i-doit et à les transmettre à vSphere. De ce fait, l'enregistrement pourrait prendre un peu plus de temps, car il faut attendre le résultat.

[![Allgemein](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/17-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/17-vmpv.png)

[ ![Général](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/17-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/17-vmpv.png)

Ist die Provisionierung erfolgreich durchgelaufen, ändert sich der CMDB-Status automatisch auf **provisioned**. Die VM wurde erstellt und läuft. Fertig!

Si le provisionnement s'est déroulé avec succès, le statut CMDB passe automatiquement à **provisioned**. La VM a été créée et fonctionne. Terminé !

[![provisioned](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/18-vmpv.png)](../assets/images/de/anwendungsfaelle/vm-provisionieren-veraltet/18-vmpv.png)

[ ![provisioned](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/18-vmpv.png)](../assets/images/fr/applicationfaelle/vm-provisioning-veraltet/18-vmpv.png)

Die Kommunikation zwischen i-doit und vSphere wird unter **Verwaltung → Add-ons → Events → Historie (Log)** angezeigt.

La communication entre i-doit et vSphere est affichée sous **Administration → Add-ons → Events → Historique (Log)**.