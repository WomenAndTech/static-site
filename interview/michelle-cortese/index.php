<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-purple';
  $interviewee_name = 'Michelle Cortese'; // Use for page title & share links
  $interviewee_url = 'michelle-cortese'; // Used for share links URLs, use the same name as the interviewee's folder name

  // Twitter & Facebook sharing info
  //-----------------------------------------------------------------------------
  // Social media images are added in the metatags in includes/header.php to always pull in the feature image from this interview. Make sure the featured image always follows this format: featured-firstname-lastname.jpg
  $social_title = "Interview with Michelle Cortese by Victoria Whang";
  $social_desc = "Refinery29's Senior Design Technologist and hardware hacker from Toronto, currently tinkering with VR at Facebook.";

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
  $photos = "Victoria Whang";
  $photos_url = "https://victoriawhang.com/";
  $editor = "Ivonne Karamoy";
  $editor_url = "https://www.ivonnekaramoy.com/";
  $dev = "Victoria Whang";
  $dev_url = "https://victoriawhang.com/";
  $dev2 = "Christina Truong";
  $dev_url2 = "http://christinatruong.com/";
  $transcribe = "Victoria Whang";
  $transcribe_url = "https://victoriawhang.com/";


  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

<main role="main" data-interview>
  <!-- ALL content goes between the <main> tags. Below are some common modules for this page. Delete, revise or add more components as required. Refer to the Style Guide documentation for more details. Delete this comment when you've completed this page. -->


  <!-- // Featured Image -->
  <div class="border img-feature">
    <figure>
      <img src="<?php echo $path_img; ?>featured-michelle-cortese.jpg" alt="Michelle Cortese">
    </figure>
  </div>


  <!-- // Interview Header -->
  <header class="border header-interview">
    <div class="wrapper-sm">
      <h2>Michelle Cortese</h2>
      <p class="intro">Michelle is a Toronto-born UI designer navigating both digital and material interfaces. Her experience ranges in a creative exploration in art direction, physical computing, fabrication, and graphics programming, blurring the lines between artist and engineer. She's studied at Ryerson University, OCAD, and NYU, and continues to pursue further education in the hopes of contributing to a brighter future for UI and human communication.</p>
        <p>At the time of the interview, Michelle was a Senior Technologist at Refinery29 but she has since moved on to Facebook as VR Product Designer.</p>

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
    <dt class="interview-q">Michelle Cortese walked in for our interview wearing straight bangs across her forehead and all black everything from head to toe. She is exactly what I would imagine from a tech creative who knows design, code, and the tweaking of electrical cords to building gadgets and bringing ideas to the physical realm.</dt>
    <dd class="interview-a">
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Hey, you were awesome on stage yesterday!</dt>
    <dd class="interview-a">
      <p>I’m just really in love with what I’m talking about. I’m hoping my enthusiasm wears on other people.</p>
    </dd>
  </dl>

<!-- // Image - Landscape -->
  <div class="border video widescreen">
    <div class="embed-container">
      <iframe width="640" height="390" align="center" src="https://www.youtube.com/embed/Xoz2EERmZZ8?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    <p class="caption">
      Michelle's FITC 2017 talk in Toronto explores how we can rethink UI design and consider Natural User Interface vs Zero User Interface.
    </p>
  </div>

  <dl class="border">
    <dt class="interview-q">You have your own experience with wearables. Will you tell me about the <a href="http://www.ellecor.com/?portfolio=logme" title="Log.Me necklace page">Log.Me necklaces</a>?</dt>
    <dd class="interview-a">
      <p>I was doing my masters at NYU (New York University) in this emerging technology program called <a href="https://tisch.nyu.edu/itp/admissions" title="ITP program NYU">Interactive Telecommunications Program</a>. I had been working in UX/UI/fashion and I do a lot of physical stuff and I love assistive technology but I had never made a wearable before.</p>
        <p>During my undergrad at OCAD (Ontario College of Art and Design), I was working on a project where the intention was to turn closed captioning for the deaf and hard of hearing into this kinetic, emotive, expressive version of itself with an algorithm. I was fascinated with the idea of translating language into other forms. How many different ways can you take something that’s abstract and turn it into something else?</p>
        <p>I started working with language and distilling it into symbols. I had made this library of function words (prepositions and articles like <i>I, you, me, the, a</i>). They are the smallest subsection of words but also the most used yet least represented. I honed in on them because I was reading a <a href="http://www.secretlifeofpronouns.com/" title="Secret Life of Pronouns book by James Pennebaker">book by James Pennebaker</a> about how the ratio at which you say function words actually describes a lot about your mood and your state of mind. From this idea, I tried to take function words and turn them into symbols. I studied bodies of text and translated them to discover what the individual’s primary function word was. That eventually led me to build an algorithm that would scan through someone’s text or speech and use the ratio of function words to determine how they were appearing to other people, how confident, honest, angry, sad, mad, or happy.</p>
        <p>I started building a tiny wearable you can wear near your heart that would listen to your speech. Using bluetooth, it pings your emotional scores throughout the day creating this intimate and personal technology. The wearable market tends to be very binary and composed of objects that say, you walked this many steps today why don’t you walk this many more? Instead, I wanted to give people abstract feedback about their lives and have them decide whatever they wanted to do with it; rather than making something quantitative, make it qualitative.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-michelle-cortese-log-me-necklace.png" alt="Log.Me necklace and model">
      <figcaption>
        Photo credit:
        <a href="http://www.ellecor.com/" title="Michelle Cortese portfolio site">Michelle Cortese</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">Did you have to know how to code to do that?</dt>
    <dd class="interview-a">
      <p>Yes. I’ve had this tumultuous journey from being a graphic designer to being a bit of a creative technologist. I’ve been back to school three times along the way because I kept feeling like I didn’t have enough information to build the things I wanted to build. I learned Cocoa so that I could build the Log.Me app natively for iOS.  I’ve done some hardware stuff for a really long time and that knowledge came in handy in customizing a bluetooth chip.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">What’s your educational background?</dt>
    <dd class="interview-a">
      <p>I studied graphic design at OCAD and minored in Onscreen Media. Then I went to Ryerson University for a graduate certificate in computer programming applications. I did about eight months and hated it. I just didn’t think this was the way to learn computer science as a creative person. It was like this really dry java where you make probability machines. I dropped out and got accepted into the Interactive Telecommunications program (ITP) at NYU. It’s like a creative computer science program in the Tisch school of the arts. We learned computer programming from the perspective of artists that would be using it for art. It was the perfect place because I got to see the applications of what I was doing. Every time I made something, I could see the result right away which was really inspiring. It was also really helpful having some core java knowledge though because I had a head start from a lot of people.</p>
        <p>Actually, <a href="https://www2.ocadu.ca/bio/kate-hartman-0" title="Kate Hartman OCAD bio">Kate Hartman</a>, also from ITP, is leading a program like that at OCAD called <a href="https://www.ocadu.ca/academics/undergraduate/digital-futures.htm" title="OCAD program page for Digital Futures">Digital Futures</a>. It didn’t exist when I was shopping around, I probably would have done that if it did.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">How did you end up at Refinery29?</dt>
    <dd class="interview-a">
      <p>I have done so much UX/UI work in fashion. I kept trying to take hard turns out of it but it just kept on coming back to find me. After OCAD,I wanted to design assistive technology. I wanted to make interfaces for users with disabilities but then I got scooped up by Hudson’s Bay company. I met with the then creative director, <a href="http://www.antony-smith.com/" title="Antony Smith portfolio page">Tony Smith</a> (no longer at HBC) who was in the process of leading a big redesign around 2009 to 2011 I wanted to be a part of that massive change so I signed on as a senior designer. I ultimately ended up becoming an art director there. I wanted to bring really interesting, cool, fun, emerging technology to places that are usually considered “women’s interest”. It was inspiring but I still wanted to veer away from fashion. I reached a point where I didn’t feel very purposeful so I left Toronto for my masters program. I worked at Lord &amp; Taylor in the US while going to school but when I got out, I found my next job at a media lab in New York working in experimental tech for ad agencies. When you wanted to pitch a crazy experimental tech thing to your clients, you would come to us. It was really fun but we never got to own our own work. We would consult with all these agencies but then they would just go alone from there. I only ever got to do one project beginning to end and it was for NYX Cosmetics.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Tell me more about the NYX installation.</dt>
    <dd class="interview-a">
      <p>NYX had just been acquired by L’Oreal. They had no stores. They had no brick and mortar presence whatsoever. But they were this huge brand that existed online and they had a really huge identity so the design goal was how do we take their digital experience and bring it to reality? We narrowed that down into three different offerings. We needed to translate the digital feeds (access the trending hashtags) and have exploratory stations where users can see the products on other people similar to their site. We needed to reflect the tutorial aspect of NYX because they had so many Youtube tutorials that have become such a big part of their brand.</p>
      <p>We created this <a href="http://www.ellecor.com/?portfolio=nyx-interactive-in-store-experience" title="NYX project page">giant wall of a screen</a> displaying a stream showing whatever the current trend is. You go inside of the store and all of the product shelves have iPads you can walk up to and scan a product. That product will appear on the screen and you can look at all the different colours that are offered and when you open that, instead of just being descriptions of the product, it’s instagram photos that have been tagged with that product. As for the tutorial experience, we developed video players and made them interactive. We set them up inside of those makeup stations where girls could sit and try out a tutorial on their own. They had all the makeup required in front of them, they could follow along, pinpoint certain products and stop or repeat through steps. That was our way of embodying the digital makeup experience.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-michelle-cortese-nyx-toronto-opening.png" alt="6 image collage from NYX Toronto opening">
      <figcaption>
        Photo credit:
        <a href="http://www.ellecor.com/" title="Michelle Cortese portfolio site">Michelle Cortese</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">How did <a href="http://www.ellecor.com/?portfolio=chipcodes" title="Chip Codes project page">Chip Codes</a> come about?</dt>
    <dd class="interview-a">
      <p>I really enjoy hardware hacking. I like taking things that previously existed and repurposing them into new things. I think we need to be really mindful as we move into the next stages of destroying our earth and throwing out electronics. Just because it no longer serves the purpose we intended for it to serve doesn’t mean it’s useless. There are still a million useable components in there and it’s a shame to just toss it. I started playing around with the idea of recycling all of my Gameboys. I started taking out all of my old ones (I have so many of them) and hacking them and turning them into synthesizers.</p>
      <p>Now, my husband is a professional musician. He’s not an engineer. At the same time, I found it fascinating that the <a href="https://en.wikipedia.org/wiki/Chiptune" title="Chiptunes Wikipedia page">Chiptunes</a> world is mostly computer science-y, tech people. You have to do a fair amount of hacking to actually get a Gameboy playable, and even if you do get it, to be able to then connect it to mini-controllers is pretty difficult. I wanted to bridge that gap so that people in the musical world with knowledge to create music could access this medium and this sound. I pitched the idea to <a href="https://www.moogmusic.com/" title="Moog Music">Moog Music</a> when they had their festival going on. I felt it was in the vision of founder <a href="https://en.wikipedia.org/wiki/Robert_Moog" title="Robert Moog Wikipedia page">Robert Moog</a> and his intention to bring a lot of weird things to the masses. The theremin wasn’t really a commercialized instrument until he made it so. I wanted to do what he did but with Game Boys. They thought it sounded insane but they agreed to it. What they gave me was a tiny amount of money that didn’t fully fund the project but I was willing to go broke doing this.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-michelle-cortese-husband-chipcodes.jpg" alt="Michelle and husband holding chipcodes instruments">
      <figcaption>
        Photo credit:
        <a href="http://www.ellecor.com/" title="Michelle Cortese portfolio site">Michelle Cortese</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q"></dt>
    <dd class="interview-a">
      <p>I built two instruments. I did it with my husband. He has a good ear and I can build stuff. We had the installation up throughout the whole festival in Asheville, North Carolina and actually about 80% of the people would walk straight up to him and ask, “so how does this work?” He told them he didn’t know and he would just point over to me. There were times I was just standing there while he was in conversation with someone and people would wait to talk to him. I’d walk over and say, “oh do you have a question about the project?” And they’d say, “no, I’m waiting for the creator.”</p>
        <p>It happened so many times. By day 5, I was ready to throw everything onto the ground and give up completely. I would see someone trying to ask him questions and I would have to walk into the conversation like, “here’s how it actually works.” It was super infuriating.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Have you experienced sexism on other occasions?</dt>
    <dd class="interview-a">
      <p>I literally left a job because of sexism. I was at this one place for nearly a year and all the women minus one had cycled through. That’s already a bad sign. We used to have creative sessions where I would be in a room with four guys and they would just buddy up and go nuts for each others’ ideas but I felt like I was invisible, I had to speak so loud that I thought I was going to lose my voice. One of my seniors used to say really inappropriate things about my clothing but when I confided in one of the developers, he made a snide remark and defended the harassment. I had a million conversations with HR, and eventually felt it wasn’t worth it so I left.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">How did that experience compare to Refinery29?</dt>
    <dd class="interview-a">
      <p>I took the position here after a couple of bad jobs dealing with men in tech. I walked into their offices and the product engineering department was nearly half female. The company itself is 80% female. It’s amazing to work in tech teams where women are represented and no one has a bias towards your ideas and everything is inclusive. It’s the best company culture I’ve been around.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">What are some of your favourite projects at Refinery29?</dt>
    <dd class="interview-a">
      <p>Two of them are things I’m working on right now. We are launching a <a href="http://www.ellecor.com/?portfolio=vr29-refinery29s-webvr-viewer" title="Refinery29 VR web page">VR viewing portal</a> that is completely web based for all the VR content we’ve been shooting for the past year. I think web VR is going to be more prevalent in the future because it’s easy consumption VR and for us to integrate it into <a href="http://www.refinery29.com/interactive/vr29/" title="VR web portal">the site</a> feels cohesive and on brand. I’m really proud of the user experience and that we were able to take standard web content and make it immersive.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-michelle-cortese-refinery29.png" alt="Refinery29 VR portal on mobile">
      <figcaption>
        Photo credit:
        <a href="http://www.ellecor.com/" title="Michelle Cortese portfolio site">Michelle Cortese</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q"></dt>
    <dd class="interview-a">
      <p>Another one was this playbook for a program called <a href="http://www.refinery29.com/equal-pay-for-women-we-want-more" title="We Want More website">We Want More</a>, helping women reach equal pay and close the gender wage gap. It’s an interactive web experience that goes industry by industry and discusses how you can achieve equal pay. It gives you lists of salaries, averages in your field, how to start conversations in your field, career anecdotes from women. It feels like a rolodex where you can just pick out information. Everything is downloadable so you can download cards for later. We’re trying to make a tutorial system for women in all kinds of businesses. Everything from design to construction. We’re teaming up with another company who have a data set that allows us to enter your wage and salary and it can tell you how much you would be getting paid if you were a man just to get people really fired up.</p>
        <p>A fun experience was a big fashion week installation which I contributed to last year for <a href="http://www.ellecor.com/?portfolio=29-rooms-official-website" title="29 Rooms website">29 Rooms</a>. I helped build the UX for Lady Gaga’s Born This Way foundation room. It was a fun colourful experience and interesting concept. We were trying to make this ALS for kindness, like confessional booths. You would walk in and instead of a confessional, you would state a moment of kindness you experienced by a specific person and give them a shout out. Then that video would go directly to Facebook and the idea was to keep sharing it forward.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-michelle-cortese-29-rooms.png" alt="29 Rooms screenshot">
      <figcaption>
        Photo credit:
        <a href="http://www.ellecor.com/" title="Michelle Cortese portfolio site">Michelle Cortese</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">When you’re designing these installations, how important is social media to you?</dt>
    <dd class="interview-a">
      <p>A lot. With 29 Rooms, it was the core feature. The experiential team came to us and said our installation for 29 Rooms is going to be a confessional booth and these videos need to be published on social media as soon as possible for the sake of impressions. How can we do that? Do we have a specific type of social media in mind or do we want it to be broad? We stuck with just having a Facebook page for the event itself for each specific room so you could find it easily. Everything was aggregated in this one place which made it really measurable. Sweeping through everything was easy so we could make sure nothing offensive got out.</p>
        <p>Social media is really important but it’s so different from project to project. It’s easy to fall into a trap where it becomes an afterthought like we’ll just add icons for Facebook and Twitter. It’s really important to think outside of that. Our Facebook page repository was a good solution.</p>
        <p>Now I’m trying to think of solutions for a Web VR experience. I’m currently struggling with where do I put the share buttons, should I put it in the experience itself? Will it be there upon entry or does the user have to find it? I have a couple of steps of onboarding when you get to the site so that’s where they currently are but I’m still deliberating over whether that’s where they should be. I’m really excited to put these things out and get results back from user testing to see how people interact with it.</p>
        <p>When I was building this experience, I had to implement some kind of onboarding for users. We’re debuting this thing at an event with thousands of people, so there is no chance everyone is going to know how to use a cardboard. I’ve learned from experience that when it comes to onboarding for a mobile experience, you have three seconds of the user’s attention. We implemented a trick where once you put the phone into VR mode, if you ever turn the phone to portrait orientation, we show you instructions again. We assume if you do so, you’re doing it wrong so we just bring the user right back every single time they turn their phone.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-michelle-cortese-vr-onboarding-flowchart.png" alt="VR onboarding flowchart">
      <figcaption>
        Photo credit:
        <a href="http://www.ellecor.com/" title="Michelle Cortese portfolio site">Michelle Cortese</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">As a senior technologist, it sounds like you do a little bit of everything. </dt>
    <dd class="interview-a">
      <p>Yeah, I’m in one of those weird positions. I’m a UI designer firsts but solving UI problems usually involves a lot of UX. I’ve been doing my own prototyping for many years and I think it’s important to be able to do that, particularly when you’re working with mediums that don’t have prototyping tools like VR. If you want things to be true to the way you see them in your head, you need to have your own prototyping skills. I know enough coding to build functional prototypes but I do not write shippable code. I won’t be making the end product but I can definitely make a mockup of what this product should look like.</p>
        <p>In the case of the web VR, it was a collaborative effort in a tiny team of three people. We had a producer, who also took care of all of the video encoding and made sure the content we used would load fast and well. We had a developer who is one of our amazing engineers who worked on all the core functionality using <a href="https://aframe.io/" title="A Frame page">A-Frame</a>. I worked on the look and feel of the experience. I pulled my own branch on Github, put my own furniture in, made 3D models and optimized them for web. I was in there changing the colours, editing the objects, dropping in the logo, and then if ever there was a chance I might break the template that our dev set up, he would come back in. It was a collaborative process which is really awesome.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">What programs do you normally use?</dt>
    <dd class="interview-a">
      <p>For UI, I really love Sketch and I use Illustrator a lot for idea sorting. For quick prototypes, I use After Effects. I think it’s really important as a UX/UI designer to know how to use After Effects (or any kind of layer based prototyping tool) because it assures that when you hand your work off to the developer, you’re going to get exactly what you anticipated.</p>
        <p>When I’m working on VR projects, I mostly like Unity for 3D gaming. I build my models and I work out my 3D environment building in Cinema 4D. I got really obsessed for a little bit with interactive prototyping using Origami through Sketch. I liked that you could export animation code for iOS, Android, and web but it felt like a lot of work. It was more bang for my buck, but at the same time, it took time. Then your stuff ends up in Quartz Composer, and who’s using that anymore? I like it conceptually but it’s such an involved process.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Where do you draw inspiration from?</dt>
    <dd class="interview-a">
      <p>For UX, I stay away from screens as I possibly can. I walk away from it and I experiment and sketch around with paper, my hands. If it’s a VR problem, I’m shutting my eyes. I try to stay away from anything that can influence me.</p>
        <p>When it comes to UI, it’s just a Pinterest rabbit hole. I get a vague idea of what the sensibility of the project is, and then I just go on a deep dive into Pinterest or Tumblr and I resurface after several hours a new person.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Do you have a community of people to ask for help and feedback on your projects?</dt>
    <dd class="interview-a">
      <p>Yes. I feel like I got in the creative tech scene from my masters program. I think school is so helpful for networking and when you pursue additional education with professionals, everyone is super serious. They’re really committed and advanced in their career so you walk out with a whole network of people who are just like you in a lot of ways.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Do you have any mentors?</dt>
    <dd class="interview-a">
      <p>The biggest mentor I’ve had in my life is here in Toronto. It’s <a href="http://www.antony-smith.com/" title="Antony Smith portfolio page">Tony Smith</a> at the Bay. He was amazing. I think he was the first person to really believe in me and that is incredibly important. He really fostered my growth and had a lot of faith in my design sensibility at a point in my career when I didn’t have a good feedback system yet. I was able to art direct shoots with confidence. If I didn’t have that kind of creative director to report to, I don’t know that that would have been possible. That kind of faith in me at an age where I was just starting out in the field was invaluable.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Where do you see yourself in 5-10 years?</dt>
    <dd class="interview-a">
      <p>I’m in that zone right now where I’m trying to scope out the next five years. I’d like to contribute to saving UI from the vagueness and the abstract as we move into this immersive world. I think there’s a lot of risk right now. I’m afraid that if design sensibility falls into place as is, it could help support a world where fake news is prevalent, where people are not as informed as they could be, and where we can’t communicate to our satisfaction. I want to make sure that the right design standards are set into motion and that the people that really care are the ones setting the standards. I want to go find a really good HCI (Human Computer Interaction) program, get a PhD and play a part in that movement. That’s my number one goal.</p>
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