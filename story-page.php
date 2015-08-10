<?php
/**
 * Template Name: Story Page Template
 */
?>

<div class="page_header" >
  <h2 class="page_title cm">SPSL STORY</h2>
</div>

<div class="container">
  <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
  <?php endwhile; ?>
</div>
