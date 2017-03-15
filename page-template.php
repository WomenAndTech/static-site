<?php
  $page = "contribute"; // adds active class to nav in includes/header.php
  $page_title = 'Contribute'; // page title, browser tab and search results
  $page_theme = 'theme-yellow'; // page theme

  // Do not edit.
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

<main role="main" class="page">
  <!-- // Default header content -->
  <article class="border">
    <div class="wrapper-sm">
      <h2>Page title</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
  </article>
</main>

<?php include($path_inc."footer.php"); ?>