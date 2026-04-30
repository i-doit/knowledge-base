---
title: "Importing the i-doit Appliance into a Hyper-V Environment"
description: We deliver our appliance in OVF format together with a virtual VMDK disk image.
icon:
status:
lang: en
---
# Importing the i-doit Appliance into a Hyper-V Environment

We deliver our appliance in OVF format together with a virtual VMDK disk image. To import it into a Hyper-V environment, the virtual disk must first be converted from VMDK format to VHD format.

For this, you can use the free tool "Starwind Converter" which you can download from the following link:

[https://www.starwindsoftware.com/tmplink/starwindconverter.exe](https://www.starwindsoftware.com/tmplink/starwindconverter.exe)

We have already downloaded the i-doit Appliance and extracted it to c:\\i-doit\_appliance:

[![Appliance-Files](../../assets/images/de/installation/virtual-appliance/hyper-v/1.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/1.png)

After installing the Starwind Converter, start it and select "Local File" as the source, then click "Next":

[![Appliance-local-files](../../assets/images/de/installation/virtual-appliance/hyper-v/2.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/2.png)

Now select the VMDK image from the ZIP file of the i-doit Appliance and click "Next":

[![Appliance-Next](../../assets/images/de/installation/virtual-appliance/hyper-v/3.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/3.png)

Then select the target format for the virtual hard drive and click "Next":

[![Appliance-Next-2](../../assets/images/de/installation/virtual-appliance/hyper-v/4.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/4.png)

In the next step, select the destination for the new VHD disk and its folder and click "Next":

[![Appliance-Next-3](../../assets/images/de/installation/virtual-appliance/hyper-v/5.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/5.png)

The conversion now takes place and after completion, you can exit the program:

[![Appliance-Finish](../../assets/images/de/installation/virtual-appliance/hyper-v/6.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/6.png)

In the next step, you can integrate the converted disk into a new Hyper-V machine.

Start the Hyper-V wizard for new virtual machines and specify the folder for the newly created VHD:

[![Appliance-New-VM](../../assets/images/de/installation/virtual-appliance/hyper-v/7.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/7.png)

Then select the generation for the new virtual machine:

[![Appliance-Generation](../../assets/images/de/installation/virtual-appliance/hyper-v/8.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/8.png)

Assign sufficient memory ( [system requirements](../system-requirements.md) ):

[![Appliance-RAM](../../assets/images/de/installation/virtual-appliance/hyper-v/9.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/9.png)

Assign the appropriate network:

[![Appliance-Network](../../assets/images/de/installation/virtual-appliance/hyper-v/10.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/10.png)

And connect the converted disk image in this step:

[![Appliance-Image](../../assets/images/de/installation/virtual-appliance/hyper-v/11.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/11.png)

Then you can complete the setup and start the virtual machine:

[![Appliance-Finish-2](../../assets/images/de/installation/virtual-appliance/hyper-v/12.png)](../../assets/images/de/installation/virtual-appliance/hyper-v/12.png)

The virtual machine should now start properly and you should be able to log in with the supplied credentials:

| **Login** | **Username** | **Password** |
| --- | --- | --- |
| Console Login | idoitadm | idoit |
| i-doit Login | admin | admin |
| Admin-Center Login | admin | idoit |
