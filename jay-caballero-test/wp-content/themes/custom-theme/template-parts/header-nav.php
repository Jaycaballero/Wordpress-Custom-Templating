<?php
  wp_nav_menu( array(
    'theme_location'  => 'main_menu',
    'depth'           => 2,
    'container'       => 'div',
    'container_id'    => 'navbarNavDropdown',
    'container_class' => 'collapse navbar-collapse',
    'menu_class'      => 'nav navbar-nav',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker()
  ) );
?>
