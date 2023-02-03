We're happy to announce our latest major version 1.19 of i-doit pro. This release is a very important step in the development of i-doit. See the changelog for a complete list of changes. We encourage you to [update](/display/de/Update+einspielen) to this release as soon as possible.

Highlights in this release
--------------------------

*   A complete **redesign** of the i-doit frontend to **improve the user experience**.
*   Added **compatibility** for **PHP 8.0**.
*   **New configuration** to **create custom translations** and **custom languages**.
*   **Setting** to define a [**default language** for newly created users](https://kb.i-doit.com/display/de/Mandanteneinstellungen#Mandanteneinstellungen-Sprache(ab1.19)).
*   **New configuration** to **[hide attributes](/display/de/Attributsichtbarkeit)** from categories and/or overview pages.
*   **Option** to **log** the **[last login](https://kb.i-doit.com/display/de/Mandanteneinstellungen#Mandanteneinstellungen-Sicherheit)** of a user.
*   [**Export** for **reports**](https://kb.i-doit.com/display/de/Report+Manager#ReportManager-Reportexportieren/importieren) which have been created via **query builder**.

Add-ons
-------

The New Add-on Versions require i-doit >= 1.19

Alongside i-doit pro 1.19, we will also release new versions of the following **add-ons**, which **need to be updated** afterwards to be compatible with **PHP 8.0** and the **new design**:

*   [API](/pages/viewpage.action?pageId=7831613) **1.13**
*   [Documents](/display/de/Documents) **1.5**
*   [Analysis](/display/de/Analysis) **1.3**
*   [Floorplan](/display/de/Floorplan) **1.6**
*   [Cabling](/display/de/Cabling) **1.2**
*   [Relocate CI](/display/de/Relocate-CI) **1.2**
*   [Replacement](/display/de/Replacement) **1.4**
*   [Maintenance](/display/de/Maintenance) **1.2**
*   [Events](/display/de/Events) **1.3**
*   [Workflow](/display/de/Workflow) **1.1**
*   [Checkmk](/display/de/Checkmk) **1.1**
*   [Check\_MK 2](/display/de/Checkmk2) **1.8**
*   [Nagios](/display/de/Nagios) **1.1**
*   [Packager](/display/de/Add-on+Packager) **1.2**

Important update notes
----------------------

*   With i-doit pro 1.19, **PHP 7.3** is **no longer supported**. Please ensure to upgrade to **PHP 7.4** first before updating to i-doit pro 1.19. Do **not** upgrade to **PHP 8.0** as long as you are using **i-doit pro < 1.19**.  
    **After** the update of i-doit pro 1.19, you are free to upgrade PHP to 8.0 which is also **highly recommended**.  
      
    
*   **Before activating** the feature to log the **last login of a user**, please check whether this is compatible with the **data protection agreements** of your company and country. Contact your data privacy expert first if you are not sure about this.  
      
    
*   If you want to use the **new icons** for object types after updating to i-doit pro 1.19, you can activate them manually in your i-doit **administration** under `System tools` > `Cache / Database`.  
      
    
*   The following **Partner Add-ons** need to be updated **before** the i-doit 1.19 update (If these version requirements are not matched, the i-doit update cannot be performed):  
    *   **[ISMS](/display/de/ISMS)** needs to be updated to version **1.5.2 or higher**
    *   **[VIVA 2](/display/de/VIVA+2)** needs to be updated to version **3.2.1 or higher**
    *   **Privacy** needs to be updated to version **1.1 or higher**
        
    *   **Label** needs to be updated to version **0**.5** or higher**
    *   **Disposal** needs to be updated to version  **1.1.2** **or higher**
        
    *   **Inheritance** needs to be updated to version **1.3.7** **or higher**
        

System requirements
-------------------

Please check that your system matches the [system requirements](/display/de/Systemvoraussetzungen) before updating your instance to i-doit pro 1.19. Please also check that you have created a [backup of all your data](/display/de/Daten+sichern+und+wiederherstellen) and all add-ons are [up-to-date](/display/de/i-doit+pro+Add-ons).