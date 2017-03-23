<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-purple';
  $interviewee_name = 'Biying Miao'; // Page title & share links
  $interviewee_url = 'biying-miao'; // Share links URLs

  /*
    INTERVIEW CREDITS:
    If you need a second name, add a variable with a '2' the end. Example:
    $interviewer = "First Person";
    $interviewer_url = "http://twitter.com";
    $interviewer2 = "Second Person";
    $interviewer_url2 = "http://mywebsite.com";

    If you don't need a credit, delete the whole <li> in the HTML.
  */
  $interviewer = "Ruby Watson";
  $interviewer_url = "https://twitter.com/heyrubyjean";
  $photos = "Amanda Huang";
  $photos_url = "http://twitter.com/itsamanda_h";
  $editor = "Ruby Watson";
  $editor_url = "https://twitter.com/heyrubyjean";
  $editor2 = "Ivonne Karamoy";
  $editor_url2 = "http://www.ivonnekaramoy.com/";
  $ad = "Cassie Kaiser";
  $ad_url = "http://www.cassiekaiser.com/";
  $design = "Cassie Kaiser";
  $design_url = "http://www.cassiekaiser.com/";
  $dev = "Audrey Kuo";
  $dev_url = "http://twitter.com/MartianMoose";
  $dev2 = "Brett Bergmann";
  $dev_url2 = "http://twitter.com/brttb";
  $transcribe = "Ruby Watson";
  $transcribe_url = "https://twitter.com/heyrubyjean";


  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

  <main role="main" class="interview">

    <!-- // Featured Image -->
    <div class="border img-feature">
      <figure>
        <img src="<?php echo $path_img; ?>featured-biying-miao.jpg" alt="Biying Miao">
      </figure>
    </div>

    <!-- // Interview Header -->
    <header class="border header-interview">
      <div class="wrapper-sm">
        <h2>Biying Miao</h2>
        <p class="intro">Biying Miao is the co-founder of <a title="Hot Pop Factory" href="http://www.hotpopfactory.com">Hot Pop Factory</a>, a 3D Printing and Digital Fabrication Design Studio. The self-proclaimed art-geek has worked on projects exhibited at the Royal Ontario Museum, the Textile Museum of Canada and the Art Gallery of Ontario.</p>

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
      <!-- // Question -->
      <dt class="interview-q">Where did you grow up and what were you like as a child?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>My family moved to Canada from Shanghai when I was in fourth grade, and I grew up in Toronto. I was a very creative child who loved drawing and making things with my hands. Coming from a Chinese family, I was encouraged to play music but gravitated toward freeform arts, so learning an instrument in the classical sense never became something that I honed. I actually wish that I had done that. My 3D printers sound like singing robots, so that’s the music I make now. I’m sure if I put the time in, I could remix it into a pretty sweet song.</p>
        <p>I was always a bit of an art and music geek so when it came time to choose a career path I leaned toward architecture because it was a mix of art, science, and technology; all things that are very much a part of who I am.</p>
      </dd>
    </dl>

    <aside class="border pull-quote">
      <p>Digital fabrication allows for a physical reality that’s much more transient, dynamic, and customized by the individual.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">How do you explain your work to people who have never seen a 3D printer before and what do your parents think of Hot Pop Factory?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>In order to teach people what do we began leading workshops. We encourage folks to come in, get their hands dirty with the technology, and see the printers in action.</p>
        <p>Because digital fabrication has the capacity to realize a wide variety of ideas, our projects tend to range a lot in size, application, and industry - from designers, to brands, to hardware startups. I tell my parents that I make things with robots. That’s kind of a whimsical way of describing the nitty-gritty, but they’re always intrigued.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Hot Pop Factory offers <a href="http://www.hotpopfactory.com/workshops/" target="_blank" class="ng-scope">workshops</a> to people interested in learning more about digital fabrication. Who seems most interested in and receptive to these workshops?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>When we first started the workshops we received a lot of interest from young professionals in the design and engineering fields hoping to make the transition to 3D. Since then, we continue to meet people across different industries. I think this is because the technology intrigues so many people, no matter what field they’re in. We try to offer very accessible workshops, and love the interest that people have expressed so far.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">You received a bachelor’s degree from the <a href="https://uwaterloo.ca/architecture/" target="_blank" class="ng-scope">School of Architecture</a> at the University of Waterloo. I’m curious about your previous exposure to digital fabrication and 3D technologies while you were in school.</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>The design process for an architect always includes making scaled models before construction because you’re often dealing with large buildings and big budgets. We used digital fabrication to translate our drawings, which lived in the computer, into physical reality as scaled 3D-printed models. When I was going to school this was still a really expensive technology, so we only used it for big budget projects. Otherwise we would make the models by hand. Throughout my architecture career, I began to see the transition from completely hand-made models to digitally fabricated ones. That became a real fascination for me, because it can be quite tedious trying to build curves with 2D pieces of card. As the technology improved, we were making finished products rather than just prototypes or scaled models. This was when I began to transition into creating 3D printed products by Hot Pop Factory.</p>
      </dd>
    </dl>

    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-biying-miao-bot.jpg" alt="MakerBot">
        <figcaption>Photo credit: Amanda Huang</figcaption>
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Given the ubiquity of digital technology in our everyday lives, what are your hopes or predictions for the future of 3D technologies?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>The transient nature of the way we take in information is going to start infiltrating the physical world. We’re used to scrolling through tons of information that is updated every second. Just like your news feed can be personalized to display exactly what you want to see, the products we own will be customized to fit our bodies and personality perfectly. Digital fabrication allows for a physical reality that’s much more transient, dynamic, and customized by the individual. You may wish to never wear the same shirt more than once. Our wardrobes could be just as dynamic as our Facebook feed.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>We’ll see fewer gadgets, and more integration with the body… Fashion is really important because it’s one of the closest things to you.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Wearable technology is a growing market, and I would love to know your thoughts on the intersection of fashion design and technology.</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>As technology for wearables becomes more pervasive, I think it will start to disappear. What I mean is that we’ll see fewer gadgets, and more integration with the body. That’s why wearable tech is so prevalent and desirable by the masses. As long as a phone is separate from you, it’s still a device. Your phone still goes in your pocket at this moment, but it’s going to get even closer. If that phone can be incorporated into your watch, or products you put in your hair, or your contact lenses, then the technology begins to ‘disappear’. Mini computers will be much closer to your body and therefore more intimate with all the things you do throughout the day. Fashion is really important because it’s one of the closest things to you – other than nano-technology and devices that are embedded in your body…that’s super sci-fi.</p>
        <p>I’m excited for technologies to start becoming truly integrated into our lifestyle and fashion sense rather than superficially, which they are at the moment. What I mean by “superficial” is devices continuing to exist as add-ons. I’m looking forward to seamless integration of an application. I’m not necessarily excited about Google glass, but I like the direction that’s pushing. I’m sure Google isn’t saying: “Oh Google Glass is awesome!” they’re moving toward something beyond that.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What other industries seem most eager to incorporate digital fabrication into production? </dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Manufacturing or any industry that has a need for hyper customization is eager to incorporate digital fabrication into production. Fashion designers, jewelry designers, and even advertising agencies are exploring custom-branded experiences. One area I really believe in is the medical application, and 3D printed prosthetics, which have incredible value. It makes economic sense in terms of how much it costs to produce versus how much it’s sold for. It makes practical sense, because amputees need a customized product to fit their body. Prosthetics are customized to an extent, but not really personalized at all. If we could create a 3D printed limb that is a scan of someone’s existing limb, its look and function may be a vast improvement and those who need prosthetics may have greater creative control over how their limb looks and feels. These are the kinds of applications I’m looking forward to, whereas a 3D printed chair may not make very much sense. I could go to Ikea and get some really nice chairs for a fraction of the cost. There are things that make sense right now, and things that don’t.
        </p>
        <p>
        Most recently, we have been working with a lot of hardware and wearable tech startups. We found that a lot of early stage companies have talented engineers and developers on the team but not always an industrial designer or manufacturing lead. This is where we step in and take advantage of the power of digital fabrication to help clients develop iterative prototypes, an MVP [Minimum Viable Product], and line up short-run manufacturing for their first round of production. In fact, we have seen enough of a need for this type of services that we put on a <a href="http://www.hotpopfactory.com/workshops/hardware-startup-workshop/" target="_blank">Hardware Startup Workshop</a> at MaRS on September 27th to address many of these challenges in a group format along with a roster of industry experts.
        </p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>Work/life balance is very difficult. There doesn’t seem to be a way to achieve it without making a compromise.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Not only do you work in an industry that is rapidly evolving, you’re an entrepreneur running a growing business. How is your work/life balance? Is there one?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Should I tell you the truth, or should I lie? [Laughs] Work/life balance is very difficult. There doesn’t seem to be a way to achieve it without making a compromise. I try to pick an extracurricular activity to do, especially in the summertime. I play beach volleyball every week, make sure to see friends as much as possible, and get out of the city.</p>
        <p>I think balance is a constant challenge for every entrepreneur out there. If it’s not, I want to know what the secret is. When I’m at the studio I need to make a conscious decision to stop working at some point and just get out of the office. I try to go for a walk each day, which I find helps to re-set things and give me some time to reflect. Sometimes you’re so deep in the trenches that it’s easy to say, “I gotta just keep working”. It’s terribly difficult to let go.</p>
      </dd>
    </dl>

    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-biying-miao-studio.jpg" alt="Biying Miao Studio">
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">You went to school with co-founder <a href="http://twitter.com/MattCompeau">Matt Compeau</a>. Now you share a home and a company together. What are some of the rewards and challenges of working so closely with your partner?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I’ve known Matt for almost 10 years since we first started school, so we’ve worked together a lot. I see our partnership as a real strength. There is amazing trust and compatibility in the way we work together that’s been developed for so long. A lot of the key ideas behind our business were developed throughout our friendship all these years. In terms of our professional relationship and our personal relationship, I suppose the line is quite blurred. There is, of course, a professionalism that we maintain when we’re at work because now we have employees. Sometimes it’s difficult to separate a personal issue from a professional issue, but it’s one of those things you have to partition in your mind when you approach a problem. Once we moved into our studio and had our business in a separate location than our home, things got much easier.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I think the key to being a great manager is to choose a team you respect, believe in, and want to get to know.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Do you have any mentors or is there anyone whose work inspires you?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p><a href="http://www.irisvanherpen.com/">
        Iris Van Herpen</a>’s work is truly inspiring. Textile work is this magical way of gathering single units which, when added up, become something completely different. This signature aspect of digital fabrication is what attracted me to 3D printing too; one simple motion repeated many, many times. The act of repeating motions and layering smaller pieces that link together can be a beautiful metaphor for operating a small business and building something up from scratch.</p>
        <p>In terms of a mentor, <a href="https://twitter.com/JannaLevitt">Janna Levitt</a> was a professor of mine in architecture school who I later went on to work for. She is someone whom I deeply respect who has a lot of dignity, and handles tough situations with grace. I think women in authoritative positions sometimes get a bad rep and Janna does it with a lot of class. She makes me proud to be a woman. She’s a wonderful person who loves to garden and bake all while being a fantastic architect. She hires fantastic women and men at her practice, <a href="http://lga-ap.com/home">LGA Architectural Partners</a>. It was a nicely balanced workplace, which I think is kind of rare in tech and start-up industries. It’s something that’s molded me in terms of how I work in professional environments as a woman as well as how I would like to run our company looking forward into the future.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">In our last interview, Nyla Ahmad asked: How do you lead or build a team of smart people?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>This is a great question and something that’s very important for a tight-knit company like ours. It’s a significant investment for an employer because your team can make or break your business. What I look for in people that join our team are soft skills over hard skills. A good attitude, work ethic, and respect are essential. Curiosity and an eagerness to learn should also be there. The technical skills can be taught.</p>
        <p>It’s tough to know what the best strategy is for inspiring a great team. I think the key to being a great manager is to choose a team you respect, believe in, and want to get to know. And they need to believe in us too. This is what makes someone want to do a good job. Things are more likely to work out if everyone who is there wants to be there.</p>
      </dd>
    </dl>

    <!-- // Team Signature -->
    <div class="border signature">
      <p>
        with <i class="fa fa-heart-o theme-color" aria-hidden="true" title="love"></i><span class="screen-readers">love</span>
        from <span class="team theme-color">the Women&&Tech team</span>
      </p>
    </div>

    <!-- // Interview Credits -->
    <footer class="border credits">
      <?php  // If you don't need a credit, delete the whole <li>. ?>
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
      <?php include($path_inc."site-credits.php"); ?>
    </footer>

    <!-- // Latest 3 Interviews -->
    <?php include($path_inc."latest-interviews.php"); ?>
  </main>

<?php include($path_inc."footer.php"); ?>
