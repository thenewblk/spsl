<?php
/**
 * Template Name: Simple Page
 */
?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="page_header">
  <div class="bottom_bar"></div>
</div>

<div class="container">
  <div class="color_band_headline">
    <h3 class="band_headline"><?php the_title(); ?></h3>
    <svg class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 1386.8 123.1" enable-background="new 0 0 1386.8 123.1" xml:space="preserve" preserveAspectRatio="none">
      <g>
        <polygon fill="#88171A" points="96,72 933.1,4.5 1384.4,50.5 	"/>
        <polygon fill="#F7B132" points="33.9,14.6 1386.8,25.2 1384.9,121.6 0,110.1 	"/>
        <polygon fill="#10202B" points="20.8,0 1386.5,43.6 1386.5,123.1 0,123.1 	"/>
      </g>
    </svg>
  </div>
  <?php echo the_content(); ?>
</div>
<?php endwhile; ?>
