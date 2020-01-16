# Big Data

## ACID

ACID is a set of properties of database transactions intended to gurantee validity even in the event of errors, power failures...

**A**tomicity: Transactions all or nothing, they fail cleanly.

**C**onsistency: doesn't break constraints or rules.

**I**solation: Transactions don't show elsewhere until COMMIT / ROLLBACK

**D**urability: Once completed a transaction is permanent and is saved to non-volatile memory.

**Example**: Transfer £125 from Bob to Mia. Doing this requires multiple steps. *Atomic*: transaction is only valid if all the steps work (all or nothing). *Consistent* if part of the transaction fails then undo everything in the transaction.

## CAP

**C**onsistency: All nodes have a consistent view of the system.

**A**vailability: Every read/write is acted on.

**P**artition-tolerance: The system works even if messages are lost.