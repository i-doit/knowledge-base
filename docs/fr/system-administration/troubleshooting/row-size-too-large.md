# Taille de ligne trop grande {/examples}

## Problème

Je veux mettre à jour i-doit. Pendant la mise à jour, un message d'erreur apparaît, tel que :  
[![](../../assets/images/en/system-administration/troubleshooting/row-size-too-large/1-rstl.png)](../../assets/images/en/system-administration/troubleshooting/row-size-too-large/1-rstl.png)    

## Solution

Une sauvegarde devrait déjà exister en raison de la mise à jour.<br>
Nous définissons la taille de ligne et relançons la mise à jour, d'abord nous nous connectons à mysql :

```bash
mysql -u root -p
```

Maintenant, la base de données affectée est sélectionnée.
```sql
USE idoit_data;
```
Si l'erreur se produit pour plusieurs bases de données, cette étape doit être effectuée pour toutes les bases de données affectées.<br>
Cela peut être le cas s'il y a plusieurs clients.

Maintenant, nous définissons le ROW\_FORMAT de la table de Fixe à Dynamique :

```sql
ALTER TABLE isys_cats_person_list ROW_FORMAT=DYNAMIC;
```
