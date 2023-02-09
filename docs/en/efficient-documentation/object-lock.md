  

  

**Contents**

*   1[Functionality](#ObjectLock-Functionality)
*   2[Configuration](#ObjectLock-Configuration)
*   3[List of Locked Objects](#ObjectLock-ListofLockedObjects)

  

  

  

Collaborating on the IT documentation also has its pitfalls. Therefore i-doit provides a function to prevent that users who make changes overwrite changes which were made by other users. With the object lock function a specific user gets exclusive writing permissions. All other users only have reading permissions while the lock is active.

Functionality
-------------

When a user edits an [object](../../basics/structure-of-the-it-documentation.md), it will be locked for a certain period of time for other users. Even though other users can view the object, they cannot edit it. A big red reference is displayed on the [overview page](../../basics/structure-of-the-it-documentation.md) and in each [category](../../basics/structure-of-the-it-documentation.md) of the object indicating that this object is locked and also stating by whom: `**- LOCKED ([User]) -**`

As soon as the object lock is activated, a counter starts. When the countdown is finished, the object is unlocked again. During this period the user should have saved his changes in order to avoid the risk of other users overwriting the changes (or the other way around).

The object will be unlocked prematurely once the user saved his changes.

![](/download/attachments/51314701/object-lock-en.png?version=2&modificationDate=1631799810685&api=v2&effects=drop-shadow)![](/download/attachments/51314701/object-lock-en.png?version=2&modificationDate=1631799810685&api=v2&effects=drop-shadow)

  

Configuration
-------------

The object lock is active for 120 seconds in the default installation of i-doit. This can be configured at **`Administration → CMDB Settings → General configuration → Object lock`**:

*   **`Activate locking of objects in edit mode:`** Do you want the object lock to be activated?
*   **`Timeout:`** Time in seconds for the countdown.

![](/download/attachments/51314701/object-lock-edit-en.png?version=1&modificationDate=1631799774858&api=v2&effects=drop-shadow)

  

List of Locked Objects
----------------------

All currently locked objects are displayed in a list below the configuration (**`Administration → CMDB Settings → General configuration → Object lock`**). All locked objects can be unlocked prematurely via the **`Delete`** button.

![](/download/attachments/51314701/object-lock-cat-en.png?version=1&modificationDate=1631799774528&api=v2&effects=drop-shadow)