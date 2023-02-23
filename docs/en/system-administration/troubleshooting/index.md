# Troubleshooting

Untransparent behaviour in i-doit. An error! How to deal with it? Please read on! It could be useful.

Do Not Panic!
-------------

First of all, it is very important to keep calm. Errors happen. To us. To you. To everyone. The world will not come to an end. Very, very rarely do IT documentations just disappear.

After the initial shock it comes down to evaluate the situation and then act correctly. "Correctly" would mean in the case of an error, to inform us as fast as possible but also as detailed as possible. Begin by gathering all information before contacting us. This way we can quickly help without the need for many further inquiries.

Analyze Errors
--------------

**What exactly happens when the error occurs? What steps are performed to provoke the error? Does an error message exist? Is the error reproducible?** \- These are important questions which should be answered before going into detail.

Here is a small checklist what to research beyond of that:

1.  **Is the error already known and maybe even fixed?** We maintain a [list for many errors](../hotfixes/index.md) here in the knowledge base. Our [FAQ](../../faq.md) is also a source for possible solutions. A courageous search via the search engine of your choice could also provide further clues.
2.  **Has i-doit been correctly installed and configured?** An error can occur when our [system requirements](../../installation/system-requirements.md) and [system settings](../../installation/manual-installation/system-settings.md) were not taken into account. The information stated there can also change. A look at the active settings at the time of the error can bring clarity. You should also check additionally whether the file permissions in the installation path of i-doit were set correctly.
3.  **Is i-doit maintained on a regular basis?** An error could already have been solved and a fix may have been released. Please make sure to use the most recent version of i-doit.
4.  **Are there overlapping issues?** There could be network problems, for example. Connected third party systems could be configured differently or even malfunction.
5.  **Are log files of i-doit made available?** [Imports](../../consolidate-data/index.md), [notifications](../../evaluation/notifications.md) or [API requests](../../i-doit-pro-add-ons/api/index.md) can be logged, for example. There are also different log levels in some cases, for example, when importing data from JDisc. The higher the level (debug is the highest) the more details in the error analysis. These logs are located in the installation path of i-doit in the log/ folder. Some of them can be activated at **Administration → System settings → Logging**.
6.  **Are exceptions being thrown?** Many errors can be intercepted in PHP. These errors are gathered in the installation path of i-doit in log/exception.log. This option is activated at **Administration → System settings → Tenant settings → Logging → Exception Log**.
7.  **Are errors of PHP passed on to the Apache web server?** If you follow our system settings, you also log many errors of the Apache web server. This log can be found in Debian-based operating systems at /var/log/apache2/error.log.
8.  **Does the web server report an error to the web browser?** Given the case that the error does not occur in the web GUI: Sometimes the web server is sending an error message to the browser without it being visible for the user. Using the developer consoles of the browsers will make the communication between these two visible, including possible issues.
9.  **Does the operating system report an error?** Maybe the issue is not associated with i-doit but with used services, like Apache web server, MySQL/MariaDB or the operating system itself. The services under GNU/Linux are usually administrated via an Init-service like systemd. This writes reports in the Syslog, which is most commonly found at /var/log/syslog.

!!! success "Debugging for beginners"

    To observe an error not in retrospect but in realtime it is worthwhile to examine the log files mentioned above while examining the system load at the same time. Log files can be opened in GNU/Linux with tail -f <logfile>. Changes are immediately visible. To observe the system load command line commands like top, htop, atop and free are helpful. Note that processes of Apache and MySQL/MariaDB use exceptional amounts of CPU time and/or memory.

Write a Bug Report
------------------

If we know a bug, we can fix it. If you signed a support contract with us, we already have the needed contact data at our disposal. Bugs can also be reported without support contract via the [customer portal](../customer-portal.md).

**Important:** Please always state which **versions** of i-doit, affected add-ons, Apache web server, PHP and MySQL/MariaDB are in use. The **i-doit environment info file**, which is downloadable in the [admin center](../admin-center.md), will help doing so. **Configuration files**, **log files**, **screenshots** and the **error message in plain text** also support the analysis. **Answers** to the questions stated above are also a big help for us and in return for you.

Formatting your bug report beautifully or even embedding it in high quality PDFs is of less importance for us. We are however much happier about a friendly and objective conversational tone. This however goes without saying.

We Will Get in Touch With You
-----------------------------

Within a short period of time we will get back to customers with a support contract (often already proposing a solution). We try to reproduce the issue on our test systems using your information. If this bug seen as one, it will be solved as soon as possible. Before providing a fix, it will first go through our testing processes. Quality needs time. After this, we will release the fix in the course of our release cycles. Whatever the reasons: Sometimes it takes longer to resolve an issue. In these cases we ask for your understanding. We keep working on it.

Is Everything Fine?
-------------------

We are happy about your feedback once you tried a proposed solution (fix, workaround, etc.). Did it work? Fantastic. Does the problem persist? Alright, we will try different ways then. A follow-up issue did arise? Do not panic, we will go through all the steps again until all issues are recognized and hopefully resolved. And do not forget: You will never walk alone.