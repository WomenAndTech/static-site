<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-coral';
  $interviewee_name = 'Mina Markham'; // Use for page title & share links
  $interviewee_url = 'mina-markham'; // Used for share links URLs, use the same name as the interviewee's folder name

  // Twitter & Facebook sharing info
  //-----------------------------------------------------------------------------
  // Social media images are added in the metatags in includes/header.php to always pull in the feature image from this interview. Make sure the featured image always follows this format: featured-firstname-lastname.jpg
  $social_title = 'Interview with Mina Markham by Christina Truong';
  $social_desc = 'Use the description from the archive page.';

  // INTERVIEW CREDITS
  //-----------------------------------------------------------------------------
  /* If you need a second name, add a variable with a '2' the end. Example:
    $interviewer = "First Person";
    $interviewer_url = "http://twitter.com";
    $interviewer2 = "Second Person";
    $interviewer_url2 = "http://mywebsite.com";
    If you don't need a credit, delete the whole <li> in the HTML.
  */

  $interviewer = "Christina Truong";
  $interviewer_url = "http://christinatruong.com";
  $photos = "";
  $photos_url = "";
  $editor = "Christina Truong";
  $editor_url = "http://christinatruong.com";
  $editor2 = "Joni Di Placido";
  $editor_url2 = "";
  $ad = "";
  $ad_url = "";
  $design = "";
  $design_url = "";
  $dev = "Christina Truong";
  $dev_url = "http://christinatruong.com";
  $transcribe = "Christina Truong";
  $transcribe_url = "http://christinatruong.com";
  $transcribe2 = "Ivonne Karamoy";
  $transcribe_url2 = "http://ivonnekaramoy.com";


  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

<main role="main" data-interview>

  <!-- // Featured Image -->
  <div class="border img-feature">
    <figure>
      <img src="<?php echo $path_img; ?>featured-mina-markham.jpg" alt="Mina Markham">
      <figcaption>
        Photo credit:
        <a href="https://twitter.com/sarakerens" title="Sara Kerens Twitter">Sara Kerens</a>
      </figcaption>
    </figure>
  </div>

  <!-- // Interview Header -->
  <header class="border header-interview">
    <div class="wrapper-sm">
      <h2>Mina Markham</h2>
      <p class="intro">Mina is a front-end architect, speaker, formerly the Senior Software Engineer, a.k.a. Pantsuit Seamstress, for Hillary for America and currently a Senior Engineer at <a href="https://slack.com">Slack</a>. I caught up with Mina after her <a href="http://fitc.ca/presentation/styling-hillary/">Styling Hilary</a> talk at FITC Toronto and we sat down to chat about working on the campaign's website, moving from design to programming, conference speaking and more.</p>

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
    <dt class="interview-q">You have a degree in Graphic Arts and Women's Studies. How did your interest in these areas come to be and what were you hoping to become?</dt>
    <dd class="interview-a">
      <p>Once upon a time, I thought that I would be a magazine editor, for something like Essence. And so I started out at Syracuse University with the intention of becoming a journalist. I realized while I was there that I liked designing the layout for my stories more than I like writing the stories. So I switched to graphic design. </p>
      <p>My interest in women studies evolved from taking Women's Studies 101. I loved the class and kept going from there.</p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">When did you start to move more into the programming and engineering side of things? </dt>
    <dd class="interview-a">
      <p>It was pretty organic. I started my career designing things for print. During my last year of college I took one class in web design, it was in Flash. I didn't really learn how to code, I just learned how to move things around in Flash.  I kept going from there, trying to build my own portfolio site. </p>
      <p>That's actually how a lot of my interest in development happens. I was trying to create a site to showcase my design work and I was digging more into how to implement the vision I had. I just went down a rabbit hole and got deeper and deeper into figuring out how to do certain things in code. Eventually I realized I really liked this so I shifted my focus to learning as much as I could about getting into front-end. Eventually I was able to shift entirely to doing that full-time.</p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>You can totally make a career out of being a self-taught developer. I'm living proof of that.</p>
  </aside>

  <dl class="border">
    <dt class="interview-q">A lot of people getting into code are not quite sure how to do it or whether they even need to go to school since so many developers are self-taught. Do you have any advice for people?</dt>
    <dd class="interview-a">
      <p>I learned everything the hard way. It was a little harder and a little rougher than I would have liked, but you can totally make a career out of being a self-taught developer. I'm living proof of that. As far as I'm concerned, not having a CS degree has not held me back. Some of the bigger organizations might look for a more traditional computer science education. But I don't know anyone that does not have the degree, that wants to be working in tech, that isn't.</p>
      <p>I learned by viewing the source code and by trying to mimic things I saw online. Now there's lots of different online learning resources like <a href="https://www.codeschool.com">Code School</a> and <a href="https://teamtreehouse.com/">Treehouse</a>. That's how I learned Sass. There's also <a href="https://www.girldevelopit.com/">Girl Develop It</a> and <a href="https://www.womenwhocode.com/">Women Who Code</a> and those kinds of community environments and organizations. I feel like there are lots more avenues available now that weren't available when I was trying to figure this whole thing out.</p>
      <p>So it works if that's the way you learn. But I lacked a mentor. I didn't have people to talk to, so that was the hardest part of it. I had to just trust what I was seeing without being able to talk through any of the things that were confusing me. I had to hope that someone asked the same question on <a href="https://stackoverflow.com/">Stack Overflow</a>.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">I hate it when I find my question on Stack Overflow but there's no answer! </dt>
    <dd class="interview-a">
      <p>That's the worst feeling! There's been so many times where I see a question from two years ago. But where's the answer? What's the answer?</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">So I guess you have to learn how to deal with some level of frustration if you want to get into programming.</dt>
    <dd class="interview-a">
      <p>Yeah, you deal with some level of frustration. You also have to deal with the fact that things move so fast. The thing you're learning right now may not be the thing you need to know in a couple years. Even if you had a computer science background, it doesn't mean you stop learning. You have to constantly learn in this industry.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">What made you decide to get into conference speaking and organizing?</dt>
    <dd class="interview-a">
      <p>I went to my first conference on a whim. Someone I really liked was speaking at the <a href="http://frontenddesignconference.com/">Front-end Design Conference</a> in St. Petersburg's. The people were great and I had so much fun there.</p>
      <p>They had one day set aside for attendee presentations. Anyone could sign up to do a 20-minute presentation on whatever they wanted. I thought that was a friendly, not-so-intimidating way to get into it. So the next time I went to that conference (the following year) I thought, I'll talk about this thing I've been doing. I did the talk and I got great feedback. I didn't realize it at the time but people I had been learning from for years were in that room. Like freaking <a href="https://chriscoyier.net/">Chris Coyier</a> and <a href="http://daverupert.com/">Dave Rupert</a> are staring at me the entire time.</p>
      <p>Anyway, that first talk is what started my journey to working for Hillary Clinton. I didn't know it at the time but Dan Ryan, who was the Director of Front-end for Obama in 2012, was also in the room. He saw me speak, remembered me, and recommended me.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">That's amazing!</dt>
    <dd class="interview-a">
      <p>I got into speaking just because I wanted to see what it was like and I like sharing what I learn. Also, there was, and in some cases still is, a distinct lack of diversity and people who look like me doing these kind of things. I remember reading an article that said one way to mitigate the lack of female speakers is to become one. So I tried it out and luckily it worked out and went well.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">You did your first talk, just to try it out. Then down the path, you ended up working on Hillary.com because of someone you met there. So the moral of the story is "just try it"?</dt>
    <dd class="interview-a">
      <p>That's the moral of my life. Just try. Just try and see what happens. I've been very lucky that I tend to be successful at things I try. I mean, I do fail a lot. I got rejected a lot when I was submitting for talks.</p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">I look at you and see you doing all these conferences and assume you never get rejected.</dt>
    <dd class="interview-a">
      <p>In this particular moment in my life, people have been coming to me and it's because I worked on a very visible project. But before, I would submit open CFPs (calls for proposals). I just kinda sent it out there and sometimes it came back with a yes and sometimes a no. I never really knew why I would get a no but I just moved on to the next thing. When I did give talks, not all the feedback I got was great. Some people said they didn't like the tone of my voice or I spoke too fast or it wasn't interesting. I didn't always get positive feedback.</p>
    </dd>
  </dl>

  <!-- // Image - Left & Right -->
  <div class="border img-side-by-side">
    <figure>
      <img src="<?php echo $path_img; ?>left-mina-markham-badge.jpg" alt="Biying Miao">
      <figcaption>
        Image source: <a href="https://twitter.com/MinaMarkham/status/918541950776639490">Mina Markham</a>, <a href="https://www.flickr.com/photos/oreillyconf/17041023430/in/album-72157652070881532/">Fluent Conf</a>
      </figcaption>
    </figure>
    <figure>
      <img src="<?php echo $path_img; ?>right-mina-markham-fluent.jpg" alt="Biying Miao">
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">You touched on the lack of diversity in conference speaking. Perhaps because there's a level of privilege required to be able to do stuff for free. Author and speaker, <a href="http://luvvie.org">Luvvie Ajayi</a> recently took to <a href="http://twitter.com/Luvvie/status/841714404731322370">Twitter</a> to voice an experience where she was told there was <a href="https://mic.com/articles/171287/the-next-web-tech-conference-is-under-fire-for-stiffing-professional-speakers#.gC1OmGzpw">no budget</a> for travel or compensation, which ended up being not completely true. What are your thoughts around compensating speakers or how to handle doing stuff for free?</dt>
    <dd class="interview-a">
      <p>I have a rule: I don't go to conferences that don't pay for travel and accommodation. I think conferences that don't pay for the speaker's travel expenses assume the speaker’s employer might take care of it. The company I worked for when I first started speaking wasn't supportive. They didn't see what they got out of it so I had to take vacation time to go to these conferences and was losing money because of that. I did it a couple of times and it's such a burden.</p>
      <p>Now, when I get invited, I just ask people up front. I'll say, "here's my speaker's fee plus travel and accommodation." If they come back with "we can't do that" then I'll say, "I can't talk at your event." It does take a certain amount of confidence so, if you're a new speaker and you don't feel like you earned the right to say that or you don't feel comfortable asking for a fee, I would say at least do not go out of pocket. You're providing a service and content. Their event depends largely on you doing this so, at the very least, they should take care of getting you there.</p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>I have a rule: I don't go to conferences that don't pay for travel and accommodation. I won't do it anymore.</p>
  </aside>

  <dl class="border">
    <dd class="interview-a">
      <p>Asking for compensation doesn't necessarily mean you have to ask for money. Ask them for something else that might be of value to you like a free membership from a sponsor or a couple extra days in the city. There's a couple of conferences I'm doing this year where I'm not getting paid money but I'm getting to travel the world.</p>
      <p>Everybody should be compensated in some way. It's one thing to get you there but there's a lot of work that goes into it before you get there. I've spent hours planning, researching, writing notes, rehearsing and building slides.  And yes, you get a platform and that's a great thing. My career is what it is because of doing these things. But I have come to realize that for conferences, having a problem with compensation shows a lack of respect for the people that they depend on.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">I love your slides. Do you have any tips for making sure your visuals are engaging?</dt>
    <dd class="interview-a">
      <p>One of the resources I use is speaking.io by Zach Holman. He has a whole site dedicated to tips for public speaking and it's really great advice.</p>
      <p>As far as slide design goes, the bigger the better. At the beginning, I always made my type too small, nobody could read it. Also, the fewer words on the slides the better. People tend to think they need to put as much information as possible on the slide and write out all their thoughts. If you do that, people will read the slide instead of listening to you. It’s also tempting to read the slide and I hate when people do that. Keep the information on the slide high level and brief to illustrate the point. Then you can talk and elaborate on that.</p>
      <p>I also troll Speaker Deck and see which presentations catch my eye, which ones are most engaging and try to find inspiration there.</p>
      <p>I also have a very large gif repository.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">I know, I've seen it!</dt>
    <dd class="interview-a">
      <p>A lot of time and energy goes into selecting these gifs so I'm really happy that people like them. I find they're a nice way to break up information and illustrate a feeling I had at a particular moment. It's also a really good way to sneak in a pause.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">You just did a talk, <a href="http://fitc.ca/presentation/styling-hillary/">Styling Hillary</a>, about working on Hillary Clinton's campaign website. Is there one thing about working on this campaign that you <em>haven't</em> been asked that you’d like to mention?</dt>
    <dd class="interview-a">
      <p>People tend to ask "what was it like?" in a very general, roundabout way. But people don't really ask me what it felt like, what it feels like. Sometimes they do, but in a voyeuristic, tragedy porn, kind of way. </p>
      <p>On election night I almost hurt a reporter. I don't like talking about election night but it was a devastating night in so many ways. I was in the building where she [Hillary Clinton] was going to speak and it was at a point of the night when it was clear that it wasn't going to go her way. All of a sudden this reporter comes out of nowhere and she just shoves the mic in my face. There's lights, there's a video camera. She basically wanted to get a "how are you feeling right now" answer and I was like "are you fucking joking?" I think I actually said those words out loud. I couldn't even comprehend the nerve it took to do that.</p>
      <p>People tend to ask me "what was it like" in general, but not what it felt like to be part of this huge thing.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Because it was more than just building a website?</dt>
    <dd class="interview-a">
      <p>Yeah. A lot of the day-to-day work was what you would think it is. We were building a website. But the pace was insane and things will happen like President Clinton will come to the office.</p>
    </dd>
  </dl>

  <!-- // Image - Left & Right -->
  <div class="border img-side-by-side">
    <figure>
      <img src="<?php echo $path_img; ?>left-mina-markham-bill-clinton.jpg" alt="Biying Miao">
      <figcaption>
        Image source: Mina Markham <a href="https://twitter.com/MinaMarkham/status/642400690451705861">left</a>, <a href="https://twitter.com/MinaMarkham/status/814518976051113984">right</a>
      </figcaption>
    </figure>
    <figure>
      <img src="<?php echo $path_img; ?>right-mina-markham-hillary-clinton.jpg" alt="Biying Miao">
    </figure>
  </div>

  <dl class="border">
    <dd class="interview-a">
      <p>A lot of people also think &emdash; and it just might be partially my fault because of the pictures that I have &emdash; that one, I am closer to Hillary Clinton than I am. I'm not. And two, that she was in the office a lot. I met her twice and she was in the office probably three times.</p>
      <p>Working on the tech team was probably one of the best experiences I've had. It was a lot of fun. I've never felt more respected and trusted as a person but also as a developer. For the director of front-end to tell me we need a design system and literally just leave me to my own devices and let me do it, that's unheard of.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">There was a lot of trust.</dt>
    <dd class="interview-a">
      <p>He [the director] put a lot of trust in me and he barely knew me. I have never experienced anything quite like it. Normally, you have to get a lot of approvals. And it was like, you said you can do this thing, go do it. I felt like I grew more as a developer, as a person, as . . . everything working there. </p>
      <p>Someone asked me "Hillary comes across as calculated or something. What is she really like?" People tend to have this idea of what it was like on the campaign just from things they've read or the perception of who Hillary is. </p>
      <p>Both the tech team and the campaign as a whole built this incredible culture of inclusivity and empathy that came directly from the top. Everything I heard, it came from Hillary herself. She wanted to make sure that her staff looked like and felt like America did.</p>
      <p>I've never been around as many black women in one place than I have working on that campaign and it wasn't lip service. We had seats at the table. We were given responsibilities, we were trusted and people listened to us and that is sadly unheard of before now. It's amazing that I find that so shocking.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-mina-markham-sayhername.jpg" alt="Mina Markham and others remember Sandra Bland, #sayhername">
      <figcaption>
        Photo credit:
        <a href="https://twitter.com/MinaMarkham/status/753219815695843328">Mina Markham</a>
      </figcaption>
    </figure>
  </div>
  
  <dl class="border">
    <dt class="interview-q">It shouldn't be shocking.</dt>
    <dd class="interview-a">
      <p>That shouldn't shock me! That should just be expected. I should be able to go to a company and they should trust me to do my job. I was given this responsibility and trusted to do it and given the space to do it. It was amazing.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">As you know, this interview series focuses specifically on women in tech because highlighting the experiences of being a woman helps to raise awareness. But sometimes, it feels like if we talk too much about it, it may overshadow the actual work. You're more than just a woman. You are an engineer who happens to be a woman. And so, I noticed that your talks have been non diversity-related. Was that intentional?</dt>
    <dd class="interview-a">
      <p>Yes. I made a point to not draw direct attention to being a person of color, being a black woman, being a woman. I mean it's there, you can't miss it! People can see me. But I don't feel the need to talk about that particular aspect right now for several reasons. One, I'm not a diversity and inclusion expert. I only know what I've experienced in the industry and my experiences are probably different than a lot of people's experiences. I don't want to focus on that. There are other voices who are doing it better.</p>
      <p>Also, I want people to see me as as a technical person. I had a hard enough time coming from a non-technical background. I was completely self-taught, I was a print designer. I was already having imposter syndrome just existing in tech. So I focus on what I am learning, what I am doing so people will see me as a technical person. And then, if you haven’t noticed, I’m also a black woman and a black person.</p>
      <p>I feel more comfortable talking about my experiences now because people have acknowledged and accepted that I know what I’m doing. So when I tell you about my experience from the perspective of a black woman or a woman in general you’re more likely to take me more seriously because you know I’m not pulling the race card or the gender card or complaining. It’s a real thing and these things happen to me and just because people don’t say it, doesn’t mean it doesn’t happen to them. </p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">On the podcast, <a href="https://soundcloud.com/colourcodepodcast/episode-six-2legit#t=25:03">Colour Code</a>, the host, Hannah Sung, asked one of her guests, University of Waterloo professor Naila Keleta-Mae, if she had a personal example of a microaggression. Naila said that being asked that question was a microaggression to her, because white men/people aren’t usually asked about what it feels like to be privileged.</dt>
    <dd class="interview-a">
      <p>Oh yeah and if they are asked they throw the biggest fit. You bring up male privilege or white privilege and it’s like you’ve performed an exorcism or something.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Naila brought up another interesting point. When you’re an underrepresented minority, not only are you often expected to share your story but that the <a href="https://soundcloud.com/colourcodepodcast/episode-six-2legit#t=26:30">re-telling of these experiences</a> can be a bit of a re-traumatization.  Do you ever feel resentful for being asked or just don’t want to share?</dt>
    <dd class="interview-a">
      <p>Strangely enough, microaggressions I’ve experienced by virtue of being a black woman, re-telling those experiences, doesn’t bother me as much. I’ve been fortunate enough that they’ve not been as outrageous as some other people’s experiences. They weren’t very traumatic for me, they were annoying, they were upsetting, they were eye-opening. So I can re-tell those stories without feeling particularly angry or vulnerable.</p>
      <p>However, re-telling the story of election night feels very exploitative to me and very traumatizing because that was a very emotional and scarring experience. So when people ask me that question I don’t appreciate it. I understand the desire to want to know what it was like on the inside but again, it’s a tragedy porn thing. Like, I don’t know what you hope to get out of me telling this story. You can probably imagine how I felt that day. Just don’t ask me that. </p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">I guess it depends on what you feel the intention of the question is?</dt>
    <dd class="interview-a">
      <p>Yeah, normally when people ask me that, it’s because they’re just curious. But every once in awhile I can just see they’re just rapt, they just want to hear how bad it was.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">They just want to watch the trainwreck.</dt>
    <dd class="interview-a">
      <p>They want to experience my trainwreck second hand. And I’m not gonna share it. It was really very painful. But my experiences with the tech industry and the microaggressions I’ve experienced weren’t traumatic enough for me to be upset by re-telling them. If people hear about it from enough different sources, hopefully they will understand that it’s not an isolated incident.</p>
      <p>It’s not the overt things people tend to think about. It can be something very subtle. A story I like to tell is about a presentation I gave to a room full of executives. All white guys and just me. At the end of the presentation, the VP shook the hand of the white man who sat next to me and didn’t do a damn thing. He literally said not a word in this meeting. Why would you not shake the hand of the person who’s been talking at you for 45 minutes? </p>
      <p>That story wasn’t traumatizing. It was just one more thing I can point to as "this is some bullshit." Something that small would have gone unnoticed and did go unnoticed by everybody else but me. So I feel it’s important to tell those kind of stories so people can see and start to better comprehend what these experiences are like.</p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>Intersectionality is a thing and it’s real, if you occupy more than one underrepresented or more than one marginalized space, simultaneous things act against you.</p>
  </aside>

  <dl class="border">
    <dt class="interview-q">When you spoke at the <a href="http://iwd.devto.ca/">DevTO International Women’s Day</a> event, you shared some similar stories. I thought it was important that you made the distinction of being a black woman because a lot of times the “woman in tech” conversation leaves out other ways our experiences intersect with our other identities. Do you think it’s important to make that distinction? </dt>
    <dd class="interview-a">
      <p>Yes. I’ve said something similar in my talk but there’s misogyny and sexism that’s geared towards all women and there’s also a specific kind of misogyny that happens to black women that’s very much based on race. I occupy these two spaces at the same time and they both inform everything I do and how people see me, so I don’t and can’t separate them. </p>
      <p>The kind of sexism, the kind of misogyny that I get would be different than the kind a white woman would get or an Asian woman would get or a Muslim woman would get. Because intersectionality is a thing and it’s real, if you occupy more than one underrepresented or more than one marginalized space, simultaneous things act against you. So your experience is based on all those things combined, not in isolation.  It also works the other way. There are certain privileges that I get because I’m an American woman or I’m a heterosexual woman. There’s certain things that I don’t understand because I don’t occupy that other oppressed space. </p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Right. But it’s good to name your intersectional experience.</dt>
    <dd class="interview-a">
      <p>It’s good to name them so that it’s not a blanket experience. Maybe a white woman in the position of giving that presentation to a VP might not have experienced that meeting in the exact same way I did. I have no way of knowing because that’s not what happened. In the type of harassment I get online, some of it is racial because they don’t like the fact that I’m black. But again, I don’t necessarily know what that would be like if I was just a white woman as opposed to being a black woman as well.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-mina-markham-tweets.jpg" alt="Mina Markham and others remember Sandra Bland, #sayhername">
      <figcaption>
        FITC: Styling Hilary, Photo credit: <a href="http://bymiguelweston.com">Miguel Weston</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">Right, if you want to support women in tech you have to understand that it means <em>all</em> women.</dt>
    <dd class="interview-a">
      <p><em>All</em> women in tech. We talk about diversity in conferences and to some extent, there’s this idea that diversity means white women. Oh, the gender diversity, the ratio is good, so we’re good right? We’re diverse. No. That’s not it. </p>
      <p>I’ve seen  conferences where they  have a good gender balance but you won’t see a woman of color or a person of color. You’re still not quite there yet, because it’s not just about gender. </p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Yeah, it kinda feels a little bit like taking the easy route. Like, we can support diversity but not shake the boat too much.</dt>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-mina-markham-slack.jpg" alt="Slack's welcome box">
      <figcaption>
        Photo credit:
        <a href="https://twitter.com/MinaMarkham/status/836278596805222400">Mina Markham</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">I saw <a href="https://twitter.com/MinaMarkham/status/844369570106245120">the tweet</a> of when you stumbled upon a podcast recording. I’d never seen that many black women, in one room, at a tech company before.</dt>
    <dd class="interview-a">
      <p>Yeah, it’s such a nice feeling. It’s a feeling that I had at the campaign. I started to see what it could be like. I wasn’t the only black person. I wasn’t the only black woman in the room, which was great. I can’t go back. Slack is doing amazing things with diversity. They still have a small ways to go as well but it’s a goal and it’s something that they’re actively thinking about. I’m enjoying it a lot. </p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">What’s your role there?</dt>
    <dd class="interview-a">
      <p>I’m a Senior Engineer on the growth marketing team. I’m working with the design team to do some stuff on slack.com and grow users and team creation. Essentially we want to eventually get to doing this design system and things like that, so very similar to what I did at the campaign.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">I have one last question. Is there one piece of advice or a lesson that you learned from where you started to where you are now?  Something that you wished you had known or would like to share with people coming into the industry?</dt>
    <dd class="interview-a">
      <p>It’s okay not to know everything and you’re not going to know everything. I tried for a while to learn everything I could, and it gets very overwhelming. There’s so many different tools, so many different frameworks, and everyone has opinions about which one you should be using. </p>
      <p>Just learn <em>something</em>.</p>
      <p>Don’t get paralyzed by the breadth of everything there is. Find something, one thing and focus on that for a little bit. I wish someone had told me that it’s okay that you don’t know something and saying “I don’t know” is okay.</p>
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