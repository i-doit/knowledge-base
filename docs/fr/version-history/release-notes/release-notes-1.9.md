# Release Notes 1.9

> System requirements
> -------------------
> 
> i-doit 1.9 is PHP Version 7.0 compatible
> 
> You can still use PHP 5.4 and following.
> 
> Before updating
> ---------------
> 
> Before updating you should update all installed Add-ons. All modules are being released with newer versions parallel to the i-doit release.
> 
> If you switch to PHP 7.0 the Add-on update is mandatory (also before updating i-doit).
> 
> Attention! Users of the RFC add-on have to be patient. The i-doit 1.9 update does not support the current RFC add-on version. You will be informed as soon as the new RFC add-on version is available.
> 
> Migrations
> ----------
> 
> *   Each object list gets a standard filter
> *   In the category hostaddress the field “DNS Domain gets renamed to “Search Domain”. Each domain listed gets a Hostname / Domain FQDN pair.
> *   Fonts get copied from the vendor directory to upload/fonts
> *   All saved interface passwords (LDAP, OCS-Inventory, JDisc, etc.) within the database get rehashed. mcrypt, which is deprecated with PHP 7 will be replaced with phpseclib. phpseclib checks if OpenSSL is available. If not, it uses native encryption. If you change your system after an update to i-doit 1.9, you have to make sure that the chosen encryption method is available.