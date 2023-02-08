  

  

First, we navigate to the Form Backend subfolder within the i-doit installation:

[?](#)

`cd` `/var/www/html/src/classes/modules/forms/backend/`

  

We create a copy of the configuration template:

[?](#)

`sudo` `-u www-data` `cp` `.``env``.dist .``env`

  

Using a text editor like, `vi` or `nano`, we now edit the .env:

[?](#)

`sudo` `nano .``env`

The 'FORMS\_SECRET' must not be empty. The key can consist of alphanumeric and special characters.

We now set a FORMS\_SECRET and save the file.

  

| Key | Value | Description |
| --- | --- | --- |
| FORMS\_SECRET | 'g87z$t2r346aSdas%&f52458g724g875!' | Key for encrypting the data in the database.  <br>Must not be empty!  <br>Example: `FORMS_SECRET='h982t)24/(&%houaq3ho4'` |
| FORMS\_PORT | '3000' | Port for connections  <br>Example: `FORMS_PORT='3000'` |
| FORMS\_MONGO\_DB\_SERVER | 'mongodb://127.0.0.1:27017/forms' | URL and port to connect to the MongoDB server  <br>Example: `FORMS_MONGO_DB_SERVER='mongodb://127.0.0.1:27017/forms'` |

Next, we create an instance.

To use the `run.sh`, we must first set the rights to run:

[?](#)

`sudo` `chmod` `+x run.sh`

  

Now we can run the `run.sh`:

[?](#)

`sudo` `.``/run``.sh instance:create {Benutzername} {Apikey}`

Each Forms instance has its own API and gets its own `{username}` and `{API Key}`. These can be defined freely and have nothing in common with the i-doit pro API.

The data must be noted during the installation, because they must be entered later in the configuration of the Forms Add-on in the i-doit pro interface.

Example: sudo ./run.sh instance:create forms1 abDzfk74dsfi55FOS32

We have to create a Service for the Forms backend, so it runs in the Background

In order to use `forms-service.sh`, we must first set the rights to run it:

[?](#)

`sudo` `chmod` `+x forms-service.sh`

  

We now have the `systemd` service created for the Forms backend.  
The Service will be activated and started: 

[?](#)

`sudo` `.``/forms-service``.sh`

[approve Continue to configuration in i-doit](/display/en/Configuration+in+i-doit)