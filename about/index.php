<?php
  $page = "about";
  $page_title = 'About Us';
  $page_theme = 'theme-purple';
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

<!-- // Secondary Header -->
<header class="no-border header-secondary">
  <h2>We’re not endorsing the obvious. We’re commending the awesome.</h2>
  <p>Our industry is filled with <a href="#">smart, interesting women</a> including developers, designers, entrepreneurs, and tech leaders. These women are a big deal, and we think you should know about them. We highlight them not for their gender, but because they are awesome by any kind of measure.</p>
</header>
<main role="main" class="default-page">
  <article class="border">
    <div class="wrapper-sm">
      <h2>Letter to our Readers</h2>
      <p>This little project launched in 2012, a time when gender equality conversations was just gaining momentum. When we founded <a href="#">Women&&Tech</a>, it was to challenge the ideas of tech as a male-dominated field. We wanted to share stories of women working in tech in order to showcase the wealth of talent that resides in our industry. Women&&Tech became a passion project for our entire team. </p>

      <h2>Supporters</h2>
      <p>Our team does this project in our spare time, so support from our friends and community truly keeps us going. We mean it: Thank you!</p>
      <p>If you are interested in sponsoring a future interview, <a href="mailto:contact@womenandtech.com">contact us</a>.</p>

      <div class="supporter-logos no-underline">
        <a href="http://camptech.ca"><img src="<?php echo $path_img; ?>camp_tech_logo.png" alt="Camp Tech logo"></a>
        <a href="http://www.ecentricarts.com/"><img src="<?php echo $path_img; ?>ecentricarts.png"alt="ecentricarts logo"></a>
        <a href="http://www.microsoft.com/en-us/diversity/"><img src="<?php echo $path_img; ?>microsoft.png" alt="Microsoft logo"></a>
        <a href="http://peopleandcode.com/"></a><img src="<?php echo $path_img; ?>peopleandcode.png" alt="People & Code logo"></a>
      </div>

      <!-- // Team Signature -->
      <div class="border signature">
        <p>
          with <i class="fa fa-heart-o theme-color" aria-hidden="true" title="love"></i><span class="screen-readers">love</span>
          from <span class="team theme-color">the Women&&Tech team</span>
        </p>
      </div>
    </div> <!-- cls wrapper-sm -->

    <!-- // Team Listing -->
    <aside class="border team-listing">
      <ul>
        <li>
          <p class="name"><a href="http://twitter.com/CassKaiser">Cassie Kaiser</a></p>
          <p class="role">Designer</p>
        </li>
        <li>
          <p class="name"><a href="http://twitter.com/raykao">Ray Kao</a></p>
          <p class="role">Developer</p>
        </li>
        <li>
          <p class="name"><a href="http://twitter.com/ivonnekn">Ivonne Karamoy</a></p>
          <p class="role">Designer</p>
        </li>
        <li>
          <p class="name"><a href="http://twitter.com/RoastedKeyboard">Ria Lupton</a></p>
          <p class="role">Communications</p>
        </li>
        <li>
          <p class="name"><a href="http://twitter.com/christinatruong">Christina Truong</a></p>
          <p class="role">Developer</p>
        </li>
        <li>
          <p class="name"><a href="http://twitter.com/victoriawhang">Victoria Whang</a></p>
          <p class="role">Designer</p>
        </li>
      </ul>
      <p class="thanks">All of us conduct interviews, produce content and shape the direction of W&&T. <br>
      Special thanks to our founder Cassie McDaniel, past team members and supporters. If you have ideas about how you can help, <a href="mailto:contact@womenandtech.com">email us</a>.</p>
    </aside>
  </article>

  <footer class="no-border footer-secondary">
    <h2>Contact Us</h2>
    <p>Follow us on <a class="white-links" href="http://twitter.com/WomenAndTech">Twitter</a>, <a href="http://www.facebook.com/womenandtech/">Facebook</a> and <a href="http://www.instagram.com/WomenAndTech/">Instagram</a>.</p>
    <p>Don't hesitate to <a href="mailto:contact@womenandtech.com">email us</a>.</p>

    <h2 class="spacer30">Want to help?</h2>

    <p><img class="spacer30-bottom" src="<?php echo $path_img; ?>coffee-icon.png" alt="Coffee" width="50px"></p>

    <p><a href="#">Donate</a> a cup of coffee or tea.</p>
    <p>We also welcome contributors, volunteers and sponsors.</p>
    <p>Check out our <a href="http://womenandtech.com/contributor-guidelines/">Contribute</a> page for more information on how you can help.</p>
  </footer>
</main>

<?php include($path_inc."footer.php"); ?>
