
<?php while ( have_posts() ) : the_post(); ?>
<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $url['0']; ?>
<?php $this_classroom = get_the_title($post); ?>
<div class="page_header" style="background-image: url(<?php echo $url ?>)">
  <h2 class="page_title cm"><?php echo $this_classroom; ?><br />
    <?php
      $username = get_field('teacher');
      if ($username) {
        $userID = $username['ID'];
        $teacher_title = get_the_author_meta( 'title', $userID);
        $teacher_name = get_the_author_meta( 'display_name', $userID);
    ?>

      <?php echo $teacher_title; ?> <?php echo $teacher_name; ?></h2>
      <?php } else { ?></h2><?php } ?>

  <div class="bottom_bar"></div>
</div>

<div class="martinez_container">
  <div class="main">
    <div class="main_wrapper">
      <?php
        $now = date('Ymd');
        if (get_field('grade')) {
        $homework_loop = new WP_Query( array(
                  'post_type' => 'homework',
                  'posts_per_page' => 1,
                  'orderby' => 'meta_value_num',
                  'order'   => 'ASC',
                  'meta_key'  => 'grade',
                  'meta_query' => array(
                    'relation'		=> 'AND',
                    array(
                        'key' => 'due_date',
                        'value' => $now,
                        'compare' => '>=',
                    ),
                    array(
                        'key' => 'grade',
                        'value' => get_field('grade')->ID,
                    )
                  )
                 )
              );

        if ($homework_loop->have_posts()) :?>

        <div class="color_band_headline">
          <h3 class="band_headline">Homework</h3>
          <svg version="1.1" class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1043 135.3" enable-background="new 0 0 1043 135.3" xml:space="preserve" preserveAspectRatio="none">
            <g>
              <polygon opacity="0.76" fill="#209AD6" points="9.8,14.2 1043,40.4 1041.5,133.8 5.2,122.7 	"/>
              <polygon fill="#F3AE32" points="24,37.9 753.9,14.7 1041.1,65 	"/>
              <polygon fill="#10202B" points="0,0 1042.7,58.2 1042.7,135.3 5.2,135.3 	"/>
            </g>
          </svg>
        </div>

        <?php while ($homework_loop->have_posts()) : $homework_loop->the_post(); ?>
          <div class="homework_entry">
            <h2 class="homework_date"><?php the_title(); ?></h2>
            <div class="homework_copy"><?php the_content(); ?></div>
          </div>
        <?php endwhile;   ?>

        <?php $grade = get_field('grade')->post_title;
          switch ($grade) {
            case "5th Grade": ?>
              <a href="/grade/5th-grade/" class="slim_button red"><span class="slim_wrapper">5th Grade Homework Blog</span></a>
        <?php break;
            case "6th Grade": ?>
              <a href="/grade/6th-grade/" class="slim_button red"><span class="slim_wrapper">6th Grade Homework Blog</span></a>
        <?php break;
            case "7th Grade": ?>
              <a href="/grade/7th-grade/" class="slim_button red"><span class="slim_wrapper">7th Grade Homework Blog</span></a>
        <?php break;
            case "8th Grade": ?>
              <a href="/grade/8th-grade/" class="slim_button red"><span class="slim_wrapper">8th Grade Homework Blog</span></a>
        <?php break;
          }
        ?>

      <?php wp_reset_query(); else :  endif; } ?>

      <!-- <a href="#" class="slim_button red"><span class="slim_wrapper">7th Grade Homework Blog</span></a> -->

      <?php
        $newsletter_loop = new WP_Query( array(
                  'post_type' => 'newsletter',
                  'posts_per_page' => 1,
                  'orderby' => 'meta_value_num',
                  'order'   => 'ASC',
                  'meta_key'  => 'classroom',
                  'meta_query' => array(
                    array(
                        'key' => 'classroom',
                        'value' => get_the_ID(),
                    )
                  )
                 )
              );
      // query_posts('post_type=newsletter&showposts=-1'); if (have_posts()) {
      if ($newsletter_loop->have_posts()) :?>
        <div class="color_band_headline">
          <h3 class="band_headline">Newsletter</h3>
          <svg version="1.1" class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1043 135.3" enable-background="new 0 0 1043 135.3" xml:space="preserve" preserveAspectRatio="none">
            <g>
              <polygon opacity="0.76" fill="#209AD6" points="9.8,14.2 1043,40.4 1041.5,133.8 5.2,122.7 	"/>
              <polygon fill="#F3AE32" points="24,37.9 753.9,14.7 1041.1,65 	"/>
              <polygon fill="#10202B" points="0,0 1042.7,58.2 1042.7,135.3 5.2,135.3 	"/>
            </g>
          </svg>
        </div>
    		<?php while ( $newsletter_loop->have_posts() ) : $newsletter_loop->the_post(); ?>
                <div class="newsletter_item">
                  <h2 class="centered title"><?php the_title(); ?></h2>
                  <?php echo get_the_post_thumbnail(  ); ?>
                  <div class="centered_text"><?php the_content(); ?></div>
                </div>
    		<?php endwhile; ?>

      <?php wp_reset_query(); else :  endif; ?>
    </div>
  </div>
  <div class="teacher">

    <?php
      $username = get_field('teacher');
      if ($username) {
		    $userID = $username['ID'];
        $author_badge = get_field('profile_picture', 'user_'. $userID );
        $teacher_desc = get_the_author_meta( 'description', $userID);
    ?>

      <img class="teacher_image" src="<?php echo $author_badge['url']; ?>" alt="<?php echo $author_badge['alt']; ?>" />
      <p><?php echo $teacher_desc; ?></p>
      <?php } else {} ?>


    <div class="icons">
      <?php if ( get_field('twitter') ) { ?>
      <a href="<?php echo get_field('twitter');?> " class="icon twitter">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/twitter.svg" />
      </a>
      <?php } ?>
      <?php if ( get_field('facebook') ) { ?>
      <a href="<?php echo get_field('facebook');?> " class="icon facebook">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/facebook.svg" />
      </a>
      <?php } ?>
      <?php if ( get_field('instagram') ) { ?>
      <a href="<?php echo get_field('instagram');?> " class="icon instagram">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/instagram.svg" />
      </a>
      <?php } ?>
    </div>
    <div class="teacher_links">
      <a class="teacher_link cm" href="#"><?php echo get_the_title( get_field('classroom')); ?> Home</a>
      <?php $loop = new WP_Query(
          array(
            'post_type' => 'classroom_link',
            'posts_per_page' => -1,
            'orderby' => 'meta_value_num',
            'order'   => 'ASC',
            'meta_key'  => 'classroom',
            'meta_query' => array(
              array(
                  'key' => 'classroom',
                  'value' => get_the_ID(),
              )
            )
           )
         ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <a class="teacher_link cm" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
        <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </div>
    <div class="classroom_events">
      <?php $loop = new WP_Query( array( 'post_type' => 'event', 'posts_per_page' => 5 , 'orderby' => 'meta_value_num', 'order'   => 'ASC', 'meta_key'  => 'event_date' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <?php $post_object = get_field('classroom');
            if( $post_object && (get_the_title( $post_object ) == $this_classroom ) ): ?>
                <div class="classroom_event">
                  <div class="day"><?php $date = new DateTime(get_field( 'event_date' )); echo $date->format('l'); ?></div>
                  <div class="bottom">
                    <div class="date">
                      <span class="month"><?php $date = new DateTime(get_field( 'event_date' )); echo $date->format('F'); ?></span>
                      <span class="number"><?php $date = new DateTime(get_field( 'event_date' )); echo $date->format('d'); ?></span>
                    </div>
                    <div class="title"><?php echo get_the_title($post); ?></div>
                  </div>
                </div>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
        <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</div>
<?php endwhile; ?>
