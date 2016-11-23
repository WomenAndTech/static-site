# Women&&Tech Static Site

## Style Guide
Refer to the Style Guide site to add code snippets for specific page modules:  
<http://womenandtech.github.io/style_guide>  

Here is the repo for reference:  
<https://github.com/WomenAndTech/style_guide>


## File naming conventions

Save all interviews within the **`interview`** folder. Name the file using the interviewee's name.

```
interview/firstname-lastname.php
```

Save all images within the **`assets > img`** folder. Create a new folder using the interviewee's name. Name each file using a prefix to indicate what type of image is being used. If there are multiple images, add a descriptive word or short phrase to file name.

```
/assets/img/firstname-lastname/featured-firstname-lastname.jpg
/assets/img/firstname-lastname/landscape-first-lastname.jpg
/assets/img/firstname-lastname/portrait-first-lastname.jpg
/assets/img/firstname-lastname/portrait-first-lastname-with-dog.jpg
```

For the side by side images, use this naming convention:  

```
/assets/img/firstname-lastname/left-first-lastname.jpg
/assets/img/firstname-lastname/right-first-lastname.jpg
```

For the past interview & archive page cards:
```
/assets/img/firstname-lastname/thumbnail-first-lastname.jpg
```

## Creating files & viewing locally

Use **`base-template.php`**, located in the **interviews** folder, as your starting point. This template includes the global header and footer. Add all content modules between the **`<main>`** tags.

If you're on a Mac, open Terminal and navigate to your local copy of these files using the change directory (`cd`) command and the path to your project files.

```
cd /Users/username/path/to/static-site
```

Then run this following command to start a local server to run the PHP files.

```
php -S localhost:8000
```

View the site locally at <http://localhost:8000>, also listed in your Terminal window message.

## Customizing the page
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

Add the latest interview HTML content to **`index.php`** between the **`main`** tags.  

Update the "Past interviews" card info to the three latest interviews.

