<?php
  // $page_theme values: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = 'theme-blue';
  $interviewee_name = 'Emilie Baltz'; // Use for page title & share links
  $interviewee_url = 'emilie-baltz'; // Used for share links URLs, use the same name as the interviewee's folder name

  // Twitter & Facebook sharing info
  //-----------------------------------------------------------------------------
  // Social media images are added in the metatags in includes/header.php to always pull in the feature image from this interview. Make sure the featured image always follows this format: featured-firstname-lastname.jpg
  $social_title = 'Interview with Emilie Baltz with Victoria Whang';
  $social_desc = 'Artist, experience designer, and food technologist, based in New York City.';

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
  $interviewer_url = "https://twitter.com/victoriawhang";
  $editor = "Ivonne Karamoy";
  $editor_url = "https://twitter.com/ivonnekn";
  $editor2 = "Ria Lupton";
  $editor_url2 = "https://twitter.com/RoastedKeyboard";
  $editor3 = "Cassie Kaiser";
  $editor_url3 = "https://twitter.com/CassKaiser";
  $dev = "Victoria Whang";
  $dev_url = "https://twitter.com/victoriawhang";
  $dev2 = "Christina Truong";
  $dev_url2 = "https://twitter.com/christinatruong";
  $dev3 = "Ivonne Karamoy";
  $dev_url3 = "https://twitter.com/ivonnekn";
  $transcribe = "Victoria Whang";
  $transcribe_url = "https://twitter.com/victoriawhang";


  /* Do not change these settings */
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

<main role="main" data-interview>
  <!-- ALL content goes between the <main> tags. Below are some common modules for this page. Delete, revise or add more components as required. Refer to the Style Guide documentation for more details. Delete this comment when you've completed this page. -->


  <!-- // Featured Image -->
  <div class="border img-feature">
    <figure>
      <img src="<?php echo $path_img; ?>featured-emilie-baltz.jpg" alt="Emilie Baltz">
        <figcaption>Photo credit: Tim Wilson</figcaption>
    </figure>
  </div>


  <!-- // Interview Header -->
  <header class="border header-interview">
    <div class="wrapper-sm">
      <h2>Emilie Baltz</h2>
      <p class="intro">Emilie Baltz is an artist, an experience designer, and a food technologist but those terms don’t quite do her justice. She has taken all of her experiences ranging from childhood microwave experiments to studying contemporary dance and screenwriting, to inviting guests for colourful interactive dinners at her home and built a career in which she creates and tells interactive stories using food and the five senses in the most playful and unconventional ways. Based in New York City, she is also one of the founding members of <a href="http://www.newinc.org/" alt="New Inc. New York">New Inc.</a>, a founding faculty member of the School of Visual Arts <a href="http://productsofdesign.sva.edu/" alt="Products of Design MFA Program at SVA">Products of Design MFA Program</a>, and the founder of Food Design Studio at Pratt Institute. She is also an award winning author of “L.O.V.E. Foodbook” and a public speaker at engagements such as TedX, the TODAY Show, FITC, and more. </p>

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
    <dt class="interview-q">Emilie walked into the Osgoode boardroom at the Hilton hotel, between seminars, at <a href="http://fitc.ca/event/to17/" target="_blank">FITC 2017</a>, just as I finished testing my Zoom recorder. She would be sharing her expertise in <a href="http://fitc.ca/presentation/sensploration/" target="_blank">Sensploration</a> the following day and I had the opportunity to ask her everything from her work, to her background, to being a woman in tech. The kind of experiences Emilie designed blew my mind and broke down everything I had learned about experience design thus far. On my way to our meeting, I picked up a unicorn themed cupcake for Emilie from <a href="http://www.cutiepiecupcakes.ca/" target="_blank">Cutie Pie Cupcakes</a>. As it turns out, her personal company name she’s trademarked is called Unicorn Exists.</dt>
    <dd class="interview-a">
      <p>When I was coming up with a business name for my accountant to register, I told him: Baltz Works, Baltz Inc. and just as a joke, Unicorns Exist. The next day, I received my paperwork and it read, ‘Unicorn Exists is live and open for business’ and I was like, what the f***?</p>

      <p>‘Baltz Works was taken.’</p>

      <p>I said, ‘what about Baltz Inc?’ He said, ‘oh, I don’t know, the third one was funny.’ So he picked the third one but he misspelled it! He spelled it Unicorn Exists. He put the S after exist which makes no sense at all. I called him back and said Brian, you misspelled it!</p>

      <p>‘You have to change it now, I have to bill now!’ </p>

      <p>I went to buy the domain and as I was typing out Unicorns Exist on <a href="https://www.name.com/" target="_blank">name.com</a>, I looked at it, and what I’ve typed is, unicornsexist. That’s the way it’s spelled as a domain. So obviously, I call him back and said never mind!</p>

      <p>That’s why Unicorn Exists is my (business) name. In the end it’s quite wonderful because I also believe in accidents. Unicorn Exists stands for hunting for possibilities because within accidents and mistakes, you can often find possibilities. It was a perfect metaphor for what I believe in anyway. We’re all hunting for the missing S (which is all the other unicorns who also search for possibilities!).</p>
    </dd>
  </dl>

<!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dt class="interview-q">What is a food technologist and how do you define what you do?</dt>
    <dd class="interview-a">
      <p>When I say food technologist, I think of technology as not necessarily as only limited to the digital interface that we’re working in today, but technology at its heart, which is the organization of diverse parts. For example, when you look at a machine, you’re looking at gears that are moving to create a desired outcome. The printing press is a form of technology. Fire is a form of technology. This is human ingenuity at its best. </p>
      <p>For me, being a food technologist is about being able to create new possibilities; new arrangements that aren’t expected everyday, [creating] delightful inventions for tomorrow. I’m using a lot of digital technology now, a lot of sensor technology, mostly because I like the outcomes that it is able to deliver. I’m interested in rearranging the way that we eat and the way that we consume. Just like you can have a creative technologist, you can have a food technologist. I like to look through that lens and question how can we create tastier ways to engage with our technology.</p>
    </dd>
  </dl>

    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dt class="interview-q">How did you first start doing this? Did someone approach you?</dt>
    <dd class="interview-a">
      <p>Nobody approached me. I invented it.</p>
      <p>I was four years old and this new invention came into our house. It was called the microwave! I wanted to make tomato soup, so I put a tomato in a bowl of water, placed it in the microwave and pressed GO! And that was tomato soup. Then, there was this guy named Mr. Rogers who showed us how to make peanut butter. You put peanuts and butter in a ziplock bag and smashed them together. Those experiments made up the genesis of where it all started. </p>
        <p>I grew up south of Chicago in a town called Joliet, Illinois, which is very much like a midwestern strip mall town. My french mother continued her traditions in the home. It was important for her to continue her culture and to engage us in a part of herself. She did that by continuing her culinary traditions, which is such a huge part of french culture. In the midwest of America in the 80s, we didn’t have the food revolution that we have today in America, so for me, food became a symbol of where I belonged, but also where I did not belong. Having two cultures within me, and the challenge of trying to integrate them, is something I’ve always struggled with.</p>
        <p>Since then, I’ve always been interested in these questions: How do we create culture? How do we create a sense of belonging? How do we create new interactions for people and how do we design spaces where people feel good doing that? I think food is a universal material. Every culture in the world eats. The frequency of it obviously depends on a number of factors, but we all eat. We all must eat to live and in that quest for some sense of truth and human understanding in the world, I could find no other material other than food that seemed to connect all of us.</p>
        <p>Now, my practical experience is that I went to college and got a degree in screenwriting and contemporary dance. I’ve always been interested in storytelling. I was enamoured with this way of seeing the world, and also feeling the world. I wanted to study how to do that. Screenwriting is a way of organizing storytelling by architecting it through language, and dance is a form of not only expressing it for an audience, but also for feeling it yourself through your body. One is a verbal form of storytelling, and one is a physical form of storytelling. That said, after college I decided to write my own adventure and left film and dance behind to go into photography, then got a wild job restoring a french medieval chateau with Winston Churchill’s grandson, then came back to New York and waitressed. </p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Thorrenc%2C_ch%C3%A2teau.JPG" alt="Emilie Baltz restored a French chateau">
      <figcaption>
        Photo credit:
        <a href="https://commons.wikimedia.org/wiki/File%3AThorrenc%2C_ch%C3%A2teau.JPG" title="Thorrenc chateau Wiki">Pasquion</a>
      </figcaption>
    </figure>
  </div>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>We all must eat to live and in that quest for some sense of truth and human understanding in the world, I could find no other material other than food that seemed to connect all of us.</p>
  </aside>

    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dd class="interview-a">
      <p>Strangely enough, though waitressing seemed to be the most base job I could have gotten, therein came the greatest discovery. I immediately felt, ‘oh, this is what I love. This is the theatre of life. This place is a set.’ Just like in film or in theatre, restaurants are sets. You walk into them and some kind of story is being told. Some chefs even go to the height of defining their restaurants as emotional narratives: ‘This is about love. This is about risk.’ You’re able to feel their stories even more because you’re eating it. I loved that experience. I also loved the process of being part of the restaurant staff and us all coming together at 5pm, just like you do in the theatre. You prep, shine glassware, and then the doors would open. The people would come but there was no real script, so you were always discovering people - maybe even facilitating breakups and proposals! -  and that led me to see the dining table as a stage for the daily dramas of life. </p>
      <p>I love humans. I love the stories that we live, and the feelings that we feel. With this experience in hospitality, I knew this was something that I wanted to do. Food had started to bring together the disciplines I had studied: screenwriting and dance, language and the human body, human behavior and human movement.</p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>Food had started to bring together the disciplines I had studied: screenwriting and dance, language and the human body, human behavior and human movement.
</p>
  </aside>

    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dt class="interview-q">How long did you work there for?</dt>
    <dd class="interview-a">
      <p>I worked there for a year. Then I went back to school and got a masters degree in industrial design. Afterwards, I worked in product design and development, from cell phones to jackets, product innovation for Microsoft, ping pong tables for Puma, all sorts of “stuff”. Eventually I reached a certain point where I got bored of what was happening in my daily life because I was quite far from materials and from the user.</p>
      <p>I had done my graduate thesis on food, specifically looking at why Americans eat the way they do: what are the environmental and contextual factors that influence our everyday consumption behaviours? I developed a whole series of different products and artifacts that were reflections of what I had been researching. But this was 2005, and this was a new space. People were not using food as a material for design at that period as much as we are today, so I chose to let that go and worked practically as an industrial designer. When I got a little disillusioned in a corporate/commercial setting, I started making wild dinners in my own home to rekindle this love of food and behavior.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="http://emiliebaltz.com/wp-content/uploads/2015/08/COLOR-FEAST-2.jpg" alt="Emilie Baltz color feast">
      <figcaption>
          Emilie began describing her colour themed dinner parties. Her guests would arrive dressed in that colour, they would eat food that was that colour, and they would present their interpretations of that colour after the meal. You could act out a play, perform a contemporary dance…one time, a guest brought a helium balloon and declared it was the sound of pink.
      </figcaption>
    </figure>
  </div>

    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dd class="interview-a">
      <p>It was so radically wonderful. I think I would frame that as a kind of “radical hospitality”. It’s a gift to someone to feel welcome, and transformed, in a space. Going to someone’s home who is a wonderful host is just delicious, but there can be another layer to it: if you’re a radical host, you can change the way people see the world around them. </p>
      <p>With my colour themed dinners, guests left with an understanding of a particular colour that expanded the boundaries of their previous understanding. Maybe you never thought that helium was pink, but of course it can be! This kind of radical hospitality allows us to not just engage in new ways with each other, but also expand an understanding of ourselves and the world around us. That is my fundamental goal in life. </p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>How can we create more plural lexicons and richer fluencies together as human beings so we understand that though we are alone, we are also together? What if the language of diversity didn’t just stop at the colour of our skin, or the nationality that’s on our passport, but it also had to do with the way we see the world as humans?
</p>
  </aside>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-emilie-baltz-food-junkie.jpg" alt="Emilie Baltz Food Junkie page">
      <figcaption>
          Emilie’s side experiments with food didn’t end there. She, with the help of her intern, used to make crazy recipes out of office snacks. She posted the recipes on a friend’s website at <a href="http://www.core77.com/" target="_blank">core77.com</a> and called it, <a href="http://www.eatmedaily.com/2009/11/office-snack-gourmet-by-emilie-baltz-food-art/" target="_blank">Office Snack Gourmet</a>.
      </figcaption>
    </figure>
  </div>

    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dd class="interview-a">
      <p> I made five gastronomic recipes, some of which I had grown up with, remade with American junk food from crappy office pantry snacks. When it posted online, it went a little bit viral and I got a call from a book publisher in the States who said, ‘We’ve always wanted to make a book like this. Would you be interested? And can you make 101 recipes?’ And I said, “Of course!” </p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-emilie-baltz-donut.jpg" alt="Emilie Baltz - pink donut">
      <figcaption>
          That opportunity led Emilie to <a href="https://www.amazon.ca/Junk-Foodie-Delicious-Gourmand-Paperback/dp/B011W9OJ2C/ref=sr_1_3?s=books&ie=UTF8&qid=1493656200&sr=1-3" target="_blank">Junk Foodie: 51 Delicious Recipes for the Low Brow Gourmand</a>. It was an accomplishment which led to quitting her agency job and beginning her scintillating journey as a food designer.
      </figcaption>
    </figure>
  </div>

    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dt class="interview-q">What made you want to go back to school for industrial design?</dt>
    <dd class="interview-a">
      <p>I wanted to learn how to make things. I like to use my body, but I also like people. Industrial design, specifically the study of product design, is the study of how things and human behaviour intersect. (Think of it this way, if we are living the Theatre of Life, I think product design is the Props). Industrial design is a great way to learn about form, material, and shape, but it’s also a great way to learn about human behaviour. There’s so much user research that goes into it, including behavioural studies and user testing. You’re actually learning about people throughout the entire process. At heart, it is a problem solving discipline, so you have to have an empathetic understanding of a user to deliver a solution.</p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>Industrial design is a great way to learn about form, material, and shape, but it’s also a great way to learn about human behaviour.</p>
  </aside>

    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dt class="interview-q">How do you test with users and sympathize with their needs when designing for food experiences?</dt>
    <dd class="interview-a">
      <p>My own process is that I come up with a feeling. How do I want people to feel? Then, I come up with a script and a user flow. What will the experience journey be? How do I want people to interact with this object that I made, instrument, event or dinner? How will they enter the space? What will they do first? And what might they feel while doing it? Then we create it and test to see if it works. Usually it doesn’t! (Because nothing ever works on the first try). I think it’s the same process as all forms of creation: ideate, create, test, refine. </p>
      <p>That said, at the end of the day, what people remember is, as Maya Angelou wrote, ‘people will not remember me for what I do, they will remember me for how I made them feel.’ That’s what’s so interesting for me about the design of food. The creative departure can be less focused on what you do, and more about what you want to feel.</p>
    </dd>
  </dl>

    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dt class="interview-q">What’s your favourite restaurant?</dt>
    <dd class="interview-a">
      <p>I love so many places! I am very sad because one of my favourite restaurants of all time just closed. My two friends, Jose Ramirez-Ruiz and Pam Yung had a restaurant called <a href="https://www.starchefs.com/cook/chefs/bio/jos-ram-rez-ruiz" target="_blank">Semilla</a> in Brooklyn. It was <a href="http://saltyisland.com/food-trends-vegetable-forward/" target="_blank">vegetable forward</a>. They were interested in lost and forgotten vegetables. They did incredible work and pioneered vegetable forward cuisine. I loved that place.</p>
      <p>For the theatre of life, <a href="https://www.alinearestaurant.com/" target="_blank">Alinea</a>, in Chicago is Grant Achatz’s opera of food and it is just wild. Also I love anything Albert Adria does, Ferran Adria’s brother, (the two guys who started <a href="http://elbulli.com/" target="_blank">El Bulli</a>). Albert is just a genius and anything he does is amazing. I was fortunate enough to eat in a place called <a href="http://www.nytimes.com/2011/05/08/travel/08bites-41degrees.html" target="_blank">41 Degrees</a> which closed a couple of years ago, and now he’s opened one called <a href="http://www.enigmaconcept.es/" target="_blank">Enigma</a>. I also love a coffee shop in New York called <a href="http://www.ocafenyc.com/" target="_blank">O Cafe</a>. A friend of mine, Fernando, runs it. I love it because everything tastes like what it is. Either I like things that are super fantastic or I love just to eat an avocado, a really good egg, a really nice piece of dark chocolate, and really nice salt. Those are the two poles.</p>
    </dd>
  </dl>

    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dt class="interview-q">Tell me about some of your favourite projects.</dt>
    <dd class="interview-a">
      <p>There was a very epic  one called <a href="http://emiliebaltz.com/commissions/energia-dinner/" target="_blank">Energia</a>. It was a dinner at a nuclear reactor in Stockholm. That was wild. That dinner was designed for risk. How can we foster risk and create a place, a space, for people to experience risk? Well, you put them into an elevator, you plunge them 25 metres under Stockholm city centre and you have them explore the innards of a decommissioned nuclear reactor through all sorts of wild food experiences. It was epic and wonderful and I loved making it!</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-emilie-baltz-energia.jpg" alt="Emilie Baltz - Energia dinner">
      <figcaption>
        Photo credit:
        <a href="http://emiliebaltz.com/commissions/energia-dinner/" title="Emilie Baltz - Energia">Emilie Baltz</a>
      </figcaption>
    </figure>
  </div>

    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dd class="interview-a">
      <p>I also love collaborations. One was called <a href="http://emiliebaltz.com/experiments/lickestra/" target="_blank">Lickestra</a>, the licking ice cream orchestra. That was the first project that brought me into the realm of sensing technology and was done with a great friend of mine, <a href="http://carladiana.com/blog/" target="_blank">Carla Diana</a>, who’s an artist and technologist. Lickestra was grown from a sense of play. It was weird, it was fun, and it provoked all parts of you.</p>
    </dd>
  </dl>
  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-emilie-baltz-lickestra.jpg" alt="Emilie Baltz - Lickestra">
      <figcaption>
        Photo credit:
        <a href="http://emiliebaltz.com/experiments/lickestra/" title="Emilie Baltz - Lickestra">Emilie Baltz</a>
      </figcaption>
    </figure>
  </div>
    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dd class="interview-a">
      <p>The <a href="http://emiliebaltz.com/commissions/cotton-candy-theremin/" target="_blank">Cotton Candy Theremin Machine</a> was also a collaborative project with <a href="http://sharkbox.com/" target="_blank">Charlie Whitney</a> and <a href="http://www.stewardesslollipop.com/" target="_blank">Philip Sierzega</a>. Phil is an interactive director and artist and Charlie is a programmer and an artist. Cotton candy serves as a good metaphor for the project because it involved spinning so many different disciplines together. We worked with sound designers and motion graphics designers, coders, industrial designers, and chefs.</p>
    </dd>
  </dl>
  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-emilie-baltz-cotton-candy.jpg" alt="Emilie Baltz Cotton Candy Theremin">
      <figcaption>
        Photo credit:
        <a href="http://emiliebaltz.com/commissions/cotton-candy-universe/" title="Emilie Baltz Cotton Candy Theremin">Emilie Baltz</a>
      </figcaption>
    </figure>
  </div>
    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dt class="interview-q">Motion graphic designers?</dt>
    <dd class="interview-a">
      <p>When you spin the cotton candy, there’s a sensor ray around inside of the ring. They are infrared sensors so it detects your motion, your speed of spinning, and it then affects a projected world of motion graphics by controlling the wind and the direction of the sugar crystal world around you, as well as the soundscape. The Cotton Candy Machine suddenly becomes an interface. </p>
    </dd>
  </dl>
    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dt class="interview-q">How do these collaborations come about?</dt>
    <dd class="interview-a">
      <p>It’s a combination of many things. The Cotton Candy Theremin was an idea I had for several years. When I was a member at <a href="http://www.newinc.org/" target="_blank">New Inc</a> we had the opportunity to do a collaborative project. I met Phil and Charlie there, we sat next to each other’s table and I said, “hey, I have this idea!” That’s usually how collaborations happen. I usually have an idea, (I have a lot of ideas, maybe that’s my forte!) but I also find great people to work with on them. </p>
    </dd>
  </dl>
    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dt class="interview-q">Tell me about New Inc.</dt>
    <dd class="interview-a">
      <p>New Inc is the New Museum’s incubator for art design and technology and supports entrepreneurship in various forms. The <a href="http://www.newmuseum.org/" target="_blank">New Museum</a> is such an interesting institution because it’s constantly questioning itself. What is a museum? What does it mean to be emerging in the contemporary scene right now? New Inc is great. I was the first class there. It was a special time and place as well, because the first class of anything is usually filled with people who are ready and willing to experiment.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-emilie-baltz-newinc.jpg" alt="Emilie Baltz - New Inc.">
      <figcaption>
        Photo credit:
        <a href="http://www.newinc.org/" title="New Inc building in NYC">New Inc.</a>
      </figcaption>
    </figure>
  </div>

    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dt class="interview-q">You founded the Food Design Studio at Pratt Institute as well. Tell me about that. </dt>
    <dd class="interview-a">
      <p>That was wild fun. I went to Pratt for my masters degree in Industrial Design. I went back and started a food design studio that introduces food as a material of design to industrial designers. It’s a 17-week long course exploring food through the lens of the sensory sciences. The first half of the semester, we explore how food communicates visually, sonically, olfactorily, texturally, by taste…through all the 5 senses. Food is such an interesting material because unlike a chair or a camera, we put it in our mouth which actually acts as a ginormous amplifier! When you eat, you’re doing more than tasting, you are experiencing flavour. And flavor is a combination of all of our senses. What food looks like as it comes up to our mouth sends signals to our brain that precipitates meaning. When we put something in our mouth, the texture of it has meaning that communicates to us. The sound of eating also communicates (we always forget how loud it is when we eat inside of our face!).</p>
      <p>We take students through all these different sensory exercises, just as food scientists would, to learn how food communicates. And then, just like you would use colour to communicate a certain emotion, you also learn to choose a level of crispiness to communicate to a consumer when designing a chip, for example. We have similar toolboxes of creativity as designers, it’s just about translating from one discipline into another. In this way, we create fluency, so that now, I, as a designer, can go talk to a chef and we have a shared language that allows us to create better and faster together.</p>
      <p>That’s the first half of the food design studio and the second half is a series of commercial applications. We design a cookie, a meal, and different levels of consumer packaged goods for in-home experiences, to spectacular events. The final project can be of any area of interest so some students might explore sustainability, while some people are really interested in play.</p>
    </dd>
  </dl>

  <!-- // Image - Landscape -->
  <div class="border img-landscape">
    <figure>
      <img src="<?php echo $path_img; ?>landscape-emilie-baltz-travelcakes.jpg" alt="Emilie Baltz - croissants at Food Design Studio">
      <figcaption>
        Photo credit:
        <a href="http://emiliebaltz.com/workshops/travel-cakes/" title="Emilie Baltz Food Design Studio">Emilie Baltz</a>
      </figcaption>
    </figure>
  </div>

    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dt class="interview-q">Where do you see UX/UI education going in the future?</dt>
    <dd class="interview-a">
      <p>I’ll tell you where I would like to see it going. What’s interesting when you use food as an interface is, sure, you’re thinking about how’s this person going to act, what are they going to need, but you also have to think about how they feel. With UX, that usually comes last. When you’re making dinner for someone, the biggest question is “are they going to like it?”. Will it be delicious? Will they feel good about it? Will I feel good? That’s how I would love to see UX taught. How will I feel when I design this system? When I’m designing a wireframe, will the user feel good about that or will they feel bad about that? Within those questions, we’re still going to be doing the same things. We’re still going to be designing landing pages and CRMs and all sorts of stuff but if you switch your point of entry to an emotional point of entry, I believe that our end outcome is different. It is more empathetic and generous. Those are abstract terms but I do think it can change the content in the end by creating something that’s a little more human. </p>
    </dd>
  </dl>
  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>If you switch your point of entry to an emotional point of entry, I believe that our end outcome is different. It is more empathetic and generous. Those are abstract terms but I do think it can change the content in the end by creating something that’s a little more human. </p>
  </aside>

    <!-- // Q & A -  Add as many as required. -->
  <dl class="border">
    <dt class="interview-q">Has your gender ever affected your work experience?</dt>
    <dd class="interview-a">
      <p>I’ve never thought of myself as a woman. I’ve thought about myself as a curious human who loves to make things and learn. I live to learn stuff. Over the last few years, I’ve started to see more of a gender divide. I do see myself now, as a woman in this body working in the field of technology, but I’ve never really been someone who has made judgments about that for myself.</p>
      <p>I grew up in a culture where my parents were very supportive of creativity and gender didn’t really play into that. I’ve always tried to make as much as I can. With more transparency in the world now, there are things in my life that are different because I’m a woman, for better and for worse, but this is the body that I come in. So what am I going to do and what are we going to do together? Those are the questions I ask. It’s not a hindrance, or an obstacle. It just requires more consideration of the constraints.</p>
    </dd>
  </dl>

  <!-- // Pull Quote -->
  <aside class="border pull-quote">
    <p>I’ve never thought of myself as a woman. I’ve thought about myself as a curious human who loves to make things and learn.</p>
  </aside>

<dl class="border">
    <dd class="interview-q">
        <p>As we gathered our things to make our way out of the boardroom, Emilie put on a sparkly aviator cap that reminded me of the one Natalie Portman wore in Garden State.</p>
        <p>“Where is your hat from?”</p>
        <p>I asked eagerly, because I’ve never seen anything like it before.</p>
        <p>“Paris,” she replied as she ties the clasp on below her chin. Of course it is...everything about Emilie Baltz is a technicolor dream.</p>
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
        Development by <a href="<?php echo $dev_url; ?>"><?php echo $dev; ?></a>
        <?php if ($dev2): echo ', <a href="'.$dev_url2 .'">'.$dev2.'</a>';endif; ?>
        <?php if ($dev3): echo 'and <a href="'.$dev_url3 .'">'.$dev3.'</a>';endif; ?>
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
