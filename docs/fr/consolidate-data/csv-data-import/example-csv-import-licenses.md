# Exemple d'importation CSV - Licences

Dans cet exemple, nous nous appuyons sur l'[importation CSV des applications](example-csv-import-applications.md) et souhaitons importer des licences.

!!! info "Cet article a été vérifié pour la version 1.17.2 d'i-doit"

Pour l'importation, nous avons besoin des informations suivantes :

- Type d'objet → quel type d'objet doit-il être.
- Titre de l'objet → le nom du client
- Attribution de licence : Clé de licence - Type de licence → Quel type de licence sera importé, individuel ou en volume ?
- Attribution de licence : Clé de licence - Nombre → Quel est le nombre de licences ?
- Attribution de licence : Clé de licence - Clé → Quelle est la clé de licence ?
- Attribution de licence : Clé de licence - Numéro de série → Quel numéro de série doit être attribué ?
- Attribution de licence : Clé de licence - Date de début → À partir de quand la licence peut-elle être utilisée ?
- Attribution de licence : Clé de licence - Date d'expiration → Quand la licence expire-t-elle ?
- Attribution de licence : Clé de licence - Prix unitaire → Combien coûte une licence ?

!!! info "À chaque importation, la représentation des données doit également être prise en compte."

Par exemple:

[![exemple](../../assets/images/en/consolidate-data/csv-data-import/csv-import-licenses/1-csv-i-l.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-licenses/1-csv-i-l.png)

Les titres des dialogues en anglais sont attendus, par exemple: single-license.  
Ici, le format de date YYYY-MM-DD (2021-11-26) est attendu.  
Et le format numérique: X,XXX,XX (1,111.11), car la virgule est définie par i-doit, nous n'insérons que des valeurs comme 12999.99.

Exemple de fichier CSV pour cette importation:

[Télécharger le fichier Import-Licenses.csv :material-file-download:](../../assets/images/en/consolidate-data/csv-data-import/csv-import-licenses/Import-Licenses.csv){ .md-button .md-button--primary }

??? exemple "Import Licenses.csv"

    ```text
    Object type;Object title;Licenses: License keys > License Type (Dialog);Licenses: License keys > Amount;Licenses: License keys > Key;Licenses: License keys > Serial;Licenses: License keys > Start Date (Date);Licenses: License keys > Expiration Date (Date);Licenses: License keys > Price Per Unit (Money)
    C__OBJTYPE__LICENCE;License-X;Volume license;1000;License-X-111-LASKDZHW;123456789;2021-01-01;2021-12-31;999.9
    C__OBJTYPE__LICENCE;License-Y;Single license;1;License-Y-211-OIHUASFD;1123456789;2021-06-01;2021-12-31;1399.9
    C__OBJTYPE__LICENCE;License-Z;Volume license,Volume license;100,50;License-Z-311-IGUHOPSD,License-Z-322-IUHGASD;11123456789,11223456789;2021-01-01,2021-05-01;2021-12-31,2021-04-30;10200.9,500.9
    ```

Aucune dépendance n'est supposée pour cette importation.

Pour l'importation, nous retournons à la zone d'importation CSV. Nous définissons "Catégories à valeurs multiples" sur "Séparées par des virgules".

[![importation](../../assets/images/en/consolidate-data/csv-data-import/csv-import-licenses/2-csv-i-l.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-licenses/2-csv-i-l.png)

Maintenant, nous pouvons effectuer la configuration de l'importation dans la zone inférieure comme suit, puis démarrer le processus d'importation::

[![démarrer-importation](../../assets/images/en/consolidate-data/csv-data-import/csv-import-licenses/3-csv-i-l.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-licenses/3-csv-i-l.png)

Si vous avez tout fait correctement, les licences apparaîtront maintenant dans la vue de liste.

[![licences](../../assets/images/en/consolidate-data/csv-data-import/csv-import-licenses/4-csv-i-l.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-licenses/4-csv-i-l.png)

De plus, les catégories Affectation de licence et Affectation de licence: Clé de licence sont remplies.

[![clé-de-licence](../../assets/images/en/consolidate-data/csv-data-import/csv-import-licenses/5-csv-i-l.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-licenses/5-csv-i-l.png)

[![clé-de-licence](../../assets/images/en/consolidate-data/csv-data-import/csv-import-licenses/6-csv-i-l.png)](../../assets/images/en/consolidate-data/csv-data-import/csv-import-licenses/6-csv-i-l.png)

