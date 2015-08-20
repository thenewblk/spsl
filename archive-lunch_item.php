<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $url['0']; ?>

<div class="page_header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/images/lunch_big.jpg)">
  <h2 class="page_title cm">What's For Lunch?</h2>
  <div class="bottom_bar"></div>
</div>

<?php
  $now = new DateTime();
  // $args = array(
  //   'meta_key' => 'lunch_date',
  //   'meta_value' => $now->format('Ymd'),
  //   'post_type' => 'lunch_item',
  //   'posts_per_page' => 2
  // );
  //
  $featured_lunch = new WP_Query(
          array(
            'post_type' => 'lunch_item',
            'posts_per_page' => 2,
            'orderby' => 'meta_value_num',
            'order'   => 'ASC',
            'meta_key'  => 'lunch_date',
            'meta_query' => array(
                array(
                    'key' => 'lunch_date',
                    'value' => $now->format('Ymd'),
                    'compare' => '>=',
                )
              )
          )
        );
        $post_count = 0;
  // $featured_lunch = new WP_Query($args);

?>

<?php while ( $featured_lunch->have_posts() ) : $featured_lunch->the_post(); $post_count++; ?>
    <?php if($post_count == 1) : ?>
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
          <h4 class="lunch_main"><?php echo get_the_title(); ?></h4>
          <div class="lunch_copy"><?php echo the_content(); ?></div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <?php if($post_count == 2) : ?>
    <div class="next_lunch">
      <span class="title"><?php echo get_the_title(); ?></span>
      <span class="weekday"><?php $date = new DateTime(get_field( 'lunch_date' )); echo $date->format('D'); ?></span>
    </div>
    <?php endif; ?>
<?php endwhile; wp_reset_query(); ?>

<div class="featured_lunch_break"></div>
  <?php
    if (isset( $_GET['week'] )) {
      $week = $_GET['week'];

      $monday = date('Ymd', strtotime('+' . $week . ' week Monday this week'));
      $next_week = $week + 1;

      $next_monday_time = strtotime('+' . $next_week . ' week Monday this week');

      $next_monday = date('Ymd', $next_monday_time);
      $week = $_GET['week'] + 1;

    } else {
      $week = 1;
      $this_monday_time = strtotime('Monday this week');
      $monday = date('Ymd', $this_monday_time);

      $next_monday_time = strtotime('Monday next week');
      $next_monday = date('Ymd', $next_monday_time);
    }

    $lunch_loop = new WP_Query( array(
              'post_type' => 'lunch_item',
              'posts_per_page' => -1,
              'orderby' => 'meta_value_num',
              'order'   => 'ASC',
              'meta_key'  => 'lunch_date',
              'meta_query' => array(
                  'relation'		=> 'AND',
                  array(
                      'key' => 'lunch_date',
                      'value' => $monday,
                      'compare' => '>=',
                  ),
                  array(
                      'key' => 'lunch_date',
                      'value' => $next_monday,
                      'compare' => '<=',
                  )
                )
             )
            );

    if ($lunch_loop->have_posts()) :?>
    <div class="container">
  <?php while ($lunch_loop->have_posts()) : $lunch_loop->the_post(); ?>
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
    <?php endwhile;   ?>
    </div>
  <?php wp_reset_query(); else :  endif; ?>

    <div class="next_week_wrapper">
      <div class="next_week"><a href="/lunch/?week=<?php echo $week ?>">Next Week</a></div>
    </div>
      <?php if ($week == 2 ) { ?>
    <div class="prev_week_wrapper">
      <div class="prev_week"><a href="/lunch/">Previous Week</a></div>
    </div>
      <?php } else if ($week < 2 ){ ?>
      <?php } else { ?>
    <div class="prev_week_wrapper">
      <div class="prev_week"><a href="/lunch/?week=<?php echo $week - 2 ?>">Previous Week</a></div>
    </div>
    <?php } ?>
    <div class="clearfix"></div>
