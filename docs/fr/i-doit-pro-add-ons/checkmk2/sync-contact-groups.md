# checkmk 2: Synchroniser les groupes de contacts 

Check_MK notifie les groupes de contacts à chaque événement s'ils sont correctement configurés. Dans i-doit, chaque groupe de contacts peut être documenté en tant qu'objet. Pour partager les groupes de contacts entre les deux, exécutez :

    idoitcmk sync-contact-groups

Cette commande générera de nouveaux objets dans i-doit basés sur les groupes de contacts de Check_MK. De plus, les objets dans i-doit peuvent être utilisés pour générer de nouveaux groupes de contacts.

Par défaut, les groupes de contacts sont stockés en tant que groupes de personnes dans i-doit. Vous pouvez simplement ajouter des objets de personne à ces groupes et attribuer les groupes à d'autres objets avec la catégorie attribution de contact et le rôle de surveillance.

**Recommandation :** Exécutez cette commande chaque fois que vous ajoutez un nouveau groupe de contacts dans Check_MK ou i-doit.

Configuration
-------------

Ces [paramètres de configuration](./configuration.md) sont disponibles :

| Clé | Type | Requis | Par défaut | Description |
| --- | --- | --- | --- | --- |
| objectTypes.contactGroup | Chaîne | Non | C__OBJTYPE__PERSON_GROUP | Les groupes de contacts sont marqués par ce type (utilisez une constante !) |
