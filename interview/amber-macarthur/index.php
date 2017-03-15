<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-blue';
  $interviewee_name = 'Amber MacArthur';; // Page title & share links
  $interviewee_url = 'amber-macarthur'; // Share links URLs

  /*
    INTERVIEW CREDITS:
    If you need a second name, add a variable with a '2' the end. Example:
    $interviewer = "First Person";
    $interviewer_url = "http://twitter.com";
    $interviewer2 = "Second Person";
    $interviewer_url2 = "http://mywebsite.com";

    If you don't need a credit, delete the whole <li> in the HTML.
  */
  $interviewer = "Kelly Seagram";
  $interviewer_url = "http://twitter.com/kelzor";
  $photos = "Kelly Seagram";
  $photos_url = "http://twitter.com/kelzor";
  $editor = "Kelly Seagram";
  $editor_url = "http://twitter.com/kelzor";
  $editor2 = "Cassie McDaniel";
  $editor_url2 = "http://work.cassiemcdaniel.com";
  $ad = "Mark Staplehurst";
  $ad_url = "http://twitter.com/britburger";
  $design = "Cassie Kaiser";
  $design_url = "http://www.cassiekaiser.com";
  $design2 = "Mark Staplehurst";
  $design_url2 = "http://twitter.com/britburger";
  $dev = "Brenna O'Brien";
  $dev_url = "http://brennaobrien.com";
  $dev2 = "Brett Bergmann";
  $dev_url2 = "http://twitter.com/brttb";
  $transcribe = "Kelly Seagram";
  $transcribe_url = "http://twitter.com/kelzor";


  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

  <main role="main" class="interview">
    <!-- Featured Image -->
    <div class="border img-feature">
      <figure>
        <img src="<?php echo $path_img; ?>featured-amber-macarthur.jpg" alt="Amber MacArthur">
      </figure>
    </div>

    <!-- Interview Header -->
    <header class="border header-interview">
      <div class="wrapper-sm">
        <h2>Amber MacArthur</h2>
        Our tenth interviewee is Amber MacArthur, or the prodigious <a href="https://twitter.com/ambermac">@ambermac</a>, well-known technology TV host, podcaster and author of the bestselling book <em><a href="http://www.amazon.ca/Power-Friending-Demystifying-Social-Business/dp/1591843286">Power Friending</a></em>. Amber writes for <em>Fast Company</em>, speaks regularly, and is an entrepreneur several times over.

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
      <dt class="interview-q">Give us a quick rundown of the beginning of your career and how you transitioned from podcasting into broadcasting.</dt>
      <dd class="interview-a">
        <p>Sure! I did a post-graduate degree in journalism at University of King's College in Halifax and shortly thereafter went to work for CBC in Charlottetown for three or four months as a daily news reporter. I absolutely hated the routine, the grind of working in a large corporation. I felt like I needed more experience, so I moved out to San Francisco and worked in the dot-com industry for three years. Then I came back to Toronto and worked at Microsoft for a year, and then I got a job at G4 Tech TV hosting a show with tech guru <a target="_blank" title="Leo Laporte's Personal Website" href="http://www.leoville.com">Leo Laporte</a>.</p>
        <p>About a year later I started podcasting. That was exciting; it was the first time I really knew that I could step out and create content on my own — that I didn’t need to be attached to a broadcaster. I created <a target="_blank" href="http://www.commandn.tv">commandN</a>, a technology podcast in, I guess, 2006. About that same time I started hosting a podcast with Leo called Net at Night and worked at CityTV as a New Media Specialist. After a year of that, I started <a target="_blank" href="http://konnektnow.com/">my own company</a> and haven't looked back.</p>
      </dd>
    </dl>

    <dl class="border">
      <dt class="interview-q">When did you start to specialize in technology journalism?</dt>
      <dd class="interview-a">
        <p>When I was at CBC as a general assignment reporter, I was really young and I knew that I needed some type of expertise, and I didn't want to just do daily news because it was too depressing, and that wasn't my personality. [Laughs]</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I was excited about people being able to build things online, that one person in their basement could reach a million people around the world.</p>
    </aside>

    <dl class="border">
      <dd class="interview-a">
        <p>I moved out to San Francisco, and I'd always been interested in online journalism and content creation on the Web, so I started to work in that space, building and creating content for websites, doing information architecture and web usability. After working in that area for a while, I just knew it was my passion. I was excited about people being able to build things online, that one person in their basement could reach a million people around the world, or it could be even bigger than that. </p>
      </dd>
    </dl>


    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-amber-mac-camera.jpg" alt="Amber MacArthur with camera">
        <figcaption>
          Photo credit: <a href="http://bamcat.com" title="Brian McKechnie">Brian McKechnie</a>
        </figcaption>
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">In terms of developing your career, what do you think has been the biggest hurdle you've had to get over in all those transitions?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>The biggest hurdle was in 2007 when I <a target="_blank" href="http://www.blogto.com/city/2008/01/amber_macarthur_gone_from_citytv/">stepped away</a> from a regular job at CityTV. It was a very secure job, with a bright future, but I knew that I didn't want to be in an office environment full-time. That's not where I'm creative. So the biggest hurdle was probably the year after I left CityTV, figuring out how I was going to feed myself.</p>
        <p>Fortunately things went well, and I am so happy I made that choice because it definitely suits my personality to be an entrepreneur. </p>
      </dd>
    </dl>

    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">You have so much going on. What are your current projects?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>As CTV’s <a href="https://twitter.com/MarilynDenisCTV">Marilyn Denis</a> once told me, you should always have multiple jobs in case you get fired from one. [Laughs] I am a big fan of that mantra. </p>
        <p>Right now I have six or seven jobs; I'll name a few. I'm President and Co-founder of <a href="http://konnektnow.com">Konnect</a>, which I started with my brother, and my partner Chris is also involved. Konnekt is a social media digital marketing agency, we do a lot of work with clients. I host <a target="_blank" href="http://www.ctv.ca/AppCentral.aspx">App Central</a> for CTV and I also write for <a  href="http://www.fastcompany.com/user/amber-mac">Fast Company</a> magazine about digital productivity and trends in digital marketing. I wrote a book a couple of years ago called <a href="http://powerfriending.org">Power Friending</a>. I have a podcast, <a href="http://twit.tv/tsh">The Social Hour</a>, on Twit.tv as well as commandN.tv; I've been doing that for a while. </p>
        <p>I have a bunch of new projects in the works, but those are what I’m doing right now. </p>
      </dd>
    </dl>

    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Each of those different things has a different production schedule and different timeline — some are monthly, some are weekly. Do you have any strategies for managing your ridiculous schedule?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I finally met someone recently who maybe has the same strategy as me: <a target="_blank" href="http://www.sethgodin.com/">Seth Godin</a>. He's better known than I am, very popular online for all of his digital marketing work. I asked him how he was able to manage everything that he did, and he described it like this: Number one, he works for himself, so actually he can be way more productive in an eight- or ten-hour workday. When you're in your home office, you can get a lot done because you're not in meetings.</p>
        <p>I think that would be pretty much the number one thing for me as well – I don't go out to a lot of meetings. Number two, like Seth, I don't watch a lot of television. That can be a huge time-sucker, and just there I feel like I get an extra twenty-five hours a week. </p>
        <p>I also don't drink alcohol, so I stay out of trouble there too. [Laughs]</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">No recovery time!</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>No recovery time. And no distractions; I don't have alcohol or partying, television, or meetings as influences.</p>
        <p>I don't find that I'm overwhelmed, because I've set up my life so that I feel like I have total freedom to do whatever I want, and that's more important to me than anything. </p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">As a mom with a family, what sort of support do you have, both professionally and in your personal life?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Of course it’s challenging to be a mom running my own business, but fortunately my partner Chris is also working for himself; he’s at home and in our home office with me, and he's a huge help.</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I'm not trying to be Supermom. I've had a nanny since my son was five months old.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Answer -->
      <dd class="interview-a">
        <p>And I'm not trying to be Supermom. I've had a nanny since my son Connor was five months old. She lives out, and we have her only forty hours a week, but that's been enough to stay afloat. I think anyone who tries to do it without help is going to be in big trouble when it comes to managing family and work. </p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">As a media entrepreneur, what technical, business, or journalistic skills have you had to pick up and what skills would you like to acquire?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I think that I realized very early on that I wasn't going to be the person who would be on the technical side as far as editing or shooting my own video and building websites. I needed a strong team around me. </p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I almost don't want to know how to do some of the technical things, because I think it's better to stay in your own lane, so to speak.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I know that what I'm really great at is networking and finding new opportunities, and I've always been more involved in new business and creating those opportunities. To be honest with you, I almost don't want to know how to do some of the technical things, because I think it's better to stay in your own lane, so to speak. It would be too much if I tried to get involved on the technical side. </p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Through all of your different projects you’ve revealed a sort of genius when it comes to finding partnerships, sponsorships and collaborations. Do you have any advice for independent media creators that are looking to reach a larger audience, perhaps through sponsorships?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>My main advice would be: don't consider any potential sponsor too small. Let's say you have a podcast and you only have a couple hundred people listening to your podcast. What's wrong with getting a really small local business to sponsor it for six months, then move up from there? I don't think you have to step up to a really big name sponsor right away. </p>
        <p>My second piece of advice would be to build your own brand using social media, and build that brand as strongly and consistently as you possibly can. </p>
      </dd>
    </dl>


    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-amber-mac-on-set.jpg" alt="Amber MacArthur on set">
        <figcaption>
          Photo credit:
        <a href="https://twitter.com/kelzor" target="_blank">Kelly Seagram</a>
        </figcaption>
      </figure>
    </div>


    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">When it comes to content creation, do you ever feel you have to make compromises because of different affiliations you've had with sponsors?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I have to compromise all of the time. I'm more aware of my relationship with brands now than I've ever been before, and I'm more sensitive about it than I've ever been. </p>
        <p>I just did a shoot recently with a pretty big company, and they were asking me questions about my career. I felt I was censoring myself the whole way, because I didn't want to potentially insult any of the brands they had on board as sponsors. </p>
        <p>I think people have to be much more aware of their alignment with different brands than they've ever had to be before. Some people may not like that. There are people like <a target="_blank" href="https://twitter.com/Lefsetz">Bob Lefsetz</a> – I read <a target="_blank" href="http://lefsetz.com/">his letter</a> and love him, he's a great commentator on the music industry. He hates it when brands and artists get together and do anything. But I think it's just the world we live in, and quite frankly, I have to feed my kid.</p>
        <p>It’s more acceptable these days as long as you're transparent about it and don't try to do anything sneaky. I won't ever tweet about client work without putting "Client" in brackets beside the tweet, or making it otherwise very clear that I'm working with a certain company. </p>
      </dd>
    </dl>

    <dl class="border">
      <dt class="interview-q">When your son is old enough to engage in social media, what kind of attitude will you take toward his involvement?</dt>
      <dd class="interview-a">
        <p>It's funny, I don't actually post any pictures of Connor online. I don't really share online anything that we do in our personal lives, because I want him to have the opportunity to decide how he wants to live his life online. If he decides at 14 or 15 that he wants to have a blog, I'll be a big supporter of that. Until then, I don't want to post pictures of him in the bathtub when he's four just because it's cute, because maybe he’ll want to be Prime Minister! [Laughs] </p>
        <p>I think it's not my decision to make. It’s part of respecting him as a human being beyond being an extension of me. I'll be supportive of him wanting to do stuff online, I’ll just make sure that he maintains his privacy as much as possible. I think you can be online in a really active way and still have your privacy. You'll never see me tweet where I live, or images of Connor, or anything like that. You just have to be smart and draw certain lines in your life. </p>
        <p>I also don't get political online. I try not to offend anyone, which is unfortunate because I do have strong views, but on the other hand I feel like it could hurt my business, so I'm just a little quieter. </p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I try not to offend anyone, which is unfortunate because I do have strong views, but on the other hand I feel like it could hurt my business, so I'm just a little quieter.</p>
    </aside>

    <dl class="border">
      <dt class="interview-q">On a related note, your face was recently on bus shelters all over the city for the government's "<a  href="https://twitter.com/GetCyberSafe/">Get Cyber Safe</a>” campaign. What is your connection with that cause?</dt>
      <dd class="interview-a">
        <p>They approached me to be an advocate for safety online. Basically I appear on bus shelters and I do interviews on news and talk shows on different channels promoting how to be safe online, which means safety in social networking, being smart about online shopping, and not sharing too much financial information. It's an overall approach to make sure Canadians are being safe on the Web. </p>
        <p>It's been fun to be involved, although seeing my face on bus shelters has been a little strange.</p>
      </dd>
    </dl>


    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">You've had a flurry of devices you've tested and used throughout your career. What now-obsolete device are you most nostalgic for?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I think if I had to pick one device that I really missed, it would be the BlackBerry Pearl. It’s a much smaller smartphone they made a few years ago, and they may still make it. It was the first smartphone I ever used where I felt it was actually designed for a woman, even though it wasn't. You could put it in your pocket and not look absurd. Mostly I miss that it wasn't touch-screen but had the QWERTY keyboard, doubled up, so it was much smaller. I could literally type on the Pearl without ever looking at the keyboard. I'm a little nostalgic about that. </p>
        <p>But there are just too many devices in general, sometimes it's really hard to keep up!</p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I think if I had to pick one device that I really missed, it would be the BlackBerry Pearl. [...] It was the first smartphone I ever used where I felt it was actually designed for a woman.</p>
    </aside>

    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">When you started out in journalism you weren’t sure what your specialty would be. Have your ambitions changed over time? Do you still have the same career vision for yourself that you've always had?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>I don't think I've ever had a career vision! Maybe that’s a bit of an issue because some people like to have five-year plans or ten-year plans, but my ambition has always been to survive.</p>
      </dd>
    </dl>


    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-amber-mac-guy-kawasaki.jpg" alt="Amber MacArthur with Guy Kawasaki">
        <figcaption>
          Amber with former Apple chief evangelist Guy Kawasaki on the set of App Central.
        </figcaption>
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Answer -->
      <dd class="interview-a">
        <p>What that means is I've always thought I need to take on as many projects as possible and secure any type of business relationship for my future to make sure that I can continue to do what I want to do and have the freedom to run my own business. </p>
        <p>I don't know if my ambition has changed much. I'm pretty honest about the fact that I like making money and I love the freedom that gives me, and I like working for myself. I've always wanted to do those two things, and that's what I've been doing now for five years, more or less. That's really as ambitious as I get. </p>
        <p>I wanted to write a book a couple of years ago; I did that, and now I kind of never want to write a book again, so I'll just find new things I want to do.</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">In 2009 you hosted a show for the XBox Live platform called <a target="_blank" href="http://www.youtube.com/user/GirlsGoGeek">Girls Go Geek!</a> You've had a pretty long career already in the Web and technology. How have you seen the roles of women change in those industries? Have you ever experienced obstacles participating in that sphere?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>When I started at G4TechTV in 2005, just as a guest (before I started hosting with them), I really didn't know of any other women, at least in Canada, who were covering technology as a journalist or host. There were very few women. </p>
        <p>I definitely ran into a lot of obstacles. I always felt like I had to earn respect — it wasn't given to me right away. So I studied my technology notes harder than anyone I know. I would stay up all night before going on air to do national news segments, because I felt like, immediately people thought I wasn't credible because I was a woman covering tech. </p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I would stay up all night before going on air to do national news segments because I felt people thought I wasn't credible because I was a woman covering tech.</p>
    </aside>

    <dl class="border">
      <dd class="interview-a">
        <p>I think it's changed <em>so</em> much. It's so exciting now, some of the most amazing women I know are in some type of social media or tech, and that's just been fantastic. There are a lot more mentors for all of us than there have ever been before. I definitely think I've not 'paid my dues', but it was a bit of a struggle the first couple of years. Fortunately I focused more on studying and knowing my stuff above anything, and it's paid off. </p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">You mentioned that you started off with <a href="https://twitter.com/leolaporte">Leo Laporte</a>. Has he been a mentor figure for you?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Oh yeah. I started with Leo in 2005 when I was doing "Call for Help" with him on G4TechTV. He became a mentor for me right away, because he told me literally from <a href="https://www.youtube.com/watch?v=0b0L95r4L7E" target="_blank">the first moment I started working with him</a> that I just needed to know my stuff and I didn't need to worry about anything else. I didn't need to 'sex it up' when I was on TV. I should never appear ditzy. I should never play into that role. I should just really know what I was talking about, and people would respect me. </p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I didn't need to 'sex it up' when I was on TV. I should never appear ditzy. I should never play into that role. I should just really know what I was talking about, and people would respect me.</p>
    </aside>

    <dl class="border">
      <!-- // Answer -->
      <dd class="interview-a">
        <p>He's also been a big role model because, like me, he has straddled mainstream media and entrepreneurship. He's been hugely successful with <a target="_blank" href="http://twit.tv/">TWiT</a>.</p>
        <p>I’ve always looked up to him; he was a fantastic person to work with, especially from a broadcast perspective because he's very talented and was always his own person. I don't feel like he ever sold out, and he still hasn't. </p>
      </dd>
    </dl>


    <!-- // Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="<?php echo $path_img; ?>landscape-amber-mac-leo-laporte.jpg" alt="Amber Mac with Leo Laporte">
        <figcaption>
          All Photos credited to:
        <a href="http://www.flickr.com/photos/globalhermit/sets/">Sean Carruthers</a> (<a href="https://twitter.com/globalhermit">@globalhermit</a>)
        </figcaption>
      </figure>
    </div>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">Have you been a mentor to anyone?</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>What I've tried over the past couple years to do is to inspire other people to go out and do their own thing; I think there are quite a few people that I've met with and helped along the way. </p>
        <p>One person in particular — I hope he considers me somewhat of a mentor — is <a target="_blank" href="http://winstonsih.com">Winston Sih</a>. He now does stuff for CityTV. When he was 16 years old, he wrote me an email and basically said that he wanted to come on "WebNation", the show I was doing for CP24. Everyone was like, "You can't have a sixteen year-old on, that's ridiculous!" But I looked at his website, and he was doing more than anyone I'd ever seen in terms of creating his own personal brand. We had him on and now he is doing really well. He’s only a few years older.</p>
        <p>Also, <a target="_blank" href="http://nichm.com">Nicholas Montgomery</a>, who was Marilyn Denis's tech guy. I first met him and got him to come on air with me when he was twelve years old. We’ve kept in touch, and I still do stuff with him. I'm a big fan of supporting really young people. I think you can make a big impact in their lives just by being there and saying they can do it. It can change the way that they do things forever. </p>
      </dd>
    </dl>

    <!-- // Pull Quote -->
    <aside class="border pull-quote">
      <p>I think you can make a big impact in [young peoples’] lives just by being there and saying they can do it. It can change the way that they do things forever.</p>
    </aside>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">And their self-perception.</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>Definitely. Just to be able to give them the confidence that they need, and to keep them out of trouble. Put them to work when they're young! [Laughs]</p>
      </dd>
    </dl>

    <!-- // Q & A -->
    <dl class="border">
      <!-- // Question -->
      <dt class="interview-q">In our last interview <a href="http://womenandtech.com/interview/pearl-chen/">Pearl Chen</a> asked, “What’s one thing that has happened to you (either as a child or as an adult) that completely changed your life?”</dt>
      <!-- // Answer -->
      <dd class="interview-a">
        <p>When I was in kindergarten I came second in a colouring contest and had my picture taken for the local paper on Prince Edward Island. When I look back at that photo I definitely had a first place smile, which reminds me how thrilled I was just to be part of the competition. I've held this philosophy close to my heart through my working years, reminding myself that even if I don't come first at everything, showing up and giving it my all is reward enough. </p>
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
