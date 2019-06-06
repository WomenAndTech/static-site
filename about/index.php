<?php
  $page = "about";
  $page_title = 'About Us';
  $page_theme = 'theme-purple';
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>


<main role="main" data-page>
  <article class="page">

    <!-- // Secondary Header -->
    <header class="no-border header-secondary">
      <h2>We’re not endorsing the obvious. We’re commending the awesome.</h2>
      <p>Our industry is filled with <a href="http://womenandtech.com/archive/">smart, interesting women</a> including developers, designers, entrepreneurs, and tech leaders. These women are a big deal, and we think you should know about them. We highlight them not for their gender, but because they are awesome by any kind of measure.</p>
    </header>

    <section class="border page-content">
      <div class="wrapper-sm">
        <h2>About Us</h2>
        <p>This little project launched in 2012; a time when gender equality conversations were just gaining momentum. We founded Women&&Tech to challenge the idea of tech as a male-dominated field. Our goal was to invite and interview 50 women we admire out for a coffee, talk to them about their work, their experiences and their awesomeness, and share these conversations with the world. By sharing these stories, we wanted to recognize the efforts of women in this industry and contribute to a community that elevates one another.</p>
        <p>We’ve interviewed designers, developers, entrepreneurs and multi-faceted women who are shaping and navigating the tech industry. Though we started in Toronto, our readers came from all over the world.  We've shared contributions from people who have interviewed women in their own cities and communities. Women who are contributing to the tech industry in their own ways. We feel humbled and encouraged by the response and reach we’ve had in the community.</p>

        <h3>2017 Redesign</h3>
        <p>While we loved our old website&mdash;and we know you did too&mdash;we needed an update for technical and logistical reasons and, more importantly, to represent the direction of our project more accurately.<p>
        <p>As part of this redesign, we simplified our publishing process and made a bigger effort to be more inclusive. We wanted to share stories of women from different roles, backgrounds and walks of life. This meant looking for more diversity in our nominations. In featuring each individual woman we paint a fuller picture of our community and our industry. Our brand identity was redesigned to reflect this, adding more color and flexibility to our design system which reflects the individuality and variety of women who work in this industry. </p>

        <p>(For more conversations on diversity, inclusion, tokenism, bias and privilege, we’ve collected <a href="https://medium.com/p/699946389fb/" title="Go to our Medium post with articles highlighting diversity and inclusion">some articles</a> that we think shed light on these topics.)</p>

        <h3>2019 Project End</h3>
        <p>As of June 6, 2019, we've decided to close out this project. <a href="http://womenandtech.com">Read our closing letter</a>.<p>

        <h2>Supporters</h2>
        <p>Our team does this project in our spare time, so we appreciate any support from our friends and community. We mean it: Thank you!</p>

        <div class="supporter-logos no-underline">
          <a href="http://camptech.ca"><img src="<?php echo $path_img; ?>camp_tech_logo.png" alt="Camp Tech logo"></a>
          <a href="http://www.ecentricarts.com/"><img src="<?php echo $path_img; ?>ecentricarts.png"alt="ecentricarts logo"></a>
          <a href="http://fitc.com/"></a><img src="<?php echo $path_img; ?>fitc_logo.png" alt="FITC logo"></a>
          <a href="http://www.microsoft.com/en-us/diversity/"><img src="<?php echo $path_img; ?>microsoft.png" alt="Microsoft logo"></a>
          <a href="http://peopleandcode.com/"></a><img src="<?php echo $path_img; ?>peopleandcode.png" alt="People & Code logo"></a>
        </div>
      </div> <!-- cls wrapper-sm -->
    </section>

    <!-- // Team Signature -->
    <div class="border signature">
      <p>
        with <i class="fa fa-heart-o theme-color" aria-hidden="true" title="love"></i><span class="screen-readers">love</span>
        from <span class="team theme-color">the Women&&Tech team</span>
      </p>
    </div>

    <!-- // Team Listing -->
    <aside class="border team-listing">
      <ul>
        <!--li>
          <p class="name"><a href="http://twitter.com/CassKaiser">Cassie Kaiser</a></p>
          <p class="role">Lead Designer, Coordinator</p>
          <!--p>Cassie is key to our design and operations as Lead Designer and Managing Coordinator. Cassie is currently a UX Researcher @shopify Toronto.</p-->
        <!--/li-->
        <li>
          <p class="name"><a href="http://twitter.com/raykao">Ray Kao</a></p>
          <p class="role">Operations & Support</p>
          <!--p>As one of our founding members, Ray is integral to our daily operations offering his technical support in every way. Ray is currently Open Source Tech Lead @microsoftcanada.
            </p-->
        </li>
        <li>
          <p class="name"><a href="http://twitter.com/ivonnekn">Ivonne Karamoy</a></p>
          <p class="role">Designer, Director</p>
          <!--p>As one of our founding members, Ivonne continues to manage and direct this project and our team. Ivonne is an independent freelance designer focusing on branding and UX/UI design.</p-->
        </li>
        <!--li>
          <p class="name"><a href="http://twitter.com/RoastedKeyboard">Ria Lupton</a></p>
          <p class="role">Editor, Community Builder</p>
          <!--p>Ria is our chief editor and our lead community builder. She is founder of @communitybuilders and helps us develop our community through partnerships within the tech community.</p-->
        <!--/li-->
        <li>
          <p class="name"><a href="http://twitter.com/christinatruong">Christina Truong</a></p>
          <p class="role">Developer, Front-End Architect</p>
          <!--p>Christina is our Lead Front-End Architect and Developer. She's built our site from the ground up to be scalable and flexible yet light weight. She is an independent developer, educator, consultant and diversity advocate.</p-->
        </li>
        <li>
          <p class="name"><a href="http://twitter.com/victoriawhang">Victoria Whang</a></p>
          <p class="role">Designer, Social Media Engagement</p>
          <!--p>Victoria wears many hats and has helped us with everything from producing content, photography, design and she's the one behind our social campaigns. Say hi to her on our twitter and instagram.
            </p-->
        </li>
      </ul>
      <p>&nbsp;</p>
      <p class="type-xsm italic">All of us conduct interviews, produce content and shape the direction of W&&T. </p>
      <p class="type-xsm italic">
      Special thanks to our founder <a href="https://twitter.com/cassiemc">Cassie McDaniel</a>, our <a href="https://twitter.com/britburger">founding</a> <a href="https://twitter.com/brttb">team</a> <a href="https://twitter.com/milang">members</a>, past <a href="http://twitter.com/CassKaiser">team</a> <a href="http://twitter.com/RoastedKeyboard">members</a> and supporters.
    </aside>

    <footer class="no-border footer-secondary">
      <div class=wrapper-sm>
        <h2>Follow Us</h2>
        <p>Find us on <a href="http://twitter.com/WomenAndTech">Twitter</a>, <a href="http://www.facebook.com/womenandtech/">Facebook</a> and <a href="http://www.instagram.com/WomenAndTech/">Instagram</a>.</p>
      </div>
    </footer>

  </article>
</main>

<?php include($path_inc."footer.php"); ?>
