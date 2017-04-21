# Women&&Tech
Below are instructions for adding interviews and page content to the current site. If global changes are required, they should be updated in the Style Guide which contains all the development files (e.g. Sass files). The updated CSS file and any HTML revisions should then be added back to this repo.

<br>

## Style Guide

The Style Guide should be used as a reference for adding content to the site. It contains examples, style patterns, code snippets and page templates and can be viewed here:
<http://womenandtech.github.io/style_guide>

The Style Guide *repo* can be viewed here:
<https://github.com/WomenAndTech/style_guide>

<br>

## Text Editors and Consistent Code Styles

This project uses [editorconfig](http://editorconfig.org/) to maintain consistent coding styles. Make sure your text editor has the editorconfig [plugin](http://editorconfig.org/#download) installed.

**Atom Users:** The Whitespace plugin (installed by default) has `Trim trailing whitespace` option turned on. Turn this *off* in the Whitespace plugin settings, otherwise it overwrites the setting in [.editorconfig](.editorconfig).

<br>

## Making Updates

### Local development setup

**If you're unfamiliar with Git, Github and the Command Line, view the [Intro to Git](docs/intro-to-git.md) doc.

**Step 1:** Clone this repo to make a local copy

Use Command Line or software such as [SourceTree](https://www.sourcetreeapp.com) or [Github Desktop](https://help.github.com/desktop/) to clone the repo.

**Step 2:** Run a local server

This site uses PHP files to do basic templating and add dynamic content. Unlike HTML files, to view PHP files, you must run a local server.

For Macs:

* Open Terminal and navigate to your local copy from step 1.
* use the *change directory* (`cd`) command and the path to your project files

```
cd /Users/username/path/to/static-site
```
**shortcut:** type cd, space then drag your folder into Terminal to add the file directory path

* Run the following command in Terminal to start your local server.

```
php -S localhost:8000
```

View the site locally at <http://localhost:8000> (also listed in your Terminal window message).

**Note:** You can also use software and tools such as Codekit, Mamp, Grunt or Gulp to run a local server. However, don't save any files generated from these tools into the main repo. We're trying to reduce the number of dependencies on specific tools to make it flexible for different workflow preferences.

<br>

## File Naming and Structure

### Interviews

Save all interviews within the **`interview`** directory. Create a new folder for the interviewee and save the interview content into an index.php file following the structure below.

```
interview/firstname-lastname/index.php
```

#### Interview Images
Save all images within the `assets > img` folder.

To indicate the type of image, use a prefix followed by the name of the interviewee.
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

For the past interview cards & archive page thumbnails, use this convention:
```
assets/img/thumbnail-first-lastname.jpg
```
<br>

## Adding Interview Content

Use the **`base-template.php`** starter file, located in the **`interview`** folder. Copy the contents into your `index.php` as your starting point.

This template includes the global header, footer, common content modules and instructions for customizing the page.

Add or remove content modules as required. Refer to the [style guide](http://womenandtech.github.io/style_guide) for options and code samples.

<br>

## Customizing the templates
Use the PHP variables to customize the page themes, title and various content. There are notes included at the top of the **`base-template.php`** file for the different variable options. Below is an example snippet.

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


