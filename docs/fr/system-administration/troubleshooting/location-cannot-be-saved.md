# L'emplacement ne peut pas être enregistré

Problème
-------

Lors de l'enregistrement dans la catégorie Emplacement, un message d'erreur apparaît :

    Erreur!
    
    Erreur CMDB : Erreur de base de données : Erreur de requête : 'UPDATE isys_catg_location_list SET isys_catg_location_list__rgt = isys_catg_location_list__rgt + -4294967294 WHERE isys_catg_location_list__rgt > -1' : la valeur BIGINT UNSIGNED est hors de portée dans '(`idoit_data`.`isys_catg_location_list`.`isys_catg_location_list__rgt` + -(4294967294))'

[![Problème](../../assets/images/en/system-administration/troubleshooting/location-can-not-be-saved/1-lcnbs.png)](../../assets/images/en/system-administration/troubleshooting/location-can-not-be-saved/1-lcnbs.png)

La formulation exacte peut être légèrement différente. Le résultat cependant est toujours le même : l'attribution de l'emplacement n'est pas enregistrée.

Solution
--------

Ce problème peut être causé par la création de trop nombreuses affectations d'emplacement automatisées (par exemple via une [importation de données](../../consolidate-data/index.md)). La solution consiste à cliquer sur le bouton **Correction des emplacements** dans **Administration → Outils système → Cache / Base de données → Base de données**. Ensuite, la création et la modification des affectations d'emplacement sont à nouveau possibles.

[![Solution](../../assets/images/en/system-administration/troubleshooting/location-can-not-be-saved/1-lcnbs.png)](../../assets/images/en/system-administration/troubleshooting/location-can-not-be-saved/1-lcnbs.png)
