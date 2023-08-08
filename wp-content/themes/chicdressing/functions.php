<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );



// Remove Google Fonts

add_action( 'wp_print_styles', 'remove_google_fonts', 100 );
function remove_google_fonts() {
    $handles = array( 'ashe-playfair-font', 'ashe-opensans-font', 'ashe-kalam-font');

    foreach($handles as $googlefont){
        wp_deregister_style( $googlefont );
    }
}



// Charger les fonts qui sont dans le théme enfant

wp_register_style( 'chicdressing-fonts', get_stylesheet_directory_uri().'/fonts/fonts.css' );
wp_enqueue_style( 'chicdressing-fonts' );


 