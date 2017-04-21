#Intro to Git and Github

Git is a version control system for tracking, saving and providing a history of file changes and coordinating work on those files among multiple people.

Github is one of many services for hosting Git project files, referred to as *repositories*.

Git can be used with software such as [SourceTree](https://www.sourcetreeapp.com) or [Github Desktop](https://help.github.com/desktop/) apps, or using the Command Line / Terminal.

Below is a general overview of Git, command line, Git software and Github.

## Git Terminology
####Repository / Repo

The repository contains all the project files (e.g. folders, html files, css, javascript, images, etc.)

The repository also shows the activity and information about the the project such as commits, file history, repository url, readme file and more.

##### Working directory

The **working directory** is the folder that contains all your project files.  This is where you make your changes as well as adding/removing/renaming/moving files.

##### Staging area / adding updated files
The **staging area** collects the revisions and changes to be saved as a "snapshot" or version of your project files up to that point. Staging does **not** add your files to the repo.

####Branch

The `master` branch is the main branch.

Additional branches can also be created. This is often used to make updates or add features separate from the main branch and then *merged* back into the `master` branch when the update is complete.

####Clone

The repo is the hosted copy that all users with access to it can view and work from. To make changes, create a *local* copy by saving it to your computer by `cloning` it.
(More details on how to do that below.)

####Commit

A `commit` marks the file changes and is a record of the update. A commit can be added to one for or multiple files. Changes include not only revisions to existing files but also adding, renaming or deleting files. Commits also contain a message to indicate what changes were made.

Committing does **not** add your files to the repo.

####Push

The `push` command adds your commits (changes to the files) from your local copy on your computer to the hosted repository (e.g. Github repository).

All your changes happen locally on your computer until you `push.` Even your commits. `Push` will add the file changes from your computer to the the hosted repository. Other users will now be able to `pull` your changes from the repo into their local copy.

####Pull

When you first `clone` a repo, you are copying the latest file versions of the project at that moment. If several people are working on the project, there may be changes added *after* you've cloned the repo.  The `pull` command allows you to download the latest changes to your local version.

<br>
##Command Line Basics

(If you prefer to use Git software instead of the command line, skip down to the SourceTree information section.)

The command line (**Terminal** in Mac, **Powershell** in PC) is a tool used to interact *directly* with the operating system rather than using the graphical user interface, or GUI (e.g. graphical controls the user can select using a mouse or keyboard).

Instead, tasks that the UI does can be executed through the command line (e.g. open files, edit files, delete files, run programs).

Using the command line is not required to use Git and Github because the software options listed above can be used instead. However, it maybe useful to have some basic understanding of how the command line works.


### Opening the Command Line

For Mac users, open the **Terminal** application:

`Applications -> Utilities -> Terminal (or search for it in Spotlight)`

For Windows, open the application called **Powershell**:

`Start -> Search programs and files -> type "powershell" and hit enter`

What you should see is a blank window, containing a *prompt*.

Terminal:

    Computer-Name:~ Your-Username$

Powershell:

    PS C:\Users\Your-Username>

The **prompt** is where you write your commands/instructions for the computer to follow. Note that the `>` in Powershell or `$` in Terminal at the end of the line. This is the **prompt** and it always appears. You don't actually have to type the `>` or `$` symbol.


### Command Line Tools

Here are a few common basic commands.

### Print Working Directory (pwd)

The print working directory command (pwd) shows which directory you are currently in. Remember, the `$` and `>` are only referring to the the prompt. Don't actually type it, just type the command and enter.

The output will appear immediately after you enter, followed by another prompt.

**Terminal `$ pwd`**

    Computer-Name:~ yourusername$ pwd
    /Users/yourusername
    Computer-Name:~ yourusername$

**Powershell `> pwd`**

    PS C:\Users\yourusername> pwd
    Path
    ----
    C:\Users\yourusername
    PS C:\Users\yourusername>


### List Directory (ls) / Change Directory (cd)
The `ls` command will list all the directories inside of your current directory.

    $ ls
    list of all directories will appear here

To move between directories (folders), use `cd` to change to a specific directory.

    $ cd Desktop
    Computer-Name:Desktop yourusername$

Note how "Desktop" gets added to the output. That means you have now changed to that directory. You can type `$ pwd` to double check.

### Moving Between Directories
To go to directory within a directory, use `/` followed by the subdirectory name.

    $ cd Desktop/projects-folder/project-one

To go back up a folder, use `..` with the `cd` command.

    $ cd ..


`~ ` changes to the home directory (back to where you started when you first opened Terminal/Powershell).

    $ cd ~

After you've started to type a directory name (which is case sensitive), you can also press the `tab` key and command line will finish it for you.  If there are more than one directory that starts with the same characters it will list all matching directory names.

Typed "D" then tabbed

    $ cd D

Result:

    Desktop/   Documents/   Downloads/   Dropbox/

**Shortcut**: If you have Finder/Window open, you can also *drag* the folder into Terminal *after* typing `cd` and a space, to autocomplete the directory file path.

### Make a directory (mkdir)

`mkdir` is the command for making a new directory. The *argument* that follows this command is the name that you want to give the directory (folder).

    $ mkdir new-folder-name

**Note**: Make sure you are in the directory where you want to create this folder first before making a new directory, though you can move the folder afterwards through the command line or through Finder/Window.


### Manual

The manual tool, `man`, provides information about all of the different commands. Type `$ man` and whichever command you'd like to get more information on.

Show info about the `ls` command:

    $ man ls

If you execute this command, you will see a colon at the bottom of the screen instead of the usual command prompt. You will not be able to type anything but don't panic! This means you are in a command line program that extends beyond the view/window.

To see more press the **Enter** key.
To exit press the **q** key.


Want to know more? Check out [these](https://docs.gitlab.com/ee/gitlab-basics/command-line-commands.html) [resources](https://www.learnenough.com/command-line-tutorial).


## Git and the Command Line

### Configurations

1. [Download and install](https://git-scm.com/download) the latest version of Git.
1. Open the command line, Terminal in Mac, Powershell in PC.
1. Configure your name so the commits will be properly labeled. Git specific commands start with `git`.

    $ git config --global user.name "YOUR NAME"

1. Configure the email address associated with your Git commits. The email should be the same as used in your GitHub account.

    $ git config --global user.email "YOUR EMAIL ADDRESS"

You can confirm this info using this command:

    $ git config --get user.name
    $ git config --get user.email

Reference: [Set Up Git](https://help.github.com/articles/set-up-git)


### Working on an existing repository

Clone the repo first to create and download a local copy (on your computer) of the hosted repository (on github.com).

More about `fork` [here](https://help.github.com/articles/fork-a-repo/).

1. In the right side of the repository page, select the `Clone or download` button and copy the clone URL. This will either be an HTTPS or SSH clone URL, depending on how you authenticate to GitHub. If you're not sure how your account is authenticated, use the HTTPS url.
1. Using command line, navigate and change the directory (cd) to where you'd like to keep the project files on your computer.
1. Then type `$ git clone` followed by a space and the url copied from step 1 to make a local copy.

    $ git clone https://github.com/WomenAndTech/static-site.git

This will create a new folder with that repository name.

**Note:** If you have collaborator or team access to the repo, you can clone directly from the repo. If the repo is public but you don't have access to the repo, you can `fork` the repo to make a copy into your own repo that is separate from the original repo. You can also create a new repo in your own account.

Here are some additional resources about  [forking](https://help.github.com/articles/fork-a-repo/) or [creating](https://help.github.com/articles/create-a-repo/) a new repo.

### Adding changes to the repo
1. To update the repo, changes need to first be *added* to the staging area using the `$ git add <file>` command. There are several different ways to add files.

Add/stage a specific file: `$ git add file-name`
Add/stage all new, modified and deleted files: `$git add -A`
Add/stage new and modified, without deleted: `$git add .`
Add/stages modified and deleted, without new: `$git add -u`

1. **Commit** your revisions to create a version, or snapshot, of your project.  Every commit should contain a short message to summarize the changes being committed. (`-m` stands for message)

    $ git commit -m "a useful commit message here"

For your first commit, it's common for your message to be "initial commit".

1. All these steps are still happening *locally* on your computer.  The repository hosted online via github.com has not received these updates yet. Use the **push** command to add the changes into the repository. (`master` is the branch name)

  $ git push origin master

You should now see your commits in the repo on github.com. Every time you make a change, these steps need to be followed.

Commit often when actively working on a project.

1. If working with other people, you'll likely need to pull in their updates. You may need to pull the updates before you can push your own commits.

    $ git pull origin master

Bonus step: Use the `$ git status`command at any step to check the status. It will show information such as which files have been added, what branch you're in and more.

More resources can be found [here](https://services.github.com/resources/).


## Git and SourceTree




