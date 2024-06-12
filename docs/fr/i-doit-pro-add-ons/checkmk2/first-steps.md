#  checkmk 2: Premiers pas

Vous êtes nouveau sur ce sujet et souhaitez intégrer à la fois checkmk et i-doit ? Suivez ces étapes simples :

1.  [Répondre à toutes les exigences](./requirements.md)
2.  [Télécharger et installer](./installation.md) le package d'extension avec l'outil en ligne de commande intégré idoitcmk
3.  Assurez-vous que checkmk et i-doit peuvent être accessibles via leurs API
4.  Créez votre propre configuration:
    
    idoitcmk init ([en savoir plus](./configuration.md))
    
5.  [Essayer quelques commandes de base](./usage.md)
6.  Synchroniser quelques informations de base entre checkmk et i-doit:
    
    idoitcmk sync-agents ([en savoir plus](./sync-checkmk-agents.md))
    
    idoitcmk sync-contact-groups ([en savoir plus](./sync-contact-groups.md))
    
    idoitcmk sync-folders ([en savoir plus](./sync-wato-folder.md))
    
    idoitcmk sync-sites ([en savoir plus](./sync-checkmk-sites.md))
    
    idoitcmk sync-tags ([en savoir plus](./sync-host-tags.md))
    
7.  Configurer checkmk en fonction de i-doit:
    
    idoitcmk push ([en savoir plus](./generate-wato-configuration-base-on-cmdb-data.md)) 



8.  Ou récupérez des informations utiles sur votre infrastructure depuis checkmk vers i-doit:
    
    idoitcmk pull ([en savoir plus](./import-inventory-data-into-cmdb.md))
    
9.  Automatisez toutes les choses!

Des questions ? Consultez notre [FAQ](./faq.md)
