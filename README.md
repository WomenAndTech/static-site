# Women&&Tech Static Site

## Style guide and code samples

Style Guide: code snippets and page templates
<http://womenandtech.github.io/style_guide>

Style guide repo:
<https://github.com/WomenAndTech/style_guide>

## Text editors and consistent code styles
This project uses [editorconfig](http://editorconfig.org/) to maintain consistent coding style. Make sure your text editor has the editorconfig [plugin](http://editorconfig.org/#download) installed.

**Atom Users:** The Whitespace plugin (which is installed by default) has `Trim trailing whitespace` option turned on by default. Turn this off in the Whitespace plugin settings, otherwise it overwrites the setting in [.editorconfig](.editorconfig). This is a known [issue](https://github.com/sindresorhus/atom-editorconfig/issues/3). This is only required for editing the slides. Workshop learners are not required to add this plugin.

## File naming conventions

Save all interviews within the **`interview`** folder.
Create a folder for the interviewee and name the file index.php.

```
interviews/firstname-lastname/index.php
```

Save all images within the interviewees folder.
Name each file using a prefix to indicate what type of image is being used. If there are multiple images, add a descriptive word or short phrase to file name.

```
interviews/firstname-lastname/index.php
```
```
interviews/firstname-lastname/featured-firstname-lastname.jpg
interviews/firstname-lastname/landscape-first-lastname.jpg
interviews/firstname-lastname/portrait-first-lastname.jpg
interviews/firstname-lastname/portrait-first-lastname-with-dog.jpg
```

For the side by side images, use this naming convention:

```
interviews/firstname-lastname/left-first-lastname.jpg
interviews/firstname-lastname/right-first-lastname.jpg
```

For the past interview & archive page cards:
```
interviews/firstname-lastname/thumbnail-first-lastname.jpg
```

## Adding new interviews

### Base template

Use **`base-template.php`**, located in the **`interviews`** folder, as your starting point.

This template includes the global header, footer and instructions for customizing the page. Add all content modules between the **`<main>`** tags.

### Local development setup
For Macs:

1. open Terminal and navigate to your local copy
* use the *change directory* (`cd`) command and the path to your project files
* shortcut: type cd, space then drag your folder into Terminal

```
cd /Users/username/path/to/static-site
```

2. Run the local server
* run this following command in Terminal to view the PHP files

```
php -S localhost:8000
```

View the site locally at <http://localhost:8000> (also listed in your Terminal window message).

## Customizing the templates
Use PHP variables to customize the page titles and page themes. This note is also included in **`base-template.php`**.

```
<?php
  /* Fill out these values to customize the page.
  $page_title = Interviewee's name
  $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  */

  $page_title = 'Sarah Hicks';
  $page_theme = 'theme-coral';
  include '../header.php';
?>
```

## Home page updates

Add the latest interview snippet file to root/main **`index.php`** between the **`main`** tags.

Update the "Past interviews" card info to the three latest interviews.

