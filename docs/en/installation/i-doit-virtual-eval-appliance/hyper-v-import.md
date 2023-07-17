# Import i-doit Appliance into a Hyper-V Environment

We deliver our appliance in OVF format together with a virtual VMDK hard disk image. To import this into a Hyper-V environment, the virtual hard disk must be converted from the VMDK format into the VHD format in the first step.

For this you can use the free tool "Starwind Converter" which you can download from the following download link:

[https://www.starwindsoftware.com/tmplink/starwindconverter.exe](https://www.starwindsoftware.com/tmplink/starwindconverter.exe)

We have already downloaded the i-doit appliance and unpacked it under c:\\i-doit\_appliance:

[![Folder coontent](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/1-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/1-hvi.png)

After installing the Starwind Converter, we start it and select "Local File" as the source and go to "Next" :

[![Select dest image](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/2-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/2-hvi.png)

Now we select the VMDK image from the ZIP file of the i-doit appliance and go to "Next":

[![Select zip](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/3-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/3-hvi.png)

After that we can choose the destination format for the Virtual Harddrive and go to "Next":

[![Select destination format](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/4-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/4-hvi.png)

In the next step we can select the destination for the new VDH disk and its folder and go to "Next":

[![Select vhd](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/5-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/5-hvi.png)

Now the conversion takes place and after completion we can exit the program:

[![Completion](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/6-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/6-hvi.png)

In the next step we can integrate the converted disk into a new Hyper-V machine.

To do this, we start the Hyper-V New Virtual Machine Wizard and specify the folder to the newly created VDH:

[![Select Name and path](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/7-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/1-hvi.png)

After that we choose the generation for the new virtual machine:

[![Select generation](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/8-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/8-hvi.png)

Give this Sufficient memory ([System Requirements](../system-requirements.md)) :

[![Configure memory](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/9-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/9-hvi.png)

Assign the corresponding network:

[![Network assignment](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/10-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/10-hvi.png)

And in this step connect the converted hard disk image:

[![Virtual hdd configuration](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/11-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/11-hvi.png)

After that we can finish the setup and start the virtual machine:

[![Finish](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/12-hvi.png)](../../assets/images/en/installation/manual-installation/virtual-appliance/appliance-hyper-v-import/12-hvi.png)

The virtual machine should now start properly and you should be able to log in with the supplied user data:

|     |     |     |
| --- | --- | --- |
| **Login** | **Username** | **Passwort** |
| Console Login | idoitadm | idoit |
| i-doit Login | admin | admin |
| Admin Center Login | admin | idoit |
