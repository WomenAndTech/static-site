<?php
// LATEST INTERVIEWS
// Displayed in the footer of all interviews.

/*
Only update the content within the following snippet for each interview:
<a href="/interview/aashni-shah/" class="no-underline">
  <img src="<?php echo $path_img; ?>thumbnail-aashni-shah.jpg" alt="Aashni Shah">
  <h3>Aashni Shah</h3>
  <p>with Cassie Kaiser</p>
  <p>Computer Science student, organizer, leader and speaker within the tech community.</p>
</a>

Put the latest interview first.
Only display the latest three interviews.
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
        <a href="/interview/andrea-crofts/" class="no-underline">
          <img src="<?php echo $path_img; ?>thumbnail-andrea-crofts.jpg" alt="Andrea Crofts">
          <h3>Andréa Crofts</h3>
          <p>with Victoria Whang</p>
          <p>Design leader and community builder, currently leading a team at League as Product Design Manager.</p>
        </a>
      </article>
      <article class="grid-3-1">
        <a href="/interview/starcon/" class="no-underline">
          <img src="<?php echo $path_img; ?>thumbnail-starcon.jpg" alt="StarCon Ladies">
          <h3>Anna Lorimer, Evy Kassirer, Arshia Mufti</h3>
          <p>with Ivonne Karamoy</p>
          <p>Founders of StarCon, a two-day software engineering conference in Waterloo, Ontario, Canada.</p>
        </a>
      </article>
      <article class="grid-3-1">
        <a href="/interview/mina-markham/" class="no-underline">
          <img src="<?php echo $path_img; ?>thumbnail-mina-markham.jpg" alt="Mina Markham">
          <h3>Mina Markham</h3>
          <p>with Christina Truong</p>
          <p>Front-end architect, speaker, formerly the Senior Software Engineer for Hillary for America and currently a Senior Engineer at Slack.</p>
        </a>
      </article>
    </div>
  </aside>
