<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // Chargement du themeChild.css thème personnalisé
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
    // Chargement de mon script.js thème enfant
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);
}
?>