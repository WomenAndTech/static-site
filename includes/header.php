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
  <link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/28b6dbe0-7189-4bf0-b1ff-a727583465ca.css">
  <link rel="stylesheet" href="<?php echo $path_css; ?>style.css">
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
      <a href="/contributor-guidelines/" <?php if ($page == "contributor-guidelines"): echo 'class="active"'; endif; ?>>Contribute</a>
      <a href="/nominate/" <?php if ($page == "nominate"): echo 'class="active"'; endif; ?>>Nominate</a>
    </nav>
  </header>
