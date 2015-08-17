<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $url['0']; ?>

<div class="page_header" style="background-image: url(<?php echo $url ?>)">
  <h2 class="page_title cm">What's For Lunch?</h2>
  <div class="bottom_bar"></div>
</div>

<?php
  $now = new DateTime();
  $args = array(
    'meta_key' => 'lunch_date',
    'meta_value' => $now->format('Ymd'),
    'post_type' => 'lunch_item',
    'posts_per_page' => 1
  );
  $featured_lunch = new WP_Query($args);

?>
<?php while ( $featured_lunch->have_posts() ) : $featured_lunch->the_post(); ?>
  <div class="container">
    <div class="featured lunch_item">
      <div class="lunch_date">
        <p class="weekday"><?php $date = new DateTime(get_field( 'lunch_date' )); echo $date->format('l'); ?></p>
        <span class="content">
          <p class="month"><?php $date = new DateTime(get_field( 'lunch_date' )); echo $date->format('F'); ?></p>
          <p class="day"><?php $date = new DateTime(get_field( 'lunch_date' )); echo $date->format('d'); ?></p>
        </span>
      </div>
      <div class="lunch_content">
        <h4 class="lunch_main"><?php echo get_the_title($post); ?></h4>
        <div class="lunch_copy"><?php echo the_content($post); ?></div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="next_lunch"></div>
  </div>
  <div class="featured_lunch_break"></div>
<?php endwhile; wp_reset_query(); ?>


<div class="container">
  <?php $loop = new WP_Query( array( 'post_type' => 'lunch_item', 'posts_per_page' => -1 , 'orderby' => 'meta_value_num', 'order'   => 'ASC', 'meta_key'  => 'lunch_date' ) ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="lunch_item">
      <div class="lunch_date">
        <p class="weekday"><?php $date = new DateTime(get_field( 'lunch_date' )); echo $date->format('l'); ?></p>
        <span class="content">
          <p class="month"><?php $date = new DateTime(get_field( 'lunch_date' )); echo $date->format('F'); ?></p>
          <p class="day"><?php $date = new DateTime(get_field( 'lunch_date' )); echo $date->format('d'); ?></p>
        </span>
      </div>
      <div class="lunch_content">
        <h4 class="lunch_main"><?php echo get_the_title($post); ?></h4>
        <div class="lunch_copy"><?php echo the_content($post); ?></div>
      </div>
    </div>
  <?php endwhile; wp_reset_query(); ?>

</div>
