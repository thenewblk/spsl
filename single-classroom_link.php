
<?php while ( have_posts() ) : the_post(); ?>
  <?php $this_classroom = get_the_title($post); ?>
<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $url['0']; ?>
<div class="page_header" style="background-image: url(<?php echo $url ?>)">
  <h2 class="page_title cm"><?php echo get_the_title($post);; ?><br /><?php echo get_the_author_meta( 'title' ); ?> <?php echo get_the_author_meta( 'display_name' ); ?></h2>
  <div class="bottom_bar"></div>
</div>

<div class="martinez_container">
  <div class="main">
    <div class="main_wrapper">
      <div class="color_band_headline">
        <h3 class="band_headline"><?php echo get_the_title($post);; ?></h3>
        <svg version="1.1" class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 1043 135.3" enable-background="new 0 0 1043 135.3" xml:space="preserve" preserveAspectRatio="none">
          <g>
            <polygon opacity="0.76" fill="#209AD6" points="9.8,14.2 1043,40.4 1041.5,133.8 5.2,122.7 	"/>
            <polygon fill="#F3AE32" points="24,37.9 753.9,14.7 1041.1,65 	"/>
            <polygon fill="#10202B" points="0,0 1042.7,58.2 1042.7,135.3 5.2,135.3 	"/>
          </g>
        </svg>
      </div>
      <?php echo the_content($post); ?>
    </div>
  </div>
  <div class="teacher">
    <?php

      $author_id = get_the_author_meta('ID');
      $author_badge = get_field('profile_picture', 'user_'. $author_id );

    ?>
    <img class="teacher_image" src="<?php echo $author_badge['url']; ?>" alt="<?php echo $author_badge['alt']; ?>" />
    <p><?php echo get_the_author_meta( 'description'); ?></p>
    <div class="icons">
      <a href="#" class="icon twitter">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/twitter.svg" />
      </a>
      <a href="#" class="icon facebook">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/facebook.svg" />
      </a>
      <a href="#" class="icon instagram">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/instagram.svg" />
      </a>
    </div>
    <div class="teacher_links">
      <a class="teacher_link cm" href="/classroom/<?php echo get_the_title( get_field('classroom')); ?>">Classroom <?php echo get_the_title( get_field('classroom')); ?> Home</a>
      <?php $loop = new WP_Query( array( 'post_type' => 'classroom_link', 'posts_per_page' => -1  ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <?php $post_object = get_field('classroom');
            if( $post_object && (get_the_title( $post_object ) == $this_classroom ) ): ?>
                <a class="teacher_link cm" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title($post); ?></a>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
        <?php endwhile; ?>
      <?php wp_reset_query(); ?>
      <a class="teacher_link cm" href="#">Classroom Resources</a>
      <a class="teacher_link cm" href="#">Homework Help</a>
      <a class="teacher_link cm" href="#">Classroom Needs List</a>
      <a class="teacher_link cm" href="#">Spelling List</a>
      <a class="teacher_link cm" href="#">Archives</a>
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
