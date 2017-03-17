<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-coral';
  $interviewee_name = 'Nyla Ahmad'; // Page title & share links
  $interviewee_url = 'nyla-ahmad'; // Share links URLs

  /*
    INTERVIEW CREDITS:
    If you need a second name, add a variable with a '2' the end. Example:
    $interviewer = "First Person";
    $interviewer_url = "http://twitter.com";
    $interviewer2 = "Second Person";
    $interviewer_url2 = "http://mywebsite.com";

    ***There were three names for the DEV and TRANSCRIBE fields for this interview only so I added the first name manually in the HTML itself.***

    If you don't need a credit, delete the whole <li> in the HTML.
  */
  $interviewer = "Audrey Kuo";
  $interviewer_url = "http://twitter.com/martianmoose";
  $photos = "Pam Lau";
  $photos_url = "http://pamlau.com/";
  $editor = "Brett Bergmann";
  $editor_url = "https://twitter.com/brttb";
  $editor2 = "Ivonne Karamoy";
  $editor_url2 = "http://www.ivonnekaramoy.com/";
  $design = "Cassie Kaiser";
  $design_url = "http://twitter.com/CassKaiser";
  $dev = "Audrey Kuo";
  $dev_url = "http://twitter.com/martianmoose";
  $transcribe = "Audrey Kuo";
  $transcribe_url = "http://twitter.com/martianmoose";

  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>
  <main role="main" class="interview">

    <!-- // Feature Image -->
    <div class="border img-feature">
      <figure>
        <img src="<?php echo $path_img; ?>featured-nyla-ahmad.jpg" alt="Nyla Ahmad">
      </figure>
    </div>

    <!-- // Interview Header -->
    <header class="border header-interview">
      <div class="wrapper-sm">
        <h2>Nyla Ahmad</h2>
        <p class="intro">
          Nyla is an intrapreneur, a corporate insider who seizes unforeseen opportunities to push the company in new directions. &nbsp;She is the recipient of the 2009 Canadian Women in Communications Technology Innovator Award&nbsp;and leads several teams under the Rogers Ventures umbrella.
        </p>

        <?php // Don't update. Using the same info as is Interview Credits. ?>
        <p class="author">An interview with <a href="<?php echo $interviewer_url; ?>"><?php echo $interviewer; ?></a></p>

        <?php // Don't update. Using info from PHP variables. ?>
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

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What are you working on at Rogers?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I am the Vice President of Local Digital at <a href="http://www.rogers.com/web/ir/overview/" target="_blank">Rogers Communications Inc.</a>, where I direct a group of new startups companies that are focused on the local, digital space.  In a big company like Rogers, I would say that I am what’s often called an Intrapreneur - an entrepreneur inside a big company. My job is to quickly incubate and accelerate new businesses within Rogers, to develop an operational discipline to get them to the market and get them growing and scaling really quickly. I am somebody who is responsible for growth, so I have to have a very entrepreneurial spirit.</p>
        <p>On a personal level, I am a mom and a wife. I have an equally full plate at home so I am always juggling the two.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">How did you become interested in the tech space?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Both of my parents are fairly technical in their professions so I probably have some of it in my genes. I did a science degree at McGill University right around the time computers were hitting the scene. My first couple of university essays were typed on a typewriter and by the time I graduated I was doing everything on a computer. That’s when I became really fascinated with how technology was changing everyday life.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I became enamoured with technology, but I am not an engineer.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I became enamoured with technology, but I am not an engineer. What I was really interested in was how does the average person, who knows nothing about science, nothing about technology, how are they going to get comfortable with these changes?</p>
        <p>My career has been in that sweet spot where I am very interested and comfortable with science and technology, but the value I bring is that I am able to connect the dots between what the technology can do and what the average person wants to be using it for.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What was your experience like growing up?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I am a middle child and the only daughter; I have an older brother and a younger brother. That contributed a lot to me developing the skills to collaborate and be a bit of a peacemaker. I think being the only girl in that environment meant that I often have to do things that boys did. It’s not like I had another sister so I wasn’t living in a girly girly environment. I also grew up in a very culturally diverse family: my father is from Pakistan and my mother is from Finland. Imagine mixing all that culture at a very early age! Fortunately, I am very thankful that I ended up growing up very comfortable in my skin, not afraid or uncomfortable with sticking out or being different.  I was the only girl between brothers; my parents were a kind of a mixture, I was a mixture. </p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I ended up growing up very comfortable in my skin, not afraid or uncomfortable with sticking out or being different.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Tell us about your career trajectory.</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>My career path really mirrors the way the Internet itself has moved into different industries. At the time, it probably looked like I was flip-flopping between different industries, but what I realize now is that there was a natural evolution: I was just following where the Internet was going, and I tried to develop and bring to market the services that consumers really want.</p>
        <p>I was in publishing when the Internet came along. In the beginning, the Internet was really viewed as a non-publishing platform. When broadband started, then that’s when I shifted to Rogers. Broadband enabled video streaming, so I became very interested in rich media, because it was possible on this new platform. With two-way cable technology, we were able to develop on-demand video.</p>
        <p>Network and software engineers are always pushing the envelope of what technology can do, but the practical business reality is that there has to be an application of that technology to the consumer that is relevant and useful to them. </p>
        <p>I tend to look at shifts in consumer behavior; it starts off really small, then you start to see enough of it gaining traction, then it becomes a bit of a data point. Consumers are moving in this new direction.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>You have to get comfortable with change, not afraid to keep moving forward, even when the horizon is not totally clear.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Answer -->
      <dd class="interview-a">
        <p>For example, I remember in the beginning, when email first hit the scene, not everyone had an email address. I remember asking people, “Are you on email?” Today, we are almost getting to a point where email is outdated. People are communicating in a much faster way. I think I have the benefit of having lived through a lot of technological change. When something new hits the scene you think, “Wow, this is great. This is going to be like this forever.” And then, you give it 4-5 years, it evolves, it becomes obsolete or something replaces it. You have to get comfortable with change, not afraid to keep moving forward, even when the horizon is not totally clear.</p>
      </dd>
    </dl>

    <!-- // Single Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-nyla-ahmad-portrait.jpg" alt="Nyla Ahmad office">
        <figcaption>
          Photo credit: <a href="http://pamlau.com/">Pam Lau</a>
        </figcaption>
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">How did you go about following your interest in technology early on? Did you try to look for a job that was similar to where the trend was going?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Every job I’ve had has been very different to the job I was hired to do. I kind of make this opportunity happen. In a publishing group, where we would focus on print publishing, I would be the one saying, “We should really be paying attention to what’s happening on the Internet, we should have a website.” Before I knew it, I have moved into a digital role. When there is technological change in its early stage, it’s often people from within a company that start to dabble with the technology as a side project and it really takes off and becomes a job.
        </p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">When you have a new idea or technology you want to champion, has it been difficult to promote to a team?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>It’s never easy to convince a change in the established way of thinking. People generally don’t like change, they don’t like to take on additional risk. With emerging technology, you can’t really pin point what the opportunity is going to be into dollars and cents. You have to kind of just go, take a leap of faith and believe that your success will depend on your ability to execute. </p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>What you have to be really good at is understanding why people are rejecting [your ideas].</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Answer -->
      <dd class="interview-a">
        <p>What you have to be really good at is understanding why people are rejecting [your ideas]; what is it they are afraid of? What is it they don’t understand? What additional information can you provide to make them more comfortable?</p>
        <p>You need a lot of empathy to really dig deeper. If you really believe this is the direction that the team should go in, you have to be really persistent in your approach to figuring out what it is going to take to get people to see what you see. Along the way you may uncover, as I have many times, that their concerns are very valid. During those times, I am forced to go back and re-evaluate an idea or collect more data.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Have you found being a woman challenging in terms of being able to push forward with your ideas? </dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I remember a few years ago having lunch with the editor-in-chief for a series of women’s magazines. His magazine was staffed largely by women. A lot of his leadership team was female. He was complaining to me about how difficult it was to be the only man in the room. I laughed at that. In any kind of minority position, you always feel a bit disadvantaged. Your hill is just that much steeper to climb. I have been able to persevere through all of that; I have just always been very focused on and passionate about the area that I want to champion in the emergent technology.</p>
        <p>I don’t think there is necessary a male or female approach when it comes to driving innovation. You can’t do it in a vacuum. The best idea will never come from someone sitting alone in their office. You have to go out there and talk to a lot of people.</p>
      </dd>
    </dl>


    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">
        So you look out for opportunities and ideas that most interest you and work from there?
        </dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>When I look back at it now, my natural aptitude is to just gravitate towards the next thing, the next emerging thing. I am curious about what’s around the corner and I am not afraid to work in an ill-defined white space. </p>
        <p>I am very comfortable defining white space. I don’t need to see a detailed road map in order to keep going. I figure things out as I go. </p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I am very comfortable defining white space. I don’t need to see a detailed road map in order to keep going. I figure things out as I go.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Answer -->
      <dd class="interview-a">
        <p>In the past, in the early days, I wasn’t so focused on a career ladder per se; I was more motivated by interesting work. I naturally make sure everything I did was meaningful and added value to the company that I worked at.</p>
        <p>I think in the digital space it makes sense to have a blend of strategic thinking and operational acumen. It’s a model where you need to centralize those two things because you are learning as you are doing. The more you are doing, the more you are learning which informs your strategy. You have to keep the two things very close. I like the operational side of things. I like building, I like doing, I like being part of a team. I would go crazy and feel stifled if I was just in a strategy role where I didn’t actually see things come to life.</p>
      </dd>
    </dl>


    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Can you give us an example?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>When the Internet first emerged in the mid-90s, most of the popular press was saying children should not go online. They were claiming there were cyber stalkers and you shouldn’t let your kids run free on the Internet. I really believed that Canada as a country was going to be very wired because of our geography and creating a population that was very tech savvy could be a differentiator as a country. </p>
        <p>At the time I was working as the editor-in-chief of OWL, chickaDEE and Chirp magazines, and I became very interested in the emergence of the Internet. As an editor of children’s print magazines, I really felt the Internet was important for children because they are the generation who are going to grow up with this technology. </p>
        <p>We were a very well respected children educational publishing brand. We had the opportunity to really champion the Internet and advocate it, but do it very responsively.
        So here was an example where I was going around the executive table saying we should build a website, we should do an online service for kids.</p>
        <p>It’s difficult to understand, this was really, really early. Most of the people I was talking to had not been on the Internet. What we ended up doing was writing a book called <a href="http://www.amazon.ca/Cybersurfer-The-Internet-Guide-Kids/dp/1895688507" target="_blank">CyberSurfer</a>. It was a kid’s guide to the Internet that explained what the Internet was, how it worked and how you can use it. It was designed for kids, but had a lot of factual information about the technology itself.</p>
        <p>At the back of the book was a disc with a bookmark file which collected hundreds of websites that were good for kids. This was before search engines so it was a lot of effort to go find all these websites. The book and interactive disc package became a huge success because kids were looking for endorsement to allow them to go online and parents were really happy that the publishers of OWL were putting these safe websites together. Kids used the disk, but the irony is the book itself was read mostly by the adults. I realized that explaining the Internet almost at the level of a child was what a lot of these adults needed in order to get comfortable with the Internet. I think that’s an example of being able to to see the direction things were going. The company became the leader in digital at that time because we took the first step.</p>
      </dd>
    </dl>

    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-nyla-ahmad-office.jpg" alt="Nyla Ahmad at work">
        <figcaption>
          Photo credit: <a href="http://pamlau.com/">Pam Lau</a>
        </figcaption>
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">If you were to do your career all over again, would you do anything differently?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I think I probably would have worked less. When I was younger earlier in my career, I worked a lot. I was interested; I loved what I was doing. Before I was married and had kids, I was working tons with very long hours. I was in the writing field so I would spend a lot of time writing. I think now that I probably should have traveled more, explored my hobbies more, spent more time with my friends and developed this whole side of me outside of work.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I like to meet people who have broader context to them other than just what they do at work.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Answer -->
      <dd class="interview-a">
        <p class="ng-scope">Today when I encounter people in the work environment, I like to meet people who have broader context to them other than just what they do at work.  These people bring in other references and perspectives and so have a better chance of connecting the dots in all this emerging technology space. </p>
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
          Development by <a href="http://twitter.com/MartianMoose">Audrey Kuo</a>
          <?php if ($dev2): echo 'and <a href="'.$dev2_url .'">'.$dev2.'</a>';endif; ?>
        </li>
        <li>
          Transcriptions by <a href="http://www.cassiekaiser.com">Cassie Kaiser</a>
          <?php if ($transcribe2): echo 'and <a href="'.$transcribe2_url .'">'.$transcribe2.'</a>';endif; ?>
        </li>
      </ul>
      <?php include($path_inc."site-credits.php"); ?>
    </footer>

    <!-- // Latest 3 Interviews -->
    <?php include($path_inc."latest-interviews.php"); ?>
  </main>

  <?php include($path_inc."footer.php"); ?>
