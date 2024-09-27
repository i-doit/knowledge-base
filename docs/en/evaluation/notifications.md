# Notifications

In this article we describe the notifications module, which has the purpose to check various data in the IT documentation and to send emails in the case of specific events. The module consists of particular kinds of notifications, the setup of these notification types, e-mail templates and last but not least the regular execution of the [controller](../i-doit-pro-add-ons/api/index.md).

Kinds of Notifications
----------------------

You can carry out the configuration settings at **Extras → CMDB → Notifications**.

Currently, you can choose from the following kinds of notifications:

*   **Expiration of a notice period**  
    Checks contracts for the time frame until the expiration of the notice period

*   **Expiration of a maintenance/guarantee period**  
    Checks contracts for the time frame until the expiration of the maintenance/ guarantee period

*   **Expiration of a certification period**  
    Checks all object types associated to the category “certificate” for the expiration date of the certificate

*   **CMDB** **s****tatus end****s**  
    Helpful for the category “status planning”. This notifications informs you about a planned CMDB status that is going to end.

*   **CMDB** **s****tatus starte****d**  
    Helpful for the category “status planning”. This notification informs you about a planned CMDB status that is going to start.

*   **Free** **l****i****censes**  
    Checks licenses for the number of available licenses left.

*   **Stored objects**  
    Checks any object type for the number of contained objects with the status “stored”.

*   **Li****cense expiration**  
    Checks licenses for the time frame until they expire.

*   **Report bas****ed**  **notification**  
    Executes reports and notifies you once a custom number of found objects is reached.

*   **Unchanged objects**  
    Checks objects which have not been changed in a custom-defined time frame. Can be helpful to find very old data and update them in processes.

*   **Changed objects**  
    Checks objects which have been changed in a custom-defined time frame. As an example, a daily list of all objects that have been changed in the last 24 hours can be issued.

*   **i-doit** **u****pdate**  
    Checks whether a new version of i-doit is available. i-doit requires an internet connection to do so.

!!! info "Report based notification"

    The notification type “report based notification” can be used in a very flexible way and can send appropriate notifications for almost all events and statuses.

Setup
-----

The setup of notifications always follows the same pattern. General settings, like a threshold value, a limit of notifications, objects which will be monitored and contacts that are to be notified, are defined.

### General Settings

The \* constitutes a mandatory field in i-doit.

*   **Name****\***  
    Ideally, the name should have a meaningful designation.

*   **A****c****ti****ve****\***  
    You can click the checkbox for activation or you can deactivate the notifications.

*   **Threshold value**  
    The threshold value varies depending on whether a time factor (X years/ months/ days/ hours/ minutes/ seconds) or a counter (number of found objects) can be set up for the notification. Above the settings is a short explanation of the notification as well as the information of what exactly is checked by the threshold value.

*   **Max.** **amount**  **of notifications to send****\***  
    In case the notification is checked multiple times and an object is found multiple times, you can set a limit here. As soon as the limit value has been reached, no further notifications will be sent. Everything less or equal to 0 means that notifications will continue until the object/s are changed so that the notification is not valid anymore.  

    Example: If checks and notifications are carried out every day and a 5 is entered in this field, then the notifications will stop after 5 days.  

    The counter will be reset to 0 if the object cannot be found anymore by this notification, for example, when the object is updated or after the maximum number of notifications was made.

*   **Number of sent notifications**  
    This display is purely for information purposes and is either increased when a notification is sent or reset if none is sent.

*   **Dat****e of the last check**  
    Also purely for information purposes. It shows the last time a check was performed.

*   **Description**  
    This field is a free text field for a descriptive text of the notification.

### Domains

Objects which are to be checked by the notification can be selected specifically or according to a pattern in the domains.

*   **Obje****c****t****s**  
    One or more objects can be selected via the magnifier.

*   **Obje****c****t type****s**  
    All objects of one or more selected object types can be checked here.

*   **Reports**  
    Notifications can be even more specific with a report.  
    Example: The aim is to test whether enough free licenses are left which cost more than 150 EUR per license since a longer process applies here compared to the cheaper licenses. Then a second report can be created and used in another notification in order to query the cheaper licences and to effect a notification at a later time. Please be really mindful of the domain and the queried categories assigned to the object types!

!!! info "Restricted object types"

    Only certain object types are supported, depending on the type of notification. For example, when checking contracts only objects of the type “Contract” and when checking licenses only objects of the type “License” may be chosen.

### Recipient

You can also notify recipients both specifically or collectively.

*   **Assigned roles**  
    When an object is found with the configured notification, you can notify the contact which is assigned to the object in the role that is set here.  
    Example: The documented contact with the role “Contract partner” can be notified via the category “Contact assignment” in the contract.

*   **Assigned contacts**  
    It is also possible to notify one or more contacts/ person groups or organizations. Important for this is a defined email address for each contact object.

*   **Receiver calculation strategy  
    **Used calculation strategy of recipients when **resolving Person groups** to persons. This setting affects only groups of persons assigned as contacts.

    | Strategie | Beschreibung |
    | --- | --- |
    | \-  | This is the default = Groups if available, otherwise assigned persons |
    | Groups and Persons | The primary email address of the Person group and each Person group member are notified. |
    | Groups if available, otherwise assigned persons | If the person group has stored a primary e-mail address, this will be notified.  <br>If the person group does NOT have a primary e-mail address, the primary e-mail address of each person group member will be notified. |
    | Groups only | Person groups with a primary email address will be notified. |
    | Persons only | Person group member with a primary email address will be notified. |

E-mail Templates
----------------

The templates matching the corresponding notifications can be selected and adjusted for the German or English language in the left navigation tree. This always applies globally to all users and because of this your adjustments should not be be too specific. There is no possibility to reset the template to default. Whether the German or the English message is sent depends on the user settings of the contact who will be notified. If this user was never logged in to i-doit, the default language of i-doit is used for the notification.

*   **Languag****e****\***  
    The language that is currently being edited is displayed.

*   **Subject****\***  
    The subject of the message can be customized with placeholders from the bottom section of the interface.

*   **Notification** **text****\***  
    The text can be assembled with placeholders just like the subject.

*   **Report**  
    A report for the e-mail can be defined here, which is then used to organize the object information found in the notification.

Configuration of the call with the i-doit Console
-------------------------------------------------

To ensure that the set-up notifications are also checked regularly, the i-doit [Console](../console/../automation-and-integration/cli/index.md) must be executed with the command **[notifications-send](../automation-and-integration/cli/console/options-and-parameters-cli.md#notifications-send)**, for example as a cron job. It is not possible to call up each notification individually, but all notifications are always checked automatically one after the other. It makes sense to consider how often the maximum number of checks should be. In our experience, it has proven useful to check every day shortly before starting work, so that it is immediately clear in the morning what you should deal with during the day.

!!! info "Hint"

    Without a call of the command via the i-doit [Console](../console/../automation-and-integration/cli/index.md) no dispatch of the notifications takes place!

The possible parameters as well as an example call for sending notifications can be found in the [corresponding article](,/../notifications.md) for the command **[notifications-send](../automation-and-integration/cli/console/options-and-parameters-cli.md#notifications-send)**.

!!! info "Escalation levels"

    You can map escalation levels by using the notification module. For this, you need to set up multiple notifications with different recipient groups and threshold values for the same notification types.

**Example of use**

    sudo -u www-data php console.php notifications-send --user admin --password admin --tenantId 1
