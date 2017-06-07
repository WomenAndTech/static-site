## Git and the Command Line

### Configurations

1. [Download and install](https://git-scm.com/download) the latest version of Git.
1. Open the command line, Terminal in Mac, Powershell in PC.
1. Configure your name to label the commits. Git specific commands start with `git`.
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

1. On the right side of the repository page, select the `Clone or download` button and copy the clone URL. This will either be an HTTPS or SSH clone URL, depending on how you authenticate to GitHub. If you're not sure how your account is authenticated, use the HTTPS URL.
1. Using command line, navigate and change the directory (`cd`) to where you'd like to keep the project files on your computer. Make sure this folder is empty.
    ```
    $ cd project-folder
    ```
1. Then type `$ git clone` followed by a space and the URL copied from step 1 to make a local copy.
    ```
    $ git clone https://github.com/WomenAndTech/static-site.git
    ```
    
This will add the entire repository into your local directory that you navigated to in step 2.

    `project-folder/static-site`

You can change the folder name after you've cloned the repo.

**Note:** If you have collaborator access, you can clone directly from the repo. If the repo is public but you don't have collborator access, you can `fork` the repo to make a copy into your own account, separate from the original repo. 

Here are some additional resources about [forking](https://help.github.com/articles/fork-a-repo/) or [creating](https://help.github.com/articles/create-a-repo/) a new repo.

<br>

### Adding changes to the repo
Step 1: To update the repo, changes need to first be *added* to the staging area using the `$ git add <file>` command. There are several different ways to add files.
    * Add/stage a specific file: `$ git add file-name`
    * Add/stage all new, modified and deleted files: `$git add -A`
    * Add/stage new and modified, without deleted: `$git add .`
    * Add/stages modified and deleted, without new: `$git add -u`

Step 2: **Commit** your revisions to create a version, or snapshot, of your project.  Every commit should contain a short message to summarize the changes being committed. (`-m` stands for message)
    ```
    $ git commit -m "a useful/descriptive commit message here"
    ```
    
Step 3: If working with other people, you may need to pull the updates before you can push your own commits.
    ```
    $ git pull origin master
    ```
    
Step 4: All these steps are still happening *locally* on your computer.  The repository hosted online via github.com has not received your updates yet. Use the **push** command to add your changes into the repository. (`master` is the branch name)
    ```
    $ git push origin master
    ```

If you're using a branch instead of master, then push/pull to that branch.
    ```
    $ git pull origin branch-name
    $ git push origin branch-name
    ```

You should now see your commits in the repo on github.com. Every time you make a change, these steps need to be followed.

**Tip:** Commit often when actively working on a project.

**Bonus step:** Use the `$ git status` command at any step to check the status. It will show information such as which files have been added, what branch you're in and more.

More resources can be found [here](https://services.github.com/resources/).

<br>

## Git and SourceTree
You can use any app created for Git but the below example specifically uses [SourceTree](https://www.sourcetreeapp.com).




