# Troubleshooting

Unpredictable behaviour in i-doit. An error! How to deal with it? Please read on! It could be useful.

## Do Not Panic

First of all, it is very important to keep calm. Errors happen. To us. To you. To everyone. The world will not come to an end. Very, very rarely do IT documentations just disappear.

After the initial shock it comes down to evaluate the situation and then act correctly. "Correctly" would mean in the case of an error, to inform us as fast as possible but also as detailed as possible. Begin by gathering all information before contacting us. This way we can quickly help without the need for many further inquiries.

## Analyze Errors

**What exactly happens when the error occurs? What steps are performed to provoke the error? Does an error message exist? Is the error reproducible?** - These are important questions which should be answered before going into detail.

Here is a small checklist what to research beyond of that:

1. ==Is the error already known and maybe even fixed?==<br> We maintain a [list for many errors](../hotfixes/index.md) here in the knowledge base. Our [FAQ](https://help.i-doit.com/hc/en-us/categories/115000434905) is also a source for possible solutions. A courageous search via the search engine of your choice could also provide further clues.
2. ==Has i-doit been correctly installed and configured?==<br> An error can occur when our [system requirements](../../installation/system-requirements.md) and [system settings](../../installation/manual-installation/system-settings.md) were not taken into account. The information stated there can also change. A look at the active settings at the time of the error can bring clarity. You should also check additionally whether the ==file permissions== in the installation path of i-doit were set correctly.
3. ==Is i-doit maintained on a regular basis?==<br> An error could already have been solved and a fix may have been released. Please make sure to use the ==most recent version== of i-doit.
4. ==Are there overlapping issues?==<br> There could be network problems, for example. Connected third party systems could be configured differently or even malfunction.
5. ==Are log files of i-doit made available?==<br> [Imports](../../consolidate-data/index.md), [notifications](../../evaluation/notifications.md) or [API requests](../../i-doit-add-ons/api/index.md) can be logged, for example. There are also different log levels in some cases, for example, when importing data from JDisc. The higher the level (debug is the highest) the more details in the error analysis. These logs are located in the installation path of i-doit in the `log/` folder. Some of them can be activated at [Administration → Tenant settings → Settings for Tenant → Logging](../administration/tenant-management/settings-for-tenant.md#logging).
6. ==Are exceptions being thrown?==<br> Many errors can be intercepted in PHP. These errors are gathered in the installation path of i-doit in `log/exception.log`. This option is activated at [Administration → Tenant settings → Settings for Tenant → Logging](../administration/tenant-management/settings-for-tenant.md#logging).
7. ==Are errors of PHP passed on to the Apache web server?==<br> If you follow our [system settings](../../installation/manual-installation/system-settings.md), you also log many errors of the Apache web server. This log can be found in Debian-based operating systems at `/var/log/apache2/error.log`.
8. ==Does the web server report an error to the web browser?==<br> Given the case that the error does not occur in the web GUI: Sometimes the web server is sending an error message to the browser without it being visible for the user. Using the developer consoles of the browsers will make the communication between these two visible, including possible issues.
9. ==Does the operating system report an error?==<br> Maybe the issue is not associated with i-doit but with used services, like Apache web server, MySQL/MariaDB or the operating system itself. The services under GNU/Linux are usually administrated via an Init-service like systemd. This writes reports in the Syslog, which is most commonly found at `/var/log/syslog`.

!!! success "Debugging for beginners"

    To observe an error not in retrospect but in realtime it is worthwhile to examine the log files mentioned above while examining the system load at the same time. Log files can be opened in GNU/Linux with tail -f <logfile>. Changes are immediately visible. To observe the system load command line commands like top, htop, atop and free are helpful. Note that processes of Apache and MySQL/MariaDB use exceptional amounts of CPU time and/or memory.

## Write a Bug Report

==If we know a bug, we can fix it==. If you signed a support contract with us, we already have the needed contact data at our disposal. Bugs can also be reported without support contract via the [help center](https://help.i-doit.com).

!!! tip ""

    Please always state which ==versions== of i-doit, affected add-ons, Apache web server, PHP and MySQL/MariaDB are in use. The ==i-doit environment info file== which is downloadable in the [Admin-Center](../admin-center.md), will help doing so. ==Configuration files==, ==log files==, ==screenshots== and the ==error message== in plain text also support the analysis. ==Answers== to the questions stated above are also a big help for us and in return for you.

Formatting your bug report beautifully or even embedding it in high quality PDFs is of less importance for us. We are however much happier about a friendly and objective conversational tone. This however goes without saying.

## We Will Get in Touch With You

Within a short period of time we will get back to customers with a support contract (often already proposing a solution). We try to reproduce the issue on our test systems using your information. If this bug seen as one, it will be solved as soon as possible. Before providing a fix, it will first go through our testing processes. Quality needs time. After this, we will release the fix in the course of our release cycles. Whatever the reasons: Sometimes it takes longer to resolve an issue. In these cases we ask for your understanding. We keep working on it.

## Is Everything Fine?

We are happy about your feedback once you tried a proposed solution (fix, workaround, etc.). Did it work? Fantastic. Does the problem persist? Alright, we will try different ways then. A follow-up issue did arise? Do not panic, we will go through all the steps again until all issues are recognized and hopefully resolved. And do not forget: You will never walk alone.

## Opening and Using the Browser's Developer Console

For a detailed error analysis in the web browser or for support requests from the i-doit team, it is often necessary to open the browser's developer console. It displays important information such as JavaScript errors, failed resource loading attempts, or details about network requests.

This guide describes how to open the developer console in the most common web browsers and how to extract the information relevant for support.

### Step 1: Open the Developer Console

Choose the guide for your browser.

#### Google Chrome

-   **Via Keyboard Shortcut (recommended)**: `F12` or `Ctrl` + `Shift` + `I` (macOS: `Cmd` + `Option` + `I`).
-   **Via the Browser Menu**: Three-dot menu (`⋮`) → **More Tools** → **Developer Tools**.

#### Mozilla Firefox

-   **Via Keyboard Shortcut (recommended)**: `F12` or `Ctrl` + `Shift` + `I` (macOS: `Cmd` + `Option` + `I`).
-   **Via the Browser Menu**: "Hamburger" menu (`≡`) → **More Tools** → **Web Developer Tools**.

#### Microsoft Edge

-   **Via Keyboard Shortcut (recommended)**: `F12` or `Ctrl` + `Shift` + `I` (macOS: `Cmd` + `Option` + `I`).
-   **Via the Browser Menu**: Three-dot menu (`...`) → **More Tools** → **Developer Tools**.

#### Apple Safari

1.  **Enable the "Develop" Menu (one-time setup)**: In the menu bar, go to **Safari** → **Settings...** → **Advanced** → Check the box at the bottom for **Show Develop menu in menu bar**.
2.  **Open the Console**: `Cmd` + `Option` + `I` or via the menu **Develop** → **Show Web Inspector**.

### Step 2: Gather Relevant Information for Support

After opening the developer tools, you will see several tabs. Depending on the type of issue, different information is important.

#### The "Console" Tab

**When is this needed?**
Whenever an action in the i-doit user interface does not work as expected. For example:
-   Clicking a button (e.g., "Save") has no effect.
-   A dialog window does not open or closes unexpectedly.
-   Lists or content are not loading correctly.

**How to provide the right information:**

1.  Open the developer tools and switch to the **Console** tab.
2.  Clear all previous entries. Click the "clear" icon (`🚫`) or use the shortcut `Ctrl` + `L`. This ensures that only relevant errors are recorded.
3.  **Now, perform the action in i-doit that causes the error.**
4.  Look for new entries in the console. **Errors are almost always marked in red** and contain keywords like `Error`, `Exception`, or `failed`.
5.  **Take a screenshot.** Make sure the **entire error message** is visible. Sometimes you may need to click on small triangles (`▶`) to expand the full error message.
6.  **Even better than a screenshot:** Right-click on the error message and select "Copy message" or a similar option. Paste this text into your support request.

#### The "Network" Tab

**When is this needed?**
When actions take a very long time, loading bars don't disappear, or data seems to be lost after clicking "Save". This tab shows the communication between your browser and the i-doit server.

**How to provide the right information:**

1.  Open the developer tools and switch to the **Network** tab.
2.  Check the box for the **Persist logs** option. This prevents the recording from being lost if the page reloads.
3.  Clear the previous recording by clicking the "clear" icon (`🚫`).
4.  **Now, perform the slow or failing action in i-doit.**
5.  Observe the list of requests. Look for rows that are highlighted in red or have a **Status** code like `404` (Not Found), `403` (Forbidden), or `500` (Internal Server Error).
    - *Tip:* You can often filter the list for `Fetch/XHR` requests, as these are responsible for dynamically loading data in i-doit.
6.  **Click on the failing request** (the red row). A new pane with details about this request will open to the right or below the list.
7.  In this detail pane, switch to the **Response** tab. This often contains the exact error message from the i-doit server.
8.  **Take a screenshot of this view**, showing both the list of requests (with the red row highlighted) and the details including the server's **Response**.

#### The "Elements" Tab

**When is this needed?**
This tab is needed less frequently. It is useful for issues related to the display of content (e.g., a field is misplaced or not visible). Typically, the i-doit support team will specifically ask you to look here. It allows you to inspect the live HTML and CSS structure of the page.

!!! tip "Summary for i-doit Support"
A good error description is the key to a quick solution. By following the steps above, you provide our support team with the exact technical details needed for analysis.

- For **functional errors**: Send us the output from the **Console**.
- For **loading issues or "silent" errors**: Send us a screenshot of the **Network** tab, including the **Response** of the failing request.
