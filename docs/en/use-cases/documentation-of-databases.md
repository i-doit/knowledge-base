# Documentation of Databases

With version 1.xx of i-doit we have added an additional variant that can be used to document databases within i-doit.

The two models differ in that the old model included the following three object types:

[![documentation-databases-models](../assets/images/en/use-cases/documentation-of-databases/1-dod.png)](../assets/images/en/use-cases/documentation-of-databases/1-dod.png)  
  

**DBMS** - this object type corresponds to that of normal applications, we can define here which database software is available in the company.

**Database instance** - this object type shows where the individual DBMS are installed and which instances are available there.

**Database schema** - this object type shows the respective databases defined within each instance.

  

Using i-doit as an example, MariaDB would be the DBMS, the installation on the i-doit server would be the instance and the idoit\_system and i-doit\_data would be the database schema.

In the new model, we are taking With version 1.xx of i-doit we have added an additional variant that can be used to document databases within i-doit.

The two models differ in that the old model included the following three object types:

![](/download/thumbnails/97288619/Bildschirmfoto%202020-12-01%20um%2012.15.42.png?version=1&modificationDate=1606822157283&api=v2)  
  

**DBMS** - this object type corresponds to that of normal applications, we can define here which database software is available in the company.

**Database instance** - this object type shows where the individual DBMS are installed and which instances are available there.

**Database schema** - this object type shows the respective databases defined within each instance.

  

Using i-doit as an example, MariaDB would be the DBMS, the installation on the i-doit server would be the instance and the idoit\_system and i-doit\_data would be the database schema.

In the new model, we are taking a slightly different approach here. We keep the DBMS object, but add the Assigned Databases tab in the list view of the DBMS - Database Installation category. This makes it possible to see directly at the DBMS object which databases are provided by the respective database software. To stay with the example of i-doit, the MariaDB DBMS object would show the installation on the respective server and the databases idoit\_data and idoit\_system.

  

In the new model the object types database schema and database instance are dropped and replaced by a new category databases. The idea here is to document databases where they are executed. So if a database runs on a server, we assign the category there and maintain it directly at the resource. If the database runs on a cluster, we assign the category to the cluster objects and document there.

The new category offers a new view of the database hierarchy that can be expanded:

![](/download/attachments/97288619/Bildschirmfoto%202020-12-01%20um%2012.24.38.png?version=1&modificationDate=1606822157275&api=v2)

Below _Databases -> Databases_ we can now document the respective databases running on the resource:

![](/download/attachments/97288619/Bildschirmfoto%202020-12-01%20um%2012.18.49.png?version=1&modificationDate=1606822157267&api=v2)

Below _Databases -> DBMS_ we see the connection to the respective DBMS object to which the server has a relationship.

![](/download/attachments/97288619/Bildschirmfoto%202020-12-01%20um%2012.18.05.png?version=1&modificationDate=1606822157258&api=v2)

  
  
**Migration of existing database documentation to the new model**

You can decide which type of database documentation is better suited for your needs. If you want to change from the old model to the new one we offer a moderation function which you can find in the administration under System Tools -> Cache Database:

![](/download/attachments/97288619/Bildschirmfoto%202020-12-01%20um%2012.19.27.png?version=1&modificationDate=1606822157250&api=v2)  
After clicking you will get another message about the effect of the migration:

![](/download/attachments/97288619/Bildschirmfoto%202020-12-01%20um%2012.27.00.png?version=1&modificationDate=1606822157240&api=v2)

And when the migration is complete, a message will appear indicating whether the migration was successful:

![](/download/thumbnails/97288619/image2020-3-20_11-14-22.png?version=2&modificationDate=1606822157227&api=v2)a slightly different approach here. We keep the DBMS object, but add the Assigned Databases tab in the list view of the DBMS - Database Installation category. This makes it possible to see directly at the DBMS object which databases are provided by the respective database software. To stay with the example of i-doit, the MariaDB DBMS object would show the installation on the respective server and the databases idoit\_data and idoit\_system.

  

In the new model the object types database schema and database instance are dropped and replaced by a new category databases. The idea here is to document databases where they are executed. So if a database runs on a server, we assign the category there and maintain it directly at the resource. If the database runs on a cluster, we assign the category to the cluster objects and document there.

The new category offers a new view of the database hierarchy that can be expanded:

[![documentation-databases-models](../assets/images/en/use-cases/documentation-of-databases/2-dod.png)](../assets/images/en/use-cases/documentation-of-databases/2-dod.png)

Below _Databases -> Databases_ we can now document the respective databases running on the resource:

[![documentation-databases-models](../assets/images/en/use-cases/documentation-of-databases/3-dod.png)](../assets/images/en/use-cases/documentation-of-databases/3-dod.png)

Below _Databases -> DBMS_ we see the connection to the respective DBMS object to which the server has a relationship.

[![documentation-databases-models](../assets/images/en/use-cases/documentation-of-databases/4-dod.png)](../assets/images/en/use-cases/documentation-of-databases/4-dod.png)

  
  
**Migration of existing database documentation to the new model**

You can decide which type of database documentation is better suited for your needs. If you want to change from the old model to the new one we offer a moderation function which you can find in the administration under System Tools -> Cache Database:

[![documentation-databases-models](../assets/images/en/use-cases/documentation-of-databases/5-dod.png)](../assets/images/en/use-cases/documentation-of-databases/5-dod.png)  
After clicking you will get another message about the effect of the migration:

[![documentation-databases-models](../assets/images/en/use-cases/documentation-of-databases/6-dod.png)](../assets/images/en/use-cases/documentation-of-databases/6-dod.png)

And when the migration is complete, a message will appear indicating whether the migration was successful:

[![documentation-databases-models](../assets/images/en/use-cases/documentation-of-databases/7-dod.png)](../assets/images/en/use-cases/documentation-of-databases/7-dod.png)