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
      <p>We’re relaunched! Let us tell you why…</p>
      <p>This little project launched in 2012, a time when gender equality conversations was just gaining momentum. When we founded Women && Tech, it was to challenge the ideas of tech as a male-dominated field. Our original goal was to invite and interview 50 women we admire out for a coffee, talk to them about their work, their experiences and their awesomeness, and share that with the world. By sharing these stories, we wanted to recognize the efforts that women are contributing to this industry, while also elevating one another.</p>
      <p>We’ve interviewed designers, developers, entrepreneurs and multi-faceted women who are shaping and navigating the tech industry. Though we started in Toronto, our readers come from all over the world.  We have shared contributions from other people who have interviewed women in their own cities and communities and are doing their part to elevate and encourage more diversity in our industry. We feel, humbled and encouraged by the response and reach we’ve had in the community.</p>
      <p>Women && Tech has always been a passion project, and behind the scenes we’ve shifted team members, changed hands and struggled to keep up with a publishing schedule that was burdened by an inefficient publishing process. </p>

      <h3>The Publishing Process</h3>
      <p>While we loved our old website–and we know you did too–the publishing process behind it was inefficient and not scalable. Our initial idea for the site included crafting and designing each interview to reflect the personality of each interviewee. The idea never came to fruition because custom designing and developing each interview took too much time–on top of conducting the interview and transcribing. We realized quickly that each interview took more time than we initially expected.  Through this process, we learned that though the design of the website was important, custom designing each interview was not necessary. What was important was the content, the people, the stories. So we focused on that. And we’re glad we did.</p>
      <p>However, a fundamental issue remained. Our site architecture still required custom work and development to publish each interview. That’s where we lost our stride. Maintaining our publishing schedule with such a big production process was unnecessary. Our plans over the years to overhaul the site was stalled by life–work, family and other projects took over and this little passion project of ours suffered from lack of consistency. </p>
      <p>Throughout all of this, one thing was clear: these individual stories were important. We know you’ve loved the interviews. Even with an inconsistent publishing schedule, we’ve maintained a large mailing list, and our Twitter followers has grown to over 10,000 since we launched. We can’t thank the community enough for supporting us and taking part in our conversation. So although our team and the project has wavered, there’s still a community out there that we wanted to contribute to.</p>
      <p>We found ourselves at a crossroads. Something needed to change for the project to continue, and we needed to ask ourselves some hard questions. Would we end the project? Did we still want to work on it? Had the passion died?</p>
      <p>We took some time to step back and look at the big picture. There’s a lot of really supportive communities out there for women in tech and we helped to contribute to that. For that we are proud.</p>

      <h3>Diversity and Inclusion</h3>
      <p>Gender diversity in tech continues to be important and since we launched, the conversation has grown. It’s wonderful to see that people and organizations are trying to improve the landscape.</p>
      <p>We began to realize that our contributions weren’t enough. This project was meant to showcase gender diversity in tech. And we still believe in continuing to do that. But as this conversation continues to grow, it has become all too easy to equate diversity to mean more women. And though not necessarily intentional, mostly white women and entrepreneurs. Within our own nominations, we’ve noticed this pattern. In addition to the lack of racial diversity, many other underrepresented groups and roles were not being elevated.</p>
      <p>From the beginning, we wanted to talk to women from all walks of life. But our roster, though small, has mainly followed this pattern. We want to make a conscious effort to do better. The conversation needs to change. And it may get uncomfortable. We need to constantly question and critique our community, our leaders, our co-workers, our families, and ourselves. What are we doing to improve the landscape? What can we do in our own circles to make a change?</p>

      <h3>What now?</h3>
      <p>So what’s next for this little project of ours?</p>
      <p>First, we’re simplifying, re-focusing and rebooting: simplifying our site architecture and our process, re-focusing on the stories, and rebooting our project.</p>
      <p>We rebranded. We’ve loved our old site design but it was time for a refresh, and an identity that reflects the diversity that is core to this project.</p>
      <p>Second, we’re making a bigger effort to be more inclusive. We want to share stories of women from different roles, backgrounds, and walks of life. This means we’ll be looking for more variation in our nominations. We hope you’ll help us and continue to introduce us to these women. In sharing these stories, we continue to feature the individual, their contributions, their experiences and their awesomeness. We’re still not endorsing the obvious, we’re commending the awesome. </p>
      <p>Thank you for sticking by us and contributing to the conversation. We hope you continue to support us, to get to know the people that make our industry great and to find comfort and inspiration in their stories.</p>
      <p>For more conversations on diversity, inclusion, tokenism, bias and privilege, we’ve collected some articles that we think shed light on these topics via Medium.</p>
      <p>To contribute an interview or volunteer with the team, please <a href=”mailto:volunteer@womenandtech.com”>email us</a>.</p>
      <p>Please donate to our little project if you can. This will help us to continue to provide real, meaningful, and diverse stories.
        <insert link to donate platform></p>

      <h2>Supporters</h2>
      <p>Our team does this project in our spare time, so support from our friends and community truly keeps us going. We mean it: Thank you!</p>
      <p><a href=”mailto:contact@womenandtech.com”>Contact us</a> for sponsorship opportunities.</p>

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
          <!--p class="role">Designer</p-->
        </li>
        <li>
          <p class="name"><a href="http://twitter.com/raykao">Ray Kao</a></p>
          <!--p class="role">Developer</p-->
        </li>
        <li>
          <p class="name"><a href="http://twitter.com/ivonnekn">Ivonne Karamoy</a></p>
          <!--p class="role">Designer</p-->
        </li>
        <li>
          <p class="name"><a href="http://twitter.com/RoastedKeyboard">Ria Lupton</a></p>
          <!--p class="role">Communications</p-->
        </li>
        <li>
          <p class="name"><a href="http://twitter.com/christinatruong">Christina Truong</a></p>
          <!--p class="role">Developer</p-->
        </li>
        <li>
          <p class="name"><a href="http://twitter.com/victoriawhang">Victoria Whang</a></p>
          <!--p class="role">Designer</p-->
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
