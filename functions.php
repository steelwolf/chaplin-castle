<?php
add_action( 'wp_enqueue_scripts', 'chaplin_castle_enqueue_styles' );
function chaplin_castle_enqueue_styles() {
  wp_enqueue_style( 'child-style', get_stylesheet_uri(),
    array( 'chaplin-style' ),
    wp_get_theme()->get('Version') // this only works if you have Version in the style header
  );
}
