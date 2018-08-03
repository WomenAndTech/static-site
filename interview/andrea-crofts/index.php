<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-blue';
  $interviewee_name = 'Andréa Crofts'; // Use for page title & share links
  $interviewee_url = 'andrea-crofts'; // Used for share links URLs, use the same name as the interviewee's folder name

  // Twitter & Facebook sharing info
  //-----------------------------------------------------------------------------
  // Social media images are added in the metatags in includes/header.php to always pull in the feature image from this interview. Make sure the featured image always follows this format: featured-firstname-lastname.jpg
  $social_title = 'Interview with Andréa Crofts with Victoria Whang';
  $social_desc = ''; // Use the description from the archive page.

  // INTERVIEW CREDITS
  //-----------------------------------------------------------------------------
  /* If you need a second name, add a variable with a '2' the end. Example:
    $interviewer = "First Person";
    $interviewer_url = "http://twitter.com";
    $interviewer2 = "Second Person";
    $interviewer_url2 = "http://mywebsite.com";
    If you don't need a credit, delete the whole <li> in the HTML.
  */

  $interviewer = "Victoria Whang";
  $interviewer_url = "https://victoriawhang.com/";
  $editor = "Ivonne Karamoy";
  $editor_url = "https://ivonnekaramoy.com/";
  $dev = "Victoria Whang";
  $dev_url = "https://victoriawhang.com/";
  $transcribe = "Victoria Whang";
  $transcribe_url = "https://victoriawhang.com/";


  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

<main role="main" data-interview>
  <!-- // Featured Image -->
  <div class="border img-feature">
    <figure>
      <img src="<?php echo $path_img; ?>featured-andrea-crofts.jpg" alt="Andréa Crofts">
    </figure>
  </div>

  <!-- // Interview Header -->
  <header class="border header-interview">
    <div class="wrapper-sm">
      <h2>Andréa Crofts</h2>
      <p class="intro">Andréa Crofts is a design leader, community builder, product designer, recovering front-end developer and hand-letterer, currently leading a team at League as Product Design Manager. She is a champion for accessibility; most recently driving a conversation on inclusive design at FITC. We had a chance to discuss her career thus far, her passion for thoughtful and authentic design, the process of co-founding the Toronto chapter of Hexagon UX, and the importance of mentorship in the tech community.</p>
      <p class="italic">At the time of this interview, Andréa was transitioning from her role as a Senior Product Designer at TWG to her new role as Product Design Manager at League.</p>

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
    <dt class="interview-q">What was your role at TWG?</dt>
    <dd class="interview-a">
      <p>At <a href="https://twg.io/">TWG</a>, I was a Senior Product Designer where I led design and research on client projects for companies like Wealthsimple, RBC, and World Vision. TWG is a software consultancy, so I was often working on multiple client projects across various industries. For example, I’d work for several months on a Fintech product for a client like Wealthsimple or RBC, and before I knew it I’d be designing a product for <a href="http://www.choosemuse.com/professionals/">mental health professionals to track their clients’ meditation performance</a>. Because our clients ran the gamut from high-growth startup to enterprise companies, I was exposed to a lot of different product challenges. I also mentored designers on our team and developed internal processes as we scaled, but the bulk of my day was spent engaging our clients in collaborative co-creation through design workshops. TWG really lives and breathes human-centred design, and that meant bringing clients into our process and encouraging them to workshop with us to refine product ideas together. It was my favourite part of the job!</p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">What do you do now, at League?</dt>
    <dd class="interview-a">
      <p>I lead our (growing!) Product Design team, where our goal is to empower our customers to lead healthier, more active lives through a digital-first benefits platform. We do this by using human-centered design to make the benefit experience less sh*tty (pardon my French) for companies like Shopify, Unilever and Loblaw Digital. I came to League to work in an iterative, product-focused environment for a mission that I deeply believe in. Given that I’ve transitioned from design to management, my day looks very different than it did two months ago at TWG. A big chunk of my time is spent growing and managing our small (but mighty) team through hiring and professional development. I still work on feature improvements, testing our designs with users, and filling in the gaps where it’s needed. I’m loving the variety and sense of ownership of working alongside a small team with big dreams and huge growth potential.</p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">What did you design for companies like Wealthsimple that have their own design team?</dt>
    <dd class="interview-a">
      <p>When I was at TWG, Wealthsimple came to us to design and build their new product lines- this allowed their team to maintain and grow their core platform. They wanted to create a product for workplaces to create <a href="https://www.wealthsimple.com/en-us/work">RRSP plans for their employees</a>, and Wealthsimple for Work was born. Our team worked on the first iteration of that product, and another one called <a href="https://www.wealthsimple.com/en-ca/advisors">Wealthsimple for Advisors</a>, which I designed. This product was for traditional financial advisors like Edward Jones or other financial planners to manage their clients using Wealthsimple. For example, as a user you would have a Wealthsimple portfolio, but if you were looking for a more high-touch approach to robo investing, you could bring on a financial advisor to manage that portfolio. As an advisor, the product helped you focus on building relationships with your clients. As the client, you would be sent notifications when you’ve reached goals, reminders that RRSP season is coming up, or have tailored sessions with an advisor where you could set financial goals. </p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">What other roles have you taken on prior to League and TWG?</dt>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-andrea-crofts.jpg" alt="Andrea Crofts midair">
    </figure>
  </div>

  <dl class="border">
      <dd class="interview-a">
      <p>I worked in Public Relations and ran my own Graphic Design studio before breaking into Product Design. TWG was where I built my career in Product, in many ways. Before landing my first role, I went to <a href="http://hackeryou.com/">HackerYou</a> for a front-end development bootcamp. This was before they had UX-focused bootcamps at schools like Bitmaker or Brainstation. I knew that as a digital designer, I had to level up my coding skills, and I eventually learned UX design through the constraints of front-end development. When the bootcamp came to an end, I decided to focus on user experience design. I came into it very organically by doing a few projects here and there, mostly through hackathons and challenges for job applications. I applied to <a href="https://www.zynga.com/">Zynga</a>, where I did a redesign of <a href="https://www.zynga.com/games/words-with-friends-2">Words with Friends</a> and found that I loved every minute spent designing software. When I landed the role at TWG, I realized this was a place I could stay for a while and learn on the job. I took this as an opportunity to learn and grow in every way imaginable. TWG essentially became my real-life Product Design bootcamp, and I wouldn’t change this path for anything.</p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">What would you say is the best way for someone to transition from traditional graphic design to a more UX and research-focused role?</dt>
    <dd class="interview-a">
      <p>I’ve been asked this so many times that I’ve written <a href="https://medium.com/the-almanac/pivoting-from-graphic-to-product-design-d85b9affe959">a Medium post</a> about this exact transition. I think these emerging bootcamps are a quick and easy way to pivot from graphic design to UX design. You come out at the end with an understanding of the design process, and a few portfolio pieces you can use to sell yourself and show your skills. Having browsed through hundreds of design portfolios, (many from recent grads) I’ve found that on top of your portfolio, you need an edge to convince a hiring manager that they should hire you. Volunteering for community organizations (within the UX community, or beyond), being part of different mentorship programs, and writing about design on Medium are all things I look for to separate candidates from the pack. If you’re just starting out, look for a mentor – someone who’s been in the industry for two or three years. Often you’ll meet these mentors through community organizations like <a href="https://www.womenwhocode.com/">Women Who Code</a>, <a href="http://hexagonux.com/">Hexagon UX</a>, <a href="http://uxresearchto.com/">UX Research TO</a>, or <a href="https://designx.community/">DesignX</a>. There are so many community organizations hosting regular events to bring this community together. You can be a volunteer or simply come help on the day of the event, meet people… this sends a signal to hiring managers that says this person really cares about their industry and wants to know more about it enough to devote their personal time to getting involved. I think that’s a good place to start. I do recognize that not everyone has time to devote to these initiatives, (such as a mother with young children breaking into UX) so I use different evaluation criteria in these scenarios.</p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>Chances are, someone is two steps behind you and needs that guidance from someone who was there very recently.</p>
  </aside>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-andrea-crofts-speaking.jpg" alt="Andrea Crofts opening speech at Hexagon UX event">
      <figcaption>
        Andréa’s opening remarks at Hexagon UX Toronto’s inaugural event, held at Wealthsimple.
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dd class="interview-a">
      <p>For portfolio pieces and other tangible artifacts used to show off design skills, I’ve seen designers build their books by participating in hackathons and designing freelance projects for charities and small startups. Another avenue is to create a concept from scratch based on a problem you care deeply about; conducting generative interviews to familiarize yourself with the problem space, and prototyping key screens. Going through that process for a self-initiated project creates an authentic manifestation of what makes you tick as a human. For example, a friend of mine is interested in mental health. She designed a native mobile app to document how she’s feeling on any given day and to remind her to take moments throughout the day to breathe. This proof-of-concept prototype also “tracked” her social media usage to see if there was any correlation between social consumption and mood. Her prototype tackled a big challenge and showed that she’s able to consider those problems from concept to creative solutioning. Breaking into this industry requires equal parts developing hard skills with these exercises or hackathons, and honing on your soft skills by volunteering, speaking, and writing about things you learn as you learn them. Chances are, someone is two steps behind you and needs that guidance from someone who was there very recently.</p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">Speaking of extra-curriculars, what do you do for Hexagon UX?</dt>
  </dl>
  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-andrea-crofts-hexagon-ladies.jpg" alt="Andrea Crofts with Hexagon team">
      <figcaption>
        From left to right: Shiera Aryev, Jen Zhang, Andréa Crofts.
      </figcaption>
    </figure>
  </div>
  <dl class="border">
    <dd class="interview-a">
      <p>I’m a Co-Chapter Lead for Hexagon UX Toronto; we’re the Toronto chapter of a global organization aimed to develop the soft skills needed for women and non-binary folks to thrive in their careers. Jen Zhang, Shiera Aryev and I came together in November 2017 and organized our first event in February 2018 at Wealthsimple. Hexagon exists to teach the skills needed to own a boardroom and feel empowered in all aspects of a career in UX design. I attribute my professional growth to the soft skills I developed early in my career, so that’s what resonated most with me about Hexagon’s mission. We create networking events and generate content that gives women and non-binary folks the skills they need to overcome challenges in their professional lives with grit and grace.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-andrea-crofts-hexagon-booklet.jpg" alt="Hexagon UX booklet">
    </figure>
  </div>

    <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>I attribute my professional growth to the soft skills I developed early in my career, so that’s what resonated most with me about Hexagon’s mission.</p>
  </aside>
  <dl class="border">
    <dd class="interview-a">
      <p>Our most recent event focused on negotiation and knowing your worth. We found that these are the types of topics our audience had a lot of questions about, but there weren’t resources out there to answer those questions. There wasn’t access to a supportive network of people that are open to having conversations like, “Hey, I know you’re looking for that promotion in six months. How is that going? How are you working towards that?” Creating a shared sense of accountability, perspective and knowledge sharing is core to Hexagon’s mission. That’s why I help run these events in the community; because there’s a distinct content gap in the soft skills aspect of UX design in Toronto, and beyond.</p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">One thing I’m curious about (and eagerly waiting the announcement for!) is when will you be starting the mentorship program of Hexagon UX Toronto?</dt>
    <dd class="interview-a">
      <p>As part of the broader Hexagon brand, we are required to host four events before opening up the mentorship chapter, so we’re hoping for early 2019. It could be earlier than that, but we’ll have to wait and see. That being said, I want to give a shout out to a great Toronto organization that is already tackling this. It’s called Side x Side Collective. They’re fulfilling this very niche that we just aren’t able to fill right now. It’s wonderful to see organizations pop up targeting the specific needs of our community. They’re going to be an organization to watch for mentoring and pairing junior and intermediate professionals with people who’ve been around the block a few times.</p>
    </dd>
  </dl>
  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-andrea-crofts-sidexside.jpg" alt="Side X Side event">
      <figcaption>
        <a href="https://twitter.com/sidexsideco/status/986962157928513536" title="Side X Side event">Side X Side Co. launch party</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">Have you ever done the mentorship program at Side x Side?</dt>
    <dd class="interview-a">
      <p>I haven’t, mostly because Hexagon itself involves collectively mentoring a large group of women through content curation for our quarterly events. I would like to get into more one-on-one mentorship, but I’ve had to draw the line in the sand these days because the need for self-care is very real. I still do go for a lot of coffees with up-and-coming women in the community, but honestly I’ve had to shift focus to myself for a little while. Having just gone through a career move where I’ve started managing people, I’ve had to tap into my own mentorship circles for advice myself! On a full-time basis, I’m also mentoring my own team at League – my team and the Hexagon community are my #1 priorities right now.</p>
      <p class="italic">It becomes more and more apparent throughout the interview that Andréa values human interaction greatly. She is focused on the development of soft skills and collective support and guidance. While there are tons of bootcamps and online courses that teach hard skills, soft skills require a different type of training. It needs to be personal and requires connections that talented individuals may not have or know how to access. Andréa builds and participates in said communities that enables these conversations. Her extracurricular activities all work towards supporting initiatives that can help creatives level up in their careers.</p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">Do you currently have mentors that you actively reach out to?</dt>
    <dd class="interview-a">
      <p>I do have some amazing mentors, but they’re all men. I was craving female mentorship, which was a big reason I joined League. I report to our Director of Product, the amazing <a href="https://twitter.com/unbrelievable">Breanna Hughes</a>, and benefit from time with our Director of Engineering, <a href="https://twitter.com/mleibovic">Margaret Leibovitz</a> as well. Representation of women in leadership roles is something I want to change in the industry overall, and Breanna extended that olive branch to me when she hired me into a Management role. For the time being, I have three or four really strong male mentors that are at different companies throughout the city. I’ve found those relationships to be really helpful, too. Although they are men, they are definitely of the mindset that they want to empower women to enter these roles. One of them even said “I hope you’re my boss one day.” There’s an empowering quality to that where, although they can’t understand some parts of my lived experience, they’re still strong allies and great mentors in the community. I think that’s what’s wonderful about Side x Side Co; it fosters a curated community of women in this city who are killin’ it at all levels of their companies.</p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">How did you meet these mentors and reach out to them?</dt>
    <dd class="interview-a">
      <p>A lot of them I met through past workplaces, and others I’ve met through client organizations I’ve worked with over the years. They’re design leaders in their respective organizations. One of my mentors was someone I interviewed with for one of my first UX jobs. It wasn’t the right fit at the time but I’ve kept in touch with him over the years. Another one I met at a networking event. Some I found by reaching out and some came about pretty organically at events. I simply asked them, after a great conversation, “would you be open to touching base every few months to talk about career trajectories?”</p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">Do you find there’s enough time outside of your full time job and Hexagon UX to devote to learning new things and honing your craft further?</dt>
    <dd class="interview-a">
      <p>Sometimes! I think this ebbs and flows with the seasons. For example, there is downtime between Hexagon events where I can do more public speaking or hone different areas of my craft. My most recent skill development has been on the soft skills side; learning how to be a manager, creating growth and professional development paths, and developing the qualities of a people leader. Naturally in these seasons, I focus on that specific area for a while. I’ve always found that every now and then, I’ll get an itch to go back to hard skill development and tackle things like the hottest design prototyping tool on a long weekend. It flows like that. Between having a full-time job and running a community organization, it is a lot of work but it’s well worth it. I find pockets of natural energy and adrenaline that I intentionally ride out because I’m looking forward to the next steps in my career. I’ve always played the time management game in a very fluid way.</p>
    </dd>
  </dl>
  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-andrea-crofts-lettering.jpg" alt="Lettering by Andrea Crofts">
      <figcaption>
        Andréa is a hand-letterer and illustrator in her downtime.
      </figcaption>
    </figure>
  </div>
  <div class="border">
    <p class="wrapper-sm italic">There are hard limitations when designing for colour blindness or screen readers. In one of Andréa’s FITC presentation slides, she presented six icons inside of circles of different vibrant colours, where all of the icons, except the one in the yellow circle, was white.</p>
  </div>
  <dl class="border">
    <dt class="interview-q">How do you balance aesthetics and accessibility?</dt>
  </dl>
  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-andrea-crofts-accessibility.jpg" alt="Accessibility slide deck">
    </figure>
  </div>
  <dl class="border">
    <dd class="interview-a">
      <p>I’ve come across a lot of visual design challenges like that in my work as a designer. I’m beholden to certain standards as the inclusivity and accessibility advocate on my team (standards we should all be beholden to every day, really). I’ve learned not to sweat those aesthetic details anymore because it’s better for your interface to be accessible to someone with low vision who wouldn’t be able to see that contrast between yellow and white. If you want to keep it inaccessible but more objectively sexy and post it to <a href="https://dribbble.com/andreacrofts">Dribbble</a>, that’s fine, if creating Dribbble fire is the goal. When designing products at scale, you have to remember you’re not designing for other designers. You’re designing for users who will need to interact with your product and if they can’t do that, it’s a baseline usability fail. Usability for most people isn’t the consistency of inverted colours on different elements. It’s whether or not they can actually read the content. As designers, we have to keep reminding ourselves we’re not designing for each other. As a junior designer, I was guilty of falling into the trap of ignoring function in favour of form, and I quickly got the metaphorical sh*t kicked out of me.</p>
    </dd>
  </dl>
  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>As designers, we have to keep reminding ourselves we’re not designing for each other.</p>
  </aside>
  <dl class="border">
    <dd class="interview-a">
      <p>As we get into more design specific conversations, we delve into our favourite plugins and prototyping tools. Andrea is a big fan of <a href="http://www.getstark.co/">Stark App</a>, a Sketch plugin for accessibility testing while I predominantly use Adobe XD, which Stark unfortunately does not have a plugin for, and we are both intrigued by the new <a href="https://www.invisionapp.com/studio">inVision Studio</a>.</p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">Do you ever prototype without a developer?</dt>
    <dd class="interview-a">
      <p>Admittedly, this is the area of my hard skills that I’m the weakest at the moment. I’ve tried Origami, Principle and Framer, but I’ve never found there to be a degree of value for investment of time that I’ve put into learning them. Our development process at TWG was pretty quick, and we were often building things side by side on cross-functional teams with designers paired up with developers. The time-consuming layer of creating an interactive prototype beyond inVision was not really feasible for me in the agency world. So instead, I compiled what I call interaction comparables, where I documented transitions and animations in an inVision board, to communicate to the developer. For example, I would specify that “this is the interaction I want when this navigation slides out.” I’ll use a combination of live websites and Dribbble shots, and pair with a developer to execute the interaction. You can use your prototypes to communicate your ideas with the client but afterwards, it’s not like your developer can leverage the code from it in most cases. Now, at League, I have more time to sweat these details so I’m hoping to dig into this skill more soon.</p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">What are your preferred methods of surveying for user testing?</dt>
    <dd class="interview-a">
      <p>It depends on the audience. What I’ve found for accessible participants is that Google Forms is probably the best one. It’s the most accessible survey tool that I’ve seen. If it’s a general survey, Typeform is my favourite. It’s like an experience in itself.</p>
      <p>In terms of content, I love to also create surveys that have, not just multiple choice or “how old are you”, paired alongside radio button options for “male, female or non-binary”, I like open-ended questions as well. I always love the combination of finding out geographically where they live, narrow down demographics first and then by the end, what apps do they use on a regular basis, and the final question being something like, “If you had a magic wand, how would you change this industry?” I ask a solid variety of questions because it’s amazing what people will come up with when they’re given a blank box. That’s my approach to screener surveys: getting insight so that even if I don’t end up recruiting that participant for whatever reason, if they don’t fit the demographics or any other factors, I still come out of it with insights from that I can leverage for generative research and synthesis.</p>
    </dd>
  </dl>
  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-andrea-crofts-slide.jpg" alt="Behavioural Personal slide deck">
      <figcaption>
        Behavioural Personas findings and other resources available at <a href="http://www.andreacrofts.com/accessibility/">http://www.andreacrofts.com/accessibility/</a>
      </figcaption>
    </figure>
  </div>
  <dl class="border">
    <dt class="interview-q">What do you think is the difference between a junior and senior designer?</dt>
    <dd class="interview-a">
      <p>I read <a href="https://medium.com/the-year-of-the-looking-glass/junior-designers-vs-senior-designers-fbe483d3b51e">an article by Julie Zho</a> that I felt encapsulated this distinction very well. Junior designers’ process is almost point A to point B. They go through a series of linear steps. They spend maybe 20% of their time figuring out what the problem or challenge is, the problem space comparables, discovery, research, and that kind of thing. The remaining 80% of the time is what they’ll spend actually designing the thing. It takes a lot more time to synthesize your learnings into an actual interface that’s usable. You’re learning interaction patterns and how best to tackle a problem like an onboarding flow or a larger one of tackling the design implications of a double-sided marketplace. Those challenges are what takes junior designers 90% of their time, whereas when you get to the senior level, these designers are spending 90% of the time just figuring out what the problem is, trying to understand the problem space, talking to people, being very critical about different aspects of the industry that the product is living in, and 10% of their time executing on the visual design and information architecture. They can push pixels and bring their ideas to life very quickly. They prefer to prioritize their time on asking a lot of questions, getting all the information they can, and dispelling that into an elegant solution.</p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">On a slightly unrelated note...Apple or Android?</dt>
    <dd class="interview-a">
      <p>Apple! Especially after having done extensive research with the visually impaired community, (the topic covered in my talks at FITC and UXRTO) Android is an emerging contender in this space, but they haven’t quite hit feature parity with Apple. Full transparency, though, I’m an Apple person through and through. I was, fairly recently, thinking about transitioning to Pixel just to diversify my hardware usage. If I only ever use iOS, I can’t accurately and effortlessly design for Android. Now, after having seen the level of care and attention to detail in creating accessibility features on iOS, I’m pretty loyal to Apple at least until Android reaches feature parity in their accessibility settings. I think Google will. I believe that Google Pixel will be the next contender for accessibility.</p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">What’s the next tool or software you’d like to learn?</dt>
    <dd class="interview-a">
      <p>I’d love to learn to design for voice interfaces, like Google Home and Amazon Alexa; to design for interfaces without interfaces. There are ways to prototype these without coding as well. One of the Design Leads at TWG, Kevin Muise, recently created an entire prototype from Flow.ai. At League, one of my colleagues built a prototype for Google Home where a member could check whether or not particular items were covered under their benefits. It was fascinating. I’ve always been interested in emerging tech, and voice is one area I’d like to tackle next. VR and AI, despite all the hype and lip service, are all really interesting as well but there’s just something unique and personal about voice. It’s conversational, and there are so many different permutations of the way you can ask any one question.</p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">I guess, if you start designing for voice, there’s a whole other world of accessibility out there for voice interface design?</dt>
  </dl>
  <dl class="border">
    <dd class="interview-a">
      <p>Exactly. That sounds like a really exciting challenge I’m keen to take on sometime in the future. And voice technologies would greatly benefit the visually impaired community because we’re essentially removing the layers of clicks and taps required to drill down into content. Visually impaired people would have the option to drill down to the content with a simple statement. That’s powerful. It’s an example of an emerging technology that benefits <em>everyone.</em></p>
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