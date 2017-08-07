<?php
//Mostrando el menu de configuracion de wordpress
show_admin_bar(true);

// Menus del tema
add_action( 'init', 'ap_arose_menus' );

function ap_arose_menus(){
  register_nav_menus( $locations = array(
    'menu-principal' => __('Menu Principal', 'lapizzeria'),
    'menu-social' => __('Menu Redes Sociales', 'lapizzeria')

  ));
}

//Configuracion del tema
add_action( 'after_setup_theme', 'ap_arose_setup');

function ap_arose_setup(){
  add_theme_support( 'post-thumbnails' );
}

require_once('wp_bootstrap_navwalker.php');

?>
