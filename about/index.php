<?php
  $page = "about";
  $page_title = 'About Us';
  $page_theme = 'theme-blue';
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

<main role="main">
  <!-- // Default header content -->
  <article class="border">
    <div class="wrapper-sm">
      <h2>About Us</h2>
      <p>This little project launched in 2012, a time when gender equality conversations was just gaining momentum. When we founded <a href="#">Women&&Tech</a>, it was to challenge the ideas of tech as a male-dominated field. We wanted to share stories of women working in tech in order to showcase the wealth of talent that resides in our industry. Women&&Tech became a passion project for our entire team. </p>
    </div>
  </article>
  <!-- // Team Listing -->
  <aside class="border team-listing">
    <ul>
      <li>
        <p class="name">Cassie Kaiser</p>
        <p class="role">Managing Coordinator</p>
      </li>
      <li>
        <p class="name">Ivonne Karamoy</p>
        <p class="role">Managing Director</p>
      </li>
      <li>
        <p class="name">Christina Truong</p>
        <p class="role">Lead Developer</p>
      </li>
      <li>
        <p class="name">Ray Kao</p>
        <p class="role">Tech Lead</p>
      </li>
    </ul>
    <p class="thanks">Special thanks to our founder Cassie McDaniel, past team members and supporters.</p>
  </aside>

  <!-- // Team Signature -->
  <div class="border signature">
    <p>
      with <i class="fa fa-heart-o theme-color" aria-hidden="true" title="love"></i><span class="screen-readers">love</span>
      from <span class="team theme-color">the Women&&Tech team</span>
    </p>
  </div>
</main>

<?php include($path_inc."footer.php"); ?>