<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-purple';
  $interviewee_name = 'Melissa Dominguez';; // Page title & share links
  $interviewee_url = 'melissa-dominguez'; // Share links URLs

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
  $editor2 = "Taylor Marsden";
  $editor_url2 = "https://twitter.com/tkmars";
  $ad = "Cassie Kaiser";
  $ad_url = "http://www.cassiekaiser.com";
  $design = "Cassie Kaiser";
  $design_url = "http://www.cassiekaiser.com";
  $design2 = "Ivonne Karamoy";
  $design_url2 = "http://ivonnekaramoy.com";
  $dev = "Brett Bergmann";
  $dev_url = "http://twitter.com/brttb";
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
        <img src="<?php echo $path_img; ?>featured-melissa-dominguez.jpg" alt="Melissa Dominguez">
      </figure>
    </div>

    <!-- Interview Header -->
    <header class="border header-interview">
      <div class="wrapper-sm">
        <h2>Melissa Dominguez</h2>
        <p>Melissa is an engineer and holds a PhD in Computer Science. She is the tech lead for <a title="iTunes link for Gmail App for iOS" href="https://itunes.apple.com/us/app/gmail/id422689480" target="_blank">Gmail for iOS</a> at Google and leads Google Women Engineers&nbsp;Waterloo, a support network for women engineers. It is her mission to show young girls what a career in technology means.</p>

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
      <dt class="interview-q">So, you are the tech lead on Gmail for iOS here at Google, and you are a software engineer --</dt>
      <dd class="interview-a">
        <p>Yes, and I’m also the leader of Google Women Engineers in Waterloo.</p>
      </dd>
    </dl>

    <dl class="border">
      <dt class="interview-q">What’s the purpose and function of Google Women Engineers?</dt>
      <dd class="interview-a">
        <p>One purpose is to foster a sense of connection and belonging amongst women engineers. As I’m sure you know, we're a minority, and it can feel lonely. We want to make sure that nobody feels too alone, so we have social events.</p>
        <p>My personal mission is outreach towards young girls. We’ve had a series of events where we invite a group of middle school or high school girls to come into the office, and say “Hey, this is what a career in technology can be. Look how awesome it is, we get taken care of really well.” We don't talk about the money, although I do tell them that women in technology tend to have a much smaller pay gap. Even in traditional professional fields, like law and accounting, there’s still a large pay gap, but in computer science and engineering it's really small. The gap still exists, which is a bummer, but it's more like ninety-eight cents on the dollar instead of seventy.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>My personal mission is outreach towards young girls [to show them] this is what a career in technology can be.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Describe some of the outreach efforts of Google Women Engineers.</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Typically I will partner with a particular school or an organization like <a href="https://www.girlguides.ca">Girl Guides</a> or <a href="http://www.pathwaystoeducation.ca/en/kitchener">Mosaic Pathways to Education</a>, who help, not just girls, but also other under-represented groups and at-risk youth. We’ll have a group of about thirty girls. I take them on a tour of the office and we do an engineering-related activity, like a game, and then I’ll explain how what we did was related to computer science and engineering: “What you just did was basically discrete finite automata.” Something like that.</p>
        <p>And then I’ll have a panel with five or six engineers. If it's an all-girls event, I try to have all-women or almost-all-women on the panel saying “This is us, we exist! Ask us any questions.” The goal is to foster open give-and-take of ideas and share their paths to getting here. We have a lot of people who have backgrounds in math, physics, or electrical engineering, and we want to make young people aware that there are multiple paths you can take, but you do have to work hard to get here.</p>
      </dd>
    </dl>


    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-melissa-dominguez-university-rochester.jpg" alt="Melissa Dominguez University of Rochester">
        <figcaption>
          Melissa graduated with a PhD in Computer Science from the University of Rochester.
        </figcaption>
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">You have a Ph.D. in Computer Science. Tell me about your experience as a woman in those programs, in the graduate and post-graduate environment.</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I found grad school to be a very painful kind of fun. [Laughs]</p>
        <p>You're very poor, you make no money and you work so hard all the time. I did the math at one point, and if you actually divide your income by the hours that you work, you make just a small fraction of minimum wage—and that's in Computer Science, which is one of the better-paid graduate programs, because you actually get a stipend. In some Humanities programs, you work just as hard and end up paying, which is horrifying.</p>
        <p>I’ve found the gender ratio in grad school to be more balanced than in the industry. I've always been comfortable with guys, so I don't really have a problem with it and it's not something I notice a whole lot—although right now on my team, I've got three amazing women and it’s really fun! There's a different kind of joking. In grad school, I didn't experience any real difficulties related to being female. I really enjoyed it and hated it at the same time, as everyone does—I mean, I don't think you finish a Ph.D. until you want to kill something. [Laughs]</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I found grad school to be a very painful kind of fun. [Laughs]</p>
    </aside>

    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">How was your experience making the transition to professional practice?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I thought I was going to be a professor, but over the course of my post-doc I realized, this isn't actually the life I want.</p>
        <p>In making the transition to professional practice, I kind of took a leap of faith. I got married as I was finishing my post-doc, and my husband had a fantastic job offer in Chicago that was right in line with his dissertation work. I didn’t really know what I wanted to do at the time, but I knew I had very marketable skills, so I said, “Let's just go! I'll find a job when we get there.” And I did. I applied for a bunch of stuff, and it took a couple months, but I ended up getting a pretty good job, and it worked out.</p>
      </dd>
    </dl>

    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-melissa-dominguez-gmail_collage.jpg" alt="Melissa Dominguez GMail">
        <figcaption>
          Gmail iOS easily allows users to navigate their inbox from their phone - all thanks to Melissa and her team’s code.
        </figcaption>
      </figure>
    </div>

    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Was that first job a practical role within software engineering?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Yeah, I worked for a financial risk management software company for a couple years. It was a combination of software and consulting. I was on the software side, obviously, not the financial consulting side! [Laughs]</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>One [skill to have as a software engineer] is a desire to solve problems. Do you like to take things apart and put them together? I like to knit, which is a form of problem-solving.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Aside from the obvious technical skills, are there any other skills that are important to have if you’re interested in becoming a software engineer?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>There are a couple of things. One is a desire to solve problems. Do you like to take things apart and put them together? I like to knit, which is a form of problem-solving. I figure out how I want something to look, and then I figure out the knitting pattern to make it. Did you like to play with Legos as a kid? Did you like to build things? When I was a kid, our VCR broke and I took it apart. I didn't fix it, or anything—I just wanted to see what was inside.</p>
        <p>And the other, which I think women in particular are socialized against, is being willing to handle rejection without taking it personally. I’ve found this from my own experience, and I've heard it from other women as well: If I applied to Google and got rejected, what are the chances I would apply again?</p>
        <p>There's been a conversation going on around here, about how do we hire more women? Google gets so many resumes that there are false negatives, which means we say no to people who are totally qualified. People who are more easily discouraged by that rejection are going to be less likely to try again in a year or two. There are a few different things to consider when re-applying, one is you might have been a false negative in the first place, and another is, you might have actually gotten better since you first applied. Maybe you weren't quite above the bar last year, but maybe since then you’ve done an amazing project and learned so much, and now you can do it.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">When it comes to bridging the gender-ratio difference between education and professional practice, you're putting a bit of the onus on women themselves. It’s not just about companies making sure they hire women, it's also about women making sure that they get themselves hired, we have to keep trying and not give up.</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I do think it's important that, as an industry, we make the effort to be more inclusive and to recognize discrimination when it happens.</p>
        <p>On the other hand, for women that are in the industry now, we have to deal with the system as it is today. I'm always very pragmatic. I’m not saying it’s anyone’s fault, but there's a certain amount of the world that we just have to deal with. You can choose to take things personally, take offense at things and be hurt, or you can take a step back and say, “Okay, that sucked. What can I do to do better next time? Was this just a one-off?”</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>There are millions of people who use my code every day! How cool is that!?</p>
    </aside>


    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">How long have you been at Google?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Two years now.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What's your favorite part of your job right now?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Throughout my career, the people I work with have been the most important thing to me. I can work on something I don't really care about, and the people I work with will make it worth going to work every day. On the other hand, I could be working on something that's super cool, but if I'm working with a bunch of jerks, it doesn't matter! (Laughs) The people I'm working with right now are awesome.</p>
        <p>But also, I'm working on <a href="https://mail.google.com/intl/en/mail/help/about.html">Gmail</a>! There are millions of people who use my code every day! How cool is that!? I’m making something that people actually use, and it's amazing. After working on something that only a hundred banks use, this is way better. [Laughs]</p>
      </dd>
    </dl>


    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-melissa-dominguez-knitting.jpg" alt="Melissa Dominguez Knitter Extraordinaire">
        <figcaption>
          An avid knitter, Melissa says her favourite hobby has helped her to develop the problem solving skills needed as an engineer.
        </figcaption>
      </figure>
    </div>


    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Do you have any passionate interests outside of technology?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I'm a mother, I have two small girls, a two year-old and a four year-old, so obviously they're pretty awesome. They're sweet and beautiful and loving and smart.</p>
        <p>And I'm also a knitter, I’ve actually published a few knitting designs. One came out in <a href="http://www.creativeknittingmagazine.com">Creative Knitting Magazine</a> last fall, which was really exciting!</p>
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
          <?php if ($photos2): echo 'and <a href="'.$photos2_url .'">'.$photos2.'</a>';endif; ?>
        </li>
        <li>
          Editing by <a href="<?php echo $editor_url; ?>"><?php echo $editor; ?></a>
          <?php if ($editor2): echo 'and <a href="'.$editor2_url .'">'.$editor2.'</a>';endif; ?>
        </li>
        <li>
          Art Direction by <a href="<?php echo $ad_url; ?>"><?php echo $ad; ?></a>
          <?php if ($ad2): echo 'and <a href="'.$ad2_url .'">'.$ad2.'</a>';endif; ?>
        </li>
        <li>
          Design by <a href="<?php echo $design_url; ?>"><?php echo $design; ?></a>
          <?php if ($design2): echo 'and <a href="'.$design2_url .'">'.$design2.'</a>';endif; ?>
        </li>
        <li>
          Development by <a href="<?php echo $dev_url; ?>"><?php echo $dev; ?></a>
          <?php if ($dev2): echo 'and <a href="'.$dev2_url .'">'.$dev2.'</a>';endif; ?>
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
