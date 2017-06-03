<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-yellow';
  $interviewee_name = 'Lucia Mariani-Vena'; // Page title & share links
  $interviewee_url = 'lucia-mariani-vena'; // Share links URLs

  // Twitter & Facebook sharing info
  $social_title = 'Interview with Lucia Mariani-Vena by Ivonne Karamoy';
  $social_desc = 'Co-founder of the Toronto chapter of Girls in Tech, a global movement to unite women working in technology.';
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
  $interviewer = "Ivonne Karamoy";
  $interviewer_url = "http://twitter.com/ivonnekn";
  $photos = "Full Name";
  $photos_url = "";
  $editor = "Full Name";
  $editor_url = "";
  $ad = "Full Name";
  $ad_url = "";
  $design = "Full Name";
  $design_url = "";
  $dev = "Full Name";
  $dev_url = "";
  $transcribe = "Full Name";
  $transcribe_url = "";


  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

  <main role="main" data-interview>

    <!-- Featured Image -->
    <div class="border img-feature">
      <figure>
        <img src="<?php echo $path_img; ?>featured-lucia-mariani-vena.jpg" alt="Lucia Mariani-Vena">
      </figure>
    </div>

    <!-- Interview Header -->
    <header class="border header-interview">
      <div class="wrapper-sm">
        <h2>Lucia Mariani-Vena</h2>
        <p class="intro">Lucia is responsible for the genesis of <a href="http://www.girlsintechtoronto.com" target="_blank" title="Girls In Tech Toronto website">Girls in Tech Toronto</a>, the local chapter of a global movement to unite women working in technology. We dig into her story to pinpoint how exactly she fell in love with her career and to find out what it is like to be a <em>mother</em> in tech.</p>

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

    <!-- Q&A -->
    <dl class="border">
      <dt class="interview-q">Tell us a bit about yourself and how you got your start.</dt>
      <dd class="interview-a">
        <p>I’ve been in the industry for about 10 years. I completed my Arts Management degree at the <a href="http://www.utoronto.ca/" title="University of Toronto official website">University of Toronto</a>. That was where I started in web design. They wanted someone with an artistic background who could learn to code on the fly. At the time, they were trying to get faculty members to publish their dissertations in electronic format so I started designing ebooks and educational websites. I eventually landed at St. George Campus working with the VP of Research doing web design and development to push out the exciting research that was happening at the university.</p>
        <p>I did my Masters in Information Systems part-time at U of T while I worked. That was an interesting program because it was funneled through the library program so you got to work with people from different disciplines like engineering, architecture, computer science and library science. We built prototypes for various interfaces and you had eight weeks to build something. It had an incubator kind of feel.</p>
        <p>Around that time, I met my husband in an Intro to HTML class. Up to that point I had been hacking and learning everything on my own so I thought let’s go to college for a bit and learn some of the practical stuff. We now have two children together. When I took my leave at U of T, I jumped into his company, <a href="http://www.feastinteractive.com" target="_blank" title="Feast Interactive Inc. website">Feast Interactive</a>. He had been doing a lot of web development for different brands and I thought he should really push the social media side of things, so I started doing digital strategy for him. Now I’m taking all of my experience and applying it to this company that we’re growing together.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>That first year when you’re at home [with kids] is a huge transitional time – it is for many women I think.</p>
    </aside>

    <dl class="border">
      <dd class="interview-a">
        <p>After my son was born, I started getting involved with <a href="http://girlsintechtoronto.com/" target="_blank" title="Girls In Tech Toronto website">Girls In Tech</a>. It’s hard to jump from being a professional and working a lot to staying home with the kids. I needed to do something. That first year when you’re at home is a huge transitional time – it is for many women I think. So I started the Girls in Tech group in Toronto.</p>
      </dd>
    </dl>

    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-lucia-mariani-girls-in-tech-2.jpg" alt="Lucia Mariani-Vena Girls In Tech">
        <figcaption>
          Girls in Tech, co-run by Lucia, provides a forum where women share projects they are passionate about.</a>
        </figcaption>
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Did Girls in Tech already exist at that time?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Not in Toronto. One late night I was looking for a group, a network of other women in tech to reach out to. I found this organization in the States: Girls in Tech, but I noticed there wasn’t a local chapter in Toronto. So I reached out to them and told them I’d be interested in starting one. At the same time, my partner <a href="https://www.linkedin.com/in/nkhera" target="_blank" title="Neha Khera's LinkedIn">Neha Khera</a> was also interested so we connected and decided to get it going.</p>
        <p>We were seeing the same people saying the same things in conferences and we wanted to bring different people, different women to the table and give them an opportunity to showcase their work and present their ideas through Girls in Tech. It’s been about a year and a half and we’ve had six events so far. It’s really taken off. We have a good community and it keeps getting better.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Do you see the same women coming to Girls in Tech events?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>It varies. There’s always the core group but different people come out depending on the content. For one
          session we had an <a href="http://girlsintechtoronto.com/gitdot-events/women-in-tech-whos-enrolling-and-sticking-to-it/" target="_blank" title="Women in Tech, Who’s Enrolling and Sticking To It event page">academic panel</a>. There’s a high dropout rate of women in STEM [Science, Technology, Engineering and Math] and we wanted to ask why this was happening so we brought in some academics who do research in the area. That drew a different crowd. We met women with a tech background who came to Canada looking for jobs and were having trouble finding something. I really didn’t know how to help them. I find it interesting that that’s happening in Toronto. It stuck with me and I haven’t addressed that yet.
        </p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What thoughts came out of that panel?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p><a href="https://uwaterloo.ca/mechanical-mechatronics-engineering/people-profiles/mary-wells" title="Mary Wells' profile page on the University of Waterloo website" target="_blank">Mary Wells</a> who is at the University of Waterloo – she’s an engineer, a mom and a really impressive woman. Her thesis is that you really have to get to children when they’re young, like grade 4 or 5 to get them interested in the sciences and math. After that, it’s a bit too late. That’s her philosophy.</p>
      </dd>
    </dl>


    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Do you think that the structure of these programs need to change?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I think women tend to stick to certain fields like health and education because down the road the schedules are more accommodating to the life they want to have. But what I’ve learned so far is that even though I have less time because I’m a mom and I have two kids to take care of, I have chunks of time where I can be efficient and get things done. You have to be very focused. That’s a certain mindset you have to learn. One of two things happens: you either become overwhelmed or you become very efficient.</p>
      </dd>
    </dl>

    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-lucia-mariani-photo-2.jpg" alt="Lucia's son">
        <figcaption>
          Lucia is a mom of two in addition to her work in the community.
        </figcaption>
      </figure>
    </div>

    <dl class="border">
      <dt class="interview-q"><em>Were</em> you overwhelmed?</dt>
      <dd class="interview-a">
        <p>Yes. Everyone has different choices but I breastfed my children. I was up with them at night and especially with the first one, you don’t know what to expect. Lack of sleep and being tired is overwhelming. You feel like you’re unplugged from the world. But I invested in an iPhone and I used it to keep reading. I would read when I was up breastfeeding. That’s when I became very active and more involved. Being connected empowered me and helped me to keep up with the world and the industry.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I’ve always been an information buff. I loved encyclopedias, I loved reading. When the Internet came around I wanted it.</p>
    </aside>

    <dl class="border">
      <dt class="interview-q">How did you become interested in technology initially?</dt>
      <dd class="interview-a">
        <p>I’ve always been an information buff. I loved encyclopedias, I loved reading. When the Internet came around I wanted it. I remember when the information superhighway was kind of a big issue with the Ontario government – were they going to censor it? That’s when I got really interested. I lived in a small town and there wasn’t much to do, so my way of connecting with people and seeing the world was through the Internet and learning. Nobody took my hand and said “Here, learn HTML.” I was just curious and discovered it on my own. That’s what’s so great about technology, you can just unbundle it yourself.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What attracted you to building websites?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I liked the design aspect of it. You were creating something. I liked the taxonomy side and the user interface side of it. I liked taking thoughts and ideas that were on paper and then translating them and putting them on the web.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Did you have any mentors in your career?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I’ve worked with two men in my career that influenced my professional beliefs and my philosophy. My first boss at U of T, William Barek, was an early adopter of Apple computers and lived and breathed everything Steve Jobs. He was well-read and so into technology. He had all the latest gadgets – he had ten ebook readers and this was back then. People would send them to him and he would hack into them. He was so passionate about technology and thought that eReaders were going to replace hardcover books. I was drawn to that passion and he really opened my eyes to Apple systems, open source and that part of technology that I hadn’t seen before. I also worked with another gentleman named Paul Fraumeni. He had an ad agency background and opened my eyes to writing and the creative aspect of technology that comes from the agency world.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What challenges have you faced working in the tech industry?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I think one expectation that can sometimes be placed on the only female member of the team is that they really want you to be the nurturer, the one that brings everyone together. If you don’t act that role, they hold that against you, at least in my experience.</p>
        <p>I was told once in a performance review that smiling and being happy is how they expect me to act in meetings and client presentations. I think that’s a gender-bias. I don’t think you would ever tell a man that he needs to be more happy or upbeat. That’s not really what a performance review is all about. Some days you don’t feel like smiling.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Anne-Marie Slaughter’s <a href="http://www.theatlantic.com/magazine/archive/2012/07/why-women-still-cant-have-it-all/309020/" title="Online version of the article Why Women Still Can't Have It All by Anne-Marie Slaughter in the Atlantic Magazine">article in The Atlantic</a> talks about how difficult it is for women to “have it all”. How have you been able to balance your career goals and your personal life?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I’m still trying to figure it out, it’s tough. I think working with my husband in our business will be a lot easier to manage than working the nine to five. Right now I can put in my time at different points when I’m most efficient. I can put my kids to bed and work another three hours. When you’re sharing a business with someone else you’re both tapped in and you can plug in at any time.</p>
        <p>There needs to be a lot more co-working. I think that would help. If you feel like you can bring your child somewhere and still do what needs to be done, I think that would be helpful to women.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>People talk about having it all, but I just said I’m not gonna think about that anymore. I’m just going to do what I do.</p>
    </aside>

    <dl class="border">
      <dd class="interview-a">
        <p>Now the kicker for me is my daughter was born with moderate hearing loss. She’s almost a year now. She wears hearing aids. So one parent has to take on that role of early educator. We have to train her brain to listen with the hearing aids. She’s pretty much learning the basics of language and breaking words down to the simplest sounds and then building on that. Somebody needs to be there with her to help her do that, which makes things more complicated.</p>
        <p>We got that news at two months and it was shocking, but it was also a moment for me to say either I’m going to bury my head down and be so devastated for her, or I’m going to keep doing what I’m doing. I’ve stopped thinking about whether I’m keeping up. People talk about having it all, but I just said I’m not gonna think about that anymore. I’m just going to do what I do.</p>
      </dd>
    </dl>

    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-lucia-mariani-photo-3.jpg" alt="Mom Lucia Mariani-Vena">
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Did having a family change your perspective on the industry or the role of women working in the industry?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>You really start thinking about it when everyone sees that you’re pregnant. That’s tough. Showing up in client meetings and pitches you’re wondering, are they not going to accept us because I’m pregnant? You internalize a lot of those things. That’s when you think about your role. Sometimes you think that you’re holding the team back. I wanted to go up for a promotion and I started to think, can I do that or are they going to say, well maybe we’ll wait until you come back? It can hurt your pay because you’re not necessarily going for that promotion. And it hurts your morale and confidence a bit.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>Showing up in client meetings and pitches you’re wondering, are they not going to accept us because I’m pregnant?</p>
    </aside>


    <dl class="border">
      <dd class="interview-a">
        <p>The reality is that you have to find it within yourself to overcome that. I used to approach it as this super person, like “Yes I’m pregnant but this doesn’t change me” or “Yes I’m a mom but this doesn’t change me.” Then after awhile, you say I am who I am now and I’m gonna be good at it.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Maybe there needs to be less talk about having it all and more doing?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Yeah, but you have to feel like you have the support to do what you need to do. That includes having supportive work and home environments. I’ve been fortunate because I have both. U of T has been very supportive throughout my maternity leave; they’ll work with me if I decide I need to go back to work and have that secure income to support my family.</p>
        <p>I also love working on my own thing and growing our business and it’s going well. But there are a lot more unknowns when you’re running your own business. I have to figure out how much risk I can take. When you’re thinking about work-life balance you have to manage your career the same way you would manage your portfolio – your funds, your RRSP [Registered Retirement Savings Plan]. Do you want a lot of risk or just a little? You have to think to yourself, what can you sleep with at night? But you don’t have to check out. For me that’s not an option.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>Do you want a lot of risk or just a little? You have to think to yourself, what can you sleep with at night?</p>
    </aside>

    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-lucia-mariani-girls-in-tech-1.jpg" alt="Lucia Mariani-Vena Girls in Tech event">
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What goals do you have for your career?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I’ve always done things that felt right. I never really followed the money trail. I’ve always worked on things that I’m passionate about and I’d like to continue that. I know I want to be more along the lines of this digital strategist that I am at Feast Interactive. I see myself in a leadership role and would like to establish myself in Toronto as a leader in the industry.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Is there anything exciting that you’re working on that you want to tell us about?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>With Girls in Tech, we’re starting to leverage the global network that we have access to. Toronto is very vibrant and active and there’s a lot of opportunity here. It took some time for the worldwide Girls in Tech community to notice Toronto because they want to see how dedicated you are at first. But now I feel like we’re in the same league as LA, New York, Paris.</p>
        <p>With Feast Interactive, we’re filling a void. A lot of companies don’t want to manage social media marketing, they don’t know how, and we’re helping them with that. Right now, we’re working with a lot of startup brands in Canada which is really great because when they grow, we grow with them. We’re working with companies who believe in organic growth and doing it in an honest and real way. It’s been really exciting to be along for the ride.</p>
      </dd>
    </dl>

    <!-- // Team Signature -->
    <div class="border signature">
      <p>
        with <i class="fa fa-heart-o theme-color" aria-hidden="true" title="love"></i><span class="screen-readers">love</span>
        from <span class="team theme-color">the Women&&Tech team</span>
      </p>
    </div>



    <!-- // Latest 3 Interviews -->
    <?php include($path_inc."latest-interviews.php"); ?>
  </main>

<?php include($path_inc."footer.php"); ?>
