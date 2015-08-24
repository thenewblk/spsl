<?php
/**
 * Template Name: Considering Page
 */
?>
<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $url['0']; ?>

<div class="page_header" style="background-image: url(<?php echo $url ?>)">
  <h2 class="page_title cm"><?php the_title(); ?></h2>
  <div class="bottom_bar"></div>
</div>


<div class="container">

  <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
  <?php endwhile; ?>


  <div class="color_band_headline">
    <h3 class="band_headline">More than a School, <br />It's a Community.</h3>
    <svg version="1.1" class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 1043 135.3" enable-background="new 0 0 1043 135.3" xml:space="preserve" preserveAspectRatio="none">
      <g>
        <polygon opacity="0.76" fill="#209AD6" points="9.8,14.2 1043,40.4 1041.5,133.8 5.2,122.7 	"/>
        <polygon fill="#F3AE32" points="24,37.9 753.9,14.7 1041.1,65 	"/>
        <polygon fill="#10202B" points="0,0 1042.7,58.2 1042.7,135.3 5.2,135.3 	"/>
      </g>
    </svg>
  </div>

  <h3>Home to a diverse group of happy, high-achieving students, passionate teachers and staff, and actively-involved parents, St. Pius X / St. Leo is a true community – dedicated to preparing every child for a lifetime of learning and service to others. </h3>
  <p>We emphasize critical thinking, faith, and service. In addition to a traditional core curriculum, we offer art, music, foreign language and technology classes.</p>
  <p>Serving midtown Omaha, the school also draws from all over the metro area, with some families choosing to travel a considerable distance to send their children here. With over 6,000 alumni, It is not uncommon to find second and even third generation SPSL students. At the same time, we actively recruit new families to the St. Pius X / St. Leo community.</p>

  <img class="full_width" src="<?php echo get_template_directory_uri(); ?>/dist/images/video_placeholder.png" />

  <div class="color_band_headline">
    <h3 class="band_headline">St. Pius x / St. Leo at a Glance.</h3>
    <svg version="1.1" class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 1043 135.3" enable-background="new 0 0 1043 135.3" xml:space="preserve" preserveAspectRatio="none">
      <g>
        <polygon opacity="0.76" fill="#209AD6" points="9.8,14.2 1043,40.4 1041.5,133.8 5.2,122.7 	"/>
        <polygon fill="#F3AE32" points="24,37.9 753.9,14.7 1041.1,65 	"/>
        <polygon fill="#10202B" points="0,0 1042.7,58.2 1042.7,135.3 5.2,135.3 	"/>
      </g>
    </svg>
  </div>

  <div class="container">
    <ul class="features">
      <li>Proud history – founded in 1956, fully accredited, over 6,000 alumni</li>
      <li>Pre-K through 8th grade</li>
      <li>Affordable tuition</li>
      <li>Before and after school Extended Care program</li>
      <li>Small class size – average class is 22 students</li>
      <li>Dedicated, trained faculty – 37% have master’s degrees</li>
      <li>Diverse student body, ethnically and socioeconomically</li>
      <li>Strong Catholic faith foundation – liturgical celebrations are an integral part of our school life; 85% of students move onto Catholic High School.</li>
      <li>Academic excellence & emotional well-being – high achieving students are challenged by the curriculum and special programs; individual needs of students are met through an adapted curriculum; counselors and mentors are available to students who need them. </li>
      <li>Extensive family involvement – strong parent involvement through volunteerism.</li>
      <li>Modern facilities – computer labs integrated into the curriculum</li>
    </ul>
  </div>

  <div class="color_band_headline">
    <h3 class="band_headline">Voices of SPSL</h3>
    <svg class="color_band" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 1386.8 123.1" enable-background="new 0 0 1386.8 123.1" xml:space="preserve" preserveAspectRatio="none">
      <g>
        <polygon fill="#88171A" points="96,72 933.1,4.5 1384.4,50.5 	"/>
        <polygon fill="#F7B132" points="33.9,14.6 1386.8,25.2 1384.9,121.6 0,110.1 	"/>
        <polygon fill="#10202B" points="20.8,0 1386.5,43.6 1386.5,123.1 0,123.1 	"/>
      </g>
    </svg>
  </div>

</div>
