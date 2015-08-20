
<?php while ( have_posts() ) : the_post(); ?>
<?php $this_classroom = get_the_title($post); ?>
<div class="page_header">
  <div class="bottom_bar"></div>
</div>

<div class="martinez_container">
  <div class="main">
    <div class="main_wrapper">

      <div class="color_band_headline">
        <h3 class="band_headline"><?php echo $this_classroom; ?> <br />Homework Blog</h3>
        <svg version="1.1" class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 1043 135.3" enable-background="new 0 0 1043 135.3" xml:space="preserve" preserveAspectRatio="none">
          <g>
            <polygon opacity="0.76" fill="#209AD6" points="9.8,14.2 1043,40.4 1041.5,133.8 5.2,122.7 	"/>
            <polygon fill="#F3AE32" points="24,37.9 753.9,14.7 1041.1,65 	"/>
            <polygon fill="#10202B" points="0,0 1042.7,58.2 1042.7,135.3 5.2,135.3 	"/>
          </g>
        </svg>
      </div>

      <?php
        if (isset( $_GET['week'] )) {
          $week = $_GET['week'];

          $monday = date('Ymd', strtotime('+' . $week . ' week Monday this week'));
          $next_week = $week + 1;

          $next_monday_time = strtotime('+' . $next_week . ' week Monday this week');

          $next_monday = date('Ymd', $next_monday_time);
          $week = $_GET['week'] + 1;

          $week_text = date('F j', strtotime('+' . $week -1 . ' week Monday this week')) . " - " . date('F j', $next_monday_time);

        } else {
          $week = 1;
          $this_monday_time = strtotime('Monday this week');
          $monday = date('Ymd', $this_monday_time);

          $next_monday_time = strtotime('Monday next week');
          $next_monday = date('Ymd', $next_monday_time);

          $week_text = date('F j', $this_monday_time) . " - " . date('F j', $next_monday_time);
        }
        $homework_loop = new WP_Query( array(
                  'post_type' => 'homework',
                  'posts_per_page' => -1,
                  'orderby' => 'meta_value_num',
                  'order'   => 'ASC',
                  'meta_key'  => 'due_date',
                  'meta_query' => array(
                    'relation'		=> 'AND',
                    array(
                        'key' => 'due_date',
                        'value' => $monday,
                        'compare' => '>=',
                    ),
                    array(
                        'key' => 'due_date',
                        'value' => $next_monday,
                        'compare' => '<=',
                    ),
                    array(
                        'key' => 'grade',
                        'value' => get_the_ID(),
                    ),
                  )
                 )
              );
        ?>

        <h3 class="week_title"><?php echo $week_text; ?></h3>
        <?php if ($homework_loop->have_posts()) :?>

        <?php while ($homework_loop->have_posts()) : $homework_loop->the_post(); ?>
          <div class="homework_entry">
            <h2 class="homework_date"><?php $date = new DateTime(get_field( 'due_date' )); echo $date->format('l, F j'); ?></h2>
            <div class="homework_copy"><?php the_content(); ?></div>
          </div>
        <?php endwhile;   ?>


        <?php wp_reset_query(); else : ?>
            <h2 class="no_assignments">No Assignments set for this week.</h2>
        <?php endif; ?>
        <div class="next_week_wrapper">
          <div class="next_week"><a href="/grade/<?php echo get_page_uri($post); ?>/?week=<?php echo $week ?>">Next Week</a></div>
        </div>
          <?php if ($week == 2 ) { ?>
        <div class="prev_week_wrapper">
          <div class="prev_week"><a href="/grade/<?php echo get_page_uri($post); ?>/">Previous Week</a></div>
        </div>
          <?php } else if ($week < 2 ){ ?>
          <?php } else { ?>
        <div class="prev_week_wrapper">
          <div class="prev_week"><a href="/grade/<?php echo get_page_uri($post); ?>/?week=<?php echo $week - 2 ?>">Previous Week</a></div>
        </div>
        <?php } ?>
        <div class="clearfix"></div>
    </div>
  </div>
</div>
<?php endwhile; ?>
