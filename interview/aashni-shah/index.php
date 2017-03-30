<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-coral';
  $interviewee_name = 'Aashni Shah'; // Page title & share links
  $interviewee_url = 'aashni-shah'; // Share links URLs

  /*
    INTERVIEW CREDITS:
    If you need a second name, add a variable with a '2' the end. Example:
    $interviewer = "First Person";
    $interviewer_url = "http://twitter.com";
    $interviewer2 = "Second Person";
    $interviewer_url2 = "http://mywebsite.com";

    If you don't need a credit, delete the whole <li> in the HTML.
  */
  $interviewer = "Cassie Kaiser";
  $interviewer_url = "https://twitter.com/casskaiser";
  $photos = "Emma Arsenault";
  $photos_url = "https://instagram.com/emmaearsenault/";
  $editor = "Sophie He";
  $editor_url = "http://twitter.com/sophiehe";
  $editor2 = "Cassie Kaiser";
  $editor_url2 = "https://twitter.com/casskaiser";
  $design = "Cassie Kaiser";
  $design_url = "https://twitter.com/casskaiser";
  $dev = "Ivonne Karamoy";
  $dev_url = "http://twitter.com/ivonnekn";
  $transcribe = "Cassie Kaiser";
  $transcribe_url = "http://twitter.com/casskaiser";

  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

  <main role="main" class="interview">

    <!-- Featured Image -->
      <div class="border img-feature">
        <figure>
          <img src="<?php echo $path_img; ?>landscape-aashni-shah.jpg" alt="Aashni Shah">
        </figure>
      </div>

      <!-- Interview Header -->
      <header class="border header-interview">
        <div class="wrapper-sm">
          <h2>Aashni Shah</h2>
          <p>Aashni is a Software Engineer at Microsoft in Vancouver, Canada. Originally from Kenya, she moved to Toronto in 2011 to study Computer Science at the <a href="https://www.utoronto.ca/" title="University of Toronto website">University of Toronto</a>. A former Computer Science Student Union president, a member of the Undergraduate Women in Computer Science group, and an organizer for various events, Aashni has spoken at conferences highlighting hackathons and women’s empowerment and leadership. Aashni founded UofTHacks, the first Collegiate hackathon in Canada, and has since watched hackathons evolve and grow.</p>

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
          What was it like growing up in Nairobi, Kenya?

        </dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p>
            It was incredible. You experience such a different childhood to what most people expect, and a part of that experience involves exploring the many different cultures in Kenya, interacting with people from different cultures, and getting a chance to go out and do new things.
          </p>
        </dd>
      </dl>

      <!-- // Q & A -->
      <dl class="border">
        <!-- // Question -->
        <dt class="interview-q">What kind of things did you get a chance to go out and do? </dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p>My school took us on Intercultural trips where we would travel to different parts of the country and interact with the people and culture in those areas. That would include going to a four-to-five day camping trip that is quite literally in the middle of nowhere and learning about the Maasai traditions. We would build huts, tend to goats, celebrate with the local Maasai tribesmen and women and hike. One of our school trips included climbing to the top of Mt Kenya, the second highest mountain in Africa.. It was incredible. Outside of school trips, I’d also travel often with family and friends. I love going scuba diving at the coast and seeing the wildlife in Maasai Mara.</p>
        </dd>
      </dl>


      <!-- // Q & A -->
      <dl class="border">
        <!-- // Question -->
        <dt class="interview-q">Do you think that growing up that way gave you the travel bug?</dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p>Definitely! That and the fact that my parents used to travel a lot with us. When we were younger, we’d travel to beautiful destinations in Kenya, however as we got older we started travelling to other parts of the world like London and Dubai.</p>
        </dd>
      </dl>

      <!-- // Q & A -->
      <dl class="border">
        <!-- // Question -->
        <dt class="interview-q">What destinations have you traveled to? </dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p>Within the US, I’ve traveled to Seattle, San Francisco, California in general, Cleveland, Indianapolis, and Florida. Within Kenya, I’ve traveled to a lot of the different parts, such as Mombasa, Malindi, Maasai Mara, Sabado, Eldoret, and Kisumu. Other countries I’ve been to in Africa include Tanzania, South Africa, Zambia. Then around the rest of the world, there’s Turkey, Indonesia, Singapore, Thailand, Mauritius, India, United Arab Emirates, England, Italy, France, and Malaysia. After graduating, I took an amazing trip around Europe with some friends, and got to visit Greece, Austria, Hungary, Czech Republic, Germany and more of Italy - definitely one of the best trips I’ve ever had! I like collecting shot glasses of all the places I’ve travelled to (since starting University), and have a pretty great collection so far!</p>
        </dd>
      </dl>

      <!-- // Image - Landscape -->
      <div class="border img-landscape">
        <figure>
          <img src="<?php echo $path_img; ?>landscape-aashni-shah-travels.jpg" alt="Aashni Shah travel collage">
          <figcaption>Aashni has had the chance to visit and explore many beautiful places. Travel is an important part of who she is.
          </figcaption>
        </figure>
      </div>


      <!-- // Q & A -->
      <dl class="border">
        <!-- // Question -->
        <dt class="interview-q">So you’ve definitely earned your title of world traveler! My parents both work for an airline, so I’ve been lucky enough to travel a lot too. I feel like traveling has given me and my siblings a really amazing perspective on life. What do you think traveling has offered you? </dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p>It’s offered me the chance to embed myself into a completely different culture, and learn how they live their lives. I know I’m very happy with my life right now but I can always improve it by going to other places in the world and experiencing what they have to offer. I can see what makes other people happy within their own cultures and beliefs, and hopefully take something away from that and use it to improve myself. </p>
        </dd>
      </dl>

      <!-- // Pull Quote -->
      <aside class="border pull-quote">
        <p>I know I’m very happy with my life right now but I can always improve it by going to other places in the world and experiencing what they have to offer.</p>
      </aside>

      <!-- // Q & A -->
      <dl class="border">
        <!-- // Question -->
        <dt class="interview-q">What’s your next travel destination? </dt>
        <!-- // Answer -->
        <dd class="interview-a">
          <p>I’ve got a couple of trips planned - I know they’re happening, but we’re still locking down the destinations. To celebrate my mom’s birthday, we’re planning to have a family holiday in Malaysia or Sri Lanka. I recently moved to Vancouver, BC, and want to spend some more time exploring the west coast - I definitely have a trip out to Banff planned soon!</p>
        </dd>
      </dl>


     <!-- // Image - Landscape -->
     <div class="border img-landscape">
       <figure>
         <img src="<?php echo $path_img; ?>landscape-aashni-shah-family.jpg" alt="Aashni Shah family">
         <figcaption>Aashni’s love for photography goes beyond travel flicks. Check out her <a href="https://instagram.com/aashnisshah">Instagram</a> account to follow her #Project365 initiative where she posts one photos per day to document her life, the places she visits and the people she meets.
         </figcaption>
       </figure>
     </div>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">Tell us about your involvement in hackathons.</dt>
       <!-- // Answer -->
       <dd class="interview-a">
         <p>I found out about an event called Hack for Her, hosted at Google Waterloo, and thought, “This sounds really interesting.” I convinced about 15-20 people to come with me. It was different from the normal hackathons I plan, because at this event you were given a problem to solve in 5-6 hours, rather than the full 36 hours of coding. Our team actually came first, so I was super excited! </p>
         <p>A couple of weeks later, I took part in a hackathon at the Canadian Undergraduate Tech Conference (CUTC). I began to wonder, “Why don’t we have something like MHacks and <a href="http://2015f.pennapps.com" title="PennApps website">PennApps</a> in Canada?” I already had a team of people who were interested and we just kind of decided, “Let’s do this.” </p>
         <p>We spent the summer planning our first event. I was back home in Kenya, which meant I was awake at 2AM skyping the team in Toronto trying to sort everything out. I was also working, so I’d have to get up at 8AM for work. It was intense, but I have no regrets. I think it was one of the best things I’ve gotten to do! </p>
       </dd>
     </dl>


     <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-aashni-shah-speaking.jpg" alt="Aashni Shah speaking">
      </figure>
     </div>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">Through doing that, did you realize there was an imbalance in gender at hackathons? At the talk you gave at the FITC Mix and Make event, you mentioned how important it was to encourage more women to get involved in these events. </dt>
       <!-- // Answer -->
       <dd class="interview-a">
         <p>I saw a woman check in at the first UofTHacks I threw, and I was so happy to see her. Sure, there’s obviously an imbalance. There’s no denying it, and at events like these, a lot of women are scared of attending because there have been some bad incidents at hackathons in the past. There’s also this idea that men won’t let women hack on the same projects just because they are women. In addition to that, everyone is super stressed and sleep-deprived which sometimes leads to micro aggressive comments during the event.</p>
         <p>While I love hackathons, I definitely don’t think that hackathons are for everyone. It requires time and dedication under some rather stressful conditions and many people - men and women - just don’t work well under those circumstances. That being said, everyone should always feel welcome at a hackathon.</p>
         <p>For the most part, I think that getting more women out means you’re bringing in a whole new level of knowledge. One of the biggest things I’ve learned about traveling is this: when you mix people from different areas and different parts of the world, you really bring together different ideas and solutions and have access to a huge network of knowledge and history from all the different people that you would meet. When they mix together, you get amazing and creative ideas. By not allowing women to be part of that, whether it’s a hackathon, or in the industry in general, you are cutting an entire section out, and considering most women use the products in some way, it’s extremely important to include women in the creation process. Having more women involved in hackathons is a start, especially since you have no idea the potential and creativity that they can bring to the table.</p>
       </dd>
     </dl>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">Are you doing anything specifically to encourage more women to attend? </dt>
       <!-- // Answer -->
       <dd class="interview-a">
         <p>With UofTHacks, we definitely accepted a higher percentage of women since there’s always a lower attendance rate compared to acceptance rate. I’d personally invite women I knew to apply for the event, as well as heavily advertise in women related tech groups. Part of the problem I see with many events is that they’re only advertised in the same set of channels or groups, and if women aren’t a part of those groups then they won’t see the event. Personally talking to women, and especially sharing my positive experiences about the event usually has a better chance of convincing more women to attend. I tag team a lot with one of my best friends, who is the President of the Women’s Computer Science Association. We try to host many other events, not hackathons necessarily, and constantly push increasing women’s involvement at these events.</p>
       </dd>
     </dl>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">Well, since we’re on the topic of computer science, you were the President of the University of Toronto’s Computer Science Student Union. How did that come to be? </dt>
       <!-- // Answer -->
       <dd class="interview-a">
         <p>I was very involved in high school. I think I was in all except for one of our clubs in high school, and I was president of two of them. I really enjoyed being a part of different organizations, planning events and seeing the positive difference these clubs made.</p>
         <p>Then, in my first year of university, I didn’t do anything. It felt weird having all that free time. I became really lazy since I had an abundant amount of free time. So in my second year, I applied to be an external liaison for the student union, which meant contacting third-party companies to sponsor and host events in partnership with our student union. I really enjoyed it and I ended up getting very involved in the student union in general. One of the larger problems I noticed was that many students didn’t know much about the student union or the events that we planned, which was a shame. I worked very hard to make the events more public, more known, and more heavily attended. People encouraged me (translation: I was volun-told) to run for president, and eventually agreed to at least run. </p>
       </dd>
     </dl>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">It sounds like you’re very happy with your decision of choosing to study at U of T. What made you choose U of T?</dt>
       <!-- // Answer -->
       <dd class="interview-a">
         <p>It came down to U of T and Waterloo for me, and the reason I picked UofT was because it was in downtown Toronto. Most of my family and other students from Kenya go to the UK, but I just didn’t feel like that was the right decision for me, so I applied to American and Canadian universities. I was interested in becoming a lawyer, and since I didn’t like political science, I thought I should study computer science as my undergraduate degree instead. I figured that lawyers who understand computer science and engineering are going to be in high demand by the time I graduate. The “backup” was that I’d enjoy Computer Science so much I’d get an engineering job instead of pursuing law.</p>
       </dd>
     </dl>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">Your foresight is very impressive! So did you have a tech background going into U of T? </dt>
       <!-- // Answer -->
       <dd class="interview-a">
         <p>Do you remember the website <a href="http://www.neopets.com/" title="Neopets website">Neopets</a>? I was a huge Neopets fan as a kid, so I made my own websites for that. I loved making websites. I taught myself HTML and CSS as well as some general website management. </p>
         <p>When I was 16 and doing the IB program at school, and I had to pick what my courses were going to be. Whatever you’re going to pick is a two-year commitment, so I figured whatever I pick now I need to make sure it applied to what I wanted to do in university. I was pretty sure I wanted to do computer science, maybe law down the line, and since I knew HTML and CSS, I thought it’d be similar enough that I’d figure it out, because obviously HTML is the same thing. I very quickly found out that they’re not the same thing, but fell in love anyway. </p>
       </dd>
     </dl>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">How do you think we can get more young women interested in STEM and keep them engaged in the topic? </dt>
       <!-- // Answer -->
       <dd class="interview-a">
         <p>The most important thing is that they can’t do it just because someone told them to do it-- they need to want to do it for themselves. Giving women the opportunity to learn about STEM opportunities at a young age is the most important thing. I was given the opportunity to learn about HTML and CSS when I was about 13, and this is coming from Kenya. I was able to figure out that if you give the opportunity to school girls here, or anywhere, really, they’ll fall more in love with the subject and say, “Hey, this is really cool.” A lot of computer science and engineering is like magic to a little kid, and it’s very easy to get them interested in it. It’s so wonderful to see all the educational tools aimed at teaching children (and especially girls) about how to think logically as this helps create a really strong foundation for girls to start thinking in computer science terms, and eventually pursue careers in STEM fields.</p>
       </dd>
     </dl>

     <!-- // Pull Quote -->
     <aside class="border pull-quote">
       <p>The most important thing is that they can’t do it just because someone told them to do it-- they need to want to do it for themselves. Giving women the opportunity to learn about STEM at a young age is the most important thing.</p>
     </aside>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Answer -->
       <dd class="interview-a">
         <p>I think parents are beginning to understanding the importance of letting their daughters explore STEM and are starting to encourage their daughters to take part. I have two little cousins that live in Toronto, 9 and 12, and sure, I’ll buy them girly gifts, like necklaces and goofy hats, but I also bought them a Raspberry Pi. We played around with it, set it up, and got some light bulbs to flash. I taught one of them how to make a website. I think it’s helpful to just take the time to show them that this is magic. Modern day magic. It’s 100% giving them the chance to explore what’s available, and letting them figure out if this is something they enjoy, and if they do enjoy STEM fields, to encourage them to continue pursuing it.</p>
       </dd>
     </dl>

     <!-- // Q & A -->
     <dl class="border">
       <!-- // Question -->
       <dt class="interview-q">Do you think you have an advantage being a woman in tech? </dt>
       <!-- // Answer -->
       <dd class="interview-a">
         <p>Yes and no. I say yes just because a lot of companies and schools are looking to try and increase diversity within their teams and programs, and I definitely bring a lot of diversity both as a woman and a person who grew up in a third world country.</p>
         <p>I also say no because I don’t want to be hired just because I’m a woman-- I want to be hired because of my qualifications. That’s the tricky battle I’m fighting right now. I’m an international person, I love to travel and enjoy getting to know about other cultures. I bring a lot of ideas to the table and this is what gives me an edge over other candidates. This, and my technical qualifications is why companies should want to hire me. My gender should have no bearing on that.</p>
         <p>I am pretty lucky that I haven’t had many negative experiences as a woman in tech, but I do know a couple of friends who have. It’s one of those things where you need to understand that just because you’ve had that one negative experience, doesn’t mean it’s the same across the board. It’s also important to make sure men understand some of the microaggressions that they knowingly or unknowingly cause. I’m extremely lucky that in most of my work experiences, I’ve been surrounded by really great co-workers - both male and female. They’re extremely supportive of me, and if necessary they’ve been protective of me too. We’ve heard the saying many times - getting more women into STEM fields requires allies, and I’ve been pretty lucky with my allies so far.</p>
       </dd>
     </dl>

    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-aashni-shah-computer.jpg" alt="Aashni Shah at the computer">
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">How did you prepare yourself to get a job right out of school? </dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I’d established relationships with recruiters over the years through various events I’d attended and planned. UoftHacks was a huge resource for me, the Student Union and other hackathons too. I had a very insane two months in my final semester where I was flying to a different city every week to interview and it resulted in a few job offers. It was probably the most stressful but also most fun semesters and I was able to produce the best grades that I’d ever had. </p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">So you were in a position where you had multiple job offers. What went into your decision to choose Microsoft as the place you’d like to work?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>It came down to the fact that I want to try and make a positive impact on the world and working at a large company like Microsoft means that I can both make an impact because I’m working on products that hundreds of thousands of people are using and as a company, Microsoft does a lot of great humanitarian work that I have the opportunity to get involved in.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Is there a specific humanitarian program they offer that you’d like to get involved in?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>We have a space here called the Garage that’s a maker space. This week and last week they had children oriented March break camps. I’d like to start getting more involved in those kinds of things. </p>
        <p>Outside of work, I’m involved in a project called <a href="http://www.elixirlabs.org/" title="Elixir Labs website">Elixir Labs</a>, a registered non-profit organization that’s committed to building solutions for social good. It started when Aswin Pranam went to a hackathon in Greece where they were working on apps to help Syrian refugees. When he returned to the States he posted a call out on Facebook asking if anyone else would be interested in working on similar type of work. I was like, this is exactly what I want in my life. I wanted to find a way to mix my technical knowledge with my social good intentions and this was a really good way to go about it. We partner with other non-profit organizations who need to build out apps or websites. The great thing is that these aren’t projects or initiatives that we’re starting, these already exist and we’re going in to help implement a technical solution. </p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Who and/or what has helped you succeed? </dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>My parents and sister without a doubt. My parents really encouraged me as a child to just go and try everything and anything I could get my hands on. That was anything from photography to math to white water rafting. My dad is a huge math buff, and he passed that love for math to me. As for white water rafting, I’ve done it in three countries now. There’s a pretty good video of me falling into the water. These experiences make it easier to connect with people who share similar interests which means I’m now meeting more people and learning about even more things. </p>
        <p>My aunt, who is based in the Toronto area, has had such a heavy influence on me as well. She has helped me out a thousand times over while I studied in Toronto.. My grandparents on both sides are another big influence as well. Their drive, the way that they treat other people, the way 100% of their energy goes toward helping other people-- all that really drives me and makes me want to do the same. I want to make them proud, but I’m also doing this for myself and because it genuinely interests me. I try to live by the idea that if I have the ability to help make someone else’s life better, there’s no reason for me not to.</p>
      </dd>
    </dl>

    <div class="border img-landscape">
     <figure>
       <img src="<?php echo $path_img; ?>" alt="">
       <figcaption>
         Aashni contributes her motivation and success to her family. As a child, her parents both encouraged her to try everything that interested her.
       </figcaption>
     </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">What was a childhood experience that has contributed to defining who you are today?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I can’t go back to any specific moment in my childhood and say, “That is why I am who I am.” I think it’s sort of taking all of my interests in and seeing how they’ve shaped me. I have a big extended family and it’s understanding and knowing that respect for one another. We are an Indian family, so family is very important to us. Obviously understanding and knowing respect has always been a very big thing. </p>
        <p>Watching my mom interact with other people is also amazing. Amongst my friends and my cousins, we say that my mom is the nicest, sweetest person, and obviously I want to try and have people say that about me too! My dad’s work ethic is on a whole other planet. His dad was the same as well, so it probably is genetic! There are no specific moments. I think it’s just the way they’ve pushed me, encourage me and always been around for me. I would definitely tie a lot of it back to knowing that they’ve been there for me. </p>
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
