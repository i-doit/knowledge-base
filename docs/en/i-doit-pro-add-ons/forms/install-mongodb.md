The system requirements of MongoDB can be found [here](https://docs.mongodb.com/manual/administration/production-notes/).

In addition, MongoDB provides a [checklist for use in operation](https://docs.mongodb.com/manual/administration/production-checklist-operations/#operations-checklist).

  

CPU AVX support

MongoDB 5.0+ requires a CPU with AVX support  
  see [https://jira.mongodb.org/browse/SERVER-54407](https://jira.mongodb.org/browse/SERVER-54407)  
  see also [https://www.mongodb.com/community/forums/t/mongodb-5-0-cpu-intel-g4650-compatibility/116610/2](https://www.mongodb.com/community/forums/t/mongodb-5-0-cpu-intel-g4650-compatibility/116610/2)  
  see also [https://github.com/docker-library/mongo/issues/485#issuecomment-891991814](https://github.com/docker-library/mongo/issues/485#issuecomment-891991814)

Recommendation

We describe the use of **Debian GNU/Linux version 11 "bullseye"** as the operating system under which i-doit should be run.  
MongoDB currently does not officially support Debian 11. However, we were able to use MongoDB with the Forms add-on in several test installations.

On the terminal, we run the following commands:

We install gnupg:

[?](#)

`sudo` `apt-get` `install` `gnupg`

  

We import the public key for the `mongodb-org` repository:

[?](#)

`wget -qO - https:``//www``.mongodb.org``/static/pgp/server-5``.0.asc |` `sudo` `apt-key add -`

  

Now we create a sources file for MongoDB:

This repo is to be used for Debian only!

[?](#)

`echo` `"deb [http://repo.mongodb.org/apt/debian](http://repo.mongodb.org/apt/debian) buster/mongodb-org/5.0 main"` `|` `sudo` `tee` `/etc/apt/sources``.list.d``/mongodb-org-5``.0.list`

  

Now we update the local package database:

[?](#)

`sudo` `apt-get update`

  

Now we can install MongoDB:

[?](#)

`sudo` `apt-get` `install` `-y mongodb-org`

  

Next, we reload the services:

[?](#)

`sudo` `systemctl daemon-reload`

  

So that MongoDB is started at the next system start:

[?](#)

`sudo` `systemctl` `enable` `mongod`

  

Now we start MongoDB:

[?](#)

`sudo` `systemctl start mongod`

  

  

[approve Weiter zur Installation NodeJS](/display/en/Install+NodeJS)