<?php if(is_front_page()){ ?>
<div class="home_stained_wrapper">
<?php } ?>
<header class="banner" role="banner">
    <div class="main_header">
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/spsl_logo.svg" /></a>
      <div class="mission">
        <h3 class="mission_headline cm">More Than a School, It's a Community.</h3>
      </div>
      <span class="menu_button">
        <img class="navicon" src="<?php echo get_template_directory_uri(); ?>/dist/images/navicon.svg" />
        <span class="menu_word">MENU</span>
      </span>
  </div>
</header>
<div class="menu_overlay"></div>
<nav class="menu_sidebar" role="navigation">
  <span class="close_menu_button">×</span>
  <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
    endif;
  ?>
</nav>
