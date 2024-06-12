# Provisionnement de machines virtuelles

Dans cet article, nous examinons le [cas d'utilisation](../use-cases/index.md) du provisionnement de machines virtuelles (VM) via i-doit. À cette fin, nous utilisons une [documentation informatique](../glossary.md) bien entretenue associée à quelques scripts pour rendre cette [automatisation](../automation-and-integration/index.md) une réalité.

Problème
-------

Jusqu'à présent, la documentation et les fichiers de configuration sont strictement distingués : L'informatique de l'organisation est documentée dans i-doit, y compris un cluster de virtualisation. Ce cluster se compose de plusieurs hôtes de virtualisation (systèmes hôtes) et des machines virtuelles qui y fonctionnent (systèmes invités). La configuration de chaque VM est exécutée dans l'environnement d'administration du cluster. Cela inclut la création d'une nouvelle VM avec des paramètres spécifiques pour le CPU, la mémoire, le réseau, l'espace disque, etc. Ce processus est également appelé provisionnement.

Pour la routine quotidienne, cela signifie que le processus est caractérisé par un outil dédié qui crée une nouvelle VM. Ensuite, le travail terminé est documenté dans i-doit :

1.  Démarrer l'outil de configuration du cluster de virtualisation
2.  Créer et configurer une nouvelle VM
3.  Passer à la documentation informatique (i-doit)
4.  Créer une nouvelle VM, configurer les [catégories](../basics/structure-of-the-it-documentation.md) respectives, attribuer la VM au cluster

Il n'y a pas d'échange de données entre l'outil utilisé et i-doit, donc la configuration de la VM doit être effectuée deux fois. Les erreurs ne peuvent pas être exclues lors du transfert de la configuration. La maintenance redondante des fichiers de configuration est donc une tâche très ingrate pour l'administrateur.

!!! warning "Cet article est obsolète et n'est plus à jour"

    Veuillez noter que la procédure décrite ici peut déjà être obsolète.

  

  

Solution
--------

Nous souhaitons optimiser ce processus en utilisant les fichiers de configuration disponibles dans i-doit et en automatisant certaines étapes. Dans cette optique, nous modifions le processus :

1.  Ouvrir la documentation informatique (i-doit)
2.  Créer une nouvelle VM, configurer les [catégories](../basics/structure-of-the-it-documentation.md) respectives, attribuer la VM au cluster
3.  La VM sera créée et provisionnée automatiquement dans l'outil de configuration du cluster de virtualisation

Quatre étapes manuelles deviennent deux. La troisième étape est effectuée automatiquement en arrière-plan. La maintenance doublée des fichiers de configuration par l'administrateur peut être omise. Les sources d'erreurs sont éliminées et l'administrateur est satisfait.

Hypothèses
-----------

Nous allons parcourir complètement ce cas d'utilisation avec un exemple. Cela est censé montrer la procédure générale et peut être facilement appliqué dans d'autres environnements. Pour la solution, nous supposons :

1.  Le cluster de virtualisation est basé sur [VMware vSphere](https://fr.wikipedia.org/wiki/VMware_vSphere) en version 5.
2.  i-doit est installé sur Debian GNU/Linux 8.5. Pour cela, nous utilisons l'[Appliance d'Évaluation](../installation/i-doit-virtual-eval-appliance/index.md). Les paquets de distribution doivent être mis à jour avec apt.
3.  La version de i-doit est [1.7.1](../version-history/index.md) ou supérieure. L'hôte i-doit est accessible via le FQDN i-doit.example.net.
4.  Pour surveiller l'automatisation, nous utilisons le client VMware vSphere.
5.  Un utilisateur existe dans VMware vSphere qui a les autorisations pour provisionner des VM. Dans notre exemple, cet utilisateur s'appelle vmprovision avec le mot de passe vmprovision.

Configuration
-------------

Tout d'abord, nous devons effectuer quelques préparatifs afin que les deux systèmes puissent communiquer entre eux.

### SDK vSphere

Nous avons besoin du [SDK VMware pour Perl](https://developercenter.vmware.com/web/sdk/60/vsphere-perl) sur l'hôte i-doit afin que i-doit puisse informer le cluster vSphere de provisionner une nouvelle VM. Pour cela, nous téléchargeons la version 6.0.2. À cette fin, vous avez besoin d'un compte chez VMware et vous devez accepter le Contrat de Licence Utilisateur Final (CLUF) de VMware. Nous décidons de télécharger le package en tant que Tarball (.tar.gz) pour les systèmes d'exploitation 64 bits.

  

[![vm-provisioning-sdk](../assets/images/en/use-cases/vm-provisioning/1-vmp.png)](../assets/images/en/use-cases/vm-provisioning/1-vmp.png)

  

[![vm-provisioning-sdk](../assets/images/en/use-cases/vm-provisioning/2-vmp.png)](../assets/images/en/use-cases/vm-provisioning/2-vmp.png)

Après le téléchargement, nous copions le Tarball sur l'hôte i-doit et l'extrayons. Nous nous connecterons en tant que root car les permissions root sont nécessaires pour presque toutes les commandes suivantes:

```bash
scp VMware-vSphere-Perl-SDK-6.0.0-3561779.x86_64.tar.gz idoitadm@i-doit.example.net:
ssh idoitadm@i-doit.example.net
sudo -s
tar vxzf VMware-vSphere-Perl-SDK-6.0.0-3561779.x86_64.tar.gz
mv vmware-vsphere-cli-distrib/ /usr/src/
cd /usr/src/
```

À ce stade, il est conseillé de mettre à jour le système - si ce n'est pas déjà fait. Nous installons également des packages supplémentaires via apt et cpan:

```bash
apt-get update && apt-get upgrade && apt-get dist-upgrade && apt-get autoremove && apt-get clean
apt-get install git build-essential libssl-dev perl-doc libxml-libxml-perl libxml2-dev uuid-dev libuuid-perl libcrypt-ssleay-perl libapache2-mod-perl2 libsoap-lite-perl
cpan install CPAN ExtUtils::MakeMaker Module::Build Net::FTP LWP Crypt::OpenSSL::RSA Class::MethodMaker Socket6 IO::Socket::INET6 Convert::ASN1 Crypt::X509 UUID::Random Archive::Zip Path::Class Try::Tiny Data::Dump Net::INET6Glue LWP::Protocol::https
```

Étant donné que le SDK ne prend pas en charge officiellement Debian GNU/Linux, nous devrons tromper le SDK en lui faisant croire qu'il s'agit d'un système d'exploitation différent:

```bash
echo ubuntu > /etc/tmp-release
```

Le SDK a besoin des variables d'environnement http_proxy et ftp_proxy:

```bash
export http_proxy=
export ftp_proxy=
```

Maintenant, nous installons le SDK en utilisant le script d'installation fourni:

```bash
./vmware-install.pl
```

Le script doit une fois de plus avoir l'EULA de VMware confirmé avec yes. Si des modules Perl supplémentaires doivent être installés, vous devez également confirmer cela avec yes. Une fois l'installation terminée avec succès, le texte suivant apparaît dans la sortie:

```bash
Cet installateur a installé avec succès à la fois vSphere CLI et le SDK vSphere pour Perl.
```

À ce stade, l'installation du SDK est terminée. Nous avons suivi ces [directives](http://www.sysadminslife.com/linux/vmware-vsphere-sdk-for-perl-api-unter-debian-squeeze-installieren/). Merci beaucoup! Et maintenant, nous passons à l'étape suivante.

### API i-doit

Une partie de la communication entre i-doit et VMware se fait via l'[API d'i-doit](../i-doit-pro-add-ons/api/index.md). L'API doit être activée et vous devez connaître la clé API. Pour utiliser l'API confortablement, nous utilisons le [client de référence pour PHP](https://bitbucket.org/dstuecken/i-doit-api-clients/wiki/PHP):
```

```php
    cd /usr/local/share/
    git clone https://bitbucket.org/dstuecken/i-doit-api-clients.git
    cd i-doit-api-clients/php/
    make initialize
```

Pour exécuter `make initialize`, le client API interroge l'URL et la clé API de l'installation i-doit qui va être utilisée.

### Script

Le script suivant représente la connexion de lien entre i-doit et VMware:

```php
    #!/usr/bin/php
    <?php
    
    /**
    * Script d'exemple pour provisionner une nouvelle machine virtuelle dans vSphere avec i-doit
    *
    * Ce script utilise l'API i-doit et le SDK VMware Perl. Pour plus de détails, veuillez consulter la base de connaissances i-doit.
    *
    * Sous licence MIT (MIT), <https://opensource.org/licenses/mit-license.php>.
    *
    * Droits d'auteur (c) 2016 synetics GmbH
    *
    * La permission est accordée, à titre gracieux, à toute personne obtenant une copie de ce logiciel et
    * des fichiers de documentation associés (le "Logiciel"), de traiter dans le Logiciel sans restriction,
    * y compris, sans limitation, les droits d'utiliser, de copier, de modifier, de fusionner, de publier, de distribuer,
    * de sous-licencier et/ou de vendre des copies du Logiciel, et de permettre aux personnes à qui le Logiciel est
    * fourni de le faire, sous réserve des conditions suivantes :
    *
    * L'avis de droit d'auteur ci-dessus et cet avis d'autorisation doivent être inclus dans toutes les copies ou
    * parties substantielles du Logiciel.
    *
    * LE LOGICIEL EST FOURNI "TEL QUEL", SANS GARANTIE D'AUCUNE SORTE, EXPRESSE OU IMPLICITE, Y COMPRIS, MAIS
    * SANS S'Y LIMITER, LES GARANTIES DE QUALITÉ MARCHANDE, D'ADÉQUATION À UN USAGE PARTICULIER ET
    * D'ABSENCE DE CONTREFAÇON. EN AUCUN CAS LES AUTEURS OU LES TITULAIRES DE DROITS D'AUTEUR NE SERONT RESPONSABLES DE TOUTE RÉCLAMATION,
    * DOMMAGES OU AUTRE RESPONSABILITÉ, QUE CE SOIT DANS UNE ACTION CONTRACTUELLE, DÉLICTUELLE OU AUTRE, DÉCOULANT DE,
    * HORS DE OU EN RELATION AVEC LE LOGICIEL OU L'UTILISATION OU D'AUTRES TRANSACTIONS DANS LE LOGICIEL.
    */
    
    use idoit\Api\Client as ApiClient;
    use idoit\Api\CMDB\Object as CMDBObject;
    use idoit\Api\CMDB\Category;
    use idoit\Api\Connection as ApiConnection;
    
    require_once('/usr/local/share/i-doit-api-clients/php/apiclient.php');
```

```php
/**
* Configuration
*/
    
$vSphereUsername = 'vmprovision';
$vSpherePassword = 'vmprovision';
$vSphereWebService = 'https://vc01.example.net:443/sdk/webService';
$objCMDBStatus = '15'; // 'à provisionner'
$objCMDBStatus_ready = '16'; // 'provisionné'
$api_entry_point = 'http://localhost/src/jsonrpc.php';
$api_key = '2p1osbg427';
\idoit\Api\Config::$jsonRpcDebug = false;
    
function filter_number($p_string)
{
    // Vérifiez si nous avons un nombre positif ou négatif.
    $l_sign = (substr(trim($p_string), 0, 1) === '-') ? '-' : '';
    
    // Tout d'abord, nous supprimons la devise ("GHZ", "Euro", "$", ...) y compris les espaces.
    $p_string = preg_replace('/([^,\.\d])*/i', '', $p_string);
    
    // Si le nombre est nul
    if (is_null($p_string) || $p_string === '') return null;
    
    // Vérifiez si quelqu'un a écrit une chaîne comme "1.000.000".
    if (substr_count($p_string, '.') > 1)
    {
        $p_string = str_replace('.', '', $p_string);
    } // if
    
    // Vérifiez si quelqu'un a écrit une chaîne comme "1,000,000".
    if (substr_count($p_string, ',') > 1)
    {
        $p_string = str_replace(',', '', $p_string);
    } // if
    
    // Si nous trouvons un seul point ou une seule virgule, nous utilisons le dernier trouvé comme point décimal.
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
    
    // Enfin, vérifiez si le nombre n'est pas numérique, puis retournez null
    if (!is_numeric($p_string)) return null;
    
    // Maintenant, nous remplaçons les virgules par des points : "1000,10" par "1000.10" et renvoyons la valeur arrondie.
    return (float) round(str_replace(',', '.', $l_sign . $p_string), 4);
} // function
```

```php
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
```  

```php
                            $all_memory = 0;
                            $l_response = $l_request->send();
                            for ( $x = 0; $x < count($l_response); $x++) {
    
                                $memory_cleaned = filter_number($l_response[$x]['capacity']['title']);
                                $memory = to_kbytes( $memory_cleaned . $l_response[$x]['unit']['title']);
                                $all_memory = $all_memory + $memory;
                            }
                            $all_memory_mb = $all_memory / 1024;
    
                            // Obtenir le disque dur
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
    
                            // Obtenir l'hôte virtuel et le cluster
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
    
                            // Obtenir le LUN SAN
                            $l_request = new \idoit\Api.Request($l_apiClient,
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
```

```php
//Obtenir le réseau
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
$VirtualMachines  = $dom->createElement('Machines-Virtuelles');
$MachineVirtuelle = $dom->createElement('Machine-Virtuelle');
$VirtualMachines->appendChild( $MachineVirtuelle );
$MachineVirtuelle->appendChild( $dom->createElement('Nom', $params['postData']['C__CATG__GLOBAL_TITLE']) );
$MachineVirtuelle->appendChild( $dom->createElement('Hôte', $host) );
$MachineVirtuelle->appendChild( $dom->createElement('Centre-de-données', $datacenter) );
$MachineVirtuelle->appendChild( $dom->createElement('Id-Guest', '' ) );
$MachineVirtuelle->appendChild( $dom->createElement('Stockage', $lun ) );
$MachineVirtuelle->appendChild( $dom->createElement('Taille-du-disque', $hdd ) );
$MachineVirtuelle->appendChild( $dom->createElement('Mémoire', $all_memory_mb ) );
$MachineVirtuelle->appendChild( $dom->createElement('Nombre-de-Processeur', $cpuCount) );
$MachineVirtuelle->appendChild( $dom->createElement('Réseau-Nic', $network) );
$MachineVirtuelle->appendChild( $dom->createElement('Nic-Mise-en-marche', '1') );
$dom->appendChild( $VirtualMachines );
```

```php
$dom->save("/tmp/i-doit-vm-provision.xml");

exec("/usr/src/vmware-vsphere-cli-distrib/apps/vm/vmcreate.pl --url $vSphereWebService --username $vSphereUsername --password $vSpherePassword --filename /tmp/i-doit-vm-provision.xml --schema /usr/src/vmware-vsphere-cli-distrib/apps/schema/vmcreate.xsd");
echo 'Machine provisionnée ' . $params['postData']['C__CATG__GLOBAL_TITLE'] ;

//Définir le statut CMDB sur provisionné
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
else throw new Exception('Erreur d\'événement : ID d\'objet inexistant.');

}
else throw new Exception('Erreur d\'événement : Paramètres de script non encodés en JSON.');

}
else throw new Exception('Erreur d\'événement : Paramètres de script non encodés en base64.');
} catch (Exception $e)
{
echo $e->getMessage();
exit;
}
```

Nous copions ceci dans le fichier /usr/local/bin/i-doit_provision.php. Nous attribuons également les autorisations appropriées pour que le serveur web Apache puisse exécuter le script :

```bash
chmod 775 /usr/local/bin/i-doit_provision.php
```

Ce script inclut la configuration pour accéder à la fois à i-doit et VMware. Il doit être ajusté en conséquence :

-   $vSphereUsername : Utilisateur pour vSphere (voir ci-dessus)
-   $vSpherePassword : Mot de passe pour vSphere (voir ci-dessus)
-   $vSphereWebService : URL du service Web de vSphere
-   $objCMDBStatus : ID du statut CMDB **à provisionner** (voir ci-dessous)
-   $objCMDBStatus_ready : ID du statut CMDB **provisionné** (voir ci-dessous)
-   $api_entry_point : URL de l'API d'i-doit
-   $api_key : Clé pour l'API d'i-doit
```

### Statut de la CMDB supplémentaire

Les deux déclarations de statut de la [CMDB](../basics/life-and-documentation-cycle.md) **à provisionner** et **provisionné** n'existent pas encore dans l'installation par défaut d'i-doit, mais elles sont cruciales pour l'automatisation. Elles doivent être complétées comme décrit dans l'article lié.

[![vm-provisioning-cmd](../assets/images/en/use-cases/vm-provisioning/3-vmp.png)](../assets/images/en/use-cases/vm-provisioning/3-vmp.png)

### Configurer l'événement

Maintenant, i-doit doit être configuré pour exécuter le script si certaines modifications sont effectuées. Pour cela, nous utilisons les [contrôles d'événements](../i-doit-pro-add-ons/events.md) et créons un nouveau hook.

*   **Événement**: **Catégorie: (sources arbitraires) Enregistrer**
*   **Description**: **Provisionnement de VM**
*   **Type**: **COMMANDE SHELL**
*   **Commande**: **/usr/local/bin/i-doit_provision.php**
*   **Paramètres supplémentaires**: laisser ceci vide
*   **Mode**: **Exécutif en direct**

[![vm-provisioning-configure](../assets/images/en/use-cases/vm-provisioning/4-vmp.png)](../assets/images/en/use-cases/vm-provisioning/4-vmp.png)

À ce stade, la configuration est terminée et l'automatisation est "activée".

Gestion
--------

Après cette configuration unique et étendue, nous pouvons maintenant voir comment fonctionne l'automatisation.

### Documenter l'environnement virtuel dans i-doit

Un cluster vSphere (type d'objet **Cluster**) avec quelques hôtes ESX (type d'objet **Hôte virtuel**) existe déjà. Le titre de l'objet du cluster correspond au centre de données dans vSphere. Les titres des objets des hôtes ESX sont les noms d'hôtes qui sont également affichés dans vSphere.

[![vm-provisioning-virtual](../assets/images/en/use-cases/vm-provisioning/5-vmp.png)](../assets/images/en/use-cases/vm-provisioning/5-vmp.png)

[![vm-provisioning](../assets/images/en/use-cases/vm-provisioning/6-vmp.png)](../assets/images/en/use-cases/vm-provisioning/6-vmp.png)

Les commutateurs virtuels sont configurés avec des identifiants VLAN (catégorie **Commutateurs virtuels**) pour chaque hôte ESX.

[![vm-provisioning](../assets/images/en/use-cases/vm-provisioning/7-vmp.png)](../assets/images/en/use-cases/vm-provisioning/7-vmp.png)

Les hôtes ESX sont liés à un stockage central qui fournit aux machines virtuelles de l'espace disque (catégorie **Dispositifs logiques (Client)**).

[![provisionnement-vm](../assets/images/en/use-cases/vm-provisioning/8-vmp.png)](../assets/images/en/use-cases/vm-provisioning/8-vmp.png)

Le côté stockage est construit en conséquence. La catégorie **Dispositifs logiques (Serveur LDEV)** contient l'attribution des LUN aux hôtes ESX.

[![provisionnement-vm](../assets/images/en/use-cases/vm-provisioning/9-vmp.png)](../assets/images/en/use-cases/vm-provisioning/9-vmp.png)

### Créer une nouvelle VM

Le cluster vSphere et le stockage sont maintenant prêts selon la [documentation informatique](../basics/structure-of-the-it-documentation.md). Il est temps de documenter les machines virtuelles - et de les provisionner automatiquement.

Tout d'abord, vous créez une nouvelle VM (type d'objet **Serveur virtuel**) et définissez son statut CMDB à **planifié** (car elle n'existe pas encore).

[![provisionnement-vm](../assets/images/en/use-cases/vm-provisioning/10-vmp.png)](../assets/images/en/use-cases/vm-provisioning/10-vmp.png)  

Ensuite, la configuration système souhaitée est documentée. Le nombre de cœurs de CPU demandés est documenté dans la catégorie **CPU**. Une entrée est générée pour chaque cœur.

[![provisionnement-vm](../assets/images/en/use-cases/vm-provisioning/11-vmp.png)](../assets/images/en/use-cases/vm-provisioning/11-vmp.png)

La RAM requise est documentée dans la catégorie **Mémoire**. Le nombre de modules de RAM et les unités de valeur choisies ne sont pas importants. La capacité totale est plutôt cumulée.

[![provisionnement-vm](../assets/images/en/use-cases/vm-provisioning/12-vmp.png)](../assets/images/en/use-cases/vm-provisioning/12-vmp.png)

Dans la catégorie **Réseau → Port**, le titre de la première entrée est utilisé pour configurer un port virtuel pour la VM.

[![provisionnement-vm](../assets/images/en/use-cases/vm-provisioning/13-vmp.png)](../assets/images/en/use-cases/vm-provisioning/13-vmp.png)

L'espace disque requis est spécifié dans la catégorie **Stockage Direct Attaché → Périphérique**.

[![provisionnement-vm](../assets/images/en/use-cases/vm-provisioning/14-vmp.png)](../assets/images/en/use-cases/vm-provisioning/14-vmp.png)

Dans la catégorie **Machine virtuelle**, vous documentez dans quel cluster et sur quel hôte ESX la VM est censée s'exécuter.

[![vm-provisioning](../assets/images/en/use-cases/vm-provisioning/15-vmp.png)](../assets/images/en/use-cases/vm-provisioning/15-vmp.png)

L'attribution du stockage et du réseau est stockée dans la catégorie **Machine virtuelle → Périphériques virtuels**. La capture d'écran montre quels attributs doivent être remplis.

[![vm-provisioning](../assets/images/en/use-cases/vm-provisioning/16-vmp.png)](../assets/images/en/use-cases/vm-provisioning/16-vmp.png)

Avec cela, la configuration de la VM est suffisamment documentée.

Modèles

Un modèle est utile pour documenter plus rapidement les machines virtuelles et ainsi les provisionner plus rapidement. Un modèle est créé pour chaque VM pré-assemblée et de nouveaux objets sont générés sur la base de ce modèle.

### Provisionnement automatique de VM

Maintenant, nous arrivons à la dernière étape : le provisionnement. Il ne nous reste plus grand-chose à faire. Dans la catégorie **Général**, le statut CMDB est défini sur **à provisionner**. Lorsque la modification est enregistrée, le script décrit ci-dessus commence à lire les fichiers de configuration depuis i-doit et les transfère vers vSphere. L'enregistrement peut prendre un certain temps car les résultats doivent d'abord être disponibles.

[![vm-provisioning](../assets/images/en/use-cases/vm-provisioning/17-vmp.png)](../assets/images/en/use-cases/vm-provisioning/17-vmp.png)

Une fois le provisionnement terminé avec succès, le statut CMDB est automatiquement changé en **provisionné**. La VM a été créée et fonctionne. Terminé !

[![vm-provisioning](../assets/images/en/use-cases/vm-provisioning/18-vmp.png)](../assets/images/en/use-cases/vm-provisioning/18-vmp.png)

La communication entre i-doit et vSphere est affichée dans **Administration → Paramètres CMDB → Événements → Historique (Journal)**.
