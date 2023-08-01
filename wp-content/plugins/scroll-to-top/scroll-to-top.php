<?php
/*
Plugin Name: Scroll to Top Plugin
Description: Adds a scroll-to-top button on your website.
Version: 1.0
Author: Your Name
*/

// Enqueue the necessary scripts and styles
function scroll_to_top_enqueue_scripts() {
    // Enqueue jQuery
    wp_enqueue_script('jquery');

    // Enqueue custom script for scroll-to-top functionality
    wp_enqueue_script('scroll-to-top-script', plugin_dir_url(__FILE__) . 'scroll-to-top.js', array('jquery'), '1.0', true);

    // Enqueue custom CSS for scroll-to-top button styles
    wp_enqueue_style('scroll-to-top-style', plugin_dir_url(__FILE__) . 'css/scroll-to-top.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'scroll_to_top_enqueue_scripts');

function scroll_to_top_button_html() {
    return '<button id="scrollToTopBtn"><i class="fa-solid fa-arrow-up"></i></button>';
}
function scroll_to_top_shortcode() {
    return scroll_to_top_button_html();
}
add_shortcode('scroll_to_top', 'scroll_to_top_shortcode');

function scroll_to_top_add_button() {
    echo scroll_to_top_button_html();
}
add_action('wp_footer', 'scroll_to_top_add_button');