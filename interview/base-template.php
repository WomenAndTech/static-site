<?php
  /*
    Fill out these values to customize the page.
    $page_title = Interviewee's name
    $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue

    Add this PHP snippet to every image src, followed by the image file name.
    All images are added to the 'assets > img' directory.
    <img src="<?php echo $path_img; ?>featured-sandi-lin.jpg" alt="Sandi Lin">
  */
  $page_title = 'Firstname Lastname';
  $page_theme = 'theme-coral';

  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

  <main role="main">
    <!-- All interview content here. -->


    <!-- // Latest 3 Interviews -->
    <?php include($path_inc."latest-interviews.php"); ?>
  </main>

<?php include($path_inc."footer.php"); ?>