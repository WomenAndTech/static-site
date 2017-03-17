<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-blue';
  $interviewee_name = 'Karen Schulman Dupuis'; // Page title & share links
  $interviewee_url = 'karen-schulman-dupuis'; // Share links URLs

  /*
    INTERVIEW CREDITS:
    If you need a second name, add a variable with a '2' the end. Example:
    $interviewer = "First Person";
    $interviewer_url = "http://twitter.com";
    $interviewer2 = "Second Person";
    $interviewer_url2 = "http://mywebsite.com";

    If you don't need a credit, delete the whole <li> in the HTML.
  */
  $interviewer = "Kelly Seagram";
  $interviewer_url = "http://twitter.com/kelzor";
  $photos = "David Waldman";
  $photos_url = "http://kidwithcamera.com/";
  $editor = "Kelly Seagram";
  $editor_url = "http://twitter.com/kelzor";
  $editor2 = "Cassie McDaniel";
  $editor_url2 = "https://twitter.com/cassiemc";
  $editor3 = "Taylor Marsden";
  $editor_url3 = "https://twitter.com/tkmars";
  $design = "Ivonne Karamoy";
  $design_url = "http://ivonnekaramoy.com";
  $dev = "Brett Bergmann";
  $dev_url = "http://twitter.com/brttb";
  $dev2 = "Audrey Kuo";
  $dev_url2 = "https://twitter.com/martianmoose";
  $transcribe = "Kelly Seagram";
  $transcribe_url = "http://twitter.com/kelzor";


  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

  <main role="main" class="interview">
    <!-- Featured Image -->
    <div class="border img-feature">
      <figure>
        <img src="<?php echo $path_img; ?>featured-karen-schulman-dupuis.jpg" alt="Karen Schulman Dupuis">
      </figure>
    </div>

    <!-- Interview Header -->
    <header class="border header-interview">
      <div class="wrapper-sm">
        <h2>Karen Schulman Dupuis</h2>
        <p>Karen is Manager, Business Development, ICE Practice at&nbsp;<a title="MaRs Discovery Center" href="http://www.marsdd.com/" target="_blank">MaRS</a>. She is passionate about online communication and the relationship between technology and the human condition.</p>

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

    <!-- Q&A -->
    <dl class="border">
      <dt class="interview-q">Tell me about your role at MaRS.</dt>
      <dd class="interview-a">
        <p>I’m Manager of Business Development for the ICE practice – Information Technology, Communications, Entertainment – at <a href="http://www.marsdd.com/">MaRS Discovery District</a> [a Toronto hub dedicated to supporting entrepreneurs]. My role is about building connections. I make sure MaRS is present at community events and help connect with talent, looking for high-potential, high-growth startups that are beyond the idea stage that are kind of “forming and storming” is what I call it; they’re beyond initial development–they’re accelerating and evolving.</p>
        <p>Obviously anybody who’s doing great stuff we want to be able to work with and talk to. We help introduce companies that are beyond minimum viable products to the investor community. That’s what we’re here to do.</p>
      </dd>
    </dl>

    <dl class="border">
      <dt class="interview-q">Is your background more technical- or communications-based?</dt>
      <dd class="interview-a">
        <p>A blend of both actually.</p>
        <p>I always found opportunities to engage with technology wherever I could. I was self taught in voice, data and internet technology, which eventually led me to teaching those subjects at the enterprise level. I was also programming with my gifted classes in grade five, before I even knew that I could actually study computer science as an option. My mom was one of the first women I ever knew who was learning DOS and <a href="http://www.techrepublic.com/pictures/dinosaur-sightings-lotus-symphony-30/1/">Symphony</a>. So I guess I got a little bit of that taste from her. I've also always been able to take very dense, seemingly boring electronics and data technology and communicate it so that people could understand its importance.
        People think learning is black and white, that there's one way to write a line of code, for example, and that's the way you do it. There is a way to do it, but there are a whole bunch of creative methods. There is a lot of grey in the world. I love living in the grey, and explaining things through that grey filter.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I think that for me, literacy is about understanding how technology has impacted the human experience throughout history.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">I'm interested in your definition of technological literacy.</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>For me it's a Renaissance term. I'm a lifetime learner. I love anthropology, I love poetry, I love art, I love how these things all connect. As a kid I loved Da Vinci, and it was not just the Mona Lisa–it was looking at his drawings, his creations and his inventions and thinking, “How could you think that way?”</p>
        <p>I think coding is a good skill to have, I think we should be teaching it early, in elementary and middle school. Absolutely we should be building that kind of functional literacy. But I don't think for a second that you can separate technology from its impact on society. You can’t separate it from art. I think that for me, literacy is about understanding how technology has impacted the human experience throughout history.</p>
      </dd>
    </dl>


    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-karen-schulman-dupuis-panel.jpg" alt="Karen Schulman Dupuis panel">
        <figcaption>
          At meshmarketing 2013 last November, Karen shared her thoughts on social media and the latest marketing trends. Photo credit:
        <a href="http://meshconference.com/newsroom/" target="_blank">mesh/newsroom</a>
        </figcaption>
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What technology has most affected you personally?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Social media, for sure. For me Twitter was the platform that absolutely changed my life.</p>
        <p>When I moved out of Toronto thirteen years ago with my family to Stratford, Ontario, I found it hard to connect with people I felt were like me. I started tweeting about local stuff and began to realize I was not just speaking to Stratford, there was a wider network there. I've met some incredible people online who are immensely talented and creative and fun and intelligent.</p>
      </dd>
    </dl>


    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Do you have any advice for people in terms of connecting to communities with social media and finding their voice?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>First of all, listen. Find out what's going on, follow the followers, find something that interests you or someone that you think is pretty cool, or if somebody has a great audience online, look at who's following them and at who they're following.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>The braver you are about putting your stuff out there, the more you find that like-mindedness and that kin.</p>
    </aside>


    <dl class="border">
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I'm unabashedly opinionated, so it's anyone's choice to not follow me. I absolutely use blue language. You will find me cussing up a storm at times, calling crap out, you'll see more than a few four-letter-words on my stream. But you know, I guess I am fearless about it. It am just, “This is who I am, this is what I believe in, this is a thing I think is amazing.” The reality is that the braver you are about putting your stuff out there, the more you find that like-mindedness and that kin. You find one another.</p>
      </dd>
    </dl>


    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Have you had any challenges segmenting your voice between your personal account and when you were representing MaRS online?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>There are certainly challenges, for sure, but I don't have a problem with it. Some voices in the MaRS ecosystem are really cutting-edge and can be controversial. And on the personal side, I'm totally behind them. I'm like, Fight the power! Be a disruptor, mix it up! But I also recognize that I have a responsibility to MaRS and that is to not jeopardize its relationships based on my own personal politics.</p>
      </dd>
    </dl>

    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-karen-schulman-dupuis-speaking.jpg" alt="Karen Schulman Dupuis speaking">
        <figcaption>
          Photo credit:
        <a href="https://www.flickr.com/photos/screamingflamingdeath/" target="_blank">James Bastow</a>
        </figcaption>
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">You still live in Stratford, but your office is 2.5 hours away in Toronto. How do you balance that?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I have an amazingly supportive environment at MaRS. I try to do a stretch of days at home telecommuting, for example I’ll do Monday and Friday at home then will be in Toronto Tuesday through Thursday.</p>
        <p>It’s a tax on my home life for sure, but being in the community–talking to people, finding out what people are doing–that’s the stuff that invigorates me. So although my husband misses me being at home, and I miss cuddling up in bed with him every night, those are really well-spent hours and well-spent days. My schedule adjusts of course, if I need an extra day at home or if I need to do four or five days in the city that week, then so be it, it’s that kind of a week.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>It's a responsibility for parents to know what's going on in our kids' lives and to not be afraid of technology and social platforms.</p>
    </aside>


    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">There are always tradeoffs.</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I remind my husband all the time that we’re in our prime earning years. This is when we get to really forge ahead in our individual careers.</p>
        <p>My daughter is almost twenty-two and she's in her third year at Guelph University in Criminal Justice and Public Policy, and I have nine-year-old twin boys who are <em>really</em> nine and <em>really</em> boys. [Laughs]</p>
        <p>As our kids get older, I’m able to focus on my career and to do things that are more for me. I’m a firm believer: Happy mummy, happy family. Happy parents, happy family. My husband and I are still very much in love and very supportive of one another, so it’s all good. When we’re feeling slighted, or needy, or pissed, we say so.</p>
      </dd>
    </dl>

    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-karen-schulman-dupuis-collage.jpg" alt="Karen Schulman Dupuis collage">
        <figcaption>
          Photo credit:
        <a href="https://twitter.com/karensd" target="_blank">Karen Schulman Dupuis</a>
        </figcaption>
      </figure>
    </div>


    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Kids are engaging in social media so much younger these days – what is your awareness of your kids’ lives online? How connected are you?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>The rule was, “In my house, I have your password until you leave.” My daughter balked at it but really didn't fight it. That was my rule. If you're going to be online, I'm going to be monitoring everything. My boys are too young to be on a social platform yet.</p>
        <p>I cringe at parents who say, “Don't be your kid's friends on Facebook”. I say, it's your responsibility to be your kid's friend on Facebook, especially in those teen years. When I was a kid in school, if you got into a fight you went home where you had that reprieve. You had that space to talk and deflate and be in a safe, secure environment to deal with things. Kids don't have that same opportunity now–it's constant.</p>
        <p>It's a responsibility for parents to know what's going on in our kids' lives and to not be afraid of technology and social platforms. Even if it's just listening, that's an important role too.</p>
        <p>You have to make the rules. You're the parent. My mother always used to say to me, “I'm not your friend, I'm your mother.” And I used to say to my daughter and I'll say to my boys, “I'm a friendly mother, but I'm your mother.”</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Does MaRS have any initiatives targeting under-represented demographics of entrepreneurs?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>There have been discussions specifically around how we engage with women entrepreneurs.</p>
        <p>A great example was when <a href="http://www.daphnekis.com/" title="About Daphne Kis" target="_blank">Daphne Kis</a> came to Toronto a little while ago. She’s a venture capitalist and an angel investor from New York, and she runs an investor group called <a href="http://www.goldenseeds.com/">Golden Seeds</a> which specifically looks at women-led ventures. </p>
        <p><a href="http://startupgrind.com/">Startup Grind</a> Toronto hosted her and very graciously introduced us. We were able to get 25 female-led startups in front of Daphne to ask questions. It wasn’t a pitch session, but it was an opportunity to get the real deal straight from the horse’s mouth. The community responded incredibly well to that. That’s what we want to do, to reach out and serve those demographics that haven’t been served historically.</p>
        <p>There’s been some talk in the media about how <a href="http://www.forbes.com/sites/geristengel/2014/01/08/11-reasons-2014-will-be-a-break-out-year-for-women-entrepreneurs/">2014 is going to be the year of the Woman Entrepreneur</a>. I’m already seeing that momentum and I’m hoping to serve that, among other under-served spaces as well. I think with focus we’re able to hone in on the talent and on the advisors to provide the support network these groups need.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>It was scary putting myself out there as a professional in a field where I had no experience. But nothing ventured, nothing gained.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Here’s a question for you from our previous interviewee, Melissa Dominguez: Is there a time when you’ve done something scary and it’s turned out to be absolutely the right decision?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Yes. I used to work from home for a telecom company and was never in the city. I remember even just considering leaving that situation and going for the job at MaRS. I was in Toronto for a conference and I called up my husband and said, “Oh my God, this job has just opened up at MaRS, and I’m going to apply for it. But you need to be okay with this, because if I do this every single thing about our every daily lives is going to change.” And he was like, “Babe, whatever makes you happy. Let’s go for it.” And that was it.</p>
        <p>It was scary leaving an industry I’d been in for fifteen years. It was scary putting myself out there as a professional in a field where I had no professional experience or credibility. I wasn’t confident. That’s the thing. I had Impostor Syndrome – I thought, “Oh my God they’re going to find out I’m full of shit, I can’t do this.” But nothing ventured, nothing gained (that’s something I say all the time). And it was one hundred percent the best thing I have ever done for myself.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>Make sure that when we talk to young girls, we don’t focus on their appearance [...] Next time you meet a girl between the ages of two and eighteen, ask her instead about her interests.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">In our last interview, <a href="http://womenandtech.com/interview/amber-macarthur/">Amber MacArthur</a> asked: How can we encourage a younger generation of women to care more about brains than beauty when they’re bombarded with images such as Miley Cyrus twerking?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>On an individual level, one of the most important things we can do is to make sure that when we talk to young girls, we don't focus on their appearance as the topic of conversation. Every time we meet a little girl and say, "Oh, aren't you the cutest! What a pretty dress!" we’re reinforcing the idea that her appearance is the most important thing about her.</p>
        <p>Next time you meet a girl between the ages of two and eighteen, ask her instead about her interests, her favorite book, or her favorite subject at school. Ask her to tell you about her hobbies.</p>
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
          <?php if ($editor2): echo ', <a href="'.$editor_url2 .'">'.$editor2.'</a>';endif; ?>
          <?php if ($editor3): echo 'and <a href="'.$editor_url3 .'">'.$editor3.'</a>';endif; ?>
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
          <?php if ($transcribe2): echo 'and <a href="'.$transcribe2_url .'">'.$transcribe2.'</a>';endif; ?>
        </li>
      </ul>
      <?php include($path_inc."site-credits.php"); ?>
    </footer>

    <!-- // Latest 3 Interviews -->
    <?php include($path_inc."latest-interviews.php"); ?>
  </main>

<?php include($path_inc."footer.php"); ?>
