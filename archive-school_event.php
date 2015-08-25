<div class="page_header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/images/Calendar_temporary_Big.jpg)">
  <h2 class="page_title cm">What's Happening this Week?</h2>
  <div class="bottom_bar"></div>
</div>

<?php
  $now = new DateTime();
  $featured_event = new WP_Query(
          array(
            'post_type' => 'school_event',
            'posts_per_page' => 1,
            'orderby' => 'meta_value_num',
            'order'   => 'ASC',
            'meta_key'  => 'event_date',
            'meta_query' => array(
                'relation'		=> 'AND',
                array(
                    'key' => 'event_date',
                    'value' => $now->format('Ymd'),
                    'compare' => '>=',
                ),
                array(
                    'key' => 'featured',
                    'value' => true,
                )
              )
          )
        );
        $post_count = 0;

?>

<?php while ( $featured_event->have_posts() ) : $featured_event->the_post();  ?>
    <div class="container">
      <div class="featured lunch_item">
        <div class="color_band_headline">
          <h3 class="band_headline">Featured</h3>
          <svg class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1386.8 123.1" enable-background="new 0 0 1386.8 123.1" xml:space="preserve" preserveAspectRatio="none">
            <g>
              <polygon fill="#88171A" points="96,72 933.1,4.5 1384.4,50.5 	"/>
              <polygon fill="#F7B132" points="33.9,14.6 1386.8,25.2 1384.9,121.6 0,110.1 	"/>
              <polygon fill="#10202B" points="20.8,0 1386.5,43.6 1386.5,123.1 0,123.1 	"/>
            </g>
          </svg>
        </div>
        <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $url['0']; if ($url) { ?>
        <img class="featured_event_image" src="<?php echo $url ?>" />
        <?php } ?>
        <h3 class="featured_event_date"><?php $date = new DateTime(get_field('event_date')); echo $date->format('l, F d Y'); ?></h3>
        <div class="featured_event_content">
          <h4 class="lunch_main"><?php echo get_the_title(); ?></h4>
          <div class="lunch_copy"><?php echo the_content(); ?></div>
        </div>
      </div>
    </div>
<?php endwhile; wp_reset_query(); ?>

  <?php
    if (isset( $_GET['week'] )) {
      $week = $_GET['week'];

      $monday = date('Ymd', strtotime('+' . $week . ' week Monday this week'));
      $tuesday = date('Ymd', strtotime('+1 day +' . $week . ' week Monday this week'));
      $wednesday = date('Ymd', strtotime('+2 day +' . $week . ' week Monday this week'));
      $thursday = date('Ymd', strtotime('+3 day +' . $week . ' week Monday this week'));
      $friday = date('Ymd', strtotime('+4 day +' . $week . ' week Monday this week'));
      $saturday = date('Ymd', strtotime('+5 day +' . $week . ' week Monday this week'));
      $sunday = date('Ymd', strtotime('+6 day +' . $week . ' week Monday this week'));


      $next_week = $week + 1;

      $next_monday_time = strtotime('+' . $next_week . ' week Monday this week');

      $next_monday = date('Ymd', $next_monday_time);
      $week = $_GET['week'] + 1;

    } else {
      $week = 1;

      $monday = date('Ymd', strtotime('Monday this week'));
      $tuesday = date('Ymd', strtotime('+1 day Monday this week'));
      $wednesday = date('Ymd', strtotime('+2 day Monday this week'));
      $thursday = date('Ymd', strtotime('+3 day Monday this week'));
      $friday = date('Ymd', strtotime('+4 day Monday this week'));
      $saturday = date('Ymd', strtotime('+5 day Monday this week'));
      $sunday = date('Ymd', strtotime('+6 day Monday this week'));


      $next_monday_time = strtotime('Monday next week');
      $next_monday = date('Ymd', $next_monday_time);
    }

    $monday_loop = new WP_Query( array(
              'post_type' => 'school_event',
              'posts_per_page' => -1,
              'orderby' => 'meta_value_num',
              'order'   => 'ASC',
              'meta_key'  => 'event_date',
              'meta_query' => array(
                  array(
                      'key' => 'event_date',
                      'value' => $monday,
                  )
                )
             )
    );
    $tuesday_loop = new WP_Query( array(
              'post_type' => 'school_event',
              'posts_per_page' => -1,
              'orderby' => 'meta_value_num',
              'order'   => 'ASC',
              'meta_key'  => 'event_date',
              'meta_query' => array(
                  array(
                      'key' => 'event_date',
                      'value' => $tuesday,
                  )
                )
             )
    );
    $wednesday_loop = new WP_Query( array(
              'post_type' => 'school_event',
              'posts_per_page' => -1,
              'orderby' => 'meta_value_num',
              'order'   => 'ASC',
              'meta_key'  => 'event_date',
              'meta_query' => array(
                  array(
                      'key' => 'event_date',
                      'value' => $wednesday,
                  )
                )
             )
    );
    $thursday_loop = new WP_Query( array(
              'post_type' => 'school_event',
              'posts_per_page' => -1,
              'orderby' => 'meta_value_num',
              'order'   => 'ASC',
              'meta_key'  => 'event_date',
              'meta_query' => array(
                  array(
                      'key' => 'event_date',
                      'value' => $thursday,
                  )
                )
             )
    );
    $friday_loop = new WP_Query( array(
              'post_type' => 'school_event',
              'posts_per_page' => -1,
              'orderby' => 'meta_value_num',
              'order'   => 'ASC',
              'meta_key'  => 'event_date',
              'meta_query' => array(
                  array(
                      'key' => 'event_date',
                      'value' => $friday,
                  )
                )
             )
    );
    $saturday_loop = new WP_Query( array(
              'post_type' => 'school_event',
              'posts_per_page' => -1,
              'orderby' => 'meta_value_num',
              'order'   => 'ASC',
              'meta_key'  => 'event_date',
              'meta_query' => array(
                  array(
                      'key' => 'event_date',
                      'value' => $saturday,
                  )
                )
             )
    );
    $sunday_loop = new WP_Query( array(
              'post_type' => 'school_event',
              'posts_per_page' => -1,
              'orderby' => 'meta_value_num',
              'order'   => 'ASC',
              'meta_key'  => 'event_date',
              'meta_query' => array(
                  array(
                      'key' => 'event_date',
                      'value' => $sunday,
                  )
                )
             )
    );

    ?>
    <div class="container">
      <div class="calendar_week_wrapper">
        <div class="calendar_week_angle"></div>
        <?php if ($week == 2 ) { ?>
          <a class="prev_week" href="/school-calendar/"><span class="left_triangle"></span></a>
        <?php } else if ($week < 2 ){ ?>
        <?php } else { ?>
          <a class="prev_week" href="/school-calendar/?week=<?php echo $week - 2 ?>"><span class="left_triangle"></span></a>
        <?php } ?>
        <span class="this_date">Week Of: <?php $date = new DateTime($monday); echo $date->format('F d'); ?></span>
        <a class="next_week" href="/school-calendar/?week=<?php echo $week ?>"><span class="right_triangle"></span></a>
      </div>
    </div>
    <div class="container">
      <div class="lunch_item school_event">
        <div class="lunch_date">
          <p class="weekday"><?php $date = new DateTime($monday); echo $date->format('l'); ?></p>
          <span class="content">
            <p class="month"><?php $date = new DateTime($monday); echo $date->format('F'); ?></p>
            <p class="day"><?php $date = new DateTime($monday); echo $date->format('d'); ?></p>
          </span>
        </div>
        <div class="lunch_content">
          <?php if ($monday_loop->have_posts()) { ?>
            <?php while ($monday_loop->have_posts()) : $monday_loop->the_post(); ?>
            <h4 class="lunch_main<?php if (get_field('featured') == true) { ?> featured<?php } ?>"><?php echo get_the_title($post); ?></h4>
            <?php endwhile;   ?>
          <?php } else { ?>
            <h4 class="lunch_main">No Events Scheduled Yet.</h4>
          <?php } ?>
        </div>
      </div>
      <div class="lunch_item school_event">
        <div class="lunch_date">
          <p class="weekday"><?php $date = new DateTime($tuesday); echo $date->format('l'); ?></p>
          <span class="content">
            <p class="month"><?php $date = new DateTime($tuesday); echo $date->format('F'); ?></p>
            <p class="day"><?php $date = new DateTime($tuesday); echo $date->format('d'); ?></p>
          </span>
        </div>
        <div class="lunch_content">
          <?php if ($tuesday_loop->have_posts()) { ?>
            <?php while ($tuesday_loop->have_posts()) : $tuesday_loop->the_post(); ?>
            <h4 class="lunch_main<?php if (get_field('featured') == true) { ?> featured<?php } ?>"><?php echo get_the_title($post); ?></h4>
            <?php endwhile;   ?>
          <?php } else { ?>
            <h4 class="lunch_main">No Events Scheduled Yet.</h4>
          <?php } ?>
        </div>
      </div>
      <div class="lunch_item school_event">
        <div class="lunch_date">
          <p class="weekday"><?php $date = new DateTime($wednesday); echo $date->format('l'); ?></p>
          <span class="content">
            <p class="month"><?php $date = new DateTime($wednesday); echo $date->format('F'); ?></p>
            <p class="day"><?php $date = new DateTime($wednesday); echo $date->format('d'); ?></p>
          </span>
        </div>
        <div class="lunch_content">
          <?php if ($wednesday_loop->have_posts()) { ?>
            <?php while ($wednesday_loop->have_posts()) : $wednesday_loop->the_post(); ?>
            <h4 class="lunch_main<?php if (the_field('featured') == true) { ?> featured<?php } ?>"><?php echo get_the_title($post); ?></h4>
            <?php endwhile;   ?>
          <?php } else { ?>
            <h4 class="lunch_main">No Events Scheduled Yet.</h4>
          <?php } ?>
        </div>
      </div>
      <div class="lunch_item school_event">
        <div class="lunch_date">
          <p class="weekday"><?php $date = new DateTime($thursday); echo $date->format('l'); ?></p>
          <span class="content">
            <p class="month"><?php $date = new DateTime($thursday); echo $date->format('F'); ?></p>
            <p class="day"><?php $date = new DateTime($thursday); echo $date->format('d'); ?></p>
          </span>
        </div>
        <div class="lunch_content">
          <?php if ($thursday_loop->have_posts()) { ?>
            <?php while ($thursday_loop->have_posts()) : $thursday_loop->the_post(); ?>
            <h4 class="lunch_main<?php if (get_field('featured') == true) { ?> featured<?php } ?>"><?php echo get_the_title($post); ?></h4>
            <?php endwhile;   ?>
          <?php } else { ?>
            <h4 class="lunch_main">No Events Scheduled Yet.</h4>
          <?php } ?>
        </div>
      </div>
      <div class="lunch_item school_event">
        <div class="lunch_date">
          <p class="weekday"><?php $date = new DateTime($friday); echo $date->format('l'); ?></p>
          <span class="content">
            <p class="month"><?php $date = new DateTime($friday); echo $date->format('F'); ?></p>
            <p class="day"><?php $date = new DateTime($friday); echo $date->format('d'); ?></p>
          </span>
        </div>
        <div class="lunch_content">
          <?php if ($friday_loop->have_posts()) { ?>
            <?php while ($friday_loop->have_posts()) : $friday_loop->the_post(); ?>
            <h4 class="lunch_main<?php if (get_field('featured') == true) { ?> featured<?php } ?>"><?php echo get_the_title($post); ?></h4>
            <?php endwhile;   ?>
          <?php } else { ?>
            <h4 class="lunch_main">No Events Scheduled Yet.</h4>
          <?php } ?>
        </div>
      </div>
      <div class="lunch_item school_event">
        <div class="lunch_date">
          <p class="weekday"><?php $date = new DateTime($saturday); echo $date->format('l'); ?></p>
          <span class="content">
            <p class="month"><?php $date = new DateTime($saturday); echo $date->format('F'); ?></p>
            <p class="day"><?php $date = new DateTime($saturday); echo $date->format('d'); ?></p>
          </span>
        </div>
        <div class="lunch_content">
          <?php if ($saturday_loop->have_posts()) { ?>
            <?php while ($saturday_loop->have_posts()) : $saturday_loop->the_post(); ?>
            <h4 class="lunch_main<?php if (get_field('featured') == true) { ?> featured<?php } ?>"><?php echo get_the_title($post); ?></h4>
            <?php endwhile;   ?>
          <?php } else { ?>
            <h4 class="lunch_main">No Events Scheduled Yet.</h4>
          <?php } ?>
        </div>
      </div>
      <div class="lunch_item school_event">
        <div class="lunch_date">
          <p class="weekday"><?php $date = new DateTime($sunday); echo $date->format('l'); ?></p>
          <span class="content">
            <p class="month"><?php $date = new DateTime($sunday); echo $date->format('F'); ?></p>
            <p class="day"><?php $date = new DateTime($sunday); echo $date->format('d'); ?></p>
          </span>
        </div>
        <div class="lunch_content">
          <?php if ($sunday_loop->have_posts()) { ?>
            <?php while ($sunday_loop->have_posts()) : $sunday_loop->the_post(); ?>
            <h4 class="lunch_main<?php if (get_field('featured') == true) { ?> featured<?php } ?>"><?php echo get_the_title($post); ?></h4>
            <?php endwhile;   ?>
          <?php } else { ?>
            <h4 class="lunch_main">No Events Scheduled Yet.</h4>
          <?php } ?>
        </div>
      </div>

    </div>
  <?php wp_reset_query(); ?>
