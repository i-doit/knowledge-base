While the chapter on the procedure with VIVA describes a manual way to document all information relevant to IT-Grundschutz, the VIVA add-on includes a large number of wizards to make this way partially automated. The wizards analyze the data in VIVA and in i-doit's CMDB in advance to generate suggestions that the user can subsequently edit and/or adopt. Complex interrelationships within the information network thus become visible. The user thus has the possibility to document faster and more comfortably.

The wizards can be found below each information network as buttons in the respective action and navigation bars. When a wizard is called up, a popup opens that fits seamlessly into the VIVA interface. The wizards all work according to a similar scheme:

1.  Analyze data from VIVA and/or i-doit's IT documentation.
2.  Compile suggestions and prepare them visually
3.  Post-processing of proposals by the user
4.  Save or discard proposals by the user

The wizards support an extensive process that runs through a significant portion of the documentation. This process is explained as a possible procedure in the chapter Example of a possible workflow.

The specific features of the various wizards are discussed below. These are divided into target group wizards and protection requirement wizards.

Target group wizards
--------------------

This type of wizard suggests suitable target groups based on existing data. New target groups with IT-Grundschutz number and designation can thus be created conveniently. Suggestions can be discarded or, if appropriate, extended. The individual wizards are explained in more detail below. The sequence refers to the possible procedure described in the appendix Example of a possible workflow. The wizards can be found within the respective layers.

IT Service Wizard (Layer 5 Applications)
----------------------------------------

This wizard analyzes the CIs of type Service in the IT documentation of i-doit, more precisely: the category Service Components. The components are analyzed from various points of view and, if necessary, added to the list of target objects to be proposed. A recursive approach is used. The following CIs are suggested if they are found:

*   The service itself
*   Subordinate services; their components are analyzed in turn
*   Software CIs
*   Installed software of components (based on the category software assignment i.e. CIs of type application, system service, operating system, etc.)
*   Installed software (based on the dependency object)
*   Members of object groups
*   Members of clusters
*   Cluster services

Even if no matching CIs are identified, a proposal is generated from the service. The overall result of the analysis - and thus the proposal - consists of a list of services whose names (consisting of the object title) are used for the group identifiers, and optionally matching CIs that meet the criteria of the layer, i.e. represent an application in the broader sense.  
**Example**: In i-doit's IT documentation there is an object of type Service called "Web". In its Service Components category, three objects are linked: a software object of type Applications ("Apache HTTP Server"), an object of type Server ("Web Server") on which an application is installed (category Software Assignment; namely "Shop"), and a Relationship object (which represents a software assignment; namely "nginx running on reverse proxy"). From this, the proposal for a target group is generated: The name corresponds to the service, hence "web". The application "Apache HTTP Server", "Shop" and "ngnix" are taken as linked target objects.

Application Wizard (Layer 3 IT Systems)
---------------------------------------

This wizard is useful for suggesting target groups from the IT systems layer. It uses data from layer 5 Applications. If there are target groups whose target objects have a relation to potential target objects of this layer, they are grouped and suggested as one or more groups.

**Example**: Layer 5 Applications contains the group "A 1 Web". The target object "Apache HTTP Server" is contained there, which results from the object with the same name in the CMDB. This (software) object is installed on a server ("Web server") (category Installation or Software assignments). This server is therefore suitable as a target object for a group in layer 3 IT systems. If this target object has not yet been assigned to a target group, the proposal is generated to create a target group that contains the CI "Web server".

IT System Assistant (Layer 2 Infrastructure)
--------------------------------------------

Buildings and rooms contain hardware components. If there are corresponding target groups for the hardware in layer 3 IT systems, it is advisable to group these buildings and rooms into target groups as well. This wizard takes care of this. It analyzes the location assignments from already existing target objects of layer 3 and generates suggestions for target groups from layer 2 infrastructure. Here, all target objects of layer 3 are taken into account that have a location assignment but whose location has not yet been recorded as a target object of a group in layer 2. All container objects are considered as layer 2 target objects, i.e., objects whose object type is suitable as a location. The suggestions are recursive, consequently the entire chain of location assignments is considered (excluding "root location").

**Example**: In layer 2 IT systems, the target group "S 1 Web server" exists, to which the target object "Web server" is assigned. This server is located in the room "Server Room I". The room is located in the "Main building". If not already done, the wizard suggests creating a target group that includes the room and the building.

IT System Wizard (Layer 4 Networks)
-----------------------------------

In i-doit's IT documentation, there are many ways to document connections between two objects. One essential one is the connection via network ports. In this way, entire network infrastructures can be modeled down to the smallest detail. This wizard uses this data to suggest communication connections between target groups. These target groups all originate from layer 3 IT systems. Accordingly, the wizard analyzes target objects from layer 3 that correspond to an object in the CMDB that has entries in the Network Ports category. As in the Port Overview category, there may be a connection between two or more objects with a beginning (the object itself), intermediate objects (for example, passive components such as patch panels), and an end object that is used for further analysis. If there is a target object in layer 3 IT systems for this end object, it is examined whether this target object is assigned to a target group that does not yet have a communication link with the target group of the start object. If this is the case, both target groups are suggested as communication links.

Communication links ultimately lead to a "cleaned network" that abstracts from the details and allows only essential information to maintain clarity. Therefore, it is also necessary to abstract from the richness of detail in the CMDB data, which the wizard attempts to relieve the user of.

**Example**: An object of type Server with the designation "Web server" belongs as a target object to the target group "S 1 Web server" (layer 3 IT systems). The target group "SW 1 Switch" also exists in this layer with the target object "Switch I", behind which the object of the same name is hidden in the CMDB. In the CMDB, both objects are connected via the port category. The fact that passive components such as patch panels are interposed between the two also has no effect. If both target groups do not yet have a common communication link in layer 3 networks, the wizard will suggest one.

IT system wizard (layer 5 applications)
---------------------------------------

This wizard proceeds analogously to the application wizard (layer 3 IT systems): Based on the target groups in layer 3, suggestions for target groups in layer 5 applications are generated. For this purpose, the category Software Assignment in the CMDB of i-doit is used.

Infrastructure Wizard (Layer 3 IT Systems)
------------------------------------------

Similar to the previous wizard, this wizard behaves in the same way as the IT system wizard (layer 2 infrastructure). Target groups from layer 2 infrastructure are analyzed to see if layer 3 target groups can be generated from them. The Location Assignment category in i-doit's CMDB is used for this purpose.

Protection needs wizards
------------------------

Wizards of this type make suggestions as to how the protection requirement should be designed. For this purpose, related target groups are analyzed, resulting in an inheritance of the protection requirement as suggested in the BSI standard. (See BSI Standard 100-2, Chapter 4.3 Determining protection needs.) In brief, the highest protection class (normal, high, very high) is inherited for each basic value (confidentiality, integrity, availability). The examples in the following sections illustrate the principle.

The wizards are located within the target groups to directly assist in the respective protection requirement determination. If the protection requirement is to be processed for several target groups at the same time, the wizards are located within the layers. In the following, the respective wizard of a layer is discussed. Suggestions can be generated for layers 2 infrastructure and 3 IT systems.

Protection Needs Wizard (Layer 3 IT systems).
---------------------------------------------

Similar to the Application Wizard (layer 3 IT systems), the target groups of layer 5 applications are analyzed to determine whether they are related to a specific group (or groups) of this layer. Here, the software assignment/installation information is used.

**Example**: The target group "Website" exists in layer 5 Applications. The protection requirement is set as follows:

*   Confidentiality: normal
*   Integrity: normal
*   Availability: very high

In addition, the target group "Forum" exists in the same layer with the protection requirement set:

*   Confidentiality: high
*   Integrity: normal
*   Availability: high

In layer 3 IT systems there is the corresponding target group "Web server" on which the website and the forum are hosted. The wizard now suggests the following protection requirement:

*   Confidentiality: high
*   Integrity: normal
*   Availability: very high

Protection Needs Wizard (Layer 2 Infrastructure)
------------------------------------------------

As with the IT System Wizard (Layer 2 Infrastructure), the site assignment is analyzed to determine the protection needs of a target group (or groups) in Layer 2 that is related to a target group in Layer 3 IT systems.

**Example**: There is a target group "server room" in layer 2. There are two servers in this room, which are covered by the target groups "e-mail server" and "web server" in layer 3.

Protection requirement of "e-mail server":

*   Confidentiality: very high
*   Integrity: high
*   Availability: very high

Protection requirement of "Web server":

*   Confidentiality: high
*   Integrity: normal
*   Availability: very high

Based on the location assignment, the wizard suggests the following protection requirement for "Server room":

*   Confidentiality: very high
*   Integrity: high
*   Availability: very high