<!-- TRANSLATED by md-translate -->
# Release Notes 1.12

# Notes de publication 1.12

## System requirements

## Exigences du système

* i-doit 1.12 supports PHP 5.6, 7.0, 7.1 and 7.2.
* The use of PHP 5.6 is deprecated in i-doit 1.12 and will be unsupported starting with i-doit 1.13.

* i-doit 1.12 supporte PHP 5.6, 7.0, 7.1 et 7.2.
* L'utilisation de PHP 5.6 est dépréciée dans i-doit 1.12 et ne sera plus supportée à partir d'i-doit 1.13.

## Notes

## Notes

* The Check_MK, Nagios export and Workflow features are now available as separate (free to use) add-ons.
* When starting with a fresh installation, they need to be installed via the Admin Center.
* When updating i-doit, you do not need to do anything. They will show up as add-ons in the Admin-Center automatically.
* Category-constants containing the string "SUBCAT" will be renamed (Beware if you are using the i-doit API)

* Les fonctionnalités Check_MK, Nagios export et Workflow sont maintenant disponibles en tant que modules complémentaires séparés (gratuits).
* Lors du démarrage d'une nouvelle installation, ils doivent être installés via l'Admin Center.
* Lors de la mise à jour d'i-doit, vous n'avez pas besoin de faire quoi que ce soit. Ils apparaîtront automatiquement comme add-ons dans l'Admin-Center.
* Les constantes de catégorie contenant la chaîne "SUBCAT" seront renommées (attention si vous utilisez l'API i-doit).

|     |     |
| --- | --- |
| C__CMDB__SUBCAT__NETWORK_PORT | C__CATG__NETWORK_PORT |
| C__CMDB__SUBCAT__NETWORK_INTERFACE_P | C__CATG__NETWORK_INTERFACE |
| C__CMDB__SUBCAT__NETWORK_INTERFACE_L | C__CATG__NETWORK_LOG_PORT |
| C__CMDB__SUBCAT__NETWORK_PORT_OVERVIEW | C__CATG__NETWORK_PORT_OVERVIEW |
| C__CMDB__SUBCAT__STORAGE__DEVICE | C__CATG__STORAGE_DEVICE |
| C__CMDB__SUBCAT__LICENCE_LIST | C__CATS__LICENCE_LIST |
| C__CMDB__SUBCAT__LICENCE_OVERVIEW | C__CATS__LICENCE_OVERVIEW |
| C__CMDB__SUBCAT__EMERGENCY_PLAN_LINKED_OBJECT_LIST | C__CATS__EMERGENCY_PLAN_LINKED_OBJECTS |
| C__CMDB__SUBCAT__EMERGENCY_PLAN | C__CATS__EMERGENCY_PLAN_ATTRIBUTE |
| C__CMDB__SUBCAT__WS_NET_TYPE | C__CATS__WS_NET_TYPE |
| C__CMDB__SUBCAT__WS_ASSIGNMENT | C__CATS__WS_ASSIGNMENT |
| C__CMDB__SUBCAT__FILE_OBJECTS | C__CATS__FILE_OBJECTS |
| C__CMDB__SUBCAT__FILE_VERSIONS | C__CATS__FILE_VERSIONS |
| C__CMDB__SUBCAT__FILE_ACTUAL | C__CATS__FILE_ACTUAL |

| | |
| --- | --- |
| C__CMDB__SUBCAT__NETWORK_PORT | C__CATG__NETWORK_PORT |
| C__CMDB__SUBCAT__NETWORK_INTERFACE_P | C__CATG__NETWORK_INTERFACE |
| C__CMDB__SUBCAT__NETWORK_INTERFACE_L | C__CATG__NETWORK_LOG_PORT |
| C__CMDB__SUBCAT__NETWORK_PORT_OVERVIEW | C__CATG__NETWORK_PORT_OVERVIEW |
| C__CMDB__SUBCAT__STORAGE__DEVICE | C__CATG__STORAGE_DEVICE |
| C__CMDB__SUBCAT__LICENCE_LIST | C__CATS__LICENCE_LIST |
| C__CMDB__SUBCAT__LICENCE_OVERVIEW | C__CATS__LICENCE_OVERVIEW |
| C__CMDB__SUBCAT__EMERGENCY_PLAN_LINKED_OBJECT_LIST | C__CATS__EMERGENCY_PLAN_LINKED_OBJECTS |
| C__CMDB__SUBCAT__EMERGENCY_PLAN | C__CATS__EMERGENCY_PLAN_ATTRIBUTE |
| C__CMDB__SUBCAT__WS_NET_TYPE | C__CATS__WS_NET_TYPE |
| C__CMDB__SUBCAT__WS_ASSIGNMENT | C__CATS__WS_ASSIGNMENT |
| C__CMDB__SUBCAT__FILE_OBJECTS | C__CATS__FILE_OBJECTS |
| C__CMDB__SUBCAT__FILE_VERSIONS | C__CATS__FILE_VERSIONS |
| C__CMDB__SUBCAT__FILE_ACTUAL | C__CATS__FILE_ACTUAL |

For any questions do not hesitate to contact our support at [https://help.i-doit.com](https://help.i-doit.com)

Pour toute question, n'hésitez pas à contacter notre support à [https://help.i-doit.com](https://help.i-doit.com)