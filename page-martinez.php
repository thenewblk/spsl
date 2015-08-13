<?php
/**
 * Template Name: Martinez Page Template
 */
?>
<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $url['0']; ?>

<div class="page_header" style="background-image: url(<?php echo $url ?>)">
  <h2 class="page_title cm">Classroom 7b <br /><?php the_title(); ?></h2>
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
      <div class="homework_entry">
        <h2 class="homework_date">WEDNESDAY AUGUST 12TH, 2015</h2>
        <p class="homework_copy">
          <b>Music</b> - No assignment. <br />
          <b>Geography</b> - No assignment. <br />
          <b>Spanish</b> - No assignment. <br />
          <b>Science</b> - Missing and Redo assignments due Wednesday <br />
          <b>Math Mod 1</b> - Practice 9-1 WS <br />
          <b>Math Mods 2 & 4</b> - Practice 7-2 WS <br />
          <b>Religion (Harrison)</b> - Prolife letter is due tomorrow. <br />
          <b>Vocabulary (Rix)</b> - Study for cumulative final Wednesday.
          See me if you would like to borrow flash cards to help you. <br />
          <b>Literature (Rix)</b> -No assignment. Read for pleasure. <br />
          <b>English</b> - Complete both sides of the worksheet;
          be sure to follow directions given during class.
          Study for the indefinite pronoun quiz scheduled for
          Wednesday. <br />
          <b>Literature (Martinez)</b> - "I Believe" personal creed is due
          Wednesday in your treasure box journal. Listen to this
          really inspiring story to help you out! :)
        </p>
      </div>
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
      <div class="newsletter_item">
        <h2 class="centered title">WE WENT ON A FIELD TRIP!</h2>
        <img class="full_bleed" src="<?php echo get_template_directory_uri(); ?>/dist/images/photo-original.png" />
        <p class="centered_text">Last Friday we went to the park. We hiked and at our packed lunches on the grassy hill. It was so much fun. We saw some deer and the students caught a frog and other insects while exploring nature. More text, more text,more text, more text, more text, more text, more text,more text, more text, more text, more text, more text, more text, more text, more text,more text, more text, more text, more text, more text, more text, more text, more text,more text, more text, more text, more text, more text, more text...<b>Read More>> </b></p>
      </div>
      <div class="newsletter_item">
        <h2 class="centered title">WE WENT ON A FIELD TRIP!</h2>
        <img class="full_bleed" src="<?php echo get_template_directory_uri(); ?>/dist/images/photo-original.png" />
        <p class="centered_text">Last Friday we went to the park. We hiked and at our packed lunches on the grassy hill. It was so much fun. We saw some deer and the students caught a frog and other insects while exploring nature. More text, more text,more text, more text, more text, more text, more text,more text, more text, more text, more text, more text, more text, more text, more text,more text, more text, more text, more text, more text, more text, more text, more text,more text, more text, more text, more text, more text, more text...<b>Read More>> </b></p>
      </div>
    </div>
  </div>
  <div class="teacher">
    <img class="teacher_image" src="<?php echo get_template_directory_uri(); ?>/dist/images/example_teacher.png" />
    <p>Hi, I am Mrs. Martinez. I like dogs & camping. I’ve been a teacher for 6 years. I love how creative and intelligent young students can be. I think learning should be and can be a lot of fun!</p>
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
