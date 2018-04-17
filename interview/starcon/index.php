<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-yellow';
  $interviewee_name = 'Ladies of StarCon'; // Use for page title & share links
  $interviewee_url = 'starcon'; // Used for share links URLs, use the same name as the interviewee's folder name

  // Twitter & Facebook sharing info
  //-----------------------------------------------------------------------------
  // Social media images are added in the metatags in includes/header.php to always pull in the feature image from this interview. Make sure the featured image always follows this format: featured-firstname-lastname.jpg
  $social_title = 'Interview with Anna Lorimer, Evy Kassirer, and Arshia Mufti by Ivonne Karamoy';
  $social_desc = 'Computer Science students and tech professionals Anna, Evy and Arshia are founders of StarCon, a software engineering conference that strives to set the bar for all future tech conferences, one that is respectful, inclusive and ensures diversity.';

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
  $interviewer_url = "http://ivonnekaramoy.com";
  $photos = "Victoria Whang";
  $photos_url = "https://victoriawhang.com/";
  $photos2 = "Neha Ravella";
  $photos_url2 = "https://www.instagram.com/ravellaaa/";
  $editor = "Joni Di Placido";
  $editor_url = "https://www.linkedin.com/in/joni-di-placido-590013118/";
  $editor2 = "Ivonne Karamoy";
  $editor_url2 = "http://ivonnekaramoy.com";
  $ad = "";
  $ad_url = "";
  $design = "Ivonne Karamoy";
  $design_url = "http://ivonnekaramoy.com";
  $dev = "Ivonne Karamoy";
  $dev_url = "http://ivonnekaramoy.com";
  $transcribe = "Ivonne Karamoy";
  $transcribe_url = "http://ivonnekaramoy.com";


  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

<main role="main" data-interview>

  <!-- // Featured Image -->
  <div class="border img-feature">
    <figure>
      <img src="<?php echo $path_img; ?>featured-starcon.jpg" alt="StarCon Ladies">
      <figcaption>
      </figcaption>
    </figure>
  </div>

  <!-- // Interview Header -->
  <header class="border header-interview">
    <div class="wrapper-sm">
      <h2>Anna Lorimer, Evy Kassirer and Arshia Mufti</h2>
      <p class="intro"><a href="https://annalorimer.com">Anna</a>, <a href="http://www.evykassirer.com/">Evy</a>, and <a href="https://arshiamufti.com/">Arshia</a> are founders of <a href="https://starcon.io/">StarCon</a>, a two-day software engineering conference held in Waterloo, Ontario. They sought to create a tech conference that changed the status quo&mdash;one that paid all of their speakers, anonymized proposals and enforced a code of conduct. All while pursuing their respective degrees in Math and Computer Science at the <a href="https://uwaterloo.ca/">University of Waterloo</a>, interning at prominent tech companies, volunteering and navigating how to balance everything with personal goals and self care.</p>

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
    <dt class="interview-q">Was technology part of growing up? How did you get interested in technology?</dt>
    <dd class="interview-a">
      <p><b>ANNA:</b> Growing up I was the kid in the house who knew computers but it was never presented to me as a career option. I did the typical messing around of my Neopets page and taught myself HTML and CSS through that. Most of my teen years I spent horse training so I didn't do a lot of other things. When it came time to go to University I realized I hated everything but Math. I got into [the University of] Waterloo and in first year they made me take Computer Science and I thought it was cool.</p>
    </dd>
  </dl>
  <dl class="border">
    <dt class="interview-q">What did you plan to do with a Math degree?</dt>
    <dd class="interview-a">
      <p>I was going to do cryptography, which I do now. As I’ve gotten farther, in my degree I’ve shifted my focus to computer security as a whole.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">What about you, Evy? Arshia?</dt>
    <dd class="interview-a">
      <p><b>EVY:</b> Math was something I enjoyed throughout school and somewhere around high school I started doing math contests. I was lucky to go to schools that had access to those contests and teachers that introduced them to us. In grade ten, I switched to grade eleven computer class because I didn’t like the course I was taking. I was lucky that I had a lot of friends who helped me solve bugs so it wasn't very frustrating; it was just a lot of fun. I spent hours on the assignments, I really just wanted to spend all my time on it. Then I realized that it was also a good career option. I could lose track of time working and get paid a bunch of money. That seemed like a pretty good deal. </p>
      <p><b>ARSHIA:</b> I really liked math and my mom happens to be a computer science lecturer at a university. My goal was to go into electrical engineering and do circuitry and mess around with semiconductors and stuff. But we had to take an elective and I took computer science and it was pretty much a no brainer. This was what I wanted to do. </p>
      <p>I didn't know anything about say Silicon Valley culture or startup culture. I was so removed from the idea of a [career as a] software engineer so I didn't really have an end goal. I just knew this was something I wanted to get better at, and then I thought I’d figure out a way to make money from it. Then when I came here I realized tech really pays a lot! My parents were surprised too because in India, you're not elite if you're in tech.</p>
    </dd>
  </dl>

   <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-starcon-anna-lorimer.jpg" alt="Anna Lorimer, co-founder of Starcon">
      <figcaption>
        Anna Lorimer is co-founder of StarCon and is the Speaker & CFP Coordinator. She is currently a third year Joint Honours Computer Science and Combinatorics &amp; Optimization student at the University of Waterloo and has interned at <a href="https://www.nccgroup.trust/us/">NCC Group</a>, <a href="https://arcticwolf.com/">Arctic Wolf Networks</a>, <a href="https://www.ibigroup.com/">IBI Intelligent Systems</a>, <a href="http://www.audiobooks.com/">Audiobooks.com</a> and <a href="https://www.dejero.com/">Dejero</a>. Photo Credit: <a href="https://victoriawhang.com/">Victoria Whang</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dt class="interview-q">What made you choose the University of Waterloo for your undergrad studies?</dt>
    <dd class="interview-a">
      <p><b>ANNA:</b> It was the only school with a math faculty. It has the best math program and a co-op program so I could earn money and gain experience at the same time. What I liked specifically about Waterloo was that you could major in a specific kind of math, not just get a general math degree. </p>
      <p>Also, it was the farthest away from where I grew up [laughs].</p>
      <p><b>EVY:</b> Waterloo has a pretty good reputation for math, which I knew I liked, and computer science. I was trying to decide between Queens and Waterloo. Queens has a con-ed program, and I thought I wanted to be a teacher, or write code for education. Then my cousin who works in tech in California mentioned that if I went to Waterloo I could work there because they’re the only [Canadian] University that the tech company recognized. So I thought, this school is established and they have a co-op program where you can do a lot of internships, and that seemed pretty sweet. I didn't realize how beneficial that was until I got here.</p>
      <p><b>ARSHIA:</b> I have a sillier answer. Waterloo was my safety school. I wanted to study in Singapore. My mom thought we should look into other schools in case I didn’t get in and I think Waterloo was the only school that still had applications open. I didn't know that Waterloo has the reputation that it does. When I got here I realized this is a really good school where I'm getting a lot of support and learning really interesting things. So it was definitely a decision entrenched in luck and chance.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">There’s generally been fewer women in computer science programs. Were you aware of the gender disparity and did that factor into your decision making?</dt>
    <dd class="interview-a">
      <p><b>ANNA:</b> It wasn’t a part of my decision making. I was aware of it but I hadn’t experienced the effects of it yet. My mum studied women's studies during her undergrad and definitely didn't shy away from talking about these issues. So I knew all about feminist issues but I didn’t know enough for it to bother me yet.</p>
      <p><b>EVY:</b> My computer class in grade twelve had four girls and twenty guys. Even with math contests I was only one of a couple of girls that were doing them. So I was aware of the breakdown. Maybe it was affecting me but I wasn’t consciously aware of it. I just thought that was how things worked. </p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-starcon-evy-kassirer.jpg" alt="Evy Kassirer, co-founder of Starcon">
      <figcaption>
        Evy Kassirer is co-founder of StarCon and is Director of Publicity. She is in her final term of an Honours Computer Science program at the University of Waterloo and has interned at Chrome Accessibility, <a href="https://kids.youtube.com/">YouTube Kids</a>, <a href="https://www.khanacademy.org/">Khan Academy</a>, <a href="https://socratic.org/">Socratic</a>, <a href="https://joyable.com/">Joyable</a> and <a href="https://asana.com/">Asana</a>. Photo Credit: <a href="https://victoriawhang.com/">Victoria Whang</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dd class="interview-a">
      <p><b>ARSHIA:</b> I didn’t know any of it. My computer science class in high school was just girls so we worked on algorithms together, it was great. There’s this sense in South Asian cultures that if you’re a guy, you do electrical engineering where you go out into the field, wear a hard hat and work with tools. And computer engineering is sitting in a room and programming which is more ‘suitable’ for girls. So I didn’t get much pushback from my family or society. Later when I told my parents about sexism and the gender disparity in computer science they impressed upon me that I was part of that change and I had to stick with it to inspire that change because I was strong enough, I was good enough.</p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>It was a balance. How much work went into things was proportionate to how much I cared about it.</p>
  </aside>

  <dl class="border">
    <dt class="interview-q">You all started StarCon&mdash;this was the first year&mdash;and you’re also doing co-op programs and working, studying, volunteering and doing all these other hobbies. How do you balance your different interests and commitments with what could be a pretty grueling program?</dt>
    <dd class="interview-a">
      <p><b>ANNA:</b> I don’t deal with it well, to be honest. I’ve struggled a lot in school. Even though I’ve gotten a lot better, when I started doing StarCon, and it was really hard to balance it all, especially because I ran our CFP (call for proposals) by myself. I was contacting speakers and dealing with all the speaker paperwork. I didn’t do a particularly good job of handling all the work. I did the typical student thing where I just didn’t sleep or things would slide. I don’t really have a happy answer.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">It’s a real answer.</dt>
    <dd class="interview-a">
      <p><b>ANNA:</b> Yeah, the real answer is that I dealt with it poorly. I’m also not just a CS major, I’m doing the Math side of it and those courses are hard. I was lucky that the term when we were organizing StarCon I was doing my computer security course which I knew already because I worked in it. But even those assignments didn’t go as well as I wanted them to. Things suffered because I cared more about this conference. It was a balance. How much work went into things was proportionate to how much I cared about it.</p>
      <p><b>ARSHIA:</b> You have to understand that since we weren’t getting compensated in any way or even really getting that much recognition, the only thing driving us was the idea of this conference. When logistics failed or money fell through, I never felt like any of them didn’t care as much as I did. I think that was a huge factor in what made the conference so successful.</p>
    </dd>
  </dl>


  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-starcon-arshia-mufti.jpg" alt="Arshia Mufti, co-founder of Starcon">
      <figcaption>
        Arshia Mufti is co-founder of StarCon where she is Chair and Director of Sponsorship. She is a  third year of Computer Science student at the University of Waterloo. She has interned at <a href="http://dsg.uwaterloo.ca/">Data Systems Group</a>, <a href="https://stripe.com/">Stripe</a>, and <a href="https://www.bazaarvoice.com/">Bazaarvoice</a>. Photo Credit: <a href="https://victoriawhang.com/">Victoria Whang</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dd class="interview-a">
      <p><b>EVY:</b> The whole team for StarCon cared a lot about StarCon. So even when things got very busy, we were each committed. It’s really cool to work on a team like that. We’ve all been on the <a href="http://wics.uwaterloo.ca/">Women in Computer Science (WiCS) Committee</a> so I think that helped us figure out what it feels like to be in school, do things for a committee and run events. </p>
      <p>When I chaired the committee, I was doing a lot of work—sometimes too much. I felt like I needed to do everything to prove that I’m very committed. Throughout my second term, I overworked myself and had some breakdowns. All of these things mattered so much and I couldn’t do them all. So I figured out strategies to deal with that. Now I take only four courses per term instead of five. I also prioritize various self-care things, like making sure that I get exercise and spend time with friends. </p>
      <p>When we started StarCon I was excited about the conference but I knew I couldn’t take on one of the other roles that involved more work, so I took on publicity. Having a good team is really helpful because you can trust that they’ll think of everything else and handle it.</p>
    </dd>
  </dl>
  </div>

  
  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>We weren’t getting compensated in any way or even really getting that much recognition, the only thing driving us was the idea of this conference.</p>
  </aside>

  <dl class="border">
    <dd class="interview-a">
      <p><b>ANNA:</b> One thing that I learned a lot from Evy was to prioritize self care, which I’m really bad at. I will basically impale myself to get stuff done. I was really impressed by her ability to say no so she could do personal things.</p>
      <p><b>ARSHIA:</b> I was not in Waterloo while we organized this conference. I was in San Francisco for four months working and then I was in London, England on an exchange for the last four months leading up to the conference. I was essentially running on an east coast schedule. It was really common for me to be up at three am working on StarCon. At the start of the term I made this ordered list of what my priorities were and I stuck them on my wall. When I had to make a choice between something and StarCon, StarCon took precedence. And I was happy to do that because I had established my list of priorities. There were times when I didn’t submit an assignment or had to cancel interviews. I left London feeling like I didn’t see enough of it because I had so much else going on. The best you can do is make sure you know what’s important to you and then follow that list. If your priorities change, that’s fine, but you need something to start with.</p>
    </dd>
  </dl>
   

  <dl class="border">
    <dt class="interview-q">Was StarCon the first conference you ever organized?</dt>
    <dd class="interview-a">
      <p><b>EVY:</b> Yes. But keep in mind we had been on WiCS where we ran one day events.</p>
      <p><b>ARSHIA:</b> Also, we’ve all attended conferences so we had a fair idea of what a conference looks like. The idea of StarCon was conceived at <a href="http://hellocon.net/">Hello Con!</a>. </p>
      <p><b>ANNA:</b> We knew what we did and didn’t want.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Arshia, you were in London the months leading up to StarCon, Evy, you were in San Francisco working and Anna, you were in Waterloo on a school term. It must have been challenging to organize something of this scale on a distributed team. What other challenges did you have running this conference?</dt>
    <dd class="interview-a">
      <p><b>ANNA:</b> From the speaker point of view, it was really important for us to not have a bunch of dudes speaking. But we also wanted to run our call for proposals in a way that didn’t brand ourselves as a diversity and inclusion conference. We’re all ex-WiCS, we’ve all done the “Women in” thing. So rather than posting on Twitter and hoping people would come to us, we ran our publicity in spaces where the people we wanted to see were active. We actively sought them out. </p>
      <p>Paying our speakers was a challenge. It’s shockingly difficult to convince people that this is a good thing to do. People really like that people do talks for free. Sometimes conferences pay for travel and expenses but there’s usually no other form of compensation. Taking time out of your weekend and out of your life to write a talk is not trivial. You should be compensated for that. We decided early on that paying our speakers was really important and it was a new industry standard we wanted to go about setting. It was very difficult to convince sponsors and the school to agree to that.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-starcon-collage.jpg" alt="StarCon conference in Waterloo, Ontario, Canada.">
      <figcaption>
        Photo Credit: <a href="https://www.instagram.com/ravellaaa/">Neha Ravella</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dd class="interview-a">
      <p><b>EVY:</b> It’s common to pay keynotes but not someone that’s giving a 15 minute talk. </p>
      <p><b>ARSHIA:</b> When we were trying to logistically set up payments for speakers, we were meeting with the people who handled our money and I thought, if I get some data points then it might be easier to convince them that paying our speakers was a good idea. I was at a tech company at the time with some really prominent speakers, engineers who had spoken at conferences before, and I asked who had been paid for a non-keynote talk before. Every single one of them said no, except people who had spoken at AlterConf who pay their speakers. I was floored.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Why was that important to you? It’s very easy to say we won’t pay our speakers because all these other conferences follow this model.</dt>
    <dd class="interview-a">
      <p><b>ARSHIA:</b> We knew that the general sentiment amongst underrepresented minorities was that they were constantly being asked to do thankless emotional labour. We’d hear online about all of these amazing, qualified women in tech who talk about how devalued they feel. We didn’t want anyone to feel like that. Also, tech has a lot of money concentrated. So if we can be a magnet for taking some of that and giving to people who haven’t seen it before, that would be a really good way to go. </p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>We decided early on that paying our speakers was really important and it was a new industry standard we wanted to go about setting.</p>
  </aside>


  <dl class="border">
    <dd class="interview-a">
      <p><b>ANNA:</b> We made StarCon with the attitude of changing the status quo. Our work while we were on the WiCS committee really gave us the motivation to change tech for the better and we were especially motivated to affect change on our own terms.</p>
      <p>There’s also this tech culture where working really long hours without extra compensation is glorified. And we really want to change that. </p>
      <p><b>EVY:</b> It’s like not paying artists for their art and offering them exposure instead.</p>
      <p><b>ANNA:</b> It’s meaningless.</p>
      <p><b>ARSHIA:</b> I feel like we did set that standard to some degree. Julia, who organizes <a href="http://bangbangcon.com/">Bang Bang Con</a>, spoke to me after the conference and said they’ll be paying their speakers for the first time ever at the next Bang Bang Con. I love that on some scale, we are inspiring that kind of change. Maybe some conference will look at Bang Bang Con and do the same and there’s a fan-out effect.</p>
      <p><b>EVY:</b> Also shout out to <a href="https://alterconf.com/">AlterConf</a> for being the first one. They were an inspiration for so many things that we did. </p>
      <p><b>ANNA:</b> I’m so sad they’re done.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Many people don’t realize that a lot of conferences don’t pay their speakers.</dt>
    <dd class="interview-a">
      <p><b>ANNA:</b> I've attended conferences that charge like a thousand bucks for a student ticket and you have to pay to speak at the conference and travel too. I don't think that's how you get good content. The effect of this is that you get a bunch of talks that are pitches instead of learning experiences.</p>
      <p>Another side effect to that is if you sell speaker spots, companies will come in and pitch rather than teach. That’s not how you get good content.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-starcon-speakers.jpg" alt="StarCon speakers">
      <figcaption>
        Every speaker was paid at StarCon and proposals were anonymized and posted in spaces that were inclusive, which contributed to a diverse group of speakers. Speakers included keynotes <a href="https://twitter.com/b0rk">Julia Evans</a> and <a href="https://twitter.com/captainsafia">Safia Abdalla</a>, and people from all parts of the industry: students and professionals both local and from abroad. 
        Photo credit:
        <a href="https://www.instagram.com/ravellaaa/">Neha Ravella</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dd class="interview-a">
      <p><b>ARSHIA:</b> Shout out to Bang Bang Con because a lot of their ethos, their ideologies, we essentially forked off from them. They have a lot of well written justification for some of their policies. It was really good to have something to refer to. For example, they anonymize their applications which is something we also did. We didn’t necessarily do something because they did it but it was good to see their justification for why they did it a certain way. It made us feel more certain in our decisions, one way or the other.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Was it challenging to put on a conference that was diverse, inclusive and thoughtful in that way? What other challenges did you face?</dt>
    <dd class="interview-a">
      <p><b>ANNA:</b> Yes and no, because it was just our baseline. It was the bar and I think that bar was pretty low. </p>
      <p><b>ARSHIA:</b> Yeah, it was our minimum viable conference. None of us were going to negotiate on these key things: on paying speakers, anonymized proposals. There was no point in putting on a conference if we couldn’t do these things.</p>
      <p><b>EVY:</b> There are good examples out there. You want to run a conference? Go out and see how people run a conference. You want to make it inclusive, ask how people make things inclusive. Then do those things.</p>
      <p><b>ARSHIA:</b> We did have a couple of other challenges. The first was sponsorships. It was hard to get companies to care about a conference which wasn’t specifically targeted to undergraduate students. The number one reason companies sponsor these events is to get resumes, get students, pitch their product. We were not selling resumes or speaker slots. We wanted students to see what industry is like. I stressed that we want you to hire people for your company but we want you to make those connections through one-on-one conversations. I think because of that we were turned down by a couple of companies or sponsored for very little. We wanted to create an inclusive tech community. I feel like some companies thought that wasn’t a worthy enough goal to invest money in.</p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>There are consistently people being left out and excluded when it has nothing to do with who they are as qualified technical people… It’s unfair and we have to fix it.</p>
  </aside>


  <dl class="border">
    <dd class="interview-a">
      <p>The second challenge was the logistics of running the conference. All of us had a lot of passion for this conference, a lot of ideas, a lot of drive to make this a really good event. And sometimes that meant that our opinions weren’t always in line. So the challenge was finding a way to settle those differences in a way that was true to the conference’s ideals but didn’t make anyone feel like they weren’t worthy of being on this team or their opinion wasn’t taken into consideration. </p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Why is diversity and inclusion important to you? </dt>
    <dd class="interview-a">
      <p><b>ARSHIA:</b> There are consistently people being left out and excluded when it has nothing to do with who they are as qualified technical people. As women in tech, we see that because of the online spaces we’re active in, the situations we find ourselves in, the people we follow. Some of my guy friends don’t understand it because they don’t see it, they don’t feel it. But I feel the inequality, how the playing field is not level, how a guy who doesn’t have a tech degree can still get an interview and not be judged for not going to college, where a woman in the same situation would not have the same experience. How female founders don’t get money easily, but male founders do. There’s a whole list of ways that people are treated differently because of a whole host of factors: their gender, their sexual identity, their ethnicity. It’s unfair and we have to fix it. People come into the field with a lot of passion, a lot of knowledge, a lot of intelligence and then they leave for reasons that have nothing to do with that. They leave for other reasons that are not okay.</p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>I think the time spent in industry makes you aware of the different types of inequality… it’s not just people that you have to educate, its systems that you have to dismantle as well.</p>
  </aside>

  <dl class="border">
    <dt class="interview-q">Did these experiences come out of school, work and the industry? Were you aware of the issues before University?</dt>
    <dd class="interview-a">
      <p><b>ANNA:</b> I was pretty well versed. I read a lot and was very active in online spaces for gender inclusivity. It’s been something I’ve found deeply distressing but as a teenager I didn’t have the words to talk about why it was distressing me. So it’s been a journey in learning to have the words to talk about it. Now I hear the anecdotes and have the data to talk about it. I can point to things rather than having just a general gross feeling. This is something that I deeply care about morally and is at the center of who I am. It’s definitely stronger as I’ve gotten into the depths of this industry.</p>
      <p><b>ARSHIA:</b> I think the time spent in industry makes you aware of the different types of inequality. For example, there’s the one-on-one situation where someone is being unkind, and then there’s entire systems constructed where policies are just putting certain people at a disadvantage and getting others to see that is a whole different situation. One of my biggest lessons has been that it’s not just people that you have to educate, its systems that you have to dismantle as well. For example, job descriptions are exclusionary; workplaces are exclusionary; you have undergraduate tech events that don’t even understand why certain people don’t feel comfortable attending. </p>
      <p><b>EVY:</b> Growing up I learned about certain issues or challenges that people I knew faced. That’s how people’s feminism works, often the issues that you’re learning about are affecting people like you or people close to you. As I got more into tech, my feminism focused on the issues that people in tech face. I was lucky to meet a lot of people at Waterloo that cared about these challenges too. The more connected you get the more you learn about issues that different people experience, and the more you understand. The more stories you hear, the more you can’t ignore them. It's not something you can point to as a one-off.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-starcon-team.jpg" alt="StarCon extended team">
      <figcaption>
        Fatima Taj, Shivangi Patwardhan and Erin Edward are also an integral part of the StarCon team and were  responsible for all manner of logistics.
        Photo credit:
        <a href="https://www.instagram.com/ravellaaa/">Neha Ravella</a>
      </figcaption>
    </figure>
  </div>


  <dl class="border">
    <dt class="interview-q">It sounds like you had a really good team for StarCon with the right mix of passion and hard work.</dt>
    <dd class="interview-a">
      <p><b>ARSHIA:</b> I want to say that there are also three other people, <a href="https://www.linkedin.com/in/erin-edward/">Erin Edward</a>, <a href="https://www.linkedin.com/in/fatima-taj-37363a109/">Fatima Taj</a>, and <a href="https://www.linkedin.com/in/spatwardhan2018/">Shivangi Patwardhan</a>, who were part of the organizing team and worked on logistics, which involved everything from food, ordering swag, booking rooms, getting equipment, setting up gender-neutral bathrooms, reserving rows for accessibility, etc. We started off with one person and it grew to a team of three. That’s how much help we needed to get things done. The only reason they weren't part of the original team was because they weren't at Hello Con! where we came up with this idea. They are all phenomenal people who have this great combination of having the same passion and ideology but also being really effective people. You need people who get shit done and you need people who care about the right things. We were really lucky to have worked with them.</p>
      <p>I think the fact that we’re all former members of WiCS just speaks to how Women in Computer Science was instrumental in us forming our ideologies. And I think being on the committee and working with representatives from some of the big tech companies through them helped us. That really gave us the foundation that we all really needed to run something at this scale.</p>
      <p><b>ANNA:</b> Yeah and in fairness we had the industry connections from it and from our co-op experiences. It would have been a lot harder otherwise.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">You put out anonymous speaker proposals, what else did you do to get a diverse set of speakers?</dt>
    <dd class="interview-a">
      <p><b>EVY:</b> There’s a CFP newsletter that doesn’t exist anymore which would have blog posts about speaking as well as CFPs which they would vet for diversity and inclusion, if they paid their speakers, paid for travel, etc. That got us a bunch of international applicants. For local participants, we posted to Facebook groups of schools.</p>
      <p><b>ANNA:</b> <a href="https://twitter.com/dinah_davis">Dinah Davis</a> who was my manager and my mentor from a previous co-op work term, was really helpful in spreading the word for us. She runs a publication called <a href="https://code.likeagirl.io/">Code Like A Girl</a>. Her audience is quite diverse. We would also tell our friends to apply and we know a lot of people who aren’t cis white men. </p>
      <p><b>EVY:</b> I also think it had a lot to do with our wording.</p>
      <p><b>ANNA:</b> We were very explicit that if you were a first-time speaker we want you.</p>
      <p><b>EVY:</b> Yes, we specifically called them out. For example, if you ever felt like your idea wasn’t good enough, you should apply.</p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>Anonymize proposals, publicize widely, and trust that you’ll end up with a diverse set of speakers and that’s exactly what happened.</p>
  </aside>

  <dl class="border">
    <dd class="interview-a">
      <p><b>ARSHIA:</b> I think a combination of publicizing widely, wording the CFP, paying our speakers, anonymizing proposals all contributed to a diverse set of applications which then contributed to a diverse set of speakers in the end.</p>
      <p><b>ANNA:</b> For me, anonymizing the proposals was a challenge because I was the only one who knew who the applicants were. So in our application we asked people to avoid identifying certain parts of themselves to avoid introducing bias. My general strategy was easy when it was something as simple as, say, a website link. But other times they’d include stuff that was very personal, for example about their mental health because they were giving a talk about mental health. That was a lot harder to deal with.</p>
      <p>We wanted to get people to trust us. We were six women running this conference and we have a lot of colour, we come from different backgrounds. So that’s automatically going to make people feel more comfortable to applying. We also already had our keynote speakers, both of which were women. So I think people saw themselves reflected in our conference, in our CFP, in our policies, etc.</p>
    </dd>
  </dl>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-starcon-group-table.jpg" alt="StarCon group">
      <figcaption>
        Photo credit:
        <a href="https://www.instagram.com/ravellaaa/">Neha Ravella</a>
      </figcaption>
    </figure>
  </div>

  <dl class="border">
    <dd class="interview-a">
      <p><b>EVY:</b> Another thing that was helpful was that we are fairly well connected at this point in our careers. So it was easy to figure out what communities or groups of people we should advertise to or reach out to for sponsorship.</p>
      <p><b>ARSHIA:</b> Again, I want to point out that Bang Bang Cons strategy is similar: anonymize proposals, publicize widely, and trust that you’ll end up with a diverse set of speakers and that’s exactly what happened.</p>
    </dd>
  </dl>


  <dl class="border">
    <dt class="interview-q">A lot of conferences have a code of conduct but StarCon does an especially good job at bringing attention to it and enforcing it. How do you go about doing that?</dt>
    <dd class="interview-a">
      <p><b>EVY:</b> We knew we needed a code of conduct but we needed to figure out how to enforce it. At some point I saw a tweet by <a href="https://twitter.com/_sagesharp_">Sage Sharp</a>, saying they were running a workshop for a diversity firm about how to enforce a code of conduct and asking if anyone else was interested in it. I was in SF so I responded and was able to attend for free. We had a decent code of conduct but through that workshop I added a lot and learned how to enforce it. For example, we learned that it was important to bring people to a quiet place to talk and to ask them if they have anything else to mention because they might not say more if you don’t ask. We also learned we needed ways for people to anonymously contact us, so we had to ensure we had a secure method. It was really helpful. The training materials were really thorough and helpful in teaching you how to handle different situations.</p>
      <p><b>ARSHIA:</b> Evy trained me too because she was the primary incident responder and I was the secondary one. That was important in case she needed someone to speak to or if a code of conduct violation was filed against her. That was something that we wanted to be aware of and that conferences don’t always consider––we could be the people who violate the code of conduct.</p>
      <p>Also, we didn’t just rattle off our code of conduct at the beginning of each conference day. We talked about it, we had our territorial acknowledgement and the feedback we got was that they really appreciated it. It felt like an important part of the conference, not just a document that was on our website. </p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Are there plans for a 2019 StarCon?</dt>
    <dd class="interview-a">
      <p><b>ARSHIA:</b> We took a month off after the conference to decompress, destress, and reflect. We’ll meet soon and talk about how the conference was, what could have been done better, what went well. And then talk about what it would look like if we did it again. We need to decide if we want to do this long term. If we do then I think the decisions we make will change a bit.</p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>We’ve all spent so much time worrying about diversity & inclusion not just because we wanted to run a conference. It’s a foundation for us, it’s the way we think about things.</p>
  </aside>

  <dl class="border">
    <dd class="interview-a">
      <p><b>EVY:</b> As students we’re temporary here. So if it continued and we didn’t travel back here the conference would change. Maybe that’s okay but we are a very special team that works in a specific way and have specific values, it’s hard to pass that on.</p>
      <p><b>ARSHIA:</b> We got some advice from people who have run long term events and they said you really need to think about the people you bring on because they have to really embody your values when you’re not there.</p>
    </dd>
  </dl>
  
  <dl class="border">
    <dt class="interview-q">Do you think of StarCon as a school related conference?</dt>
    <dd class="interview-a">
      <p><b>ARSHIA:</b> No. We held it here because it was easy to get the venue, we didn’t have to pay insurance. We also worked with the university so we didn’t need to set up a corporation, do our own finances, etc. It had it’s pros: there was very little setup for us to do. It had its cons: it was a slow administrative process.</p>
      <p>A lot of the decisions we made the first time had to be very thoughtful because we knew it would affect future StarCons. Now that we’ve put that work in we’re just going repeat what we did again. Some things will be harder, some things will be easier.</p>
      <p><b>ANNA:</b> I also see this as a really great mentorship opportunity to bring up undergrads, pass on the knowledge and give people the skills to run these events because by no means are we the only one people who can do this. And I would love to see it spread.</p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>Talking about these issues is hard... we have to tease out the little prejudices, little biases, the little ways that even within women there's differences. Women of colour have it harder than white women.</p>
  </aside>

  <dl class="border">
    <dd class="interview-a">
      <p><b>ARSHIA:</b> It’s challenging because the issues we care about are nuanced. It’s not just yes women, no men. It’s a bit more subtle than that. The challenge with mentorship is passing on those differences. And talking about these issues is hard. You have to tease out the little prejudices, little biases, that exist even within women. Women of colour have it harder than white women. So talking about that intersectionality, it’s not something you can talk about in a day.</p>
      <p>I don’t want to say that you need to bring on someone who’s already there and understands all the nuances because that’s not fair at all, but we need to bring people on who already have some understanding of the situation. </p>
      <p><b>EVY:</b> We’ve all spent so much time worrying about diversity and inclusion; and not just because we wanted to run a conference. It’s a foundation for us, it’s the way we think about things. And so if you bring on people who haven’t spent as much time in the space then they can read it differently.</p>
      <p><b>ANNA:</b> Your heart needs to be in it and it can’t just be a line on your resume.</p>
    </dd>
  </dl>

  <dl class="border">
    <dt class="interview-q">Well whatever you decide, thank you for putting on a great event, and good luck with StarCon. One last question, what’s next for each of you?</dt>
    <dd class="interview-a">
      <p><b>ANNA:</b> I’m doing my fifth internship right now and I’m really enjoying it. I’m looking for my sixth. Aside from that I’m just going to keep trying to learn how to hack stuff and get better at my job. Right now I just really want to focus on figuring out what I want to do when I graduate but also have some fun along the way.</p>
      <p><b>EVY:</b> It’s my last term. But applying for jobs doesn’t sound very fun right now after so many internships. I’m really lucky that I’ve had jobs where I made enough money that I can now take a couple of months off and I don't feel like I have to work right away. That feels like a hard decision, so right now I’m just trying to enjoy the things that I can rarely do in Waterloo and then I’m going to take at least four months off. </p>
      <p>I’ve been doing a lot of conducting. I have a music minor, and I'm learning about choir conducting. There are workshops I want to take over the summer and then maybe some travelling. After that I’ll apply for jobs and start work in the fall. </p>
      <p><b>ARSHIA:</b> I’m currently on an internship doing research with one of the research groups on campus and then I’m headed to another internship after this. My main goal is to improve my tech skills and that can be through a lot of avenues. I want to find ways of being a better technologist and that can be contributing towards inclusive spaces, contributing to open source, going to conferences and speaking at conferences.</p>
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
    <?php // Global site credits
    include($path_inc."site-credits.php");
    ?>
  </footer>

  <!-- // Latest 3 Interviews -->
  <?php include($path_inc."latest-interviews.php"); ?>
</main>

<!-- // Global Footer -->
<?php include($path_inc."footer.php"); ?>