<?php
/**
 * Template Name: Story Page
 */
?>
<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $url['0']; ?>

<div class="page_header" style="background-image: url(<?php echo $url ?>)">
  <h2 class="page_title cm"><?php the_title(); ?></h2>
  <div class="bottom_bar"></div>
</div>

<div class="container">
  <img class="full_width" src="<?php echo get_template_directory_uri(); ?>/dist/images/video_placeholder.png" />
  <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
  <?php endwhile; ?>


  <div class="color_band_headline">
    <h3 class="band_headline">CELEBRATING 60 YEARS</h3>
    <svg version="1.1" class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 1043 135.3" enable-background="new 0 0 1043 135.3" xml:space="preserve" preserveAspectRatio="none">
      <g>
        <polygon opacity="0.76" fill="#209AD6" points="9.8,14.2 1043,40.4 1041.5,133.8 5.2,122.7 	"/>
        <polygon fill="#F3AE32" points="24,37.9 753.9,14.7 1041.1,65 	"/>
        <polygon fill="#10202B" points="0,0 1042.7,58.2 1042.7,135.3 5.2,135.3 	"/>
      </g>
    </svg>
  </div>
  <?php the_field('gallery'); ?>
  <div class="color_band_headline">
    <h3 class="band_headline">For Alumni</h3>
    <svg class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 1386.8 123.1" enable-background="new 0 0 1386.8 123.1" xml:space="preserve" preserveAspectRatio="none">
      <g>
        <polygon fill="#88171A" points="96,72 933.1,4.5 1384.4,50.5 	"/>
        <polygon fill="#F7B132" points="33.9,14.6 1386.8,25.2 1384.9,121.6 0,110.1 	"/>
        <polygon fill="#10202B" points="20.8,0 1386.5,43.6 1386.5,123.1 0,123.1 	"/>
      </g>
    </svg>
  </div>
  <p><b>SPSL has over 6,000 alumni, dating back to our first graduating class in 1957.</b></p>
  <p>Our students go on to do great things, in ways large and small, dedicated to lifetime learning and service to others. If you’re an alumni, you are still a vital part of the SPSL community. We want to hear what you’ve been up to! </p>
  <?php if (get_field('alumni_newsletter')) {?>
  <a href="<?php echo get_field('alumni_newsletter')['url'] ?>" class="slim_button dark"><span class="slim_wrapper">View Alumni Newsletter</span></a>
  <?php } ?>
  <a href="#" class="slim_button red"><span class="slim_wrapper">Update Alumni Profile</span></a>
  <a href="/ways-to-support/" class="slim_button dark"><span class="slim_wrapper">Ways to Support</span></a>
</div>
