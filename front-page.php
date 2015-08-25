<?php
/**
 * Template Name: Home Page Template
 */
?>

<?php
  $now = new DateTime();
  $featured_lunch = new WP_Query(
          array(
            'post_type' => 'lunch_item',
            'posts_per_page' => 1,
            'orderby' => 'meta_value_num',
            'order'   => 'ASC',
            'meta_key'  => 'lunch_date',
            'meta_query' => array(
                array(
                    'key' => 'lunch_date',
                    'value' => $now->format('Ymd'),
                )
              )
          )
        );
        $post_count = 0;

?>


  <div class="stained_glass">
    <div class="top_glass">
      <div class="left_glass">
        <div class="left_top">
          <a href="/lunch" class="pane lunch">
            <span class="pane_content">What's for Lunch?
              <?php if ($featured_lunch->have_posts()) { while ( $featured_lunch->have_posts() ) : $featured_lunch->the_post(); ?>
                <br />Today: <?php echo get_the_title(); ?>
              <?php endwhile; } ?>
            </span>
            <span class="overlay"><span class="overlay_border"></span></span>
          </a>
        </div>
        <div class="left_middle">
          <a href="/school-calendar" class="pane happening">
            <span class="pane_content">What's Happening This Week?</span>
            <span class="overlay"><span class="overlay_border"></span></span>
          </a>
        </div>
        <div class="left_bottom">
          <a href="/clubs-sports-and-activities" class="pane clubs">
            <span class="pane_content">Clubs, Sports & Activities</span>
            <span class="overlay"><span class="overlay_border"></span></span>
          </a>
        </div>
      </div>
      <div class="right_glass">
        <div class="right_top">
          <div class="right_left">
            <a href="/gallery" class="pane gallery">
              <span class="pane_content">Gallery</span>
              <span class="overlay"><span class="overlay_border"></span></span>
            </a>
          </div>
          <div class="right_right">
            <div class="right_right_top">
              <a href="/for-parents/" class="pane families">
                <span class="pane_content">For Parents</span>
                <span class="overlay"><span class="overlay_border"></span></span>
              </a>
            </div>
            <div class="right_right_bottom">
              <a href="/classroom/" class="pane classrooms">
                <span class="pane_content">Classrooms</span>
                <span class="overlay"><span class="overlay_border"></span></span>
              </a>
            </div>
          </div>
        </div>
        <div class="right_bottom">
          <div class="right_bottom_left">
            <a href="/the-spsl-story/" class="pane story">
              <span class="pane_content">The SPSL Story</span>
              <span class="overlay"><span class="overlay_border"></span></span>
            </a>
          </div>
          <div class="right_bottom_right">
            <a href="/considering-spsl/" class="pane considering">
              <span class="pane_content">Considering SPSL?</span>
              <span class="overlay"><span class="overlay_border"></span></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom_glass">
      <div class="bottom_left">
        <a href="/spslomaha" class="pane spslomaha">
          <span class="pane_content">#SPSLOMAHA</span>
          <span class="overlay"><span class="overlay_border"></span></span>
        </a>
      </div>
      <div class="bottom_middle">
        <a href="/parishes" class="pane parishes">
          <span class="pane_content">Parishes</span>
          <span class="overlay"><span class="overlay_border"></span></span>
        </a>
      </div>
      <div class="bottom_right">
        <a href="/ways-to-support" class="pane support">
          <span class="pane_content">Ways to Support</span>
          <span class="overlay"><span class="overlay_border"></span></span>
        </a>
      </div>
    </div>
  </div>
