---
title: "ISO 27000 with i-doit"
description: "In Germany, energy supply companies (EVU) are currently dealing extensively with the requirements that the Federal Network Agency (BNetzA)..."
icon:
status:
lang: en
---
# ISO 27000 with i-doit

!!! attention "New add-on "ISMS""
    The content of this article is **outdated** and will be **deleted** in the future.
    Instead, the **new add-on [ISMS (beta)](../i-doit-add-ons/isms/index.md)** is available for building an Information Security Management System (ISMS) according to ISO 27001.

In Germany, energy supply companies (EVU) are currently dealing extensively with the requirements that the Federal Network Agency (BNetzA) dictates to them as part of the so-called [IT security catalog](https://www.bsi.bund.de/grundschutz/). The [IT Security Act](https://www.secupedia.info/wiki/IT-Sicherheitsgesetz) initiated by the German government regulates the information security of [critical infrastructures](https://www.kritis.bund.de/SubSites/Kritis/DE/Einfuehrung/einfuehrung_node.html), which typically includes EVUs. This law requires them to take appropriate measures to protect themselves against threats to their (IT) infrastructures. To minimize identified risks, mechanisms are used that have been established for many years at numerous SMEs and corporations: the introduction of an Information Security Management System (ISMS). Organizations such as ISO/IEC, DIN, and BSI work towards standardizing an ISMS. The internationally widespread norm family [ISO/IEC 27000](https://en.wikipedia.org/wiki/ISO/IEC_27000-series) (ISO27k) covers the essential aspects and additionally includes norms that specifically address the requirements of EVUs. Useful measures are described, for example, in [ISO/IEC 27002](https://en.wikipedia.org/wiki/ISO/IEC_27002) and ISO/IEC TR 27019 (German translation: DIN SPEC 27009).

Documentation of IT Infrastructures
------------------------------------

A key aspect of establishing an ISMS is the analysis of your own IT infrastructure. The credo: You can only protect what you can see. This is supported by capturing and maintaining IT documentation. To significantly increase and maintain the security level in IT, it is essential to have well-maintained IT documentation. Only through it does it become apparent

*   which IT components exist,
*   where they are placed,
*   who takes care of them,
*   how they can be reached,
*   what tasks they have,
*   what data they exchange,
*   ...

The benefit derived from IT documentation is enormous and can go far beyond what is necessary to meet the requirements of the ISO27k norms. For a start, a few object types, categories, and attributes are often sufficient:

*   IT-relevant locations: buildings, rooms, racks
*   IT components: servers, virtual environments, and clients
*   Network components: routers, firewalls, switches
*   Passive components: patch panels, cabling
*   Important software components: operating systems, services, business applications, databases
*   Persons and groups
*   Relationships:
    *   Location assignments
    *   Network and port connections
    *   Software assignment
    *   Contact assignment

[![Object view](../assets/images/de/anwendungsfaelle/iso-27000/1-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/1-iso.png)

On this basis, further use cases can be mapped. For example, industry-specific components from control center technology can be captured in the IT documentation through custom object types and categories.

Maintaining ISO27k Documents
----------------------------

[![ISO27k documents](../assets/images/de/anwendungsfaelle/iso-27000/2-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/2-iso.png)
[![ISO27k documents](../assets/images/de/anwendungsfaelle/iso-27000/3-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/3-iso.png)

In addition to IT documentation, i-doit offers further functionalities expected from a tool-supported ISMS. For example, most of the documents required by ISO27k can be generated in the Documents module. The texts are enriched with data from the IT documentation. These can be individual attributes, but also tabular listings of entire categories or the results of previously created reports.

[![ISO27k documents](../assets/images/de/anwendungsfaelle/iso-27000/4-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/4-iso.png)

The obligatory ISO27k documents can in turn be stored in the IT documentation and linked with additional information.

Implementing Controls
-----------------------

In the norm ISO/IEC 27002 and also in others like ISO/IEC 27009, controls are defined that should be implemented

*   organization-wide,
*   for individual components, or
*   for groups of components.

It is also important to record who implemented a control, when, and with what justification. Additional information such as supplementary documentation that is intended to verify implementation is also required.

[![Implementing controls](../assets/images/de/anwendungsfaelle/iso-27000/5-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/5-iso.png)
[![Implementing controls](../assets/images/de/anwendungsfaelle/iso-27000/6-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/6-iso.png)
[![Implementing controls](../assets/images/de/anwendungsfaelle/iso-27000/7-iso.png)](../assets/images/de/anwendungsfaelle/iso-27000/7-iso.png)

All this data can also be mapped in IT documentation. However, we ignore the "IT" in the name here and take advantage of i-doit's flexibility. We create the object types

*   Norms (e.g., ISO/IEC 27002) and
*   Controls

and link them to each other through custom relationships. We also link them with the already documented IT components or groups of IT components. For the latter, the object types "Object groups" and "Workstations" are helpful.
