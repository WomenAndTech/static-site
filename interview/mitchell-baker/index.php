<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-blue';
  $interviewee_name = 'Mitchell Baker'; // Page title & share links
  $interviewee_url = 'mitchell-baker'; // Share links URLs

  /*
    INTERVIEW CREDITS:
    If you need a second name, add a variable with a '2' the end. Example:
    $interviewer = "First Person";
    $interviewer_url = "http://twitter.com";
    $interviewer2 = "Second Person";
    $interviewer_url2 = "http://mywebsite.com";

    If you don't need a credit, delete the whole <li> in the HTML.
  */
  $interviewer = "Cassie McDaniel";
  $interviewer_url = "https://twitter.com/cassiemc";
  $photos = "Various";
  $photos_url = "";
  $editor = "Cassie McDaniel";
  $editor_url = "https://twitter.com/cassiemc";
  $editor2 = "Ivonne Karamoy";
  $editor_url2 = "https://twitter.com/ivonnekn";
  $ad = "Full Name";
  $ad_url = "";
  $design = "Cassie McDaniel";
  $design_url = "https://twitter.com/cassiemc";
  $dev = "Audrey Kuo";
  $dev_url = "https://twitter.com/MartianMoose";
  $dev2 = "Erin Ward";
  $dev_url2 = "https://twitter.com/warderin";
  $transcribe = "Cassie McDaniel";
  $transcribe_url = "https://twitter.com/cassiemc";


  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

<main role="main" class="interview">
  <!-- Featured Image -->
  <div class="border img-feature">
    <figure>
      <img src="<?php echo $path_img; ?>featured-mitchell-baker.jpg" alt="Mitchell Baker">
    </figure>
  </div>

  <!-- Interview Header -->
  <header class="border header-interview">
    <div class="wrapper-sm">
      <h2>Mitchell Baker</h2>
      <p class="intro">Mitchell Baker is the recipient of numerous awards and recognition, known for her intimidating pauses and sharp intellect. She is the face and founder of the non-profit tech company <a href="https://www.mozilla.org/en-US/?v=a">Mozilla</a>, creator of Firefox and champion of the open web.</p>

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
    <dt class="interview-q">I am curious to know how you got your name?</dt>
    <dd class="interview-a">
      <p>Let’s see. Oh God. My name. My father was raised by his stepfather, whose last name was Mitchell, from the time my dad was ten or so. My parents thought it would be a nice way to recognize him, so they would call me Mitchell Baker. Then my mom says at the last minute, “Oh, if it’s a girl, maybe she should have a feminine name.” So my first name, Winifred, is my grandmother’s name, whom I never met nor do I know anything about.</p>
      <p>My mom was eccentric. She was exceedingly eccentric. Sometimes you know in a way that was really endearing and charming and sometimes in a way I would look at her and think, “Wow, that’s really out there.”</p>
      <p>Somewhere along the line I was writing a résumé or something and my mother saw a draft of it and said, “I don’t like Winifred as your name and I hope you won’t use it. I’d like you to use the name I intended to give you which is W. Mitchell Baker.” She was pretty determined about it, and so I said okay. But it’s an awkward thing when you’re in college not to have a name or an identity that’s consistent.</p>
      <p>I find, having a name that’s unusual, that when I meet people if I’m not careful they don’t talk to me directly. English speakers in particular. Mitchell’s a man’s name, and there I am — they really don’t believe it or understand it, it doesn’t sound like Michelle — but because they don’t know my name, they’re uncomfortable talking to me. So I have a bunch of adjustments I’ve learned to do to help make people comfortable with my name.</p>
      <p>Funny thing — I have a Chinese name too and it is also unusual and requires explanation. It’s been sort of a constant throughout my life.</p>
    </dd>
  </dl>

  <!-- Q&A -->
  <dl class="border">
    <dt class="interview-q">How did you get your Chinese name?</dt>
    <dd class="interview-a">
      <p>From my first Chinese teacher at Berkeley. For my first name, she gave me a choice of a couple of characters. The meaning of one was I think, ‘sweet’, or ‘honey’, ‘very nice’, and another character that meant ‘agile’ or ‘clever’. And so I said, “Oh I want that one.” Am I very sweet and nice, or agile and clever? I’ll take the latter!</p>
    </dd>
  </dl>

  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-mitchell-baker.jpg" alt="Mitchell Baker">

      <figcaption>
        Photo credit: <a href="https://www.flickr.com/photos/39779362@N04/3660212407" target="_blank">Inc. Magazine</a>, <a href="https://www.flickr.com/photos/39779362@N04/3660211855/in/photostream/" target="_blank">Forbes Magazine </a>, <a href="https://www.flickr.com/photos/nitot/2266704443/in/photostream/" target="_blank">Tristan Nitot </a>, <a href="https://www.flickr.com/photos/jaypatel/3638868719" target="_blank">Jay Patel </a>, <a href="https://www.flickr.com/photos/gen/2591724407" target="_blank">Gen Kanai </a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">Asian Studies was an unusual area of study when you were in school. Is your life what you thought it would turn out to be?</dt>
    <dd class="interview-a">
      <p>Well that’s a funny thing where I think I really am different from a lot of people. I was never one to plan, I just don’t think that way. I don’t even think five years ahead. As far as I can tell I don’t actually have role models. I just don’t look at the world that way. Maybe I’d be better off if I did, but who could say.</p>
      <p>I don’t think I could have imagined my life. It’s been an odd path. I mentioned my mom was eccentric. My dad didn’t follow a model either. So I think I just look at the options in front of me and walk the most interesting path.</p>
    </dd>
  </dl>

  <aside class="border pull-quote">
    <p>I just look at the options in front of me and walk the most interesting path.</p>
  </aside>

  <dl class="border">
    <dt class="interview-q">Can you tell me about your parents and what they did? Why was your mom eccentric?</dt>
    <dd class="interview-a">
      <p>I don’t know why my mom was eccentric, there was really nothing in her background that would lead you to think she would be eccentric, except maybe that she was determined to work.</p>
      <p>Her world was really different. In her era if women did any educational thing after high school it was either secretarial school or what she chose instead; she was a graphic artist. There was a creative sense and hand-eye coordination, because before the computer you would physically put each image on the page and lay out every ad by hand.</p>
      <p>She had a lot of freedom and flexibility and she got married late in life. Married a man who had been married before, had lots of stuff that wasn’t really normal. And I think she liked a sense of adventure. But I have no idea where or why it came from, it was just her.</p>
    </dd>
  </dl>

  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-mitchell-baker-kitchen.jpg" alt="Mitchell Baker">

      <figcaption>
        Photo credit: <a href="https://www.flickr.com/photos/joi/2951322142" target="_blank">Joi Ito</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dd class="interview-a">
      <p>My dad was a classic old-style entrepreneur, where you scraped together enough money and hoped enough checks and cash came in each week to keep it open. It’s pretty interesting, the old entrepreneurial style of America before venture capital and before computers and technology.</p>
      <p>He really did not like working for other people. He was a workaholic — he worked all the time, but he needed to be setting his own direction, so he had a series of businesses throughout his life, a few of them that were really successful. Most of them related to metal. He had been trained as a jeweler long ago then got a degree in mechanical engineering, sort of an inventor for awhile.</p>
      <p>He was an iconoclast and he loved discussions that bordered on argument, loved nothing more than to get a table full of people and make some outrageous statement about politics or this or that and then see what happened. I grew up as an only child and he was aggressive in his verbal sparring. It wasn’t personal at all — I mean, my dad loved me like mad, so it wasn’t a question of worth or value, it was about intellectual exchange. And I think that was phenomenal training.</p>
    </dd>
  </dl>

  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-mitchell-baker-speaking.jpg" alt="Mitchell Baker">

      <figcaption>
        Photo credit: <a href="https://www.flickr.com/photos/hfiguiere/11370773124/" target="_blank">Hubert Figuière</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">Do you think your dad influenced your gravitation toward law?</dt>
    <dd class="interview-a">
      <p>I don’t know. The law piece was really different. When you get into business and professional settings where people are engaged or aggressive or loud or are really projecting themselves, experience in that setting is incredibly useful. Most of my career there was rarely another woman in the room. We’ve changed that on the Mozilla board now, but for most major decisions there was never another woman.</p>
      <p>Periodically some people I work with would ask me, “Are you okay?” I’d think, “I’m a partner at Mozilla and, yes I’m fine, that discussion did not bother me.” I can have a heated discussion on the elements and I can have people get frustrated with me and not feel crushed and not feel like it’s the end of the world. And still feel like maybe I overreacted some, but I still think my point of view is right and I’m not going to give it up.</p>
      <p>So that constant sparring, contradiction, and ‘let’s try to push your buttons so I can see what happens’ — in the setting of a man who I knew adored me – I think that was one of those intangible trainings you can’t put on a résumé but that has been critical to my success.</p>
    </dd>
  </dl>

  <aside class="border pull-quote">
    <p>I can have a heated discussion on the elements and I can have people get frustrated with me and not feel crushed and not feel like it’s the end of the world.</p>
  </aside>

  <dl class="border">
    <dt class="interview-q">Do you think your communication style might be typically considered male?</dt>
    <dd class="interview-a">
      <p>Well, first you’d have to ask others what their experience is. Probably a yes.</p>
      <p>I like to think I have a range of communication styles that I can adjust based on my understanding of how the person I’m talking to responds best. I do feel like I’m a mix between my parents.</p>
      <p>I don’t think it’s a flat out yes, but I am certainly comfortable in groups of men vigorously debating a topic.</p>
    </dd>
  </dl>

   <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-mitchell-baker-teaching.jpg" alt="Mitchell Baker">

      <figcaption>
      Photo credit: <a href="https://www.flickr.com/photos/flore_frmoz/4343876349" target="_blank">Flore Allemandou </a>
      </figcaption>
    </figure>
  </div>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">We talked a bit about how you grew up as an only child. And you have an only son. How do you find balancing being a mom with your insane work schedule?</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>It’s got a lot of pluses and some drawbacks. I think each kid and each family is different and so what works in one family may not work in another. I should also say my husband is beyond helpful and supportive, so I’m really fortunate. I think both my husband and my son appreciate what I’m doing. I think it’s good for my son to have me out in the world. And Mozilla is a special thing — at least to me. It is a valuable thing in its own right. So I think all of those things are good.</p>
      <p>But yeah, for sure, if I weren’t working or if I were working half-heartedly I would be more engaged on a daily basis in my son’s schooling and activities. On the other hand I don’t know if that’s good for an only child. Two parents intensely focused with all their energy on an only child and nothing else is not always great. Maybe with two kids it’s the same thing, I don’t know, that’s not my experience.</p>
      <p>I guess in an ideal world I’d probably have ten or fifteen percent more time to focus on my son but certainly not 100% of my time. If I took all my focus from Mozilla and turned it to my family we’d all go crazy!</p>
    </dd>
  </dl>

  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-mitchell-baker-photosmile.jpg" alt="Mitchell Baker">

      <figcaption>
      Photo credit: <a href="https://www.flickr.com/photos/joi/4116202217" target="_blank">Joi Ito </a>
      </figcaption>
    </figure>
  </div>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">I think a lot of women feel an external pressure to be a certain way not just in the workplace but inside their own families. I wonder if you’ve ever felt that?</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>First of all, I don’t care that much. For someone on the outside to look in and tell me what my family needs — I really… I will say I did come from two odd people who made their own way, so I grew up in that setting and I have that in myself. Aspects of that are not good, I’m not saying it’s a perfect trade, but in general it makes it easier for me.</p>
      <p>I do feel pressure, not just from my family but from me as well, to be home more than I would be if I just scheduled trips without thinking about it. I travel a lot and my trips are always as compressed as I can make them. I’ll go off (like many business people do) and I’lI arrive in Europe at 10am, and my meetings start at 11:30 because I don’t want to take a day to rest. I want to get home as soon as I can. So that is where I do feel a bunch of pressure.</p>
      <p>There was a period in the early days of Mozilla where I was a volunteer when my son was young, after I was laid off or fired from AOL. It was probably a stroke of good luck that that lined up when he was four or five, that I was still working on Mozilla but not as frantically and with much more control over my time.</p>
    </dd>
  </dl>

  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-mitchell-baker-teaching2.jpg" alt="Mitchell Baker">

      <figcaption>
      Photo credit: <a href="https://www.flickr.com/photos/oninnovation/4334743935" target="_blank">OnInnovation </a>
      </figcaption>
    </figure>
  </div>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">Can you clarify that – were you laid off, or were you fired?</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>Let’s see. <a href="https://www.mozilla.org/en-US/?v=a">Mozilla</a> started inside Netscape in 1998 and at the end of that year, early ‘99, AOL bought Netscape. It turns out (especially in those days) that you can use a browser to generate a fair amount of money, but some of the things that generate money people don’t like. And the browser becomes more and more about making money out of people. Like, every button or every menu item is sold to some company, and then the user experience deteriorates.</p>
      <p>We had a lot of pressures when we were inside AOL, in 1999, 2000, 2001, the handful of us who were leading the Mozilla project. I had a charter to build an open-source project, a true, distributed, meritocratic, open source project. And my boss and the rest of the AOL employees of course had the charter to build the business of AOL. And those two things can be side-by-side for some period of time, but they are not the same.</p>
      <p>Eventually the tensions became overwhelming. There were outright fights going on where some of the employees at AOL — chartered with AOL’s business — would say “Mitchell, Mozilla must do the following things in the browser,” and I would say, “Mozilla is not going to do those things.” Head-to-head conflict like that, and that went on for awhile.</p>
      <p>At that time there was this giant layoff planned, and it appeared like a good time to lay me off, which is a gracious way of getting rid of someone. And so I was laid off. Technically. Nevertheless it was a fight for the control of Mozilla. Was it run as an open source project, or was it run as an AOL project that had a lot of volunteers in it?</p>
      <p>The rest of the story was relayed to me because I had been laid off so I wasn’t in the building or involved. There were six or seven people chartered to work on Mozilla, and then there were oh I don’t know, 75, 100, 125 people employed by AOL to build the browser and to contribute their work into the open source code base. And that set of employees made it clear that they just weren’t going to follow direction or organization of that product unless Mozilla and I were at the center of it.</p>
    </dd>
  </dl>

  <aside class="border pull-quote">
    <p>We got to keep the project, that was what really happened! We were able to keep Mozilla — the open-source project — alive and real.</p>
  </aside>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">That must have felt pretty good in a way.</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>Good and bad. It was pretty traumatic for the people who were left who felt this person who was leading the aspect of their jobs that they cared about most (the open source aspect) was gone — it’s very traumatic. But it was also rewarding to learn how many people viewed what I and my colleagues were doing. And we got to keep the project, that was what really happened! We were able to keep Mozilla — the open-source project — alive and real.</p>
    </dd>
  </dl>

  <!-- Q&A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">What is it about Mozilla’s mission that matters to you personally? I mean, why essentially devote your life to the Internet? Why do you care?</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>There are two interlocking reasons. The first one is that the power of a network has always fascinated me. It is one of those places where one plus one can equal three. You have a set of capabilities, I have a set of capabilities, and the next person has a set of capabilities — one plus one plus one can equal five, right? When we are connected in a networked way, where you can reach each other across many vectors the power goes way up.</p>
    </dd>
  </dl>


  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-mitchell-baker-present.jpg" alt="Mitchell Baker">

      <figcaption>
         Photo credit: <a href="https://www.flickr.com/photos/dougbelshaw/10136265006/in/photostream/" target="_blank">Doug Belshaw</a>
      </figcaption>
    </figure>
  </div>


  <dl class="border">
    <!-- // Answer -->
    <dd class="interview-a">
      <p>The Internet is particularly like that because it wasn’t built to be centralized, so it’s not one node at the center and everything falls down from it. It’s a much more horizontal layer. I can reach somebody without needing to go through some big centralized governing authority. I don’t need to connect to some machine above us and then connect back down to you. We can connect however we want. That piece was irresistible when it came.</p>
      <p>The network piece sounds a little abstract. It happens to appeal to me. I like putting things together; I like that puzzle piece of how technology and interactions fit together. The related piece is that on a human scale, the possibilities are huge.</p>
    </dd>
  </dl>

  <aside class="border pull-quote">
    <p>You get a technology where each one of us at the edges can try things out. That’s really rare. If we lose that with the Web and the Internet, it will be a long long time before we see it again.</p>
  </aside>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Answer -->
    <dd class="interview-a">
      <p>The Internet was of course a technology change, a paradigm shift, but more than that it was a decentralized paradigm shift. And those are really rare. The normal tendency is that as things get big, they get centralized with management chains and permission layers everywhere. Here, you actually get a technology that isn’t that, where each one of us at the edges can try things out. That’s really rare. If we lose that with the Web and the Internet, it will be a long long time before we see it again.</p>
      <p>Eventually we’ll have some disruptive change and I don’t know what it will be, but because the network that we’re using now is so increasingly fundamental to all of life, I think for a good while new technology changes will be integrated with the existing system. And so keeping it actually open and understandable is important.</p>
      <p>And you know, one thing I really like about open source and about Mozilla and our volunteer communities around the world is that it’s fun and it’s gratifying, and you can see that Mozilla tends to attract people who care about our mission.</p>
      <p>So you add those things together and it’s pretty alluring.</p>
    </dd>
  </dl>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">This reminds me of something that you wrote on your blog about trapeze: “It’s not just adrenaline, or overcoming fear, of accomplishing something that makes flying great. It’s all of that. But it’s also just fun.” Do you think doing trapeze was a byproduct of the way you like to work, or has it influenced your career?</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>Oh that’s interesting. I would say that trapeze taught me a bunch of things about fear. It’s a very controlled environment. It’s not like a war zone, it’s not like walking home at night knowing you’re in an unsafe setting. It’s a very controlled environment. But at the same time there are some physiological reactions that are the same, regardless of why you are afraid. It was very useful to me to explore fear in such a controlled and ultimately safe setting.</p>
    </dd>
  </dl>

  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-mitchell-baker-trapeeze.jpg" alt="Mitchell Baker Trapeeze">

      <figcaption>
        Photo credit: <a href="https://www.flickr.com/photos/badubadu/" target="_blank">badubadu</a>
     </figcaption>

   </figure>
  </div>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Answer -->
    <dd class="interview-a">
      <p>In trapeze, you can hurt yourself that’s for sure, but no one is trying to hurt you. Everybody is trying to make it safe and fun. A ton of the world’s population does not experience that, so it’s a pretty privileged position and I’m careful not to think that it’s a fear like a ton of people, a ton of women, live in all the time.</p>
      <p>One thing I learned is how fear turns the brain off, and how so often when fear takes over, one does the wrong thing. The flying is scary. When you take the safety lines off it’s also scary. You are on your own until you are in a spot where the catcher can catch you, if he can. And the net — it’s not like a floor, it’s a net – but it’s easy to break bones. So what I really found interesting is that there is a period of time where there is plenty of fear but it’s under control and you’re committed and going for it, and then there’s a moment where the fear takes over and you’re afraid. You’re going through the motions but the fear is what’s driving things. Those are utterly different moments.</p>
      <p>I was able to feel that shift any number of times in the other places in life where I had been afraid. When something shifts, everything goes wrong. Typically when you’re flying, you plunge into the net.</p>
      <p>I think I got a lot better at being able to sense out in other people, ‘Ah, this is fear response.’ This person or this company or this organization or group has a pretty deep fear that either they haven’t targeted themselves yet or they know very well and don’t want to expose.</p>
    </dd>
  </dl>

  <aside class="border pull-quote">
    <p>One thing I learned is how fear turns the brain off, and how so often when fear takes over, one does the wrong thing.</p>
  </aside>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">Do you consider yourself a risk taker?</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>Oh I don’t know. A part of me says, look, I live in the United States. In a technology industry if you’re good at what you do and if you have a good reputation your chance of finding another job is pretty high. When I went to Netscape (it was called Mosaic at the time), that was clearly a risk. But it’s kind of trivial, meaning I knew I could go back to the company that I worked at before. It’s the Valley, so I probably had two or three job offers from the company I worked at on my way out the door. How big a risk is that?</p>
    </dd>
  </dl>

  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-mitchell-baker-office.jpg" alt="Mitchell Baker Office">

      <figcaption>
        Photo credit: <a href="https://www.flickr.com/photos/oninnovation/4335476132" target="_blank">OnInnovation</a>
      </figcaption>
    </figure>
  </div>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Answer -->
    <dd class="interview-a">
      <p>In the setting I grew up in, if you take all of that aside and just say, ‘Will I take jobs that don’t seem to have a future because I’m interested in them? Will I suddenly do something that I always thought I would never do because now seems like the right time? Will I change my mind fundamentally? Will I do something that seems crazy — like Mozilla — because most people don’t believe in it?’</p>
      <p>The answer to those things is clearly yes.</p>
      <p>The man who used to run Netscape, Jim Barksdale, liked to say, “People love progress. It’s change they can’t stand.” I think about that a lot because most people are uncomfortable or disoriented by change, destabilized by change. You see that in managing or reading people. I am much less so, and my dad was much less so. I like change. Maybe that’s because I’ve been lucky in life, maybe it’s genetic, but on the spectrum of how people respond to change I’m pretty positive. Some things that feel like giant risks to people, well, it’s change – sounds like fun!</p>
      <p>Now you can have a lot of experiences where every change is bad and then it’s totally rational to not like it. It’s not an emotional thing, it’s not a personality thing, it’s just a rational thing.</p>
    </dd>
  </dl>

  <!-- // Q & A -->
  <dl class="border">
    <!-- // Question -->
    <dt class="interview-q">I’d like to end with a question from our previous interviewee, <a href="http://womenandtech.com/interview/sandi-lin/" target="_blank">Sandi Lin</a>. She asks, "Women face many challenges in the technology industry but we also bring many strengths. What do you think is the best part of being a woman in tech?"</dt>
    <!-- // Answer -->
    <dd class="interview-a">
      <p>For me, I am me in tech, so what is the part of it that’s good because I am a woman? I don’t know how to answer that.</p>
      <p>The part that’s good is that there are so many possibilities, and right now Mozilla and I are in a place to try and build the parts of the world that we want. That’s the best part about being in technology – that we’re early in what the network and online life and all these things mean, and we get to build it. That’s the good part for me.</p>
      <p>But which of that is because I am a woman? I don’t know how to answer that part.</p>
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
        Photography by <?php echo $photos; ?>
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
