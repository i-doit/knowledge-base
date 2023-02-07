[Zammad](https://zammad.com/) is a Web application suited for your service desk. It will display information about i-doit objects and connect tickets with objects. For more information about its configuration and usage, please contact the vendor behind Zammad.

After a regular installation i-doit is already able to [access Zammad tickets](/display/en/Service+Desk).

https://zammad.com/

FAQ:
----

One important thing that is often forgotten is that elasticsearch must be installed and working on the Zammad server, without this service i-doit cannot retrieve the tickets.

To test the connection from the i-doit server to the Zammad server a curl can be used:

[?](#)

`curl -u user@domain.de -X POST http:``//myzammadserver/api/v1/tickets/search` `-d ``'query=preferences.idoit.object_ids:myobjectid'` `-d ``'limit=10'`

Please extend the curl so that you can authenticate.