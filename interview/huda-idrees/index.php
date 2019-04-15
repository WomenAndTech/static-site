<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-yellow';
  $interviewee_name = 'Huda Idrees'; // Use for page title & share links
  $interviewee_url = 'huda-idrees'; // Used for share links URLs, use the same name as the interviewee's folder name

  // Twitter & Facebook sharing info
  //-----------------------------------------------------------------------------
  // Social media images are added in the metatags in includes/header.php to always pull in the feature image from this interview. Make sure the featured image always follows this format: featured-firstname-lastname.jpg
  $social_title = 'Interview with Huda Idrees with Ivonne Karamoy and Christina Truong';
  $social_desc = 'Designer and engineer turned founder and CEO of Dot Health.';

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
  $interviewer_url = "https://twitter.com/ivonnekn";
  $interviewer2 = "Christina Truong";
  $interviewer_url2 = "https://twitter.com/christinatruong";
  $editor = "Ivonne Karamoy";
  $editor_url = "https://twitter.com/ivonnekn";
  $editor2 = "Ria Lupton";
  $editor_url2 = "https://twitter.com/RoastedKeyboard";
  $editor3 = "Christina Truong";
  $editor_url3 = "https://twitter.com/christinatruong";
  $dev = "Ivonne Karamoy";
  $dev_url = "https://twitter.com/ivonnekn";
  $transcribe = "Cassie Kaiser";
  $transcribe_url = "https://twitter.com/CassKaiser";
  //$photographer ="Natalia Dolan";
  //$photographer_url = "http://nataliadolan.com/";


  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

<main role="main" data-interview>
  <!-- ALL content goes between the <main> tags. Below are some common modules for this page. Delete, revise or add more components as required. Refer to the Style Guide documentation for more details. Delete this comment when you've completed this page. -->


  <!-- // Featured Image -->
  <div class="border img-feature">
    <figure>
      <img src="<?php echo $path_img; ?>featured-huda-idrees.jpg" alt="Huda Idrees">
    </figure>
  </div>


  <!-- // Interview Header -->
  <header class="border header-interview">
    <div class="wrapper-sm">
      <h2>Huda Idrees</h2>
      <p class="intro">Huda is a design powerhouse. Born and raised in Saudi Arabia and trained as an engineer, Huda’s design career has included leading product and design at <a href="https://www.wattpad.com/">Wattpad</a>, <a href="https://www.waveapps.com/">Wave</a> and <a href="https://www.wealthsimple.com/en-ca/" title="Wealthsimple website">Wealthsimple</a>. She’s combined her skills in design and engineering with her leadership and entrepreneurship know-how to use her powers for good. Huda is CEO and Founder of <a href="#">Dot Health</a>, a service that gives people easier access to their personal health data.
      </p>

      <?php // Don't update. Using the info from PHP variables at the top of the page. ?>
      <p class="author">An interview with <a href="<?php echo $interviewer_url; ?>"><?php echo $interviewer; ?></a> and <a href="<?php echo $interviewer_url2; ?>"><?php echo $interviewer2; ?></a></p>

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
    <!-- // Question -->
    <dt class="interview-q">You started computer programming at a young age and actually started your own business. Can you tell us about how you grew up and how you became interested in design and technology?
    </dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>When I was 12, design was not a thing. There was graphic design and there was the internet. Making websites was a whole new field that we were observing and we’ve now matured into design. The seeds of it were always there but I didn’t know what to call it. I just knew that if I made websites and made them prettier, I got more money. </p>
      <p>I had a lot of fun growing up. I feel like people have a lot of misconceptions about Saudi Arabia. I loved my childhood there. The one thing that’s very interesting about that country is that kids don’t work in the summer. Most kids would have after school jobs but not in the summer. Summer is for you to spend time with family. It is a really culturally embedded thing.
      </p>
      <p>I grew up in a big family. I’m one of six kids so I have 3 sisters and 2 brothers and I’m one of the younger ones. I think that’s had a big impact on what I thought I could be in life. It’s like getting a puzzle that’s half made already. I felt like I had to live up to a lot very early. It was always in the back of my mind.
      </p>
    </dd>
  </dl>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">Are your siblings in design or tech? Do they work in the industry?
    </dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>No, I’m from a family of engineers and that’s what I’m trained in. My dad’s an engineer, my older brother is, one of my sisters is, one of my sisters is an architect and she switched careers into illustration.
      </p>
    </dd>
  </dl>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">You graduated from the <a href="https://www.mie.utoronto.ca/">University of Toronto</a> in Industrial Engineering, did you know at that point where you wanted your career to go?
    </dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>When I graduated, yes, because I had worked at Wattpad already. Wattpad was my 16 month co-op in the middle. With co-op you either learn what you don’t want to do or, if you’re one of the lucky ones, you find something that you want to do. Wattpad was the best co-op, best decision I’ve ever made because I realized what I wanted to do.
      </p>
    </dd>
  </dl>

  <!-- // Image - Left & Right -->
  <div class="border img-side-by-side">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-huda-wealthsimple-mobile.jpg" alt="Wealthsimple Mobile App design">
      <figcaption>Huda’s first project at Wealthsimple was leading their mobile app development.
      </figcaption>
    </figure>
    <figure>
      <img src="<?php echo $path_img; ?>landscape-huda-wealthsimple-laptop.jpg" alt="Wealthsimple multi-platform design">
      <figcaption>Shortly after joining the team, she became Head of Product and Design. Photo Credit: <a href="https://www.wealthsimple.com/en-ca/">Wealthsimple</a>.
      </figcaption>
    </figure>
  </div>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">I read that you crafted your design role at Wattpad yourself.</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>Yes! With Wattpad, I thought working within technology startups was super cool and I really want to do this [design work]. At Wave, my role really morphed from designer to product owner. I led two product lines while I was there. At Wealthsimple it was obvious to me, you’re not just a designer. You now have to own multiple layers of the job.</p>
      <p>The Toronto tech ecosystem has matured into the role of product. Product was not a thing when I was at Wattpad. UX design was big and it was a big leap for Wattpad. You were either a designer or a developer or you’re <a href="https://twitter.com/allenlau">Allen</a> [CEO and co-founder of Wattpad]. You don’t have other roles. Now, you’re a product owner! You’re a researcher! Or any of the other facets. </p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>We knew we could expand and stretch the capabilities of the developer every time we add a designer.</p>
  </aside>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">You jump started the design team at Wattpad and were also fresh into a design role. How did you approach building the team?
    </dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>Allen and <a href="https://twitter.com/ivanyuen">Ivan</a> [Co-founder of Wattpad] were understanding and acknowledging of the role of design in their organization. They understood why it was important. I remember way back, on the homepage, there used to be a recommended stories thing. It was not really visible. We moved that to the top and it increased our clicks on storytelling by 85%. I remember that being a turning point where we thought, this [UX design] is a real thing. There’s a name attached to it.
      </p>
      <p>We took it from there, and learned that we could expand and stretch the capabilities of a developer every time we added a designer. We used that formula as we grew. I was there when we were 7 people and we grew to about 30-35 by the time I left. It was a huge period of growth and was really interesting.
      </p>
    </dd>
  </dl>


  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">Do you feel like knowing the value of design came intuitively to you? </dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>I didn’t know it was called design. I would read a lot of stuff and go to all these free conferences as a student. I would read about and look up to designers. I just sort of learned.
      </p>
      <p>One of my favourite designers and the person that has probably taught me the most is a guy called <a href="http://fabiosasso.com/">Fabio Sasso</a>. He ran <a href="http://abduzeedo.com/">Abduzeedo</a>. The name is short form for abducted by design. It’s very different now, but it used to be a tutorial site to help you learn Photoshop, Illustrator and basically the whole Adobe Creative Suite. I started looking up to people like him and hearing them speak and talk about the power of design in different contexts and I began formulating my own thoughts around it. </p>
      <p>I should give a lot of credit to U of T [University of Toronto] because I learned so much there. I think a large part of Engineering that people don’t give any credit for is design. Engineers don’t just build stuff, they design it. At U of T, a large part of what we learned, almost subliminally, was how to approach problems. It’s invaluable. I should add that I think schools are very expensive, but I believe you should learn how to problem solve at some point, and engineering schools are valuable for that. </p>
      <p>I learned [design] because of that background and then added on multiple facets to that through learning, through doing, through experience. Allen gave me a huge platform to do stuff in a very contained environment of entertainment and storytelling but loose enough that I could put my mark on something. The entire Wattpad team was awesome. I give them a lot of credit.
      </p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-huda-candid-photo.jpg" alt="Huda Idrees">
      <!--figcaption>Photo credit: <a href="http://nataliadolan.com/">Natalia Dolan</a></figcaption-->
    </figure>
  </div>


  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">You have experience building a design team. You’re now a founder and CEO and building your own company. How does education play a role in how you find or select people to add to your team?
    </dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>I don’t really care if you went to school or if you went to school for something else. If you can do the job, that’s it. I’ve learned the difference between experience and raw talent, and the ability to shape raw talent.
      </p>
      <p>At Dot Health, we deal with health data, which is complex. When I’m building my team, I like to look at parallels for different people and where they could come play in this space. At the end of the day you won’t know until you work with them and I’ve been fairly lucky. We’ve added most people after knowing them and working with them for a while. That’s been really good.
      </p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>I want to use my powers for good and I want to apply it to stuff that people actually need, stuff that somebody cannot be without.
    </p>
  </aside>


  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">I want to step back and look at your career path. It seems like you’ve transitioned seamlessly from being a designer to a leader to now a founder. Do you feel like you made those transitions deliberately? How do you approach navigating your career?
    </dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>I think that the only serendipitous thing that happened to me and started all of this was Wattpad. After that everything has been very calculated. I don’t think it always comes across that way. Wave was a very conscious decision for me. I could have chosen to go back to Wattpad and continue in that journey, or I could’ve chosen to go elsewhere.
      </p>
      <p>The long term plan of all this is me entering into technology and startups in the area of design and the beginnings of product and then slowly moving into stuff that is going to be more and more useful for people. There was a very conscious move from Wattpad, which was entertainment, to Wealthsimple. I want to use my powers for good and I want to apply it to stuff that people actually need, stuff that somebody cannot be without. I have slowly moved in the direction that I’ve really wanted, which is healthcare. Healthcare has been this long term dream of mine. I never really found somebody doing the stuff I wanted to do.</p>
    </dd>
  </dl>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">You’ve said, “I don’t want startups to stand purely for dollar signs. That’s relatively easier than trying to work for hospitals, for example. But if we all do that, how will anyone change? Somebody has to do this.” From your work to your writing, you seem grounded in this desire to make the world better. Where do you think that passion and drive for social good comes from?
    </dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>I think on some level we all think that way. I’m a bit more vocal about it. You start a company with the best intentions and ideas about how you’re going to be a B Corp and do all of these [good] things and then you don’t end up doing it. I’ve seen this in places so many times. I think if you centre your work around it, it becomes a necessity, you cannot escape it. If you were to say, I’m going to run an ad company, like Facebook. It’s going to make tons of ad revenue and then I’m going to create the Chan-Zuckerburg initiative and solve all of the problems. That is a very valid thesis for somebody to come up with and I’m glad that they’ve managed to do it. But it’s very easy to say, I did my first bit of being a hugely successful ad company and nobody made me sign a contract to say that I’m going to do any social good, so I’m not doing it. If the thing that you do is inherently social good, then you can’t escape it. </p>
      <p>There are companies that do this. <a href="http://www.patagonia.com/company-info.html" title="Patagonia company info">Patagonia</a> is a good [for-profit] that comes to mind because <a href="https://en.wikipedia.org/wiki/Yvon_Chouinard" title="About Yvon Chouinard, founder of Patagonia">Yvon</a>’s philosophy for the company (even though it’s hugely profitable) is for it to <em>do good</em> for the people that work there, <em>do good</em> for the people making stuff, <em>do good</em>. Khan Academy is another. They do education en masse but doing good in the world of education is built into their DNA.
      </p>
      <p>If I come out and say Dot Health is going to build what nobody is choosing to build for the consumer, then I have nowhere to hide. So I think when you make that decision, you <em>make</em> that decision. With Dot Health, if you’re a quad-zillionaire, I’m not going to charge you any more for accessing your health data. It’s a plain and simple offering.
      </p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>If the thing that you do is inherently social good, then you can’t escape it.</p>
  </aside>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">Can you describe Dot Health?</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>Dot Health at the core of it enables you to access your own health data. Today, an average Ontario resident has been to about 2.3 different health professionals in the span of a year. These care providers have treated this person and have kept records of what happened within those treatments. All of that information lives in the ether, it doesn’t communicate with each other. What we’re building is essentially the platform that enables the real-time access of this data, but more importantly the real-time access of this data that is controlled by <em>you</em>, the person. So instead of relying on a healthcare professional to send an x-ray to your specialist, you can access and send your own x-ray.</p>
      <p>I want to be clear that this isn’t a new concept. I also want to be clear that this concept is something that we’ve seen everywhere. It has happened in every other industry except healthcare. It’s like this black box. It is one of the only industries where we don’t have access to our own data. It’s a little bit dis-intermediation and on the other side, consumerization of your own health and wellness data. </p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-huda-dot-health.gif" alt="Dot Health Website" style="border: 1px solid #ccc;">
      <figcaption>
        Huda launched Dot Health in February 2017 to enable people to access their own personal health data.
      </figcaption>
    </figure>
  </div>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">Do you need to rely on healthcare professionals to input that data about you?
    </dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>Nope. Like any good solution, we do the grunt work for you and make it really simple for you to tell us your information. When you sign up for our service–we’ve been steadily onboarding our waitlisted clients since we announced–you give us 4 basic pieces of information about you and we go fetch your data, and we keep fetching it for you as long as you have a Dot Health subscription. It doesn’t require buy-in from every single individual healthcare professional. We get updated information the moment it’s updated on whatever system they’re using.
      </p>
    </dd>
  </dl>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">It must be a challenge working with all the different systems.</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>We have ways around it. We have certain partnerships that allow us to gain access to all these real-time feeds without having to individually work with all the different systems.
      </p>
    </dd>
  </dl>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">Do you need the patient’s consent?</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>The Personal Health Information Privacy Act actually stipulates that all the information that’s collected about you belongs to you. It is your information. Often, when you pick up a copy of your x-ray or lab work, you pay money for that service and the reason is because you’re paying for the paper. You get charged over a dollar per sheet of medical record and some of those records are just a tiny prescription at the top. It makes no sense. So we’re just turning the system on its head a little bit.
      </p>
      <p>If you can imagine, everything that’s been done within the Canadian healthcare system is top-down. What we’re doing is the exact opposite. We are the bottom-up economy of healthcare. You’re a person, you need to access all these services and to feel empowered and be in control of what you’re doing. We help you augment that ability. That’s the service that we’re providing to each of our clients.
      </p>
    </dd>
  </dl>


  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">That’s really interesting. I use wellness apps and I input information into it. But then I go to my doctor and there’s forms, test results, etc. that’s filled in on paper and then inputted into their system. There’s no relationship between my personal observations and records of my wellbeing and the clinic’s health records.
    </dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>You bring up an interesting point because those are two data sets in the eyes of your health provider–not in your eyes. The important part about good preventative health systems is that behavioural data is a large part of it. When you think about preventative health you think about chronic disease and how to prevent it. All these things are currently happening with people on a small scale but can help the diagnosis in the long term. For example, patients with type 1 diabetes have a system inserted inside their body at all times that tracks their blood sugar levels and insulin levels so they can take insulin. But it’s never shared with the doctor. This type of technology has always been outside of it.
      </p>
    </dd>
  </dl>


  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>We are the bottom-up economy of healthcare. You’re a person, you need to access all these services and to feel empowered
    </p>
  </aside>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">What challenges have you encountered in healthcare that are unique to healthcare?</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>The biggest thing we butt up against is how everybody feels like we cannot/do not have the ability innovate when it’s a public healthcare system. That’s the largest mental roadblock for most people.
      </p>
      <p>Health technology, unlike all other technology, is relationship management. Other technology has the luxury of being a utility. If I am an investment management company there’s certain numbers and figures and I trade them and that’s it. Yes, there is a relationship component because you have to figure out the client’s risk assessment but it almost ends there. With healthcare you’re constantly managing this relationship between multiple parties for a single entity.
      </p>
      <p>When we look at a public funded infrastructure and ways to work with them, there’s way more embedded agendas for everybody that is not in the interest of the patient. I use that word very specifically here because I don’t call our clients "patients". But in the healthcare system they are referred to as patients and treated as such, which I think is unfortunate.
      </p>
    </dd>
  </dl>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">I commend you for tackling it. Between the complexity and the politics, it sounds like such a challenge!</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>Let’s be real. It’s all politics. It’s not even a technology problem. We’ve known how to write API’s for decades. We have known how to send and receive requests for decades. This is a political problem. Dealing with the politics of it is interesting.</p>
    </dd>
  </dl>

  <!-- // Image - Left & Right -->
  <div class="border img-side-by-side">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-huda-betakit-diversity.jpg" alt="Huda speaking at BetaKit panel on diversity">
      <figcaption>Huda is a regular contributor and speaker within the tech community. Photo credit: <a href="http://betakit.com/dmz-panel-tackling-stems-diversity-problem-says-get-the-hell-out-of-the-way/">Betakit</a>.
      </figcaption>
    </figure>
    <figure>
      <img src="<?php echo $path_img; ?>landscape-huda-brookfield-speaking.jpg" alt="Huda speaking at Brookfield event">
      <figcaption>
         She speaks regularly about product and design as well as diversity and inclusion. Photo credit: <a href="https://www.flickr.com/photos/136584968@N04/sets/72157674971896690">Brookfield Institute</a>.
      </figcaption>
    </figure>
  </div>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">I want to talk about diversity and inclusion, if you don’t mind. You’ve spoken and written openly about diversity and <a href="https://beta.theglobeandmail.com/report-on-business/small-business/talent/how-startups-can-create-a-culture-of-inclusiveness/article27865146/?ref=http://www.theglobeandmail.com&">inclusivity</a>. As a person whose identity can fall into many categories, do you feel talking about these topics is a responsibility that is imposed on you or is it a conscious choice that you can make?</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>I’m a huge fan of giving people the ability/option/space to make their own choices. I 100% think it’s a choice. And I don’t think we should ever expect people to just be <em>that</em> person. I do think there are certain public/public-ish figures who should be called into question because they’ve stood for them before and continue to not do that. I think that is a different story. So I’ve been vocally pretty anti ‘The Lean In movement’, for example. And I continue to <a href="https://medium.com/@hidrees/silence-of-the-masses-ca9d85e0ed63">hold Sheryl Sandberg accountable</a> for talking about women’s issues and then staying silent when they matter most. So I want to make that distinction very clear. I think when you start off, you or me or Christina [Truong], we can make that choice. And I have made that choice to speak about it. </p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>There are certain public/public-ish figures who should be called into question because they’ve stood for [diversity &amp; inclusion] before and continue to not do that.</p>
  </aside>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Answer -->
    <dd class="interview-a">
      <p>I do think though that if you look at the entire community, there are some people who have more influence. Oprah, or Beyonce, or Rihanna have a platform. They have the ability to reach out to broader audiences. And I think that responsibility is fortunately or unfortunately thrust upon them. They feel obligated to their community because they have a certain story and come from a certain background. I don’t think it’s necessary, I think it’s useful. </p>
      <p>If you have the ability to speak, it’s actually a luxury, most people don’t have that. I was speaking to someone the other day and he identifies as a minority, works at an organization where he’s very clearly the outlier. One of the things that led him to me was my <a href="https://twitter.com/hidrees">Twitter feed</a> which made him think, “These are all the things that I think but I can’t say because I’m attached to this organization”. So I think we take it for granted. I definitely do sometimes. I can say anything I want. The reason I can do that is because my employer, which is me, is okay with it. If you worked at Apple for example, that might not be the case.</p>
      <p>You also need to recognize that you’re just speaking from your perspective but your story can be indicative of many other stories. I will never pretend to speak for multiple people, I will only share my own story. I think we should recognize that and use that to fuel some of the storytelling that we do. Most of my twitter followers are a homogenous group, mostly male, mostly techies. So when I share my stories it is going to exactly the audience I want it to go to.</p>
      <p>The large majority of the inclusivity offenders are  people who do it without malicious intent. If you can tell stories to those people and if you have that platform then I think it’s not a responsibility, but it’s pretty cool. Because then you’re gonna get a response back and people are gonna start having those conversations with you where you can enlighten them or help broaden their horizons somehow.</p>
      <p>[To Christina] Would you add to that? Because you talk about diversity so much.</p>
    </dd>
  </dl>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">[CT] I think the bad part comes when people just expect you to do it and sometimes you don’t feel like it. Or that’s the only time they call on you. So there’s a fine line between being respected for your ideas and opinions and being tokenized.</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>I agree.</p>
    </dd>
  </dl>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">[CT] And I think that it’s not necessarily a responsibility to help others, it’s a responsibility to be yourself. You just literally being who you are is a movement in a way. If you make yourself the same as everyone else then it’s not healthy for you. Even if you’re only helping yourself, that can inadvertently help other people. </dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>Totally. You bring up a really good point around authenticity because I think we also take that for granted. This person who I was talking about could’ve been authentically ‘this is who I am’. But he can’t say that. Even his authentic self is policed by his company because he somehow represents the opinion of his employer. </p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>I think [non-disparagement agreements] is taking away some part of a person’s story</p>
  </aside>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">[CT] And at what point do you stop? If you start off being yourself, people know who you are. You might lose opportunities at the beginning but if you don’t start being yourself, then can you ever? So just do it from the beginning and the people who want to be around you will be around you and you’ll never have to wait till you get to a certain position to be your true self. You have nothing to lose.</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>Yeah and there’s a shift that happens once you leave certain organizations. What I would love to start a movement around is to ban non-disparagement agreements. When employees leave companies, they are asked to sign non-disparagement agreements. I disagree that that should be a thing in tech specifically because I think we’re actively working against an inclusive environment every time we do that. You [as a company] should be confident enough in the stuff you’ve done. Usually, non-disparagement agreements are just a sign that you as an employer did non-kosher stuff. So if you didn’t do anything disparaging then you can say ‘You know what Christina, you’re leaving, and that’s fine, we had a working relationship. This is your release and this is what we owe you and goodbye.’ And then she can make choices to say whatever, instead of the company trying to put boundaries on it.</p>
      <p>I think that’s taking away some part of a person’s story which is so criminal. I don’t know why we need to do it. It’s awful. </p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>What defines success for us is better care for people.</p>
  </aside>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">What’s next for you and Dot Health? What can we expect? </dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>We’re super excited to be starting in Ontario, but we want this to be Canada-wide before this becomes global. So some of the things you can start expecting is different, better, more seamless transitions for people who have high interactions with the healthcare system. </p>
      <p>What defines success for us is better care for people so we hope to be making movement towards helping deliver better care for Canadians, for now. Then looking at models as we extend across different borders and different healthcare systems across the world, and looking at how global healthcare can be a thing. People travel everywhere but somehow our health information doesn’t. It’s like someone telling you, you’re leaving Canada, you can’t use this credit card anymore. </p>
      <p>I’m really looking forward to announce the dissolving of provincial or national boundaries as a result of some of the work we’re doing.</p>
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
        Editing by <a href="<?php echo $editor_url; ?>"><?php echo $editor; ?></a><?php if ($editor2): echo ', <a href="'.$editor_url2 .'">'.$editor2.'</a>';endif; ?>
        <?php if ($editor3): echo 'and <a href="'.$editor_url3 .'">'.$editor3.'</a>';endif; ?>
      </li>
      <li>
        Development by <a href="<?php echo $dev_url; ?>"><?php echo $dev; ?></a><?php if ($dev2): echo ', <a href="'.$dev_url2 .'">'.$dev2.'</a>';endif; ?>
        <?php if ($dev3): echo 'and <a href="'.$dev_url3 .'">'.$dev3.'</a>';endif; ?>
      </li>
      <li>
        Transcriptions by <a href="<?php echo $transcribe_url; ?>"><?php echo $transcribe; ?></a>
        <?php if ($transcribe2): echo 'and <a href="'.$transcribe_url2 .'">'.$transcribe2.'</a>';endif; ?>
      </li>
      <!--li>
        Photography by <a href="<?php echo $photographer_url; ?>"><?php echo $photographer; ?></a>
        <?php if ($photographer2): echo 'and <a href="'.$photographer_url2 .'">'.$photographer2.'</a>';endif; ?>
      </li-->
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
