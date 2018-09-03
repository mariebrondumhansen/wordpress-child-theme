

<?php
//-------------------------------------------------------------------------Her loader vi parent themet ind-------------------------------------------------------------------------------------------------------
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // Her loades parent-themet Twenty seventeen.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', );
    //Her loader vi child themet ind 
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version'))
         
        ;
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
//-------------------------------------------------------------------------end------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------Her loader vi fonten open sans fra google fonts----------------------------------------------------------------------------------
//hjælp fra https://www.wpbeginner.com/wp-themes/how-add-google-web-fonts-wordpress-themes/
function wpb_add_google_fonts() {
 
wp_enqueue_style( 'wpb-google-fonts', 'http://fonts.googleapis.com/css?family=Coming+Soon:300italic,400italic,700italic,400,700,300', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

//-------------------------------------------------------------------------end------------------------------------------------------------------------------------------------------
?>

<!--her loades alle css og js filer der tilhører matrial-design/bootstrap -->

