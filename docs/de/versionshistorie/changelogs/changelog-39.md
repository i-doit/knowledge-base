---
search:
  exclude: true
---

# Changelog 39
<!-- cSpell:disable -->
[Task][Code (Internal)]                  Refactor usages of abandoned "mysql-php/errors" package<br>
[Task][Categories]                       Enable URL encoded variables in category Access<br>
[Improvement][CMDB]                      Add a generic Cloud category (provider, account, region, state)<br>
[Improvement][CMDB]                      Model Kubernetes cluster/service/namespace (category + object types)<br>
[Improvement][i-doit cloud]              Add a Cloud Storage object type<br>
[Improvement][Security]                  Add server-side rate limiting and brute-force protection to the login<br>
[Improvement][Console]                   Add Logbook restore for console command<br>
[Improvement][Notifications]             Make HTML e-mails in notifications available<br>
[Improvement][Object type configuration] Set default sorting of object types to "alphabetically"<br>
[Bug][CMDB]                              Improve bad performance when duplicating object within large location tree<br>
[Bug][CMDB]                              Enable connection attribute for cable category to be selectable in list view<br>
[Bug][CMDB]                              Prevent creation of orphaned relation when duplicating object<br>
[Bug][CMDB]                              Prevent HTTP 500 at the ticket category of a object when no ticket system is configured<br>
[Bug][CMDB]                              Connector attributes are lost when a port is copied via template, duplicate, mass change, import or API<br>
[Bug][CMDB]                              Check for net-collisions for IPv6 nets always shows a collision when creating IPv6 net.<br>
[Bug][CMDB]                              Prevent missing attribute data when duplicating objects<br>
[Bug][Code (Internal)]                   Load available Object Types when creating a Form<br>
[Bug][Code (Internal)]                   Selected used databases at software assignment is hidden even with the according rights<br>
[Bug][Code (Internal)]                   Prevent i-doit error at reports and object browser when forcing storage engine InnoDB<br>
[Bug][Code (Internal)]                   Make creating Person objects possible again<br>
[Bug][Code (Internal)]                   Move system.verify-ip-between-requests logic<br>
[Bug][Code (Internal)]                   Fix wrongly formatted date fields in category contract (information) when creating entry via api<br>
[Bug][Code (Internal)]                   Fix the error that occurs when a report view is executed after being sorted by Description.<br>
[Bug][Code (Internal)]                   Filter inherited Operating system list sub-selects by application type so object lists stop mixing in software-assignment rows<br>
[Bug][Code (Internal)]                   Replace old icons for Report Manager and Services when upgrading from i-doit open to i-doit pro<br>
[Bug][JDisc]                             IP addresses no longer dropped when importing the IP category<br>
[Bug][Security]                          Stop returning raw exception messages from the GraphML export controller so internal server paths are not disclosed<br>
[Bug][Security]                          Reject javascript: and other dangerous URI schemes in file-assignment link fields<br>
[Bug][Security]                          Sanitize the CMDB export save path to prevent path traversal and arbitrary file write<br>
[Bug][Security]                          Validate uploaded file types server-side in the CMDB file upload to block dangerous types<br>
[Bug][Security]                          Enforce authorization server-side for all import and module entry points, not only in the UI navigation<br>
[Bug][Security]                          Enable TLS certificate validation on outbound cURL requests in proxy.php and the updater<br>
[Bug][Security]                          Sanitize uploaded SVG content and serve WYSIWYG images as attachments to prevent stored XSS<br>
[Bug][CSV Import]                        Prevent error when importing csv with default template<br>
[Bug][Notifications]                     Prevent a fatal TypeError when an organization is the assigned contact of a notification<br>
[Bug][Lists]                             License in Use is not displayed for CPU core based licenses at license overview<br>
[Bug][Lists]                             Fix "Incorrect DATE value" error in object lists containing the Access column "Primary access URL" on MySQL<br>
[Bug][Search]                            Restore preview function for object actions in repair and clean up<br>
[Bug][Categories]                        Show slot selection when assigning an object to a segmented rack insert<br>
[Bug][Categories]                        Guard the object overview page against category process() methods that return a non-array<br>
[Bug][Categories]                        Calculate a IPv6 Address range<br>
[Bug][Categories]                        Fix Net zone is no more selected when editing a host address again<br>
[Bug][Categories]                        Fix inverted address range for IPv4 /31 and /32 networks<br>
[Bug][Custom categories]                 Restrict custom-fields browser_object value resolver to the current object<br>
[Bug][API]                               Prevent s_net::save from clearing DNS server/domain attachments when the field is not provided<br>
[Bug][CMDB-Explorer]                     Solve error of GraphML Export<br>
[Bug][Documents]                         Apply the assigned-object status filter when running a saved report<br>
[Bug][LDAP]                              Do not archive persons when the response times from the AD are long<br>
[Bug][Import]                            Migrate the remaining callers of the removed Version category create() to create_data()<br>
[Bug][Import]                            Set the password category constant before the parent constructor so the category id resolves again<br>
[Bug][Mass editing]                      Fix mass change skipping object-reference categories by validating the reference title as an integer<br>
[Bug][VIVA2 & ISMS 2026]                 Fix language manager substituting only the first placeholder in multi-variable language constants<br>
[Bug][Performance]                       Prevent eager quick_info fan-out caused by quickinfo anchor-id collisions on list/report views<br>
[Bug][Update]                            Fix upgrade to v37/v38 aborting with HTTP 500 on tenants without a description<br>
[Bug][Category folders]                  Load category folders<br>
