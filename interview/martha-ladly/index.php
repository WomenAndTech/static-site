<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-coral';
  $interviewee_name = 'Martha Ladly'; // Page title & share links
  $interviewee_url = 'martha-ladly'; // Share links URLs

  /*
    INTERVIEW CREDITS:
    If you need a second name, add a variable with a '2' the end. Example:
    $interviewer = "First Person";
    $interviewer_url = "http://twitter.com";
    $interviewer2 = "Second Person";
    $interviewer_url2 = "http://mywebsite.com";

    If you don't need a credit, delete the whole <li> in the HTML.
  */
  $interviewer = "Mark Staplehurst";
  $interviewer_url = "http://twitter.com/britburger";
  $photos = "David \"Kid With Camera\" Waldman";
  $photos_url = "http://kidwithcamera.com/";
  $editor = "Cassie McDaniel";
  $editor_url = "http://work.cassiemcdaniel.com";
  $ad = "Mark Staplehurst";
  $ad_url = "http://twitter.com/britburger";
  $design = "Mark Staplehurst";
  $design_url = "http://twitter.com/britburger";
  $dev = "Mark Staplehurst";
  $dev_url = "http://twitter.com/britburger";
  $transcribe = "Full Name";
  $transcribe_url = "";

  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>
  <main role="main">
    <!-- // Feature Image -->
    <div class="border img-feature">
      <figure>
        <img src="<?php echo $path_img; ?>featured-martha-ladly.jpg" alt="Martha Ladly">
      </figure>
    </div>

    <!-- // Interview Header -->
    <header class="border header-interview">
      <div class="wrapper-sm">
        <h2>Martha Ladly</h2>
        <p class="intro">
          Martha was a member of the 80s band&nbsp;<a title="Echo Beach by Martha &amp; The Muffins" href="http://www.youtube.com/watch?v=TRS4NKjUdhI" target="_blank">Martha &amp; the Muffins</a>, the creative direction behind Peter Gabriel’s Real World properties and co-editor of one of the first&nbsp;<a href="http://cargocollective.com/marthaladly/Mobile-Nation" target="_blank">mobile design anthologies</a>. She is now writing her Ph.D. on Women’s contribution to Technology.
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
      <dt class="interview-q">Martha, your career path has had so many twists and turns that I barely know where to start, so perhaps I should begin by asking you what you're up to at the moment?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>At the moment, and for some time now, I have been working in academia. I worked in industry for a long time, but when the tech bubble burst in 2001 I lost a big job that I had left the UK to take up. I was back in Canada, I had two kids to support and I thought to myself, <em>'You know what? It's time that I taught some of the things that I know.'</em> I had already done some teaching in England at the <a href="http://www.uwe.ac.uk" target="_blank">University of the West of England</a> (UWE) and it was actually one of my friends, Bill Buxton, who suggested that if I were to go back to where I had gone to school and tell them that I was around, he was willing to bet they’d have something they'd like me to teach.</p>
        <p>Well sure enough, I walked in the door at <a href="http://www.ocadu.ca/" target="_blank">OCAD University</a> (formerly the Ontario College of Art and Design) and was introduced to <a href="http://www.linkedin.com/pub/steve-quinlan/14/1b2/654" target="_blank">Steve Quinlan</a>, the Chair of Graphic Design, and <a href="http://apache.ocad.ca/faculty_biographies/bio.php?bid=1374&amp;fac=design" target="_blank">Lenore Richards</a>, the Dean, who offered me a teaching job there and then. This was fantastic, and it helped that I was talking to the right people! They were looking for someone with ideas and experience to teach new media (which was still a very young subject) and technology to design students. My industry perspective and experience with Peter Gabriel's <a href="http://realworld.co.uk/" target="_blank">Real World projects</a>, and having helped to set up the New Media program at UWE in the UK, were just what was needed.</p>
      </dd>
    </dl>


    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">So you returned to your old art college to teach technology?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Yes, and since then I've been given the opportunity to design a new graduate program with a group of fantastic colleagues at OCAD and the CFC Media Lab called the <a href="http://www.ocadu.ca/programs/digital_futures_initiative.htm" target="_blank">Digital Futures Initiative</a>. We were given the green light by Sara Diamond, who's been a long time colleague of mine before she came here as President. She's brought all sorts of fantastic opportunities for technological innovation in the arts, sciences, research and design to the University.</p>
        <p>My colleagues Paula Gardner, David McIntosh, Geoffrey Shea and I started the <a href="http://research.ocadu.ca/mobilelab/home" target="_blank">mobile experience lab</a>, and it's been highly successful at doing all sorts of experimental research work. At this point I thought, <em>"OK, I've got a home here. I can teach what I know. I can do research in the areas that I am interested in."</em></p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What areas of research does your work at the mobile lab cover?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I run three research projects out of our lab that are funded in various ways. One is working on <a href="http://research.ocadu.ca/mobilelab/project/elders-memory" target="_blank">mobile technology for elders</a>, helping to scaffold memory by allowing families and elders to collaboratively recreate shared memories and engage in sharing family stories together. Another is with the <a href="http://www.civ-ddd.net/" target="_blank">CIVDDD</a> [Centre for Information Visualization and Data Driven Design] which is looking at the sonification of data – how to make data available through sound and how to search it through spoken word. We are working with an amazing data set – 20 years of <a href="http://en.wikipedia.org/wiki/CBC_News_Network" target="_blank">CBC News Network</a> video that will allow you to choose a day from the past then review and search the news stories <em>On This Day</em>. The third is a project with <a href="http://www.cwc-afc.com/home.cfm" target="_blank">Canadian Women In Communication</a> helping women in the TMT [Technology, Media and Telecommunications] industries who are trying to move their careers into the full potential of the digital realm. We've just completed three in-person seminars in Toronto, Montreal and Vancouver, which we're now building into a series of online learning modules.</p>
      </dd>
    </dl>

    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-martha-ladly-ocad.jpg" alt="OCAD">
        <figcaption>
          <em>Photo credit: <a href="http://www.interiorimages.ca" target="_blank">Richard Johnson</a></em>
        </figcaption>
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What kind of material do the seminars cover?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>One of the sessions that we did in Montreal with digital artists, Mouna Andraos and Skawennati Fragnito, was called "Good Enough: Iterative Design And Digital Thinking". It was all about the <a href="http://en.wikipedia.org/wiki/Iterative_design" target="_blank">"Good Enough” design methodology</a> that's used a lot in game and app design. You design and put together something quickly that has all of the features you need but without the bells and whistles. You put it onto a platform and then collaborate with your users – the people who are going to be your audience – and you figure out the improvements together.</p>
        <p>That kind of "Good Enough" mentality can also be applied to how you advance through different stages in your life. You just have to know "enough" to know that you've got that grounding, that you're open to new ideas, and that you're open to learning.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>You just have to know "enough" to know that you've got that grounding, that you're open to new ideas, and that you're open to learning.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Do you see having a risk-taking mentality as a barrier to entry for women who want to join the tech industry?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Women can quickly access the information that they need to kickstart or fast-track their knowledge and learning. But it’s true that our research has found that when women are looking at advancing their careers they can they fall short when applying for a new position, particularly if they're coming from a more traditional area of media (the telecommunications industry, for example) and they're trying to move in to one that's more technologically mediated. And let’s face it – nearly every industry now requires a lot more technological knowledge.</p>
        <p>When looking at a job description, women will go through all of the requirements and if there are ten things the prospective employer is looking for, they'll figure that if they don't have nine or all ten of those qualifications that they won't actually be suitable or qualified for the job. And so they won't go for it as often as a man would.</p>
        <p>A guy might look at that job description and go <em>“OK so they're looking for these ten things, yeah I'm pretty confident about five or six of them, two of them I can I pick up, I know nothing about two of them but you know, hey I'll go for this job.”</em> Whereas a woman might go – <em>“Oh I'm not so sure. If I can't go in and show that I can perform in at least nine or ten of those categories, I'm not going to get hired.”</em></p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Why do you think that is?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Women need to feel that they know enough: that they can move into new areas and be able learn within them, that they'll be able to learn from their colleagues and from their experiences, and that they'll be able to manage in that atmosphere. Women can begin to relax more and be confident in their abilities – what they know and what they can learn on their feet – without thinking that they have to hyper-perform.</p>
        <p>We try to teach our students the value of making mistakes and failure. You can't succeed without failing. Sometimes you have to fail really big to actually understand what you need to learn, and how to do that quickly, so that the next time you're prepared and ready to take a more qualified risk. If you don't have the confidence and the courage to take risks in your own career you're not going to get very far.</p>
        <p>I think sometimes women feel that they can’t compromise a comfortable position for one where they're going to have a lot of anxiety. But we have to be able to move ourselves over those barriers and out of our comfort zone. We have to feel the confidence to be able to take those risks and get the rewards. And have fun with it!</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>If you don't have the confidence and the courage to take risks in your own career you're not going to get very far.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">You’re also currently working on your Ph.D. too, is that right?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>That’s right, I've been chipping away at my Ph.D. for the last five years. It’s called Eros, Women, and Technology and it’s about how women interact with technology and the place of the erotic body in technology.</p>
        <p>I think the place and importance of the body, and particularly the erotic body, has been lost in technology. Many women aren’t so willing to make the tradeoff between the mind and the body; they want to communicate without getting themselves lost in their own heads and leaving their bodies behind.</p>
        <p>The Ph.D. is a philosophy degree but based in my field of work, so my thesis includes things like the history of women artists using personal technologies such as photography and videography, the history of women’s education in technology, how women are concerned about their children's use of technology, how technology has impacted women’s lives and bodies in areas such as the now very technologized act of childbirth and how that affects women's health. It's a big topic! It's probably a bit too big [laughs]. So at the moment I'm scaling back and refining it, and pulling it all together.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">It’s interesting because it feels like the tech industry is finally beginning to acknowledge the role of women in technology. Has academia done a better job at highlighting this topic?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>One of my committee members, <a href="http://edu.yorku.ca/faculty-profiles/#164165" target="_blank">Jennifer Jenson</a>, and one of my colleagues, <a href="http://apache.ocad.ca/faculty_biographies/bio.php?bid=1436&amp;fac=design" target="_blank">Emma Westecott</a>, are doing a lot of very interesting work on women and games. And I think there have been a lot of good studies in this area for quite a while. It’s an important area because it's a way in. How many guys do you know who are working in technology found their way in through a love for video games? Well guess what: video games for a long time were not that appealing to girls. Some girls love first person shooters but lots of girls really don't. They often prefer collaborative and narrative games. And there aren't nearly so many of those available, and very few have been designed by women.</p>
        <p>There aren't many studies on how to get more women into technology, so I wanted to add my perspective as a woman who has been working in technology for the last three decades. It's become clear to me that things haven't really progressed, and that it's not just a bit of a problem – it has actually become a bit of a crisis.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>Some girls love first person shooters but lots of girls really don't. They often prefer collaborative and narrative games. And there aren't nearly so many of those available, and very few have been designed by women.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What was it that drew you into technology? Did you play video games growing up?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>You know what, [laughs] the first video games only began to appear once I was grown up! I do remember being immediately taken by Space Invaders, the arcade game; I was addicted to it rather quickly. And it was interesting because I first played it in the UK, when I was over there with <a href="http://en.wikipedia.org/wiki/Martha_and_the_Muffins" target="_blank">Martha and the Muffins</a> recording our first album and we all thought, "Wow, this is fantastic!" They didn't yet have it over here so we were all trying to figure out how we could introduce Space Invaders to Canada [laughs].</p>
        <p>But I’d been working with computers a long time before that. I'd been working with computers since I was about 19.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>There was something abstract about [programming], something tangible that I really liked. I'm not a mathematician [...] but it seemed visual and physical, something I could get my hands on.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">So you had a start in technology before recording your first album. Looking back at your career, I had the impression your successes in music, design and technology were all distinct periods of your life, but perhaps they were more interwoven than I had imagined.</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>When I was younger I really wanted to go to art school here at OCAD (it was the Ontario College of Art at the time), and I needed to make money to pay for my tuition. I got this funny little job where a woman trained me to do punch card programming for big mainframe computers. This was before there were even keyboards and displays. I didn't know anything about it, but it had a logic to it that I really liked, and I was not afraid of it. Once I learned to do basic programming I realize that I enjoyed it, and I could work independently; I didn't have to do a 9-5 job, I could program and do data entry and data analysis in the middle of the night if I wanted. It was a good job and it put me through art school.</p>
        <p>There was something abstract about it, something tangible that I really liked. I'm not a mathematician (I don't have that kind of brain), but it seemed visual and physical, something I could get my hands on. Also, lots of people didn't know how to do it, so it felt sort of like a secret and I felt kind of powerful.</p>
        <p>At the Ontario College of Art, I was most interested in working in sound, video, <a href="http://en.wikipedia.org/wiki/Holography" target="_blank">holography</a> and disciplines that had technology supporting them. I also did painting and drawing which I had always done, but I wanted to figure out how to combine them. So I took animation, film and video editing; I created sound pieces and edited video to them. The great thing was that in those early days – I'm talking about the late 70s – we had all of the facilities here at the school. We had some of the very first synthesizers, which were not keyboard synthesizers but <a href="http://en.wikipedia.org/wiki/EMS_Synthi_A" target="_blank">peg-board synthesizers</a>.</p>
        <p>And then I met my pals from the band that I ended up joining, Martha and the Muffins, and we were all really interested in using new instruments and experimenting with tape and sound. We were playing with technology and making abstract sound pieces before we were making music together.</p>
      </dd>
    </dl>

    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-martha-and-the-muffins.jpg" alt="Marth and the Muffins">
        <figcaption>
          Martha provided keyboards and backing vocals for the band, who after being picked up by DinDisc were flown over to England to record a debut album. <em>Photo credit: <a href="http://www.facebook.com/peter.noble.39" target="_blank">Peter Noble</a></em>
        </figcaption>
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Was there any kind of precedent in your family of having an aptitude for technology?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Both my daughters now work in technological fields too, but no, not really. I mean, I had an artistic and musical family, but you know, this was before technology was really a thing. I do remember taking one of those aptitude tests, and for some reason mine said I should be a mechanic [laughs]. I always did like making things, taking things apart and putting them back together.</p>
        <p>For me, the way in to technology was not through science and math, it was through making. It was through art, it was through design. I was just really privileged to be able to mess around and play with technology without feeling scared by it. I never felt like I couldn’t do this.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>For me, the way in to technology was not through science and math, it was through making. It was through art, it was through design.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">It seems to me that throughout your career you’ve had many interdisciplinary collaborations with established experts in other fields. Is one of the ways you learn new technologies through collaboration and through mentors?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I do a lot of learning with other people, and I do a lot of learning just by experimenting. I always have. I'm not somebody who sits in the studio on my own and creates great pieces of art. I need to actually work with people, talk with people, take on their ideas, shape and mold them with my own.</p>
        <p>One regret in my life is that I've never really had one focus. I could never choose between art or music. So I decided that I was going to do art and music. I think I just get bored easily. I love to work to the point where I think I know just enough about something to be able to move on to the next thing. But it gives me the opportunity to work with lots of different sorts of people. I love learning from real experts, by hanging out with them, by collaborating with and listening to them. I have to say, the work I've done my entire life has been collaborative.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">It was experimenting and collaborating with your friends at OCAD that lead to a successful music career with Martha and the Muffins. How did the band end up leaving Canada for the UK?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p><p>At the time when I was in Martha and the Muffins you couldn't actually be anybody in Canadian music until you were somebody somewhere else. The Canadian music industry just couldn’t believe that you could come from the suburbs of Toronto and be world class musicians. So the band went to the UK and that's where we made it. We still have a following over there.</p></p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>At the time when I was in Martha and the Muffins you couldn't actually be anybody In Canadian music until you were somebody somewhere else.</p>
    </aside>

    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-martha-and-the-muffins-at-the-edge.jpg" alt="Martha and the Muffins at the edge">
        <figcaption>
          <em>Photo credit: <a href="http://www.flickr.com/photos/mcwidi_2/3820431385/" target="_blank">Dan (mcwidi_2)</a></em>
        </figcaption>
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">And were you still pursuing your art during that time in the UK?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>We actually used the artwork from my graduate show as the cover for Martha and the Muffins’ second album, <a href="http://en.wikipedia.org/wiki/Trance_and_Dance" target="_blank">Trance and Dance</a>. I thought to myself, hang on – hundreds of thousands of people are going to see this cover, because you know, it was a followup to a Top Ten album. But when I showed the piece in my graduate art show, maybe a hundred people got to see it. That kind of convinced me that really I needed to be working in design.</p>
        <p>The band split up in 1981 and I stayed in the UK to pursue a solo career, work with other musicians, and learn how to be a designer by working with one of the best designers in the world, Peter Saville, who happened to be at DinDisc (our record label) and had worked with us on all of our album and single sleeves. Peter was also soaring to fame with <a href="http://www.guardian.co.uk/music/gallery/2011/may/29/joydivision-neworder" target="_blank">the work he was doing</a> with Joy Division and Factory Records. I worked really closely with Peter at Peter Saville Associates.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">So you didn't have a formal training in graphic design?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>No, I didn't have any formal training. I had done a lot of illustration work, and I knew how to draw and used my skills in that way, but I didn't have any formal training in graphic design. I learned how to do graphic design by doing it.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Your graphic design work seemed immediately very mature and advanced, was this a result of working closely with Peter Saville?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>It was working closely with Peter and all of the designers at Peter Saville Associates. What I mainly did at the agency to begin with was a lot of the research. My art history background was really helpful and I knew typography so I was able to help source ideas and images and things like that. This was just at the time that designers were beginning to experiment with computers, but it was still mainly cut and paste and photographic imaging.</p>
        <p>Because I had experience working with computers, as soon as the personal computer became available I got my first mac and immediately started working with it. Things began to make total sense to me, and I realised I really could become a graphic designer if I could work on a computer. Working with design programs wasn’t nearly as difficult as all the measuring; you had to be really, really exact with graphic design before the computer came along, you didn't get to experiment very much, and you didn't get to make many mistakes because mistakes were expensive.</p>
        <p>So I trained myself to learn the technological side of design and that's how my career in new media started and eventually took off.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">It's becoming more and more of a trend in technology companies, especially within startups, to put design at the core of business. With a background in both technology and design, how do you see design’s influence on technology?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>It's one of the founding ideologies of OCAD University that making through art and design is a way of thinking. Design brings great insights to concepts, ideas, materials, and visualising ways of bringing those concepts into the world through technology. It isn't something that is laid on top like a skin. If you don't think from a design point of view about how you're going to make an aesthetically pleasurable, delightful and highly useful product, then it's never going to be any of those things.</p>
        <p>Design also asks “why” questions, the kind of questions that if answered early on can differentiate a good product from a mediocre one. Fundamental questions such as: who is this really for? Why do they want to use this? In what capacity are they going to use this? Or where? And how will it improve their life, make it easier, more understandable and manageable, richer and more pleasurable? Those sorts of questions are often overlooked.</p>
      </dd>
    </dl>

    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-martha-ladly-selected-works.jpg" alt="Martha Ladly Album Covers">
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">How did you end up working as a design manager with Peter Gabriel?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I first met Peter Gabriel when I was working with Peter Saville and Trevor Key on designing the <a href="http://en.wikipedia.org/wiki/So_(album)" target="_blank">So album</a>. I was working as a graphic designer, but I was still continuing to make music and work in the music industry. I did a couple of singles of my own and put those out. I worked with a band called <a href="http://www.youtube.com/watch?v=-z04_5pCkaE" target="_blank">The Associates</a>, and we had a couple of Top Ten singles, and then I did some work with <a href="https://www.youtube.com/watch?v=9yu1SUAzbt0" target="_blank">Roxy Music</a>. It was at the end of a big tour with Robert Palmer when I realized that having children and being in the music business full time was actually really, really hard. I had two little kids then and my husband was a musician as well, a classical musician. He was on tour all the time, I was on tour, and we were trying to figure out how to have this life with children.</p>
        <p>I just thought 'this is not the way to bring up a family so I'm going to have to focus on doing stuff that's closer to home.' I decided to get out of London and moved, quite by chance, to the same village in the English countryside where Peter Gabriel had his <a href="http://en.wikipedia.org/wiki/Real_World_Studios" target="_blank">Real World recording studios</a>.</p>
        <p>I ended up going down to the studios one day to hang out with my friends in New Order, who were recording an album there. I knew everyone in the band quite well when I was working with Peter Saville (I had been involved in a lot of the work with them for <a href="http://en.wikipedia.org/wiki/Factory_records" target="_blank">Factory Records</a>), and we were all sort of music business pals. I just thought “Hang on! There are things I could do here! And I need a job!” [laughs]. So I met up with Peter Gabriel and proposed that we do something together and he said “Yes!”.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What did you work on together?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I worked on one of Peter’s projects, a very cool magazine called The Box, all of the album and tour promotion, merchandise, advertising, assisting with videos; we put his entire fan club online.  We were some of the first people I think to be doing online interaction, and this was in the days before internet browsers.</p>
        <p>The next logical step was to do all of the design work in-house, so we formed a department with a really talented group of young designers that took over the work for all of Peter's and the Real World Records artist's album sleeves. Peter had artists coming through the studio all the time who needed record sleeves and needed design. It was lots of fun.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">You mentioned your move to the countryside to raise your girls and focus on being a mother. Did that decision make it difficult to keep working and keep up with the fast pace of technology?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>It wasn't just about being a woman or a mother; having a career in technology whether you’re a woman or a man – there's so much you need to do to keep up, even if it's just in your particular area of technoculture. In the beginning, we were on the edge; we were a part of creating the revolution in information, communication, and entertainment technologies. Things were happening fast, and they are now moving and accelerating all the time and the stuff that I don't know about my field is now much, much larger than the stuff that I do know. But it's okay, because I don't think you have to know everything about everything to understand your field and to make an impact in it.</p>
        <p>I think it's really important for women to work. It was important for me that I work to set an example for my own daughters and for me to know enough about technology to be current – in fact, creating currency – and to teach them; I really wanted my daughters to feel comfortable with technology and to enjoy it. I bought them drawing programs for the computer when they were little, they played with my computer, learned how to be technologically creative with software like <a href="http://en.wikipedia.org/wiki/Kid_Pix" target="_blank">Kid Pix</a> and they loved video games like <a href="http://en.wikipedia.org/wiki/The_Sims" target="_blank">the Sims</a>.</p>
        <p>It’s one of my regrets that I probably didn’t get to spend enough time with the girls when they were little. But when you work in technology, when you work in music, when you work in design – you are inevitably clocking late nights. You sometimes work all through the night and I still occasionally do that if I’ve got a deadline. You just have to keep going. It all worked out and now both my daughters work in technology so they appreciate what it means to have to work to those crazy deadlines.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>We were on the edge; we were a part of creating the revolution in information, communication, and entertainment technologies.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What do your daughters do?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Like me, they're both musical as well as artistic. Neither of them had a head for math or science and like me they found their way into technological fields through the arts and through writing, research and designing. It’s worked out really well for both of them.</p>
        <p>My elder daughter has got this fantastic job as the lead mobile designer for <a href="www.net-a-porter.com" target="_blank">Net-A-Porter</a>, the largest online fashion retailer in the world. She's designing new more personal and social ways to interact with style and fashion and editorial content; it's kind of a dream come true job. She knows so much more about designing for mobile than I do now and she has learned really fast, even though I remember a couple of years ago she called me up from London and asked, "Mom, can you walk me through creating a wireframe?" It was her first day in a new position, and she was learning on her feet – that is what I mean about taking risks! She picked it up really quickly.</p>
        <p>My younger daughter is also working with fashion at an online luxury gifts company called the <a href="http://www.gift-library.com/" target="_blank">Gift Library</a>. She's recently graduated so she's still finding her way, but she's doing a lot of social media strategy and content, writing for all of the different platforms that you have to be present and relevant in, for multiple audiences.</p>
        <p>I'm just so happy to see them both building careers that have their artistic interests bundled up into interesting new areas of technology. I think that what they and the people they work with are doing will change the way we learn about and buy new products that are useful and delightful.</p>
      </dd>
    </dl>

    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-martha-ladly-daughters.jpg" alt="Martha's Daughters">
        <figcaption>
          <em>Photo credit: Martha Ladly</em>
        </figcaption>
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Do you have any advice on how women can balance the demands of a career in technology and motherhood?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>The trouble with technology is that you've got so many choices. There are always lots of different ways of approaching things. Those choices create a lot of noise and distraction. I've had to be really judicious about learning to make hard decisions. When I’m working, especially if it’s in a team, I have to say “We're going to do this and have it done by this time. There may be other things that we could do but we'll have to try and figure those out in the next iteration.”</p>
        <p>Making those hard decisions and trying not to get distracted and work all night too often is really the challenge. I think women who have children sometimes get really consumed and caught up with this.</p>
        <p>From the women I have interviewed for my thesis, it’s clear that mobile technology has really helped us balance our demands because it allows us to be more flexible with our work schedule. But it also means that we don't have that wall around our professional lives. The professional and personal merge a lot more now, and so again you have to be really quite disciplined with yourself. It can really pull and push you in different directions. ‘Should I be working now or should I be spending more time with my family or should I be getting to bed early because I've got to be up early tomorrow?’</p>
        <p>These decisions are difficult for everybody but I think that they're more difficult for women because we still seem to have to take on the majority of the responsibilities with caring for children and the home. Despite the fact that men are pitching in way more than they used to, when it comes right down to it women often take the lead and do most of the work, even if they have big, full time, professional responsibilities.</p>
        <p>Women need to learn how to let go of this, to expect to share parenting and caring responsibilities, and let men help them carry the load. That will make the working world more tolerable and more equitable, and better for women, for men, and for children too. This has to change, it is way overdue, and it will be an improvement for everyone.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>[Women need] to expect to share parenting and caring responsibilities, and let men help them carry the load. That will make the working world more tolerable and more equitable.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">In our last interview <a href="http://womenandtech.com/interview/dessy-daskalov/">Dessy Daskalov</a> asked, “How are you changing the status quo and what are you doing to change the things you don't like about the world?”</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Well I think that's pretty simple. The status quo has to be that there are many more men working in technology than women. That imbalance affects the world in fundamental ways. It affects the way that we interact with each other through technology and most importantly the way we communicate.</p>
        <p>I am changing the status quo by actively getting more women involved in technology, by being a role model, by teaching them, by including them on my research teams, by talking to them about what they want and by making sure that we include women not just in the design process but in the design outcomes.</p>
        <p>I really hope that in my lifetime we will achieve a balance, that men and women working in technology will create more equitable technological outcomes for both men and women, in both the developed and developing worlds, to share and benefit from equally.</p>
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