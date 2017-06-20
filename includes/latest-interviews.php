<?php
/*
Only update the content within the link snippet for each interview.

<a href="/interview/aashni-shah/" class="no-underline">
  <img src="<?php echo $path_img; ?>thumbnail-aashni-shah.jpg" alt="Aashni Shah">
  <h3>Aashni Shah</h3>
  <p>with Cassie Kaiser</p>
  <p>Computer Science student, organizer, leader and speaker within the tech community.</p>
</a>

Put the latest interview first.
Use the folder name of the interviewee for the href value.
Update the thumbnail image name and 'alt' attribute.
Update the <h3> heading and other <p> information.
Do not include any links.
*/

?>

  <aside class="interview-cards wrapper">
    <h2>Latest Interviews</h2>
    <a class="view-all" href="/archive/">view all</a>
    <div class="grid-wrapper">
      <article class="grid-3-1">
        <a href="/interview/emilie-baltz/" class="no-underline">
          <img src="<?php echo $path_img; ?>thumbnail-emilie-baltz.jpg" alt="Emilie Baltz">
          <h3>Emilie Baltz</h3>
          <p>with Victoria Whang</p>
          <p>Artist, experience designer, and food technologist, based in New York City.</p>
        </a>
      </article>
      <article class="grid-3-1">
        <a href="/interview/aashni-shah/" class="no-underline">
          <img src="<?php echo $path_img; ?>thumbnail-aashni-shah.jpg" alt="Aashni Shah">
          <h3>Aashni Shah</h3>
          <p>with Cassie Kaiser</p>
          <p>Computer Science student, organizer, leader and speaker within the tech community.</p>
        </a>
      </article>
      <article class="grid-3-1">
        <a href="/interview/sara-hicks/" class="no-underline">
          <img src="<?php echo $path_img; ?>thumbnail-sara-hicks.jpg" alt="Sara Hicks">
          <h3>Sara Hicks</h3>
          <p>with Sophie He</p>
          <p>Co-founder and CEO of Reaction Commerce, an open-source ecommerce platform.
            </p>
        </a>
      </article>
    </div>
  </aside>
