**Initialize a directory as a Git Repository**
```
git init
```

**Retrieve a hosted repository**
```
git clone [url]
```

**Show modified and staged files**
```
git status
```

**Add a file to your next commit**
```
git add [file]
```
*can use . instead of a file name to add everything in the directory*

**Un-commit a file but keep the changes**
```
git reset [file]
```

**Diff of what is changed but not staged**
```
git diff
```

**Diff of what is staged but not yet comitted**
```
git diff --staged
```

**Show the diff of what is in branchA that is not in branchB**
```
git diff branchB...branchA
```

**Commit your staged files**
```
git commit -m "[message]"
```

**List your branches**
```
git branch
```

**Create a new branch**
```
git branch [branch-name]
```

**Switch to another branch**
```
git checkout
```

**Merge a branch into the current one**
```
git merge [branch]
```

**Show all commits in the current branch's history**
```
git log
```

**Show all commit logs with any paths that moved**
```
git log --stat -M
```

**Show commits on branchA that are not on branchB**
```
git log branchB..branchA
```

**Show the commits that changed file**
```
git log --follow [file]
```

**Delete the file from project and stage the removal for commit**
```
git rm [file]
```

**Change a files path and stage the move**
```
git mv [existingPath] [new-path]
```

**Add a git URL as an alias**
```
git remote add [alias] [url]
```

**Fetch all branches from a git remote**
```
git fetch [alias]
```

**Merge a remote branch into your current branch to bring it up to date**
```
git merge [alias]/[branch]
```

**Send local commits to the remote repository**
```
git push
```

**Fetch and merge commits from the remote branch**
```
git pull
```

**Apply commits of current branch ahead of specidied one**
```
git rebase [branch]
```

**Clear staging area, rewrite working tree from specified commit**
```
git reset --hard [commit]
```

**Save modified and staged changes**
```
git stash
```

**List stack-order of stashed file changes**
```
git stash list
```

**Write working from top of stash stack**
```
git stash pop
```

**Discard the changes from top of stash stack**
```
git stash drop
```