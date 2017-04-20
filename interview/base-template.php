<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-blue';
  $interviewee_name = 'Christina Truong'; // Use for page title & share links
  $interviewee_url = 'christina-truong'; // Used for share links URLs

  // Twitter & Facebook sharing info
  $social_title = 'Interview with Aashni Shah with Cassie Kaiser';
  $social_desc = 'Use the description from the archive page.';
  // Social images are added in header.php but make sure the thumbnail image always follows this format: thumbnail-firstname-lastname.jpg

  /*
    INTERVIEW CREDITS:
    If you need a second name, add a variable with a '2' the end. Example:
    $interviewer = "First Person";
    $interviewer_url = "http://twitter.com";
    $interviewer2 = "Second Person";
    $interviewer_url2 = "http://mywebsite.com";

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

<main role="main" class="interview">

  <!-- // Featured Image -->
  <div class="border img-feature">
    <figure>
      <img src="<?php echo $path_img; ?>featured-christina-truong.jpg" alt="Christina Truong">
    </figure>
  </div>


  <!-- // Interview Header -->
  <header class="border header-interview">
    <div class="wrapper-sm">
      <h2>Interviewee Name [update this]</h2>
      <p class="intro">Intro paragraph.[update this]</p>

      <?php // Don't update. Using the same info as is Interview Credits. ?>
      <p class="author">An interview with <a href="<?php echo $interviewer_url; ?>"><?php echo $interviewer; ?></a></p>

      <?php // Don't update. Using the info from PHP variables at the top of the page. ?>
      <ul class="social-share">
        <li>
          <a href="http://www.facebook.com/sharer.php?u=http://womenandtech.com/interview/<?php echo $interviewee_url;?>/" title="Share on Facebook">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <span class="screen-readers">Post the interview on Facebook</span>
          </a>
        </li>
        <li>
          <a href="http://twitter.com/share?text=Women and Tech Interviews <?php echo $interviewee_name; ?>&url=http://womenandtech.com/interview/<?php echo $interviewee_url; ?>/" title="Share on Twitter">
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <span class="screen-readers">Tweet the interview</span>
          </a>
        </li>
        <li>
          <a href="mailto:?subject=Women and Tech Interviews <?php echo $interviewee_name; ?>&body=Women and Tech Interviews <?php echo $interviewee_name; ?> http://womenandtech.com/interview/<?php echo $interviewee_url; ?>/" title="Email the interview">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span class="screen-readers">Email interview</span>
          </a>
        </li>
      </ul>
    </div>
  </header>

  <?php // Add as many as required. You can delete this line. ?>
  <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dt class="interview-q">Question 1? [update this]</dt>
    <dd class="interview-a">
      <p>Paragraph 1. If the q&a's are separated by images or pullquotes, you'll have to add this whole block again after (the image block or pullquote block).</p>
      <p>Paragraph 2 (if needed).</p>
    </dd>
  </dl>

  <?php // Add as many as required. You can delete this line. ?>
  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>Pull quote example. Move this whole block after a Q&A block or image.</p>
  </aside>

  <?php // Add as many as required. You can delete this line. ?>
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

  <!-- // Team Signature -->
  <div class="border signature">
    <p>
      with <i class="fa fa-heart-o theme-color" aria-hidden="true" title="love"></i><span class="screen-readers">love</span>
      from <span class="team theme-color">the Women&&Tech team</span>
    </p>
  </div>

  <!-- // Interview Credits -->
  <?php  // If you don't need a specific credit, delete the whole <li>. Add the names in the customization options at the top of the page. ?>
  <footer class="border credits">
    <ul>
      <li>
        Interview by <a href="<?php echo $interviewer_url; ?>"><?php echo $interviewer; ?></a>
        <?php if ($interviewer2): echo 'and <a href="'.$interviewer_url2 .'">'.$interviewer2.'</a>';endif; ?>
      </li>
      <li>
        Photography by <a href="<?php echo $photos_url; ?>"><?php echo $photos; ?></a>
        <?php if ($photos2): echo 'and <a href="'.$photos_url2 .'">'.$photos2.'</a>';endif; ?>
      </li>
      <li>
        Editing by <a href="<?php echo $editor_url; ?>"><?php echo $editor; ?></a>
        <?php if ($editor2): echo 'and <a href="'.$editor_url2 .'">'.$editor2.'</a>';endif; ?>
      </li>
      <li>
        Art Direction by <a href="<?php echo $ad_url; ?>"><?php echo $ad; ?></a>
        <?php if ($ad2): echo 'and <a href="'.$ad_url2 .'">'.$ad2.'</a>';endif; ?>
      </li>
      <li>
        Design by <a href="<?php echo $design_url; ?>"><?php echo $design; ?></a>
        <?php if ($design2): echo 'and <a href="'.$design_url2 .'">'.$design2.'</a>';endif; ?>
      </li>
      <li>
        Development by <a href="<?php echo $dev_url; ?>"><?php echo $dev; ?></a>
        <?php if ($dev2): echo 'and <a href="'.$dev_url2 .'">'.$dev2.'</a>';endif; ?>
      </li>
      <li>
        Transcriptions by <a href="<?php echo $transcribe_url; ?>"><?php echo $transcribe; ?></a>
        <?php if ($transcribe2): echo 'and <a href="'.$transcribe_url2 .'">'.$transcribe2.'</a>';endif; ?>
      </li>
    </ul>
    <?php // Global site credits
    include($path_inc."site-credits.php");
    ?>
  </footer>

  <!-- // Latest 3 Interviews -->
  <?php include($path_inc."latest-interviews.php"); ?>
</main>

<!-- // Global Footer -->
<?php include($path_inc."footer.php"); ?>