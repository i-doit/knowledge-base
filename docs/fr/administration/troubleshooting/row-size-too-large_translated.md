<!-- TRANSLATED by md-translate -->
# Row size too large

# Taille du rang trop grande

## Problem

## problème

Ich möchte i-doit Updaten. Während des Update erscheint eine Fehlermeldung, wie z.B.:

Je veux mettre à jour i-doit. Pendant la mise à jour, un message d'erreur apparaît, comme par exemple

[![Problem](../../assets/images/de/administration/troubleshooting/row-size-too-large/1-rstl.png)](../../assets/images/de/administration/troubleshooting/row-size-too-large/1-rstl.png)

[ ![Problème](../../assets/images/fr/administration/troubleshooting/row-size-too-large/1-rstl.png)](../../assets/images/fr/administration/troubleshooting/row-size-too-large/1-rstl.png)

[![Problem](../../assets/images/de/administration/troubleshooting/row-size-too-large/2-rstl.png)](../../assets/images/de/administration/troubleshooting/row-size-too-large/2-rstl.png)

[ ![Problème](../../assets/images/fr/administration/troubleshooting/row-size-too-large/2-rstl.png)](../../assets/images/fr/administration/troubleshooting/row-size-too-large/2-rstl.png)

## Lösung

## solution

Ein Backup sollte wegen dem Update schon vorhanden sein.

Une sauvegarde devrait déjà être disponible en raison de la mise à jour.

Wir setzen das row size und führen das Update erneut aus:

Nous réinitialisons le row size et exécutons à nouveau la mise à jour :

Zuerst loggen wir uns bei mysql ein:

Tout d'abord, nous nous connectons à mysql :

```sql
mysql -uroot -p
```

Nun wird die betroffene Datenbank gewählt.

La base de données concernée est maintenant sélectionnée.

```sql
USE idoit_data;
```

Falls der Fehler für mehrere Datenbanken auftritt, muss dieser Schritt für alle betroffenen Datenbanken ausgeführt werden.

Si l'erreur se produit pour plusieurs bases de données, cette étape doit être effectuée pour toutes les bases de données concernées.

Dies kann der Fall sein, wenn es mehrere Mandanten gibt.

Cela peut être le cas lorsqu'il y a plusieurs mandants.

Nun setzen wir das ROW_FORMAT der Tabelle von Fixed auf Dynamic:

Nous faisons maintenant passer le ROW_FORMAT de la table de Fixed à Dynamic :

```sql
ALTER TABLE isys_cats_person_list ROW_FORMAT=DYNAMIC;
```