# Intro to Git and Github

**Git** is a version control system for tracking and providing a history of file changes. Git also coordinates changes among multiple contributors.

**Github** is one of many services for hosting Git project files.

<br>

## Terminology

**Repository**  
Contains all the project files to be tracked (e.g. folders, html files, css, javascript, images, etc.) Also referred to as "repo" for short. Repos stores information about each file's revision history. 

**Branch**  
All repos have a `master` branch by default, which is the main branch.

Additional branches can also be created. This is often used to add updates/features separate from the main branch and then *merged* back into the `master` branch when the update is complete.

**Clone**  
The repo is the hosted copy that all users with access to it can view and work from. To make changes, create a *local* copy by *cloning* the files to your computer.

A clone is a copy of the repository files.  It is also the command used for creating a local copy of your hosted repo onto your computer. 

The cloned copy is also connected to the remote version to sync the changes between the two using two additional commands, `push` and `pull`.

**Staging**   
The staging area collects the revisions and changes to be saved as a "snapshot" or version of your project files up to that point.

**Commit**  
A commit refers to the actual file revision. Revisions includes changes to existing files as well as adding, renaming, moving or deleting files. A commit can contain changes for one or multiple files. 

Files are added to the *staging area*, then committed and should contain a commit message to describe what changes were made.

Committing does **not** add your files to the live repo.

**Push**  
After committing your changes, `push` adds your commits from your local copy into the hosted repository. Other users will now be able to see your changes in the repo.

All your changes and commits happen locally on your computer until you `push.` 

**Pull**   
When you first `clone` a repo, you are copying the latest file versions of the project at that moment. If several people are working on the project, there may be changes added *after* you've cloned the repo.  The `pull` command allows you to download the latest changes to your local version.

To view an more comprehensive list of terminology, check out the [Github Glossary](https://help.github.com/articles/github-glossary/).

<br>

## Git Workflow
There are different apps that can be used with Git such as [SourceTree app](https://www.sourcetreeapp.com). You can also use the Command Line/Terminal. Each app may have a different user interface but the steps are the same. 

When working with an existing repo, your workflow should follow these steps:
1. Clone the repo (make a local copy)
  a. (Optional) Create a branch
2. Make your changes in your local copy
3. Add/stage your changes
4. Commit your changes
5. Push your changes to the repo
6. Repeat steps 2-5

**Bonus step:** When working with multiple collaborators, you'll need to do a `pull` to get the latest updates added to the repo, *after* you've cloned it.

<br>

## Command Line Basics
Using the command line is **not** required to use Git and Github because there are software and apps that can be used instead. However, it may be useful to have some basic understanding of how the command line works.

**If you prefer to use an app instead of the command line, skip down to the [SourceTree information section](https://github.com/WomenAndTech/static-site/blob/master/docs/intro-to-git.md#git-and-sourcetree).**

The command line (**Terminal** in Mac, **Powershell** in PC) is a tool used to interact *directly* with the operating system rather than using the GUI (e.g. graphical controls the user can select using a mouse or keyboard).

Instead, tasks are executed through the command line (e.g. open files, edit files, delete files, run programs) instead of the UI.


### Opening the Command Line

For Mac users, open the **Terminal** application:

`Applications -> Utilities -> Terminal (or search for it in Spotlight)`

For Windows, open the **Powershell** application:

`Start -> Search programs and files -> type "powershell" and hit enter`

What you should see is a blank window and a *prompt*. Note the `$` in Terminal or the `>` in Powershell at the end of the line. This is the **prompt**. It always appears, so you don't have to type the `>` or `$` symbol.

The **prompt** is where you write your commands or instructions for the computer to follow.

Terminal:

    Computer-Name:~ Your-Username$

Powershell:

    PS C:\Users\Your-Username>



### Command Line Tools/Commands

Listed below are some common commands. Remember, the `$` and `>` are only referring to the prompt. You don't have to actually type it. Just type the command and enter. The output will appear immediately after you enter, followed by another prompt.

**Print Working Directory**  
The print working directory, `pwd` command shows which directory you are currently in. 

Terminal `$ pwd`

    Computer-Name:~ yourusername$ pwd
    /Users/yourusername
    Computer-Name:~ yourusername$

Powershell `> pwd`

    PS C:\Users\yourusername> pwd
    Path
    ----
    C:\Users\yourusername
    PS C:\Users\yourusername>

The remainder of these examples will show the output for Terminal but the same commands can be used in Powershell.

**List Directory**  
The `ls` command lists all the directories inside of the current directory.

    $ ls
    Applications      Documents       Library 
    Desktop           Downloads       Pictures
    

**Changing Directories**  
To move between directories/folders, use `cd` followed by a space and the full directory path. Directory names are case sensitive.

    $ cd Desktop
    Computer-Name:Desktop yourusername$

Note that "Desktop" gets added to the output. That means you have now changed to that directory.

To go to directory within a directory, use the forward slash `/` symbol followed by the subdirectory name.

    $ cd Desktop/projects-folder/project-one

To go back up a folder, use `..` with the `cd` command.

    $ cd ..

`~ ` changes to the home directory (back to where you started when you first opened Terminal/Powershell).

    $ cd ~

**Shortcuts**  

**The `tab` key:** Start typing a directory name, then press the `tab` key and command line will autocomplete it if there is a match.  If there are more than one directory that starts with the same characters, it will list all matching directory names.

    $ cd D
    Desktop/   Documents/   Downloads/   Dropbox/

**Drag & drop:** *Drag* the folder from your Finder/Window into the command line *after* typing `cd` and a space, to autocomplete the directory file path.

**Make a directory**  
`mkdir` is the command for making a new directory. The *argument* that follows this command is the name you want to give the directory.

    $ mkdir new-folder-name

**Manual**  
The manual tool, `man`, provides information about all of the different commands. Type `$ man` and the command to get more information.

    $ man ls

**Note**: If you execute this command, you will see a colon at the bottom of the screen instead of the usual command prompt. You will not be able to type anything but don't panic! This means you are in a command line program that extends beyond the view/window.

To see more press the **Enter** key.  
To exit press the **q** key.

Want to know more? Check out [these](https://docs.gitlab.com/ee/gitlab-basics/command-line-commands.html) [resources](https://www.learnenough.com/command-line-tutorial).


