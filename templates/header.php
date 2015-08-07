<header class="banner" role="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/spsl_logo.svg" /></a>
    <div class="mission">
      <h3 class="mission_headline">Our Mission</h3>
      <p class="mission_copy">Adfkj ahs dkfjh alksdjfh asdfkjh asdflkjh asdlfkjh asdlkfjh asdlkfjh asdkfjh asdkfjh.</p>
    </div>
    <span class="menu_button">MENU</span>
    <nav role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
      ?>
    </nav>
  </div>
</header>
