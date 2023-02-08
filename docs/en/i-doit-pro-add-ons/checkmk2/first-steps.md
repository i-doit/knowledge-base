You are new to this topic and want to integrate both checkmk and i-doit? Follow these simple steps:

1.  [Meet all requirements](/pages/viewpage.action?pageId=75989128)
2.  [Download and install](/pages/viewpage.action?pageId=75989120) the add-on package with the built-in command-line tool `idoitcmk`
3.  Make sure checkmk and i-doit can be accessed by their APIs
4.  Create your own configuration:
    
    `idoitcmk init` ([read more](/pages/viewpage.action?pageId=75989114))
    
5.  [Try some basic commands](/pages/viewpage.action?pageId=75989140)
6.  Sync some basic information between checkmk and i-doit:
    
    `idoitcmk sync-agents` ([read more](/pages/viewpage.action?pageId=75989130))
    
    `idoitcmk sync-contact-groups` ([read more](/pages/viewpage.action?pageId=75989132))
    
    `idoitcmk sync-folders` ([read more](/pages/viewpage.action?pageId=75989134))
    
    `idoitcmk sync-sites` ([read more](/pages/viewpage.action?pageId=75989136))
    
    `idoitcmk sync-tags` ([read more](/pages/viewpage.action?pageId=75989138))
    
7.  Either configure checkmk based on i-doit:
    
    `idoitcmk push` ([read more](/pages/viewpage.action?pageId=75989126))
    
8.  Or fetch useful information about your infrastructure from checkmk to i-doit:
    
    `idoitcmk pull` ([read more](/pages/viewpage.action?pageId=75989124))
    
9.  Automate all the things!

Any questions? Read our [FAQ](/pages/viewpage.action?pageId=75989118)