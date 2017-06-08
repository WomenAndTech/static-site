# Git and SourceTree

## Table of contents
- [Getting started](#getting-started)
- [Clone the repo](#clone-the-repo)
- [Working with branches](#working-with-branches)
  - [Create a new branch](#create-a-new-branch)
  - [Add an existing branch](#add-an-existing-branch)

<br>

## Getting started

Download the SourceTree app: <https://www.sourcetreeapp.com>  

Follow the installation steps and connect to your Github account.  You will be required to create a (free) Atlassian account (the creators of SourceTree). 

You may also be prompted to create a Bitbucket account (another Atlassian product) but it is not required.

[Atlassian Reference](https://confluence.atlassian.com/get-started-with-sourcetree/install-sourcetree-847359094.html)

<br>

## Clone the repo
You only have to do this step once. Cloning the repo with grab the latest files from the Github repository and save it to your computer.

If you have already cloned the repo, skip to the [Working with branches](#working-with-branches) section.

**Step 1:**  
From the [main repository page](https://github.com/WomenAndTech/static-site), select the `Clone or download` button and copy the URL. 

This will either be an SSH or HTTPS URL, depending on how you authenticate to GitHub. If you're not sure how your account is authenticated, use the HTTPS URL.

![Github clone](images/github-clone.gif)

**Step 2:**   
Back in SourceTree, select **File > New** from the main menu.

![Sourcetree clone](images/sourcetree-new-clone1.png)


OR, select **+New** from the Repository Browser.

![Sourcetree clone](images/sourcetree-new-clone2.png)

**Step 3:**   
Select a **Destination Path** for your *local* copy. Make sure the folder is empty. 

You can name it anything you want in the **Name** field or just leave it the same as the repo name.

![Sourcetree clone](images/sourcetree-new-clone3.png)

<br>

## Working with Branches

Every Git repository has a **master** branch by default. For the Women&&Tech site, this is not only the main branch, think of it as the "good copy".

**IMPORTANT**: Any commits added to the **master** branch are **automatically pushed live to the site.**  Do not add updates directly to the master branch.

Instead, create a branch for each new feature you add (e.g. new interview, new page, content revisions). This will give you a separate area to work on and test your updates before it goes live.

You can create a new branch or add an existing branch to your local copy.

### Create a new branch
[still need to add]

### Add an existing branch
If another team member has already created a branch and you'd like to work on that branch as well, you'll need to add the *remote* branch.

To add a branch to your local copy:

* Make sure you don't have any modified files (yellow icon with ellipsis).
* `commit` any modified files or temporarily remove them by using the [stash](https://confluence.atlassian.com/sourcetreekb/stash-a-file-with-sourcetree-785332122.html) command.
* Untracked files are ok. (purple icons with a question mark)

Go to **remotes > origin** and expand it
Right-click on 'branch-name' and select 'Checkout...'

'content-updates' is used for these example but replace that with the name of the branch you want to checkout.

![Adding a branch](images/branch-add1.gif)

"Checkout" means you are switching over to that branch. The changes you make in this branch does not affect the **master** branch.

Leave the default settings and select OK.

![Adding a branch](images/branch-add2.png)

Once complete, you will see the branch name under your **Branches**, highlighted with bold text and a circle to the left.

![Adding a branch](images/branch-add2.png)

Make your content updates in your branch until you're ready to push it live to the Women&&Tech site.

** Make sure that the branch name is highlighted** in SourceTree to ensure that you are in this branch, instead of the master branch.

You can work on several branches at the same time. There is no limit. To switch over to any branch, select **branch-name**, right-click, then **checkout branch-name**.

<br>


## Adding changes

After making changes to your files, follow these steps:

**Step 1.** **commit** the file. 

**Unstaged** files are the copy on your local computer and has not been push up to the repo yet.

Move the files to the **Staged files** area by selecting the checkbox.  To remove a file from the staged area, uncheck the checkbox.

Add a commit message by clicking inside the text area field at the bottom of app. Leave a descriptive message. This is what will be saved in the repo along with your changes.

Select the "Push changes immediate to origin/content-updates" option. If it says "origin/master" you are in the master branch. Make sure you're in the right one first before committing!

Push will add your updates to the github repo. Other team members using the branch can now pull your changes into their local copy.

<br>

## Pulling changes / Adding updates
After you add the branch or repo for the first time, remember to **pull** in updates.  It doesn't matter if you do it before you make changes or after but it needs to be done before you add/**push** a commit.

When you open the SourceTree app, if there have been updates added to the repo since you last working on it, you should see a notification on the Pull button. If you don't see any notifications, that means there were no updates. However, sometimes there is a slight delay when opening SourceTree and you make see the notifications after a few minutes.

<br>

## Updating the site
Updates made to the **content-updates** branch are only shared between team members. To add your changes to the live site, you will need to **merge** the commits in the **content-updates**  branch to the **master** branch.

You can do this with command line or the SourceTree app but Github has a more straightforward way of doing it.

Go to the main repo page: https://github.com/WomenAndTech/static-site

Select the "Compare & pull request" button.

It will take you to a "Pull Request" screen where you can review your revision or change the commit message.

Here are some things to look out for:

* Make sure the buttons above the commit message say "base:master" and "compare:content-updates" and there is an "Able to merge" message beside it
* The first textbox is your commit message, you can leave it or update it. You can also leave additional comments in the larger text box.
* You can review your changes in the box at the bottom of the page.

When everything is good, select the "Create a pull request" button. This will send your updates to the master branch for approval.

Once the pull request is created the page will update to show a "Merge pull request" button.  If the message says "This branch has no conflicts with the base branch" go ahead and press the button to approve the pull request.

Once you confirm the merge it will take you to a final screen. There's a message that says "Pull request successfully merged and closed" and a "Delete branch" option.

**Don't delete the branch.** Keep the branch to continue to add your content updates to in and only merge to **master** when you're done. 

Your **content-updates** revisions are now added to the **master** branch and the live site!

<br>

## Keeping the branches in sync

When you merge a pull request from the **content-updates** branch to the master branch, that will add additional commits.

Also, any commits added directly to **master** branch will not be automatically added to the **content-branch** either.

If there is a message that says "This branch is [x] commits behind master." that means the master branch has 3 commits that the content-updates branch doesn't have. 

In theory, you don't really need to use the **master** branch anymore because you'll be making all your updates to the **content-updates** branch. 

But if you want to keep your *master* branch up to date, you can *checkout* your master branch and **pull** the updates.

Just remember to *checkout* the **content-updates** branch again before making more revisions.


























