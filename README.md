# Women&&Tech

This repo contains the project files for making content updates and adding new interviews to <http://womenandtech.com>.

These files are only for content updates. 

If changes to the site structure, CSS or JavaScript are required, they should be updated in the [Style Guide repo](https://github.com/WomenAndTech/style_guide), which contains all the development files. View the repo for more information about making global changes.

<br>

## Table of contents
- [Style guide](#whats-included)
- [Getting started](#getting-started)
- [Local development setup](#local-development-setup)
- [File Naming and Structure](#file-naming-and-structure)
- [Adding content](#adding-content)
- [Customizing the templates](#customizing-the-templates)
- [Updating the home page](#updating-the-home-page)
- [Misc](#misc)


## Style guide

The Style Guide is a reference for adding content to the site. It contains content module examples, style patterns, code snippets and page templates. Each modules was created to work as standalone components. Add modules as needed to build the page content with consistent designs.

View the guide here: <http://womenandtech.github.io/style_guide>

<br>

## Getting started

To contribute to the site, follow these steps:

1. Clone this repo to create your own copy.
2. Create a new branch from **master** for each new interview.
3. Add all your updates to your branch and test it.
4. Merge your branch to **master** by sending a pull request. If you would like someone to test your changes before going live, leave a comment, with their username, in the pull request.
5. Accept the pull request. This will add your changes to the **master** branch and will **automatically push your changes live** to womenandtech.com.
6. Delete the branch if you are no longer using it.

You can use whatever tool or app you prefer to manage Git. Just be sure to follow these steps and the other guidelines listed in the doc.

To view more details about using Git, check out these guides:

* [Intro to Git and Github](docs/git-intro.md)
* [Github and SourceTree](docs/git-sourcetree.md)
* [Github and Command Line](docs/git-command-line.md)


## Local development setup

**Run a local server**

This site uses PHP files for basic templating and customization. PHP files must run a local server to be viewed in the browser.

For Macs:

* Open **Terminal**
* Use the *change directory* (`cd`) command to navigate to your project folder by adding the entire file path, then press enter.
    ```
    cd /Users/username/path/to/static-site
    ```
  * **shortcut:** type cd, space, then drag your folder into Terminal to add the file directory path
  ![docs/images/terminal-cd.gif](change directory in Terminal)
* Run the following command in Terminal to start your local server.
    ```
    php -S localhost:8000
    ```

View the site locally at <http://localhost:8000>.

![docs/images/terminal-local-server.gif](running a local server in Terminal)

**This only works for Macs.**

You can use software and tools such as Codekit, Mamp, Grunt or Gulp to run a local server. However, don't save any files generated from these tools into the main repo. We're trying to reduce the number of dependencies on specific tools to make it flexible for different workflow preferences.

<br>

## File Naming and Structure
It's important to follow these naming conventions and file structure because the site architecture depends on it.

### Interviews
Save all interviews within the **`interview`** folder. Create a new folder for the interviewee, using their name, and save the content into an index.php file following the structure below.

```
interview/firstname-lastname/index.php
```

#### Interview Images
Save all images within the `assets/img` folder.

To indicate the type of image used, name the file with a prefix followed by the name of the interviewee.  
Refer to the [style guide](http://womenandtech.github.io/style_guide) for image options and code samples.

```
assets/img/featured-firstname-lastname.jpg
assets/img/landscape-first-lastname.jpg
assets/img/portrait-first-lastname.jpg
```

For the side by side images, use this naming convention:

```
assets/img/left-first-lastname.jpg
assets/img/right-first-lastname.jpg
```

If there are multiple images for the same type, add a descriptive word or short phrase to the end of the file name.

```
assets/img/portrait-first-lastname.jpg
assets/img/portrait-first-lastname-with-dog.jpg
```

For the past interview cards & archive page thumbnails, it uses the same image. Use this naming convention:
```
assets/img/thumbnail-first-lastname.jpg
```

The directory should look like this:

```
static-site/
├── assets/
│   ├── img/
│       ├── portrait-first-lastname.jpg
│       ├── thumbnail-first-lastname.jpg
└── interview/
    ├── firstname-lastname/
        └── index.php
```

    
<br>

### Non-interview pages
For non-interview pages (i.e. About), create a folder and name the folder the way you want it to appear in the URL.

For example, to create the url: `womenadtech.com/about/`, name the folder "about". Then add your content in an `index.php` file. 

```
static-site/
├── about/
│   ├── index.php
└── interview/
    ├── firstname-lastname/
        └── index.php
```


<br>

## Adding content 

There are starter template files for both interview pages and non-interview pages. 

**Copy the contents into your `index.php` as your starting point.** 

There are some common content modules already included in the template but you can add or remove the content modules as required. Refer to the [style guide](http://womenandtech.github.io/style_guide) for options and code samples.

### Interviews

Use the `base-template.php` starter file, located in the `interview` folder. 

This template includes the global header, footer, common content modules and instructions for customizing the page.

### Non-interview Pages

Use the example code in the `page-template.php` files located in the root folder. 

This template includes the global header, footer, page wrapper and instructions for customizing the page.

<br>

## Customizing the templates

PHP variables are included in the templates to customize the page themes, title and various snippets of content. Notes are included in the templates file for the different variable options. Below is an example snippet.

```
<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-blue';
  $interviewee_name = 'Christina Truong'; // Use for page title & share links
  $interviewee_url = 'christina-truong'; // Used for share links URLs, use the same name as the interviewee's folder name
  ...
?>
```

<br>

## Updating the home page

The home page should show the latest interview.

To add the latest interview to the home page, go to **index.php** in the root folder. 

```
static-site/
├── about/
├── archive/
├── assets/
...
├── index.php
```

Update the `$current` variable in the PHP snippet.

```
<?php
  // Update $current to the folder name of interviewee to display on homepage.
  $current = "ayla-newhouse";

  // Do not change these settings
  $homepage = "true";
  include_once 'interview/'.$current.'/index.php';
?>
```

Also, update the "Latest Interviews" content. This file is found under:

```
staic-site/
├── includes/
    ├── latest-interviews.php
```
  
<br>

## Misc
### Text Editors and Consistent Code Styles

This project uses [editorconfig](http://editorconfig.org/) to maintain consistent coding styles. Make sure your text editor has the editorconfig [plugin](http://editorconfig.org/#download) installed.

**Atom Users:** The Whitespace plugin (installed by default) has a `Trim trailing whitespace` option. Make sure to turn this option *off* in the Whitespace plugin *settings*, otherwise it overwrites the setting in [.editorconfig](.editorconfig).

<br>

### Auto push updates and purge caching

All commits added to the **master** branch will be deployed to the live site.

Deploy.php via github webhooks will deploy updates and purge cache automatically.



