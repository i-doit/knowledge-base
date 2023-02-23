We deliver our appliance in OVF format together with a virtual VMDK hard disk image. To import this into a Hyper-V environment, the virtual hard disk must be converted from the VMDK format into the VHD format in the first step.

For this you can use the free tool "Starwind Converter" which you can download from the following download link:

[https://www.starwindsoftware.com/tmplink/starwindconverter.exe](https://www.starwindsoftware.com/tmplink/starwindconverter.exe)

We have already downloaded the i-doit appliance and unpacked it under c:\\i-doit\_appliance:

![](/download/attachments/108658809/image2019-6-13_12-54-22.png?version=1&modificationDate=1631702559106&api=v2&effects=drop-shadow)

After installing the Starwind Converter, we start it and select "Local File" as the source and go to "Next" :

  

![](/download/attachments/108658809/image2019-6-13_12-54-57.png?version=1&modificationDate=1631702559096&api=v2&effects=drop-shadow)

Now we select the VMDK image from the ZIP file of the i-doit appliance and go to "Next":

  

  

![](/download/attachments/108658809/image2019-6-13_12-55-25.png?version=1&modificationDate=1631702559085&api=v2&effects=drop-shadow)

After that we can choose the destination format for the Virtual Harddrive and go to "Next":

![](/download/attachments/108658809/image2019-6-13_12-55-56.png?version=1&modificationDate=1631702559074&api=v2&effects=drop-shadow)

In the next step we can select the destination for the new VDH disk and its folder and go to "Next":

![](/download/attachments/108658809/image2019-6-13_12-56-14.png?version=1&modificationDate=1631702559063&api=v2&effects=drop-shadow)

Now the conversion takes place and after completion we can exit the program:

  

  

![](/download/attachments/108658809/image2019-6-13_12-56-36.png?version=1&modificationDate=1631702559052&api=v2&effects=drop-shadow)

In the next step we can integrate the converted disk into a new Hyper-V machine.

To do this, we start the Hyper-V New Virtual Machine Wizard and specify the folder to the newly created VDH:

![](/download/attachments/108658809/image2019-6-13_12-57-8.png?version=1&modificationDate=1631702559001&api=v2&effects=drop-shadow)

After that we choose the generation for the new virtual machine:

![](/download/attachments/108658809/image2019-6-13_12-57-58.png?version=1&modificationDate=1631702558990&api=v2&effects=drop-shadow)

Give this Sufficient memory ([System Requirements](../system-requirements.md)) :

  

![](/download/attachments/108658809/image2019-6-13_12-58-26.png?version=1&modificationDate=1631702558979&api=v2&effects=drop-shadow)

Assign the corresponding network:

![](/download/attachments/108658809/image2019-6-13_12-58-59.png?version=1&modificationDate=1631702558926&api=v2&effects=drop-shadow)

And in this step connect the converted hard disk image:

  

![](/download/attachments/108658809/image2019-6-13_12-59-30.png?version=1&modificationDate=1631702558967&api=v2&effects=drop-shadow)

After that we can finish the setup and start the virtual machine:

![](/download/attachments/108658809/image2019-6-13_13-0-3.png?version=1&modificationDate=1631702558950&api=v2&effects=drop-shadow)

The virtual machine should now start properly and you should be able to log in with the supplied user data:

|     |     |     |
| --- | --- | --- |
| **Login** | **Username** | **Passwort** |
| Console Login | idoitadm | idoit |
| i-doit Login | admin | admin |
| Admin Center Login | admin | idoit |