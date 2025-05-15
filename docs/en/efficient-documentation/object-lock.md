# Object Lock

Collaborating on the IT documentation also has its pitfalls. Therefore i-doitvides a function to prevent that users who make changes overwrite changes which were made by other users. With the object lock function a specific user gets exclusive writing permissions. All other users only have reading permissions while the lock is active.

Functionality
-------------

When a user edits an [object](../basics/structure-of-the-it-documentation.md), it will be locked for a certain period of time for other users. Even though other users can view the object, they cannot edit it. A big red reference is displayed on the [overview page](../basics/structure-of-the-it-documentation.md) and in each [category](../basics/structure-of-the-it-documentation.md) of the object indicating that this object is locked and also stating by whom: **- LOCKED ([User]) -**

As soon as the object lock is activated, a counter starts. When the countdown is finished, the object is unlocked again. During this period the user should have saved his changes in order to avoid the risk of other users overwriting the changes (or the other way around).

The object will be unlocked prematurely once the user saved his changes.

[![Functionality](../assets/images/en/efficient-documentation/object-lock/1-ol.png)](../assets/images/en/efficient-documentation/object-lock/1-ol.png)
[![Functionality](../assets/images/en/efficient-documentation/object-lock/2-ol.png)](../assets/images/en/efficient-documentation/object-lock/2-ol.png)

Configuration
-------------

The object lock is active for 120 seconds in the default installation of i-doit. This can be configured at **Administration → CMDB Settings → General configuration → Object lock**:

*   **Activate locking of objects in edit mode:** Do you want the object lock to be activated?
*   **Timeout:** Time in seconds for the countdown.

[![Configuration](../assets/images/en/efficient-documentation/object-lock/3-ol.png)](../assets/images/en/efficient-documentation/object-lock/3-ol.png)

List of Locked Objects
----------------------

All currently locked objects are displayed in a list below the configuration (**Administration → CMDB Settings → General configuration → Object lock**). All locked objects can be unlocked prematurely via the **Delete** button.

[![List of Locked Objects](../assets/images/en/efficient-documentation/object-lock/4-ol.png)](../assets/images/en/efficient-documentation/object-lock/4-ol.png)
