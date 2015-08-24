<?php
/**
 * Template Name: Clubs, Sports and Activities Page
 */
?>
<div class="page_header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/images/ClubsSports_Big.jpg)">
  <h2 class="page_title cm"><?php the_title(); ?></h2>
  <div class="bottom_bar"></div>
</div>

<div class="container">
  <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
  <?php endwhile; ?>
</div>
