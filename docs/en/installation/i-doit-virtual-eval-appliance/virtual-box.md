---
title: "Setting Up the i-doit Virtual Appliance Using VirtualBox (Oracle)"
description: The package we provide contains a virtual machine in OVF format.
icon:
status:
lang: en
---
# Setting Up the i-doit Virtual Appliance Using VirtualBox (Oracle)

[![Appliance Download](../../assets/images/de/installation/virtual-appliance/virtual-box/download.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/download.png)

## Basics

The package we provide contains a virtual machine in **OVF format**.

[![Files extracted](../../assets/images/de/installation/virtual-appliance/virtual-box/extracted.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/extracted.png)

!!! tip ""
    OVF (Open Virtualization Format) is an open standard for exchanging virtual machines (VMs) and provides a platform-independent, efficient, secure, and open method for packaging and deploying virtual machines. It was developed by the Distributed Management Task Force (DMTF).

To use the package, you need a virtual environment into which you can import it. Most companies operate virtual environments using, e.g., VMware vSphere or Microsoft Hyper-V.

If you do not yet have a virtual environment in use at your company, you can also use one of the freely available solutions for evaluating our software.

## Step 1 - Download and Install VirtualBox

In this article, we use the free product VirtualBox from Oracle, which you can download here: <https://www.virtualbox.org/wiki/Downloads> for download.

After downloading, you can start the VirtualBox installation:

[![Oracle installer](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.png)

You can leave the installation options at the default settings and confirm the prompts with Next/Yes until the installation is complete:

[![installation features](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.1.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.1.png)

[![Installieren](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.2.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.2.png)

[![Status](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.3.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.3.png)

[![Fertig stellen](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.4.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-1.4.png)

## Step 2 - Import Virtual Machine

If you have already downloaded the Virtual Appliance, extract the ZIP package on your computer.

Now start VirtualBox and click the Import button:

[![VirtualBox dashboard](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.1.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.1.png)

And select the **appliance-eval** file from the extracted ZIP archive:

[![Wähle file](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.2.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.2.png)

If you want, you can now change the folder where the virtual machine will be stored:

[![Starte Import](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.3.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.3.png)

[![Appliance settings](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.4.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.4.png)

The i-doit Eval Appliance is now ready for use and can be started via the "Start" button:

[![Appliance Start](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.5.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.5.png)

After starting, you can switch to the output screen of the virtual machine via the "Show" button:

[![Appliance Zeigen](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.6.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.6.png)

The information displayed there also shows you the IP address and the user with which you can log in to your i-doit installation for the first time using your browser:

[![Appliance Shell](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.7.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.7.png)

The default user is Admin with the password Admin:

[![credentials](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.8.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.8.png)

Your browser should display the start screen with the i-doit login form at the specified IP address:

[![i-doit login](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.9.png)](../../assets/images/de/installation/virtual-appliance/virtual-box/setup-2.9.png)
