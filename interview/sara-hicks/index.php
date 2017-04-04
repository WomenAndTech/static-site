<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-green';
  $interviewee_name = 'Sara Hicks'; // Page title & share links
  $interviewee_url = 'sara-hicks'; // Share links URLs

  // Twitter & Facebook sharing info
  $social_title = 'Interview with Sara Hicks by Sophie He';
  $social_desc = 'Co-founder and CEO of Reaction Commerce, an open-source ecommerce platform.';
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
  $interviewer = "Sophie He";
  $interviewer_url = "http://twitter.com/sophiehe";
  $photos = "Sara Hicks";
  $photos_url = "http://twitter.com/saralouhicks";
  $editor = "Sophie He";
  $editor_url = "http://twitter.com/sophiehe";
  $editor2 = "Ivonne Karamoy";
  $editor_url2 = "http://twitter.com/ivonnekn";
  $design = "Cassie Kaiser`";
  $design_url = "https://twitter.com/casskaiser";
  $dev = "Erin Ward";
  $dev_url = "http://twitter.com/warderin";
  $transcribe = "Sophie He";
  $transcribe_url = "http://twitter.com/sophiehe";

  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

  <main role="main" class="interview">

    <!-- Featured Image -->
      <div class="border img-feature">
        <figure>
          <img src="<?php echo $path_img; ?>featured-sara-hicks.jpg" alt="Sara Hicks">
        </figure>
      </div>

      <!-- Interview Header -->
      <header class="border header-interview">
        <div class="wrapper-sm">
          <h2>Sara Hicks</h2>
          <p>Sara Hicks has been an influential woman in tech since the earliest days of the web. She has held leadership roles at GeoCities, Yahoo!, Etsy, and Media Temple. Sara is the co-founder and CEO of&nbsp;<a href="https://reactioncommerce.com/">Reaction Commerce</a>, an open-source ecommerce platform.</p>

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
        <dt class="interview-q">
          So you’ve done a ton of different things. You are a coder, a designer and an entrepreneur?
        </dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p>
            Yes, mostly an entrepreneur and a product designer. Certainly these days, I’m more of an entrepreneur.
          </p>
        </dd>
      </dl>

      <!-- // Q & A -->
      <dl class="border">
        <!-- // Question -->
        <dt class="interview-q">How do you feel about that? The term “entrepreneur”?</dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p>I generally don’t like labels, and I sort of cringe when I think about the term “entrepreneur” because of the way it’s been overhyped. If I think about an entrepreneur in the purest sense as someone who is intrigued with creating and building things that are meaningful—if I think about entrepreneurship from that standpoint and not as a buzzword— then, it’s a little more palatable.</p>
        </dd>
      </dl>


      <!-- // Q & A -->
      <dl class="border">
        <!-- // Question -->
        <dt class="interview-q">
          I wanted to speak with you in particular because I knew that you recently founded your startup, <a href="https://reactioncommerce.com" target="_blank" class="ng-scope">Reaction Commerce</a><span class="ng-scope">, but you never struck me as that kind of person, as an “entrepreneur,” in the loaded sense. So I wanted to hear more about how you got to where you are today.</dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p>Well, we could get into where things started for me.</p>
          <p>I’ve been working since the early stages of the web, starting with <a href="http://en.wikipedia.org/wiki/GeoCities" target="_blank">GeoCities</a>, then Yahoo! for 5 years, then Etsy, and really, I’ve been building and designing products for different audiences for almost my whole career. The natural evolution of starting my own company just seemed to flow from all those experiences. I was doing this for other people’s ideas, and then I saw this need in ecommerce. Along with my cofounder, <a href="https://twitter.com/aaronsjudd" target="_blank">Aaron Judd</a>, we decided that it was time to build a new modern ecommerce platform, Reaction.</p>
        </dd>
      </dl>

      <!-- // Pull Quote -->
      <aside class="border pull-quote">
        <p>I’ve always been a tinkerer, especially when it comes to technology.</p>
      </aside>

      <!-- // Q & A -->
      <dl class="border">
        <!-- // Question -->
        <dt class="interview-q">As a child, did you know you were going to end up in the tech scene? What did you want to do when you were growing up?</dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p>I wanted to be an architect for a period of time when I was a kid, and I was also attracted to social work and psychology for a while. I’ve always been a tinkerer, especially when it comes to technology, and I’ve always liked reverse engineering to figure out how things work. I first learned how to write HTML, CSS and JavaScript by looking at the source code and asking myself, “How did they do that?” It was that type of curiosity that drove me, but not necessarily toward the path of an entrepreneur.</p>
        </dd>
      </dl>

      <!-- // Q & A -->
      <dl class="border">
        <!-- // Question -->
        <dt class="interview-q">So then you probably couldn’t have imagined that you would be here doing what you’re doing today?</dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p>Certainly not. I don’t think most of us could have imagined that there would be the internet, mobile phones, WiFi or even email. There have been so many defining changes in our recent generations that nobody foresaw, really.</p>
        </dd>
      </dl>

      <!-- // Q & A -->
      <dl class="border">
        <!-- // Question -->
        <dt class="interview-q">Definitely not.</dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p>How we consume information. How we shop. How we work. How we think. How we interact with each other. It’s incredibly amazing. None of this was really on my radar when I was studying in school.</p>
        </dd>
      </dl>

      <!-- // Image - Landscape -->
      <div class="border img-landscape">
        <figure>
          <img src="<?php echo $path_img; ?>landscape-sara-hicks-dog.jpg" alt="Sara Hicks with her pup Grace">
        </figure>
      </div>

      <!-- // Q & A -->
      <dl class="border">
        <!-- // Question -->
        <dt class="interview-q">Tell us how you got started with Geocities. I had a GeoCities site when I was, like, 8, and it was so bad. It was a fansite about the show Daria and it was only compatible with Netscape Navigator. How did you get into that? And what was it like back in the day?</dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p>Well, I went to UCLA and graduated with a degree in social psychology. I thought I was going to go into a career of social work. Post college, I was doing volunteer coordinating for non-profits. What frustrated me about community organizing was that it was so dependent on funding grants. Everything was grant to grant to grant. You never knew if the organization was going to be able to sustain itself. Funding was decreasing, and I could see the writing on the wall.</p>
          <p>Around this time, GeoCities launched. A friend of mine forwarded me a job opening for a senior community coordinator at GeoCities, and it was like a light bulb went off. In non-profit, we were doing these grassroots community meetups across Los Angeles and touching maybe 30 people at a time. At GeoCities, I could coordinate communities on the web and touch tens of thousands, if not millions, of people! And, it involved the internet which was quickly becoming a passion of mine. I got the job, managing the community leader program of all these neighborhoods.</p>
        </dd>
      </dl>


      <!-- // Q & A -->
      <dl class="border">
        <!-- // Question -->
        <dt class="interview-q">I remember neighborhoods.</dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p class="ng-scope">We had 8 people on my team, divided by the neighborhoods. It was electric. Such an exciting time! GeoCities was exploding and the team was dynamic. Every day was different. Tens of millions of homesteaders.</p>
          <p class="ng-scope">Then, we were acquired by Yahoo! in 1999 for nearly $4 billion during that crazy first wave of the web. I migrated to the Bay Area for 5 years and worked at Yahoo! as a product manager, initially on the integration, but soon I became Head of Product for Yahoo! Merchant Solutions, which was an ecommerce hosting solution inside of Yahoo!.</p>
        </dd>
      </dl>

      <!-- // Pull Quote -->
      <aside class="border pull-quote">
        <p>I’ve always been interested in helping small businesses, individuals, hobbyists, and makers succeed online.</p>
      </aside>

      <!-- // Q & A -->
      <dl class="border">
        <!-- // Question -->
        <dt class="interview-q">Got it. And is that kind of how you moseyed on into ecommerce?</dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p>Yep, that’s exactly right. What a lot of people don’t know about GeoCities is that it became the infrastructure that powered Yahoo! Small Business. Yahoo! Small Business, domains, mail, and web hosting were partly powered underneath the hood by the GeoCities platform.</p>
          <p>I really started to fall in love with web hosting and ecommerce at that point. If you look at the dots on my resume, you’ll see that I’ve always been interested in helping small businesses, individuals, hobbyists, and makers succeed online.</p>
          <p>This might sound a little naïve, but I think that the web has this element of democratization. The web is able to make things accessible to anyone. I loved that with Yahoo!, these small businesses working out of their garages could open up an online store and compete with massive retail stores. I’m always rooting for the little guy, so it’s fun to build products that support that. We heard these stories all the time at Media Temple and especially Etsy, where people would quit their day jobs just to focus on their Etsy shops.</p>
        </dd>
      </dl>

      <!-- // Q & A -->
      <dl class="border">
        <!-- // Question -->
        <dt class="interview-q">And that’s how you got into <a href="https://www.etsy.com/" target="_blank" class="ng-scope">Etsy</a> as well? What made you decide to move onto Etsy? When was this, like 2008?</dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p>Yes, around that time. I had been a fan of Etsy for a long time. I just loved what it stood for. I was watching the company and business from afar just to see how it was growing, not necessarily looking for a job. As a 4th generation Californian, I certainly wasn’t looking to move to New York.</p>
          <p>Long story short, one morning I see a post from Fred Wilson about a VP of Product opening at Etsy. I read it and thought, “What a great job.” I sat with it for a few days, and I couldn’t stop thinking about it. So I threw an email over the wall to the Etsy team, made an intro, and within 2 months, I was relocated to New York after a series of interviews.</p>
      </dl>

      <!-- // Q & A -->
      <dl class="border">
        <!-- // Question -->
        <dt class="interview-q">So how was transitioning to New York?</dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p>It was tough. I looked at it as a once-in-a-lifetime experience. I wanted to experience the East Coast, Brooklyn, Manhattan, and the seasons. When I got there, I played tourist. I got a Zagat Guide, ate at great restaurants, joined the MoMa and went to the theater. I was homesick, though. My family and network were in SoCal and the weather was tough. My first winter in New York was never ending.</p>
          <p>I took for granted the Californian lifestyle I’ve experienced my whole life—the phenomenal weather, and the access to the outdoors. I’m an avid hiker, surfer, runner, and biker, and to do those things in New York, you had to go through a lot logistically. To surf, you have to go all the way out to Montauk! Here in Venice, I can go surf every morning and then go to work.</p>
        </dd>
      </dl>

      <div class="border img-landscape">
       <figure>
         <img src="<?php echo $path_img; ?>landscape-sara-hicks-cycling.jpg" alt="Sara Hicks cycling">
         <figcaption>
          As a 4th generation California, Sara is an avid hiker, surfer, runner, and biker and finds inspiration and rejuvenation from the outdoors.
         </figcaption>
       </figure>
     </div>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">So you touched upon being a 4th generation Californian. How has growing up in California influenced your work habits and your path in life?</dt>
       <!-- // Answer -->
       <dd class="interview-a">
         <p>I get a lot of inspiration from the ocean, the mountains, and the desert. Taking a walk on a beautiful day helps me be mindful. Work in today’s age can be all-consuming. For me, I recharge and rejuvenate through being outdoors. When I’m able to step back and unplug for a little bit, it helps me be more productive. And it’s easy to do so all year long in California!</p>
       </dd>
     </dl>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">Let’s talk more about Reaction. Disclaimer: I’m not super tech savvy. I come from a marketing background, so some of the questions I’m about to ask may be a little basic.</dt>
       <!-- // Answer -->
       <dd class="interview-a">
         <p>No need for disclaimers. What we’re building speaks not only to the designer and developer audiences, but also to non-technical individuals.</p>
         <p>First, you have to understand that ecommerce is a massively growing market. It’s still tiny compared to all of retail. Some data suggests that only 9% of retail is online!</p>
       </dd>
     </dl>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">Fools! Really?</dt>
       <!-- // Answer -->
       <dd class="interview-a">
         <p>Yeah! There’s anywhere between 4 or 5 million shops and carts today (although people count it differently), and it’s only growing. In the next 5 years that’ll be 10-15 million. A lot of ecommerce is about to happen in this world.</p>
          <p>Second, we think the market’s incredibly underserved. If you look at the existing players, almost all of them came out before the iPhone. There are platforms out there that have a lot of market share, but haven’t been innovating because they’re on old technologies, or were built on architecture that’s archaic.</p>
          <p>We’ve also noticed that page load times for ecommerce have been increasing rather than decreasing. It takes anywhere between 6 to 10 seconds to load an ecommerce site on your mobile device—that’s FOREVER.</p>
          <p>Having specialized in ecommerce my whole life, I sat there thinking, “Why is it still so hard to build an ecommerce solution for an online store?” So we came up with the idea for Reaction, which is a more modern, fully open-source platform targeting the small-to-medium enterprise market.</p>
       </dd>
     </dl>

     <!-- // Pull Quote -->
     <aside class="border pull-quote">
       <p>In the open-source world, there's more of a community of people empowered to create.</p>
     </aside>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">Ecommerce is becoming an increasingly competitive market. How does Reaction differ from other key players like Big Cartel or Shopify or Magento?</dt>
       <!-- // Answer -->
       <dd class="interview-a">
         <p>First, we’re fully open source. I'm a big believer in the open source community because the truth is that none of us are as smart as all of us. I think that given the right environment, independent builders and creators can work toward something that benefits them, while at the same time supports the entire community.</p>
          <p>In the proprietary, closed-source world, there's this strange dependence and move away from the open web, and even open software. But in the open-source world, there's more of a community of people empowered to create. I think this goes back to what I said before about my interest in the democratization and freedom inherent in the web. That feels right to me, and it's part of our philosophy for how we want to build Reaction and our company.</p>
          <p>The Shopify’s of the world are closed-source solutions. Great products, but they’ve been around for 10 years, and once you start doing meaningful volume on something that’s closed source, you’re going to want more flexibility and customization.</p>
          <p>The other thing is, if you look at open-source platforms, there’s really only a couple choices. There’s Magento, recently acquired by eBay, which hasn’t really been innovating. There’s also Spree, a good product built on Rails, but other than that, there aren’t many more options for business owners. They want new features.</p>
          <p>Our platform is all on <a href="https://nodejs.org/" target="_blank">Node.js</a>, which is rising in popularity. It’s completely JavaScript, HTML, and CSS front end and back end. It’s super fast in terms of page load and everything is reactive, which means everything updates in real time. So let’s say you want to up the conversion rate of a product page. In real time, without page reloads, we could push a coupon or a price change to help visitors convert. We’re trying to build a more intelligent, dynamic platform, not just another platform.</p>
       </dd>
     </dl>

     <!-- // Image - Landscape -->
     <div class="border img-landscape">
       <figure>
         <img src="<?php echo $path_img; ?>landscape-sara-hicks-aaron-judd.jpg" alt="Sara Hicks and Aaron Judd">
         <figcaption>
           Sara co-founded Ongo and Reaction Commerce in 2013 with Aaron Judd.
         </figcaption>
       </figure>
     </div>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">So what does a typical day look like for you?</dt>
       <!-- // Answer -->
       <dd class="interview-a">
         <p class="ng-scope">I’m an early riser, so I wake up at 5am. I like to read and get exercise before the work day starts. I usually review goals for the day and for the week. Other than that, there really aren’t any typical days. I love that one day I could be writing a blog post and the next day, working on a wireframe or a product road map. My days are also typically packed with meetings, calls, and emails. I work with a distributed team, so no office yet. Because we’re such a small team at an early stage, I’m doing everything from product strategy to the fundraising to the marketing to the accounting to legal to talking to potential partners.</p>
       </dd>
     </dl>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">Do you read The Oatmeal? Have you ever read that one strip— <a href="http://theoatmeal.com/comics/working_home" target="_blank" class="ng-scope">Why working at home is both awesome and horrible</a>? There’s a panel of a guy who works from home, and he’s completely lost all his social skills, and he’s been wearing the same outfit for like 3 days. But on the flip side, when you work at the office, your coworkers are constantly distracting you. So what are your thoughts on this? How do you manage working from home?</dt>
       <!-- // Answer -->
       <dd class="interview-a">
         <p class="ng-scope">For us it’s just as productive, if not more productive, because we don’t have the overhead or distractions of an office. With a distributed team, there are many ways we can communicate, like Slack or Google Hangouts. Having an office vs. distributed teams—it depends on the stage of the company. If things work well, we will look into an office in the future. We’ll see.</p>
       </dd>
     </dl>

     <!-- // Pull Quote -->
     <aside class="border pull-quote">
       <p>I get a lot of inspiration from the ocean, the mountains, and the desert. Taking a walk on a beautiful day helps me be mindful.</p>
     </aside>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">So you talked a little bit about why you love technology: the democratization of commerce, the ability for it to help the little guys succeed. Is there anything about technology that scares you?</dt>
       <!-- // Answer -->
       <dd class="interview-a">
        <p>The issue of balance. I worry when I see people out and about and they’re so plugged into their devices. I’m guilty of that too. I just feel like we have to be more mindful and make sure we’re having enough real life interactions with people and with nature. Moderation is key. We have to make sure that generations growing up natively with all these apps and devices know about that balance.</p>
       </dd>
     </dl>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">Kids these days are so good at the Internet—I don’t even know. My friend has this nephew who’s about 10 and he gets 100 likes every time he posts something on Instagram and it’s like, “You’re 10! How do you even know 100 people!?”</dt>
       <!-- // Answer -->
       <dd class="interview-a">
         <p>It’s amazing and also scary. As mentors, it’s our job to help teach and guide people to use technology responsibly.</p>
       </dd>
     </dl>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">Speaking of mentors, did you have any role models that influenced you and guided you to where you are today?</dt>
       <!-- // Answer -->
       <dd class="interview-a">
         <p>The role models that come to my mind are my parents. Just last weekend my mom had an art opening at a gallery near Palm Springs, and she’s 77 years old! Go get ‘em, mom! What a great role model.</p>
       </dd>
     </dl>

     <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-sara-hicks-advice.jpg" alt="Sara Hicks advises a team at StackCommerce">
        <figcaption>
        Sara advises the team at StackCommerce, a local Venice startup, on topics such as leadership, startups, best practices, technology and collaboration.
        </figcaption>
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">You’re really unique in that you’ve held so many leadership roles. What are some of the challenges that you’ve faced encompassing these roles? How does that color how you see the industry? And why do you think young women are less inclined to enter technology?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I’m typically the only female on the team in leadership meetings and it’s been that way my entire career. In these last few years, there’s been more emphasis on wage equality, on increasing diversity in technology, on bringing more women into technology, and I think that’s great. It’s important to create and cultivate an environment that makes women feel comfortable participating in teams and meetings where they’re clearly the minority. I read recently that almost half of Harvard’s computer science program is women. That’s encouraging to me, but it’s only part of the equation. I know we have a long way to go, but I’m hopeful for these new generations of young people coming online.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">I feel like the issues that we see are structural. Funding is great and everything, but if you inject women into the workforce and once they get there and everything is still against their favor…</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Right. You’re going to be making less and you’re not going to be taken as seriously. I’ve seen it all in my career. Everything. There are scientific studies that clearly show the cognitive benefits of diversity: diverse teams are able to solve harder problems, and they’re able to work more effectively. I look forward to a day where it’s just about people in tech, not women in tech. But it’s not going to change unless we take ownership and create that diversity. Having been in tech for over 15 years, I’d like to be an example of that. It’s why blogs and orgs like Women&&Tech are so important—to be a voice for the younger generation.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">And orgs like </span><a href="http://hackbrightacademy.com" >HackBright</a> and <a href="http://girlsintech.meetup.com/">Girls in Tech</a>.</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Absolutely.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>Mentorship is something I would suggest to anyone–find those types of people.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">I never realized the importance of having female camaraderie in this industry until last year when I started having dinner with other women in tech. It validated everything I was feeling. There was such an apparent gender divide at the places I’ve worked, but it was always hard to explain, really.</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>It’s important to start having conversations about these experiences with groups of women, tech or not. One of my mentors is <a href="http://twitter.com/pesmou">Maria Thomas</a>. She was the CEO of Etsy while I was there, and she’s an advisor for Reaction. She’s a great sounding board, and her career is unprecedented.</p>
        <p>Mentorship is something I would suggest to anyone—find those types of people. Do those dinners. Go to the meet-ups. Make yourself available for coffee. Then, follow up. It takes an effort and sometimes it’s hard because we all have our comfort zones. I think that’s where I’ve always felt the magic—in real human interaction. In mentoring teams, seeing people take off in their careers, in their lives. It’s so gratifying. It’s great to build products, but it’s the people building them that inspire me the most.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What is one piece of advice that has resonated with you? The one thing you’ve come back to, time and time again?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>My parents study Buddhism and Zen philosophy, and my Dad always says, “Just go with the flow.” I go back to that, when times are stressful. Maybe we aren’t hitting our numbers, or maybe we’re not going to launch a product release on time. You can fight it or you can just accept it. Certainly it doesn’t mean we’re not going to hustle, but I’m more at peace with it. I guess it’s that California vibe.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">The chillness.</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>It’s a chillness, but you also know when it’s appropriate to have that drive and hustle. I certainly have that in me as well. You said early on that you didn’t necessarily see me as an entrepreneur. It comes with my upbringing, I guess.</p>
      </dd>
    </dl>

   <!-- // Q & A -->
   <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Right. Entrepreneurship comes with this stigma. I think… aggressive, forceful, having to be “on” all the time. They’re very masculine terms.</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Less than 10% of VC funds go toward women-run businesses, and that’s something I’m passionate about changing. We’re completely bootstrapped and in the early stages of raising a seed round, and it’s been… illuminating. I’ve actually been told to bring my cofounder, a man, to the meetings.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Guhh.</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p >Yeah. It is what it is, right? But at least now there are more VC funds focused on women entrepreneurs, like <a href="http://corp.aol.com/2014/09/02/aol-launches-women-focused-start-up-fund/" >Built by Girls out of AOL</a> and the <a href="https://angel.co/500-women">500 Women Syndicate from 500 Startups</a> are just a couple examples. The transformation is happening, just slower than what we’d all like.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Just a matter of time.</dt>
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
