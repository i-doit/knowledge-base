i-doit PRO is unlocked with a license.

The licenses for your company are available at the [customer portal](/display/en/Customer+Portal). Access is given to the person who is stated as the primary contact person.

Name of the database

When creating a license for a single tenant, the **name of the database** is required. Please make sure that the name is available to you when creating the license in our customer portal

Licenses have a certain period of time during which they are valid. If the period expires a new license is required.

Token compatibility

License Token can be used starting with **i-doit version 1.12.2**  
Offline License Key can be used only with **i-doit version 1.15**

**Inhaltsverzeichnis**

*   1[Import License Token](#ActivateLicense-ImportLicenseToken)
*   2[Which method of importing a license should I use?](#ActivateLicense-WhichmethodofimportingalicenseshouldIuse?)
*   3[How to get the License Token and how to get the Offline License Key string?](#ActivateLicense-HowtogettheLicenseTokenandhowtogettheOfflineLicenseKeystring?)
*   4[Activate License Token Online](#ActivateLicense-ActivateLicenseTokenOnline)
*   5[Activate Offline License Key Offline](#ActivateLicense-ActivateOfflineLicenseKeyOffline)
*   6[Activation via the Admin-Center (License file outdated)](#ActivateLicense-ActivationviatheAdmin-Center(Licensefileoutdated))
*   7[Trial Licenses](#ActivateLicense-TrialLicenses)

Pre i-doit 1.12.2 behavior

Multiple types of licenses are available for i-doit pro:

*   The **subscription** license for each single tenant (including **trial licenses**)  
    You can load a subscription license via the [Admin center](/display/en/Admin+Center) 
*   The **subscription** license for multiple **tenants**  
    If you wish to use one subscription license for multiple tenants, you can only Activate this via the Admin center.
*   The **buy** license for single or multiple **tenants**  
    The activation for both types is also carried out via the [Admin center](/display/en/Admin+Center)

Import License Token
--------------------

The new customer portal has been in operation since March 2022. This has changed the licensing and a license server has been created.  
Tokens are created via this server and replace the license file.

Which method of importing a license should I use?
-------------------------------------------------

*   If your server, on which i-doit is installed, **has an internet connection**, use activate [License Token](#ActivateLicense-Steps1-5).
*   If your server, on which i-doit is installed, **does not have an internet connection**, follow the Steps 1 to 5 and go on with the Steps from [Offline License Key](#ActivateLicense-Steps6-8).  
      
    

How to get the License Token and how to get the Offline License Key string?
---------------------------------------------------------------------------

*   The **License Token** can be found in the customer portal.
*   You can retrieve the license key string by clicking the “**Offline License Key**”-button, top right. This will open a popup with the Offline License.

![](/download/attachments/30441527/how-to-get-a-token.png?version=2&modificationDate=1652373554156&api=v2&effects=drop-shadow)

Activate License Token Online
-----------------------------

**Step 1:** Go to the i-doit customer portal. To enter the admin center, click on the link in the login screen.

![](/download/attachments/30441527/1.Login_admin.png?version=1&modificationDate=1652373528043&api=v2&effects=drop-shadow)

**Step 2:** Next, you need to enter the credentials you assigned for the admin center when you installed i-doit.

![](/download/attachments/30441527/2.login_admin_center.png?version=2&modificationDate=1652373576829&api=v2&effects=drop-shadow)  
**Step 3:** Now you are logged into the Admin Center and click on the “Licenses” tab.

![](/download/attachments/30441527/3.admin-center-home.png?version=2&modificationDate=1652373593497&api=v2&effects=drop-shadow)

**Step 4:** Here you can import a licence file or your License Token. For this you copy the License Token into the input field.

![](/download/attachments/30441527/4.admin-center-licenses.png?version=2&modificationDate=1652373606789&api=v2&effects=drop-shadow)

**\*If a license file is still installed here, it must be deleted.**

Afterwards click on the “**Save & Check**”-button. Now the License Token will be checked by the license server.

**Step 5:** The License Token has been verified by the license server and all associated licenses are displayed.

![](/download/attachments/30441527/5.admin-center-licenses-token.png?version=3&modificationDate=1652373828630&api=v2&effects=drop-shadow)

**_Note_**: The License Token looks as follows: **2e23aa70df492b7e7b8f321929gcfcde**

  

Activate Offline License Key Offline
------------------------------------

We perform [Steps 1-4](#ActivateLicense-Steps1-5) beforehand. 

**Step 5:** Insert **License Token**. Click the **“Save”**\-button. Do **not** click "Save and Check".

![](/download/attachments/30441527/image2022-10-11_15-29-9.png?version=1&modificationDate=1665494949784&api=v2&effects=drop-shadow)

**Step 6:** Click on the "**Install new license**" button.

![](/download/attachments/30441527/6.add-new-license-button.png?version=2&modificationDate=1652373698320&api=v2&effects=drop-shadow)

**Step 7:** Now you see a field into which the entire **Offline License Key** string must be copied.

![](/download/attachments/30441527/7.add-new-license.png?version=2&modificationDate=1652373722062&api=v2&effects=drop-shadow)

**_Note:_** Depending on how many add-ons are included in the purchased license, there will be several license keys. You can copy them contiguously into the field.

![](/download/attachments/30441527/7.add-new-license-end.png?version=2&modificationDate=1652373734647&api=v2&effects=drop-shadow)  
**Step 8:** Now click on the “**Add licence**”-button.

![](/download/attachments/30441527/8.add-new-license-save.png?version=2&modificationDate=1652373750450&api=v2&effects=drop-shadow)

Now the License Token has been verified with the Offline License Key string and all associated licenses are displayed.

![](/download/attachments/30441527/5.admin-center-licenses-token.png?version=3&modificationDate=1652373828630&api=v2&effects=drop-shadow)  
  

Activation via the Admin-Center (License file outdated)
-------------------------------------------------------

After logging in, the installation via the [Admin center](/display/en/Admin+Center) is carried out in the `**Licences**` tab. Use the button `**Install new licence**` to open the expanded dialogue and select the downloaded License file.

New log-in may be required

When a license was activated successfully and you want to work with i-doit, it may be the case that you nevertheless receive the information that no valid license is activated. You can correct the situation by logging off and then logging in again with the current user. Afterwards, this note should not reappear.

![](/download/attachments/11730998/i-doit-license.png?version=1&modificationDate=1572613871986&api=v2&effects=drop-shadow)

Automatic license distribution

Please note that in the **Tenants** tab you can configure how many object licenses can be assigned to a client. Even if only a single client exists, a switched off automatic license distribution can ensure that not all object licenses are used. If this is the case, it can simply be activated and applied with a click on save.

Trial Licenses
--------------

You can [apply for a license to test i-doit pro for 30-days](https://www.i-doit.com/en/trial-version/) on our website.

Name of the test database

The trial license is always issued for the database name **idoit\_data**. To guarantee a flawless function during the trial period, you may not change the name of the database during the installation!