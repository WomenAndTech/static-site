<!DOCTYPE html>
<html>
<head>
  <title><?php
      if ($homepage == "true"):
        echo "Women&amp;&amp;Tech";
      elseif ($page_title):
        echo $page_title . " | Women&amp;&amp;Tech";
      elseif ($interviewee_name):
        echo $interviewee_name . " | Women&amp;&amp;Tech";
      else:
        echo "Women&amp;&amp;Tech";
      endif;
    ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Twitter cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@WomenAndTech">
  <meta name="twitter:creator" content="@WomenAndTech">
  <meta name="twitter:title" content="<?php echo $social_title; ?>">
  <meta name="twitter:description" content="<?php echo $social_desc; ?>">
  <meta name="twitter:image" content="<?php echo $path_img;?>thumbnail-<?php echo $interviewee_url; ?>.jpg">

  <!-- Facebook Open Graph -->
  <meta property="og:url" content="//womenandtech.com/interview/<?php echo $interviewee_url;?>/">
  <meta property="og:type" content="article">
  <meta property="og:title" content="<?php echo $social_title; ?>">
  <meta property="og:description" content="<?php echo $social_desc; ?>">
  <meta property="og:image" content="<?php echo $path_img;?>thumbnail-<?php echo $interviewee_url; ?>.jpg">

  <link rel="shortcut icon" href="<?php echo $path_img; ?>favicon-32x32.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $path_css; ?>style.css">
  <style>

    .theme-purple .team-listing .name, .theme-coral .team-listing .name, .theme-yellow .team-listing .name ,
    .theme-blue .team-listing .name, .theme-green .team-listing .name {
      background:none;
    }

    .theme-purple .no-border a.no-line, .theme-coral .no-border a.no-line, .theme-yellow .no-border a.no-line,
    .theme-blue .no-border a.no-line, .theme-green .no-border a.no-line{
      background:none;
    }

    .fade-in {
      -webkit-animation-duration: 0.2s;
      animation-duration:0.2s;
    }


    @media only screen and (max-width: 660px) {
      article h2 {
          margin: 42px 0 22px;
      }
    }
  </style>

  <!-- Google Tracking -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-96774134-1', 'auto');
    ga('send', 'pageview');

  </script>
</head>
<body class="<?php echo $page_theme; ?>">

  <!-- global header -->
  <header class="header-primary">
    <a href="/" class="logo">
      <img src="/assets/img/W&&T-full-logo-outline.svg" alt="Women && Tech logo">
      <h1 class="screen-readers">Women && Tech</h1>
    </a>
    <nav class="nav-primary">
      <a href="/archive/" <?php if ($page == "archive"): echo 'class="active"'; endif; ?>>Interviews</a>
      <a href="/about/" <?php if ($page == "about"): echo 'class="active"'; endif; ?>>About Us</a>
      <a href="/contributor-guidelines/" <?php if ($page == "contribute"): echo 'class="active"'; endif; ?>>Contribute</a>
      <a href="https://docs.google.com/forms/d/1p_rLrRz3JezgW-tEjAKYN1XkyTbVudFuNYHIP0wLktM/edit?usp=drive_web">Nominate</a>
    </nav>
  </header>
