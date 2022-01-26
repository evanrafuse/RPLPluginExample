<?php
/**
* Plugin Name: Plugin Example
* Description: This is a plugin I created to demonstrate I can create plugins for an RPL. Just post an image and put "outerspace" as the class. You will become an alien.
* Version: 1.0
* Author: Evan Rafuse
* Author URI: http://evanrafuse.ca
**/

function spaceship_css() {
    $imgpath = plugin_dir_url( __FILE__ ) . 'lyingsaucer.png';
    echo "
    <style type='text/css'>
    .outerspace img {
        cursor: url($imgpath), auto;
        background-color: #FFFFFF;
    }
    </style>
    ";
}

add_action( 'wp_head', 'spaceship_css' );