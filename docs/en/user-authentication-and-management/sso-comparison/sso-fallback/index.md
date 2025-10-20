# SSO fallback to builtin

!!! warning "Please create a complete backup before making any changes to an interface/import. If the result is unsatisfactory, it can then be restored."

## What does "SSO fallback" mean in i-doit?

SSO fallback allows users to log in with a local i-doit user account even if central authentication via SSO (e.g., LDAP, Kerberos, SAML) fails. This is particularly important for emergencies or maintenance work.

## What configuration is required for this?

None, i-doit supports SSO fallback by default. However, make sure that at least one local i-doit user account with administrator rights exists to ensure access in case of an emergency.

Unless the i-doit URL is called directly with the parameter `?use-sso=1`, the login page is displayed, which offers both the SSO option and the option to log in with local i-doit user accounts.
