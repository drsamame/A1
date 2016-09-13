<?php
/*-----------------Registrar los menus-----------------*/
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );
/*-----------------Registrar los menus-----------------*/

/*-----------------Thumbnails-----------------*/
add_theme_support('post-thumbnails');
add_image_size('slider_thumbs',800,500,TRUE);
add_image_size('sidebar_thumbs',60,60,TRUE);
add_image_size('list_articles_thumbs',400,400,TRUE);
add_image_size('detaill_articles_thumbs',700,400,TRUE);
/*-----------------Thumbnails-----------------*/