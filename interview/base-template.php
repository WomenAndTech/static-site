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

  <!-- // Featured Image -->
  <div class="border img-feature">
    <figure>
      <img src="<?php echo $path_img; ?>featured-christina-truong.jpg" alt="Christina Truong">
    </figure>
  </div>


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


  <!-- // Q & A -->
  <dl class="border">
    <dt class="interview-q">Question 1?</dt>
    <dd class="interview-a">
      <p>Paragraph 1.</p>
      <p>Paragraph 2 (if needed).</p>
    </dd>
    <dt class="interview-q">Question 2?</dt>
    <dd class="interview-a">
      <p>You can keep adding questions in the same 'dl class="border"' block as long as it's not separated by a pullquote or image.</p>
      <p>Paragraph 2 (if needed).</p>
    </dd>
  </dl>


  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>Pull quote example. Move this whole block after a Q&A block or image.</p>
  </aside>


  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-christina-truong-teehan-and-lax.jpg" alt="Christina Truong Teehan + Lax">
      <figcaption>
        (Example of image block with caption) Photo credit:
        <a href="http://www.flickr.com/photos/brendanlynch" title="Brendan Lynch's flickr photostream" target="_blank">Brendan Lynch</a>
      </figcaption>
    </figure>
  </div>

  <!-- // Q & A -->
  <dl class="border">
    <dt class="interview-q">Another Q&A block?</dt>
    <dd class="interview-a">
      <p>If the q&a's are separated by images or pullquotes, you'll have to add this whole block again after (the image block or pullquote block).</p>
      <p>Paragraph 2 (if needed).</p>
    </dd>
  </dl>


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