Problem:
--------

Ich möchte i-doit Updaten. Während des Update erscheint eine Fehlermeldung, wie z.B.:  
![](/download/attachments/117801552/row_size_personlist.png?version=1&modificationDate=1649315142355&api=v2&effects=drop-shadow)

![](/download/attachments/117801552/row_size_personlist2.png?version=3&modificationDate=1649315142339&api=v2&effects=drop-shadow)

  

Lösung:
-------

Ein Backup sollte wegen dem Update schon vorhanden sein.

Wir setzen das row size und führen das Update erneut aus:  
Zuerst loggen wir uns bei mysql ein:

[?](#)

`mysql -uroot -p`

Nun wird die betroffene Datenbank gewählt.

[?](#)

`USE idoit_data;`

Falls der Fehler für mehrere Datenbanken auftritt, muss dieser Schritt für alle betroffenen  Datenbanken ausgeführt werden.  
Dies kann der Fall sein, wenn es mehrere Mandanten gibt.

Nun setzen wir das ROW\_FORMAT der Tabelle von Fixed auf Dynamic:

[?](#)

`ALTER TABLE isys_cats_person_list ROW_FORMAT=DYNAMIC;`