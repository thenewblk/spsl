<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $url['0']; ?>

<div class="page_header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/images/Classrooms_big.jpg)">
  <h2 class="page_title cm">Classrooms</h2>
  <div class="bottom_bar"></div>
</div>

<div class="container">
  <p class="top_classroom_copy">St. Pius X / St. Leo School is a school with a rich 60 year history, full of traditions. We are also a school with a vision for the future, embracing new technologies and a forward-thinking approach to education. </p>
  <div class="classrooms_container">
    <div class="left_grades">
      <?php
        $grade = get_page_by_title( 'Preschool / Pre-K', OBJECT, 'grade' );
        $loop = new WP_Query(
            array(
              'post_type' => 'classroom',
              'posts_per_page' => -1,
              'orderby' => 'meta_value_num',
              'order'   => 'ASC',
              'meta_key'  => 'grade',
              'meta_query' => array(
                array(
                    'key' => 'grade',
                    'value' => $grade->ID,
                )
              )
             )
           );
          ?>
          <?php if ( $loop->have_posts() ) {  ?>
          <div class="grade">
            <h3 class="grade_title cm">Preschool / Pre-K </h3>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php
              $username = get_field('teacher', get_the_ID());
              if ($username) {
                $userID = $username['ID'];
                $teacher_title = get_the_author_meta( 'title', $userID);
                $teacher_name = get_the_author_meta( 'display_name', $userID);
            ?>
                <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $teacher_title; ?> <?php echo $teacher_name; ?> - <?php echo get_the_title(); ?></a>
              <?php } else { ?>
                  <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
              <?php } ?>
          <?php endwhile; ?>
          </div>
        <?php } ?>
      <?php
        $grade = get_page_by_title( 'Kindergarten', OBJECT, 'grade' );
        $loop = new WP_Query(
            array(
              'post_type' => 'classroom',
              'posts_per_page' => -1,
              'orderby' => 'meta_value_num',
              'order'   => 'ASC',
              'meta_key'  => 'grade',
              'meta_query' => array(
                array(
                    'key' => 'grade',
                    'value' => $grade->ID,
                )
              )
             )
           );
          ?>
          <?php if ( $loop->have_posts() ) {  ?>
          <div class="grade">
            <h3 class="grade_title cm">Kindergarten </h3>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php
              $username = get_field('teacher', get_the_ID());
              if ($username) {
                $userID = $username['ID'];
                $teacher_title = get_the_author_meta( 'title', $userID);
                $teacher_name = get_the_author_meta( 'display_name', $userID);
            ?>
                <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $teacher_title; ?> <?php echo $teacher_name; ?> - <?php echo get_the_title(); ?></a>
              <?php } else { ?>
                  <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
              <?php } ?>
          <?php endwhile; ?>
          </div>
        <?php } ?>
      <?php
        $grade = get_page_by_title( '1st Grade', OBJECT, 'grade' );
        $loop = new WP_Query(
            array(
              'post_type' => 'classroom',
              'posts_per_page' => -1,
              'orderby' => 'meta_value_num',
              'order'   => 'ASC',
              'meta_key'  => 'grade',
              'meta_query' => array(
                array(
                    'key' => 'grade',
                    'value' => $grade->ID,
                )
              )
             )
           );
          ?>
          <?php if ( $loop->have_posts() ) {  ?>
          <div class="grade">
            <h3 class="grade_title cm">1st Grade </h3>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php
              $username = get_field('teacher', get_the_ID());
              if ($username) {
                $userID = $username['ID'];
                $teacher_title = get_the_author_meta( 'title', $userID);
                $teacher_name = get_the_author_meta( 'display_name', $userID);
            ?>
                <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $teacher_title; ?> <?php echo $teacher_name; ?> - <?php echo get_the_title(); ?></a>
              <?php } else { ?>
                  <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
              <?php } ?>
          <?php endwhile; ?>
          </div>
        <?php } ?>
      <?php
        $grade = get_page_by_title( '2nd Grade', OBJECT, 'grade' );
        $loop = new WP_Query(
            array(
              'post_type' => 'classroom',
              'posts_per_page' => -1,
              'orderby' => 'meta_value_num',
              'order'   => 'ASC',
              'meta_key'  => 'grade',
              'meta_query' => array(
                array(
                    'key' => 'grade',
                    'value' => $grade->ID,
                )
              )
             )
           );
          ?>
          <?php if ( $loop->have_posts() ) {  ?>
          <div class="grade">
            <h3 class="grade_title cm">2nd Grade </h3>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php
              $username = get_field('teacher', get_the_ID());
              if ($username) {
                $userID = $username['ID'];
                $teacher_title = get_the_author_meta( 'title', $userID);
                $teacher_name = get_the_author_meta( 'display_name', $userID);
            ?>
                <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $teacher_title; ?> <?php echo $teacher_name; ?> - <?php echo get_the_title(); ?></a>
              <?php } else { ?>
                  <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
              <?php } ?>
          <?php endwhile; ?>
          </div>
        <?php } ?>
      <?php
        $grade = get_page_by_title( '3rd Grade', OBJECT, 'grade' );
        $loop = new WP_Query(
            array(
              'post_type' => 'classroom',
              'posts_per_page' => -1,
              'orderby' => 'meta_value_num',
              'order'   => 'ASC',
              'meta_key'  => 'grade',
              'meta_query' => array(
                array(
                    'key' => 'grade',
                    'value' => $grade->ID,
                )
              )
             )
           );
          ?>
          <?php if ( $loop->have_posts() ) {  ?>
          <div class="grade">
            <h3 class="grade_title cm">3rd Grade </h3>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php
              $username = get_field('teacher', get_the_ID());
              if ($username) {
                $userID = $username['ID'];
                $teacher_title = get_the_author_meta( 'title', $userID);
                $teacher_name = get_the_author_meta( 'display_name', $userID);
            ?>
                <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $teacher_title; ?> <?php echo $teacher_name; ?> - <?php echo get_the_title(); ?></a>
              <?php } else { ?>
                  <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
              <?php } ?>
          <?php endwhile; ?>
          </div>
        <?php } ?>
        <?php
          $grade = get_page_by_title( '4th Grade', OBJECT, 'grade' );
          $loop = new WP_Query(
              array(
                'post_type' => 'classroom',
                'posts_per_page' => -1,
                'orderby' => 'meta_value_num',
                'order'   => 'ASC',
                'meta_key'  => 'grade',
                'meta_query' => array(
                  array(
                      'key' => 'grade',
                      'value' => $grade->ID,
                  )
                )
               )
             );
            ?>
            <?php if ( $loop->have_posts() ) {  ?>
            <div class="grade">
              <h3 class="grade_title cm">4th Grade </h3>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <?php
                $username = get_field('teacher', get_the_ID());
                if ($username) {
                  $userID = $username['ID'];
                  $teacher_title = get_the_author_meta( 'title', $userID);
                  $teacher_name = get_the_author_meta( 'display_name', $userID);
              ?>
                  <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $teacher_title; ?> <?php echo $teacher_name; ?> - <?php echo get_the_title(); ?></a>
                <?php } else { ?>
                    <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
                <?php } ?>
            <?php endwhile; ?>
            </div>
          <?php } ?>
    </div>
    <div class="right_grades">
      <?php
        $grade = get_page_by_title( '5th Grade', OBJECT, 'grade' );
        $loop = new WP_Query(
            array(
              'post_type' => 'classroom',
              'posts_per_page' => -1,
              'orderby' => 'meta_value_num',
              'order'   => 'ASC',
              'meta_key'  => 'grade',
              'meta_query' => array(
                array(
                    'key' => 'grade',
                    'value' => $grade->ID,
                )
              )
             )
           );
          ?>
          <?php if ( $loop->have_posts() ) {  ?>
          <div class="grade">
            <h3 class="grade_title cm">5th Grade </h3>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php
              $username = get_field('teacher', get_the_ID());
              if ($username) {
                $userID = $username['ID'];
                $teacher_title = get_the_author_meta( 'title', $userID);
                $teacher_name = get_the_author_meta( 'display_name', $userID);
            ?>
                <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $teacher_title; ?> <?php echo $teacher_name; ?> - <?php echo get_the_title(); ?></a>
              <?php } else { ?>
                  <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
              <?php } ?>
          <?php endwhile; ?>
            <a href="/grade/5th-grade" class="cm classroom homework_blog">Homework Blog</a>
          </div>
        <?php } ?>

        <?php
          $grade = get_page_by_title( '6th Grade', OBJECT, 'grade' );
          $loop = new WP_Query(
              array(
                'post_type' => 'classroom',
                'posts_per_page' => -1,
                'orderby' => 'meta_value_num',
                'order'   => 'ASC',
                'meta_key'  => 'grade',
                'meta_query' => array(
                  array(
                      'key' => 'grade',
                      'value' => $grade->ID,
                  )
                )
               )
             );
            ?>
            <?php if ( $loop->have_posts() ) {  ?>
            <div class="grade">
              <h3 class="grade_title cm">6th Grade </h3>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <?php
                $username = get_field('teacher', get_the_ID());
                if ($username) {
                  $userID = $username['ID'];
                  $teacher_title = get_the_author_meta( 'title', $userID);
                  $teacher_name = get_the_author_meta( 'display_name', $userID);
              ?>
                  <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $teacher_title; ?> <?php echo $teacher_name; ?> - <?php echo get_the_title(); ?></a>
                <?php } else { ?>
                    <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
                <?php } ?>
            <?php endwhile; ?>
              <a href="/grade/6th-grade" class="cm classroom homework_blog">Homework Blog</a>
            </div>
          <?php } ?>

          <?php
            $grade = get_page_by_title( '7th Grade', OBJECT, 'grade' );
            $loop = new WP_Query(
                array(
                  'post_type' => 'classroom',
                  'posts_per_page' => -1,
                  'orderby' => 'meta_value_num',
                  'order'   => 'ASC',
                  'meta_key'  => 'grade',
                  'meta_query' => array(
                    array(
                        'key' => 'grade',
                        'value' => $grade->ID,
                    )
                  )
                 )
               );
              ?>
              <?php if ( $loop->have_posts() ) {  ?>
              <div class="grade">
                <h3 class="grade_title cm">7th Grade </h3>
              <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php
                  $username = get_field('teacher', get_the_ID());
                  if ($username) {
                    $userID = $username['ID'];
                    $teacher_title = get_the_author_meta( 'title', $userID);
                    $teacher_name = get_the_author_meta( 'display_name', $userID);
                ?>
                    <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $teacher_title; ?> <?php echo $teacher_name; ?> - <?php echo get_the_title(); ?></a>
                  <?php } else { ?>
                      <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
                  <?php } ?>
              <?php endwhile; ?>
                <a href="/grade/7th-grade" class="cm classroom homework_blog">Homework Blog</a>
              </div>
            <?php } ?>

            <?php
              $grade = get_page_by_title( '8th Grade', OBJECT, 'grade' );
              $loop = new WP_Query(
                  array(
                    'post_type' => 'classroom',
                    'posts_per_page' => -1,
                    'orderby' => 'meta_value_num',
                    'order'   => 'ASC',
                    'meta_key'  => 'grade',
                    'meta_query' => array(
                      array(
                          'key' => 'grade',
                          'value' => $grade->ID,
                      )
                    )
                   )
                 );
                ?>
                <?php if ( $loop->have_posts() ) {  ?>
                <div class="grade">
                  <h3 class="grade_title cm">8th Grade </h3>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                  <?php
                    $username = get_field('teacher', get_the_ID());
                    if ($username) {
                      $userID = $username['ID'];
                      $teacher_title = get_the_author_meta( 'title', $userID);
                      $teacher_name = get_the_author_meta( 'display_name', $userID);
                  ?>
                      <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $teacher_title; ?> <?php echo $teacher_name; ?> - <?php echo get_the_title(); ?></a>
                    <?php } else { ?>
                        <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
                    <?php } ?>
                <?php endwhile; ?>
                  <a href="/grade/8th-grade" class="cm classroom homework_blog">Homework Blog</a>
                </div>
              <?php } ?>
    </div>
  </div>

</div>

<svg class="page_break" x="0px" y="0px" viewBox="0 0 1348.2 174" enable-background="new 0 0 1348.2 174" preserveAspectRatio="none">
  <g >
  	<polygon fill="#10202B" points="1345.3,39 603.7,0 27.6,61.4 	"/>
  	<polygon fill="#F3AE32" points="0,21 1348.2,83.1 1348.2,174 0,63 	"/>
  	<polygon opacity="0.76" fill="#209AD6" points="0,52.4 1348.2,34.7 1348.2,100.7 0,66 	"/>
  </g>
</svg>


<div class="container">
  <div class="classrooms_container">
    <div class="left_grades">
      <?php
        $grade = get_page_by_title( 'Art', OBJECT, 'grade' );
        $loop = new WP_Query(
            array(
              'post_type' => 'classroom',
              'posts_per_page' => -1,
              'orderby' => 'meta_value_num',
              'order'   => 'ASC',
              'meta_key'  => 'grade',
              'meta_query' => array(
                array(
                    'key' => 'grade',
                    'value' => $grade->ID,
                )
              )
             )
           );
          ?>
          <?php if ( $loop->have_posts() ) {  ?>
          <div class="grade">
            <h3 class="grade_title cm">Art </h3>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php
              $username = get_field('teacher', get_the_ID());
              if ($username) {
                $userID = $username['ID'];
                $teacher_title = get_the_author_meta( 'title', $userID);
                $teacher_name = get_the_author_meta( 'display_name', $userID);
            ?>
                <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $teacher_title; ?> <?php echo $teacher_name; ?> - <?php echo get_the_title(); ?></a>
              <?php } else { ?>
                  <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
              <?php } ?>
          <?php endwhile; ?>
          </div>
        <?php } ?>
        <?php
          $grade = get_page_by_title( 'P.E.', OBJECT, 'grade' );
          $loop = new WP_Query(
              array(
                'post_type' => 'classroom',
                'posts_per_page' => -1,
                'orderby' => 'meta_value_num',
                'order'   => 'ASC',
                'meta_key'  => 'grade',
                'meta_query' => array(
                  array(
                      'key' => 'grade',
                      'value' => $grade->ID,
                  )
                )
               )
             );
            ?>
            <?php if ( $loop->have_posts() ) {  ?>
            <div class="grade">
              <h3 class="grade_title cm">P.E. </h3>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <?php
                $username = get_field('teacher', get_the_ID());
                if ($username) {
                  $userID = $username['ID'];
                  $teacher_title = get_the_author_meta( 'title', $userID);
                  $teacher_name = get_the_author_meta( 'display_name', $userID);
              ?>
                  <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $teacher_title; ?> <?php echo $teacher_name; ?> - <?php echo get_the_title(); ?></a>
                <?php } else { ?>
                    <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
                <?php } ?>
            <?php endwhile; ?>
            </div>
          <?php } ?>
          <?php
            $grade = get_page_by_title( 'Spanish', OBJECT, 'grade' );
            $loop = new WP_Query(
                array(
                  'post_type' => 'classroom',
                  'posts_per_page' => -1,
                  'orderby' => 'meta_value_num',
                  'order'   => 'ASC',
                  'meta_key'  => 'grade',
                  'meta_query' => array(
                    array(
                        'key' => 'grade',
                        'value' => $grade->ID,
                    )
                  )
                 )
               );
              ?>
              <?php if ( $loop->have_posts() ) {  ?>
              <div class="grade">
                <h3 class="grade_title cm">Spanish </h3>
              <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php
                  $username = get_field('teacher', get_the_ID());
                  if ($username) {
                    $userID = $username['ID'];
                    $teacher_title = get_the_author_meta( 'title', $userID);
                    $teacher_name = get_the_author_meta( 'display_name', $userID);
                ?>
                    <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $teacher_title; ?> <?php echo $teacher_name; ?> - <?php echo get_the_title(); ?></a>
                  <?php } else { ?>
                      <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
                  <?php } ?>
              <?php endwhile; ?>
              </div>
            <?php } ?>
    </div>
    <div class="right_grades">
      <?php
        $grade = get_page_by_title( 'Music', OBJECT, 'grade' );
        $loop = new WP_Query(
            array(
              'post_type' => 'classroom',
              'posts_per_page' => -1,
              'orderby' => 'meta_value_num',
              'order'   => 'ASC',
              'meta_key'  => 'grade',
              'meta_query' => array(
                array(
                    'key' => 'grade',
                    'value' => $grade->ID,
                )
              )
             )
           );
          ?>
          <?php if ( $loop->have_posts() ) {  ?>
          <div class="grade">
            <h3 class="grade_title cm">Music </h3>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php
              $username = get_field('teacher', get_the_ID());
              if ($username) {
                $userID = $username['ID'];
                $teacher_title = get_the_author_meta( 'title', $userID);
                $teacher_name = get_the_author_meta( 'display_name', $userID);
            ?>
                <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $teacher_title; ?> <?php echo $teacher_name; ?> - <?php echo get_the_title(); ?></a>
              <?php } else { ?>
                  <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
              <?php } ?>
          <?php endwhile; ?>
          </div>
        <?php } ?>

        <?php
          $grade = get_page_by_title( 'Computer Lab', OBJECT, 'grade' );
          $loop = new WP_Query(
              array(
                'post_type' => 'classroom',
                'posts_per_page' => -1,
                'orderby' => 'meta_value_num',
                'order'   => 'ASC',
                'meta_key'  => 'grade',
                'meta_query' => array(
                  array(
                      'key' => 'grade',
                      'value' => $grade->ID,
                  )
                )
               )
             );
            ?>
            <?php if ( $loop->have_posts() ) {  ?>
            <div class="grade">
              <h3 class="grade_title cm">Computer Lab </h3>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <?php
                $username = get_field('teacher', get_the_ID());
                if ($username) {
                  $userID = $username['ID'];
                  $teacher_title = get_the_author_meta( 'title', $userID);
                  $teacher_name = get_the_author_meta( 'display_name', $userID);
              ?>
                  <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $teacher_title; ?> <?php echo $teacher_name; ?> - <?php echo get_the_title(); ?></a>
                <?php } else { ?>
                    <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
                <?php } ?>
            <?php endwhile; ?>
            </div>
          <?php } ?>

          <?php
            $grade = get_page_by_title( 'Library', OBJECT, 'grade' );
            $loop = new WP_Query(
                array(
                  'post_type' => 'classroom',
                  'posts_per_page' => -1,
                  'orderby' => 'meta_value_num',
                  'order'   => 'ASC',
                  'meta_key'  => 'grade',
                  'meta_query' => array(
                    array(
                        'key' => 'grade',
                        'value' => $grade->ID,
                    )
                  )
                 )
               );
              ?>
              <?php if ( $loop->have_posts() ) {  ?>
              <div class="grade">
                <h3 class="grade_title cm">Library </h3>
              <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php
                  $username = get_field('teacher', get_the_ID());
                  if ($username) {
                    $userID = $username['ID'];
                    $teacher_title = get_the_author_meta( 'title', $userID);
                    $teacher_name = get_the_author_meta( 'display_name', $userID);
                ?>
                    <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo $teacher_title; ?> <?php echo $teacher_name; ?> - <?php echo get_the_title(); ?></a>
                  <?php } else { ?>
                      <a class="classroom" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
                  <?php } ?>
              <?php endwhile; ?>
              </div>
            <?php } ?>

    </div>
  </div>

</div>
