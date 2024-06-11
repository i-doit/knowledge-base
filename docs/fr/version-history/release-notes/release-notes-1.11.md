Exigences système
-------------------

*   i-doit prend désormais en charge [PHP de 5.6 à 7.1](../../installation/system-requirements.md){/*examples*/}

Notes
-----

*   Veuillez régénérer l'index de recherche après l'installation en utilisant la [console de ligne de commande](../../automation-and-integration/cli/console/index.md){/*examples*/}. Exemple d'appel :  
    
    cd /var/www/html/
    sudo -u www-data php console.php search-index --user admin --password admin --tenantId 1
    
      
    
*   La commande de console **search-index** prend désormais en charge les deux paramètres  
      
    **--update** pour mettre à jour l'index  
    **--category** pour mettre à jour les informations de recherche pour une catégorie spécifique uniquement (peut être utilisé plusieurs fois en un seul appel)  
      
    Si vous ne fournissez aucun paramètre, l'index est entièrement régénéré à partir de zéro. Les anciens paramètres **fullindex** et **reindex** sont obsolètes.
    

Pour toute question, n'hésitez pas à contacter notre support à [https://help.i-doit.com](https://help.i-doit.com){/*examples*/}
