<?php
/**
 * Template Name: Parents Page
 */
?>
<?php while (have_posts()) : the_post(); ?>
<div class="page_header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/images/forfamilies_big.jpg)">
  <h2 class="page_title cm"><?php the_title(); ?></h2>
  <div class="bottom_bar"></div>
</div>

<div class="container">
  <div class="color_band_headline">
    <h3 class="band_headline">Principal Words</h3>
    <svg version="1.1" class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 1043 135.3" enable-background="new 0 0 1043 135.3" xml:space="preserve" preserveAspectRatio="none">
      <g>
        <polygon opacity="0.76" fill="#209AD6" points="9.8,14.2 1043,40.4 1041.5,133.8 5.2,122.7 	"/>
        <polygon fill="#F3AE32" points="24,37.9 753.9,14.7 1041.1,65 	"/>
        <polygon fill="#10202B" points="0,0 1042.7,58.2 1042.7,135.3 5.2,135.3 	"/>
      </g>
    </svg>
  </div>

    <?php the_field('principal_words'); ?>
    <div class="color_band_headline">
      <h3 class="band_headline">Daily Announcements</h3>
      <svg version="1.1" class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 1043 135.3" enable-background="new 0 0 1043 135.3" xml:space="preserve" preserveAspectRatio="none">
        <g>
          <polygon opacity="0.76" fill="#209AD6" points="9.8,14.2 1043,40.4 1041.5,133.8 5.2,122.7 	"/>
          <polygon fill="#F3AE32" points="24,37.9 753.9,14.7 1041.1,65 	"/>
          <polygon fill="#10202B" points="0,0 1042.7,58.2 1042.7,135.3 5.2,135.3 	"/>
        </g>
      </svg>
    </div>

  <?php the_field('daily_announcements'); ?>


  <div class="color_band_headline">
    <h3 class="band_headline">Your Dashboard</h3>
    <svg version="1.1" class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 1043 135.3" enable-background="new 0 0 1043 135.3" xml:space="preserve" preserveAspectRatio="none">
      <g>
        <polygon opacity="0.76" fill="#209AD6" points="9.8,14.2 1043,40.4 1041.5,133.8 5.2,122.7 	"/>
        <polygon fill="#F3AE32" points="24,37.9 753.9,14.7 1041.1,65 	"/>
        <polygon fill="#10202B" points="0,0 1042.7,58.2 1042.7,135.3 5.2,135.3 	"/>
      </g>
    </svg>
  </div>
  {DASHBOARD}
  <div class="color_band_headline">
    <h3 class="band_headline">Tools</h3>
    <svg class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 1386.8 123.1" enable-background="new 0 0 1386.8 123.1" xml:space="preserve" preserveAspectRatio="none">
      <g>
        <polygon fill="#88171A" points="96,72 933.1,4.5 1384.4,50.5 	"/>
        <polygon fill="#F7B132" points="33.9,14.6 1386.8,25.2 1384.9,121.6 0,110.1 	"/>
        <polygon fill="#10202B" points="20.8,0 1386.5,43.6 1386.5,123.1 0,123.1 	"/>
      </g>
    </svg>
  </div>
</div>
<?php endwhile; ?>
