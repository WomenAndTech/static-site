# Women&&Tech Static Site

## Style Guide
Refer to the Style Guide site to add code snippets for specific page modules:  
<http://womenandtech.github.io/style_guide>  

Here is the repo for reference:  
<https://github.com/WomenAndTech/style_guide>


## Creating files & viewing locally

Use **`base-template.php`** as your starting point. This template includes the global header and footer. Add all content modules between the **`<main>`** tags.

If you're on a Mac, open Terminal and navigate to your local copy of these files using the change directory (`cd`) command and the path to your project files.

```
cd /Users/username/path/to/static-site
```

Then run this following command to start a local server to run the PHP files.

```
php -S localhost:8000
```

View the site locally at <http://localhost:8000>, also listed in your Terminal window.



## File naming conventions

Save all interviews within the **`interview`** folder. Name the file using the interviewee's name.

```
interview/firstname-lastname.php
```

Save all images within the **`assets > img`** folder. Create a new folder using the interviewee's name. Name each file using a prefix to indicate what type of image is being used.

```
/assets/img/firstname-lastname/featured-firstname-lastname.jpg
/assets/img/firstname-lastname/landscape-first-lastname.jpg
/assets/img/firstname-lastname/portrait-first-lastname.jpg
```

For the side by side images, use this naming convention:  

```
/assets/img/firstname-lastname/left-first-lastname.jpg
/assets/img/firstname-lastname/right-first-lastname.jpg
```

