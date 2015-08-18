
<?php while ( have_posts() ) : the_post(); ?>
<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $url['0']; ?>
<?php $this_classroom = get_the_title($post); ?>
<div class="page_header" style="background-image: url(<?php echo $url ?>)">
  <h2 class="page_title cm"><?php echo $this_classroom; ?></h2>
  <div class="bottom_bar"></div>
</div>

<div class="container">
</div>
<?php endwhile; ?>
