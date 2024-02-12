# Row size too large

## Problem


I want to update i-doit. During the update, an error message appears, such as:  
[![](../../assets/images/en/system-administration/troubleshooting/row-size-too-large/1-rstl.png)](../../assets/images/en/system-administration/troubleshooting/row-size-too-large/1-rstl.png)    

## Solution

A backup should already exist because of the update.<br>
We set the row size and run the update again, first we log in to mysql:

```bash
mysql -u root -p
```

Now the affected database is selected.
```sql
USE idoit_data;
```
If the error occurs for multiple databases, this step must be performed for all affected databases.<br>
This may be the case if there are multiple clients.

Now we set the ROW\_FORMAT of the table from Fixed to Dynamic:

```sql
ALTER TABLE isys_cats_person_list ROW_FORMAT=DYNAMIC;
```
