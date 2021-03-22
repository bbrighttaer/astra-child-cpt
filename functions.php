<?php 

// Add CSS
function astra_child_enqueue_scripts(){
    // Load Materialize CSS
    wp_enqueue_style( 'materialize_css', 
    'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', 
    ['astra-theme-css']);
    wp_enqueue_script( 'materialize_js', 
    'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', 
    ['astra-flexibility'], wp_get_theme()->get('Version'), 
    true );

    // Load local CSS
    wp_enqueue_style('child-style', get_stylesheet_uri(), ['materialize_css'], wp_get_theme()->get('Version'));
}
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_scripts');
?>