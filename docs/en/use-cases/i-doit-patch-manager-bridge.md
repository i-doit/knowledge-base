---
title: i-doit - Patch Manager bridge
description: This example shows how to create a bridge between i-doit and Patch Manager on the example of servers.
icon: patch-manager
lang: en
---

# i-doit - Patch Manager bridge

This example shows how to create a bridge between i-doit and Patch Manager on the example of servers.

We utilize the possibility to automatically generate access links in i-doit to open the Patch Manager launcher with a direct link to a specific object. On the Patch Manager side, we use the external application feature to link back to i-doit.

## i-doit configuration:

<div class="steps" markdown>

1. You need to navigate to "Extras/Templates", click on "New Template" and create create a new template with the object type "server".<br>
    [![Open-Templates](../assets/images/en/use-cases/i-doit-patch-manager-bridge/1.png)](../assets/images/en/use-cases/i-doit-patch-manager-bridge/1.png){:target="_blank"}

2. Name the template "Patch Manager bridge"<br>
    [![Create-Template](../assets/images/en/use-cases/i-doit-patch-manager-bridge/2.png)](../assets/images/en/use-cases/i-doit-patch-manager-bridge/2.png){:target="_blank"}

3. Navigate to the "Access" category and press "New" entry<br>
    [![Create-Access-Entry](../assets/images/en/use-cases/i-doit-patch-manager-bridge/3.png)](../assets/images/en/use-cases/i-doit-patch-manager-bridge/3.png){:target="_blank"}

4. Name the new entry for example "Patch manager" and give it a custom entry type if you want to.<br>
    [![Create-Access-Entry](../assets/images/en/use-cases/i-doit-patch-manager-bridge/4.png)](../assets/images/en/use-cases/i-doit-patch-manager-bridge/4.png){:target="_blank"}

5. Enter the URL in the format `http(s)://mypatchmanager.server.com(:myport)/patchmanager.plp?initial-overview=%objectname|encode%` whereas the variable `%objectname%` can be replaced by any of the available i-doit placeholder variables. You can get a list of available variables by clicking on the info button next to the URL field.<br>
    [![Create-Access-Entry](../assets/images/en/use-cases/i-doit-patch-manager-bridge/5.png)](../assets/images/en/use-cases/i-doit-patch-manager-bridge/5.png){:target="_blank"}

    Example: `https://mypatchmanager.com:8080/patchmanager.plp?initial-overview=%objectname|encode%`

    [![example-link](../assets/images/en/use-cases/i-doit-patch-manager-bridge/6.png)](../assets/images/en/use-cases/i-doit-patch-manager-bridge/6.png){:target="_blank"}

    !!! success "HOW THIS WORKS: If the user later presses the link, the Patch Manager launcher is opened with this parameter. The value of the URL parameter for Patch Manager can be either the equipment label, or the value of any attribute associated with the equipment. Patch Manager opens up the object that matches the value.<br>**The value must be unique** (eg. if there are two instances of equipment named `Server12345`, then the value will be skipped, and the link will just default to the top level location overview)."

6. Save the "Access" category entry<br>
    [![Save-Access-Entry](../assets/images/en/use-cases/i-doit-patch-manager-bridge/7.png)](../assets/images/en/use-cases/i-doit-patch-manager-bridge/7.png){:target="_blank"}

7. Click your profile icon in the upper right corner and select "Administration". Then go to "Data structure" / "Object types" / "Hardware" and select "Server".<br>
    [![Open-Object-Type](../assets/images/en/use-cases/i-doit-patch-manager-bridge/8.png)](../assets/images/en/use-cases/i-doit-patch-manager-bridge/8.png){:target="_blank"}

8. Click on "Edit" and scroll down to the "Default Template" field. Select the newly created "Patch Manager bridge" template and "Save" the settings.<br>
    [![Set-Default-Template](../assets/images/en/use-cases/i-doit-patch-manager-bridge/9.png)](../assets/images/en/use-cases/i-doit-patch-manager-bridge/9.png){:target="_blank"}

9.  You’re done with the i-doit side! Every time you create a new server, the default template with the access category is applied to the object and you can easily click on the Patch Manager access link to switch between the tools.<br>
    [![Use-Link](../assets/images/en/use-cases/i-doit-patch-manager-bridge/10.png)](../assets/images/en/use-cases/i-doit-patch-manager-bridge/10.png){:target="_blank"}
</div>

!!! bug "In order for the URL in i-doit to be built correctly, a hotfix needs to be applied. The hotfix can be found [HERE](../system-administration/hotfixes/index.md)."

## URL Router preparation in i-doit

In order to use the tool bridge, you need to install the free i-doit **"URL-router"** add-on in i-doit. See [Add-on Installation](../i-doit-add-ons/index.md#installation) for details on how to install an i-doit add-on

!!! note "This add-on is needed to provide the `/open-object/objectname` navigation in i-doit. Without this add-on, the Patch Manager created links end up in the nirvana."

## Patch Manager configuration

These steps describe the configuration of i-doit as an external application in Patch Manager.
<div class="steps" markdown>

1. Go to menu "Administration" / "External Applications Overview"<br>
    [![Open-External-Applications](../assets/images/en/use-cases/i-doit-patch-manager-bridge/11.png)](../assets/images/en/use-cases/i-doit-patch-manager-bridge/11.png){:target="_blank"}

2. in the "External Applications Overview", add a new "External Application"<br>
    [![Create-External-Application](../assets/images/en/use-cases/i-doit-patch-manager-bridge/12.png)](../assets/images/en/use-cases/i-doit-patch-manager-bridge/12.png){:target="_blank"}

3. Enter "i-doit" as "Name", "browser" as "Executable" and enter your i-doit URL with the following format: `http(s)://my-i-doit.server.com(:myport)/open-object/[Label|url]`<br>

    Example: `https://demo.i-doit.com/open-object/[Label|url]`

    !!! success "HOW THIS WORKS: Patch Manager creates a link with the objects label as a third party application entry. Once you click on that link, the default browser is opened up and navigates to yor i-doit instance. i-doit interprets the Patch Manager label and matches it against the object name. If it finds a unique entry, it opens up the specific object.<br><br>Optional advanced usages: "i-doit URL-router" also provides the following URL routes<br>`/open-object-by-ip/<ip address>`<br>`/open-object-by-inventory/<inventory no>`<br>You can use them for example with the Patch Manager `[ipaddress]` and `[inventory]` variables if you created custom fields for them accordingly."

    [![Open-External-Applications](../assets/images/en/use-cases/i-doit-patch-manager-bridge/13.png)](../assets/images/en/use-cases/i-doit-patch-manager-bridge/13.png){:target="_blank"}

4. Go to the "Application" tab and apply the application to the object type "Server" (or any other object type you like).<br>
    [![Create-External-Application](../assets/images/en/use-cases/i-doit-patch-manager-bridge/14.png)](../assets/images/en/use-cases/i-doit-patch-manager-bridge/14.png){:target="_blank"}

5. You’re done with the Patch Manager side! To run the link, right-click on an equipment and select "Launch", then the sub-menu item "i-doit".<br>
    [![Use-External-Application](../assets/images/en/use-cases/i-doit-patch-manager-bridge/15.png)](../assets/images/en/use-cases/i-doit-patch-manager-bridge/15.png){:target="_blank"}
</div>
