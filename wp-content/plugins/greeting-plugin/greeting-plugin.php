<?php
/**
 * Plugin Name: Greeting Plugin
 * Description: plugin that adds a shortcode to display a welcome message
 * Version: 1.0
 * Author: Nikko Bondoc
 */

if (!defined('ABSPATH')) {
    exit; 
}



// greeting message
function bgp_greeting_shortcode() {
    return "Welcome to My Site!";
}

// Register the shortcode
add_shortcode('mygreeting', 'bgp_greeting_shortcode');

// posts are dynamic regularly updated content, pages are static doesnt change that often.