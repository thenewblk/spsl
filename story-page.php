<?php
/**
 * Template Name: Story Page Template
 */
?>

<div class="page_header" >
  <h2 class="page_title cm">SPSL STORY</h2>
  <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $url['0']; ?>
  <?php echo $url ?>
</div>

<div class="container">
  <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
  <?php endwhile; ?>
</div>
