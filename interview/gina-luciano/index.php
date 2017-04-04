<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-yellow';
  $interviewee_name = 'Gina Luciano';; // Page title & share links
  $interviewee_url = 'gina-luciano'; // Share links URLs

  // Twitter & Facebook sharing info
  $social_title = 'Interview with Gina Luciano by Magdalena Georgieva';
  $social_desc = 'Co-founder and CEO of Cambridge-based gift experience startup Delightfully.';
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
  $interviewer = "Maggie Georgieva";
  $interviewer_url = "http://twitter.com/mgieva";
  $photos = "Gina Luciano";
  $photos_url = "http://twitter.com/gluciano";
  $editor = "Maggie Georgieva";
  $editor_url = "http://twitter.com/mgieva";
  $design = "Ivonne Karamoy";
  $design_url = "http://ivonnekaramoy.com";
  $dev = "Brett Bergmann";
  $dev_url = "http://twitter.com/brttb";
  $dev2 = "Audrey Kuo";
  $dev_url2 = "https://twitter.com/martianmoose";
  $transcribe = "Maggie Georgieva";
  $transcribe_url = "https://twitter.com/mgieva";


  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

  <main role="main" class="interview">
    <!-- Featured Image -->
    <div class="border img-feature">
      <figure>
        <img src="<?php echo $path_img; ?>featured-gina-luciano.jpg" alt="Gina Luciano">
      </figure>
    </div>

    <!-- Interview Header -->
    <header class="border header-interview">
      <div class="wrapper-sm">
        <h2>Gina Luciano</h2>
        Gina Luciano is the co-founder and CEO of Cambridge-based gift experience startup&nbsp;<a href="https://delightfully.com/2/" target="_blank">Delightfully</a>. Split between art and science since an early age, Gina has found an outlet for both her passions in her journey as a woman entrepreneur.

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
      <dt class="interview-q">What did you college career look like? Is that where you developed your technical background?</dt>
      <dd class="interview-a">
        <p>I have never had formal training in computer science. In college at Brandeis University I started in pre-med and finished that program. I loved the challenge of it - both socially and psychologically. I think that that has helped with my tenacity, but I did realize I might not go to med school.</p>
        <p>While I was taking all of these science classes, I started craving some art classes and humanities. I petitioned to create my own major in Visual Culture, a combination of film studies classes and art classes. I have always been split between art and science. That has been with me from the start.</p>
      </dd>
    </dl>

    <dl class="border">
      <dt class="interview-q">What about life after college?</dt>
      <dd class="interview-a">
        <p>I worked at Deutsche Bank and that was a job where I was sitting down at a desk, in an office. Within a week, or probably within a day, I changed things. I couldn’t do the same thing every day. You’ve got to challenge yourself, you’ve got to learn new things. So I asked them if there were any projects I could work on, just something that is fresh and new. They said, “You want to do more work? Sure!”</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I couldn’t do the same thing every day. You’ve got to challenge yourself, you’ve got to learn new things.</p>
    </aside>

    <dl class="border">
      <dd class="interview-a">
        <p>They let me create a completely new job. So I taught myself how to program with the different tools that they used like Visual Basic. My double work paid off.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">How did you get into advertising?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I was intrigued by the world of advertising, so I took a job in a big media company, <a href="http://www.groupm.com/" target="blank">GroupM</a>.  Advertising had this art element. I love being exposed to designing, filmmaking, photography, even if I am not the one doing it. I love being in the world of creative challenges and creative projects. I get sick of pure science to guide your intuition.</p>
        <p>I sort of created my own role here, too. A couple of weeks after joining, I started a project to rebuild the global intranet, the form of communication that they used across the whole company to share knowledge and collaborate on ideas. That was a tremendous learning experience because I was also younger than most of the people I was dealing with and had to learn fast.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I love being in the world of creative challenges and creative projects. I get sick of pure science to guide your intuition.</p>
    </aside>

    <dl class="border">
      <!-- // Answer -->
      <dd class="interview-a">
        <p>It was a really interesting time in company communication because historically it was a broadcast system, just a way to broadcast out updates to the company. To the credit of a lot of the people who led up communication, they acknowledged that things had to evolve and they had to let go of controlling out all of the info.</p>
        <p>I ended up leading the domain of products. It was a startup within a startup in many ways. It became owning the product line - from intranet, it became the extranet. On my team, I had project managers, business analysts and developers.</p>
      </dd>
    </dl>

    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-gina-luciano-james.jpg" alt="Gina Luciano with co-founder James Barabas">
        <figcaption>
          Co-founders, Gina (CEO) and James Barabas (CTO), set out to revolutionize the (digital) gift giving experience, by adding a personal touch, with <em>Delightfully</em>.
        </figcaption>
      </figure>
    </div>


    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">How did you hone your technical skills?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Without knowing it, I really got the bug to start my own thing. I had my own consulting business - I was doing web design and even some tutoring on the side. I realized I didn’t want to be constrained by my computer science skills and I wanted to sharpen these skills a lot. I started by teaching myself whatever I could get my hands on and took some mobile apps classes at the <a href="http://www.extension.harvard.edu/" target="_blank">Harvard Extension School</a>. There is so much to learn from others. I got a lot out of those classes. In fact, that is how I met my co-founder, <a href="https://twitter.com/Jason_J_Shin">Jason Shin.</a></p>
        <p>I’d be sitting front and center, I’d be always raising my hand. Jason sat in that area and that’s how we met. We thought it would be good to collaborate on some of the things we are learning and we started to talk through some of that.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Tell us about the birth of Delightfully.</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Jason and I both wanted a company that was involved in cutting edge technology, but wasn’t about cutting edge technology. It was about making lives more joyful. We wanted it to be about the human element.</p>
        <p>Jason had this idea for Delightfully. We met for coffee, we had a long conversation, and we made the decision to move forward as a company. He decided he would wind down his classes, I would wind down my business - we were all in after that conversation. When you know things, you know things.</p>
        <p>In order to move fast, we needed another technical person on this. Jason started looking that week and went to a mixer between Sloan and MIT Media Lab and that is where he met <a href="https://angel.co/james-d-barabas">James Barabas.</a></p>
      </dd>
    </dl>

    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-gina-luciano-product.jpg" alt="Gina Luciano Delightfully">
        <figcaption>
          Delightfully brings the magic of gift giving to the digital age, creating more meaningful experiences with personalized photos, games and messages.
        </figcaption>
      </figure>
    </div>


    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Was doing your own start-up scary at all? How did you approach it?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I was too much in the present and in the future to be worried about what if I didn’t do this. I was so eager to match up with people I admired and wanted to collaborate with that any feelings of fear might have been invigorating than stymying. It was really exciting. I remember we were smiling a lot. But also working a lot.</p>
        <p>We built two prototypes immediately, in a day, of the experience of unwrapping a gift online. We came up with real stories of presents and two concepts of what the new generation of unwrapping would be. Our first test was to see how people would respond. Do people like this? Then we put the website together and the video. We applied to <a href="http://masschallenge.org/" target="_blank">MassChallenge</a>, got in immediately, got investment right away.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>If you don’t have clarity as to why you personally are doing it, you are just... not going to build the company you want.</p>
    </aside>


    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Who have influenced you the most in your journey so far?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I was really impacted by the way <a href="https://angel.co/bill-warner" target="_blank">Bill Warner</a> approached his startups. It’s a fresh approach that impacts the founder rather than just starting a startup. He has a specific philosophy that he calls “building a startup from the heart.” A lot of it is focusing on the startup’s intentions - it sounds so obvious but so many people don’t do it. You have got to take that step back. If you don’t have clarity as to why you personally are doing it, you are just not going to be as effective or not going to build the company you want. Bill has been extremely influential in my life since I met him.</p>
        <p>Mentorship is interesting. I have learned from a lot of people. I love the community here in Boston. There is this legacy of startup beginnings. <a href="http://www.hubspot.com/" target="_blank">HubSpot</a> hangs on to that freshness and acknowledgment for continuous invention. The range goes from that and <a href="http://www.hubspot.com/company/management/dharmesh-shah" target="_blank">Dharmesh Shah</a> to Sloan.</p>
        <p>Apart from that, <a href="http://web.media.mit.edu/~mres/" target="_blank">Mitchel Resnick</a> and the work that I do as a mentor in the <a href="http://www.computerclubhouse.org/" target="_blank">Computer Clubhouse</a> have introduced an approach of learning I go to every day of my life. I have transformed as a person thanks to Mitch and Bill.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What is the most important skill in an entrepreneur?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Adaptability. I stopped worrying about specific skills and realized I’ve got to tune myself to learn quickly because then you don’t have to worry about fear. Say you ski down a mountain quickly, and you know you can get yourself out of a hole, then you are free. You can go! You are not putting on the breaks when you should be accelerating. You have got to be able to plunge into whatever is the highest risk, take that unknown, and face it head on. You just have to know that you will figure it out.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>You have got to be able to plunge into whatever is the highest risk, take that unknown, and face it head on.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">If you could go 10-15 years back, would you do anything differently?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>The short answer is ‘no’ because I choose to live in the present. I certainly look forward to the future and reflect on the past, but I choose to not have any regrets. Another answer might be, “sure!” If someone looks back and says, “I have done everything perfectly,” then what have they actually learned?</p>
      </dd>
    </dl>


    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-gina-luciano-billwarner.jpg" alt="Gina Luciano with Bill Warner">
        <figcaption>
          Gina is also collaborating with Bill Warner on CoFlow Studios, an entrepreneur video series to help entrepreneurs learn Bill's approach to building startups from the heart.
        </figcaption>
      </figure>
    </div>


    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What advice would you give women with the same interests looking for their own path in life?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Try really hard to be honest with yourself and be tuned in to what motivates you. I think there is this gut that we all have that is just beyond us, it is quicker than our mind… I think our gut instincts can be sharpened - you can work on it. So work that muscle! Recognize that it’s not just going to the gym and going for a run, it’s not just keeping a healthy diet, exercise that intuition.</p>
        <p>Some of the ways that I have done that is to dive into situations without knowing why. You will find out why, almost as soon as you commit. There is no substitute for the truth that you create. When you make a real commitment there is a switch that goes off and there is no substitute for actually doing something.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>Try really hard to be honest with yourself… I think our gut instincts can be sharpened - you can work on it. So work that muscle!</p>
    </aside>

    <dl class="border">
      <dt class="interview-q">What do you do for fun?</dt>
      <dd class="interview-a">
        <p>My hobbies are still deeply rooted in visual forms of communication. In fact, this winter I realized I was really craving photography and now I have decided that I am doing actual projects instead of taking casual photos. I am actually going to work on my portfolio.</p>
        <p>I love the world of film. I love French cinema and reading about it. I am actually learning some French because some materials are in French and I don’t want to miss out on it. I have been diving more deeply into that.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What do you read?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I read a lot. I never thought of myself as gravitating toward non-fiction, but apparently I do. I read film theory - you know, that kind of stuff. I don’t find myself reading too much of the typical entrepreneur stuff, maybe for the same reason I didn’t go to business school.</p>
        <p>I read more about neuropsychology than about how to be an entrepreneur. I read some classics - I read To Kill A Mockingbird twice this summer because I love that book so much.</p>
      </dd>
    </dl>

    <dl class="border">
      <dt class="interview-q">In our last interview, <a href="http://womenandtech.com/interview/karen-schulman-dupuis/">Karen Schulman Dupuis</a> asked: When were you most vulnerable, and what was the best thing that came from that?</dt>
      <dd class="interview-a">
        <p>I love this question. Vulnerability seems so central to understanding oneself. And if I had to define entrepreneurship in my own terms I'd describe it as a personal odyssey to continually discover that which one has to give to the world. </p>
        <p>The story I want to tell is from the spring of my senior year of high school. Throughout high school, I was very active with sports &amp; photography but I always admired people in the drama club and wondered what it would feel like to get up on stage and be so exposed in front of so many people. Well, my last semester, I landed a lead role in a short play as a woman in a tumultuous relationship with the male lead.  </p>
        <p>At opening night, the guy playing opposite me was a no show. There were other plays lined up for the evening, and just before the drama instructor removed us from the lineup, I approached her with a proposal. I persuaded another guy to play the male lead. All we needed was a minor rewrite to embed our play within a story that starts with a casting call for a male lead. That way, we could perform the original play with the male lead holding a script in his hand. She loved it and the show went on. But part way through, the original male lead showed up. Even though I was furious with him, I let him up on the stage. Fortunately, the script called for an argument, and I delivered! We ended up improvising most of the rest. It was tons of fun and the crowd loved it – or at least that’s how I felt, who knows what they really thought!</p>
        <p>Many of my friends and schoolmates were in the audience that evening, including my high school crush. I could have taken the easy road and bailed when he didn't show. What if my idea didn't work? What if people didn't like it? What if I did something embarrassing and made a complete fool of myself? Looking back, I'm not sure if any of these things even entered my mind, I just knew I worked hard at the role, there was an audience expecting a show, and I wanted to give them a performance, even if it meant being a little inventive and more vulnerable. That experience reminds me to just go for it! When you do, there's a really good chance you'll be happy you did, and may even inspire others to go after something themselves.</p>
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
          <?php if ($photos2): echo 'and <a href="'.$photos2_url .'">'.$photos2.'</a>';endif; ?>
        </li>
        <li>
          Editing by <a href="<?php echo $editor_url; ?>"><?php echo $editor; ?></a>
          <?php if ($editor2): echo 'and <a href="'.$editor2_url .'">'.$editor2.'</a>';endif; ?>
        </li>
        <li>
          Design by <a href="<?php echo $design_url; ?>"><?php echo $design; ?></a>
          <?php if ($design2): echo 'and <a href="'.$design2_url .'">'.$design2.'</a>';endif; ?>
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
