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
  <?php if (get_field('principal_words') ) { ?>
  <div class="color_band_headline">
    <h3 class="band_headline">A Word from the Principal</h3>
    <svg version="1.1" class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 1043 135.3" enable-background="new 0 0 1043 135.3" xml:space="preserve" preserveAspectRatio="none">
      <g>
        <polygon opacity="0.76" fill="#209AD6" points="9.8,14.2 1043,40.4 1041.5,133.8 5.2,122.7 	"/>
        <polygon fill="#F3AE32" points="24,37.9 753.9,14.7 1041.1,65 	"/>
        <polygon fill="#10202B" points="0,0 1042.7,58.2 1042.7,135.3 5.2,135.3 	"/>
      </g>
    </svg>
  </div>

    <?php the_field('principal_words'); } ?>

    <?php if (get_field('daily_announcements') ) { ?>
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

  <?php the_field('daily_announcements'); } ?>


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
  <div class="padded_copy">
    <p class="centered">Parents and families of SPSL students represent a vibrant community. Your ongoing involvement in the school is critical to our mission of academic excellence and service to others.</p>  
    <p class="centered">This is your dashboard, with quick and easy access to all of the various tools on the site to keep you informed and engaged in the school. </p>
  </div>
  <div class="dashboard_buttons">
    <div class="dashboard_button_wrapper">
      <a href="#" class="dashboard_button dark"><span class="slim_wrapper">Power School</span></a>
      <p>Check your balance. Add money. <br />Power up and go to school.</p>
    </div>
    <div class="dashboard_button_wrapper">
      <a href="#" class="dashboard_button gold"><span class="slim_wrapper">Annual Handbook</span></a>
      <p>Check your balance. Add money. <br />Power up and go to school.</p>
    </div>
    <div class="dashboard_button_wrapper">
      <a href="#" class="dashboard_button red"><span class="slim_wrapper">Financial</span></a>
      <p>Check your balance. Add money. <br />Power up and go to school.</p>
    </div>
    <div class="dashboard_button_wrapper">
      <a href="#" class="dashboard_button dark"><span class="slim_wrapper">Uniforms / Spiritwear</span></a>
      <p>Check your balance. Add money. <br />Power up and go to school.</p>
    </div>
    <div class="dashboard_button_wrapper">
      <a href="#" class="dashboard_button gold"><span class="slim_wrapper">Parent Resources</span></a>
      <p>Check your balance. Add money. <br />Power up and go to school.</p>
    </div>
    <div class="dashboard_button_wrapper">
      <a href="#" class="dashboard_button red"><span class="slim_wrapper">Preschool / Pre-K Program</span></a>
      <p>Check your balance. Add money. <br />Power up and go to school.</p>
    </div>
    <div class="dashboard_button_wrapper">
      <a href="#" class="dashboard_button dark"><span class="slim_wrapper">Extended Care Program</span></a>
      <p>Check your balance. Add money. <br />Power up and go to school.</p>
    </div>
  </div>
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
  <div class="circle_button_wrapper">
    <a href="/lunch/" class="circle_button red"><span class="slim_wrapper">Lunch Menu</span></a>
    <a href="/school-calendar/" class="circle_button gold"><span class="slim_wrapper">School Calendar</span></a>
    <a href="/classroom/" class="circle_button dark"><span class="slim_wrapper">Classrooms</span></a>
    <a href="/clubs-sports-and-activities/" class="circle_button red"><span class="slim_wrapper">Clubs, Sports & Activities</span></a>
    <a href="/library/" class="circle_button gold"><span class="slim_wrapper">Library</span></a>
  </div>
</div>
<?php endwhile; ?>
