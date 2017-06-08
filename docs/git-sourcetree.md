# Git and SourceTree

## Getting started

Download the SourceTree app: <https://www.sourcetreeapp.com>  
Follow the installation steps and connect to your Github account.  
You will be required to create a (free) Atlassian account (the creators of SourceTree). You may be prompted to create a Bitbucket account (another Atlassian product) but it is not required.

[Reference](https://confluence.atlassian.com/get-started-with-sourcetree/install-sourcetree-847359094.html)

## Clone the repo
If you have already cloned the repo, skip to the [Adding a branch](#adding-a-branch) section.

From the [main repository page](https://github.com/WomenAndTech/static-site), select the `Clone or download` button and copy the URL. 

This will either be an SSH or HTTPS URL, depending on how you authenticate to GitHub. If you're not sure how your account is authenticated, use the HTTPS URL.

![Github clone](images/git-clone.gif)

Back in SourceTree, select **File > New** from the main menu.

![Sourcetree clone](images/sourcetree-new-clone1.png)


OR, select **+New** from the Repository Browser.
![Sourcetree clone](images/sourcetree-new-clone2.png)


This is going to be your *local* copy. Save it to an empty folder (Destination Path) in your directory. You can name it anything you want in the **Name** field or just leave it the same as the repo name.

![Sourcetree clone](images/sourcetree-new-clone1.png)


## Adding a branch

The **master** branch is the main and "good copy" of the Women&&Tech site. 
**Any commits added here are automatically pushed live to the site.**

The **content-updates** branch is used to add interviews or other content updates until you're ready to push it live to the site.


To add the 'content-updates' branch to your existing local copy:

Make sure you don't have any modified files. (yellow icon with ellipsis)
Check them in or stash them.
Untracked files are ok.(purple icons with a question mark)

Go to remotes > origin and expand it
Right-click on 'content-updates' and select 'Checkout...'
Leave the default settings and select OK.

Once complete, you will see 'content-updates' under your Branches.

"Checkout" means you are switching over to that branch. The changes you make in this branch does not affect the Master branch.

Make your content updates in this branch until you're ready to push it live to the Women&&Tech site.

Make sure that the **content-updates** branch is highlighted in SourceTree (bold text with a circle to the left) to ensure that you are in this branch, instead of the master branch.

For updating content, you won't need to access the master branch but, 
if you need to switch back over to the *master* branch, under Branches, select master > right-click > checkout master


## Adding changes

After making changes to your files, follow these steps:

**Step 1.** **commit** the file. 

**Unstaged** files are the copy on your local computer and has not been push up to the repo yet.

Move the files to the **Staged files** area by selecting the checkbox.  To remove a file from the staged area, uncheck the checkbox.

Add a commit message by clicking inside the text area field at the bottom of app. Leave a descriptive message. This is what will be saved in the repo along with your changes.

Select the "Push changes immediate to origin/content-updates" option. If it says "origin/master" you are in the master branch. Make sure you're in the right one first before committing!

Push will add your updates to the github repo. Other team members using the branch can now pull your changes into their local copy.


## Pulling changes / Adding updates
After you add the branch or repo for the first time, remember to **pull** in updates.  It doesn't matter if you do it before you make changes or after but it needs to be done before you add/**push** a commit.

When you open the SourceTree app, if there have been updates added to the repo since you last working on it, you should see a notification on the Pull button. If you don't see any notifications, that means there were no updates. However, sometimes there is a slight delay when opening SourceTree and you make see the notifications after a few minutes.


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


## Keeping the branches in sync

When you merge a pull request from the **content-updates** branch to the master branch, that will add additional commits.

Also, any commits added directly to **master** branch will not be automatically added to the **content-branch** either.

To check if the **content-updates** branch is up to date with master, go to the main repo page. It will default on the master branch. 

Select the dropdown button to switch the branch to **content-updates**.

If there is a message that says "This branch is [x] commits behind master." that means the master branch has 3 commits that the content-updates branch doesn't have. 

To update, send a pull request by selecting the "New pull request" button. This time, from the master branch to content-updates.

When you get to the pull request page, change the buttons to "base:content-updates" and "compare:master". 

If you see the "able to merge" message, you're good to go. 
Add a commit message and select "Create pull request."
You can also see what commits are included in the pull request below the comments block.

The pull request is now created. Merge the pull request.

**Bonus**
In theory, you don't really need to use the **master** branch anymore because you'll be making all your updates to the **content-updates** branch. 

But if you want to keep your *master* branch up to date, you can *checkout* your master branch and **pull** the updates.

Just remember to *checkout* the **content-updates** branch again before making more revisions.


























