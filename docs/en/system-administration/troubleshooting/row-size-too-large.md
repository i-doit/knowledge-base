# Row size too large

Problem:
--------

I want to update i-doit. During the update, an error message appears, such as:  
[![](../../assets/images/en/system-administration/troubleshooting/row-size-too-large/1-rstl.png)](../../assets/images/en/system-administration/troubleshooting/row-size-too-large/1-rstl.png)  

[![](../../assets/images/en/system-administration/troubleshooting/row-size-too-large/1-rstl.png)](../../assets/images/en/system-administration/troubleshooting/row-size-too-large/1-rstl.png)

  

Solution:
---------

A backup should already exist because of the update.

We set the row size and run the update again:  
First we log in to mysql:

    mysql -u root -p

Now the affected database is selected.

    USE idoit_data;

If the error occurs for multiple databases, this step must be performed for all affected databases.  
This may be the case if there are multiple clients.

Now we set the ROW\_FORMAT of the table from Fixed to Dynamic:

    ALTER TABLE isys_cats_person_list ROW_FORMAT=DYNAMIC;