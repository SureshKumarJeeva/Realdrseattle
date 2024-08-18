<?php

add_action("wp_enqueue_scripts", "initilize");

function initilize(){
    wp_enqueue_style("child-theme-style", get_stylesheet_directory_uri().'/style.css');
}
