**Contents**

*   1[Problem](#VMProvisioning-Problem)
*   2[Solution](#VMProvisioning-Solution)
*   3[Assumptions](#VMProvisioning-Assumptions)
*   4[Configuration](#VMProvisioning-Configuration)
    *   4.1[vSphere SDK](#VMProvisioning-vSphereSDK)
    *   4.2[i-doit API](#VMProvisioning-i-doitAPI)
    *   4.3[Script](#VMProvisioning-Script)
    *   4.4[Supplement CMDB Status](#VMProvisioning-SupplementCMDBStatus)
    *   4.5[Configure Event](#VMProvisioning-ConfigureEvent)
*   5[Handling](#VMProvisioning-Handling)
    *   5.1[Document the Virtual Environment in i-doit](#VMProvisioning-DocumenttheVirtualEnvironmentini-doit)
    *   5.2[Create New VM](#VMProvisioning-CreateNewVM)
    *   5.3[Provision VM Automatically](#VMProvisioning-ProvisionVMAutomatically)

In this article, we examine the [use case](/display/en/Use+Cases) of provisioning virtual machines (VM) via i-doit. For this purpose, we utilize a well-maintained [IT documentation](/display/en/Glossary) paired with a few scripts to make this [automation](/display/en/Automation+and+Integration) a reality.

Problem
-------

Up until now, documentation and configuration files are strictly distinguished: The organization-wide IT is documented in i-doit, including a virtualization cluster. This cluster consists of multiple virtualization hosts (host systems) and the virtual machines running there (guest systems). The configuration of each VM is executed within the administration environment of the cluster. This includes the creation of a new VM with specific settings to CPU, memory, network, disk space and so on. This process is also called provisioning.

For the daily routine, this means that the process is characterized by a dedicated tool which creates a new VM. Subsequently, the completed work is documented in i-doit:

1.  Start the configuration tool of the virtualization cluster
2.  Create and configure a new VM
3.  Switch to the IT documentation (i-doit)
4.  Create a new VM, configure the respective [categories](/display/en/Structure+of+the+IT+Documentation), assign the VM to the cluster

There is no data exchange between the applied tool and i-doit, thus the VM configuration has to be performed twice. Errors cannot be ruled out when transferring the configuration. The redundant maintenance of configuration files is therefore a very thankless task for the admin.

This article is outdated and no longer current

Please note that the procedure described here may already be outdated.

  

  

Solution
--------

We wish to optimize this process by using the configuration files available in i-doit and by automating some of the steps. With this in mind, we change the process:

1.  Open the IT documentation (i-doit)
2.  Create a new VM, configure the respective [categories](/display/en/Structure+of+the+IT+Documentation), assign the VM to the cluster
3.  The VM will be created and provisioned automatically in the configuration tool of the virtualization cluster

Four manual steps become two. The third step is carried out automatically in the background. The doubled maintenance of the configuration files by the admin can be omitted. Error sources are eliminated and the admin is happy.

Assumptions
-----------

We will completely go through this use case with an example. This is supposed to show the general procedure and can be applied easily in other environments. For the solution we assume:

1.  The virtualization cluster is based on [VMware vSphere](https://en.wikipedia.org/wiki/VMware_vSphere) in version 5.
2.  i-doit is installed on Debian GNU/Linux 8.5. For this, we use the [Eval Appliance](/display/en/i-doit+Virtual+Eval+Appliance). The distribution packages should be updated with `apt`.
3.  The version of i-doit is [1.7.1](/display/en/Version+History) or higher. The i-doit host is accessible via the FQDN `i-doit.example.net`.
4.  To monitor the automation we use the VMware vSphere client.
5.  A user exists in VMware vSphere who has the permissions to provision VMs. In our example this user is called `vmprovision` with the password `vmprovision`.

Configuration
-------------

First of all, we have to carry out some preparations so that both systems are able to communicate with each other.

### vSphere SDK

We require [VMware SDK for Perl](https://developercenter.vmware.com/web/sdk/60/vsphere-perl) on the i-doit host so that i-doit can inform the vSphere cluster to provision a new VM. Therefore we download version 6.0.2. For this purpose, you need an account at VMware and you have to accept the VMware End User License Agreement (EULA). We decide to download the package as Tarball (.tar.gz) for 64bit operating systems.

  

![](/download/attachments/43319301/vmware_vsphere_perl_sdk_download.png?version=1&modificationDate=1502722863322&api=v2&effects=drop-shadow)

  

![](/download/attachments/43319301/vmware_vsphere_perl_sdk_64bit_download.png?version=1&modificationDate=1502722862903&api=v2&effects=drop-shadow)

After downloading, we copy the Tarball to the i-doit host and extract it. We will log in as root since the root permissions are necessary for almost all of the following commands:

[?](#)

`scp` `VMware-vSphere-Perl-SDK-6.0.0-3561779.x86_64.``tar``.gz idoitadm@i-doit.example.net:`

`ssh` `idoitadm@i-doit.example.net`

`sudo` `-s`

`tar` `vxzf VMware-vSphere-Perl-SDK-6.0.0-3561779.x86_64.``tar``.gz`

`mv` `vmware-vsphere-cli-distrib/` `/usr/src/`

`cd` `/usr/src/`

At this point, it is a good idea to bring the system up to date - if you have not already done so. We also install additional packages via `apt` and `cpan`:

[?](#)

`apt-get update && apt-get upgrade && apt-get dist-upgrade && apt-get autoremove && apt-get clean`

`apt-get` `install` `git build-essential libssl-dev perl-doc libxml-libxml-perl libxml2-dev uuid-dev libuuid-perl libcrypt-ssleay-perl libapache2-mod-perl2 libsoap-lite-perl`

`cpan` `install` `CPAN ExtUtils::MakeMaker Module::Build Net::FTP LWP Crypt::OpenSSL::RSA Class::MethodMaker Socket6 IO::Socket::INET6 Convert::ASN1 Crypt::X509 UUID::Random Archive::Zip Path::Class Try::Tiny Data::Dump Net::INET6Glue LWP::Protocol::https`

Since the SDK does not support Debian GNU/Linux officially, we will need to trick the SDK into thinking it is a different operating system:

[?](#)

`echo` `ubuntu >` `/etc/tmp-release`

The SDK needs the environment variables `http_proxy` and `ftp_proxy`:

[?](#)

`export` `http_proxy=`

`export` `ftp_proxy=`

Now we install the SDK by utilizing the provided installation script:

[?](#)

`.``/vmware-install``.pl`

The script once again needs to have the EULA of VMware confirmed with `yes`. If additional Perl modules are to be installed, you should also confirm this with `yes`. Once the installation was completed successfully, the following text appears as part of the output:

[?](#)

`This installer has successfully installed both vSphere CLI and the vSphere SDK` `for` `Perl.`

At this point, the installation of the SDK is completed. We followed these [guidelines](http://www.sysadminslife.com/linux/vmware-vsphere-sdk-for-perl-api-unter-debian-squeeze-installieren/). Thank you very much! And now we continue with the next step.

### i-doit API

Part of the communication between i-doit and VMware takes place via the [API of i-doit](/pages/viewpage.action?pageId=37355644). The API has to be activated and you need to know the API key. To use the API comfortably we use the [reference client for PHP](https://bitbucket.org/dstuecken/i-doit-api-clients/wiki/PHP):

[?](#)

`cd` `/usr/local/share/`

`git clone https:``//bitbucket``.org``/dstuecken/i-doit-api-clients``.git`

`cd` `i-doit-api-clients``/php/`

`make` `initialize`

For `make initialize` the API client queries the URL and the API key of the i-doit installation that is going to be used.

### Script

The following script represents the link connection between i-doit and VMware:

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

We copy this to the `/usr/local/bin/i-doit_provision.php` file. We also assign the appropriate permissions so that the Apache web server is able to run the script:

[?](#)

`chmod` `775` `/usr/local/bin/i-doit_provision``.php`

This script includes the configuration to access both i-doit and VMware. It has to be adjusted accordingly:

*   `$vSphereUsername`: User for vSphere (see above)
*   `$vSpherePassword`: Password for vSphere (see above)
*   `$vSphereWebService`: URL to the Web Service of vSphere
*   `$objCMDBStatus`: ID of the CMDB status `**to be provisioned**` (see below)
*   `$objCMDBStatus_ready`: ID of the CMDB status `**provisioned**` (see below)
*   `$api_entry_point`: URL to the API of i-doit
*   `$api_key`: Key for the i-doit API

### Supplement CMDB Status

The two [CMDB status](/display/en/Life+and+Documentation+Cycle) statements **`to be provisioned`** and **`provisioned`** do not exist in the i-doit default installation yet but they are crucial for the automation. They need to be supplemented as described in the linked article.

![](/download/attachments/43319301/vm_provisioning_cmdb_status.png?version=1&modificationDate=1502722850725&api=v2&effects=drop-shadow)

### Configure Event

Now i-doit has to be configured to execute the script if certain changes are performed. For this, we use the [event controls](/display/en/Events) and create a new hook.

*   `**Event**`: `**Category: (arbitrary sources) Save**`
*   `**Description**`: `**VM provisioning**`
*   `**Type**`: `**SHELL COMMAND**`
*   `**Command**`: `**/usr/local/bin/i-doit_provision.php**`
*   `**Additional parameters**`: leave this blank
*   `**Mode**`: `**Executive live**`

![](/download/attachments/43319301/vm_provisioning_event_hook.png?version=1&modificationDate=1502722853229&api=v2&effects=drop-shadow)

At this point, the configuration is finished and the automation is "activated".

Handling
--------

After this extensive one-time configuration we can now take a look at how the automation works.

### Document the Virtual Environment in i-doit

A vSphere cluster (object type **`Cluster`**) with some ESX hosts (object type **`Virtual Host`**) already exists. The object title of the cluster corresponds to the datacenter in vSphere. The object titles of the ESX hosts are the host names which are also displayed in vSphere.

![](/download/attachments/43319301/vm_provisioning_vsphere_cluster.png?version=1&modificationDate=1502722859887&api=v2&effects=drop-shadow)

![](/download/attachments/43319301/vm_provisioning_virtual_hosts.png?version=1&modificationDate=1502722858057&api=v2&effects=drop-shadow)

Virtual switches are configured with VLAN IDs (category **`Virtual switches`**) for each ESX host.

![](/download/attachments/43319301/vm_provisioning_virtual_switches.png?version=1&modificationDate=1502722859216&api=v2&effects=drop-shadow)

The ESX hosts are bound to a central storage which supplies the VMs with disk space (category **`Logic devices (Client)`**).

![](/download/attachments/43319301/vm_provisioning_logical_devices_%28client%29.png?version=1&modificationDate=1502722853658&api=v2&effects=drop-shadow)

The storage side is construed accordingly. The **`Logic devices (LDEV Server)`** category contains the assignment of LUNs to ESX hosts.

![](/download/attachments/43319301/vm_provisioning_logical_devices_%28ldev_server%29.png?version=1&modificationDate=1502722854238&api=v2&effects=drop-shadow)

### Create New VM

The vSphere Cluster and the storage are now ready according to the [IT documentation](/display/en/Structure+of+the+IT+Documentation). It is time to document VMs – and provision them automatically.

First you create a new VM (object type **`Virtual server`**) and set its CMDB status to `**planned**` (since it does not exist yet).

![](/download/attachments/43319301/vm_provisioning_planned.png?version=2&modificationDate=1502722855491&api=v2&effects=drop-shadow)  

Afterwards, the desired system configuration is documented. The number of demanded CPU cores is documented in the **`CPU`** category. One entry is generated for each core.

![](/download/attachments/43319301/vm_provisioning_cpu.png?version=1&modificationDate=1502722851484&api=v2&effects=drop-shadow)

The required RAM is documented in the **`Memory`** category. Number of RAM modules and the chosen value units are not important. The total capacity is summed up instead.

![](/download/attachments/43319301/vm_provisioning_memory.png?version=1&modificationDate=1502722854921&api=v2&effects=drop-shadow)

In the **`Network → Port`** category the title of the first entry is used to configure a virtual port for the VM.

![](/download/attachments/43319301/vm_provisioning_port.png?version=1&modificationDate=1502722856047&api=v2&effects=drop-shadow)

The required disk space is specified in the **`Direct Attached Storage → Device`** category.

![](/download/attachments/43319301/vm_provisioning_device.png?version=1&modificationDate=1502722852118&api=v2&effects=drop-shadow)

In the **`Virtual machine`** category you document in which cluster and on what ESX host the VM is supposed to run.

![](/download/attachments/43319301/vm_provisioning_virtual_machine.png?version=1&modificationDate=1502722858572&api=v2&effects=drop-shadow)

The assignment of storage and network is stored in the **`Virtual machine → Virtual devices`** category. The screenshot shows which attributes should be filled in.

![](/download/attachments/43319301/vm_provisioning_virtual_devices.png?version=1&modificationDate=1502722857362&api=v2&effects=drop-shadow)

With this the configuration of the VM is sufficiently documented.

  

Templates

A template is useful to document virtual machines faster and thereby provision them faster. A template is created for each pre-assembled VM and new objects are generated on basis of this template.

### Provision VM Automatically

Now we come to the final step: the provisioning. We do not have much left to do. In the `**General**` category the CMDB status is set to **`to be provisioned`**. When the change is saved, the script described above starts to read the configuration files from i-doit and transfer them to vSphere. Saving may take some time as the results need to be there first.

![](/download/attachments/43319301/vm_provisioning_to_be_provisioned.png?version=2&modificationDate=1502722857000&api=v2&effects=drop-shadow)  

Once the provisioning has finished successfully, the CMDB status is automatically changed to **`provisioned`**. The VM has been created and runs. Done!

![](/download/attachments/43319301/vm_provisioning_provisioned.png?version=2&modificationDate=1502722856588&api=v2&effects=drop-shadow)  

The communication between i-doit and vSphere is displayed at **`Administration → CMDB settings → Events → History (Log)`**.