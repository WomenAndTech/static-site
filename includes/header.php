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
  <link rel="stylesheet" href="<?php echo $path_css; ?>style.css">
  <style>
    .interview-q {
      margin-bottom: 1em;
    }
    .header-interview h2 {
      font-size: 5rem;
      margin: 0 0 16px;
    }
    dl.border {
      padding-bottom: 1em !important;
      padding-top: 1em !important;
    }
    [class*="img-"] figcaption {
      margin: 0 auto 0;
      line-height: 1.5em;
    }
    [class*="img-"] figcaption {
      padding: 8px 0 0;
      color: grey;
      position: relative;
    }

    [class*="img-"] figcaption a {
      color: grey !important;
      background: none !important;
    }
    [class*="img-"] figcaption a:hover {
      color: #000000 !important;
    }
    .pull-quote {
      padding: 20px 20px 32px;
    }

    @media only screen and (min-width: 401px) {
      .header-interview {
        padding-top: 20px;
      }

    }

    @media only screen and (max-width: 400px) {
      html {
        font-size: 60%;
      }
      .pull-quote {
        padding: 16px 10px 26px;
      }
    }

  </style>
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
