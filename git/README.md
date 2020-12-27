<p align="center"><a href="https://git-scm.com/" target="_blank" rel="noopener noreferrer"><img width="100" src="https://avatars3.githubusercontent.com/u/18133?s=200&v=4" alt="Git logo"></a></p>

<h1 align="center">Git

<p align="center"><a href="https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html" target="_blank" rel="noopener noreferrer"><img width="100" src="https://img.shields.io/badge/License-GPL%20v2-blue.svg" alt="License: GPL v2"></a></p>

</h1>

Git is a distributed version-control system for tracking changes in any set of files. Originally, it was designed to allow programmers to cooperate on source code during development. It's goals include speed, data integrity, and support for distributed, non-linear workflows.

The main difference between git and other version control systems is the way git thinks about its data. Conceptually, most other systems store information as a list of file-based changes. Other systems tend to think of the information they store as a set of files and the changes made to each file over time.

With Git, data exists in three states: modified, staged, and comitted. Modified means that you have changed the file but have not comitted it yet. Staged means that you have marked a modified file in its current version to go into your next commit snapshot. Comitted means that the data is safely stored in your local repository. This leads to the three main sections of a git project: the working tree, the staging area, and the git directory. 

The working tree is a single checkout of one version of the project. These files are pulled out of the compressed database in the Git directory and placed on disk for you to use of modify. 

The staging area is a file, generally contained in your Git directory, that stores information about what will go into your next commit. Its technical name in Git parlance is the "index", but the phrase "staging area" works just as well.

The Git directory is where Git stores the metadata and object database for your project. This is the most important part of Git, and it is what is copied when you *clone* a repository from another computer.

The basic Git workflow goes something like this:

- You modify files in your working tree.
- You selectively stage just those changes you want to be part of your next commit, which adds **only** those changes to the staging area.
- You do a commit, which takes the files as they are in the staging area and stores that snapshot permanently to your Git directory.

---

## Installing Git

To use Git, you must of course install git. This can be done like so:

### Linux

If you're on a closely-related RPM-based distribution such as RHEL or CentOS you can use DNF:
```
$ sudo dnf install git-all
```

If you're on a Debian-based distribution, such as Ubuntu, try apt:
```
$ sudo apt install git-all
```

For more options check out <a href="https://git-scm.com/download/linux"> the git linux download documentation</a>.

### MacOs

The easiest way to install git on a Mac is to install the Xcode Command Line Tools. On Mavericks (10.9) or above, you can do this simply by trying to run ```git``` from the terminal:
```
$ git --version
```
If you don't have it installed already it will prompt you to install it. 

For more options check out <a href="https://git-scm.com/download/mac"> the git macOs download documentation</a>.

### Windows

For windows, the easiest way is to download the official build from the <a href="https://gitforwindows.org/">git website</a>.

---

## Hosting Git Repositories

The easiest way to share your git repositories with your team or with the programming community as a whole, is to host the repository. This is done by creating an account on a hosting platform, and adding a new remote to your local git repository. When pushing, the changes will get pushed to the hosting platform of choice. The thing to decide however, is where to host your git repository.

**GitHub**

GitHub is the largest community for software development, and has some of the best tools for issue tracking, code review, continuous integration, and general code management. GitHub can be found <a href="https://github.com/">here </a>. The free version of github includes unlimited private repositories, 2 thousand actions minutes/month, 500MB of GitHub packages storage, and community support. You can get more package storage, more actions minutes/month, and have a required reviewer amongst other benefits by upgrading to a paid plan.

**GitLab**

GitLab is the leading contender when it comes to alternative code platforms. It's fully open source and allows for hosting code on GitLabs site just like with GitHub, or you can self-host a GitLab instance of your own on your own server and have full control over who has access to everything there and how things are managed. It's features are on par with GitHub with some users preferring GitLabs continous integration and testing tools. GitLab can be found <a href="https://gitlab.com/">here</a>. Much like GitHub, GitLab also has premium features not available for free such as next day support, multiple approval roles, or executive level insights. 

These would be the two I would recommend, but others include <a href="https://bitbucket.org/">Bitbucket</a>, <a href="https://sourceforge.net/">Sourceforge</a>, or the one I use at work, <a href="https://azure.microsoft.com/en-gb/pricing/details/devops/azure-devops-services/">Azure DevOps</a> which includes storage for packages, CI/CD pipelines, unlimited private repositories, and project management tools such as a scrum board.

---

## Git GUI

Git on the command line can be complicated to get used to. This is why you can find my git cheatsheet in this repository. But if you device that the command line isn't for you, there are multiple GUI programs available. Here are three GUIs that could be a good alternative for you.

**SourceTree**

SourceTree is my most recommended GUI for git. It is easy to use, helps to visualize your code and works for both Git and Mercurial. Multiple work colleagues use SourceTree and they swear by it. To give sourcetree a go, check it out <a href="https://www.sourcetreeapp.com/">here</a>.

**GitKraken**

GitKraken works with GitHub, GitLab, and Bitbucket at it's free tier. The pro version also allows for working with self managed GitLab instances, GitHub enterprise, and Azure DevOps. It is easy to use and looks prettier than sourcetree, altough the features are similar between them. GitKraken can be found <a href="https://www.gitkraken.com/git-client">here</a>.

**Visual Studio**

The final recomendation from me when choosing a GUI for Git, is Visual Studio. Visual Studio is an IDE that has a built in GUI for Git. I wouldn't recommend using it if you aren't also using Visual Studio as an IDE, but if you are it is a great alternative to stand alone programs. 