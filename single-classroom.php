
<?php while ( have_posts() ) : the_post(); ?>
<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $url['0']; ?>
<?php $this_classroom = get_the_title($post); ?>
<div class="page_header" style="background-image: url(<?php echo $url ?>)">
  <h2 class="page_title cm">Classroom <?php echo $this_classroom; ?><br /><?php echo get_the_author_meta( 'title' ); ?> <?php echo get_the_author_meta( 'display_name' ); ?></h2>
  <div class="bottom_bar"></div>
</div>

<div class="martinez_container">
  <div class="main">
    <div class="main_wrapper">
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

      <?php query_posts('post_type=homework&showposts=-1'); ?>
    		<?php while ( have_posts() ) : the_post(); ?>
          <?php $post_object = get_field('classroom');
            if( $post_object && (get_the_title( $post_object ) == $this_classroom ) ): ?>
                <div class="homework_entry">
                  <h2 class="homework_date"><?php the_title(); ?></h2>
                  <div class="homework_copy"><?php the_content(); ?></div>
                </div>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
    		<?php endwhile; ?>
      <?php wp_reset_query(); ?>

      <a href="#" class="slim_button red"><span class="slim_wrapper">7th Grade Homework Blog</span></a>
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
      <?php query_posts('post_type=newsletter&showposts=-1'); ?>
    		<?php while ( have_posts() ) : the_post(); ?>
          <?php $post_object = get_field('classroom');
            if( $post_object && (get_the_title( $post_object ) == $this_classroom ) ): ?>
                <div class="newsletter_item">
                  <h2 class="centered title"><?php the_title(); ?></h2>
                  <?php echo get_the_post_thumbnail( $post_object ); ?>
                  <div class="centered_text"><?php the_content(); ?></div>
                </div>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
    		<?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
  <div class="teacher">
    <img class="teacher_image" src="<?php echo get_template_directory_uri(); ?>/dist/images/example_teacher.png" />
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
      <a class="teacher_link cm" href="#">Classroom 7b Home</a>
      <a class="teacher_link cm" href="#">Classroom Resources</a>
      <a class="teacher_link cm" href="#">Homework Help</a>
      <a class="teacher_link cm" href="#">Classroom Needs List</a>
      <a class="teacher_link cm" href="#">Spelling List</a>
      <a class="teacher_link cm" href="#">Archives</a>
    </div>
    <div class="classroom_events">
      <div class="classroom_event">
        <div class="day">Wednesday</div>
        <div class="bottom">
          <div class="date">
            <span class="month">September</span>
            <span class="number">9</span>
          </div>
          <div class="title">Game day</div>
        </div>
      </div>
      <div class="classroom_event">
        <div class="day">Wednesday</div>
        <div class="bottom">
          <div class="date">
            <span class="month">September</span>
            <span class="number">9</span>
          </div>
          <div class="title">Game day</div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
