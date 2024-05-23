# i-diary: Configuration

Change and save settings via GUI
--------------------------------

The user has the possibility to create and modify the configuration file via the application.

[![create and modify](../../assets/images/en/i-doit-pro-add-ons/i-diary/configuration/1-idconf.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/configuration/1-idconf.png)

These are the following cases:

*   If the configuration file is empty or does not exist yet or if it the configuration file empty, the GUI setting is opened automatically when the application is started.

[![GUI setting](../../assets/images/en/i-doit-pro-add-ons/i-diary/configuration/1-idconf.png)](../../assets/images/en/i-doit-pro-add-ons/i-diary/configuration/1-idconf.png)

*   If the user changes something in the GUI setting, the change is immediately checked and saved if it is valid.
*   When the user does not specify ‘[http://](http://)’, ‘[http://](http://)’ is used for the check and saved.
*   When the user does specify ‘rc/jsonrpc.php’ as a suffix in the URL field, it will be ignored for the check and saved without it.
*   The user can test the connection manually by clicking the button ‘Test the connection’.