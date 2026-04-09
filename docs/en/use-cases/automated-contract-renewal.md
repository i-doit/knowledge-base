---
title: Automated Contract Term Renewal
description: A tenant's contract has passed the last cancellation date and needs to be renewed.
icon:
status:
lang: en
---
# Automated Contract Term Renewal

!!! info "Last tested with i-doit version 23"

**Use case:**
A tenant's contract has passed the last cancellation date and needs to be renewed.<br>
To renew the contract, we use the `extend-contracts` command.

## Step 1: Making the Contract Compatible with `extend-contracts`

For a contract to be renewed with the `extend-contracts` command, it must meet a few prerequisites.<br>
To do this, we first need to edit the existing contract.<br>

The required settings can be found in the object view of the desired contract,

**Contract > Contract Information**

[![Contract renewal info](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/1-avv-uc.png)](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/1-avv-uc.png)

which we then edit:

* **Contract term period** is set to *1 Year*
* **Contract end by** is set to *Cancellation*
* **Cancellation date** remains empty
* **Cancellation period** is set to *1 Month* and *at contract end*

[![Contract renewal config](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/2-avv-uc.png)](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/2-avv-uc.png)

!!! info "The prerequisites to execute the command are as follows:"

    * **Contract term period** must be filled in
    * **Contract end by** must be set to Cancellation
    * **Cancellation date** must be empty
    * **Cancellation period** must be in the past (the same day as today does not count!)

## Step 2: Applying `extend-contracts`

To apply the `extend-contracts` command, we need to use the [console](../automation-and-integration/cli/index.md).

The command is as follows:

```shell
    sudo -u www-data php console.php extend-contracts --user user --password password
```

If the contract is configured correctly, the [console](../automation-and-integration/cli/index.md) will show that the contract has been extended by 1 year.

[![Contract renewal console](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/3-avv-uc.png)](../assets/images/de/anwendungsfaelle/automatisierte-vertragsverlaengerung/3-avv-uc.png)

## Step 3: Automating

Since we do not want to run the command manually every day, we now create a **cronjob**.
First, we create a new cronjob:

```shell
    sudo nano /etc/cron.d/idoit-extend-contracts
```

We add the following code to this cronjob:

```shell
    ## idoit cronjob idoit-extend-contracts

    15 6 * * * www-data php /var/www/html/console.php extend-contracts --user user --password password
```

With this code, the cronjob is executed every day at 6:15 AM and automatically renews contracts if they meet the prerequisites.<br>
The path to the [console](../automation-and-integration/cli/index.md) must be specified in full, along with the **username** and **password** of the i-doit instance user.
