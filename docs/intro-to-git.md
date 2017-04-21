# Intro to Git and Github

Git is a version control system for tracking and providing a history of file changes in a given project. Git also coordinates changes among multiple contributors.

Github is one of many services for hosting Git project. These project files are saved in *repositories*.

Git can be used with software such as [SourceTree](https://www.sourcetreeapp.com) or [Github Desktop](https://help.github.com/desktop/), or using the Command Line.

Below is a general overview of Git, command line, Git software and Github.

<br>

## Terminology

**Repository**: contains all the project files (e.g. folders, html files, css, javascript, images, etc.) Also referred to as "repo" for short.

Repos also show information such as commits, commit dates, file history, repository url, readme file and more.

**Branch**: All repos have a `master` branch which is the main branch.

Additional branches can also be created. This is often used to add updates/features separate from the main branch and then *merged* back into the `master` branch when the update is complete.

**Clone**: creates a local of the repo.

The repo is the hosted copy that all users with access to it can view and work from. To make changes, create a *local* copy by saving the files to your computer by `cloning` it.

**Working directory:** the local folder that contains all your project files.  This is where you make your changes as well as adding/removing/renaming/moving files.

**Staging**: the **staging area** collects the revisions and changes to be saved as a "snapshot" or version of your project files up to that point.

Staging does **not** add your files to the repo.

**Commit**: marks the file changes and is a record of the update.

Add your revised files to the staging area, then commit your change. A commit can contain changes for one or multiple files. Changes include not only revisions to the existing files but also adding, renaming, moving or deleting files.

Committing does **not** add your files to the repo.

**Push**: this command adds your commits from your local copy into the hosted repository.

All your changes happen locally on your computer until you `push.` Even your commits. `Push` will add the file changes from your computer to the the hosted repository. Other users will now be able to `pull` your changes from the repo into their local copy.

**Pull**: this command allows you to download the latest changes to your local version.

When you first `clone` a repo, you are copying the latest file versions of the project at that moment. If several people are working on the project, there may be changes added *after* you've cloned the repo.  The `pull` command allows you to download the latest changes to your local version.

<br>

## Command Line Basics

(If you prefer to use Git software instead of the command line, skip down to the [SourceTree information section](https://github.com/WomenAndTech/static-site/blob/master/docs/intro-to-git.md#git-and-sourcetree).)

The command line (**Terminal** in Mac, **Powershell** in PC) is a tool used to interact *directly* with the operating system rather than using the GUI (e.g. graphical controls the user can select using a mouse or keyboard).

Instead, tasks are executed through the command line (e.g. open files, edit files, delete files, run programs) instead of the UI.

Using the command line is not required to use Git and Github because there are software options that can be used instead. However, it maybe useful to have some basic understanding of how the command line works.

<br>

### Opening the Command Line

For Mac users, open the **Terminal** application:

`Applications -> Utilities -> Terminal (or search for it in Spotlight)`

For Windows, open the **Powershell** application:

`Start -> Search programs and files -> type "powershell" and hit enter`

What you should see is a blank window and a *prompt*.

Terminal:

    Computer-Name:~ Your-Username$

Powershell:

    PS C:\Users\Your-Username>

The **prompt** is where you write your commands/instructions for the computer to follow.
Note that the `$` in Terminal or the `>` in Powershell at the end of the line. This is the **prompt**. It always appears, so you don't actually have to type the `>` or `$` symbol.

<br>

### Command Line Tools

Here are a few common commands.

#### Print Working Directory (`pwd`)

The print working directory command shows which directory you are currently in. Remember, the `$` and `>` are only referring to the prompt. Don't actually type it. Just type the command and enter.

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


#### List Directory (`ls`)
The `ls` command will list all the directories inside of your current directory.

    $ ls
    list of all directories will appear below the command

#### Change Directory (`cd`)
To move between directories/folders, use `cd` followed by a space and the directory name to change to a specific directory. Directory names are case sensitive

    $ cd Desktop
    Computer-Name:Desktop yourusername$

Note how "Desktop" also gets added to the output. That means you have now changed to that directory. You can type `$ pwd` to double check.

#### Moving Between Directories
To go to directory within a directory, use the `/` symbol followed by the subdirectory name.

    $ cd Desktop/projects-folder/project-one

To go back up a folder, use `..` with the `cd` command.

    $ cd ..


`~ ` changes to the home directory (back to where you started when you first opened Terminal/Powershell).

    $ cd ~

Shortcut:
Start typing a directory name, then press the `tab` key and command line will autocomplete it for you if there is a match.  If there are more than one directory that starts with the same characters, it will list all matching directory names.


    $ cd D

Result:

    Desktop/   Documents/   Downloads/   Dropbox/

**Better Shortcut**: If you have Finder/Window open, you can *drag* the folder into the command line *after* typing `cd` and a space, to autocomplete the directory file path.

#### Make a directory (mkdir)

`mkdir` is the command for making a new directory. The *argument* that follows this command is the name you want to give the directory.

    $ mkdir new-folder-name

#### Manual

The manual tool, `man`, provides information about all of the different commands. Type `$ man` and whichever command you'd like to get more information on.

Shows info about the `ls` command:

    $ man ls

**Note**: If you execute this command, you will see a colon at the bottom of the screen instead of the usual command prompt. You will not be able to type anything but don't panic! This means you are in a command line program that extends beyond the view/window.

To see more press the **Enter** key.  
To exit press the **q** key.


Want to know more? Check out [these](https://docs.gitlab.com/ee/gitlab-basics/command-line-commands.html) [resources](https://www.learnenough.com/command-line-tutorial).

<br>

## Git and the Command Line

### Configurations

1. [Download and install](https://git-scm.com/download) the latest version of Git.
1. Open the command line, Terminal in Mac, Powershell in PC.
1. Configure your name to labe the commits. Git specific commands start with `git`.
    ```
    $ git config --global user.name "YOUR NAME"
    ```

1. Configure the email address associated with your Git commits. The email should be the same as used in your GitHub account.
    ```
    $ git config --global user.email "YOUR EMAIL ADDRESS"
    ```

You can confirm this info using this command:

    $ git config --get user.name
    $ git config --get user.email

Reference: [Set Up Git](https://help.github.com/articles/set-up-git)

<br>

### Working on an existing repository

Clone the repo first to create and download a local copy (on your computer) of the hosted repository (on github.com).

1. On the right side of the repository page, select the `Clone or download` button and copy the clone URL. This will either be an HTTPS or SSH clone URL, depending on how you authenticate to GitHub. If you're not sure how your account is authenticated, use the HTTPS url.
1. Using command line, navigate and change the directory (cd) to where you'd like to keep the project files on your computer.
    ```
    $ cd main-project-folder
    ```
1. Then type `$ git clone` followed by a space and the url copied from step 1 to make a local copy.
    ```
    $ git clone https://github.com/WomenAndTech/static-site.git
    ```


This will add the repository file into your project folder.

`main-project-folder/static-site`

You can change the folder name after you've cloned the repo.

**Note:** If you have collaborator or team access, you can clone directly from the repo. If the repo is public but you don't have access, you can `fork` the repo to make a copy into your own account, separate from the original repo. 

You can also create a new repos in your own account.

Here are some additional resources about [forking](https://help.github.com/articles/fork-a-repo/) or [creating](https://help.github.com/articles/create-a-repo/) a new repo.

<br>

### Adding changes to the repo
1. To update the repo, changes need to first be *added* to the staging area using the `$ git add <file>` command. There are several different ways to add files.
    * Add/stage a specific file: `$ git add file-name`
    * Add/stage all new, modified and deleted files: `$git add -A`
    * Add/stage new and modified, without deleted: `$git add .`
    * Add/stages modified and deleted, without new: `$git add -u`
1. **Commit** your revisions to create a version, or snapshot, of your project.  Every commit should contain a short message to summarize the changes being committed. (`-m` stands for message)
    ```
    $ git commit -m "a useful/descriptive commit message here"
    ```
1. If working with other people, you may need to pull the updates before you can push your own commits.
    ```
    $ git pull origin master
    ```
1. All these steps are still happening *locally* on your computer.  The repository hosted online via github.com has not received your updates yet. Use the **push** command to add your changes into the repository. (`master` is the branch name)
    ```
    $ git push origin master
    ```

You should now see your commits in the repo on github.com. Every time you make a change, these steps need to be followed.

**Tip:** Commit often when actively working on a project.

**Bonus step:** Use the `$ git status`command at any step to check the status. It will show information such as which files have been added, what branch you're in and more.

More resources can be found [here](https://services.github.com/resources/).

<br>

## Git and SourceTree




