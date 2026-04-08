---
title: i-doit - Patch Manager Bridge
description: This example shows how to create a bridge between i-doit and Patch Manager based on servers.
icon: patch-manager
lang: en
---

# i-doit - Patch Manager Bridge

This example shows how to create a bridge between i-doit and Patch Manager based on servers.

We use the ability to automatically generate access links in i-doit to open the Patch Manager Launcher with a direct link to a specific object. On the Patch Manager side, we use the external applications feature to link back to i-doit.

## i-doit Configuration:

<div class="steps" markdown>

1. Navigate to "Extras/Templates", click on "New Template" and create a new template with the object type "server".<br>
    [![Open-Templates](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/1.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/1.png){:target="_blank"}

2. Name the template "Patch Manager bridge"<br>
    [![Create-Template](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/2.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/2.png){:target="_blank"}

3. Navigate to the "Access" category and click "New Entry"<br>
    [![Create-Access-Entry](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/3.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/3.png){:target="_blank"}

4. Name the new entry e.g. "Patch manager" and give it a custom type if you want.<br>
    [![Create-Access-Entry](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/4.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/4.png){:target="_blank"}

5. Enter the URL in the format `http(s)://mypatchmanager.server.com(:myport)/patchmanager.plp?initial-overview=%objectname|encode%`, where the variable `%objectname%` can be replaced by any of the available i-doit placeholder variables. You can get a list of available variables by clicking the info button next to the URL field.<br>
    [![Create-Access-Entry](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/5.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/5.png){:target="_blank"}

    Example: `https://mypatchmanager.com:8080/patchmanager.plp?initial-overview=%objectname|encode%`

    [![example-link](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/6.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/6.png){:target="_blank"}

    !!! success "When the user later clicks the link, the Patch Manager Launcher will be opened with this parameter. The value of the URL parameter for Patch Manager can be either the device name or the value of any attribute associated with the device. Patch Manager opens the object that matches the value.<br>**The value must be unique** (e.g., if there are two objects named `Server12345`, the value will be skipped and the link will default to the parent location overview)."

6. Save the entry in the "Access" category<br>
    [![Save-Access-Entry](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/7.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/7.png){:target="_blank"}

7. Click on your profile icon in the top right corner and select "Administration". Then go to "Data Structure" / "Object Types" / "Infrastructure" and select "Server".<br>
    [![Open-Object-Type](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/8.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/8.png){:target="_blank"}

8. Click "Edit" and scroll down to the "Default Template" field. Select the newly created "Patch Manager bridge" template and "Save" the settings.<br>
    [![Set-Default-Template](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/9.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/9.png){:target="_blank"}

9.  The i-doit configuration is complete. Every time a new server is created, the "Default Template" with the entry in the Access category will be applied to the object. You can now easily open "Patch Manager" via the link to switch between the tools.<br>
    [![Use-Link](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/10.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/10.png){:target="_blank"}
</div>

!!! bug "For the URL to be built correctly in i-doit, a hotfix must be applied. The hotfix can be found [HERE](../administration/hotfixes/index.md)."

## Installing the URL-Router Add-on

For the bridge to work, you need to install the free i-doit **"URL-router"** add-on in i-doit. See [Add-on installation](../i-doit-add-ons/index.md#installation) for details on installing an i-doit add-on.

!!! note "This add-on is required to provide the `/open-object/objectname` navigation in i-doit. Without this add-on, the links created by Patch Manager will lead nowhere."

## Patch Manager Configuration

These steps describe the configuration of i-doit as an external application in Patch Manager.
<div class="steps" markdown>

1. Go to the "Administration" / "External Applications Overview" menu.<br>
    [![Open-External-Applications](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/11.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/11.png){:target="_blank"}

2. In the "External Applications Overview", add a new "External Application".<br>
    [![Create-External-Application](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/12.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/12.png){:target="_blank"}

3. Enter "i-doit" as the name, "browser" as the "Executable", and then enter the i-doit URL in the following format: `http(s)://my-i-doit.server.com(:myport)/open-object/[Label|url]`<br>

    Example: `https://demo.i-doit.com/open-object/[Label|url]`

    !!! success "Patch Manager creates a link with the object name as an entry for a third-party application. Once you click this link, the default browser opens and navigates to your i-doit instance. i-doit interprets the Patch Manager label and matches it with the object name. If it finds a unique entry, it opens the respective object. <br><br>Optionally advanced usage: The "URL-Router" also provides the following URL routes:<br>`/open-object-by-ip/<ip address>`<br>`/open-object-by-inventory/<inventory no>`<br>You can use these, for example, with the Patch Manager variables `[ipaddress]` and `[inventory]` if you have created corresponding custom fields for them."

    [![Open-External-Applications](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/13.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/13.png){:target="_blank"}

4. Go to the "Application" tab and apply the application to the object type "Server" (or another object type).<br>
    [![Create-External-Application](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/14.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/14.png){:target="_blank"}

5. You are done with Patch Manager! To launch the link, right-click on a device and select "Launch" and then the "i-doit" submenu item.<br>
    [![Use-External-Application](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/15.png)](../assets/images/de/anwendungsfaelle/i-doit-patch-manager-bridge/15.png){:target="_blank"}
</div>
