<?php
  // TEMPLATE FOR NON-INTERVIEW PAGES

  // Adds active class to nav in includes/header.php -- Leave blank if this page is not included in the global navigation.
  $page = ""; // ex. contribute

  // Add a value here to display in the page title, browser tab and search results.
  $page_title = "Contribute";

  // Page theme options: theme-coral, theme-purple, theme-yellow, theme-green, theme-blue
  $page_theme = "theme-yellow";

  // Do not edit.
  include $_SERVER['DOCUMENT_ROOT'].'/config.php';
  include ($path_inc."header.php");
?>

<main role="main" data-page>
  <article class="page">
    <!-- ALL content goes between these <article> tags. Below are some standard modules for this page. Delete, revise or add more components as required. Refer to the Style Guide documentation for more options and code snippets. womenandtech.github.io/style_guide

    Delete this comment when you've completed this page. -->

    <!-- // Secondary Header -->
    <header class="no-border header-secondary">
      <h2>Optional page header</h2>
      <p>Our industry is filled with <a href="http://womenandtech.com/archive/">smart, interesting women</a> including developers, designers, entrepreneurs, and tech leaders. These women are a big deal, and we think you should know about them. We highlight them not for their gender, but because they are awesome by any kind of measure.</p>
    </header>

    <section class="border page-content">
      <div class="wrapper-sm">
        <h2>H2 Heading</h2>
        <p>Default page content, h2 & h3 headers, links & paragraphs. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>

        <h3>H3 Subheading</h3>
        <p>Cupcake ipsum dolor. Sit amet biscuit dragée cotton candy icing croissant toffee bonbon. Tootsie roll chocolate cake lollipop topping cake cake fruitcake. Halvah jelly beans pie muffin. Sweet roll cookie liquorice danish lemon drops pie apple pie donut lemon drops. Gingerbread gummies caramels. Oat cake sweet roll pie ice cream chocolate.</p>

        <h2>H2 Heading</h2>
        <p>Pudding chupa chups lollipop. Marshmallow chocolate bar brownie caramels macaroon powder danish. Gingerbread sweet tiramisu sweet roll dessert fruitcake topping cupcake donut. Marshmallow sweet tiramisu pudding powder lollipop pie croissant cake. Tiramisu bear claw gummi bears jelly beans marshmallow jujubes bonbon. Icing soufflé bear claw cake dessert pastry marshmallow jujubes.</p>
      </div><!-- close .wrapper-sm -->
    </section>

    <!-- Additional components (e.g. team signature) go OUTSIDE of the <section> tags containing the default page content. Refer to the style guide for options and code snippets. Delete this comment when you're done! -->
  </article>
</main>

<?php include($path_inc."footer.php"); ?>