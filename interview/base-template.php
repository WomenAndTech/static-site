<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-coral';
  $interviewee_name = 'Christina Truong'; // Page title & share links
  $interviewee_url = 'christina-truong'; // Share links URLs

  /*
    INTERVIEW CREDITS

    If you need a second name, add a variable with a '2' the end. Example:
    $interviewer = "First Person";
    $interviewer_url = "";
    $interviewer2 = "Second Person";
    $interviewer_url2 = "";

    If you don't need a credit, delete the whole <li> in the HTML.
  */
  $interviewer = "Full Name";
  $interviewer_url = "";
  $photos = "Full Name";
  $photos_url = "";
  $editor = "Full Name";
  $editor_url = "";
  $ad = "Full Name";
  $ad_url = "";
  $design = "Full Name";
  $design_url = "";
  $dev = "Full Name";
  $dev_url = "";
  $transcribe = "Full Name";
  $transcribe_url = "";


  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

<main role="main">
  <!-- All interview content here. -->

  <!-- // Interview Header -->
  <header class="border header-interview">
    <div class="wrapper-sm">
      <h2>Interviewee Name</h2>
      <p class="intro">Intro paragraph.</p>

      <?php // Don't update. Using the same info as is Interview Credits. ?>
      <p class="author">An interview with <a href="<?php echo $interviewer_url; ?>"><?php echo $interviewer; ?></a></p>

      <?php // Don't update. Using info from PHP variables. ?>
      <ul class="social-share">
        <li>
          <a href="http://www.facebook.com/sharer.php?u=http://womenandtech.com/interview/<?php echo $interviewee_url;?>/" title="Facebook @WomenAndTech">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <span class="screen-readers">Post the interview on Facebook</span>
          </a>
        </li>
        <li>
          <a href="http://twitter.com/share?text=Women and Tech Interviews <?php echo $interviewee_name; ?>&url=http://womenandtech.com/interview/<?php echo $interviewee_url; ?>/" title="Twitter @WomenAndTech">
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <span class="screen-readers">Tweet the interview</span>
          </a>
        </li>
        <li>
          <a href="mailto:?subject=Women and Tech Interviews <?php echo $interviewee_name; ?>&body=Women and Tech Interviews <?php echo $interviewee_name; ?> http://womenandtech.com/interview/<?php echo $interviewee_url; ?>/">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span class="screen-readers">Email interview</span>
          </a>
        </li>
      </ul>
    </div>
  </header>


  <!-- // Interview Credits -->
  <footer class="border credits">
    <?php  // If you don't need a credit, delete the whole <li>. ?>
    <ul>
      <li>
        Interview by <a href="<?php echo $interviewer_url; ?>"><?php echo $interviewer; ?></a>
        <?php if ($editor2): echo 'and <a href="'.$editor2_url .'">'.$editor2.'</a>';endif; ?>
      </li>
      <li>
        Photography by <a href="<?php echo $photos_url; ?>"><?php echo $photos; ?></a>
        <?php if ($editor2): echo 'and <a href="'.$editor2_url .'">'.$editor2.'</a>';endif; ?>
      </li>
      <li>
        Editing by <a href="<?php echo $editor_url; ?>"><?php echo $editor; ?></a>
        <?php if ($editor2): echo 'and <a href="'.$editor2_url .'">'.$editor2.'</a>';endif; ?>
      </li>
      <li>
        Art Direction by <a href="<?php echo $ad_url; ?>"><?php echo $ad; ?></a>
        <?php if ($editor2): echo 'and <a href="'.$editor2_url .'">'.$editor2.'</a>';endif; ?>
      </li>
      <li>
        Design by <a href="<?php echo $design_url; ?>"><?php echo $design; ?></a>
        <?php if ($editor2): echo 'and <a href="'.$editor2_url .'">'.$editor2.'</a>';endif; ?>
      </li>
      <li>
        Development by <a href="<?php echo $dev_url; ?>"><?php echo $dev; ?></a>
        <?php if ($editor2): echo 'and <a href="'.$editor2_url .'">'.$editor2.'</a>';endif; ?>
      </li>
      <li>
        Transcriptions by <a href="<?php echo $transcribe_url; ?>"><?php echo $transcribe; ?></a>
        <?php if ($editor2): echo 'and <a href="'.$editor2_url .'">'.$editor2.'</a>';endif; ?>
      </li>
    </ul>
    <?php include($path_inc."site-credits.php"); ?>
  </footer>

  <!-- // Latest 3 Interviews -->
  <?php include($path_inc."latest-interviews.php"); ?>
</main>

<?php include($path_inc."footer.php"); ?>