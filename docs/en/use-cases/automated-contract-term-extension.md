# Automated contract term extension

!!! info "Was last tested for i-doit version 23"

**Use-Case:** 
The contract of a client has passed the last termination date and has to be extended.
To extend the contract we will use the command `extend-contracts`.

## Step 1: Make the contract `extend-contract` capable

In order to extend a contract with the `extend-contracts` command, it must meet a few requirements.
To achieve this we have to edit the existing contract first.

The required settings can be found in the object view of the desired contract,

**Contract → Contract information**

[![contractextension-info](../assets/images/en/use-cases/automated-contract-extension/1-avv-uc.png)](../assets/images/en/use-cases/automated-contract-extension/1-avv-uc.png)

Which we subsequently edit:

* **Runtime period** we set to *1 year*.
* **End of Contract by** we set to *Notice of termination*.
* **Cancellation date** remains *empty*.
* **Cancellation period** which we set to *1 month* and *on contract end*.

[![contract-extension-config](../assets/images/en/use-cases/automated-contract-extension/2-avv-uc.png)](../assets/images/en/use-cases/automated-contract-extension/2-avv-uc.png)

!!! info "The prerequisites to run the command are as follows:"

    * **Runtime period** must be filled in.
    * **Contract end by** must be set to termination
    * **Cancellation date** must be empty
    * **Cancellation period** must be in the past (the same day as today is not possible!)

## Step 2: Apply `extend-contracts`

To be able to apply the `extend-contracts` command, we need to go to the [Console](../automation-and-integration/cli/console/index.md).

The command should look like this:

    sudo -u www-data php console.php extend-contracs --user user --password password 

If the contract is configured correctly, the [Console](../automation-and-integration/cli/console/index.md) will show that the contract has been extended by 1 year. 

[![contract-extension-console](../assets/images/en/use-cases/automated-contract-extension/3-avv-uc.png)](../assets/images/en/use-cases/automated-contract-extension/3-avv-uc.png)

## Step 3: Automate 

Since we don't want to run the command by hand every time, we now create a **cronjob**.
First we create a new cronjob:

    sudo nano /etc/cron.d/idoit-extend-contracts.

In this cronjob we add the following code:

    ## idoit cronjob idoit-extend-contracts

    15 6 * * www-data php /var/www/html/i-doit/console.php extend-contracts --user user --password password

With this code, the cronjob will run every day at 6:15 *am* and will automatically extend the contracts if they meet the requirements.
The only important thing is, that the path to the [Console](../automation-and-integration/cli/console/index.md) is correct and that you use the **username** and **password** of the idoit instance.
