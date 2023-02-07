checkmk’s host and service checks are often based on its tagging system. You can share tag groups and the tags themselves with i-doit by running:

[?](#)

`idoitcmk` `sync``-tags`

Tags will be stored in i-doit under `Extras > Check_MK 2 > Tags (static)` and can be assigned to any objects with attribute `Host tags` in category `Check_MK Tags`.

**Recommendation:** Run this command every time you add new host tags/groups in checkmk.

If you create your own tags, it is important to fill in all fields so that the tags can be created in CheckMK. A mapping of the fields can be seen on the screenshot.

![](/download/attachments/75989138/Tags-static.png?version=1&modificationDate=1658832338037&api=v2&effects=drop-shadow)