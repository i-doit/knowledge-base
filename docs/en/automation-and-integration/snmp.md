The SNMP category allows you to read out the SNMP values of objects and display them in realtime. Using the example scenario of querying a switch we will discuss the requirements and execution in this article.  

Requirements
------------

i-doit requires the SNMP module of PHP in order to use this category. In Debian you can install the module with the following command:

[?](#)

`sudo` `apt-get` `install` `php5-snmp`

Afterwards, you have to assign the SNMP category to the desired object type in the **`Quick Configuration Wizard`**. In our example we only used the **`Switch`** object type.

Furthermore, we need a valid host address which in turn needs to be documented in the respective category of course.  

![](/download/attachments/37355650/snmp1.png?version=1&modificationDate=1467895139482&api=v2&effects=drop-shadow)  

In order to avoid failed attempts we test the SNMP connection "manually" by accessing the console of the server via SSH. For this purpose, we install the "snmp" package in order to be provided with the "snmpwalk" command. Afterwards, we use a standard call of the switch which will supply us with the list of all interfaces.

[?](#)

`sudo` `apt-get` `install` `snmpsnmpwalk -``v` `2c -c public 192.168.10.13 .1.3.6.1.2.1.2.2.1.1`

At this point we omit the details on the subject of SNMP and this call. Information about the OID .1.3.6.1.2.1.2.2.1.1 can be found here for example: [http://www.oid-info.com/get/1.3.6.1.2.1.2.2.1](http://www.oid-info.com/get/1.3.6.1.2.1.2.2.1)

  

In our case the results look like this:

iso.3.6.1.2.1.2.2.1.1.1 = INTEGER: 1

iso.3.6.1.2.1.2.2.1.1.2 = INTEGER: 2

iso.3.6.1.2.1.2.2.1.1.3 = INTEGER: 3

iso.3.6.1.2.1.2.2.1.1.4 = INTEGER: 4

iso.3.6.1.2.1.2.2.1.1.5 = INTEGER: 5

iso.3.6.1.2.1.2.2.1.1.6 = INTEGER: 6

iso.3.6.1.2.1.2.2.1.1.7 = INTEGER: 7

iso.3.6.1.2.1.2.2.1.1.8 = INTEGER: 8

iso.3.6.1.2.1.2.2.1.1.9 = INTEGER: 9

iso.3.6.1.2.1.2.2.1.1.10 = INTEGER: 10

iso.3.6.1.2.1.2.2.1.1.11 = INTEGER: 11

iso.3.6.1.2.1.2.2.1.1.12 = INTEGER: 12

iso.3.6.1.2.1.2.2.1.1.13 = INTEGER: 13

iso.3.6.1.2.1.2.2.1.1.14 = INTEGER: 14

iso.3.6.1.2.1.2.2.1.1.15 = INTEGER: 15

iso.3.6.1.2.1.2.2.1.1.16 = INTEGER: 16

iso.3.6.1.2.1.2.2.1.1.17 = INTEGER: 17

iso.3.6.1.2.1.2.2.1.1.18 = INTEGER: 18

iso.3.6.1.2.1.2.2.1.1.19 = INTEGER: 19

iso.3.6.1.2.1.2.2.1.1.20 = INTEGER: 20

iso.3.6.1.2.1.2.2.1.1.21 = INTEGER: 21

iso.3.6.1.2.1.2.2.1.1.22 = INTEGER: 22

iso.3.6.1.2.1.2.2.1.1.23 = INTEGER: 23

iso.3.6.1.2.1.2.2.1.1.24 = INTEGER: 24

  

The query was successful and we are dealing with a 24port switch. If timeouts or similar issues arise at this point, you should check the network connectivity to verify whether SNMP is allowed under the firewall rules, the SNMP server is running and whether the i-doit server has access permissions for the SNMP server. Of course also the selected SNMP community (in our example `public`) has to be available.

Now we switch back to the SNMP category in i-doit. The primary IP address of the switch is automatically shown there and the standard SNMP community `public` is offered.

Since we are not interested in the interface indices, we will concern ourselves with the OID for the list of faulty packets per interface. This has the OID .1.3.6.1.2.1.2.2.1.1.14.x, where x stands for the index of the respective interface.

With these details we build 24 entries for the corresponding interfaces:  

  

Afterwards, we save the category.

Optional

In the command line example the OIDs are shown with a dot. This is not necessary in the SNMP category and is therefore optional.  

When you click on the category again, the SNMP values are loaded and displayed in realtime. Unfortunately, the test shows that there are packet errors in two interfaces. Therefore we conclude the practical example at this point and begin to search for the reason of the packet errors.