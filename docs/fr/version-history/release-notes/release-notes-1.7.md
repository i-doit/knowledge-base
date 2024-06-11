# Notes de version 1.7

> **i-doit 1.7 apporte quelques changements importants que vous devez connaître avant de mettre à jour.**
> 
> Les exigences système ont changé
> --------------------------------
> 
> Les exigences système ont changé. i-doit a maintenant besoin d'un moteur de base de données MySQL 5.6 ou MariaDB 10. **Veuillez mettre à jour votre plateforme de base de données avant de mettre à jour i-doit.**
> 
> Un manuel et des conseils pour mettre à jour votre plateforme de base de données peuvent être trouvés à : [MariaDB](https://www.mariadb.org)
> 
> Si vous rencontrez des problèmes ou des difficultés, n'hésitez pas à contacter notre support à [support@i-doit.com](mailto:support@i-doit.com). Nous sommes heureux de vous aider.
> 
> Index de recherche
> ------------
> 
> À partir de la version 1.7, i-doit dispose d'un index de recherche. L'index est nécessaire pour utiliser la recherche d'objets. Il sera généré automatiquement lors de la mise à jour de 1.6 à 1.7. La seule exception est lorsque vous avez plus de 500 000 objets sous licence dans votre base de données. Les installations avec plus de 500 000 objets sous licence recevront un message d'avis sur la génération manuelle de l'index de recherche. La procédure pour générer l'index manuellement est décrite ci-dessous.
> 
> En général, l'index de recherche est mis à jour automatiquement lors de la saisie manuelle ou de l'utilisation de mécanismes d'importation.
> 
> Si des objets sont créés via l'API, l'index de recherche doit être généré par une entrée crontab. À cette fin, le contrôleur i-doit a été amélioré pour prendre en charge la création de l'index. Voici un exemple d'entrée crontab.
> 
>   **0 3 * * * /var/www/controller -u admin -p admin -i 1 -v -m search_index reindex**
> 
> Si vous rencontrez des problèmes ou des difficultés, n'hésitez pas à contacter notre support à [support@i-doit.com](mailto:support@i-doit.com). Nous sommes heureux de vous aider.
> 
> Migration facultative de l'empilement de commutateurs
> ----------------------------------
> 
> À partir de i-doit 1.7, la documentation sur l'empilement de commutateurs dispose de encore plus de fonctionnalités. La catégorie "Empilement" sera remplacée par des objets de type "Empilement". Vous pouvez trouver le nouveau type d'objet dans le menu "autre".
> 
> Ce nouveau type d'objet a une nouvelle catégorie appelée "Membres de l'empilement" qui contient tous les membres du groupe d'empilement.
> 
> Lors de la mise à jour depuis 1.6, toutes les informations et catégories précédentes sont toujours disponibles afin que vous puissiez utiliser la fonctionnalité "ancienne". Si vous souhaitez passer aux nouvelles fonctionnalités, notre support vous fournit un mécanisme de migration. Veuillez contacter notre support à [support@i-doit.com](mailto:support@i-doit.com).
> 
> Lors d'une installation propre, les anciennes catégories ne sont plus visibles. Tous les fichiers et tables existent toujours, mais il n'y a plus d'entrée dans l'interface graphique.
> 
> VRRP/HSRP
> ---------
> 
> La documentation VRRP/HSRP a également été renouvelée avec la version 1.7. Le type d'objet pour le cluster VRRP/HSRP dispose désormais de catégories dédiées pour couvrir les besoins de la documentation VRRP/HSRP.
> 
> Une migration n'est pas nécessaire. Si vous souhaitez utiliser les nouvelles catégories, commencez simplement à les utiliser quand vous le souhaitez. 

{/*examples*/}
