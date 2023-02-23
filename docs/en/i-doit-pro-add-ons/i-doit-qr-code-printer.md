The [i-doit QR code printer](/display/en/i-doit+QR+Code+Printer) allows you to print labels comfortably using your label printer. A configuration is provided for you to ensure that the formats match your requirements. If you scan the QR code with a smartphone or a tablet, for example, then you will be forwarded to the overview page of the labelled [object](/display/en/Glossary).

![](/download/attachments/41844784/image2021-11-16_8-14-39.png?version=1&modificationDate=1637046879740&api=v2)

**Contents**

*   1[Barcode](#idoitQRCodePrinter-Barcode)
*   2[QR-Code](#idoitQRCodePrinter-QR-Code)
*   3[Configuration QR code or barcode](#idoitQRCodePrinter-ConfigurationQRcodeorbarcode)
*   4[Configuration of the QR-Code content](#idoitQRCodePrinter-ConfigurationoftheQR-Codecontent)
*   5[Global definition](#idoitQRCodePrinter-Globaldefinition)
*   6[Primary access URL](#idoitQRCodePrinter-PrimaryaccessURL)
*   7[QR code linking](#idoitQRCodePrinter-QRcodelinking)
*   8[Text template](#idoitQRCodePrinter-Texttemplate)
*   9[Logo for print view](#idoitQRCodePrinter-Logoforprintview)
*   10[i-doit QR Code Printer](#idoitQRCodePrinter-i-doitQRCodePrinter)
*   11[Start and Configuration](#idoitQRCodePrinter-StartandConfiguration)
*   12[Configuration of the Print Parameters](#idoitQRCodePrinter-ConfigurationofthePrintParameters)
*   13[Releases](#idoitQRCodePrinter-Releases)

  

  

Barcode
-------

![](/download/thumbnails/41844784/image2016-10-26%2012%3A30%3A11.png?version=1&modificationDate=1637046598159&api=v2&effects=drop-shadow)

A barcode or bar code is a method of representing data in a visual, machine-readable form. Initially, barcodes represented data by varying the widths and spacings of parallel lines. These barcodes, now commonly referred to as linear or one-dimensional, can be scanned by special optical scanners, called barcode readers, of which there are several types

QR-Code
-------

![](/download/thumbnails/41844784/image2020-9-21_11-38-14.png?version=1&modificationDate=1637046598239&api=v2&effects=drop-shadow)

A QR code (an initialism for Quick Response code) is a type of matrix barcode (or two-dimensional barcode) invented in 1994 by the Japanese automotive company Denso Wave. A barcode is a machine-readable optical label that contains information about the item to which it is attached. In practice, QR codes often contain data for a locator, identifier, or tracker that points to a website or application. A QR code uses four standardized encoding modes (numeric, alphanumeric, byte/binary, and kanji) to store data efficiently; extensions may also be used.

Configuration QR code or barcode
--------------------------------

You can find the configuration within i-doit under `Administration → System Settings → Tenantsettings → QR-Code`

![](/download/attachments/41844784/image2021-11-16_8-21-58.png?version=1&modificationDate=1637047318508&api=v2&effects=drop-shadow)

Configuration of the QR-Code content
------------------------------------

Which information from i-doit should be stored in the QR code can be configured here `Administration → CMDB Settings → QR-Code`

![](/download/attachments/41844784/image2021-11-16_8-20-47.png?version=1&modificationDate=1637047247945&api=v2&effects=drop-shadow)

Global definition
-----------------

If global definition is selected, it is possible to fill the information stored in the QR code with the following placeholders:

![](/download/attachments/41844784/image2021-11-16_8-24-12.png?version=1&modificationDate=1637047452506&api=v2&effects=drop-shadow)

Primary access URL
------------------

If Primary access URL is selected, the URL stored in the object flows into the QR code as the only information.

QR code linking
---------------

Here you can select which function is triggered when you click on the respective code.  
You can choose between the [i-doit QR-Code Printer Tool](/display/en/i-doit+QR+Code+Printer) or a POP UP with the standard print function of the respective operating system.

Text template
-------------

Here it is possible to use free text, but also with the placeholders information from i-doit and format the label accordingly.

Logo for print view
-------------------

Here you can upload and link an image file, this will be used automatically when creating the label.

i-doit QR Code Printer
----------------------

With the i-doit QR-Code Printer you can easily print labels on your label printer.  
For this purpose, a configuration is available so that the formats correspond exactly to your specifications.  
If the QR code is scanned with a smartphone or tablet, for example, you will be redirected to the overview page of the labeled [object](/display/en/Glossary).

Start and Configuration
-----------------------

You can download the QR code printer in our [customer portal](/display/en/Customer+Portal). The i-doit QR code printer is a Windows application which can be run immediately. No installation is needed.

The first step upon starting the application is to set up a connection to your i-doit installation, so that the tool can read the information. The possibility to set the connection is provided in the `**i-doit API settings**` area at `**File →** **Options**`. The URL to your i-doit _i_nstallation, the API key as well as the credentials of an i-doit user with the corresponding permissions are needed for [access via the API](https://kb.i-doit.com/pages/viewpage.action?pageId=37355644).

The i-doit API key

You can find the API key of your installation in i-doit at `**Administration → Interfaces / external data → JSON-RPC API**`.

  

  

Configuration of the Print Parameters
-------------------------------------

  
At `**File → Options**`you can find the possibility to adjust any settings needed for your printer.  
Here you can set the margins as well as the size of the label.

You can also define the positioning of the QR code via spacing in pixels and the size of the QR code.  
If you want to use a different font, font size and font direction, you can adjust these values according to your wishes at `**QR-code positioning**`.  
You can also specify the logo for your labels in the options.  
Choose the desired logo using a common image format via `**Path**` and position it using the corresponding parameters.  
It makes sense to define the Dymo label writer as default printer and to change the default paper orientation for printing to horizontal.

Printing of Labels

Once the connection was configured successfully and the settings meet your requirements, you can start printing your labels. To do so, enter the object ID of the object for which you want to print a label. Now the contents of the bar code information will be carried over according to the contents of i-doit. Of course, you can edit this information at any time.

Once the information has been loaded, you can either print, save or export the QR code using the icons or via the `**File**` item in the context menu. The export takes place using the `.bmp` image format.

  

![](/download/attachments/41844784/image2020-9-21_11-25-27.png?version=1&modificationDate=1637047761894&api=v2&effects=drop-shadow)

Releases
--------

| Version | Datum | Changelog |
| --- | --- | --- |
| 1.5 | 2023-01-24 | \[Bug\]  Fix the configuration of the Text margin |