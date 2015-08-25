<?php
/**
 * Template Name: Parishes Page
 */
?>
<div class="page_header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/images/Parishes_Big.jpg)">
  <h2 class="page_title cm"><?php the_title(); ?></h2>
  <div class="bottom_bar"></div>
</div>

<div class="container">
  <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
  <div class="color_band_headline">
    <h3 class="band_headline">St. Pius X And St. Leo</h3>
    <svg version="1.1" class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 1043 135.3" enable-background="new 0 0 1043 135.3" xml:space="preserve" preserveAspectRatio="none">
      <g>
        <polygon opacity="0.76" fill="#209AD6" points="9.8,14.2 1043,40.4 1041.5,133.8 5.2,122.7 	"/>
        <polygon fill="#F3AE32" points="24,37.9 753.9,14.7 1041.1,65 	"/>
        <polygon fill="#10202B" points="0,0 1042.7,58.2 1042.7,135.3 5.2,135.3 	"/>
      </g>
    </svg>
  </div>

  <div class='embed-container'><iframe src='https://player.vimeo.com/video/136860090' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>

  <p>The school is supported by two parishes - St. Pius X and St. Leo.  Here are the links for these two parishes. Fr. Eckley and Fr. Loecker welcome you to browse their respective parish’s web sites. You will find Mass schedules, information about each parish and ideas on how to get involved. The parishes also offer various sports programs. Please check out the links above to find out more about thes programs and how to get your child involved.</p>
  <p>The school is supported by two parishes - St. Pius X and St. Leo.  Here are the links for these two parishes. Fr. Eckley and Fr. Loecker welcome you to browse their respective parish’s web sites.  </p>

  <?php endwhile; ?>
</div>
