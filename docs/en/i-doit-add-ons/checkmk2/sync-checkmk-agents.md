# Sync Check_MK agents

checkmk provides an agent-based monitoring of hosts and its services. There are several types of agents which can be shared with i-doit. To do so just run:

```shell
idoitcmk sync-agents
```

This will add all available agent types to i-doit's dialog+ attribute "Agent" in category Check_MK Host.

**Recommendation:** You only need to run this command once.
