<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-green';
  $interviewee_name = 'Helen Papagiannis'; // Use for page title & share links
  $interviewee_url = 'helen-papagiannis'; // Used for share links URLs, use the same name as the interviewee's folder name

  // Twitter & Facebook sharing info
  //-----------------------------------------------------------------------------
  // Social media images are added in the metatags in includes/header.php to always pull in the feature image from this interview. Make sure the featured image always follows this format: featured-firstname-lastname.jpg
  $social_title = 'Interview with Helen Papagiannis by Ivonne Karamoy';
  $social_desc = ''; //Use the description from the archive page.

  // INTERVIEW CREDITS
  //-----------------------------------------------------------------------------
  /* If you need a second name, add a variable with a '2' the end. Example:
    $interviewer = "First Person";
    $interviewer_url = "http://twitter.com";
    $interviewer2 = "Second Person";
    $interviewer_url2 = "http://mywebsite.com";
    If you don't need a credit, delete the whole <li> in the HTML.
  */

  $interviewer = "Ivonne Karamoy";
  $interviewer_url = "https://www.ivonnekaramoy.com/";
  $photos = "Ally Chadwick";
  $photos_url = "https://twitter.com/justmyfreckles";
  $editor = "Ivonne Karamoy";
  $editor_url = "https://www.ivonnekaramoy.com/";
  $dev = "Ivonne Karamoy";
  $dev_url = "https://www.ivonnekaramoy.com/";
  $dev2 = "Christina Truong";
  $dev_url2 = "http://christinatruong.com/";
  $transcribe = "Ivonne Karamoy";
  $transcribe_url = "https://www.ivonnekaramoy.com/";


  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

<main role="main" data-interview>
  <!-- ALL content goes between the <main> tags. Below are some common modules for this page. Delete, revise or add more components as required. Refer to the Style Guide documentation for more details. Delete this comment when you've completed this page. -->


  <!-- // Featured Image -->
  <div class="border img-feature">
    <figure>
      <img src="<?php echo $path_img; ?>featured-helen-papagiannis.jpg" alt="Helen Papagiannis">
      <figcaption>Photo credit: Dave Gillespie</figcaption>
    </figure>

  </div>


  <!-- // Interview Header -->
  <header class="border header-interview">
    <div class="wrapper-sm">
      <h2>Helen Papagiannis</h2>
      <p class="intro">Dr. Helen Papagiannis is an internationally recognized expert in the field of Augmented Reality. Her work has taken her around the globe as a researcher, designer, author and speaker focusing on storytelling and creating meaningful experiences in AR. Her book <em>Augmented Human: How Technology is Shaping the New Reality</em> was published in 2017 by <a href="http://shop.oreilly.com/product/0636920041313.do" title="Augmented Human on O'Reilly">O’Reilly Media</a> and provides readers a look into our virtual future, how AR is evolving, where the opportunities are and where we’re headed. We sit down and talk about art, tech, yoga and the transformative power of Augmented Reality.</p>

      <?php // Don't update. Using the info from PHP variables at the top of the page. ?>
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


  <!-- // Q & A -  Add as many as required. -->


  <dl class="border">
    <dt class="interview-q">Let’s start from the beginning.
      <p>You got your BA in Fine Arts, Art History and English Literature. What were you hoping to be then?</p></dt>
    <dd class="interview-a">
      <p>I want to go back even a little further first. I was very lucky to attend a fantastic public high school, Wexford Collegiate School for the Arts, in Scarborough [Ontario, Canada] that had a phenomenal Visual Arts program: Printmaking, Photography, Sculpture, Painting, Drawing, and the list went on. I would often stay after hours in the studio making. I knew I wanted to be in the Arts, but I also loved tech. We had access to a computer in the Arts department that ran a super early version of Photoshop. I was intrigued by the possibilities of using the computer to make art, yet there was something I loved so much about the physicality of making art by hand: the materials, the textures, the smells. I began to combine the two: scanning my physical artwork and continuing the process of mark-making digitally. I didn’t know what I was hoping to be, but I knew what I was interested in and I followed my curiosity. My peers and mentors at Wexford inspired me and I owe a lot to my highschool experience. The community and uplifting environment at Wexford was outstanding. It only made my love for the Arts stronger.
      </p>
      <p>I continued down the path of art and tech in my undergrad degree at the <a href="https://www.utoronto.ca/" title="University of Toronto website">University of Toronto</a>. I worked in galleries. I always loved being surrounded by artists. And I also loved digital media. I remember taking a course called “Research and the Arts” where I designed and built my first website (using Dreamweaver) about artist <a href="https://en.wikipedia.org/wiki/Cindy_Sherman" title="About Cindy Sherman">Cindy Sherman</a>. At the end of the course, my professor, who also happened to be the Digital Media program director, asked if I wanted a job designing websites for the university and I gladly accepted. </p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>It’s how I approached working with Augmented Reality when I first came across it: getting under the hood and tinkering. I began to break demos to understand how they worked.</p>
  </aside>

  <!-- // Q & A -->
  <dl class="border">
      <!-- // Answer -->
    <dd class="interview-a">

      <p>I was focused on the graphic design side of things, but I really wanted to learn to code. When I finished my undergrad degree, I attended <a href="https://www.sheridancollege.ca/" title="Sheridan College website">Sheridan College</a>, and enrolled in a program called Interactive Multimedia. I learned HTML, Lingo, Actionscript 1.0, Flash, ASP, PHP, Javascript. We also did a lot of audio visual production, built CD-ROMs, and even made QuickTime VRs. Keep in mind, this was all the latest tech at the time. I enrolled at Sheridan because I felt like a better understanding of the programming side of things would empower my design work. In a way, looking back at that experience, it’s how I approached working with Augmented Reality when I first came across it: getting under the hood and tinkering. I began to break demos to understand how they worked.</p>
      <p>Art has always stayed with me, as has the desire to combine my love for tactility and materials with the digital. I think that’s what drew me to Augmented Reality — it combines that physicality with the virtual. I love how those two worlds come together in AR.
      </p>
    </dd>
  </dl>


  <!-- // Image - Left & Right -->
  <div class="border img-side-by-side">
    <figure>
      <img src="<?php echo $path_img; ?>left-helen-papagiannis-cinemagician.jpg" alt="Helen Papagiannis Cinemagician Exhibit">
      <figcaption>
        Visitors interacting with "The Amazing Cinemagician", an interactive installation that Helen exhibited at the Ontario Science Center in 2010.
      </figcaption>
    </figure>
    <figure>
      <img src="<?php echo $path_img; ?>right-helen-papagiannis-cinemagician.jpg" alt="Helen Papagiannis Cinemagician Exhibit">
      <figcaption>
        Photo Credit: <a href="http://pippinlee.com/photos/">Pippin Lee</a>.
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">So you started as an artist, then went into web design–how did you discover augmented reality?</dt>
    <dd class="interview-a">
      <p>I had always admired Bruce Mau, and was in awe of the studio’s latest book at the time, <a href="http://ca.phaidon.com/store/design/bruce-mau-life-style-9780714845203/" title="Life Style published by Phaidon">Life Style</a>, which was released in 2000. While I was a student at Sheridan, I pitched <a href="http://www.brucemaudesign.com/" title="Bruce Mau Design Studio">Bruce Mau Design</a> and Bruce agreed to be our client for a school project. We filmed and produced a short documentary, designed and built a website, and of course, a CD-ROM! Everybody wanted a CD-ROM, it was all the rage back then.</p>
      <p>After I graduated from Sheridan, Bruce called me in for a meeting one day and presented <a href="http://www.brucemaudesign.com/work/massive-change" title="Massive Change project  ">Massive Change</a> to me. In the back of my mind I was thinking, “Does he want a website, or a CD-ROM, or maybe both?” To my surprise, he didn’t want either. Bruce asked me to lead the project and work with him on the initial design and research for Massive Change, including a 20,000 square foot exhibition commissioned by The Vancouver Art Gallery, a book to be published by Phaidon Press, and starting a post-graduate program called <a href="http://institutewithoutboundaries.ca/" title="The Institute without Boundaries website">The Institute without Boundaries</a> in collaboration with George Brown College. I was in awe. It was an incredible opportunity and of course, I seized it! I pinched myself going to work each day. </p>
      <p>Massive Change was a bold look at the power and promise of design to change the world through new inventions, emerging technologies, and ideas posing the question, "Now that we can do anything what will we do?"</p>
      <p>I led the research on Massive Change, identifying different areas of design for us to explore and that’s where I first came across references to Augmented Reality (AR). AR returned for me in grad school and I became fascinated by it. I remember seeing my first demo: it was very simple consisting of a blue 3D virtual cube, but it had me mesmerized! There was something in my space that wasn’t really there. It was magical. I began to ask, how can we use this new technology to tell new stories and to create compelling experiences? And these are the questions that have defined my work over the past 12 years. </p>
      <p>I went into mad scientist mode after seeing that first demo. I made things and broke things. I began to work with constraint as a design principle. When I started working with AR, there was no sound, and there were only two or three AR tracking markers, max.  Rather than using these parameters as a way to limit what I was doing, I looked at it as more of a challenge. I thought, "Okay. Within these constraints, what can I create that is compelling?""</p>
    </dd>
  </dl>


  <!-- // Video Embed -->
  <div class="border img-landscape video-landscape">
    <figure>
        <iframe src="https://player.vimeo.com/video/25608606?title=0&byline=0&portrait=0" width="940" height="705" frameborder="0"  allowfullscreen></iframe>
      <figcaption>
        Inspired by AR psychotherapy studies for the treatment of phobias, Helen created “Who’s Afraid of Bugs?”, the world’s first Augmented Reality pop-up book, in 2011-2012.
      </figcaption>
    </figure>
  </div>



  <dl class="border">
    <dt class="interview-q">Augmented reality was very new at the time. What made you want to pursue it?</dt>
    <dd class="interview-a">
      <p>Because it was new and I love exploring unchartered terrain. Probably because there were also no rules or clear paths, it was ripe for experimentation. Being an artist at heart, having a blank canvas like that, and being able to make and to define new things, all of that was super exciting to me. That curiosity, that wonder—figuring out how this magical thing was possible, and what I could make with it as a new medium, that’s what made me want to pursue it. </p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>I think that designers, artists, and storytellers experience the world differently, with all of their senses, and that’s something we need to explore in AR. </p>
  </aside>

  <dl class="border">
    <dt class="interview-q">You’ve been working in the field for over 12 years. How has augmented reality changed and evolved in that time?</dt>
    <dd class="interview-a">
      <p>Aside from the evolution of the user experience from primarily desktop-based AR experiences, to mobile, and to untethered AR headsets like <a href="https://www.microsoft.com/en-ca/hololens" title="Microsoft HoloLens">HoloLens</a>, we’re seeing a major shift in the way the industry is thinking about AR. The first wave of AR asked, "Can we do this?" and was focused primarily on the technology. Now that we know we can do this technologically (and of course there is more to be done, we’re just getting started), the big question is "What are we going to do with it?"" We’re seeing a greater emphasis placed on content creation and meaningful experiences. And this is absolutely key, because if we don’t have incredible and memorable experiences, the hardware is nothing more than a paperweight. We need artists, designers, and creatives of all types to help tackle this. There’s a major creative gap here that needs to be filled and I think the industry is coming around, but a big part of this will be not only hiring engineers, we need to look to the humanities as well: artists, filmmakers, musicians, performers, writers, poets, anthropologists, sociologists. AR needs storytellers and critical thinkers from multiple disciplines.
      </p>
    </dd>
  </dl>

  <!-- // Image - Portrait -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-helen-papagiannis-hololens.jpg" alt="Helen wearing HoloLens">
      <figcaption>
        Helen using Microsoft HoloLens, an Augmented Reality Headset.
      </figcaption>
    </figure>
  </div>


  <dl class="border">
    <dt class="interview-q">What do you think designers, artists, and storytellers can bring to the table that others can’t?</dt>
    <dd class="interview-a">
      <p>It’s the ability to see across disciplines, and to see relationships that are not otherwise apparent. Artists do that very well.</p>
      <p>I often ask, “Does the technology drive the storytelling, or does the storytelling drive the technology?” By bringing in artists and creatives who are not necessarily programmers or computer scientists, but who are curious about the medium, we can allow storytelling to lead and define what the technology can become.</p>
      <p>I also think that designers, artists, and storytellers experience the world differently, with all of their senses, and that’s something we need to explore in AR. We often think about AR as a visual medium, but it’s not limited to that. Reality isn’t just visual, and not everyone is sighted. </p>
    </dd>
  </dl>

  <!-- // Image - Portrait -->
  <div class="border img-portrait">
    <figure>
      <img src="<?php echo $path_img; ?>portrait-helen-papagiannis-book-cover.jpg" alt="Helen Papagiannis book">
      <figcaption>
        Helen's new book Augmented Human published by O'Reilly Media is "not just about augmenting reality, it's about augmenting humanity".
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">Let’s talk about your book, <em>Augmented Human: How Technology is Shaping the New Reality</em>. There’s a chapter in the book that talks about each of the human senses and how technology will extend those capabilities. Can you tell us about one of those ideas?
    </dt>
    <dd class="interview-a">
      <p>Yes, an example of this is vision technologies that explore how the human brain can be trained to see with the other senses, like hearing, effectively learning how to see with sound. The <a href="https://www.seeingwithsound.com/">vOICe system</a> [OIC = “Oh, I See”] developed by Peter Meijer, translates images from a camera into audio signals to assist people who are congenitally blind to see. The vOICE consists of a pair of sunglasses with a camera, connected to a computer and pair of headphones, and it can also be used on a smartphone by downloading the software and using the phone’s built-in camera. The camera scans your environment from left to right and the vOICe software converts pixels into sound, transforming your surroundings into a soundscape for you to see with your ears. Frequency is used to indicate an object’s height, and volume is used to represent brightness. With training and practice, wearers begin to identify different sounds with objects.</p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>Designing responsibly is absolutely key. We do this by engaging all disciplines.</p>
  </aside>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">One of the technologies you discuss in the book that fascinates me is haptic technology. Can you explain what it is?</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>Haptic technology provides tactile feedback from a virtual object, as though you can touch the virtual. Touch in physical reality is something very intriguing to me. It tends to verify that something exists, that something is real. In AR, for the most part, we can see, or hear, virtual information, but if we reach out to touch it, there’s nothing there, or we’re left touching the glass screen of the device we’re looking through. Haptics changes that.</p>
      <p>The first time I experienced haptics was in 2011 at the <a href="http://www.magicvisionlab.com/" title="Magic Vision Lab website">Magic Vision Lab</a> in Adelaide at The University of South Australia. Wearing a head-mounted display I was able to see an AR fish appear, and holding a special stylus, I was able to reach out and feel the individual scales of that fish. </p>
    </dd>
  </dl>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">You actually felt it?</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>Yeah, it blew my mind! It was pretty unreal. It threw me off because I knew that fish was virtual, yet I could feel it and verify it’s existence through a sense of touch. </p>
    </dd>
  </dl>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">That’s so exciting! I can wrap my head around augmented reality as it pertains to sight. But touch, feel and taste…</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>Taste, smell, hearing. There’s so much that can be done. I think we’re limiting ourselves by focusing on just the visual. </p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <!--div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-helen-papagiannis-futurex.jpg" alt="Helen speaking at FutureX">
      <figcaption>
        FutureX Live Atlanta. Photo credit: John Buzzell</a>
      </figcaption>
    </figure>
  </div-->

  <!-- // Image - Landscape -->
  <div class="border img-landscape video-landscape">
    <figure>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/5rg8VU4iZQg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      <figcaption>
        Helen speaking on Advancing AR for Humanity at Augmented World Expo (AWE) 2015.
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">In <em>Augmented Human</em>, you give us some examples of how AR has helped to advance artificial intelligence and machine learning allowing technology to augment human experiences even more. With all this advancement, is there a danger of becoming too reliant on technology to the point that we lose our physical and emotional connections with our reality and with other people? How do we design responsibly?</dt>
    <dd class="interview-a">
      <p>Designing responsibly is absolutely key. We do this by engaging all disciplines. The Humanities are particularly good at asking critical “Why?” questions, and we need a lot of that critical thinking to understand the potential social, cultural, and ethical implications, alongside solving the hard technical engineering challenges and informing those design decisions.
      </p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>I think confidence comes from believing in what you’re doing... It’s about having faith in yourself, in what you’re doing, in where it’s all going. That gives you the power to define your own rules.</p>
  </aside>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-helen-papagiannis-oreilly.jpg" alt="Helen Papagiannis talking at O'Reilly conference">
      <figcaption>
         Augmented Human talk at O’Reilly Solid Conference, San Francisco, 2015.</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">In addition to your work you also do a fair amount of speaking engagements and have done so for a few years now. How do you find confidence to speak in front of an audience, or what gives you confidence?
</dt>
    <dd class="interview-a">
      <p>I think confidence comes from believing in what you’re doing. AR was completely new to me, and there’s certainly something scary about that. It’s about having faith in yourself, in what you’re doing, in where it’s all going. That gives you the power to define your own rules. </p>
        <p>We all experience self-doubt. It’s human. But, in those moments, leaning on incredible people to help lift you up. Confidence, for me, definitely comes from the incredible support system I’m grateful to have.
        </p>
        <p>And of course working your butt off. Confidence comes from hard work. Practice builds confidence.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-helen-papagiannis-cafe.jpg" alt="Helen Papagiannis by Ally Chadwick">
      <figcaption>
        Photo credit: <a href="https://twitter.com/justmyfreckles" title="Ally Chadwick on Twitter">Ally Chadwick</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">I read that you do yoga. How does that heighten your sense of reality?</dt>
    <dd class="interview-a">
      <p>I’m interested in mindfulness and an awareness of our bodies in space. I think that all feeds into AR and virtual environments as well.</p>
      <p>I spend so much time in front of a screen, so I think it’s very important to return to the body and to remember our breath. How many times a day do we have a deep belly breath? For me, when I have free time, I do yoga, or go for a walk in nature.</p>
      <p>Also, with aerial yoga, where you’re hanging upside down, it can be really disorienting. But it allows you to see your world in an entirely new way. I think AR can help us do that too, to gain a fresh perspective.</p>
    </dd>
  </dl>

  <!-- // Image - Portrait -->
  <div class="border img-portrait">
    <figure>
      <img src="<?php echo $path_img; ?>right-helen-papagiannis-speaking.jpg" alt="Helen Papagiannis">
      <figcaption>
        We Are Wearables, 2017. Photo credit: Billy Lee
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">Have you had any mentors in your career?</dt>
    <dd class="interview-a">
      <p>So many, and I am incredibly grateful to be surrounded by such amazing people.
      In high school, my art teachers were fantastic and super inspiring. I’ll never forget the mentorship of Anne Jones and Peter Marsh. <a href="http://www.yorku.ca/caitlin/home/">Dr. Caitlin Fisher</a>, my Ph.D. supervisor, is an incredible woman. Extremely talented, and above all, an amazing human being.
      My parents have been my best mentors. They are my superheroes.
      </p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>The benefits of mentorship are simple: you have more hands on deck for the bigger cause.</p>
  </aside>

  <dl class="border">
    <dt class="interview-q">Who have you either mentored or advised, and what was that like? How did that originate? What were the benefits of being a mentor or advisor to someone?</dt>
    <dd class="interview-a">
      <p>Helping others is so important. We’ve all been mentored, so I think a big part of that is giving back. I get a lot of questions on and off stage. </p>
      <p>The benefits of mentorship are simple: you have more hands on deck for the bigger cause. I like to see people engaging with and thinking about the medium in new ways. You get to see others exploring and taking care of the thing you love so much, and being able to contribute to that.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">The more people that get involved in a certain field, the more ideas you have and the possibilities become magnified and the solutions too.</dt>
    <dd class="interview-a">
      <p>Exactly. And that’s the other big part of it. Having new people work on solutions and discover new questions. Look, how often does a new medium come around? The more people you have involved early on to help define what that can be, the better.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">

    <figure>
      <img src="<?php echo $path_img; ?>landscape-helen-papagiannis-speaking.png" alt="Helen Papagiannis">
      <figcaption>
        Camp Festival, 2014. Photo credit: Bram Timmer
      </figcaption>
    </figure>
  </div>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">What do you see, or hope to see, for the future of AR?</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>My hope for the future of AR is that it enriches and enhances our reality, not supplanting it or replacing it. I want to see AR create good in the world, uplifting and empowering people in their daily lives and igniting curiosity and creativity. This is what we must design for. May these new realities be deeply fulfilling and greatly benefit humanity.</p>
    </dd>
  </dl>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q"><em>Dr. Helen Papagiannis will be hosting a book signing for her latest book, Augmented Human, between 7pm and 8pm at House of VR in Toronto located at 639 Queen St W. Bring your copy of the book or purchase one at the event. <a href="https://www.eventbrite.ca/e/fitc-holiday-jam-tickets-38066664418?aff=erelpanelorg" title="FITC Holiday Jam at House of VR">Register for this free event</a>. </em></dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p></p>
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
  <?php  // If you don't need a specific credit, delete the whole <li>. Other than that, you don't need to change any HTML. Add the names in the PHP variables at the top of the page. ?>
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
