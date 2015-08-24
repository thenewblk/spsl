<?php
/**
 * Template Name: Ways to Support Page
 */
?>
<div class="page_header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/images/Support_Big.jpg)">
  <h2 class="page_title cm"><?php the_title(); ?></h2>
  <div class="bottom_bar"></div>
</div>
<?php while (have_posts()) : the_post(); ?>
<div class="container">
  <div class="color_band_headline">
    <h3 class="band_headline">Donate</h3>
    <svg class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1386.8 123.1" enable-background="new 0 0 1386.8 123.1" xml:space="preserve" preserveAspectRatio="none">
      <g>
        <polygon fill="#88171A" points="96,72 933.1,4.5 1384.4,50.5 	"></polygon>
        <polygon fill="#F7B132" points="33.9,14.6 1386.8,25.2 1384.9,121.6 0,110.1 	"></polygon>
        <polygon fill="#10202B" points="20.8,0 1386.5,43.6 1386.5,123.1 0,123.1 	"></polygon>
      </g>
    </svg>
  </div>
  <p>Please considering giving a donation to our schools. <br />Click the PayPal link below to support and contribute to our school.</p>
  <div class="color_band_headline">
    <h3 class="band_headline">Fundraiser Events</h3>
    <svg version="1.1" class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 1043 135.3" enable-background="new 0 0 1043 135.3" xml:space="preserve" preserveAspectRatio="none">
      <g>
        <polygon opacity="0.76" fill="#209AD6" points="9.8,14.2 1043,40.4 1041.5,133.8 5.2,122.7 	"/>
        <polygon fill="#F3AE32" points="24,37.9 753.9,14.7 1041.1,65 	"/>
        <polygon fill="#10202B" points="0,0 1042.7,58.2 1042.7,135.3 5.2,135.3 	"/>
      </g>
    </svg>
  </div>
  <?php the_content(); ?>
  <div class="color_band_headline">
    <h3 class="band_headline">Volunteer</h3>
    <svg class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1386.8 123.1" enable-background="new 0 0 1386.8 123.1" xml:space="preserve" preserveAspectRatio="none">
      <g>
        <polygon fill="#88171A" points="96,72 933.1,4.5 1384.4,50.5 	"></polygon>
        <polygon fill="#F7B132" points="33.9,14.6 1386.8,25.2 1384.9,121.6 0,110.1 	"></polygon>
        <polygon fill="#10202B" points="20.8,0 1386.5,43.6 1386.5,123.1 0,123.1 	"></polygon>
      </g>
    </svg>
  </div>
  <p>We need your help. Fill this out blah blah. Place holder for more copy goes here.</p>
  <p>Email us at: <a href="mailto:volunteer@spsl.net">volunteer@spsl.net</a></p>
  <div class="color_band_headline">
    <h3 class="band_headline">Ongoing Support</h3>
    <svg version="1.1" class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 1043 135.3" enable-background="new 0 0 1043 135.3" xml:space="preserve" preserveAspectRatio="none">
      <g>
        <polygon opacity="0.76" fill="#209AD6" points="9.8,14.2 1043,40.4 1041.5,133.8 5.2,122.7 	"/>
        <polygon fill="#F3AE32" points="24,37.9 753.9,14.7 1041.1,65 	"/>
        <polygon fill="#10202B" points="0,0 1042.7,58.2 1042.7,135.3 5.2,135.3 	"/>
      </g>
    </svg>
  </div>
  <h2>Restaurant Nights</h2>
</div>
<?php endwhile; ?>
