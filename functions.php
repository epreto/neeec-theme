<?php

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Nav-bar menu
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

// Add thumbnails menu
add_theme_support( 'post-thumbnails' );
 ?>
