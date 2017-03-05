<?php
  /*
  Fill out these values to customize the page.
  $page_title = Interviewee's name
  $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  */
  $page_title = 'Firstname Lastname';
  $page_theme = 'theme-coral';
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

  <main role="main">
    <!-- All interview content here. -->


    <!-- // Latest 3 Interviews -->
    <?php include($path_inc."latest-interviews.php"); ?>
  </main>

<?php include($path_inc."footer.php"); ?>