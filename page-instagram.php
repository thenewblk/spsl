<?php
/**
 * Template Name: Instagram Page
 */
?>
<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $url['0']; ?>

<div class="page_header" style="background-image: url(<?php echo $url ?>)">
  <h2 class="page_title cm"><?php the_title(); ?></h2>
  <div class="bottom_bar"></div>
</div>

<div class="container">
  <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
  <?php endwhile; ?>
</div>
