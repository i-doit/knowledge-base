# Imprimante de codes QR i-doit

L'[imprimante de codes QR i-doit](./i-doit-qr-code-printer.md) vous permet d'imprimer des étiquettes confortablement à l'aide de votre imprimante d'étiquettes. Une configuration est fournie pour vous garantir que les formats correspondent à vos besoins. Si vous scannez le code QR avec un smartphone ou une tablette, par exemple, vous serez redirigé vers la page de présentation de l'[objet](../glossary.md) étiqueté.

[![](../assets/images/en/i-doit-pro-add-ons/qr-code/1-qrc.png)](../assets/images/en/i-doit-pro-add-ons/qr-code/1-qrc.png)

Code-barres
-------

[![Code-barres](../assets/images/en/i-doit-pro-add-ons/qr-code/2-qrc.png)](../assets/images/en/i-doit-pro-add-ons/qr-code/2-qrc.png)

Un code-barres est une méthode de représentation des données sous une forme visuelle lisible par une machine. Initialement, les codes-barres représentaient des données en faisant varier les largeurs et les espacements des lignes parallèles. Ces codes-barres, maintenant communément appelés linéaires ou unidimensionnels, peuvent être scannés par des scanners optiques spéciaux, appelés lecteurs de codes-barres, dont il existe plusieurs types.

Code QR
-------

[![Code QR](../assets/images/en/i-doit-pro-add-ons/qr-code/3-qrc.png)](../assets/images/en/i-doit-pro-add-ons/qr-code/3-qrc.png)

Un code QR (acronyme de Quick Response code) est un type de code-barres matriciel (ou code-barres bidimensionnel) inventé en 1994 par la société automobile japonaise Denso Wave. Un code-barres est une étiquette optique lisible par une machine qui contient des informations sur l'objet auquel il est attaché. En pratique, les codes QR contiennent souvent des données pour un localisateur, un identifiant ou un suivi qui pointe vers un site Web ou une application. Un code QR utilise quatre modes d'encodage normalisés (numérique, alphanumérique, octet/binaire et kanji) pour stocker efficacement des données ; des extensions peuvent également être utilisées.

Configuration du code QR ou du code-barres
--------------------------------

Vous pouvez trouver la configuration dans i-doit sous Administration → Paramètres système → Paramètres du locataire → Code QR

[![Configuration du code QR ou du code-barres](../assets/images/en/i-doit-pro-add-ons/qr-code/4-qrc.png)](../assets/images/en/i-doit-pro-add-ons/qr-code/4-qrc.png)

Configuration du contenu du code QR
------------------------------------

Les informations provenant d'i-doit qui doivent être stockées dans le code QR peuvent être configurées ici Administration → Paramètres CMDB → Code QR

[![Configuration du contenu du code QR](../assets/images/en/i-doit-pro-add-ons/qr-code/5-qrc.png)](../assets/images/en/i-doit-pro-add-ons/qr-code/5-qrc.png)

Définition globale
-----------------

Si la définition globale est sélectionnée, il est possible de remplir les informations stockées dans le code QR avec les espaces réservés suivants :

[![Définition globale](../assets/images/en/i-doit-pro-add-ons/qr-code/6-qrc.png)](../assets/images/en/i-doit-pro-add-ons/qr-code/6-qrc.png)

URL d'accès principal
------------------

Si l'URL d'accès principal est sélectionnée, l'URL stockée dans l'objet est intégrée dans le code QR comme seule information.

Lien du code QR
---------------

Ici, vous pouvez sélectionner la fonction déclenchée lorsque vous cliquez sur le code respectif.  
Vous pouvez choisir entre l'outil [i-doit QR-Code Printer](./i-doit-qr-code-printer.md) ou une POP UP avec la fonction d'impression standard du système d'exploitation respectif.

Modèle de texte
-------------

Ici, il est possible d'utiliser du texte libre, mais aussi avec les informations des espaces réservés d'i-doit et de formater l'étiquette en conséquence.

Logo pour la vue d'impression
-------------------

Ici, vous pouvez télécharger et lier un fichier image, qui sera utilisé automatiquement lors de la création de l'étiquette.

i-doit QR Code Printer
----------------------

Avec l'i-doit QR-Code Printer, vous pouvez facilement imprimer des étiquettes sur votre imprimante d'étiquettes.  
À cette fin, une configuration est disponible pour que les formats correspondent exactement à vos spécifications.  
Si le code QR est scanné avec un smartphone ou une tablette, par exemple, vous serez redirigé vers la page de présentation de l'objet [étiqueté](../glossary.md).

Démarrage et Configuration
-----------------------

Vous pouvez télécharger l'imprimante de codes QR dans notre [portail client](../system-administration/customer-portal.md). L'imprimante de codes QR i-doit est une application Windows qui peut être exécutée immédiatement. Aucune installation n'est nécessaire.

La première étape lors du démarrage de l'application est de configurer une connexion à votre installation i-doit, afin que l'outil puisse lire les informations. La possibilité de configurer la connexion est fournie dans la zone des **paramètres de l'API i-doit** dans **Fichier →** **Options**. L'URL de votre installation i-doit, la clé API ainsi que les identifiants d'un utilisateur i-doit avec les autorisations correspondantes sont nécessaires pour [l'accès via l'API](./api/index.md).

La clé API i-doit

Vous pouvez trouver la clé API de votre installation dans i-doit à **Administration → Interfaces / données externes → API JSON-RPC**.

Configuration des Paramètres d'Impression
-----------------------------------------

Dans **Fichier → Options**, vous pouvez trouver la possibilité d'ajuster tous les paramètres nécessaires pour votre imprimante.  
Ici, vous pouvez définir les marges ainsi que la taille de l'étiquette.

Vous pouvez également définir le positionnement du code QR via l'espacement en pixels et la taille du code QR.  
Si vous souhaitez utiliser une police, une taille de police et une direction de police différentes, vous pouvez ajuster ces valeurs selon vos souhaits à **Positionnement du code QR**.  
Vous pouvez également spécifier le logo pour vos étiquettes dans les options.  
Choisissez le logo souhaité en utilisant un format d'image courant via **Chemin** et positionnez-le en utilisant les paramètres correspondants.  
Il est judicieux de définir l'imprimante d'étiquettes Dymo comme imprimante par défaut et de changer l'orientation par défaut du papier pour l'impression en horizontal.

Impression des Étiquettes

Une fois que la connexion a été configurée avec succès et que les paramètres répondent à vos besoins, vous pouvez commencer à imprimer vos étiquettes. Pour ce faire, saisissez l'ID de l'objet pour lequel vous souhaitez imprimer une étiquette. Maintenant, les contenus des informations du code-barres seront transférés en fonction des contenus de i-doit. Bien sûr, vous pouvez modifier ces informations à tout moment.

Une fois que les informations ont été chargées, vous pouvez soit imprimer, enregistrer ou exporter le code QR en utilisant les icônes ou via l'élément **Fichier** dans le menu contextuel. L'export se fait en utilisant le format d'image **.bmp**.

[![Configuration des Paramètres d'Impression](../assets/images/en/i-doit-pro-add-ons/qr-code/7-qrc.png)](../assets/images/en/i-doit-pro-add-ons/qr-code/7-qrc.png)

Releases
--------

| Version | Date | Changelog |
| --- | --- | --- |
| 1.5 | 2023-01-24 | \[Bug\]  Corriger la configuration de la marge de texte |
