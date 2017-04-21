# Women&&Tech
Below are instructions for adding interviews to the current site. If global changes are required, they should be updated in the Style Guide as well.

<br>
## Style Guide

The Style Guide contains examples, style patterns, code snippets and page templates and can be viewed here:
<http://womenandtech.github.io/style_guide>

The Style Guide repo can be viewed here:
<https://github.com/WomenAndTech/style_guide>

<br>
## Text Editors and Consistent Code Styles
This project uses [editorconfig](http://editorconfig.org/) to maintain a consistent coding style. Make sure your text editor has the editorconfig [plugin](http://editorconfig.org/#download) installed.

**Atom Users:** The Whitespace plugin (installed by default) has `Trim trailing whitespace` option turned on. Turn this *off* in the Whitespace plugin settings, otherwise it overwrites the setting in [.editorconfig](.editorconfig).

<br>
## Making Updates

### Local development setup

**Step 1:** Make a local copy of this repo and ave it to your computer by *cloning* it.

[Clone a copy](https://help.github.com/articles/cloning-a-repository/) using Command Line OR use software such as [SourceTree](https://www.sourcetreeapp.com) to [clone the repo](https://confluence.atlassian.com/bitbucket/clone-a-repository-223217891.html#Clonearepository-CloningarepositorywithSourceTree).

For more info about Git and Github, view the [Intro to Git](docs/intro-to-git.md) doc.

**Step 2:** Unlike HTML files, to view PHP files, you must run a local server.

For Macs:

* Open Terminal and navigate to your local copy, saved in step 1.
  * use the *change directory* (`cd`) command and the path to your project files
  * shortcut: type cd, space then drag your folder into Terminal

```
cd /Users/username/path/to/static-site
```

* Run the following command in Terminal to start your local server.

```
php -S localhost:8000
```

View the site locally at <http://localhost:8000> (also listed in your Terminal window message).

You can also use software and tools such as Codekit, Mamp, Grunt or Gulp to run a local server. However, don't save any files generated from these tools into the main repo. We're trying to reduce the number of dependencies on specific tools to make it flexible for different workflow preferences.

<br>
## File Naming and Structure

### Interviews
Save all interviews within the **`interview`** directory. Create a new folder for the interviewee using their `firstname-lastname`. Name the interview content file index.php.

```
interview/firstname-lastname/index.php
```

#### Interview Images
Save all images within the `assets > img` folder.

Name each file using a prefix to indicate the type of image and the name of the interviewee.

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

## Adding Interview Content

Use the **`base-template.php`** starter file, located in the **`interview`** folder. Copy the contents into your `index.php` as your starting point.

This template includes the global header, footer as well as some common content modules and instructions for customizing the page.

Add or remove content modules as required. Refer to the [style guide](http://womenandtech.github.io/style_guide) for options and code samples.


## Customizing the templates
Use the PHP variables to customize the page themes, title and various content. There are notes included at the top of the **`base-template.php`** file. It looks like the below snippet.

```
<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-blue';
  $interviewee_name = 'Christina Truong'; // Page title & share links
  $interviewee_url = 'christina-truong'; // Share links URLs
  ...
?>
```

## Home page
To add the latest interview to the home page, update the `$current` variable in the PHP snippet to the name of the interviewee using the same structure as the folder name.

```
<?php
  // Update $current to the folder name of interviewee to display on homepage.
  $current = "ayla-newhouse";

  // Do not change these settings
  $homepage = "true";
  include_once 'interview/'.$current.'/index.php';
?>
```


