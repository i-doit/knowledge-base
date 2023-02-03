**Inhaltsverzeichnis**

*   1[Stack-Mitglieder](#SwitchStacking-Stack-Mitglieder)
*   2[Logische Ports](#SwitchStacking-LogischePorts)

Mit dem [Objekttypen](/display/de/Glossar) **`Stacking`** ist es möglich, einen Stack-Verbund mit mehreren Mitgliedern zu definieren, die Informationen untereinander austauschen. Auch wenn Stacking für unterschiedliche Objekttypen genutzt werden kann, ist der ursprüngliche Gedanke für diesen Objekttypen und die dazugehörige [Kategorie](/display/de/Glossar) **`Stack Mitglieder`** auf Switch Stacking zurückzuführen. Der Objekttyp ist ab Version 1.7 unter der [Objekttypgruppe](/display/de/Glossar) **`Andere`** zu finden.

Stack-Mitglieder
----------------

In der für das Stacking geschaffenen Kategorie **`Stack Mitglieder`** können [Objekte](/display/de/Glossar) als Mitglieder des Stacks hinzugefügt und als "Aktiv" oder "Passiv" gekennzeichnet werden. In der Dokumentation hat diese Kennzeichnung keine weitere Auswirkung außer der entsprechenden Anzeige.

![](/download/attachments/29327378/stackmitglied_hinzufuegen.png?version=1&modificationDate=1458643978798&api=v2&effects=drop-shadow)

![](/download/attachments/29327378/stack_mitglieder.png?version=1&modificationDate=1458643979819&api=v2&effects=drop-shadow)

Logische Ports
--------------

Wird ein logischer Port in einem der Stack-Mitglieder angelegt, erscheint dieser nun auch bei den anderen Stack-Mitgliedern unter den logischen Ports.

![](/download/attachments/29327378/stacking_logischer_port.png?version=1&modificationDate=1458644310789&api=v2&effects=drop-shadow)

Zudem kann der logische Port eines anderen Stack-Mitglieds als Eltern-Port eines Ports zugewiesen werden.

![](/download/attachments/29327378/logischer_port_eltern_port.png?version=1&modificationDate=1458644414296&api=v2&effects=drop-shadow)