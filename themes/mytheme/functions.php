<?php
// Theme setup
function my_theme_setup() {
    // Add dynamic title tag support
    add_theme_support('title-tag');
}
 
add_action('after_setup_theme', 'my_theme_setup');