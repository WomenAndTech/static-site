<?php
  // Adds active class to nav in includes/header.php -- Leave blank if this page is not included in the global navigation.
  $page = "contribute";
  // Page title, browser tab and search results.
  $page_title = 'Contribute';
  // Page theme options: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-yellow';

  // Do not edit.
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

<main role="main" class="page">
  Add content modules here. Refer to the Style Guide: <a href="http://womenandtech.github.io/style_guide/">here</a>.
</main>

<?php include($path_inc."footer.php"); ?>