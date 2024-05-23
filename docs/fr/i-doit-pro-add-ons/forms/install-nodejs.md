# Install NodeJS

!!! attention "The installation was last tested with NodeJS v17.4"

Dependencies can be found [here](https://nodejs.org/en/docs/meta/topics/dependencies/).<br>
A manual download as well as installation is possible from [here](https://nodejs.org/en/download/).

For the next step we need cURL:

    sudo apt-get install curl

NodeJS 16.x is installed automatically via package manager for this we use [nodesource](https://github.com/nodesource/distributions/blob/master/README.md):

    curl -fsSL https://deb.nodesource.com/setup_16.x | sudo -E bash -

Now we can install NodeJS:

    sudo apt-get install -y nodejs

[Continue to the configuration of the Forms backend](./configure-forms-backend.md){ .md-button .md-button--primary }
