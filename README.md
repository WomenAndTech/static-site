# Women&&Tech
Below are instructions for adding interviews and page content to the current site. 

If global changes are required, they should be updated in the [Style Guide repo](https://github.com/WomenAndTech/style_guide), which contains all the development files (e.g. Sass files). Any updates to the CSS, JS and any HTML should then be added back to this repo.

<br>

## Style Guide

The Style Guide is a reference for adding content to the site. It contains page module examples, style patterns, code snippets and page templates. View the guide here:
<http://womenandtech.github.io/style_guide>

Common design patterns and content modules are added using the example HTML markup and CSS classes for consistency and efficiency.

<br>

## Text Editors and Consistent Code Styles

This project uses [editorconfig](http://editorconfig.org/) to maintain consistent coding styles. Make sure your text editor has the editorconfig [plugin](http://editorconfig.org/#download) installed.

**Atom Users:** The Whitespace plugin (installed by default) has a `Trim trailing whitespace` option. Make sure to turn this option *off* in the Whitespace plugin *settings*, otherwise it overwrites the setting in [.editorconfig](.editorconfig).

<br>

## Local development setup

** If you're unfamiliar with Git, Github and the Command Line, view the [Intro to Git](docs/intro-to-git.md) doc. **

**Step 1:** Clone this repo to make a local copy

Use Command Line or software such as [SourceTree](https://www.sourcetreeapp.com) or [Github Desktop](https://help.github.com/desktop/) to clone the repo. More info can be found in the above [Intro to Git](docs/intro-to-git.md) doc.

**Step 2:** Run a local server

This site uses PHP files for basic templating and customization. PHP files must run a local server to be viewed in the browser.

For Macs:

* Open Terminal and navigate to your local copy from step 1.
* use the *change directory* (`cd`) command and add the entire directory path to your project files
* **shortcut:** type cd, space, then drag your folder into Terminal to add the file directory path
    ```
    cd /Users/username/path/to/static-site
    ```
* Run the following command in Terminal to start your local server.
    ```
    php -S localhost:8000
    ```

View the site locally at <http://localhost:8000> (also listed in your Terminal window message).

**Note:** This only works for Macs.  If using a PC or Mac, you can use software and tools such as Codekit, Mamp, Grunt or Gulp to run a local server. However, don't save any files generated from these tools into the main repo. We're trying to reduce the number of dependencies on specific tools to make it flexible for different workflow preferences.

<br>

## File Naming and Structure

### Interviews

Save all interviews within the **`interview`** directory. Create a new folder for the interviewee, using their name, and save the content into an index.php file following the structure below.

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

For the interview cards/archive page thumbnails, use this convention:
```
assets/img/thumbnail-first-lastname.jpg
```
<br>

### Pages
For non-interview pages (i.e. About), create a folder and name the folder the way you want it to appear in the URL.

For example, to create the url: `womenadtech.com/about/`, name the folder "about". Then add your content in an `index.php` file. 

Pages:  
about/index.php

Interviews:  
interview/firstname-lastname/index.php

<br>

## Adding Content

There are starter files/templates for both interview pages and non-interview pages. Copy the contents into your `index.php` as your starting point. Add or remove content modules as required. Refer to the [style guide](http://womenandtech.github.io/style_guide) for options and code samples.

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
  $interviewee_name = 'Christina Truong'; // Page title & share links
  $interviewee_url = 'christina-truong'; // Share links URLs
  ...
?>
```

<br>

## Home page

To add the latest interview to the home page, update the `$current` variable in the PHP snippet to the name of the interviewee, using the same structure as the folder name.

```
<?php
  // Update $current to the folder name of interviewee to display on homepage.
  $current = "ayla-newhouse";

  // Do not change these settings
  $homepage = "true";
  include_once 'interview/'.$current.'/index.php';
?>
```


